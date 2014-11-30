http://openruby.com/bitcoin/sites/bitcoin.clarkmoody.com
HTTP/1.1 200 
Server: cloudflare-nginx
Date: Wed, 23 Jul 2014 04:18:12 GMT
Content-Type: text/html; charset=utf-8
Connection: close
Set-Cookie: __cfduid=d02223ef476e97a8dcad76f3401626d541406089091833; expires=Mon, 23-Dec-2019 23:50:00 GMT; path=/; domain=.openruby.com; HttpOnly
X-Powered-By: Phusion Passenger (mod_rails/mod_rack) 3.0.17
X-UA-Compatible: IE=Edge,chrome=1
Cache-Control: max-age=0, private, must-revalidate
X-Request-Id: 1d7d276055273350a045c2b8b83ac562
X-Runtime: 0.400240
X-Rack-Cache: miss
Set-Cookie: _sglinks_session=f5b962ae16dcd892b95d55c4a129faeb; path=/; HttpOnly
Set-Cookie: current_user_id=; path=/; expires=Thu, 01-Jan-1970 00:00:00 GMT
Set-Cookie: current_user_email=; path=/; expires=Thu, 01-Jan-1970 00:00:00 GMT
Status: 200
Vary: Accept-Encoding
CF-RAY: 14e51297f8aa020c-IAD
Content-Encoding: gzip

<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<title>Bitcoin.Clarkmoody.Com Site Info - OpenRuby.com</title>
<meta content="authenticity_token" name="csrf-param" />
<meta content="ZLPSf1AbmoNvCbv4nnW7oJBBLlCgbRTh4ltYLQh5ADI=" name="csrf-token" />
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
googletag.defineSlot('/1010898/sglinks_300x250_top', [300, 250], 'div-gpt-ad-1406082300527-0').addService(googletag.pubads()).setTargeting("host", "openruby.com");
googletag.defineSlot('/1010898/sglinks_300x250_bottom', [300, 250], 'div-gpt-ad-1406082300527-1').addService(googletag.pubads()).setTargeting("host", "openruby.com");
googletag.defineSlot('/1010898/sglinks_1x1', [1, 1], 'div-gpt-ad-1406082300527-2').addService(googletag.pubads()).setTargeting("host", "openruby.com");
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
<li class='remove_if_signed_in'><a href="/users/sign_in?redirect_to=http%3A%2F%2Fopenruby.com%2Fbitcoin%2Fsites%2Fbitcoin.clarkmoody.com"><i class="icon-signin"></i> Sign in</a></li>
<li class='remove_if_not_signed_in'><a href="/users/sign_out?redirect_to=http%3A%2F%2Fopenruby.com%2Fbitcoin%2Fsites%2Fbitcoin.clarkmoody.com" data-method="delete" rel="nofollow"><i class="icon-signout"></i> Sign out</a></li>
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
<h3 class='name' itemprop='name'><a href="http://openruby.com/bitcoin/sites/bitcoin.clarkmoody.com" itemprop="url">bitcoin.clarkmoody.com</a></h3>
<h4 class='title'><a href="http://openruby.com/bitcoin/sites/bitcoin.clarkmoody.com">Bitcoin Data Platform | RTBTC</a></h4>
<p class='description' itemprop='description'>
Real time order book, time and sales, and chart for Bitcoin trades on the MtGox exchange, featuring Clark Moody charts.
</p>
<div class='likes_bar clearfix'>
<div class='item tweet'>
<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://openruby.com/bitcoin/sites/bitcoin.clarkmoody.com" data-text="Bitcoin Data Platform | RTBTC (bitcoin.clarkmoody.com) on OpenRuby.com" data-count="horizontal" data-via="openruby">Tweet</a>
</div>
<div class='item g_plusone'><g:plusone size="medium" callback="GATrackGooglePlusOne" href="http://openruby.com/bitcoin/sites/bitcoin.clarkmoody.com"></g:plusone></div>
<div class='item fb_like'><fb:like href="http://openruby.com/bitcoin/sites/bitcoin.clarkmoody.com" layout="button_count"></div>
</div>

