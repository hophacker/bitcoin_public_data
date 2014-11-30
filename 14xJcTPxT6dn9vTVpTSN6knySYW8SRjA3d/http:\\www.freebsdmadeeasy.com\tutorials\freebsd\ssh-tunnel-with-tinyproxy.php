http://www.freebsdmadeeasy.com/tutorials/freebsd/ssh-tunnel-with-tinyproxy.php
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 07:32:02 GMT
Server: Apache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 3391
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Justin Emgarten" />
<meta name="Description" content="Set up an SSH tunnel using FreeBSD, tinyproxy, and SSH Tunnel from an xp or bsd machine" />
<meta name="Keywords" content="ssh tunnel, tinyproxy, xp, freebsd, vista" />
<meta name="robots" content="index,follow" />
<meta name="copyright" content="Copyright � 2006 Justin Emgarten" />
<title>Setting up an SSH Tunnel with Tinyproxy</title>
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
	<h1>Setting up an SSH Tunnel</h1>
	<p>An SSH Tunnel can be used to get around a firewall, encrypt data, and to bypass common filters.
	They can also give you access to your internal network when you are outside of it. In this tutorial
	we are going to set up a tunnel between a Windows XP machine and a FreeBSD box. The XP machine
	will be the remote computer and will connect using SSH Tunnel to access tinyproxy on the FreeBSD
	box with a web browser.</p>
		<h2>Enabling the SSH Daemon</h2>
	<p>If you enabled
	SSH when you installed FreeBSD you already on your way to getting one set up. If you aren't able
	to SSH to your machine make sure that it is enabled in rc.conf</p>
	<pre>sshd_enable="YES"</pre>
	<p>You can start it with</p>
	<pre># sh /etc/rc.d/sshd start</pre>
	<p>To check that SSH is running you can attempt to SSH into your own machine.</p>
	<pre># ssh localhost</pre>
	<p>If you are asked to accept the key or are asked for a password then its working.</p>

	<h2>Installing Tinyproxy</h2>
	<p>Tinyproxy can be installed from the ports. The current version at the time of writing this was 1.7.0</p>
	<pre># cd /usr/ports/www/tinyproxy
# make install distclean</pre>
	<p>Once the install completes you will need to rename the config file and edit it.</p>
	<pre># ee /usr/local/etc/tinyproxy.conf</pre>
	<p>Its a good idea to change the port to something other than 8888. In this tutorial we will
	use 6000 for the tinyproxy port. The rest of the settings will work as they are, 127.0.0.1 is allowed
	access by default, and since we will be tunneling to this machine thats the only one we need.</p>
	<p>It may also be a good idea to change the log path to something besides /var/logs/tinyproxy.log
	if you have a small /var partition. The log contains a list of all urls you access through it
	and this can easily fill up your partition if you use it daily. You may also want to make sure
	that data is safe if there are other users on the machine.</p>
	<h2>Starting Tinyproxy</h2>
	<p>Before you can start tinyproxy you need to add the following to your /etc/rc.conf file</p>
	<pre>tinyproxy_enable="YES"</pre>
	<p>Then start it using its start up script</p>
	<pre># sh /usr/local/etc/rc.d/tinyproxy start
Starting tinyproxy.</pre>
	
	<h2>Installing SSH Tunnel</h2>
	<p>SSH Tunnel is actually the name of the program we will be using for out ssh tunnel.
	You can download SSH Tunnel <a href="http://download2.rs4u.com/">here</a>.</p>

	<p>Choose Config from the Edit menu and enter in the tunnel information. Fill
	it out similiar to the following with your own information.<br /><br />
	<a href="../images/sshtunnelsettings.png"><img border="1" src="../images/sshtunnelsettings.png" width="200px" title="setting up a new tunnel" alt="config" /></a>
	</p>
	<p>The tunnel creates a port on the Windows machine that comes out on the FreeBSD machine. This
	is why the listen port is your localhost. On the other end you give the internal IP of the BSD box
	and the port you set tinyproxy to.</p>

	<p>Once you save the tunnel it will appear on the drop down menu from the home screen. Choose
	it and hit connect.<br /><br />
	<img src="../images/sshtunnel.png" title="SSH Tunnel" alt="SSH Tunnel" />
	</p>
	<p>If you are able to connect successfully the light will turn green. If you are not able to connect
	try connecting with a different SSH client to make sure that you are able to connect at all. If the
	FreeBSD machine is behind a firewall or router you will need to forward port 22.</p>

	<h2>Testing the Tunnel</h2>
	<p>Open a command window in XP (Run and then cmd) and type the following</p>
	<pre>telnet localhost 1050</pre>
	<p>1050 is the port we used above in the tunnel settings, if you choose a different port use that. If you
	get an error that you are unable to connect then either the tunnel settings or the tinyproxy config is
	incorrect. Otherwise you are ready to start using the tunnel.</p>
	
	<h2>Configuring the Browser</h2>
	<p>In Firefox go to Tools &gt; Options and then choose connection settings from the general tab.
	Select manual proxy configuration and enter localhost and 1050 for the port. This will point
	your browser to go through the tunnel and tinyproxy on the other end for everything.<br /><br />
	<a href="../images/mozillasshtunnel.png"><img border="1" width="200px" src="../images/mozillasshtunnel.png" title="mozilla settings" alt="mozilla settings" /></a>
	</p>
	<p>Point your browser to http://www.freebsdmadeeasy.com/checkip.php to see your IP address. If everything
	is set up correctly you will see the IP of the FreeBSD machine.</p>

	<h2>Tunneling Other Traffic</h2>
	<p>Tinyproxy limits what can go through to traffic on port 80 and 443 by default for web 
	traffic. If you would like to tunnel other traffic such as your instant messengers you 
	will either need to add those ports to the tinyproxy.conf file or you can comment out
	the following lines</p>
	<pre>#ConnectPort 443
#ConnectPort 563</pre>
	<p>Once they are commented out and you restart tinyproxy everything will be allowed through the 
	proxy. This is a risk, so if you don't need this option just stick to the defaults or allow
	the ports individually.</p>
	
	<h2>Using Putty instead of SSH Tunnel</h2>
	<p>If you do not have admin rights on your machine you can use Putty instead to set up the tunnel.</p>
	
	<br />
		
</div>
<div class="rightSide"></div>
<div class="footer">
<a href="bitcoin:14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d?amount=0.01&label=FreeBSDMadeEasy"><p>14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d</p></a>
</div>
</body>
</html>

