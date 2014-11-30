http://www.mobilefish.com/services/qrcode/qrcode.php
HTTP/1.1 200 OK
Server: cloudflare-nginx
Date: Wed, 23 Jul 2014 09:50:28 GMT
Content-Type: text/html; charset=UTF-8
Connection: close
Set-Cookie: __cfduid=db6237c055800c0f9eb3a85557a5de0701406109028478; expires=Mon, 23-Dec-2019 23:50:00 GMT; path=/; domain=.mobilefish.com; HttpOnly
X-Powered-By: PHP/5.3.25
Vary: Accept-Encoding,User-Agent
CF-RAY: 14e6f953f2450874-IAD
Content-Encoding: gzip

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Mobilefish.com - QR code generator</title>
<meta name="keywords" content="QR, code, quick, response, mobile code, mobile, phone, scanner, border, padding, block size" />
<meta name="description" content="QR code generator" />
<script type="text/javascript" language="JavaScript">
//<![CDATA[
function jsxShowQRCode() {
	jsxClearResult();
	xajax_showProgressBar('css-x-ProgressBar');
	xajax.$("css-x-ProgressBar").style.marginBottom="15px";
	xajax.$('css-XajaxButton').disabled=true;
	xajax.$('css-XajaxButton').value="Processing...";
	xajax_processForm(xajax.getFormValues("cssxInputForm"));

	document.getElementById("cssxQRcodeOuter").innerHTML = "";
	return false;
}

function jsxCheckNumberOfCharactersNew() {
	var text1 = document.getElementById('cssxFirstName').value;
	var text2 = document.getElementById('cssxLastName').value;
	var text3 = document.getElementById('cssxTitle').value;
	var text4 = document.getElementById('cssxOrganization').value;
	var text5 = document.getElementById('cssxMobile').value;
	var text6 = document.getElementById('cssxPhone').value;
	var text7 = document.getElementById('cssxFax').value;
	var text8 = document.getElementById('cssxEmail').value;
	var text9 = document.getElementById('cssxURL').value;
		
	var text10 = document.getElementById('cssxStreet').value;
	var text11 = document.getElementById('cssxCity').value;
	var text12 = document.getElementById('cssxState').value;
	var text13 = document.getElementById('cssxZip').value;
	var text14 = document.getElementById('cssxCountry').value;

	text = trimString(text1+text2+text3+text4+text5+text6+text7+text8+text9+text10+text11+text12+text13+text14);
  	var strSize = text.length;	
	var box = document.getElementById('titleBox');
	box.value = strSize;
}

function jsxClearInput() {
	jsxClearResult();
	type = document.getElementById("cssxContentType").value;
	if(type == "text") {
		document.getElementById("cssxText").value = "";
		document.getElementById("titleBox").value = "0";
	} else if(type == "url") {
		document.getElementById("cssxUrl").value = "";
		document.getElementById("titleBox").value = "0";
	} else if(type == "phone") {
		document.getElementById("cssxPhone").value = "";
		document.getElementById("titleBox").value = "0";
	} else if(type == "sms") {
		document.getElementById("cssxPhone").value = "";
		document.getElementById("cssxSMSMessage").value = "";
		document.getElementById("titleBox").value = "0";
		document.getElementById("titleBox2").value = "0";
	} else if(type == "bitcoin") {
		document.getElementById("cssxBitCoinAddress").value = "";
		document.getElementById("cssxBitCoinLabel").value = "";
		document.getElementById("cssxBitCoinAmount").value = "";
		document.getElementById("cssxBitCoinMessage").value = "";
		document.getElementById("titleBox").value = "0";
		document.getElementById("titleBox2").value = "0";		
		document.getElementById("titleBox3").value = "0";	
		document.getElementById("titleBox4").value = "0";	
	} else if(type == "email") {
		document.getElementById("cssxEmail").value = "";
		document.getElementById("titleBox").value = "0";
	} else if(type == "geo") {
		document.getElementById("cssxLat").value = "";
		document.getElementById("cssxLon").value = "";
		document.getElementById("titleBox").value = "0";
		document.getElementById("titleBox2").value = "0";
	} else if(type == "vcard") {
		document.getElementById("cssxFirstName").value = "";
		document.getElementById("cssxLastName").value = "";
		document.getElementById("cssxTitle").value = "";
		document.getElementById("cssxOrganization").value = "";
		document.getElementById("cssxMobile").value = "";
		document.getElementById("cssxPhone").value = "";
		document.getElementById("cssxFax").value = "";
		document.getElementById("cssxEmail").value = "";
		document.getElementById("cssxURL").value = "";
		document.getElementById('cssxStreet').value = "";
		document.getElementById('cssxCity').value = "";
		document.getElementById('cssxState').value = "";
		document.getElementById('cssxZip').value = "";
		document.getElementById('cssxCountry').value = "";
		document.getElementById("titleBox").value = "0";	
	} else if(type == "wifi") {
		document.getElementById("cssxSSID").value = "";
		document.getElementById("cssxPassword").value = "";	
		document.getElementById("cssxNetwork").value = "wep";
		document.getElementById("titleBox").value = "0";
		document.getElementById("titleBox2").value = "0";		
	} else if(type == "vevent") {
		document.getElementById('cssxEventTitle').value = "";
		document.getElementById('cssxEventLocation').value = "";
		document.getElementById('cssxEventDescription').value = "";
		document.getElementById('cssxEventStartDate').value = "2014-07-23 10:47:42";		
		document.getElementById('cssxEventEndDate').value = "2014-07-23 11:47:42";		
		document.getElementById("titleBox").value = "0";
		document.getElementById("titleBox2").value = "0";		
		document.getElementById("titleBox3").value = "0";			
	}
}

function jsxClearResult() {
	document.getElementById("css-Message").innerHTML = "";
	document.getElementById("cssxQRcodeOuter").innerHTML = "";
	document.getElementById("cssxDownload").innerHTML = "";
	document.getElementById("cssxQRcodeOuter").innerHTML = "<i>No QR code<\/i>";
}
function jsxCancelRequest() {
	document.getElementById("css-x-ProgressBar").innerHTML = "";
	document.getElementById("css-x-ProgressBar").style.marginBottom="0px";
	xajax.$('css-XajaxButton').disabled=false;
	xajax.$('css-XajaxButton').value="Generate";
	xajax.$('cssxQRcodeOuter').value="";
	xajax_cancelRequest('');
	document.getElementById("cssxQRcodeOuter").innerHTML = "<i>No QR code<\/i>";
	document.getElementById("cssxDownload").innerHTML = "";
	return false;
}

function jsxDemo(){
	var type = document.getElementById("cssxContentType").value;
	var numChar = 0;
	var numChar2 = 0;
	var numChar3 = 0;
	var numChar4 = 0;
	var msg = "";
	var tmp1 = "";
	var tmp2 = "";
	var tmp3 = "";
	var tmp4 = "";
	var tmp5 = ""; 
	var tmp6 = "";
	var tmp7 = "";
	var tmp8 = "";
	var tmp9 = "";
	var tmp10 = "";
	var tmp11 = ""; 
	var tmp12 = "";	
	var tmp13 = ""; 
	var tmp14 = "";		
	if(type == "text") {
		msg = "Welcome to Mobilefish.com";
		document.getElementById("cssxText").value = msg;
		numChar = msg.length;
	} else if(type =="url") {
		msg = "http://www.mobilefish.com";
		document.getElementById("cssxUrl").value = msg;
		numChar = msg.length;
	} else if(type =="phone") {
		msg = "+44 (0)20 7930 4832";
		document.getElementById("cssxPhone").value = msg;
		numChar = msg.length;	
	} else if(type =="sms") {
		tmp1 = "+31610473393";
		tmp2 = "Happy Birthday";
		document.getElementById("cssxPhone").value = tmp1;
		document.getElementById("cssxSMSMessage").value = tmp2;
		numChar = tmp1.length;		
		numChar2 = tmp2.length;		
	} else if(type =="email") {
		msg = "contact@mobilefish.com";
		document.getElementById("cssxEmail").value = msg;
		numChar = msg.length;		
	} else if(type =="vcard") {
		tmp1 = "Larry";
		tmp2 = "Page";
		tmp3 = "CEO";
		tmp4 = "Google Inc.";
		tmp5 = "1600 Amphitheatre Parkway"; 
		tmp6 = "Mountain View";
		tmp7 = "California";
		tmp8 = "CA 94043";
		tmp9 = "United States";
		tmp10 = "+1 650-253-0009";
		tmp11 = "+1 650-253-0000";
		tmp12 = "+1 650-253-0001";
		tmp13 = "contact@google.com"; 
		tmp14 = "http://www.google.com";	

		msg = tmp1+tmp2+tmp3+tmp4+tmp5+tmp6+tmp7+tmp8+tmp9+tmp10+tmp11+tmp12+tmp13+tmp14;
		document.getElementById("cssxFirstName").value = tmp1;
		document.getElementById("cssxLastName").value = tmp2;
		document.getElementById("cssxTitle").value = tmp3;
		document.getElementById("cssxOrganization").value = tmp4;
		document.getElementById("cssxStreet").value = tmp5;
		document.getElementById("cssxCity").value = tmp6;
		document.getElementById("cssxState").value = tmp7;
		document.getElementById("cssxZip").value = tmp8;
		document.getElementById("cssxCountry").value = tmp9;
		document.getElementById("cssxMobile").value = tmp10;
		document.getElementById("cssxPhone").value = tmp11;
		document.getElementById("cssxFax").value = tmp12;
		document.getElementById("cssxEmail").value = tmp13;
		document.getElementById("cssxURL").value = tmp14;
		numChar = msg.length;		
	} else if(type =="geo") {
		tmp1 = "52.4518";
		tmp2 = "4.8119";
		document.getElementById("cssxLat").value = tmp1;
		document.getElementById("cssxLon").value = tmp2;
		numChar = tmp1.length;	
		numChar2 = tmp2.length;		
	} else if(type =="wifi") {
		tmp1= "NETGEAR";
		tmp2 = "password";
		document.getElementById("cssxSSID").value = tmp1;
		document.getElementById("cssxPassword").value = tmp2;	
		document.getElementById("cssxNetwork").value = "wpa";	
		numChar = tmp1.length;	
		numChar2 = tmp2.length;				
	} else if(type =="bitcoin") {
		tmp1 = "1Ac6ztfMgyWv869PAWEDwFNaAGK9hP8i3v";
		tmp2 = "John Smith";
		tmp3 = "1.34";
		tmp4 = "Beer payment";
		document.getElementById("cssxBitCoinAddress").value = tmp1;
		document.getElementById("cssxBitCoinLabel").value = tmp2;
		document.getElementById("cssxBitCoinAmount").value = tmp3;
		document.getElementById("cssxBitCoinMessage").value = tmp4;
		numChar = tmp1.length;		
		numChar2 = tmp2.length;	
		numChar3 = tmp3.length;	
		numChar4 = tmp4.length;	
	}else if(type =="vevent") {
		tmp1 = "Mobilefish.com Hackathon";
		tmp2 = "Dragons lair";
		tmp3 = "Hackathon for coding enthusiasts";
		tmp4 = "2014-07-24 09:47:42";	
		tmp5 = "2014-07-24 11:47:42";		
		document.getElementById('cssxEventTitle').value = tmp1;
		document.getElementById('cssxEventLocation').value = tmp2;
		document.getElementById('cssxEventDescription').value = tmp3;
		document.getElementById('cssxEventStartDate').value = tmp4;		
		document.getElementById('cssxEventEndDate').value = tmp5;			
		numChar = tmp1.length;		
		numChar2 = tmp2.length;	
		numChar3 = tmp3.length;			
	}
		
	if(document.getElementById("titleBox") != null)  document.getElementById("titleBox").value = numChar;	
	if(document.getElementById("titleBox2") != null) document.getElementById("titleBox2").value = numChar2;		
	if(document.getElementById("titleBox3") != null) document.getElementById("titleBox3").value = numChar3;	
	if(document.getElementById("titleBox4") != null) document.getElementById("titleBox4").value = numChar4;	
}

