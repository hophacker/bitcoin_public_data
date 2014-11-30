http://openruby.com/bitcoin/sites/brainlesstales.com
HTTP/1.1 200 
Server: cloudflare-nginx
Date: Thu, 24 Jul 2014 13:06:32 GMT
Content-Type: text/html; charset=utf-8
Connection: close
Set-Cookie: __cfduid=d688e53ac6345a344d23409c47151580a1406207192031; expires=Mon, 23-Dec-2019 23:50:00 GMT; path=/; domain=.openruby.com; HttpOnly
X-Powered-By: Phusion Passenger (mod_rails/mod_rack) 3.0.17
X-UA-Compatible: IE=Edge,chrome=1
Cache-Control: max-age=0, private, must-revalidate
X-Request-Id: 36753a6df518ef3ed3b3b3a575de48e2
X-Runtime: 0.394151
X-Rack-Cache: miss
Set-Cookie: _sglinks_session=0934827e88ee5dd630297cf8bd539bce; path=/; HttpOnly
Set-Cookie: current_user_id=; path=/; expires=Thu, 01-Jan-1970 00:00:00 GMT
Set-Cookie: current_user_email=; path=/; expires=Thu, 01-Jan-1970 00:00:00 GMT
Status: 200
Vary: Accept-Encoding
CF-RAY: 14f055e6399c020d-IAD
Content-Encoding: gzip

