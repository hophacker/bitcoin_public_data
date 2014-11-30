http://corz.org/server/tricks/htaccess2.php
HTTP/1.1 200 OK
Server: nginx
Date: Wed, 23 Jul 2014 13:48:46 GMT
Content-Type: text/html; charset=utf-8
Connection: close
Set-Cookie: PHPSESSID=n2c1st2e2vmnekj6mhce2i99v0; path=/
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: private
Pragma: no-cache
Set-Cookie: notice=seen; expires=Thu, 24-Jul-2014 13:48:46 GMT; path=/
Set-Cookie: cookie_notice=seen; expires=Sat, 20-Jul-2024 13:48:46 GMT; path=/
Content-Encoding: gzip
Vary: Accept-Encoding
X-Powered-By: PleskLin

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<title>.htaccess tricks and tips.. part two: url rewriting with mod rewrite.</title>
<meta name="description" content=".htaccess files. cool htaccess tricks and tips, how-to, know-how and examples.. a corz-style tutorial." />
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
<!-- client IP: 54.224.202.109 -->
<!-- saved from http://corz.org/server/tricks/htaccess2.php -->
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
window.status="there's no place like ~/"
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
</nav><div class="content">


	<h1>more .htaccess tips and tricks..</h1>

	<div class="ht-title">
		&lt;ifModule&gt;<br />
		<span class="clever">more clever stuff here</span><br />
		&lt;/ifModule&gt;
	</div>

	<div class="clear-small"></div>

	<h2>redirecting and rewriting</h2>

	<blockquote>
	<div class="code-space" id="quote-intro">
		<p><em>"The great thing about mod_rewrite is it gives you all the configurability and flexibility of Sendmail. The downside to mod_rewrite is that it gives you all the configurability and flexibility of Sendmail."</em>

		<div class="right">- Brian Behlendorf, Apache Group</div>
	</div>
	</blockquote>

	<div id="section-intro" class="clear-small"></div>


	<div id="intro">
		<p>One of the more powerful tricks of the .htaccess hacker is the ability to rewrite URLs. This enables us to do some mighty manipulations on our links; useful stuff like transforming Very Long URL's into Short, Cute URLs, transforming dynamic <span class="urltxt">?generated=page&amp;URL's</span> into <span class="urltxt">/friendly/flat/links</span>, redirect missing pages, preventing hot-linking, performing automatic language translation, and much, <em>much</em> more.


		<p>Make no mistake, <code>mod_rewrite</code> is <em>complex.</em> This isn't the subject for a quick bite-size tech-snack, probably not even a week-end crash-course, I've seen guys pull off some real cute stuff with <code>mod_rewrite</code>, but with kudos-hat tipped firmly towards that bastard operator from hell, Ralf S. Engelschall, author of the magic module itself, I have to admit that a great deal of it still seems so much voodoo to me.


		<div class="right">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- corz.org webmaster  rectangle -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px;background-color:#fff7d1"
     data-ad-client="ca-pub-7123663696036963"
     data-ad-slot="4453380472"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<noscript><!-- google stuff --></noscript>		</div>

		<p>The way that rules can work one minute and then seem not to the next, how browser and other in-between network caches interact with rules and testing rules is often baffling, maddening. When I feel the need to bend my mind completely out of shape, I mess around with <code>mod_rewrite</code>!


		<p>After all this, it does work, and while I'm not planning on taking that week-end crash-course any time soon, I have picked up a few wee tricks myself, messing around with web servers and web sites, this place..


		<p>The plan here is to just drop some neat stuff, examples, things that have proven useful, and work on a variety of server setups; there are Apache's all over my LAN, I keep coming across old .htaccess files stuffed with past rewriting experiments that either worked; and I add them to my list, or failed dismally; and I'm surprised that more often these days, I can <em>see exactly why!</em>

		<p>Very little here is my own <a title="well, okay, a couple of things I did 'invent' - the auto-translation came to me in a dream, and then there's - a limit to anchor titles! ;o)" id="this-article-MIRRORED-hahahah-worldwide">invention</a>. Even the bits I figured out myself were already well documented, I just hadn't understood the documents, or couldn't find them. Sometimes, just looking at the same thing from a different angle can make all the difference, so perhaps this humble stab at URL Rewriting might be of some use. I'm writing it for me, of course. but I do get some credit for this..

		<blockquote>
			<div class="code-space" id="intro-time-to-get-dynamic">
				<code>
				 <span class="code-comment"># time to get dynamic, see..</span><br />
				 RewriteRule (.*)\.htm $1.php<br />
				</code>
			</div>
		</blockquote>
	</div>


	<div id="section-beginning" class="space-tiny"></div>


	<h3>beginning rewriting..</h3>

	<div id="beginning">

		<p>Whenever you use <code>mod_rewrite</code> (the part of Apache that does all this magic), you need to do..

		<blockquote>
		<div class="code-space" id="rewrite-rule-follow-symlinks">
			<div class="codetop">
				you only need to do this once per .htaccess file:
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				RewriteEngine on<br />
			</div>
		</div>
		</blockquote>


		<p>..before any ReWrite rules. <strong>note:</strong> <code>+FollowSymLinks</code> <strong>must</strong> be enabled for <em>any</em> rules to work, this is a security requirement of the rewrite engine. Normally it's enabled in the root and you shouldn't have to add it, but it doesn't hurt to do so, and I'll insert it into all the examples on this page, just in case*.


				The next line simply switches on the rewrite engine
		<p>for that folder. if this <a title="any instruction for a server, either in an httpd.conf, a php.ini, or an .htaccess file is called a 'directive'">directive</a> is in you main .htaccess file, then the ReWrite engine is theoretically enabled for your entire site, but it's wise to always add that line before you write any redirections, <em>anywhere.</em>


		<p><small><strong>* </strong>Although highly unlikely, your host may have <code>+FollowSymLinks</code> enabled at the root level, yet <em>disallow</em> its addition in .htaccess; in which case, adding <code>+FollowSymLinks</code> will break your setup (probably a 500 error), so just remove it, and your rules should work fine.</small>


		<p><small><strong>Important:</strong> While some of the directives on this page may appear split onto two lines in your browser, in your .htaccess file they <em>must</em> exist completely on one line. If you drag-select and copy the directives on this page, they should paste just fine into any text editor.</small>

	</div>



	<div id="section-simple_rewriting" class="clear-small"></div>


	<h3>simple rewriting</h3>
	<div id="simple">

		<p>Simply put, Apache scans all incoming URL requests, checks for matches in our .htaccess file and rewrites those matching URLs to whatever we specify. something like this..

		<blockquote>
		<div class="code-space" id="rewrite-rule-htm-to-php">
			<div class="codetop">
				all requests to whatever.htm will be sent to whatever.php:
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				RewriteEngine on<br />
				RewriteRule ^(.*)\.htm$ $1.php [NC]<br />
			</div>
		</div>
		</blockquote>


		<p>Handy for anyone updating a site from static htm (you could use .html, or .htm(.*), .html?, etc.) to dynamic php pages; requests to the old pages are automatically rewritten to our new urls. No one notices a thing, visitors and search engines can access your content either way. Leave the rule in; as an added bonus, this enables us to easily split php code and its included html structures into two separate files, a nice idea; makes editing and updating a breeze. The [NC] part at the end means "No Case", or "case-insensitive"; more on the switches, later.


		<p>Folks can link to whatever.htm or whatever.php, but they always get whatever.php in their browser, and this works even if whatever.htm doesn't exist! But I'm straying..


		<p>As it stands, it's a bit tricky; folks will still have whatever.htm in their browser address bar, and will still keep bookmarking your old .htm URL's. Search engines, too, will keep on indexing your links as .htm, some have even argued that serving up the same content from two different places could have you <em>penalized</em> by the search engines. This may or not bother you, but if it does, <code>mod_rewrite</code> can do some more magic..

		<blockquote>
		<div class="code-space" id="rewrite-rule-htm-to-php-permanent">
			<div class="codetop">
				this will do a "real" external redirection:
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				RewriteEngine on<br />
				RewriteRule ^(.+)\.htm$ http://corz.org/$1.php [R,NC]<br />
			</div>
		</div>
		</blockquote>


		<p>This time we instruct <code>mod_rewrite</code> to do a proper external rewrite, aka, "redirection". Now, instead of just background rewriting on-the-fly, the user's browser is physically redirected to a new URI, and <code>whatever.php </code>appears in their browser's address bar - search engines and other spidering entities will automatically update their links to the .php versions; everyone wins. You can take your time with the updating, too.


		<p>Note: if you use <code>[R]</code> alone, it defaults to sending an HTTP "MOVED TEMPORARILY" redirection, aka, "302". But you can send other codes, like so..

		<blockquote>
		<div class="code-space" id="rewrite-rule-htm-to-php-permanent-301">
			<div class="codetop">
				this performs the exact same as the previous example RewriteRule.
			</div>
			<div class="code-block">
				RewriteRule ^(.+)\.htm$ http://corz.org/$1.php [R=302,NC]<br />
			</div>
		</div>
		</blockquote>


		<p>Okay, I sent the exact same code, but I didn't <em>have</em> to. For details of the many <code>30*</code> response codes you can send, see <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html" title="Stick with the 300 range!" id="link-http-response-codes">here</a>. Most people probably want to send <code>301</code>, aka, "MOVED PERMENENTLY".


		<p>Note: if you add an "L" flag to the mix; meaning "Last Rule", e.g. <code>[R=302,NC,L]</code>; Apache will stop processing rules <em>for this request</em> at that point, which may or may not be what you want. Either way, it's useful to know.
	</div>



	<div id="section-not_so_simple" class="clear-small"></div>

	<h3>not-so-simple rewriting ... flat links and more</h3>

	<div id="not-so-simple">

		<p>You may have noticed, the above examples use <em><a title="mod_rewrite uses POSIX standard regular expressions">regular expression</a></em> to match variables. What that simply means is.. match the part inside (.+) and use it to construct "$1" in the new URL. In other words, (.+) = $1 you could have multiple (.+) parts and for each, <code>mod_rewrite</code> automatically creates a matching $1, $2, $3, etc, in your target (aka. 'substitution') URL. This facility enables us to do all sorts of tricks, and the most common of those, is the creation of "flat links"..


		<p>Even a cute short link like <span class="urltxt">http://mysite/grab?file=my.zip</span> is too ugly for some people, and nothing less than a true old-school solid <span class="urltxt">domain/path/flat/link</span> will do. Fortunately, <code>mod_rewrite</code> makes it easy to convert URLs with query strings and multiple variables into exactly this, something like..

		<blockquote>
		<div class="code-space" id="rewrite-rule-with-regex">
			<div class="codetop">
				a more complex rewrite rule:
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				RewriteEngine on<br />
				RewriteRule ^files/([^/]+)/([^/]+).zip /download.php?section=$1&amp;file=$2 [NC]<br />
			</div>
		</div>
		</blockquote>


		<p>would allow you to present this link as..

		<p><span class="urltxt">&nbsp;&nbsp;http://mysite/files/games/hoopy.zip</span>


		<p>and in the background have that transparently translated, server-side, to..


		<p><span class="urltxt">&nbsp;&nbsp;http://mysite/download.php?section=games&amp;file=hoopy</span>


		<p>which some script could process. You see, many search engines simply don't follow our <span class="urltxt">?generated=links</span>, so if you create generating pages, this is useful. However, it's only the dumb search engines that can't handle these kinds of links; we have to ask ourselves.. do we really want to be listed by the dumb search engines? <a href="http://www.google.com" title="the world's number one search engine" onclick="window.open(this.href); return false;">Google</a> will handle a good few parameters in your URL without any problems, and the (hungry hungry) <a href="http://search.msn.com/msnbot.htm" title="many now have .htaccess deny rules in place for this voracious page-guzzler!">msn-bot</a> stops at nothing to <em>get that page</em>, sometimes again and again and again…


		<p>I personally feel it's the search engines that should strive to keep up with modern web technologies, in other words; we shouldn't have to dumb-down for them. But that's just my opinion. Many <em>users</em> will prefer <span class="urltxt">/files/games/hoopy.zip</span> to <span class="urltxt">/download.php?section=games&amp;file=hoopy</span> but I don't mind either way. As someone pointed out to me recently, presenting links as <span class="urltxt">standard/flat/paths</span> means you're less likely to get folks doing typos in typed URL's, so something like..

		<blockquote>
		<div class="code-space" id="rewrite-rule-more-comlex-regex">
			<div class="codetop">
				an even more complex rewrite rule:
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				RewriteEngine on<br />
				RewriteRule ^blog/([0-9]+)-([a-z]+) http://corz.org/blog/index.php?archive=$1-$2 [NC]<br />
			</div>
		</div>
		</blockquote>


		<p>would be a neat trick, enabling anyone to access my blog archives by doing..

		<p>&nbsp;<a href="http://corz.org/blog/2003-nov" title="any excuse for an inward link!"><span class="urltxt">http://corz.org/blog/2003-nov</span></a>


		<p>in their browser, and have it automagically transformed server-side into..


		<p>&nbsp;<a href="http://corz.org/blog/index.php?archive=2003-nov" title="ditto!"><span class="urltxt">http://corz.org/blog/index.php?archive=2003-nov</span></a>

		<p>which <a href="http://corz.org/blog/" title="drop-in-and-blog blogging software from corz.org">corzblog</a> would understand (note: corzblog can also <em>produce</em> flat links - the crucial "other side" of the flat-links equation that people often forget in their quest for cute URLs). It's easy to see that with a little imagination, and a basic understanding of <a href="http://www.google.com/search?q=posix+regular+expression+syntax" title="understanding regex will empower you in ways you would not imagine" onclick="window.open(this.href); return false;">posix regular expression</a>, you can perform some highly cool URL manipulations.


		<div class="clear-small"></div>

		<p class="big">Here's the basics of regexp (expanded from the Apache <code>mod_rewrite</code> documentation)..


		<div id="section-regexp_basics" class="space-tiny"></div>

		<blockquote id="regexp-basics-special-characters">
		<div class="code-space" id="rewrite-rule-regexp-special-characters">
	<pre><strong>Escaping:</strong>

	<strong>\</strong>char escape that particular char

		For instance to specify special characters.. <strong>[].()\</strong> etc.

	<strong>Text:</strong>

	<strong>.</strong>             Any single character  (on its own = the entire URI)
	<strong>[</strong>chars<strong>]</strong>       Character class: One of following chars
	<strong>[^</strong>chars<strong>]</strong>      Character class: None of following chars
	text1<strong>|</strong>text2   Alternative: text1 or text2 (i.e. "or")

		<strong>e.g.</strong> <strong>[^/]</strong> matches any character <em>except</em> <strong>/</strong>
			 <strong>(foo|bar)\.html</strong> matches <strong>foo.html</strong> <em>and</em> <strong>bar.html</strong>

	<strong>Quantifiers:</strong>

	<strong>?</strong> 0 or 1 of the preceding text
	<strong>*</strong> 0 or N of the preceding text  (hungry)
	<strong>+</strong> 1 or N of the preceding text

		<strong>e.g.</strong> <strong>(.+)\.html?</strong> matches <strong>foo.htm</strong> <em>and</em> <strong>foo.html</strong>
			 <strong>(foo)?bar\.html</strong> matches <strong>bar.html</strong> <em>and</em> <strong>foobar.html</strong>

	<strong>Grouping:</strong>

	<strong>(</strong>text<strong>)</strong>  Grouping of text

		Either to set the borders of an alternative or
		for making backreferences where the <strong>n</strong>the group can
		be used on the target of a RewriteRule with <strong>$n</strong>

		<strong>e.g. </strong> ^<strong>(.*)</strong>\.html foo.php?bar=<strong>$1</strong>

	<strong>Anchors:</strong>

	<strong>^</strong>    Start of line anchor
	<strong>$</strong>    End   of line anchor

		An anchor explicitly states that the character <em>right next to it</em> MUST
		be either the very first character ("^"), or the very last character ("$")
		of the URI string to match against the pattern, e.g..

		<strong>^foo(.*)</strong> matches <strong>foo</strong> and <strong>foobar</strong> but <em>not</em> <strong>eggfoo</strong>
		<strong>(.*)l$</strong> matches <strong>fool</strong> and <strong>cool</strong>, but <em>not</em> <strong>foo</strong>
	</pre>
			</div>
		</blockquote>

	</div>


	<p>If you are new to messing around with code or text, you should memorize the above section. The power you gain and the time you will save is well worth the <em>minutes</em> it will take to get your head around it!

	<p>I use regex dozens, sometimes hundreds of times a day, mainly to find (and often replace) specific strings in large documents. I have probably saved about a year of LIFE all-in. That's time you can spend doing things you enjoy. Nuff said.



	<div id="section-short_URLs" class="clear-small"></div>

	<h3>shortening URLs</h3>

	<div id="short-urls">

		<p>One common use of <code>mod_rewrite</code> is to shorten URL's. Shorter URL's are easier to remember and, of course, easier to type. An example..

		<blockquote>
		<div class="code-space" id="rewrite-rule-short-urls">
			<div class="codetop">
				beware the regular expression:
			</div>
			<div class="code-block">
			Options +FollowSymlinks<br />
			RewriteEngine On<br />
			RewriteRule ^grab /public/files/download/download.php<br />
			</div>
		</div>
		</blockquote>


		<p>this rule would transform this user's URL..


		<p><span class="urltxt">&nbsp;&nbsp;http://mysite/grab?file=my.zip</span>


		<p>server-side, into..


		<p><span class="urltxt">&nbsp;&nbsp;http://mysite/public/files/download/download.php?file=my.zip</span>


		<p>which is a wee trick I use for my distro machine, among other things. everyone likes short URL's, and so will you; using this technique, you can move <span class="urltxt">/public/files/download/</span> to <em>anywhere</em> else in your site, and all the old links still work fine; simply alter your .htaccess file to reflect the new location. edit one line, done - nice - means even when stuff is way deep in your site you can have cool links like this..

		<script>
			//<![CDATA[
			<!--
			document.write("<a href=\"/trueview/php/sample.php\" onclick=\"OpenWindow(this.href,480,460);return false;\" title=\"just a simple link (opens in a windoid)\">/trueview/sample.php<\/a>")
			//-->
			//]]>
		</script>
		<noscript>
			<div>
				<a href="http://corz.org/trueview/php/sample.php">
				/trueview/php/sample.php</a>
			</div>
		</noscript>
		<p>and <a href="http://corz.org/bbtags" title="the corzblog bbcode parser bbcode guide, way deep in the site" id="bbtagslink" onclick="window.open(this.href); return false;">this</a>; links which are not only short, but <em>flat.</em>.

	</div>



	<div id="section-capturing_variables" class="clear-small"></div>

	<h3>capturing variables</h3>

	<div id="capturing-variables">

		<p>Slapping <code>(.*)</code> onto the end of the request part of a <code>ReWriteRule</code> is just fine when using a simple <code>$_GET</code> variable, but sometimes you want to do trickier things, like capturing <em>particular</em> variables and converting them into <em>other</em> variables in the target URL. Or something else..


		<p>When capturing variables, the first thing you need to know about, is the <code>[QSA]</code> flag, which simply tags all the original variables back onto the end of the target url. This may be all you need, and will happen automatically for simple rewrites. The second thing, is <code>%{QUERY_STRING}</code>, an Apache server string we can capture variables from, using simple <code>RewriteCond</code> (aka. <em>conditional</em>) statements.


		<p><code>RewriteCond</code> is similar to doing <code><em>if...then...do</em></code> in many programming languages. <em>If</em> a certain condition is true, <em>then</em> do the rewrite that follows..


		<p>In the following example, the <code>RewriteCond</code> statement checks that the query string has the <code>foo</code> variable set, and captures its value while it's there. In other words, only requests for <code>/grab</code> that have the variable <code>foo</code> set, will be rewritten, and while we're at it, we'll also switch <code>foo</code>, for <code>bar</code>, just because we can..

		<blockquote>
		<div class="code-space" id="simple-capture-variables">
			<div class="codetop">
				capturing a $_GET variable:
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				RewriteEngine On<br />
				RewriteCond %{QUERY_STRING} foo=(.*)<br />
				RewriteRule ^grab(.*) /page.php?bar=%1<br />
			</div>
		</div>
		</blockquote>


		<p>would translate a link/user's request for..

		<p><code>http://domain.com/grab?foo=bar</code>

		<p>server-side, into..

		<p><code>http://domain.com/page.php?bar=bar</code>


		<p>Which is to say, the user's browser would be fed <code>page.php</code> (without an <code>[R]</code> flag in the <code>RewriteRule</code>, their address bar would still read <code>/grab?foo=bar</code>). The variable <code>bar</code> would be available to your script, with its value set to <code>bar</code>.

		<p>This variable has been magically created, by simply using a regular <code><strong>?</strong></code> in the target of the <code>RewriteRule</code>, and tagging on the first captured backreference, <strong>%1</strong>.. <code>?bar=%1</code>


		<p><strong>Note</strong> how we use the <code><strong>%</strong></code> character, to specify variables captured in <code>RewriteCond</code> statements, aka "Backreferences". This is exactly like using <strong>$1</strong> to specify numbered backreferences captured in <code>RewriteRule</code> patterns, except for strings captured inside a <code>RewriteCond</code> statement, we use <code><strong>%</strong></code> instead of <strong>$</strong>. Simple.


		<p>You can use the <code>[QSA]</code> flag in <em>addition</em> to these query string manipulations, merge them. In the next example, the value of <code>foo</code> becomes the <em>directory</em> in the target URL, and the variable <code>file</code> is magically created. The original query string is then tagged back onto the end of the whole thing..

		<blockquote>
		<div class="code-space" id="more-complex-variable-capture">
			<div class="codetop">
				QSA Overkill!
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				RewriteEngine On<br />
				RewriteCond %{QUERY_STRING} foo=(.+)<br />
				RewriteRule ^grab/(.*) /%1/index.php?file=$1 [QSA]<br />
			</div>
		</div>
		</blockquote>

		<p>So a request for..


		<p><code>http://domain.com/grab/foobar.zip?level=5&amp;foo=bar</code>


		<p>is translated, server-side, into..


		<p><code>http://domain.com/bar/index.php?file=foobar.zip&amp;level=5&amp;foo=bar</code>


		 <p>Depending on your needs, you could even use flat links <em>and</em> dynamic variables together, something like this could be useful..


		<blockquote>
		<div class="code-space" id="variable-capture-mix-flat-and-dynamic-links">
			<div class="codetop">
				mixing flat and dynamic links in a single ruleset..
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				RewriteEngine On<br />
				RewriteCond %{QUERY_STRING} version=(.+)<br />
				RewriteRule ^grab/([^/]+)/(.*) /%1/index.php?section=$1&amp;file=$2 [QSA]<br />
			</div>
		</div>
		</blockquote>


		<p>By the way, you can easily do the <em>opposite</em>, strip a query string from a URL, by simply putting a <code><strong>?</strong></code> right at the end of the target part. This example does exactly that, whilst leaving the actual URI intact..

		<blockquote>
		<div class="code-space" id="strip-variables">
			<div class="codetop">
				just a demo!
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				RewriteEngine On<br />
				RewriteCond %{QUERY_STRING} . <br />
				RewriteRule foo.php(.*) /foo.php<strong>?</strong> [L] <br />
			</div>
		</div>
		</blockquote>

		<p>The <code>RewriteCond</code> statement only allows requests that have <em>something</em> in their query string, to be processed by the <code>RewriteRule</code>, or else we'd end up in that hellish place, dread to all mod_rewriters.. the endless loop. <code>RewriteCond</code> is often used like this; as a safety-net.


		<p>If all you are after is a <span class="urltxt">/simple/flat/link/</span> to <span class="urltxt">server-side.php?query=variable</span> translation, use something like this..

		<blockquote>
		<div class="code-space" id="simple-flat-link">
			<div class="codetop">
				a simple flat link with two "path" variables..
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				RewriteEngine On<br />
				RewriteRule ^/([^/]+)/([^/]+)/? /index.php?first-var=$1&amp;second-var=$2 [QSA]<br />
			</div>
		</div>
		</blockquote>
		</div>



	<div id="section-cooler_access_denied" class="clear-small"></div>


	<h3>cooler access denied</h3>

	<div id="cooler-access-denied">

		<p>In <a href="htaccess.php#denied" title="... .htaccess tricks: authentication, indexing, and more">part one</a> I
		demonstrated a drop-dead simple mechanism for denying access to particular files and folders. The trouble with
		this is the way our user gets a 403 "Access Denied" error, which is a bit like having a door slammed in your face.
		Fortunately, <code>mod_rewrite</code> comes to the rescue again and enables us to do less painful things. One method I often
		employ is to redirect the user to the parent folder..

		<blockquote>
		<div class="code-space" id="rewrite-rule-cool-access-denied">
			<div class="codetop">
				they go "huh?.. ahhh!"
			</div>
			<div class="code-block">
				<span class="code-comment"># send them up!</span><br />
				Options +FollowSymlinks<br />
				RewriteEngine on<br />
				RewriteRule ^(.*)$ ../ [NC]<br />
			</div>
		</div>
		</blockquote>


		<p>It works great, though it can be a wee bit tricky with the URLs, and you may prefer to use a harder location, which avoids potential issues in indexed directories, where folks can get in a loop..


		<blockquote>
		<div class="code-space" id="rewrite-rule-cooler-access-denied">
			<div class="codetop">
				they go damn! Oh!
			</div>
			<div class="code-block">
				<span class="code-comment"># send them exactly there!</span><br />
				Options +FollowSymlinks<br />
				RewriteEngine on<br />
				RewriteRule ^(.*)$ /network/routers/Voyager/ [NC]<br />
			</div>
		</div>
		</blockquote>


		<p>Sometimes you'll only want to deny access to <em>most</em> of the files in the directory, but allow access to maybe one or two files, or file types, easy..

		<blockquote>
		<div class="code-space" id="rewrite-rule-deny-with-style">
			<div class="codetop">
				deny with style!
			</div>
			<div class="code-block">
				<span class="code-comment"># users can load only "special.zip", and the css and js files.</span><br />
				Options +FollowSymlinks<br />
				RewriteEngine On<br />
				RewriteCond %{REQUEST_FILENAME} !^(.+)\.css$<br />
				RewriteCond %{REQUEST_FILENAME} !^(.+)\.js$<br />
				RewriteCond %{REQUEST_FILENAME} !special.zip$<br />
				RewriteRule ^(.+)$ /chat/ [NC]<br />
			</div>
		</div>
		</blockquote>


		<p>Here we take the whole thing a stage further. Users can access .css (stylesheet) and Javascript files without problem, and also the file called "special.zip", but requests for any other file types are immediately redirected back up to the main "/chat/" directory. You can add as many types as you need. You could also bundle the filetypes into one line using | (or) syntax, though individual lines are perhaps clearer.

		<p>For those that don't code, the "<code>!</code>" sign simply means <em>not</em> something. In most programming languages one writes "not equal to" as "<code>!=</code>" or "<code>!==</code>" or similar.

		<p>Here's the sort of thing you might find inside my <code>/inc/</code> directory..

		<blockquote>
		<div class="code-space" id="rewrite-rule-control-inc">
			<div class="codetop">
				all-in-one control..
			</div>
			<div class="code-block">
				RewriteEngine on<br />
				Options +FollowSymlinks<br />
				<span class="code-comment"># allow access with no restrictions to local machine at 192.168.1.3</span><br />
				RewriteCond %{REMOTE_ADDR} !192.168.1.3<br />
				<span class="code-comment"># allow access to all .css and .js in sub-directories..</span><br />
				RewriteCond %{REQUEST_URI} !\.css$<br />
				RewriteCond %{REQUEST_URI} !\.js$<br />
				<span class="code-comment"># allow access to the files inside img/, but not a directory listing..</span><br />
				RewriteCond %{REQUEST_URI} !img/(.*)\.<br />
				<span class="code-comment"># allow access to these particular files...</span><br />
				RewriteCond %{REQUEST_URI} !comments.php$<br />
				RewriteCond %{REQUEST_URI} !gd-verify.php$<br />
				RewriteCond %{REQUEST_URI} !post-dumper.php$<br />
				RewriteCond %{REQUEST_URI} !source-dump.php$<br />
				RewriteCond %{REQUEST_URI} !textview.php$<br />
				RewriteRule . http://%{HTTP_HOST}/ [R,NC,L]<br />
			</div>
		</div>
		</blockquote>
	</div>



	<div id="section-more_banning" class="clear-small"></div>

	<div id="more-better-banning">

		<h3>Ban User Agents, referrers, script-kiddies and more..</h3>

		<p>There are many valid reasons to ban a particular request from sucking up your site's resources; resources that could be better served to valid, interested users. It might be some cross-site attack script, or inward link from a place you don't want to be associated with, or perhaps a web sucker or download manager, whatever; .htaccess + <code>mod_rewrite</code> provides ways to protect your content from unwanted "guests".


		<p>The basic formula is standard if-then logic: <em>if</em> the request meets a particular CONDITION, <em>then</em> REWRITE the request. The "conditions" can be many things; perhaps the referrer header sent by their browser (the site they came <em>from</em>), or the page they asked for, or a particular query parameter, or the type of client (browser, etc.) they are using, or any other piece of information Apache has attached to the request. Here's an example which will deny access to "Teleport Pro", a download manager which is known to suck, hard..


		<blockquote>
		<div class="code-space" id="rewrite-this-sucker-to-my-abuse-page">
			<div class="codetop">
				Who need's a local copy, when I'm right here?..
			</div>
			<div class="code-block">
				RewriteCond %{HTTP_USER_AGENT} ^Teleport\ Pro [NC]<br />
				RewriteRule . abuse.txt [L]<br />
			</div>
		</div>
		</blockquote>


		<p>It's your site, and just like your home, you have every right to exert some control over who gets in. You may have a <em>huge</em> list of user agents you'd rather not have eating your bandwidth; so use the <code>[OR]</code> flag, and <em>line 'em up..</em>


		<blockquote>
		<div class="code-space" id="rewrite-suckers-to-my-abuse-page">
			<div class="codetop">
				A little garlic for the net vampires..
			</div>
			<div class="code-block">
				RewriteCond %{HTTP_USER_AGENT} ^BackWeb [NC,OR]<br />
				RewriteCond %{HTTP_USER_AGENT} ^Bandit [NC,OR]<br />
				RewriteCond %{HTTP_USER_AGENT} ^BatchFTP [NC,OR]<br />
				RewriteCond %{HTTP_USER_AGENT} ^BecomeBot [NC,OR]<br />
				RewriteCond %{HTTP_USER_AGENT} ^BlackWidow [NC,OR]<br />
				<span class="code-comment"># etc..</span><br />
				RewriteCond %{HTTP_USER_AGENT} ^Net\ Vampire [NC]<br />
				RewriteRule . abuse.txt [L]<br />
			</div>
		</div>
		</blockquote>


		<p>This forms the basis of what often becomes a HUGE list of ban-lines. Remember, we aren't limited to user agent strings..

		<blockquote>
		<div class="code-space" id="rewrite-anyone-to-my-abuse-page">
			<div class="codetop">
				Suckers, h4x0rz, kiddies, cross-site scripters and more.. Bye now!
			</div>
			<div class="code-block">
				<span class="code-comment"># why not come visit me directly?</span><br />
				RewriteCond %{HTTP_REFERER} \.opendirviewer\. [NC,OR]<br />
				<span class="code-comment"># this prevents stoopid cross-site discovery attacks..</span><br />
				RewriteCond %{THE_REQUEST} \?\ HTTP/ [NC,OR]<br />
				<span class="code-comment"># please stop pretending to be the Googlebot..</span><br />
				RewriteCond %{HTTP_REFERER} users\.skynet\.be.* [NC,OR]<br />
				<span class="code-comment"># really, we need a special page for these twats..</span><br />
				RewriteCond %{QUERY_STRING} \=\|w\| [NC,OR]<br />
				RewriteCond %{THE_REQUEST} etc/passwd [NC,OR]<br />
				RewriteCond %{REQUEST_URI} owssvr\.dll [NC,OR]<br />
				<span class="code-comment"># you can probably work these out..</span><br />
				RewriteCond %{QUERY_STRING} \=\|w\| [NC,OR]<br />
				RewriteCond %{THE_REQUEST} \/\*\ HTTP/ [NC,OR]<br />
				<span class="code-comment"># etc..</span><br />
				RewriteCond %{HTTP_USER_AGENT} Sucker [NC]<br />
				RewriteRule . abuse.txt [L]<br />
			</div>
		</div>
		</blockquote>


		<p>Fortunately, <code>mod_rewrite</code> can parse enormous lists of ban-lines in milliseconds, so feel free to be as specific and comprehensive as required.


		<p>As ever, <strong>thorough testing is strongly recommended</strong>. Simply send requests matching your conditions and see what happens. And importantly; normal requests, too. Firefox, Opera, Konqueror, and most other decent browsers, allow you to alter the user agent string; though you would quickly find the process tedious in a testing situation. Far better to use some tool better designed to send fake HTTP requests..


		<p>It's not too difficult to mock up a web request on the command-line with any-old user agent using a scripting language like php or Perl, if you have these things available (read: most Linux/UNIX/BSD/etc. as well as many other <a title="Operating Systems" >OS</a>). Many examples exist online. In fact, you could quickly create a <em>suite</em> of tests, designed to interrogate all your rewrite rules, with results logging and much more, if required. <a href="http://curl.haxx.se/" title="groks those URLs, apparently." id="link-external-cURL">cURL</a> is always useful for jobs like this, so long as you don't add a cURL ban-line!


		<p>On a Windows desktop, <a href="http://preview.samspade.org/ssw/" title="DO NOT DISABLE THE STARTUP QUOTES! That's my advice." id="link-external-Sam_Spade_Software">Sam Spade</a> can send a single spoofed request with a couple of clicks, along with a stack of similarly handy tricks, and regularly proves itself invaluable.


		<div id="section-anti-hammer" class="clear-small"></div>


		<h3>Don't let just <em>anyone</em> hammer your site!</h3>

		<p>While I'm on the subject of abusive web clients, you will probably have noticed that many clients (bots, spiders, automated suckers and such) like to disguise their user agent information, in fact <em>any</em> information, in an attempt to bring your site to its knees, hammering your pages umpteen times per second in the process. Not good.


		<p>If you are interested in a way to defeat hammering web clients regardless of who they <em>pretend</em> to be or whether or not they accept cookies or any such malarkey, protecting your valuable server resources for <em>genuine</em> clients, check out: <a href="http://corz.org/server/tools/anti-hammer/" title="Automatically ban web site hammers! Protect your valuable server resources for genuine clients." id="link-server-tools_anti-hammer"><strong>Anti-Hammer</strong></a>.

	</div>



	<div id="section-prevent_hot-linking" class="clear-small"></div>

	<h3>prevent hot-linking</h3>

	<div id="h0t71nKiN4_FuCkP1g5">

		<p>Believe it or not, there are some webmasters who, rather than coming up with their own content will <em>steal</em> yours. Really! Even worse, they won't even bother to copy to their own server to serve it up, they'll just <strong>link to your content!</strong> &nbsp;no, it's true, in fact, it used to be incredibly common. These days most people like to prevent this sort of thing, and .htaccess is one of the best ways to do it.


		<p>This is one of those directives where the mileage variables are at their limits, but something like this works fine for me..

		<blockquote>
		<div class="code-space" id="rewrite-rule-prevent-hot-linking">
			<div class="codetop">
				how DARE they!
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				<span class="code-comment"># no hot-linking</span><br />
				RewriteEngine On<br />
				RewriteCond %{HTTP_REFERER} !^$<br />
				RewriteCond %{HTTP_REFERER} !^http://(www\.)?corz\.org/ [NC]<br />
				RewriteCond %{REQUEST_URI} !hotlink\.(gif|png) [NC]<br />
				RewriteRule .*\.(gif|jpg|png)$
				<script>
				//<![CDATA[
				<!--
					document.write("<a href=\"/inc/img/hotlink.php/foo.png\" onclick=\"OpenWindow(this.href,300,40,event.screenX-150,event.screenY-60);return false;\" title=\"this is what you get hot-linking to corz.org!\">http://corz.org/img/hotlink.png<\/a>  [NC]")
				//-->
				//]]>
				</script>
				<noscript>
					<div>
						<a href="http://corz.org/inc/img/hotlink.php/foo.png" title="(opens in a new window - apple-click (shift-click on peecees) for a new tab instead)">
						http://corz.org/img/hotlink.png</a>  [NC]<br />
					</div>
				</noscript>
			</div>
		</div>
		</blockquote>


		<p>You may see the last line broken into two, but it's all one line (all the directives on this page are). Let's have a wee look at what it does..


		<p>We begin by enabling the rewrite engine, as always.


		<p>The first <a title="'conditions', things to and match against the rewrite rule with deal with whatever requests these 'conditions' match">RewriteCond</a> line allows <em>direct</em> requests (not <em>from</em> other pages - an "empty referrer") to pass unmolested. The next line means; <em>if</em> the browser <em>did</em> send a referrer header, and the word "corz.org" is <em>not in the domain part of it</em>, then <em>DO</em> rewrite this request.


		<p>The all-important final <a title="the magic happens here. only requests that got through all the condition statements will be processed by the rule on this line.">RewriteRule</a> line instructs <code>mod_rewrite</code> to rewrite all matched requests (anything without "corz.org" in its referrer) asking for gifs, jpegs, or pngs, to an alternative image.


		<p>There are loads of ways you can write this rule; Google for "hot-link protection" and get a whole heap. Simple is best. You could send a wee message instead, or direct them to some evil script, or something. Mine is a simple <code>corz.org</code> logo, which <em>I</em> think is rather clever. Actually, these days, I do something even <a href="http://corz.org/server/tools/auto-hot-link/" title="It's Automatic! It's HYDROMATIC! No wait, it's not hydromatic.." id="link-devblog-auto-hotlink">cleverer-er</a>..

	</div>




	<div id="section-lose_the_www" class="clear-small"></div>

	<h3>lose the "www"</h3>

	<div id="NOWWW">

		<p>I'm often asked how I prevent the "www" part showing up at my site, so I guess I should add something about that. Briefly, if someone types http://www.corz.org/ into their browser (or uses the www part for any link at corz.org) it is redirected to the plain, rather neat, http://corz.org/ version. This is <em>easy</em> to achieve, like so..

		<blockquote>
		<div class="code-space" id="rewrite-rule-no-www">
			<div class="codetop">
				beware the regular expression:
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				RewriteEngine on<br />
				RewriteCond %{http_host} ^www\.corz\.org [NC]<br />
				RewriteRule ^(.*)$ http://corz.org/$1 [R=301,NC]<br />
			</div>
		</div>
		</blockquote>


		<p>You don't need to be touched by genius to see what's going on here. There are other ways you could write this rule, but again, simple is best. Like most of the examples here, the above is pasted directly from my own main .htaccess file, so you can be sure it works perfectly. In fact, I recently updated it so that I could share rules between my dev mirror and live site without any .htaccess editing..

		<blockquote>
		<div class="code-space" id="rewrite-rule-no-www-better">
			<div class="codetop">
				here's what I'm currently using:
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				RewriteEngine on<br />
				RewriteCond %{HTTP_HOST}  ^www\.(.*) [NC]<br />
				RewriteRule ^(.*)$  http://%1/$1 [R=301,NC,L]<br />
			</div>
		</div>
		</blockquote>

	</div>




	<div id="section-rewrite_sub-domains" class="clear-small"></div>

	<h3>multiple domains in one root</h3>

	<div id="mod_rewrite-domains">

		<p>If you are in the unfortunate position of having your sites living on a host that doesn't support multiple domains, you may be forced to roll your own with <code>.htaccess</code> and <code>mod_rewrite</code>. So long as your physical directory structure is well thought-out, this is fairly simple to achieve.


		<p>For example, let's say we have two domains, pointing at a single hosted root; <code>domain-one.com</code> and <code>domain-two.com</code>. In our web server root, we simply create a folder for each domain, perhaps <code>one/</code>, and <code>two/</code> then in our main (root) <code>.htaccess</code>, rewrite all incoming requests, like this..

		<blockquote>
		<div class="code-space">
			<div class="codetop">
				All requests NOT already rewritten into these folders, transparently rewrite..
			</div>
			<div class="code-block">
			<span class="code-comment">#two domains served from one root..</span><br />
		RewriteCond %{HTTP_HOST} domain-one.com<br />
		RewriteCond %{REQUEST_URI} !^/one<br />
		<RewriteRule ^(.*)$  one/$1 [L]<br /><br />

		RewriteCond %{HTTP_HOST} domain-two.com<br />
		RewriteCond %{REQUEST_URI} !^two<br />
		RewriteRule ^(.*)$  two/$1 [L]<br />
			</div>
		</div>
		</blockquote>

		<p>All requests for the host <code>domain-one.com</code> are rewritten (not R=redirected) to the <code>one/</code> directory, so long as they haven't already been rewritten there (the second <code>RewriteCond</code>). Same story for <code>domain-two.com</code>. Note the inconsistency in the RewriteCond statement; <code>!^/dir-name</code> and <code>!^dir-name</code> should both work fine. But needless to say, if you get a 500 error on your server, that would be a good place to start looking!


		<p>Also note, with such a simple domain &amp; folder naming scheme, you could easily merge these two rule sets together. This would be unlikely in the real world though, which is why I left them separate; but still, worth noting.


		<p>Other general settings and php directives can also go in this root <code>.htaccess</code> file, though if you have any further rewrite you'd like to perform; short URL's, htm to php conversion and what-not; it's probably easier and clearer to do those inside the sub-directory's .htaccess files.
	</div>




	<div id="section-auto-translation" class="space-tiny"></div>

	<h3>automatic translation</h3>

	<div id="auto-translate">
		<p>If you don't read English, or some of your guests don't, here's a neat way to have the wonderful Google translator provide automatic on-the-fly translation for your site's pages. Something like this..

		<blockquote>
		<div class="code-space" id="rewrite-rule-auto-translation-ORIGINAL">
			<div class="codetop">
				they simply add their country code to the end of the link, or <em>you</em> do..
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				RewriteEngine on<br />
				RewriteRule ^(.*)-fr$  http://www.google.com/translate_c?hl=fr&amp;sl=en&amp;u=http://corz.org/$1 [R,NC]<br />
				RewriteRule ^(.*)-de$  http://www.google.com/translate_c?hl=de&amp;sl=en&amp;u=http://corz.org/$1 [R,NC]<br />
				RewriteRule ^(.*)-es$  http://www.google.com/translate_c?hl=es&amp;sl=en&amp;u=http://corz.org/$1 [R,NC]<br />
				RewriteRule ^(.*)-it$  http://www.google.com/translate_c?hl=it&amp;sl=en&amp;u=http://corz.org/$1 [R,NC]<br />
				RewriteRule ^(.*)-pt$  http://www.google.com/translate_c?hl=pt&amp;sl=en&amp;u=http://corz.org/$1 [R,NC]<br />
			</div>
		</div>
		</blockquote>


		<p>You can create your menu with its flags or whatever you like, and add the country code to end of the links.. <code>&lt;a href="page.html-fr" id="... </code> <a href="http://corz.org/server/tricks/htaccess2.php-fr" rel="nofollow" title="Automatic Translation courtesy of the ever-wonderful Google" id="french-version">Want to see this page in French</a>?



		<p>Although it is handy, and I've been using it here for a couple of years here at the org for my international blog readers, all two of them, heh. Almost no one knows about it, mainly because I don't have any <em>links.</em> One day I'll probably do a wee toolbar with flags and what-not. Perhaps not. Trouble is, the Google translator stops translating after a certain amount of characters (which seems to be increasing, good), though these same rules could easily be applied to other translators, and if you find a good one, one that will translate a really <em>huge</em> &nbsp;document on-the-fly, do let me know!


		<p>If you wanted to be really clever, you could even perform some some kind of IP block check and present the correct version automatically, but that is outside the scope of this document. note: this may be undesirable for pages where technical commands are given (like this page) because the commands will also be translated. "RewriteEngine dessus" will almost certainly get you a 500 error page!


		<p>Another thing you might like to try; rather than individual country flags; fr, de, etc., use the "u" flag, for "Universal". In theory, Google will check the client's location, and automatically translate to <em>that</em> language. One line in your .htaccess would cover all languages, and automatically cover new ones as Google adds them.


		<p>While I'm here, slightly related; you can do a similar thing browser-side, create a "bookmarklet" (a regular bookmark, except that it "does something"), using this code for the <code>location</code>..

		<blockquote>
		<div class="code-space" id="rewrite-rule-auto-translation-from-browser">
			<div class="codetop">
				the same sort of thing, except browser-side..
			</div>
			<div class="code-block">
				javascript:void(location.href='http://translate.google.com/translate?u='+location.href)<br />
			</div>
		</div>
		</blockquote>


		<p>..which you will instinctively learn to click at the merest whiff of unrecognizable text, I reckon. Put it in your toolbar somewhere visible, is my sincere recommendation.

	</div>

	<div class="clear-small"></div>


	<h3>httpd.conf</h3>

	<div id="subfolderrulesok">

		<p>Remember, if you put these rules in the main server conf file (usually httpd.conf) rather than an .htaccess file, you'll need to use <strong>^/...</strong> ... instead of <strong>^...</strong> ... at the beginning of the RewriteRule line, in other words, add a slash.

	</div>



	<div id="section-inheritance" class="clear-small"></div>

	<h3>inheritance..</h3>

	<div id="inheritance">

		<p>If you are creating rules in sub-folders of your site, you need to read this.


		<p>You'll remember how rules in top folders apply to all the folders <em>inside</em> those folders too. we call this "inheritance". normally this just works. <strong>but</strong> if you start creating other rules inside subfolders you will, in effect, obliterate the rules already applying to that folder due to inheritance, or "decendancy", if you prefer. not <em>all</em> the rules, <em>just the ones applying to that subfolder.</em> a wee demonstration..


		<p>Let's say I have a rule in my main <code>/.htaccess</code> which redirected requests for files ending .htm to their .php equivalent, just like the example at the top of this very page. now, if for any reason I need to add some rewrite rules to my <code>/osx/.htaccess</code> file, the .htm &gt;&gt; .php redirection will no longer work for the <code>/osx/</code> subfolder, I'll need to reinsert it, <em>but with a <span class="warning">crucial</span> difference.</em>.

		<blockquote>
		<div class="code-space" id="rewrite-rule-inheritance-cascading">
			<div class="codetop">
				this works fine, site-wide, in my main .htaccess file
			</div>
			<div class="code-block">
				<span class="code-comment"># main (top-level) .htaccess file..</span><br />
				<span class="code-comment"># requests to file.htm goto file.php</span><br />
				Options +FollowSymlinks<br />
				RewriteEngine on<br />
				RewriteRule ^(.*)\.htm$ http://corz.org/$1.php [R=301,NC]<br />
			</div>
		</div>
		</blockquote>


		<p>Here's my updated <code>/osx/.htaccess</code> file, with the .htm &gt;&gt; .php redirection rule reinserted..


		<blockquote>
		<div class="code-space" id="rewrite-rule-subfolder-rules">
			<div class="codetop">
				but I'll need to reinsert the rules for it to work in this sub-folder
			</div>
			<div class="code-block">
				<span class="code-comment"># /osx/.htaccess file..</span><br />
				Options +FollowSymlinks<br />
				RewriteEngine on<br />
				RewriteRule some rule that I need here<br />
				RewriteRule some other rule I need here<br />
				RewriteRule ^(.*)\.htm$ http://corz.org/<span class="warning">osx/</span>$1.php [R=301,NC]<br />
			</div>
		</div>
		</blockquote>


		<p>Spot the difference <span class="warning">highlighted</span> in the subfolder rule?. You <strong>must</strong> add the current path to the new rule. now it works again, and all the osx/ subfolders will be covered by the new rule. if you remember this, you can go replicating rewrite rules all over the place.


		<p>If it's possible to put your entire site's rewrite rules into the main .htaccess file, and it probably is; do that, instead, like this..

		<blockquote>
		<div class="code-space" id="rewrite-rule-all-in-one">
			<div class="codetop">
				it's a good idea to put all your rules in your main .htaccess file..
			</div>
			<div class="code-block">
				<span class="code-comment"># root /.htaccess file..</span><br />
				Options +FollowSymlinks<br />
				RewriteEngine on<br />
				<span class="code-comment"># .htm &gt;&gt; .php is now be covered by our main rule, there's no need to repeat it. </span><br />
				<span class="code-comment"># But if we do need some /osx/-specific rule, we can do something like this..</span><br />
				RewriteRule ^<span class="warning">osx/</span>(.*)\.foo$ <a title="normally, there's no need to specify the full URL.">/</a><span class="warning">osx/</span>$1.bar [R=301,NC]<br />
			</div>
		</div>
		</blockquote>


		<p>Note, no full URL (with domain) in the second example. Don't let this throw you; with or without is functionally identical, on <em>most</em> servers. Essentially, try it without the full URL first, and if that doesn't work, sigh, and add it - maybe on your next host!


		<p>The latter, simpler form is preferable, if only for its tremendous portability it offers - my live site, and my development mirror share the exact same .htaccess files - a highly desirable thing.


		<p>By the way, it perhaps doesn't go without saying that if you want to <em>disable</em> rewriting inside a particular subfolder, where it is <em>enabled</em> further up the tree, simply do:

		<blockquote>
		<div class="code-space" id="rewrite-rule-disable-rewriting-in-here">
			<div class="codetop">
				handy for avatar folders, to allow hot-linking, etc..
			</div>
			<div class="code-block">
				RewriteEngine <a title="using 'on', would also work, but with a slight performance penalty. Also, it's  silly." id="mod_rewrite_OFF">off</a>
			</div>
		</div>
		</blockquote>
	</div>




	<div id="section-cookies" class="clear-small"></div>

	<h3>cookies</h3>

	<div id="cookies-in-htaccess">

		<p>Lastly, a quick word about cookies. While it's easy enough to set cookies in .htaccess without any <code>mod_rewrite</code>..


		<blockquote>
		<div class="code-space">
			<div class="codetop">
				create a cookie called "example-cookie", and set its value to "true"..
			</div>
			<div class="code-block">
				Header set Set-Cookie "example-cookie=true"<br />
			</div>
		</div>
		</blockquote>

		<p>..you <em>will</em> need it to read the cookie information back again, and "do stuff" with it. It's easy. For example, to check if the above cookie exists and has the correct value set, we could simply do..


		<blockquote>
		<div class="code-space">
			<div class="codetop">
				check for that same cookie + value..
			</div>
			<div class="code-block">
				Options +FollowSymlinks<br />
				RewriteEngine on<br />
				RewriteCond %{HTTP_COOKIE} !example-cookie=true<br />
				RewriteRule .* /err/401.php<br />
			</div>
		</div>
		</blockquote>

		<p>..which could easily form the basis of a simple authentication system. As with any RewriteCond, you can get pretty complex, checking multiple cookies, utilizing regexp and more, but that's enough to get you started. You will probably want to add another <code>RewriteCond</code> to prevent looping on the 401. I'll leave that as an exercise.



		<p>While I'm at it, note, you can also set cookies with a RewriteRule. Check this..


		<blockquote>
		<div class="code-space">
			<div class="codetop">
				Set a cookie with this visitor's "Original Referer", using <code>RewriteRule</code>..
			</div>
			<div class="code-block">
				SetEnvIf Referer "^https?://(.*)/" myref=$1<br />
				RewriteCond %{HTTP_REFERER} !^$<br />
				RewriteCond %{HTTP_REFERER} !corz.org [NC]<br />
				RewriteRule . - [cookie=original-referer:%{ENV:myref}:.%{HTTP_HOST}:1440:/]<br />
			</div>
		</div>
		</blockquote>

		<p>The first line checks the value of the "Referer" header (usually sent by the browser - by the way, the misspelling of "referrer" annoys a lot of people, but its hard-coded into the web now)


		<p>Let's say the referring URI is "<a href="http://corz.org/blog/" title="technical the non-technical blog" id="link-internal-corzblog">http://corz.org/blog/</a>", which matches (of course it matches, all Referers will match!) so the part between "https?://" and the next occurring slash ("/") of the referring URI is <em>captured</em> inside the braces () and then <em>backreferenced</em> (by the use of "$1", 1 = the first captured string, in this case "corz.org"), that value being stored in an Environment Variable (Apache has loads of them created on every request, your IP address, browser type, time of the request, remote port, loads...) named "myref".


		<p>In other words: <code>myref=corz.org</code>

		<blockquote>
		<div class="byline">
			<p>You might be asking, "Why not simply use <code>SetEnvIf Referer (.*) myref=$1</code> to capture the entire referer string?". The reason is because the captured colon (":"), when expanded with %{ENV:myref} construct, will split the cookie statement in the wrong place, ":" being the delimiter. It's a bit bug-like, but predictable.


			<p>You can take the risk and try and capture everything <em>after</em> the domain (using <code>SetEnvIf Referer "^https?://(.*)" myref=$1</code>), <em>if there is no colon in the URI</em>, it will work fine, capturing query strings and all.


		</div>
		</blockquote>

		<p>Then we do a couple of <code>RewriteCond</code> conditions, the first to prevent "empty" referers (where no referer information is sent) and the second to prevent resetting the cookie with the name of our <em>own</em> domain<span class="highlight">*</span>. Then it's down to business..

		<blockquote>
		<div class="byline">
			* If you are wondering, "Why not use <code>%{HTTP_HOST}</code> instead of <code>corz.org</code>, create universal code?", as far as I know, it's not possible to test one server variable against another with a <code>RewriteCond</code> without using Atomic Back References and some serious POSIX 1003.2+ Jiggery-Pokery. It's generally best to hard-code in the domain name. Anyway..
		</div>
		</blockquote>



		<p>The RewriteRule, its simple dot "." expression, again matching every single request, passing the request straight through (to any remaining .htaccess code, by use of the "-") without altering the URI in any way, and while it's at it sets the browser's cookie variable "original-referer" to the value of the Apache variable "myref", which is currently "corz.org", accessing this variable by use of the "%{ENV:&lt;Name-of-Environment-Variable&gt;}" construct.


		<p>The domain of the cookie is set to "corz.org". Note, it's best practice to use a preceding dot in "www"-less, or other sub-less domains).



		<p>The cookie will expire in approximately 1440 minutes (24 hours). The cookie "path" is set to "/", covering the entire site. Job done.


		<p>Finally, having said <em>ALL</em> that, I'd still much rather use PHP sessions wherever possible, and if taking a chance on something more permanent, with a persistent cookie, php (or similar) is still a better place to be coding this sort of stuff.


	</div>

	<div id="section-conclusion" class="clear-small"></div>

	<h3>conclusion</h3>

	<div id="summinup">

		<p>In short, <code>mod_rewrite</code> enables you to send browsers <em>from</em> anywhere <em>to anywhere.</em> You can create rules based not simply on the requested URL, but also on such things as IP address, browser agent (send old browsers to different pages, for instance), and even the time of day; the possibilities are practically limitless.


		<p>The ins-and outs of <code>mod_rewrite</code> syntax are topic for a <em>much</em> longer document than this, and if you fancy experimenting with more advanced rewriting rules, I urge you to check out the Apache documentation.


		<p><em><strong>If you have Apache installed on your system</strong>.</em>. there will likely be a copy of the Apache manual, <a href="http://localhost/manual/" title="oh what a clever puter you've got! (opens in a new window - apple-click (shift-click on peecees) for a new tab instead)" onclick="window.open(this.href); return false;" >right here</a>, and the excellent mod_rewriting guide, <a onclick="window.open(this.href); return false;" href="http://localhost/manual/misc/rewriteguide.html" title="aye, there's loads of stuff like this hidden in yer puter! (opens in a new window - apple-click (shift-click on peecees) for a new tab instead)">lives right here</a>. do check out the <a href="http://localhost/manual/mod/mod_rewrite.html" onclick="window.open(this.href); return false;" title="the syntax stuff lives here (opens in a new window - apple/shift-click for a new tab/window)">URL Rewriting Engine notes</a> for the juicy syntax bits. That's where I got the cute quote for the top of the page, too.
	</div>


	<p>Have fun!

	<div id="ceeya">
		<p>;o) <script>
