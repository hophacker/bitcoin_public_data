http://www.smarty.net/docs/en/preface.tpl
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 13:45:22 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 9883
Connection: close
Content-Type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Preface | Smarty</title>
    <meta name="description" content="Preface">
    <meta name="keywords" content="preface">
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
<tr><th colspan="3" align="center">Preface</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="index.tpl">Prev</a> </td>
<th width="60%" align="center"> </th>
<td width="20%" align="right"> <a accesskey="n" href="getting.started.tpl">Next</a>
</td>
</tr>
</table>
<hr>
</div>
<div class="preface" title="Preface">
<div class="titlepage"><div><div><h2 class="title">
<a name="preface"></a>Preface</h2></div></div></div>
<p>
   <span class="bold"><strong>The Philosophy</strong></span>
  </p>
<p>
    The Smarty design was largely driven by these goals:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" type="disc">
<li class="listitem"><p>clean separation of presentation from application code</p></li>
<li class="listitem"><p>PHP backend, Smarty template frontend</p></li>
<li class="listitem"><p>compliment PHP, not replace it</p></li>
<li class="listitem"><p>fast development/deployment for programmers and designers</p></li>
<li class="listitem"><p>quick and easy to maintain</p></li>
<li class="listitem"><p>syntax easy to understand, no PHP knowledge necessary</p></li>
<li class="listitem"><p>flexibility for custom development</p></li>
<li class="listitem"><p>security: insulation from PHP</p></li>
<li class="listitem"><p>free, open source</p></li>
</ul></div>
<p>
   <span class="bold"><strong>What is Smarty?</strong></span>
  </p>
<p>
    Smarty is a template engine for PHP, facilitating the separation of presentation (HTML/CSS) from application logic. This implies that <span class="emphasis"><em>PHP code is application logic</em></span>, and is separated from the presentation.
  </p>
<p>
    <span class="bold"><strong>Two camps of thought</strong></span>
  </p>
<p>
    When it comes to templating in PHP, there are basically two camps of thought. The first camp exclaims that "PHP is a template engine". This approach simply mixes PHP code with HTML. Although this approach is fastest from a pure script-execution point of view, many would argue that the PHP syntax is messy and complicated when mixed with tagged markup such as HTML.
  </p>
<p>
    The second camp exclaims that presentation should be void of all programming code, and instead use simple tags to indicate where application content is revealed. This approach is common with other template engines (even in other programming languages), and is also the approach that Smarty takes. The idea is to keep the templates focused squarely on presentation, void of application code, and with as little overhead as possible.
  </p>
<p>
   <span class="bold"><strong>Why is separating PHP from templates important?</strong></span>
  </p>
<p>
    Two major benefits:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" type="disc">
<li class="listitem"><p>
        SYNTAX: Templates typically consist of semantic markup such as HTML. PHP syntax works well for application code, but quickly degenerates when mixed with HTML. Smarty's simple {tag} syntax is designed specifically to express presentation. Smarty focuses your templates on presentation and less on "code". This lends to quicker template deployment and easier maintenance. Smarty syntax requires no working knowledge of PHP, and is intuitive for programmers and non-programmers alike.
      </p></li>
<li class="listitem"><p>
        INSULATION: When PHP is mixed with templates, there are no restrictions on what type of logic can be injected into a template. Smarty insulates the templates from PHP, creating a controlled separation of presentation from business logic. Smarty also has security features that can further enforce restrictions on templates.  
      </p></li>
</ul></div>
<p>
   <span class="bold"><strong>Web designers and PHP</strong></span>
  </p>
<p>
A common question: "Web designers have to learn a syntax anyways, why not PHP?" Of course web designers can learn PHP, and they may already be familiar with it. The issue isn't their ability to learn PHP, it is about the consequences of mixing PHP with HTML. If designers use PHP, it is too easy to add code into templates that doesn't belong there (you just handed them a swiss-army knife when they just needed a knife.) You can teach them the rules of application design, but this is probably something they don't really need to learn (now they are developers!) The PHP manual is also an overwhelming pile of information to sift through. It is like handing the owner of a car the factory assembly manual when all they need is the owners manual. Smarty gives web designers exactly the tools they need, and gives developers fine-grained control over those tools. The simplicity of the tag-based syntax is also a huge welcome for designers, it helps them streamline the organization and management of templates.
  </p>
<p>
   <span class="bold"><strong>Implementation is Important</strong></span>
  </p>
<p>
    Although Smarty gives you the tools to make a clean separation of presentation from application code, it also gives you plenty of room to bend those rules. A poor implementation (i.e. injecting PHP in templates) will cause more problems than the presentation separation was meant to resolve. The documentation does a good job of indicating what things to watch out for. Also see the Best Practices section of the Smarty website.
  </p>
<p>
   <span class="bold"><strong>How does it work?</strong></span>
  </p>
<p>
    Under the hood, Smarty "compiles" (basically copies and converts) the templates into PHP scripts. This happens once when each template is first invoked, and then the compiled versions are used from that point forward. Smarty takes care of this for you, so the template designer just edits the Smarty templates and never has to manage the compiled versions. This approach keeps the templates easy to maintain, and yet keeps execution times extremely fast since the compiled code is just PHP. And of course, all PHP scripts take advantage of PHP op-code caches such as APC.
  </p>
<p>
   <span class="bold"><strong>Template Inheritance</strong></span>
  </p>
<p>
    Template inheritance is new to Smarty 3, and it's one of many great new features. Before template inheritance, we managed our templates in pieces such as header and footer templates. This organization lends itself to many problems that require some hoop-jumping, such as managing content within the header/footer on a per-page basis. With template inheritance, instead of including other templates we maintain our templates as single pages. We can then manipulate blocks of content within by inheriting them. This makes templates intuitive, efficient and easy to manage. See the Template Inheritance section of th Smarty website for more info.
  </p>