function gotoResult() {
	location.href="#qrcode_result";
}

function jsxSelectContentType(){
	jsxClearResult();
	contentType = document.cssxInputForm.cssxContentType.value;
	xajax_selectType(contentType);
	return false;
}

// This function name must always be created when using the color picker
function jsxColorPickerMethodAfter(idname,color) {
	
	if(idname == "cssxBackgroundColor") {
		if(color == null) {
			color=document.getElementById("cssxBackgroundColor").value;	
		} 	
		document.getElementById("cssxBackgroundColorPreview").style.background = color;
	}	
	if(idname == "cssxPixelColor") {
		if(color == null) {
			color=document.getElementById("cssxPixelColor").value;	
		} 	
		document.getElementById("cssxPixelColorPreview").style.background = color;
	}		
	if(idname == "cssxBorderColor") {
		if(color == null) {
			color=document.getElementById("cssxBorderColor").value;	
		} 	
		document.getElementById("cssxBorderColorPreview").style.background = color;
	}			
}

function jsxConvertPixels(){
	var pixelSize = trimString(document.getElementById("cssxPixelSize").value);	
	var unitOutput = document.getElementById("cssxUnitOutput");	
	var unit =document.getElementById("cssxUnit").value;	
	var decimalPlace = 5;
	if(pixelSize != "") {
		var pixelSizeNum = parseFloat(pixelSize);
		
		if(unit == "mm") {
			unitOutput.value = (pixelSizeNum * 0.2).toFixed(decimalPlace);
		} else if(unit == "cm") {
			unitOutput.value = (pixelSizeNum * 0.02).toFixed(decimalPlace);
		} else if(unit == "inch") {
			unitOutput.value = (pixelSizeNum * (0.2/25.4)).toFixed(decimalPlace);
		} else if(unit == "pt") {
			unitOutput.value = (pixelSizeNum * (14.4/25.4)).toFixed(decimalPlace);
		} else if(unit == "pc") {
			unitOutput.value = (pixelSizeNum * (14.4/304.8)).toFixed(decimalPlace);
		} 
	}
}



/***********************************************
* DHTML slideshow script- Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice must stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var photos=new Array();
var photoslink=new Array();
var which=0;

//define images. You can have as many as you want:
photos[0]="../../images/services/qrcode_example_1.png";
photos[1]="../../images/services/qrcode_example_2.png";
photos[2]="../../images/services/qrcode_example_3.png";
photos[3]="../../images/services/qrcode_example_4.png";
photos[4]="../../images/services/qrcode_example_5.png";
photos[5]="../../images/services/qrcode_example_6.png";
photos[6]="../../images/services/qrcode_example_7.png";
photos[7]="../../images/services/qrcode_example_8.png";
photos[8]="../../images/services/qrcode_example_9.png";
photos[9]="../../images/services/qrcode_example_10.png";
photos[10]="../../images/services/qrcode_example_11.png";
//Specify whether images should be linked or not (1=linked)
var linkornot=0;

//Set corresponding URLs for above images. Define ONLY if variable linkornot equals "1"
photoslink[0]="";
photoslink[1]="";
photoslink[2]="";
photoslink[3]="";
photoslink[4]="";
photoslink[5]="";
photoslink[6]="";
photoslink[7]="";
photoslink[8]="";
photoslink[9]="";
photoslink[10]="";

//do NOT edit pass this line

var preloadedimages=new Array();

for (i=0;i<photos.length;i++){
	preloadedimages[i]=new Image();
	preloadedimages[i].src=photos[i];
}


function applyeffect(){
	if (document.all && photoslider.filters){
		photoslider.filters.revealTrans.Transition=Math.floor(Math.random()*23);
		photoslider.filters.revealTrans.stop();
		photoslider.filters.revealTrans.apply();
	}
}


function playeffect(){
	if (document.all && photoslider.filters){
		photoslider.filters.revealTrans.play();
	}
}

function keeptrack(){
	window.status="Image "+(which+1)+" of "+photos.length;
}


function backward(){
	if (which>0){
		which--;
		applyeffect();
		document.images.photoslider.src=photos[which];
		playeffect();
		keeptrack();
	}
}

function forward(){
	if (which<photos.length-1){
		which++;
		applyeffect();
		document.images.photoslider.src=photos[which];
		playeffect();
		keeptrack();
	}
}

function transport(){
	window.location=photoslink[which];
}

//]]>		
</script>
<style type="text/css">
.cssxQRcodeInner {
	display: block;
}

.cssxContainer{
	float: right;
}

.cssxContainer div{
	width: 60px;
	height: 20px;
	border: 1px solid #ff0000;
	text-align: center;
}	
.cssxField{
	background-color: #000000;
	overflow:hidden;
}

.cssxGrey{
	background-color: #cccccc;
}
</style>
<script type="text/javascript" language="JavaScript" src="../../scripts/datetimepicker.js"></script>
<script src="../../scripts/colorpicker.js" type="text/javascript"></script>

<script type="text/javascript" charset="UTF-8">
/* <![CDATA[ */
try { if (undefined == xajax.config) xajax.config = {}; } catch (e) { xajax = {}; xajax.config = {}; };
xajax.config.requestURI = "../../php/qrcode/qrcode_xajax_server.php";
xajax.config.statusMessages = false;
xajax.config.waitCursor = true;
xajax.config.version = "xajax 0.5 rc1";
xajax.config.legacy = false;
xajax.config.defaultMode = "asynchronous";
xajax.config.defaultMethod = "POST";
/* ]]> */
</script>
<script type="text/javascript" src="../../scripts/xajax_js/xajax_core.js" charset="UTF-8"></script>
<script type="text/javascript" charset="UTF-8">
/* <![CDATA[ */
window.setTimeout(
 function() {
  var scriptExists = false;
  try { if (xajax.isLoaded) scriptExists = true; }
  catch (e) {}
  if (!scriptExists) {
   alert("Error: the xajax Javascript component could not be included. Perhaps the URL is incorrect?\nURL: ../../scripts/xajax_js/xajax_core.js");
  }
 }, 2000);
/* ]]> */
</script>

<script type='text/javascript' charset='UTF-8'>
/* <![CDATA[ */
xajax_processForm = function() { return xajax.request( { xjxfun: 'processForm' }, { parameters: arguments } ); };
xajax_cancelRequest = function() { return xajax.request( { xjxfun: 'cancelRequest' }, { parameters: arguments } ); };
xajax_selectType = function() { return xajax.request( { xjxfun: 'selectType' }, { parameters: arguments } ); };
/* ]]> */
</script>

