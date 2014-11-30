http://corz.org/server/tricks/virtual.domain.php
HTTP/1.1 200 OK
Server: nginx
Date: Tue, 22 Jul 2014 07:19:45 GMT
Content-Type: text/html; charset=utf-8
Connection: close
Set-Cookie: PHPSESSID=rpgfphoj16auigm58vr6r9dmi6; path=/
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: private
Pragma: no-cache
Set-Cookie: notice=seen; expires=Wed, 23-Jul-2014 07:19:45 GMT; path=/
Set-Cookie: cookie_notice=seen; expires=Fri, 19-Jul-2024 07:19:45 GMT; path=/
Content-Encoding: gzip
Vary: Accept-Encoding
X-Powered-By: PleskLin

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<title>creating a virtual (fake - spoof) domain, step-by-step</title>
<meta name="description" content="a step-by-step guide to creating one fake (spoof) domain for testing purposes.. a corz-style tutorial." />
<link rel="stylesheet" href="/inc/css/tech.css" type="text/css" media="screen" />
<script src="/inc/js/corz.js"></script>
<noscript><!-- for pre-sized pop-up windows and other goodies - not for ads! --></noscript>
<link rel="stylesheet" href="/inc/css/print.css" type="text/css" media="print" />
<!-- (c) copyright 2000-2014 cor + corz.org, some rights reserved -->
<meta name="dcterms.rights" content="copyright © 2000-2014 cor and corz.org, some rights reserved">
<meta name="generator" content="hand made by cor" />
<meta name="author" content="cor" />
<meta name="robots" content="all, index, follow" />
<meta name="dcterms.coverage" content="global" />
<meta name="dcterms.audience" content="all" />
<!-- <meta name="bitcoin" content="1EGLbAJktba42PAaFpvyvndYug8XhQTR1i" /> -->
<!-- <meta name="bitcoinmsg" content="Many thanks! Bitcoinerz are always welcome at corz.org!"/> -->
<link rel="shortcut icon" href="http://corz.org/favicon.ico" type="image/x-icon" />
<!-- client IP: 54.83.231.24 -->
<!-- saved from http://corz.org/server/tricks/virtual.domain.php -->
<meta name="revisit-after" content="13 days" />
<script>
	var _gaq = _gaq || [];
	var pluginUrl =
	'//www.google-analytics.com/plugins/ga/inpage_linkid.js';
	_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
	_gaq.push(['_setAccount', 'UA-31003967-1']);
	_gaq.push(['_trackPageview']);
</script>
<noscript><!-- google analytics - PLEASE enable JavaScript for corz.org! This stuff is helpful. --></noscript>
</head>
<body>
<script>
//<![CDATA[
<!--
window.status="Study the Law of Attraction if you want to know Why"
//-->
//]]>
</script>
<noscript><!-- fun window status - JavaScript only - some are funny - worth enabling! --></noscript>
<a id="top-of-page" href="#" onclick="GoTop();return false;" title="Click here to go up to the top of the page, with a nice scrolling effect..
If that bugs you, use Ctrl+Home!"></a>
<noscript>
	<div id="lo-fi-warning" class="lo-fi" title="Please enable JavaScript for corz.org, this will hide the big ad!">
		lo-tech lame version
	</div>
</noscript>
<!-- begin funky toolbar -->
<nav class="tools">
	<h1>Site Navigation</h1>
	<ul>
		<li><a class="menu-link" id="home-link" href="/" title="corz.org front page. welcome!">home</a></li>
		<li><a class="menu-link" id="blog-link" href="/blog/" title="cor's blog, aka 'corzblog'. I write stuff here..">blog</a></li>
		<li><a class="menu-link" id="dev-link" href="/devblog/" title="Developing: sites, software, stuff.. updates generally get posted here, as well as developer-related tricks, tips, and thoughts..">dev</a></li>
		<li><a class="menu-link" id="audio-link" href="/audio/" title="Music is everywhere, I've been pinning it down and giving it away since I was a kid..">audio</a></li>
		<li><a class="menu-link" id="arc-link" href="/public/" title="The Archive.. Downloads of all shapes and sizes, documents, secret chasms, you name it..">arc</a></li>
		<li><a class="menu-link" id="img-link" href="/imaging/" title="Images. Soul-candy, captured things you can look at..">img</a></li>
		<li><a class="menu-link" id="server-link" href="/server/" title="Serving up the Web.. Webmasters tricks, tips, tools and resources.">server</a></li>
		<li><a class="menu-link" id="net-link" href="/network/" title="Networking, Routers, all that interconnected stuff..">net</a></li>
		<li><a class="menu-link" id="win-link" href="/windows/" title="Windows.. The devil's work, or a capable multimedia desktop..">win</a></li>
		<li><a class="menu-link" id="words-link" href="/words/" title="The Work..">words</a></li>
		<li><a class="menu-link" id="me-link" href="/corz/contact.php" title="Contact page for corz.org, ways to get stuff to me..">me</a></li>
		<li><a class="menu-link" id="prefs-link" href="/blog/inc/scheme-edit.php" title="Adjust your site preferences, colors. [new &quot;dark&quot; and &quot;browser&quot; schemes available!]">prefs</a></li>
	</ul>
