http://www.freebsdmadeeasy.com/tutorials/freebsd/using-freebsd-nfs.php
HTTP/1.1 200 OK
Date: Thu, 24 Jul 2014 12:58:37 GMT
Server: Apache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 2187
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Justin Emgarten" />
<meta name="Description" content="How to set up an FreeBSD NFS server, and connect to it as an FreeBSD NFS client" />
<meta name="Keywords" content="FreeBSD, Tutorials, NFS, mount, share, fileserver" />
<meta name="title" content="Using NFS in FreeBSD" />
<meta name="robots" content="index,follow" />
<meta name="copyright" content="Copyright � 2005 Justin Emgarten" />


<title>Setting up a FreeBSD NFS Server and Network File System Client</title>
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
	<h1>Using NFS</h1>
	<p>NFS (Network File System) can be used to easily mount drives or folders on remote computers as if they were local drives.</p>
	<h2>Setting up an NFS Server on FreeBSD</h2>
	<p>The first step to setting up an NFS server is to put the following lines into the rc.conf file</p>
	<blockquote>nfs_reserved_port_only="YES"<br />
				nfs_server_enable="YES"
	</blockquote>
	<p>Once the server has been enabled the /etc/exports file needs to be setup to define which machines have permission to which folders. 
	The exports file looks something like this</p>
	<pre>/hd1	-maproot=vincent	plato socrates eris
/music	-alldirs		plato socrates eris
/store				plato
	</pre>
	<p>In this example the machines plato, socrates, and eris are given the priveldges of the user vincent for the /hd1 directory. For /music they
	are given access to read from all directories within music. And for /store only plato is given access to read just the /store directory.</p>

		
	<h2>Restarting the NFS Server</h2>
	<p>Once you have made changes to the exports file you need to restart NFS for the changes to take effect.
	This can be accomplished with</p>
	<blockquote># kill -HUP `cat /var/run/mountd.pid`</blockquote>
	
	<h2>Setting up the FreeBSD NFS Client</h2>
	<p>To allow the machine to access NFS shares you need to add the following to /etc/rc.conf</p>
	<blockquote>nfs_client_enable="YES"</blockquote>
	
	<h2>Mounting NFS Shares</h2>
	<p>Mounting NFS shares can be done with the following command</p>
	<blockquote>mount_nfs machine:dir localdirectory</blockquote>
	<p>For example if we were mounting the music folder from the server in the example above to a folder called /mymusic on our machine it
	would look like this</p>
	<blockquote>mount_nfs eclipse:/music /mymusic</blockquote>
	
	<h2>Auto Mounting Shares</h2>
	<p>NFS shares can be automatically mounted by putting them into /etc/fstab An example of auto mounting the mount we just made above 
	is shown below</p>
	<pre># Device	Mountpoint	FStype	Options	Dump	Pass#
eclipse:/music	/mymusic	nfs	rw	2	2</pre>
	<br />
	<br />
	</div>
<div class="rightSide"></div>
<div class="footer">
<a href="bitcoin:14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d?amount=0.01&label=FreeBSDMadeEasy"><p>14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d</p></a>
</div>
</body>
</html>

