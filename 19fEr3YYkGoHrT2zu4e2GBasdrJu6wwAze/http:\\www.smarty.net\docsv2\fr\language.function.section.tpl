http://www.smarty.net/docsv2/fr/language.function.section.tpl
HTTP/1.1 200 OK
Date: Thu, 24 Jul 2014 14:31:06 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 11771
Connection: close
Content-Type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{section},{sectionelse} | Smarty</title>
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
<tr><th colspan="3" align="center">{section},{sectionelse}</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="language.function.php.tpl">Prev</a> </td>
<th width="60%" align="center">Chapter 7. Fonctions natives</th>
<td width="20%" align="right"> <a accesskey="n" href="language.function.strip.tpl">Next</a>
</td>
</tr>
</table>
<hr>
</div>
<div class="sect1" title="{section},{sectionelse}">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="language.function.section"></a>{section},{sectionelse}</h2></div></div></div>
<p>
  Une <code class="varname">{section}</code>
  sert à boucler dans des <span class="bold"><strong>tableaux de données</strong></span>,
  contrairement à <a class="link" href="language.function.foreach.tpl" title="{foreach},{foreachelse}"><code class="varname">{foreach}</code></a>
  qui est utilisé pour boucler dans un
   <span class="bold"><strong>simple tableau associatif</strong></span>.
  Chaque balise <code class="varname">{section}</code> doit aller de paire avec une
  balise <code class="varname">{/section}</code> fermante.
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
<th align="center">Nom attribut</th>
<th align="center">Type</th>
<th align="center">Requis</th>
<th align="center">Défaut</th>
<th>Description</th>
</tr></thead>
<tbody>
<tr>
<td align="center">name</td>
<td align="center">chaîne de caractère</td>
<td align="center">Oui</td>
<td align="center"><span class="emphasis"><em>n/a</em></span></td>
<td>Le nom de la section</td>
</tr>
<tr>
<td align="center">loop</td>
<td align="center">mixed</td>
<td align="center">Oui</td>
<td align="center"><span class="emphasis"><em>n/a</em></span></td>
<td>Valeur qui détermine le nombre de fois que la boucle sera exécutée</td>
</tr>
<tr>
<td align="center">start</td>
<td align="center">entier</td>
<td align="center">Non</td>
<td align="center"><span class="emphasis"><em>0</em></span></td>
<td>
      La position de l'index ou la section commencera son
      parcours. Si la valeur donnée est négative, la position de
      départ est calculée depuis la fin du tableau. Par exemple,
      s'il existe 7 valeurs dans le tableau à parcourir et que start
      est à -2, l'index de départ sera 5. Les valeurs incorrectes
      (en dehors de la portée du tableau) sont automatiquements
      tronquées à la valeur correcte la plus proche
     </td>
</tr>
<tr>
<td align="center">step</td>
<td align="center">entier</td>
<td align="center">Non</td>
<td align="center"><span class="emphasis"><em>1</em></span></td>
<td>La valeur du pas qui sera utilisé pour parcourir le
      tableau.Par exemple, step=2 parcourera les indices
      0,2,4, etc. Si step est négatif, le tableau sera parcouru en sens
      inverse</td>
</tr>
<tr>
<td align="center">max</td>
<td align="center">entier</td>
<td align="center">Non</td>
<td align="center"><span class="emphasis"><em>n/a</em></span></td>
<td>Définit le nombre maximum de fois que le tableau sera
     parcouru</td>
</tr>
<tr>
<td align="center">show</td>
<td align="center">booléen</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em><code class="constant">TRUE</code></em></span></td>
<td>Détermine s'il est nécessaire d'afficher la
     section ou non</td>
</tr>
</tbody>
</table></div>
<div class="itemizedlist"><ul class="itemizedlist" type="disc">
<li class="listitem"><p>
   Les paramètres requis sont <em class="parameter"><code>name</code></em> et <em class="parameter"><code>loop</code></em>.
   </p></li>
<li class="listitem"><p>
    Le <em class="parameter"><code>name</code></em> de la <code class="varname">{section}</code> est, selon votre choix, 
    composé de lettres, chiffres et underscores, comme pour les
    <a class="ulink" href="http://php.net/language.variables" target="_top">variables PHP</a>.
    </p></li>
