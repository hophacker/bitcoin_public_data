http://www.smarty.net/docsv2/it/index.tpl
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 19:58:12 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 12786
Connection: close
Content-Type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Manuale di Smarty | Smarty</title>
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
<tr><th colspan="3" align="center">Manuale di Smarty</th></tr>
<tr>
<td width="20%" align="left"> </td>
<th width="60%" align="center"> </th>
<td width="20%" align="right"> <a accesskey="n" href="preface.tpl">Next</a>
</td>
</tr>
</table>
<hr>
</div>
<div class="book" title="Manuale di Smarty">
<div class="titlepage">
<div>
<div><h1 class="title">
<a name="manual"></a>Smarty - il motore di template PHP con compilatore</h1></div>
<div><div class="authorgroup">
<a name="authors"></a><div class="author"><h3 class="author">
<span class="firstname">Monte</span> <span class="surname">Ohrt &lt;monte at ohrt dot com&gt;</span>
</h3></div>
<div class="author"><h3 class="author">
<span class="firstname">Andrei</span> <span class="surname">Zmievski &lt;andrei@php.net&gt;</span>
</h3></div>
</div></div>
<div><p class="copyright">Copyright © 2001-2004 New Digital Group, Inc.</p></div>
<div><p class="pubdate">2010-09-20</p></div>
</div>
<hr>
</div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl>
<dt><span class="preface"><a href="preface.tpl">Prefazione</a></span></dt>
<dt><span class="part"><a href="getting.started.tpl">I. Introduzione</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="what.is.smarty.tpl">1. Cos'è Smarty?</a></span></dt>
<dt><span class="chapter"><a href="installation.tpl">2. Installazione</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="installation.tpl#installation.requirements">Requisiti</a></span></dt>
<dt><span class="sect1"><a href="installing.smarty.basic.tpl">Installazione di base</a></span></dt>
<dt><span class="sect1"><a href="installing.smarty.extended.tpl">Installazione avanzata</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="part"><a href="smarty.for.designers.tpl">II. Smarty Per Progettisti di Template</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="language.basic.syntax.tpl">3. Sintassi di base</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.basic.syntax.tpl#language.syntax.comments">Commenti</a></span></dt>
<dt><span class="sect1"><a href="language.syntax.functions.tpl">Funzioni</a></span></dt>
<dt><span class="sect1"><a href="language.syntax.attributes.tpl">Attributi</a></span></dt>
<dt><span class="sect1"><a href="language.syntax.quotes.tpl">Incorporare variabili fra virgolette</a></span></dt>
<dt><span class="sect1"><a href="language.math.tpl">Funzioni aritmetiche</a></span></dt>
<dt><span class="sect1"><a href="language.escaping.tpl">Evitare il parsing di Smarty</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="language.variables.tpl">4. Variabili</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.variables.tpl#language.assigned.variables">Variabili valorizzate da PHP</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="language.variables.tpl#language.variables.assoc.arrays">Array associativi</a></span></dt>
<dt><span class="sect2"><a href="language.variables.tpl#language.variables.array.indexes">Array con indici numerici</a></span></dt>
<dt><span class="sect2"><a href="language.variables.tpl#language.variables.objects">Oggetti</a></span></dt>
</dl></dd>
<dt><span class="sect1"><a href="language.config.variables.tpl">Variabili caricate da file di configurazione</a></span></dt>
<dt><span class="sect1"><a href="language.variables.smarty.tpl">La variabile riservata {$smarty}</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.request">Variabili della richiesta HTTP</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.now">{$smarty.now}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.const">{$smarty.const}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.capture">{$smarty.capture}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.config">{$smarty.config}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.loops">{$smarty.section}, {$smarty.foreach}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.template">{$smarty.template}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.version">{$smarty.version}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.ldelim">{$smarty.ldelim}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.rdelim">{$smarty.rdelim}</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="chapter"><a href="language.modifiers.tpl">5. Modificatori delle variabili</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.modifiers.tpl#language.modifier.capitalize">capitalize</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.count.characters.tpl">count_characters</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.cat.tpl">cat</a></span></dt>
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
<dt><span class="chapter"><a href="language.combining.modifiers.tpl">6. Combinare i modificatori</a></span></dt>
<dt><span class="chapter"><a href="language.builtin.functions.tpl">7. Funzioni incorporate</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.builtin.functions.tpl#language.function.capture">capture</a></span></dt>
<dt><span class="sect1"><a href="language.function.config.load.tpl">config_load</a></span></dt>
<dt><span class="sect1"><a href="language.function.foreach.tpl">foreach,foreachelse</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.iteration">iteration</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.first">first</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.last">last</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.show">show</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.total">total</a></span></dt>
</dl></dd>
<dt><span class="sect1"><a href="language.function.include.tpl">include</a></span></dt>
<dt><span class="sect1"><a href="language.function.include.php.tpl">include_php</a></span></dt>
<dt><span class="sect1"><a href="language.function.insert.tpl">insert</a></span></dt>
<dt><span class="sect1"><a href="language.function.if.tpl">if,elseif,else</a></span></dt>
<dt><span class="sect1"><a href="language.function.ldelim.tpl">ldelim,rdelim</a></span></dt>
<dt><span class="sect1"><a href="language.function.literal.tpl">literal</a></span></dt>
<dt><span class="sect1"><a href="language.function.php.tpl">php</a></span></dt>
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
<dt><span class="sect1"><a href="language.function.strip.tpl">strip</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="language.custom.functions.tpl">8. Custom Functions</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.custom.functions.tpl#language.function.assign">assign</a></span></dt>
<dt><span class="sect1"><a href="language.function.counter.tpl">counter</a></span></dt>
<dt><span class="sect1"><a href="language.function.cycle.tpl">cycle</a></span></dt>
<dt><span class="sect1"><a href="language.function.debug.tpl">debug</a></span></dt>
<dt><span class="sect1"><a href="language.function.eval.tpl">eval</a></span></dt>
<dt><span class="sect1"><a href="language.function.fetch.tpl">fetch</a></span></dt>
<dt><span class="sect1"><a href="language.function.html.checkboxes.tpl">html_checkboxes</a></span></dt>
<dt><span class="sect1"><a href="language.function.html.image.tpl">html_image</a></span></dt>
<dt><span class="sect1"><a href="language.function.html.options.tpl">html_options</a></span></dt>
<dt><span class="sect1"><a href="language.function.html.radios.tpl">html_radios</a></span></dt>
<dt><span class="sect1"><a href="language.function.html.select.date.tpl">html_select_date</a></span></dt>
<dt><span class="sect1"><a href="language.function.html.select.time.tpl">html_select_time</a></span></dt>
<dt><span class="sect1"><a href="language.function.html.table.tpl">html_table</a></span></dt>
<dt><span class="sect1"><a href="language.function.math.tpl">math</a></span></dt>
<dt><span class="sect1"><a href="language.function.mailto.tpl">mailto</a></span></dt>
<dt><span class="sect1"><a href="language.function.popup.init.tpl">popup_init</a></span></dt>
<dt><span class="sect1"><a href="language.function.popup.tpl">popup</a></span></dt>
<dt><span class="sect1"><a href="language.function.textformat.tpl">textformat</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="config.files.tpl">9. File di configurazione</a></span></dt>
<dt><span class="chapter"><a href="chapter.debugging.console.tpl">10. Console di Debugging</a></span></dt>
</dl></dd>
<dt><span class="part"><a href="smarty.for.programmers.tpl">III. Smarty Per Programmatori</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="smarty.constants.tpl">11. Costanti</a></span></dt>
<dd><dl><dt><span class="sect1"><a href="smarty.constants.tpl#constant.smarty.dir">SMARTY_DIR</a></span></dt></dl></dd>
<dt><span class="chapter"><a href="api.variables.tpl">12. Variabili</a></span></dt>
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
<dt><span class="chapter"><a href="api.functions.tpl">13. Methods</a></span></dt>
<dd><dl>
<dt>
<span class="refentrytitle"><a href="api.append.tpl">append</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.append.by.ref.tpl">append_by_ref</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.assign.tpl">assign</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.assign.by.ref.tpl">assign_by_ref</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.all.assign.tpl">clear_all_assign</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.all.cache.tpl">clear_all_cache</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.assign.tpl">clear_assign</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.cache.tpl">clear_cache</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.compiled.tpl.tpl">clear_compiled_tpl</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.config.tpl">clear_config</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.config.load.tpl">config_load</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.display.tpl">display</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.fetch.tpl">fetch</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.config.vars.tpl">get_config_vars</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.registered.object.tpl">get_registered_object</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.template.vars.tpl">get_template_vars</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.is.cached.tpl">is_cached</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.load.filter.tpl">load_filter</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.block.tpl">register_block</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.compiler.function.tpl">register_compiler_function</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.function.tpl">register_function</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.modifier.tpl">register_modifier</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.object.tpl">register_object</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.outputfilter.tpl">register_outputfilter</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.postfilter.tpl">register_postfilter</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.prefilter.tpl">register_prefilter</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.resource.tpl">register_resource</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.trigger.error.tpl">trigger_error</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.template.exists.tpl">template_exists</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.block.tpl">unregister_block</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.compiler.function.tpl">unregister_compiler_function</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.function.tpl">unregister_function</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.modifier.tpl">unregister_modifier</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.object.tpl">unregister_object</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.outputfilter.tpl">unregister_outputfilter</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.postfilter.tpl">unregister_postfilter</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.prefilter.tpl">unregister_prefilter</a></span><span class="refpurpose"></span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.resource.tpl">unregister_resource</a></span><span class="refpurpose"></span>
</dt>
</dl></dd>
<dt><span class="chapter"><a href="caching.tpl">14. Caching</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="caching.tpl#caching.setting.up">Impostare il Caching</a></span></dt>
<dt><span class="sect1"><a href="caching.multiple.caches.tpl">Cache multiple per una pagina</a></span></dt>
<dt><span class="sect1"><a href="caching.groups.tpl">Gruppi di Cache</a></span></dt>
<dt><span class="sect1"><a href="caching.cacheable.tpl">Mettere in Cache l'output dei Plugin</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="advanced.features.tpl">15. Funzioni avanzate</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="advanced.features.tpl#advanced.features.objects">Oggetti</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.prefilters.tpl">Prefiltri</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.postfilters.tpl">Postfiltri</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.outputfilters.tpl">Filtri di output</a></span></dt>
<dt><span class="sect1"><a href="section.template.cache.handler.func.tpl">Funzione di gestione della Cache</a></span></dt>
<dt><span class="sect1"><a href="template.resources.tpl">Risorse</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="template.resources.tpl#templates.from.template.dir">Template della $template_dir</a></span></dt>
<dt><span class="sect2"><a href="template.resources.tpl#templates.from.any.dir">Template da qualsiasi directory</a></span></dt>
<dt><span class="sect2"><a href="template.resources.tpl#templates.from.elsewhere">Template da altre risorse</a></span></dt>
<dt><span class="sect2"><a href="template.resources.tpl#default.template.handler.function">Funzione di gestione dei template di default</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="chapter"><a href="plugins.tpl">16. Estendere Smarty con i Plugin</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="plugins.tpl#plugins.howto">Come funzionano i Plugin</a></span></dt>
<dt><span class="sect1"><a href="plugins.naming.conventions.tpl">Convenzioni per i nomi</a></span></dt>
<dt><span class="sect1"><a href="plugins.writing.tpl">Scrivere Plugin</a></span></dt>
<dt><span class="sect1"><a href="plugins.functions.tpl">Funzioni per i template</a></span></dt>
<dt><span class="sect1"><a href="plugins.modifiers.tpl">Modificatori</a></span></dt>
<dt><span class="sect1"><a href="plugins.block.functions.tpl">Funzioni sui blocchi</a></span></dt>
<dt><span class="sect1"><a href="plugins.compiler.functions.tpl">Funzioni di Compilazione</a></span></dt>
<dt><span class="sect1"><a href="plugins.prefilters.postfilters.tpl">Prefiltri/Postfiltri</a></span></dt>
<dt><span class="sect1"><a href="plugins.outputfilters.tpl">Filtri di Output</a></span></dt>
<dt><span class="sect1"><a href="plugins.resources.tpl">Risorse</a></span></dt>
<dt><span class="sect1"><a href="plugins.inserts.tpl">Insert</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="part"><a href="appendixes.tpl">IV. Appendici</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="troubleshooting.tpl">17. Troubleshooting</a></span></dt>
<dd><dl><dt><span class="sect1"><a href="troubleshooting.tpl#smarty.php.errors">Errori Smarty/PHP</a></span></dt></dl></dd>
<dt><span class="chapter"><a href="tips.tpl">18. Tips &amp; Tricks (trucchi e consigli)</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="tips.tpl#tips.blank.var.handling">Gestione delle variabili vuote</a></span></dt>
<dt><span class="sect1"><a href="tips.default.var.handling.tpl">Gestione dei default delle variabili</a></span></dt>
<dt><span class="sect1"><a href="tips.passing.vars.tpl">Passare una variabile titolo ad un template di intestazione</a></span></dt>
<dt><span class="sect1"><a href="tips.dates.tpl">Date</a></span></dt>
<dt><span class="sect1"><a href="tips.wap.tpl">WAP/WML</a></span></dt>
<dt><span class="sect1"><a href="tips.componentized.templates.tpl">Template a componenti</a></span></dt>
<dt><span class="sect1"><a href="tips.obfuscating.email.tpl">Offuscare gli indirizzi E-mail</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="resources.tpl">19. Risorse</a></span></dt>
<dt><span class="chapter"><a href="bugs.tpl">20. BUGS</a></span></dt>
</dl></dd>
</dl>
</div>
<div class="list-of-examples">
<p><b>List of Examples</b></p>
<dl>
<dt>2.1. <a href="installing.smarty.basic.tpl#id3087780">File delle librerie di Smarty</a>
</dt>
<dt>2.2. <a href="installing.smarty.basic.tpl#id3087837">Creazione di un'istanza di Smarty</a>
</dt>
<dt>2.3. <a href="installing.smarty.basic.tpl#id3087865">Fornire un percorso assoluto al file delle librerie</a>
</dt>
<dt>2.4. <a href="installing.smarty.basic.tpl#id3087883">Aggiungere la directory della libreria all'include_path di PHP</a>
</dt>
<dt>2.5. <a href="installing.smarty.basic.tpl#id3087898">Impostare manualmente la costante SMARTY_DIR</a>
</dt>
<dt>2.6. <a href="installing.smarty.basic.tpl#id3088075">Esempio di struttura dei file</a>
</dt>
<dt>2.7. <a href="installing.smarty.basic.tpl#id3088127">Impostazione dei permessi sui file</a>
</dt>
<dt>2.8. <a href="installing.smarty.basic.tpl#id3088178">Edit di /web/www.example.com/smarty/guestbook/templates/index.tpl</a>
</dt>
<dt>2.9. <a href="installing.smarty.basic.tpl#id3088227">Edit di /web/www.example.com/docs/guestbook/index.php</a>
</dt>
<dt>2.10. <a href="installing.smarty.extended.tpl#id3088344">Edit di /php/includes/guestbook/setup.php</a>
</dt>
<dt>2.11. <a href="installing.smarty.extended.tpl#id3088363">Edit di /web/www.example.com/docs/guestbook/index.php</a>
</dt>
<dt>3.1. <a href="language.basic.syntax.tpl#id3088847">Commenti</a>
</dt>
<dt>3.2. <a href="language.syntax.functions.tpl#id3089466">sintassi delle funzioni</a>
</dt>
<dt>3.3. <a href="language.syntax.attributes.tpl#id3090301">sintassi per gli attributi delle funzioni</a>
</dt>
<dt>3.4. <a href="language.syntax.quotes.tpl#id3090222">embedded quotes syntax</a>
</dt>
<dt>3.5. <a href="language.math.tpl#id3090450">esempi di funzioni aritmetiche</a>
</dt>
<dt>3.6. <a href="language.escaping.tpl#id3089998">esempio di cambio dei delimitatori</a>
</dt>
<dt>4.1. <a href="language.variables.tpl#id3089415">variabili valorizzate</a>
</dt>
<dt>4.2. <a href="language.variables.tpl#id3091540">accesso ad array associativi</a>
</dt>
<dt>4.3. <a href="language.variables.tpl#id3091607">accesso agli array per indice numerico</a>
</dt>
<dt>4.4. <a href="language.variables.tpl#id3091674">accesso alle proprietà degli oggetti</a>
</dt>
<dt>4.5. <a href="language.config.variables.tpl#id3091134">variabili di configurazione</a>
</dt>
<dt>4.6. <a href="language.variables.smarty.tpl#id3091297">visualizzazione delle variabili request</a>
</dt>
<dt>4.7. <a href="language.variables.smarty.tpl#id3092301">uso di {$smarty.now}</a>
</dt>
<dt>4.8. <a href="language.variables.smarty.tpl#id3092333">uso di {$smarty.const}</a>
</dt>
<dt>5.1. <a href="language.modifiers.tpl#id3089160">esempio di modificatore</a>
</dt>
<dt>5.2. <a href="language.modifiers.tpl#id3093766">capitalize</a>
</dt>
<dt>5.3. <a href="language.modifier.count.characters.tpl#id3093659">count_characters</a>
</dt>
<dt>5.4. <a href="language.modifier.cat.tpl#id3093550">cat</a>
</dt>
<dt>5.5. <a href="language.modifier.count.paragraphs.tpl#id3093979">count_paragraphs</a>
</dt>
<dt>5.6. <a href="language.modifier.count.sentences.tpl#id3094160">count_sentences</a>
</dt>
<dt>5.7. <a href="language.modifier.count.words.tpl#id3094220">count_words</a>
</dt>
<dt>5.8. <a href="language.modifier.date.format.tpl#id3095210">date_format</a>
</dt>
<dt>5.9. <a href="language.modifier.default.tpl#id3095082">default</a>
</dt>
<dt>5.10. <a href="language.modifier.escape.tpl#id3096083">escape</a>
</dt>
<dt>5.11. <a href="language.modifier.indent.tpl#id3096829">indent</a>
</dt>
<dt>5.12. <a href="language.modifier.lower.tpl#id3096322">lower</a>
</dt>
<dt>5.13. <a href="language.modifier.nl2br.tpl#id3096773">nl2br</a>
</dt>
<dt>5.14. <a href="language.modifier.regex.replace.tpl#id3097519">regex_replace</a>
</dt>
<dt>5.15. <a href="language.modifier.replace.tpl#id3097898">replace</a>
</dt>
<dt>5.16. <a href="language.modifier.spacify.tpl#id3098259">spacify</a>
</dt>
<dt>5.17. <a href="language.modifier.string.format.tpl#id3097840">string_format</a>
</dt>
<dt>5.18. <a href="language.modifier.strip.tpl#id3098131">strip</a>
</dt>
<dt>5.19. <a href="language.modifier.strip.tags.tpl#id3099110">strip_tags</a>
</dt>
<dt>5.20. <a href="language.modifier.truncate.tpl#id3099512">truncate</a>
</dt>
<dt>5.21. <a href="language.modifier.upper.tpl#id3098962">upper</a>
</dt>
<dt>5.22. <a href="language.modifier.wordwrap.tpl#id3100102">wordwrap</a>
</dt>
<dt>6.1. <a href="language.combining.modifiers.tpl#id3102427">combinare i modificatori</a>
</dt>
<dt>7.1. <a href="language.builtin.functions.tpl#id3103979">catturare il contenuto del template</a>
</dt>
<dt>7.2. <a href="language.function.config.load.tpl#id3104424">funzione config_load</a>
</dt>
<dt>7.3. <a href="language.function.config.load.tpl#id3104470">funzione config_load con section</a>
</dt>
<dt>7.4. <a href="language.function.foreach.tpl#id3105021">foreach</a>
</dt>
<dt>7.5. <a href="language.function.foreach.tpl#id3105037">foreach con key</a>
</dt>
<dt>7.6. <a href="language.function.include.tpl#id3105756">funzione include</a>
</dt>
<dt>7.7. <a href="language.function.include.tpl#id3105777">funzione include con passaggio di variabili</a>
</dt>
<dt>7.8. <a href="language.function.include.tpl#id3105802">esempi di funzione include con le risorse dei template</a>
</dt>
<dt>7.9. <a href="language.function.include.php.tpl#id3106335">funzione include_php</a>
</dt>
<dt>7.10. <a href="language.function.insert.tpl#id3106834">funzione insert</a>
</dt>
<dt>7.11. <a href="language.function.if.tpl#id3107610">Istruzioni if</a>
</dt>
<dt>7.12. <a href="language.function.ldelim.tpl#id3107208">ldelim, rdelim</a>
</dt>
<dt>7.13. <a href="language.function.literal.tpl#id3107703">tag literal</a>
</dt>
<dt>7.14. <a href="language.function.php.tpl#id3107807">tag php</a>
</dt>
<dt>7.15. <a href="language.function.section.tpl#id3108775">section</a>
</dt>
<dt>7.16. <a href="language.function.section.tpl#id3108791">variabile loop</a>
</dt>
<dt>7.17. <a href="language.function.section.tpl#id3108814">nomi delle sezioni</a>
</dt>
<dt>7.18. <a href="language.function.section.tpl#id3108832">sezioni nidificate</a>
</dt>
<dt>7.19. <a href="language.function.section.tpl#id3108867">sezioni e array associativi</a>
</dt>
<dt>7.20. <a href="language.function.section.tpl#id3108889">sectionelse</a>
</dt>
<dt>7.21. <a href="language.function.section.tpl#id3108960">proprietà index</a>
</dt>
<dt>7.22. <a href="language.function.section.tpl#id3108990">proprietà index_prev</a>
</dt>
<dt>7.23. <a href="language.function.section.tpl#id3109030">proprietà index_next</a>
</dt>
<dt>7.24. <a href="language.function.section.tpl#id3108516">proprietà iteration</a>
</dt>
<dt>7.25. <a href="language.function.section.tpl#id3108557">proprietà first</a>
</dt>
<dt>7.26. <a href="language.function.section.tpl#id3108592">proprietà last</a>
</dt>
<dt>7.27. <a href="language.function.section.tpl#id3108626">proprietà rownum</a>
</dt>
<dt>7.28. <a href="language.function.section.tpl#id3109364">proprietà index</a>
</dt>
<dt>7.29. <a href="language.function.section.tpl#id3109411">attributo show</a>
</dt>
<dt>7.30. <a href="language.function.section.tpl#id3109448">proprietà total</a>
</dt>
<dt>7.31. <a href="language.function.strip.tpl#id3109588">tag strip</a>
</dt>
<dt>8.1. <a href="language.custom.functions.tpl#id3113841">assign</a>
</dt>
<dt>8.2. <a href="language.function.counter.tpl#id3114274">counter</a>
</dt>
<dt>8.3. <a href="language.function.cycle.tpl#id3114857">cycle</a>
</dt>
<dt>8.4. <a href="language.function.eval.tpl#id3115643">eval</a>
</dt>
<dt>8.5. <a href="language.function.fetch.tpl#id3116085">fetch</a>
</dt>
<dt>8.6. <a href="language.function.html.checkboxes.tpl#id3116604">html_checkboxes</a>
</dt>
<dt>8.7. <a href="language.function.html.image.tpl#id3117361">esempio di html_image</a>
</dt>
<dt>8.8. <a href="language.function.html.options.tpl#id3118051">html_options</a>
</dt>
<dt>8.9. <a href="language.function.html.radios.tpl#id3118638">html_radios</a>
</dt>
<dt>8.10. <a href="language.function.html.select.date.tpl#id3119697">html_select_date</a>
</dt>
<dt>8.11. <a href="language.function.html.select.date.tpl#id3119721">html_select_date</a>
</dt>
<dt>8.12. <a href="language.function.html.select.time.tpl#id3121142">html_select_time</a>
</dt>
<dt>8.13. <a href="language.function.html.table.tpl#id3122217">html_table</a>
</dt>
<dt>8.14. <a href="language.function.math.tpl#id3122906">math</a>
</dt>
<dt>8.15. <a href="language.function.mailto.tpl#id3123557">mailto</a>
</dt>
<dt>8.16. <a href="language.function.popup.init.tpl#id3123177">popup_init</a>
</dt>
<dt>8.17. <a href="language.function.popup.tpl#id3125317">popup</a>
</dt>
<dt>8.18. <a href="language.function.textformat.tpl#id3126936">textformat</a>
</dt>
<dt>9.1. <a href="config.files.tpl#id3133133">Esempio di sintassi di file di configurazione</a>
</dt>
<dt>11.1. <a href="smarty.constants.tpl#id3133465">SMARTY_DIR</a>
</dt>
<dt>13.1. <a href="api.append.tpl#id3139887">append</a>
</dt>
<dt>13.2. <a href="api.append.by.ref.tpl#id3140218">append_by_ref</a>
</dt>
<dt>13.3. <a href="api.assign.tpl#id3139669">assign</a>
</dt>
<dt>13.4. <a href="api.assign.by.ref.tpl#id3140724">assign_by_ref</a>
</dt>
<dt>13.5. <a href="api.clear.all.assign.tpl#id3139583">clear_all_assign</a>
</dt>
<dt>13.6. <a href="api.clear.all.cache.tpl#id3140919">clear_all_cache</a>
</dt>
<dt>13.7. <a href="api.clear.assign.tpl#id3140337">clear_assign</a>
</dt>
<dt>13.8. <a href="api.clear.cache.tpl#id3141471">clear_cache</a>
</dt>
<dt>13.9. <a href="api.clear.compiled.tpl.tpl#id3140577">clear_compiled_tpl</a>
</dt>
<dt>13.10. <a href="api.clear.config.tpl#id3141059">clear_config</a>
</dt>
<dt>13.11. <a href="api.config.load.tpl#id3142191">config_load</a>
</dt>
<dt>13.12. <a href="api.display.tpl#id3141932">display</a>
</dt>
<dt>13.13. <a href="api.display.tpl#id3141919">esempi di visualizzazione di risorse di template</a>
</dt>
<dt>13.14. <a href="api.fetch.tpl#id3142901">fetch</a>
</dt>
<dt>13.15. <a href="api.get.config.vars.tpl#id3142434">get_config_vars</a>
</dt>
<dt>13.16. <a href="api.get.registered.object.tpl#id3142640">get_registered_object</a>
</dt>
<dt>13.17. <a href="api.get.template.vars.tpl#id3142731">get_template_vars</a>
</dt>
<dt>13.18. <a href="api.is.cached.tpl#id3143736">is_cached</a>
</dt>
<dt>13.19. <a href="api.is.cached.tpl#id3143787">is_cached con template a cache multiple</a>
</dt>
<dt>13.20. <a href="api.load.filter.tpl#id3143331">caricamento di plugin filtro</a>
</dt>
<dt>13.21. <a href="api.register.block.tpl#id3144492">register_block</a>
</dt>
<dt>13.22. <a href="api.register.function.tpl#id3145277">register_function</a>
</dt>
<dt>13.23. <a href="api.register.modifier.tpl#id3145648">register_modifier</a>
</dt>
<dt>13.24. <a href="api.register.resource.tpl#id3146966">register_resource</a>
</dt>
<dt>13.25. <a href="api.unregister.function.tpl#id3147116">unregister_function</a>
</dt>
<dt>13.26. <a href="api.unregister.modifier.tpl#id3147758">unregister_modifier</a>
</dt>
<dt>13.27. <a href="api.unregister.resource.tpl#id3147323">unregister_resource</a>
</dt>
<dt>14.1. <a href="caching.tpl#id3152629">abilitare il caching</a>
</dt>
<dt>14.2. <a href="caching.tpl#id3153324">impostare cache_lifetime per singolo file di cache</a>
</dt>
<dt>14.3. <a href="caching.tpl#id3153384">abilitare $compile_check</a>
</dt>
<dt>14.4. <a href="caching.tpl#id3153449">uso di is_cached()</a>
</dt>
<dt>14.5. <a href="caching.tpl#id3153523">eliminare la cache</a>
</dt>
<dt>14.6. <a href="caching.multiple.caches.tpl#id3152799">passare un cache_id a display()</a>
</dt>
<dt>14.7. <a href="caching.multiple.caches.tpl#id3153093">passare un cache_id a is_cached()</a>
</dt>
<dt>14.8. <a href="caching.multiple.caches.tpl#id3153981">eliminare tutte le cache per un determinato cache_id</a>
</dt>
<dt>14.9. <a href="caching.groups.tpl#id3153604">gruppi di cache_id</a>
</dt>
<dt>14.10. <a href="caching.cacheable.tpl#id3154498">Evitare che l'output di un plugin vada in cache</a>
</dt>
<dt>14.11. <a href="caching.cacheable.tpl#id3154558">Evitare che un intero blocco di template vada in cache</a>
</dt>
<dt>15.1. <a href="advanced.features.tpl#id3155711">usare un oggetto registrato o assegnato</a>
</dt>
<dt>15.2. <a href="advanced.features.prefilters.tpl#id3155520">uso di un prefiltro</a>
</dt>
<dt>15.3. <a href="advanced.features.postfilters.tpl#id3155233">uso di un postfiltro</a>
</dt>
<dt>15.4. <a href="advanced.features.outputfilters.tpl#id3155357">uso di un filtro di output</a>
</dt>
<dt>15.5. <a href="section.template.cache.handler.func.tpl#id3156292">esempio con l'uso di MySQL per la cache</a>
</dt>
<dt>15.6. <a href="template.resources.tpl#id3156479">uso dei template della $template_dir</a>
</dt>
<dt>15.7. <a href="template.resources.tpl#id3156892">uso dei template da qualsiasi directory</a>
</dt>
<dt>15.8. <a href="template.resources.tpl#id3156942">uso di template da percorsi di Windows</a>
</dt>
<dt>15.9. <a href="template.resources.tpl#id3157017">uso di risorse personalizzate</a>
</dt>
<dt>15.10. <a href="template.resources.tpl#id3157118">uso della funzione di gestione dei template di default</a>
</dt>
<dt>16.1. <a href="plugins.functions.tpl#id3159235">plugin funzione con output</a>
</dt>
<dt>16.2. <a href="plugins.functions.tpl#id3159287">funzione plugin senza output</a>
</dt>
<dt>16.3. <a href="plugins.modifiers.tpl#id3159170">un semplice plugin modificatore</a>
</dt>
<dt>16.4. <a href="plugins.modifiers.tpl#id3159639">un plugin modificatore più complesso</a>
</dt>
<dt>16.5. <a href="plugins.block.functions.tpl#id3160087">funzione di blocco</a>
</dt>
<dt>16.6. <a href="plugins.compiler.functions.tpl#id3160455">semplice funzione di compilazione</a>
</dt>
<dt>16.7. <a href="plugins.prefilters.postfilters.tpl#id3159961">plugin prefiltro</a>
</dt>
<dt>16.8. <a href="plugins.prefilters.postfilters.tpl#id3159978">plugin postfilro</a>
</dt>
<dt>16.9. <a href="plugins.outputfilters.tpl#id3160348">plugin filtro di output</a>
</dt>
<dt>16.10. <a href="plugins.resources.tpl#id3161561">plugin risorsa</a>
</dt>
<dt>16.11. <a href="plugins.inserts.tpl#id3161062">plugin insert</a>
</dt>
<dt>17.1. <a href="troubleshooting.tpl#id3162930">Errori Smarty</a>
</dt>
<dt>17.2. <a href="troubleshooting.tpl#id3163010">Errori di parsing PHP</a>
</dt>
<dt>18.1. <a href="tips.tpl#id3163161">Stampare &amp;nbsp; quando una variabile è vuota</a>
</dt>
<dt>18.2. <a href="tips.default.var.handling.tpl#id3163821">Assegnazione del valore di default a una variabile del template</a>
</dt>
<dt>18.3. <a href="tips.passing.vars.tpl#id3163868">Passare la variabile titolo al template dell'intestazione</a>
</dt>
<dt>18.4. <a href="tips.dates.tpl#id3163953">uso di date_format</a>
</dt>
<dt>18.5. <a href="tips.dates.tpl#id3164014">convertire le date provenienti da un modulo in timestamp</a>
</dt>
<dt>18.6. <a href="tips.wap.tpl#id3164072">usare insert per scrivere un header Content-Type WML</a>
</dt>
<dt>18.7. <a href="tips.componentized.templates.tpl#id3163625">template a componenti</a>
</dt>
<dt>18.8. <a href="tips.obfuscating.email.tpl#id3163694">Esempio di offuscamento di indirizzo E-mail</a>
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
<td width="40%" align="right" valign="top"> Prefazione</td>
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
              
              <div id="commentFormChallenge">What is 8 plus 4? <input id="commentFormChallengeText" type="text" name="challenge" size="30" value="" style="color: grey"> <span style="font-style: italic">(Are you human?)</span></div>
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="ece3b412f1f7e1f51a73ca4477586366">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docsv2/it/index.tpl">
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
    <p>This page generated in 0.02170 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
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

