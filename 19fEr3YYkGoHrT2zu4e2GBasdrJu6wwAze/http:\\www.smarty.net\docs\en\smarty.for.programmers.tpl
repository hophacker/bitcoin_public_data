http://www.smarty.net/docs/en/smarty.for.programmers.tpl
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 03:32:04 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 8602
Connection: close
Content-Type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Part III. Smarty For Programmers | Smarty</title>
    <meta name="description" content="Part III. Smarty For Programmers">
    <meta name="keywords" content="part, iii, smarty, for, programmers">
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
<tr><th colspan="3" align="center">Part III. Smarty For Programmers</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="chapter.debugging.console.tpl">Prev</a> </td>
<th width="60%" align="center"> </th>
<td width="20%" align="right"> <a accesskey="n" href="charset.tpl">Next</a>
</td>
</tr>
</table>
<hr>
</div>
<div class="part" title="Part III. Smarty For Programmers">
<div class="titlepage"><div><div><h1 class="title">
<a name="smarty.for.programmers"></a>Part III. Smarty For Programmers</h1></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl>
<dt><span class="chapter"><a href="charset.tpl">11. Charset Encoding</a></span></dt>
<dd><dl><dt><span class="sect1"><a href="charset.tpl#charset.encoding">Charset Encoding</a></span></dt></dl></dd>
<dt><span class="chapter"><a href="smarty.constants.tpl">12. Constants</a></span></dt>
<dd><dl><dt><span class="sect1"><a href="smarty.constants.tpl#constant.smarty.dir">SMARTY_DIR</a></span></dt></dl></dd>
<dt><span class="chapter"><a href="api.variables.tpl">13. Smarty Class Variables</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="api.variables.tpl#variable.allow.php.templates">$allow_php_templates</a></span></dt>
<dt><span class="sect1"><a href="variable.auto.literal.tpl">$auto_literal</a></span></dt>
<dt><span class="sect1"><a href="variable.autoload.filters.tpl">$autoload_filters</a></span></dt>
<dt><span class="sect1"><a href="variable.cache.dir.tpl">$cache_dir</a></span></dt>
<dt><span class="sect1"><a href="variable.cache.id.tpl">$cache_id</a></span></dt>
<dt><span class="sect1"><a href="variable.cache.lifetime.tpl">$cache_lifetime</a></span></dt>
<dt><span class="sect1"><a href="variable.cache.locking.tpl">$cache_locking</a></span></dt>
<dt><span class="sect1"><a href="variable.cache.modified.check.tpl">$cache_modified_check</a></span></dt>
<dt><span class="sect1"><a href="variable.caching.tpl">$caching</a></span></dt>
<dt><span class="sect1"><a href="variable.caching.type.tpl">$caching_type</a></span></dt>
<dt><span class="sect1"><a href="variable.compile.check.tpl">$compile_check</a></span></dt>
<dt><span class="sect1"><a href="variable.compile.dir.tpl">$compile_dir</a></span></dt>
<dt><span class="sect1"><a href="variable.compile.id.tpl">$compile_id</a></span></dt>
<dt><span class="sect1"><a href="variable.compile.locking.tpl">$compile_locking</a></span></dt>
<dt><span class="sect1"><a href="variable.compiler.class.tpl">$compiler_class</a></span></dt>
<dt><span class="sect1"><a href="variable.config.booleanize.tpl">$config_booleanize</a></span></dt>
<dt><span class="sect1"><a href="variable.config.dir.tpl">$config_dir</a></span></dt>
<dt><span class="sect1"><a href="variable.config.overwrite.tpl">$config_overwrite</a></span></dt>
<dt><span class="sect1"><a href="variable.config.read.hidden.tpl">$config_read_hidden</a></span></dt>
<dt><span class="sect1"><a href="variable.debug_template.tpl">$debug_tpl</a></span></dt>
<dt><span class="sect1"><a href="variable.debugging.tpl">$debugging</a></span></dt>
<dt><span class="sect1"><a href="variable.debugging.ctrl.tpl">$debugging_ctrl</a></span></dt>
<dt><span class="sect1"><a href="variable.default.config.type.tpl">$default_config_type</a></span></dt>
<dt><span class="sect1"><a href="variable.default.modifiers.tpl">$default_modifiers</a></span></dt>
<dt><span class="sect1"><a href="variable.default.resource.type.tpl">$default_resource_type</a></span></dt>
<dt><span class="sect1"><a href="variable.default.config.handler.func.tpl">$default_config_handler_func</a></span></dt>
<dt><span class="sect1"><a href="variable.default.template.handler.func.tpl">$default_template_handler_func</a></span></dt>
<dt><span class="sect1"><a href="variable.direct.access.security.tpl">$direct_access_security</a></span></dt>
<dt><span class="sect1"><a href="variable.error.reporting.tpl">$error_reporting</a></span></dt>
<dt><span class="sect1"><a href="variable.escape.html.tpl">$escape_html</a></span></dt>
<dt><span class="sect1"><a href="variable.force.cache.tpl">$force_cache</a></span></dt>
<dt><span class="sect1"><a href="variable.force.compile.tpl">$force_compile</a></span></dt>
<dt><span class="sect1"><a href="variable.left.delimiter.tpl">$left_delimiter</a></span></dt>
<dt><span class="sect1"><a href="variable.locking.timeout.tpl">$locking_timeout</a></span></dt>
<dt><span class="sect1"><a href="variable.merge.compiled.includes.tpl">$merge_compiled_includes</a></span></dt>
<dt><span class="sect1"><a href="variable.php.handling.tpl">$php_handling</a></span></dt>
<dt><span class="sect1"><a href="variable.plugins.dir.tpl">$plugins_dir</a></span></dt>
<dt><span class="sect1"><a href="variable.right.delimiter.tpl">$right_delimiter</a></span></dt>
<dt><span class="sect1"><a href="variable.smarty.debug.id.tpl">$smarty_debug_id</a></span></dt>
<dt><span class="sect1"><a href="variable.template.dir.tpl">$template_dir</a></span></dt>
<dt><span class="sect1"><a href="variable.trusted.dir.tpl">$trusted_dir</a></span></dt>
<dt><span class="sect1"><a href="variable.use.include.path.tpl">$use_include_path</a></span></dt>
<dt><span class="sect1"><a href="variable.use.sub.dirs.tpl">$use_sub_dirs</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="api.functions.tpl">14. Smarty Class Methods</a></span></dt>
<dd><dl>
<dt>
<span class="refentrytitle"><a href="api.add.config.dir.tpl">addConfigDir()</a></span><span class="refpurpose"> — add a directory to the list of directories where config files are stored</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.add.plugins.dir.tpl">addPluginsDir()</a></span><span class="refpurpose"> — add a directory to the list of directories where plugins are stored</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.add.template.dir.tpl">addTemplateDir()</a></span><span class="refpurpose"> — add a directory to the list of directories where templates are stored</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.append.tpl">append()</a></span><span class="refpurpose"> — append an element to an assigned array</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.append.by.ref.tpl">appendByRef()</a></span><span class="refpurpose"> — append values  by reference</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.assign.tpl">assign()</a></span><span class="refpurpose"> — assign variables/objects to the templates</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.assign.by.ref.tpl">assignByRef()</a></span><span class="refpurpose"> — assign values by reference</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.all.assign.tpl">clearAllAssign()</a></span><span class="refpurpose"> — clears the values of all assigned variables</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.all.cache.tpl">clearAllCache()</a></span><span class="refpurpose"> — clears the entire template cache</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.assign.tpl">clearAssign()</a></span><span class="refpurpose"> — clears the value of an assigned variable</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.cache.tpl">clearCache()</a></span><span class="refpurpose"> — clears the cache for a specific template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.compiled.tpl.tpl">clearCompiledTemplate()</a></span><span class="refpurpose"> — clears the compiled version of the specified template resource</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.clear.config.tpl">clearConfig()</a></span><span class="refpurpose"> — clears assigned config variables</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.compile.all.config.tpl">compileAllConfig()</a></span><span class="refpurpose"> — compiles all known config files</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.compile.all.templates.tpl">compileAllTemplates()</a></span><span class="refpurpose"> — compiles all known templates</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.config.load.tpl">configLoad()</a></span><span class="refpurpose"> —  loads config file  data and assigns it to the template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.create.data.tpl">createData()</a></span><span class="refpurpose"> — creates a data object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.create.template.tpl">createTemplate()</a></span><span class="refpurpose"> — returns a template object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.disable.security.tpl">disableSecurity()</a></span><span class="refpurpose"> — disables template security</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.display.tpl">display()</a></span><span class="refpurpose"> — displays the template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.enable.security.tpl">enableSecurity()</a></span><span class="refpurpose"> — enables template security</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.fetch.tpl">fetch()</a></span><span class="refpurpose"> — returns the template output</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.cache.dir.tpl">getCacheDir()</a></span><span class="refpurpose"> — return the directory where the rendered template's output is stored</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.compile.dir.tpl">getCompileDir()</a></span><span class="refpurpose"> — returns the directory where compiled templates are stored</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.config.dir.tpl">getConfigDir()</a></span><span class="refpurpose"> — return the directory where config files are stored</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.config.vars.tpl">getConfigVars()</a></span><span class="refpurpose"> — returns the given loaded config variable value</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.plugins.dir.tpl">getPluginsDir()</a></span><span class="refpurpose"> — return the directory where plugins are stored</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.registered.object.tpl">getRegisteredObject()</a></span><span class="refpurpose"> — returns a reference to a registered object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.tags.tpl">getTags()</a></span><span class="refpurpose"> — return tags used by template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.template.dir.tpl">getTemplateDir()</a></span><span class="refpurpose"> — return the directory where templates are stored</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.get.template.vars.tpl">getTemplateVars()</a></span><span class="refpurpose"> — returns  assigned variable value(s)</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.is.cached.tpl">isCached()</a></span><span class="refpurpose"> — returns true if there is a valid cache for this template</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.load.filter.tpl">loadFilter()</a></span><span class="refpurpose"> — load a filter plugin</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.mute.expected.errors.tpl">Smarty::muteExpectedErrors()</a></span><span class="refpurpose"> — mutes expected warnings and notices deliberately generated by Smarty</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.cacheresource.tpl">registerCacheResource()</a></span><span class="refpurpose"> — dynamically register CacheResources</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.class.tpl">registerClass()</a></span><span class="refpurpose"> — register a class for use in the templates</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.default.plugin.handler.tpl">registerDefaultPluginHandler()</a></span><span class="refpurpose"> — register a function which gets called on undefined tags</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.filter.tpl">registerFilter()</a></span><span class="refpurpose"> — dynamically register filters</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.plugin.tpl">registerPlugin()</a></span><span class="refpurpose"> — dynamically register plugins</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.object.tpl">registerObject()</a></span><span class="refpurpose"> — register an object for use in the templates</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.register.resource.tpl">registerResource()</a></span><span class="refpurpose"> — dynamically register resources</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.set.cache.dir.tpl">setCacheDir()</a></span><span class="refpurpose"> — set the directory where the rendered template's output is stored</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.set.compile.dir.tpl">setCompileDir()</a></span><span class="refpurpose"> — set the directory where compiled templates are stored</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.set.config.dir.tpl">setConfigDir()</a></span><span class="refpurpose"> — set the directories where config files are stored</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.set.plugins.dir.tpl">setPluginsDir()</a></span><span class="refpurpose"> — set the directories where plugins are stored</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.set.template.dir.tpl">setTemplateDir()</a></span><span class="refpurpose"> — set the directories where templates are stored</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.template.exists.tpl">templateExists()</a></span><span class="refpurpose"> — checks whether the specified template exists</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.cacheresource.tpl">unregisterCacheResource()</a></span><span class="refpurpose"> — dynamically unregister a CacheResource plugin</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.filter.tpl">unregisterFilter()</a></span><span class="refpurpose"> — dynamically unregister a filter</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.plugin.tpl">unregisterPlugin</a></span><span class="refpurpose"> — dynamically unregister plugins</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.object.tpl">unregisterObject()</a></span><span class="refpurpose"> — dynamically unregister an object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.unregister.resource.tpl">unregisterResource()</a></span><span class="refpurpose"> — dynamically unregister a resource plugin</span>
</dt>
<dt>
<span class="refentrytitle"><a href="api.test.install.tpl">testInstall()</a></span><span class="refpurpose"> — checks Smarty installation</span>
</dt>
</dl></dd>
<dt><span class="chapter"><a href="caching.tpl">15. Caching</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="caching.tpl#caching.setting.up">Setting Up Caching</a></span></dt>
<dt><span class="sect1"><a href="caching.multiple.caches.tpl">Multiple Caches Per Page</a></span></dt>
<dt><span class="sect1"><a href="caching.groups.tpl">Cache Groups</a></span></dt>
<dt><span class="sect1"><a href="caching.cacheable.tpl">Controlling Cacheability of Output</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="caching.cacheable.tpl#cacheability.sections">Cacheability of Template Section</a></span></dt>
<dt><span class="sect2"><a href="caching.cacheable.tpl#cacheability.tags">Cacheability of Tags</a></span></dt>
<dt><span class="sect2"><a href="caching.cacheable.tpl#cacheability.variables">Cacheability of Variables</a></span></dt>
<dt><span class="sect2"><a href="caching.cacheable.tpl#cacheability.plugins">Cacheability of Plugins</a></span></dt>
</dl></dd>
<dt><span class="sect1"><a href="caching.custom.tpl">Custom Cache Implementation</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="resources.tpl">16. Resources</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="resources.tpl#resources.file">File Template Resources</a></span></dt>
<dd><dl>
<dt><span class="sect2"><a href="resources.tpl#templates.from.template.dir">Templates from $template_dir</a></span></dt>
<dt><span class="sect2"><a href="resources.tpl#templates.from.specified.template.dir">Templates from a specific $template_dir</a></span></dt>
<dt><span class="sect2"><a href="resources.tpl#templates.from.any.dir">Templates from any directory</a></span></dt>
<dt><span class="sect2"><a href="resources.tpl#templates.windows.filepath">Windows Filepaths</a></span></dt>
</dl></dd>
<dt><span class="sect1"><a href="resources.string.tpl">String Template Resources</a></span></dt>
<dt><span class="sect1"><a href="resources.streams.tpl">Stream Template Resources</a></span></dt>
<dt><span class="sect1"><a href="resources.extends.tpl">Extends Template Resources</a></span></dt>
<dt><span class="sect1"><a href="resources.custom.tpl">Custom Template Resources</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="advanced.features.tpl">17. Advanced Features</a></span></dt>
<dd><dl>
<dt><span class="sect1"><a href="advanced.features.tpl#advanced.features.security">Security</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.template.settings.tpl">Changing settings by template</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.template.inheritance.tpl">Template Inheritance</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.streams.tpl">Streams</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.objects.tpl">Objects</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.static.classes.tpl">Static Classes</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.prefilters.tpl">Prefilters</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.postfilters.tpl">Postfilters</a></span></dt>
<dt><span class="sect1"><a href="advanced.features.outputfilters.tpl">Output Filters</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="plugins.tpl">18. Extending Smarty With Plugins</a></span></dt>
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
<dt><span class="chapter"><a href="bc.tpl">19. SmartyBC - Backwards Compatibility Wrapper</a></span></dt>
<dd><dl><dt><span class="sect1"><a href="bc.tpl#bc.class">SmartyBC class</a></span></dt></dl></dd>
</dl>
</div>
</div>
<div class="navfooter">
<hr>
<table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="chapter.debugging.console.tpl">Prev</a> </td>
<td width="20%" align="center"> </td>
<td width="40%" align="right"> <a accesskey="n" href="charset.tpl">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 10. Debugging Console </td>
<td width="20%" align="center"><a accesskey="h" href="index.tpl">Home</a></td>
<td width="40%" align="right" valign="top"> Chapter 11. Charset Encoding</td>
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
              
              <div id="commentFormChallenge">What is 8 plus 1? <input id="commentFormChallengeText" type="text" name="challenge" size="30" value="" style="color: grey"> <span style="font-style: italic">(Are you human?)</span></div>
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="03c185822c2f3516c96757311dbdfb32">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docs/en/smarty.for.programmers.tpl">
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
    <p>This page generated in 0.03156 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
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

