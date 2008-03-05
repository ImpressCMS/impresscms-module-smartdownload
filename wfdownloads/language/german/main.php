<?php
/**
 * $Id: main.php,v 1.6 2006/04/06 17:55:30 mithyt2 Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * German Translation: L-Dillmann@web.de http://einmal-so.de
 * Licence: GNU
 */

/*
* Todo - Still to remove redundat defines from this area.
*/
define("_MD_WFD_NODOWNLOAD", "Das Download existiert nicht!");
define("_MD_WFD_DOWNLOADMINPOSTS", "Du musst erst den Z&auml;hler um 1 erh&ouml;hen,<br />bevor Du die Datei Downloaden kannst.");
define("_MD_WFD_UPLOADMINPOSTS", "Du musst erst den Z&auml;hler um 1 erh&ouml;hen,<br />bevor Du die Datei Uploaden kannst.");

define("_MD_WFD_SUBCATLISTING", "Kategorie Listing");
define("_MD_WFD_ISADMINNOTICE", "Webmaster: Mit diesem Bild gibt es ein Problem.");
define("_MD_WFD_THANKSFORINFO", "Danke f&uuml;r die &Uuml;bermittlung. Du wirst informiert, sobald Deine Einsendung vom Webmaster freigegeben wurde.");
define("_MD_WFD_ISAPPROVED", "Danke f&uuml;r die &Uuml;bermittlung. Deine Einsendung wurde &uuml;berpr&uuml;ft, freigegeben und wird ab jetzt gelistet.");
define("_MD_WFD_THANKSFORHELP", "Vielen Dank f&uuml;r die Hilfe, diese Liste aktuell zu halten.");
define("_MD_WFD_FORSECURITY", "Aus Sicherheitsgr&uuml;nden werden Username und IP-Adresse tempor&auml;r gespeichert.");
define("_MD_WFD_NOPERMISETOLINK", "Diese Datei geh&ouml;rt nicht zu der Seite von der Du kommst <br /><br />Bitte nimm kontakt mit dem dortigen Webmaster auf und teile ihm mit, dass:   <br /><b>ER KEINE LINKS UNSERER SITE LEECHEN SOLL!!</b> <br /><br /><b>Definition eines Leechers:</b> Jemand der zu faul ist von seinem eigenen Server aus zu verlinken, oder einfach nur die Arbeit anderer als seine eigene ausgibt<br /><br />  Deine IP Adresse <b>wurde gespeichert</b>.");
define("_MD_WFD_SUMMARY", "Zusammenfassung:<br /><br /><span style='font-weight: normal;'>Du kannst diesen Stelle frei lassen.<br />Dann wird hier eine Zusammenfassung erstellt.</span>");
define("_MD_WFD_DESCRIPTION", "Beschreibung");
define("_MD_WFD_SUBMITCATHEAD", "Formular: Melde Download");
define("_MD_WFD_MAIN", "Index");
define("_MD_WFD_POPULAR", "Popul&auml;r");
define("_MD_WFD_NEWTHISWEEK", "Neu diese Woche");
define("_MD_WFD_UPTHISWEEK", "Aktualisiert diese Woche");
define("_MD_WFD_POPULARITYLTOM", "Popularit&auml;t (geringste bis h&aouml;chste Anzahl Hits)");
define("_MD_WFD_POPULARITYMTOL", "Popularit&auml;t (h&aouml;chste bis geringste Anzahl Hits)");
define("_MD_WFD_TITLEATOZ", "Titel (A bis Z)");
define("_MD_WFD_TITLEZTOA", "Titel (Z bis A)");
define("_MD_WFD_DATEOLD", "Datum (&auml;ltere zuerst)");
define("_MD_WFD_DATENEW", "Datum (neuere zuerst)");
define("_MD_WFD_RATINGLTOH", "Bewertung (niedrigster bis h&ouml;chste Bewertung)");
define("_MD_WFD_RATINGHTOL", "Bewertung (h&ouml;chster bis niedrigste Bewertung)");
define("_MD_WFD_DESCRIPTIONC", "Beschreibung: ");
define("_MD_WFD_CATEGORYC", "Kategorie: ");
define("_MD_WFD_VERSION", "Version");
define("_MD_WFD_SUBMITDATE", "Ver&ouml;ffentlicht");
define("_MD_WFD_DLTIMES", "Diese Datei wurde %s mal heruntergeladen");
define("_MD_WFD_FILESIZE", "Dateigr&ouml;&szlig;e");
define("_MD_WFD_SUPPORTEDPLAT", "Unterst&uuml;tzte Betriebssysteme");
define("_MD_WFD_HOMEPAGE", "Homepage");

