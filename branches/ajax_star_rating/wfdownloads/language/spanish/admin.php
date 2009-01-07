<?php
//Créditos de la traducción: ver. 3.0 chencho; Francisco Portero ver. 3.1RC1; Riosoft ver. 3.1 final
//Revisión inicial de la traducción y añadidos para la ver. 3.2 RC1 por debianus para es.impresscms.org

/**
 * $Id: admin.php,v 1.24 2007/06/25 15:57:52 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v3.1
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

// %%%%%%	Module NMDe 'MyDownloads' (Admin)	  %%%%%
// Buttons
define("_AM_WFD_BMODIFY", "Modificar");
define("_AM_WFD_BDELETE", "Eliminar");
define("_AM_WFD_BADD", "A&ntilde;adir");
define("_AM_WFD_BAPPROVE", "Aprobar");
define("_AM_WFD_BIGNORE", "Ignorar");
define("_AM_WFD_BCANCEL", "Cancelar");
define("_AM_WFD_BSAVE", "Guardar");
define("_AM_WFD_BRESET", "Resetear");
define("_AM_WFD_BMOVE", "Mover ficheros");
define("_AM_WFD_BUPLOAD", "Enviar");
define("_AM_WFD_BDELETEIMAGE", "Eliminar imagen seleccionada");
define("_AM_WFD_BRETURN", "Regresar");
define("_AM_WFD_DBERROR", "Error en el acceso a la base de datos: por favor informe de este error en la web de SmartFactory");

//Banned Users
define("_AM_WFD_NONBANNED", "No bloqueado");
define("_AM_WFD_BANNED", "Bloqueado");
define("_AM_WFD_EDITBANNED", "Editar usuarios bloqueados");
// Other Options
define("_AM_WFD_TEXTOPTIONS", "Opciones del texto:");
define("_AM_WFD_ALLOWHTML", " Permitir etiquetas HTML");
define("_AM_WFD_ALLOWSMILEY", " Permitir caritas");
define("_AM_WFD_ALLOWXCODE", " Permitir c&oacute;digos de ImpressCMS");
define("_AM_WFD_ALLOWIMAGES", " Permitir im&aacute;genes");
define("_AM_WFD_ALLOWBREAK", " ¿Usar conversi&oacute;n del salto de l&iacute;nea de ImpressCMS?");
define("_AM_WFD_UPLOADFILE", "Fichero enviado al servidor satisfactoriamente");
define("_AM_WFD_NOMENUITEMS", "No hay elementos en este men&uacute;");

// Admin Bread crumb
define("_AM_WFD_PREFS", "Preferencias");
define("_AM_WFD_PERMISSIONS", "Permisos");
define("_AM_WFD_BINDEX", "&Iacute;ndice pr&iacute;ncipal de administración.");
define("_AM_WFD_BLOCKADMIN", "Bloques");
define("_AM_WFD_GOMODULE", "Ir al m&oacute;dulo (P&aacute;gina Principal)");
define("_AM_WFD_BHELP", "Ayuda");
define("_AM_WFD_ABOUT", "Acerca de");
// Admin Summary
define("_AM_WFD_SCATEGORY", "Categor&iacute;as: ");
define("_AM_WFD_SFILES", "Ficheros: ");
define("_AM_WFD_SNEWFILESVAL", "Enviados: ");
define("_AM_WFD_SMODREQUEST", "Modificados: ");
define("_AM_WFD_SREVIEWS", "Analizados: ");
define("_AM_WFD_SMIRRORS", "Espejos: ");
// Admin Main Menu
define("_AM_WFD_MCATEGORY", "Gesti&oacute;n de categor&iacute;as");
define("_AM_WFD_MDOWNLOADS", "Gesti&oacute;n de ficheros");
define("_AM_WFD_INDEXPAGE", "Gesti&oacute;n de la p&aacute;gina principal");
define("_AM_WFD_MUPLOADS", "Gesti&oacute;n de las im&aacute;genes");
define("_AM_WFD_MMIMETYPES", "Gesti&oacute;n de tipos MIME");
define("_AM_WFD_MCOMMENTS", "Comentarios");
define("_AM_WFS_MVOTEDATA", "Votaciones");
// waiting reviews
define("_AM_WFD_AREVIEWS", "Gesti&oacute;n de an&aacute;lisis");
define("_AM_WFD_AREVIEWS_WAITING", "An&aacute;lisis esperando aprobaci&oacute;n:");
define("_AM_WFD_AREVIEWS_INFO", "Informaci&oacute;n de la gesti&oacute;n de an&aacute;lisis");
define("_AM_WFD_AREVIEWS_APPROVE", "<b>Autoaprobar</b> nuevos an&aacute;lisis.");
define("_AM_WFD_AREVIEWS_APPROVED", "La versi&oacute;n ha sido aprobada.");
define("_AM_WFD_AREVIEWS_EDIT", "<b>Modificar</b> y aprobar posteriormente.");
define("_AM_WFD_AREVIEWS_DELETE", "<b>Eliminar</b> el an&aacute;lisis.");

// Catgeory defines
define("_AM_WFD_CCATEGORY_CREATENEW", "Crear nueva categor&iacute;a");
define("_AM_WFD_CCATEGORY_MODIFY", "Modificar categor&iacute;a");
define("_AM_WFD_CCATEGORY_MOVE", "Mover ficheros de la categor&iacute;a");
define("_AM_WFD_CCATEGORY_MODIFY_TITLE", "T&iacute;tulo de la categor&iacute;a:");
define("_AM_WFD_CCATEGORY_MODIFY_FAILED", "Error moviendo los ficheros: no se pueden mover a esta categor&iacute;a");
define("_AM_WFD_CCATEGORY_MODIFY_FAILEDT", "Error moviendo los ficheros: no se ha encontrado esta categor&iacute;a");
define("_AM_WFD_CCATEGORY_MODIFY_MOVED", "Ficheros movidos satisfactoriamente y categor&iacute;a eliminada");
define("_AM_WFD_CCATEGORY_CREATED", "Nueva categor&iacute;a creada y base de datos actualizada satisfactoriamente");
define("_AM_WFD_CCATEGORY_MODIFIED", "Categor&iacute;a modificada y base de datos actualizada satisfactoriamente");
define("_AM_WFD_CCATEGORY_DELETED", "Categor&iacute;a eliminada y base de datos actualizada satisfactoriamente");
define("_AM_WFD_CCATEGORY_AREUSURE", "Atención: est&aacute; seguro que desea eliminar la categor&iacute;a y todos sus ficheros y comentarios?");
define("_AM_WFD_CCATEGORY_NOEXISTS", "Debe crear una categor&iacute;a antes de a&ntilde;adir nuevos ficheros");
define("_AM_WFD_FCATEGORY_GROUPPROMPT", "Permisos de acceso a la categor&iacute;a:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Seleccione los Grupos de Usuarios que tendrán permisos de acceso a la misma.</span></div>");
define("_AM_WFD_FCATEGORY_TITLE", "T&iacute;tulo de la categor&iacute;a:");
define("_AM_WFD_FCATEGORY_WEIGHT", "Anchura de la categor&iacute;a:");
define("_AM_WFD_FCATEGORY_SUBCATEGORY", "Crear como subcategor&iacute;a de:");
define("_AM_WFD_FCATEGORY_CIMAGE", "Imagen de la categor&iacute;a:");
define("_AM_WFD_FCATEGORY_DESCRIPTION", "Descripci&oacute;n de la categor&iacute;a:");
define("_AM_WFD_FCATEGORY_SUMMARY", "Sumario de la categor&iacute;a:");
define("_AM_WFD_CCATEGORY_CHILDASPARENT", "No puede configurar una categoría hija como la categoría padre");
/* 
* Index page Defines
*/ 
define("_AM_WFD_IPAGE_UPDATED", "P&aacute;gina principal modificada y base de datos actualizada satisfactoriamente");
define("_AM_WFD_IPAGE_INFORMATION", "Informaci&oacute;n de la p&aacute;gina principal");
define("_AM_WFD_IPAGE_MODIFY", "Modificar la P&aacute;gina Principal");
define("_AM_WFD_IPAGE_CIMAGE", "Imagen:");
define("_AM_WFD_IPAGE_CTITLE", "T&iacute;tulo:");
define("_AM_WFD_IPAGE_CHEADING", "Encabezado:");
define("_AM_WFD_IPAGE_CHEADINGA", "Alineamiento del encabezado:");
define("_AM_WFD_IPAGE_CFOOTER", "Pie de p&aacute;gina:");
define("_AM_WFD_IPAGE_CFOOTERA", "Alineamiento del pie de a&aacute;gina:");
define("_AM_WFD_IPAGE_CLEFT", "Izquierda");
define("_AM_WFD_IPAGE_CCENTER", "Centro");
define("_AM_WFD_IPAGE_CRIGHT", "Derecha");

