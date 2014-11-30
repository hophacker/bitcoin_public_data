http://www.smarty.net/docsv2/fr/installing.smarty.basic.tpl
HTTP/1.1 200 OK
Date: Thu, 24 Jul 2014 15:20:54 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 9657
Connection: close
Content-Type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Installation de base | Smarty</title>
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
<tr><th colspan="3" align="center">Installation de base</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="installation.tpl">Prev</a> </td>
<th width="60%" align="center">Chapter 2. Installation</th>
<td width="20%" align="right"> <a accesskey="n" href="installing.smarty.extended.tpl">Next</a>
</td>
</tr>
</table>
<hr>
</div>
<div class="sect1" title="Installation de base">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="installing.smarty.basic"></a>Installation de base</h2></div></div></div>
<p>
    Copiez les fichiers bibliothèques de Smarty du sous-dossier
    <code class="filename">/libs/</code> de la distribution à un emplacement
    accessible à PHP. Ce sont des fichiers PHP que vous NE DEVEZ PAS
    modifier. Ils sont partagés par toutes les applications et ne seront
    mis à jour que lorsque vous installerez une nouvelle version de
    Smarty.
   </p>
<div class="example">
<a name="id2926810"></a><p class="title"><b>Example 2.1. fichiers nécessaires de la bibliothèque SMARTY</b></p>
<div class="example-contents"><pre class="screen">

