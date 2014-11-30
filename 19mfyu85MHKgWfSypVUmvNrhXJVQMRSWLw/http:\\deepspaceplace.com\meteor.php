http://deepspaceplace.com/meteor.php
HTTP/1.1 200 OK
Date: Tue, 22 Jul 2014 11:20:42 GMT
Server: Apache
X-Powered-By: PHP/5.3.28
Connection: close
Content-Type: text/html

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Copyright 2013 DeepSpacePlace.com. All rights reserved. -->
	<link href="css/bootstrap.css" rel="stylesheet" media="screen" />
	<link href="css/dsp.css" rel="stylesheet" media="screen" />
	<title>Deep Space Place</title>
	<script  type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> 
	<script  type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Start Google Analytics. -->
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-18121210-1']);
	_gaq.push(['_trackPageview']);
	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
	<!-- End Google Analytics. -->
</head>
<body >
<div class="container">
	    <div class="navbar"> 
        <div class="navbar-inner">
            <a class="brand" href="."><i class="icon-home"></i> deepspaceplace.com</a>
            <ul class="nav">
                <li class="dropdown">
					<a href="" id="gallery" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-camera"></i> Gallery<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="images.php"><i class="icon-globe"></i> Deep Space</a></li>
                        <li><a tabindex="-1" href="timelapse.php"><i class="icon-facetime-video"></i> Timelapse</a></li>
                        <li><a tabindex="-1" href="terrestrial.php"><i class="icon-picture"></i> Terrestrial</a></li>
                    </ul>
                </li>
                <li class="divider-vertical"></li>
                <li class="dropdown">
					<a href="" id="equipment" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i> Equipment<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="equipment.php">Summary</a></li>
                        <li><a tabindex="-1" href="observatory.php">Observatory</a></li>
                        <li><a tabindex="-1" href="gso8rc.php">GSO 8" RC</a></li>
                        <li><a tabindex="-1" href="8se.php">Celestron NexStar 8 SE</a></li>
                        <li><a tabindex="-1" href="mn152.php">Maxvision MN152</a></li>
                        <li><a tabindex="-1" href="ed127.php">ED127 APO</a></li>
                       	<li><a tabindex="-1" href="at8in.php">AT 8IN</a></li>
                        <li><a tabindex="-1" href="at12in.php">AT 12IN</a></li>
						<li class="active"><a tabindex="-1" href="meteor.php">Meteor Camera</a></li>
                    </ul>
                </li>   
                <li class="divider-vertical"></li>
                <li><a href="links.php"><i class="icon-heart"></i> Links</a> </li>
                <li class="divider-vertical"></li>
                <li class="dropdown">
					<a href="" id="weather" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-info-sign"></i> Weather<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="weather.php">Summary</a></li>
                        <li><a tabindex="-1" href="moon.php">Moon rise/set</a></li>
                      </ul>
                </li>   
                <li class="divider-vertical"></li>
                <li class="dropdown">
                    <a href="" id="tutorials" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-pencil"></i> Tutorials<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="maximdltips.php">MaxIm DL Tips</a></li>
                        <li><a tabindex="-1" href="lightpollution.php">Light Pollution</a></li>
                        <li><a tabindex="-1" href="maximdlalarm.php">Maxim DL Alarms</a></li>
                        <li><a tabindex="-1" href="gso8rcpointing.php">GSO 8" RC Pointing Accuracy</a></li>
                        <li><a tabindex="-1" href="gso8rccollimate.php">GSO 8" Collimation</a></li>
                        <li><a tabindex="-1" href="abbreviations.php">AP Terminology</a></li>
                        <li><a tabindex="-1" href="eq6.php">EQ6 Tuneup</a></li>
                       <!-- <li><a tabindex="-1" href="setup.php">Setup Checklist</a></li>  -->
                        <li><a tabindex="-1" href="bahtinovmask.php">Bahtinov Mask</a></li>
                    </ul>
                </li>
            </ul>
        </div>
	</div>
	<h1>Meteor Camera</h1>
      <p>Here are some pictures of my first prototype meteor camera.</p>
<p>The components are:</p>
      <table class="table table-hover table-bordered">
        <tr>
          <td>Camera</td>
          <td><a href="http://www.aegis-elec.com/products/WAT902H.htm" target="_blank">WAT 902H</a> 1/2&quot; CCD</td>
        </tr>
        <tr>
          <td>Lens</td>
          <td>Cosmicar Pentax Aspheric 4mm F0.75 1/3&quot;   TS407E-ASP</td>
        </tr>
        <tr>
          <td>Capture Card </td>
          <td><a href="http://store.bluecherry.net/tw-100-4.html" target="_blank">TW-100</a> 4 port capture card with 64 bit drivers</td>
        </tr>
        <tr>
          <td>Software</td>
          <td><p>Windows 7 64 Bit<br />
            <a href="http://sonotaco.com/e_index.html" target="_blank">UFOCapture</a></p></td>
        </tr>
        <tr>
          <td>DC Iris Control</td>
          <td><a href="http://www.aegis-elec.com/products/HC-01.htm" target="_blank">WAT HC-01 </a></td>
        </tr>
        <tr>
          <td>Housing</td>
          <td>Jaycar    Aluminium External Camera Housing with Inbuilt Heater  <a href="http://www.jaycar.com.au/productView.asp?ID=QC3331&amp;form=CAT2&amp;SUBCATID=1035#5" target="_blank">QC3331</a> and<a href="http://www.jaycar.com.au/productView.asp?ID=QC3337&amp;form=CAT2&amp;SUBCATID=1035#5" target="_blank"> QC-3337</a> mounting bracket</td>
        </tr>
        <tr>
          <td>Power</td>
          <td>10amp Power supply from <a href="http://www.jaycar.com.au/productView.asp?ID=MP3097&amp;form=CAT2&amp;SUBCATID=999#12" target="_blank">Jaycar</a></td>
        </tr>
      </table>
      <p>Internal view showing the camera, lens and WAT HC-01 Iris control cable on the top.</p>
      <p><img src="images/meteor1.jpg" alt="Meteor Cam" /></p>
<p>The camera is mounted on the side of my observatory and is pointing south to keep the sun and moon out of the field of view.</p>
<p><img src="images/meteor2.jpg" width="800" height="533" alt="Meteor Cam" /></p>
      <p>First light meteor to celebrate the start of daylight savings : 2011/10/02 04:09AM</p>
      <p><img src="images/Meteor3.jpg" width="320" height="240" alt="Meteor" /></p>
      <p>Video version (4.6 Mb):</p>
      <p><a href="images/MeteorDetect-0001.avi">MeteorDetect-0001</a></p>
    <p></p>
    <div class="well">   
    <p class="pull-left">Donate: <a href="bitcoin:19mfyu85MHKgWfSypVUmvNrhXJVQMRSWLw?amount=0.01">19mfyu85MHKgWfSypVUmvNrhXJVQMRSWLw</a></p>
    <p class="pull-right"><a href="mailto:james@deepspaceplace.com"><i class="icon-envelope"></i> Contact me.</a></p>
    </div>
</div>
</body>
</html>