//<![CDATA[
<!--
document.write("<a title=\"Mail Me!\" href=\"\/corz\/mail-me.php\" onclick=\"OpenWindow(this.href,900,640);return false;\">Cor<\/a>")
//-->
//]]>
</script><noscript><a href="/corz/mail-me.php" title="Mail Me!">Cor</a></noscript>	</div>






	<div class="clear-quarter" id="section-troubleshooting"></div>


	<h3>troubleshooting tips..</h3>

	<div id="troubleshooting">


		<h4>Fatal Redirection</h4>

		<p>If you start messing around with 301 redirects [R=301], aka. "Permanently Redirected", and your rule isn't working, you could give yourself some serious headaches..


		<p>Once the browser has been redirected <em>permanently</em> to the wrong address, if you then go on to alter the wonky rule, your browser will <em>still</em> be redirected to the old address (because it's a browser thing), and you may even go on to fix, <em>and then break</em> the rule all over again without ever knowing it. Changes to 301 redirects can take a long time to show up in your browser.


		<p><strong>Solution</strong>: restart your browser, or use a different one.


		<p><strong>Better Solution</strong>: Use [R] instead of [R=301] <em>while you are testing.</em> When you are 100% certain the rule does exactly as it's expected to, <em>then</em> switch it to [R=301] for your live site.

		<div class="clear-tiny"></div>

		<h4>rewrite logging..</h4>
			<p>When things aren't working, you may want to enable rewrite logging. I'll assume you are testing these <code>mod_rewrite</code> directives on your development mirror, or similar setup, and can access the main <code>httpd.conf</code> file. If not, <em>why not?</em> Testing <code>mod_rewrite</code> rules on your live domain isn't exactly ideal, is it? Anyway, put this somewhere at the foot of your <code>http.conf</code>..

		<blockquote>
		<div class="code-space" id="rewrite-rule-logging">
			<div class="codetop">
			Expect large log files..
			</div>
			<div class="code-block">
				<span class="code-comment">#</span><br />
				<span class="code-comment"># ONLY FOR TESTING REWRITE RULES!!!!!</span><br />
				<span class="code-comment">#</span><br />
				RewriteLog "/tmp/rewrite.log"<br />
				<span class="code-comment">#RewriteLogLevel 9</span><br />
				RewriteLogLevel 5<br />
			</div>
		</div>
		</blockquote>


		<p>Set the file location and logging level to suit your own requirements. Unless you are using <code>Apache &gt;= v2.4</code>. Now your old <code>RewriteLog</code> directives will bring the server down..

		<blockquote>
		<div class="code-space" id="rewrite-rule-logging-2">
			<div class="codetop">
			Recent versions of Apache need this, instead..
			</div>
			<div class="code-block">
				<span class="code-comment">#</span><br />
				<span class="code-comment"># ONLY FOR TESTING REWRITE RULES!!!!!</span><br />
				<span class="code-comment">#</span><br />
				LogLevel alert rewrite:trace3<br /><br />
			</div>
		</div>
			</blockquote>

		<p>This sets the main <code>LogLevel</code> to <code>alert</code>, and turns it up the volume of rewrite logging <code>trace3</code>. A full explanation of the various LogLevel and trace options can be found <a href="http://httpd.apache.org/docs/trunk/mod/core.html#loglevel" title="No separate log files, though. Try: tail -f /var/log/httpd/error.log|fgrep '[rewrite:'" id="link-external-apache-docs-log-levels" onclick="window.open(this.href); return false;">here</a>.



		<p>If the offending rewrite rule is causing your Apache to loop, load the page, immediately hit your browser's "STOP" button, and then restart Apache. All within a couple of seconds. Your rewrite log will be <em>full</em> of all your diagnostic information, and your server will carry on as before.

		<p>Setting a value of 1 gets you almost no information, setting the log level to 9 gets you GIGABYTES!  So you <strong>must</strong> remember to comment out these rules and restart Apache when you are finished because, not only will rewrite logging create space-eating files, it will seriously impact your web server's performance.


		<p><code>RewriteLogLevel 5</code>&nbsp; is very useful, but 2 is probably enough information for most issues. In the new scheme, <code>trace:3</code> is probably about as high as you want to go, unless you have lots of space and time.


		<div class="clear-small"></div>

		<h4>Suddenly &quot;Forbidden&quot;..</h4>

		<p>On the subject of new and improved Apache versions, if you are rolling your own server you may have noticed that your sites dramatically fail to load after an Apache upgrade. Everything is "Forbidden", and you don't have permission to access, well <em>anything.</em>


		<p>It's possible that your site's <code>DocumentRoot</code> points to a symlink. If that's the case, add this to your site's host (probably <a href="http://httpd.apache.org/docs/current/vhosts/" title="the one server becomes many many!" id="link-external-httpd-docs-apache-virtual-hosts" onclick="window.open(this.href); return false;">vhost</a>) section:

		<blockquote>
		<div class="code-space" id="rewrite-rule-logging-2">
			<div class="codetop">
			Oh yes, it's a "permissions problem"..
			</div>
			<div class="code-block">
				Require all granted<br />
			</div>
		</div>
		</blockquote>

		<p>And you're in!



		<div id="section-debug-report" class="space-tiny"></div>


		<h3><code>debug-report.php</code><br />
		<small>A php script to make your mod_rewrite life easier.</small></h3>

		<p>When things aren't working as you would expect, rewrite logging is a good option, but on a hosted server, you probably won't have that option, without access to <code>httpd.conf</code>. Fortunately, what's usually required is no more than a quick readout of all the current server variables, <code>$_GET</code> array, and so on; so you can see <em>exactly</em> what happened to the request.


		<p>For another purpose, I long ago created <code>debug.php</code>, and later, finding all this information useful in chasing down wonky rewrites, created a "report" version, which rather than output to a file, spits the information straight back into your browser, as well as <code>$_POST</code>, <code>$_SESSION</code>, and <code>$_SERVER</code> arrays, special variables, like <code>__FILE__</code>, and <em>much more.</em>


		<p>Usage is simple; you make it your <em>target page</em>, so in a rule like this..

		<blockquote>
		<div class="code-space" id="test-your-rules-with-debug-report-php">
			<div class="codetop">
				Send EVERYTHING to the debug unit..
			</div>
			<div class="code-block">
				RewriteRule ^(.*)\.html$ /catch-all.php?var=$1<br />
			</div>
		</div>
		</blockquote>



		<p>You would have a copy of <code>debug-report.php</code> temporarily renamed to <code>catch-all.php</code> in the root of your server, and type <code>http://testdomain.org/foobar.html</code> into your address bar and, with yer mojo working, <code>debug-report.php</code> leaps into your browser with a huge wodge of <em>exactly</em> the sort of information you need to figure out all this stuff. When I'm messing with <code>mod_rewrite</code>, <code>debug-report.php</code> saves me time, a lot. It's way faster than enabling rewrite logging, too. Also, it's free..

		<div class="clear-quarter"></div>



		
			<div id="download-debug-report" class="download-section">
				<a href="/engine?section=beta&amp;download=debug-report.zip" title="Download and use debug-report. It's free.." id="link-download-debug-report">
				<span class="h3">download</span>
				<div class="clear-small"></div>
				<span class="download-box"><img alt="Image of big cardboard box, containing the debug-report package (zip), well, the image is of a parcel, with the debug-report logo overlayed on one side, but you get the idea." src="/img/server/zipped-php-document.png" class="box-logo" /></span></a>
				<br />
				<span class="h3">debug report</span>
			</div>
			<div class="clear-small"></div>
	</div>


	<div class="clear-quarter" id="section-useful_links"></div>

	
	<h2 id="link-links">Useful Links..</h2>
	<div class="useful-links">

		<div class="links-row">
			<div class="left-links">
				<a href="http://httpd.apache.org/docs/mod/mod_rewrite.html" title="the source of all mod_rewrite information!!">Apache mod_rewrite docs</a>
			</div>
			<div class="right-links" id="link-rewritedocs">
				THE reference document for all things mod_rewrite
			</div>
		</div>

		<div class="links-row">
			<div class="left-links">
				<a href="http://httpd.apache.org/docs-2.0/mod/mod_rewrite.html" title="the source of all Apache2 mod_rewrite information!!">Apache 2 mod_rewrite docs</a>
			</div>
			<div class="right-links" id="link-rewritedocs2">
				As above, but for Apache 2
			</div>
		</div>

		<div class="links-row">
			<div class="left-links">
				<a href="http://httpd.apache.org/docs/misc/rewriteguide.html"
				title="more readable than the regular documentation">Apache URL rewriting guide</a>
			</div>
			<div class="right-links" id="link-rewriteguide">
				In more easily understaood language, very useful.
			</div>
		</div>

		<div class="links-row">
			<div class="left-links">
				<a href="http://httpd.apache.org/docs-2.0/misc/rewriteguide.html"
				title="more readable than the regular documentation" >Apache 2 URL rewriting guide</a>
			</div>
			<div class="right-links" id="link-rewriteguide2">
				As above but for Apache 2
			</div>
		</div>

		<div class="links-row">
			<div class="left-links">
				<a href="http://corz.org/machine/source/php/security/hot-link-test.php" title="Can I see you?">Hot-Link Test Tool</a>
			</div>
			<div class="right-links" id="link-hot-link-test-tool">
				Messing with HotLink code - test it right here.
			</div>
		</div>

		<div class="links-row">
			<div class="left-links">
				<a href="http://www.webmasterworld.com/forum92/" title="ask away!">webmasterworld forum</a>
			</div>
			<div class="right-links" id="link-webmasterworld">
				More help from those in the know
			</div>
		</div>

		<div class="links-row">
			<div class="left-links">
				<a href="http://gnosis.cx/publish/programming/regular_expressions.html"
				title="an ABC of regex, nicely done" >David Mertz's regex tutorial</a>
			</div>
			<div class="right-links" id="link-DavidMertz">
				Get cubed up on regular expressionism!
			</div>
		</div>

		<div class="links-row">
			<div class="left-links">
				<a href="http://www.ilovejackdaniels.com/apache/mod_rewrite-cheat-sheet/"
				title="highly useful reference chart for mod_rewriters" >Mod ReWrite Reference Charts</a>
			</div>
			<div class="right-links" id="link-JackieD">
				I Love "I Love Jack Daniel's" !
			</div>
		</div>

		<div class="links-row">
			<div class="left-links">
				<a href="./htaccesser/index.php" title="Neat! php .htaccess file creator tool - aka. 'Dot Htaccesser', by Chris Todd">.htaccess generator</a>
			</div>
			<div class="right-links" id="link-htaccess-generator">
				Rather neat php online .htaccess generator tool - aka. 'Dot Htaccesser', by Chris Todd
			</div>
		</div>

		<div class="links-row">
			<div class="left-links">
				<a href="/public/scripts/others/" title="php source code for  'Dot Htaccesser', by Chris Todd">.htaccess generator source</a>
			</div>
			<div class="right-links" id="link-htaccess-generator-source">
				The php source for the above tool. The original site has disappeared.
			</div>
		</div>




		<div class="links-row">
			<div class="left-links">
				<a href="http://www.magneto.be/blog/?post/2008/09/09/Trucs-et-astuces-pour-la-redirection-et-la-reecriture-des-URL" title="This article, translated into French, by a human - CURRENTLY OFFLINE"><span class="strike-through">French version, part 1</span></a><a href="http://www.magneto.be/blog/?post/2008/09/16/Trucs-et-astuces-pour-la-reecriture-des-URL-2/2" title="This article, translated into Fench, by a human"><span class="strike-through"> &amp; part 2</span></a>
			</div>
			<div class="right-links" id="link-htaccess-tips-official-french-translation">
				<span class="strike-through">The official French human-translation of "more .htaccess tricks and tips".</span>
			</div>
		</div>



		<div class="links-row">
			<div class="left-links">
				<a href="http://science.webhostinggeeks.com/corz-saveti-trikovi" title="This article, translated into Serbo-Croatian, by a human">Serbo-Croatian version</a>
			</div>
			<div class="right-links" id="link-more-htaccess-tips-official-Serbo-Croatian-translation">
				The official Serbo-Croatian human-translation of "more .htaccess tricks and tips".
			</div>
		</div>


		<div class="links-row">
			<div class="left-links">
				<a href="http://googlewebmastercentral.blogspot.com/2008/09/dynamic-urls-vs-static-urls.html" title="Dynamic URLs vs. static URLs - The official word.">Dynamic vs. Static URLs</a>
			</div>
			<div class="right-links" id="link-dynamic-vs-static-links-official-word-from-google-blog">
				Dynamic vs. Static URLs - The official word, from Google.
			</div>
		</div>


		<div class="links-row">
			<div class="left-links">
				<a href="http://www.namecheap.com?aff=6311" title="You need domains, right?">Get Domains, cheap.</a>
			</div>
			<div class="right-links" id="corz-recommended-cheap-domain-registrar">
				After years of trouble-free, cheap service, I can definitely recommend these guys for your domain needs.
			</div>
		</div>


		<div class="clear"></div>

	</div>

	<div id="section-part_one" class="space-quarter"></div>


	<div id="part1_-_the-original" class="left previous">
		<a href="htaccess.php" title="... .htaccess tricks [part one]: authentication, indexing, and more">
			<span class="up-arrow rotate-left"></span><br />
			<span id="goto-previous">goto<br />
			part one</span>
		</a>
	</div>

	<div id="section-comments"></div>

</div>

<!-- that comment thing -->
<div class="clear"></div>
<div class="comments" id="comments">
	<div class="comments-intro">
		<h2>Before you ask a question..</h2>

<h3>Firstly, read <a href="http://www.catb.org/~esr/faqs/smart-questions.html" title="Let's not waste any more precious TIME!" id="link-ask-questions-the-smart-way">this</a> at least once in your life. I insist!</h3>

<h4>
NOTE: THIS IS NOT A COMMUNITY. And I am not your free tech dude. Sure, folk sometimes drop back in, but realistically, the chances of someone <em>else</em> coming along and answering your tech question are about as close to zero as it gets; almost no one sticks around but me, the guy who wrote all that text (above).<br />
<br />

If you can't be bothered to <em>read</em> the article, I can't be bothered responding. <a title="Capisci: Do you understand?">Capiche</a>?  I do read all comments, though, and answer questions <em>about the article.</em> I'm also keen to discuss anything you think I've missed, or interesting related concepts in general.<br />
<br />

If you are still sure that you want to post your own, personal, tech question, then please ensure that you first, either..<br />
<br />

a) Have read the article (above) and have tried "<a href="http://www.catb.org/~esr/faqs/smart-questions.html" title="Don't waste MY precious TIME!" id="link-ask-questions-the-smart-way-PLEASE">everything</a>" yourself; in which case; post the <em>exact</em> code that isn't working (preferably inside <code>[pre][/pre]</code> tags), replacing any personal domain names with "example.com" (advertising gets deleted) or else..<br />
<br />