<li class="listitem"><p>
    Les sections peuvent être imbriquées mais leurs noms doivent être uniques.
   </p></li>
<li class="listitem"><p>
   L'attribut <em class="parameter"><code>loop</code></em>, habituellement un tableau de valeurs,
   détermine le nombre de fois que
   <code class="varname">{section}</code> doit boucler.
   </p></li>
<li class="listitem"><p>
     Lors de l'affichage d'une variable dans une <code class="varname">{section}</code>, le nom de la
   <code class="varname">{section}</code> doit être fournis après le nom de la variable entre crochets [].
   </p></li>
<li class="listitem"><p>
   <code class="varname">{sectionelse}</code> est exécuté lorsqu'aucune valeur n'est trouvée dans la variable à
   parcourir.
   </p></li>
<li class="listitem"><p>
  <code class="varname">{section}</code> a également ces propres variables qui gérent les propriétés
  de la <code class="varname">{section}</code>.
  Ces propriétés sont accessibles comme ceci : <a class="link" href="language.variables.smarty.tpl#language.variables.smarty.loops" title="{$smarty.section}, {$smarty.foreach}">
  <em class="parameter"><code>{$smarty.section.name.property}</code></em></a>
  où <span class="quote">“<span class="quote">name</span>”</span> est l'attribut <em class="parameter"><code>name</code></em>.
  </p></li>
<li class="listitem"><p>
  Les propriétés de <code class="varname">{section}</code> sont
  <a class="link" href="language.function.section.tpl#section.property.index" title=".index"><em class="parameter"><code>index</code></em></a>,
  <a class="link" href="language.function.section.tpl#section.property.index.prev" title=".index_prev"><em class="parameter"><code>index_prev</code></em></a>,
  <a class="link" href="language.function.section.tpl#section.property.index.next" title=".index_next"><em class="parameter"><code>index_next</code></em></a>,
  <a class="link" href="language.function.section.tpl#section.property.iteration" title=".iteration"><em class="parameter"><code>iteration</code></em></a>,
  <a class="link" href="language.function.section.tpl#section.property.first" title=".first"><em class="parameter"><code>first</code></em></a>,
  <a class="link" href="language.function.section.tpl#section.property.last" title=".last"><em class="parameter"><code>last</code></em></a>,
  <a class="link" href="language.function.section.tpl#section.property.rownum" title=".rownum"><em class="parameter"><code>rownum</code></em></a>,
  <a class="link" href="language.function.section.tpl#section.property.loop" title=".loop"><em class="parameter"><code>loop</code></em></a>,
  <a class="link" href="language.function.section.tpl#section.property.show" title=".show"><em class="parameter"><code>show</code></em></a>,
  <a class="link" href="language.function.section.tpl#section.property.total" title=".total"><em class="parameter"><code>total</code></em></a>.
  </p></li>
</ul></div>
<div class="example">
<a name="id2958122"></a><p class="title"><b>Example 7.30. Boucler dans un simple tableau avec {section}</b></p>
<div class="example-contents">
<p>
<a class="link" href="api.assign.tpl" title="assign()"><code class="varname">assign()</code></a> un tableau à Smarty
</p>
<pre class="programlisting">

&lt;?php
$data = array(1000,1001,1002);
$smarty-&gt;assign('custid',$data);
?&gt;

</pre>
<p>Le template qui affiche le tableau</p>
<pre class="programlisting">

{* Cet exemple affichera toutes les valeurs du tableau $custid *}
{section name=customer loop=$custid}
  id: {$custid[customer]}&lt;br /&gt;
{/section}
&lt;hr /&gt;
{* Affiche toutes les valeurs du tableau $custid, en ordre inverse *}
{section name=foo loop=$custid step=-1}
  {$custid[foo]}&lt;br /&gt;
{/section}

  </pre>
<p>
   L'exemple ci-dessus affichera :
  </p>
<pre class="screen">

id: 1000&lt;br /&gt;
id: 1001&lt;br /&gt;
id: 1002&lt;br /&gt;
&lt;hr /&gt;
id: 1002&lt;br /&gt;
id: 1001&lt;br /&gt;
id: 1000&lt;br /&gt;

  </pre>
</div>
</div>
<br class="example-break"><div class="example">
<a name="id2958181"></a><p class="title"><b>Example 7.31. {section} sans un tableau assigné</b></p>
<div class="example-contents">
<pre class="programlisting">

