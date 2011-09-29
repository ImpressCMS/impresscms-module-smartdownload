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
define("_MI_WFD_NAME","WF-Downloads");

// A brief description of this module
define("_MI_WFD_DESC","Cria uma seção de downloads onde os membros podem baixar/enviar/avaliar vários arquivos.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFD_BNAME1","Downloads Recentes");
define("_MI_WFD_BNAME2","Top Downloads");
define("_MI_WFD_BNAME3","Mais Baixados por Categoria");

// Sub menu titles
define("_MI_WFD_SMNAME1","Enviar");
define("_MI_WFD_SMNAME2","Popular");
define("_MI_WFD_SMNAME3","Mais Votados");

// Names of admin menu items
define("_MI_WFD_BINDEX","Índice");
define("_MI_WFD_INDEXPAGE","Admin de Índices");
define("_MI_WFD_MCATEGORY","Admin de Categorias");
define("_MI_WFD_MDOWNLOADS","Admin de Arquivos");
define('_MI_WFD_REVIEWS','Avaliações');
define("_MI_WFD_MUPLOADS","Enviar Imagens");
define("_MI_WFD_MMIMETYPES","Admin de Mimetypes");
define("_MI_WFD_PERMISSIONS","Permissões");
define("_MI_WFD_MVOTEDATA","Votos");
define("_MI_WFD_MMIRRORS","Mirrors");

// Title of config items
define('_MI_WFD_POPULAR', 'Nº Cliques Popular');
define('_MI_WFD_POPULARDSC', 'O número de cliques para um download ser considerado como Popular.');

//Display Icons
define("_MI_WFD_ICONDISPLAY","Downloads Populares e Novos:");
define("_MI_WFD_DISPLAYICONDSC", "Selecione como mostrar os icones popular e novo na lista de downloads");
define("_MI_WFD_DISPLAYICON1", "Mostrar como Ícones");
define("_MI_WFD_DISPLAYICON2", "Mostrar como Texto");
define("_MI_WFD_DISPLAYICON3", "Não Mostrar");

define("_MI_WFD_DAYSNEW","Downloads Novos, em Dias:");
define("_MI_WFD_DAYSNEWDSC","O nº de dias que um download é considerado novo.");
define("_MI_WFD_DAYSUPDATED","Downloads Atualizado, em Dias:");
define("_MI_WFD_DAYSUPDATEDDSC","O nº de dias que um download é considerado Atualizado.");

define('_MI_WFD_PERPAGE', 'Nº de Downloads nas listagens');
define('_MI_WFD_PERPAGEDSC', 'Nº de downloads a mostrar em cada listagem de categoria.');

define('_MI_WFD_TEMPLATESET', 'Selecionar set de templates');
define('_MI_WFD_TEMPLATESETDSC', 'Selecionar templates para usar em seu módulo.<br />Isto irá habiltá-lo a escolher como seus downloads serão listados');
define('_MI_WFD_TEMPLATESET1', 'Padrão');
define('_MI_WFD_TEMPLATESET2', 'Profissional');

define('_MI_WFD_USESHOTS', 'Mostrar screenshots?');
define('_MI_WFD_USESHOTSDSC', 'Selecione SIM para mostrar screenshots para cada download.<br> <b><font color="#FF0000">É recomendado manter em SIM</font></b>, mesmo não tendo screenshots.');
define('_MI_WFD_SHOTWIDTH', 'Mostrar comprimento da Imagem');
define('_MI_WFD_SHOTWIDTHDSC', 'Mostrar comprimento do screenshot');
define('_MI_WFD_SHOTHEIGHT', 'Mostrar altura da Imagem');
define('_MI_WFD_SHOTHEIGHTDSC', 'Mostrar altura do screenshot');
define('_MI_WFD_CHECKHOST', 'Desabilitar links diretos de outros sites para seus downloads? (leeching)');
define('_MI_WFD_REFERERS', 'Estes sites podem linkar direto <br />Separar com uma <font color="#FF0000">|</font> ');

define('_MI_WFD_CAT_IMGWIDTH', 'Categoria: Largura Imagem');
define('_MI_WFD_CAT_IMGWIDTHDSC', 'Largura da imagem para ser visualizar na categoria');
define('_MI_WFD_CAT_IMGHEIGHT', 'Categoria: Altura da Imagem');
define('_MI_WFD_CAT_IMGHEIGHTDSC', 'Altura da imagem para ser visualizar na categoria');