b) Pay me. The PayPal button is at the top right of the page. I offer many related services, if you need priority assistance, <a onclick="window.open(this.href); return false;" href="http://corz.org/corz/hire-cor.php">get in touch</a>.<br />
<br />

Other posts will be ignored and/or deleted.
</h4>

	</div>
	<hr class="hr-regular" />
	<div class="comment-text">
		<a href="?page=1#comments" title="there's more! (currently showing ten per page)"><span class="big">previous comments</span> (one hundred and eleven  pages)</a>&nbsp;&nbsp;&nbsp;<a href="?page=all#comments"
		title="the whole damn lot. all one thousand, one hundred and fourteen of 'em!">show all comments</a><br />
		<br />


<div id="sreekanth-reddy-ila1379855175">
<strong>sreekanth reddy ila</strong> - 22.09.13 2:06 pm<br />
<br />

<!--*g*-->Hi:<br />
<br />
Thanks a lot, its look great tutorial.<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>



<div id="bernard1380013248">
<strong>bernard</strong> - 24.09.13 10:00 am<br />
<br />

<!--*g*-->Nice tutorial !! Thanks... <!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>





<div id="David1380734065">
<strong>David</strong> - 02.10.13 6:14 pm<br />
<br />

<!--*g*-->I know it's been a while since folks have posted here, and understand my odds of receiving a reply are practically none (based on the site owner).  However, I have searched everywhere for this answer and can't seem to find it.  Perhaps because it just can't be done.<br />
<br />
Anyway, here goes...<br />
<br />
Is there a way to eliminate the "index of/" text which automatically shows up above our directory listing?  We offer PDF file (forms) for download, and have a directly listing them all using an .htaccess file.  However, along with the listing it displays a header which looks like this ..<br />
<br />
&lt;standard Apache fancy indexing screen-cap snipped&gt;<br />
<br />
Just wondering if there's a way to remove (or hide) the "index of/" and just have the directory listing.<br />
<br />
As a bonus, I'd welcome if the "Size" and "Description" columns were gone too, but I welcome whatever help I can get. <img alt="smiley for :roll:" title=":roll:" src="/blog/inc/smileys/roll.gif" /><br />
<br />
Thanks for considering.<br />
David<br />
<br />
<div class="corz-reply">Stuff like this belong in part one. The answer is there, too. (link above these comments) clue: you want <span class="teletype">Options +Indexes<!--tt--></span>, but <em>without</em> fancy indexing. ;o) Cor<!--corz--></div><!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>





