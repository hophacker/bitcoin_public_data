http://chess.emrald.net/index.php
HTTP/1.1 200 OK
Date: Thu, 24 Jul 2014 13:21:44 GMT
Server: Apache/2.2.2 (Fedora)
X-Powered-By: PHP/5.1.6
Set-Cookie: PHPSESSID=milddoo58v9l0mpm3rjai14k70; path=/
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0
Pragma: no-cache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 5083
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<title>Chess Tactics Server</title>

<meta http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<meta http-equiv="imagetoolbar" content="no">
<meta name="description" content="Chess Tactics Server">
<meta name="keywords" content="chess, tactics, glicko, rating, server, problems, tacticians, time pressure">
<meta name="date" content="2014-07-24">


 
<link rel=stylesheet type="text/css" href="ts.css">
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<center>

<table width="800" cellpadding="0" cellspacing="0" border="0">

<tr>
<td class=logo width="150"><a href='/'>
<img src="pics/cts_1.jpg" alt="home" width="150" height="100" border="0"></a><br>
</td>

<td>

<table width=650 cellpadding="0" cellspacing="0" border="0">
<tr>
<td height=20 width=30 class=image></td>
<td height=20 width=310 class=titlebar align=left>


</td>

<td height=20 width=310 class=titlebar align=right><a class='naviactive' href='tProfile.php?TacID='></a></td>
</tr>
<tr>
<td height=80 valign=bottom class=header colspan=3>Chess Tactics Server</td>
</tr>
</table>

</td>
</tr>

<tr valign="top">
<td class='navigation'>
<table border="0" cellspacing=0 width="100%"><tr><td width=7><img alt="" src="pics/arrowg.gif" width=7></td><td class=menuitem0><a class=naviactive href="/index.php">Home</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem1><a class=navigation href="/Guide.php">Guide</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem2><a class=navigation href="/ratinginfo.php">Rating</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem2><a class=navigation href="/time.php">Time</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem1><a class=navigation href="/board.php">Message Board</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem1><a class=navigation href="/ctsCheating.php">Cheating</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem0><a class=navigation href="/ctsTactHome.php">Tacticians</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem1><a class=navigation href="/ctsAllTact.php">Index</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem1><a class=navigation href="/ctsActTact.php">Ranking</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem1><a class=navigation href="/ctsTacCountries.php">Countries</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem0><a class=navigation href="/ctsProbHome.php">Problems</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem1><a class=navigation href="/probindex.php">Index</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem1><a class=navigation href="/ctsProbComments.php">Comments</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem1><a class=navigation href="/pselection.php">Selection</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem1><a class=navigation href="/prankings.php">Technical Merit</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem1><a class=navigation href="/pstarrankings.php">Artistic Impression</a></td></tr><tr><td width=7><img alt="" src="pics/arrowt.gif" width=7></td><td class=menuitem1><a class=navigation href="/phof.php">Hall of Fame</a></td></tr></table>
<br>
<br>


<form method='POST' action='login.php'>
<table border="0" cellspacing='3' width="100%">
		<tr>
			<td class=image align=right>Handle</td>
			<td><input type='text' class='login' name='Username'></td>
		</tr>
		<tr>
	   <td class=image align=right>Password</td>
			<td><input type='password' class='login' name='Password'></td>
		</tr>
	<tr>
	   <td class=image align=right>&nbsp;</td>
			<td><input class=button type='submit' value='Sign in'></td>
		</tr>
</table><br>
<input type='hidden' name='loginUser' value='login'>
</form>


<center>
<a class=reg href='ForgotPW.php'>
Forgot password?
</a><br><br>
<a class=reg href='Register.php'>
Not a tactician?<br>Register here.
</a><br><br><br>



<form method='POST' action='login.php'>
<input class=guest type='submit' value='Sign in as guest'>
<input type='hidden' name='Username' value='guest'>
<input type='hidden' name='loginUser' value='login'>
</form>




</center>
</td>
<td class='content' valign="top">

