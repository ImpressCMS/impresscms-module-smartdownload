<?php
/* $Id: search.inc.php,v 1.8 2007/08/13 18:05:17 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

function wfdownloads_search($queryarray, $andor, $limit, $offset, $userid = 0)
{
	global $xoopsUser;
    include_once XOOPS_ROOT_PATH.'/modules/wfdownloads/include/functions.php';

    $module_handler = xoops_gethandler('module');
    $wfModule = $module_handler->getByDirname("wfdownloads");
    $groups = $xoopsUser ? $xoopsUser->getGroups() : XOOPS_GROUP_ANONYMOUS;

    $gperm_handler = xoops_gethandler('groupperm');
    $allowed_cats = $gperm_handler->getItemIds("WFDownCatPerm", $groups, $wfModule->getVar('mid'));

    $criteria = new CriteriaCompo(new Criteria("cid", "(".implode(',', $allowed_cats).")", "IN"));
    if ($userid != 0)
    {
        $criteria->add(new Criteria("submitter", intval($userid)));
    }

	// changed and added - start - April 23, 2006 - jwe
    // moved these up here since we need to complete the $criteria object a little sooner now
    $criteria->setSort("published");
    $criteria->setOrder("DESC");

    // because count() returns 1 even if a supplied variable
    // is not an array, we must check if $querryarray is really an array
    $count = 0;
    if ((is_array($queryarray) && $count = count($queryarray)) OR $userid != 0) // $userid != 0 added August 13 2007 -- ACCOUNTS FOR CASES WHERE THERE ARE NO QUERY TERMS BUT A USER ID IS PASSED -- FREEFORM SOLUTIONS
    {
		if ($count == 0)
		{
        	$count = 1; // AUGUST 13 2007 -- MAKE COUNT EQUAL 1 SINCE WE HAVE TO DO AT LEAST ONE SEARCH (BASED ON USER ID) EVEN IF THERE ARE NO QUERY TERMS -- FREEFORM SOLUTIONS
        	$queryarray = array();
      	}

/* 
// queryarray[0] now handled inside loop -- perhaps this "0 out of loop, 1 and up inside loop" approach was an unsuccessful attempt to fix the "unset" bug.  Interesting that subcrit was unset prior to the FOR loop.
//        $subcrit = new CriteriaCompo(new Criteria("title", "%".$queryarray[0]."%", 'LIKE'), 'OR');
//        $subcrit->add(new Criteria("description", "%".$queryarray[0]."%", 'LIKE'), 'OR');
//        $criteria->add($subcrit);
//        unset($subcrit);

	  $allsubcrits = new CriteriaCompo(); // added to fix bug related to nesting of ( )
      for($i = 0;$i < $count;$i++) // 1 changed to 0 so everything happens in one loop now
      {
            $subcrit = new CriteriaCompo(new Criteria("title", "%".$queryarray[$i]."%", 'LIKE'), 'OR');
            $subcrit->add(new Criteria("description", "%".$queryarray[$i]."%", 'LIKE'), 'OR');
            $allsubcrits->add($subcrit, $andor); // $criteria changed to $allsubcrits to fix bug
			unset($subcrit); // added to fix bug 
      } 
	  $criteria->add($allsubcrits); // added to fix bug
*/

	// There are two bugs in the above code: all subcrits need to be added to the main criteria as a group, so it was a bug to have them added one at a time as they were, since the nesting of the () in the rendered where clause is incorrect
	// also there was a bug which caused only the first and last items in the query array to be processed, and the last item would be processed multiple times.  ie: terms "green, orange, black" resulted in a search for "green, black, black" -- this "bug" was introduced with php 4.4.0 (and some version of 5 as well) after a change in how objects are managed in memory or something like that.  The fix is to specifically unset the $subcrit object at the end of each iteration of the loop.  The same bug hit Liase, Formulaire and Formulize.
	// You can see the structure of the query by printing the output of $criteria's render or renderWhere method ( ie: print $criteria->renderWhere(); )
	// However, the whole approach to handling queries has been changed, so the above code is unused.  It is included here for reference with regard to the bugs mentioned above.
	// With custom forms, because a multi term query using AND could have some terms match only custom form fields and other terms match only native wf-downloads fields, each term must be evaluated independently, across both modules, and then if an AND operator is in effect, the intersection of the results is returned.  If OR is in effect, then all results are returned.
	// determine what the custom forms are that need searching, if any

	$category_handler = xoops_getmodulehandler('category', 'wfdownloads');

	$fids = array();
	foreach($allowed_cats as $cid)
	{
		$category = $category_handler->get($cid);
		if ($fid = $category->getVar('formulize_fid'))
		{
			$fids[] = $fid;
		}
	}

	// Set criteria for the captions that the user can see if necessary
	if (is_array($fids) AND count($fids) > 0)
	{
		$ele_criteria = new CriteriaCompo();
		$ele_criteria->add(new Criteria('ele_display', 1), 'OR');
		foreach($groups as $thisgroup)
		{
			$ele_criteria->add(new Criteria('ele_display', '%,'.$thisgroup.',%', 'LIKE'), 'OR');
		}
		$ele_criteria->setSort('ele_order');
		$ele_criteria->setOrder('ASC');
	}

	// setup download handler
	$download_handler = xoops_getmodulehandler('download', 'wfdownloads');

	// loop through all query terms...
	for($i = 0;$i < $count;$i++)
	{
		// make a copy of the $criteria for use with this term only
		$querycrit = clone($criteria);

		// setup criteria for searching the title and description fields of WF-Downloads for the current term
		$allsubcrits = new CriteriaCompo();
	    $thisSearchTerm = count($queryarray) > 0 ? $queryarray[$i] : "";
	    $subcrit = new CriteriaCompo(new Criteria("title", "%".$thisSearchTerm."%", 'LIKE'), 'OR');
	    $subcrit->add(new Criteria("description", "%".$thisSearchTerm."%", 'LIKE'), 'OR');
	    $allsubcrits->add($subcrit, $andor);
		unset($subcrit);

		// find all IDs of entries in all custom forms which match the current term
	    $saved_ids = array();
		foreach($fids as $fid)
		{
			if(!isset($formulize_mgr)) { $formulize_mgr =& xoops_getmodulehandler('elements', 'formulize'); } 

			include_once XOOPS_ROOT_PATH . "/modules/formulize/include/extract.php";

			// setup the filter string based on the elements in the form and the current query term
			$elements =& $formulize_mgr->getObjects2($ele_criteria,$fid);
			$filter_string = "";
			$indexer = 0;
			$start = 1;
			foreach($elements as $element)
			{
				if($start)
				{
					$filter_string = $element->getVar('ele_id') . "/**/" . $queryarray[$i];				
					$start = 0;
				}
				else
				{
					$filter_string .= "][" . $element->getVar('ele_id') . "/**/" . $queryarray[$i];				
				}
			}
			unset($elements);

			// query for the ids of the records in the form that match the queryarray
			$data = getData("", $fid, $filter_string, "OR");
			$formHandle = getFormHandleFromEntry($data[0], "uid");
		    $temp_saved_ids = array();
			foreach($data as $entry)
			{ // gather all IDs for this $fid
				$found_ids = internalRecordIds($entry, $formHandle);
				$temp_saved_ids = array_merge($temp_saved_ids, $found_ids);
				unset($found_ids);
			}
			$saved_ids = array_merge($saved_ids, $temp_saved_ids); // merge this $fid's IDs with IDs from all previous $fids
			unset($temp_saved_ids);
			unset($data);
		} // end of foreach $fids

		// make a criteria object that includes the custom form ids that were found, if any
		if(count($saved_ids) > 0 AND is_array($saved_ids))
		{
			$subs_plus_custom = new CriteriaCompo(new Criteria("formulize_idreq", "(".implode(',', $saved_ids).")", "IN"));
			$subs_plus_custom->add($allsubcrits, 'OR');
			$querycrit->add($subs_plus_custom);
			unset($allsubcrits);
			unset($subs_plus_custom);
			unset($saved_ids);
		}
		else
		{
  			$querycrit->add($allsubcrits);
			unset($allsubcrits);
		}

		// check to see if this term matches any files
		$temp_downloads = $download_handler->getActiveDownloads($querycrit);
		unset($querycrit);

		// make an array of the downloads based on the lid, and a separate list of all the lids found (the separate list is used in the case of an AND operator to derive an intersection of the hits across all search terms -- and it is used to determine the start and limit points of the main results array for an OR query)
		foreach($temp_downloads as $td)
		{
			$downloads[$td->getVar('lid')] = $td;
			$downloads_lids[] = $td->getVar('lid'); 
		}

		// do an intersection of the found lids if the operator is AND
		if($andor == "AND")
		{
			if(!isset($downloads_lids)) { $downloads_lids[] = ""; }
			if(!isset($downloads_intersect)) { $downloads_intersect = $downloads_lids; } // first time through initialize the array with all the found files 
			$downloads_intersect = array_intersect($downloads_intersect, $downloads_lids);
			unset($downloads_lids);
		} 
		unset($temp_downloads);
	} // end of for loop through query terms 
   } // end of if there are query terms

	// if an AND operator was used, cull the $downloads array based on the intersection found
	if($andor == "AND")
	{
		foreach($downloads as $lid=>$download)
		{
			if(!in_array($lid, $downloads_intersect)) { unset($downloads[$lid]); }
		}
		$limitOffsetIndex = $downloads_intersect;
	}
	else
	{
		$limitOffsetIndex = $downloads_lids;
	}