<meta name="author" content="Robert Lie" />
<meta name="copyright" content="copyright 2002-2014 Mobilefish.com" />
<!--<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=2.0,user-scalable=yes" />-->
<!-- Nodig voor verificatie voor www.google.com/webmasters/sitemaps  -->
<meta name="verify-v1" content="1SrSUV2xKNbkaV1i8sx0TOMtUIG8NWqifvEO1u+4PNQ=" />
<meta name="robots" content="index,follow,noodp,noydir" />
<!-- Nodig voor icra.org -->
<link rel="meta" href="http://www.mobilefish.com/labels.rdf" type="application/rdf+xml" title="ICRA labels" />
<meta http-equiv="pics-Label" content='(pics-1.1 "http://www.icra.org/pics/vocabularyv03/" l gen true for "http://mobilefish.com" r (n 0 s 0 v 0 l 0 oa 0 ob 0 oc 0 od 0 oe 0 of 0 og 0 oh 0 c 1) gen true for "http://www.mobilefish.com" r (n 0 s 0 v 0 l 0 oa 0 ob 0 oc 0 od 0 oe 0 of 0 og 0 oh 0 c 1))' />
<meta name="geo.position" content="52.4518; 4.8119" />
<!-- start http://geourl.org -->
<meta name="ICBM" content="52.4518, 4.8119" />
<meta name="DC.title" content="Mobilefish.com" />
<!-- end http://geourl.org  -->
<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
<meta http-equiv="content-language" content="en" />
<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon" />
<!-- Firefox live bookmark -->
<link rel="alternate" type="application/rss+xml" title="Mobilefish.com RSS" href="rss.xml" />
<script type="text/javascript" language="JavaScript" src="../../scripts/switch.js"></script>
<script type="text/javascript" language="JavaScript" src="../../scripts/javascript.js"></script>

<link rel="stylesheet" type="text/css" href="../../styles/style_ie.css" />

<link rel="stylesheet" type="text/css" media="print" href="../../styles/print.css" />

<!--
<link rel="stylesheet" type="text/css" media="screen and (max-device-width:480px)" href="../../styles/iphone.css" />
<link rel="stylesheet" type="text/css" media="screen and (min-device-width:481px) and (max-device-width:1024px)" href="../../styles/ipad.css" />
<link rel="stylesheet" type="text/css" media="screen and (min-device-width:1024px)" href="../../styles/style_ie.css" />
-->

<script type="text/javascript" language="JavaScript" src="../../scripts/advertisement.js"></script>



</head>
<body background="../../images/bg.gif" class="css-BodyCenter">

<a name="top" id="top"></a>

<div id="container">

<div id="header">
	<div id="header-logo">
		<script type="text/javascript" language="JavaScript">
		//<![CDATA[
			display_ad_top_left();
		//]]>		
		</script>
		<noscript>
			<a href="http://www.mobilefish.com"><img src="../../images/mobilefish_logo.gif" alt="Mobilefish.com homepage" width="272" height="90" border="0" /></a>			
		</noscript>
	</div> 
	<div id="header-banner">
		<script type="text/javascript" language="JavaScript">
		//<![CDATA[
			document.write(display_ad_top_right());
		//]]>		
		</script>		
		<noscript>
			<iframe src="http://rcm.amazon.com/e/cm?t=mobilefishcom-20&amp;o=1&amp;p=48&amp;l=bn1&amp;mode=pc-hardware&amp;browse=&amp;=1&amp;fc1=&amp;lt1=&amp;lc1=&amp;bg1=&amp;f=ifr" marginwidth="0" marginheight="0" width="728" height="90" frameborder="0" style="border:none;" scrolling="no"></iframe>
		</noscript>	
	</div>
	
	<div id="toolbar">
		<div id="toolbar-main">
			<h2 class="css-Disability">Main navigation</h2>
			<ul>
				<li><a href="../../home/welcome/welcome.html"  onmouseout="defaultSetting()" onfocus="this.blur()" id="home">Home</a></li>
				<li><a href="../../contact/contact_mobilefish/contact_mobilefish.html"  onmouseout="defaultSetting()" onfocus="this.blur()" id="contact">Contact</a></li>
				<li><a href="../../emulators/j2me_wt/j2me_wt.html"  onmouseout="defaultSetting()" onfocus="this.blur()" id="emulators">Emulators</a></li>
				<li><a href="../../tutorials/3dsmax/3dsmax.html"  onmouseout="defaultSetting()" onfocus="this.blur()" id="tutorials">Tutorials</a></li>
				<li><a href="../../developer/android/android.html"  onmouseout="defaultSetting()" onfocus="this.blur()" id="developer">Developer</a></li>	
				<li><a href="../../services/htpasswd_generator/htpasswd_generator.php"  onmouseout="defaultSetting()" onfocus="this.blur()" id="services">Services</a></li>
				<li><a href="../../mobile/wallpapers/wallpapers.php"  onmouseout="defaultSetting()" onfocus="this.blur()" id="mobile">Mobile</a></li>
				<!--<li><a href="../../webshop/webshop/webshop.php"  onmouseout="defaultSetting()" onfocus="this.blur()" id="shop">Webshop</a></li>	-->	
				<li><a href="../../games/memory/memory.php"  onmouseout="defaultSetting()" onfocus="this.blur()" id="games">Games</a></li>				
				<li><a href="../../links/code_helpers/code_helpers.html"  onmouseout="defaultSetting()" onfocus="this.blur()" id="links">Links</a></li>
				<li><a href="../../login/login/login.php"  onmouseout="defaultSetting()" onfocus="this.blur()" id="login">Login</a></li>
				<li><a href="../../legal/copyright/copyright.html"  onmouseout="defaultSetting()" onfocus="this.blur()" id="legal">Legal</a></li>
				<li><a href="../../sitemap/sitemap/sitemap.html"  onmouseout="defaultSetting()" onfocus="this.blur()" id="sitemap">Site map</a></li>
			</ul>
		</div>
	</div>

	<div id="date">
		<script type="text/javascript" language="JavaScript">
		//<![CDATA[
			/* displayDate(); */
		//]]>		
		</script>
	</div>

</div>	



<!-- Begin main content -->
<div id="canvas">
	<div id="navigation">
	<div id="navigation-main">
	<h2 id="navigation-main-title">Services <span class="css-Disability">section navigation</span></h2>
		<ul>
						<li>
				<div class="navigation-main-adblock">	
					<script type="text/javascript" language="JavaScript">
					//<![CDATA[
						document.write(display_ad_topleft1());
					//]]>		
					</script>	
				</div>
			</li>
			<li>	
				<div class="navigation-main-adblock">	
					<script type="text/javascript" language="JavaScript">
					//<![CDATA[
						document.write(display_ad_topleft2());
					//]]>		
					</script>	
				</div>	
			</li>			
			<li><a href="../htpasswd_generator/htpasswd_generator.php" onfocus="this.blur()" >.htpasswd and .htaccess generator</a></li>	
			<li><a href="../3dbox/3dbox.php" onfocus="this.blur()" >3D product box generator</a></li>
			<li><a href="../pattern_marker_generator/pattern_marker_generator.php" onfocus="this.blur()" >Augmented reality pattern marker generator</a></li>
			<li><a href="../audio_image_info/audio_image_info.php" onfocus="this.blur()" >Audio, video, image or data file ID3 file information</a></li>
			<li><a href="../bank_identification_number/bank_identification_number.php" onfocus="this.blur()" >Bank identification number checker</a></li>
			<li><a href="../base64/base64.php" onfocus="this.blur()" >Base64 encoder and decoder</a></li>
			<li><a href="../battery_charge_time/battery_charge_time.php" onfocus="this.blur()" >Battery charge time calculator</a></li>
			<li><a href="../bban_iban/bban_iban.php" onfocus="this.blur()" >BBAN to IBAN converter</a></li>
			<li><a href="../bic_swift/bic_swift.php" onfocus="this.blur()" >BIC / SWIFT code finder for SEPA countries</a></li>	
			<li><a href="../big_number/big_number.php" onfocus="this.blur()" >Big number converter</a></li>	
			<li><a href="../big_number_equation/big_number_equation.php" onfocus="this.blur()" >Big number equation calculation</a></li>
			<li><a href="../business_card/business_card.php" onfocus="this.blur()" >Business card maker</a></li>	
			<li><a href="../calendar/calendar.php" onfocus="this.blur()" >Calendar</a></li>
			<li><a href="../character_dataset_test/character_dataset_test.php" onfocus="this.blur()" >Character dataset test</a></li>	
			<li><a href="../elfproef/elfproef.php" onfocus="this.blur()" >Check Dutch bank account number or citizen service number with Eleven test</a></li>
			<li><a href="../chinese_handwriting_recognition/chinese_handwriting_recognition.php" onfocus="this.blur()" >Chinese handwriting recognition</a></li>	
			<li><a href="../compound_interest_calculator/compound_interest_calculator.php" onfocus="this.blur()" >Compound interest calculator with graph</a></li>
			<li><a href="../dutch_bankaccount_iban_converter/dutch_bankaccount_iban_converter.php" onfocus="this.blur()" >Convert Dutch bank account numbers to IBAN numbers</a></li>						
			<li><a href="../domain_name_ip/domain_name_ip.php" onfocus="this.blur()" >Convert domain name to IP address, find IP address of a domain name</a></li>			
			<li><a href="../convert_ip/convert_ip.php" onfocus="this.blur()" >Convert IP adddress to different formats</a></li>
			<li><a href="../unicode_converter/unicode_converter.php" onfocus="this.blur()" >Convert Unicode characters to HTML code numbers and vice versa</a></li>	
			<li><a href="../unicode_escape_sequence_converter/unicode_escape_sequence_converter.php" onfocus="this.blur()" >Convert Unicode characters to Unicode escape sequences and vice versa</a></li>	
			<li><a href="../coordinate_converter/coordinate_converter.php" onfocus="this.blur()" >Coordinate converter and show map</a></li>
			<li><a href="../ssl_certificates/ssl_certificates.php" onfocus="this.blur()" >Create self-signed SSL certificates online</a></li>
			<li><a href="../csv2xml/csv2xml.php" onfocus="this.blur()" >CSV to XML converter</a></li>
			<li><a href="../cvs_pserver_password/cvs_pserver_password.php" onfocus="this.blur()" >CVS pserver password decoder and encoder</a></li>
			<li><a href="../decode_csr/decode_csr.php" onfocus="this.blur()" >Decode Certificate Signing Request (CSR)</a></li>
			<li><a href="../certificate_information/certificate_information.php" onfocus="this.blur()" >Decode SSL certificate</a></li>
			<li><a href="../vcard/vcard.php" onfocus="this.blur()" >Electronic business card vCard generator</a></li>	
			<li><a href="../en13402_pictogram/en13402_pictogram.php" onfocus="this.blur()" >European clothing standard EN 13402 pictogram generator</a></li>	
			<li><a href="../favicon/favicon.php" onfocus="this.blur()" >Favicon generator</a></li>
