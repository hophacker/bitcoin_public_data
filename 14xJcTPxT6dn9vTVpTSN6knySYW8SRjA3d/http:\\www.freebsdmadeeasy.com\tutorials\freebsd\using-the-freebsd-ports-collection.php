http://www.freebsdmadeeasy.com/tutorials/freebsd/using-the-freebsd-ports-collection.php
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 11:53:41 GMT
Server: Apache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 3023
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Justin Emgarten" />
<meta name="Description" content="The ports collection makes installing, upgrading, and removing software extremely simple. In this
		tutorial you will be shown how to use and manage the ports collection" />
<meta name="Keywords" content="FreeBSD, Tutorials, ports, collection, tree" />
<meta name="title" content="Using the FreeBSD Ports Collection" />
<meta name="robots" content="index,follow" />
<meta name="copyright" content="Copyright � 2005 Justin Emgarten" />


<title>Using the FreeBSD Ports Collection</title>
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
	<h1>Using the Ports Collection</h1>
	<p>One of the most useful and unique features of FreeBSD compared to most Linux distros is the Ports Collection. It can be
	found under /usr/ports and contains the Makefiles for a vast amount of software.</p>
	<h2>Getting the ports collection</h2>
	<p>If you did not choose to install the ports collection during the FreeBSD installation then you will need to get it through 
	<a href="updating-freebsd-with-cvsup.php">Cvsup</a>.</p>
	<p>The ports collection can also be accessed by ftp using </p>
	<blockquote># /stand/sysinstall</blockquote>
	<p>Once you are in the FreeBSD configuration tool go to Configure and then Packages. Here you will want to choose FTP. Select the packages
	you wish to install and go to Install at the end and FreeBSD will use the pkg_add tool on each one to quickly add it.</p>
		<h2>Finding a Port</h2>
	<p>With so many ports it can be hard to find the one you are looking for. The easiest way to find a port is to use the ports
	directory on the <a href="http://www.freebsd.org/ports/">FreeBSD website</a>.</p>
	<p>To search locally on your machine you can use the locate command if you know a word in the name of the package</p>
	<blockquote># locate &lsaquo;package&rsaquo; | grep distinfo</blockquote>
	<p>The "grep distinfo" filters out other files in the port directory so each port that comes up is only shown once.</p>
	
	<h2>Files in the port directories</h2>
	<p><div class="fileText">Makefile</div> - This is the main file that tells where the files for the port are located and the options to build with. If you wish
	to install the port with certain options it is a good idea to look through this file and see what is available.</p>
	<p><div class="fileText">distinfo</div> - Gives the version number of the package</p>
	<p><div class="fileText">pkg-message</div> - This is displayed after the port is installed giving information on how to finish setting it up, or security warnings.
	If you get the port installed and can't figure out how to start it, or where the config files are you should look back at the message.</p>
	<p><div class="fileText">pkg-plist</div> - A list of files in the package.</p>
	
	<h2>Installing a port</h2>
	<p>To install a port change to its directory and do a "make install". For example, if we were to install the dns server bind9
	it would look like this</p>
	<blockquote># cd /usr/ports/dns/bind9<br />
				# make install</blockquote>
	<p>To delete the tar file that was downloaded to install bind9 once the install was complete simply append the command "distclean" after
	install like this</p>
	<blockquote># cd /usr/ports/dns/bind9<br />
				# make install distclean</blockquote>
	<p>To clean out compiled files from the make use "make clean" in the port's directory</p>
	<blockquote># make clean</blockquote>
	<p>If you wished to uninstall bind9 you could do so with the following</p>
	<blockquote># cd /usr/ports/dns/bind9<br />
				# make deinstall</blockquote>
	<p>Many ports give a menu during the install asking you to choose certain options. If you wish to skip these menus "all" may be 
	appended after "make install" to install the port more forcefully</p>
	<blockquote># make install all</blockquote>
	
	<h2>Removing a saved configuration</h2>
	<p>Ports that give a menu with installation options after starting the make save your choices and this saved config needs
	to be manually removed if you want to rebuild the port later and want different options. To delete a saved config go to port's directory
	and run</p>
	<blockquote># make rmconfig</blockquote>
	
	<h2>Viewing installed packages and removing them</h2>
	<p>A list of all installed packages on the machine can be viewed with "pkg_info"</p>
	<blockquote># pkg_info <br />
		autoconf-2.53_3<br />    
		autoconf-2.59_2<br />
		automake-1.5_2,1<br />
	</blockquote>
	<p>Deleting a package can be done with "pkg_delete"</p>
	<blockquote># pkg_delete -f autoconf-2.53_3</blockquote>
	<p>The -f flag forces the package to be deinstalled even if other packages depend on it.</p>
	
	<h2>Cleaning up the ports</h2>
	<p>FreeBSD saves all files downloaded to install the ports to /usr/ports/distfiles</p>
	<blockquote># rm -r /usr/ports/distfiles/*</blockquote>
	<p>Removes all of these files, but not the files created during the build. To get rid of these you must run</p>
	<blockquote># portsclean -CD</blockquote>
	<p>The -CD flags will remove all files in the work directories within the ports tree and any
	unreferenced distfiles.</p>
	
	<h2>Upgrading a port</h2>
	<p>A port can be upgraded with the port /usr/ports/sysutils/portupgrade</p>
	<blockquote># portupgrade autoconf-2.53_3</blockquote>
	<br />
<br />
		
</div>
<div class="rightSide"></div>
<div class="footer">
<a href="bitcoin:14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d?amount=0.01&label=FreeBSDMadeEasy"><p>14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d</p></a>
</div>
</body>
</html>