<table><tr><td class=nix valign=top>
<p>
Currently we provide 36,869 tactical chess <a href='ctsProbHome.php'>problems</a> ranging in difficulty from trivial to ambitious. 
Your tactical performance will be measured by the <a href="ratinginfo.php">Glicko rating</a> system wich takes into account both the difficulty of each problem and the <a href="time.php">time</a> you take to solve it.  
</p>
<p>
You can sign in as guest completely anonymous to get familiar with the chess board interface, browse some problems or just look around. 
You just need a valid email address to register and join our community.
</p>
<p>
<a href='http://www.ajedrez-de-estilo.com.ar/ade/archives/cts_guia_esp.pdf
'><img border='0' src='pics/pdf16.gif' alt=''>&nbsp;Gu&#237;a de utilizaci&#243;n en Espa&#241;ol</a> by GM ICCF Roberto Alvarez
</p>
<p>
This is a non-commercial service created and supported by <a href='team.php'>chess
enthusiasts</a> from <a target="_blank" href="http://www.sghermsdorf.de">our chess club</a> in Berlin, Germany.
It is still under construction.
Everyone is invited to participate in its development.
Please don't use your skills to attack this server, but to detect and remove possible exploits.
</p>
<p>
Enjoy!
</p>

<center><table  width='100%' border=0 class=bor><tr><td class=normal colspan=5 align=center>Top 10 active tacticians</td></tr><tr><td class='colhead' align=center></td><td class='colhead' align=center>Handle</td><td class='colhead' align=center>Tries</td><td class='colhead' align=center>Country</td><td class='colhead' align=center>Rating</td></tr>
<tr><td align=center class='normal'><img src='pics/ctsgold.gif' alt='Gold Medal'></td><td class='normal' align=center><a href='tProfile.php?TacID=60062'>hmmm</a></td><td class='normal' align=right>5724</td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=NO'><img border='0' width='21' height='15' src='flags/NO.gif' alt='Norway'></a></td>
<td align=center class='normal'>2348</td></tr>
<tr><td align=center class='normal'><img src='pics/ctssilver.gif' alt='Silver Medal'></td><td class='normal' align=center><a href='tProfile.php?TacID=15478'>hustak</a></td><td class='normal' align=right>20354</td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=NO'><img border='0' width='21' height='15' src='flags/NO.gif' alt='Norway'></a></td>
<td align=center class='normal'>2342</td></tr>
<tr><td align=center class='normal'><img src='pics/ctsbronze.gif' alt='Bronze Medal'></td><td class='normal' align=center><a href='tProfile.php?TacID=39280'>Akira</a></td><td class='normal' align=right>896</td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=NO'><img border='0' width='21' height='15' src='flags/NO.gif' alt='Norway'></a></td>
<td align=center class='normal'>2265</td></tr>
<tr><td align=center class='normal'>4</td><td class='normal' align=center><a href='tProfile.php?TacID=23985'>fastkicker</a></td><td class='normal' align=right>10068</td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=FR'><img border='0' width='21' height='15' src='flags/FR.gif' alt='France'></a></td>
<td align=center class='normal'>2238</td></tr>
<tr><td align=center class='normal'>5</td><td class='normal' align=center><a href='tProfile.php?TacID=62590'>Erlendm</a></td><td class='normal' align=right>24949</td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=NO'><img border='0' width='21' height='15' src='flags/NO.gif' alt='Norway'></a></td>
<td align=center class='normal'>2210</td></tr>
<tr><td align=center class='normal'>6</td><td class='normal' align=center><a href='tProfile.php?TacID=32029'>Sergiochess</a></td><td class='normal' align=right>65791</td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=RU'><img border='0' width='21' height='15' src='flags/RU.gif' alt='Russian Federation'></a></td>
<td align=center class='normal'>2164</td></tr>
<tr><td align=center class='normal'>7</td><td class='normal' align=center><a href='tProfile.php?TacID=17605'>morpy</a></td><td class='normal' align=right>104630</td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=ES'><img border='0' width='21' height='15' src='flags/ES.gif' alt='Spain'></a></td>
<td align=center class='normal'>2136</td></tr>
<tr><td align=center class='normal'>8</td><td class='normal' align=center><a href='tProfile.php?TacID=22263'>byakuugan</a></td><td class='normal' align=right>130349</td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=US'><img border='0' width='21' height='15' src='flags/US.gif' alt='United States'></a></td>
<td align=center class='normal'>2117</td></tr>
<tr><td align=center class='normal'>9</td><td class='normal' align=center><a href='tProfile.php?TacID=71344'>aryantari</a></td><td class='normal' align=right>3123</td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=NO'><img border='0' width='21' height='15' src='flags/NO.gif' alt='Norway'></a></td>
<td align=center class='normal'>2083</td></tr>
<tr><td align=center class='normal'>10</td><td class='normal' align=center><a href='tProfile.php?TacID=36402'>Yaranaika</a></td><td class='normal' align=right>74113</td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=JP'><img border='0' width='21' height='15' src='flags/JP.gif' alt='Japan'></a></td>
<td align=center class='normal'>2058</td></tr>
</table><br></center><img src='Activity.png' alt='activity'>