<!--			<li><a href="../flartoolkit/flartoolkit.php" onfocus="this.blur()" >FLARToolkit marker-based augmented reality</a></li> -->
			<li><a href="../dutch_iban_bic_converter/dutch_iban_bic_converter.php" onfocus="this.blur()" >Find the BIC numbers for Dutch IBAN numbers</a></li>
			<li><a href="../sound_effects/sound_effects.php" onfocus="this.blur()" >Free game sound effects</a></li>	
			<li><a href="../game_textures/game_textures.php" onfocus="this.blur()" >Free game textures</a></li>
			<li><a href="../exam/exam.php" onfocus="this.blur()" >Free online practice exams</a></li>
			<li><a href="../sepa_xml_validation/sepa_xml_validation.php" onfocus="this.blur()" >Free online SEPA XML valdation</a></li>	
			<li><a href="../bankaccount_bsn_numbers/bankaccount_bsn_numbers.php" onfocus="this.blur()" >Generate Dutch bank account numbers and Dutch citizen service numbers</a></li>
			<li><a href="../google_toolbar_button/google_toolbar_button.php" onfocus="this.blur()" >Google toolbar custom button code generator</a></li>	
			<li><a href="../googlemap/googlemap.php" onfocus="this.blur()" >Google maps (API v2) code generator</a></li>	
<!--			<li><a href="../googlemap_v3/googlemap_v3.php" onfocus="this.blur()" >Google maps (API v3) code generator</a></li>	-->
			<li><a href="../distance_calculator/distance_calculator.php" onfocus="this.blur()" >Google map distance calculator</a></li>	
			<li><a href="../hideemail/hideemail.php" onfocus="this.blur()" >Hide email address</a></li>
			<li><a href="../html_escape/html_escape.php" onfocus="this.blur()" >HTML escape and unescape tool</a></li>
			<li><a href="../hieroglyphs/hieroglyphs.php" onfocus="this.blur()" >Hieroglyphs generator</a></li>
			<li><a href="../iban/iban.php" onfocus="this.blur()" >IBAN checker</a></li>
			<li><a href="../icon/icon.php" onfocus="this.blur()" >Icon generator</a></li>
			<li><a href="../bra_size_calculator/bra_size_calculator.php" onfocus="this.blur()" >International bra size calculator</a></li>
			<li><a href="../code_executor/code_executor.php" onfocus="this.blur()" >Javascript and HTML<br /> code executor</a></li>
			<li><a href="../json_formatter/json_formatter.php" onfocus="this.blur()" >JSON formatter and validator</a></li>	
			<li><a href="../javascriptformatter/javascriptformatter.php" onfocus="this.blur()" >Javascript formatter</a></li>	
			<li><a href="../long_division/long_division.php" onfocus="this.blur()" >Long division generator</a></li>	
			<li><a href="../lipsum/lipsum.php" onfocus="this.blur()" >Lorem ipsum generator</a></li>
			<li><a href="../mac_address_lookup/mac_address_lookup.php" onfocus="this.blur()" >MAC address lookup or manufacturer lookup</a></li>	
			<li><a href="../markdown/markdown.php" onfocus="this.blur()" >Markdown to HTML converter</a></li>	
			<li><a href="../hash_generator/hash_generator.php" onfocus="this.blur()" >MD5 and SHA1 hash generator</a></li>	
			<li><a href="../mugshot/mugshot.php" onfocus="this.blur()" >Mugshot maker</a></li>
			<li><a href="../nominal_and_effective_interest_rate_converter/nominal_and_effective_interest_rate_converter.php" onfocus="this.blur()" >Nominal interest rate and effective interest rate converter</a></li>
			<li><a href="../interest_calculation_banks/interest_calculation_banks.php" onfocus="this.blur()" >Online calculation of the interest payment as banks do.</a></li>
			<li><a href="../credit_card_number_checker/credit_card_number_checker.php" onfocus="this.blur()" >Online credit card number checker</a></li>			
			<li><a href="../credit_card_number_generator/credit_card_number_generator.php" onfocus="this.blur()" >Online credit card number generator</a></li>
			<li><a href="../clieop/clieop.php" onfocus="this.blur()" >Online CSV to ClieOp file generator</a></li>
			<li><a href="../cursor/cursor.php" onfocus="this.blur()" >Online cursor maker</a></li>
			<li><a href="../eval_gzinflate_base64/eval_gzinflate_base64.php" onfocus="this.blur()" >Online eval gzinflate base64_decode decoder</a></li>
			<li><a href="../guid/guid.php" onfocus="this.blur()" >Online GUID generator</a></li>
			<li><a href="../hex_editor/hex_editor.php" onfocus="this.blur()" >Online hex editor</a></li>
			<li><a href="../image_map/image_map.php" onfocus="this.blur()" >Online HTML image map creator</a></li>	
			<li><a href="../imageeditor/imageeditor.php" onfocus="this.blur()" >Online image or photo editor</a></li>
			
<!--		<li><a href="../image2ascii/image2ascii.php" onfocus="this.blur()" >Online image to ASCII converter</a></li>  -->
			<li><a href="../image2svg/image2svg.php" onfocus="this.blur()" >Online image to SVG converter</a></li>
			
			<li><a href="../ishihara_test/ishihara_test.php" onfocus="this.blur()" >Online Ishihara test for color blindness</a></li>
			<li><a href="../java_decompiler/java_decompiler.php" onfocus="this.blur()" >Online Java class decompiler</a></li>	
<!-- 		<li><a href="../midi_maker/midi_maker.php" onfocus="this.blur()" >Online MIDI and music score maker</a></li> -->	
			<li><a href="../midi_maker/midi_maker.php" onfocus="this.blur()" >Online MIDI maker</a></li>
			<li><a href="../morse_code/morse_code.php" onfocus="this.blur()" >Online morse code generator</a></li>	
			<li><a href="../multiple_badges_maker/multiple_badges_maker.php" onfocus="this.blur()" >Online multiple badges maker</a></li>
			<li><a href="../multiple_qr_codes/multiple_qr_codes.php" onfocus="this.blur()" >Online multiple QR codes generator</a></li>
			<li><a href="../ping/ping.php" onfocus="this.blur()" >Online ping</a></li>
			<li><a href="../rsa_key_generation/rsa_key_generation.php" onfocus="this.blur()" >Online RSA key generation</a></li>
			<li><a href="../sepa_xml/sepa_xml.php" onfocus="this.blur()" >Online SEPA XML message generator for business payments orders and direct debits orders</a></li>
			<li><a href="../signature/signature.php" onfocus="this.blur()" >Online signature maker</a></li>
			<li><a href="../steganography/steganography.php" onfocus="this.blur()" >Online steganography service, hide message or file inside an image</a></li>	
			<li><a href="../webftp/webftp.php" onfocus="this.blur()" >Online Web FTP</a></li>
			<li><a href="../phonenumber_words/phonenumber_words.php" onfocus="this.blur()" >Phone number to words</a></li>
			<li><a href="../itjobs/itjobs.php" onfocus="this.blur()" >Post and search IT jobs for free</a></li>
			<li><a href="../poll_results/poll_results.php" onfocus="this.blur()" >Previous poll results</a></li>	
			<li><a href="../prime_numbers_generator_checker/prime_numbers_generator_checker.php" onfocus="this.blur()" >Prime numbers generator and checker</a></li>	
			<li><a href="../privatekey_match_certificate/privatekey_match_certificate.php" onfocus="this.blur()" >Private key match the certificate</a></li>
			<li><a href="../qrcode/qrcode.php" onfocus="this.blur()" >QR code generator</a></li>
			<li><a href="../random_iban_generator/random_iban_generator.php" onfocus="this.blur()" >Random IBAN generator</a></li>	
			<li><a href="../random_test_data_generator/random_test_data_generator.php" onfocus="this.blur()" >Random test data generator</a></li>
			<li><a href="../readability_tester/readability_tester.php" onfocus="this.blur()" >Readability tester</a></li>	
			<li><a href="../record_mouse_coordinates/record_mouse_coordinates.php" onfocus="this.blur()" >Record XY mouse coordinates on an uploaded image</a></li>	
			<li><a href="../creditor_reference/creditor_reference.php" onfocus="this.blur()" >RF creditor reference generator, validator and reference converter</a></li>	
			<li><a href="../roman_numeral/roman_numeral.php" onfocus="this.blur()" >Roman numeral to Arabic numeral converter and vice versa</a></li>	
			<li><a href="../rot13/rot13.php" onfocus="this.blur()" >Rot13 (rot-n) encoder decoder</a></li>	
			<li><a href="../savings_annuity_calculator/savings_annuity_calculator.php" onfocus="this.blur()" >Savings annuity calculator with graph</a></li>
			<li><a href="../windows_installed_fonts/windows_installed_fonts.php" onfocus="this.blur()" >Show all the fonts installed on your Windows system</a></li>
			<li><a href="../canvas_fonts_text/canvas_fonts_text.php" onfocus="this.blur()" >Show text in different fonts on HTML canvas</a></li>
			<li><a href="../ipaddress_information/ipaddress_information.php" onfocus="this.blur()" >Show my IP address</a></li>	
			<li><a href="../simple_interest_calculator/simple_interest_calculator.php" onfocus="this.blur()" >Simple interest calculator</a></li>
			<li><a href="../php_obfuscator/php_obfuscator.php" onfocus="this.blur()" >Simple online PHP obfuscator</a></li>
			<li><a href="../submitsite/submitsite.php" onfocus="this.blur()" >Submit a website free</a></li>
			<li><a href="../passport_photo_webcam/passport_photo_webcam.php" onfocus="this.blur()" >Take passport photos with your webcam online</a></li>
			<li><a href="../photo_webcam/photo_webcam.php" onfocus="this.blur()" >Take photos with your webcam online</a></li>
