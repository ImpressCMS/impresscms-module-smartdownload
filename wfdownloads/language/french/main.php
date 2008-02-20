<?php

/**
 * $Id: main.php,v 1.4 2007/04/22 20:32:00 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

//Todo - Still to remove redundat defines from this area.
define("_MD_WFD_NODOWNLOAD", "Ce t�l�chargement n'existe pas!");
define("_MD_WFD_DOWNLOADMINPOSTS", "Vous devez augmenter vos points de t�l�chargement<br />avant de pouvoir t�l�charger des fichiers");
define("_MD_WFD_UPLOADMINPOSTS", "Vous devez augmenter vos points de t�l�chargement<br />avant de pouvoir t�l�verser des fichiers");

define("_MD_WFD_SUBCATLISTING", "Liste des cat�gories");
define("_MD_WFD_ISADMINNOTICE", "Administrateur : Il y a un probl�me avec cette image.");
define("_MD_WFD_THANKSFORINFO","Merci pour l'information. Nous allons examiner votre demande rapidement.");
define("_MD_WFD_ISAPPROVED", "Merci pour votre proposition. Votre demande a �t� approuv�e et va maintenant appara�tre sur le site.");
define("_MD_WFD_THANKSFORHELP","Merci de nous aider &agrave; maintenir ce r&eacute;pertoire en ordre.");
define("_MD_WFD_FORSECURITY","Pour des raisons de s&eacute;curit&eacute; votre pseudo et votre adresse IP seront temporairement enregistr&eacute;e.");
define("_MD_WFD_NOPERMISETOLINK", "Ce fichier n'appartient pas au site d'o&ugrave; vous &ecirc;tes venus.<br /><br />Merci d'envoyer un e-mail &agrave; l'administrateur du site web d'o&ugrave; vous &ecirc; venus et de lui dire :<br /><b>PAS D'APPROPRIATION DE LIENS PROVENANTS D'AUTRES SITES !! (LEECH)</b><br /><br /><b>Definition d'un Leecher :</b> Quelqu'un qui est paresseux pour lier sur son propre serveur ou vole le dur travail fait par d'autres personnes et le fait passer pour le sein<br /><br />Vous avez &eacute;t&eacute; <b>Enregistr&eacute;</b>.");
define("_MD_WFD_SUMMARY", "Sommaire<br /><br /><span style='font-weight: normal;'>Entr&nbsp;e optionnelle<br />Un sommaire sera cr�� si laiss� vide</span>");
define("_MD_WFD_DESCRIPTION","Description");
define("_MD_WFD_SUBMITCATHEAD","Formulaire de soumission");
define("_MD_WFD_MAIN","T&eacute;l&eacute;chargements");
define("_MD_WFD_POPULAR","Populaire");
define("_MD_WFD_NEWTHISWEEK","Nouveau cette semaine");
define("_MD_WFD_UPTHISWEEK","Mis &agrave; jour cette semaine");
define("_MD_WFD_POPULARITYLTOM","Popularit&eacute; (du - au + t&eacute;l&eacute;charg&eacute;)");
define("_MD_WFD_POPULARITYMTOL", "Popularit� (Du plus vers le moins)");
define("_MD_WFD_TITLEATOZ","Titre (A &agrave; Z)");
define("_MD_WFD_TITLEZTOA","Titre (Z &agrave; A)");
define("_MD_WFD_DATEOLD","Date (Les plus anciens en premier)");
define("_MD_WFD_DATENEW","Date (Les plus r&eacute;cents en premier)");
define("_MD_WFD_RATINGLTOH","Notation (du - au + haut score)");
define("_MD_WFD_RATINGHTOL","Notation (du + au - haut score)");
define("_MD_WFD_DESCRIPTIONC","Description :&nbsp;");
define("_MD_WFD_CATEGORYC","Cat&eacute;gorie :&nbsp;");
define("_MD_WFD_VERSION","Version");
define("_MD_WFD_SUBMITDATE","Propos� le ");
define("_MD_WFD_DLTIMES","T&eacute;l&eacute;charg&eacute; %s fois");
define("_MD_WFD_FILESIZE","Taille du Fichier (en Octets)");
define("_MD_WFD_SUPPORTEDPLAT","Plateformes Support&eacute;es");
define("_MD_WFD_HOMEPAGE","Site web pour le support");
define("_MD_WFD_PUBLISHERC", "Editeur: ");
define("_MD_WFD_RATINGC","Note :&nbsp;");
define("_MD_WFD_ONEVOTE","1 vote");
define("_MD_WFD_NUMVOTES","%s votes");
define("_MD_WFD_RATETHISFILE","Noter ce Fichier");
define("_MD_WFD_REVIEWTHISFILE", "R�viser une ressource");
define("_MD_WFD_REVIEWS", "R�visions :");
define("_MD_WFD_DOWNLOADHITS", "T�l�chargements : ");
define("_MD_WFD_MODIFY","Modifier");
define("_MD_WFD_REPORTBROKEN","Rapport de Fichier Bris&eacute;");
define("_MD_WFD_BROKENREPORT", "Rappoteez une ressource sans lien");
define("_MD_WFD_SUBMITBROKEN", "Proposez");
define("_MD_WFD_BEFORESUBMIT", "Avant de proposer une notification de liens bris�s, merci de vous assurer que le fichier que vous tentez de rapporter comme bris�e n'est r�ellement plus disponible.");
define("_MD_WFD_TELLAFRIEND","En parler &agrave; un(e) ami(e)");
define("_MD_WFD_EDIT","Editer");
define("_MD_WFD_THEREARE", "Il y a %s <i>Cat�gories</i> et %s <i>t�l�chargements</i> list�s");
define("_MD_WFD_THEREIS", "Il y a %s <i>Cat�gorie</i> et %s <i>T�l�chargements</i> list�s");
define("_MD_WFD_LATESTLIST","Nouveaut&eacute;s");
define("_MD_WFD_FILETITLE","Titre du T&eacute;l&eacute;chargement :&nbsp;");
define("_MD_WFD_DLURL", "URL de t�l�chargement: ");
define("_MD_WFD_UPLOAD_FILENAME", "Fichier local: ");
define("_MD_WFD_UPLOAD_FILETYPE", "Type de fichier: ");
define("_MD_WFD_HOMEPAGEC","Site Web pour le support : ");
define("_MD_WFD_UPLOAD_FILEC", "Chargez le fichier: ");
define("_MD_WFD_VERSIONC","Version :&nbsp;");
define("_MD_WFD_FILESIZEC","Taille du Fichier (en Octets) :&nbsp;");
define("_MD_WFD_NUMBYTES","%s octets");
define("_MD_WFD_PLATFORMC","Plateformes Support&eacute;es : ");
define("_MD_WFD_PRICE", "Prix");
define("_MD_WFD_LIMITS", "Restrictions");
define("_MD_WFD_DOWNLICENSE", "License");
define("_MD_WFD_NOTSPECIFIED", "N/D");
define("_MD_WFD_MIRRORSITE", "T�l�chargement Miroir");
define("_MD_WFD_MIRROR", "Site miroir");
define("_MD_WFD_PUBLISHER", "Editeur");
define("_MD_WFD_UPDATEDON", "Mis � jour le");
define("_MD_WFD_PRICEFREE", "Libre");
define("_MD_WFD_VIEWDETAILS", "� Plus de d&eacute;tails");
define("_MD_WFD_OPTIONS", 'Options :&nbsp;');
define("_MD_WFD_NOTIFYAPPROVE", 'Notifiez-moi quand ce fichier est approuv&eacute;');
define("_MD_WFD_VOTEAPPRE","Votre vote est appr&eacute;ci&eacute;.");
define("_MD_WFD_THANKYOU","Merci de prendre le temps pour noter un fichier ici sur %s"); // %s is your site name
define("_MD_WFD_VOTEONCE","Merci de ne pas voter pour la m&ecirc;me ressource plus d'une fois.");
define("_MD_WFD_RATINGSCALE","L'&eacute;chelle est 1 - 10, avec 1 &eacute;tant faible et 10 &eacute;tant excellent.");
define("_MD_WFD_BEOBJECTIVE","Merci d'&ecirc;tre objectif, si tous re&ccedil;oivent un 1 ou un 10, les notations ne sont pas tr&egrave;s utiles.");
define("_MD_WFD_DONOTVOTE","Ne votez pas pour vos propres ressources.");
define("_MD_WFD_RATEIT","Noter &ccedil;a !");
define("_MD_WFD_INTFILEFOUND","Voici un fichier int�ressant sur %s"); // mail - %s is your site name
define("_MD_WFD_RANK","Classement");
define("_MD_WFD_CATEGORY","Cat&eacute;gorie");
define("_MD_WFD_HITS","Hits");
define("_MD_WFD_RATING","Note");
define("_MD_WFD_VOTE","Vote");
define("_MD_WFD_SORTBY","Tri&eacute; par :");
define("_MD_WFD_TITLE","Titre");
define("_MD_WFD_DATE","Date");
define("_MD_WFD_POPULARITY","Popularit&eacute;");
define("_MD_WFD_TOPRATED", "Notation");
define("_MD_WFD_CURSORTBY","Fichiers actuellement tri&eacute;s par : %s");
define("_MD_WFD_CANCEL","Annuler");
define("_MD_WFD_ALREADYREPORTED","Vous avez d&eacute;j&agrave; soumis un rapport de fichier bris&eacute; pour cette ressource.");
define("_MD_WFD_MUSTREGFIRST","D&eacute;sol&eacute;, vous n'avez pas la permission d'ex&eacute;cuter cette action.<br />Merci de vous enregistrer ou connecter en premier !");
define("_MD_WFD_NORATING", "Pas de note choisie.");
define("_MD_WFD_CANTVOTEOWN", "Vous ne pouvez pas voter pour un fichier que vous avez proposez.<br />Tous les votes sont enregistr�s et v�rifi�s.");
define("_MD_WFD_SUBMITDOWNLOAD", "Proposez un t�l�chargement");
define("_MD_WFD_SUB_SNEWMNAMEDESC", "<ul><li>Tous les nouveaux t&eacute;l&eacute;chargements sont sujets � validation. Cela peut prendre jusqu'� 24 heures avant qu'ils n'apparaissent dans nos listes.</li><li>Nous nous r�servons le droit de refuser toute proposition ou changement de contenu.</li></ul>");
define("_MD_WFD_MAINLISTING", "Fichiers et cat&eacute;gories de premier niveau");
define("_MD_WFD_LASTWEEK", "La semaine derni�re ");
define("_MD_WFD_LAST30DAYS", "Les 30 derniers jours ");
define("_MD_WFD_1WEEK", "1 semaine");
define("_MD_WFD_2WEEKS", "2 semaines");
define("_MD_WFD_30DAYS", "30 derniers jours");
define("_MD_WFD_SHOW", "Montr� par ");
define("_MD_WFD_DAYS", "derniers jours");
define("_MD_WFD_NEWDOWNLOADS", "Nouveaux t�l�chargements");
define("_MD_WFD_TOTALNEWDOWNLOADS", "Total des nouveaux t�l�chargements");
define("_MD_WFD_DTOTALFORLAST", "Nombre total des derniers t�l�chargements pour les ");
define("_MD_WFD_AGREE", "J'accepte");
define("_MD_WFD_DOYOUAGREE", "Acceptez-vous les termes ci-dessus ?");
define("_MD_WFD_DISCLAIMERAGREEMENT", "Avertissement");
define("_MD_WFD_DUPLOADSCRSHOT", "Chargez la capture d'�cran :");
define("_MD_WFD_RESOURCEID", "Num�ro de Ressource #: ");
define("_MD_WFD_REPORTER", "Rapporteur original : ");
define("_MD_WFD_DATEREPORTED", "Date : ");
define("_MD_WFD_RESOURCEREPORTED", "Ressource rapport�e comme bris�e");
define("_MD_WFD_BROWSETOTOPIC", "<b>Index alphab�tique :</b>");
define("_MD_WFD_WEBMASTERACKNOW", "Rapports bris�s connus : ");
define("_MD_WFD_WEBMASTERCONFIRM", "Rapports bris�s confirm�s : ");
define("_MD_WFD_DELETE", "Effacez");
define("_MD_WFD_DISPLAYING", "Montr� par : ");
define("_MD_WFD_LEGENDTEXTNEW", "Nouveaut� du jour");
define("_MD_WFD_LEGENDTEXTNEWTHREE", "Nouveaut�s sur 3 jours");
define("_MD_WFD_LEGENDTEXTTHISWEEK", "Nouveaut�s de la semaine");
define("_MD_WFD_LEGENDTEXTNEWLAST", "Plus d'une semaine");
define("_MD_WFD_THISFILEDOESNOTEXIST", "Erreur: ce fichier n'existe pas !");
define("_MD_WFD_BROKENREPORTED", "Fichier bris� rapport�");

define("_MD_WFD_BYTES", " O");
define("_MD_WFD_KILOBYTES", " Ko");
define("_MD_WFD_MEGABYTES", " Mo");
define("_MD_WFD_GIGABYTES", " Go");
define("_MD_WFD_TERRABYTES", " To");

// visit
define("_MD_WFD_DOWNINPROGRESS", "T�l�chargement en cours");
define("_MD_WFD_DOWNSTARTINSEC", "Le t�l�chargement devrait d�buter dans 3 secondes...<b>Un instant, s'il vous pla�t</b>.");
define("_MD_WFD_DOWNNOTSTART", "Si le t�l�chargement de d�bute pas, ");
define("_MD_WFD_CLICKHERE", "Cliquez ici !");
define("_MD_WFD_BROKENFILE", "Fichier bris�");
define("_MD_WFD_PLEASEREPORT", "Merci de rapporter ce lien bsis� � l'administrateur, ");
// Reviews
define("_MD_WFD_REV_TITLE", "Titre r�vis�:");
define("_MD_WFD_REV_RATING", "Notation r�vis�e:");
define("_MD_WFD_REV_DESCRIPTION", "R�vision:");
define("_MD_WFD_REV_SUBMITREV", "Proposez une r�vision");
define("_MD_WFD_ERROR_CREATEREVIEW", "Erreur lors de la cr�ation de la revue");
define("_MD_WFD_REV_SNEWMNAMEDESC", "
Remplissez le formulaire ci-dessous, et nous le v�rifierons d�s que possible.<br /><br />
Merci de prendre le temps de nous donner votre avis. Nous souhaitons donner � nos utilisateurs la possiblit� de trouver rapidiement des fichiers de qualit�.<br /><br />Toutes les r�visions seront v�rifi�es par l'un des adminsitrateurs avant publication.
");
define("_MD_WFD_ISNOTAPPROVED", "Votre proposition doit d'abord �tre approuv�e par un mod�rateur.");
define("_MD_WFD_LICENCEC", "Licence du logiciel : ");
define("_MD_WFD_LIMITATIONS", "Limitations du logiciel : ");
define("_MD_WFD_KEYFEATURESC", "Options principales :<br /><br /><span style='font-weight: normal;'>S�parez chaque option par |</span>");
define("_MD_WFD_REQUIREMENTSC", "Syst�me Requis:<br /><br /><span style='font-weight: normal;'>S�parez chaque �l�ments requis avec |</span>");
define("_MD_WFD_HISTORYC", "Historique du t�l�chargement :");
define("_MD_WFD_HISTORYD", "Ajoutez un nouvel historique d et�l�chargement :<br /><br /><span style='font-weight: normal;'>La date de propositon sera automatiquement ajout�e.</span>");
define("_MD_WFD_HOMEPAGETITLEC", "Titre de la page d'accueil : ");
define("_MD_WFD_REQUIREMENTS", "Syst�me Requis:");
define("_MD_WFD_FEATURES", "Options:");
define("_MD_WFD_HISTORY", "Historique de t�l�chargement :");
define("_MD_WFD_PRICEC", "Prix:");
define("_MD_WFD_SCREENSHOT", "Capture d'�cran :");
define("_MD_WFD_SCREENSHOTCLICK", "Montrez l'image compl�te");
define("_MD_WFD_OTHERBYUID", "Autres fichiers de : ");
define("_MD_WFD_DOWNTIMES", "Temps de t�l�chargements : ");
define("_MD_WFD_MAINTOTAL", "Total des fichiers: ");
define("_MD_WFD_DOWNLOADNOW", "T�l�chargez maintenant");
define("_MD_WFD_PAGES", "<b>Pages</b>");
define("_MD_WFD_REVIEWER", "Correcteur");
define("_MD_WFD_RATEDRESOURCE", "Ressource not�e");
define("_MD_WFD_SUBMITTER", "T&eacute;l&eacute;vers&eacute; par");
define("_MD_WFD_REVIEWTITLE", "R�visions d'utilisateur");
define("_MD_WFD_REVIEWTOTAL", "<b>total des r�visions :</b> %s");
define("_MD_WFD_USERREVIEWSTITLE", "R�visions d'utilisateur");
define("_MD_WFD_USERREVIEWS", "Lisez la r�vision d'un utilisateur sur %s");
define("_MD_WFD_NOUSERREVIEWS", "Soyez le premier � v�rifier %s.");
define("_MD_WFD_ERROR", "Erreur dans la mise � jour : Information non sauvegard�e");
define("_MD_WFD_COPYRIGHT", "copyright");
define("_MD_WFD_INFORUM", "Discutez dans le forum");

//added frankblack

//submit.php
define("_MD_WFD_NOTALLOWESTOSUBMIT","Vous n'�tes pas autoris�s � proposer des fichiers");
define("_MD_WFD_INFONOSAVEDB","L'information n'a pas �t� sauvegard�e dans la base de donn�es : <br /><br />");

//review.php
define("_MD_WFD_ERROR_CREATCHANNEL","Cr�ez d'abord un canal");
define("_MD_WFD_REVIEW_CATPATH", "Cat�gorie");
define("_MD_WFD_ADDREVIEW", "Ajouter revue");

//
define("_MD_WFD_NEWLAST","Nouveaut�s avant la semaine derni�re");
define("_MD_WFD_NEWTHIS","Nouveaut�s de la semaine");
define("_MD_WFD_THREE","Nouveaut�s des trois derniers jours");
define("_MD_WFD_TODAY","Nouveaut� du jour");
define("_MD_WFD_NO_FILES","Pas encore de fichiers");

//mirror.php
define("_MD_WFD_MIRROR_AVAILABLE", "Mirroirs disponibles:");
define("_MD_WFD_MIRROR_CATPATH", "Chemin de cat�gorie:");
define("_MD_WFD_MIRROR_FILENAME", "Nom du fichier:");
define("_MD_WFD_DOWNLOADMIRRORS", "Mirroirs");
define("_MD_WFD_MIRROR_NOTALLOWESTOSUBMIT", "Vous ne poss�dez pas les droits de cr�er un mirroir.");
define("_MD_WFD_MIRRORS", "Miroirs:");
define("_MD_WFD_USERMIRRORSTITLE", "Miroirs disponibles");
define("_MD_WFD_USERMIRRORS", "Voir les miroirs disponibles pour %s");
define("_MD_WFD_NOUSERMIRRORS", "Ajouter un nouveau miroir pour %s.");
define("_MD_WFD_TOTALMIRRORS", "Miroirs total:");
define("_MD_WFD_ADDMIRROR", "Ajouter un miroir");
define("_MD_WFD_MIRROR_TOTAL", "<b>Miroirs total:</b> %s");
define("_MD_WFD_MIRROR_HOMEURLTITLE", "Nom du site:");
define("_MD_WFD_MIRROR_HOMEURL", "Adresse du site:<br /><br />Entrer l'URL du site.");
define("_MD_WFD_MIRROR_UPLOADMIRRORIMAGE", "T�l�verser un logo:<br /><br />Un petit logo repr�sentant le miroir.");
define("_MD_WFD_MIRROR_MIRRORIMAGE", "Logo du site:");
define("_MD_WFD_MIRROR_CONTINENT", "Continent:");
define("_MD_WFD_MIRROR_LOCATION", "Location g�ographique:<br /><br />Exemple: Montreal, CDA");
define("_MD_WFD_MIRROR_DOWNURL", "URL du fichier:<br /><br />Entrer l'URL du fichier.");
define("_MD_WFD_MIRROR_SUBMITMIRROR", "Soumettre un miroir");
define("_MD_WFD_ERROR_CREATEMIRROR", "Erreur lors de la cr�ation du mirroir");
define("_MD_WFD_MIRROR_SNEWMNAMEDESC", "
Merci de compl�ter le formulaire suivant et nous ajouterons votre miroir d�s que possible.<br /><br />
Merci de nous propser un nouvel endroit pour t�l�charger ce fichier. Nous tenons � rendre disponible � nos utilisateurs des fichiers de qualit�, rapidement..<br /><br />Chaque soumission de miroir sera approuv�e par un administrateur avant publication.
");
define("_MD_WFD_MIRROR_HHOST", "H�te");
define("_MD_WFD_MIRROR_HLOCATION", "Location g�ographique");
define("_MD_WFD_MIRROR_HCONTINENT", "Continent");
define("_MD_WFD_MIRROR_HDOWNLOAD", "T�l�charger");
define("_MD_WFD_MIRROR_OFFLINE", "L'h�te est hors ligne.");
define("_MD_WFD_MIRROR_ONLINE", "L'h�te est en ligne.");
define("_MD_WFD_MIRROR_DISABLED", "V�rification de l'�tat du serveur d�sactiv�.");
//continents (used in mirrors page)
define("_MD_WFD_CONT1","Afrique");
define("_MD_WFD_CONT2","Antartique");
define("_MD_WFD_CONT3","Asie");
define("_MD_WFD_CONT4","Europe");
define("_MD_WFD_CONT5","Am�rique du Nord");
define("_MD_WFD_CONT6","Am�rique du Sud");
define("_MD_WFD_CONT7","Oc�anie");
define("_MD_WFD_ADMIN_PAGE",":: Section Administrative ::");
define("_MD_WFD_DOWNLOADS_LIST","Liste des fichiers (%s)");
define("_MD_WFD_NEWDOWNLOADS_ALL","Tous");
define("_MD_WFD_NEWDOWNLOADS_INTHELAST","Derniers % jours");
define("_MD_WFD_DOWNLOAD_MOST_POPULAR","Fichiers les plus populaires");
define("_MD_WFD_DOWNLOAD_MOST_RATED","Fichiers les mieux not�s");
?>