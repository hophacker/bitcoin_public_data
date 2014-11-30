http://www.gpugrid.net/gpugrid_donations.php
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 09:49:46 GMT
Server: Apache/2.2.3 (CentOS)
X-Powered-By: PHP/5.3.3
Expires: Mon, 26 Jul 1997 05:00:00 UTC
Last-Modified: Wed, 23 Jul 2014 09:49:46 UTC
Cache-Control: no-cache, must-revalidate, post-check=0, pre-check=0
Pragma: no-cache
Connection: close
Content-Type: text/html; charset=utf-8

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head>
<title>GPUGRID</title>
<link rel=stylesheet type="text/css" href="http://www.gpugrid.net/main.gpugrid.css" media="all">
        <link rel=stylesheet type="text/css" href="http://www.gpugrid.net/white.gpugrid.css" media="all">
        <link rel=stylesheet type="text/css" href="http://www.gpugrid.net/gpugrid.css">
        <link rel=alternate type="application/rss+xml" title="GPUGRID RSS 2.0" href="http://www.gpugrid.net/rss_main.php">
        <link rel="shortcut icon" href="http://www.gpugrid.net//img/favicona9k.png" >
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1283856-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script></head><body>
<!-- SVN VERSIONS -->
<!-- $Id: translation.inc 21878 2010-07-06 23:31:26Z davea $ -->
<!-- $Id: pm.inc 14019 2007-11-01 23:04:39Z davea $ -->
<!-- $Id: news.inc 23119 2011-02-28 19:02:59Z davea $ -->
<!-- $Id: text_transform.inc 23029 2011-02-14 19:06:42Z davea $ -->
<!-- $Id: stats_sites.inc 22859 2011-01-02 03:07:14Z davea $ -->
<!-- $Id: team.inc 24050 2011-08-26 18:30:13Z davea $ -->
<!-- $Id: user.inc 24447 2011-10-21 06:58:35Z davea $ -->
<!-- $Id: profile.inc 24050 2011-08-26 18:30:13Z davea $ -->
<!-- $Id: util.inc 24406 2011-10-17 06:13:51Z davea $ -->
<div id='container'><div id='header'>
             <div id='logo' class='floatleft'><a href='.'><img src='/img/logos/gpugrid_logo.png' alt='logo' height='84' /></a></div>
             <div id='navbar' class='floatright'><ul class='menu right'><li><div id="google_translate_element"></div><script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li></ul><hr /><div id='langmenu'>
            <ul id='' class='menu smalltext '>
		<li ><a href='http://twitter.com/gpugrid'><img src='/img/icons/twitter.png' alt='Twitter' /></a></li>
		<li ><a href='http://www.facebook.com/gpugrid'><img src='/img/icons/facebook3.png' alt='Facebook' /></a></li>
		<li class='lightgray'>Follow us on:                
		<li class='lightgray dot'>|</li>
                <li><a class='lightgray' href='/server_status.php'>Server status</a></li>
                <li class='lightgray dot'>|</li>
		<li><a href=login_form.php>log in</a></li>    </ul>
         </div><div id='sitemenu' class='floatright'>
             <ul class='menu right'>
                 <li><a class='current' href='/gpugrid_donations.php'>Donate</a></li>
                 <li><a  href='/join.php'>Join us</a></li>
                 <li><a  href='/forum_index.php'>Forum</a></li>
                 <li><a  href='/volunteers.php'>Volunteers</a></li>
                 <li><a  href='/science.php'>Science</a></li>
                 <li><a href='/about.php'>About</a></li>
             </ul>
          </div></div><hr /></div><div id='main'><div id=main-content>
<script language="JavaScript">
    <!-- Begin JavaScript
    function percentbar(a,b){
      document.write("<div style='float: left;'><strong>Goal: EUR " + "50,000" + "</strong><br>");
      document.write("<div style='background: red; float: left; width: 755px;'>");
      document.write("<div style='background: green; color:white; text-align: center; float: left; width: " + Math.min(Math.round((a/b)*100),100) + "%; height: 1.3em;'>");
      document.write("<span>" + Math.round((a/b)*100) + "% </span>");
      document.write("</div></div><hr class=clear />");
      //document.write("Achieved: EUR " + a);
      document.write("</div>");}
    // End JavaScript -->
