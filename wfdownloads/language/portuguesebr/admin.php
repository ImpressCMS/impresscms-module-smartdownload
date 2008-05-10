<?php
/**
 * $Id: admin.php,v 1.24 2007/06/25 15:57:52 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 * Translator: GibaPhp - http://br.impresscms.org
 */

// %%%%%%	Module NMDe 'MyDownloads' (Admin)	  %%%%%
// Buttons
define("_AM_WFD_BMODIFY", "Modificar");
define("_AM_WFD_BDELETE", "Apagar");
define("_AM_WFD_BADD", "Adicionar");
define("_AM_WFD_BAPPROVE", "Aprovar");
define("_AM_WFD_BIGNORE", "Ignorar");
define("_AM_WFD_BCANCEL", "Cancelar");
define("_AM_WFD_BSAVE", "Salvar");
define("_AM_WFD_BRESET", "Reiniciar");
define("_AM_WFD_BMOVE", "Mover arquivos");
define("_AM_WFD_BUPLOAD", "Upload");
define("_AM_WFD_BDELETEIMAGE", "Apagar imagens selecionadas");
define("_AM_WFD_BRETURN", "Voltar para onde voc� estava!");
define("_AM_WFD_DBERROR", "Erro ao acessar o BD: Favor reportar erro no site do WF-Downloads");
//Banned Users
define("_AM_WFD_NONBANNED", "N�o Banido");
define("_AM_WFD_BANNED", "Banido");
define("_AM_WFD_EDITBANNED", "Editar Membros Banidos");
// Other Options
define("_AM_WFD_TEXTOPTIONS", "Op��es de Texto:");
define("_AM_WFD_ALLOWHTML", " Permitir Tags HTML");
define("_AM_WFD_ALLOWSMILEY", " Permitir Smilies");
define("_AM_WFD_ALLOWXCODE", " Permitir BBcodes");
define("_AM_WFD_ALLOWIMAGES", " Permitir imagens");
define("_AM_WFD_ALLOWBREAK", " Usar convers�o de 'quebra de linha' ?"); //GibaPhp 
define("_AM_WFD_UPLOADFILE", "Arquivo carregado com sucesso");
define("_AM_WFD_NOMENUITEMS", "Nenhum sub-item dentro do menu");

// Admin Bread crumb
define("_AM_WFD_PREFS", "Prefer�ncias");
define("_AM_WFD_PERMISSIONS", "Permiss�es");
define("_AM_WFD_BINDEX", "�ndice Principal");
define("_AM_WFD_BLOCKADMIN", "Blocos");
define("_AM_WFD_GOMODULE", "Ir para o M�dulo");
define("_AM_WFD_BHELP", "Ajuda");
define("_AM_WFD_ABOUT", "Sobre");
// Admin Summary
define("_AM_WFD_SCATEGORY", "Categoria: ");
define("_AM_WFD_SFILES", "Arquivos: ");
define("_AM_WFD_SNEWFILESVAL", "Enviados: ");
define("_AM_WFD_SMODREQUEST", "Modificados: ");
define("_AM_WFD_SREVIEWS", "Avalia��es: ");
define("_AM_WFD_SMIRRORS", "Mirrors:");
// Admin Main Menu
define("_AM_WFD_MCATEGORY", "Administra��o de Categorias");
define("_AM_WFD_INDEXPAGE", "Administra��o Principal"); //GibaPhp
define("_AM_WFD_MUPLOADS", "Enviar Imagens");
define("_AM_WFD_MMIMETYPES", "Administra��o de Mimetypes");
define("_AM_WFD_MCOMMENTS", "Coment�rios");
define("_AM_WFS_MVOTEDATA", "Vota��es");
// waiting reviews
define("_AM_WFD_AREVIEWS", "Administra��o de Avalia��es");
define("_AM_WFD_AREVIEWS_WAITING", "Avalia��es aguardando Aprova��o:");
define("_AM_WFD_AREVIEWS_INFO", "Revis�es e Avalia��es na Administra��o"); //GibaPhp
define("_AM_WFD_AREVIEWS_APPROVE", "<b>Aprovar</b> novas Avalia��es sem valida��o.");
define("_AM_WFD_AREVIEWS_APPROVED", "Avalia��o foi aprovada."); //GibaPhp
define("_AM_WFD_AREVIEWS_EDIT", "<b>Editar</b> novas Avalia��es e depois Aprovar.");
define("_AM_WFD_AREVIEWS_DELETE", "<b>Apagar</b> novas informa��es de Avalia��o.");

