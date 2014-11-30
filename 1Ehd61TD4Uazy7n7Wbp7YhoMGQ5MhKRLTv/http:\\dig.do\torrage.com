http://dig.do/torrage.com
HTTP/1.1 200 OK
Date: Tue, 22 Jul 2014 15:25:24 GMT
Server: Apache/2.2.22 (Ubuntu)
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 7067
Connection: close
Content-Type: text/html; charset=utf-8

<!DOCTYPE html>
<head>
<title>Information about torrage.com: Torrage - Torrent Storage Cache</title>

<meta name="description" content="About Torrage - Torrent Storage Cache - Torrage is a free service for caching torrent files online. You can not search or list torrent files that are stored here, you can only access them if you already know the info_hash value of the torrent you want to download. The way to access torrents...">

<meta http-equiv="content-type" content="text/html; charset=utf-8">

<link href="//dig.do/bootstrap_/css/bootstrap.min.css" rel="stylesheet">

<style>

.glyphicon {
    font-size: 0.8em;
}

.orange {
  color: #ff8800;
}

.imgshadow {
 border: 1px solid #505050;
 padding: 10px 10px 10px 10px;
 box-shadow: 5px 5px 5px #aaa;
-moz-box-shadow: 5px 5px 5px #aaa;
-khtml-box-shadow: 5px 5px 5px #aaa;
-webkit-box-shadow: 5px 5px 5px #aaa;
 background-color: #ffffff;
}

</style>

</head>


<body style="background-image:url(/images_/bg.jpg)">

<div class="container">

<div style="float: right;
line-height: 60px;
">


<br style="clear: both">
</div>

<div style="float: left; margin-top: 12px; margin-bottom: 10px; background-image: url(/images_/bg.jpg)">
<span style="margin-bottom: 0px; font-size: 2em;">
<img src="/images_/logo-dig.do-square-sm.png" alt="">
<a href="http://dig.do/">Dig.do - Domain information about top sites</a></span><br>
<span style="margin-left: 58px; color: #707070;">

Discover the most popular sites
</span>
</div>


<br style="clear: both">




<script>
function keywords_open() {
 $('#keywords_form').show('fast');
}
function keywords_close() {
 $('#keywords_form').hide('fast');
}

function review_open() {
 $('#review_form').show('fast');
}
function review_close() {
 $('#review_form').hide('fast');
}
</script>




<div class="imgshadow" id="maindiv">



<div style="float: left;">

<span style="font-size: 2em;">
<span class=orange>Domain:</span>

<a href="http://torrage.com/" rel="nofollow" target=_blank>


<script>
function error_img(that) {

 $(that).hide();
return;
//document.writeln('naturalWidth='+that.naturalWidth);
 $.ajax({
  'url': 'http://docs.do/',
  'type': 'GET',
  'data': {
             'error_img': that.src
          }
  });
//dump(that);
}
</script>


<img src="http://www.google.com/s2/favicons?domain=torrage.com">
torrage.com
<i class="glyphicon glyphicon-circle-arrow-right" style="margin-top: 10px"></i></a>
</span>


<div class="g-plusone" data-annotation="inline" data-width="300"></div>
<script type="text/javascript">

var thishost = location.hostname;
var page_lang = '';
if (thishost == 'topsites.jp') {
  page_lang = 'ja';
} else if (thishost == 'topwebsites.it') {
  page_lang = 'it';
} else if (thishost == 'siteinfo.org.uk') {
  page_lang = 'en-GB';
} else if (thishost == 'siteinfo.es' || thishost == 'topsites.cl' || thishost == 'siteinfo.mx') {
  page_lang = 'es';
} else if (thishost == 'topwebseiten.de') {
  page_lang = 'de';
} else if (thishost == 'topsitesweb.fr') {
  page_lang = 'fr';
} else if (thishost == 'soyuzweb.ru') {
  page_lang = 'ru';
} else if (thishost == 'topsites.kr') {
  page_lang = 'ko';
} else if (thishost == 'everindex.cn') {
  page_lang = 'zh-CN';
} else if (thishost == 'centralinternet.com.br') {
  page_lang = 'pt-BR';
} else {
  thishost = 'topinternet.info';
  ua_id = 'UA-39580597-1';
}

  if (page_lang.length>0) {
    window.___gcfg = {lang: page_lang};
  }
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>


