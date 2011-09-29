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
define("_AM_WFD_BRETURN", "Voltar para onde você estava!");
define("_AM_WFD_DBERROR", "Erro ao acessar o BD: Favor reportar erro no site do WF-Downloads");
//Banned Users
define("_AM_WFD_NONBANNED", "Não Banido");
define("_AM_WFD_BANNED", "Banido");
define("_AM_WFD_EDITBANNED", "Editar Membros Banidos");
// Other Options
define("_AM_WFD_TEXTOPTIONS", "Opções de Texto:");
define("_AM_WFD_ALLOWHTML", " Permitir Tags HTML");
define("_AM_WFD_ALLOWSMILEY", " Permitir Smilies");
define("_AM_WFD_ALLOWXCODE", " Permitir BBcodes");
define("_AM_WFD_ALLOWIMAGES", " Permitir imagens");
define("_AM_WFD_ALLOWBREAK", " Usar conversão de 'quebra de linha' ?"); //GibaPhp 
define("_AM_WFD_UPLOADFILE", "Arquivo carregado com sucesso");
define("_AM_WFD_NOMENUITEMS", "Nenhum sub-item dentro do menu");

// Admin Bread crumb
define("_AM_WFD_PREFS", "Preferências");
define("_AM_WFD_PERMISSIONS", "Permissões");
define("_AM_WFD_BINDEX", "Índice Principal");
define("_AM_WFD_BLOCKADMIN", "Blocos");
define("_AM_WFD_GOMODULE", "Ir para o Módulo");
define("_AM_WFD_BHELP", "Ajuda");
define("_AM_WFD_ABOUT", "Sobre");
// Admin Summary
define("_AM_WFD_SCATEGORY", "Categoria: ");
define("_AM_WFD_SFILES", "Arquivos: ");
define("_AM_WFD_SNEWFILESVAL", "Enviados: ");
define("_AM_WFD_SMODREQUEST", "Modificados: ");
define("_AM_WFD_SREVIEWS", "Avaliações: ");
define("_AM_WFD_SMIRRORS", "Mirrors:");
// Admin Main Menu
define("_AM_WFD_MCATEGORY", "Administração de Categorias");
define("_AM_WFD_INDEXPAGE", "Administração Principal"); //GibaPhp
define("_AM_WFD_MUPLOADS", "Enviar Imagens");
define("_AM_WFD_MMIMETYPES", "Administração de Mimetypes");
define("_AM_WFD_MCOMMENTS", "Comentários");
define("_AM_WFS_MVOTEDATA", "Votações");
// waiting reviews
define("_AM_WFD_AREVIEWS", "Administração de Avaliações");
define("_AM_WFD_AREVIEWS_WAITING", "Avaliações aguardando Aprovação:");
define("_AM_WFD_AREVIEWS_INFO", "Revisões e Avaliações na Administração"); //GibaPhp
define("_AM_WFD_AREVIEWS_APPROVE", "<b>Aprovar</b> novas Avaliações sem validação.");
define("_AM_WFD_AREVIEWS_APPROVED", "Avaliação foi aprovada."); //GibaPhp
define("_AM_WFD_AREVIEWS_EDIT", "<b>Editar</b> novas Avaliações e depois Aprovar.");
define("_AM_WFD_AREVIEWS_DELETE", "<b>Apagar</b> novas informações de Avaliação.");

// Catgeory defines
define("_AM_WFD_CCATEGORY_CREATENEW", "Criar nova Categoria");
define("_AM_WFD_CCATEGORY_MODIFY", "Modificar Categoria");
define("_AM_WFD_CCATEGORY_MOVE", "Mover Arquivos de Categoria");
define("_AM_WFD_CCATEGORY_MODIFY_TITLE", "Título da Categoria:");
define("_AM_WFD_CCATEGORY_MODIFY_FAILED", "Falhou a movimentação: Não é possível mover para esta Categoria"); //GibaPhp
define("_AM_WFD_CCATEGORY_MODIFY_FAILEDT", "Falha ao Mover Arquivos: Categoria não encontrada");
define("_AM_WFD_CCATEGORY_MODIFY_MOVED", "Arquivos Movidos");
define("_AM_WFD_CCATEGORY_CREATED", "Nova categoria Criada e Banco de Dados atualizado com sucesso"); //GibaPhp
define("_AM_WFD_CCATEGORY_MODIFIED", "Categoria selecionada foi Modificada e Banco de Dados atualizado com sucesso"); //GibaPhp
define("_AM_WFD_CCATEGORY_DELETED", "Categoria selecionada apagada e Banco de Dados Atualizado com sucesso");
define("_AM_WFD_CCATEGORY_AREUSURE", "Atenção: Tem a certeza que quer apagar esta categoria e <b>TODOS</b> os seus arquivos e comentários?");
define("_AM_WFD_CCATEGORY_NOEXISTS", "É necessario criar uma Categoria antes de incluir um arquivo"); //GibaPhp
define("_AM_WFD_FCATEGORY_GROUPPROMPT", "Permissões de Acesso às Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos que podem acessar esta categoria.</span></div>");
define("_AM_WFD_FCATEGORY_TITLE", "Titulo da Categoria:");
define("_AM_WFD_FCATEGORY_WEIGHT", "Importância da Categoria:");
define("_AM_WFD_FCATEGORY_SUBCATEGORY", "Sub-Categoria:"); //GibaPhp
define("_AM_WFD_FCATEGORY_CIMAGE", "Selecionar Imagem da Categoria:");
define("_AM_WFD_FCATEGORY_DESCRIPTION", "Descrição da Categoria:");
define("_AM_WFD_FCATEGORY_SUMMARY", "Sumário da Categoria:");
define("_AM_WFD_CCATEGORY_CHILDASPARENT", "Você não pode configurar uma sub-categoria como categoria principal");
/*
* Index page Defines
*/
define("_AM_WFD_IPAGE_UPDATED", "Página Inícial Modificada e o Banco de Dados atualizado com sucesso!"); //GibaPhp
define("_AM_WFD_IPAGE_INFORMATION", "Informação Principal"); //GibaPhp
define("_AM_WFD_IPAGE_MODIFY", "Modificar página Inicial"); //GibaPhp
define("_AM_WFD_IPAGE_CIMAGE", "Selecionar Imagem da página Inicial:"); //GibaPhp
define("_AM_WFD_IPAGE_CTITLE", "Titulo:");
define("_AM_WFD_IPAGE_CHEADING", "Cabeçalho:");
define("_AM_WFD_IPAGE_CHEADINGA","Alinhar Cabeçalho:"); //GibaPhp
define("_AM_WFD_IPAGE_CFOOTER", "Rodapé:");
define("_AM_WFD_IPAGE_CFOOTERA", "Alinhar Rodapé:"); //GibaPhp
define("_AM_WFD_IPAGE_CLEFT", "Alinhar à esquerda");
define("_AM_WFD_IPAGE_CCENTER", "Alinhar ao centro");
define("_AM_WFD_IPAGE_CRIGHT", "Alinhar à direita");

