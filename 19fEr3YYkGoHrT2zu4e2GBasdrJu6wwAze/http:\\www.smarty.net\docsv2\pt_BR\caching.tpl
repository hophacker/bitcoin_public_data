http://www.smarty.net/docsv2/pt_BR/caching.tpl
HTTP/1.1 200 OK
Date: Thu, 24 Jul 2014 08:26:24 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 8449
Connection: close
Content-Type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Chapter 14. Caching | Smarty</title>
    <meta name="description" content="Smarty is a template engine for PHP.">
    <meta name="keywords" content="smarty, template, engine, php">
    <style type="text/css" media="screen">
    @import "/css/screen/global.css";
    @import "/css/typography.css";
    </style>
    
    <!--[if lt IE 7]>
    <style type="text/css" media="screen">
    @import "/css/screen/fix_ie.css";
    </style>
    <![endif]-->
    
    <!--[if IE 7]>
    <style type="text/css" media="screen">
    @import "/css/screen/fix_ie7.css";
    </style>
    <![endif]-->
    
    <link rel="stylesheet" type="text/css" media="print" href="/css/typography.css">
    <link rel="stylesheet" type="text/css" media="print" href="/css/print/global.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/js/bbedit.css">
    
    <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAtNLTcaiYcFN-f4XrzpVY_RSkE6bExsEa6fcoWABjZpep9Iy-rxQHKn32rDn2QOaRGdO78OCTegXQvw"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/jquery.bbedit.min.js"></script>

    <link href="/js/prettify/prettify.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/js/prettify/prettify.js"></script>    
    
    <script type="text/JavaScript"> 
     $(document).ready(function(){
       prettyPrint();
              $("#commentFormBodyText").bbedit({
           highlight: true,
           enableSmileybar: false,
           tags: 'b,i,url,code,quote'
       });
       $("#commentPreviewText").hide();
       $("#commentPostedText").hide();
       $("#commentBusyIcon").hide();
       $("#commentForm").submit(function() { return false; });
       $("#commentFormPreviewButton").click(function(){
         $("#commentBusyIcon").show();
         $.post("/comments/preview", { body: $("#commentFormBodyText").val(), author: $("#commentFormAuthorText").val() },
            function(data){
              var options = {};
              if($("#commentPreviewText").is(":visible")) {
                $("#commentPreviewText").hide('blind',options,500,function() {
                  $("#commentPreviewText").html(data);
                  $("#commentPreviewText").show('blind',options,500,function() {
                    $("#commentBusyIcon").hide();
                  });                  
                });
              } else {
                $("#commentPreviewText").html(data);
                $("#commentPreviewText").show('blind',options,500,function() {
                  $("#commentBusyIcon").hide();
                });                  
              }
            });
       }); 
       $("#commentFormPostButton").click(function(){
         $("#commentBusyIcon").show();
         $.post("/comments/post", { body: $("#commentFormBodyText").val(), author: $("#commentFormAuthorText").val(), page_id: $("#commentFormPageID").val(), email: $("#commentFormEmailText").val(), challenge: $("#commentFormChallengeText").val(), obf: $("#commentFormChallengeObf").val()},
            function(data){
              var options = {};
              $("#commentPostedText").html(data);
              if($("#commentPreviewText").is(":visible")) {
                $("#commentPreviewText").hide('blind',options,500,function() {
                  $("#commentPostedText").show('blind',options,500,function() {
                    $("#commentBusyIcon").hide();
                    $("#commentFormPostButton").attr('disabled','true'); 
                    $("#commentFormPreviewButton").attr('disabled','true'); 
                  });
                });
              } else {
                $("#commentPostedText").show('blind',options,500,function() {
                  $("#commentBusyIcon").hide();
                  $("#commentFormPostButton").attr('disabled','true'); 
                  $("#commentFormPreviewButton").attr('disabled','true'); 
                });
              }                  
            });
       });
            });
          function clearDefaultandCSS(el) {
     	if (el.defaultValue==el.value) el.value = ""
     	// If Dynamic Style is supported, clear the style
     	if (el.style) el.style.cssText = ""
     }
         </script>
    
    <script type="text/javascript" src="/js/smarty.js"></script>
  	<script type="text/javascript" src="http://partner.googleadservices.com/gampad/google_service.js"> 
  	</script> 
  	<script type="text/javascript"> 
  	  GS_googleAddAdSenseService("ca-pub-8878956630941543");
  	  GS_googleEnableAllServices();
  	</script> 
  	<script type="text/javascript"> 
  	  GA_googleAddSlot("ca-pub-8878956630941543", "smarty_footer");
  	  GA_googleAddSlot("ca-pub-8878956630941543", "smarty_left_box");
  	  GA_googleAddSlot("ca-pub-8878956630941543", "smarty_right_skyscraper");
  	  GA_googleAddSlot("ca-pub-8878956630941543", "smarty_top_banner");
  	</script> 
  	<script type="text/javascript"> 
  	  GA_googleFetchAds();
  	</script>
  </head>
  <body>
  <a class="skiplink" accesskey="S" href="#mainContent">Skip over navigation</a>
  <div id="wrapper">
      <div id="header">
        <div id="header_logo">
          <div id="logo"><a href="/"><img src="/images/logo_print.gif" width="249" height="74" alt="Smarty Template Engine"></a></div>
        </div>
        <div id="header_ad" style="float: right;">
      		<script type="text/javascript"> 
      		  GA_googleFillSlot("smarty_footer");
      		</script>
      	</div>
        <div class="clear"></div>
      </div>
      <div id="nav">
        <ul class="nav navHorz">
		  		  		  		  		  		              		<li><a href="/" accesskey="1">Home</a></li>
					  		              		<li><a href="/download" >Download</a></li>
					  		              		<li><a href="/documentation" accesskey="6">Documentation</a></li>
					  		              		<li><a href="http://smarty.incutio.com/?page=SmartyFrequentlyAskedQuestions" >FAQ</a></li>
					  		              		<li><a href="/forums/" >Forum</a></li>
					  		              		<li><a href="/mailinglists" >Mailing Lists</a></li>
					          </ul>
        
        <form action="/search" method="get">
          <p>
            <input type="text" name="q" size="30" value="Search..." accesskey="4" class="field" onclick="smarty.removeDefaultValue(this, 'Search...');" onfocus="smarty.removeDefaultValue(this, 'Search...');" onblur="smarty.restoreDefaultValue(this, 'Search...');">
            in
            <select name="show" class="field">
              <optgroup label="Documentation">
                <option value="manual-en">English</option>
                <option value="manual-de">German</option>
                <option value="manual-es">Spanish</option>
                <option value="manual-fr">French</option>
                <option value="manual-it">Italian</option>
                <option value="manual-ja">Japanese</option>
                <option value="manual-pt_BR">Portuguese</option>
                <option value="manual-ru">Russian</option>
              </optgroup>
              <optgroup label="Mailing Lists">
                <option value="smarty-general-list">General</option>
                <option value="smarty-dev-list">Development</option>
              </optgroup>
            </select>
            <input type="image" src="/images/search.png" alt="Submit Search" class="button">
          </p>
        </form>
        <div class="clear"></div>
      </div>
     
      <div class="col colSecondary">
        <div class="box box1">
          <h1 class="boxHead">Get Smarty</h1>
          <ul class="nav navVert"
            ><li><a href="/download">Download</a></li
          ></ul>
        </div>
        
        <div class="box box1">
          <h1 class="boxHead">About Smarty</h1>
          <ul class="nav navVert"
          ><li><a href="/about_smarty">All About Smarty</a></li
            ><li><a href="/why_use">Why use it?</a></li
              ><li><a href="/use_cases">Use Cases and Work Flow</a></li
            ><li><a href="/syntax_comparison">Syntax Comparison</a></li
            ><li><a href="/inheritance">Template Inheritance</a></li
            ><li><a href="/best_practices">Best Practices</a></li
            ><li><a href="/crash_course">Crash Course</a></li
            ><li><a href="/v3_overview">Version 3 Overview</a></li
            ><li><a href="/forums/viewforum.php?f=12">Testimonials</a></li
              ><li><a href="http://smarty.incutio.com/?page=SitesUsingSmarty">Sites Using Smarty</a></li
          ></ul>
        </div>
        
        <div class="box box1">
          <h1 class="boxHead">Resources</h1>
          <ul class="nav navVert"
          ><li><a href="http://smarty-php.googlecode.com/svn/trunk/distribution/SMARTY_2_BC_NOTES.txt">Smarty 2-&gt;3 upgrade notes</a></li
            ><li><a href="http://smarty-php.googlecode.com/svn/trunk/distribution/README">README (from distro)</a></li
          ><li><a href="/quick_install">Quick Install</a></li
	      ><li><a href="/documentation">Documentation</a></li
		  ><li><a href="/forums/">Discussion Forums</a></li
	      ><li><a href="/sampleapp1">Example App</a></li
          ><li><a href="irc://irc.freenode.net/smarty">IRC (chat)</a></li
          ><li><a href="/mailinglists">Mailing Lists</a></li
          ><li><a href="http://smarty.incutio.com/">Community Wiki</a></li
          ><li><a href="http://smarty.incutio.com/?page=SmartyFrequentlyAskedQuestions">FAQ (wiki)</a></li
          ><li><a href="http://www.smarty.net/forums/viewforum.php?f=23" accesskey="5">FAQ (forums)</a></li
          ><li><a href="http://www.jdoqocy.com/click-4355642-10718312?url=http%3A%2F%2Fwww.odesk.com%2Fcontractors%2Fskill%2Fsmarty%2Ffb%2F4.5-5.0-stars.4.0-4.5-stars%2Fsort%2Fadjusted-score%2Bdesc?vt_cmp=smarty">Hire Smarty Developers</a></li
          ></ul>
        </div>
        <div class="box box1">
          <h1 class="boxHead">Links</h1>
          <ul class="nav navVert"
          ><li><a href="http://www.php.net/">www.php.net</a></li
            ><li><a href="http://www.phpinsider.com/">www.phpinsider.com</a></li
            ><li><a href="http://www.ellysdirectory.com/">www.ellysdirectory.com</a></li
              
              
          ></ul>
        </div>
        <div class="box box1" id="bitcoin">
          <h1 class="boxHead">Donate</h1>
          <div align="center" class="boxContent">
            <div>
            <a href="javascript:void(0);" onclick="javascript:window.prompt ('Copy and paste address to your bitcoin software:', '19fEr3YYkGoHrT2zu4e2GBasdrJu6wwAze');"><img src="/images/bitcoin.png" width="25" height="25" alt="Donate Bitcoin" style="vertical-align:middle"> Bitcoin</a>
            </div>
            <div>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="AK2ZWFVSNJEDE">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal Donate" style="vertical-align:middle"> Paypal
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
            </div>
          </div>
        </div>
        <div class="box box1" id="smartyIcons">
          <h1 class="boxHead">Smarty Icon</h1>
          <div align="center" class="boxContent">
            <p style="text-align: left">You may use the Smarty logo according to the <a href="/copyright">trademark notice</a>.</p>
            <p>
              <img src="/images/icons/smarty_icon.gif" width="88" height="31" alt="Smarty Template Engine">
              <img src="/images/icons/smarty-80x15.png" width="80" height="15" alt="Smarty Template Engine">
            </p>
            <p style="text-align: left">
              For sponsorship, advertising, news or other inquiries, contact us at: <script type="text/javascript" language="javascript">
{document.write(String.fromCharCode(60,97,32,104,114,101,102,61,34,109,97,105,108,116,111,58,119,101,98,109,97,115,116,101,114,64,115,109,97,114,116,121,46,110,101,116,34,32,62,119,101,98,109,97,115,116,101,114,64,115,109,97,114,116,121,46,110,101,116,60,47,97,62))}
</script>

            </p>
          </div>
        </div>        
        <div class="box box1" id="sitesUsingSmarty">
          <h1 class="boxHead">Sites Using Smarty</h1>
          <div align="center" class="boxContent">
               <p>Largest classified with thousands of ads at <a href="http://www.shoppok.com">Shoppok</a></p>
			   <p>Buy <a href="http://www.cheapglasses123.com/">cheap eyeglasses</a> from <a href="http://www.cheapglasses123.com/">Cheapglasses123.com</a> and save up to 80%.</p>
			   <p>Buy wedding dresses on SiteSteer.com - <a href="http://www.sitesteer.com/">Best Online Wedding Dress Store</a></p>
      			<p>
      			  Buy <a href="http://www.australiaglasses.com/">prescription glasses</a> from <a href="http://www.australiaglasses.com/">www.australiaglasses.com</a> and save.
				</p>
				<p>
  					<a href="http://www.glassespeople.com/">Cheap Glasses</a> Now On Sale at <a href="http://www.glassespeople.com/">GlassesPeople.com</a>. Starts At $7.95.
      			</p>
      			<p>
      			Where to buy <a href="http://www.weddingdresstrend.com/">discount wedding dresses</a> and cheap smart dresses free shipping - <a href="http://www.weddingdresstrend.com/">Weddingdresstrend.com</a>
      			</p>
      			<p>
                	<script type="text/javascript"> 
      			  GA_googleFillSlot("smarty_left_box");
      			</script>
      			</p>
          </div>
        </div>        

      </div><!-- end colSecondary -->
      
      <div class="col colMain" id="mainContent">
      
