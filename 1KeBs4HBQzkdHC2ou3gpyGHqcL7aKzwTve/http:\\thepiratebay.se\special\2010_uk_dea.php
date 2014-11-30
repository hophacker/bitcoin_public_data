http://thepiratebay.se/special/2010_uk_dea.php
HTTP/1.1 200 OK
Server: nginx/1.6.0
Date: Wed, 23 Jul 2014 12:00:41 GMT
Content-Type: text/html; charset=UTF-8
Connection: close
X-Powered-By: PHP/5.4.30
Set-Cookie: PHPSESSID=9a9f71df3eaf4feea5dd955f0847d4e1; path=/; domain=.thepiratebay.se
Set-Cookie: tpb_showArtist=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT
Expires: Mon, 26 Jul 1997 05:00:00 GMT
Last-Modified: Wed, 23 Jul 2014 12:00:41 GMT
Cache-Control: no-store, no-cache, must-revalidate
Cache-Control: post-check=0, pre-check=0
Pragma: no-cache
Set-Cookie: language=en_EN; expires=Thu, 23-Jul-2015 12:00:41 GMT; path=/; domain=.thepiratebay.se
Content-Encoding: gzip
Vary: Accept-Encoding

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
 
	<title>The Pirate Bay - The galaxy's most resilient bittorrent site</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="google-site-verification" content="bERYeomIC5eBWlPLupPPYPYGA9GvAUKzFHh3WIw24Xs" />
	<link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="Search The Pirate Bay" />
	<link rel="stylesheet" type="text/css" href="/static/css-new/pirate6.css"/>
	<link rel="canonical" href="http://thepiratebay.se/special/2010_uk_dea.php" />
	<style type="text/css">
		.searchBox{
			margin: 6px;
			width: 300px;
			vertical-align: middle;
			padding: 2px;
		        background-image:url('/static/img/icon-https.gif');
        		background-repeat:no-repeat;
		        background-position: right;
		}

		.detLink {
			font-size: 1.2em;
			font-weight: 400;
		}
		.detDesc {
			color: #4e5456;
		}
		.detDesc a:hover {
			color: #000099;
			text-decoration: underline;
		}
		.sortby {
			text-align: left;
			float: left;
		}
		.detName {
			padding-top: 3px;
			padding-bottom: 2px;
		}
		.viewswitch {
			font-style: normal;
			float: right;
			text-align: right;
			font-weight: normal;
		}
	</style>
	<script src="/static/js/jquery.min.js" type="text/javascript"></script>
	<script src="/static/js/tpb.js" type="text/javascript"></script>
	<script language="javascript" type="text/javascript">if (top.location != self.location) {top.location.replace(self.location);}</script>
</head>

<body>
	<div id="header">


		<div class="ad">
		 <iframe src="//cdn2.adexprt.com/exo_na/top.html" width="468" height="60" frameborder="0" scrolling="no"></iframe>
		</div>
			<form method="get" id="q" action="/s/">
			<a href="/" class="img"><img src="/static/img/tpblogo_sm_ny.gif" id="TPBlogo" alt="The Pirate Bay" /></a>
			<b><a href="/" title="Search Torrents">Search Torrents</a></b>&nbsp;&nbsp;|&nbsp;
			<a href="/browse" title="Browse Torrents">Browse Torrents</a>&nbsp;&nbsp;|&nbsp;
			<a href="/recent" title="Recent Torrent">Recent Torrents</a>&nbsp;&nbsp;|&nbsp;
			<a href="/tv" title="TV shows">TV shows</a>&nbsp;&nbsp;|&nbsp;
			<a href="/music" title="Music">Music</a>&nbsp;&nbsp;|&nbsp;
			<a href="/top" title="Top 100">Top 100</a>
			<br /><input type="search" class="inputbox" title="Pirate Search" name="q" placeholder="Search here..." value="" /><input value="Pirate Search" type="submit" class="submitbutton" /><br />			<label for="audio" title="Audio"><input id="audio" name="audio" onclick="javascript:rmAll();" type="checkbox"/>Audio</label>
			<label for="video" title="Video"><input id="video" name="video" onclick="javascript:rmAll();" type="checkbox"/>Video</label>
			<label for="apps" title="Applications"><input id="apps" name="apps" onclick="javascript:rmAll();" type="checkbox"/>Applications</label>
			<label for="games" title="Games"><input id="games" name="games" onclick="javascript:rmAll();" type="checkbox"/>Games</label>
			<label for="porn" title="Porn"><input id="porn" name="porn" onclick="javascript:rmAll();" type="checkbox"/>Porn</label>
			<label for="other" title="Other"><input id="other" name="other" onclick="javascript:rmAll();" type="checkbox"/>Other</label>

			<select id="category" name="category" onchange="javascript:setAll();">
        	        	<option value="0">All</option>
				<optgroup label="Audio">
					<option value="101">Music</option>
					<option value="102">Audio books</option>
					<option value="103">Sound clips</option>
					<option value="104">FLAC</option>
					<option value="199">Other</option>
				</optgroup>
				<optgroup label="Video">
					<option value="201">Movies</option>
					<option value="202">Movies DVDR</option>
					<option value="203">Music videos</option>
					<option value="204">Movie clips</option>
					<option value="205">TV shows</option>
					<option value="206">Handheld</option>
					<option value="207">HD - Movies</option>
					<option value="208">HD - TV shows</option>
					<option value="209">3D</option>
					<option value="299">Other</option>
				</optgroup>
				<optgroup label="Applications">
					<option value="301">Windows</option>
					<option value="302">Mac</option>
					<option value="303">UNIX</option>
					<option value="304">Handheld</option>
					<option value="305">IOS (iPad/iPhone)</option>
					<option value="306">Android</option>
					<option value="399">Other OS</option>
				</optgroup>
				<optgroup label="Games">
					<option value="401">PC</option>
					<option value="402">Mac</option>
					<option value="403">PSx</option>
					<option value="404">XBOX360</option>
					<option value="405">Wii</option>
					<option value="406">Handheld</option>
					<option value="407">IOS (iPad/iPhone)</option>
					<option value="408">Android</option>
					<option value="499">Other</option>
				</optgroup>
				<optgroup label="Porn">
					<option value="501">Movies</option>
					<option value="502">Movies DVDR</option>
					<option value="503">Pictures</option>
					<option value="504">Games</option>
					<option value="505">HD - Movies</option>
					<option value="506">Movie clips</option>
					<option value="599">Other</option>
				</optgroup>
				<optgroup label="Other">
					<option value="601">E-books</option>
					<option value="602">Comics</option>
					<option value="603">Pictures</option>
					<option value="604">Covers</option>
					<option value="605">Physibles</option>
					<option value="699">Other</option>
				</optgroup>
			</select>

			<input type="hidden" name="page" value="0" />
			<input type="hidden" name="orderby" value="99" />
		</form>
	</div><!-- // div:header -->

	<h2><span>The Digital Economy Act 2010</span>&nbsp;</h2>
