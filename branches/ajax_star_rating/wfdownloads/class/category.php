<?php
// $Id$
// ------------------------------------------------------------------------ //
// 				 XOOPS - PHP Content Management System                      //
//					 Copyright (c) 2000 XOOPS.org                           //
// 						<http://www.xoops.org/>                             //
// ------------------------------------------------------------------------ //
// This program is free software; you can redistribute it and/or modify     //
// it under the terms of the GNU General Public License as published by     //
// the Free Software Foundation; either version 2 of the License, or        //
// (at your option) any later version.                                      //

// You may not change or alter any portion of this comment or credits       //
// of supporting developers from this source code or any supporting         //
// source code which is considered copyrighted (c) material of the          //
// original comment or credit authors.                                      //
// This program is distributed in the hope that it will be useful,          //
// but WITHOUT ANY WARRANTY; without even the implied warranty of           //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
// GNU General Public License for more details.                             //

// You should have received a copy of the GNU General Public License        //
// along with this program; if not, write to the Free Software              //
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------ //
// URL: http://www.xoops.org/												//
// Project: The XOOPS Project                                               //
// -------------------------------------------------------------------------//
if (!class_exists("XoopsPersistableObjectHandler")) {
	include_once ICMS_ROOT_PATH."/modules/wfdownloads/class/object.php";
}

class WfdownloadsCategory extends XoopsObject {
    function WfdownloadsCategory() {
        $this->initVar('cid', XOBJ_DTYPE_INT);
        $this->initVar('pid', XOBJ_DTYPE_INT, 0);
        $this->initVar('title', XOBJ_DTYPE_TXTBOX, '');
        $this->initVar('imgurl', XOBJ_DTYPE_TXTBOX, '');
        $this->initVar('description', XOBJ_DTYPE_TXTAREA, '');
        $this->initVar('total', XOBJ_DTYPE_INT, 0);
        $this->initVar('summary', XOBJ_DTYPE_TXTAREA, '');
        $this->initVar('spotlighttop', XOBJ_DTYPE_INT, 0);
        $this->initVar('spotlighthis', XOBJ_DTYPE_INT, 0);
        $this->initVar('dohtml', XOBJ_DTYPE_INT, 0);
        $this->initVar('dosmiley', XOBJ_DTYPE_INT, 1);
        $this->initVar('doxcode', XOBJ_DTYPE_INT, 1);
        $this->initVar('doimage', XOBJ_DTYPE_INT, 1);
        $this->initVar('dobr', XOBJ_DTYPE_INT, 1);
        $this->initVar('weight', XOBJ_DTYPE_INT, 0);

		// added - start - March 4 2006 - jpc
        $this->initVar('formulize_fid', XOBJ_DTYPE_INT, 0);
		// added - end - March 4 2006 - jpc
    }

