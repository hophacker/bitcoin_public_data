http://www.smarty.net/docs/en/language.function.html.select.time.tpl
HTTP/1.1 200 OK
Date: Thu, 24 Jul 2014 14:31:21 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 7643
Connection: close
Content-Type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{html_select_time} | Smarty</title>
    <meta name="description" content="{html_select_time}">
    <meta name="keywords" content=", ldelim, html_select_time, rdelim, ">
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
<tr><th colspan="3" align="center">{html_select_time}</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="language.function.html.select.date.tpl">Prev</a> </td>
<th width="60%" align="center">Chapter 8. Custom Functions</th>
<td width="20%" align="right"> <a accesskey="n" href="language.function.html.table.tpl">Next</a>
</td>
</tr>
</table>
<hr>
</div>
<div class="sect1" title="{html_select_time}">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="language.function.html.select.time"></a>{html_select_time}</h2></div></div></div>
<p>
   <code class="varname">{html_select_time}</code> is a
   <a class="link" href="language.custom.functions.tpl" title="Chapter 8. Custom Functions">custom function</a>
   that creates time dropdowns for you.
   It can display any or all of hour, minute, second and  meridian.
 </p>
<p>
  The <em class="parameter"><code>time</code></em> attribute can have different formats.
  It can be a unique timestamp, a  string of the format
  <code class="literal">YYYYMMDDHHMMSS</code> or a string  that is parseable by PHP's
  <a class="ulink" href="http://php.net/strtotime" target="_top"><code class="varname">strtotime()</code></a>.
 </p>
<div class="informaltable"><table border="1">
<colgroup>
<col align="center">
<col align="center">
<col align="center">
<col align="center">
<col>
</colgroup>
<thead><tr>
<th align="center">Attribute Name</th>
<th align="center">Type</th>
<th align="center">Required</th>
<th align="center">Default</th>
<th>Description</th>
</tr></thead>
<tbody>
<tr>
<td align="center">prefix</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">Time_</td>
<td>What to prefix the var name with</td>
</tr>
<tr>
<td align="center">time</td>
<td align="center">
      <a class="ulink" href="http://php.net/function.time" target="_top">timestamp</a>, 
      <a class="ulink" href="http://php.net/class.DateTime" target="_top">DateTime</a>, 
      mysql timestamp or any string parsable by 
      <a class="ulink" href="http://php.net/strtotime" target="_top"><code class="varname">strtotime()</code></a>, 
      arrays as produced by this function if field_array is set.
     </td>
<td align="center">No</td>
<td align="center">current <a class="ulink" href="http://php.net/function.time" target="_top">timestamp</a>
</td>
<td>
      What date/time to pre-select. If an array is given, the attributes field_array and prefix 
      are used to identify the array elements to extract hour, minute, second and meridian from.
     </td>