<style type="text/css">
#box_uk {
	width: 700px;
	text-align: left;
	margin-left: auto;
	margin-right: auto;
}

#textbox_uk {
	width: 700px;
}

#infobox_uk {
	margin-left: 10px;
	margin-bottom: 10px;
	margin-right: 10px;
	margin-top: 20px;
	padding: 10px;
	float: right;
	border: 1px solid #D2B9A6;
	background: #F6F1EE;
	width: 300px;
}
</style>

<div id="box_uk">
<br/>&nbsp;<br/>
<h1>The Digital Economy Act 2010</h1>
<h3>What is the Digital Economy Act?</h3>


<p>The Digital Economy Act is a newly passed piece of British legislation that is meant to protect copyright online and increase regulation and control of the way people use the Internet.</p>


<div id="infobox_uk">
	<h3>What can you do about this?</h3>
	<ul>
	<li>Ask your candidates whether they oppose the Act. If your MP didn't bother to vote, ask why. Given the important implications this legislation has, it's vital that politicians make their position on the issue clear. E-mail your candidates directly using this tool: <a target="_blank" href="http://bit.ly/emailyourcandidates">http://bit.ly/emailyourcandidates</a></li>
	<br/>
	<li>Inform your friends about the implications of the Act and the way it threats <a target="_blank" href="http://www.dontdisconnect.us/the-proposals/">civil liberties</a> and the future of Internet use.</li>
<br/>
	<li>Join the Open Rights Group's Action e-mail list. This will keep you informed on further developments and give practical advice on how you can protest against the Digital Economy Act: <a target="_blank" href="http://www.openrightsgroup.org/sign-up-against-disconnection">http://www.openrightsgroup.org/sign-up-against-disconnection</a></li>
	</ul>
</div>

<div id="textbox_uk"

<p><b>How did it happen?</b></p>

<ul>
<li>The entertainment industry is refusing to adapt to new models, clinging to obsolete 20th Century thinking.</li>
<li>The Bill was drafted by unelected officials after lobbying from the entertainment industry.
<li>It was passed in a hurry during the Parliamentary <a target="_blank" href="http://www.guardian.co.uk/commentisfree/2010/mar/28/pre-election-parliamentary-wash-up">"wash up" process</a> without full scrutiny.</li>
</ul>

<p><b>Why should you be worried?</b></p>

<ul>
<li>Websites will be blocked for alleged copyright infringement.</li>
<li>Families accused of sharing copyrighted files will be disconnected without trial. They will have to pay to appeal.</li>
<li>Even if you don't live in the UK, it sets a worrying precedent for other countries to follow suit.</li>
</ul>

<p>Disconnection or "technical measures" like bandwidth throttling will kick in if file sharing does not drop by an incredible 70%. There are no alternative punishments to disconnection, no matter what the damage it will cause, and there is no statutory limit on the length of these disconnections, called, in the weasel words of the Act, "temporary account suspension". </p>

