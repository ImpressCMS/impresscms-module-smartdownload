<?php
//Créditos de la traducción: ver. 3.0 chencho; Francisco Portero ver. 3.1RC1; Riosoft ver. 3.1 final
//Revisión inicial de la traducción y añadidos para la ver. 3.2 RC1 por debianus para es.impresscms.org
/**
 * $Id$
 * Module: WF-Downloads
 * Version: v3.1
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */
 
//Todo - Still to remove redundat defines from this area. 
define("_MD_WFD_NODOWNLOAD", "Esta descarga no existe");
define("_MD_WFD_DOWNLOADMINPOSTS", "Necesitas tener un número de envíos más alto<br />Antes de poder descargar ficheros");
define("_MD_WFD_UPLOADMINPOSTS", "Necesitas tener un número de envíos más alto<br />Antes de poder subir ficheros");
define("_MD_WFD_MINPOSTS", "Necesitas tener un número de envíos más alto<br />Antes de poder subir/descargar ficheros");

define("_MD_WFD_SUBCATLISTING", "Listado de categorías");
define("_MD_WFD_ISADMINNOTICE", "Administrador: hay un problema con esta imagen.");
define("_MD_WFD_THANKSFORINFO", "Gracias por su envío. Usted ser&aacute; notificado una vez que su envío sea aprobado por el administrador.");
define("_MD_WFD_ISAPPROVED", "Gracias por su envío. Acaba de ser aprobado y aparecer&aacute; inmediatamente en el listado.");
define("_MD_WFD_THANKSFORHELP", "Gracias por ayudarnos a mantener la integridad del archivo.");
define("_MD_WFD_FORSECURITY", "Por razones de seguridad su nombre y su IP ser&aacute;n almacenadas temporalmente.");
define("_MD_WFD_NOPERMISETOLINK", "Este fichero no pertenece al sitio del cual procede <br /><br />Por favor mande un correo electrónico al administrador del sitio del cual proviene y d&iacute;gale:   <br /><b>NOT TO LEECH OTHER SITES LINKS</b> <br /><br /><b>Definition of a Leecher:</b> One who is to lazy to link from his own server or steals other peoples hard work and makes it look like his own <br /><br />  Your IP address <b>has been logged</b>.");
define("_MD_WFD_SUMMARY", "Sumario<br /><br /><span style='font-weight: normal;'>Puede dejar esto en blanco<br />El sumario será creado en blanco</span>");
define("_MD_WFD_DESCRIPTION", "Descripci&oacute;n");
define("_MD_WFD_SUBMITCATHEAD", "Enviar nueva descarga");
define("_MD_WFD_MAIN", "Inicio");
define("_MD_WFD_POPULAR", "Popular");
define("_MD_WFD_NEWTHISWEEK", "Nuevo esta semana");
define("_MD_WFD_UPTHISWEEK", "Actualizado esta semana");
define("_MD_WFD_POPULARITYLTOM", "Popularidad (de menos a más)");
define("_MD_WFD_POPULARITYMTOL", "Popularidad (de más a menos)");
define("_MD_WFD_TITLEATOZ", "T&iacute;tulo (de la A a la Z)");
define("_MD_WFD_TITLEZTOA", "T&iacute;tulo (de la Z a la A)");
define("_MD_WFD_DATEOLD", "Fecha (Antiguos mostrados primero)");
define("_MD_WFD_DATENEW", "Fecha (Nuevos mostrados primero)");
define("_MD_WFD_RATINGLTOH", "Puntuaci&oacute;n (de Menos a M&aacute;s)");
define("_MD_WFD_RATINGHTOL", "Puntuaci&oacute;n (de M&aacute;s a Menos)");
define("_MD_WFD_DESCRIPTIONC", "Descripci&oacute;n: ");