{section name=foo start=10 loop=20 step=2}
  {$smarty.section.foo.index}
{/section}
&lt;hr /&gt;
{section name=bar loop=21 max=6 step=-2}
  {$smarty.section.bar.index}
{/section}

</pre>
<p>
  L'exemple ci-dessus affichera :
</p>
<pre class="screen">
  
10 12 14 16 18
&lt;hr /&gt;
20 18 16 14 12 10

  </pre>
</div>
</div>
<br class="example-break"><div class="example">
<a name="id2958215"></a><p class="title"><b>Example 7.32. Nommage d'une {section}</b></p>
<div class="example-contents">
<p>
   Le <em class="parameter"><code>name</code></em> de la <code class="varname">{section}</code> peut être ce que vous
   voulez, voir les <a class="ulink" href="http://php.net/language.variables" target="_top">variables PHP</a>.
   Il sera utilisé pour référencer les données de la <code class="varname">{section}</code>.
  </p>
<pre class="programlisting">

{section name=anything loop=$myArray}
  {$myArray[anything].foo}
  {$name[anything]}
  {$address[anything].bar}
{/section}

  </pre>
</div>
</div>
<br class="example-break"><div class="example">
<a name="id2958253"></a><p class="title"><b>Example 7.33. Boucler dans un tableau associatif avec {section}</b></p>
<div class="example-contents">
<p>
   Voici un exemple d'affichage d'un tableau associatif de données avec
   <code class="varname">{section}</code>. Ce qui suit est le script PHP assignant
   le tableau <em class="parameter"><code>$contacts</code></em> à Smarty.
  </p>
<pre class="programlisting">
  
&lt;?php
$data = array(
          array('name' =&gt; 'John Smith', 'home' =&gt; '555-555-5555',
                'cell' =&gt; '666-555-5555', 'email' =&gt; 'john@myexample.com'),
          array('name' =&gt; 'Jack Jones', 'home' =&gt; '777-555-5555',
                'cell' =&gt; '888-555-5555', 'email' =&gt; 'jack@myexample.com'),
          array('name' =&gt; 'Jane Munson', 'home' =&gt; '000-555-5555',
                'cell' =&gt; '123456', 'email' =&gt; 'jane@myexample.com')
        );
$smarty-&gt;assign('contacts',$data);
?&gt;

  </pre>
<p>Le template pour afficher <em class="parameter"><code>$contacts</code></em></p>
<pre class="programlisting">

{section name=customer loop=$contacts}
&lt;p&gt;
  name: {$contacts[customer].name}&lt;br /&gt;
  home: {$contacts[customer].home}&lt;br /&gt;
  cell: {$contacts[customer].cell}&lt;br /&gt;
  e-mail: {$contacts[customer].email}
&lt;/p&gt;
{/section}

  </pre>
<p>
   L'exemple ci-dessus affichera :
  </p>
<pre class="screen">

&lt;p&gt;
  name: John Smith&lt;br /&gt;
  home: 555-555-5555&lt;br /&gt;
  cell: 666-555-5555&lt;br /&gt;
  e-mail: john@myexample.com
&lt;/p&gt;
&lt;p&gt;
  name: Jack Jones&lt;br /&gt;
  home phone: 777-555-5555&lt;br /&gt;
  cell phone: 888-555-5555&lt;br /&gt;
  e-mail: jack@myexample.com
&lt;/p&gt;
&lt;p&gt;
  name: Jane Munson&lt;br /&gt;
  home phone: 000-555-5555&lt;br /&gt;
  cell phone: 123456&lt;br /&gt;
  e-mail: jane@myexample.com
&lt;/p&gt;

  </pre>
</div>
</div>
<br class="example-break"><div class="example">
<a name="id2958338"></a><p class="title"><b>Example 7.34. {section} démontrant l'utilisation de la variable <code class="varname">loop</code></b></p>
<div class="example-contents">
<p>Cet exemple suppose que <em class="parameter"><code>$custid</code></em>, <em class="parameter"><code>$name</code></em>
  et <em class="parameter"><code>$address</code></em> sont tous des tableaux contenant le même
  nombre de valeurs. Tout d'abord, le script PHP qui assigne les tableaux à Smarty.</p>
