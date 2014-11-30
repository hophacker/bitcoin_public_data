http://boards.420chan.org/pss/4.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Thu, 24 Jul 2014 03:05:54 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> Philosophy &amp; Social Sciences - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/pss_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/pss_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/pss/4.php';
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
	 <div id="header"> <div id="board_logo"> <a href="/pss/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/pss_icon_64.png" alt="/pss/ Icon" /> <p class="board_title_block"> <span class="board_name">/pss/</span> <span class="board_title">Philosophy &amp; Social Sciences</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
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
	 <!--  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/pss/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="pss" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />     <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>  <tr> <td class="postblock">Name</td> <td> <input title="Name" type="text" name="field1" style="width:224px;" /> <div class="tooltip">  You can leave this blank to post anonymously, or you can create a Tripcode by using the float <b>Name#Password</b> </div>					 </td> </tr>    <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div>  <script type="text/javascript">set_inputs("postform")</script> <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 3000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> <li>This is a work-safe board. Posting adult images is forbidden.</li>			  </ul> </div> <hr style="margin-bottom:2px;" /> 		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://420chan.org/advertise"><img src="http://cdn.420chan.org/sp/YOUR-AD-HERE.gif"></a>
		</div>
		 <hr style="margin-top:2px;" />   <form id="delform" action="/pss/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="pss" />    <div id="pssthread193402"> <div class="thread_header"> <a id="193402"></a> <span class="filetitle">Social Science = Pseudo Science</span>  <span class="inbetween"> by </span> <span class="postername">Cedric Bremmertidge</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 09 May 2014 20:56:36 EST ID:RC2teSQj</span></span>  <span class="reflink"> <a href="/pss/res/193402.php#i193402">No.193402</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31333834323631333036')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('193402')" title="Report Thread 193402"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/pss/res/193402.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193402" data-thread="193402"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #424CE1; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('pssthread193402');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1399683396423.jpg"> 1399683396423.jpg </a> -(<em>56736 B, 590x494</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgpss31333834323631333036" target="_blank" href="/pss/src/1399683396423.jpg"> <img src="/pss/thumb/1399683396423s.jpg" alt="56736" class="thumb" /> </a>   			 <blockquote class="opcomment pss31333834323631333036">  Feynman on social sciences<br><a href="http://youtu.be/IaO69CF5mbY" rel="nofollow" target="_blank">http://youtu.be/IaO69CF5mbY</a>   </blockquote>   				 				  <span class="omittedposts">   9 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/pss/res/193402.php#193499" onclick="highlight(193499);">&gt;&gt;</a></td> <td class="reply" id="reply193499"> <a id="193499"></a> <div class="replyheader"> 									 <span class="commentpostername">Emma Shakewill</span>  - <span class="idhighlight">Tue, 13 May 2014 17:50:19 EST ID:5q+Zf1cH</span> <span class="reflink">  <a href="/pss/res/193402.php#i193499">No.193499</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss33353537363837343534')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193499', '193402')" title="Report Post 193499"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193499" data-thread="193402"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C75607; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss33353537363837343534">  <a href = "/pss/res/193402.php#193497" onclick = "highlight(193497)">&gt;&gt;193497</a><br><blockquote class = "unkfunc">&gt;All economists operate from a point of bias, that has been the case from the beginning. Most of the prominent economists in academia make their real money by writing favorable analyses for investment firms. Those firms in turn are able to take those reports to their clients as a way to show how &quot;sound&quot; said firm&#39;s investments are. Economists create think tanks because it&#39;s the most effective way for them to affect policy.<br></blockquote>Well, that&#39;s what I was talking about. The community actively embraces bias, which more often than not results in eschewing evidence, falsifiability or outright denying surrounding reality to further some kind of a cause, instead of examining what can be known and at least trying to predict the best course of action.<br>To me, it shows how the academic community is prone to dishonesty, which is in itself a grave issue, but does not bear relevance when it comes to judging the field itself.<br><blockquote class = "unkfunc">&gt;That&#39;s a funny comparison but I don&#39;t know if I&#39;d go that far.<br></blockquote>Praxeology is so disjointed from reality it&#39;s not even funny anymore. Its axioms are so, hm, &quot;bold&quot; they were invalidated by natural sciences a long time ago (free will and dualism, seriously). Oh, and claims of &quot;irrefutability&quot;.<br>To quote Ludwig von Mises: &quot;Its statements and propositions are not derived from experience. They are not subject to verification or falsification on the ground of experience and facts.&quot;<br>So yeah, flat earth theory.<br><blockquote class = "unkfunc">&gt;But you can&#39;t divorce economics from politics.<br></blockquote>You can&#39;t divorce politics from anything, really, but the form of its influence does differ from case to case.<br><blockquote class = "unkfunc">&gt;How well they did or didn&#39;t work and subsequently proposing policies based on those findings<br></blockquote>That&#39;s the key point. If a model is based on what worked and what did not and produces results that can be checked, it&#39;s gravy. Bias, in itself, is unavoidable, but should not be the *base* of the proposed policy, as it is often the case (did I mention Austrian school?)<br><blockquote class = "unkfunc">&gt;You either favor free-markets or you don&#39;t<br></blockquote>First, you have to agree on what *is* a free market. <br>Jokes aside; I have my opinion, but there&#39;s absolutely nothin&hellip;  <div class="abbrev"> Comment too long. Click <a href="/pss/res/193402.php#193499">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193402.php#193530" onclick="highlight(193530);">&gt;&gt;</a></td> <td class="reply" id="reply193530"> <a id="193530"></a> <div class="replyheader"> 									 <span class="commentpostername">Jarvis Perrywore</span>  - <span class="idhighlight">Wed, 14 May 2014 03:11:56 EST ID:rOayJipD</span> <span class="reflink">  <a href="/pss/res/193402.php#i193530">No.193530</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31323534343538323633')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193530', '193402')" title="Report Post 193530"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193530" data-thread="193402"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #28EE4D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31323534343538323633">  <a href = "/pss/res/193402.php#193449" onclick = "highlight(193449)">&gt;&gt;193449</a><br><blockquote class = "unkfunc">&gt;if it gives a consistent model, the predictions of which can be tested, it&#39;s science.<br></blockquote>Social &quot;sciences&quot; don&#39;t do this though.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193402.php#193963" onclick="highlight(193963);">&gt;&gt;</a></td> <td class="reply" id="reply193963"> <a id="193963"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigel Brookfield</span>  - <span class="idhighlight">Mon, 26 May 2014 17:30:09 EST ID:cBh6c9LE</span> <span class="reflink">  <a href="/pss/res/193402.php#i193963">No.193963</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss33323030333631313937')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193963', '193402')" title="Report Post 193963"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193963" data-thread="193402"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5641D4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss33323030333631313937">  I never understand why people argue about what things are or aren&#39;t science. It&#39;s very clear that science is its method, nothing more and nothing less, and there&#39;s only one scientific method.<br><br>The part most overlooked though is that an area of study doesn&#39;t have to be a science to be worth studying. We need laws on our societies, but Law studies are not a science. Are they not worth studying? Of course they are. History serves a lot of purposes, and knowledge can be derived from historical records, but History is not a science. It&#39;s still worth studying. <br><br>It&#39;s the same for everything, really. It&#39;s just that science is a very specific, very particular thing that is not found on every field, but not being science doesn&#39;t mean your field is useless. The real problem is that science happens to produce the most rigorous and accurate knowledge out of every field that produces knowledge, and for this reason everyone wants to take the label for themselves. If you are seen as &quot;science&quot; by the masses, you are given more legitimacy, even if you are not a science, so it becomes a political thing where everything is a &quot;science&quot; of some sort because the term implies some kind of authority on claims (even if real science has no authorities).   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193402.php#193964" onclick="highlight(193964);">&gt;&gt;</a></td> <td class="reply" id="reply193964"> <a id="193964"></a> <div class="replyheader"> 									 <span class="commentpostername">Phyllis Clayworth</span>  - <span class="idhighlight">Mon, 26 May 2014 20:36:46 EST ID:ODId6GzL</span> <span class="reflink">  <a href="/pss/res/193402.php#i193964">No.193964</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss383437343531303338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193964', '193402')" title="Report Post 193964"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193964" data-thread="193402"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E1442F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss383437343531303338">  <a href = "/pss/res/193402.php#193963" onclick = "highlight(193963)">&gt;&gt;193963</a><br><br>well, its not that simple<br><br>the social sciences do not claim merely to be worth studying, but that they are science, lol, and specifically, that their theories and claims are empirically verifiable and experimentally supported, thats the key. the historian has eschewed empirically verifiable theories (due to the fact that history cannot be experimented upon), and instead seeks truth from the next best source: surveying what people who WERE there have said about the matter.<br><br>so when people criticize social science as &quot;not science&quot;, they aren&#39;t saying &quot;nothing that isnt science is worth learning&quot; but rather, they criticize it for claiming to have established empirical truths about society that they have not in fact, rationally established.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193402.php#193986" onclick="highlight(193986);">&gt;&gt;</a></td> <td class="reply" id="reply193986"> <a id="193986"></a> <div class="replyheader"> 									 <span class="commentpostername">Nell Nungerville</span>  - <span class="idhighlight">Wed, 28 May 2014 19:57:19 EST ID:hPWAVfIE</span> <span class="reflink">  <a href="/pss/res/193402.php#i193986">No.193986</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31323435383436303539')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193986', '193402')" title="Report Post 193986"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193986" data-thread="193402"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8D723A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31323435383436303539">  I find it odd that he talks about social sciences and then brings up an example of biology.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="pssthread193708"> <div class="thread_header"> <a id="193708"></a> <span class="filetitle">Nihilistic hedonism is a contradiction in terms</span>  <span class="inbetween"> by </span> <span class="postername">Hedda Hangerfudge</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 19 May 2014 14:32:35 EST ID:C2g2IsPf</span></span>  <span class="reflink"> <a href="/pss/res/193708.php#i193708">No.193708</a> </span>    			 <!--  - Awesome Thread? <a href="/pss/taimaba.pl?board=pss&amp;task=vote&amp;thread=193708&amp;vote=0">No!</a> | <a href="/pss/taimaba.pl?board=pss&amp;task=vote&amp;thread=193708&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31323031383235363037')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('193708')" title="Report Thread 193708"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/pss/res/193708.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193708" data-thread="193708"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6AF2CF; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('pssthread193708');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1400524355236.png"> 1400524355236.png </a> -(<em>368963 B, 720x521</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgpss31323031383235363037" target="_blank" href="/pss/src/1400524355236.png"> <img src="/pss/thumb/1400524355236s.jpg" alt="368963" class="thumb" /> </a>   			 <blockquote class="opcomment pss31323031383235363037">  There&#39;s no such thing.<br><br>If you a hedonist, you are not a nihilist.   </blockquote>   				 				  <span class="omittedposts">  37 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/pss/res/193708.php#193855" onclick="highlight(193855);">&gt;&gt;</a></td> <td class="reply" id="reply193855"> <a id="193855"></a> <div class="replyheader"> 									 <span class="commentpostername">Frederick Druzzlestock</span>  - <span class="idhighlight">Wed, 21 May 2014 17:50:29 EST ID:khFf40E1</span> <span class="reflink">  <a href="/pss/res/193708.php#i193855">No.193855</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31363538383238363238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193855', '193708')" title="Report Post 193855"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193855" data-thread="193708"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D8C7D5; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31363538383238363238">  <a href = "/pss/res/193708.php#193852" onclick = "highlight(193852)">&gt;&gt;193852</a><br>i&#39;m not excusing them i&#39;m just being caught in explanation, of something that exists within experience.  Which is nihilism its psychology and philosophy and it  came from a time when they were very closely linked.<br><br>For example having pleasure seeking personality can lead you to never understand the absence in the absence makes the heart go fonder, and your psychological wearing of pleasure in general CAN make pleasure become exausted.  You may experience the crumbling of that pleasure, but at the same time that is still what you crave but it just keeps getting less and less, but you keep seeking it more and more.  Not accepting your ruining it from your abuse and use of it, and you continue to take it more and more.  so while living your life for that pleasure and seeking it, your in incress despair that the nature of is less and less.<br><br>and this is a common view amongst many addictions.  So an addiction would be a good example of a nihilist hedonist.  You chasing the dragon with the doubt and the memory of it both.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193708.php#193856" onclick="highlight(193856);">&gt;&gt;</a></td> <td class="reply" id="reply193856"> <a id="193856"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Greenridge</span>  - <span class="idhighlight">Wed, 21 May 2014 17:55:22 EST ID:f23csTPp</span> <span class="reflink">  <a href="/pss/res/193708.php#i193856">No.193856</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss32393035363430303035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193856', '193708')" title="Report Post 193856"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193856" data-thread="193708"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2BFA8B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss32393035363430303035">  <a href = "/pss/res/193708.php#193853" onclick = "highlight(193853)">&gt;&gt;193853</a><br><a href = "/pss/res/193708.php#193854" onclick = "highlight(193854)">&gt;&gt;193854</a><br><br>You know, I read over these posts 3 times now, and even went back and read your older posts in the thread, and I still have no fucking idea what point you&#39;re trying to make. You go off on tangents a lot and write in a pretty convoluted way, several times with poor grammar, randomly throwing in some psychoanalysis of anonymous people to top it all off.<br><br>So let&#39;s try get back to basics, shall we? Is your basic point that there are different versions of Nihilism, and that some would allow hedonism and some wouldn&#39;t? <br><br>Because I thought the whole point this thread was discussing was that Nihilistic hedonism is in fact NOT a contradiction of terms? What are you discussing?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193708.php#193877" onclick="highlight(193877);">&gt;&gt;</a></td> <td class="reply" id="reply193877"> <a id="193877"></a> <div class="replyheader"> 									 <span class="commentpostername">Emma Fembleman</span>  - <span class="idhighlight">Thu, 22 May 2014 11:09:32 EST ID:khFf40E1</span> <span class="reflink">  <a href="/pss/res/193708.php#i193877">No.193877</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31363538383238363238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193877', '193708')" title="Report Post 193877"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193877" data-thread="193708"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #384C2C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31363538383238363238">  <a href = "/pss/res/193708.php#193856" onclick = "highlight(193856)">&gt;&gt;193856</a><br>No let&#39;s not because you weren&#39;t on the ball to begin with.  You didn&#39;t understand the point because you were oblivious to the context.  Their was no point other than to explain why a nihilist licking a spoon for all eternity rather and having no preference to do anything else is a fitting image of  a nihilist.  Then you got the idea that nihilism had nothing to do with external entities having no meaning(which it often does) from a post that suggested that a nihilist was like somebody who even if they detected valuable sensory stimuli in the environment was not responsive to it, despite their knowledge of it.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193708.php#193885" onclick="highlight(193885);">&gt;&gt;</a></td> <td class="reply" id="reply193885"> <a id="193885"></a> <div class="replyheader"> 									 <span class="commentpostername">Hamilton Pablingville</span>  - <span class="idhighlight">Thu, 22 May 2014 17:05:15 EST ID:f23csTPp</span> <span class="reflink">  <a href="/pss/res/193708.php#i193885">No.193885</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss32393035363430303035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193885', '193708')" title="Report Post 193885"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193885" data-thread="193708"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #77CD58; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss32393035363430303035">  <a href = "/pss/res/193708.php#193877" onclick = "highlight(193877)">&gt;&gt;193877</a><br><br>You&#39;re stuck talking about theory while I&#39;m talking about reality, but okay man. Let&#39;s just agree to disagree, if you&#39;re gonna be a pompous ass about it.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193708.php#193886" onclick="highlight(193886);">&gt;&gt;</a></td> <td class="reply" id="reply193886"> <a id="193886"></a> <div class="replyheader"> 									 <span class="commentpostername">Samuel Harrydale</span>  - <span class="idhighlight">Thu, 22 May 2014 18:19:28 EST ID:vR99jt35</span> <span class="reflink">  <a href="/pss/res/193708.php#i193886">No.193886</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss32373934303138383331')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193886', '193708')" title="Report Post 193886"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193886" data-thread="193708"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A4D7E9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss32373934303138383331">  <a href = "/pss/res/193708.php#193885" onclick = "highlight(193885)">&gt;&gt;193885</a><br>You&#39;ve been talking about definitions of words and the notions of why this would necessarily be you&#39;re talking about skeptical reasons to hold out that&#39;s keeping you away from what&#39;s bodily experienced as nihilistic.  If your looking for reasons to keep something out of a model you are not in reality sir.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="pssthread193911"> <div class="thread_header"> <a id="193911"></a> <span class="filetitle">What&#39;s constructivist epistemology?</span>  <span class="inbetween"> by </span> <span class="postername">Ian Blackbanks</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 23 May 2014 17:37:51 EST ID:2yfFsGTg</span></span>  <span class="reflink"> <a href="/pss/res/193911.php#i193911">No.193911</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31333137303031363435')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('193911')" title="Report Thread 193911"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/pss/res/193911.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193911" data-thread="193911"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #387E7C; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('pssthread193911');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1400881071281.jpg"> 1400881071281.jpg </a> -(<em>219756 B, 807x458</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgpss31333137303031363435" target="_blank" href="/pss/src/1400881071281.jpg"> <img src="/pss/thumb/1400881071281s.jpg" alt="219756" class="thumb" /> </a>   			 <blockquote class="opcomment pss31333137303031363435">  What&#39;s constructivist epistemology? What&#39;s the opposite of it? And what is constructivism?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/pss/res/193911.php#193914" onclick="highlight(193914);">&gt;&gt;</a></td> <td class="reply" id="reply193914"> <a id="193914"></a> <div class="replyheader"> 									 <span class="commentpostername">Ian Doshchin</span>  - <span class="idhighlight">Fri, 23 May 2014 18:29:04 EST ID:nwe6fNr5</span> <span class="reflink">  <a href="/pss/res/193911.php#i193914">No.193914</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31343130353734373632')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193914', '193911')" title="Report Post 193914"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193914" data-thread="193911"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E9CA4F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31343130353734373632">  <blockquote class = "unkfunc">&gt;What&#39;s constructivist epistemology?<br></blockquote>At its most basic, that scienctific knowledge is a mental construct which aims to explain the sensory input. Create a model of it, if you will.<br><blockquote class = "unkfunc">&gt;What&#39;s the opposite of it?<br></blockquote>In my opinion, that&#39;d be empiricism (because of the &quot;mental construct part&quot; being required to form knowledge) and rationalism (because of the &quot;sensory input&quot; being required to form knowledge part). They also happen to antagonize each other.<br><blockquote class = "unkfunc">&gt;And what is constructivism? <br></blockquote>A larger body of philosophical statements, mainly regarding the theory of education, the integral part of which is constructivist epistemology.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="pssthread193910"> <div class="thread_header"> <a id="193910"></a> <span class="filetitle">What is this called?</span>  <span class="inbetween"> by </span> <span class="postername">Ian Blackbanks</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 23 May 2014 17:35:01 EST ID:2yfFsGTg</span></span>  <span class="reflink"> <a href="/pss/res/193910.php#i193910">No.193910</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31333137303031363435')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('193910')" title="Report Thread 193910"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/pss/res/193910.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193910" data-thread="193910"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6F4B14; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('pssthread193910');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1400880901281.jpg"> 1400880901281.jpg </a> -(<em>86366 B, 544x400</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgpss31333137303031363435" target="_blank" href="/pss/src/1400880901281.jpg"> <img src="/pss/thumb/1400880901281s.jpg" alt="86366" class="thumb" /> </a>   			 <blockquote class="opcomment pss31333137303031363435">  What do you call the notion that language creates concepts, and that the way we see the world and reason about it is influenced by these concepts?<br><br>Also, what&#39;s the same notion but without the language part called? That concepts make us view and reason about the world one way or another,.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/pss/res/193910.php#193913" onclick="highlight(193913);">&gt;&gt;</a></td> <td class="reply" id="reply193913"> <a id="193913"></a> <div class="replyheader"> 									 <span class="commentpostername">Ian Doshchin</span>  - <span class="idhighlight">Fri, 23 May 2014 18:08:20 EST ID:nwe6fNr5</span> <span class="reflink">  <a href="/pss/res/193910.php#i193913">No.193913</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31343130353734373632')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193913', '193910')" title="Report Post 193913"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193913" data-thread="193910"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A7248A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31343130353734373632">  <blockquote class = "unkfunc">&gt;What do you call the notion that language creates concepts, and that the way we see the world and reason about it is influenced by these concepts?<br></blockquote>Linguistic relativity (sapir-whorf hypothesis), strong or weak, depending on whether language defines reasoning (linguistic determinism) or not.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="pssthread193858"> <div class="thread_header"> <a id="193858"></a> <span class="filetitle">I got some freeze-dried noodles for the cookpot of the netmind</span>  <span class="inbetween"> by </span> <span class="postername">Nell Choblingfut</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 21 May 2014 18:12:48 EST ID:p2ZftlCN</span></span>  <span class="reflink"> <a href="/pss/res/193858.php#i193858">No.193858</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31343339383434383831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('193858')" title="Report Thread 193858"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/pss/res/193858.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193858" data-thread="193858"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2EC812; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('pssthread193858');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1400710368099.jpg"> 1400710368099.jpg </a> -(<em>489745 B, 1047x785</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgpss31343339383434383831" target="_blank" href="/pss/src/1400710368099.jpg"> <img src="/pss/thumb/1400710368099s.jpg" alt="489745" class="thumb" /> </a>   			 <blockquote class="opcomment pss31343339383434383831">  When is a &quot;Synchronism&quot; moreso; what criteria would have to be filled for coincidences in time to instead represent an engineered construct? How would one indeed tell the two apart?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/pss/res/193858.php#193864" onclick="highlight(193864);">&gt;&gt;</a></td> <td class="reply" id="reply193864"> <a id="193864"></a> <div class="replyheader"> 									 <span class="commentpostername">Doris Domblebeg</span>  - <span class="idhighlight">Wed, 21 May 2014 23:49:01 EST ID:ODId6GzL</span> <span class="reflink">  <a href="/pss/res/193858.php#i193864">No.193864</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss383437343531303338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193864', '193858')" title="Report Post 193864"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193864" data-thread="193858"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #04B53E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss383437343531303338">  <a href = "/pss/res/193858.php" onclick = "highlight(193858)">&gt;&gt;193858</a><br><br>syncronism /= an &quot;engineered construct&quot;, its just a coincidence that happened to deal with something exciting effects and you just keep pretending it&#39;s important and see what happens, usually butterflies in your tummy and visions of the future/past<br><br>&quot;an engineered construct&quot; is like a conspiracy, when a coincidence is not just a coincidence, but two connected events, is when there is some causal explanation, linking them to a single source, or one from the other, etc. causal explanations are always a bit vague. but, they are still falsfiable&#39;<br><br><blockquote class = "unkfunc">&gt;How would one indeed tell the two apart?<br></blockquote><br>i dont understand how it came to this question, you would make a terrible detective/scientist/journalist.... objectivity is the same across disciplines, what are the evidences of murder- a motive, something the suspect has to gain, scientific evidence that the suspect&#39;s fluids, fingerprints, hairs, DNA of all kinds are at the murder location or on the weapon, something to connect the suspect *in time and space* to the murder.<br><br>say you start noticing an inordinate amount of 8:47 pm, like some abberant statistical proportion of times you check the clock, its 8:47 pm. this is something that has come up in my friend&#39;s life<br><br>there are many theoretical causal explanations ranging from biological clock type shit, like this is your most active and inquisitive hour on this sleep schedule, or you could say its related to your work,etc schedule some are better than others, Ill leave it up to the scientists.<br><br>some people see that as a message that 8:47 pm is important, a time that will hold some important event in the future or some great plan should be embarked upon at 8:47pm, it could be lots of things.  <div class="abbrev"> Comment too long. Click <a href="/pss/res/193858.php#193864">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193858.php#193906" onclick="highlight(193906);">&gt;&gt;</a></td> <td class="reply" id="reply193906"> <a id="193906"></a> <div class="replyheader"> 									 <span class="commentpostername">Fucking Murdforth</span>  - <span class="idhighlight">Fri, 23 May 2014 10:01:44 EST ID:VyU7CZId</span> <span class="reflink">  <a href="/pss/res/193858.php#i193906">No.193906</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31343339383434363238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193906', '193858')" title="Report Post 193906"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193906" data-thread="193858"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4B3A6F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31343339383434363238">  <a href = "/pss/res/193858.php#193864" onclick = "highlight(193864)">&gt;&gt;193864</a><br>nowhere did I state that a synchronism equalled an engineered construct. motive and causal explanation sound agreeably logical, thank you. As to my second question, that is more of an &quot;can a dreamer tell that he is dreaming&quot; type conundrum.<br><br>imagine if you will an entity that lived in a world where all things (literally, everything) have a soundly reasoned logical explanation. how would that entity know if a coincidence were to occur, being that all things could be explained away?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193858.php#193908" onclick="highlight(193908);">&gt;&gt;</a></td> <td class="reply" id="reply193908"> <a id="193908"></a> <div class="replyheader"> 									 <span class="commentpostername">Cyril Godgeson</span>  - <span class="idhighlight">Fri, 23 May 2014 12:21:13 EST ID:ODId6GzL</span> <span class="reflink">  <a href="/pss/res/193858.php#i193908">No.193908</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss383437343531303338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193908', '193858')" title="Report Post 193908"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193908" data-thread="193858"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6EA5F0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss383437343531303338">  <a href = "/pss/res/193858.php#193906" onclick = "highlight(193906)">&gt;&gt;193906</a><br><br><blockquote class = "unkfunc">&gt;nowhere did I state that a synchronism equalled an engineered construct.<br></blockquote>no but you said<br><blockquote class = "unkfunc">&gt;what criteria would have to be filled for coincidences in time to instead represent an engineered construct?<br></blockquote>and my answer is still<br><blockquote class = "unkfunc">&gt;syncronism /= an &quot;engineered construct&quot;<br></blockquote><br>see now?<br><br><br><br><blockquote class = "unkfunc">&gt;imagine if you will an entity that lived in a world where all things (literally, everything) have a soundly reasoned logical explanation. how would that entity know if a coincidence were to occur, being that all things could be explained away?<br></blockquote><br>whether something is a syncronicity or not doesn&#39;t have to do with whether it can be explained away, you can know exactly why/how some interesting turn of events occurred and still find extra interest in some non-causal connection between events  <div class="abbrev"> Comment too long. Click <a href="/pss/res/193858.php#193908">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="pssthread193802"> <div class="thread_header"> <a id="193802"></a> <span class="filetitle">On the importance of ettiquete</span>  <span class="inbetween"> by </span> <span class="postername">Cobblestone</span> <span class="postertrip">!HaAFNzom.Q</span> <span class="inbetween"> - <span class="idhighlight">Tue, 20 May 2014 11:40:50 EST ID:1zQicKWc</span></span>  <span class="reflink"> <a href="/pss/res/193802.php#i193802">No.193802</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31343833323432373039')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('193802')" title="Report Thread 193802"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/pss/res/193802.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193802" data-thread="193802"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D6DDD4; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('pssthread193802');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1400600450649.jpg"> 1400600450649.jpg </a> -(<em>79193 B, 676x1000</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgpss31343833323432373039" target="_blank" href="/pss/src/1400600450649.jpg"> <img src="/pss/thumb/1400600450649s.jpg" alt="79193" class="thumb" /> </a>   			 <blockquote class="opcomment pss31343833323432373039">  Glossary: Language - to include all social conventions, rituals, speech, and other forms of communication.<br><br> The rules of a &quot;polite society&quot; develop to satisfy a single human desire that is common to all complex societies. That of having a conduit - a universal language - to reduce misunderstanding and conflict that may occur in inter-group conflicts. <br><br>  As social groups age, they progress, expand, and solidify. Certain niche terms evolve and entirely change their internal language. The older the group, the farther their language will be from its parent geographic/racial/political language. Yet, each &quot;new&quot; word, or turn of phrase, may still have an equivalent amongst other derivatives of the parent. Even those parent languages, split from previous conventions of communication, share similarities*. <br><br>  As we all should know by now, it is the failure of members of two or more cultures to express, or understand, the intentions and desires of members of the other groups that causes conflict. Either that, or, the desire for one group to force its conventions upon another. This is where etiquette - being polite - steps in. It identifies the commonalities, and translates those concepts which &quot;do not translate&quot;. It does so by providing a simplified version of all languages; which makes it easier to both learn, and understand.<br><br>  Civility does, however, suffer from the same flaws as the forms of communication it tries to unite. Given enough time, a society with a ruling element that pursues High Etiquette will eventually wish to dominate all other social groups. It, too, will grow old, rigid, and complex, and fail to be understood by all.<br><br>And so: The first principles of etiquette must be:<br><br>1) Guidelines may not be enforced, only encouraged.<br>2) All rules are suspect, and must be questioned at all times.<br>3) Any guidelines found to be unnecessary must be removed.  <div class="abbrev"> Comment too long. Click <a href="/pss/res/193802.php">here</a> to view the full text. </div>   </blockquote>   				 				  <span class="omittedposts">   1 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/pss/res/193802.php#193805" onclick="highlight(193805);">&gt;&gt;</a></td> <td class="reply" id="reply193805"> <a id="193805"></a> <div class="replyheader"> 									 <span class="commentpostername">Frederick Duckson</span>  - <span class="idhighlight">Tue, 20 May 2014 12:01:54 EST ID:5q+Zf1cH</span> <span class="reflink">  <a href="/pss/res/193802.php#i193805">No.193805</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss33353537363837343534')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193805', '193802')" title="Report Post 193805"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193805" data-thread="193802"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #27BB57; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss33353537363837343534">  I&#39;d say it stems from instincts. Monkeys have ground rules of conduct in their groups (nitpicking, etc), adherence to (perhaps even &quot;the mastery of&quot;) which defines a specimen&#39;s position in certain aspects. I remember a study where the proliferation of changes in rituals of monkeys was studied, and though my memory is fuzzy, it did mirror the way it happens in humans to some degree (apparently, chimpanzees have something akin to a concept of prestige, emulate each other in order to conform, etc.)<br>Perhaps this reaches even beyond primates and can be derived from mating rituals of many other animals.<br> <br>Of course, the dawn of abstract thinking changes things a lot - I&#39;m not meaning to reduce the social conventions to mere instincts. Those are just random musings on the issue of origins, invoked by OP&#39;s post.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193802.php#193807" onclick="highlight(193807);">&gt;&gt;</a></td> <td class="reply" id="reply193807"> <a id="193807"></a> <div class="replyheader"> 									 <span class="commentpostername">Priscilla Fuzzlefield</span>  - <span class="idhighlight">Tue, 20 May 2014 13:34:01 EST ID:RvCrDYg3</span> <span class="reflink">  <a href="/pss/res/193802.php#i193807">No.193807</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31343533393233343131')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193807', '193802')" title="Report Post 193807"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193807" data-thread="193802"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9D0323; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31343533393233343131">  <blockquote class = "unkfunc">&gt;The rules of a &quot;polite society&quot; develop to satisfy a single human desire that is common to all complex societies. That of having a conduit - a universal language<br></blockquote>This is a pretty big claim to make, and I can&#39;t see any supporting evidence for it.  This makes the rest of the post hard to follow.<br><br><blockquote class = "unkfunc">&gt;The first principles of etiquette must be:<br></blockquote>Since these rules contradict every system of etiquette, I think I can safely say this isn&#39;t true.  Maybe it would be nice if etiquette DID follow those rules though.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193802.php#193812" onclick="highlight(193812);">&gt;&gt;</a></td> <td class="reply" id="reply193812"> <a id="193812"></a> <div class="replyheader"> 									 <span class="commentpostername">Cobblestone</span> <span class="postertrip">!HaAFNzom.Q</span> - <span class="idhighlight">Tue, 20 May 2014 14:05:03 EST ID:Dp0LAmXj</span> <span class="reflink">  <a href="/pss/res/193802.php#i193812">No.193812</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31343833323431373738')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193812', '193802')" title="Report Post 193812"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193812" data-thread="193802"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F2F473; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31343833323431373738">  <a href = "/pss/res/193802.php#193805" onclick = "highlight(193805)">&gt;&gt;193805</a><br><blockquote class = "unkfunc">&gt; I&#39;m not meaning to reduce the social conventions to mere instincts.<br></blockquote><br>I tend to think of morals (the directing of individual instinct toward the benefit of the whole) as being its own distinct subject; but you&#39;re right; it&#39;s not.<br><br>I&#39;ll have to mull this over...<br><br><a href = "/pss/res/193802.php#193807" onclick = "highlight(193807)">&gt;&gt;193807</a><br><blockquote class = "unkfunc">&gt;Source?<br></blockquote><br>I&#39;ll see what I can find. I don&#39;t know <em>where</em> I&#39;ll find them, but I&#39;ll look.<br><br><blockquote class = "unkfunc">&gt;This makes the rest of the post hard to follow.<br></blockquote><br>It may help if you temporarily treat the factual claims as axioms.  <div class="abbrev"> Comment too long. Click <a href="/pss/res/193802.php#193812">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193802.php#193822" onclick="highlight(193822);">&gt;&gt;</a></td> <td class="reply" id="reply193822"> <a id="193822"></a> <div class="replyheader"> 									 <span class="commentpostername">Martin Mellyfotch</span>  - <span class="idhighlight">Tue, 20 May 2014 21:32:22 EST ID:RvCrDYg3</span> <span class="reflink">  <a href="/pss/res/193802.php#i193822">No.193822</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31343533393233343131')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193822', '193802')" title="Report Post 193822"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193822" data-thread="193802"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D0B6DB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31343533393233343131">  <a href = "/pss/res/193802.php#193812" onclick = "highlight(193812)">&gt;&gt;193812</a><br><blockquote class = "unkfunc">&gt;It may help if you temporarily treat the factual claims as axioms.<br></blockquote>It would, but why would I do that?  If the core of your argument is flawed, I have little to gain from pretending it&#39;s not.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193802.php#193887" onclick="highlight(193887);">&gt;&gt;</a></td> <td class="reply" id="reply193887"> <a id="193887"></a> <div class="replyheader"> 									 <span class="commentpostername">Emma Fembleman</span>  - <span class="idhighlight">Thu, 22 May 2014 19:24:32 EST ID:khFf40E1</span> <span class="reflink">  <a href="/pss/res/193802.php#i193887">No.193887</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31363538383238363238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193887', '193802')" title="Report Post 193887"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193887" data-thread="193802"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #668AEC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31363538383238363238">  <a href = "/pss/res/193802.php#193822" onclick = "highlight(193822)">&gt;&gt;193822</a><br>he&#39;s stating something that keeps etiquette working, so a check&#39;s and balances of etiquitte or an observed point in which etiquette keeps itself from defeating its own purpose.  I would say of course some systems of etiquette never do this.  And he even references that most form of etiquette will eventually become the opposiite of the thing that seeks to keep people getting along, by insisting this is the way we have to get along.<br><br>That would sound alot like the etiquette that you would find in a finishing school or taught anywhere, its become its own source of conflict that demands to be adhered to.  Another beast to be fed to keep things going smoothly rather than anything that makes things easier itself.<br><br>Oddly enough somebody may end up performing these social etiquettes out of the desire to keep away from conflict, therefore keeping that order going, because any impulse to get along might recognize having to &quot;loose&quot; to the imposition even if its causing conflicts as the way to end the conflict.<br><br>Sort of like how you have to &quot;just nod your head and agree when so and so is around in order to keep the peace&quot;   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="pssthread193472"> <div class="thread_header"> <a id="193472"></a> <span class="filetitle">Diogenes the Cynic</span>  <span class="inbetween"> by </span> <span class="postername">Augustus Dallychidging</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 13 May 2014 03:33:59 EST ID:0s1jixrA</span></span>  <span class="reflink"> <a href="/pss/res/193472.php#i193472">No.193472</a> </span>    			 <!--  - Awesome Thread? <a href="/pss/taimaba.pl?board=pss&amp;task=vote&amp;thread=193472&amp;vote=0">No!</a> | <a href="/pss/taimaba.pl?board=pss&amp;task=vote&amp;thread=193472&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss32393133383734393034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('193472')" title="Report Thread 193472"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/pss/res/193472.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193472" data-thread="193472"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EAAAB9; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('pssthread193472');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1399966439969.jpg"> 1399966439969.jpg </a> -(<em>119382 B, 800x588</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgpss32393133383734393034" target="_blank" href="/pss/src/1399966439969.jpg"> <img src="/pss/thumb/1399966439969s.jpg" alt="119382" class="thumb" /> </a>   			 <blockquote class="opcomment pss32393133383734393034">  &quot;Diogenes of Sinope was a controversial figure. His father minted coins for a living, and when Diogenes took to debasement of currency, he was banished from Sinope.[1] After being exiled, he moved to Athens to debunk cultural conventions. Diogenes modelled himself on the example of Heracles. He believed that virtue was better revealed in action than in theory. He used his simple lifestyle and behaviour to criticise the social values and institutions of what he saw as a corrupt society. He declared himself a cosmopolitan. There are many tales about him dogging Antisthenes&#39; footsteps and becoming his &quot;faithful hound&quot;.[3] Diogenes made a virtue of poverty. He begged for a living and slept in a large ceramic jar[4] in the marketplace. He became notorious for his philosophical stunts such as carrying a lamp in the daytime, claiming to be looking for an honest man. He embarrassed Plato, disputed his interpretation of Socrates and sabotaged his lectures. Diogenes was also responsible for publicly mocking Alexander the Great.&quot;<br><br>The ancient Greeks valued their philosophers enough for this man to be venerated and respected in a certain sense. Alexander the Great was a great admirer. The embodiment of the philosopher&#39;s own ideals is an essential part of what it means to be a philosopher. Today, this man would probably be seen as a common homeless man, schizophrenic and unwell and not a great philosopher by any means. The life of the philosopher has nothing to do with bourgeois academia--it has everything to do with action and the direct application and influence upon a system of values or ideas that directly inform the individual&#39;s life. Diogenes is a prime example of this. We would all do well to learn from it.   </blockquote>   				 				  <span class="omittedposts">  26 posts and 3 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/pss/res/193472.php#193840" onclick="highlight(193840);">&gt;&gt;</a></td> <td class="reply" id="reply193840"> <a id="193840"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Greenridge</span>  - <span class="idhighlight">Wed, 21 May 2014 15:16:27 EST ID:f23csTPp</span> <span class="reflink">  <a href="/pss/res/193472.php#i193840">No.193840</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss32393035363430303035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193840', '193472')" title="Report Post 193840"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193840" data-thread="193472"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #27A17E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss32393035363430303035">  <a href = "/pss/res/193472.php#193829" onclick = "highlight(193829)">&gt;&gt;193829</a><br><br>This is /pss/, not /mu/...   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193472.php#193849" onclick="highlight(193849);">&gt;&gt;</a></td> <td class="reply" id="reply193849"> <a id="193849"></a> <div class="replyheader"> 									 <span class="commentpostername">Archie Suvingridge</span>  - <span class="idhighlight">Wed, 21 May 2014 16:39:52 EST ID:7sJ/68Ak</span> <span class="reflink">  <a href="/pss/res/193472.php#i193849">No.193849</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31363631383133353530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193849', '193472')" title="Report Post 193849"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193849" data-thread="193472"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E23608; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31363631383133353530">  <a href = "/pss/res/193472.php#193829" onclick = "highlight(193829)">&gt;&gt;193829</a><br><br>What is &quot;refined taste?&quot;   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193472.php#193850" onclick="highlight(193850);">&gt;&gt;</a></td> <td class="reply" id="reply193850"> <a id="193850"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Greenridge</span>  - <span class="idhighlight">Wed, 21 May 2014 16:56:58 EST ID:f23csTPp</span> <span class="reflink">  <a href="/pss/res/193472.php#i193850">No.193850</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss32393035363430303035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193850', '193472')" title="Report Post 193850"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193850" data-thread="193472"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #17B06D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss32393035363430303035">  <a href = "/pss/res/193472.php#193849" onclick = "highlight(193849)">&gt;&gt;193849</a><br><br>You have to wear a fedora, be euphoric, and generally act like your better than everyone even though you&#39;re a fat loser.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193472.php#193860" onclick="highlight(193860);">&gt;&gt;</a></td> <td class="reply" id="reply193860"> <a id="193860"></a> <div class="replyheader"> 									 <span class="commentpostername">Lillian Hupperfag</span>  - <span class="idhighlight">Wed, 21 May 2014 19:48:00 EST ID:z+d9UZyr</span> <span class="reflink">  <a href="/pss/res/193472.php#i193860">No.193860</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31373035383336353136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193860', '193472')" title="Report Post 193860"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193860" data-thread="193472"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D62654; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31373035383336353136">  <a href = "/pss/res/193472.php#193849" onclick = "highlight(193849)">&gt;&gt;193849</a><br><br>Like how I can tell english essays were written with black magic formulas but a guy with a BA in english can&#39;t. I&#39;m like Sherlock Holmes.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193472.php#193862" onclick="highlight(193862);">&gt;&gt;</a></td> <td class="reply" id="reply193862"> <a id="193862"></a> <div class="replyheader"> 									 <span class="commentpostername">Hugh Drorryshaw</span>  - <span class="idhighlight">Wed, 21 May 2014 23:24:21 EST ID:PMR6/8EW</span> <span class="reflink">  <a href="/pss/res/193472.php#i193862">No.193862</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31303932333238343737')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193862', '193472')" title="Report Post 193862"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193862" data-thread="193472"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CBECED; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31303932333238343737">  Diogenes was the shit.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="pssthread193532"> <div class="thread_header"> <a id="193532"></a> <span class="filetitle">Depression</span>  <span class="inbetween"> by </span> <span class="postername">George Lightbury</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 14 May 2014 05:55:11 EST ID:yFO0yqIP</span></span>  <span class="reflink"> <a href="/pss/res/193532.php#i193532">No.193532</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31313934323939373233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('193532')" title="Report Thread 193532"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/pss/res/193532.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193532" data-thread="193532"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #88681C; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('pssthread193532');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1400061311484.jpg"> 1400061311484.jpg </a> -(<em>60863 B, 800x1000</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgpss31313934323939373233" target="_blank" href="/pss/src/1400061311484.jpg"> <img src="/pss/thumb/1400061311484s.jpg" alt="60863" class="thumb" /> </a>   			 <blockquote class="opcomment pss31313934323939373233">  What would happen if a person gets depressed if his passion in life is studying feeling by using himself as his test subject? If he had loss of interest from depression and really dulled feeling would he be stuck in depression?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/pss/res/193532.php#193533" onclick="highlight(193533);">&gt;&gt;</a></td> <td class="reply" id="reply193533"> <a id="193533"></a> <div class="replyheader"> 									 <span class="commentpostername">James Cheshbidging</span>  - <span class="idhighlight">Wed, 14 May 2014 06:12:57 EST ID:kyPjaFuA</span> <span class="reflink">  <a href="/pss/res/193532.php#i193533">No.193533</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss32393534353937343739')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193533', '193532')" title="Report Post 193533"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193533" data-thread="193532"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #86235F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss32393534353937343739">  It&#39;s all just states of mind. <br>And using yourself as a test subject is about as biased as you can get. Science, You&#39;re doing it wrong.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193532.php#193537" onclick="highlight(193537);">&gt;&gt;</a></td> <td class="reply" id="reply193537"> <a id="193537"></a> <div class="replyheader"> 									 <span class="commentpostername">Augustus Duckbanks</span>  - <span class="idhighlight">Wed, 14 May 2014 11:09:45 EST ID:EUlUALAS</span> <span class="reflink">  <a href="/pss/res/193532.php#i193537">No.193537</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31303637303535353039')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193537', '193532')" title="Report Post 193537"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193537" data-thread="193532"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #45F455; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1400080185495.jpg"> 1400080185495.jpg </a> -(<em>20709 B, 720x405</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/pss/src/1400080185495.jpg"> <img src="/pss/thumb/1400080185495s.jpg" alt="20709" class="thumb" /> </a>    <blockquote  class="pss31303637303535353039">  <a href = "/pss/res/193532.php#193533" onclick = "highlight(193533)">&gt;&gt;193533</a><br>I&#39;m not so sure &quot;science&quot; is what it&#39;s all about.. <br><br>To answer your question OP, I think you are referring to the search for altered experience &amp; the damage certain chemicals / lifestyles do to those &quot;explorers of the mind.&quot; Unfortunately terms like neurotoxicity are not altogether unheard of in such endeavors. Studying from experience / emotion / meaning in life relates to depression differently than you think, though. Mostly in that it&#39;s possible causation stems more from the fact substance abuse isn&#39;t always done right. By &quot;right,&quot; I mean doing fair research on what you consume, learning from addicts &amp; addiction that surround us, studying up on harm reduction while respecting [the drug]. Even if that&#39;s accepting when you&#39;ve gone too far. Some alcoholics I know can probably never touch anything but weed again in their lives. When dealing with chemicals it&#39;s almost completely trial &amp; error, as we live an entirely subjective experience. Addiction is real, permanent psychosis is real. All things to keep in mind when toying with reality. <br><br><blockquote class = "unkfunc">&gt;wrote a short essay on drugs &amp; how they relate to a search for meaning within subjective experience; in case anyone else is <span class="spoiler" onmouseover=""><span>on drugs</span></span><br></blockquote>Yeahp, not sure that anybody will read this. Every so often you find out more about yourself thinking about this stuff so whateva<br><br><br><br>----<br>I do believe existence within our strain of consciousness is parallel to finding &quot;meaning&quot; in every day life. Of course it&#39;s incredibly vague to say only that, so I&#39;ll elaborate by pointing out &quot;meaning&quot; is perhaps similar to happiness in that there are two forms (if it&#39;s possible to generalize such things, which, for the purpose of this wall of text I will). One form is akin to chemical reaction that is &quot;necessary&quot; &amp; physical. Regarding happiness this refers to sunlight, tylenol, or coffee. Things that alter your state of mind via dopamine, oxytocin, etc. Conversely, certain things also have meaning by necessity of the physical world, as is the case with symbols that make up systems of language or mathematics.<br><br>The other form of happiness is reportedly less tangible, in that it is quantified only subjectively as we traverse the physical world.<br>  <div class="abbrev"> Comment too long. Click <a href="/pss/res/193532.php#193537">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193532.php#193635" onclick="highlight(193635);">&gt;&gt;</a></td> <td class="reply" id="reply193635"> <a id="193635"></a> <div class="replyheader"> 									 <span class="commentpostername">Cyril Dindlewine</span>  - <span class="idhighlight">Sat, 17 May 2014 07:58:49 EST ID:dDnfuO1m</span> <span class="reflink">  <a href="/pss/res/193532.php#i193635">No.193635</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31313639343538353734')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193635', '193532')" title="Report Post 193635"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193635" data-thread="193532"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DE21B5; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31313639343538353734">  <a href = "/pss/res/193532.php#193533" onclick = "highlight(193533)">&gt;&gt;193533</a><br>Dip into phenomenology   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193532.php#193717" onclick="highlight(193717);">&gt;&gt;</a></td> <td class="reply" id="reply193717"> <a id="193717"></a> <div class="replyheader"> 									 <span class="commentpostername">Phoebe Fanshit</span>  - <span class="idhighlight">Mon, 19 May 2014 16:57:09 EST ID:Z9WsoXV3</span> <span class="reflink">  <a href="/pss/res/193532.php#i193717">No.193717</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31373832393039363331')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193717', '193532')" title="Report Post 193717"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193717" data-thread="193532"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #37B251; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31373832393039363331">  <a href = "/pss/res/193532.php" onclick = "highlight(193532)">&gt;&gt;193532</a><br>Fuck, this is me without even realising it.<br>Thanks for putting it into words.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193532.php#193845" onclick="highlight(193845);">&gt;&gt;</a></td> <td class="reply" id="reply193845"> <a id="193845"></a> <div class="replyheader"> 									 <span class="commentpostername">Martin Bebberson</span>  - <span class="idhighlight">Wed, 21 May 2014 15:54:12 EST ID:VAm6mdbo</span> <span class="reflink">  <a href="/pss/res/193532.php#i193845">No.193845</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31323736333131373237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193845', '193532')" title="Report Post 193845"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193845" data-thread="193532"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D0B444; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1400702052728.gif"> 1400702052728.gif </a> -(<em>4774 B, 344x404</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/pss/src/1400702052728.gif"> <img src="/pss/thumb/1400702052728s.jpg" alt="4774" class="thumb" /> </a>    <blockquote  class="pss31323736333131373237">  This sort of reminds me of the healthy and unhealthy loops for enneatype 5. Only tangentially related but possibly helpful for some.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="pssthread193493"> <div class="thread_header"> <a id="193493"></a> <span class="filetitle">Synchronisity</span>  <span class="inbetween"> by </span> <span class="postername">Phyllis Pundleford</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 13 May 2014 12:01:47 EST ID:rErzp3tD</span></span>  <span class="reflink"> <a href="/pss/res/193493.php#i193493">No.193493</a> </span>    			 <!--  - Awesome Thread? <a href="/pss/taimaba.pl?board=pss&amp;task=vote&amp;thread=193493&amp;vote=0">No!</a> | <a href="/pss/taimaba.pl?board=pss&amp;task=vote&amp;thread=193493&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31333432353836393135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('193493')" title="Report Thread 193493"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/pss/res/193493.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193493" data-thread="193493"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BDB0AA; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('pssthread193493');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1399996907599.jpg"> 1399996907599.jpg </a> -(<em>197690 B, 855x650</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgpss31333432353836393135" target="_blank" href="/pss/src/1399996907599.jpg"> <img src="/pss/thumb/1399996907599s.jpg" alt="197690" class="thumb" /> </a>   			 <blockquote class="opcomment pss31333432353836393135">  What the fuck is this? This happens way too often to me to just be coincidence and sure as shit isn&#39;t just me paying attention to things I wouldn&#39;t normally pay attention to.<br> <br>Today I listened to some of Chopin&#39;s classical music by accident through clicking on related youtube videos from learning about starting up music production, which included the track Nocturne In E Flat Major, Op.9 No.2. I remembered it from the movie bad santa which i saw over a year ago and havent heard since, but anyway I shit you not I had a feeling and said outloud &quot;I bet today i&#39;m going to hear something to do with chopin&quot;, even though I haven&#39;t heard anything to do with him over a year. If I had heard the track since the movie I would have noticed and downloaded it (like I just have) because its brilliant and this past year i&#39;ve been expanding my musical taste.<br>  <br>Just an hour ago I was playing bioshock infinite that I just got, and what do you know the same fucking song was being played on a projector in game. Nocturne In E Flat Major, Op.9 No.2. I haven&#39;t heard that song in over a year and suddenly it pops up twice within a few hours and i pretty much PREDICTED it would happen.<br> <br>Can anyone explain this phenomenon?   </blockquote>   				 				  <span class="omittedposts">  32 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/pss/res/193493.php#193678" onclick="highlight(193678);">&gt;&gt;</a></td> <td class="reply" id="reply193678"> <a id="193678"></a> <div class="replyheader"> 									 <span class="commentpostername">Augustus Smallforth</span>  - <span class="idhighlight">Sun, 18 May 2014 05:44:46 EST ID:khFf40E1</span> <span class="reflink">  <a href="/pss/res/193493.php#i193678">No.193678</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31363538383238363238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193678', '193493')" title="Report Post 193678"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193678" data-thread="193493"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FFE832; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31363538383238363238">  <a href = "/pss/res/193493.php#193663" onclick = "highlight(193663)">&gt;&gt;193663</a><br>this would imply anything the self does is making the universe about itself.<br><br>Besides trying to have yourself sync up with reality, wouldn&#39;t be somebody trying to make things about themselves, it would be trying to adjust to it.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193493.php#193683" onclick="highlight(193683);">&gt;&gt;</a></td> <td class="reply" id="reply193683"> <a id="193683"></a> <div class="replyheader"> 									 <span class="commentpostername">Kocoayello</span> <span class="postertrip">!jxaL03vL/Q</span> - <span class="idhighlight">Sun, 18 May 2014 07:42:48 EST ID:AK4Vkp84</span> <span class="reflink">  <a href="/pss/res/193493.php#i193683">No.193683</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss343138343531343935')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193683', '193493')" title="Report Post 193683"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193683" data-thread="193493"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #276804; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss343138343531343935">  <a href = "/pss/res/193493.php#193678" onclick = "highlight(193678)">&gt;&gt;193678</a><br><blockquote class = "unkfunc">&gt;Besides trying to have yourself sync up with reality, wouldn&#39;t be somebody trying to make things about themselves, it would be trying to adjust to it.<br></blockquote><br>Exactly. Basically always rolling with it, or going with the flow.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193493.php#193685" onclick="highlight(193685);">&gt;&gt;</a></td> <td class="reply" id="reply193685"> <a id="193685"></a> <div class="replyheader"> 									 <span class="commentpostername">Esther Chackledat</span>  - <span class="idhighlight">Sun, 18 May 2014 08:30:02 EST ID:RvCrDYg3</span> <span class="reflink">  <a href="/pss/res/193493.php#i193685">No.193685</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31343533393233343131')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193685', '193493')" title="Report Post 193685"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193685" data-thread="193493"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7DADA6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31343533393233343131">  <a href = "/pss/res/193493.php#193678" onclick = "highlight(193678)">&gt;&gt;193678</a><br><blockquote class = "unkfunc">&gt;this would imply anything the self does is making the universe about itself.<br></blockquote>You mean referring the universe to the self.<br><br>Being self-centered (even justifiably so) is very different from claiming the universe is you-centred.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193493.php#193687" onclick="highlight(193687);">&gt;&gt;</a></td> <td class="reply" id="reply193687"> <a id="193687"></a> <div class="replyheader"> 									 <span class="commentpostername">Clara Bundledale</span>  - <span class="idhighlight">Sun, 18 May 2014 16:21:37 EST ID:5QaJ98Xf</span> <span class="reflink">  <a href="/pss/res/193493.php#i193687">No.193687</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31333334363832393335')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193687', '193493')" title="Report Post 193687"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193687" data-thread="193493"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9F4F51; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31333334363832393335">  Few people ITT realize that the world and our perception of it are related but autonomous.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193493.php#193831" onclick="highlight(193831);">&gt;&gt;</a></td> <td class="reply" id="reply193831"> <a id="193831"></a> <div class="replyheader"> 									 <span class="commentpostername">Jarvis Ginkinbanks</span>  - <span class="idhighlight">Wed, 21 May 2014 09:42:46 EST ID:c7VbQtyy</span> <span class="reflink">  <a href="/pss/res/193493.php#i193831">No.193831</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss33333336383839333733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193831', '193493')" title="Report Post 193831"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193831" data-thread="193493"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #359490; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss33333336383839333733">  <a href = "/pss/res/193493.php#193685" onclick = "highlight(193685)">&gt;&gt;193685</a><br>I would agree that you can feel that way but thinking something is referenced around the self, which would mean its oriented around you, which  means it adjusts to you(which was the earlier claim) which means it revolves around you(which was an even earlier claim) which in turn means its about you. <br><br>By the way an explanation of the self does not explain why synchronicity would be emphatically self referential unless your claiming something inherent in the self. There is nothing about the idea of being in sync that suggests it revolves around you.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="pssthread193633"> <div class="thread_header"> <a id="193633"></a> <span class="filetitle">What the fuck is up with English essays?</span>  <span class="inbetween"> by </span> <span class="postername">Frederick Blaggleteck</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 17 May 2014 07:49:25 EST ID:C+Rmgr9o</span></span>  <span class="reflink"> <a href="/pss/res/193633.php#i193633">No.193633</a> </span>    			 <!--  - Awesome Thread? <a href="/pss/taimaba.pl?board=pss&amp;task=vote&amp;thread=193633&amp;vote=0">No!</a> | <a href="/pss/taimaba.pl?board=pss&amp;task=vote&amp;thread=193633&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31373035383538333832')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('193633')" title="Report Thread 193633"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/pss/res/193633.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193633" data-thread="193633"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DF0AC3; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('pssthread193633');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1400327365305.jpg"> 1400327365305.jpg </a> -(<em>1916130 B, 1600x1200</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgpss31373035383538333832" target="_blank" href="/pss/src/1400327365305.jpg"> <img src="/pss/thumb/1400327365305s.jpg" alt="1916130" class="thumb" /> </a>   			 <blockquote class="opcomment pss31373035383538333832">  Writing English essays, pointless ... or is it?<br><br>Does anyone think it&#39;s this weird brainwashing exercise?<br><br>What is the point of writing English essays? What actually goes on inside their head?<br><br>The ones I&#39;m referring to, like &quot;Othello shows that weakness is a character trait. Do you agree&quot;   </blockquote>   				 				  <span class="omittedposts">  60 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/pss/res/193633.php#193793" onclick="highlight(193793);">&gt;&gt;</a></td> <td class="reply" id="reply193793"> <a id="193793"></a> <div class="replyheader"> 									 <span class="commentpostername">Frederick Duckson</span>  - <span class="idhighlight">Tue, 20 May 2014 09:04:46 EST ID:5q+Zf1cH</span> <span class="reflink">  <a href="/pss/res/193633.php#i193793">No.193793</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss33353537363837343534')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193793', '193633')" title="Report Post 193793"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193793" data-thread="193633"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #30E0D9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss33353537363837343534">  &gt;&gt;193790<br>&gt;&gt;193791<br>*sigh*<br>Again, which parts do you not understand? I can&#39;t move on beyond explaining the very basics, because by writing one of the more logical forms of discourse you&#39;re explicitly admitting you don&#39;t understand them. <br>Your only argument to support your point (that it is black magic) is because you do not understand it, then it is black magic. It is an argument from both incredulity and ignorance. Thus, it does not follow.<br>Let&#39;s try a different angle: try to assert a null hypothesis of the rules *not* being black magic and then falsify it. It seems like any other way of explaining this to you makes you go full O&#39;Reilly (&quot;No you can&#39;t explain that la la la I can&#39;t hear you&quot;).   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193633.php#193794" onclick="highlight(193794);">&gt;&gt;</a></td> <td class="reply" id="reply193794"> <a id="193794"></a> <div class="replyheader"> 									 <span class="commentpostername">Frederick Duckson</span>  - <span class="idhighlight">Tue, 20 May 2014 09:08:58 EST ID:5q+Zf1cH</span> <span class="reflink">  <a href="/pss/res/193633.php#i193794">No.193794</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss33353537363837343534')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193794', '193633')" title="Report Post 193794"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193794" data-thread="193633"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2FF66E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss33353537363837343534">  &gt;&gt;193792<br>Fuck, my bad, I meant ALGORITHM. A slip of the tongue, except in a written form.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193633.php#193795" onclick="highlight(193795);">&gt;&gt;</a></td> <td class="reply" id="reply193795"> <a id="193795"></a> <div class="replyheader"> 									 <span class="commentpostername">Samuel Brummlenane</span>  - <span class="idhighlight">Tue, 20 May 2014 10:15:22 EST ID:khFf40E1</span> <span class="reflink">  <a href="/pss/res/193633.php#i193795">No.193795</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31363538383238363238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193795', '193633')" title="Report Post 193795"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193795" data-thread="193633"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #056663; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31363538383238363238">  &gt;&gt;193791<br>i have no fucking doubt you can do what your saying.  tarot, when you read it alone is writing ties knots in your head, and is as you say not explicit in its communication, its patterns, and its tricks.  Although why the fuck were you mad at hegel if you are using black magic shit yourself.  Didn&#39;t you not trust him because of that. Anyway the way to hit home with writing most certainly isn&#39;t completely logical.  William Burroughs and others did things of your nature in there writing.  And the master Philip K Dick based his writing of a fucking novel on the I ching.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193633.php#193826" onclick="highlight(193826);">&gt;&gt;</a></td> <td class="reply" id="reply193826"> <a id="193826"></a> <div class="replyheader"> 									 <span class="commentpostername">Hannah Crurringdag</span>  - <span class="idhighlight">Tue, 20 May 2014 23:50:08 EST ID:a/FpxrNF</span> <span class="reflink">  <a href="/pss/res/193633.php#i193826">No.193826</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss383433323735353138')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193826', '193633')" title="Report Post 193826"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193826" data-thread="193633"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A739EC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss383433323735353138">  Ahahaha somebody deleted his posts. Nice.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193633.php#193827" onclick="highlight(193827);">&gt;&gt;</a></td> <td class="reply" id="reply193827"> <a id="193827"></a> <div class="replyheader"> 									 <span class="commentpostername">Hannah Crurringdag</span>  - <span class="idhighlight">Tue, 20 May 2014 23:50:08 EST ID:a/FpxrNF</span> <span class="reflink">  <a href="/pss/res/193633.php#i193827">No.193827</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss383433323735353138')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193827', '193633')" title="Report Post 193827"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193827" data-thread="193633"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #850534; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss383433323735353138">  Ahahaha somebody deleted his posts. Nice.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="pssthread193470"> <div class="thread_header"> <a id="193470"></a> <span class="filetitle">The Joker&#39;s Philosophy</span>  <span class="inbetween"> by </span> <span class="postername">Matilda Grimlock</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 13 May 2014 03:20:09 EST ID:M9BgWVbL</span></span>  <span class="reflink"> <a href="/pss/res/193470.php#i193470">No.193470</a> </span>    			 <!--  - Awesome Thread? <a href="/pss/taimaba.pl?board=pss&amp;task=vote&amp;thread=193470&amp;vote=0">No!</a> | <a href="/pss/taimaba.pl?board=pss&amp;task=vote&amp;thread=193470&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31373035383437343636')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('193470')" title="Report Thread 193470"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/pss/res/193470.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193470" data-thread="193470"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6EB92E; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('pssthread193470');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1399965609842.jpg"> 1399965609842.jpg </a> -(<em>148292 B, 500x400</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgpss31373035383437343636" target="_blank" href="/pss/src/1399965609842.jpg"> <img src="/pss/thumb/1399965609842s.jpg" alt="148292" class="thumb" /> </a>   			 <blockquote class="opcomment pss31373035383437343636">  Batman 3 blowed but the Dark Knight was inspired.<br><br>What do you think about the Joker&#39;s philosophy? Paraphrase some of his philosophical viewpoints. How do they relate to other Philosophers&#39; thoughts?   </blockquote>   				 				  <span class="omittedposts">  28 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/pss/res/193470.php#193625" onclick="highlight(193625);">&gt;&gt;</a></td> <td class="reply" id="reply193625"> <a id="193625"></a> <div class="replyheader"> 									 <span class="commentpostername">Priscilla Dusslefield</span>  - <span class="idhighlight">Sat, 17 May 2014 00:59:00 EST ID:ODId6GzL</span> <span class="reflink">  <a href="/pss/res/193470.php#i193625">No.193625</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss383437343531303338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193625', '193470')" title="Report Post 193625"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193625" data-thread="193470"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9FC946; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss383437343531303338">  <a href = "/pss/res/193470.php#193621" onclick = "highlight(193621)">&gt;&gt;193621</a><br><br>no i gave my piece, im happy with it, it still there to be read   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193470.php#193630" onclick="highlight(193630);">&gt;&gt;</a></td> <td class="reply" id="reply193630"> <a id="193630"></a> <div class="replyheader"> 									 <span class="commentpostername">Hugh Babbersteg</span>  - <span class="idhighlight">Sat, 17 May 2014 02:16:36 EST ID:u0vDz3w/</span> <span class="reflink">  <a href="/pss/res/193470.php#i193630">No.193630</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31373035383134363834')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193630', '193470')" title="Report Post 193630"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193630" data-thread="193470"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #65BFA9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31373035383134363834">  <a href = "/pss/res/193470.php#193593" onclick = "highlight(193593)">&gt;&gt;193593</a><br><br>Yep, they look paranoid. But still, it educated people as to the existence of shills and makes them more wary.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193470.php#193666" onclick="highlight(193666);">&gt;&gt;</a></td> <td class="reply" id="reply193666"> <a id="193666"></a> <div class="replyheader"> 									 <span class="commentpostername">Beatrice Bunhood</span>  - <span class="idhighlight">Sat, 17 May 2014 22:49:40 EST ID:vzElpGOh</span> <span class="reflink">  <a href="/pss/res/193470.php#i193666">No.193666</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss33303932393534313737')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193666', '193470')" title="Report Post 193666"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193666" data-thread="193470"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B1D170; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss33303932393534313737">  <a href = "/pss/res/193470.php#193518" onclick = "highlight(193518)">&gt;&gt;193518</a><br>Anyone who&#39;s read the killing joke or that knows of any true batman canon (Which i&#39;ve only seen the movies and read 2 comics.) The joker most diffidently has a philosophy.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193470.php#193744" onclick="highlight(193744);">&gt;&gt;</a></td> <td class="reply" id="reply193744"> <a id="193744"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Sottingstone</span>  - <span class="idhighlight">Mon, 19 May 2014 21:46:19 EST ID:f23csTPp</span> <span class="reflink">  <a href="/pss/res/193470.php#i193744">No.193744</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss32393035363430303035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193744', '193470')" title="Report Post 193744"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193744" data-thread="193470"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E8B89B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss32393035363430303035">  <a href = "/pss/res/193470.php#193512" onclick = "highlight(193512)">&gt;&gt;193512</a><br><br>The real question is: why do you care so much more about the fact that he&#39;s a fictional character, rather than what was inferred by said character in <a href = "/pss/res/193470.php#193479" onclick = "highlight(193479)">&gt;&gt;193479</a> ?<br><br>The latter is far more interesting to discuss, what you&#39;re currently doing kills discussion.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193470.php#193810" onclick="highlight(193810);">&gt;&gt;</a></td> <td class="reply" id="reply193810"> <a id="193810"></a> <div class="replyheader"> 									 <span class="commentpostername">Martha Buzzstock</span>  - <span class="idhighlight">Tue, 20 May 2014 14:03:16 EST ID:VOiz3bC5</span> <span class="reflink">  <a href="/pss/res/193470.php#i193810">No.193810</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss353838323631363932')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193810', '193470')" title="Report Post 193810"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193810" data-thread="193470"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1646C1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss353838323631363932">  He&#39;s just a foil for batman&#39;s commitment to justice / order / rightness / peace / etc. <br><br>He kills and disrupts everything he can aimlessly and indiscriminately. Getting batman to kill him is the only way to win. <br><br>There is a purity to both Batman and the Joker that I find inspiring. They know what they stand for and why they stand for it. They do what they do and that&#39;s all they ever will do. <br><br>I like to imagine both of them in a gotham senior citizens home. They&#39;re like 80+,  wheelchair bound, and stuck watching a show that neither of them like in a beige living room. Then they just have mundane conversation / silly banter.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="pssthread193601"> <div class="thread_header"> <a id="193601"></a> <span class="filetitle">The Unconscious</span>  <span class="inbetween"> by </span> <span class="postername">Cornelius Buttingstedging</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 16 May 2014 15:08:33 EST ID:OzCj/Vpw</span></span>  <span class="reflink"> <a href="/pss/res/193601.php#i193601">No.193601</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31313133303138313633')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('193601')" title="Report Thread 193601"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/pss/res/193601.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193601" data-thread="193601"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #412461; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('pssthread193601');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1400267313413.jpg"> 1400267313413.jpg </a> -(<em>62531 B, 1200x800</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgpss31313133303138313633" target="_blank" href="/pss/src/1400267313413.jpg"> <img src="/pss/thumb/1400267313413s.jpg" alt="62531" class="thumb" /> </a>   			 <blockquote class="opcomment pss31313133303138313633">  The other day I was reading some sections of Sartre&#39;s &quot;Being and Nothingness&quot; out of pure boredom and I found myself strongly agreeing with his belief of a non-divided self. After reading some supplementary material online regarding Sartre&#39;s position on reflective and unreflective consciousness, I&#39;m finding the whole idea of an unconscious rather unconvincing. For example, at some point in the day I reach for my cigarettes and light one up without actually taking a moment to reflect on why I want one. Just because I didn&#39;t articulate that desire in terms of language doesn&#39;t mean it came from my un/pre-conscious. I simply recognized the signs of nicotine withdrawal and addressed it without reflecting on the matter.<br><br>I&#39;m fairly ignorant regarding Freud and psychology in general so feel free to rip into me but I want to hear some other opinions regarding this.<br><br><span class="spoiler" onmouseover=""><span>inb4 Kocoayello&#39;s &quot;Jung maan&quot;</span></span>   </blockquote>   				 				  <span class="omittedposts">   3 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/pss/res/193601.php#193608" onclick="highlight(193608);">&gt;&gt;</a></td> <td class="reply" id="reply193608"> <a id="193608"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Buttingstedging</span>  - <span class="idhighlight">Fri, 16 May 2014 15:45:33 EST ID:OzCj/Vpw</span> <span class="reflink">  <a href="/pss/res/193601.php#i193608">No.193608</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31313133303138313633')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193608', '193601')" title="Report Post 193608"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193608" data-thread="193601"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #866BE3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31313133303138313633">  <a href = "/pss/res/193601.php#193605" onclick = "highlight(193605)">&gt;&gt;193605</a><br><br>Just because I fail to articulate my choice to have a cigarette in terms of language does not mean the thought was not conscious to me at the time.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193601.php#193614" onclick="highlight(193614);">&gt;&gt;</a></td> <td class="reply" id="reply193614"> <a id="193614"></a> <div class="replyheader"> 									 <span class="commentpostername">Priscilla Dusslefield</span>  - <span class="idhighlight">Fri, 16 May 2014 22:15:24 EST ID:ODId6GzL</span> <span class="reflink">  <a href="/pss/res/193601.php#i193614">No.193614</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss383437343531303338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193614', '193601')" title="Report Post 193614"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193614" data-thread="193601"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7FE51A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss383437343531303338">  <a href = "/pss/res/193601.php" onclick = "highlight(193601)">&gt;&gt;193601</a><br><br>in my opinion sartre and other phenomenologists like heidegger and husserl are the bane of philosophy, and the progenitors of the most profound and disastrous theoretical mistake possible, I prettty much hate everything they&#39;ve ever said and believe they have everything wrong, their whole metaphysics is totally broken. everybody they claim is wrong is actually right, empiricists, representationalists, etc<br><br>the &quot;undivided self&quot; is the opposite of the truth, we could not be any more divided than we are, we are the sum of infinitely divisible parts<br><br><blockquote class = "unkfunc">&gt;For example, at some point in the day I reach for my cigarettes and light one up without actually taking a moment to reflect on why I want one. Just because I didn&#39;t articulate that desire in terms of language doesn&#39;t mean it came from my un/pre-conscious. I simply recognized the signs of nicotine withdrawal and addressed it without reflecting on the matter.<br></blockquote><br>I dont see how you can pretend this isn&#39;t a direct contradiction. How the fuck are you supposed to &quot;recognize&quot; and &quot;address&quot; something without reflecting on it? The only way would be recognition and planned action could occur &quot;subconsciously&quot;.<br><br>I mean what do you imagine the subconscious to be OP? It is simply any and all functions of the decision-making cortexes that were not part of a lucid chain of reasoning. What do you take the beat of your heart to be but subconsciously commanded motion? You are a fool if you believe the brain is not capable of enacting things without the approval or blessing of &quot;the center of attention&quot;, either that or you are a fool for not seeing the clear distinction between that which crosses &quot;the center of attention&quot; and that which is not noticed.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193601.php#193619" onclick="highlight(193619);">&gt;&gt;</a></td> <td class="reply" id="reply193619"> <a id="193619"></a> <div class="replyheader"> 									 <span class="commentpostername">Fucking Murdstock</span>  - <span class="idhighlight">Fri, 16 May 2014 23:41:45 EST ID:iKiIyFsH</span> <span class="reflink">  <a href="/pss/res/193601.php#i193619">No.193619</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31323638373235303437')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193619', '193601')" title="Report Post 193619"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193619" data-thread="193601"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E184D5; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/pss/src/1400298105899.jpg"> 1400298105899.jpg </a> -(<em>57847 B, 443x468</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/pss/src/1400298105899.jpg"> <img src="/pss/thumb/1400298105899s.jpg" alt="57847" class="thumb" /> </a>    <blockquote  class="pss31323638373235303437">  <a href = "/pss/res/193601.php#193614" onclick = "highlight(193614)">&gt;&gt;193614</a><br><blockquote class = "unkfunc">&gt;What do you take the beat of your heart to be but subconsciously commanded motion?<br></blockquote><br>I get what you&#39;re saying with this but its still kind of an unfair statement. <br>The metabolic functioning of the millionth cell in my left hand&#39;s index finger isn&#39;t controlled by any subconscious reasoning. <br>OP&#39;s talking about decisions and thinking. <br><br>Basically the &quot;subconscious mind&quot; is a reservoir of every single input data your brain has ever collected throughout it&#39;s entire life time. <br><br>Things you were aware of and things you weren&#39;t aware of, this stat isn&#39;t true, but I can almost guarantee you 99.99% of the stuff that creates your subconscious mind were inputted unconsciously. Consciously I&#39;m typing on my laptop right now but subconsciously I&#39;m being reminded of a ton of memories that my laptop elicits. <br><br>Every single thing that you see, hear, smell, taste, touch, emotionally feel, think; experience gets store into your brain and added to your subconscious. <br><br>After enough experiences have been acquired they become aggregated and create a personality accordingly. <br>Ex, somebody who has gone through a lot of traumatic experiences growing up will most likely have a subconscious mind filled with trauma, creating a personality that has trust issues.   <div class="abbrev"> Comment too long. Click <a href="/pss/res/193601.php#193619">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193601.php#193626" onclick="highlight(193626);">&gt;&gt;</a></td> <td class="reply" id="reply193626"> <a id="193626"></a> <div class="replyheader"> 									 <span class="commentpostername">Priscilla Dusslefield</span>  - <span class="idhighlight">Sat, 17 May 2014 01:29:06 EST ID:ODId6GzL</span> <span class="reflink">  <a href="/pss/res/193601.php#i193626">No.193626</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss383437343531303338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193626', '193601')" title="Report Post 193626"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193626" data-thread="193601"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #254D73; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss383437343531303338">  <a href = "/pss/res/193601.php#193619" onclick = "highlight(193619)">&gt;&gt;193619</a><br><br><blockquote class = "unkfunc">&gt;I get what you&#39;re saying with this but its still kind of an unfair statement. <br></blockquote><br>your statement that my statement was unfair, is fair, it is not fair to exactly compare heartbeats with subconscious decision-making processes because beings presumably without consciousness or with severely limited consciousness still have nervous systems that perform &quot;automatic&quot; functions (and they lack decision-making).<br><br>still I do think it is undeniable that not only the fingers and heart, but the brain, and the decision-making as well, are home to immense structures of action that go on without our &quot;consent&quot; in the forefront of our attention. It is interesting that Sartre once wrote that neurochemistry has no hope of explaining the sort of phenomena he was interested in, but neurochemistry actually went on to discredit his theories, in my opinion, there&#39;s studies that show distinctive, irreversible electrical activity associated with specific decision-making can be observed in a person&#39;s brain up to a second or two, I believe it was, before the person reports having decided<br><br>it doesnt have to be the end of free will but I think it cast enormous doubt upon the phenomenological scheme.<br><br>and for the rest<br>I agree with basically every thing you said in this post<br><br><blockquote class = "unkfunc">&gt;Basically the &quot;subconscious mind&quot; is a reservoir of every single input data your brain has ever collected throughout it&#39;s entire life time. <br></blockquote>  <div class="abbrev"> Comment too long. Click <a href="/pss/res/193601.php#193626">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/pss/res/193601.php#193688" onclick="highlight(193688);">&gt;&gt;</a></td> <td class="reply" id="reply193688"> <a id="193688"></a> <div class="replyheader"> 									 <span class="commentpostername">Lumpen</span> <span class="postertrip">!rGOAfuB3jA</span> - <span class="idhighlight">Sun, 18 May 2014 18:44:48 EST ID:809AcqAg</span> <span class="reflink">  <a href="/pss/res/193601.php#i193688">No.193688</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('pss31313133303137383438')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('193688', '193601')" title="Report Post 193688"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="193688" data-thread="193601"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2E430A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="pss31313133303137383438">  <a href = "/pss/res/193601.php#193614" onclick = "highlight(193614)">&gt;&gt;193614</a><br><br>Apologies for the late reply.<br><br><blockquote class = "unkfunc">&gt;in my opinion sartre and other phenomenologists like heidegger and husserl are the bane of philosophy, and the progenitors of the most profound and disastrous theoretical mistake possible, I prettty much hate everything they&#39;ve ever said and believe they have everything wrong, their whole metaphysics is totally broken. everybody they claim is wrong is actually right, empiricists, representationalists, etc<br></blockquote>Yeah, I&#39;m not versed enough to even attempt arguing against that.<br><br><blockquote class = "unkfunc">&gt;I dont see how you can pretend this isn&#39;t a direct contradiction. How the fuck are you supposed to &quot;recognize&quot; and &quot;address&quot; something without reflecting on it? The only way would be recognition and planned action could occur &quot;subconsciously&quot;.<br></blockquote>Yeah I realize after looking at my example it was worded terribly and overall just piss poor, I&#39;m sorry (I probably should&#39;ve spent more than two minutes on my OP). What I meant about unreflective was being &quot;absorbed in the world of objects&quot;, ie fully engaged in the external world, not contemplating the &quot;I&quot;. But to go back to my example about the cigarette, it wasn&#39;t reflective in that I didn&#39;t have an internal dialogue saying &quot;I&#39;m going to have a cigarette now&quot; but at the same time it isn&#39;t unconscious in that I don&#39;t look down a minute later and say &quot;how the fuck did that cigarette get in my hand?&quot;. I was lucid the whole time.<br><br><blockquote class = "unkfunc">&gt;I mean what do you imagine the subconscious to be OP?<br></blockquote>A part of the mind that is largely inaccessible to the conscious mind but nonetheless affects decision making to a degree. I guess my view of the mind is that in addition to the main dialogue of consciousness, everything else is going on in the peripherals of the conscious mind but those thoughts aren&#39;t always recognized as being conscious because we naturally give priority to our dialogues.<br><br><blockquote class = "unkfunc">&gt;What do you take the beat of your heart to be but subconsciously commanded motion?<br></blockquote>Well that&#39;s an automatic process, I couldn&#39;t start or stop my heart if I tried.  <div class="abbrev"> Comment too long. Click <a href="/pss/res/193601.php#193688">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://insomniacgamers.net"><img src="http://cdn.420chan.org/sp/i.png"></a>
		</div>
				<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/pss/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="pss" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">  <a href="/pss/3.php">&lt;&lt;Last</a>   <span style="font-size: +1;">Pages</span>   <a href="/pss/5.php">Next&gt;&gt;</a>  <br />   <a href="/pss/index.php">0</a>     <a href="/pss/1.php">1</a>     <a href="/pss/2.php">2</a>     <a href="/pss/3.php">3</a>      4    <a href="/pss/5.php">5</a>     <a href="/pss/6.php">6</a>     <a href="/pss/7.php">7</a>     <a href="/pss/8.php">8</a>     <a href="/pss/9.php">9</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
							<li><img width='32' height='32' class='boardicon' alt='wooo' src='/static/images/board_icons/wooo_icon_32.png' />
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3855775.php' class='boardlink'>Thread 3855775</a></span>
		<p>>marketers still trying to convince people to buy the Network
>there are people RIGHT NOW saying it... <a href='/wooo/res/3855775.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='h' src='/static/images/board_icons/h_icon_32.png' />
		<span class='byline'>Hentai - <a href='/h/res/209531.php' class='boardlink'>Thread 209531</a></span>
		<p>>>216695
Incredible upload Derixen, a lot of thanks, truly a work of art.

Im sorry why talk abou... <a href='/h/res/209531.php' class='boardlink'>&#8629;</a></p></li>
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

