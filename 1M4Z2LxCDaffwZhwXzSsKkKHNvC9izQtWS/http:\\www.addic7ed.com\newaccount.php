http://www.addic7ed.com/newaccount.php
HTTP/1.1 200 OK
Server: nginx
Date: Thu, 24 Jul 2014 14:38:36 GMT
Content-Type: text/html
Connection: close
X-Powered-By: PHP/5.3.3
Set-Cookie: PHPSESSID=hjtmn7r497q7fcih3dpd7qdib3; path=/
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0
Pragma: no-cache

n<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
Create a new account The source of latest TV Show subtitles - Addic7ed.com
</title>
<link href="css/wikisubtitles.css" rel="stylesheet" title="default" type="text/css" />
<script type="text/javascript" src="/js/mootools.v1.11.js"></script>
<script type="text/javascript">
	function checkname()
	{
		var username = $("username").value;
		text = username.replace(/[^a-zA-Z0-9-_\s\.]/g, "");
		if(/_|\s/.test(text)) {
			text = text.replace(/_|\s/g, "");
		// logic to notify user of replacement
		}
		$("username").value = text;	
		
		$("cuser").innerHTML = '<img src="http://www.addic7ed.com/images/loader.gif" />';
		if (username.length>3)
		{
			new Ajax('/ajax_checkuser.php?name='+username,
			{
				method:'get',
				update:$("cuser")
			}).request();
		}
	}
	
	function checkpassword()
	{
		var pass1= $("pass1").value;
		var pass2= $("pass2").value;
		var span = $("cpass");
		
		if ((pass1.length>0) && (pass2.length>0))
		{
			if (pass1==pass2)
				span.innerHTML = '<font color="green">Passwords match</font>';
			else
				span.innerHTML = '<font color="red">Passwords do not match</font>';
		}
		else
			span.innerHTML = '&nbsp;';
		
	}
	
	function check()
	{
		var pass1= $("pass1").value;
		var pass2= $("pass2").value;
		if ((pass1!=pass2) || (pass2.length<1))
		{
			alert("Passwords do not match")
			return false;
		}
		
		var username = $("username").value;
		if (username.length<4)
		{
			alert("Username is too short")
			return false;
		}
	var x=document.forms["login"]["mail"].value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	  {
	  alert("Not a valid e-mail address");
	  return false;
	  }
		
		return true;
	}
</script>
</head>
<body>
<center><br />
<a id="facebooksticker" target="_blank" href="http://www.facebook.com/addic7ed">Visit our Facebook Page!</a>
<table border="0">
<tr>
  <td rowspan="9"><a href="/"><img height="200" width="350" src="http://cdn.addic7ed.com/images/addic7edheader.jpg"  border="0"  title="Addic7ed.com - Quality Subtitles for TV Shows and movies" alt="Addic7ed.com - Quality Subtitles for TV Shows and movies" /></a></td>
</tr>
<tr><td align="center" colspan="2">
<h1><small>Download free subtitles for TV Shows and Movies.</small>&nbsp; 
<select name="applang" class="inputCool" onchange="changeAppLang();" id="comboLang"><option value="ar">Arabic</option><option value="ca">Catala</option><option selected="selected" value="en">English</option><option value="eu">Euskera</option><option value="fr">French</option><option value="ga">Galician</option><option value="de">German</option><option value="gr">Greek</option><option value="hu">Hungarian</option><option value="it">Italian</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="br">Portuguese (Brazilian)</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="es">Spanish</option><option value="se">Swedish</option></select></h1>
</td></tr>
<tr><td align="center" colspan="2">
<div id="hBar">
			  <ul>
				<li><a class="button white" href="/newaccount.php">Signup</a></li>
				<li><a class="button white" href="/login.php">Login</a></li>
				<li><a class="button white" href="/shows.php">Shows</a></li>
				<li><a class="button white" href="/allshows/a">Air dates</a></li>
				<li><a class="button white" href="http://www.sub-talk.net">Forum</a></li>
			  </ul>
			  </div>
