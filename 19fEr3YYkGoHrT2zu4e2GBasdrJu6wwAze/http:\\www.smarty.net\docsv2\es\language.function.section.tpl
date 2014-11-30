http://www.smarty.net/docsv2/es/language.function.section.tpl
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 07:49:32 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 11166
Connection: close
Content-Type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>section,sectionelse | Smarty</title>
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
<tr><th colspan="3" align="center">section,sectionelse</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="language.function.php.tpl">Prev</a> </td>
<th width="60%" align="center">Chapter 7. Funciones Integradas</th>
<td width="20%" align="right"> <a accesskey="n" href="language.function.strip.tpl">Next</a>
</td>
</tr>
</table>
<hr>
</div>
<div class="sect1" title="section,sectionelse">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="language.function.section"></a>section,sectionelse</h2></div></div></div>
<div class="informaltable"><table border="1">
<colgroup>
<col align="center">
<col align="center">
<col align="center">
<col align="center">
<col>
</colgroup>
<thead><tr>
<th align="center">Nombre del Atributo</th>
<th align="center">Tipo</th>
<th align="center">Requerido</th>
<th align="center">Default</th>
<th>Descripción</th>
</tr></thead>
<tbody>
<tr>
<td align="center">name</td>
<td align="center">string</td>
<td align="center">Si</td>
<td align="center"><span class="emphasis"><em>n/a</em></span></td>
<td>El nombre de la section</td>
</tr>
<tr>
<td align="center">loop</td>
<td align="center">mixed</td>
<td align="center">Si</td>
<td align="center"><span class="emphasis"><em>n/a</em></span></td>
<td>El nombre de la variable para determinar el número de iteracciones</td>
</tr>
<tr>
<td align="center">start</td>
<td align="center">integer</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>0</em></span></td>
<td> La posición del índice de la section donde va a comenzar.  
                         Si el valor es negativo, la posición del inicio se calculara
                         a partir del final de la matriz. Por ejemplo, si hubieran 7 valores 
                         en la matriz y comienza por -2, el índice inicial es 5.
                         Valores inválidos (valores fuera del tamaño de la matriz) son
                         automáticamente truncados para el valor valido mas próximo.
						                  </td>
</tr>
<tr>
<td align="center">step</td>
<td align="center">integer</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>1</em></span></td>
<td>El valor del step que sera usado para el loop de la matriz. 
       Por ejemplo, step=2 realizara el loop con los índices 0,2,4, etc.
       Si step es negativo, este avanzara en la matriz de atras para adelante.
						</td>
</tr>
<tr>
<td align="center">max</td>
<td align="center">integer</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>n/a</em></span></td>
<td>Defíne el número máximo de ciclos(loops) para la section.</td>
</tr>
<tr>
<td align="center">show</td>
<td align="center">boolean</td>
<td align="center">No</td>
<td align="center"><span class="emphasis"><em>true</em></span></td>
<td>Determina cuando mostrar o no esta sección</td>
</tr>
</tbody>
</table></div>
<p>
           Las section del template son usada para realizar un ciclo(loop) de 
           un <span class="bold"><strong>arreglo de datos</strong></span>. 
           (al agiual que un <a class="link" href="language.function.foreach.tpl" title="{foreach},{foreachelse}">{foreach}</a>).
           Todas las etiquetas <span class="emphasis"><em>section</em></span> 
           deben tener su par <span class="emphasis"><em>/section</em></span>.  Los parámetros 
           requeridos son <span class="emphasis"><em>name</em></span> y <span class="emphasis"><em>loop</em></span>.
           El nombre de la section puede ser el que usted quiera, formado por 
           letras, números y subrayados. Las sections pueden ser anidadas, y los 
           nombres de la section anidadas deben ser diferentes unos de otros. 
           Las variables del loop (normalmente una matriz de valores) determina 
           el número de veces del loop de la section. Cuando estuviera mostrando 
           una variable dentro de una section, el nombre de la section debe estar 
           al lado de la variable dentro de corchetes []. 
           <span class="emphasis"><em>sectionelse</em></span> es ejecutado cuando no hubiera valores 
           para la variable del loop(ciclo).
			</p>