<!--			
			<li><a href="../belastingteruggaaf_jongeren_studenten/belastingteruggaaf_jongeren_studenten.php" onfocus="this.blur()" >Tax refund for youth and students in the Netherlands (Dutch only)</a></li>				
-->			
			
			<li><a href="../space_manipulator/space_manipulator.php" onfocus="this.blur()" >Text space manipulator</a></li>
			<li><a href="../text_to_speech/text_to_speech.php" onfocus="this.blur()" >Text to speech</a></li>
			<li><a href="../unicode_character_map/unicode_character_map.php" onfocus="this.blur()" >Unicode character map</a></li>	

			
			<li><a href="../unit_converter/unit_converter.php?c=angle" onfocus="this.blur()" >Unit converter</a></li>	
			<li><a href="../unixtimestamp/unixtimestamp.php" onfocus="this.blur()" >Unix timestamp converter</a></li>	
			<li><a href="../shooting_target/shooting_target.php" onfocus="this.blur()" >Upload image and add shooting target</a></li>
			<li><a href="../wanted_poster/wanted_poster.php" onfocus="this.blur()" >Wanted poster generator</a></li>	
			<li><a href="../webproxy/webproxy.php" onfocus="this.blur()" >Web proxy</a></li>	
			<li><a href="../whois/whois.php" onfocus="this.blur()" >Whois</a></li>		
			<li><a href="../worldclock_timezones/worldclock_timezones.php" onfocus="this.blur()" >World clock and time zones</a></li>
			<li><a href="../sitemap_generator/sitemap_generator.php" onfocus="this.blur()" >XML sitemap generator / CSV to XML sitemap converter</a></li>	
			<li><a href="../xml_validator_xsd/xml_validator_xsd.php" onfocus="this.blur()" >XML validator against XSD schema</a></li>	
<!--			
			
			<li><a href="../metronome/metronome.php" onfocus="this.blur()" >Online metronome</a></li>	
			<li><a href="../regex_tester/regex_tester.php" onfocus="this.blur()" >Online regular expression tester</a></li>	
			<li><a href="../dictionary/dictionary.php" onfocus="this.blur()">Dictionary</a></li>		
			<li><a href="../geekdating/geekdating.php" onfocus="this.blur()" >Geek dating service</a></li>						
-->											
		</ul>
	</div>
	<div id="navigation-ads">
	<script type="text/javascript" language="JavaScript">
	//<![CDATA[
	document.write(display_ad_left());
	//]]>		
	</script>		
	<noscript>		
		<iframe src="http://rcm.amazon.com/e/cm?t=mobilefishcom-20&amp;o=1&amp;p=21&amp;l=ur1&amp;category=books&amp;banner=1PBGJ6MX362TVT8X9P82&amp;f=ifr" width="125" height="125" scrolling="no" marginwidth="0" style="border:none;" frameborder="0"></iframe>
	</noscript>	
</div>

	<div id="navigation-translate">
	<div id="navigation-translate-title">Translate this page</div>	
		<form name="translatePageByGoogle" action="javascript:void(null);">		
			<select name="translatePageSelectionBox" id="translatePageSelectionBox" onchange="javascript:translatePage(translatePageByGoogle.translatePageSelectionBox.options[selectedIndex].value)">
			<option value="" selected="selected">Select Language:</option>
			<option value="af">Afrikaans</option>
			<option value="sq">Albanian</option>
			<option value="ar">Arabic</option>
			<option value="be">Belarusian</option>
			<option value="bg">Bulgarian</option>
			<option value="ca">Catalan</option>
			<option value="zh-CN">Chinese (Simplified)</option>
			<option value="zh-TW">Chinese (Traditional)</option>
			<option value="hr">Croatian</option>
			<option value="cs">Czech</option>
			<option value="da">Danish</option>
			<option value="nl">Dutch</option>
			<option value="et">Estonian</option>
			<option value="tl">Filipino</option>
			<option value="fi">Finnish</option>
			<option value="fr">French</option>
			<option value="gl">Galician</option>
			<option value="de">German</option>
			<option value="el">Greek</option>
			<option value="ht">Haitian Creole</option>
			<option value="iw">Hebrew</option>
			<option value="hi">Hindi</option>
			<option value="hu">Hungarian</option>
			<option value="is">Icelandic</option>
			<option value="id">Indonesian</option>
			<option value="ga">Irish</option>
			<option value="it">Italian</option>
			<option value="ja">Japanese</option>
			<option value="ko">Korean</option>
			<option value="lv">Latvian</option>
			<option value="lt">Lithuanian</option>
			<option value="mk">Macedonian</option>
			<option value="ms">Malay</option>
			<option value="mt">Maltese</option>
			<option value="no">Norwegian</option>
			<option value="fa">Persian</option>
			<option value="pl">Polish</option>
			<option value="pt">Portuguese</option>
			<option value="ro">Romanian</option>
			<option value="ru">Russian</option>
			<option value="sr">Serbian</option>
			<option value="sk">Slovak</option>
			<option value="sl">Slovenian</option>
			<option value="es">Spanish</option>
			<option value="sw">Swahili</option>
			<option value="sv">Swedish</option>
			<option value="th">Thai</option>
			<option value="tr">Turkish</option>
			<option value="uk">Ukrainian</option>
			<option value="vi">Vietnamese</option>
			<option value="cy">Welsh</option>
			<option value="yi">Yiddish</option>
			</select>
		</form>
		<br />
</div>


	<div id="navigation-ads2">
	<script type="text/javascript" language="JavaScript">
	//<![CDATA[
	document.write(display_ad2_left());
	//]]>		
	</script>		
	<noscript>			
		<iframe src="http://rcm.amazon.com/e/cm?t=mobilefishcom-20&amp;o=1&amp;p=8&amp;l=ez&amp;f=ifr&amp;f=ifr" width="120" height="240" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" style="border:none;"></iframe>	
	</noscript>	
</div>

</div>

	<div id="main">

<div id="tools">
	<ul id="tools-table">
		<li class="col1">
			<!-- SiteSearch Google -->

<form name="cse-search-box" action="#" id="cse-search-box">
  <div>
     <input type="hidden" name="cx" value="partner-pub-0337924350061493:vihzf9-ffpk" />
    <input type="hidden" name="cof" value="FORID:11" />
    <input type="hidden" name="ie" value="ISO-8859-1" />
    <input type="text" name="q" size="55" />
    <input type="submit" name="sa" value="Search" onclick="googleSearch(this.form)"/>
	<!-- This search parameter is used by Mobilefish inside the console section -->
	<input type="hidden" name="mfCategory" value=""></input>	
  </div>
</form>
<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&amp;lang=en"></script>
		
<!-- SiteSearch Google -->	

			<div class="gallery-ad">
				<script type="text/javascript" language="JavaScript">
				//<![CDATA[
					document.write(display_ad_below_mainnav());
				//]]>		
				</script>	
				<noscript>
					<iframe src="http://rcm.amazon.com/e/cm?t=mobilefishcom-20&amp;o=1&amp;p=13&amp;l=ur1&amp;category=computers&amp;banner=07FDJ3ARVCE5SRS3G102&amp;f=ifr" width="468" height="60" scrolling="no"  marginwidth="0" style="border:none;" frameborder="0"></iframe>
				</noscript>		
			</div>
		</li>
		<li class="col2">		
			<div class="gallery">
				
				<div class="gallery-buttons">
					&nbsp;<img src="../../images/toolbar/bar_subbutton_printer_friendly.gif" alt="Print this page" width="16" height="16" border="0" />
				</div>
				
				<div class="gallery-links">
					<a href="javascript:void(printPage(location.href));" target="_top"  onfocus="this.blur()">
						Print this page
					</a>	
				</div>
								
				<div class="gallery-links">
					<div class="addthis_toolbox addthis_default_style">
					<a href="http://www.addthis.com/bookmark.php?v=250&amp;username=mobilefish" class="addthis_button_compact">Share</a>
					</div>
					<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
					<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=mobilefish"></script>
				</div>
			
				<div class="gallery-buttons">
					&nbsp;<img src="../../images/toolbar/bar_subbutton_firefox.gif" alt="Firefox Search Plugin" width="16" height="16" border="0" /> 	
				</div>
				
				<div class="gallery-links">
					<a href="javascript:addEngine()" onfocus="this.blur()">
						Mobilefish Firefox search plugin
					</a>	
				</div>

				<div class="gallery-buttons">
					&nbsp;<img src="../../images/toolbar/bar_subbutton_google_toolbar.gif" alt="Mobilefish Google Toolbar" width="16" height="16" border="0" /> 	
				</div>
				
				<div class="gallery-links">
					<a href="http://toolbar.google.com/buttons/add?url=http://www.mobilefish.com/mobilefish_button.xml" onfocus="this.blur()">
						Mobilefish button for Google toolbar
					</a>	
				</div>		
				
				<div class="gallery-buttons">
					&nbsp;<img src="../../images/toolbar/bar_subbutton_google_plus.gif" alt="About me" width="16" height="16" border="0" /> 	
				</div>
				
				<div class="gallery-links">
					<a href="https://plus.google.com/101871326623112634306?rel=author" onfocus="this.blur()">
						Google+
					</a>	
				</div>		
																  
			</div>		
		</li>
	</ul>