</div>
</div>
<div class='section'><ul class='pages_list unstyled'>
<li class='page clearfix section'>
<div class='fb_like'><fb:like href="http://openruby.com/bitcoin/pages/12747756-bitcoin-live-chart-clark-moody-design" layout="button_count"></fb:like></div>
<div class='content'>
<h4 class='title'>
<a href="http://openruby.com/bitcoin/pages/12747756-bitcoin-live-chart-clark-moody-design">Bitcoin Live Chart | Clark Moody Design</a>
</h4>
<div class='page_info'>
<span class='page_from'>
<a href="http://openruby.com/bitcoin/sites/bitcoin.clarkmoody.com">bitcoin.clarkmoody.com</a>
</span>
<abbr class='my_special_datetime msd_format_datetime' title='Wed, 10 Apr 2013 16:47:16 GMT'>10 Apr '13, 4pm</abbr>
</div>
<p class='page_content'>

</p>
</div>
<div class='similar_pages_list'>
<h5>Related:</h5>
<ol class='similar_pages unstyled'>
<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/12754944-bitcoin-prices-collapse-over-100-dollars-in-a-matter-of">Bitcoin prices collapse over $100 in a matter of hours</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/venturebeat.com">venturebeat.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Wed, 10 Apr 2013 20:01:29 GMT'>10 Apr '13, 8pm</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/12757384-bitcoin-rallies">Bitcoin Rallies</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/businessinsider.com">businessinsider.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Wed, 10 Apr 2013 21:14:00 GMT'>10 Apr '13, 9pm</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/12773678-april-11-bitcoin-is-falling-again">April 11: Bitcoin Is Falling Again</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/businessinsider.com">businessinsider.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Thu, 11 Apr 2013 09:42:59 GMT'>11 Apr '13, 9am</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/12741672-bitcoin-explained-mother-jones">Bitcoin, Explained | Mother Jones</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/motherjones.com">motherjones.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Wed, 10 Apr 2013 10:23:05 GMT'>10 Apr '13, 10am</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/12797833-mt-gox-reopens-after-bitcoin-trade-halt">Mt. Gox Reopens After Bitcoin Trade Halt</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/businessinsider.com">businessinsider.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Fri, 12 Apr 2013 01:57:31 GMT'>12 Apr '13, 1am</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/12779598-bitcoin-crash-continues">Bitcoin Crash Continues</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/businessinsider.com">businessinsider.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Thu, 11 Apr 2013 14:16:50 GMT'>11 Apr '13, 2pm</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/12749219-bitcoin-plunges">Bitcoin Plunges</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/businessinsider.com">businessinsider.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Wed, 10 Apr 2013 17:21:32 GMT'>10 Apr '13, 5pm</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/12724618-why-bitcoin-speculators-laugh-at-anyone-who-calls-it-a">Why Bitcoin Speculators Laugh At Anyone Who Calls It A &quot;Bubble&quot;</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/businessinsider.com">businessinsider.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Tue, 09 Apr 2013 20:19:35 GMT'>09 Apr '13, 8pm</abbr>
</li>

</ol>
</div>

</li>
<li class='page clearfix section'>
<div class='fb_like'><fb:like href="http://openruby.com/bitcoin/pages/6118735-bitcoin-live-chart-clark-moody-design" layout="button_count"></fb:like></div>
<div class='content'>
<h4 class='title'>
<a href="http://openruby.com/bitcoin/pages/6118735-bitcoin-live-chart-clark-moody-design">Bitcoin Live Chart | Clark Moody Design</a>
</h4>
<div class='page_info'>
<span class='page_from'>
<a href="http://openruby.com/bitcoin/sites/bitcoin.clarkmoody.com">bitcoin.clarkmoody.com</a>
</span>
<abbr class='my_special_datetime msd_format_datetime' title='Sun, 19 Aug 2012 17:53:21 GMT'>19 Aug '12, 5pm</abbr>
</div>
<p class='page_content'>