<div class="example">
<a name="id3087055"></a><p class="title"><b>Example 7.17. section</b></p>
<div class="example-contents">
<pre class="programlisting">

&lt;?php

$data = array(1000,1001,1002);
$smarty-&gt;assign('custid',$data);

?&gt;

</pre>
<pre class="programlisting">

{* this example will print out all the values of the $custid array *}
{section name=customer loop=$custid}
  id: {$custid[customer]}&lt;br /&gt;
{/section}
&lt;hr /&gt;
{*  print out all the values of the $custid array reversed *}
{section name=foo loop=$custid step=-1}
  {$custid[foo]}&lt;br /&gt;
{/section}

  </pre>
<p>
   The above example will output:
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
<p>
  Otro par de ejemplos sin un arreglo asignado.
  </p>
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
  Esta es la salida del ejemplo de arriba:
</p>
<pre class="screen">
  
10 12 14 16 18
&lt;hr /&gt;
20 18 16 14 12 10

  </pre>
</div>
</div>
<br class="example-break"><div class="example">
<a name="id3087129"></a><p class="title"><b>Example 7.18. loop(ciclo) de la variable section</b></p>
<div class="example-contents">
<pre class="programlisting">

&lt;?php

$id = array(1001,1002,1003);
$smarty-&gt;assign('custid',$id);

$fullnames = array('John Smith','Jack Jones','Jane Munson');
$smarty-&gt;assign('name',$fullnames);

$addr = array('253 N 45th', '417 Mulberry ln', '5605 apple st');
$smarty-&gt;assign('address',$addr);

?&gt;

</pre>
<pre class="programlisting">

{* la variable del loop solo determina el número de veces del ciclo.
   Usted puede accesar a cualquier variable del template dentro de la section.
   Este ejemplo asume que $custid, $name y $address son todas matrizes
   conteniendo el mismo número de valores *}
{section name=customer loop=$custid}
	id: {$custid[customer]}&amp;lt;br&amp;gt;
	name: {$name[customer]}&amp;lt;br&amp;gt;
	address: {$address[customer]}&amp;lt;br&amp;gt;
	&amp;lt;p&amp;gt;
{/section}

</pre>
<p>
   La salida del ajemplo de arriba:
  </p>
<pre class="screen">

&lt;p&gt;
  id: 1000&lt;br /&gt;
  name: John Smith&lt;br /&gt;
  address: 253 N 45th
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
<a name="id3087168"></a><p class="title"><b>Example 7.19. Nombres de section</b></p>
<div class="example-contents"><pre class="programlisting">

{*
   El nombre de la section puede ser el que usted quiera,
   y es usado para referenciar los datos dentro de una section 
*}
{section name=anything loop=$custid}
&lt;p&gt;
  id: {$custid[anything]}&lt;br /&gt;
  name: {$name[anything]}&lt;br /&gt;
  address: {$address[anything]}
&lt;/p&gt;
{/section}

  </pre></div>
</div>
<br class="example-break"><div class="example">
<a name="id3087203"></a><p class="title"><b>Example 7.20. sections anidadas</b></p>
<div class="example-contents">
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
<pre class="programlisting">

{* Las sections pueden ser anidados tan profundamente como usted quiera.
   Con las sections anidadas, usted puede accesar a estructuras complejas,
   como una matriz multi-dimensional. En este ejemplo, $contact_type[customer] 
   es una matriz de tipos de contacto para el cliente actual. *}
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
   la salida del ejemplo de arriba:
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
<a name="id3087266"></a><p class="title"><b>Example 7.21. sections y matrices asociativas</b></p>
<div class="example-contents">
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
<pre class="programlisting">

{*
   Este es un ejemplo que muestra los datos de una matriz asociativa 
   dentro de una section 
*}
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
   Esta es la salida del ejemplo de arriba:
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
<p>Ejemplo usando una base de datos(eg usando Pear o Adodb)</p>
<pre class="programlisting">
  