</nav>
<script>
//<![CDATA[
<!--
function chompchomp() {
	var op = 100;
	startVanish = setInterval(function(){
		document.getElementById("cookie-notice").style.KHTMLOpacity = op/100;
		document.getElementById("cookie-notice").style.opacity = op/100;
		op -= 10;
		if (op < 0)  {
			clearInterval(startVanish);
			document.getElementById("cookie-notice").style.zIndex = 0;
		}
	}, 50);
}
//-->
//]]>
</script><noscript><!-- JavaScript Only --></noscript>
<div id="cookie-notice" title="You will be reminded again in Ten years.
Unless you delete your browser's cookies before then!
(click to remove this notice immediately-ish)" onclick="chompchomp();">corz.org uses cookies to remember that you've seen this notice explaining that corz.org uses cookies, okay!</div>
<nav>
<h1>Section Links</h1>
<ul class="toplinks">
	<li><a href="../tricks/" title="webserving tricks and tips">tricks</a></li>
	<li><a href="../tools/" title="webmaster's tool box. handy things for 'armless folks">tools</a></li>
	<li><a href="../techniques/" title="webmaster techniques, how to do that thing they do. there will be code">techniques</a></li>
	<li><a href="../security/" title="true security is in the mind">security</a></li>
	<li><a href="./" title="Go Up ..">UP</a></li>
</ul>
</nav>
<div class="content">


	<img class="right-img-title" src="img/virtual_domain_title.png" alt="another spoof domain" />
	<h1>Spoof Domains<br />
	step by step..</h1>



	<h3>(apply brakes here)</h3>

	I was about to create a new <a href="spoofurl.php" title="To know what's going on, read this page first" id="link-spoof-domains">spoof virtual domain</a> for my LAN, and it occurred to me.. "I should write down the steps I take, save someone else doing it, save time".<br />
	<br />

	<h3>So, here goes..</h3>



	<h4 id="fake-host">1: Create the fake host..</h4>

	Every machine you wish to fool, needs to have host entry for your spoofy domain. Let's call this spoof domain "arc". The host file entry would simply be..<br />
	<br />

	<code>&nbsp;&nbsp;192.168.1.100&nbsp;&nbsp;arc</code><br />
	<br />

	See <a href="/server/tricks/hosts.php" title="hosts file magic">here</a> for details of how to add hosts to your particular machine.<br />
	<br />


	I have one central hosts file that I import into all the different machines. I find this easier to maintain. A local DNS server is another option (or, as suggested by Druid; add the entry to your local nameserver's hosts file, if you have one).<br />
	<br />

	Typing <strong>arc</strong> into any local browser will now point the it to the Apache server, which will completely ignore the request, until we..<br />
	<br />




	<div class="left-img">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- corz.org webmaster  rectangle -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px;background-color:#fff7d1"
     data-ad-client="ca-pub-7123663696036963"
     data-ad-slot="4453380472"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<noscript><!-- google stuff --></noscript>	</div>

	<h4>2: Create a virtual host in apache config..</h4>

	I keep mine in a vhosts.conf file, right next to the httpd.conf (I use an include statement to pull the directives in). The "arc" entry goes something like this..<br />
<pre>

	&lt;VirtualHost *&gt;
	  ServerName  arc
	  ServerAlias  arc.com arc.org
	  ServerAdmin  c&#111;&#114;z@&#99;&#111;r&#122;o&#111;g&#108;e&#46;&#99;&#111;m
	  DocumentRoot  "W:/tech/dev"
	  DirectoryIndex  index.html index.php
	  ServerSignature  Email
	&lt;/VirtualHost&gt;
</pre>

	Note the aliases, (handy for testing rewrite rules and such). You can add as many aliases as you like, so long as you also create corresponding host entries for each (step 1). Also note, this entry is for a Windows&reg; Apache server; I figured it was about time to do a Windows-orientated article. Really, only the <code>DocumentRoot</code> directive is different.<br />
	<br />



	<h4>3: Restart apache..</h4>

	Sadly I don't have the "corzweescriptpack" for windows, although I do have a righteous /unix subtree on my windows box! Aye, I mean emacs, tcsh, ls, tar, the works! That's right! I do <code>ls</code> to get directory listings on my peecee! Oh Joy of UNIX!<br />
	<br />

	However, Apache for windows comes with a whole host of useful shortcuts, so restarting's a breeze; apache also installs as a system service, handy. On UNIX/Linux, your usual <a href="/public/linux/usr/local/bin/" title="A few handy commands to keep around" id="link-linux-usr-local-bin">apachectl command</a> will be fine. On Mac OS X, use <a href="/osx/soft/corzweescriptpack.php" title="silly, but useful scripts">corzweescriptpack!</a> ..  <strong>ra</strong><br />

	<h4>We're done!</h4>

	This is what we get typing <strong>arc</strong> into a web browser <em>now.</em>.<br />
	<br />
	<img src="img/arc_index.png" alt="fancy index of arc spoof domain" /><br />
	<br />


	En-joy!<br />
	<br />


	;o) <script>
