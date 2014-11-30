http://www.freebsdmadeeasy.com/tutorials/web-server/analyze-apache-web-server-logs-with-awstats.php
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 15:47:53 GMT
Server: Apache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 2656
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Justin Emgarten" />
<meta name="Description" content="Awstats is a very powerful open source package for analyzing apache web server logs and mining the data to show you exactly where your traffic is coming from and where they are going." />
<meta name="Keywords" content="FreeBSD, Tutorials, awstats, stats, statistics, web, traffic" />
<meta name="title" content="Analyzing web traffic with Awstats" />
<meta name="robots" content="index,follow" />
<meta name="copyright" content="Copyright � 2005 Justin Emgarten" />


<title>Analyzing web traffic with Awstats</title>
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
	<h1>Analyzing web traffic with awstats</h1>
	<p>Once your web server is up and running it is important to analyze your logs to see what searches are bringing users to the 
	sites, how long they are staying, and what pages they are coming in and going out on. One of the most popular open source tools
	for this task is <a href="http://www.awstats.org/">awstats</a>.</p>
		<h2>Installing awstats from the ports</h2>
	<blockquote># cd /usr/ports/www/awstats<br />
	# make install</blockquote>
	<p>Awstats installs to /usr/local/www/awstats and needs to following lines added to your apache httpd.conf</p>
	<pre>#
# Directives to allow use of AWStats as a CGI
#
Alias /awstatsclasses &quot;/usr/local/www/awstats/classes/&quot;
Alias /awstatscss &quot;/usr/local/www/awstats/css/&quot;
Alias /awstatsicons &quot;/usr/local/www/awstats/icons/&quot;
ScriptAlias /awstats/ &quot;/usr/local/www/awstats/cgi-bin/&quot;

#
# This is to permit URL access to scripts/files in AWStats directory.
#
&lt;Directory &quot;/usr/local/www/awstats/&quot;&gt;
    Options None
    AllowOverride None
    Order allow,deny
    Allow from all
&lt;/Directory&gt;</pre>
<p>After this you will need to restart apache for the settings to take effect.</p>
<blockquote># apachectl graceful</blockquote>
	
	<h2>Configuring awstats</h2>
	<p>A config file must be created for every website. These are placed in /usr/local/www/awstats/cgi-bin
	The awstats.model.conf is the example file so first copy it over so that you have a new one to work with.</p>
	<blockquote># cp awstats.model.conf awstats.yoursite.conf</blockquote>
	<p>Once you have a file for your site open it and begin editting it. There are many options which are explained in the file, but
	the only necessary ones to change are the hostname, and any aliases used for the site. You also need to change the log type
	if you are not using the apache combined format.</p>
	
	<h2>Updating the stats</h2>
	<p>Viewing the stats is a seperate process from updating the stats. To have awstats parse your log files and update the stats daily
	you need to create a <a href="../freebsd/schedule-tasks-with-crontab.php">cron job</a> for awstats.</p>
	<pre>30 4 * * * /usr/local/www/awstats/cgi-bin/awstats.pl
		-update -config=yoursite &gt;/dev/null 2&gt;&amp;1</pre>
	<p>The above will update the stats using the awstats.yoursite.conf file every morning at 4:30am. Notice that for the config file
	awstats.yoursite.conf the awstats and conf are left off.</p>

	<h2>Updating multiple sites</h2>
	<p>Once you get a large number of sites added to awstats keeping tracking of all the crons to update them can be a problem,
	especially if you are trying to keep them all from running at the same time by spacing out the times. To simplify things
	you can use this <a href="../scripts/awsRunAll.gz" rel="nofollow">awstats updater script</a> to update the stats for 
	every config file in the awstats/cgi-bin.</p>
	
	<h2>Viewing the stats</h2>
	<p>Now that the stats have been updated you can view them online by pointing your browser to www.yoursite.com/awstats/awstats.pl?config=yoursite</p>
<br />
		
</div>
<div class="rightSide"></div>
<div class="footer">
<a href="bitcoin:14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d?amount=0.01&label=FreeBSDMadeEasy"><p>14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d</p></a>
</div>
</body>
</html>