</p>
</div>
<div class='similar_pages_list'>
<h5>Related:</h5>
<ol class='similar_pages unstyled'>
<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/6105365-simple-php-bitcoin-shopping-site-bitcoin-portion-ecommerce">Simple PHP Bitcoin Shopping Site - Bitcoin Portion | eCommerce | PHP | Shop...</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/freelancer.com">freelancer.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Sun, 19 Aug 2012 04:39:40 GMT'>19 Aug '12, 4am</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/6125904-6-8-weeks-until-bitcoin-debit-slash-credit-card-says">6-8 Weeks Until Bitcoin Debit/Credit Card, says BitInstant » Coding In My S...</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/codinginmysleep.com">codinginmysleep.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Mon, 20 Aug 2012 02:13:37 GMT'>20 Aug '12, 2am</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/6103295-bitcoin-transaction">Bitcoin Transaction d2f25503cf1ddf56c65635d449b17c72c32e696cd7f4fca1aeb9439...</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/Blockchain.info">Blockchain.info</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Sun, 19 Aug 2012 02:05:19 GMT'>19 Aug '12, 2am</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/6138822-wikileaks-bypasses-financial-blockade-with-bitcoin">WikiLeaks Bypasses Financial Blockade With Bitcoin</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/forbes.com">forbes.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Mon, 20 Aug 2012 13:49:59 GMT'>20 Aug '12, 1pm</abbr>
</li>

</ol>
</div>

</li>
<li class='page clearfix section'>
<div class='fb_like'><fb:like href="http://openruby.com/bitcoin/pages/5367312-bitcoin-data-platform-clark-moody-design" layout="button_count"></fb:like></div>
<div class='content'>
<h4 class='title'>
<a href="http://openruby.com/bitcoin/pages/5367312-bitcoin-data-platform-clark-moody-design">Bitcoin Data Platform | Clark Moody Design</a>
</h4>
<div class='page_info'>
<span class='page_from'>
<a href="http://openruby.com/bitcoin/sites/bitcoin.clarkmoody.com">bitcoin.clarkmoody.com</a>
</span>
<abbr class='my_special_datetime msd_format_datetime' title='Fri, 20 Jul 2012 02:28:13 GMT'>20 Jul '12, 2am</abbr>
</div>
<p class='page_content'>
Donate: 1BVLbn7fZbQuNczNu7Mykw22EoFYx4DCf4
</p>
</div>
<div class='similar_pages_list'>
<h5>Related:</h5>
<ol class='similar_pages unstyled'>
<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/5367309-bitcoin-charts">Bitcoin charts</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/BTCCharts.com">BTCCharts.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Fri, 20 Jul 2012 01:40:34 GMT'>20 Jul '12, 1am</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/5377884-bitcoin-blog-the-bitcoin-trader-bitcoins-renaissance-the">Bitcoin Blog | The Bitcoin Trader: Bitcoin&#x27;s Renaissance - The Stats</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/thebitcointrader.com">thebitcointrader.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Fri, 20 Jul 2012 19:19:41 GMT'>20 Jul '12, 7pm</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/5380607-bitcoin-blog-the-bitcoin-trader-increasing-readership-in-the">Bitcoin Blog | The Bitcoin Trader: Increasing Readership in the Bitcoin Sub...</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/thebitcointrader.com">thebitcointrader.com</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Fri, 20 Jul 2012 22:45:02 GMT'>20 Jul '12, 10pm</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/5367491-comparing-paypal-with-bitcoin">Comparing Paypal with Bitcoin</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/bitcointalk.org">bitcointalk.org</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Thu, 19 Jul 2012 12:58:05 GMT'>19 Jul '12, 12pm</abbr>
</li>

<li>
<span class='title'><a href="http://openruby.com/bitcoin/pages/5374904-bets-of-bitcoin">Bets of Bitcoin</a></span>
<span class='page_from'><a href="http://openruby.com/bitcoin/sites/betsofbitco.in">betsofbitco.in</a></span>
<abbr class='my_special_datetime msd_format_datetime' title='Fri, 20 Jul 2012 15:34:42 GMT'>20 Jul '12, 3pm</abbr>
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
<div id='div-gpt-ad-1406082300527-0' style='width:300px; height:250px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1406082300527-0'); });
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
<form accept-charset="UTF-8" action="http://openruby.us2.list-manage.com/subscribe/post?u=d03e91fc72f6454ee7b8e53eb&amp;id=7edf5507bd" class="form-inline" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="ZLPSf1AbmoNvCbv4nnW7oJBBLlCgbRTh4ltYLQh5ADI=" /></div>

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
<div id='div-gpt-ad-1406082300527-1' style='width:300px; height:250px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1406082300527-1'); });
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
<div id='div-gpt-ad-1406082300527-2' style='width:1px; height:1px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1406082300527-2'); });
</script>
</div></div>

</body>
</html>