//<![CDATA[
<!--
document.write("<a title=\"Mail Me!\" href=\"\/corz\/mail-me.php?subject=I want to hire you!\" onclick=\"OpenWindow(this.href,900,640);return false;\">Cor<\/a>")
//-->
//]]>
</script><noscript><a href="/corz/mail-me.php" title="Mail Me!">Cor</a></noscript><br />

</div>
<!-- that comment thing -->
<div class="clear"></div>
<div class="comments" id="comments">
	<div class="comments-intro">
		<br /><h2>Welcome to the comments facility!</h2>
	</div>
	<hr class="hr-regular" />
	<div class="comment-text">
		<a href="?page=1#comments" title="there's more! (currently showing ten per page)"><span class="big">previous comments</span> (four  pages)</a>&nbsp;&nbsp;&nbsp;<a href="?page=all#comments"
		title="the whole damn lot. all fourty three of 'em!">show all comments</a><br />
		<br />



<div id="cor1129591055">
<strong>cor</strong> - 17.10.05 7:17 pm<br />
<br /><!--*g*-->email? <img alt="smiley for :eek:" title=":eek:" src="/blog/inc/smileys/eek.gif" /><br />
<br />
Hey! well, it's working, that's the main thing. I must have missed your last comment in the crazy comment thing upgrade last week ("that comment thing" being the thing that provides comments at the foot of the pages - and "crazy" being me running all those recursive awk programs on the live comment files themselves! hahah) I haven't rummaged through my spam folder in weeks, I do put it off some, but I <em>would </em>have had rummaged if I'd spotted this comment, cuz I like emails with attachments! <img alt="smiley for :D" title=":D" src="/blog/inc/smileys/grin.gif" /><br />
<br />
Thanks for the offer, corzblog III isn't quite ready for the big-time yet, but at least it is now 100% xhtml compliant and produces quite nice code, too (and check out my new 100% css roll-over archives menu! *ahem*). cbparser, the bbcode parser, is about to get a beta release any day, after I let the commenteers play with it for a bit. (my unwitting beta-testers!)<br />
<br />
I invariably use a wildcard for the NameVirtualHost directive, because there's usually umpteen hosts coming off the one box, but whatever works for you, sounds great.<br />
<br />
;o) Cor<br />
<br />
ps.. I keep all my spoofy domain information in a separate file called simply "myhosts" (which is shared with other boxes). In your network properties you can <em>import</em> a hosts file, and Windows&reg; will run checks on it before adding the individual hosts. This is a safe approach until you feel comfortable editing the file directly.<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>





<div id="Deikliw1130879049">
<strong>Deikliw</strong> - 01.11.05 4:04 pm<br />
<br />

<!--*g*-->Hi there <br />
most impressed with your work on hacking the voyager 205. My issue is i want to view web space in my wwwroot folder (iis) from the Internet (through router) other than just being able to view this on an intranet basis (192.168.1.3/"foldername"/index.htm).<br />
<br />
I have tried to follow your examples many times to no avail and feel I am getting confused to all the settings needed.<br />
<br />
I am also aware you may recieve many requests on the things already covered in your tutorials but I can only ask. please help<br />
<br />
Deikliw<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>




<div id="cor1130942477">
<strong>cor</strong> - 02.11.05 9:41 am<br />
<br /><!--*g*--><strong>Deikliw</strong>, it really depends what <em>type</em> of access you require. I know enough about IIs to avoid it, but I'll assume you mean regular filesystem access, these principles apply to <em>any </em>web server setup..<br />
<br />
FTP. Why not setup an ftp server, put your www root folder into one of the accounts and login with a regular FTP client. Simple, robust, and if you use SFTP or similar, highly secure, too.<br />
<br />
WebDAV. I'm fairly sure IIs can do webdav, Apache certainly can. WebDAV gives you a sort of filesystem access via the web server itself. Enabling webdav in your root has potential security issues, but I'll leave these for you to explore. All network access has potential security issues, of course.<br />
<br />
Some other server. There are literally hundreds of different servers that will give you access to a filesystem over the internet. They don't have to be in any way connected to the webserver which <em>just happens</em> to also use the folder you want to access. Why not setup an SSH server? <br />
<br />
Food for thought.<br />
<br />
Whichever server you decide upon, it will probably need a port-forwarding rule setup on your router (though not WebDAV). If you have trouble with that, post a comment on the voyager page (after checking out the recipes, of course!)<br />
<br />
;o) Cor<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>



