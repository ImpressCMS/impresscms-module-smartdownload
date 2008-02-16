<?php
/**
 * $Id: admin.php,v 1.19 2006/05/25 14:13:55 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * German Translation: L-Dillmann@web.de http://www.einmal-so.de
 * Licence: GNU
 * Module NMDe 'wf-Downloads' (Admin)
**/

// %%%%%%	Module NMDe 'MyDownloads' (Admin)	  %%%%%
/*
* Buttons
*/
define("_AM_WFD_BMODIFY", "&Auml;ndern");
define("_AM_WFD_BDELETE", "L&ouml;schen");
define("_AM_WFD_BADD", "Hinzuf&uuml;gen");
define("_AM_WFD_BAPPROVE", "Freigeben");
define("_AM_WFD_BIGNORE", "Ignorieren");
define("_AM_WFD_BCANCEL", "Abbrechen");
define("_AM_WFD_BSAVE", "Sichern");
define("_AM_WFD_BRESET", "Zur&uuml;cksetzen");
define("_AM_WFD_BMOVE", "Dateien verschieben");
define("_AM_WFD_BUPLOAD", "Upload");
define("_AM_WFD_BDELETEIMAGE", "Ausgew&auml;hltes Bild l&ouml;schen");
define("_AM_WFD_BRETURN", "Zur&uuml;ck wo Du herkommst!");
define("_AM_WFD_DBERROR", "Datenbank Zugriffs-Fehler: Bitte diesen Fehler einem der Webmaster der WF_Sections Homepage melden");
/*
* Banned Users
*/
define("_AM_WFD_NONBANNED", "Nicht gebannt");
define("_AM_WFD_BANNED", "Gebannt");
define("_AM_WFD_EDITBANNED", "Gebannte User editieren");
/*
* Other Options
*/
define("_AM_WFD_TEXTOPTIONS", "Texteinstellungen:");
define("_AM_WFD_ALLOWHTML", " HTML Tags deaktivieren");
define("_AM_WFD_ALLOWSMILEY", " Smilie Icons deaktivieren");
define("_AM_WFD_ALLOWXCODE", " XOOPS Code deaktivieren");
define("_AM_WFD_ALLOWIMAGES", " Bilder deaktivieren");
define("_AM_WFD_ALLOWBREAK", " XOOPS Zeilenumbruch verwenden?");
define("_AM_WFD_UPLOADFILE", "Datei erfolgreich hochgeladen");
define("_AM_WFD_NOMENUITEMS", "Keine Men&uuml;items innerhalb dieses Men&uuml;s");
define("_AM_WFD_DOWN_METAVERSION", "WF-Downloads Version: ");