</tr>
<tr>
<td align="center">display_hours</td>
<td align="center">boolean</td>
<td align="center">No</td>
<td align="center"><code class="constant">TRUE</code></td>
<td>Whether or not to display hours</td>
</tr>
<tr>
<td align="center">display_minutes</td>
<td align="center">boolean</td>
<td align="center">No</td>
<td align="center"><code class="constant">TRUE</code></td>
<td>Whether or not to display minutes</td>
</tr>
<tr>
<td align="center">display_seconds</td>
<td align="center">boolean</td>
<td align="center">No</td>
<td align="center"><code class="constant">TRUE</code></td>
<td>Whether or not to display seconds</td>
</tr>
<tr>
<td align="center">display_meridian</td>
<td align="center">boolean</td>
<td align="center">No</td>
<td align="center"><code class="constant">TRUE</code></td>
<td>Whether or not to display meridian (am/pm)</td>
</tr>
<tr>
<td align="center">use_24_hours</td>
<td align="center">boolean</td>
<td align="center">No</td>
<td align="center"><code class="constant">TRUE</code></td>
<td>Whether or not to use 24 hour clock</td>
</tr>
<tr>
<td align="center">minute_interval</td>
<td align="center">integer</td>
<td align="center">No</td>
<td align="center">1</td>
<td>Number interval in minute dropdown</td>
</tr>
<tr>
<td align="center">second_interval</td>
<td align="center">integer</td>
<td align="center">No</td>
<td align="center">1</td>
<td>Number interval in second dropdown</td>
</tr>
<tr>
<td align="center">hour_format</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">%02d</td>
<td>What format the hour label should be in (sprintf)</td>
</tr>
<tr>
<td align="center">hour_value_format</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">%20d</td>
<td>What format the hour value should be in (sprintf)</td>
</tr>
<tr>
<td align="center">minute_format</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">%02d</td>
<td>What format the minute label should be in (sprintf)</td>
</tr>
<tr>
<td align="center">minute_value_format</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">%20d</td>
<td>What format the minute value should be in (sprintf)</td>
</tr>
<tr>
<td align="center">second_format</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">%02d</td>
<td>What format the second label should be in (sprintf)</td>
</tr>
<tr>
<td align="center">second_value_format</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">%20d</td>
<td>What format the second value should be in (sprintf)</td>
</tr>
<tr>
<td align="center">field_array</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">n/a</td>
<td>Outputs values to array of this name</td>
</tr>
<tr>
<td align="center">all_extra</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>Adds extra attributes to select/input tags if given</td>
</tr>
<tr>
<td align="center">hour_extra</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>Adds extra attributes to select/input tags if
      given</td>
</tr>
<tr>
<td align="center">minute_extra</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>Adds extra attributes to select/input tags if
      given</td>
</tr>
<tr>
<td align="center">second_extra</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>Adds extra attributes to select/input tags if
      given</td>
</tr>
<tr>
<td align="center">meridian_extra</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>Adds extra attributes to select/input tags if
      given</td>
</tr>
<tr>
<td align="center">field_separator</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">\n</td>
<td>String printed between different fields</td>
</tr>
<tr>
<td align="center">option_separator</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">\n</td>
<td>String printed between different options of a field</td>
</tr>
<tr>
<td align="center">all_id</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>Adds id-attribute to all select/input tags if given</td>
</tr>
<tr>
<td align="center">hour_id</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>Adds id-attribute to select/input tags if given</td>
</tr>
<tr>
<td align="center">minute_id</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>Adds id-attribute to select/input tags if given</td>
</tr>
<tr>
<td align="center">second_id</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>Adds id-attribute to select/input tags if given</td>
</tr>
<tr>
<td align="center">meridian_id</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>Adds id-attribute to select/input tags if given</td>
</tr>
<tr>
<td align="center">all_empty</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>If supplied then the first element of any select-box has this
     value as it's label and <span class="quote">“<span class="quote"></span>”</span> as it's value. This is useful to make the
     select-boxes read <span class="quote">“<span class="quote">Please select</span>”</span> for example.</td>
</tr>
<tr>
<td align="center">hour_empty</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>If supplied then the first element of the hour's select-box has this
     value as it's label and <span class="quote">“<span class="quote"></span>”</span> as it's value. This is useful to make the
     select-box read <span class="quote">“<span class="quote">Please select an hour</span>”</span> for example.</td>
</tr>
<tr>
<td align="center">minute_empty</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>If supplied then the first element of the minute's select-box has this
     value as it's label and <span class="quote">“<span class="quote"></span>”</span> as it's value. This is useful to make the
     select-box read <span class="quote">“<span class="quote">Please select an minute</span>”</span> for example.</td>
</tr>
<tr>
<td align="center">second_empty</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>If supplied then the first element of the second's select-box has this
     value as it's label and <span class="quote">“<span class="quote"></span>”</span> as it's value. This is useful to make the
     select-box read <span class="quote">“<span class="quote">Please select an second</span>”</span> for example.</td>
