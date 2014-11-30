http://boards.420chan.org/math/5.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Wed, 23 Jul 2014 20:55:39 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> Mathematics - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/math_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/math_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/math/5.php';
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
	 <div id="header"> <div id="board_logo"> <a href="/math/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/math_icon_64.png" alt="/math/ Icon" /> <p class="board_title_block"> <span class="board_name">/math/</span> <span class="board_title">Mathematics</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
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
	 <!--  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/math/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="math" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />     <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>  <tr> <td class="postblock">Name</td> <td> <input title="Name" type="text" name="field1" style="width:224px;" /> <div class="tooltip">  You can leave this blank to post anonymously, or you can create a Tripcode by using the float <b>Name#Password</b> </div>					 </td> </tr>    <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div>  <script type="text/javascript">set_inputs("postform")</script> <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 3000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> <li>This is a work-safe board. Posting adult images is forbidden.</li>			  </ul> </div> <hr style="margin-bottom:2px;" /> 		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 <hr style="margin-top:2px;" />   <form id="delform" action="/math/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="math" />    <div id="maththread13835"> <div class="thread_header"> <a id="13835"></a> <span class="filetitle">eigenwat</span>  <span class="inbetween"> by </span> <span class="postername">Jarvis Morringstot</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 01 Apr 2014 17:57:15 EST ID:GBVWm2Fa</span></span>  <span class="reflink"> <a href="/math/res/13835.php#i13835">No.13835</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31383132313536343431')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('13835')" title="Report Thread 13835"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/math/res/13835.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13835" data-thread="13835"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E5BB76; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('maththread13835');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1396389435399.jpg"> 1396389435399.jpg </a> -(<em>6625 B, 251x168</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmath31383132313536343431" target="_blank" href="/math/src/1396389435399.jpg"> <img src="/math/thumb/1396389435399s.jpg" alt="6625" class="thumb" /> </a>   			 <blockquote class="opcomment math31383132313536343431">  I just watched an MIT lecture on linear algebra where the prof wrote the fibonnci sequence as a matrix equation and found the positive eigenvalue was the golden ratio. I went back to relearn linear algebra because I thought I was missing something (I just followed some algorithms to solve differential equations without much thought). Now it seems I&#39;ve underestimated how crucial this eigenshit is to math and applied math especially. I want to restart my lin alg knowledge from the base and then build up to applications of it. Where do I start? Any suggestions? Thanks.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/math/res/13835.php#13845" onclick="highlight(13845);">&gt;&gt;</a></td> <td class="reply" id="reply13845"> <a id="13845"></a> <div class="replyheader"> 									 <span class="commentpostername">Fucking Fidgelodge</span>  - <span class="idhighlight">Wed, 02 Apr 2014 01:18:51 EST ID:qz3c7Bt+</span> <span class="reflink">  <a href="/math/res/13835.php#i13845">No.13845</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math383439343132393234')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13845', '13835')" title="Report Post 13845"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13845" data-thread="13835"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FC3A1C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math383439343132393234">  Any proofs based linear algebra course should be fine. It&#39;s all vector spaces.<br><br>The fibonacci trick relies on generating functions for certain recurrence relations being representable as linear transforms. It&#39;s not linear algebra per se.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13835.php#13847" onclick="highlight(13847);">&gt;&gt;</a></td> <td class="reply" id="reply13847"> <a id="13847"></a> <div class="replyheader"> 									 <span class="commentpostername">Shit Bipperway</span>  - <span class="idhighlight">Wed, 02 Apr 2014 03:29:09 EST ID:GBVWm2Fa</span> <span class="reflink">  <a href="/math/res/13835.php#i13847">No.13847</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31383132313536343431')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13847', '13835')" title="Report Post 13847"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13847" data-thread="13835"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #28ECCE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31383132313536343431">  <a href = "/math/res/13835.php#13845" onclick = "highlight(13845)">&gt;&gt;13845</a><br>hmm maybe I should revisit discrete as well then   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13835.php#13849" onclick="highlight(13849);">&gt;&gt;</a></td> <td class="reply" id="reply13849"> <a id="13849"></a> <div class="replyheader"> 									 <span class="commentpostername">Lillian Blondlehodge</span>  - <span class="idhighlight">Wed, 02 Apr 2014 22:55:24 EST ID:+KPsBlYP</span> <span class="reflink">  <a href="/math/res/13835.php#i13849">No.13849</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31323031373934303034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13849', '13835')" title="Report Post 13849"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13849" data-thread="13835"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E80AFD; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31323031373934303034">  <a href = "/math/res/13835.php#13847" onclick = "highlight(13847)">&gt;&gt;13847</a><br>There&#39;s thousands of websites/videos on linear algebra. Find one you like if you want to start from the ground up. But first, take a look at the wiki entry for eigenvalue/vectors. The mechanics of actually multiplying matrices/vectors is tricky, but eigenwats are a fairly simple concept.<br><br>Then search for Difference Equations, or recurrent relations.  It&#39;s not &quot;differential&quot;. It&#39;s difference equations. FUUUUUUCK. I hate that feeling when you realize you&#39;ve forgotten everything about a class you took. You sound like you&#39;ve had it with linear algebra, and I just realized I&#39;ve forgotten most of my difference equation class.<br><br>This looks like a good summary, though it moves very fast: <a href="https://math.uc.edu/~halpern/Combinatorics/Hocombinatorics/Differenceequations.pdf" rel="nofollow" target="_blank">https://math.uc.edu/~halpern/Combinatorics/Hocombinatorics/Differenceequations.pdf</a>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="maththread13833"> <div class="thread_header"> <a id="13833"></a> <span class="filetitle">Riddle Me This</span>  <span class="inbetween"> by </span> <span class="postername">Fiend </span> <span class="postertrip">!!1C9jE+w+</span> <span class="inbetween"> - <span class="idhighlight">Tue, 01 Apr 2014 16:00:39 EST ID:8prwY8OH</span></span>  <span class="reflink"> <a href="/math/res/13833.php#i13833">No.13833</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31323037303135353530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('13833')" title="Report Thread 13833"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/math/res/13833.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13833" data-thread="13833"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BE9E57; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('maththread13833');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1396382439123.jpg"> 1396382439123.jpg </a> -(<em>1922390 B, 3264x2448</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmath31323037303135353530" target="_blank" href="/math/src/1396382439123.jpg"> <img src="/math/thumb/1396382439123s.jpg" alt="1922390" class="thumb" /> </a>   			 <blockquote class="opcomment math31323037303135353530">  Now you may have heard the of the 10 dot problem, where you are tasked with arranging 10 dots so that they are lined up in 5 rows, with 4 dots in each row. The answer is a 5 pointed star (top left of picture). A more daunting challenge is to arrange only 9 dots, into 10 rows of 3 (answer on bottom left). <br><br>This got me thinking about the ratio of dots to rows and the number of dots in the row. So I created a ratio that would compare the number of dots in our shape to the number of dots in the rectangle assumed after the words &quot;5 rows of 4.&quot; <br>5 rows of 4 would be 20 dots, but you can do it using only 10, making the ratio 2. <br><br>Lemme give you an equation because my words are failing me:<br><blockquote class = "unkfunc">&gt; x = rk/d<br></blockquote>r is the number of rows, k is the number of dots in each row, and d is the total number of dots. That means the ratio of 9 dots in 10 rows of 3 is x = (10r3)/9 = 3.333.<br>In the top right part of my image I have the general formula for when not all the rows contain the same number of dots.<br><br>At this point you&#39;ve probably noticed that you can use this generalized formula on any group of intersected lines to find out the average number of lines at any given intersection in the shape. Well my question is this:<br><blockquote class = "unkfunc">&gt; Can you create a shape with x &gt; 3.333?<br>&gt; If not can you prove that it is impossible?<br></blockquote>Now granted, as pictured bottom right, turning any dot formation into a fractal will allow x to go to infinity, but is there any other way to average more than 3.333 lines per intersection?   </blockquote>   				 				  <span class="omittedposts">  5 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/math/res/13833.php#13841" onclick="highlight(13841);">&gt;&gt;</a></td> <td class="reply" id="reply13841"> <a id="13841"></a> <div class="replyheader"> 									 <span class="commentpostername">Hugh Pungerdale</span>  - <span class="idhighlight">Tue, 01 Apr 2014 23:11:05 EST ID:dtJRvm7a</span> <span class="reflink">  <a href="/math/res/13833.php#i13841">No.13841</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31323636383736343337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13841', '13833')" title="Report Post 13841"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13841" data-thread="13833"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #784723; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31323636383736343337">  <a href = "/math/res/13833.php#13840" onclick = "highlight(13840)">&gt;&gt;13840</a><br><blockquote class = "unkfunc">&gt;Can you figure out how?<br></blockquote>Probably not. &quot;The system&quot; you&#39;re using isn&#39;t very clear. So go ahead, I&#39;m curious where you&#39;re going with this.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13833.php#13842" onclick="highlight(13842);">&gt;&gt;</a></td> <td class="reply" id="reply13842"> <a id="13842"></a> <div class="replyheader"> 									 <span class="commentpostername">Hugh Pungerdale</span>  - <span class="idhighlight">Wed, 02 Apr 2014 00:32:53 EST ID:dtJRvm7a</span> <span class="reflink">  <a href="/math/res/13833.php#i13842">No.13842</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31323636383736343337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13842', '13833')" title="Report Post 13842"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13842" data-thread="13833"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1BFBE3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31323636383736343337">  <a href = "/math/res/13833.php#13841" onclick = "highlight(13841)">&gt;&gt;13841</a><br>I mean, I got x = 3.75 by just arranging <a href = "/math/res/13833.php#13838" onclick = "highlight(13838)">&gt;&gt;13838</a> into a triangle. But you&#39;ll probably tell me this is cheating. Not allowing the same shape inside of itself? Why not? It&#39;s just arbitrary bro. Also from <a href = "/math/res/13833.php#13838" onclick = "highlight(13838)">&gt;&gt;13838</a>, you&#39;re demonstrating there doesn&#39;t need to be a dot at every intersection of rows. I&#39;d rather it be a rule that there must be a dot at every intersection instead of the same shape thing.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13833.php#13843" onclick="highlight(13843);">&gt;&gt;</a></td> <td class="reply" id="reply13843"> <a id="13843"></a> <div class="replyheader"> 									 <span class="commentpostername">Fiend </span> <span class="postertrip">!!1C9jE+w+</span> - <span class="idhighlight">Wed, 02 Apr 2014 00:33:46 EST ID:8prwY8OH</span> <span class="reflink">  <a href="/math/res/13833.php#i13843">No.13843</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31323037303135353530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13843', '13833')" title="Report Post 13843"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13843" data-thread="13833"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #09C191; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1396413226592.jpg"> 1396413226592.jpg </a> -(<em>2614170 B, 3264x2448</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/math/src/1396413226592.jpg"> <img src="/math/thumb/1396413226592s.jpg" alt="2614170" class="thumb" /> </a>    <blockquote  class="math31323037303135353530">  <a href = "/math/res/13833.php#13841" onclick = "highlight(13841)">&gt;&gt;13841</a><br>I made a 5x5 version of the above image. I&#39;m sorry the drawing is sloppy, but I hope the different colors make it clear.<br>This arrangement of 25 dots has 14 rows of 5 dots each (black), then 4 rows of 4 dots (blue), 10 rows of 3 dots (orange), and 2 rows of 2 dots (ugly ass maroon color). So to ditch the notation I was using, x = (14*5 + 4*4 + 10*3 + 2*2) / 25 which simplifies to 120/25 or x = 4.8.<br>I assume that a 7x7 would yield yet a higher x value, and 9x9 and so on, meaning x has no limit, as the more you expand the same pattern, there are more angles to create rows in, and therefore more lines at each intersection.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13833.php#13844" onclick="highlight(13844);">&gt;&gt;</a></td> <td class="reply" id="reply13844"> <a id="13844"></a> <div class="replyheader"> 									 <span class="commentpostername">Whitey Blezzleridge</span>  - <span class="idhighlight">Wed, 02 Apr 2014 01:14:35 EST ID:HvBSycws</span> <span class="reflink">  <a href="/math/res/13833.php#i13844">No.13844</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31313530343336353237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13844', '13833')" title="Report Post 13844"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13844" data-thread="13833"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #19B8F8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1396415675996.png"> 1396415675996.png </a> -(<em>3925 B, 311x312</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/math/src/1396415675996.png"> <img src="/math/thumb/1396415675996s.jpg" alt="3925" class="thumb" /> </a>    <blockquote  class="math31313530343336353237">  <a href = "/math/res/13833.php#13843" onclick = "highlight(13843)">&gt;&gt;13843</a><br>Looks like a fractal to me   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13833.php#13846" onclick="highlight(13846);">&gt;&gt;</a></td> <td class="reply" id="reply13846"> <a id="13846"></a> <div class="replyheader"> 									 <span class="commentpostername">Fiend </span> <span class="postertrip">!!1C9jE+w+</span> - <span class="idhighlight">Wed, 02 Apr 2014 01:21:22 EST ID:8prwY8OH</span> <span class="reflink">  <a href="/math/res/13833.php#i13846">No.13846</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31323037303135353530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13846', '13833')" title="Report Post 13846"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13846" data-thread="13833"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #053A7A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31323037303135353530">  <a href = "/math/res/13833.php#13844" onclick = "highlight(13844)">&gt;&gt;13844</a><br>Does that type of expansion fall under the literal definition of &#39;fractal&#39;?   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="maththread13829"> <div class="thread_header"> <a id="13829"></a> <span class="filetitle">Derivatives, Help!!</span>  <span class="inbetween"> by </span> <span class="postername">Martin Fittingput</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 30 Mar 2014 20:17:02 EST ID:g5vmHJ4m</span></span>  <span class="reflink"> <a href="/math/res/13829.php#i13829">No.13829</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31363733353334323235')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('13829')" title="Report Thread 13829"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/math/res/13829.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13829" data-thread="13829"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #477EF7; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('maththread13829');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1396225022113.jpg"> 1396225022113.jpg </a> -(<em>1932285 B, 3264x2448</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmath31363733353334323235" target="_blank" href="/math/src/1396225022113.jpg"> <img src="/math/thumb/1396225022113s.jpg" alt="1932285" class="thumb" /> </a>   			 <blockquote class="opcomment math31363733353334323235">  This is a pretty easy question but I don&#39;t really understand how to explain it. <br>Any help?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/math/res/13829.php#13830" onclick="highlight(13830);">&gt;&gt;</a></td> <td class="reply" id="reply13830"> <a id="13830"></a> <div class="replyheader"> 									 <span class="commentpostername">Eugene Pillyhall</span>  - <span class="idhighlight">Sun, 30 Mar 2014 20:39:37 EST ID:ZxnBDs99</span> <span class="reflink">  <a href="/math/res/13829.php#i13830">No.13830</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31353331313732333032')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13830', '13829')" title="Report Post 13830"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13830" data-thread="13829"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0FBEC8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31353331313732333032">  If you&#39;ve done derivative problems with position, velocity, etc. think of it this way: g(x) = distance/time (velocity)<br>g&#39;(x) = distance/time^2 (acceleration, rate of change of velocity)<br><br>g(x) = water depth with respect to time x<br>g&#39;(x) = rate of change of depth with respect to time x<br>g&#39;(25)= rate of change at 25mins after the pool has started to fill<br><br>I&#39;m very high, this could probably be explained in a better fashion. Hope it helps nonetheless   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13829.php#13831" onclick="highlight(13831);">&gt;&gt;</a></td> <td class="reply" id="reply13831"> <a id="13831"></a> <div class="replyheader"> 									 <span class="commentpostername">Martin Fittingput</span>  - <span class="idhighlight">Sun, 30 Mar 2014 21:39:22 EST ID:g5vmHJ4m</span> <span class="reflink">  <a href="/math/res/13829.php#i13831">No.13831</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31363733353334323235')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13831', '13829')" title="Report Post 13831"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13831" data-thread="13829"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9D670D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31363733353334323235">  <a href = "/math/res/13829.php#13830" onclick = "highlight(13830)">&gt;&gt;13830</a><br>that&#39;s exactly what I had but thank you very much for clarifying and confirming!   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="maththread13806"> <div class="thread_header"> <a id="13806"></a> <span class="filetitle">Help me understand this type of algebra please, I need you!</span>  <span class="inbetween"> by </span> <span class="postername">Reuben Cobbermere</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 24 Mar 2014 14:59:33 EST ID:bTMSKJUg</span></span>  <span class="reflink"> <a href="/math/res/13806.php#i13806">No.13806</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math3338323639373530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('13806')" title="Report Thread 13806"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/math/res/13806.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13806" data-thread="13806"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #64F7A1; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('maththread13806');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1395687573606.jpg"> 1395687573606.jpg </a> -(<em>228953 B, 1024x911</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmath3338323639373530" target="_blank" href="/math/src/1395687573606.jpg"> <img src="/math/thumb/1395687573606s.jpg" alt="228953" class="thumb" /> </a>   			 <blockquote class="opcomment math3338323639373530">  So i&#39;m not expecting you to help but i&#39;m really hoping because I really need help with this until tomorrow. Yes it&#39;s for school. It&#39;s not homework, but a question on a test I couldn&#39;t answer.<br><br>But i&#39;m not needing help with just this particular problem, but help on solving these types of problems. Make me understand how this works.<br><br>So, a guy has 5 dollar bills and 10 dollar bills, in total 215 dollar bills. How many 10 dollar bills does he need to have for it to be at least 1500 dollars in total?<br><br>Thanks!<br><br>I&#39;m hoping to not just be able to answer math questions in school but to really comprehent mathematics one day, like really GET it.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/math/res/13806.php#13807" onclick="highlight(13807);">&gt;&gt;</a></td> <td class="reply" id="reply13807"> <a id="13807"></a> <div class="replyheader"> 									 <span class="commentpostername">Hamilton Nenkinlock</span>  - <span class="idhighlight">Mon, 24 Mar 2014 16:01:10 EST ID:MTIV7/tU</span> <span class="reflink">  <a href="/math/res/13806.php#i13807">No.13807</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31343134323037373737')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13807', '13806')" title="Report Post 13807"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13807" data-thread="13806"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #010702; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31343134323037373737">  So this dude has x 10$ bills. He also has (215 - x) 5$ bills because in total he has 215.<br>So the money he owns is 10*x + 5*(215 - x) $ = 5x + 1075 $.<br>The smallest x such that 5x + 1075 is at least 1500 is 425/5 = 85.<br>You can also check that with 85 bills of 10$ and 130 of 5$, he indeed has 1500$, the rich fucker.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13806.php#13808" onclick="highlight(13808);">&gt;&gt;</a></td> <td class="reply" id="reply13808"> <a id="13808"></a> <div class="replyheader"> 									 <span class="commentpostername">Hamilton Nenkinlock</span>  - <span class="idhighlight">Mon, 24 Mar 2014 16:04:53 EST ID:MTIV7/tU</span> <span class="reflink">  <a href="/math/res/13806.php#i13808">No.13808</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31343134323037373737')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13808', '13806')" title="Report Post 13808"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13808" data-thread="13806"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #981C07; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31343134323037373737">  <a href = "/math/res/13806.php#13807" onclick = "highlight(13807)">&gt;&gt;13807</a><br>Just in case this is blurry, the third step is actually this kind of reflection:<br>If you want 5x + 1075 to be at least 1500, then 5x has to be at least 1500-1075=425. This gives x &gt;= 85, because then 5x &gt;= 5*85 = 425.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13806.php#13809" onclick="highlight(13809);">&gt;&gt;</a></td> <td class="reply" id="reply13809"> <a id="13809"></a> <div class="replyheader"> 									 <span class="commentpostername">Reuben Cobbermere</span>  - <span class="idhighlight">Mon, 24 Mar 2014 16:14:51 EST ID:bTMSKJUg</span> <span class="reflink">  <a href="/math/res/13806.php#i13809">No.13809</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math3338323639373530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13809', '13806')" title="Report Post 13809"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13809" data-thread="13806"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6C3CB5; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math3338323639373530">  <a href = "/math/res/13806.php#13807" onclick = "highlight(13807)">&gt;&gt;13807</a><br><a href = "/math/res/13806.php#13808" onclick = "highlight(13808)">&gt;&gt;13808</a><br>Thanks! Thanks a whole bunch! You&#39;re awesome!   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="maththread13708"> <div class="thread_header"> <a id="13708"></a> <span class="filetitle">Just a quick question and i&#39;ll be on my way</span>  <span class="inbetween"> by </span> <span class="postername">Charles Fuckingshit</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 20 Feb 2014 02:31:01 EST ID:QD7zvUn8</span></span>  <span class="reflink"> <a href="/math/res/13708.php#i13708">No.13708</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math383434303534393831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('13708')" title="Report Thread 13708"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/math/res/13708.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13708" data-thread="13708"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7CD4EC; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('maththread13708');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1392881461795.png"> 1392881461795.png </a> -(<em>4977 B, 342x192</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmath383434303534393831" target="_blank" href="/math/src/1392881461795.png"> <img src="/math/thumb/1392881461795s.jpg" alt="4977" class="thumb" /> </a>   			 <blockquote class="opcomment math383434303534393831">  I know it&#39;s probably a stupid question to ask, but if somebody could at least give me a hint on the solving for y part, I could figure the rest out.<br><br>It seems simple but I must be having a brain fart.   </blockquote>   				 				  <span class="omittedposts">   2 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/math/res/13708.php#13726" onclick="highlight(13726);">&gt;&gt;</a></td> <td class="reply" id="reply13726"> <a id="13726"></a> <div class="replyheader"> 									 <span class="commentpostername">Angus Peshson</span>  - <span class="idhighlight">Fri, 28 Feb 2014 19:36:02 EST ID:3E9PS/tX</span> <span class="reflink">  <a href="/math/res/13708.php#i13726">No.13726</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31313234373537313233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13726', '13708')" title="Report Post 13726"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13726" data-thread="13708"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7E356A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31313234373537313233">  This problem looks easy enough that you don&#39;t have to use implicit differentiation. Just do like the problem says. solve for y. I have no idea what in the sam fuck the previous poster in this thread is talking about when he says &quot;write the left member&quot; do you mean the left hand side? THE ONLY place in mathematics we ever use the word &quot;member&quot; is when we&#39;re talking about elements in sets. OP. Here&#39;s what you do. <br><br> 1.) Solve for y : It should look like :  y = (x^3 - 2) / ( (1-3)(2x^2) )<br> 2.) Differentiate. Done.<br> 3.) Looks like you&#39;re gonna be using quotient rule. Since I didn&#39;t further simplify the Right Hand side, I may be wrong and you could end up getting away using simple power rule. I don&#39;t know. But it looks like quotient rule.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13708.php#13731" onclick="highlight(13731);">&gt;&gt;</a></td> <td class="reply" id="reply13731"> <a id="13731"></a> <div class="replyheader"> 									 <span class="commentpostername">Augustus Dangerbere</span>  - <span class="idhighlight">Sat, 01 Mar 2014 00:44:16 EST ID:dtJRvm7a</span> <span class="reflink">  <a href="/math/res/13708.php#i13731">No.13731</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31323636383736343337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13731', '13708')" title="Report Post 13731"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13731" data-thread="13708"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #45A9AC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31323636383736343337">  <a href = "/math/res/13708.php#13726" onclick = "highlight(13726)">&gt;&gt;13726</a><br>No, look at the original problem.<br><br>y = (x^3 - 2) / (2x^2 - 3)<br><br>so<br><br>dy/dx = ((3x^2)(2x^2 - 3) - (x^3 - 2)(4x)) / (2x^2 - 3)^2<br>          = (2x^4 -9x^2 + 8x) / (4x^4 - 12x^2 + 9)<br><br>/thread   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13708.php#13736" onclick="highlight(13736);">&gt;&gt;</a></td> <td class="reply" id="reply13736"> <a id="13736"></a> <div class="replyheader"> 									 <span class="commentpostername">Shit Bannerstone</span>  - <span class="idhighlight">Sun, 02 Mar 2014 10:54:59 EST ID:ELymY0SU</span> <span class="reflink">  <a href="/math/res/13708.php#i13736">No.13736</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31343134303733313935')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13736', '13708')" title="Report Post 13736"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13736" data-thread="13708"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #96E5D2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31343134303733313935">  <a href = "/math/res/13708.php#13726" onclick = "highlight(13726)">&gt;&gt;13726</a><br>English is not my native language, and we use the term member referring to either side of the equation. I didn&#39;t know it could put you in so much confusion, sorry about that.<br><br>Also my answer was incorrect, as I saw an x too many, see Augustus&#39;s post for the correct answer.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13708.php#13779" onclick="highlight(13779);">&gt;&gt;</a></td> <td class="reply" id="reply13779"> <a id="13779"></a> <div class="replyheader"> 									 <span class="commentpostername">Ernest Dorryhit</span>  - <span class="idhighlight">Tue, 18 Mar 2014 14:19:27 EST ID:weDVNH8d</span> <span class="reflink">  <a href="/math/res/13708.php#i13779">No.13779</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math33323832363835303933')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13779', '13708')" title="Report Post 13779"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13779" data-thread="13708"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3BFF8F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1395166767797.jpg"> 1395166767797.jpg </a> -(<em>48335 B, 530x529</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/math/src/1395166767797.jpg"> <img src="/math/thumb/1395166767797s.jpg" alt="48335" class="thumb" /> </a>    <blockquote  class="math33323832363835303933">  I don&#39;t understand that there will be an extra minus sign using the second substitution method. Thanks in advance.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13708.php#13799" onclick="highlight(13799);">&gt;&gt;</a></td> <td class="reply" id="reply13799"> <a id="13799"></a> <div class="replyheader"> 									 <span class="commentpostername">Priscilla Duckcocke</span>  - <span class="idhighlight">Mon, 24 Mar 2014 06:03:24 EST ID:weDVNH8d</span> <span class="reflink">  <a href="/math/res/13708.php#i13799">No.13799</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math33323832363835303933')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13799', '13708')" title="Report Post 13799"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13799" data-thread="13708"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F5C7D6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1395655404802.jpg"> 1395655404802.jpg </a> -(<em>9994 B, 226x223</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/math/src/1395655404802.jpg"> <img src="/math/thumb/1395655404802s.jpg" alt="9994" class="thumb" /> </a>    <blockquote  class="math33323832363835303933">  <a href = "/math/res/13708.php#13779" onclick = "highlight(13779)">&gt;&gt;13779</a><br>mfw i integrated and had to undo the substitution.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="maththread13791"> <div class="thread_header"> <a id="13791"></a> <span class="filetitle">Help</span>  <span class="inbetween"> by </span> <span class="postername">Eugene Chushchud</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 24 Mar 2014 00:09:16 EST ID:0Uju5WgZ</span></span>  <span class="reflink"> <a href="/math/res/13791.php#i13791">No.13791</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math32393334393734303231')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('13791')" title="Report Thread 13791"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/math/res/13791.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13791" data-thread="13791"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BB2EAC; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('maththread13791');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1395634156862.jpg"> 1395634156862.jpg </a> -(<em>2082803 B, 3264x2448</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmath32393334393734303231" target="_blank" href="/math/src/1395634156862.jpg"> <img src="/math/thumb/1395634156862s.jpg" alt="2082803" class="thumb" /> </a>   			 <blockquote class="opcomment math32393334393734303231">  I don&#39;t understand these problems, help please   </blockquote>   				 				  <span class="omittedposts">   1 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/math/res/13791.php#13793" onclick="highlight(13793);">&gt;&gt;</a></td> <td class="reply" id="reply13793"> <a id="13793"></a> <div class="replyheader"> 									 <span class="commentpostername">Eugene Chushchud</span>  - <span class="idhighlight">Mon, 24 Mar 2014 00:30:42 EST ID:0Uju5WgZ</span> <span class="reflink">  <a href="/math/res/13791.php#i13793">No.13793</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math32393334393734303231')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13793', '13791')" title="Report Post 13793"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13793" data-thread="13791"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A081E6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math32393334393734303231">  Obviously, I&#39;m on my phone though so I can&#39;t change that.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13791.php#13796" onclick="highlight(13796);">&gt;&gt;</a></td> <td class="reply" id="reply13796"> <a id="13796"></a> <div class="replyheader"> 									 <span class="commentpostername">Caroline Blackgold</span>  - <span class="idhighlight">Mon, 24 Mar 2014 02:10:49 EST ID:yGgK6aCs</span> <span class="reflink">  <a href="/math/res/13791.php#i13796">No.13796</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31363737303436333035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13796', '13791')" title="Report Post 13796"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13796" data-thread="13791"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B9C5EB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1395641449295.jpg"> 1395641449295.jpg </a> -(<em>40362 B, 503x637</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/math/src/1395641449295.jpg"> <img src="/math/thumb/1395641449295s.jpg" alt="40362" class="thumb" /> </a>    <blockquote  class="math31363737303436333035">  <a href = "/math/res/13791.php#13793" onclick = "highlight(13793)">&gt;&gt;13793</a><br>try turnin the paper upways so u can read it better. might help   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13791.php#13797" onclick="highlight(13797);">&gt;&gt;</a></td> <td class="reply" id="reply13797"> <a id="13797"></a> <div class="replyheader"> 									 <span class="commentpostername">Eugene Chushchud</span>  - <span class="idhighlight">Mon, 24 Mar 2014 02:19:38 EST ID:0Uju5WgZ</span> <span class="reflink">  <a href="/math/res/13791.php#i13797">No.13797</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math32393334393734303231')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13797', '13791')" title="Report Post 13797"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13797" data-thread="13791"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CE7876; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math32393334393734303231">  <a href = "/math/res/13791.php#13796" onclick = "highlight(13796)">&gt;&gt;13796</a><br>It all makes sense now   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13791.php#13800" onclick="highlight(13800);">&gt;&gt;</a></td> <td class="reply" id="reply13800"> <a id="13800"></a> <div class="replyheader"> 									 <span class="commentpostername">Simon Murdcocke</span>  - <span class="idhighlight">Mon, 24 Mar 2014 06:07:41 EST ID:uXKndL+s</span> <span class="reflink">  <a href="/math/res/13791.php#i13800">No.13800</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31313935323837363938')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13800', '13791')" title="Report Post 13800"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13800" data-thread="13791"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #329EF1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31313935323837363938">  Not only is it sideways, but also sort of bent, leaving turning one&#39;s head out of the question.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13791.php#13805" onclick="highlight(13805);">&gt;&gt;</a></td> <td class="reply" id="reply13805"> <a id="13805"></a> <div class="replyheader"> 									 <span class="commentpostername">Thomas Ponkinbidge</span>  - <span class="idhighlight">Mon, 24 Mar 2014 14:57:01 EST ID:dtJRvm7a</span> <span class="reflink">  <a href="/math/res/13791.php#i13805">No.13805</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31323636383736343337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13805', '13791')" title="Report Post 13805"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13805" data-thread="13791"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EA51A7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1395687421010.jpg"> 1395687421010.jpg </a> -(<em>2196656 B, 2448x3264</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/math/src/1395687421010.jpg"> <img src="/math/thumb/1395687421010s.jpg" alt="2196656" class="thumb" /> </a>    <blockquote  class="math31323636383736343337">  Here you go OP.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="maththread13786"> <div class="thread_header"> <a id="13786"></a> <span class="filetitle">ONE LOVE, ONE HEART</span>  <span class="inbetween"> by </span> <span class="postername">God&#39;s a chick&#44; bro.</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 21 Mar 2014 23:30:23 EST ID:fFWeOOT5</span></span>  <span class="reflink"> <a href="/math/res/13786.php#i13786">No.13786</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31313533343433323538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('13786')" title="Report Thread 13786"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/math/res/13786.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13786" data-thread="13786"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E1CF56; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('maththread13786');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1395459023254.jpg"> 1395459023254.jpg </a> -(<em>25800 B, 288x229</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmath31313533343433323538" target="_blank" href="/math/src/1395459023254.jpg"> <img src="/math/thumb/1395459023254s.jpg" alt="25800" class="thumb" /> </a>   			 <blockquote class="opcomment math31313533343433323538">  Let&#39;s get together, and... do some math. &lt;3<br><br><a href="http://en.wikipedia.org/wiki/Cardioid" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Cardioid</a><br><a href="http://en.wikipedia.org/wiki/Visible_light" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Visible_light</a><br><a href="https://www.youtube.com/watch?v=vdB-8eLEW8g" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=vdB-8eLEW8g</a><br><a href="https://www.youtube.com/watch?v=che5bHJVzLQ" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=che5bHJVzLQ</a><br><a href="https://www.youtube.com/watch?v=WzV6mXIOVl4" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=WzV6mXIOVl4</a><br><a href="http://www.youtube.com/watch?v=3OT5jQCaM8Y" rel="nofollow" target="_blank">http://www.youtube.com/watch?v=3OT5jQCaM8Y</a><br><a href="https://www.youtube.com/watch?v=E-9O_GEiaEY" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=E-9O_GEiaEY</a><br><br>Give thanks and praise to the Lord, and she&#39;ll suck your dick.<br><br>Sky-pussy forever. ∞   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/math/res/13786.php#13787" onclick="highlight(13787);">&gt;&gt;</a></td> <td class="reply" id="reply13787"> <a id="13787"></a> <div class="replyheader"> 									 <span class="commentpostername">God&#39;s a chick&#44; bro.</span>  - <span class="idhighlight">Fri, 21 Mar 2014 23:32:06 EST ID:fFWeOOT5</span> <span class="reflink">  <a href="/math/res/13786.php#i13787">No.13787</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31313533343433323538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13787', '13786')" title="Report Post 13787"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13787" data-thread="13786"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F764C3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1395459126549.png"> 1395459126549.png </a> -(<em>475621 B, 739x648</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/math/src/1395459126549.png"> <img src="/math/thumb/1395459126549s.jpg" alt="475621" class="thumb" /> </a>    <blockquote  class="math31313533343433323538">  <a href = "/math/res/13786.php" onclick = "highlight(13786)">&gt;&gt;13786</a><br><br>&quot;...and all her paths are peace.&quot;<br><br><a href="https://www.youtube.com/watch?v=rR8v88UrlH0" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=rR8v88UrlH0</a>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="maththread13772"> <div class="thread_header"> <a id="13772"></a> <span class="filetitle">derpherpburp</span>  <span class="inbetween"> by </span> <span class="postername">Hugh Socklecocke</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 14 Mar 2014 20:34:40 EST ID:zMY2Vm0I</span></span>  <span class="reflink"> <a href="/math/res/13772.php#i13772">No.13772</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31383132343838353339')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('13772')" title="Report Thread 13772"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/math/res/13772.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13772" data-thread="13772"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #513D7E; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('maththread13772');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1394843680562.jpg"> 1394843680562.jpg </a> -(<em>36355 B, 242x320</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmath31383132343838353339" target="_blank" href="/math/src/1394843680562.jpg"> <img src="/math/thumb/1394843680562s.jpg" alt="36355" class="thumb" /> </a>   			 <blockquote class="opcomment math31383132343838353339">  lol i dont understand anything on this board   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/math/res/13772.php#13774" onclick="highlight(13774);">&gt;&gt;</a></td> <td class="reply" id="reply13774"> <a id="13774"></a> <div class="replyheader"> 									 <span class="commentpostername">Emma Finnerket</span>  - <span class="idhighlight">Sat, 15 Mar 2014 16:17:12 EST ID:Uq/TU4om</span> <span class="reflink">  <a href="/math/res/13772.php#i13774">No.13774</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math33343735343331363539')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13774', '13772')" title="Report Post 13774"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13774" data-thread="13772"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #23E5F8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1394914632126.jpg"> 1394914632126.jpg </a> -(<em>31733 B, 177x173</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/math/src/1394914632126.jpg"> <img src="/math/src/1394914632126.jpg" alt="31733" class="thumb" /> </a>    <blockquote  class="math33343735343331363539">  I don&#39;t understand anything on this site.<br><span class="spoiler" onmouseover=""><span>hurp a derp</span></span>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13772.php#13775" onclick="highlight(13775);">&gt;&gt;</a></td> <td class="reply" id="reply13775"> <a id="13775"></a> <div class="replyheader"> 									 <span class="commentpostername">Edwin Niblingbury</span>  - <span class="idhighlight">Sat, 15 Mar 2014 22:05:21 EST ID:NL4zf5yO</span> <span class="reflink">  <a href="/math/res/13772.php#i13775">No.13775</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math33313633343637303036')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13775', '13772')" title="Report Post 13775"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13775" data-thread="13772"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4E065B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math33313633343637303036">  <a href = "/math/res/13772.php" onclick = "highlight(13772)">&gt;&gt;13772</a><br>haha thats real funny man i was just thinking about postin the same thread here so i clicked on /math/ to do this and then this is the first one oh well   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13772.php#13783" onclick="highlight(13783);">&gt;&gt;</a></td> <td class="reply" id="reply13783"> <a id="13783"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigel Sonderfield</span>  - <span class="idhighlight">Wed, 19 Mar 2014 17:51:01 EST ID:4spVkkBQ</span> <span class="reflink">  <a href="/math/res/13772.php#i13783">No.13783</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31313939343835393139')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13783', '13772')" title="Report Post 13783"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13783" data-thread="13772"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4D8191; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1395265861436.gif"> 1395265861436.gif </a> -(<em>1351748 B, 185x175</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/math/src/1395265861436.gif"> <img src="/math/src/1395265861436.gif" alt="1351748" class="thumb" /> </a>    <blockquote  class="math31313939343835393139">  <a href="http://en.wikipedia.org/wiki/Mathematics" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Mathematics</a><br>this should clear things up   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13772.php#13784" onclick="highlight(13784);">&gt;&gt;</a></td> <td class="reply" id="reply13784"> <a id="13784"></a> <div class="replyheader"> 									 <span class="commentpostername">dameunmcchiken.sys</span>  - <span class="idhighlight">Wed, 19 Mar 2014 18:53:00 EST ID:Gb85/5TK</span> <span class="reflink">  <a href="/math/res/13772.php#i13784">No.13784</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math33303932313437343236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13784', '13772')" title="Report Post 13784"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13784" data-thread="13772"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DD4FF0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math33303932313437343236">  <a href = "/math/res/13772.php#13783" onclick = "highlight(13783)">&gt;&gt;13783</a><br>I fucking love this guy<br>Spardoe should hire him to go on every board.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13772.php#13785" onclick="highlight(13785);">&gt;&gt;</a></td> <td class="reply" id="reply13785"> <a id="13785"></a> <div class="replyheader"> 									 <span class="commentpostername">Jack Dartville</span>  - <span class="idhighlight">Fri, 21 Mar 2014 12:54:24 EST ID:IHm5SL/4</span> <span class="reflink">  <a href="/math/res/13772.php#i13785">No.13785</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math32393136303136383038')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13785', '13772')" title="Report Post 13785"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13785" data-thread="13772"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BA82D3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1395420864413.jpg"> 1395420864413.jpg </a> -(<em>96549 B, 1280x720</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/math/src/1395420864413.jpg"> <img src="/math/thumb/1395420864413s.jpg" alt="96549" class="thumb" /> </a>    <blockquote  class="math32393136303136383038">  i dont understand anything   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="maththread13776"> <div class="thread_header"> <a id="13776"></a> <span class="filetitle">Algebraic Topology Book</span>  <span class="inbetween"> by </span> <span class="postername">Lydia Hemmlewill</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 17 Mar 2014 09:19:07 EST ID:VJTocZIm</span></span>  <span class="reflink"> <a href="/math/res/13776.php#i13776">No.13776</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31313433363132393032')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('13776')" title="Report Thread 13776"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/math/res/13776.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13776" data-thread="13776"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B4BF9B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('maththread13776');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1395062347088.jpg"> 1395062347088.jpg </a> -(<em>25113 B, 499x320</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmath31313433363132393032" target="_blank" href="/math/src/1395062347088.jpg"> <img src="/math/thumb/1395062347088s.jpg" alt="25113" class="thumb" /> </a>   			 <blockquote class="opcomment math31313433363132393032">  I&#39;m currently using Hatcher&#39;s algebraic topology book and I was wondering if anyone&#39;s found something better.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/math/res/13776.php#13777" onclick="highlight(13777);">&gt;&gt;</a></td> <td class="reply" id="reply13777"> <a id="13777"></a> <div class="replyheader"> 									 <span class="commentpostername">Beatrice Gassleshaw</span>  - <span class="idhighlight">Mon, 17 Mar 2014 19:57:03 EST ID:8PJ0nVdr</span> <span class="reflink">  <a href="/math/res/13776.php#i13777">No.13777</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math32373333333236393338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13777', '13776')" title="Report Post 13777"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13777" data-thread="13776"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B3FF5B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math32373333333236393338">  Have you tried Munkres?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13776.php#13778" onclick="highlight(13778);">&gt;&gt;</a></td> <td class="reply" id="reply13778"> <a id="13778"></a> <div class="replyheader"> 									 <span class="commentpostername">Barnaby Crollerfick</span>  - <span class="idhighlight">Mon, 17 Mar 2014 22:31:11 EST ID:VJTocZIm</span> <span class="reflink">  <a href="/math/res/13776.php#i13778">No.13778</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31313433363132393032')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13778', '13776')" title="Report Post 13778"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13778" data-thread="13776"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #30D9AE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31313433363132393032">  <a href = "/math/res/13776.php#13777" onclick = "highlight(13777)">&gt;&gt;13777</a><br>I have not.  I heard it was a bit dry but that it also tends to be rigorous, which I like.  Do you know anything about May&#39;s &quot;concise&quot; books?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13776.php#13782" onclick="highlight(13782);">&gt;&gt;</a></td> <td class="reply" id="reply13782"> <a id="13782"></a> <div class="replyheader"> 									 <span class="commentpostername">Edwin Fiddlenon</span>  - <span class="idhighlight">Wed, 19 Mar 2014 14:09:31 EST ID:1s2mLncZ</span> <span class="reflink">  <a href="/math/res/13776.php#i13782">No.13782</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math32313634393230383831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13782', '13776')" title="Report Post 13782"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13782" data-thread="13776"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #732FA7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math32313634393230383831">  I like Munkres. It can be &quot;dry&quot; but he does an excellent job of explaining the concepts. I would not have succeeded in learning the subject without this book.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="maththread13780"> <div class="thread_header"> <a id="13780"></a> <span class="filetitle">Need help /math/</span>  <span class="inbetween"> by </span> <span class="postername">Priscilla Drivingsod</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 18 Mar 2014 21:57:34 EST ID:LaCkf6nr</span></span>  <span class="reflink"> <a href="/math/res/13780.php#i13780">No.13780</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math32323235373530303133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('13780')" title="Report Thread 13780"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/math/res/13780.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13780" data-thread="13780"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E9542E; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('maththread13780');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1395194254602.jpg"> 1395194254602.jpg </a> -(<em>17250 B, 336x358</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmath32323235373530303133" target="_blank" href="/math/src/1395194254602.jpg"> <img src="/math/thumb/1395194254602s.jpg" alt="17250" class="thumb" /> </a>   			 <blockquote class="opcomment math32323235373530303133">  I am sorry to bother all of you, but I am an english major, and am absolutely HORRIBLE at math. I&#39;ve been trying for 30 minutes to figure this out myself, but I absolutely need help from someone who understands math. Tonight is the add/drop deadline at my college and I am unsure as to whether or not I need to drop my class. The grading scale is:<br><br>Participation - 5%                       Speaking - 10%<br>Online HW - 15%                        Midterm- 10%<br>Chapter Exams - 15%               Writing - 10% <br>Quizzes - 10%                             Final - 10% <br>There have only been two tests, one on which I scored an 92, and one I missed, so my average is not currently doing well for the exam section. There are 5 total. There are also 5 quizzes, three speaking assignments, and three writing assignments. Mathematically, as long as my grades for that are okay, and I get decent grades on the rest of the tests do I stand a chance of passing this class? Or at least not destroying my GPA? <br><br>Thanks for the time/help /math/. <br>If there&#39;s anything I can do in return, please let me know.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/math/res/13780.php#13781" onclick="highlight(13781);">&gt;&gt;</a></td> <td class="reply" id="reply13781"> <a id="13781"></a> <div class="replyheader"> 									 <span class="commentpostername">Isabella Padgeman</span>  - <span class="idhighlight">Tue, 18 Mar 2014 23:20:59 EST ID:HvBSycws</span> <span class="reflink">  <a href="/math/res/13780.php#i13781">No.13781</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31313530343336353237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13781', '13780')" title="Report Post 13781"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13781" data-thread="13780"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F57E56; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31313530343336353237">  <a href = "/math/res/13780.php" onclick = "highlight(13780)">&gt;&gt;13780</a><br>Just divide the percent by how many there are of that thing to see how much one of that thing is worth<br><br>So, Chapter Exams - 15%, If there are 5 of them, each are worth 15%/3 = 3%, so if you miss one you can get a max of 100%-3% = 97% in the class<br>Quizzes - 10%, 10%/5 = 2% per quiz<br>ect ect ect   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13780.php#13801" onclick="highlight(13801);">&gt;&gt;</a></td> <td class="reply" id="reply13801"> <a id="13801"></a> <div class="replyheader"> 									 <span class="commentpostername">Simon Murdcocke</span>  - <span class="idhighlight">Mon, 24 Mar 2014 06:42:22 EST ID:uXKndL+s</span> <span class="reflink">  <a href="/math/res/13780.php#i13801">No.13801</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31313935323837363938')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13801', '13780')" title="Report Post 13801"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13801" data-thread="13780"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F1F8D4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31313935323837363938">  Does the syllabus tell you how many exams you will have total? If you have already taken two, I would expect there to be at least two more, if not three (including a cumulative final, if there is one).<br><br>If you were to post each grade by category we could give you a direct answer.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="maththread13763"> <div class="thread_header"> <a id="13763"></a> <span class="filetitle">virtual graphing calculator</span>  <span class="inbetween"> by </span> <span class="postername">Shitting Blackworth</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 11 Mar 2014 15:16:48 EST ID:mc3+SvqU</span></span>  <span class="reflink"> <a href="/math/res/13763.php#i13763">No.13763</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31323532323033323531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('13763')" title="Report Thread 13763"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/math/res/13763.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13763" data-thread="13763"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #24E680; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('maththread13763');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1394565408930.gif"> 1394565408930.gif </a> -(<em>5454 B, 519x339</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmath31323532323033323531" target="_blank" href="/math/src/1394565408930.gif"> <img src="/math/thumb/1394565408930s.jpg" alt="5454" class="thumb" /> </a>   			 <blockquote class="opcomment math31323532323033323531">  I&#39;m sorry if this is the wrong place or these kind of things can&#39;t be asked here, but can anyone direct me to a virtual graphing calculators? I&#39;m trying to do homework on a road trip, and I never packed my own.<br><br><br>I&#39;m found some emulators for TI models, but I can&#39;t get any of them working and am assuming it&#39;s because I&#39;m an idiot with computers and don&#39;t know what I&#39;m doing, so I&#39;d like some directions concerning exactly what sort of thing I&#39;m supposed to be looking for. It doesn&#39;t actually have to be an emulator or exact replica of the model I use (TI-83), an online/browser based thing would be fine too. Just something the a stupid high schooler with no technical skill can figure out how to operate.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/math/res/13763.php#13764" onclick="highlight(13764);">&gt;&gt;</a></td> <td class="reply" id="reply13764"> <a id="13764"></a> <div class="replyheader"> 									 <span class="commentpostername">Augustus Goodwater</span>  - <span class="idhighlight">Tue, 11 Mar 2014 16:00:11 EST ID:V2nhYpJ2</span> <span class="reflink">  <a href="/math/res/13763.php#i13764">No.13764</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31353932363038373934')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13764', '13763')" title="Report Post 13764"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13764" data-thread="13763"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C8B947; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31353932363038373934">  <a href = "/math/res/13763.php" onclick = "highlight(13763)">&gt;&gt;13763</a><br>wolfram alpha?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13763.php#13766" onclick="highlight(13766);">&gt;&gt;</a></td> <td class="reply" id="reply13766"> <a id="13766"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Duckwell</span>  - <span class="idhighlight">Wed, 12 Mar 2014 02:08:11 EST ID:WqMKGig3</span> <span class="reflink">  <a href="/math/res/13763.php#i13766">No.13766</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31313831393338353435')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13766', '13763')" title="Report Post 13766"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13766" data-thread="13763"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7855E7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31313831393338353435">  Just look at this URL. How could you NOT trust these guys?!<br><br><a href="http://ti-smartview-emulator-for-the-ti-84-plus.software.informer.com/3.1/" rel="nofollow" target="_blank">http://ti-smartview-emulator-for-the-ti-84-plus.software.informer.com/3.1/</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13763.php#13773" onclick="highlight(13773);">&gt;&gt;</a></td> <td class="reply" id="reply13773"> <a id="13773"></a> <div class="replyheader"> 									 <span class="commentpostername">Thomas Garrydeck</span>  - <span class="idhighlight">Sat, 15 Mar 2014 12:50:15 EST ID:ZxnBDs99</span> <span class="reflink">  <a href="/math/res/13763.php#i13773">No.13773</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31353331313732333032')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13773', '13763')" title="Report Post 13773"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13773" data-thread="13763"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6C16FF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31353331313732333032">  <a href = "/math/res/13763.php" onclick = "highlight(13763)">&gt;&gt;13763</a><br>desmos.com is nice too   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="maththread13154"> <div class="thread_header"> <a id="13154"></a> <span class="filetitle">&gt;mfw we&#39;re teaching people wrong</span>  <span class="inbetween"> by </span> <span class="postername">Archie Cracklepire</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 30 Oct 2013 20:32:55 EST ID:UB5FOJSN</span></span>  <span class="reflink"> <a href="/math/res/13154.php#i13154">No.13154</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math33313737353632393630')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('13154')" title="Report Thread 13154"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/math/res/13154.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13154" data-thread="13154"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3F10EA; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('maththread13154');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1383179575799.jpg"> 1383179575799.jpg </a> -(<em>237821 B, 891x906</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmath33313737353632393630" target="_blank" href="/math/src/1383179575799.jpg"> <img src="/math/thumb/1383179575799s.jpg" alt="237821" class="thumb" /> </a>   			 <blockquote class="opcomment math33313737353632393630">  can we do anything about it?   </blockquote>   				 				  <span class="omittedposts">  11 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/math/res/13154.php#13727" onclick="highlight(13727);">&gt;&gt;</a></td> <td class="reply" id="reply13727"> <a id="13727"></a> <div class="replyheader"> 									 <span class="commentpostername">Faggy Hinninggold</span>  - <span class="idhighlight">Fri, 28 Feb 2014 20:11:53 EST ID:vesE8dsR</span> <span class="reflink">  <a href="/math/res/13154.php#i13727">No.13727</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31353331303335383730')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13727', '13154')" title="Report Post 13727"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13727" data-thread="13154"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1007C9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/math/src/1393636313388.gif"> 1393636313388.gif </a> -(<em>62769 B, 700x726</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/math/src/1393636313388.gif"> <img src="/math/thumb/1393636313388s.jpg" alt="62769" class="thumb" /> </a>    <blockquote  class="math31353331303335383730">  <a href = "/math/res/13154.php" onclick = "highlight(13154)">&gt;&gt;13154</a><br>do you mean this or do you relate to the wrong layout of courses?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13154.php#13728" onclick="highlight(13728);">&gt;&gt;</a></td> <td class="reply" id="reply13728"> <a id="13728"></a> <div class="replyheader"> 									 <span class="commentpostername">Fanny Bunwater</span>  - <span class="idhighlight">Fri, 28 Feb 2014 21:30:47 EST ID:DupXKkTk</span> <span class="reflink">  <a href="/math/res/13154.php#i13728">No.13728</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31313336333737383630')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13728', '13154')" title="Report Post 13728"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13728" data-thread="13154"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E49C3D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31313336333737383630">  Is it that were teaching people wrong or the fact that we haven&#39;t instilled the knowledge that people today can learn what people weren&#39;t ever able to before and thus without said realization they start to say &quot;when will I ever use this?&quot;.<br><br>Not making it past algebra because you don&#39;t like it is a pretty piss poor excuse yet it happens here in the United States all too much.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13154.php#13729" onclick="highlight(13729);">&gt;&gt;</a></td> <td class="reply" id="reply13729"> <a id="13729"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigel Fibbernig</span>  - <span class="idhighlight">Fri, 28 Feb 2014 23:47:13 EST ID:qz3c7Bt+</span> <span class="reflink">  <a href="/math/res/13154.php#i13729">No.13729</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math383439343132393234')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13729', '13154')" title="Report Post 13729"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13729" data-thread="13154"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0AC131; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math383439343132393234">  <a href = "/math/res/13154.php#13728" onclick = "highlight(13728)">&gt;&gt;13728</a><br>Once someone figures out how to make math into a smartphone then no one would look at anything else and everyone would have a fucking Fields medal.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13154.php#13769" onclick="highlight(13769);">&gt;&gt;</a></td> <td class="reply" id="reply13769"> <a id="13769"></a> <div class="replyheader"> 									 <span class="commentpostername">Molly Backlefoot</span>  - <span class="idhighlight">Wed, 12 Mar 2014 11:12:35 EST ID:dLPpk0RR</span> <span class="reflink">  <a href="/math/res/13154.php#i13769">No.13769</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31313832353336393436')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13769', '13154')" title="Report Post 13769"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13769" data-thread="13154"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #266EAC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31313832353336393436">  I&#39;m not really sure how IQ became involved in this conversation   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/math/res/13154.php#13771" onclick="highlight(13771);">&gt;&gt;</a></td> <td class="reply" id="reply13771"> <a id="13771"></a> <div class="replyheader"> 									 <span class="commentpostername">Basil Femblefuck</span>  - <span class="idhighlight">Wed, 12 Mar 2014 21:58:08 EST ID:8NxxczqH</span> <span class="reflink">  <a href="/math/res/13154.php#i13771">No.13771</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('math31313534333538353133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('13771', '13154')" title="Report Post 13771"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="13771" data-thread="13154"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7F559E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="math31313534333538353133">  <a href = "/math/res/13154.php#13769" onclick = "highlight(13769)">&gt;&gt;13769</a><br>I was drunk and didn&#39;t really flesh out my thoughts before posting.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://insomniacgamers.net"><img src="http://cdn.420chan.org/sp/i.png"></a>
		</div>
				<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/math/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="math" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">  <a href="/math/4.php">&lt;&lt;Last</a>   <span style="font-size: +1;">Pages</span>   <a href="/math/6.php">Next&gt;&gt;</a>  <br />   <a href="/math/index.php">0</a>     <a href="/math/1.php">1</a>     <a href="/math/2.php">2</a>     <a href="/math/3.php">3</a>     <a href="/math/4.php">4</a>      5    <a href="/math/6.php">6</a>     <a href="/math/7.php">7</a>     <a href="/math/8.php">8</a>     <a href="/math/9.php">9</a>     <a href="/math/10.php">10</a>     <a href="/math/11.php">11</a>     <a href="/math/12.php">12</a>     <a href="/math/13.php">13</a>     <a href="/math/14.php">14</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
							<li><img width='32' height='32' class='boardicon' alt='cd' src='/static/images/board_icons/cd_icon_32.png' />
		<span class='byline'>Transgender Discussion - <a href='/cd/res/375816.php' class='boardlink'>Thread 375816</a></span>
		<p>So i recently started doing phone conversations and I am trans. PIc is of me, here is my profile lin... <a href='/cd/res/375816.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='wooo' src='/static/images/board_icons/wooo_icon_32.png' />
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3853038.php' class='boardlink'>Thread 3853038</a></span>
		<p>>>3855364

>90%

I wouldn't go that far. Fale wouldn't even be the best hoss in WWE.... <a href='/wooo/res/3853038.php' class='boardlink'>&#8629;</a></p></li>
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

