<?php
/**
 * $Id$
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

// Module Info
// The name of this module
define("_MI_WFD_NAME","WF-Downloads");

// A brief description of this module
define("_MI_WFD_DESC","Erstellt einen Downloadbereich in dem User verschiedene Dateien downloaden, einschicken und bewerten können.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFD_BNAME1","Aktuelle Downloads");
define("_MI_WFD_BNAME2","Top Downloads");
define("_MI_WFD_BNAME3","Top Downloads nach Kategorien");

// Sub menu titles
define("_MI_WFD_SMNAME1","Einsenden");
define("_MI_WFD_SMNAME2","Populär");
define("_MI_WFD_SMNAME3","Best bewertet");

// Names of admin menu items
define("_MI_WFD_BINDEX","Zusammenfassung");
define("_MI_WFD_INDEXPAGE","Startseite Erstellung");
define("_MI_WFD_MCATEGORY","Kategorienverwaltung");
define("_MI_WFD_MDOWNLOADS","Dateienverwaltung");
define('_MI_WFD_REVIEWS','Eintrag Erstellen');
define("_MI_WFD_MUPLOADS","Bilder Hochladen");
define("_MI_WFD_MMIMETYPES","Dateiendungen Verwaltung");
define("_MI_WFD_PERMISSIONS","Berechtigungseinstellungen");
define("_MI_WFD_MVOTEDATA","Bewertungen");
define("_MI_WFD_MMIRRORS","Mirrors");

// Title of config items
define('_MI_WFD_POPULAR', 'Popularitätszähler');
define('_MI_WFD_POPULARDSC', 'Anzahl an Downloads, bevor eine Downloaddatei als populär gilt');

//Display Icons
define("_MI_WFD_ICONDISPLAY","Populäre und Neue Downloads:");
define("_MI_WFD_DISPLAYICONDSC", "Wie sollen populäre und neue Downloadlistings markiert werden.");
define("_MI_WFD_DISPLAYICON1", "Zeige als Icon");
define("_MI_WFD_DISPLAYICON2", "Zeige als Text");
define("_MI_WFD_DISPLAYICON3", "Nicht zeigen");

define("_MI_WFD_DAYSNEW","Dauer Status <b>NEU</b> in Tagen:");
define("_MI_WFD_DAYSNEWDSC","Anzahl an Tagen, die ein Download als <b>NEU</b> markiert bleibt.");
define("_MI_WFD_DAYSUPDATED","Dauer Status <b>UPDATE</b> in Tagen:");
define("_MI_WFD_DAYSUPDATEDDSC","Anzahl an Tagen, die ein Download als <b>UPDATE</b> markiert bleibt.");

define('_MI_WFD_PERPAGE', 'Anzahl Downloads pro Listing');
define('_MI_WFD_PERPAGEDSC', 'Maximale Anzahl von Downloads die auf jeder (DL-)Seite dargestellt werden');

define('_MI_WFD_TEMPLATESET', 'Auswahl des Template Set');
define('_MI_WFD_TEMPLATESETDSC', 'Wähle ein Template das Du für dein Modul benützen möchtest.<br />Dieses erlaubt dir, das aussehen der Downloads an Ihre Webseite anzupassen.');
define('_MI_WFD_TEMPLATESET1', 'Default');
define('_MI_WFD_TEMPLATESET2', 'Professional');

define('_MI_WFD_USESHOTS', 'Screenshots anzeigen?');
define('_MI_WFD_USESHOTSDSC', 'Wähle <b>Ja</b> um Screenshots für jeden Download anzuzeigen');
define('_MI_WFD_SHOTWIDTH', 'Bildattribut *width* [in px]');
define('_MI_WFD_SHOTWIDTHDSC', 'Maximale Breite (width) des Screenshot/Thumbnails');
define('_MI_WFD_SHOTHEIGHT', 'Bildattribut *height* [in px]');
define('_MI_WFD_SHOTHEIGHTDSC', 'Maximale Höhe (height) des Screenshot/Thumbnails');
define('_MI_WFD_CHECKHOST', 'Unterbinde direkte Downloadverlinkung? (leeching)');
define('_MI_WFD_REFERERS', 'Folgende Seite darf direkt auf die Downloads linken<br />Separiert mit | ');

define('_MI_WFD_CAT_IMGWIDTH', 'Kategorie Image breite');
define('_MI_WFD_CAT_IMGWIDTHDSC', 'Einstellen der breite für das Kategoriebild');
define('_MI_WFD_CAT_IMGHEIGHT', 'Kategorie Image höhe');
define('_MI_WFD_CAT_IMGHEIGHTDSC', 'Einstellen der höhe für das Kategoriebild');

define("_MI_WFD_ANONPOST","Anonyme Einsendungen:");
define("_MI_WFD_ANONPOSTDSC","Anonymen Usern erlauben, Downloads zu posten?");
define("_MI_WFD_ANONPOST1","Keines Ausgewäht");
define("_MI_WFD_ANONPOST2","Nur vom Downloadverzeichnis");
define("_MI_WFD_ANONPOST3","Nur vom Mirror");
define("_MI_WFD_ANONPOST4","Beide");

define('_MI_WFD_AUTOAPPROVE','Automatische freigabe für Downloads/Mirrors ');
define('_MI_WFD_AUTOAPPROVEDSC','Neue Downloads ohne (Admin-)Überprüfung in die Datenbank übernehmen?');
define('_MI_WFD_AUTOAPPROVE1','Keines Ausgewäht');
define('_MI_WFD_AUTOAPPROVE2','Nur vom Downloadverzeichnis');
define('_MI_WFD_AUTOAPPROVE3','Nur vom Mirror');
define('_MI_WFD_AUTOAPPROVE4','Beides');

define('_MI_WFD_REVIEWAPPROVE','Automatische Uploadfreigabe');
define('_MI_WFD_REVIEWAPPROVEDSC','Neue Uploads ohne (Admin-)Überprüfung in die Datenbank übernehmen?');
define("_MI_WFD_REVIEWANONPOST","Anonyme User Berichte:");
define("_MI_WFD_REVIEWANONPOSTDSC","Willst Du allen anonymen Usern erlauben, neue Berichte einzureichen?");

define('_MI_WFD_MAXFILESIZE','Maximale Uploadgräße [in KB]');
define('_MI_WFD_MAXFILESIZEDSC','Maximale Dateigröße die per Upload möglich sein soll.');
define('_MI_WFD_IMGWIDTH','Maximale Breite von Bildern');
define('_MI_WFD_IMGWIDTHDSC','Maximal erlaubte Breite (width) eines Bildes, dass hochgeladen werden darf');
define('_MI_WFD_IMGHEIGHT','Maximale Höhe von Bildern');
define('_MI_WFD_IMGHEIGHTDSC','Maximal erlaubte Höhe (height) eines Bildes, dass hochgeladen werden darf');

define('_MI_WFD_AUTOSUMMARY','Freigabe der automatischen Zusammenfassung');
define('_MI_WFD_AUTOSUMMARYDESC','Erstelle eine automatisch Zusammenfassung, die auf x Anzahl definierten Buchstaben basiert.');
define('_MI_WFD_AUTOSUMMARYLENGTH','Zusammenfassungslänge');
define('_MI_WFD_AUTOSUMMARYLENGTHDESC','Die maximale Anzahl der Buchstaben, die für die Zusammenfassung Angezeigt wird');

define('_MI_WFD_UPLOADDIR','Uploadverzeichnis (Kein Trailingslash)');
define('_MI_WFD_UPLOADDIRDSC','Das Uploadverzeichnis *MUSS* ein absoluter Path sein!');

define('_MI_WFD_ENABLERSS','RSS-Feeds einschalten:');
define('_MI_WFD_ENABLERSSDSC','Wähle JA um den RSS-Feed für das Modul zu aktivieren.');

define('_MI_WFD_DOWNLOADMINPOSTS', "Minimum an posts bevor eine Datei heruntergeladen werden darf");
define('_MI_WFD_DOWNLOADMINPOSTSDSC', "Tragen die Mindestzahl der posts ein bevor eine Datei heruntergeladen werden darf");
define('_MI_WFD_UPLOADMINPOSTS', "Minimum an posts bevor eine Datei hochgeladen werden darf");
define('_MI_WFD_UPLOADMINPOSTSDSC', "Tragen die Mindestzahl der posts ein bevor eine Datei hochladen werden darf");

define('_MI_WFD_ALLOWSUBMISS','User Einsendungen:');
define('_MI_WFD_ALLOWSUBMISSDSC','User dürfen Downloads übermitteln?');
define('_MI_WFD_ALLOWSUBMISS1','Keines Ausgewäht');
define('_MI_WFD_ALLOWSUBMISS2','Nur vom Downloadverzeichnis');
define('_MI_WFD_ALLOWSUBMISS3','Nur vom Mirror');
define('_MI_WFD_ALLOWSUBMISS4','Beite');
define('_MI_WFD_ALLOWUPLOADS','User Uploads:');
define('_MI_WFD_ALLOWUPLOADSDSC','User dürfen Downloads uploaden?');
define('_MI_WFD_ALLOWUPLOADSGROUP','Uploads einreichen:');
define('_MI_WFD_ALLOWUPLOADSGROUPDSC','Diese ausgewählte Gruppe kann Dateien auf den Server laden.<br />Diese Berechtigung gilt für alle Dateien Screenshots!');
define('_MI_WFD_SCREENSHOTS','Uploadverzeichnis für Screenshots');
define('_MI_WFD_CATEGORYIMG','Uploadverzeichnis für Kategoriebilder');
define('_MI_WFD_MAINIMGDIR','Hauptbilderverzeichnis');
define('_MI_WFD_USETHUMBS', 'Thumbnails:');
define('_MI_WFD_USETHUMBSDSC', 'Unterstützte Dateitypen: <b>JPG, GIF, PNG</b>.<br /><br />Zu den Downloads gehörende Bilder werden als Thumbnails dargestellt. Falls der Server das Resizen von Bildern nicht unterstützt, sollte dieser Wert auf <b>\'Nein\'</b> gesetzt werden.');
define('_MI_WFD_DATEFORMAT', 'Datumsformat/Zeitstempel:');
define('_MI_WFD_DATEFORMATDSC', 'Wähle Datumformat für WF-Downloads:');
define('_MI_WFD_SHOWDISCLAIMER', 'Übermittlungsbestimmungen (Disclaimer)');
define('_MI_WFD_SHOWDOWNDISCL', 'Downloadbestimmungen (Disclaimer)');
define('_MI_WFD_DISCLAIMER', 'Disclaimertext für Übertragung eingeben:');
define('_MI_WFD_DOWNDISCLAIMER', 'Disclaimertext für den Download eingeben:');
define('_MI_WFD_PLATFORM', 'Software Plattform:');
define('_MI_WFD_SUBCATS', 'Unterkategorien:');
define('_MI_WFD_VERSIONTYPES', 'Versionsstatus:');
define('_MI_WFD_LICENSE', 'Lizenz auswählen:');
define('_MI_WFD_LIMITS', 'Dateibeschränkungen eingeben:');
define('_MI_WFD_MAXSHOTS', 'Vorgabe der maximalen screenshots:');
define('_MI_WFD_MAXSHOTSDSC', 'Stellt die Anzahl maximal zusässige screeshorts ein für eine Upload.');

define("_MI_WFD_SUBMITART", "Download Untergruppe:");
define("_MI_WFD_SUBMITARTDSC", "Auswahl der Gruppen, die neue Downloads einreichen dürfen.");

define("_MI_WFD_IMGUPDATE", "Update Thumbnails?");
define("_MI_WFD_IMGUPDATEDSC", "Thumbnails bei jedem Seitenaufruf aktualisieren. Anderenfalls wird immer das erste übermittelte (gecachte) Thumbnail verwendet.<br /><br />");
define("_MI_WFD_QUALITY", "Thumbnail Qualität: ");
define("_MI_WFD_QUALITYDSC", "Niedrigste:0 Höchste:100");
define("_MI_WFD_KEEPASPECT", "Seitenverhältnis (Ratio)");
define("_MI_WFD_KEEPASPECTDSC", "Seitenverhältnis (Ratio) der Bilder beibehalten?");
define("_MI_WFD_ADMINPAGE", "Anzahl darzustellender Downloaditems im Adminbereich:");
define("_MI_WFD_AMDMINPAGEDSC", "Anzahl der neuen Dateien die im Adminbereich dargestellt werden.");
define("_MI_WFD_ARTICLESSORT", "Darstellung der Downloads, sortiert nach:");
define("_MI_WFD_ARTICLESSORTDSC", "Select the default order for the download listings.");
define("_MI_WFD_TITLE", "Titel");
define("_MI_WFD_RATING", "Bewertung");
define("_MI_WFD_WEIGHT", "Gewichtung");
define("_MI_WFD_POPULARITY", "Popularität");
define("_MI_WFD_SUBMITTED2", "Einsendedatum");
define('_MI_WFD_COPYRIGHT', 'Copyright anzeigen?');
define('_MI_WFD_COPYRIGHTDSC', 'Copyright Statement auf der Downloadseite anzeigen?');

// Description of each config items
define('_MI_WFD_PLATFORMDSC', 'Neue Einträge durch | (Pipe) trennen.<br/><b>WICHTIG</b>: Werden nachträglich Einträge verändert, oder zwischengeschoben, verschieben sich die entsprechenden Einträge aller Downloads. Entsprechend neue Einträge sind am Ende anzufügen! Diese wirken sich nicht aus.');
define('_MI_WFD_SUBCATSDSC', 'Ja auswählen, um Unterkategorien anzuzeigen. Falls \'Nein\' ausgewählt wird, werden Unterkategorien nicht gelistet.');
define('_MI_WFD_LICENSEDSC', 'Neue Einträge durch | (Pipe) trennen.<br/><b>WICHTIG</b>: Werden nachträglich Einträge verändert, oder zwischengeschoben, verschieben sich die entsprechenden Einträge aller Downloads. Entsprechend neue Einträge sind am Ende anzufügen! Diese wirken sich nicht aus.');

// Text for notifications
define('_MI_WFD_GLOBAL_NOTIFY', 'Global');
define('_MI_WFD_GLOBAL_NOTIFYDSC', 'Globale Download-Benachrichtigungsoptionen.');

define('_MI_WFD_CATEGORY_NOTIFY', 'Kategorie');
define('_MI_WFD_CATEGORY_NOTIFYDSC', 'Benachrichtigungsoptionen der aktuellen Kategorie.');

define('_MI_WFD_FILE_NOTIFY', 'Datei');
define('_MI_WFD_FILE_NOTIFYDSC', 'Benachrichtigungsoptionen der aktuellen Datei.');

define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFY', 'Neue Kategorie');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Benachrichtigung wenn eine neue Dateikategorie angelegt wird.');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Benachrichtigung erhalten, wenn eine neue Dateikategorie angelegt wird.');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Neue Kategorie wurde erstellt');

define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFY', 'Dateiänderung angefragt');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYCAP', 'Benachrichtigung bei Dateiänderungsmeldung.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYDSC', 'Benachrichtigung erhalten, wenn eine Dateiänderung gemeldet wird.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Dateiänderungsanfrage');

define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFY', 'Defekter Downloadlink übermittelt');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYCAP', 'Benachrichtigung bei gemeldeten defekten Downloads.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYDSC', 'Benachrichtigung erhalten, wenn ein defekter Download gemeldet wird.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Defekter Downloadlink übermittelt');

define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFY', 'Neue Datei übermittelt');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYCAP', 'Benachrichtigung bei (wartenden) neuen gemeldeten Downloads.');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYDSC', 'Benachrichtigung erhalten, wenn (wartende) neue Downloads gemeldet werden.');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Neue Datei übermittelt');

define('_MI_WFD_GLOBAL_NEWFILE_NOTIFY', 'Neue Datei');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYCAP', 'Benachrichtigung wenn neuer Download gemeldet wird.');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYDSC', 'Benachrichtigung erhalten, wenn ein neuer Download gemeldet wird.');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Neue Datei');

define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFY', 'Datei in aktueller Kategorie gemeldet');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Benachrichtigung bei (wartenden) neuen Downloads für die aktuelle Kategorie.');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Benachrichtigung erhalten, wenn (wartende) neue Downloads für die aktuelle Kategorie gemeldet werden.');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Datei in aktueller Kategorie gemeldet');

define('_MI_WFD_CATEGORY_NEWFILE_NOTIFY', 'Neue Datei in Kategorie');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYCAP', 'Benachrichtigung wenn neuer Download in die aktuelle Kategorie aufgenommen wird.');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYDSC', 'Benachrichtigung erhalten, wenn ein neuer Download in die aktuelle Kategorie aufgenommen wird.');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Neue Datei in Kategorie');

define('_MI_WFD_FILE_APPROVE_NOTIFY', 'Datei freigegeben');
define('_MI_WFD_FILE_APPROVE_NOTIFYCAP', 'Benachrichtigung wenn Datei freigegeben wird.');
define('_MI_WFD_FILE_APPROVE_NOTIFYDSC', 'Benachrichtigung erhalten, wenn die Datei freigegeben wird.');
define('_MI_WFD_FILE_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Datei freigegeben');

/* Added by Lankford on 2007/3/21 */
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFY', 'Datei veränderung');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYCAP', 'Mitteilung wenn diese Datei geändert wurde.');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYDSC', 'Ich möchte eine Mitteilungen erhalten wenn diese Datei geändert wurde.');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Mitteilung : Dateiveränderung');