<br>

<b class="orange">Popularity/access rank:</b>
Site number 16704 (.com extension); 26104 (global rank) 

<!--
<br>
<a href="http://torrage.com/" rel="nofollow" target=_blank title="Go to torrage.com (open site)">
http://torrage.com/
</a>
-->

</div>

<div style="float: right; xborder: 1px solid black;">
<a href="javascript:;" onClick="review_open(); return(false);"><i class="glyphicon glyphicon-pencil"></i> Write a review about torrage.com</a><br>
<!--
<a href="javascript:;" onClick="keywords_open(); return(false);"><i class="glyphicon glyphicon-pencil"></i> Add keywords</a>
-->
</div>

<br style="clear: both;">


<div id="review_form" style="display: none;">

<form method=POST action="/mod_perl/top-sites/top-sites.pl">
<input type=hidden name="action" value="review_save">
<input type=hidden name="d" value="torrage.com">
<input type=text name="email" value="" style="display: none;">

<b>Write your review about this site (torrage.com):</b><br>
<textarea name="review" style="width: 560px; height: 100px;"></textarea><br>
<input type="submit" class="btn btn-primary" value="Save site review">
&nbsp;
&nbsp;
<input type="button" class="btn" value="Cancel" onClick="review_close();">

</form>

</div>


<div id="keywords_form" style="display: none;">

<form method=POST action="/mod_perl/top-sites/top-sites.pl">
<input type=hidden name="action" value="keywords_save">
<input type=hidden name="d" value="torrage.com">
<input type=text name="email" value="" style="display: none;">

<b>What is this site about? Enter up to 3 specific keyword terms</b>
<script>
document.writeln("(e.g.: vegetarian food, craft sale, japanese poetry):");
</script>
<br>
Keyword 1: <input type="text" name="tag1"><br>
Keyword 2: <input type="text" name="tag2"><br>
Keyword 3: <input type="text" name="tag3"><br>
<input type="submit" class="btn btn-primary" value="Save keywords">
&nbsp;
&nbsp;
<input type="button" class="btn" value="Cancel" onClick="keywords_close();">

</form>


</div>






<br>
<!-- Amazon movies ads -->
<!--
<iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=insiteinternette&o=1&p=12&l=ur1&category=primeent&banner=032PM0C4EGZ3KFE57R82&f=ifr" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
-->
<script type='text/javascript' src='//go.onclasrv.com/apu.php?zoneid=4456'></script>


<!-- removed to test amazon
<iframe id='521719a5e54a0' name='521719a5e54a0' src='http://ad.propellerads.com/afr.php?zoneid=6693' frameborder='0' scrolling='no' width='728' height='90'><a href='http://ad.propellerads.com/ck.php?n=521719a5e54a0' target='_blank'><img src='http://ad.propellerads.com/avw.php?zoneid=&n=521719a5e54a0' border='0' alt='' /></a></iframe>
-->







<br>

<div>



<div style="
 float: right;
 margin-left: 14px;
">

<b class="orange">Screenshot:</b>
(<a href="/screenshot-hires/201307/torrage.com-torrent-download.jpg" onClick="this.href='/screenshots/torrage.com'">enlarge)
<br>

<img src="/screenshot/201307/torrage.com-torrent-download.jpg" class="imgshadow" alt="Torrage screenshot"
style="
 margin-top: 5px;
 margin-bottom: 10px;
"
>
</a>
<br>
<img src="http://torrage.com/images/logo.jpg" alt="Torrage logo" title="Torrage logo" onerror="error_img(this)" style="max-width: 600px"><br>
</div>