define("_MI_WFD_ANONPOST","Envio por Usuários Anônimos:");
define("_MI_WFD_ANONPOSTDSC","Permitir que usuários anônimos enviem downloads?");
define("_MI_WFD_ANONPOST1","Nenhum");
define("_MI_WFD_ANONPOST2","Somente Downloads");
define("_MI_WFD_ANONPOST3","Somente Mirrors");
define("_MI_WFD_ANONPOST4","Ambos");

define('_MI_WFD_AUTOAPPROVE','Auto aprovar downloads enviados');
define('_MI_WFD_AUTOAPPROVEDSC','Escolha para aprovar automaticamente os downloads enviados.');
define('_MI_WFD_AUTOAPPROVE1','Nenhum');
define('_MI_WFD_AUTOAPPROVE2','Somente Downloads');
define('_MI_WFD_AUTOAPPROVE3','Somente Mirrors');
define('_MI_WFD_AUTOAPPROVE4','Ambos');

define('_MI_WFD_REVIEWAPPROVE','Auto aprovar avaliações submetidas');
define('_MI_WFD_REVIEWAPPROVEDSC','Selecione para aprovar avaliações submetidas sem moderação');
define("_MI_WFD_REVIEWANONPOST","Avaliações feitas por Visitantes");
define("_MI_WFD_REVIEWANONPOSTDSC","Permitir avaliações por visitantes em seu site?");

define('_MI_WFD_MAXFILESIZE','Tamanho Upload (KB)');
define('_MI_WFD_MAXFILESIZEDSC','Tamanho máximo permitido para os arquivos enviados.');
define('_MI_WFD_IMGWIDTH','Comprimento Imagem Upload');
define('_MI_WFD_IMGWIDTHDSC','Comprimento máximo da imagem quando se envia arquivo de imagem.');
define('_MI_WFD_IMGHEIGHT','Altura Imagem Upload');
define('_MI_WFD_IMGHEIGHTDSC','Altura máxima da imagem quando se envia arquivo de imagem.');

define('_MI_WFD_AUTOSUMMARY','Permitir Resumo Automático');
define('_MI_WFD_AUTOSUMMARYDESC','Criar resumo automático baseado em x quantidade definidos de caracteres');
define('_MI_WFD_AUTOSUMMARYLENGTH','Tamanho do Resumo');
define('_MI_WFD_AUTOSUMMARYLENGTHDESC','Quantidade Máxima de Caracteres a serem exibidos no Resumo');

define('_MI_WFD_UPLOADDIR','Pasta de Uploads (Sem a barra <font color="#FF0000">/</font> no final)');
define('_MI_WFD_UPLOADDIRDSC','Diretórios para Upload <font color="#FF0000">*DEVEM*</font> ter o caminho absoluto definido!');

define('_MI_WFD_ENABLERSS','Ativar RSS Feeds:');
define('_MI_WFD_ENABLERSSDSC','Selecione SIM para permitir rss feeds');

define('_MI_WFD_DOWNLOADMINPOSTS', "Mínimo de posts requeridos para download");
define('_MI_WFD_DOWNLOADMINPOSTSDSC', "Digite o mínimo de posts a serem requeridos para permitir um download");
define('_MI_WFD_UPLOADMINPOSTS', "Mínimo de posts requeridos para realizar um upload");
define('_MI_WFD_UPLOADMINPOSTSDSC', "Digite o mínimo de posts requeridos para realizar upload de um arquivo");

