http://boards.420chan.org/crops/1.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Thu, 24 Jul 2014 02:56:33 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> Growing &amp; Botany - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/crops_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/crops_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/crops/1.php';
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
	 <div id="header"> <div id="board_logo"> <a href="/crops/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/crops_icon_64.png" alt="/crops/ Icon" /> <p class="board_title_block"> <span class="board_name">/crops/</span> <span class="board_title">Growing &amp; Botany</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
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
	 <!--  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/crops/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="crops" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />     <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>  <tr> <td class="postblock">Name</td> <td> <input title="Name" type="text" name="field1" style="width:224px;" /> <div class="tooltip">  You can leave this blank to post anonymously, or you can create a Tripcode by using the float <b>Name#Password</b> </div>					 </td> </tr>    <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div>  <script type="text/javascript">set_inputs("postform")</script> <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 3000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> <li>This is a work-safe board. Posting adult images is forbidden.</li>			  </ul> </div> <hr style="margin-bottom:2px;" /> 		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://420chan.org/advertise"><img src="http://cdn.420chan.org/sp/YOUR-AD-HERE.gif"></a>
		</div>
		 <hr style="margin-top:2px;" />   <form id="delform" action="/crops/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="crops" />    <div id="cropsthread134819"> <div class="thread_header"> <a id="134819"></a> <span class="filetitle">retarded?</span>  <span class="inbetween"> by </span> <span class="postername">Martha Wuffingsore</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 14 Jul 2014 08:19:23 EST ID:Ege490qw</span></span>  <span class="reflink"> <a href="/crops/res/134819.php#i134819">No.134819</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323932343637373332')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('134819')" title="Report Thread 134819"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/crops/res/134819.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134819" data-thread="134819"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D11B57; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cropsthread134819');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405340363123.jpg"> 1405340363123.jpg </a> -(<em>139617 B, 1024x576</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcrops31323932343637373332" target="_blank" href="/crops/src/1405340363123.jpg"> <img src="/crops/thumb/1405340363123s.jpg" alt="139617" class="thumb" /> </a>   			 <blockquote class="opcomment crops31323932343637373332">  this has to be the most retarded cannabis plant I have ever seen<br>can anybody explain what&#39;s going on here? fucked up genetics?<br>bagseed btw   </blockquote>   				 				  <span class="omittedposts">   6 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/crops/res/134819.php#134912" onclick="highlight(134912);">&gt;&gt;</a></td> <td class="reply" id="reply134912"> <a id="134912"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Blucklestock</span>  - <span class="idhighlight">Thu, 17 Jul 2014 18:43:36 EST ID:eHAevg2A</span> <span class="reflink">  <a href="/crops/res/134819.php#i134912">No.134912</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323932343737383031')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134912', '134819')" title="Report Post 134912"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134912" data-thread="134819"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3DC613; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31323932343737383031">  op here<br><br>it died.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134819.php#134913" onclick="highlight(134913);">&gt;&gt;</a></td> <td class="reply" id="reply134913"> <a id="134913"></a> <div class="replyheader"> 									 <span class="commentpostername">Shitting Grimbanks</span>  - <span class="idhighlight">Thu, 17 Jul 2014 19:10:11 EST ID:3AcD+mGb</span> <span class="reflink">  <a href="/crops/res/134819.php#i134913">No.134913</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31343034333530343336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134913', '134819')" title="Report Post 134913"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134913" data-thread="134819"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CC76B3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405638611521.jpg"> 1405638611521.jpg </a> -(<em>26936 B, 348x541</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/crops/src/1405638611521.jpg"> <img src="/crops/thumb/1405638611521s.jpg" alt="26936" class="thumb" /> </a>    <blockquote  class="crops31343034333530343336">  <a href = "/crops/res/134819.php#134912" onclick = "highlight(134912)">&gt;&gt;134912</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134819.php#134975" onclick="highlight(134975);">&gt;&gt;</a></td> <td class="reply" id="reply134975"> <a id="134975"></a> <div class="replyheader"> 									 <span class="commentpostername">NeemGuy</span>  - <span class="idhighlight">Mon, 21 Jul 2014 13:40:56 EST ID:TEwqJV6X</span> <span class="reflink">  <a href="/crops/res/134819.php#i134975">No.134975</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323832303531343238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134975', '134819')" title="Report Post 134975"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134975" data-thread="134819"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0F1C8F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31323832303531343238">  <a href = "/crops/res/134819.php#134876" onclick = "highlight(134876)">&gt;&gt;134876</a><br>I don&#39;t think that is the proper use of the term &quot;trifoliate&quot;. I&#39;ve always heard the term used to refer to the first leaves on the plant that have 3 leaflets.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134819.php#134978" onclick="highlight(134978);">&gt;&gt;</a></td> <td class="reply" id="reply134978"> <a id="134978"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Gobblebanks</span>  - <span class="idhighlight">Mon, 21 Jul 2014 19:32:41 EST ID:CCgHFTs7</span> <span class="reflink">  <a href="/crops/res/134819.php#i134978">No.134978</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31333639323039353231')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134978', '134819')" title="Report Post 134978"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134978" data-thread="134819"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B5EC86; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405985561983.jpg"> 1405985561983.jpg </a> -(<em>62703 B, 692x533</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/crops/src/1405985561983.jpg"> <img src="/crops/thumb/1405985561983s.jpg" alt="62703" class="thumb" /> </a>    <blockquote  class="crops31333639323039353231">  <a href = "/crops/res/134819.php#134912" onclick = "highlight(134912)">&gt;&gt;134912</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134819.php#134993" onclick="highlight(134993);">&gt;&gt;</a></td> <td class="reply" id="reply134993"> <a id="134993"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Bablingson</span>  - <span class="idhighlight">Tue, 22 Jul 2014 13:32:50 EST ID:zW/6KJ9B</span> <span class="reflink">  <a href="/crops/res/134819.php#i134993">No.134993</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops343037353434393932')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134993', '134819')" title="Report Post 134993"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134993" data-thread="134819"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C10DE7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1406050370914.jpg"> 1406050370914.jpg </a> -(<em>22535 B, 480x600</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/crops/src/1406050370914.jpg"> <img src="/crops/thumb/1406050370914s.jpg" alt="22535" class="thumb" /> </a>    <blockquote  class="crops343037353434393932">  <a href = "/crops/res/134819.php#134912" onclick = "highlight(134912)">&gt;&gt;134912</a>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cropsthread132625"> <div class="thread_header"> <a id="132625"></a> <span class="filetitle">How many weeks?</span>  <span class="inbetween"> by </span> <span class="postername">SA GrowGuy</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 17 Mar 2014 05:49:06 EST ID:Q8N175Lv</span></span>  <span class="reflink"> <a href="/crops/res/132625.php#i132625">No.132625</a> </span>    			 <!--  - Awesome Thread? <a href="/crops/taimaba.pl?board=crops&amp;task=vote&amp;thread=132625&amp;vote=0">No!</a> | <a href="/crops/taimaba.pl?board=crops&amp;task=vote&amp;thread=132625&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31373736333537333638')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('132625')" title="Report Thread 132625"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/crops/res/132625.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="132625" data-thread="132625"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #27464A; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cropsthread132625');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1395049746285.jpg"> 1395049746285.jpg </a> -(<em>947505 B, 1500x2176</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcrops31373736333537333638" target="_blank" href="/crops/src/1395049746285.jpg"> <img src="/crops/thumb/1395049746285s.jpg" alt="947505" class="thumb" /> </a>   			 <blockquote class="opcomment crops31373736333537333638">  Hey /crops/ how ya doin<br><br>Im on the southern-most tip of South Africa with my nameless Sativa here. Outdoor grow under the African sun, lovely.<br><br>Question is, how many more weeks do you think it is before harvest time? Still a long way to go, I realise that, but I was hoping for a month? Maybe a bit more?   </blockquote>   				 				  <span class="omittedposts">  52 posts and 30 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/crops/res/132625.php#134901" onclick="highlight(134901);">&gt;&gt;</a></td> <td class="reply" id="reply134901"> <a id="134901"></a> <div class="replyheader"> 									 <span class="commentpostername">Hamilton Sandlefield</span>  - <span class="idhighlight">Wed, 16 Jul 2014 17:12:20 EST ID:15YE3ANJ</span> <span class="reflink">  <a href="/crops/res/132625.php#i134901">No.134901</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops343135303432333736')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134901', '132625')" title="Report Post 134901"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134901" data-thread="132625"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #696FC0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405545140043.jpg"> 1405545140043.jpg </a> -(<em>26060 B, 403x311</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/crops/src/1405545140043.jpg"> <img src="/crops/thumb/1405545140043s.jpg" alt="26060" class="thumb" /> </a>    <blockquote  class="crops343135303432333736">  <blockquote class = "unkfunc">&gt;black goo</blockquote>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/132625.php#134917" onclick="highlight(134917);">&gt;&gt;</a></td> <td class="reply" id="reply134917"> <a id="134917"></a> <div class="replyheader"> 									 <span class="commentpostername">Hedda Grandspear</span>  - <span class="idhighlight">Fri, 18 Jul 2014 10:57:34 EST ID:5bXPsNx8</span> <span class="reflink">  <a href="/crops/res/132625.php#i134917">No.134917</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323833323231343435')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134917', '132625')" title="Report Post 134917"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134917" data-thread="132625"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #783D00; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31323833323231343435">  <a href = "/crops/res/132625.php#134891" onclick = "highlight(134891)">&gt;&gt;134891</a><br><br>Black liquid stuff... probably not molasses? It does sound like it would be an organic fertilizer. Manure tea like somebody said or else it&#39;s some other sort of compost tea. I&#39;m skeptical to call it organic fertilizer because you don&#39;t get growth like that with organic matter as opposed to inorganic fertilizers because it&#39;s so easy for an organic fertilizer to be deficient in N, P, or K since you can&#39;t control what goes into the solution the way you could control it with inorganic solutions. <br><br>If it is an organic solution then OP has some prime soil and prime light conditions for that baby to have grown the way it did and we should all move to SA.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/132625.php#134921" onclick="highlight(134921);">&gt;&gt;</a></td> <td class="reply" id="reply134921"> <a id="134921"></a> <div class="replyheader"> 									 <span class="commentpostername">Albert Crupperforth</span>  - <span class="idhighlight">Fri, 18 Jul 2014 14:44:48 EST ID:ru5M1sv8</span> <span class="reflink">  <a href="/crops/res/132625.php#i134921">No.134921</a>   </span>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134921', '132625')" title="Report Post 134921"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134921" data-thread="132625"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AE61A8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote >  <a href = "/crops/res/132625.php" onclick = "highlight(132625)">&gt;&gt;132625</a><br>How old is that plant?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/132625.php#134931" onclick="highlight(134931);">&gt;&gt;</a></td> <td class="reply" id="reply134931"> <a id="134931"></a> <div class="replyheader"> 									 <span class="commentpostername">Rebecca Wadgestock</span>  - <span class="idhighlight">Sat, 19 Jul 2014 03:55:24 EST ID:3p6YcAxL</span> <span class="reflink">  <a href="/crops/res/132625.php#i134931">No.134931</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31353538373837343237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134931', '132625')" title="Report Post 134931"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134931" data-thread="132625"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5D1EC9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31353538373837343237">  <a href = "/crops/res/132625.php" onclick = "highlight(132625)">&gt;&gt;132625</a><br>A beautiful plant you have there OP.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/132625.php#134973" onclick="highlight(134973);">&gt;&gt;</a></td> <td class="reply" id="reply134973"> <a id="134973"></a> <div class="replyheader"> 									 <span class="commentpostername">NeemGuy</span>  - <span class="idhighlight">Mon, 21 Jul 2014 13:37:10 EST ID:TEwqJV6X</span> <span class="reflink">  <a href="/crops/res/132625.php#i134973">No.134973</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323832303531343238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134973', '132625')" title="Report Post 134973"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134973" data-thread="132625"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DC1304; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31323832303531343238">  <a href = "/crops/res/132625.php#134917" onclick = "highlight(134917)">&gt;&gt;134917</a><br>I&#39;m not sure what you mean? Bottle organic ferts as well as fermented plant extracts have very predictable nute ratios. Regardless of the ratio, in an organic system, the plant itself controls what nutrients its getting. Starting to get deficient in P? The roots release exudates that stimulates microfauna to start eating the organic material, said fauna then attract predator microbes, and said predator microbes excrete the organic material in a plant soluble form.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cropsthread134900"> <div class="thread_header"> <a id="134900"></a> <span class="filetitle">do I need more light?</span>  <span class="inbetween"> by </span> <span class="postername">Hamilton Blonningmot</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 16 Jul 2014 16:32:42 EST ID:7GR2lS14</span></span>  <span class="reflink"> <a href="/crops/res/134900.php#i134900">No.134900</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops383531323139393533')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('134900')" title="Report Thread 134900"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/crops/res/134900.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134900" data-thread="134900"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C30834; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cropsthread134900');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405542762050.jpg"> 1405542762050.jpg </a> -(<em>2180714 B, 2432x4320</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcrops383531323139393533" target="_blank" href="/crops/src/1405542762050.jpg"> <img src="/crops/thumb/1405542762050s.jpg" alt="2180714" class="thumb" /> </a>   			 <blockquote class="opcomment crops383531323139393533">  Currently about to start a 24 plant flower. I have 6 1000 watt double ended hps lights running off digital ballasts. A friend is telling me I should add 2 more.<br><br>This is for a rdwc hydro system, is this overkill?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/crops/res/134900.php#134914" onclick="highlight(134914);">&gt;&gt;</a></td> <td class="reply" id="reply134914"> <a id="134914"></a> <div class="replyheader"> 									 <span class="commentpostername">Shitting Clipperwill</span>  - <span class="idhighlight">Thu, 17 Jul 2014 20:25:44 EST ID:/gkLCnTF</span> <span class="reflink">  <a href="/crops/res/134900.php#i134914">No.134914</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31383137323031373730')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134914', '134900')" title="Report Post 134914"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134914" data-thread="134900"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #33E601; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31383137323031373730">  depends on the size of the plants but its prolly overkill, mix spectrum is best experiment what your phenotype likes man   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134900.php#134968" onclick="highlight(134968);">&gt;&gt;</a></td> <td class="reply" id="reply134968"> <a id="134968"></a> <div class="replyheader"> 									 <span class="commentpostername">Fucking Brasslehod</span>  - <span class="idhighlight">Mon, 21 Jul 2014 13:19:10 EST ID:PaQGCyso</span> <span class="reflink">  <a href="/crops/res/134900.php#i134968">No.134968</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops383439343933323634')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134968', '134900')" title="Report Post 134968"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134968" data-thread="134900"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #320D2E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops383439343933323634">  <a href = "/crops/res/134900.php" onclick = "highlight(134900)">&gt;&gt;134900</a><br><br>A 6k room is enough for 24 plants. They will do awesome.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134900.php#134972" onclick="highlight(134972);">&gt;&gt;</a></td> <td class="reply" id="reply134972"> <a id="134972"></a> <div class="replyheader"> 									 <span class="commentpostername">NeemGuy</span>  - <span class="idhighlight">Mon, 21 Jul 2014 13:33:30 EST ID:TEwqJV6X</span> <span class="reflink">  <a href="/crops/res/134900.php#i134972">No.134972</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323832303531343238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134972', '134900')" title="Report Post 134972"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134972" data-thread="134900"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FCF565; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31323832303531343238">  Haha, I thought your friend was suggesting adding too more doses of testosterone, lol.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cropsthread134929"> <div class="thread_header"> <a id="134929"></a> <span class="filetitle">Poppy ID</span>  <span class="inbetween"> by </span> <span class="postername">Rebecca Wadgestock</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 19 Jul 2014 03:51:19 EST ID:3p6YcAxL</span></span>  <span class="reflink"> <a href="/crops/res/134929.php#i134929">No.134929</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31353538373837343237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('134929')" title="Report Thread 134929"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/crops/res/134929.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134929" data-thread="134929"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #122C72; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cropsthread134929');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405756279828.jpg"> 1405756279828.jpg </a> -(<em>1256819 B, 1456x2592</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcrops31353538373837343237" target="_blank" href="/crops/src/1405756279828.jpg"> <img src="/crops/thumb/1405756279828s.jpg" alt="1256819" class="thumb" /> </a>   			 <blockquote class="opcomment crops31353538373837343237">  Is anybody able to ID these? Another pic in next post.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/crops/res/134929.php#134930" onclick="highlight(134930);">&gt;&gt;</a></td> <td class="reply" id="reply134930"> <a id="134930"></a> <div class="replyheader"> 									 <span class="commentpostername">Rebecca Wadgestock</span>  - <span class="idhighlight">Sat, 19 Jul 2014 03:52:59 EST ID:3p6YcAxL</span> <span class="reflink">  <a href="/crops/res/134929.php#i134930">No.134930</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31353538373837343237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134930', '134929')" title="Report Post 134930"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134930" data-thread="134929"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #651350; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405756379828.jpg"> 1405756379828.jpg </a> -(<em>766040 B, 1456x2592</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/crops/src/1405756379828.jpg"> <img src="/crops/thumb/1405756379828s.jpg" alt="766040" class="thumb" /> </a>    <blockquote  class="crops31353538373837343237">  Second, any help appreciated!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134929.php#134932" onclick="highlight(134932);">&gt;&gt;</a></td> <td class="reply" id="reply134932"> <a id="134932"></a> <div class="replyheader"> 									 <span class="commentpostername">Nicholas Tootridge</span>  - <span class="idhighlight">Sat, 19 Jul 2014 05:28:33 EST ID:8vyXhK4o</span> <span class="reflink">  <a href="/crops/res/134929.php#i134932">No.134932</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops353230333535343236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134932', '134929')" title="Report Post 134932"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134932" data-thread="134929"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D73C84; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops353230333535343236">  <a href = "/crops/res/134929.php#134930" onclick = "highlight(134930)">&gt;&gt;134930</a><br>Papaver somniferum. Without a good look at the leaves and petals it&#39;s impossible to I.D. beyond that.<br>Chances of it having a high morphine level? 0.1%   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134929.php#134970" onclick="highlight(134970);">&gt;&gt;</a></td> <td class="reply" id="reply134970"> <a id="134970"></a> <div class="replyheader"> 									 <span class="commentpostername">Phoebe Pammermuck</span>  - <span class="idhighlight">Mon, 21 Jul 2014 13:29:14 EST ID:TEwqJV6X</span> <span class="reflink">  <a href="/crops/res/134929.php#i134970">No.134970</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323832303531343238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134970', '134929')" title="Report Post 134970"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134970" data-thread="134929"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4FF4B0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31323832303531343238">  Papaver somniferum indeed. However as the other guy said, probably a very low alkaloid content (opium latex has a lot more alkaloids than just morphine, such as codiene, thebaine, papaverine, and noscapine).   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cropsthread134918"> <div class="thread_header"> <a id="134918"></a> <span class="filetitle">The fuck is this ?</span>  <span class="inbetween"> by </span> <span class="postername">Basil Criblingsat</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 18 Jul 2014 13:23:22 EST ID:zM4PN2y9</span></span>  <span class="reflink"> <a href="/crops/res/134918.php#i134918">No.134918</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31353138343237363136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('134918')" title="Report Thread 134918"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/crops/res/134918.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134918" data-thread="134918"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0E299A; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cropsthread134918');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405704202545.jpg"> 1405704202545.jpg </a> -(<em>209987 B, 1526x962</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcrops31353138343237363136" target="_blank" href="/crops/src/1405704202545.jpg"> <img src="/crops/thumb/1405704202545s.jpg" alt="209987" class="thumb" /> </a>   			 <blockquote class="opcomment crops31353138343237363136">  I have a theory, but want to see what others think first.   </blockquote>   				 				  <span class="omittedposts">   7 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/crops/res/134918.php#134938" onclick="highlight(134938);">&gt;&gt;</a></td> <td class="reply" id="reply134938"> <a id="134938"></a> <div class="replyheader"> 									 <span class="commentpostername">Shit Pebbledid</span>  - <span class="idhighlight">Sun, 20 Jul 2014 03:52:56 EST ID:GKBrl0bA</span> <span class="reflink">  <a href="/crops/res/134918.php#i134938">No.134938</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops32393637373231313934')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134938', '134918')" title="Report Post 134938"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134938" data-thread="134918"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #ED51BD; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops32393637373231313934">  <a href = "/crops/res/134918.php#134933" onclick = "highlight(134933)">&gt;&gt;134933</a><br>Interesting, may I ask what type of plant it is?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134918.php#134939" onclick="highlight(134939);">&gt;&gt;</a></td> <td class="reply" id="reply134939"> <a id="134939"></a> <div class="replyheader"> 									 <span class="commentpostername">Cedric Murdford</span>  - <span class="idhighlight">Sun, 20 Jul 2014 04:46:42 EST ID:G5N5QwZ0</span> <span class="reflink">  <a href="/crops/res/134918.php#i134939">No.134939</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops32393032363938393038')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134939', '134918')" title="Report Post 134939"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134939" data-thread="134918"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B8A1FC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops32393032363938393038">  dude those are spider mites 100% get some neem oil and spray you plants with it when they go into there night cycle. Dont spray in the morning or you willl burn your plants and kill these things quick or they will spread eveywhere   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134918.php#134940" onclick="highlight(134940);">&gt;&gt;</a></td> <td class="reply" id="reply134940"> <a id="134940"></a> <div class="replyheader"> 									 <span class="commentpostername">Archie Fommerdale</span>  - <span class="idhighlight">Sun, 20 Jul 2014 09:18:36 EST ID:29vMyaoN</span> <span class="reflink">  <a href="/crops/res/134918.php#i134940">No.134940</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31343034333530313530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134940', '134918')" title="Report Post 134940"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134940" data-thread="134918"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6292A4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405862316079.jpg"> 1405862316079.jpg </a> -(<em>402279 B, 2298x1675</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/crops/src/1405862316079.jpg"> <img src="/crops/thumb/1405862316079s.jpg" alt="402279" class="thumb" /> </a>    <blockquote  class="crops31343034333530313530">  <a href = "/crops/res/134918.php#134939" onclick = "highlight(134939)">&gt;&gt;134939</a><br>I cant see any bugs<br>The first photo isnt that good, dust and pollen on the leaf<br>Here is another one, you can see crystals.<br><a href = "/crops/res/134918.php#134938" onclick = "highlight(134938)">&gt;&gt;134938</a><br>pepper   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134918.php#134946" onclick="highlight(134946);">&gt;&gt;</a></td> <td class="reply" id="reply134946"> <a id="134946"></a> <div class="replyheader"> 									 <span class="commentpostername">oceangrown</span> <span class="postertrip">!ErY2TknG0w</span> - <span class="idhighlight">Sun, 20 Jul 2014 14:55:14 EST ID:nHVb3G+q</span> <span class="reflink">  <a href="/crops/res/134918.php#i134946">No.134946</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31383038343138333635')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134946', '134918')" title="Report Post 134946"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134946" data-thread="134918"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B9DFF8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31383038343138333635">  <a href = "/crops/res/134918.php#134933" onclick = "highlight(134933)">&gt;&gt;134933</a><br>Russet mites are invisible to the naked eye except for when the infestation is heavy they will appear like dust on the plant..   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134918.php#134967" onclick="highlight(134967);">&gt;&gt;</a></td> <td class="reply" id="reply134967"> <a id="134967"></a> <div class="replyheader"> 									 <span class="commentpostername">Phoebe Pammermuck</span>  - <span class="idhighlight">Mon, 21 Jul 2014 13:17:18 EST ID:TEwqJV6X</span> <span class="reflink">  <a href="/crops/res/134918.php#i134967">No.134967</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323832303531343238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134967', '134918')" title="Report Post 134967"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134967" data-thread="134918"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BE5E8C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31323832303531343238">  <a href = "/crops/res/134918.php#134940" onclick = "highlight(134940)">&gt;&gt;134940</a><br>Scale maybe? Powdery mildew? Either way, Neem will rape both, IN THE ASS.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cropsthread134492"> <div class="thread_header"> <a id="134492"></a> <span class="filetitle">Prepping a grow spot</span>  <span class="inbetween"> by </span> <span class="postername">Shitting Febberbadge</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 25 Jun 2014 17:58:08 EST ID:t2IgQTf1</span></span>  <span class="reflink"> <a href="/crops/res/134492.php#i134492">No.134492</a> </span>    			 <!--  - Awesome Thread? <a href="/crops/taimaba.pl?board=crops&amp;task=vote&amp;thread=134492&amp;vote=0">No!</a> | <a href="/crops/taimaba.pl?board=crops&amp;task=vote&amp;thread=134492&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31313133303137343331')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('134492')" title="Report Thread 134492"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/crops/res/134492.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134492" data-thread="134492"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #317493; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cropsthread134492');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1403733488175.jpg"> 1403733488175.jpg </a> -(<em>339640 B, 540x720</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcrops31313133303137343331" target="_blank" href="/crops/src/1403733488175.jpg"> <img src="/crops/thumb/1403733488175s.jpg" alt="339640" class="thumb" /> </a>   			 <blockquote class="opcomment crops31313133303137343331">  Hey /crops/ complete n00b here.<br><br>It dawned on me the other day that the area behind my house is probably the best grow spot I&#39;d ever find around here. Of course I know it&#39;s too late to plant this year (I live on the northern plains) but I&#39;d like to get the area somewhat prepped for next season. <br><br>Here&#39;s the deal, the area i have in mind (pictured) is a small area of vegetation directly behind my back yard that is only accessible through either my property or the house to the left of me (which is occupied by three women who never go back there). The area has another benefit in that it&#39;s right next to where we&#39;ve been dumping leaves and grass clippings the past ten years so I have a couple compost piles to work with as well.<br><br>Now my questions are thus, should I use weed killer this year to clear a spot or will the chemicals linger and effect plants growing next year? If I were to just take a hatchet to the shrub/tree things growing back there would that be sufficient to kill them or should I uproot them? If I wanted to to make a space for say 5-6 plants how many square feet should I clear? Finally is there anything I should do now to the area to further prep it for next season? Thanks.   </blockquote>   				 				  <span class="omittedposts">  35 posts and 3 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/crops/res/134492.php#134948" onclick="highlight(134948);">&gt;&gt;</a></td> <td class="reply" id="reply134948"> <a id="134948"></a> <div class="replyheader"> 									 <span class="commentpostername">Ian Worthingdock</span>  - <span class="idhighlight">Sun, 20 Jul 2014 20:54:54 EST ID:9QX2llgy</span> <span class="reflink">  <a href="/crops/res/134492.php#i134948">No.134948</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31333437363937333134')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134948', '134492')" title="Report Post 134948"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134948" data-thread="134492"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #156813; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31333437363937333134">  <a href = "/crops/res/134492.php#134943" onclick = "highlight(134943)">&gt;&gt;134943</a><br>You can cover the plant in something rich in sulphur like garlic to repel insects. You can also use something calcium rich like egg shell to repel slugs. Finally you can use lion piss to repel curios mammals, I hear most big cats will do or dog shit I remember someone on here said.<br><br>If you actually identify the culprit let us know. Keep going dude!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134492.php#134949" onclick="highlight(134949);">&gt;&gt;</a></td> <td class="reply" id="reply134949"> <a id="134949"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Blatherspear</span>  - <span class="idhighlight">Sun, 20 Jul 2014 20:58:16 EST ID:HPZW4/V+</span> <span class="reflink">  <a href="/crops/res/134492.php#i134949">No.134949</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops33343831383437383530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134949', '134492')" title="Report Post 134949"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134949" data-thread="134492"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #14FA7F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops33343831383437383530">  <a href = "/crops/res/134492.php#134948" onclick = "highlight(134948)">&gt;&gt;134948</a><br>Another thing which keeps away larger animals are capsaicin sprays. You might be able to jury rig something like one of those if you had some really hot peppers.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134492.php#134950" onclick="highlight(134950);">&gt;&gt;</a></td> <td class="reply" id="reply134950"> <a id="134950"></a> <div class="replyheader"> 									 <span class="commentpostername">Ian Worthingdock</span>  - <span class="idhighlight">Sun, 20 Jul 2014 21:00:15 EST ID:9QX2llgy</span> <span class="reflink">  <a href="/crops/res/134492.php#i134950">No.134950</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31333437363937333134')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134950', '134492')" title="Report Post 134950"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134950" data-thread="134492"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DCD321; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31333437363937333134">  <a href = "/crops/res/134492.php#134943" onclick = "highlight(134943)">&gt;&gt;134943</a><br>Sorry, in answer to the question.<br>No idea, could be a number of things. I am sure she will do fine if proper care is taken. Try to catch the little pest in the act. As is she looks fine.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134492.php#134951" onclick="highlight(134951);">&gt;&gt;</a></td> <td class="reply" id="reply134951"> <a id="134951"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Bandersutch</span>  - <span class="idhighlight">Sun, 20 Jul 2014 21:10:09 EST ID:gyadQfcJ</span> <span class="reflink">  <a href="/crops/res/134492.php#i134951">No.134951</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31313133303138303232')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134951', '134492')" title="Report Post 134951"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134951" data-thread="134492"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #166D9C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31313133303138303232">  <a href = "/crops/res/134492.php#134950" onclick = "highlight(134950)">&gt;&gt;134950</a><br>Yeah I ran to the store this morning and bought some spray that was a combo of insecticidal soap and sulfur and sprayed her. I&#39;m also soaking some NAS organic tobacco in water, tomorrow after I strain and boil I&#39;ll give all the plants a good spray.<br><br>No idea though, couldn&#39;t see any eggs/bugs and the other three look great. Hopefully whatever it was was just passing by.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134492.php#134966" onclick="highlight(134966);">&gt;&gt;</a></td> <td class="reply" id="reply134966"> <a id="134966"></a> <div class="replyheader"> 									 <span class="commentpostername">Phoebe Pammermuck</span>  - <span class="idhighlight">Mon, 21 Jul 2014 13:16:16 EST ID:TEwqJV6X</span> <span class="reflink">  <a href="/crops/res/134492.php#i134966">No.134966</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323832303531343238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134966', '134492')" title="Report Post 134966"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134966" data-thread="134492"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B884C3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31323832303531343238">  <a href = "/crops/res/134492.php#134943" onclick = "highlight(134943)">&gt;&gt;134943</a><br><a href = "/crops/res/134492.php#134943" onclick = "highlight(134943)">&gt;&gt;134943</a><br>I highly recommend topdressing with some neemcake/ neem seed meal. This will prevent soil pests, and provide a much more passive way of dealing with insects. Instead of having to come back all the time and spray your plants, the roots will absorb the limonoid compounds in the neem, directly into their tissue.<br>Neem cake also has a nice NPK profile (3-.02-1) (varies) as well as many vitamins and micronutrients, and stimulates microbe growth.<br><br>HOWEVER, systemically absorbed Neem will NOT prevent aphids (root aphids yes, since they have to touch the cake to get to your roots) because aphids feed on a part of the plant that will have a lot lower concentration of liminoids. That&#39;s not to say I haven&#39;t seen systemic neem be effective against aphids, they just get a much smaller dose compared to leaf feeding pests, such as spider mites.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cropsthread134960"> <div class="thread_header"> <a id="134960"></a> <span class="filetitle">grow question</span>  <span class="inbetween"> by </span> <span class="postername">Nigger Murdhood</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 21 Jul 2014 09:43:23 EST ID:2RMrEcnj</span></span>  <span class="reflink"> <a href="/crops/res/134960.php#i134960">No.134960</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops373832353034343136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('134960')" title="Report Thread 134960"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/crops/res/134960.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134960" data-thread="134960"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4886DD; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cropsthread134960');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405950203627.jpg"> 1405950203627.jpg </a> -(<em>141384 B, 600x375</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcrops373832353034343136" target="_blank" href="/crops/src/1405950203627.jpg"> <img src="/crops/thumb/1405950203627s.jpg" alt="141384" class="thumb" /> </a>   			 <blockquote class="opcomment crops373832353034343136">  Hey guys. It&#39;s my first time growing a bit for myself and I have a question.<br>Three plants. One of them has a distinctive smell and the other two don&#39;t smell at all. They grew from different seeds, gathered from the nug I got over time. They&#39;re not feminised and so my first suspicion was that the other two were males. Don&#39;t rly know if the smell would be a valid indicator though.<br>What&#39;s your opinion /crops/? Do I cut the other ones off, or do I let them all grow? If I let them, what would be my first signs of male plants?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/crops/res/134960.php#134961" onclick="highlight(134961);">&gt;&gt;</a></td> <td class="reply" id="reply134961"> <a id="134961"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigger Murdhood</span>  - <span class="idhighlight">Mon, 21 Jul 2014 09:45:36 EST ID:2RMrEcnj</span> <span class="reflink">  <a href="/crops/res/134960.php#i134961">No.134961</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops373832353034343136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134961', '134960')" title="Report Post 134961"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134961" data-thread="134960"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #596612; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops373832353034343136">  Plants are about 30-40 cm high, bout 2 months old.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134960.php#134965" onclick="highlight(134965);">&gt;&gt;</a></td> <td class="reply" id="reply134965"> <a id="134965"></a> <div class="replyheader"> 									 <span class="commentpostername">Phoebe Pammermuck</span>  - <span class="idhighlight">Mon, 21 Jul 2014 13:11:50 EST ID:TEwqJV6X</span> <span class="reflink">  <a href="/crops/res/134960.php#i134965">No.134965</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323832303531343238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134965', '134960')" title="Report Post 134965"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134965" data-thread="134960"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2DE0A8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31323832303531343238">  Both male and female flowers have a distinctive smell. Female is a more &quot;sweet, heavy&quot; aroma, while male flowers have a sort of....&quot;chlorophylly&quot; scent, in my experience.  As for the difference in smells, its probably just different phenotypical expression. <br><br>If you haven&#39;t started flower yet, then you can&#39;t be SURE. However, some strains will put out pre-flowers before you switch to 12/12. My random bagseed has put out female preflowers, and after surviving all of the stress(torture) she was put through since a seedling, I&#39;ll definitely be cloning that hardy bitch.<br><br>The best advice I can give is google male and female preflowers, how to sex plants, etc. And get a magnifying glass, or jewelers loupe. Female flowers will form a little teardrop shape growth at the nodes (where side stems meet the main stem) and eventually 2 white/transparent hairs will stick out of said teardrop.<br><br>These are called the calyx (the teardrop) and the pistil/stigma (hairs), respectively. I hope I could help pal.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cropsthread134892"> <div class="thread_header"> <a id="134892"></a> <span class="filetitle">Unidentifiable Structure, Halp</span>  <span class="inbetween"> by </span> <span class="postername">Simon Binnerford</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 16 Jul 2014 09:13:37 EST ID:O9SDDXqC</span></span>  <span class="reflink"> <a href="/crops/res/134892.php#i134892">No.134892</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31343531343335343135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('134892')" title="Report Thread 134892"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/crops/res/134892.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134892" data-thread="134892"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #96915E; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cropsthread134892');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405516417616.jpg"> 1405516417616.jpg </a> -(<em>358821 B, 1280x960</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcrops31343531343335343135" target="_blank" href="/crops/src/1405516417616.jpg"> <img src="/crops/thumb/1405516417616s.jpg" alt="358821" class="thumb" /> </a>   			 <blockquote class="opcomment crops31343531343335343135">  So this was going to be my first plant in about a year, I ordered some Auto feminised  seeds and poped one of them. The seeds where cheap, (but I&#39;v grown this strain out before) The true leaves are meant to be coming through but instead I&#39;ve got this.. The growth is tinted purple and has a hair in the middle. Anyone had anything similar?   </blockquote>   				 				  <span class="omittedposts">  2 posts and 2 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/crops/res/134892.php#134902" onclick="highlight(134902);">&gt;&gt;</a></td> <td class="reply" id="reply134902"> <a id="134902"></a> <div class="replyheader"> 									 <span class="commentpostername">Beatrice Monnerridge</span>  - <span class="idhighlight">Wed, 16 Jul 2014 17:26:19 EST ID:L8ddYNFe</span> <span class="reflink">  <a href="/crops/res/134892.php#i134902">No.134902</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops383531313239363439')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134902', '134892')" title="Report Post 134902"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134902" data-thread="134892"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #12C3EE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops383531313239363439">  <a href = "/crops/res/134892.php" onclick = "highlight(134892)">&gt;&gt;134892</a><br>Looks to be a genetic anomaly. <br>It appears as though it&#39;s gone straight from germination to flowering with no vegetative stages in between. <br><blockquote class = "unkfunc">&gt;NEATO!<br></blockquote><br>I&#39;d keep extra special care of that plant, OP. I&#39;d be really interested to see where it goes from there. (Plant Biologist here)<br>If it did actually go straight from cotyledon to flower, it might be a valuable strain, assuming it&#39;s not infertile.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134892.php#134903" onclick="highlight(134903);">&gt;&gt;</a></td> <td class="reply" id="reply134903"> <a id="134903"></a> <div class="replyheader"> 									 <span class="commentpostername">James Bucklekat</span>  - <span class="idhighlight">Wed, 16 Jul 2014 18:16:49 EST ID:GrpsvbXt</span> <span class="reflink">  <a href="/crops/res/134892.php#i134903">No.134903</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323031373931333336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134903', '134892')" title="Report Post 134903"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134903" data-thread="134892"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A441CA; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31323031373931333336">  <a href = "/crops/res/134892.php#134902" onclick = "highlight(134902)">&gt;&gt;134902</a><br>if it really is a flower, it&#39;ll probably just die from not having enough energy to sustain growth.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134892.php#134904" onclick="highlight(134904);">&gt;&gt;</a></td> <td class="reply" id="reply134904"> <a id="134904"></a> <div class="replyheader"> 									 <span class="commentpostername">Martin Fuckingville</span>  - <span class="idhighlight">Thu, 17 Jul 2014 01:30:09 EST ID:rKppyfag</span> <span class="reflink">  <a href="/crops/res/134892.php#i134904">No.134904</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31343836323538383138')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134904', '134892')" title="Report Post 134904"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134904" data-thread="134892"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A28718; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31343836323538383138">  <a href = "/crops/res/134892.php#134902" onclick = "highlight(134902)">&gt;&gt;134902</a><br>Seed to harvest in 7 days. Imagine if it produced barely a joints worth.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134892.php#134906" onclick="highlight(134906);">&gt;&gt;</a></td> <td class="reply" id="reply134906"> <a id="134906"></a> <div class="replyheader"> 									 <span class="commentpostername">Hugh Giddlefoot</span>  - <span class="idhighlight">Thu, 17 Jul 2014 11:36:57 EST ID:O9SDDXqC</span> <span class="reflink">  <a href="/crops/res/134892.php#i134906">No.134906</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31343531343335343135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134906', '134892')" title="Report Post 134906"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134906" data-thread="134892"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F9C142; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405611417057.jpg"> 1405611417057.jpg </a> -(<em>331992 B, 1280x960</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/crops/src/1405611417057.jpg"> <img src="/crops/thumb/1405611417057s.jpg" alt="331992" class="thumb" /> </a>    <blockquote  class="crops31343531343335343135">  <a href = "/crops/res/134892.php#134902" onclick = "highlight(134902)">&gt;&gt;134902</a><br>I was excited as well, thinking I had a mutant. Today the dicotyledon have appeared and the yellow purple structure with the hairs is gone :( Still looks like a special needs case though.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134892.php#134907" onclick="highlight(134907);">&gt;&gt;</a></td> <td class="reply" id="reply134907"> <a id="134907"></a> <div class="replyheader"> 									 <span class="commentpostername">Martin Fuckingville</span>  - <span class="idhighlight">Thu, 17 Jul 2014 12:04:58 EST ID:rKppyfag</span> <span class="reflink">  <a href="/crops/res/134892.php#i134907">No.134907</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31343836323538383138')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134907', '134892')" title="Report Post 134907"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134907" data-thread="134892"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #48940F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31343836323538383138">  <a href = "/crops/res/134892.php#134906" onclick = "highlight(134906)">&gt;&gt;134906</a><br>Just a small correction for future reference. You can just say the cotyledon for singular or plural, however the plant is a dicotyledon. Also the cotyledon is the seed leaf which had appeared already. What has now started to form is the true leaves.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cropsthread134842"> <div class="thread_header"> <a id="134842"></a> <span class="filetitle">FLIR</span>  <span class="inbetween"> by </span> <span class="postername">George Blidgewane</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 14 Jul 2014 20:46:44 EST ID:E5s8DIMt</span></span>  <span class="reflink"> <a href="/crops/res/134842.php#i134842">No.134842</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops3430323030303333')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('134842')" title="Report Thread 134842"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/crops/res/134842.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134842" data-thread="134842"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D52B32; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cropsthread134842');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405385204500.jpg"> 1405385204500.jpg </a> -(<em>21888 B, 335x284</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcrops3430323030303333" target="_blank" href="/crops/src/1405385204500.jpg"> <img src="/crops/thumb/1405385204500s.jpg" alt="21888" class="thumb" /> </a>   			 <blockquote class="opcomment crops3430323030303333">  Hey.<br>I&#39;m setting up my first grow and I wanted some opinions.<br><br>I&#39;m growing in a fully insulated loft bedroom room with insulation, insulating foil, plater boards and plaster.<br>I&#39;m using a 120x120x180 tent with 4 plants in a Willma 4 XL hydro system with 400w or 600w bulb.<br>I&#39;d be venting my heat through the chimney and through a carbon filter to get rid of the smell and make any heat less suspicious in FLIR fly overs.<br><br>What are the chances that a FLIR fly over would spot me and raid me? Is there a way they&#39;d suspect me of anything for chimney heat sig? Does a FLIR only see surface temps or does it see hot air too? Would there be enough heat from a 600w bulb in a cooling tube to make my chimney hot?<br><br>Would the heat on my chimney be suspiciously low? <br><br>Any help would be appreciated, I thought you guys would have a better grasp of this than most on the site.<br><br>Thanks.   </blockquote>   				 				  <span class="omittedposts">  11 posts and 2 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/crops/res/134842.php#134879" onclick="highlight(134879);">&gt;&gt;</a></td> <td class="reply" id="reply134879"> <a id="134879"></a> <div class="replyheader"> 									 <span class="commentpostername">Hannah Turveyhood</span>  - <span class="idhighlight">Tue, 15 Jul 2014 18:11:55 EST ID:0MFoZgIM</span> <span class="reflink">  <a href="/crops/res/134842.php#i134879">No.134879</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31303531393030343239')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134879', '134842')" title="Report Post 134879"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134879" data-thread="134842"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3A752A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31303531393030343239">  <a href = "/crops/res/134842.php#134869" onclick = "highlight(134869)">&gt;&gt;134869</a><br>I rarely agree with oceangrow but yeah, nobody gets busted because of the power consumption pattern with a single 600W lamp.<br><br>Which does not mean it won&#39;t get looked at in an ongoing investigation which pretty much always starts somehow else. 99% of busts happen because someone tipps off the police and in 90% of these cases it&#39;s somebody close.<br>The remaining 1% are usually bad luck.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134842.php#134880" onclick="highlight(134880);">&gt;&gt;</a></td> <td class="reply" id="reply134880"> <a id="134880"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Brookford</span>  - <span class="idhighlight">Tue, 15 Jul 2014 19:36:51 EST ID:kkrP8Rey</span> <span class="reflink">  <a href="/crops/res/134842.php#i134880">No.134880</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31333033383335393231')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134880', '134842')" title="Report Post 134880"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134880" data-thread="134842"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2F2E96; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31333033383335393231">  <a href = "/crops/res/134842.php#134879" onclick = "highlight(134879)">&gt;&gt;134879</a><br>Which is why it&#39;s important to be an average Joe in every situation that might end up with the cops talking to you. Don&#39;t drive like an idiot for example. Especially if you&#39;re a regular smoker, you will always have enough THC in your Blood to get your license revoked (at least in Germany) and if that happens the door is open to more investigations.Also pay your bills and don&#39;t get into trouble with banks or insurance companies. Stacking up bills can lead to unexpected visits and strangers in your home. Generally try to avoid visitors if you don&#39;t have a separate room.<br>Don&#39;t hang around with fucked up people. THey will draw attention. In my circle of friends NOBODY smokes weed more than twice  a year..All of them are very average people, blend in with middle class society perfectly (not meant disrespectful) and have no illegal tendencies.They couldn&#39;t break the law if they tried.If you&#39;re surrounded by clowns that don&#39;t know how to act right outside and let loose inside, your chances of getting busted by proxy for some ridiculous reason increase.The problem is never that your electricity bill is looking odd or that you generate more but the fact that they look at those charts in the first place! Somewhere along the lines you made a mistake and that made you suspicious. Don&#39;t senselessly drive around your weed or bong in your car, don&#39;t look like shit all the time, don&#39;t run your mouth about growing anything at all, make it your secret hobby.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134842.php#134895" onclick="highlight(134895);">&gt;&gt;</a></td> <td class="reply" id="reply134895"> <a id="134895"></a> <div class="replyheader"> 									 <span class="commentpostername">Edwin Greenspear</span>  - <span class="idhighlight">Wed, 16 Jul 2014 10:33:52 EST ID:7gF5wx16</span> <span class="reflink">  <a href="/crops/res/134842.php#i134895">No.134895</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31343034333439353736')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134895', '134842')" title="Report Post 134895"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134895" data-thread="134842"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AA17E2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405521232979.jpg"> 1405521232979.jpg </a> -(<em>60658 B, 555x346</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/crops/src/1405521232979.jpg"> <img src="/crops/thumb/1405521232979s.jpg" alt="60658" class="thumb" /> </a>    <blockquote  class="crops31343034333439353736">  <blockquote class = "unkfunc">&gt;No one never gets busted<br></blockquote><br><blockquote class = "unkfunc">&gt;According to the new BJS report, &quot;Drug Use and Dependence, State and Federal Prisoners, 2004,&quot; 12.7 percent of state inmates and 12.4 percent of federal inmates incarcerated for drug violations are serving time for marijuana offenses</blockquote>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134842.php#134897" onclick="highlight(134897);">&gt;&gt;</a></td> <td class="reply" id="reply134897"> <a id="134897"></a> <div class="replyheader"> 									 <span class="commentpostername">Charlotte Fanshit</span>  - <span class="idhighlight">Wed, 16 Jul 2014 11:39:25 EST ID:QG7UIgxN</span> <span class="reflink">  <a href="/crops/res/134842.php#i134897">No.134897</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31333033383334353839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134897', '134842')" title="Report Post 134897"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134897" data-thread="134842"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9F1FA6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31333033383334353839">  is talking online about growing mj a way to get busted?<br>it doesn&#39;t seem to be a valid reason to kick down someones doors.<br>also isp probably don&#39;t give away your data unless you&#39;re making direct threads to certain people or institutions.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134842.php#134899" onclick="highlight(134899);">&gt;&gt;</a></td> <td class="reply" id="reply134899"> <a id="134899"></a> <div class="replyheader"> 									 <span class="commentpostername">Jack Nettingnone</span>  - <span class="idhighlight">Wed, 16 Jul 2014 14:34:07 EST ID:zW/6KJ9B</span> <span class="reflink">  <a href="/crops/res/134842.php#i134899">No.134899</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops343037353434393932')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134899', '134842')" title="Report Post 134899"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134899" data-thread="134842"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1E9997; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405535647140.png"> 1405535647140.png </a> -(<em>238366 B, 447x430</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/crops/src/1405535647140.png"> <img src="/crops/thumb/1405535647140s.jpg" alt="238366" class="thumb" /> </a>    <blockquote  class="crops343037353434393932">  <a href = "/crops/res/134842.php#134895" onclick = "highlight(134895)">&gt;&gt;134895</a><br><br><blockquote class = "unkfunc">&gt;points out vague statistics where most of the people getting arrested are stopped for selling/buying or just possessing weed not growing it <br></blockquote><br>I hate people like you, GJ on shitting up the place edwin.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cropsthread134566"> <div class="thread_header"> <a id="134566"></a> <span class="filetitle">First grow, am I fucking up everything yet?</span>  <span class="inbetween"> by </span> <span class="postername">Lydia Garringstitch</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 29 Jun 2014 03:46:41 EST ID:+QxGAy8u</span></span>  <span class="reflink"> <a href="/crops/res/134566.php#i134566">No.134566</a> </span>    			 <!--  - Awesome Thread? <a href="/crops/taimaba.pl?board=crops&amp;task=vote&amp;thread=134566&amp;vote=0">No!</a> | <a href="/crops/taimaba.pl?board=crops&amp;task=vote&amp;thread=134566&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323637333536363831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('134566')" title="Report Thread 134566"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/crops/res/134566.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134566" data-thread="134566"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4DFBCD; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cropsthread134566');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1404028001933.jpg"> 1404028001933.jpg </a> -(<em>1298527 B, 1920x1440</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcrops31323637333536363831" target="_blank" href="/crops/src/1404028001933.jpg"> <img src="/crops/thumb/1404028001933s.jpg" alt="1298527" class="thumb" /> </a>   			 <blockquote class="opcomment crops31323637333536363831">  Germed in cups of distilled water, I planted these June 3rd. First time growing. Used a mix of pearlite and starter soil from Lowes, and I&#39;m growing outside with the planter on the roof of my patio (not visible from the ground.)<br><br>I give them a drink of distilled water every other day. I&#39;ve never given them additional nutrients. I don&#39;t give them any water on rainy days (like yesterday.) I live in Georgia and they gotten lots of sunlight.   </blockquote>   				 				  <span class="omittedposts">  20 posts and 8 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/crops/res/134566.php#134858" onclick="highlight(134858);">&gt;&gt;</a></td> <td class="reply" id="reply134858"> <a id="134858"></a> <div class="replyheader"> 									 <span class="commentpostername">Emma Drundlespear</span>  - <span class="idhighlight">Tue, 15 Jul 2014 06:02:07 EST ID:NCSGJFoG</span> <span class="reflink">  <a href="/crops/res/134566.php#i134858">No.134858</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31343235353533353236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134858', '134566')" title="Report Post 134858"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134858" data-thread="134566"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #469102; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31343235353533353236">  <a href = "/crops/res/134566.php#134857" onclick = "highlight(134857)">&gt;&gt;134857</a><br>and you should definitely start training those seedlings, use LST and bend the plants sideways, letting them grow straight up is a big mistake. Get some string and duct tape and start tieing them down.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134566.php#134881" onclick="highlight(134881);">&gt;&gt;</a></td> <td class="reply" id="reply134881"> <a id="134881"></a> <div class="replyheader"> 									 <span class="commentpostername">Angus Dramblewure</span>  - <span class="idhighlight">Tue, 15 Jul 2014 20:09:41 EST ID:sVVuO5DO</span> <span class="reflink">  <a href="/crops/res/134566.php#i134881">No.134881</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31313430343235363630')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134881', '134566')" title="Report Post 134881"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134881" data-thread="134566"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A63724; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31313430343235363630">  <a href = "/crops/res/134566.php#134839" onclick = "highlight(134839)">&gt;&gt;134839</a><br>Looks like the lady in the back right might be stretching a bit, maybe rotate/move her closer to the LED&#39;s area, don&#39;t want her too much taller.<br><br>And like other&#39;s already said, LST-ing them is a good idea. (low stress training)   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134566.php#134882" onclick="highlight(134882);">&gt;&gt;</a></td> <td class="reply" id="reply134882"> <a id="134882"></a> <div class="replyheader"> 									 <span class="commentpostername">Lydia Garringstitch</span>  - <span class="idhighlight">Tue, 15 Jul 2014 22:46:15 EST ID:9/P75KIC</span> <span class="reflink">  <a href="/crops/res/134566.php#i134882">No.134882</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323637333536343436')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134882', '134566')" title="Report Post 134882"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134882" data-thread="134566"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3ECA5E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31323637333536343436">  <a href = "/crops/res/134566.php#134857" onclick = "highlight(134857)">&gt;&gt;134857</a><br><a href = "/crops/res/134566.php#134858" onclick = "highlight(134858)">&gt;&gt;134858</a><br><a href = "/crops/res/134566.php#134881" onclick = "highlight(134881)">&gt;&gt;134881</a><br>Alright, I&#39;ve been reading up on LSTing and increasing auxin levels to promote plant growth. I&#39;m gonna try to put together a basic SCROG setup. I&#39;ll post pics when I get finished.<br><br>How much closer should I get the plants to the lights? Like, within six inches?<br><br>Also, the white widow started showing trichomes today.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134566.php#134883" onclick="highlight(134883);">&gt;&gt;</a></td> <td class="reply" id="reply134883"> <a id="134883"></a> <div class="replyheader"> 									 <span class="commentpostername">Doris Worthingfoot</span>  - <span class="idhighlight">Wed, 16 Jul 2014 00:58:50 EST ID:FAtzJ1//</span> <span class="reflink">  <a href="/crops/res/134566.php#i134883">No.134883</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops383431303939343138')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134883', '134566')" title="Report Post 134883"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134883" data-thread="134566"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7772B5; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops383431303939343138">  <a href = "/crops/res/134566.php#134882" onclick = "highlight(134882)">&gt;&gt;134882</a><br>you aren&#39;t exactly increasing auxin levels or promoting growth, you are redistributing it so you have a flat canopy, making it easier to get even light to all flowering tips. <br>An untrained plant has more auxins and growth hormones in the main stem so it grows more like a Christmas tree   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134566.php#134888" onclick="highlight(134888);">&gt;&gt;</a></td> <td class="reply" id="reply134888"> <a id="134888"></a> <div class="replyheader"> 									 <span class="commentpostername">Samuel Bellyshaw</span>  - <span class="idhighlight">Wed, 16 Jul 2014 05:24:54 EST ID:NCSGJFoG</span> <span class="reflink">  <a href="/crops/res/134566.php#i134888">No.134888</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31343235353533353236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134888', '134566')" title="Report Post 134888"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134888" data-thread="134566"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EE80C5; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31343235353533353236">  <a href = "/crops/res/134566.php#134882" onclick = "highlight(134882)">&gt;&gt;134882</a><br>Try putting the top of your hand near the lights, try to find a level where you can feel warmth, but if the light starts burning your hand at any point it&#39;s too close. I had 25 watt LED-spots and the plants could be within two inches no problem.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cropsthread134861"> <div class="thread_header"> <a id="134861"></a> <span class="filetitle">Limiting growth during vegging</span>  <span class="inbetween"> by </span> <span class="postername">Graham Pollercheck</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 15 Jul 2014 09:05:44 EST ID:JA5LrF4b</span></span>  <span class="reflink"> <a href="/crops/res/134861.php#i134861">No.134861</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31333337313631383932')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('134861')" title="Report Thread 134861"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/crops/res/134861.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134861" data-thread="134861"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FF65EB; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cropsthread134861');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405429544007.jpg"> 1405429544007.jpg </a> -(<em>62215 B, 666x558</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcrops31333337313631383932" target="_blank" href="/crops/src/1405429544007.jpg"> <img src="/crops/thumb/1405429544007s.jpg" alt="62215" class="thumb" /> </a>   			 <blockquote class="opcomment crops31333337313631383932">  To maximize space efficiency in my small dual-chamber closet I&#39;m going to be growing using cyclic cloning (AKA the clone of a clone of a clone method). The problem is that this means that I&#39;ll have clones vegging for 8 weeks before I actually switch them to flowering, and the size of my grow closet just doesn&#39;t allow for trees. So how can I keep them at a reasonable size during these 8 weeks of vegging?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/crops/res/134861.php#134875" onclick="highlight(134875);">&gt;&gt;</a></td> <td class="reply" id="reply134875"> <a id="134875"></a> <div class="replyheader"> 									 <span class="commentpostername">Fanny Bebbersock</span>  - <span class="idhighlight">Tue, 15 Jul 2014 16:27:58 EST ID:15YE3ANJ</span> <span class="reflink">  <a href="/crops/res/134861.php#i134875">No.134875</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops343135303432333736')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134875', '134861')" title="Report Post 134875"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134875" data-thread="134861"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6A3E7D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405456078013.jpg"> 1405456078013.jpg </a> -(<em>41899 B, 450x450</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/crops/src/1405456078013.jpg"> <img src="/crops/thumb/1405456078013s.jpg" alt="41899" class="thumb" /> </a>    <blockquote  class="crops343135303432333736">  <a href = "/crops/res/134861.php" onclick = "highlight(134861)">&gt;&gt;134861</a><br>Trim the branch tips, tuck them shits also, and if things get out of control than trim the roots.  When trimming roots don&#39;t just lop off shit like a hair cut.  Take a razor blade or a sharp knife, and run it DOWN through the roots like a comb.  Learn more about root trimming before you try this.  A lot more.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134861.php#134884" onclick="highlight(134884);">&gt;&gt;</a></td> <td class="reply" id="reply134884"> <a id="134884"></a> <div class="replyheader"> 									 <span class="commentpostername">Phineas Croffinghood</span>  - <span class="idhighlight">Wed, 16 Jul 2014 03:34:16 EST ID:CTbz267U</span> <span class="reflink">  <a href="/crops/res/134861.php#i134884">No.134884</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31333336393530313831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134884', '134861')" title="Report Post 134884"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134884" data-thread="134861"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #45DD76; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31333336393530313831">  <a href = "/crops/res/134861.php#134875" onclick = "highlight(134875)">&gt;&gt;134875</a><br><br>Thanks Anon, will do.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134861.php#134885" onclick="highlight(134885);">&gt;&gt;</a></td> <td class="reply" id="reply134885"> <a id="134885"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigger Shittingfoot</span>  - <span class="idhighlight">Wed, 16 Jul 2014 03:49:51 EST ID:pEkV/7XU</span> <span class="reflink">  <a href="/crops/res/134861.php#i134885">No.134885</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops32393133393038393631')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134885', '134861')" title="Report Post 134885"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134885" data-thread="134861"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5E2B45; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops32393133393038393631">  The smaller the pot, the smaller the plant OP   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134861.php#134886" onclick="highlight(134886);">&gt;&gt;</a></td> <td class="reply" id="reply134886"> <a id="134886"></a> <div class="replyheader"> 									 <span class="commentpostername">Samuel Bellyshaw</span>  - <span class="idhighlight">Wed, 16 Jul 2014 05:17:58 EST ID:NCSGJFoG</span> <span class="reflink">  <a href="/crops/res/134861.php#i134886">No.134886</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31343235353533353236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134886', '134861')" title="Report Post 134886"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134886" data-thread="134861"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #399DE2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31343235353533353236">  Scropping, LST and a better light source. Good luck getting squat plants and tight internodes with a HPS.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134861.php#134887" onclick="highlight(134887);">&gt;&gt;</a></td> <td class="reply" id="reply134887"> <a id="134887"></a> <div class="replyheader"> 									 <span class="commentpostername">Samuel Bellyshaw</span>  - <span class="idhighlight">Wed, 16 Jul 2014 05:18:26 EST ID:NCSGJFoG</span> <span class="reflink">  <a href="/crops/res/134861.php#i134887">No.134887</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31343235353533353236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134887', '134861')" title="Report Post 134887"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134887" data-thread="134861"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #545E13; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31343235353533353236">  <a href = "/crops/res/134861.php#134885" onclick = "highlight(134885)">&gt;&gt;134885</a><br>lol ok. Maybe if you&#39;re using soil.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cropsthread134860"> <div class="thread_header"> <a id="134860"></a> <span class="filetitle">Salvia Divinorum</span>  <span class="inbetween"> by </span> <span class="postername">Edward Drubbledock</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 15 Jul 2014 08:03:49 EST ID:xbk9uM+m</span></span>  <span class="reflink"> <a href="/crops/res/134860.php#i134860">No.134860</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31333639323039333231')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('134860')" title="Report Thread 134860"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/crops/res/134860.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134860" data-thread="134860"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F01CA5; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cropsthread134860');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405425829727.jpg"> 1405425829727.jpg </a> -(<em>55761 B, 481x471</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcrops31333639323039333231" target="_blank" href="/crops/src/1405425829727.jpg"> <img src="/crops/thumb/1405425829727s.jpg" alt="55761" class="thumb" /> </a>   			 <blockquote class="opcomment crops31333639323039333231">  I bought a Salvia Divinorum plant a few months ago and it&#39;s used to the current environment it&#39;s in and it&#39;s growing nicely. I want it to grow quicker/be able to grow it without moving it around to catch the most sun and I was looking at LED lights and reading online about what&#39;s suitable for it when I remembered I have an old Lava Lamp that broke but the light is still fine. (Pic Related). I just don&#39;t know if this thing has any usable light for the plant.   </blockquote>   				 				  <span class="omittedposts">   2 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/crops/res/134860.php#134865" onclick="highlight(134865);">&gt;&gt;</a></td> <td class="reply" id="reply134865"> <a id="134865"></a> <div class="replyheader"> 									 <span class="commentpostername">Graham Gonningson</span>  - <span class="idhighlight">Tue, 15 Jul 2014 11:27:37 EST ID:CzFqpx9l</span> <span class="reflink">  <a href="/crops/res/134860.php#i134865">No.134865</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323031373931303933')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134865', '134860')" title="Report Post 134865"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134865" data-thread="134860"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0F7F32; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31323031373931303933">  <a href = "/crops/res/134860.php" onclick = "highlight(134860)">&gt;&gt;134860</a><br>Can it not go outside? If your area is warm right now, that would give it the most growth. Make sure it&#39;s not root bound, and fertilize every 4 weeks or so. <br><br>The lava lamp light is probably no good for plants. Wal mart has cheapo $10 grow lamps that would do just fine for a single plant.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134860.php#134868" onclick="highlight(134868);">&gt;&gt;</a></td> <td class="reply" id="reply134868"> <a id="134868"></a> <div class="replyheader"> 									 <span class="commentpostername">Graham Gonningson</span>  - <span class="idhighlight">Tue, 15 Jul 2014 11:28:57 EST ID:CzFqpx9l</span> <span class="reflink">  <a href="/crops/res/134860.php#i134868">No.134868</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31323031373931303933')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134868', '134860')" title="Report Post 134868"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134868" data-thread="134860"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #237AEB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31323031373931303933">  <a href = "/crops/res/134860.php#134865" onclick = "highlight(134865)">&gt;&gt;134865</a><br>oh, and that&#39;s 4 weeks at the peak of its growing season. You do a much slower schedule if it&#39;s still getting established, or if it&#39;s just not growing a ton.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134860.php#134870" onclick="highlight(134870);">&gt;&gt;</a></td> <td class="reply" id="reply134870"> <a id="134870"></a> <div class="replyheader"> 									 <span class="commentpostername">Edward Drubbledock</span>  - <span class="idhighlight">Tue, 15 Jul 2014 12:03:23 EST ID:xbk9uM+m</span> <span class="reflink">  <a href="/crops/res/134860.php#i134870">No.134870</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31333639323039333231')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134870', '134860')" title="Report Post 134870"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134870" data-thread="134860"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6F98E0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31333639323039333231">  <a href = "/crops/res/134860.php#134865" onclick = "highlight(134865)">&gt;&gt;134865</a><br>nah I don&#39;t want to bring it outside, my area isn&#39;t really humid (avg like 40% Humidity outside) and my neighbors are pretty well known for damaging trees/other neighbors plants.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134860.php#134871" onclick="highlight(134871);">&gt;&gt;</a></td> <td class="reply" id="reply134871"> <a id="134871"></a> <div class="replyheader"> 									 <span class="commentpostername">changs wang</span>  - <span class="idhighlight">Tue, 15 Jul 2014 12:43:31 EST ID:QA/isF1T</span> <span class="reflink">  <a href="/crops/res/134860.php#i134871">No.134871</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31383038383237303532')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134871', '134860')" title="Report Post 134871"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134871" data-thread="134860"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #56F397; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="crops31383038383237303532">  <a href = "/crops/res/134860.php#134870" onclick = "highlight(134870)">&gt;&gt;134870</a>  <br><br><blockquote class = "unkfunc">&gt;&quot;and my neighbors are pretty well known for damaging trees/other neighbors plants.&quot;<br></blockquote>  <br>what does that mean? do they just go around stomping flowers and shrubs.  I imagine they walk around yelling at trees and making disparaging remarks to bushes..That makes me chuckle lol   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/crops/res/134860.php#134873" onclick="highlight(134873);">&gt;&gt;</a></td> <td class="reply" id="reply134873"> <a id="134873"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Brookford</span>  - <span class="idhighlight">Tue, 15 Jul 2014 14:29:23 EST ID:kkrP8Rey</span> <span class="reflink">  <a href="/crops/res/134860.php#i134873">No.134873</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('crops31333033383335393231')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('134873', '134860')" title="Report Post 134873"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="134873" data-thread="134860"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #707C2A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/crops/src/1405448963485.jpg"> 1405448963485.jpg </a> -(<em>231174 B, 1032x792</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/crops/src/1405448963485.jpg"> <img src="/crops/thumb/1405448963485s.jpg" alt="231174" class="thumb" /> </a>    <blockquote  class="crops31333033383335393231">  made a picture of my salvia an hour ago. right side is on the day i repotted it, left one is today (1 month later). i always have problems keeping it healthy and strong since i&#39;m surrounded by trees that steal all the sun. i also live on the north side of a hill. the plant basically gets a handful of hours of sun maximum in summer and pretty much no direct sunlight in winter. salvia is a master of survival in my experience though. i bought it about 8 years ago and there were times when it looked almost dead but it always came back. it worked through low to almost no light, shitty soil with no nutrition, parasites, low temperatures and drought.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://insomniacgamers.net"><img src="http://cdn.420chan.org/sp/i.png"></a>
		</div>
				<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/crops/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="crops" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">  <a href="/crops/index.php">&lt;&lt;Last</a>   <span style="font-size: +1;">Pages</span>   <a href="/crops/2.php">Next&gt;&gt;</a>  <br />   <a href="/crops/index.php">0</a>      1    <a href="/crops/2.php">2</a>     <a href="/crops/3.php">3</a>     <a href="/crops/4.php">4</a>     <a href="/crops/5.php">5</a>     <a href="/crops/6.php">6</a>     <a href="/crops/7.php">7</a>     <a href="/crops/8.php">8</a>     <a href="/crops/9.php">9</a>     <a href="/crops/10.php">10</a>     <a href="/crops/11.php">11</a>     <a href="/crops/12.php">12</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
							<li><img width='32' height='32' class='boardicon' alt='mtv' src='/static/images/board_icons/mtv_icon_32.png' />
		<span class='byline'>Movies &amp; Television - <a href='/mtv/res/290491.php' class='boardlink'>Thread 290491</a></span>
		<p>>>290501
Nah he said it wasn't a more recent movie. More like a movie from 2008-2012. He said it wa... <a href='/mtv/res/290491.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='nj' src='/static/images/board_icons/nj_icon_32.png' />
		<span class='byline'>Netjester AI Conversation Chamber - <a href='/nj/res/229505.php' class='boardlink'>Thread 229505</a></span>
		<p>>>229528
because dopamine is released whenever I do anything satisfying. It's it's one of the many ... <a href='/nj/res/229505.php' class='boardlink'>&#8629;</a></p></li>
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