<div id="David1380738979">
<strong>David</strong> - 02.10.13 7:36 pm<br />
<br />

<!--*g*-->Wow.  My apologies for my ignorance.  I pasted the following code on the bottom on my htaccess file and it killed the directory<br />
<br />
&lt;standard Apache fancy indexing screen-cap snipped&gt;<br />
<br />
I'll keep looking to see if I find the command  your referencing.<br />
<br />
Thank you,<br />
David<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>





<div id="David1380820044">
<strong>David</strong> - 03.10.13 6:07 pm<br />
<br />

<!--*g*-->Can someone please provide the code needed to eliminate the "Index of /" header from my directory listing?  I tried searching everywhere here, also cutting and pasting what I believed was the answer to no avail.<br />
<br />
Please help. I'll gladly donate using PayPal if someone can help me with this ordeal. :-(<br />
<br />
Thanks,<br />
David <img alt="smiley for :ehh:" title=":ehh:" src="/blog/inc/smileys/ehh.gif" /><!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>



<div id="Rolf1382016416">
<strong>Rolf</strong> - 17.10.13 2:26 pm<br />
<br />

<!--*g*-->Hi Cor<br />
Thanks for a great resource! Find these explanations very clear and easy to follow. Was always hesitant to play with .htaccess and let support do it for me. Now, I've found a few examples that are well explained. Could easily reproduce it on my account. Keep your address on file in case I get stuck and need expert (paid <img alt="smiley for :lol:" title=":lol:" src="/blog/inc/smileys/lol.gif" /> ) help!<br />
Rolf<br />
<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>