<pre class="programlisting">

&lt;?php

$id = array(1001,1002,1003);
$smarty-&gt;assign('custid',$id);

$fullnames = array('John Smith','Jack Jones','Jane Munson');
$smarty-&gt;assign('name',$fullnames);

$addr = array('253 Abbey road', '417 Mulberry ln', '5605 apple st');
$smarty-&gt;assign('address',$addr);

?&gt;

</pre>
<p>La variable <em class="parameter"><code>loop</code></em> détermine uniquement le nombre
 de fois qu'il faut boucler.
 Vous pouvez accéder à n'importe quelle variable du template dans la
 <code class="varname">{section}</code></p>
<pre class="programlisting">

{section name=customer loop=$custid}
&lt;p&gt;
  id: {$custid[customer]}&lt;br /&gt;
  name: {$name[customer]}&lt;br /&gt;
  address: {$address[customer]}
&lt;/p&gt;
{/section}

  </pre>
<p>
   L'exemple ci-dessus affichera :
  </p>
<pre class="screen">

&lt;p&gt;
  id: 1000&lt;br /&gt;
  name: John Smith&lt;br /&gt;
  address: 253 Abbey road
&lt;/p&gt;
&lt;p&gt;
  id: 1001&lt;br /&gt;
  name: Jack Jones&lt;br /&gt;
  address: 417 Mulberry ln
&lt;/p&gt;
&lt;p&gt;
  id: 1002&lt;br /&gt;
  name: Jane Munson&lt;br /&gt;
  address: 5605 apple st
&lt;/p&gt;

  </pre>
</div>
</div>
<br class="example-break"><div class="example">
<a name="id2958441"></a><p class="title"><b>Example 7.35. {section} imbriquée</b></p>
<div class="example-contents">
<p>
   Les sections peuvent être imbriquées autant de fois que vous le voulez.
   Avec les sections imbriquées, vous pouvez accéder aux structures de données
   complexes, comme les tableaux multi-dimentionnels. Voici un script PHP qui assigne les
   tableaux.
  </p>
<pre class="programlisting">

&lt;?php

$id = array(1001,1002,1003);
$smarty-&gt;assign('custid',$id);

$fullnames = array('John Smith','Jack Jones','Jane Munson');
$smarty-&gt;assign('name',$fullnames);

$addr = array('253 N 45th', '417 Mulberry ln', '5605 apple st');
$smarty-&gt;assign('address',$addr);

$types = array(
           array( 'home phone', 'cell phone', 'e-mail'),
           array( 'home phone', 'web'),
           array( 'cell phone')
         );
$smarty-&gt;assign('contact_type', $types);

$info = array(
           array('555-555-5555', '666-555-5555', 'john@myexample.com'),
           array( '123-456-4', 'www.example.com'),
           array( '0457878')
        );
$smarty-&gt;assign('contact_info', $info);

?&gt;
  
</pre>
<p>Dans ce template, <span class="emphasis"><em>$contact_type[customer]</em></span> est un tableau de
 types de contacts.</p>
<pre class="programlisting">

{section name=customer loop=$custid}
&lt;hr&gt;
  id: {$custid[customer]}&lt;br /&gt;
  name: {$name[customer]}&lt;br /&gt;
  address: {$address[customer]}&lt;br /&gt;
  {section name=contact loop=$contact_type[customer]}
    {$contact_type[customer][contact]}: {$contact_info[customer][contact]}&lt;br /&gt;
  {/section}
{/section}

  </pre>
<p>
   L'exemple ci-dessus affichera :
  </p>
<pre class="screen">

&lt;hr&gt;
  id: 1000&lt;br /&gt;
  name: John Smith&lt;br /&gt;
  address: 253 N 45th&lt;br /&gt;
    home phone: 555-555-5555&lt;br /&gt;
    cell phone: 666-555-5555&lt;br /&gt;
    e-mail: john@myexample.com&lt;br /&gt;
&lt;hr&gt;
  id: 1001&lt;br /&gt;
  name: Jack Jones&lt;br /&gt;
  address: 417 Mulberry ln&lt;br /&gt;
    home phone: 123-456-4&lt;br /&gt;
    web: www.example.com&lt;br /&gt;
