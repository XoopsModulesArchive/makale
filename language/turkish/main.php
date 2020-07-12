<?php
// $Id: main.php,v 1.17 2005/07/23 00:51:19 andrew Exp $

// English version.


// Cat/makale listing index.
define("_MD_CATLIST_CAPTION",	"Yazýlar");			// Caption of category/makale list
define("_MD_INDEX_PAGE_TITLE",	"Yazý Anasayfasý");	// Title of category/makale list page (not used in shipped package)
define("_MD_makale_VIEW_CAP",	"Kez Okundu");				// Caption for number of views
define("_MD_NUM_makale_CAP",	"Yazýlar");			// Caption for number of makale for category
define("_MD_NUM_makale_NUM",	"Toplam yazý:");
define("_MD_NUM_makale_OF",	". Baktýðýnýz yazýnýn nosu:");
define("_MD_NUM_makale_TO",	"-");
define("_MD_NUM_makale_PREV",	"&#171;önceki");
define("_MD_NUM_makale_NEXT",	"sonraki&#187;");
define("_MD_NUM_makale_SEP",	"::");

// makale page
define("_MD_INDEXLINKTEXT",		"Anasayfa");		// Text for return to index page
define("_MD_INDEXLINKPRINT",	"Yazdýr");		// Text for printable version
define("_MD_POSTEDON",			"Tarih:");	// Posted on text
define("_MD_READS", 			"okuma");		// Text for reads
define("_MD_EMAIL", 			"E-Posta");		// Text for email friend.
define("_MD_NOmakale",			"Sorry, the makale you requested does not exist.");		// Text for email friend.
define("_MD_PAGENEXT",			"sonraki");
define("_MD_PAGEPREV",			"önceki");
define("_MD_PAGENUM",			"sayfa");
define("_MD_PAGEOF",			"of");
define("_MD_ART_POSTER",		"Gönderen");


// E-mail page
define("_MD_EMAILHEADTTL", 		"E-Posta Yoluyla Arkadaþýna Gönder");
define("_MD_EMAILYOURNAME",		"Adýnýz:");
define("_MD_EMAILYOUREMAIL",	"E-Posta Adresiniz:");
define("_MD_EMAILRECIPIENT",	"Alýcý E-Posta Adresi:");
define("_MD_EMAILMESSAGE",		"Ýletiniz:");
define("_MD_EMAILMESSAGEDESC",	"Yazacaklarýnýz gönderinin sonuna eklenecektir.");
define("_MD_EMAILSEND",			"Gönder");
define("_MD_EMAILSET",			"Temizle");
define("_MD_EMAILSECNOTE",		"<strong>Uyarý:</strong> Bu hizmetimizi kötü amaçlar için kullanmayýnýz"); 

// Print page
define("_MD_ARTPRINTTITLE",		"Yazý baþlýðý:");
define("_MD_ARTPRINTPOSTED",	"Eklenme Tarihi:");
define("_MD_ARTPRINTDESCRIP",	"Taným:");
define("_MD_ARTPRINTTEXT",		"Yazý Metni:");
define("_MD_ARTPRINTPUB",		"Bu yazý aþaðýdaki kaynaktan alýnmýþtýr:");
define("_MD_ARTPRINTSITENAME",	"Site Adý:");
define("_MD_ARTPRINTSITEURL",	"Web Adresi:");

// General
define("_MD_MOD_WHOBY",		"<span style=\"font-size: smaller; text-align: center;\">Türk Dili Yazý Modülü <a href=\"korgan2001@yahoo.com\">Sinsa</a></span>");

// Confirmation messages
define("_MD_DBUPDATED",					"Veritabaný baþarýyla güncelleþtirildi!");
define("_MD_DBNOTUPDATED",				"Veritabaný güncellenemedi!"); 
define("_MD_ITEMDELETED",				"Silme iþlemi baþarýlý!");
define("_MD_ITEMNOTDELETED",			"Silme iþlemi baþarýsýz!");
define("_MD_ITEM_DELETED_CANCELLED",	"Silme iþlemi iptal edildi!");
define("_MD_CONFIRMDELETE",             "Bunu silmek istediðinizden emin misiniz?");
define("_MD_DBSUBMITTED",				"Gönderiniz için teþekkür ederiz, Gönderiniz incelendikten sonra yayýnlanacaktýr.");

// Errors
define("_MD_NOACCESSHERE",	"Bu sayfaya eriþim hakkýnýz bulunmamaktadýr.");
define("_MD_LOGGEDIN",		"Lütfen üye giriþi yapýnýz.");
define("_MD_EMLMAXCHARS",	"Ýzin verilen harf sayýsýndan fazlasýný girdiniz.");
define("_MD_NOTALLOWED",	"Bu sayfaya eriþim akkýnýz bulunmamaktadýr.");

// Submit page
define("_MD_ART_SUBINTRO",		"Formu uygun biçimde doldurarak yazýnýzý gönderebilirsiniz. Gönderiniz incelendikten sonra onaylanacaktýr.");
define("_MD_SUBMIT_PAGE_TITLE", "Yazý Gönder");
define("_MD_ART_SUBALERTTITLE",	"Lütfen en az üç harflik bir baþlýk yazýnýz.");
define("_MD_ART_SUBALERTCAT",	"Lütfen açýlýr mönüden bölüm seçiniz.");
define("_MD_ART_SUBTITLE",		"Baþlýk:");
define("_MD_ART_SUBCAT",		"Bölüm:");
define("_MD_ART_SUBDESC",		"Taným:");
define("_MD_ART_SUBTART",		"Yazýnýz:");
define("_MD_ART_SUBTNOTIFY",	"Haberdar et:");
define("_MD_ART_SUBTNOTIFYDES",	"Yazý eklendiðinde bana haber ver.");
define("_MD_ART_SUBMIT",		" Yazýyý Gönder ");
define("_MD_ART_SUBRESET",		" Temizle ");
define("_MD_ART_PREVIEW",		" Önizleme ");
define("_MD_SUBMITTEDMSG",		"Yazýnýz Kaydedildi.");
define("_MD_SUBMITTEDMSGDESC",	"Gönderiniz için teþekkür ederiz, Gönderiniz incelendikten sonra yayýnlanacaktýr..");
define("_MD_FORMCAPTIONPAGEBRK",	" ");
define("_MD_FORMCAPTIONNOHTML",		"Html takýlarýný gösterme");
define("_MD_FORMCAPTIONNOSMILEY",	"Gülücükleri gösterme");
define("_MD_FORMCAPTIONNOXCODE",	"Kodlarý gösterme");
define("_MD_FORMCAPTIONNOIMAGE",	"Resimleri gösterme");
define("_MD_FORMCAPTIONNOBR",		"Kýrýk baðlantýlarý gizle");
define("_MD_FORMCAPTIONSELECT",		"Lütfen bir bölüm seçiniz.");


?>
