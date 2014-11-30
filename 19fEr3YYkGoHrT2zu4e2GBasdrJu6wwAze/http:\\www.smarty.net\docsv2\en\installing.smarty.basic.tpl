http://www.smarty.net/docsv2/en/installing.smarty.basic.tpl
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 22:11:08 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 9418
Connection: close
Content-Type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Basic Installation | Smarty</title>
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
<tr><th colspan="3" align="center">Basic Installation</th></tr>
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
<div class="sect1" title="Basic Installation">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="installing.smarty.basic"></a>Basic Installation</h2></div></div></div>
<p>
    Install the Smarty library files which are in the
    <code class="filename">/libs/</code>  sub directory of
    the distribution. These are <code class="filename">.php</code> files that you
    SHOULD NOT edit. They are shared among all applications and only get
    changed when you upgrade to a new version of Smarty.
   </p>
<p>In the examples below the Smarty tarball has been  unpacked to:
   </p>
<div class="itemizedlist"><ul class="itemizedlist" type="disc">
<li class="listitem"><p>
   <code class="filename">/usr/local/lib/Smarty-v.e.r/</code> for *nix
   machines</p></li>
<li class="listitem"><p> and
   <code class="filename">c:\webroot\libs\Smarty-v.e.r\</code> for the
   windows enviroment.</p></li>
</ul></div>
<p>
   </p>
<div class="example">
<a name="id2778275"></a><p class="title"><b>Example 2.1. Required Smarty library files</b></p>
<div class="example-contents"><pre class="screen">