&lt;hr&gt;
  id: 1002&lt;br /&gt;
  name: Jane Munson&lt;br /&gt;
  address: 5605 apple st&lt;br /&gt;
    cell phone: 0457878&lt;br /&gt;

  </pre>
</div>
</div>
<br class="example-break"><div class="example">
<a name="id2958533"></a><p class="title"><b>Example 7.36. Exemple avec une base de données et {sectionelse}</b></p>
<div class="example-contents">
<p>Les résultats d'une recherche dans une base de données
   (e.g. ADODB ou PEAR) sont assignés à Smarty</p>
<pre class="programlisting">
  
&lt;?php
$sql = 'select id, name, home, cell, email from contacts '
       ."where name like '$foo%' ";
$smarty-&gt;assign('contacts', $db-&gt;getAll($sql));
?&gt;

</pre>
<p>Le template pour afficher le résultat de la base de données dans un tableau HTML</p>
<pre class="programlisting">

&lt;table&gt;
&lt;tr&gt;&lt;th&gt;&amp;nbsp;&lt;/th&gt;&lt;th&gt;Name&gt;&lt;/th&gt;&lt;th&gt;Home&lt;/th&gt;&lt;th&gt;Cell&lt;/th&gt;&lt;th&gt;Email&lt;/th&gt;&lt;/tr&gt;
{section name=co loop=$contacts}
  &lt;tr&gt;
    &lt;td&gt;&lt;a href="view.php?id={$contacts[co].id}"&gt;view&lt;a&gt;&lt;/td&gt;
    &lt;td&gt;{$contacts[co].name}&lt;/td&gt;
    &lt;td&gt;{$contacts[co].home}&lt;/td&gt;
    &lt;td&gt;{$contacts[co].cell}&lt;/td&gt;
    &lt;td&gt;{$contacts[co].email}&lt;/td&gt;
  &lt;tr&gt;
{sectionelse}
  &lt;tr&gt;&lt;td colspan="5"&gt;Aucun élément n'a été trouvé&lt;/td&gt;&lt;/tr&gt;
{/section}
&lt;/table&gt;

</pre>
</div>
</div>
<br class="example-break"><div class="sect2" title=".index">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.index"></a>.index</h3></div></div></div>
<p>
   <em class="parameter"><code>index</code></em> contient l'index courant du tableau, en commençant par zéro ou par
   <em class="parameter"><code>start</code></em> s'il est fourni. Il s'incrémente d'un en un ou de
   <em class="parameter"><code>step</code></em> s'il est fourni.
  </p>
<div class="note" title="Note technique" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Note technique</h3>
<p>
    Si les propriétés <em class="parameter"><code>step</code></em> et <em class="parameter"><code>start</code></em>
    ne sont pas modifiés, alors le fonctionnement est le même que celui de la propriété
    <a class="link" href="language.function.section.tpl#section.property.iteration" title=".iteration"><em class="parameter"><code>iteration</code></em></a>,
    mise à part qu'il commence à zéro au lieu de un.
   </p>
</div>
<div class="example">
<a name="id2958675"></a><p class="title"><b>Example 7.37. Exemple avec la propriété <code class="varname">index</code></b></p>
<div class="example-contents">
<p>
</p>
<div class="note" title="FYI" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">FYI</h3>
<p><code class="literal">$custid[customer.index]</code> et
<code class="literal">$custid[customer]</code> sont identiques.</p>
</div>
<p>
</p>
<pre class="programlisting">

{section name=customer loop=$custid}
  {$smarty.section.customer.index} id: {$custid[customer]}&lt;br /&gt;
{/section}

  </pre>
<p>
   L'exemple ci-dessus affichera :
  </p>
<pre class="screen">

0 id: 1000&lt;br /&gt;
1 id: 1001&lt;br /&gt;
2 id: 1002&lt;br /&gt;

   </pre>
</div>
</div>
<br class="example-break">
</div>
<div class="sect2" title=".index_prev">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.index.prev"></a>.index_prev</h3></div></div></div>
<p>
   <em class="parameter"><code>index_prev</code></em> est l'index de la boucle précédente.
   Lors de la première boucle, il vaut -1.
  </p>
</div>
<div class="sect2" title=".index_next">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.index.next"></a>.index_next</h3></div></div></div>
<p>
   <em class="parameter"><code>index_next</code></em> est l'index de la prochaine boucle.
   Lors de la prochaine boucle, il vaudra un de moins que l'index courant, suivant
   la configuration de l'attribut <em class="parameter"><code>step</code></em>, s'il est fourni.
  </p>