define("_MD_WFD_CATEGORYC", "Categor&iacute;a: ");
define("_MD_WFD_VERSION", "Versi&oacute;n");
define("_MD_WFD_SUBMITDATE", "Publicado");
define("_MD_WFD_DLTIMES", "Descargado %s veces");
define("_MD_WFD_FILESIZE", "Tama&ntilde;o Fichero");
define("_MD_WFD_SUPPORTEDPLAT", "Plataforma");
define("_MD_WFD_HOMEPAGE", "P&aacute;gina de Inicio");
define("_MD_WFD_PUBLISHERC", "Publicado por: ");
define("_MD_WFD_RATINGC", "Puntuaci&oacute;n: ");
define("_MD_WFD_ONEVOTE", "1 Voto");
define("_MD_WFD_NUMVOTES", "%s Votos");
define("_MD_WFD_RATETHISFILE", "Puntuaci&oacute;n de la Descarga");
define("_MD_WFD_REVIEWTHISFILE", "Analizar descarga");
define("_MD_WFD_REVIEWS", "Análisis:");
define("_MD_WFD_DOWNLOADHITS", "Descargas");
define("_MD_WFD_MODIFY", "Modificar");
define("_MD_WFD_REPORTBROKEN", "Informar sobre un error");
define("_MD_WFD_BROKENREPORT", "Informar sobre descarga err&oacute;nea");
define("_MD_WFD_SUBMITBROKEN", "Confirmar");
define("_MD_WFD_BEFORESUBMIT", "Antes de enviar un informe de una descarga err&oacute;nea, por favor, cerci&oacute;rese de que la descarga ha sido eliminada en efecto, y de que no se trata de una caída temporal del servidor del cual procede el archivo.");
define("_MD_WFD_TELLAFRIEND", "Recomendar");
define("_MD_WFD_EDIT", "Editar");
define("_MD_WFD_THEREARE", "Hay <b>%s</b> <i>Categor&iacute;as</i> y <b>%s</b> <i>Descargas</i> archivadas");
define("_MD_WFD_THEREIS", "Hay <b>%s</b> <i>Categor&iacute;as</i> y <b>%s</b> <i>Descargas</i> archivadas");
define("_MD_WFD_LATESTLIST", "Descargas recientes");
define("_MD_WFD_FILETITLE", "T&iacute;tulo de la descarga: ");
define("_MD_WFD_DLURL", "URL de la descarga: ");
define("_MD_WFD_UPLOAD_FILENAME", "Nombre del archivo local: ");
define("_MD_WFD_UPLOAD_FILETYPE", "Tipo de archivo: ");
define("_MD_WFD_HOMEPAGEC", "P&aacute;gina web: ");
define("_MD_WFD_UPLOAD_FILEC", "Enviar un fichero: ");
define("_MD_WFD_VERSIONC", "Versión: ");
define("_MD_WFD_FILESIZEC", "Tamaño: ");
define("_MD_WFD_NUMBYTES", "%s bytes");
define("_MD_WFD_PLATFORMC", "Plataforma: ");
define("_MD_WFD_PRICE", "Precio");
define("_MD_WFD_LIMITS", "Limitaciones");
define("_MD_WFD_DOWNLICENSE", "Licencia");
define("_MD_WFD_NOTSPECIFIED", "Sin especificar");
define("_MD_WFD_MIRRORSITE", "Mirror para la descarga");
define("_MD_WFD_MIRROR", "Sitio mirror");
define("_MD_WFD_PUBLISHER", "Publicado por");
define("_MD_WFD_UPDATEDON", "Actualizado");
define("_MD_WFD_PRICEFREE", "Gratis");
define("_MD_WFD_VIEWDETAILS", "Ver todos los detalles");
define("_MD_WFD_OPTIONS", 'Opciones: ');
define("_MD_WFD_NOTIFYAPPROVE", 'Notificarme cuando la descarga sea aprobada');
define("_MD_WFD_VOTEAPPRE", "Su voto es apreciado.");
define("_MD_WFD_THANKYOU", "Gracias por votar en %s"); // %s is your site name
define("_MD_WFD_VOTEONCE", "Por favor no vote en la misma descarga m&aacute;s de una vez ;-)");
define("_MD_WFD_RATINGSCALE", "La puntuaci&oacute;n debe tener un valor de entre 1 y 10, siendo 1 una valoraci&oacute;n mala y 10 una valoraci&oacute;n excelente.");
define("_MD_WFD_BEOBJECTIVE", "Por favor sea objetivo, si todo el mundo recibiera un 1 o un 10, las valoraciones no ser&iacute;an muy &uacute;tiles.");
define("_MD_WFD_DONOTVOTE", "Por favor, no vote por su propia descarga");
define("_MD_WFD_RATEIT", "Puntuar");
define("_MD_WFD_INTFILEFOUND", "Hay un buen fichero para descargar en %s"); // %s is your site name
define("_MD_WFD_RANK", "Rango");
define("_MD_WFD_CATEGORY", "Categor&iacute;a");
define("_MD_WFD_HITS", "Accesos");
define("_MD_WFD_RATING", "Puntuaci&oacute;n");
define("_MD_WFD_VOTE", "Voto");
define("_MD_WFD_SORTBY", "Ordenar por:");
define("_MD_WFD_TITLE", "T&iacute;tulo");
define("_MD_WFD_DATE", "Fecha");