</tr>
<tr>
<td align="center">meridian_empty</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center">null</td>
<td>If supplied then the first element of the meridian's select-box has this
     value as it's label and <span class="quote">“<span class="quote"></span>”</span> as it's value. This is useful to make the
     select-box read <span class="quote">“<span class="quote">Please select an meridian</span>”</span> for example.</td>
</tr>
</tbody>
</table></div>
<div class="example">
<a name="idp12396512"></a><p class="title"><b>Example 8.18. {html_select_time}</b></p>
<div class="example-contents">
<pre class="programlisting">

{html_select_time use_24_hours=true}

  </pre>
<p>
   At 9:20 and 23 seconds in the morning the template above would output:
  </p>
<pre class="screen">

&lt;select name="Time_Hour"&gt;
&lt;option value="00"&gt;00&lt;/option&gt;
&lt;option value="01"&gt;01&lt;/option&gt;
... snipped ....
&lt;option value="08"&gt;08&lt;/option&gt;
&lt;option value="09" selected&gt;09&lt;/option&gt;
&lt;option value="10"&gt;10&lt;/option&gt;
... snipped ....
&lt;option value="22"&gt;22&lt;/option&gt;
&lt;option value="23"&gt;23&lt;/option&gt;
&lt;/select&gt;
&lt;select name="Time_Minute"&gt;
&lt;option value="00"&gt;00&lt;/option&gt;
&lt;option value="01"&gt;01&lt;/option&gt;
... snipped ....
&lt;option value="19"&gt;19&lt;/option&gt;
&lt;option value="20" selected&gt;20&lt;/option&gt;
&lt;option value="21"&gt;21&lt;/option&gt;
... snipped ....
&lt;option value="58"&gt;58&lt;/option&gt;
&lt;option value="59"&gt;59&lt;/option&gt;
&lt;/select&gt;
&lt;select name="Time_Second"&gt;
&lt;option value="00"&gt;00&lt;/option&gt;
&lt;option value="01"&gt;01&lt;/option&gt;
... snipped ....
&lt;option value="22"&gt;22&lt;/option&gt;
&lt;option value="23" selected&gt;23&lt;/option&gt;
&lt;option value="24"&gt;24&lt;/option&gt;
... snipped ....
&lt;option value="58"&gt;58&lt;/option&gt;
&lt;option value="59"&gt;59&lt;/option&gt;
&lt;/select&gt;
&lt;select name="Time_Meridian"&gt;
&lt;option value="am" selected&gt;AM&lt;/option&gt;
&lt;option value="pm"&gt;PM&lt;/option&gt;
&lt;/select&gt;

  </pre>
</div>
</div>
<br class="example-break"><p>
    See also
    <a class="link" href="language.variables.smarty.tpl#language.variables.smarty.now" title="{$smarty.now}"><em class="parameter"><code>$smarty.now</code></em></a>,
    <a class="link" href="language.function.html.select.date.tpl" title="{html_select_date}"><code class="varname">{html_select_date}</code></a>
    and the <a class="link" href="tips.dates.tpl" title="Dates">date tips page</a>.
  </p>
</div>
<div class="navfooter">
<hr>
<table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="language.function.html.select.date.tpl">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="language.custom.functions.tpl">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="language.function.html.table.tpl">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">{html_select_date} </td>
<td width="20%" align="center"><a accesskey="h" href="index.tpl">Home</a></td>
<td width="40%" align="right" valign="top"> {html_table}</td>
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
              
              <div id="commentFormChallenge">What is 16 plus 1? <input id="commentFormChallengeText" type="text" name="challenge" size="30" value="" style="color: grey"> <span style="font-style: italic">(Are you human?)</span></div>
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="08aacfb5600ea942c39927b3a167a735">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docs/en/language.function.html.select.time.tpl">
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
    <p>This page generated in 0.02335 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
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