    function getForm($heading) {
        global $xoopsModule, $xoopsModuleConfig ;
        $sform = new XoopsThemeForm($heading, "op", $_SERVER['REQUEST_URI']);
        $sform -> setExtra('enctype="multipart/form-data"');

        $member_handler = & xoops_gethandler('member');
        $group_list = $member_handler -> getGroupList();

	$cid = intval($this->getVar('cid'));
	$mid = intval($xoopsModule->getVar('mid'));

        $gperm_handler = & xoops_gethandler('groupperm');
        $groups = $gperm_handler -> getGroupIds('WFDownCatPerm', $cid, $mid);
        $groups = $groups;
        $sform -> addElement(new XoopsFormSelectGroup(_AM_WFD_FCATEGORY_GROUPPROMPT, "groups", true, $groups, 5, true));

        $totalcats = wfd_totalcategory();
        if ($totalcats > 0)
        {
            $category_handler = xoops_getmodulehandler('category');
            $categories = $category_handler->getObjects();
            $mytree = new XoopsObjectTree($categories, "cid", "pid");
            $sform->addElement(new XoopsFormLabel(_AM_WFD_FCATEGORY_SUBCATEGORY, $mytree->makeSelBox('pid', 'title', "-", $this->getVar('pid', 'e'),true)));
    	}
        $sform -> addElement(new XoopsFormText(_AM_WFD_FCATEGORY_TITLE, 'title', 50, 255, $this->getVar('title', 'e')), true);
        $sform -> addElement(new XoopsFormText(_AM_WFD_FCATEGORY_WEIGHT, 'weight', 10, 80, $this->getVar('weight')), false);

        $graph_array = & WfsLists :: getListTypeAsArray(ICMS_ROOT_PATH . "/" . $xoopsModuleConfig['catimage'], $type = "images");
        $indeximage_select = new XoopsFormSelect('', 'imgurl', $this->getVar('imgurl'));
        $indeximage_select -> addOptionArray($graph_array);
        $indeximage_select -> setExtra("onchange='showImgSelected(\"image\", \"imgurl\", \"" . $xoopsModuleConfig['catimage'] . "\", \"\", \"" . ICMS_URL . "\")'");
        $indeximage_tray = new XoopsFormElementTray(_AM_WFD_FCATEGORY_CIMAGE, '&nbsp;');
        $indeximage_tray -> addElement($indeximage_select);
        if ($this->getVar('imgurl') != "")
        {
            $indeximage_tray -> addElement(new XoopsFormLabel('', "<br /><br /><img src='" . ICMS_URL . "/" . $xoopsModuleConfig['catimage'] . "/" . $this->getVar('imgurl') . "' name='image' id='image' alt='' title='image' />"));
        }
        else
        {
            $indeximage_tray -> addElement(new XoopsFormLabel('', "<br /><br /><img src='" . ICMS_URL . "/uploads/blank.gif' name='image' id='image' alt='' title='image' />"));
        }
        $sform -> addElement($indeximage_tray);
        $sform -> addElement(new XoopsFormDhtmlTextArea(_AM_WFD_FCATEGORY_DESCRIPTION, 'description', $this->getVar('description', 'e'), 15, 60), true);
        $sform -> addElement(new XoopsFormTextArea(_AM_WFD_FCATEGORY_SUMMARY, 'summary', $this->getVar('summary'), 10, 60));

        $options_tray = new XoopsFormElementTray(_AM_WFD_TEXTOPTIONS, '<br />');

        $html_checkbox = new XoopsFormCheckBox('', 'dohtml', intval($this->getVar('dohtml')));
        $html_checkbox -> addOption(1, _AM_WFD_ALLOWHTML);
        $options_tray -> addElement($html_checkbox);

        $smiley_checkbox = new XoopsFormCheckBox('', 'dosmiley', intval($this->getVar('dosmiley')));
        $smiley_checkbox -> addOption(1, _AM_WFD_ALLOWSMILEY);
        $options_tray -> addElement($smiley_checkbox);

        $xcodes_checkbox = new XoopsFormCheckBox('', 'doxcode', intval($this->getVar('doxcode')));
        $xcodes_checkbox -> addOption(1, _AM_WFD_ALLOWXCODE);
        $options_tray -> addElement($xcodes_checkbox);

        $noimages_checkbox = new XoopsFormCheckBox('', 'doimage', intval($this->getVar('doimage')));
        $noimages_checkbox -> addOption(1, _AM_WFD_ALLOWIMAGES);
        $options_tray -> addElement($noimages_checkbox);

        $breaks_checkbox = new XoopsFormCheckBox('', 'dobr', intval($this->getVar('dobr')));
        $breaks_checkbox -> addOption(1, _AM_WFD_ALLOWBREAK);
        $options_tray -> addElement($breaks_checkbox);
        $sform -> addElement($options_tray);


		// added - start - March 4 2006 - jpc
		if(file_exists(ICMS_ROOT_PATH . "/modules/formulize/include/functions.php")) {
                include_once ICMS_ROOT_PATH . "/modules/formulize/include/functions.php";

                $fids = allowedForms();

                $fids_select = array();
                $fids_select[0] = _AM_WFD_FFS_STANDARD_FORM;
                foreach( $fids as $fid )
                	$fids_select[$fid] = getFormTitle($fid);
                
                $formulize_forms = new XoopsFormSelect(_AM_WFD_FFS_CUSTOM_FORM, "formulize_fid", $this->getVar('formulize_fid') );
        		$formulize_forms -> addOptionArray( $fids_select ); 
                $sform -> addElement($formulize_forms);
		}
		// added - end - March 4 2006 - jpc


        $button_tray = new XoopsFormElementTray('', '');
        $hidden = new XoopsFormHidden('op', 'save');
        $button_tray -> addElement($hidden);

        if ($this->isNew())
        {
            $butt_create = new XoopsFormButton('', '', _AM_WFD_BSAVE, 'submit');
            $butt_create -> setExtra('onclick="this.form.elements.op.value=\'addCat\'"');
            $button_tray -> addElement($butt_create);

            $butt_clear = new XoopsFormButton('', '', _AM_WFD_BRESET, 'reset');
            $button_tray -> addElement($butt_clear);

            $butt_cancel = new XoopsFormButton('', '', _AM_WFD_BCANCEL, 'button');
            $butt_cancel -> setExtra('onclick="history.go(-1)"');
            $button_tray -> addElement($butt_cancel);
        }
        else
        {
            $sform->addElement(new XoopsFormHidden('cid', $cid));
            $butt_create = new XoopsFormButton('', '', _AM_WFD_BMODIFY, 'submit');
            $butt_create -> setExtra('onclick="this.form.elements.op.value=\'addCat\'"');
            $button_tray -> addElement($butt_create);

            $butt_delete = new XoopsFormButton('', '', _AM_WFD_BDELETE, 'submit');
            $butt_delete -> setExtra('onclick="this.form.elements.op.value=\'delCat\'"');
            $button_tray -> addElement($butt_delete);

            $butt_cancel = new XoopsFormButton('', '', _AM_WFD_BCANCEL, 'button');
            $butt_cancel -> setExtra('onclick="history.go(-1)"');
            $button_tray -> addElement($butt_cancel);
        }
        $sform -> addElement($button_tray);
        return $sform;
    }
}

