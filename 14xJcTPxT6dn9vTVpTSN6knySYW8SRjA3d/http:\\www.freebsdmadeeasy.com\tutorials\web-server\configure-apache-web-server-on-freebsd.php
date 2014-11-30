http://www.freebsdmadeeasy.com/tutorials/web-server/configure-apache-web-server-on-freebsd.php
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 22:09:31 GMT
Server: Apache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 5072
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Justin Emgarten" />
<meta name="Description" content="Installing Apache from the ports, configuring the httpd.conf file for virtual hosts and password protected directories, opening additional ports, and setting up the log files." />
<meta name="Keywords" content="FreeBSD, Tutorials, Apache, install, config, httpd.conf, log, virtual hosts, firewall, apachectl" />
<meta name="title" content="Installing and configuring the Apache web server on FreeBSD" />
<meta name="robots" content="index,follow" />
<meta name="copyright" content="Copyright � 2005 Justin Emgarten" />


<title>Installing and configuring the Apache 2.2.x web server on FreeBSD</title>
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
	<h1>Installing and configuring the Apache 2.2.x web server on FreeBSD</h1>
	<h2>Installing the port</h2>
	<p>Apache 2.2 can be installed from the ports with the following commands</p>
	<blockquote># cd /usr/ports/www/apache22<br />
				# make install</blockquote>
	<p>You will need to add an enable line for Apache to your /etc/rc.conf file</p>
	<blockquote>apache22_enable=&quot;YES&quot;</blockquote>
	<p>Apache installs a start up script in /usr/local/etc/rc.d, but to stop and start the port the apachectl command is used which
	we will be looking at later when it is time to start the server.</p>
		<h2>Configuring Apache's httpd.conf</h2>
	<p>The httpd.conf contains most all of the important configuration settings. Everything can be done here from adding virtual hosts,
	to setting the log files, to setting .htm files to be parsed for php. You can open the httpd.conf file for editting with</p>
	<blockquote>ee /usr/local/etc/apache22/httpd.conf</blockquote>
	<p>When first getting the web server going you will be editting this file a lot, so its not a bad idea to create an alias for
	the above command in your shell.</p>
	<p>The first thing you will need to change in the file to get your server going is the ServerName to the hostname you want
	to use for the server. If you do not have one you can use the IP address, or localhost. This will need to be followed by the port number.</p>
	<blockquote>ServerName www.yourdomain.com:80</blockquote>

	<p>Currently in Apache 2.2.x the default directory is /usr/local/www/apache22 instead of the old default. This
	should be changed to the standard directory of /usr/local/www/data in every spot. You can move the folder like this if you do not have a previous 
	version of apache installed that has created the directory already.</p>
	<blockquote># mv /usr/local/www/apache22 /usr/local/www/</blockquote>

	<p>You can replace it easily with sarep from the ports with this command.</p>
	<pre># sarep "/usr/local/www/apache22" "/usr/local/www" httpd.conf</pre>

	<p>This is enough to get the server going so that you can check that it will run, so do that now.</p>
	
	<h2>Loading the accf_http module</h2>
	<p>On FreeBSD you must load the accf_module before you can start apache, otherwise you are sure to get an httpready error.
	To load the module use kldload</p>
	<pre># kldload accf_http</pre>
	<p>If it loaded successfully then it will not give any errors or output. To have it load on boot add this to your 
	/boot/loader.conf file</p>
	<blockquote>accf_http_load="YES"</blockquote>

	<h2>Starting Apache</h2>
	<p>Apache is controlled with apachectl, some examples of its usage are</p>
	<blockquote># apachectl start<br />
				# apachectl restart<br />
				# apachectl graceful<br />
				# apachectl stop</blockquote>
				
	<p>The graceful option has the same result as restart, it just does it in a nice way as opposed to restart forcefully
	restarting the server.</p>
	<p>Before restarting or starting Apache it is best to run the configtest to check for errors in the httpd.conf</p>
	<blockquote># apachectl configtest</blockquote>
	<p>If this comes back OK then you are good to go. When starting Apache it will not tell you if the start was successful,
	the easiest way to check this is to restart it. If apache failed to start up previously it will tell you that Apache is
	not running when you perform the restart.</p>
	<p>If Apache will not start you can check the logs for error messages</p>
	<blockquote># tail /var/log/messages<br />
				# tail /var/log/httpd-error.log</blockquote>
	<p>To check if you can get to the server just point your web browser to the machine and you should get a message telling you
	that Apache has been successfully installed.</p>

	<h2>Adding Virtual Hosts</h2>
	<p>Virtual hosts can be set up in Apache to direct traffic depending on the hostname they used to access the server. This lets you
	have many domain names, with only one ip address. To add virtual hosts open the /usr/local/etc/apache22/httpd.conf file and unhash the virtual
	 host include so that is brings in the settings for vhosts.</p>
	<pre># Virtual hosts
Include etc/apache22/extra/httpd-vhosts.conf</pre>
	<p>Then add the virtual hosts which declare the virtual host to watch for, the directory of the web site, and where the logs go.
	They can be added to either httpd.conf or a new .conf file in /usr/local/etc/apache22/Includes  All files in /Includes ending 
	with .conf will be included in the httpd.conf the same as if you had put the code directly into that file.
	<pre>&lt;VirtualHost *:80&gt;
