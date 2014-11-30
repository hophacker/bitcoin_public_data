http://www.freebsdmadeeasy.com/tutorials/web-server/perform-backups-on-mysql.php
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 17:46:38 GMT
Server: Apache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 1772
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Justin Emgarten" />
<meta name="Description" content="Performing regular backups of your MySQL database server is important. You never know when a server
		could crash and all your information could be lost. In this tutorial we will show you the basics of backing up and restoring
		your database using mysqldump and phpMyAdmin." />
<meta name="Keywords" content="FreeBSD, Tutorials, mysql, backup, mysqldump, phpmyadmin, bzip2, recovery" />
<meta name="title" content="Backing up your MySQL Database" />
<meta name="robots" content="index,follow" />
<meta name="copyright" content="Copyright � 2005 Justin Emgarten" />


<title>Backing up your MySQL Database</title>
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
	<h1>Backing up your MySQL Database</h1>
	<p>Performing regular backups of your MySQL database server is important. You never know when a server
		could crash and all your information could be lost. In this tutorial we will show you the basics of backing up and restoring
		your database using mysqldump and phpMyAdmin.</p>			
		<h2>Backing up your MySQL Databases</h2>
	<p>The following command will dump all databases to an sql file. Replace pass with your root database password
	and filename with the name of the file you wish to create such as backup.sql</p>	
	<pre># mysqldump -u&lt;user&gt; -p&lt;pass&gt; -B --all-databases &gt; &lt;filename&gt;
# mysqldump -uroot -pSuperPass -B --all-databases &gt; all.sql</pre>
	<p>A single database can be backed up also.</p>
	<pre># mysqldump -u&lt;user&gt; -p&lt;pass&gt; &lt;database&gt; &gt; &lt;filename&gt;
# mysqldump -uWiki -pBlue wikidb &gt; wikidb.sql</pre>
	<p>Mysqldump is located at /usr/local/bin/mysqldump</p>
	<h2>Compressing the backup</h2>
	<p>The file can then be compressed to reduce its size and make it easier to move around with the following.</p>
	<pre># bzip2 --best &lt;filename&gt;</pre>

<br />
	</div>
<div class="rightSide"></div>
<div class="footer">
<a href="bitcoin:14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d?amount=0.01&label=FreeBSDMadeEasy"><p>14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d</p></a>
</div>
</body>
</html>