define('_MI_WFD_ALLOWSUBMISS','Sugestão por Membros:');
define('_MI_WFD_ALLOWSUBMISSDSC','Permitir que membros sugiram downloads');
define('_MI_WFD_ALLOWSUBMISS1','Nenhum');
define('_MI_WFD_ALLOWSUBMISS2','Somente Download');
define('_MI_WFD_ALLOWSUBMISS3','Somente Mirror');
define('_MI_WFD_ALLOWSUBMISS4','Ambos');
define('_MI_WFD_ALLOWUPLOADS','Envio por Membros:');
define('_MI_WFD_ALLOWUPLOADSDSC','Permitir que os membros enviem diretamente para o site');
define('_MI_WFD_ALLOWUPLOADSGROUP','Adicionar Uploads:');
define('_MI_WFD_ALLOWUPLOADSGROUPDSC','Selecione os grupos que podem enviar arquivos (upload).<br/>Isto incluindo arquivos e screenshots!');
define('_MI_WFD_SCREENSHOTS','Pasta de Upload de Imagem de Screenshots');
define('_MI_WFD_CATEGORYIMG','Pasta de Upload de Imagem de Categorias');
define('_MI_WFD_MAINIMGDIR','Pasta Principal de Imagens');
define('_MI_WFD_USETHUMBS', 'Usar Thumbnails:');
define("_MI_WFD_USETHUMBSDSC", "Formatos suportados: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Section vai usar thumbnails das imagens. Escolha  'Não' para usar imagem original se o servidor não suportar esta opção.</div>");
define('_MI_WFD_DATEFORMAT', 'Relógio:');
define('_MI_WFD_DATEFORMATDSC', 'Relógio usado por padrão pelo WF-Downloads:');
define('_MI_WFD_SHOWDISCLAIMER', 'Mostrar Termos de Uso antes do upload de arquivo?');
define('_MI_WFD_SHOWDOWNDISCL', 'Mostrar Termos de Uso antes de download de arquivo?');
define('_MI_WFD_DISCLAIMER', 'Escreva Termos de Uso do Upload:');
define('_MI_WFD_DOWNDISCLAIMER', 'Escreva Termos de Uso do Download:');
define('_MI_WFD_PLATFORM', 'Escreva as Plataformas:');
define('_MI_WFD_SUBCATS', 'Sub-Categorias:');
define('_MI_WFD_VERSIONTYPES', 'Status da Versão:');
define('_MI_WFD_LICENSE', 'Licença:');
define('_MI_WFD_LIMITS', 'Limitações:');
define('_MI_WFD_MAXSHOTS', 'Selecione o número máximo de screenshots:');
define('_MI_WFD_MAXSHOTSDSC', 'Estabeleça o número máximo de uploads permitidos do screenshot.');

define("_MI_WFD_SUBMITART", "Download Enviado:");
define("_MI_WFD_SUBMITARTDSC", "Selecione os grupos que podem enviar downloads.");

define("_MI_WFD_IMGUPDATE", "Atualizar thumbnails?");
define("_MI_WFD_IMGUPDATEDSC", "Se escolhido os thumbnails serão atualizados a cada visualização da página, senão vai ser usada a primeira imagem sempre. <br /><br />");
define("_MI_WFD_QUALITY", "Qualidade do Thumbnail:");
define("_MI_WFD_QUALITYDSC", "Qualidade 0 (menor) 100 (maior)");
define("_MI_WFD_KEEPASPECT", "Manter Proporção da Imagem?");
define("_MI_WFD_KEEPASPECTDSC", "");
define("_MI_WFD_ADMINPAGE", "Nº de Arquivos no Índice de Admin:");
define("_MI_WFD_AMDMINPAGEDSC", "Nº de novos arquivos a mostrar na zona de admin dos módulos");
define("_MI_WFD_ARTICLESSORT", "Ordenar downloads:");
define("_MI_WFD_ARTICLESSORTDSC", "Selecione a ordem da listagem de downloads.");
define("_MI_WFD_TITLE", "Título");
define("_MI_WFD_RATING", "Pontuação");
define("_MI_WFD_WEIGHT", "Importância");
define("_MI_WFD_POPULARITY", "Popularidade");
define("_MI_WFD_SUBMITTED2", "Data de Envio");
define('_MI_WFD_COPYRIGHT', 'Copyright:');
define('_MI_WFD_COPYRIGHTDSC', 'Selecione para mostrar Copyright na página de download.');

// Description of each config items
define('_MI_WFD_PLATFORMDSC', 'Lista das Plataformas <br />Separar com uma | IMPORTANTE: Não mude isto após começar a usar o módulo! Adicione as novas plataformas no fim da lista só.');
define('_MI_WFD_SUBCATSDSC', 'Selecione SIM para mostrar sub-categorias. Selecionar NÃO vai esconder as sub-categorias nas listagens.');
define('_MI_WFD_LICENSEDSC', 'Licenças <br />Separar com uma |');

// Text for notifications
define('_MI_WFD_GLOBAL_NOTIFY', 'Global');
define('_MI_WFD_GLOBAL_NOTIFYDSC', 'Opções globais de notificações.');

define('_MI_WFD_CATEGORY_NOTIFY', 'Categoria');
define('_MI_WFD_CATEGORY_NOTIFYDSC', 'Opções de notificações correspondentes apenas à categoria corrente.');

define('_MI_WFD_FILE_NOTIFY', 'Arquivo');
define('_MI_WFD_FILE_NOTIFYDSC', 'Opções de notificações correspondentes apenas ao arquivo corrente.');