Smarty.class.php
Smarty_Compiler.class.php
Config_File.class.php
debug.tpl
/internals/*.php (tous)
/plugins/*.php (tous doivent être sûr, peut-être votre site n'a besoin seulement que d'un sous-ensemble)

    </pre></div>
</div>
<br class="example-break"><p>
    Smarty utilise une <a class="ulink" href="http://php.net/define" target="_top">constante</a> PHP appelée <a class="link" href="smarty.constants.tpl#constant.smarty.dir" title="SMARTY_DIR"><code class="constant">SMARTY_DIR</code></a> qui
    représente le <span class="bold"><strong>chemin complet</strong></span> de la bibliothèque Smarty.
    En fait, si votre application trouve le fichier
    <code class="filename">Smarty.class.php</code>, vous n'aurez pas
    besoin de définir la variable
    <a class="link" href="smarty.constants.tpl#constant.smarty.dir" title="SMARTY_DIR"><code class="constant">SMARTY_DIR</code></a>,
    Smarty s'en chargera pour vous.
    En revanche, si <code class="filename">Smarty.class.php</code>
    n'est pas dans votre répertoire d'inclusion ou que vous ne
    donnez pas un chemin absolu à votre application, vous
    devez définir <code class="constant">SMARTY_DIR</code> explicitement.
    <code class="constant">SMARTY_DIR</code>
    <span class="bold"><strong>doit</strong></span> avoir être terminé par un slash.
   </p>
<div class="example">
<a name="id2926892"></a><p class="title"><b>Example 2.2. Créer une instance de Smarty</b></p>
<div class="example-contents">
<p>
     Voici comment créer une instance de Smarty dans vos scripts PHP :
    </p>
<pre class="programlisting">

&lt;?php
// Note : Smarty a un 'S' majuscule
require_once('Smarty.class.php');
$smarty = new Smarty();
?&gt;

    </pre>
</div>
</div>
<br class="example-break"><p>
    Essayez de lancer le script ci-dessus. Si vous obtenez une erreur indiquant
    que le fichier <code class="filename">Smarty.class.php</code> n'est pas trouvé,
    tentez l'une des actions suivantes :
   </p>
<div class="example">
<a name="id2926929"></a><p class="title"><b>Example 2.3. Définition manuelle de la constante SMARTY_DIR</b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php
// Style *nix (notez le 'S' majuscule)
define('SMARTY_DIR', '/usr/local/lib/php/Smarty-v.e.r/libs/');

// Style Windows
define('SMARTY_DIR', 'c:/webroot/libs/Smarty-v.e.r/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();
?&gt;

    </pre></div>
</div>
<br class="example-break"><div class="example">
<a name="id2926945"></a><p class="title"><b>Example 2.4. Définir le chemin absolu au fichier de la bibliothèque</b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php
// Style *nix (notez le 'S' majuscule)
require_once('/usr/local/lib/php/Smarty-v.e.r/libs/Smarty.class.php');

// Style Windows
require_once('c:/webroot/libs/Smarty-v.e.r/libs/Smarty.class.php');

$smarty = new Smarty();
?&gt;

    </pre></div>
</div>
<br class="example-break"><div class="example">
<a name="id2926970"></a><p class="title"><b>Example 2.5. Ajout du dossier contenant la bibliothèque à l'include_path de PHP</b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php
// Editez votre fichier php.ini, ajoutez le dossier contenant la
// bibliothèque Smarty à l'include_path et redémarrez le serveur web.
// Puis, ce qui suit devrait fonctionner :
require_once('Smarty.class.php');
$smarty = new Smarty();
?&gt;

    </pre></div>
</div>
<br class="example-break"><p>
    Maintenant que les fichiers de la librairie sont en place,
    il est temps de définir les répertoires de Smarty, pour votre application.
   </p>
<p>
    Smarty a besoin de quatre répertoires qui sont, par défaut,
    <code class="filename">'templates/'</code>,
    <code class="filename">'templates_c/'</code>,
    <code class="filename">'configs/'</code> et
    <code class="filename">'cache/'</code>.
   </p>
<p>
    Chacun d'entre eux peut être défini
    via les attributs <a class="link" href="api.variables.tpl#variable.template.dir" title="$template_dir">
    <code class="varname">$template_dir</code></a>,
    <a class="link" href="variable.compile.dir.tpl" title="$compile_dir">
    <code class="varname">$compile_dir</code></a>, <a class="link" href="variable.config.dir.tpl" title="$config_dir">
    <code class="varname">$config_dir</code></a> et
    <a class="link" href="variable.cache.dir.tpl" title="$cache_dir">
    <code class="varname">$cache_dir</code></a> respectivement. Il est vivement
    conseillé que vous régliez ces répertoires séparément pour chaque
    application qui utilise Smarty.
   </p>
<p>
    Assurez-vous de bien connaître chemin de la racine
    de votre arborescence Web. Dans notre exemple, la racine
    est <code class="filename">/web/www.example.com/docs/</code>. Seul Smarty
    accède aux répertoires en question, et jamais le serveur Web.
    Pour des raisons de sécurité, il est donc conseillé de
    sortir ces répertoires dans un répertoire
    <span class="emphasis"><em>en dehors</em></span> de l'arborescence
    Web.
   </p>
<p>
    Dans notre exemple d'installation, nous allons régler l'environnement
    de Smarty pour une application de livre d'or. Nous avons ici choisi
    une application principalement pour mettre en évidence une
    convention de nommage des répertoires. Vous pouvez utiliser le même
    environnement pour n'importe quelle autre application, il suffit de
    remplacer <span class="quote">“<span class="quote">livredor</span>”</span> avec le nom de votre application.
    Nous allons mettre nos répertoires Smarty dans
    <code class="filename">/web/www.example.com/smarty/livredor/</code>.
   </p>
<p>
    Vous allez avoir besoin d'au moins un fichier à la racine de
    l'arborescence Web,
    il s'agit du script auquel l'internaute a accès. Nous allons l'appeler
    <span class="emphasis"><em>'index.php'</em></span> et le placer dans un sous-répertoire
    appelé <code class="filename">/livredor/</code>.
   </p>
<div class="note" title="Technical Note" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Technical Note</h3>
<p>
     Il est pratique de configurer le serveur Web de
     sorte que <code class="filename">index.php</code> soit identifié comme fichier
     par défaut de ce répertoire. Aicnsi, si l'on tape
     <code class="literal">http://www.example.com/livredor/</code>, le script
     <code class="filename">index.php</code> soit exécuté sans que
     <code class="filename">index.php</code> ne soit spécifié dans l'URL. Avec
     Apache, vous pouvez régler cela en ajoutant <code class="filename">index.php</code>
     à la ligne où se trouve <code class="literal">DirectoryIndex</code> (séparez chaque entrée
     par un espace) dans le <code class="filename">httpd.conf</code>.
     </p>
<div class="informalexample"><pre class="programlisting">
DirectoryIndex index.htm index.html index.cgi index.php
      </pre></div>
<p>
    </p>
</div>
<p>
    Jetons un coup d'oeil à la structure de fichier obtenue :
   </p>
<div class="example">
<a name="id2927237"></a><p class="title"><b>Example 2.6. Structure de fichiers</b></p>
<div class="example-contents"><pre class="screen">

/usr/local/lib/php/Smarty-v.e.r/libs/Smarty.class.php
/usr/local/lib/php/Smarty-v.e.r/libs/Smarty_Compiler.class.php
/usr/local/lib/php/Smarty-v.e.r/libs/Config_File.class.php
/usr/local/lib/php/Smarty-v.e.r/libs/debug.tpl
/usr/local/lib/php/Smarty-v.e.r/libs/internals/*.php
/usr/local/lib/php/Smarty-v.e.r/libs/plugins/*.php

/web/www.example.com/smarty/guestbook/templates/
/web/www.example.com/smarty/guestbook/templates_c/
/web/www.example.com/smarty/guestbook/configs/
/web/www.example.com/smarty/guestbook/cache/

/web/www.example.com/docs/guestbook/index.php

    </pre></div>
</div>
<br class="example-break"><p>
    Smarty a besoin d'<span class="bold"><strong>accéder en écriture</strong></span>
    aux répertoires <a class="link" href="variable.compile.dir.tpl" title="$compile_dir">
     <em class="parameter"><code>$compile_dir</code></em></a> et <a class="link" href="variable.cache.dir.tpl" title="$cache_dir">
     <em class="parameter"><code>$cache_dir</code></em></a>,
    assurez-vous donc que le serveur Web dispose de ces droits d'accès.
    Il s'agit généralement de l'utilisateur "nobody" et du group
    "nobody". Pour les utilisateurs de OS X, l'utilisateur par défaut
    est "web" et le group "web". Si vous utilisez Apache, vous pouvez
    parcourir le fichier <code class="filename">httpd.conf</code> (en général dans
    "/usr/local/apache/conf/") pour déterminer quel est l'utilisateur
    et le groupe auquel il appartient.
   </p>
<div class="example">
<a name="id2927317"></a><p class="title"><b>Example 2.7. régler les permissions d'accès</b></p>
<div class="example-contents"><pre class="programlisting">

chown nobody:nobody /web/www.example.com/smarty/livredor/templates_c/
chmod 770 /web/www.example.com/smarty/livredor/templates_c/

chown nobody:nobody /web/www.example.com/smarty/livredor/cache/
chmod 770 /web/www.example.com/smarty/livredor/cache/

    </pre></div>
</div>
<br class="example-break"><div class="note" title="Note" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Note</h3>
<p>
     La commande chmod 770 est relativement bien sécurisée, elle donne
     à l'utilisateur "nobody" et au groupe "nobody" les accès en
     lecture/écriture aux répertoires. Si vous voulez donner le droit d'accès
     en lecture à tout le monde (principalement pour pouvoir accéder
     vous-même à ces fichiers), vous pouvez lui préférer chmod 775.
    </p>
</div>
<p>
    Nous devons créer le fichier <code class="filename">index.tpl</code> que Smarty va charger.
    Il va se trouver dans le dossier
    <a class="link" href="api.variables.tpl#variable.template.dir" title="$template_dir"><em class="parameter"><code>$template_dir</code></em></a>.
   </p>
<div class="example">
<a name="id2927381"></a><p class="title"><b>Example 2.8. Notre  /web/www.example.com/smarty/templates/index.tpl</b></p>
<div class="example-contents"><pre class="screen">


{* Smarty *}

Bonjour, {$name}, Bienvenue dans Smarty !

    </pre></div>
</div>
<br class="example-break"><div class="note" title="Note technique" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Note technique</h3>
<p>
     <code class="literal">{* Smarty *}</code> est un
     <a class="link" href="language.basic.syntax.tpl#language.syntax.comments" title="Commentaires">commentaire</a>
     de template. Il n'est pas obligatoire mais il est bon de commencer tous vos templates
     avec ce commentaire. Celà rend le fichier facilement
     reconnaissable en plus de son extension. Les éditeurs
     de texte peuvent par exemple reconnaître le fichier et
     adapter la coloration syntaxique.
    </p>
</div>
<p>
    Maintenant passons à l'édition du fichier <code class="filename">index.php</code>. Nous allons
    créer une instance de Smarty,
    <a class="link" href="api.assign.tpl" title="assign()"><code class="varname">assigner</code></a>
    une valeur à une variable de template et
    <a class="link" href="api.display.tpl" title="display()">afficher</a> le résultat avec <code class="filename">index.tpl</code>.
   </p>
<div class="example">
<a name="id2927459"></a><p class="title"><b>Example 2.9. Édition de  /web/www.example.com/docs/livredor/index.php</b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php
// charge la bibliothèque Smarty
require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();

$smarty-&gt;template_dir = '/web/www.example.com/smarty/livredor/templates/';
$smarty-&gt;compile_dir = '/web/www.example.com/smarty/livredor/templates_c/';
$smarty-&gt;config_dir = '/web/www.example.com/smarty/livredor/configs/';
$smarty-&gt;cache_dir = '/web/www.example.com/smarty/livredor/cache/';

$smarty-&gt;assign('name','Ned');

$smarty-&gt;display('index.tpl');
?&gt;

    </pre></div>
</div>
<br class="example-break"><div class="note" title="Note techique" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Note techique</h3>
<p>
     Dans notre exemple, nous avons configuré les chemins absolus
     pour chacun des répertoires Smarty. Si
     <code class="filename">/web/www.example.com/smarty/livredor/</code>
     est dans votre include_path PHP alors ces réglages ne sont pas nécessaires.
     Quoi qu'il en soit, il est plus efficace et (par expérience)
     moins générateur d'erreurs de les définir avec des chemins
     absolus. Celà nous garantit que Smarty récupèrera les bons fichiers.
    </p>
</div>
<p>
    Et maintenant appelez le fichier <code class="filename">index.php</code> avec navigateur
    Web. Vous devriez voir "Bonjour, Ned, Bienvenue dans Smarty !".
   </p>
<p>
    Vous venez de terminer l'installation de base de Smarty !
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
<td width="40%" align="left" valign="top">Chapter 2. Installation </td>
<td width="20%" align="center"><a accesskey="h" href="index.tpl">Home</a></td>
<td width="40%" align="right" valign="top"> Configuration avancée</td>
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
              
              <div id="commentFormChallenge">What is 9 plus 7? <input id="commentFormChallengeText" type="text" name="challenge" size="30" value="" style="color: grey"> <span style="font-style: italic">(Are you human?)</span></div>
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="fa01e14858730212e02984cd8539edf4">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docsv2/fr/installing.smarty.basic.tpl">
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
    <p>This page generated in 0.01381 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
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

