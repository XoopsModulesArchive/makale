<?php

// The name of this module.
define('_MI_makale_NAME',		'makale');

// Description for this module.
define('_MI_makale_DESC',		'makale: makale Manager for Xoops v2');

// Names of blocks for this module.
define('_MI_makale_BNAME1',	'Son Yazýlar'); // New makale
define('_MI_makale_BNAME2',	'Beðenilen Yazýlar'); // Top by views
define('_MI_makale_BNAME3',	'Onaylanan Son Yazýlar'); // New makale - main display
define('_MI_makale_BNAME4',	'Çok oy alan yazýlar'); // Top by rates - main display

// Names of admin menu items
define('_MI_makale_ADMENU1',	'Anasayfa');
define('_MI_makale_ADMENU2',	'Yazý Ekle');
define('_MI_makale_ADMENU3',	'Yazý Düzenle ya da Sil');
define('_MI_makale_ADMENU4',	'Bölüm Ekle');
define('_MI_makale_ADMENU5',	'Bölüm Düzenle ya da Sil');
define('_MI_makale_ADMENU6',	'Onay Bekleyen Yazýlar');

// Sub menu items
define('_MI_makale_SUBMENU1',	'Yazý Gönder');

// Notification stuff
define('_MI_makale_GLOBAL_NOTIFY',     'Genel');
define('_MI_makale_GLOBAL_NOTIFYDSC',  'Hatýrlatma Seçenekleri.');

define('_MI_makale_USERSUBNOTIFY',		'Yönetim');
define('_MI_makale_USERSUBNOTIFYDSC',	'Kullanýcýlarýn gönderdiði yazýlarý hatýrlatma.');

define('_MI_makale_GLOBAL_NEWmakale_NOTIFY',      'Yeni yazý eklendi.');
define('_MI_makale_GLOBAL_NEWmakale_NOTIFYCAP',   'Yeni yazý eklendiðinde hatýrlat.');
define('_MI_makale_GLOBAL_NEWmakale_NOTIFYDSC',   'Yeni yazý kaydedildiðinde hatýrlat.');
define('_MI_makale_GLOBAL_NEWmakale_NOTIFYSBJ',   '[{X_SITENAME}] Yeni yazý eklendi.');

define('_MI_makale_GLOBAL_NEWCATEGORY_NOTIFY',      'Yeni bölüm oluþturuldu.');
define('_MI_makale_GLOBAL_NEWCATEGORY_NOTIFYCAP',   'Yeni bölüm oluþturulunca hatýrlat.');
define('_MI_makale_GLOBAL_NEWCATEGORY_NOTIFYDSC',   'Yeni bölüm kaydeildiðinde hatýrlat.');
define('_MI_makale_GLOBAL_NEWCATEGORY_NOTIFYSBJ',   '[{X_SITENAME}] New category added.');

define('_MI_ART_ADMIN_USERNEWmakale_NOTIFY',		'Yeni yazý gönderildi.');
define('_MI_ART_ADMIN_USERNEWmakale_NOTIFYCAP',	'Kullanýcýlar yeni yazý eklediðinde yöneticiyi uyar.');
define('_MI_ART_ADMIN_USERNEWmakale_NOTIFYDSC',	'Kullanýcýnýn yazýsý onaylandýðýnda bildir.');
define('_MI_ART_ADMIN_USERNEWmakale_NOTIFYSBJ',	'[{X_SITENAME}] Bir kullanýcýnýn gönderdiði yazý onay bekliyor.');