<div class="example">
<a name="id2958780"></a><p class="title"><b>Example 7.38. Exemple avec les propriétés <code class="varname">index</code>, <code class="varname">index_next</code>
 et <code class="varname">index_prev</code></b></p>
<div class="example-contents">
<pre class="programlisting">

&lt;?php
$data = array(1001,1002,1003,1004,1005);
$smarty-&gt;assign('rows',$data);
?&gt;

</pre>
<p>Le template pour afficher le tableau ci-dessus dans un tableau HTML</p>
<pre class="programlisting">

{* $rows[row.index] et $rows[row] sont identiques *}
&lt;table&gt;
  &lt;tr&gt;
    &lt;th&gt;index&lt;/th&gt;&lt;th&gt;id&lt;/th&gt;
    &lt;th&gt;index_prev&lt;/th&gt;&lt;th&gt;prev_id&lt;/th&gt;
    &lt;th&gt;index_next&lt;/th&gt;&lt;th&gt;next_id&lt;/th&gt;
  &lt;/tr&gt;
{section name=row loop=$rows}
  &lt;tr&gt;
    &lt;td&gt;{$smarty.section.row.index}&lt;/td&gt;&lt;td&gt;{$rows[row]}&lt;/td&gt;
    &lt;td&gt;{$smarty.section.row.index_prev}&lt;/td&gt;&lt;td&gt;{$rows[row.index_prev]}&lt;/td&gt;
    &lt;td&gt;{$smarty.section.row.index_next}&lt;/td&gt;&lt;td&gt;{$rows[row.index_next]}&lt;/td&gt;
  &lt;/tr&gt;
{/section}
&lt;/table&gt;

  </pre>
<p>
   L'exemple ci-dessus affichera un tableau HTML contenant :
  </p>
<pre class="screen">

index  id    index_prev prev_id index_next next_id
0      1001  -1	                1          1002
1      1002  0          1001    2          1003
2      1003  1          1002    3          1004
3      1004  2          1003    4          1005
4      1005  3          1004    5

   </pre>
</div>
</div>
<br class="example-break">
</div>
<div class="sect2" title=".iteration">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.iteration"></a>.iteration</h3></div></div></div>
<p>
   <em class="parameter"><code>iteration</code></em> contient l'itération courante de la boucle et commence à un.
  </p>
<div class="note" title="Note" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Note</h3>
<p>
    Ceci n'est pas affecté par les propriétés <code class="varname">{section}</code>
    <em class="parameter"><code>start</code></em>, <em class="parameter"><code>step</code></em> et
    <em class="parameter"><code>max</code></em> contrairement à la propriété
    <a class="link" href="language.function.section.tpl#section.property.index" title=".index"><em class="parameter"><code>index</code></em></a>.
    <em class="parameter"><code>iteration</code></em> commence également à un au lieu de zéro
    contrairement à <em class="parameter"><code>index</code></em>.
    <a class="link" href="language.function.section.tpl#section.property.rownum" title=".rownum"><em class="parameter"><code>rownum</code></em></a>
    est un alias de <em class="parameter"><code>iteration</code></em>,  ils sont identiques.
   </p>
</div>
<div class="example">
<a name="id2958948"></a><p class="title"><b>Example 7.39. Exemple avec la propriété <code class="varname">iteration</code></b></p>
<div class="example-contents">
<pre class="programlisting">

&lt;?php
// array of 3000 to 3015
$id = range(3000,3015);
$smarty-&gt;assign('arr',$id);
?&gt;

</pre>
<p>Le template pour afficher tous les autres éléments du tableau <code class="literal">$arr</code> comme
 <code class="literal">step=2</code></p>
<pre class="programlisting">

{section name=cu loop=$arr start=5 step=2}
  iteration={$smarty.section.cu.iteration}
  index={$smarty.section.cu.index}
  id={$custid[cu]}&lt;br /&gt;
{/section}

  </pre>
<p>
   L'exemple ci-dessus affichera :
  </p>
<pre class="screen">

