<?php

// The name of this module.
define('_MI_makaleS_NAME',		'makales');

// Description for this module.
define('_MI_makaleS_DESC',		'makales: makale Manager for Xoops v2');

// Names of blocks for this module.
define('_MI_makaleS_BNAME1',	'Latest makales'); // New makales
define('_MI_makaleS_BNAME2',	'Popular makales'); // Top by views
define('_MI_makaleS_BNAME3',	'Latest Published makales'); // New makales - main display
define('_MI_makaleS_BNAME4',	'Popular Published makales'); // Top by rates - main display

// Names of admin menu items
define('_MI_makale_ADMENU1',	'Index');
define('_MI_makale_ADMENU2',	'Add makales');
define('_MI_makale_ADMENU3',	'Edit/Delete makales');
define('_MI_makale_ADMENU4',	'Add categories');
define('_MI_makale_ADMENU5',	'Edit/Delete categories');
define('_MI_makale_ADMENU6',	'Validate makales');

// Sub menu items
define('_MI_makale_SUBMENU1',	'Submit makale');

// Notification stuff
define('_MI_makale_GLOBAL_NOTIFY',     'Global');
define('_MI_makale_GLOBAL_NOTIFYDSC',  'Global links notification options.');

define('_MI_makale_USERSUBNOTIFY',		'Admin');
define('_MI_makale_USERSUBNOTIFYDSC',	'Admin notification of user submitted makales.');

define('_MI_makale_GLOBAL_NEWmakale_NOTIFY',      'New makale added.');
define('_MI_makale_GLOBAL_NEWmakale_NOTIFYCAP',   'Notify me when new makales are added.');
define('_MI_makale_GLOBAL_NEWmakale_NOTIFYDSC',   'Receive notification when a new makale is added.');
define('_MI_makale_GLOBAL_NEWmakale_NOTIFYSBJ',   '[{X_SITENAME}] New makale added.');

define('_MI_makale_GLOBAL_NEWCATEGORY_NOTIFY',      'New category added.');
define('_MI_makale_GLOBAL_NEWCATEGORY_NOTIFYCAP',   'Notify me when new categories are added.');
define('_MI_makale_GLOBAL_NEWCATEGORY_NOTIFYDSC',   'Receive notification when a new category is added.');
define('_MI_makale_GLOBAL_NEWCATEGORY_NOTIFYSBJ',   '[{X_SITENAME}] New category added.');

define('_MI_ART_ADMIN_USERNEWmakale_NOTIFY',		'New makale submitted.');
define('_MI_ART_ADMIN_USERNEWmakale_NOTIFYCAP',	'Notify admin when user submits an makale.');
define('_MI_ART_ADMIN_USERNEWmakale_NOTIFYDSC',	'Receive notification when a user submits an makale for publication.');
define('_MI_ART_ADMIN_USERNEWmakale_NOTIFYSBJ',	'[{X_SITENAME}] A user has submitted an makale for validation.');


