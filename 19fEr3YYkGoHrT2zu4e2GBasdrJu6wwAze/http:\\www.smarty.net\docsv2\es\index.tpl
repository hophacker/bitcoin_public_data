http://www.smarty.net/docsv2/es/index.tpl
HTTP/1.1 200 OK
Date: Tue, 22 Jul 2014 23:36:24 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 13814
Connection: close
Content-Type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Smarty Manual | Smarty</title>
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
<tr><th colspan="3" align="center">Smarty Manual</th></tr>
<tr>
<td width="20%" align="left"> </td>
<th width="60%" align="center"> </th>
<td width="20%" align="right"> <a accesskey="n" href="preface.tpl">Next</a>
</td>
</tr>
</table>
<hr>
</div>
<div class="book" title="Smarty Manual">
<div class="titlepage">
<div>
<div><h1 class="title">
<a name="manual"></a>Smarty - El motor compilador de Plantillas para PHP</h1></div>
<div><div class="authorgroup">
<a name="authors"></a><div class="author"><h3 class="author">
<span class="firstname">Monte</span> <span class="surname">Ohrt &lt;monte at ohrt dot com&gt;</span>
</h3></div>
<div class="author"><h3 class="author">
<span class="firstname">Andrei</span> <span class="surname">Zmievski &lt;andrei@php.net&gt;</span>
</h3></div>
</div></div>
<div><div class="authorgroup">
<a name="translators"></a><div class="author"><h3 class="author">
<span class="firstname">Mario</span> <span class="surname">Ramírez
    &lt;mario_ramirez@fjcorona.com.mx&gt;</span>
