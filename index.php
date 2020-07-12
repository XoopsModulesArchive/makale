<?php
// $Id: index.php,v 1.17 2005/07/23 00:50:29 andrew Exp $
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

include_once('header.php');
include_once('include/functions.inc.php');
$myts =& MyTextSanitizer::getInstance();

if (!isset($_GET['cat_id'])) {
	// this page uses smarty template
	// this must be set before including main header.php
	$xoopsOption['template_main'] = 'makale_index.html';
	include XOOPS_ROOT_PATH.'/header.php';
	$xoopsTpl->assign('index_page_title', _MD_INDEX_PAGE_TITLE);		// Page title
	$xoopsTpl->assign('category_list_title', _MD_CATLIST_CAPTION);		// table header caption
	$xoopsTpl->assign('makale_views_caption', _MD_makale_VIEW_CAP);	// makale views
	$xoopsTpl->assign('number_makale_caption', _MD_NUM_makale_CAP);	// number makale per category
	
	$result = $xoopsDB->query("SELECT id, cat_name, cat_description, cat_options FROM " .$xoopsDB->prefix('makale_cat') . " WHERE cat_showme=1 ORDER BY cat_weight ASC");
	while (list($id, $cat_name, $cat_description, $cat_options) = $xoopsDB->fetchRow($result)) {
		
		$optpieces = explode("|", $cat_options);
			$cat_nohtml		= $optpieces[0];
			$cat_nosmiley	= $optpieces[1];
			$cat_noxcode	= $optpieces[2];
			$cat_noimage	= $optpieces[3];
			$cat_nobr		= $optpieces[4];
		
		$xoopsTpl->assign('index_reads', $xoopsModuleConfig['showartreadsindx']);
	
		$category = array();
		$category['cat_name'] = $myts->htmlSpecialChars($myts->stripSlashesGPC($cat_name));
		$category['id'] = $id;
		$category['cat_description'] = $myts->displayTarea($cat_description, $cat_nohtml, $cat_nosmiley, $cat_noxcode, $cat_noimage, $cat_nobr);
		$category['number_makale'] = art_count($id); // art_count() grabs number of makale per category.
	
			if ($xoopsModuleConfig['indexviewtype'] == 1) {
		
				$sql = 'SELECT * FROM '.$xoopsDB->prefix('makale_main').' WHERE art_showme=1 AND art_validated=1 AND art_cat_id='.$id.' ORDER BY art_weight ASC, art_posted_datetime DESC';
				$result2 = $xoopsDB->query($sql);
				while ($myrow = $xoopsDB->fetchArray($result2)) {
			
					$category['makale'][] = array('id' => $myrow['id'], 'title' => $myts->displayTarea($myrow['art_title'], 0, 0, 1, 0, 0), 'makale_description' => $myts->displayTarea($myrow['art_description'], 1, 1, 1), 'makale_views' => $myrow['art_views']);
				}
		
			} // end if
		$xoopsTpl->append_by_ref('categories', $category);
		unset($category);
	}
} // end if

