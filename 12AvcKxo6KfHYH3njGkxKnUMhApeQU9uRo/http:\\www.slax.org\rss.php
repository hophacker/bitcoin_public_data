http://www.slax.org/rss.php
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 05:36:07 GMT
Server: Apache
Connection: close
Content-Type: application/xml

<rss version="2.0">
	<channel>
		<image>
			<link>http://www.slax.org/blog/</link>
			<title>Slax author's blog</title>
			<url>http://www.slax.org/favicon.ico</url>
			<width>16</width>
			<height>16</height>
		</image>
		<title>Slax author's blog</title>
		<link>http://www.slax.org/blog/</link>
		<description>Blog of the author of Slax, Tomas M</description>
		<language>en</language>
		<pubDate>Wed, 23 Jul 2014 00:36:07 -0500</pubDate> 

		<item>
			<title>Interview with Slax's author</title> 
			<link>http://www.slax.org/blog/22759-Interview-with-Slax-s-author.html</link> 
			<description>I was just recently &lt;a href=&quot;http://www.root.cz/clanky/tomas-matejicek-hledam-pro-slax-nahradu-za-kde/&quot;&gt;interviewed&lt;/a&gt; for Czech Republic's most famous linux website &lt;a href=&quot;http://www.root.cz/&quot;&gt;root.cz&lt;/a&gt;. Here is a shortened (and slightly modified) version translated into English. The text is free to use at your website, if you feel the need.

The live distribution called Slax is developed by Tomas Matejicek since the year 2002. The developmend has stopped few years ago, however an article at root.cz initiated a new discussions and lead to successful restart thanks to two sponsoring companies. Now, one year later, it looks like the development is stuck again. We've asked Tomas for the current status, and plans for the future.

&lt;b&gt;Just one year ago, the development of Slax has been restarted, but now it looks like it's stuck again. What happened?&lt;/b&gt;

I have to admit that the development is now slowed down. The reason for that is simple - the software used in Slax (mostly the KDE desktop) doesn't show any significant progress towards better usage. I'd say the opposite is rather true - with every new bugfix release of KDE, I'm finding it more and more difficult to integrate it into Slax properly. As an example, the device notifier appears on strange places during KDE startup, the task bar is not properly resized to full screen width sometimes, and so on. Furthermore I am concerned about the startup time of KDE, which is significantly faster in Slax than anywhere else, but still too slow in my opinion. 

In general, KDE desktop or KDE SC (software compilation) is no longer looking like a good candidate for fast, simple and elegant desktop. It's the best time to choose something else, smaller, faster and nicer. Unfortunately I'm not a desktop programmer, I'm just putting existing things together to make Slax, things which were made by other programmers, so I'm reliant to waiting and trying, until something suitable is found. Fortunately Slax investors are not forcing me to make any hasty decisions.

&lt;b&gt;How are you fulfilling the financial plan? Does Slax make any income?&lt;/b&gt;

The investors got already more than a half of their investment in return, so I think it's safe to assume that their investment will be fully repaid in a long term, which was the primary goal. I'd like to introduce the paid-wallpaper business model I was talking about few times, but before this is done, I prefer to rebuild Slax once more again and replace KDE by something else. Slax uses Slackware as a base, which is a great advantage on one hand (the system is clean), but may be a night mare on the other hand, since there's nothing like package pool in debian, so if you need to make any software for Slackware/Slax, you usually have to compile it from scratch by hand, while you also have to find all the dependencies, which usually depend on other dependencies, which is sometimes even recursive. Yet I'm sticking with Slackware and I have no plans to switch to any other distro. I think it makes my life a bit harder, but I'm gaining a feeling of uniqueness, since there are not much Slackware-based distributions out there. At least not as much as of those *buntu clones.

&lt;img src=&quot;http://i.iinfo.cz/images/391/slax-7-1.png&quot; style=&quot;max-width: 100%&quot;&gt;

