<?php
// $Id: mirror.php,v 1.4 2007/09/30 13:47:53 m0nty_ Exp $
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
	include_once XOOPS_ROOT_PATH."/modules/wfdownloads/class/object.php";
}
class WfdownloadsMirror extends XoopsObject {
	function WfdownloadsMirror() {
		$this->initVar('mirror_id', XOBJ_DTYPE_INT);
		$this->initVar('lid', XOBJ_DTYPE_INT);
		$this->initVar('title', XOBJ_DTYPE_TXTBOX);
		$this->initVar('homeurl', XOBJ_DTYPE_URL, 'http://');
		$this->initVar('location', XOBJ_DTYPE_TXTBOX);
		$this->initVar('continent', XOBJ_DTYPE_TXTBOX);
		$this->initVar('downurl', XOBJ_DTYPE_URL, '');
		$this->initVar('submit', XOBJ_DTYPE_INT);
		$this->initVar('date', XOBJ_DTYPE_INT);
		$this->initVar('uid', XOBJ_DTYPE_INT);
	}

	function getForm() {
	    include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";
        $uid = !empty($xoopsUser) ? intval($xoopsUser->getVar('uid')) : 0;

	    $sform = new icms_form_Theme(_AM_WFD_MIRROR_SNEWMNAMEDESC, "mirrorform", $_SERVER['REQUEST_URI']);
	    $sform -> addElement(new icms_form_elements_Text(_AM_WFD_MIRROR_FHOMEURLTITLE, 'title', 30, 40, $this->getVar('title', 'e')), true);
	    $sform -> addElement(new icms_form_elements_Text(_AM_WFD_MIRROR_FHOMEURL, 'homeurl', 30, 40, $this->getVar('homeurl', 'e')), true);
	    $sform -> addElement(new icms_form_elements_Text(_AM_WFD_MIRROR_LOCATION, 'location', 30, 40, $this->getVar('location', 'e')), true);
	    $continent_select = new icms_form_elements_Select(_AM_WFD_MIRROR_CONTINENT, "continent", $this->getVar('continent'));
        $continent_select->addOptionArray(array(_AM_WFD_CONT1 => _AM_WFD_CONT1, _AM_WFD_CONT2 => _AM_WFD_CONT2, _AM_WFD_CONT3 => _AM_WFD_CONT3, _AM_WFD_CONT4 => _AM_WFD_CONT4, _AM_WFD_CONT5 => _AM_WFD_CONT5, _AM_WFD_CONT6 => _AM_WFD_CONT6, _AM_WFD_CONT7 => _AM_WFD_CONT7));
	    $sform -> addElement($continent_select);
        $sform -> addElement(new icms_form_elements_Text(_AM_WFD_MIRROR_DOWNURL, 'downurl', 50, 255, $this->getVar('downurl', 'e')), true);

	    $approved = ($this->getVar('submit') == 0) ? 0 : 1;
	    $approve_checkbox = new icms_form_elements_Checkbox(_AM_WFD_MIRROR_FAPPROVE, "approve", $approved);
	    $approve_checkbox -> addOption(1, " ");
	    $sform -> addElement($approve_checkbox);

	    $sform -> addElement(new icms_form_elements_Hidden("lid", intval($this->getVar('lid'))));
	    $sform -> addElement(new icms_form_elements_Hidden("mirror_id", intval($this->getVar('mirror_id'))));
	    $sform -> addElement(new icms_form_elements_Hidden("uid", $uid));
	    $sform -> addElement(new icms_form_elements_Hidden("confirm", 1));
	    $button_tray = new icms_form_elements_Tray('', '');
	    $hidden = new icms_form_elements_Hidden('op', 'save');
	    $button_tray -> addElement($hidden);

	    if ($this->isNew())
	    {
	        $butt_create = new icms_form_elements_Button('', '', _AM_WFD_BSAVE, 'submit');
	        $butt_create -> setExtra('onclick="this.form.elements.op.value=\'edit_mirror\'"');
	        $button_tray -> addElement($butt_create);

	        $butt_clear = new icms_form_elements_Button('', '', _AM_WFD_BRESET, 'reset');
	        $button_tray -> addElement($butt_clear);

	        $butt_cancel = new icms_form_elements_Button('', '', _AM_WFD_BCANCEL, 'button');
	        $butt_cancel -> setExtra('onclick="history.go(-1)"');
	        $button_tray -> addElement($butt_cancel);
	    }
	    else
	    {
	        $butt_create = new icms_form_elements_Button('', '', _AM_WFD_BSAVE, 'submit');
	        $butt_create -> setExtra('onclick="this.form.elements.op.value=\'edit_mirror\'"');
	        $button_tray -> addElement($butt_create);

	        $butt_delete = new icms_form_elements_Button('', '', _AM_WFD_BDELETE, 'submit');
	        $butt_delete -> setExtra('onclick="this.form.elements.op.value=\'del_mirror\'"');
	        $button_tray -> addElement($butt_delete);

	        $butt_cancel = new icms_form_elements_Button('', '', _AM_WFD_BCANCEL, 'button');
	        $butt_cancel -> setExtra('onclick="history.go(-1)"');
	        $button_tray -> addElement($butt_cancel);
	    }
	    $sform -> addElement($button_tray);
	    return $sform;
	}
    /**
    * Returns an array representation of the object
    *
    * @return array
    */
    function toArray() {
        $ret = array();
        $vars = $this->getVars();
        foreach (array_keys($vars) as $i) {
            $ret[$i] = $this->getVar($i);
        }
        return $ret;
    }
}

class WfdownloadsMirrorHandler extends XoopsPersistableObjectHandler {

	function WfdownloadsMirrorHandler($db) {
		$this->XoopsPersistableObjectHandler($db, 'wfdownloads_mirrors', 'WfdownloadsMirror', 'mirror_id', 'title');
	}

}
?>