<div class="navheader">
<table width="100%" summary="Navigation header">
<tr><th colspan="3" align="center">Chapter 14. Caching</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="api.unregister.resource.tpl">Prev</a> </td>
<th width="60%" align="center">Part III. Smarty para Programadores</th>
<td width="20%" align="right"> <a accesskey="n" href="caching.multiple.caches.tpl">Next</a>
</td>
</tr>
</table>
<hr>
</div>
<div class="chapter" title="Chapter 14. Caching">
<div class="titlepage"><div><div><h2 class="title">
<a name="caching"></a>Chapter 14. Caching</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl>
<dt><span class="sect1"><a href="caching.tpl#caching.setting.up">Configurando Caching</a></span></dt>
<dt><span class="sect1"><a href="caching.multiple.caches.tpl">Multiple Caches Per Page</a></span></dt>
<dt><span class="sect1"><a href="caching.groups.tpl">Grupos de Cache</a></span></dt>
<dt><span class="sect1"><a href="caching.cacheable.tpl">Controlling Cacheability of Plugins' Output</a></span></dt>
</dl>
</div>
<p>
   Caching é usado para aumentar a velocidade de chamada para <a class="link" href="api.display.tpl" title="display">display()</a> ou <a class="link" href="api.fetch.tpl" title="fetch">fetch()</a> salvando isso num arquivo de saída. Se há uma versão
   de cache disponível para a chamada, isso é mostrado ao invés de regerar a saída de dados.
   Caching pode fazer coisas tremendamente rápidas,
   especialmente templates com longo tempo computacional. Desde a saída de dados do
   display() ou fetch() está em cache, um arquivo de cache poderia ser composto por
   diversos arquivos de templates, arquivos de configuração, etc.
   </p>