&lt;b&gt;What could replace KDE in Slax?&lt;/b&gt;

That's a good question, but I don't have any answer for that yet. There are lots of Desktop environments, but many of those &quot;innovative&quot; or &quot;progressive&quot; ones are somehow tied to the distribution they're running on. I thought for a short time that a good replacement for KDE could be Cinnamon (Gnome's fork from Linux Mint). It was available only for Mint, but just got separated recently, however I think I don't like it any longer.

&lt;img src=&quot;http://i.iinfo.cz/images/436/slax-mozne-desktopy-4.png&quot; style=&quot;max-width: 100%&quot;&gt;

Another possible candidate for KDE replacement is Pantheon desktop, which is officially released only for Elementary OS (Ubuntu's fork). If I could make Pantheon work on Slackware with minimum of dependencies, it could be it. First attempt of integration to Slax has failed though. Today it's probably the best option to wait for Ubuntu's LTS version release, which is scheduled to April 2014, since new Elementary OS version should be released after it. The new Pantheon could have most of the components enhanced for easier integration in other Linux distributions.

&lt;img src=&quot;http://i.iinfo.cz/images/436/slax-mozne-desktopy-3.png&quot; style=&quot;max-width: 100%&quot;&gt;

&lt;b&gt;What's your ideal desktop environment?&lt;/b&gt;

Ideal desktop environment starts within few seconds (I mean TWO) and gives the user a simple way to run programs and switch between them. That's it, it's nothing special at all. The old well known start menu can be replaced by a bubble with icons (as like slingshot in Elementary OS), taskbar doesn't necessarily have to show all the long window names (plank, used in Elementary OS, is mac-ish but otherwise very elegant), system tray at the top black line as we know it from Gnome or Ubuntu looks like a good idea as well.

&lt;img src=&quot;http://i.iinfo.cz/images/436/slax-mozne-desktopy-1.png&quot; style=&quot;max-width: 100%&quot;&gt;

In general, the technologies used in Elementary OS look inspiring. I'm convinced that the end user doesn't need anything else at all. I'm not any big fan of Activities in KDE, similarly I don't understand why whould anybody need gadgets or similar things in the base Slax.

&lt;img src=&quot;http://i.iinfo.cz/images/436/slax-mozne-desktopy-2.png&quot; style=&quot;max-width: 100%&quot;&gt;

It is essential that all the desktop components are well designed. And here, by Design, I mean the design how things work, what appears where and how, and such (for example the feature that two running terminal windows can be recognized by two dots under the terminal icon), yet it has of course have a nice design (in the meaning of &quot;nice look&quot; - those two dots in our example have to be &quot;nice&quot; somehow). Desktop effects like cube desktop or wobbly windows are awesome, but as we could see, they are not widely used anywhere, because the added value is not so significant. Sometimes less means more.

&lt;b&gt;Why don't you use Xfce, Enlightenment or OpenBox?&lt;/b&gt;

OpenBox is mostly just a window manager, not a desktop. XFce was nice few years ago, when the last version has been released, but it's too outdated for today. (Well the whole KDE4 look a bit outdated already). Gnome 3 brought a new way of managing multiple desktops and applications, I was really excited by that, but there were some other problems, such us ugly icon of current application in top black bar, really big window decorations, or the entirely reworked app switching through the Activities menu.

Anyway, regardless of which desktop could be choosen for Slax, it will mean putting it there instead of KDE, which will also mean getting rid of most of the other KDE SC applicastions which are used in Slax today. At least of those parts from KDE SC - software compilation. Those would have to be replaced too, by some simpler and smaller equivalents using GTK.

I think it will need some time, but I believe that sooner or later something usable for Slax could be found. When that happens, it will be the best to release that as Slax version 8. Any similarity with Windows versions is purely coincidental :)</description> 
			<author>tomas@slax.org (Tomas M)</author> 
			<pubDate>Wed, 02 Apr 2014 16:03:12 -0500</pubDate> 
			<guid isPermaLink="true">http://www.slax.org/blog/22759-Interview-with-Slax-s-author.html</guid> 
		</item>
		<item>
			<title>Bitcoins for life</title> 
			<link>http://www.slax.org/blog/22692-Bitcoins-for-life.html</link> 
			<description>It looks like &lt;a href=&quot;http://en.wikipedia.org/wiki/Bitcoin&quot;&gt;BitCoin&lt;/a&gt; is getting huge popularity nowadays. This virtual currency is now traded at around $970 per 1 BTC. I'm experimenting with bitcoins myself too. Do you have some spare bitcoins? Are you willing to donate a fraction of BTC? If so, I will be very grateful so I could experiment more :)