<div id="Gilberto1384314172">
<strong>Gilberto</strong> - 13.11.13 3:42 am<br />
<br />

<!--*g*-->Hi Cor<br />
<br />
Excellent tutorial, I read it first about 3 years ago but now I'm re-reading it and I've noticed something I didn't in my first read. I think the explanation of the "!" sign is missing, I understand it because I know PHP. I also know that it might be overkill to explain that because most people that will read this article sure are experts with other languages but it would be a nice add-on for beginners like I was some years ago =)<br />
<br />
Cheers.<br />
Gilberto Gomez<br />
<br />
<br />
<div class="corz-reply">Good catch! I'll add something. ;o) Cor<!--corz--></div><!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>



<div id="Jorge1385083810">
<strong>Jorge</strong> - 22.11.13 1:30 am<br />
<br />

<!--*g*-->Nice site<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>



<div id="Mukera1385676077">
<strong>Mukera</strong> - 28.11.13 10:01 pm<br />
<br />

<!--*g*-->Thank you!<img alt="smiley for :D" title=":D" src="/blog/inc/smileys/grin.gif" /><!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>



<div class="comment" id="Ellie1403801856">
<strong>Ellie</strong> - 26.06.14 5:57 pm<br />
<br />

<!--*g*-->What's the way we can strip extensions (www.mysite.net/about.html and final slash symbol "/" too) aWd make necessary redirect, just in case of url misprint like (www.mysite.net/about.htm | php or just / (slash)) - to avoid Error pages ?<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>



