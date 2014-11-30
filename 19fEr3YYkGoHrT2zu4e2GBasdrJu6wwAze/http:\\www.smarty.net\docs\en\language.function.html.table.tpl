http://www.smarty.net/docs/en/language.function.html.table.tpl
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 03:42:44 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 9046
Connection: close
Content-Type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{html_table} | Smarty</title>
    <meta name="description" content="{html_table}">
    <meta name="keywords" content=", ldelim, html_table, rdelim, ">
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
<tr><th colspan="3" align="center">{html_table}</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="language.function.html.select.time.tpl">Prev</a> </td>
<th width="60%" align="center">Chapter 8. Custom Functions</th>
<td width="20%" align="right"> <a accesskey="n" href="language.function.mailto.tpl">Next</a>
</td>
</tr>
</table>
<hr>
</div>
<div class="sect1" title="{html_table}">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="language.function.html.table"></a>{html_table}</h2></div></div></div>
<p>
   <code class="varname">{html_table}</code> is a
   <a class="link" href="language.custom.functions.tpl" title="Chapter 8. Custom Functions">custom function</a>
   that dumps an array of data into an HTML <code class="literal">&lt;table&gt;</code>.
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
<td align="center">loop</td>
<td align="center">array</td>
<td align="center">Yes</td>
<td align="center"><span class="emphasis"><em>n/a</em></span></td>
<td>Array of data to loop through</td>
</tr>
<tr>
<td align="center">cols</td>
<td align="center">mixed</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>3</em></span></td>
<td>
      Number of columns in the table or a comma-separated list of column heading
      names or an array of column heading names.if the cols-attribute is empty,
      but rows are given, then the number of cols is computed by the number
      of rows and the number of elements to display to be just enough cols to
      display all elements. If both, rows and cols, are omitted cols defaults
      to 3. if given as a list or array, the number of columns is computed from
      the number of elements in the list or array.
     </td>
</tr>
<tr>
<td align="center">rows</td>
<td align="center">integer</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>empty</em></span></td>
<td>
      Number of rows in the table. if the rows-attribute is empty, but
      cols are given, then the number of rows is computed by the number of
      cols and the number of elements to display to be just enough rows to
      display all elements.
     </td>
</tr>
<tr>
<td align="center">inner</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>cols</em></span></td>
<td>
      Direction of consecutive elements in the loop-array to be
      rendered. <span class="emphasis"><em>cols</em></span> means elements are displayed
      col-by-col. <span class="emphasis"><em>rows</em></span> means elements are displayed
      row-by-row.
     </td>
</tr>
<tr>
<td align="center">caption</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>empty</em></span></td>
<td>Text to be used for the <code class="literal">&lt;caption&gt;</code>
     element of the table</td>
</tr>
<tr>
<td align="center">table_attr</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>border="1"</em></span></td>
<td>Attributes for <code class="literal">&lt;table&gt;</code> tag</td>
</tr>
<tr>
<td align="center">th_attr</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>empty</em></span></td>
<td>Attributes for <code class="literal">&lt;th&gt;</code> tag
     (arrays are cycled)</td>
</tr>
<tr>
<td align="center">tr_attr</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>empty</em></span></td>
<td>attributes for <code class="literal">&lt;tr&gt;</code> tag
     (arrays are cycled)</td>
</tr>
<tr>
<td align="center">td_attr</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>empty</em></span></td>
<td>Attributes for <code class="literal">&lt;td&gt;</code> tag
     (arrays are cycled)</td>
</tr>
<tr>
<td align="center">trailpad</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>&amp;nbsp;</em></span></td>
<td>Value to pad the trailing cells on last row with (if any)</td>
</tr>
<tr>
<td align="center">hdir</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>right</em></span></td>
<td>
      Direction of each row to be rendered. possible values:
      <span class="emphasis"><em>right</em></span> (left-to-right), and
      <span class="emphasis"><em>left</em></span> (right-to-left)
     </td>
</tr>
<tr>
<td align="center">vdir</td>
<td align="center">string</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>down</em></span></td>
<td>
      Direction of each column to be rendered. possible values:
      <span class="emphasis"><em>down</em></span> (top-to-bottom), <span class="emphasis"><em>up</em></span>
      (bottom-to-top)
     </td>
