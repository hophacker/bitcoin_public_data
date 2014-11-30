http://www.freebsdmadeeasy.com/tutorials/freebsd/freebsd-tricks.php
HTTP/1.1 200 OK
Date: Tue, 22 Jul 2014 13:22:27 GMT
Server: Apache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 2765
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Justin Emgarten" />
<meta name="Description" content="A collection of misc tips & tricks that can save hours of frustration." />
<meta name="Keywords" content="FreeBSD, Tutorials" />
<meta name="title" content="FreeBSD Misc Tips & Tricks" />
<meta name="robots" content="index,follow" />
<meta name="copyright" content="Copyright � 2005 Justin Emgarten" />


<title>FreeBSD Misc Tips & Tricks</title>
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
	<h1>Misc Tips & Tricks</h1>
	<h2>Shells</h2>
	<p>Shells can be installed from /usr/ports/shells  Once you have installed a new shell you can set it as your default using</p>
	<blockquote># chsh</blockquote>
	<p>If you are using tcsh you can change the default under ~/.cshrc a good prompt is</p>
	<blockquote>set prompt = '%n@%m:%/%# '</blockquote>
	<p>Another thing to note about tcsh is that whenever you install a new program and it goes into a directory listed in your path 
	you must type rehash to update the list of programs in your path, otherwise you will get an error saying the program was not found.</p>
	<blockquote># rehash</blockquote>
	
	<h2>Changing your PATH in tcsh or csh</h2>
	<p>The PATH variable contains a list of the default directories that 
	are searched for any command you type in that is without a path. To
	change it in tcsh or any csh based shell edit your .cshrc file in your
	home directory and add the directory where you see set path</p>
	<pre># ee ~/.cshrc</pre>
	<p>Your default path will look something like this</p>
	<pre>set path = (/sbin /bin /usr/sbin /usr/bin)</pre>
	<p>Add in the new directory seperating it by a space<p>
	<pre>set path = (/sbin /bin /usr/sbin /usr/home/plato/mybin)</pre>
	<p>Once you are finished editting the file log out and log back in
	for the changes to take effect. If you are adding a new file
	to a directory in your path use rehash to update the shell.</p>
	<p>For other shells try the .profile or .bashrc file to update 
	your PATH.</p>

	<h2>Installing Java on FreeBSD</h2>
	<p>Installing Java on FreeBSD using /usr/ports/java/jdk14 is possibly the most annoying port ever to install. Its going to require you to
	manually go on online, register for an account on sun.com, and download several files from sun.com and other places.
	It will also of course ask for these through out the install instead of all at the beginning. So if you have room 
	it is a good idea to just save these files somewhere for the next time you need them. And once you have it installed you 
	will need to add the following directories to your path or your programs will be unable to find it.</p>
	<blockquote>/usr/local/jdk1.4.2/bin<br />
	/usr/local/jdk1.4.2/lib</blockquote>
	<p>Unless the program is purely text based and doesn't do anything fancy the native version of java for FreeBSD is probably going
	to mess it up and display it totally different than it should really look. For this reason you might want to instead point your 
	path to the linux version of sun which the FreeBSD version requires and installs when you use the port.</p>
	<blockquote>/usr/local/linux-sun-jdk1.4.2/bin<br />
	/usr/local/linux-sun-jdk1.4.2/lib</blockquote>
	<p>There are also several other versions of Java available in the ports such as linux-blackdown-jdk14 which do not require you to
	download anything manually, and sometimes works better.</p>

	<h2>Reading the daily output</h2>
	<p>FreeBSD periodically runs scripts which generates reports telling you about any spammers that tried to relay mail using your
	machine, any failed logins, and any password changes or new accounts created. The cron for these is found at /etc/crontab The result
	of these scripts is emailed to your root account.</p>
	<p>To check the mail on your root account you can install a mail client such as mutt or pine. Or if you wish to forward this mail
	to another email account you can create a .forward file in your root directory and put only the email address to forward to in it.</p>
	<br />
	</div>
<div class="rightSide"></div>
<div class="footer">
<a href="bitcoin:14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d?amount=0.01&label=FreeBSDMadeEasy"><p>14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d</p></a>
</div>
</body>
</html>

