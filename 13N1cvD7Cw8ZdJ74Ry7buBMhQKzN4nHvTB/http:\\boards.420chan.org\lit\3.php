http://boards.420chan.org/lit/3.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Tue, 22 Jul 2014 08:07:45 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> Books &amp; Literature - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/lit_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/lit_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
	<link rel="stylesheet" type="text/css" href="/static/css/fonts.css" />	
	<link rel="stylesheet" type="text/css" href="/static/css/gritter.css" />	
	<link rel="stylesheet" type="text/css" href="/static/css/layout.css" />	
			
			<!-- Randy Theme -->
			<link rel="stylesheet" type="text/css" href="/static/css/randy.css" title="Randy" />
			<link rel="alternate stylesheet" type="text/css" href="/static/css/rainbow.css" title="Rainbow" />
			<link rel="alternate stylesheet" type="text/css" href="/static/css/classic.css" title="Classic" />
			<link rel="alternate stylesheet" type="text/css" href="/static/css/princess.css" title="Princess" />
		 		<script type="text/javascript">
			function Get_Cookie( name ) {
				var start = document.cookie.indexOf( name + "=" );
				var len = start + name.length + 1;
				if ( ( !start ) && ( name != document.cookie.substring( 0, name.length ) ) )
				{
					return null;
				}
				if ( start == -1 ) return null;
				var end = document.cookie.indexOf( ";", len );
				if ( end == -1 ) end = document.cookie.length;
				return unescape( document.cookie.substring( len, end ) );
			}
			function Set_Cookie( name, value, expires, path, domain, secure ) {
				var today = new Date();
				today.setTime( today.getTime() );
				if ( expires )
				{
					expires = expires * 1000 * 60 * 60 * 24;
				}
				var expires_date = new Date( today.getTime() + (expires) );
			
				document.cookie = name + "=" +escape( value ) +
					( ( expires ) ? ";expires=" + expires_date.toGMTString() : "" ) + //expires.toGMTString()
					( ( path ) ? ";path=" + path : "" ) + 
					( ( domain ) ? ";domain=" + domain : "" ) +
					( ( secure ) ? ";secure" : "" );
			}
			
			function Delete_Cookie( name, path, domain ) {
				if ( Get_Cookie( name ) ) document.cookie = name + "=" +
						( ( path ) ? ";path=" + path : "") +
						( ( domain ) ? ";domain=" + domain : "" ) +
						";expires=Thu, 01-Jan-1970 00:00:01 GMT";
			}
			Set_Cookie( 'test', 'none', '', '/', '', '' );
			if ( Get_Cookie( 'test' ) )
			{
				cookie_set = true;
				Delete_Cookie('test', '/', '');
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/lit/3.php';
			}
			else
			cookie_set = false;
			</script>
		
	
	<style type="text/css" media="screen">
		.replyheader {
			white-space: nowrap;
		}
	
		p.hidden {
			margin-left: 10px;
			font-weight: bold;
			font-size: 14px;
		}
		
		#quickreply {
			background: rgba(200,200,200,0.1);
			padding: 10px;
			margin: 10px;
			width: 468px;
			border-radius: 5px;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;			
		}
		.opqr {
			margin-left:0 !important;
		}
		#quickreply input, #quickreply textarea {
			border: 1px solid #666;
		}
		p.qrheader {
			margin-top: 0px;
			margin-left: 3px;
		}
	</style>
		
	<script type="text/javascript">

		function imageExpansion(image) {
			var original = $(image).children('img').attr('src');
			var target = $(image).attr('href');
			
			$(image).children('img').attr('src', target);
			$(image).attr('href', original);
			return false;
		}

		function toggleHidden(id) 
		{
			var hidden=getHidden();
			var e=document.getElementById(id);
			if(!e) return;
			for(var i=0;i<hidden.length;i++) if(hidden[i]==id) { removeHidden(id); } else { addHidden(id); }
		}

		function hideThread(id)
		{
			var e=document.getElementById(id);
			if (!e) return;
			e.style.display='none';
			$(e).after('<div class="showthread hidden'+id+'" style="float: right; font-size: 10px; margin-right: 4px; margin-top: 4px;"><a class="showlink" href="javascript:toggleHidden(\''+id+'\');">Show Thread</a></div><p class="hidden hidden'+id+'"><i>This thread has been hidden.</i></p>');
		}

		function showHiddenThread(id)
		{
			var e=document.getElementById(id);
			if (!e) return;
			e.style.display='block';
		}

		function addHidden(id)
		{
			var hidden=getHidden();
			for(var i=0;i<hidden.length;i++) if(hidden[i]==id) return;
			hidden.push(id);
			setHidden(hidden);
			hideThread(id);
			$.gritter.add({
				title: 'Thread Hidden!',
				text: 'This thread is now hidden.',
				image: '/static/images/faceicon.png',
				time: 2000
			});	
		}

		function removeHidden(id)
		{
			var hidden=getHidden();
			var newHidden=new Array();
			for(var i=0;i<hidden.length;i++) if(hidden[i]!=id) newHidden.push(hidden[i]);
			setHidden(newHidden);
			showHiddenThread(id);
			$.gritter.add({
				title: 'Thread Shown!',
				text: 'This thread is now displayed.',
				image: '/static/images/faceicon.png',
				time: 2000
			});	
			$('.hidden'+id).remove();
		}

		var emptyArray=['0'];
		function getHidden()
		{
			var cookie=get_cookie("hidden");
			if(cookie) return cookie.split(/,/);
			else return emptyArray;
		}

		function setHidden(sections) 
		{ 
		  set_cookie("hidden",sections.join(","),365);
		}		
		
		// Image Hiding
		function toggleHiddenImage(id) 
		{
			var hidden=getHiddenImages();
			var e=document.getElementById(id);
			if(!e) return;
			for(var i=0;i<hidden.length;i++) if(hidden[i]==id) { removeHiddenImage(id); } else { addHiddenImage(id); }
		}

		function hideImage(id)
		{
			var e=document.getElementById(id);
			if (!e) return;
			e.style.display='none';
			$(e).after('<div class="showthread hidden'+id+'" style="float: right; font-size: 10px; margin-right: 4px; margin-top: 4px;"><a class="showlink" href="javascript:toggleHidden(\''+id+'\');">Show Thread</a></div><p class="hidden hidden'+id+'"><i>This thread has been hidden.</i></p>');
		}

		function showHiddenImage(id)
		{
			var e=document.getElementById(id);
			if (!e) return;
			e.style.display='inline';
		}

		function addHiddenImage(id)
		{
			var hidden=getHiddenImages();
			for(var i=0;i<hidden.length;i++) if(hidden[i]==id) return;
			hidden.push(id);
			setHiddenImage(hidden);
			hideImage(id);
			$.gritter.add({
				title: 'Image Hidden!',
				text: 'This Image is now hidden.',
				image: '/static/images/faceicon.png',
				time: 2000
			});	
		}

		function removeHiddenImage(id)
		{
			var hidden=getHiddenImages();
			var newHidden=new Array();
			for(var i=0;i<hidden.length;i++) if(hidden[i]!=id) newHidden.push(hidden[i]);
			setHiddenImages(newHiddenImages);
			showHiddenThread(id);
			$.gritter.add({
				title: 'Thread Shown!',
				text: 'This thread is now displayed.',
				image: '/static/images/faceicon.png',
				time: 2000
			});	
			$('.hidden'+id).remove();
		}

		var emptyArray=['0'];
		function getHidden()
		{
			var cookie=get_cookie("hidden");
			if(cookie) return cookie.split(/,/);
			else return emptyArray;
		}

		function setHidden(sections) 
		{ 
		  set_cookie("hidden",sections.join(","),365);
		}		
		
		$(document).ready(function(){
			
			var hidden=getHidden();
			for(var i=0;i<hidden.length;i++) hideThread(hidden[i]);

			// AddPreviews();
			// KillOPLinks();
			// AddExpandAllButton();
			// QuickReplyReferencer();
			
			ReformatPosts(); //rename
			AddLoadReplyHook();
			
			// $('ul.dropdown li').hover(function(){
			// 	$(this).find('ul').stop().animate({'opacity' : '0.95'}, 500);
			// }, function(){
			// 	$(this).find('ul').stop().animate({'opacity' : '0'}, 500);
			// });
	
			// $.gritter.add({
			// 	title: '420chan Server Bill Donations',
			// 	text: '420chan needs to pay its bills! Look to the left of the post box to make a contribution with Bitcoin or donate directly to an invoice with PayPal',
			// 	image: '/static/images/faceicon.png',
			// 	sticky: false, 
			// 	time: 5000
			// });

					});
	</script>
	
	<svg width="1px" height="1px" version="1.1"	xmlns="http://www.w3.org/2000/svg" style="position:fixed;">
	<defs>
	<filter id="huehuehue">
	<feColorMatrix type="hueRotate" values="1">
	<animate      
	        attributeName="values" 
	        attributeType="XML"    
	        from="1" to="360"     
	        begin="0s" dur="2s" 
	        fill="freeze"
	    repeatDur="indefinite"
	    />    
	</feColorMatrix>
    
	</filter>
	</defs>
	</svg> 
	<script type="text/javascript">
	var colorTime = 0,
	    waveTheta = 0,
	    maxCount = 40,
	    colorIncrement = -12,
	    waveIncrement = 0.05,
	    xPos = [ -1, -0.5, 0, 0.5, 1 ],
	    yPos = [ -1, -0.5, 0, 0.5, 1 ],
	    props = {};

	var getTextShadow = function( x, y, hue ) {
	  return ', ' + x + 'px ' + y + 'px hsl(' + hue + ', 100%, 50%)';
	};

	var animate = function() {
	  var shadows = '0 0 transparent',
	      hue0 = colorTime % 360,
	      i, j, x, y,
	      iLen = xPos.length, 
	      jLen = yPos.length;

	  // outline
	  for ( i = 0; i < iLen; i++ ) {
	    x = xPos[i];
	    for ( j = 0; j < jLen; j++ ) {
	      y = yPos[j];
	      shadows += getTextShadow( x, y, hue0 );
	    }
	  }

	  // renders rainbow river
	  for ( i = 1; i < maxCount; i++ ) {
	    var normI = i / maxCount,
	        hue = ( normI * 360 * 2 + colorTime ) % 360;
	    x = ~~( ( Math.sin( normI * Math.PI * 2 + waveTheta ) - Math.sin( waveTheta ) )  * 50 );
	    y = i * 3;
	    shadows += getTextShadow( x, y, hue );
	  }

	  props.groovy.style.textShadow = shadows;
	  colorTime += colorIncrement;
	  waveTheta += waveIncrement;
	  setTimeout( animate, 30 );
	};

	var init = function() {
	    $( ".groovy" ).each(function( index ) {
	        props.groovy = this;
	    });
	    setTimeout( animate, 1 );
	};

	window.addEventListener( 'DOMContentLoaded', init, false);

	/* 2 */
	// <![CDATA[
	var speed=100; // speed colours change, 1 second = 1000
	var glow=3; // can be set from '0' for no glow, to 10
	var raincol=new Array("#ff0000", "#ff5500", "#ffaa00", "#ffff00", "#aaff00", "#55ff00", "#00ff00", "#00ff55", "#00ffaa", "#00ffff", "#00aaff", "#0055ff", "#0000ff", "#5500ff", "#aa00ff", "#ff00ff", "#ff00aa", "#ff0055"); // change the colours if you want to
	var alink=""; // page to link text to (set to ="" for no link)

	var rainbow, raintxt, raincnt=0;

	function addLoadEvent(funky) {
	  var oldonload=window.onload;
	  if (typeof(oldonload)!='function') window.onload=funky;
	  else window.onload=function() {
	    if (oldonload) oldonload();
	    funky();
	  }
	}

	addLoadEvent(regenbogen);

	function regenbogen() { if (document.getElementById) {
	  var i, rainbeau;
	  rainbow=document.getElementById("rainbow");
	  raintxt=rainbow.firstChild.nodeValue;
	  while (rainbow.childNodes.length) rainbow.removeChild(rainbow.childNodes[0]);
	  for (i=0; i<raintxt.length; i++) {
	    rainbeau=document.createElement("span");
	    rainbeau.setAttribute("id", "rain"+i);
	    rainbeau.appendChild(document.createTextNode(raintxt.charAt(i)));
	    if (alink) {
	      rainbeau.style.cursor="pointer";
	      rainbeau.onclick=function() { top.location.href=alink; }
	    }
	    rainbow.appendChild(rainbeau);
	  }
	  rainbow=setInterval ("raining()", speed);
	}}

	function raining() {
	  var i, c;
	  for (i=0; i<raintxt.length; i++) {
	    c=raincol[(i+raincnt)%raincol.length];
	    document.getElementById("rain"+i).style.color=c;
		if (glow) document.getElementById("rain"+i).style.textShadow=c+" 0px 0px "+glow+"px";
	  }
	  raincnt++;
	}
	// ]]>
	</script>
	<style type="text/css">		
		.icons {
		    background-image: url(/static/images/board_icons/spritesheet.png);
		    background-repeat: no-repeat;
		    display: block;
			float: left;
		}

		#icon_1701 {
		    width: 23px;
		    height: 24px;
		    background-position: -1px -1px;
		}

		#icon_420 {
		    width: 23px;
		    height: 24px;
		    background-position: -26px -1px;
		}

		#icon_616 {
		    width: 23px;
		    height: 24px;
		    background-position: -51px -1px;
		}

		#icon_ana {
		    width: 23px;
		    height: 24px;
		    background-position: -76px -1px;
		}

		#icon_ani {
		    width: 24px;
		    height: 25px;
		    background-position: -101px -1px;
		}

		#icon_art {
		    width: 24px;
		    height: 24px;
		    background-position: -127px -1px;
		}

		#icon_b {
		    width: 23px;
		    height: 24px;
		    background-position: -153px -1px;
		}

		#icon_benz {
		    width: 23px;
		    height: 24px;
		    background-position: -178px -1px;
		}

		#icon_cd {
		    width: 23px;
		    height: 24px;
		    background-position: -203px -1px;
		}

		#icon_chem {
		    width: 23px;
		    height: 24px;
		    background-position: -228px -1px;
		}

		#icon_crops {
		    width: 23px;
		    height: 24px;
		    background-position: -253px -1px;
		}

		#icon_del {
		    width: 23px;
		    height: 24px;
		    background-position: -278px -1px;
		}

		#icon_detox {
		    width: 23px;
		    height: 24px;
		    background-position: -303px -1px;
		}

		#icon_dino {
		    width: 23px;
		    height: 24px;
		    background-position: -328px -1px;
		}

		#icon_dis {
		    width: 23px;
		    height: 24px;
		    background-position: -353px -1px;
		}

		#icon_dr {
		    width: 23px;
		    height: 24px;
		    background-position: -378px -1px;
		}

		#icon_f {
		    width: 24px;
		    height: 24px;
		    background-position: -403px -1px;
		}

		#icon_fo {
		    width: 23px;
		    height: 24px;
		    background-position: -429px -1px;
		}

		#icon_ga {
		    width: 24px;
		    height: 24px;
		    background-position: -454px -1px;
		}

		#icon_gore {
		    width: 23px;
		    height: 24px;
		    background-position: -480px -1px;
		}

		#icon_h {
		    width: 24px;
		    height: 25px;
		    background-position: -505px -1px;
		}

		#icon_his {
		    width: 23px;
		    height: 24px;
		    background-position: -531px -1px;
		}

		#icon_hooch {
		    width: 24px;
		    height: 25px;
		    background-position: -556px -1px;
		}

		#icon_howto {
		    width: 24px;
		    height: 25px;
		    background-position: -582px -1px;
		}

		#icon_jenk {
		    width: 23px;
		    height: 24px;
		    background-position: -608px -1px;
		}

		#icon_lang {
		    width: 24px;
		    height: 24px;
		    background-position: -633px -1px;
		}

		#icon_law {
		    width: 23px;
		    height: 24px;
		    background-position: -659px -1px;
		}

		#icon_lit {
		    width: 23px;
		    height: 24px;
		    background-position: -684px -1px;
		}

		#icon_m {
		    width: 24px;
		    height: 24px;
		    background-position: -709px -1px;
		}

		#icon_math {
		    width: 23px;
		    height: 24px;
		    background-position: -735px -1px;
		}

		#icon_mdma {
		    width: 24px;
		    height: 25px;
		    background-position: -760px -1px;
		}

		#icon_med {
		    width: 24px;
		    height: 25px;
		    background-position: -786px -1px;
		}

		#icon_mma {
		    width: 23px;
		    height: 24px;
		    background-position: -812px -1px;
		}

		#icon_mtv {
		    width: 24px;
		    height: 25px;
		    background-position: -837px -1px;
		}

		#icon_n {
		    width: 23px;
		    height: 24px;
		    background-position: -863px -1px;
		}

		#icon_nc {
		    width: 24px;
		    height: 25px;
		    background-position: -888px -1px;
		}

		#icon_nj {
		    width: 24px;
		    height: 25px;
		    background-position: -914px -1px;
		}

		#icon_nom {
		    width: 24px;
		    height: 24px;
		    background-position: -940px -1px;
		}

		#icon_nra {
		    width: 23px;
		    height: 24px;
		    background-position: -966px -1px;
		}

		#icon_opi {
		    width: 23px;
		    height: 24px;
		    background-position: -991px -1px;
		}

		#icon_other {
		    width: 24px;
		    height: 24px;
		    background-position: -1016px -1px;
		}

		#icon_po {
		    width: 24px;
		    height: 25px;
		    background-position: -1042px -1px;
		}

		#icon_pol {
		    width: 23px;
		    height: 24px;
		    background-position: -1068px -1px;
		}

		#icon_prog {
		    width: 23px;
		    height: 24px;
		    background-position: -1093px -1px;
		}

		#icon_pss {
		    width: 23px;
		    height: 24px;
		    background-position: -1118px -1px;
		}

		#icon_psy {
		    width: 23px;
		    height: 24px;
		    background-position: -1143px -1px;
		}

		#icon_qq {
		    width: 24px;
		    height: 24px;
		    background-position: -1168px -1px;
		}

		#icon_sa {
		    width: 24px;
		    height: 25px;
		    background-position: -1194px -1px;
		}

		#icon_sagan {
		    width: 23px;
		    height: 24px;
		    background-position: -1220px -1px;
		}

		#icon_sd {
		    width: 23px;
		    height: 24px;
		    background-position: -1245px -1px;
		}

		#icon_smoke {
		    width: 23px;
		    height: 24px;
		    background-position: -1270px -1px;
		}

		#icon_spooky {
		    width: 23px;
		    height: 24px;
		    background-position: -1295px -1px;
		}

		#icon_sport {
		    width: 24px;
		    height: 24px;
		    background-position: -1320px -1px;
		}

		#icon_st {
		    width: 23px;
		    height: 24px;
		    background-position: -1346px -1px;
		}

		#icon_stim {
		    width: 23px;
		    height: 24px;
		    background-position: -1371px -1px;
		}

		#icon_tech {
		    width: 23px;
		    height: 24px;
		    background-position: -1396px -1px;
		}

		#icon_tesla {
		    width: 24px;
		    height: 24px;
		    background-position: -1421px -1px;
		}

		#icon_tg {
		    width: 24px;
		    height: 25px;
		    background-position: -1447px -1px;
		}

		#icon_tinfoil {
		    width: 24px;
		    height: 24px;
		    background-position: -1473px -1px;
		}

		#icon_vg {
		    width: 23px;
		    height: 24px;
		    background-position: -1499px -1px;
		}

		#icon_vroom {
		    width: 23px;
		    height: 24px;
		    background-position: -1524px -1px;
		}

		#icon_w {
		    width: 23px;
		    height: 24px;
		    background-position: -1549px -1px;
		}

		#icon_wc {
		    width: 23px;
		    height: 24px;
		    background-position: -1574px -1px;
		}

		#icon_weed {
		    width: 24px;
		    height: 25px;
		    background-position: -1599px -1px;
		}

		#icon_wooo {
		    width: 23px;
		    height: 24px;
		    background-position: -1625px -1px;
		}

		#crabby-shell { position:fixed; bottom:0; right:0; z-index:100 } /* crabby shell, get it?! GET IT?! */
		#crabby-bubble { font-family:"Comic Sans MS", "Times", cursive; font-size:15px; color:black; display:none; 
						position:absolute; z-index:10000; bottom:250px; right:40px; padding: 10px;  min-width:275px; 
						border:1px solid #000; background:#fffdca; -moz-border-radius:8px; -webkit-border-radius:8px; border-radius:8px; 
						-moz-box-shadow:9px 19px 19px rgba(0,0,0,0.43); }
		#crabby-bubble #crabby-arrow { width:42px; height:58px; background:url(/static/images/text-tail.png) no-repeat; 
										position:absolute; bottom:-58px; right:200px; }
		#crabby-bubble #crabby-text-close { position:absolute; top:0; right:6px; } 								
		#crabby-bubble a { color:blue; }
		#crabby-bubble a:hover { color:lightblue; }
		#crabby-bubble ul { list-style:disc; margin:5px 10px; }
		#crabby-bubble li { margin-left:10px; }
		#crabby-home #crabby-shell { position:relative; top:auto; right:auto; }

		#searchform { margin-top: 2px; }
		#searchform input {
			border-radius: 3px;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			background: #333;
			color: #ddd;
			border: 1px solid #444;
			font-size: 11px;
		}

		#header { margin-top: 40px; }
		ul.dropdown ul, ul.dropdown ul li { z-index: 599; }
		.postblock { display: none; }
		.debug {
			background: #404040;
			font-weight: bold;
			padding: 4px;
			margin: 4px;
			width: 500px;
			float:right;
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
			border-radius: 8px;
		}
		.debug p { margin: 4px; }
		body { margin: 0px; }
		.lock {
			background: #a0d0ff;
			border: 1px dotted #6080ff;
			clear: both;
			margin: 4px 6px;
			padding-top: 2px;
			max-width: 450px;
			overflow: auto;
			-moz-border-radius: 6px;
			-webkit-border-radius: 6px;
			border-radius: 6px;
		}
		.lock .banmsg, .lock .bannedby { color: darkblue; }
		.warn {
			background: #ffff66;
			border: 1px dotted #996600;
			clear: both;
			margin: 4px 6px;
			padding-top: 2px;
			max-width: 450px;
			overflow: auto;
			-moz-border-radius: 6px;
			-webkit-border-radius: 6px;
			border-radius: 6px;
		}
		.warn .banimage { margin-left: 10px; }
		.warn .banmsg, .warn .bannedby { color: #996600; }
		.warn .banmessages { max-width: 362px; }
		#rules { margin-left: auto; margin-right: auto; width: 400px; }
		frame { border:0; }
		.icon { vertical-align: middle; border: none; width: 24px; height: 24px; }
		#gritter-notice-wrapper { top: 34px; right:2.5%; }
	
				
		
		@-webkit-keyframes huehuehue {
		  0%   { -webkit-filter:hue-rotate(1deg); }
		  100% { -webkit-filter:hue-rotate(360deg); }
		} 
		@keyframes huehuehue {
		  0%   {  filter:hue-rotate(1deg); } 
		  100% {  filter:hue-rotate(360deg); }
		}
		@-webkit-keyframes inderp {
  		  0%  { -webkit-filter:invert(0); }
		  50%  { -webkit-filter:invert(100%); }
		  100%  { -webkit-filter:invert(0); }
		} 
		@keyframes inderp {
		  0%   {  filter:invert(0%); } 
		  50%   {  filter:invert(100%); } 
		  100% {  filter:invert(0%); }
		}
		@-webkit-keyframes barf {
		  0%   { -webkit-transform:rotate(1deg); }
		  100% { -webkit-transform:rotate(360deg); }
		} 
		@-moz-keyframes barf {
		  0%   { -moz-transform:rotate(1deg); }
		  100% { -moz-transform:rotate(360deg); }
		} 
		@keyframes barf {
		  0%   {  transform:rotate(1deg); } 
		  100% {  transform:rotate(360deg); }
		}	
		
	     .barf { -webkit-animation: barf 5s linear infinite normal; 
		-moz-animation: barf 5s linear infinite normal; 
		animation: barf 5s linear infinite normal;
		font-size: 20px; font-weight: bold;}
		
				
		.barf .thumb { -webkit-animation: barf 5s linear infinite normal; 
		-moz-animation: barf 5s linear infinite normal;
		}

		.lol .thumb { -webkit-animation: inderp 5s linear infinite normal;}

		.banned .thumb, .huehuehue .thumb {
			-webkit-animation: huehuehue 5s linear infinite normal;
			animation: huehuehue 5s linear infinite normal;
		}

		@-moz-document url-prefix() { 
			.banned .thumb, .huehuehue .thumb, .kcode .thumb, .kcode .board_icon, .kcode .icons{ filter:url(#huehuehue); }
			
		}
		
		.kcode .thumb, .kcode .board_icon, .kcode .icons{
			-webkit-animation: huehuehue 2s linear infinite normal, barf 4.5s linear infinite normal;
			-moz-animation: barf 4.5s linear infinite normal;
		}

		.groovy {
/*		  font: bold 80px 'Cooper Black', 'Cooper Std', 'Cooper Std Black', sans-serif;*/
		  font: bold 60px 'helvetica', 'arial', sans-serif;

/*		  text-align: center;*/
		  color: white;
		  margin: 0;
		  margin-bottom: 110px !important;
		  margin-left: 90px;
		  margin-right: 90px;
		}
	</style>
	
 	
	<!-- <script src="/crabby.js" type="text/javascript" charset="utf-8"></script> -->
	
	<script type="text/javascript" charset="utf-8">
		var Cookie = {
			/**
			 * Cached cookies.
			 */
			cache: {},

			/**
			 * Create a cookie. Can accept a third parameter as a literal object of options.
			 *
			 * @param key
			 * @param value
			 * @param options
			 */
			create: function(key, value, options) {
				options = $.extend({}, options);
				options.expires = options.expires || 1; // 1 hour

				if (typeof options.expires == 'number') {
					var hours = options.expires;
					options.expires = new Date();
					options.expires.setTime(options.expires.getTime() + (hours * 3600000));
				}

				var cookie = [
					encodeURIComponent(key) +'=',
					options.escape ? encodeURIComponent(value) : value,
					options.expires ? '; expires=' + options.expires.toUTCString() : '',
					options.path ? '; path=' + options.path : '',
					options.domain ? '; domain=' + options.domain : '',
					options.secure ? '; secure' : ''
				];

				document.cookie = cookie.join('');

				if (Cookie.cache) {
					if (options.expires.getTime() < (new Date()).getTime())
						delete Cookie.cache[key];
					else
						Cookie.cache[key] = value;
				}
			},

			/**
			 * Read a cookie.
			 *
			 * @param key
			 * @return string
			 */
			read: function(key) {
				// Use cache when available
				if (Cookie.cache[key])
					return Cookie.cache[key];

				var cache = {};
				var cookies = document.cookie.split(';');

				if (cookies.length > 0) {
					for (var i = 0; i < cookies.length; i++) {
						var parts = cookies[i].split('=');

						if (parts.length >= 2)
							cache[$.trim(parts[0])] = parts[1];
					}
				}

				Cookie.cache = cache;
				return cache[key] || null;
			},

			/**
			 * Delete a cookie.
			 *
			 * @param key
			 */
			erase: function(key, options) {
				if (!options) {
					options = { expires: -1 };

				} else if (!options.expires) {
					options.expires = -1;
				}

				Cookie.create(key, 0, options);
			}
		};
	</script>
	<script src="http://cdn.420chan.org/j/swfobject.js" type="text/javascript" charset="utf-8"></script>
	<!-- <script src="/crabbyspeech.js" type="text/javascript" charset="utf-8"></script> -->
	<script type="text/javascript">
		(function($) {
			$.fn.konami = function(options) {
				var opts = $.extend({}, $.fn.konami.defaults, options);
				return this.each(function() {
					var masterKey = [38,38,40,40,37,39,37,39,66,65];
					var controllerCode = [];
					$(window).keyup(function(evt) {
						var code = evt.keyCode ? evt.keyCode : evt.which;
						controllerCode.push(code);
						if(controllerCode.length === 10) {
							var bIsValid = true;
							for(var i = 0, l = masterKey.length; i < l; i++) {
								if(masterKey[i] !== controllerCode[i]) {
									bIsValid = false;
								} // end if
							} // end for
							if(bIsValid) {
								opts.cheat();
							} // end if
							controllerCode = [];
						} // end if
					}); // keyup
				}); // each
			}; // opts
			$.fn.konami.defaults = {
				cheat: null
			};
		})(jQuery);

		$(window).konami({
			cheat: function(){				
				$.gritter.add({
					title: 'WOAH THERE',
					text: 'HOT DAMN THAT\'S SOME GOOD STUFF LET ME HAVE A HIT OF THAT! WOW YOUR FACE TURNED INTO A BUTT',
					image: '/static/images/faceicon.png',
					sticky: false, 
					time: 5000
				});

				$('body').addClass('kcode');
								
				// Cookie.create('crabbyEnabled','If you delete this cookie you hate everything that is good and kind',{path:"/", expires: 24});
				// Cookie.create('nws','1',{path:"/", domain:".420chan.org", expires: 24});
				// Cookie.create('defaulttheme','randy',{path:"/", domain:".420chan.org", expires: 24});
				// Crabby.init();
			}
		});

		// var crabbyEnabled = Cookie.read('crabbyEnabled');
		// var fart = Cookie.read('nws');
		// var dookie = Cookie.read('defaulttheme');

		// if (crabbyEnabled) {
		// 	$(function() {
		// 		var crabNest = $('#crabby-home')
		// 		if(crabNest.length > 0)
		// 			Crabby.init('#crabby-home');
		// 		else
		// 			Crabby.init()
		// 	});
		// } else if (!crabbyEnabled) {	
		// 	if(fart) {
		// 		$(function() {
		// 				Crabby.init("yes")
		// 		});				
		// 	} else if (dookie) {
		// 		$(function() {
		// 				Crabby.init("yes")
		// 		});				
		// 	}
		// } 
				
	</script>
	
	<!-- <script type="text/javascript" src="/donationutilities/jwplayer.js"></script> -->
 </head> <body class="unknown">  <div class="brand-mamabar"> <div class="brand-mamabar-wrapper"> <ul class="brand-mamabar-list"> <li><a class="brand-mamabar-active">420chan</a></li> <li><a href="http://shop.taimalabs.com/">The Taima Shop</a></li>				 <li><a href="http://taimapedia.org/">Taimapedia</a></li> <!-- <li><a href="http://taima.tv/">TaimaTV</a></li> --> <!-- <li><a href="http://spyderlake.com/">Spyder Lake</a></li> --> </ul> <a href="http://www.taimalabs.com/" class="brand-mamabar-logo"> <img width="94" height="15" src="/static/images/taimalabs.png" alt="Taima Labs" /> </a> </div> </div> 
	<script src="/static/js/ext.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
	$(function() {
		var _0x1039=["\x67\x65\x74\x54\x69\x6D\x65","\x76\x61\x6C","\x5B\x6E\x61\x6D\x65\x3D\x62\x61\x6E\x61\x6E\x61\x5D","\x2F\x62\x75\x6E\x6B\x65\x72\x2F","\x50\x4F\x53\x54","\x6A\x73\x6F\x6E","\x3C\x69\x6E\x70\x75\x74\x20\x74\x79\x70\x65\x3D\x22\x68\x69\x64\x64\x65\x6E\x22\x20\x6E\x61\x6D\x65\x3D\x22\x62\x61\x6E\x61\x6E\x61\x22\x20\x76\x61\x6C\x75\x65\x3D\x22","\x72\x65\x73\x70\x6F\x6E\x73\x65","\x22\x3E","\x61\x70\x70\x65\x6E\x64","\x66\x6F\x72\x6D\x23\x71\x72\x70\x6F\x73\x74\x66\x6F\x72\x6D\x2C\x20\x66\x6F\x72\x6D\x23\x70\x6F\x73\x74\x66\x6F\x72\x6D","\x61\x6A\x61\x78","\x73\x75\x62\x6D\x69\x74"];var d= new Date()[_0x1039[0]]();$(_0x1039[10])[_0x1039[12]](function (_0x5016x2){if(!$(_0x1039[2])[_0x1039[1]]()){c= new Date()[_0x1039[0]]()-d+62742;$[_0x1039[11]]({url:_0x1039[3],type:_0x1039[4],data:{b:c},dataType:_0x1039[5],async:false,success:function (_0x5016x3){$(_0x1039[10])[_0x1039[9]](_0x1039[6]+_0x5016x3[_0x1039[7]]+_0x1039[8]);} });} ;$(this)[_0x1039[12]];} );

		$('span.idhighlight').click(function(){
			$('td.reply').removeClass('idhighlighted');
			array=[];
			array = $(this).html().split('ID:');
			array = array[1].split(' ');
			id = array[0];
			$('div.replyheader:contains("'+id+'")').parent().addClass('idhighlighted');
		});
	});
	</script>
	
	<style type="text/css" media="screen">
	
	blockquote img {
		max-width:32px;
		vertical-align: middle;
	}
	td.idhighlighted { 
		background: #305030;
	}
	td.idhighlighted div.replyheader {
		background: #204020;
	}
	#nowplaying { margin: 0px auto; background: rgba(0,0,0,0.2); width: 100%; text-align: center; font-size: 24px; font-weight: bold; text-shadow: 0px 1px 1px rgba(0,0,0,1); }
	#nowplaying p {  padding: 10px; margin: 0;}
		
		#statusbar {
			width: 100%;
			position: fixed;
			bottom: 0;
			height: 35px;
			padding: 1px 0;
			z-index: 99998;
			box-shadow: rgba(0,0,0,0.8) 0 1px 5px,rgba(255,255,255,0.15) 0 1px 0 inset;
			background: #333;
			background-image: -webkit-gradient(linear,50% 0,50% 100%,color-stop(0%,#444),color-stop(100%,#111));
			background-image: -webkit-linear-gradient(#444,#111);
			background-image: -moz-linear-gradient(#444,#111);
			background-image: -o-linear-gradient(#444,#111);
			background-image: linear-gradient(#444,#111);
			text-shadow: 0px -1px 0px rgba(0,0,0,0.9);
		}
					
		#statusbar img { display:inline; vertical-align: middle; }

		#footer-progress-bar {
			background-color: #1a1a1a;
			height: 22px;
			padding: 4px;
			width: 300px;
			margin: 2px 0;			
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
			-moz-box-shadow: 0 1px 5px #000 inset, 0 1px 0 #444;
			-webkit-box-shadow: 0 1px 5px #000 inset, 0 1px 0 #444;
			box-shadow: 0 1px 5px #000 inset, 0 1px 0 #444;
		}

		#footer-progress-bar span {
			display: inline-block;
			white-space:nowrap;
			height: 100%;	
/*			background-color: rgba(116,213,0,0.9);*/
			background-color: rgba(255,0,0,0.9);
			text-align: center;
			font-size: 20px; line-height: 25px;
			 font-weight: bold; color: #fff;

			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .5) inset;
			-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .5) inset;
			box-shadow: 0 1px 0 rgba(255, 255, 255, .5) inset;
			-webkit-background-size: 30px 30px;
			-moz-background-size: 30px 30px;
			background-size: 30px 30px;			
			background-image: -webkit-gradient(linear, left top, right bottom,
								color-stop(.25, rgba(0, 0, 0, 0.8)), color-stop(.25, transparent),
								color-stop(.5, transparent), color-stop(.5, rgba(0, 0, 0, 0.8)),
								color-stop(.75, rgba(0, 0, 0, 0.8)), color-stop(.75, transparent),
								to(transparent));
			background-image: -webkit-linear-gradient(135deg, rgba(0, 0, 0, 0.8) 25%, transparent 25%,
								transparent 50%, rgba(0, 0, 0, 0.8) 50%, rgba(0, 0, 0, 0.8) 75%,
								transparent 75%, transparent);
			background-image: -moz-linear-gradient(135deg, rgba(0, 0, 0, 0.8) 25%, transparent 25%,
								transparent 50%, rgba(0, 0, 0, 0.8) 50%, rgba(0, 0, 0, 0.8) 75%,
								transparent 75%, transparent);
			background-image: -ms-linear-gradient(135deg, rgba(0, 0, 0, 0.8) 25%, transparent 25%,
								transparent 50%, rgba(0, 0, 0, 0.8) 50%, rgba(0, 0, 0, 0.8) 75%,
								transparent 75%, transparent);
			background-image: -o-linear-gradient(135deg, rgba(0, 0, 0, 0.8) 25%, transparent 25%,
								transparent 50%, rgba(0, 0, 0, 0.8) 50%, rgba(0, 0, 0, 0.8) 75%,
								transparent 75%, transparent);
			background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 25%, transparent 25%,
								transparent 50%, rgba(0, 0, 0, 0.8) 50%, rgba(0, 0, 0, 0.8) 75%,
								transparent 75%, transparent);
		}
	</style>
	<link rel="stylesheet" type="text/css" href="//cdn.420chan.org/c/glyphicons.css">


	<div id='dropdown_container'>
		<ul class='dropdown' style="max-height: 24px;">
			<li onmouseover='' class='first'><a id='fp_link' class='dir' href='http://420chan.org'>420chan</a>
				<ul>
					<li><a href='http://420chan.org/rules'>Rules</a></li>
					<li><a href='http://420chan.org/irc'>IRC Info</a></li>
					<li><a href='http://420chan.org/faq'>FAQ</a></li>
				</ul>
			</li>
			<li onmouseover=''><a class='dir'>Drugs</a>
<ul><li><a class='boardlink' title='Cannabis Discussion' href='/weed'><div class='icons' id='icon_weed'></div>Cannabis Discussion</a></li>
<li><a class='boardlink' title='Alcohol Discussion' href='/hooch'><div class='icons' id='icon_hooch'></div>Alcohol Discussion</a></li>
<li><a class='boardlink' title='Ecstasy Discussion' href='/mdma'><div class='icons' id='icon_mdma'></div>Ecstasy Discussion</a></li>
<li><a class='boardlink' title='Psychedelic Discussion' href='/psy'><div class='icons' id='icon_psy'></div>Psychedelic Discussion</a></li>
<li><a class='boardlink' title='Stimulant Discussion' href='/stim'><div class='icons' id='icon_stim'></div>Stimulant Discussion</a></li>
<li><a class='boardlink' title='Dissociative Discussion' href='/dis'><div class='icons' id='icon_dis'></div>Dissociative Discussion</a></li>
<li><a class='boardlink' title='Opiate Discussion' href='/opi'><div class='icons' id='icon_opi'></div>Opiate Discussion</a></li>
<li><a class='boardlink' title='Tobacco Discussion' href='/smoke'><div class='icons' id='icon_smoke'></div>Tobacco Discussion</a></li>
<li><a class='boardlink' title='Benzodiazepine Discussion' href='/benz'><div class='icons' id='icon_benz'></div>Benzo Discussion</a></li>
<li><a class='boardlink' title='Deliriant Discussion' href='/del'><div class='icons' id='icon_del'></div>Deliriant Discussion</a></li>
<li><a class='boardlink' title='Other Drugs Discussion' href='/other'><div class='icons' id='icon_other'></div>Other Drugs</a></li>
<li><a class='boardlink' title='HUFF JENK ERRYDAY' href='/jenk'><div class='icons' id='icon_jenk'></div>Jenkem Discussion</a></li>
<li><a class='boardlink' title='Detoxify Yoself' href='/detox'><div class='icons' id='icon_detox'></div>Detox</a></li>
</ul>
</li>
<li onmouseover=''><a class='dir'>Lifestyle</a>
<ul><li><a class='boardlink' title='Personal Issues' href='/qq'><div class='icons' id='icon_qq'></div>Personal Issues</a></li>
<li><a class='boardlink' title='Dream Discussion' href='/dr'><div class='icons' id='icon_dr'></div>Dreams</a></li>
<li><a class='boardlink' title='Fitness' href='/ana'><div class='icons' id='icon_ana'></div>Fitness</a></li>
<li><a class='boardlink' title='DERICIOUS FOOD' href='/nom'><div class='icons' id='icon_nom'></div>Food &amp; Munchies</a></li>
<li><a class='boardlink' title='Travel &amp; Transportation' href='/vroom'><div class='icons' id='icon_vroom'></div>Transportation &amp; Travel</a></li>
<li><a class='boardlink' title='Style &amp; Fashion' href='/st'><div class='icons' id='icon_st'></div>Style &amp; Fashion</a></li>
<li><a class='boardlink' title='PEWPEWPEW' href='/nra'><div class='icons' id='icon_nra'></div>Weapons</a></li>
<li><a class='boardlink' title='Sexuality Discussion' href='/sd'><div class='icons' id='icon_sd'></div>Sexuality Discussion</a></li>
<li><a class='boardlink' title='Transgender Discussion' href='/cd'><div class='icons' id='icon_cd'></div>Transgender Discussion</a></li>
</ul>
</li>
<li onmouseover=''><a class='dir'>Academia</a>
<ul><li><a class='boardlink' title='Art &amp; Oekaki' href='/art'><div class='icons' id='icon_art'></div>Art &amp; Oekaki</a></li>
<li><a class='boardlink' title='Space... the Final Frontier' href='/sagan'><div class='icons' id='icon_sagan'></div>Space &amp; Astronomy</a></li>
<li><a class='boardlink' title='Mathematics' href='/math'><div class='icons' id='icon_math'></div>Mathematics</a></li>
<li><a class='boardlink' title='Engineering' href='/tesla'><div class='icons' id='icon_tesla'></div>Engineering</a></li>
<li><a class='boardlink' title='World Languages' href='/lang'><div class='icons' id='icon_lang'></div>World Languages</a></li>
<li><a class='boardlink' title='Science &amp; Chemistry' href='/chem'><div class='icons' id='icon_chem'></div>Science &amp; Chemistry</a></li>
<li><a class='boardlink' title='History' href='/his'><div class='icons' id='icon_his'></div>History</a></li>
<li><a class='boardlink' title='Growing &amp; Botany' href='/crops'><div class='icons' id='icon_crops'></div>Growing &amp; Botany</a></li>
<li><a class='boardlink' title='Guides &amp; Tutorials' href='/howto'><div class='icons' id='icon_howto'></div>Guides &amp; Tutorials</a></li>
<li><a class='boardlink' title='OBJECTION' href='/law'><div class='icons' id='icon_law'></div>Law Discussion</a></li>
<li><a class='boardlink' title='Books &amp; Literature' href='/lit'><div class='icons' id='icon_lit'></div>Books &amp; Literature</a></li>
<li><a class='boardlink' title='Medicine &amp; Health' href='/med'><div class='icons' id='icon_med'></div>Medicine &amp; Health</a></li>
<li><a class='boardlink' title='Philosophy &amp; Social Sciences' href='/pss'><div class='icons' id='icon_pss'></div>Social Sciences</a></li>
<li><a class='boardlink' title='Politics' href='/pol'><div class='icons' id='icon_pol'></div>Politics</a></li>
<li><a class='boardlink' title='Computers &amp; Technology' href='/tech'><div class='icons' id='icon_tech'></div>Computers &amp; Technology</a></li>
<li><a class='boardlink' title='Programming' href='/prog'><div class='icons' id='icon_prog'></div>Programming</a></li>
</ul>
</li>
<li onmouseover=''><a class='dir'>Media</a>
<ul><li><a class='boardlink' title='STAR TREK FUCK YEAH' href='/1701'><div class='icons' id='icon_1701'></div>Star Trek</a></li>
<li><a class='boardlink' title='Sports' href='/sport'><div class='icons' id='icon_sport'></div>Sports</a></li>
<li><a class='boardlink' title='Movies &amp; Television' href='/mtv'><div class='icons' id='icon_mtv'></div>Movies &amp; Television</a></li>
<li><a class='boardlink' title='Flash' href='/f'><div class='icons' id='icon_f'></div>Flash</a></li>
<li><a class='boardlink' title='Music &amp; Production' href='/m'><div class='icons' id='icon_m'></div>Music &amp; Production</a></li>
<li><a class='boardlink' title='Mixed Martial Arts Discussion' href='/mma'><div class='icons' id='icon_mma'></div>Mixed Martial Arts</a></li>
<li><a class='boardlink' title='Comics &amp; Web Comics Discussion' href='/616'><div class='icons' id='icon_616'></div>Comics</a></li>
<li><a class='boardlink' title='Professional Wrestling Discussion' href='/wooo'><div class='icons' id='icon_wooo'></div>Pro Wrestling</a></li>
<li><a class='boardlink' title='World News' href='/n'><div class='icons' id='icon_n'></div>World News</a></li>
<li><a class='boardlink' title='Video Games' href='/vg'><div class='icons' id='icon_vg'></div>Video Games</a></li>
<li><a class='boardlink' title='SO YOU WANNA BE A MASTAH?' href='/po'><div class='icons' id='icon_po'></div>Pok&eacute;mon</a></li>
<li><a class='boardlink' title='Traditional Games' href='/tg'><div class='icons' id='icon_tg'></div>Traditional Games</a></li>
</ul>
</li>
<li onmouseover=''><a class='dir'>Miscellanea</a>
<ul><li><a class='boardlink' title='420chan Discussion &amp; Staff Interaction' href='/420'><div class='icons' id='icon_420'></div>420chan Discussion</a></li>
<li><a class='boardlink' title='Random &amp; High Stuff' href='/b'><div class='icons' id='icon_b'></div>Random &amp; High Stuff</a></li>
<li><a class='boardlink' title='OH SHIT WHAT WAS THAT?' href='/spooky'><div class='icons' id='icon_spooky'></div>Paranormal</a></li>
<li><a class='boardlink' title='Dinosaur Discussion' href='/dino'><div class='icons' id='icon_dino'></div>Dinosaurs</a></li>
<li><a class='boardlink' title='Post-apocalyptic' href='/fo'><div class='icons' id='icon_fo'></div>Post-apocalyptic</a></li>
<li><a class='boardlink' title='Animal Discussion' href='/ani'><div class='icons' id='icon_ani'></div>Animals</a></li>
<li><a class='boardlink' title='Netjester AI Conversation Chamber' href='/nj'><div class='icons' id='icon_nj'></div>Netjester AI</a></li>
<li><a class='boardlink' title='Net Characters' href='/nc'><div class='icons' id='icon_nc'></div>Net Characters</a></li>
<li><a class='boardlink' title='*Wildcard (Futurism)*' href='/wc'><div class='icons' id='icon_wc'></div>*Wildcard (Futurism)*</a></li>
<li><a class='boardlink' title='Conspiracy Theories' href='/tinfoil'><div class='icons' id='icon_tinfoil'></div>Conspiracy Theories</a></li>
<li><a class='boardlink' title='Dump Wallpapers Below' href='/w'><div class='icons' id='icon_w'></div>Desktop Wallpapers</a></li>
</ul>
</li>
<li onmouseover=''><a class='dir'>Adult</a>
<ul><li><a class='boardlink' title='Adult (Gay)' href='/ga'><div class='icons' id='icon_ga'></div>Adult (Gay)</a></li>
<li><a class='boardlink' title='Adult (Straight)' href='/sa'><div class='icons' id='icon_sa'></div>Adult (Straight)</a></li>
<li><a class='boardlink' title='Hentai' href='/h'><div class='icons' id='icon_h'></div>Hentai</a></li>
</ul>
</li>
			<li>
				<a class='dir' href="/include/random.php">
					<span>Random</span>
					<span>Thread</span>
				</a>
			</li>
			<li>
				<form action="http://420chan.org/search/" name="searchform" id="searchform">
					<input name="search" type="text" value="SEARCH BOARDS..." onfocus="if (this.value == 'SEARCH BOARDS...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'SEARCH BOARDS...';}" />
				</form>
			</li>
			<li class='right' style='float: right;' onmouseover=''><a class='dir'>Options</a>
				<ul id="options">
					<li><a onclick="javascript:set_stylesheet('Randy')">Randy Theme</a></li>
					<li><a onclick="javascript:set_stylesheet('Classic')">Classic Theme</a></li>
					<li><a onclick="javascript:set_stylesheet('Princess')">Princess Theme</a></li>
					<li><a onclick="javascript:set_stylesheet('Rainbow')">Rainbow Theme</a></li>
					<li class='sparoff'><a>Disable Zen Mode</a></li>
					<li class='sparon'><a>Enable Zen Mode</a></li>
					<li class='helpoff'><a>Disable Help Tooltips</a></li>
					<li class='helpon'><a>Enable Help Tooltips</a></li>
					<li class='partyoff'><a>Disable PermaParty Mode</a></li>
					<li class='partyon'><a>Enable PermaParty Mode</a></li>
					<li class='musicoff'><a>Turn Music Off</a></li>
					<li class='musicon'><a>Turn Music On</a></li>
				</ul>
			</li>
						
		</ul>
	</div>
	<div id="xmers"></div>
	 <div id="header"> <div id="board_logo"> <a href="/lit/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/lit_icon_64.png" alt="/lit/ Icon" /> <p class="board_title_block"> <span class="board_name">/lit/</span> <span class="board_title">Books &amp; Literature</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
		AnonAccount: What is it, and what does it do? - <a href="http://boards.420chan.org/420/res/167672.php">Q&amp;A Thread</a><br>
	</div>
	<!-- <div style="width: 100%; text-align: center; font-size: 14px; font-weight: bold; line-height: 22px; margin: 5px auto">
		Build apps and browsing enhancements!
	</div> -->
	
	<!-- <div style="width: 100%; text-align: center; font-size: 14px; line-height: 18px; margin: 5px auto"><script>
	var CoinWidget_Config = {
		address : '13N1cvD7Cw8ZdJ74Ry7buBMhQKzN4nHvTB',
		counter : 'hide',
		text : 'Donate BTC to 420chan',
		text_label : 'Our Bitcoin Address:'
	};
	</script> 
	<script src="http://c.coinwidget.com/widget.js"></script></div> -->	<!-- <div style="border-radius: 0 6px 0 0; float: right; position:relative; width: 228px; height: 248px; margin-left: -228px; background: url(http://cdn.420chan.org/s/img/left-callout.png) no-repeat;"><a href="http://shop.taimalabs.com/collections/stickers"><span style="display: block; position: absolute; top: 0; left: 0; width: 228px; height: 248px; z-index: 20;"></a></div>
	<div style="border-radius: 6px 0 0 0; float: left; position:relative; width: 228px; height: 248px; margin-right: -228px; background: url(http://cdn.420chan.org/s/img/right-callout.png) no-repeat;"><a href="http://shop.taimalabs.com/products/logo-shot-glass"><span style="display: block; position: absolute; top: 0; left: 0; width: 228px; height: 248px; z-index: 20;"></a></div> -->
	<!-- <div class="rss">
		<a href="http://shop.taimalabs.com/collections/stickers" style="font-size: 1.4em; margin: 2px 0;">Now Offering <b>FREE WORLDWIDE SHIPPING</b><br> On All <b>420chan Logo</b> &amp; <b>Netjester</b> Sticker Orders!</a>
	</div> -->
		<!-- <div style="float: left; width: 160px; margin-right: -160px;">
		<iframe style="float: left; border-top-left-radius: 6px;" class="shopify-widget" frameborder="0" scrolling="no" width="160" height="233" src="http://widgets.shopifyapps.com/products/soul-of-the-banned?shop=420chan-store.myshopify.com&style=mnml&image-size=compact&text-color=%23eeeeee&button-bg-color=%23505050&button-text-color=%23eeeeee&background-color=%23333333"></iframe>
		</div> -->
	 <!--  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/lit/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="lit" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />     <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>  <tr> <td class="postblock">Name</td> <td> <input title="Name" type="text" name="field1" style="width:224px;" /> <div class="tooltip">  You can leave this blank to post anonymously, or you can create a Tripcode by using the float <b>Name#Password</b> </div>					 </td> </tr>    <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div>  <script type="text/javascript">set_inputs("postform")</script> <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 3000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> <li>This is a work-safe board. Posting adult images is forbidden.</li>			  </ul> </div> <hr style="margin-bottom:2px;" /> 	
<div style="margin: 5px auto 1px; width: 728px;">
	<a target="_blank" href="http://taimashop.co/collections/apparel"><img src="http://cdn.420chan.org/s/img/shirtbanner.gif"></a>
</div>
<style type="text/css" media="screen">
.iflb iframe { height: 90px !important;}
.iflb { display: none; margin: 0 auto; width: 728px; }
</style>

<div class="iflb">
		<script type="text/javascript">
		   var sppc_site      = '13';
		   var sppc_channel   = '82';
		   var sppc_dimension = '1';
		   var sppc_width     = '728';
		   var sppc_height    = '90';
		   var sppc_palette   = '27';
		   var sppc_user      = '50';
		</script>
		<!-- <script type="text/javascript" src="http://adserver.420network.com/show.js"></script> -->
	</div>
 <hr style="margin-top:2px;" />   <form id="delform" action="/lit/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="lit" />    <div id="litthread64456"> <div class="thread_header"> <a id="64456"></a> <span class="filetitle">All This Talk About Lovecraft</span>  <span class="inbetween"> by </span> <span class="postername">Martha Heckleway</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 11 Mar 2014 19:09:40 EST ID:5lVHTqvX</span></span>  <span class="reflink"> <a href="/lit/res/64456.php#i64456">No.64456</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit343131313233383031')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('64456')" title="Report Thread 64456"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lit/res/64456.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64456" data-thread="64456"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DABE0B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('litthread64456');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1394579380499.jpg"> 1394579380499.jpg </a> -(<em>31556 B, 250x373</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglit343131313233383031" target="_blank" href="/lit/src/1394579380499.jpg"> <img src="/lit/thumb/1394579380499s.jpg" alt="31556" class="thumb" /> </a>   			 <blockquote class="opcomment lit343131313233383031">  Is making me sick. Let&#39;s get a Clive Barker thread going. I feel that his work most emulates the Romantic era, like Lewis&#39; The Monk.<br><br>Pic related.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lit/res/64456.php#65005" onclick="highlight(65005);">&gt;&gt;</a></td> <td class="reply" id="reply65005"> <a id="65005"></a> <div class="replyheader"> 									 <span class="commentpostername">Graham Hindlechat</span>  - <span class="idhighlight">Thu, 29 May 2014 21:02:06 EST ID:/+Njb9ul</span> <span class="reflink">  <a href="/lit/res/64456.php#i65005">No.65005</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313239383236353733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('65005', '64456')" title="Report Post 65005"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="65005" data-thread="64456"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #927506; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31313239383236353733">  read galilee, recently started american gods. the holiday house scared the shit out of me when i was younger. i dig clive barker, definitely. unfortunately i know nothing of roman literature and so on that topic i am essentially useless.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64456.php#65009" onclick="highlight(65009);">&gt;&gt;</a></td> <td class="reply" id="reply65009"> <a id="65009"></a> <div class="replyheader"> 									 <span class="commentpostername">Lydia Drabblefield</span>  - <span class="idhighlight">Fri, 30 May 2014 10:43:52 EST ID:bq5scg8g</span> <span class="reflink">  <a href="/lit/res/64456.php#i65009">No.65009</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313039333530383531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('65009', '64456')" title="Report Post 65009"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="65009" data-thread="64456"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #921B39; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1401461032962.jpg"> 1401461032962.jpg </a> -(<em>74762 B, 975x534</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lit/src/1401461032962.jpg"> <img src="/lit/thumb/1401461032962s.jpg" alt="74762" class="thumb" /> </a>    <blockquote  class="lit31313039333530383531">  Barker wishes he could touch on Lovecraft&#39;s talent.<br><br>I&#39;ve been following Clive Barker and Mark Millers comic collaboration, Next Testament, it&#39;s awesome.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64456.php#65013" onclick="highlight(65013);">&gt;&gt;</a></td> <td class="reply" id="reply65013"> <a id="65013"></a> <div class="replyheader"> 									 <span class="commentpostername">Shitting Bullercocke</span>  - <span class="idhighlight">Fri, 30 May 2014 21:50:54 EST ID:1K8uo5oS</span> <span class="reflink">  <a href="/lit/res/64456.php#i65013">No.65013</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313335323539383534')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('65013', '64456')" title="Report Post 65013"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="65013" data-thread="64456"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #069DB5; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1401501054440.jpg"> 1401501054440.jpg </a> -(<em>38254 B, 326x500</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lit/src/1401501054440.jpg"> <img src="/lit/thumb/1401501054440s.jpg" alt="38254" class="thumb" /> </a>    <blockquote  class="lit31313335323539383534">  The Great &amp; Secret Show! Oh man that is my favorite Clive Barker. It&#39;s so twisted and thought provoking. I loved how crazy it got just by the second act; I couldn&#39;t even fathom where the third act would take me and I wasn&#39;t disappointed when it got even stranger.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="litthread65006"> <div class="thread_header"> <a id="65006"></a> <span class="filetitle">serial killer books?</span>  <span class="inbetween"> by </span> <span class="postername">Hedda Brendleville</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 30 May 2014 05:02:08 EST ID:eBDLocQL</span></span>  <span class="reflink"> <a href="/lit/res/65006.php#i65006">No.65006</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31323530323331363135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('65006')" title="Report Thread 65006"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lit/res/65006.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="65006" data-thread="65006"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0FFAF8; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('litthread65006');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1401440528256.jpg"> 1401440528256.jpg </a> -(<em>33324 B, 433x599</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglit31323530323331363135" target="_blank" href="/lit/src/1401440528256.jpg"> <img src="/lit/thumb/1401440528256s.jpg" alt="33324" class="thumb" /> </a>   			 <blockquote class="opcomment lit31323530323331363135">  Anyone know of any non-fiction books about serial killers/ mass murderers that I could check out? maybe some memoirs? I&#39;m curious about this subject but don&#39;t know where to start.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lit/res/65006.php#65007" onclick="highlight(65007);">&gt;&gt;</a></td> <td class="reply" id="reply65007"> <a id="65007"></a> <div class="replyheader"> 									 <span class="commentpostername">Nathaniel Goodfield</span>  - <span class="idhighlight">Fri, 30 May 2014 09:11:41 EST ID:vzgarAjQ</span> <span class="reflink">  <a href="/lit/res/65006.php#i65007">No.65007</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31373035383931313533')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('65007', '65006')" title="Report Post 65007"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="65007" data-thread="65006"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FFDFA7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31373035383931313533">  <a href = "/lit/res/65006.php" onclick = "highlight(65006)">&gt;&gt;65006</a><br><br>Unabomber wrote a manifesto.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/65006.php#65008" onclick="highlight(65008);">&gt;&gt;</a></td> <td class="reply" id="reply65008"> <a id="65008"></a> <div class="replyheader"> 									 <span class="commentpostername">Lydia Drabblefield</span>  - <span class="idhighlight">Fri, 30 May 2014 10:41:30 EST ID:bq5scg8g</span> <span class="reflink">  <a href="/lit/res/65006.php#i65008">No.65008</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313039333530383531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('65008', '65006')" title="Report Post 65008"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="65008" data-thread="65006"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6D4DA5; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31313039333530383531">  That recent young mass murderer left a long, insane manifesto on-line, check that out. It&#39;s both an insight into a psychopath and also hilarious how dumb he is.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/65006.php#65011" onclick="highlight(65011);">&gt;&gt;</a></td> <td class="reply" id="reply65011"> <a id="65011"></a> <div class="replyheader"> 									 <span class="commentpostername">Hedda Brendleville</span>  - <span class="idhighlight">Fri, 30 May 2014 19:57:04 EST ID:eBDLocQL</span> <span class="reflink">  <a href="/lit/res/65006.php#i65011">No.65011</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31323530323331363135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('65011', '65006')" title="Report Post 65011"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="65011" data-thread="65006"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6AE6F4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31323530323331363135">  thanks,  reading unabomber manifesto right now, will take a look at elliot rodger&#39;s later   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/65006.php#65033" onclick="highlight(65033);">&gt;&gt;</a></td> <td class="reply" id="reply65033"> <a id="65033"></a> <div class="replyheader"> 									 <span class="commentpostername">Yojimbo</span> <span class="postertrip">!zuhmdSRuSE</span> - <span class="idhighlight">Tue, 03 Jun 2014 10:41:11 EST ID:7KD2lVFx</span> <span class="reflink">  <a href="/lit/res/65006.php#i65033">No.65033</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31333534393731303738')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('65033', '65006')" title="Report Post 65033"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="65033" data-thread="65006"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #50D2B1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31333534393731303738">  <a href = "/lit/res/65006.php#65011" onclick = "highlight(65011)">&gt;&gt;65011</a><br>Prepare for cringe. It isn&#39;t a cool manifesto of a warped mind saying some edgy goodbye to the world and explaining their sickness, instead it&#39;s the fifty minute crying of an egotistical jackass.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="litthread64984"> <div class="thread_header"> <a id="64984"></a> <span class="filetitle">War, Heh! What is it good for</span>  <span class="inbetween"> by </span> <span class="postername">David Ferringtin</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 26 May 2014 23:38:38 EST ID:u6xLmRny</span></span>  <span class="reflink"> <a href="/lit/res/64984.php#i64984">No.64984</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit32323636323032343533')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('64984')" title="Report Thread 64984"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lit/res/64984.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64984" data-thread="64984"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #122ED2; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('litthread64984');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1401161918050.jpg"> 1401161918050.jpg </a> -(<em>56171 B, 383x481</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglit32323636323032343533" target="_blank" href="/lit/src/1401161918050.jpg"> <img src="/lit/thumb/1401161918050s.jpg" alt="56171" class="thumb" /> </a>   			 <blockquote class="opcomment lit32323636323032343533">  Hi<br><br>I had an argument with my brother a couple of days ago.<br><br>Hes in the army, wants to go special forces and all that jazz.<br><br>I personally am against the idea of being objectified the way soldiers are. I dont believe in the whole pyramidal structure of obediance, and I would like some reading material in order to inform myself.<br><br>I would like recommendations of books against the whole concept of the war culture, but I would also like to read about the failed attempts at military intervention, or just good historical examples of wars which were motivated mainly by economic interests. <br><br>I&#39;d like books on the last things i&#39;ve cited.<br><br>I&#39;d also like to read material from the other side of the fence. I&#39;d like to read books about the legitimacy of military intervention in some situations, and I would also be interested to read something that talks about the value of the individual military enterprise and how it builds the individual and how all of it relates to the individual sense of freedom.<br><br>Whether its being breached or accentuated within the military structure.  <div class="abbrev"> Comment too long. Click <a href="/lit/res/64984.php">here</a> to view the full text. </div>   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lit/res/64984.php#64989" onclick="highlight(64989);">&gt;&gt;</a></td> <td class="reply" id="reply64989"> <a id="64989"></a> <div class="replyheader"> 									 <span class="commentpostername">Charlotte Smallcocke</span>  - <span class="idhighlight">Tue, 27 May 2014 01:07:24 EST ID:9KIRjmUJ</span> <span class="reflink">  <a href="/lit/res/64984.php#i64989">No.64989</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit383531333531373033')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64989', '64984')" title="Report Post 64989"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64989" data-thread="64984"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F16BDF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit383531333531373033">  Out of all unnecessary things in human life, war if by far the most necessary. If you think about it, war was from the start not entirely a human invention. Insects wage war on other colonies as a means of sustenance, sometimes abducting the ant colonies&#39; larvae and raising them under their own. This is analogous to the administrative commands of war in itself: it brings new ways of life upon new generations. <br><br>An example of conflicting ideologies would be Britain and Germany in world war II. If you think about it, neither country viewed the world in the same way, and while they were both for centralization of power, neither of them wanted each other&#39;s members in power. Thus, when Hitler took control, the vicissitudes of war including the annexation of Czechoslovakia forced the little island to start it&#39;s own war machine. But what did we get out of the conflict? Hitler&#39;s Mein Kampf. Churchill&#39;s The Second World War volumes (which are themselves somewhat philological and philosophical in nature at times). And we also received new ways of forming government and controlling duties. War keeps people honest. Death is a treatment which evil and good men alike fear, and keeps both sides intelligent and progressive. <br><br>Perhaps the form of war may change, but war itself will never be undesirable, because as long as there is a centralization of power, a way to consolidate resources, a form of moral condensation, there will always be resistance, and it is when this resistance reaches it&#39;s peak (Hitler&#39;s secret uprising in Germany) when you will find that the people&#39;s support speaks for itself.<br><br>Again, as people get more intelligent, the form of war will change, but it will always be necessary. I need not mention that the kings of old testament Israel would not have engaged in the rather obsequious and pellucid politics they treated all kings with in 700BC in today&#39;s political realm. Behavior changes, but history has a funny way of repeating itself, time and time again. Sometimes birds find themselves in the same place their grandfather&#39;s generations were at, picking at the same grains of rice, in the same spot. And they are none the wiser, nor are they at any loss, for the grai&hellip;  <div class="abbrev"> Comment too long. Click <a href="/lit/res/64984.php#64989">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64984.php#64999" onclick="highlight(64999);">&gt;&gt;</a></td> <td class="reply" id="reply64999"> <a id="64999"></a> <div class="replyheader"> 									 <span class="commentpostername">Sidney Sedgehood</span>  - <span class="idhighlight">Wed, 28 May 2014 10:01:10 EST ID:u6xLmRny</span> <span class="reflink">  <a href="/lit/res/64984.php#i64999">No.64999</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit32323636323032343533')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64999', '64984')" title="Report Post 64999"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64999" data-thread="64984"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #62F608; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit32323636323032343533">  <a href = "/lit/res/64984.php" onclick = "highlight(64984)">&gt;&gt;64984</a>So, as of now, this is my list:<br><br>one soldiers war by arkaday babchenko<br>all quiet on the western front<br>Rising Up and Rising Down<br>Cath-22<br>War and Peace<br><br>any other suggestions?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64984.php#65000" onclick="highlight(65000);">&gt;&gt;</a></td> <td class="reply" id="reply65000"> <a id="65000"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigger Trotridge</span>  - <span class="idhighlight">Wed, 28 May 2014 12:13:21 EST ID:NOOuLlVh</span> <span class="reflink">  <a href="/lit/res/64984.php#i65000">No.65000</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31323037393336343334')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('65000', '64984')" title="Report Post 65000"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="65000" data-thread="64984"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CF818B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31323037393336343334">  <a href="https://en.wikipedia.org/wiki/United_States_v._Stanley" rel="nofollow" target="_blank">https://en.wikipedia.org/wiki/United_States_v._Stanley</a><br><br>Tell him to have fun.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64984.php#65003" onclick="highlight(65003);">&gt;&gt;</a></td> <td class="reply" id="reply65003"> <a id="65003"></a> <div class="replyheader"> 									 <span class="commentpostername">Polly Trotwill</span>  - <span class="idhighlight">Thu, 29 May 2014 17:43:33 EST ID:LHmvr1pu</span> <span class="reflink">  <a href="/lit/res/64984.php#i65003">No.65003</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31323938373339323230')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('65003', '64984')" title="Report Post 65003"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="65003" data-thread="64984"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7D4EA6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31323938373339323230">  <strong>The Republic of Whores by Josef Škvorecký</strong> first comes to mind. <br><br>It lays bare the military life, stripped of all glorification and shows it for what it is. It&#39;s a satirical book, very intelligent, very humorous, very fun to read. <br>Despite being written in &#39;69 and situated in Czechoslovakia, anyone who has been in the army anywhere in modern times can highly relate to it - the army life has a lot of universal themes covered by this book. <br><br>Absolutely recommended for your brother, but I&#39;m betting you yourself will also find it insightful and fun to read.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="litthread54678"> <div class="thread_header"> <a id="54678"></a> <span class="filetitle">Book bargain thread</span>  <span class="inbetween"> by </span> <span class="postername">Faggy Pittfoot</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 30 May 2012 17:13:06 EST ID:rszcYKHg</span></span>  <span class="reflink"> <a href="/lit/res/54678.php#i54678">No.54678</a> </span>    			 <!--  - Awesome Thread? <a href="/lit/taimaba.pl?board=lit&amp;task=vote&amp;thread=54678&amp;vote=0">No!</a> | <a href="/lit/taimaba.pl?board=lit&amp;task=vote&amp;thread=54678&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31353039333031363131')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('54678')" title="Report Thread 54678"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lit/res/54678.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="54678" data-thread="54678"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7539EB; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('litthread54678');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1338412386543.jpg"> 1338412386543.jpg </a> -(<em>1731045 B, 2792x3240</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglit31353039333031363131" target="_blank" href="/lit/src/1338412386543.jpg"> <img src="/lit/thumb/1338412386543s.jpg" alt="1731045" class="thumb" /> </a>   			 <blockquote class="opcomment lit31353039333031363131">  Post your new books ITT<br><br>Pic related, which one should I start first?   </blockquote>   				 				  <span class="omittedposts">  81 posts and 29 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/lit/res/54678.php#64662" onclick="highlight(64662);">&gt;&gt;</a></td> <td class="reply" id="reply64662"> <a id="64662"></a> <div class="replyheader"> 									 <span class="commentpostername">Alice Cizzledeck</span>  - <span class="idhighlight">Mon, 14 Apr 2014 14:49:29 EST ID:gs/30c5A</span> <span class="reflink">  <a href="/lit/res/54678.php#i64662">No.64662</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31353835383431323032')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64662', '54678')" title="Report Post 64662"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64662" data-thread="54678"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FCB3EC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31353835383431323032">  <a href = "/lit/res/54678.php#63493" onclick = "highlight(63493)">&gt;&gt;63493</a><br><br><blockquote class = "unkfunc">&gt;&gt;&gt;it smells great. <br></blockquote><br>Ah, the smell of old books...<br>Got a german edition of Moby Dick (with a 2 site long ad for Shell petrol, right in the middle) and I couldn&#39;t read a page without sniffing.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/54678.php#64663" onclick="highlight(64663);">&gt;&gt;</a></td> <td class="reply" id="reply64663"> <a id="64663"></a> <div class="replyheader"> 									 <span class="commentpostername">Walter Duckfield</span>  - <span class="idhighlight">Mon, 14 Apr 2014 15:02:48 EST ID:h0+gGFQN</span> <span class="reflink">  <a href="/lit/res/54678.php#i64663">No.64663</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313438323536363632')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64663', '54678')" title="Report Post 64663"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64663" data-thread="54678"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #482E39; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31313438323536363632">  <a href = "/lit/res/54678.php#64662" onclick = "highlight(64662)">&gt;&gt;64662</a><br>I once bought a Diary of Anne Frank and half the pages had a soaked-through puddle of urine on them. The smell of urine was unmistakeable, but I read through it.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/54678.php#64664" onclick="highlight(64664);">&gt;&gt;</a></td> <td class="reply" id="reply64664"> <a id="64664"></a> <div class="replyheader"> 									 <span class="commentpostername">Phyllis Goodman</span>  - <span class="idhighlight">Mon, 14 Apr 2014 16:38:09 EST ID:j7quxT0j</span> <span class="reflink">  <a href="/lit/res/54678.php#i64664">No.64664</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31323438323737313635')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64664', '54678')" title="Report Post 64664"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64664" data-thread="54678"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DB3963; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31323438323737313635">  Today I acquired <em>Midnight&#39;s Children</em> by Salman Rushdie, <em>White Noise</em> by Don DeLillo, a collection of Kafka&#39;s short stories, and critical editions of <em>Moby Dick</em>, <em>A Portait of the Artist as a Young Man</em> and <em>The Sound and the Fury</em>.  With my Kindle serving as storage/reader for all the free books I could ever want, I limit my new pickups to those versions of books with substantial extras like critical commentary (or particularly insightful/numerous/structured margin scribblings), or those that I think would make nice collectibles or gifts.  I stalled on a vintage vest-pocket copy of Spinoza&#39;s <em>Ethics</em>, which I was recommended recently, but opted to stick with my ebook version.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/54678.php#64713" onclick="highlight(64713);">&gt;&gt;</a></td> <td class="reply" id="reply64713"> <a id="64713"></a> <div class="replyheader"> 									 <span class="commentpostername">Martin Pittville</span>  - <span class="idhighlight">Thu, 17 Apr 2014 03:44:38 EST ID:EieTKyZb</span> <span class="reflink">  <a href="/lit/res/54678.php#i64713">No.64713</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit33343730313435353730')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64713', '54678')" title="Report Post 64713"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64713" data-thread="54678"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0F4907; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1397720678958.jpg"> 1397720678958.jpg </a> -(<em>435520 B, 1600x1200</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lit/src/1397720678958.jpg"> <img src="/lit/thumb/1397720678958s.jpg" alt="435520" class="thumb" /> </a>    <blockquote  class="lit33343730313435353730">  Sorry for the shittiness of this photo, took it with a shaky webcam since I can&#39;t upload from my digital camera right now and I don&#39;t have a cellphone. I&#39;ve gotten these over the past month or so. I also got a comic but I figured it wouldn&#39;t really fit the thread. <br>The books are Jpod by Douglas Coupland, The Green Mile,  Michael by Joseph Goebbels (had to pick it up if only because it was cheap and looked like it would be interesting),  a collection of Heinlein novels (haven&#39;t read any of his stuff yet but I&#39;ve gotten recommendations of stuff by him), Shadows of Forgotten Ancestors by Carl Sagan and Ann Druyan and, out of this shot, a fairly interesting biography on the Wright Brothers. That&#39;s the one I&#39;ve gotten the farthest along in. <br><br><a href = "/lit/res/54678.php#62805" onclick = "highlight(62805)">&gt;&gt;62805</a><br>You&#39;re in for something great, Hard Boiled is my favorite Murakami book (though admittedly I&#39;ve only read that and Sputnik Sweetheart). Haven&#39;t read Valis yet but I have read a lot of Philip K Dick&#39;s other books and I loved pretty much all of them, especially Dr. Bloodmoney and Do Androids Dream. <br><br><a href = "/lit/res/54678.php#61489" onclick = "highlight(61489)">&gt;&gt;61489</a><br>Catch-22 is good. I like Naked Lunch but I still haven&#39;t gotten past the wall of sodomy that you smack into halfway through it.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/54678.php#64985" onclick="highlight(64985);">&gt;&gt;</a></td> <td class="reply" id="reply64985"> <a id="64985"></a> <div class="replyheader"> 									 <span class="commentpostername">Charlotte Smallcocke</span>  - <span class="idhighlight">Tue, 27 May 2014 00:04:41 EST ID:9KIRjmUJ</span> <span class="reflink">  <a href="/lit/res/54678.php#i64985">No.64985</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit383531333531373033')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64985', '54678')" title="Report Post 64985"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64985" data-thread="54678"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AD83A8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1401163481189.jpg"> 1401163481189.jpg </a> -(<em>146260 B, 1280x720</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lit/src/1401163481189.jpg"> <img src="/lit/thumb/1401163481189s.jpg" alt="146260" class="thumb" /> </a>    <blockquote  class="lit383531333531373033">  <blockquote class = "unkfunc">&gt;being bilingual<br></blockquote>I&#39;m jelly OP   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="litthread64980"> <div class="thread_header"> <a id="64980"></a> <span class="filetitle">Wilde</span>  <span class="inbetween"> by </span> <span class="postername">Shitting Bibberford</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 26 May 2014 09:44:16 EST ID:1K8uo5oS</span></span>  <span class="reflink"> <a href="/lit/res/64980.php#i64980">No.64980</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313335323539383534')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('64980')" title="Report Thread 64980"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lit/res/64980.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64980" data-thread="64980"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F3C01B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('litthread64980');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1401111856173.jpg"> 1401111856173.jpg </a> -(<em>73930 B, 311x500</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglit31313335323539383534" target="_blank" href="/lit/src/1401111856173.jpg"> <img src="/lit/thumb/1401111856173s.jpg" alt="73930" class="thumb" /> </a>   			 <blockquote class="opcomment lit31313335323539383534">  Was wondering if anyone would be willing to share the most insightful or at the very least the most interesting accounts/biographies of Mr. Wilde. I&#39;m woefully uneducated with his material or life so any and all suggestions would be most appreciated.<br><br>On a side note. De Profundis. I&#39;m having some trouble finding good information about the events surrounding this piece of writing. I&#39;m quite intrigued about whether or not Alfred Douglas read the damn thing or not. All accounts seem to say he dodged it like it was the plague but I&#39;m hoping I&#39;m missing something.<br><br>Please focus on the first if the second is off topic or too shadowy to piece together as I&#39;m sure that when I&#39;m reading the various accounts of Mr. Wilde&#39;s life I&#39;ll no doubt come to my own conclusions.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lit/res/64980.php#64981" onclick="highlight(64981);">&gt;&gt;</a></td> <td class="reply" id="reply64981"> <a id="64981"></a> <div class="replyheader"> 									 <span class="commentpostername">Isabella Hackledale</span>  - <span class="idhighlight">Mon, 26 May 2014 21:18:22 EST ID:Pg6Z3jcV</span> <span class="reflink">  <a href="/lit/res/64980.php#i64981">No.64981</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313936373137343234')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64981', '64980')" title="Report Post 64981"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64981" data-thread="64980"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #05286C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31313936373137343234">  <a href = "/lit/res/64980.php" onclick = "highlight(64980)">&gt;&gt;64980</a><br>Mr.Wilde is one of the most confussing chartcters in all of literature he is this crazy, mad scienst sort who is the main angonist of the novel, im pretty sure he is the baseis for the emperor from the foundation trilogy, it remimdes me of a story about the little fishey who could, there was a little fish and he died because of the ICE AGE!!!!   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="litthread64979"> <div class="thread_header"> <a id="64979"></a> <span class="filetitle">Balthasar&#39;s Odyssey</span>  <span class="inbetween"> by </span> <span class="postername">John Billingfuck</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 25 May 2014 23:20:45 EST ID:3lZIU1c4</span></span>  <span class="reflink"> <a href="/lit/res/64979.php#i64979">No.64979</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit33343139323935363430')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('64979')" title="Report Thread 64979"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lit/res/64979.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64979" data-thread="64979"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7CDB73; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('litthread64979');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1401074445194.jpg"> 1401074445194.jpg </a> -(<em>517613 B, 510x680</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglit33343139323935363430" target="_blank" href="/lit/src/1401074445194.jpg"> <img src="/lit/thumb/1401074445194s.jpg" alt="517613" class="thumb" /> </a>   			 <blockquote class="opcomment lit33343139323935363430">  I went to a friends house the other day and he hates when people talk while he cooks so I ended up picking this up, really enjoyed the first chapter it kind of reminded me of Burroughs narrations of The Western Lands.<br><br>Has anyone else read this or anything by Maalouf? Looking forward to reading the rest.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lit/res/64979.php#65036" onclick="highlight(65036);">&gt;&gt;</a></td> <td class="reply" id="reply65036"> <a id="65036"></a> <div class="replyheader"> 									 <span class="commentpostername">Edward Fessleham</span>  - <span class="idhighlight">Tue, 03 Jun 2014 13:36:19 EST ID:AjZeD4Dg</span> <span class="reflink">  <a href="/lit/res/64979.php#i65036">No.65036</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31323632373331303635')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('65036', '64979')" title="Report Post 65036"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="65036" data-thread="64979"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CEB4C5; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31323632373331303635">  <blockquote class = "unkfunc">&gt;he hates when people talk while he cooks<br></blockquote>I&#39;m the opposite, so I find that strange.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="litthread64873"> <div class="thread_header"> <a id="64873"></a> <span class="filetitle">Depressing Novels/Writers</span>  <span class="inbetween"> by </span> <span class="postername">Jenny Lightlock</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 11 May 2014 18:12:24 EST ID:WMhNzl+9</span></span>  <span class="reflink"> <a href="/lit/res/64873.php#i64873">No.64873</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31323735303830333333')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('64873')" title="Report Thread 64873"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lit/res/64873.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64873" data-thread="64873"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BAC481; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('litthread64873');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1399846344312.jpg"> 1399846344312.jpg </a> -(<em>310673 B, 400x513</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglit31323735303830333333" target="_blank" href="/lit/src/1399846344312.jpg"> <img src="/lit/thumb/1399846344312s.jpg" alt="310673" class="thumb" /> </a>   			 <blockquote class="opcomment lit31323735303830333333">  I was doing Google searches on the greatest depressing novels written and the greatest novels written by depressed writers. After reading lots of plot summaries I decided to go out and get The Bell Jar by Sylvia Plath. Before I begin reading though I wanted to see what type of other books would you fine people recommend that match my aforementioned criteria and also if anyone has read The Bell Jar, what did you think?   </blockquote>   				 				  <span class="omittedposts">   4 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/lit/res/64873.php#64931" onclick="highlight(64931);">&gt;&gt;</a></td> <td class="reply" id="reply64931"> <a id="64931"></a> <div class="replyheader"> 									 <span class="commentpostername">Fanny Clemmerpud</span>  - <span class="idhighlight">Wed, 21 May 2014 09:46:23 EST ID:7NCkcIJe</span> <span class="reflink">  <a href="/lit/res/64873.php#i64931">No.64931</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31333737343834303035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64931', '64873')" title="Report Post 64931"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64931" data-thread="64873"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4A33A0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31333737343834303035">  Sylvia Plath&#39;s poetry is great too if you&#39;ve been through depression. It&#39;s all about how she can&#39;t keep a fixed self because her anxiety and breakdowns keep annihilating it, as well as the pain of being tied to her miserable existence by love of her son. And a lot of it is about getting stimulation from insignificant things that draw you out of your depressed baseline. It&#39;s really easy to read too, hence its popularity.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64873.php#64932" onclick="highlight(64932);">&gt;&gt;</a></td> <td class="reply" id="reply64932"> <a id="64932"></a> <div class="replyheader"> 									 <span class="commentpostername">Alice Blushpere</span>  - <span class="idhighlight">Wed, 21 May 2014 10:38:03 EST ID:DwSkGEj2</span> <span class="reflink">  <a href="/lit/res/64873.php#i64932">No.64932</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31383235343432303234')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64932', '64873')" title="Report Post 64932"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64932" data-thread="64873"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4845CF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31383235343432303234">  Russian writers like Tolstoy, Gogol, and Dosto might be considered depressing. Their novels may have depicted sad universes, however, I believe for them the point was to illustrate the human condition and its ability to remain human and alive even inside a depressing society.<br><br>It&#39;s sort of unrelated here, however, I&#39;ve read the Manifesto both in an angry mindset and in a positive mindset. In an angry one, the ideology made absolute perfect sense to me without any flaws whatsoever. In a positive mindset, it still did, though more on paper than a practical one. That said, it&#39;s a perspective thing.<br><br>American writers like Hemingway (and maybe Fitz) can also be thrown into the pile.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64873.php#64954" onclick="highlight(64954);">&gt;&gt;</a></td> <td class="reply" id="reply64954"> <a id="64954"></a> <div class="replyheader"> 									 <span class="commentpostername">Cyril Blarrykure</span>  - <span class="idhighlight">Fri, 23 May 2014 19:33:25 EST ID:u7H28ffN</span> <span class="reflink">  <a href="/lit/res/64873.php#i64954">No.64954</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit3339313032363630')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64954', '64873')" title="Report Post 64954"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64954" data-thread="64873"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #391B15; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1400888005949.jpg"> 1400888005949.jpg </a> -(<em>23770 B, 400x202</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lit/src/1400888005949.jpg"> <img src="/lit/thumb/1400888005949s.jpg" alt="23770" class="thumb" /> </a>    <blockquote  class="lit3339313032363630">  Emille Zolla, germinal<br><br>not a depressing author, pessimistic rather.<br><br>It creates hope and then crushes you,<br> unlike depressing authors that just set an aesthetic tone of depression.<br><br>Saddest novel i&#39;ve read.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64873.php#64975" onclick="highlight(64975);">&gt;&gt;</a></td> <td class="reply" id="reply64975"> <a id="64975"></a> <div class="replyheader"> 									 <span class="commentpostername">Frederick Narryhood</span>  - <span class="idhighlight">Sun, 25 May 2014 10:15:41 EST ID:KV9OHFxL</span> <span class="reflink">  <a href="/lit/res/64873.php#i64975">No.64975</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31333930373736393835')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64975', '64873')" title="Report Post 64975"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64975" data-thread="64873"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F766C2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31333930373736393835">  <a href = "/lit/res/64873.php#64954" onclick = "highlight(64954)">&gt;&gt;64954</a><br>Zola&#39;s whole Rougon-Macquart cycle is one grim read yeah   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64873.php#64978" onclick="highlight(64978);">&gt;&gt;</a></td> <td class="reply" id="reply64978"> <a id="64978"></a> <div class="replyheader"> 									 <span class="commentpostername">John Billingfuck</span>  - <span class="idhighlight">Sun, 25 May 2014 23:14:44 EST ID:3lZIU1c4</span> <span class="reflink">  <a href="/lit/res/64873.php#i64978">No.64978</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit33343139323935363430')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64978', '64873')" title="Report Post 64978"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64978" data-thread="64873"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A9F4DC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit33343139323935363430">  Notes from Underground by Dostoyevsky is pretty stellar.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="litthread64967"> <div class="thread_header"> <a id="64967"></a> <span class="filetitle">Trying to find a book.</span>  <span class="inbetween"> by </span> <span class="postername">dan</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 24 May 2014 22:41:44 EST ID:SI15wPQs</span></span>  <span class="reflink"> <a href="/lit/res/64967.php#i64967">No.64967</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31323832333438393330')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('64967')" title="Report Thread 64967"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lit/res/64967.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64967" data-thread="64967"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2F1CCA; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('litthread64967');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1400985704354.png"> 1400985704354.png </a> -(<em>474335 B, 550x704</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglit31323832333438393330" target="_blank" href="/lit/src/1400985704354.png"> <img src="/lit/thumb/1400985704354s.jpg" alt="474335" class="thumb" /> </a>   			 <blockquote class="opcomment lit31323832333438393330">  It&#39;s a book about a philosopher in purgatory who argues with a god, I think it was Socrates arguing with Zeus. I think it was a Russian author. Chekhov?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lit/res/64967.php#64968" onclick="highlight(64968);">&gt;&gt;</a></td> <td class="reply" id="reply64968"> <a id="64968"></a> <div class="replyheader"> 									 <span class="commentpostername">Fucking Sassleman</span>  - <span class="idhighlight">Sat, 24 May 2014 22:42:28 EST ID:Pg6Z3jcV</span> <span class="reflink">  <a href="/lit/res/64967.php#i64968">No.64968</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313936373137343234')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64968', '64967')" title="Report Post 64968"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64968" data-thread="64967"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1208FE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31313936373137343234">  <a href = "/lit/res/64967.php" onclick = "highlight(64967)">&gt;&gt;64967</a><br>troll detected !!! alert the internet   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64967.php#64969" onclick="highlight(64969);">&gt;&gt;</a></td> <td class="reply" id="reply64969"> <a id="64969"></a> <div class="replyheader"> 									 <span class="commentpostername">dan</span>  - <span class="idhighlight">Sat, 24 May 2014 22:55:20 EST ID:SI15wPQs</span> <span class="reflink">  <a href="/lit/res/64967.php#i64969">No.64969</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31323832333438393330')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64969', '64967')" title="Report Post 64969"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64969" data-thread="64967"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #08EC1B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31323832333438393330">  <a href = "/lit/res/64967.php#64968" onclick = "highlight(64968)">&gt;&gt;64968</a><br>?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64967.php#64970" onclick="highlight(64970);">&gt;&gt;</a></td> <td class="reply" id="reply64970"> <a id="64970"></a> <div class="replyheader"> 									 <span class="commentpostername">dan</span>  - <span class="idhighlight">Sun, 25 May 2014 00:11:41 EST ID:SI15wPQs</span> <span class="reflink">  <a href="/lit/res/64967.php#i64970">No.64970</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31323832333438393330')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64970', '64967')" title="Report Post 64970"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64970" data-thread="64967"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #432A1C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31323832333438393330">  <a href = "/lit/res/64967.php" onclick = "highlight(64967)">&gt;&gt;64967</a><br>I found it. It&#39;s called <span class="spoiler" onmouseover=""><span>The Shades, A Phantasy by Vladimir Korolenko</span></span>.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64967.php#64972" onclick="highlight(64972);">&gt;&gt;</a></td> <td class="reply" id="reply64972"> <a id="64972"></a> <div class="replyheader"> 									 <span class="commentpostername">Fucking Sassleman</span>  - <span class="idhighlight">Sun, 25 May 2014 04:02:57 EST ID:Pg6Z3jcV</span> <span class="reflink">  <a href="/lit/res/64967.php#i64972">No.64972</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313936373137343234')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64972', '64967')" title="Report Post 64972"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64972" data-thread="64967"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #63AC58; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31313936373137343234">  <a href = "/lit/res/64967.php#64970" onclick = "highlight(64970)">&gt;&gt;64970</a><br>narp is a troll   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="litthread64959"> <div class="thread_header"> <a id="64959"></a> <span class="filetitle">Please someone rate my short story</span>  <span class="inbetween"> by </span> <span class="postername">Thomas Fuckingwater</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 24 May 2014 15:30:51 EST ID:qeZ/S+we</span></span>  <span class="reflink"> <a href="/lit/res/64959.php#i64959">No.64959</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit33303932393534313737')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('64959')" title="Report Thread 64959"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lit/res/64959.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64959" data-thread="64959"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #151FD0; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('litthread64959');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1400959851007.jpg"> 1400959851007.jpg </a> -(<em>571818 B, 1920x1200</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglit33303932393534313737" target="_blank" href="/lit/src/1400959851007.jpg"> <img src="/lit/thumb/1400959851007s.jpg" alt="571818" class="thumb" /> </a>   			 <blockquote class="opcomment lit33303932393534313737">  I’m plastered. My head is swimming and I can’t care. But this isn’t some whim. I put the note on top of her Dear John letter; it only seemed fitting. Carefully I undress making sure to savor each and every second, feel every fiber brush against my skin.  I stand there waiting… looking at the home around me, A little messy but nothing unheard of for a 20 year old bachelor. My eyes pull towards the many items around me, Rope, several pills of Xanax, A half empty bottle of vodka, a gun, All laying there strewn around the room from my many failures and past epiphanies of hope. But with hope gone I pick up my phone. I look up her phone number, it’s saved under whore. “I’m not weak but everyone has their breaking point. You were mine.” I hit send and grab the cold metal grip of the gun and slowly slide the barrel down my face. It’s surprising how anxiety meds chased by half a bottle will stop the fear of death but not the pain of living, but that’s a lesson I learned long ago. I stagger to the window and fall against the pane with my last friend in hand. It’s A gloomy rainy day, my favorite. I try different positions. First above the ear, but it’s too far back, it feels wrong. I try eating it but the metallic taste is to harsh for my last second. I try the right temple and it feels amazing. I press it hard against the skin to feel the thin bone hiding underneath. I take one more glance out the window… it’s beautiful. My eyes are closed, the gun is raised, and my finger is ready. First a bang…then relief.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lit/res/64959.php#64960" onclick="highlight(64960);">&gt;&gt;</a></td> <td class="reply" id="reply64960"> <a id="64960"></a> <div class="replyheader"> 									 <span class="commentpostername">Betsy Chettinghood</span>  - <span class="idhighlight">Sat, 24 May 2014 17:10:52 EST ID:7eHvGWSo</span> <span class="reflink">  <a href="/lit/res/64959.php#i64960">No.64960</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31303832353833333939')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64960', '64959')" title="Report Post 64960"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64960" data-thread="64959"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2EEF1B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1400965852657.gif"> 1400965852657.gif </a> -(<em>128772 B, 720x480</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lit/src/1400965852657.gif"> <img src="/lit/thumb/1400965852657s.jpg" alt="128772" class="thumb" /> </a>    <blockquote  class="lit31303832353833333939">  <a href = "/lit/res/64959.php" onclick = "highlight(64959)">&gt;&gt;64959</a><br>nope nope nope<br>your a faggot you posted this on random and everyone hated it<br>your an emo fag   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64959.php#64961" onclick="highlight(64961);">&gt;&gt;</a></td> <td class="reply" id="reply64961"> <a id="64961"></a> <div class="replyheader"> 									 <span class="commentpostername">Jack Drarringstane</span>  - <span class="idhighlight">Sat, 24 May 2014 17:23:40 EST ID:b3hsrQga</span> <span class="reflink">  <a href="/lit/res/64959.php#i64961">No.64961</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31333639373135363436')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64961', '64959')" title="Report Post 64961"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64961" data-thread="64959"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C633AF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31333639373135363436">  <a href = "/lit/res/64959.php#64960" onclick = "highlight(64960)">&gt;&gt;64960</a><br>It&#39;s technically OK, in the sense that it&#39;s not rife with sloppy spelling/editing errors. (There are still a few.) Stop fishing for compliments and write something worth reviewing.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64959.php#64962" onclick="highlight(64962);">&gt;&gt;</a></td> <td class="reply" id="reply64962"> <a id="64962"></a> <div class="replyheader"> 									 <span class="commentpostername">Charles Huzzlekut</span>  - <span class="idhighlight">Sat, 24 May 2014 17:25:02 EST ID:kYFMHJc1</span> <span class="reflink">  <a href="/lit/res/64959.php#i64962">No.64962</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit383438393231363033')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64962', '64959')" title="Report Post 64962"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64962" data-thread="64959"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #654420; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit383438393231363033">  <a href = "/lit/res/64959.php#64960" onclick = "highlight(64960)">&gt;&gt;64960</a><br>Some people seemed to enjoy it.<br>You ran right over to lit just to shit on this guy huh?<br>Enjoying your saturday?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64959.php#64964" onclick="highlight(64964);">&gt;&gt;</a></td> <td class="reply" id="reply64964"> <a id="64964"></a> <div class="replyheader"> 									 <span class="commentpostername">Thomas Gobbermat</span>  - <span class="idhighlight">Sat, 24 May 2014 19:00:21 EST ID:7NCkcIJe</span> <span class="reflink">  <a href="/lit/res/64959.php#i64964">No.64964</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31333737343834303035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64964', '64959')" title="Report Post 64964"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64964" data-thread="64959"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9834ED; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31333737343834303035">  I’m plastered. My head is swimming and I can’t care. But this isn’t some whim. I put the note on top of her Dear John letter; it only seemed fitting. I undress savoring every second, feeling each fiber brush against my skin. I stand there waiting, just looking at the home around me. A little messy, but not unusual for a 20 year-old bachelor. My eyes pull towards the items around me: rope, Xanax pills, half-empty bottle of vodka, gun. They&#39;re strewn around the room from many past failures and epiphanies. <br>     Hope gone, I pick up my phone. I look up her phone number. It’s saved under &#39;whore&#39;. “I’m not weak but everyone has their breaking point. You were mine.” I hit send and grab the cold metal grip of the gun and slowly slide the barrel down my face. It’s surprising how anxiety meds chased by half a bottle will stop the fear of death but not the pain of living. I stagger to the window and fall against the pane with my last friend in hand. It&#39;s a rainy day. My favorite. I try different positions. First above the ear, but it’s too far back, it feels wrong. I try eating it but the metallic taste is too harsh for my last second. I try the right temple and it feels amazing. I press it hard against the skin to feel the thin bone hiding underneath. One more glance out the window - it’s beautiful. My eyes are closed, the gun&#39;s raised and my finger is ready. First a bang…then [you don&#39;t feel relief if ur ded nigga. rule of focalization. it has more impact if you end it here anyway].<br><br>I did a five-minute pass for grammar and readability. The changes improve it in <br>my opinion, and I do this for a living. I didn&#39;t really touch the content. Done with all the love in the world.<br><br>I really don&#39;t want to get into an overlong analysis of it, but I&#39;ll mention a couple of the changes I made. This guy &quot;.&quot; is good enough for Raymond Chandler and he&#39;s good enough for you. The run-on sentences, ellipses, listing were excessive and undermined the tone you were developing. Short staccato sentences can be very effective in some circumstances: they heighten tension and can intensify apprehension, anxiety, pretty much anything adrenaline-related. The end of a semantic unit should be &hellip;  <div class="abbrev"> Comment too long. Click <a href="/lit/res/64959.php#64964">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id=""> <div class="thread_header"> <a id="64665"></a> <span class="filetitle">Creative hint fiction</span>  <span class="inbetween"> by </span> <span class="postername">Graham Gemmersare</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 14 Apr 2014 17:19:40 EST ID:FQltgfDs</span></span>  <span class="reflink"> <a href="/lit/res/64665.php#i64665">No.64665</a> </span>    			 <!--  - Awesome Thread? <a href="/lit/taimaba.pl?board=lit&amp;task=vote&amp;thread=64665&amp;vote=0">No!</a> | <a href="/lit/taimaba.pl?board=lit&amp;task=vote&amp;thread=64665&amp;vote=1">Yes!</a>  -->   <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('64665')" title="Report Thread 64665"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lit/res/64665.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64665" data-thread="64665"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #840408; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>-->  </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1397510380892.jpg"> 1397510380892.jpg </a> -(<em>19669 B, 462x346</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglit31363236353736343133" target="_blank" href="/lit/src/1397510380892.jpg"> <img src="/lit/thumb/1397510380892s.jpg" alt="19669" class="thumb" /> </a>   			 <blockquote class="opcomment">  Hint-Fiction is a story of 25 words or fewer that suggests a larger, more complex story. e.g. is Hemingway&#39;s famous shortest story, &quot;For sale: baby shoes, never worn.&quot; You can have a lot of fun with this genre.<br><br> Let&#39;s see what /lit/ comes up with<br><br>&quot;Me and her used to fight a lot. We never fight anymore and I&#39;m really glad, but I still get a little sad reading her obituary.&quot;   </blockquote>   				 				  <span class="omittedposts">  37 posts and 3 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/lit/res/64665.php#64908" onclick="highlight(64908);">&gt;&gt;</a></td> <td class="reply" id="reply64908"> <a id="64908"></a> <div class="replyheader"> 									 <span class="commentpostername">Nathaniel Dobblestock</span>  - <span class="idhighlight">Sun, 18 May 2014 00:47:26 EST ID:QIYgqzhc</span> <span class="reflink">  <a href="/lit/res/64665.php#i64908">No.64908</a>   </span>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64908', '64665')" title="Report Post 64908"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64908" data-thread="64665"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #75FCCE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote >  <a href = "/lit/res/64665.php#64906" onclick = "highlight(64906)">&gt;&gt;64906</a><br>Old Who is way better   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64665.php#64920" onclick="highlight(64920);">&gt;&gt;</a></td> <td class="reply" id="reply64920"> <a id="64920"></a> <div class="replyheader"> 									 <span class="commentpostername">Priscilla Pullycheck</span>  - <span class="idhighlight">Mon, 19 May 2014 20:47:42 EST ID:WMSEBCNF</span> <span class="reflink">  <a href="/lit/res/64665.php#i64920">No.64920</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit32393037303839323736')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64920', '64665')" title="Report Post 64920"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64920" data-thread="64665"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #47AC7C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit32393037303839323736">  <a href = "/lit/res/64665.php#64908" onclick = "highlight(64908)">&gt;&gt;64908</a><br>i agree. i honestly started with 11. checked out 10. eventually got tired of it and looked up recommended classic who episodes on various boards through google and was thoroughly impressed. it definitely makes a statement about modern-day writing compared to the effort and skill demonstrated in the past (in my opinion, anyway. i may be biased)   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64665.php#64952" onclick="highlight(64952);">&gt;&gt;</a></td> <td class="reply" id="reply64952"> <a id="64952"></a> <div class="replyheader"> 									 <span class="commentpostername">Nell Hingerford</span>  - <span class="idhighlight">Fri, 23 May 2014 08:39:22 EST ID:cDSyWuOy</span> <span class="reflink">  <a href="/lit/res/64665.php#i64952">No.64952</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31373031363437393238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64952', '64665')" title="Report Post 64952"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64952" data-thread="64665"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9848CD; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31373031363437393238">  OP you need to check out H.P. Lovecrafts unfinished notes he had scribbled down but never had chance to use them before he died. Accidental hint-fiction gold.<br><br><a href="http://10ptt.com/smf/index.php?topic=227.0" rel="nofollow" target="_blank">http://10ptt.com/smf/index.php?topic=227.0</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64665.php#64956" onclick="highlight(64956);">&gt;&gt;</a></td> <td class="reply" id="reply64956"> <a id="64956"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigger Barddock</span>  - <span class="idhighlight">Sat, 24 May 2014 07:15:02 EST ID:h0+gGFQN</span> <span class="reflink">  <a href="/lit/res/64665.php#i64956">No.64956</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313438323536363632')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64956', '64665')" title="Report Post 64956"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64956" data-thread="64665"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #11BA48; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31313438323536363632">  he held me down all night, thrusting. in the morning i saw my father under my covers   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64665.php#64957" onclick="highlight(64957);">&gt;&gt;</a></td> <td class="reply" id="reply64957"> <a id="64957"></a> <div class="replyheader"> 									 <span class="commentpostername">Rebecca Bennerwill</span>  - <span class="idhighlight">Sat, 24 May 2014 11:59:34 EST ID:bq5scg8g</span> <span class="reflink">  <a href="/lit/res/64665.php#i64957">No.64957</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313039333530383531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64957', '64665')" title="Report Post 64957"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64957" data-thread="64665"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0869FC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31313039333530383531">  <a href = "/lit/res/64665.php#64952" onclick = "highlight(64952)">&gt;&gt;64952</a><br>this is awesome, thanks   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="litthread64937"> <div class="thread_header"> <a id="64937"></a> <span class="filetitle">Foundation Trilogy by Isaac Asimov</span>  <span class="inbetween"> by </span> <span class="postername">Phineas Smallford</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 22 May 2014 02:26:58 EST ID:+tF7tb2G</span></span>  <span class="reflink"> <a href="/lit/res/64937.php#i64937">No.64937</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313937323930333638')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('64937')" title="Report Thread 64937"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lit/res/64937.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64937" data-thread="64937"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D0201F; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('litthread64937');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1400740018986.jpg"> 1400740018986.jpg </a> -(<em>26754 B, 185x300</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglit31313937323930333638" target="_blank" href="/lit/src/1400740018986.jpg"> <img src="/lit/thumb/1400740018986s.jpg" alt="26754" class="thumb" /> </a>   			 <blockquote class="opcomment lit31313937323930333638">  My dad gave me a copy of the Foundation Trilogy a while ago.  Just picked it up last night.  What&#39;s /lit/&#39;s thoughts about the series?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lit/res/64937.php#64938" onclick="highlight(64938);">&gt;&gt;</a></td> <td class="reply" id="reply64938"> <a id="64938"></a> <div class="replyheader"> 									 <span class="commentpostername">William Buppergold</span>  - <span class="idhighlight">Thu, 22 May 2014 02:30:52 EST ID:Pg6Z3jcV</span> <span class="reflink">  <a href="/lit/res/64937.php#i64938">No.64938</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313936373137343234')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64938', '64937')" title="Report Post 64938"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64938" data-thread="64937"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #44C3B0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1400740252421.png"> 1400740252421.png </a> -(<em>8021 B, 493x402</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lit/src/1400740252421.png"> <img src="/lit/thumb/1400740252421s.jpg" alt="8021" class="thumb" /> </a>    <blockquote  class="lit31313936373137343234">  <a href = "/lit/res/64937.php" onclick = "highlight(64937)">&gt;&gt;64937</a><br>ten long boobless hours, no pictures, no plot, and no boobs   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64937.php#64939" onclick="highlight(64939);">&gt;&gt;</a></td> <td class="reply" id="reply64939"> <a id="64939"></a> <div class="replyheader"> 									 <span class="commentpostername">William Buppergold</span>  - <span class="idhighlight">Thu, 22 May 2014 02:31:27 EST ID:Pg6Z3jcV</span> <span class="reflink">  <a href="/lit/res/64937.php#i64939">No.64939</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313936373137343234')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64939', '64937')" title="Report Post 64939"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64939" data-thread="64937"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C5B4BF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31313936373137343234">  <a href = "/lit/res/64937.php" onclick = "highlight(64937)">&gt;&gt;64937</a><br>p.s.<br><br>yes because I frequent the /jenk/ board   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64937.php#64940" onclick="highlight(64940);">&gt;&gt;</a></td> <td class="reply" id="reply64940"> <a id="64940"></a> <div class="replyheader"> 									 <span class="commentpostername">Emma Summleman</span>  - <span class="idhighlight">Thu, 22 May 2014 02:50:33 EST ID:C5lny9KQ</span> <span class="reflink">  <a href="/lit/res/64937.php#i64940">No.64940</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31333735303536363035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64940', '64937')" title="Report Post 64940"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64940" data-thread="64937"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F2EA3A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31333735303536363035">  <a href = "/lit/res/64937.php" onclick = "highlight(64937)">&gt;&gt;64937</a><br>It&#39;s good... but dry... dryer than satan&#39;s sunburn. Like the whole thing is middle-aged males talking to each other. Asimov isn&#39;t very good at the razzle dazzle. It&#39;s hard to get sucked in by the universe the way you&#39;d do with other seminal scifi.<br><br>It&#39;s certainly worth a try.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64937.php#64942" onclick="highlight(64942);">&gt;&gt;</a></td> <td class="reply" id="reply64942"> <a id="64942"></a> <div class="replyheader"> 									 <span class="commentpostername">William Buppergold</span>  - <span class="idhighlight">Thu, 22 May 2014 03:01:54 EST ID:Pg6Z3jcV</span> <span class="reflink">  <a href="/lit/res/64937.php#i64942">No.64942</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31313936373137343234')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64942', '64937')" title="Report Post 64942"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64942" data-thread="64937"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3D26B3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1400742114421.jpg"> 1400742114421.jpg </a> -(<em>48534 B, 598x718</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lit/src/1400742114421.jpg"> <img src="/lit/thumb/1400742114421s.jpg" alt="48534" class="thumb" /> </a>    <blockquote  class="lit31313936373137343234">  <a href = "/lit/res/64937.php#64940" onclick = "highlight(64940)">&gt;&gt;64940</a><br>AND IT HAS NO BOOBS!!!!!!   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="litthread64910"> <div class="thread_header"> <a id="64910"></a> <span class="filetitle">Catcher in the Rye/ SIster Novel</span>  <span class="inbetween"> by </span> <span class="postername">Hedda Gaffingdire</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 18 May 2014 19:54:59 EST ID:hYUtk2Q9</span></span>  <span class="reflink"> <a href="/lit/res/64910.php#i64910">No.64910</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit32373333333236393338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('64910')" title="Report Thread 64910"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lit/res/64910.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64910" data-thread="64910"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9DB6FB; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('litthread64910');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lit/src/1400457299502.jpg"> 1400457299502.jpg </a> -(<em>98294 B, 465x600</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglit32373333333236393338" target="_blank" href="/lit/src/1400457299502.jpg"> <img src="/lit/thumb/1400457299502s.jpg" alt="98294" class="thumb" /> </a>   			 <blockquote class="opcomment lit32373333333236393338">  What&#39;s the female coming of age novel as opposed to the CitR?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lit/res/64910.php#64911" onclick="highlight(64911);">&gt;&gt;</a></td> <td class="reply" id="reply64911"> <a id="64911"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigel Fucklechetch</span>  - <span class="idhighlight">Sun, 18 May 2014 21:48:58 EST ID:8sAgHl0E</span> <span class="reflink">  <a href="/lit/res/64910.php#i64911">No.64911</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31343434333539303636')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64911', '64910')" title="Report Post 64911"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64911" data-thread="64910"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F310C6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31343434333539303636">  Hmmmm good question.<br><br>I don&#39;t think there is an obvious parallel. Not in subject matter anyway. Maybe the loner archetype is one that applies a lot easier to men. <br><br>Some titles jump out that women often cite as an adolescent favourite in the same way, though. The Handmaid&#39;s Tale for one, but that&#39;s not an easy fit.<br><br>Actually, now that I think about it, many of the literate chicas I&#39;ve spoken to have described Little Women as their &quot;coming of age&quot; novel. Since it&#39;s from the late 1860s and is about adolescent girls coming into traditional womanhood, that probably speaks volumes about gender differences today when you compare, say, Jo March with the likes of Holden Caulfield. But that&#39;s anecdotal, so there might be nothing in it.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64910.php#64912" onclick="highlight(64912);">&gt;&gt;</a></td> <td class="reply" id="reply64912"> <a id="64912"></a> <div class="replyheader"> 									 <span class="commentpostername">Betsy Gucklewark</span>  - <span class="idhighlight">Sun, 18 May 2014 23:59:11 EST ID:cYNECG8C</span> <span class="reflink">  <a href="/lit/res/64910.php#i64912">No.64912</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit31393835383338313930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64912', '64910')" title="Report Post 64912"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64912" data-thread="64910"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #99F378; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit31393835383338313930">  &quot;The Bell Jar&quot; by Sylvia Plath is a pretty typical coming-of-age story for young women.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lit/res/64910.php#64919" onclick="highlight(64919);">&gt;&gt;</a></td> <td class="reply" id="reply64919"> <a id="64919"></a> <div class="replyheader"> 									 <span class="commentpostername">Ernest Nocklepuck</span>  - <span class="idhighlight">Mon, 19 May 2014 20:30:29 EST ID:hYUtk2Q9</span> <span class="reflink">  <a href="/lit/res/64910.php#i64919">No.64919</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lit32373333333236393338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('64919', '64910')" title="Report Post 64919"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="64919" data-thread="64910"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #247ED0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lit32373333333236393338">  <a href = "/lit/res/64910.php#64912" onclick = "highlight(64912)">&gt;&gt;64912</a><br>I always thought  it was a long suicide note.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://insomniacgamers.net"><img src="http://cdn.420chan.org/sp/i.png"></a>
		</div>
			
<div style="margin: 5px auto 1px; width: 728px;">
	<a target="_blank" href="http://taimashop.co/collections/apparel"><img src="http://cdn.420chan.org/s/img/shirtbanner.gif"></a>
</div>
<style type="text/css" media="screen">
.iflb iframe { height: 90px !important;}
.iflb { display: none; margin: 0 auto; width: 728px; }
</style>

<div class="iflb">
		<script type="text/javascript">
		   var sppc_site      = '13';
		   var sppc_channel   = '82';
		   var sppc_dimension = '1';
		   var sppc_width     = '728';
		   var sppc_height    = '90';
		   var sppc_palette   = '27';
		   var sppc_user      = '50';
		</script>
		<!-- <script type="text/javascript" src="http://adserver.420network.com/show.js"></script> -->
	</div>
 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/lit/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="lit" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">  <a href="/lit/2.php">&lt;&lt;Last</a>   <span style="font-size: +1;">Pages</span>   <a href="/lit/4.php">Next&gt;&gt;</a>  <br />   <a href="/lit/index.php">0</a>     <a href="/lit/1.php">1</a>     <a href="/lit/2.php">2</a>      3    <a href="/lit/4.php">4</a>     <a href="/lit/5.php">5</a>     <a href="/lit/6.php">6</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
<div id="footer">
  <p class="footer">
    <a href="http://netwizard.420chan.org/kabatrac">Powered by Taimaba 0.6</a>
  </p>
  &copy; 2005-2010 420chan &amp; Taima Labs
  &nbsp;&nbsp;&nbsp;&nbsp;  
  <a href="http://www.420chan.org/#staff">Contact</a>
  &nbsp;&nbsp;
  <a href="http://www.twitter.com/420chan">Twitter</a>
</div>
-->

<div id="foot">
	<div class="full_width">
		<div class="page">
			<ul id="leftcol">
				<li class="widget widget_get_recent_comments" id="get-recent-comments">
					<h3>Active Discussions</h3>
					<div id="get_recent_comments_wrap">
						<ul>
							<li><img width='32' height='32' class='boardicon' alt='h' src='/static/images/board_icons/h_icon_32.png' />
		<span class='byline'>Hentai - <a href='/h/res/201075.php' class='boardlink'>Thread 201075</a></span>
		<p>DICKS EVERYWHERE... <a href='/h/res/201075.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='wooo' src='/static/images/board_icons/wooo_icon_32.png' />
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3851307.php' class='boardlink'>Thread 3851307</a></span>
		<p>>>3851518
He didn't deserve that title reign either, but they needed a transition champion.
He can... <a href='/wooo/res/3851307.php' class='boardlink'>&#8629;</a></p></li>
						</ul>
					</div>
				</li>
				<div class="icon"></div>
			</ul>

			<!-- <ul class="rightcol space">
				<li class="widget twitter" id="status-twitter">
					<h3>420chan Status</h3>
					<ul id="tweets">
					</ul>
					<div class="icon"></div>
				</li>
			</ul> -->
			
			<script type="text/javascript">					
				$(document).ready(function(){
					$('#infobar .top').click(function(){
						$('html, body').animate({scrollTop:0}, 'slow');
					});
				});
			</script>

			<ul class="rightcol" style="float: right;">
				<h3>Follow Us!</h3>

				<li class="widget widget_text">
					<div class="textwidget">
						<!-- <p>Advertise →<span class="contribute_icon"></span></p> -->
						<p>420chan Status → <a href="http://twitter.com/420chan">@420chan</a></p>
						<p>420chan Bans → <a href="http://twitter.com/420bans">@420bans</a></p>
						<p>Netjester → <a href="http://twitter.com/NetjesterAI">@NetjesterAI</a></p>
					</div>
				</li>

				<!-- <li class="widget widget_text" id="text-5">
					<h3>About</h3>
					<div class="textwidget">
						<p>j</p>
						<p><a href="#faq">→</a></p>

					</div>
				</li> -->
			</ul>
		</div>
	</div>
</div>

<div id="infobar">
	<div class="full_width">

		<div class="page">
			<ul>
				<li><a class="copyright" href="/">420chan! The best imageboard community on the planet!</a></li>
			</ul>
			<span class="top"></span>
		</div>
	</div>
</div>

<script src="http://cdn.420chan.org/a/?js" type="text/javascript"></script> </body> </html>

