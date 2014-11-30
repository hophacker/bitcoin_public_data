http://www.gimp.org/downloads/?ref=theappcenter.com
HTTP/1.1 200 OK
Date: Thu, 24 Jul 2014 10:39:35 GMT
Server: Apache/2.2.15 (Red Hat)
Accept-Ranges: bytes
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!-- $Id$ -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>GIMP - Downloads</title>
<!-- $Id$ -->
<!-- $Id$ -->
<!-- placeholder for page layout definitions -->

<!-- $Id$ -->
<style type="text/css">
@import url("/style/wgo.css");
</style>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="/style/ie-nastiness.css" />
<![endif]-->
<link rel="icon" href="/images/wilber16.png" type="image/png" />

<!-- $Id: wgo-scripts.xhtml 795 2007-07-04 11:01:43Z jimmac $ -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<!--[if lt IE 8]>
<script type="text/javascript" src="/includes/excanvas.pack.js"></script>
<![endif]-->
<script type="text/javascript" src="/includes/jquery.corner.js"></script>
<script type="text/javascript" src="/includes/jqbrowser.js"></script>
<script type="text/javascript" src="/includes/wgo.js"></script>

<!-- code for the flattr button counter -->
<script type="text/javascript">
/* <![CDATA[ */
    (function() {
        var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
        t.parentNode.insertBefore(s, t);
    })();
/* ]]> */</script>


<!-- placeholder for site navigation -->


<script type="text/javascript">
$(document).ready(function() {
	renderDownload();
});
</script>
<!-- $Id$ -->
</head>
<body id="wwwgimporg">
<div id="header">
  <div id="title"><a href="/" style="display: block; height: 60px; text-decoration: none; color: white;"><span style="display: block; padding: 15px;">GNU Image Manipulation Program</span></a></div>
</div>

<div id="maincontainer">

<div id="menu">
  <p><a href="#main">Skip to page contents</a></p>
  <span>[</span>
  <a href="/">News</a><span> | </span>
  <a href="/screenshots/">Screenshots</a><span> | </span>
  <a href="/features/">Features</a><span> | </span>
  <a href="/downloads/">Downloads</a><span> | </span>
  <a href="/docs/">Documentation</a><span> | </span>
  <a href="/develop/">Get Involved</a>
  <span>]</span><br /><span>[</span>
  <a href="http://registry.gimp.org">Plug-in Registry</a><span> | </span>
  <a href="http://wiki.gimp.org">GIMP Development</a>
  <span>]</span><br />

  <span>[</span>
  <a href="/donating/">Donations</a>
  <span>]</span><br />
  
  <span>[</span>
  <a class="FlattrButton" style="display:none;" rev="flattr;button:compact;" href="http://www.gimp.org/"></a>
  <noscript><a href="http://flattr.com/thing/707850/GIMP-is-the-GNU-Image-Manipulation-Program" target="_blank">
  <img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a></noscript><span> | </span>
  <a href="bitcoin:1NVMCeoBfTAJQ1qwX2Dx1C8zkcRCQWwHBq?label=GIMP%20Donation"><img src="/donating/bitcoin-button.png" alt="Donate with Bitcoin" title="Donate with Bitcoin" border="0" /></a>
  <span>]</span>
</div>

<div id="main">


<div class="splash download">
</div>

<h1>Downloads</h1>

<div id="downloads">
	<noscript>
		<!-- linux download instructions -->
<h2>GIMP for Unix-like systems</h2>

<p>It's very likely your Unix-like system such as a GNU/Linux distribution
already comes with a GIMP package. It is a preferred method of installing GIMP,
as the distribution maintainers take care of all the dependencies and bug fix
updates. Please note that many distros decide to pin a specific version of
GIMP to their releases.</p>

<h3>Ubuntu, Debian</h3>

<p>Ubuntu or Debian users can run <code>apt-get install gimp</code> to install
GIMP. Ubuntu users may also install GIMP from <a href="https://apps.ubuntu.com/cat/applications/gimp/" target="_blank">Software 
Centre</a>, this includes recent GIMP versions from PPAs.</p>

<h3>openSUSE</h3>
<p>SUSE users can install GIMP by running <code>yast -i gimp</code> or
<code>zypper in gimp</code>, depending on the distribution version.</p>