<p><b class="orange">Torrage information:</b></p>


<table class="table table-bordered" style="width: auto">
<!--
cellpadding=3 cellspacing=0 xborder=1 style="border: 1px solid #a0a0a0">
-->

<tr><td style="text-align: right; width: 60px;"><b class="orange">Title</b></td><td>Torrage - Torrent Storage Cache
(<a href="/torrage">view sites with similar title</a>)

</td></tr>







<tr><td style="text-align: right;"><b class="orange">Description</b></td> <td>Torrage is a free service for caching torrent files online. You can not search or list torrent files that are stored here, you can only access them if you already know the info_hash value of the torrent you want to download. The way to access torrents...</td></tr>


<tr>
<td style="vertical-align: middle; text-align: right"><b class="orange">URL</b></td>
<td style="vertical-align: middle;">
http://torrage.com/

<a href="/favorites/torrage.com"
rel="nofollow"
class="btn btn-primary" 
style="float:right;"
>Add this site to your favorite list</a>


</td></tr>



</table>

</div>
<br style="clear: both;">

























<iframe id='52171a024cf22' name='52171a024cf22' src='http://ad.propellerads.com/afr.php?zoneid=6694' frameborder='0' scrolling='no' width='300' height='250'><a href='http://ad.propellerads.com/ck.php?n=52171a024cf22' target='_blank'><img src='http://ad.propellerads.com/avw.php?zoneid=&n=52171a024cf22' border='0' alt='' /></a></iframe>



<h3>
<b class="orange">
Torrage Summary</b>
</h3>


<p>
Torrage - Torrent Storage Cache. Torrage is a free service for caching torrent files online.<br>
You can not search or list torrent files that are stored here, you can only access them if you already know the info_hash value of the torrent you want to download.<br>
The way to access torrents is simple, you just use the url http://torrage.com/torrent/ INFO_HASH_IN_HEX .torrent (note HEX values A-F must be in uppercase)<br>
Example URL:
 http://torrage.com/torrent/640FE84C613C17F663551D218689A64E8AEBEABE.torrent (Slackware 12.2 DVD ISO)<br>
The torrent files are saved to disk in gzip format, that means you have to use a browser that understands the gzip transfer encoding.<br>
Send .torrent to cache:

Just choose the torrent file you want to add to the cache and click "Cache!".<br>
Removal.Torrents that have not been downloaded for a period of 6 months will automatically be removed from the system.<br>
Legal. We DO NOT have or track any information about what type of content the torrents point to.<br>
We DO NOT have any type of 
</p>

<br>
<br>
<legend>
<b class="orange">
Popularity Rank of torrage.com
</b></legend>
<table class="table table-bordered" style="width: auto; float: left;">
<tbody>
<tr style="text-align: center">
 <th>Alexa Rank</th>
 <th>Alexa Rank Date</th>
</tr>

<tr>
 <td style="text-align: center">26104</td>
 <td style="text-align: center">2013-05-15</td>
</tr>
<tr>
 <td style="text-align: center">24714</td>
 <td style="text-align: center">2013-05-01</td>
</tr>
<tr>
 <td style="text-align: center">24978</td>
 <td style="text-align: center">2013-04-15</td>
</tr>
<tr>
 <td style="text-align: center">27804</td>
 <td style="text-align: center">2013-04-01</td>
</tr>
<tr>
 <td style="text-align: center">18410</td>
 <td style="text-align: center">2013-03-15</td>
</tr>
<tr>
 <td style="text-align: center">16731</td>
 <td style="text-align: center">2013-03-01</td>
</tr>
<tr>
 <td style="text-align: center">33115</td>
 <td style="text-align: center">2013-02-15</td>
</tr>
<tr>
 <td style="text-align: center">46337</td>
 <td style="text-align: center">2013-01-30</td>
</tr>
<tr>
 <td style="text-align: center">47633</td>
 <td style="text-align: center">2013-01-08</td>