iteration=1 index=5 id=3005&lt;br /&gt;
iteration=2 index=7 id=3007&lt;br /&gt;
iteration=3 index=9 id=3009&lt;br /&gt;
iteration=4 index=11 id=3011&lt;br /&gt;
iteration=5 index=13 id=3013&lt;br /&gt;
iteration=6 index=15 id=3015&lt;br /&gt;

   </pre>
<p>
   Un autre exemple d'utilisation de la propriété
   <em class="parameter"><code>iteration</code></em> est d'afficher un bloc d'en-tête d'un tableau toutes
   les 5 lignes.
   Utilisez la fonction <a class="link" href="language.function.if.tpl" title="{if},{elseif},{else}"><code class="varname">{if}</code></a>
   avec l'opérateur mod.
  </p>
<pre class="programlisting">

&lt;table&gt;
{section name=co loop=$contacts}
  {if $smarty.section.co.iteration % 5 == 1}
    &lt;tr&gt;&lt;th&gt;&amp;nbsp;&lt;/th&gt;&lt;th&gt;Name&gt;&lt;/th&gt;&lt;th&gt;Home&lt;/th&gt;&lt;th&gt;Cell&lt;/th&gt;&lt;th&gt;Email&lt;/th&gt;&lt;/tr&gt;
  {/if}
  &lt;tr&gt;
    &lt;td&gt;&lt;a href="view.php?id={$contacts[co].id}"&gt;view&lt;a&gt;&lt;/td&gt;
    &lt;td&gt;{$contacts[co].name}&lt;/td&gt;
    &lt;td&gt;{$contacts[co].home}&lt;/td&gt;
    &lt;td&gt;{$contacts[co].cell}&lt;/td&gt;
    &lt;td&gt;{$contacts[co].email}&lt;/td&gt;
  &lt;tr&gt;
{/section}
&lt;/table&gt;

  </pre>
</div>
</div>
<br class="example-break">
</div>
<div class="sect2" title=".first">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.first"></a>.first</h3></div></div></div>
<p>
   <em class="parameter"><code>first</code></em> est défini à <code class="constant">TRUE</code> si l'itération courante de
   <code class="varname">{section}</code> est l'initiale.
  </p>
</div>
<div class="sect2" title=".last">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.last"></a>.last</h3></div></div></div>
<p>
   <em class="parameter"><code>last</code></em> est défini à <code class="constant">TRUE</code>
   si l'itération courante de la section est la dernière.
  </p>
<div class="example">
<a name="id2959110"></a><p class="title"><b>Example 7.40. Exemple avec les propriétés  <code class="varname">first</code> et <code class="varname">last</code></b></p>
<div class="example-contents">
<p>
    Cet exemple boucle sur le tableau <code class="varname">$customers</code>,
    affiche un bloc d'en-tête lors de la première itération et, lors de la dernière,
    affiche un bloc de pied de page. Utilise aussi la propriété
   <a class="link" href="language.function.section.tpl#section.property.total" title=".total"><em class="parameter"><code>total</code></em></a>.
   </p>
<pre class="programlisting">

{section name=customer loop=$customers}
  {if $smarty.section.customer.first}
    &lt;table&gt;
    &lt;tr&gt;&lt;th&gt;id&lt;/th&gt;&lt;th&gt;customer&lt;/th&gt;&lt;/tr&gt;
  {/if}

  &lt;tr&gt;
    &lt;td&gt;{$customers[customer].id}}&lt;/td&gt;
    &lt;td&gt;{$customers[customer].name}&lt;/td&gt;
  &lt;/tr&gt;

  {if $smarty.section.customer.last}
    &lt;tr&gt;&lt;td&gt;&lt;/td&gt;&lt;td&gt;{$smarty.section.customer.total} customers&lt;/td&gt;&lt;/tr&gt;
    &lt;/table&gt;
  {/if}
{/section}

  </pre>
</div>
</div>
<br class="example-break">
</div>
<div class="sect2" title=".rownum">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.rownum"></a>.rownum</h3></div></div></div>
<p>
   <em class="parameter"><code>rownum</code></em> contient l'itération courante de la boucle,
   commençant à un. C'est un alias de <a class="link" href="language.function.section.tpl#section.property.iteration" title=".iteration"><em class="parameter"><code>iteration</code></em></a>,
   ils fonctionnent exactement de la même façon.
  </p>
