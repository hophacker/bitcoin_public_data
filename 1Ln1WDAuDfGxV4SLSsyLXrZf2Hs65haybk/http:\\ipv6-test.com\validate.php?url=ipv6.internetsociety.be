http://ipv6-test.com/validate.php?url=ipv6.internetsociety.be
HTTP/1.1 200 OK
Date: Thu, 24 Jul 2014 10:40:44 GMT
Server: Apache/2.4.9 (Debian)
X-Powered-By: PHP/5.6.0RC1
Set-Cookie: PHPSESSID=7239fqd3vb03bt29q15hs8obf0; expires=Thu, 24-Jul-2014 10:55:44 GMT; Max-Age=900; path=/; domain=.ipv6-test.com
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0
Pragma: no-cache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 4465
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
		<title>IPv6 test - web site reachability</title>
		<meta name="description" content="This tool lets you test the IPv6 configuration and connectivity of a web server." />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" href="/css/bootstrap.min.css" />
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="/css/main.css" />
        <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-15976696-1']);
		  _gaq.push(['_setDomainName', 'ipv6-test.com']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
<link rel="alternate" title="Recently validated sites - RSS feed" href="http://ipv6-test.com/validate_rss.php" type="application/rss+xml" />	</head>
	<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="position:relative;top:-13px" href="http://ipv6-test.com"><img src="/img/logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
<li class='internal'><a href='http://ipv6-test.com/' title='General'>General</a></li><li class='internal'><a href='http://ipv6-test.com/speedtest/' title='Speed'>Speed</a></li><li class='internal'><a href='http://ipv6-test.com/pingtest/' title='Ping'>Ping</a></li><li class='active internal'><a href='http://ipv6-test.com/validate.php' title='Website'>Website</a></li><li class='internal'><a href='http://ipv6-test.com/stats/' title='Stats'>Stats</a></li><li class='internal'><a href='http://ipv6-test.com/api/' title='API'>API</a></li>		  </ul>
		</div><!--/.navbar-collapse -->
      </div>
    </div>

<div id='error_box' style='display:none'>
</div>

<script>
function show_error(s) {
	$("#error_box").html("<span style='font-weight:bold;'>ERROR</span><br />" + s).slideDown().click(function() {});
}

function show_warning(s) {
	$("#error_box").html("<span style='font-weight:bold;'>WARNING</span><br />" + s).slideDown().click(function() { $(this).fadeOut(); });
}
</script>

<div class='container'>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- ipv6-test page top responsive -->
	<ins class="adsbygoogle"
		 style="display:block"
		 data-ad-client="ca-pub-9895291552337649"
		 data-ad-slot="5790054602"
		 data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script><h3 class="title">Website IPv6 accessibility validator</h3>

<noscript>
<div class='text_box'>
Your browser does not appear to have <i>Javascript</i> support enabled. Without it IPv6-test.com can not run the web validator.
</div>
</noscript>

<div class='row url_box' style='display:none'>
	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
		<form id="url_form">
			<div class="input-group input-group-lg">
				<div class="input-group-btn">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="url_scheme">http</span>:// <span class="caret"></span></button>
					<ul id="scheme_list" class="dropdown-menu">
						<li><a href="#" data-value="http">http://</a></li>
						<li><a href="#" data-value="https">https://</a></li>
					</ul>
				</div>
				<input type="text" id="url_input" value='ipv6.internetsociety.be' class="form-control" />
				<span class="input-group-btn">
					<button type="button" id="url_button" class="btn btn-primary">Validate</button>
				</span>
			</div>
		</form>
	</div>
<!--
	<select id="url_scheme" class='url_prefix'><option value="http">http://</option><option value="https">https://</option></select>
	<input type='text' id='url_input' value='ipv6.internetsociety.be' />
	<div id='url_button'>Validate</div>
-->
</div>

<div id='test_box' class='row' style='display:none;'>

	<div class="col-lg-12 col-md-12 col-sm-12">
		<h3 id='validate_title'></h3>
		<br />
	</div>
	
	<div id='test_table' class='col-lg-6 col-md-6 col-sm-12' style='display:none'>
		<table class="table">
			<tr>
				<th>AAAA DNS record</th>
				<td id="icon_aaaa"></td>
				<td id="test_aaaa"></td>
			</tr>
			<tr>
				<th>IPv6 web server</th>
				<td id="icon_server"></td>
				<td id="test_server"></td>
			</tr>
			<tr>
				<th>IPv6 DNS server</th>
				<td id="icon_dns"></td>
				<td id="test_dns"></td>
			</tr>
		</table>
	</div>

	<div id='finish_ok' class="col-lg-6 col-md-6 col-sm-12" style='display:none'>
		<p><span class='label label-success' style='font-size:1.1em'>Congratulations, this website is IPv6 ready</span></p><br />
		<p>You can help raise awareness and show your commitment to IPv6 deployment to your users, by adding an IPv6-test validator button to your site :</p>
		<br />
		<div class='button_container row'>
			<div class="col-lg-4 col-md-4 col-sm-3">
				<div class='button_item'>
					<input type='radio' name='button_type' value='big' onclick='show_bt_source("big");' checked='checked'>&nbsp;
					<img src='http://ipv6-test.com/button-ipv6-big.png' alt='ipv6 ready' />
				</div>
				<div class='button_item'>
					<input type='radio' name='button_type' value='small' onclick='show_bt_source("small");'>&nbsp;
					<img src='http://ipv6-test.com/button-ipv6-small.png' alt='ipv6 ready' />
				</div>
				<div class='button_item'>
					<input type='radio' name='button_type' value='80x15' onclick='show_bt_source("80x15");'>&nbsp;
					<img src='http://ipv6-test.com/button-ipv6-80x15.png' alt='ipv6 ready' />
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-9">
				<textarea id='button_text' class="form-control" style='height:8em'></textarea><br />
				<span class='small'>paste this code into your website source to add the button.</span>
			</div>
		</div>
		<div id='finish_ok_footer' class='finish_footer'></div>
	</div>

	<div id='finish_nok' class="col-lg-6 col-md-6 col-sm-12" style='display:none'>
		<p><span class='label label-danger' style='font-size:1.1em'>This website is not ready for IPv6</span></p><br />
		<p>It is anticipated that the pool of unutilized IPv4 addresses will be depleted in a short time. This would imply that the Internet would not be able to continue to grow as easily as it has been growing and that it would become more difficult to incorporate new users, devices, services, applications and generally speaking, the innovation in Internet.</p>
		<p>The deployment of IPv6 is essential to avoid reaching this situation, and it is the only practical solution to IPv4 exhaustion.</p>
		<p><a href='http://en.wikipedia.org/wiki/IPv4_address_exhaustion'>Read more about IPv4 address depletion</a></p>
		<div id='finish_nok_footer' class='finish_footer'></div>
	</div>

</div>

<script>

function icon_ok(name) {
	$("#icon_" + name).html("<span class='glyphicon glyphicon-ok' style='color:green'></span>");
}

function icon_nok(name) {
	$("#icon_" + name).html("<span class='glyphicon glyphicon-remove' style='color:red'></span>");
}

function show_bt_source(type) {

	var ta = document.getElementById("button_text");
	if (type == "80x15") {
		ta.value = "<!-- IPv6-test.com button BEGIN -->\r\n<a href='http://ipv6-test.com/validate.php?url=referer'><img src='http://ipv6-test.com/button-ipv6-80x15.png' alt='ipv6 ready' title='ipv6 ready' border='0' /></a>\r\n<!-- IPv6-test.com button END -->";
	} else if (type == "small") {
		ta.value = "<!-- IPv6-test.com button BEGIN -->\r\n<a href='http://ipv6-test.com/validate.php?url=referer'><img src='http://ipv6-test.com/button-ipv6-small.png' alt='ipv6 ready' title='ipv6 ready' border='0' /></a>\r\n<!-- IPv6-test.com button END -->";
	} else if (type == "big") {
		ta.value = "<!-- IPv6-test.com button BEGIN -->\r\n<a href='http://ipv6-test.com/validate.php?url=referer'><img src='http://ipv6-test.com/button-ipv6-big.png' alt='ipv6 ready' title='ipv6 ready' border='0' /></a>\r\n<!-- IPv6-test.com button END -->";
	}
	ta.focus();
	ta.select();
}

function finish_ok() {
	$("#finish_ok").fadeIn();
	show_bt_source("big");
}

function finish_nok() {
	$("#finish_nok").fadeIn();
}

var progress_html = '<div class="progress progress-striped active"><div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div></div>';

function run_test_server(url, scheme) {
	var res = document.getElementById("test_server");
	res.innerHTML = progress_html;
	$.ajax({ 
		url: "/json/webserver.php?url=" + url + "&scheme=" + scheme,
		dataType: "json",
		success: function(resp) {
			var err = resp.error;
			if (err != undefined) {
				icon_nok("server");
				res.innerHTML = err;
				var ftxt = resp.footer_text;
				if (ftxt) {
					$("#finish_nok_footer").html(ftxt).show();
				}
				finish_nok();
			} else {
				icon_ok("server");
				res.innerHTML = resp.server;
				var ftxt = resp.footer_text;
				if (ftxt) {
					$("#finish_ok_footer").html(ftxt).show();
				}
				run_test_dns(url);
				setTimeout(finish_ok, 200);
			}
		},
		error: function(xopt, err) {
			icon_nok("server");
			res.innerHTML = err;
			finish_nok();
		}
	});
}

function run_test_dns(url) {
	$("#test_dns").html(progress_html);
	$.ajax({
		url: "/json/webdns.php?url=" + url,
		dataType: "json",
		success: function(resp) {
			if (resp.error) {
				icon_nok("dns");
				$("#test_dns").text(resp.error);
			} else if (resp.dns_ok) {
				icon_ok("dns");
				$("#test_dns").text(resp.dns_servers);
			} else {
				icon_nok("dns");
				$("#test_dns").text("This domain has no IPv6 DNS server, this may prevent some IPv6-only users from reaching it.");
			}
		},
		error: function(xopt, err) {
			icon_nok("dns");
			$("#test_dns").text(err);
		},
	});
}

function run_test(url, scheme) {
	var res = document.getElementById("test_aaaa");
	document.getElementById("validate_title").innerHTML = "IPv6 validation for " + scheme + "://" + url;
	$("#test_table").fadeIn();
	res.innerHTML = progress_html;
	$.ajax({
		url: "/json/webaaaa.php?url=" + url + "&scheme=" + scheme,
		dataType: "json",
		success: function(resp) {
			var err = resp.error;
			if (err != undefined) {
				icon_nok("aaaa");
				res.innerHTML = err;
				var ftxt = resp.footer_text;
				if (ftxt) {
					$("#finish_nok_footer").html(ftxt).show();
				}
				finish_nok();
			} else {
				icon_ok("aaaa");
				res.innerHTML = resp.dns_aaaa;
				setTimeout(function() { run_test_server(url, scheme); }, 200);
			}
		},
		error: function(xopt, err) {
			icon_nok("aaaa");
			res.innerHTML = err;
			finish_nok();
		}
	});
}

function prepare_test(url, scheme) {
	$(".url_box, h3.title").fadeOut();
	$("#recently_validated").fadeOut(null, function() { $("#test_box").slideDown(null, function () { run_test(url, scheme); }); });
}

var url_scheme = "http";
var url_input = document.getElementById("url_input");
var url_button = document.getElementById("url_button");
var test_box = document.getElementById("test_box");


url_button.onclick = function() { if (url_input.value) { prepare_test(url_input.value, url_scheme); this.style.opacity = '0.5'; this.onclick = null; } };

function i6tOnLoad() {
	$("#url_form").submit(function(ev) {
		$("#url_button").click();
		ev.preventDefault();
		return false;
	});
	$("#scheme_list a").click(function(ev) {
		url_scheme = $(this).attr("data-value");
		$(".url_scheme").text(url_scheme);
		ev.preventDefault();
	});
	$(".title").hide();
	$("#test_box").show();
	run_test(url_input.value, url_scheme);
}

</script>

		</div>

		<div class="container" style="margin-top:6em">
			<footer id='footer_text' class="small">
									Copyright &copy; 2014 ipv6-test.com &nbsp;|&nbsp; <a href='bitcoin:1Ln1WDAuDfGxV4SLSsyLXrZf2Hs65haybk'>donate</a> &nbsp;|&nbsp; <a href='/contact.php'>contact</a><br />
								<span class='small'>IP geolocation API by <a href='http://db-ip.com/'>DB-IP.com</a></span>
			</footer>
		</div>

		<!-- AddThis Smart Layers BEGIN -->
		<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=six0r"></script>
		<script type="text/javascript">
		  addthis.layers({
			'theme' : 'transparent',
			'share' : {
			  'position' : 'left',
			  'numPreferredServices' : 5
			}   
		  });
		</script>
		<!-- AddThis Smart Layers END -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="/js/vendor/bootstrap.min.js"></script>

		<script src="/js/main.js"></script>
	</body>
</html>
