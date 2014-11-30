http://www.freebsdmadeeasy.com/tutorials/freebsd/set-up-xorg-on-freebsd.php
HTTP/1.1 200 OK
Date: Thu, 24 Jul 2014 12:04:29 GMT
Server: Apache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 4995
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Justin Emgarten" />
<meta name="Description" content="The basics of setting up X.org and getting it running with a Window Manager" />
<meta name="Keywords" content="FreeBSD, Tutorials, X.org, Fluxbox, X11" />
<meta name="title" content="Setting up X.org" />
<meta name="robots" content="index,follow" />
<meta name="copyright" content="Copyright � 2005 Justin Emgarten" />


<title>Setting up X.org and FluxBox on FreeBSD</title>
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
	<h1>Setting up X.org and FluxBox on FreeBSD</h1>
	<p>In addition to being a great server FreeBSD can make a great workstation. This tutorial will take you through the basics
	of getting X.org running on FreeBSD with a window manager and introduce you to a few other great applications on X.org.</p>
	<h2>Before Installing X.org</h2>
	<p>Before installing X.org is it a good idea to run <a href="updating-freebsd-with-cvsup.php">Cvsup</a> to get the lastest 
	version of the port.</p>
	<p>You will also need to place the following line into your /etc/make.conf file to declare that you are going to be using X.org instead
	of the XFree86 port.</p>
	<blockquote>X_WINDOW_SYSTEM=xorg</blockquote>
		<h2>Installing X.org</h2>
	<p>X.org can be installed from the <a href="using-the-freebsd-ports-collection.php">ports</a> with the following commands</p>
	<blockquote># cd /usr/ports/x11/xorg<br />
				# make install</blockquote>
	<p>The process of compiling X.org may take a while depending on the speed of your machine.</p>
	
	<h2>Configuring X.org</h2>
	<p>The installation is the easy part, now comes the hard part of configuring your hardware in X.org. The best way to do this is
	use the X.org config script as root</p>
	<blockquote># xorgconfig</blockquote>
	<p><div class="fileText">Mouse Protocol</div> - If you do not know choose Auto or Sysmouse and it will usually work.</p>
	<p><div class="fileText">Emulate 3 Button Protocol</div> - If you have a 3 button mouse, or a mouse with a wheel (counts as a 3rd button) choose no. Otherwise you 
	need to hit yes. This allows you to press both buttons to represent the 3rd button which is needed for pasting text.</p>
	<p><div class="fileText">Mouse Device</div> - Unless your mouse is set to something else just hit enter to use the default of /dev/sysmouse</p>
	<p><div class="fileText">Keyboard</div> - If in doubt, press 1</p>
	<p><div class="fileText">XKB</div> - If you do not know what this is, choose no</p>
	<p><div class="fileText">Monitor</div> - This is one of the more important parts. If you choose incorrectly you could damage your monitor. Some monitors will tell 
	you the hsync and vsync under their menu. Others you will need to search for online. The best way to find the hsync and vsync is to
	look up the monitor's model number which you can find on the back of the monitor. You can search on a search engine for the model number
	along with the term hsync and hopefully find it. If you are unable to find the hsync and vsync anywhere then you can try using one of
	the generic ranges given on the menu. When you find the range go to enter your own range and put the numbers in using the format that the
	others are in.</p>
	<p><div class="fileText">Video Card</div> - Here you definitely want to look at the card database. When going through it you want to look for a card with the same chipset
	as yours if your card is not listed. The chipset is what counts here, not the maker of the card since many makers implement a number of 
	chipsets. If you get an error when trying to start X.org later it is probably because you choose the wrong chipset. Often it takes several 
	trys to find the correct one, or researching your card online to see what other people choose for it. This can be a hassle, especially with
	onboard cards, but if you keep at it you will probably find the chipset is on the list somewhere.</p>
	<p><div class="fileText">Video Memory</div> - This is in KB so you will need to multiply the number of MB of memory your card has by 1024 and enter it in. Normally this
	is just hashed out in the X.org config file so it is not of high importance that you get it right.</p>
	<p><div class="fileText">Resolutions</div> - Choose some resolutions that are somewhat low if you are unsure what how high your card can handle in X.org. You only need to 
	get it to run the first time, then you can come back and set them higher.</p>
	<p>Once you have finished the script it will write the file to /etc/X11/xorg.conf</p>
	
	<h2>/etc/X11/xorg.conf</h2>
	<p>The following is an example of setting up the resolution for 1280x1024 and 1024x768 at 24M colors.</p>
	<pre>Section "Screen"
    Identifier  "Screen 1"
    Device      "onboard"
    Monitor     "mx70"
    DefaultDepth 24

    Subsection "Display"
        Depth       24
        Modes       "1280x1024" "1024x768"
        ViewPort    0 0
    EndSubsection
