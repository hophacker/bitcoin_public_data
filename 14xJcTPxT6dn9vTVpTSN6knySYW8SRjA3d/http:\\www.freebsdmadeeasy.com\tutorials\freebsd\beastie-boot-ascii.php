http://www.freebsdmadeeasy.com/tutorials/freebsd/beastie-boot-ascii.php
HTTP/1.1 200 OK
Date: Sat, 26 Jul 2014 19:13:03 GMT
Server: Apache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 2400
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Justin Emgarten" />
<meta name="Description" content="Change your FreeBSD 6.x boot menu logo from the default back to Beastie or your own custom creation." />
<meta name="Keywords" content="FreeBSD, Tutorials, Beastie, ASCII, Logo, Boot, Menu, Loader, beastie.4th, loader.conf, beastiebw, fbsdbw" />
<meta name="title" content="Putting Beastie on the FreeBSD 6.x boot menu" />
<meta name="robots" content="index,follow" />
<meta name="copyright" content="Copyright � 2006 Justin Emgarten" />


<title>Putting Beastie on the FreeBSD 6.x boot menu</title>
<style type="text/css" media="all">
		@import "/include/styles.css";
</style>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-85718-17";
urchinTracker();
</script>
<meta name="GOOGLEBOT" content="NOARCHIVE" />
<meta name="ROBOTS" content="NOARCHIVE" />
</head>
<body>
<div class="header">
<div class="gaTop">	<!-- SiteSearch Google -->
	<form method="get" action="http://www.google.com/custom" target="_top">
	<table border="0" style="margin-top: 5px; margin-right: 20px;">
	<tr><td nowrap="nowrap" valign="top" align="left" height="32">
	
	</td>
	<td nowrap="nowrap">
	<input type="hidden" name="domains" value="www.freebsdmadeeasy.com"></input>
	<input type="text" name="q" size="31" maxlength="255" value=""></input>
	<input type="submit" name="sa" value="Google Search"></input>
	</td></tr>
	<tr>
	<td>&nbsp;</td>
	<td nowrap="nowrap">
	<table>
	<tr>
	<td>
	<input type="radio" name="sitesearch" value="" checked="checked"></input>
	<font size="-1" color="#FFFFFF">Web</font>
	</td>
	<td>
	<input type="radio" name="sitesearch" value="www.freebsdmadeeasy.com"></input>
	<font size="-1" color="#FFFFFF">www.freebsdmadeeasy.com</font>
	</td>
	</tr>
	</table>
	<input type="hidden" name="client" value="pub-5245752466623509"></input>
	<input type="hidden" name="forid" value="1"></input>
	<input type="hidden" name="channel" value="5175357052"></input>
	<input type="hidden" name="ie" value="ISO-8859-1"></input>
	<input type="hidden" name="oe" value="ISO-8859-1"></input>
	<input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:FFFFFF;LBGC:336699;ALC:0000FF;LC:0000FF;T:000000;GFNT:0000FF;GIMP:0000FF;FORID:1"></input>
	<input type="hidden" name="hl" value="en"></input>
	</td></tr></table>
	</form>
	<!-- SiteSearch Google -->
	</div>
<div class="logo">FreeBSD Made Easy</div>
</div>
<div class="leftSide">
	<div class="leftSideMenu">
		<div class="leftSideMenuHead">Main Menu</div>
		<div class="leftSideMenuLinks">
		<a href="/index.htm" class="leftSideMenuLink">Home</a><br />
		<br />
		<br />
		</div>
	</div>
	<br />


</div>
<div class="main">
	<h1>Put Beastie back on the boot menu</h1>
	<p>The 5.x branch of FreeBSD saw the addition of a boot menu, and with it the ASCII Beastie logo was shown on the side while it counted
	down. Since then FreeBSD has decided to move away from the Beastie logo, making him simply the mascot now. In the 6.x branch the default logo
	is simply the text FreeBSD in ASCII art. This has annoyed me ever since I first switched to 6.x on new machines, but today I was making changes
	in /boot and noticed there was a way to change it, so here it is</p>
		<!-- 33 //-->
			
	<h2>/boot/beastie.4th</h2>
	<p>Everything is located in the /boot directory. To view the logos</p>
	<pre># ee /boot/beastie.4th</pre>
	<p>Here you can see that there are 3 standard options. beastie, beastiebw, and fbsdbw. If you want to add your own just copy and paste the code 
	for one of the logos and name it custom-logo. Just becareful that you do not enter anything invalid for the logo, because as I found out, if there is
	an error in the logo FreeBSD will crash and reboot before it even gives you the menu to get into safe mode. If you have this problem you will need to
	use a FixIt disk and then mount your drive so you can get in and take out your changes.</p>
	
	<h2>Setting logo to use</h2>
	<p>Next you need to tell FreeBSD which logo to use when the machine boots. This is set in /boot/loader.conf just set
	the variable loader_logo to your logo of choice by adding this line to the file. Note that loader.conf is probably going to be
	completely empty unless you added something to it in the past. To use the black and white Beastie logo you would simply add</p>
	<pre>loader_logo="beastiebw"</pre>
	<p>For the custom logo use</p>
	<pre>loader_logo="custom"</pre>
	
	<h2>Customizing the MOTD</h2>
	<p>If you want your custom logo, or custom info to also be shown whenever any user logs into the machine you can do so with</p>
	<pre># ee /etc/motd</pre>
	<p>Making a somewhat interesting MOTD is easy if you use figlet</p>
	<pre># cd /usr/ports/misc/figlet &amp;&amp; make install distclean
# figlet w00t
           ___   ___  _
__      __/ _ \ / _ \| |_
\ \ /\ / / | | | | | | __|
 \ V  V /| |_| | |_| | |_
  \_/\_/  \___/ \___/ \__|</pre>
	<p>Then copy and paste it into your MOTD or use redirect and edit to your liking.</p>

	<br />
		
</div>
<div class="rightSide"></div>
<div class="footer">
<a href="bitcoin:14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d?amount=0.01&label=FreeBSDMadeEasy"><p>14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d</p></a>
</div>
</body>
</html>

