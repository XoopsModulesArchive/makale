<?php

// The name of this module.
define('_MI_makale_NAME',		'makale');

// Description for this module.
define('_MI_makale_DESC',		'makale: makale Manager for Xoops v2');

// Names of blocks for this module.
define('_MI_makale_BNAME1',	'Son Yaz�lar'); // New makale
define('_MI_makale_BNAME2',	'Be�enilen Yaz�lar'); // Top by views
define('_MI_makale_BNAME3',	'Onaylanan Son Yaz�lar'); // New makale - main display
define('_MI_makale_BNAME4',	'�ok oy alan yaz�lar'); // Top by rates - main display

// Names of admin menu items
define('_MI_makale_ADMENU1',	'Anasayfa');
define('_MI_makale_ADMENU2',	'Yaz� Ekle');
define('_MI_makale_ADMENU3',	'Yaz� D�zenle ya da Sil');
define('_MI_makale_ADMENU4',	'B�l�m Ekle');
define('_MI_makale_ADMENU5',	'B�l�m D�zenle ya da Sil');
define('_MI_makale_ADMENU6',	'Onay Bekleyen Yaz�lar');

// Sub menu items
define('_MI_makale_SUBMENU1',	'Yaz� G�nder');

// Notification stuff
define('_MI_makale_GLOBAL_NOTIFY',     'Genel');
define('_MI_makale_GLOBAL_NOTIFYDSC',  'Hat�rlatma Se�enekleri.');

define('_MI_makale_USERSUBNOTIFY',		'Y�netim');
define('_MI_makale_USERSUBNOTIFYDSC',	'Kullan�c�lar�n g�nderdi�i yaz�lar� hat�rlatma.');

define('_MI_makale_GLOBAL_NEWmakale_NOTIFY',      'Yeni yaz� eklendi.');
define('_MI_makale_GLOBAL_NEWmakale_NOTIFYCAP',   'Yeni yaz� eklendi�inde hat�rlat.');
define('_MI_makale_GLOBAL_NEWmakale_NOTIFYDSC',   'Yeni yaz� kaydedildi�inde hat�rlat.');
define('_MI_makale_GLOBAL_NEWmakale_NOTIFYSBJ',   '[{X_SITENAME}] Yeni yaz� eklendi.');

define('_MI_makale_GLOBAL_NEWCATEGORY_NOTIFY',      'Yeni b�l�m olu�turuldu.');
define('_MI_makale_GLOBAL_NEWCATEGORY_NOTIFYCAP',   'Yeni b�l�m olu�turulunca hat�rlat.');
define('_MI_makale_GLOBAL_NEWCATEGORY_NOTIFYDSC',   'Yeni b�l�m kaydeildi�inde hat�rlat.');
define('_MI_makale_GLOBAL_NEWCATEGORY_NOTIFYSBJ',   '[{X_SITENAME}] New category added.');

define('_MI_ART_ADMIN_USERNEWmakale_NOTIFY',		'Yeni yaz� g�nderildi.');
define('_MI_ART_ADMIN_USERNEWmakale_NOTIFYCAP',	'Kullan�c�lar yeni yaz� ekledi�inde y�neticiyi uyar.');
define('_MI_ART_ADMIN_USERNEWmakale_NOTIFYDSC',	'Kullan�c�n�n yaz�s� onayland���nda bildir.');
define('_MI_ART_ADMIN_USERNEWmakale_NOTIFYSBJ',	'[{X_SITENAME}] Bir kullan�c�n�n g�nderdi�i yaz� onay bekliyor.');


