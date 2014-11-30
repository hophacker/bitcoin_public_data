http://boards.420chan.org/del/8.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Wed, 23 Jul 2014 18:51:29 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> Deliriant Discussion - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/del_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/del_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/del/8.php';
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
	 <div id="header"> <div id="board_logo"> <a href="/del/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/del_icon_64.png" alt="/del/ Icon" /> <p class="board_title_block"> <span class="board_name">/del/</span> <span class="board_title">Deliriant Discussion</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
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
	 <!--  <div style="position: absolute; right: 2.5%;"> <ul style="text-align: right; float: right; list-style: none; margin: 5px; font-size: 11px;"> <li style="margin-bottom: 2px;">Board IRC: <a href="irc://irc.420chan.org/drugs">#drugs @ irc.420chan.org</a></li> <li>New to IRC? <a href="http://420chan.org/#irc">Start Here</a></li> </ul> </div>  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/del/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="del" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />     <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>  <tr> <td class="postblock">Name</td> <td> <input title="Name" type="text" name="field1" style="width:224px;" /> <div class="tooltip">  You can leave this blank to post anonymously, or you can create a Tripcode by using the float <b>Name#Password</b> </div>					 </td> </tr>    <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div>  <script type="text/javascript">set_inputs("postform")</script> <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 3000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> 			  </ul> </div> <hr style="margin-bottom:2px;" /> 		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://420chan.org/advertise"><img src="http://cdn.420chan.org/sp/YOUR-AD-HERE.gif"></a>
		</div>
		 <hr style="margin-top:2px;" />   <form id="delform" action="/del/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="del" />    <div id="delthread129499"> <div class="thread_header"> <a id="129499"></a> <span class="filetitle">hwat</span>  <span class="inbetween"> by </span> <span class="postername">Graham Chettingforth</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 15 Jun 2014 18:52:46 EST ID:bmSvWWj0</span></span>  <span class="reflink"> <a href="/del/res/129499.php#i129499">No.129499</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31313635373535353631')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('129499')" title="Report Thread 129499"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/del/res/129499.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129499" data-thread="129499"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E94048; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('delthread129499');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1402872766698.jpg"> 1402872766698.jpg </a> -(<em>32636 B, 481x479</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgdel31313635373535353631" target="_blank" href="/del/src/1402872766698.jpg"> <img src="/del/thumb/1402872766698s.jpg" alt="32636" class="thumb" /> </a>   			 <blockquote class="opcomment del31313635373535353631">  Is trouble speaking - like getting that first word out annd pronouncing certain sillabels. I took about 600 last nigth, and my mother ( NO i&#39;m no a kid - im  just viisiting) A few hours ago I think or so I took 200-250 mg something like that. I&#39;m still having this effecct. Oh also confusion in understanding peopole and I&#39;llf forget what I was looking for on the internet like in 5 seconds. My memory retains nothing  new. Could I have ha a stroke, or does this happen temporarily with dph use.   </blockquote>   				 				  <span class="omittedposts">   1 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/del/res/129499.php#129502" onclick="highlight(129502);">&gt;&gt;</a></td> <td class="reply" id="reply129502"> <a id="129502"></a> <div class="replyheader"> 									 <span class="commentpostername">malneirophrenia</span> <span class="postertrip">!/Hh2q0WCjk</span> - <span class="idhighlight">Sun, 15 Jun 2014 19:00:15 EST ID:bi3o8BBm</span> <span class="reflink">  <a href="/del/res/129499.php#i129502">No.129502</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del32363139343735363831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129502', '129499')" title="Report Post 129502"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129502" data-thread="129499"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #806658; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del32363139343735363831">  Dysarthria, a symptom of some illnesses and a side effect of some drugs.<br><br>&quot;In a person with dysarthria, a nerve, brain, or muscle disorder makes it difficult to use or control the muscles of the mouth, tongue, larynx, or vocal cords, which make speech . . . other causes may include: side effects of medications that act on the central nervous system&quot;<br><br><a href="http://www.nlm.nih.gov/medlineplus/ency/article/007470.htm" rel="nofollow" target="_blank">http://www.nlm.nih.gov/medlineplus/ency/article/007470.htm</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129499.php#129503" onclick="highlight(129503);">&gt;&gt;</a></td> <td class="reply" id="reply129503"> <a id="129503"></a> <div class="replyheader"> 									 <span class="commentpostername">Graham Chettingforth</span>  - <span class="idhighlight">Sun, 15 Jun 2014 19:05:14 EST ID:bmSvWWj0</span> <span class="reflink">  <a href="/del/res/129499.php#i129503">No.129503</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31313635373535353631')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129503', '129499')" title="Report Post 129503"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129503" data-thread="129499"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AB40F1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31313635373535353631">  <a href = "/del/res/129499.php" onclick = "highlight(129499)">&gt;&gt;129499</a><br>Ohh I see. So it actually relaxes the muscles in the throat like the diaphragm, making ithard to prononce some thing. When i do successfully get a sentence out i get like thi adrenaline rush. So anyway bewen lsat night around 525-275 mg to today at 200, shoul I go for 7 or 8 hunred toinght? I want to ssee creepy shit. I once took about 600 dph with  a huge handfull of dried fly agaric..and wow. The only thiing that worries me with the dph is the heart. I habitually check my pulse while tripping and it seems to skip beats and go &#39;silent&#39; for few seconds.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129499.php#129504" onclick="highlight(129504);">&gt;&gt;</a></td> <td class="reply" id="reply129504"> <a id="129504"></a> <div class="replyheader"> 									 <span class="commentpostername">malneirophrenia</span> <span class="postertrip">!/Hh2q0WCjk</span> - <span class="idhighlight">Sun, 15 Jun 2014 19:06:12 EST ID:bi3o8BBm</span> <span class="reflink">  <a href="/del/res/129499.php#i129504">No.129504</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del32363139343735363831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129504', '129499')" title="Report Post 129504"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129504" data-thread="129499"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AC2776; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1402873572402.jpg"> 1402873572402.jpg </a> -(<em>97365 B, 831x351</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/del/src/1402873572402.jpg"> <img src="/del/thumb/1402873572402s.jpg" alt="97365" class="thumb" /> </a>    <blockquote  class="del32363139343735363831">  Also, there&#39;s aphasia, which causes the inability to comprehend spoken words and/or written language. This is what causes everyone to sound like their speaking gibberish on DPH, or when numbers on your clock/words on the screen look like some alien language.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129499.php#129507" onclick="highlight(129507);">&gt;&gt;</a></td> <td class="reply" id="reply129507"> <a id="129507"></a> <div class="replyheader"> 									 <span class="commentpostername">Graham Chettingforth</span>  - <span class="idhighlight">Sun, 15 Jun 2014 19:17:12 EST ID:bmSvWWj0</span> <span class="reflink">  <a href="/del/res/129499.php#i129507">No.129507</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31313635373535353631')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129507', '129499')" title="Report Post 129507"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129507" data-thread="129499"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A1444A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31313635373535353631">  <a href = "/del/res/129499.php#129504" onclick = "highlight(129504)">&gt;&gt;129504</a> <br>I&#39;m getting that too.. like my moms bf will ask me some questian and i can&#39;t unerstand itso i&#39;mjust like &#39;ok&#39; . it seems to crack him up. as long asi its temporal, dont min   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129499.php#129536" onclick="highlight(129536);">&gt;&gt;</a></td> <td class="reply" id="reply129536"> <a id="129536"></a> <div class="replyheader"> 									 <span class="commentpostername">Ebenezer Nuffingbeg</span>  - <span class="idhighlight">Mon, 16 Jun 2014 19:02:35 EST ID:x5aObUeZ</span> <span class="reflink">  <a href="/del/res/129499.php#i129536">No.129536</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del383438353930323936')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129536', '129499')" title="Report Post 129536"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129536" data-thread="129499"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #92ECD2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del383438353930323936">  judging by your typing you should maybe like... take a break...   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="delthread129486"> <div class="thread_header"> <a id="129486"></a> <span class="filetitle">Loss of Taste?</span>  <span class="inbetween"> by </span> <span class="postername">MNDPHFiend</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 14 Jun 2014 18:41:01 EST ID:pA3uCb/s</span></span>  <span class="reflink"> <a href="/del/res/129486.php#i129486">No.129486</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31313537393230343635')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('129486')" title="Report Thread 129486"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/del/res/129486.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129486" data-thread="129486"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0BD7C5; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('delthread129486');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1402785661737.jpg"> 1402785661737.jpg </a> -(<em>43640 B, 418x381</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgdel31313537393230343635" target="_blank" href="/del/src/1402785661737.jpg"> <img src="/del/thumb/1402785661737s.jpg" alt="43640" class="thumb" /> </a>   			 <blockquote class="opcomment del31313537393230343635">  So after about a month of daily DPH use I stopped. I know it&#39;s not the healthiest to use daily for so long but I was in the wrong state of mind and didn&#39;t want to be sober. I took between 4-500mg daily sometimes redosing at night another 300mg. After 2 day of stopping I have an extreme loss of taste and only things that are really sweet or really salty are able to be tasted. Is this normal after daily DPH use? Should I only be concerned if it continues more than a week or so? Discuss please!   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/del/res/129486.php#129498" onclick="highlight(129498);">&gt;&gt;</a></td> <td class="reply" id="reply129498"> <a id="129498"></a> <div class="replyheader"> 									 <span class="commentpostername">Shit Brillyfuck</span>  - <span class="idhighlight">Sun, 15 Jun 2014 17:15:51 EST ID:epi8/AqA</span> <span class="reflink">  <a href="/del/res/129486.php#i129498">No.129498</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del32303434313433323235')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129498', '129486')" title="Report Post 129498"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129498" data-thread="129486"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B527CB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del32303434313433323235">  <blockquote class = "unkfunc">&gt;I know it&#39;s not the healthiest<br></blockquote>Yeah, you&#39;re right, its downright stupid.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129486.php#129515" onclick="highlight(129515);">&gt;&gt;</a></td> <td class="reply" id="reply129515"> <a id="129515"></a> <div class="replyheader"> 									 <span class="commentpostername">Bawlsdeepnoddin</span>  - <span class="idhighlight">Mon, 16 Jun 2014 02:52:20 EST ID:lgArr9x2</span> <span class="reflink">  <a href="/del/res/129486.php#i129515">No.129515</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31363237323434303534')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129515', '129486')" title="Report Post 129515"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129515" data-thread="129486"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #816F10; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31363237323434303534">  i am in no way qualified to answer a question like this, but if it were me, i&#39;d just wait a week or two and if it still persists, go see a doctor. do you smoke a lot of cigarettes? cigarettes tend to kill your sense of taste after awhile too.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129486.php#129523" onclick="highlight(129523);">&gt;&gt;</a></td> <td class="reply" id="reply129523"> <a id="129523"></a> <div class="replyheader"> 									 <span class="commentpostername">Hedda Fimbletidge</span>  - <span class="idhighlight">Mon, 16 Jun 2014 13:00:38 EST ID:doS9Ejn4</span> <span class="reflink">  <a href="/del/res/129486.php#i129523">No.129523</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31343731373238393330')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129523', '129486')" title="Report Post 129523"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129523" data-thread="129486"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #232AD7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31343731373238393330">  <a href = "/del/res/129486.php#129515" onclick = "highlight(129515)">&gt;&gt;129515</a><br><br>if u take things regularly then u should never stop taking them abruptly. taper down on it.  the longer u take something the longer u should do the tapering. ur brain will just be like wtf somethings missing and weird things might occur.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129486.php#129526" onclick="highlight(129526);">&gt;&gt;</a></td> <td class="reply" id="reply129526"> <a id="129526"></a> <div class="replyheader"> 									 <span class="commentpostername">MNDPHFIEND</span>  - <span class="idhighlight">Mon, 16 Jun 2014 17:45:37 EST ID:IQrXew3r</span> <span class="reflink">  <a href="/del/res/129486.php#i129526">No.129526</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31323434303930303136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129526', '129486')" title="Report Post 129526"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129526" data-thread="129486"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #72DD36; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31323434303930303136">  <a href = "/del/res/129486.php#129515" onclick = "highlight(129515)">&gt;&gt;129515</a><br>Nah I don&#39;t smoke cigarettes anymore. My sense of smell and taste are slowly coming back. It was due to the DPH abuse for sure. I had no mental problems because my memory and speech is fine. I won&#39;t be using again for awhile. Thanks guys.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="delthread129500"> <div class="thread_header"> <a id="129500"></a> <span class="filetitle">Buying DPH off Ebay</span>  <span class="inbetween"> by </span> <span class="postername">Matilda Clavingfut</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 15 Jun 2014 18:54:14 EST ID:n8ikjb67</span></span>  <span class="reflink"> <a href="/del/res/129500.php#i129500">No.129500</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31363630373836373034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('129500')" title="Report Thread 129500"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/del/res/129500.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129500" data-thread="129500"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0C9860; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('delthread129500');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1402872854477.jpg"> 1402872854477.jpg </a> -(<em>89058 B, 594x1010</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgdel31363630373836373034" target="_blank" href="/del/src/1402872854477.jpg"> <img src="/del/thumb/1402872854477s.jpg" alt="89058" class="thumb" /> </a>   			 <blockquote class="opcomment del31363630373836373034">  Hey /DEL/ has anyone ever ordered these? Is it worth the money? <br><br><a href="http://www.ebay.com/itm/SDA-Laboratories-Diphenhydramine-50mg-Capsules-Sleep-Aid-Antihistamine-1000ct-/151231272718" rel="nofollow" target="_blank">http://www.ebay.com/itm/SDA-Laboratories-Diphenhydramine-50mg-Capsules-Sleep-Aid-Antihistamine-1000ct-/151231272718</a>   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/del/res/129500.php#129505" onclick="highlight(129505);">&gt;&gt;</a></td> <td class="reply" id="reply129505"> <a id="129505"></a> <div class="replyheader"> 									 <span class="commentpostername">Phoebe Beshdure</span>  - <span class="idhighlight">Sun, 15 Jun 2014 19:07:53 EST ID:+ai5Soe2</span> <span class="reflink">  <a href="/del/res/129500.php#i129505">No.129505</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del393830303237353938')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129505', '129500')" title="Report Post 129505"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129505" data-thread="129500"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #69232C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1402873673406.jpg"> 1402873673406.jpg </a> -(<em>52135 B, 415x590</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/del/src/1402873673406.jpg"> <img src="/del/thumb/1402873673406s.jpg" alt="52135" class="thumb" /> </a>    <blockquote  class="del393830303237353938">  I ordered them, they came quickly, were well wrapped, and contained fucking 1000 tabs at 50g.<br><br>Even I don&#39;t know what i am going to do with 50G of dph<br><br><br>have fun - remember, when you dose for a trip, hide the big bottle and put your dosage into a smaller bottle.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129500.php#129508" onclick="highlight(129508);">&gt;&gt;</a></td> <td class="reply" id="reply129508"> <a id="129508"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Clavingfut</span>  - <span class="idhighlight">Sun, 15 Jun 2014 19:38:51 EST ID:n8ikjb67</span> <span class="reflink">  <a href="/del/res/129500.php#i129508">No.129508</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31363630373836373034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129508', '129500')" title="Report Post 129508"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129508" data-thread="129500"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D5939B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31363630373836373034">  <a href = "/del/res/129500.php#129505" onclick = "highlight(129505)">&gt;&gt;129505</a><br>thanks just wanted to make sure it was legit before i bought it. I have a safe ill put it in.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129500.php#129518" onclick="highlight(129518);">&gt;&gt;</a></td> <td class="reply" id="reply129518"> <a id="129518"></a> <div class="replyheader"> 									 <span class="commentpostername">Betsy Gummletire</span>  - <span class="idhighlight">Mon, 16 Jun 2014 10:23:40 EST ID:AIA5hh62</span> <span class="reflink">  <a href="/del/res/129500.php#i129518">No.129518</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31323637333631333434')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129518', '129500')" title="Report Post 129518"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129518" data-thread="129500"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F48D17; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31323637333631333434">  <a href = "/del/res/129500.php#129508" onclick = "highlight(129508)">&gt;&gt;129508</a><br><br>$6 less on Amazon. <br><a href="http://www.amazon.com/Diphenhydramine-Allergy-Medicine-Antihistamine-1000/dp/B000GG1TSU/" rel="nofollow" target="_blank">http://www.amazon.com/Diphenhydramine-Allergy-Medicine-Antihistamine-1000/dp/B000GG1TSU/</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129500.php#129524" onclick="highlight(129524);">&gt;&gt;</a></td> <td class="reply" id="reply129524"> <a id="129524"></a> <div class="replyheader"> 									 <span class="commentpostername">Jenny Bluckleville</span>  - <span class="idhighlight">Mon, 16 Jun 2014 13:45:18 EST ID:n8ikjb67</span> <span class="reflink">  <a href="/del/res/129500.php#i129524">No.129524</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31363630373836373034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129524', '129500')" title="Report Post 129524"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129524" data-thread="129500"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #244818; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31363630373836373034">  <a href = "/del/res/129500.php#129518" onclick = "highlight(129518)">&gt;&gt;129518</a><br>Thanks. glad I didn&#39;t order it yet.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="delthread129054"> <div class="thread_header"> <a id="129054"></a> <span class="filetitle">help</span>  <span class="inbetween"> by </span> <span class="postername">Phoebe Ginnerspear</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 29 May 2014 08:04:33 EST ID:CCjCDdeM</span></span>  <span class="reflink"> <a href="/del/res/129054.php#i129054">No.129054</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del32333930383433303233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('129054')" title="Report Thread 129054"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/del/res/129054.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129054" data-thread="129054"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F50DC2; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('delthread129054');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1401365073168.jpg"> 1401365073168.jpg </a> -(<em>45873 B, 569x510</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgdel32333930383433303233" target="_blank" href="/del/src/1401365073168.jpg"> <img src="/del/thumb/1401365073168s.jpg" alt="45873" class="thumb" /> </a>   			 <blockquote class="opcomment del32333930383433303233">  <blockquote class = "unkfunc">&gt;that time you actually thought you were going to die from DPH</blockquote>   </blockquote>   				 				  <span class="omittedposts">  10 posts and 3 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/del/res/129054.php#129422" onclick="highlight(129422);">&gt;&gt;</a></td> <td class="reply" id="reply129422"> <a id="129422"></a> <div class="replyheader"> 									 <span class="commentpostername">trayanise</span> <span class="postertrip">!rU8mq5Ca7M</span> - <span class="idhighlight">Wed, 11 Jun 2014 00:30:00 EST ID:sgOFB9L+</span> <span class="reflink">  <a href="/del/res/129054.php#i129422">No.129422</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del32393136323039353635')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129422', '129054')" title="Report Post 129422"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129422" data-thread="129054"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AA214C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1402461000949.jpg"> 1402461000949.jpg </a> -(<em>1968111 B, 2592x1936</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/del/src/1402461000949.jpg"> <img src="/del/thumb/1402461000949s.jpg" alt="1968111" class="thumb" /> </a>    <blockquote  class="del32393136323039353635">  <a href = "/del/res/129054.php#129385" onclick = "highlight(129385)">&gt;&gt;129385</a><br>Feels bad man. 600 pills gone :/   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129054.php#129468" onclick="highlight(129468);">&gt;&gt;</a></td> <td class="reply" id="reply129468"> <a id="129468"></a> <div class="replyheader"> 									 <span class="commentpostername">Betsy Nebblehall</span>  - <span class="idhighlight">Fri, 13 Jun 2014 17:57:44 EST ID:9EJ30R7t</span> <span class="reflink">  <a href="/del/res/129054.php#i129468">No.129468</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31343731373332343635')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129468', '129054')" title="Report Post 129468"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129468" data-thread="129054"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #606E80; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31343731373332343635">  <a href = "/del/res/129054.php#129422" onclick = "highlight(129422)">&gt;&gt;129422</a><br><br>time to get the 1000*50mg can off ebay   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129054.php#129506" onclick="highlight(129506);">&gt;&gt;</a></td> <td class="reply" id="reply129506"> <a id="129506"></a> <div class="replyheader"> 									 <span class="commentpostername">Doris Granddock</span>  - <span class="idhighlight">Sun, 15 Jun 2014 19:09:52 EST ID:CL4tfCG0</span> <span class="reflink">  <a href="/del/res/129054.php#i129506">No.129506</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del33343831383437383530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129506', '129054')" title="Report Post 129506"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129506" data-thread="129054"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6D9B1C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del33343831383437383530">  How is it possible that these things can have the non habit forming label on them? I mean I&#39;m not saying I want them banned, but they&#39;re basically the one thing I&#39;ve ever been addicted too.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129054.php#129509" onclick="highlight(129509);">&gt;&gt;</a></td> <td class="reply" id="reply129509"> <a id="129509"></a> <div class="replyheader"> 									 <span class="commentpostername">Bregowine</span>  - <span class="idhighlight">Sun, 15 Jun 2014 19:44:52 EST ID:iSKcHnDJ</span> <span class="reflink">  <a href="/del/res/129054.php#i129509">No.129509</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31363630373230383135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129509', '129054')" title="Report Post 129509"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129509" data-thread="129054"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #94B04D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31363630373230383135">  <a href = "/del/res/129054.php#129506" onclick = "highlight(129506)">&gt;&gt;129506</a><br>Because it&#39;s designed for people to think it&#39;s harmless. It&#39;s &quot;just benadryl&quot;....<br><br>No one would think that about Datura ever...and as a result it is respected and very rarely abused.<br><br>I tried alcohol as a &quot;fuck it&quot; drug. I tried opiates as a &quot;fuck it&quot; drug. They both were certainly quite nice for this purpose but DPH takes the fucking cake. The most efficient fuck up I have ever tried and it&#39;s less than a dollar. <br><br>I don&#39;t use it terribly often but every time I do I try and tell myself that it came from scopolamine and I would never treat that this way....but...you know...it&#39;s &quot;just benadryl&quot;. <br><br><br><br><br>but as to OP...I&#39;ve never felt that on DPH from just the chemical. I&#39;ve thought that about the combo...to the point where I am supremely convinced there&#39;s something not quite kosher with my brain chemistry and that I should NEVER do it again. I don&#39;t plan to. Even 100/100s have had me literally terrified of death. Like some higher power will kill me if I do it again. Idk, weird...but the combo is a little too addicting in the first place to mess with on a regular basis anyway. <br><br>Just DPH...my severely impaired judgement scares the fuck out of me. I&#39;ve driven around on it more times than I care to count. Never full delirium (impossible to drive really) but close enough that I put my life in jeopardy way worse than any time I&#39;ve ever driven drunk (well not black out drunk but w/e).   <div class="abbrev"> Comment too long. Click <a href="/del/res/129054.php#129509">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129054.php#129510" onclick="highlight(129510);">&gt;&gt;</a></td> <td class="reply" id="reply129510"> <a id="129510"></a> <div class="replyheader"> 									 <span class="commentpostername">Bregowine</span>  - <span class="idhighlight">Sun, 15 Jun 2014 19:46:39 EST ID:iSKcHnDJ</span> <span class="reflink">  <a href="/del/res/129054.php#i129510">No.129510</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31363630373230383135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129510', '129054')" title="Report Post 129510"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129510" data-thread="129054"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #730266; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31363630373230383135">  <a href = "/del/res/129054.php#129509" onclick = "highlight(129509)">&gt;&gt;129509</a><br>It&#39;s the only drug where death scenarios pop up alarmingly frequently but it is interesting. Some of them are so  nonsensical.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="delthread129455"> <div class="thread_header"> <a id="129455"></a> <span class="filetitle">Is taking xanax with dramamine a good idea?</span>  <span class="inbetween"> by </span> <span class="postername">Rebecca Goodshit</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 12 Jun 2014 23:54:20 EST ID:ByOqLe5j</span></span>  <span class="reflink"> <a href="/del/res/129455.php#i129455">No.129455</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del33323136323539373731')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('129455')" title="Report Thread 129455"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/del/res/129455.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129455" data-thread="129455"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0252DC; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('delthread129455');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1402631660464.jpg"> 1402631660464.jpg </a> -(<em>629482 B, 1084x800</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgdel33323136323539373731" target="_blank" href="/del/src/1402631660464.jpg"> <img src="/del/thumb/1402631660464s.jpg" alt="629482" class="thumb" /> </a>   			 <blockquote class="opcomment del33323136323539373731">  My friend took 4mg of alprazolam and drank some liquor, shortly after he blacked out, took 900mg Dramamine and doesn&#39;t remember shit, how would he go about remembering what happened?<br>Was it dangerous, I mean, he probably has a dead liver by now but what about brain damage?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/del/res/129455.php#129458" onclick="highlight(129458);">&gt;&gt;</a></td> <td class="reply" id="reply129458"> <a id="129458"></a> <div class="replyheader"> 									 <span class="commentpostername">Eliza Fuckinghood</span>  - <span class="idhighlight">Fri, 13 Jun 2014 00:53:35 EST ID:SBtPhDKt</span> <span class="reflink">  <a href="/del/res/129455.php#i129458">No.129458</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del393830303332333637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129458', '129455')" title="Report Post 129458"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129458" data-thread="129455"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CABB57; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del393830303332333637">  i only want to see part 2 of that comic   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129455.php#129460" onclick="highlight(129460);">&gt;&gt;</a></td> <td class="reply" id="reply129460"> <a id="129460"></a> <div class="replyheader"> 									 <span class="commentpostername">Heroin Jesus</span>  - <span class="idhighlight">Fri, 13 Jun 2014 01:32:19 EST ID:/XPg/+RM</span> <span class="reflink">  <a href="/del/res/129455.php#i129460">No.129460</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31323233343234353834')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129460', '129455')" title="Report Post 129460"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129460" data-thread="129455"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FD31BE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31323233343234353834">  <a href = "/del/res/129455.php#129458" onclick = "highlight(129458)">&gt;&gt;129458</a><br>and part 3   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129455.php#129474" onclick="highlight(129474);">&gt;&gt;</a></td> <td class="reply" id="reply129474"> <a id="129474"></a> <div class="replyheader"> 									 <span class="commentpostername">Hours</span> <span class="postertrip">!BUcrJDbynE</span> - <span class="idhighlight">Fri, 13 Jun 2014 20:06:18 EST ID:4XOPgINP</span> <span class="reflink">  <a href="/del/res/129455.php#i129474">No.129474</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31333637353538353130')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129474', '129455')" title="Report Post 129474"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129474" data-thread="129455"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #923B7D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31333637353538353130">  <a href = "/del/res/129455.php" onclick = "highlight(129455)">&gt;&gt;129455</a><br><br><blockquote class = "unkfunc">&gt;how would he go about remembering what happened?<br></blockquote><br>Anterograde amnesia doesnt work that way, you cant jog your memory when no memory exists. When you have a drug induced blackout period, especially with benzos, it&#39;s because your brain wasn&#39;t recording at all so no data exists.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129455.php#129476" onclick="highlight(129476);">&gt;&gt;</a></td> <td class="reply" id="reply129476"> <a id="129476"></a> <div class="replyheader"> 									 <span class="commentpostername">Nicholas Gishcocke</span>  - <span class="idhighlight">Fri, 13 Jun 2014 22:48:29 EST ID:7xNxn3o3</span> <span class="reflink">  <a href="/del/res/129455.php#i129476">No.129476</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del33343933323136343035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129476', '129455')" title="Report Post 129476"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129476" data-thread="129455"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5383F1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del33343933323136343035">  I love Xanny and DPH together, but mixing all 3 of those drugs was just stupid. Anyways I doubt much damage was done, then again who knows.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129455.php#129496" onclick="highlight(129496);">&gt;&gt;</a></td> <td class="reply" id="reply129496"> <a id="129496"></a> <div class="replyheader"> 									 <span class="commentpostername">Rebecca Goodshit</span>  - <span class="idhighlight">Sun, 15 Jun 2014 14:28:48 EST ID:ByOqLe5j</span> <span class="reflink">  <a href="/del/res/129455.php#i129496">No.129496</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del33323136323539373731')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129496', '129455')" title="Report Post 129496"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129496" data-thread="129455"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AF0EA3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del33323136323539373731">  <a href = "/del/res/129455.php#129458" onclick = "highlight(129458)">&gt;&gt;129458</a><br><a href = "/del/res/129455.php#129460" onclick = "highlight(129460)">&gt;&gt;129460</a><br>Actually, me too.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="delthread129457"> <div class="thread_header"> <a id="129457"></a> <span class="filetitle">fap dose failure</span>  <span class="inbetween"> by </span> <span class="postername">Eliza Fuckinghood</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 13 Jun 2014 00:50:50 EST ID:SBtPhDKt</span></span>  <span class="reflink"> <a href="/del/res/129457.php#i129457">No.129457</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del393830303332333637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('129457')" title="Report Thread 129457"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/del/res/129457.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129457" data-thread="129457"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7A4771; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('delthread129457');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1402635050364.png"> 1402635050364.png </a> -(<em>35262 B, 966x142</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgdel393830303332333637" target="_blank" href="/del/src/1402635050364.png"> <img src="/del/thumb/1402635050364s.jpg" alt="35262" class="thumb" /> </a>   			 <blockquote class="opcomment del393830303332333637">  just does not work, or isn&#39;t that great.<br><br>it it possibru?   </blockquote>   				 				  <span class="omittedposts">   3 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/del/res/129457.php#129475" onclick="highlight(129475);">&gt;&gt;</a></td> <td class="reply" id="reply129475"> <a id="129475"></a> <div class="replyheader"> 									 <span class="commentpostername">Bregowine</span>  - <span class="idhighlight">Fri, 13 Jun 2014 21:31:32 EST ID:iSKcHnDJ</span> <span class="reflink">  <a href="/del/res/129457.php#i129475">No.129475</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31363630373230383135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129475', '129457')" title="Report Post 129475"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129475" data-thread="129457"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BDFF97; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31363630373230383135">  Do something else...wait for that &quot;tickling&quot; feeling hours mentioned...it&#39;s fairly distinctive and occurs on every antihistamine I have tried. 3hr mark is a fairly good time frame. Watch a movie or something and enjoy the comeup. <br><br>You&#39;ll notice sexual warping in regular movies as well. Try watching a sensual movie instead of porn on the comeup. You should notice the thought changes easily. That simple sex scene that you&#39;ve seen in &quot;x&quot; movie suddenly has you feeling like you&#39;ve never seen it before.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129457.php#129483" onclick="highlight(129483);">&gt;&gt;</a></td> <td class="reply" id="reply129483"> <a id="129483"></a> <div class="replyheader"> 									 <span class="commentpostername">Hours</span> <span class="postertrip">!BUcrJDbynE</span> - <span class="idhighlight">Sat, 14 Jun 2014 09:35:15 EST ID:4XOPgINP</span> <span class="reflink">  <a href="/del/res/129457.php#i129483">No.129483</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31333637353538353130')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129483', '129457')" title="Report Post 129483"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129483" data-thread="129457"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #36FFBC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31333637353538353130">  <a href = "/del/res/129457.php#129475" onclick = "highlight(129475)">&gt;&gt;129475</a><br><br>That last thing you said is very true. I&#39;d actually often exceed a fap dose and stray into do not want territory just because I found the change in perspective to be the best part. Like you said, you watch something with a slightly erotic scene and you feel 13 again, then when you go pick out your favorite porn it becomes brand new again, or rather not so much brand new as having it&#39;s novelty restored in a way you&#39;d never imagined before.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129457.php#129491" onclick="highlight(129491);">&gt;&gt;</a></td> <td class="reply" id="reply129491"> <a id="129491"></a> <div class="replyheader"> 									 <span class="commentpostername">Barnaby Funnerkire</span>  - <span class="idhighlight">Sat, 14 Jun 2014 23:20:00 EST ID:RZH3aLXC</span> <span class="reflink">  <a href="/del/res/129457.php#i129491">No.129491</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31323831313331343639')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129491', '129457')" title="Report Post 129491"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129491" data-thread="129457"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3452B1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31323831313331343639">  fuck i love fap doses it is the only time i can actually look at porn and not feel weird, blame it on the dph. I&#39;m not even looking at it to get off either its just that its sometimes fun to play xtube roulette (dont play it sober)   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129457.php#129492" onclick="highlight(129492);">&gt;&gt;</a></td> <td class="reply" id="reply129492"> <a id="129492"></a> <div class="replyheader"> 									 <span class="commentpostername">CrazyFolksTribe</span> <span class="postertrip">!loJSOMZg0g</span> - <span class="idhighlight">Sun, 15 Jun 2014 02:09:05 EST ID:U8rarUtl</span> <span class="reflink">  <a href="/del/res/129457.php#i129492">No.129492</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31313333323637373233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129492', '129457')" title="Report Post 129492"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129492" data-thread="129457"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E6F1A7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31313333323637373233">  <a href = "/del/res/129457.php#129491" onclick = "highlight(129491)">&gt;&gt;129491</a><br>It&#39;s the exact opposite for me. When I look at porn on DPH I feel like a weirdo doing something really immoral, which adds to the excitement and makes the orgasm better.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129457.php#129493" onclick="highlight(129493);">&gt;&gt;</a></td> <td class="reply" id="reply129493"> <a id="129493"></a> <div class="replyheader"> 									 <span class="commentpostername">Frederick Blackwater</span>  - <span class="idhighlight">Sun, 15 Jun 2014 02:25:11 EST ID:7HnJvcz4</span> <span class="reflink">  <a href="/del/res/129457.php#i129493">No.129493</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31313337383833333139')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129493', '129457')" title="Report Post 129493"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129493" data-thread="129457"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CA57A0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1402813511054.jpg"> 1402813511054.jpg </a> -(<em>79424 B, 374x838</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/del/src/1402813511054.jpg"> <img src="/del/thumb/1402813511054s.jpg" alt="79424" class="thumb" /> </a>    <blockquote  class="del31313337383833333139">  <a href = "/del/res/129457.php#129483" onclick = "highlight(129483)">&gt;&gt;129483</a><br>That&#39;s cool that someone else doses in the doNot want zone I always find my self there when any tolerance develops it use to be too much but I enjoy it a lot more now makes everything really intense.<br>I don&#39;t understand how it takes an hour to two for some people, I always dose on an empty stomach and I can feel the first changes around 25-35 minutes and by 40-50 I&#39;m in heaven.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="delthread128952"> <div class="thread_header"> <a id="128952"></a> <span class="filetitle">Diphenyhdramine Cream</span>  <span class="inbetween"> by </span> <span class="postername">William Puffingdale</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 24 May 2014 14:19:42 EST ID:Ulr5Vlan</span></span>  <span class="reflink"> <a href="/del/res/128952.php#i128952">No.128952</a> </span>    			 <!--  - Awesome Thread? <a href="/del/taimaba.pl?board=del&amp;task=vote&amp;thread=128952&amp;vote=0">No!</a> | <a href="/del/taimaba.pl?board=del&amp;task=vote&amp;thread=128952&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31383038363833333536')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('128952')" title="Report Thread 128952"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/del/res/128952.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="128952" data-thread="128952"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9A3039; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('delthread128952');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1400955582137.jpg"> 1400955582137.jpg </a> -(<em>51489 B, 450x389</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgdel31383038363833333536" target="_blank" href="/del/src/1400955582137.jpg"> <img src="/del/thumb/1400955582137s.jpg" alt="51489" class="thumb" /> </a>   			 <blockquote class="opcomment del31383038363833333536">  So I have some diphenhydramine cream right? It&#39;s 2% of 28.4 grams which is like 500mg. You can tell where this is going.<br><br>If I rub the whole thing all over my body will I get high or do I have to eat it?<br>It&#39;s also got .1% zinc acetate as it&#39;s other listed active ingredient.   </blockquote>   				 				  <span class="omittedposts">  17 posts and 3 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/del/res/128952.php#129032" onclick="highlight(129032);">&gt;&gt;</a></td> <td class="reply" id="reply129032"> <a id="129032"></a> <div class="replyheader"> 									 <span class="commentpostername">Shitting Buzzway</span>  - <span class="idhighlight">Wed, 28 May 2014 04:40:41 EST ID:CxQk6EyW</span> <span class="reflink">  <a href="/del/res/128952.php#i129032">No.129032</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del32393038353938373832')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129032', '128952')" title="Report Post 129032"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129032" data-thread="128952"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D3BBC6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del32393038353938373832">  <a href = "/del/res/128952.php#128998" onclick = "highlight(128998)">&gt;&gt;128998</a><br>You made mucus come out of my nose I laughed so hard   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/128952.php#129126" onclick="highlight(129126);">&gt;&gt;</a></td> <td class="reply" id="reply129126"> <a id="129126"></a> <div class="replyheader"> 									 <span class="commentpostername">Sidney Wicklechodging</span>  - <span class="idhighlight">Sat, 31 May 2014 03:10:23 EST ID:CCjCDdeM</span> <span class="reflink">  <a href="/del/res/128952.php#i129126">No.129126</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del32333930383433303233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129126', '128952')" title="Report Post 129126"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129126" data-thread="128952"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #71A676; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1401520223499.jpg"> 1401520223499.jpg </a> -(<em>14419 B, 419x304</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/del/src/1401520223499.jpg"> <img src="/del/thumb/1401520223499s.jpg" alt="14419" class="thumb" /> </a>    <blockquote  class="del32333930383433303233">  Is this for real?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/128952.php#129140" onclick="highlight(129140);">&gt;&gt;</a></td> <td class="reply" id="reply129140"> <a id="129140"></a> <div class="replyheader"> 									 <span class="commentpostername">Beatrice Hadgeham</span>  - <span class="idhighlight">Sat, 31 May 2014 18:17:50 EST ID:ftxlYnYo</span> <span class="reflink">  <a href="/del/res/128952.php#i129140">No.129140</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31313838303338333632')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129140', '128952')" title="Report Post 129140"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129140" data-thread="128952"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #942F3B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31313838303338333632">  <a href = "/del/res/128952.php#128995" onclick = "highlight(128995)">&gt;&gt;128995</a><br>What the he&#39;ll is that .gif from?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/128952.php#129145" onclick="highlight(129145);">&gt;&gt;</a></td> <td class="reply" id="reply129145"> <a id="129145"></a> <div class="replyheader"> 									 <span class="commentpostername">Kerflap</span> <span class="postertrip">!HUZ.4c6SGE</span> - <span class="idhighlight">Sun, 01 Jun 2014 00:26:28 EST ID:49yIt6Ip</span> <span class="reflink">  <a href="/del/res/128952.php#i129145">No.129145</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31363537393032313338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129145', '128952')" title="Report Post 129145"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129145" data-thread="128952"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BC79F4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31363537393032313338">  <a href = "/del/res/128952.php#129140" onclick = "highlight(129140)">&gt;&gt;129140</a><br><br>I looked this up, which you could have as well, but it&#39;s from Doctor Who. <br><br>www.youtube.com/watch?v=YUrMOcjMHoE<br><br>Nb   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/128952.php#129471" onclick="highlight(129471);">&gt;&gt;</a></td> <td class="reply" id="reply129471"> <a id="129471"></a> <div class="replyheader"> 									 <span class="commentpostername">Hugh Cleddlehall</span>  - <span class="idhighlight">Fri, 13 Jun 2014 19:23:09 EST ID:UQqqFlnH</span> <span class="reflink">  <a href="/del/res/128952.php#i129471">No.129471</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31333736343635313433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129471', '128952')" title="Report Post 129471"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129471" data-thread="128952"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D2D61C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31333736343635313433">  <a href = "/del/res/128952.php#128995" onclick = "highlight(128995)">&gt;&gt;128995</a><br>That&#39;s basically the definition of pushing the boundaries.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="delthread128851"> <div class="thread_header"> <a id="128851"></a> <span class="filetitle">Gaming Dose</span>  <span class="inbetween"> by </span> <span class="postername">Augustus Chenningwater</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 21 May 2014 03:45:00 EST ID:ywxcs3U6</span></span>  <span class="reflink"> <a href="/del/res/128851.php#i128851">No.128851</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del32393032303536343736')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('128851')" title="Report Thread 128851"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/del/res/128851.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="128851" data-thread="128851"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E8E2FA; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('delthread128851');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1400658300715.jpg"> 1400658300715.jpg </a> -(<em>145006 B, 768x1024</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgdel32393032303536343736" target="_blank" href="/del/src/1400658300715.jpg"> <img src="/del/thumb/1400658300715s.jpg" alt="145006" class="thumb" /> </a>   			 <blockquote class="opcomment del32393032303536343736">  What is a good dose(no tolerance) to play Fallout: NV all night in the dark?   </blockquote>   				 				  <span class="omittedposts">   4 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/del/res/128851.php#128859" onclick="highlight(128859);">&gt;&gt;</a></td> <td class="reply" id="reply128859"> <a id="128859"></a> <div class="replyheader"> 									 <span class="commentpostername">Basil Peckleham</span>  - <span class="idhighlight">Wed, 21 May 2014 08:14:24 EST ID:uhAmhoDe</span> <span class="reflink">  <a href="/del/res/128851.php#i128859">No.128859</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31323036383434393438')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('128859', '128851')" title="Report Post 128859"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="128859" data-thread="128851"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DCFEB0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31323036383434393438">  <a href = "/del/res/128851.php#128852" onclick = "highlight(128852)">&gt;&gt;128852</a><br>this <br>i watched my friend play dark souls for hours with out moving on 450   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/128851.php#128860" onclick="highlight(128860);">&gt;&gt;</a></td> <td class="reply" id="reply128860"> <a id="128860"></a> <div class="replyheader"> 									 <span class="commentpostername">Macska</span>  - <span class="idhighlight">Wed, 21 May 2014 11:12:08 EST ID:gL3y0MNb</span> <span class="reflink">  <a href="/del/res/128851.php#i128860">No.128860</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del33303937323136383034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('128860', '128851')" title="Report Post 128860"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="128860" data-thread="128851"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8509E9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del33303937323136383034">  <a href = "/del/res/128851.php#128856" onclick = "highlight(128856)">&gt;&gt;128856</a><br><br>Lol minecraft for sure! <br><br>Sometimes I&#39;ll take 200-300 mg and play minecraft late at night. I make either incomplete projects where I keep forgetting what the goal was and it ends up being a mess or I stay focused and have odd inspirations throughout. I&#39;ll post some of my minecraft del creations sometime. <br><br>I play online with my brother every few days and he&#39;s always like &quot;what the hell man&quot; when he sees some stuff.<br><br> Last night:<br><blockquote class = "unkfunc">&gt;&quot;What is this mismatched maze with beds in it supposed to be?&quot; <br></blockquote><br>haha   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/128851.php#128862" onclick="highlight(128862);">&gt;&gt;</a></td> <td class="reply" id="reply128862"> <a id="128862"></a> <div class="replyheader"> 									 <span class="commentpostername">Cyril Fuckingfuck</span>  - <span class="idhighlight">Wed, 21 May 2014 16:23:01 EST ID:bi3o8BBm</span> <span class="reflink">  <a href="/del/res/128851.php#i128862">No.128862</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del32363139343735363831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('128862', '128851')" title="Report Post 128862"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="128862" data-thread="128851"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #04E566; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del32363139343735363831">  <a href = "/del/res/128851.php#128860" onclick = "highlight(128860)">&gt;&gt;128860</a><br><br>That sounds funny, does your brother do drugs at all? And do you try to explain yourself when he mentions the DPH structures?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/128851.php#128869" onclick="highlight(128869);">&gt;&gt;</a></td> <td class="reply" id="reply128869"> <a id="128869"></a> <div class="replyheader"> 									 <span class="commentpostername">Macska</span>  - <span class="idhighlight">Wed, 21 May 2014 21:00:53 EST ID:gL3y0MNb</span> <span class="reflink">  <a href="/del/res/128851.php#i128869">No.128869</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del33303937323136383034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('128869', '128851')" title="Report Post 128869"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="128869" data-thread="128851"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4E67F4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del33303937323136383034">  <a href = "/del/res/128851.php#128862" onclick = "highlight(128862)">&gt;&gt;128862</a><br><br>The most he&#39;ll ever do is drink 2 beers. He&#39;s never been intoxicated from anything but he knows I ingest drugs like a caterpillar trying to become a psychedelic butterfly. I usually just tell him I didn&#39;t make it or at least don&#39;t remember and he&#39;s like &quot;huh well lets work on the Deku tree some more.&quot; He&#39;s pretty weird minded as it is so its never too confusing for him lol.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/128851.php#129469" onclick="highlight(129469);">&gt;&gt;</a></td> <td class="reply" id="reply129469"> <a id="129469"></a> <div class="replyheader"> 									 <span class="commentpostername">Betsy Nebblehall</span>  - <span class="idhighlight">Fri, 13 Jun 2014 18:05:52 EST ID:9EJ30R7t</span> <span class="reflink">  <a href="/del/res/128851.php#i129469">No.129469</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31343731373332343635')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129469', '128851')" title="Report Post 129469"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129469" data-thread="128851"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #ED66FF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31343731373332343635">  <a href = "/del/res/128851.php#128869" onclick = "highlight(128869)">&gt;&gt;128869</a><br><br>play F.E.A.R. (the first one) if u dare. i dont think i can even play it 2 minutes.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="delthread129465"> <div class="thread_header"> <a id="129465"></a> <span class="filetitle">Found Desloratadine</span>  <span class="inbetween"> by </span> <span class="postername">Foggy</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 13 Jun 2014 11:54:04 EST ID:Rx1k1bta</span></span>  <span class="reflink"> <a href="/del/res/129465.php#i129465">No.129465</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del3334353038323336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('129465')" title="Report Thread 129465"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/del/res/129465.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129465" data-thread="129465"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1BE254; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('delthread129465');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1402674844534.jpg"> 1402674844534.jpg </a> -(<em>1460976 B, 1100x1237</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgdel3334353038323336" target="_blank" href="/del/src/1402674844534.jpg"> <img src="/del/thumb/1402674844534s.jpg" alt="1460976" class="thumb" /> </a>   			 <blockquote class="opcomment del3334353038323336">  I just found 25mg of Desloratadine while searching stuff in my closets, I found a drugplate (I&#39;m not a native english speaker, so I dont know how to define those tinfoil sheets of tablets). First thought it was Nautamine (Diphenhydramine) but looked and it was 5mg desloratadine pills.<br>I must have picked it up after looking up on my phone seeing it was an H1 antagonist. But has it a recreational value? Is it safe? No info on that, I&#39;ll guess I won&#39;t take them before a long time or maybe never, but just want to know. <br><br>Has it anti-nausea value? Does it potentiate drugs as DPH do?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/del/res/129465.php#129466" onclick="highlight(129466);">&gt;&gt;</a></td> <td class="reply" id="reply129466"> <a id="129466"></a> <div class="replyheader"> 									 <span class="commentpostername">CrazyFolksTribe</span> <span class="postertrip">!loJSOMZg0g</span> - <span class="idhighlight">Fri, 13 Jun 2014 12:22:27 EST ID:U8rarUtl</span> <span class="reflink">  <a href="/del/res/129465.php#i129466">No.129466</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31313333323637373233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129466', '129465')" title="Report Post 129466"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129466" data-thread="129465"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8C9CD1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31313333323637373233">  Desloratadine is a third-generation antihistamine, so its effects are mainly limited to the peripheral nervous system. It&#39;s probably useful against nausea and to inhibit enzymes like DPH, but it won&#39;t make you delirious.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129465.php#129467" onclick="highlight(129467);">&gt;&gt;</a></td> <td class="reply" id="reply129467"> <a id="129467"></a> <div class="replyheader"> 									 <span class="commentpostername">Foggy</span>  - <span class="idhighlight">Fri, 13 Jun 2014 12:59:43 EST ID:JH50Ybm7</span> <span class="reflink">  <a href="/del/res/129465.php#i129467">No.129467</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del3334343735353237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129467', '129465')" title="Report Post 129467"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129467" data-thread="129465"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6B36E6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del3334343735353237">  <a href = "/del/res/129465.php#129466" onclick = "highlight(129466)">&gt;&gt;129466</a><br>Yeah I found that out. Thanks anyway.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="delthread129449"> <div class="thread_header"> <a id="129449"></a> <span class="filetitle">Low dose or just fuck it?</span>  <span class="inbetween"> by </span> <span class="postername">Stinkfist</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 12 Jun 2014 21:57:58 EST ID:sdVG2LH3</span></span>  <span class="reflink"> <a href="/del/res/129449.php#i129449">No.129449</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31313539393637313536')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('129449')" title="Report Thread 129449"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/del/res/129449.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129449" data-thread="129449"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F3A27E; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('delthread129449');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1402624678879.jpg"> 1402624678879.jpg </a> -(<em>68969 B, 500x667</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgdel31313539393637313536" target="_blank" href="/del/src/1402624678879.jpg"> <img src="/del/thumb/1402624678879s.jpg" alt="68969" class="thumb" /> </a>   			 <blockquote class="opcomment del31313539393637313536">  Got all the DPH in the world, looking to have a good time tonight. Heard that low doses are nice to just chill out and fap too, but I&#39;m also feeling kind of adventurous and want to test my psyche. I have experience with higher doses of 600mg and above, but have yet to test anything lower. Hit me fellas   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/del/res/129449.php#129451" onclick="highlight(129451);">&gt;&gt;</a></td> <td class="reply" id="reply129451"> <a id="129451"></a> <div class="replyheader"> 									 <span class="commentpostername">starbrother</span> <span class="postertrip">!HPTMzdQr/2</span> - <span class="idhighlight">Thu, 12 Jun 2014 22:54:18 EST ID:NVqPV19y</span> <span class="reflink">  <a href="/del/res/129449.php#i129451">No.129451</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31323634333334363037')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129451', '129449')" title="Report Post 129451"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129451" data-thread="129449"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6D0AC7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31323634333334363037">  Good evening fellow traveler!  <br>I&#39;m on a cocktail of chemicals tonight myself, keep your thoughts positive and triumph!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129449.php#129452" onclick="highlight(129452);">&gt;&gt;</a></td> <td class="reply" id="reply129452"> <a id="129452"></a> <div class="replyheader"> 									 <span class="commentpostername">CrazyFolksTribe</span> <span class="postertrip">!loJSOMZg0g</span> - <span class="idhighlight">Thu, 12 Jun 2014 23:16:39 EST ID:U8rarUtl</span> <span class="reflink">  <a href="/del/res/129449.php#i129452">No.129452</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31313333323637373233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129452', '129449')" title="Report Post 129452"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129452" data-thread="129449"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2BACF9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31313333323637373233">  Might as well try a 200mg fap dose if you haven&#39;t gone lower than 600mg yet. It feels much more chill than delirium, that&#39;s for sure.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129449.php#129453" onclick="highlight(129453);">&gt;&gt;</a></td> <td class="reply" id="reply129453"> <a id="129453"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Purrynurk</span>  - <span class="idhighlight">Thu, 12 Jun 2014 23:39:22 EST ID:d8sTrtd/</span> <span class="reflink">  <a href="/del/res/129449.php#i129453">No.129453</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31363235343738323434')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129453', '129449')" title="Report Post 129453"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129453" data-thread="129449"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6284C2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31363235343738323434">  I wouldn&#39;t really call a fap dose a &quot;good time&quot;, aside from the actual orgasm part. But hey, you&#39;ll never know until you try. <img src="//cdn.420chan.org/emoticons/ddp.png">   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129449.php#129456" onclick="highlight(129456);">&gt;&gt;</a></td> <td class="reply" id="reply129456"> <a id="129456"></a> <div class="replyheader"> 									 <span class="commentpostername">Stinkfist</span>  - <span class="idhighlight">Fri, 13 Jun 2014 00:05:57 EST ID:pMOqOPAV</span> <span class="reflink">  <a href="/del/res/129449.php#i129456">No.129456</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31313539393636383433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129456', '129449')" title="Report Post 129456"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129456" data-thread="129449"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4362EE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31313539393636383433">  Throwing in a sedative kratom strain, time to get weird.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="delthread129226"> <div class="thread_header"> <a id="129226"></a> <span class="filetitle">trip report data</span>  <span class="inbetween"> by </span> <span class="postername">Celty </span> <span class="postertrip">!Iv58NJh.IE</span> <span class="inbetween"> - <span class="idhighlight">Wed, 04 Jun 2014 20:28:45 EST ID:ZgPIwEwq</span></span>  <span class="reflink"> <a href="/del/res/129226.php#i129226">No.129226</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31383134363131383237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('129226')" title="Report Thread 129226"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/del/res/129226.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129226" data-thread="129226"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C5EBDF; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('delthread129226');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1401928125211.jpg"> 1401928125211.jpg </a> -(<em>66122 B, 612x792</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgdel31383134363131383237" target="_blank" href="/del/src/1401928125211.jpg"> <img src="/del/thumb/1401928125211s.jpg" alt="66122" class="thumb" /> </a>   			 <blockquote class="opcomment del31383134363131383237">  It&#39;d be cool if you guys could all fill one of these out. Just so we can see what effects are most common/rare, and to define effects that you basically can&#39;t avoid due to them being reported consistantly.<br><br>Also, I&#39;m planning to due some neuroscience research on mice using various psychoactive compounds. The first test will probably be a maze test under the effects of deliriants, amphetamines, dissociatives, and psychedelics. I&#39;ll be doing the tail flick test, maze test, and any other ones that seem interesting or useful. I want experimental results regarding how deliriants, and other psychoactive drugs, effect cognition.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/del/res/129226.php#129229" onclick="highlight(129229);">&gt;&gt;</a></td> <td class="reply" id="reply129229"> <a id="129229"></a> <div class="replyheader"> 									 <span class="commentpostername">CrazyFolksTribe</span> <span class="postertrip">!loJSOMZg0g</span> - <span class="idhighlight">Wed, 04 Jun 2014 21:03:47 EST ID:Ln9J8bQm</span> <span class="reflink">  <a href="/del/res/129226.php#i129229">No.129229</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31363435353535323236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129229', '129226')" title="Report Post 129229"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129229" data-thread="129226"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #86971F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31363435353535323236">  <blockquote class = "unkfunc">&gt;implying any of us have enough memory to fill this out</blockquote>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129226.php#129442" onclick="highlight(129442);">&gt;&gt;</a></td> <td class="reply" id="reply129442"> <a id="129442"></a> <div class="replyheader"> 									 <span class="commentpostername">Clara Wunkinridge</span>  - <span class="idhighlight">Thu, 12 Jun 2014 01:30:28 EST ID:bi3o8BBm</span> <span class="reflink">  <a href="/del/res/129226.php#i129442">No.129442</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del32363139343735363831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129442', '129226')" title="Report Post 129442"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129442" data-thread="129226"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D8C4A8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1402551028926.jpg"> 1402551028926.jpg </a> -(<em>195599 B, 612x797</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/del/src/1402551028926.jpg"> <img src="/del/thumb/1402551028926s.jpg" alt="195599" class="thumb" /> </a>    <blockquote  class="del32363139343735363831">  Even though <a href = "/del/res/129226.php#129229" onclick = "highlight(129229)">&gt;&gt;129229</a> is correct, I tried. In my &quot;last three doses&quot; the first dose I know for sure, but for the last two I could only assume, since I had been doing small doses of DPH every other night leading up to that experience.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129226.php#129446" onclick="highlight(129446);">&gt;&gt;</a></td> <td class="reply" id="reply129446"> <a id="129446"></a> <div class="replyheader"> 									 <span class="commentpostername">starbrother</span> <span class="postertrip">!CGFwIbbIo6</span> - <span class="idhighlight">Thu, 12 Jun 2014 12:44:36 EST ID:NVqPV19y</span> <span class="reflink">  <a href="/del/res/129226.php#i129446">No.129446</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31323634333334363037')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129446', '129226')" title="Report Post 129446"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129446" data-thread="129226"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #55EF0E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31323634333334363037">  Mice aren&#39;t useful in this area, I&#39;d like to posit that a human would be a more valuable source of data. Further, I would like to make myself available for these tests, as well as several I have developed myself!   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="delthread129394"> <div class="thread_header"> <a id="129394"></a> <span class="filetitle">350 Down</span>  <span class="inbetween"> by </span> <span class="postername">Ian Niggerhall</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 10 Jun 2014 00:27:13 EST ID:DPA6/nNg</span></span>  <span class="reflink"> <a href="/del/res/129394.php#i129394">No.129394</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31383133313630323137')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('129394')" title="Report Thread 129394"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/del/res/129394.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129394" data-thread="129394"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #807935; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('delthread129394');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/del/src/1402374433398.jpg"> 1402374433398.jpg </a> -(<em>4777 B, 93x144</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgdel31383133313630323137" target="_blank" href="/del/src/1402374433398.jpg"> <img src="/del/src/1402374433398.jpg" alt="4777" class="thumb" /> </a>   			 <blockquote class="opcomment del31383133313630323137">  Ingested 350mg of DPH at 11:15pm<br>I know I&#39;ll most likely regret it, since I almost always do.<br>Anyways, tips and experiences welcome.   </blockquote>   				 				  <span class="omittedposts">   2 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/del/res/129394.php#129397" onclick="highlight(129397);">&gt;&gt;</a></td> <td class="reply" id="reply129397"> <a id="129397"></a> <div class="replyheader"> 									 <span class="commentpostername">Yojimbo</span> <span class="postertrip">!zuhmdSRuSE</span> - <span class="idhighlight">Tue, 10 Jun 2014 02:31:44 EST ID:/0WnUNH+</span> <span class="reflink">  <a href="/del/res/129394.php#i129397">No.129397</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31333534393731303738')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129397', '129394')" title="Report Post 129397"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129397" data-thread="129394"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E03592; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31333534393731303738">  You shouldn&#39;t have done that<br><br>say hello to Them for me.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129394.php#129415" onclick="highlight(129415);">&gt;&gt;</a></td> <td class="reply" id="reply129415"> <a id="129415"></a> <div class="replyheader"> 									 <span class="commentpostername">Ian Niggerhall</span>  - <span class="idhighlight">Tue, 10 Jun 2014 17:32:46 EST ID:DPA6/nNg</span> <span class="reflink">  <a href="/del/res/129394.php#i129415">No.129415</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31383133313630323137')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129415', '129394')" title="Report Post 129415"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129415" data-thread="129394"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6F9C5E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31383133313630323137">  DPH = Never again...<br>Horrible, horrible idea. <br>Didn&#39;t even see anything. Just felt like shit the whole time.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129394.php#129416" onclick="highlight(129416);">&gt;&gt;</a></td> <td class="reply" id="reply129416"> <a id="129416"></a> <div class="replyheader"> 									 <span class="commentpostername">Cedric Nicklehood</span>  - <span class="idhighlight">Tue, 10 Jun 2014 21:48:19 EST ID:NmnSvnSP</span> <span class="reflink">  <a href="/del/res/129394.php#i129416">No.129416</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31383036313332383735')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129416', '129394')" title="Report Post 129416"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129416" data-thread="129394"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #644001; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31383036313332383735">  <a href = "/del/res/129394.php#129415" onclick = "highlight(129415)">&gt;&gt;129415</a><br><br> Shoulda put music on and closed your eyes, Surely you would of experienced waking dreams.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129394.php#129421" onclick="highlight(129421);">&gt;&gt;</a></td> <td class="reply" id="reply129421"> <a id="129421"></a> <div class="replyheader"> 									 <span class="commentpostername">trayanise</span> <span class="postertrip">!rU8mq5Ca7M</span> - <span class="idhighlight">Wed, 11 Jun 2014 00:25:43 EST ID:d4719qTT</span> <span class="reflink">  <a href="/del/res/129394.php#i129421">No.129421</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del32393136323039363231')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129421', '129394')" title="Report Post 129421"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129421" data-thread="129394"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B27495; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del32393136323039363231">  <a href = "/del/res/129394.php#129415" onclick = "highlight(129415)">&gt;&gt;129415</a><br>No shit. You dosed right into the middle of the do not want zone. Double your dosage next time, you won&#39;t feel as shit but you&#39;ll see some shit   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/del/res/129394.php#129441" onclick="highlight(129441);">&gt;&gt;</a></td> <td class="reply" id="reply129441"> <a id="129441"></a> <div class="replyheader"> 									 <span class="commentpostername">StrokesGoats</span>  - <span class="idhighlight">Thu, 12 Jun 2014 00:40:32 EST ID:7o5jYsft</span> <span class="reflink">  <a href="/del/res/129394.php#i129441">No.129441</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('del31383033393239373435')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('129441', '129394')" title="Report Post 129441"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="129441" data-thread="129394"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #78863B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="del31383033393239373435">  <a href = "/del/res/129394.php#129421" onclick = "highlight(129421)">&gt;&gt;129421</a><br>This, especially if you&#39;e already got a tolerance. 350mg is a higher-dosage fap dose for me, and I can take up to a gram and hardly hallucinate or get delirious. <br><br>Next time, either go with like 900mg  DPH, and if you find it gives you barely any hallucinations/is underwhelming, combo with DXM next time after that. I&#39;d suggest either 350-600mg DXM, and 550 - 800mg DPH. Of course, this is taking into account you have *massive* tolerances to both drugs. I also have a large DXM tolerance, 600mg is low 2nd plateau and 900mg is high end 2nd. <br><br>If you don&#39;t have much of a tolerance to either or just DXM, lower the dosage to be like maybe 300-450mg DXM and 400-650mg. Otherwise, you&#39;ll most likely blackout. If you do have a tolerance to both however, obviously you don&#39;t have to worry about blackout as much. <br><br>Believe me, if you don&#39;t get any kind of delirium and hardly any hallucinations, combining DXM with it will get you there. Perhaps not into full blown delirium, but things become *very* hallucinogenic, more so than either drug alone.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
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
 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/del/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="del" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">  <a href="/del/7.php">&lt;&lt;Last</a>   <span style="font-size: +1;">Pages</span>   <a href="/del/9.php">Next&gt;&gt;</a>  <br />   <a href="/del/index.php">0</a>     <a href="/del/1.php">1</a>     <a href="/del/2.php">2</a>     <a href="/del/3.php">3</a>     <a href="/del/4.php">4</a>     <a href="/del/5.php">5</a>     <a href="/del/6.php">6</a>     <a href="/del/7.php">7</a>      8    <a href="/del/9.php">9</a>     <a href="/del/10.php">10</a>     <a href="/del/11.php">11</a>     <a href="/del/12.php">12</a>     <a href="/del/13.php">13</a>     <a href="/del/14.php">14</a>     <a href="/del/15.php">15</a>     <a href="/del/16.php">16</a>     <a href="/del/17.php">17</a>     <a href="/del/18.php">18</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3854667.php' class='boardlink'>Thread 3854667</a></span>
		<p>>>3854771
It's a metaphor

>>3854819
Worked with the US territory system.

>>3854777
Not "Wor... <a href='/wooo/res/3854667.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='wooo' src='/static/images/board_icons/wooo_icon_32.png' />
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3851399.php' class='boardlink'>Thread 3851399</a></span>
		<p>>>3852283

AYYYY JERKOFF GO BACK TO BIZZARO WORLD WITH THAT BALONEY

EHHHHH... <a href='/wooo/res/3851399.php' class='boardlink'>&#8629;</a></p></li>
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