define("_MD_WFD_PUBLISHERC", "Ver&ouml;ffentlicht von: ");
define("_MD_WFD_RATINGC", "Bewertung: ");
define("_MD_WFD_ONEVOTE", "Erste Bewertung");
define("_MD_WFD_NUMVOTES", "%s Bewertungen");
define("_MD_WFD_RATETHISFILE", "Bewerten");
define("_MD_WFD_REVIEWTHISFILE", "Kritik schreiben");
define("_MD_WFD_REVIEWS", "Rezensionen:");
define("_MD_WFD_DOWNLOADHITS", "Downloads");
define("_MD_WFD_MODIFY", "Modifizieren");
define("_MD_WFD_REPORTBROKEN", "Datei als defekt melden");
define("_MD_WFD_BROKENREPORT", "Defekte Ressource melden");
define("_MD_WFD_SUBMITBROKEN", "Einsenden");
define("_MD_WFD_BEFORESUBMIT", "Bevor eine defekte Ressource gemeldet wird sollte bitte &uuml;berpr&uuml;ft werden, ob die gesuchte Ressource wirklich nicht mehr verf&uuml;gbar, oder die entsprechende Seite nur tempor&auml;r offline ist.");
define("_MD_WFD_TELLAFRIEND", "Empfehlen");
define("_MD_WFD_EDIT", "Editieren");
define("_MD_WFD_THEREARE", "Es gibt <b>%s</b> <i>Kategorien</i> und <b>%s</b> <i>Downloads</i>");
define("_MD_WFD_THEREIS", "Es gibt <b>%s</b> <i>Kategorie</i> und <b>%s</b> <i>Downloads</i>");
define("_MD_WFD_LATESTLIST", "Aktuellste Listings");
define("_MD_WFD_FILETITLE", "Downloadtitel: ");
define("_MD_WFD_DLURL", "Download URL: ");
define("_MD_WFD_UPLOAD_FILENAME", "Lokaler Dateiname: ");
define("_MD_WFD_UPLOAD_FILETYPE", "Dateitype: ");