My address is: &lt;a href=&quot;https://blockchain.info/address/12AvcKxo6KfHYH3njGkxKnUMhApeQU9uRo&quot;&gt;12AvcKxo6KfHYH3njGkxKnUMhApeQU9uRo&lt;/a&gt; (click to see the transactions log, if any)

QR code:
&lt;img src=&quot;http://chart.apis.google.com/chart?cht=qr&amp;chs=128x128&amp;chl=12AvcKxo6KfHYH3njGkxKnUMhApeQU9uRo&amp;chld=L|0&quot;&gt;

Thank you very much! :)</description> 
			<author>tomas@slax.org (Tomas M)</author> 
			<pubDate>Sat, 07 Dec 2013 15:32:08 -0600</pubDate> 
			<guid isPermaLink="true">http://www.slax.org/blog/22692-Bitcoins-for-life.html</guid> 
		</item>
		<item>
			<title>Slax based on Debian?</title> 
			<link>http://www.slax.org/blog/22649-Slax-based-on-Debian.html</link> 
			<description>No I'm just kidding, Slax will be based on Slackware forever :) However, I'm now just working on interesting project which aims to build a Live OS by using Debian and &lt;a href=&quot;http://www.linux-live.org/&quot;&gt;Linux Live Kit&lt;/a&gt; (the software which I wrote to produce Slax out of Slackware). This will help improve Linux Live Kit to be more compatible with debian-based distros, and the best part is that I'm going to be paid for that work :)

I tried to make new Slax version a week ago (using Slackware as a base, of course), but found (again) some problems which I wasn't happy to fix myself (those are mostly related to KDE task bar, which makes crazy things if pre-configured and started on different screen sizes).

I am more and more thinking about GETTING RID OF THE FUCKING KDE ENVIRONMENT since I don't like it any longer! (Sorry for the rude language, you know me, I say everything straight.) KDE is at the moment the best desktop I know about, but some other ones are (in my opinion) starting to be very close to KDE (like Gnome3 or Cinnamon) so switching to something else might be an option for the future. Or maybe wait for KDE5, who knows :)
</description> 
			<author>tomas@slax.org (Tomas M)</author> 
			<pubDate>Tue, 22 Oct 2013 07:47:25 -0500</pubDate> 
			<guid isPermaLink="true">http://www.slax.org/blog/22649-Slax-based-on-Debian.html</guid> 
		</item>
		<item>
			<title>Network broken on Slax beta, fixed in Slackware current</title> 
			<link>http://www.slax.org/blog/22594-Network-broken-on-Slax-beta-fixed-in-Slackware-current.html</link> 
			<description>Lots of people reported that network manager doesn't work on Slax 7.0.9 beta and thus makes them some problems connecting to internet. It has been also noticed that installing dhcp package fixed the issue.

I can see that the same problem has been addressed in Slackware current today. From Slackware's changelog:

&lt;code&gt;n/NetworkManager-0.9.8.2-x86_64-2.txz: Rebuilt.
Switched back to dhcpcd instead of dhclient as the default DHCP client in
the NetworkManager.conf file. Either one will work, but it's probably
better to use dhcpcd by default to avoid a nasty surprise for people who
didn't install the dhcp package since they aren't running a DHCP server.&lt;/code&gt;