EndSection</pre>
	<p>Here the resolutions must be written in order of largest to smallest or you will be scrolling around on your desktop. To change
	between these two resolutions you would press ctrl+alt+"+" to get a higher resolution, and ctrl+alt+"-" to get smaller. And yes, that
	is control, alt, plus. All held down at once and in that order.</p>
	
	<h2>Setting up a wheel mouse</h2>
	<p>To add support for the wheel on a mouse the last two lines in the following example are needed to map the buttons</p>
	<pre>    Identifier  "Mouse1"
    Driver      "mouse"
    Option "Protocol"    "Auto"
    Option "Device"      "/dev/sysmouse"
    Option      "Buttons"       "5"
    Option      "ZAxisMapping"  "4 5"</pre>
	
	<h2>Installing a Window Manager</h2>
	<p>After setting up X.org a Window Manager should be installed to help organize the desktop and make things all around easier. There
	are many to choose from in /usr/ports/x11-wm  All the major ones are there such as KDE and Gnome. If you are looking for something 
	similiar to windows one of these is a good choice. In this tutorial however we will be using 
	<a href="fluxbox.php">FluxBox</a>, which is a very light weight wm that is simple to use and configure. It can be
	installed from the ports at /usr/ports/x11-wm/fluxbox A gui also available for configuring fluxbox at /usr/ports/x11-wm/fluxconf</p>
	<p>For more on setting up fluxbox read the <a href="fluxbox.php">Fluxbox tutorial</a>.</p>

	<h2>Launching programs on startup with ~/.xinitrc</h2>
	<p>The .xinitrc file is run when X.org starts up, so this is where we need to place everything we want to load at startup. A basic
	.xinitrc file could look like this</p>
	<blockquote>exec xterm &amp;<br />
				exec fluxbox</blockquote>
	<p>The above file would launch an xterm terminal and then load the window manager, which in this case is fluxbox. All programs being
	launched need an &amp; after them so they will run in the background, the window manager however does not. Any program can be added to
	this file. If you wanted to also launch gkrellm and gaim on startup it would look something like this</p>
	<blockquote>exec xterm &amp;<br />
				exec gaim &amp;<br />
				exec gkrellm &amp;<br />
				exec fluxbox</blockquote>
	
	<h2>Starting X.org</h2>
	<p>Now that the .xinitrc file has been created X.org can be started by typing</p>
	<blockquote># startx</blockquote>
	<p>X.org can be stopped by pressing ctrl+alt+backspace</p>
	<p>If you have problems starting x go back and reconfigure your /etc/X11/xorg.conf file.</p>

	<h2>Setting the background</h2>
	<p>Once X.org is running the first thing you will want to do is get rid of the horrid default background. This can be done 
	using either feh (/usr/ports/graphics/feh), Eterm (/usr/ports/x11/eterm), or a number of other programs not covered here. To set
	a file called mybg.jpg in your home dir to the background it would look like this in the two mentioned programs</p>
	<blockquote># feh --bg-center ~/mybg.jpg<br /><br />
				# Esetroot ~/mybg.jpg</blockquote>
	
	<p>In FluxBox one of these commands can be placed under the root command in a theme file which are found under ~/.fluxbox/styles 
	This will automatically load that background when you choose the theme.</p>
	
	<h2>Getting Transparent Terminals</h2>
	<p>Both Eterm (/usr/ports/x11/eterm) and Wterm (/usr/ports/x11/wterm) allow for transparent terminals. In Wterm the options needed are</p>
	<blockquote># wterm -fg white -tr</blockquote>
	<p>This creates a clear window with white text. If you have a very dark background this is alright, but in most cases you will want to 
	add shading to make your text more readable.</p>
	<blockquote># wterm -bg green -fg white -tr -sh</blockquote>
	<p>The above command creates a terminal window with a green transparent background and white text.</p>
	<p>A clear transparent window in Eterm is created with</p>
	<blockquote># Eterm --buttonbar=0 --trans -v -f white</blockquote>
	<p>A window shaded at 60% blue is created with</p>
	<blockquote># Eterm --buttonbar=0 --trans --shade=60 --tint=blue -v -f white</blockquote>
	<p>To add these to your fluxbox menu (~/.fluxbox/menu) you would insert the follow sub group</p>
	<pre>[submenu] (Terminals)
[exec] (Wterm Blue) {wterm -bg blue -fg white -tr -sh}
[exec] (Wterm Green) {wterm -bg green -fg white -tr -sh}
[exec] (Wterm Red) {wterm -bg red -fg white -tr -sh}
[exec] (Wterm Orange) {wterm -bg orange -fg white -tr -sh}
[exec] (Wterm Clear) {wterm -fg white -tr}

[exec] (Eterm 20 Purple) {Eterm --buttonbar=0 --trans 
		--shade=20 --tint=purple -v -f white}
[exec] (Eterm 20 Gray) {Eterm --buttonbar=0 --trans 
		--shade=20 -v -f white}
[exec] (Eterm 60 Gray) {Eterm --buttonbar=0 --trans 
		--shade=60 -v -f white}
[exec] (Eterm 60 Blue) {Eterm --buttonbar=0 --trans 
		--shade=60 --tint=blue -v -f white}
[exec] (Eterm Clear) {Eterm --buttonbar=0 --trans
		-v -f white}
[end]
</pre>
	
	<h2>Useful Programs</h2>
	<p>Here are some useful programs for everyday activities if you are using X</p>
	<ul>
	<li>XChat - graphical irc client</li>
	<li>GKrellM - A very nice looking system monitoring tool with many plugins</li>
	<li>WMWeather - A handy little box that sits in the corner of the screen and displays the current weather</li>
	<li>Gaim - IM client that supports MSN, Yahoo, AIM, Jabber, ICQ, and many others</li>
	<li>Mozilla - web browser and mail client</li>
	<li>Liferea - RSS Reader</li>
	<li>mplayer - plays movies</li>
	</ul>

	<br />
		
</div>
<div class="rightSide"></div>
<div class="footer">
<a href="bitcoin:14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d?amount=0.01&label=FreeBSDMadeEasy"><p>14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d</p></a>
</div>
</body>
</html>