</div>
	<!-- Start: This area needs to be printed -->
	<div id="content">		
		<table summary="" border="0" cellspacing="0" cellpadding="0" align="center" class="css-Table628px">

<!-- Menu option -->
<tr>
    <td><a name="qrcode" id="qrcode"></a><h1 class="css-BodyTitle">QR code generator</h1></td>
</tr>	
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr>
    <td>
	
		This service allows you to create QR (=Quick Response) codes, that can be scanned by a QR code scanner or other devices such as a mobile phone.
	Here are several QR code images created with this tool.<br />
	The QR code message is: Welcome to Mobilefish.com.
	<br /><br />
	<table summary="" border="0" cellpadding="2" cellspacing="0">
	<tr>
		<td rowspan="2" width="50">&nbsp;</td>
		<td colspan="2">
			<script type="text/javascript" language="JavaScript">
			//<![CDATA[
			if (linkornot==1) {
				document.write('<a href="javascript:transport()">');
			}
			document.write('<img src="'+photos[0]+'" name="photoslider" style="filter:revealTrans(duration=2,transition=23)" border=0 />')
			if (linkornot==1) {
				document.write('<\/a>');
			}
			//]]>		
			</script>	
		</td>
	</tr>
	<tr>
		<td><a href="#" onclick="backward();return false">Previous slide</a></td>
		<td align="right"><a href="#" onclick="forward();return false">Next slide</a></td>
	</tr>
	</table>
	<br />
	You can also create large QR code images, see:<br />
	<a href="../../download/qrcode/qrcode_example_large_1.html" onclick="javascript:mytracker(this.href);" target="_blank" onfocus="this.blur()">QR code large image size example 1</a> and 
	<a href="../../download/qrcode/qrcode_example_large_2.html" onclick="javascript:mytracker(this.href);" target="_blank" onfocus="this.blur()">QR code large image size example 2</a>.
	<br /><br />
	Instead of using a QR code image on your website you can implement a Javascript code to display the QR code.<br />
	<a href="../../download/qrcode/qrcode_example_javascript.html" onclick="javascript:mytracker(this.href);" target="_blank" onfocus="this.blur()">See example &quot;Display QR code with Javascript&quot;</a>. 
	To do this you need the following:
	<ul>
	<li>Download the <a href="../../php/download/getfile.php?f=qrcode_javascript.txt&amp;l=30" onclick="javascript:mytracker(this.href);" target="_blank" onfocus="this.blur()">code template &quot;Display QR code with Javascript&quot;</a> and follow the installation instructions.</li>
	<li>Generate the QR code in a binary form (qr_code_string) using this tool and implement the qr_code_string value inside the code template.</li>
	</ul>
	To create multiple QR codes, it is recommended to use the <a href="../../services/multiple_qr_codes/multiple_qr_codes.php" onclick="javascript:mytracker(this.href);" target="_blank" onfocus="this.blur()">Online multiple QR codes generator.</a>
	<br /><br />
		
	<span class="css-TextStrong">How this QR code generator works:</span>
	<ol class="css-List">	
	<li>
		With this tool you can create QR codes for the following content types:
		<ul>
		<li>Text</li>
		<li>URL</li>
		<li>Phone number</li>
		<li>SMS</li>
		<li>Email</li>
		<li>Business card (vCard)</li>
		<li>Geographic location</li>	
		<li>WiFi access (Android only)</li>
		<li>Bitcoin</li>
		<li>Calendar event</li>
		</ul>	
	</li>
	<li>After you have selected a content type enter the required data in the corresponding fields.<br />
		This tool allows you to enter upto 450 characters.
		You should scan the generated QR code with a camera phone to test if the embedded data can be extracted.
	</li>
	<li>This service will give you full control over:
		<ul>
			<li>The block size</li>
			<li>The padding size</li>
			<li>The border size</li>
			<li>The background color</li>
			<li>The block color</li>
			<li>The border color</li>		
		</ul>
		<br />
		The image below explains each of these values:<br />
		<img src="../../images/services/qrcode_sizes_and_colors.gif" alt="QR code sizes and colors" width="500" height="324" border="0" />
		<br /><br />
		If the block size is large the generated QR code is more stable and easier to read with a QR code scanner. 
		On the other hand, as the QR code symbol size gets larger, a larger printing area is required. <br />
		It is recommended to set the block size to 5 px.
		<br /><br />
		The generated QR code image can be very large depending on the number of characters entered, block size, padding size and border size.
		To give you an idea how much a pixel (px) is, use the conversion tool to convert the pixel size in millimeters [mm], centimeters [cm],
		inches [in], points [pt] or picas [pc].
		<br /><br />
		<input name="cssxPixelSize" id="cssxPixelSize" value="2000" size="7" maxlength="4" type="text" onkeyup="jsxConvertPixels()" /> 
		px
		&nbsp;&nbsp;&nbsp;
		<img src="../../images/arrow_right.gif" alt="Convert" width="20" height="12" border="0" />
		&nbsp;&nbsp;&nbsp;
		<input name="cssxUnitOutput" id="cssxUnitOutput" value="400.00000" size="20" maxlength="20" readonly="readonly" type="text" style="background-color: rgb(212, 208, 200);" /> 
		<select name="cssxUnit" id="cssxUnit" onchange="jsxConvertPixels()">
			<option value="mm" selected="selected">millimeters [mm]</option>
			<option value="cm">centimeters [cm]</option>
			<option value="inch" >inches [in]</option>
			<option value="pt" >points [pt] (laserprinter 72dpi)</option>
			<option value="pc" >picas [pc] (laserprinter 72dpi)</option>
		</select>
		<br /><br />
	</li>
	<li>The generated QR code can be rotated and converted into other image types.</li>
	<li>The generated QR code image can be downloaded in the output area.</li>
	<li>In this output area you also find the QR code in a binary form (qr_code_string).<br /> 
		This qr_code_string value together with the <a href="../../php/download/getfile.php?f=qrcode_javascript.txt&amp;l=30" onclick="javascript:mytracker(this.href);" target="_blank" onfocus="this.blur()">code template &quot;Display QR code with Javascript&quot;</a>
		are used to display the QR code.
	</li>
	</ol>
	
		<br /><br />
	<div class="css-RSS">
	<a href="rss.xml"><img src="../../images/rss.gif" alt="rss feed" width="80" height="15" border="0" /></a>
	<br /><br />
	</div>

	
	
	

	
		<table summary="" border="0" cellspacing="3" cellpadding="0"  class="css-TableQuickGuide">
	<tr valign="middle"><td  class="css-TableDataQuickGuide">

	
	<h2 class="css-SectionTitle">Input QR code generator:</h2>
<br />
<form name="cssxInputForm" id="cssxInputForm" action="javascript:void(null);" onsubmit="jsxShowQRCode();">
<table border="0" cellspacing="0" cellpadding="2" summary="" class="css-Table610px">
	<tr>
		<td width="113">Content type <span class="css-ContactFormRequired">*</span>:</td>
		<td width="16">
			<a href="../../popupwindow/qrcode_help_all.php?help=contenttype" onclick="windowpopup(this.href, '750', '550', 'yes');return false" onfocus="this.blur()">
				<img src="../../images/help.gif" alt="Help" border="0" width="15" height="15" />
			</a>
		</td>	
		<td width='500'>
			<select name="cssxContentType" id="cssxContentType" onchange="jsxSelectContentType();" onclick="jsxSelectContentType();" tabindex="1">
				<option value="text">Text</option>
				<option value="url">URL</option>
				<option value="phone">Phone number</option>
				<option value="sms">SMS</option>
				<option value="email">Email</option>
				<option value="vcard">Business card (vCard)</option>
				<option value="geo">Geographic location</option>
				<option value="wifi">WiFi access (Android only)</option>
				<option value="bitcoin">Bitcoin</option>
				<option value="vevent">Calendar event</option>
			</select>	
		</td>
	</tr>
</table>
<div id="cssxSelection">
	<table border='0' cellspacing='0' cellpadding='2' summary='' class='css-Table610px'>	
		<tr>
			<td width='107' valign='top' style='padding-top:6px'>Text <span class='css-ContactFormRequired'>*</span>:</td>
			<td width='16' valign='top' style='padding-top:6px'>
				<a href='../../popupwindow/qrcode_help_all.php?help=text' onclick="windowpopup(this.href, '750', '550', 'yes');return false" onfocus='this.blur()'>
					<img src='../../images/help.gif' alt='Help' border='0' width='15' height='15' />
				</a>
			</td>	
			<td>
				<textarea name='cssxText' id='cssxText' cols='50' rows='5' onkeydown="checkNumberOfCharacters('cssxText','titleBox');" onkeyup="checkNumberOfCharacters('cssxText','titleBox');" tabindex="2"></textarea>
				<br />
				<div class='css-Note'>Maximum text length is limited to 450 characters.</div>
			</td>
			<td valign='top'><input type='text' id='titleBox' class='css-Box40' value='0' readonly='readonly' /></td>
		</tr>
	</table>
