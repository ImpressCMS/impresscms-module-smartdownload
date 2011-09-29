<?php 
/**
  * $Id: main.php,v 1.14 2007/06/25 15:57:52 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */
 
//Todo - Still to remove redundat defines from this area. MD_WFD_NEEDLOGIN
define("_MD_WFD_NEEDLOGINVIEW", "Voc� precisa estar logado, para acessar esta �rea!");
define("_MD_WFD_NODOWNLOAD", "Este download n�o existe!");
define("_MD_WFD_DOWNLOADMINPOSTS", "Voc� deve aumentar sua contagem de mensagens<br />Antes de poder fazer Downloads de Arquivos");
define("_MD_WFD_UPLOADMINPOSTS", "Voc� precisa aumentar as suas participa��es <br /> para voc� obter o direito para fazer Upload de Arquivos"); //GibaPhp

define("_MD_WFD_SUBCATLISTING", "Lista de Categorias");
define("_MD_WFD_ISADMINNOTICE", "Webmaster: h� um problema com esta imagem."); 
define("_MD_WFD_THANKSFORINFO", "Obrigado pela sua participa��o. Ser� notificado assim que o seu pedido for aprovado pelo webmaster.");
define("_MD_WFD_ISAPPROVED", "Obrigado pela sua participa��o. O seu pedido foi aprovado e aparecer� na nossa lista.");
define("_MD_WFD_THANKSFORHELP", "Obrigado por ajudar a manter a integridade deste diret�rio.");
define("_MD_WFD_FORSECURITY", "Por motivos de seguran�a, o seu IP e Username ser�o gravados.");
define("_MD_WFD_NOPERMISETOLINK", "Este arquivo n�o pertence ao site de onde voc� veio. <br /><br />Por favor notifique o webmaster deste site sobre o sucedido.");
define("_MD_WFD_SUMMARY", "Resumo<br /><br /><span style='font-weight: normal;'>Voc� pode deixar em branco<br />Um resumo ser� criado se estiver em branco</span>");
define("_MD_WFD_DESCRIPTION", "Descri��o");
define("_MD_WFD_SUBMITCATHEAD", "Enviar Formul�rio");
define("_MD_WFD_MAIN", "In�cio");
define("_MD_WFD_POPULAR", "Popular");
define("_MD_WFD_NEWTHISWEEK", "Novo esta semana");
define("_MD_WFD_UPTHISWEEK", "Actualizado esta semana");
define("_MD_WFD_POPULARITYLTOM", "Popularidade (menor -> maior)");
define("_MD_WFD_POPULARITYMTOL", "Popularidade (maior -> menor");
define("_MD_WFD_TITLEATOZ", "T�tulo (A-Z)");
define("_MD_WFD_TITLEZTOA", "T�tulo (Z-A)");
define("_MD_WFD_DATEOLD", "Data (Decrescente)");
define("_MD_WFD_DATENEW", "Data (Crescente)");
define("_MD_WFD_RATINGLTOH", "Pontua��o (menor -> maior)");
define("_MD_WFD_RATINGHTOL", "Pontua��o (maior -> menor)");
define("_MD_WFD_DESCRIPTIONC", "Descri��o:");
define("_MD_WFD_CATEGORYC", "Categoria:");
define("_MD_WFD_VERSION", "Vers�o:");
define("_MD_WFD_SUBMITDATE", "Lan�ado em");
define("_MD_WFD_DLTIMES", "Baixado %s vezes");
define("_MD_WFD_FILESIZE", "Tamanho do Arquivo");
define("_MD_WFD_SUPPORTEDPLAT", "Plataforma");
define("_MD_WFD_HOMEPAGE", "Home Page");
define("_MD_WFD_PUBLISHERC", "Enviado por:");
define("_MD_WFD_RATINGC", "Pontua��o:");
define("_MD_WFD_ONEVOTE", "1 Voto");
define("_MD_WFD_NUMVOTES", "%s Votos");
define("_MD_WFD_RATETHISFILE", "Votar Download");
define("_MD_WFD_REVIEWTHISFILE", "Analisar Download");
define("_MD_WFD_REVIEWS", "An�lises:");
define("_MD_WFD_DOWNLOADHITS", "Downloads");
define("_MD_WFD_MODIFY", "Modificar");
define("_MD_WFD_REPORTBROKEN", "Informar Link Corrompido");
define("_MD_WFD_BROKENREPORT", "Informar Download Corrompido");
define("_MD_WFD_SUBMITBROKEN", "Enviar");
define("_MD_WFD_BEFORESUBMIT", "Antes de informar um download corrompido certifique-se de que o arquivo est� de fato em falta.");
define("_MD_WFD_TELLAFRIEND", "Recomendar");
define("_MD_WFD_EDIT", "Editar");
define("_MD_WFD_THEREARE", "Existem  <b>%s</b> <i>Categorias</i> e  <b>%s</b> <i>Downloads</i> listados");
define("_MD_WFD_THEREIS", "H� <b>%s</b> <i>Categoria</i> e <b>%s</b> <i>Downloads</i> listados");
define("_MD_WFD_LATESTLIST", "�ltimos Enviados");
define("_MD_WFD_FILETITLE", "Titulo do Download:");
define("_MD_WFD_DLURL", "Url do Download:");
define("_MD_WFD_UPLOAD_FILENAME", "Nome do Arquivo Local:");
define("_MD_WFD_UPLOAD_FILETYPE", "Tipo do Arquivo:");