################################################################################
#
if (isset($_GET['cat_id'])) {
	$cat_id = $_GET['cat_id'];
	//echo $cat_id;

	if (isset($_REQUEST['id'])) { $id = $_REQUEST['id']; }
	if (isset($_GET['start'])) { $start = $_GET['start']; }
		else { $start = 0; }
	
	// get limit from prefs
	//$limit = 5;	
	$limit = $xoopsModuleConfig['artpagination'];
		
	$xoopsOption['template_main'] = 'makale_index.html';
	include XOOPS_ROOT_PATH.'/header.php';
	$xoopsTpl->assign('index_page_title', _MD_INDEX_PAGE_TITLE);		// Page title
	$xoopsTpl->assign('category_list_title', _MD_CATLIST_CAPTION);		// table header caption
	$xoopsTpl->assign('makale_views_caption', _MD_makale_VIEW_CAP);	// makale views
	$xoopsTpl->assign('number_makale_caption', _MD_NUM_makale_CAP);	// number makale per category
	$xoopsTpl->assign('makale_num', _MD_NUM_makale_NUM);	// *makale* <number> of <another>
	$xoopsTpl->assign('makale_of', _MD_NUM_makale_OF);	// makale <number> *of* <another>
	$xoopsTpl->assign('makale_to', _MD_NUM_makale_TO);
	$xoopsTpl->assign('makale_sep', _MD_NUM_makale_SEP);

	$result = $xoopsDB->query("SELECT id, cat_name, cat_description, cat_options FROM " .$xoopsDB->prefix('makale_cat') . " WHERE id=$cat_id AND cat_showme=1 ORDER BY cat_weight ASC");
	list($id, $cat_name, $cat_description, $cat_options) = $xoopsDB->fetchRow($result); 

		$optpieces = explode("|", $cat_options);
			$cat_nohtml		= $optpieces[0];
			$cat_nosmiley	= $optpieces[1];
			$cat_noxcode	= $optpieces[2];
			$cat_noimage	= $optpieces[3];
			$cat_nobr		= $optpieces[4];	

		$xoopsTpl->assign('index_reads', $xoopsModuleConfig['showartreadsindx']);
		
		$category = array();
		$category['cat_name'] = $myts->htmlSpecialChars($myts->stripSlashesGPC($cat_name));
		$category['id'] = $id;
		$category['cat_description'] = $myts->displayTarea($cat_description, $cat_nohtml, $cat_nosmiley, $cat_noxcode, $cat_noimage, $cat_nobr);
		$category['number_makale'] = art_count($id); // art_count() grabs number of makale per category.
		
				//**
				$sql = "SELECT * FROM " . $xoopsDB->prefix("makale_main") . " WHERE art_cat_id=$id AND art_validated=1 AND art_showme=1 ";
				$result=$xoopsDB->query($sql);

				$numresults=$xoopsDB->query($sql);
				$number_of_images = $xoopsDB->getRowsNum($result);
				$numrows = $number_of_images;	
				//echo  $numrows;
				//**
				
				// next determine if start has been passed to script, if not use 0
				if (empty($start)) {
					$start=0;
				}
				
				// Set $s (start) to 0
				$s = 0;

				// get results - ".=" adds following ling to original sql query above
				$sql .= " LIMIT $start,$limit";
				
				// begin to show results set (for pagination)
    			$count = 1 + $s ;
    
    			// shows x of y rows (pagination
				$a = $start + ($limit) ;
				if ($a > $numrows) { $a = $numrows ; }
				$b = $start + 1 ;
				
				$xoopsTpl->assign('makale_numtotal',$numrows);
				$xoopsTpl->assign('makale_numstart',$b);
				$xoopsTpl->assign('makale_numend',$a);
				
				// Prev/next links stuff
				if ($start >= 1) { // bypass PREV link if s is 0
					$prevnum=($start-$limit);
					$xoopsTpl->assign('makale_prev', '<a href="'. XOOPS_URL .'/modules/'. $xoopsModule->getVar('dirname') .'/index.php?cat_id='. $id .'&amp;start='. $prevnum .'">'._MD_NUM_makale_PREV.'</a>');
					//print "<span class=\"paglink\"><a href=\"" . $_SERVER['PHP_SELF'] . "?catid=$catid&start=$prevs\">&lt;&lt; Previous</a></span>";
				} else {
					//echo "<span class=\"paglinkshaded\">&lt;&lt; Previous</span>";
					$xoopsTpl->assign('makale_prev', _MD_NUM_makale_PREV);
				}
				
				// calculate number of pages needing links
				$pages=intval($numrows/$limit);

				// $pages now contains int of pages needed unless there is a remainder from division

				if ($numrows%$limit) {
					// has remainder so add one page
					$pages++;
				}
				
				// check to see if last page
				if (!((($start+$limit)/$limit)==$pages) && $pages!=1) {
					// not last page so give NEXT link
					$nextnum=$start+$limit;
					//echo "<span class=\"paglink\"><a href=\"" . $_SERVER['PHP_SELF']. "?catid=$catid&start=$news\">Next &gt;&gt;</a></span>";
					$xoopsTpl->assign('makale_next', '<a href="'. XOOPS_URL .'/modules/'. $xoopsModule->getVar('dirname') .'/index.php?cat_id='. $id .'&amp;start='. $nextnum .'">'._MD_NUM_makale_NEXT.'</a>');
				} else {
					//echo "<span class=\"paglinkshaded\">Next &gt;&gt;</span>";
					$xoopsTpl->assign('makale_next', _MD_NUM_makale_NEXT);
				}
				
				//$xoopsTpl->assign('makale_prev', '<a href="'. XOOPS_URL .'/modules/'. $xoopsModule->getVar('dirname') .'/index.php?cat_id='. $id .'">'._MD_NUM_makale_PREV.'</a>');
				//$xoopsTpl->assign('makale_next', _MD_NUM_makale_NEXT);
				
				//$sql = 'SELECT * FROM '.$xoopsDB->prefix('makale_main').' WHERE art_showme=1 AND art_validated AND art_cat_id='.$id.' ORDER BY art_weight ASC, art_posted_datetime DESC';
				$result2 = $xoopsDB->query($sql);
				while ($myrow = $xoopsDB->fetchArray($result2)) {
			
					$category['makale'][] = array('id' => $myrow['id'], 'title' => $myts->displayTarea($myrow['art_title'], 0, 0, 1, 0, 0), 'makale_description' => $myts->displayTarea($myrow['art_description'], 1, 1, 1), 'makale_views' => $myrow['art_views']);
				}

		$xoopsTpl->append_by_ref('categories', $category);
		unset($category);
	
	//} // end while
} // end if

include XOOPS_ROOT_PATH.'/footer.php';
?>