define("_MD_WFD_HOMEPAGEC", "Homepage: ");
define("_MD_WFD_UPLOAD_FILEC", "Datei hochladen: ");
define("_MD_WFD_VERSIONC", "Version: ");
define("_MD_WFD_FILESIZEC", "Dateigr&ouml;&szlig;e: ");
define("_MD_WFD_NUMBYTES", "%s Bytes");
define("_MD_WFD_PLATFORMC", "Betriebssystem: ");
define("_MD_WFD_PRICE", "Preis");
define("_MD_WFD_LIMITS", "Beschr&auml;nkungen");
define("_MD_WFD_DOWNLICENSE", "Lizenz");
define("_MD_WFD_NOTSPECIFIED", "Nicht angegeben");
define("_MD_WFD_MIRRORSITE", "Download Mirror");
define("_MD_WFD_MIRROR", "Mirror Website");
define("_MD_WFD_PUBLISHER", "Publisher");
define("_MD_WFD_UPDATEDON", "Aktualisiert am");
define("_MD_WFD_PRICEFREE", "Free");
define("_MD_WFD_VIEWDETAILS", "Alle Details anzeigen");
define("_MD_WFD_OPTIONS", 'Optionen: ');
define("_MD_WFD_NOTIFYAPPROVE", 'Benachrichtigen wenn diese Datei freigegeben wird');
define("_MD_WFD_VOTEAPPRE", "Deine Bewertung ist willkommen.");
define("_MD_WFD_THANKYOU", "Danke dass Du Dir die Zeit nimmst auf %s abzustimmen"); // %s is your site name
define("_MD_WFD_VOTEONCE", "Bitte nicht mehrfach f&uuml;r die gleiche Ressource abstimmen.");
define("_MD_WFD_RATINGSCALE", "Die Skala reicht von 1 - 10, wobei 1 sehr schlecht und 10 sehr gut ist.");
define("_MD_WFD_BEOBJECTIVE", "Bitte sei objektiv. Wenn jeder nur mit 1 oder 10 abstimmt, ist die Bewertung nicht sehr hilfreich.");
define("_MD_WFD_DONOTVOTE", "Bitte keine eigenen Ressourcen bewerten.");
define("_MD_WFD_RATEIT", "Bewerten!");
define("_MD_WFD_INTFILEFOUND", "Auf %s gibt es eine interessante Datei zum Download"); // %s is your site name
define("_MD_WFD_RANK", "Rank");
define("_MD_WFD_CATEGORY", "Kategorie");
define("_MD_WFD_HITS", "Hits");
define("_MD_WFD_RATING", "Rating");
define("_MD_WFD_VOTE", "Wertungen");
define("_MD_WFD_SORTBY", "Sortieren nach:");
define("_MD_WFD_TITLE", "Titel");
define("_MD_WFD_DATE", "Datum");
define("_MD_WFD_POPULARITY", "Popularit&auml;t");
define("_MD_WFD_TOPRATED", "Bewertung");
define("_MD_WFD_CURSORTBY", "Dateien werden im Moment nach %s sortiert");
define("_MD_WFD_CANCEL", "Abbrechen");
define("_MD_WFD_ALREADYREPORTED", "Du hast diese Ressource bereits als defekt gemeldet.");
define("_MD_WFD_MUSTREGFIRST", "Leider hast Du nicht die Berechtigung f&uuml;r diese Aktion.<br />Bitte zun&auml;chst registrieren oder anmelden!");
define("_MD_WFD_NORATING", "Keine Wertung ausgew&auml;hlt.");
define("_MD_WFD_CANTVOTEOWN", "Du darfst f&uuml;r die Ressource die Du eingesendet hast nicht abstimmen.<br />Alle Stimmen werden geloggt und &uuml;berpr&uuml;ft.");
define("_MD_WFD_SUBMITDOWNLOAD", "Download einsenden");
define("_MD_WFD_SUB_SNEWMNAMEDESC", "<ul><li>Alle neuen Downloads werden zun&auml;chst verifiziert. Es kann daher bis zu 24 Stunden dauern, ehe sie in unserem Listing erscheinen.</li><li>Wir behalten uns das Recht vor, eingesendete Ressourcen abzulehnen oder ohne Nachfrage die Informationen zu modifizieren.</li></ul>");
define("_MD_WFD_MAINLISTING", "Download Hauptindex");
define("_MD_WFD_LASTWEEK", "Letzte Woche");
define("_MD_WFD_LAST30DAYS", "Letzten 30 Tage");
define("_MD_WFD_1WEEK", "1 Woche");
define("_MD_WFD_2WEEKS", "2 Wochen");
define("_MD_WFD_30DAYS", "30 Tage");
define("_MD_WFD_SHOW", "Zeigen");
define("_MD_WFD_DAYS", "Tage");
define("_MD_WFD_NEWDOWNLOADS", "Neue Downloads");
define("_MD_WFD_TOTALNEWDOWNLOADS", "Neue Downloads insgesamt");
define("_MD_WFD_DTOTALFORLAST", "Neueste Downloads der letzten Zeit");
define("_MD_WFD_AGREE", "Ich stimme zu");
define("_MD_WFD_DOYOUAGREE", "Mit den Bestimmungen einverstanden?");
define("_MD_WFD_DISCLAIMERAGREEMENT", "Bestimmungen (Disclaimer)");
define("_MD_WFD_DUPLOADSCRSHOT", "Screenshot hochladen:");
define("_MD_WFD_RESOURCEID", "Ressource id#: ");
define("_MD_WFD_REPORTER", "Original Reporter: ");
define("_MD_WFD_DATEREPORTED", "Gemeldet am: ");
define("_MD_WFD_RESOURCEREPORTED", "Als defekt gemeldete Ressource");
define("_MD_WFD_BROWSETOTOPIC", "<b>Downloads in alphabetischer Reihenfolge durchuchen</b>");
define("_MD_WFD_WEBMASTERACKNOW", "Broken Report Acknowledged: ");
define("_MD_WFD_WEBMASTERCONFIRM", "Broken Report Confirmed: ");
define("_MD_WFD_DELETE", "L&ouml;schen");
define("_MD_WFD_DISPLAYING", "Dargestellt: ");
define("_MD_WFD_LEGENDTEXTNEW", "Heute neu");
define("_MD_WFD_LEGENDTEXTNEWTHREE", "letzten 3 Tage");
define("_MD_WFD_LEGENDTEXTTHISWEEK", "diese Wochen");
define("_MD_WFD_LEGENDTEXTNEWLAST", "&auml;lter als 1 Woche");
define("_MD_WFD_THISFILEDOESNOTEXIST", "Fehler: Die Datei existiert nicht!");
define("_MD_WFD_BROKENREPORTED", "Defekte Datei gemeldet");
define("_MD_WFD_LEGENDTEXTRSS", "RSS Feeds");
define("_MD_WFD_LEGENDTEXTCATRSS", "RSS Category Feed");