define("_MD_WFD_HOMEPAGEC", "Home Page: ");
define("_MD_WFD_UPLOAD_FILEC", "Enviar Arquivo:");
define("_MD_WFD_VERSIONC", "Vers�o:");
define("_MD_WFD_FILESIZEC", "Tamanho do Arquivo:");
define("_MD_WFD_NUMBYTES", "%s bytes");
define("_MD_WFD_PLATFORMC", "Plataforma:");
define("_MD_WFD_PRICE", "Pre�o");
define("_MD_WFD_LIMITS", "Limita��es");
define("_MD_WFD_VERSIONTYPES", "Status de Atualiza��o:"); //GibaPhp
define("_MD_WFD_DOWNLICENSE", "Licen�a");
define("_MD_WFD_NOTSPECIFIED", "N�o Especificado");
define("_MD_WFD_MIRRORSITE", "Download Mirror");
define("_MD_WFD_MIRROR", "Site Mirror");
define("_MD_WFD_PUBLISHER", "Enviado por");
define("_MD_WFD_UPDATEDON", "Atualizado a");
define("_MD_WFD_PRICEFREE", "Gr�tis");
define("_MD_WFD_VIEWDETAILS", "Ver detalhes completos");
define("_MD_WFD_OPTIONS", 'Op��es');
define("_MD_WFD_NOTIFYAPPROVE", 'Notificar-me quando este arquivo for aprovado');
define("_MD_WFD_VOTEAPPRE", "O seu Voto � apreciado");
define("_MD_WFD_THANKYOU", "Obrigado pelo seu tempo. O  %s agradece o seu voto."); // %s is your site name
define("_MD_WFD_VOTEONCE", "Favor n�o votar mais que uma vez para o mesmo download.");
define("_MD_WFD_RATINGSCALE", "A escala � de 1-10 (sendo que quanto maior, melhor).");
define("_MD_WFD_BEOBJECTIVE", "Seja objetivo, se todos receberem 1 ou 10 n�o h� grande utilidade.");
define("_MD_WFD_DONOTVOTE", "N�o vote o seu pr�prio download!");
define("_MD_WFD_RATEIT", "Votar!");
define("_MD_WFD_INTFILEFOUND", "Encontrei um �timo arquivo para baixar no %s"); // %s is your site name
define("_MD_WFD_RANK", "Classifica��o");
define("_MD_WFD_CATEGORY", "Categoria");
define("_MD_WFD_HITS", " N� de Visualiza��es");
define("_MD_WFD_RATING", " Pontua��o");
define("_MD_WFD_VOTE", "Votar");
define("_MD_WFD_SORTBY", "Ordenar por:");
define("_MD_WFD_TITLE", "T�tulo");
define("_MD_WFD_DATE", "Data");
define("_MD_WFD_POPULARITY", "Popularidade");
define("_MD_WFD_TOPRATED", "Pontua��o");
define("_MD_WFD_CURSORTBY", "Arquivo organizados por: %s");
define("_MD_WFD_CANCEL", "Cancelar");
define("_MD_WFD_ALREADYREPORTED", "J� enviou um relat�rio de arquivo corrompido para este arquivo.");
define("_MD_WFD_MUSTREGFIRST", "N�o tem permiss�o para efetuar esta a��o, por favor fa�a o seu login primeiro!");
define("_MD_WFD_NORATING", "Nenhuma avalia��o escolhida.");
define("_MD_WFD_CANTVOTEOWN", "N�o pode votar o seu pr�prio download.<br /> Todos os votos s�o revistos!");
define("_MD_WFD_SUBMITDOWNLOAD", "Enviar Download");
define("_MD_WFD_SUB_SNEWMNAMEDESC", "<ul><li>Todos os downloads s�o revistos e pode haver um tempo de espera de publica��o at� 24 horas.</li><li>Reservamo-nos o direito de rejeitar qualquer arquivo cujo conte�do n�o nos pare�a apropriado.</li></ul>");
define("_MD_WFD_MAINLISTING", "Categorias Principais");
define("_MD_WFD_LASTWEEK", "�ltima Semana");
define("_MD_WFD_LAST30DAYS", "�ltimos 30 Dias");
define("_MD_WFD_1WEEK", "1 semana");
define("_MD_WFD_2WEEKS", "2 semanas");
define("_MD_WFD_30DAYS", "30 dias");
define("_MD_WFD_SHOW", "Mostrar");
define("_MD_WFD_DAYS", "dias");
define("_MD_WFD_NEWDOWNLOADS", "Novos Downloads");
define("_MD_WFD_TOTALNEWDOWNLOADS", "Total de Novos Downloads");
define("_MD_WFD_DTOTALFORLAST", "Total de Novos downloads nos �ltimos");
define("_MD_WFD_AGREE", "Aceito");
define("_MD_WFD_DOYOUAGREE", "Aceita os termos acima?");
define("_MD_WFD_DISCLAIMERAGREEMENT", "Termos de Uso");
define("_MD_WFD_DUPLOADSCRSHOT", "Enviar Screenshot:");
define("_MD_WFD_RESOURCEID", "Download id#: ");
define("_MD_WFD_REPORTER", "Informado Por:");
define("_MD_WFD_DATEREPORTED", "Data de Informe:");
define("_MD_WFD_RESOURCEREPORTED", "Relat�rio de Download Corrompido enviado");
define("_MD_WFD_BROWSETOTOPIC", "<b>Procurar Downloads por ordem alfab�tica</b>");
define("_MD_WFD_WEBMASTERACKNOW", "Relat�rio de Download Corrompido Recebido:");
define("_MD_WFD_WEBMASTERCONFIRM", "Relat�rio de Download Corrompido confirmado:");
define("_MD_WFD_DELETE", "Apagar");
define("_MD_WFD_DISPLAYING", "Mostrado por:");
define("_MD_WFD_LEGENDTEXTNEW", "Novo Hoje");
define("_MD_WFD_LEGENDTEXTNEWTHREE", "Novo 3 dias");
define("_MD_WFD_LEGENDTEXTTHISWEEK", "Novo esta semana");
define("_MD_WFD_LEGENDTEXTNEWLAST", "Mais de 1 semana");
define("_MD_WFD_THISFILEDOESNOTEXIST", "Erro: este arquivo n�o existe!");
define("_MD_WFD_BROKENREPORTED", "Arquivo Corrompido Informado");
define("_MD_WFD_LEGENDTEXTRSS", "RSS Feeds");
define("_MD_WFD_LEGENDTEXTCATRSS", "Categoria do RSS Feed");

