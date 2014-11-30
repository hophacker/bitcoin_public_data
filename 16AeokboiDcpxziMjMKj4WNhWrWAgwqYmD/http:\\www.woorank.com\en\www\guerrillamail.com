http://www.woorank.com/en/www/guerrillamail.com
HTTP/1.1 200 OK
Server: nginx
Date: Thu, 24 Jul 2014 13:03:06 GMT
Content-Type: text/html; charset=UTF-8
Connection: close
X-Powered-By: PHP/5.3.10-1ubuntu3.11
Set-Cookie: PHPSESSID=mg4k19j979aiflcd7kflg8nbs0; expires=Thu, 24-Jul-2014 13:13:06 GMT; path=/; domain=.woorank.com
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0
Pragma: no-cache
Set-Cookie: language=en; expires=Thu, 24-Jul-2014 14:09:46 GMT; path=/; domain=.woorank.com
Set-Cookie: ws_rep_view=guerrillamail.com; expires=Sun, 24-Aug-2014 13:03:06 GMT; path=/
Set-Cookie: ws_rep_date=2014-07-24+13%3A03%3A06; expires=Sun, 24-Aug-2014 13:03:06 GMT; path=/

    
<!DOCTYPE html>
<html xml:lang="en" lang="en" xmlns:fb="http://ogp.me/ns/fb#">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQUOUVdQGwYBXFFTBw=="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e){function n(t,e,n){n||(n={});for(var r=o[t],a=r&&r.length||0,s=n[i]||(n[i]={}),u=0;a>u;u++)r[u].apply(s,e);return s}function r(t,e){var n=o[t]||(o[t]=[]);n.push(e)}var o={},i="nr@context";e.exports={on:r,emit:n}},{}],2:[function(t){function e(t,e,n,i,s){return u?u-=1:r("err",[s||new UncaughtException(t,e,n)]),"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(6),i=t(5),a=window.onerror,s=!1,u=0;t("loader").features.push("err"),window.onerror=e,NREUM.noticeError=n;try{throw new Error}catch(d){"stack"in d&&(t(1),t(2),"addEventListener"in window&&t(3),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&t(4),s=!0)}i.on("fn-start",function(){s&&(u+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&u>0&&(u-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:5,2:4,3:3,4:6,5:1,6:14,handle:"D5DuLP",loader:"G9z0Bl"}],3:[function(t){function e(t){r.inPlace(t,["addEventListener","removeEventListener"],"-",n)}function n(t){return t[1]}var r=t(1),o=(t(3),t(2));if(e(window),"getPrototypeOf"in Object){for(var i=document;i&&!i.hasOwnProperty("addEventListener");)i=Object.getPrototypeOf(i);i&&e(i);for(var a=XMLHttpRequest.prototype;a&&!a.hasOwnProperty("addEventListener");)a=Object.getPrototypeOf(a);a&&e(a)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&e(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=e["nr@wrapped"]?t[1]=e["nr@wrapped"]:e["nr@wrapped"]=t[1]=r(e,"fn-"):"function"==typeof e.handleEvent&&r.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:15,2:1,3:14}],4:[function(t){var e=(t(3),t(1)),n=t(2);e.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=e(t[0],"fn-")})},{1:15,2:1,3:14}],5:[function(t){function e(t){var e=t[0];"string"==typeof e&&(e=new Function(e)),t[0]=n(e,"fn-")}var n=(t(3),t(1)),r=t(2);n.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",e)},{1:15,2:1,3:14}],6:[function(t){function e(){o.inPlace(this,s,"fn-")}function n(t,e){o.inPlace(e,["onreadystatechange"],"fn-")}function r(t,e){return e}var o=t(1),i=t(2),a=window.XMLHttpRequest,s=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];window.XMLHttpRequest=function(t){var n=new a(t);try{i.emit("new-xhr",[],n),o.inPlace(n,["addEventListener","removeEventListener"],"-",function(t,e){return e}),n.addEventListener("readystatechange",e,!1)}catch(r){try{i.emit("internal-error",r)}catch(s){}}return n},window.XMLHttpRequest.prototype=a.prototype,o.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",r),i.on("send-xhr-start",n),i.on("open-xhr-start",n)},{1:15,2:1}],7:[function(t){function e(){function e(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function n(t){var n=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;u>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!n.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){n.status=t.status;var a=t.responseType,d="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,f=e(d);if(f&&(r.rxSize=f),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;r.cbTime=this.cbTime,o("xhr",[n,r])}}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}t("loader").features.push("xhr");var o=t("handle"),i=t(1),a=t(5),s=["load","error","abort","timeout"],u=s.length,d=t(2);t(3),t(4),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=n,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,n){var r=this.metrics,o=t[0],i=this;if(r&&o){var d=e(o);d&&(r.txSize=d)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof n.onload))&&i.end(n)}catch(e){try{a.emit("internal-error",e)}catch(r){}}};for(var f=0;u>f;f++)n.addEventListener(s[f],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+d(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+d(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)&&e()},{1:8,2:11,3:3,4:6,5:1,handle:"D5DuLP",loader:"G9z0Bl"}],8:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],D5DuLP:[function(t,e){function n(t,e){var n=r[t];return n?n.apply(this,e):(o[t]||(o[t]=[]),void o[t].push(e))}var r={},o={};e.exports=n,n.queues=o,n.handlers=r},{}],11:[function(t,e){function n(t){if(!t||"object"!=typeof t&&"function"!=typeof t)return-1;if(t===window)return 0;if(o.call(t,"__nr"))return t.__nr;try{return Object.defineProperty(t,"__nr",{value:r,writable:!0,enumerable:!1}),r}catch(e){return t.__nr=r,r}finally{r+=1}}var r=1,o=Object.prototype.hasOwnProperty;e.exports=n},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&u&&u.body){p.proto="https"===c.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=u.createElement("script");e.src=p.proto+t.agent,u.body.appendChild(e)}}function r(){"complete"===u.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=window,u=s.document,d="addEventListener",f="attachEvent",c=(""+location).split("?")[0],p=e.exports={offset:i(),origin:c,features:[]};u[d]?(u[d]("DOMContentLoaded",o,!1),s[d]("load",n,!1)):(u[f]("onreadystatechange",r),s[f]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}],14:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],15:[function(t,e){function n(t,e,r,s){function nrWrapper(){try{var n,a=u(arguments),d=this,f=r&&r(a,d)||{}}catch(c){i([c,"",[a,d,s],f])}o(e+"start",[a,d,s],f);try{return n=t.apply(d,a)}catch(p){throw o(e+"err",[a,d,p],f),p}finally{o(e+"end",[a,d,n],f)}}return a(t)?t:(e||(e=""),nrWrapper[n.flag]=!0,nrWrapper)}function r(t,e,r,o){r||(r="");var i,s,u,d="-"===r.charAt(0);for(u=0;u<e.length;u++)s=e[u],i=t[s],a(i)||(t[s]=n(i,d?s+r:r,o,s,t))}function o(t,e,n){try{s.emit(t,e,n)}catch(r){i([r,t,e,n])}}function i(t){try{s.emit("internal-error",t)}catch(e){}}function a(t){return!(t&&"function"==typeof t&&t.apply&&!t[n.flag])}var s=t(1),u=t(2);e.exports=n,n.inPlace=r,n.flag="nr@wrapper"},{1:1,2:14}]},{},["G9z0Bl",2,7]);</script>

                <title>guerrillamail.com | Website Review for guerrillamail.com | WooRank.com</title>
        <meta property="og:title" content="guerrillamail.com | Website Review for guerrillamail.com | WooRank.com" />
        <meta name="twitter:title" content="guerrillamail.com | Website Review for guerrillamail.com | WooRank.com">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@woorank">
        <meta name="twitter:domain" content="woorank.com">
        <meta name="twitter:creator" content="@woorank">

        <meta name="twitter:app:id:ipad" content="595645104‎">
        <meta name="twitter:app:name:ipad" content="WooRank SEO Tool">

                <meta property="og:image" content="http://www.woorank.com/assets/img/wolf-home-teach-full.png" />
        <meta name="twitter:image:src" content="http://www.woorank.com/assets/img/wolf-home-teach-full.png">
                <meta name="description" content="Website Review of guerrillamail.com: SEO, traffic, visitors and competitors of www.guerrillamail.com" />
        <meta property="og:description" content="Website Review of guerrillamail.com: SEO, traffic, visitors and competitors of www.guerrillamail.com" />
                <link rel="canonical" href="http://www.woorank.com/en/www/guerrillamail.com" />
                <link rel="alternate" hreflang="en" href="http://www.woorank.com/en/www/guerrillamail.com" />
                <link rel="alternate" hreflang="es" href="http://www.woorank.com/es/www/guerrillamail.com" />
                <link rel="alternate" hreflang="fr" href="http://www.woorank.com/fr/www/guerrillamail.com" />
                <link rel="alternate" hreflang="de" href="http://www.woorank.com/de/www/guerrillamail.com" />
                <link rel="alternate" hreflang="pt" href="http://www.woorank.com/pt/www/guerrillamail.com" />
                <link rel="alternate" hreflang="nl" href="http://www.woorank.com/nl/www/guerrillamail.com" />
                <link href="http://d14pug4vc9kzip.cloudfront.net/assets/style/review.css?crc=-245443001" rel="stylesheet" type="text/css"  />        <link rel="shortcut icon" href="http://d36ne2v4p3kvwa.cloudfront.net/assets/img/favicon.png?v=3" type="image/png" />
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script type="text/javascript">var ac_vars = [];</script>
    </head>
    <body lc="u" lang="en" class="review lang-en" itemscope itemtype="http://schema.org/WebPage">

    <div id="top">
  <header>
        <div id="lang-container">
    <span>en</span>
    <nav>
                        <a href="/es/www/guerrillamail.com">es</a>
                            <a href="/fr/www/guerrillamail.com">fr</a>
                            <a href="/de/www/guerrillamail.com">de</a>
                            <a href="/pt/www/guerrillamail.com">pt</a>
                            <a href="/nl/www/guerrillamail.com">nl</a>
                </nav>
    <meta itemprop="inLanguage" content="English" />
</div>
        <div id="login-container">
        <button class="link" value="login">Login&nbsp;&nbsp;<i class="icon-woouser icon-white"></i></button>
    </div>
    <div class="head-logo">
      <a title="WooRank | Website Review - SEO Tool" href="http://www.woorank.com/">WooRank | Website Review - SEO Tool</a>
    </div>
    <nav id="menu-container">
      <a href="http://www.woorank.com/en/www/guerrillamail.com" >Reviews</a><a href="#" class="current">guerrillamail.com</a>    </nav>
  </header>
</div>
<section id="siu-modal-container" class="hidden">
  <section class="overlay"></section>
  <div class="boxes">
    <div class="signin">
      <header>
        <h2>Login</h2>
        <a class="siu-modal-closer" title="Close" href="#"><span>x</span></a>
      </header>

      <div class="modal-content">
        <form id="login-form" action="https://www.woorank.com/en/login/check" method="post">
          <p class="error-msg">
            <span class="default">All fields are mandatory</span>
            <span class="mail hidden">Invalid email address</span>
            <span data-lang="Did you mean" class="suggest hidden"></span>
            <span class="server hidden"></span>
          </p>
          <div class="input">
            <label for="login-mail"><i class="icon-envelope-big"></i></label>
            <input tabindex="1" type="text" id="login-mail" class="mailcheck mail" placeholder="Email" autofocus name="email">
          </div>

          <p class="error-msg">
            <span class="default">All fields are mandatory</span>
            <span class="server hidden"></span>
          </p>
          <div class="input">
            <label for="login-pass"><i class="icon-lock-big"></i></label>
            <input tabindex="2" type="password" id="login-pass" class="password" placeholder="Password" name="password">
          </div>

          <div class="password-reset">
            <a href="https://www.woorank.com/en/login/forgot">Forgot your password?</a>
          </div>

          <div class="submit">
            <button tabindex="3" type="submit" class="button login-btn">
              <span class="flag validate"><i class="icon-ok-big"></i></span>
              <span class="flag load hidden"><i class="icon-spinner"></i></span>
              Login            </button>
          </div>

          <div class="gen-error hidden"></div>
        </form>
      </div>

      <p class="centered"><a class="show-signup" href="#">Don't have an account? Sign up here.</a></p>
    </div>
    <div class="signup">
      <header>
        <h2>Create a FREE account and start your 7-day FREE trial</h2>
        <h2 class="oops-message hidden">Oops! WooRank guest users are limited to running 1 Website Review per week. Start a free test now.</h2>
        <a class="siu-modal-closer" title="Close" href="#"><span>x</span></a>
      </header>

      <div class="modal-content">
        <form id="signup-form" action="https://www.woorank.com/en/register/check" method="post">
          <p class="error-msg">
            <span class="default">All fields are mandatory</span>
            <span class="mail hidden">Invalid email address</span>
            <span data-lang="Did you mean" class="suggest hidden"></span>
            <span class="server hidden"></span>
          </p>
          <div class="input">
            <label for="signup-mail"><i class="icon-envelope-big"></i></label><input tabindex="1" type="text" id="signup-mail" class="mailcheck mail" placeholder="Email">
          </div>

          <p class="error-msg">
            <span class="default">All fields are mandatory</span>
            <span class="server hidden"></span>
          </p>
          <div class="input">
            <label for="signup-pass"><i class="icon-lock-big"></i></label><input tabindex="2" type="password" id="signup-pass" class="password" placeholder="Choose a password">
          </div>

          <div class="submit">
            <button tabindex="3" type="submit" id="signup-button" class="button">
              <span class="flag validate"><i class="icon-ok-big"></i></span>
              <span class="flag load hidden"><i class="icon-spinner"></i></span>
              Start Your Free Trial            </button>
          </div>

          <div class="gen-error hidden"></div>
        </form>
      </div>
      <p class="centered"><a class="show-signin" href="#">Already have an account? Log in here.</a></p>
    </div>
    <div class="choise">
      <header>
          <h2>Are you working on:</h2>
      </header>

      <div class="modal-content">
        <p><a href="https://www.woorank.com/en/register/plan/v2pro" data-type="single site" class="link-choise">
          <span class="button">
            <span class="flag check"><i class="icon-checkbox-big"></i></span>
            <span class="flag validate hidden"><i class="icon-ok-big"></i></span>
            one website          </span>
          <img alt="single website" src="/assets/img/single-website.png" width="184" height="134" />
        </a></p>

        <p><a href="https://www.woorank.com/en/register/plan/v2prm" data-type="multiple sites" class="link-choise">
          <span class="button">
            <span class="flag check"><i class="icon-checkbox-big"></i></span>
            <span class="flag validate hidden"><i class="icon-ok-big"></i></span>
            multiple websites          </span>
          <img alt ="multiple websites" src="/assets/img/multiple-website.png" width="223" height="163" />
        </a></p>
      </div>
    </div>
  </div>
</section>
    <div id="content" itemprop="mainContentOfPage">
        <div id="grid">
            <!--[if lt IE 9]>
                <div id="browser-not-supported"><p>Unfortunately your browser is not supported by WooRank. We strongly recommend you to switch to <a href="http://www.mozilla.org/firefox/" target="_blank" rel="nofollow" title="get Firefox">Firefox</a> or <a href="http://chrome.google.com/" target="_blank" rel="nofollow" title="get Chrome">Chrome</a> for an optimal experience. You can also upgrade to the <a href="http://www.microsoft.com/ie" target="_blank" rel="nofollow" title="upgrade">latest version</a> of your current browser. </p></div>
            <![endif]-->

            <form id="generate-report" class="ajax-generate-report generate-form to-validate unlogged" action="/en/report/generate" method="post">
<div class="gen-container"><div id="gen-bar-g-plus">
            <div class="g-plusone" data-href="http://www.woorank.com"></div>
            <script type="text/javascript">
              (function() {
                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                po.src = 'https://apis.google.com/js/platform.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
              })();
            </script>
        </div>    <div class="gen-inputs ">
        <div id="gen-inputs-container">
            <div>
                <input class="required" placeholder="My-website.com" id="generate-report-input" type="text" name="url" value="guerrillamail.com"/>
                <div class="comp-button">
                                        <i class="icon-plus" onClick="_gaq.push(['_trackEvent', 'Free', 'competitors-interest-en', $('#generate-report-input').val()]);">Add competitors</i>
                    <i class="icon-minus hidden">close</i>
                </div>
            </div>
                            <div>
                    <p class="comp-convert"><a class="start-trial" data-plan="choise" href="#" onClick="_gaq.push(['_trackEvent', 'Free', 'competitors-interest-click-en', $('#generate-report-input').val()]);">Take a plan to add <span class="hand-write-2 orange">competitors</span>.</a><p>
                </div>
                    </div>
    </div>
    <div class="button-container">
                    <button type="submit" class="black submit gen-report" id="generate" value="free" name="generate" onSubmit="_gaq.push(['_trackEvent', 'Free', 'report-gen-en', $('#generate-report-input').val()]);" onClick="_gaq.push(['_trackEvent', 'Free', 'report-gen-en', $('#generate-report-input').val()]);">
                <span>Website Review</span>
                <span class="wait">Please wait...</span>
            </button>
            </div>
</div>
</form>

            <div id="left-nav">
    <div id="flying">
                    <div class="nav-section">
              <nav>
                                  <a class="current inpage-link" href="#dashboard">
                    <span class="icn icn-chevron-up"></span><!--
                 --><span>Return to top</span>
                  </a>
                              </nav>
            </div>
                        <div class="nav-section">
                  <nav>
                    <a class="section-title inpage-link" href="#module-section-title-optimize" >Optimize</a>
                                            <a class="seo inpage-link" href="#module-seo">
                          <span class="icn icn-magnifier"></span><!--
                       --><span>SEO</span><!--
                       --><span class="icn icn-chevron-right"></span>
                        </a>
                                              <a class="mobile inpage-link" href="#module-mobile">
                          <span class="icn icn-phone"></span><!--
                       --><span>Mobile</span><!--
                       --><span class="icn icn-chevron-right"></span>
                        </a>
                                              <a class="usability inpage-link" href="#module-usability">
                          <span class="icn icn-hand"></span><!--
                       --><span>Usability</span><!--
                       --><span class="icn icn-chevron-right"></span>
                        </a>
                                              <a class="technologies inpage-link" href="#module-technologies">
                          <span class="icn icn-chevrons"></span><!--
                       --><span>Technologies</span><!--
                       --><span class="icn icn-chevron-right"></span>
                        </a>
                                        </nav>
              </div>
                          <div class="nav-section">
                  <nav>
                    <a class="section-title inpage-link" href="#module-section-title-promote" >Promote</a>
                                            <a class="social inpage-link" href="#module-social">
                          <span class="icn icn-like"></span><!--
                       --><span>Social</span><!--
                       --><span class="icn icn-chevron-right"></span>
                        </a>
                                              <a class="local_visibility inpage-link" href="#module-local_visibility">
                          <span class="icn icn-map-pin"></span><!--
                       --><span>Local</span><!--
                       --><span class="icn icn-chevron-right"></span>
                        </a>
                                        </nav>
              </div>
                          <div class="nav-section">
                  <nav>
                    <a class="section-title inpage-link" href="#module-section-title-measure" >Measure</a>
                                            <a class="visitors inpage-link" href="#module-visitors">
                          <span class="icn icn-visitor"></span><!--
                       --><span>Visitors</span><!--
                       --><span class="icn icn-chevron-right"></span>
                        </a>
                                        </nav>
              </div>
                </div>
</div>

<div id="right-panel" class=" free-rev" itemscope itemtype="http://schema.org/WebApplication" >
    <link itemprop="additionalType" content="http://schema.org/Product" />
<div id="young-message" class="message hidden">
    <span class="icn icn-conversation">  </span>
    We are collecting data and creating a personalized Marketing Plan for guerrillamail.com. Please allow up to 24 hours for all of your data to be processed.</div>
<meta itemprop="thumbnailUrl" content="http://sitescreens.woorank.com/guerrillamail.com.png" />
<meta itemprop="url" content="guerrillamail.com" />
<div id="dashboard" class="hreview">
            <link href="http://www.woorank.com/assets/mustache/report/parts.mustache?v=9" rel="template" name="parts" class="mustache-to-load" id="parts-mustache-tpl"/>
        <div class="module-content">
        <div id="dashboard-content" class="" itemprop="review" itemscope itemtype="http://schema.org/Review">

            <div id="dashboard-state">
                <div id="holder"></div>
<div id="score-regular" class="dashboard-score rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
    <div class="score-c generic-tooltip value simple-tooltip" data-placement="left" rel="tooltip" data-original-title="<p>The WooRank is a dynamic grade on a 100-point scale that represents your Internet Marketing Effectiveness at a given time.</p><p>Improve your score by working on the red and orange criteria in your Review. <br />
<br />
Check the green criteria to find out how your score is being positively affected. Gray criteria are notable, but do not affect your score.</p>">
        <span id="score-value">72<span class="decimal">.9</span></span>
        <span class="value-title hidden" title="4.3"/>
    </div>
    <meta itemprop="ratingValue" content="4.3" />
    <meta itemprop="bestRating" content="5" />
    <span class="best hidden"><span class="value-title" title="5"/></span>
</div>            </div>

            <div id="dashboard-screenshot">
                                    <img src="http://sitescreens.woorank.com/guerrillamail.com.png" itemprop="image" alt="Screenshot for guerrillamail.com" width="202" height="114" />
                                <div class="screen"></div>
                            </div>

            <div id="dashboard-site">
                <h1 class="item" itemprop="name" ><span class="reviewer hidden">WooRank</span>
                <a class="fn js-ext-link fit-text"
                   href="ext://guerrillamail.com"
                   itemprop="itemReviewed"
                   rel="nofollow"
                   target="_blank"
                   title="guerrillamail.com"
                   data-url="guerrillamail.com">
                    <span class="domain">guerrillamail.com</span>
                </a>
                </h1>
                <meta itemprop="author" content="WooRank" />
                <meta itemprop="dateCreated" content="2014-03-17" />
                                    <div class="generated-time dtreviewed">
                        <span class="moment">2014-03-17 12:06:00</span>
                        <span class="value-title hidden" title="2014-03-17"></span>
                    </div>
                <div id="dashboard-bars" class="dashboard-bars">
    <div id="green-bar-counter" class="section">
        <span class="icn icn-bullet-result-plain"></span><span class="icn icn-bullet-result-check"></span>
        <h3>Passed</h3>
        <span class="bar"><span class="percent" style="width:0%"></span></span>
    </div>
    <div id="orange-bar-counter" class="section">
        <span class="icn icn-bullet-result-plain"></span><span class="icn icn-bullet-result-warning"></span>
        <h3>To Improve</h3>
        <span class="bar"><span class="percent" style="width:0%"></span></span>
    </div>
    <div id="red-bar-counter" class="section">
        <span class="icn icn-bullet-result-plain"></span><span class="icn icn-bullet-result-cross"></span>
        <h3>Errors</h3>
        <span class="bar"><span class="percent" style="width:0%"></span></span>
    </div>
</div>
            </div>
        </div>
    </div>
    <div id="dashboard-footer">
      <div class="item">
      <a href="#" class="inline-modal-opener grey" >
        Embed      </a>
      <div class="inline-modal">
        <div class="inner">
          <h3>Take a plan to unlock this feature</h3>
          <a href="" value="https://www.woorank.com/en/register/plan/v2pro/optimize" data-type="optimize" data-plan="choise" class="start-trial button orange">
            Start Your 7-Day Free Trial          </a>
        </div>
      </div><span class="inline-modal-pointer-bg"></span><span class="inline-modal-pointer"></span>    </div><!--
 --><div class="item">
      <a href="#" class="inline-modal-opener grey" >
        Download as PDF      </a>
      <div class="inline-modal">
        <div class="inner">
          <h3>Take a plan to unlock this feature</h3>
          <a href="" value="https://www.woorank.com/en/register/plan/v2pro/optimize" data-type="optimize" data-plan="choise" class="start-trial button orange">
            Start Your 7-Day Free Trial          </a>
        </div>
      </div><span class="inline-modal-pointer-bg"></span><span class="inline-modal-pointer"></span>    </div><!--
 --><div class="item">
      <a href="#" class="inline-modal-opener grey" >
        Download as Slides      </a>
      <div class="inline-modal">
        <div class="inner">
          <h3>Take a plan to unlock this feature</h3>
          <a href="" value="https://www.woorank.com/en/register/plan/v2pro/optimize" data-type="optimize" data-plan="choise" class="start-trial button orange">
            Start Your 7-Day Free Trial          </a>
        </div>
      </div><span class="inline-modal-pointer-bg"></span><span class="inline-modal-pointer"></span>    </div><!--
 --><div class="item item-right item-link">
      <a href="#" class="inline-modal-opener" >
        Share<span class="icn icn-chevron-down"></span>
      </a>
      <div class="inline-modal">
        <div class="inner">
          <ul>
            <li id="short-url"><a href="#" id="short-label" ><span class="icn icn-link"></span>Get short URL</a><pre id="short-val" class="hidden simple-tooltip" title="Copy the URL to share this review"></pre></li>
            <li><a class="facebook" href="http://www.facebook.com/sharer/sharer.php?s=100&p[images][0]=http%3A%2F%2Fstatic1.woorank.com%2Fassets%2Fimg%2Fshade.png&p[url]=http%3A%2F%2Fwww.woorank.com%2Fen%2Fwww%2Fguerrillamail.com&p[title]=I+just+got+a+quick+guide+to+improving+my+website%21&p[summary]=Check+out+my+%23WooRank+website+review%21+Want+to+see+how+your+website+ranks%2C+too%3F+Make+one+for+your+site+at+www.WooRank.com+today%21" rel="nofollow" target="_blank"><span class="icn icn-facebook"></span>Share on Facebook</a></li><li><a class="twitter" href="http://twitter.com/home?status=Check+out+my+%40WooRank+website+review%21+woo.lv%2Fe%2Fguerrillamail.com+Make+one+for+your+site+at+WooRank.com+today%21+%23WooRank" rel="nofollow" target="_blank"><span class="icn icn-twitter"></span>Share on Twitter</a></li><li><a class="googleplus" href="https://plus.google.com/share?url=http%3A%2F%2Fwww.woorank.com%2Fen%2Fwww%2Fguerrillamail.com" rel="nofollow" target="_blank"><span class="icn icn-google-plus"></span>Share on Google+</a></li><li><a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&source=WooRank&url=http%3A%2F%2Fwww.woorank.com%2Fen%2Fwww%2Fguerrillamail.com&title=I+just+got+a+quick+guide+to+improving+my+website%21&summary=Check+out+my+%23WooRank+website+review%21+Want+to+see+how+your+website+ranks%2C+too%3F+Make+one+for+your+site+at+www.WooRank.com+today%21" rel="nofollow" target="_blank"><span class="icn icn-linkedin"></span>Share on LinkedIn</a></li>          </ul>
        </div>
      </div><span class="inline-modal-pointer-bg"></span><span class="inline-modal-pointer"></span>    </div>
  </div>

</div>
<div id="report-priorities" class="module-lookalike">
    <div class="module-content">
        <h2>Top priorities for guerrillamail.com :</h2>
        <div class="prio-list">
            <ol></ol>
                            <div class="show-more-task">
                    <a href="https://www.woorank.com/en/register/plan/v2pro">
                        Show all tasks                        <i class="icon-plus"></i>
                    </a>
                    <i class="icon-arrow-little hidden"></i>
                </div>
                    </div>

                <a class="start-trial relative convert simple-tooltip" data-placement="top" rel="tooltip"
                onClick="_gaq.push(['_trackEvent', 'Report', 'click-view-more-tasks', wooLang + ':v1']);"
                data-plan="choise" data-type="optimize"
                value="https://www.woorank.com/en/register/plan/v2pro/optimize"
                        >
            <p class="big">Improve <br />
guerrillamail.com&nbsp;!</p>
            <p>129 personalized tasks for<br />
online marketing success!</p>
                            <button class="button submit orange no-margin">
                    Start Your Free Trial                </button>
                    </a>
    </div>
</div>
<div id="report-content">
            <div class="module-section" id="module-section-title-optimize">Optimize</div>
        <div class="module" id="module-seo">
            <div class="module-content">
                <h2>SEO</h2>
                            <div id="criterium-related_websites" class="criterium result-0 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Related Websites
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                
                
                <div class="part table ">
                    <table class="">
                        <thead>
                            <tr>
                                <th>URL</th>
                                <th>Pages</th>
                                <th>Backlinks</th>
                                <th>PR</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td><span data-shorturl="/en/www/tempemail.net">http://www.tempemail.net/</span></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr class="">
                                <td><span data-shorturl="/en/www/getairmail.com">http://getairmail.com/</span></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr class="">
                                <td><span data-shorturl="/en/www/mailinator.com">http://mailinator.com/</span></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr class="">
                                <td><span data-shorturl="/en/www/mintemail.com">http://www.mintemail.com/</span></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>This lists the websites related to your domain. Some may be competitors while others may be websites with related content.</p><p>You may be able to use this information to see how your competitors are doing.</p><p>Resource: Use tools to <a rel="nofollow" href="http://semrush.com/?ref=897815339" target="_blank">learn more about your competitors'</a> web marketing strategies.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-page_rank" class="criterium result-0 hidden ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>PageRank
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-3 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="High impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>High impact</span>
                                                </span>
                                                <span class="solvability-3 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Very hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Very hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-title" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">1.4218009478673</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Title
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p                 itemprop="headline">✉ Guerrilla Mail - Disposable Temporary E-Mail Address</p>
                    <p><span class="bold">Length:</span> 54 character(s)</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Great, <a rel="nofollow" href="http://blog.woorank.com/2013/03/10-tips-for-title-tag-optimization/" target="_blank">your title</a> contains between 10 and 70 characters.</p><p>Make sure your title is explicit and contains your <a rel="nofollow" href="http://usabilitygeek.com/15-title-tag-optimization-guidelines-for-usability-and-seo" target="_blank">most important keywords</a>.</p><p>Be sure that each page has a unique title.</p>
                                    </div>
                                    <div class="criterium-quicktips">Check the title of your website</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-description" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">1.4218009478673</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Description
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p                 itemprop="description">Don't want to give them your real email? Use a temporary email. No registration, lasts 60 mins. Protection from Spam</p>
                    <p><span class="bold">Length:</span> 116 character(s)</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p> Great, your <a rel="nofollow" href="http://blog.woorank.com/2013/03/the-importance-of-meta-descriptions/" target="_blank">meta description</a> contains between 70 and 160 characters (spaces included).</p><p><a rel="nofollow" href="http://blog.woorank.com/2014/06/meta-element-a-beguiners-guide/" target="_blank">Meta descriptions</a> allow you to influence how your web pages are described and displayed in search results.</p><p>Ensure that your meta description is explicit and contains your <a rel="nofollow" href="http://googlewebmastercentral.blogspot.com/2007/09/improve-snippets-with-meta-description.html" target="_blank">most important keywords</a>.</p><p>Check your Google&trade; Webmaster Tools for any warning messages on duplicate meta descriptions.</p>
                                    </div>
                                    <div class="criterium-quicktips">Improve the Meta Description</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-headings" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">0.9478672985782</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Headings
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                
                
                <div class="part table ">
                    <table class="">
                        <thead>
                            <tr>
                                <th>H1</th>
                                <th>H2</th>
                                <th>H3</th>
                                <th>H4</th>
                                <th>H5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td>0</td>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part table ">
                    <table class="no-header">
                        <tbody>
                            <tr class="">
                                <td><span class="bold">&lt;H3&gt;</span>  Guerrilla Mail - Disposable Temporary E-Mail Address</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Great, your website is structured using HTML headings (<a rel="nofollow" class="noxref" href="http://www.w3.org/TR/html401/struct/global.html#edef-H1" target="_blank">&lt;H1&gt;</a> to <a rel="nofollow" class="noxref" href="http://www.w3.org/TR/html401/struct/global.html#edef-H6" target="_blank">&lt;H6&gt;</a>).</p><p>Use your keywords in the headings and make sure the first level (&lt;H1&gt;) includes your most important keywords. Never duplicate your title tag content in your header tag.</p><p></p><p>For more ‪<a rel="nofollow" href="http://blog.woorank.com/2013/04/how-to-use-heading-tags-for-seo/" target="_blank">‬effective SEO</a>, use only one &lt;H1&gt; tag per page.</p>
                                    </div>
                                    <div class="criterium-quicktips">Add the important keywords in &lt;H&gt; headings</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-keywords_cloud" class="criterium result-0 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Keywords Cloud
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                
                
                
                
                
                
                
                <div class="part cloud ">
                    <ul class="cloud-container">
                        <li>address<span class="number">7</span></li>
                        <li>email<span class="number">6</span></li>
                        <li>disposable<span class="number">4</span></li>
                        <li>mail<span class="number">4</span></li>
                        <li>guerrilla<span class="number">4</span></li>
                        <li>temporary<span class="number">3</span></li>
                        <li>inbox<span class="number">3</span></li>
                        <li>safe<span class="number">2</span></li>
                        <li>wtf<span class="number">2</span></li>
                        <li>forget<span class="number">2</span></li>
                    </ul>
                </div>
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>This Keyword Cloud provides an idea of your most frequently recurring keywords. They are likely to be the <a rel="nofollow" href="http://blog.woorank.com/2012/10/16-free-keyword-research-tools-seo/" target="_blank">keywords</a> with the greatest probability of ranking high in the search engines.</p> 
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-inpage_keywords" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">3.0805687203791</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Keywords Consistency
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                
                
                <div class="part table ">
                    <table class="">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Keywords</th>
                                <th>Freq</th>
                                <th>Title</th>
                                <th>Desc</th>
                                <th>&lt;H&gt;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td><span class="icon average">Average</span></td>
                                <td>address</td>
                                <td>7</td>
                                <td><span class="icon check">OK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon check">OK</span></td>
                            </tr>
                            <tr class="">
                                <td><span class="icon average">Average</span></td>
                                <td>email</td>
                                <td>6</td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon check">OK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                            </tr>
                            <tr class="">
                                <td><span class="icon average">Average</span></td>
                                <td>disposable</td>
                                <td>4</td>
                                <td><span class="icon check">OK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon check">OK</span></td>
                            </tr>
                            <tr class="">
                                <td><span class="icon good">Good</span></td>
                                <td>mail</td>
                                <td>4</td>
                                <td><span class="icon check">OK</span></td>
                                <td><span class="icon check">OK</span></td>
                                <td><span class="icon check">OK</span></td>
                            </tr>
                            <tr class="">
                                <td><span class="icon average">Average</span></td>
                                <td>guerrilla</td>
                                <td>4</td>
                                <td><span class="icon check">OK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon check">OK</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part table ">
                    <table class="">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Keywords (2 words)</th>
                                <th>Freq</th>
                                <th>Title</th>
                                <th>Desc</th>
                                <th>&lt;H&gt;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td><span class="icon bad">Bad</span></td>
                                <td>email address</td>
                                <td>4</td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                            </tr>
                            <tr class="">
                                <td><span class="icon average">Average</span></td>
                                <td>guerrilla mail</td>
                                <td>4</td>
                                <td><span class="icon check">OK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon check">OK</span></td>
                            </tr>
                            <tr class="">
                                <td><span class="icon bad">Bad</span></td>
                                <td>disposable email</td>
                                <td>2</td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                            </tr>
                            <tr class="">
                                <td><span class="icon average">Average</span></td>
                                <td>temporary e-mail</td>
                                <td>2</td>
                                <td><span class="icon check">OK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon check">OK</span></td>
                            </tr>
                            <tr class="">
                                <td><span class="icon average">Average</span></td>
                                <td>e-mail address</td>
                                <td>2</td>
                                <td><span class="icon check">OK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon check">OK</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part table ">
                    <table class="">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Keywords (3 words)</th>
                                <th>Freq</th>
                                <th>Title</th>
                                <th>Desc</th>
                                <th>&lt;H&gt;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td><span class="icon bad">Bad</span></td>
                                <td>disposable email address</td>
                                <td>2</td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                            </tr>
                            <tr class="">
                                <td><span class="icon average">Average</span></td>
                                <td>disposable temporary e-mail</td>
                                <td>2</td>
                                <td><span class="icon check">OK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon check">OK</span></td>
                            </tr>
                            <tr class="">
                                <td><span class="icon average">Average</span></td>
                                <td>temporary e-mail address</td>
                                <td>2</td>
                                <td><span class="icon check">OK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon check">OK</span></td>
                            </tr>
                            <tr class="">
                                <td><span class="icon average">Average</span></td>
                                <td>mail disposable temporary</td>
                                <td>2</td>
                                <td><span class="icon check">OK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon check">OK</span></td>
                            </tr>
                            <tr class="">
                                <td><span class="icon average">Average</span></td>
                                <td>guerrilla mail disposable</td>
                                <td>2</td>
                                <td><span class="icon check">OK</span></td>
                                <td><span class="icon cross">NOK</span></td>
                                <td><span class="icon check">OK</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>This table highlights the importance of being <a rel="nofollow" href="http://blog.woorank.com/2013/02/how-to-maintain-keyword-consistency/" target="_blank">consistent with your use of keywords</a>. To improve the chance of ranking high in search results with a specific keyword, you should use the most <a rel="nofollow" href="http://wooblog.s3.amazonaws.com/wp-content/uploads/2013/02/wr_blog_keyword_consistency_0c.png" target="_blank">important keywords consistently</a> in your content, title, description, H titles, internal links anchor text and backlinks anchor text.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips">Be more consistent with your keywords</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-images" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">1.0155721056195</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Images
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>We found <strong>7</strong> images on this web page.</p>
                    <p><strong>7</strong> alt attributes are empty or missing.</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                <div class="part list ">
                    <ul>
                        <li class=""><span class="cropable-url">https://img.guerrillamail.com/8/8/2/88204d7bcd59b05566a983720897d8f6.png</span></li>
                        <li class=""><span class="cropable-url">/img/mask-alias.png</span></li>
                        <li class=""><span class="cropable-url">/img/page-loader.gif</span></li>
                        <li class=""><span class="cropable-url">/img/page-loader.gif</span></li>
                        <li class=""><span class="cropable-url">/img/page-loader.gif</span></li>
                        <li class="over-max"><span class="cropable-url">/img/page-loader.gif</span></li>
                        <li class="over-max"><span class="cropable-url">https://www.guerrillamail.com/qr-code.php?t=1391906778&addr=16AeokboiDcpxziMjMKj4WNhWrWAgwqYmD&amount=&label=GuerrillaMail</span></li>
                    </ul>
                
                    <div class="show-links">
                        <a href="#" class="show-more">Show more</a>
                        <a href="#" class="show-less">Show less</a>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Good, most or all of your images have alternative text (<a rel="nofollow" href="http://en.wikipedia.org/wiki/Alt_attribute" target="_blank">the alt attribute</a>).</p><p><a rel="nofollow" href="http://blog.woorank.com/2013/01/image-alt-text-relevant-for-seo-and-usability/" target="_blank">‬‬Alternative text</a> describes your images so they can appear in <a rel="nofollow" href="http://images.google.com/" target="_blank">Google&trade; Images</a> search results.</p>
                                    </div>
                                    <div class="criterium-quicktips">Set a name for all your images</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-text_html_ratio" class="criterium result-3 ">
                                <div class="criterium-head">
                                    <span class="prio-score hidden">15</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Errors">
                                        <span class="icn"></span>Text/HTML Ratio
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>5.1%</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>This page's ratio of text to HTML code is below 15 percent, this means that your website probably needs more text content.</p><p>A ratio between <a rel="nofollow" href="http://blog.woorank.com/2013/03/are-text-to-html-ratios-important/" target="blank">25 and 70 percent is ideal</a>. When it goes beyond that, the page might run the risk of being considered spam.</p><p>As long as the ‪<a rel="nofollow" href="http://blog.woorank.com/2013/01/6-seo-tips-for-website-content/" target="_blank">‬‬content is relevant</a> and gives essential information, it is a plus to have more of it.</p>
                                    </div>
                                    <div class="criterium-quicktips">Write additional content with more keywords</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-indexed_pages" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">6.690697225522</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Indexed Pages
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                
                
                
                <div class="part progressbar ">
                    <p class="title"><span class="color"></span>Google&trade;</p>
                    <div class="content has-title">
                        
                        
                        <span class="bar"><span class="colored-bar" style="width:95%;">665&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="value" data-abs-value="665">665</span></span>
                    </div>
                </div>
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>This is the number of pages on your website that are <a rel="nofollow" href="http://www.google.com/search?q=site:guerrillamail.com" target="_blank">indexed by Google&trade;</a>.</p><p>The more pages that search engines index, the better, as this offers more opportunity for your website to be found.</p><p>A low number (relative to the total number of pages/URLs on your website) probably indicates that your internal link architecture needs improvement and is preventing search engines from crawling all of the pages on your website. You might want to create/check your site's <a rel="nofollow" href="http://blog.woorank.com/2013/03/all-about-xml-sitemaps/" target="_blank">XML sitemap</a> and submit it to Google&trade;. You must also <a rel="nofollow" href="http://blog.woorank.com/2013/03/how-to-build-links-to-your-inner-pages/" target="_blank">build backlinks to your site's internal pages</a> to help Google&trade; bots <a rel="nofollow" href="http://blog.woorank.com/2013/05/11-steps-to-get-your-site-indexed-on-google/" target="_blank">crawl and index</a> your web pages.</p><p>Check <a rel="nofollow" href="https://www.google.com/webmasters/tools" target="_blank">Google&trade; Webmaster Tools</a> under Health and Index Status, to keep track of the status of your site's indexed pages.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips">Write more content</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-inside_pages" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">2.3696682464455</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Internal Pages Analysis
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                
                
                <div class="part table ">
                    <table class="">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Text/HTML</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/about">About GuerrillaMail</a></td>
                                <td>Read about GuerrillaMail and what is temporary email, follow us or contact us</td>
                                <td>17.51%</td>
                            </tr>
                            <tr class="">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/blog/">GuerrillaMail.com</a></td>
                                <td>GuerrillaMail Blog</td>
                                <td>50.75%</td>
                            </tr>
                            <tr class="">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/bitcoin">Bitcoin email sender</a></td>
                                <td>Send and receive bitcoin through email</td>
                                <td>10.3%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p><a rel="nofollow" href="http://www.google.com/support/webmasters/bin/answer.py?hl=en&answer=66359" target="_blank">No duplicate content</a> has been detected on the pages of your website.</p><p>Use <a rel="nofollow" href="http://www.google.com/webmasters/" target="_blank">Google&trade; Webmaster Tools</a> to improve the way search engines index your website.</p>
                                    </div>
                                    <div class="criterium-quicktips">Write unique titles for each page</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-popular_pages" class="criterium result-0 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Popular Pages
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p><a class="js-ext-link" href="ext://www.guerrillamail.com/" rel="nofollow" target="_blank">Guerrilla Mail - Disposable Temporary E-Mail Address</a></p>
                    <p><a class="js-ext-link" href="ext://www.guerrillamail.com/about" rel="nofollow" target="_blank">About GuerrillaMail</a></p>
                    <p><a class="js-ext-link" href="ext://www.guerrillamail.com/blog/" rel="nofollow" target="_blank">Blog - Guerrilla Mail</a></p>
                    <p><a class="js-ext-link" href="ext://www.guerrillamail.com/bitcoin" rel="nofollow" target="_blank">Bitcoin email sender - Guerrilla Mail</a></p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>This lists your website's popular pages.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-google_preview" class="criterium result-0 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Google Preview
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text google-preview">
                    <p>✉ Guerrilla Mail - Disposable Temporary E-Mail Address</p>
                    <p><span class="bold">guerrillamail.com</span>/</p>
                    <p>Don't want to give them your real email? Use a temporary email. No registration, lasts 60 mins. Protection from Spam</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        This is an example of what your title and description will look like in Google&trade; search results.
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-top_ranking_keywords" class="criterium result-0 hidden ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Google&trade; Ranking
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Your website ranks highest with these keywords. </p><p>This data is provided by <a rel="nofollow" href="http://semrush.com/?ref=897815339" target="_blank">SEMRush&trade;</a>.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-links_details" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">1.4218009478673</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>In-Page Links
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>We found a total of 28 link(s) including 0 link(s) to files</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div class="part pie ">
                    <div class="chart-container pie-chart-container chartify-me">
                        <ul class="value value-" title="External Links: NoFollow ">
                            <li>0.1</li>
                        </ul>
                        <ul class="value value-" title="External Links: Passing Juice">
                            <li>1</li>
                        </ul>
                        <ul class="value value-" title="Internal Links">
                            <li>99</li>
                        </ul>
                    </div>
                </div>
                
                
                
                
                
                
                
                <div class="part table ">
                    <table class="links-details">
                        <thead>
                            <tr>
                                <th>Anchor</th>
                                <th>Type</th>
                                <th>Juice</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/" title="http://www.guerrillamail.com/">Image</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/?fgt=1" title="http://www.guerrillamail.com/?fgt=1">Forget Me</a></td>
                                <td>Internal Links</td>
                                <td>noFollow</td>
                            </tr>
                            <tr class="">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/inbox" title="http://www.guerrillamail.com/inbox">Email</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/compose" title="http://www.guerrillamail.com/compose">Compose</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/tools" title="http://www.guerrillamail.com/tools">Tools</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/bitcoin" title="http://www.guerrillamail.com/bitcoin">Bitcoin</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/about" title="http://www.guerrillamail.com/about">About</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/inbox?mail_id=1" title="http://www.guerrillamail.com/inbox?mail_id=1">Welcome to Guerrilla Mail</a></td>
                                <td>Internal Links</td>
                                <td>noFollow</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://twitter.com/share" title="https://twitter.com/share">Tweet</a></td>
                                <td>External Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/bitcoin:16AeokboiDcpxziMjMKj4WNhWrWAgwqYmD" title="http://www.guerrillamail.com/bitcoin:16AeokboiDcpxziMjMKj4WNhWrWAgwqYmD">16AeokboiDcpxziMjMKj4WNhWrWAgwqYmD</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/tos" title="http://www.guerrillamail.com/tos">Terms of Service</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/GuerrillaMailAPI.html" title="http://www.guerrillamail.com/GuerrillaMailAPI.html">API</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/m/" title="http://www.guerrillamail.com/m/">Mobile!</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://grr.la/ryo/guerrillamail.com/edit" title="https://grr.la/ryo/guerrillamail.com/edit">Edit</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/es/" title="http://www.guerrillamail.com/es/">Español</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/fr/" title="http://www.guerrillamail.com/fr/">Français</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/it/" title="http://www.guerrillamail.com/it/">Italiano</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/de/" title="http://www.guerrillamail.com/de/">Deutsch</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/nl/" title="http://www.guerrillamail.com/nl/">Nederlands</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/pt/" title="http://www.guerrillamail.com/pt/">Português</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/ru/" title="http://www.guerrillamail.com/ru/">Русский</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/tr/" title="http://www.guerrillamail.com/tr/">Türkçe</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/uk/" title="http://www.guerrillamail.com/uk/">Українське</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/ar/" title="http://www.guerrillamail.com/ar/">العربية</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/ko/" title="http://www.guerrillamail.com/ko/">한국어</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/jp/" title="http://www.guerrillamail.com/jp/">日本語</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/zh/" title="http://www.guerrillamail.com/zh/">简体中文</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                            <tr class="over-max">
                                <td><a class="js-ext-link" rel="nofollow" target="_blank" href="ext://www.guerrillamail.com/zh-hant/" title="http://www.guerrillamail.com/zh-hant/">繁體中文</a></td>
                                <td>Internal Links</td>
                                <td>Passing Juice</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="show-links">
                        <a href="#" class="show-more">Show more</a>
                        <a href="#" class="show-less">Show less</a>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Limit the number of links to 200 per page. Use <a rel="nofollow" href="http://blog.woorank.com/2013/03/how-can-you-use-the-nofollow-attribute-to-your-advantage/" target="_blank">Nofollow</a> to optimize the <a rel="nofollow" href="http://blog.woorank.com/2013/05/the-flow-of-link-juice/" target="_blank">juice</a> that you want to pass to each link.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-backlinks_counter" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">7.1090047393365</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Backlinks Counter
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                
                
                
                <div class="part progressbar ">
                    
                    <div class="content">
                        
                        
                        <span class="bar"><span class="colored-bar" style="width:100%;">45,600&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="value" data-abs-value="45600">45,600</span></span>
                    </div>
                </div>
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Backlinks are<a rel="nofollow" href='http://www.google.com/search?q="guerrillamail.com"-site:guerrillamail.com' target="_blank"> links that point to your website</a> from other websites. They are like letters of recommendation for your site.</p><p>Since this factor is <a rel="nofollow" href="http://blog.woorank.com/2013/02/backlinking-factors-to-improve-site-seo/" target="_blank">crucial to SEO</a>, you should have <a rel="nofollow" href="http://blog.woorank.com/2013/02/10-link-building-strategies-for-small-businesses/" target="_blank">a strategy</a> to improve the quantity and quality of backlinks.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips">Build more backlinks pointing to your site</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-www_resolve" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">2.3696682464455</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>WWW Resolve
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>This website with and without www redirects to the same page.</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Great, your website directs <a rel="nofollow" class="js-ext-link" href="ext://www.guerrillamail.com" target="_blank">www.guerrillamail.com</a> and <a rel="nofollow" class="js-ext-link" href="ext://guerrillamail.com" target="_blank">guerrillamail.com</a> to the same URL.</p><p><a rel="nofollow" href="http://blog.woorank.com/2013/04/setting-a-preferred-domain/" target="_blank">Redirecting requests</a> from a non-preferred domain is <a href="http://blog.woorank.com/2013/06/duplicate-content-7-ways-to-get-rid-of-it/" target="_blank">important</a> because search engines consider URLs with and without "www" as two different websites.</p>
                                    </div>
                                    <div class="criterium-quicktips">Redirect non-www to www</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-ip_canonicalization" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">0.4739336492891</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>IP Canonicalization
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>Yes</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Good, your website's IP address is forwarding to your website's domain name.</p><p>To check this for your website, enter your IP address in the browser and see if your site loads with the IP address. Ideally, the IP should redirect to your website's URL or to a page from your website hosting provider.</p><p>If it does not redirect, you should do an <a rel="nofollow" href="https://support.google.com/webmasters/answer/93633?hl=en" target="_blank">htaccess 301 redirect</a> to make sure the IP does not get indexed.</p>
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-robots_txt" class="criterium result-3 ">
                                <div class="criterium-head">
                                    <span class="prio-score hidden">30</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Errors">
                                        <span class="icn"></span>Robots.txt
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p><span class="italic">Missing</span></p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Your website doesn't have a <a rel="nofollow" class="js-ext-link" href="ext://guerrillamail.com/robots.txt" target="_blank">robots.txt</a> file - this can be problematic.</p><p>A <a rel="nofollow" href="http://blog.woorank.com/2013/04/robots-txt-a-beginners-guide/" target="_blank">robots.txt file</a> allows you to restrict the access of search engine robots that crawl the web and it can prevent these robots from accessing specific directories and pages. It also specifies where the XML sitemap file is located.</p><p><a rel="nofollow" href="http://tool.motoricerca.info/robots-checker.phtml" target="_blank">Click here</a> to check your robots.txt file for syntax errors.</p>
                                    </div>
                                    <div class="criterium-quicktips">Add a robots.txt file</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-xml_sitemaps" class="criterium result-3 ">
                                <div class="criterium-head">
                                    <span class="prio-score hidden">20</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Errors">
                                        <span class="icn"></span>XML Sitemap
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p><span class="italic">Missing</span></p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Your website does not have an <a rel="nofollow" href="http://blog.woorank.com/2013/03/all-about-xml-sitemaps/" target="_blank">XML sitemap</a> - this can be problematic.</p><p>A sitemap lists URLs that are available for crawling and can include additional information like your site's latest updates, frequency of changes and importance of the URLs. This allows search engines to crawl the site more intelligently.</p><p>We recommend that you<a rel="nofollow" href="http://code.google.com/p/googlesitemapgenerator/" target="_blank"> generate</a> an XML sitemap for your website and submit it to both <a rel="nofollow" href="http://www.google.com/webmasters/tools/" target="_blank">Google&trade; Webmaster Tools</a> and <a rel="nofollow" href="http://www.bing.com/toolbox/webmaster" target="_blank">Bing Webmaster Tools</a>. It is also good practice to specify your <a rel="nofollow" href="http://blogs.creative-jar.com/post/How-to-create-a-robotstxt-file-with-sitemap-location.aspx" target="_blank">sitemap's location</a> in your robots.txt file.</p>
                                    </div>
                                    <div class="criterium-quicktips">Add and Optimize your XML sitemap</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-clean_url" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">0.9478672985782</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>URL Rewrite
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>Perfect, your URLs look clean.</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Great! You have <a rel="nofollow" href="http://blog.woorank.com/2013/05/url-optimization-5-best-practices-for-seo/" target="_blank">clean (user-friendly) URLs</a> which do not contain query strings. <br />Clean URLs are not only <a rel="nofollow" href="http://blog.woorank.com/2013/03/a-guide-to-clean-urls-for-seo-and-usability/" target="_blank">SEO-friendly</a> but are also important for usability.</p>
                                    </div>
                                    <div class="criterium-quicktips">Rewrite your URLs and clean them up.</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-underscores_url" class="criterium result-3 ">
                                <div class="criterium-head">
                                    <span class="prio-score hidden">10</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Errors">
                                        <span class="icn"></span>Underscores in the URLs
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>Yes</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                <div class="part list ">
                    <ul>
                        <li class=""><span class="underscore-url">http://www.guerrillamail.com/inbox?mail_id=1</span></li>
                    </ul>
                
                </div>
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        We have detected <a rel="nofollow" href="http://blog.woorank.com/2013/04/underscores-in-urls-why-are-they-not-recommended/" target="_blank">underscores</a> (these_are_underscores) in this URL and/or in your in-page URLs. You should rather use hyphens (these-are-hyphens) to optimize your SEO. <br /><br />While Google&trade; treats hyphens as word separators, it does not treat underscores as word separators.
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-flash" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">0.4739336492891</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Flash
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>No</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Good, no <a rel="nofollow" href="http://blog.woorank.com/2013/01/how-to-optimize-flash-for-seo/" target="_blank">Flash content</a> has been detected on this page.</p><p>Flash should only be used for specific enhancements. Although Flash content often looks nicer, it cannot be <a rel="nofollow" href="http://support.google.com/webmasters/bin/answer.py?hl=en&answer=72746" target="_blank">properly indexed</a> by search engines. Avoid full Flash websites to maximize SEO.</p><p>This advice also applies to <a rel="nofollow" href="http://en.wikipedia.org/wiki/Ajax_(programming)" target="_blank">AJAX</a>.</p>
                                    </div>
                                    <div class="criterium-quicktips">Use Flash content sparingly</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-frames" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">0.4739336492891</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Frames
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>No</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Great, there are no frames detected on this page.</p><p>Frames can cause problems on your web page because <a rel="nofollow" href="http://www.google.com/support/webmasters/bin/answer.py?hl=en&answer=34445" target="_blank">search engines</a> will not crawl or index the content within them.</p><p>Avoid frames whenever possible and use a <a rel="nofollow" href="http://www.w3.org/TR/REC-html40/present/frames.html#h-16.4." target="_blank">NoFrames tag</a> if you must use them.</p>
                                    </div>
                                    <div class="criterium-quicktips">Check that none of your important content is within a Frame</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-domain_creation" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">2.3696682464455</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Domain 1st Registered
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p                 itemprop="dateCreated">8 years ago</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Your domain is old enough to encourage search engines to give it a higher rank.</p><p><a rel="nofollow" href="http://www.ecreativeim.com/blog/2011/02/is-domain-age-important-for-google-rankings/" target="_blank">Domain age matters</a> to a certain extent and newer domains generally struggle to get indexed and rank high in search results for their first few months (depending on other associated ranking factors).</p>
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-domain_expiration" class="criterium result-3 ">
                                <div class="criterium-head">
                                    <span class="prio-score hidden">50</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Errors">
                                        <span class="icn"></span>Domain Expiration
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>in 5 months</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Do you know that you can register your domain for up to 10 years? By doing so, you will show the world that you are serious about your business.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips">Extend the registration of your domain</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-blog" class="criterium result-3 ">
                                <div class="criterium-head">
                                    <span class="prio-score hidden">10</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Errors">
                                        <span class="icn"></span>Blog
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>We have not found a Blog on this website.</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Your website does not have a blog.</p><p>In this tough and competitive internet marketing world content marketing rules. While publishing your content on other sites might be a good strategy, publishing it on your own site garners more benefits.</p><p>Starting a blog is a great way to <a rel="nofollow" href="http://blog.woorank.com/2013/02/blogging-for-seo-seo-for-your-blog/" target="_blank">boost your SEO</a> and attract qualified visitors.</p><p>Use these <a rel="nofollow" href="http://socialmediatoday.com/wenbryant/508225/10-b2b-tips-promote-your-blog/" target="_blank">great tips</a> to boost the SEO performance of your blog.</p>
                                    </div>
                                    <div class="criterium-quicktips">Consider starting a blog</div>
                            <div class="delimiter"></div></div>
            </div>
        </div>
        <div class="module" id="module-mobile">
            <div class="module-content">
                <h2>Mobile</h2>
                            <div id="criterium-mobile_rendering" class="criterium result-0 hidden ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Mobile Rendering
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>The number of people using the Mobile Web is huge; over <a rel="nofollow" href="http://www.ourmobileplanet.com/en/" target="_blank">75 percent</a> of consumers have access to smartphones. ‪<a rel="nofollow" href="http://blog.woorank.com/2012/11/6-tips-15-free-tools-awesome-mobile-websites/" target="_blank">‬Your website</a> should <a rel="nofollow" href="http://goo.gl/We7mf0" target="_blank">look nice</a> on the most popular mobile devices.<br /><br />Tip: Use an analytics tool to track mobile usage of your website.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-mobile_load_time" class="criterium result-1 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Mobile Load Time
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                
                
                
                <div class="part progressbar ">
                    
                    <div class="content">
                        
                        
                        <span class="bar"><span class="colored-bar" style="width:89%;">Fast&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="value" data-abs-value="0.88727456873114">Fast</span></span>
                    </div>
                </div>
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Try to load your website on a mobile device and measure the download time. If your website takes more than five seconds to download on a mobile device, you will <a rel="nofollow" href="http://cdn.bitrebels.netdna-cdn.com/wp-content/uploads/2011/09/Mobile-Load-Time-vs-Expectations-1.jpg" target="_blank">lose 74 percent of your audience</a>! <br /><br />Mobile usage is growing fast, especially in North America, where it will soon outpace desktop browsing usage. <a rel="nofollow" href="http://blog.woorank.com/2013/02/9-tips-to-optimize-mobile-site-speed/" target="_blank">Make sure your site loads fast</a> and that it looks nice on all types of mobile devices. Be sure to not use Flash, and keep photos and videos to a minimum. <br /><br />Here are <a rel="nofollow" href="https://developers.google.com/speed/docs/best-practices/mobile" target="_blank">two useful tips</a> from Google&trade; for optimizing your mobile site speed.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-mobile_optimization" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">0.9478672985782</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Mobile Optimization
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>This web page is super optimized for Mobile Visitors</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part text checklist">
                    <p><span class="icon grey-missing weak"></span>Mobile CSS</p>
                    <p><span class="icon grey-found"></span>Mobile Redirection</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part text ">
                    <p>Additional mobile optimization techniques:</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part text checklist">
                    <p><span class="icon grey-found weak"></span>Meta Viewport Tag</p>
                    <p><span class="icon grey-missing weak"></span>Apple Icon</p>
                    <p><span class="icon grey-found weak"></span>Flash content</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p><a rel="nofollow" href="http://www.smashingmagazine.com/guidelines-for-mobile-web-development/" target="_blank">Optimize the mobile experience</a> even further with the following options:</p><p><ul><li><a rel="nofollow" href="http://blog.woorank.com/2014/06/how-to-use-css3-media-queries-to-create-a-mobile-version-of-your-website/" target="_blank">Mobile CSS</a></li><li><a rel="nofollow" href="http://www.sitepen.com/blog/2012/05/14/basic-mobile-layout/" target="_blank">Meta Viewport Tag</a></li><li><a rel="nofollow" href="http://blog.woorank.com/2014/06/adding-an-iphoneipad-icon-for-your-website/" target="_blank">Apple Icon</a></li><li><a rel="nofollow" href="http://blog.woorank.com/2014/06/how-to-redirect-mobile-users-on-your-website/" target="_blank">Mobile Redirection</a></li><li><a rel="nofollow" href="http://blog.woorank.com/2014/06/6-reasons-why-you-should-avoid-flash-sites-like-the-plague/" target="_blank">No Flash content</a></li></ul></p>
                                    </div>
                                    <div class="criterium-quicktips">Optimize your website for Mobile browsing</div>
                            <div class="delimiter"></div></div>
            </div>
        </div>
        <div class="module" id="module-usability">
            <div class="module-content">
                <h2>Usability</h2>
                            <div id="criterium-url" class="criterium result-0 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>URL
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>http://guerrillamail.com</p>
                    <p><span class="bold">Length:</span> 13 character(s)</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Keep your URLs short and avoid long domain names when possible.</p><p>A descriptive URL is better recognized by search engines. A user should be able to look at the address bar and make an accurate guess about the content of the page before reaching it (e.g., http://www.mysite.com/en/products).</p><p>Keep in mind that URLs are also an important part of a comprehensive <a rel="nofollow" href="http://www.seomoz.org/blog/11-best-practices-for-urls" target="_blank">SEO strategy</a>. Use clean URLs to <a rel="nofollow" href="http://www.google.com/support/webmasters/bin/answer.py?hl=en&answer=147959" target="_blank">make your site more "crawlable" by Google&trade;</a>.</p><p>Resource: Search for a <a rel="nofollow" href="http://instantdomainsearch.com/" target="_blank">good domain name</a>. If no good names are available, consider a <a rel="nofollow" href="http://sedo.com" target="_blank">second hand domain</a>. To prevent brand theft, you might consider trademarking your domain name.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-favicon" class="criterium result-3 ">
                                <div class="criterium-head">
                                    <span class="prio-score hidden">30</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Errors">
                                        <span class="icn"></span>Favicon
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>No</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Your website does not have a <a rel="nofollow" href="http://en.wikipedia.org/wiki/Favicon" target="_blank">favicon</a>.</p><p>Add a favicon to improve your brand's visibility.</p><p>As a favicon is especially important for users bookmarking your website, make sure it is <a rel="nofollow" href="http://blog.woorank.com/2013/05/favicons-for-branding-and-usability/" target="_blank">consistent with your brand</a>.</p>
                                    </div>
                                    <div class="criterium-quicktips">Add a Favicon</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-not_found_error" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">2.3696682464455</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Custom 404 Page
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>Great, your website has a custom 404 error page.</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Take advantage of the opportunity to provide a <a rel="nofollow" href="http://shankarsoma.wordpress.com/2012/02/24/beautiful-user-friendly-404-error-pages/" target="_blank">beautiful</a> 404 Error Page for your visitors.</p>
                                    </div>
                                    <div class="criterium-quicktips">Customize the 404 error page</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-conversion_form" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">0.9478672985782</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Conversion Forms
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>Great, we found a Conversion Form on this page.</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>There are different types of conversions, such as: getting the email address of your visitors, requesting your visitors to <a rel="nofollow" href="https://www.manycontacts.com/?utm_source=woorank&utm_medium=review&utm_campaign=conversion+form+installed/" target="_blank">fill in a form</a> or closing an online sale. ‪<a rel="nofollow" href="http://blog.woorank.com/2013/04/top-3-sign-up-form-optimization-tips/" target="_blank">‬‬Converting visitors</a> into prospects/clients is probably the most important target for your website. So, it is important that you <a rel="nofollow" href="http://blog.woorank.com/2013/01/15-point-conversion-checklist/" target="_blank">optimize your website</a> to boost conversions.</p>
                                    </div>
                                    <div class="criterium-quicktips">Add a conversion form</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-page_size" class="criterium result-0 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Page Size
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p                 itemprop="fileSize">24.9 KB (World Wide Web <a rel="nofollow" href="https://developers.google.com/speed/articles/web-metrics" target="_blank">average is 320 Kb</a>)</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Two of the main reasons for an increase in page size are images and JavaScript files.</p><p>Page size affects the speed of your website; try to keep your page size below 300 Kb.</p><p>Tip: Use images with a small size and optimize their download with <a rel="nofollow" href="http://en.wikipedia.org/wiki/Gzip" target="_blank">gzip</a>.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-load_time" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">1.4218009478673</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Load Time
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-3 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="High impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>High impact</span>
                                                </span>
                                                <span class="solvability-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>0.32 second(s) (76.87 kB/s)</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Your website is fast. Well done.</p><p>Site speed is becoming an <a rel="nofollow" href="http://www.shiftscape.com/website/is-website-speed-important/" target="_blank">important factor</a> for ranking high in Google&trade; search results and enriching the user experience.</p><p>Resources: Check out Google&trade;'s developer tutorials <a rel="nofollow" href="http://code.google.com/speed/articles/" target="_blank">for tips</a> on how to to make your website run faster.</p><p>Monitor your server and receive SMS alerts when your website is down with a <a rel="nofollow" href="http://www.google.com/search?q=Web+Monitoring+services" target="_blank">web monitoring service</a>.</p>
                                    </div>
                                    <div class="criterium-quicktips">Speed-up your website</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-language" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">0.9478672985782</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Language
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p><span class="bold">Declared:</span> <i>English</i></p>
                    <p><span class="bold">Detected: </span><i>English</i></p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Great, you have declared the language.</p><p>Make sure your declared language is the same as the <a rel="nofollow" href="http://www.google.com.au/language_tools" target="_blank">language detected by Google&trade;</a>.</p><p><a rel="nofollow" href="http://www.toprankblog.com/2009/10/top-10-pitfalls-of-international-seo/" target="_blank">Tips</a> for multilingual websites:<ul><li>Define the language of the content in each page's HTML code.</li><li>Specify the language code in the URL as well (e.g., "mywebsite.com/fr/mycontent.html").</li></ul></p>
                                    </div>
                                    <div class="criterium-quicktips">Declare the language used</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-printability_css" class="criterium result-3 ">
                                <div class="criterium-head">
                                    <span class="prio-score hidden">10</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Errors">
                                        <span class="icn"></span>Printability
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>We could not find a Print-Friendly CSS</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>This is a special CSS style sheet which ensures that unnecessary interface designs and images are left out when printing pages from your site, saving the user a lot of ink.</p><p>It is just another way to provide a rich user-experience.</p><p>If you do not have a print style sheet yet, <a rel="nofollow" href="http://webdesign.about.com/cs/css/a/aa042103a.htm" target="_blank">set one up</a>.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-microformats" class="criterium result-3 ">
                                <div class="criterium-head">
                                    <span class="prio-score hidden">30</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Errors">
                                        <span class="icn"></span>Microformats
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>We found 0 type(s) of Microformat</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>This page does not take advantage of Microformats.</p><p><a rel="nofollow" href="http://en.wikipedia.org/wiki/Microformat" target="_blank">A microformat</a> is a technical semantic markup that can be used to better structure the data submitted to search engines.</p><p>Thanks to microformats, Google&trade; regularly <a rel="nofollow" href="http://blog.woorank.com/2012/12/rich-snippets-what-why-and-how-to-implement/" target="_blank">improves</a> its presentation of search results.</p>
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-dublin_core" class="criterium result-3 ">
                                <div class="criterium-head">
                                    <span class="prio-score hidden">10</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Errors">
                                        <span class="icn"></span>Dublin Core
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p><span class="italic">Missing</span></p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>This page does not take advantage of <a rel="nofollow" href="http://en.wikipedia.org/wiki/Dublin_Core" target="_blank">Dublin Core</a>.</p><p>Dublin Core is a set of standard <a rel="nofollow" href="http://blog.woorank.com/2013/04/dublin-core-metadata-for-seo-and-usability/" target="_blank">metadata elements</a> used to describe the contents of a website. It can help with some internal search engines and it does not bloat your code.</p>
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-tld_cybersquating_prevention" class="criterium result-0 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Domain Availability
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                
                
                <div class="part table ">
                    <table class="">
                        <thead>
                            <tr>
                                <th>Domains (<a rel="nofollow" href="http://en.wikipedia.org/wiki/Top-level_domain" target="_blank">TLD</a>)</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td>guerrillamail.net</td>
                                <td>in 5 months</td>
                                <td><span class="icn icn-lock"></span></td>
                            </tr>
                            <tr class="">
                                <td>guerrillamail.org</td>
                                <td>This domain is booked</td>
                                <td><span class="icn icn-lock"></span></td>
                            </tr>
                            <tr class="">
                                <td>guerrillamail.info</td>
                                <td>This domain is booked</td>
                                <td><span class="icn icn-lock"></span></td>
                            </tr>
                            <tr class="">
                                <td>guerrillamail.biz</td>
                                <td>in 3 months</td>
                                <td><span class="icn icn-lock"></span></td>
                            </tr>
                            <tr class="">
                                <td>guerrillamail.eu</td>
                                <td>Available. <a rel="nofollow" href="http://goo.gl/VCKwfl" target="_blank">Book it now!</a></td>
                                <td><span class="icn icn-check"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p><a rel="nofollow" href="http://goo.gl/VCKwfl" target="_blank">Register</a> the various extensions of your domain to protect your brand from cybersquatters.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-typo_cybersquating_prevention" class="criterium result-0 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Typo Availability
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                
                
                <div class="part table ">
                    <table class="">
                        <thead>
                            <tr>
                                <th>Domains (<a rel="nofollow" href="http://en.wikipedia.org/wiki/Top-level_domain" target="_blank">TLD</a>)</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td>fuerrillamail.com</td>
                                <td>Available. <a rel="nofollow" href="http://goo.gl/VCKwfl" target="_blank">Book it now!</a></td>
                                <td><span class="icn icn-check"></span></td>
                            </tr>
                            <tr class="">
                                <td>gyerrillamail.com</td>
                                <td>Available. <a rel="nofollow" href="http://goo.gl/VCKwfl" target="_blank">Book it now!</a></td>
                                <td><span class="icn icn-check"></span></td>
                            </tr>
                            <tr class="">
                                <td>guwrrillamail.com</td>
                                <td>Available. <a rel="nofollow" href="http://goo.gl/VCKwfl" target="_blank">Book it now!</a></td>
                                <td><span class="icn icn-check"></span></td>
                            </tr>
                            <tr class="">
                                <td>gueerillamail.com</td>
                                <td>Available. <a rel="nofollow" href="http://goo.gl/VCKwfl" target="_blank">Book it now!</a></td>
                                <td><span class="icn icn-check"></span></td>
                            </tr>
                            <tr class="">
                                <td>guerrrillamail.com</td>
                                <td>Available. <a rel="nofollow" href="http://goo.gl/VCKwfl" target="_blank">Book it now!</a></td>
                                <td><span class="icn icn-check"></span></td>
                            </tr>
                            <tr class="">
                                <td>guerrillamzil.com</td>
                                <td>Available. <a rel="nofollow" href="http://goo.gl/VCKwfl" target="_blank">Book it now!</a></td>
                                <td><span class="icn icn-check"></span></td>
                            </tr>
                            <tr class="over-max">
                                <td>guerrillamaul.com</td>
                                <td>Available. <a rel="nofollow" href="http://goo.gl/VCKwfl" target="_blank">Book it now!</a></td>
                                <td><span class="icn icn-check"></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="show-links">
                        <a href="#" class="show-more">Show more</a>
                        <a href="#" class="show-less">Show less</a>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p><a rel="nofollow" href="http://goo.gl/VCKwfl" target="_blank">Register</a> the various typos of your domain to protect your brand from cybersquatters.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-whois_privacy" class="criterium result-0 hidden ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Whois Privacy
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Website ownership records are available to the public. Contact your domain provider to request to make your domain records private. Depending on your industry, you may choose to <a rel="nofollow" href="http://www.dailyblogtips.com/stop-using-whois-privacy/" target="_blank">keep your records public</a> in order to increase your website's ownership credibility.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-email_security" class="criterium result-3 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Errors">
                                        <span class="icn"></span>Email Privacy
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>Warning! At least one email address has been found in plain text.</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Malicious bots scrape the web in search of email addresses and plain text email addresses are more likely to be spammed.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips">Hide email addresses to avoid being spammed</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-spam_threats" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">2.3696682464455</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Spam Block
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-3 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Very hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Very hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>Your IP is not Blacklisted in the <a rel="nofollow" href="http://www.stopforumspam.com" target="_blank">Spammer Directory</a>.</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>It is important that your SEO efforts are not tarnished by spammy activities. Take care to avoid forum and blog spam and use best practices when sharing your content.</p><p>In addition, if you send email campaigns or <a rel="nofollow" href="http://blog.woorank.com/2013/01/email-tips-to-avoid-spam-filters-and-5-top-email-marketing-tools/" target="_blank">transactional emails</a>, use professional <a rel="nofollow" href="http://goo.gl/cj2VL" target="_blank">email software</a> to <a rel="nofollow" href="http://mxtoolbox.com/blacklists.aspx" target="_blank">keep your IP clean</a> and improve the deliverability of your emails. </p>
                                    </div>
                                    <div class="criterium-quicktips">Contact Spamcop.net to clean your reputation</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-trust_indicators" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">4.739336492891</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Trust Indicators
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-3 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Very hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Very hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                
                
                
                <div class="part progressbar ">
                    <p class="title"><span class="color"></span>Trust</p>
                    <div class="content has-title">
                        
                        
                        <span class="bar"><span class="colored-bar" style="width:93%;">93%&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="value" data-abs-value="93">93%</span></span>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part progressbar ">
                    <p class="title"><span class="color"></span>Vendor reliability</p>
                    <div class="content has-title">
                        
                        
                        <span class="bar"><span class="colored-bar" style="width:93%;">93%&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="value" data-abs-value="93">93%</span></span>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part progressbar ">
                    <p class="title"><span class="color"></span>Privacy</p>
                    <div class="content has-title">
                        
                        
                        <span class="bar"><span class="colored-bar" style="width:93%;">93%&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="value" data-abs-value="93">93%</span></span>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part progressbar ">
                    <p class="title"><span class="color"></span>Child safety</p>
                    <div class="content has-title">
                        
                        
                        <span class="bar"><span class="colored-bar" style="width:93%;">93%&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="value" data-abs-value="93">93%</span></span>
                    </div>
                </div>
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>This ‪<a rel="nofollow" href="http://blog.woorank.com/2013/01/easy-ways-to-earn-website-visitors-trust/" target="_blank">‬‬data</a> is provided by <a rel="nofollow" href="http://www.mywot.com" target="_blank">WOT&trade;</a>.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-safe_browsing" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">4.739336492891</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Safe Browsing
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-3 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Very hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Very hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>Yes</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Great, your website is safe.</p><p>No evidence of <a href="http://en.wikipedia.org/wiki/Phishing" rel="nofollow" target="_blank">phishing</a> and/or <a rel="nofollow" href="http://www.stopbadware.org/home/webmasters" target="_blank">malware</a> has been detected.</p>
                                    </div>
                                    <div class="criterium-quicktips">Are you a spammer?</div>
                            <div class="delimiter"></div></div>
            </div>
        </div>
        <div class="module" id="module-technologies">
            <div class="module-content">
                <h2>Technologies</h2>
                            <div id="criterium-ip_information" class="criterium result-0 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Server IP
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>198.143.169.10</p>
                    <p                 itemprop="contentLocation"><span class="bold">Server location:</span> <span class="flag us"></span> CHICAGO</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Your server's IP address <a rel="nofollow" href="http://www.seomoz.org/q/how-much-will-changing-ip-addresses-impact-seo" target="_blank">has little impact</a> on your SEO. Nevertheless, try to host your website on a server which is geographically close to your visitors. Search engines take the geolocation of a server into account as well as the server speed. </p><p>Use <a rel="nofollow" href="http://www.dnsstuff.com/tools/" target="_blank">DNSstuff</a> for comprehensive reports on your server.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-technologies" class="criterium result-0 hidden ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Technologies
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Get to know the technologies used for your website. Some codes might slow down your website. Ask your webmaster to take a look at this.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-speed_tips" class="criterium result-2 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">0.4739336492891</span>
                                    <span class="prio-score hidden">4</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="To Improve">
                                        <span class="icn"></span>Speed Tips
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                                <span class="solvability-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>Watch out: your website’s speed could be slightly improved.</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part text ">
                    <p><span class="icon grey-found"></span>Perfect, your server is using a caching method to speed up page display. </p>
                    <p><span class="icon grey-found"></span>Perfect, your website doesn't use nested tables.</p>
                    <p><span class="icon grey-missing"></span>Too bad, your website is using inline styles.</p>
                    <p><span class="icon grey-found"></span>Perfect, your website has few CSS files.</p>
                    <p><span class="icon grey-missing"></span>Too bad, your website has too many JavaScript files (more than 7).</p>
                    <p><span class="icon grey-found"></span>Perfect, your website takes advantage of <a rel="nofollow" href="http://en.wikipedia.org/wiki/Gzip" target="_blank">gzip</a>.</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Website speed has a huge effect on SEO. ‪<a rel="nofollow" href="http://blog.woorank.com/2013/01/20-quick-tips-to-optimize-page-load-time/" target="_blank">‬‬Speed-up your website</a> so search engines will reward you by sending more visitors.<br />Also, conversion rates are far higher for websites that load faster than their slower competitors.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-analytics_technologies" class="criterium result-0 hidden ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Analytics
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Web analytics let you measure visitor activity on your website. You should have at least one analytics tool installed. It is also good to install one extra tool to have a confirmation of the results.</p><p>Analytics Tools: <a rel="nofollow" href="http://www.google.com/analytics/" target="_blank">Google&trade; Analytics</a>, <a rel="nofollow" href="http://www.Quantcast.com" target="_blank">Quantcast&trade;</a>, <a rel="nofollow" href="http://www.SiteCatalyst.com" target="_blank">SiteCatalyst&trade;</a>, <a rel="nofollow" href="http://www.piwik.org" target="_blank">Piwik&trade;</a>, <a rel="nofollow" href="http://www.chartbeat.com" target="_blank">chartbeat&trade;</a>, <a rel="nofollow" href="http://www.getclicky.com" target="_blank">Clicky&trade;</a>, <a rel="nofollow" href="http://www.ClickTale.com" target="_blank">ClickTale&trade;</a>, etc.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-w3c_validity" class="criterium result-3 ">
                                <div class="criterium-head">
                                    <span class="prio-score hidden">10</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Errors">
                                        <span class="icn"></span>W3C Validity
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p><span class="bold first-letter-cap">Invalid:</span> 0 Errors, 0 Warning(s)</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Use valid markup that contains no errors. Syntax errors can make your page difficult for search engines to index.</p><p>To find the detected errors, run the <a rel="nofollow" href="http://validator.w3.org/check?uri=guerrillamail.com" target="_blank">W3C validation service,</a> or check <a rel="nofollow" href="http://validator.nu/?doc=http%3A%2F%2Fguerrillamail.com" target="_blank">Validator.nu</a> to make sure you don't miss an error.</p><p><a rel="nofollow" href="http://www.w3.org/Consortium/" target="_blank">W3C</a> is a consortium that sets web standards.</p>
                                    </div>
                                    <div class="criterium-quicktips">Fix the errors in the code syntax</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-doctype" class="criterium result-0 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Doctype
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p                 itemprop="fileFormat">HTML5</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Declaring a <a rel="nofollow" href="http://www.w3schools.com/tags/tag_DOCTYPE.asp" target="_blank">doctype</a> helps web browsers to render content correctly.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-encoding" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">0.4739336492891</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Encoding
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>UTF-8</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Great, language/character encoding is specified.</p><p>Specifying language/character encoding can prevent problems with the rendering of <a rel="nofollow" href="http://en.wikipedia.org/wiki/Character_encoding" target="_blank">special characters</a>.</p>
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-deprecated_html_element" class="criterium result-1 hidden ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">1.4218009478673</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Deprecated HTML
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>Deprecated HTML tags are HTML tags that are no longer used. It is recommended that you remove or replace these HTML tags because they are now obsolete.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-directory_browsing" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">0.4739336492891</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Directory Browsing
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>No</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Great! Your server prevents visitors from browsing your directory by accessing it directly, this is excellent from a security standpoint.</p>
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-server_signature" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">0.4739336492891</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Server Signature
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                                <span class="solvability-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Easy to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Easy to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>No</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Good, your server signature is off. This is excellent from a security standpoint.</p>
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
            </div>
        </div>
            <div class="module-section" id="module-section-title-promote">Promote</div>
        <div class="module" id="module-social">
            <div class="module-content">
                <h2>Social</h2>
                            <div id="criterium-social_impact" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">4.739336492891</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Social shareability
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-3 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="High impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>High impact</span>
                                                </span>
                                                <span class="solvability-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Hard to solve">
                                                    <span class="icn icn-gear"></span><span class="icn icn-gear"></span><span class="icn icn-gear"></span>
                                                    <span>Hard to solve</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text competitor-hide">
                    <p                 itemprop="interactionCount">This website is very popular on Social Networks.</p>
                    <p                 itemprop="interactionCount"><span class="big-right-aligned icon fb_likes">Facebook Likes</span><span class="big-right-aligned-content">249</span></p>
                    <p                 itemprop="interactionCount"><span class="big-right-aligned icon fb_shares">Facebook Shares</span><span class="big-right-aligned-content">1254</span></p>
                    <p                 itemprop="interactionCount"><span class="big-right-aligned icon fb_comm">Facebook Comments</span><span class="big-right-aligned-content">164</span></p>
                    <p                 itemprop="interactionCount"><span class="big-right-aligned icon tw_bl">Twitter Backlinks</span><span class="big-right-aligned-content">716</span></p>
                    <p                 itemprop="interactionCount"><span class="big-right-aligned icon delicious">Delicious Bookmarks</span><span class="big-right-aligned-content">58</span></p>
                    <p                 itemprop="interactionCount"><span class="big-right-aligned icon stumbled_upon">StumbleUpon</span><span class="big-right-aligned-content">1837712</span></p>
                    <p                 itemprop="interactionCount"><span class="big-right-aligned icon plus_one">Google&trade; +</span><span class="big-right-aligned-content">1655</span></p>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part text competitor-to-process">
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>The impact of social media is huge for certain industries.</p><p><a rel="nofollow" href="http://blog.woorank.com/2013/02/7-social-media-tips-to-improve-fan-engagement/" target="_blank">Learn</a> how to ‪<a rel="nofollow" href="http://blog.woorank.com/2012/12/social-media-optimization-tips-for-local-seo/" target="_blank">‬‬further engage</a> your social media audiences and create a consistent fan base. <a rel="nofollow" href="http://blog.woorank.com/2013/02/4-social-media-management-tools-for-small-businesses/" target="_blank">Check these helpful tools</a> for managing your social media campaign.<br /></p><p>Note: This data represents ‪<a rel="nofollow" href="http://blog.woorank.com/2013/10/woorank-social-stats-explained/" target="_blank">‬social media influences</a> from your website's URL, it does not represent data from specific brand pages.</p>
                                    </div>
                                    <div class="criterium-quicktips">Promote your website on Social Media</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-twitter_account" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">1.4218009478673</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Twitter&trade; Account
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-1 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Low impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Low impact</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p>The Twitter&trade; Account <span class="bold">@GuerrillaMail</span> is booked and it is linked to your website. </p>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part text ">
                    <p                 itemprop="brand"><span class="right-aligned">Name</span><span class="right-aligned-content"><a rel="nofollow" href="http://www.twitter.com/#!/GuerrillaMail" target="_blank">GuerrillaMail</a></span></p>
                    <p><span class="right-aligned">Followers</span><span class="right-aligned-content">1,879</span></p>
                    <p><span class="right-aligned">Tweets</span><span class="right-aligned-content">157</span></p>
                    <p><span class="right-aligned">Bio</span><span class="right-aligned-content">We provide you with disposable e-mail addresses which expire after 60 Minutes. You can read and reply to e-mails that are sent to the temporary e-mail address.</span></p>
                    <p><span class="right-aligned">Account Age</span><span class="right-aligned-content">5 years ago</span></p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        
                                        <p>Your Twitter usage statistics look great. You can enhance them even more by <a rel="nofollow" href="http://www.seomoz.org/blog/yes-you-really-can-build-links-with-twitter" target="_blank">building connections with industry experts</a> and exchanging expertise or content. <a rel="nofollow" href="http://blog.woorank.com/2014/07/top-20-brand-on-twitter-ranked-by-influence-with-customers/" target="_blank">Learn</a> from today's top Twitter-using brands.</p><p>Plus, here are a <a rel="nofollow" href="http://blog.woorank.com/2013/02/7-quick-tips-to-promote-your-company-on-twitter/" target="_blank">few tips</a> to help create a Twitter promotion plan.</p>
                                    </div>
                                    <div class="criterium-quicktips">Book your brand on Twitter</div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-facebook_brand_page" class="criterium result-0 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Facebook Page
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text text-icon-block">
                    <p><span class="icon fb-fancount">Likes</span>4,719</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part text text-icon-block">
                    <p><span class="icon fb-talkingaboutcount">Talking About</span>36</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part text text-block fb-text-bloc">
                    <p>URL</p>
                    <p><a class="fb-page-url" href="http://www.facebook.com/GuerrillaMail" target="_blank">facebook.com/<span class="fb-bold">GuerrillaMail</span></a></p>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part text text-block fb-text-bloc">
                    <p>Name</p>
                    <p>Guerrilla Mail</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part text text-block fb-text-bloc">
                    <p>About</p>
                    <p>Disposable, temporary email address. Anti-spam solution</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part text text-block fb-text-bloc">
                    <p>Mission</p>
                    <p>1. fight spam
2. fight spam
3. fight spam</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part text text-block fb-text-bloc">
                    <p>Company overview</p>
                    <p>How to use

1. Think of an email address ending with @ sharklasers.com

2. Use this email address to signup for a service you only planning to use once, or you do not trust with your real email.

3. Go to the http://www.guerrillamail.com website to check it. It will be available for 60 minutes</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="part text text-block fb-text-bloc">
                    <p>Products</p>
                    <p>This website provides you with disposable e-mail addresses which expire after 60 Minutes. You can read and reply to e-mails that are sent to the temporary e-mail address within the given time frame.</p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        These data regarding the Facebook Page are publicly available.
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
            </div>
        </div>
        <div class="module" id="module-local_visibility">
            <div class="module-content">
                <h2>Local</h2>
                            <div id="criterium-local_directories" class="criterium result-0 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Local Directories
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                
                
                
                
                
                
                
                
                
                <div class="directory-container row">
                    <div class="icon-GooglePlaces local-directory simple-tooltip" rel="tooltip" data-placement="left" data-original-title="Google My Business"></div>
                
                    <div class="business-notfound italic">
                        <p>Missing profile on Google My Business™</p>
                    </div>
                    <div class="business-claim">
                
                            <p><a href="https://www.google.com/local/business/add" rel="nofollow" target="_blank" class="button grey"><i class="icon-plus"></i>&nbsp;&nbsp;Add</a></p>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="directory-container row">
                    <div class="icon-Foursquare local-directory simple-tooltip" rel="tooltip" data-placement="left" data-original-title="Foursquare"></div>
                
                    <div class="business-notfound italic">
                        <p>Missing profile on Foursquare™</p>
                    </div>
                    <div class="business-claim">
                
                            <p><a href="http://business.foursquare.com/listing" rel="nofollow" target="_blank" class="button grey"><i class="icon-plus"></i>&nbsp;&nbsp;Add</a></p>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="directory-container row">
                    <div class="icon-Yelp local-directory simple-tooltip" rel="tooltip" data-placement="left" data-original-title="Yelp"></div>
                
                    <div class="business-notfound italic">
                        <p>Missing profile on Yelp™</p>
                    </div>
                    <div class="business-claim">
                
                            <p><a href="https://biz.yelp.com" rel="nofollow" target="_blank" class="button grey"><i class="icon-plus"></i>&nbsp;&nbsp;Add</a></p>
                    </div>
                </div>
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        This is a list of the local directories where your business has been found. Take care of your listings in local directories; since maps are now an integral part of search results, your <a rel="nofollow" href="http://blog.woorank.com/2013/07/what-does-google-mean-for-businesses-in-2013/" target="_blank">G+ Local page</a> may have more visitors than your website!<br /><br />It is important to make sure that your business details are correct in each directory where you are listed. Find the directories in your country (<a rel="nofollow" href="http://blog.woorank.com/2012/12/10-free-us-local-business-listing-sites/" target="_blank">USA</a>, <a rel="nofollow" href="http://blog.woorank.com/2013/09/top-20-free-local-directories-in-the-uk/" target="_blank">UK</a>, <a rel="nofollow" href="http://blog.woorank.com/2013/09/top-10-free-business-directories-in-spain/" target="_blank">Spain</a>, <a rel="nofollow" href="http://blog.woorank.com/2013/09/top-free-business-directories-france/" target="_blank">France</a>, <a rel="nofollow" href="http://blog.woorank.com/2013/09/free-business-directories-in-canada/" target="_blank">Canada</a>, <a rel="nofollow" href="http://blog.woorank.com/2013/09/top-10-free-business-directories-in-australia/" target="_blank">Australia</a>, <a rel="nofollow" href="http://blog.woorank.com/2013/09/top-10-free-business-directories-in-brazil/" target="_blank">Brazil</a>, and <a rel="nofollow" href="http://blog.woorank.com/2013/08/free-indian-business-listing-sites/" target="_blank">India</a>) and enhance your listings with pictures, video, schedules and as many customer reviews as possible.
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-local_online_reviews" class="criterium result-0 hidden ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Online Reviews
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        These are the latest reviews of your business that can be found in local directories. Surveys show that 90 percent of customers say buying decisions are influenced by <a rel="nofollow" href="http://marketingland.com/survey-customers-more-frustrated-by-how-long-it-takes-to-resolve-a-customer-service-issue-than-the-resolution-38756" target="_blank">online reviews</a> so take the time to make a good impression and <a rel="nofollow" href="http://www.entrepreneur.com/article/226315" target="_blank">gather positive feedback</a>. <a rel="nofollow" href="http://blog.woorank.com/2013/10/online-reviews-local-business/"  target="_blank">Strategies for gaining reviews</a> may differ by audience or business type; in general, consider asking for reviews, making it easy to send in feedback and having a prominent social presence.
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
            </div>
        </div>
            <div class="module-section" id="module-section-title-measure">Measure</div>
        <div class="module" id="module-visitors">
            <div class="module-content">
                <h2>Visitors</h2>
                            <div id="criterium-alexa" class="criterium result-1 ">
                                <div class="criterium-head">
                                    <span class="crit-score-pond hidden">7.5829383886256</span>

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Passed">
                                        <span class="icn"></span>Traffic Estimations
                                    </h3>

                                        <div class="icons">
                                                <span class="importance-2 simple-tooltip" data-placement="top" rel="tooltip" data-original-title="Medium impact">
                                                    <span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span><span class="icn icn-bullet-impact"></span>
                                                    <span>Medium impact</span>
                                                </span>
                                        </div>
                                </div>
                                <div class="criterium-content">
                
                
                
                <div class="part progressbar ">
                    
                    <div class="content">
                        
                        
                        <span class="bar"><span class="colored-bar" style="width:90%;">Very High&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="value" data-abs-value="28470">Very High</span></span>
                    </div>
                </div>
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>We use multiple tools to estimate web traffic, including <a rel="nofollow" href="http://www.google.com/trends/explore#q=guerrillamail.com" target="_blank">Google&trade; Trends</a> and <a rel="nofollow" href="http://www.alexa.com/siteinfo/guerrillamail.com" target="_blank">Alexa&trade;</a>.</p><p>Nevertheless, your analytics will provide the most accurate traffic data.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-trafic_ranking" class="criterium result-0 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Traffic Rank
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                <div class="part text ">
                    <p><span class="bold">28,470</span><span class="superscript">th</span> most visited website in <span class="bold">the World</span></p>
                    <p><a class="wooindex-bl" target="_blank" href="https://index.woorank.com/en/reviews?country=us"><span class="bold">34,000</span><span class="superscript">th</span> most visited website in <span class="bold flag us"></span>&nbsp;United States</a></p>
                </div>
                
                
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>A low rank means that your website gets a lot of visitors.</p><p>Your <a rel="nofollow" href="http://www.alexa.com/siteinfo/guerrillamail.com" target="_blank">Alexa Rank</a> is a good estimate of the worldwide traffic to your website, although it is not 100 percent accurate.</p><p>Reviewing the <a rel="nofollow" href="http://www.alexa.com/topsites/countries" target="_blank">most visited websites</a> by country can give you valuable insights.</p><p><a rel="nofollow" href="http://www.quantcast.com/guerrillamail.com" target="_blank">Quantcast</a> provides similar services.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-adwords_traffic" class="criterium result-0 hidden ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Adwords Traffic
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p>This is an estimation of the traffic that is being bought through <a rel="nofollow" href="http://adwords.google.com" target="_blank">AdWords&trade;</a> vs. unpaid Organic Traffic.</p><p>This data is provided by <a rel="nofollow" href="http://semrush.com/?ref=897815339" target="_blank"> SEMRush&trade;</a>.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
                            <div id="criterium-visitors_loc" class="criterium result-0 ">
                                <div class="criterium-head">

                                    <h3 class="simple-tooltip" data-placement="left" rel="tooltip" data-original-title="Low impact">
                                        <span class="icn"></span>Visitors Localization
                                    </h3>

                                        <div class="icons">
                                        </div>
                                </div>
                                <div class="criterium-content">
                
                
                
                
                
                
                <div class="part bar ">
                    <div class="woomap">
                        <div class="country-info">
                            <div class="name">United States</div>
                            <div class="percent">16</div>
                        </div>
                        <div class="country-info">
                            <div class="name">India</div>
                            <div class="percent">14</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Saudi Arabia</div>
                            <div class="percent">4.6</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Mexico</div>
                            <div class="percent">4.3</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Germany</div>
                            <div class="percent">3</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Taiwan</div>
                            <div class="percent">3</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Sweden</div>
                            <div class="percent">2.8</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Turkey</div>
                            <div class="percent">2.6</div>
                        </div>
                        <div class="country-info">
                            <div class="name">United Kingdom</div>
                            <div class="percent">2.5</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Denmark</div>
                            <div class="percent">2.3</div>
                        </div>
                        <div class="country-info">
                            <div class="name">France</div>
                            <div class="percent">2.2</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Pakistan</div>
                            <div class="percent">2.1</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Canada</div>
                            <div class="percent">2.1</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Philippines</div>
                            <div class="percent">2</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Spain</div>
                            <div class="percent">2</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Italy</div>
                            <div class="percent">1.9</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Netherlands</div>
                            <div class="percent">1.8</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Indonesia</div>
                            <div class="percent">1.7</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Ukraine</div>
                            <div class="percent">1.6</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Romania</div>
                            <div class="percent">1.6</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Israel</div>
                            <div class="percent">1.5</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Hungary</div>
                            <div class="percent">1.3</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Australia</div>
                            <div class="percent">1.3</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Morocco</div>
                            <div class="percent">1</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Croatia</div>
                            <div class="percent">0.6</div>
                        </div>
                        <div class="country-info">
                            <div class="name">Vietnam</div>
                            <div class="percent">0.5</div>
                        </div>
                    </div>
                </div>
                
                
                
                
                
                
                <div class="part table ">
                    <table class="">
                        <thead>
                            <tr>
                                <th>Popular Countries</th>
                                <th><a rel="nofollow" href="http://en.wikipedia.org/wiki/Country_code_top-level_domain" target="_blank">ccTLD</a></th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td><a class="wooindex-bl" target="_blank" href="https://index.woorank.com/en/reviews?country=us">United States</a></td>
                                <td>guerrillamail.us</td>
                                <td>Available. <a rel="nofollow" href="http://goo.gl/VCKwfl" target="_blank">Book it now!</a></td>
                                <td><span class="icn icn-check"></span></td>
                            </tr>
                            <tr class="">
                                <td><a class="wooindex-bl" target="_blank" href="https://index.woorank.com/en/reviews?country=in">India</a></td>
                                <td>guerrillamail.in</td>
                                <td>Available. <a rel="nofollow" href="http://goo.gl/VCKwfl" target="_blank">Book it now!</a></td>
                                <td><span class="icn icn-check"></span></td>
                            </tr>
                            <tr class="">
                                <td><a class="wooindex-bl" target="_blank" href="https://index.woorank.com/en/reviews?country=sa">Saudi Arabia</a></td>
                                <td>guerrillamail.sa</td>
                                <td>This domain is booked</td>
                                <td><span class="icn icn-lock"></span></td>
                            </tr>
                            <tr class="">
                                <td><a class="wooindex-bl" target="_blank" href="https://index.woorank.com/en/reviews?country=mx">Mexico</a></td>
                                <td>guerrillamail.com.mx</td>
                                <td>Available. <a rel="nofollow" href="http://goo.gl/VCKwfl" target="_blank">Book it now!</a></td>
                                <td><span class="icn icn-check"></span></td>
                            </tr>
                            <tr class="">
                                <td><a class="wooindex-bl" target="_blank" href="https://index.woorank.com/en/reviews?country=de">Germany</a></td>
                                <td>guerrillamail.de</td>
                                <td>This domain is booked</td>
                                <td><span class="icn icn-lock"></span></td>
                            </tr>
                            <tr class="">
                                <td><a class="wooindex-bl" target="_blank" href="https://index.woorank.com/en/reviews?country=tw">Taiwan</a></td>
                                <td>guerrillamail.tw</td>
                                <td>This domain is booked</td>
                                <td><span class="icn icn-lock"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                
                
                
                
                
                
                
                                        
                                </div>
                                    <div class="criterium-advice-click"><span>?</span></div>
                                    <div class="criterium-advice">
                                        <p><a rel="nofollow" href="http://blog.woorank.com/2012/12/10-free-us-local-business-listing-sites/" target="_blank">‬We recommend</a> that you <a rel="nofollow" href="http://goo.gl/VCKwfl" target="_blank">book the domain names</a> for the countries <a rel="nofollow" href="http://blog.woorank.com/2012/12/how-to-boost-your-local-seo/" target="_blank">where your ‪‬website is popular</a>. This will prevent potential competitors from registering these domains and taking advantage of your reputation in such countries.</p>
                                        
                                    </div>
                                    <div class="criterium-quicktips"></div>
                            <div class="delimiter"></div></div>
            </div>
        </div>
</div>

<div id="top-bar-trial" class="hidden">
    <div>
        <div class="row">
            <h2>Last week 4,237 companies signed up for WooRank to optimize their website. Today it's your turn.</h2>
            <a  id="top-bar-register"
                class="start-trial button orange"
                data-plan="choise" data-type="optimize"
                value="https://www.woorank.com/en/register/plan/v2pro/optimize"
                href="#"
            >Start Your Free Trial</a>
        </div>
    </div>
</div>

<div id="social-sharing-box" class="share">
            <a class="facebook" href="http://www.facebook.com/sharer/sharer.php?s=100&p[images][0]=http%3A%2F%2Fstatic1.woorank.com%2Fassets%2Fimg%2Fshade.png&p[url]=http%3A%2F%2Fwww.woorank.com%2Fen%2Fwww%2Fguerrillamail.com&p[title]=I+just+got+a+quick+guide+to+improving+my+website%21&p[summary]=Check+out+my+%23WooRank+website+review%21+Want+to+see+how+your+website+ranks%2C+too%3F+Make+one+for+your+site+at+www.WooRank.com+today%21" rel="nofollow" target="_blank">facebook</a>
            <a class="twitter" href="http://twitter.com/home?status=Check+out+my+%40WooRank+website+review%21+woo.lv%2Fe%2Fguerrillamail.com+Make+one+for+your+site+at+WooRank.com+today%21+%23WooRank" rel="nofollow" target="_blank">twitter</a>
            <a class="googleplus" href="https://plus.google.com/share?url=http%3A%2F%2Fwww.woorank.com%2Fen%2Fwww%2Fguerrillamail.com" rel="nofollow" target="_blank">googleplus</a>
            <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&source=WooRank&url=http%3A%2F%2Fwww.woorank.com%2Fen%2Fwww%2Fguerrillamail.com&title=I+just+got+a+quick+guide+to+improving+my+website%21&summary=Check+out+my+%23WooRank+website+review%21+Want+to+see+how+your+website+ranks%2C+too%3F+Make+one+for+your+site+at+www.WooRank.com+today%21" rel="nofollow" target="_blank">linkedin</a>
    </div>
    <div class="hidden" id="get-manycontact-quick-wins">
        <a class="external-link" href="https://www.manycontacts.com/?utm_source=woorank&utm_medium=review&utm_campaign=TopPriority" rel="nofollow" target="_blank">
            <li><i></i>Add a Conversion Form or use ManyContacts </li>
        </a>
    </div>
    </div>
        </div>
    </div>
    <footer>
    <ul class="row">
        <li class="footer-section">
            <ul>
                <li>
                    <a href="/en/faq">FAQ</a>
                </li>
                                <li>
                    <a href="/#pricing">Pricing</a>
                </li>
                                <li>
                    <a href="http://index.woorank.com/">Review Index</a>
                </li>
                <li>
                    <a href="/en/jobs/">Jobs</a>
                </li>
            </ul>
        </li>
        <li class="footer-section">
            <ul>
                <li>
                    <a href="http://blog.woorank.com" target="_blank">Blog</a>
                </li>
                <li>
                    <a href="/en/p/developers">Tools for Developers & Bloggers</a>
                </li>
                <li>
                    <a href="/en/lp/free-online-marketing-training" target="_blank">Free Online Marketing Training</a>
                </li>
                                <li>
                    <a href="/en/p/recent">Recent Reports</a>
                </li>
                            </ul>
        </li>
        <li class="footer-section">
            <ul>
                <li>
                    <a href="/en/p/about">About Us</a>
                </li>
                <li>
                    <a href="/en/p/privacy">Privacy</a>
                </li>
                <li>
                    <a href="/en/p/tos">Terms of Service</a>
                </li>
                                <li id="copyright">Copyright &copy; 2014</li>
            </ul>
        </li>
        <li class="footer-section">
            <ul>
                <li class="ipad">
                    <a href="https://itunes.apple.com/app/woorank/id595645104" target="_blank" rel="nofollow" title="WooRank for iPad!">
                        <img width="152" height="50" src="http://d36ne2v4p3kvwa.cloudfront.net/assets/img/ipad-store.png" alt="Available on the ipad app store." />
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</footer>
            <div class="woo-modal modal hide" id="ipad-app-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-hidden="true">&times;</span>
            </div>
            <div class="modal-body">
                <div id="ipad-modal-container">
                    <h1>WooRank for iPad!</h1>
                    <h2>Generate reviews on the fly</h2>
                    <div>
                        <a href="http://www.appstore.com/WooRank/WooRank" rel="nofollow">
                            <img width="632" height="207" src="/assets/img/ipad-app-screens.png" alt="ipad app" />
                        </a>
                    </div>
                    <div>
                        <a class="button orange" rel="nofollow" href="http://www.appstore.com/WooRank/WooRank">Get the WooRank App, it's FREE!&nbsp;&nbsp;&nbsp;<i class="icon-get-arrow icon-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="http://d36ne2v4p3kvwa.cloudfront.net/assets/script/lib/jq-btsp.min.js?crc=1642780094" ></script>
<script type="text/javascript" src="http://d36ne2v4p3kvwa.cloudfront.net/assets/script/lib/mc.min.js?crc=547697426" ></script>
<script type="text/javascript" src="http://d36ne2v4p3kvwa.cloudfront.net/assets/script/lib/piecon.min.js?crc=-1047366459" ></script>
<script type="text/javascript" src="http://d36ne2v4p3kvwa.cloudfront.net/assets/script/lib/charts.min.js?crc=-1850332593" ></script>
<script type="text/javascript" src="http://d36ne2v4p3kvwa.cloudfront.net/assets/script/lib/mstch.min.js?crc=-1697587399" ></script>
<script type="text/javascript" src="http://d36ne2v4p3kvwa.cloudfront.net/assets/script/lib/push.min.js?crc=-1546243989" ></script>
<script type="text/javascript" src="http://d36ne2v4p3kvwa.cloudfront.net/assets/script/lib/mm.min.js?crc=224480624" ></script>
<script type="text/javascript" src="http://d1ngs3wjcmiutu.cloudfront.net/assets/script/review.min.js?crc=-824058801" ></script>
<script type="text/javascript" src="http://d1ngs3wjcmiutu.cloudfront.net/assets/script/commons.min.js?crc=1849495212" ></script>        <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-12074781-1']);
    _gaq.push(['_setAllowAnchor', true]); 
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>    <script type="text/javascript">
adroll_adv_id = "GXICGK4G2ZA5NGGNEFJYMC";
adroll_pix_id = "YXIE5DCOZJH2JOJTTWIMFF";
(function () {
    var oldonload = window.onload;
    window.onload = function(){
    __adroll_loaded=true;
    var scr = document.createElement("script");
    var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
    scr.setAttribute('async', 'true');
    scr.type = "text/javascript";
    scr.src = host + "/j/roundtrip.js";
    ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
    if(oldonload){oldonload()}};
}());
</script>
        <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-1.newrelic.com","licenseKey":"f000c2d7df","applicationID":"518010","transactionName":"blcHbRBVCEcFVkxeVlcdMEsLGw9aAFBAGUlRQg==","queueTime":0,"applicationTime":1208,"ttGuid":"","agentToken":"","userAttributes":"","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-411.min.js"}</script></body>
</html>

