<?php
// $Id: main.php,v 1.17 2005/07/23 00:51:19 andrew Exp $

// English version.


// Cat/makale listing index.
define("_MD_CATLIST_CAPTION",	"Yaz�lar");			// Caption of category/makale list
define("_MD_INDEX_PAGE_TITLE",	"Yaz� Anasayfas�");	// Title of category/makale list page (not used in shipped package)
define("_MD_makale_VIEW_CAP",	"Kez Okundu");				// Caption for number of views
define("_MD_NUM_makale_CAP",	"Yaz�lar");			// Caption for number of makale for category
define("_MD_NUM_makale_NUM",	"Toplam yaz�:");
define("_MD_NUM_makale_OF",	". Bakt���n�z yaz�n�n nosu:");
define("_MD_NUM_makale_TO",	"-");
define("_MD_NUM_makale_PREV",	"&#171;�nceki");
define("_MD_NUM_makale_NEXT",	"sonraki&#187;");
define("_MD_NUM_makale_SEP",	"::");

// makale page
define("_MD_INDEXLINKTEXT",		"Anasayfa");		// Text for return to index page
define("_MD_INDEXLINKPRINT",	"Yazd�r");		// Text for printable version
define("_MD_POSTEDON",			"Tarih:");	// Posted on text
define("_MD_READS", 			"okuma");		// Text for reads
define("_MD_EMAIL", 			"E-Posta");		// Text for email friend.
define("_MD_NOmakale",			"Sorry, the makale you requested does not exist.");		// Text for email friend.
define("_MD_PAGENEXT",			"sonraki");
define("_MD_PAGEPREV",			"�nceki");
define("_MD_PAGENUM",			"sayfa");
define("_MD_PAGEOF",			"of");
define("_MD_ART_POSTER",		"G�nderen");


// E-mail page
define("_MD_EMAILHEADTTL", 		"E-Posta Yoluyla Arkada��na G�nder");
define("_MD_EMAILYOURNAME",		"Ad�n�z:");
define("_MD_EMAILYOUREMAIL",	"E-Posta Adresiniz:");
define("_MD_EMAILRECIPIENT",	"Al�c� E-Posta Adresi:");
define("_MD_EMAILMESSAGE",		"�letiniz:");
define("_MD_EMAILMESSAGEDESC",	"Yazacaklar�n�z g�nderinin sonuna eklenecektir.");
define("_MD_EMAILSEND",			"G�nder");
define("_MD_EMAILSET",			"Temizle");
define("_MD_EMAILSECNOTE",		"<strong>Uyar�:</strong> Bu hizmetimizi k�t� ama�lar i�in kullanmay�n�z"); 

// Print page
define("_MD_ARTPRINTTITLE",		"Yaz� ba�l���:");
define("_MD_ARTPRINTPOSTED",	"Eklenme Tarihi:");
define("_MD_ARTPRINTDESCRIP",	"Tan�m:");
define("_MD_ARTPRINTTEXT",		"Yaz� Metni:");
define("_MD_ARTPRINTPUB",		"Bu yaz� a�a��daki kaynaktan al�nm��t�r:");
define("_MD_ARTPRINTSITENAME",	"Site Ad�:");
define("_MD_ARTPRINTSITEURL",	"Web Adresi:");

// General
define("_MD_MOD_WHOBY",		"<span style=\"font-size: smaller; text-align: center;\">T�rk Dili Yaz� Mod�l� <a href=\"korgan2001@yahoo.com\">Sinsa</a></span>");

// Confirmation messages
define("_MD_DBUPDATED",					"Veritaban� ba�ar�yla g�ncelle�tirildi!");
define("_MD_DBNOTUPDATED",				"Veritaban� g�ncellenemedi!"); 
define("_MD_ITEMDELETED",				"Silme i�lemi ba�ar�l�!");
define("_MD_ITEMNOTDELETED",			"Silme i�lemi ba�ar�s�z!");
define("_MD_ITEM_DELETED_CANCELLED",	"Silme i�lemi iptal edildi!");
define("_MD_CONFIRMDELETE",             "Bunu silmek istedi�inizden emin misiniz?");
define("_MD_DBSUBMITTED",				"G�nderiniz i�in te�ekk�r ederiz, G�nderiniz incelendikten sonra yay�nlanacakt�r.");

// Errors
define("_MD_NOACCESSHERE",	"Bu sayfaya eri�im hakk�n�z bulunmamaktad�r.");
define("_MD_LOGGEDIN",		"L�tfen �ye giri�i yap�n�z.");
define("_MD_EMLMAXCHARS",	"�zin verilen harf say�s�ndan fazlas�n� girdiniz.");
define("_MD_NOTALLOWED",	"Bu sayfaya eri�im akk�n�z bulunmamaktad�r.");

// Submit page
define("_MD_ART_SUBINTRO",		"Formu uygun bi�imde doldurarak yaz�n�z� g�nderebilirsiniz. G�nderiniz incelendikten sonra onaylanacakt�r.");
define("_MD_SUBMIT_PAGE_TITLE", "Yaz� G�nder");
define("_MD_ART_SUBALERTTITLE",	"L�tfen en az �� harflik bir ba�l�k yaz�n�z.");
define("_MD_ART_SUBALERTCAT",	"L�tfen a��l�r m�n�den b�l�m se�iniz.");
define("_MD_ART_SUBTITLE",		"Ba�l�k:");
define("_MD_ART_SUBCAT",		"B�l�m:");
define("_MD_ART_SUBDESC",		"Tan�m:");
define("_MD_ART_SUBTART",		"Yaz�n�z:");
define("_MD_ART_SUBTNOTIFY",	"Haberdar et:");
define("_MD_ART_SUBTNOTIFYDES",	"Yaz� eklendi�inde bana haber ver.");
define("_MD_ART_SUBMIT",		" Yaz�y� G�nder ");
define("_MD_ART_SUBRESET",		" Temizle ");
define("_MD_ART_PREVIEW",		" �nizleme ");
define("_MD_SUBMITTEDMSG",		"Yaz�n�z Kaydedildi.");
define("_MD_SUBMITTEDMSGDESC",	"G�nderiniz i�in te�ekk�r ederiz, G�nderiniz incelendikten sonra yay�nlanacakt�r..");
define("_MD_FORMCAPTIONPAGEBRK",	" ");
define("_MD_FORMCAPTIONNOHTML",		"Html tak�lar�n� g�sterme");
define("_MD_FORMCAPTIONNOSMILEY",	"G�l�c�kleri g�sterme");
define("_MD_FORMCAPTIONNOXCODE",	"Kodlar� g�sterme");
define("_MD_FORMCAPTIONNOIMAGE",	"Resimleri g�sterme");
define("_MD_FORMCAPTIONNOBR",		"K�r�k ba�lant�lar� gizle");
define("_MD_FORMCAPTIONSELECT",		"L�tfen bir b�l�m se�iniz.");


?>