/*
* Admin Bread crumb
*/
define("_AM_WFD_PREFS", "Einstellungen");
define("_AM_WFD_PERMISSIONS", "Berechtigungen");
define("_AM_WFD_BINDEX", "Hauptindex");
define("_AM_WFD_BLOCKADMIN", "Bl&ouml;cke");
define("_AM_WFD_GOMODULE", "Gehe zu Modul");
define("_AM_WFD_BHELP", "Hilfe");
define("_AM_WFD_ABOUT", "&Uuml;ber");
/*
* Admin Summary
*/
define("_AM_WFD_SCATEGORY", "Kategorie: ");
define("_AM_WFD_SFILES", "Dateien: ");
define("_AM_WFD_SNEWFILESVAL", "Eingesendet: ");
define("_AM_WFD_SMODREQUEST", "Modifiziert: ");
define("_AM_WFD_SREVIEWS", "Rezensionen: ");
define("_AM_WFD_SMIRRORS", "Mirrors: ");
/*
* Admin Main Menu
*/
define("_AM_WFD_MCATEGORY", "Download-Kategorien");
define("_AM_WFD_INDEXPAGE", "Einstellungen: Indexseite");
define("_AM_WFD_MUPLOADS", "Bilder Upload");
define("_AM_WFD_MMIMETYPES", "Verwaltung Dateiendungstypen");
define("_AM_WFD_MCOMMENTS", "Kommentare");
define("_AM_WFS_MVOTEDATA", "Bewertungsdaten");
/*
* waiting reviews
*/
define("_AM_WFD_AREVIEWS", "Rezensionsverwaltung");
define("_AM_WFD_AREVIEWS_WAITING", "Auf Freigabe wartende Rezensionen:");
define("_AM_WFD_AREVIEWS_INFO", "Informationen &uuml;ber Rezensionen");
define("_AM_WFD_AREVIEWS_APPROVE", "<b>Freigeben-</b> Neue Rezensionen werden ohne Pr&uuml;fung freigegeben.");
define("_AM_WFD_AREVIEWS_APPROVED", "Rezension ist genehmigt worden.");
define("_AM_WFD_AREVIEWS_EDIT", "<b>&Auml;ndern-</b> Rezension &auml;ndern und anschließend freigeben.");
define("_AM_WFD_AREVIEWS_DELETE", "<b>L&ouml;schen-</b> Rezension l&ouml;schen.");
/*
* Catgeory defines
*/
define("_AM_WFD_CCATEGORY_CREATENEW", "Kategorie anlegen");
define("_AM_WFD_CCATEGORY_MODIFY", "Kategorie &auml;ndern");
define("_AM_WFD_CCATEGORY_MOVE", "Dateien aus gew&auml;hlter Kategorie verschieben");
define("_AM_WFD_CCATEGORY_MODIFY_TITLE", "Kategorietitel:");
define("_AM_WFD_CCATEGORY_MODIFY_FAILED", "Verschieben fehlgeschlagen: Diese Kategorie kann nicht verschoben werden!");
define("_AM_WFD_CCATEGORY_MODIFY_FAILEDT", "Verschieben fehlgeschlagen: Kategorie konnte nicht gefunden werden!");
define("_AM_WFD_CCATEGORY_MODIFY_MOVED", "Dateien verschoben und Kategorie gel&ouml;scht");
define("_AM_WFD_CCATEGORY_CREATED", "Neue Kategorie angelegt und Datenbank erfolgreich aktualisiert");
define("_AM_WFD_CCATEGORY_MODIFIED", "Gew&auml;hlte Kategorie ge&auml;ndert und Datenbank erfolgreich aktualisiert");
define("_AM_WFD_CCATEGORY_DELETED", "Gew&auml;hlte Kategorie gel&ouml;scht und Datenbank erfolgreich aktualisiert");
define("_AM_WFD_CCATEGORY_AREUSURE", "WARNUNG: Soll die gew&auml;hlte Kategorie mit ALLEN Dateien und Kommentaren wirklich gel&ouml;scht werden?");
define("_AM_WFD_CCATEGORY_NOEXISTS", "Es muss erst eine Kategorie erstellt werden, bevor Dateien in die Datenbank eingetragen werden k&ouml;nnen");
define("_AM_WFD_FCATEGORY_GROUPPROMPT", "Kategorie Zugriffsberechtigungen:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Bitte Usergruppe ausw&auml;hlen, die zu Zugriff<br/>auf diese Kategorie haben soll.</span></div>");
define("_AM_WFD_FCATEGORY_TITLE", "Titel f&uuml;r Kategorie:");
define("_AM_WFD_FCATEGORY_WEIGHT", "Kategorie-Gewichtung: <div style='padding-top: 8px;'><span style='font-weight: normal;'>Reihenfolge in der die Kategorie auf der Indexseite erscheint<br/>(0=ganz oben)</span></div>");
define("_AM_WFD_FCATEGORY_SUBCATEGORY", "Setze als Unterkategorie von:");
define("_AM_WFD_FCATEGORY_CIMAGE", "Kategoriebild ausw&auml;hlen:");
define("_AM_WFD_FCATEGORY_DESCRIPTION", "Beschreibung f&uuml;r Kategorie erstellen:");
define("_AM_WFD_FCATEGORY_SUMMARY", "Zusammenfassung f&uuml;r Kategorie schreiben:");
define("_AM_WFD_CCATEGORY_CHILDASPARENT", "Du kannst keine Unterkategorie als Kategorie anlegen");
/*
* Index page Defines
*/
define("_AM_WFD_IPAGE_UPDATED", "Modul-Startseite ge&auml;ndert und Datenbank erfolgreich aktualisiert!");
define("_AM_WFD_IPAGE_INFORMATION", "Startseiten Information");
define("_AM_WFD_IPAGE_MODIFY", "&Auml;ndere Modulstartseite");
define("_AM_WFD_IPAGE_CIMAGE", "Logo/Bild f&uuml;r die Modulstartseite ausw&auml;hlen:");
define("_AM_WFD_IPAGE_CTITLE", "&Uuml;berschrift Startseite:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Dieser &Uuml;berschrift erscheint unter dem gew&auml;hlten Logo (falls dies ausgew&auml;hlt wurde).</span></div>");
define("_AM_WFD_IPAGE_CHEADING", "Kopfbereich (Startseite):");
define("_AM_WFD_IPAGE_CHEADINGA", "Kopfbereich ausrichtung (text-align):");
define("_AM_WFD_IPAGE_CFOOTER", "Fu&szlig;bereich (Startseite):");
define("_AM_WFD_IPAGE_CFOOTERA", "Fu&szlig;bereich ausrichtung (text-align):");
define("_AM_WFD_IPAGE_CLEFT", "Links");
define("_AM_WFD_IPAGE_CCENTER", "Center");
define("_AM_WFD_IPAGE_CRIGHT", "Rechts");
/*
*  Permissions defines
*/
define("_AM_WFD_PERM_MANAGEMENT", "Berechtigungs-Management");
define("_AM_WFD_PERM_PERMSNOTE", "<div><b>Es gilt zu beachten</b>, da&szlig; obwohl die Berechtigungen hier korrekt gesetzt sein m&ouml;gen, eine Gruppe dennoch keine Sicht- und/oder Zugriffsrechte haben kann wenn entsprechende Modul-Rechte fehlen. Diese Rechte k&ouml;nnen unter <b>System > Gruppen</b> eingestellt werden. Dort die entsprechende Gruppe ausw&auml;hlen und die passenden Rechte setzen.</div>");
define("_AM_WFD_PERM_CPERMISSIONS", "Kategorieberechtigungen");
define("_AM_WFD_PERM_CSELECTPERMISSIONS", "Kategorie bestimmen die jeder Gruppe zug&auml;nglich ist");
define("_AM_WFD_PERM_CNOCATEGORY", "Berechtigung kann nicht gesetzt werden: Es existieren noch keine Kategorien!");
define("_AM_WFD_PERM_FPERMISSIONS", "Dateiberechtigung");
define("_AM_WFD_PERM_FNOFILES", "Berechtigung kann nicht gesetzt werden: Es existieren noch keine Dateien!");
define("_AM_WFD_PERM_FSELECTPERMISSIONS", "Datei bestimmen die jeder Gruppe zug&auml;nglich ist");
/*
* Upload defines
*/
define("_AM_WFD_DOWN_IMAGEUPLOAD", "Bild erfolgreich in entsprechenden Uploadbereich hochgeladen");
define("_AM_WFD_DOWN_NOIMAGEEXIST", "Fehler: Es wurde keine Datei zum Upload ausgew&auml;hlt. Bitte Vorgang wiederholen!");
define("_AM_WFD_DOWN_IMAGEEXIST", "Bild existiert bereits in diesem Uploadbereich!");
define("_AM_WFD_DOWN_FILEDELETED", "Datei wurde gel&ouml;scht.");
define("_AM_WFD_DOWN_FILEERRORDELETE", "Fehler beim L&ouml;schen der Datei: Datei existiert nicht auf dem Server.");
define("_AM_WFD_DOWN_NOFILEERROR", "Fehler beim L&ouml;schen der Datei: Keine Datei zum L&ouml;schen ausgew&auml;hlt.");
define("_AM_WFD_DOWN_DELETEFILE", "WARNUNG: Soll diese Bilddatei wirklich gel&ouml;scht werden?");
define("_AM_WFD_DOWN_IMAGEINFO", "Server Status");

define("_AM_WFD_DOWN_NOTSET", "Der *Upload Path* wurde nicht eingestellt");
define("_AM_WFD_DOWN_SERVERPATH", "Server Path zur CMS Root: ");
define("_AM_WFD_DOWN_UPLOADPATH", "Current Upload Path: ");
define("_AM_WFD_DOWN_UPLOADPATHDSC", "ANMERKUNG: Der Upload Path *MUSS* immer der komplette Verzeichniss Path deines Servers sein.");