/*
*  Permissions defines
*/ 
define("_AM_WFD_PERM_MANAGEMENT", "Gesti&oacute;n de los permisos");
define("_AM_WFD_PERM_PERMSNOTE", "<div><b>Atención:</b> tenga en cuenta que incluso estableciendo los permisos correctamente en este apartado, un grupo no podr&aacute; acceder al m&oacute;dulo si no tiene permiso en la configuraci&oacute;n de ImpressCMS. Para dar permiso de acceso al m&oacute;dulo, debe hacerlo en <b>Sistema > Grupos</b>.</div>");
define("_AM_WFD_PERM_CPERMISSIONS", "Permisos de las categor&iacute;as");
define("_AM_WFD_PERM_CSELECTPERMISSIONS", "Seleccione las categor&iacute;as a las que podrá acceder cada grupo de usuarios.");
define("_AM_WFD_PERM_CNOCATEGORY", "No se pueden establecer los permisos: no se ha creado todav&iacute;a ninguna categor&iacute;a");
define("_AM_WFD_PERM_FPERMISSIONS", "Permisos de los ficheros");
define("_AM_WFD_PERM_FNOFILES", "No se pueden establecer los permisos: no se han creado todav&iacute;a ningun fichero");
define("_AM_WFD_PERM_FSELECTPERMISSIONS", "Seleccione los ficheros a los cuales cada grupo de usuarios tiene permitido el acceso");

/*
* Upload defines
*/
define("_AM_WFD_DOWN_IMAGEUPLOAD", "Imagen copiada satisfactoriamente en el servidor");
define("_AM_WFD_DOWN_NOIMAGEEXIST", "Error: no se ha especificado ning&uacute;n fichero.");
define("_AM_WFD_DOWN_IMAGEEXIST", "La imagen ya existe en el directorio de destino");
define("_AM_WFD_DOWN_FILEDELETED", "El fichero ha sido eliminado.");
define("_AM_WFD_DOWN_FILEERRORDELETE", "Error eliminando el fichero: no se ha encontrado en el servidor.");
define("_AM_WFD_DOWN_NOFILEERROR", "Error eliminando el fichero: no se ha seleccionado nada para eliminar.");
define("_AM_WFD_DOWN_DELETEFILE", "Atención: ¿Est&aacute; seguro que desea eliminar esta imagen?");
define("_AM_WFD_DOWN_IMAGEINFO", "Estado del Servidor");
define("_AM_WFD_DOWN_NOTSET", "Directorio de subida no indicado");
define("_AM_WFD_DOWN_SERVERPATH", "Directorio raiz de ImpressCMS: ");
define("_AM_WFD_DOWN_UPLOADPATH", "Directorio actual de subida: ");
define("_AM_WFD_DOWN_UPLOADPATHDSC", "Tenga en cuenta que debe indicar necesariamente la ruta completa del servidor hacia el directorio donde se alojarán los archivos.");
define("_AM_WFD_DOWN_SPHPINI", "<b>Informaci&oacute;n recogida del fichero PHP ini:</b>");
define("_AM_WFD_DOWN_SAFEMODESTATUS", "Safe Mode Status: ");
define("_AM_WFD_DOWN_REGISTERGLOBALS", "Register Globals: ");
define("_AM_WFD_DOWN_SERVERUPLOADSTATUS", "Subir ficheros al Servidor: ");
define("_AM_WFD_DOWN_MAXUPLOADSIZE", "Tama&ntilde;o m&aacute;ximo para subidas: ");
define("_AM_WFD_DOWN_MAXPOSTSIZE", "Tama&ntilde;o m&aacute;ximo para los correos: ");
define("_AM_WFD_DOWN_SAFEMODEPROBLEMS", " (Esto puede provocar problemas)");
define("_AM_WFD_DOWN_GDLIBSTATUS", "Soporte de la biblioteca GD: ");
define("_AM_WFD_DOWN_GDLIBVERSION", "Versi&oacute;n de la biblioteca GD: ");
define("_AM_WFD_DOWN_GDON", "<b>Habilitado</b> (Miniaturas disponibles)");
define("_AM_WFD_DOWN_GDOFF", "<b>Deshabilitado</b> (Miniaturas NO disponibles)");
define("_AM_WFD_DOWN_OFF", "<b>Deshabilitado</b>");
define("_AM_WFD_DOWN_ON", "<b>Habilitado</b>");
define("_AM_WFD_DOWN_CATIMAGE", "Im&aacute;genes de las categor&iacute;as");
define("_AM_WFD_DOWN_SCREENSHOTS", "Capturas de pantalla");
define("_AM_WFD_DOWN_MAINIMAGEDIR", "Im&aacute;genes principales");
define("_AM_WFD_DOWN_FCATIMAGE", "Ruta a las Im&aacute;genes de las categor&iacute;as");
define("_AM_WFD_DOWN_FSCREENSHOTS", "Ruta a las capturas de pantalla");
define("_AM_WFD_DOWN_FMAINIMAGEDIR", "Ruta a las im&aacute;genes principales");
define("_AM_WFD_DOWN_FUPLOADIMAGETO", "Subir im&aacute;gen: ");
define("_AM_WFD_DOWN_FUPLOADPATH", "Directorio de destino: ");
define("_AM_WFD_DOWN_FUPLOADURL", "URL del destino: ");
define("_AM_WFD_DOWN_FOLDERSELECTION", "Seleccionar destino de la im&aacute;gen:");
define("_AM_WFD_DOWN_FSHOWSELECTEDIMAGE", "Mostrar im&aacute;gen seleccionada:");
define("_AM_WFD_DOWN_FUPLOADIMAGE", "Subir nueva im&aacute;gen al destino seleccionado:");