// Catgeory defines
define("_AM_WFD_CCATEGORY_CREATENEW", "Criar nova Categoria");
define("_AM_WFD_CCATEGORY_MODIFY", "Modificar Categoria");
define("_AM_WFD_CCATEGORY_MOVE", "Mover Arquivos de Categoria");
define("_AM_WFD_CCATEGORY_MODIFY_TITLE", "T�tulo da Categoria:");
define("_AM_WFD_CCATEGORY_MODIFY_FAILED", "Falhou a movimenta��o: N�o � poss�vel mover para esta Categoria"); //GibaPhp
define("_AM_WFD_CCATEGORY_MODIFY_FAILEDT", "Falha ao Mover Arquivos: Categoria n�o encontrada");
define("_AM_WFD_CCATEGORY_MODIFY_MOVED", "Arquivos Movidos");
define("_AM_WFD_CCATEGORY_CREATED", "Nova categoria Criada e Banco de Dados atualizado com sucesso"); //GibaPhp
define("_AM_WFD_CCATEGORY_MODIFIED", "Categoria selecionada foi Modificada e Banco de Dados atualizado com sucesso"); //GibaPhp
define("_AM_WFD_CCATEGORY_DELETED", "Categoria selecionada apagada e Banco de Dados Atualizado com sucesso");
define("_AM_WFD_CCATEGORY_AREUSURE", "Aten��o: Tem a certeza que quer apagar esta categoria e <b>TODOS</b> os seus arquivos e coment�rios?");
define("_AM_WFD_CCATEGORY_NOEXISTS", "� necessario criar uma Categoria antes de incluir um arquivo"); //GibaPhp
define("_AM_WFD_FCATEGORY_GROUPPROMPT", "Permiss�es de Acesso �s Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos que podem acessar esta categoria.</span></div>");
define("_AM_WFD_FCATEGORY_TITLE", "Titulo da Categoria:");
define("_AM_WFD_FCATEGORY_WEIGHT", "Import�ncia da Categoria:");
define("_AM_WFD_FCATEGORY_SUBCATEGORY", "Sub-Categoria:"); //GibaPhp
define("_AM_WFD_FCATEGORY_CIMAGE", "Selecionar Imagem da Categoria:");
define("_AM_WFD_FCATEGORY_DESCRIPTION", "Descri��o da Categoria:");
define("_AM_WFD_FCATEGORY_SUMMARY", "Sum�rio da Categoria:");
define("_AM_WFD_CCATEGORY_CHILDASPARENT", "Voc� n�o pode configurar uma sub-categoria como categoria principal");
/*
* Index page Defines
*/
define("_AM_WFD_IPAGE_UPDATED", "P�gina In�cial Modificada e o Banco de Dados atualizado com sucesso!"); //GibaPhp
define("_AM_WFD_IPAGE_INFORMATION", "Informa��o Principal"); //GibaPhp
define("_AM_WFD_IPAGE_MODIFY", "Modificar p�gina Inicial"); //GibaPhp
define("_AM_WFD_IPAGE_CIMAGE", "Selecionar Imagem da p�gina Inicial:"); //GibaPhp
define("_AM_WFD_IPAGE_CTITLE", "Titulo:");
define("_AM_WFD_IPAGE_CHEADING", "Cabe�alho:");
define("_AM_WFD_IPAGE_CHEADINGA","Alinhar Cabe�alho:"); //GibaPhp
define("_AM_WFD_IPAGE_CFOOTER", "Rodap�:");
define("_AM_WFD_IPAGE_CFOOTERA", "Alinhar Rodap�:"); //GibaPhp
define("_AM_WFD_IPAGE_CLEFT", "Alinhar � esquerda");
define("_AM_WFD_IPAGE_CCENTER", "Alinhar ao centro");
define("_AM_WFD_IPAGE_CRIGHT", "Alinhar � direita");

/*
*  Permissions defines
*/
define("_AM_WFD_PERM_MANAGEMENT", "Gerenciar Permiss�es"); //GibaPhp
define("_AM_WFD_PERM_PERMSNOTE", "<div><b>NOTA:</b>Mesmo que as permiss�es sejam definidas corretamente aqui, um grupo pode n�o ter acesso ao M�dulo ou aos Blocos se n�o for definido o acesso ao m�dulo. Para o faz�-lo, v� em <b>Sistema Administra��o - > Grupos</b>, escolha o grupo apropriado e d�-lhe acesso ao m�dulo.</div>"); //GibaPhp
define("_AM_WFD_PERM_CPERMISSIONS", "Permiss�es da Categoria"); //GibaPhp
define("_AM_WFD_PERM_CSELECTPERMISSIONS", "Selecione as categorias que cada grupo pode visualizar");
define("_AM_WFD_PERM_CNOCATEGORY", "N�o foi poss�vel ajustar permiss�es porque n�o h� categorias criadas!");
define("_AM_WFD_PERM_FPERMISSIONS", "Permiss�es de Arquivos");
define("_AM_WFD_PERM_FNOFILES", "N�o foi poss�vel ajustar permiss�es porque n�o h� arquivos!");
define("_AM_WFD_PERM_FSELECTPERMISSIONS", "Selecione os arquivos que cada grupo pode visualizar");
/*
* Upload defines
*/
define("_AM_WFD_DOWN_IMAGEUPLOAD", "Imagem atualizada e enviada com sucesso para o servidor");
define("_AM_WFD_DOWN_NOIMAGEEXIST", "Erro: N�o foi selecionado nenhum arquivo para upload.  Por favor, tente novamente!");
define("_AM_WFD_DOWN_IMAGEEXIST", "Imagem j� existe na pasta de uploads!");
define("_AM_WFD_DOWN_FILEDELETED", "Arquivo foi apagado.");
define("_AM_WFD_DOWN_FILEERRORDELETE", "Erro ao apagar arquivo: Arquivo n�o encontrado.");
define("_AM_WFD_DOWN_NOFILEERROR", "Erro ao apagar arquivo: Nenhum Arquivo foi selecionado.");
define("_AM_WFD_DOWN_DELETEFILE", "Aten��o: tem certeza que deseja apagar este arquivo de imagem?");
define("_AM_WFD_DOWN_IMAGEINFO", "Status do servidor");
define("_AM_WFD_DOWN_NOTSET", "Caminho do diret�rio de Upload n�o escolhido"); //GibaPhp
define("_AM_WFD_DOWN_SERVERPATH", "Caminho para o Raiz do Servidor: ");
define("_AM_WFD_DOWN_UPLOADPATH", "Caminho atual para o diret�rio de Upload: "); //GibaPhp
define("_AM_WFD_DOWN_UPLOADPATHDSC", "Aten��o: O caminho dos uploads tem que conter o caminho completo no servidor da sua pasta para uploads.");
define("_AM_WFD_DOWN_SPHPINI", "<b>Informa��o retirada do arquivo PHP ini:</b>");
define("_AM_WFD_DOWN_METAVERSION", "<b>WF-Downloads Meta Version:</b> ");
define("_AM_WFD_DOWN_SAFEMODESTATUS", "Modo seguro: ");
define("_AM_WFD_DOWN_REGISTERGLOBALS", "Register Globals: ");
define("_AM_WFD_DOWN_SERVERUPLOADSTATUS", "Status de Uploads: ");
define("_AM_WFD_DOWN_MAXUPLOADSIZE", "Tamanho Max de Upload: ");
define("_AM_WFD_DOWN_MAXPOSTSIZE", "Tamanho Max de Post: ");
define("_AM_WFD_DOWN_SAFEMODEPROBLEMS", " (Isto pode causar problemas)");
define("_AM_WFD_DOWN_GDLIBSTATUS", "Suporte Biblioteca GD: ");
define("_AM_WFD_DOWN_GDLIBVERSION", "Vers�o Biblioeca GD: ");
define("_AM_WFD_DOWN_GDON", "<b>Ativado</b> (Thumbs Nails Disponiveis)");
define("_AM_WFD_DOWN_GDOFF", "<b>Desativar</b> (Nenhum Thumb Nails Disponivel)");
define("_AM_WFD_DOWN_OFF", "<b>OFF</b>");
define("_AM_WFD_DOWN_ON", "<b>ON</b>");
define("_AM_WFD_DOWN_CATIMAGE", "Imagens da Categoria");
define("_AM_WFD_DOWN_SCREENSHOTS", "Imagens de Screenshots");
define("_AM_WFD_DOWN_MAINIMAGEDIR", "Imagens Principais");
define("_AM_WFD_DOWN_FCATIMAGE", "Caminho para Imagens das Categorias");
define("_AM_WFD_DOWN_FSCREENSHOTS", "Caminho para Imagens de Screenshot");
define("_AM_WFD_DOWN_FMAINIMAGEDIR", "Caminho para Imagens principais");
define("_AM_WFD_DOWN_FUPLOADIMAGETO", "Enviar Imagem: ");
define("_AM_WFD_DOWN_FUPLOADPATH", "Caminho do Upload: ");
define("_AM_WFD_DOWN_FUPLOADURL", "URL de Upload: ");
define("_AM_WFD_DOWN_FOLDERSELECTION", "Selecione o destino do Upload:");
define("_AM_WFD_DOWN_FSHOWSELECTEDIMAGE", "Mostrar Imagem Selecionada:");
define("_AM_WFD_DOWN_FUPLOADIMAGE", "Enviar nova imagem para a pasta selecionada:");