<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<title>Brainlesstales.Com Site Info - OpenRuby.com</title>
<meta content="authenticity_token" name="csrf-param" />
<meta content="gaxtBNwUzCNBk+xQqsI1rfxGDHwsY6TMULCwrTBkS9A=" name="csrf-token" />
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->
<!-- Le fav and touch icons -->
<link href="http://static.openruby.com/assets/application.css?94.css" media="all" rel="stylesheet" type="text/css" />
<link href="http://static.openruby.com/bootswatch/united/bootstrap.min.css?94.css" media="all" rel="stylesheet" type="text/css" />
<link href="http://static.openruby.com/bootswatch/default/bootstrap-responsive.min.css?94.css" media="all" rel="stylesheet" type="text/css" />
<script src="http://static.openruby.com/assets/application.js?94.js" type="text/javascript"></script>
<link href="http://openruby.com/pages/latest.atom" rel="alternate" title="Latest Articles" type="application/atom+xml" />
<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') +
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/1010898/sglinks_300x250_top', [300, 250], 'div-gpt-ad-1406186418460-0').addService(googletag.pubads()).setTargeting("host", "openruby.com");
googletag.defineSlot('/1010898/sglinks_300x250_bottom', [300, 250], 'div-gpt-ad-1406186418460-1').addService(googletag.pubads()).setTargeting("host", "openruby.com");
googletag.defineSlot('/1010898/sglinks_1x1', [1, 1], 'div-gpt-ad-1406186418460-2').addService(googletag.pubads()).setTargeting("host", "openruby.com");
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-242142-14']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  _gaq.push(['t2._setAccount', 'UA-242142-21']);
  _gaq.push(['t2._setDomainName', 'none']);
  _gaq.push(['t2._setAllowLinker', true]);
  _gaq.push(['t2._trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  
  //track FB likes - ensure all accounts above called
  function GATrackFBLikes() {
    FB.Event.subscribe('edge.create', function(targetUrl) {
      _gaq.push(['_trackSocial', 'facebook', 'like', targetUrl]);
      _gaq.push(['t2._trackSocial', 'facebook', 'like', targetUrl]);
    });
    FB.Event.subscribe('edge.remove', function(targetUrl) {
      _gaq.push(['_trackSocial', 'facebook', 'unlike', targetUrl]);
      _gaq.push(['t2._trackSocial', 'facebook', 'unlike', targetUrl]);
    });
    FB.Event.subscribe('message.send', function(targetUrl) {
      _gaq.push(['_trackSocial', 'facebook', 'send', targetUrl]);
      _gaq.push(['t2._trackSocial', 'facebook', 'send', targetUrl]);
    });
  }
  
  function GATrackMailchimp() {
    $('.mailchimp_signup form').submit(function(e) {
      var _email = $(e.target).find('input[name="EMAIL"]').first().val();
      _gaq.push(['_trackEvent', 'Mailing List', 'Subscribe', _email]);
      _gaq.push(['t2._trackEvent', 'Mailing List', 'Subscribe', _email]);
    });
  }
  
  //track external link clicks - ensure all accounts above called
  $(document).ready(function() {
    $('a.external_link').click(function(link) {
      _gaq.push(['_trackEvent', 'External Links', 'Click', link.target.href]);
      _gaq.push(['t2._trackEvent', 'External Links', 'Click', link.target.href]);
    });
  });
  
</script>


</head>
<body class='site_openruby path_sites_show bootswatch_united'>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({appId: '188541697916714', status: true, cookie: true, channelUrl: 'http://openruby.com/channel.html',  // custom channel
             xfbml: true});
             
    //run these functions if they exist
    if(typeof window.GATrackFBLikes == 'function') { GATrackFBLikes(); }
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/en_US/all.js?jeyel20110430';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>
<script>
  $.getScript('http://platform.twitter.com/widgets.js');
  $.getScript('http://apis.google.com/js/plusone.js');
</script>
<div class='navbar navbar-fixed-top'>
<div class='navbar-inner'>
<div class='container'>
<a class='btn btn-navbar' data-target='.nav-collapse' data-toggle='collapse'>
<span class='icon-bar'></span>
<span class='icon-bar'></span>
<span class='icon-bar'></span>
</a>
<a href="/" class="brand"><img alt="OpenRuby.com" src="http://static.openruby.com/images/openruby.png" style="max-height: 1.4em; margin-top: -0.2em; margin-bottom: -0.2em;" /></a>
<div class='container nav-collapse'>
<ul class='nav'>
<li><a href="/pages/latest" class="tab">Latest</a></li>
<li><a href="/pages" class="tab">Archives</a></li>
<li><a href="/sites" class="tab">Sites</a></li>
<li class='divider-vertical'></li>
<li class='menu_tab_subtag_current'>
<a href="/bitcoin" title="Bitcoin">Bitcoin</a>
</li>
<li class='dropdown dropdown-adj'>
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
<ul class='dropdown-menu'>
<li><a href="/bitcoin/pages/latest" class="tab">Latest</a></li>
<li><a href="/bitcoin/pages" class="tab">Archives</a></li>
<li><a href="/bitcoin/sites" class="tab">Sites</a></li>
</ul>
</li>
<li class='divider-vertical'></li>
</ul>
<form accept-charset="UTF-8" action="/search" class="navbar-search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
<input class="search-query span2" id="q" name="q" placeholder="Search" type="text" />
</form>

</div>
</div>
</div>
</div>
<div class='subnavbar'>
<div class='container clearfix'>
<div class='content'>
<div class='row'>
<div class='span5 clearfix'>
<ul class='nav nav-pills'>
<li class='remove_if_not_signed_in dropdown'>
<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
<span class='replace_with_current_user_email'>User</span>
<b class='caret'></b>
</a>
<ul class='dropdown-menu'>
<li><a href="/users/edit"><i class="icon-cogs"></i> Account</a></li>
<li><a href="/profiles/edit"><i class="icon-user"></i> Profile</a></li>
</ul>
</li>
<li class='remove_if_signed_in'><a href="/users/sign_up"><i class="icon-edit"></i> Sign up</a></li>
<li class='remove_if_signed_in'><a href="/users/sign_in?redirect_to=http%3A%2F%2Fopenruby.com%2Fbitcoin%2Fsites%2Fbrainlesstales.com"><i class="icon-signin"></i> Sign in</a></li>
<li class='remove_if_not_signed_in'><a href="/users/sign_out?redirect_to=http%3A%2F%2Fopenruby.com%2Fbitcoin%2Fsites%2Fbrainlesstales.com" data-method="delete" rel="nofollow"><i class="icon-signout"></i> Sign out</a></li>
</ul>
</div>
<div class='span7 clearfix'>
<ul class='unstyled'>
<li class='like'>
<fb:like href="http://openruby.com" layout="button_count"></fb:like>
</li>
<li class='like'><a href="http://twitter.com/openruby" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false">Follow @openruby</a></li>
<li class='like'><g:plusone size="medium" callback="GATrackGooglePlusOne" href="http://openruby.com"></g:plusone></li>
</ul>
</div>
</div>
</div>
</div>
</div>

<div class='container'>
<div class='content' id='bd'>
<div class='row'>
<div class='span7'>
<ul class="breadcrumb">
      <li>
        <a href="/bitcoin">Bitcoin</a>
        <span class="divider">&raquo;</span>
      </li>
      <li>
        <a href="/bitcoin/sites">Sites</a>
        <span class="divider">&raquo;</span>
      </li>
</ul>
<div class='section'><div class='site_info clearfix' itemscope itemtype='http://schema.org/Organization'>
<div class='site_rank_box badge pull-right'>#NA</div>
<h3 class='name' itemprop='name'><a href="http://openruby.com/bitcoin/sites/brainlesstales.com" itemprop="url">brainlesstales.com</a></h3>
<h4 class='title'><a href="http://openruby.com/bitcoin/sites/brainlesstales.com">http://openruby.com/bitcoin/sites/brainlesstales.com</a></h4>
<p class='description' itemprop='description'>

</p>
<div class='likes_bar clearfix'>
<div class='item tweet'>
<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://openruby.com/bitcoin/sites/brainlesstales.com" data-text=" (brainlesstales.com) on OpenRuby.com" data-count="horizontal" data-via="openruby">Tweet</a>
</div>
<div class='item g_plusone'><g:plusone size="medium" callback="GATrackGooglePlusOne" href="http://openruby.com/bitcoin/sites/brainlesstales.com"></g:plusone></div>
<div class='item fb_like'><fb:like href="http://openruby.com/bitcoin/sites/brainlesstales.com" layout="button_count"></div>
</div>

</div>
</div>
<div class='section'><ul class='pages_list unstyled'>
<li class='page clearfix section'>
<div class='fb_like'><fb:like href="http://openruby.com/bitcoin/pages/7673459-bitcoin-brainless-tales" layout="button_count"></fb:like></div>
<a href="http://openruby.com/bitcoin/pages/7673459-bitcoin-brainless-tales"><img alt="Bitcoin" class="page_image thumbnail" height="82" id="page_7673459_image_100" src="http://static.openruby.com/assets/pages/63/f7/63f7d3a57b79ac2d6c8b5b79e79317d7_100.jpg" width="100" /></a>
<div class='content'>
<h4 class='title'>
<a href="http://openruby.com/bitcoin/pages/7673459-bitcoin-brainless-tales">Bitcoin - Brainless Tales</a>
</h4>
<div class='page_info'>
<span class='page_from'>
<a href="http://openruby.com/bitcoin/sites/brainlesstales.com">brainlesstales.com</a>
</span>
<abbr class='my_special_datetime msd_format_datetime' title='Mon, 15 Oct 2012 07:02:00 GMT'>15 Oct '12, 7am</abbr>
</div>
<p class='page_content'>
Bitcoin tips happily excepted: 12UKTjwSuTHP6fTXGaqeM1XVdRpCt5AYnY Brainless Tales was born and raised in Dreadville.
</p>
</div>
<div class='similar_pages_list'>
<h5>Related:</h5>
<ol class='similar_pages unstyled'>
<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/7665521-bitcoin-crowdfounding">Bitcoin Crowdfounding.</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/bitcointalk.org">bitcointalk.org</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Sun, 14 Oct 2012 22:12:05 GMT'>14 Oct '12, 10pm</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/7678702-fbi-explores-the-implications-of-bitcoin-techdirt">FBI Explores The Implications Of Bitcoin | Techdirt</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/techdirt.com">techdirt.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Mon, 15 Oct 2012 11:36:49 GMT'>15 Oct '12, 11am</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/7716069-quantitative-analysis-of-the-full-bitcoin-transaction-graph">Quantitative Analysis of the Full Bitcoin Transaction Graph by Dorit Ron an...</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/eprint.iacr.org">eprint.iacr.org</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Tue, 16 Oct 2012 17:46:23 GMT'>16 Oct '12, 5pm</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/7673212-1x-btc-bitcoin-moneda-electronica-criptomoneda-cibermoneda">1x Btc Bitcoin Moneda Electronica Criptomoneda Cibermoneda - $ 6.600 en Mer...</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/articulo.mercadolibre.cl">articulo.mercadolibre.cl</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Mon, 15 Oct 2012 06:40:21 GMT'>15 Oct '12, 6am</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/7664778-un-mercado-laboral-sin-fronteras">un mercado laboral sin fronteras</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/elbitcoin.org">elbitcoin.org</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Sun, 14 Oct 2012 21:19:38 GMT'>14 Oct '12, 9pm</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/7693483-bitstamp-under-ddos">Bitstamp Under DDoS</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/bitcoinmagazine.net">bitcoinmagazine.net</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Mon, 15 Oct 2012 23:15:32 GMT'>15 Oct '12, 11pm</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/7665383-bitcoin-technical-analysis">Bitcoin Technical Analysis</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/blog.bitcoinwatch.com">blog.bitcoinwatch.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Sun, 14 Oct 2012 22:05:45 GMT'>14 Oct '12, 10pm</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/7647978-nerd">Nerd</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/maxkeiser.com">maxkeiser.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Sun, 14 Oct 2012 02:34:25 GMT'>14 Oct '12, 2am</abbr>
</li>

</ol>
</div>

</li>
</ul>
</div>

</div>
<div class='span5'>
<div class='section section-nb'>
<div class='centered-300'><div id="mpu_top"><!-- /1010898/sglinks_300x250_top -->
<div id='div-gpt-ad-1406186418460-0' style='width:300px; height:250px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1406186418460-0'); });
</script>
</div></div></div>
</div>
<div class='section section-nb'>
<h3>Related</h3>
<p><dl class='dl-horizontal'>
</dl>
</p>
</div>