</tr>
</tbody>
</table></div>
<div class="itemizedlist"><ul class="itemizedlist" type="disc">
<li class="listitem"><p>
   The <em class="parameter"><code>cols</code></em> attribute determines how many
   columns will be in the table.
   </p></li>
<li class="listitem"><p>
   The <em class="parameter"><code>table_attr</code></em>, <em class="parameter"><code>tr_attr</code></em>
   and <em class="parameter"><code>td_attr</code></em> values  determine the attributes given
   to the <code class="literal">&lt;table&gt;</code>, <code class="literal">&lt;tr&gt;</code>
   and <code class="literal">&lt;td&gt;</code> tags.
   </p></li>
<li class="listitem"><p>
   If <em class="parameter"><code>tr_attr</code></em> or <em class="parameter"><code>td_attr</code></em> are
   arrays, they will be cycled through.
   </p></li>
<li class="listitem"><p>
   <em class="parameter"><code>trailpad</code></em> is the value put  into the trailing cells
   on the last table row if there are any present.
   </p></li>
</ul></div>
<div class="example">
<a name="idp12586208"></a><p class="title"><b>Example 8.19. {html_table}</b></p>
<div class="example-contents">
<pre class="programlisting">

&lt;?php
$smarty-&gt;assign( 'data', array(1,2,3,4,5,6,7,8,9) );
$smarty-&gt;assign( 'tr', array('bgcolor="#eeeeee"','bgcolor="#dddddd"') );
$smarty-&gt;display('index.tpl');
?&gt;

  </pre>
<p>The variables assigned from php could be displayed as these three
    examples demonstrate. Each example shows the template followed by output.
    </p>
<pre class="programlisting">

{**** Example One ****}
{html_table loop=$data}

&lt;table border="1"&gt;
&lt;tbody&gt;
&lt;tr&gt;&lt;td&gt;1&lt;/td&gt;&lt;td&gt;2&lt;/td&gt;&lt;td&gt;3&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;4&lt;/td&gt;&lt;td&gt;5&lt;/td&gt;&lt;td&gt;6&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;7&lt;/td&gt;&lt;td&gt;8&lt;/td&gt;&lt;td&gt;9&lt;/td&gt;&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;


{**** Example Two ****}
{html_table loop=$data cols=4 table_attr='border="0"'}

&lt;table border="0"&gt;
&lt;tbody&gt;
&lt;tr&gt;&lt;td&gt;1&lt;/td&gt;&lt;td&gt;2&lt;/td&gt;&lt;td&gt;3&lt;/td&gt;&lt;td&gt;4&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;5&lt;/td&gt;&lt;td&gt;6&lt;/td&gt;&lt;td&gt;7&lt;/td&gt;&lt;td&gt;8&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;9&lt;/td&gt;&lt;td&gt;&amp;nbsp;&lt;/td&gt;&lt;td&gt;&amp;nbsp;&lt;/td&gt;&lt;td&gt;&amp;nbsp;&lt;/td&gt;&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;


{**** Example Three ****}
{html_table loop=$data cols="first,second,third,fourth" tr_attr=$tr}

&lt;table border="1"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th&gt;first&lt;/th&gt;&lt;th&gt;second&lt;/th&gt;&lt;th&gt;third&lt;/th&gt;&lt;th&gt;fourth&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr bgcolor="#eeeeee"&gt;&lt;td&gt;1&lt;/td&gt;&lt;td&gt;2&lt;/td&gt;&lt;td&gt;3&lt;/td&gt;&lt;td&gt;4&lt;/td&gt;&lt;/tr&gt;
&lt;tr bgcolor="#dddddd"&gt;&lt;td&gt;5&lt;/td&gt;&lt;td&gt;6&lt;/td&gt;&lt;td&gt;7&lt;/td&gt;&lt;td&gt;8&lt;/td&gt;&lt;/tr&gt;
&lt;tr bgcolor="#eeeeee"&gt;&lt;td&gt;9&lt;/td&gt;&lt;td&gt;&amp;nbsp;&lt;/td&gt;&lt;td&gt;&amp;nbsp;&lt;/td&gt;&lt;td&gt;&amp;nbsp;&lt;/td&gt;&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;

  </pre>