<p>
   Desde que templates sejam dinâmicos, é importante isso ter cuidado com
   o que você está fazendo cache e por quanto tempo. Por exemplo, se você está mostrando
   a página principal do seu website na qual as alterações de conteúdo são muito frequentes,
   isso funciona bem para cache dessa por uma hora ou mais. Um outro modo, se você está
   mostrando uma página com um mapa do tempo contendo novas informações por minuto, não
   faz sentido fazer cache nesta página.
   </p>
<div class="sect1" title="Configurando Caching">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="caching.setting.up"></a>Configurando Caching</h2></div></div></div>
<p>
   A primeira coisa a fazer é habilitar o caching. Isso é feito pela configuração <a class="link" href="variable.caching.tpl" title="$caching">$caching</a> = true (or 1.)     
   </p>
<div class="example">
<a name="id2766320"></a><p class="title"><b>Example 14.1. Habilitando Caching</b></p>
<div class="example-contents"><pre class="programlisting">
require('Smarty.class.php');
$smarty = new Smarty;

$smarty-&gt;caching = true;

$smarty-&gt;display('index.tpl');</pre></div>
</div>
<br class="example-break"><p>
	Com caching habilitado, a chamada para a função display('index.tpl') irá trazer
	o template como usual, mas também
	salva uma cópia disso para o arquivo de saída (uma cópia de cache) in the <a class="link" href="variable.cache.dir.tpl" title="$cache_dir">$cache_dir</a>.
	Na próxima chamada de display('index.tpl'), a cópia em cache será usada
	ao invés de trazer novamente o template.
	</p>