define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFY', 'Nova Categoria');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notificar-me quando uma nova categoria de arquivos for criada.');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Receber notificação quando uma nova categoria de arquivos for criada.');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação : Existe uma nova categoria de arquivos');                              

define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFY', 'Pedido de Modificação de Arquivo');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYCAP', 'Notificar-me de pedidos de modificações de arquivo.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYDSC', 'Receber notificação quando um pedido de modificações de arquivo acontecer.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação : Pedido de Modificação de Arquivo');

define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFY', 'Arquivo Corrompido');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYCAP', 'Notificar-me de novos relatórios de arquivo corrompido.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYDSC', 'Receber notificação quando houverem novos relatórios de arquivo corrompido.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação : Novos relatórios de arquivo corrompido');

define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFY', 'Arquivo Enviado');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYCAP', 'Notificar-me de novos arquivos enviados (esperando aprovação).');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYDSC', 'Receber notificação quando houverem novos arquivos enviados (esperando aprovação).');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação : Existem novos arquivos enviados (esperando aprovação)');

define('_MI_WFD_GLOBAL_NEWFILE_NOTIFY', 'Novos Arquivos');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYCAP', 'Notificar-me de novos arquivos publicados.');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYDSC', 'Receber notificação quando houverem novos arquivos publicados.');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação : Existem novos arquivos publicados');

define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFY', 'Arquivo Enviado Nesta Categoria');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notificar-me de novos arquivos enviados (esperando aprovação) nesta categoria.');   
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Receber notificação quando houverem novos arquivos enviados (esperando aprovação) nesta categoria.');      
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação : Existem novos arquivos enviados (esperando aprovação) nesta categoria'); 

define('_MI_WFD_CATEGORY_NEWFILE_NOTIFY', 'Novos Arquivos Nesta Categoria');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYCAP', 'Notificar-me de novos arquivos publicados nesta categoria.');   
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYDSC', 'Receber notificação quando houverem novos arquivos publicados nesta categoria.');      
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação : Existem novos arquivos publicados nesta categoria'); 

define('_MI_WFD_FILE_APPROVE_NOTIFY', 'Arquivo Aprovado');
define('_MI_WFD_FILE_APPROVE_NOTIFYCAP', 'Notificar-me quando este arquivo for aprovado.');
define('_MI_WFD_FILE_APPROVE_NOTIFYDSC', 'Receber notificação quando este arquivo for aprovado.');
define('_MI_WFD_FILE_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação : Este arquivo foi aprovado');

/* Added by Lankford on 2007/3/21 */
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFY', 'Arquivo Modificado');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYCAP', 'Notificar-me quando este arquivo for modificado.');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYDSC', 'Receber a notificação quando este arquivo for modificada.');
define('_MI_WFD_FILE_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Arquivo Modificado');

define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFY', 'Categoria Modificada');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYCAP', 'Notificar-me quando esta categoria for modificada.');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYDSC', 'Receber a notificação quando esta categoria for modificada.');
define('_MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação : Categoria Modificada');

define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFY', 'Modificação Geral');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYCAP', 'Notificar-me quando todos os arquivos forem modificados.');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYDSC', 'Receber a notificação quando todos os arquivos forem modificados.');
define('_MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação : Modificação Geral');
/* End add block */

define('_MI_WFD_AUTHOR_INFO', "Informação de Desenvolvimento");
define('_MI_WFD_AUTHOR_NAME', "Desenvolvedor");
define('_MI_WFD_AUTHOR_DEVTEAM', "Equipe de Desenvolvimento");
define('_MI_WFD_AUTHOR_WEBSITE', "Desenvolvedor website");
define('_MI_WFD_AUTHOR_EMAIL', "E-mail do Desenvolvedor");
define('_MI_WFD_AUTHOR_CREDITS', "Créditos");
define('_MI_WFD_MODULE_INFO', "Informação do Desenvolvedor do Modulo");
define('_MI_WFD_MODULE_STATUS', "Status do Desenvolvimento");
define('_MI_WFD_MODULE_DEMO', "Site Demo");
define('_MI_WFD_MODULE_SUPPORT', "Site de Suporte Oficial");
define('_MI_WFD_MODULE_BUG', "Reportar um bug deste módulo");
define('_MI_WFD_MODULE_FEATURE', "Sugerir um novo aperfeiçoamento para este módulo");
define('_MI_WFD_MODULE_DISCLAIMER', "Aviso de Isenção de Responsabilidade");
define('_MI_WFD_RELEASE', "Data do Release: ");