// Main Index defines
define("_AM_WFD_MINDEX_DOWNSUMMARY", "Sum�rio de Administra��o do M�dulo");
define("_AM_WFD_MINDEX_PUBLISHEDDOWN", "Arquivos Publicados:");
define("_AM_WFD_MINDEX_AUTOPUBLISHEDDOWN", "Publica��o Autom�tica:"); //GibaPhp
define("_AM_WFD_MINDEX_AUTOEXPIRE", "Arquivos Expirados:");
define("_AM_WFD_MINDEX_OFFLINEDOWN", "Arquivos Ofline:");
define("_AM_WFD_MINDEX_ID", "ID");
define("_AM_WFD_MINDEX_TITLE", "Titulo do Arquivo");
define("_AM_WFD_MINDEX_POSTER", "Enviado por");
define("_AM_WFD_MINDEX_SUBMITTED", "Data de Envio");
define("_AM_WFD_MINDEX_ONLINESTATUS", "Status");
define("_AM_WFD_MINDEX_PUBLISHED", "Publicado");
define("_AM_WFD_MINDEX_ACTION", "A��o");
define("_AM_WFD_MINDEX_NODOWNLOADSFOUND", "NOTIFICA��O:  N�o existe arquivo que satisfaz os crit�rios");
define("_AM_WFD_MINDEX_PAGE", "<b>P�gina:<b> ");
define('_AM_WFD_MINDEX_PAGEINFOTXT', '<ul><li>WF-Downloads: detalhes da p�gina principal.</li><li>Voc� pode facilmente alterar o logo, o cabe�alho, o �ndice ou o texto do rodape para ficar adequado � voc�</li></ul><br /><br />Nota: O Logo escolhido ser� usado por todo o WF-DOWNLOADS.');