Smarty-v.e.r/
   libs/
      Smarty.class.php
      Smarty_Compiler.class.php
      Config_File.class.php
      debug.tpl
      internals/*.php  (all of them)
      plugins/*.php    (all of them)

    </pre></div>
</div>
<br class="example-break"><p>
    Smarty uses a PHP <a class="ulink" href="http://php.net/define" target="_top">constant</a>
    named <a class="link" href="smarty.constants.tpl#constant.smarty.dir" title="SMARTY_DIR"><code class="constant">SMARTY_DIR</code>
    </a> which is the <span class="bold"><strong>full system file path</strong></span>
    to the Smarty <code class="filename">libs/</code> directory.
    Basically, if your application can find  the
    <code class="filename">Smarty.class.php</code> file, you do not need to set the
    <a class="link" href="smarty.constants.tpl#constant.smarty.dir" title="SMARTY_DIR"><code class="constant">SMARTY_DIR</code></a>
    as Smarty will figure it out on its own.
    Therefore, if
    <code class="filename">Smarty.class.php</code> is not in your
    <a class="ulink" href="http://php.net/ini.core.php#ini.include-path" target="_top">include_path</a>,
    or you do not supply an absolute path to it in your application,
    then you must define <code class="constant">SMARTY_DIR</code> manually.
    <code class="constant">SMARTY_DIR</code> <span class="bold"><strong>must include a
    trailing slash/</strong></span>.
   </p>
<div class="informalexample">
<p>
    Here's how you create an instance of Smarty in your PHP scripts:
   </p>
<pre class="programlisting">

&lt;?php
// NOTE: Smarty has a capital 'S'
require_once('Smarty.class.php');
$smarty = new Smarty();
?&gt;

    </pre>
</div>
<p>
    Try running the above script. If you get an error saying the
    <code class="filename">Smarty.class.php</code> file could not be found, you need to
    do one of the following:
   </p>
<div class="example">
<a name="id2778391"></a><p class="title"><b>Example 2.2. Set SMARTY_DIR constant manually</b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php
// *nix style (note capital 'S')
define('SMARTY_DIR', '/usr/local/lib/Smarty-v.e.r/libs/');

// windows style
define('SMARTY_DIR', 'c:/webroot/libs/Smarty-v.e.r/libs/');

// hack version example that works on both *nix and windows
// Smarty is assumend to be in 'includes/' dir under current script
define('SMARTY_DIR',str_replace("\\","/",getcwd()).'/includes/Smarty-v.e.r/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();
?&gt;

    </pre></div>
</div>
<br class="example-break"><div class="example">
<a name="id2778405"></a><p class="title"><b>Example 2.3. Supply absolute path to library file</b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php
// *nix style (note capital 'S')
require_once('/usr/local/lib/Smarty-v.e.r/libs/Smarty.class.php');

// windows style
require_once('c:/webroot/libs/Smarty-v.e.r/libs/Smarty.class.php');

$smarty = new Smarty();
?&gt;

    </pre></div>
</div>
<br class="example-break"><div class="example">
<a name="id2778435"></a><p class="title"><b>Example 2.4. Add the library path to the <code class="filename">php.ini</code> file</b></p>
<div class="example-contents"><pre class="programlisting">

;;;;;;;;;;;;;;;;;;;;;;;;;
; Paths and Directories ;
;;;;;;;;;;;;;;;;;;;;;;;;;

; *nix: "/path1:/path2"
include_path = ".:/usr/share/php:/usr/local/lib/Smarty-v.e.r/libs/"

; Windows: "\path1;\path2"
include_path = ".;c:\php\includes;c:\webroot\libs\Smarty-v.e.r\libs\"

</pre></div>
</div>
<br class="example-break"><div class="example">
<a name="id2778463"></a><p class="title"><b>Example 2.5. Appending the include path in a php script with
    <code class="literal"><a class="ulink" href="http://php.net/ini-set" target="_top">ini_set()</a></code></b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php
// *nix
ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.'/usr/local/lib/Smarty-v.e.r/libs/');

// windows
ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.'c:/webroot/lib/Smarty-v.e.r/libs/');
?&gt;

    </pre></div>
</div>
<br class="example-break"><p>
    Now that the library files are in place, it's time to setup the Smarty
    directories for your application:</p>
<div class="itemizedlist"><ul class="itemizedlist" type="disc">
<li class="listitem"><p>
    Smarty requires four directories which
    are by default named <code class="filename">templates/</code>,
    <code class="filename">templates_c/</code>, <code class="filename">configs/</code> and <code class="filename">cache/</code>
    </p></li>
<li class="listitem"><p>Each of these are definable by the
    Smarty class properties
    <a class="link" href="api.variables.tpl#variable.template.dir" title="$template_dir">
    <code class="varname">$template_dir</code></a>,
    <a class="link" href="variable.compile.dir.tpl" title="$compile_dir">
    <code class="varname">$compile_dir</code></a>,
    <a class="link" href="variable.config.dir.tpl" title="$config_dir">
    <code class="varname">$config_dir</code></a>, and
    <a class="link" href="variable.cache.dir.tpl" title="$cache_dir">
    <code class="varname">$cache_dir</code></a> respectively
    </p></li>
<li class="listitem"><p>
    It is highly recommended
    that you setup a separate set of these directories for each application
    that will use Smarty
   </p></li>
</ul></div>
<p>
    For our installation example, we will be setting up the Smarty environment
    for a guest book application. We picked an application only for the purpose
    of a directory naming convention. You can use the same environment for any
    application, just replace <code class="literal">guestbook/</code> with
    the name of your application.
    </p>
<div class="example">
<a name="id2778601"></a><p class="title"><b>Example 2.6. What the file structure looks like</b></p>
<div class="example-contents"><pre class="screen">

/usr/local/lib/Smarty-v.e.r/libs/
        Smarty.class.php
        Smarty_Compiler.class.php
        Config_File.class.php
        debug.tpl
        internals/*.php
        plugins/*.php

/web/www.example.com/
        guestbook/
                templates/
                    index.tpl
                templates_c/
                configs/
                cache/
                htdocs/
                    index.php

    </pre></div>
</div>
<br class="example-break"><p>
    Be sure that you know the location of your web server's document root as a
    file path. In the following examples, the document root is <code class="filename">/web/www.example.com/guestbook/htdocs/</code>.
    The Smarty
    directories are only accessed by the Smarty library and never accessed
    directly by the web browser. Therefore to avoid any security concerns, it
    is recommended (but not mandatory) to place these directories
    <span class="emphasis"><em>outside</em></span> of the web server's document root.
   </p>
<p>
    You will need as least one file under your document root, and that is the
    script accessed by the web browser. We will name our script
    <code class="filename">index.php</code>, and place it in a subdirectory under the
    document root <code class="filename">/htdocs/</code>.
   </p>
<p>
    Smarty will need <span class="bold"><strong>write access</strong></span>
    (windows users please ignore) to the
    <a class="link" href="variable.compile.dir.tpl" title="$compile_dir">
    <em class="parameter"><code>$compile_dir</code></em></a> and
    <a class="link" href="variable.cache.dir.tpl" title="$cache_dir">
    <em class="parameter"><code>$cache_dir</code></em></a> directories
    (<code class="filename">templates_c/</code> and
    <code class="filename">cache/</code>), so be sure the web server
    user account can write  to them.

    </p>
<div class="note" title="Note" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Note</h3>
<p>This is usually user <span class="quote">“<span class="quote">nobody</span>”</span> and
    group <span class="quote">“<span class="quote">nobody</span>”</span>. For OS X users,
    the default is user <span class="quote">“<span class="quote">www</span>”</span> and group <span class="quote">“<span class="quote">www</span>”</span>.
    If you are using Apache, you can  look in your
    <code class="filename">httpd.conf</code> file to see
    what user and group are being used.</p>
</div>
<p>
    </p>
<div class="example">
<a name="id2778738"></a><p class="title"><b>Example 2.7. Permissions and making directories writable</b></p>
<div class="example-contents"><pre class="programlisting">

chown nobody:nobody /web/www.example.com/guestbook/templates_c/
chmod 770 /web/www.example.com/guestbook/templates_c/

chown nobody:nobody /web/www.example.com/guestbook/cache/
chmod 770 /web/www.example.com/guestbook/cache/

    </pre></div>
</div>
<br class="example-break"><div class="note" title="Note" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Note</h3>
<p>
     <code class="literal">chmod 770</code> will be fairly tight security, it only allows
     user <span class="quote">“<span class="quote">nobody</span>”</span> and group <span class="quote">“<span class="quote">nobody</span>”</span> read/write access
     to the directories. If you would like to  open up read access to anyone
     (mostly for your own convenience of viewing
     these files), you can use <code class="literal">775</code> instead.
    </p>
</div>
<p>
    We need to create the <code class="filename">index.tpl</code> file that Smarty will
    display. This needs to be located in the <a class="link" href="api.variables.tpl#variable.template.dir" title="$template_dir">
    <em class="parameter"><code>$template_dir</code></em></a>.
   </p>
<div class="example">
<a name="id2778811"></a><p class="title"><b>Example 2.8. /web/www.example.com/guestbook/templates/index.tpl</b></p>
<div class="example-contents"><pre class="screen">

{* Smarty *}

Hello {$name}, welcome to Smarty!

    </pre></div>
</div>
<br class="example-break"><div class="note" title="Technical Note" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Technical Note</h3>
<p>
     <code class="literal">{* Smarty *}</code> is a template
     <a class="link" href="language.basic.syntax.tpl#language.syntax.comments" title="Comments">comment</a>.
     It is not required, but it is good
     practice to start all your template files with this comment. It makes
     the file easy to recognize regardless of the file extension. For
     example, text editors could recognize the file and turn on special
     syntax highlighting.
    </p>
</div>
<p>
    Now lets edit <code class="filename">index.php</code>. We'll create an instance of Smarty,
    <a class="link" href="api.assign.tpl" title="assign()"><code class="varname">assign()</code></a> a
    template variable and <a class="link" href="api.display.tpl" title="display()"><code class="varname">display()</code></a>
    the <code class="filename">index.tpl</code> file.
   </p>
<div class="example">
<a name="id2778878"></a><p class="title"><b>Example 2.9. Editing /web/www.example.com/docs/guestbook/index.php</b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php

require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();

$smarty-&gt;template_dir = '/web/www.example.com/guestbook/templates/';
$smarty-&gt;compile_dir  = '/web/www.example.com/guestbook/templates_c/';
$smarty-&gt;config_dir   = '/web/www.example.com/guestbook/configs/';
$smarty-&gt;cache_dir    = '/web/www.example.com/guestbook/cache/';

$smarty-&gt;assign('name','Ned');

//** un-comment the following line to show the debug console
//$smarty-&gt;debugging = true;

$smarty-&gt;display('index.tpl');

?&gt;

    </pre></div>
</div>
<br class="example-break"><div class="note" title="Note" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Note</h3>
<p>
     In our example, we are setting absolute paths to all of the Smarty
     directories. If <code class="filename">/web/www.example.com/guestbook/</code> is
     within your PHP include_path, then these settings are not necessary.
     However, it is more efficient and (from experience) less error-prone to
     set them to absolute paths. This ensures that Smarty is getting files
     from the directories you intended.
    </p>
</div>
<p>
    Now naviagate to the <code class="filename">index.php</code> file with the web browser.
    You should see <span class="emphasis"><em>"Hello Ned, welcome to Smarty!"</em></span>
   </p>
<p>
    You have completed the basic setup for Smarty!
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
<td width="40%" align="right" valign="top"> Extended Setup</td>
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
              
              <div id="commentFormChallenge">What is 12 plus 15? <input id="commentFormChallengeText" type="text" name="challenge" size="30" value="" style="color: grey"> <span style="font-style: italic">(Are you human?)</span></div>
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="3cbc94fc8e1223b3158bdff291061d88">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docsv2/en/installing.smarty.basic.tpl">
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
    <p>This page generated in 0.01057 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
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

