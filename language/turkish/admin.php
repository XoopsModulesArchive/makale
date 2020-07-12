<?php
// $Id: admin.php,v 1.23 2005/04/28 00:48:43 andrew Exp $

// English version.

// Template constant
// define("_AM_ART_*",	"");

// Generic form captions
// Table titles
define("_AM_ART_FRMTTLPRVWEDTS",	"Yazý Önizleme"); //(for pop-up preview)
define("_AM_ART_FRMTTLPRVWART",		"Yazý Önizleme"); // for in makale form page
define("_AM_ART_FRMTTLPRVWCAT",		"Preview category");
define("_AM_ART_FRMTTLADDART",		"Yazý ekle");
define("_AM_ART_FRMTTLADDCAT",		"Bölüm ekle");
define("_AM_ART_FRMTTLEDTCAT",		"Bölüm düzenle");
define("_AM_ART_FRMTTLVALART",		"Onay bekleyen yazýlar");
// Table column headers
define("_AM_ART_FRMCAPHDRID",		"ID");
define("_AM_ART_FRMCAPHDRTTL",		"Baþlýk");
define("_AM_ART_FRMCAPHDCATLNG",	"Bölüm");
define("_AM_ART_FRMCAPHDCATSRT",	"Bölüm");
define("_AM_ART_FRMCAPHDRORDR",		"Düzen");
// Table side caption
define("_AM_ART_FRMCAPSDTTL",		"Baþlýk");
define("_AM_ART_FRMCAPSDCTGRY",		"Bölüm");
define("_AM_ART_FRMCAPSDORDR",		"Düzen");
define("_AM_ART_FRMCAPSDDSPLY",		"Göster");
define("_AM_ART_FRMCAPSDDSCRN",		"Taným");
define("_AM_ART_FRMCAPSDCATDSC",	"Bölüm Tanýmý");
define("_AM_ART_FRMCAPSDARTCL",		"Yazý Metni");
// Link captions
define("_AM_ART_FRMCAPLNKPRVW",		"Önizleme için týklayýn");
define("_AM_ART_FRMCAPLNKEDT",		"Düzenlemek için týklayýn");
define("_AM_ART_FRMCAPLNKDLT",		"Silmek için týklayýn");
define("_AM_ART_FRMCAPLNKGTFRM",	"Ekleme bölümüne git");
define("_AM_ART_FRMCAPLNKVLTSHW",	"Onaylayýp yayýnlamak için týklayýn");
define("_AM_ART_FRMCAPLNKVLTHDE",	"Yazýyý reddetmek için týklayýn");
// Button caption
define("_AM_ART_FRMBTTNCLS",	"Pencereyi Kapat");
define("_AM_ART_FRMBTTNSAVE",	"Kaydet");
define("_AM_ART_FRMBTTNRST",	"Temizle");
define("_AM_ART_FRMBTTNCNCL",	"Ýptal");
define("_AM_ART_FRMBTTNPRVW",	"Önizleme");
// Form Element captions
define("_AM_ART_FRMCAPSLCTSHW",		"Yazýyý göstermek için kutucuðu doldurun.");
define("_AM_ART_FRMCAPSLCTNOHTML",	"Html kodlarýný gizle");
define("_AM_ART_FRMCAPSLCTNOBR",	"Kýrýk baðlantýyý gizle");
define("_AM_ART_FRMCAPSLCTNOSMLY",	"Gülücükleri gizle");
define("_AM_ART_FRMCAPSLCTNOXIMG",	"Resimleri gizle");
define("_AM_ART_FRMCAPSLCTNOXCDE",	"Kodlarý gizle");
define("_AM_ART_FRMCAPSLCTCATSHW",	"Bölümün gösterilmesini istiyorsanýz kutucuðu doldurun.");
// Misc
define("_AM_ART_FRMCAPSLCT",	"Bir bölüm seçin");
define("_AM_ART_FRMCAPNOVAL",	"Onay bekleyen yazý yok");
define("_AM_ART_FRMCAPSTTSPUB",	"Durum: Yayýnlandý");
define("_AM_ART_FRMCAPSTTSHDN",	"Durum: Gizli");
define("_AM_ART_FRMCAPPGBRK",	"");
// Javascript messages
define("_AM_ART_JVSRPTADDTTL",	"Bir baþlýk yazýn");
define("_AM_ART_JVSRPTSLTCAT",	"Açýlýr mönüden bölüm seçin");
// Confirmation messages
define("_AM_ART_ERRORNOCATS",	"Please <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/catadd.php\">add a category</a> before an makale.");

