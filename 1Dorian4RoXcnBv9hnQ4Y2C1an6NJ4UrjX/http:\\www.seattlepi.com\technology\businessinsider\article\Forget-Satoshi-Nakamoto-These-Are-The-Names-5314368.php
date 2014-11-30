http://www.seattlepi.com/technology/businessinsider/article/Forget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php
HTTP/1.0 200 OK
Server: Apache/2.2.3 (Red Hat)
X-Powered-By: PHP/5.2.12
X-Gen-Mode: full
X-Block-Status: stale
Content-Encoding: gzip
Content-Length: 21480
Content-Type: text/html; charset=UTF-8
Cache-Control: max-age=300
Expires: Thu, 24 Jul 2014 06:09:41 GMT
Date: Thu, 24 Jul 2014 06:04:41 GMT
Connection: close
Vary: Accept-Encoding

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
    prefix=" og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml"
    xmlns:og="http://ogp.me/ns#"
    xmlns:fb="http://www.facebook.com/2008/fbml"
    xml:lang="en" lang="en">
    <head>
<!-- eid:article.5314368 -->        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"UAcHUF9ACQcHVVRV"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e){function n(t,e,n){n||(n={});for(var r=o[t],a=r&&r.length||0,s=n[i]||(n[i]={}),u=0;a>u;u++)r[u].apply(s,e);return s}function r(t,e){var n=o[t]||(o[t]=[]);n.push(e)}var o={},i="nr@context";e.exports={on:r,emit:n}},{}],2:[function(t){function e(t,e,n,i,s){return u?u-=1:r("err",[s||new UncaughtException(t,e,n)]),"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(6),i=t(5),a=window.onerror,s=!1,u=0;t("loader").features.push("err"),window.onerror=e,NREUM.noticeError=n;try{throw new Error}catch(d){"stack"in d&&(t(1),t(2),"addEventListener"in window&&t(3),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&t(4),s=!0)}i.on("fn-start",function(){s&&(u+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&u>0&&(u-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:5,2:4,3:3,4:6,5:1,6:14,handle:"D5DuLP",loader:"G9z0Bl"}],3:[function(t){function e(t){r.inPlace(t,["addEventListener","removeEventListener"],"-",n)}function n(t){return t[1]}var r=t(1),o=(t(3),t(2));if(e(window),"getPrototypeOf"in Object){for(var i=document;i&&!i.hasOwnProperty("addEventListener");)i=Object.getPrototypeOf(i);i&&e(i);for(var a=XMLHttpRequest.prototype;a&&!a.hasOwnProperty("addEventListener");)a=Object.getPrototypeOf(a);a&&e(a)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&e(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=e["nr@wrapped"]?t[1]=e["nr@wrapped"]:e["nr@wrapped"]=t[1]=r(e,"fn-"):"function"==typeof e.handleEvent&&r.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:15,2:1,3:14}],4:[function(t){var e=(t(3),t(1)),n=t(2);e.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=e(t[0],"fn-")})},{1:15,2:1,3:14}],5:[function(t){function e(t){var e=t[0];"string"==typeof e&&(e=new Function(e)),t[0]=n(e,"fn-")}var n=(t(3),t(1)),r=t(2);n.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",e)},{1:15,2:1,3:14}],6:[function(t){function e(){o.inPlace(this,s,"fn-")}function n(t,e){o.inPlace(e,["onreadystatechange"],"fn-")}function r(t,e){return e}var o=t(1),i=t(2),a=window.XMLHttpRequest,s=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];window.XMLHttpRequest=function(t){var n=new a(t);try{i.emit("new-xhr",[],n),o.inPlace(n,["addEventListener","removeEventListener"],"-",function(t,e){return e}),n.addEventListener("readystatechange",e,!1)}catch(r){try{i.emit("internal-error",r)}catch(s){}}return n},window.XMLHttpRequest.prototype=a.prototype,o.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",r),i.on("send-xhr-start",n),i.on("open-xhr-start",n)},{1:15,2:1}],7:[function(t){function e(){function e(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function n(t){var n=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;u>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!n.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){n.status=t.status;var a=t.responseType,d="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,f=e(d);if(f&&(r.rxSize=f),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;r.cbTime=this.cbTime,o("xhr",[n,r])}}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}t("loader").features.push("xhr");var o=t("handle"),i=t(1),a=t(5),s=["load","error","abort","timeout"],u=s.length,d=t(2);t(3),t(4),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=n,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,n){var r=this.metrics,o=t[0],i=this;if(r&&o){var d=e(o);d&&(r.txSize=d)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof n.onload))&&i.end(n)}catch(e){try{a.emit("internal-error",e)}catch(r){}}};for(var f=0;u>f;f++)n.addEventListener(s[f],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+d(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+d(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)&&e()},{1:8,2:11,3:3,4:6,5:1,handle:"D5DuLP",loader:"G9z0Bl"}],8:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],D5DuLP:[function(t,e){function n(t,e){var n=r[t];return n?n.apply(this,e):(o[t]||(o[t]=[]),void o[t].push(e))}var r={},o={};e.exports=n,n.queues=o,n.handlers=r},{}],11:[function(t,e){function n(t){if(!t||"object"!=typeof t&&"function"!=typeof t)return-1;if(t===window)return 0;if(o.call(t,"__nr"))return t.__nr;try{return Object.defineProperty(t,"__nr",{value:r,writable:!0,enumerable:!1}),r}catch(e){return t.__nr=r,r}finally{r+=1}}var r=1,o=Object.prototype.hasOwnProperty;e.exports=n},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&u&&u.body){p.proto="https"===c.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=u.createElement("script");e.src=p.proto+t.agent,u.body.appendChild(e)}}function r(){"complete"===u.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=window,u=s.document,d="addEventListener",f="attachEvent",c=(""+location).split("?")[0],p=e.exports={offset:i(),origin:c,features:[]};u[d]?(u[d]("DOMContentLoaded",o,!1),s[d]("load",n,!1)):(u[f]("onreadystatechange",r),s[f]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}],14:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],15:[function(t,e){function n(t,e,r,s){function nrWrapper(){try{var n,a=u(arguments),d=this,f=r&&r(a,d)||{}}catch(c){i([c,"",[a,d,s],f])}o(e+"start",[a,d,s],f);try{return n=t.apply(d,a)}catch(p){throw o(e+"err",[a,d,p],f),p}finally{o(e+"end",[a,d,n],f)}}return a(t)?t:(e||(e=""),nrWrapper[n.flag]=!0,nrWrapper)}function r(t,e,r,o){r||(r="");var i,s,u,d="-"===r.charAt(0);for(u=0;u<e.length;u++)s=e[u],i=t[s],a(i)||(t[s]=n(i,d?s+r:r,o,s,t))}function o(t,e,n){try{s.emit(t,e,n)}catch(r){i([r,t,e,n])}}function i(t){try{s.emit("internal-error",t)}catch(e){}}function a(t){return!(t&&"function"==typeof t&&t.apply&&!t[n.flag])}var s=t(1),u=t(2);e.exports=n,n.inPlace=r,n.flag="nr@wrapper"},{1:1,2:14}]},{},["G9z0Bl",2,7]);</script>
        <script>var HDN = HDN || {}; HDN.t_firstbyte = Number(new Date());</script>
        <!-- generated at 2014-07-23 14:13:53 on prodWCM5 running vr5.17.1.3 -->
        <meta name="adwiz-site" content="spi" />
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />


        <script type="text/javascript">
        bizobject_identifier = "article_5314368";

        // <![CDATA[
        var requestTime = new Date(1406142833 * 1000);

                    
            
            // bizobject variables
        var omni_channelPath = "Business :: Technology :: Business Insider";
        var omni_title = "Forget Satoshi Nakamoto - These Are The Names In Bitcoin That Actually Matter";
        var omni_bizObjectId = "5314368";
        var omni_className = "article";
        var omni_publicationDate = "2014-03-13 14:41:00";
        var omni_sourceSite="thirdparty";

        // article specific variables
        var omni_authorName = "DYLAN LOVE";
        var omni_authorTitle = "provided by<br /><a href=\"http://www.businessinsider.com\" target=\"_blank\" style=\"text-decoration:none\"><img src=\"http://imgs.sfgate.com/graphics/partners/businessinsider/article_header.gif\" border=\"0\" /></a>";
        var omni_pageNumber = "0";
        var omni_breakingNewsFlag = "0";
        var omni_localNewsFlag = "0";

            var omni_premiumStatus = "free";
        var omni_premiumEndDate = "";
        var omni_originalSource = "businessinsider";
            // ]]>
        </script>
        <!--[if IE 6]><script type="text/javascript" src="/js/hdn/utils/DD_belatedPNG_0.0.8a-min.js"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="/external/css/global.sharedmain.r5.17.1.3.css" media="all" />
<link rel="stylesheet" type="text/css" href="/external/css/global.sharedmodules.r5.17.1.3.css" media="all" />
<link rel="stylesheet" type="text/css" href="/external/css/global.sharedpages.r5.17.1.3.css" media="all" />
<link rel="stylesheet" type="text/css" href="/external/css/global.sitemain.r5.17.1.3.css" media="all" />
<link rel="stylesheet" type="text/css" href="/external/css/global.sitemodules.r5.17.1.3.css" media="all" />
<link rel="stylesheet" type="text/css" href="/external/css/global.sitepages.r5.17.1.3.css" media="all" />
        <script type="text/javascript" src="/js/hdn/utils/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="/external/js/global.header.r5.17.1.3.js"></script>
        <script type="text/javascript" async src="http://launch.newsinc.com/js/embed.js" id="_nw2e-js"></script>