define("_MD_WFD_BYTES", " B");
define("_MD_WFD_KILOBYTES", " Kb");
define("_MD_WFD_MEGABYTES", " Mb");
define("_MD_WFD_GIGABYTES", " Gb");
define("_MD_WFD_TERRABYTES", " Tb");

define("_MD_WFD_FILENOTEXIST", "ERRO: Arquivo n�o existe ou Arquivo n�o encontrado!"); //GibaPhp
define("_MD_WFD__MD_WFD_FILENOTOPEN", "ERRO: N�o � poss�vel abrir o arquivo!"); //GibaPhp

// visit
define("_MD_WFD_DOWNINPROGRESS", "Download em Progresso");
define("_MD_WFD_DOWNSTARTINSEC", "O seu download deve come�ar em 3 segundos...<b>aguarde um momento.</b>.");
define("_MD_WFD_DOWNNOTSTART", "Se o seu download n�o come�ar, ");
define("_MD_WFD_CLICKHERE", "Clique Aqui!");
define("_MD_WFD_BROKENFILE", "Arquivo Corrompido");
define("_MD_WFD_PLEASEREPORT", "Por favor informe este arquivo corrompido ao webmaster, ");
// Reviews
define("_MD_WFD_REV_TITLE", "T�tulo Avalia��o:");
define("_MD_WFD_REV_RATING", "Classifica��o Avalia��o:");
define("_MD_WFD_REV_DESCRIPTION", "Avalia��o:");
define("_MD_WFD_REV_SUBMITREV", "Enviar");
define("_MD_WFD_ERROR_CREATEREVIEW", "Erro na cria��o de avalia��o");

