http://bog.no-ip.biz/sc2/stream2vlc.php
HTTP/1.0 200 OK
Content-type: text/html
Connection: close
Date: Wed, 23 Jul 2014 19:57:17 GMT
Server: lighttpd/1.4.33

<html><head><title>bog's awesome stream -&gt; vlc script</title>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js'></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js'></script>
<script type='text/javascript' src='/zeroclipboard/ZeroClipboard.js'></script>
<script type="text/javascript" src="stream2vlc.js"></script>
<script type="text/javascript">
/* <![CDATA[ */ (function() {
        var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
        s.type = 'text/javascript'; s.async = true; s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
        t.parentNode.insertBefore(s, t);})();/* ]]> */</script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>
	<h1>bog's awesome stream2vlc script</h1>
	<div id="fb-root"></div>
	
	<div style="float:left;">
		<form onsubmit="return false;">
			<fieldset><legend><label for="channelname">Choose yer channel</label></legend>
				<span title="www.twitch.tv/CHANNELNAME" style="cursor:help">Channel name:</span> <input id="channelname" name="channelname" /><br/>
				Hoster: <input type="radio" name="hoster" id="justin" value="justin" /><label for="justin">justin/twitch</label> <input type="radio" name="hoster" id="mlg" value="mlg" /><label for="mlg">MLGtv</label><br/>
				<input type="submit" value="DATA, ON SCREEN!" accesskey="s" /> <span id="history"></span>
			</fieldset>
			<span><br /><img id="loadingindicator" src="http://i.imgur.com/KFsEBYQ.gif" style="display:none;" /></span>
		</form>
	</div>
	
	<br style="clear: both;" />
	
	<h2 style="float:left; margin:0px;">Command line</h2>
	<span style="margin-left: 30px;">Quality: <select id="qualityselector"></select></span>
	<span id="clipboardbuttons" style="margin-left: 20px;"></span>
	<br style="clear: both;" />
	<textarea id="commandline" style="width:100%"></textarea>
	
	<h2>HowTo</h2>
	<div><ol>
		<li>grab yourself a copy of <a href="http://www.videolan.org/vlc/">VLC</a> or <a href="http://nightly.mpc-hc.org/">MPC-HC</a></li>
		<li>enter a valid <img style="background: black;" src="http://i1082.photobucket.com/albums/j371/austintespa/TwitchTV-Logo2.png" height="20" />/<img src="http://upload.wikimedia.org/wikipedia/en/archive/1/17/20101125144920!Jtv-Logo.png" height="20" />/<img src="http://assets.vg247.com/current//2013/08/20130829_major_league_gaming_mlg.jpg" height="20" /> <span style="font-weight:bold;">channel name</span></li>
		<li>enter the resulting URL into VLC -&gt; 
		<kbd class="keyboard-key nowrap" style="border: 1px solid #aaa; -moz-border-radius: 2px; -webkit-border-radius: 2px; border-radius: 2px; -moz-box-shadow: 1px 2px 2px #ddd; -webkit-box-shadow: 1px 2px 2px #ddd; box-shadow: 1px 2px 2px #ddd; background-color: #f9f9f9; background-image: -moz-linear-gradient(top, #eee, #f9f9f9, #eee); background-image: -o-linear-gradient(top, #eee, #f9f9f9, #eee); background-image: -webkit-linear-gradient(top, #eee, #f9f9f9, #eee); background-image: linear-gradient(top, #eee, #f9f9f9, #eee); padding: 1px 3px; font-family: sans serif; font-size: 0.85em;">^ Ctrl</kbd> + <kbd class="keyboard-key nowrap" style="border: 1px solid #aaa; -moz-border-radius: 2px; -webkit-border-radius: 2px; border-radius: 2px; -moz-box-shadow: 1px 2px 2px #ddd; -webkit-box-shadow: 1px 2px 2px #ddd; box-shadow: 1px 2px 2px #ddd; background-color: #f9f9f9; background-image: -moz-linear-gradient(top, #eee, #f9f9f9, #eee); background-image: -o-linear-gradient(top, #eee, #f9f9f9, #eee); background-image: -webkit-linear-gradient(top, #eee, #f9f9f9, #eee); background-image: linear-gradient(top, #eee, #f9f9f9, #eee); padding: 1px 3px; font-family: sans serif; font-size: 0.85em;">N</kbd>
			or MPC-HC -&gt; 
			<kbd class="keyboard-key nowrap" style="border: 1px solid #aaa; -moz-border-radius: 2px; -webkit-border-radius: 2px; border-radius: 2px; -moz-box-shadow: 1px 2px 2px #ddd; -webkit-box-shadow: 1px 2px 2px #ddd; box-shadow: 1px 2px 2px #ddd; background-color: #f9f9f9; background-image: -moz-linear-gradient(top, #eee, #f9f9f9, #eee); background-image: -o-linear-gradient(top, #eee, #f9f9f9, #eee); background-image: -webkit-linear-gradient(top, #eee, #f9f9f9, #eee); background-image: linear-gradient(top, #eee, #f9f9f9, #eee); padding: 1px 3px; font-family: sans serif; font-size: 0.85em;">^ Ctrl</kbd> + <kbd class="keyboard-key nowrap" style="border: 1px solid #aaa; -moz-border-radius: 2px; -webkit-border-radius: 2px; border-radius: 2px; -moz-box-shadow: 1px 2px 2px #ddd; -webkit-box-shadow: 1px 2px 2px #ddd; box-shadow: 1px 2px 2px #ddd; background-color: #f9f9f9; background-image: -moz-linear-gradient(top, #eee, #f9f9f9, #eee); background-image: -o-linear-gradient(top, #eee, #f9f9f9, #eee); background-image: -webkit-linear-gradient(top, #eee, #f9f9f9, #eee); background-image: linear-gradient(top, #eee, #f9f9f9, #eee); padding: 1px 3px; font-family: sans serif; font-size: 0.85em;">O</kbd>
			</li>
	</ol></div>
	
	<h2>NOTE</h2>
	<div>
		<ul>
			<li>This script will now also output URLs for <a href="http://tv.majorleaguegaming.com/">MLGtv streams</a> (@der_rod did all the work, @bogenpirat did all the lazy)</li>
			<li><span style="color:red;font-weight:bold">RTMP IS GONE, WE ARE ALL DOOMED!</span> But there's HLS now, and it's way easier to use, so yay!</li>
			<li>Added options to use R1CH's proxy for strictly American servers as well as creation of ffmpeg -i compatible "URLs".</li>
			<li>Sorry guys, DynDNS killed the .mine.nu DNS redirection. Bookmark this (<script>document.write(document.location.toString());</script>) instead</li>
			<li>Added a history for the last 10 streams. Saved locally in cookies, hopefully it works in relevant browsers.</li>
			<li>looks like Twitch has started using their tokens better. Long lines with a "-j" token might not work.</li>
			<li>@RePod37 kindly pointed out to me that <a href="http://nightly.mpc-hc.org/">MPC-HC</a> (clearly the best video player in existence) can be used instead of VLC, too!</li>
			<li>VLC now exits after playback (thanks @Asdayasman)</li>
			<li>note the shiny new copy to clipboard buttons! (needs flash, idea: @maximovnick)</li>
			<li>hammering/abusing this as an API service will yield collective punishment</li>
		</ul>
	</div>
	
	<h2>Contact / Social</h2>
	<div>
		<a href="https://twitter.com/intent/tweet?screen_name=bogenpirat" class="twitter-mention-button" data-related="bogenpirat" data-dnt="true">Tweet to @bogenpirat</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<br />
		<a href="https://twitter.com/share" class="twitter-share-button" data-via="bogenpirat" data-dnt="true">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<br />
		<div class="fb-like" data-href="http://bog.no-ip.biz/sc2/stream2vlc.php" data-layout="button_count" data-show-faces="false" data-font="tahoma"></div>
		<br />
		<div class="g-plusone" data-size="small"></div>
	</div>
	
	<div id="SENDMEMONEYPLSIMSTARVING" style="position:absolute;right:1em;top:1em;text-align:center;float:right;">
		<h3 style="margin-bottom:0px;">Support this script's maker!</h3>
		<script id='fbh8kh1'>(function(i){var f,s=document.getElementById(i);f=document.createElement('iframe');f.src='//api.flattr.com/button/view/?uid=bog&button=compact&url='+encodeURIComponent(document.URL);f.title='Flattr';f.height=20;f.width=110;f.style.borderWidth=0;s.parentNode.insertBefore(f,s);})('fbh8kh1');</script>
		<br/>Bitcoin address: <a href="bitcoin:15VMf7nUNgCutmQrGKu2gSQaLYfG9VtH74?label=bog's%20awesome%20stream%20-%3E%20vlc%20script" alt="send me all of your bitcoins!"><span style="font-size: 0.5em">15VMf7nUNgCutmQrGKu2gSQaLYfG9VtH74</span></a>
		<br/><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIH4QYJKoZIhvcNAQcEoIIH0jCCB84CAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYCxXlKXFsZx4mQMNDccf0OyWML9IKcb9FRvhEhjDxjCyz3VDDHtrdreePTK8W7sdL+d+rLM4B1OGlnJPdDr/1gntUcd1/oiiuQYqGrghANrbLd3kVrOu4TsAsWSPND4eyCXRLeX54xvSvcZhQiwFzJ1cTwibRVdbjzVkO2PbF8AKzELMAkGBSsOAwIaBQAwggFdBgkqhkiG9w0BBwEwFAYIKoZIhvcNAwcECEXZWa0sJPAfgIIBOKC7e4hPmhX9d+FEoFupg1a3tTl8nn0go6D5vWGMVTl6WwQq6cFT98r9FZ2qUfvu70ul1KmWD1Vq0IWXpvYCv6IXz7ACEew4uymkOf3M/Xw6qzrXXrlXeTYgdFYOrDzowoPnPiQGD7c95NZ2R3ab65PcEqvlgvuboljvG0PwqYrcRLd1hiPWxImr4Bw+7VI5pPE2BWS+npqKPs/i3m8kj4HyAMidKy3spO0UsEtuaZ+D3Z1YhF1hS3fVpeMsUcnt5Q5Pn1rKbg4S8X6krzBcO690mGkTHXQtSqayvSNd/pK/jrokguEhG/Fqa4yRHu8BLC8s+iuoZ5gYPTWYjJVRrSv+eJDs6BBwACu2OgoPcMJKNBePBePbawXq8KJ6GfE2VXV0eR0yxxEirrGCz6I2Wm3zc//f5VFCD6CCA4cwggODMIIC7KADAgECAgEAMA0GCSqGSIb3DQEBBQUAMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbTAeFw0wNDAyMTMxMDEzMTVaFw0zNTAyMTMxMDEzMTVaMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbTCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEAwUdO3fxEzEtcnI7ZKZL412XvZPugoni7i7D7prCe0AtaHTc97CYgm7NsAtJyxNLixmhLV8pyIEaiHXWAh8fPKW+R017+EmXrr9EaquPmsVvTywAAE1PMNOKqo2kl4Gxiz9zZqIajOm1fZGWcGS0f5JQ2kBqNbvbg2/Za+GJ/qwUCAwEAAaOB7jCB6zAdBgNVHQ4EFgQUlp98u8ZvF71ZP1LXChvsENZklGswgbsGA1UdIwSBszCBsIAUlp98u8ZvF71ZP1LXChvsENZklGuhgZSkgZEwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tggEAMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADgYEAgV86VpqAWuXvX6Oro4qJ1tYVIT5DgWpE692Ag422H7yRIr/9j/iKG4Thia/Oflx4TdL+IFJBAyPK9v6zZNZtBgPBynXb048hsP16l2vi0k5Q2JKiPDsEfBhGI+HnxLXEaUWAcVfCsQFvd2A1sxRr67ip5y2wwBelUecP3AjJ+YcxggGaMIIBlgIBATCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwCQYFKw4DAhoFAKBdMBgGCSqGSIb3DQEJAzELBgkqhkiG9w0BBwEwHAYJKoZIhvcNAQkFMQ8XDTEzMTIxODIwMDA0NFowIwYJKoZIhvcNAQkEMRYEFFVQBsF7fAcWNJY5g/Hfmhq13l8DMA0GCSqGSIb3DQEBAQUABIGAliy/bzqvpOnzWHV2y588rWPaYjLDGAX785yo1bNZX3teeatcOznwrclCtFa2T+aSNqSB/2wVWut3o7qxB8ZMbi13OS+LXMQi3wVKgok5YIsMc2WsjRMJkkLn/L2ooeSs5pxGRIesxtOX/NRqpJ8SYGSBwNAmey6UZwQveAYZsdo=-----END PKCS7-----
			">
			<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG_global.gif" border="0" name="submit" alt="PayPal � The safer, easier way to pay online.">
			<img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
			</form>
	</div>
</body>
</html>

