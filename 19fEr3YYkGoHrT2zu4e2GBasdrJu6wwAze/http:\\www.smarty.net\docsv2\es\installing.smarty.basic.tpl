http://www.smarty.net/docsv2/es/installing.smarty.basic.tpl
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 07:37:26 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 9292
Connection: close
Content-Type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Instalación Básica | Smarty</title>
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
<tr><th colspan="3" align="center">Instalación Básica</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="installation.tpl">Prev</a> </td>
<th width="60%" align="center">Chapter 2. Instalación</th>
<td width="20%" align="right"> <a accesskey="n" href="installing.smarty.extended.tpl">Next</a>
</td>
</tr>
</table>
<hr>
</div>
<div class="sect1" title="Instalación Básica">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="installing.smarty.basic"></a>Instalación Básica</h2></div></div></div>
<p>
    Instale los archivos de la libreria de Smarty que estan en el directorio 
    de distribución /libs/.
    Estos son los archivos PHP que usted NO EDITARA. Estos archivos son toda
    las aplicaciones comunes y ellos son actualizados cuando usted actualiza 
    a una nueva versión de Smarty.
   </p>
<div class="example">
<a name="id3062432"></a><p class="title"><b>Example 2.1. Archivos de la libreria Smarty</b></p>
<div class="example-contents"><pre class="screen">