</tr>
<tr>
 <td style="text-align: center">22924</td>
 <td style="text-align: center">2012-11-17</td>
</tr>
<tr>
 <td style="text-align: center">69610</td>
 <td style="text-align: center">2011-12-06</td>
</tr>
<tr>
 <td style="text-align: center">19069</td>
 <td style="text-align: center">2011-08-13</td>
</tr>
<tr>
 <td style="text-align: center">31370</td>
 <td style="text-align: center">2010-06-10</td>
</tr>
</tbody>
</table>

<script type="text/javascript">

var can, ctx, maxVal, minVal, xScalar, yScalar, numSamples, colHead, rowHead;

var graph_array = [31370,19069,69610,22924,47633,46337,33115,16731,18410,27804,24978,24714,26104];

var header = new Array();
numSamples = graph_array.length;
for (var i=0; i<numSamples; i++) {
  header[i]="";
}
header[0] = '2010-06-10';
header[graph_array.length-1] = '2013-05-15';

var max = Math.max.apply( Math, graph_array );
var min = Math.min.apply( Math, graph_array );

function draw_graph() {

  var delta = max-min;
  var stepSize = Math.floor(delta/5);

  minVal = min-Math.floor(delta/2);
  maxVal = min+Math.floor(delta*1.2);

  if (stepSize<10) {
    stepSize=5;
  } else if (stepSize<100) {
    stepSize=(stepSize-stepSize%10); // 49 -> 40 (ideal would be 50)
  } else if (stepSize<1000) {
    stepSize=(stepSize-stepSize%100); // 309 -> 300
  } else if (stepSize<10000) {
    stepSize=(stepSize-stepSize%1000); //
  } else if (stepSize<100000) {
    stepSize=(stepSize-stepSize%10000); //
  }

  var L  = Math.log(max) / Math.LN10;
  var L2 = Math.pow(10,Math.floor(L));

  minVal = (minVal-(minVal%100)); // 41 -> 40
  if (minVal<0) {
    minVal=0;
  }
  if (maxVal<10) {
    maxVal=10;
    stepSize=1;
  } else if (maxVal < 20) {
    maxVal=20;
  }
  colHead = 50;
  rowHead = 50;

  var margin = 5; // space from text to table

  numSamples = graph_array.length;
 
  can = document.getElementById("can");
  ctx = can.getContext("2d");
  ctx.fillStyle = "black";
  ctx.font = "8pt Helvetica";

  // set vertical scalar to available height / data points
  yScalar = (can.height - colHead - margin) / (maxVal - minVal); // 0.00345
           
  // set horizontal scalar to available width / number of samples
  xScalar = (can.width - rowHead) / numSamples; // 50 px
 
  ctx.strokeStyle="rgba(40, 80, 140, 0.4)"; // light blue lines
  ctx.beginPath();
  // print  column header and draw vertical grid lines
  for (i = 0; i < numSamples; i++) {
    var x = i * xScalar + rowHead;
    ctx.fillText(header[i], x - 20, colHead - margin); // Jan, Feb...
    ctx.moveTo(x, colHead);
    ctx.lineTo(x, can.height - margin);
  }

  // row header and horizontal grid lines
  var count = 0;
  for (scale = maxVal; scale >= minVal; scale -= stepSize) {
    var y = colHead + (yScalar * count * stepSize);
//    ctx.fillText(scale, margin, y + margin); // order by desc
    ctx.fillText( (maxVal+minVal) - scale, margin, y + margin); // order by asc
    ctx.moveTo(rowHead, y);
    ctx.lineTo(can.width, y);
    count++;
  }
  ctx.stroke();
 
  ctx.strokeStyle = "#ff8000";
  plotData(graph_array);
}
 
function plotData(dataSet) {
  ctx.beginPath();
  ctx.moveTo(rowHead+0, dataSet[0]*yScalar+colHead - minVal*yScalar);

  for (i = 1; i < numSamples; i++) {
    ctx.lineTo(rowHead+i * xScalar, dataSet[i]*yScalar + colHead - minVal*yScalar);
  }
  ctx.stroke();
}
</script>

