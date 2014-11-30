http://next-nexus.info/site/technology.php
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 11:29:53 GMT
Server: Apache
X-Powered-By: PHP/5.4.30
Vary: Accept-Encoding,User-Agent
Content-Encoding: gzip
Content-Length: 4380
Connection: close
Content-Type: text/html

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>we have the technology</title>
	<meta name="CREATEDBY" content="Harris, Michael W.">
	<meta name="GENERATOR" content="gedit (Linux), smattering of PHP">
	<meta name="verityverity" content="ba50256d7dd99ff2238280b4cb07b7495f9cc492">

	<meta name="DC.Creator" content="Harris, Michael W.">
	<meta name="DC.Date.Modified" scheme="W3CDTF" content="2012-11-03">
	<meta name="DC.Title" content="we have the technology">

<!--https://drupal.org/project/biblio_scholar
    citation_title
    citation_author
    citation_journal_title
    citation_publication_date
    citation_journal_title
    citation_volume
    citation_issue
    citation_firstpage

Where PDF files are attached to Biblio nodes the following is also added:

    citation_pdf_url
http://blog.gmane.org/gmane.comp.web.zotero.devel/month=19700101/page=54


<meta name="citation_journal_title" content="EURASIP Journal on
Advances in Signal Processing" />
<meta name="citation_publisher" content="Springer" />
<meta name="citation_authors" content="Hongjun Wang, Guangguo Bi, Zifa
Zhong, Shuo Zhang, Zaichen Zhang" />
<meta name="citation_title" content="Adaptive primary user's signal
detection algorithm based on matrix accumulation estimation for
cognitive radio" />

<meta name="citation_volume" content="2011" />
<meta name="citation_issue" content="1" />
<meta name="citation_firstpage" content="51" />
<meta name="citation_doi" content="10.1186/1687-6180-2011-51" />

 <meta name="citation_journal_title" content="Next/Nexus" />
	<meta name="citation_journal_abbrev" content="Lead Pipe Lib" />
	<meta name="citation_issn" content="1944-6195" />
	<meta name="citation_author" content="Michael Harris" />
	<meta name="citation_title" content="$title" />
	<meta name="citation_publication_date" content="2012/12/12" />
	<meta name="citation_public_url" content="/2013/adventures-in-rhetoric/" /> -->

	<link rel="stylesheet" href="/style/format.css">
	<link rel="stylesheet" href="/style/site.css">
</head>
<body>
<div class="breadcrumbs menu breadtop"><ol>
	<li><a href="/">Home</a></li>
	<li><!-- &gt; --><a href="/site">site</a></li>
	<li class="contactmenulink"><a href="/contact.php">Contact</a></li>