/* // this code has been moved above
    $criteria->setSort("published");
    $criteria->setOrder("DESC");
    $criteria->setLimit($limit);
    $criteria->setStart($offset); 

    $download_handler = xoops_getmodulehandler('download', 'wfdownloads');
    $downloads = $download_handler->getActiveDownloads($criteria);
*/

    $ret = array();
    $i = 0;
    $storedLids = array();

//    foreach (array_keys($downloads) as $i)  
	for($x=$offset;($i<$limit AND $x<count($limitOffsetIndex));$x++)
	{
		$lid = $limitOffsetIndex[$x];
	    $obj = $downloads[$lid];

  	    if(is_object($obj) AND !isset($storedLids[$lid]))
		{	
			$storedLids[$lid] = true;
	        $ret[$i]['image'] = "images/size2.gif";
			$ret[$i]['link'] = "singlefile.php?cid=" . $obj->getVar('cid') . "&amp;lid=$lid";
	        $ret[$i]['title'] = $obj->getVar('title');
			$ret[$i]['time'] = $obj->getVar('published');
	        $ret[$i]['uid'] = $obj->getVar('submitter');

// $downloads[$i] changed to $obj above, since $downloads no longer has sequential, numerical keys
//        $ret[$i]['link'] = "singlefile.php?cid=" . $downloads[$i]->getVar('cid') . "&amp;lid=" . $downloads[$i]->getVar('lid') . "";
//        $ret[$i]['title'] = $downloads[$i]->getVar('title');
//        $ret[$i]['time'] = $downloads[$i]->getVar('published');
//        $ret[$i]['uid'] = $downloads[$i]->getVar('submitter');

      	    $i++;
		}
	}
    return $ret;
}

// changed and added - end - April 23, 2006 - jwe
// Added - start - April 23, 2006
// gives PHP4 support for the clone keyword
// found on Steven Wittens Blog - thanks!
if (version_compare(phpversion(), '5.0') < 0)
{
	eval('
			function clone($object)
			{
				return $object;
			}
		 ');

  }
// added - end - April 23, 2006

?>