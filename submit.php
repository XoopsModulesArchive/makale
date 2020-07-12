<?php
// $Id: submit.php,v 1.5 2005/06/05 01:09:15 andrew Exp $
//  ------------------------------------------------------------------------ //
//  Author: Andrew Mills                                                     //
//  Email:  ajmills@sirium.net                                         //
//	About:  This file is part of the makale module for Xoops v2.           //
//                                                                           //
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

//include( "../../mainfile.php" );
//include( XOOPS_ROOT_PATH . "/header.php" );
include_once('header.php');
include_once('include/functions.inc.php');
include_once("language/".$xoopsConfig['language']."/admin.php");
include_once(XOOPS_ROOT_PATH. "/include/xoopscodes.php");
include_once(XOOPS_ROOT_PATH . "/class/xoopsformloader.php");
$myts =& MyTextSanitizer::getInstance();

//if (isset($_GET['cat_id'])) { $cat_id = $_POST['cat_id']; }

if(isset($xoopsModuleConfig['allowusersubmit']) && $xoopsModuleConfig['allowusersubmit'] != 1) {
	redirect_header(XOOPS_URL."/modules/makale/index.php", 2, _MD_NOTALLOWED);
	exit();
}

// regged / logged in code
if($xoopsModuleConfig['loggedin'] != 1) {
	//echo "logged in";
	if (empty($xoopsUser)) {
		redirect_header(XOOPS_URL."/user.php", 2, _MD_LOGGEDIN);
		//exit();
	}
}