</script>
<script language="Javascript" src="http://campusglobal.upf.edu/Campus/Inscripcions/html/js/formularis.js" type="text/javascript">
</script>
<script language="JavaScript">
function processForm(formInscripcio) {
        if (formInscripcio.GROUP.value != ""){
	    formInscripcio.USERGPUGRID.value = "U:" + document.formInscripcio.USER2.value + "G:" + document.formInscripcio.GROUP.value;
	    formInscripcio.COMMENTS.value = "T:" + document.formInscripcio.TOPIC2.value + "C:" + document.formInscripcio.SENTENCE.value;
	}else{ 
            formInscripcio.USERGPUGRID.value = "U:" + document.formInscripcio.USER1.value;
	    formInscripcio.COMMENTS.value = "T:" + document.formInscripcio.TOPIC1.value + "C:" + document.formInscripcio.SENTENCE.value;
	}

	formInscripcio.submit();
}
function comprovar(formInscripcio) {
        var oInscripcio=document.getElementById("formInscripcio");
        var cas=0;
        var compra=false;
        if (formInscripcio.QUANTITAT.value > 0){
                compra=true;
        }
        if (!compra) {
                cas=4;
        }
        if (!esAdrecaCorreu(formInscripcio.EMAIL.value)) {
                cas=1;
        }
        if (formInscripcio.EMAIL.value!=formInscripcio.EMAILREP.value) {
                cas=2;
        }
        if (esSenseInfo(formInscripcio.LASTNAME.value)) {
                cas=3;
        }
        if (esSenseInfo(formInscripcio.FIRSTNAME.value)) {
                cas=3;
        }
	if (!formInscripcio.NOCERTIFICAT.checked) {
                cas=5;
        }
	if (!formInscripcio.PRIVACY.checked) {
                cas=6;
        }
	if (formInscripcio.USER1.value != "" && formInscripcio.USER2.value != ""){
                cas=7;
        }
        switch (cas){
                case 1 : alert ("Wrong e-mail address"); break;
                case 2 : alert ("E-mail addresses don't match"); break;
                case 3 : alert ("Missing obligatory fields"); break;
                case 4 : alert ("Please specify a donation amount above 0 Euro"); break;
                case 5 : alert ("We currently don't deliver tax certificates. If you want one, contact us before donating at ps3grid@gmail.com"); break;
                case 6 : alert ("Declaration of privacy policy agreement is required"); break;
                case 7 : alert ("You have to choose to donate either as individual or as group member, not both."); break;
                default : processForm(formInscripcio);
        }
}

maxL=150;
var bName = navigator.appName;
function taLimit(taObj) {
	if (taObj.value.length==maxL) return true;
	return true;
}

function taCount(taObj,Cnt) { 
	objCnt=createObject(Cnt);
	objVal=taObj.value;
	if (objVal.length>maxL) objVal=objVal.substring(0,maxL);
	if (objCnt) {
		if(bName == "Netscape"){	
			objCnt.textContent=maxL-objVal.length;}
		else{objCnt.innerText=maxL-objVal.length;}
	}
	return true;
}
function createObject(objId) {
	if (document.getElementById) return document.getElementById(objId);
	else if (document.layers) return eval("document." + objId);
	else if (document.all) return eval("document.all." + objId);
	else return eval("document." + objId);
}
</script>

<h2>Thank you for considering a donation to GPUGRID</h2>
<p>GPUGRID is a nonprofit educational and research project carried out by researchers of the Research Unit on Biomedical Informatics (GRIB), a joint research unit of IMIM-Hospital del Mar and Universitat Pompeu Fabra (UPF) located in the Barcelona Biomedical Research Park (Barcelona, Spain). Its main funding sources are public international (Europe) and national (Spain) projects for scientific research and development in the areas of Biomedicine and Biomedical Informatics.</p>
<ul>
	<li><a href="#hardware">Hardware donation</a></li>
	<li><a href="#monetary">Monetary donation</a></li>
	<li><a href="#amazon">Amazon Associates</a></li>
	<li><a href="http://donateathome.org">Bitcoin donations and Donate@home</a> (19b62wRL6hGEWa1bLbkdjaiWvZm1C56XuL)</li>
<!--	<li><a href="http://flattr.com/thing/180112/GPUGRID-Molecular-simulations-for-Biomedical-research" target="_blank"><img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a></li> -->
</ul>

<br />