<h3>Fedora</h3>
<p>Similarly to the above, Fedora users can install GIMP by
running <code>yum install gimp</code>.</p>

<h3>Mandriva</h3>
<p>Mandriva Linux users can install GIMP by running 
<code>urpmi gimp</code>.</p> 

<h3>BSD</h3>

<p>GIMP is also available for the BSD family of systems such as FreeBSD and
OpenBSD.</p>

<h3>Solaris</h3>

<p>GIMP can run on Solaris.</p>

		<h2>GIMP for Mac OS X</h2>

<p>
Since the 2.8.2 version GIMP runs on OSX natively. No X11 environment is required.
</p>

<h3>Native builds</h3>

<p>Currently there are two main installers:</p>

<p>
  A GIMP 2.8 DMG installer by Clayton Walker, stock GIMP build without any add-ons. 
  Just open the downloaded DMG and drag "GIMP.app" into your "Applications" folder.
</p>

<ul>
<li><a href="http://download.gimp.org/pub/gimp/v2.8/osx/gimp-2.8.10-dmg-1.dmg">Download GIMP 2.8 from gimp.org</a>. Also available via <a href="http://download.gimp.org/pub/gimp/v2.8/osx/gimp-2.8.10-dmg-1.dmg.torrent">torrent</a></li>
</ul>

<p>
  A build by <a href="http://gimp.lisanet.de/">Simone Karin Lehmann</a>, with some extra plug-ins and changes.
</p>
 
<ul>
<li><a href="http://gimp.lisanet.de/Website/Download.html">Download GIMP 2.8 from lisanet.de</a></li>
</ul>

<h3>Macports</h3>

<p>A (easy?) way to compile and install GIMP and other great <a href="http://www.gnu.org/philosophy/free-sw.html">Free software</a> on your Mac
is by using <a href="http://www.macports.org/">Macports</a>. The installer
allows you to choose from a large directory of packages. To install gimp
using Macports, you simply do <code>sudo port install gimp</code> once you have
Macports installed.</p>

<p>Disclaimer: we have not investigated if it's feasible to build
GIMP 2.8 from Macports. The <a href="https://trac.macports.org/browser/trunk/dports/graphics/gimp/Portfile">GIMP
port file</a> mentions 2.8.10, and appears to be maintained, however.</p>

<ul>
  <li><a href="http://macports.org">Download Macports</a>.</li>
</ul>


<h3>Homebrew</h3>

<p>Homebrew is similar to Macports and provides packages (aka formulas) to
install, either by compiling them from source or by using pre-made
binaries. While there appears to be no formula for GIMP itself, there are
reports that all dependencies are available. This may help to build GIMP from
source.</p>   

<ul>
  <li><a href="http://brew.sh">Download Homebrew</a>.</li>
</ul>


<h3>Fink</h3>

<p>Fink is a package repository that offer mostly precompiled
  binaries. It provides the apt-get command known to e.g. Debian and
  Ubuntu users, and installing GIMP is as easy as <code>sudo apt-get 
    install gimp</code> once you have installed the <a href="http://www.finkproject.org/download/index.php">Fink
    installer</a>.<br />
  If there's no binary package, then <code>fink install gimp</code>
  will compile GIMP from source.</p>

<p>Disclaimer: we haven't been able to determine if it is possible to install
  or build GIMP 2.8 from Fink. GIMP 2.6.12 appears to be the most recent <a href="http://pdb.finkproject.org/pdb/browse.php?summary=gimp">GIMP package</a>
  that is <a href="http://pdb.finkproject.org/pdb/package.php/gimp2">offered
  there</a>.</p>   

<ul>
<li><a href="http://www.finkproject.org">Download Fink</a>.</li>
</ul>

		<h2>GIMP for Windows</h2>

<p>The Windows installer packages by Jernej Simončič are distributed from the GIMP HTTP server (<a href="http://download.gimp.org">download.gimp.org</a>) and its <a href="#mirrors">mirror servers</a>.</p>

<p>
The installer contains both 32 bit and 64 bit versions of GIMP, and will install the appropriate one.
</p>