class WfdownloadsCategoryHandler extends XoopsPersistableObjectHandler {
	
	var $allCategories = false;
	var $topCategories = false;
	
    function WfdownloadsCategoryHandler($db) {
        $this->XoopsPersistableObjectHandler($db, 'wfdownloads_cat', 'WfdownloadsCategory', 'cid', 'title');
    }

    function getNicePath($cid, $root_filename = "index.php", $item_filename = "viewcat.php?op=") {
        include_once ICMS_ROOT_PATH . '/class/xoopstree.php';
        $mytree = new XoopsTree($this->table, $this->keyName, "pid");
        $pathstring = $mytree->getNicePathFromId(intval($cid), $this->identifierName, $item_filename);

        /**
         * Replacing the " with ">" and deleteing the last ">" at the end
         */
        $pathstring = trim($pathstring);
        $pathstring = str_replace(':', '>', $pathstring);
//      $pathstring = substr($pathstring, 0, strlen($pathstring) - 13); // not needed now with fixed icms core! but required for XOOPS

        return $pathstring;
    }

    /**
     * Get categories that the current user has permissions for
     *
     * @param bool $id_as_key
     * @param bool $as_object
     * @return array
     */
    function getUserCategories($id_as_key = false, $as_object = true) {
        global $xoopsUser;
        $wfModule = wfdownloads_getModuleInfo();
        $gperm_handler = xoops_gethandler('groupperm');
        $groups = is_object($xoopsUser) ? $xoopsUser->getGroups() : array(0=>XOOPS_GROUP_ANONYMOUS);
        $categoryids = $gperm_handler->getItemIds('WFDownCatPerm', $groups, intval($wfModule->getVar('mid')));
        return $this->getObjects(new Criteria('cid', "(".implode(',', $categoryids).")", "IN"), $id_as_key, $as_object);
    }

    function getChildCats($category) {
        $allcats = $this->getObjects();
        include_once(ICMS_ROOT_PATH."/class/tree.php");
        $tree = new XoopsObjectTree($allcats, $this->keyName, "pid");
        return $tree->getAllChild($category->getVar($this->keyName));
    }

	function getAllSubcatsTopParentCid() {
		if (!$this->allCategories) {
			$this->allCategories = $this->getObjects(null, true);
		}
    
		include_once(ICMS_ROOT_PATH."/class/tree.php");
	    $tree = new XoopsObjectTree($this->allCategories, $this->keyName, "pid");
	    $treeobj = $tree->getTree();
	
	    /**
	     * Let's create an array where key will be cid of the top categories and
	     * value will be an array containing all the cid of its subcategories
	     * If value = 0, then this topcat does not have any subcats
	     */
	    $topcatsarray = array();
	    foreach($treeobj[0]['child'] as $topcid) {
	    	if (!isset($this->topCategories[$topcid])) {
	    		$this->topCategories[$topcid] = $topcid;
	    	}
	    	foreach ($tree->getAllChild($topcid) as $key=>$category) {
	    		$childrenids[] = $category->getVar('cid');
	    	}
	   		$childrenids = isset($childrenids) ? $childrenids : 0;
	    	$topcatsarray[$topcid] = $childrenids;
	   		unset($childrenids);
	    }
	    
	    /**
	     * Now we need to create another array where key will be all subcategories cid and
	     * value will be the cid of its top most category
	     */
	    $allsubcats_linked_totop = array();
	    
	    foreach ($topcatsarray as $topcatcid=>$subcatsarray) {
			if ($subcatsarray == 0) {
				$allsubcats_linked_totop[$topcatcid] = $topcatcid;
			} else {
		    	foreach ($subcatsarray as $subcatcid) {
		    		$allsubcats_linked_totop[$subcatcid] = $topcatcid;
		    	}
			}
	    }
	    
	    /**
	     * Finally, let's finish by adding to this array, all the top categories which values 
	     * will be their cid
	     */
	    foreach($this->topCategories as $topcid) {
	    	$allsubcats_linked_totop[$topcid] = $topcid;
	    }
	    
		return $allsubcats_linked_totop;	
	}
}
?>