<div class="note" title="Notas Técnicas" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Notas Técnicas</h3>
<p>
	Os arquivos no $cache_dir são nomeados com similaridade ao nome do arquivo de template.
	Embora eles terminem com a extensão ".php", eles não são realmente scripts executáveis de php.
	Não edite estes arquivos!
	</p>
</div>
<p>
	Cada página em cache tem um período de tempo limitado determinado por <a class="link" href="variable.cache.lifetime.tpl" title="$cache_lifetime">$cache_lifetime</a>. O padrão do valor é
        3600 segundos, ou 1 hora. Após o tempo expirar, o cache é regerado.
	É possível dar tempos individuais para caches com seu próprio tempo
	de expiração pela configuração $caching = 2. Veja a documentação em <a class="link" href="variable.cache.lifetime.tpl" title="$cache_lifetime">$cache_lifetime</a> para detalhes.
	</p>
<div class="example">
<a name="id2767011"></a><p class="title"><b>Example 14.2. Configurando cache_lifetime por cache</b></p>
<div class="example-contents"><pre class="programlisting">
require('Smarty.class.php');
$smarty = new Smarty;

$smarty-&gt;caching = 2; // lifetime is per cache

// set the cache_lifetime for index.tpl to 5 minutes
$smarty-&gt;cache_lifetime = 300;
$smarty-&gt;display('index.tpl');