<h3 id=hardware class="" style="font-weight:bold;">Hardware donation</h3>
<p>If you prefer to donate hardware, we need the following:</p>
<p><ol>
        <li><b>GPU Cards</b>: Nvidia GTX680. This is the main card we use in the lab on workstations.  </li>
        <!--<li><b>New Web server</b>: 64bit CPU Quad-core 16Gb RAM, preferably with Hot Swappable drives. <br />We need an upgrade of our project server. We have just a desktop PC used as a Web and BOINC server that runs out of disk space and has no disk redundancy.</li>--!>
        <li><b>Storage disks</b>: We have now 200 TB of storage but we are always short. 3 to 4 TB disks are welcome</li>

</ol>
<p>Contact us at ps3grid@gmail.com for hardware donation.<br />
<em>If you would like to donate hardware which doesn't meet these requirements, please feel free to contact us anyway.</em></p></p>

<br />

<h3 id=amazon class="" style="font-weight:bold;">Amazon Associates Program</h3>
<p>One way you can donate is by following <a target="_blank" href="http://www.amazon.com/?_encoding=UTF8&camp=1789&creative=390957&linkCode=ur2&tag=gn04a-20">this link to Amazon</a><img src="https://www.assoc-amazon.com/e/ir?t=gn04a-20&l=ur2&o=1" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" /> (or the one below) before making a purchase. GPUGRID will recieve a small percentage of the value of your purchase.</p>
<div align="center">
<iframe src="http://rcm.amazon.com/e/cm?t=gn04a-20&o=1&p=12&l=ur1&category=amazonhomepage&f=ifr" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
</div>

<br />

<h3 id=monetary class="" style="font-weight:bold;">Monetary Donation</h3>
<p>We do accept Debit/Credit Card, PayPal and Bank Transfers through the Universitat Pompeu Fabra public payments system. Please, fill in the following form regardless of the payment method.</p>
<!--<div id=pbar>
<script>percentbar(1700,50000);</script>
<br /><br />
</div>-->

<div id="card" class="donationbox">
<h4>Donation form</h4>
<h5>Steps:</h5>
<div><ol class=donationlist>
        <li>Fill the form with the required data and send it.</li>
        <li>You will be prompted with the choice of your prefered payment system:
            <ul><li>Credit card payment (Debit/Credit card accepted)</li>
                <li>Other payment methods (PayPal, Bank Transfer)</li>
            </ul>
        <li>Once payment authorization has been filled in, you will receive a confirmation e-mail.</li>
</ol>
</div>
<div id=paypal_logo>
<img  src="./img/pp_l.png" border="0" alt="PayPal logo" />
</div>

<hr class=clear />

<div>
<form action="http://campusglobal.upf.edu/Inscripcions/InAltaInscripcioServlet" id="formInscripcio" method="get" name="formInscripcio">
        <input class=hidden name="IDEVENT" type="hidden" value="38" />
        <input class=hidden name="LLOC" type="hidden" value="ADMFR" />
        <input class=hidden name="IDIOMA" type="hidden" value="en" />
        <h6>Donor information</h6>
        <div id=basicdata><label for="FIRSTNAME">Name*</label><input name="FIRSTNAME" size="24" type="text" /><label for="LASTNAME">Last name*</label><input name="LASTNAME" size="24" type="text" /><br />
        <label for="EMAIL">E-mail*</label><input name="EMAIL" size="24" type="text" /><label for="EMAILREP">Confirm e-mail*</label><input name="EMAILREP" size="24" type="text" /><br />
        <label for="QUANTITAT">Donation of*</label><input style='width:75;text-align:right'name="QUANTITAT" type="text" size="5" value="10" style="text-align:right" /><span id=euros>Euro | <a href="http://www.xe.com/ucc/">Currency converter</a></span><br />
<label></label><input class=checkbox name="PRIVACY" type="checkbox" /><span>I declare I have read and agree with the <a href="#policy">data privacy policy</a>.</span><br />
        <label></label><input class="checkbox hidden" name="NOCERTIFICAT" type="checkbox" checked />

        <input class=hidden name="PRODUCTE" type="hidden" value="51210" /><br />