<canvas id="can" height="300" width="500" 
style="
 margin-top: -40px;
 margin-left: 50px;
"></canvas>
<script>
draw_graph();
</script>
<br>
<div style="text-align: center">
Access traffic rank of torrage.com (site position)
</div>




<br style="clear: both">


<p>
<b class="orange">Server IP of torrage.com:</b> <a href="http://dig.do/192.121.86.94">192.121.86.94</a>
(hosted by <i>Resilans AB</i>)

<br>

<b class="orange">Domain extension:</b> .com
<img src="/images_/flags/com.gif">
(<a href="/top-sites-in-com-commercial/">list top sites in .com (Commercial)</a>)
<br>
















</p>

<h3><legend class="orange">1 images found on torrage.com:</legend></h3>
<div style="
 padding: 12px;
 align: top;
 margin: 0 auto;
">






<!-- TODO: @img width=200 -->



<div style="
float: left;
margin-right: 20px;
"><img src="http://torrage.com/images/logo.jpg" class="imgshadow" onerror="error_img(this)" alt="Torrage - Torrent Storage Cache" style="max-width: 700px"><br>
logo.jpg
<br>Torrage - Torrent Storage Cache
</div>





<br style="clear:both;">
</div>
<br>



<h3>
<a name="incoming_links">
<legend class="orange">
<b>Sites linking from it's first page to torrage.com: (14 results found)</b>
</legend>
</a>
</h3>

<ul class="list-unstyled" id="links_in" style="margin-left: 20px">

<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok"></i>

<a href="http://topwebsites.it/zoink.it"><b>zoink.it</b></a>: ZoinkIT - Torrent Storage Cache 
<span style="color: #b0b0b0">(access rank: 29405)</span>

</li>
<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok"></i>

<a href="http://dig.do/francais.persianblog.ir"><b>francais.persianblog.ir</b></a>: آموزش زبان فرانسه : دانلود 
<span style="color: #b0b0b0">(access rank: 703307)</span>

</li>
<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok"></i>

<a href="http://topwebsites.it/istole.it"><b>istole.it</b></a>: istole.it - An open tracker project 

</li>
<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok" style="opacity:0.1;"></i>

<a href="http://topinternet.info/dphoneworld.net"><b>dphoneworld.net</b></a>: dphoneworld 
<span style="color: #b0b0b0">(access rank: 163839)</span>

</li>
<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok" style="opacity:0.1;"></i>

<a href="http://topinternet.info/fbtorrent.net"><b>fbtorrent.net</b></a>: FB Torrent – Livre 
<span style="color: #b0b0b0">(access rank: 365113)</span>

</li>
<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok" style="opacity:0.1;"></i>

<a href="http://topinternet.info/up-torrents.com"><b>up-torrents.com</b></a>: Up Torrents | Filmes e Series Via Torrent Grátis 
<span style="color: #b0b0b0">(access rank: 380502)</span>

</li>
<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok" style="opacity:0.1;"></i>

<a href="http://topinternet.info/yestorrent.net"><b>yestorrent.net</b></a>: Yes Torrent - Baixar Filmes Torrent, Movies Torrent, Free Torrent, Download Torrent Filmes, Filmes Torrent, Grátis Torrent Filmes, Baixar Torrent, Baixar Movie 
<span style="color: #b0b0b0">(access rank: 861700)</span>

</li>
<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok" style="opacity:0.1;"></i>

<a href="http://topinternet.info/mostpopulargamez.blogspot.com"><b>mostpopulargamez.blogspot.com</b></a>: Download Free Games - Full Version PC Games - Popular Games 

</li>
<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok" style="opacity:0.1;"></i>

<a href="http://topinternet.info/uvsubs.blogspot.se"><b>uvsubs.blogspot.se</b></a>: uvsubs 

</li>
<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok" style="opacity:0.1;"></i>