// set the cache_lifetime for home.tpl to 1 hour
$smarty-&gt;cache_lifetime = 3600;
$smarty-&gt;display('home.tpl');

// NOTE: the following $cache_lifetime setting will not work when $caching = 2.
// The cache lifetime for home.tpl has already been set
// to 1 hour, and will no longer respect the value of $cache_lifetime.
// The home.tpl cache will still expire after 1 hour.
$smarty-&gt;cache_lifetime = 30; // 30 seconds
$smarty-&gt;display('home.tpl');</pre></div>
</div>
<br class="example-break"><p>
	Se <a class="link" href="variable.compile.check.tpl" title="$compile_check">$compile_check</a> está habilitado,
	cada arquivo de template e arquivo de configuração que está envolvido com o arquivo em cache
	é checado por modificações. Se algum destes arquivos foi modificado desde que o último cache
	foi gerado, o cache é imediatamente regerado. 
	Isso é ligeiramente uma forma de optimização de performance de overhead, deixe $compile_check setado para false.
	</p>
<div class="example">
<a name="id2767056"></a><p class="title"><b>Example 14.3. Habilitando $compile_check</b></p>
<div class="example-contents"><pre class="programlisting">
require('Smarty.class.php');
$smarty = new Smarty;

$smarty-&gt;caching = true;
$smarty-&gt;compile_check = true;

$smarty-&gt;display('index.tpl');</pre></div>
</div>
<br class="example-break"><p>
	Se <a class="link" href="variable.force.compile.tpl" title="$force_compile">$force_compile</a> está habilitado,
	os arquivos de cache irão sempre ser regerados. Isso é efetivamente desativar caching.
        $force_compile é usualmente para propósitos de debug somente, um caminho mais
	eficiente de desativar caching é setar o <a class="link" href="variable.caching.tpl" title="$caching">$caching</a> = false (ou 0.)
	</p>