</div>
</div>
<br class="example-break">
</div>
<div class="navfooter">
<hr>
<table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="language.function.html.select.time.tpl">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="language.custom.functions.tpl">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="language.function.mailto.tpl">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">{html_select_time} </td>
<td width="20%" align="center"><a accesskey="h" href="index.tpl">Home</a></td>
<td width="40%" align="right" valign="top"> {mailto}</td>
</tr>
</table>
</div>

		
		  <div class="comments">
      
                  <div id="commentHeader"><strong>Comments</strong></div>
          <div class="commentInfo">
          
                      <div class="commentWrapperOdd">
              <div class="commentAuthor">by <b>anonymous</b> on Mar 30, 2012 at 11:14</div>
              <div class="commentBody">better than html_table
&lt;pre&gt;&lt;?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsFunction
 */

/**
 * Smarty {html_dataview} function plugin
 *
 * Type:     function&lt;br&gt;
 * Name:     html_dataview&lt;br&gt;
 * Date:     Jul 2, 2011&lt;br&gt;
 * Purpose:  make an separated to sheet html dataview from an array of data, include javascript to manipulation&lt;br&gt;
 *
 *
 * Examples:
 *  &lt;pre&gt;
 * $smarty-&gt;assign(&quot;data&quot;,array(array('1','1a','1b'),
 *                              array('2','2a','2b'),
 *                              array('3','3a','3b'),
 *                              array('4','4a','4b')));
 * {dataview loop=$data}
 * {dataview loop=$data rows=2 }
 * &lt;/pre&gt;
 *
 * @author NaH &lt;not dot a dot human at gmail dot com&gt;
 * @author credit to Monte Ohrt &lt;monte at ohrt dot com&gt;
 * @version 0.0
 * @param array $params parameters
 * Input:&lt;br&gt;
 *          - loop = array to loop through
 *          - rows = number of rows
 *          - heading = table heading values (arrays are cycled)
 * @param object $template template object
 * @return string
 */