</div>
</div>


</div>
</div>
<footer>
<div class='container'>
<div class='content'>
<div class='row sc-section'>
<div class='span4 sc-section'>
<div class='well'>
<h3>Stay updated with OpenRuby.com</h3>
<div class='section'>
<div class='mailchimp_signup'>
<form accept-charset="UTF-8" action="http://openruby.us2.list-manage.com/subscribe/post?u=d03e91fc72f6454ee7b8e53eb&amp;id=7edf5507bd" class="form-inline" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="gaxtBNwUzCNBk+xQqsI1rfxGDHwsY6TMULCwrTBkS9A=" /></div>

<input id="EMAIL" name="EMAIL" placeholder="Email" type="text" />
<input class="btn" name="commit" type="submit" value="Subscribe" />
</form>

</div>

</div>
<div class='section'>
<fb:like href="http://openruby.com" width="260" show_faces="true" colorscheme="dark"></fb:like>
</div>
<div class='section'>
<a href="http://twitter.com/openruby" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false">Follow @openruby</a>
</div>
<div class='section'>
<g:plusone callback="GATrackGooglePlusOne" href="http://openruby.com"></g:plusone>
</div>
</div>
</div>
<div class='span4 sc-section'>
<div class='centered-300'><div id="mpu_bottom"><!-- /1010898/sglinks_300x250_bottom -->
<div id='div-gpt-ad-1406186418460-1' style='width:300px; height:250px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1406186418460-1'); });
</script>
</div></div></div>
</div>
<div class='span4 sc-section'>
<div class='centered-300'><fb:recommendations site="openruby.com" width="300" height="300" header="false" colorscheme="dark" font="" border_color="#222"></fb:recommendations></div>
</div>
</div>
<div class='row sc-section'>
<div class='span12'>
<p>
<a href="/pages/new">Contribute an Article</a>
&nbsp; &middot; &nbsp;
<a href="/submitted_sites/new">Submit a Site</a>
&nbsp; &middot; &nbsp;
<a href="/comments">Comments</a>
&nbsp; &middot; &nbsp;
<a href="/about">About Us</a>
&nbsp; &middot; &nbsp;
<a href="/tos">Terms of Service</a>
&nbsp; &middot; &nbsp;
<a href="/privacy">Privacy Policy</a>
&nbsp; &middot; &nbsp;
<script type="text/javascript">eval(decodeURIComponent('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%27%3c%61%20%68%72%65%66%3d%5c%22%6d%61%69%6c%74%6f%3a%63%6f%6e%74%61%63%74%40%6f%70%65%6e%72%75%62%79%2e%63%6f%6d%3f%73%75%62%6a%65%63%74%3d%41%64%76%65%72%74%69%73%69%6e%67%25%32%30%45%6e%71%75%69%72%79%25%32%30%66%6f%72%25%32%30%4f%70%65%6e%52%75%62%79%2e%63%6f%6d%5c%22%3e%41%64%76%65%72%74%69%73%65%3c%5c%2f%61%3e%27%29%3b'))</script>
&nbsp; &middot; &nbsp;
<script type="text/javascript">eval(decodeURIComponent('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%27%3c%61%20%68%72%65%66%3d%5c%22%6d%61%69%6c%74%6f%3a%63%6f%6e%74%61%63%74%40%6f%70%65%6e%72%75%62%79%2e%63%6f%6d%3f%73%75%62%6a%65%63%74%3d%45%6e%71%75%69%72%79%25%32%30%66%6f%72%25%32%30%4f%70%65%6e%52%75%62%79%2e%63%6f%6d%5c%22%3e%43%6f%6e%74%61%63%74%20%55%73%3c%5c%2f%61%3e%27%29%3b'))</script>
</p>
<p>
&copy; 2010-2012 Jeyel Media (UK) Limited. All Rights Reserved. 
</p>
</div>
</div>
</div>
</div>
</footer>
<div id="interstitial"><!-- /1010898/sglinks_1x1 -->
<div id='div-gpt-ad-1406186418460-2' style='width:1px; height:1px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1406186418460-2'); });
</script>
</div></div>

</body>
</html>


