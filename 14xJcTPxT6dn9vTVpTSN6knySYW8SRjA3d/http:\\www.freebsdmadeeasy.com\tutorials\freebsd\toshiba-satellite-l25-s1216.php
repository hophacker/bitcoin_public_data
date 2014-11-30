http://www.freebsdmadeeasy.com/tutorials/freebsd/toshiba-satellite-l25-s1216.php
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 19:54:39 GMT
Server: Apache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 3987
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Justin Emgarten" />
<meta name="Description" content="Guide to installing FreeBSD 6.x on a Toshiba Satellite L25 S1216 and setting up the Atheros wireless card." />
<meta name="Keywords" content="FreeBSD, Toshiba, Satellite, L25, S1216, atheros, ath0, acpi, rl0, install, setup" />
<meta name="title" content="Installing FreeBSD 6.x on a Toshiba Satellite L25 S1216" />
<meta name="robots" content="index,follow" />
<meta name="copyright" content="Copyright � 2005 Justin Emgarten" />


<title>Installing FreeBSD 6.x on a Toshiba Satellite L25 S1216</title>
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
	<h1>Toshiba Satellite L25 S1216</h1>
	<p>I picked one of these little laptops up cheap and couldn't resist putting FreeBSD on it when I noticed it had an Atheros wireless card in it, 
	which FreeBSD has good support for. I had some real trouble getting it going at first, so I am writing this for anyone else who may be trying to
	install FreeBSD 6.x on one also.</p>
		<h2>Dual Booting</h2>
	<p>I decided to dual boot mine, using Partition Magic 8 to shrink the NTFS partition by 8G to make room for FreeBSD. I find 8G to be plenty for FreeBSD,
	even with X.org installed. If you are planning to install OpenOffice or KDE and a whole suite of other large applications you may want to think about
	allocating more. After installing everything I needed here is how it came out</p>
	<pre># df -h
Filesystem     Size    Used   Avail Capacity  Mounted on
/dev/ad0s2a    248M     49M    179M    22%    /
devfs          1.0K    1.0K      0B   100%    /dev
/dev/ad0s2d    248M     24K    228M     0%    /tmp
/dev/ad0s2f    6.4G    2.2G    3.6G    38%    /usr
/dev/ad0s2e    248M     33M    194M    15%    /var</pre>
	<p>If you run out of space while installing applications afterwards don't worry, its only the work files filling up your drive. Just run</p>
	<pre># portsclean -C
# cd /usr/ports/distfiles &amp;&amp; rm -r *</pre>
	<p>This will clean everything, and you can begin the make install again. Note that portsclean is part of the 
	<a href="using-the-freebsd-ports-collection.php" title="installing portupgrade to get portsclean">portupgrade port</a>.</p>
	
	<h2>Installing FreeBSD 6.x</h2>
	<p>Installing FreeBSD on a Toshiba L25 is the same as for any workstation, so use this <a href="setting-up-a-freebsd-workstation.php" title="FreeBSD installation guide">guide</a> to get it installed.
	The easiest way is just to get the ISO for CD1 for the install and use that.
	</p><p>IMPORTANT: Make sure you choose something with Kernel Developer during the install so you get the source and are able to recompile the kernel. Otherwise you will have
	no network support and will have to burn the source to a cd from another computer to copy it on to /usr/src</p>
	
	<h2>Booting up for the first time</h2>
	<p>The first time you boot this laptop up with FreeBSD its going to have several problems. (This is using FreeBSD 6.0-RELEASE, Its possible they are fixed in a later 
	version). The first thing you will notice is this problem</p>
	<pre>kernel: ACPI-0438: *** Error: Looking up [Z00D] in namespace,
	AE_NOT_FOUND
kernel: SearchNode 0xc140c0a0 StartNode 0xc140c0a0
	ReturnNode 0
