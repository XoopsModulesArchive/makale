<?php
// $Id: xoops_version.php,v 1.37 2005/07/23 00:50:29 andrew Exp $
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


// Any copyright notice, instructions, etc...
$modversion['name'] = _MI_makale_NAME;
$modversion['version'] = 0.26;
$modversion['description'] = _MI_makale_DESC;
$modversion['credits'] = '';
$modversion['author'] = 'Andrew Mills';
$modversion['help'] = 'help.html';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'modulelogo.png';
$modversion['dirname'] = 'makale';

// Admin things
$modversion['hasAdmin']		= 1;
$modversion['adminindex']	= "admin/index.php";
$modversion['adminmenu']	= "admin/menu.php";

// Menu
$modversion['hasMain'] = 1;
// only show if users are allowed to submit makale
global $xoopsModule, $xoopsModuleConfig;
if(isset($xoopsModuleConfig['allowusersubmit']) && $xoopsModuleConfig['allowusersubmit'] == 1) {
	$modversion['sub'][1]['name'] = _MI_makale_SUBMENU1;
	$modversion['sub'][1]['url']  = "submit.php";
}

// Templates
$modversion['templates'][1]['file'] 		= 'makale_index.html'; // main index
$modversion['templates'][1]['description'] 	= '';
$modversion['templates'][2]['file']			= 'makale_item.html'; // view makale
$modversion['templates'][2]['description'] 	= '';
$modversion['templates'][3]['file']			= 'makale_email.html'; // view makale
$modversion['templates'][3]['description'] 	= '';
$modversion['templates'][4]['file']			= 'makale_submit.html'; // view makale
$modversion['templates'][4]['description'] 	= '';


// Blocks
$modversion['blocks'][1]['file']		= "makale_latest.php";
$modversion['blocks'][1]['name']		= _MI_makale_BNAME1;
$modversion['blocks'][1]['description']	= "Shows latest makale";
$modversion['blocks'][1]['show_func']	= "makale_latest_show";
$modversion['blocks'][1]['edit_func']   = "makale_latest_edit";
$modversion['blocks'][1]['options']     = "5|18";
$modversion['blocks'][1]['template']	= "makale_block_latest.html";

$modversion['blocks'][2]['file']		= "makale_popular.php";
$modversion['blocks'][2]['name']		= _MI_makale_BNAME2;
$modversion['blocks'][2]['description']	= "Shows most popular makale by views";
$modversion['blocks'][2]['show_func']	= "makale_popular_show";
$modversion['blocks'][2]['edit_func']   = "makale_popular_edit";
$modversion['blocks'][2]['options']     = "5|16";
$modversion['blocks'][2]['template']	= "makale_block_popular.html";

$modversion['blocks'][3]['file']		= "makale_latest_main.php";
$modversion['blocks'][3]['name']		= _MI_makale_BNAME3;
$modversion['blocks'][3]['description']	= "Shows latest makale - for centre section";
$modversion['blocks'][3]['show_func']	= "makale_latest_main_show";
$modversion['blocks'][3]['edit_func']   = "makale_latest_main_edit";
$modversion['blocks'][3]['options']     = "5|50|200";
$modversion['blocks'][3]['template']	= "makale_block_latest_main.html";

$modversion['blocks'][4]['file']		= "makale_popular_main.php";
$modversion['blocks'][4]['name']		= _MI_makale_BNAME4;
$modversion['blocks'][4]['description']	= "Shows most popular makale by views - for centre section";
$modversion['blocks'][4]['show_func']	= "makale_popular_main_show";
$modversion['blocks'][4]['edit_func']   = "makale_popular_main_edit";
$modversion['blocks'][4]['options']     = "5|50|200";
$modversion['blocks'][4]['template']	= "makale_block_popular_main.html";

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql']		= "sql/mysql.sql";


// Tables created by sql file (without prefix!)
$modversion['tables'][0]	= "makale_cat";
$modversion['tables'][1]	= "makale_main";
$modversion['tables'][2]	= "makale_rating";

// Comments
$modversion['hasComments'] = 1;
$modversion['comments']['itemName'] = 'id';
$modversion['comments']['pageName'] = 'makale.php';

// Search
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = "include/search.inc.php";
$modversion['search']['func'] = "makale_search";


// Notification - makale_notify_iteminfo
$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'makale_notify_iteminfo';

// Notification categories
$modversion['notification']['category'][1]['name'] = 'global';
$modversion['notification']['category'][1]['title'] = _MI_makale_GLOBAL_NOTIFY;
$modversion['notification']['category'][1]['description'] = _MI_makale_GLOBAL_NOTIFYDSC;
$modversion['notification']['category'][1]['subscribe_from'] = array('index.php','makale.php');