</ol></div>
<h1>we have the technology</h1><div class="menu"><ul><li><a href="index.php#design">Designed</a>, </li><li><a href="index.php#free">Free</a> <span class="amp">&amp;</span> </li><li><a href="index.php#standard">Standard</a></li></ul>
<ul><li>Technnology; </li><li><a href="index.php#philosophy">Philosophy</a>; </li><li><a href="index.php#browsersupport">Browser Support</a></li></ul></div>
<p>The vast majority of the coding is done in <a href="http://projects.gnome.org/gedit/">gedit, the GNOME text editor</a> (see also <a href="http://live.gnome.org/Gedit/">the gedit wiki</a>). gedit is more than just a text editor though, it allows craftsmanship. It has a multitude of both built-in tools and plugins that make a developer's life easier. I use line numbers, line highlight, spell checking, syntax highlighting and others all the time. I wouldn't trade gedit for Adobe Dreamweaver or MS Frontpage any day of the week (I've used both). I use a file manager for managing files, and a dedicated FTP tool if required (though I can certainly understanding not wanting to use the MS Windows file manager).
<p>I test on Firefox <del datetime="2012-02-05">3.6.x</del><del datetime="2012-05-15"><ins datetime="2012-02-05">10.x (they went and updated it)</ins></del><ins datetime="2012-05-15">(whatever the latest version is)</ins> mainly, the browser that comes by default with the LTS version of Ubuntu (12.04) that I use. I also test in Epiphany (the Gnome Web Browser), Chromium and Lynx sometimes (recently I've tried Orca as well). I use lots of plugins for Firefox too. For web dev, the main plugin I use is the <a href="http://www.chrispederick.com/work/web-developer/">ever resourceful Web Developer toolbar</a>. It provides quick and easy methods for all sorts of tasks, including turning off JS, CSS and images, resizing the browser window to pre-defined sizes, sending a page to a validator and so many other useful things. But I also use other plugins sometimes (like `Live HTTP Headers' and `User Agent Switcher').</p>
<p>Talking of validators, I used to only use the online version of the <a href="http://validator.w3.org/check?uri=referer">W<sub>3</sub>C validator</a>, but I thought this wasteful (sending something off across the 'net all the time like that). So, using apt-get (actually Synaptic), I downloaded both the W3C Markup Validator, and the WDG HTML Validator. Score! Once I made sure that they both could be accessed at <a href="http://localhost">localhost</a>, I added them to my Web Developer toolbar. I can now validate my pages even when the power is off! (Such as, as I write this..., I like my laptop.)
<p>So, I have <a href="http://projects.apache.org/projects/http_server.html">Apache</a> (and <a href="http://php.net">PHP</a> and MySQL) installed locally as well. You wouldn't believe how much time that takes off development compared to uploading and checking online. People might rave about <abbr title="Windows, Apache, MySQLP and PHP">WAMP</abbr> or <abbr title="Mac, Apache, MySQLP and PHP">MAMP</abbr>, but I just say <abbr title="Linux, Apache, MySQL and PHP">LAMP</abbr>. My <abbr title="operating system">OS</abbr> (<a href="htpp://ubuntu.com">Ubuntu GNU/Linux</a>, based on <a href="http://debian.org">Debian GNU/Linux</a>) takes care of everything for me, from dependencies to updating, everything. For serious development, you develop on the same sort of system that your site will be deployed to.</p>
<p>I use the <a href="http://bazaar-vcs.org/">bzr (Bazaar)</a> <abbr title="distributed version control system">DVCS</abbr> to manage changes to my website, and <a href="http://doc.bazaar.canonical.com/plugins/en/upload-plugin.html">bzr-upload</a> <a href="https://launchpad.net/bzr-upload">(see also)</a> to keep it up to date.<!-- I also use a <a href="https://launchpad.net/bzr-gedit">gEdit plugin</a> (other gedit plugins that work with bzr also exist). --><!-- http://thoughts.enseed.com/bzr/ http://wiki.bazaar.canonical.com/BazaarForWebDevs http://doc.bazaar.canonical.com/plugins/en/automirror-plugin.html --></p>
<h2 id="automate">automation</h2>
<p>Originally most of the site was handcrafted, each individual &lt; and &gt; carefully position, with &quot;s put <span class="carefully">just so</span> to hold the attributes of the various tags. However, as time went on, I started using more and more PHP. Not just to insert menus and footers, but to even assemble whole pages from individual chunks. (For example, <a href="../webdev/show/show.php?show=../index-for-subdirs.php" title="the index page for the pages">most of the webdev pages are put together in this fashion</a>.)

<p>This approach allows me to focus on creating. For example, to make a style sheet just for this section of the site, I just created it in the styles folder. No need to add any &lt;link&gt; tags, I just created the style sheet, and it is automatically inserted correctly. </p>

<p>Of course, I still create all the individual pieces by hand, carefully putting an &lt;abbr&gt; tag here, massaging some characters with a careful class so that the style is perfect and so on. But the bulk of the boring stuff is now being done by automation. Over time, I'll gradually introduce more and more automation as well. After all, that's what computers are good for.</p>
<!-- start of footer ø -->
<div class="foot">
<h2 class="hiddenfromview">Site & page info (footer)</h2>
<p class="love">

<a href="http://next-nexus.info/site/technology.php#automate" title="except for the bits that aren't">Mostly handcrafted</a> by <a href="http://next-nexus.info/#about">Michael</a>, this website was <a href="http://next-nexus.info/site/#design">designed</a> to <a href="http://next-nexus.info/site/#standard">standards</a>, with the highest quality in mind, and in result. The code and content is <a href="http://next-nexus.info/license.php" rel="copyright">freely</a> <a href="http://next-nexus.info/webdev">available</a>.</p>

<div class="breadcrumbs menu breadbottom"><ol>
	<li><a href="/">Home</a></li>
	<li><!-- &gt; --><a href="/site">site</a></li>
	<li class="contactmenulink"><a href="/contact.php">Contact</a></li>
</ol></div>
<p class="info">
<!-- MSIE conditional comments. More info: <http://msdn.microsoft.com/en-us/library/ms537512%28VS.85%29.aspx> and <http://www.quirksmode.org/css/condcom.html>; I read recently that in MSIE 10 conditional comments won't exist. Hopefully it'll be a better browser than previous versions... -->
<!--[if IE]>It appears that you are using MS Internet Explorer (MSIE). I suggest using another web browser, perhaps <a href="http://mozilla.com">Mozilla Firefox</a>. You want a <em>reason</em>? Here's your freaking <em>reason</em>: <a href="http://spider.io/blog/2012/12/internet-explorer-data-leakage/">Internet Explorer Data Leakage</a>!<br><![endif]-->
<!--[if lt IE 9]>It appears that you are using a <em>very</em> old version of MS Internet Explorer (MSIE). If you seriously want to continue to use MSIE, at least <a href="http://www.microsoft.com/windows/internet-explorer/">upgrade</a>.<br><![endif]-->
<!-- $addressofpage -->This page is located at <a href="http://next-nexus.info/site/technology.php">http://next-nexus.info/site/technology.php</a> <!-- /addressofpage--> <!-- date modified -->and was last modified on <span title="this date is no indication of when the work was originally created">2012-11-03</span><!-- /date modified -->.<!-- the local IP is 223.130.27.125--></p>
<!-- <p><a href="bitcoin:1G8cE4nAmQ397MjGpE6g33z4PXCs88GTEh?amount=0.005&amp;label=next-nexus.info">Bitcoin me: 1G8cE4nAmQ397MjGpE6g33z4PXCs88GTEh</a></p>-->
</div><!-- end foot -->
<!-- ♩ ♫ ♩ Genius is different from the rest of us; Most of us are nice ♩ ♬-->
</body>
</html>