// Config stuff
define('_MI_ART_OPTION_LOGGEDIN',		'Allow anonymous submissions:');
define('_MI_ART_OPTION_LOGGEDINDSC',	'Allow makale submissions from anonymous users.');
define('_MI_ART_OPTIONALLOWSUB',		'Allow user makales');
define('_MI_ART_OPTIONALLOWSUBDSC',		'Allow users to submit makales.');
define('_MI_ART_OPTION_ICONSIZE',		'makale icon size');
define('_MI_ART_OPTION_ICONSIZEDSC',	'Size of icons for makale listings.');
define('_MI_ART_OPTION_EDITADMIN',		'Admin editor.');
define('_MI_ART_OPTION_EDITADMINDSC',	'The editor to use in the admin area. If a third party editor is selected, but not installed, the default editor will be used.');
define('_MI_ART_OPTION_EDITUSER',		'User editor.');
define('_MI_ART_OPTION_EDITUSERDSC',	'The editor to use in user/visitor areas. If a third party editor is selected, but not installed, the default editor will be used.');
define('_MI_ART_OPTION_INDEXVIEW',		'Index view type');
define('_MI_ART_OPTION_INDEXVIEWDSC',	'select how the main index page should show display.');
define('_MI_ART_OPTION_INDEXFLAT',		'Flat');
define('_MI_ART_OPTION_INDEXTHREAD',	'Threaded');
define('_MI_ART_OPTION_BGCOLOR',		'makale background');
define('_MI_ART_OPTION_BGCOLORDSC',		'The background colour for the makale text.');
define('_MI_ART_OPTION_SHWREADS',		'Show makale reads');
define('_MI_ART_OPTION_SHWREADSDSC',	'display numbers of times read on makale page.');
define('_MI_ART_OPTION_SHWPOSTED',		'Show makale posted');
define('_MI_ART_OPTION_SHWPOSTEDSC',	'display when makale was posted.');
define('_MI_ART_OPTION_SHWPOSTR',		'Show makale poster');
define('_MI_ART_OPTION_SHWPOSTRDSC',	'display who posted the makale.');
define('_MI_ART_OPTION_SHWINDRDS',		'Show reads in index');
define('_MI_ART_OPTION_SHWINDRDSDSC',	'display number of makale reads in index listing.');
define('_MI_ART_OPTION_ALLOWEMAIL',		'Allow e-mail');
define('_MI_ART_OPTION_ALLOWEMAILDSC',	'allow send e-mail to friend feature. Disabling this will also hide the e-mail link.');
define('_MI_ART_OPTION_EMLLOGGEDIN',	'Logged in to e-mail');
define('_MI_ART_OPTION_EMLLOGGEDINDSC',	'whether user should be logged in to use e-mail to friend feature.');
define('_MI_ART_OPTION_EMLOWNMSG',		'Allow own message');
define('_MI_ART_OPTION_EMLOWNMSGDSC',	'allow user to add their own message to e-mail.');
define('_MI_ART_OPTION_EMLMSGSBJCT',	'E-mail subject');
define('_MI_ART_OPTION_EMLMSGSBJCTDSC',	'the text that will appear in the e-mail\'s subject field.');
define('_MI_ART_OPTION_EMLMSGSUBJECT',	'A friend recommended this makale');
define('_MI_ART_OPTION_EMLMSGCHRS',		'No. characters in own message');
define('_MI_ART_OPTION_EMLMSGCHRSDSC',	'the maximum number of characters user is allowed to send in own message.');
define('_MI_ART_OPTION_NOINCADN',		'Don\'t increment views for admins');
define('_MI_ART_OPTION_NOINCADNDSC',	'when set, admins viewing makales will not increment how many times the makale has been viewed.');
define('_MI_ART_OPTION_EMAILTXT',		'E-mail message');
define('_MI_ART_OPTION_EMAILTXTSC',		'The text that will be sent in the e-mail to a friend message.');
define('_MI_ART_OPTION_EMAILTXTMSG',	'Hello,

A user of {SITE_NAME} feels that the following page may be of interest to you.

{makale_URL}

Their message below:

**

{USER_MESSAGE}

**

Security information:
If this e-mail has been sent inappropriately, please forward the complete e-mail to {ADMIN_EMAIL}.
User\'s IP address: {USER_IP}
User\'s Browser: {USER_BROWSER}
Time sent: {USER_TIME}

-- 
 {SITE_NAME}
 {SITE_URL}
');

define('_MI_ART_OPTION_DATEFRMT',	'Date format - makale');
define('_MI_ART_OPTION_DATEFRMTSC',	'Date format for the main makale page. See PHP\'s <a href="http://www.php.net/date" target="_blank">date format page</a> for the different date format characters you can use.');
define('_MI_ART_OPTION_DATEFRMTP',	'Date format - print');
define('_MI_ART_OPTION_DATEFRMTPSC',	'Date format for the printable version page. See PHP\'s <a href="http://www.php.net/date" target="_blank">date format page</a> for the different date format characters you can use.');
define('_MI_ART_OPTION_ALLWPRT',	'Allow printable page');
define('_MI_ART_OPTION_ALLWPRTDSC',	'allow visitors to use the printable version page. Disabling this will also hide the print link.');
define('_MI_ART_OPTION_PAGETTL',	'makale title as page title:');
define('_MI_ART_OPTION_PAGETTLDSC',	'display the makale\'s title in the page title.');
define('_MI_ART_OPTION_PAGETTL1',	'No');
define('_MI_ART_OPTION_PAGETTL2',	'Yes: &lt;module name&gt; - &lt;makale title&gt;');
define('_MI_ART_OPTION_PAGETTL3',	'Yes: &lt;makale title&gt; - &lt;module name&gt;');
define('_MI_ART_OPTION_PAGIN',		'Pagination limit:');
define('_MI_ART_OPTION_PAGINDSC',	'Number of makales to show in collapsed mode.');

?>