define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFY', 'Datei veränderung');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYCAP', 'Mitteilung wenn sich eine Datei in dieser Kategorie geändert wurde.');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYDSC', 'Ich möchte eine Mitteilungen erhalten wenn eine Datei dieser Kategorie geändert wurde.');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Mitteilung : Dateiveränderung');

define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFY', 'Datei veränderung');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYCAP', 'Mitteilung wenn sich irgend eine Datei geändert wurde.');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYDSC', 'Ich möchte eine Mitteilungen erhalten wenn irgend eine Datei geändert wurde.');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Mitteilung : Dateiveränderung');
/* End add block */

define('_MI_WFD_AUTHOR_INFO', "Entwickler Information");
define('_MI_WFD_AUTHOR_NAME', "Entwickler");
define('_MI_WFD_AUTHOR_DEVTEAM', "Entwickler Team");
define('_MI_WFD_AUTHOR_WEBSITE', "Entwickler Website");
define('_MI_WFD_AUTHOR_EMAIL', "Entwickler-Email");
define('_MI_WFD_AUTHOR_CREDITS', "Credits");
define('_MI_WFD_MODULE_INFO', "Module Development Information");
define('_MI_WFD_MODULE_STATUS', "Entwicklungsstatus");
define('_MI_WFD_MODULE_DEMO', "Demoseite");
define('_MI_WFD_MODULE_SUPPORT', "Offizielle Supportseite");
define('_MI_WFD_MODULE_BUG', "Einen bug für dieses Modul melden");
define('_MI_WFD_MODULE_FEATURE', "Neues Feature für dieses Modul vorschlagen");
define('_MI_WFD_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_WFD_RELEASE', "Veröffentlichungsdatum: ");