// Navigation/breadcrumbs/info bar
// Navigation bar
define("_AM_ART_NAVINDEX",		"Anasayfa");
define("_AM_ART_NAVARTADD",		"Yazý Ekle");
define("_AM_ART_NAVARTEDDEL",	"Yazý Düzenle ya da Sil");
define("_AM_ART_NAVARTEDT",		"Yazý Düzenle");
define("_AM_ART_NAVCATADD",		"Bölüm Ekle");
define("_AM_ART_NAVCATEDDEL",	"Bölüm Düzenle ya da Sil");
define("_AM_ART_NAVCATEDT",		"Bölüm Düzenle");
define("_AM_ART_NAVVALIDATE",	"Onay Bekleyenler");
define("_AM_ART_NAVFRNTPAGE",	"Ön Sayfa");
define("_AM_ART_NAVABOUT",		"Hakkýnda");
// "Breadcrumbs" bar
define("_AM_ART_NAVBCINDEX",	"Anasayfa");
define("_AM_ART_NAVBCARTEDDE",	"Yazý Düzenle ya da Sil");
define("_AM_ART_NAVBCVALART",	"Onay Bekleyen Yazýlar");
// Info bar
define("_AM_ART_NAVINFMOD",		"module");
define("_AM_ART_NAVINFPREF",	"Ayarlar");
define("_AM_ART_NAVINFHELP",	"Yardým");
define("_AM_ART_NAVINFABOUT",	"Hakkýnda");

// artadd.php


// arteddel.php
define("_AM_ART_LISTTITLE",		"Yazýlar");
define("_AM_ART_EDITTITLE",		"Yazýý Düzenle");
define("_AM_ART_FRMCAPNOARTS",	"Düzenlenecek yazý yok.");

// catadd.php
define("_AM_ART_FRMCAPNOCATS",	"Düzenlenecek bölüm yok.");

// validate.php


// index.php
define("_AM_ART_TTLGENSTATS",		"Genel Ýstatistikler");
define("_AM_ART_TTLGENVLDT",		"Onaylama:");
define("_AM_ART_TTLGENVLDTDSC",		"yazý onay için bekliyor <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/validate.php\"></a>.");
define("_AM_ART_TTLGENNUMARTS",		"Yazý Sayýsý:");
define("_AM_ART_TTLGENNUMARTSDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">yazý var.</a>.");
define("_AM_ART_TTLGENNUMCATS",		"Bölüm sayýsý:");
define("_AM_ART_TTLGENNUMCATSDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/cateddel.php\">bölüm var.</a>.");
define("_AM_ART_TTLGENNUMVIEWS",	"Okunma Sayýsý:");
define("_AM_ART_TTLGENNUMVIEWSDSC",	"defa <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">yazý</a> okundu.");
define("_AM_ART_TTLGENNUMPUB",		"Yayýnlanan Yazýlar:");
define("_AM_ART_TTLGENNUMPUBDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">yazý</a> yayýnlandý.");
define("_AM_ART_TTLGENNUMHIDDN",	"Gizli Yazýlar:");
define("_AM_ART_TTLGENNUMHIDDNDSC",	"yazý gizli durumda. (onaylanmamýþ <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">yazýlar</a>).");


// about.php



?>