function smarty_function_html_dataview($params, $template)
{
    $rows = 1;//default value to row count
    $heading=array();
    $head=FALSE;
    if (isset($params['rows'])) {
           $rows = $params['rows'];
        }
if (!isset($params['loop'])&amp;&amp;count($params['loop'])&lt;2) {
        trigger_error(&quot;html_dataview: missing 'loop' parameter&quot;,E_USER_WARNING);
        return;
    }
if (isset($params['heading'])) {
    $heading=explode(',',$params['heading']);
         $head=TRUE;
    }
$myblock= $params['loop'];
$output = &quot;&quot;;
$output2=&quot;&quot;;
$result=&quot;&quot;;
$divcount=1;//&lt;div id==&gt;  if the not  null
if (isset($myblock[0])) {
    foreach ($myblock as $i1 =&gt; $n1) //foreach in te first layer of array
	{
		if($i1%$rows==0) //if row count in the table equivalent to the my variable $elementintables
        {
                if($i1%$rows==0&amp;&amp;$i1==0) //if the first div element declare
        	{
        	$output .= &quot;&lt;div id=&quot;.$divcount.&quot;&gt;\n&lt;table border='1'&gt;\n&lt;tr&gt;\n&quot;;
			$divcount++;
                                if($head==TRUE){
            $output .=&quot;&lt;tr&gt;\n&quot;;
               foreach ($n1 as $i2 =&gt; $n2)
		{
			$output .=&quot;&lt;th&gt;&quot;;
                        if(isset ($heading[$i2])){
                        $output .=$heading[$i2];}
                        else{$output .=&quot;&amp;nbsp;&quot;;}
                        $output .= &quot;&lt;/th&gt;&quot;;
		}
$output .=&quot;&lt;/tr&gt;\n&quot;;
        }
        	}
        	else  //if the other div element declare
        	{
        	$output .= &quot;&lt;/tr&gt;\n&lt;/table&gt;\n&lt;/div&gt;\n&lt;div id='&quot;.$divcount.&quot;' style='display: none;'&gt;\n&lt;table border='1'&gt;\n&lt;tr&gt;\n&quot;;
			$divcount++;
                                if($head==TRUE){
            $output .=&quot;&lt;tr&gt;\n&quot;;
               foreach ($n1 as $i2 =&gt; $n2)
		{
			$output .=&quot;&lt;th&gt;&quot;;
                        if(isset ($heading[$i2])){
                        $output .=$heading[$i2];}
                        else{$output .=&quot;&amp;nbsp;&quot;;}
                        $output .= &quot;&lt;/th&gt;&quot;;
		}
$output .=&quot;&lt;/tr&gt;\n&quot;;
        }
			}
        }
        else   //if row count in the table NOT equivalent to the my variable $elementintables
        {
        	$output .=&quot;&lt;tr&gt;\n&quot;;
        }

   foreach ($n1 as $i2 =&gt; $n2)
		{
			$output .=&quot;&lt;td&gt;&quot;; $output .=$n2;$output .= &quot;&lt;/td&gt;&quot;;
		}
		if($i1==count($myblock)-1) //if the last row in the last table
        {
             $output .=&quot;&lt;/tr&gt;\n&quot;;
        	 $output .=&quot;&lt;/table&gt;\n&quot;;
             $output .=&quot;&lt;/div&gt;&quot;;
        }
        else //if row count in the table NOT equivalent to the my variable $elementintables
        {
        	$output .=&quot;&lt;/tr&gt;\n&quot;;
        }
    }
$output2 .=&quot;&lt;div style=\&quot;width : 60px;  overflow : auto;\&quot;&gt;&lt;table border='1' class='sample'&gt;&lt;tr&gt;&quot;;// table contain the clickabled label
for($i=1;$i&lt;$divcount;$i++)//the label count equivalent to the my variable $divcount
{
	$output2 .=&quot;&lt;td &quot;;
	if($i!=1){ $output2 .=&quot;style='background-color:#CC9999;'&quot;;}
	$output2 .=&quot; id='lab&quot;.$i.&quot;'&gt;&lt;label onclick='replace(\&quot;$i\&quot;)'&gt;&amp;nbsp;&amp;nbsp;$i&amp;nbsp;&amp;nbsp; &lt;/label&gt;&lt;/td&gt;\n&quot;;
}
$output2 .=&quot;&lt;tr&gt;&lt;/table&gt;&lt;/div&gt;\n&quot;;
$output2 .=&quot;\n&lt;hr&gt;&quot;; //decoration :)))
$result .=$output2 ;
$result .=$output ;
$result .=&quot;&lt;script type='text/javascript'&gt;
function replace(u)// function change the visibility of div elements // sorry for the compatible...
{for (var i = 1; i &lt; $divcount; i++)
	{
		obj = document.getElementById(i);
		obj2 = document.getElementById('lab'+i);
   	if(i!=u)
   	{
   		obj.style.display='none';
   		obj2.style.backgroundColor='#CC9999';
   		}
   	else
   	{
   		obj.style.display='block';
   		obj2.style.backgroundColor='#ffffff';
   	}

}}
&lt;/script&gt;&quot;;}
return $result;
}
?&gt;&lt;/pre&gt;</div>
            </div>
                              </div>
          <div id="commentFormWrapper">
            <div id="commentFormHeader"><strong>Post a Comment</strong></div>
            <div id="commentFormElements">
            <form id="commentForm" method="post" action="/comments/post">
              <div id="commentText" style="font-style: italic; color:#f00">All comments are moderated. Support questions are ignored, use the <a href="/forums/">forums</a> instead.</div>
              <div id="commentFormAuthor">Author: <input id="commentFormAuthorText" type="text" name="author" size="40" value="anonymous" style="color: grey" onFocus="clearDefaultandCSS(this)"></div>
              <div id="commentFormEmail">Email: <input id="commentFormEmailText" type="text" name="email" size="30" value="your@email.com" style="color: grey" onFocus="clearDefaultandCSS(this)"> <span style="font-style: italic">(not shown)</span></div>
              
              <div id="commentFormChallenge">What is 13 plus 9? <input id="commentFormChallengeText" type="text" name="challenge" size="30" value="" style="color: grey"> <span style="font-style: italic">(Are you human?)</span></div>
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="81d37cc65fc3ad1c838a24bc68749300">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docs/en/language.function.html.table.tpl">
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
    <p>This page generated in 0.02529 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
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