define('_MI_WFD_MODULE_MAILLIST', "SmartFactory Mailing Lists");

define('_MI_WFD_MODULE_MAILANNOUNCEMENTS', "Announcements Mailing List");
define('_MI_WFD_MODULE_MAILBUGS', "Bug Mailingliste");
define('_MI_WFD_MODULE_MAILFEATURES', "Features Mailingliste");

define('_MI_WFD_MODULE_MAILANNOUNCEMENTSDSC', "Aktuellsten Ankündigungen von SmartFactory erhalten.");
define('_MI_WFD_MODULE_MAILBUGSDSC', "Bug-Tracking und Ssubmission-Mailinglisten");
define('_MI_WFD_MODULE_MAILFEATURESDSC', "New Features Mailingliste abonnieren.");

define('_MI_WFD_WARNINGTEXT', "THE SOFTWARE IS PROVIDED BY SMARTFACTORY \"AS IS\" AND \"WITH ALL FAULTS.\"
SMARTFACTORY MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, SMARTFACTORY MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN SMARTFACTORY WEBSITE. IN NO
EVENT WILL SMARTFACTORY BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
SMARTFACTORY HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_WFD_AUTHOR_CREDITSTEXT',"The SmartFactory Team would like to thank the following people for their help and support during the development phase of this module:<br /><br />tom, mking, paco1969, mharoun, Talis, m0nty, steenlnielsen, Clubby, Geronimo, bd_csmc, herko, LANG, Stewdio, tedsmith, veggieryan, carnuke, MadFish, Kiang<br />and anyone else who has contributed to either directly or indirectly.");
define('_MI_WFD_AUTHOR_BUGFIXES', "Fehlerbereinigung Historie");

define('_MI_WFD_COPYRIGHTIMAGE', "Images copyright WF-Project/SmartFactory and may only be used with permission");

// mirror defines
define('_MI_WFD_MIRROR_USEIMAGES', 'Anzeige des Mirror Logos?'); // not implemented yet
define('_MI_WFD_MIRROR_USEIMAGESDSC', 'Wähle JA zur Anzeige der Loges aller Mirror'); // not implemented yet
define('_MI_WFD_MIRROR_IMGWIDTH', 'Logo Display Width'); // not implemented yet
define('_MI_WFD_MIRROR_IMGWIDTHDSC', 'Display width for mirror logo'); // not implemented yet
define('_MI_WFD_MIRROR_IMGHEIGHT', 'Logo Display Height'); // not implemented yet
define('_MI_WFD_MIRROR_IMGHEIGHTDSC', 'Display height for mirror logo'); // not implemented yet
define('_MI_WFD_MIRROR_AUTOAPPROVE','Auto Approve Submitted Mirrors');
define('_MI_WFD_MIRROR_AUTOAPPROVEDSC','Select to approve submitted mirrors without moderation.');

define('_MI_WFD_MIRROR_MAXIMGWIDTH','Upload Logo width'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGWIDTHDSC','Maximum logo width permitted when uploading logo files'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGHEIGHT','Upload logo height'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGHEIGHTDSC','Maximum logo height permitted when uploading logo files'); // not implemented yet

define('_MI_WFD_MIRROR_ENABLE','Freigabe des Mirror System');
define('_MI_WFD_MIRROR_ENABLEDSC','');
define('_MI_WFD_MIRROR_ENABLEONCHK','Freigabe des Server Online Check');
define('_MI_WFD_MIRROR_ENABLEONCHKDSC','Enables the host server check for the Mirrors<br />This can slow your page load down if<br />you have many mirrors');
define('_MI_WFD_MIRROR_ALLOWSUBMISS','User Mirror Submissions:');
define('_MI_WFD_MIRROR_ALLOWSUBMISSDSC','Allow Users to Submit new mirrors');
define('_MI_WFD_MIRROR_MIRRORIMAGES','Mirror Logo Upload Verzeichnis'); // not implemented yet
define('_MI_WFD_MIRROR_MIRRORIMAGESDSC','Auswahl des Mirror Logo Upload Verzeichnis'); // not implemented yet

// added in 3.2 Final
define('_MI_WFD_BNAME1_DSC','Zeige die neu hinzugefügten Dateien');
define('_MI_WFD_BNAME2_DSC','Zeige die oft geladenen Dateien');
define('_MI_WFD_BNAME3_DSC','Zeige die Downloads von den Top-Kategorien');
?>