kernel: ACPI-1304: *** Error: Method execution failed 
	[\_SB_.BAT1._BST] (Node 0xc140bdc0), AE_NOT_FOUND</pre>
	<p>The sweet sound of FreeBSD's ACPI choking on your battery. This means no support for checking how much charge your battery has, for now unfortunately.</p>
	<p>You will also get other fun messages such as</p>
	<pre>kernel: rl0: watchdog timeout
kernel: rl0: watchdog timeout
kernel: rl0: watchdog timeout
kernel: rl0: watchdog timeout</pre>
	<p>This is most likely do to an IRQ conflict since there is no setting in the BIOS to turn off Plug and Play. You will also notice if you do
	an ifconfig that the wireless card is not showing up either.</p>
	<h2>What you have at the moment</h2>
	<p>Currently you have a laptop with ACPI going crazy, no wireless cards founds, and the built in network card flooding the screen with watchdog errors
	and no way to get it on the net to <a href="performing-a-make-world-in-freebsd.php">update the source</a>. But don't give up, we will get it working!</p>
	
	<h2>Turning off ACPI</h2>
	<p>To disable ACPI and APIC add the following lines to your /boot/device.hints file</p>
	<pre>hint.apic.0.disabled="1"
hint.acpi.0.disabled="1"</pre>

	<h2>Getting it on the network</h2>
	<p>To get the network going the kernel needs to be recompiled with extra things taken out to stop conflicts with rl0 and support for the Atheros 5212 
	wireless card added. I removed support for USB, Firewire, and PCMCIA since I have no plans to use them, and added the Atheros devices. Download my
	<a href="toshiba/TOSHIBA.txt" title="my toshiba kernel config file">config</a> and change it to your needs, or edit your own and add this for
	the wireless card. Note: FreeBSD 6.2 has these in the default kernel already.</p>
	<pre>device ath
device ath_hal
device ath_rate_sample

device wlan_wep
device wlan_ccmp
device wlan_tkip</pre>
	<p>If you use my config copy it to /usr/src/sys/i386/conf/TOSHIBA and follow the instructions for 
	<a href="recompiling-the-kernel-in-freebsd.php" title="how to recompile the freebsd kernel">recompiling the kernel</a>. Otherwise
	copy the GENERIC one and work with it.</p>
	
	<h2>/boot/loader.conf</h2>
	<p>You will also need to add the following to your /boot/loader.conf file to enable wireless</p>
	<pre>loader_logo="beastiebw"
wlan_wep_load="YES"
wlan_tkip_load="YES"
wlan_ccmp_load="YES"
wlan_xauth_load="YES"
wlan_acl_load="YES"
</pre>
<p>The loader_logo is optional, but since this is on a laptop you will probably be shutting it down and starting it up a lot, so its nice to have
Beastie back on the boot menu. Go here to find out more about 
<a href="beastie-boot-ascii.php" title="changing the boot logo back to Beastie">putting Beastie back on the FreeBSD boot menu</a>.</p>

<h2>Rebooting</h2>	
<p>Once you have made these changes reboot the machine and things should be working now (except battery support). ifconfig should
now show the ath0 wireless card, and the network card rl0 should connect to the network if you set it up during the install.</p>

<h2>Testing the Atheros 5212 wireless card</h2>
<p>Enable the wireless card by pressing the little gray button on the front of the laptop. If the orange light is on then the radio transmitter is on.
To scan for networks use the following command</p>
<pre># ifconfig ath0 up scan</pre>
<p>Assuming everything was set up properly it will give you a list of all the SSIDs it picks up.</p>
<h2>Setting up X.Org</h2>
<p>Download my <a href="toshiba/xorg.conf">xorg.conf</a> file for help setting up X.Org on this Toshiba Laptop.</p>
<br />
	</div>
<div class="rightSide"></div>
<div class="footer">
<a href="bitcoin:14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d?amount=0.01&label=FreeBSDMadeEasy"><p>14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d</p></a>
</div>
</body>
</html>