<a href="http://topinternet.info/yestorrent.blogspot.com"><b>yestorrent.blogspot.com</b></a>: Yes Torrent - Baixar Filmes Torrent, Movies Torrent, Free Torrent, Download Torrent Filmes, Filmes Torrent, Grátis Torrent Filmes, Baixar Torrent, Baixar Movie 

</li>
<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok" style="opacity:0.2;"></i>

<a href="http://dig.do/english.persianblog.ir"><b>english.persianblog.ir</b></a>: دانلود کتاب های آموزش زبان انگلیسی 

</li>
<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok" style="opacity:0.2;"></i>

<a href="http://dig.do/esquimo.net"><b>esquimo.net</b></a>: ESQUIMO - Torrent Search 

</li>
<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok" style="opacity:0.2;"></i>

<a href="http://dig.do/getmetorrents.com"><b>getmetorrents.com</b></a>: Get me torrents! 

</li>
<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok" style="opacity:0.2;"></i>

<a href="http://infosite.in/heavaenofentertaiment.blogspot.in"><b>heavaenofentertaiment.blogspot.in</b></a>: heavaen of entertaiment 

</li>
</ul>








<h3>
<a name="links">
<legend class="orange">
Links found on Torrage homepage:
</legend>
</a>
</h3>

<div style="float: right">

<h3><span class="orange">External links:</span></h3>
<b>torrage.com is linking to those sites:</b>
<br><br>

<ul class="list-unstyled" id="links_out">

<li style="margin-bottom: 5px">
<i class="glyphicon glyphicon-ok"></i>
<a href="http://dig.do/github.com"><span style="">github.com</span></a>
<br><span style="margin-left: 20px"></span>GitHub · Social Coding
</li>
</ul>
</div>





<ol>

<li><a href="http://torrage.com/" rel="nofollow">Torrage - Torrent Storage Cache</a></li>
<li><a href="http://torrage.com/torrent/640FE84C613C17F663551D218689A64E8AEBEABE.torrent" rel="nofollow">http://torrage.com/torrent/640FE84C613C17F663551D218689A64E8AEBEABE.torrent</a></li>
<li><a href="bitcoin:1Ehd61TD4Uazy7n7Wbp7YhoMGQ5MhKRLTv" rel="nofollow">1Ehd61TD4Uazy7n7Wbp7YhoMGQ5MhKRLTv</a></li>
<li><a href="http://torrage.com/source/torrage-0.4.tar.bz2" rel="nofollow">here (v0.4)</a></li>
<li><a href="http://github.com/torrage/Torrage" rel="nofollow">http://github.com/torrage/Torrage</a></li>
<li><a href="http://torrage.com/automation.php" rel="nofollow">APIs</a></li>
</ol>

<iframe id='521719a5e54a0' name='521719a5e54a0' src='http://ad.propellerads.com/afr.php?zoneid=6693' frameborder='0' scrolling='no' width='728' height='90'><a href='http://ad.propellerads.com/ck.php?n=521719a5e54a0' target='_blank'><img src='http://ad.propellerads.com/avw.php?zoneid=&n=521719a5e54a0' border='0' alt='' /></a></iframe>






<br style="clear: both">




<hr>

<p>
<span style="color: #b0b0b0">site visit date: 2013-05-04 15:31:26<br>
<i>torrage.com</i> site information
</span>
</p>

<!--
url=?$url_str?; charset=utf-8; status: 200; bytes=3456<br>
-->

</div> <!-- /imgshadow -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<script type='text/javascript' src='http://onclickads.net/apu.php?zoneid=4456&lim=12'></script>

<!-- see ../../../www/foot.php -->

<hr style="margin-bottom: 10px">