$modversion['notification']['category'][2]['name']	= 'admin';
$modversion['notification']['category'][2]['title']	= _MI_makale_USERSUBNOTIFY;
$modversion['notification']['category'][2]['description']	= _MI_makale_USERSUBNOTIFYDSC;
$modversion['notification']['category'][2]['subscribe_from']	= array('index.php','makale.php');

$modversion['notification']['event'][1]['name'] = 'new_makale';
$modversion['notification']['event'][1]['category'] = 'global';
$modversion['notification']['event'][1]['title'] = _MI_makale_GLOBAL_NEWmakale_NOTIFY;
$modversion['notification']['event'][1]['caption'] = _MI_makale_GLOBAL_NEWmakale_NOTIFYCAP;
$modversion['notification']['event'][1]['description'] = _MI_makale_GLOBAL_NEWmakale_NOTIFYDSC;
$modversion['notification']['event'][1]['mail_template'] = 'global_newmakale_notify';
$modversion['notification']['event'][1]['mail_subject'] = _MI_makale_GLOBAL_NEWmakale_NOTIFYSBJ;

$modversion['notification']['event'][2]['name'] = 'new_user_makale';
$modversion['notification']['event'][2]['category'] = 'admin';
$modversion['notification']['event'][2]['title'] = _MI_ART_ADMIN_USERNEWmakale_NOTIFY;
$modversion['notification']['event'][2]['caption'] = _MI_ART_ADMIN_USERNEWmakale_NOTIFYCAP;
$modversion['notification']['event'][2]['description'] = _MI_ART_ADMIN_USERNEWmakale_NOTIFYDSC;
$modversion['notification']['event'][2]['mail_template'] = 'admin_newusermakale_notify';
$modversion['notification']['event'][2]['mail_subject'] = _MI_ART_ADMIN_USERNEWmakale_NOTIFYSBJ;
$modversion['notification']['event'][2]['admin_only'] = 1;

$modversion['notification']['event'][3]['name'] = 'new_category';
$modversion['notification']['event'][3]['category'] = 'global';
$modversion['notification']['event'][3]['title'] = _MI_makale_GLOBAL_NEWCATEGORY_NOTIFY;
$modversion['notification']['event'][3]['caption'] = _MI_makale_GLOBAL_NEWCATEGORY_NOTIFYCAP;
$modversion['notification']['event'][3]['description'] = _MI_makale_GLOBAL_NEWCATEGORY_NOTIFYDSC;
$modversion['notification']['event'][3]['mail_template'] = 'global_newcategory_notify';
$modversion['notification']['event'][3]['mail_subject'] = _MI_makale_GLOBAL_NEWCATEGORY_NOTIFYSBJ;



// Config options
// allow users to submit
$modversion['config'][1]['name']		= 'allowusersubmit';
$modversion['config'][1]['title']		= '_MI_ART_OPTIONALLOWSUB';
$modversion['config'][1]['description']	= '_MI_ART_OPTIONALLOWSUBDSC';
$modversion['config'][1]['formtype']	= 'yesno';
$modversion['config'][1]['valuetype']	= 'int';
$modversion['config'][1]['default']		= 0;

// Log in for user submit page
$modversion['config'][2]['name']		= 'loggedin';
$modversion['config'][2]['title']		= '_MI_ART_OPTION_LOGGEDIN';
$modversion['config'][2]['description']	= '_MI_ART_OPTION_LOGGEDINDSC';
$modversion['config'][2]['formtype']	= 'yesno';
$modversion['config'][2]['valuetype']	= 'int';
$modversion['config'][2]['default']		= 0;

// pixel size of makale listing icon
/*
$modversion['config'][3]['name']		= 'makaleiconsize';
$modversion['config'][3]['title']		= '_MI_ART_OPTION_ICONSIZE';
$modversion['config'][3]['description']	= '_MI_ART_OPTION_ICONSIZEDSC';
$modversion['config'][3]['formtype']	= 'textbox';
$modversion['config'][3]['valuetype']	= 'int';
$modversion['config'][3]['default']		= '30';
*/
// default admin editor
$modversion['config'][4]['name']		= 'makaleeditadmin';
$modversion['config'][4]['title']		= '_MI_ART_OPTION_EDITADMIN';
$modversion['config'][4]['description']	= '_MI_ART_OPTION_EDITADMINDSC';
$modversion['config'][4]['formtype']	= 'select';
$modversion['config'][4]['valuetype']	= 'int';
$modversion['config'][4]['default']		= '0';
$modversion['config'][4]['options']		= array('XOOPS' => '0', 'SPAW' => '1', 'FCK Editor' => '2', 'HTML Area' => '3');