&lt;?php

$sql = 'select id, name, home, cell, email from contacts';
$smarty-&gt;assign('contacts',$db-&gt;getAll($sql) );

?&gt;

</pre>
<pre class="programlisting">

{*
   salida de la base de datos, resultado en una tabla
*}
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
{/section}
&lt;/table&gt;

</pre>
</div>
</div>
<br class="example-break"><div class="example">
<a name="id3087394"></a><p class="title"><b>Example 7.22. {sectionelse}</b></p>
<div class="example-contents"><pre class="programlisting">

{* sectionelse se ejecutara si no hubieran valores en $custid *}
{section name=customer loop=$custid}
  id: {$custid[customer]}&lt;br /&gt;
{sectionelse}
  there are no values in $custid.
{/section}

  </pre></div>
</div>
<br class="example-break"><p>
  Las sections también tiene sus propias variables que manipulan las
  propiedades de section. Estas son indicadas asi: 
  <a class="link" href="language.variables.smarty.tpl#language.variables.smarty.loops" title="{$smarty.section}, {$smarty.foreach}">{$smarty.section.sectionname.varname}</a>
		</p>
<div class="note" title="Note" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Note</h3>
<p>
     NOTA: a partir de Smarty 1.5.0, la sintaxis de las variables de las
     propiedades de section ha sido cambiadas de {%sectionname.varname%} a
     {$smarty.section.sectionname.varname}. La sintaxis antigua es aun 
     soportada, pero usted puede ver la referencia de la sintaxis nueva 
     en los ejemplos del manual.
		 </p>
</div>
<div class="sect2" title="index">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.index"></a>index</h3></div></div></div>
<p>
   index es usado para mostrar el índice actual del cliclo(loop), comenzando 
   en cero (o comienza con el atributo dado), e incrementando por uno (o por 
   un atributo de paso dado).
			</p>
<div class="note" title="Nota Tecnica" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Nota Tecnica</h3>
<p>
    Si las propiedades de paso y comienzo del section son modificadas,
    entonces estas funcionan igual a las propiedades de 
    <a class="link" href="language.function.section.tpl#section.property.iteration" title="iteration">iteration</a> de la 
    section, exepto que comienzan en 0 en vez de 1.
				</p>
</div>
<div class="example">
<a name="id3087495"></a><p class="title"><b>Example 7.23. {section} propiedades del index</b></p>
<div class="example-contents">
<pre class="programlisting">

{* FYI, $custid[customer.index] y $custid[customer] are identical in meaning *}

{section name=customer loop=$custid}
  {$smarty.section.customer.index} id: {$custid[customer]}&lt;br /&gt;
{/section}

  </pre>
<p>
   salida del ejemplo de arriba:
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
<div class="sect2" title="index_prev">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.index.prev"></a>index_prev</h3></div></div></div>
<p>
   El index_prev es usado para mostrar el índice anterior del loop(ciclo).
   del primer loop(ciclo) esto es definido como -1.
			</p>
</div>
<div class="sect2" title="index_next">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.index.next"></a>index_next</h3></div></div></div>
<p>
         El index_next es usado para mostrar el próximo indice del loop. 
         del último loop, esto es uno mas que el índice actual( respetando 
         la definición del atributo step que se a dado.)
			</p>
<div class="example">
<a name="id3087566"></a><p class="title"><b>Example 7.24. {section} propiedades del index_next y index_prev</b></p>
<div class="example-contents">
<pre class="programlisting">

&lt;?php

$data = array(1001,1002,1003,1004,1005);
$smarty-&gt;assign('custid',$data);

?&gt;

</pre>
<pre class="programlisting">

{* FYI, $custid[cus.index] and $custid[cus] are identical in meaning *}

