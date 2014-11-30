http://www.freebsdmadeeasy.com/tutorials/freebsd/freebsd-basics.php
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 23:59:07 GMT
Server: Apache
Set-Cookie: PHPSESSID=mm9i2go1uo53t8f1i17v6m5hr4; path=/
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0
Pragma: no-cache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 2252
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Justin Emgarten" />
<meta name="Description" content="An overview of FreeBSD, where important files are stored for those who are new to it." />
<meta name="Keywords" content="FreeBSD, Tutorials, Basics, Directory Structure" />
<meta name="title" content="FreeBSD Basics" />
<meta name="robots" content="index,follow" />
<meta name="copyright" content="Copyright � 2005 Justin Emgarten" />


<title>FreeBSD Basics</title>
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
	<h1>FreeBSD Basics</h1>
	<p>When first starting out with FreeBSD it can be frustrating when you are unable to find where the config files went on a port
	you just installed, or how to stop a service from starting up on boot. In this tutorial the important directories in FreeBSD, and what
	is found in them will be explained inorder to give you a basic understanding of how to get around the directory structure.</p>
		<h2>/etc/rc.conf</h2>
	<p>The rc.conf file normally looks something like this</p>
	<blockquote>hostname="host.mydomain.com"<br />
	ifconfig_xl0="DHCP"<br />
	linux_enable="YES"<br />
	moused_enable="YES"<br />
	nfs_client_enable="YES"<br />
	sshd_enable="YES"<br />
	usbd_enable="YES"<br />
	</blockquote>
	<p>It is used during start up and is responsible defining the network card and the ip address or if it uses DHCP. This 
	file also contains the _enable variables for many packages on the system. With inetd now disabled by default in FreeBSD many packages
	have start up scripts that only allow the program to start if it is specifically enabled in the rc.conf file. A few of these programs
	are: bind, mysql, and apache.</p>
	<p>For the network setup it is okay to have several different lines for the same network card, only the last one is actually used.</p>
	
	<h2>/etc/make.conf</h2>
	<p>make.conf is a good place to store variables that the ports use so that you do not have to define them in the command line
	everytime you install a port that uses one.</p>
	<blockquote>PERL_VER=5.8.7<br />
				PERL_VERSION=5.8.7<br />
				WITHOUT_X11=yes<br />
				KERNCONF=PLATO<br />
	</blockquote>
	
	<h2>/usr/local/etc</h2>
	<p>The majority of config files for installed packages appear here.</p>
	
	<h2>/usr/local/etc/rc.d</h2>
	<p>Scripts ending in sh are run at start up if they are in this directory. To manually start or stop a program you can go 
	here to do so</p>
	<blockquote># sh mysql-server.sh stop<br />
				# sh mysql-server.sh start</blockquote>
	
	<h2>/usr/ports</h2>
	<p>The <a href="using-the-freebsd-ports-collection.php">ports collection</a> is a directory of makefiles for a large number of common programs.</p>
	
	<br />
	

</div>
<div class="rightSide"></div>
<div class="footer">
<a href="bitcoin:14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d?amount=0.01&label=FreeBSDMadeEasy"><p>14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d</p></a>
</div>
</body>
</html>

