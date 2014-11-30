http://www.freebsdmadeeasy.com/tutorials/freebsd/recompiling-the-kernel-in-freebsd.php
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 05:44:40 GMT
Server: Apache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 2687
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Justin Emgarten" />
<meta name="Description" content="The Generic Kernel is compiled with a large number of modules that are probably not needed on 
your system. In this tutorial the process of adding and taking modules out of the kernel to create your own customized kernel
is explained." />
<meta name="Keywords" content="FreeBSD, Tutorials, Kernel, Recompile, GENERIC, installkernel, buildkernel" />
<meta name="title" content="FreeBSD Tutorials" />
<meta name="robots" content="index,follow" />
<meta name="copyright" content="Copyright � 2005 Justin Emgarten" />


<title>Computer Tutorials for FreeBSD, PHP, Java, Apache, Hardware</title>
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
	<h1>Recompiling The Kernel In FreeBSD</h1>
	<p>Unless you have built your own custom kernel in FreeBSD, you are using the GENERIC kernel. The GENERIC kernel contains everything you need to get the machine 
	up and running the first time and covers a wide range of hardware. Some common reasons for rebuilding the kernel are:
	<ul>
		<li>To speed it up by taking out unused modules</li>
		<li>Add support for new hardware</li>
		<li>Update the kernel with the new source during a <a href="performing-a-make-world-in-freebsd.php">Make World</a></li>
	</ul>
	</p>
		<h2>Creating the Kernel Config</h2>
	<p>The first step to building a new kernel is to copy the GENERIC config file to your own. This new config file is generally given the hostname of the machine.</p>
	<blockquote># cd /usr/src/sys/i386/conf<br />
	# cp GENERIC NEWKERNEL</blockquote>
	<p>Once you have does this open the new kernel config and begin hashing out modules that are not needed. For example, if you are
	creating this kernel for a PIII you do not need the I486_CPU or the I485_CPU in your kernel and you can take them out like this:</p>
	<blockquote>machine		i386<br />
				#cpu		I486_CPU<br />
				#cpu		I586_CPU<br />
				cpu			I686_CPU<br />
				ident		GENERIC</blockquote>
<p>You should also change the ident to the name of the file so that when booting up it will show that it is booting your kernel and not the GENERIC one.</p>
	<blockquote>machine		i386<br />
				#cpu		I486_CPU<br />
				#cpu		I586_CPU<br />
				cpu			I686_CPU<br />
				ident		MIDNIGHT</blockquote>
	<p>On machines without SCSI controllers everything in the SCSI section can be hashed out, the same is true with the RAID, USB, and Firewire sections. If something needed
	is removed the machine may not be able to reboot with the new kernel and the previous one will need to be loaded instead. Notes on what the different modules
	in the config file are responsible for can be found in /usr/src/sys/i386/conf/NOTES</p>
	
	<h2>Building your new kernel is traditional way</h2>
	<blockquote># cd /usr/sbin/config NEWKERNEL<br />
	# cd ../../compile/NEWKERNEL<br />
	# make depend<br />
	# make <br />
	# make install <br/ ></blockquote>
	<p>To save time the last three commands can be done as</p>
	<blockquote># make depend && make && make install && reboot</blockquote>
	
	<h2>Building your new kernel the new way</h2>
	<p>Recently FreeBSD has a new way to build and install the new kernel and it can be done as so</p>
	<blockquote># cd /usr/src <br />
				# make buildkernel KERNCONF=NEWKERNEL<br />
				# make installkernel KERNCONF=NEWKERNEL</blockquote>
	<p>Here KERNCONF is just a variable that refers to the name of the kernel config file you want to use. To store the name 
	so you no longer need the last part of these commands you can put the following into you /etc/make.conf to save it.</p>
	<blockquote>KERNCONF=NEWKERNEL</blockquote>
	
	<h2>Rebooting</h2>
	
	<p>Once you successfully built and installed the kernel you will need to reboot the machine</p>
	<blockquote># reboot</blockquote>
	
	<h2>Errors</h2>
	
	<p>If the machine reboots successfully but gives errors it may be because the kernel was compiled with source code
	that is newer than that of the world. To rebuild with the new source code read about performing a <a href="performing-a-make-world-in-freebsd.php">make world</a></p>
	<br />
	<br />
		</div>	
<div class="rightSide"></div>
<div class="footer">
<a href="bitcoin:14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d?amount=0.01&label=FreeBSDMadeEasy"><p>14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d</p></a>
</div>
</body>
</html>