define('_MI_WFD_MODULE_MAILLIST', "SmartFactory Mailing Lists");

define('_MI_WFD_MODULE_MAILANNOUNCEMENTS', "Anúncios Mailing List");
define('_MI_WFD_MODULE_MAILBUGS', "Bug Mailing List");
define('_MI_WFD_MODULE_MAILFEATURES', "Características Mailing List");

define('_MI_WFD_MODULE_MAILANNOUNCEMENTSDSC', "Get the latest announcements from SmartFactory.");
define('_MI_WFD_MODULE_MAILBUGSDSC', "Bug Tracking and submission mailing list");
define('_MI_WFD_MODULE_MAILFEATURESDSC', "Request New Features mailing list.");

define('_MI_WFD_WARNINGTEXT', "THE SOFTWARE IS PROVIDED BY SMARTFACTORY \"AS IS\" AND \"WITH ALL FAULTS.\"
SMARTFACTORY MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, SMARTFACTORY MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN SMARTFACTORY WEBSITE. IN NO
EVENT WILL SMARTFACTORY BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IFSMARTFACTORY HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_WFD_AUTHOR_CREDITSTEXT',"The SmartFactory Team would like to thank the following people for their help and support during the development phase of this module:<br /><br />tom, mking, paco1969, mharoun, Talis, m0nty, steenlnielsen, Clubby, Geronimo, bd_csmc, herko, LANG, Stewdio, tedsmith, veggieryan, carnuke, MadFish.<br /><br />And on a personal note, I would like to thank the special girl in my life who I love dearly and who gives me the strength and support to do all of this.");
define('_MI_WFD_AUTHOR_BUGFIXES', "Bug Fix History");

define('_MI_WFD_COPYRIGHTIMAGE', "Images copyright WF-Project/SmartFactory and may only be used with permission");

// mirror defines
define('_MI_WFD_MIRROR_USEIMAGES', 'Exibir os Logos dos Mirrors?'); // not implemented yet
define('_MI_WFD_MIRROR_USEIMAGESDSC', 'Selecione sim para exibir o logo de cada mirror'); // not implemented yet
define('_MI_WFD_MIRROR_IMGWIDTH', 'Largura para exibição do Logo'); // not implemented yet
define('_MI_WFD_MIRROR_IMGWIDTHDSC', 'Largura de exibição para o logo do mirror'); // not implemented yet
define('_MI_WFD_MIRROR_IMGHEIGHT', 'Altura para exibição do Logo'); // not implemented yet
define('_MI_WFD_MIRROR_IMGHEIGHTDSC', 'Altura para exibição do logo do mirror'); // not implemented yet
define('_MI_WFD_MIRROR_AUTOAPPROVE','Auto Aprovar Mirrors Submetidos');
define('_MI_WFD_MIRROR_AUTOAPPROVEDSC','Selecione para aprovar mirrors submetidos sem moderação');

define('_MI_WFD_MIRROR_MAXIMGWIDTH','Largura do Logo de Upload'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGWIDTHDSC','Largura Máxima de Logo permitida para upload de logos de arquivos'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGHEIGHT','Altura de Logo de Upload'); // not implemented yet
define('_MI_WFD_MIRROR_MAXIMGHEIGHTDSC','Altura Máxima de Logo permitida para upload de logos de arquivos'); // not implemented yet

define('_MI_WFD_MIRROR_ENABLE','Habilitar Sistema de Mirrors');
define('_MI_WFD_MIRROR_ENABLEDSC','');
define('_MI_WFD_MIRROR_ENABLEONCHK','Habilitar checagem de Servidores Online');
define('_MI_WFD_MIRROR_ENABLEONCHKDSC','Habilitar checagem de servidores para Mirrors<br />Isto pode sobrecarregar sua página se<br />você tiver muitos mirrors');
define('_MI_WFD_MIRROR_ALLOWSUBMISS','Mirrors submetidos por Usuários:');
define('_MI_WFD_MIRROR_ALLOWSUBMISSDSC','Permitir que os Usuários Submetam Novos Mirrors  ');
define('_MI_WFD_MIRROR_MIRRORIMAGES','Diretório para Uploads de Logos de Mirrors'); // not implemented yet
define('_MI_WFD_MIRROR_MIRRORIMAGESDSC','Diretório para Uploads de Logos de Mirrors'); // not implemented yet
?>