<center><table  width='100%' border=0 class=bor><tr><td class=normal colspan=6 align=center>23 actions this minute</td></tr><tr><td class='colhead' align=center>Tactician</td><td class='colhead' align=center>Country</td><td class='colhead' align=center>Rating</td><td class='colhead' align=center>Problem</td><td class='colhead' align=center>Rating</td><td class='colhead' align=center>Time [s]</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=47685'>gabici</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=RO'><img border='0' width='21' height='15' src='flags/RO.gif' alt='Romania'></a></td>
<td align=center class='normal'>1544</td><td class='normal' align=center><a href='probprofile.php?Pos=44906'>p50787</a></td>
<td align=center class='normal'>1610</td><td align=right class='normal'>57.0</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=67481'>yunogasai</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=AU'><img border='0' width='21' height='15' src='flags/AU.gif' alt='Australia'></a></td>
<td align=center class='normal'>1764</td><td class='normal' align=center><a href='probprofile.php?Pos=32523'>p54509</a></td>
<td align=center class='normal'>1953</td><td align=right class='normal'><img src='pics/cross.png' alt=''></td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=73110'>BounceBounce</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=UN'><img border='0' width='21' height='15' src='flags/UN.gif' alt='United Nations'></a></td>
<td align=center class='normal'>1440</td><td class='normal' align=center><a href='probprofile.php?Pos=8635'>p07436</a></td>
<td align=center class='normal'>1242</td><td align=right class='normal'>5.3</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=41042'>Harukaze</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=JP'><img border='0' width='21' height='15' src='flags/JP.gif' alt='Japan'></a></td>
<td align=center class='normal'>1517</td><td class='normal' align=center><a href='probprofile.php?Pos=28238'>p49339</a></td>
<td align=center class='normal'>1462</td><td align=right class='normal'>10.2</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=60469'>Mopsik</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=PL'><img border='0' width='21' height='15' src='flags/PL.gif' alt='Poland'></a></td>
<td align=center class='normal'>1398</td><td class='normal' align=center><a href='probprofile.php?Pos=27777'>p63592</a></td>
<td align=center class='normal'>1435</td><td align=right class='normal'>16.3</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=57847'>olda1</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=CZ'><img border='0' width='21' height='15' src='flags/CZ.gif' alt='Czech Republic'></a></td>
<td align=center class='normal'>1631</td><td class='normal' align=center><a href='probprofile.php?Pos=30345'>p44900</a></td>
<td align=center class='normal'>1558</td><td align=right class='normal'>5.3</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=67481'>yunogasai</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=AU'><img border='0' width='21' height='15' src='flags/AU.gif' alt='Australia'></a></td>
<td align=center class='normal'>1764</td><td class='normal' align=center><a href='probprofile.php?Pos=9865'>p17008</a></td>
<td align=center class='normal'>1654</td><td align=right class='normal'>3.3</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=73110'>BounceBounce</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=UN'><img border='0' width='21' height='15' src='flags/UN.gif' alt='United Nations'></a></td>
<td align=center class='normal'>1444</td><td class='normal' align=center><a href='probprofile.php?Pos=21136'>p46014</a></td>
<td align=center class='normal'>1469</td><td align=right class='normal'><img src='pics/cross.png' alt=''></td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=66566'>markusnel</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=ZA'><img border='0' width='21' height='15' src='flags/ZA.gif' alt='South Africa'></a></td>
<td align=center class='normal'>1337</td><td class='normal' align=center><a href='probprofile.php?Pos=5348'>p34595</a></td>
<td align=center class='normal'>1563</td><td align=right class='normal'><img src='pics/cross.png' alt=''></td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=21508'>Hannibal</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=DE'><img border='0' width='21' height='15' src='flags/DE.gif' alt='Germany'></a></td>
<td align=center class='normal'>1323</td><td class='normal' align=center><a href='probprofile.php?Pos=11933'>p59667</a></td>
<td align=center class='normal'>1270</td><td align=right class='normal'><img src='pics/cross.png' alt=''></td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=64445'>jesusblanco22</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=VE'><img border='0' width='21' height='15' src='flags/VE.gif' alt='Venezuela'></a></td>
<td align=center class='normal'>1479</td><td class='normal' align=center><a href='probprofile.php?Pos=35047'>p06425</a></td>
<td align=center class='normal'>1571</td><td align=right class='normal'>10.3</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=41042'>Harukaze</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=JP'><img border='0' width='21' height='15' src='flags/JP.gif' alt='Japan'></a></td>
<td align=center class='normal'>1519</td><td class='normal' align=center><a href='probprofile.php?Pos=465'>p20355</a></td>
<td align=center class='normal'>1446</td><td align=right class='normal'>14.4</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=57847'>olda1</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=CZ'><img border='0' width='21' height='15' src='flags/CZ.gif' alt='Czech Republic'></a></td>
<td align=center class='normal'>1626</td><td class='normal' align=center><a href='probprofile.php?Pos=8796'>p23820</a></td>
<td align=center class='normal'>1676</td><td align=right class='normal'>3.9</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=67481'>yunogasai</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=AU'><img border='0' width='21' height='15' src='flags/AU.gif' alt='Australia'></a></td>
<td align=center class='normal'>1762</td><td class='normal' align=center><a href='probprofile.php?Pos=32366'>p16006</a></td>
<td align=center class='normal'>1902</td><td align=right class='normal'>3.8</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=60469'>Mopsik</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=PL'><img border='0' width='21' height='15' src='flags/PL.gif' alt='Poland'></a></td>
<td align=center class='normal'>1399</td><td class='normal' align=center><a href='probprofile.php?Pos=38738'>p05862</a></td>
<td align=center class='normal'>1375</td><td align=right class='normal'>13.9</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=73110'>BounceBounce</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=UN'><img border='0' width='21' height='15' src='flags/UN.gif' alt='United Nations'></a></td>
<td align=center class='normal'>1440</td><td class='normal' align=center><a href='probprofile.php?Pos=2267'>p18805</a></td>
<td align=center class='normal'>1401</td><td align=right class='normal'>2.7</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=67481'>yunogasai</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=AU'><img border='0' width='21' height='15' src='flags/AU.gif' alt='Australia'></a></td>
<td align=center class='normal'>1760</td><td class='normal' align=center><a href='probprofile.php?Pos=31279'>p52091</a></td>
<td align=center class='normal'>1877</td><td align=right class='normal'>0.6</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=64445'>jesusblanco22</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=VE'><img border='0' width='21' height='15' src='flags/VE.gif' alt='Venezuela'></a></td>
<td align=center class='normal'>1478</td><td class='normal' align=center><a href='probprofile.php?Pos=2040'>p57542</a></td>
<td align=center class='normal'>1492</td><td align=right class='normal'>3.2</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=57847'>olda1</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=CZ'><img border='0' width='21' height='15' src='flags/CZ.gif' alt='Czech Republic'></a></td>
<td align=center class='normal'>1627</td><td class='normal' align=center><a href='probprofile.php?Pos=11290'>p04038</a></td>
<td align=center class='normal'>1483</td><td align=right class='normal'>9.5</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=41042'>Harukaze</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=JP'><img border='0' width='21' height='15' src='flags/JP.gif' alt='Japan'></a></td>
<td align=center class='normal'>1516</td><td class='normal' align=center><a href='probprofile.php?Pos=1609'>p11560</a></td>
<td align=center class='normal'>1569</td><td align=right class='normal'>4.5</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=73110'>BounceBounce</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=UN'><img border='0' width='21' height='15' src='flags/UN.gif' alt='United Nations'></a></td>
<td align=center class='normal'>1439</td><td class='normal' align=center><a href='probprofile.php?Pos=45175'>p12531</a></td>
<td align=center class='normal'>1301</td><td align=right class='normal'>4.7</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=60469'>Mopsik</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=PL'><img border='0' width='21' height='15' src='flags/PL.gif' alt='Poland'></a></td>
<td align=center class='normal'>1399</td><td class='normal' align=center><a href='probprofile.php?Pos=1823'>p29366</a></td>
<td align=center class='normal'>1371</td><td align=right class='normal'>10.8</td></tr>
<tr><td class='normal' align=center><a class='normal' href='tProfile.php?TacID=66566'>markusnel</a></td>
<td class='normal' align=center><a href='ctsTacCountries.php?ISO=ZA'><img border='0' width='21' height='15' src='flags/ZA.gif' alt='South Africa'></a></td>
<td align=center class='normal'>1341</td><td class='normal' align=center><a href='probprofile.php?Pos=10867'>p03734</a></td>
<td align=center class='normal'>1527</td><td align=right class='normal'><img src='pics/cross.png' alt=''></td></tr>
</table><br></center>