</h3></div>
</div></div>
<div><p class="copyright">Copyright © 2001-2005 New Digital Group, Inc.</p></div>
<div><p class="pubdate">2010-09-20</p></div>
</div>
<hr>
</div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl>
<dt><span class="preface"><a href="preface.tpl">Prólogo</a></span></dt>
<dt><span class="part"><a href="getting.started.tpl">I. Iniciando</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="what.is.smarty.tpl">1. Que es Smarty?</a></span></dt>
<dt><span class="chapter"><a href="installation.tpl">2. Instalación</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="installation.tpl#installation.requirements">Requerimentos</a></span></dt>
<dt><span class="sect1"><a href="installing.smarty.basic.tpl">Instalación Básica</a></span></dt>
<dt><span class="sect1"><a href="installing.smarty.extended.tpl">Expandiendo la configuración</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="part"><a href="smarty.for.designers.tpl">II. Smarty For Template Designers</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="language.basic.syntax.tpl">3. Basic Syntax</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.basic.syntax.tpl#language.syntax.comments">Comentarios</a></span></dt>
<dt><span class="sect1"><a href="language.syntax.variables.tpl">Variables</a></span></dt>
<dt><span class="sect1"><a href="language.syntax.functions.tpl">Funciones</a></span></dt>
<dt><span class="sect1"><a href="language.syntax.attributes.tpl">Atributos</a></span></dt>
<dt><span class="sect1"><a href="language.syntax.quotes.tpl">Colocando variables entre comillas dobles</a></span></dt>
<dt><span class="sect1"><a href="language.math.tpl">Matemáticas</a></span></dt>
<dt><span class="sect1"><a href="language.escaping.tpl">Escaping Smarty Parsing</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="language.variables.tpl">4. Variables</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.variables.tpl#language.assigned.variables">Variables definidas desde PHP</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="language.variables.tpl#language.variables.assoc.arrays">Arreglos asociativos</a></span></dt>
<dt><span class="sect2"><a href="language.variables.tpl#language.variables.array.indexes">Índices de Matrices</a></span></dt>
<dt><span class="sect2"><a href="language.variables.tpl#language.variables.objects">Objects</a></span></dt>
</dl></dd>
<dt><span class="sect1"><a href="language.config.variables.tpl">Variables cargadas desde archivos de configuración</a></span></dt>
<dt><span class="sect1"><a href="language.variables.smarty.tpl">La variable reservada {$smarty}</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.request">Solicitud de Variables</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.now">{$smarty.now}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.const">{$smarty.const}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.capture">{$smarty.capture}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.config">{$smarty.config}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.loops">{$smarty.section}, {$smarty.foreach}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.template">{$smarty.template}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.version">{$smarty.version}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.ldelim">{$smarty.ldelim}, {$smarty.rdelim}</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="chapter"><a href="language.modifiers.tpl">5. Modificadores de variables</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.modifiers.tpl#language.modifier.capitalize">capitalize</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.cat.tpl">cat</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.count.characters.tpl">count_characters</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.count.paragraphs.tpl">count_paragraphs</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.count.sentences.tpl">count_sentences</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.count.words.tpl">count_words</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.date.format.tpl">date_format</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.default.tpl">default</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.escape.tpl">escape</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.indent.tpl">indent</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.lower.tpl">lower</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.nl2br.tpl">nl2br</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.regex.replace.tpl">regex_replace</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.replace.tpl">replace</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.spacify.tpl">spacify</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.string.format.tpl">string_format</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.strip.tpl">strip</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.strip.tags.tpl">strip_tags</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.truncate.tpl">truncate</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.upper.tpl">upper</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.wordwrap.tpl">wordwrap</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="language.combining.modifiers.tpl">6. Combinando Modificadores</a></span></dt>
<dt><span class="chapter"><a href="language.builtin.functions.tpl">7. Funciones Integradas</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.builtin.functions.tpl#language.function.capture">capture</a></span></dt>
<dt><span class="sect1"><a href="language.function.config.load.tpl">config_load</a></span></dt>
<dt><span class="sect1"><a href="language.function.foreach.tpl">{foreach},{foreachelse}</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.iteration">iteration</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.first">first</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.last">last</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.show">show</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.total">total</a></span></dt>
</dl></dd>
<dt><span class="sect1"><a href="language.function.include.tpl">include</a></span></dt>
<dt><span class="sect1"><a href="language.function.include.php.tpl">{include_php}</a></span></dt>
<dt><span class="sect1"><a href="language.function.insert.tpl">insert</a></span></dt>
<dt><span class="sect1"><a href="language.function.if.tpl">if,elseif,else</a></span></dt>
<dt><span class="sect1"><a href="language.function.ldelim.tpl">{ldelim},{rdelim}</a></span></dt>
<dt><span class="sect1"><a href="language.function.literal.tpl">literal</a></span></dt>
<dt><span class="sect1"><a href="language.function.php.tpl">{php}</a></span></dt>
<dt><span class="sect1"><a href="language.function.section.tpl">section,sectionelse</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.index">index</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.index.prev">index_prev</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.index.next">index_next</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.iteration">iteration</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.first">first</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.last">last</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.rownum">rownum</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.loop">loop</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.show">show</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.total">total</a></span></dt>
</dl></dd>
<dt><span class="sect1"><a href="language.function.strip.tpl">{strip}</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="language.custom.functions.tpl">8. Custom Functions</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.custom.functions.tpl#language.function.assign">{assign}</a></span></dt>
<dt><span class="sect1"><a href="language.function.counter.tpl">{counter}</a></span></dt>
<dt><span class="sect1"><a href="language.function.cycle.tpl">cycle</a></span></dt>
<dt><span class="sect1"><a href="language.function.debug.tpl">{debug}</a></span></dt>
<dt><span class="sect1"><a href="language.function.eval.tpl">{eval}</a></span></dt>
<dt><span class="sect1"><a href="language.function.fetch.tpl">{fetch}</a></span></dt>
<dt><span class="sect1"><a href="language.function.html.checkboxes.tpl">{html_checkboxes}</a></span></dt>
<dt><span class="sect1"><a href="language.function.html.image.tpl">{html_image}</a></span></dt>
<dt><span class="sect1"><a href="language.function.html.options.tpl">{html_options}</a></span></dt>
<dt><span class="sect1"><a href="language.function.html.radios.tpl">{html_radios}</a></span></dt>
<dt><span class="sect1"><a href="language.function.html.select.date.tpl">{html_select_date}</a></span></dt>
<dt><span class="sect1"><a href="language.function.html.select.time.tpl">{html_select_time}</a></span></dt>
<dt><span class="sect1"><a href="language.function.html.table.tpl">{html_table}</a></span></dt>
<dt><span class="sect1"><a href="language.function.math.tpl">math</a></span></dt>
<dt><span class="sect1"><a href="language.function.mailto.tpl">{mailto}</a></span></dt>
<dt><span class="sect1"><a href="language.function.popup.init.tpl">{popup_init}</a></span></dt>
<dt><span class="sect1"><a href="language.function.popup.tpl">popup</a></span></dt>
<dt><span class="sect1"><a href="language.function.textformat.tpl">{textformat}</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="config.files.tpl">9. Config Files</a></span></dt>
<dt><span class="chapter"><a href="chapter.debugging.console.tpl">10. Debugging Console</a></span></dt>
</dl></dd>
<dt><span class="part"><a href="smarty.for.programmers.tpl">III. Smarty For Programmers</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="smarty.constants.tpl">11. Constantes</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="smarty.constants.tpl#constant.smarty.dir">SMARTY_DIR</a></span></dt>
<dt><span class="sect1"><a href="constant.smarty.core.dir.tpl">SMARTY_CORE_DIR</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="api.variables.tpl">12. Clase Variables de Smarty</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="api.variables.tpl#variable.template.dir">$template_dir</a></span></dt>
<dt><span class="sect1"><a href="variable.compile.dir.tpl">$compile_dir</a></span></dt>
<dt><span class="sect1"><a href="variable.config.dir.tpl">$config_dir</a></span></dt>
<dt><span class="sect1"><a href="variable.plugins.dir.tpl">$plugins_dir</a></span></dt>
<dt><span class="sect1"><a href="variable.debugging.tpl">$debugging</a></span></dt>
<dt><span class="sect1"><a href="variable.debug.tpl.tpl">$debug_tpl</a></span></dt>
<dt><span class="sect1"><a href="variable.debugging.ctrl.tpl">$debugging_ctrl</a></span></dt>
<dt><span class="sect1"><a href="variable.autoload.filters.tpl">$autoload_filters</a></span></dt>
<dt><span class="sect1"><a href="variable.compile.check.tpl">$compile_check</a></span></dt>
<dt><span class="sect1"><a href="variable.force.compile.tpl">$force_compile</a></span></dt>
<dt><span class="sect1"><a href="variable.caching.tpl">$caching</a></span></dt>
<dt><span class="sect1"><a href="variable.cache.dir.tpl">$cache_dir</a></span></dt>
<dt><span class="sect1"><a href="variable.cache.lifetime.tpl">$cache_lifetime</a></span></dt>
<dt><span class="sect1"><a href="variable.cache.handler.func.tpl">$cache_handler_func</a></span></dt>
<dt><span class="sect1"><a href="variable.cache.modified.check.tpl">$cache_modified_check</a></span></dt>
<dt><span class="sect1"><a href="variable.config.overwrite.tpl">$config_overwrite</a></span></dt>
<dt><span class="sect1"><a href="variable.config.booleanize.tpl">$config_booleanize</a></span></dt>
<dt><span class="sect1"><a href="variable.config.read.hidden.tpl">$config_read_hidden</a></span></dt>
<dt><span class="sect1"><a href="variable.config.fix.newlines.tpl">$config_fix_newlines</a></span></dt>
<dt><span class="sect1"><a href="variable.default.template.handler.func.tpl">$default_template_handler_func</a></span></dt>
<dt><span class="sect1"><a href="variable.php.handling.tpl">$php_handling</a></span></dt>
<dt><span class="sect1"><a href="variable.security.tpl">$security</a></span></dt>
<dt><span class="sect1"><a href="variable.secure.dir.tpl">$secure_dir</a></span></dt>
<dt><span class="sect1"><a href="variable.security.settings.tpl">$security_settings</a></span></dt>
<dt><span class="sect1"><a href="variable.trusted.dir.tpl">$trusted_dir</a></span></dt>
<dt><span class="sect1"><a href="variable.left.delimiter.tpl">$left_delimiter</a></span></dt>
<dt><span class="sect1"><a href="variable.right.delimiter.tpl">$right_delimiter</a></span></dt>
<dt><span class="sect1"><a href="variable.compiler.class.tpl">$compiler_class</a></span></dt>
<dt><span class="sect1"><a href="variable.request.vars.order.tpl">$request_vars_order</a></span></dt>
<dt><span class="sect1"><a href="variable.request.use.auto.globals.tpl">$request_use_auto_globals</a></span></dt>
<dt><span class="sect1"><a href="variable.error.reporting.tpl">$error_reporting</a></span></dt>
<dt><span class="sect1"><a href="variable.compile.id.tpl">$compile_id</a></span></dt>
<dt><span class="sect1"><a href="variable.use.sub.dirs.tpl">$use_sub_dirs</a></span></dt>
<dt><span class="sect1"><a href="variable.default.modifiers.tpl">$default_modifiers</a></span></dt>
<dt><span class="sect1"><a href="variable.default.resource.type.tpl">$default_resource_type</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="api.functions.tpl">13. La clase Methods() de Smarty</a></span></dt>
<dd><dl>
<dt>
<span class="refentrytitle"><a href="api.append.tpl">append()</a></span><span class="refpurpose"> — agregando elementos a una matriz asignada</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.append.by.ref.tpl">append_by_ref</a></span><span class="refpurpose"> — pasando valores por referencia</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.assign.tpl">assign()</a></span><span class="refpurpose"> — pasando valores para el template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.assign.by.ref.tpl">assign_by_ref</a></span><span class="refpurpose"> — pasando valores por referencia</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.all.assign.tpl">clear_all_assign()</a></span><span class="refpurpose"> — &gt;limpia el valor de todas las variables asignadas</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.all.cache.tpl">clear_all_cache</a></span><span class="refpurpose"> — limpia completamente el cache del template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.assign.tpl">clear_assign()</a></span><span class="refpurpose"> — limpia el valor de una variable asignada</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.cache.tpl">clear_cache()</a></span><span class="refpurpose"> — Esto limpia el cache de un template especifico</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.compiled.tpl.tpl">clear_compiled_tpl()</a></span><span class="refpurpose"> — Esto limpia la vesion compilada del recurso de un template especifico</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.config.tpl">clear_config()</a></span><span class="refpurpose"> — Esto limpia todas las variables de configuración</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.config.load.tpl">config_load()</a></span><span class="refpurpose"> — Carga el archivo de configuración y lo asigna al template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.display.tpl">display()</a></span><span class="refpurpose"> — Despliega el Template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.fetch.tpl">fetch()</a></span><span class="refpurpose"> — Retorna la salida del template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.config.vars.tpl">get_config_vars()</a></span><span class="refpurpose"> — retorna el valor asignado a la variable de configuración</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.registered.object.tpl">get_registered_object()</a></span><span class="refpurpose"> — Este retorna una referencia para un objeto registrado.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.template.vars.tpl">get_template_vars()</a></span><span class="refpurpose"> — Retorna el valor asignado a una variable</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.is.cached.tpl">is_cached()</a></span><span class="refpurpose"> — Retorna true si hay cache valido para ese template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.load.filter.tpl">load_filter()</a></span><span class="refpurpose"> — Carga un filtro de plugin</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.block.tpl">register_block()</a></span><span class="refpurpose"> — Registra dinamicamente bloques de funciones de plugins </span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.compiler.function.tpl">register_compiler_function</a></span><span class="refpurpose"> — Registra dinamicamente un plugin de una funcion compiladora</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.function.tpl">register_function()</a></span><span class="refpurpose"> — Registra dinamicamente un plugin de función para un template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.modifier.tpl">register_modifier()</a></span><span class="refpurpose"> — mofidica dinámicamente plugins registrados</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.object.tpl">register_object()</a></span><span class="refpurpose"> — Registr un objeto para usar en el template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.outputfilter.tpl">register_outputfilter()</a></span><span class="refpurpose"> — Registra dinamicamente filtros de salida</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.postfilter.tpl">register_postfilter()</a></span><span class="refpurpose"> — Resgistr dinamicamente postfiltros</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.prefilter.tpl">register_prefilter()</a></span><span class="refpurpose"> — Registra dinamicamente prefiltros</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.resource.tpl">register_resource</a></span><span class="refpurpose"> — Registra dinamicamente un plugin de recurso</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.trigger.error.tpl">trigger_error</a></span><span class="refpurpose"> — Despliega un mensaje de error</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.template.exists.tpl">template_exists()</a></span><span class="refpurpose"> — Verifica si el template especificado existe</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.block.tpl">unregister_block</a></span><span class="refpurpose"> — Des-registra dinamicamente un plugin de bloque de funciones</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.compiler.function.tpl">unregister_compiler_function()</a></span><span class="refpurpose"> — des-registrar dinámicamente una función de compilación</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.function.tpl">unregister_function()</a></span><span class="refpurpose"> — des-registrar dinámicamente una función de plugin del template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.modifier.tpl">unregister_modifier()</a></span><span class="refpurpose"> — des-registrar dinámicamente un modificador de plugin</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.object.tpl">unregister_object()</a></span><span class="refpurpose"> — Des-registra dinamicamente un objeto</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.outputfilter.tpl">unregister_outputfilter()</a></span><span class="refpurpose"> — des-registra dinámicamente un filtro de salida</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.postfilter.tpl">unregister_postfilter()</a></span><span class="refpurpose"> — Des-registra dinamicamente un postfiltro</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.prefilter.tpl">unregister_prefilter()</a></span><span class="refpurpose"> — Des-registra dinamicamente un prefiltro</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.resource.tpl">unregister_resource()</a></span><span class="refpurpose"> — Des-registra dinamicamente un plugin de recurso</span>
</dt>
</dl></dd>
<dt><span class="chapter"><a href="caching.tpl">14. Cache</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="caching.tpl#caching.setting.up">Configurando el Cache</a></span></dt>
<dt><span class="sect1"><a href="caching.multiple.caches.tpl">Multiples caches por pagina</a></span></dt>
<dt><span class="sect1"><a href="caching.groups.tpl">Cache Groups</a></span></dt>
<dt><span class="sect1"><a href="caching.cacheable.tpl">Controlando salida de Cacheabilidad de plugins</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="advanced.features.tpl">15. Caracteristicas Avanzadas</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="advanced.features.tpl#advanced.features.objects">Objetos</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.prefilters.tpl">Prefilters</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.postfilters.tpl">Postfilters</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.outputfilters.tpl">Filtros de salida</a></span></dt>
<dt><span class="sect1"><a href="section.template.cache.handler.func.tpl">Función manipuladora de cache</a></span></dt>
<dt><span class="sect1"><a href="template.resources.tpl">Recursos</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="template.resources.tpl#templates.from.template.dir">Templates desde $template_dir</a></span></dt>
<dt><span class="sect2"><a href="template.resources.tpl#templates.from.any.dir">Templates partiendo de cualquier directorio</a></span></dt>
<dt><span class="sect2"><a href="template.resources.tpl#templates.from.elsewhere">Templates partiendo de otras fuentes</a></span></dt>
<dt><span class="sect2"><a href="template.resources.tpl#default.template.handler.function">Función manipuladora de Template por default</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="chapter"><a href="plugins.tpl">16. Extendiendo Smarty con plugins</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="plugins.tpl#plugins.howto">Como funcionan los Plugins</a></span></dt>
<dt><span class="sect1"><a href="plugins.naming.conventions.tpl">Nombres convencionales</a></span></dt>
<dt><span class="sect1"><a href="plugins.writing.tpl">Escribiendo Plugins</a></span></dt>
<dt><span class="sect1"><a href="plugins.functions.tpl">Funciones de Template</a></span></dt>
<dt><span class="sect1"><a href="plugins.modifiers.tpl">Modificadores</a></span></dt>
<dt><span class="sect1"><a href="plugins.block.functions.tpl">Block Functions</a></span></dt>
<dt><span class="sect1"><a href="plugins.compiler.functions.tpl">Funciones Compiladoras</a></span></dt>
<dt><span class="sect1"><a href="plugins.prefilters.postfilters.tpl">Prefiltros/Postfiltros</a></span></dt>
<dt><span class="sect1"><a href="plugins.outputfilters.tpl">Filtros de Salida</a></span></dt>
<dt><span class="sect1"><a href="plugins.resources.tpl">Fuentes</a></span></dt>
<dt><span class="sect1"><a href="plugins.inserts.tpl">Inserts</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="part"><a href="appendixes.tpl">IV. Appendixes</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="troubleshooting.tpl">17. Localización de Errores</a></span></dt>
<dd><dl><dt><span class="sect1"><a href="troubleshooting.tpl#smarty.php.errors">Errores Smarty/PHP</a></span></dt></dl></dd>
<dt><span class="chapter"><a href="tips.tpl">18. Consejos y Trucos</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="tips.tpl#tips.blank.var.handling">Manipulación de Variables Vacias</a></span></dt>
<dt><span class="sect1"><a href="tips.default.var.handling.tpl">Manipulación del valor default de una variable</a></span></dt>
<dt><span class="sect1"><a href="tips.passing.vars.tpl">Pasando la variable titulo a la cabecera del template</a></span></dt>
<dt><span class="sect1"><a href="tips.dates.tpl">Fechas</a></span></dt>
<dt><span class="sect1"><a href="tips.wap.tpl">WAP/WML</a></span></dt>
<dt><span class="sect1"><a href="tips.componentized.templates.tpl">Templates con Componetes</a></span></dt>
<dt><span class="sect1"><a href="tips.obfuscating.email.tpl">Ofuscando direcciones de E-mail</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="resources.tpl">19. Fuentes</a></span></dt>
<dt><span class="chapter"><a href="bugs.tpl">20. ERRORES</a></span></dt>
</dl></dd>
</dl>
</div>
<div class="list-of-examples">
<p><b>List of Examples</b></p>
<dl>
<dt>2.1. <a href="installing.smarty.basic.tpl#id3062432">Archivos de la libreria Smarty</a>
</dt>
<dt>2.2. <a href="installing.smarty.basic.tpl#id3062498">Creando una instancia Smarty de Smarty</a>
</dt>
<dt>2.3. <a href="installing.smarty.basic.tpl#id3062526">Reemplazar por la ruta absulta de la libreria del archivo</a>
</dt>
<dt>2.4. <a href="installing.smarty.basic.tpl#id3062545">Adicionar el directorio de la libreria para incluirlo en el 
      include_path de PHP</a>