<div id="Atul-kumar-Mishra1146228139">
<strong>Atul kumar Mishra</strong> - 28.04.06 8:42 am<br />
<br />

<!--*g*-->plz send the all step of the DNS that how do create Domaim and etc.<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>



<div id="cor1146258923">
<strong>cor</strong> - 28.04.06 5:15 pm<br />
<br />

<!--*g*-->Isn't that THIS page? <img alt="smiley for :eek:" title=":eek:" src="/blog/inc/smileys/eek.gif"/><br />
<br />
;o) Cor<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>



<div id="bungle1194493386">
<strong>bungle</strong> - 07.11.07 8:43 pm<br />
<br />

<!--*g*-->ok pop quiz hot shot <img alt="smiley for ;)" title=";)" src="/blog/inc/smileys/wink.gif" /> <br />
<br />
do u know how to do wild-cards in the hosts file (linux) for catching all sub-domains? so far I have had no luck finding the solution... <br />
<br />
e.g. my host file is growing out of control:<br />
<br />
127.0.0.1 sub1.domain.com sub2.domain.com sub3.domain.com (continued for a long time)<br />
<br />
what i want to do is this:<br />
<br />
127.0.0.1 *.domain.com<br />
<br />
thing is - it don't work :(<br />
<br />
now, yes - "why dont u just use one domain and folders within?" - well i need this for testing purposes. I have built a web app which gives users a subdomain when they sign-up... everytime i wanna test if the new sub domain works - yup, i have to edit my host file - which is a royal pain in the bottom<br />
<br />
so - i could build a script to update it automagically - but surely there is a better way?<br />
<br />
u have a really good informative site here so i hope u can shed some light - perhaps there is a nifty nix app which solves my problem?<br />
<br />
may the force b with u - and keep up the good work <img alt="smiley for :D" title=":D" src="/blog/inc/smileys/grin.gif" /><br />
<br />
p.s. forgive me if u already have the solution on your site... if so, i suck lol<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>





<div id="cor1194509711">
<strong>cor</strong> - 08.11.07 1:15 am<br />
<br />

<!--*g*-->I'm always up for a pop quiz, <strong>bungle</strong>, let's do it..<br />
<br />
<cite>do u know how to do wild-cards in the hosts file…?</cite><br />
<br />
<strong>No</strong>. Syat.<br />
<br />
<cite>there is a better way?</cite><br />
<br />
<strong>Yes</strong>..<br />
<br />
<tt>127.0.0.1 sub1.domain.com <br />
127.0.0.1 sub2.domain.com<br />
127.0.0.1 sub3.domain.com<br />
etc.</tt><br />
<br />
At least now you can see what's going on. Much easier to run regex over it, too; make global changes, and so on. <br />
<br />
As for manipulating this list in meaningful ways; on Linux, <a class="url" href="http://www.google.com/linux?q=sed&amp;sourceid=corz.org" title="Stread EDitor - mighty powerful text manipulations" ><tt>sed</tt><!--url--></a> is your friend.<br />
<br />
;o) Cor<br />
<br />
ps. you might also want to consider running BIND.<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>



<div id="bungle1194536942">
<strong>bungle</strong> - 08.11.07 8:49 am<br />
<br />

<!--*g*-->nice one mate - one per line is better, i'll scope out BIND too - thanks for the quick response<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>





<div id="SSG1292140086">
<strong>SSG</strong> - 12.12.10 7:48 am<br />
<br />

<!--*g*-->Great<br />
<br />
<img alt="smiley for :D" title=":D" src="/blog/inc/smileys/grin.gif" /><br />
<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>





<div id="Magnar1330794752">
<strong>Magnar</strong> - 03.03.12 5:12 pm<br />
<br />

<!--*g*-->Hi!<br />
I'm trying to have more than one virtual domain, but I can't get it working!<br />
<br />
Contents of hosts:<br />
<pre>
127.0.0.1       localhost
127.0.0.1       www.devdynaplan.com
127.0.0.1       www.devmyrtveitfoto.no
</pre><br />
Contents in end of httpd.conf:<br />
<pre>
&lt;VirtualHost *&gt;
ServerName www.devdynaplan.com
DocumentRoot "C:\Users\Magnar\Prosjekt\Dynaplan\Nettside"
DirectoryIndex index.html index.php
&lt;/VirtualHost&gt;