define("_MD_WFD_BYTES", " B");
define("_MD_WFD_KILOBYTES", " Kb");
define("_MD_WFD_MEGABYTES", " Mb");
define("_MD_WFD_GIGABYTES", " Gb");
define("_MD_WFD_TERRABYTES", " Tb");
/*
* visit
*/
define("_MD_WFD_DOWNINPROGRESS", "Download in Progress");
define("_MD_WFD_DOWNSTARTINSEC", "Der Download sollte in 3 Sekunden beginnen...<b>bitte warten</b>.");
define("_MD_WFD_DOWNNOTSTART", "Sollte der angeforderte Download nicht beginnen, ");
define("_MD_WFD_CLICKHERE", "Hier klicken!");
define("_MD_WFD_BROKENFILE", "Defekte Datei");
define("_MD_WFD_PLEASEREPORT", "Bitte melde dem Webmaster diese Datei als defekt, ");
/*
* Reviews
*/
define("_MD_WFD_REV_TITLE", "Rezension Titel:");
define("_MD_WFD_REV_RATING", "Rezension Bewertung:");
define("_MD_WFD_REV_DESCRIPTION", "Rezension:");
define("_MD_WFD_REV_SUBMITREV", "Rezension einsenden");
define("_MD_WFD_ERROR_CREATEREVIEW", "Fehler beim erstellen eines Berichtes");