I'm happy that the fix made its way into official Slackware, which means easier maintenance for me :)
</description> 
			<author>tomas@slax.org (Tomas M)</author> 
			<pubDate>Tue, 30 Jul 2013 22:30:18 -0500</pubDate> 
			<guid isPermaLink="true">http://www.slax.org/blog/22594-Network-broken-on-Slax-beta-fixed-in-Slackware-current.html</guid> 
		</item>
		<item>
			<title>Boot from USB on MAC</title> 
			<link>http://www.slax.org/blog/22573-Boot-from-USB-on-MAC.html</link> 
			<description>I tried to boot Slax on a MAC computer from USB stick long time ago and I wasn't successful, it seemed that MAC computers don't boot from USB at all. Few weeks ago the makeuseof website published an article about making a Linux distro bootable from USB on MAC. The article is here:

&lt;a href=&quot;http://www.makeuseof.com/tag/how-to-boot-a-linux-live-usb-stick-on-your-mac/&quot;&gt;http://www.makeuseof.com/tag/how-to-boot-a-linux-live-usb-stick-on-your-mac/&lt;/a&gt;

I'm not able to test this myself, since I don't have MAC (and definitely will not buy one in near future), so I would appreciate if there is anybody who has MAC computer and is willing to give it a go and try to boot Slax from USB on MAC, with or without the help of the utility mentioned in the article. I'd be mostly interested in how to make an USB drive with Slax which could be universal to boot on both MAC and regular PCs, that could be beneficial for all Slax users. I'll be happy for you suggestions! :) Thank you.</description> 
			<author>tomas@slax.org (Tomas M)</author> 
			<pubDate>Mon, 08 Jul 2013 06:53:52 -0500</pubDate> 
			<guid isPermaLink="true">http://www.slax.org/blog/22573-Boot-from-USB-on-MAC.html</guid> 
		</item>
		<item>
			<title>Slax 7.0.9 beta release</title> 
			<link>http://www.slax.org/blog/22545-Slax-7-0-9-beta-release.html</link> 
			<description>Hello everybody. After few months of silence, the Beta release of Slax 7.0.9 is now available for testing. It features Linux Kernel 3.9.7, KDE 4.10.4 and FireFox 22.0. It is a bit bigger than usual, since FireFox started to require icu4c for some strange reason, which is 7MB packed (!) ... I have to find out if this dependency can be dropped.

In the mean time, please feel free to test this beta release and let me know if you recognize anything unusual. Your feedback will help make Slax better. Thank you very much for using Slax! :)

Download Slax 7.0.9-beta:
&lt;a href=&quot;http://www.slax.org/download/7.0.9beta/slax-7.0.9-beta-i486.iso&quot;&gt;32bit ISO&lt;/a&gt;
&lt;a href=&quot;http://www.slax.org/download/7.0.9beta/slax-7.0.9-beta-i486.zip&quot;&gt;32bit ZIP&lt;/a&gt;
&lt;a href=&quot;http://www.slax.org/download/7.0.9beta/slax-7.0.9-beta-x86_64.iso&quot;&gt;64bit ISO&lt;/a&gt;
&lt;a href=&quot;http://www.slax.org/download/7.0.9beta/slax-7.0.9-beta-x86_64.zip&quot;&gt;64bit ZIP&lt;/a&gt;</description> 
			<author>tomas@slax.org (Tomas M)</author> 
			<pubDate>Tue, 02 Jul 2013 20:43:03 -0500</pubDate> 
			<guid isPermaLink="true">http://www.slax.org/blog/22545-Slax-7-0-9-beta-release.html</guid> 
		</item>
		<item>
			<title>Slackware is upgrading to 3.9.5</title> 
			<link>http://www.slax.org/blog/22524-Slackware-is-upgrading-to-3-9-5.html</link> 
			<description>Slackware has &lt;a href=&quot;http://www.slackware.com/changelog/current.php?cpu=x86_64&quot;&gt;recently upgraded&lt;/a&gt; to Linux kernel 3.9.5 and KDE 4.10.4 I'm currently busy by some other interesting work so just writing a short message here that you do not expect to get a new Slax release this week :) In all cases, I should have lots of time at the end of June, so all Slax components should be updated during that time. As usual, thank you for your patience :)