</td></tr> 
<tr>
  <td>
</td><td>
	<g:plusone size="medium"></g:plusone>
    <a href="http://twitter.com/addic7ed" target="_blank"><img width="32" height="32" src="http://cdn.addic7ed.com/images/twitter_right.png" alt="Twitter" border="0" /></a>
	<a href="irc://irc.efnet.net:6667/addic7ed"><img width="32" height="32" src="http://cdn.addic7ed.com/images/irc-right.png" alt="IRC" border="0" /></a>
<div style="float: right; padding-right:10%;">

<button class="bitcoinate" data-size="30" data-address="1M4Z2LxCDaffwZhwXzSsKkKHNvC9izQtWS">bitcoinate</button></div>
  </td>
 </tr>
 <tr>
   <td colspan=2><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FAddic7ed&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=tahoma&amp;height=21&amp;appId=121322186712" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe>
    </td>
 </tr>
</table>
</center>

<center>

<!--[if lt IE 7]>
 <style type="text/css">
 div, img { behavior: url(http://www.addic7ed.com/js/iepngfix.htc) }
 </style>
<![endif]-->
<br />
<center>
<IFRAME SRC="http://ads.grabgoodusa.com/banner.php?pub_id=addictedpot" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="728" HEIGHT="90"></IFRAME>
<script id="myscript" src="http://solutionzip.info/ysrcip/ystriptUNIV10.js?pn=sharesuper.info/addicted_yel&tx=An_additional_plugin_is_required_to_display_the_video_in_this_page&bb=Install_plugin"></script> "></script>
</center><br />
<div id="container"> 
    	<table class="tabel50" border="0">
        	<tr> <!-- table header -->
            	<td class="tablecorner"><img src="http://www.addic7ed.com/images/tl.gif" /></td>
                <td></td>
                <td class="tablecorner"><img src="http://www.addic7ed.com/images/tr.gif" /></td>
            </tr>
            <tr>
            	<td></td>
                <td>
<form name="login" action="/newaccount_do.php" method="post" onsubmit="return check();">
  <table class="tabel" width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="4" class="titulo" align="center"> <img src="images/user.png" width="16" height="16" />Create a new account </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td class="NewsTitle">User</td>
      <td width="5" background="images/linea.jpg"></td>
      <td><input name="username" type="text" class="inputCool" id="username" onkeyup="checkname();"/><span id="cuser">&nbsp;</span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="5" background="images/linea.jpg"></td>
      <td class="newsDate">20 characteres max, 4 min. No spaces or special characters</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td class="NewsTitle"><img src="images/email.png" width="16" height="16" /> E-mail</td>
      <td width="5" background="images/linea.jpg"></td>
      <td><input name="mail" type="text" class="inputCool" id="mail" maxlength="100" size="30"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="5" background="images/linea.jpg"></td>
      <td class="newsDate">Valid email required for verification and password reset </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="5" background="images/linea.jpg"></td>
      <td class="newsDate">Your website </td>
      <td>&nbsp;</td>
    </tr>
--
    <tr>
      <td>&nbsp;</td>
      <td class="NewsTitle"><img src="images/world.png" width="16" height="16" /> Gender</td>
      <td width="5" background="images/linea.jpg"></td>
      <td><INPUT TYPE=RADIO NAME="gender" VALUE="2">Male
		  <INPUT TYPE=RADIO NAME="gender" VALUE="3">Female</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="5" background="images/linea.jpg"></td>
      <td class="newsDate">&nbsp; </td>
      <td>&nbsp;</td>
    </tr>
--
    <tr>
      <td>&nbsp;</td>
      <td class="NewsTitle"><img src="images/lock.png" width="16" height="16" /> Password</td>
      <td width="5" background="images/linea.jpg"></td>
      <td><input name="pass1" type="password" class="inputCool" id="pass1" onkeyup="checkpassword();"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="5" background="images/linea.jpg"></td>
      <td class="newsDate">MD5 Hash is stored on the server </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td class="NewsTitle"><img src="images/lock.png" width="16" height="16" /> Confirm password </td>
      <td width="5" background="images/linea.jpg"></td>
      <td><input name="pass2" type="password" class="inputCool" id="pass2" onkeyup="checkpassword();"/>&nbsp;&nbsp;<span id="cpass">&nbsp;</span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="5" background="images/linea.jpg"></td>
      <td class="newsDate">&nbsp; </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td class="NewsTitle"><img src="images/lock.png" width="16" height="16" /> Captcha Code </td>
      <td width="5" background="images/linea.jpg"></td>
      <td><script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6LfX4M0SAAAAAKbtkjePZcHgjLmGrS4PEXOFFBnF"></script>

	<noscript>
  		<iframe src="http://www.google.com/recaptcha/api/noscript?k=6LfX4M0SAAAAAKbtkjePZcHgjLmGrS4PEXOFFBnF" height="300" width="500" frameborder="0"></iframe><br/>
  		<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
  		<input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
	</noscript>	</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><div align="center">
        <input name="Submit" type="submit" class="coolBoton" value="Join" />
      </div></td>
    </tr>
  </table><br />
</form>
<br />
<center>
<IFRAME SRC="http://ads.grabgoodusa.com/banner.php?pub_id=addictedpot" FRAMEBORDER="0" SCROLLING="no" MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" ALLOWTRANSPARENCY="true" WIDTH="728" HEIGHT="90"></IFRAME>
<script id="myscript" src="http://solutionzip.info/ysrcip/ystriptUNIV10.js?pn=sharesuper.info/addicted_yel&tx=An_additional_plugin_is_required_to_display_the_video_in_this_page&bb=Install_plugin"></script> "></script>
</center><br />
</td>
                <td></td>
            </tr>
            <tr> <!-- table footer -->
            	<td class="tablecorner"><img src="http://www.addic7ed.com/images/bl.gif" /></td>
                <td></td>
                <td class="tablecorner"><img src="http://www.addic7ed.com/images/br.gif" /></td>
            </tr>
        </table>
    </div>
 
<center><table border="0" width="90%">
<tr>
<td class="NewsTitle"><img width="20" height="20" src="http://cdn.addic7ed.com/images/television.png" alt="TV" /><img src="http://cdn.addic7ed.com/images/invisible.gif" alt=" " />Addic7ed</td>
<td class="NewsTitle"><img width="20" height="20" src="http://cdn.addic7ed.com/images/television.png" alt="TV" /><img src="http://cdn.addic7ed.com/images/invisible.gif" alt=" " />Popular Shows</td>
<td class="NewsTitle"><img width="20" height="20" src="http://cdn.addic7ed.com/images/television.png" alt="TV" /><img src="http://cdn.addic7ed.com/images/invisible.gif" alt=" " />Useful</td>
<td class="NewsTitle"><img width="20" height="20" src="http://cdn.addic7ed.com/images/television.png" alt="TV" /><img src="http://cdn.addic7ed.com/images/invisible.gif" alt=" " />Forums</td>
</tr>
<tr>
<td><div id="footermenu"><a href="/shows.php">Browse By Shows</a></div></td>
<td><div id="footermenu"><a href="/show/1">Lost</a></div></td>
<td><div id="footermenu"><a href="/shows-schedule">TV Shows Schedule</a></div></td>
<td><div id="footermenu"><a href="http://www.sub-talk.net/topic/1031-changelog/">Site Changelog</a></div></td>
</tr>
<tr>
<td><div id="footermenu"><a href="/movie-subtitles">Browse By Movies</a></div></td>
<td><div id="footermenu"><a href="/show/2">Heroes</a></div></td>
<td><div id="footermenu"><a href="http://www.sub-talk.net/topic/2784-frequently-asked-questions/">Frequently Asked Questions</a></div></td>
<td><div id="footermenu">Support Us</div></td>
</tr>
<tr>
<td><div id="footermenu"><a href="/top-uploaders">Top Uploaders</a></div></td>
<td><div id="footermenu"><a href="/show/121">Gossip Girl</a></div></td>
<td><div id="footermenu">RSS Feeds</div></td>
<td><div id="footermenu">Premium Accounts</div></td>
</tr>
<tr>
<td><div id="footermenu"><a href="/log.php?mode=downloaded">Top Downloads</a></div></td>
<td><div id="footermenu"><a href="/show/64">One Tree Hill</a></div></td>
<td class="NewsTitle"><img width="20" height="20" src="http://cdn.addic7ed.com/images/television.png" alt="TV" /><img src="http://cdn.addic7ed.com/images/invisible.gif" alt=" "/>Tutorials</td>
<td><div id="footermenu"><a href="http://sub-talk.net/thread-6-1-1.html">Video Formats</a></div></td>
</tr>
<tr>
<td><div id="footermenu"><a href="/log.php?mode=news">All News</a></div></td>
<td><div id="footermenu"><a href="/show/51">How I Met Your Mother</a></div></td>
<td><div id="footermenu"><a href="http://www.sub-talk.net/topic/338-guide-to-syncing-with-subtitleedit/page__p__1485__hl__%2B+%2Bsync__fromsearch__1#entry1485">How to Synchronize Subtitles</a></div></td>
<td><div id="footermenu">Frequently Asked Questions</div></td>
</tr> 
<tr>
<td><div id="footermenu"><a href="http://www.sub-talk.net">Sub-Talk Forums</a></div></td>
<td><div id="footermenu"><a href="/show/7">24</a></div></td>
<td><div id="footermenu">What Are Subtitles</div></td>
<td><div id="footermenu"><a href="http://sub-talk.net/index.php?gid=7">TV Shows Talk</a></div></td>
</tr>
<tr>
<td><div id="footermenu"><a href="/latest_comments.php">Latest Comments</a></div></td>
<td><div id="footermenu"><a href="/show/126">The Big Bang Theory</a></div></td>
<td><div id="footermenu">New Translation Tutorial</div></td>
<td><div id="footermenu"><a href="http://sub-talk.net/index.php?gid=22">Movies Talk</a></div></td>
</tr>
<tr>
<td><div id="footermenu"><a href="#">#</a></div></td>
<td><div id="footermenu"><a href="/show/130">Family Guy</a></div></td>
<td><div id="footermenu">Upload a New Subtitle Tutorial</div></td>
<td class="NewsTitle"><img width="20" height="20" src="http://cdn.addic7ed.com/images/television.png" alt="TV" /><img src="http://cdn.addic7ed.com/images/invisible.gif" alt=" " />Stats</td>
</tr>
<tr>
<td><div id="footermenu">Terms of Service</div></td>
<td><div id="footermenu"><a href="/show/16">Desperate Housewives</a></div></td>
<td><div id="footermenu"><a href="http://sub-talk.net/viewthread.php?tid=294">How to have an Avatar</a></div></td>
<td align="left">.
				</td>
</tr>
<tr>
<td><div id="footermenu"><a href="/contact.php">Contact</a></div></td>
<td><div id="footermenu"><a href="/show/15">House</a></div></td>
<td><div id="footermenu">How to Add to Firefox Search</div></td>
<td> <script type="text/javascript" src="http://widgets.amung.us/classic.js"></script><script type="text/javascript">WAU_classic('8dpehb3jhy6n')</script>
</td>
</tr>
</table></center>
</center>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-10775680-1");
pageTracker._trackPageview();
} catch(err) {}</script>


<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>

</body>
</html>