// Main Index defines
define("_AM_WFD_MINDEX_DOWNSUMMARY", "Resumen del estado del m&oacute;dulo");
define("_AM_WFD_MINDEX_PUBLISHEDDOWN", "Ficheros publicados:");
define("_AM_WFD_MINDEX_AUTOPUBLISHEDDOWN", "Ficheros autopublicados:");
define("_AM_WFD_MINDEX_AUTOEXPIRE", "Ficheros autoexpirados:");
define("_AM_WFD_MINDEX_OFFLINEDOWN", "Ficheros fuera de l&iacute;nea:");
define("_AM_WFD_MINDEX_ID", "ID");
define("_AM_WFD_MINDEX_TITLE", "T&iacute;tulo del fichero");
define("_AM_WFD_MINDEX_POSTER", "Enviado por");
define("_AM_WFD_MINDEX_SUBMITTED", "Fecha del env&iacute;o");
define("_AM_WFD_MINDEX_ONLINESTATUS", "Estado");
define("_AM_WFD_MINDEX_PUBLISHED", "Publicado");
define("_AM_WFD_MINDEX_ACTION", "Acci&oacute;n");
define("_AM_WFD_MINDEX_NODOWNLOADSFOUND", "Atención: no hay ficheros que mostrar");
define("_AM_WFD_MINDEX_PAGE", "<b>P&aacute;gina:<b> ");
define('_AM_WFD_MINDEX_PAGEINFOTXT', '<ul><li>Ajustes de la p&aacute;gina principal del m&oacute;dulo WF-Downloads.</li><li>Puede cambiar f&aacute;cilmente el logo, encabezado, pie de p&aacute;gina y sus alineamientos a su gusto f&aacute;cilmente</li></ul><br /><br />Nota: La imagen seleccionada como logo se usar&aacute; en cada p&aacute;gina del m&oacute;dulo WF-Downloads.');

// Submitted Files
define("_AM_WFD_SUB_SUBMITTEDFILES", "Ficheros enviados");
define("_AM_WFD_SUB_FILESWAITINGINFO", "Informaci&oacute;n de la gesti&oacute;n de ficheros en espera");
define("_AM_WFD_SUB_FILESWAITINGVALIDATION", "Ficheros esperando aprobaci&oacute;n: ");
define("_AM_WFD_SUB_APPROVEWAITINGFILE", "<b>Aprobar</b> nuevo fichero directamente.");
define("_AM_WFD_SUB_EDITWAITINGFILE", "<b>Editar</b> nuevo fichero y aprobar posteriormente.");
define("_AM_WFD_SUB_DELETEWAITINGFILE", "<b>Eliminar</b> el nuevo fichero.");
define("_AM_WFD_SUB_NOFILESWAITING", "No hay ficheros que mostrar");
define("_AM_WFD_SUB_NEWFILECREATED", "Nuevo fichero creado y base de datos actualizada satisfactoriamente");
// Mimetypes
define("_AM_WFD_MIME_ID", "ID");
define("_AM_WFD_MIME_EXT", "EXT");
define("_AM_WFD_MIME_NAME", "Tipo de aplicaci&oacute;n");
define("_AM_WFD_MIME_ADMIN", "Administrador");
define("_AM_WFD_MIME_USER", "Usuario");

