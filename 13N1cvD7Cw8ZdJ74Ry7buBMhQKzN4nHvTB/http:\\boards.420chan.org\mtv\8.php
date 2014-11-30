http://boards.420chan.org/mtv/8.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Wed, 23 Jul 2014 16:32:37 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> Movies &amp; Television - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/mtv_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/mtv_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/mtv/8.php';
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
	 <div id="header"> <div id="board_logo"> <a href="/mtv/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/mtv_icon_64.png" alt="/mtv/ Icon" /> <p class="board_title_block"> <span class="board_name">/mtv/</span> <span class="board_title">Movies &amp; Television</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
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
	 <!--  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/mtv/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="mtv" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />     <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>  <tr> <td class="postblock">Name</td> <td> <input title="Name" type="text" name="field1" style="width:224px;" /> <div class="tooltip">  You can leave this blank to post anonymously, or you can create a Tripcode by using the float <b>Name#Password</b> </div>					 </td> </tr>    <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div>  <script type="text/javascript">set_inputs("postform")</script> <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 3000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> <li>This is a work-safe board. Posting adult images is forbidden.</li>			  </ul> </div> <hr style="margin-bottom:2px;" /> 		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 <hr style="margin-top:2px;" />  <div id="nowplaying"><p>Now Playing on /mtv/tube - <a id="nptitle" href="http://taima.tv/r/mtv"></a></p></div> <script type="text/javascript" charset="utf-8"> $(function(){ function update() { $.ajax({ dataType : 'json', type: "GET", url: "http://io.taima.tv/api/channels/mtv", success: function(server_response){ $( '#nptitle' ).text( server_response.mediatitle ); }                                       });                        return false     }; setInterval(update, 30000); update(); });  </script>  <form id="delform" action="/mtv/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="mtv" />    <div id="mtvthread287816"> <div class="thread_header"> <a id="287816"></a> <span class="filetitle">Gifs and gif accessories</span>  <span class="inbetween"> by </span> <span class="postername">Joyce Summers</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 27 Jun 2014 16:22:48 EST ID:dAQlt6HX</span></span>  <span class="reflink"> <a href="/mtv/res/287816.php#i287816">No.287816</a> </span>    			 <!--  - Awesome Thread? <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=287816&amp;vote=0">No!</a> | <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=287816&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323736343639373433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('287816')" title="Report Thread 287816"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/287816.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="287816" data-thread="287816"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0262B7; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread287816');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1403900568197.gif"> 1403900568197.gif </a> -(<em>428399 B, 200x145</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv31323736343639373433" target="_blank" href="/mtv/src/1403900568197.gif"> <img src="/mtv/src/1403900568197.gif" alt="428399" class="thumb" /> </a>   			 <blockquote class="opcomment mtv31323736343639373433">  post your favorite /mtv/ related gif   </blockquote>   				 				  <span class="omittedposts">  60 posts and 43 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/287816.php#288930" onclick="highlight(288930);">&gt;&gt;</a></td> <td class="reply" id="reply288930"> <a id="288930"></a> <div class="replyheader"> 									 <span class="commentpostername">Joseph Dredd</span>  - <span class="idhighlight">Tue, 08 Jul 2014 00:34:38 EST ID:BM3lfNtk</span> <span class="reflink">  <a href="/mtv/res/287816.php#i288930">No.288930</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32303932353132323134')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288930', '287816')" title="Report Post 288930"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288930" data-thread="287816"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EF22E1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32303932353132323134">  <a href = "/mtv/res/287816.php#288923" onclick = "highlight(288923)">&gt;&gt;288923</a><br>all of my saveds   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/287816.php#289073" onclick="highlight(289073);">&gt;&gt;</a></td> <td class="reply" id="reply289073"> <a id="289073"></a> <div class="replyheader"> 									 <span class="commentpostername">Gates McFadden</span>  - <span class="idhighlight">Wed, 09 Jul 2014 23:10:36 EST ID:FPBt0f7b</span> <span class="reflink">  <a href="/mtv/res/287816.php#i289073">No.289073</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31383133313830333039')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289073', '287816')" title="Report Post 289073"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289073" data-thread="287816"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #225D27; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404961836387.gif"> 1404961836387.gif </a> -(<em>588793 B, 500x362</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1404961836387.gif"> <img src="/mtv/thumb/1404961836387s.jpg" alt="588793" class="thumb" /> </a>    <blockquote  class="mtv31383133313830333039">  <a href = "/mtv/res/287816.php" onclick = "highlight(287816)">&gt;&gt;287816</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/287816.php#289082" onclick="highlight(289082);">&gt;&gt;</a></td> <td class="reply" id="reply289082"> <a id="289082"></a> <div class="replyheader"> 									 <span class="commentpostername">Kenny McCormick</span>  - <span class="idhighlight">Thu, 10 Jul 2014 01:04:06 EST ID:KXBiBlny</span> <span class="reflink">  <a href="/mtv/res/287816.php#i289082">No.289082</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323232363431333839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289082', '287816')" title="Report Post 289082"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289082" data-thread="287816"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9F0D84; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404968646434.gif"> 1404968646434.gif </a> -(<em>379634 B, 420x290</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1404968646434.gif"> <img src="/mtv/thumb/1404968646434s.jpg" alt="379634" class="thumb" /> </a>    <blockquote  class="mtv31323232363431333839">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/287816.php#289132" onclick="highlight(289132);">&gt;&gt;</a></td> <td class="reply" id="reply289132"> <a id="289132"></a> <div class="replyheader"> 									 <span class="commentpostername">Ralph Fiennes</span>  - <span class="idhighlight">Thu, 10 Jul 2014 18:45:08 EST ID:9DjRL9hG</span> <span class="reflink">  <a href="/mtv/res/287816.php#i289132">No.289132</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313635363936353737')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289132', '287816')" title="Report Post 289132"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289132" data-thread="287816"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F26659; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405032308782.gif"> 1405032308782.gif </a> -(<em>929593 B, 350x165</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1405032308782.gif"> <img src="/mtv/thumb/1405032308782s.jpg" alt="929593" class="thumb" /> </a>    <blockquote  class="mtv31313635363936353737">  posted this in the other gif thread at /b/   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/287816.php#289133" onclick="highlight(289133);">&gt;&gt;</a></td> <td class="reply" id="reply289133"> <a id="289133"></a> <div class="replyheader"> 									 <span class="commentpostername">Ralph Fiennes</span>  - <span class="idhighlight">Thu, 10 Jul 2014 18:51:35 EST ID:9DjRL9hG</span> <span class="reflink">  <a href="/mtv/res/287816.php#i289133">No.289133</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313635363936353737')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289133', '287816')" title="Report Post 289133"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289133" data-thread="287816"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C5C586; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405032695782.gif"> 1405032695782.gif </a> -(<em>1834580 B, 286x237</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1405032695782.gif"> <img src="/mtv/thumb/1405032695782s.jpg" alt="1834580" class="thumb" /> </a>    <blockquote  class="mtv31313635363936353737">  <a href = "/mtv/res/287816.php#289132" onclick = "highlight(289132)">&gt;&gt;289132</a>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread288774"> <div class="thread_header"> <a id="288774"></a> <span class="filetitle">MitM Thread</span>  <span class="inbetween"> by </span> <span class="postername">Wei Lo</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 06 Jul 2014 15:57:44 EST ID:dAQlt6HX</span></span>  <span class="reflink"> <a href="/mtv/res/288774.php#i288774">No.288774</a> </span>    			 <!--  - Awesome Thread? <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=288774&amp;vote=0">No!</a> | <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=288774&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323736343639373433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('288774')" title="Report Thread 288774"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/288774.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288774" data-thread="288774"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3929DD; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread288774');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404676664710.jpg"> 1404676664710.jpg </a> -(<em>160555 B, 1024x768</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv31323736343639373433" target="_blank" href="/mtv/src/1404676664710.jpg"> <img src="/mtv/thumb/1404676664710s.jpg" alt="160555" class="thumb" /> </a>   			 <blockquote class="opcomment mtv31323736343639373433">  We can all agree that this show is damn great right? <br>What are you favorite episodes? also:<br><span class="spoiler" onmouseover=""><span>REMINDER THAT MALCOLM DIDN&#39;T BANG THAT DRUNK CHICK</span></span>   </blockquote>   				 				  <span class="omittedposts">  26 posts and 4 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288774.php#289035" onclick="highlight(289035);">&gt;&gt;</a></td> <td class="reply" id="reply289035"> <a id="289035"></a> <div class="replyheader"> 									 <span class="commentpostername">Roxann Dawson</span>  - <span class="idhighlight">Wed, 09 Jul 2014 11:42:37 EST ID:KKAKgkJF</span> <span class="reflink">  <a href="/mtv/res/288774.php#i289035">No.289035</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv353233343739313233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289035', '288774')" title="Report Post 289035"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289035" data-thread="288774"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FA4D21; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv353233343739313233">  One of those shows that I really loved as a kid, along with Buffy and the Simpsons, but unlike those two, I can barely remember any episodes from Malcom. I don&#39;t even think I&#39;ve seen the last episode/series.<br><br>I remember thinking when the older brother went to live on a ranch or something and they added another baby the quality wasn&#39;t as good but like I say, I remember very little. I think by the time it had finished I was into different things and didn&#39;t watch as much TV. Maybe they&#39;ll appeal to me more now I&#39;m older, I dunno.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288774.php#289090" onclick="highlight(289090);">&gt;&gt;</a></td> <td class="reply" id="reply289090"> <a id="289090"></a> <div class="replyheader"> 									 <span class="commentpostername">Rei Ayanami</span>  - <span class="idhighlight">Thu, 10 Jul 2014 06:33:37 EST ID:sp3eTkHN</span> <span class="reflink">  <a href="/mtv/res/288774.php#i289090">No.289090</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31373437313031373731')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289090', '288774')" title="Report Post 289090"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289090" data-thread="288774"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3BA658; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31373437313031373731">  Man, I loved MitM for the first few seasons. Not really sure why I stopped watching it, something about shows where the cast grows up usually makes me lose interest. I think Saved By The Bell is the only show that I stuck with from beginning to end.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288774.php#289108" onclick="highlight(289108);">&gt;&gt;</a></td> <td class="reply" id="reply289108"> <a id="289108"></a> <div class="replyheader"> 									 <span class="commentpostername">Jay Sherman</span>  - <span class="idhighlight">Thu, 10 Jul 2014 14:11:37 EST ID:NvwBKzHx</span> <span class="reflink">  <a href="/mtv/res/288774.php#i289108">No.289108</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313334393437373931')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289108', '288774')" title="Report Post 289108"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289108" data-thread="288774"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6D8DD8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313334393437373931">  just remembered i can&#39;t remember anything about this show except for some stuff from the later seasons like the oldest brother and that asian girl. started rewatching it and seeing them all this young is freaking me out lol. funny stuff though, Hank having the anniversary all to himself was great, can&#39;t wait for that rollerskating episode.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288774.php#289113" onclick="highlight(289113);">&gt;&gt;</a></td> <td class="reply" id="reply289113"> <a id="289113"></a> <div class="replyheader"> 									 <span class="commentpostername">Jay Sherman</span>  - <span class="idhighlight">Thu, 10 Jul 2014 14:28:12 EST ID:NvwBKzHx</span> <span class="reflink">  <a href="/mtv/res/288774.php#i289113">No.289113</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313334393437373931')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289113', '288774')" title="Report Post 289113"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289113" data-thread="288774"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6B48F2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313334393437373931">  <a href = "/mtv/res/288774.php#289108" onclick = "highlight(289108)">&gt;&gt;289108</a><br>also it&#39;s kinda funny to see Francis smoking in the boarding school all the time knowing that it&#39;s so restricted now in broadcast tv even Constantine couldn&#39;t smoke, and so restricted irl he&#39;d have to go outside all the time.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288774.php#289118" onclick="highlight(289118);">&gt;&gt;</a></td> <td class="reply" id="reply289118"> <a id="289118"></a> <div class="replyheader"> 									 <span class="commentpostername">Esther Honeyfuck</span>  - <span class="idhighlight">Thu, 10 Jul 2014 15:27:38 EST ID:0tv5MwVU</span> <span class="reflink">  <a href="/mtv/res/288774.php#i289118">No.289118</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323033383835343638')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289118', '288774')" title="Report Post 289118"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289118" data-thread="288774"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #270BEC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31323033383835343638">  Reminder that the entire series has been on Netflix the past 3 years. I watch it through like once a month. I don&#39;t have a problem.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread287026"> <div class="thread_header"> <a id="287026"></a> <span class="filetitle">Tyrant</span>  <span class="inbetween"> by </span> <span class="postername">C-Higgy </span> <span class="postertrip">!lfsExjBfzE</span> <span class="inbetween"> - <span class="idhighlight">Sat, 21 Jun 2014 19:14:24 EST ID:8pag8ocV</span></span>  <span class="reflink"> <a href="/mtv/res/287026.php#i287026">No.287026</a> </span>    			 <!--  - Awesome Thread? <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=287026&amp;vote=0">No!</a> | <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=287026&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323037333631313632')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('287026')" title="Report Thread 287026"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/287026.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="287026" data-thread="287026"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EC67DA; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread287026');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1403392464489.jpg"> 1403392464489.jpg </a> -(<em>57971 B, 349x524</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv31323037333631313632" target="_blank" href="/mtv/src/1403392464489.jpg"> <img src="/mtv/thumb/1403392464489s.jpg" alt="57971" class="thumb" /> </a>   			 <blockquote class="opcomment mtv31323037333631313632">  Bassam &quot;Barry&quot; Al Fayeed (Adam Rayner) is from the fictional war-torn country of Abbudin. He has been living in self-selected exile in Los Angeles for nearly 20 years. Barry, the younger son of Baladi&#39;s dictator, ends his exile to return with his American family to his homeland for his nephew&#39;s wedding. His arrival leads to a dramatic culture clash, as he reluctantly returns to the familial and national politics he once left. The series premieres Tuesday at 10pm EDT on FX.   </blockquote>   				 				  <span class="omittedposts">  30 posts and 5 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/287026.php#288327" onclick="highlight(288327);">&gt;&gt;</a></td> <td class="reply" id="reply288327"> <a id="288327"></a> <div class="replyheader"> 									 <span class="commentpostername">Lauren Faust</span>  - <span class="idhighlight">Wed, 02 Jul 2014 03:27:01 EST ID:g6FNAleh</span> <span class="reflink">  <a href="/mtv/res/287026.php#i288327">No.288327</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323736313435363538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288327', '287026')" title="Report Post 288327"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288327" data-thread="287026"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0D58E5; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31323736313435363538">  also nb for triple but <span class="spoiler" onmouseover=""><span>both parents have blue eyes and Sammy doesn&#39;t... potential scandal bait</span></span>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/287026.php#288331" onclick="highlight(288331);">&gt;&gt;</a></td> <td class="reply" id="reply288331"> <a id="288331"></a> <div class="replyheader"> 									 <span class="commentpostername">Lauren Faust</span>  - <span class="idhighlight">Wed, 02 Jul 2014 04:29:04 EST ID:g6FNAleh</span> <span class="reflink">  <a href="/mtv/res/287026.php#i288331">No.288331</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323736313435363538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288331', '287026')" title="Report Post 288331"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288331" data-thread="287026"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E9A0F7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31323736313435363538">  <a href = "/mtv/res/287026.php#288327" onclick = "highlight(288327)">&gt;&gt;288327</a><br>looked it up and apparently i need to go back to school, modern genetics has outclassed me<br><br>another nb   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/287026.php#289052" onclick="highlight(289052);">&gt;&gt;</a></td> <td class="reply" id="reply289052"> <a id="289052"></a> <div class="replyheader"> 									 <span class="commentpostername">Callie Maggotbone</span>  - <span class="idhighlight">Wed, 09 Jul 2014 18:18:39 EST ID:RweNhena</span> <span class="reflink">  <a href="/mtv/res/287026.php#i289052">No.289052</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313039333530383531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289052', '287026')" title="Report Post 289052"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289052" data-thread="287026"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7F5A0E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313039333530383531">  How was episode 3? Hopefully I&#39;ll watch this later   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/287026.php#289053" onclick="highlight(289053);">&gt;&gt;</a></td> <td class="reply" id="reply289053"> <a id="289053"></a> <div class="replyheader"> 									 <span class="commentpostername">Spike Lee</span>  - <span class="idhighlight">Wed, 09 Jul 2014 18:29:46 EST ID:g6FNAleh</span> <span class="reflink">  <a href="/mtv/res/287026.php#i289053">No.289053</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323736313435363538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289053', '287026')" title="Report Post 289053"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289053" data-thread="287026"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #ABF18D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31323736313435363538">  <a href = "/mtv/res/287026.php#289052" onclick = "highlight(289052)">&gt;&gt;289052</a><br>I liked it   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/287026.php#289102" onclick="highlight(289102);">&gt;&gt;</a></td> <td class="reply" id="reply289102"> <a id="289102"></a> <div class="replyheader"> 									 <span class="commentpostername">Pamela Hensley</span>  - <span class="idhighlight">Thu, 10 Jul 2014 12:12:03 EST ID:RweNhena</span> <span class="reflink">  <a href="/mtv/res/287026.php#i289102">No.289102</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313039333530383531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289102', '287026')" title="Report Post 289102"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289102" data-thread="287026"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1C3367; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313039333530383531">  Alright episode.<br><br>Every time they show the Previously stuff and show <span class="spoiler" onmouseover=""><span>the road head scene, I laugh when she bites. The sound effect for the chomp are hilarious, it sounds like in Buffy or True Blood, the sound effect of when a vampire chows in for a big first bite.</span></span>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread288992"> <div class="thread_header"> <a id="288992"></a> <span class="filetitle">TUSK</span>  <span class="inbetween"> by </span> <span class="postername">Peppermint Larry</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 08 Jul 2014 20:08:17 EST ID:MPxQgtUY</span></span>  <span class="reflink"> <a href="/mtv/res/288992.php#i288992">No.288992</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv33333932303236393433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('288992')" title="Report Thread 288992"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/288992.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288992" data-thread="288992"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5E7708; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread288992');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404864497779.jpg"> 1404864497779.jpg </a> -(<em>65693 B, 467x720</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv33333932303236393433" target="_blank" href="/mtv/src/1404864497779.jpg"> <img src="/mtv/thumb/1404864497779s.jpg" alt="65693" class="thumb" /> </a>   			 <blockquote class="opcomment mtv33333932303236393433">  Poster for the new Kevin Smith film. Thoughts?   </blockquote>   				 				  <span class="omittedposts">   4 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288992.php#289006" onclick="highlight(289006);">&gt;&gt;</a></td> <td class="reply" id="reply289006"> <a id="289006"></a> <div class="replyheader"> 									 <span class="commentpostername">Arsene Lupin III</span>  - <span class="idhighlight">Tue, 08 Jul 2014 22:18:17 EST ID:BM3lfNtk</span> <span class="reflink">  <a href="/mtv/res/288992.php#i289006">No.289006</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32303932353132323134')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289006', '288992')" title="Report Post 289006"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289006" data-thread="288992"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F2568E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32303932353132323134">  <a href = "/mtv/res/288992.php#289003" onclick = "highlight(289003)">&gt;&gt;289003</a><br>Oh shit I remember reading about this a while ago. I&#39;m not that into Kevin Smith, but the man has made the occasional good film so I know he&#39;s capable of producing quality. The premise is interesting, hopefully it is executed well. Is it confirmed as a horror movie?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288992.php#289045" onclick="highlight(289045);">&gt;&gt;</a></td> <td class="reply" id="reply289045"> <a id="289045"></a> <div class="replyheader"> 									 <span class="commentpostername">Doyle</span>  - <span class="idhighlight">Wed, 09 Jul 2014 16:18:15 EST ID:vkVDbpTU</span> <span class="reflink">  <a href="/mtv/res/288992.php#i289045">No.289045</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313336373733383432')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289045', '288992')" title="Report Post 289045"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289045" data-thread="288992"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0452CA; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313336373733383432">  <a href = "/mtv/res/288992.php" onclick = "highlight(288992)">&gt;&gt;288992</a><br> I could shit on (current) Kevin Smith for days but this is a pretty interesting concept.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288992.php#289081" onclick="highlight(289081);">&gt;&gt;</a></td> <td class="reply" id="reply289081"> <a id="289081"></a> <div class="replyheader"> 									 <span class="commentpostername">Harvey Birdman</span>  - <span class="idhighlight">Thu, 10 Jul 2014 01:02:56 EST ID:5ZcvR61Q</span> <span class="reflink">  <a href="/mtv/res/288992.php#i289081">No.289081</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323036333436323733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289081', '288992')" title="Report Post 289081"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289081" data-thread="288992"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #00CAB1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31323036333436323733">  <a href = "/mtv/res/288992.php" onclick = "highlight(288992)">&gt;&gt;288992</a><br><a href="https://www.youtube.com/watch?v=ATGJuhDHVM4" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=ATGJuhDHVM4</a><br>Awesome   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288992.php#289089" onclick="highlight(289089);">&gt;&gt;</a></td> <td class="reply" id="reply289089"> <a id="289089"></a> <div class="replyheader"> 									 <span class="commentpostername">Rei Ayanami</span>  - <span class="idhighlight">Thu, 10 Jul 2014 06:21:33 EST ID:sp3eTkHN</span> <span class="reflink">  <a href="/mtv/res/288992.php#i289089">No.289089</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31373437313031373731')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289089', '288992')" title="Report Post 289089"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289089" data-thread="288992"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7EA43E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31373437313031373731">  I still need to see Red State. Kevin Smith making horror films still hasn&#39;t hit me.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288992.php#289093" onclick="highlight(289093);">&gt;&gt;</a></td> <td class="reply" id="reply289093"> <a id="289093"></a> <div class="replyheader"> 									 <span class="commentpostername">Harvey Birdman</span>  - <span class="idhighlight">Thu, 10 Jul 2014 07:52:16 EST ID:5ZcvR61Q</span> <span class="reflink">  <a href="/mtv/res/288992.php#i289093">No.289093</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323036333436323733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289093', '288992')" title="Report Post 289093"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289093" data-thread="288992"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1E2F06; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31323036333436323733">  <a href = "/mtv/res/288992.php#289089" onclick = "highlight(289089)">&gt;&gt;289089</a><br>It sounds like he&#39;s gonna make it funny as shit. <br>#WalrusYes   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread288905"> <div class="thread_header"> <a id="288905"></a> <span class="filetitle">Sex Change / Transgender Procedure Documentarys?</span>  <span class="inbetween"> by </span> <span class="postername">Johnny Clonson</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 07 Jul 2014 20:46:55 EST ID:MW0DHu6Y</span></span>  <span class="reflink"> <a href="/mtv/res/288905.php#i288905">No.288905</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32393138313033393135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('288905')" title="Report Thread 288905"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/288905.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288905" data-thread="288905"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A5DC52; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread288905');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404780415273.jpg"> 1404780415273.jpg </a> -(<em>130677 B, 350x500</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv32393138313033393135" target="_blank" href="/mtv/src/1404780415273.jpg"> <img src="/mtv/thumb/1404780415273s.jpg" alt="130677" class="thumb" /> </a>   			 <blockquote class="opcomment mtv32393138313033393135">  Im interested in finding out how its really done and im just wondering if theyre are any really good documentarys that stick out? anything will help thanks   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288905.php#288966" onclick="highlight(288966);">&gt;&gt;</a></td> <td class="reply" id="reply288966"> <a id="288966"></a> <div class="replyheader"> 									 <span class="commentpostername">Trinity</span>  - <span class="idhighlight">Tue, 08 Jul 2014 13:11:06 EST ID:y3+ezBfL</span> <span class="reflink">  <a href="/mtv/res/288905.php#i288966">No.288966</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323933323834363437')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288966', '288905')" title="Report Post 288966"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288966" data-thread="288905"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #29752D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404839466924.jpg"> 1404839466924.jpg </a> -(<em>42521 B, 428x600</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1404839466924.jpg"> <img src="/mtv/thumb/1404839466924s.jpg" alt="42521" class="thumb" /> </a>    <blockquote  class="mtv31323933323834363437">  <a href="http://www.youtube.com/watch?v=oYOY1CIyd_0" rel="nofollow" target="_blank">http://www.youtube.com/watch?v=oYOY1CIyd_0</a><br>there you go.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288905.php#288967" onclick="highlight(288967);">&gt;&gt;</a></td> <td class="reply" id="reply288967"> <a id="288967"></a> <div class="replyheader"> 									 <span class="commentpostername">Jessica 6</span>  - <span class="idhighlight">Tue, 08 Jul 2014 14:02:11 EST ID:seAW3YRD</span> <span class="reflink">  <a href="/mtv/res/288905.php#i288967">No.288967</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31343833373438303531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288967', '288905')" title="Report Post 288967"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288967" data-thread="288905"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #543060; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31343833373438303531">  <a href="https://www.youtube.com/watch?v=b3B8TqJOG0c" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=b3B8TqJOG0c</a><br>Heeyago<br>Are you thinking about getting one?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288905.php#289062" onclick="highlight(289062);">&gt;&gt;</a></td> <td class="reply" id="reply289062"> <a id="289062"></a> <div class="replyheader"> 									 <span class="commentpostername">Monkey D. Luffy</span>  - <span class="idhighlight">Wed, 09 Jul 2014 20:41:28 EST ID:Anx5z12G</span> <span class="reflink">  <a href="/mtv/res/288905.php#i289062">No.289062</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31363631343433323730')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289062', '288905')" title="Report Post 289062"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289062" data-thread="288905"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D53376; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404952888699.jpg"> 1404952888699.jpg </a> -(<em>37347 B, 500x960</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1404952888699.jpg"> <img src="/mtv/thumb/1404952888699s.jpg" alt="37347" class="thumb" /> </a>    <blockquote  class="mtv31363631343433323730">  I&#39;m probably not the only person who sees those torrents and thinks &quot;yiffy torrents&quot;...<br><br>they also tend to be very legit torrents too   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread289038"> <div class="thread_header"> <a id="289038"></a> <span class="filetitle">Does /mtv/ like The Life and Times of Tim</span>  <span class="inbetween"> by </span> <span class="postername">Gaius Baltar</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 09 Jul 2014 15:19:26 EST ID:dAQlt6HX</span></span>  <span class="reflink"> <a href="/mtv/res/289038.php#i289038">No.289038</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323736343639373433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('289038')" title="Report Thread 289038"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/289038.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289038" data-thread="289038"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #06B0B3; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread289038');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404933566191.jpg"> 1404933566191.jpg </a> -(<em>45163 B, 334x250</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv31323736343639373433" target="_blank" href="/mtv/src/1404933566191.jpg"> <img src="/mtv/thumb/1404933566191s.jpg" alt="45163" class="thumb" /> </a>   			 <blockquote class="opcomment mtv31323736343639373433">  One of my favorite animated series of all time the humor reminds me a lot of Curb Your Enthusiasm <br>also: <span class="spoiler" onmouseover=""><span>awful falafel</span></span>   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289038.php#289039" onclick="highlight(289039);">&gt;&gt;</a></td> <td class="reply" id="reply289039"> <a id="289039"></a> <div class="replyheader"> 									 <span class="commentpostername">Arsene Lupin III</span>  - <span class="idhighlight">Wed, 09 Jul 2014 15:29:04 EST ID:BM3lfNtk</span> <span class="reflink">  <a href="/mtv/res/289038.php#i289039">No.289039</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32303932353132323134')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289039', '289038')" title="Report Post 289039"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289039" data-thread="289038"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #82D887; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32303932353132323134">  I watched this for the first time recently and it&#39;t fuckin hilarious. A+ show   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289038.php#289048" onclick="highlight(289048);">&gt;&gt;</a></td> <td class="reply" id="reply289048"> <a id="289048"></a> <div class="replyheader"> 									 <span class="commentpostername">Callie Maggotbone</span>  - <span class="idhighlight">Wed, 09 Jul 2014 17:08:15 EST ID:RweNhena</span> <span class="reflink">  <a href="/mtv/res/289038.php#i289048">No.289048</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313039333530383531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289048', '289038')" title="Report Post 289048"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289048" data-thread="289038"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #171B32; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313039333530383531">  It is funniest when viewed in Yojimbotube   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread289029"> <div class="thread_header"> <a id="289029"></a> <span class="filetitle">Fairy tail blue figure episode 131</span>  <span class="inbetween"> by </span> <span class="postername">Colorless</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 09 Jul 2014 05:19:53 EST ID:08Kjgg8G</span></span>  <span class="reflink"> <a href="/mtv/res/289029.php#i289029">No.289029</a> </span>    <img src="/static/images/locked.gif" style="vertical-align: middle" alt="Locked" />  			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313337383735383430')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('289029')" title="Report Thread 289029"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/289029.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289029" data-thread="289029"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #376B3B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread289029');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404897593893.jpg"> 1404897593893.jpg </a> -(<em>133410 B, 1600x900</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv31313337383735383430" target="_blank" href="/mtv/src/1404897593893.jpg"> <img src="/mtv/thumb/1404897593893s.jpg" alt="133410" class="thumb" /> </a>   			 <blockquote class="opcomment mtv31313337383735383430">  In episode 131 there is a blue figure what the fuck is it!!!!!!   </blockquote>    <div class="lock"> <div class="banimage"> <img src="/static/images/lock.png" alt="Locked" /> </div> <div class="banmessages"> <div class="banmsg"> Thread has been locked </div>  <div class="bannedby"> Thread was locked by: <span style="color: black">C_Higgy</span> </div> <div class="banreason"> Reason: <span style="color: black">ask in the anime general thread</span> </div> </div>					 </div> 				 				     <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread288262"> <div class="thread_header"> <a id="288262"></a> <span class="filetitle">Drunk History Season 2 - 10 PM EST</span>  <span class="inbetween"> by </span> <span class="postername">Will Smith</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 01 Jul 2014 16:15:35 EST ID:KXBiBlny</span></span>  <span class="reflink"> <a href="/mtv/res/288262.php#i288262">No.288262</a> </span>    			 <!--  - Awesome Thread? <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=288262&amp;vote=0">No!</a> | <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=288262&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323232363431333839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('288262')" title="Report Thread 288262"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/288262.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288262" data-thread="288262"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7D591B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread288262');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404245735838.jpg"> 1404245735838.jpg </a> -(<em>222414 B, 600x400</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv31323232363431333839" target="_blank" href="/mtv/src/1404245735838.jpg"> <img src="/mtv/thumb/1404245735838s.jpg" alt="222414" class="thumb" /> </a>   			 <blockquote class="opcomment mtv31323232363431333839">  Short, sweet, and to the point.   </blockquote>   				 				  <span class="omittedposts">  29 posts and 10 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288262.php#289001" onclick="highlight(289001);">&gt;&gt;</a></td> <td class="reply" id="reply289001"> <a id="289001"></a> <div class="replyheader"> 									 <span class="commentpostername">Doyle</span>  - <span class="idhighlight">Tue, 08 Jul 2014 21:48:19 EST ID:vkVDbpTU</span> <span class="reflink">  <a href="/mtv/res/288262.php#i289001">No.289001</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313336373733383432')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289001', '288262')" title="Report Post 289001"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289001" data-thread="288262"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D1A996; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313336373733383432">  <a href = "/mtv/res/288262.php#288553" onclick = "highlight(288553)">&gt;&gt;288553</a><br> I haven`t actually seen Fargo (TV) yet but next to their classic &quot;MAN UP&quot; characters its basically their best preformance. I reckon (I hate to sound like a cowboy I just couldn&#39;t come up with a better word) that they are at their best when someone else is in control. <br><br> All we really know them from is Mad TV and the funny dudes from Mad TV (save for Michael McDonald) new show. I know what everyone is saying, on their own show they can be a bit much but I&#39;d like to see them on other shows.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288262.php#289002" onclick="highlight(289002);">&gt;&gt;</a></td> <td class="reply" id="reply289002"> <a id="289002"></a> <div class="replyheader"> 									 <span class="commentpostername">Doyle</span>  - <span class="idhighlight">Tue, 08 Jul 2014 21:49:03 EST ID:vkVDbpTU</span> <span class="reflink">  <a href="/mtv/res/288262.php#i289002">No.289002</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313336373733383432')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289002', '288262')" title="Report Post 289002"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289002" data-thread="288262"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E16E4E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313336373733383432">  <a href = "/mtv/res/288262.php#289001" onclick = "highlight(289001)">&gt;&gt;289001</a><br>** Its said to be their best performance... Like I say, I haven&#39;t actually seen it lol   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288262.php#289012" onclick="highlight(289012);">&gt;&gt;</a></td> <td class="reply" id="reply289012"> <a id="289012"></a> <div class="replyheader"> 									 <span class="commentpostername">Jan Skylar</span>  - <span class="idhighlight">Tue, 08 Jul 2014 22:48:06 EST ID:KXBiBlny</span> <span class="reflink">  <a href="/mtv/res/288262.php#i289012">No.289012</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323232363431333839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289012', '288262')" title="Report Post 289012"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289012" data-thread="288262"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7A9177; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31323232363431333839">  Showtime folks.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288262.php#289013" onclick="highlight(289013);">&gt;&gt;</a></td> <td class="reply" id="reply289013"> <a id="289013"></a> <div class="replyheader"> 									 <span class="commentpostername">Jan Skylar</span>  - <span class="idhighlight">Tue, 08 Jul 2014 22:56:26 EST ID:KXBiBlny</span> <span class="reflink">  <a href="/mtv/res/288262.php#i289013">No.289013</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323232363431333839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289013', '288262')" title="Report Post 289013"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289013" data-thread="288262"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AE51B3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404874586875.jpg"> 1404874586875.jpg </a> -(<em>10502 B, 300x188</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1404874586875.jpg"> <img src="/mtv/thumb/1404874586875s.jpg" alt="10502" class="thumb" /> </a>    <blockquote  class="mtv31323232363431333839">  FUCK YEA, haven&#39;t seen that commercial in a while.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288262.php#289014" onclick="highlight(289014);">&gt;&gt;</a></td> <td class="reply" id="reply289014"> <a id="289014"></a> <div class="replyheader"> 									 <span class="commentpostername">Jan Skylar</span>  - <span class="idhighlight">Tue, 08 Jul 2014 23:12:05 EST ID:KXBiBlny</span> <span class="reflink">  <a href="/mtv/res/288262.php#i289014">No.289014</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323232363431333839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289014', '288262')" title="Report Post 289014"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289014" data-thread="288262"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #47731F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31323232363431333839">  <blockquote class = "unkfunc">&gt;Nellie Bly<br></blockquote><br>Pfft, Dixie Carter (not the Designing Women actress) covered in flour.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread288682"> <div class="thread_header"> <a id="288682"></a> <span class="filetitle">Looking for a movie</span>  <span class="inbetween"> by </span> <span class="postername">Mickey Smith</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 05 Jul 2014 18:42:17 EST ID:eSQrzkhd</span></span>  <span class="reflink"> <a href="/mtv/res/288682.php#i288682">No.288682</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32393134343639323630')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('288682')" title="Report Thread 288682"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/288682.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288682" data-thread="288682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #10C915; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread288682');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404600137788.jpg"> 1404600137788.jpg </a> -(<em>37990 B, 381x496</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv32393134343639323630" target="_blank" href="/mtv/src/1404600137788.jpg"> <img src="/mtv/thumb/1404600137788s.jpg" alt="37990" class="thumb" /> </a>   			 <blockquote class="opcomment mtv32393134343639323630">  It was a sort of post-apocalyptic/dystopian movie, civilization was basically reduced to the small colony in the middle of somewhere. In the facility that they lived in there was this machine for this virtual reality game of sorts (possibly the reason for the fall of humanity?). The catch was if you died in the game, you died in real life as well. <br><br>The only part of the plot that I remember was there was this one guy who&#39;s wife was trapped in the game, and he had to go rescue her.<br><br>Pic related. it&#39;s similar to this movie in a lot of ways but it&#39;s not it.   </blockquote>   				 				  <span class="omittedposts">   3 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288682.php#288739" onclick="highlight(288739);">&gt;&gt;</a></td> <td class="reply" id="reply288739"> <a id="288739"></a> <div class="replyheader"> 									 <span class="commentpostername">Sam Winchester</span>  - <span class="idhighlight">Sun, 06 Jul 2014 01:38:44 EST ID:puc4od3k</span> <span class="reflink">  <a href="/mtv/res/288682.php#i288739">No.288739</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv33333235343230323735')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288739', '288682')" title="Report Post 288739"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288739" data-thread="288682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #820C12; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv33333235343230323735">  <a href = "/mtv/res/288682.php#288738" onclick = "highlight(288738)">&gt;&gt;288738</a><br>Also, check out the &quot;People who liked this also liked&quot; list on IMDB for this movie, weird list.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288682.php#288972" onclick="highlight(288972);">&gt;&gt;</a></td> <td class="reply" id="reply288972"> <a id="288972"></a> <div class="replyheader"> 									 <span class="commentpostername">Lord Hotcakes</span>  - <span class="idhighlight">Tue, 08 Jul 2014 15:43:16 EST ID:eSQrzkhd</span> <span class="reflink">  <a href="/mtv/res/288682.php#i288972">No.288972</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32393134343639323630')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288972', '288682')" title="Report Post 288972"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288972" data-thread="288682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #37F5BB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32393134343639323630">  Bump, still haven&#39;t found it yet.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288682.php#288973" onclick="highlight(288973);">&gt;&gt;</a></td> <td class="reply" id="reply288973"> <a id="288973"></a> <div class="replyheader"> 									 <span class="commentpostername">Terrence Winters</span>  - <span class="idhighlight">Tue, 08 Jul 2014 16:08:36 EST ID:DIF4/CJo</span> <span class="reflink">  <a href="/mtv/res/288682.php#i288973">No.288973</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv383438393231383638')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288973', '288682')" title="Report Post 288973"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288973" data-thread="288682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #185513; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv383438393231383638">  <a href = "/mtv/res/288682.php#288972" onclick = "highlight(288972)">&gt;&gt;288972</a><br><br>If its the flick people are talking about itt just go to bruce Campbells imdb page.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288682.php#288975" onclick="highlight(288975);">&gt;&gt;</a></td> <td class="reply" id="reply288975"> <a id="288975"></a> <div class="replyheader"> 									 <span class="commentpostername">Matt Smith</span>  - <span class="idhighlight">Tue, 08 Jul 2014 16:24:15 EST ID:NvwBKzHx</span> <span class="reflink">  <a href="/mtv/res/288682.php#i288975">No.288975</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313334393437373931')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288975', '288682')" title="Report Post 288975"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288975" data-thread="288682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #32F65A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313334393437373931">  <a href = "/mtv/res/288682.php#288973" onclick = "highlight(288973)">&gt;&gt;288973</a><br>the Bruce Campbell flick they&#39;re talking about is Mindwarp lol.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288682.php#289011" onclick="highlight(289011);">&gt;&gt;</a></td> <td class="reply" id="reply289011"> <a id="289011"></a> <div class="replyheader"> 									 <span class="commentpostername">Beldar Conehead</span>  - <span class="idhighlight">Tue, 08 Jul 2014 22:46:25 EST ID:5ZcvR61Q</span> <span class="reflink">  <a href="/mtv/res/288682.php#i289011">No.289011</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323036333436323733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289011', '288682')" title="Report Post 289011"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289011" data-thread="288682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DCDEE2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31323036333436323733">  <a href = "/mtv/res/288682.php#288738" onclick = "highlight(288738)">&gt;&gt;288738</a><br><span class="spoiler" onmouseover=""><span>The whole movie was just a fantasy, even the fantasy after the original fantasy, and it was a fantasy because she woke up from another fantasy only to discover that she fantasized the entire movie</span></span>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread288906"> <div class="thread_header"> <a id="288906"></a> <span class="filetitle">Something like a &#39;&#39;famine&#39;&#39; going on in the entertainment world?</span>  <span class="inbetween"> by </span> <span class="postername">Peter Cushing</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 07 Jul 2014 20:53:36 EST ID:Y+1Vve7y</span></span>  <span class="reflink"> <a href="/mtv/res/288906.php#i288906">No.288906</a> </span>    			 <!--  - Awesome Thread? <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=288906&amp;vote=0">No!</a> | <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=288906&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv353333383535363434')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('288906')" title="Report Thread 288906"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/288906.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288906" data-thread="288906"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #94A97C; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread288906');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404780816045.jpg"> 1404780816045.jpg </a> -(<em>42482 B, 331x307</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv353333383535363434" target="_blank" href="/mtv/src/1404780816045.jpg"> <img src="/mtv/thumb/1404780816045s.jpg" alt="42482" class="thumb" /> </a>   			 <blockquote class="opcomment mtv353333383535363434">  When it comes to shows, it seems no good shows are creating new episodes these days. All i watch is rectify and adventure time. Rectify progresses way to slow and adventure time spends a week making 10 minute episodes. I am just wondering<br>if anyone feels the same way?   </blockquote>   				 				  <span class="omittedposts">  21 posts and 4 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288906.php#288978" onclick="highlight(288978);">&gt;&gt;</a></td> <td class="reply" id="reply288978"> <a id="288978"></a> <div class="replyheader"> 									 <span class="commentpostername">Karl Urban</span>  - <span class="idhighlight">Tue, 08 Jul 2014 16:51:43 EST ID:e7LF7XR7</span> <span class="reflink">  <a href="/mtv/res/288906.php#i288978">No.288978</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32353335323038313339')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288978', '288906')" title="Report Post 288978"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288978" data-thread="288906"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DBD0B8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32353335323038313339">  <a href = "/mtv/res/288906.php#288913" onclick = "highlight(288913)">&gt;&gt;288913</a><br><blockquote class = "unkfunc">&gt;I mean theres one character on Supernatural who practically IS Constaintine.<br></blockquote><br>Who are you talking about?<br><br><br><br>Btw, OP: there&#39;s no famine, it&#39;s just summer. It&#39;s always like this in the summer. It&#39;s because people prefer to go out in the sun instead of being home watching tv. So the programming is shitty. That&#39;s also why in autumn there&#39;s a shitload of shows.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288906.php#288980" onclick="highlight(288980);">&gt;&gt;</a></td> <td class="reply" id="reply288980"> <a id="288980"></a> <div class="replyheader"> 									 <span class="commentpostername">LL Cool J</span>  - <span class="idhighlight">Tue, 08 Jul 2014 17:13:42 EST ID:h7m8ZxTt</span> <span class="reflink">  <a href="/mtv/res/288906.php#i288980">No.288980</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31363632333231393239')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288980', '288906')" title="Report Post 288980"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288980" data-thread="288906"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7C52A7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31363632333231393239">  <a href = "/mtv/res/288906.php#288978" onclick = "highlight(288978)">&gt;&gt;288978</a><br>Dunno, hardly watch the show, but people have told me that this one angsty looking angel dude that wears a trenchcoat and acts a lot like John.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288906.php#288984" onclick="highlight(288984);">&gt;&gt;</a></td> <td class="reply" id="reply288984"> <a id="288984"></a> <div class="replyheader"> 									 <span class="commentpostername">Myrcella Baratheon</span>  - <span class="idhighlight">Tue, 08 Jul 2014 18:08:36 EST ID:V5SLO0VL</span> <span class="reflink">  <a href="/mtv/res/288906.php#i288984">No.288984</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313836393832363037')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288984', '288906')" title="Report Post 288984"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288984" data-thread="288906"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #323230; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313836393832363037">  <a href = "/mtv/res/288906.php#288980" onclick = "highlight(288980)">&gt;&gt;288980</a><br><br><em>Fuck</em> no. Castiel is more like an adorable lost puppy than a grizzled hardass. I mean he did have his emo &#39;I&#39;m the new God and I&#39;m going to smite <em>everyone</em>&quot; phase, but who hasn&#39;t had that happen at some point in their life, ya&#39;know?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288906.php#288997" onclick="highlight(288997);">&gt;&gt;</a></td> <td class="reply" id="reply288997"> <a id="288997"></a> <div class="replyheader"> 									 <span class="commentpostername">Larry David</span>  - <span class="idhighlight">Tue, 08 Jul 2014 21:02:36 EST ID:e7LF7XR7</span> <span class="reflink">  <a href="/mtv/res/288906.php#i288997">No.288997</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32353335323038313339')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288997', '288906')" title="Report Post 288997"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288997" data-thread="288906"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C0E2E2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32353335323038313339">  <a href = "/mtv/res/288906.php#288984" onclick = "highlight(288984)">&gt;&gt;288984</a><br><br>Yeah seriously, he&#39;s so much the complete opposite of John that I&#39;d believe they did it on purpose: similar looks, completely different in everything else.<br><br>I mean maybe at the end of season 5, in that alternate timeline episode where the world basically ended, Castiel became a bit like John.. Selfish, womanizer, cynical, amoral, etc.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288906.php#288998" onclick="highlight(288998);">&gt;&gt;</a></td> <td class="reply" id="reply288998"> <a id="288998"></a> <div class="replyheader"> 									 <span class="commentpostername">Heisenberg</span>  - <span class="idhighlight">Tue, 08 Jul 2014 21:08:40 EST ID:3fmS0GeX</span> <span class="reflink">  <a href="/mtv/res/288906.php#i288998">No.288998</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv383438363133313333')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288998', '288906')" title="Report Post 288998"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288998" data-thread="288906"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E1708C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404868120786.jpg"> 1404868120786.jpg </a> -(<em>243079 B, 928x576</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1404868120786.jpg"> <img src="/mtv/thumb/1404868120786s.jpg" alt="243079" class="thumb" /> </a>    <blockquote  class="mtv383438363133313333">  Fuck what people seem to be saying, I like Halt and Catch Fire quite a bit.<br><br>Doesn&#39;t help that I&#39;m almost done with an bachelor&#39;s in web/networking programming, but it&#39;s a tasty show so far, love the tech jargon.<br><br>Some fuckin bullshit being born in 1990.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread288562"> <div class="thread_header"> <a id="288562"></a> <span class="filetitle">Anthony fired from Opie and Anthony show</span>  <span class="inbetween"> by </span> <span class="postername">Lindsay Weir</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 04 Jul 2014 14:45:11 EST ID:0mPgEg8y</span></span>  <span class="reflink"> <a href="/mtv/res/288562.php#i288562">No.288562</a> </span>    			 <!--  - Awesome Thread? <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=288562&amp;vote=0">No!</a> | <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=288562&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32373436333235353237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('288562')" title="Report Thread 288562"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/288562.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288562" data-thread="288562"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D230A4; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread288562');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404499511007.jpg"> 1404499511007.jpg </a> -(<em>97094 B, 726x666</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv32373436333235353237" target="_blank" href="/mtv/src/1404499511007.jpg"> <img src="/mtv/thumb/1404499511007s.jpg" alt="97094" class="thumb" /> </a>   			 <blockquote class="opcomment mtv32373436333235353237">  see pic   </blockquote>   				 				  <span class="omittedposts">  25 posts and 4 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288562.php#288660" onclick="highlight(288660);">&gt;&gt;</a></td> <td class="reply" id="reply288660"> <a id="288660"></a> <div class="replyheader"> 									 <span class="commentpostername">Cassiopeia</span>  - <span class="idhighlight">Sat, 05 Jul 2014 14:38:39 EST ID:h7m8ZxTt</span> <span class="reflink">  <a href="/mtv/res/288562.php#i288660">No.288660</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31363632333231393239')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288660', '288562')" title="Report Post 288660"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288660" data-thread="288562"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #366367; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31363632333231393239">  <a href = "/mtv/res/288562.php#288656" onclick = "highlight(288656)">&gt;&gt;288656</a><br>Well then fuck him if he was responsible for the merger because XM Radio had a damn good punk station, the only radio station I could find that played that type of music, that was removed after the merger and replaced with Tony Hawks Demolition Radio, which plays nonstop NOFX and Jay-Z and Blink-182 bullshit.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288562.php#288759" onclick="highlight(288759);">&gt;&gt;</a></td> <td class="reply" id="reply288759"> <a id="288759"></a> <div class="replyheader"> 									 <span class="commentpostername">Andy Wachowski</span>  - <span class="idhighlight">Sun, 06 Jul 2014 06:19:20 EST ID:sm5DcE2z</span> <span class="reflink">  <a href="/mtv/res/288562.php#i288759">No.288759</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31363539313934373732')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288759', '288562')" title="Report Post 288759"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288759" data-thread="288562"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #46DE05; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31363539313934373732">  <a href = "/mtv/res/288562.php#288655" onclick = "highlight(288655)">&gt;&gt;288655</a><br>We can&#39;t all wear &quot;FUCK GOD&quot; or Red Hot Chili Peppers t-shirts, ya fuckin &#39;mo.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288562.php#288768" onclick="highlight(288768);">&gt;&gt;</a></td> <td class="reply" id="reply288768"> <a id="288768"></a> <div class="replyheader"> 									 <span class="commentpostername">David Cronenberg</span>  - <span class="idhighlight">Sun, 06 Jul 2014 13:03:29 EST ID:n6ZLhlpg</span> <span class="reflink">  <a href="/mtv/res/288562.php#i288768">No.288768</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31383735373035303334')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288768', '288562')" title="Report Post 288768"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288768" data-thread="288562"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AA3B3B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404666209123.jpg"> 1404666209123.jpg </a> -(<em>16954 B, 400x250</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1404666209123.jpg"> <img src="/mtv/thumb/1404666209123s.jpg" alt="16954" class="thumb" /> </a>    <blockquote  class="mtv31383735373035303334">  This has been coming now for awhile. Ant&#39;s racial tirades have been becoming more and more unhinged and it was only a matter of time before the SJWs caught on. I&#39;d like to blame the easily offended masses for this debacle, but I really do think Ant is starting to lose it. He could&#39;ve just called her a cunt and left it at that.<br><br>Also, it&#39;s pretty funny how in Sirius XM&#39;s response they said Ant&#39;s comment were &quot;abhorrent&quot; and &quot;inconsistent&quot; with their views, and yet they still didn&#39;t fire him until after &quot;careful consideration.&quot; LOL, clearly the part they left out was that it was careful consideration of what would be best for their bottom line.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288562.php#288770" onclick="highlight(288770);">&gt;&gt;</a></td> <td class="reply" id="reply288770"> <a id="288770"></a> <div class="replyheader"> 									 <span class="commentpostername">Shinichi Mechazawa</span>  - <span class="idhighlight">Sun, 06 Jul 2014 13:06:55 EST ID:RweNhena</span> <span class="reflink">  <a href="/mtv/res/288562.php#i288770">No.288770</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313039333530383531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288770', '288562')" title="Report Post 288770"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288770" data-thread="288562"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C02CDF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313039333530383531">  So is Opie gonna start a new show on SiriusXM, start a new show on terrestrial, or stick with his friend and refuse to work unless it is with his long time partner?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288562.php#288974" onclick="highlight(288974);">&gt;&gt;</a></td> <td class="reply" id="reply288974"> <a id="288974"></a> <div class="replyheader"> 									 <span class="commentpostername">Rick Grimes</span>  - <span class="idhighlight">Tue, 08 Jul 2014 16:21:29 EST ID:zlJDJBuy</span> <span class="reflink">  <a href="/mtv/res/288562.php#i288974">No.288974</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv33373036363630393638')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288974', '288562')" title="Report Post 288974"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288974" data-thread="288562"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CCCE5E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv33373036363630393638">  <a href = "/mtv/res/288562.php#288770" onclick = "highlight(288770)">&gt;&gt;288770</a><br>Ant is not coming back, damage has been done. His going to make his Live From The Compound shows a regular thing airing soon, Staff and all.<br><br>Opie and Jim are under contract for 2 more months, no point on them walking. The show wont be the same without them and with them losing a serious base of there listeners because they all cancelled there subs, they wont renew for next year as O&amp;A. <br><br>Jimmy has the boneyard and advice show with siruis, might keep it. Opie might do something else with sirius but i think he walks for sure. Podcast&#39;s or just joins people on there podcast&#39;s when he feels like it. I also get a feeling we will get a more revealing opie in interviews ect<br><br>All in all its a loss.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread288851"> <div class="thread_header"> <a id="288851"></a> <span class="filetitle">American Horror Story</span>  <span class="inbetween"> by </span> <span class="postername">Brigadier Lethbridge Stewart</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 07 Jul 2014 10:12:53 EST ID:dSw+YtHt</span></span>  <span class="reflink"> <a href="/mtv/res/288851.php#i288851">No.288851</a> </span>    <img src="/static/images/locked.gif" style="vertical-align: middle" alt="Locked" />  			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31343534303530363630')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('288851')" title="Report Thread 288851"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/288851.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288851" data-thread="288851"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #686CC9; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread288851');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404742373545.jpg"> 1404742373545.jpg </a> -(<em>101445 B, 500x680</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv31343534303530363630" target="_blank" href="/mtv/src/1404742373545.jpg"> <img src="/mtv/thumb/1404742373545s.jpg" alt="101445" class="thumb" /> </a>   			 <blockquote class="opcomment mtv31343534303530363630">  <blockquote class = "unkfunc">&gt;implying young moira isn&#39;t the sexiest character in tv history</blockquote>   </blockquote>    <div class="lock"> <div class="banimage"> <img src="/static/images/lock.png" alt="Locked" /> </div> <div class="banmessages"> <div class="banmsg"> Thread has been locked </div>  <div class="bannedby"> Thread was locked by: <span style="color: black">C_Higgy</span> </div> <div class="banreason"> Reason: <span style="color: black">no waifu threads</span> </div> </div>					 </div> 				 				  <span class="omittedposts">  3 posts and 2 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288851.php#288881" onclick="highlight(288881);">&gt;&gt;</a></td> <td class="reply" id="reply288881"> <a id="288881"></a> <div class="replyheader"> 									 <span class="commentpostername">Major Motoko Kusanagi</span>  - <span class="idhighlight">Mon, 07 Jul 2014 16:04:39 EST ID:dAQlt6HX</span> <span class="reflink">  <a href="/mtv/res/288851.php#i288881">No.288881</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323736343639373433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288881', '288851')" title="Report Post 288881"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288881" data-thread="288851"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #280A10; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31323736343639373433">  I&#39;d rather have Taissa   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288851.php#288887" onclick="highlight(288887);">&gt;&gt;</a></td> <td class="reply" id="reply288887"> <a id="288887"></a> <div class="replyheader"> 									 <span class="commentpostername">Stump Beefknob</span>  - <span class="idhighlight">Mon, 07 Jul 2014 17:06:40 EST ID:VWgNxc7E</span> <span class="reflink">  <a href="/mtv/res/288851.php#i288887">No.288887</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313433343131303233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288887', '288851')" title="Report Post 288887"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288887" data-thread="288851"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A2F175; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404767200220.jpg"> 1404767200220.jpg </a> -(<em>118005 B, 1440x900</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1404767200220.jpg"> <img src="/mtv/thumb/1404767200220s.jpg" alt="118005" class="thumb" /> </a>    <blockquote  class="mtv31313433343131303233">  <a href = "/mtv/res/288851.php#288879" onclick = "highlight(288879)">&gt;&gt;288879</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288851.php#288908" onclick="highlight(288908);">&gt;&gt;</a></td> <td class="reply" id="reply288908"> <a id="288908"></a> <div class="replyheader"> 									 <span class="commentpostername">Ichigo Kurosaki</span>  - <span class="idhighlight">Mon, 07 Jul 2014 20:57:25 EST ID:puc4od3k</span> <span class="reflink">  <a href="/mtv/res/288851.php#i288908">No.288908</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv33333235343230323735')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288908', '288851')" title="Report Post 288908"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288908" data-thread="288851"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9651A6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404781045339.jpg"> 1404781045339.jpg </a> -(<em>48564 B, 320x240</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1404781045339.jpg"> <img src="/mtv/thumb/1404781045339s.jpg" alt="48564" class="thumb" /> </a>    <blockquote  class="mtv33333235343230323735">  <a href = "/mtv/res/288851.php#288887" onclick = "highlight(288887)">&gt;&gt;288887</a><br>I prefer her in her jumpsuit, covered in grease.  Something about women turning wrenches is just so hot.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288851.php#288929" onclick="highlight(288929);">&gt;&gt;</a></td> <td class="reply" id="reply288929"> <a id="288929"></a> <div class="replyheader"> 									 <span class="commentpostername">Ruby Jean "Granny" Cuyler</span>  - <span class="idhighlight">Tue, 08 Jul 2014 00:30:46 EST ID:H6I3YD+2</span> <span class="reflink">  <a href="/mtv/res/288851.php#i288929">No.288929</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv343039363639333332')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288929', '288851')" title="Report Post 288929"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288929" data-thread="288851"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3206F0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv343039363639333332">  <a href = "/mtv/res/288851.php#288908" onclick = "highlight(288908)">&gt;&gt;288908</a><br><br>There&#39;s nothing that gets me going like a chick who can fix things and knows how to weld.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/288851.php#288931" onclick="highlight(288931);">&gt;&gt;</a></td> <td class="reply" id="reply288931"> <a id="288931"></a> <div class="replyheader"> 									 <span class="commentpostername">Joseph Dredd</span>  - <span class="idhighlight">Tue, 08 Jul 2014 00:37:13 EST ID:BM3lfNtk</span> <span class="reflink">  <a href="/mtv/res/288851.php#i288931">No.288931</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32303932353132323134')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('288931', '288851')" title="Report Post 288931"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="288931" data-thread="288851"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #78822A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1404794233548.jpg"> 1404794233548.jpg </a> -(<em>100305 B, 498x750</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1404794233548.jpg"> <img src="/mtv/thumb/1404794233548s.jpg" alt="100305" class="thumb" /> </a>    <blockquote  class="mtv32303932353132323134">  The one true Waifu. Mother of hardons   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://insomniacgamers.net"><img src="http://cdn.420chan.org/sp/i.png"></a>
		</div>
				<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/mtv/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="mtv" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">  <a href="/mtv/7.php">&lt;&lt;Last</a>   <span style="font-size: +1;">Pages</span>   <a href="/mtv/9.php">Next&gt;&gt;</a>  <br />   <a href="/mtv/index.php">0</a>     <a href="/mtv/1.php">1</a>     <a href="/mtv/2.php">2</a>     <a href="/mtv/3.php">3</a>     <a href="/mtv/4.php">4</a>     <a href="/mtv/5.php">5</a>     <a href="/mtv/6.php">6</a>     <a href="/mtv/7.php">7</a>      8    <a href="/mtv/9.php">9</a>     <a href="/mtv/10.php">10</a>     <a href="/mtv/11.php">11</a>     <a href="/mtv/12.php">12</a>     <a href="/mtv/13.php">13</a>     <a href="/mtv/14.php">14</a>     <a href="/mtv/15.php">15</a>     <a href="/mtv/16.php">16</a>     <a href="/mtv/17.php">17</a>     <a href="/mtv/18.php">18</a>     <a href="/mtv/19.php">19</a>     <a href="/mtv/20.php">20</a>     <a href="/mtv/21.php">21</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3854903.php' class='boardlink'>Thread 3854903</a></span>
		<p>>>3855049
>>3855048
Yep... <a href='/wooo/res/3854903.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='h' src='/static/images/board_icons/h_icon_32.png' />
		<span class='byline'>Hentai - <a href='/h/res/191558.php' class='boardlink'>Thread 191558</a></span>
		<p>>>216273... <a href='/h/res/191558.php' class='boardlink'>&#8629;</a></p></li>
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