/*
*  Permissions defines
*/
define("_AM_WFD_PERM_MANAGEMENT", "Gerenciar Permissões"); //GibaPhp
define("_AM_WFD_PERM_PERMSNOTE", "<div><b>NOTA:</b>Mesmo que as permissões sejam definidas corretamente aqui, um grupo pode não ter acesso ao Módulo ou aos Blocos se não for definido o acesso ao módulo. Para o fazê-lo, vá em <b>Sistema Administração - > Grupos</b>, escolha o grupo apropriado e dê-lhe acesso ao módulo.</div>"); //GibaPhp
define("_AM_WFD_PERM_CPERMISSIONS", "Permissões da Categoria"); //GibaPhp
define("_AM_WFD_PERM_CSELECTPERMISSIONS", "Selecione as categorias que cada grupo pode visualizar");
define("_AM_WFD_PERM_CNOCATEGORY", "Não foi possível ajustar permissões porque não há categorias criadas!");
define("_AM_WFD_PERM_FPERMISSIONS", "Permissões de Arquivos");
define("_AM_WFD_PERM_FNOFILES", "Não foi possível ajustar permissões porque não há arquivos!");
define("_AM_WFD_PERM_FSELECTPERMISSIONS", "Selecione os arquivos que cada grupo pode visualizar");
/*
* Upload defines
*/
define("_AM_WFD_DOWN_IMAGEUPLOAD", "Imagem atualizada e enviada com sucesso para o servidor");
define("_AM_WFD_DOWN_NOIMAGEEXIST", "Erro: Não foi selecionado nenhum arquivo para upload.  Por favor, tente novamente!");
define("_AM_WFD_DOWN_IMAGEEXIST", "Imagem já existe na pasta de uploads!");
define("_AM_WFD_DOWN_FILEDELETED", "Arquivo foi apagado.");
define("_AM_WFD_DOWN_FILEERRORDELETE", "Erro ao apagar arquivo: Arquivo não encontrado.");
define("_AM_WFD_DOWN_NOFILEERROR", "Erro ao apagar arquivo: Nenhum Arquivo foi selecionado.");
define("_AM_WFD_DOWN_DELETEFILE", "Atenção: tem certeza que deseja apagar este arquivo de imagem?");
define("_AM_WFD_DOWN_IMAGEINFO", "Status do servidor");
define("_AM_WFD_DOWN_NOTSET", "Caminho do diretório de Upload não escolhido"); //GibaPhp
define("_AM_WFD_DOWN_SERVERPATH", "Caminho para o Raiz do Servidor: ");
define("_AM_WFD_DOWN_UPLOADPATH", "Caminho atual para o diretório de Upload: "); //GibaPhp
define("_AM_WFD_DOWN_UPLOADPATHDSC", "Atenção: O caminho dos uploads tem que conter o caminho completo no servidor da sua pasta para uploads.");
define("_AM_WFD_DOWN_SPHPINI", "<b>Informação retirada do arquivo PHP ini:</b>");
define("_AM_WFD_DOWN_METAVERSION", "<b>WF-Downloads Meta Version:</b> ");
define("_AM_WFD_DOWN_SAFEMODESTATUS", "Modo seguro: ");
define("_AM_WFD_DOWN_REGISTERGLOBALS", "Register Globals: ");
define("_AM_WFD_DOWN_SERVERUPLOADSTATUS", "Status de Uploads: ");
define("_AM_WFD_DOWN_MAXUPLOADSIZE", "Tamanho Max de Upload: ");
define("_AM_WFD_DOWN_MAXPOSTSIZE", "Tamanho Max de Post: ");
define("_AM_WFD_DOWN_SAFEMODEPROBLEMS", " (Isto pode causar problemas)");
define("_AM_WFD_DOWN_GDLIBSTATUS", "Suporte Biblioteca GD: ");
define("_AM_WFD_DOWN_GDLIBVERSION", "Versão Biblioeca GD: ");
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
define("_AM_WFD_MINDEX_DOWNSUMMARY", "Sumário de Administração do Módulo");
define("_AM_WFD_MINDEX_PUBLISHEDDOWN", "Arquivos Publicados:");
define("_AM_WFD_MINDEX_AUTOPUBLISHEDDOWN", "Publicação Automática:"); //GibaPhp
define("_AM_WFD_MINDEX_AUTOEXPIRE", "Arquivos Expirados:");
define("_AM_WFD_MINDEX_OFFLINEDOWN", "Arquivos Ofline:");
define("_AM_WFD_MINDEX_ID", "ID");
define("_AM_WFD_MINDEX_TITLE", "Titulo do Arquivo");
define("_AM_WFD_MINDEX_POSTER", "Enviado por");
define("_AM_WFD_MINDEX_SUBMITTED", "Data de Envio");
define("_AM_WFD_MINDEX_ONLINESTATUS", "Status");
define("_AM_WFD_MINDEX_PUBLISHED", "Publicado");
define("_AM_WFD_MINDEX_ACTION", "Ação");
define("_AM_WFD_MINDEX_NODOWNLOADSFOUND", "NOTIFICAÇÃO:  Não existe arquivo que satisfaz os critérios");
define("_AM_WFD_MINDEX_PAGE", "<b>Página:<b> ");
define('_AM_WFD_MINDEX_PAGEINFOTXT', '<ul><li>WF-Downloads: detalhes da página principal.</li><li>Você pode facilmente alterar o logo, o cabeçalho, o índice ou o texto do rodape para ficar adequado à você</li></ul><br /><br />Nota: O Logo escolhido será usado por todo o WF-DOWNLOADS.');