</description> 
			<author>tomas@slax.org (Tomas M)</author> 
			<pubDate>Tue, 11 Jun 2013 04:08:51 -0500</pubDate> 
			<guid isPermaLink="true">http://www.slax.org/blog/22524-Slackware-is-upgrading-to-3-9-5.html</guid> 
		</item>
		<item>
			<title>Build server was down for a while</title> 
			<link>http://www.slax.org/blog/22509-Build-server-was-down-for-a-while.html</link> 
			<description>I've moved the build server for Slax modules to a different hosting. Due to that, all updates to Slax modules were put on hold for some time. Now it is running again.

How does it work? In general, I needed entire Slax running on the server. Furthermore I needed 32bit and 64bit versions at the same time. Thus the ideal solution was to purchase just one machine, and run virtualbox in it, which holds both 32bit and 64bit Slax versions running together. All modules are built in both virtuals on a freshly rebooted Slax, and once each module is built, the OS reboots to ensure that the currently finished (compiled) module won't affect the next one.

So, there are few modules still in the queue. Will be built soon. If your module is yet still missing within a day, feel free to contact me. Thank you.</description> 
			<author>tomas@slax.org (Tomas M)</author> 
			<pubDate>Thu, 23 May 2013 08:23:33 -0500</pubDate> 
			<guid isPermaLink="true">http://www.slax.org/blog/22509-Build-server-was-down-for-a-while.html</guid> 
		</item>
		<item>
			<title>Slax update</title> 
			<link>http://www.slax.org/blog/22395-Slax-update.html</link> 
			<description>I tried to make another Slax update, following the progress of KDE, Xorg and other software, but I got some issues again with KDE's task bar not being drawn properly. I have to admit that this drives me crazy :) So I guess it will be better to wait for another KDE update.</description> 
			<author>tomas@slax.org (Tomas M)</author> 
			<pubDate>Sun, 05 May 2013 21:02:06 -0500</pubDate> 
			<guid isPermaLink="true">http://www.slax.org/blog/22395-Slax-update.html</guid> 
		</item>
		<item>
			<title>My AUFS donation - please donate too</title> 
			<link>http://www.slax.org/blog/22302-My-AUFS-donation-please-donate-too.html</link> 
			<description>There is one project which Slax depends on, it's AUFS. AUFS is created and maintained by Junjiro Okajima, a friend of mine from Japan. Thanks to Junjiro's AUFS, Slax can support read-only modules with read-write 'changes' in RAM or on USB drive. The entire Slax future depends on Mr. Okajima's survival. So from time to time I donate some spare money to AUFS to contribute something back.

Today I sent my next donation, and I would like to kindly ask you to do the same. Please donate some spare money to AUFS, be it $5 or $500, every amount counts.&lt;br&gt;&lt;br&gt;If you wish to make a donation, send money by PayPal to: &lt;font color=green&gt;&lt;u&gt;sfjro@users.sourceforge.net&lt;/u&gt;&lt;/font&gt;

Thank you!

&lt;font size=1 color=#ddd&gt;Edit: I've updated this blog post to provide working PayPal which can receive money.&lt;/font&gt;</description> 
			<author>tomas@slax.org (Tomas M)</author> 
			<pubDate>Thu, 04 Apr 2013 05:03:19 -0500</pubDate> 
			<guid isPermaLink="true">http://www.slax.org/blog/22302-My-AUFS-donation-please-donate-too.html</guid> 
		</item>	</channel>
</rss>