define("_MD_WFD_REV_SNEWMNAMEDESC", " Complete o formul�rio abaixo totalmente e n�s publicaremos a sua avalia��o assim que poss�vel.<br /><br />
Agradecemos a sua participa��o e o tempo que nos dispensou.<br /><br />
Todas as avalia��es s�o revistas pelos admin antes de serem publicadas. 
");
define("_MD_WFD_ISNOTAPPROVED", "A sua participa��o tem que se aprovada por um admin primeiro.");
define("_MD_WFD_LICENCEC", "Licen�a de Software:");
define("_MD_WFD_LIMITATIONS", "Limita��es do Software:");
define("_MD_WFD_KEYFEATURESC", "Fun��es Chaves:<br /><br /><span style='font-weight: normal;'>Separe cada Fun��o com uma |</span>");
define("_MD_WFD_REQUIREMENTSC", "Requisitos de Sistema:<br /><br /><span style='font-weight: normal;'>Separe cada Requisito com uma |</span>");
define("_MD_WFD_HISTORYC", "Hist�rico de Download:");
define("_MD_WFD_HISTORYD", "Adicionar novo Hist�rico de Download:<br /><br /><span style='font-weight: normal;'>A data de Envio vai ser adicionada.</span>");
define("_MD_WFD_HOMEPAGETITLEC", "Titulo Homepage:");
define("_MD_WFD_REQUIREMENTS", "Requisitos do Sistema:");
define("_MD_WFD_FEATURES", "Fun��es:");
define("_MD_WFD_HISTORY", "Hist�rico de Download:");
define("_MD_WFD_PRICEC", "Pre�o:");
define("_MD_WFD_SCREENSHOT", "Screenshot 1:");
define("_MD_WFD_SCREENSHOT2", "Screenshot 2:");
define("_MD_WFD_SCREENSHOT3", "Screenshot 3:");
define("_MD_WFD_SCREENSHOT4", "Screenshot 4:");
define("_MD_WFD_SCREENSHOTCLICK", "Mostrar Imagem Completa");
define("_MD_WFD_OTHERBYUID", "Outros arquivos por:");
define("_MD_WFD_DOWNTIMES", "N� de Downloads:");
define("_MD_WFD_MAINTOTAL", "Total de Arquivos:");
define("_MD_WFD_DOWNLOADNOW", "Baixar Agora");
define("_MD_WFD_PAGES", "<b>P�ginas</b>");
define("_MD_WFD_REVIEWER", "Avaliador");
define("_MD_WFD_RATEDRESOURCE", "Download Avaliado");
define("_MD_WFD_SUBMITTER", "Enviado por");
define("_MD_WFD_REVIEWTITLE", "Avalia��es");
define("_MD_WFD_REVIEWTOTAL", "<b>N� Avalia��es:</b> %s");
define("_MD_WFD_USERREVIEWSTITLE", "Avalia��es");
define("_MD_WFD_USERREVIEWS", "Ler avalia��es sobre %s");
define("_MD_WFD_NOUSERREVIEWS", "Seja o primeiro a avaliar o download %s.");
define("_MD_WFD_ERROR", "Erro ao atualizar BD. Informa��o n�o gravada.");
define("_MD_WFD_COPYRIGHT", "copyright");
define("_MD_WFD_INFORUM", "Discutir no F�rum");

//added frankblack

//submit.php
define("_MD_WFD_NOTALLOWESTOSUBMIT","N�o tem autoriza��o para enviar arquivos");
define("_MD_WFD_INFONOSAVEDB","Informa��o n�o salva no BD: <br /><br />");
define("_MD_WFD_NOTALLOWEDTOMOD","Voc� n�o tem permiss�o de modificar este download");

//review.php
define("_MD_WFD_ERROR_CREATCHANNEL","Crie o Canal primeiro");
define("_MD_WFD_REVIEW_CATPATH", "Caminho da Categoria:");
define("_MD_WFD_ADDREVIEW", "Adicionar Avalia��o");

//
define("_MD_WFD_NEWLAST","Novo enviado antes da �ltima semana");
define("_MD_WFD_NEWTHIS","Novo enviado esta semana");
define("_MD_WFD_THREE","Novo enviado nos �ltimos 3 dias");
define("_MD_WFD_TODAY","Novo enviado hoje");
define("_MD_WFD_NO_FILES","Nenhum arquivo at� agora");

//mirror.php
define("_MD_WFD_MIRROR_AVAILABLE", "Mirrors Dispon�veis");
define("_MD_WFD_MIRROR_CATPATH", "Caminho da Categoria:");
define("_MD_WFD_MIRROR_FILENAME", "Nome do Arquvio:");
define("_MD_WFD_DOWNLOADMIRRORS", "Download Mirrors");
define("_MD_WFD_MIRROR_NOTALLOWESTOSUBMIT", "Voc� n�o tem permiss�o para adicionar mirrors");
define("_MD_WFD_MIRRORS", "Download Mirrors:");
define("_MD_WFD_USERMIRRORSTITLE", "Mirros Dispon�veis para Download");
define("_MD_WFD_USERMIRRORS", "Ver Mirrors dispon�veis para Download em %s");
define("_MD_WFD_NOUSERMIRRORS", "Adicionar novo Mirror para Download em %s.");
define("_MD_WFD_TOTALMIRRORS", "Total Mirrors:");
define("_MD_WFD_ADDMIRROR", "Adicionar Mirror");
define("_MD_WFD_MIRROR_TOTAL", "<b>Total Mirrors:</b> %s");
define("_MD_WFD_MIRROR_HOMEURLTITLE", "T�tulo da Homepage:");
define("_MD_WFD_MIRROR_HOMEURL", "URL da homepage:<br /><br />Digite a URL de sua Homepage.");
define("_MD_WFD_MIRROR_UPLOADMIRRORIMAGE", "Fazer Upload do Logo do Site:<br /><br />Pequeno Logo representativo de seu site.");
define("_MD_WFD_MIRROR_MIRRORIMAGE", "Logo do Site:");
define("_MD_WFD_MIRROR_CONTINENT", "Continente:");
define("_MD_WFD_MIRROR_LOCATION", "Localidade:<br /><br />Examplo: Rio de Janeiro, BR");
define("_MD_WFD_MIRROR_DOWNURL", "URL do Download:<br /><br />Digite a URL do arquivo.");
define("_MD_WFD_MIRROR_SUBMITMIRROR", "Adicionar Mirror");
define("_MD_WFD_ERROR_CREATEMIRROR", "Erro na cria��o do mirror");
define("_MD_WFD_MIRROR_SNEWMNAMEDESC", " 
Por favor complete o formul�rio abaixo, e iremos adicionar seu mirror t�o cedo quanto poss�vel.<br /><br /> 
Obrigado por sua assist�ncia em prover outro local para fazer o download destes arquivos. N�s queremos dar a nossos usu�rios a possibilidade de encontrar software de qualidade o mais rapidamente poss�vel.<br /><br />Todas as submiss�es de mirrors ser�o revistas pela administra��o antes de disponibilizadas em nosso site.
");
define("_MD_WFD_MIRROR_HHOST", "Host");
define("_MD_WFD_MIRROR_HLOCATION", "Localidade");
define("_MD_WFD_MIRROR_HCONTINENT", "Continente");
define("_MD_WFD_MIRROR_HDOWNLOAD", "Download");
define("_MD_WFD_MIRROR_OFFLINE", "O Host Est� Offline.");
define("_MD_WFD_MIRROR_ONLINE", "O Host Est� Online.");
define("_MD_WFD_MIRROR_DISABLED", "O local do host est� desabilitado.");
//continents (used in mirrors page)
define("_MD_WFD_CONT1","Africa");
define("_MD_WFD_CONT2","Ant�rtica");
define("_MD_WFD_CONT3","�sia");
define("_MD_WFD_CONT4","Europa");
define("_MD_WFD_CONT5","Am�rica do Norte");
define("_MD_WFD_CONT6","Am�rica do Sul");
define("_MD_WFD_CONT7","Oceania");


define("_MD_WFD_ADMIN_PAGE",":: Se��o Administrativa ::");
define("_MD_WFD_DOWNLOADS_LIST","Lista de Downloads (%s)");
define("_MD_WFD_NEWDOWNLOADS_ALL","Todos");
define("_MD_WFD_NEWDOWNLOADS_INTHELAST","Nos �ltimos %s dias");
define("_MD_WFD_DOWNLOAD_MOST_POPULAR","Downloads Mais Populares");
define("_MD_WFD_DOWNLOAD_MOST_RATED","Downloads Melhor Avaliados");


// added - start - March 4 2006 - jpc
define("_MD_WFD_FFS_SUBMITCATEGORYHEAD", "Qual categoria de arquivo voc� quer adicionar?");
define("_MD_WFD_FFS_DOWNLOADDETAILS", "Detalhes do Download:");
define("_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS", "Detalhes Customizados:");
define("_MD_WFD_FFS_BACK", "Voltar");
define("_MD_WFD_FFS_DOWNLOADTITLE", "Adicionar um arquivo.");
// added - end - March 4 2006 - jpc
?>