<p>
	A função <a class="link" href="api.is.cached.tpl" title="is_cached">is_cached()</a> 
	pode ser usada para testar se um template tem um cache válido ou não.
	Se você tem um template com cache que requer alguma coisa como um retorno do banco de dados,
	você pode usar isso para pular este processo.
	</p>
<div class="example">
<a name="id2767116"></a><p class="title"><b>Example 14.4. Usando is_cached()</b></p>
<div class="example-contents"><pre class="programlisting">
require('Smarty.class.php');
$smarty = new Smarty;

$smarty-&gt;caching = true;

if(!$smarty-&gt;is_cached('index.tpl')) {
	// No cache available, do variable assignments here.
	$contents = get_database_contents();
	$smarty-&gt;assign($contents);
}

$smarty-&gt;display('index.tpl');</pre></div>
</div>
<br class="example-break"><p>
	Você pode deixar partes da sua página dinâmica com a função de template <a class="link" href="language.function.insert.tpl" title="insert">insert</a>.
	Vamos dizer que sua página inteira pode ter cache exceto para um banner que é
	mostrado abaixo do lado direito da sua página. Usando uma função insert para o banner,
	você pode deixar esse elemento dinâmico dentro do conteúdo de cache. Veja a documentação
	em <a class="link" href="language.function.insert.tpl" title="insert">insert</a> para 
	detalhes e exemplos.
	</p>
<p>
	Você pode limpar todos os arquivos de cache com a função <a class="link" href="api.clear.all.cache.tpl" title="clear_all_cache">clear_all_cache()</a>, ou
	arquivos de cache individuais (ou grupos) com a função <a class="link" href="api.clear.cache.tpl" title="clear_cache">clear_cache()</a>.	
	</p>
<div class="example">
<a name="id2767185"></a><p class="title"><b>Example 14.5. Limpando o cache</b></p>
<div class="example-contents"><pre class="programlisting">
require('Smarty.class.php');
$smarty = new Smarty;

$smarty-&gt;caching = true;

// clear out all cache files
$smarty-&gt;clear_all_cache();

// clear only cache for index.tpl
$smarty-&gt;clear_cache('index.tpl');

