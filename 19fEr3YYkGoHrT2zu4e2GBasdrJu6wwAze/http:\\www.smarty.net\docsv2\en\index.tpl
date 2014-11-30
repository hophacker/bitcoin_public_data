http://www.smarty.net/docsv2/en/index.tpl
HTTP/1.1 200 OK
Date: Sat, 26 Jul 2014 19:15:05 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 13866
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
			Find <a href="http://www.ca-dresses.com" title="Wedding Dresses Online">Wedding Dresses Online</a> at Canada from <a href="http://www.ca-dresses.com" title="Ca-dresses.com" >Ca-dresses.com</a>
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
<a name="manual"></a>Smarty - the compiling PHP template engine</h1></div>
<div><div class="authorgroup">
<a name="authors"></a><div class="author"><h3 class="author">
<span class="firstname">Monte</span> <span class="surname">Ohrt &lt;monte at ohrt dot com&gt;</span>
</h3></div>
<div class="author"><h3 class="author">
<span class="firstname">Andrei</span> <span class="surname">Zmievski &lt;andrei@php.net&gt;</span>
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
<dt><span class="preface"><a href="preface.tpl">Preface</a></span></dt>
<dt><span class="part"><a href="getting.started.tpl">I. Getting Started</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="what.is.smarty.tpl">1. What is Smarty?</a></span></dt>
<dt><span class="chapter"><a href="installation.tpl">2. Installation</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="installation.tpl#installation.requirements">Requirements</a></span></dt>
<dt><span class="sect1"><a href="installing.smarty.basic.tpl">Basic Installation</a></span></dt>
<dt><span class="sect1"><a href="installing.smarty.extended.tpl">Extended Setup</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="part"><a href="smarty.for.designers.tpl">II. Smarty For Template Designers</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="language.basic.syntax.tpl">3. Basic Syntax</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.basic.syntax.tpl#language.syntax.comments">Comments</a></span></dt>
<dt><span class="sect1"><a href="language.syntax.variables.tpl">Variables</a></span></dt>
<dt><span class="sect1"><a href="language.syntax.functions.tpl">Functions</a></span></dt>
<dt><span class="sect1"><a href="language.syntax.attributes.tpl">Attributes</a></span></dt>
<dt><span class="sect1"><a href="language.syntax.quotes.tpl">Embedding Vars in Double Quotes</a></span></dt>
<dt><span class="sect1"><a href="language.math.tpl">Math</a></span></dt>
<dt><span class="sect1"><a href="language.escaping.tpl">Escaping Smarty Parsing</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="language.variables.tpl">4. Variables</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.variables.tpl#language.assigned.variables">Variables assigned from PHP</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="language.variables.tpl#language.variables.assoc.arrays">Associative arrays</a></span></dt>
<dt><span class="sect2"><a href="language.variables.tpl#language.variables.array.indexes">Array indexes</a></span></dt>
<dt><span class="sect2"><a href="language.variables.tpl#language.variables.objects">Objects</a></span></dt>
</dl></dd>
<dt><span class="sect1"><a href="language.config.variables.tpl">Variables loaded from config files</a></span></dt>
<dt><span class="sect1"><a href="language.variables.smarty.tpl">{$smarty} reserved variable</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.request">Request variables</a></span></dt>
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
<dt><span class="chapter"><a href="language.modifiers.tpl">5. Variable Modifiers</a></span></dt>
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
<dt><span class="chapter"><a href="language.combining.modifiers.tpl">6. Combining Modifiers</a></span></dt>
<dt><span class="chapter"><a href="language.builtin.functions.tpl">7. Built-in Functions</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.builtin.functions.tpl#language.function.capture">{capture}</a></span></dt>
<dt><span class="sect1"><a href="language.function.config.load.tpl">{config_load}</a></span></dt>
<dt><span class="sect1"><a href="language.function.foreach.tpl">{foreach},{foreachelse}</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.index">.index</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.iteration">.iteration</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.first">.first</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.last">.last</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.show">.show</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.total">.total</a></span></dt>
</dl></dd>
<dt><span class="sect1"><a href="language.function.if.tpl">{if},{elseif},{else}</a></span></dt>
<dt><span class="sect1"><a href="language.function.include.tpl">{include}</a></span></dt>
<dt><span class="sect1"><a href="language.function.include.php.tpl">{include_php}</a></span></dt>
<dt><span class="sect1"><a href="language.function.insert.tpl">{insert}</a></span></dt>
<dt><span class="sect1"><a href="language.function.ldelim.tpl">{ldelim},{rdelim}</a></span></dt>
<dt><span class="sect1"><a href="language.function.literal.tpl">{literal}</a></span></dt>
<dt><span class="sect1"><a href="language.function.php.tpl">{php}</a></span></dt>
<dt><span class="sect1"><a href="language.function.section.tpl">{section},{sectionelse}</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.index">.index</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.index.prev">.index_prev</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.index.next">.index_next</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.iteration">.iteration</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.first">.first</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.last">.last</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.rownum">.rownum</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.loop">.loop</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.show">.show</a></span></dt>
<dt><span class="sect2"><a href="language.function.section.tpl#section.property.total">.total</a></span></dt>
</dl></dd>
<dt><span class="sect1"><a href="language.function.strip.tpl">{strip}</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="language.custom.functions.tpl">8. Custom Functions</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.custom.functions.tpl#language.function.assign">{assign}</a></span></dt>
<dt><span class="sect1"><a href="language.function.counter.tpl">{counter}</a></span></dt>
<dt><span class="sect1"><a href="language.function.cycle.tpl">{cycle}</a></span></dt>
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
<dt><span class="sect1"><a href="language.function.mailto.tpl">{mailto}</a></span></dt>
<dt><span class="sect1"><a href="language.function.math.tpl">{math}</a></span></dt>
<dt><span class="sect1"><a href="language.function.textformat.tpl">{textformat}</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="config.files.tpl">9. Config Files</a></span></dt>
<dt><span class="chapter"><a href="chapter.debugging.console.tpl">10. Debugging Console</a></span></dt>
</dl></dd>
<dt><span class="part"><a href="smarty.for.programmers.tpl">III. Smarty For Programmers</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="smarty.constants.tpl">11. Constants</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="smarty.constants.tpl#constant.smarty.dir">SMARTY_DIR</a></span></dt>
<dt><span class="sect1"><a href="constant.smarty.core.dir.tpl">SMARTY_CORE_DIR</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="api.variables.tpl">12. Smarty Class Variables</a></span></dt>
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
<dt><span class="chapter"><a href="api.functions.tpl">13. Smarty Class Methods()</a></span></dt>
<dd><dl>
<dt>
<span class="refentrytitle"><a href="api.append.tpl">append()</a></span><span class="refpurpose"> — append an element to an assigned array</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.append.by.ref.tpl">append_by_ref()</a></span><span class="refpurpose"> — append values  by reference</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.assign.tpl">assign()</a></span><span class="refpurpose"> — assign values to the templates</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.assign.by.ref.tpl">assign_by_ref()</a></span><span class="refpurpose"> — assign values by reference</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.all.assign.tpl">clear_all_assign()</a></span><span class="refpurpose"> — clears the values of all assigned variables</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.all.cache.tpl">clear_all_cache()</a></span><span class="refpurpose"> — clears the entire template cache</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.assign.tpl">clear_assign()</a></span><span class="refpurpose"> — clears the value of an assigned variable</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.cache.tpl">clear_cache()</a></span><span class="refpurpose"> — clears the cache for a specific template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.compiled.tpl.tpl">clear_compiled_tpl()</a></span><span class="refpurpose"> — clears the compiled version of the specified template resource</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.config.tpl">clear_config()</a></span><span class="refpurpose"> — clears assigned config variables</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.config.load.tpl">config_load()</a></span><span class="refpurpose"> —  loads config file  data and assigns it to the template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.display.tpl">display()</a></span><span class="refpurpose"> — displays the template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.fetch.tpl">fetch()</a></span><span class="refpurpose"> — returns the template output</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.config.vars.tpl">get_config_vars()</a></span><span class="refpurpose"> — returns the given loaded config variable value</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.registered.object.tpl">get_registered_object()</a></span><span class="refpurpose"> — returns a reference to a registered object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.template.vars.tpl">get_template_vars()</a></span><span class="refpurpose"> — returns  assigned variable value(s)</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.is.cached.tpl">is_cached()</a></span><span class="refpurpose"> — returns true if there is a valid cache for this template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.load.filter.tpl">load_filter()</a></span><span class="refpurpose"> — load a filter plugin</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.block.tpl">register_block()</a></span><span class="refpurpose"> — dynamically register block functions plugins</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.compiler.function.tpl">register_compiler_function()</a></span><span class="refpurpose"> — dynamically register a compiler function plugin</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.function.tpl">register_function()</a></span><span class="refpurpose"> — dynamically register template function plugins</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.modifier.tpl">register_modifier()</a></span><span class="refpurpose"> — dynamically register modifier plugin</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.object.tpl">register_object()</a></span><span class="refpurpose"> — register an object for use in the templates</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.outputfilter.tpl">register_outputfilter()</a></span><span class="refpurpose"> — dynamically register outputfilters</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.postfilter.tpl">register_postfilter()</a></span><span class="refpurpose"> — dynamically register postfilters</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.prefilter.tpl">register_prefilter()</a></span><span class="refpurpose"> — dynamically register prefilters</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.resource.tpl">register_resource()</a></span><span class="refpurpose"> — dynamically register resources</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.trigger.error.tpl">trigger_error()</a></span><span class="refpurpose"> — output an error message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.template.exists.tpl">template_exists()</a></span><span class="refpurpose"> — checks whether the specified template exists</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.block.tpl">unregister_block()</a></span><span class="refpurpose"> — dynamically unregister block function plugins</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.compiler.function.tpl">unregister_compiler_function()</a></span><span class="refpurpose"> — dynamically unregister a compiler function</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.function.tpl">unregister_function</a></span><span class="refpurpose"> — dynamically unregister template function plugin</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.modifier.tpl">unregister_modifier()</a></span><span class="refpurpose"> — dynamically unregister modifier plugin</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.object.tpl">unregister_object()</a></span><span class="refpurpose"> — dynamically unregister an object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.outputfilter.tpl">unregister_outputfilter()</a></span><span class="refpurpose"> — dynamically unregister an output filter</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.postfilter.tpl">unregister_postfilter()</a></span><span class="refpurpose"> — dynamically unregister a postfilter</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.prefilter.tpl">unregister_prefilter()</a></span><span class="refpurpose"> — dynamically unregister a prefilter</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.resource.tpl">unregister_resource()</a></span><span class="refpurpose"> — dynamically unregister a resource plugin</span>
</dt>
</dl></dd>
<dt><span class="chapter"><a href="caching.tpl">14. Caching</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="caching.tpl#caching.setting.up">Setting Up Caching</a></span></dt>
<dt><span class="sect1"><a href="caching.multiple.caches.tpl">Multiple Caches Per Page</a></span></dt>
<dt><span class="sect1"><a href="caching.groups.tpl">Cache Groups</a></span></dt>
<dt><span class="sect1"><a href="caching.cacheable.tpl">Controlling Cacheability of Plugins' Output</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="advanced.features.tpl">15. Advanced Features</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="advanced.features.tpl#advanced.features.objects">Objects</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.prefilters.tpl">Prefilters</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.postfilters.tpl">Postfilters</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.outputfilters.tpl">Output Filters</a></span></dt>
<dt><span class="sect1"><a href="section.template.cache.handler.func.tpl">Cache Handler Function</a></span></dt>
<dt><span class="sect1"><a href="template.resources.tpl">Resources</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="template.resources.tpl#templates.from.template.dir">Templates from $template_dir</a></span></dt>
<dt><span class="sect2"><a href="template.resources.tpl#templates.from.any.dir">Templates from any directory</a></span></dt>
<dt><span class="sect2"><a href="template.resources.tpl#templates.from.elsewhere">Templates from other sources</a></span></dt>
<dt><span class="sect2"><a href="template.resources.tpl#default.template.handler.function">Default template handler function</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="chapter"><a href="plugins.tpl">16. Extending Smarty With Plugins</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="plugins.tpl#plugins.howto">How Plugins Work</a></span></dt>
<dt><span class="sect1"><a href="plugins.naming.conventions.tpl">Naming Conventions</a></span></dt>
<dt><span class="sect1"><a href="plugins.writing.tpl">Writing Plugins</a></span></dt>
<dt><span class="sect1"><a href="plugins.functions.tpl">Template Functions</a></span></dt>
<dt><span class="sect1"><a href="plugins.modifiers.tpl">Modifiers</a></span></dt>
<dt><span class="sect1"><a href="plugins.block.functions.tpl">Block Functions</a></span></dt>
<dt><span class="sect1"><a href="plugins.compiler.functions.tpl">Compiler Functions</a></span></dt>
<dt><span class="sect1"><a href="plugins.prefilters.postfilters.tpl">Prefilters/Postfilters</a></span></dt>
<dt><span class="sect1"><a href="plugins.outputfilters.tpl">Output Filters</a></span></dt>
<dt><span class="sect1"><a href="plugins.resources.tpl">Resources</a></span></dt>
<dt><span class="sect1"><a href="plugins.inserts.tpl">Inserts</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="part"><a href="appendixes.tpl">IV. Appendixes</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="troubleshooting.tpl">17. Troubleshooting</a></span></dt>
<dd><dl><dt><span class="sect1"><a href="troubleshooting.tpl#smarty.php.errors">Smarty/PHP errors</a></span></dt></dl></dd>
<dt><span class="chapter"><a href="tips.tpl">18. Tips &amp; Tricks</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="tips.tpl#tips.blank.var.handling">Blank Variable Handling</a></span></dt>
<dt><span class="sect1"><a href="tips.default.var.handling.tpl">Default Variable Handling</a></span></dt>
<dt><span class="sect1"><a href="tips.passing.vars.tpl">Passing variable title to header template</a></span></dt>
<dt><span class="sect1"><a href="tips.dates.tpl">Dates</a></span></dt>
<dt><span class="sect1"><a href="tips.wap.tpl">WAP/WML</a></span></dt>
<dt><span class="sect1"><a href="tips.componentized.templates.tpl">Componentized Templates</a></span></dt>
<dt><span class="sect1"><a href="tips.obfuscating.email.tpl">Obfuscating E-mail Addresses</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="resources.tpl">19. Resources</a></span></dt>
<dt><span class="chapter"><a href="bugs.tpl">20. BUGS</a></span></dt>
</dl></dd>
</dl>
</div>
<div class="list-of-examples">
<p><b>List of Examples</b></p>
<dl>
<dt>2.1. <a href="installing.smarty.basic.tpl#id2778275">Required Smarty library files</a>
</dt>
<dt>2.2. <a href="installing.smarty.basic.tpl#id2778391">Set SMARTY_DIR constant manually</a>
</dt>
<dt>2.3. <a href="installing.smarty.basic.tpl#id2778405">Supply absolute path to library file</a>
</dt>
<dt>2.4. <a href="installing.smarty.basic.tpl#id2778435">Add the library path to the <code class="filename">php.ini</code> file</a>
</dt>
<dt>2.5. <a href="installing.smarty.basic.tpl#id2778463">Appending the include path in a php script with
    ini_set()</a>