// Config stuff
define('_MI_ART_OPTION_LOGGEDIN',		'Konuklarýn yazý göndermesine izin verilsin mi?');
define('_MI_ART_OPTION_LOGGEDINDSC',	'');
define('_MI_ART_OPTIONALLOWSUB',		'Üyeler yazý gönderebilsin mi?');
define('_MI_ART_OPTIONALLOWSUBDSC',		'');
define('_MI_ART_OPTION_ICONSIZE',		'Yazý resmi boyutu');
define('_MI_ART_OPTION_ICONSIZEDSC',	'');
define('_MI_ART_OPTION_EDITADMIN',		'Yönetici yazý ekleme ekraný nasýl olsun?');
define('_MI_ART_OPTION_EDITADMINDSC',	'');
define('_MI_ART_OPTION_EDITUSER',		'Kullanýcý yazý ekleme ekraný nasýl olsun?');
define('_MI_ART_OPTION_EDITUSERDSC',	'');
define('_MI_ART_OPTION_INDEXVIEW',		'Anasayfa görünüm türü');
define('_MI_ART_OPTION_INDEXVIEWDSC',	'');
define('_MI_ART_OPTION_INDEXFLAT',		'Düz');
define('_MI_ART_OPTION_INDEXTHREAD',	'Yassý');
define('_MI_ART_OPTION_BGCOLOR',		'Yazý artalan rengi');
define('_MI_ART_OPTION_BGCOLORDSC',		'');
define('_MI_ART_OPTION_SHWREADS',		'Yazýlarýn kaç kez okunduðunu göster');
define('_MI_ART_OPTION_SHWREADSDSC',	'');
define('_MI_ART_OPTION_SHWPOSTED',		'Yazýnýn ne zaman gönderildiðini göster.');
define('_MI_ART_OPTION_SHWPOSTEDSC',	'');
define('_MI_ART_OPTION_SHWPOSTR',		'Yazýyý gönderenin adýný göster.');
define('_MI_ART_OPTION_SHWPOSTRDSC',	'');
define('_MI_ART_OPTION_SHWINDRDS',		'Yazý anasayfasýnda yazýlarýn kaç kez okunduðunu göster.');
define('_MI_ART_OPTION_SHWINDRDSDSC',	'');
define('_MI_ART_OPTION_ALLOWEMAIL',		'Arkadaþýna gönder seçeneði etkin olsun mu?');
define('_MI_ART_OPTION_ALLOWEMAILDSC',	'');
define('_MI_ART_OPTION_EMLLOGGEDIN',	'Üye giriþi yapmayanlara arkadaþýna gönder seçeneðini gösterme.');
define('_MI_ART_OPTION_EMLLOGGEDINDSC',	'');
define('_MI_ART_OPTION_EMLOWNMSG',		'Kendi yazýsýný baþkasýna göndermesine izin ver.');
define('_MI_ART_OPTION_EMLOWNMSGDSC',	'');
define('_MI_ART_OPTION_EMLMSGSBJCT',	'E-Posta Konusu');
define('_MI_ART_OPTION_EMLMSGSBJCTDSC',	'');
define('_MI_ART_OPTION_EMLMSGSUBJECT',	'Bu yazýyý arkadaþýna öner.');
define('_MI_ART_OPTION_EMLMSGCHRS',		'Ýletide kullanýlacak en çok harf sayýsý.');
define('_MI_ART_OPTION_EMLMSGCHRSDSC',	'');
define('_MI_ART_OPTION_NOINCADN',		'Yöneticlerin okuduðu yazýlar okuma sayýsýna eklensin mi?');
define('_MI_ART_OPTION_NOINCADNDSC',	'');
define('_MI_ART_OPTION_EMAILTXT',		'E-Posta Gönderisi. Arkadaþýna gönder seçeneðinde gönderilecek ileti metni... ');
define('_MI_ART_OPTION_EMAILTXTSC',		'');
define('_MI_ART_OPTION_EMAILTXTMSG',	'Merhaba,

 {SITE_NAME} sitesinde bir yazý okudum. Ýlgini çekeceðini düþündüðüm için sana da gönderiyorum.

{makale_URL}

Ýleti :

**

{USER_MESSAGE}

**

Gizli Bilgi:
Bu e-postanýn sizinle ilgisi olmadýðýný düþünüyorsanýz iletiyi geribu e-posta adresine geri gönderiniz. {ADMIN_EMAIL}.
Üye IP adresi: {USER_IP}
Üye Tarayýcýsý: {USER_BROWSER}
Zaman: {USER_TIME}

-- 
 {SITE_NAME}
 {SITE_URL}
');

define('_MI_ART_OPTION_DATEFRMT',	'Yazý tarihi biçimi');
define('_MI_ART_OPTION_DATEFRMTSC',	'');
define('_MI_ART_OPTION_DATEFRMTP',	'Sayfa yazdýrma tarih biçimi');
define('_MI_ART_OPTION_DATEFRMTPSC',	'');
define('_MI_ART_OPTION_ALLWPRT',	'Kayýtlý olmayan konuklara yazýcýdan çýktý alma izni verilsin mi?');
define('_MI_ART_OPTION_ALLWPRTDSC',	'');
define('_MI_ART_OPTION_PAGETTL',	'Yazý baþlýðý ve sayfa baþlýðý gösterilsin mi?:');
define('_MI_ART_OPTION_PAGETTLDSC',	'');
define('_MI_ART_OPTION_PAGETTL1',	'Hayýr');
define('_MI_ART_OPTION_PAGETTL2',	'Evet: &lt;modül adý&gt; - &lt;yazý adý&gt;');
define('_MI_ART_OPTION_PAGETTL3',	'Evet: &lt;yazý adý&gt; - &lt;modül adý&gt;');
define('_MI_ART_OPTION_PAGIN',		'Baþarýsýzlýk durumunda yazý numarasýný göster.:');
define('_MI_ART_OPTION_PAGINDSC',	'');

?>