define("_MD_WFD_REV_SNEWMNAMEDESC", "
Bitte das Formular komplett ausf&uuml;llen und wir werden diesen dann so schnell wie m&ouml;glich &uuml;berpr&uuml;fen.<br /><br />
Danke dass Du Dir die Zeit nimmst Deine Meinung abzugeben. Du erm&ouml;glichst damit anderen Usern, gute Software schneller zu finden.<br /><br />Alle Rezensionen werden vor der Ver&ouml;ffentlichung von den Webmastern &uuml;berpr&uuml;ft.
");
define("_MD_WFD_ISNOTAPPROVED", "Dein Beitrag mu&szlig; erst von einem Moderator freigegeben werden.");
define("_MD_WFD_LICENCEC", "Software Lizenz: ");
define("_MD_WFD_LIMITATIONS", "Software Beschr&auml;nkungen: ");
define("_MD_WFD_KEYFEATURESC", "Kernfunktionen:<br /><br /><span style='font-weight: normal;'>Jede Kernfunktionen mit <b>|</b> separieren</span>");
define("_MD_WFD_REQUIREMENTSC", "System Voraussetzung:<br /><br /><span style='font-weight: normal;'>Jede Voraussetzung mit <b>|</b> separieren</span>");
define("_MD_WFD_HISTORYC", "Download History:");
define("_MD_WFD_HISTORYD", "Neue History hinzuf&uuml;gen:<br /><br /><span style='font-weight: normal;'>Das Einsendedatum wird automatisch hinzugef&uuml;gt.</span>");
define("_MD_WFD_HOMEPAGETITLEC", "Homepage Titel: ");
define("_MD_WFD_REQUIREMENTS", "System Voraussetzung:");
define("_MD_WFD_FEATURES", "Funktionen:");
define("_MD_WFD_HISTORY", "Download History:");
define("_MD_WFD_PRICEC", "Preis:");
define("_MD_WFD_SCREENSHOT", "Screenshot 1:");
define("_MD_WFD_SCREENSHOT2", "Screenshot 2:");
define("_MD_WFD_SCREENSHOT3", "Screenshot 3:");
define("_MD_WFD_SCREENSHOT4", "Screenshot 4:");
define("_MD_WFD_SCREENSHOTCLICK", "Vollbildanzeige");
define("_MD_WFD_OTHERBYUID", "Andere Dateien von: ");
define("_MD_WFD_DOWNTIMES", "Downloaddauer: ");
define("_MD_WFD_MAINTOTAL", "Dateien gesamt: ");
define("_MD_WFD_DOWNLOADNOW", "Jetzt Downloaden");
define("_MD_WFD_PAGES", "Seiten");
define("_MD_WFD_REVIEWER", "Kritiker");
define("_MD_WFD_RATEDRESOURCE", "Rezensionswertung");
define("_MD_WFD_SUBMITTER", "Eingesendet von");
define("_MD_WFD_REVIEWTITLE", "Rezension schreiben");
define("_MD_WFD_REVIEWTOTAL", "<b>Rezensionen insgesamt:</b> %s");
define("_MD_WFD_USERREVIEWSTITLE", "Userbewertungen");
define("_MD_WFD_USERREVIEWS", "Lese Userbewertungen auf %s");
define("_MD_WFD_NOUSERREVIEWS", "Erster sein der %s rezensiert.");
define("_MD_WFD_ERROR", "Datenbankupdate-Fehler: Information konnte nicht gesichert werden");
define("_MD_WFD_COPYRIGHT", "Copyright");
define("_MD_WFD_INFORUM", "Im Forum diskutieren");

//added frankblack

/*
* submit.php
*/
define("_MD_WFD_NOTALLOWESTOSUBMIT","Keine Berechtigung zum &Uuml;bertragen von Dateien");
define("_MD_WFD_INFONOSAVEDB","Information wurde nicht in die Datenbank &uuml;bernommen: <br /><br />");
define("_MD_WFD_NOTALLOWEDTOMOD","Du hast nicht Erlaubniss dieses Download zu ver&auml;ndern");
/*
* review.php
*/
define("_MD_WFD_ERROR_CREATCHANNEL","Erst Channel erstellen");
define("_MD_WFD_REVIEW_CATPATH", "Kategorie Path:");
define("_MD_WFD_ADDREVIEW", "Bericht hinzuf&uuml;gen");

//
define("_MD_WFD_NEWLAST","Neu eingegangen vor der letzten Woche");
define("_MD_WFD_NEWTHIS","Neu eingegangen diese Woche");
define("_MD_WFD_THREE","Neu eingegenagen innerhalb der letzten drei Tage");
define("_MD_WFD_TODAY","Heute neu eingegangen");
define("_MD_WFD_NO_FILES","Noch keine Dateien");

/*
* mirror.php
*/
define("_MD_WFD_MIRROR_AVAILABLE", "Verf&uuml;gbare Mirrors:");
define("_MD_WFD_MIRROR_CATPATH", "Kategorie Path:");
define("_MD_WFD_MIRROR_FILENAME", "Dateiname:");
define("_MD_WFD_DOWNLOADMIRRORS", "Download Mirrors");
define("_MD_WFD_MIRROR_NOTALLOWESTOSUBMIT", "Du hast keine Zugriffsrechte Mirrors zu ben&uuml;tzen");
define("_MD_WFD_MIRRORS", "Download Mirrors:");
define("_MD_WFD_USERMIRRORSTITLE", "Verf&uuml;gbare Download Mirrors");
define("_MD_WFD_USERMIRRORS", "Anzeige der verf&uuml;gbaren Download Mirrors bei %s");
define("_MD_WFD_NOUSERMIRRORS", "Hinzuf&uuml;gen eines neuen Download Mirror bei %s.");
define("_MD_WFD_TOTALMIRRORS", "Alle verf&uuml;gbaren Mirrors:");
define("_MD_WFD_ADDMIRROR", "Mirror hinzuf&ouml;gen");
define("_MD_WFD_MIRROR_TOTAL", "<b>Alle Mirrors:</b> %s");
define("_MD_WFD_MIRROR_HOMEURLTITLE", "Homepage Titel:");
define("_MD_WFD_MIRROR_HOMEURL", "Homepage URL:<br /><br />Eingabe deiner Homepage URL.");
define("_MD_WFD_MIRROR_UPLOADMIRRORIMAGE", "Upload Seitenlogo:<br /><br />Ein kleines Bild als Hinweis auf eine Webseite.");
define("_MD_WFD_MIRROR_MIRRORIMAGE", "Logo deiner Webseite:");
define("_MD_WFD_MIRROR_CONTINENT", "Kontinent:");
define("_MD_WFD_MIRROR_LOCATION", "Herkunftsort:<br /><br />Beispiel: Berlin, GE");
define("_MD_WFD_MIRROR_DOWNURL", "Download URL:<br /><br />Enter the url to the file.");
define("_MD_WFD_MIRROR_SUBMITMIRROR", "&Uuml;bertragen an den Mirror");
define("_MD_WFD_ERROR_CREATEMIRROR", "Fehler beim erstellen des Mirror");
define("_MD_WFD_MIRROR_SNEWMNAMEDESC", "
Bitte f&uuml;lle das untenstehente Formular komplett gewissenhaft aus und wir f&uuml;gen deinen Mirror so bald als m&ouml;glich dazu.<br /><br />
Thank you for your assistance in providing another location to download these files. We want to give our users a possibility to find quality software faster.<br /><br />All mirror submissions will be reviewed by one of our webmasters before they are put up on the web site.
");
define("_MD_WFD_MIRROR_HHOST", "Host");
define("_MD_WFD_MIRROR_HLOCATION", "Land");
define("_MD_WFD_MIRROR_HCONTINENT", "Kontinent");
define("_MD_WFD_MIRROR_HDOWNLOAD", "Download");
define("_MD_WFD_MIRROR_OFFLINE", "Server-Host ist Offline.");
define("_MD_WFD_MIRROR_ONLINE", "Server-Host ist Online.");
define("_MD_WFD_MIRROR_DISABLED", "Server-Host &Uuml;berpr&uuml;fung abgeschaltet.");
/*
* continents (used in mirrors page)
*/
define("_MD_WFD_CONT1","Africa");
define("_MD_WFD_CONT2","Antarctica");
define("_MD_WFD_CONT3","Asia");
define("_MD_WFD_CONT4","Europe");
define("_MD_WFD_CONT5","North America");
define("_MD_WFD_CONT6","South America");
define("_MD_WFD_CONT7","Oceania");


define("_MD_WFD_ADMIN_PAGE",":: Administrativer Bereich ::");
define("_MD_WFD_DOWNLOADS_LIST","Download Liste (%s)");
define("_MD_WFD_NEWDOWNLOADS_ALL","Alle");
define("_MD_WFD_NEWDOWNLOADS_INTHELAST","In den letzten %s Tagen");
define("_MD_WFD_DOWNLOAD_MOST_POPULAR","Popul&auml;rste Downloads");
define("_MD_WFD_DOWNLOAD_MOST_RATED","Am besten Bewertete Downloads");


// added - start - March 4 2006 - jpc
define("_MD_WFD_FFS_SUBMITCATEGORYHEAD", "Zu welcher Kategorie willst Du Dateien &Uuml;bertragen?");
define("_MD_WFD_FFS_DOWNLOADDETAILS", "Download Details:");
define("_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS", "Anwenderspezifische Details:");
define("_MD_WFD_FFS_BACK", "Zur&uuml;ck");
define("_MD_WFD_FFS_DOWNLOADTITLE", "&Uuml;bertragen in '{category}' Datei.");
// added - end - March 4 2006 - jpc
?>