&lt;table&gt;
  &lt;tr&gt;
    &lt;th&gt;index&lt;/th&gt;&lt;th&gt;id&lt;/th&gt;
    &lt;th&gt;index_prev&lt;/th&gt;&lt;th&gt;prev_id&lt;/th&gt;
    &lt;th&gt;index_next&lt;/th&gt;&lt;th&gt;next_id&lt;/th&gt;
  &lt;/tr&gt;
{section name=cus loop=$custid}
  &lt;tr&gt;
    &lt;td&gt;{$smarty.section.cus.index}&lt;/td&gt;&lt;td&gt;{$custid[cus]}&lt;/td&gt;
    &lt;td&gt;{$smarty.section.cus.index_prev}&lt;/td&gt;&lt;td&gt;{$custid[cus.index_prev]}&lt;/td&gt;
    &lt;td&gt;{$smarty.section.cus.index_next}&lt;/td&gt;&lt;td&gt;{$custid[cus.index_next]}&lt;/td&gt;
  &lt;/tr&gt;
{/section}
&lt;/table&gt;

  </pre>
<p>
  la salida del ejemplo de arriba esta contenido en la siguiente tabla:
  </p>
<pre class="screen">

index  id    index_prev prev_id index_next next_id
0      1001  -1                 1          1002
1      1002  0          1001    2          1003
2      1003  1          1002    3          1004
3      1004  2          1003    4          1005
4      1005  3          1004    5

   </pre>
</div>
</div>
<br class="example-break">
</div>
<div class="sect2" title="iteration">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.iteration"></a>iteration</h3></div></div></div>
<p>
       iteration es usado para mostrar la iteración actual del loop(ciclo).
			</p>
<div class="note" title="Note" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Note</h3>
<p>
     Esto no es afectado por las propiedades del section start, step y max,
     distinto de las propriedades del  <a class="link" href="language.function.section.tpl#section.property.index" title="index">index</a>. 
     Iteration también comineza con 1 en vez de 0 como index. 
     <a class="link" href="language.function.section.tpl#section.property.rownum" title="rownum">rownum</a> es un alias de iteration, 
     estas funcionan de manera identica.
			 </p>
</div>
<div class="example">
<a name="id3087671"></a><p class="title"><b>Example 7.25. {section} propiedades de iteration</b></p>
<div class="example-contents">
<pre class="programlisting">

&lt;?php

// array of 3000 to 3015
$id = range(3000,3015);
$smarty-&gt;assign('custid',$id);

?&gt;

</pre>
<pre class="programlisting">

{section name=cu loop=$custid start=5 step=2}
  iteration={$smarty.section.cu.iteration}
  index={$smarty.section.cu.index}
  id={$custid[cu]}&lt;br /&gt;
{/section}

  </pre>
<p>
   salida del ejemplo de arriba:
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
   Este ejemplo utiliza la propiedad iteration para salida a una tabla 
   bloqueando el encabezado para cada 5 renglones
   (utilice <a class="link" href="language.function.if.tpl" title="if,elseif,else">{if}</a> con el operador mod).
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
<div class="sect2" title="first">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.first"></a>first</h3></div></div></div>
<p>
   first es definido como true se la 
   <a class="link" href="language.function.section.tpl#section.property.iteration" title="iteration">iteración</a> 
   actual de la section es la primera.
			</p>
</div>
<div class="sect2" title="last">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.last"></a>last</h3></div></div></div>
<p>
   last es definido como true si la 
   <a class="link" href="language.function.section.tpl#section.property.iteration" title="iteration">iteración</a> 
   actual del section es la ultima.
			</p>
<div class="example">
<a name="id3087796"></a><p class="title"><b>Example 7.26. {section} propiedades first y last</b></p>
<div class="example-contents">
<p>
   En este ciclo de ejemplo el arreglo $customer, en la salida es bloqueado 
   el encabezado en la primera iteracion y en la ultima la salida es bloqueda 
   para el pie de pagina.
   (Utilice la propiedad section <a class="link" href="language.function.section.tpl#section.property.total" title="total">total</a>)
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
<div class="sect2" title="rownum">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.rownum"></a>rownum</h3></div></div></div>
<p>
   rownum es usado para mostrar la interación actual del loop(ciclo),
   comenzando con 1. Es un alias para 
   <a class="link" href="language.function.section.tpl#section.property.iteration" title="iteration">iteration</a>, estas 
   funcionan de modo identico.
			</p>