</dt>
<dt>2.5. <a href="installing.smarty.basic.tpl#id3062560">Defina la constante SMARTY_DIR manualmente</a>
</dt>
<dt>2.6. <a href="installing.smarty.basic.tpl#id3062776">Ejemplo de estrutura de archivo</a>
</dt>
<dt>2.7. <a href="installing.smarty.basic.tpl#id3062833">Configurando permisos de archivos</a>
</dt>
<dt>2.8. <a href="installing.smarty.basic.tpl#id3062883">Editando /web/www.example.com/smarty/guestbook/templates/index.tpl</a>
</dt>
<dt>2.9. <a href="installing.smarty.basic.tpl#id3062934">Editando  /web/www.example.com/docs/guestbook/index.php</a>
</dt>
<dt>2.10. <a href="installing.smarty.extended.tpl#id3063050">Editando /php/includes/guestbook/setup.php</a>
</dt>
<dt>2.11. <a href="installing.smarty.extended.tpl#id3063069">Editando /web/www.example.com/docs/guestbook/index.php</a>
</dt>
<dt>3.1. <a href="language.basic.syntax.tpl#id3063646">Comentarios</a>
</dt>
<dt>3.2. <a href="language.syntax.variables.tpl#id3064747">Variables</a>
</dt>
<dt>3.3. <a href="language.syntax.functions.tpl#id3064939">Sintaxis de Funciones</a>
</dt>
<dt>3.4. <a href="language.syntax.attributes.tpl#id3065374">Sintaxis de atributos de Funciones</a>
</dt>
<dt>3.5. <a href="language.syntax.quotes.tpl#id3065310">Sintaxis entre comillas</a>
</dt>
<dt>3.6. <a href="language.math.tpl#id3065464">Ejemplos de matemáticas</a>
</dt>
<dt>3.7. <a href="language.escaping.tpl#id3065897">Ejemplo cambiando delimitadores</a>
</dt>
<dt>4.1. <a href="language.variables.tpl#id3066281">variables definidas</a>
</dt>
<dt>4.2. <a href="language.variables.tpl#id3066953">Accesando variables de matriz asociativa</a>
</dt>
<dt>4.3. <a href="language.variables.tpl#id3067021">Accesando matrices por sus índices</a>
</dt>
<dt>4.4. <a href="language.variables.tpl#id3067093">Accesando propiedades de los Objetos</a>
</dt>
<dt>4.5. <a href="language.config.variables.tpl#id3066575">Variables de configuración</a>
</dt>
<dt>4.6. <a href="language.variables.smarty.tpl#id3066764">Mostrando solicitud de variables</a>
</dt>
<dt>4.7. <a href="language.variables.smarty.tpl#id3066842">Usando {$smarty.now}</a>
</dt>
<dt>4.8. <a href="language.variables.smarty.tpl#id3067872">Usando {$smarty.const}</a>
</dt>
<dt>5.1. <a href="language.modifiers.tpl#id3066210">Ejemplo de modificador</a>
</dt>
<dt>5.2. <a href="language.modifiers.tpl#id3069471">capitalize</a>
</dt>
<dt>5.3. <a href="language.modifier.cat.tpl#id3069379">cat</a>
</dt>
<dt>5.4. <a href="language.modifier.count.characters.tpl#id3069272">count_characters</a>
</dt>
<dt>5.5. <a href="language.modifier.count.paragraphs.tpl#id3069720">count_paragraphs</a>
</dt>
<dt>5.6. <a href="language.modifier.count.sentences.tpl#id3069940">count_sentences</a>
</dt>
<dt>5.7. <a href="language.modifier.count.words.tpl#id3070610">count_words</a>
</dt>
<dt>5.8. <a href="language.modifier.date.format.tpl#id3071143">date_format</a>
</dt>
<dt>5.9. <a href="language.modifier.default.tpl#id3072173">default</a>
</dt>
<dt>5.10. <a href="language.modifier.escape.tpl#id3072111">escape</a>
</dt>
<dt>5.11. <a href="language.modifier.indent.tpl#id3072977">indent</a>
</dt>
<dt>5.12. <a href="language.modifier.lower.tpl#id3072501">lower</a>
</dt>
<dt>5.13. <a href="language.modifier.nl2br.tpl#id3072694">nl2br</a>
</dt>
<dt>5.14. <a href="language.modifier.regex.replace.tpl#id3073789">regex_replace</a>
</dt>
<dt>5.15. <a href="language.modifier.replace.tpl#id3074206">replace</a>
</dt>
<dt>5.16. <a href="language.modifier.spacify.tpl#id3074599">spacify</a>
</dt>
<dt>5.17. <a href="language.modifier.string.format.tpl#id3074975">string_format</a>
</dt>
<dt>5.18. <a href="language.modifier.strip.tpl#id3074466">strip</a>
</dt>
<dt>5.19. <a href="language.modifier.strip.tags.tpl#id3075505">strip_tags</a>
</dt>
<dt>5.20. <a href="language.modifier.truncate.tpl#id3075923">truncate</a>
</dt>
<dt>5.21. <a href="language.modifier.upper.tpl#id3075302">upper</a>
</dt>
<dt>5.22. <a href="language.modifier.wordwrap.tpl#id3076574">wordwrap</a>
</dt>
<dt>6.1. <a href="language.combining.modifiers.tpl#id3079352">Combinando Modificadores</a>
</dt>
<dt>7.1. <a href="language.builtin.functions.tpl#id3080924">capturando contenido de template</a>
</dt>
<dt>7.2. <a href="language.function.config.load.tpl#id3081446">Función {config_load}</a>
</dt>
<dt>7.3. <a href="language.function.config.load.tpl#id3081530">Función config_load con section</a>
</dt>
<dt>7.4. <a href="language.function.foreach.tpl#id3082180">foreach</a>
</dt>
<dt>7.5. <a href="language.function.foreach.tpl#id3082220">foreach key</a>
</dt>
<dt>7.6. <a href="language.function.foreach.tpl#id3082271">Ejemplo de {foreach} - con base de datos (eg PEAR o ADODB)</a>
</dt>
<dt>7.7. <a href="language.function.include.tpl#id3083183">funcion {include}</a>
</dt>
<dt>7.8. <a href="language.function.include.tpl#id3083199">Función {include} pasando variables</a>
</dt>
<dt>7.9. <a href="language.function.include.tpl#id3083247">{include} y asignacion de variables</a>
</dt>
<dt>7.10. <a href="language.function.include.tpl#id3083299">Ejemplos de recursos para la función include</a>
</dt>
<dt>7.11. <a href="language.function.include.php.tpl#id3083978">funcion {include_php}</a>
</dt>
<dt>7.12. <a href="language.function.insert.tpl#id3084647">función {insert}</a>
</dt>
<dt>7.13. <a href="language.function.if.tpl#id3085570">sentencia if</a>
</dt>
<dt>7.14. <a href="language.function.ldelim.tpl#id3085158">{ldelim}, {rdelim}</a>
</dt>
<dt>7.15. <a href="language.function.literal.tpl#id3085745">Etiqueta literal</a>
</dt>
<dt>7.16. <a href="language.function.php.tpl#id3086340">Etiqueta {php}</a>
</dt>
<dt>7.17. <a href="language.function.section.tpl#id3087055">section</a>
</dt>
<dt>7.18. <a href="language.function.section.tpl#id3087129">loop(ciclo) de la variable section</a>
</dt>
<dt>7.19. <a href="language.function.section.tpl#id3087168">Nombres de section</a>
</dt>
<dt>7.20. <a href="language.function.section.tpl#id3087203">sections anidadas</a>
</dt>
<dt>7.21. <a href="language.function.section.tpl#id3087266">sections y matrices asociativas</a>
</dt>
<dt>7.22. <a href="language.function.section.tpl#id3087394">{sectionelse}</a>
</dt>
<dt>7.23. <a href="language.function.section.tpl#id3087495">{section} propiedades del index</a>
</dt>
<dt>7.24. <a href="language.function.section.tpl#id3087566">{section} propiedades del index_next y index_prev</a>
</dt>
<dt>7.25. <a href="language.function.section.tpl#id3087671">{section} propiedades de iteration</a>
</dt>
<dt>7.26. <a href="language.function.section.tpl#id3087796">{section} propiedades first y last</a>
</dt>
<dt>7.27. <a href="language.function.section.tpl#id3087881">{section} propiedades de index</a>
</dt>
<dt>7.28. <a href="language.function.section.tpl#id3087941">section atributos de show</a>
</dt>
<dt>7.29. <a href="language.function.section.tpl#id3087997">{section} propiedades de total</a>
</dt>
<dt>7.30. <a href="language.function.strip.tpl#id3089263">{strip} tags</a>
</dt>
<dt>8.1. <a href="language.custom.functions.tpl#id3093904">{assign}</a>
</dt>
<dt>8.2. <a href="language.custom.functions.tpl#id3093931">Accesando variables desde un script de PHP. {assign}</a>
</dt>
<dt>8.3. <a href="language.function.counter.tpl#id3094665">counter</a>
</dt>
<dt>8.4. <a href="language.function.cycle.tpl#id3095265">cycle</a>
</dt>
<dt>8.5. <a href="language.function.eval.tpl#id3096106">{eval}</a>
</dt>
<dt>8.6. <a href="language.function.fetch.tpl#id3096602">fetch</a>
</dt>
<dt>8.7. <a href="language.function.html.checkboxes.tpl#id3097173">{html_checkboxes}</a>
</dt>
<dt>8.8. <a href="language.function.html.checkboxes.tpl#id3097259">
      ejemplo de base de datos (eg PEAR o ADODB):
  </a>