define("_MD_WFD_POPULARITY", "Popularidad");
define("_MD_WFD_TOPRATED", "Valoraci&oacute;n");
define("_MD_WFD_CURSORTBY", "Descargas ordenadas por: %s");
define("_MD_WFD_CANCEL", "Cancelar");
define("_MD_WFD_ALREADYREPORTED", "Usted ya ha enviado un informe de fichero erróneo de este recurso.");
define("_MD_WFD_MUSTREGFIRST", "Lo siento, usted no tiene permiso para realizar esta acci&oacute;n.<br />Por favor, reg&iacute;strese primero");
define("_MD_WFD_NORATING", "No ha seleccionado una puntuaci&oacute;n.");
define("_MD_WFD_CANTVOTEOWN", "Usted no puede votar en la descarga que ha enviado.<br />Todos los votos son registrados y revisados.");
define("_MD_WFD_SUBMITDOWNLOAD", "Enviar descarga");
define("_MD_WFD_SUB_SNEWMNAMEDESC", "<ul><li>>Todas las descargas nuevas son aprobadas por los administradores en un plazo de 24 horas antes de aparecer en nuestro listado.</li><li>Nos reservamos el derecho de rechazar cualquier envío, as&iacute; como modificar el contenido sin aprobaci&oacute;n.</li></ul>");
define("_MD_WFD_MAINLISTING", "Categor&iacute;as principales");
define("_MD_WFD_LASTWEEK", "La semana pasada");
define("_MD_WFD_LAST30DAYS", "&Uacute;ltimos 30 d&iacute;as");
define("_MD_WFD_1WEEK", "Una semana");
define("_MD_WFD_2WEEKS", "Dos semanas");
define("_MD_WFD_30DAYS", "Treinta d&iacute;as");
define("_MD_WFD_SHOW", "Mostrar");
define("_MD_WFD_DAYS", "d&iacute;as");
define("_MD_WFD_NEWDOWNLOADS", "Nuevas descargas");
define("_MD_WFD_TOTALNEWDOWNLOADS", "Nuevas descargas");
define("_MD_WFD_DTOTALFORLAST", "Lista de nuevas descargas por");
define("_MD_WFD_AGREE", "Estoy de acuerdo");
define("_MD_WFD_DOYOUAGREE", "¿Est&aacute; de acuerdo con las condiciones anteriores?");
define("_MD_WFD_DISCLAIMERAGREEMENT", "Condiciones de uso");
define("_MD_WFD_DUPLOADSCRSHOT", "Subir captura de pantalla:");
define("_MD_WFD_RESOURCEID", "id# del Recurso: ");
define("_MD_WFD_REPORTER", "Enviado originalmente por: ");
define("_MD_WFD_DATEREPORTED", "Fecha de envío: ");
define("_MD_WFD_RESOURCEREPORTED", "Informe de enlaces rotos");
define("_MD_WFD_BROWSETOTOPIC", "<b>Buscar descargas por listado alfab&eacute;tico</b>");
define("_MD_WFD_WEBMASTERACKNOW", "Confirmaci&oacute;n de informe de enlace roto: ");
define("_MD_WFD_WEBMASTERCONFIRM", "Informes de enlaces rotos confirmados: ");
define("_MD_WFD_DELETE", "Eliminar");
define("_MD_WFD_DISPLAYING", "Mostrados por: ");
define("_MD_WFD_LEGENDTEXTNEW", "Publicados hoy");
define("_MD_WFD_LEGENDTEXTNEWTHREE", "Publicados hace tres d&iacute;as");
define("_MD_WFD_LEGENDTEXTTHISWEEK", "Publicados esta semana");
define("_MD_WFD_LEGENDTEXTNEWLAST", "Publicados hace m&aacute;s de una semana");
define("_MD_WFD_THISFILEDOESNOTEXIST", "Error: el fichero no existe");
define("_MD_WFD_BROKENREPORTED", "Informe de fichero erróneo enviado");