</div>
<table border="0" cellspacing="0" cellpadding="2" summary="" class="css-Table610px">		
	<tr><td colspan="3"><hr style="width:600px"/></td></tr>
	<tr>	
		<td width="112">Block size:</td>
		<td width="16">
			<a href="../../popupwindow/qrcode_help_all.php?help=size" onclick="windowpopup(this.href, '750', '550', 'yes');return false" onfocus="this.blur()">
				<img src="../../images/help.gif" alt="Help" border="0" width="15" height="15" />
			</a>
		</td>			
		<td width="492">
			<select name="cssxSize" id="cssxSize" style="width:50px" tabindex="900">				
<option value="1"  >1</option>
<option value="2"  >2</option>
<option value="3"  >3</option>
<option value="4"  >4</option>
<option value="5" selected='selected' >5</option>
<option value="6"  >6</option>
<option value="7"  >7</option>
<option value="8"  >8</option>
<option value="9"  >9</option>
<option value="10"  >10</option>
<option value="11"  >11</option>
<option value="12"  >12</option>
<option value="13"  >13</option>
<option value="14"  >14</option>
<option value="15"  >15</option>
								
			</select> px
		</td>	
	</tr>		
	<tr>	
		<td>Padding size:</td>
		<td width="16">
			<a href="../../popupwindow/qrcode_help_all.php?help=padding" onclick="windowpopup(this.href, '750', '550', 'yes');return false" onfocus="this.blur()">
				<img src="../../images/help.gif" alt="Help" border="0" width="15" height="15" />
			</a>
		</td>			
		<td>
			<select name="cssxPadding" id="cssxPadding" style="width:50px" tabindex="905">				
<option value="0" selected='selected' >0</option>
<option value="1"  >1</option>
<option value="2"  >2</option>
<option value="3"  >3</option>
<option value="4"  >4</option>
<option value="5"  >5</option>
<option value="6"  >6</option>
<option value="7"  >7</option>
<option value="8"  >8</option>
<option value="9"  >9</option>
<option value="10"  >10</option>
<option value="11"  >11</option>
<option value="12"  >12</option>
<option value="13"  >13</option>
<option value="14"  >14</option>
<option value="15"  >15</option>
								
			</select> blocks
		</td>	
	</tr>	
	<tr>
		<td>Border size:</td>
		<td width="16">
			<a href="../../popupwindow/qrcode_help_all.php?help=border" onclick="windowpopup(this.href, '750', '550', 'yes');return false" onfocus="this.blur()">
				<img src="../../images/help.gif" alt="Help" border="0" width="15" height="15" />
			</a>
		</td>			
		<td>
			<select name="cssxBorder" id="cssxBorder" style="width:50px" tabindex="910">				
<option value="0" selected='selected' >0</option>
<option value="1"  >1</option>
<option value="2"  >2</option>
<option value="3"  >3</option>
<option value="4"  >4</option>
<option value="5"  >5</option>
<option value="6"  >6</option>
<option value="7"  >7</option>
<option value="8"  >8</option>
<option value="9"  >9</option>
<option value="10"  >10</option>
<option value="11"  >11</option>
<option value="12"  >12</option>
<option value="13"  >13</option>
<option value="14"  >14</option>
<option value="15"  >15</option>
								
			</select> blocks
		</td>	
	</tr>	
	
	<tr>
		<td>Background color:</td>
		<td width="16">
			<a href="../../popupwindow/qrcode_help_all.php?help=backgroundcolor" onclick="windowpopup(this.href, '750', '550', 'yes');return false" onfocus="this.blur()">
				<img src="../../images/help.gif" alt="Help" width="15" height="15" border="0" />
			</a>
		</td>			
		<td valign="top">
			<input type="text" name="cssxBackgroundColor" id="cssxBackgroundColor" value="#FFFFFF" size="8" maxlength="7" readonly="readonly" style="background-color: rgb(212, 208, 200);"  />	
			<a href="javascript:TCP.popup(document.forms['cssxInputForm'].elements['cssxBackgroundColor'])" onmouseover="window.status='Select background color'; return true" onmouseout="window.status=''; return true" title="Select background color" tabindex="915">
			<img src="../../images/colorpicker_selection.gif" alt="Select background color" border="0" height="13" width="15" /></a>
			
			<div class="cssxContainer" >
				<div class="cssxField" id="cssxBackgroundColorPreview" style="background-color:#ffffff">&nbsp;</div>
			</div>
		</td>
	</tr>		
	<tr>
		<td>Block color:</td>
		<td width="16">
			<a href="../../popupwindow/qrcode_help_all.php?help=pixelcolor" onclick="windowpopup(this.href, '750', '550', 'yes');return false" onfocus="this.blur()">
				<img src="../../images/help.gif" alt="Help" width="15" height="15" border="0" />
			</a>
		</td>			
		<td valign="top">
			<input type="text" name="cssxPixelColor" id="cssxPixelColor" value="#000000" size="8" maxlength="7" readonly="readonly"  style="background-color: rgb(212, 208, 200);" />	
			<a href="javascript:TCP.popup(document.forms['cssxInputForm'].elements['cssxPixelColor'])" onmouseover="window.status='Select pixel color'; return true" onmouseout="window.status=''; return true" title="Select pixel color" tabindex="920">
			<img src="../../images/colorpicker_selection.gif" alt="Select pixel color" border="0" height="13" width="15" /></a>
			
			<div class="cssxContainer" >
				<div class="cssxField" id="cssxPixelColorPreview" style="background-color:#000000">&nbsp;</div>
			</div>
		</td>
	</tr>		
	<tr>
		<td>Border color:</td>
		<td width="16">
			<a href="../../popupwindow/qrcode_help_all.php?help=bordercolor" onclick="windowpopup(this.href, '750', '550', 'yes');return false" onfocus="this.blur()">
				<img src="../../images/help.gif" alt="Help" width="15" height="15" border="0" />
			</a>
		</td>			
		<td valign="top">
			<input type="text" name="cssxBorderColor" id="cssxBorderColor" value="#000000" size="8" maxlength="7" readonly="readonly"  style="background-color: rgb(212, 208, 200);" />	
			<a href="javascript:TCP.popup(document.forms['cssxInputForm'].elements['cssxBorderColor'])" onmouseover="window.status='Select border color'; return true" onmouseout="window.status=''; return true" title="Select border color" tabindex="925">
			<img src="../../images/colorpicker_selection.gif" alt="Select border color" border="0" height="13" width="15" /></a>
			
			<div class="cssxContainer" >
				<div class="cssxField" id="cssxBorderColorPreview" style="background-color:#000000">&nbsp;</div>
			</div>
		</td>
	</tr>		
	<tr>	
		<td>Image type:</td>
		<td width="16">
			<a href="../../popupwindow/qrcode_help_all.php?help=image" onclick="windowpopup(this.href, '750', '550', 'yes');return false" onfocus="this.blur()">
				<img src="../../images/help.gif" alt="Help" border="0" width="15" height="15" />
			</a>
		</td>			
		<td>
			<select name="cssxImage" id="cssxImage" style="width:100px"  tabindex="930">				
<option value="jpg" selected='selected' >jpg</option>
<option value="png"  >png</option>
<option value="gif"  >gif</option>
								
			</select>	
		</td>	
	</tr>		
	
	<tr>	
		<td>ECC level:</td>
		<td width="16">
			<a href="../../popupwindow/qrcode_help_all.php?help=ecc" onclick="windowpopup(this.href, '750', '550', 'yes');return false" onfocus="this.blur()">
				<img src="../../images/help.gif" alt="Help" border="0" width="15" height="15" />
			</a>
		</td>			
		<td>
			<select name="cssxECC" id="cssxECC" style="width:100px"  tabindex="935">
<option value="L"  >L (7%)</option>
<option value="M" selected='selected' >M (15%)</option>
<option value="Q"  >Q (25%)</option>
<option value="H"  >H (30%)</option>
			
			</select>	
		</td>	
	</tr>			
	<tr>	
		<td>Rotate image:</td>
		<td width="16">
			<a href="../../popupwindow/qrcode_help_all.php?help=rotate" onclick="windowpopup(this.href, '750', '550', 'yes');return false" onfocus="this.blur()">
				<img src="../../images/help.gif" alt="Help" border="0" width="15" height="15" />
			</a>
		</td>			
		<td>
			<input type="text" name="cssxRotate" id="cssxRotate" value="0" size="5" maxlength="3"  tabindex="940" /> deg counter clockwise  &nbsp;&nbsp;&nbsp;&nbsp; (Allowed angle: Min: 0<sup>o</sup> - Max: 360<sup>o</sup>)
		</td>	
	</tr>			
	<tr>
		<td colspan="2" valign="top">
			<span class="css-ContactFormRequired">* = required</span>
		</td>
		<td>
			<input type='hidden' id='oldfilename' name='oldfilename' value=''/>
			<input type="hidden" name="ipaddress" id="ipaddress" value="54.83.233.11" />
			<input type="submit" name="ping" value="Generate" id="css-XajaxButton" style="width: 100px" tabindex="945" />	
			&nbsp;&nbsp;	
			<input type="button" value="Clear" class="css-Button" onclick="javascript:jsxClearInput();" style="width: 100px;" tabindex="950" />
			&nbsp;&nbsp;
			<input type="button" name="cancel" value="Cancel" class="css-Button" onclick="javascript:jsxCancelRequest();" style="width: 100px;" tabindex="955" />
			&nbsp;&nbsp;
			<input type="button" name="demo" value="Demo" class="css-Button" onclick="javascript:jsxDemo();" style="width: 100px;" tabindex="957" /><br />
	
			<div id="css-Message"></div>
		</td>	
	
	</tr>
	<tr><td colspan="3">&nbsp;</td></tr>	
</table>		
</form>

<div class="css-PrintHide">
	<script type="text/javascript" language="JavaScript">
	//<![CDATA[
		document.write(display_ad_inside_content_3());
	//]]>		
	</script>	