</dt>
<dt>2.6. <a href="installing.smarty.basic.tpl#id2778601">What the file structure looks like</a>
</dt>
<dt>2.7. <a href="installing.smarty.basic.tpl#id2778738">Permissions and making directories writable</a>
</dt>
<dt>2.8. <a href="installing.smarty.basic.tpl#id2778811">/web/www.example.com/guestbook/templates/index.tpl</a>
</dt>
<dt>2.9. <a href="installing.smarty.basic.tpl#id2778878">Editing /web/www.example.com/docs/guestbook/index.php</a>
</dt>
<dt>2.10. <a href="installing.smarty.extended.tpl#id2779013">/php/includes/guestbook/setup.php</a>
</dt>
<dt>2.11. <a href="installing.smarty.extended.tpl#id2779042">/web/www.example.com/guestbook/htdocs/index.php</a>
</dt>
<dt>3.1. <a href="language.basic.syntax.tpl#id2779919">Comments within a template</a>
</dt>
<dt>3.2. <a href="language.syntax.variables.tpl#id2780632">Variables</a>
</dt>
<dt>3.3. <a href="language.syntax.functions.tpl#id2780683">function syntax </a>
</dt>
<dt>3.4. <a href="language.syntax.attributes.tpl#id2780915">function attribute syntax</a>
</dt>
<dt>3.5. <a href="language.syntax.quotes.tpl#id2782197">Syntax examples</a>
</dt>
<dt>3.6. <a href="language.syntax.quotes.tpl#id2782208">Practical examples</a>
</dt>
<dt>3.7. <a href="language.math.tpl#id2781652">math examples</a>
</dt>
<dt>3.8. <a href="language.escaping.tpl#id2782641">changing delimiters example</a>
</dt>
<dt>4.1. <a href="language.variables.tpl#id2780420">Example variables</a>
</dt>
<dt>4.2. <a href="language.variables.tpl#id2780534">Assigned variables</a>
</dt>
<dt>4.3. <a href="language.variables.tpl#id2783923">Accessing associative array variables</a>
</dt>
<dt>4.4. <a href="language.variables.tpl#id2783994">Accessing arrays by index</a>
</dt>
<dt>4.5. <a href="language.variables.tpl#id2784073">Accessing object properties</a>
</dt>
<dt>4.6. <a href="language.config.variables.tpl#id2783557">config variables</a>
</dt>
<dt>4.7. <a href="language.variables.smarty.tpl#id2784498">Displaying request variables</a>
</dt>
<dt>5.1. <a href="language.modifiers.tpl#id2786287">Modifier examples</a>
</dt>
<dt>5.2. <a href="language.modifiers.tpl#id2787202">capitalize</a>
</dt>
<dt>5.3. <a href="language.modifier.cat.tpl#id2787111">cat</a>
</dt>
<dt>5.4. <a href="language.modifier.count.characters.tpl#id2787004">count_characters</a>
</dt>
<dt>5.5. <a href="language.modifier.count.paragraphs.tpl#id2787454">count_paragraphs</a>
</dt>
<dt>5.6. <a href="language.modifier.count.sentences.tpl#id2787692">count_sentences</a>
</dt>
<dt>5.7. <a href="language.modifier.count.words.tpl#id2788363">count_words</a>
</dt>
<dt>5.8. <a href="language.modifier.date.format.tpl#id2788972">date_format</a>
</dt>
<dt>5.9. <a href="language.modifier.default.tpl#id2790010">default</a>
</dt>
<dt>5.10. <a href="language.modifier.escape.tpl#id2790540">escape</a>
</dt>
<dt>5.11. <a href="language.modifier.escape.tpl#id2790574">Other examples</a>
</dt>
<dt>5.12. <a href="language.modifier.indent.tpl#id2790358">indent</a>
</dt>
<dt>5.13. <a href="language.modifier.lower.tpl#id2790894">lower</a>
</dt>
<dt>5.14. <a href="language.modifier.nl2br.tpl#id2791037">nl2br</a>
</dt>
<dt>5.15. <a href="language.modifier.regex.replace.tpl#id2792120">regex_replace</a>
</dt>
<dt>5.16. <a href="language.modifier.replace.tpl#id2792545">replace</a>
</dt>
<dt>5.17. <a href="language.modifier.spacify.tpl#id2792943">spacify</a>
</dt>
<dt>5.18. <a href="language.modifier.string.format.tpl#id2793320">string_format</a>
</dt>
<dt>5.19. <a href="language.modifier.strip.tpl#id2792807">strip</a>
</dt>
<dt>5.20. <a href="language.modifier.strip.tags.tpl#id2793893">strip_tags</a>
</dt>
<dt>5.21. <a href="language.modifier.truncate.tpl#id2794369">truncate</a>
</dt>
<dt>5.22. <a href="language.modifier.upper.tpl#id2793999">upper</a>
</dt>
<dt>5.23. <a href="language.modifier.wordwrap.tpl#id2795084">wordwrap</a>
</dt>
<dt>6.1. <a href="language.combining.modifiers.tpl#id2798625">combining modifiers</a>
</dt>
<dt>7.1. <a href="language.builtin.functions.tpl#id2800283">{capture} with the name attribute</a>
</dt>
<dt>7.2. <a href="language.builtin.functions.tpl#id2800296">{capture} into a template variable</a>
</dt>
<dt>7.3. <a href="language.function.config.load.tpl#id2800949">{config_load}</a>
</dt>
<dt>7.4. <a href="language.function.config.load.tpl#id2801040">function {config_load} with section</a>
</dt>
<dt>7.5. <a href="language.function.foreach.tpl#id2801988">The <em class="parameter"><code>item</code></em> attribute</a>
</dt>
<dt>7.6. <a href="language.function.foreach.tpl#id2802042">Demonstrates the <em class="parameter"><code>item</code></em> and <em class="parameter"><code>key</code></em> attributes</a>
</dt>
<dt>7.7. <a href="language.function.foreach.tpl#id2802110">{foreach} with associative <em class="parameter"><code>item</code></em> attribute</a>
</dt>
<dt>7.8. <a href="language.function.foreach.tpl#id2802172">{foreach} with nested <em class="parameter"><code>item</code></em> and <em class="parameter"><code>key</code></em></a>
</dt>
<dt>7.9. <a href="language.function.foreach.tpl#id2802249">Database example with {foreachelse}</a>
</dt>
<dt>7.10. <a href="language.function.foreach.tpl#id2802323"><em class="parameter"><code>index</code></em> example</a>
</dt>
<dt>7.11. <a href="language.function.foreach.tpl#id2802382"><em class="parameter"><code>iteration</code></em> and <em class="parameter"><code>index</code></em> example</a>
</dt>
<dt>7.12. <a href="language.function.foreach.tpl#id2802440"><em class="parameter"><code>first</code></em> property example</a>
</dt>
<dt>7.13. <a href="language.function.foreach.tpl#id2802494"><em class="parameter"><code>last</code></em> property example</a>
</dt>
<dt>7.14. <a href="language.function.foreach.tpl#id2802592"><em class="parameter"><code>total</code></em> property example</a>
</dt>
<dt>7.15. <a href="language.function.if.tpl#id2804198">{if} statements</a>
</dt>
<dt>7.16. <a href="language.function.if.tpl#id2804211">{if} with more examples</a>
</dt>
<dt>7.17. <a href="language.function.include.tpl#id2805073">Simple {include} example</a>
</dt>
<dt>7.18. <a href="language.function.include.tpl#id2805085">{include} passing variables</a>
</dt>
<dt>7.19. <a href="language.function.include.tpl#id2805127">{include} and assign to variable</a>
</dt>
<dt>7.20. <a href="language.function.include.tpl#id2805159">Various {include} resource examples</a>
</dt>
<dt>7.21. <a href="language.function.include.php.tpl#id2805975">function {include_php}</a>
</dt>
<dt>7.22. <a href="language.function.insert.tpl#id2806722">function {insert}</a>
</dt>
<dt>7.23. <a href="language.function.ldelim.tpl#id2807380">{ldelim}, {rdelim}</a>
</dt>
<dt>7.24. <a href="language.function.ldelim.tpl#id2807434">Another Javascript example</a>
</dt>
<dt>7.25. <a href="language.function.literal.tpl#id2807250">{literal} tags</a>
</dt>
<dt>7.26. <a href="language.function.literal.tpl#id2807263">Javascript function example</a>
</dt>
<dt>7.27. <a href="language.function.literal.tpl#id2807283">Some css style in a template</a>
</dt>
<dt>7.28. <a href="language.function.php.tpl#id2807119">php code within {php} tags</a>
</dt>
<dt>7.29. <a href="language.function.php.tpl#id2807132">{php} tags with global and assigning a variable</a>
</dt>
<dt>7.30. <a href="language.function.section.tpl#id2808750">Looping a simple array with {section}</a>
</dt>
<dt>7.31. <a href="language.function.section.tpl#id2808808">{section} without an assigned array</a>
</dt>
<dt>7.32. <a href="language.function.section.tpl#id2808842">Naming a {section}</a>
</dt>
<dt>7.33. <a href="language.function.section.tpl#id2808877">Looping an associative array with {section}</a>
</dt>
<dt>7.34. <a href="language.function.section.tpl#id2808270">{section} demonstrating the <code class="varname">loop</code> variable</a>
</dt>
<dt>7.35. <a href="language.function.section.tpl#id2809194">Nested {section}'s</a>
</dt>
<dt>7.36. <a href="language.function.section.tpl#id2809287">Database example with a {sectionelse}</a>
</dt>
<dt>7.37. <a href="language.function.section.tpl#id2809418">{section} <code class="varname">index</code> property</a>
</dt>
<dt>7.38. <a href="language.function.section.tpl#id2809521"><code class="varname">index</code>, <code class="varname">index_next</code>
 and <code class="varname">index_prev</code> properties </a>