if (!isset($_REQUEST['op'])) {
	// this page uses smarty template
	// this must be set before including main header.php
	$xoopsOption['template_main'] = 'makale_submit.html';
	include XOOPS_ROOT_PATH.'/header.php';
	$xoopsTpl->assign('intro_text', _MD_ART_SUBINTRO);
	$xoopsTpl->assign('form_title_alert', _MD_ART_SUBALERTTITLE);
	$xoopsTpl->assign('form_category_alert', _MD_ART_SUBALERTCAT);

	// Build/create form
	$submitform = new XoopsThemeForm(_MD_SUBMIT_PAGE_TITLE, "submitform", xoops_getenv('PHP_SELF'), 'post');
	
	$title = new XoopsFormText(_AM_ART_FRMCAPSDTTL, 'formdata[art_title]', 40, 255, '');
	$submitform->addElement($title);
	unset($title);

	// list categories
	$catselect = new XoopsFormSelect(_MD_ART_SUBCAT, 'formdata[art_cat_id]', '', '1', false);
	$catselect->addOption('0', _MD_FORMCAPTIONSELECT);
		$sql = ("SELECT * FROM " . $xoopsDB->prefix("makale_cat") . " WHERE cat_showme=1 ORDER BY cat_name ASC");
		$result=$xoopsDB->query($sql);
			while($myrow = $xoopsDB->fetchArray($result)) {
				$cat_id    = $myrow['id'];
				$cat_name  = $myrow['cat_name'];
		
				$catselect->addOption($cat_id, $cat_name);	
			}
	$submitform->addElement($catselect);
	
	//
	// Editors
	$default_ed1 = new XoopsFormDhtmlTextArea(_MD_ART_SUBDESC, 'formdata[art_description]', '', '10', '37');
	$default_ed2 = new XoopsFormDhtmlTextArea(_MD_ART_SUBTART, 'formdata[art_makale_text]', '', '30', '37');
	
	// Loads XOOPS' default editor
	if ($xoopsModuleConfig['makaleedituser'] == "0") {
		$editordesc = $default_ed1;
		$editormain = $default_ed2;
	} // default
	// Spaw
	if ($xoopsModuleConfig['makaleedituser'] == "1") {
		if (is_readable(XOOPS_ROOT_PATH . "/class/spaw/formspaw.php")) {
			include_once XOOPS_ROOT_PATH . "/class/spaw/formspaw.php";
			$editordesc = new XoopsFormSpaw(_MD_ART_SUBDESC, 'formdata[art_description]', '', '100%', '150px');
			$editormain = new XoopsFormSpaw(_MD_ART_SUBTART, 'formdata[art_makale_text]', '', "100%", '450px');
		} else {
			$editordesc = $default_ed1;
			$editormain = $default_ed2;
		}
	} // spaw
	// fsk
	if ($xoopsModuleConfig['makaleedituser'] == "2") {
		if (is_readable(XOOPS_ROOT_PATH . "/class/fckeditor/formfckeditor.php")) {
			include_once(XOOPS_ROOT_PATH . "/class/fckeditor/formfckeditor.php");
			$editordesc = new XoopsFormFckeditor(_MD_ART_SUBDESC, 'formdata[art_description]', '', '100%', '250px');
			$editormain = new XoopsFormFckeditor(_MD_ART_SUBTART, 'formdata[art_makale_text]', '', '100%', '550px');
		} else {
			$editordesc = $default_ed1;
			$editormain = $default_ed2;
		}
	} // fck
	// htmlarea
	if ($xoopsModuleConfig['makaleedituser'] == "3") {
		if (is_readable(XOOPS_ROOT_PATH . "/class/htmlarea/formhtmlarea.php")) {
			include_once(XOOPS_ROOT_PATH . "/class/htmlarea/formhtmlarea.php");
			$editordesc = new XoopsFormHtmlarea(_MD_ART_SUBDESC, 'formdata[art_description]', '', '100%', '250px');
			$editormain = new XoopsFormHtmlarea(_MD_ART_SUBTART, 'formdata[art_makale_text]', '', '100%', '550px');
		} else {
			$editordesc = $default_ed1;
			$editormain = $default_ed2;
		}
	}// htmlarea
	
	
	
	$submitform->addElement($editordesc);
	$submitform->addElement($editormain);
	unset($editordesc);
	unset($editormain);
	unset($default_ed1);
	unset($default_ed2);
	
	// 
	// Add info on [pagebreak]
	$submitform->addElement(new XoopsFormLabel('', _MD_FORMCAPTIONPAGEBRK));
	
	
	//
	// disable html
	$nohtmlbox = new XoopsFormCheckBox("", 'formdata[art_nohtml]', 0); // checked value here whether will be checked?
	$nohtmlbox->addOption(1, _MD_FORMCAPTIONNOHTML); // checked value here what will be sent in form?

	//
	// disable auto line breaks
	$nobrbox = new XoopsFormCheckBox("", 'formdata[art_nobr]', 0); // checked value here whether will be checked?
	$nobrbox->addOption(1, _MD_FORMCAPTIONNOBR); // checked value here what will be sent in form?

	//
	// disable smileys
	$smileybox = new XoopsFormCheckBox("", 'formdata[art_nosmiley]', 0); // checked value here whether will be checked?
	$smileybox->addOption(1, _MD_FORMCAPTIONNOSMILEY); // checked value here what will be sent in form?

	//
	// disable xoops codes
	$xcodebox = new XoopsFormCheckBox("", 'formdata[art_noxcode]', 0); // checked value here whether will be checked?
	$xcodebox->addOption(1, _MD_FORMCAPTIONNOXCODE); // checked value here what will be sent in form?

	//
	// disable xoops images
	$imgcodebox = new XoopsFormCheckBox("", 'formdata[art_noimage]', 0); // checked value here whether will be checked?
	$imgcodebox->addOption(1, _MD_FORMCAPTIONNOIMAGE); // checked value here what will be sent in form?

	$optionstray = new XoopsFormElementTray('','<br />');
	$optionstray->addElement($nohtmlbox);
	$optionstray->addElement($nobrbox);
	$optionstray->addElement($smileybox);
	$optionstray->addElement($xcodebox);
	$optionstray->addElement($imgcodebox);
	$submitform->addElement($optionstray);
	unset($nohtmlbox);
	unset($smileybox);
	unset($xcodebox);
	unset($imgcodebox);
	unset($nobrbox);
	
	
	//
	// Notify
	//$notifybox = new XoopsFormCheckBox(_MD_ART_SUBTNOTIFY, 'formdata[art_notify]', 0); // checked value here whether will be checked?
	//$notifybox->addOption(1, _MD_ART_SUBTNOTIFYDES); // checked value here what will be sent in form?
	//$submitform->addElement($notifybox);
	//unset($notifybox);
	
	//
	// Hidden fields
	$submitform->addElement(new XoopsFormHidden('op', 'add'));
	
	//
	// Submit
	$button_sub = new XoopsFormButton('', 'but_save', _MD_ART_SUBMIT, 'submit');
	$button_sub->setExtra('onclick="return checkfields();"');
	$button_can = new XoopsFormButton('', 'but_reset', _MD_ART_SUBRESET, 'reset');
	//$button_pre = new XoopsFormButton('', 'but_preview', _MD_ART_PREVIEW, 'submit');
	//$button_pre->setExtra('onclick="return checkfields();"');

	$tray = new XoopsFormElementTray('');
	$tray->addElement($button_sub);
	$tray->addElement($button_can);
	//$tray->addElement($button_pre);
	$submitform->addElement($tray);
	unset($button_sub);
	unset($button_can);
	//unset($button_pre);

	//
	// Assign to template		
	$xoopsTpl->assign('submitform',	$submitform->render());
	unset($submitform);

} // end if

