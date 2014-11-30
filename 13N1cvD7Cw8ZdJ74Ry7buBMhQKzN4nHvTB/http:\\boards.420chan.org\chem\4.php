http://boards.420chan.org/chem/4.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Wed, 23 Jul 2014 12:25:13 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> Science &amp; Chemistry - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/chem_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/chem_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/chem/4.php';
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
	 <div id="header"> <div id="board_logo"> <a href="/chem/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/chem_icon_64.png" alt="/chem/ Icon" /> <p class="board_title_block"> <span class="board_name">/chem/</span> <span class="board_title">Science &amp; Chemistry</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
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
	 <!--  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/chem/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="chem" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />     <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>  <tr> <td class="postblock">Name</td> <td> <input title="Name" type="text" name="field1" style="width:224px;" /> <div class="tooltip">  You can leave this blank to post anonymously, or you can create a Tripcode by using the float <b>Name#Password</b> </div>					 </td> </tr>    <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div>  <script type="text/javascript">set_inputs("postform")</script> <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 3000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> <li>This is a work-safe board. Posting adult images is forbidden.</li>			  </ul> </div> <hr style="margin-bottom:2px;" /> 		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 <hr style="margin-top:2px;" />   <form id="delform" action="/chem/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="chem" />    <div id="chemthread74540"> <div class="thread_header"> <a id="74540"></a> <span class="filetitle">How is Life real</span>  <span class="inbetween"> by </span> <span class="postername">Kocoayello</span> <span class="postertrip">!jxaL03vL/Q</span> <span class="inbetween"> - <span class="idhighlight">Fri, 18 Apr 2014 15:42:11 EST ID:IOTJEpYV</span></span>  <span class="reflink"> <a href="/chem/res/74540.php#i74540">No.74540</a> </span>    			 <!--  - Awesome Thread? <a href="/chem/taimaba.pl?board=chem&amp;task=vote&amp;thread=74540&amp;vote=0">No!</a> | <a href="/chem/taimaba.pl?board=chem&amp;task=vote&amp;thread=74540&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem343138343531343935')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('74540')" title="Report Thread 74540"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/chem/res/74540.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74540" data-thread="74540"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #155D37; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('chemthread74540');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1397850131007.jpg"> 1397850131007.jpg </a> -(<em>76622 B, 500x351</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgchem343138343531343935" target="_blank" href="/chem/src/1397850131007.jpg"> <img src="/chem/thumb/1397850131007s.jpg" alt="76622" class="thumb" /> </a>   			 <blockquote class="opcomment chem343138343531343935">  if viruses aren&#39;t real?   </blockquote>   				 				  <span class="omittedposts">  19 posts and 4 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/chem/res/74540.php#74663" onclick="highlight(74663);">&gt;&gt;</a></td> <td class="reply" id="reply74663"> <a id="74663"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigel Greenshit</span>  - <span class="idhighlight">Thu, 08 May 2014 22:50:25 EST ID:Z5EeckPo</span> <span class="reflink">  <a href="/chem/res/74540.php#i74663">No.74663</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323139363232363538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74663', '74540')" title="Report Post 74663"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74663" data-thread="74540"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #814D18; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31323139363232363538">  <a href = "/chem/res/74540.php#74656" onclick = "highlight(74656)">&gt;&gt;74656</a><br>source?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74540.php#74664" onclick="highlight(74664);">&gt;&gt;</a></td> <td class="reply" id="reply74664"> <a id="74664"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Gimbleshaw</span>  - <span class="idhighlight">Fri, 09 May 2014 15:41:04 EST ID:oRLfV4+h</span> <span class="reflink">  <a href="/chem/res/74540.php#i74664">No.74664</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem343036373934353035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74664', '74540')" title="Report Post 74664"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74664" data-thread="74540"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B6E65F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem343036373934353035">  <a href = "/chem/res/74540.php#74663" onclick = "highlight(74663)">&gt;&gt;74663</a><br>I read it on the wikipedia page for the virus, I know its not a proper source so look at the page&#39;s source for the information.  But here&#39;s the excerpt:<br>A teaspoon of seawater contains about one million viruses.[209] Most of these are bacteriophages, which are harmless to plants and animals, and are in fact essential to the regulation of saltwater and freshwater ecosystems.[210] They infect and destroy bacteria in aquatic microbial communities, and are the most important mechanism of recycling carbon in the marine environment. The organic molecules released from the dead bacterial cells stimulate fresh bacterial and algal growth.[211]<br>Microorganisms constitute more than 90% of the biomass in the sea. It is estimated that viruses kill approximately 20% of this biomass each day and that there are 15 times as many viruses in the oceans as there are bacteria and archaea. Viruses are the main agents responsible for the rapid destruction of harmful algal blooms,[212] which often kill other marine life.[213] The number of viruses in the oceans decreases further offshore and deeper into the water, where there are fewer host organisms.[214]   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74540.php#74665" onclick="highlight(74665);">&gt;&gt;</a></td> <td class="reply" id="reply74665"> <a id="74665"></a> <div class="replyheader"> 									 <span class="commentpostername">Charles Honningpune</span>  - <span class="idhighlight">Sat, 10 May 2014 00:25:57 EST ID:UcjD537E</span> <span class="reflink">  <a href="/chem/res/74540.php#i74665">No.74665</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31313939343835393139')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74665', '74540')" title="Report Post 74665"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74665" data-thread="74540"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5A6FE3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31313939343835393139">  <a href = "/chem/res/74540.php#74664" onclick = "highlight(74664)">&gt;&gt;74664</a><br>Wow that quote really is illuminating to me, thinking about how viruses co-evolved with bacteria in fucking ludicrous numbers over eons. Those bastards have had plenty of opportunities to gear up an arsenal. I&#39;m studying virology right now and this makes it a bit more understandable how the fuckers are so well engineered to infect a host, even us big complicated animals.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74540.php#74717" onclick="highlight(74717);">&gt;&gt;</a></td> <td class="reply" id="reply74717"> <a id="74717"></a> <div class="replyheader"> 									 <span class="commentpostername">Phoebe Dandlewill</span>  - <span class="idhighlight">Fri, 16 May 2014 01:40:21 EST ID:kU7ZKhzs</span> <span class="reflink">  <a href="/chem/res/74540.php#i74717">No.74717</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323539353232303734')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74717', '74540')" title="Report Post 74717"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74717" data-thread="74540"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D06FC2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31323539353232303734">  <a href = "/chem/res/74540.php#74596" onclick = "highlight(74596)">&gt;&gt;74596</a><br>bacteria don&#39;t have organelles ya dingus   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74540.php#74718" onclick="highlight(74718);">&gt;&gt;</a></td> <td class="reply" id="reply74718"> <a id="74718"></a> <div class="replyheader"> 									 <span class="commentpostername">Charles Wabblehall</span>  - <span class="idhighlight">Fri, 16 May 2014 11:47:50 EST ID:oRLfV4+h</span> <span class="reflink">  <a href="/chem/res/74540.php#i74718">No.74718</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem343036373934353035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74718', '74540')" title="Report Post 74718"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74718" data-thread="74540"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1F2CAF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem343036373934353035">  <a href = "/chem/res/74540.php#74717" onclick = "highlight(74717)">&gt;&gt;74717</a><br>Lol I think he just meant like ribosomes and the lipid bilayer and shit.<br>But good point none the less   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="chemthread74302"> <div class="thread_header"> <a id="74302"></a> <span class="filetitle">cwe codeine</span>  <span class="inbetween"> by </span> <span class="postername">Nicholas Summerfit</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 08 Mar 2014 09:42:44 EST ID:nm+vUBn4</span></span>  <span class="reflink"> <a href="/chem/res/74302.php#i74302">No.74302</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31333431353534373532')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('74302')" title="Report Thread 74302"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/chem/res/74302.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74302" data-thread="74302"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5EC4EB; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('chemthread74302');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1394289764090.jpg"> 1394289764090.jpg </a> -(<em>1441566 B, 1944x2592</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgchem31333431353534373532" target="_blank" href="/chem/src/1394289764090.jpg"> <img src="/chem/thumb/1394289764090s.jpg" alt="1441566" class="thumb" /> </a>   			 <blockquote class="opcomment chem31333431353534373532">  hi,<br>i extracted some codeine with cwe from paracetamol+codein-combo (500mg - 15mg). but my final result looks like a chewing gum. did i fail? or is this the consistency of codeine?<br><br>pic related (its my codeine-gum)   </blockquote>   				 				  <span class="omittedposts">  3 posts and 2 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/chem/res/74302.php#74348" onclick="highlight(74348);">&gt;&gt;</a></td> <td class="reply" id="reply74348"> <a id="74348"></a> <div class="replyheader"> 									 <span class="commentpostername">Fucking Sasslechock</span>  - <span class="idhighlight">Fri, 14 Mar 2014 13:48:37 EST ID:VqmUxA/w</span> <span class="reflink">  <a href="/chem/res/74302.php#i74348">No.74348</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem33343831383437383530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74348', '74302')" title="Report Post 74348"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74348" data-thread="74302"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DD1AE5; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem33343831383437383530">  Wait a second. Is that &quot;gum&quot; the stuff that you filtered out? I really hope that&#39;s not the goop and you threw away the water.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74302.php#74355" onclick="highlight(74355);">&gt;&gt;</a></td> <td class="reply" id="reply74355"> <a id="74355"></a> <div class="replyheader"> 									 <span class="commentpostername">David Brorringforth</span>  - <span class="idhighlight">Sat, 15 Mar 2014 11:37:54 EST ID:cM6rhCgJ</span> <span class="reflink">  <a href="/chem/res/74302.php#i74355">No.74355</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem33343935353332303537')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74355', '74302')" title="Report Post 74355"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74355" data-thread="74302"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #64B189; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem33343935353332303537">  <a href = "/chem/res/74302.php#74348" onclick = "highlight(74348)">&gt;&gt;74348</a><br><br>HAH<br><br>Looks like you have the filler OP   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74302.php#74394" onclick="highlight(74394);">&gt;&gt;</a></td> <td class="reply" id="reply74394"> <a id="74394"></a> <div class="replyheader"> 									 <span class="commentpostername">Clara Grimbanks</span>  - <span class="idhighlight">Sun, 23 Mar 2014 14:20:54 EST ID:iHZcrM0s</span> <span class="reflink">  <a href="/chem/res/74302.php#i74394">No.74394</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31313939323738393034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74394', '74302')" title="Report Post 74394"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74394" data-thread="74302"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #83371F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31313939323738393034">  <a href = "/chem/res/74302.php" onclick = "highlight(74302)">&gt;&gt;74302</a><br><br>op, the codeine was in the wash water OP, not the filtrate. <br><br>you tossed the goodies and kept the garbage.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74302.php#74709" onclick="highlight(74709);">&gt;&gt;</a></td> <td class="reply" id="reply74709"> <a id="74709"></a> <div class="replyheader"> 									 <span class="commentpostername">Graham Fammlewell</span>  - <span class="idhighlight">Wed, 14 May 2014 05:39:20 EST ID:+y15MDRu</span> <span class="reflink">  <a href="/chem/res/74302.php#i74709">No.74709</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem32303633383533393737')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74709', '74302')" title="Report Post 74709"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74709" data-thread="74302"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #251C3D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem32303633383533393737">  do not eat that unless you want liver failure.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74302.php#74713" onclick="highlight(74713);">&gt;&gt;</a></td> <td class="reply" id="reply74713"> <a id="74713"></a> <div class="replyheader"> 									 <span class="commentpostername">Priscilla Brogglewirk</span>  - <span class="idhighlight">Wed, 14 May 2014 19:56:40 EST ID:mj+5dAm9</span> <span class="reflink">  <a href="/chem/res/74302.php#i74713">No.74713</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem32313439363433373330')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74713', '74302')" title="Report Post 74713"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74713" data-thread="74302"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #45CD36; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem32313439363433373330">  <a href = "/chem/res/74302.php#74709" onclick = "highlight(74709)">&gt;&gt;74709</a><br>why did u bump this. this thread is so old......   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="chemthread74666"> <div class="thread_header"> <a id="74666"></a> <span class="filetitle">Photons, matter and shit.</span>  <span class="inbetween"> by </span> <span class="postername">Nigel Fodgestadging</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 10 May 2014 05:29:51 EST ID:ZACRkBJ8</span></span>  <span class="reflink"> <a href="/chem/res/74666.php#i74666">No.74666</a> </span>    			 <!--  - Awesome Thread? <a href="/chem/taimaba.pl?board=chem&amp;task=vote&amp;thread=74666&amp;vote=0">No!</a> | <a href="/chem/taimaba.pl?board=chem&amp;task=vote&amp;thread=74666&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem393834313432323733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('74666')" title="Report Thread 74666"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/chem/res/74666.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74666" data-thread="74666"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F12A4B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('chemthread74666');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1399714191084.jpg"> 1399714191084.jpg </a> -(<em>129567 B, 1320x990</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgchem393834313432323733" target="_blank" href="/chem/src/1399714191084.jpg"> <img src="/chem/thumb/1399714191084s.jpg" alt="129567" class="thumb" /> </a>   			 <blockquote class="opcomment chem393834313432323733">  If matter can be broken apart to releases photons, could you not say that said chunk of matter always contained those photons?<br><br>Or to put another way. You have a box. You break the box open to find a cat inside. It&#39;s dead, but anyway.. Would you say that until you broke the box open there was a cat worth of unicorns tears (stand-in for energy) that can take on many forms in the box which was transformed into a cat the exact moment you broke it open? No you&#39;d say there was a cat in the box, and the contrary would be absurd.   </blockquote>   				 				  <span class="omittedposts">  29 posts and 3 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/chem/res/74666.php#74700" onclick="highlight(74700);">&gt;&gt;</a></td> <td class="reply" id="reply74700"> <a id="74700"></a> <div class="replyheader"> 									 <span class="commentpostername">Augustus Sashfog</span>  - <span class="idhighlight">Mon, 12 May 2014 21:12:56 EST ID:Nbu7dGdg</span> <span class="reflink">  <a href="/chem/res/74666.php#i74700">No.74700</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323031373931323133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74700', '74666')" title="Report Post 74700"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74700" data-thread="74666"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D9B043; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31323031373931323133">  <a href = "/chem/res/74666.php#74699" onclick = "highlight(74699)">&gt;&gt;74699</a><br><blockquote class = "unkfunc">&gt; I think it&#39;s a component of larger particles; going around them at the speed c to produce the uncertainty principle.<br>&gt;Which is to say that I think the larger particles actually change shape and hence registered position constantly in a sinusoidal fashion wrt time.<br></blockquote>Sorry, but this is all fairly meaningless.<br><blockquote class = "unkfunc">&gt;Which is to say that the reason a particle doesn&#39;t appear to be in a specific spot until you measure it as being there is because it wasn&#39;t a moment before you found it there.<br></blockquote>That almost sounds like: <a href="http://en.wikipedia.org/wiki/Copenhagen_interpretation" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Copenhagen_interpretation</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74666.php#74702" onclick="highlight(74702);">&gt;&gt;</a></td> <td class="reply" id="reply74702"> <a id="74702"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Chullerbedging</span>  - <span class="idhighlight">Mon, 12 May 2014 22:17:40 EST ID:ZACRkBJ8</span> <span class="reflink">  <a href="/chem/res/74666.php#i74702">No.74702</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem393834313432323733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74702', '74666')" title="Report Post 74702"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74702" data-thread="74666"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A080DD; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem393834313432323733">  <a href = "/chem/res/74666.php#74700" onclick = "highlight(74700)">&gt;&gt;74700</a><br>The detail is in the minutiae.<br><br>Don&#39;t worry though I kind of prefer it if you don&#39;t take it seriously.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74666.php#74703" onclick="highlight(74703);">&gt;&gt;</a></td> <td class="reply" id="reply74703"> <a id="74703"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Chullerbedging</span>  - <span class="idhighlight">Mon, 12 May 2014 22:27:44 EST ID:ZACRkBJ8</span> <span class="reflink">  <a href="/chem/res/74666.php#i74703">No.74703</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem393834313432323733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74703', '74666')" title="Report Post 74703"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74703" data-thread="74666"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #762460; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem393834313432323733">  <a href = "/chem/res/74666.php#74700" onclick = "highlight(74700)">&gt;&gt;74700</a><br>This attitude though.<br><blockquote class = "unkfunc">&gt;Aww.. yeah well.. QFT is kind of nice but it&#39;s just like nearly a restatement of like this other stuff people have done<br></blockquote><br>Yeah maybe because they&#39;re both attempts to describe the same thing, dude.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74666.php#74704" onclick="highlight(74704);">&gt;&gt;</a></td> <td class="reply" id="reply74704"> <a id="74704"></a> <div class="replyheader"> 									 <span class="commentpostername">Augustus Sashfog</span>  - <span class="idhighlight">Mon, 12 May 2014 22:44:12 EST ID:Nbu7dGdg</span> <span class="reflink">  <a href="/chem/res/74666.php#i74704">No.74704</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323031373931323133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74704', '74666')" title="Report Post 74704"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74704" data-thread="74666"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9A031A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31323031373931323133">  <a href = "/chem/res/74666.php#74703" onclick = "highlight(74703)">&gt;&gt;74703</a><br>My point is that you should look at the copenhagen interpretation. You&#39;re trying to come up with crazy theories without knowing the fundamentals. Nothing wrong with that, but I don&#39;t see the point.<br><br>Better than wikipedia is the stanford encyclopedia of philosophy&#39;s article. You are the guy on /b/ the other day talking about philosophy and &quot;contradicting&quot; science, right? Well this is probably more up your alley: <a href="http://plato.stanford.edu/entries/qm-copenhagen/" rel="nofollow" target="_blank">http://plato.stanford.edu/entries/qm-copenhagen/</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74666.php#74705" onclick="highlight(74705);">&gt;&gt;</a></td> <td class="reply" id="reply74705"> <a id="74705"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Chullerbedging</span>  - <span class="idhighlight">Mon, 12 May 2014 22:58:40 EST ID:ZACRkBJ8</span> <span class="reflink">  <a href="/chem/res/74666.php#i74705">No.74705</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem393834313432323733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74705', '74666')" title="Report Post 74705"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74705" data-thread="74666"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A341B1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem393834313432323733">  <a href = "/chem/res/74666.php#74704" onclick = "highlight(74704)">&gt;&gt;74704</a><br>Lol I&#39;m not the person you speak of I haven&#39;t been on this website in months.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="chemthread74690"> <div class="thread_header"> <a id="74690"></a> <span class="filetitle">Pchem math?</span>  <span class="inbetween"> by </span> <span class="postername">Hannah Chepperbury</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 11 May 2014 18:47:40 EST ID:SneqK8/u</span></span>  <span class="reflink"> <a href="/chem/res/74690.php#i74690">No.74690</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31303939313035383135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('74690')" title="Report Thread 74690"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/chem/res/74690.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74690" data-thread="74690"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D3B10B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('chemthread74690');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1399848460649.jpg"> 1399848460649.jpg </a> -(<em>53373 B, 550x412</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgchem31303939313035383135" target="_blank" href="/chem/src/1399848460649.jpg"> <img src="/chem/thumb/1399848460649s.jpg" alt="53373" class="thumb" /> </a>   			 <blockquote class="opcomment chem31303939313035383135">  How much math for p-chem 1? Granted I know more the better. Some say cal 2 is fine, other cal 3. Some even suggest going as far as linear algebra.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/chem/res/74690.php#74691" onclick="highlight(74691);">&gt;&gt;</a></td> <td class="reply" id="reply74691"> <a id="74691"></a> <div class="replyheader"> 									 <span class="commentpostername">Archie Fennerpat</span>  - <span class="idhighlight">Sun, 11 May 2014 20:42:41 EST ID:XD/Rd2uj</span> <span class="reflink">  <a href="/chem/res/74690.php#i74691">No.74691</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31363133393731363631')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74691', '74690')" title="Report Post 74691"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74691" data-thread="74690"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3FA14C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1399855361313.gif"> 1399855361313.gif </a> -(<em>5159 B, 426x217</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/chem/src/1399855361313.gif"> <img src="/chem/thumb/1399855361313s.jpg" alt="5159" class="thumb" /> </a>    <blockquote  class="chem31363133393731363631">  I just finished pchem 1 at my university, which is the thermodynamics one.  You definitely need a solid understanding of calculus that&#39;s for sure.  There were plenty of partial derivatives, and integrals to do.  So you only need around the calc 2 level for sure, maybe calc 3 depending on your school. I did not use linear algebra in my  thermodynamics course, however, it is a useful skill set to have, and I&#39;m fairly certain it is required for higher level chemistry courses.<br>Hope this helps   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="chemthread74657"> <div class="thread_header"> <a id="74657"></a> <span class="filetitle">Chem question</span>  <span class="inbetween"> by </span> <span class="postername">Graham Bebblebanks</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 04 May 2014 23:58:08 EST ID:CWPUZJca</span></span>  <span class="reflink"> <a href="/chem/res/74657.php#i74657">No.74657</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31313431323136343234')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('74657')" title="Report Thread 74657"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/chem/res/74657.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74657" data-thread="74657"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AFE461; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('chemthread74657');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1399262288558.gif"> 1399262288558.gif </a> -(<em>1863489 B, 320x180</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgchem31313431323136343234" target="_blank" href="/chem/src/1399262288558.gif"> <img src="/chem/thumb/1399262288558s.jpg" alt="1863489" class="thumb" /> </a>   			 <blockquote class="opcomment chem31313431323136343234">  An unknown diatomic “R2“ is diffusing 1.479 times faster than Cl2 in a 5.00 L glass bulb <br>being held at 388 K. The total mass of the gas mixture is 4.48 g, and the mixture is 34.6% by <br>mass Cl2. Determine the pressure, in atm, in the 5.00 L glass bulb. <br><br>Could anyone help me out with this one? Im guessing i use PV=nRT at some point but i dont really know how to set this up.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/chem/res/74657.php#74659" onclick="highlight(74659);">&gt;&gt;</a></td> <td class="reply" id="reply74659"> <a id="74659"></a> <div class="replyheader"> 									 <span class="commentpostername">Graham Billingfuck</span>  - <span class="idhighlight">Mon, 05 May 2014 18:56:26 EST ID:Nbu7dGdg</span> <span class="reflink">  <a href="/chem/res/74657.php#i74659">No.74659</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323031373931323133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74659', '74657')" title="Report Post 74659"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74659" data-thread="74657"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #803958; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31323031373931323133">  <blockquote class = "unkfunc">&gt;An unknown diatomic “R2“ is diffusing 1.479 times faster than Cl2...<br></blockquote>What does this mean?<br><br> What&#39;s important is you know the total mass of the gas, and you know the weight percent of Cl2. So you can figure out the mass of Cl2. Then you can figure out the number of moles of Cl2, and can use PV=nRT to figure out the partial pressure of Cl2.<br><br>You also now know the weight of R2. You can probably use the diffusing data to figure out the weight of R2 ((mw of Cl2)/1.479)? Figure out the partial pressure for R2 then add them together for the total pressure.<br><br>If you didn&#39;t understand any of that, go back to your book to the partial pressure section.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74657.php#74660" onclick="highlight(74660);">&gt;&gt;</a></td> <td class="reply" id="reply74660"> <a id="74660"></a> <div class="replyheader"> 									 <span class="commentpostername">OP IS A FAG</span>  - <span class="idhighlight">Mon, 05 May 2014 23:48:53 EST ID:CWPUZJca</span> <span class="reflink">  <a href="/chem/res/74657.php#i74660">No.74660</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31313431323136343234')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74660', '74657')" title="Report Post 74660"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74660" data-thread="74657"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7F97B3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31313431323136343234">  <a href = "/chem/res/74657.php#74659" onclick = "highlight(74659)">&gt;&gt;74659</a><br>thank you sir, that clear things up a little bit for me i think i can figure it out now. and R2 is just a variable for the unkown Diatomic element. it should be R subscript 2   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74657.php#74678" onclick="highlight(74678);">&gt;&gt;</a></td> <td class="reply" id="reply74678"> <a id="74678"></a> <div class="replyheader"> 									 <span class="commentpostername">Ebenezer Gagglewore</span>  - <span class="idhighlight">Sat, 10 May 2014 17:13:39 EST ID:zP+gSGWa</span> <span class="reflink">  <a href="/chem/res/74657.php#i74678">No.74678</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323736383733363937')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74678', '74657')" title="Report Post 74678"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74678" data-thread="74657"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #60BD64; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31323736383733363937">  Use grahams law to get the molecular weight of the unknown gas.  Use the molecular weights with the mass data to determine number of mols of each, use ideal gas to determine partial pressure of each, sum is total pressure.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="chemthread74658"> <div class="thread_header"> <a id="74658"></a> <span class="filetitle">Lack of symmetry</span>  <span class="inbetween"> by </span> <span class="postername">Nigger Goodfuck</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 05 May 2014 05:15:40 EST ID:ebvaoUKY</span></span>  <span class="reflink"> <a href="/chem/res/74658.php#i74658">No.74658</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem343133343037343230')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('74658')" title="Report Thread 74658"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/chem/res/74658.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74658" data-thread="74658"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BDBD37; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('chemthread74658');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1399281340534.png"> 1399281340534.png </a> -(<em>23517 B, 1024x459</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgchem343133343037343230" target="_blank" href="/chem/src/1399281340534.png"> <img src="/chem/thumb/1399281340534s.jpg" alt="23517" class="thumb" /> </a>   			 <blockquote class="opcomment chem343133343037343230">  sup /chem/<br><br>I had a few questions about certain things:<br><br>I&#39;m taking a course in the fall titled &#39;Introduction to Drug Discovery&#39; and a main topic of the course is Symmetry and Group Theory.  I have taken up to an advanced inorganic course, but I still fall short of totally understanding group theory and it&#39;s relation to symmetry.  Symmetry is fairly understandable, but if I&#39;m not mistaken, the relation between it and group theory is the &#39;reducible&#39; and &#39;irreducible&#39; forms of the symmetry.  My lack of understanding is relating any form of symmetry to an actual atom, or extrapolating it to larger molecules.  I&#39;m able to construct MO diagrams with things such as H30+, ethylene, and very basic compounds as you&#39;d learn in inorganic coursed, but with only a basic understanding of the actual group theory behind it (apparently used to find energy of each bonding/non bonding orbital).  I&#39;m a bit worried about a course that further projects this idea, and I was wondering if anyone had any literature that would help correlate the two ideas.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/chem/res/74658.php#74661" onclick="highlight(74661);">&gt;&gt;</a></td> <td class="reply" id="reply74661"> <a id="74661"></a> <div class="replyheader"> 									 <span class="commentpostername">Syllogism</span>  - <span class="idhighlight">Tue, 06 May 2014 00:18:35 EST ID:stqlrmZK</span> <span class="reflink">  <a href="/chem/res/74658.php#i74661">No.74661</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31363534393830393133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74661', '74658')" title="Report Post 74661"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74661" data-thread="74658"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F3BEC7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31363534393830393133">  Interesting course design. I always took Symmetry and Group Theory to be more of an advanced o-chem topic and I&#39;m surprised a drug class isn&#39;t focussing more on QSAR.<br><br>I&#39;ve never heard group theory referred to as reducable vs. irreducable, but that might just be a difference in lingo.  Basically, group theory defines a set of &#39;symmetry operators,&#39; and if two molecules have the same value for each operator, they&#39;re in the same group.  And if two molecules are in the same group, they&#39;ll have similar properties with respect to molecular orbitals and spectroscopy and stuff.  The inverse is also true, molecules in different symmetry groups will differ in their properties.  You&#39;re seeing that in the pic you posted: water and its conjugate acid/bases&#39; molecular orbitals change in a predictable fashion as its symmetry changes.<br><br>Group theory&#39;s basically a huge shortcut for outlining molecular properties that would take long and tedious equations to solve formally, and to that effect, is of huge value to experimentalists who don&#39;t give a fuck about whatever their theorist colleagues are babbling about.<br><br>Anyway, here&#39;s a reference on the symmetry operators for group theory and examples of the most common symmetry groups.  This is certainly not my area of expertise but i do hope it helped.<br><br><a href="http://chemistry.rutgers.edu/undergrad/chem207/SymmetryGroupTheory.html" rel="nofollow" target="_blank">http://chemistry.rutgers.edu/undergrad/chem207/SymmetryGroupTheory.html</a>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="chemthread74647"> <div class="thread_header"> <a id="74647"></a> <span class="filetitle">Disillation</span>  <span class="inbetween"> by </span> <span class="postername">Hamilton Sellywell</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 03 May 2014 16:34:30 EST ID:4oEHD5UU</span></span>  <span class="reflink"> <a href="/chem/res/74647.php#i74647">No.74647</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323132373339383839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('74647')" title="Report Thread 74647"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/chem/res/74647.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74647" data-thread="74647"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #22FF0F; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('chemthread74647');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1399149270903.gif"> 1399149270903.gif </a> -(<em>126471 B, 200x199</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgchem31323132373339383839" target="_blank" href="/chem/src/1399149270903.gif"> <img src="/chem/src/1399149270903.gif" alt="126471" class="thumb" /> </a>   			 <blockquote class="opcomment chem31323132373339383839">  Would a glass chemistry distiller be a good means of distilling water for drinking? Lets say like max a gallon or two a day   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/chem/res/74647.php#74648" onclick="highlight(74648);">&gt;&gt;</a></td> <td class="reply" id="reply74648"> <a id="74648"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigel Brookhood</span>  - <span class="idhighlight">Sat, 03 May 2014 18:18:59 EST ID:Nbu7dGdg</span> <span class="reflink">  <a href="/chem/res/74647.php#i74648">No.74648</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323031373931323133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74648', '74647')" title="Report Post 74648"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74648" data-thread="74647"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #339408; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31323031373931323133">  OH FUUUUUUCK that gif is awesome. Best gif ever. Know where it&#39;s from? google image search is just showing a bunch of reposts.<br><br>THere&#39;s lots of distilling setups in chemistry. Glass is great, but not really practical for drinking water. It&#39;s expensive and fragile.<br><br>Look up recipes for a simple &quot;pot still&quot;. Like the kind they make whiskey with. homedistiller.org has a bunch of plans. Even if you&#39;re just using it for water, the theory is the same. You just don&#39;t need to overdo it with a reflux still.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74647.php#74649" onclick="highlight(74649);">&gt;&gt;</a></td> <td class="reply" id="reply74649"> <a id="74649"></a> <div class="replyheader"> 									 <span class="commentpostername">Hamilton Sellywell</span>  - <span class="idhighlight">Sat, 03 May 2014 19:43:37 EST ID:4oEHD5UU</span> <span class="reflink">  <a href="/chem/res/74647.php#i74649">No.74649</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323132373339383839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74649', '74647')" title="Report Post 74649"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74649" data-thread="74647"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DD2C93; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31323132373339383839">  <a href = "/chem/res/74647.php#74648" onclick = "highlight(74648)">&gt;&gt;74648</a><br>Thanks man i appreciate it<br><br>Ad for the GIF i picked a random one that i downloaded and it was fucking sick so i hoped i would get a hit on the post, and I did, so thanks again!   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="chemthread74574"> <div class="thread_header"> <a id="74574"></a> <span class="filetitle">Climate Change</span>  <span class="inbetween"> by </span> <span class="postername">Thomas Ganningbanks</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 23 Apr 2014 09:02:15 EST ID:uX/2IjDh</span></span>  <span class="reflink"> <a href="/chem/res/74574.php#i74574">No.74574</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem33353432303135323034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('74574')" title="Report Thread 74574"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/chem/res/74574.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74574" data-thread="74574"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7B3702; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('chemthread74574');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1398258135969.jpg"> 1398258135969.jpg </a> -(<em>187978 B, 634x650</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgchem33353432303135323034" target="_blank" href="/chem/src/1398258135969.jpg"> <img src="/chem/thumb/1398258135969s.jpg" alt="187978" class="thumb" /> </a>   			 <blockquote class="opcomment chem33353432303135323034">  Climate scientists say that the leading cause of climate change is the amount of carbon dioxide in the atmosphere. To back that up they use the measurement (ppm) parts per million. The thing is that climate scientists say they are &#39;alarmed&#39; because the ppm of carbon has increased from 200 to 400. Why im sure there is more to it than this, is just doesn&#39;t seem like much. It&#39;s insignificant. Take my analogy; If I had $400 instead of $200, I would barely be that much closer to being a millionaire. My point is, if we use ppm, the ratio of atmospheric carbon barely changes. So my question is why does that alarm anybody and why is such a measurement anything to go on in saying humans are responsible for climate change?   </blockquote>   				 				  <span class="omittedposts">  6 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/chem/res/74574.php#74603" onclick="highlight(74603);">&gt;&gt;</a></td> <td class="reply" id="reply74603"> <a id="74603"></a> <div class="replyheader"> 									 <span class="commentpostername">Phoebe Chimmerkon</span>  - <span class="idhighlight">Thu, 24 Apr 2014 20:19:18 EST ID:uX/2IjDh</span> <span class="reflink">  <a href="/chem/res/74574.php#i74603">No.74603</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem33353432303135323034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74603', '74574')" title="Report Post 74603"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74603" data-thread="74574"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D81623; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem33353432303135323034">  <a href = "/chem/res/74574.php#74602" onclick = "highlight(74602)">&gt;&gt;74602</a><br>Well yes but his key point was that CO2 barely effects the temperature of earth and implied it would just be reabsorbed. I don&#39;t deny climate change but nor can I disprove him. I think if I knew more about CO2 I could say &quot;Hey, that&#39;s not what CO2 does&quot;. I just think if more people knew more about the chemical properties of C02 (including myself here) then it would give more people the ability to have some grounds to critically analyze statements like the one (<a href = "/chem/res/74574.php#74599" onclick = "highlight(74599)">&gt;&gt;74599</a>) made.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74574.php#74639" onclick="highlight(74639);">&gt;&gt;</a></td> <td class="reply" id="reply74639"> <a id="74639"></a> <div class="replyheader"> 									 <span class="commentpostername">Sidney Porringmidging</span>  - <span class="idhighlight">Thu, 01 May 2014 11:10:47 EST ID:nyJIpFK0</span> <span class="reflink">  <a href="/chem/res/74574.php#i74639">No.74639</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323036323136313336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74639', '74574')" title="Report Post 74639"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74639" data-thread="74574"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4F2A0C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1398957047314.jpg"> 1398957047314.jpg </a> -(<em>294597 B, 1182x814</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/chem/src/1398957047314.jpg"> <img src="/chem/thumb/1398957047314s.jpg" alt="294597" class="thumb" /> </a>    <blockquote  class="chem31323036323136313336">  <a href = "/chem/res/74574.php#74599" onclick = "highlight(74599)">&gt;&gt;74599</a><br>This post brought to you by Trump(TM) industries.<br><br>Climate change is a big farce that is bad for industry. You don&#39;t want to be bad for industry do you? That&#39;s communist!<br><br>Really though, you and the rest of your creationist friends are low-tier garbage. A UN conspiracy to what? Utilize renewable energy and cut emissions? OH THE SOCIALISTS ARE TAKING OVER.<br><br>Do not ever return to this board.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74574.php#74640" onclick="highlight(74640);">&gt;&gt;</a></td> <td class="reply" id="reply74640"> <a id="74640"></a> <div class="replyheader"> 									 <span class="commentpostername">Alice Deddlemet</span>  - <span class="idhighlight">Fri, 02 May 2014 10:43:45 EST ID:uX/2IjDh</span> <span class="reflink">  <a href="/chem/res/74574.php#i74640">No.74640</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem33353432303135323034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74640', '74574')" title="Report Post 74640"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74640" data-thread="74574"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #840A63; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1399041825535.jpg"> 1399041825535.jpg </a> -(<em>76543 B, 640x480</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/chem/src/1399041825535.jpg"> <img src="/chem/thumb/1399041825535s.jpg" alt="76543" class="thumb" /> </a>    <blockquote  class="chem33353432303135323034">  <a href = "/chem/res/74574.php#74639" onclick = "highlight(74639)">&gt;&gt;74639</a><br>Since you are dragging politics into this. Suppose climate change could be proven beyond a doubt to be strongly influenced by mankind, then it would have strong political implications. It WOULD mean that people would have to feel more motivated to switch to renewable energy and create a sustainable society where energy never runs out and less mining occurs. The man in that political cartoon you posted sums up that point perfectly.<br><br>But academically I would rather explore the evidence that exists without favouring one conclusion over the other. It is true that if research discovered that the manmade effect in climate change was minimal, then nobody would bother to change the way they use resources. But even so I think I would stand by the evidence even if the knowledge of that evidence was going to make people reach that conclusion. This is why I hate it when science is mixed with politics, since it blinds peoples judgement. I only want the truth even If I don&#39;t like or want it, because that is what science is all about.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74574.php#74641" onclick="highlight(74641);">&gt;&gt;</a></td> <td class="reply" id="reply74641"> <a id="74641"></a> <div class="replyheader"> 									 <span class="commentpostername">Emma Dodgeture</span>  - <span class="idhighlight">Fri, 02 May 2014 14:53:38 EST ID:gWgs9bU0</span> <span class="reflink">  <a href="/chem/res/74574.php#i74641">No.74641</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem32303930313333383334')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74641', '74574')" title="Report Post 74641"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74641" data-thread="74574"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #439B11; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem32303930313333383334">  OP doesn&#39;t realise that in complex dynamical systems, small changes variable values (CO2) can cause a dramatic change in the system (climate). A change in 200 to 400 ppm isn&#39;t trivial; that&#39;s a twice increase.<br><br>Learn some basic environmental chemistry and re-asses your views. That&#39;s really the best thing you can do; learn the science behind the rationale and learn to critique the research (which you aren&#39;t doing at all by being a &#39;sceptic&#39; or w/e).   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74574.php#74644" onclick="highlight(74644);">&gt;&gt;</a></td> <td class="reply" id="reply74644"> <a id="74644"></a> <div class="replyheader"> 									 <span class="commentpostername">Hannah Fandock</span>  - <span class="idhighlight">Fri, 02 May 2014 20:37:09 EST ID:uX/2IjDh</span> <span class="reflink">  <a href="/chem/res/74574.php#i74644">No.74644</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem33353432303135323034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74644', '74574')" title="Report Post 74644"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74644" data-thread="74574"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E07D98; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1399077429294.jpg"> 1399077429294.jpg </a> -(<em>118715 B, 519x613</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/chem/src/1399077429294.jpg"> <img src="/chem/thumb/1399077429294s.jpg" alt="118715" class="thumb" /> </a>    <blockquote  class="chem33353432303135323034">  <a href = "/chem/res/74574.php#74641" onclick = "highlight(74641)">&gt;&gt;74641</a><br>Well I did study gas concentrations in chemistry. I know it&#39;s twice the amount but it&#39;s the differences between a very dilute substance and a slightly more dilute substance. If  we use a ratio we can see that 200-400ppm is 0.02%-0.04%. From that, your argument would need to verify that the environment is so sensitive to carbon dioxide concentrations that even 0.02 should be enough to drive the greenhouse effect. I don&#39;t doubt your view at all, but I find it very uncanny that such a low change in gas concentration should be able to drive something as powerful as the greenhouse effect. I just think there should be something more to this that i&#39;m overlooking and I don&#39;t know what it is.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="chemthread74549"> <div class="thread_header"> <a id="74549"></a> <span class="filetitle">GE&#39;ing RuBisCO to defeat Global Warming.</span>  <span class="inbetween"> by </span> <span class="postername">Doris Draffingbury</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 19 Apr 2014 19:22:00 EST ID:EwWywDvg</span></span>  <span class="reflink"> <a href="/chem/res/74549.php#i74549">No.74549</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31303832323934343335')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('74549')" title="Report Thread 74549"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/chem/res/74549.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74549" data-thread="74549"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #720DD3; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('chemthread74549');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1397949720704.jpg"> 1397949720704.jpg </a> -(<em>61048 B, 672x513</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgchem31303832323934343335" target="_blank" href="/chem/src/1397949720704.jpg"> <img src="/chem/thumb/1397949720704s.jpg" alt="61048" class="thumb" /> </a>   			 <blockquote class="opcomment chem31303832323934343335">  For the uninitiated, RuBisCo is the photosynthetic enzyme responsible for taking CO2 out of the atmosphere, combining it with RUB5, and making 3-Phosphoglycerate, which creates energy for the plant/bacteria/whatever. However, there&#39;s one fatal problem with this system. RuBisCO is a fucking piece of shit enzyme.<br><br>First off, normal enzymes can make tens or even hundreds of thousands of molecules a second. How many  molecules can RuBisCO make per second, you ask? Fucking 3. 3 Molecules a second. Plant make up for this by creating a lot of RuBisCO, but the amount of Co2 they take up is still pathetic compared to what it could be.<br><br>What&#39;s worse, it can&#39;t differentiate between CO2 and plain old O2. The problem? For one thing,  the O2 can&#39;t even catalyze a reaction, cutting the production of molecules (and CO2 uptake) by half, meaning that instead of making 3 molecules of 3-Phosphoglycerate, it only makes 1 or 2 per second. Oh yeah, and BTW, when RUB5 combines with O2, it makes a compound which actually *poisons* the fucking plant.<br><br>Anyways, researchers have been trying for a while now to genetically engineer RuBisCO to not be a fucking piece of shit, but progress is slow. This link ( <a href="http://en.wikipedia.org/wiki/Rubisco#Genetic_engineering" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Rubisco#Genetic_engineering</a> ) can give you a decent primer on why. One thing that it doesn&#39;t mention is that recent methods of trying to GE RuBisCO to take in less O2 also lead it to take in less CO2, making that route of study less viable for the time being.<br><br>The best route, however, may be to simply increase  the rate of molecule production by RuBisCO instead of limiting O2 intake. I just got finished reading a paper here (<a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC3503183/" rel="nofollow" target="_blank">http://www.ncbi.nlm.nih.gov/pmc/articles/PMC3503183/</a>) which suggests that carbamylation activates  RuBisCO and nitrosylation inactivates it, trapping the CO2 or o2 in the active site. Thus, nitrosylation could be a means of controlling RuBisCO activity .<br><br>How does any of this &quot;defeat&quot; Global Warming? Simple. If the activity of RuBisCO were to be doubled in the majority of plant species,  It would halt the increasing concentrations of CO2 the atmosphere,. What&#39;s more, it could end up dropping the concentration by 25-50ppm. If the activity level were tripled, it could drop CO2 levels by as much as 100ppm. CO2 levels could be back to pre-industrial levels in just a few decades.<br><br>My main reasoning for posting is that I&#39;m looking for a few experts to answer some questions for me:<br><br><blockquote class = "unkfunc">&gt;Has there  been any progress in the past year on controlling  RuBisCO activity?</blockquote>  <div class="abbrev"> Comment too long. Click <a href="/chem/res/74549.php">here</a> to view the full text. </div>   </blockquote>   				 				  <span class="omittedposts">  11 posts and 2 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/chem/res/74549.php#74628" onclick="highlight(74628);">&gt;&gt;</a></td> <td class="reply" id="reply74628"> <a id="74628"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Fillytut</span>  - <span class="idhighlight">Sat, 26 Apr 2014 09:55:34 EST ID:Nbu7dGdg</span> <span class="reflink">  <a href="/chem/res/74549.php#i74628">No.74628</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323031373931323133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74628', '74549')" title="Report Post 74628"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74628" data-thread="74549"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1C458B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31323031373931323133">  <a href = "/chem/res/74549.php#74624" onclick = "highlight(74624)">&gt;&gt;74624</a><br>That&#39;s a pretty far out idea.<br><blockquote class = "unkfunc">&gt;The technology is clearly not here yet, however, and it would likely take several decades of research for this sort of project to become truly feasible. I&#39;m confident, however, that while it can&#39;t stop global warming anytime soon, it can certainly (eventually) reverse it.<br></blockquote>Like I said before, why not simply fertilize the ocean? It would cost millions less. I suppose the only downside is the possibility of creating an ice age (if we &quot;slip&quot; with the iron) or other unintended consequences (which is also a problem with releasing nanobots in the wild).   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74549.php#74629" onclick="highlight(74629);">&gt;&gt;</a></td> <td class="reply" id="reply74629"> <a id="74629"></a> <div class="replyheader"> 									 <span class="commentpostername">Alice Niggerford</span>  - <span class="idhighlight">Sun, 27 Apr 2014 18:02:12 EST ID:gDHcxa93</span> <span class="reflink">  <a href="/chem/res/74549.php#i74629">No.74629</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31303937373933303830')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74629', '74549')" title="Report Post 74629"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74629" data-thread="74549"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1BD0D0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31303937373933303830">  If we engineer a cellular component to be that much more efficient I fear it could sweep across the Earth and out-compete everything else. This could decimate diversity for a few hundred million years.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74549.php#74636" onclick="highlight(74636);">&gt;&gt;</a></td> <td class="reply" id="reply74636"> <a id="74636"></a> <div class="replyheader"> 									 <span class="commentpostername">Oliver Bishwater</span>  - <span class="idhighlight">Mon, 28 Apr 2014 22:08:17 EST ID:/oDrJq4q</span> <span class="reflink">  <a href="/chem/res/74549.php#i74636">No.74636</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31363630373532353631')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74636', '74549')" title="Report Post 74636"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74636" data-thread="74549"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5267FC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31363630373532353631">  <a href = "/chem/res/74549.php#74568" onclick = "highlight(74568)">&gt;&gt;74568</a><br><br>No wonder the enzyme&#39;s rate is so shitty:  even with stabilization from Mg2+ that&#39;s a pretty energetically unfavorable reaction.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74549.php#74637" onclick="highlight(74637);">&gt;&gt;</a></td> <td class="reply" id="reply74637"> <a id="74637"></a> <div class="replyheader"> 									 <span class="commentpostername">Syllogism</span>  - <span class="idhighlight">Tue, 29 Apr 2014 02:54:14 EST ID:stqlrmZK</span> <span class="reflink">  <a href="/chem/res/74549.php#i74637">No.74637</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31363534393830393133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74637', '74549')" title="Report Post 74637"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74637" data-thread="74549"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B77ABF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1398754454904.gif"> 1398754454904.gif </a> -(<em>26390 B, 210x210</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/chem/src/1398754454904.gif"> <img src="/chem/thumb/1398754454904s.jpg" alt="26390" class="thumb" /> </a>    <blockquote  class="chem31363534393830393133">  <a href = "/chem/res/74549.php#74636" onclick = "highlight(74636)">&gt;&gt;74636</a><br><br>CO2(aq) + NHR2(aq) -&gt; carbamate actually isn&#39;t as awful as it looks. There&#39;s a big entropy difference when considering gaseous and aqueous CO2, after all.  CO2(aq) is a very ordered system, so by comparison the carbamate formation is an entropy increase.  And a system with +ΔH and +ΔS will move toward spontaneity as temperature increases.<br><br>The problem is that this reaction is in competition with the phase change between aqueous and gas state, which makes the reaction very case dependant on exposure to the atmosphere.  It doesn&#39;t matter how favorable carbamate formation from aqueous CO2 is... if there&#39;s no aqueous CO2.  <br><br>In the blood, where respiration is pumping CO2 out like it was going out of style, an aqueous -&gt; gas equilibrium system can&#39;t exist until the volume of blood reaches the lungs.  So here CO2 can dock to hemeglobin via carbamate formation, and will undock when the opportunity to undergo gas exchange presents itself. In plants, gas exchange occurs much more frequently near the tissues that undergo photosynthesis, and so the PCO2 for rubisco just doesn&#39;t compare.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74549.php#74643" onclick="highlight(74643);">&gt;&gt;</a></td> <td class="reply" id="reply74643"> <a id="74643"></a> <div class="replyheader"> 									 <span class="commentpostername">Emma Dodgeture</span>  - <span class="idhighlight">Fri, 02 May 2014 15:04:58 EST ID:gWgs9bU0</span> <span class="reflink">  <a href="/chem/res/74549.php#i74643">No.74643</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem32303930313333383334')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74643', '74549')" title="Report Post 74643"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74643" data-thread="74549"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2C752D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem32303930313333383334">  <a href = "/chem/res/74549.php#74637" onclick = "highlight(74637)">&gt;&gt;74637</a><br>Aww shit. P chem is voodoo magic.<br><br><br>That picture. Aw man, learning about membrane depolarisations in electrophysiology. Dat K+ current.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="chemthread74630"> <div class="thread_header"> <a id="74630"></a> <span class="filetitle">Why no entropy device?</span>  <span class="inbetween"> by </span> <span class="postername">David Fanshaw</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 27 Apr 2014 19:31:39 EST ID:hpG/0AIC</span></span>  <span class="reflink"> <a href="/chem/res/74630.php#i74630">No.74630</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem343132313336313630')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('74630')" title="Report Thread 74630"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/chem/res/74630.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74630" data-thread="74630"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9D2F80; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('chemthread74630');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1398641499551.jpg"> 1398641499551.jpg </a> -(<em>50083 B, 522x522</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgchem343132313336313630" target="_blank" href="/chem/src/1398641499551.jpg"> <img src="/chem/thumb/1398641499551s.jpg" alt="50083" class="thumb" /> </a>   			 <blockquote class="opcomment chem343132313336313630">  Idk if I&#39;m even using that word right, but I can&#39;t think of a better name.<br>why isn&#39;t there something that can absorb energy from it&#39;s surroundings? There&#39;s a lot of energy just in the air, so why can&#39;t something absorb that energy?  It would use a chemical and/or physical reaction to suck the heat out of the air, absorbing the energy and spitting out cold air. I suppose it would take a lot of air to get something big moving, but what if it could work in water too.<br><br>Energy/matter can&#39;t normally be created or destroyed. When you use energy, you&#39;re really just moving it around. So I don&#39;t understand why this hasn&#39;t been invented yet.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/chem/res/74630.php#74631" onclick="highlight(74631);">&gt;&gt;</a></td> <td class="reply" id="reply74631"> <a id="74631"></a> <div class="replyheader"> 									 <span class="commentpostername">Thomas Turveybanks</span>  - <span class="idhighlight">Sun, 27 Apr 2014 20:34:20 EST ID:nVbMg10U</span> <span class="reflink">  <a href="/chem/res/74630.php#i74631">No.74631</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323636383736343337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74631', '74630')" title="Report Post 74631"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74631" data-thread="74630"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3643F4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31323636383736343337">  <a href="http://en.wikipedia.org/wiki/Second_law_of_thermodynamics" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Second_law_of_thermodynamics</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74630.php#74632" onclick="highlight(74632);">&gt;&gt;</a></td> <td class="reply" id="reply74632"> <a id="74632"></a> <div class="replyheader"> 									 <span class="commentpostername">Eliza Criddleworth</span>  - <span class="idhighlight">Sun, 27 Apr 2014 21:35:49 EST ID:Nbu7dGdg</span> <span class="reflink">  <a href="/chem/res/74630.php#i74632">No.74632</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323031373931323133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74632', '74630')" title="Report Post 74632"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74632" data-thread="74630"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #461015; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31323031373931323133">  <a href = "/chem/res/74630.php" onclick = "highlight(74630)">&gt;&gt;74630</a><br>Your post kinda sounds like you&#39;re talking about &quot;free energy&quot;, in which case go to thomas&#39;s link. <br><br>But it also sounds like you&#39;re just talking about moving some energy from a cold place to a warmer place, which is possible as long as you&#39;re spending energy and increasing the entropy of the universe. It&#39;s called a heat pump. That&#39;s actually what a fridge does. It absorbs heat from inside the fridge, and expels the heat outside the fridge. There&#39;s ADDITIONAL heat that&#39;s generated outside the fridge, thanks to the second law of thermo.<br><br><br><a href="http://en.wikipedia.org/wiki/Heat_pump" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Heat_pump</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74630.php#74633" onclick="highlight(74633);">&gt;&gt;</a></td> <td class="reply" id="reply74633"> <a id="74633"></a> <div class="replyheader"> 									 <span class="commentpostername">Eliza Criddleworth</span>  - <span class="idhighlight">Sun, 27 Apr 2014 21:41:24 EST ID:Nbu7dGdg</span> <span class="reflink">  <a href="/chem/res/74630.php#i74633">No.74633</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323031373931323133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74633', '74630')" title="Report Post 74633"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74633" data-thread="74630"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B519BE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1398649284605.png"> 1398649284605.png </a> -(<em>18724 B, 300x154</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/chem/src/1398649284605.png"> <img src="/chem/thumb/1398649284605s.jpg" alt="18724" class="thumb" /> </a>    <blockquote  class="chem31323031373931323133">  From wiki:<br><blockquote class = "unkfunc">&gt;1) condenser, 2) expansion valve, 3) evaporator, 4) compressor.<br></blockquote>When the refrigerant condenses, it releases energy, heating up it&#39;s surrounding area (which is why steam is particularly painful).<br><br>The expansion valve is where the refrigerant flows into the cold side of the heat pump. <br><br>When it evaporates, it takes heat from its surrounding (Think of how sweat cools you down).<br><br>Then the compressor adds energy and extra heat and entropy to keep the cycle going. The refrigerant condenses and the cycle is back to the beginning.<br><br>The whole process moves energy from the cold side to the hot side.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74630.php#74634" onclick="highlight(74634);">&gt;&gt;</a></td> <td class="reply" id="reply74634"> <a id="74634"></a> <div class="replyheader"> 									 <span class="commentpostername">Eliza Criddleworth</span>  - <span class="idhighlight">Sun, 27 Apr 2014 21:49:06 EST ID:Nbu7dGdg</span> <span class="reflink">  <a href="/chem/res/74630.php#i74634">No.74634</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323031373931323133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74634', '74630')" title="Report Post 74634"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74634" data-thread="74630"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9DF3A4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1398649746605.png"> 1398649746605.png </a> -(<em>47545 B, 715x367</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/chem/src/1398649746605.png"> <img src="/chem/thumb/1398649746605s.jpg" alt="47545" class="thumb" /> </a>    <blockquote  class="chem31323031373931323133">  <a href = "/chem/res/74630.php#74632" onclick = "highlight(74632)">&gt;&gt;74632</a><br><blockquote class = "unkfunc">&gt;1) condenser, 2) expansion valve, 3) evaporator, 4) compressor.<br></blockquote><br>The condensor is where the refrigerant condenses. It transfers energy to the tubing/hotside, much like steam burns when it condenses on your skin.<br><br>The evaporator is on the cold side. When the refrigerant  evaporates, it takes energy from its surrounding. Much like sweat is cooling when it evaporates off your skin.<br><br>The gas refrigerant the goes through the compressor, forcing it to the hot side. THe compressor is where energy is spent, and entropy is being increased. It also resets the cycle.<br><br><blockquote class = "unkfunc">&gt;Idk if I&#39;m even using that word right<br></blockquote>not really, just because entropy of the universe is always increasing. &quot;entropy device&quot; sounds mystical, but every machine and every transformation is increasing entropy. The heat pump decreases entropy *OF THE SYSTEM,* but not of the universe.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74630.php#74635" onclick="highlight(74635);">&gt;&gt;</a></td> <td class="reply" id="reply74635"> <a id="74635"></a> <div class="replyheader"> 									 <span class="commentpostername">Eliza Criddleworth</span>  - <span class="idhighlight">Sun, 27 Apr 2014 21:50:00 EST ID:Nbu7dGdg</span> <span class="reflink">  <a href="/chem/res/74630.php#i74635">No.74635</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323031373931323133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74635', '74630')" title="Report Post 74635"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74635" data-thread="74630"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F2E4A4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31323031373931323133">  <a href = "/chem/res/74630.php#74633" onclick = "highlight(74633)">&gt;&gt;74633</a><br>Motherfucker, now you show up? After I rewrote the post? Fuck you.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="chemthread74584"> <div class="thread_header"> <a id="74584"></a> <span class="filetitle">The way things interact, and why they are different</span>  <span class="inbetween"> by </span> <span class="postername">Archie Pettingnotch</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 23 Apr 2014 22:25:53 EST ID:7I90k3by</span></span>  <span class="reflink"> <a href="/chem/res/74584.php#i74584">No.74584</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31343430383234373034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('74584')" title="Report Thread 74584"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/chem/res/74584.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74584" data-thread="74584"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #635161; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('chemthread74584');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1398306353658.png"> 1398306353658.png </a> -(<em>501242 B, 800x600</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgchem31343430383234373034" target="_blank" href="/chem/src/1398306353658.png"> <img src="/chem/thumb/1398306353658s.jpg" alt="501242" class="thumb" /> </a>   			 <blockquote class="opcomment chem31343430383234373034">  <blockquote class = "unkfunc">&gt;image related<br></blockquote><br>Different color, different brain; Different shape, different body.<br><br>The brain takes input from the environment and processes it in order to create output; Different brains allow different animals to create different output. Our different bodies allow us to release the output in a variety of ways. This is why life forms are different.<br><br>Yeah.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/chem/res/74584.php#74585" onclick="highlight(74585);">&gt;&gt;</a></td> <td class="reply" id="reply74585"> <a id="74585"></a> <div class="replyheader"> 									 <span class="commentpostername">Archie Pettingnotch</span>  - <span class="idhighlight">Wed, 23 Apr 2014 22:35:03 EST ID:7I90k3by</span> <span class="reflink">  <a href="/chem/res/74584.php#i74585">No.74585</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31343430383234373034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74585', '74584')" title="Report Post 74585"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74585" data-thread="74584"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CD3978; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1398306903658.jpg"> 1398306903658.jpg </a> -(<em>980165 B, 1280x1040</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/chem/src/1398306903658.jpg"> <img src="/chem/thumb/1398306903658s.jpg" alt="980165" class="thumb" /> </a>    <blockquote  class="chem31343430383234373034">  <a href = "/chem/res/74584.php" onclick = "highlight(74584)">&gt;&gt;74584</a><br>and by output I mean some form of will; The different bodies allow for the wills of varying complexities to manifest themselves as actions   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74584.php#74588" onclick="highlight(74588);">&gt;&gt;</a></td> <td class="reply" id="reply74588"> <a id="74588"></a> <div class="replyheader"> 									 <span class="commentpostername">Frederick Buzzworth</span>  - <span class="idhighlight">Wed, 23 Apr 2014 23:26:34 EST ID:Nbu7dGdg</span> <span class="reflink">  <a href="/chem/res/74584.php#i74588">No.74588</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323031373931323133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74588', '74584')" title="Report Post 74588"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74588" data-thread="74584"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8C936A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31323031373931323133">  <a href = "/chem/res/74584.php" onclick = "highlight(74584)">&gt;&gt;74584</a><br>The inputs also vary. depending on the different body and brain. Also, the brain is just another part of the body right?<br><br>I get the feeling this post was inspired by acid.<br><a href="http://en.wikipedia.org/wiki/Turing_machine" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Turing_machine</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74584.php#74625" onclick="highlight(74625);">&gt;&gt;</a></td> <td class="reply" id="reply74625"> <a id="74625"></a> <div class="replyheader"> 									 <span class="commentpostername">John Himbleshit</span>  - <span class="idhighlight">Sat, 26 Apr 2014 06:26:45 EST ID:KKWXTFcf</span> <span class="reflink">  <a href="/chem/res/74584.php#i74625">No.74625</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem32303930313033363234')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74625', '74584')" title="Report Post 74625"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74625" data-thread="74584"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F6A0A9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem32303930313033363234">  <a href="http://plato.stanford.edu/entries/functionalism/index.html" rel="nofollow" target="_blank">http://plato.stanford.edu/entries/functionalism/index.html</a><br><br><br>Herpa derpa aren&#39;t you a novelty   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="chemthread74621"> <div class="thread_header"> <a id="74621"></a> <span class="filetitle">physics questions</span>  <span class="inbetween"> by </span> <span class="postername">Molly Buzzford</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 26 Apr 2014 00:11:46 EST ID:1eTHxqqE</span></span>  <span class="reflink"> <a href="/chem/res/74621.php#i74621">No.74621</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31383437363837323133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('74621')" title="Report Thread 74621"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/chem/res/74621.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74621" data-thread="74621"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F734C8; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('chemthread74621');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/chem/src/1398485506428.png"> 1398485506428.png </a> -(<em>45698 B, 187x323</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgchem31383437363837323133" target="_blank" href="/chem/src/1398485506428.png"> <img src="/chem/thumb/1398485506428s.jpg" alt="45698" class="thumb" /> </a>   			 <blockquote class="opcomment chem31383437363837323133">  Hi I am stuck with a physics question and was hoping you guys could help me out <br><br>Q:<br><br>A block of mass m  1 kg  is dropped from height 50 cm h onto a spring of spring constant 2000  k. What is r the maximum distance the spring is compressed ?<br><br>I am a little bit stuck<br><br>I have hookes law F = -kx<br><br>I can calculate the velocity of the mass when the mass hits the spring (9.89 m/s)<br><br>where would I go from here? I dont just want the answer for this particular problem  I want to know how II would find it with any vaules of m, k, h. <br><br>is the work energy theorem useful in this case?  <div class="abbrev"> Comment too long. Click <a href="/chem/res/74621.php">here</a> to view the full text. </div>   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/chem/res/74621.php#74622" onclick="highlight(74622);">&gt;&gt;</a></td> <td class="reply" id="reply74622"> <a id="74622"></a> <div class="replyheader"> 									 <span class="commentpostername">Priscilla Darthall</span>  - <span class="idhighlight">Sat, 26 Apr 2014 00:39:58 EST ID:nVbMg10U</span> <span class="reflink">  <a href="/chem/res/74621.php#i74622">No.74622</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31323636383736343337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74622', '74621')" title="Report Post 74622"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74622" data-thread="74621"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EAB362; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31323636383736343337">  <blockquote class = "unkfunc">&gt;is the work energy theorem useful in this case?<br></blockquote>Yeah, use conservation of energy: 1/2kx^2 = mgh <br>Then just solve for x: x = sqrt(2mgh/k) = 7 cm   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/chem/res/74621.php#74623" onclick="highlight(74623);">&gt;&gt;</a></td> <td class="reply" id="reply74623"> <a id="74623"></a> <div class="replyheader"> 									 <span class="commentpostername">Molly Buzzford</span>  - <span class="idhighlight">Sat, 26 Apr 2014 00:49:05 EST ID:1eTHxqqE</span> <span class="reflink">  <a href="/chem/res/74621.php#i74623">No.74623</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('chem31383437363837323133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('74623', '74621')" title="Report Post 74623"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="74623" data-thread="74621"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E243D1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="chem31383437363837323133">  <a href = "/chem/res/74621.php#74622" onclick = "highlight(74622)">&gt;&gt;74622</a><br>Thank you so much :) <br><br>nb   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://insomniacgamers.net"><img src="http://cdn.420chan.org/sp/i.png"></a>
		</div>
				<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/chem/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="chem" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">  <a href="/chem/3.php">&lt;&lt;Last</a>   <span style="font-size: +1;">Pages</span>   <a href="/chem/5.php">Next&gt;&gt;</a>  <br />   <a href="/chem/index.php">0</a>     <a href="/chem/1.php">1</a>     <a href="/chem/2.php">2</a>     <a href="/chem/3.php">3</a>      4    <a href="/chem/5.php">5</a>     <a href="/chem/6.php">6</a>     <a href="/chem/7.php">7</a>     <a href="/chem/8.php">8</a>     <a href="/chem/9.php">9</a>     <a href="/chem/10.php">10</a>     <a href="/chem/11.php">11</a>     <a href="/chem/12.php">12</a>     <a href="/chem/13.php">13</a>     <a href="/chem/14.php">14</a>     <a href="/chem/15.php">15</a>     <a href="/chem/16.php">16</a>     <a href="/chem/17.php">17</a>     <a href="/chem/18.php">18</a>     <a href="/chem/19.php">19</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
							<li><img width='32' height='32' class='boardicon' alt='sd' src='/static/images/board_icons/sd_icon_32.png' />
		<span class='byline'>Sexuality Discussion - <a href='/sd/res/83810.php' class='boardlink'>Thread 83810</a></span>
		<p>>>83810
See that pic? That's me, trapping. I just got my ass pounded by my best friend. My Sissy vi... <a href='/sd/res/83810.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='vg' src='/static/images/board_icons/vg_icon_32.png' />
		<span class='byline'>Video Games - <a href='/vg/res/572789.php' class='boardlink'>Thread 572789</a></span>
		<p>>>576796 
this is the strawmanniest GTAIV argument I've ever seen. Roman doesn't even hit you up ev... <a href='/vg/res/572789.php' class='boardlink'>&#8629;</a></p></li>
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