<ul>
        <li><a href="http://download.gimp.org/pub/gimp/v2.8/windows/gimp-2.8.10-setup.exe" style="font-size: 1.4em;">Download GIMP 2.8.10</a><br />
    you may also try the <a href="http://download.gimp.org/pub/gimp/v2.8/windows/gimp-2.8.10-setup.exe.torrent">torrent</a>.</li>
  <li>This installer package is known to run on:
    <ul>
      <li>Windows XP SP3 and XP x64 SP2</li>
      <li>Windows Vista</li>
      <li>Windows 7</li>
      <li>Windows 8 and Windows 8.1</li>
      <li>Windows Server 2003 SP2 and 2003 R2</li>
      <li>Windows Server 2008 and 2008 R2</li>
      <li>Windows Server 2012 and 2012 R2</li>
    </ul>
  </li>
  <li>It <strong>does not run</strong> on:
    <ul>
      <li>Anything that came before Windows XP</li>
      <li>Windows RT</li>
    </ul>
  </li>
</ul>

<h3>GIMP User Manual</h3>

<ul>
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-zh_CN-setup.exe">Chinese Simplified</a> (24.3 MB)</li>
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-ca-setup.exe">Catalan</a> (24.2 MB)</li>
<!-- li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-hr-setup.exe">Croatian</a> (25.8 MB)</li -->
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-da-setup.exe">Danish</a> (24.2 MB)</li>
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-nl-setup.exe">Dutch</a> (24.3 MB)</li>
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-en-setup.exe">English</a> (24.2 MB)</li>
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-en_GB-setup.exe">English (United Kingdom)</a> (24.2 MB)</li>
<!-- li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-fi-setup.exe">Finnish</a> (25.9 MB)</li -->
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-fr-setup.exe">French</a> (25.7 MB)</li>
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-de-setup.exe">German</a> (28.0 MB)</li>
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-it-setup.exe">Italian</a> (30.2 MB)</li>
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-ja-setup.exe">Japanese</a> (23.6 MB)</li>
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-ko-setup.exe">Korean</a> (24.9 MB)</li>
<!-- li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-lt-setup.exe">Lithuanian</a> (27.3 MB)</li -->
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-nn-setup.exe">Norwegian Nynorsk</a> (20.9 MB)</li>
<!-- li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-pl-setup.exe">Polish</a> (25.9 MB)</li -->
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-ru-setup.exe">Russian</a> (24.9 MB)</li>
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-sl-setup.exe">Slovenian</a> (24.3 MB)</li>
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-es-setup.exe">Spanish</a> (24.9 MB)</li>
<li><a href="http://download.gimp.org/pub/gimp/help/windows/2.8/2.8.1/gimp-help-2-2.8.1-sv-setup.exe">Swedish</a> (24.7 MB)</li>
</ul>


	</noscript>
			<h2>Source for version 2.8 (Stable)</h2>

	<p>GIMP releases available from gimp.org and its
	<a href="#mirrors">mirrors</a> contain the source code and have to be
	compiled in order to be installed on your system.</p>

	<p>For instructions, how to build GIMP from source code, please see <a href="/source/">this page</a>.</p>
	
	<p>GIMP 2.8.10 is now available
	at <a href="http://download.gimp.org/pub/gimp/v2.8/">http://download.gimp.org/pub/gimp/v2.8/</a>.
	You may want to read the <a href="/release-notes/gimp-2.8.html">Release
	Notes for GIMP 2.8</a>.
	</p>

	<p>To allow you to check the integrity of the tarballs, here are the
	MD5 sums of the latest releases:</p>

	<table>
	<tr>
		<th>File</th>
		<th>MD5 sum</th>
	</tr>
	<tr>
		<td>gimp-2.8.10.tar.bz2</td>
		<td><kbd>84c964aab7044489af69f7319bb59b47</kbd></td>
	</tr>
	<tr>
		<td>gimp-2.8.8.tar.bz2</td>
		<td><kbd>ef2547c3514a1096931637bd6250635a</kbd></td>
	</tr>
	<tr>
		<td>gimp-2.8.6.tar.bz2</td>
		<td><kbd>12b3fdf33d1f07ae79b412a9e38b9693</kbd></td>
	</tr>
	<tr>
		<td>gimp-2.8.4.tar.bz2</td>
		<td><kbd>392592e8755d046317878d226145900f</kbd></td>
	</tr>
	<tr>
		<td>gimp-2.8.2.tar.bz2</td>
		<td><kbd>b542138820ca3a41cbd63fc331907955</kbd></td>
	</tr>
	<tr>
		<td>gimp-2.8.0.tar.bz2</td>
		<td><kbd>28997d14055f15db063eb92e1c8a7ebb</kbd></td>
	</tr>
	</table>

	<!--
	<p>GAP (the GIMP Animation Package) for GIMP 2.6 and above is available at
	<a href="http://download.gimp.org/pub/gimp/plug-ins/v2.6/gap">http://download.gimp.org/pub/gimp/plug-ins/v2.6/gap</a>.
	</p>
	-->

	<p>GIMP help files are available at
	<a href="http://download.gimp.org/pub/gimp/help/">http://download.gimp.org/pub/gimp/help/</a>.
	</p>

	<p>Please consider using one of the mirrors listed below.</p>


	<h2>Development snapshots</h2>