DocumentRoot /usr/local/www/yourdomain
ServerAdmin root@yourdomain.com
ServerName www.yourdomain.com
ServerAlias stuff.yourdomain.com
CustomLog /usr/local/www/logs/domain-access_log combined
ErrorLog /usr/local/www/logs/domain-error_log
&lt;/VirtualHost&gt;</pre>
	<p>In the above example, when a user goes to www.yourdomain.com or stuff.yourdomain.com, Apache will see the virtual host 
	directive for it and serve them pages from /usr/local/www/yourdomain</p>
	<p>The access log uses the combined format which logs all the information, such as the browser, refer, and page. The logs can
	be set to any file. If you do use this place or another for logging make sure that the directory exists or Apache will not start.
	We will be working with these logs later with <a href="analyze-apache-web-server-logs-with-awstats.php">Awstats</a> 
	and also for <a href="monitor-apache-web-server-in-real-time.php">real-time monitoring</a></p>
	<p>More Virtual Hosts can be added by simply creating more virtual host directives in the httpd.conf file. The first virtual host
	listed will be the default for it you access the server by its IP. To change this back to pointing at /usr/local/www/data you will
	need to make a virtual host directive pointing to that directory and place it before any others.</p>
	
	<h2>Accessing Virtual Hosting without the Hostname</h2>
	<p>Since virtual hosts work strictly by the hostname they are not usable when you are behind a firewall or router and the 
	machines behind it have local ips such as 192.168.0. Everytime you try to access the virtual host you will simply be taken
	to the router and given an error. To fix this we will need to open up more ports for Apache to listen on so that we can
	access the sites directly through these instead of virtual hosts. Since the machine is behind the firewall and getting ports getting
	a limited number of ports forwarded to it these will not be accessible to the outside world unless you have them forwarded to it.</p>
	<p>Apache specifies which ports it listens on with the LISTEN lines in the httpd.conf file. The default is to only listen on 80, but 
	we need it to listen on extra ports so more LISTEN lines need to be added. If we had 3 virtual hosts that we wanted to access by ports
	6000, 6001, and 6002 the httpd.conf file would look like this</p>
	<blockquote>Listen 80<br />
				Listen 443<br />
				Listen 6000<br />
				Listen 6001<br />
				Listen 6002</blockquote>
	<p>Next we need to set up virtual hosts for these so Apache knows what directory to serve from when you it is accessed on these
	new ports. They are similiar to the virtual hosts set up above, only most of the settings can be left off</p>
	<blockquote>&lt;VirtualHost *:6000&gt;<br />
        DocumentRoot /usr/local/www/yourdomain<br />
        ServerName 192.168.0.45<br />
	&lt;/VirtualHost&gt;</blockquote>
	<p>In this example anything coming in on port 6000 points to the /usr/local/www/yourdomain directory, which is the 
	same as the Virtual Host we set up above, but now we can access it by going to http://192.168.0.45:6000 instead of
	http://www.yourdomain.com/ The 192.168.0.45 should be changed to whatever the local ip of your web server is.</p>
	<p>There are no log files specified here since this should only be accessed by yourself testing the site locally, and 
	you wouldn't want to count this in the web site statistics.</p>
	<p>A virtual host like this should also be created for the other two sites at 6001, and 6002 simply changing the port and
	DocumentRoot for each virtual host directive.</p>

	
	<h2>Turning on the defaults</h2>
	<p>Many of the default settings are now included in a seperate file and turned off default. To use them
	unhash this part of your httpd.conf file.</p>
	<pre># Various default settings
Include etc/apache22/extra/httpd-default.conf</pre>

	<h2>Common Errors</h2>
	<p>The most common error when setting up Apache is the "cannot determine local host name" error. This
	error is caused by the hostname resolving to a different IP than the one it has. To check what your
	current hostname is use hostname. Then use nslookup on the hostname to get the IP and compare it to the IP that your machine
	is actually using with ifconfig. For example:</p>
	<pre># hostname
	server.mydomain.com

# nslookup server.mydomain.com
	Non-authoritative answer:
	Name:   server.mydomain.com
	Address: 10.1.1.30

# ifconfig
	inet 192.168.0.5 netmask 0xffffff00</pre>
	<p>We can see here that the IP of the hostname does not match the real IP of the machine. A quick fix for 
	this is to just add the hostname to your /etc/hosts file.</p>
	<pre># ee /etc/hosts
	
	192.168.0.5	server.mydomain.com.</pre>

	<p>This will set the hostname to the IP assigned to your machine. Make sure you do not forget to put a . on the 
	end when adding this line!</p>

	<p>Another very common error is this one</p>
	<pre>[warn] (2)No such file or directory: Failed to enable 
the 'httpready' Accept Filter</pre>	
	<p>It is caused by not having the accf_http kernel module loaded. Loading it is explained above.</p>
	
	<h2>Password Protecting Directories</h2>
	<p>Directories are set to password protected in the the httpd.conf file also. See the tutorial on 
	<a href="password-protect-directories-with-htaccess.php">password protecting directories with htaccess</a> in Apache</p>

	<h2>Encrypting Traffic with SSL</h2>
	<p>The data moving between the user and your server well be plain text unless you use encrypt it. See the
	tutorial on setting up <a href="apache-ssl-certs.php">SSL with Apache 2</a>.</p>

	<h2>Apache 2.0</h2>
	<p>Go here for the old <a href="configure-apache20-web-server-on-freebsd.php" rel="nofollow">Apache 2.0</a> tutorial.</h2>
<br />
	</div>
<div class="rightSide"></div>
<div class="footer">
<a href="bitcoin:14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d?amount=0.01&label=FreeBSDMadeEasy"><p>14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d</p></a>
</div>
</body>
</html>