&lt;VirtualHost *&gt;
ServerName www.devmyrtveitfoto.no
DocumentRoot "C:\Users\Magnar\Prosjekt\Myrtveit foto\Nettside"
DirectoryIndex index.html index.php
&lt;/VirtualHost&gt;
</pre><br />
With this configurations, both www.devdynaplan.com and www.devmyrtveitfoto.no leads to the www.devdynaplan.com-site. If I change the order of them in httpd.conf, both of the urls leads to the www.devmyrtveitfoto.no-site. What am I doing wrong?<br />
<br />
Thank you so much for your help and insight! <img alt="smiley for :D" title=":D" src="/blog/inc/smileys/grin.gif" /><br />
<br />
EDIT:<br />
I found the solution through some googling, and posting it here in case anyone else needs it <img alt="smiley for :)" title=":)" src="/blog/inc/smileys/smile.gif" /><br />
<br />
Add this line to httpd.conf:<br />
<pre>NameVirtualHost *</pre><br />
That's all! <img alt="smiley for :D" title=":D" src="/blog/inc/smileys/grin.gif" /><br />
<br />
<div class="corz-reply">Good catch. My current development configuration uses:<br />
<pre>NameVirtualHost *:80
Listen 80

&lt;VirtualHost *:80&gt;
...</pre>It's Ubuntu. Regardless, yes, you do need that <em>somewhere</em>. Thanks!<br />
<br />
;o) Cor<!--corz--></div><!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>



<div id="IamXPLiCiT1356437888">
<strong>IamXPLiCiT</strong> - 25.12.12 12:18 pm<br />
<br />

<!--*g*-->thanks, this really helped in combination with the host file on my linux server, now my game server should report locally and not to gamespy.<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>

	<form id="verify"  method="post" action="/server/tricks/virtual.domain.php#verify">
		<input type="hidden" name="CommentThing" value="CommentThing" />

		<div style="text-align:center;">
			<h3 class="message">
				First, confirm that you are human by entering the code you see..
			</h3>
			<h3>
				<span style="font-size:x-small;">(if you find the code difficult to decipher, click it for a new one!)</span><br />
			</h3><br />
			<div class="text-verify" onclick="document.getElementById('verify').submit();" title="click me for fresh text!">
				<div class="verify-title">Enter the 5-digit code this text <em>sounds like</em> :</div><br />
			<div class="verify-text">lower-case vee, Upper-Case Ay, ate, lower-case arrgh, Upper-Case Ex</div>
			</div><br />
			<div class="ortext">
				<label for="text-verify">use text-based authentication
				<input type="checkbox" name="text-verify" id="text-verify" value="1" onclick="document.getElementById('verify').submit();" title="use text-based authentication" /></label>
			</div>
			<br />
			<input type="text" id="gd_string" name="gd_string" title="Enter Code Here" />&nbsp;
			<input type="submit" name="check-it" value="check it!" /><br />
			<div class="clear"></div>
			<!-- in case you are taking for ever and your session expires  -->
			<input type="hidden" name="preview" value="preview" />
			<input type="hidden" name="number" value="" />
			<textarea class="hidden" name="comment-text" style="width:0;" title="hidden data" ></textarea>
		<div class="clear-half"></div>
		</div>
	</form>
</div>
</div>
<aside class="promotion"><div id="ad-banner"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- corz.org webmaster  banner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:120px;height:240px;background-color:#fff7d1"
     data-ad-client="ca-pub-7123663696036963"
     data-ad-slot="8275005566"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<noscript><!-- google stuff --></noscript></div><div id="ad-skyscraper"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- corz.org webmaster wide skyscraper -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px;background-color:#fff7d1"
     data-ad-client="ca-pub-7123663696036963"
     data-ad-slot="8517313669"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<noscript><!-- google stuff --></noscript></div>
</aside>
<aside id="my-promotion">
<div class="my-promo-plate">
	<a onclick="window.open(this.href); return false;" href="http://corz.org/server/tools/active-errors/" title="Keep your lost visitors.. Intelligent custom error document handling with Active Error Pages.">
		<img class="promo-img" width="64" id="res_image_active-errors" src="/server/tools/active-errors/img/Active-Error-Pages_256px.png" alt="image for server" />
		<div class="my-ad-message">Auto-<wbr>Seek-<wbr>and-<wbr>Serve&trade;</div>
	</a>
</div>
<div class="my-promo-plate">
	<a onclick="window.open(this.href); return false;" href="http://corz.org/server/tools/corzoogle/" title="Real-Time Search Engine for your Website or Personal Server..">
		<img class="promo-img" width="64" id="res_image_corzoogle" src="/server/tools/corzoogle/img/corzoogle-fast-real-time-search-logo_256px.png" alt="image for server" />
		<div class="my-ad-message">Configure Every Thing!</div>
	</a>
</div>
<div class="my-promo-plate">
	<a onclick="window.open(this.href); return false;" href="http://corz.org/server/tools/distromachine/" title="Distribution For Busy Humans..">
		<img class="promo-img" width="64" id="res_image_distromachine" src="/server/tools/distromachine/img/corz-distro-machine_256px.png" alt="image for server" />
		<div class="my-ad-message">Back-<wbr>End, Front-<wbr>End!</div>
	</a>