// Mimetype Form
define("_AM_WFD_MIME_CREATEF", "Crear Tipo MIME");
define("_AM_WFD_MIME_MODIFYF", "Modificar Tipo MIME");
define("_AM_WFD_MIME_EXTF", "Extensi&oacute;n de Fichero:");
define("_AM_WFD_MIME_NAMEF", "Tipo/Nombre de la Aplicaci&oacute;n:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Aplicaci&oacute;n asociada con la extensi&oacute;n.</span></div>");
define("_AM_WFD_MIME_TYPEF", "Tipos MIME:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Tipos MIME asociados a la extensi&oacute;n del fichero. Cada tipo MIME debe estar separado por un espacio en blanco.</span></div>");
define("_AM_WFD_MIME_ADMINF", "Tipos MIME permitidos a los administradores");
define("_AM_WFD_MIME_ADMINFINFO", "<b>Tipo MIME de los ficheros que pueden subir los Administradores:</b>");
define("_AM_WFD_MIME_USERF", "Tipos MIME permidos a los Usuarios");
define("_AM_WFD_MIME_USERFINFO", "<b>Tipo MIME de los ficheros que pueden subir los Usuarios:</b>");
define("_AM_WFD_MIME_NOMIMEINFO", "No se ha seleccionado ning&uacute;n tipo MIME.");
define("_AM_WFD_MIME_FINDMIMETYPE", "Buscar un nuevo tipo MIME:");
define("_AM_WFD_MIME_EXTFIND", "Extensi&oacute;n del fichero:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Extensi&oacute;n del fichero del cual desea buscar el Tipo MIME.</span></div>");
define("_AM_WFD_MIME_INFOTEXT", "<ul><li>Se pueden crear, editar o eliminar f&aacute;cilmente tipos MIME desde este formulario.</li> 
	<li>Buscar un nuevo Tipo MIME por medio de una web externa.</li> 
	<li>Mostrar Tipos MIME admitidos para los ficheros de los usuarios y los de los administradores.</li> 
	<li>Cambiar el estado de los tipo MIME.</li></ul> 
	");

// Mimetype Buttons
define("_AM_WFD_MIME_CREATE", "Crear");
define("_AM_WFD_MIME_CLEAR", "Limpiar");
define("_AM_WFD_MIME_CANCEL", "Cancelar");
define("_AM_WFD_MIME_MODIFY", "Modificar");
define("_AM_WFD_MIME_DELETE", "Eliminar");
define("_AM_WFD_MIME_FINDIT", "Buscar extensi&oacute;n");
// Mimetype Database
define("_AM_WFD_MIME_DELETETHIS", "¿Est&aacute; seguro que desea eliminar el tipo MIME?");
define("_AM_WFD_MIME_MIMEDELETED", "El tipo MIME %s ha sido eliminado");
define("_AM_WFD_MIME_CREATED", "Informaci&oacute;n del Tipo MIME creada");
define("_AM_WFD_MIME_MODIFIED", "Informaci&oacute;n del Tipo MIME actualizada");
// Vote Information
define("_AM_WFD_VOTE_RATINGINFOMATION", "Informaci&oacute;n de las votaciones");
define("_AM_WFD_VOTE_TOTALVOTES", "Votos totales: ");
define("_AM_WFD_VOTE_REGUSERVOTES", "Votos de usuarios registrados: %s");
define("_AM_WFD_VOTE_ANONUSERVOTES", "Votos de usuarios an&oacute;nimos: %s");
define("_AM_WFD_VOTE_USER", "Usuario");
define("_AM_WFD_VOTE_IP", "Direcci&oacute;n IP");
define("_AM_WFD_VOTE_USERAVG", "Votaci&oacute;n media de los usuarios");
define("_AM_WFD_VOTE_TOTALRATE", "Votos totales");
define("_AM_WFD_VOTE_DATE", "Enviado");
define("_AM_WFD_VOTE_RATING", "Puntuaci&oacute;n");
define("_AM_WFD_VOTE_NOREGVOTES", "No hay votos de usuarios registrados");
define("_AM_WFD_VOTE_NOUNREGVOTES", "No hay votos de usuarios no registrados");
define("_AM_WFD_VOTE_VOTEDELETED", "Voto eliminado.");
define("_AM_WFD_VOTE_ID", "ID");
define("_AM_WFD_VOTE_FILETITLE", "T&iacute;tulo del fichero");
define("_AM_WFD_VOTE_DISPLAYVOTES", "Informaci&oacute;n de las Votaciones/Valoraciones");
define("_AM_WFD_VOTE_NOVOTES", "No hay votos de usuarios");
define("_AM_WFD_VOTE_DELETE", "No hay votos de usuarios");
define("_AM_WFD_VOTE_DELETEDSC", "<b>Elimina</b> el voto de la base de datos.");

// Modifications
/*
define("_AM_WFD_MOD_TOTMODREQUESTS", "Peticiones totales de Modificaciones: ");
define("_AM_WFD_MOD_MODREQUESTS", "Archivos modificados");
define("_AM_WFD_MOD_MODREQUESTSINFO", "Información de archivos modificada");
define("_AM_WFD_MOD_MODID", "ID");
define("_AM_WFD_MOD_MODTITLE", "Título");
define("_AM_WFD_MOD_MODPOSTER", "Propietario: ");
define("_AM_WFD_MOD_DATE", "Enviado");
define("_AM_WFD_MOD_NOMODREQUEST", "No se encontraron peticiones coincidentes");
define("_AM_WFD_MOD_MODIFYSUBMIT", "Envió");
define("_AM_WFD_MOD_ORIGINAL", "Detalles originales de la descarga");
define("_AM_WFD_MOD_REQDELETED", "Petición de modificación de la base de datos eliminada");
define("_AM_WFD_MOD_REQUPDATED", "Las descargas elegidas fueron modificadas y la base de datos actualizada correctamente");

*/
define("_AM_WFD_MOD_TOTMODREQUESTS", "Peticiones de modificaci&oacute;n: ");
define("_AM_WFD_MOD_MODREQUESTS", "Ficheros modificados");
define("_AM_WFD_MOD_MODREQUESTSINFO", "Informaci&oacute;n de ficheros modificados");
define("_AM_WFD_MOD_MODID", "ID");
define("_AM_WFD_MOD_MODTITLE", "T&iacute;tulo del fichero");
define("_AM_WFD_MOD_MODPOSTER", "Enviado orig. por: ");
define("_AM_WFD_MOD_DATE", "Fecha de env&iacute;o");
define("_AM_WFD_MOD_NOMODREQUEST", "No hay peticiones de modificaci&oacute;n que mostrar");
define("_AM_WFD_MOD_TITLE", "T&iacute;tulo de la descarga: ");
define("_AM_WFD_MOD_LID", "ID de la descarga: ");
define("_AM_WFD_MOD_CID", "Categor&iacute;a: ");
define("_AM_WFD_MOD_URL", "URL remota: ");
define("_AM_WFD_MOD_MIRROR", "Mirror de descarga: ");
define("_AM_WFD_MOD_SIZE", "Tama&ntilde;o de la descarga: ");
define("_AM_WFD_MOD_PUBLISHER", "Publicado por: ");
define("_AM_WFD_MOD_LICENSE", "Licencia: ");
define("_AM_WFD_MOD_FEATURES", "Caracter&iacute;sticas clave: ");
define("_AM_WFD_MOD_FORUMID", "Foro: ");
define("_AM_WFD_MOD_LIMITATIONS", "Limitaciones: ");
define("_AM_WFD_MOD_DHISTORY", "Historia de la descarga: ");
define("_AM_WFD_MOD_SCREENSHOT", "Captura de pantalla: ");
define("_AM_WFD_MOD_HOMEPAGE", "P&aacute;gina web: ");
define("_AM_WFD_MOD_HOMEPAGETITLE", "T&iacute;tulo de la p&aacute;gina web: ");
define("_AM_WFD_MOD_VERSION", "Versi&oacute;n: ");
define("_AM_WFD_MOD_SHOTIMAGE", "Captura de pantalla: ");
define("_AM_WFD_MOD_FILESIZE", "Tama&ntilde;o: ");
define("_AM_WFD_MOD_PLATFORM", "Plataforma: ");
define("_AM_WFD_MOD_PRICE", "Precio: ");
define("_AM_WFD_MOD_LICENCE", "Licencia: ");
define("_AM_WFD_MOD_DESCRIPTION", "Limitaciones: ");
define("_AM_WFD_MOD_REQUIREMENTS", "Requerimientos: ");
define("_AM_WFD_MOD_MODIFYSUBMITTER", "Opini&oacute;n de: ");
define("_AM_WFD_MOD_MODIFYSUBMIT", "Opini&oacute;n de");
define("_AM_WFD_MOD_PROPOSED", "Detalles de la descarga propuesta");
define("_AM_WFD_MOD_ORIGINAL", "Detalles de la descarga original");
define("_AM_WFD_MOD_REQDELETED", "Petici&oacute;n de modificaci&oacute;n eliminada de la base de datos");
define("_AM_WFD_MOD_REQUPDATED", "Modificaci&oacute;n de descarga seleccionada y base de datos actualizada correctamente");
define('_AM_WFD_MOD_VIEW','Ver');

//Reviews defines
define("_AM_WFD_REV_SNEWMNAMEDESC", "Aprobar la revisi&oacute;n: ");
define("_AM_WFD_REV_ID", "ID");
define("_AM_WFD_REV_TITLE", "T&iacute;tuto");
define("_AM_WFD_REV_REVIEWTITLE", "T&iacute;tulo actual");
define("_AM_WFD_REV_POSTER", "Opini&oacute;n de");
define("_AM_WFD_REV_SUBMITDATE", "Opinado por");
define("_AM_WFD_REV_FTITLE", "T&iacute;tulo de la revisi&oacute;n: ");
define("_AM_WFD_REV_FRATING", "Ratio de la revisi&oacute;n: ");
define("_AM_WFD_REV_FDESCRIPTION", "Descripci&oacute;n de la revisi&oacute;n: ");
define("_AM_WFD_REV_FAPPROVE", "Aprobaci&oacute;n de la revisi&oacute;n: ");
define("_AM_WFD_REV_ACTION", "Acci&oacute;n");
define("_AM_WFD_REV_NOWAITINGREVIEWS", "No se han encontrado revisiones en espera");
define("_AM_WFD_REVIEW_APPROVETHIS", "Aprobar revisi&oacute;n");
define("_AM_WFD_REV_NOPUBLISHEDREVIEWS", "No hay ninguna revisi&oacute;n publicada");
define("_AM_WFD_REV_REVIEW_UPDATED", "La revisi&oacute;n seleccionada ha sido modificada y la base de datos actualizada correctamente");
define("_AM_WFD_REV_REVIEW_TOTAL", "Revisiones totales:");
define("_AM_WFD_REV_REVIEW_WAITING", "Revisiones pendientes");
define("_AM_WFD_REV_REVIEW_PUBLISHED", "Revisiones publicadas");

//File management
define("_AM_WFD_FILE_ID", "ID de Archivo: ");	
define("_AM_WFD_FILE_SUBMITTERID", "Id del propietario del envío: <br /><br />Déjelo tal cual a menos que desee cambiar el propietario del envío");
define("_AM_WFD_FILE_IP", "Direcciones IP de los Uploaders: ");
define("_AM_WFD_FILE_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Estensiones de Archivo Permitidas</b>:</div>");
define("_AM_WFD_FILE_MODIFYFILE", "Modificar la informaci&oacute;n del archivo");
define("_AM_WFD_FILE_CREATENEWFILE", "Crear un nuevo archivo");
define("_AM_WFD_FILE_TITLE", "T&iacute;tulo del archivo: ");
define("_AM_WFD_FILE_DLURL", "URL del archivo: ");
define("_AM_WFD_FILE_FILENAME", "Nombre del archivo local: ");
define("_AM_WFD_FILE_FILETYPE", "Tipo de archivo:<br /><br /><span style='font-weight: normal;'>Nota: Si usa un archivo local como descarga, tendrá que introducir el tipo de archivo correctamente a continuación</span> ");
define("_AM_WFD_FILE_MIRRORURL", "Mirror del archivo: ");
define("_AM_WFD_FILE_SUMMARY", "Sumario de archivo: ");
define("_AM_WFD_FILE_DESCRIPTION", "Descripci&oacute;n del archivo: ");
define("_MD_WFD_FILE_SUMMARY", "Sumario del archivo: ");
define("_AM_WFD_FILE_DUPLOAD", " Archivo a subir:");
define("_AM_WFD_FILE_CATEGORY", "Seleccionar categor&iacute;a: ");
define("_AM_WFD_FILE_HOMEPAGETITLE", "T&iacute;tulo de la p&aacute;gina de inicio: ");
define("_AM_WFD_FILE_HOMEPAGE", "P&aacute;gina de inicio: ");
define("_AM_WFD_FILE_SIZE", "Tama&ntilde;o del archivo: ");
define("_AM_WFD_FILE_VERSION", "Versi&oacute;n del archivo: ");
define("_AM_WFD_FILE_PUBLISHER", "Archivo publicado por: ");
define("_AM_WFD_FILE_PLATFORM", "Plataforma del software: ");
define("_AM_WFD_FILE_LICENCE", "Licencia del software: ");
define("_AM_WFD_FILE_LIMITATIONS", "Limitaciones del software: ");
define("_AM_WFD_FILE_PRICE", "Precio: ");
define("_AM_WFD_FILE_KEYFEATURES", "Claves del Art&iacute;culo:<br /><br /><span style='font-weight: normal;'>Separar cada Clave con un |</span>");
define("_AM_WFD_FILE_REQUIREMENTS", "Requisitos del Sistema:<br /><br /><span style='font-weight: normal;'>Separar cada Requisito con |</span>");
define("_AM_WFD_FILE_HISTORY", "Editar Historial de la Descarga:<br /><br /><span style='font-weight: normal;'>A&ntilde;adir una nueva Historia de la Descarga y s&oacute;lo use este campo si necesita editar la historia anterior.</span>");
define("_AM_WFD_FILE_HISTORYD", "A&ntilde;adir un nuevo Historial de la Decarga:<br /><br /><span style='font-weight: normal;'>El n&uacute;mero de Versi&oacute;n y la Fecha ser&aacute;n a&ntilde;adidas autom&aacute;ticamente</span>");
define("_AM_WFD_FILE_HISTORYVERS", "<b>Versi&oacute;n: </b>");
define("_AM_WFD_FILE_HISTORDATE", " <b>Actualizado:</b> ");
define("_AM_WFD_FILE_FILESSTATUS", " Apagar las descargas?<br /><br /><span style='font-weight: normal;'>La Descarga no ser&aacute; visible por todos los usuarios.</span>");
define("_AM_WFD_FILE_SETASUPDATED", " Poner el estado de la descarga como actualizada?<br /><br /><span style='font-weight: normal;'>En la Descarga aparecer&aacute; el icono actualizado.</span>");
define("_AM_WFD_FILE_SHOTIMAGE", "Seleccionar la imagen de la captura de pantalla: ");
define("_AM_WFD_FILE_DISCUSSINFORUM", "A&ntilde;adir un tema de debate en este foro?");
define("_AM_WFD_FILE_PUBLISHDATE", "Fecha de publicaci&oacute;n del archivo:");
define("_AM_WFD_FILE_EXPIREDATE", "Fecha de en la que expira del archivo:");
define("_AM_WFD_FILE_CLEARPUBLISHDATE", "<br /><br />Eliminar la fecha de publicaci&oacute;n:");
define("_AM_WFD_FILE_CLEAREXPIREDATE", "<br /><br />Eliminar la fecha en la que expira:");
define("_AM_WFD_FILE_PUBLISHDATESET", " Publicar la fecha de inicio: ");
define("_AM_WFD_FILE_SETDATETIMEPUBLISH", " Establecer la fecha/tiempo del publicaci&oacute;n");
define("_AM_WFD_FILE_SETDATETIMEEXPIRE", " Establecer la fecha/tiempo de expiraci&oacute;n");
define("_AM_WFD_FILE_SETPUBLISHDATE", "<b>Establecer fecha de publicaci&oacute;n: </b>");
define("_AM_WFD_FILE_SETNEWPUBLISHDATE", "<b>Establecer la nueva fecha de publicaci&oacute;n: </b><br />Published:");
define("_AM_WFD_FILE_SETPUBDATESETS", "<b>Publicar la fecha de inicio: </b><br />Publica la Fecha:");
define("_AM_WFD_FILE_EXPIREDATESET", " Establecer fecha de expiraci&oacute;n: ");
define("_AM_WFD_FILE_SETEXPIREDATE", "<b>Establecer fecha de expiraci&oacute;n: </b>");
define("_AM_WFD_FILE_MUSTBEVALID", "La imagen de la captura de pantalla debe ser un archivo de imagen v&aacute;lido bajo el %s directorio (ej. shot.gif). D&eacute;jalo en blanco si no hay archivo de imagen.");
define("_AM_WFD_FILE_EDITAPPROVE", "Aprobar la descarga:");
define("_AM_WFD_FILE_NEWFILEUPLOAD", "Creado un nuevo archivo y actualizada correctamente la base de datos");
define("_AM_WFD_FILE_FILEMODIFIEDUPDATE", "Modificado el archivo seleccionado y actualizada correctamente la base de datos");
define("_AM_WFD_FILE_REALLYDELETEDTHIS", "Est&aacute; seguro que quiere eliminar el archivo seleccionado?");
define("_AM_WFD_FILE_FILEWASDELETED", "El archvio %s ha sido eliminado correctamente la de base de datos");
define("_AM_WFD_FILE_USE_UPLOAD_TITLE", " Usar el nombre del archivo subido como t&iacute;tulo del archivo.");
define("_AM_WFD_FILE_FILEAPPROVED", "Archivo aprobado y base de datos actualizada correctamente");
define("_AM_WFD_FILE_CREATENEWSSTORY", "<b>Crear historia de las noticias de la descarga</b>");
define("_AM_WFD_FILE_SUBMITNEWS", "¿Crear un nuevo archivo como art&iacute;culo de noticias?");
define("_AM_WFD_FILE_NEWSCATEGORY", "Seleccionar una categor&iacute;a de noticias para crearlas:");
define("_AM_WFD_FILE_NEWSTITLE", "T&iacute;tulo de las noticias:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Dejar en blanco para usar el t&iacute;tulo del archivo</span></div>");
/*
* Broken downloads defines
*/
define("_AM_WFD_SBROKENSUBMIT", "Rotos: ");
define("_AM_WFD_BROKEN_FILE", "Informes de descargas rotas");
define("_AM_WFD_BROKEN_FILEIGNORED", "Informe de descarga rota ignorado y eliminado correctamente de la base de datos");
define("_AM_WFD_BROKEN_NOWACK", "Reconocido el cambio de estado y actualizada la base de datos");
define("_AM_WFD_BROKEN_NOWCON", "Confirmado el cambio de estado y actualizada la base de datos");
define("_AM_WFD_BROKEN_REPORTINFO", "Informaci&oacute;n de enlace roto");
define("_AM_WFD_BROKEN_REPORTSNO", "Enlaces rotos a la espera:");
define("_AM_WFD_BROKEN_IGNOREDESC", "<b>Ignorar</b>. Solamente el informe de enlace roto se eliminará.");
define("_AM_WFD_BROKEN_IGNORE_ALT", "Ignorar el informe y eliminar solamente el mismo");
define("_AM_WFD_BROKEN_DELETEDESC", "<b>Eliminar</b> tanto la descarga como el informe de enlace roto.");
define("_AM_WFD_BROKEN_DELETE_ALT", "Eliminar la descarga y el informe de enlace roto.");
define("_AM_WFD_BROKEN_EDITDESC", "<b>Modificar</b> la descarga para corregir el problema.");
define("_AM_WFD_BROKEN_EDIT_ALT", "Modificar la descarga para corregir el problema");
define("_AM_WFD_BROKEN_ACKDESC", "<b>Reconocer:</b> activará la aceptación del informe de enlace roto y se mostrará como pendiente de solución.");
define("_AM_WFD_BROKEN_ACK_ALT", "Aceptar el informe y considerar el enlace como roto y pendiente de arreglo..");
define("_AM_WFD_BROKEN_CONFIRMDESC", "<b>Confirmar:</b> activar la confirmaci&oacute;n del informe de enlace roto.");
define("_AM_WFD_BROKEN_CONFIRM_ALT", "Confirmar el estado de 'Descarga rota' que fue reportado");
define("_AM_WFD_BROKEN_ID", "ID");
define("_AM_WFD_BROKEN_TITLE", "T&iacute;tulo");
define("_AM_WFD_BROKEN_REPORTER", "Reportado por");
define("_AM_WFD_BROKEN_FILESUBMITTER", "Enviado por");
define("_AM_WFD_BROKEN_DATESUBMITTED", "Fecha de envío");
define("_AM_WFD_BROKEN_ACTION", "Acción");
define("_AM_WFD_BROKEN_NOFILEMATCH", "No hay informes de enlaces rotos que mostrar");
define("_AM_WFD_BROKENFILEDELETED", "Eliminados la descripci&oacute;n de la descarga y los informes de enlace roto de la base de datos");
define("_AM_WFD_BROKEN_DOWNLOAD_DONT_EXISTS", "El archivo no existe");
/*
* About defines
*/
define("_AM_WFD_BY", "por");

//block defines
define("_AM_WFD_BADMIN","Bloque Administraci&oacute;n");
define("_AM_WFD_BLKDESC","Descripci&oacute;n");
define("_AM_WFD_TITLE","T&iacute;tulo");
define("_AM_WFD_SIDE","Alineamiento");
define("_AM_WFD_WEIGHT","Ancho");
define("_AM_WFD_VISIBLE","Visible");
define("_AM_WFD_ACTION","Acci&oacute;n");
define("_AM_WFD_SBLEFT","Izquierda");
define("_AM_WFD_SBRIGHT","Derecha");
define("_AM_WFD_CBLEFT","Centrado a la izquierda");
define("_AM_WFD_CBRIGHT","Centrado a la derecha");
define("_AM_WFD_CBCENTER","Centrado en el medio");
define("_AM_WFD_ACTIVERIGHTS","Derechos de activaci&oacute;n");
define("_AM_WFD_ACCESSRIGHTS","Derechos de acceso");

//image admin icon
define("_AM_WFD_ICO_EDIT","Editar este Item");
define("_AM_WFD_ICO_DELETE","Eliminar este Item");
define("_AM_WFD_ICO_ONLINE","Online");
define("_AM_WFD_ICO_OFFLINE","Offline");
define("_AM_WFD_ICO_APPROVED","Aprobado");
define("_AM_WFD_ICO_NOTAPPROVED","No aprobado");

define("_AM_WFD_ICO_LINK","Enlace relacionado");
define("_AM_WFD_ICO_URL","Añadir URL relacionada");
define("_AM_WFD_ICO_ADD","Añadir");
define("_AM_WFD_ICO_APPROVE","Aprobar");
define("_AM_WFD_ICO_STATS","Estadísticas");

define("_AM_WFD_ICO_IGNORE","Ignorar");
define("_AM_WFD_ICO_ACK","Reconocido informe de enlace roto");
define("_AM_WFD_ICO_REPORT","¿Reconocer informe de enlace roto?");
define("_AM_WFD_ICO_CONFIRM","Confirmado informe de enlace roto");
define("_AM_WFD_ICO_CONBROKEN","¿Confirmar informe de enlace roto?");


define("_AM_WFD_DB_IMPORT", "Importar");
define("_AM_WFD_DB_CURRENTVER", "Versi&oaqcute;n Actual: <span class='currentVer'>%s</span>");
define("_AM_WFD_DB_DBVER", "Versi&oacute;n de la Base de Datos %s");
define("_AM_WFD_DB_MSG_ADD_DATA", "Datos agregados en la tabla %s");
define("_AM_WFD_DB_MSG_ADD_DATA_ERR", "Error agregando datos a la tabla %s");
define("_AM_WFD_DB_MSG_CHGFIELD", "Cambiando la fila %s en la tabla %s");
define("_AM_WFD_DB_MSG_CHGFIELD_ERR", "Error cambiando la fila %s en la tabla %s");
define("_AM_WFD_DB_MSG_CREATE_TABLE", "Tabla %s creada");
define("_AM_WFD_DB_MSG_CREATE_TABLE_ERR", "Error creando la tabla %s");
define("_AM_WFD_DB_MSG_NEWFIELD", "Fila %s agregada correctamente");
define("_AM_WFD_DB_MSG_NEWFIELD_ERR", "Error al añdir el campo %s");
define("_AM_WFD_DB_NEEDUPDATE", "Su base de datos está obsoleta. Necesita actualizar las tablas.<br><b>Recuerde que SmartFactory le recomienda encarecidamente que haga una copia de seguridad de todas las tablas antes de iniciar el proceso de actualización.</b><br>");
define("_AM_WFD_DB_NOUPDATE", "Su base de datos ya está actualizada. No es necesario actualizarla.");
define("_AM_WFD_DB_UPDATE_DB", "Actualizando la base de datos");
define("_AM_WFD_DB_UPDATE_ERR", "Se encontraron errores actualizando a la versión %s");
define("_AM_WFD_DB_UPDATE_NOW", "Actualizar ahora");
define("_AM_WFD_DB_UPDATE_OK", "Se actualizó correctamente a la versión %s");
define("_AM_WFD_DB_UPDATE_TO", "Actualizando a la versión %s");

define("_AM_WFD_GOMOD", "Ir a módulo");
define("_AM_WFD_UPDATE_MODULE", "Actualizar el módulo");
define("_AM_WFD_DB_MSG_UPDATE_TABLE", "Actualizando campos en %s");
define("_AM_WFD_DB_MSG_UPDATE_TABLE_ERR", "Errores mientras se actualizaba %s");

// Mirrors
// waiting mirrors
define("_AM_WFD_AMIRRORS", "Manejo de Mirrors");
define("_AM_WFD_AMIRRORS_WAITING", "Mirrors Pendientes de Validar:");
define("_AM_WFD_AMIRRORS_INFO", "Informacion de Mirrors");
define("_AM_WFD_AMIRRORS_APPROVE", "<b>Validar</b> un nuevo mirror.");
define("_AM_WFD_AMIRRORS_EDIT", "<b>Editar</b> un mirror y validarlo.");
define("_AM_WFD_AMIRRORS_DELETE", "<b>Borrar</b> la informaci&oacute;n del mirror.");

//mirrors defines
define("_AM_WFD_MIRROR_MIRRORTITLE", "Direcci&oacute;n del mirror");
define("_AM_WFD_MIRROR_NOPUBLISHEDMIRRORS", "No hay mirrors publicados");
define("_AM_WFD_MIRROR_MIRROR_TOTAL", "Mirrors totales:");
define("_AM_WFD_MIRROR_MIRROR_WAITING", "Mirrors pendientes");
define("_AM_WFD_MIRROR_MIRROR_PUBLISHED", "Mirrors publicados");
define("_AM_WFD_MIRROR_SNEWMNAMEDESC", "Mirror validados: ");
define("_AM_WFD_MIRROR_ID", "ID");
define("_AM_WFD_MIRROR_TITLE", "T&iacute;tulo");
define("_AM_WFD_MIRROR_MUSTBEVALID", "El logotipo de la pagina de inicio est&aacute; en el directorio %s (ex. shot.gif). Dejar en blanco si no se usa una imagen.");
define("_AM_WFD_MIRROR_POSTER", "Remitente");
define("_AM_WFD_MIRROR_SUBMITDATE", "Enviado");
define("_AM_WFD_MIRROR_FHOMEURLTITLE", "Titulo de la p&aacute;gina de inicio: ");
define("_AM_WFD_MIRROR_FHOMEURL", "URL de la p&aacute;gina de inicio: ");
define("_AM_WFD_MIRROR_UPLOADIMAGE", "Subir el logotipo del sitio web:<br /><br />Un peque&ntilde;o logo que represente su sitio web.");
define("_AM_WFD_MIRROR_MIRRORIMAGE", "Logo del sitio web:");
define("_AM_WFD_MIRROR_CONTINENT", "Contenido:");
define("_AM_WFD_MIRROR_LOCATION", "Localizaci&oacute;n:<br /><br />Ejemplo: London, UK");
define("_AM_WFD_MIRROR_DOWNURL", "Descargar URL:<br /><br />Introducir la url del archivo.");
define("_AM_WFD_MIRROR_FAPPROVE", "Mirror validado: ");
define("_AM_WFD_MIRROR_ACTION", "Acci&oacute;n");
define("_AM_WFD_MIRROR_NOWAITINGMIRRORS", "No hay mirrors pendientes");
define("_AM_WFD_MIRROR_MIRROR_UPDATED", "El mirror ha sido modificado y la base de datos actualizada");
define("_AM_WFD_MIRROR_APPROVETHIS", "Mirror validado");

//continents (used in mirrors page)
define("_AM_WFD_CONT1","Africa");
define("_AM_WFD_CONT2","Antártida");
define("_AM_WFD_CONT3","Asia");
define("_AM_WFD_CONT4","Europa");
define("_AM_WFD_CONT5","America del Norte");
define("_AM_WFD_CONT6","America del Sur");
define("_AM_WFD_CONT7","Oceania");

define("_AM_WFD_HELP","Ayuda");

// Añadidos para la versión 3.1 FINAL

define("_AM_WFD_MOD_FILENAME", "Nombre local del archivo: ");
define("_AM_WFD_MOD_FILETYPE", "Tipo de archivo: ");
define("_AM_WFD_MOD_STATUS", "Estado: ");
define("_AM_WFD_MOD_RATING", "Valoración: ");
define("_AM_WFD_MOD_HITS", "Descargas: ");
define("_AM_WFD_MOD_VOTES", "Votos: ");
define("_AM_WFD_MOD_COMMENTS", "Comentarios: ");
define("_AM_WFD_MOD_PUBLISHED", "Publicado: ");
define("_AM_WFD_MOD_EXPIRED", "Expirado: ");
define("_AM_WFD_MOD_UPDATED", "Actualizado: ");
define("_AM_WFD_MOD_OFFLINE", "Offline: ");
define("_AM_WFD_MOD_REQUESTDATE", "Fecha de petición: ");
define("_AM_WFD_MOD_IPADDRESS", "Dirección IP: ");
define("_AM_WFD_MOD_NOTIFYPUB", "Notificar: ");
define("_AM_WFD_MOD_PAYPALEMAIL", "PayPal Email: ");
define("_AM_WFD_MOD_SUMMARY", "Sumario: ");
//Añadidos en RC2
define("_AM_WFD_DOWN_METAVERSION", "<b>WF-Downloads Meta Version:</b> ");
define("_AM_WFD_FFS_SUBMITBROKEN", "Confirmar");
define("_AM_WFD_FFS_STANDARD_FORM", "No, usar el formulario estándar");
define("_AM_WFD_FFS_CUSTOM_FORM", "¿Usar un formulario personalizado para esta categoría?");
define("_AM_WFD_FFS_DOWNLOADTITLE", "Enviar un archivo en la categoría {category}.");
define("_AM_WFD_FFS_EDITDOWNLOADTITLE", "Modificando un archivo en la categoría '{category}'.");
define("_AM_WFD_FFS_BACK", "Regresar");
define("_AM_WFD_FFS_RELOAD", "Recargar");
define("_MD_WFD_CATEGORYC", "Categoría: ");  // _MD to reuse the category form
define("_MD_WFD_FFS_SUBMITCATEGORYHEAD", "¿En qué categoría desea incluir el envío?");
define("_MD_WFD_FFS_DOWNLOADDETAILS", "Detalles de la descarga:");
define("_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS", "Detalles personalizados:");
define("_MD_WFD_FILETITLE", "Título de la descarga: ");
define("_MD_WFD_DLURL", "URL de la descarga: ");
define("_MD_WFD_UPLOAD_FILEC", "Enviar archivo: ");
define("_MD_WFD_DESCRIPTION", "Descripción");
define("_AM_WFD_MOD_VERSIONTYPES", "Estado de la versión: ");
//Añadido en la revisión 1473

+define("_AM_WFD_MINDEX_LOG", "Registros");
+define("_MD_WFD_IP_LOGS", "Ver registros");
+define("_MD_WFD_EMPTY_LOG", "No hay registros guardados.");
+define("_MD_WFD_LOG_FOR_LID", "Lista de las direcciones IP de los que descargaron %s");
+define("_MD_WFD_IP_ADDRESS", "Dirección IP");
+define("_MD_WFD_DATE", "Fecha de la descarga");
+define("_MD_WFD_BACK", "<< Retornar");
+define("_MD_WFD_USER", "Usuario");
+define("_MD_WFD_ANONYMOUS", "Usuario anónimo");
?>