</dt>
<dt>7.39. <a href="language.function.section.tpl#id2809683">A section's <code class="varname">iteration</code> property </a>
</dt>
<dt>7.40. <a href="language.function.section.tpl#id2809839">{section} property <code class="varname">first</code> and <code class="varname">last</code></a>
</dt>
<dt>7.41. <a href="language.function.section.tpl#id2809947">{section} property <code class="varname">loop</code></a>
</dt>
<dt>7.42. <a href="language.function.section.tpl#id2810011"><code class="varname">show</code> property </a>
</dt>
<dt>7.43. <a href="language.function.section.tpl#id2810083"><code class="varname">total</code> property example</a>
</dt>
<dt>7.44. <a href="language.function.strip.tpl#id2811108">{strip} tags</a>
</dt>
<dt>8.1. <a href="language.custom.functions.tpl#id2817947">{assign}</a>
</dt>
<dt>8.2. <a href="language.custom.functions.tpl#id2817973">{assign} with some maths</a>
</dt>
<dt>8.3. <a href="language.custom.functions.tpl#id2817993">Accessing {assign} variables from a PHP script</a>
</dt>
<dt>8.4. <a href="language.function.counter.tpl#id2818800">{counter}</a>
</dt>
<dt>8.5. <a href="language.function.cycle.tpl#id2819469">{cycle}</a>
</dt>
<dt>8.6. <a href="language.function.eval.tpl#id2820393">{eval}</a>
</dt>
<dt>8.7. <a href="language.function.eval.tpl#id2820446">Another {eval} example</a>
</dt>
<dt>8.8. <a href="language.function.fetch.tpl#id2821029">{fetch} examples</a>
</dt>
<dt>8.9. <a href="language.function.html.checkboxes.tpl#id2821730">{html_checkboxes}</a>
</dt>
<dt>8.10. <a href="language.function.html.checkboxes.tpl#id2821817">
      Database example (eg PEAR or ADODB):
  </a>