// user (visitor) editor
$modversion['config'][5]['name']		= 'makaleedituser';
$modversion['config'][5]['title']		= '_MI_ART_OPTION_EDITUSER';
$modversion['config'][5]['description']	= '_MI_ART_OPTION_EDITUSERDSC';
$modversion['config'][5]['formtype']	= 'select';
$modversion['config'][5]['valuetype']	= 'int';
$modversion['config'][5]['default']		= '0';
$modversion['config'][5]['options']		= array('XOOPS' => '0', 'SPAW' => '1', 'FCK Editor' => '2', 'HTML Area' => '3');

// Index view type
$modversion['config'][6]['name']		= 'indexviewtype';
$modversion['config'][6]['title']		= '_MI_ART_OPTION_INDEXVIEW';
$modversion['config'][6]['description']	= '_MI_ART_OPTION_INDEXVIEWDSC';
$modversion['config'][6]['formtype']	= 'select';
$modversion['config'][6]['valuetype']	= 'int';
$modversion['config'][6]['default']		= '1';
$modversion['config'][6]['options']		= array('_MI_ART_OPTION_INDEXTHREAD' => '0', '_MI_ART_OPTION_INDEXFLAT' => '1');

// Background colour of makale
$modversion['config'][7]['name']		= 'artbackgroundcolour';
$modversion['config'][7]['title']		= '_MI_ART_OPTION_BGCOLOR';
$modversion['config'][7]['description']	= '_MI_ART_OPTION_BGCOLORDSC';
$modversion['config'][7]['formtype']	= 'textbox';
$modversion['config'][7]['valuetype']	= 'text';
$modversion['config'][7]['default']		= 'white';

// Show no. makale reads
$modversion['config'][8]['name']		= 'showartreads';                
$modversion['config'][8]['title']		= '_MI_ART_OPTION_SHWREADS';        
$modversion['config'][8]['description']	= '_MI_ART_OPTION_SHWREADSDSC';
$modversion['config'][8]['formtype']	= 'yesno';                       
$modversion['config'][8]['valuetype']	= 'int';                        
$modversion['config'][8]['default']		= 1;

// Show when makale posted
$modversion['config'][9]['name']		= 'showartposted';                
$modversion['config'][9]['title']		= '_MI_ART_OPTION_SHWPOSTED';        
$modversion['config'][9]['description']	= '_MI_ART_OPTION_SHWPOSTEDSC';
$modversion['config'][9]['formtype']	= 'yesno';                       
$modversion['config'][9]['valuetype']	= 'int';                        
$modversion['config'][9]['default']		= 1;

// Show name of makale poster
$modversion['config'][10]['name']			= 'showartposter';                
$modversion['config'][10]['title']			= '_MI_ART_OPTION_SHWPOSTR';        
$modversion['config'][10]['description']	= '_MI_ART_OPTION_SHWPOSTRDSC';
$modversion['config'][10]['formtype']		= 'yesno';                       
$modversion['config'][10]['valuetype']		= 'int';                        
$modversion['config'][10]['default']		= 1;

// Show/allow printable page
$modversion['config'][11]['name']			= 'allowprintable';
$modversion['config'][11]['title']			= '_MI_ART_OPTION_ALLWPRT';        
$modversion['config'][11]['description']	= '_MI_ART_OPTION_ALLWPRTDSC';
$modversion['config'][11]['formtype']		= 'yesno';                       
$modversion['config'][11]['valuetype']		= 'int';                        
$modversion['config'][11]['default']		= 1;

// noincrementifadmin
$modversion['config'][12]['name']			= 'noincrementifadmin';                
$modversion['config'][12]['title']			= '_MI_ART_OPTION_NOINCADN';        
$modversion['config'][12]['description']	= '_MI_ART_OPTION_NOINCADNDSC';
$modversion['config'][12]['formtype']		= 'yesno';                       
$modversion['config'][12]['valuetype']		= 'int';                        
$modversion['config'][12]['default']		= 0;

// Show no. makale reads in index
$modversion['config'][13]['name']			= 'showartreadsindx';                
$modversion['config'][13]['title']			= '_MI_ART_OPTION_SHWINDRDS';        
$modversion['config'][13]['description']	= '_MI_ART_OPTION_SHWINDRDSDSC';
$modversion['config'][13]['formtype']		= 'yesno';                       
$modversion['config'][13]['valuetype']		= 'int';                        
$modversion['config'][13]['default']		= 1;

// Allow e-mail to friend feature
$modversion['config'][14]['name']			= 'allowemailtofriend';
$modversion['config'][14]['title']			= '_MI_ART_OPTION_ALLOWEMAIL';
$modversion['config'][14]['description']	= '_MI_ART_OPTION_ALLOWEMAILDSC';
$modversion['config'][14]['formtype']		= 'yesno';
$modversion['config'][14]['valuetype']		= 'int';
$modversion['config'][14]['default']		= 1;