</div>

	


		</td></tr>
	</table>	

	
	<br /><br />			<table summary="" border="0" cellspacing="3" cellpadding="0"  class="css-Table100Per">
	<tr valign="middle"><td class="css-TableDataInform">
	
	
<a name="qrcode_result" id="qrcode_result"></a><h2 class="css-SectionTitle">Output QR code generator:</h2>
<br />
<div id="css-x-ProgressBar"></div>
<table border="0" cellspacing="0" cellpadding="2" summary="">
<tr>
	<td>
		<div class="cssxQRcodeOuter" id="cssxQRcodeOuter"><i>No QR code</i></div>
	</td>
</tr>
</table>

<form name="outputForm" method="post" action="javascript:void(null);">
<div class="cssxDownload" id="cssxDownload"></div>
</form>

<!--#include virtual="/includes/advertisement_inside_content_inc.html"-->


		<div class="css-PrintHide">
	<br />
	<script type="text/javascript" language="JavaScript">
	//<![CDATA[
		document.write(display_ad_near_top_button());
	//]]>		
	</script>
	</div>
	
	<div align="right" class="css-PrintHide">
	<br />
	<script type="text/javascript" language="JavaScript">
	//<![CDATA[
		var topurl = gotoLocation("top");
		document.write('<a href=' + topurl + ' onfocus="this.blur()"> <img src="../../images/button_top.gif" alt="Button Top" width="29" height="13" border="0" align="right" /><\/a>');
	//]]>	
	</script> 
	<br />
	</div>		
		</td></tr>
	</table>	

		
	
	<script type="text/javascript" language="JavaScript">
	//<![CDATA[
	// Initialize
	document.getElementById("cssxContentType").value="text";
	document.getElementById("cssxSize").value=5;
	document.getElementById("cssxPadding").value=0;
	document.getElementById("cssxBorder").value=0;
	
	document.getElementById("cssxBackgroundColor").value="#FFFFFF";
	document.getElementById("cssxBorderColor").value="#000000";
	document.getElementById("cssxPixelColor").value="#000000";
	
	//document.getElementById("cssxVersion").value=0;
	document.getElementById("cssxImage").value="jpg";
	document.getElementById("cssxRotate").value="0";
	document.getElementById("cssxECC").value="M";
	document.getElementById("cssxText").value = "";

	if(document.getElementById("cssxContentType").value == "text") {
		document.getElementById("titleBox").value = "0";
	}
	//]]>		
	</script>
	
	<!-- LAST ITEM -->		
	</td>
</tr>



</table>	

<div id="stop-print"></div><!-- mark the location where print page must end -->
<iframe id="iframecomments" src="../../services/comments/comments.php" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" style="overflow:visible; width:100%; display:none"><a href="../../cache/comments/qrcode.php">Posted comments</a></iframe>		
	
</div><!-- end content -->

</div><!-- end main -->

<div id="sidebar">
	<div id="sidebar-ads">
		<script type="text/javascript" language="JavaScript">
		//<![CDATA[
			document.write(display_ad_right());
		//]]>		
		</script>	
		
		<noscript>
			<iframe src="http://rcm.amazon.com/e/cm?t=mobilefishcom-20&amp;o=1&amp;p=14&amp;l=bn1&amp;mode=videogames&amp;browse=&amp;=1&amp;fc1=&amp;lt1=&amp;lc1=&amp;bg1=&amp;f=ifr" marginwidth="0" marginheight="0" width="160" height="600" frameborder="0" style="border:none;" scrolling="no"></iframe>
		</noscript>
	</div>
	
	<div id="sidebar-poll">
		<iframe id="iframepoll" src="../../services/poll/poll.php" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" style="overflow:visible; width:100%; display:none"><a href="../../customer/tmp/poll/poll.html">Poll</a></iframe>				
		
<!--			
		<noscript>
			<iframe marginwidth="0" marginheight="0" width="120" height="240" scrolling="no" frameborder="0" src="http://rcm.amazon.com/e/cm?o=1&amp;l=as1&amp;f=ifr&amp;t=mobilefishcom-20&amp;dev-t=D68HUNXKLHS4J&amp;p=8&amp;asins=0131422464&amp;IS2=1&amp;bg1=bbcde1&amp;fc1=000000&amp;lc1=6633ff&amp;bc1=bbcde1&amp;IS2=1&amp;lt1=_blank"><map name="boxmap-p8" id="boxmap-p8">
				<area shape="rect" coords="14, 200, 103, 207" href="http://rcm.amazon.com/e/cm/privacy-policy.html?o=1" alt="" />
				<area coords="0,0,10000,10000" href="http://www.amazon.com/exec/obidos/redirect-home/mobilefishcom-20" alt="" /></map><img src="http://rcm-images.amazon.com/images/G/01/rcm/120x240.gif" width="120" height="240" border="0" alt="Shop at Amazon.com" />
			</iframe>
		</noscript>	
-->		
	</div>
</div>


</div><!-- end canvas -->
<!-- End main content -->
  
<div id="footer">
	<div id="footer-ad-top">
		<script type="text/javascript" language="JavaScript">
		//<![CDATA[
	  	 display_ad_footer_top();
	  	//]]>
		</script>
	</div>
	<div id="footer-line"></div>
	
	<div id="footer-main">
		<h2 class="css-Disability">Footer</h2>
		<ul>	  
			<li><a href="../../home/welcome/welcome.html" onfocus="this.blur()" >Home</a>|</li>
			<li><a href="../../contact/contact_mobilefish/contact_mobilefish.html" onfocus="this.blur()" >Contact</a>|</li>
			<li><a href="../../emulators/j2me_wt/j2me_wt.html" onfocus="this.blur()" >Emulators</a>|</li>
			<li><a href="../../tutorials/3dsmax/3dsmax.html" onfocus="this.blur()" >Tutorials</a>|</li>
			<li><a href="../../developer/ant/ant.html" onfocus="this.blur()" >Developer</a>|</li>
			<li><a href="../../services/htpasswd_generator/htpasswd_generator.php" onfocus="this.blur()" >Services</a>|</li>
			<li><a href="../../mobile/wallpapers/wallpapers.php" onfocus="this.blur()" >Mobile</a>|</li>
			<!--<li><a href="../../webshop/webshop/webshop.php" onfocus="this.blur()" >Webshop</a>|</li>-->
			<li><a href="../../games/memory/memory.html" onfocus="this.blur()" >Games</a>|</li>	
			<li><a href="../../links/code_helpers/code_helpers.html" onfocus="this.blur()" >Links</a>|</li>
			<li><a href="../../login/login/login.php" onfocus="this.blur()" >Login</a>|</li>
			<li><a href="../../legal/copyright/copyright.html" onfocus="this.blur()" >Legal</a>|</li>
			<li><a href="../../sitemap/sitemap/sitemap.html" onfocus="this.blur()" >Sitemap</a></li>
		</ul>
	</div>  
	
	<div id="footer-external">
		<div id="footer-external-left">
			<script type="text/javascript" language="JavaScript">
			//<![CDATA[
		  	display_ad_footer_left();
		  	//]]>
			</script>
		</div>
		<div id="footer-external-middle">
			<script type="text/javascript" language="JavaScript">
			//<![CDATA[
		  	displayExternalBanners();
		  	//]]>
			</script>
		
		</div>		
		<div id="footer-external-right">
			<script type="text/javascript" language="JavaScript">
			//<![CDATA[
		  	display_ad_footer_right();
		  	//]]>
			</script>
		</div>	
	</div>	
	
	<div id="footer-bottom">
		<a href="../../legal/copyright/copyright.html" onfocus="this.blur()">Copyright &copy; 2002 - 2014, Mobilefish.com</a><br />
		Please review my <a href="../../legal/privacy/privacy.html">privacy policy</a> before using this site. <br />
		For problems or assistance with this site, <a href="../../popupwindow/contact_form.php" onclick="open_report('','');return false" onfocus="this.blur()"> 
		send an email to Mobilefish.com</a>. <br />
		<!-- <a href="../../contact/donate/donate.html" onfocus="this.blur()">Make a donation</a> <br /> -->
		All pages are <a href="http://validator.w3.org/check/referer" onclick="javascript:mytracker(this.href);" target="_blank" onfocus="this.blur()">XHTML 1.0</a> and <a href="http://jigsaw.w3.org/css-validator/" onclick="javascript:mytracker(this.href);" target="_blank" onfocus="this.blur()">CSS</a> valid.<br />
		<a href="http://geourl.org/near/?p=http://www.mobilefish.com" onclick="javascript:mytracker(this.href);" onfocus="this.blur()">GeoURL</a>
		
		<!-- Point to honeypot code -->
		<a href="http://www.mobilefish.com/php/spam/sharkattack.php" onclick="javascript:mytracker(this.href);"></a>
			
	</div>	
	<div id="footer-ad-bottom">
		<script type="text/javascript" language="JavaScript">
		//<![CDATA[
	  	 display_ad_footer_bottom();
	  	//]]>
		</script>
	</div>	
</div>

<div class="css-ClearBoth"></div>


</div><!-- end container -->
<!--
<script type="text/javascript" language="JavaScript" src="../../scripts/mobile.js"></script>
-->

<!-- Track Google AdSense Clicks via Google Analytics -->
<!-- See: http://www.seobook.com/archives/001370.htmll -->
<script src="../../scripts/astrack.js" type="text/javascript"></script>

<!-- ======================= Start Google Analytics ====================== -->

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
if(googleAnalytics && typeof(urchinTracker) == 'function'){
	_uacct="UA-118369-1";
	urchinTracker();
}	
</script>
		
<!--  ======================= End Google Analytics ======================= -->

</body>
</html>


