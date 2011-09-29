<?php
/**
 * $Id: modinfo.php,v 1.12 2007/03/31 16:42:01 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

// Module Info
// The name of this module
define('_MI_WFD_NAME', 'WF-Downloads');

// A brief description of this module
define('_MI_WFD_DESC', 'Opretter en download sektion, hvor brugerne kan downloade/indsende og bed�mme forskellige filer ');

// Names of blocks for this module (Not all module has blocks)
define('_MI_WFD_BNAME1', 'Nye WF-Downloads');
define('_MI_WFD_BNAME2', 'Mest hentet');

// Sub menu titles
define('_MI_WFD_SMNAME1', 'Indsend');
define('_MI_WFD_SMNAME2', 'Popul�r');
define('_MI_WFD_SMNAME3', 'H�jst vurderet');

// Names of admin menu items
define('_MI_WFD_BINDEX', 'Index');
define('_MI_WFD_INDEXPAGE', 'Index  indstillinger');
define('_MI_WFD_MCATEGORY', 'Kategorier');
define('_MI_WFD_MDOWNLOADS', 'Filer');
define('_MI_WFD_REVIEWS', 'Bed�mmelser');
define('_MI_WFD_MUPLOADS', 'Billed upload');
define('_MI_WFD_MMIMETYPES', 'Fil-typer');
define('_MI_WFD_PERMISSIONS', 'Rettigheder');
define('_MI_WFD_MVOTEDATA', 'Stemmer');
define('_MI_WFD_MMIRRORS', 'Mirrors');

// Title of config items
define('_MI_WFD_POPULAR', 'Popul�r antal');
define('_MI_WFD_POPULARDSC', 'Antallet af downloads f�r status p� en fil bliver popul�r');

//Display Icons
define('_MI_WFD_ICONDISPLAY', 'Popul�r og nye downloads:');
define('_MI_WFD_DISPLAYICONDSC', 'V�lg hvordan de popul�rer og nye downloads skal vises');
define('_MI_WFD_DISPLAYICON1', 'Vis som ikon');
define('_MI_WFD_DISPLAYICON2', 'Vis som tekst');
define('_MI_WFD_DISPLAYICON3', 'Vis ikke');

define('_MI_WFD_DAYSNEW', 'Nye downloads:');
define('_MI_WFD_DAYSNEWDSC', 'Antallet af dage et download betragtes som nyt');
define('_MI_WFD_DAYSUPDATED', 'Opdaterede downloads:');
define('_MI_WFD_DAYSUPDATEDDSC', 'Antallet af dage et opdateret download markes med opdateret.');

define('_MI_WFD_PERPAGE', 'Antal downloads');
define('_MI_WFD_PERPAGEDSC', 'Antallet af downloads der vises i hver kategori');

define('_MI_WFD_TEMPLATESET', 'V�lg skabelon s�t');
define('_MI_WFD_TEMPLATESETDSC', 'V�lg skabelon s�t til dit modul.<br />Kan hj�lpe dig med at v�lge hvordan dine downloads vises');
define('_MI_WFD_TEMPLATESET1', 'Standard');
define('_MI_WFD_TEMPLATESET2', 'Professionel');

define('_MI_WFD_USESHOTS', 'Vis screenshot billeder?');
define('_MI_WFD_USESHOTSDSC', 'V�lg Ja vor at vise screenshot billeder ved hvert download');
define('_MI_WFD_SHOTWIDTH', 'Billed bredde');
define('_MI_WFD_SHOTWIDTHDSC', 'Billed bredde p� screenshot');
define('_MI_WFD_SHOTHEIGHT', 'Billed h�jde');
define('_MI_WFD_SHOTHEIGHTDSC', 'Billed h�jde p� screenshot');
define('_MI_WFD_CHECKHOST', 'Forhindre direkte download link? (leeching)');
define('_MI_WFD_REFERERS', 'Disse sider kan lave direkte link til dine filer<br /> adskil med |');

define('_MI_WFD_CAT_IMGWIDTH', 'Kategori billed bredde');
define('_MI_WFD_CAT_IMGWIDTHDSC', 'Bredden p� kategori billedet');
define('_MI_WFD_CAT_IMGHEIGHT', 'Kategori billed h�jde');
define('_MI_WFD_CAT_IMGHEIGHTDSC', 'H�jden p� kategori billedet');

define('_MI_WFD_ANONPOST', 'Anonyme bruger indsendelse:');
define('_MI_WFD_ANONPOSTDSC', 'Tillad anonyme brugere at indsende nye downloads/mirrors p� din side?');
define('_MI_WFD_ANONPOST1', 'Ingen');
define('_MI_WFD_ANONPOST2', 'Kun download');
define('_MI_WFD_ANONPOST3', 'Kun mirror');
define('_MI_WFD_ANONPOST4', 'Begge');

define('_MI_WFD_AUTOAPPROVE', 'Auto godkend indsendte downloads/mirrors');
define('_MI_WFD_AUTOAPPROVEDSC', 'V�lg for at godkende downloads/mirrors uden validering.');
define('_MI_WFD_AUTOAPPROVE1', 'Ingen');
define('_MI_WFD_AUTOAPPROVE2', 'Kun download');
define('_MI_WFD_AUTOAPPROVE3', 'Kun mirror');
define('_MI_WFD_AUTOAPPROVE4', 'Begge');

define('_MI_WFD_REVIEWAPPROVE', 'Auto godkend indsendte bed�mmelser');
define('_MI_WFD_REVIEWAPPROVEDSC', 'V�lg for at godkende indsendte bed�mmelser uden validering.');
define('_MI_WFD_REVIEWANONPOST', 'Anonyme bruger bed�mmelser:');
define('_MI_WFD_REVIEWANONPOSTDSC', 'Tillad anonyme brugere at indsende ny bed�mmelser til din side?');

define('_MI_WFD_MAXFILESIZE', 'Upload St�rrelse (KB)');
define('_MI_WFD_MAXFILESIZEDSC', 'Maksimal tilladte st�rrelse ved upload');
define('_MI_WFD_IMGWIDTH', 'Upload billed bredde');
define('_MI_WFD_IMGWIDTHDSC', 'Maksimal tilladte billed bredde ved billed upload');
define('_MI_WFD_IMGHEIGHT', 'Upload billed h�jde');
define('_MI_WFD_IMGHEIGHTDSC', 'Maksimal tilladte billed h�jde ved billed upload');

define('_MI_WFD_AUTOSUMMARY', 'Sl� auto resum� til');
define('_MI_WFD_AUTOSUMMARYDESC', 'Opretter automatisk et resum� baseret p� antallet af karakterer defineret');
define('_MI_WFD_AUTOSUMMARYLENGTH', 'Resum� l�ngde');
define('_MI_WFD_AUTOSUMMARYLENGTHDESC', 'Det maksimale antal af karakterer vist i resum�');

define('_MI_WFD_UPLOADDIR', 'Upload bibliotek (Ingen slash til sidst)');
define('_MI_WFD_UPLOADDIRDSC', 'Upload bibliotek  *SKAL* v�re den absolutte sti!');

define('_MI_WFD_ENABLERSS', 'RSS Feeds:');
define('_MI_WFD_ENABLERSSDSC', 'V�lg ja for at sl� RSS Feeds til.');

define('_MI_WFD_DOWNLOADMINPOSTS', 'Minimum antal poster for at kunne downloade');
define('_MI_WFD_DOWNLOADMINPOSTSDSC', 'Indtast det minimale antal poster der kr�ves for at kunne downloade en fil.');
define('_MI_WFD_UPLOADMINPOSTS', 'Minimum antal poster for at kunne uploade');
define('_MI_WFD_UPLOADMINPOSTSDSC', 'Indtast det minimale antal poster der kr�ves for at kunne uploade');

define('_MI_WFD_ALLOWSUBMISS', 'Bruger indl�g:');
define('_MI_WFD_ALLOWSUBMISSDSC', 'Tillad bruger at indsende nye downloads/mirrors');
define('_MI_WFD_ALLOWSUBMISS1', 'Ingen');
define('_MI_WFD_ALLOWSUBMISS2', 'Kun download');
define('_MI_WFD_ALLOWSUBMISS3', 'Kun mirrors');
define('_MI_WFD_ALLOWSUBMISS4', 'Begge');
define('_MI_WFD_ALLOWUPLOADS', 'Bruger upload:');
define('_MI_WFD_ALLOWUPLOADSDSC', 'Tillad brugere at uploade filer direkte til din side.<br />G�lder b�de filer og billeder!');
define('_MI_WFD_ALLOWUPLOADSGROUP', 'Indsend uploads:');
define('_MI_WFD_ALLOWUPLOADSGROUPDSC', 'V�lg de grupper der kan uploade filer.<br />G�lder b�de filer og screenshots!');
define('_MI_WFD_SCREENSHOTS', 'Bibliotek til Screenshots');
define('_MI_WFD_CATEGORYIMG', 'Bibliotek til Kategori billeder');
define('_MI_WFD_MAINIMGDIR', 'Hovedbibliotek til billeder.');
define('_MI_WFD_USETHUMBS', 'Brug frim�rker:');
define('_MI_WFD_USETHUMBSDSC', 'F�lgende filtyper underst�ttes: JPG, GIF, PNG.<div style=\'padding-top: 8px;\'>WF-Downloads vil bruge frim�rker for billeder (kategori og screenshots). s�t til  \'Nej\' for at bruge det originale billed, hvis serveren ikke underst�tter funktionen.</div>');
define('_MI_WFD_DATEFORMAT', 'Tidsstempel:');
define('_MI_WFD_DATEFORMATDSC', 'Default Timestamp i WF-Downloads:');
define('_MI_WFD_SHOWDISCLAIMER', 'Vis ansvarsfraskrivelse f�r bruger indl�g?');
define('_MI_WFD_SHOWDOWNDISCL', 'Vis ansvarsfraskrivelse f�r bruger download?');
define('_MI_WFD_DISCLAIMER', 'Skriv tekste p� ansvarsfraskrivelse ved indl�g:');
define('_MI_WFD_DOWNDISCLAIMER', 'Skriv teksten p� ansvarsfraskrivels ved download:');
define('_MI_WFD_PLATFORM', 'Angiv platform:');
define('_MI_WFD_SUBCATS', 'Underkategori');
define('_MI_WFD_VERSIONTYPES', 'Versions status:');
define('_MI_WFD_LICENSE', 'Angiv licens;');
define('_MI_WFD_LIMITS', 'Angiv begr�nsninger:');
define('_MI_WFD_MAXSHOTS', 'V�lg det maksimale antal af screenshots:');
define('_MI_WFD_MAXSHOTSDSC', 'Angiver det maksimale antal af tilladte screenshots ved upload.');

define('_MI_WFD_SUBMITART', 'Indsend download:');
define('_MI_WFD_SUBMITARTDSC', 'V�lg grupper der kan indsende nye download.<br />Webmaster har denne rettighed automatisk!');

define('_MI_WFD_IMGUPDATE', 'Opdat�r frim�rker?');
define('_MI_WFD_IMGUPDATEDSC', 'Hvis valgt vil frim�rker blive opdateret hver gang siden indl�ses, ellers vil det f�rste frim�rke blive vist uanset hvad. <br /><br />');
define('_MI_WFD_QUALITY', 'Frim�rke kvalitet');
define('_MI_WFD_QUALITYDSC', 'Lavest: 0 H�jest: 100');
define('_MI_WFD_KEEPASPECT', 'Fastl�s st�rrelsesforhold?');
define('_MI_WFD_KEEPASPECTDSC', '');
define('_MI_WFD_ADMINPAGE', 'Administration fil visning:');
define('_MI_WFD_AMDMINPAGEDSC', 'Antallet af nye filer vist p� modul administrations siden');
define('_MI_WFD_ARTICLESSORT', 'Default download sortering');
define('_MI_WFD_ARTICLESSORTDSC', 'V�lg standard sortering for downloads');
define('_MI_WFD_TITLE', 'Titel');
define('_MI_WFD_RATING', 'Bed�mmelse');
define('_MI_WFD_WEIGHT', 'V�gt');
define('_MI_WFD_POPULARITY', 'Popularitet');
define('_MI_WFD_SUBMITTED2', 'Indsendt dato');
define('_MI_WFD_COPYRIGHT', 'Copyright bem�rkning:');
define('_MI_WFD_COPYRIGHTDSC', 'Vis copyright bem�rkning p� downloadsiden.');

// Description of each config items
define('_MI_WFD_PLATFORMDSC', 'List platforme <br />Adskil med | VIGTIGT: Lad v�re med at �ndre dette n�r siden er �ben, Tilf�j nye i slutningen!');
define('_MI_WFD_SUBCATSDSC', 'V�lg Ja for at vise underkategorier. V�lg Nej for at skjule underkategorier.');
define('_MI_WFD_LICENSEDSC', 'List platforme <br />Adskil med |');

// Text for notifications
define('_MI_WFD_GLOBAL_NOTIFY', 'Global');
define('_MI_WFD_GLOBAL_NOTIFYDSC', 'Global downloads notifikations muligheder.');

define('_MI_WFD_CATEGORY_NOTIFY', 'Kategori');
define('_MI_WFD_CATEGORY_NOTIFYDSC', 'Orienteringsmuligheder i den aktuelle fil kategori');

define('_MI_WFD_FILE_NOTIFY', 'Fil');
define('_MI_WFD_FILE_NOTIFYDSC', 'Orienteringsmuligheder om denne fil.');

define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFY', 'Ny kategori');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Orienteringsmuligheder ved ny fil kategori');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Modtag orientering n�r en ny fil oprettes.');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orientering: Ny filkategori');                              

define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFY', 'Redig�r fil �nsker');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYCAP', 'Orient�r mig ved alle fil redigereinger.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYDSC', 'Modtag orientering ved alle fil �ndringer er indsendt.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orientering: �nske om filredigering');

define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFY', 'Brudte filer indsendt.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYCAP', 'Orient�r mig ved alle brudte filer.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYDSC', 'Modtag en orientering n�r en brudt fil rapporteres.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orientering : Brudt fil rapporteret.');

define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFY', 'Fil indsendt');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYCAP', 'Orient�r mig n�r en ny fil er indsendt (og afventer godkendelse)');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYDSC', 'Modtag orientering n�r en ny fil er indsendt og afventer godkendelse');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orientering : Nt fil indsendt');

define('_MI_WFD_GLOBAL_NEWFILE_NOTIFY', 'New Fil');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYCAP', 'Orient�r mig n�r nye filer er indsendt.');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYDSC', 'Modtag orientering n�r der er indsendt nye filer.');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orientering : Ny fil');

define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFY', 'Fil Indsendt');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Orient�r mig n�r en ny fil er indsendt (og afventer godkendelse) i den aktuelle kategori.');   
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Modtag orientering n�r en ny fil er indsendt (og afventer godkendelse) i den aktuelle kategori.');      
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orientering : Ny fil indsendt i kategori'); 

define('_MI_WFD_CATEGORY_NEWFILE_NOTIFY', 'New Fil');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYCAP', 'Orient�r mig n�r en fil offentligg�res i denne kategori.');   
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYDSC', 'Modtag orientering n�r en ny fil er offentliggjort i denne kategori.');      
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orientering : Ny fil i kategori'); 

define('_MI_WFD_FILE_APPROVE_NOTIFY', 'Fil Godkendelse');
define('_MI_WFD_FILE_APPROVE_NOTIFYCAP', 'Orient�r mig n�r en fil er godkendt	.');
define('_MI_WFD_FILE_APPROVE_NOTIFYDSC', 'Modtag orientering n�r en fil er godkendt	.');
define('_MI_WFD_FILE_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orientering : Fil Godkendt');

/* Added by Lankford on 2007/3/21 */
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFY', 'Fil Redigeret');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYCAP', 'Orient�r mig n�r en fil er redigeret.	.');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYDSC', 'Modtag orientering n�r en fil er redigeret.');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orientering : Fil Redigeret');

