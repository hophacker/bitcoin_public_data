http://boards.420chan.org/prog/16.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Wed, 23 Jul 2014 18:33:16 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> Programming - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/prog_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/prog_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/prog/16.php';
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
	 <div id="header"> <div id="board_logo"> <a href="/prog/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/prog_icon_64.png" alt="/prog/ Icon" /> <p class="board_title_block"> <span class="board_name">/prog/</span> <span class="board_title">Programming</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
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
	 <!--  <div style="position: absolute; right: 2.5%;"> <ul style="text-align: right; float: right; list-style: none; margin: 5px; font-size: 11px;"> <li style="margin-bottom: 2px;">Board IRC: <a href="irc://irc.420chan.org/code">#code @ irc.420chan.org</a></li> <li>New to IRC? <a href="http://420chan.org/#irc">Start Here</a></li> </ul> </div>  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/prog/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="prog" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />     <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>  <tr> <td class="postblock">Name</td> <td> <input title="Name" type="text" name="field1" style="width:224px;" /> <div class="tooltip">  You can leave this blank to post anonymously, or you can create a Tripcode by using the float <b>Name#Password</b> </div>					 </td> </tr>    <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div>  <script type="text/javascript">set_inputs("postform")</script> <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 3000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> <li>This is a work-safe board. Posting adult images is forbidden.</li>			  </ul> </div> <hr style="margin-bottom:2px;" /> 		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 <hr style="margin-top:2px;" />   <form id="delform" action="/prog/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="prog" />    <div id="progthread30580"> <div class="thread_header"> <a id="30580"></a> <span class="filetitle">Asynchronous combinatorial circuits</span>  <span class="inbetween"> by </span> <span class="postername">Thomas Sondlelit</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 20 Dec 2013 12:59:37 EST ID:8J5Kxm+3</span></span>  <span class="reflink"> <a href="/prog/res/30580.php#i30580">No.30580</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31323538313835343733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('30580')" title="Report Thread 30580"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/prog/res/30580.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30580" data-thread="30580"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3F0053; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('progthread30580');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1387562377556.png"> 1387562377556.png </a> -(<em>37148 B, 640x460</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgprog31323538313835343733" target="_blank" href="/prog/src/1387562377556.png"> <img src="/prog/thumb/1387562377556s.jpg" alt="37148" class="thumb" /> </a>   			 <blockquote class="opcomment prog31323538313835343733">  I&#39;ve been trying to make a delay insensitive carry lookahead adder but It&#39;s getting gigantic. I&#39;ve been using DIMS (pic related) to directly create the small circuits I need to compose the more complex ones but a single carry look ahead unit uses 2 OR gates and 1 AND gate, costing 12 C-gates of area. Making them directly out of C-gates would cost 16 3-input C-gates.<br>I&#39;ve looked for alternatives designs for asynchronous circuits but the only one I can find is Null Convention Logic which uses threshold gates. Does anybody have any learning material on what transformations you can perform on NCL circuits or any other alternatives that are delay insensitive?   </blockquote>   				 				     <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="progthread30519"> <div class="thread_header"> <a id="30519"></a> <span class="filetitle">freeedommmmm</span>  <span class="inbetween"> by </span> <span class="postername">Samuel Noshstot</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 12 Dec 2013 16:59:25 EST ID:ViGhSfAi</span></span>  <span class="reflink"> <a href="/prog/res/30519.php#i30519">No.30519</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog32333430383832313832')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('30519')" title="Report Thread 30519"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/prog/res/30519.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30519" data-thread="30519"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0D4864; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('progthread30519');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1386885565338.jpg"> 1386885565338.jpg </a> -(<em>397054 B, 680x487</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgprog32333430383832313832" target="_blank" href="/prog/src/1386885565338.jpg"> <img src="/prog/thumb/1386885565338s.jpg" alt="397054" class="thumb" /> </a>   			 <blockquote class="opcomment prog32333430383832313832">  there&#39;s this program called Freedom that blocks all internet connection on your machine until you restart it, so you can get stuff done like papers and such. From a programming perspective, how do you think they do this?<br><br><a href="https://macfreedom.com/" rel="nofollow" target="_blank">https://macfreedom.com/</a>   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/prog/res/30519.php#30520" onclick="highlight(30520);">&gt;&gt;</a></td> <td class="reply" id="reply30520"> <a id="30520"></a> <div class="replyheader"> 									 <span class="commentpostername">Ebenezer Chuddlehall</span>  - <span class="idhighlight">Thu, 12 Dec 2013 17:30:27 EST ID:LRgXFCUp</span> <span class="reflink">  <a href="/prog/res/30519.php#i30520">No.30520</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31343235373336313431')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30520', '30519')" title="Report Post 30520"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30520" data-thread="30519"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6CB9F1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31343235373336313431">  <a href = "/prog/res/30519.php" onclick = "highlight(30519)">&gt;&gt;30519</a><br>My guess:<br>Disables the device (windows), ifdown ethx (linux, possibly mac os)<br><br><span class="spoiler" onmouseover=""><span>I don&#39;t give these people a lot of credit.</span></span>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30519.php#30521" onclick="highlight(30521);">&gt;&gt;</a></td> <td class="reply" id="reply30521"> <a id="30521"></a> <div class="replyheader"> 									 <span class="commentpostername">Beatrice Bardway</span>  - <span class="idhighlight">Thu, 12 Dec 2013 17:48:51 EST ID:PQzGpXuE</span> <span class="reflink">  <a href="/prog/res/30519.php#i30521">No.30521</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog383433323035393338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30521', '30519')" title="Report Post 30521"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30521" data-thread="30519"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4E801D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1386888531175.gif"> 1386888531175.gif </a> -(<em>963349 B, 245x180</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/prog/src/1386888531175.gif"> <img src="/prog/thumb/1386888531175s.jpg" alt="963349" class="thumb" /> </a>    <blockquote  class="prog383433323035393338">  by telling windows to shut something off or ending some process needed for internet access, most likely by using the Windows API.<br><br>the code is probably dead fucking simple and not even 50 lines.<br><br><a href="http://msdn.microsoft.com/en-us/library/windows/desktop/ff818516(v=vs.85).aspx" rel="nofollow" target="_blank">http://msdn.microsoft.com/en-us/library/windows/desktop/ff818516(v=vs.85).aspx</a><br><br>this is really more of a tech question than a programming question.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30519.php#30643" onclick="highlight(30643);">&gt;&gt;</a></td> <td class="reply" id="reply30643"> <a id="30643"></a> <div class="replyheader"> 									 <span class="commentpostername">Shitting Diffingstod</span>  - <span class="idhighlight">Sun, 29 Dec 2013 19:35:22 EST ID:xtelIQ1k</span> <span class="reflink">  <a href="/prog/res/30519.php#i30643">No.30643</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31363539333037333937')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30643', '30519')" title="Report Post 30643"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30643" data-thread="30519"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6DC5FE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1388363722530.jpg"> 1388363722530.jpg </a> -(<em>25056 B, 441x348</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/prog/src/1388363722530.jpg"> <img src="/prog/thumb/1388363722530s.jpg" alt="25056" class="thumb" /> </a>    <blockquote  class="prog31363539333037333937">  That&#39;ll be $10 please.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30519.php#30653" onclick="highlight(30653);">&gt;&gt;</a></td> <td class="reply" id="reply30653"> <a id="30653"></a> <div class="replyheader"> 									 <span class="commentpostername">Jack Crunningdale</span>  - <span class="idhighlight">Tue, 31 Dec 2013 09:56:40 EST ID:xh0Eouzb</span> <span class="reflink">  <a href="/prog/res/30519.php#i30653">No.30653</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31323232373131393239')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30653', '30519')" title="Report Post 30653"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30653" data-thread="30519"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D40F6B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1388501800300.gif"> 1388501800300.gif </a> -(<em>18371 B, 266x177</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/prog/src/1388501800300.gif"> <img src="/prog/thumb/1388501800300s.jpg" alt="18371" class="thumb" /> </a>    <blockquote  class="prog31323232373131393239">  or if clicking is too hard for you to understand, you could just - oh, i don&#39;t know... unplug your fucking network connection?<br><br>charging people $10 for this &quot;software&quot; is a damn scam.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="progthread30175"> <div class="thread_header"> <a id="30175"></a> <span class="filetitle">Cannot even Write  a macro.</span>  <span class="inbetween"> by </span> <span class="postername">Cornelius Woshbanks</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 05 Nov 2013 03:59:09 EST ID:hf64/npB</span></span>  <span class="reflink"> <a href="/prog/res/30175.php#i30175">No.30175</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog383430353930383035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('30175')" title="Report Thread 30175"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/prog/res/30175.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30175" data-thread="30175"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #06C25D; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('progthread30175');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1383641949914.jpg"> 1383641949914.jpg </a> -(<em>1961984 B, 3264x2448</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgprog383430353930383035" target="_blank" href="/prog/src/1383641949914.jpg"> <img src="/prog/thumb/1383641949914s.jpg" alt="1961984" class="thumb" /> </a>   			 <blockquote class="opcomment prog383430353930383035">  I have no coding experience at all and I am trying to write a macro For a game called Magicka:Wizard wars. I am good at the game and there is an argument in the development forums about the use of macros and how they are not overpowered. My plan was to make a video of how overpower macros are. <br>However I cannot even get my button presses to be recognized ingame.  I was using Auto Hotkey to write the scripts.<br>A normal<br>*5::<br>send:: sdr<br>return<br><br>Doesn&#39;t work. Then I read up and it said I had to use a Controlsend. I had no idea how to Implement that but I tried. Spent about five hours on this and I am fucking lost.  Could someone point me in the right direction, tell me difference between raw input and simulated input?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/prog/res/30175.php#30185" onclick="highlight(30185);">&gt;&gt;</a></td> <td class="reply" id="reply30185"> <a id="30185"></a> <div class="replyheader"> 									 <span class="commentpostername">Graham Fondercocke</span>  - <span class="idhighlight">Tue, 05 Nov 2013 14:24:50 EST ID:dUqCye/w</span> <span class="reflink">  <a href="/prog/res/30175.php#i30185">No.30185</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog32333739343435323131')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30185', '30175')" title="Report Post 30185"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30185" data-thread="30175"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #649C10; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog32333739343435323131">  <a href = "/prog/res/30175.php" onclick = "highlight(30175)">&gt;&gt;30175</a><br><blockquote class = "unkfunc">&gt;My plan was to make a video of how overpower macros are. <br></blockquote>How are they overpowered if you can&#39;t use them properly?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30175.php#30188" onclick="highlight(30188);">&gt;&gt;</a></td> <td class="reply" id="reply30188"> <a id="30188"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Woshbanks</span>  - <span class="idhighlight">Tue, 05 Nov 2013 16:19:47 EST ID:hf64/npB</span> <span class="reflink">  <a href="/prog/res/30175.php#i30188">No.30188</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog383430353930383035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30188', '30175')" title="Report Post 30188"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30188" data-thread="30175"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B83EE9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog383430353930383035">  <a href = "/prog/res/30175.php#30185" onclick = "highlight(30185)">&gt;&gt;30185</a><br>Just because I cannot does not mean others cannot.<br>Others openly confess to using them, its not a secret.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30175.php#30191" onclick="highlight(30191);">&gt;&gt;</a></td> <td class="reply" id="reply30191"> <a id="30191"></a> <div class="replyheader"> 									 <span class="commentpostername">Clara Fashwork</span>  - <span class="idhighlight">Tue, 05 Nov 2013 19:33:59 EST ID:6bkMEFIw</span> <span class="reflink">  <a href="/prog/res/30175.php#i30191">No.30191</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31313731353239363237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30191', '30175')" title="Report Post 30191"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30191" data-thread="30175"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D57B32; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31313731353239363237">  <a href = "/prog/res/30175.php#30188" onclick = "highlight(30188)">&gt;&gt;30188</a><br>Why not let someone who uses them in an overpowered fashion make a video about how they are overpowered then? This is like deciding you should make a video series on which airplanes are the most fun to fly, but you haven&#39;t even gone to flight school yet. One step at a time, friend.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30175.php#30647" onclick="highlight(30647);">&gt;&gt;</a></td> <td class="reply" id="reply30647"> <a id="30647"></a> <div class="replyheader"> 									 <span class="commentpostername">Fuck Fanlock</span>  - <span class="idhighlight">Mon, 30 Dec 2013 19:29:01 EST ID:mYetc0iT</span> <span class="reflink">  <a href="/prog/res/30175.php#i30647">No.30647</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31323735373636393734')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30647', '30175')" title="Report Post 30647"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30647" data-thread="30175"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CD5D45; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31323735373636393734">  <a href = "/prog/res/30175.php" onclick = "highlight(30175)">&gt;&gt;30175</a><br><blockquote class = "unkfunc">&gt;an argument in the development forums about the use of macros<br>&gt;Spent about five hours on this<br></blockquote><br>To (dis)prove an argument on an internet forum? Really?   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="progthread28723"> <div class="thread_header"> <a id="28723"></a> <span class="filetitle">Jobs without C# .NET visual or Java</span>  <span class="inbetween"> by </span> <span class="postername">Ebenezer Channerlock</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 05 Jun 2013 13:31:01 EST ID:20dKspUk</span></span>  <span class="reflink"> <a href="/prog/res/28723.php#i28723">No.28723</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog32393036383237343637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('28723')" title="Report Thread 28723"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/prog/res/28723.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="28723" data-thread="28723"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4597F4; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('progthread28723');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1370453461133.gif"> 1370453461133.gif </a> -(<em>2074089 B, 360x240</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgprog32393036383237343637" target="_blank" href="/prog/src/1370453461133.gif"> <img src="/prog/thumb/1370453461133s.jpg" alt="2074089" class="thumb" /> </a>   			 <blockquote class="opcomment prog32393036383237343637">  I don&#39;t know any of those languages and it seems I have screwed myself for doing so.  Everyone seems to be looking for web based developers or developers for windows platforms.<br>I know C, C++, obj-C, Qt, and some Python, HTML, Bash, and haskell.<br><br>What sort of entry level jobs should I be looking for or  am I just screwed?  All I can find are support type jobs.  Like tech support for the IT departments of the client using my employers product. <br><br>no idea what pic I posted   </blockquote>   				 				  <span class="omittedposts">  3 posts and 3 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/prog/res/28723.php#28736" onclick="highlight(28736);">&gt;&gt;</a></td> <td class="reply" id="reply28736"> <a id="28736"></a> <div class="replyheader"> 									 <span class="commentpostername">Jenny Clecklelune</span>  - <span class="idhighlight">Thu, 06 Jun 2013 06:58:25 EST ID:L+dcZdjc</span> <span class="reflink">  <a href="/prog/res/28723.php#i28736">No.28736</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog33363438353537363836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('28736', '28723')" title="Report Post 28736"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="28736" data-thread="28723"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DFC976; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog33363438353537363836">  <a href = "/prog/res/28723.php#28735" onclick = "highlight(28735)">&gt;&gt;28735</a> You know, .NET isn&#39;t a net working lib per s?. <br><br><br><a href = "/prog/res/28723.php" onclick = "highlight(28723)">&gt;&gt;28723</a><br>I started a week ago on learning C#. I also knew java, obj c, python and web development languages. And I can tell you, it&#39;s a fucking breeze. It&#39;s almost the same as java. Never had a problem(with the language) that i couldn&#39;t solve by the first google hit. I&#39;m pretty confisent i can write the same software in c# that i can write in java, and that after mot even a fulltime week. I had a little experience in .net in visual basic though. But .NET is only for the ui stuff and interacting with windows(partially the same thing). Plus that lib is sublimely documented aswell, if you ask me.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/28723.php#28737" onclick="highlight(28737);">&gt;&gt;</a></td> <td class="reply" id="reply28737"> <a id="28737"></a> <div class="replyheader"> 									 <span class="commentpostername">Jenny Clecklelune</span>  - <span class="idhighlight">Thu, 06 Jun 2013 07:01:56 EST ID:L+dcZdjc</span> <span class="reflink">  <a href="/prog/res/28723.php#i28737">No.28737</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog33363438353537363836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('28737', '28723')" title="Report Post 28737"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="28737" data-thread="28723"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #321902; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog33363438353537363836">  <a href = "/prog/res/28723.php" onclick = "highlight(28723)">&gt;&gt;28723</a><br>Whoops, one thing though, if you make a new project in vis studio. always press the save all button at least once. else the project files arent saved on disk, and are kept in memory. Lost two days of work by forgetting to press that button(my computer crashed). i&#39;m now repeating it and its the worst thing i have ever done involving software development.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/28723.php#28740" onclick="highlight(28740);">&gt;&gt;</a></td> <td class="reply" id="reply28740"> <a id="28740"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Blodgeham</span>  - <span class="idhighlight">Thu, 06 Jun 2013 07:49:14 EST ID:7CEq0tjv</span> <span class="reflink">  <a href="/prog/res/28723.php#i28740">No.28740</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog32393839303033373431')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('28740', '28723')" title="Report Post 28740"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="28740" data-thread="28723"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D5AE00; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1370519354894.jpg"> 1370519354894.jpg </a> -(<em>129276 B, 480x640</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/prog/src/1370519354894.jpg"> <img src="/prog/thumb/1370519354894s.jpg" alt="129276" class="thumb" /> </a>    <blockquote  class="prog32393839303033373431">  <a href = "/prog/res/28723.php#28736" onclick = "highlight(28736)">&gt;&gt;28736</a><br><br>Huh? I did not mention .NET anywhere in my post; Qt is an application framework, Boost is a set of libriaries, both are written in C++. Besides, .NET is much more than UI stuff/Windows interaction.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/28723.php#28771" onclick="highlight(28771);">&gt;&gt;</a></td> <td class="reply" id="reply28771"> <a id="28771"></a> <div class="replyheader"> 									 <span class="commentpostername">Molly Boffinghut</span>  - <span class="idhighlight">Tue, 11 Jun 2013 17:41:51 EST ID:vLCXfMhb</span> <span class="reflink">  <a href="/prog/res/28723.php#i28771">No.28771</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31353939363432303938')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('28771', '28723')" title="Report Post 28771"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="28771" data-thread="28723"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C3CD92; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31353939363432303938">  <a href = "/prog/res/28723.php" onclick = "highlight(28723)">&gt;&gt;28723</a><br>Why don&#39;t you learn .NET or JVM languages?<br><br><blockquote class = "unkfunc">&gt; C, C++<br></blockquote>Could get you a job in embedded sytems. But you&#39;d need to know quite a bit about low-level programming.<br><br><blockquote class = "unkfunc">&gt; HTML<br></blockquote>If you add javascript, you could get a work as web designer.<br><br>Considering the languages you&#39;ve already used, you would probably also get an entry-level job in some language that you haven&#39;t used yet. Just apply everywhere or consult a recruiter.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/28723.php#28809" onclick="highlight(28809);">&gt;&gt;</a></td> <td class="reply" id="reply28809"> <a id="28809"></a> <div class="replyheader"> 									 <span class="commentpostername">Fuck Wundlestodge</span>  - <span class="idhighlight">Sat, 15 Jun 2013 01:49:42 EST ID:20dKspUk</span> <span class="reflink">  <a href="/prog/res/28723.php#i28809">No.28809</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog32393036383237343637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('28809', '28723')" title="Report Post 28809"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="28809" data-thread="28723"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D45114; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog32393036383237343637">  <a href = "/prog/res/28723.php#28771" onclick = "highlight(28771)">&gt;&gt;28771</a><br>How does one actually contact a recruiter?   I have had several contact me but I can never find them.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="progthread29473"> <div class="thread_header"> <a id="29473"></a> <span class="filetitle">wobsite on the interblag</span>  <span class="inbetween"> by </span> <span class="postername">Frederick Genningson</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 24 Aug 2013 02:56:52 EST ID:cmICxTTG</span></span>  <span class="reflink"> <a href="/prog/res/29473.php#i29473">No.29473</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31363631313130353130')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('29473')" title="Report Thread 29473"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/prog/res/29473.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="29473" data-thread="29473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D1E8CD; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('progthread29473');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1377327412974.png"> 1377327412974.png </a> -(<em>30409 B, 400x468</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgprog31363631313130353130" target="_blank" href="/prog/src/1377327412974.png"> <img src="/prog/thumb/1377327412974s.jpg" alt="30409" class="thumb" /> </a>   			 <blockquote class="opcomment prog31363631313130353130">  Ive got this webcomic ive been working on, <br>and I want to make a site to put my work on, its just stuff i think is funny,<br>stupid little stories<br>how would i go about making a website? and where would i get a domain name?<br>hows that even work?<br>what computer languages would be good to know for this?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/prog/res/29473.php#29474" onclick="highlight(29474);">&gt;&gt;</a></td> <td class="reply" id="reply29474"> <a id="29474"></a> <div class="replyheader"> 									 <span class="commentpostername">Lawman Lui</span> <span class="postertrip">!FPY6fOfoDU</span> - <span class="idhighlight">Sat, 24 Aug 2013 04:50:29 EST ID:PSCcx8Xq</span> <span class="reflink">  <a href="/prog/res/29473.php#i29474">No.29474</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog33363438313730343837')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('29474', '29473')" title="Report Post 29474"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="29474" data-thread="29473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2FCF23; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1377334229591.png"> 1377334229591.png </a> -(<em>4020 B, 637x137</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/prog/src/1377334229591.png"> <img src="/prog/thumb/1377334229591s.jpg" alt="4020" class="thumb" /> </a>    <blockquote  class="prog33363438313730343837">  I&#39;ll make your website for you for 5 bitcoins   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/29473.php#29484" onclick="highlight(29484);">&gt;&gt;</a></td> <td class="reply" id="reply29484"> <a id="29484"></a> <div class="replyheader"> 									 <span class="commentpostername">Jack Fecklefine</span>  - <span class="idhighlight">Sun, 25 Aug 2013 00:14:06 EST ID:PQzGpXuE</span> <span class="reflink">  <a href="/prog/res/29473.php#i29484">No.29484</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog383433323035393338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('29484', '29473')" title="Report Post 29484"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="29484" data-thread="29473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #761BE1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog383433323035393338">  get a hosting account with cpanel and fantastico, install wordpress and use it (its easy). the host will also register a domain for you if they are any good.<br><br>This is my favorite host so far: <a href="http://underhost.com/" rel="nofollow" target="_blank">http://underhost.com/</a><br><br>fast, offshore, cheap with very quick and helpful tech support.<br><br>if you want something custom then you would probably want to learn html, css and javascript.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/29473.php#29614" onclick="highlight(29614);">&gt;&gt;</a></td> <td class="reply" id="reply29614"> <a id="29614"></a> <div class="replyheader"> 									 <span class="commentpostername">Phoebe Henningstotch</span>  - <span class="idhighlight">Sat, 07 Sep 2013 14:56:43 EST ID:cmICxTTG</span> <span class="reflink">  <a href="/prog/res/29473.php#i29614">No.29614</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31363631313130353130')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('29614', '29473')" title="Report Post 29614"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="29614" data-thread="29473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9E16B9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31363631313130353130">  bump   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/29473.php#30233" onclick="highlight(30233);">&gt;&gt;</a></td> <td class="reply" id="reply30233"> <a id="30233"></a> <div class="replyheader"> 									 <span class="commentpostername">Fuck Settingdet</span>  - <span class="idhighlight">Sun, 10 Nov 2013 13:18:32 EST ID:fUL+L4As</span> <span class="reflink">  <a href="/prog/res/29473.php#i30233">No.30233</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31333536313032313538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30233', '29473')" title="Report Post 30233"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30233" data-thread="29473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #709A48; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31333536313032313538">  just use tumblr and focus on making a good comic. nobody cares about the website itself as long as it has good content, is easy to browse (&quot;first, prev, next, last&quot; and maybe tagging what the individual stories are about) and not overly full of annoying ads. also remember to put a meaningful but non-spoiler title for each. on tumblr, first line of body text is used as title. find a free theme you like.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="progthread30151"> <div class="thread_header"> <a id="30151"></a> <span class="filetitle">challenge</span>  <span class="inbetween"> by </span> <span class="postername">Nigger Sellyridge</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 03 Nov 2013 15:07:49 EST ID:RLtbb1Mo</span></span>  <span class="reflink"> <a href="/prog/res/30151.php#i30151">No.30151</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31313234383133313033')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('30151')" title="Report Thread 30151"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/prog/res/30151.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30151" data-thread="30151"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #64390A; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('progthread30151');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1383509269213.jpg"> 1383509269213.jpg </a> -(<em>72053 B, 536x800</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgprog31313234383133313033" target="_blank" href="/prog/src/1383509269213.jpg"> <img src="/prog/thumb/1383509269213s.jpg" alt="72053" class="thumb" /> </a>   			 <blockquote class="opcomment prog31313234383133313033">  There is a row of n cards. Each one has a number x_i on it, where i ranges from 1 to n. Initially all the cards are face down. Your goal is to find a local minimum: that is, a card i whose number is less than or equal to those of its neighbors, x_(i-1) &gt;= x_i &lt;= x_(i+1). The first and last cards can also be local minima, and they only have one neighbor to compare to. There can be many local minima, but you are only responsible for finding one of them.<br>Obviously you can solve this problem by turning over all n cards, and scanning through them. However, show that you can find such a minimum by turning over only O(log n) cards.<br><br>prof gave us this challenge problem for bonus and I am having trouble coming up with a solution. How would I go about solving this? I have a hunch that there is no O(log n) solution but I can&#39;t prove it   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/prog/res/30151.php#30154" onclick="highlight(30154);">&gt;&gt;</a></td> <td class="reply" id="reply30154"> <a id="30154"></a> <div class="replyheader"> 									 <span class="commentpostername">Nathaniel Gonderstore</span>  - <span class="idhighlight">Sun, 03 Nov 2013 18:32:19 EST ID:gLfws0AG</span> <span class="reflink">  <a href="/prog/res/30151.php#i30154">No.30154</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31333233373832333432')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30154', '30151')" title="Report Post 30154"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30154" data-thread="30151"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CA63C9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1383521539899.jpg"> 1383521539899.jpg </a> -(<em>162136 B, 1600x1043</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/prog/src/1383521539899.jpg"> <img src="/prog/thumb/1383521539899s.jpg" alt="162136" class="thumb" /> </a>    <blockquote  class="prog31333233373832333432">  I&#39;m pretty sure there is always a local minimum in any sequence of number. I don&#39;t want to prove it but you can certainly do it by induction.<br><br>Pick the middle number in your row. If it&#39;s a local minimum, return. Otherwise, check what the &quot;slope&quot; is. If it&#39;s N-1 &lt; N &lt; N+1 (positive), you know there will be a local minimum to your left. Check the middle number of your left part. If the slope is positive, same case, the local minimum is in the newest left part. If it&#39;s negative, the local minimum is somewhere in between.<br>Rinse and repeat. Divide and conquer algorithm = O(log n)<br><br>The worst case is when the row is sorted, and a sorted row is actually very useful, thanks to dichotomic search. It helps to see the sequence as a function graph. I&#39;m not sure if I made any sense.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30151.php#30155" onclick="highlight(30155);">&gt;&gt;</a></td> <td class="reply" id="reply30155"> <a id="30155"></a> <div class="replyheader"> 									 <span class="commentpostername">Nathaniel Gonderstore</span>  - <span class="idhighlight">Sun, 03 Nov 2013 18:38:15 EST ID:gLfws0AG</span> <span class="reflink">  <a href="/prog/res/30151.php#i30155">No.30155</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31333233373832333432')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30155', '30151')" title="Report Post 30155"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30155" data-thread="30151"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B3F2BF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31333233373832333432">  <a href = "/prog/res/30151.php#30154" onclick = "highlight(30154)">&gt;&gt;30154</a><br>Should&#39;ve put the algorithm in spoiler tags, sorry.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30151.php#30158" onclick="highlight(30158);">&gt;&gt;</a></td> <td class="reply" id="reply30158"> <a id="30158"></a> <div class="replyheader"> 									 <span class="commentpostername">Jenny Dengerbudging</span>  - <span class="idhighlight">Mon, 04 Nov 2013 00:32:59 EST ID:4wql24nm</span> <span class="reflink">  <a href="/prog/res/30151.php#i30158">No.30158</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31323736343932363337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30158', '30151')" title="Report Post 30158"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30158" data-thread="30151"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EE7ED6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31323736343932363337">  <a href = "/prog/res/30151.php#30154" onclick = "highlight(30154)">&gt;&gt;30154</a><br>You are assuming the cards are sorted. OP needs to answer that for us. I&#39;m assuming they aren&#39;t because then a binary search alg would work.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30151.php#30159" onclick="highlight(30159);">&gt;&gt;</a></td> <td class="reply" id="reply30159"> <a id="30159"></a> <div class="replyheader"> 									 <span class="commentpostername">Jenny Dengerbudging</span>  - <span class="idhighlight">Mon, 04 Nov 2013 00:51:31 EST ID:4wql24nm</span> <span class="reflink">  <a href="/prog/res/30151.php#i30159">No.30159</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31323736343932363337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30159', '30151')" title="Report Post 30159"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30159" data-thread="30151"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #96C05C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31323736343932363337">  <a href = "/prog/res/30151.php#30158" onclick = "highlight(30158)">&gt;&gt;30158</a><br>Actually, nevermind. I think your alg works even if it isn&#39;t sorted.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30151.php#30161" onclick="highlight(30161);">&gt;&gt;</a></td> <td class="reply" id="reply30161"> <a id="30161"></a> <div class="replyheader"> 									 <span class="commentpostername">Simon Blabblefuck</span>  - <span class="idhighlight">Mon, 04 Nov 2013 09:00:02 EST ID:gLfws0AG</span> <span class="reflink">  <a href="/prog/res/30151.php#i30161">No.30161</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31333233373832333432')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30161', '30151')" title="Report Post 30161"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30161" data-thread="30151"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EE68A3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31333233373832333432">  <a href = "/prog/res/30151.php#30158" onclick = "highlight(30158)">&gt;&gt;30158</a><br>If the cards were sorted, you would just have to return the first (or last) card.<br>As I said, the worst case scenario is if the cards were sorted, but they&#39;re not.<br><br>&gt;&gt;30156<br>The cards are not sorted because that would be stupid.<br>The number are not sequential because that would make the = in the &gt;= and &lt;= irrelevant.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="progthread30210"> <div class="thread_header"> <a id="30210"></a> <span class="filetitle">Oops</span>  <span class="inbetween"> by </span> <span class="postername">Hamilton Driddlefat</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 07 Nov 2013 20:11:14 EST ID:4XPiz7U+</span></span>  <span class="reflink"> <a href="/prog/res/30210.php#i30210">No.30210</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31333736373733333936')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('30210')" title="Report Thread 30210"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/prog/res/30210.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30210" data-thread="30210"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0013A3; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('progthread30210');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1383873074460.jpg"> 1383873074460.jpg </a> -(<em>100988 B, 500x346</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgprog31333736373733333936" target="_blank" href="/prog/src/1383873074460.jpg"> <img src="/prog/thumb/1383873074460s.jpg" alt="100988" class="thumb" /> </a>   			 <blockquote class="opcomment prog31333736373733333936">  I have blagged I could make a website for a band, I know the bare basics of html but how can I make a site that looks halfway decent with verrrry little knowledge? Help me not look like an ass 420chan!   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/prog/res/30210.php#30212" onclick="highlight(30212);">&gt;&gt;</a></td> <td class="reply" id="reply30212"> <a id="30212"></a> <div class="replyheader"> 									 <span class="commentpostername">Martha Cogglesteck</span>  - <span class="idhighlight">Thu, 07 Nov 2013 21:08:03 EST ID:SxBV6bcN</span> <span class="reflink">  <a href="/prog/res/30210.php#i30212">No.30212</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31353434383832333236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30212', '30210')" title="Report Post 30212"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30212" data-thread="30210"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A6590F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31353434383832333236">  &gt;&gt;30211<br>Exactly this. Wordpress is what I would recommend.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30210.php#30213" onclick="highlight(30213);">&gt;&gt;</a></td> <td class="reply" id="reply30213"> <a id="30213"></a> <div class="replyheader"> 									 <span class="commentpostername">Betsy Blathercocke</span>  - <span class="idhighlight">Thu, 07 Nov 2013 21:10:40 EST ID:88CZemHK</span> <span class="reflink">  <a href="/prog/res/30210.php#i30213">No.30213</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog33343732383439393239')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30213', '30210')" title="Report Post 30213"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30213" data-thread="30210"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #718472; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1383876640016.jpg"> 1383876640016.jpg </a> -(<em>1106119 B, 2000x2000</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/prog/src/1383876640016.jpg"> <img src="/prog/thumb/1383876640016s.jpg" alt="1106119" class="thumb" /> </a>    <blockquote  class="prog33343732383439393239">  <a href = "/prog/res/30210.php" onclick = "highlight(30210)">&gt;&gt;30210</a><br><br><a href="http://getbootstrap.com/" rel="nofollow" target="_blank">http://getbootstrap.com/</a><br><br>In the future, don&#39;t let your mouth write checks your brain can&#39;t cash, fgt.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="progthread30116"> <div class="thread_header"> <a id="30116"></a> <span class="filetitle">HTML buttons</span>  <span class="inbetween"> by </span> <span class="postername">George Goodforth</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 31 Oct 2013 00:55:49 EST ID:ocaiFzP4</span></span>  <span class="reflink"> <a href="/prog/res/30116.php#i30116">No.30116</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog32313935343538323932')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('30116')" title="Report Thread 30116"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/prog/res/30116.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30116" data-thread="30116"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BDFF55; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('progthread30116');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1383195349993.jpg"> 1383195349993.jpg </a> -(<em>40689 B, 720x480</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgprog32313935343538323932" target="_blank" href="/prog/src/1383195349993.jpg"> <img src="/prog/thumb/1383195349993s.jpg" alt="40689" class="thumb" /> </a>   			 <blockquote class="opcomment prog32313935343538323932">  so i have a for loop which displays strings out of a session variable. now i want to also print a remove item button with each string &lt;complete&gt;<br>Now the clincher - I can not get the remove item button to call the method page which deletes the item and I believe it has to do with the fact that I am trying to save a variable in the hyperlink to another site.<br>Is there a way to send aditional data through a html button?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/prog/res/30116.php#30130" onclick="highlight(30130);">&gt;&gt;</a></td> <td class="reply" id="reply30130"> <a id="30130"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Mocklechick</span>  - <span class="idhighlight">Fri, 01 Nov 2013 12:03:02 EST ID:Gh4Pnu4g</span> <span class="reflink">  <a href="/prog/res/30116.php#i30130">No.30130</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31323831303636313630')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30130', '30116')" title="Report Post 30130"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30130" data-thread="30116"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FEE957; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31323831303636313630">  Via php yes we need code or more info plz!!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30116.php#30131" onclick="highlight(30131);">&gt;&gt;</a></td> <td class="reply" id="reply30131"> <a id="30131"></a> <div class="replyheader"> 									 <span class="commentpostername">Phyllis Hucklehan</span>  - <span class="idhighlight">Fri, 01 Nov 2013 12:45:13 EST ID:fPCLdbhw</span> <span class="reflink">  <a href="/prog/res/30116.php#i30131">No.30131</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog32393136303137393132')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30131', '30116')" title="Report Post 30131"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30131" data-thread="30116"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A17AA7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog32393136303137393132">  you can use a hidden field in your html form   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30116.php#30132" onclick="highlight(30132);">&gt;&gt;</a></td> <td class="reply" id="reply30132"> <a id="30132"></a> <div class="replyheader"> 									 <span class="commentpostername">Ernest Shakecocke</span>  - <span class="idhighlight">Fri, 01 Nov 2013 21:20:13 EST ID:kv8bxsSs</span> <span class="reflink">  <a href="/prog/res/30116.php#i30132">No.30132</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31323836363434393930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30132', '30116')" title="Report Post 30132"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30132" data-thread="30116"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D13CF2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1383355213995.jpg"> 1383355213995.jpg </a> -(<em>551489 B, 2448x3264</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/prog/src/1383355213995.jpg"> <img src="/prog/thumb/1383355213995s.jpg" alt="551489" class="thumb" /> </a>    <blockquote  class="prog31323836363434393930">  <a href = "/prog/res/30116.php#30131" onclick = "highlight(30131)">&gt;&gt;30131</a><br>OP is being intentionally vague so this might not apply, but:<br><br>you can do this, but you shouldn&#39;t get in the habit of allowing the client control over any &quot;important&quot; data.<br><br>for example, in the days of web 1.0 some internet storefronts stored the price of an item for sale in a hidden field.  it was trivial to alter the code to send a price of $0.01 instead, and this happened for real more than once.<br><br>for a one-off project it doesn&#39;t matter, but in production you must manage important state on the server.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30116.php#30173" onclick="highlight(30173);">&gt;&gt;</a></td> <td class="reply" id="reply30173"> <a id="30173"></a> <div class="replyheader"> 									 <span class="commentpostername">Alice Fimmlened</span>  - <span class="idhighlight">Tue, 05 Nov 2013 00:22:57 EST ID:jFPn5zpy</span> <span class="reflink">  <a href="/prog/res/30116.php#i30173">No.30173</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog383436343435363532')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30173', '30116')" title="Report Post 30173"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30173" data-thread="30116"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B7D98F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog383436343435363532">  Looks like you really need to learn about AJAX. Using a JavaScript library like jQuery will make it much easier.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="progthread30214"> <div class="thread_header"> <a id="30214"></a> <span class="filetitle">You must get this a lot</span>  <span class="inbetween"> by </span> <span class="postername">Molly Hedgewit</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 07 Nov 2013 23:21:25 EST ID:cmICxTTG</span></span>  <span class="reflink"> <a href="/prog/res/30214.php#i30214">No.30214</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31363631313130353130')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('30214')" title="Report Thread 30214"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/prog/res/30214.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30214" data-thread="30214"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #52C943; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('progthread30214');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1383884485119.jpg"> 1383884485119.jpg </a> -(<em>1405076 B, 1680x1050</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgprog31363631313130353130" target="_blank" href="/prog/src/1383884485119.jpg"> <img src="/prog/thumb/1383884485119s.jpg" alt="1405076" class="thumb" /> </a>   			 <blockquote class="opcomment prog31363631313130353130">  I want to learn how to program but I dont know which is a good starting language, <br>help me decide yes?   </blockquote>   				 				  <span class="omittedposts">  5 posts and 2 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/prog/res/30214.php#30221" onclick="highlight(30221);">&gt;&gt;</a></td> <td class="reply" id="reply30221"> <a id="30221"></a> <div class="replyheader"> 									 <span class="commentpostername">Molly Nussleson</span>  - <span class="idhighlight">Sat, 09 Nov 2013 13:58:09 EST ID:d9erR9Y/</span> <span class="reflink">  <a href="/prog/res/30214.php#i30221">No.30221</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31313133303238393039')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30221', '30214')" title="Report Post 30221"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30221" data-thread="30214"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BDA9C1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31313133303238393039">  I recommend C++. It&#39;s nice, I prefer it to python and Java.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30214.php#30223" onclick="highlight(30223);">&gt;&gt;</a></td> <td class="reply" id="reply30223"> <a id="30223"></a> <div class="replyheader"> 									 <span class="commentpostername">Samuel Blatherwater</span>  - <span class="idhighlight">Sat, 09 Nov 2013 14:29:59 EST ID:4wql24nm</span> <span class="reflink">  <a href="/prog/res/30214.php#i30223">No.30223</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31323736343932363337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30223', '30214')" title="Report Post 30223"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30223" data-thread="30214"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #12B0A2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31323736343932363337">  In all seriousness: R.<br><br>R is fun, geared toward mathematics, can link up with API real well, and can be made to make webapps.<br><br>It&#39;s flexible, and it promotes functional programming, but doesn&#39;t force you to do. It also is great for read+write, which is the majority of scripting that you will do in the beginning.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30214.php#30226" onclick="highlight(30226);">&gt;&gt;</a></td> <td class="reply" id="reply30226"> <a id="30226"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Dacklebidging</span>  - <span class="idhighlight">Sat, 09 Nov 2013 21:04:58 EST ID:4wql24nm</span> <span class="reflink">  <a href="/prog/res/30214.php#i30226">No.30226</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31323736343932363337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30226', '30214')" title="Report Post 30226"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30226" data-thread="30214"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1768D6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31323736343932363337">  &gt;&gt;30225<br>Why? It&#39;s like python but way better. I seriously write all my scripting shit in R. People also get stupidly hyped about it. It&#39;s like Hadoop , an uninformed employer actually thinks this will solve their ETL problems.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30214.php#30227" onclick="highlight(30227);">&gt;&gt;</a></td> <td class="reply" id="reply30227"> <a id="30227"></a> <div class="replyheader"> 									 <span class="commentpostername">Shit Fibbersick</span>  - <span class="idhighlight">Sat, 09 Nov 2013 23:51:20 EST ID:meRu8DQe</span> <span class="reflink">  <a href="/prog/res/30214.php#i30227">No.30227</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog33313735383130323633')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30227', '30214')" title="Report Post 30227"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30227" data-thread="30214"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CEE1F7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog33313735383130323633">  I&#39;m new too and I liked Scheme, but looks like I can use Clojure for more things since it works with Java so I started with clojure again. Maybe if sometime I learn enough it can be a little more useful.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30214.php#30228" onclick="highlight(30228);">&gt;&gt;</a></td> <td class="reply" id="reply30228"> <a id="30228"></a> <div class="replyheader"> 									 <span class="commentpostername">Lydia Sishbedging</span>  - <span class="idhighlight">Sun, 10 Nov 2013 04:07:06 EST ID:GVgf8f66</span> <span class="reflink">  <a href="/prog/res/30214.php#i30228">No.30228</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog33303933343233313932')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30228', '30214')" title="Report Post 30228"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30228" data-thread="30214"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BBFDC0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog33303933343233313932">  OP, this is the only answer that matters: the language doesn&#39;t matter.<br><br>Your first language is going to be the hardest.  There are some core principles which make a good programmer, and very few of them have anything to do with which languages you know, or how well you know them.  So here&#39;s my suggestion - ask yourself what would be fun to build or do, then figure out which language is best suited to building that kind of thing.  My first language was the internal language for the TI-83 graphing calculators, writing a rougelike game to be played on it.  Later I learned UNIX scripting, Perl, and Python, because I wanted to automate the hobby home server I had in high school.  Then, in college, I learned Java and C because everyone teaches those are college languages.  Now, I write Ruby and JavaScript for a living.<br><br>So yeah, your first language doesn&#39;t matter, nor will it dictate your future.  The only important thing is that you can find a project which can keep you interested long enough to learn the core principles of programming which will transfer anywhere.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="progthread30163"> <div class="thread_header"> <a id="30163"></a> <span class="filetitle">I have no knowledge of coding whatsoever.</span>  <span class="inbetween"> by </span> <span class="postername">Jack Smallfuck</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 04 Nov 2013 18:57:39 EST ID:Ksr9/McO</span></span>  <span class="reflink"> <a href="/prog/res/30163.php#i30163">No.30163</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31393939323635313930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('30163')" title="Report Thread 30163"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/prog/res/30163.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30163" data-thread="30163"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F8CFB9; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('progthread30163');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1383609459318.jpg"> 1383609459318.jpg </a> -(<em>67398 B, 450x600</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgprog31393939323635313930" target="_blank" href="/prog/src/1383609459318.jpg"> <img src="/prog/thumb/1383609459318s.jpg" alt="67398" class="thumb" /> </a>   			 <blockquote class="opcomment prog31393939323635313930">  Pretend I&#39;m a sentient chimp that learned english.<br>Teach me how to code.<br>Go.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/prog/res/30163.php#30165" onclick="highlight(30165);">&gt;&gt;</a></td> <td class="reply" id="reply30165"> <a id="30165"></a> <div class="replyheader"> 									 <span class="commentpostername">Rebecca Bivingbanks</span>  - <span class="idhighlight">Mon, 04 Nov 2013 19:17:24 EST ID:D0GuSL2t</span> <span class="reflink">  <a href="/prog/res/30163.php#i30165">No.30165</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31313530343336353237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30165', '30163')" title="Report Post 30165"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30165" data-thread="30163"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8BDC4B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31313530343336353237">  <a href = "/prog/res/30163.php" onclick = "highlight(30163)">&gt;&gt;30163</a><br><a href="http://www.codecademy.com/" rel="nofollow" target="_blank">http://www.codecademy.com/</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30163.php#30174" onclick="highlight(30174);">&gt;&gt;</a></td> <td class="reply" id="reply30174"> <a id="30174"></a> <div class="replyheader"> 									 <span class="commentpostername">Eliza Chundlehod</span>  - <span class="idhighlight">Tue, 05 Nov 2013 02:54:33 EST ID:IyNbkVmG</span> <span class="reflink">  <a href="/prog/res/30163.php#i30174">No.30174</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31393939323538373137')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30174', '30163')" title="Report Post 30174"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30174" data-thread="30163"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #541E3C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1383638073530.jpg"> 1383638073530.jpg </a> -(<em>52518 B, 436x620</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/prog/src/1383638073530.jpg"> <img src="/prog/thumb/1383638073530s.jpg" alt="52518" class="thumb" /> </a>    <blockquote  class="prog31393939323538373137">  <a href = "/prog/res/30163.php#30165" onclick = "highlight(30165)">&gt;&gt;30165</a><br>It tells me to Update my browser.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30163.php#30176" onclick="highlight(30176);">&gt;&gt;</a></td> <td class="reply" id="reply30176"> <a id="30176"></a> <div class="replyheader"> 									 <span class="commentpostername">Cedric Saddleham</span>  - <span class="idhighlight">Tue, 05 Nov 2013 07:22:48 EST ID:fUL+L4As</span> <span class="reflink">  <a href="/prog/res/30163.php#i30176">No.30176</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31333536313032313538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30176', '30163')" title="Report Post 30176"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30176" data-thread="30163"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CF1D41; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31333536313032313538">  <a href = "/prog/res/30163.php#30174" onclick = "highlight(30174)">&gt;&gt;30174</a><br><a href="http://www.mozilla.org/en-US/firefox/new/" rel="nofollow" target="_blank">http://www.mozilla.org/en-US/firefox/new/</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30163.php#30502" onclick="highlight(30502);">&gt;&gt;</a></td> <td class="reply" id="reply30502"> <a id="30502"></a> <div class="replyheader"> 									 <span class="commentpostername">Fanny Cublinglot</span>  - <span class="idhighlight">Tue, 10 Dec 2013 08:41:57 EST ID:DJYnPPVt</span> <span class="reflink">  <a href="/prog/res/30163.php#i30502">No.30502</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog32383839333630333839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30502', '30163')" title="Report Post 30502"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30502" data-thread="30163"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AB3F98; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog32383839333630333839">  <a href = "/prog/res/30163.php" onclick = "highlight(30163)">&gt;&gt;30163</a><br><br>How about you pretend that you&#39;re a responsible adult and take some initiative in the learning process?   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="progthread30168"> <div class="thread_header"> <a id="30168"></a> <span class="filetitle">GNU/Linux application for web-development (HTML5, JS, CSS)</span>  <span class="inbetween"> by </span> <span class="postername">Sophie Crankinhall</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 04 Nov 2013 20:16:27 EST ID:nuVYItAE</span></span>  <span class="reflink"> <a href="/prog/res/30168.php#i30168">No.30168</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog373733313533353632')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('30168')" title="Report Thread 30168"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/prog/res/30168.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30168" data-thread="30168"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2B03FD; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('progthread30168');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1383614187171.png"> 1383614187171.png </a> -(<em>1026716 B, 1600x1200</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgprog373733313533353632" target="_blank" href="/prog/src/1383614187171.png"> <img src="/prog/thumb/1383614187171s.jpg" alt="1026716" class="thumb" /> </a>   			 <blockquote class="opcomment prog373733313533353632">  Ok so listen up for a second guys<br><br>I&#39;m pretty fresh to GNU/Linux, about 4 months or so I believe. <br>I have decided on a programming language: Python.<br>I have decided on a text editor: Vim.<br>But I have one gaping hole left, and that is the application for my web development. To be clear, I don&#39;t know why, but I feel like I&#39;d be most comfortable with two separate applications handling my programming (Vim) and my web development (_?_).<br><br>I have searched around and what I&#39;m left with is basically gedit with a good extension (Snippets..?) or these IDE&#39;s (that I for some reason get the feel of bloat..)  Aptana, Komodo, Bluefish, KompoZer, SeaMonkey. I do not know though, that&#39;s why I&#39;m asking. Any of those could be great. <br><br><blockquote class = "unkfunc">&gt;TL;DR Give me your tips on best web development extension for gedit, or the best web development-focused IDE on GNU/Linux.</blockquote>   </blockquote>   				 				  <span class="omittedposts">   2 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/prog/res/30168.php#30178" onclick="highlight(30178);">&gt;&gt;</a></td> <td class="reply" id="reply30178"> <a id="30178"></a> <div class="replyheader"> 									 <span class="commentpostername">Cedric Saddleham</span>  - <span class="idhighlight">Tue, 05 Nov 2013 07:41:52 EST ID:fUL+L4As</span> <span class="reflink">  <a href="/prog/res/30168.php#i30178">No.30178</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31333536313032313538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30178', '30168')" title="Report Post 30178"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30178" data-thread="30168"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B01D85; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31333536313032313538">  <a href = "/prog/res/30168.php#30171" onclick = "highlight(30171)">&gt;&gt;30171</a><br>Don&#39;t listen to this guy. Stick with Vim.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30168.php#30179" onclick="highlight(30179);">&gt;&gt;</a></td> <td class="reply" id="reply30179"> <a id="30179"></a> <div class="replyheader"> 									 <span class="commentpostername">Augustus Bonkinstod</span>  - <span class="idhighlight">Tue, 05 Nov 2013 08:34:47 EST ID:vhgZIlcV</span> <span class="reflink">  <a href="/prog/res/30168.php#i30179">No.30179</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31353932363038373934')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30179', '30168')" title="Report Post 30179"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30179" data-thread="30168"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BF2436; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31353932363038373934">  Haven&#39;t done any web dev, but what are you looking for in an IDE?<br>All I can think of are snippets and automatic code checking, which can (I suppose) be done with ultisnips and jslint plugins in vim.<br><br>I&#39;m not rooting for vim, but I&#39;m puzzled why would you want to learn another editor if you&#39;re happy with it for most of your work.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30168.php#30186" onclick="highlight(30186);">&gt;&gt;</a></td> <td class="reply" id="reply30186"> <a id="30186"></a> <div class="replyheader"> 									 <span class="commentpostername">kix</span> <span class="postertrip">!!DwAJ8WQQ</span> - <span class="idhighlight">Tue, 05 Nov 2013 15:19:23 EST ID:dTNzxY6H</span> <span class="reflink">  <a href="/prog/res/30168.php#i30186">No.30186</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31383339313035303536')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30186', '30168')" title="Report Post 30186"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30186" data-thread="30168"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #015767; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31383339313035303536">  I find both Kate and Geany to be nice, simple GUI text editors with lots of built in knowledge about syntax and autocompletion (as well as features I never realised they had until I needed them). I&#39;d avoid bloaty, crappy IDEs, of which there are plenty, and stick to a well-featured text editor. Nothing wrong with Vim; redunkulously powerful once you master the keyboard shortcuts.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30168.php#30200" onclick="highlight(30200);">&gt;&gt;</a></td> <td class="reply" id="reply30200"> <a id="30200"></a> <div class="replyheader"> 									 <span class="commentpostername">Shitting Sosslefoot</span>  - <span class="idhighlight">Wed, 06 Nov 2013 19:14:28 EST ID:nuVYItAE</span> <span class="reflink">  <a href="/prog/res/30168.php#i30200">No.30200</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog373733313533353632')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30200', '30168')" title="Report Post 30200"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30200" data-thread="30168"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F719CD; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1383783268213.jpg"> 1383783268213.jpg </a> -(<em>586235 B, 1680x1050</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/prog/src/1383783268213.jpg"> <img src="/prog/thumb/1383783268213s.jpg" alt="586235" class="thumb" /> </a>    <blockquote  class="prog373733313533353632">  Okey, I decided on Vim for both subjects. <br><br>Now do you guys have any advice on really good Vim-beginner-books which you&#39;ve read? <br><br>Will start learning tomorrow. I feel a bit jittery actually. I usually go through shit way too deep into detail before lift-off and I rarely come far in small goals here and there but I&#39;ve never felt such a drive and want as I do in Vim, Python, GNU/Linux and FOSS in general. I love it. And I love all of you who are on this similar path.<br><br>Thanks.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/prog/res/30168.php#30202" onclick="highlight(30202);">&gt;&gt;</a></td> <td class="reply" id="reply30202"> <a id="30202"></a> <div class="replyheader"> 									 <span class="commentpostername">Nicholas Bunhall</span>  - <span class="idhighlight">Thu, 07 Nov 2013 05:42:53 EST ID:6Rj2RXu2</span> <span class="reflink">  <a href="/prog/res/30168.php#i30202">No.30202</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog33353831313438313936')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30202', '30168')" title="Report Post 30202"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30202" data-thread="30168"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #593DEB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog33353831313438313936">  &gt;&gt;30201<br>Is that really enough though? I&#39;ve heard so many horror-stories about Vim and Emacs, I think I&#39;d be less nervous with some kind of book to help me out along the way.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="progthread30128"> <div class="thread_header"> <a id="30128"></a> <span class="filetitle">Session Variables</span>  <span class="inbetween"> by </span> <span class="postername">Alice Dattingshit</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 31 Oct 2013 22:20:17 EST ID:ocaiFzP4</span></span>  <span class="reflink"> <a href="/prog/res/30128.php#i30128">No.30128</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog32313935343538323932')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('30128')" title="Report Thread 30128"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/prog/res/30128.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30128" data-thread="30128"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FE4FD1; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('progthread30128');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/prog/src/1383272417950.jpg"> 1383272417950.jpg </a> -(<em>34098 B, 720x480</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgprog32313935343538323932" target="_blank" href="/prog/src/1383272417950.jpg"> <img src="/prog/thumb/1383272417950s.jpg" alt="34098" class="thumb" /> </a>   			 <blockquote class="opcomment prog32313935343538323932">  anyone know how i would go about deleting one using a HTML button?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/prog/res/30128.php#30129" onclick="highlight(30129);">&gt;&gt;</a></td> <td class="reply" id="reply30129"> <a id="30129"></a> <div class="replyheader"> 									 <span class="commentpostername">Cedric Gollerpag</span>  - <span class="idhighlight">Thu, 31 Oct 2013 22:39:21 EST ID:k8+nAE03</span> <span class="reflink">  <a href="/prog/res/30128.php#i30129">No.30129</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('prog31323831373635353330')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('30129', '30128')" title="Report Post 30129"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="30129" data-thread="30128"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6AAB07; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="prog31323831373635353330">  Use javascript so that clicking the button fires off an ajax post to a php script on the server. Server loads session variables, sees the request from button and does unset($GLOBALS[_SESSION][&#39;whatever&#39;]);.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://insomniacgamers.net"><img src="http://cdn.420chan.org/sp/i.png"></a>
		</div>
				<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/prog/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="prog" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">  <a href="/prog/15.php">&lt;&lt;Last</a>   <span style="font-size: +1;">Pages</span>   <a href="/prog/17.php">Next&gt;&gt;</a>  <br />   <a href="/prog/index.php">0</a>     <a href="/prog/1.php">1</a>     <a href="/prog/2.php">2</a>     <a href="/prog/3.php">3</a>     <a href="/prog/4.php">4</a>     <a href="/prog/5.php">5</a>     <a href="/prog/6.php">6</a>     <a href="/prog/7.php">7</a>     <a href="/prog/8.php">8</a>     <a href="/prog/9.php">9</a>     <a href="/prog/10.php">10</a>     <a href="/prog/11.php">11</a>     <a href="/prog/12.php">12</a>     <a href="/prog/13.php">13</a>     <a href="/prog/14.php">14</a>     <a href="/prog/15.php">15</a>      16    <a href="/prog/17.php">17</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3855201.php' class='boardlink'>Thread 3855201</a></span>
		<p>He never should've dropped Aksana.

While under her managerial services, Cesaro came to the WWE an... <a href='/wooo/res/3855201.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='cd' src='/static/images/board_icons/cd_icon_32.png' />
		<span class='byline'>Transgender Discussion - <a href='/cd/res/375763.php' class='boardlink'>Thread 375763</a></span>
		<p>>>375763
just be happy that things are happening it'll be here sooner than you can think just get b... <a href='/cd/res/375763.php' class='boardlink'>&#8629;</a></p></li>
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