<div style="text-align: center">
|
<a href="http://dig.do/">dig.do - home</a> |
<!--
<a href="/about-us.php">about us</a> |
-->
<a href="http://dig.do/topsites/">list world top sites</a> |
<a href="http://dig.do/topic/">top sites by category</a> |
<a href="http://dig.do/top-sites-by-country.php">top sites by country</a> |
<a href="http://digdo.postbit.com/">blog</a> |
<a href="http://dig.do/stats.php">stats</a> |
<a href="http://dig.do/terms-of-use.php">terms of use</a> |


<a href="http://dig.do/contact.php" rel="nofollow">contact</a> |
</div>

<br>
<br>

</div> <!-- /container -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');


var thishost = location.hostname;
if (thishost == 'dig.do') {
  ua_id = 'UA-39580597-4';
} else if (thishost == 'topsexweb.com') {
  ua_id = 'UA-39580597-5';
} else if (thishost == 'topsites.jp') {
  ua_id = 'UA-39580597-6';
} else if (thishost == 'topwebsites.it') {
  ua_id = 'UA-39580597-8';
} else if (thishost == 'siteinfo.org.uk') {
  ua_id = 'UA-39580597-9';
} else if (thishost == 'siteinfo.es') {
  ua_id = 'UA-39580597-10';
} else if (thishost == 'topwebseiten.de') {
  ua_id = 'UA-39580597-11';
} else if (thishost == 'infosite.in') {
  ua_id = 'UA-39580597-12';
} else if (thishost == 'index.do') {
  ua_id = 'UA-39580597-13';
} else if (thishost == 'topsitesweb.fr') {
  ua_id = 'UA-39580597-14';
} else if (thishost == 'soyuzweb.ru') {
  ua_id = 'UA-39580597-15';
} else if (thishost.indexOf('everindex.com') != -1) {
  ua_id = 'UA-39580597-16';
  thishost = 'everindex.com';
} else if (thishost == 'siteinfo.ch') {
  ua_id = 'UA-39580597-17';
} else if (thishost == 'siteinfo.at') {
  ua_id = 'UA-39580597-18';
} else if (thishost == 'everindex.co.za') {
  ua_id = 'UA-39580597-19';
} else if (thishost.indexOf('centralinternet.com.br') != -1) {
  ua_id =  'UA-39580597-20';
  thishost = 'centralinternet.com.br';
} else if (thishost == 'everindex.ca') {
  ua_id = 'UA-39580597-21';
} else if (thishost == 'siteinfo.mx') {
  ua_id = 'UA-39580597-22';
} else if (thishost == 'everindex.be') {
  ua_id = 'UA-39580597-23';
} else if (thishost == 'everindex.nl') {
  ua_id = 'UA-39580597-24';
} else if (thishost == 'everindex.us') {
  ua_id = 'UA-39580597-25';
} else if (thishost == 'everindex.dk') {
  ua_id = 'UA-39580597-26';
} else if (thishost == 'everindex.pl') {
  ua_id = 'UA-39580597-27';
} else if (thishost == 'everindex.gr') {
  ua_id = 'UA-39580597-28';
} else if (thishost == 'everindex.se') {
  ua_id = 'UA-39580597-29';
} else if (thishost == 'topsites.cl') {
  ua_id = 'UA-39580597-30';
} else if (thishost == 'topsites.hk') {
  ua_id = 'UA-39580597-31';
} else if (thishost == 'topsites.cn') {
  ua_id = 'UA-39580597-32';
} else if (thishost == 'topsites.co.no') {
  ua_id = 'UA-39580597-33';
} else if (thishost == 'everindex.com.ar') {
  ua_id = 'UA-39580597-34';
} else if (thishost == 'everindex.co.nz') {
  ua_id = 'UA-39580597-35';
} else if (thishost == 'everindex.co.il') {
  ua_id = 'UA-39580597-36';
} else if (thishost == 'topsites.kr') {
  ua_id = 'UA-39580597-37';
} else {
  thishost = 'topinternet.info';
  ua_id = 'UA-39580597-1';
}

  ga('create', ua_id, thishost);
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>

<!--
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-756399-15']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
</body>

<!-- END OF domain_info.thtml -->