// Should be logged in for e-mail
$modversion['config'][15]['name']			= 'emailtofriendlogin';
$modversion['config'][15]['title']			= '_MI_ART_OPTION_EMLLOGGEDIN';
$modversion['config'][15]['description']	= '_MI_ART_OPTION_EMLLOGGEDINDSC';
$modversion['config'][15]['formtype']		= 'yesno';
$modversion['config'][15]['valuetype']		= 'int';
$modversion['config'][15]['default']		= 1;

// Allow user to include own message
$modversion['config'][16]['name']			= 'emailtofriendownmsg';
$modversion['config'][16]['title']			= '_MI_ART_OPTION_EMLOWNMSG';
$modversion['config'][16]['description']	= '_MI_ART_OPTION_EMLOWNMSGDSC';
$modversion['config'][16]['formtype']		= 'yesno';
$modversion['config'][16]['valuetype']		= 'int';
$modversion['config'][16]['default']		= 1;

// Characters in message
$modversion['config'][17]['name']			= 'emailtofreindchars';
$modversion['config'][17]['title']			= '_MI_ART_OPTION_EMLMSGCHRS';
$modversion['config'][17]['description']	= '_MI_ART_OPTION_EMLMSGCHRSDSC';
$modversion['config'][17]['formtype']		= 'textbox';
$modversion['config'][17]['valuetype']		= 'int';
$modversion['config'][17]['default']		= '200'; 

// Subject text 
$modversion['config'][18]['name']			= 'emailtofreindsubect';
$modversion['config'][18]['title']			= '_MI_ART_OPTION_EMLMSGSBJCT';
$modversion['config'][18]['description']	= '_MI_ART_OPTION_EMLMSGSBJCTDSC';
$modversion['config'][18]['formtype']		= 'textbox';
$modversion['config'][18]['valuetype']		= 'text';
$modversion['config'][18]['default']		= _MI_ART_OPTION_EMLMSGSUBJECT; 

// send to friend e-mail text
$modversion['config'][19]['name']			= 'emailtext';
$modversion['config'][19]['title']			= '_MI_ART_OPTION_EMAILTXT';
$modversion['config'][19]['description']	= '_MI_ART_OPTION_EMAILTXTSC';
$modversion['config'][19]['formtype']		= 'textarea';
$modversion['config'][19]['valuetype']		= 'text';
$modversion['config'][19]['default']		= _MI_ART_OPTION_EMAILTXTMSG;

// Date format - makale page
$modversion['config'][20]['name']			= 'dateformat';
$modversion['config'][20]['title']			= '_MI_ART_OPTION_DATEFRMT';
$modversion['config'][20]['description']	= '_MI_ART_OPTION_DATEFRMTSC';
$modversion['config'][20]['formtype']		= 'textbox';
$modversion['config'][20]['valuetype']		= 'text';
$modversion['config'][20]['default']		= 'D d M Y';

// Date format - printable page
$modversion['config'][21]['name']			= 'dateformatprint';
$modversion['config'][21]['title']			= '_MI_ART_OPTION_DATEFRMTP';
$modversion['config'][21]['description']	= '_MI_ART_OPTION_DATEFRMTPSC';
$modversion['config'][21]['formtype']		= 'textbox';
$modversion['config'][21]['valuetype']		= 'text';
$modversion['config'][21]['default']		= 'D d M Y';

// Show makale title in page title
$modversion['config'][22]['name']			= 'titleaspagetitle';
$modversion['config'][22]['title']			= '_MI_ART_OPTION_PAGETTL';
$modversion['config'][22]['description']	= '_MI_ART_OPTION_PAGETTLDSC';
$modversion['config'][22]['formtype']		= 'select';
$modversion['config'][22]['valuetype']		= 'int';
$modversion['config'][22]['default']		= '1';
$modversion['config'][22]['options']		= array('_MI_ART_OPTION_PAGETTL1' => '0', '_MI_ART_OPTION_PAGETTL2' => '1', '_MI_ART_OPTION_PAGETTL3' => '2');

// Pa
$modversion['config'][23]['name']			= 'artpagination';
$modversion['config'][23]['title']			= '_MI_ART_OPTION_PAGIN';
$modversion['config'][23]['description']	= '_MI_ART_OPTION_PAGINDSC';
$modversion['config'][23]['formtype']		= 'textbox';
$modversion['config'][23]['valuetype']		= 'int';
$modversion['config'][23]['default']		= '10';
//$modversion['config'][23]['options']		= array('_MI_ART_OPTION_PAGETTL1' => '0', '_MI_ART_OPTION_PAGETTL2' => '1', '_MI_ART_OPTION_PAGETTL3' => '2');




?>