define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFY', 'Fil Redigeret');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYCAP', 'Orient�r mig n�r en fil i denne kategori er redigeret.');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYDSC', 'Modtag orientering n�r en fil i denne kategori er redigeret..');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orientering : Fil Redigeret');

define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFY', 'Fil Redigeret');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYCAP', 'Orient�r mig n�r en hvilken som helst fil er redigeret.');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYDSC', 'Modtag orientering n�r en fil er redigeret.');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-orientering : Fil Redigeret');
/* End add block */

define('_MI_WFD_AUTHOR_INFO', 'Udvikler Information	');
define('_MI_WFD_AUTHOR_NAME', 'Udvikler');
define('_MI_WFD_AUTHOR_DEVTEAM', 'Udvikler team');
define('_MI_WFD_AUTHOR_WEBSITE', 'Udviklers hjemmeside	');
define('_MI_WFD_AUTHOR_EMAIL', 'Udviklers email');
define('_MI_WFD_AUTHOR_CREDITS', 'Tak til');
define('_MI_WFD_MODULE_INFO', 'Modul udviklings information');
define('_MI_WFD_MODULE_STATUS', 'Udviklings status');
define('_MI_WFD_MODULE_DEMO', 'Demo side');
define('_MI_WFD_MODULE_SUPPORT', 'Officiel support side');
define('_MI_WFD_MODULE_BUG', 'Inform�r om fejl i dette modul');
define('_MI_WFD_MODULE_FEATURE', 'Kom med foreslag til dette modul');
define('_MI_WFD_MODULE_DISCLAIMER', 'Ansvarsfraskrivelse');
define('_MI_WFD_RELEASE', 'Udgivelses dato: ');