<p>Despite thousands of letters of concern and a <a target="_blank" href="http://petitions.number10.gov.uk/dontdisconnectus/">petition</a> with over 35,000 signatures of protest, the Bill was rushed through in the final days of parliament during the "wash up process" - it was not given the <a target="_blank" href="http://www.guardian.co.uk/politics/2010/apr/09/digital-economy-bill-backlash">full scrutiny</a> that it deserved.</p>

<p>This is a piece of legislation that gives potentially unlimited power to <a target="_blank" href="http://www.timesonline.co.uk/tol/news/politics/article6493525.ece">unelected officials</a>, and assumes guilt on the part of those accused of copyright infringement. We can expect the industry lobbies to be out in force to roll back our human right to freedom of expression in  the name of copyright very, very soon.</p>

<p><b>What's happening now?</b></p>

<p>Now that the Bill has been passed and the election is underway, candidates from all the main parties are keen to distance themselves from it. They admit that there are serious concerns and that the Bill did not receive the scrutiny and debate it deserves.</p>

<br />

<p>
<b><a target="_blank" href="http://www.youtube.com/douglby">Dan Bull</a> / Songwriter</b><br>
</p>

<br />
<hr size="1" noshade>

<p>
	<h3>Dan Bull - Dear Mandy [an open letter to Lord Mandelson]</h3>

	<p><object width="640" height="385"><param name="movie" value="http://www.youtube.com/v/6_P4lJD_OPI&hl=en_GB&fs=1&"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/6_P4lJD_OPI&hl=en_GB&fs=1&" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="640" height="385"></embed></object></p>
</p>


<b>More information:</b>

<p>
<a target="_blank" href="http://en.wikipedia.org/wiki/Digital_Economy_Act_2010">Wikipedia: Digital Economy Act 2010</a>
<br />

<a target="_blank" href="http://technology.timesonline.co.uk/tol/news/tech_and_web/article7093203.ece">Times Online: The legislative farce of the Digital Economy Act</a>
<br />
<a target="_blank" href="http://www.broadband-expert.co.uk/blog/broadband-news/further-scrutiny-for-digital-economy-bill/777345">Broadband Expert: Further scrutiny for Digital Economy Bill</a>
</p>

<br />
<br />
</div>

</div>
</div><!-- //div:content -->

	<div id="foot" style="text-align:center;margin-top:1em;">

			 <iframe src="//cdn2.adexprt.com/exo_na/bottom.html" width="728" height="90" frameborder="0" scrolling="no"></iframe>
				<p>
			<a href="/login" title="Login">Login</a> | 
			<a href="/register" title="Register">Register</a> | 
			<a href="/language" title="Select language">Language / Select language</a> |
			<a href="/about" title="About">About</a> |
			<a href="/legal" title="Legal threats">Legal threats</a> |
			<a href="/blog" title="Blog">Blog</a>
			<br />
			<a href="/contact" title="Contact us">Contact us</a> |
			<a href="/policy" title="Usage policy">Usage policy</a> |
			<a href="/downloads" title="Downloads">Downloads</a> |
			<a href="http://www.promobay.org/" title="Promo" target="_NEW">Promo</a> |
			<a href="/doodles" title="Doodles">Doodles</a> |
			<a href="/tags" title="Tag Cloud">Tag Cloud</a> |
			<a href="http://suprbay.org/" title="Forum" target="_blank">Forum</a> |
			<a href="http://piratebrowser.com/" title="PirateBrowser" target="_blank"><strong>PirateBrowser</strong></a>
			<br />
			<a href="http://bayfiles.net" title="Bayfiles" target="_blank">Bayfiles</a> |
			<a href="http://bayimg.com" title="BayImg" target="_blank">BayImg</a> |
			<a href="http://pastebay.net" title="PasteBay" target="_blank">PasteBay</a> |
			<a href="http://torrindex.info" title="Proxy" target="_blank">Proxy</a> |
			<!-- <a href="https://twitter.com/tpbdotorg" title="Twitter" target="_blank">Follow TPB on Twitter</a> | -->
			<a href="https://www.facebook.com/ThePirateBayWarMachine" title="Facebook" target="_blank">Follow TPB on Facebook</a>
			<br />
		</p>

<p id="footer" style="color:#666; font-size:0.9em; ">
        6.662.041 registered users. Last updated 13:50:05.<br />
        48.946.402 peers (35.935.463 seeders + 13.010.939 leechers) in 5.901.388 torrents.<br />
</p>
<br /><a href="http://bitcoin.org" target="_NEW">BitCoin</a>: <b><a href="bitcoin:1KeBs4HBQzkdHC2ou3gpyGHqcL7aKzwTve">1KeBs4HBQzkdHC2ou3gpyGHqcL7aKzwTve</a></b><br /><a href="http://litecoin.org" target="_NEW">LiteCoin</a>: <a href="litecoin:LiYp3Dg11N5BgV8qKW42ubSZXFmjDByjoV">LiYp3Dg11N5BgV8qKW42ubSZXFmjDByjoV</a><br /><br />

		<div id="fbanners">
			<a href="/rss" class="rss" title="RSS"><img src="/static/img/rss_small.gif" alt="RSS" /></a>
		</div><!-- // div:fbanners -->
	</div><!-- // div:foot -->

