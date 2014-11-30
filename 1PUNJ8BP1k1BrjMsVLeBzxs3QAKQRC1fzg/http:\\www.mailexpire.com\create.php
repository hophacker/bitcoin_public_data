http://www.mailexpire.com/create.php
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 22:33:38 GMT
Server: Apache/2.2.3 (CentOS)
X-Powered-By: PHP/5.1.6
Connection: close
Content-Type: text/html; charset=UTF-8

<html><!--1--><!-- #BeginTemplate "/Templates/std2col.dwt" -->
<head>
<LINK REL="SHORTCUT ICON" HREF="http://www.mailexpire.com/favicon.ico">
<title>create a new mailexpire alias - avoid spam...</title>
<meta name="keywords" content=" create a new mailexpire alias, spam, mailexpire news, temporary, email, aliases">
<meta name="description" content="create a new mailexpire alias - free temporary email aliases">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="javascript">

function validateInput(){
var message;
var errors = 0;
var mxpat = /^.+\@.*mailexpire\.(com|net)/i;

    if (!document.createalias.emailer.value){
        if (errors == 0){
            message = "Please enter your current email address.";
        }else{
            message = message + "\n" + "Please enter your current email address.";
        }
        errors = errors + 1;
    }    
    if (document.createalias.emailer.value.match(mxpat)){
        if (errors == 0){
            message = "Sorry, we can no longer accept a mailexpire alias as your current email address.";
        }else{
            message = message + "\n" + "Sorry, we can no longer accept a mailexpire alias as your current email address.";
        }
        errors = errors + 1;
    }
    if (!echeck(document.createalias.emailer.value)){
        if (errors == 0){
            message = "The email address you entered does not appear to be valid.";
        }else{
            message = message + "\n" + "The email address you entered does not appear to be valid.";
        }
        errors = errors + 1;
    }
    if (!document.createalias.reminder.value){
        if (errors == 0){
            message = "Please enter a reminder for this alias.";
        }else{
            message = message + "\n" + "Please enter a reminder for this alias.";
        }
        errors = errors + 1;
    }    
    if (!document.createalias.terms.checked){
        if (errors == 0){
            message = "Please indicate your acceptance of mailexpire's terms of use.";
        }else{
            message = message + "\n" + "Please indicate your acceptance of mailexpire's terms of use.";
        }
        errors = errors + 1;
    }    
    if (errors > 0){
        alert (message);
        return false;
    }else{
        return true;
    }
}
function echeck(str) {

    var at="@"
    var dot="."
    var lat=str.indexOf(at)
    var lstr=str.length
    var ldot=str.indexOf(dot)

    if (str.indexOf(at)==-1){
        return false
    }

    if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
        return false
    }

    if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
        return false
    }

    if (str.indexOf(at,(lat+1))!=-1){
        return false
    }

    if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
        return false
    }

    if (str.indexOf(dot,(lat+2))==-1){
        return false
    }
		
    if (str.indexOf(" ")!=-1){
        return false
    }

    return true					
}
</script>
<style type="text/css">
<!--
.pagefooter {  font-family: Arial, Helvetica, sans-serif; font-size: 8pt; font-weight: lighter; color: #666666; background-color: #FFFFFF; text-align: center}
.header {  font-family: Arial, Helvetica, sans-serif; font-size: 12pt; font-weight: bold; color: #FF6600; letter-spacing: 0pc; text-align: left; word-spacing: normal; font-style: normal}
.xamazonbar {  font-family: Arial, Helvetica, sans-serif; font-size: 9pt; font-weight: bold; color: #FFFFFF; background-color: #ffb27e; letter-spacing: 0pc; text-align: center; word-spacing: normal; font-style: normal; font-weight: bold}
.amazonbar {  font-family: Arial, Helvetica, sans-serif; font-size: 9pt; font-weight: bold; color: #FF6600; background-color: #ffffff; letter-spacing: 0pc; text-align: center; word-spacing: normal; font-style: normal; font-weight: bold}
.maintext {  font-family: Arial, Helvetica, sans-serif; font-size: 9pt; font-weight: normal; color: #626262}
.leftnavtext {  font-family: Arial, Helvetica, sans-serif; font-size: 9pt; font-weight: bold; color: #00FF00}
.newsstory {  font-family: Arial, Helvetica, sans-serif; font-size: 9pt; font-weight: normal; color: #626262; text-decoration:none}
-->
</style>
</head>

<body bgcolor='#FFFFFF' text='#6666666' link='#FF6633' marginwidth='0' marginheight='0'><table width="780" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td width="183"><img src="images/logo.gif" width="183" height="51"></td>
    <td colspan="2" align="center">
<!--
 <img src="images/bannerbar2.gif" width="597" height="51" usemap="#Map" border="0">-->
<script  src="http://tag.contextweb.com/TagPublish/getjs.aspx?action=VIEWAD&cwrun=200&cwadformat=728X90&cwpid=521274&cwwidth=728&cwheight=90&cwpnet=1&cwtagid=68801"></script>
    </td>
  </tr>
  <tr> 
    <td colspan="3"><img src="images/shw.gif" width="1" height="1"></td>
  </tr>
  <tr> 
    <td width="183" valign="top"> 
      <table width="183" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td valign="top"><img src="images/en-ie/navtop.gif" width="183" height="196" usemap="#navmap" border="0"></td>
        </tr>
        <tr> 
         <td>
            <table width="183" border="0" cellspacing="0" cellpadding="0">
<!--
                <tr> 
                  <td width="4" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="174" background="images/en-ie/tablebg2.gif">&nbsp;&nbsp;&nbsp; 
<input type="text" name="emailer" size="18" maxlength="100" value="">!                  </td>
                  <td width="5" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr> 
                  <td width="4" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="174" background="images/en-ie/tablebg2.gif"><img src="images/en-ie/prompt_reminder.gif" width="174" height="10" border="0" alt="Reminder"></td>
                  <td width="5" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr> 
                  <td width="4" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="174" background="images/en-ie/tablebg2.gif">&nbsp;&nbsp;&nbsp; 
                    <input type="text" name="reminder" size="18" maxlength="100">
                  </td>
                  <td width="5" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr> 
                  <td width="4" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="174" background="images/en-ie/tablebg2.gif"><img src="images/en-ie/prompt_lifespan.gif" width="174" height="10" border="0" alt="Lifespan"></td>
                  <td width="5" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr> 
                  <td width="4" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="174" background="images/en-ie/tablebg2.gif">&nbsp;&nbsp;&nbsp; 
                    <select name="lifespan">
                      <option value="0" selected>12 hours</option>
                      <option value="1">24 hours</option>
                      <option value="2">1 week</option>
                      <option value="3">2 weeks</option>
                      <option value="4">1 month</option>
                      <option value="5">3 months</option>
                    </select>
                  </td>
                  <td width="5" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr> 
                  <td width="4" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="174" background="images/en-ie/tablebg2.gif"><img src="images/en-ie/prompt_terms.gif" width="174" height="10" border="0" alt="I Accept the Terms of Use"></td>
                  <td width="5" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr> 
                  <td width="4" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="174" background="images/en-ie/tablebg2.gif">&nbsp;&nbsp;&nbsp; 
                    <input type="checkbox" name="terms" value="Y">
                  </td>
                  <td width="5" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr> 
                  <td width="4" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="174" background="images/en-ie/tablebg2.gif"><img src="images/en-ie/prompt_captcha.gif" width="174" height="10" border="0" ></td>
                  <td width="5" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                <tr> 
                  <td width="4" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="174" background="images/en-ie/tablebg2.gif">&nbsp;&nbsp;&nbsp; 
<script language="javascript" src="http://www.captcha.cc/cap.js?cap_k=mxOkdnjysfHtPAWWDCZKrMdKojCLnntt" type="text/javascript"></script>
<input type=hidden name=cap_h id=cap_h value="">
<img border=1 id=cap_i src="http://www.captcha.cc/img.cgi?cap_k=mxOkdnjysfHtPAWWDCZKrMdKojCLnntt" align=middle><img align=middle style="margin-left: 4px;" id=cap_r onload="return cap_showReload(event);" src="http://www.captcha.cc/blank.png"><br>
&nbsp;&nbsp;&nbsp;<input id=cap_t name=cap_t type=text value="" style="margin-top:4px;">
                  </td>
                  <td width="5" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
                  <td width="4" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="174" background="images/en-ie/tablebg2.gif" align="right"> 
                    <input type="image" border="0" name="imageField" src="images/en-ie/go.gif" width="85" height="15" align="right" alt="Go" onclick="return cap_valid(event);">
                  </td>
                  <td width="5" bgcolor="#FFFFFF">&nbsp;</td>
                </tr>
              </form>
-->
            </table>
          </td>
        </tr>
        <tr> 
          <td><img src="images/en-ie/navbottom.gif" width="183" height="22"></td>
        </tr>
        <tr> 
          <td><a href="/create.php"><img src="images/en-ie/create.gif" width="183" height="44" border="0"></a></td>
        </tr>
      </table>
    </td>
    <td colspan="2" valign="top"> 
<div align="center" class="amazonbar">
</div>


      <table width="100%" border="0" cellspacing="3" cellpadding="3">
        <tr>
          <td valign="top" width="50%"><!-- #BeginEditable "col%201" --> 
<p><span class="header"><b>create a new mailexpire alias</b></span><br><span class="maintext"><span class="maintext">Creating a new mailexpire alias is simple and straightforward.  Just fill in the information below, click on the button and you're almost there.</span></p><span class="maintext">
<form method='post' action='signup.php' name='createalias' onsubmit='return validateInput()' >
<table>
  <tr>
    <td class='maintext'>Current email address:
    </td>
    <td class='maintext'><input type='text' name='emailer' size='18' maxlength='100' value=''>
    </td>
  <tr>
    <td class='maintext'>Reminder:
    </td>
    <td class='maintext'><input type='text' name='reminder' size='18' maxlength='100' value=''>
    </td>
  <tr>
    <td class='maintext'>Lifespan:
    </td>
    <td class='maintext'>
                    <select name='lifespan' class='maintext' value=''>
                      <option value='0' selected>12 hours</option>
                      <option value='1'>24 hours</option>
                      <option value='2'>1 week</option>
                      <option value='3'>2 weeks</option>
                      <option value='4'>1 month</option>
                      <option value='5'>3 months</option>
                    </select>

    </td>
  <tr>
    <td class='maintext'>I accept the terms of use:
    </td>
    <td class='maintext'><input type='checkbox' name='terms' value='Y'>
    </td>
  <tr>
    <td colspan='2' class='maintext'><script type="text/javascript" src="http://api.recaptcha.net/challenge?k=6LdH4wcAAAAAAE-5lWcfWXqLXclqdRlqHnZ0RnTF"></script>

	<noscript>
  		<iframe src="http://api.recaptcha.net/noscript?k=6LdH4wcAAAAAAE-5lWcfWXqLXclqdRlqHnZ0RnTF" height="300" width="500" frameborder="0"></iframe><br/>
  		<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
  		<input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
	</noscript>
    </td>
  <tr>
    <td class='maintext'>
    </td>
    <td class='maintext'>
    </td>
  <tr>
    <td class='maintext'>
    </td>
    <td class='maintext'><input type='Submit' value='Create new alias'>
    </td>
  </tr>
</table>
</form>
</span></p><span class="maintext">
</span></p>            <!-- #EndEditable --></td>
          <td valign="top" width="50%"><!-- #BeginEditable "col%202" -->

<p><span class="header"><b>spare a dime?</b></span><br><span class="maintext"><span class="maintext">In an effort to keep up and running, I'm finally resorting to begging.  If you like mailexpire and want to keep the service alive, please consider a bitcoin donation to:<br><br><strong>1PUNJ8BP1k1BrjMsVLeBzxs3QAKQRC1fzg</strong><br><br>
 or a peercoin donation to: <br><br><strong>
PDoSKRMfQY8Aq1QppCj9nRK45ihRFVLrcV
</strong><br>
<img src='/images/WeLv_BC_128px.png' alt='We Love Bitcoins'>
<img width=126 height=98 src='/images/252px-PPCoin_Logo_With_Shadow.svg.png' alt='We Love Peercoin'></span></p>            <!-- #EndEditable --></td>
        </tr>
      </table>
      <center>
        <br>
<!--
        <span align="center"><a href="http://www.pluginspace.com" target="_blank"><img src="images/banners/pluginspace.gif" width="395" height="60" border="0" alt="Please support sponsors"></a><br>
        <span class="pagefooter">Please support our sponsors</span></span> 
-->
      </center>
    </td>
  </tr>
  <tr> 
    <td colspan="3"> <img src="/images/shw.gif" width="1" height="10" class="pagefooter"> 
      <p class="pagefooter">
        <a href="/">home</a> - <a href="news.php">news</a> - <a href="reviews.php">reviews</a> - <a href="testimonials.php">testimonials</a> - <a href="help.php">help</a> - <a href="faq.php">faq</a> - <a href="links.php">links</a> - <a href="privacy.php">privacy</a> - <a href="whatisspam.php">what is spam?</a> - <a href="avoidingspam.php">avoiding spam</a> - <a href="terms.php">terms</a><br>Mailexpire is a <a href="contactus.php">Combustion/Jack Healy</a> production (c) 1999 - 2013<br>
Bitcoin Donations: <strong>1PUNJ8BP1k1BrjMsVLeBzxs3QAKQRC1fzg</strong> or Peercoin Donations: <strong>PAPzskXVfCRg41ncZCVEaokoZRGGqTxkKs</strong> very welcome indeed!        <br>
      </p>
    </td>
  </tr>
</table>
<!-- <a href="http://www.mailexpire.com/mobilitylackadaisic.php">episcopal</a> -->
<map name="navmap">
  <area shape="rect" coords="12,173,170,188" href="terms.php" alt="terms"  title="terms">
  <area shape="rect" coords="12,157,170,172" href="avoidingspam.php" alt="avoiding spam" title="avoiding spam">
  <area shape="rect" coords="12,141,170,156" href="whatisspam.php" alt="what is spam?" title="what is spam?">
  <area shape="rect" coords="12,125,170,140" href="privacy.php" alt="privacy" title="privacy">
  <area shape="rect" coords="12,109,170,124" href="links.php" alt="links" title="links">
  <area shape="rect" coords="12, 93,170,108" href="faq.php" alt="faq" title="faq">
  <area shape="rect" coords="12, 77,170, 92" href="help.php" alt="help" title="help">
  <area shape="rect" coords="12, 61,170, 76" href="testimonials.php" alt="testimonials" title="testimonials" >
  <area shape="rect" coords="12, 45,170, 60" href="reviews.php" alt="reviews" title="reviews">
  <area shape="rect" coords="12, 29,170, 44" href="news.php" alt="news" title="news">
  <area shape="rect" coords="12, 13,170, 28" href="index.php" alt="home" title="home">
</map>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-3114112-1";
urchinTracker();
</script>
</body>
<map name="Map"><area shape="rect" coords="145,6,247,45" href="/sponsor.php?id=2" target="_blank"><area shape="rect" coords="364,6,466,45" href="/sponsor.php?id=3" target="_blank"><area shape="rect" coords="475,6,577,42" href="/sponsor.php?id=4"><area shape="rect" coords="253,6,355,42" href="/contactus.php" alt="Contact mailexpire" title="Contact mailexpire"></map> 
<!-- #EndTemplate yeah--></html>