// Config stuff
define('_MI_ART_OPTION_LOGGEDIN',		'Konuklar�n yaz� g�ndermesine izin verilsin mi?');
define('_MI_ART_OPTION_LOGGEDINDSC',	'');
define('_MI_ART_OPTIONALLOWSUB',		'�yeler yaz� g�nderebilsin mi?');
define('_MI_ART_OPTIONALLOWSUBDSC',		'');
define('_MI_ART_OPTION_ICONSIZE',		'Yaz� resmi boyutu');
define('_MI_ART_OPTION_ICONSIZEDSC',	'');
define('_MI_ART_OPTION_EDITADMIN',		'Y�netici yaz� ekleme ekran� nas�l olsun?');
define('_MI_ART_OPTION_EDITADMINDSC',	'');
define('_MI_ART_OPTION_EDITUSER',		'Kullan�c� yaz� ekleme ekran� nas�l olsun?');
define('_MI_ART_OPTION_EDITUSERDSC',	'');
define('_MI_ART_OPTION_INDEXVIEW',		'Anasayfa g�r�n�m t�r�');
define('_MI_ART_OPTION_INDEXVIEWDSC',	'');
define('_MI_ART_OPTION_INDEXFLAT',		'D�z');
define('_MI_ART_OPTION_INDEXTHREAD',	'Yass�');
define('_MI_ART_OPTION_BGCOLOR',		'Yaz� artalan rengi');
define('_MI_ART_OPTION_BGCOLORDSC',		'');
define('_MI_ART_OPTION_SHWREADS',		'Yaz�lar�n ka� kez okundu�unu g�ster');
define('_MI_ART_OPTION_SHWREADSDSC',	'');
define('_MI_ART_OPTION_SHWPOSTED',		'Yaz�n�n ne zaman g�nderildi�ini g�ster.');
define('_MI_ART_OPTION_SHWPOSTEDSC',	'');
define('_MI_ART_OPTION_SHWPOSTR',		'Yaz�y� g�nderenin ad�n� g�ster.');
define('_MI_ART_OPTION_SHWPOSTRDSC',	'');
define('_MI_ART_OPTION_SHWINDRDS',		'Yaz� anasayfas�nda yaz�lar�n ka� kez okundu�unu g�ster.');
define('_MI_ART_OPTION_SHWINDRDSDSC',	'');
define('_MI_ART_OPTION_ALLOWEMAIL',		'Arkada��na g�nder se�ene�i etkin olsun mu?');
define('_MI_ART_OPTION_ALLOWEMAILDSC',	'');
define('_MI_ART_OPTION_EMLLOGGEDIN',	'�ye giri�i yapmayanlara arkada��na g�nder se�ene�ini g�sterme.');
define('_MI_ART_OPTION_EMLLOGGEDINDSC',	'');
define('_MI_ART_OPTION_EMLOWNMSG',		'Kendi yaz�s�n� ba�kas�na g�ndermesine izin ver.');
define('_MI_ART_OPTION_EMLOWNMSGDSC',	'');
define('_MI_ART_OPTION_EMLMSGSBJCT',	'E-Posta Konusu');
define('_MI_ART_OPTION_EMLMSGSBJCTDSC',	'');
define('_MI_ART_OPTION_EMLMSGSUBJECT',	'Bu yaz�y� arkada��na �ner.');
define('_MI_ART_OPTION_EMLMSGCHRS',		'�letide kullan�lacak en �ok harf say�s�.');
define('_MI_ART_OPTION_EMLMSGCHRSDSC',	'');
define('_MI_ART_OPTION_NOINCADN',		'Y�neticlerin okudu�u yaz�lar okuma say�s�na eklensin mi?');
define('_MI_ART_OPTION_NOINCADNDSC',	'');
define('_MI_ART_OPTION_EMAILTXT',		'E-Posta G�nderisi. Arkada��na g�nder se�ene�inde g�nderilecek ileti metni... ');
define('_MI_ART_OPTION_EMAILTXTSC',		'');
define('_MI_ART_OPTION_EMAILTXTMSG',	'Merhaba,

 {SITE_NAME} sitesinde bir yaz� okudum. �lgini �ekece�ini d���nd���m i�in sana da g�nderiyorum.

{makale_URL}

�leti :

**

{USER_MESSAGE}

**

Gizli Bilgi:
Bu e-postan�n sizinle ilgisi olmad���n� d���n�yorsan�z iletiyi geribu e-posta adresine geri g�nderiniz. {ADMIN_EMAIL}.
�ye IP adresi: {USER_IP}
�ye Taray�c�s�: {USER_BROWSER}
Zaman: {USER_TIME}

-- 
 {SITE_NAME}
 {SITE_URL}
');

define('_MI_ART_OPTION_DATEFRMT',	'Yaz� tarihi bi�imi');
define('_MI_ART_OPTION_DATEFRMTSC',	'');
define('_MI_ART_OPTION_DATEFRMTP',	'Sayfa yazd�rma tarih bi�imi');
define('_MI_ART_OPTION_DATEFRMTPSC',	'');
define('_MI_ART_OPTION_ALLWPRT',	'Kay�tl� olmayan konuklara yaz�c�dan ��kt� alma izni verilsin mi?');
define('_MI_ART_OPTION_ALLWPRTDSC',	'');
define('_MI_ART_OPTION_PAGETTL',	'Yaz� ba�l��� ve sayfa ba�l��� g�sterilsin mi?:');
define('_MI_ART_OPTION_PAGETTLDSC',	'');
define('_MI_ART_OPTION_PAGETTL1',	'Hay�r');
define('_MI_ART_OPTION_PAGETTL2',	'Evet: &lt;mod�l ad�&gt; - &lt;yaz� ad�&gt;');
define('_MI_ART_OPTION_PAGETTL3',	'Evet: &lt;yaz� ad�&gt; - &lt;mod�l ad�&gt;');
define('_MI_ART_OPTION_PAGIN',		'Ba�ar�s�zl�k durumunda yaz� numaras�n� g�ster.:');
define('_MI_ART_OPTION_PAGINDSC',	'');

?>