</div>
        <input type="hidden" name="USER1" size="24" type="text" />
        <input type="hidden" name="TOPIC1" size="24" type="text" />
        <input type="hidden" name="USER2" size="24" type="text" />
        <input type="hidden" name="GROUP" value="" size="24" type="text" />
        <input type="hidden" name="TOPIC2" value="" size="24" type="text" />
        <h6>Leave a comment</h6>
        <div id=comm><div class=tagline >Comments may be published on the website.</div>
       <textarea onKeyPress="return taLimit(this)" onKeyUp="return taCount(this,'myCounter')" name="SENTENCE" rows="2" cols="40" tabindex="4"></textarea><br /></div>
        <hr class=clear />

        <input id=sub class=formbutton name="B1" onclick="comprovar(formInscripcio)" type="button" value="Send" />
        <input id=res class=formbutton name="B2" type="Reset" value="Reset" /><br />
        <input type="hidden" name="USERGPUGRID" size="24" type="text" />
        <input type="hidden" name="COMMENTS" size="24" type="text" />

        <ul class=donationlist>

        <li>*<em>Obligatory field</em></li>
        <li id=policy ><strong>Data privacy policy.</strong> With the object of the arranged point in Statutory law 15/1999, from December 13, Protection of Data of Character Personal (LOPD), Universitat Pompeu Fabra informs the donor, that the voluntary data facilitated to the university through the GPUGRID.net Project donation form, will be included in an automated file of created and maintained personal character data under responsibility of Academic Affairs and Research Area Office and will be dealt with the exclusive purpose of controlling the funding sources of the project and to send the corresponding payment confirmation to the donor. You will be able to at any time exercise your right of access, rectification, cancellation and opposition as stipulated by the LOPD, writing to the <a href="http://www.upf.edu/universitat/en/contacte/unitats/vgsi.html">Academic Affairs and Research Area</a>. Universitat Pompeu Fabra. Plaça de la Mercè, 10-12. 08002 Barcelona, Spain.</li>
        <li><strong>Donation certificates</strong>: Certificates are manually processed by the Academic Affairs and research Area Office staff at the University. Therefore, no tax certificate will be delivered by default. Certificates will only be processed for large donation amounts. If that is your case, please contact us first at ps3grid@gmail.com</li>
        </ul>
</form>
</div>
</div>

<br />
<p><b>Thank you very much!</b></p>
<p>The GPUGRID Team</p>

</div>
<!-- <scheduler>http://www.ps3grid.net/PS3GRID_cgi/cgi</scheduler>-->
<link rel="boinc_scheduler" href="http://www.ps3grid.net/PS3GRID_cgi/cgi">
</div>
<div id='ads-block'>
<div class=floatleft>
<a href='http://www.amazon.com/?_encoding=UTF8&camp=1789&creative=9325&linkCode=ur2&tag=gn04a-20'><div id='amzonad-1' class='amzonad boxshadow'></div></a>
</div>

<div class='floatright'>
<script type='text/javascript'><!--
google_ad_client = 'ca-pub-6631200441145382';
/* A1 */
google_ad_slot = '6978258657';
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type='text/javascript'
src='http://pagead2.googlesyndication.com/pagead/show_ads.js'>
</script>
</div>

<hr />
</div>
<div id='footer'><div>
	  <ul id='bottom-menu' class='menu left floatleft'>
	     <li class=''><a class='' href='/about.php'>About</a></li>
	     <li class=''><a class='' href='/science.php'>Science</a></li>
	     <li class=''><a class='' href='/volunteers.php'>Volunteers</a></li>
             <li class=''><a class='' href='/forum_index.php'>Forum</a></li>
	     <li class=''><a class='' href='/join.php'>Join us</a></li>
	     <li ><a class='mail' href='mailto:ps3grid@gmail.com'><strong>Contact</strong></a></li>
	 </ul><div id='social' class='floatright'>
           <ul class='menu right'>
               <li><g:plusone size='medium' href='http://www.gpugrid.net'></g:plusone><script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script></li>
               <li><a href='https://twitter.com/share' class='twitter-share-button' data-url='http://www.gpugrid.net' data-via='gpugrid'>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>
               <li><iframe src='http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fgpugrid.net&amp;send=false&amp;layout=button_count&amp;width=55&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21' scrolling='no' frameborder='0' style='border:none; overflow:hidden; height:21px; width:110px' allowTransparency='true'></iframe></li>
	   </ul>
	</div>	<hr />
	</div>
	<p class='copy smalltext lightgray text-left'>&copy; 2014 Universitat Pompeu Fabra</p>

	</div></body>
     </html></body>
        </html>
    
