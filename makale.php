<?php
// $Id: makale.php,v 1.22 2005/06/05 00:18:11 andrew Exp $
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

if (isset($_GET['id'])) {
		$id = $_GET['id'];
	
	// this page uses smarty template
	// this must be set before including main header.php
	$xoopsOption['template_main'] = 'makale_item.html';
	include XOOPS_ROOT_PATH.'/header.php';
	$xoopsTpl->assign('index_link_text', _MD_INDEXLINKTEXT); // Link text back to index.
	$xoopsTpl->assign('print_art_link', _MD_INDEXLINKPRINT); // Text for print link
	$xoopsTpl->assign('posted_on', _MD_POSTEDON);			 // Posted on text
	$xoopsTpl->assign('art_reads_cap', _MD_READS);			 // Text for reads
	$xoopsTpl->assign('email_friend', _MD_EMAIL);			 // text for email to friend
	$xoopsTpl->assign('art_post_by', _MD_ART_POSTER);		 // text for email to friend

	$sql = ("SELECT * FROM " . $xoopsDB->prefix("makale_main") . " WHERE id=" . $id . " AND art_validated=1 AND art_showme=1 ORDER BY id LIMIT 1");
	$result=$xoopsDB->query($sql);
	
	    if ($xoopsDB->getRowsNum($result) > 0) {
	        while($myrow = $xoopsDB->fetchArray($result)) {
    	
		        $xoopsTpl->assign('makale_id', $myrow['id']);
		        $xoopsTpl->assign('makalebg', $xoopsModuleConfig['artbackgroundcolour']); // background colour
		        $xoopsTpl->assign('email_allow', $xoopsModuleConfig['allowemailtofriend']); // show e-mail link
		        $xoopsTpl->assign('print_allow', $xoopsModuleConfig['allowprintable']); // 
		        $xoopsTpl->assign('show_art_reads', $xoopsModuleConfig['showartreads']); // show number of times makale read
		        $xoopsTpl->assign('show_art_posted', $xoopsModuleConfig['showartposted']); // show when published
		        $xoopsTpl->assign('show_art_poster', $xoopsModuleConfig['showartposter']); // show makale's publisher

		        $makale = array();
		        $makale['id']					= $myrow['id'];
		        $makale['art_author_id']		= $myrow['art_author_id'];
		        $makale['art_author_name']		= XoopsUser::getUnameFromId($myrow['art_author_id'],0); // later add realname option - http://www.xoops.org/misc/api/kernel/XoopsUser.html#getUnameFromId
		        $makale['makale_title']		= $myts->htmlSpecialChars($myts->stripSlashesGPC($myrow['art_title']));
		        $makale['art_views']			= $myrow['art_views'];
		        $makale['art_posted_datetime']	= post_date($myrow['art_posted_datetime'], $xoopsModuleConfig['dateformat']); // 

					if(isset($_GET['page'])) { $page = $_GET['page']; }
						else { $page = "" ;}
					
					$content = $myrow['art_makale_text'];

					// Based on pagebreak in original Sections module
		        	// Rip the makale into pages. Delimiter string is "[pagebreak]" 
					$contentpages = explode( "[pagebreak]", $content);
					$pageno = count($contentpages);
					/* Define the current page	*/
					if ( $page=="" || $page < 1 ) {
						$page = 1;
					}
					if ( $page > $pageno ) {
	  					$page = $pageno;
					}
					
					$arrayelement = (int)$page;
					$arrayelement --;
					// next page stuff
					if ( $page >= $pageno ) {
						$makale['pagenext'] = _MD_PAGENEXT;
					} else {
						$next_pagenumber = $page + 1;
						$makale['pagenext'] = "<a href=\"makale.php?id=" . $id . "&amp;page=" . $next_pagenumber . "\">" . _MD_PAGENEXT . "</a>";
					}
					// prev page stuff
					if( $page <= 1 ) {
						$makale['pageprev'] = _MD_PAGEPREV;
					} else {
						$previous_pagenumber = $page -1;
						$makale['pageprev'] = "<a href=\"makale.php?id=" . $id . "&amp;page=" . $previous_pagenumber . "\">" . _MD_PAGEPREV . "</a>";
					}
					
					$makale['pagenum'] = _MD_PAGENUM;
					$makale['pageof']  = _MD_PAGEOF;
					$makale['pagenumint'] = $pageno;
					$makale['pageofint']  = $page;
					
					// switch to show/hide prev/next links
					$xoopsTpl->assign('numpages', $pageno);
					
					// add custom title to page title - "<{$xoops_pagetitle}>" - titleaspagetitle
					if ($xoopsModuleConfig['titleaspagetitle'] == 1) {
						$xoopsTpl->assign('xoops_pagetitle', $xoopsModule->getVar('name').' - '.$makale['makale_title']); // module name - makale title
					}
					if ($xoopsModuleConfig['titleaspagetitle'] == 2) {
						$xoopsTpl->assign('xoops_pagetitle', $makale['makale_title'].' - '.$xoopsModule->getVar('name')); // makale title -  module name
					}
					
		        $makale['art_makale_text'] = $myts->displayTarea($contentpages[$arrayelement], $myrow['art_nohtml'], $myrow['art_nosmiley'], $myrow['art_noxcode'], $myrow['art_noimage'], $myrow['art_nobr']);

	        } // end while
	        $xoopsTpl->append_by_ref('makale', $makale);
	        unset($makale);
	        
	        // we don't want to increment the views for each page of the
	        // makale
	        if ($page <= 1) {
				if (!$xoopsUser OR ($xoopsUser->isAdmin($xoopsModule->mid()) AND  $xoopsModuleConfig['noincrementifadmin'] != 1)) {
	   				increment_makale_views($id);
				}
    		}
        } // 
        else {
	        $xoopsTpl->assign('noart', 1); // no makale switch
	        $xoopsTpl->assign('nomakale', _MD_NOmakale);  // no makale error message	        
        }
} // end if


include XOOPS_ROOT_PATH.'/include/comment_view.php';
include XOOPS_ROOT_PATH.'/footer.php';
?>