<!-- 	<p>GIMP 2.9.0 is a snapshot of current development towards GIMP 2.10. The
	source code will be available from <a href="http://download.gimp.org/pub/gimp/v2.9/">http://download.gimp.org/pub/gimp/v2.9/</a>. Please make sure you read the <a href="/release-notes/gimp-2.9.html">Release Notes for GIMP 2.9</a>.
	</p> -->

	<p>There are no releases of the 2.9 development version yet.</p>

	<p>Nightly builds for Windows are available at <a href="http://nightly.darkrefraction.com/gimp/" target="_blank">darkrefraction.com</a>. This is unstable software, please use it at your own risk.</p>
	<!--
	<p>To allow you to check the integrity of the tarballs, here are the
	MD5 sums of the latest releases:
	<table>
	<tr>
		<th>File</th>
		<th>MD5 sum</th>
	</tr>
	<tr>
		<td>tarball</td>
		<td><kbd>md5</kbd></td>
	</tr>
	</table>
	</p>
	-->



	<p>A detailed list of changes in the development branch is available
	in <a href="https://git.gnome.org/cgit/gimp/plain/NEWS">git</a>.
	</p>

	<h1><a name="mirrors"></a>FTP and Web Mirrors</h1>
	<!-- This file automatically generated by mirrorfmt.py $Revision$ -->