################################################################################
#
if (isset($_REQUEST['op'])) {


	if (isset($_POST['formdata'])) { $formdata = $_POST['formdata']; }
		else { $formdata = ""; }
		
	//$xoopsOption['template_main'] = 'makale_submitted.html';
	include XOOPS_ROOT_PATH.'/header.php';
	$xoopsTpl->assign('art_submittedmsg', _MD_SUBMITTEDMSG);
	$xoopsTpl->assign('art_submittedmsgdesc', _MD_SUBMITTEDMSGDESC);

	$art_title			= $myts->addSlashes($formdata['art_title']);
	$art_cat_id			= $formdata['art_cat_id'];
	$art_description	= $myts->addSlashes($formdata['art_description']);
	$art_makale_text	= $myts->addSlashes($formdata['art_makale_text']);
	//$notify				= $formdata['notify'];

	
	if (isset($formdata['art_nohtml'])) { $art_nohtml = "0"; }
		else { $art_nohtml = 1; }
	if (isset($formdata['art_nosmiley'])) { $art_nosmiley = "0"; }
		else { $art_nosmiley = 1; }
	if (isset($formdata['art_noimage'])) { $art_noimage = "0"; }
		else { $art_noimage = 1; }
	if (isset($formdata['art_nobr'])) { $art_nobr = "0"; }
		else { $art_nobr = 1; }
	if (isset($formdata['art_noxcode'])) { $art_noxcode = "0"; }
		else { $art_noxcode = 1; }

	//if ($notify != 1) { $notify = 0; }
	//if ($op != 1) { $op = 0; }
	
	// find user id
	if (empty($xoopsUser)) { $art_author_id = 0;} 
		else { $art_author_id = $xoopsUser->getVar('uid'); }
	
	// get ip address
	if (isset($_SERVER['REMOTE_ADDR'])) {
		$art_author_ip = $_SERVER['REMOTE_ADDR'];
	}

	$newid = $xoopsDB->genId($xoopsDB->prefix("makale_main")."_id_seq");
	$sql = "INSERT INTO ".$xoopsDB->prefix("makale_main")." VALUES (
		'$newid', 
		'$art_author_id', 
		'$art_author_ip', 
		'$art_cat_id', 
		'$art_title', 
		'$art_description', 
		'$art_makale_text', 
		NOW(), 
		0, 
		1, 
		0, 
		NOW(), 
		'$art_author_id', 
		'$art_author_ip', 
		0, 
		'$art_nohtml', 
		'$art_nosmiley', 
		'$art_noxcode', 
		'$art_noimage', 
		'$art_nobr')";

		$xoopsDB->query($sql) or $eh->show("0013");
		if ($newid == 0) {
			$newid = $xoopsDB->getInsertId();
		}

		if ($xoopsDB->getAffectedRows($sql)) {
			// Notification doodah.
			$extra_tags = array();
			$extra_tags['ART_TITLE'] = $art_title;
			$extra_tags['ART_URL']   = XOOPS_URL . "/modules/" . $xoopsModule->getVar('dirname') . "/admin/validate.php";
			$extra_tags['ART_ADMINURL']   = XOOPS_URL . "/modules/" . $xoopsModule->getVar('dirname') . "/admin/validate.php";
			$extra_tags['ART_ID']	= $newid;
			$notification_handler =& xoops_gethandler('notification');
			$notification_handler->triggerEvent('admin', 0, 'new_user_makale', $extra_tags);
			
			redirect_header(XOOPS_URL ."/modules/" . $xoopsModule->getVar('dirname') . "/index.php", 3, _MD_DBSUBMITTED);
			//echo "entered";
		} else {
			redirect_header(XOOPS_URL ."/modules/" . $xoopsModule->getVar('dirname') . "/index.php", 2, _MD_DBNOTUPDATED);
			//echo "not entered";
		}
		
		
	
} // end if

include XOOPS_ROOT_PATH.'/footer.php';
?>