define("_AM_WFD_DOWN_SPHPINI", "<b>Information aus der php.ini:</b>");
define("_AM_WFD_DOWN_SAFEMODESTATUS", "Safe Mode Status: ");
define("_AM_WFD_DOWN_REGISTERGLOBALS", "Register Globals: ");
define("_AM_WFD_DOWN_SERVERUPLOADSTATUS", "Server Uploads Status: ");
define("_AM_WFD_DOWN_MAXUPLOADSIZE", "Maximal erlaubte Dateigr&ouml;&szlig;e: ");
define("_AM_WFD_DOWN_MAXPOSTSIZE", "Maximal erlaubtes Uploade Volumen: ");
define("_AM_WFD_DOWN_SAFEMODEPROBLEMS", " (Dadurch kann es zu Problemen kommen)");
define("_AM_WFD_DOWN_GDLIBSTATUS", "GD Library Unterst&uuml;tzung: ");
define("_AM_WFD_DOWN_GDLIBVERSION", "GD Library Version: ");
define("_AM_WFD_DOWN_GDON", "<b>aktiviert</b> (Thumbnails k&ouml;nnen verwendet werden)");
define("_AM_WFD_DOWN_GDOFF", "<b>deaktiviert</b> (keine Thumbnails m&ouml;glich)");
define("_AM_WFD_DOWN_OFF", "<b>AUS</b>");
define("_AM_WFD_DOWN_ON", "<b>AN</b>");
define("_AM_WFD_DOWN_CATIMAGE", "Kategoriebilder");
define("_AM_WFD_DOWN_SCREENSHOTS", "Screenshots");
define("_AM_WFD_DOWN_MAINIMAGEDIR", "Hauptbilder");
define("_AM_WFD_DOWN_FCATIMAGE", "Kategoriebilder Pfad");
define("_AM_WFD_DOWN_FSCREENSHOTS", "Screenshots Pfad");
define("_AM_WFD_DOWN_FMAINIMAGEDIR", "Hauptbild Pfad");
define("_AM_WFD_DOWN_FUPLOADIMAGETO", "Bild hochladen: ");
define("_AM_WFD_DOWN_FUPLOADPATH", "Uploadpfad: ");
define("_AM_WFD_DOWN_FUPLOADURL", "Upload-URL: ");
define("_AM_WFD_DOWN_FOLDERSELECTION", "Uploadziel ausw&auml;hlen:");
define("_AM_WFD_DOWN_FSHOWSELECTEDIMAGE", "Zeige ausgew&auml;hltes Bild:");
define("_AM_WFD_DOWN_FUPLOADIMAGE", "Neues Bild an die gew&auml;hlte Stelle hochladen:");
/*
* Main Index defines
*/
define("_AM_WFD_MINDEX_DOWNSUMMARY", "Zusammenfassung WF-Downloads");
define("_AM_WFD_MINDEX_PUBLISHEDDOWN", "Ver&ouml;ffentlichte Dateien:");
define("_AM_WFD_MINDEX_AUTOPUBLISHEDDOWN", "Dateien mit automatischem Ver&ouml;ffentlichungsdatum:");
define("_AM_WFD_MINDEX_AUTOEXPIRE", "Dateien mit automatischem Ablaufdatum:");
define("_AM_WFD_MINDEX_OFFLINEDOWN", "Dateien mit Status -Offline-:");
define("_AM_WFD_MINDEX_ID", "ID");
define("_AM_WFD_MINDEX_TITLE", "Titel des Downloads");
define("_AM_WFD_MINDEX_POSTER", "ver&ouml;ffentlicht von");
define("_AM_WFD_MINDEX_SUBMITTED", "eingesendet am");
define("_AM_WFD_MINDEX_ONLINESTATUS", "Onlinestatus");
define("_AM_WFD_MINDEX_PUBLISHED", "Ver&ouml;ffentlicht");
define("_AM_WFD_MINDEX_ACTION", "Aktion");
define("_AM_WFD_MINDEX_NODOWNLOADSFOUND", "HINWEIS: Es existieren keine Dateien, die den Kriterien entsprechen");
define("_AM_WFD_MINDEX_PAGE", "<b>Seite:<b> ");
define('_AM_WFD_MINDEX_PAGEINFOTXT', '<ul><li>Einstellung der WF-Downloads-Startseite.</li><li>Das Logo, der Bereichskopf- und Fu&szlig;, usw. k&ouml;nnen sehr einfach ver&auml;ndert werden um das Erscheinungsbild des Moduls an das gesamten Template anzupassen.</li></ul><br /><br />ANMERKUNG: Das hier selektierte Logo wird auf allen (WF-Download) Modulseiten erscheinen.');
/*
* Submitted Files
*/
define("_AM_WFD_SUB_SUBMITTEDFILES", "&Uuml;bermittelte Dateien");
define("_AM_WFD_SUB_FILESWAITINGINFO", "Wartende Dateien Informationen");
define("_AM_WFD_SUB_FILESWAITINGVALIDATION", "Files Waiting Validation: ");
define("_AM_WFD_SUB_APPROVEWAITINGFILE", "<b>Freigabe</b> neuer Dateien ohne &Uuml;berpr&uuml;fung.");
define("_AM_WFD_SUB_EDITWAITINGFILE", "<b>Editiere</b> neue Datei-Informationen und anschlie&szlig;ende Freigabe.");
define("_AM_WFD_SUB_DELETEWAITINGFILE", "<b>L&ouml;sche</b> die neuen Datei-Informationen.");
define("_AM_WFD_SUB_NOFILESWAITING", "Es stimmen keine Dateien mit den vorliegenden Kriterien &uuml;berein");
define("_AM_WFD_SUB_NEWFILECREATED", "Neue Datei erstellt und Datenbank erfolgreich aktualisiert");
/*
* Mimetypes
*/
define("_AM_WFD_MIME_ID", "ID");
define("_AM_WFD_MIME_EXT", "EXT");
define("_AM_WFD_MIME_NAME", "Dateiart");
define("_AM_WFD_MIME_ADMIN", "Admin");
define("_AM_WFD_MIME_USER", "User");
/*
* Mimetype Form
*/
define("_AM_WFD_MIME_CREATEF", "Dateiendungestype erstellen");
define("_AM_WFD_MIME_MODIFYF", "Dateiendungstyp modifizieren");
define("_AM_WFD_MIME_EXTF", "Dateiendung (Extension):");
define("_AM_WFD_MIME_NAMEF", "Applikation Type/Name:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Anwendung eintragen, die mit dieser Dateiendung verkn&uuml;pft werden soll.</span></div>");
define("_AM_WFD_MIME_TYPEF", "Dateiendungen:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Jede Dateiendung eingeben, der der verkn&uuml;pft werden soll. Dateiendungen durch Leerzeichen trennen.</span></div>");
define("_AM_WFD_MIME_ADMINF", "Erlaubte Admin Dateiendungen");
define("_AM_WFD_MIME_ADMINFINFO", "<b>Dateiendungen die f&uuml;r den Admin-Upload erlaubt sind:</b>");
define("_AM_WFD_MIME_USERF", "Erlaubte User Dateiendungen");
define("_AM_WFD_MIME_USERFINFO", "<b>Dateiendungen die f&uuml;r User-Upload erlaubt sind:</b>");
define("_AM_WFD_MIME_NOMIMEINFO", "Kein Dateiendungen ausgew&auml;hlt.");
define("_AM_WFD_MIME_FINDMIMETYPE", "Neuen Dateiendungen finden:");
define("_AM_WFD_MIME_EXTFIND", "Suche Dateiendung:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Dateiendung eingeben, nach der gesucht werden soll.</span></div>");
define("_AM_WFD_MIME_INFOTEXT", "<ul><li>Neue MDateiendungen k&ouml;nnen mit diesem Formular erstellt, editiert oder gel&ouml;scht werden.</li>
	<li>Suche nach einer neuen Dateiendung &uuml;ber eine externe Website.</li>
	<li>Dargestellte Dateiendung f&uuml;r Admin- und User-Uploads anzeigen.</li>
	<li>&Auml;ndere Dateiendungs Uploadstatus.</li></ul>
	");
/*
* Mimetype Buttons
*/
define("_AM_WFD_MIME_CREATE", "Erstellen");
define("_AM_WFD_MIME_CLEAR", "Zur&uuml;cksetzen");
define("_AM_WFD_MIME_CANCEL", "Abbrechen");
define("_AM_WFD_MIME_MODIFY", "&Auml;ndern");
define("_AM_WFD_MIME_DELETE", "L&ouml;schen");
define("_AM_WFD_MIME_FINDIT", "Get Extension!");
/*
* Mimetype Database
*/
define("_AM_WFD_MIME_DELETETHIS", "L&ouml;schen einer ausgew&auml;hlte Dateiendung?");
define("_AM_WFD_MIME_MIMEDELETED", "Dateiendung %s wurden gesl&ouml;scht");
define("_AM_WFD_MIME_CREATED", "Mimetype Information Created");
define("_AM_WFD_MIME_MODIFIED", "Mimetype Information Modified");
/*
* Vote Information
*/
define("_AM_WFD_VOTE_RATINGINFOMATION", "Bewertungs-Information");
define("_AM_WFD_VOTE_TOTALVOTES", "Stimmen insgesamt: ");
define("_AM_WFD_VOTE_REGUSERVOTES", "Stimmen registrierter User: %s");
define("_AM_WFD_VOTE_ANONUSERVOTES", "Stimmen anonymer User: %s");
define("_AM_WFD_VOTE_USER", "User");
define("_AM_WFD_VOTE_IP", "IP Adresse");
define("_AM_WFD_VOTE_USERAVG", "Durchschnitt aller Bewertungen");
define("_AM_WFD_VOTE_TOTALRATE", "Abgegebene Stimmen");
define("_AM_WFD_VOTE_DATE", "eingesendet am");
define("_AM_WFD_VOTE_RATING", "Bewertung");
define("_AM_WFD_VOTE_NOREGVOTES", "Keine Bewertung durch registrierte User");
define("_AM_WFD_VOTE_NOUNREGVOTES", "Keine Bewertung durch anonyme User");
define("_AM_WFD_VOTE_VOTEDELETED", "Bewertung gel&ouml;scht.");
define("_AM_WFD_VOTE_ID", "ID");
define("_AM_WFD_VOTE_FILETITLE", "Datei-Titel");
define("_AM_WFD_VOTE_DISPLAYVOTES", "Bewertungen/ Abstimmungsergebnisse");
define("_AM_WFD_VOTE_NOVOTES", "Keine User Bewertungen vorhanden");
define("_AM_WFD_VOTE_DELETE", "Keine User Bewertungen vorhanden");
define("_AM_WFD_VOTE_DELETEDSC", "<b>L&ouml;scht</b> die entsprechende Bewertung aus der Datenbank.");

/*
* Modifications
*/
/*
define("_AM_WFD_MOD_TOTMODREQUESTS", "Total Modification Requests: ");
define("_AM_WFD_MOD_MODREQUESTS", "Modified Files");
define("_AM_WFD_MOD_MODREQUESTSINFO", "Modified Files Information");
define("_AM_WFD_MOD_MODID", "ID");
define("_AM_WFD_MOD_MODTITLE", "Title");
define("_AM_WFD_MOD_MODPOSTER", "Original Poster: ");
define("_AM_WFD_MOD_DATE", "Submitted");
define("_AM_WFD_MOD_NOMODREQUEST", "There are no requests that match this critera");
define("_AM_WFD_MOD_MODIFYSUBMIT", "&Uuml;bermittelt von");
define("_AM_WFD_MOD_ORIGINAL", "Orginal Downloaddetails");
define("_AM_WFD_MOD_REQDELETED", "Modification request removed from the database");
define("_AM_WFD_MOD_REQUPDATED", "Selected Download Modified and Database Updated Successfully");

*/
define("_AM_WFD_MOD_TOTMODREQUESTS", "&Auml;nderungsanfragen insgesamt: ");
define("_AM_WFD_MOD_MODREQUESTS", "Ge&auml;nderte Dateien");
define("_AM_WFD_MOD_MODREQUESTSINFO", "Informationen: Ge&auml;nderte Dateien");
define("_AM_WFD_MOD_MODID", "ID");
define("_AM_WFD_MOD_MODTITLE", "Titel");
define("_AM_WFD_MOD_MODPOSTER", "Original von: ");
define("_AM_WFD_MOD_DATE", "&uuml;bermittelt von");
define("_AM_WFD_MOD_NOMODREQUEST", "Es existieren keine Anfragen, die den Kriterien entsprechen");
define("_AM_WFD_MOD_TITLE", "Download Titel: ");
define("_AM_WFD_MOD_LID", "Download ID: ");
define("_AM_WFD_MOD_CID", "Kategorie: ");
define("_AM_WFD_MOD_URL", "Download URL: ");
define("_AM_WFD_MOD_MIRROR", "Download Mirror: ");
define("_AM_WFD_MOD_SIZE", "Download Gr&ouml;&szlig;e: ");
define("_AM_WFD_MOD_PUBLISHER", "ver&ouml;ffentlicht von: ");
define("_AM_WFD_MOD_LICENSE", "Software Lizenz: ");
define("_AM_WFD_MOD_FEATURES", "Kernfunktionen: ");
define("_AM_WFD_MOD_FORUMID", "Forum: ");
define("_AM_WFD_MOD_LIMITATIONS", "Softwarebeschr&auml;nkungen: ");
define("_AM_WFD_MOD_DHISTORY", "Download History: ");
define("_AM_WFD_MOD_SCREENSHOT", "Screenshot: ");
define("_AM_WFD_MOD_HOMEPAGE", "Homepage: ");
define("_AM_WFD_MOD_HOMEPAGETITLE", "Homepage Titel: ");
define("_AM_WFD_MOD_VERSION", "Version: ");
define("_AM_WFD_MOD_SHOTIMAGE", "Screenshot Bild: ");
define("_AM_WFD_MOD_FILESIZE", "Dateigr&ouml;&szlig;e: ");
define("_AM_WFD_MOD_PLATFORM", "Software-Plattform: ");
define("_AM_WFD_MOD_PRICE", "Preis: ");
define("_AM_WFD_MOD_LICENCE", "Software Lizenz: ");
define("_AM_WFD_MOD_DESCRIPTION", "Softwarebeschr&auml;nkungen: ");
define("_AM_WFD_MOD_REQUIREMENTS", "Voraussetzungen: ");
define("_AM_WFD_MOD_MODIFYSUBMITTER", "Eingesandt von: ");
define("_AM_WFD_MOD_MODIFYSUBMIT", "Eingesandt von");
define("_AM_WFD_MOD_PROPOSED", "Vorgeschlagene Downloaddetails");
define("_AM_WFD_MOD_ORIGINAL", "Orginal Downloaddetails");
define("_AM_WFD_MOD_REQDELETED", "&Auml;nderungsanfrage aus Datenbank entfernt");
define("_AM_WFD_MOD_REQUPDATED", "Gew&auml;hlter Download erfolgreich modifiziert und Datenbank aktualisiert");
define('_AM_WFD_MOD_VIEW','Zeigen');

define("_AM_WFD_MOD_FILENAME", "Lokaler Dateiname: ");
define("_AM_WFD_MOD_FILETYPE", "Lokaler Dateitype: ");
define("_AM_WFD_MOD_STATUS", "Status: ");
define("_AM_WFD_MOD_RATING", "Rangfolge: ");
define("_AM_WFD_MOD_HITS", "Aufrufe: ");
define("_AM_WFD_MOD_VOTES", "Bewertungen: ");
define("_AM_WFD_MOD_COMMENTS", "Kommentare: ");
define("_AM_WFD_MOD_PUBLISHED", "Ver&ouml;ffentlicht: ");
define("_AM_WFD_MOD_EXPIRED", "Abgelaufen: ");
define("_AM_WFD_MOD_UPDATED", "Upgedatet: ");
define("_AM_WFD_MOD_OFFLINE", "Offline: ");
define("_AM_WFD_MOD_REQUESTDATE", "Antragdatum: ");
define("_AM_WFD_MOD_IPADDRESS", "IP Adresse: ");
define("_AM_WFD_MOD_NOTIFYPUB", "Benachrichtigt: ");
define("_AM_WFD_MOD_PAYPALEMAIL", "PayPal Email: ");
define("_AM_WFD_MOD_SUMMARY", "Zusammenfassung: ");

/*
* Reviews defines
*/
define("_AM_WFD_REV_SNEWMNAMEDESC", "Rezension freigeben: ");
define("_AM_WFD_REV_ID", "ID");
define("_AM_WFD_REV_TITLE", "Titel");
define("_AM_WFD_REV_REVIEWTITLE", "Rezensionstitel");
define("_AM_WFD_REV_POSTER", "&uuml;bermittelt von");
define("_AM_WFD_REV_SUBMITDATE", "eingesendet am");
define("_AM_WFD_REV_FTITLE", "Titel Rezension: ");
define("_AM_WFD_REV_FRATING", "Bewertung Rezension: ");
define("_AM_WFD_REV_FDESCRIPTION", "Beschreibung Rezension: ");
define("_AM_WFD_REV_FAPPROVE", "Rezension freigeben: ");
define("_AM_WFD_REV_ACTION", "Aktion");
define("_AM_WFD_REV_NOWAITINGREVIEWS", "Keine wartende Rezensionen gefunden");
define("_AM_WFD_REVIEW_APPROVETHIS", "Rezension genehmigen");
define("_AM_WFD_REV_NOPUBLISHEDREVIEWS", "Keine freigegebenen Rezensionen gefunden");
define("_AM_WFD_REV_REVIEW_UPDATED", "Gew&auml;hlte Rezension ge&auml;ndert und Datenbank erfolgreich aktualisiert");
define("_AM_WFD_REV_REVIEW_TOTAL", "Gesamte Rezensionen:");
define("_AM_WFD_REV_REVIEW_WAITING", "Wartende Rezensionen:");
define("_AM_WFD_REV_REVIEW_PUBLISHED", "Freigegebene Rezensionen:");
/*
* File management
*/
define("_AM_WFD_FILE_SUBMITTERID", "Submitter User Id: <br /><br />Leave this as it is, Unless you want to change who submitted the download");

define("_AM_WFD_FILE_ID", "Datei ID: ");
define("_AM_WFD_FILE_IP", "Uploaders IP Adresse: ");
define("_AM_WFD_FILE_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Erlaubte Admin Dateiendungen</b>:</div>");
define("_AM_WFD_FILE_MODIFYFILE", "Dateiinformationen modifizieren");
define("_AM_WFD_FILE_CREATENEWFILE", "Neue Datei erstellen");
define("_AM_WFD_FILE_TITLE", "Downloadtitel: ");
define("_AM_WFD_FILE_DLURL", "Download-URL (direkter URL): ");
define("_AM_WFD_FILE_FILENAME", "Lokaler Dateiname:<br /><br /><span style='font-weight: normal;'>ANMERKUNG: Wenn Du die lokale Datei als Download verwendest, müssen Du auch den korrekten Dateitype unten angeben!</span>");
define("_AM_WFD_FILE_FILETYPE", "Dateitype: ");
define("_AM_WFD_FILE_MIRRORURL", "Download-Mirror: ");
define("_AM_WFD_FILE_SUMMARY", "Dateizusammenfassung: ");
define("_AM_WFD_FILE_DESCRIPTION", "Beschreibung des Downloads: ");
define("_AM_WFD_FILE_DUPLOAD", " Datei hochladen:");
define("_AM_WFD_FILE_CATEGORY", "Kategorie ausw&auml;hlen: ");
define("_AM_WFD_FILE_HOMEPAGETITLE", "Homepage Titel: ");
define("_AM_WFD_FILE_HOMEPAGE", "Homepage-URL: ");
define("_AM_WFD_FILE_SIZE", "Dateigr&ouml;&szlig;e in Bytes: ");
define("_AM_WFD_FILE_VERSION", "Dateiversion: ");
define("_AM_WFD_FILE_PUBLISHER", "Ver&ouml;ffentlicht von: ");
define("_AM_WFD_FILE_PLATFORM", "Software Plattform: ");
define("_AM_WFD_FILE_LICENCE", "Software Lizenz: ");
define("_AM_WFD_FILE_LIMITATIONS", "Softwarebeschr&auml;nkungen: ");
define("_AM_WFD_FILE_PRICE", "Preis: ");
define("_AM_WFD_FILE_KEYFEATURES", "Kernfunktionen:<br /><br /><span style='font-weight: normal;'>Einzelne Kernfunktionen durch | voneinander trennen</span>");
define("_AM_WFD_FILE_REQUIREMENTS", "System Voraussetzungen:<br /><br /><span style='font-weight: normal;'>Voraussetzungen durch | voneinander trennen</span>");
define("_AM_WFD_FILE_HISTORY", "Download History bearbeiten:<br /><br /><span style='font-weight: normal;'>In diesem Bereich sollten nur bestehende History-Informationen bearbeitet, oder neue aufgenommen werden.</span>");
define("_AM_WFD_FILE_HISTORYD", "Neue Download History hinzuf&uuml;gen:<br /><br /><span style='font-weight: normal;'>Versionsnummer und Datum werden automatisch hinzugef&uuml;gt</span>");
define("_AM_WFD_FILE_HISTORYVERS", "<b>Version: </b>");
define("_AM_WFD_FILE_HISTORDATE", " <b>Aktualisiert:</b> ");
define("_AM_WFD_FILE_FILESSTATUS", " Download offline setzen?<br /><br /><span style='font-weight: normal;'>Dadurch wird der Download nach Au&szlig;en unsichtbar f&uuml;r die Besucher.</span>");
define("_AM_WFD_FILE_SETASUPDATED", " Download Status auf Aktualisiert (Updated) setzen?<br /><br /><span style='font-weight: normal;'>Dadurch wird das Updated Icon gesetzt.</span>");
define("_AM_WFD_FILE_SHOTIMAGE", "Screenshot ausw&auml;hlen: ");
define("_AM_WFD_FILE_DISCUSSINFORUM", "Diskussion in Forum hinzuf&uuml;gen? (Nur Xoopsboard)");
define("_AM_WFD_FILE_PUBLISHDATE", "Ver&ouml;ffentlichungsdatum:");
define("_AM_WFD_FILE_EXPIREDATE", "Ablaufdatum:");
define("_AM_WFD_FILE_CLEARPUBLISHDATE", "<br /><br />Ver&ouml;ffentlichungsdatum entfernen:");
define("_AM_WFD_FILE_CLEAREXPIREDATE", "<br /><br />Ablaufdatum entfernen:");
define("_AM_WFD_FILE_PUBLISHDATESET", " Ver&ouml;ffentlichungsdatum setzen auf: ");
define("_AM_WFD_FILE_SETDATETIMEPUBLISH", " Setze Datum/Uhrzeit der Ver&ouml;ffentlichung");
define("_AM_WFD_FILE_SETDATETIMEEXPIRE", " Setze Datum/Uhrzeit des Ablaufs");
define("_AM_WFD_FILE_SETPUBLISHDATE", "<b>Setze Ver&ouml;ffentlichungsdatum: </b>");
define("_AM_WFD_FILE_SETNEWPUBLISHDATE", "<b>Setze Ver&ouml;ffentlichungsdatum</b><br />");
define("_AM_WFD_FILE_SETPUBDATESETS", "<b>Ver&ouml;ffentlichungsdatum gesetzt auf: </b><br />");
define("_AM_WFD_FILE_EXPIREDATESET", " Ablaufdatum gesetzt auf: ");
define("_AM_WFD_FILE_SETEXPIREDATE", "<b>Setze Ablaufdatum</b>");
define("_AM_WFD_FILE_MUSTBEVALID", "G&uuml;ltige Screenshots m&uuml;ssen sich im Verzeichnis %s befinden (z.B. shot.gif). Leer lassen falls kein Bild existiert.");
define("_AM_WFD_FILE_EDITAPPROVE", "Download freigeben:");
define("_AM_WFD_FILE_NEWFILEUPLOAD", "Neue Downloaddatei eingetragen und Datenbank erfolgreich aktualisiert");
define("_AM_WFD_FILE_FILEMODIFIEDUPDATE", "Selected File Modified and Database Updated Successfully");
define("_AM_WFD_FILE_REALLYDELETEDTHIS", "Soll der Download wirklich gel&ouml;scht werden?");
define("_AM_WFD_FILE_FILEWASDELETED", "Downloaddatei %s erfolgreich aus Datenbank entfernt!");
define("_AM_WFD_FILE_USE_UPLOAD_TITLE", " Nutze Dateinamen als Dateititel.");
define("_AM_WFD_FILE_FILEAPPROVED", "Datei freigegeben und Datenbank erfolgreich aktualisiert");
define("_AM_WFD_FILE_CREATENEWSSTORY", "<b>News Story aus Download erstellen</b>");
define("_AM_WFD_FILE_SUBMITNEWS", "Neue Datei als Artikel &uuml;bermitteln?");
define("_AM_WFD_FILE_NEWSCATEGORY", "Nachrichten-/Artikelkategorie ausw&auml;hlen:");
define("_AM_WFD_FILE_NEWSTITLE", "Nachrichtentitel:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leer lassen um Downloaddatei als Artikeltitel zu verwenden</span></div>");

/*
* Broken downloads defines
*/
define("_AM_WFD_SBROKENSUBMIT", "Defekte: ");
define("_AM_WFD_BROKEN_FILE", "Defektberichte");
define("_AM_WFD_BROKEN_FILEIGNORED", "Broken Report ignoriert und erfolgreich aus der Datenbank entfernt!");
define("_AM_WFD_BROKEN_NOWACK", "Status *anerkannt* ge&auml;ndert und Datenbank aktualisiert!");
define("_AM_WFD_BROKEN_NOWCON", "Status *best&auml;tigt* ge&auml;ndert und Datenbank aktualisiert!");
define("_AM_WFD_BROKEN_REPORTINFO", "Defektbericht Information");
define("_AM_WFD_BROKEN_REPORTSNO", "Wartende Defektberichte:");
define("_AM_WFD_BROKEN_IGNOREDESC", "<b>Ignoriert</b> den Bericht und l&ouml;scht diesen Defektliste.");
define("_AM_WFD_BROKEN_IGNORE_ALT", "Ignoriert den Bericht und l&ouml;scht diesen Defektliste");
define("_AM_WFD_BROKEN_DELETEDESC", "<b>L&ouml;scht</b> den gemeldeten Download und den Defektbericht.");
define("_AM_WFD_BROKEN_DELETE_ALT", "Löschen des Reports der berichteten Downloaddaten und defekte ");
define("_AM_WFD_BROKEN_EDITDESC", "<b>Editiere</b> Download um das Problem zu beheben.");
define("_AM_WFD_BROKEN_EDIT_ALT", "Redigieren dieses Download, um das Problem zu beheben");
define("_AM_WFD_BROKEN_ACKDESC", "<b>Anerkannt</b> Setze den Status des Defektbericht auf *anerkannt*.");
define("_AM_WFD_BROKEN_ACK_ALT", "Bestätigen des Zustand des defekten Dateienliste");
define("_AM_WFD_BROKEN_CONFIRMDESC", "<b>Best&auml;tigt</b> Setze den Status des Defektberichts auf *best&auml;tigt*.");
define("_AM_WFD_BROKEN_CONFIRM_ALT", "Bestätigen des Zustand des defekten Dateienliste");

define("_AM_WFD_BROKEN_ID", "ID");
define("_AM_WFD_BROKEN_TITLE", "Titel");
define("_AM_WFD_BROKEN_REPORTER", "Reporter");
define("_AM_WFD_BROKEN_FILESUBMITTER", "Eingesandt durch");
define("_AM_WFD_BROKEN_DATESUBMITTED", "&Uuml;bermittelt am");
define("_AM_WFD_BROKEN_ACTION", "Aktion");
define("_AM_WFD_BROKEN_NOFILEMATCH", "Es exisitieren keine Defektbericht mit den gew&auml;hlten Kriterien");
define("_AM_WFD_BROKENFILEDELETED", "Downloadbeschreibung und Defektbericht aus Datenbank entfernt");
define("_AM_WFD_BROKEN_DOWNLOAD_DONT_EXISTS", "Diese Datei ist nicht mehr vorhanden");

/*
* About defines
*/
define("_AM_WFD_BY", "by");

//block defines
define("_AM_WFD_BADMIN","Block Administration");
define("_AM_WFD_BLKDESC","Beschreibung");
define("_AM_WFD_TITLE","Titel");
define("_AM_WFD_SIDE","Ausrichtung");
define("_AM_WFD_WEIGHT","Gewichtung");
define("_AM_WFD_VISIBLE","Sichtbarkeit");
define("_AM_WFD_ACTION","Aktion");
define("_AM_WFD_SBLEFT","Links");
define("_AM_WFD_SBRIGHT","Rechts");
define("_AM_WFD_CBLEFT","Center Links");
define("_AM_WFD_CBRIGHT","Center Rechts");
define("_AM_WFD_CBCENTER","Center Mitte");
define("_AM_WFD_ACTIVERIGHTS","Active Berechtigungen");
define("_AM_WFD_ACCESSRIGHTS","Zugriffs Berechtigungen");

//image admin icon
define("_AM_WFD_ICO_EDIT","Objekt editieren");
define("_AM_WFD_ICO_DELETE","Objekt l&ouml;schen");
define("_AM_WFD_ICO_ONLINE","Online");
define("_AM_WFD_ICO_OFFLINE","Offline");
define("_AM_WFD_ICO_APPROVED","Best&auml;tigt");
define("_AM_WFD_ICO_NOTAPPROVED","Nicht best&auml;tigen");

define("_AM_WFD_ICO_LINK","Verwandte Links");
define("_AM_WFD_ICO_URL","Verwandten URL hinzuf&uuml;gen");
define("_AM_WFD_ICO_ADD","Hinzuf&uuml;gen");
define("_AM_WFD_ICO_APPROVE","Best&auml;tigung");
define("_AM_WFD_ICO_STATS","Statistiken");

define("_AM_WFD_ICO_IGNORE","Ignorieren");
define("_AM_WFD_ICO_ACK","Anerkannte Defektberichte");
define("_AM_WFD_ICO_REPORT","Defektbericht best&auml;tigen?");
define("_AM_WFD_ICO_CONFIRM","Defektbericht best&auml;tigt");
define("_AM_WFD_ICO_CONBROKEN","Defektbericht best&auml;tigen?");


define("_AM_WFD_DB_IMPORT", "Import");
define("_AM_WFD_DB_CURRENTVER", "Current version: <span class='currentVer'>%s</span>");
define("_AM_WFD_DB_DBVER", "Database Version %s");
define("_AM_WFD_DB_MSG_ADD_DATA", "Data added in table %s");
define("_AM_WFD_DB_MSG_ADD_DATA_ERR", "Error adding data in table %s");
define("_AM_WFD_DB_MSG_CHGFIELD", "Changing field %s in table %s");
define("_AM_WFD_DB_MSG_CHGFIELD_ERR", "Error changing field %s in table %s");
define("_AM_WFD_DB_MSG_CREATE_TABLE", "Table %s created");
define("_AM_WFD_DB_MSG_CREATE_TABLE_ERR", "Error creating table %s");
define("_AM_WFD_DB_MSG_NEWFIELD", "Successfully added field %s");
define("_AM_WFD_DB_MSG_NEWFIELD_ERR", "Error adding field %s");
define("_AM_WFD_DB_NEEDUPDATE", "Your database is out-of-date. Please upgrade your database tables!<br><b>Note : The SmartFactory strongly recommends you to backup all SmartSection tables before running this upgrade script.</b><br>");
define("_AM_WFD_DB_NOUPDATE", "Your database is up-to-date. No updates are necessary.");
define("_AM_WFD_DB_UPDATE_DB", "Updating Database");
define("_AM_WFD_DB_UPDATE_ERR", "Errors updating to version %s");
define("_AM_WFD_DB_UPDATE_NOW", "Update Now!");
define("_AM_WFD_DB_UPDATE_OK", "Successfully updated to version %s");
define("_AM_WFD_DB_UPDATE_TO", "Updating to version %s");

define("_AM_WFD_GOMOD", "Modulansicht auf der HP");
define("_AM_WFD_UPDATE_MODULE", "Update Modul");
define("_AM_WFD_MDOWNLOADS","Dateimanagement");
define("_AM_WFD_DB_MSG_UPDATE_TABLE", "Updating field values in %s");
define("_AM_WFD_DB_MSG_UPDATE_TABLE_ERR", "Errors updating field values in %s");

// Mirrors
// waiting mirrors
define("_AM_WFD_AMIRRORS", "Mirrors Management");
define("_AM_WFD_AMIRRORS_WAITING", "Mirrors warten auf G&uuml;ltigkeit:");
define("_AM_WFD_AMIRRORS_INFO", "Mirrors Management Information");
define("_AM_WFD_AMIRRORS_APPROVE", "<b>Freigabe</b> eines Neuen Mirror ohne &Uuml;berprüfung.");
define("_AM_WFD_AMIRRORS_EDIT", "<b>Eingabe</b> eines neuen Mirror und dessen Freigabe.");
define("_AM_WFD_AMIRRORS_DELETE", "<b>L&ouml;sche</b> die neuen Mirror-Informationen.");

//mirrors defines
define("_AM_WFD_MIRROR_MIRRORTITLE", "Mirror Host");
define("_AM_WFD_MIRROR_NOPUBLISHEDMIRRORS", "Keine Ver&ouml;ffentlichte Mirrors gefunden");
define("_AM_WFD_MIRROR_MIRROR_TOTAL", "Anzahl Mirrors:");
define("_AM_WFD_MIRROR_MIRROR_WAITING", "Wartende Mirrors");
define("_AM_WFD_MIRROR_MIRROR_PUBLISHED", "Ver&ouml;ffentlichte Mirrors");
define("_AM_WFD_MIRROR_SNEWMNAMEDESC", "Freigegebene Mirror: ");
define("_AM_WFD_MIRROR_ID", "ID");
define("_AM_WFD_MIRROR_TITLE", "Titel");
define("_AM_WFD_MIRROR_MUSTBEVALID", "Das Homepage Logo muss ein gültige Bilddatei im %s Verzeichnis (ex. shot.gif) sein. Wird nichts eingegeben dann wird kein Logo angezeigt.");
define("_AM_WFD_MIRROR_POSTER", "Erstellt von: ");
define("_AM_WFD_MIRROR_SUBMITDATE", "Erstellt am: ");
define("_AM_WFD_MIRROR_FHOMEURLTITLE", "Homepage Titel: ");
define("_AM_WFD_MIRROR_FHOMEURL", "Homepage URL: ");
define("_AM_WFD_MIRROR_UPLOADIMAGE", "Upload des Webseitenlogo:<br /><br />Ein kleines Logo das diese Webseite Representiert.");
define("_AM_WFD_MIRROR_MIRRORIMAGE", "Webseite Logo:");
define("_AM_WFD_MIRROR_CONTINENT", "Erdteil:");
define("_AM_WFD_MIRROR_LOCATION", "Herkunft:<br /><br />Beispiel: Frankfurth, GE");
define("_AM_WFD_MIRROR_DOWNURL", "Download URL:<br /><br />Eingabe der URL in der sich die Datei befindet.");
define("_AM_WFD_MIRROR_FAPPROVE", "Mirror Freigeben: ");
define("_AM_WFD_MIRROR_ACTION", "Aktion");
define("_AM_WFD_MIRROR_NOWAITINGMIRRORS", "Keine wartenden Mirrors gefunden");
define("_AM_WFD_MIRROR_MIRROR_UPDATED", "Selected Mirror Modified and Database Updated Successfully");
define("_AM_WFD_MIRROR_APPROVETHIS", "Freigegebene Mirror");

//continents (used in mirrors page)
define("_AM_WFD_CONT1","Afrika");
define("_AM_WFD_CONT2","Antarktis");
define("_AM_WFD_CONT3","Asien");
define("_AM_WFD_CONT4","Europe");
define("_AM_WFD_CONT5","Nortamerika");
define("_AM_WFD_CONT6","S&uuml;damerika");
define("_AM_WFD_CONT7","Ozeanien");

define("_AM_WFD_HELP","Hilfe");


// added - start - March 4 2006 - jpc
define("_AM_WFD_FFS_SUBMITBROKEN", "Submit");
define("_AM_WFD_FFS_STANDARD_FORM", "No, use the standard form");
define("_AM_WFD_FFS_CUSTOM_FORM", "Use a custom form for this category?");
define("_AM_WFD_FFS_DOWNLOADTITLE", "Submitting a '{category}' file.");
define("_AM_WFD_FFS_EDITDOWNLOADTITLE", "Editing a '{category}' file.");
define("_AM_WFD_FFS_BACK", "Back");
define("_AM_WFD_FFS_RELOAD", "Reload");


define("_MD_WFD_CATEGORYC", "Category: ");  // _MD to reuse the category form
define("_MD_WFD_FFS_SUBMITCATEGORYHEAD", "Which Category of file do you want to submit?");
define("_MD_WFD_FFS_DOWNLOADDETAILS", "Download details:");
define("_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS", "Custom details:");
define("_MD_WFD_FILETITLE", "Download Title: ");
define("_MD_WFD_DLURL", "Download URL: ");
define("_MD_WFD_UPLOAD_FILEC", "Upload File: ");
define("_MD_WFD_DESCRIPTION", "Description");
// added - end - March 4 2006 - jpc
?>