</td><td class=nix width=30>&nbsp;</td>

<td valign=top>

<table width=150 cellspacing=0 cellpadding=0>



<tr><td class=nix valign=top>


<div class="fb-like" data-href="http://chess.emrald.net" data-send="false" data-width="150" data-show-faces="false" data-layout="button_count" data-font="verdana"></div>

<div style="height:10px;"></div>

<!-- F�gen Sie dieses Tag an der Stelle ein, an der die +1-Schaltfl�che erscheinen soll. -->
<div  class="g-plusone" data-size="medium" data-href="http://chess.emrald.net"></div>

<div style="height:10px;"></div>


<!-- F�gen Sie dieses Tag nach dem letzten +1-Schaltfl�che-Tag ein. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>


    <a href="https://twitter.com/share" class="twitter-share-button" data-via="twitterapi" data-lang="en">Tweet</a>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


<div style="height:10px;"></div>
<!--<div><a href='donate.php'><img src='pics/bitcoin.png'>&nbsp;donate</a></div>-->
<script src="http://coinwidget.com/widget/coin.js"></script>
<script>
CoinWidgetCom.go({
	wallet_address: "173qoBq2fjtpu7tgoL3qhXS8n4MVKdZ13V"
	, currency: "bitcoin"
	, counter: "hide"
	, alignment: "bl"
	, qrcode: true
	, auto_show: false
	, lbl_button: "Donate"
	, lbl_address: "My Bitcoin Address:"
	, lbl_count: "donations"
	, lbl_amount: "BTC"
});
</script>