<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>

        <title>Forget Satoshi Nakamoto — These Are The Names In Bitcoin That Actually Matter - seattlepi.com</title>
        <link rel="SHORTCUT ICON" href="/favicon.ico" />
        <link rel="apple-touch-icon" href="/apple-touch-icon.png"/>
                    <link rel="canonical" href="http://www.businessinsider.com/names-to-know-in-bitcoin-2014-3?utm_source=hearst&utm_medium=referral&utm_content=allverticals" />
        <link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.seattlepi.com/technology/businessinsider/article/Forget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php" />    
    
            <meta name="description" content="The Bitcoin community was nearly unanimous in expressing its displeasure at the controversial Newsweek story purporting to out &quot;Satoshi Nakamoto,&quot; the anonymous person who coded and created the famous digital currency.  The common critique is that it doesn't matter who's behind Bitcoin, that the technology is so transformative for how money moves around the world that the genie's already out of the proverbial bottle.  The identity of the creator has nothing to do with a Bitcoiner's current task at hand — to educate people on Bitcoin and figure out new ways to apply it.  When there began to be doubts that Newsweek had properly identified &quot;Satoshi Nakamoto&quot; (it suggested that he was actually Dorian Nakamoto of Temple City, Calif.), Antonopoulos started a Bitcoin fundraiser to send money to Nakamoto for his troubles in being hounded by the media.  Check Out The World's First Traveling Bitcoin ATMGoogle Ventures Founder Sells Palo Alto Home Next To Tim Cook's For $3 Million [PHOTOS]What It's Like Inside The World's Largest Bitcoin Mining Operation" />
    
    
            <meta name="author.name" content="Dylan Love, provided by&lt;br /&gt;&lt;a href=&quot;http://www.businessinsider.com&quot; target=&quot;_blank&quot; style=&quot;text-decoration:none&quot;&gt;&lt;img src=&quot;http://imgs.sfgate.com/graphics/partners/businessinsider/article_header.gif&quot; border=&quot;0&quot; /&gt;&lt;/a&gt;" />
        <meta name="author.title" content="" />
        <meta name="date.release" content="2014/13/03" />
        <meta name="time.release" content="7:41" />
        <meta name="publisher" content="Business Insider" />
        <meta name="sections" content="Business,Technology,Business Insider" />
        <meta name="subject" content="accomplishment" />
        <meta name="news_keywords" content="accomplishment" />
                <script src="http://widget.perfectmarket.com/seattlepi/load.js"></script>

        
    

    <meta property="og:title" content="Forget Satoshi Nakamoto — These Are The Names In Bitcoin That Actually Matter" />
            <meta property="og:description" content="The Bitcoin community was nearly unanimous in expressing its displeasure at the controversial Newsweek story purporting to out &amp;quot;Satoshi Nakamoto,&amp;quot; the anonymous person who coded and created the famous digital currency.  The common critique is that it doesn&#039;t matter who&#039;s behind Bitcoin, that the technology is so transformative for how money moves around the world that the genie&#039;s already out of the proverbial bottle.  The identity of the creator has nothing to do with a Bitcoiner&#039;s current task at hand &amp;acirc;&quot; to educate people on Bitcoin and figure out new ways to apply it.  When there began to be doubts that Newsweek had properly identified &amp;quot;Satoshi Nakamoto&amp;quot; (it suggested that he was actually Dorian Nakamoto of Temple City, Calif.), Antonopoulos started a Bitcoin fundraiser to send money to Nakamoto for his troubles in being hounded by the media.  Check Out The World&#039;s First Traveling Bitcoin ATMGoogle Ventures Founder Sells Palo Alto Home Next To Tim Cook&#039;s For $3 Million [PHOTOS]What It&#039;s Like Inside The World&#039;s Largest Bitcoin Mining Operation" />
        <meta property="og:type" content="article" />
  	<meta property="og:url" content="http://www.seattlepi.com/technology/businessinsider/article/Forget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php#src=fb" />
 	 
    	<meta property="og:image" content="http://www.seattlepi.com/img/pages/article/opengraph_default.png" />
  	  
  
    <meta property="og:site_name" content="seattlepi.com" />

    
<!-- /business/templates/hearst/home/header_fbpage.tpl-->
    <meta property="fb:page_id" content="7457442370" />
    <meta property="fb:admins" content="100006394927810"/>
        <meta property="fb:app_id" content="177356725623403"/>
        <!-- templates/hearst/home/viafouraHeadMeta.tpl -->
<meta property="vf:unique_id" content="seattlepi-article-5314368" />
<!-- e templates/hearst/home/viafouraHeadMeta.tpl -->
        
        <script type="text/javascript" id="adPositionManagerScriptTag" src="http://aps.hearstnp.com/Scripts/loadAds.js"></script>
        
<!-- CSS/JS Hotfix freeform -->

<!-- hearst/item/standalone.tpl -->
<!-- mid:freeform.14337 -->
<style>
.hst-newGallery #commentspage {padding:0;}
.hst-newGallery #commentspage {background-color: #f0f0f0 !important;}
.hst-newGallery #commentspage .photo-gallery h3 {padding-left:8px;}
.hst-newGallery .hst-mediumrectangle {width:300px !important}
.hst-newGallery .hst-ysm {margin:0;}
.hst-newGallery .hst-sitefooter .pagecontent.faux-21 {padding-top:10px;}
.hst-newGallery #S300 {background: white; padding: 10px; width: 300px; }
.hst-articletext img {max-width: 358px;}

.hdn-comments .viafoura .hdn-vf-comment-counts { display: block; }