// Submitted Files
define("_AM_WFD_SUB_SUBMITTEDFILES", "Arquivos Enviados");
define("_AM_WFD_SUB_FILESWAITINGINFO", "Informação de arquivos em espera");
define("_AM_WFD_SUB_FILESWAITINGVALIDATION", "Validação de arquivos em espera: ");
define("_AM_WFD_SUB_APPROVEWAITINGFILE", "<b>Aprovar</b> informações de novo arquivo sem validação.");
define("_AM_WFD_SUB_EDITWAITINGFILE", "<b>Editar</b> novas informações de arquivo e aprovar.");
define("_AM_WFD_SUB_DELETEWAITINGFILE", "<b>Remover</b> novas informações de arquivo.");
define("_AM_WFD_SUB_NOFILESWAITING", "Não há arquivos que correspondem a estas características.");
define("_AM_WFD_SUB_NEWFILECREATED", "Novo Arquivo criado e Banco de Dados atualizado com sucesso.");
// Mimetypes
define("_AM_WFD_MIME_ID", "ID");
define("_AM_WFD_MIME_EXT", "EXT");
define("_AM_WFD_MIME_NAME", "Tipo de Aplicação");
define("_AM_WFD_MIME_ADMIN", "Admin");
define("_AM_WFD_MIME_USER", "Usuário");
// Mimetype Form
define("_AM_WFD_MIME_CREATEF", "Criar Mimetype");
define("_AM_WFD_MIME_MODIFYF", "Modificar Mimetype");
define("_AM_WFD_MIME_EXTF", "Extensão do Arquivo:");
define("_AM_WFD_MIME_NAMEF", "Tipo/Nome de Aplicação:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Escolher aplicação associada a este tipo de arquivo.</span></div>");
define("_AM_WFD_MIME_TYPEF", "Mimetypes:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Insira cada mimetype associado ao tipo de arquivo. Cada mimetype deve estar separado por um espaço.</span></div>");
define("_AM_WFD_MIME_ADMINF", "Permitir administrar Mimetype"); //GibaPhp
define("_AM_WFD_MIME_ADMINFINFO", "<b>Mimetypes disponiveis para Admin enviar:</b>");
define("_AM_WFD_MIME_USERF", "Permitir envio de Mimetype por Usuários");
define("_AM_WFD_MIME_USERFINFO", "<b>Mimetypes disponiveis para Usuário enviar:</b>");
define("_AM_WFD_MIME_NOMIMEINFO", "Nenhum Mimetype escolhido.");
define("_AM_WFD_MIME_FINDMIMETYPE", "Procurar novo Mimetype:");
define("_AM_WFD_MIME_EXTFIND", "Procurar Extensão de Arquivo:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Escolha extensão que quer procurar.</span></div>");
define("_AM_WFD_MIME_INFOTEXT", "<ul><li>Novos mimetypes podem ser criados,editados ou removidos facilmente por este formulário.</li> 
	<li>Procurar um novo mimetype através de um website externo.</li>
 	<li>Ver mimetypes mostrados para envio do Admin e Usuários.</li> 	
 	<li>Mudar status de envio de mimetypes.</li></ul> 	
 	");

// Mimetype Buttons
define("_AM_WFD_MIME_CREATE", "Criar");
define("_AM_WFD_MIME_CLEAR", "Reiniciar");
define("_AM_WFD_MIME_CANCEL", "Cancelar");
define("_AM_WFD_MIME_MODIFY", "Modificar");
define("_AM_WFD_MIME_DELETE", "Apagar");
define("_AM_WFD_MIME_FINDIT", "Procurar Extensão!");
// Mimetype Database
define("_AM_WFD_MIME_DELETETHIS", "Apagar Mimetypes Seleccionados?");
define("_AM_WFD_MIME_MIMEDELETED", "Os Mimetypes %s foram apagados");
define("_AM_WFD_MIME_CREATED", "Informação do Mimetype Criada");
define("_AM_WFD_MIME_MODIFIED", "Informação do Mimetype Modificada");
// Vote Information
define("_AM_WFD_VOTE_RATINGINFOMATION", "Informação de Votações");
define("_AM_WFD_VOTE_TOTALVOTES", "Total de Votos: ");
define("_AM_WFD_VOTE_REGUSERVOTES", "Votos de Usuários Registrados: %s"); //GibaPhp
define("_AM_WFD_VOTE_ANONUSERVOTES", "Votos de Usuários Anônimos: %s"); //GibaPhp
define("_AM_WFD_VOTE_USER", "Usuário");
define("_AM_WFD_VOTE_IP", "Endereço IP");
define("_AM_WFD_VOTE_USERAVG", "Média de Votos");
define("_AM_WFD_VOTE_TOTALRATE", "Pontuação Total");
define("_AM_WFD_VOTE_DATE", "Votado em");
define("_AM_WFD_VOTE_RATING", "Pontuação");
define("_AM_WFD_VOTE_NOREGVOTES", "Nenhum voto de usuários registrados");
define("_AM_WFD_VOTE_NOUNREGVOTES", "Nenhum voto de usuários anônimos");
define("_AM_WFD_VOTE_VOTEDELETED", "Votação apagada.");
define("_AM_WFD_VOTE_ID", "ID");
define("_AM_WFD_VOTE_FILETITLE", "Título do Arquivo");
define("_AM_WFD_VOTE_DISPLAYVOTES", "Informação de Votação");
define("_AM_WFD_VOTE_NOVOTES", "Nenhum Voto para mostrar");
define("_AM_WFD_VOTE_DELETE", "Apagar Votação");
define("_AM_WFD_VOTE_DELETEDSC", "<b>Apaga</b> a votação seleccionada do Banco de Dados."); //GibaPhp

// Modifications
/*
define("_AM_WFD_MOD_TOTMODREQUESTS", "Pedidos de Modificação: ");
define("_AM_WFD_MOD_MODREQUESTS", "Arquivos Modificados");
define("_AM_WFD_MOD_MODREQUESTSINFO", "Informação de Arquivos Modificados");
define("_AM_WFD_MOD_MODID", "ID");
define("_AM_WFD_MOD_MODTITLE", "Titulo");
define("_AM_WFD_MOD_MODPOSTER", "Enviado Por: ");
define("_AM_WFD_MOD_DATE", "Enviado em");
define("_AM_WFD_MOD_NOMODREQUEST", "Não existem pedidos com estas características");
define("_AM_WFD_MOD_MODIFYSUBMIT", "Enviar");
define("_AM_WFD_MOD_ORIGINAL", "Detalhes Originais do Download");
define("_AM_WFD_MOD_REQDELETED", "Pedido de modificação removido do BD");
define("_AM_WFD_MOD_REQUPDATED", "Download modificado e Banco de Dados atualizado com sucesso"); //GibaPhp

*/
define("_AM_WFD_MOD_TOTMODREQUESTS", "Pedidos de Modificação: ");
define("_AM_WFD_MOD_MODREQUESTS", "Arquivos Modificados");
define("_AM_WFD_MOD_MODREQUESTSINFO", "Informação de Arquivos Modificados");
define("_AM_WFD_MOD_MODID", "ID");
define("_AM_WFD_MOD_MODTITLE", "Titulo");
define("_AM_WFD_MOD_MODPOSTER", "Enviado Por: ");
define("_AM_WFD_MOD_DATE", "Enviado em");
define("_AM_WFD_MOD_NOMODREQUEST", "Não existem pedidos com estas características");
define("_AM_WFD_MOD_TITLE", "Titulo de Download: ");
define("_AM_WFD_MOD_LID", "ID de Download: ");
define("_AM_WFD_MOD_CID", "Categoria: ");
define("_AM_WFD_MOD_URL", "Url de Download: ");
define("_AM_WFD_MOD_MIRROR", "Mirror de Download: ");
define("_AM_WFD_MOD_SIZE", "Tamanho de Download: ");
define("_AM_WFD_MOD_PUBLISHER", "Publicado por: ");
define("_AM_WFD_MOD_LICENSE", "Licença de Software: ");
define("_AM_WFD_MOD_FEATURES", "Funções Chave: ");
define("_AM_WFD_MOD_FORUMID", "Fórum: ");
define("_AM_WFD_MOD_LIMITATIONS", "Limitações de Software: ");
define("_AM_WFD_FILE_VERSIONTYPES", "Status da Atualização: "); //GibaPhp - incluído em 2008-04-10
define("_AM_WFD_MOD_DHISTORY", "Histórico de Download: ");
define("_AM_WFD_MOD_SCREENSHOT", "Imagem de Screenshot: ");
define("_AM_WFD_MOD_HOMEPAGE", "Home Page: ");
define("_AM_WFD_MOD_HOMEPAGETITLE", "Título da Página Principal: ");
define("_AM_WFD_MOD_VERSION", "Versão: ");
define("_AM_WFD_MOD_SHOTIMAGE", "Imagem de Screenshot: ");
define("_AM_WFD_MOD_FILESIZE", "Tamanho do Arquivo: ");
define("_AM_WFD_MOD_PLATFORM", "Plataforma do Software: ");
define("_AM_WFD_MOD_PRICE", "Preço: ");
define("_AM_WFD_MOD_LICENCE", "Licença de Software: ");
define("_AM_WFD_MOD_DESCRIPTION", "Limitações de Software: ");
define("_AM_WFD_MOD_REQUIREMENTS", "Requisitos: ");
define("_AM_WFD_MOD_MODIFYSUBMITTER", "Enviado por: ");
define("_AM_WFD_MOD_MODIFYSUBMIT", "Enviar");
define("_AM_WFD_MOD_PROPOSED", "Detalhes Propostos");
define("_AM_WFD_MOD_ORIGINAL", "Detalhes Originais do Download");
define("_AM_WFD_MOD_REQDELETED", "Pedido de modificação removido do Banco de Dados");
define("_AM_WFD_MOD_REQUPDATED", "Download modificado e Banco de Dados atualizado com sucesso");
define('_AM_WFD_MOD_VIEW','Visualizar');
define("_AM_WFD_MOD_FILENAME", "Nome do arquivo local: ");
define("_AM_WFD_MOD_FILETYPE", "Tipo do arquivo Local: ");
define("_AM_WFD_MOD_STATUS", "Status: ");
define("_AM_WFD_MOD_RATING", "Avaliação: ");
define("_AM_WFD_MOD_HITS", "Hits: ");
define("_AM_WFD_MOD_VOTES", "Votos: ");
define("_AM_WFD_MOD_COMMENTS", "Comentários: ");
define("_AM_WFD_MOD_PUBLISHED", "Publicado: ");
define("_AM_WFD_MOD_EXPIRED", "Expirado: ");
define("_AM_WFD_MOD_UPDATED", "Atualizado: ");
define("_AM_WFD_MOD_OFFLINE", "Offline: ");
define("_AM_WFD_MOD_REQUESTDATE", "Data do pedido: ");
define("_AM_WFD_MOD_IPADDRESS", "IP: ");
define("_AM_WFD_MOD_NOTIFYPUB", "Notificação: ");
define("_AM_WFD_MOD_PAYPALEMAIL", "PayPal Email: ");
define("_AM_WFD_MOD_SUMMARY", "Sumário: ");

//Reviews defines
define("_AM_WFD_REV_SNEWMNAMEDESC", "Aprovar Avaliação: ");
define("_AM_WFD_REV_ID", "ID");
define("_AM_WFD_REV_TITLE", "Título");
define("_AM_WFD_REV_REVIEWTITLE", "Revisão do Título");
define("_AM_WFD_REV_POSTER", "Enviado por");
define("_AM_WFD_REV_SUBMITDATE", "Enviado a");
define("_AM_WFD_REV_FTITLE", "Título da Avaliação: ");
define("_AM_WFD_REV_FRATING", "Ranking da Avaliação: ");
define("_AM_WFD_REV_FDESCRIPTION", "Descrição da Avaliação: ");
define("_AM_WFD_REV_FAPPROVE", "Aprovar Avaliação: ");
define("_AM_WFD_REV_ACTION", "Ação");
define("_AM_WFD_REV_NOWAITINGREVIEWS", "Nenhuma Avaliação em espera");
define("_AM_WFD_REVIEW_APPROVETHIS", "Aprovar Avaliação");
define("_AM_WFD_REV_NOPUBLISHEDREVIEWS", "Não foram encontradas avaliações publicadas");
define("_AM_WFD_REV_REVIEW_UPDATED", "Avaliação escolhida foi modificada e BD atualizado com sucesso.");
define("_AM_WFD_REV_REVIEW_TOTAL", "Total de Avaliações:");
define("_AM_WFD_REV_REVIEW_WAITING", "Avaliações em Espera");
define("_AM_WFD_REV_REVIEW_PUBLISHED", "Avaliações Publicadas");

//File management
define("_AM_WFD_FILE_SUBMITTERID", "Enviado pelo Usuário: <br /><br />Deixe isto como está, a menos que você queira alterar quem submeteu o download"); //GibaPhp
define("_AM_WFD_FILE_ID", "ID de Arquivo: ");
define("_AM_WFD_FILE_IP", "Endereço IP : ");
define("_AM_WFD_FILE_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Extensões Permitidas</b>:</div>");
define("_AM_WFD_FILE_MODIFYFILE", "Modificar Informações de Arquivo");
define("_AM_WFD_FILE_CREATENEWFILE", "Criar novo Arquivo");
define("_AM_WFD_FILE_TITLE", "Título do Arquivo: ");
define("_AM_WFD_FILE_DLURL", "URL do Arquivo: ");
define("_AM_WFD_FILE_FILENAME", "Nome do arquivo: ");
define("_AM_WFD_FILE_FILETYPE", "Tipo do Arquivo: ");
define("_AM_WFD_FILE_MIRRORURL", "Mirror do Arquivo: ");
define("_AM_WFD_FILE_SUMMARY", "Descrição: ");
define("_AM_WFD_FILE_DESCRIPTION", "Descrição do Arquivo: ");
define("_MD_WFD_FILE_SUMMARY", "Sumário do Arquivo: ");
define("_AM_WFD_FILE_DUPLOAD", " Enviar Arquivo:");
define("_AM_WFD_FILE_CATEGORY", "Selecionar Categoria: ");
define("_AM_WFD_FILE_HOMEPAGETITLE", "Título Home Page: ");
define("_AM_WFD_FILE_HOMEPAGE", "Home Page: "); //GibaPhp
define("_AM_WFD_FILE_SIZE", "Tamanho do Arquivo: ");
define("_AM_WFD_FILE_VERSION", "Versão do Arquivo: "); //GibaPhp
define("_AM_WFD_FILE_VERSIONTYPES", "Status de Atualização: "); //GibaPhp
define("_AM_WFD_FILE_PUBLISHER", "Publicado por: ");
define("_AM_WFD_FILE_PLATFORM", "Plataformas Suportadas: ");
define("_AM_WFD_FILE_LICENCE", "Licença do Software: ");
define("_AM_WFD_FILE_LIMITATIONS", "Limitação do Software: ");
define("_AM_WFD_FILE_PRICE", "Preço: ");
define("_AM_WFD_FILE_KEYFEATURES", "Funções Chave:<br /><br /><span style='font-weight: normal;'>Separar cada função com uma |</span>");
define("_AM_WFD_FILE_REQUIREMENTS", "Requisitos de Sistema:<br /><br /><span style='font-weight: normal;'>Separar cada requisito com uma |</span>");
define("_AM_WFD_FILE_HISTORY", "Editar Histórico de Download:<br /><br /><span style='font-weight: normal;'>Adicionar novo Histórico de download. Só usar se precisar de alterar Histórico antigo</span>");
define("_AM_WFD_FILE_HISTORYD", "Adicionar Novo Histórico:<br /><br /><span style='font-weight: normal;'>A versão e a data serão automaticamente adicionadas</span>");
define("_AM_WFD_FILE_HISTORYVERS", "<b>Versão: </b>");
define("_AM_WFD_FILE_HISTORDATE", " <b>Atualizado:</b> ");
define("_AM_WFD_FILE_FILESSTATUS", " Colocar como Offline?<br /><br /><span style='font-weight: normal;'>Download não vai estar visível.</span>");
define("_AM_WFD_FILE_SETASUPDATED", " Definir Status como Atualizado?<br /><br /><span style='font-weight: normal;'>Download vai mostrar ícone de Atualizado.</span>");
define("_AM_WFD_FILE_SHOTIMAGE", "Selecionar Imagem de Screenshot: ");
define("_AM_WFD_FILE_DISCUSSINFORUM", "Discutir download no fórum?");
define("_AM_WFD_FILE_PUBLISHDATE", "Data de Publicação:");
define("_AM_WFD_FILE_EXPIREDATE", "Data de Expiração:");
define("_AM_WFD_FILE_CLEARPUBLISHDATE", "<br /><br />Remover Data de Publicação:");
define("_AM_WFD_FILE_CLEAREXPIREDATE", "<br /><br />Remover Data de Expiração:");
define("_AM_WFD_FILE_PUBLISHDATESET", " Data de Publicação Atual: ");
define("_AM_WFD_FILE_SETDATETIMEPUBLISH", " Inserir data/hora de Publicação");
define("_AM_WFD_FILE_SETDATETIMEEXPIRE", " Inserir data/hora de Expiração");
define("_AM_WFD_FILE_SETPUBLISHDATE", "<b>Inserir data em que deverá ser Publicado: </b>");
define("_AM_WFD_FILE_SETNEWPUBLISHDATE", "<b>Nova data em que deverá ser Publicado: </b><br />Publicado a:");
define("_AM_WFD_FILE_SETPUBDATESETS", "<b>Data de Futura Publicação: </b><br />Publicar-se-á a:");
define("_AM_WFD_FILE_EXPIREDATESET", " Data de Expiração Atual: ");
define("_AM_WFD_FILE_SETEXPIREDATE", "<b>Inserir data a que deverá Expirar: </b>");
define("_AM_WFD_FILE_MUSTBEVALID", "Imagem de Screenshot tem que ter formato válido e estar na pasta %s (ex. shot.gif). Deixe em branco se não houver screenshot.");
define("_AM_WFD_FILE_EDITAPPROVE", "Aprovar Download:");
define("_AM_WFD_FILE_NEWFILEUPLOAD", "Novo arquivo criado e BD atualizado com sucesso");
define("_AM_WFD_FILE_FILEMODIFIEDUPDATE", "Arquivo selecionado foi modificado e BD atualizado com sucesso");
define("_AM_WFD_FILE_REALLYDELETEDTHIS", "REMOVER o arquivo selecionado?");
define("_AM_WFD_FILE_FILEWASDELETED", "Arquivo %s removido do BD!");
define("_AM_WFD_FILE_USE_UPLOAD_TITLE", " Usar nome do arquivo para Título.");
define("_AM_WFD_FILE_FILEAPPROVED", "Arquivo aprovado e BD atualizado com sucesso");
define("_AM_WFD_FILE_CREATENEWSSTORY", "<b>Criar Notícia a partir do download</b>");
define("_AM_WFD_FILE_SUBMITNEWS", "Enviar novo arquivo como Notícia?");
define("_AM_WFD_FILE_NEWSCATEGORY", "Selecione a categoria de Notícias para a qual deve ser enviada:");
define("_AM_WFD_FILE_NEWSTITLE", "Título de Notícia:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Deixe em branco ou use Título do Arquivo</span></div>");

/*
* Broken downloads defines
*/
define("_AM_WFD_SBROKENSUBMIT", "Corrompido: ");
define("_AM_WFD_BROKEN_FILE", "Relatório de Corrompidos");
define("_AM_WFD_BROKEN_FILEIGNORED", "Relatório ignorado e removido do BD!");
define("_AM_WFD_BROKEN_NOWACK", "Status Recebido modificado e BD atualizado!");
define("_AM_WFD_BROKEN_NOWCON", "Status Atual modificado e BD atualizado!");
define("_AM_WFD_BROKEN_REPORTINFO", "Informação de Relatório Corrompido");
define("_AM_WFD_BROKEN_REPORTSNO", "Relatórios em Espera:");
define("_AM_WFD_BROKEN_IGNOREDESC", "<b>Ignora</b> o relatório e remove.");
define("_AM_WFD_BROKEN_IGNORE_ALT", "<b>Ignorar</b> e apagar o arquivo quebrado do relatório"); //GibaPhp
define("_AM_WFD_BROKEN_DELETEDESC", "<b>Apaga</b> o download e o relatório.");
define("_AM_WFD_BROKEN_DELETE_ALT", "<b>Apagar</b> os dados reportados neste download quebrado e também no arquivo deste relatório"); //GibaPhp
define("_AM_WFD_BROKEN_EDITDESC", "<b>Edita</b> o download para corrigir o problema.");
define("_AM_WFD_BROKEN_EDIT_ALT", "Editar o download para corrigir o problema");
define("_AM_WFD_BROKEN_ACKDESC", "<b>Recebido</b> - declara que o relatório foi recebido."); //GibaPhp
define("_AM_WFD_BROKEN_ACK_ALT", "Reconheço o estado deste arquivo neste relatório"); //GibaPhp
define("_AM_WFD_BROKEN_CONFIRMDESC", "<b>Confirmado</b> - confirma o recebimento do relatório."); //GibaPhp
define("_AM_WFD_BROKEN_CONFIRM_ALT", "Confirme o estado do arquivo no relatório"); //GibaPhp

define("_AM_WFD_BROKEN_ID", "ID");
define("_AM_WFD_BROKEN_TITLE", "Título");
define("_AM_WFD_BROKEN_REPORTER", "Informado por");
define("_AM_WFD_BROKEN_FILESUBMITTER", "Enviado por");
define("_AM_WFD_BROKEN_DATESUBMITTED", "Data de Envio");
define("_AM_WFD_BROKEN_ACTION", "Ação");
define("_AM_WFD_BROKEN_NOFILEMATCH", "Não existem Relatórios com estas características");
define("_AM_WFD_BROKENFILEDELETED", "Descrição de Download removida e Relatório apagado do BD");
define("_AM_WFD_BROKEN_DOWNLOAD_DONT_EXISTS", "O arquivo não existe mais.");


/*
* About defines
*/
define("_AM_WFD_BY", "De");

//block defines
define("_AM_WFD_BADMIN","Administração de Blocos");
define("_AM_WFD_BLKDESC","Descrição");
define("_AM_WFD_TITLE","Título");
define("_AM_WFD_SIDE","Alinhamento");
define("_AM_WFD_WEIGHT","Importância");
define("_AM_WFD_VISIBLE","Visível");
define("_AM_WFD_ACTION","Ação");
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
define("_AM_WFD_ICO_NOTAPPROVED","Não Aprovado");

define("_AM_WFD_ICO_LINK","Link Correspondente");
define("_AM_WFD_ICO_URL","Adicionar URL Correspondente");
define("_AM_WFD_ICO_ADD","Adicionar");
define("_AM_WFD_ICO_APPROVE","Aprovar");
define("_AM_WFD_ICO_STATS","Estatísticas");

define("_AM_WFD_ICO_IGNORE","Ignorar");
define("_AM_WFD_ICO_ACK","Relatório de Corrompido Recebido");
define("_AM_WFD_ICO_REPORT","Receber Relatório de Corrompido?");
define("_AM_WFD_ICO_CONFIRM","Relatório de Corrompido Confirmado");
define("_AM_WFD_ICO_CONBROKEN","Confirmar Relatório de Corrompido?");





define("_AM_WFD_DB_IMPORT", "Importar");
define("_AM_WFD_DB_CURRENTVER", "Versão Atual: <span class='currentVer'>%s</span>");
define("_AM_WFD_DB_DBVER", "Versão Banco de Dados %s");
define("_AM_WFD_DB_MSG_ADD_DATA", "Dados foram adicionados a tabela %s");
define("_AM_WFD_DB_MSG_ADD_DATA_ERR", "Erro! Os dados não foram adicionados a tabela %s");
define("_AM_WFD_DB_MSG_CHGFIELD", "Alterando campo %s na tabela %s");
define("_AM_WFD_DB_MSG_CHGFIELD_ERR", "Erro na alteração de campo %s na tabela %s");
define("_AM_WFD_DB_MSG_CREATE_TABLE", "Tabela %s criada");
define("_AM_WFD_DB_MSG_CREATE_TABLE_ERR", "Erro na criação da tabela %s");
define("_AM_WFD_DB_MSG_NEWFIELD", "Campo %s adicionado(s) com sucesso");
define("_AM_WFD_DB_MSG_NEWFIELD_ERR", "Erro ao adicionar campo %s");
define("_AM_WFD_DB_NEEDUPDATE", "Seu BD está desatualizado. Por favor atualize as tabelas de seu banco de dados!<br><b>ATENÇAO : SmartFactory recomenda enfaticamente que você faça um backup de todas as tabelas ANTES de aplicar o script de atualização.</b><br>");
define("_AM_WFD_DB_NOUPDATE", "Sua Base de dados é a mas recente. Não é necessário atualizar .");
define("_AM_WFD_DB_UPDATE_DB", "Atualizar Banco de Dados");
define("_AM_WFD_DB_UPDATE_ERR", "Erro ao atualizar versão %s");
define("_AM_WFD_DB_UPDATE_NOW", "Atualizar Agora!");
define("_AM_WFD_DB_UPDATE_OK", "Versão Atualizada com Sucesso %s");
define("_AM_WFD_DB_UPDATE_TO", "Atualizar à versão %s");

define("_AM_WFD_GOMOD", "Ir para Módulo");
define("_AM_WFD_UPDATE_MODULE", "Atualizar Modulo");
define("_AM_WFD_MDOWNLOADS","Administração de Arquivos");
define("_AM_WFD_DB_MSG_UPDATE_TABLE", "Atualizar valores dos campos em %s");
define("_AM_WFD_DB_MSG_UPDATE_TABLE_ERR", "Erro ao atualizar valores dos campos em %s");

// Mirrors
// waiting mirrors
define("_AM_WFD_AMIRRORS", "Gerenciamento de Mirrors");
define("_AM_WFD_AMIRRORS_WAITING", "Mirrors aguardando validação:");
define("_AM_WFD_AMIRRORS_INFO", "Informações de Gerenciamento de Mirrors");
define("_AM_WFD_AMIRRORS_APPROVE", "<b>Aprovar</b> novo mirror sem validação.");
define("_AM_WFD_AMIRRORS_EDIT", "<b>Editar</b> novo mirror e então aprovar.");
define("_AM_WFD_AMIRRORS_DELETE", "<b>Apagar</b> a nova informação do mirror.");

//mirrors defines
define("_AM_WFD_MIRROR_MIRRORTITLE", "Url do Mirror");
define("_AM_WFD_MIRROR_NOPUBLISHEDMIRRORS", "Não foram encontrados Mirrors publicados");
define("_AM_WFD_MIRROR_MIRROR_TOTAL", "Total de Mirrors:");
define("_AM_WFD_MIRROR_MIRROR_WAITING", "Mirrors Aguardando");
define("_AM_WFD_MIRROR_MIRROR_PUBLISHED", "Mirrors publicados");
define("_AM_WFD_MIRROR_SNEWMNAMEDESC", "Aprovar Mirror: ");
define("_AM_WFD_MIRROR_ID", "ID");
define("_AM_WFD_MIRROR_TITLE", "Título");
define("_AM_WFD_MIRROR_MUSTBEVALID", "O logo da home page deve ser um arquivo de imagem válido no %s diretório (ex. shot.gif). Deixe em branco se não houver arquivo de imagem.");
define("_AM_WFD_MIRROR_POSTER", "Enviado por");
define("_AM_WFD_MIRROR_SUBMITDATE", "Submetido");
define("_AM_WFD_MIRROR_FHOMEURLTITLE", "Título da Home Page: ");
define("_AM_WFD_MIRROR_FHOMEURL", "URL da Home Page: ");
define("_AM_WFD_MIRROR_UPLOADIMAGE", "Fazer upload do logo do site:<br /><br />Pequeno logo representativo do seu site.");
define("_AM_WFD_MIRROR_MIRRORIMAGE", "Logo do Site:");
define("_AM_WFD_MIRROR_CONTINENT", "Continente:");
define("_AM_WFD_MIRROR_LOCATION", "Localidade:<br /><br />Exemplo: Rio de Janeiro, BR");
define("_AM_WFD_MIRROR_DOWNURL", "URL do Download:<br /><br />Digite a URL do arquivo.");
define("_AM_WFD_MIRROR_FAPPROVE", "Aprovar Mirror: ");
define("_AM_WFD_MIRROR_ACTION", "Ação");
define("_AM_WFD_MIRROR_NOWAITINGMIRRORS", "Não há mirrors em espera");
define("_AM_WFD_MIRROR_MIRROR_UPDATED", "Mirror selecionado modificado e BD atualizado com sucesso");
define("_AM_WFD_MIRROR_APPROVETHIS", "Aprovar Mirror");

//continents (used in mirrors page)
define("_AM_WFD_CONT1","Africa");
define("_AM_WFD_CONT2","Antarctica");
define("_AM_WFD_CONT3","Asia");
define("_AM_WFD_CONT4","Europa");
define("_AM_WFD_CONT5","América do Norte");
define("_AM_WFD_CONT6","América do Sul");
define("_AM_WFD_CONT7","Oceania");

define("_AM_WFD_HELP","Ajuda");


// added - start - March 4 2006 - jpc
define("_AM_WFD_FFS_SUBMITBROKEN", "Enviar");
define("_AM_WFD_FFS_STANDARD_FORM", "Não, usa o formulário padrão");
define("_AM_WFD_FFS_CUSTOM_FORM", "Usar um formulário feito sob encomenda para esta categoria?");
define("_AM_WFD_FFS_DOWNLOADTITLE", "Adicionar uma arquivo.");
define("_AM_WFD_FFS_EDITDOWNLOADTITLE", "Editando uma arquivo.");
define("_AM_WFD_FFS_BACK", "Voltar"); //GibaPhp
define("_AM_WFD_FFS_RELOAD", "Atualizar");


define("_MD_WFD_CATEGORYC", "Categoria: ");  // _MD to reuse the category form
define("_MD_WFD_FFS_SUBMITCATEGORYHEAD", "Em qual categoria, você quer enviar o arquivo?");
define("_MD_WFD_FFS_DOWNLOADDETAILS", "Detalhes do Download:");
define("_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS", "Detalhes Customizados:");
define("_MD_WFD_FILETITLE", "Titulo do Download: ");
define("_MD_WFD_DLURL", "URL Download: ");
define("_MD_WFD_UPLOAD_FILEC", "Enviar Arquivo: ");
define("_MD_WFD_DESCRIPTION", "Descrição");
// added - end - March 4 2006 - jpc

define("_AM_WFD_MINDEX_LOG", "Logs");
define("_MD_WFD_IP_LOGS", "Ver logs");
define("_MD_WFD_EMPTY_LOG", "Não existem Logs.");
define("_MD_WFD_LOG_FOR_LID", "Aqui está uma lista dos downloaders e endereço IP para %s");
define("_MD_WFD_IP_ADDRESS", "IP");
define("_MD_WFD_DATE", "Data do Download");
define("_MD_WFD_BACK", "<< Voltar");
define("_MD_WFD_USER", "Usuário");
define("_MD_WFD_ANONYMOUS", "Usuário Anônimo");
?>