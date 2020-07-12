<?php
// $Id: admin.php,v 1.23 2005/04/28 00:48:43 andrew Exp $

// English version.

// Template constant
// define("_AM_ART_*",	"");

// Generic form captions
// Table titles
define("_AM_ART_FRMTTLPRVWEDTS",	"Yaz� �nizleme"); //(for pop-up preview)
define("_AM_ART_FRMTTLPRVWART",		"Yaz� �nizleme"); // for in makale form page
define("_AM_ART_FRMTTLPRVWCAT",		"Preview category");
define("_AM_ART_FRMTTLADDART",		"Yaz� ekle");
define("_AM_ART_FRMTTLADDCAT",		"B�l�m ekle");
define("_AM_ART_FRMTTLEDTCAT",		"B�l�m d�zenle");
define("_AM_ART_FRMTTLVALART",		"Onay bekleyen yaz�lar");
// Table column headers
define("_AM_ART_FRMCAPHDRID",		"ID");
define("_AM_ART_FRMCAPHDRTTL",		"Ba�l�k");
define("_AM_ART_FRMCAPHDCATLNG",	"B�l�m");
define("_AM_ART_FRMCAPHDCATSRT",	"B�l�m");
define("_AM_ART_FRMCAPHDRORDR",		"D�zen");
// Table side caption
define("_AM_ART_FRMCAPSDTTL",		"Ba�l�k");
define("_AM_ART_FRMCAPSDCTGRY",		"B�l�m");
define("_AM_ART_FRMCAPSDORDR",		"D�zen");
define("_AM_ART_FRMCAPSDDSPLY",		"G�ster");
define("_AM_ART_FRMCAPSDDSCRN",		"Tan�m");
define("_AM_ART_FRMCAPSDCATDSC",	"B�l�m Tan�m�");
define("_AM_ART_FRMCAPSDARTCL",		"Yaz� Metni");
// Link captions
define("_AM_ART_FRMCAPLNKPRVW",		"�nizleme i�in t�klay�n");
define("_AM_ART_FRMCAPLNKEDT",		"D�zenlemek i�in t�klay�n");
define("_AM_ART_FRMCAPLNKDLT",		"Silmek i�in t�klay�n");
define("_AM_ART_FRMCAPLNKGTFRM",	"Ekleme b�l�m�ne git");
define("_AM_ART_FRMCAPLNKVLTSHW",	"Onaylay�p yay�nlamak i�in t�klay�n");
define("_AM_ART_FRMCAPLNKVLTHDE",	"Yaz�y� reddetmek i�in t�klay�n");
// Button caption
define("_AM_ART_FRMBTTNCLS",	"Pencereyi Kapat");
define("_AM_ART_FRMBTTNSAVE",	"Kaydet");
define("_AM_ART_FRMBTTNRST",	"Temizle");
define("_AM_ART_FRMBTTNCNCL",	"�ptal");
define("_AM_ART_FRMBTTNPRVW",	"�nizleme");
// Form Element captions
define("_AM_ART_FRMCAPSLCTSHW",		"Yaz�y� g�stermek i�in kutucu�u doldurun.");
define("_AM_ART_FRMCAPSLCTNOHTML",	"Html kodlar�n� gizle");
define("_AM_ART_FRMCAPSLCTNOBR",	"K�r�k ba�lant�y� gizle");
define("_AM_ART_FRMCAPSLCTNOSMLY",	"G�l�c�kleri gizle");
define("_AM_ART_FRMCAPSLCTNOXIMG",	"Resimleri gizle");
define("_AM_ART_FRMCAPSLCTNOXCDE",	"Kodlar� gizle");
define("_AM_ART_FRMCAPSLCTCATSHW",	"B�l�m�n g�sterilmesini istiyorsan�z kutucu�u doldurun.");
// Misc
define("_AM_ART_FRMCAPSLCT",	"Bir b�l�m se�in");
define("_AM_ART_FRMCAPNOVAL",	"Onay bekleyen yaz� yok");
define("_AM_ART_FRMCAPSTTSPUB",	"Durum: Yay�nland�");
define("_AM_ART_FRMCAPSTTSHDN",	"Durum: Gizli");
define("_AM_ART_FRMCAPPGBRK",	"");
// Javascript messages
define("_AM_ART_JVSRPTADDTTL",	"Bir ba�l�k yaz�n");
define("_AM_ART_JVSRPTSLTCAT",	"A��l�r m�n�den b�l�m se�in");
// Confirmation messages
define("_AM_ART_ERRORNOCATS",	"Please <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/catadd.php\">add a category</a> before an makale.");