</div>
<div class="sect2" title="loop">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.loop"></a>loop</h3></div></div></div>
<p>
   loop es usado para mostrar el ultimo número del índice del
   loop(ciclo) de esta section. Esto puede ser usado dentro o fuera del section.
			</p>
<div class="example">
<a name="id3087881"></a><p class="title"><b>Example 7.27. {section} propiedades de index</b></p>
<div class="example-contents">
<pre class="programlisting">

{section name=customer loop=$custid}
  {$smarty.section.customer.index} id: {$custid[customer]}&lt;br /&gt;
{/section}

There were {$smarty.section.customer.loop} customers shown above.

  </pre>
<p>
   La salida del ejemplo de arriba:
  </p>
<pre class="screen">

0 id: 1000&lt;br /&gt;
1 id: 1001&lt;br /&gt;
2 id: 1002&lt;br /&gt;

There were 3 customers shown above.

   </pre>
</div>
</div>
<br class="example-break">
</div>
<div class="sect2" title="show">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.show"></a>show</h3></div></div></div>
<p>
        <span class="emphasis"><em>show</em></span>Es usado como parámetro para section. 
        <span class="emphasis"><em>show</em></span> Es un valor booleano, true o false.  
        Si es false, la section no será mostrada. Si existiera un 
        sectionelse presente, este será alternativamente mostrado.
			</p>
<div class="example">
<a name="id3087941"></a><p class="title"><b>Example 7.28. section atributos de show</b></p>
<div class="example-contents">
<pre class="programlisting">

 {* 
    $show_customer_info debe ser pasado de la aplicacion PHP,
    para regular cuando mostrar o no esta section shows
 *}
{section name=customer loop=$custid show=$show_customer_info}
  {$smarty.section.customer.rownum} id: {$custid[customer]}&lt;br /&gt;
{/section}

{if $smarty.section.customer.show}
  the section was shown.
{else}
  the section was not shown.
{/if}

  </pre>
<p>
   La salida del ejemplo de arriba:
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
<div class="sect2" title="total">
<div class="titlepage"><div><div><h3 class="title">
<a name="section.property.total"></a>total</h3></div></div></div>
<p>
   total es usado para mostrar el número de iteraciones que está
   section tendra. Este puede ser usado dentro o fuera del section.
			</p>
<div class="example">
<a name="id3087997"></a><p class="title"><b>Example 7.29. {section} propiedades de total</b></p>
<div class="example-contents">
<pre class="programlisting">

{section name=customer loop=$custid step=2}
  {$smarty.section.customer.index} id: {$custid[customer]}&lt;br /&gt;
{/section}

    There were {$smarty.section.customer.total} customers shown above.

  </pre>
<p>
   The above example will output:
  </p>
<pre class="screen">

0 id: 1000&lt;br /&gt;
2 id: 1002&lt;br /&gt;
4 id: 1004&lt;br /&gt;

There were 3 customers shown above.

   </pre>
</div>
</div>
<br class="example-break"><p>
   Ver también <a class="link" href="language.function.foreach.tpl" title="{foreach},{foreachelse}">{foreach}</a>
   y <a class="link" href="language.variables.smarty.tpl#language.variables.smarty.loops" title="{$smarty.section}, {$smarty.foreach}">$smarty.section</a>.
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
              
              <div id="commentFormChallenge">What is 14 plus 16? <input id="commentFormChallengeText" type="text" name="challenge" size="30" value="" style="color: grey"> <span style="font-style: italic">(Are you human?)</span></div>
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="1d591ba795f59bdf547c1cbfffbd9fbc">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docsv2/es/language.function.section.tpl">
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
    <p>This page generated in 0.02667 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
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