Smarty.class.php
Smarty_Compiler.class.php
Config_File.class.php
debug.tpl
/internals/*.php (all of them)
/plugins/*.php (all of them)

    </pre></div>
</div>
<br class="example-break"><p>
    Smarty utiliza una constante de PHP llamada <a class="link" href="smarty.constants.tpl#constant.smarty.dir" title="SMARTY_DIR">SMARTY_DIR</a> que es la ruta para 
    el directorio de la biblioteca de Smarty 'libs/'. Basicamente, si su 
    aplicación puede encontrar el archivo <code class="filename">Smarty.class.php
    </code>, usted no necesita definir <a class="link" href="smarty.constants.tpl#constant.smarty.dir" title="SMARTY_DIR">SMARTY_DIR</a>, 
    Smarty lo encontrará. Por consiguiente si, <code class="filename">Smarty.class.php
    </code> no esta incluido en el path, y no es abastecido por 
    una ruta absoluta para encontrar su aplicación, entonces usted 
    debe definir SMARTY_DIR manualmente.  SMARTY_DIR <span class="emphasis"><em>debe
    </em></span> incluir una barra de seguimento.
   </p>
<p>
    Aquí esta un ejemplo de como se crea una instancia de Smarty en sus
    scripts PHP:
   </p>
<div class="example">
<a name="id3062498"></a><p class="title"><b>Example 2.2. Creando una instancia Smarty de Smarty</b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php
require('Smarty.class.php');
$smarty = new Smarty;
?&gt;

    </pre></div>
</div>
<br class="example-break"><p>
    Intente correr el script de arriba. Si usted obtiene un error diciendo que
    el archivo <code class="filename">Smarty.class.php</code>
    no fue encontrado, puedes usar una de las siguientes opciones:
   </p>
<div class="example">
<a name="id3062526"></a><p class="title"><b>Example 2.3. Reemplazar por la ruta absulta de la libreria del archivo</b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php
require('/usr/local/lib/php/Smarty/Smarty.class.php');
$smarty = new Smarty;
?&gt;

    </pre></div>
</div>
<br class="example-break"><div class="example">
<a name="id3062545"></a><p class="title"><b>Example 2.4. Adicionar el directorio de la libreria para incluirlo en el 
      include_path de PHP</b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php
// Edite su archivo php.ini, y adicione el directorio de la libreria de Smarty
// include_path  y  reinicie su servidor web.
// Entonces lo siguiente debe funcionar:
require('Smarty.class.php');
$smarty = new Smarty;
?&gt;

    </pre></div>
</div>
<br class="example-break"><div class="example">
<a name="id3062560"></a><p class="title"><b>Example 2.5. Defina la constante SMARTY_DIR manualmente</b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php
define('SMARTY_DIR', '/usr/local/lib/php/Smarty/');
require(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty;
?&gt;

    </pre></div>
</div>
<br class="example-break"><p>
    Ahora que la libreria de archivos esta en su sitio, es tiempo 
    de configurar los directorios de Smarty para su aplicación.
   </p>
<p>
    Smarty require cuatro directorios (por defaul) llamados
    <code class="filename">'templates/'</code>, 
    <code class="filename">'templates_c/'</code>, 
    <code class="filename">'configs/'</code> y 
    <code class="filename">'cache/'</code>. 
   </p>
<p>
    Cada uno de estos son para definir las propiedades de las clases de Smarty.
    <a class="link" href="api.variables.tpl#variable.template.dir" title="$template_dir">
    <code class="varname">$template_dir</code></a>,
    <a class="link" href="variable.compile.dir.tpl" title="$compile_dir">
    <code class="varname">$compile_dir</code></a>,
    <a class="link" href="variable.config.dir.tpl" title="$config_dir">
    <code class="varname">$config_dir</code></a>, y
    <a class="link" href="variable.cache.dir.tpl" title="$cache_dir">
    <code class="varname">$cache_dir</code></a> respectivamente.
    Es altamente recomendado que usted configure un grupo 
    separado de estos directorios para cada aplicación que utilice de Smarty.
   </p>
<p>
     Asegurece que usted sabe la ubicación del document root de su servidor
     web. En nuestro ejemplo, el document root esta en
     <code class="filename">/web/www.example.com/docs/</code>. 
    Los directorios de Smarty solo son 
    accesados por la libreria de Smarty y nunca son accesados directamente 
    por el navegador. Por consiguiente para evitar cualquier preocupación 
    con la seguridad, es recomendado colocar estos directorios
    <span class="emphasis"><em> fuera </em></span> del document root.
   </p>
<p>
    Para nuestro ejemplo de instalación, configuraremos el ambiente de Smarty 
    para una aplicación de libro de visitas. Escojemos una aplicación solo 
    con el proposito de crear un directorio de nombre convencional.
    Usted puede usar el mismo ambiente para cualquier aplicación, solamente 
    sustituya "guestbook" con el nombre de su aplicación. 
    Nosotros colocaremos nuestros directorios de Smarty dentro de
    <code class="filename">/web/www.example.com/smarty/guestbook/</code>.
   </p>
<p>
    Usted necesita tener por lo menos un archivo dentro de su document root, 
    y que sea accesado por el navegador. Nosotros llamamos el script de 
    <span class="emphasis"><em>'index.php'</em></span>, y lo colocamos en un subdirectorio dentro del 
    document root llamado <code class="filename">/guestbook/</code>.
   </p>
<div class="note" title="Nota Técnica:" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Nota Técnica: </h3>
<p>
     Es conveniente configurar el servidor de forma que "index.php" pueda
     ser identificado como el índice del directório padre, de esta manera 
     si usted accesa http://www.example.com/guestbook/, el script 
     index.php será ejecutado sin "index.php" ni la URL.
     En Apache usted puede definir el sitio adicionando "index.php" en el 
     final de su configuración del directorio <span class="emphasis"><em>DirectoryIndex</em></span>
     (separando cada uno con espacios.) como en el ejemplo de httpd.conf.
    </p>
<p>
    <span class="emphasis"><em>DirectoryIndex
    index.htm index.html index.php index.php3 default.html index.cgi
    </em></span>
    </p>
</div>
<p>
    Veamos nuestra estructura de archivos hasta hora: 
   </p>
<div class="example">
<a name="id3062776"></a><p class="title"><b>Example 2.6. Ejemplo de estrutura de archivo</b></p>
<div class="example-contents"><pre class="screen">

/usr/local/lib/php/Smarty/Smarty.class.php
/usr/local/lib/php/Smarty/Smarty_Compiler.class.php
/usr/local/lib/php/Smarty/Config_File.class.php
/usr/local/lib/php/Smarty/debug.tpl
/usr/local/lib/php/Smarty/internals/*.php
/usr/local/lib/php/Smarty/plugins/*.php

/web/www.example.com/smarty/guestbook/templates/
/web/www.example.com/smarty/guestbook/templates_c/
/web/www.example.com/smarty/guestbook/configs/
/web/www.example.com/smarty/guestbook/cache/

/web/www.example.com/docs/guestbook/index.php

    </pre></div>
</div>
<br class="example-break"><p>
    Smarty necesitara  <span class="bold"><strong>permisos de escritura</strong></span>
    (usuarios de windows ingnorar) para
    <a class="link" href="variable.compile.dir.tpl" title="$compile_dir"><span class="emphasis"><em>$compile_dir</em></span></a> y
    <a class="link" href="variable.cache.dir.tpl" title="$cache_dir"><span class="emphasis"><em>$cache_dir</em></span></a>,
    esto garantiza que el usuario del servidor pueda escribir en ellos.
    Este es generalmente el usuarios "nobody" y el grupo "nobody".
    Para usuarios con X sistema operativo, el default es  "www" y el grupo "www".
    Si usted esta usando Apache, puede ver en su archivo httpd.conf 
    (normalmente en "/usr/local/apache/conf/") cual es el usuario y
    grupo que estan siendo usados.
   </p>
<div class="example">
<a name="id3062833"></a><p class="title"><b>Example 2.7. Configurando permisos de archivos</b></p>
<div class="example-contents"><pre class="programlisting">

chown nobody:nobody /web/www.example.com/smarty/guestbook/templates_c/
chmod 770 /web/www.example.com/smarty/guestbook/templates_c/

chown nobody:nobody /web/www.example.com/smarty/guestbook/cache/
chmod 770 /web/www.example.com/smarty/guestbook/cache/

    </pre></div>
</div>
<br class="example-break"><div class="note" title="Nota Técnica:" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Nota Técnica: </h3>
<p>
     chmod 770 puede ser una seguridad bastante fuerte, solo le permite al
     usuario "nobody" y al grupo "nobody" acesso de lectura/escritura a los 
     directorios. Si usted quiere abrir permiso de lectura a cualquiera 
     (en la mayoria de las veces para su propia conveniencia de querer ver 
     estos archivos), usted puede usar el 775 en lugar del 770.
    </p>
</div>
<p>
     Nosotros necesitamos crear el archivo index.tpl, para que Smarty lo 
     pueda cargar. Este estara localizado en su 
     <a class="link" href="api.variables.tpl#variable.template.dir" title="$template_dir">$template_dir</a>.
   </p>
<div class="example">
<a name="id3062883"></a><p class="title"><b>Example 2.8. Editando /web/www.example.com/smarty/guestbook/templates/index.tpl</b></p>
<div class="example-contents"><pre class="screen">


{* Smarty *}

Hello, {$name}!

    </pre></div>
</div>
<br class="example-break"><div class="note" title="Nota Técnica:" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Nota Técnica:</h3>
<p>
     {* Smarty *} Esto es un <a class="link" href="language.basic.syntax.tpl#language.syntax.comments" title="Comentarios">comentario
     </a> en el template. Este no es obligatorio, pero si una buena practica 
     iniciar todos sus archivos de plantilla con estos comentarios.
     Esto hace facilmente reconocibles a los archivos a pesar la extención 
     del archivo. Por ejemplo, editores de texto pueden reconocer el archivo 
     y habilitar un realce de sintaxis especial.
    </p>
</div>
<p>
     Ahora vamos a editar el index.php. crearemos una instancia de Smarty, 
     daremos valor a las variables del template y mostraremos el archivo 
     index.tpl. 
     En el ambiente de nuestro ejemplo, "/usr/local/lib/php/Smarty" esta
     dentro de include_path. Asegurese que exista el mismo, o utilice la 
     ruta absoluta.
   </p>
<div class="example">
<a name="id3062934"></a><p class="title"><b>Example 2.9. Editando  /web/www.example.com/docs/guestbook/index.php</b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php

// load Smarty library
require('Smarty.class.php');

$smarty = new Smarty;

$smarty-&gt;template_dir = '/web/www.example.com/smarty/guestbook/templates/';
$smarty-&gt;compile_dir = '/web/www.example.com/smarty/guestbook/templates_c/';
$smarty-&gt;config_dir = '/web/www.example.com/smarty/guestbook/configs/';
$smarty-&gt;cache_dir = '/web/www.example.com/smarty/guestbook/cache/';

$smarty-&gt;assign('name','Ned');

$smarty-&gt;display('index.tpl');
?&gt;

    </pre></div>
</div>
<br class="example-break"><div class="note" title="Nota Técnica:" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Nota Técnica: </h3>
<p>
     En nuestro ejemplo, estamos configurando rutas absolutas para todos
     los directorios de Smarty. 
     Si <code class="filename">/web/www.example.com/smarty/guestbook/
     </code> está dentro de su include_path de PHP, entonces estas 
     declaraciones no son necesarias. Sin embargo, esto es mas eficiente y 
     (por experiencia) tiene menos tendencia a errores en relación a 
     determinar las rutas absolutas. Esto garantiza que Smarty esta recibiendo 
     los archivos del directorio que usted desea.
    </p>
</div>
<p>
    Ahora carge el archivo <code class="filename">index.php</code> desde su navegador web. 
    Usted debera ver "Hello, Ned!"
   </p>
<p>
    Usted a completado la configuracion basica para el Smarty! 
   </p>
</div>
<div class="navfooter">
<hr>
<table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="installation.tpl">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="installation.tpl">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="installing.smarty.extended.tpl">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 2. Instalación </td>
<td width="20%" align="center"><a accesskey="h" href="index.tpl">Home</a></td>
<td width="40%" align="right" valign="top"> Expandiendo la configuración</td>
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
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="ece3b412f1f7e1f51a73ca4477586366">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docsv2/es/installing.smarty.basic.tpl">
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
    <p>This page generated in 0.03983 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
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