<div class="comment" id="osas1404755637">
<strong>osas</strong> - 07.07.14 6:53 pm<br />
<br />

<!--*g*-->Please i'm having issues with this .htaccesa!<br />
<br />
i would like to convert this url (http://localhost/tvnollyblog/pgcnt.php?pg=Nollywood_Awards_and_Pageantry_)<br />
<br />
To something like (http://localhost/tvnollyblog/blog/Nollywood_Awards_and_Pageantry_)<!--*g*--><br />
<br />
<hr class="hr-regular" />
</div>

	<form id="verify"  method="post" action="/server/tricks/htaccess2.php#verify">
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
			<div class="verify-text">lower-case aitch, Upper-Case Em, zeehrow, lower-case eff, Upper-Case Zed</div>
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
	
<aside id="corz-auto-section-menu">
	<h1>Automatic Section Menu</h1>
	<div class="auto-section">
		<div class="auto-section-title">
			<a href="#" onclick="GoTop();return false;" title="Click here to go up to the top (only really useful when toolbar is in a fixed position)" id="pagelink-totop">sections: </a>
		</div>
		<nav class="auto-section-links">
			<h1>Automatic Section Links</h1>
			<a href="#section-intro" title="Jump to intro">intro</a>
			<a href="#section-beginning" title="Jump to beginning">beginning</a>
			<a href="#section-simple_rewriting" title="Jump to simple rewriting">simple rewriting</a>
			<a href="#section-not_so_simple" title="Jump to not so simple">not so simple</a>
			<a href="#section-regexp_basics" title="Jump to regexp basics">regexp basics</a>
			<a href="#section-short_URLs" title="Jump to short URLs">short URLs</a>
			<a href="#section-capturing_variables" title="Jump to capturing variables">capturing variables</a>
			<a href="#section-cooler_access_denied" title="Jump to cooler access denied">cooler access denied</a>
			<a href="#section-more_banning" title="Jump to more banning">more banning</a>
			<a href="#section-anti-hammer" title="Jump to anti-hammer">anti-hammer</a>
			<a href="#section-prevent_hot-linking" title="Jump to prevent hot-linking">prevent hot-linking</a>
			<a href="#section-lose_the_www" title="Jump to lose the www">lose the www</a>
			<a href="#section-rewrite_sub-domains" title="Jump to rewrite sub-domains">rewrite sub-domains</a>
			<a href="#section-auto-translation" title="Jump to auto-translation">auto-translation</a>
			<a href="#section-inheritance" title="Jump to inheritance">inheritance</a>
			<a href="#section-cookies" title="Jump to cookies">cookies</a>
			<a href="#section-conclusion" title="Jump to conclusion">conclusion</a>
			<a href="#section-troubleshooting" title="Jump to troubleshooting">troubleshooting</a>
			<a href="#section-debug-report" title="Jump to debug-report">debug-report</a>
			<a href="#section-useful_links" title="Jump to useful links">useful links</a>
			<a href="#section-part_one" title="Jump to part one">part one</a>
			<a href="#section-comments" title="Jump to comments">comments</a>
		</nav>
	</div>
</aside>

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
	<a onclick="window.open(this.href); return false;" href="http://corz.org/server/tools/distromachine/" title="Distribution For Busy Humans..">
		<img class="promo-img" width="64" id="res_image_distromachine" src="/server/tools/distromachine/img/corz-distro-machine_256px.png" alt="image for server" />
		<div class="my-ad-message"><br />Just Add Files!</div>
	</a>
</div>
<div class="my-promo-plate">
	<a onclick="window.open(this.href); return false;" href="http://corz.org/server/tools/anti-hammer/" title="Ban Web Site Hammers, Bad Bots and Spiders, Script-Kiddies, H4x0rz and more.. NOW!">
		<img class="promo-img" width="64" id="res_image_Anti-Hammer" src="/server/tools/anti-hammer/img/Anti-Hammer_256px.png" alt="image for server" />
		<div class="my-ad-message">Protect your valuable resources</div>
	</a>
</div>
<div class="my-promo-plate">
	<a onclick="window.open(this.href); return false;" href="http://corz.org/server/tools/corzoogle/" title="Real-Time Search Engine for your Website or Personal Server..">
		<img class="promo-img" width="64" id="res_image_corzoogle" src="/server/tools/corzoogle/img/corzoogle-fast-real-time-search-logo_256px.png" alt="image for server" />
		<div class="my-ad-message">1000s of pages in milli-<wbr>seconds</div>
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
		&nbsp;&copy;&nbsp;&nbsp;2014&nbsp;&laquo;&nbsp;<a href="http://corz.org/links.php" title="all content and back-end code &copy; 2000 - 2014 cor &amp; corz.org..  comments &copy; their respective authors">corz.org</a>&nbsp;&raquo;&nbsp;23.7.14<br />
		<span class="timerstring">little timer computer say this page generated in 0.013 seconds</span>
		</span>
	</div>
	<div id="footer-left">&nbsp;&nbsp;random word from <a href="http://corz.org/blog/"
	title="forsooth! the blog words of randomness!" id="cor-random">corzblog</a>:&nbsp;<strong>madly</strong></div>
	<div id="footer-right"><strong>yldam</strong> :<span title="!ssenmodnar fo sdrow golb eht !thoosrof" id="modnar-roc">golbzroc</span> morf drow modnar&nbsp;&nbsp;&nbsp;</div>
</div>
<div id="underfoot" class="foot-gradient" title="Damn! This gradient looks FINE in Firefox!"></div>
<div class="underfoot">
	<div id="underfoot-buttons">

		<div class="undertitle undertitle-translate" title="NOTE: THIS WILL MANGLE TECHNICAL OUTPUT !!! (e.g. scripts)
I do apologize if your country isn't included! Try the 'World' output..">
			Machine Translations
		</div>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fhtaccess2.php&amp;langpair=en%7Czh-CN" title="Automatic Chinese (simplified) Translation"><img class="dim flag" src="/img/flags/flag-china-simplified.png" alt="Simplified Chinese translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fhtaccess2.php&amp;langpair=en%7Cnl&amp;ie=UTF-8" title="Automatic Dutch Translation"><img class="dim flag" src="/img/flags/flag-netherlands.png" alt="Deutsch translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fhtaccess2.php&amp;langpair=en%7Cfr&amp;ie=UTF-8" title="Automatic French Translation"><img class="dim flag" src="/img/flags/flag-france.png" alt="French translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fhtaccess2.php&amp;langpair=en%7Cde&amp;ie=UTF-8" title="Automatic German Translation"><img class="dim flag" src="/img/flags/flag-germany.png" alt="German translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fhtaccess2.php&amp;langpair=en%7Cit&amp;ie=UTF-8" title="Automatic Italian Translation"><img class="dim flag" src="/img/flags/flag-italy.png" alt="Italian translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fhtaccess2.php&amp;langpair=en%7Cja" title="Automatic Japanese Translation"><img class="dim flag" src="/img/flags/flag-japan.png" alt="Japanese translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fhtaccess2.php&amp;langpair=en%7Cko&amp;ie=UTF-8" title="Automatic Korean Translation"><img class="dim flag" src="/img/flags/flag-korea.png" alt="Korean translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fhtaccess2.php&amp;langpair=en%7Cpt&amp;ie=UTF-8" title="Automatic Portuguese Translation"><img class="dim flag" src="/img/flags/flag-portugal.png" alt="Portuguese translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fhtaccess2.php&amp;langpair=en%7Cpl&amp;ie=UTF-8" title="Automatic Polish Translation"><img class="dim flag" src="/img/flags/flag-poland.png" alt="Polish translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fhtaccess2.php&amp;langpair=en%7Ces&amp;ie=UTF-8" title="Automatic Spanish Translation"><img class="dim flag" src="/img/flags/flag-spain.png" alt="Spanish translation of this page" /></a>
		<a href="http://translate.google.com/translate?u=http%3A%2F%2Fcorz.org%2Fserver%2Ftricks%2Fhtaccess2.php" title="Automatic World Translation"><img class="dim flag" src="/img/flags/flag-world.png" alt="World translation of this page" /></a>
		<div class="clear-minute"></div>
		<div class="x-small trans-note" title="These are my biggest supporters, after English-speaking countries, in no particular order.">
			NOTE: This Will Mangle Technical Output (e.g. scripts).
		</div>

		<div class="clear"></div>
		<div class="undertitle undertitle-colors" title="Switch color schemes">
			scheme
			&thinsp;<a href="http://validator.w3.org/check?uri=referer&amp;ss=1" title="Standards-Compliant HTML5.. So if it looks wonky, blame your crap web browser!"><img
			src="/img/valid-html5.png" class="valid-button" id="valid-html" alt="HTML5 icon (meaning, validated HTML5)"/></a><a href="http://jigsaw.w3.org/css-validator/validator?uri=http://corz.org%2Fserver%2Ftricks%2Fhtaccess2.php&amp;ss=1"
			title="Run your validator all up and down my CSS!"><img src="/img/valid-css3.png"
			class="valid-button" id="valid-css" alt="CSS3 icon (meaning, validated CSS3)" /></a>

		</div>
		
	<div id="user-scheme-mini">
		<ul id="user-scheme-controls">
			<li><form method="post" action="/server/tricks/htaccess2.php" class="user-submit-form">
				<input type="submit" class="user-scheme-submit" value="oranges" title="Switch to oranges"/>
				<input type="hidden" name="ajax" value="true"/>
				<input type="hidden" name="scheme" value="oranges"/>
				<input type="hidden" name="goblog" value=""/>
			</form></li>
			<li><form method="post" action="/server/tricks/htaccess2.php" class="user-submit-form">
				<input type="submit" class="user-scheme-submit" value="blues" title="Switch to blues"/>
				<input type="hidden" name="ajax" value="true"/>
				<input type="hidden" name="scheme" value="blues"/>
				<input type="hidden" name="goblog" value=""/>
			</form></li>
			<li><form method="post" action="/server/tricks/htaccess2.php" class="user-submit-form">
				<input type="submit" class="user-scheme-submit" value="dark" title="Switch to dark"/>
				<input type="hidden" name="ajax" value="true"/>
				<input type="hidden" name="scheme" value="dark"/>
				<input type="hidden" name="goblog" value=""/>
			</form></li>
			<li><form method="post" action="/server/tricks/htaccess2.php" class="user-submit-form">
				<input type="submit" class="user-scheme-submit" value="browser" title="Switch to browser"/>
				<input type="hidden" name="ajax" value="true"/>
				<input type="hidden" name="scheme" value="browser"/>
				<input type="hidden" name="goblog" value=""/>
			</form></li>
			<li><form method="post" action="/server/tricks/htaccess2.php" class="user-submit-form">
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
