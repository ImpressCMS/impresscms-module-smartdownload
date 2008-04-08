<?php
//Créditos de la traducción: ver. 3.0 chencho; Francisco Portero ver. 3.1RC1; Riosoft ver. 3.1 final
//Revisión inicial de la traducción y añadidos para la ver. 3.2 RC1 por debianus para es.impresscms.org
/**
 * $Id: modinfo.php,v 1.12 2007/03/31 16:42:01 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v3.1
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

// Module Info
// The name of this module
define("_MI_WFD_NAME","Descargas");

// A brief description of this module
define("_MI_WFD_DESC","Crea una secci&oacute;n de descargas donde los usuarios pueden descargar/subir/puntuar ficheros.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFD_BNAME1","Descargas recientess");
define("_MI_WFD_BNAME2","Descargas populares");
//Línea añadida en la revisión 1473

define("_MI_WFD_BNAME3","Descargas más importantes");//Top Downloads by top categories

// Sub menu titles
define("_MI_WFD_SMNAME1","Enviar descarga");
define("_MI_WFD_SMNAME2","Populares");
define("_MI_WFD_SMNAME3","Mejor valoradas");

// Names of admin menu items
define("_MI_WFD_BINDEX","&Iacute;ndice principal");
define("_MI_WFD_INDEXPAGE","Gesti&oacute;n de la p&aacute;gina principal");
define("_MI_WFD_MCATEGORY","Gesti&oacute;n de las categor&iacute;as");
define("_MI_WFD_MDOWNLOADS","Gesti&oacute;n de ficheros");
define("_MI_WFD_REVIEWS","Revisiones");
define("_MI_WFD_MUPLOADS","Subida de im&aacute;genes");
define("_MI_WFD_MMIMETYPES","Gesti&oacute;n de Mimetypes (tipos de archivo)");
define("_MI_WFD_PERMISSIONS","Configuración de los permisos");
define("_MI_WFD_BLOCKADMIN","Configuración de los bloques");
define("_MI_WFD_MVOTEDATA","Votos");
define("_MI_WFD_MMIRRORS","Mirrors");

// Title of config items
define("_MI_WFD_POPULAR", "Contador de descargas populares");
define("_MI_WFD_POPULARDSC", "N&uacute;mero de accesos para que una descarga se marque como popular");

//Display Icons
define("_MI_WFD_ICONDISPLAY","Descargas populares y nuevas:");
define("_MI_WFD_DISPLAYICONDSC", "Seleccionar como mostrar  los iconos nuevos y populares en la lista de descargas.");
define("_MI_WFD_DISPLAYICON1", "Mostrar como iconos");
define("_MI_WFD_DISPLAYICON2", "Mostrar como texto");
define("_MI_WFD_DISPLAYICON3", "No mostrar");

define("_MI_WFD_DAYSNEW","D&iacute;as de nuevas descargas:");
define("_MI_WFD_DAYSNEWDSC","El n&uacute;mero de d&iacute;as que la descarga ser&aacute; considerada como nueva.");
define("_MI_WFD_DAYSUPDATED","Actualizadas las descargas los d&iacute;as:");
define("_MI_WFD_DAYSUPDATEDDSC","La cantidad de d&iacute;as que la descarga ser&aacute; considerada como actualizada.");

define('_MI_WFD_PERPAGE', 'Descargar la lista del contador');
define('_MI_WFD_PERPAGEDSC', 'N&uacute;mero de descargas a mostrar en cada p&aacute;gina.');

define('_MI_WFD_TEMPLATESET', 'Selecionar Plantilla');
define('_MI_WFD_TEMPLATESETDSC', 'Seleccionar plantilla para el m&oacute;dule.<br />Esta se muestra cuando se listan los archivos');
define('_MI_WFD_TEMPLATESET1', 'Por defecto');
define('_MI_WFD_TEMPLATESET2', 'Profesional');

define('_MI_WFD_USESHOTS', '¿Mostrar capturas de pantalla de cada descarga?');
define('_MI_WFD_USESHOTSDSC', 'Selecciona "S&iacute;" para mostrar capturas de pantalla de cada descarga');
define('_MI_WFD_SHOTWIDTH', 'Ancho m&aacute;ximo de las capturas de pantalla/miniaturas');
define('_MI_WFD_SHOTWIDTHDSC', 'Mostrar anchura de las capturas de pantalla');
define('_MI_WFD_SHOTHEIGHT', 'Altura m&aacute;xima de las capturas de pantalla/miniaturas');
define('_MI_WFD_SHOTHEIGHTDSC', 'Mostrar altura de las capturas de pantalla');
define('_MI_WFD_CHECKHOST', '¿Impedir descargas a trav&eacute;s de enlaces externos? (leeching)');
define('_MI_WFD_REFERERS', 'Sitios que pueden enlazar directamente los ficheros para descargar de tu servidor<br />Separados por | ');
define("_MI_WFD_ANONPOST","Env&iacute;o de usuario an&oacute;nimo:");
define("_MI_WFD_ANONPOSTDSC","¿Permitir a los usuarios an&oacute;nimos introducir descargas?");
define("_MI_WFD_ANONPOST1","Ninguno");
define("_MI_WFD_ANONPOST2","Solo descarga");
define("_MI_WFD_ANONPOST3","Solo 'mirror'");
define("_MI_WFD_ANONPOST4","Ambos");
define('_MI_WFD_AUTOAPPROVE','¿Auto aprobar nuevas descargas sin la intervenci&oacute;n del administrador?');
define('_MI_WFD_AUTOAPPROVEDSC','Seleccionar aprobar nuevas descargas sin la intervenci&oacute;n del administrador.');
define('_MI_WFD_AUTOAPPROVE1','Ninguna');
define('_MI_WFD_AUTOAPPROVE2','Solo descarga');
define('_MI_WFD_AUTOAPPROVE3','Solo "mirror"');
define('_MI_WFD_AUTOAPPROVE4','Ambos');

define('_MI_WFD_REVIEWAPPROVE','Auto validar la revisiones enviadas');
define('_MI_WFD_REVIEWAPPROVEDSC','Seleccionar las revisiones enviadas sin moderaci&oacute;n.');
define("_MI_WFD_REVIEWANONPOST","Revisiones de usuarios an&oacute;nimos:");
define("_MI_WFD_REVIEWANONPOSTDSC","¿Los usuarios an&oacute;nimos pueden enviar las revisiones?");

define('_MI_WFD_MAXFILESIZE','Tama&ntilde;o de la subida (KB)');
define('_MI_WFD_MAXFILESIZEDSC','Tama&ntilde;o m&aacute;ximo permitido del fichero de subida.');
define('_MI_WFD_IMGWIDTH','Ancho de la imagen subida');
define('_MI_WFD_IMGWIDTHDSC','Ancho m&aacute;ximo de la imagen a enviar');
define('_MI_WFD_IMGHEIGHT','Altura de la imagen subida');
define('_MI_WFD_IMGHEIGHTDSC','Altura m&aacute;xima de la imagen a enviar');

define('_MI_WFD_AUTOSUMMARY','Habilitar sumario autom&aacute;tico');
define('_MI_WFD_AUTOSUMMARYDESC','Crear autom&aacute;ticamente un sumario basado en x caracteres definidos');
define('_MI_WFD_AUTOSUMMARYLENGTH','Longitud del sumario');
define('_MI_WFD_AUTOSUMMARYLENGTHDESC','Tama&ntilde;o m&aacute;ximo de la cantidad de caracteres mostrados en el sumario');

define('_MI_WFD_UPLOADDIR','Directorio para subidas (sin la barra final)');
define('_MI_WFD_UPLOADDIRDSC','Directorio de subida *RUTA* absoluta');
define('_MI_WFD_DOWNLOADMINPOSTS', "Envíos mínimos necesarios");
define('_MI_WFD_DOWNLOADMINPOSTS_DESC', "Introduce el número de envíos necesarios para la subida/descarga");
define('_MI_WFD_DOWNLOADMINPOSTSDSC', "Introduzca el número mínimo de envíos requeridos para poder descargar un archivo");
define('_MI_WFD_UPLOADMINPOSTS', "Envíos mínimos requeridos para subir contenido");
define('_MI_WFD_UPLOADMINPOSTSDSC', "Introduzca el número mínimo de envíos requeridos para poder subir un archivo");
define('_MI_WFD_ALLOWSUBMISS','Env&iacute;os del usuario:');
define('_MI_WFD_ALLOWSUBMISS1','Ninguno');
define('_MI_WFD_ALLOWSUBMISS2','Descarga Solo');
define('_MI_WFD_ALLOWSUBMISS3','Mirror Solo');
define('_MI_WFD_ALLOWSUBMISS4','Ambos');
define('_MI_WFD_ALLOWSUBMISSDSC','¿Permitir a los usuarios subir nuevos env&iacute;os?');
define('_MI_WFD_ALLOWUPLOADS','Subidas del usuario:');
define('_MI_WFD_ALLOWUPLOADSDSC','¿Permitir a los usuarios subir archivos directamente a la web?');
define('_MI_WFD_SCREENSHOTS','Directorio para las capturas de pantalla');
define('_MI_WFD_CATEGORYIMG','Directorio de subida(upload) para la imagen de la categoría');
define('_MI_WFD_MAINIMGDIR','Directorio para las im&aacute;genes de las categor&iacute;as');
define('_MI_WFD_USETHUMBS', 'Miniaturas:');
define("_MI_WFD_USETHUMBSDSC", "Tipos de archivos permitidos: JPG, GIF, PNG.<div style='padding-top: 8px;'>Usar&aacute; miniaturas para las im&aacute;genes. Seleccione 'No' para usar la imagen original si el servidor no soporta esta opcion.</div>");
define('_MI_WFD_DATEFORMAT', 'Formato de la fecha:');
define('_MI_WFD_DATEFORMATDSC', 'Formato de la fecha por defecto para el m&oacute;dulo:');
define('_MI_WFD_SHOWDISCLAIMER', '¿Mostrar las Condiciones de Uso a los usuarios antes de los env&iacute;os?');
define('_MI_WFD_SHOWDOWNDISCL', '¿Mostrar las Condiciones de Uso a los usuarios antes de las descargas?');
define('_MI_WFD_DISCLAIMER', 'Condiciones de uso para los env&iacute;os:');
define('_MI_WFD_DOWNDISCLAIMER', 'Condiciones de uso para las descargas:');
define('_MI_WFD_PLATFORM', 'Plataformas:');
define('_MI_WFD_SUBCATS', 'Subcategor&iacute;as:');
define('_MI_WFD_VERSIONTYPES', 'Estado de la versi&oacute;n:');
define('_MI_WFD_LICENSE', 'Licencia:');
define('_MI_WFD_LIMITS', 'Limitaciones del fichero:');

define("_MI_WFD_SUBMITART", "Descarga enviada:");
//define("_MI_WFD_SUBMITARTDSC", "Grupos que pueden enviar nuevos ficheros."); modificado en RC2

define("_MI_WFD_IMGUPDATE", "¿Actualizar miniaturas?");
define("_MI_WFD_IMGUPDATEDSC", "¿Actualizar la miniatura en todas las p&aacute;ginas? en caso contrario se seguir&aacute; usando la miniatura antigua. <br /><br />");
define("_MI_WFD_QUALITY", "Calidad de las miniaturas:");
define("_MI_WFD_QUALITYDSC", "M&iacute;nima calidad: 0 M&aacute;xima: 100");
define("_MI_WFD_KEEPASPECT", "¿Mantener proporciones de la imagen?");
define("_MI_WFD_KEEPASPECTDSC", "");
define("_MI_WFD_ADMINPAGE", "N&uacute;mero de ficheros para el &iacute;ndice del administrador:");
define("_MI_WFD_AMDMINPAGEDSC", "N&uacute;mero de nuevos ficheros mostrados en el &aacute;rea de administraci&oacute;n del m&oacute;dulo.");
define("_MI_WFD_ARTICLESSORT", "Orden predeterminado para las descargas:");
define("_MI_WFD_ARTICLESSORTDSC", "Orden predeterminado para los listados de las descargas.");
define("_MI_WFD_TITLE", "T&iacute;tulo");
define("_MI_WFD_RATING", "Valoraci&oacute;n");
define("_MI_WFD_WEIGHT", "Anchura");
define("_MI_WFD_POPULARITY", "Popularidad");
define("_MI_WFD_SUBMITTED2", "Fecha del env&iacute;o");
define('_MI_WFD_COPYRIGHT', '¿Notificar Copyright?:');
define('_MI_WFD_COPYRIGHTDSC', '¿A&ntilde;adir copright a la p&aacute;gina de Informaci&oacute;n de la descarga?');
// Description of each config items
define('_MI_WFD_PLATFORMDSC', 'Lista de plataformas <br />Separar con una | Importante: No cambiar esto si la p&aacute;gina est&aacute; en funcionamiento, ¡a&ntilde;adir nuevas al final de la lista');
define('_MI_WFD_SUBCATSDSC', '¿Mostrar subcategor&iacute;as?. Seleccionando \'No\' ocultar&aacute; las subcategor&iacute;as en los listados');
define('_MI_WFD_LICENSEDSC', 'Lista de plataformas <br />Separadas con una |');

// Text for notifications
define('_MI_WFD_GLOBAL_NOTIFY', 'Global');
define('_MI_WFD_GLOBAL_NOTIFYDSC', 'Opciones de notificaci&oacute;n global');

define('_MI_WFD_CATEGORY_NOTIFY', 'Categor&iacute;as');
define('_MI_WFD_CATEGORY_NOTIFYDSC', 'Opciones de notificaci&oacute;n acerca de la categor&iacute;a actual.');

define('_MI_WFD_FILE_NOTIFY', 'Fichero');
define('_MI_WFD_FILE_NOTIFYDSC', 'Opciones de notificaci&oacute;n acerca del fichero actual.');

define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFY', 'Nueva categor&iacute;a');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notificarme cuando una nueva categor&iacute;a sea creada.');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Recibir notificaci&oacute;n cuando una nueva categor&iacute;a sea creada.');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n: nueva categor&iacute;a');

define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFY', 'Petici&oacute;n de Modificaci&oacute;n de fichero');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYCAP', 'Notificarme cuando se pida modificar un fichero.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYDSC', 'Recibir notificaci&oacute;n cuando se envi&eacute; una petici&oacute;nde modificaci&oacute;n de un fichero.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n: petici&oacute;n de modificaci&oacute;n de fichero');

define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFY', 'Informe de enlace roto');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYCAP', 'Notificarme cuando haya un informe de alg&uacute;n enlace roto.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYDSC', 'Recibir notificaci&oacute;n cuando se env&iacute;e un informe de cualquier enlace roto. ');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n: informe de enlace roto');

define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFY', 'Fichero Enviado');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYCAP', 'Notificarme cuando se env&iacute;e un nuevo fichero (esperando aprobaci&oacute;n).');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYDSC', 'Recibir notificiaci&oacute;n cuando cualquier nuevo fichero sea enviado (esperando aprobaci&oacute;n).');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n: nuevo fichero enviado');

define('_MI_WFD_GLOBAL_NEWFILE_NOTIFY', 'Nuevo fichero');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYCAP', 'Notificarme cuando se publique una nueva descarga.');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYDSC', 'Recibir notificiaci&oacute;n cuando se publique cualquier nueva descarga.');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n: nueva descarga');

define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFY', 'Fichero enviado');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notificarme cuando se env&iacute;e un nuevo fichero (esperando aprobaci&oacute;n) en la categor&iacute;a actual.');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Recibir notificaci&oacute;n cuando se env&iacute;e un nuevo fichero (esperando aprobaci&oacute;n) en la categor&iacute;a actual.');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n: nuevo fichero enviado en la categor&iacute;a');

define('_MI_WFD_CATEGORY_NEWFILE_NOTIFY', 'Nuevo fichero');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYCAP', 'Notificarme cuando un nuevo env&iacute;o sea enviado en la categor&iacute;a actual.');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYDSC', 'Recibir notificaci&oacute;n cuando se publique una nueva descarga en la categor&iacute;a actual.');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci&oacute;n: nuevo fichero en categor&iacute;a');

define('_MI_WFD_FILE_APPROVE_NOTIFY', 'Fichero aprobado');
define('_MI_WFD_FILE_APPROVE_NOTIFYCAP', 'Notificarme cuando el fichero sea aprobado.');
define('_MI_WFD_FILE_APPROVE_NOTIFYDSC', 'Recibir notificaci&oacute;n cuando el fichero sea aprobado.');
define('_MI_WFD_FILE_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} aauto-notificaci&oacute;n: fichero aprobado');

define('_MI_WFD_AUTHOR_INFO', "Informaci&oacute;n de los desarrolladores");
define('_MI_WFD_AUTHOR_NAME', "Desarrollador");
define('_MI_WFD_AUTHOR_DEVTEAM', "Equipo de desarrolladores");
define('_MI_WFD_AUTHOR_WEBSITE', "Web de los desarrolladores");
define('_MI_WFD_AUTHOR_EMAIL', "Correo electrónico de los desarrolladores");
define('_MI_WFD_AUTHOR_CREDITS', "Cr&eacute;ditos");
define('_MI_WFD_MODULE_INFO', "Informaci&oacute;n del desarrollo del m&oacute;dulo");
define('_MI_WFD_MODULE_STATUS', "Estado del desarrollo");
define('_MI_WFD_MODULE_DEMO', "Web de demostraci&oacute;n");
define('_MI_WFD_MODULE_SUPPORT', "Web de soporte oficial");
define('_MI_WFD_MODULE_BUG', "Informar de un bug de este m&oacute;dulo");
define('_MI_WFD_MODULE_FEATURE', "Sugerir un tema nuevo para este m&oacute;dulo");
define('_MI_WFD_MODULE_DISCLAIMER', "Opini&oacute;n de: ");
define('_MI_WFD_RELEASE', "Fecha de lanzamiento: ");

define('_MI_WFD_MODULE_MAILLIST', "Listas de correo del m&oacute;dulo");

define('_MI_WFD_MODULE_MAILANNOUNCEMENTS', "Lista de correo de anuncios");
define('_MI_WFD_MODULE_MAILBUGS', "Lista de correo acerca de fallos");
define('_MI_WFD_MODULE_MAILFEATURES', "Lista de correo acerca de nuevas caracter&iacute;sticas");

define('_MI_WFD_MODULE_MAILANNOUNCEMENTSDSC', "Consigue las &uacute;ltimas noticias del m&oacute;dulo.");
define('_MI_WFD_MODULE_MAILBUGSDSC', "Seguimento de errores y listas de correo (en Ingl&eacute;s)");
define('_MI_WFD_MODULE_MAILFEATURESDSC', "Lista de correo de sugerencias (en Ingl&eacute;s).");

define('_MI_WFD_WARNINGTEXT', "EL SOFTWARE ES PROPORCIONADO POR SMARTFACTORY \"TAL CUAL\"
SMARTFACTORY NO SE HACE RESPONSABLE NI GARANTIZA NADA ACERCA
DE LA CALIDAD, SEGURIDAD O SUSCEPTIBILIDAD DEL SOFTWARE,TANTO DE FORMA EXPRESA COMO
IMPLÍCITA, INCLUYENDO SIN LIMITACIÓN NINGUNA GARANTÍA IMPLÍCITA
PARA USO MERCANTIL, PARTICULAR O LEGAL.
ADEM&Aacute;S, NO SE HACE RESPONSABLE O GARANTIZA COMO VERDADERO
DE NINGUNA DE LAS MANERAS, LA INFORMACI&Oacute;N O MATERIALES
CONCERNIENTES AL SOFTWARE QUE CONTIENE LA P&Aacute;GINA WEB DE WF-SECTIONS. DE NINGUNA
FORMA ABLEMEDIA PODR&Aacute;, O DE FORMA INDIRECTA, ESPECIAL,
ACCIDENTAL O COMO CONSECUENCIA HACERSE CARGO DE LOS DAÑOS, SIN EMBARGO PODR&Aacute; AVISAR E INCLUSO ANTES DE QUE
WF-SECTIONS HAYA SIDO AVISADA DE LA POSIBILIDAD DE PRODUCIRSE DAÑOS.");

define('_MI_WFD_AUTHOR_CREDITSTEXT',"El equipo de SmartFactory quiere agradecer a las siguientes personas su ayuda y soporte durante el proceso de desarrollo del módulo:<br /><br />tom, mking, paco1969, mharoun, Talis, m0nty, steenlnielsen, Clubby, Geronimo, bd_csmc, herko, LANG, Stewdio, tedsmith, veggieryan, carnuke, MadFish, Kiang<br />y a todos aquellos que contribuyeron directa o indirectamente en el proyecto.");
define('_MI_WFD_AUTHOR_BUGFIXES', "Historial de errores corregidos");

define('_MI_WFD_COPYRIGHTIMAGE', "El copyright de las imágenes pertenece a WF-Project/SmartFactory y podrá ser usado sólo con el correspondiente permiso");


// mirror defines
define('_MI_WFD_MIRROR_USEIMAGES', '¿Mostrar logos de mirror?'); // not implemented yet
define('_MI_WFD_MIRROR_USEIMAGESDSC', 'Seleccionar si para mostrar el logo del mirror'); // not implemented yet
define('_MI_WFD_MIRROR_IMGWIDTH', 'Ancho del logo'); // not implemented yet
define('_MI_WFD_MIRROR_IMGWIDTHDSC', 'Ancho del logo de mirror'); // not implemented yet
define('_MI_WFD_MIRROR_IMGHEIGHT', 'Alto del logo'); // not implemented yet
define('_MI_WFD_MIRROR_IMGHEIGHTDSC', 'Alto del logo del mirror'); // not implemented yet
define('_MI_WFD_MIRROR_AUTOAPPROVE','Aprobar autom&aacute;ticamente los mirrors enviados');
define('_MI_WFD_MIRROR_AUTOAPPROVEDSC','Seleccionar para validar los mirrors enviados sin moderacion.');

define('_MI_WFD_MIRROR_MAXIMGWIDTH','Ancho del logo subido'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGWIDTHDSC','Ancho m&aacute;ximo permitido del logo de archivos subido'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGHEIGHT','Alto del logo subido'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGHEIGHTDSC','Alto m&aacute;ximo permitido del logo de archivos subido'); // not implemented yet

define('_MI_WFD_MIRROR_ENABLE','Activar el sistema de mirror');
define('_MI_WFD_MIRROR_ENABLEDSC','');
define('_MI_WFD_MIRROR_ENABLEONCHK','Activar el chequeo de servidores activos');
define('_MI_WFD_MIRROR_ENABLEONCHKDSC','Activar el chequeo de los servidores <br /> de Mirrors puede ralentizar la carga de su <br /> p&aacute;gina si tiene muchos mirrors');
define('_MI_WFD_MIRROR_ALLOWSUBMISS','Mirror enviados por el usuario:');
define('_MI_WFD_MIRROR_ALLOWSUBMISSDSC','Envios de nuevos mirrors por el usuario permitidos');
define('_MI_WFD_MIRROR_MIRRORIMAGES','Directorio de subida para el logo del mirror'); // not implemented yet
define('_MI_WFD_MIRROR_MIRRORIMAGESDSC','Directorio de subida para el logo del mirror'); // not implemented yet

//Añadido en RC2
define('_MI_WFD_CAT_IMGWIDTH', 'Anchura de la imagen de la categoría');
define('_MI_WFD_CAT_IMGWIDTHDSC', 'Mostrar anchura de la imagen de la categoría');
define('_MI_WFD_CAT_IMGHEIGHT', 'Altura de la imagen de la categoría');
define('_MI_WFD_CAT_IMGHEIGHTDSC', 'Mostrar altura de la imagen de la categoría');

define('_MI_WFD_ENABLERSS','Activar RSS:');
define('_MI_WFD_ENABLERSSDSC','Seleccione "Sí" para activar RSS');
define('_MI_WFD_ALLOWUPLOADSGROUP','Enviar archivos:');//Uploads Submit
define('_MI_WFD_ALLOWUPLOADSGROUPDSC','Selecciones los grupos que pueden enviar archivos.<br />Incluye tanto archivos como capturas de pantalla.');
define('_MI_WFD_MAXSHOTS', 'Seleccione el número máximo de capturas de pantalla:');
define('_MI_WFD_MAXSHOTSDSC', 'Establezca el número máximo de capturas de pantalla que pueden ser enviadas.');
define("_MI_WFD_SUBMITARTDSC", "Selecione los grupos que pueden enviar nuevas descargas.<br />Los administradores están seleccionados automáticamente.");//modificado en RC2
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFY', 'Archivo modificado');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYCAP', 'Notificarme cuando este archivo sea modificado.');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYDSC', 'Recibir notificación cuando este archivo sea modificado.');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autonotificación: Archivo modificado');

define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFY', 'Archivo modificado');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYCAP', 'Notificarme cuando un archivo de esta categoría sea modificado.');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYDSC', 'Recibir una notificación cuando un archivo de esta categoría sea modificado.');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autonotificación: Archivo modificado');

define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFY', 'Archivo modificado');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYCAP', 'Notificarme cuando cualquier archivo sea modificado.');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYDSC', 'Recibir notificación cuando cualquier archivo sea modificado.');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autonotificación: Archivo modificado');
?>