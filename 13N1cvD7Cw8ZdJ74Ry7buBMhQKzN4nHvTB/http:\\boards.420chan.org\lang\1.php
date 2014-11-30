http://boards.420chan.org/lang/1.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Thu, 24 Jul 2014 01:04:15 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> World Languages - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/lang_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/lang_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/lang/1.php';
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
	 <div id="header"> <div id="board_logo"> <a href="/lang/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/lang_icon_64.png" alt="/lang/ Icon" /> <p class="board_title_block"> <span class="board_name">/lang/</span> <span class="board_title">World Languages</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
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
	 <!--  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/lang/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="lang" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />     <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>  <tr> <td class="postblock">Name</td> <td> <input title="Name" type="text" name="field1" style="width:224px;" /> <div class="tooltip">  You can leave this blank to post anonymously, or you can create a Tripcode by using the float <b>Name#Password</b> </div>					 </td> </tr>    <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div>  <script type="text/javascript">set_inputs("postform")</script> <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 3000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> <li>This is a work-safe board. Posting adult images is forbidden.</li>			  </ul> </div> <hr style="margin-bottom:2px;" /> 		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 <hr style="margin-top:2px;" />   <form id="delform" action="/lang/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="lang" />    <div id="langthread11512"> <div class="thread_header"> <a id="11512"></a> <span class="filetitle">cum</span>  <span class="inbetween"> by </span> <span class="postername">Nigger Brinnerhall</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 01 Jul 2014 01:10:30 EST ID:bajoLiRG</span></span>  <span class="reflink"> <a href="/lang/res/11512.php#i11512">No.11512</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang32323633303934313435')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11512')" title="Report Thread 11512"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11512.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11512" data-thread="11512"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A36FFB; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11512');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1404191430337.jpg"> 1404191430337.jpg </a> -(<em>110055 B, 380x540</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang32323633303934313435" target="_blank" href="/lang/src/1404191430337.jpg"> <img src="/lang/thumb/1404191430337s.jpg" alt="110055" class="thumb" /> </a>   			 <blockquote class="opcomment lang32323633303934313435">  is there a name for the &quot;a&quot; to &quot;er&quot; sound for words that end with an a? for example, idea becomes ideer, noriega becomes norieger, alaska becomes alasker. i&#39;ve noticed it more in australian and british accents.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11512.php#11513" onclick="highlight(11513);">&gt;&gt;</a></td> <td class="reply" id="reply11513"> <a id="11513"></a> <div class="replyheader"> 									 <span class="commentpostername">Fucking Gonnerton</span>  - <span class="idhighlight">Tue, 01 Jul 2014 06:45:09 EST ID:HJKlShZi</span> <span class="reflink">  <a href="/lang/res/11512.php#i11513">No.11513</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31343733383735303735')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11513', '11512')" title="Report Post 11513"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11513" data-thread="11512"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #45B2FB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31343733383735303735">  The problem with your question is because we don&#39;t know where you are from we don&#39;t know if you are talking about the schwa sound /ə/ when you say &quot;er&quot; or if you are talking about /r/ <br>I&#39;m sure there&#39;s a name for it. Both for that specific shift and a more general word for when words that originally were pronounced the same start changing. Don&#39;t know the words though.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11512.php#11515" onclick="highlight(11515);">&gt;&gt;</a></td> <td class="reply" id="reply11515"> <a id="11515"></a> <div class="replyheader"> 									 <span class="commentpostername">Cyril Trotfuck</span>  - <span class="idhighlight">Tue, 01 Jul 2014 08:00:40 EST ID:NqJL1ymG</span> <span class="reflink">  <a href="/lang/res/11512.php#i11515">No.11515</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363630313631363733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11515', '11512')" title="Report Post 11515"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11515" data-thread="11512"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #788372; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31363630313631363733">  The process of turning the &quot;a&quot; to &quot;er&quot; is called the intrusive r, and it&#39;s a form of hypercorrection.<br><br>English accents are split between rhotic and non-rhotic, this happening I think in the late 1700s to the early 1800s. Non rhotic accents, pronouncing *all* er sounds as a spread whereever the English were dominant and populous barring areas with large Celtic populations; so most British territories of the time and later, as well as Boston, and barring places like the US, the Gaeltacht, or Canada. But as speakers where the er sound is always a came into contact with rhotic speakers on a frequent basis - e.g. the British dealing with multiple accents, Austrailians getting American tv shows imported, Bostonians with anyone else in America - they added it back in, but because the brain has them stored as allophones (since they merged) it applies to a sounds that weren&#39;t er sounds before. Wiki will probably tell you better.<br><br><br>Generally the sounds you&#39;re talking about are the open back vowel, which in the IPA looks like the open a in handwriting (as opposed to the a with the hook on the top), or the mid central vowel (looking like an upside down  e) alternating with the mid central rhoticised vowel or the front open-mid rhoticized vowel ( appear each as the upside down e or a small, capital cursive e (or backwards round 3) with tiny hooks coming off the sides looking like the not stick part of a lowercase r, respectively).<br><br>I can&#39;t keyboard right now because arch keeps destroying my custom keyboard layouts when I update and I&#39;m too tired and salty to not be lazy.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11512.php#11516" onclick="highlight(11516);">&gt;&gt;</a></td> <td class="reply" id="reply11516"> <a id="11516"></a> <div class="replyheader"> 									 <span class="commentpostername">Ernest Grimstock</span>  - <span class="idhighlight">Wed, 02 Jul 2014 14:25:01 EST ID:qizTVHik</span> <span class="reflink">  <a href="/lang/res/11512.php#i11516">No.11516</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang383530393831393136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11516', '11512')" title="Report Post 11516"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11516" data-thread="11512"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9B16DC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang383530393831393136">  <a href = "/lang/res/11512.php#11515" onclick = "highlight(11515)">&gt;&gt;11515</a><br><br>I found this interesting, but just wanted to say I anticipated a smiley face in your post but I guess I just saw the &#39;3)&#39; in the corner of my eye.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11504"> <div class="thread_header"> <a id="11504"></a> <span class="filetitle">Learning Norwegian</span>  <span class="inbetween"> by </span> <span class="postername">Frederick Clisslesag</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 29 Jun 2014 13:53:18 EST ID:slZc18Ic</span></span>  <span class="reflink"> <a href="/lang/res/11504.php#i11504">No.11504</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31333137303031363435')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11504')" title="Report Thread 11504"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11504.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11504" data-thread="11504"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A5C724; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11504');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1404064398908.jpg"> 1404064398908.jpg </a> -(<em>86366 B, 544x400</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang31333137303031363435" target="_blank" href="/lang/src/1404064398908.jpg"> <img src="/lang/thumb/1404064398908s.jpg" alt="86366" class="thumb" /> </a>   			 <blockquote class="opcomment lang31333137303031363435">  What are some good resources/textbooks for learning Norwegian? I know the basics, and would like to learn more about the grammar, as well as some basic vocabulary.   </blockquote>   				 				     <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11473"> <div class="thread_header"> <a id="11473"></a> <span class="filetitle">independend language-learning methods thread</span>  <span class="inbetween"> by </span> <span class="postername">camwhore</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 15 Jun 2014 22:28:33 EST ID:Q1OHbBLY</span></span>  <span class="reflink"> <a href="/lang/res/11473.php#i11473">No.11473</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang32393738393830313234')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11473')" title="Report Thread 11473"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11473.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11473" data-thread="11473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4877E5; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11473');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1402885713286.jpg"> 1402885713286.jpg </a> -(<em>73575 B, 480x360</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang32393738393830313234" target="_blank" href="/lang/src/1402885713286.jpg"> <img src="/lang/thumb/1402885713286s.jpg" alt="73575" class="thumb" /> </a>   			 <blockquote class="opcomment lang32393738393830313234">  Hello.<br><br>I&#39;m a Brazilian who taught himself how to speak Finnish in a little under 3 years. I&#39;m not fluent, but I am fluent enough to communicate and be understood. I made this thread on 4ch0ng&#39;s /int/ (aka /b/ with flags), but no one got interested. <br><br>I&#39;d like to make this thread for those who are learning a language by themselves and maybe need a little help. Ask whatever you want and I&#39;ll see if I can help.<br><br>For those who are specifically interested in Finnish, I&#39;ll leave here some of the material and method I used to learn Finnish. However, I make it clear already that what fueled my motivation was an obsession I had with the language. Something almost autistic. So don&#39;t ask me where I get my motivation from because I can&#39;t help with that. <br><br>--<br><br>Handy consultation grammar book:<br><a href="http://gendocs.ru/docs/23/22448/conv_1/file1.pdf" rel="nofollow" target="_blank">http://gendocs.ru/docs/23/22448/conv_1/file1.pdf</a><br><br>More grammar:<br><a href="http://www.uusikielemme.fi/grammar.html" rel="nofollow" target="_blank">http://www.uusikielemme.fi/grammar.html</a>  <div class="abbrev"> Comment too long. Click <a href="/lang/res/11473.php">here</a> to view the full text. </div>   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11473.php#11474" onclick="highlight(11474);">&gt;&gt;</a></td> <td class="reply" id="reply11474"> <a id="11474"></a> <div class="replyheader"> 									 <span class="commentpostername">Fanny Tootstone</span>  - <span class="idhighlight">Mon, 16 Jun 2014 04:44:07 EST ID:PEXXoxBv</span> <span class="reflink">  <a href="/lang/res/11473.php#i11474">No.11474</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang32343638323437303535')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11474', '11473')" title="Report Post 11474"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11474" data-thread="11473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E1AEEE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang32343638323437303535">  <a href = "/lang/res/11473.php" onclick = "highlight(11473)">&gt;&gt;11473</a><br>Yeah, well, thing is, motivation is the single most important factor in language learning. Finding actual means and methods is the easiest part, no matter how hard the language is — well, provided that it&#39;s not a totally obscure/ancient/dying  language. <br><br>And in order to maintain motivation one must always seek out interesting content to work with, and not limit onself to textbooks (that almost always have very boring content). <br>Now, Lingq.com has a lot of flaws, but I definitely like its core concept that consists in merely assisting you in text absorption, by providing you with quick vocabulary/flashcards and word highlighting tool. Another great way to use this website is to get the LingQ Firefox extension — that way you can, say, open an interesting wikipedia article and then export it to LingQ, while staying on the original page. Only works if you have the paid account, otherwise your vocabulary size will be severely limited, which pretty much makes the entire service useless. It&#39;s $10 per month.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11473.php#11480" onclick="highlight(11480);">&gt;&gt;</a></td> <td class="reply" id="reply11480"> <a id="11480"></a> <div class="replyheader"> 									 <span class="commentpostername">Martha Niggerdock</span>  - <span class="idhighlight">Tue, 17 Jun 2014 19:18:54 EST ID:6Y0p17FR</span> <span class="reflink">  <a href="/lang/res/11473.php#i11480">No.11480</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363631383133353530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11480', '11473')" title="Report Post 11480"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11480" data-thread="11473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #841F9E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31363631383133353530">  What resources do you guys use? I&#39;d like to learn Thai for various reasons. I&#39;m a native English speaker and don&#39;t know any other languages. I&#39;ve taken Spanish and French classes but I didn&#39;t do so hot.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11473.php#11488" onclick="highlight(11488);">&gt;&gt;</a></td> <td class="reply" id="reply11488"> <a id="11488"></a> <div class="replyheader"> 									 <span class="commentpostername">Charlotte Budgespear</span>  - <span class="idhighlight">Sat, 21 Jun 2014 06:46:32 EST ID:bairN3wR</span> <span class="reflink">  <a href="/lang/res/11473.php#i11488">No.11488</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31383431383234303538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11488', '11473')" title="Report Post 11488"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11488" data-thread="11473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #506FED; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31383431383234303538">  i&#39;m trying to learn german thru duolingo.com   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id=""> <div class="thread_header"> <a id="11307"></a> <span class="filetitle">Local insults</span>  <span class="inbetween"> by </span> <span class="postername">Turanj </span>  <span class="inbetween"> - <span class="idhighlight">Mon, 28 Apr 2014 16:00:11 EST ID:YfZha+8z</span></span>  <span class="reflink"> <a href="/lang/res/11307.php#i11307">No.11307</a> </span>    			 <!--  - Awesome Thread? <a href="/lang/taimaba.pl?board=lang&amp;task=vote&amp;thread=11307&amp;vote=0">No!</a> | <a href="/lang/taimaba.pl?board=lang&amp;task=vote&amp;thread=11307&amp;vote=1">Yes!</a>  -->   <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11307')" title="Report Thread 11307"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11307.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11307" data-thread="11307"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8795A7; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>-->  </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1398715211366.gif"> 1398715211366.gif </a> -(<em>325906 B, 255x162</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang343034323232383937" target="_blank" href="/lang/src/1398715211366.gif"> <img src="/lang/thumb/1398715211366s.jpg" alt="325906" class="thumb" /> </a>   			 <blockquote class="opcomment">  <a href="http://boards.420chan.org/b/res/3602430.php" rel="nofollow" target="_blank">http://boards.420chan.org/b/res/3602430.php</a><br><br>I was having a moment of thought on the fact that &#39;sucks&#39; literally means to suck a dick, so every time in daytime TV someone says &#39;this thing sucks a big fat veiny dick&#39; but people don&#39;t reocognise it as that, just as a general negative descriptive term.<br><br>So what are some good ones in your local vicinity? A pretty all-engrossing one from the UK that you yankfags may not be familiar with is &#39;gimp&#39; for someone with bad taste or poor social skills - you&#39;re a gimp mate. Probably tantamount to calling someone a bitch, although less to do with them being a pussy.<br><br>Another local par via articulate is &#39;whopper&#39;, which I&#39;m not actually sure the origins are, but its a good one to say.   </blockquote>   				 				  <span class="omittedposts">  30 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11307.php#11482" onclick="highlight(11482);">&gt;&gt;</a></td> <td class="reply" id="reply11482"> <a id="11482"></a> <div class="replyheader"> 									 <span class="commentpostername">Henry Dublinghall</span>  - <span class="idhighlight">Tue, 17 Jun 2014 23:50:01 EST ID:9jo5s9tb</span> <span class="reflink">  <a href="/lang/res/11307.php#i11482">No.11482</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31323938373432333336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11482', '11307')" title="Report Post 11482"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11482" data-thread="11307"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #02D103; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31323938373432333336">  <a href = "/lang/res/11307.php#11476" onclick = "highlight(11476)">&gt;&gt;11476</a> Oh, cool, so it&#39;s more widespread than I thought.  <br><blockquote class = "unkfunc">&gt;&quot;am budalası&quot;, lit. fool for a pussy.<br></blockquote>The Serbian language has tons and tons of Turkish words (due to being part of the Ottoman Empire for a long time), &quot;budala&quot; meaning &quot;fool&quot; is one of them, and it&#39;s used often<br><br>Also, best things about Ottoman/Turkish culture - the sweets, OH MY GOD, the sweets! Baklava, Kadaif, Halva, Tufahije... *drooooool*   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11307.php#11483" onclick="highlight(11483);">&gt;&gt;</a></td> <td class="reply" id="reply11483"> <a id="11483"></a> <div class="replyheader"> 									 <span class="commentpostername">Doris Drungerpan</span>  - <span class="idhighlight">Wed, 18 Jun 2014 16:49:52 EST ID:fBDXFwb5</span> <span class="reflink">  <a href="/lang/res/11307.php#i11483">No.11483</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31383431383330373730')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11483', '11307')" title="Report Post 11483"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11483" data-thread="11307"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A6D1D0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31383431383330373730">  <a href = "/lang/res/11307.php#11482" onclick = "highlight(11482)">&gt;&gt;11482</a><br>i hate baklava, too sweet for my taste. kadayıf and some kinds of halva are good though. but i don&#39;t know tufahije, guess that one is bosnian or sth.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11307.php#11484" onclick="highlight(11484);">&gt;&gt;</a></td> <td class="reply" id="reply11484"> <a id="11484"></a> <div class="replyheader"> 									 <span class="commentpostername">Lillian Crittingcocke</span>  - <span class="idhighlight">Thu, 19 Jun 2014 00:21:42 EST ID:9jo5s9tb</span> <span class="reflink">  <a href="/lang/res/11307.php#i11484">No.11484</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31323938373432333336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11484', '11307')" title="Report Post 11484"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11484" data-thread="11307"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E6832E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31323938373432333336">  <a href = "/lang/res/11307.php#11483" onclick = "highlight(11483)">&gt;&gt;11483</a> tufahije were also brought to Balkans during the Ottomans rule, they&#39;re originally Persian <br><br>how about turkish delights then? rose-flavored, with walnuts, alongside a turkish coffee. that&#39;s what I call pure bliss.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11307.php#11485" onclick="highlight(11485);">&gt;&gt;</a></td> <td class="reply" id="reply11485"> <a id="11485"></a> <div class="replyheader"> 									 <span class="commentpostername">Jarvis Nellybut</span>  - <span class="idhighlight">Thu, 19 Jun 2014 04:09:20 EST ID:wHsZdJTm</span> <span class="reflink">  <a href="/lang/res/11307.php#i11485">No.11485</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31353233333833333239')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11485', '11307')" title="Report Post 11485"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11485" data-thread="11307"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #72CD23; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31353233333833333239">  Most Scottish insults make reference to the genitalia or body parts, with the basic building blocks being &#39;fanny&#39; or &#39;fud&#39; (vagina), &#39;baws&#39; (testicles) and &#39;arse&#39;:<br><br>Fanny<br>Fannybaws<br>Fannyheid<br>Fannyface<br>Fudface<br>Fudheid<br>Heid the baw (reference to football)<br>Bawheid<br>Bawbag<br>Bawjaws<br>Arsehole<br>Arseheid<br>Arseface  <div class="abbrev"> Comment too long. Click <a href="/lang/res/11307.php#11485">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11307.php#11487" onclick="highlight(11487);">&gt;&gt;</a></td> <td class="reply" id="reply11487"> <a id="11487"></a> <div class="replyheader"> 									 <span class="commentpostername">Charlotte Budgespear</span>  - <span class="idhighlight">Sat, 21 Jun 2014 06:43:38 EST ID:bairN3wR</span> <span class="reflink">  <a href="/lang/res/11307.php#i11487">No.11487</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31383431383234303538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11487', '11307')" title="Report Post 11487"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11487" data-thread="11307"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AB70CC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1403347418819.jpg"> 1403347418819.jpg </a> -(<em>90678 B, 800x400</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lang/src/1403347418819.jpg"> <img src="/lang/thumb/1403347418819s.jpg" alt="90678" class="thumb" /> </a>    <blockquote  class="lang31383431383234303538">  <a href = "/lang/res/11307.php#11484" onclick = "highlight(11484)">&gt;&gt;11484</a><br>i&#39;m not much a fan of sweets actually, some fruit flavored ice cream is just ok for me. but künefe is amazing stuff. yes it&#39;s cheese inside.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11444"> <div class="thread_header"> <a id="11444"></a> <span class="filetitle">occitan</span>  <span class="inbetween"> by </span> <span class="postername">Charles Niggerfoot</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 05 Jun 2014 23:40:28 EST ID:qizTVHik</span></span>  <span class="reflink"> <a href="/lang/res/11444.php#i11444">No.11444</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang383530393831393136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11444')" title="Report Thread 11444"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11444.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11444" data-thread="11444"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2E439B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11444');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1402026028223.png"> 1402026028223.png </a> -(<em>44566 B, 600x323</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang383530393831393136" target="_blank" href="/lang/src/1402026028223.png"> <img src="/lang/thumb/1402026028223s.jpg" alt="44566" class="thumb" /> </a>   			 <blockquote class="opcomment lang383530393831393136">  Anyone fluent? Partially speak? I just want some resources. I only really know English, with some partial understanding of other languages, mostly Spanish. Anyway, seems interesting, though I&#39;m drunk. Doubt I could learn a language drunk, but sober or stoned, maybe.<br><br>Why do you or don&#39;t you speak this language?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11444.php#11459" onclick="highlight(11459);">&gt;&gt;</a></td> <td class="reply" id="reply11459"> <a id="11459"></a> <div class="replyheader"> 									 <span class="commentpostername">Hannah Tillingshaw</span>  - <span class="idhighlight">Mon, 09 Jun 2014 11:36:09 EST ID:v8HtwEYi</span> <span class="reflink">  <a href="/lang/res/11444.php#i11459">No.11459</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33343735343331363539')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11459', '11444')" title="Report Post 11459"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11459" data-thread="11444"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4D397E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang33343735343331363539">  yes you could learn a language drunk, but you have to get drunk with people who don&#39;t speak english, and you&#39;ll naturally learn to communicate.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11444.php#11468" onclick="highlight(11468);">&gt;&gt;</a></td> <td class="reply" id="reply11468"> <a id="11468"></a> <div class="replyheader"> 									 <span class="commentpostername">Rebecca Hungerham</span>  - <span class="idhighlight">Wed, 11 Jun 2014 17:26:22 EST ID:jKyKVCoU</span> <span class="reflink">  <a href="/lang/res/11444.php#i11468">No.11468</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang32393738393830323839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11468', '11444')" title="Report Post 11468"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11468" data-thread="11444"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #37ABEF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang32393738393830323839">  I speak portuguese and I heard it&#39;s pretty similar. You&#39;d be better off learning spanish or portuguese and THEN going for these more hipster romance languages.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11444.php#11486" onclick="highlight(11486);">&gt;&gt;</a></td> <td class="reply" id="reply11486"> <a id="11486"></a> <div class="replyheader"> 									 <span class="commentpostername">Hamilton Dandlefad</span>  - <span class="idhighlight">Thu, 19 Jun 2014 05:13:02 EST ID:HJKlShZi</span> <span class="reflink">  <a href="/lang/res/11444.php#i11486">No.11486</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31343733383735303735')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11486', '11444')" title="Report Post 11486"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11486" data-thread="11444"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F2E251; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31343733383735303735">  Agreed, there are a gazillion free resources for learning Spanish, you can learn it in no time. Once you are good at another latin language the very few resources available to learn Occitan will be enough, but they aren&#39;t enough to start from scratch.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11461"> <div class="thread_header"> <a id="11461"></a> <span class="filetitle">Unknown Kanji?</span>  <span class="inbetween"> by </span> <span class="postername">Shit Himmlewell</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 09 Jun 2014 22:52:53 EST ID:6c3cfOwS</span></span>  <span class="reflink"> <a href="/lang/res/11461.php#i11461">No.11461</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31323638353232373935')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11461')" title="Report Thread 11461"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11461.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11461" data-thread="11461"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #648014; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11461');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1402368773800.jpg"> 1402368773800.jpg </a> -(<em>22182 B, 116x89</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang31323638353232373935" target="_blank" href="/lang/src/1402368773800.jpg"> <img src="/lang/src/1402368773800.jpg" alt="22182" class="thumb" /> </a>   			 <blockquote class="opcomment lang31323638353232373935">  Hello, I was wondering if anyone knew what this character means for I cannot find it in my book.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11461.php#11462" onclick="highlight(11462);">&gt;&gt;</a></td> <td class="reply" id="reply11462"> <a id="11462"></a> <div class="replyheader"> 									 <span class="commentpostername">Polly Hinderlock</span>  - <span class="idhighlight">Tue, 10 Jun 2014 04:14:23 EST ID:4pGXVZso</span> <span class="reflink">  <a href="/lang/res/11461.php#i11462">No.11462</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31333735303534343135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11462', '11461')" title="Report Post 11462"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11462" data-thread="11461"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B89400; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31333735303534343135">  I might be a lopsided 海 (sea in chinese and probably japanese too). It doesn&#39;t follow the usual structure so it&#39;s certainly a variant character. Try looking it up in a specialised dictionary (or just asking a chinese/japanese person)   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11461.php#11470" onclick="highlight(11470);">&gt;&gt;</a></td> <td class="reply" id="reply11470"> <a id="11470"></a> <div class="replyheader"> 									 <span class="commentpostername">Whitey Cenningmit</span>  - <span class="idhighlight">Thu, 12 Jun 2014 01:14:59 EST ID:cQDhZyA+</span> <span class="reflink">  <a href="/lang/res/11461.php#i11470">No.11470</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31303337383436353332')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11470', '11461')" title="Report Post 11470"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11470" data-thread="11461"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #189FE1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31303337383436353332">  <a href = "/lang/res/11461.php" onclick = "highlight(11461)">&gt;&gt;11461</a><br>That word means &quot;sea&quot;   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11396"> <div class="thread_header"> <a id="11396"></a> <span class="filetitle">Latin</span>  <span class="inbetween"> by </span> <span class="postername">Thomas Pickwater</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 20 May 2014 03:10:54 EST ID:FxF4b8ZJ</span></span>  <span class="reflink"> <a href="/lang/res/11396.php#i11396">No.11396</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31323637343235323631')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11396')" title="Report Thread 11396"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11396.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11396" data-thread="11396"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FC5BB2; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11396');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1400569854811.jpg"> 1400569854811.jpg </a> -(<em>61588 B, 640x432</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang31323637343235323631" target="_blank" href="/lang/src/1400569854811.jpg"> <img src="/lang/thumb/1400569854811s.jpg" alt="61588" class="thumb" /> </a>   			 <blockquote class="opcomment lang31323637343235323631">  Anyone else studying it?   </blockquote>   				 				  <span class="omittedposts">  9 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11396.php#11463" onclick="highlight(11463);">&gt;&gt;</a></td> <td class="reply" id="reply11463"> <a id="11463"></a> <div class="replyheader"> 									 <span class="commentpostername">Charles Shakespear</span>  - <span class="idhighlight">Tue, 10 Jun 2014 06:58:53 EST ID:W8UqnwOo</span> <span class="reflink">  <a href="/lang/res/11396.php#i11463">No.11463</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang353233353131353536')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11463', '11396')" title="Report Post 11463"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11463" data-thread="11396"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #06DB02; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang353233353131353536">  Learning Latin will, assuming you enjoy reading classic literature, make you incredibly butthurt about translations. Latin is today still often debated heavily when it comes to translation, often showing very overtly the translators personal biases.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11396.php#11464" onclick="highlight(11464);">&gt;&gt;</a></td> <td class="reply" id="reply11464"> <a id="11464"></a> <div class="replyheader"> 									 <span class="commentpostername">Esther Hinderhore</span>  - <span class="idhighlight">Tue, 10 Jun 2014 09:48:19 EST ID:j+FoShSd</span> <span class="reflink">  <a href="/lang/res/11396.php#i11464">No.11464</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31323633323038313536')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11464', '11396')" title="Report Post 11464"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11464" data-thread="11396"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B01092; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31323633323038313536">  Yeah I&#39;ve been studying it for ~5 years now, I majored in Classics in college and still read it.<br><br>I&#39;m reading Plautus&#39;s Truculentus atm. After that I&#39;ll actually have read everything he wrote. I like comedies, modern and ancient. My favorite shit by Plautus is his more farcical stuff, like the Casina, the Aulularia, the Menaechmi, etc. <br><br><a href = "/lang/res/11396.php#11455" onclick = "highlight(11455)">&gt;&gt;11455</a><br><br>I&#39;d say that&#39;s because Latin&#39;s a real language with real idioms, irregularities, peculiarities and headaches. Esperanto is a model language, it doesn&#39;t stretch your brain the way a lot of Latin will.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11396.php#11465" onclick="highlight(11465);">&gt;&gt;</a></td> <td class="reply" id="reply11465"> <a id="11465"></a> <div class="replyheader"> 									 <span class="commentpostername">Esther Hinderhore</span>  - <span class="idhighlight">Tue, 10 Jun 2014 10:18:55 EST ID:j+FoShSd</span> <span class="reflink">  <a href="/lang/res/11396.php#i11465">No.11465</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31323633323038313536')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11465', '11396')" title="Report Post 11465"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11465" data-thread="11396"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B66CE1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31323633323038313536">  <a href = "/lang/res/11396.php#11464" onclick = "highlight(11464)">&gt;&gt;11464</a><br><br>I can&#39;t mention Plautus without quoting a joke about butt-sex now can I?<br><br>Astaphium (ancilla meretricum), Diniarchus (adulescens)<br><br>AS. nimis otiosum te arbitror hominem esse. DI. qui arbitrare?<br>AS. quia tuo vestimento et cibo alienis rebus curas.<br>DI. vos mihi desistis otium. AS. qui, amabo? DI. ego expedibo.<br>Di: Rem perdidi apud vos, vos meum negotium apstulistis.<br>Si rem servassem, fuit ubi negotiosus essem.<br>AS. an tu te Veneris publicum aut Amoris alia lege<br>habere posse postulas quin otiosus fias?<br>DI. illa, haud ego, habuit publicum: pervorse interpretaris;<br>nam advorsum legem mean ob meam scripturam pecudem cept.  <div class="abbrev"> Comment too long. Click <a href="/lang/res/11396.php#11465">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11396.php#11466" onclick="highlight(11466);">&gt;&gt;</a></td> <td class="reply" id="reply11466"> <a id="11466"></a> <div class="replyheader"> 									 <span class="commentpostername">Esther Hinderhore</span>  - <span class="idhighlight">Tue, 10 Jun 2014 10:20:33 EST ID:j+FoShSd</span> <span class="reflink">  <a href="/lang/res/11396.php#i11466">No.11466</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31323633323038313536')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11466', '11396')" title="Report Post 11466"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11466" data-thread="11396"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #827F96; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31323633323038313536">  <a href = "/lang/res/11396.php#11465" onclick = "highlight(11465)">&gt;&gt;11465</a><br><br>I&#39;ve gotta proofread my shit<br><br><blockquote class = "unkfunc">&gt;desistis should be dedistis<br>&gt;cept should be cepit<br>&gt;nor should be non</blockquote>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11396.php#11469" onclick="highlight(11469);">&gt;&gt;</a></td> <td class="reply" id="reply11469"> <a id="11469"></a> <div class="replyheader"> 									 <span class="commentpostername">Fucking Drizzlelug</span>  - <span class="idhighlight">Wed, 11 Jun 2014 23:44:02 EST ID:j+FoShSd</span> <span class="reflink">  <a href="/lang/res/11396.php#i11469">No.11469</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31323633323038313536')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11469', '11396')" title="Report Post 11469"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11469" data-thread="11396"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #933ED8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31323633323038313536">  <a href = "/lang/res/11396.php#11465" onclick = "highlight(11465)">&gt;&gt;11465</a><br><br>One about fapping in the same play, Diniarchus is complaining to Astaphium about how long the prostitute he loves is taking to finish bathing<br><br>AS. non quis paumper durare opperier?<br>DI. quin hercle lassus iam sum durando miser:<br>mihi quoque prae lassitudine opus est ut lauem.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11460"> <div class="thread_header"> <a id="11460"></a> <span class="filetitle">Song lyrics</span>  <span class="inbetween"> by </span> <span class="postername">Phineas Goodcocke</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 09 Jun 2014 16:52:21 EST ID:Kgv+DYVj</span></span>  <span class="reflink"> <a href="/lang/res/11460.php#i11460">No.11460</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363039303638383336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11460')" title="Report Thread 11460"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11460.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11460" data-thread="11460"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FF824B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11460');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1402347141352.jpg"> 1402347141352.jpg </a> -(<em>59584 B, 500x500</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang31363039303638383336" target="_blank" href="/lang/src/1402347141352.jpg"> <img src="/lang/thumb/1402347141352s.jpg" alt="59584" class="thumb" /> </a>   			 <blockquote class="opcomment lang31363039303638383336">  I really need the lyrics for this song. Just googled it without any result. Is there a good soul here who is able to transcribe it for me? I&#39;m italian and my english suck balls...<br><br><a href="http://www.youtube.com/watch?v=C3663H-3JUU" rel="nofollow" target="_blank">http://www.youtube.com/watch?v=C3663H-3JUU</a><br><br>thanks guys   </blockquote>   				 				     <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11445"> <div class="thread_header"> <a id="11445"></a> <span class="filetitle">fuck spanish</span>  <span class="inbetween"> by </span> <span class="postername">Eliza Crollymerk</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 06 Jun 2014 15:17:44 EST ID:+c8HliL/</span></span>  <span class="reflink"> <a href="/lang/res/11445.php#i11445">No.11445</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang383432333634333630')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11445')" title="Report Thread 11445"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11445.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11445" data-thread="11445"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E8E4A8; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11445');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1402082264435.jpg"> 1402082264435.jpg </a> -(<em>1006476 B, 3533x1987</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang383432333634333630" target="_blank" href="/lang/src/1402082264435.jpg"> <img src="/lang/thumb/1402082264435s.jpg" alt="1006476" class="thumb" /> </a>   			 <blockquote class="opcomment lang383432333634333630">  Fill in the blanks with the appropriate reflexive verb forms.<br>probarse (nosotros)<br>irse (ella)<br>secarse (ella)<br>sentirse (tú)<br>sentirse (nosotros)   </blockquote>   				 				  <span class="omittedposts">  4 posts and 2 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11445.php#11450" onclick="highlight(11450);">&gt;&gt;</a></td> <td class="reply" id="reply11450"> <a id="11450"></a> <div class="replyheader"> 									 <span class="commentpostername">Eliza Crollymerk</span>  - <span class="idhighlight">Fri, 06 Jun 2014 16:27:10 EST ID:+c8HliL/</span> <span class="reflink">  <a href="/lang/res/11445.php#i11450">No.11450</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang383432333634333630')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11450', '11445')" title="Report Post 11450"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11450" data-thread="11445"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #308E48; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang383432333634333630">  <a href = "/lang/res/11445.php#11449" onclick = "highlight(11449)">&gt;&gt;11449</a><br><a href="http://boards.the/" rel="nofollow" target="_blank">http://boards.the/</a> future.org/b/thread/549900819<br><br>I couldnt post the audio here for some retarded reason.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11445.php#11451" onclick="highlight(11451);">&gt;&gt;</a></td> <td class="reply" id="reply11451"> <a id="11451"></a> <div class="replyheader"> 									 <span class="commentpostername">Eliza Crollymerk</span>  - <span class="idhighlight">Fri, 06 Jun 2014 16:28:15 EST ID:+c8HliL/</span> <span class="reflink">  <a href="/lang/res/11445.php#i11451">No.11451</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang383432333634333630')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11451', '11445')" title="Report Post 11451"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11451" data-thread="11445"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DD2739; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang383432333634333630">  <a href = "/lang/res/11445.php#11450" onclick = "highlight(11450)">&gt;&gt;11450</a><br><a href="http://boards.the/" rel="nofollow" target="_blank">http://boards.the/</a> future.org/b/thread/549900819   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11445.php#11452" onclick="highlight(11452);">&gt;&gt;</a></td> <td class="reply" id="reply11452"> <a id="11452"></a> <div class="replyheader"> 									 <span class="commentpostername">Barnaby Puffingstork</span>  - <span class="idhighlight">Fri, 06 Jun 2014 16:29:54 EST ID:brgMdTGF</span> <span class="reflink">  <a href="/lang/res/11445.php#i11452">No.11452</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang353233343331333339')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11452', '11445')" title="Report Post 11452"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11452" data-thread="11445"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B0ED6E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang353233343331333339">  <a href = "/lang/res/11445.php#11449" onclick = "highlight(11449)">&gt;&gt;11449</a><br>that&#39;s a listening, gotta do that yourself<br>i&#39;d guess the first two are correct, then 3 would be despertarse temprano, 4 would be peinarse y maquillarse and 5 would be dormir   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11445.php#11453" onclick="highlight(11453);">&gt;&gt;</a></td> <td class="reply" id="reply11453"> <a id="11453"></a> <div class="replyheader"> 									 <span class="commentpostername">Barnaby Puffingstork</span>  - <span class="idhighlight">Fri, 06 Jun 2014 16:32:29 EST ID:brgMdTGF</span> <span class="reflink">  <a href="/lang/res/11445.php#i11453">No.11453</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang353233343331333339')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11453', '11445')" title="Report Post 11453"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11453" data-thread="11445"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #26541E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang353233343331333339">  <a href = "/lang/res/11445.php#11451" onclick = "highlight(11451)">&gt;&gt;11451</a><br>it says page not found   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11445.php#11458" onclick="highlight(11458);">&gt;&gt;</a></td> <td class="reply" id="reply11458"> <a id="11458"></a> <div class="replyheader"> 									 <span class="commentpostername">Hannah Tillingshaw</span>  - <span class="idhighlight">Mon, 09 Jun 2014 11:34:13 EST ID:v8HtwEYi</span> <span class="reflink">  <a href="/lang/res/11445.php#i11458">No.11458</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33343735343331363539')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11458', '11445')" title="Report Post 11458"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11458" data-thread="11445"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #307612; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang33343735343331363539">  you&#39;re learning it wrong, smoke mota with native speakers and try not to talk in english, doing your homework won&#39;t help you communicate.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11427"> <div class="thread_header"> <a id="11427"></a> <span class="filetitle">Japanese Stenography.</span>  <span class="inbetween"> by </span> <span class="postername">Polly Bindleworth</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 27 May 2014 06:54:08 EST ID:CGb0mvw5</span></span>  <span class="reflink"> <a href="/lang/res/11427.php#i11427">No.11427</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang343039313231313937')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11427')" title="Report Thread 11427"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11427.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11427" data-thread="11427"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AB4D5B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11427');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1401188048339.png"> 1401188048339.png </a> -(<em>1165828 B, 1440x900</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang343039313231313937" target="_blank" href="/lang/src/1401188048339.png"> <img src="/lang/thumb/1401188048339s.jpg" alt="1165828" class="thumb" /> </a>   			 <blockquote class="opcomment lang343039313231313937">  <a href="https://www.youtube.com/watch?v=Wpv-Qb-dB6g&amp;amp;t=22m50s" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=Wpv-Qb-dB6g&amp;t=22m50s</a><br><br>Plover is this super-keyboard program, that only uses sixteen keys to type everything super duper fast. It&#39;s not a keyboard layout, like Dvorak, it&#39;s a stenography program. <br><br>Can anyone tell me where I can find some kind of Japanese equivalent?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11427.php#11430" onclick="highlight(11430);">&gt;&gt;</a></td> <td class="reply" id="reply11430"> <a id="11430"></a> <div class="replyheader"> 									 <span class="commentpostername">Ebenezer Smallman</span>  - <span class="idhighlight">Wed, 28 May 2014 03:35:42 EST ID:CGb0mvw5</span> <span class="reflink">  <a href="/lang/res/11427.php#i11430">No.11430</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang343039313231313937')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11430', '11427')" title="Report Post 11430"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11430" data-thread="11427"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DB5D77; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang343039313231313937">  <a href = "/lang/res/11427.php" onclick = "highlight(11427)">&gt;&gt;11427</a><br>What&#39;s wrong with Dvorak?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11427.php#11433" onclick="highlight(11433);">&gt;&gt;</a></td> <td class="reply" id="reply11433"> <a id="11433"></a> <div class="replyheader"> 									 <span class="commentpostername">Fuck Duckham</span>  - <span class="idhighlight">Wed, 28 May 2014 16:56:11 EST ID:YCqAN8Xm</span> <span class="reflink">  <a href="/lang/res/11427.php#i11433">No.11433</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31333130303731343437')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11433', '11427')" title="Report Post 11433"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11433" data-thread="11427"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #595FA4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31333130303731343437">  <a href = "/lang/res/11427.php#11430" onclick = "highlight(11430)">&gt;&gt;11430</a><br>Too slow, compared to steno.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11427.php#11434" onclick="highlight(11434);">&gt;&gt;</a></td> <td class="reply" id="reply11434"> <a id="11434"></a> <div class="replyheader"> 									 <span class="commentpostername">Emma Fandlelock</span>  - <span class="idhighlight">Thu, 29 May 2014 00:35:16 EST ID:/B/BFMOS</span> <span class="reflink">  <a href="/lang/res/11427.php#i11434">No.11434</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363539333037333937')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11434', '11427')" title="Report Post 11434"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11434" data-thread="11427"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E07640; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31363539333037333937">  <blockquote class = "unkfunc">&gt;Can anyone tell me where I can find some kind of Japanese equivalent?<br></blockquote><br>It doesn&#39;t exist. Why don&#39;t you make it? Just change the chord mapping and dictionary in Plover.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11427.php#11436" onclick="highlight(11436);">&gt;&gt;</a></td> <td class="reply" id="reply11436"> <a id="11436"></a> <div class="replyheader"> 									 <span class="commentpostername">Edward Gazzleshit</span>  - <span class="idhighlight">Thu, 29 May 2014 14:20:26 EST ID:NqJL1ymG</span> <span class="reflink">  <a href="/lang/res/11427.php#i11436">No.11436</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363630313631363733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11436', '11427')" title="Report Post 11436"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11436" data-thread="11427"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CB8EEE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31363630313631363733">  maybe <a href="https://ja.wikipedia.org/wiki/%E9%80%9F%E8%A8%98#.E5.A4.96.E9.83.A8.E3.83.AA.E3.83.B3.E3.82.AF" rel="nofollow" target="_blank">https://ja.wikipedia.org/wiki/%E9%80%9F%E8%A8%98#.E5.A4.96.E9.83.A8.E3.83.AA.E3.83.B3.E3.82.AF</a> idk<br><br><a href = "/lang/res/11427.php#11434" onclick = "highlight(11434)">&gt;&gt;11434</a> OMG so much easier said than done. Japanese is a very different language than English and needs very different adjustments to work. There&#39;s a different information load in a word and everything, and then Kanji need to work like Chinese stenorgraphy. Expect the English:Japanese to differ by as much as the writing systems differ.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11427.php#11442" onclick="highlight(11442);">&gt;&gt;</a></td> <td class="reply" id="reply11442"> <a id="11442"></a> <div class="replyheader"> 									 <span class="commentpostername">Ian Sibbernog</span>  - <span class="idhighlight">Wed, 04 Jun 2014 14:47:44 EST ID:XnC1cGBX</span> <span class="reflink">  <a href="/lang/res/11427.php#i11442">No.11442</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33303932383535343335')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11442', '11427')" title="Report Post 11442"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11442" data-thread="11427"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A7EF9F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang33303932383535343335">  Fucking neat OP<br>Thanks   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11429"> <div class="thread_header"> <a id="11429"></a> <span class="filetitle">German?</span>  <span class="inbetween"> by </span> <span class="postername">Ernest Sennerfit</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 28 May 2014 00:35:20 EST ID:uxg+/pap</span></span>  <span class="reflink"> <a href="/lang/res/11429.php#i11429">No.11429</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33303939383438353538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11429')" title="Report Thread 11429"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11429.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11429" data-thread="11429"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BCCE47; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11429');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1401251720258.jpg"> 1401251720258.jpg </a> -(<em>1121492 B, 2048x1536</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang33303939383438353538" target="_blank" href="/lang/src/1401251720258.jpg"> <img src="/lang/thumb/1401251720258s.jpg" alt="1121492" class="thumb" /> </a>   			 <blockquote class="opcomment lang33303939383438353538">  What does this say? I foind a bunch of similar old books like this one.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11429.php#11437" onclick="highlight(11437);">&gt;&gt;</a></td> <td class="reply" id="reply11437"> <a id="11437"></a> <div class="replyheader"> 									 <span class="commentpostername">Edward Gazzleshit</span>  - <span class="idhighlight">Thu, 29 May 2014 14:33:24 EST ID:NqJL1ymG</span> <span class="reflink">  <a href="/lang/res/11429.php#i11437">No.11437</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363630313631363733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11437', '11429')" title="Report Post 11437"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11437" data-thread="11429"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8D0C10; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31363630313631363733">  History of the Duchy of Schleswig and Hollstein, Second Part. By Wilhelm Ernst Christiani, which wikipedia tells me was a Lutheran university or college teacher; (the German term is Hochschullehrer, literally high-school-teacher but because they did things different to this day hochschule doesn&#39;t map cleanly to English and really just means &quot;institute of higher learning&quot;).<br><br><a href="https://de.wikipedia.org/wiki/Wilhelm_Ernst_Christiani#Literatur" rel="nofollow" target="_blank">https://de.wikipedia.org/wiki/Wilhelm_Ernst_Christiani#Literatur</a>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11405"> <div class="thread_header"> <a id="11405"></a> <span class="filetitle">Japanese project</span>  <span class="inbetween"> by </span> <span class="postername">Polly Pockman</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 21 May 2014 17:55:04 EST ID:XarxYvp0</span></span>  <span class="reflink"> <a href="/lang/res/11405.php#i11405">No.11405</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31383336373830313334')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11405')" title="Report Thread 11405"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11405.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11405" data-thread="11405"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0EB40F; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11405');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1400709304467.png"> 1400709304467.png </a> -(<em>257751 B, 4507x1980</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang31383336373830313334" target="_blank" href="/lang/src/1400709304467.png"> <img src="/lang/thumb/1400709304467s.jpg" alt="257751" class="thumb" /> </a>   			 <blockquote class="opcomment lang31383336373830313334">  I&#39;ll just leave this here.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11405.php#11406" onclick="highlight(11406);">&gt;&gt;</a></td> <td class="reply" id="reply11406"> <a id="11406"></a> <div class="replyheader"> 									 <span class="commentpostername">Polly Pockman</span>  - <span class="idhighlight">Wed, 21 May 2014 17:55:50 EST ID:XarxYvp0</span> <span class="reflink">  <a href="/lang/res/11405.php#i11406">No.11406</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31383336373830313334')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11406', '11405')" title="Report Post 11406"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11406" data-thread="11405"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6A3AEE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1400709350467.png"> 1400709350467.png </a> -(<em>49763 B, 1316x922</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lang/src/1400709350467.png"> <img src="/lang/thumb/1400709350467s.jpg" alt="49763" class="thumb" /> </a>    <blockquote  class="lang31383336373830313334">  And this.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11405.php#11422" onclick="highlight(11422);">&gt;&gt;</a></td> <td class="reply" id="reply11422"> <a id="11422"></a> <div class="replyheader"> 									 <span class="commentpostername">NinKenDo</span> <span class="postertrip">!GEcKEyOqGA</span> - <span class="idhighlight">Sun, 25 May 2014 09:04:31 EST ID:fenC7AZH</span> <span class="reflink">  <a href="/lang/res/11405.php#i11422">No.11422</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33343139333036363137')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11422', '11405')" title="Report Post 11422"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11422" data-thread="11405"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #945AC1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang33343139333036363137">  for the lazy<br><br><a href="http://igg.me/at/kanjiproject" rel="nofollow" target="_blank">http://igg.me/at/kanjiproject</a><br><br>Let&#39;s get this shit funded guys, it&#39;s an invaluable resource!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11405.php#11428" onclick="highlight(11428);">&gt;&gt;</a></td> <td class="reply" id="reply11428"> <a id="11428"></a> <div class="replyheader"> 									 <span class="commentpostername">Polly Bindleworth</span>  - <span class="idhighlight">Tue, 27 May 2014 07:04:40 EST ID:CGb0mvw5</span> <span class="reflink">  <a href="/lang/res/11405.php#i11428">No.11428</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang343039313231313937')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11428', '11405')" title="Report Post 11428"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11428" data-thread="11405"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A213DC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang343039313231313937">  <a href = "/lang/res/11405.php" onclick = "highlight(11405)">&gt;&gt;11405</a><br>I don&#39;t know what this is, but I like my cutey cartoons with the funny voices so i&#39;m behind this shit all the goddamn way! WOOOOOOOOOOOO!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11405.php#11431" onclick="highlight(11431);">&gt;&gt;</a></td> <td class="reply" id="reply11431"> <a id="11431"></a> <div class="replyheader"> 									 <span class="commentpostername">Shitting Blungerhodging</span>  - <span class="idhighlight">Wed, 28 May 2014 08:41:20 EST ID:c6hl5F2A</span> <span class="reflink">  <a href="/lang/res/11405.php#i11431">No.11431</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33353432303135323034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11431', '11405')" title="Report Post 11431"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11431" data-thread="11405"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4ED1DB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang33353432303135323034">  <a href = "/lang/res/11405.php" onclick = "highlight(11405)">&gt;&gt;11405</a><br>How does this compare to other resources for learning Kanji? I&#39;m using &#39;Heisig - Remembering The Kanji&#39; for example. I&#39;m not really sure what this is about.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11405.php#11432" onclick="highlight(11432);">&gt;&gt;</a></td> <td class="reply" id="reply11432"> <a id="11432"></a> <div class="replyheader"> 									 <span class="commentpostername">Faggy Wallerstock</span>  - <span class="idhighlight">Wed, 28 May 2014 11:24:11 EST ID:XarxYvp0</span> <span class="reflink">  <a href="/lang/res/11405.php#i11432">No.11432</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31383336373830313334')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11432', '11405')" title="Report Post 11432"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11432" data-thread="11405"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C6F780; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31383336373830313334">  <a href = "/lang/res/11405.php#11431" onclick = "highlight(11431)">&gt;&gt;11431</a><br>This isn&#39;t exactly a &quot;resource for learning kanji,&quot; it&#39;s a database for kanji/words that can be/will be implemented in &quot;resources for learning kanji.&quot;<br><br>For example, current resources (dictionaries and such) do not include pitch accent information, homonyms, particle information for verbs, phonetics, and other informative data, because there is no database which includes all that information. That&#39;s what this resource is about.<br><br>In your case of using RTK, you&#39;ll for example be able to go to Jisho.org (or a mobile app), search for a kanji and you&#39;ll know exactly which phonetic (RTK 2) the kanji uses, and search for other kanji with the same phonetic. And that&#39;s just one of the cool things.<br><br>So instead of this being a &quot;resource for learning kanji&quot; limited to a single website/app, it&#39;s a database that I&#39;m hoping will become a part of all other current and new resources.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://insomniacgamers.net"><img src="http://cdn.420chan.org/sp/i.png"></a>
		</div>
				<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://420chan.org/advertise"><img src="http://cdn.420chan.org/sp/YOUR-AD-HERE.gif"></a>
		</div>
		 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/lang/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="lang" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">  <a href="/lang/index.php">&lt;&lt;Last</a>   <span style="font-size: +1;">Pages</span>   <a href="/lang/2.php">Next&gt;&gt;</a>  <br />   <a href="/lang/index.php">0</a>      1    <a href="/lang/2.php">2</a>     <a href="/lang/3.php">3</a>     <a href="/lang/4.php">4</a>     <a href="/lang/5.php">5</a>     <a href="/lang/6.php">6</a>     <a href="/lang/7.php">7</a>     <a href="/lang/8.php">8</a>     <a href="/lang/9.php">9</a>     <a href="/lang/10.php">10</a>     <a href="/lang/11.php">11</a>     <a href="/lang/12.php">12</a>     <a href="/lang/13.php">13</a>     <a href="/lang/14.php">14</a>     <a href="/lang/15.php">15</a>     <a href="/lang/16.php">16</a>     <a href="/lang/17.php">17</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3856140.php' class='boardlink'>Thread 3856140</a></span>
		<p>PUSH IT TO THE LIMIT... <a href='/wooo/res/3856140.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='wooo' src='/static/images/board_icons/wooo_icon_32.png' />
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3855763.php' class='boardlink'>Thread 3855763</a></span>
		<p>video wont play on 3 different browsers.... <a href='/wooo/res/3855763.php' class='boardlink'>&#8629;</a></p></li>
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