</dt>
<dt>8.9. <a href="language.function.html.image.tpl#id3098051">html_image example</a>
</dt>
<dt>8.10. <a href="language.function.html.options.tpl#id3098715">{html_options}</a>
</dt>
<dt>8.11. <a href="language.function.html.options.tpl#id3098813">{html_options} - Ejemplo con base de datos (eg PEAR o ADODB):</a>
</dt>
<dt>8.12. <a href="language.function.html.radios.tpl#id3099554">{html_radios} : Ejemplo 1</a>
</dt>
<dt>8.13. <a href="language.function.html.radios.tpl#id3099590">{html_radios} : Ejemplo 2</a>
</dt>
<dt>8.14. <a href="language.function.html.radios.tpl#id3099640">{html_radios}- Ejemplo con base de Datos (eg PEAR o ADODB):</a>
</dt>
<dt>8.15. <a href="language.function.html.select.date.tpl#id3100834">{html_select_date}</a>
</dt>
<dt>8.16. <a href="language.function.html.select.date.tpl#id3100860">{html_select_date}</a>
</dt>
<dt>8.17. <a href="language.function.html.select.time.tpl#id3102321">{html_select_time}</a>
</dt>
<dt>8.18. <a href="language.function.html.table.tpl#id3103538">html_table</a>
</dt>
<dt>8.19. <a href="language.function.math.tpl#id3104360">{math}</a>
</dt>
<dt>8.20. <a href="language.function.mailto.tpl#id3105242">{mailto}</a>
</dt>
<dt>8.21. <a href="language.function.popup.init.tpl#id3104910">popup_init</a>
</dt>
<dt>8.22. <a href="language.function.popup.tpl#id3107206">popup</a>
</dt>
<dt>8.23. <a href="language.function.textformat.tpl#id3108990">{textformat}</a>
</dt>
<dt>9.1. <a href="config.files.tpl#id3116488">Ejemplo de sintaxis de un archivo de configuración</a>
</dt>
<dt>11.1. <a href="smarty.constants.tpl#id3116749">SMARTY_DIR</a>
</dt>
<dt>11.2. <a href="constant.smarty.core.dir.tpl#id3116839">SMARTY_CORE_DIR</a>
</dt>
<dt>12.1. <a href="variable.plugins.dir.tpl#id3119064">multiple $plugins_dir</a>
</dt>
<dt>12.2. <a href="variable.config.overwrite.tpl#id3120635">Arreglo de variables de configuración</a>
</dt>
<dt>12.3. <a href="variable.compile.id.tpl#id3123076">$compile_id</a>
</dt>
<dt>13.1. <a href="api.append.tpl#id3126522">append</a>
</dt>
<dt>13.2. <a href="api.append.by.ref.tpl#id3126918">append_by_ref</a>
</dt>
<dt>13.3. <a href="api.assign.tpl#id3126371">assign()</a>
</dt>
<dt>13.4. <a href="api.assign.by.ref.tpl#id3127641">assign_by_ref()</a>
</dt>
<dt>13.5. <a href="api.clear.all.assign.tpl#id3127141">clear_all_assign()</a>
</dt>
<dt>13.6. <a href="api.clear.all.cache.tpl#id3128130">clear_all_cache</a>
</dt>
<dt>13.7. <a href="api.clear.assign.tpl#id3127563">clear_assign()</a>
</dt>
<dt>13.8. <a href="api.clear.cache.tpl#id3128681">clear_cache()</a>
</dt>
<dt>13.9. <a href="api.clear.compiled.tpl.tpl#id3128120">clear_compiled_tpl()</a>
</dt>
<dt>13.10. <a href="api.clear.config.tpl#id3127935">clear_config()</a>
</dt>
<dt>13.11. <a href="api.config.load.tpl#id3128987">config_load()</a>
</dt>
<dt>13.12. <a href="api.display.tpl#id3129976">display()</a>
</dt>
<dt>13.13. <a href="api.display.tpl#id3130030">Ejemplos de recursos de la función display</a>
</dt>
<dt>13.14. <a href="api.fetch.tpl#id3130475">fetch()</a>
</dt>
<dt>13.15. <a href="api.fetch.tpl#id3130492">Usando fetch() y enviando a un e-mail</a>
</dt>
<dt>13.16. <a href="api.get.config.vars.tpl#id3130382">get_config_vars()</a>
</dt>
<dt>13.17. <a href="api.get.registered.object.tpl#id3131253">get_registered_object()</a>
</dt>
<dt>13.18. <a href="api.get.template.vars.tpl#id3131503">get_template_vars</a>
</dt>
<dt>13.19. <a href="api.is.cached.tpl#id3130994">is_cached()</a>
</dt>
<dt>13.20. <a href="api.is.cached.tpl#id3131895">is_cached() con templates con multiple-cache</a>
</dt>
<dt>13.21. <a href="api.load.filter.tpl#id3132339">loading filter plugins</a>
</dt>
<dt>13.22. <a href="api.register.block.tpl#id3132742">register_block()</a>
</dt>
<dt>13.23. <a href="api.register.function.tpl#id3133697">register_function()</a>
</dt>
<dt>13.24. <a href="api.register.modifier.tpl#id3134181">register_modifier()</a>
</dt>
<dt>13.25. <a href="api.register.resource.tpl#id3136219">register_resource</a>
</dt>
<dt>13.26. <a href="api.template.exists.tpl#id3136018">template_exists()</a>
</dt>
<dt>13.27. <a href="api.unregister.function.tpl#id3136599">unregister_function()</a>
</dt>
<dt>13.28. <a href="api.unregister.modifier.tpl#id3137388">unregister_modifier()</a>
</dt>
<dt>13.29. <a href="api.unregister.resource.tpl#id3136936">unregister_resource()</a>
</dt>
<dt>14.1. <a href="caching.tpl#id3144101">Habilitando Cache</a>
</dt>
<dt>14.2. <a href="caching.tpl#id3144812">Configurando cache_lifetime por cache</a>
</dt>
<dt>14.3. <a href="caching.tpl#id3144880">Habilitando $compile_check</a>
</dt>
<dt>14.4. <a href="caching.tpl#id3144947">Usando is_cached()</a>
</dt>
<dt>14.5. <a href="caching.tpl#id3145025">Limpiando el cache</a>
</dt>
<dt>14.6. <a href="caching.multiple.caches.tpl#id3144313">Pasando un cache_id para display()</a>
</dt>
<dt>14.7. <a href="caching.multiple.caches.tpl#id3145512">Pasando un cache_id para is_cached()</a>
</dt>
<dt>14.8. <a href="caching.multiple.caches.tpl#id3145552"> Limpando todos los caches para un cache_id en particular</a>
</dt>
<dt>14.9. <a href="caching.groups.tpl#id3145102">Grupos de cache_id</a>
</dt>
<dt>14.10. <a href="caching.cacheable.tpl#id3146078">Previniendo que una saída de plugin de ser cacheada</a>
</dt>
<dt>14.11. <a href="caching.cacheable.tpl#id3146137">Previniendo una pasada entera del template para el cache</a>
</dt>
<dt>15.1. <a href="advanced.features.tpl#id3147427">usando un objeto registrado o atribuido</a>
</dt>
<dt>15.2. <a href="advanced.features.prefilters.tpl#id3147296">usando un prefiltro prefilter de template</a>
</dt>
<dt>15.3. <a href="advanced.features.postfilters.tpl#id3147081">Usando un postfilter de template</a>
</dt>
<dt>15.4. <a href="advanced.features.outputfilters.tpl#id3147182">Usando un filtro de salida de template</a>
</dt>
<dt>15.5. <a href="section.template.cache.handler.func.tpl#id3148078"> ejemplo usando MySQL como una fuente de cache</a>
</dt>
<dt>15.6. <a href="template.resources.tpl#id3148654">Usando templates desde $template_dir</a>
</dt>
<dt>15.7. <a href="template.resources.tpl#id3148702">usando templates desde cualquier directorio</a>
</dt>
<dt>15.8. <a href="template.resources.tpl#id3148752">usando templates con rutas de archivos de windows</a>
</dt>
<dt>15.9. <a href="template.resources.tpl#id3148835">Usando recursos habituales</a>
</dt>
<dt>15.10. <a href="template.resources.tpl#id3148938"> usando la función manipuladora de template por default</a>
</dt>
<dt>16.1. <a href="plugins.functions.tpl#id3151190">Función de plugin con salida</a>
</dt>
<dt>16.2. <a href="plugins.functions.tpl#id3151241">Función de plugin sin salida</a>
</dt>
<dt>16.3. <a href="plugins.modifiers.tpl#id3151110"> Plugin modificador simple</a>
</dt>
<dt>16.4. <a href="plugins.modifiers.tpl#id3151597">Plugin modificador mas complejo</a>
</dt>
<dt>16.5. <a href="plugins.block.functions.tpl#id3152058">Función de bloque</a>
</dt>
<dt>16.6. <a href="plugins.compiler.functions.tpl#id3152440">Función compiladora simple</a>
</dt>
<dt>16.7. <a href="plugins.prefilters.postfilters.tpl#id3151920">prefilter plugin</a>
</dt>
<dt>16.8. <a href="plugins.prefilters.postfilters.tpl#id3151937">postfilter plugin</a>
</dt>
<dt>16.9. <a href="plugins.outputfilters.tpl#id3152320">plugin de filtro de salida</a>
</dt>
<dt>16.10. <a href="plugins.resources.tpl#id3153546">Plugin resource (recurso)</a>
</dt>
<dt>16.11. <a href="plugins.inserts.tpl#id3154040">insert plugin</a>
</dt>
<dt>17.1. <a href="troubleshooting.tpl#id3154921">Errores de Smarty</a>
</dt>
<dt>17.2. <a href="troubleshooting.tpl#id3154997">Errores de analisis gramatical de PHP</a>
</dt>
<dt>17.3. <a href="troubleshooting.tpl#id3155050">Otros errores comunes</a>
</dt>
<dt>18.1. <a href="tips.tpl#id3155440">Imprimiendo &amp;nbsp; cuando una variable esta vacia</a>
</dt>
<dt>18.2. <a href="tips.default.var.handling.tpl#id3156375">Atribuyendo el valor por default a una variable en el template</a>
</dt>
<dt>18.3. <a href="tips.passing.vars.tpl#id3156447">Pasando la variable titulo al encabezado del template</a>
</dt>
<dt>18.4. <a href="tips.dates.tpl#id3156606">Usando date_format</a>
</dt>
<dt>18.5. <a href="tips.dates.tpl#id3156673">Convirtiendo elementos en forma de fecha de vuelta a un timestamp</a>
</dt>
<dt>18.6. <a href="tips.wap.tpl#id3156786">Usando insert para escribir un encabezado WML Content-Type</a>
</dt>
<dt>18.7. <a href="tips.componentized.templates.tpl#id3156902">Templates con Componetes</a>
</dt>
<dt>18.8. <a href="tips.obfuscating.email.tpl#id3156182">Ejemplo de ofuscamiento de una direccion de E-mail</a>
</dt>
</dl>
</div>
</div>
<div class="navfooter">
<hr>
<table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left"> </td>
<td width="20%" align="center"> </td>
<td width="40%" align="right"> <a accesskey="n" href="preface.tpl">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top"> </td>
<td width="20%" align="center"> </td>
<td width="40%" align="right" valign="top"> Prólogo</td>
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
              
              <div id="commentFormChallenge">What is 7 plus 7? <input id="commentFormChallengeText" type="text" name="challenge" size="30" value="" style="color: grey"> <span style="font-style: italic">(Are you human?)</span></div>
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="00f92608954ee717dee38ac55a29f11f">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docsv2/es/index.tpl">
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
    <p>This page generated in 0.03000 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
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

