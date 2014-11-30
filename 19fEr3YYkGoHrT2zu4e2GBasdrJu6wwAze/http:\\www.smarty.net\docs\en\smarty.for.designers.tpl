http://www.smarty.net/docs/en/smarty.for.designers.tpl
HTTP/1.1 200 OK
Date: Tue, 22 Jul 2014 13:24:50 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 7428
Connection: close
Content-Type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Part II. Smarty For Template Designers | Smarty</title>
    <meta name="description" content="Part II. Smarty For Template Designers">
    <meta name="keywords" content="part, ii, smarty, for, template, designers">
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
<tr><th colspan="3" align="center">Part II. Smarty For Template Designers</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="installing.smarty.extended.tpl">Prev</a> </td>
<th width="60%" align="center"> </th>
<td width="20%" align="right"> <a accesskey="n" href="language.basic.syntax.tpl">Next</a>
</td>
</tr>
</table>
<hr>
</div>
<div class="part" title="Part II. Smarty For Template Designers">
<div class="titlepage"><div><div><h1 class="title">
<a name="smarty.for.designers"></a>Part II. Smarty For Template Designers</h1></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl>
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
<dt><span class="sect1"><a href="language.variable.scopes.tpl">Variable scopes</a></span></dt>
<dt><span class="sect1"><a href="language.config.variables.tpl">Variables loaded from config files</a></span></dt>
<dt><span class="sect1"><a href="language.variables.smarty.tpl">{$smarty} reserved variable</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.request">Request variables</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.now">{$smarty.now}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.const">{$smarty.const}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.capture">{$smarty.capture}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.config">{$smarty.config}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.loops">{$smarty.section}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.template">{$smarty.template}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.template_object">{$smarty.template_object}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.current_dir">{$smarty.current_dir}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.version">{$smarty.version}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.block.child">{$smarty.block.child}</a></span></dt>
<dt><span class="sect2"><a href="language.variables.smarty.tpl#language.variables.smarty.block.parent">{$smarty.block.parent}</a></span></dt>
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
<dt><span class="sect1"><a href="language.modifier.from_charset.tpl">from_charset</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.indent.tpl">indent</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.lower.tpl">lower</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.nl2br.tpl">nl2br</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.regex.replace.tpl">regex_replace</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.replace.tpl">replace</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.spacify.tpl">spacify</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.string.format.tpl">string_format</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.strip.tpl">strip</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.strip.tags.tpl">strip_tags</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.to_charset.tpl">to_charset</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.truncate.tpl">truncate</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.unescape.tpl">unescape</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.upper.tpl">upper</a></span></dt>
<dt><span class="sect1"><a href="language.modifier.wordwrap.tpl">wordwrap</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="language.combining.modifiers.tpl">6. Combining Modifiers</a></span></dt>
<dt><span class="chapter"><a href="language.builtin.functions.tpl">7. Built-in Functions</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.builtin.functions.tpl#language.function.shortform.assign">{$var=...}</a></span></dt>
<dt><span class="sect1"><a href="language.function.append.tpl">{append}</a></span></dt>
<dt><span class="sect1"><a href="language.function.assign.tpl">{assign}</a></span></dt>
<dt><span class="sect1"><a href="language.function.block.tpl">{block}</a></span></dt>
<dt><span class="sect1"><a href="language.function.call.tpl">{call}</a></span></dt>
<dt><span class="sect1"><a href="language.function.capture.tpl">{capture}</a></span></dt>
<dt><span class="sect1"><a href="language.function.config.load.tpl">{config_load}</a></span></dt>
<dt><span class="sect1"><a href="language.function.debug.tpl">{debug}</a></span></dt>
<dt><span class="sect1"><a href="language.function.extends.tpl">{extends}</a></span></dt>
<dt><span class="sect1"><a href="language.function.for.tpl">{for}</a></span></dt>
<dt><span class="sect1"><a href="language.function.foreach.tpl">{foreach},{foreachelse}</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.index">@index</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.iteration">@iteration</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.first">@first</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.last">@last</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.show">@show</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.property.total">@total</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.construct.break">{break}</a></span></dt>
<dt><span class="sect2"><a href="language.function.foreach.tpl#foreach.construct.continue">{continue}</a></span></dt>
</dl></dd>
<dt><span class="sect1"><a href="language.function.function.tpl">{function}</a></span></dt>
<dt><span class="sect1"><a href="language.function.if.tpl">{if},{elseif},{else}</a></span></dt>
<dt><span class="sect1"><a href="language.function.include.tpl">{include}</a></span></dt>
<dt><span class="sect1"><a href="language.function.include.php.tpl">{include_php}</a></span></dt>
<dt><span class="sect1"><a href="language.function.insert.tpl">{insert}</a></span></dt>
<dt><span class="sect1"><a href="language.function.ldelim.tpl">{ldelim},{rdelim}</a></span></dt>
<dt><span class="sect1"><a href="language.function.literal.tpl">{literal}</a></span></dt>
<dt><span class="sect1"><a href="language.function.nocache.tpl">{nocache}</a></span></dt>
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
<dt><span class="sect1"><a href="language.function.setfilter.tpl">{setfilter}</a></span></dt>
<dt><span class="sect1"><a href="language.function.strip.tpl">{strip}</a></span></dt>
<dt><span class="sect1"><a href="language.function.while.tpl">{while}</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="language.custom.functions.tpl">8. Custom Functions</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="language.custom.functions.tpl#language.function.counter">{counter}</a></span></dt>
<dt><span class="sect1"><a href="language.function.cycle.tpl">{cycle}</a></span></dt>
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
</dl>
</div>
</div>
<div class="navfooter">
<hr>
<table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="installing.smarty.extended.tpl">Prev</a> </td>
<td width="20%" align="center"> </td>
<td width="40%" align="right"> <a accesskey="n" href="language.basic.syntax.tpl">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Extended Setup </td>
<td width="20%" align="center"><a accesskey="h" href="index.tpl">Home</a></td>
<td width="40%" align="right" valign="top"> Chapter 3. Basic Syntax</td>
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
              
              <div id="commentFormChallenge">What is 16 plus 4? <input id="commentFormChallengeText" type="text" name="challenge" size="30" value="" style="color: grey"> <span style="font-style: italic">(Are you human?)</span></div>
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="98c75890e832fa3f16173da728f1ede8">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docs/en/smarty.for.designers.tpl">
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
    <p>This page generated in 0.01372 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
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