define('_MI_WFD_MODULE_MAILLIST', 'SmartFactory Mailingliste');

define('_MI_WFD_MODULE_MAILANNOUNCEMENTS', 'Meddelelses Mailingliste');
define('_MI_WFD_MODULE_MAILBUGS', 'Fejl Mailingliste');
define('_MI_WFD_MODULE_MAILFEATURES', 'Egenskaber Mailingliste');

define('_MI_WFD_MODULE_MAILANNOUNCEMENTSDSC', 'F� de sidste nyheder fra SmartFactory.');
define('_MI_WFD_MODULE_MAILBUGSDSC', 'Fejls�gning og indl�gs mailingliste');
define('_MI_WFD_MODULE_MAILFEATURESDSC', 'Forslag til �ndringer mailingliste.');

define('_MI_WFD_WARNINGTEXT', 'THE SOFTWARE IS PROVIDED BY SMARTFACTORY \"AS IS\" AND \"WITH ALL FAULTS.\"
SMARTFACTORY MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, SMARTFACTORY MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN SMARTFACTORY WEBSITE. IN NO
EVENT WILL SMARTFACTORY BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
SMARTFACTORY HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..');

define('_MI_WFD_AUTHOR_CREDITSTEXT', 'The SmartFactory Team would like to thank the following people for their help and support during the development phase of this module:<br /><br />tom, mking, paco1969, mharoun, Talis, m0nty, steenlnielsen, Clubby, Geronimo, bd_csmc, herko, LANG, Stewdio, tedsmith, veggieryan, carnuke, MadFish, Kiang<br />and anyone else who has contributed to either directly or indirectly.');
define('_MI_WFD_AUTHOR_BUGFIXES', 'Tidliger fejlrettelser');

define('_MI_WFD_COPYRIGHTIMAGE', 'Billederne WF-Project/SmartFactory er beskyttet af copyright og m� kun benyttes med tilladelse');

// mirror defines
define('_MI_WFD_MIRROR_USEIMAGES', 'Vis mirror log?'); // not implemented yet
define('_MI_WFD_MIRROR_USEIMAGESDSC', 'V�lg Ja for at vise logo for hvert mirror'); // not implemented yet
define('_MI_WFD_MIRROR_IMGWIDTH', 'Logo bredde'); // not implemented yet
define('_MI_WFD_MIRROR_IMGWIDTHDSC', 'Vis bredden for mirror logo'); // not implemented yet
define('_MI_WFD_MIRROR_IMGHEIGHT', 'Logo h�jde'); // not implemented yet
define('_MI_WFD_MIRROR_IMGHEIGHTDSC', 'Vis h�jden for mirror logo'); // not implemented yet
define('_MI_WFD_MIRROR_AUTOAPPROVE', 'Autogodkend indsendte mirrors');
define('_MI_WFD_MIRROR_AUTOAPPROVEDSC', 'V�lg for at godkende mirrors uden godkendelse.');

define('_MI_WFD_MIRROR_MAXIMGWIDTH', 'Upload logo bredde'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGWIDTHDSC', 'Maksimal bredde p� logo der uploades.'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGHEIGHT', 'Upload logo h�jde'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGHEIGHTDSC', 'Maksimal h�jde p� logo der uploades.'); // not implemented yet

define('_MI_WFD_MIRROR_ENABLE', 'Aktiv�r mirror system');
define('_MI_WFD_MIRROR_ENABLEDSC', '');
define('_MI_WFD_MIRROR_ENABLEONCHK', 'Aktiv�r check for server status.');
define('_MI_WFD_MIRROR_ENABLEONCHKDSC', 'Aktiverer check p� mirrors<br />Denne kan g�re din side langsommere hvis du har mange mirrors');
define('_MI_WFD_MIRROR_ALLOWSUBMISS', 'Indsendelse af mirror fra bruger');
define('_MI_WFD_MIRROR_ALLOWSUBMISSDSC', 'Tillad brugere at indsende nye mirrors');
define('_MI_WFD_MIRROR_MIRRORIMAGES', 'Mirror logo upload bibliotek'); // not implemented yet
define('_MI_WFD_MIRROR_MIRRORIMAGESDSC', 'Mirror logo upload bibliotek'); // not implemented yet
?>