</dt>
<dt>8.11. <a href="language.function.html.image.tpl#id2822758">{html_image} example</a>
</dt>
<dt>8.12. <a href="language.function.html.options.tpl#id2823553">Associative array with the <code class="varname">options</code> attribute</a>
</dt>
<dt>8.13. <a href="language.function.html.options.tpl#id2823616">Dropdown with seperate arrays for <code class="varname">values</code> and
<code class="varname">ouptut</code></a>
</dt>
<dt>8.14. <a href="language.function.html.options.tpl#id2823688">Database example (eg ADODB or PEAR)</a>
</dt>
<dt>8.15. <a href="language.function.html.options.tpl#id2823740">Dropdown's with &lt;optgroup&gt; </a>
</dt>
<dt>8.16. <a href="language.function.html.radios.tpl#id2824700">{html_radios} first example</a>
</dt>
<dt>8.17. <a href="language.function.html.radios.tpl#id2824736">{html_radios} second example</a>
</dt>
<dt>8.18. <a href="language.function.html.radios.tpl#id2824787">{html_radios} - Database example (eg PEAR or ADODB):</a>
</dt>
<dt>8.19. <a href="language.function.html.select.date.tpl#id2826050">{html_select_date}</a>
</dt>
<dt>8.20. <a href="language.function.html.select.date.tpl#id2826076">{html_select_date} second example</a>
</dt>
<dt>8.21. <a href="language.function.html.select.time.tpl#id2827529">{html_select_time}</a>
</dt>
<dt>8.22. <a href="language.function.html.table.tpl#id2828705">{html_table}</a>
</dt>
<dt>8.23. <a href="language.function.mailto.tpl#id2829717">{mailto} example lines followed by the result</a>
</dt>
<dt>8.24. <a href="language.function.math.tpl#id2830526">{math}</a>
</dt>
<dt>8.25. <a href="language.function.textformat.tpl#id2831388">{textformat}</a>
</dt>
<dt>9.1. <a href="config.files.tpl#id2838026">Example of config file syntax</a>
</dt>
<dt>11.1. <a href="smarty.constants.tpl#id2838386">SMARTY_DIR</a>
</dt>
<dt>11.2. <a href="constant.smarty.core.dir.tpl#id2839639">SMARTY_CORE_DIR</a>
</dt>
<dt>12.1. <a href="variable.plugins.dir.tpl#id2841034">Appending a local plugin dir</a>
</dt>
<dt>12.2. <a href="variable.plugins.dir.tpl#id2841051">Multiple $plugins_dir</a>
</dt>
<dt>12.3. <a href="variable.debugging.ctrl.tpl#id2840434">$debugging_ctrl on localhost</a>
</dt>
<dt>12.4. <a href="variable.config.overwrite.tpl#id2843016">Array of config #variables#</a>
</dt>
<dt>12.5. <a href="variable.secure.dir.tpl#id2844064">$secure_dir example</a>
</dt>
<dt>12.6. <a href="variable.compile.id.tpl#id2846531">$compile_id in a virtual host enviroment</a>
</dt>
<dt>13.1. <a href="api.append.tpl#id2850694">append</a>
</dt>
<dt>13.2. <a href="api.append.by.ref.tpl#id2851132">append_by_ref</a>
</dt>
<dt>13.3. <a href="api.assign.tpl#id2851022">assign()</a>
</dt>
<dt>13.4. <a href="api.assign.by.ref.tpl#id2851909">assign_by_ref()</a>
</dt>
<dt>13.5. <a href="api.clear.all.assign.tpl#id2851380">clear_all_assign()</a>
</dt>
<dt>13.6. <a href="api.clear.all.cache.tpl#id2851723">clear_all_cache</a>
</dt>
<dt>13.7. <a href="api.clear.assign.tpl#id2852668">clear_assign()</a>
</dt>
<dt>13.8. <a href="api.clear.cache.tpl#id2852644">clear_cache()</a>
</dt>
<dt>13.9. <a href="api.clear.compiled.tpl.tpl#id2853394">clear_compiled_tpl()</a>
</dt>
<dt>13.10. <a href="api.clear.config.tpl#id2852951">clear_config()</a>
</dt>
<dt>13.11. <a href="api.config.load.tpl#id2853339">config_load()</a>
</dt>
<dt>13.12. <a href="api.display.tpl#id2854419">display()</a>
</dt>
<dt>13.13. <a href="api.display.tpl#id2854464">Other display() template resource examples</a>
</dt>
<dt>13.14. <a href="api.fetch.tpl#id2855056">fetch()</a>
</dt>
<dt>13.15. <a href="api.fetch.tpl#id2855073">Using fetch() to send an email</a>
</dt>
<dt>13.16. <a href="api.get.config.vars.tpl#id2854695">get_config_vars()</a>
</dt>
<dt>13.17. <a href="api.get.registered.object.tpl#id2855916">get_registered_object()</a>
</dt>
<dt>13.18. <a href="api.get.template.vars.tpl#id2856169">get_template_vars</a>
</dt>
<dt>13.19. <a href="api.is.cached.tpl#id2856655">is_cached()</a>
</dt>
<dt>13.20. <a href="api.is.cached.tpl#id2856670">is_cached() with multiple-cache template</a>
</dt>
<dt>13.21. <a href="api.load.filter.tpl#id2856531">Loading filter plugins</a>
</dt>
<dt>13.22. <a href="api.register.block.tpl#id2857590">register_block()</a>
</dt>
<dt>13.23. <a href="api.register.function.tpl#id2858590">register_function()</a>
</dt>
<dt>13.24. <a href="api.register.modifier.tpl#id2859067">register_modifier()</a>
</dt>
<dt>13.25. <a href="api.register.resource.tpl#id2861355">register_resource()</a>
</dt>
<dt>13.26. <a href="api.template.exists.tpl#id2861101">template_exists()</a>
</dt>
<dt>13.27. <a href="api.unregister.function.tpl#id2861988">unregister_function</a>
</dt>
<dt>13.28. <a href="api.unregister.modifier.tpl#id2862683">unregister_modifier()</a>
</dt>
<dt>13.29. <a href="api.unregister.resource.tpl#id2863573">unregister_resource()</a>
</dt>
<dt>14.1. <a href="caching.tpl#id2870065">Enabling caching</a>
</dt>
<dt>14.2. <a href="caching.tpl#id2870800">Setting $cache_lifetime per cache</a>
</dt>
<dt>14.3. <a href="caching.tpl#id2870875">Enabling $compile_check</a>
</dt>
<dt>14.4. <a href="caching.tpl#id2870964">Using is_cached()</a>
</dt>
<dt>14.5. <a href="caching.tpl#id2871051">Clearing the cache</a>
</dt>
<dt>14.6. <a href="caching.multiple.caches.tpl#id2870370">Passing a $cache_id to display()</a>
</dt>
<dt>14.7. <a href="caching.multiple.caches.tpl#id2871667">Passing a cache_id to is_cached()</a>
</dt>
<dt>14.8. <a href="caching.multiple.caches.tpl#id2871716">Clearing all caches for a particular $cache_id</a>
</dt>
<dt>14.9. <a href="caching.groups.tpl#id2872210">$cache_id groups</a>
</dt>
<dt>14.10. <a href="caching.cacheable.tpl#id2872589">Preventing a plugin's output from being cached</a>
</dt>
<dt>14.11. <a href="caching.cacheable.tpl#id2872651">Preventing a whole passage of a template from being cached</a>
</dt>
<dt>15.1. <a href="advanced.features.tpl#id2874352">Using a registered or assigned object</a>
</dt>
<dt>15.2. <a href="advanced.features.prefilters.tpl#id2874772">Using a template prefilter</a>
</dt>
<dt>15.3. <a href="advanced.features.postfilters.tpl#id2874088">Using a template postfilter</a>
</dt>
<dt>15.4. <a href="advanced.features.outputfilters.tpl#id2874661">Using a template outputfilter</a>
</dt>
<dt>15.5. <a href="section.template.cache.handler.func.tpl#id2875766">Example using MySQL as a cache source</a>
</dt>
<dt>15.6. <a href="template.resources.tpl#id2875303">Using templates from the $template_dir</a>
</dt>
<dt>15.7. <a href="template.resources.tpl#id2876281">Using templates from any directory</a>
</dt>
<dt>15.8. <a href="template.resources.tpl#id2876335">Using templates from windows file paths</a>
</dt>
<dt>15.9. <a href="template.resources.tpl#id2876415">Using custom resources</a>
</dt>
<dt>15.10. <a href="template.resources.tpl#id2876504">Using the default template handler function</a>
</dt>
<dt>16.1. <a href="plugins.functions.tpl#id2879234">function plugin with output</a>
</dt>
<dt>16.2. <a href="plugins.functions.tpl#id2879285">function plugin without output</a>
</dt>
<dt>16.3. <a href="plugins.modifiers.tpl#id2878137">A simple modifier plugin</a>
</dt>
<dt>16.4. <a href="plugins.modifiers.tpl#id2879663">More complex modifier plugin</a>
</dt>
<dt>16.5. <a href="plugins.block.functions.tpl#id2880153">block function</a>
</dt>
<dt>16.6. <a href="plugins.compiler.functions.tpl#id2879997">A simple compiler function</a>
</dt>
<dt>16.7. <a href="plugins.prefilters.postfilters.tpl#id2880595">prefilter plugin</a>
</dt>
<dt>16.8. <a href="plugins.prefilters.postfilters.tpl#id2880612">postfilter plugin</a>
</dt>
<dt>16.9. <a href="plugins.outputfilters.tpl#id2880509">An output filter plugin</a>
</dt>
<dt>16.10. <a href="plugins.resources.tpl#id2881804">resource plugin</a>
</dt>
<dt>16.11. <a href="plugins.inserts.tpl#id2882336">insert plugin</a>
</dt>
<dt>17.1. <a href="troubleshooting.tpl#id2883429">Smarty errors</a>
</dt>
<dt>17.2. <a href="troubleshooting.tpl#id2883501">PHP parsing errors</a>
</dt>
<dt>17.3. <a href="troubleshooting.tpl#id2883550">Other common errors</a>
</dt>
<dt>18.1. <a href="tips.tpl#id2884084">Printing &amp;nbsp; when a variable is empty</a>
</dt>
<dt>18.2. <a href="tips.default.var.handling.tpl#id2885019">Assigning a template variable its default value</a>
</dt>
<dt>18.3. <a href="tips.passing.vars.tpl#id2885093">Passing the title variable to the header template</a>
</dt>
<dt>18.4. <a href="tips.dates.tpl#id2885249">Using date_format</a>
</dt>
<dt>18.5. <a href="tips.dates.tpl#id2885319">Converting form date elements back to a timestamp</a>
</dt>
<dt>18.6. <a href="tips.wap.tpl#id2885440">Using {insert} to write a WML Content-Type header</a>
</dt>
<dt>18.7. <a href="tips.componentized.templates.tpl#id2885543">componentized template</a>
</dt>
<dt>18.8. <a href="tips.obfuscating.email.tpl#id2885671">Example of template the Obfuscating an email address</a>
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
<td width="40%" align="right" valign="top"> Preface</td>
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
              
              <div id="commentFormChallenge">What is 19 plus 18? <input id="commentFormChallengeText" type="text" name="challenge" size="30" value="" style="color: grey"> <span style="font-style: italic">(Are you human?)</span></div>
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="749c45db398940f88faa65f8894df2ea">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docsv2/en/index.tpl">
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
    <p>This page generated in 0.02862 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
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