<!-- DO NOT EDIT THIS FILE - edit the master file MIRRORS instead -->
<dl class="download-mirror">
<dt>Brazil</dt>
<dd><a href="ftp://mirrors-br.go-parts.com/gimp/">ftp://mirrors-br.go-parts.com/gimp/</a></dd>
<dd><a href="http://mirrors-br.go-parts.com/gimp/">http://mirrors-br.go-parts.com/gimp/</a> (web access)</dd>
<dd><a href="rsync://mirrors-br.go-parts.com/mirrors/gimp/">rsync://mirrors-br.go-parts.com/mirrors/gimp/</a> (rsync access)</dd>
<dt>Canada</dt>
<dd><a href="http://gimp.parentingamerica.com/">http://gimp.parentingamerica.com/</a> (web access)</dd>
<dd><a href="http://gimp.raffsoftware.com/">http://gimp.raffsoftware.com/</a> (web access)</dd>
<dd><a href="http://gimp.skazkaforyou.com/">http://gimp.skazkaforyou.com/</a> (web access)</dd>
<dt>France</dt>
<dd><a href="ftp://ftp.iut-bm.univ-fcomte.fr/gimp/">ftp://ftp.iut-bm.univ-fcomte.fr/gimp/</a></dd>
<dd><a href="http://ftp.iut-bm.univ-fcomte.fr/gimp/">http://ftp.iut-bm.univ-fcomte.fr/gimp/</a> (web access)</dd>
<dd><a href="rsync://ftp.iut-bm.univ-fcomte.fr/gimp/">rsync://ftp.iut-bm.univ-fcomte.fr/gimp/</a> (rsync access)</dd>
<dd><a href="http://mirror.ibcp.fr/pub/gimp/">http://mirror.ibcp.fr/pub/gimp/</a> (web access)</dd>
<dt>Estonia</dt>
<dd><a href="http://servingzone.com/mirrors/gimp/">http://servingzone.com/mirrors/gimp/</a> (web access)</dd>
<dt>Germany</dt>
<dd><a href="ftp://artfiles.org/gimp.org/">ftp://artfiles.org/gimp.org/</a></dd>
<dd><a href="http://artfiles.org/gimp.org/">http://artfiles.org/gimp.org/</a> (web access)</dd>
<dd><a href="http://gimp.cybermirror.org/">http://gimp.cybermirror.org/</a> (web access)</dd>
<dd><a href="ftp://ftp.fernuni-hagen.de/pub/mirrors/www.gimp.org/">ftp://ftp.fernuni-hagen.de/pub/mirrors/www.gimp.org/</a></dd>
<dd><a href="http://ftp.fernuni-hagen.de/ftp-dir/pub/mirrors/www.gimp.org/">http://ftp.fernuni-hagen.de/ftp-dir/pub/mirrors/www.gimp.org/</a> (web access)</dd>
<dd><a href="rsync://ftp.fernuni-hagen.de/gimp/">rsync://ftp.fernuni-hagen.de/gimp/</a> (rsync access)</dd>
<dd><a href="ftp://ftp.gwdg.de/pub/misc/grafik/gimp/">ftp://ftp.gwdg.de/pub/misc/grafik/gimp/</a></dd>
<dd><a href="http://ftp.gwdg.de/pub/misc/grafik/gimp/">http://ftp.gwdg.de/pub/misc/grafik/gimp/</a> (web access)</dd>
<dd><a href="rsync://ftp.gwdg.de/pub/misc/grafik/gimp/">rsync://ftp.gwdg.de/pub/misc/grafik/gimp/</a> (rsync access)</dd>
<dd><a href="http://mirrors.zerg.biz/gimp/">http://mirrors.zerg.biz/gimp/</a> (web access)</dd>
<dt>Greece</dt>
<dd><a href="ftp://ftp.cc.uoc.gr/mirrors/gimp/">ftp://ftp.cc.uoc.gr/mirrors/gimp/</a></dd>
<dd><a href="http://ftp.cc.uoc.gr/mirrors/gimp/">http://ftp.cc.uoc.gr/mirrors/gimp/</a> (web access)</dd>
<dt>Ireland</dt>
<dd><a href="ftp://ftp.heanet.ie/mirrors/ftp.gimp.org/pub/gimp/">ftp://ftp.heanet.ie/mirrors/ftp.gimp.org/pub/gimp/</a></dd>
<dd><a href="http://ftp.heanet.ie/mirrors/ftp.gimp.org/pub/gimp/">http://ftp.heanet.ie/mirrors/ftp.gimp.org/pub/gimp/</a> (web access)</dd>
<dd><a href="rsync://ftp.heanet.ie/mirrors/ftp.gimp.org/pub/gimp/">rsync://ftp.heanet.ie/mirrors/ftp.gimp.org/pub/gimp/</a> (rsync access)</dd>
<dt>Japan</dt>
<dd><a href="ftp://ftp.u-aizu.ac.jp/pub/graphics/tools/gimp/">ftp://ftp.u-aizu.ac.jp/pub/graphics/tools/gimp/</a></dd>
<dd><a href="ftp://ftp.ring.gr.jp/pub/graphics/gimp/">ftp://ftp.ring.gr.jp/pub/graphics/gimp/</a></dd>
<dd><a href="http://www.ring.gr.jp/pub/graphics/gimp/">http://www.ring.gr.jp/pub/graphics/gimp/</a> (web access)</dd>
<dt>Netherlands</dt>
<dd><a href="ftp://ftp.snt.utwente.nl/pub/software/gimp/gimp/">ftp://ftp.snt.utwente.nl/pub/software/gimp/gimp/</a></dd>
<dd><a href="http://ftp.snt.utwente.nl/pub/software/gimp/gimp/">http://ftp.snt.utwente.nl/pub/software/gimp/gimp/</a> (web access)</dd>
<dd><a href="ftp://ftp.nluug.nl/pub/graphics/gimp/">ftp://ftp.nluug.nl/pub/graphics/gimp/</a></dd>
<dd><a href="http://ftp.nluug.nl/graphics/gimp/">http://ftp.nluug.nl/graphics/gimp/</a> (web access)</dd>
<dd><a href="rsync://ftp.nluug.nl/gimp/">rsync://ftp.nluug.nl/gimp/</a> (rsync access)</dd>
<dt>Poland</dt>
<dd><a href="ftp://ftp.piotrkosoft.net/pub/mirrors/ftp.gimp.org/">ftp://ftp.piotrkosoft.net/pub/mirrors/ftp.gimp.org/</a></dd>
<dd><a href="http://piotrkosoft.net/pub/mirrors/ftp.gimp.org/">http://piotrkosoft.net/pub/mirrors/ftp.gimp.org/</a> (web access)</dd>
<dd><a href="rsync://piotrkosoft.net/mirrors/ftp.gimp.org/">rsync://piotrkosoft.net/mirrors/ftp.gimp.org/</a> (rsync access)</dd>
<dd><a href="ftp://sunsite.icm.edu.pl/pub/graphics/gimp/">ftp://sunsite.icm.edu.pl/pub/graphics/gimp/</a></dd>
<dd><a href="ftp://ftp.tpnet.pl/pub/graphics/gimp/">ftp://ftp.tpnet.pl/pub/graphics/gimp/</a></dd>
<dd><a href="rsync://ftp.tpnet.pl/gimp/">rsync://ftp.tpnet.pl/gimp/</a> (rsync access)</dd>
<dt>Portugal</dt>
<dd><a href="ftp://mirrors.dominios.pt/pub/ftp.gimp.org">ftp://mirrors.dominios.pt/pub/ftp.gimp.org</a></dd>
<dd><a href="http://mirrors.dominios.pt/gimp">http://mirrors.dominios.pt/gimp</a> (web access)</dd>
<dd><a href="ftp://mirrors.fe.up.pt/mirrors/ftp.gimp.org/">ftp://mirrors.fe.up.pt/mirrors/ftp.gimp.org/</a></dd>
<dd><a href="http://mirrors.fe.up.pt/mirrors/ftp.gimp.org/">http://mirrors.fe.up.pt/mirrors/ftp.gimp.org/</a> (web access)</dd>
<dd><a href="rsync://mirrors.fe.up.pt/mirrors/ftp.gimp.org/">rsync://mirrors.fe.up.pt/mirrors/ftp.gimp.org/</a> (rsync access)</dd>
<dt>Romania</dt>
<dd><a href="http://mirrors.serverhost.ro/gimp/">http://mirrors.serverhost.ro/gimp/</a> (web access)</dd>
<dt>South Africa</dt>
<dd><a href="ftp://ftp.is.co.za/mirror/ftp.gimp.org/gimp/">ftp://ftp.is.co.za/mirror/ftp.gimp.org/gimp/</a></dd>
<dt>Spain</dt>
<dd><a href="http://sunsite.rediris.es/mirror/gimp/">http://sunsite.rediris.es/mirror/gimp/</a> (web access)</dd>
<dd><a href="ftp://ftp.rediris.es/mirror/gimp/">ftp://ftp.rediris.es/mirror/gimp/</a></dd>
<dt>Sweden</dt>
<dd><a href="ftp://ftp.sunet.se/pub/gnu/gimp/">ftp://ftp.sunet.se/pub/gnu/gimp/</a></dd>
<dd><a href="http://ftp.sunet.se/pub/gnu/gimp/">http://ftp.sunet.se/pub/gnu/gimp/</a> (web access)</dd>
<dt>United Kingdom</dt>
<dd><a href="ftp://ftp.mirrorservice.org/sites/ftp.gimp.org/pub/gimp/">ftp://ftp.mirrorservice.org/sites/ftp.gimp.org/pub/gimp/</a></dd>
<dd><a href="http://www.mirrorservice.org/sites/ftp.gimp.org/pub/gimp/">http://www.mirrorservice.org/sites/ftp.gimp.org/pub/gimp/</a> (web access)</dd>
<dd><a href="rsync://rsync.mirrorservice.org/ftp.gimp.org/pub/gimp/">rsync://rsync.mirrorservice.org/ftp.gimp.org/pub/gimp/</a> (rsync access)</dd>
<dd><a href="ftp://anorien.csc.warwick.ac.uk/ftp.gimp.org/">ftp://anorien.csc.warwick.ac.uk/ftp.gimp.org/</a></dd>
<dd><a href="https://anorien.csc.warwick.ac.uk/ftp.gimp.org/">https://anorien.csc.warwick.ac.uk/ftp.gimp.org/</a> (web access)</dd>
<dd><a href="rsync://anorien.csc.warwick.ac.uk/ftp.gimp.org/">rsync://anorien.csc.warwick.ac.uk/ftp.gimp.org/</a> (rsync access)</dd>
<dt>United States</dt>
<dd><a href="http://gimp.cp-dev.com/">http://gimp.cp-dev.com/</a> (web access)</dd>
<dd><a href="http://mirror.hessmo.com/gimp/">http://mirror.hessmo.com/gimp/</a> (web access)</dd>
<dd><a href="http://gimp.mirrors.hoobly.com/gimp/">http://gimp.mirrors.hoobly.com/gimp/</a> (web access)</dd>
<dd><a href="http://mirror.umd.edu/gimp/gimp/">http://mirror.umd.edu/gimp/gimp/</a> (web access)</dd>
<dd><a href="rsync://mirror.umd.edu/gimp/">rsync://mirror.umd.edu/gimp/</a> (rsync access)</dd>
<dd><a href="http://mirrors.zerg.biz/gimp/">http://mirrors.zerg.biz/gimp/</a> (web access)</dd>
<dd><a href="ftp://ftp.spectralcoding.com/gimp/">ftp://ftp.spectralcoding.com/gimp/</a></dd>
<dd><a href="http://ftp.spectralcoding.com/gimp/">http://ftp.spectralcoding.com/gimp/</a> (web access)</dd>
<dd><a href="ftp://mirrors.xmission.com/gimp/">ftp://mirrors.xmission.com/gimp/</a></dd>
<dd><a href="http://mirrors.xmission.com/gimp/">http://mirrors.xmission.com/gimp/</a> (web access)</dd>
<dd><a href="rsync://mirrors.xmission.com/gimp/">rsync://mirrors.xmission.com/gimp/</a> (rsync access)</dd>
</dl>

  
	<p>If you want to add a new mirror, please <a href="/webmasters.html">contact us</a>.</p>
	 