</div>
</aside><div class="site-notice-bar" data-tab-text="welcome to corz.org!"><p class="bigger strong">Welcome to corz.org!
<p>If something isn't working, I'm probably <em>improving</em> it, try again in a minute.  If it's still not working, please <a title="Mail Me!" href="/corz/mail-me.php?subject=BUGS!" onclick="OpenWindow(this.href,900,640);return false;">mail me!</a>
</div>
<div class="clear-quarter"></div>
<noscript><div class="warning centered h3">Please enable JavaScript for corz.org.<br />
There are things I want to show you!</div></noscript>
<footer>
<div class="footer" id="footer">
	<div id="footer-middle">
		<span class="footer-middle">
		<a id="search" href="http://corz.org/search" title="Search Cor's Org...
[http://corz.org.. powered by biofuels.. one day]"></a>
		<br />
		&nbsp;&copy;&nbsp;&nbsp;2014&nbsp;&laquo;&nbsp;<a href="http://corz.org/links.php" title="all content and back-end code &copy; 2000 - 2014 cor &amp; corz.org..  comments &copy; their respective authors">corz.org</a>&nbsp;&raquo;&nbsp;22.7.14<br />
		<span class="timerstring">little timer computer say this page generated in 0.010 seconds</span>
		</span>
	</div>
	<div id="footer-left">&nbsp;&nbsp;random word from <a href="http://corz.org/blog/"
	title="forsooth! the blog words of randomness!" id="cor-random">corzblog</a>:&nbsp;<strong>following</strong></div>
	<div id="footer-right"><strong>gniwollof</strong> :<span title="!ssenmodnar fo sdrow golb eht !thoosrof" id="modnar-roc">golbzroc</span> morf drow modnar&nbsp;&nbsp;&nbsp;</div>
</div>
<div id="underfoot" class="foot-gradient" title="Damn! This gradient looks FINE in Firefox!"></div>
<div class="underfoot">
	<div id="underfoot-buttons">

		<div class="undertitle undertitle-translate" title="NOTE: THIS WILL MANGLE TECHNICAL OUTPUT !!! (e.g. scripts)
I do apologize if your country isn't included! Try the 'World' output..">
			Machine Translations
		</div>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fvirtual.domain.php&amp;langpair=en%7Czh-CN" title="Automatic Chinese (simplified) Translation"><img class="dim flag" src="/img/flags/flag-china-simplified.png" alt="Simplified Chinese translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fvirtual.domain.php&amp;langpair=en%7Cnl&amp;ie=UTF-8" title="Automatic Dutch Translation"><img class="dim flag" src="/img/flags/flag-netherlands.png" alt="Deutsch translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fvirtual.domain.php&amp;langpair=en%7Cfr&amp;ie=UTF-8" title="Automatic French Translation"><img class="dim flag" src="/img/flags/flag-france.png" alt="French translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fvirtual.domain.php&amp;langpair=en%7Cde&amp;ie=UTF-8" title="Automatic German Translation"><img class="dim flag" src="/img/flags/flag-germany.png" alt="German translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fvirtual.domain.php&amp;langpair=en%7Cit&amp;ie=UTF-8" title="Automatic Italian Translation"><img class="dim flag" src="/img/flags/flag-italy.png" alt="Italian translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fvirtual.domain.php&amp;langpair=en%7Cja" title="Automatic Japanese Translation"><img class="dim flag" src="/img/flags/flag-japan.png" alt="Japanese translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fvirtual.domain.php&amp;langpair=en%7Cko&amp;ie=UTF-8" title="Automatic Korean Translation"><img class="dim flag" src="/img/flags/flag-korea.png" alt="Korean translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fvirtual.domain.php&amp;langpair=en%7Cpt&amp;ie=UTF-8" title="Automatic Portuguese Translation"><img class="dim flag" src="/img/flags/flag-portugal.png" alt="Portuguese translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fvirtual.domain.php&amp;langpair=en%7Cpl&amp;ie=UTF-8" title="Automatic Polish Translation"><img class="dim flag" src="/img/flags/flag-poland.png" alt="Polish translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fvirtual.domain.php&amp;langpair=en%7Ces&amp;ie=UTF-8" title="Automatic Spanish Translation"><img class="dim flag" src="/img/flags/flag-spain.png" alt="Spanish translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fvirtual.domain.php" title="Automatic World Translation"><img class="dim flag" src="/img/flags/flag-world.png" alt="World translation of this page" /></a>
		<div class="clear-minute"></div>
		<div class="x-small trans-note" title="These are my biggest supporters, after English-speaking countries, in no particular order.">
			NOTE: This Will Mangle Technical Output (e.g. scripts).
		</div>

		<div class="clear"></div>
		<div class="undertitle undertitle-colors" title="Switch color schemes">
			scheme
			&thinsp;<a href="http://validator.w3.org/check?uri=referer&amp;ss=1" title="Standards-Compliant HTML5.. So if it looks wonky, blame your crap web browser!"><img
			src="/img/valid-html5.png" class="valid-button" id="valid-html" alt="HTML5 icon (meaning, validated HTML5)"/></a><a href="http://jigsaw.w3.org/css-validator/validator?uri=http://corz.org%2Fserver%2Ftricks%2Fvirtual.domain.php&amp;ss=1"
			title="Run your validator all up and down my CSS!"><img src="/img/valid-css3.png"
			class="valid-button" id="valid-css" alt="CSS3 icon (meaning, validated CSS3)" /></a>

		</div>
		
	<div id="user-scheme-mini">
		<ul id="user-scheme-controls">
			<li><form method="post" action="/server/tricks/virtual.domain.php" class="user-submit-form">
				<input type="submit" class="user-scheme-submit" value="oranges" title="Switch to oranges"/>
				<input type="hidden" name="ajax" value="true"/>
				<input type="hidden" name="scheme" value="oranges"/>
				<input type="hidden" name="goblog" value=""/>
			</form></li>
			<li><form method="post" action="/server/tricks/virtual.domain.php" class="user-submit-form">
				<input type="submit" class="user-scheme-submit" value="blues" title="Switch to blues"/>
				<input type="hidden" name="ajax" value="true"/>
				<input type="hidden" name="scheme" value="blues"/>
				<input type="hidden" name="goblog" value=""/>
			</form></li>
			<li><form method="post" action="/server/tricks/virtual.domain.php" class="user-submit-form">
				<input type="submit" class="user-scheme-submit" value="dark" title="Switch to dark"/>
				<input type="hidden" name="ajax" value="true"/>
				<input type="hidden" name="scheme" value="dark"/>
				<input type="hidden" name="goblog" value=""/>
			</form></li>
			<li><form method="post" action="/server/tricks/virtual.domain.php" class="user-submit-form">
				<input type="submit" class="user-scheme-submit" value="browser" title="Switch to browser"/>
				<input type="hidden" name="ajax" value="true"/>
				<input type="hidden" name="scheme" value="browser"/>
				<input type="hidden" name="goblog" value=""/>
			</form></li>
			<li><form method="post" action="/server/tricks/virtual.domain.php" class="user-submit-form">
				<input type="submit" class="user-scheme-submit" value="reset" title="Switch to reset"/>
				<input type="hidden" name="ajax" value="true"/>
				<input type="hidden" name="scheme" value="reset"/>
				<input type="hidden" name="goblog" value=""/>
			</form></li>
		</ul>
	</div>
		<div class="clear"></div>
	</div>

	<nav id="underfoot-tools">
		<h1>Underfooter Tools</h1>
		<div class="undertitle undertitle-tools">Site Tools</div>
		<div id="underfoot-site-tools">
			<a href="http://corz.org/ip" onclick="window.open(this.href); return false;"
				title="Your external IP address, in plain text, with nothing else.." id="link-internal-site-tools-what_is_my_IP">What's MY IP</a><br />
			<a href="http://corz.org/user-agent" onclick="window.open(this.href); return false;"
				title="Your browser's USER AGENT String?" id="link-internal-site-tools-USER_AGENT">What's MY User Agent</a><br />
			<a href="http://corz.org/probe" onclick="window.open(this.href); return false;" title="Simple, effective P2P Port Probe.. Test your Ports!" id="link-internal-port-probe">P2P Port Probe</a><br />
<script>
//<![CDATA[
<!--
document.write("<a title=\"The Upload Facility.. You love it!\" href=\"/upload\" onclick=\"OpenWindow(this.href,620,480);return false;\">File Upload</a>")
//-->
//]]>
</script>
<noscript><a href="http://corz.org/upload" title="the corz.org upload facility" id="link-internal-site-upload">File Upload</a></noscript><br />
			<a href="http://corz.org/public/machine/source/php/tag-tools.php" onclick="window.open(this.href); return false;"
				title="HTML to php and php to HTML and more... It's the one and only.. Tag-Tools!" id="link-internal-site-tools-tag_tools">Tag-Tools!</a><br />
		</div>
	</nav>

	<nav>
		<h1>Quick Links</h1>
		<div id="underfoot-quicklinks">
			<div class="undertitle undertitle-quicklinks">Quick Links</div>
			<a href="http://corz.org/" title="Go Home!" id="link-internal-home">home</a>
			&bull;
			<a href="http://corz.org/search" title="Search Cor's Org!" id="link-internal-search">search</a>
			&bull;
			<a href="http://corz.org/blog" title="Cor's Blog!" id="link-internal-blog">corzblog</a>
			&bull;
			<a href="http://corz.org/devblog" title="Software updates, other dev-related stuff.."
			id="link-internal-dev_blog">devblog</a>
			&bull;
			<a href="http://corz.org/blogtest" title="Cor's TEST Blog.. You got admin!" id="link-internal-blogtest">test blog</a>
			&bull;
			<a href="http://corz.org/engine" title="Downloads!" id="link-internal-download-engine">downloads</a>
			&bull;
			<a href="http://corz.org/corz/contact.php" title="Contact Cor!" id="link-internal-Contact_Cor">contact</a>
			&bull;
			<a href="http://corz.org/corz/hire-cor.php" title="Hire Cor!" id="link-internal-Hire_Cor">hire cor</a>
			&bull;
			<a href="http://corz.org/corz/donate.php" title="Put YOUR money where MY mouth is!"
			id="link-internal-give_back_to_cor_and_family">give back</a>
			&bull;
<script>
//<![CDATA[
<!--
document.write("<a title=\"Mail Me!\" href=\"\/corz\/mail-me.php\" onclick=\"OpenWindow(this.href,900,640);return false;\">email<\/a>")
//-->
//]]>
</script><noscript><a href="/corz/mail-me.php" title="Mail Me!">email</a></noscript>
			&bull;
<script>
//<![CDATA[
<!--
document.write("<a title=\"Subscribe and Unsubscribe to the corz.org mailing list!\" href=\"/corz/mailing-list.php\" onclick=\"OpenWindow('/corz/mailing-list.php',900,640);return false;\">mailing list</a>")
//-->
//]]>
</script><noscript><a href="/corz/mailing-list.php" title="Subscribe and Unsubscribe to the corz.org mailing list!">mailing list</a></noscript>
			&bull;
			<a href="http://corz.org/bbtags" title="BBTags Reference!" id="link-internal-BBTags_Guide">bbtags guide</a>
			&bull;
			<a href="http://corz.org/fun/" title="Super-Big-Mega-Fun!" id="link-internal-fun_stuff">fun stuff</a>
			&bull;
			<a href="http://corz.org/fun/weegary.php" title="Wee Gary. Back in containment!" id="link-internal-fun_stuff-weegary">that bot</a>
			&bull;
<script>
//<![CDATA[
<!--
document.write("<a title=\"Site Chat.. (Needs JavaScript - and if corz.org is in your trusted sites, you get a better windoid!)\" href=\"\/chat\/\" onclick=\"OpenChatWindow(this.href,820,400,50,150);return false;\">site chat<\/a> &bull;")
//-->
//]]>
</script>
<noscript><!-- without javascript, you might as well forget about this chat --></noscript>
			<a href="http://corz.org/public/machine/source/php/corz%20function%20library/admin%20tools/session-view.php" onclick="window.open(this.href); return false;"
			title="View your current php session variables.." id="link-internal-session_viewer">session viewer</a>
			<div class="clear-tiny"></div>
			<a href="#" onclick="GoTop();return false;" title="corz.org is best viewed with a standards-compliant browser." id="link-internal-Top_of_page" class="larger">top of the page</a>
		</div>


	</nav>
	<div class="clear"></div>
</div>
</footer>
<script>
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<noscript><!-- google analytics - PLEASE enable JavaScript for corz.org - this stuff helps the site --></noscript>
<script>
//<![CDATA[
<!--

if (document.images) {
	// preload roll-over images..
	var PreImagesArray = [];
	var ImgLoadArray = [];

	PreImagesArray.push("/blog/inc/img/corzblog_hover.png")
	PreImagesArray.push("/blog/inc/themes/original/images/edit-corzblog-pencil-hover.png")
	PreImagesArray.push("/blog/inc/themes/original/images/permalink-icon-chain-links-hover.png")
	for (var i=0, iLen=PreImagesArray.length; i<iLen; i++) {
		ImgLoadArray[i]  = new Image();
		ImgLoadArray[i].src = PreImagesArray[i];
	}
}
// check scroll position.. see /inc/js/corz.js for the good stuff.
window.onscroll = function() {
	var ScrollPos = GetScrollPos();
	if ( ScrollPos > window.innerHeight ) {
		document.getElementById("top-of-page").style.display = "block";
		document.getElementById("ad-skyscraper").style.display = "block";
		document.getElementById("ad-banner").style.display = "none";
	} else {
		document.getElementById("top-of-page").style.display = "none";
		document.getElementById("ad-skyscraper").style.display = "none";
		document.getElementById("ad-banner").style.display = "block";
	}
}
function GetScrollPos() {
	return (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).ScrollPos;
}
document.getElementById("ad-banner").style.display = "block"; /* lol! */
document.getElementById("ad-skyscraper").style.display = "none";


// how mad is needing this?...
parent.document.body.style.webkitTextSizeAdjust = "auto";
parent.document.body.style.zoom = "100%";

//-->
//]]>
</script>
<noscript><!-- Please Enable JavaScript for corz.org --></noscript>
</body>
</html>