// visit
define("_MD_WFD_DOWNINPROGRESS", "Descarga en proceso");
define("_MD_WFD_DOWNSTARTINSEC", "Su descarga comenzar&aacute; en 3 segundos... <b>espere por favor</b>.");
define("_MD_WFD_DOWNNOTSTART", "Si su descarga no comienza, ");
define("_MD_WFD_CLICKHERE", "Haga click aquí");
define("_MD_WFD_BROKENFILE", "Fichero erróneo");
define("_MD_WFD_PLEASEREPORT", "Por favor informe de este fichero erróneo al administrador. ");
// Reviews
define("_MD_WFD_REV_TITLE", "T&iacute;tulo del an&aacute;lisis:");
define("_MD_WFD_REV_RATING", "Puntuaci&oacute;n del an&aacute;lisis:");
define("_MD_WFD_REV_DESCRIPTION", "Análisis:");
define("_MD_WFD_REV_SUBMITREV", "Enviar an&aacute;lisis");
define("_MD_WFD_REV_SNEWMNAMEDESC", " 
Complete por favor el formulario siguiente, y a&ntilde;adiremos su an&aacute;lisis tan pronto c&oacute;mo nos sea posible.<br /><br />
Gracias por enviarnos su opini&oacute;n. Queremos dar la posibilidad a nuestros usuarios de encontrar software de calidad r&aacute;pidamente.<br /><br />Todos los an&aacute;lisis ser&aacute;n revisados por uno de los webmasters antes de publicarlos en la web.
");
define("_MD_WFD_ISNOTAPPROVED", "Su envío tiene que ser aprobado por un moderador primero.");
define("_MD_WFD_LICENCEC", "Licencia: ");
define("_MD_WFD_LIMITATIONS", "Limitaciones: ");
define("_MD_WFD_KEYFEATURESC", "Caracter&iacute;sticas clave:<br /><br /><span style='font-weight: normal;'>Separe cada caracter&iacute;stica con un |</span>");
define("_MD_WFD_REQUIREMENTSC", "Requerimientos m&iacute;nimos:<br /><br /><span style='font-weight: normal;'>Separe cada requerimiento con un |</span>");
define("_MD_WFD_HISTORYC", "Historia de la descarga:");
define("_MD_WFD_HISTORYD", "A&ntilde;adir nueva Historia de la Descarga:<br /><br /><span style='font-weight: normal;'>La fecha de envío ser&aacute; a&ntilde;adida autom&aacute;ticamente.</span>");
define("_MD_WFD_HOMEPAGETITLEC", "T&iacute;tulo de la web: ");
define("_MD_WFD_REQUIREMENTS", "Requerimientos m&iacute;nimos:");
define("_MD_WFD_FEATURES", "Caracter&iacute;sticas:");
define("_MD_WFD_HISTORY", "Historia de la descarga:");
define("_MD_WFD_PRICEC", "Precio:");
//define("_MD_WFD_SCREENSHOT", "Pantallazo:");
define("_MD_WFD_SCREENSHOTCLICK", "Mostrar imagen completa");
define("_MD_WFD_OTHERBYUID", "Otros ficheros por: ");
define("_MD_WFD_DOWNTIMES", "Fichero descargado las siguientes veces: ");
define("_MD_WFD_MAINTOTAL", "N&uacute;mero total de ficheros: ");
define("_MD_WFD_DOWNLOADNOW", "Descargar ahora");
define("_MD_WFD_PAGES", "<b>P&aacute;ginas</b>");
define("_MD_WFD_REVIEWER", "Editado por");
define("_MD_WFD_RATEDRESOURCE", "Informe de las calificaciones");
define("_MD_WFD_SUBMITTER", "Enviado por");
define("_MD_WFD_REVIEWTITLE", "Análisis de usuarios");
define("_MD_WFD_REVIEWTOTAL", "<b>Análisis totales:</b> %s");
define("_MD_WFD_USERREVIEWSTITLE", "Usuarios que han analizado la descarga");
define("_MD_WFD_USERREVIEWS", "Análisis de usuarios le&iacute;dos en %s");
define("_MD_WFD_NOUSERREVIEWS", "A&uacute;n no ha analizado nadie la descarga %s.");
define("_MD_WFD_ERROR", "Error actualizando la base de datos: no se ha salvado la informaci&oacute;n");
define("_MD_WFD_COPYRIGHT", "copyright");
define("_MD_WFD_INFORUM", "Discursi&oacute;n en foro");

//added frankblack

//submit.php
define("_MD_WFD_NOTALLOWESTOSUBMIT","No tiene permiso para enviar archivos");
define("_MD_WFD_INFONOSAVEDB","Informaci&oacute;n no guardada en la base de datos: <br /><br />");

//review.php
define("_MD_WFD_ERROR_CREATCHANNEL","Nadie ha creado el canal");
define("_MD_WFD_REVIEW_CATPATH", "Directorio de la categor&iacute;a:");
define("_MD_WFD_ADDREVIEW", "Agregar revisi&oacute;n");

//
define("_MD_WFD_NEWLAST","Nuevo envío antes de la &uacute;ltima semana");
define("_MD_WFD_NEWTHIS","Nuevo envío en esta semana");
define("_MD_WFD_THREE","Nuevo envío en los &uacute;ltimos tres d&iacute;as");
define("_MD_WFD_TODAY","Nuevo envío hoy");
define("_MD_WFD_NO_FILES","Todav&iacute;a no hay archivos");

//mirror.php
define("_MD_WFD_MIRROR_AVAILABLE", "Mirrors disponibles:");
define("_MD_WFD_MIRROR_CATPATH", "Directorio de la categor&iacute;a:");
define("_MD_WFD_MIRROR_FILENAME", "Nombre del archivo:");
define("_MD_WFD_DOWNLOADMIRRORS", "Descarga mirrors");
define("_MD_WFD_MIRROR_NOTALLOWESTOSUBMIT", "Usted no está autorizado para enviar mirrors");
define("_MD_WFD_MIRRORS", "Mirrors de Descargas:");
define("_MD_WFD_USERMIRRORSTITLE", "Mirrors disponibles");
define("_MD_WFD_USERMIRRORS", "Ver Mirrors disponibles para %s");
define("_MD_WFD_NOUSERMIRRORS", "Agregar un nuevo Mirror para %s.");
define("_MD_WFD_TOTALMIRRORS", "Mirrors Totales:");
define("_MD_WFD_ADDMIRROR", "Agregar mirror");
define("_MD_WFD_MIRROR_TOTAL", "<b>Mirrors Totales:</b> %s");
define("_MD_WFD_MIRROR_HOMEURLTITLE", "T&iacute;tulo de la pagina principal:");
define("_MD_WFD_MIRROR_HOMEURL", "URL de la pagina principal:<br /><br />Introducir URL de la pagina principal.");
define("_MD_WFD_MIRROR_UPLOADMIRRORIMAGE", "Subir el logo del sitio:<br /><br />A small logo representing your website.");
define("_MD_WFD_MIRROR_MIRRORIMAGE", "Logo del sitio web:");
define("_MD_WFD_MIRROR_CONTINENT", "Continente:");
define("_MD_WFD_MIRROR_LOCATION", "Localizaci&oacute;n:<br /><br />Ejemplo: Londres, Reino Unido");
define("_MD_WFD_MIRROR_DOWNURL", "URL de la descarga:<br /><br />Introducir el URL del archivo.");
define("_MD_WFD_MIRROR_SUBMITMIRROR", "Enviar mirror");
define("_MD_WFD_ERROR_CREATEMIRROR", "Error al crear el mirror");
define("_MD_WFD_MIRROR_SNEWMNAMEDESC", " 
Complete por favor el formulario siguiente, y a&ntilde;adiremos su mirror tan pronto c&oacute;mo nos sea posible.<br /><br />
Gracias por enviarnos la direcci&oacute;n de descarga de archivos. Queremos dar la posibilidad a nuestros usuarios de encontrar software de calidad r&aacute;pidamente.<br /><br />Todos los mirror enviados ser&aacute;n revisados por uno de los webmasters antes de publicarlos en la web.
");
define("_MD_WFD_MIRROR_HHOST", "Servidor");
define("_MD_WFD_MIRROR_HLOCATION", "Localizaci&oacute;n");
define("_MD_WFD_MIRROR_HCONTINENT", "Contenido");
define("_MD_WFD_MIRROR_HDOWNLOAD", "Descarga");
define("_MD_WFD_MIRROR_OFFLINE", "El servidor esta sin conexi&oacute;n.");
define("_MD_WFD_MIRROR_ONLINE", "El servidor esta conectado.");
define("_MD_WFD_MIRROR_DISABLED", "Comprobación del servidor desabilitada.");
//continents (used in mirrors page)
define("_MD_WFD_CONT1","África");
define("_MD_WFD_CONT2","Antártida");
define("_MD_WFD_CONT3","Asia");
define("_MD_WFD_CONT4","Europa");
define("_MD_WFD_CONT5","America del Norte");
define("_MD_WFD_CONT6","America del Sur");
define("_MD_WFD_CONT7","Oceanía");


define("_MD_WFD_ADMIN_PAGE",":: Administración ::");
define("_MD_WFD_DOWNLOADS_LIST","Lista de descarga (%s)");
define("_MD_WFD_NEWDOWNLOADS_ALL","Todo");
define("_MD_WFD_NEWDOWNLOADS_INTHELAST","En los &uacute;ltimos %s d&iacute;as");
define("_MD_WFD_DOWNLOAD_MOST_POPULAR","Descargas populares");
define("_MD_WFD_DOWNLOAD_MOST_RATED","Descargas mejor valoradas");

// añadido a la versión 3.1 FINAL

define("_MD_WFD_NOTALLOWEDTOMOD","No tiene permiso para modificar la descarga");
//Añadido en RC2

define("_MD_WFD_NEEDLOGINVIEW", "Necesita acceder al sitio como usuario registrado");
define("_MD_WFD_LEGENDTEXTRSS", "RSS");
define("_MD_WFD_LEGENDTEXTCATRSS", "Categorías de las fuentes de RSS");

define("_MD_WFD_BYTES", " B");
define("_MD_WFD_KILOBYTES", " Kb");
define("_MD_WFD_MEGABYTES", " Mb");
define("_MD_WFD_GIGABYTES", " Gb");
define("_MD_WFD_TERRABYTES", " Tb");
define("_MD_WFD_SCREENSHOT", "Imagen 1:");//elimina la cadena actual. cuidado
define("_MD_WFD_SCREENSHOT2", "Imagen 2:");
define("_MD_WFD_SCREENSHOT3", "Imagen 3:");
define("_MD_WFD_SCREENSHOT4", "Imagen 4:");
define("_MD_WFD_FFS_SUBMITCATEGORYHEAD", "¿En qué categoría desea incluir el archivo?");//Which Category of file do you want to submit?
define("_MD_WFD_FFS_DOWNLOADDETAILS", "Detalles de la descarga:");
define("_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS", "Detalles personalizados:");//Custom details
define("_MD_WFD_FFS_BACK", "Regresar");
define("_MD_WFD_FFS_DOWNLOADTITLE", "Enviando un archivo en la categoría '{category}' .");
define("_AM_WFD_MOD_VERSIONTYPES", "Estado de la versión: ");
define("_MD_WFD_FILENOTEXIST", "Error: El archivo no existe o no fue encontrado.");
define("_MD_WFD__MD_WFD_FILENOTOPEN", "Error: no fue posible abrir el archivo");
?>