$smarty-&gt;display('index.tpl');</pre></div>
</div>
<br class="example-break">
</div>
</div>
<div class="navfooter">
<hr>
<table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="api.unregister.resource.tpl">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="smarty.for.programmers.tpl">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="caching.multiple.caches.tpl">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">unregister_resource </td>
<td width="20%" align="center"><a accesskey="h" href="index.tpl">Home</a></td>
<td width="40%" align="right" valign="top"> Multiple Caches Per Page</td>
</tr>
</table>
</div>

		
		  <div class="comments">
      
                  <div id="commentHeader"><strong>Comments</strong></div>
          <div class="commentInfo">
          
                                <div class="commentWrapperEven">
              <div class="commentBody"><emphasis>No comments for this page.</emphasis></div>
            </div>          
                    </div>
          <div id="commentFormWrapper">
            <div id="commentFormHeader"><strong>Post a Comment</strong></div>
            <div id="commentFormElements">
            <form id="commentForm" method="post" action="/comments/post">
              <div id="commentText" style="font-style: italic; color:#f00">All comments are moderated. Support questions are ignored, use the <a href="/forums/">forums</a> instead.</div>
              <div id="commentFormAuthor">Author: <input id="commentFormAuthorText" type="text" name="author" size="40" value="anonymous" style="color: grey" onFocus="clearDefaultandCSS(this)"></div>
              <div id="commentFormEmail">Email: <input id="commentFormEmailText" type="text" name="email" size="30" value="your@email.com" style="color: grey" onFocus="clearDefaultandCSS(this)"> <span style="font-style: italic">(not shown)</span></div>
              
              <div id="commentFormChallenge">What is 10 plus 2? <input id="commentFormChallengeText" type="text" name="challenge" size="30" value="" style="color: grey"> <span style="font-style: italic">(Are you human?)</span></div>
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="7d391c6224c3d287d9765a7135cde783">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docsv2/pt_BR/caching.tpl">
            </form>
            </div>
          </div>
          <div id="commentPreviewText">
          </div>
          <div id="commentPostedText">
          </div>
              
      </div>
      
      </div><!-- end colMain -->
      
      <div class="col colAdditional" align="left">
        <div id="skyscraper">
    		<script type="text/javascript"> 
    		  GA_googleFillSlot("smarty_right_skyscraper");
    		</script>
    		</div>
  		  <div class="box box1" id="smartySponsors">
          <h1 class="boxHead">Sponsors <a href="/sponsors">[info]</a></h1>
          <div class="boxContent">
						  <a href="http://www.webhost.uk.net/">UK Web Hosting</a> <span style="font-size: .7em">@webhost.uk.net</span><br>
						  <a href="http://www.rshosting.com/">Best Web Hosting</a> <span style="font-size: .7em">@rshosting.com</span><br>
						  <a href="http://www.webhostinguk.com/">Web Hosting UK</a> <span style="font-size: .7em">@webhostinguk.com</span><br>
						  <a href="http://www.infrenion.com/">Unlimited Web Hosting</a> <span style="font-size: .7em">@infrenion.com</span><br>
						  <a href="http://www.morphodo.com/de/app-entwicklung.html">App Entwicklung</a> <span style="font-size: .7em">@morphodo.com</span><br>
						  <a href="http://www.dhgate.com/">Buy from China</a> <span style="font-size: .7em">@dhgate.com</span><br>
						  <a href="http://www.fcinternetmarketing.com/">First Click Internet Marketing</a> <span style="font-size: .7em">@fcinternetmarketing.com</span><br>
						
			
          </div>
        </div>
  		  <div class="box box1" id="smartyAds">
  		    <h1 class="boxHead">Using Smarty</h1>
          <div class="boxContent">
			      <a href="http://www.dissertationteam.com/">dissertationteam.com</a><br>
			      <a href="http://jackpot4me.com/super-lig/galatasaray_istanbul.html">galatasaray</a><br>
			      <a href="http://www.dresses1000.com/">Quinceanera Dresses</a><br>
			      <a href="http://www.magicquinceanera.com/">quinceanera gowns</a><br>
			      <a href="http://www.besthochzeit.com/Bridesmaid-Dresses-c7/">Dresses for Bridesmaid</a><br>
			      <a href="http://www.dressfirst.fr/Robes-De-Bal-c18/">robes de bal</a><br>
			      <a href="http://skincareinsight.com/">skin care</a><br>
      			
      			
          </div>
  		    <h1 class="boxHead">I.T Certifications</h1>
          <div class="boxContent">
			      <a href="http://www.pass-guaranteed.com/">I.T Certification Exams</a><br>
			      <a href="http://www.firsttrycertify.com/">Certification Practice Tests</a><br>
          </div>
        </div>
      </div><!-- end colAdditional -->    
      <div class="clear"></div>
    </div><!-- end wrapper -->

  <div id="footer">
    <div id="colTopFooter">
      <a href="/credits" class="rightMar">credits</a>
      <a href="/copyright" accesskey="8" class="rightMar">copyright</a>
      <a href="/accessibility" accesskey="0">accessibility</a>
    </div>
    <p>Smarty Copyright &copy; 2002 &ndash; 2014 New Digital Group, Inc. All rights reserved.</p>
    <p>This page generated in 0.02332 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
  </div>    
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"> 
</script> 
<script type="text/javascript"> 
_uacct = "UA-638513-4";
urchinTracker();
</script>
<script type="text/javascript">
    var GoSquared={};
    GoSquared.acct = "GSN-138769-Y";
    (function(w){
        function gs(){
            w._gstc_lt=+(new Date); var d=document;
            var g = d.createElement("script"); g.type = "text/javascript"; g.async = true; g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
            var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(g, s);
        }
        w.addEventListener?w.addEventListener("load",gs,false):w.attachEvent("onload",gs);
    })(window);
</script>
</body>
</html>