<div style="height:20px;"></div>
<table width='100%' class=bor>
<tr><td class=normal align=center colspan=2>Welcome !</td></tr>
<tr><td class=colhead align=center colspan=2>Latest 24h newbies</td></tr>
<tr><td class=normal align=center><a class=normal href='tProfile.php?TacID=73110'>BounceBounce</a></td><td class='normal' align=center><a href='ctsTacCountries.php?ISO=UN'><img border='0' width='21' height='15' src='flags/UN.gif' alt='United Nations'></a></td></tr>
<tr><td class=normal align=center><a class=idle href='tProfile.php?TacID=73109'>rickyrecard</a></td><td class='normal' align=center><a href='ctsTacCountries.php?ISO=UN'><img border='0' width='21' height='15' src='flags/UN.gif' alt='United Nations'></a></td></tr>
<tr><td class=normal align=center><a class=idle href='tProfile.php?TacID=73108'>Mooshupork</a></td><td class='normal' align=center><a href='ctsTacCountries.php?ISO=UN'><img border='0' width='21' height='15' src='flags/UN.gif' alt='United Nations'></a></td></tr>
<tr><td class=normal align=center><a class=idle href='tProfile.php?TacID=73107'>fernandopr89</a></td><td class='normal' align=center><a href='ctsTacCountries.php?ISO=BR'><img border='0' width='21' height='15' src='flags/BR.gif' alt='Brazil'></a></td></tr>
<tr><td class=normal align=center><a class=idle href='tProfile.php?TacID=73106'>shinwoo</a></td><td class='normal' align=center><a href='ctsTacCountries.php?ISO=UN'><img border='0' width='21' height='15' src='flags/UN.gif' alt='United Nations'></a></td></tr>
<tr><td class=normal align=center><a class=normal href='tProfile.php?TacID=73105'>Chizpa3o5</a></td><td class='normal' align=center><a href='ctsTacCountries.php?ISO=CU'><img border='0' width='21' height='15' src='flags/CU.gif' alt='Cuba'></a></td></tr>
<tr><td class=normal align=center><a class=idle href='tProfile.php?TacID=73104'>gertjan1996</a></td><td class='normal' align=center><a href='ctsTacCountries.php?ISO=UN'><img border='0' width='21' height='15' src='flags/UN.gif' alt='United Nations'></a></td></tr>
<tr><td class=normal align=center><a class=idle href='tProfile.php?TacID=73103'>tarmizi</a></td><td class='normal' align=center><a href='ctsTacCountries.php?ISO=ID'><img border='0' width='21' height='15' src='flags/ID.gif' alt='Indonesia'></a></td></tr>
<tr><td class=normal align=center><a class=idle href='tProfile.php?TacID=73102'>france412</a></td><td class='normal' align=center><a href='ctsTacCountries.php?ISO=US'><img border='0' width='21' height='15' src='flags/US.gif' alt='United States'></a></td></tr>
<tr><td class=normal align=center><a class=normal href='tProfile.php?TacID=73101'>kral</a></td><td class='normal' align=center><a href='ctsTacCountries.php?ISO=UN'><img border='0' width='21' height='15' src='flags/UN.gif' alt='United Nations'></a></td></tr>
<tr><td class=normal align=center><a class=idle href='tProfile.php?TacID=73100'>alex1390</a></td><td class='normal' align=center><a href='ctsTacCountries.php?ISO=UN'><img border='0' width='21' height='15' src='flags/UN.gif' alt='United Nations'></a></td></tr>
</table>
</td>
</tr>