<p>
   <span class="bold"><strong>Why not use XML/XSLT syntax?</strong></span>
  </p>
<p>
    There are a couple of good reasons. First, Smarty can be used for more than just XML/HTML based templates, such as generating emails, javascript, CSV, and PDF documents. Second, XML/XSLT syntax is even more verbose and fragile than PHP code! It is perfect for computers, but horrible for humans. Smarty is about being easy to read, understand and maintain.
  </p>
<p>
   <span class="bold"><strong>Template Security</strong></span>
  </p>
<p>
    Although Smarty insulates you from PHP, you still have the option to use it in certain ways if you wish. Template security forces the restriction of PHP (and select Smarty functions.) This is useful if you have third parties editing templates, and you don't want to unleash the full power of PHP or Smarty to them.
  </p>
<p>
   <span class="bold"><strong>Integration</strong></span>
  </p>
<p>
    Sometimes Smarty gets compared to Model-View-Controller (MVC) frameworks. Smarty is not an MVC, it is just the presentation layer, much like the View (V) part of an MVC. As a matter of fact, Smarty can easily be integrated as the view layer of an MVC. Many of the more popular ones have integration instructions for Smarty, or you may find some help here in the forums and documentation.
  </p>
<p>
   <span class="bold"><strong>Other Template Engines</strong></span>
  </p>
<p>
    Smarty is not the only engine following the <span class="emphasis"><em>"Separate Programming Code from Presentation"</em></span> philosophy.
    For instance, Python has template engines built around the same principles such as Django Templates and CheetahTemplate. <span class="emphasis"><em>Note: Languages such as Python do not mix with HTML natively, which give them the advantage of proper programming code separation from the outset. There are libraries available to mix Python with HTML, but they are typically avoided.</em></span>
  </p>
<p>
   <span class="bold"><strong>What Smarty is Not</strong></span>
  </p>
<p>
    Smarty is not an application development framework. Smarty is not an MVC. Smarty is not an alternative to Zend Framework, CodeIgniter, PHPCake, or any of the other application development frameworks for PHP.
  </p>
<p>
    Smarty is a template engine, and works as the (V)iew component of your application. Smarty can easily be coupled to any of the engines listed above as the view component. No different than any other software, Smarty has a learning curve. Smarty does not guarantee good application design or proper separation of presentation, this still needs to be addressed by a competent developer and web designer.
  </p>
<p>
   <span class="bold"><strong>Is Smarty Right for Me?</strong></span>
  </p>
<p>
    Smarty is not meant to be a tool for every job. The important thing is to identify if Smarty fits your needs. There are some important questions to ask yourself:
  </p>
<p>
     TEMPLATE SYNTAX. Are you content with PHP tags mixed with HTML? Are your web designers comfortable with PHP? Would your web designers prefer a tag-based syntax designed for presentation? Some experience working with both Smarty and PHP helps answer these questions.
  </p>
<p>
     THE BUSINESS CASE: Is there a requirement to insulate the templates from PHP? Do you have untrusted parties editing templates that you do not wish to unleash the power of PHP to? Do you need to programmatically control what is and is not available within the templates? Smarty supplies these capabilities by design.
  </p>
<p>
     FEATURE SET: Does Smarty's features such as caching, template inheritance and plugin architecture save development cycles writing code that would be needed otherwise? Does the codebase or framework you plan on using have the features you need for the presentation component?
  </p>
<p>
     Templating in PHP is a hot topic, and opinions widely vary. It is important that you understand Smarty, understand your own requirements, and make an informed decision for yourself. You are welcome to ask specific questions in the forums or the IRC channel.
  </p>
<p>
  See also the section about "Use Cases and Work Flow" on the Smarty website.
  </p>
<p>
   <span class="bold"><strong>Sites using Smarty</strong></span>
  </p>
<p>
    There are tens of thousands of unique visitors on the Smarty website daily, mostly developers reading documentation. Many well-known PHP projects make use of Smarty such as XOOPS CMS, CMS Made Simple , Tiki CMS/Groupware and X-Cart to name a few.
  </p>
<p>
   <span class="bold"><strong>Summary</strong></span>
  </p>
<p>
    Whether you are using Smarty for a small website or massive enterprise solution, it can accommodate your needs. There are numerous features that make Smarty a great choice:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" type="disc">
<li class="listitem"><p>separation of PHP from HTML/CSS just makes sense</p></li>
<li class="listitem"><p>readability for organization and management</p></li>
<li class="listitem"><p>security for 3rd party template access</p></li>
<li class="listitem"><p>feature completeness, and easily extendable to your own needs</p></li>
<li class="listitem"><p>massive user base, Smarty is here to stay</p></li>
<li class="listitem"><p>LGPL license for commercial use</p></li>
<li class="listitem"><p>100% free to use, open source project</p></li>
</ul></div>
</div>
<div class="navfooter">
<hr>
<table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="index.tpl">Prev</a> </td>
<td width="20%" align="center"> </td>
<td width="40%" align="right"> <a accesskey="n" href="getting.started.tpl">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Smarty 3 Manual </td>
<td width="20%" align="center"><a accesskey="h" href="index.tpl">Home</a></td>
<td width="40%" align="right" valign="top"> Part I. Getting Started</td>
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
              
              <div id="commentFormChallenge">What is 1 plus 6? <input id="commentFormChallengeText" type="text" name="challenge" size="30" value="" style="color: grey"> <span style="font-style: italic">(Are you human?)</span></div>
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="b44446906d3e8ced841edd837af4ddf6">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docs/en/preface.tpl">
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
    <p>This page generated in 0.02375 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
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