// Submitted Files
define("_AM_WFD_SUB_SUBMITTEDFILES", "Arquivos Enviados");
define("_AM_WFD_SUB_FILESWAITINGINFO", "Informa��o de arquivos em espera");
define("_AM_WFD_SUB_FILESWAITINGVALIDATION", "Valida��o de arquivos em espera: ");
define("_AM_WFD_SUB_APPROVEWAITINGFILE", "<b>Aprovar</b> informa��es de novo arquivo sem valida��o.");
define("_AM_WFD_SUB_EDITWAITINGFILE", "<b>Editar</b> novas informa��es de arquivo e aprovar.");
define("_AM_WFD_SUB_DELETEWAITINGFILE", "<b>Remover</b> novas informa��es de arquivo.");
define("_AM_WFD_SUB_NOFILESWAITING", "N�o h� arquivos que correspondem a estas caracter�sticas.");
define("_AM_WFD_SUB_NEWFILECREATED", "Novo Arquivo criado e Banco de Dados atualizado com sucesso.");
// Mimetypes
define("_AM_WFD_MIME_ID", "ID");
define("_AM_WFD_MIME_EXT", "EXT");
define("_AM_WFD_MIME_NAME", "Tipo de Aplica��o");
define("_AM_WFD_MIME_ADMIN", "Admin");
define("_AM_WFD_MIME_USER", "Usu�rio");
// Mimetype Form
define("_AM_WFD_MIME_CREATEF", "Criar Mimetype");
define("_AM_WFD_MIME_MODIFYF", "Modificar Mimetype");
define("_AM_WFD_MIME_EXTF", "Extens�o do Arquivo:");
define("_AM_WFD_MIME_NAMEF", "Tipo/Nome de Aplica��o:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Escolher aplica��o associada a este tipo de arquivo.</span></div>");
define("_AM_WFD_MIME_TYPEF", "Mimetypes:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Insira cada mimetype associado ao tipo de arquivo. Cada mimetype deve estar separado por um espa�o.</span></div>");
define("_AM_WFD_MIME_ADMINF", "Permitir administrar Mimetype"); //GibaPhp
define("_AM_WFD_MIME_ADMINFINFO", "<b>Mimetypes disponiveis para Admin enviar:</b>");
define("_AM_WFD_MIME_USERF", "Permitir envio de Mimetype por Usu�rios");
define("_AM_WFD_MIME_USERFINFO", "<b>Mimetypes disponiveis para Usu�rio enviar:</b>");
define("_AM_WFD_MIME_NOMIMEINFO", "Nenhum Mimetype escolhido.");
define("_AM_WFD_MIME_FINDMIMETYPE", "Procurar novo Mimetype:");
define("_AM_WFD_MIME_EXTFIND", "Procurar Extens�o de Arquivo:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Escolha extens�o que quer procurar.</span></div>");
define("_AM_WFD_MIME_INFOTEXT", "<ul><li>Novos mimetypes podem ser criados,editados ou removidos facilmente por este formul�rio.</li> 
	<li>Procurar um novo mimetype atrav�s de um website externo.</li>
 	<li>Ver mimetypes mostrados para envio do Admin e Usu�rios.</li> 	
 	<li>Mudar status de envio de mimetypes.</li></ul> 	
 	");

// Mimetype Buttons
define("_AM_WFD_MIME_CREATE", "Criar");
define("_AM_WFD_MIME_CLEAR", "Reiniciar");
define("_AM_WFD_MIME_CANCEL", "Cancelar");
define("_AM_WFD_MIME_MODIFY", "Modificar");
define("_AM_WFD_MIME_DELETE", "Apagar");
define("_AM_WFD_MIME_FINDIT", "Procurar Extens�o!");
// Mimetype Database
define("_AM_WFD_MIME_DELETETHIS", "Apagar Mimetypes Seleccionados?");
define("_AM_WFD_MIME_MIMEDELETED", "Os Mimetypes %s foram apagados");
define("_AM_WFD_MIME_CREATED", "Informa��o do Mimetype Criada");
define("_AM_WFD_MIME_MODIFIED", "Informa��o do Mimetype Modificada");
// Vote Information
define("_AM_WFD_VOTE_RATINGINFOMATION", "Informa��o de Vota��es");
define("_AM_WFD_VOTE_TOTALVOTES", "Total de Votos: ");
define("_AM_WFD_VOTE_REGUSERVOTES", "Votos de Usu�rios Registrados: %s"); //GibaPhp
define("_AM_WFD_VOTE_ANONUSERVOTES", "Votos de Usu�rios An�nimos: %s"); //GibaPhp
define("_AM_WFD_VOTE_USER", "Usu�rio");
define("_AM_WFD_VOTE_IP", "Endere�o IP");
define("_AM_WFD_VOTE_USERAVG", "M�dia de Votos");
define("_AM_WFD_VOTE_TOTALRATE", "Pontua��o Total");
define("_AM_WFD_VOTE_DATE", "Votado em");
define("_AM_WFD_VOTE_RATING", "Pontua��o");
define("_AM_WFD_VOTE_NOREGVOTES", "Nenhum voto de usu�rios registrados");
define("_AM_WFD_VOTE_NOUNREGVOTES", "Nenhum voto de usu�rios an�nimos");
define("_AM_WFD_VOTE_VOTEDELETED", "Vota��o apagada.");
define("_AM_WFD_VOTE_ID", "ID");
define("_AM_WFD_VOTE_FILETITLE", "T�tulo do Arquivo");
define("_AM_WFD_VOTE_DISPLAYVOTES", "Informa��o de Vota��o");
define("_AM_WFD_VOTE_NOVOTES", "Nenhum Voto para mostrar");
define("_AM_WFD_VOTE_DELETE", "Apagar Vota��o");
define("_AM_WFD_VOTE_DELETEDSC", "<b>Apaga</b> a vota��o seleccionada do Banco de Dados."); //GibaPhp

// Modifications
/*
define("_AM_WFD_MOD_TOTMODREQUESTS", "Pedidos de Modifica��o: ");
define("_AM_WFD_MOD_MODREQUESTS", "Arquivos Modificados");
define("_AM_WFD_MOD_MODREQUESTSINFO", "Informa��o de Arquivos Modificados");
define("_AM_WFD_MOD_MODID", "ID");
define("_AM_WFD_MOD_MODTITLE", "Titulo");
define("_AM_WFD_MOD_MODPOSTER", "Enviado Por: ");
define("_AM_WFD_MOD_DATE", "Enviado em");
define("_AM_WFD_MOD_NOMODREQUEST", "N�o existem pedidos com estas caracter�sticas");
define("_AM_WFD_MOD_MODIFYSUBMIT", "Enviar");
define("_AM_WFD_MOD_ORIGINAL", "Detalhes Originais do Download");
define("_AM_WFD_MOD_REQDELETED", "Pedido de modifica��o removido do BD");
define("_AM_WFD_MOD_REQUPDATED", "Download modificado e Banco de Dados atualizado com sucesso"); //GibaPhp

*/
define("_AM_WFD_MOD_TOTMODREQUESTS", "Pedidos de Modifica��o: ");
define("_AM_WFD_MOD_MODREQUESTS", "Arquivos Modificados");
define("_AM_WFD_MOD_MODREQUESTSINFO", "Informa��o de Arquivos Modificados");
define("_AM_WFD_MOD_MODID", "ID");
define("_AM_WFD_MOD_MODTITLE", "Titulo");
define("_AM_WFD_MOD_MODPOSTER", "Enviado Por: ");
define("_AM_WFD_MOD_DATE", "Enviado em");
define("_AM_WFD_MOD_NOMODREQUEST", "N�o existem pedidos com estas caracter�sticas");
define("_AM_WFD_MOD_TITLE", "Titulo de Download: ");
define("_AM_WFD_MOD_LID", "ID de Download: ");
define("_AM_WFD_MOD_CID", "Categoria: ");
define("_AM_WFD_MOD_URL", "Url de Download: ");
define("_AM_WFD_MOD_MIRROR", "Mirror de Download: ");
define("_AM_WFD_MOD_SIZE", "Tamanho de Download: ");
define("_AM_WFD_MOD_PUBLISHER", "Publicado por: ");
define("_AM_WFD_MOD_LICENSE", "Licen�a de Software: ");
define("_AM_WFD_MOD_FEATURES", "Fun��es Chave: ");
define("_AM_WFD_MOD_FORUMID", "F�rum: ");
define("_AM_WFD_MOD_LIMITATIONS", "Limita��es de Software: ");
define("_AM_WFD_MOD_VERSIONTYPES", "Status da Atualiza��o: "); //GibaPhp - inclu�do em 2008-04-10
define("_AM_WFD_MOD_DHISTORY", "Hist�rico de Download: ");
define("_AM_WFD_MOD_SCREENSHOT", "Imagem de Screenshot: ");
define("_AM_WFD_MOD_HOMEPAGE", "Home Page: ");
define("_AM_WFD_MOD_HOMEPAGETITLE", "T�tulo da P�gina Principal: ");
define("_AM_WFD_MOD_VERSION", "Vers�o: ");
define("_AM_WFD_MOD_SHOTIMAGE", "Imagem de Screenshot: ");
define("_AM_WFD_MOD_FILESIZE", "Tamanho do Arquivo: ");
define("_AM_WFD_MOD_PLATFORM", "Plataforma do Software: ");
define("_AM_WFD_MOD_PRICE", "Pre�o: ");
define("_AM_WFD_MOD_LICENCE", "Licen�a de Software: ");
define("_AM_WFD_MOD_DESCRIPTION", "Limita��es de Software: ");
define("_AM_WFD_MOD_REQUIREMENTS", "Requisitos: ");
define("_AM_WFD_MOD_MODIFYSUBMITTER", "Enviado por: ");
define("_AM_WFD_MOD_MODIFYSUBMIT", "Enviar");
define("_AM_WFD_MOD_PROPOSED", "Detalhes Propostos");
define("_AM_WFD_MOD_ORIGINAL", "Detalhes Originais do Download");
define("_AM_WFD_MOD_REQDELETED", "Pedido de modifica��o removido do Banco de Dados");
define("_AM_WFD_MOD_REQUPDATED", "Download modificado e Banco de Dados atualizado com sucesso");
define('_AM_WFD_MOD_VIEW','Visualizar');
define("_AM_WFD_MOD_FILENAME", "Nome do arquivo local: ");
define("_AM_WFD_MOD_FILETYPE", "Tipo do arquivo Local: ");
define("_AM_WFD_MOD_STATUS", "Status: ");
define("_AM_WFD_MOD_RATING", "Avalia��o: ");
define("_AM_WFD_MOD_HITS", "Hits: ");
define("_AM_WFD_MOD_VOTES", "Votos: ");
define("_AM_WFD_MOD_COMMENTS", "Coment�rios: ");
define("_AM_WFD_MOD_PUBLISHED", "Publicado: ");
define("_AM_WFD_MOD_EXPIRED", "Expirado: ");
define("_AM_WFD_MOD_UPDATED", "Atualizado: ");
define("_AM_WFD_MOD_OFFLINE", "Offline: ");
define("_AM_WFD_MOD_REQUESTDATE", "Data do pedido: ");
define("_AM_WFD_MOD_IPADDRESS", "IP: ");
define("_AM_WFD_MOD_NOTIFYPUB", "Notifica��o: ");
define("_AM_WFD_MOD_PAYPALEMAIL", "PayPal Email: ");
define("_AM_WFD_MOD_SUMMARY", "Sum�rio: ");

//Reviews defines
define("_AM_WFD_REV_SNEWMNAMEDESC", "Aprovar Avalia��o: ");
define("_AM_WFD_REV_ID", "ID");
define("_AM_WFD_REV_TITLE", "T�tulo");
define("_AM_WFD_REV_REVIEWTITLE", "Revis�o do T�tulo");
define("_AM_WFD_REV_POSTER", "Enviado por");
define("_AM_WFD_REV_SUBMITDATE", "Enviado a");
define("_AM_WFD_REV_FTITLE", "T�tulo da Avalia��o: ");
define("_AM_WFD_REV_FRATING", "Ranking da Avalia��o: ");
define("_AM_WFD_REV_FDESCRIPTION", "Descri��o da Avalia��o: ");
define("_AM_WFD_REV_FAPPROVE", "Aprovar Avalia��o: ");
define("_AM_WFD_REV_ACTION", "A��o");
define("_AM_WFD_REV_NOWAITINGREVIEWS", "Nenhuma Avalia��o em espera");
define("_AM_WFD_REVIEW_APPROVETHIS", "Aprovar Avalia��o");
define("_AM_WFD_REV_NOPUBLISHEDREVIEWS", "N�o foram encontradas avalia��es publicadas");
define("_AM_WFD_REV_REVIEW_UPDATED", "Avalia��o escolhida foi modificada e BD atualizado com sucesso.");
define("_AM_WFD_REV_REVIEW_TOTAL", "Total de Avalia��es:");
define("_AM_WFD_REV_REVIEW_WAITING", "Avalia��es em Espera");
define("_AM_WFD_REV_REVIEW_PUBLISHED", "Avalia��es Publicadas");

//File management
define("_AM_WFD_FILE_SUBMITTERID", "Enviado pelo Usu�rio: <br /><br />Deixe isto como est�, a menos que voc� queira alterar quem submeteu o download"); //GibaPhp
define("_AM_WFD_FILE_ID", "ID de Arquivo: ");
define("_AM_WFD_FILE_IP", "Endere�o IP : ");
define("_AM_WFD_FILE_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Extens�es Permitidas</b>:</div>");
define("_AM_WFD_FILE_MODIFYFILE", "Modificar Informa��es de Arquivo");
define("_AM_WFD_FILE_CREATENEWFILE", "Criar novo Arquivo");
define("_AM_WFD_FILE_TITLE", "T�tulo do Arquivo: ");
define("_AM_WFD_FILE_DLURL", "URL do Arquivo: ");
define("_AM_WFD_FILE_FILENAME", "Nome do arquivo: ");
define("_AM_WFD_FILE_FILETYPE", "Tipo do Arquivo: ");
define("_AM_WFD_FILE_MIRRORURL", "Mirror do Arquivo: ");
define("_AM_WFD_FILE_SUMMARY", "Descri��o: ");
define("_AM_WFD_FILE_DESCRIPTION", "Descri��o do Arquivo: ");
define("_MD_WFD_FILE_SUMMARY", "Sum�rio do Arquivo: ");
define("_AM_WFD_FILE_DUPLOAD", " Enviar Arquivo:");
define("_AM_WFD_FILE_CATEGORY", "Selecionar Categoria: ");
define("_AM_WFD_FILE_HOMEPAGETITLE", "T�tulo Home Page: ");
define("_AM_WFD_FILE_HOMEPAGE", "Home Page: "); //GibaPhp
define("_AM_WFD_FILE_SIZE", "Tamanho do Arquivo: ");
define("_AM_WFD_FILE_VERSION", "Vers�o do Arquivo: "); //GibaPhp
define("_AM_WFD_FILE_VERSIONTYPES", "Status de Atualiza��o: "); //GibaPhp
define("_AM_WFD_FILE_PUBLISHER", "Publicado por: ");
define("_AM_WFD_FILE_PLATFORM", "Plataformas Suportadas: ");
define("_AM_WFD_FILE_LICENCE", "Licen�a do Software: ");
define("_AM_WFD_FILE_LIMITATIONS", "Limita��o do Software: ");
define("_AM_WFD_FILE_PRICE", "Pre�o: ");
define("_AM_WFD_FILE_KEYFEATURES", "Fun��es Chave:<br /><br /><span style='font-weight: normal;'>Separar cada fun��o com uma |</span>");
define("_AM_WFD_FILE_REQUIREMENTS", "Requisitos de Sistema:<br /><br /><span style='font-weight: normal;'>Separar cada requisito com uma |</span>");
define("_AM_WFD_FILE_HISTORY", "Editar Hist�rico de Download:<br /><br /><span style='font-weight: normal;'>Adicionar novo Hist�rico de download. S� usar se precisar de alterar Hist�rico antigo</span>");
define("_AM_WFD_FILE_HISTORYD", "Adicionar Novo Hist�rico:<br /><br /><span style='font-weight: normal;'>A vers�o e a data ser�o automaticamente adicionadas</span>");
define("_AM_WFD_FILE_HISTORYVERS", "<b>Vers�o: </b>");
define("_AM_WFD_FILE_HISTORDATE", " <b>Atualizado:</b> ");
define("_AM_WFD_FILE_FILESSTATUS", " Colocar como Offline?<br /><br /><span style='font-weight: normal;'>Download n�o vai estar vis�vel.</span>");
define("_AM_WFD_FILE_SETASUPDATED", " Definir Status como Atualizado?<br /><br /><span style='font-weight: normal;'>Download vai mostrar �cone de Atualizado.</span>");
define("_AM_WFD_FILE_SHOTIMAGE", "Selecionar Imagem de Screenshot: ");
define("_AM_WFD_FILE_DISCUSSINFORUM", "Discutir download no f�rum?");
define("_AM_WFD_FILE_PUBLISHDATE", "Data de Publica��o:");
define("_AM_WFD_FILE_EXPIREDATE", "Data de Expira��o:");
define("_AM_WFD_FILE_CLEARPUBLISHDATE", "<br /><br />Remover Data de Publica��o:");
define("_AM_WFD_FILE_CLEAREXPIREDATE", "<br /><br />Remover Data de Expira��o:");
define("_AM_WFD_FILE_PUBLISHDATESET", " Data de Publica��o Atual: ");
define("_AM_WFD_FILE_SETDATETIMEPUBLISH", " Inserir data/hora de Publica��o");
define("_AM_WFD_FILE_SETDATETIMEEXPIRE", " Inserir data/hora de Expira��o");
define("_AM_WFD_FILE_SETPUBLISHDATE", "<b>Inserir data em que dever� ser Publicado: </b>");
define("_AM_WFD_FILE_SETNEWPUBLISHDATE", "<b>Nova data em que dever� ser Publicado: </b><br />Publicado a:");
define("_AM_WFD_FILE_SETPUBDATESETS", "<b>Data de Futura Publica��o: </b><br />Publicar-se-� a:");
define("_AM_WFD_FILE_EXPIREDATESET", " Data de Expira��o Atual: ");
define("_AM_WFD_FILE_SETEXPIREDATE", "<b>Inserir data a que dever� Expirar: </b>");
define("_AM_WFD_FILE_MUSTBEVALID", "Imagem de Screenshot tem que ter formato v�lido e estar na pasta %s (ex. shot.gif). Deixe em branco se n�o houver screenshot.");
define("_AM_WFD_FILE_EDITAPPROVE", "Aprovar Download:");
define("_AM_WFD_FILE_NEWFILEUPLOAD", "Novo arquivo criado e BD atualizado com sucesso");
define("_AM_WFD_FILE_FILEMODIFIEDUPDATE", "Arquivo selecionado foi modificado e BD atualizado com sucesso");
define("_AM_WFD_FILE_REALLYDELETEDTHIS", "REMOVER o arquivo selecionado?");
define("_AM_WFD_FILE_FILEWASDELETED", "Arquivo %s removido do BD!");
define("_AM_WFD_FILE_USE_UPLOAD_TITLE", " Usar nome do arquivo para T�tulo.");
define("_AM_WFD_FILE_FILEAPPROVED", "Arquivo aprovado e BD atualizado com sucesso");
define("_AM_WFD_FILE_CREATENEWSSTORY", "<b>Criar Not�cia a partir do download</b>");
define("_AM_WFD_FILE_SUBMITNEWS", "Enviar novo arquivo como Not�cia?");
define("_AM_WFD_FILE_NEWSCATEGORY", "Selecione a categoria de Not�cias para a qual deve ser enviada:");
define("_AM_WFD_FILE_NEWSTITLE", "T�tulo de Not�cia:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Deixe em branco ou use T�tulo do Arquivo</span></div>");

/*
* Broken downloads defines
*/
define("_AM_WFD_SBROKENSUBMIT", "Corrompido: ");
define("_AM_WFD_BROKEN_FILE", "Relat�rio de Corrompidos");
define("_AM_WFD_BROKEN_FILEIGNORED", "Relat�rio ignorado e removido do BD!");
define("_AM_WFD_BROKEN_NOWACK", "Status Recebido modificado e BD atualizado!");
define("_AM_WFD_BROKEN_NOWCON", "Status Atual modificado e BD atualizado!");
define("_AM_WFD_BROKEN_REPORTINFO", "Informa��o de Relat�rio Corrompido");
define("_AM_WFD_BROKEN_REPORTSNO", "Relat�rios em Espera:");
define("_AM_WFD_BROKEN_IGNOREDESC", "<b>Ignora</b> o relat�rio e remove.");
define("_AM_WFD_BROKEN_IGNORE_ALT", "<b>Ignorar</b> e apagar o arquivo quebrado do relat�rio"); //GibaPhp
define("_AM_WFD_BROKEN_DELETEDESC", "<b>Apaga</b> o download e o relat�rio.");
define("_AM_WFD_BROKEN_DELETE_ALT", "<b>Apagar</b> os dados reportados neste download quebrado e tamb�m no arquivo deste relat�rio"); //GibaPhp
define("_AM_WFD_BROKEN_EDITDESC", "<b>Edita</b> o download para corrigir o problema.");
define("_AM_WFD_BROKEN_EDIT_ALT", "Editar o download para corrigir o problema");
define("_AM_WFD_BROKEN_ACKDESC", "<b>Recebido</b> - declara que o relat�rio foi recebido."); //GibaPhp
define("_AM_WFD_BROKEN_ACK_ALT", "Reconhe�o o estado deste arquivo neste relat�rio"); //GibaPhp
define("_AM_WFD_BROKEN_CONFIRMDESC", "<b>Confirmado</b> - confirma o recebimento do relat�rio."); //GibaPhp
define("_AM_WFD_BROKEN_CONFIRM_ALT", "Confirme o estado do arquivo no relat�rio"); //GibaPhp

define("_AM_WFD_BROKEN_ID", "ID");
define("_AM_WFD_BROKEN_TITLE", "T�tulo");
define("_AM_WFD_BROKEN_REPORTER", "Informado por");
define("_AM_WFD_BROKEN_FILESUBMITTER", "Enviado por");
define("_AM_WFD_BROKEN_DATESUBMITTED", "Data de Envio");
define("_AM_WFD_BROKEN_ACTION", "A��o");
define("_AM_WFD_BROKEN_NOFILEMATCH", "N�o existem Relat�rios com estas caracter�sticas");
define("_AM_WFD_BROKENFILEDELETED", "Descri��o de Download removida e Relat�rio apagado do BD");
define("_AM_WFD_BROKEN_DOWNLOAD_DONT_EXISTS", "O arquivo n�o existe mais.");


/*
* About defines
*/
define("_AM_WFD_BY", "De");

//block defines
define("_AM_WFD_BADMIN","Administra��o de Blocos");
define("_AM_WFD_BLKDESC","Descri��o");
define("_AM_WFD_TITLE","T�tulo");
define("_AM_WFD_SIDE","Alinhamento");
define("_AM_WFD_WEIGHT","Import�ncia");
define("_AM_WFD_VISIBLE","Vis�vel");
define("_AM_WFD_ACTION","A��o");
define("_AM_WFD_SBLEFT","Esquerda");
define("_AM_WFD_SBRIGHT","Direita");
define("_AM_WFD_CBLEFT","Centro-Esq");
define("_AM_WFD_CBRIGHT","Centro-Dir");
define("_AM_WFD_CBCENTER","Centro-Centro");
define("_AM_WFD_ACTIVERIGHTS","Direito de Ativar");
define("_AM_WFD_ACCESSRIGHTS","Direito de Acessar");

//image admin icon
define("_AM_WFD_ICO_EDIT","Editar este Item");
define("_AM_WFD_ICO_DELETE","Apagar este Item");
define("_AM_WFD_ICO_ONLINE","Online");
define("_AM_WFD_ICO_OFFLINE","Offline");
define("_AM_WFD_ICO_APPROVED","Aprovado");
define("_AM_WFD_ICO_NOTAPPROVED","N�o Aprovado");

define("_AM_WFD_ICO_LINK","Link Correspondente");
define("_AM_WFD_ICO_URL","Adicionar URL Correspondente");
define("_AM_WFD_ICO_ADD","Adicionar");
define("_AM_WFD_ICO_APPROVE","Aprovar");
define("_AM_WFD_ICO_STATS","Estat�sticas");

define("_AM_WFD_ICO_IGNORE","Ignorar");
define("_AM_WFD_ICO_ACK","Relat�rio de Corrompido Recebido");
define("_AM_WFD_ICO_REPORT","Receber Relat�rio de Corrompido?");
define("_AM_WFD_ICO_CONFIRM","Relat�rio de Corrompido Confirmado");
define("_AM_WFD_ICO_CONBROKEN","Confirmar Relat�rio de Corrompido?");





define("_AM_WFD_DB_IMPORT", "Importar");
define("_AM_WFD_DB_CURRENTVER", "Vers�o Atual: <span class='currentVer'>%s</span>");
define("_AM_WFD_DB_DBVER", "Vers�o Banco de Dados %s");
define("_AM_WFD_DB_MSG_ADD_DATA", "Dados foram adicionados a tabela %s");
define("_AM_WFD_DB_MSG_ADD_DATA_ERR", "Erro! Os dados n�o foram adicionados a tabela %s");
define("_AM_WFD_DB_MSG_CHGFIELD", "Alterando campo %s na tabela %s");
define("_AM_WFD_DB_MSG_CHGFIELD_ERR", "Erro na altera��o de campo %s na tabela %s");
define("_AM_WFD_DB_MSG_CREATE_TABLE", "Tabela %s criada");
define("_AM_WFD_DB_MSG_CREATE_TABLE_ERR", "Erro na cria��o da tabela %s");
define("_AM_WFD_DB_MSG_NEWFIELD", "Campo %s adicionado(s) com sucesso");
define("_AM_WFD_DB_MSG_NEWFIELD_ERR", "Erro ao adicionar campo %s");
define("_AM_WFD_DB_NEEDUPDATE", "Seu BD est� desatualizado. Por favor atualize as tabelas de seu banco de dados!<br><b>ATEN�AO : SmartFactory recomenda enfaticamente que voc� fa�a um backup de todas as tabelas ANTES de aplicar o script de atualiza��o.</b><br>");
define("_AM_WFD_DB_NOUPDATE", "Sua Base de dados � a mas recente. N�o � necess�rio atualizar .");
define("_AM_WFD_DB_UPDATE_DB", "Atualizar Banco de Dados");
define("_AM_WFD_DB_UPDATE_ERR", "Erro ao atualizar vers�o %s");
define("_AM_WFD_DB_UPDATE_NOW", "Atualizar Agora!");
define("_AM_WFD_DB_UPDATE_OK", "Vers�o Atualizada com Sucesso %s");
define("_AM_WFD_DB_UPDATE_TO", "Atualizar � vers�o %s");

define("_AM_WFD_GOMOD", "Ir para M�dulo");
define("_AM_WFD_UPDATE_MODULE", "Atualizar Modulo");
define("_AM_WFD_MDOWNLOADS","Administra��o de Arquivos");
define("_AM_WFD_DB_MSG_UPDATE_TABLE", "Atualizar valores dos campos em %s");
define("_AM_WFD_DB_MSG_UPDATE_TABLE_ERR", "Erro ao atualizar valores dos campos em %s");

// Mirrors
// waiting mirrors
define("_AM_WFD_AMIRRORS", "Gerenciamento de Mirrors");
define("_AM_WFD_AMIRRORS_WAITING", "Mirrors aguardando valida��o:");
define("_AM_WFD_AMIRRORS_INFO", "Informa��es de Gerenciamento de Mirrors");
define("_AM_WFD_AMIRRORS_APPROVE", "<b>Aprovar</b> novo mirror sem valida��o.");
define("_AM_WFD_AMIRRORS_EDIT", "<b>Editar</b> novo mirror e ent�o aprovar.");
define("_AM_WFD_AMIRRORS_DELETE", "<b>Apagar</b> a nova informa��o do mirror.");

//mirrors defines
define("_AM_WFD_MIRROR_MIRRORTITLE", "Url do Mirror");
define("_AM_WFD_MIRROR_NOPUBLISHEDMIRRORS", "N�o foram encontrados Mirrors publicados");
define("_AM_WFD_MIRROR_MIRROR_TOTAL", "Total de Mirrors:");
define("_AM_WFD_MIRROR_MIRROR_WAITING", "Mirrors Aguardando");
define("_AM_WFD_MIRROR_MIRROR_PUBLISHED", "Mirrors publicados");
define("_AM_WFD_MIRROR_SNEWMNAMEDESC", "Aprovar Mirror: ");
define("_AM_WFD_MIRROR_ID", "ID");
define("_AM_WFD_MIRROR_TITLE", "T�tulo");
define("_AM_WFD_MIRROR_MUSTBEVALID", "O logo da home page deve ser um arquivo de imagem v�lido no %s diret�rio (ex. shot.gif). Deixe em branco se n�o houver arquivo de imagem.");
define("_AM_WFD_MIRROR_POSTER", "Enviado por");
define("_AM_WFD_MIRROR_SUBMITDATE", "Submetido");
define("_AM_WFD_MIRROR_FHOMEURLTITLE", "T�tulo da Home Page: ");
define("_AM_WFD_MIRROR_FHOMEURL", "URL da Home Page: ");
define("_AM_WFD_MIRROR_UPLOADIMAGE", "Fazer upload do logo do site:<br /><br />Pequeno logo representativo do seu site.");
define("_AM_WFD_MIRROR_MIRRORIMAGE", "Logo do Site:");
define("_AM_WFD_MIRROR_CONTINENT", "Continente:");
define("_AM_WFD_MIRROR_LOCATION", "Localidade:<br /><br />Exemplo: Rio de Janeiro, BR");
define("_AM_WFD_MIRROR_DOWNURL", "URL do Download:<br /><br />Digite a URL do arquivo.");
define("_AM_WFD_MIRROR_FAPPROVE", "Aprovar Mirror: ");
define("_AM_WFD_MIRROR_ACTION", "A��o");
define("_AM_WFD_MIRROR_NOWAITINGMIRRORS", "N�o h� mirrors em espera");
define("_AM_WFD_MIRROR_MIRROR_UPDATED", "Mirror selecionado modificado e BD atualizado com sucesso");
define("_AM_WFD_MIRROR_APPROVETHIS", "Aprovar Mirror");

//continents (used in mirrors page)
define("_AM_WFD_CONT1","Africa");
define("_AM_WFD_CONT2","Antarctica");
define("_AM_WFD_CONT3","Asia");
define("_AM_WFD_CONT4","Europa");
define("_AM_WFD_CONT5","Am�rica do Norte");
define("_AM_WFD_CONT6","Am�rica do Sul");
define("_AM_WFD_CONT7","Oceania");

define("_AM_WFD_HELP","Ajuda");


// added - start - March 4 2006 - jpc
define("_AM_WFD_FFS_SUBMITBROKEN", "Enviar");
define("_AM_WFD_FFS_STANDARD_FORM", "N�o, usa o formul�rio padr�o");
define("_AM_WFD_FFS_CUSTOM_FORM", "Usar um formul�rio feito sob encomenda para esta categoria?");
define("_AM_WFD_FFS_DOWNLOADTITLE", "Adicionar uma arquivo.");
define("_AM_WFD_FFS_EDITDOWNLOADTITLE", "Editando uma arquivo.");
define("_AM_WFD_FFS_BACK", "Voltar"); //GibaPhp
define("_AM_WFD_FFS_RELOAD", "Atualizar");


define("_MD_WFD_CATEGORYC", "Categoria: ");  // _MD to reuse the category form
define("_MD_WFD_FFS_SUBMITCATEGORYHEAD", "Em qual categoria, voc� quer enviar o arquivo?");
define("_MD_WFD_FFS_DOWNLOADDETAILS", "Detalhes do Download:");
define("_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS", "Detalhes Customizados:");
define("_MD_WFD_FILETITLE", "Titulo do Download: ");
define("_MD_WFD_DLURL", "URL Download: ");
define("_MD_WFD_UPLOAD_FILEC", "Enviar Arquivo: ");
define("_MD_WFD_DESCRIPTION", "Descri��o");
// added - end - March 4 2006 - jpc

define("_AM_WFD_MINDEX_LOG", "Logs");
define("_MD_WFD_IP_LOGS", "Ver logs");
define("_MD_WFD_EMPTY_LOG", "N�o existem Logs.");
define("_MD_WFD_LOG_FOR_LID", "Aqui est� uma lista dos downloaders e endere�o IP para %s");
define("_MD_WFD_IP_ADDRESS", "IP");
define("_MD_WFD_DATE", "Data do Download");
define("_MD_WFD_BACK", "<< Voltar");
define("_MD_WFD_USER", "Usu�rio");
define("_MD_WFD_ANONYMOUS", "Usu�rio An�nimo");
?>