<tr><td>&nbsp;</td></tr>


<tr>
<td>

<table width='100%' class=bor>

<!--
<tr><td class=normal align=center>
Congratulations!
</td>
</tr>
<tr><td class=colhead align=center>
4th International Berlin Bughouse
</td>
</tr>
<tr><td class=normal align=center>
<a target='_blank' href="http://bughouse.emrald.net"><img border=0 width='78' height='64' src="pics/bgt05.gif" alt="Bughouse 2005"></a>
</td>
</tr>
<tr><td class=normal align=center>
Champions 2005<br><b>Venomous & Wortel</b>
</td>
</tr>
-->
<tr><td>&nbsp;</td></tr>

<tr><td class=nix>

<table width='100%' class=bor>



<tr><td class=normal align=center>2014-07-24 15:20 CEST (GMT +0200)</td></tr>
<tr><td class=colhead align=center>Stats</td></tr>
<tr><td class=normal align=center>Chess Tactics Server has served<br>96,518,095 <a href='ctsProbHome.php'>problems</a> to<br> 73,056 registered <a href='ctsTactHome.php'>tacticians</a> from 143 countries.
</td></tr>
</table>

</td>
</tr>

</table>
</td>
</tr>


</table>
</tr></table>


</td>
</tr>

<tr>
<td
 class='image' align='center'>
 
 <!--<a target="_blank" href="http://validator.w3.org/check?uri=referer"><img border="0"
          src="pics/valid-html40.png"
          alt="Valid HTML 4.0!"></a>
-->



</td>



<td class='footer' align=center>


<table width='100%'>
<tr>
<td class='footer'><a class=footer href='disclaim.php'>Disclaimer</a></td>
<td class='footer'>hosted by <a class=footer target="_blank" href="http://www.emrald.com">emrald</a> </td>
<td class='footer' align='right'><a class=footer href='team.php'>Team</a></td>
</tr>
</table>




</td>

</tr>




</table>

</center>


</body>
</html>