/* Home Page Fixes RM */
.home .pagecontent {background-color:transparent;clear:both;float:left;margin:0 10px 10px 10px;padding:0;width:980px;}
.home .topmask {padding:0;float:left;margin:0 0 10px;}
.home .hst-blockstates{clear:both;float:left;margin:0;padding:10px;}
.home .faux-10{background:#fff;float:left;margin:0;}
.home div.span-10{margin:0;padding:10px 0 10px 10px;}
.home div.span-11c.last{margin:0;padding:10px;}
.home .middlemask{clear:both;float:left;margin:0 0 10px;padding:0;}
.home .hst-spwide{clear:both;float:left;margin:0;padding:10px;}
.home .hst-homecategory{clear:both;float:left;margin:0;padding:10px;width:630px;}
.home .hst-travelzoo{clear:both;float:left;margin:0;padding:10px;width:630px;}
.home .hst-blogpromo-vertical{margin:0;padding:0;width:300px;}
.home div.span-31 {margin:0;width:100%;}
.home div.span-21b {margin:0 10px 0 0!important;padding:0!important;width:650px;}
.home .hst-sitefooter {margin:10px; padding:10px 10px 0;}
#hst-centerpiecewide-container {margin:0;}
#B728 {margin:0 116px;}
#piFoot {width:960px !important;}

/* Headline List, Illustrated 2 font fix */

.hst-headlinelist-illo2 h4 a {
    font-family: Arial, sans-serif !important;
    font-weight: bold;
    color: #1F4B8E;
}

</style>

<!-- Bing Webmaster Tools verification -->
<meta name="msvalidate.01" content="9451CA04ABC9D1D5C6419C73B4C4F7B7" />

<!-- CREQ-910 -->

<script type="text/javascript">
	// <![CDATA[
	jQuery(function($) {
		if($("body").hasClass("hst-cmfThirdPartyHeader")){
			$('.hst-siteheader a').attr('target', '_top');
		}
	});
	// ]]>
</script>

    
    </head>
    <body class="body technology technology-businessinsider hst-article">
    <script type="text/javascript" src="/external/js/global.top.r5.17.1.3.js"></script>
            <!-- ux/seattlepi/tmpl/article_omniture.php -->

<!-- Adobe TagManager: Seattle Main -->
<script type="text/javascript">//<![CDATA[
var amc=amc||{};if(!amc.on){amc.on=amc.call=function(){}};
document.write("<scr"+"ipt type=\"text/javascript\" src=\"//www.adobetag.com/d1/v2/ZDEtaGVhcnN0LTMwNzctMzk0My0=/amc.js\"></sc"+"ript>");
//]]></script>
<!-- End Adobe TagManager -->

<!-- e ux/seattlepi/tmpl/article_omniture.php -->            <div id="outer_bg_container">
        <!-- outer gradient background image repeat-y  -->
        <div id="inner_bg_container">
            <!-- top fading gradient image fixed  -->
            <div class="container">
<!-- hearst/home/navigation.tpl -->
	<!-- business/templates/hearst/home/navigation_main.tpl -->
<div class="hst-siteheader">
  <p class="skip">(<a href="#skip">skip this header</a>)</p>

  <div class="row1 clearfix">
    <div class="buttonone" id="buttonone1">
      <div class="creative">
            <div id="A120" class="ad_deferrable"><script type="text/javascript">/*<![CDATA[*/ hearstPlaceAd("A120"); /*]]>*/</script></div>      </div>
    </div>
    <div class="leaderboard" id="leaderboard1">
      <div class="creative">
        <div class="hst-leaderboard">
	<div id="A728" class="ad_deferrable"><script type="text/javascript">/*<![CDATA[*/ hearstPlaceAd("A728"); /*]]>*/</script></div>
</div>
      </div>
    </div>
      
      <!-- hearst/item/standalone.tpl -->
<!-- mid:freeform.6670 -->
<div class="hst-topzone">
</div>
  </div>

  <!-- ux/seattlepi/templates/hearst/home/header_branding.tpl -->
 <div class="row2b clearfix" id="row2"><!-- .row2b -->
     <div id="usertools1" class="usertools">
    	<!-- ux/seattlepi/tmpl/header_usertools.php -->

<ul id="reg_nonmember">
	<li class="first"><a href="http://reg.seattlepi.com/signup/">Register</a></li>
	<li><a href="http://reg.seattlepi.com/login/">Sign In</a></li>
</ul>
<ul id="reg_member">
</ul>
<script type="text/javascript">
   	/*<![CDATA[*/
        function initRegLinks (eleId) {
           	var insitecookie=GetCookie("chron_user_auth");
           	var hccookie=GetCookie("hc_customize");
        
           	if (insitecookie && hccookie) {
        
        		var name=insitecookie.replace(/\|.*/,"");
        
        		var customarry=hccookie.split("|");
        		var membername = customarry[10];
        		var firstname = customarry[0];
        		var lastname = customarry[1];
        		var profileurl = "http://reg.seattlepi.com/users/";
        		if ('viafoura' == 'pluck') {
        			profileurl = "http://www.seattlepi.com/profile";
        		}
        
        		document.getElementById(eleId).innerHTML='<li class="first">Hi, <a href="' + profileurl + '">' + firstname + ' ' + lastname + '</a></li> <li><a href="http://reg.seattlepi.com/users/">My Account</a></li> <li><a class="regnav" href="http://reg.seattlepi.com/logout/">Sign Out</a></li>';
        		document.getElementById('reg_nonmember').style.display='none';
        
        	}
        }
        initRegLinks('reg_member');
	/*]]>*/
</script>

<!-- e ux/seattlepi/tmpl/header_usertools.php -->

    </div>

			
			<!-- hearst/item/standalone.tpl -->
<!-- mid:freeform.6211 -->
<ul class="sitelinks">
    <li class="first"><a href="https://www.facebook.com/pages/The-Seattle-Post-Intelligencer/7457442370">Facebook</a></li>
    <li><a href="https://twitter.com/seattlepi">Twitter</a></li>
<li><a href="https://plus.google.com/102966415583203954383" rel="publisher">Google+</a></li>
    <li><a href="http://www.seattlepi.com/newsletters/">Breaking news alerts</a></li>
</ul>
	     <div id="pi-daily-deal-widget"></div>
    <div class="halfbanner">
	    <div class="creative">
			
	        <div id="A234" class="ad_deferrable"><script type="text/javascript"> /*<![CDATA[*/ hearstPlaceAd("A234"); /*]]>*/ </script></div>
			
	     </div>
    </div>

    <div class="weather clearfix png" id="weatherbg">
    	<p class="date">Wednesday, July 23, 2014</p>
    	<div class="location"><strong><a href="http://weather.seattlepi.com/" id="weatherloc"></a></strong> <a href="http://weather.seattlepi.com/" id="weathercond"></a></div>
    	<div class="temperature"><a href="http://weather.seattlepi.com/" id="weathertemp"></a><span id="weatherscale"></span></div>
  	</div>

	<div class="brand">
		<a href="/"><img src="/img/modules/siteheader/brand.png" alt="seattlepi.com" class="png"/></a>
	</div>

    <div class="searchtools">
		<form  action="/search/?" method="get" target="_top">
  		<input type="hidden" name="action" value="search" />
	  	<input type="hidden" name="channel" value="technology/businessinsider" />
	 	<input type="hidden" name="search" value="1" />
	  	<input type="hidden" name="firstRequest" value="1" />

        <table><tbody><tr>
          <td class="text"><input name="query" type="text" value=""></td>
          <td class="submit"><input type="image" value="" src="/img/modules/siteheader/searchbutton.png"></td>
          <td class="radio"><input type="radio" value="property" name="searchindex" checked="checked"></td>
          <td class="label">seattlepi.com</td>
          <td class="radio"><input type="radio" value="businesses" name="searchindex"/></td>
          <td class="label">Businesses</td>
        </tr></tbody></table>
      	</form>
    </div>

 </div><!--/.row2b -->

<!-- /ux/seattlepi/templates/hearst/home/header_branding.tpl -->
      
  <!-- NAV MENU START -->


<script type="text/javascript">var defaultSiteNavId = 'channel_9106';</script>
<!-- hearst/sitemenu/dynamic.tpl -->


<div id="menu_sitenav" class="sitenav clearfix">
  <ul class="list1"><li id="sitenav_771"><a href="/">Home</a></li><li id="sitenav_696"><a href="/local/">Local</a></li><li id="sitenav_697"><a href="/national/">U.S./World</a></li><li id="sitenav_698"><a href="/business/">Business</a></li><li id="sitenav_695"><a href="/sports/">Sports</a></li><li id="sitenav_699"><a href="/entertainment/">Entertainment</a></li><li id="sitenav_700"><a href="/lifestyle/">Life</a></li><li id="sitenav_701"><a href="/comics-and-games/">Comics</a></li><li id="sitenav_702"><a href="/photos/">Photos</a></li><li id="sitenav_703"><a href="/blogs/">Blogs</a></li><li id="sitenav_704"><a href="http://education.seattlepi.com">Education</a></li><li id="sitenav_705"><a href="http://www.seattlepi.com/lifestyle/travel/deals/">Travel</a></li><li id="sitenav_706"><a href="/realestate/">Real Estate</a></li></ul>
  <ul class="list3">
    <li id="sitenav_0"><a class="list3_index" href="/index/"id="index">Index &#9660;</a></li>
  </ul>
  <!-- NavBar Sponsor Image -->
  
  
<!-- noGen: item_sitemenu_banner -->
</div>



<div class="hst-navIndex" id="navIndex">
    <div class="content">
        <div class="title clearfix">
            <div class="indexheader"><a href="#" id="navIndex-close">Close [X]</a></div>
            Quick links to other pages on this site <span class="pipe">|</span> Still can't find it? see <a href="/index/">Site Index</a>
        </div>
        <div class="columns" id="navIndex-columns">
            <div class="clear"></div>
        </div>
        <!--/.columns-->
    </div>
    <!--/.content-->
</div>

<div id="subnav_771" class="subnav clearfix hidden"><ul class="list1"><li class="first"><a href="http://weather.seattlepi.com/US/WA/Seattle.html">Weather</a></li><li><a href="http://blog.seattlepi.com/seattlepolitics/">Politics</a></li><li><a href="/local/connelly/">Joel Connelly</a></li><li><a href="/local/neighborhoods/">Neighborhoods</a></li><li><a href="/local/environment/">Environment</a></li><li><a href="http://www.seattlepi.com/business/boeing/">Boeing/Aerospace</a></li><li><a href="http://www.seattlepi.com/business/tech/">Microsoft/Tech</a></li></ul></div>
<div id="subnav_696" class="subnav clearfix hidden"><ul class="list1"><li class="first"><a href="/local/weather/">Weather</a></li><li><a href="/local/transportation/">Transportation</a></li><li><a href="http://blog.seattlepi.com/seattlepolitics/">Politics</a></li><li><a href="/local/connelly/">Joel Connelly</a></li><li><a href="/local/neighborhoods/">Neighborhoods</a></li><li><a href="/local/environment/">Environment</a></li><li><a href="/local/obits/">Obituaries</a></li></ul></div>
<div id="subnav_697" class="subnav clearfix hidden"><ul class="list1"><li class="first"><a href="/national/us/">U.S.</a></li><li><a href="/national/washingtondc/">Washington D.C.</a></li><li><a href="/national/asia/">Asia</a></li><li><a href="/national/africa/">Africa</a></li><li><a href="/national/middleeast/">Middle East</a></li><li><a href="/national/europe/">Europe</a></li><li><a href="/national/latinamerica/">Latin America/Carribean</a></li><li><a href="/national/canada/">Canada</a></li><li><a href="/national/oddnews/">Odd News</a></li></ul></div>
<div id="subnav_698" class="subnav clearfix hidden"><ul class="list1"><li class="first"><a href="/business/boeing/">Boeing/Aerospace</a></li><li><a href="/business/tech/">Microsoft/Tech</a></li><li><a href="/business/bizwire/">Business Wire</a></li><li><a href="/business/techwire/">Tech Wire</a></li><li><a href="http://www.seattlepi.com/business/press-releases/">Press Releases</a></li></ul></div>
<div id="subnav_695" class="subnav clearfix hidden"><ul class="list1"><li class="first"><a href="/sports/football/">Seahawks/NFL</a></li><li><a href="/sports/baseball/">Mariners/MLB</a></li><li><a href="/sports/sounders/">Sounders/Soccer</a></li><li><a href="/sports/college/">Huskies/Cougars</a></li><li><a href="/sports/storm/">Storm/WNBA</a></li><li><a href="/sports/more/">More Sports</a></li><li><a href="http://bleacherreport.com/seattle-sports/">Bleacher Report</a></li></ul></div>
<div id="subnav_699" class="subnav clearfix hidden"><ul class="list1"><li class="first"><a href="http://events.seattlepi.com/">What's Happening</a></li><li><a href="/entertainment/movies/">Movies</a></li><li><a href="/entertainment/tv/">TV</a></li><li><a href="/entertainment/music/">Music</a></li><li><a href="/lifestyle/food/">Restaurants</a></li><li><a href="/entertainment/books/">Books</a></li><li><a href="/entertainment/videogames/">Video Games</a></li><li><a href="/entertainment/finearts/">Theater/Arts</a></li><li><a href="http://blog.seattlepi.com/people/">Celebrities</a></li><li><a href="/entertainment/wire/">Entertainment Wire</a></li></ul></div>
<div id="subnav_700" class="subnav clearfix hidden"><ul class="list1"><li class="first"><a href="/lifestyle/homegarden/">Home & Garden</a></li><li><a href="/lifestyle/health/">Health</a></li><li><a href="/lifestyle/food/">Food & Dining</a></li><li><a href="/lifestyle/travel/">Travel</a></li><li><a href="/lifestyle/advice/">Advice</a></li><li><a href="/lifestyle/blogcritics/">Blog Critics</a></li><li><a href="/lifestyle/pets/">Pets</a></li><li><a href="/lifestyle/fashion/">Fashion</a></li><li><a href="/lifestyle/kids/">Kids</a></li><li><a href="/horoscopes/">Horoscopes</a></li><li><a href="/visitorsguide/">Visitors Guide</a></li></ul></div>
<div id="subnav_701" class="subnav clearfix hidden"><ul class="list1"><li class="first"><a href="/puzzles/">Puzzles</a></li><li><a href="/comics-and-games/fun/">Comics Kingdom</a></li><li><a href="/horoscopes/">Horoscopes</a></li><li><a href="http://www.uclick.com/client/spi/uftr/">Trivia</a></li><li><a href="http://www.uclick.com/client/spi/pff/">Play Four</a></li></ul></div>
<div id="subnav_702" class="subnav clearfix hidden"></div>
<div id="subnav_703" class="subnav clearfix hidden"><ul class="list1"><li class="first"><a href="/blogs/staff/">Staff Blogs</a></li><li><a href="/local/neighborhoods/">Neighborhood Blogs</a></li><li><a href="/blogs/city-brights/">City Brights</a></li><li><a href="/blogs/reader-blogs/">Reader Blogs</a></li></ul></div>
<div id="subnav_704" class="subnav clearfix hidden"></div>
<div id="subnav_705" class="subnav clearfix hidden"></div>
<div id="subnav_706" class="subnav clearfix hidden"></div>

<div id="subnav_0" class="subnav clearfix hidden"></div>

<!-- e hearst/sitemenu/dynamic.tpl --><!-- hearst/common/channel_subnav.tpl -->
    
    <!-- e hearst/common/channel_subnav.tpl -->

<!-- NAV MENU END -->

 <div class="hr"><hr /></div> 
</div>
<!--/.siteheader -->

<div class="hst-billboard">
			<div id="RM" class="ad_deferrable"><script type="text/javascript">/*<![CDATA[*/ hearstPlaceAd("RM"); /*]]>*/</script></div>
		<div id="PAGEWIDE" class="ad_deferrable"><script type="text/javascript">/*<![CDATA[*/ hearstPlaceAd("PAGEWIDE"); /*]]>*/</script></div>
</div>
<!-- e business/templates/hearst/home/navigation_main.tpl -->
<!-- e hearst/home/navigation.tpl -->
<!-- commentsOn: 1, commentKey: seattlepi-article-5314368 -->
    <div class="pagecontent faux-21 hst-articlecontent business">

                                        

                                    <!-- templates/design/article/story_page.tpl -->

<div class="faux-21 clearfix">
    <div class="span-21b clearfix">
        <!-- hearst/article/types/story.tpl -->

<table class="hst-articleprinter">
    <tr>
        <td class="print"><form><input type="submit" value="Print This Article" onclick="print();return false;" /></form></td>
        <td class="back"><a href="/technology/businessinsider/article/Forget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php">&laquo; Back to Article</a></td>
    </tr>
</table>

<div id="hst-printable-ad" class="hst-printable-ad">
</div>
<div class="hnews hentry item">

<!-- src/business/templates/hearst/article/types/standard_title.tpl -->

        <div class="hst-articletitle articletitle">
            <p class="brand"><!--  BRAND  --></p>
            <!-- src/business/templates/hearst/article/headline.tpl -->
    <h1 class="headline entry-title">Forget Satoshi Nakamoto — These Are The Names In Bitcoin That Actually Matter</h1>
    <!-- e src/business/templates/hearst/article/headline.tpl -->
            <!-- src/business/templates/hearst/article/types/byline.tpl -->

<h5 class="byline"><span class="name">Dylan Love, provided by<br /><a href="http://www.businessinsider.com" target="_blank" style="text-decoration:none"><img src="http://imgs.sfgate.com/graphics/partners/businessinsider/article_header.gif" border="0" /></a></span></h5>
<!-- e src/business/templates/hearst/article/types/byline.tpl -->
                                                                <h5 class="timestamp updated" title="2014-03-13T07:41:00Z">
                Published 7:41&nbsp;am, Thursday, March 13, 2014
            </h5>
        </div>

<!-- e src/business/templates/hearst/article/types/standard_title.tpl -->

<script type="text/javascript" src="/js/hdn/slideshow/refresh.js?r5.17.1.3"></script>
<iframe style="display:none;" id="galleryrefresher" name="galleryrefresher" src="/tmpl/slideshow_empty.html"></iframe>
<iframe style="display:none;" id="gallery_pos_refresher" name="gallery_pos_refresher" src="/tmpl/slideshow_empty.html"></iframe>
<script>HDN.doRefresh = 1;</script>
  <div class="hst-articlebox">
        
        <div class="hst-freeform hdnce-e hdnce-item-14337"><!-- mid:freeform.14337 -->
          <style>
.hst-newGallery #commentspage {padding:0;}
.hst-newGallery #commentspage {background-color: #f0f0f0 !important;}
.hst-newGallery #commentspage .photo-gallery h3 {padding-left:8px;}
.hst-newGallery .hst-mediumrectangle {width:300px !important}
.hst-newGallery .hst-ysm {margin:0;}
.hst-newGallery .hst-sitefooter .pagecontent.faux-21 {padding-top:10px;}
.hst-newGallery #S300 {background: white; padding: 10px; width: 300px; }
.hst-articletext img {max-width: 358px;}

.hdn-comments .viafoura .hdn-vf-comment-counts { display: block; }

/* Home Page Fixes RM */
.home .pagecontent {background-color:transparent;clear:both;float:left;margin:0 10px 10px 10px;padding:0;width:980px;}
.home .topmask {padding:0;float:left;margin:0 0 10px;}
.home .hst-blockstates{clear:both;float:left;margin:0;padding:10px;}
.home .faux-10{background:#fff;float:left;margin:0;}
.home div.span-10{margin:0;padding:10px 0 10px 10px;}
.home div.span-11c.last{margin:0;padding:10px;}
.home .middlemask{clear:both;float:left;margin:0 0 10px;padding:0;}
.home .hst-spwide{clear:both;float:left;margin:0;padding:10px;}
.home .hst-homecategory{clear:both;float:left;margin:0;padding:10px;width:630px;}
.home .hst-travelzoo{clear:both;float:left;margin:0;padding:10px;width:630px;}
.home .hst-blogpromo-vertical{margin:0;padding:0;width:300px;}
.home div.span-31 {margin:0;width:100%;}
.home div.span-21b {margin:0 10px 0 0!important;padding:0!important;width:650px;}
.home .hst-sitefooter {margin:10px; padding:10px 10px 0;}
#hst-centerpiecewide-container {margin:0;}
#B728 {margin:0 116px;}
#piFoot {width:960px !important;}

/* Headline List, Illustrated 2 font fix */

.hst-headlinelist-illo2 h4 a {
    font-family: Arial, sans-serif !important;
    font-weight: bold;
    color: #1F4B8E;
}

</style>

<!-- Bing Webmaster Tools verification -->
<meta name="msvalidate.01" content="9451CA04ABC9D1D5C6419C73B4C4F7B7" />

<!-- CREQ-910 -->

<script type="text/javascript">
	// <![CDATA[
	jQuery(function($) {
		if($("body").hasClass("hst-cmfThirdPartyHeader")){
			$('.hst-siteheader a').attr('target', '_top');
		}
	});
	// ]]>
</script>
      </div>
  
    <!-- hearst/article/article_tools.tpl -->



<!-- temporary inline style, don't judge me! -->

<style type="text/css">
	.fb_share_count_wrapper {width: 52px;}
	.FBConnectButton_Small .FBConnectButton_Text {padding:2px 2px 3px 3px;}
	.FBConnectButton_Small, .FBConnectButton_RTL_Small {font-size:9px;line-height:10px;}
	.print_link {height: 25px;}
</style>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div class="hst-articletools">

	<!-- Wrap  -->
	<div class="inner_social_wrap clearfix" style="margin-bottom:15px;">

	<div id="tweetmeme_1" style="float: left;">
		<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.seattlepi.com/technology/businessinsider/article/Forget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php?cmpid=twitter" data-count="vertical" data-via="SeattlePI">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	</div>
	
	<!--
	<div style="float: left; width:45px; padding-left:8px;">
		<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.seattlepi.com%2Ftechnology%2Fbusinessinsider%2Farticle%2FForget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php%3Fcmpid%3Dfb&amp;layout=box_count&amp;show_faces=false&amp;width=50&amp;action=like&amp;font=tahoma&amp;colorscheme=light&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:65px;" allowTransparency="true"></iframe>
	</div>
	-->
	
	<div style="float: left; padding-left:8px;" class="fb-share-button" data-href="http%3A%2F%2Fwww.seattlepi.com%2Ftechnology%2Fbusinessinsider%2Farticle%2FForget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php" data-type="box_count"></div>
	
	<div style="float: left; padding-left: 8px;margin-right:8px;">
		<g:plusone size="tall" href="http://www.seattlepi.com/technology/businessinsider/article/Forget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php?cmpid=gplus"></g:plusone>
	</div>
	
	<script type="text/javascript">
		(function() {
			var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			po.src = 'https://apis.google.com/js/plusone.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		})();
	</script>
	
	<div style="float: left; margin-top:40px;">
		<!-- Pin it -->
		<a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.seattlepi.com%2Ftechnology%2Fbusinessinsider%2Farticle%2FForget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php&media=http://www.seattlepi.com/img/pages/article/opengraph_default.png&description=Forget+Satoshi+Nakamoto+%E2%80%94+These+Are+The+Names+In+Bitcoin+That+Actually+Matter" data-pin-do="buttonPin" data-pin-config="above"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a>
		<!-- Please call pinit.js only once per page -->
		<script src="//assets.pinterest.com/js/pinit.js" data-pin-zero="true" async type="text/javascript" /></script>
		
	</div>
	
	</div><!-- end Wrap -->
	
	<!--
	<div style="clear:both; padding-bottom:10px;"></div>
	-->
	
	<table style="float:left; width:50%;">
		<tr>
							<td class="size">
					<img src="/img/pages/article/tools_size.gif" alt="" />
					<a class="larger" href="javascript:hst_chsize('plus')">Larger</a> | <a class="text" href="javascript:hst_chsize('minus')">Smaller</a>
				</td>
					</tr>
				<tr><td class="print print_link"><a href="javascript:hst_print();"><img src="/img/pages/article/tools_print.gif" alt="" />Printable Version</a></td></tr>
	</table>
	<table style="float:left; width:45%;">
		<tr>
			<td class="print size">
				<a href="mailto:?subject=Forget%20Satoshi%20Nakamoto%20%E2%80%94%20These%20Are%20The%20Names%20In%20Bitcoin%20That%20Actually%20Matter&body=http://www.seattlepi.com/technology/businessinsider/article/Forget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php" /><img src="http://www.newstimes.com/img/pages/article/tools_mail.gif" alt="" />Email This</a>
				<!-- RM 20174
				<a href="#" onclick="popup('/?controllerName=emailThis&sitename=seattlepi&object=article&objectid=5314368&site=34&title=Forget+Satoshi+Nakamoto+%E2%80%94+These+Are+The+Names+In+Bitcoin+That+Actually+Matter&url=http://www.seattlepi.com/technology/businessinsider/article/Forget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php'); return false;"><img src="http://www.newstimes.com/img/pages/article/tools_mail.gif" alt="" />Email This</a>
				-->
			</td>
		</tr>
		<tr>
			<td class="print size"><div class="poplaunch"><div class="toolspop fontpop" id="hst_articletools_fontpop" onmouseover="popShow(this.id);" onmouseout="popHide(this.id);" style="display:none;"><form action="#"><p class="choice"><input type="radio" id="font_radio_georgia" name="font_radio" value="1" onclick="hst_chfont('georgia');" checked="checked" /> <span class="georgia">Georgia <span class="isdefault">(default)</span></span></p><p class="choice"><input type="radio" id="font_radio_verdana" name="font_radio" value="2" onclick="hst_chfont('verdana');" /> <span class="verdana">Verdana</span></p><p class="choice"><input type="radio" id="font_radio_times" name="font_radio" value="3"   onclick="hst_chfont('times');" /> <span class="times">Times New Roman</span></p><p class="choice"><input type="radio" id="font_radio_arial" name="font_radio" value="4"  onclick="hst_chfont('arial');" /> <span class="arial">Arial</span></p></form></div><a href="#" onclick="popShow('hst_articletools_fontpop', this); return false;"><img src="http://www.newstimes.com/img/pages/article/tools_dropdown.gif" alt="" />Font</a></div></td>
			<td class="ad"><div class="hst-microbar">
	<div id="A88" class="ad_deferrable"><script type="text/javascript"> /*<![CDATA[*/ hearstPlaceAd("A88"); /*]]>*/ </script></div>
</div></td>
		</tr>
	</table>
	
	
	
	<div style="clear:both;"></div>
</div><!--/.hst-articletools-->
<!-- e hearst/article/article_tools.tpl -->    
    
	<!-- src/business/templates/hearst/article/relatedStories.tpl -->
<!-- src/business/templates/hearst/article/relatedStories.tpl -->    
        

    <!-- zone ModA -->
    <!-- / zone ModA -->
    




<div class="hst-simplelist">
<div class="header clearfix"><h2>MORE FROM BUSINESS INSDER</h2></div>
<ul>
<li class="item"><h4><a href="http://www.businessinsider.com/mark-zuckerberg-says-photos-are-out-messaging-is-in-2014-7" target="_blank">Zuckerberg Says Photos Are Out, Messaging Is In: 'There Are Only So Many Photos You Want To Share'</a></h4>
</li><li class="item"><h4><a href="http://www.businessinsider.com/mark-zuckerberg-says-payments-wont-come-to-messenger-soon-2014-7" target="_blank">Mark Zuckerberg Got A Little Snippy When Asked Why A &#8216;Payments Guy&#8217; Is Running Messenger</a></h4>
</li><li class="item"><h4><a href="http://www.businessinsider.com/postmates-insurance-update-2014-7" target="_blank">The Startup That Delivers Anything To You In Under An Hour Is Taking Serious Precautions To Protect Its Couriers </a></h4>
</li><li class="item"><h4><a href="http://www.businessinsider.com/apple-iphone-mobile-wallet-2014-7" target="_blank">Apple Is Working On A Way To Pay For Stuff With Your iPhone, And It Could Launch This Year</a></h4>
</li><li class="item last"><h4><a href="http://www.businessinsider.com/twitter-workplace-diversity-numbers-2014-7" target="_blank">Twitter Has A Massive Diversity Problem, And These Two Charts Prove It</a></h4>
</li></ul></div><!--/.hst-simplelist-->
  </div>

<div class="hst-articlepager-report" id="articlepagerreport">Page 1 of 1</div>
<div class="hst-articletext"><div id="fontprefs_top" class="georgia md">

  <div id="text" class="entry-content">
                    <p><img style="float:right;" src="http://static3.businessinsider.com/image/5320cc0469bedde21cfc4e66-979-734/andreas-antonopoulos.png" border="0" alt="andreas antonopoulos" /></p><p>The Bitcoin community was nearly unanimous in expressing its displeasure at <a href="http://www.businessinsider.com/newseek-reporter-findsf-bitcoin-inventor-2014-3?utm_source=hearst&utm_medium=referral&utm_content=allverticals">the controversial Newsweek story</a> purporting to out "Satoshi Nakamoto," the anonymous person who coded and created the famous digital currency.</p>
<p>The common critique is that it doesn't matter who's behind Bitcoin, that the technology is so transformative for how money moves around the world that the genie's already out of the proverbial bottle.</p>
<p>The identity of the creator has nothing to do with a Bitcoiner's current task at hand &mdash; to educate people on Bitcoin and figure out new ways to apply it.</p>
<p>Whoever dreamed up Bitcoin certainly seems to want nothing to do with mainstream attention, and that's okay. There are plenty of public-facing people in the Bitcoin world more than happy to play cryptocurrency advocate. Let's skip the speculation over who Satoshi is and instead look to people who are happy to talk about Bitcoin and its implications.</p><h3>Andreas Antonopoulos, Blockchain.info</h3>
<img src="http://static1.businessinsider.com/image/5320c74c69bedd6878fc4e6d-400-300/andreas-antonopoulos-blockchaininfo.jpg" alt="" />
<p><p>Antonopoulos is the Chief Security Officer of Blockchain.info, a popular Bitcoin wallet service that also records every single Bitcoin transaction as it happens. He's also likely the closest thing there is to a Bitcoin missionary, traveling from conference to conference to educate people on what Bitcoin is and how it works.</p>
<p>Many of his presentations are on YouTube. <a href="https://www.youtube.com/watch?v=2b8RDFuLuRc">This one in particular</a> is especially accessible.</p>
<p>When there began to be <a href="http://www.businessinsider.com/arguments-newsweeks-bitcoin-story-2014-3?utm_source=hearst&utm_medium=referral&utm_content=allverticals">doubts that Newsweek had properly identified</a> "Satoshi Nakamoto" (it suggested that he was actually Dorian Nakamoto of Temple City, Calif.), Antonopoulos started a Bitcoin fundraiser to send money to Nakamoto for his troubles in being hounded by the media. Antonopoulos raised <a href="https://blockchain.info/address/1Dorian4RoXcnBv9hnQ4Y2C1an6NJ4UrjX">44.64 Bitcoins worth over $28,000</a>.</p></p>
<br/><br/><h3>Gavin Andresen, Bitcoin Foundation</h3>
<img src="http://static3.businessinsider.com/image/5320d1acecad043871fc4e6f-400-300/gavin-andresen-bitcoin-foundation.jpg" alt="" />
<p><p>Andresen is Chief Scientist of the Bitcoin Foundation, a non-profit organization that exists to&nbsp;"standardize, protect and promote the use of&nbsp;Bitcoin&nbsp;cryptographic money for the benefit of users worldwide."</p>
<p><span>He became project lead for Bitcoin in May 2010 and has communicated directly with "Satoshi Nakamoto" in the past, but only &nbsp;ever via email and Web forums.&nbsp;</span>Andresen has rather high-level access to the Bitcoin network as well, holding an "alert key" that lets him send messages about the status of the Bitcoin network that enables those messages to appear in every single Bitcoin client as users run them.</p>
<p>&nbsp;</p></p>
<br/><br/><h3>Barry Silbert, Bitcoin Investment Trust</h3>
<img src="http://static5.businessinsider.com/image/4f5bb05feab8eae54800002e-400-300/barry-silbert-bitcoin-investment-trust.jpg" alt="" />
<p><p>Consider the <a href="http://mycrains.crainsnewyork.com/40under40/profiles/2013/barry-silbert">following two sentences from Crain's</a>:</p>
<p style="padding-left: 30px;">At 13, Barry Silbert was making a business out of trading baseball cards. He spent his bar mitzvah money on stocks, and at 17 was the youngest person to pass the Series 7 stockbrokers' exam.</p>
<p>Barry Silbert knows a thing or two about money, so it's only natural that the CEO and founder of SecondMarket, a place for buying and selling illiquid assets, would also be interested in Bitcoin. Silbert <a href="http://www.bitcointrust.co/">founded the Bitcoin Investment Trust</a>,&nbsp;<span>a "private, open-ended trust that is invested exclusively in Bitcoin &amp; derives its value solely from the price of Bitcoin." His business exists to help Bitcoin speculators buy, store, and protect large numbers of Bitcoins.</span></p></p>
<br/><br/></br><b><a href="http://www.businessinsider.com/names-to-know-in-bitcoin-2014-3?utm_source=hearst&utm_medium=referral&utm_content=allverticals#fred-ehrsam-coinbase-4">See the rest of the story at Business Insider</a></b><p><b>See Also:</b></p><ul><li><a href="http://www.businessinsider.com/check-out-the-worlds-first-traveling-bitcoin-atm-2014-3?utm_source=hearst&utm_medium=referral&utm_content=allverticals">Check Out The World's First Traveling Bitcoin ATM</a></li><li><a href="http://www.businessinsider.com/google-ventures-bill-maris-sold-house-next-to-tim-cook-2014-3?utm_source=hearst&utm_medium=referral&utm_content=allverticals">Google Ventures Founder Sells Palo Alto Home Next To Tim Cook's For $3 Million [PHOTOS]</a></li><li><a href="http://www.businessinsider.com/worlds-largest-bitcoin-mining-operation-2014-3?utm_source=hearst&utm_medium=referral&utm_content=allverticals">What It's Like Inside The World's Largest Bitcoin Mining Operation</a></li></ul>
      	  	
  </div>
  
  <script type="text/javascript">
  jQuery(function($) {
    $('#text').paginator('.hst-articlepager', $('.hst-articlebox').height());
  });
  </script>
  


            <!-- usfeed.hearst.articles -->
      <script type="text/javascript">
          var ord = window.ord || Math.floor(Math.random() * 1e16);
          document.write('<script type="text/javascript" src="http://ad.doubleclick.net/N3910/adj/usfeed.hearst.articles;sz=5x5;ord=' + ord + '?"><\/script>');
      </script>
      <noscript>
          <a href="http://ad.doubleclick.net/N3910/jump/usfeed.hearst.articles;sz=5x5;ord=1406142833?"><img src="http://ad.doubleclick.net/N3910/ad/usfeed.hearst.articles;sz=5x5;ord=1406142833?" width="5" height="5" /></a>
      </noscript>
  </div></div><!--/.hst-articletext-->
</div><!--/nlg wrapper-->

<div class="hst-articlefooter">
<!-- hearst/article/article_tools_2.tpl  -->



	<!-- temporary inline style below, don't judge me! -->
	<div class="hst-articletools2">
	    <!-- Use on sfgate -->
		<div class="arbox print first">
			<a href="javascript:hst_print();"><img src="/img/pages/article/tools_print.gif" alt="" style="vertical-align: middle;" /> Printable Version</a>
		</div>
		<div class="arbox print">
			<a href="mailto:?subject=Forget%20Satoshi%20Nakamoto%20%E2%80%94%20These%20Are%20The%20Names%20In%20Bitcoin%20That%20Actually%20Matter&body=http://www.seattlepi.com/technology/businessinsider/article/Forget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php" /><img src="http://www.newstimes.com/img/pages/article/tools_mail.gif" alt="" style="vertical-align: middle;" /> Email This</a>
			<!-- RM 20174
			<a href="#" onclick="popup('/?controllerName=emailThis&sitename=seattlepi&object=article&objectid=5314368&site=34&title=Forget+Satoshi+Nakamoto+%E2%80%94+These+Are+The+Names+In+Bitcoin+That+Actually+Matter&url=http://www.seattlepi.com/technology/businessinsider/article/Forget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php'); return false;"><img src="/img/pages/article/tools_mail.gif"  alt="" style="vertical-align: middle;" /> Email This</a>
			-->
		</div>
		
		
		<style type="text/css">
		    .fb_iframe_wrap_hdn .fb_iframe_widget span,  .fb_iframe_wrap_hdn .fb_iframe_widget iframe {
		        width: 92px !important;
		    }
		</style>
		
		
		<div class="arbox facebook fb_iframe_wrap_hdn">
		
		<div class="fb-share-button" data-href="http%3A%2F%2Fwww.seattlepi.com%2Ftechnology%2Fbusinessinsider%2Farticle%2FForget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php" data-type="button_count" ></div>
		
		</div>
		<div class="arbox">
			<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.seattlepi.com/technology/businessinsider/article/Forget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php?cmpid=twitter" data-count="horizontal" data-via="SeattlePI">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		</div>
		<div class="arbox">
			<g:plusone size="medium" href="http://www.seattlepi.com/technology/businessinsider/article/Forget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php?cmpid=gplus"></g:plusone>
		</div>
		
		<script type="text/javascript">
			(function() {
				var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				po.src = 'https://apis.google.com/js/plusone.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			})();
		</script>
		
		<!-- CFREE-6902
		<div class="arbox last">
			
			<script type="text/javascript">
				//hack to fix linkedin JS bug
				window.name=window.name || "";
			</script>
			
			<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
			<script type="IN/Share" data-counter="right"></script>
		</div>
		-->
		<div class="arbox last">
			<!-- Pin it -->
			
			<a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.seattlepi.com%2Ftechnology%2Fbusinessinsider%2Farticle%2FForget-Satoshi-Nakamoto-These-Are-The-Names-5314368.php&media=http://www.seattlepi.com/img/pages/article/opengraph_default.png&description=Forget+Satoshi+Nakamoto+%E2%80%94+These+Are+The+Names+In+Bitcoin+That+Actually+Matter" 
			data-pin-do="buttonPin" data-pin-config="beside" data-pin-zero="true"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a>
	        
	   </div>
	</div><!--/.hst-articletools2-->


<!-- e hearst/article/article_tools_2.tpl -->

        <div class="hst-freeform hdnce-e hdnce-item-19254"><!-- mid:freeform.19254 -->
          <div class="OUTBRAIN" data-widget-id="AR_2" data-ob-template="SeattlePI" ></div>
<script type="text/javascript" src="http://widgets.outbrain.com/outbrain.js"></script>
      </div>
  
        <div class="hst-freeform hdnce-e hdnce-item-19255"><!-- mid:freeform.19255 -->
          <div class="OUTBRAIN" data-widget-id="AR_3" data-ob-template="SeattlePI" ></div>
<script type="text/javascript" src="http://widgets.outbrain.com/outbrain.js"></script>
      </div>
  


      <!-- comments get dynamically inserted here -->

<div id="comments" class="hdn-comments">
              <!-- /templates/hearst/home/modal_signin_form.tpl -->
        <script type="text/javascript">HDN.onLoginSuccess = initRegLinks</script>
        <script src="/js/hdn/utils/jquery.placeholder.js"></script>
        <script type="text/javascript">
            jQuery(function(){
                $("#modal_signin_close").bind("click",function(){
                    $('#modal_signin_div').hide();
                    return false;
                });
                $('#modal_signin_div .checkbox-div').bind("click",function(){
                    if ($(this).text() == "X") {
                        $(this).text("");
                        $('#modal_signin_rememberme').removeAttr('checked');
                    } else {
                        $(this).text("X");
                        $('#modal_signin_rememberme').attr('checked', 'checked');
                    }
                    return false;
                });
                $('input, textarea').placeholder();
            })
        </script>
        <div id="modal_signin_div" class="signin">
            <div id="modal_signin_error_div" style="display:none;"></div>
            <form data-ajax="false" id="modal_signin_form" action="http://reg.seattlepi.com/api/session" method="post">
                <a href="http://reg.seattlepi.com/signup/" class="form-link">Need to Register?</a>
                <button id="modal_signin_close">X</button>
                <div class="line_separator"></div>
                <input type="text" id="modal_signin_user" name="email" selected autocapitalize="off" value="" data-mini="true" placeholder="EMAIL" />
                <input type="password" id="modal_signin_password" name="password" selected autocapitalize="off" value="" data-mini="true" placeholder="PASSWORD" />
                <div class="checkbox-container">
                    <div class="checkbox-div"></div>
                    <input type="checkbox" id="modal_signin_rememberme" name="remember_me" value="1" class="custom-check" />
                    <label for="modal_signin_rememberme" data-corners="false">Remember Me</label>
                </div>
                <input name="commit" type="submit" value="Sign-in" data-mini="true" data-corners="false" class="submit-btn"></p>
                <a href="http://reg.seattlepi.com/forgot_password" class="form-link forgot">Forgot your password?</a>
            </form>
        </div>
        <!-- e /templates/hearst/home/modal_signin_form.tpl -->

    <div id="hdn-vf-comments"></div>
  </div>  
</div>

<!-- e hearst/article/types/story.tpl -->    </div><!--/.span-21b-->
    <!-- templates/hearst/article/types/story_right.tpl  -->

<div class="span-10 last">

    <!-- src/business/widgets/hearst/collection/widget.tpl -->
                         <div class="hide-rss-link hdnce-e hdnce-collection-26576-promo_vertical"><!-- hearst/collections/promo_vertical.tpl -->
<!-- collection.promo_vertical.26576 -->
	<!-- templates/design/collection/promo_vertical/default.tpl  -->
<div class="hst-featurepromo curvebox_grayedge"><div class="corner2"><div class="corner3"><div class="corner4">

	<!-- collections/promo_vertical_body.tpl -->    
<span>
        <a type="application/rss+xml" target="_blank" class="collection-rss-link" href="/local/collectionRss/News-alert-promo-26576.php">

                <img src="/img/utils/rss_icon.png" alt="Click to View RSS Feed" />

        </a>

</span>

                                                
                         
                                        <ul class="clearfix">
                                        
                                        <li class="item">


                                
                        

                        
                                
                                <h4><a class="hdnce-e hdnce-link-21147"  href="http://www.seattlepi.com/newsletters/item/Newsletters-Index-5262.php">Sign up for seattlepi.com news alerts</a></h4>

                                <div class="detail">

                                        

                                        

                                                                        <p class="more">                                                                                                                            </p>

                                
                                </div>

                                </li>

                        
                                        </ul>
<!-- e promo_vertical_body.tpl -->
</div></div></div></div><!--/.hst-featurepromo-->
<!-- e templates/design/collection/promo_vertical/default.tpl --><!-- e hearst/collections/promo_vertical.tpl -->
</div>    


<!-- e src/business/widgets/hearst/collection/widget.tpl -->        
    
<!--<div class="hst-subscribepromo">
	<h2></h2>
</div>-->

    
    <!-- hearst/ads/medium_rectangle_ad_first.tpl -->

<div id="hst-mediumrectangle1" class="hst-mediumrectangle clearfix">
<div id="A300" class="ad_deferrable"><script type="text/javascript"> /*<![CDATA[*/ hearstPlaceAd("A300"); /*]]>*/ </script></div>
</div>
<!-- e medium_rectangle_ad_first.tpl --> 

    
        <div class="hst-freeform hdnce-e hdnce-item-6929"><!-- mid:freeform.6929 -->
          <div class="ndn_embed" data-config-widget-id="7675" data-config-type="VideoLauncher/Slider300x250" data-config-tracking-group="90003" data-config-site-section="seattlepi_biz_non_sty"></div>
      </div>
  
        <div class="hst-freeform hdnce-e hdnce-item-19252"><!-- mid:freeform.19252 -->
          <div class="OUTBRAIN" data-widget-id="SB_1" data-ob-template="SeattlePI" ></div>
<script type="text/javascript" src="http://widgets.outbrain.com/outbrain.js"></script>
      </div>
  <!-- src/business/widgets/hearst/collection/widget.tpl -->
                         <div class="hide-rss-link hdnce-e hdnce-collection-37792-headline_list_article"><!-- collections/headline_list_article.tpl -->
<!-- collection.headline_list_article.37792 -->
<div class="hst-headlinelist hst-headlinelist-article"><div class="edge2"><div class="edge3"><div class="edge4">
    <div class="header clearfix">
    <!-- widgets/hearst/moduleHeader/widget.tpl -->
                   <h2><span class="first-word">Today's</span> top headlines</h2>
        <!-- e widgets/hearst/moduleHeader/widget.tpl -->    </div>
    <ul>
                    <li class="item">
                <h4><a   href="/news/crime/article/Seattle-police-Homeless-arrested-most-for-pot-5641661.php">Seattle police: Homeless, black males most-ticketed for pot</a></h4>
                <!-- subitem_timestamp.tpl --><!-- e subitem_timestamp.tpl -->            </li>
                    <li class="item">
                <h4><a   href="/news/article/Rain-won-t-extinguish-wildfires-5641379.php">Huge wildfire now half contained</a></h4>
                <!-- subitem_timestamp.tpl --><!-- e subitem_timestamp.tpl -->            </li>
                    <li class="item">
                <h4><a class="hdnce-e hdnce-blogPost-1405753"  href="http://blog.seattlepi.com/seattle911/2014/07/23/police-arrest-man-who-pulled-knife-during-homophobic-rant-in-capitol-hill/">Homophobic ranter arrested with knives</a></h4>
                <!-- subitem_timestamp.tpl --><!-- e subitem_timestamp.tpl -->            </li>
                    <li class="item">
                <h4><a class="hdnce-e hdnce-blogPost-1405798"  href="http://blog.seattlepi.com/bigscience/2014/07/23/morning-people-more-likely-to-sin-at-night/">'Morning people' more likely to sin at night</a></h4>
                <!-- subitem_timestamp.tpl --><!-- e subitem_timestamp.tpl -->            </li>
                    <li class="item">
                <h4><a class="hdnce-e hdnce-link-27625"  href="http://blog.seattlepi.com/football/2014/07/23/seahawks-receiver-sidney-rice-retiring-from-nfl/">Seahawks' Rice retires</a></h4>
                <!-- subitem_timestamp.tpl --><!-- e subitem_timestamp.tpl -->            </li>
                    <li class="item">
                <h4><a   href="/national/article/Viral-video-of-North-Korea-s-Kim-Jong-un-dancing-5641596.php">NKorea's Kim Jong-un angered by viral video</a></h4>
                <!-- subitem_timestamp.tpl --><!-- e subitem_timestamp.tpl -->            </li>
                    <li class="item">
                <h4><a   href="/local/connelly/article/Obama-on-the-political-money-trail-briefed-by-5639037.php">Obama visits Seattle to raise political cash</a></h4>
                <!-- subitem_timestamp.tpl --><!-- e subitem_timestamp.tpl -->            </li>
                    <li class="item last">
                <h4><a   href="/local/transportation/article/Getting-There-Bridge-openings-a-confusing-turn-5639416.php">Why do sailboats hold up bridge traffic?</a></h4>
                <!-- subitem_timestamp.tpl --><!-- e subitem_timestamp.tpl -->            </li>
            </ul>
</div></div></div></div><!--/.hst-headlinelist-article -->
<!-- e headline_list_article.tpl -->
</div>    


<!-- e src/business/widgets/hearst/collection/widget.tpl -->
<!-- hearst/home/mostPopular.tpl -->



            <div class="hst-mostpopular tab-set"><div class="edge2"><div class="edge3"><div class="edge4 clearfix">
        <!-- hearst/home/most_popular_header.tpl -->
            <ul class="nav-tabs clearfix">
                        <li><a class="mostread" href="#"><span>Most Read</span></a></li>
                                           
        </ul>
    <!-- e hearst/home/most_popular_header.tpl -->

                                <div class="content-tab"><ol>
                                    <li>
                        <!-- src hearst/home/most_popular_title_link.tpl -->
<a href="/national/article/Viral-video-of-North-Korea-s-Kim-Jong-un-dancing-5641596.php" title="Viral video of North Korea's Kim Jong-un dancing angers supreme leader">Viral video of North Korea's Kim Jong-un dancing angers supreme leader</a>
<!-- e src hearst/home/most_popular_title_link.tpl -->
                        <span style="display: none;">1</span>
                    </li>
                                    <li>
                        <!-- src hearst/home/most_popular_title_link.tpl -->
<a href="http://blog.seattlepi.com/football/2014/07/23/seahawks-receiver-sidney-rice-retiring-from-nfl/" title="Seattle Seahawks receiver Sidney Rice retiring from NFL">Seattle Seahawks receiver Sidney Rice retiring from NFL</a>
<!-- e src hearst/home/most_popular_title_link.tpl -->
                        <span style="display: none;">2</span>
                    </li>
                                    <li>
                        <!-- src hearst/home/most_popular_title_link.tpl -->
<a href="http://blog.seattlepi.com/football/2014/07/22/sports-illustrated-seahawks-are-no-1-because-russell-wilson-is-more-trustworthy-than-colin-kaepernick/" title="Sports Illustrated: Seahawks are No. 1 because Russell Wilson is more trustworthy than Colin Kaepernick">Sports Illustrated: Seahawks are No. 1 because Russell Wilson is more trustworthy than Colin Kaepernick</a>
<!-- e src hearst/home/most_popular_title_link.tpl -->
                        <span style="display: none;">3</span>
                    </li>
                                    <li>
                        <!-- src hearst/home/most_popular_title_link.tpl -->
<a href="/lifestyle/article/The-Onion-exposes-Seattle-peeling-away-layers-to-5642019.php" title="The Onion exposes Seattle, peeling away the layers to our self-absorbed heart">The Onion exposes Seattle, peeling away the layers to our self-absorbed heart</a>
<!-- e src hearst/home/most_popular_title_link.tpl -->
                        <span style="display: none;">4</span>
                    </li>
                                    <li>
                        <!-- src hearst/home/most_popular_title_link.tpl -->
<a href="http://blog.seattlepi.com/seattle911/2014/07/23/police-arrest-man-who-pulled-knife-during-homophobic-rant-in-capitol-hill/" title="Police arrest man who pulled knife during homophobic rant in Capitol Hill">Police arrest man who pulled knife during homophobic rant in Capitol Hill</a>
<!-- e src hearst/home/most_popular_title_link.tpl -->
                        <span style="display: none;">5</span>
                    </li>
                                    <li>
                        <!-- src hearst/home/most_popular_title_link.tpl -->
<a href="http://blog.seattlepi.com/bigscience/2014/07/23/morning-people-more-likely-to-sin-at-night/" title="‘Morning people’ more likely to sin at night, and vice-versa">‘Morning people’ more likely to sin at night, and vice-versa</a>
<!-- e src hearst/home/most_popular_title_link.tpl -->
                        <span style="display: none;">6</span>
                    </li>
                                    <li class="last">
                        <!-- src hearst/home/most_popular_title_link.tpl -->
<a href="http://blog.seattlepi.com/techblog/2014/07/23/comcast-memo-retention-rep-from-hell-did-what-we-trained-him-to-do/" title="Comcast memo: Retention rep from hell ‘did what we trained him to do’">Comcast memo: Retention rep from hell ‘did what we trained him to do’</a>
<!-- e src hearst/home/most_popular_title_link.tpl -->
                        <span style="display: none;">7</span>
                    </li>
                
            </ol></div>
                    
        </div></div></div></div>
        <!-- Social Activity for SeattlePI -->
        
            
            <script type="text/javascript">
            // <![CDATA[
             $('.tab-set').rot(1);
            // ]]>
            </script>
            

    
<!--e hearst/home/mostPopular.tpl -->  
    <!-- hearst/ads/medium_rectangle_ad_second.tpl -->

<div id="hst-mediumrectangle2" class="hst-mediumrectangle clearfix">
<div id="B300" class="ad_deferrable"><script type="text/javascript"> /*<![CDATA[*/ hearstPlaceAd("B300"); /*]]>*/ </script></div>
</div>
<!-- e medium_rectangle_ad_second.tpl -->
    
    <!-- hearst/ads/medium_rectangle_ad_third.tpl -->

<div id="hst-mediumrectangle3" class="hst-mediumrectangle clearfix">
<div id="S300" class="ad_deferrable"><script type="text/javascript"> /*<![CDATA[*/ hearstPlaceAd("S300"); /*]]>*/ </script></div>
</div>
<!-- e medium_rectangle_ad_third.tpl -->
</div><!--/.span-10-->

<!-- e templates/hearst/article/types/story_right.tpl  --></div><!--/.faux-21-->
<!-- e templates/design/article/story_page.tpl -->                            
    </div><!--/.content-->
    


<script>
    var HDN = HDN || {};
  
    HDN.ping( {
        "id": 5314368,
        "site": "seattlepi",
        "type": "article"
    });
    $(document).ready(function () {
        return hst_get_fprefs(this);
    });
</script>




<!-- src/business/templates/hearst/common/footer.tpl -->
    <!-- src/business/templates/hearst/common/site_footer.tpl -->
    <!-- THIRDPARTY FOOTER MARKER --><!-- DONT REMOVE -->
    <div class="hst-sitefooter clearfix">

        <!-- Begin Hearst Ad -->
        <div id="B728" class="footer_banner">
            <script type="text/javascript">/*<![CDATA[*/hearstPlaceAd("B728");/*]]>*/</script>
        </div>
        <!-- End Hearst Ad -->
									
					<!-- hearst/item/standalone.tpl -->
<!-- mid:freeform.4250 -->
<style type="text/css">
.hst-articletext ul { padding-left: 24px; list-style-type: disc; padding-bottom: 1em;}
.hst-articletext ol { padding-left: 24px; list-style-position: outside; padding-bottom: 1em; }
.hst-articletext li { padding-left: 16px; }
.hst-articlebox ul { padding-left: 16px; list-style-type: disc; padding-bottom: 1em; font-size: 12px; }
.hst-articlebox ol { padding-left: 16px; list-style-position: outside; padding-bottom: 1em; font-size: 12px;}
.hst-articlebox li { padding-left: 8px; font-size: 12px; line-height: 120%;}
.hst-articlebox p { font-size: 12px; line-height: 120%;}
.hst-gallerypreview ul {padding-left: 0;}
.hst-gallerypreview li { padding-left: 0;}
div.last div.hst-freeform {overflow: visible;}
</style>
<link rel="stylesheet" href="http://extras.seattlepi.com/tmpl/mainfooter.css" type="text/css" />

<div class="footer">
	<div id="piBottomInfo">	
		<p><b>Reader Services:</b> <a href="http://reg.seattlepi.com/login/">My account</a> | <!-- <a href="http://m.seattlepi.com">Mobile</a>--> <a href="" onClick="hdnToggleMobile(); return false;">Mobile</a> | <a href="/rss/">RSS feeds</a> | <a href="/twitter/">Follow us on Twitter</a> | <a href="/twitter/">Facebook</a> | <a href="/newsletters/">E-mail newsletters</a></p>
		<p><b>Company Info:</b> <a href="http://hearstmediaservices.com/market/seattle/">Advertise online</a> | <a href="/pistaff/">Contact us</a> | <a href="/pisubmit">Send us tips</a> | <a href="/pijobs/">Job openings</a> | <a href="/facts/">About the P-I</a> | <a href="http://www.hearst.com">Hearst Corp.</a> | <a href="/terms/">Terms of use</a> | <a href="http://www.seattlepi.com/privacy/">Privacy policy</a> | <a href="http://www.seattlepi.com/privacy/#caprivacyrights">Your California Privacy Rights</a> | <a href="/advertising/">About our ads</a></p>	
		<p><b>Advertising Services:</b> <a href="http://www.localedgemedia.com">SEO</a> by LocalEdge | <a href="http://www.metrix4media.com">PPC Management</a> by Metrix4Media | <a href="http://www.aboutads.info/choices/"><span>Ad Choices <img src="http://extras.chron.com/i/adchoices.png" width="14" height="18" style="margin-bottom:-5px;" /> </span> </a></p>
	</div>
	<div id="piFoot"><p>Send comments to <a href="mailto:newmedia@seattlepi.com">newmedia@seattlepi.com</a></p></div>
</div>
<style>.hst-feed {display:block !important; text-align:right; width:97px; margin:-60px 0 0 0;}</style>
						
		<p>&#169; 2014 Hearst Seattle Media, LLC<br />
<img src="/img/modules/sitefooter/hearst_logo.png" class="png" alt="Hearst Newspapers" /><!-- src/business/templates/hearst/common/feed.tpl -->

<span class="hst-feed">
	<a class="hst-rss-share" href="/rss"><img src="/img/icons/share/rss.gif"></a> &nbsp;&nbsp;

        	
	<!-- there is a bizobject set -->
        

	<span class="quadOne"></span>
	
                    <a href="http://add.my.yahoo.com/rss?url=http://www.seattlepi.com/rss/feed/Breaking-news-from-Seattle-237.php"><img src="/img/icons/share/myyahoo.gif"></a>
        
	
    
</span>


<!-- e src/business/templates/hearst/common/feed.tpl --></p>
		

		 </div><!--/.hst-sitefooter--></div><!--/.container--> 



<!-- /src/business/templates/hearst/common/opengraph_load.tpl -->
    <div id="fb-root"></div>
  
  <script type="text/javascript">
  //the window.name is a hack to fix errors in the actual facebook.js file
  window.name=window.name || "";
    window.fbAsyncInit = function() {
      FB.init({
	appId      : '177356725623403', // App ID
	channelURL : 'http://www.seattlepi.com/channel.html', // Channel File
	status     : true, // check login status
	cookie     : true, // enable cookies to allow the server to access the session
	oauth      : true, // enable OAuth 2.0
	xfbml      : true  // parse XFBML
      });
      
            		
	// Additional initialization code
	FB.Event.subscribe('comment.create', function(response) {	  
	    HDN.comment_ping( {
	      "id": 5314368,
	      "site": "seattlepi",
	      "type": "article"
	    });      
	});
	
            
    };
    // Load the SDK Asynchronously
    (function(d){
       var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
       js = d.createElement('script'); js.id = id; js.async = true;
       js.src = "//connect.facebook.net/en_US/all.js";
       d.getElementsByTagName('head')[0].appendChild(js);
     }(document));
    
  </script>
  
  
<!-- /src/business/templates/hearst/common/outbrain_silent_tag.tpl -->



<script type="text/JavaScript">
    var link = 'http://www.businessinsider.com/names-to-know-in-bitcoin-2014-3?utm_source=hearst&utm_medium=referral&utm_content=allverticals';
    var OB_permalink= link;
    var OB_Template="SeattlePI";
    var OB_widgetId= 'TR_1';
    var OB_langJS ='http://widgets.outbrain.com/lang_en.js';

    if ( typeof(OB_Script)!='undefined' )
        OutbrainStart();
    else
    {
        var OB_Script = true;
        var str = "<script src='http://widgets.outbrain.com/outbrainWidget.js'; type='text/javascript'></"+"script>";
        document.write(str);
    }
</script>

    <!-- templates/hearst/home/viafouraFooterJS.tpl -->
<script>

    (function (v, s) {
        v.type = 'text/javascript';
        v.async = !0;
        v.src = location.protocol !== 'https:' ? '//cdn.viafoura.net/vf.js' : '//api.viafoura.com/app/js/vf.js';
        s.parentNode.insertBefore(v, s)
    }(document.createElement('script'), document.getElementsByTagName('script')[0]));


    $(document).ready(function () {
        if ($('#hdn-vf-comments').length) {HDN.authOnReady('free',false)}
        HDN.getBlogCommentCount();
    });

</script>
<!-- e templates/hearst/home/viafouraFooterJS.tpl -->

<!-- ux/seattlepi/hearst/common/footer_bottom.tpl -->

<div id="BF_WIDGET_1">&nbsp;</div>
<script type="text/javascript">
(function( ){
BF_WIDGET_JS=document.createElement("script"); BF_WIDGET_JS.type="text/javascript";
BF_WIDGET_SRC="http://ct.buzzfeed.com/wd/UserWidget?u=seattlepi.com&to=1&or=vb&wid=1&cb=" + (new Date()).getTime();
setTimeout(function() {document.getElementById("BF_WIDGET_1").appendChild(BF_WIDGET_JS);BF_WIDGET_JS.src=BF_WIDGET_SRC},1);
})();
</script>

<!-- e ux/seattlepi/hearst/common/footer_bottom.tpl -->


    <script type="text/javascript" src="/external/js/global.bottom.r5.17.1.3.js"></script>

<script src="http://widget.perfectmarket.com/seattlepi/load.js"></script>


  <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-3.newrelic.com","licenseKey":"3fd06eaac1","applicationID":"147157","transactionName":"MwQBZ0RXV0NTVhBdDgpONkFfGVBeVlAcGhEMEQ==","queueTime":0,"applicationTime":900,"ttGuid":"","agentToken":"","userAttributes":"","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-411.min.js"}</script></body>
</html><!-- e site_footer.tpl -->

<!-- e src/business/templates/hearst/common/footer.tpl --><!-- hearst/article/main.tpl -->