</div>

<!-- $Id$ -->
</div><!-- main -->
</div><!-- maincontainer -->

<div id="bottommenu">
  <div class="bottomlinks">
	<ul>
	  <li class="mainlink"><a href="/features/">Features</a></li>
	  <li><a href="/release-notes/">Release Notes</a></li>
	  <li><a href="http://wiki.gimp.org/index.php/Main_Page">Wiki</a></li>
	  <li><a href="https://plus.google.com/u/0/b/116634837115748851709/+gimp/">Google+ page</a></li>
	</ul>
  </div>
  <div class="bottomlinks">
	<ul>
	  <li class="mainlink"><a href="/screenshots/">Screenshots</a></li>
	  <li class="mainlink"><a href="/downloads/">Downloads</a></li>
	</ul>
  </div>
  <div class="bottomlinks">
	<ul>
	  <li class="mainlink"><a href="/docs/">Documentation</a></li>
	  <li><a href="/docs/userfaq.html">FAQ</a></li>
	  <li><a href="/books/">Books</a></li>
	  <li><a href="/tutorials/">Tutorials</a></li>
	  <li><a href="/mail_lists.html">Mailing Lists</a></li>
	  <li><a href="/irc.html">IRC</a></li>
	</ul>
  </div>
  <div class="bottomlinks">
	<ul>
	  <li class="mainlink"><a href="/about/">About GIMP</a></li>
	  <li><a href="/about/splash/">Splash Archive</a></li>
	  <li><a href="/links/">Links</a></li>
	</ul>
  </div>
  <div class="bottomlinks">
	<ul>
	  <li class="mainlink"><a href="/develop/">Get Involved</a></li>
	  <li><a href="/donating/">Donating</a></li>
	  <li><a href="/bugs/">Bug Reports</a></li>
	  <li><a href="/about/merchandise.html">GIMP Goods</a></li>
	</ul>
  </div>
  <br style="clear: both; display: block; height: 200px;" />
</div>

<div id="linkbar">
  <div>
    <div>&copy; 2001-2013 <a href="/team.html">The GIMP Team</a> <span style="padding: 0px 10px;">&nbsp;</span>
    <a href="http://gimp.org/news.rdf">GIMP News Feed</a> | 
    <a href="/webmasters.html">Contacting Us</a>
    </div>
  </div>
</div>


<!-- $Id$ -->
<div style="clear: both; margin: 0; width: 100%; "></div>
<!-- div>
  <a style="clear: both; font-size: xx-small;" href="http://validator.w3.org/check/referer">Validate XHTML</a>
</div -->
</body>
</html>