</div>
<div class="sect2" title=".loop">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.loop"></a>.loop</h3></div></div></div>
<p>
   <em class="parameter"><code>loop</code></em> contient le dernier index de la boucle de la section.
   Il peut être utilisé dans ou après la <code class="varname">{section}</code>.
     </p>
<div class="example">
<a name="id2959228"></a><p class="title"><b>Example 7.41. Exemple avec la propriété <code class="varname">loop</code></b></p>
<div class="example-contents">
<pre class="programlisting">

{section name=customer loop=$custid}
  {$smarty.section.customer.index} id: {$custid[customer]}&lt;br /&gt;
{/section}
There are {$smarty.section.customer.loop} customers shown above.

  </pre>
<p>
   L'exemple ci-dessus affichera :
  </p>
<pre class="screen">

0 id: 1000&lt;br /&gt;
1 id: 1001&lt;br /&gt;
2 id: 1002&lt;br /&gt;
There are 3 customers shown above.

   </pre>
</div>
</div>
<br class="example-break">
</div>
<div class="sect2" title=".show">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.show"></a>.show</h3></div></div></div>
<p>
   <em class="parameter"><code>show</code></em> est utilisé en tant que paramètre à la section et est une valeur booléenne.
   S'il vaut <code class="constant">FALSE</code>, la section ne sera pas affichée. S'il y a un
   <code class="varname">{sectionelse}</code>, il sera affiché de façon alternative.
  </p>
<div class="example">
<a name="id2959295"></a><p class="title"><b>Example 7.42. Exemple avec la propriété <code class="varname">show</code></b></p>
<div class="example-contents">
<p>Une valeur booléenne <code class="varname">$show_customer_info</code> est passée
    depuis l'application PHP, pour réguler l'affichage ou non de cette section.</p>
<pre class="programlisting">

{section name=customer loop=$customers show=$show_customer_info}
  {$smarty.section.customer.rownum} id: {$customers[customer]}&lt;br /&gt;
{/section}

{if $smarty.section.customer.show}
  the section was shown.
{else}
  the section was not shown.
{/if}

  </pre>
<p>
   L'exemple ci-dessus affichera :
  </p>
<pre class="screen">

1 id: 1000&lt;br /&gt;
2 id: 1001&lt;br /&gt;
3 id: 1002&lt;br /&gt;

the section was shown.

   </pre>
</div>
</div>
<br class="example-break">
</div>
<div class="sect2" title=".total">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.total"></a>.total</h3></div></div></div>
<p>
   <em class="parameter"><code>total</code></em> contient le nombre d'itérations que cette
   <code class="varname">{section}</code> bouclera. Il peut être utilisé dans ou après une
   <code class="varname">{section}</code>.
  </p>
<div class="example">
<a name="id2959372"></a><p class="title"><b>Example 7.43. Exemple avec la propriété <code class="varname">total</code></b></p>
<div class="example-contents"><pre class="programlisting">

{section name=customer loop=$custid step=2}
  {$smarty.section.customer.index} id: {$custid[customer]}&lt;br /&gt;
{/section}
   There are {$smarty.section.customer.total} customers shown above.

  </pre></div>
</div>
<br class="example-break"><p>
   Voir aussi
   <a class="link" href="language.function.foreach.tpl" title="{foreach},{foreachelse}"><code class="varname">{foreach}</code></a> et
   <a class="link" href="language.variables.smarty.tpl#language.variables.smarty.loops" title="{$smarty.section}, {$smarty.foreach}"><em class="parameter"><code>$smarty.section</code></em></a>.
  </p>
</div>
</div>
<div class="navfooter">
<hr>
<table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="language.function.php.tpl">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="language.builtin.functions.tpl">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="language.function.strip.tpl">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">{php} </td>
<td width="20%" align="center"><a accesskey="h" href="index.tpl">Home</a></td>
<td width="40%" align="right" valign="top"> {strip}</td>
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
              
              <div id="commentFormChallenge">What is 11 plus 18? <input id="commentFormChallengeText" type="text" name="challenge" size="30" value="" style="color: grey"> <span style="font-style: italic">(Are you human?)</span></div>
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="fd72608a022ca6b9e4abb6804d1ccc0a">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docsv2/fr/language.function.section.tpl">
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
    <p>This page generated in 0.01159 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
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