// Navigation/breadcrumbs/info bar
// Navigation bar
define("_AM_ART_NAVINDEX",		"Anasayfa");
define("_AM_ART_NAVARTADD",		"Yaz� Ekle");
define("_AM_ART_NAVARTEDDEL",	"Yaz� D�zenle ya da Sil");
define("_AM_ART_NAVARTEDT",		"Yaz� D�zenle");
define("_AM_ART_NAVCATADD",		"B�l�m Ekle");
define("_AM_ART_NAVCATEDDEL",	"B�l�m D�zenle ya da Sil");
define("_AM_ART_NAVCATEDT",		"B�l�m D�zenle");
define("_AM_ART_NAVVALIDATE",	"Onay Bekleyenler");
define("_AM_ART_NAVFRNTPAGE",	"�n Sayfa");
define("_AM_ART_NAVABOUT",		"Hakk�nda");
// "Breadcrumbs" bar
define("_AM_ART_NAVBCINDEX",	"Anasayfa");
define("_AM_ART_NAVBCARTEDDE",	"Yaz� D�zenle ya da Sil");
define("_AM_ART_NAVBCVALART",	"Onay Bekleyen Yaz�lar");
// Info bar
define("_AM_ART_NAVINFMOD",		"module");
define("_AM_ART_NAVINFPREF",	"Ayarlar");
define("_AM_ART_NAVINFHELP",	"Yard�m");
define("_AM_ART_NAVINFABOUT",	"Hakk�nda");

// artadd.php


// arteddel.php
define("_AM_ART_LISTTITLE",		"Yaz�lar");
define("_AM_ART_EDITTITLE",		"Yaz�� D�zenle");
define("_AM_ART_FRMCAPNOARTS",	"D�zenlenecek yaz� yok.");

// catadd.php
define("_AM_ART_FRMCAPNOCATS",	"D�zenlenecek b�l�m yok.");

// validate.php


// index.php
define("_AM_ART_TTLGENSTATS",		"Genel �statistikler");
define("_AM_ART_TTLGENVLDT",		"Onaylama:");
define("_AM_ART_TTLGENVLDTDSC",		"yaz� onay i�in bekliyor <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/validate.php\"></a>.");
define("_AM_ART_TTLGENNUMARTS",		"Yaz� Say�s�:");
define("_AM_ART_TTLGENNUMARTSDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">yaz� var.</a>.");
define("_AM_ART_TTLGENNUMCATS",		"B�l�m say�s�:");
define("_AM_ART_TTLGENNUMCATSDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/cateddel.php\">b�l�m var.</a>.");
define("_AM_ART_TTLGENNUMVIEWS",	"Okunma Say�s�:");
define("_AM_ART_TTLGENNUMVIEWSDSC",	"defa <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">yaz�</a> okundu.");
define("_AM_ART_TTLGENNUMPUB",		"Yay�nlanan Yaz�lar:");
define("_AM_ART_TTLGENNUMPUBDSC",	"<a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">yaz�</a> yay�nland�.");
define("_AM_ART_TTLGENNUMHIDDN",	"Gizli Yaz�lar:");
define("_AM_ART_TTLGENNUMHIDDNDSC",	"yaz� gizli durumda. (onaylanmam�� <a href=\"". XOOPS_URL ."/modules/". $xoopsModule->getVar('dirname') ."/admin/arteddel.php\">yaz�lar</a>).");


// about.php



?>