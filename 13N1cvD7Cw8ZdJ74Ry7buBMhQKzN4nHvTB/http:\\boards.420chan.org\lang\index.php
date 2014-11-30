http://boards.420chan.org/lang/index.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Wed, 23 Jul 2014 22:42:11 GMT
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/lang/index.php';
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
	 <hr style="margin-top:2px;" />   <form id="delform" action="/lang/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="lang" />    <div id="langthread11533"> <div class="thread_header"> <a id="11533"></a> <span class="filetitle">Suicide note..</span>  <span class="inbetween"> by </span> <span class="postername">Oliver Bomblehall</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 10 Jul 2014 14:38:04 EST ID:HmrDo+U8</span></span>  <span class="reflink"> <a href="/lang/res/11533.php#i11533">No.11533</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363236373438323832')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11533')" title="Report Thread 11533"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11533.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11533" data-thread="11533"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D189C6; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11533');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1405017484642.jpg"> 1405017484642.jpg </a> -(<em>24052 B, 500x375</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang31363236373438323832" target="_blank" href="/lang/src/1405017484642.jpg"> <img src="/lang/thumb/1405017484642s.jpg" alt="24052" class="thumb" /> </a>   			 <blockquote class="opcomment lang31363236373438323832">  Can someone who speaks french tell me exactly what this means, please? Someone I loved left this behind<br><br><blockquote class = "unkfunc">&gt;Certaines personnes qui comptaient à mon coeur me manque terriblement ... je vous aime et je vous embrasse fort au revoir<br></blockquote><br>I don&#39;t speak French and google translate seems to mess it up a bit. Could someone please tell me exactly what he&#39;s was trying to express?<br><br>It&#39;s very important to me that I understand, please.   </blockquote>   				 				  <span class="omittedposts">  4 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11533.php#11540" onclick="highlight(11540);">&gt;&gt;</a></td> <td class="reply" id="reply11540"> <a id="11540"></a> <div class="replyheader"> 									 <span class="commentpostername">CrazyFolksTribe</span> <span class="postertrip">!loJSOMZg0g</span> - <span class="idhighlight">Sun, 13 Jul 2014 00:20:21 EST ID:wT/piNfP</span> <span class="reflink">  <a href="/lang/res/11533.php#i11540">No.11540</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363435353535363330')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11540', '11533')" title="Report Post 11540"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11540" data-thread="11533"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2093AA; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1405225221222.jpg"> 1405225221222.jpg </a> -(<em>59961 B, 500x377</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lang/src/1405225221222.jpg"> <img src="/lang/thumb/1405225221222s.jpg" alt="59961" class="thumb" /> </a>    <blockquote  class="lang31363435353535363330">  <a href = "/lang/res/11533.php#11539" onclick = "highlight(11539)">&gt;&gt;11539</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11533.php#11544" onclick="highlight(11544);">&gt;&gt;</a></td> <td class="reply" id="reply11544"> <a id="11544"></a> <div class="replyheader"> 									 <span class="commentpostername">Henry Wirryforth</span>  - <span class="idhighlight">Thu, 17 Jul 2014 09:07:01 EST ID:A+W5xLuM</span> <span class="reflink">  <a href="/lang/res/11533.php#i11544">No.11544</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33313035353335353235')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11544', '11533')" title="Report Post 11544"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11544" data-thread="11533"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #765599; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang33313035353335353235">  <a href = "/lang/res/11533.php#11539" onclick = "highlight(11539)">&gt;&gt;11539</a><br><br>It&#39;s not your fault. That person made the decision. If they decided their entire life wasn&#39;t worth living how is that the fault of anyone one tiny individual in their life? <br><br>Anyway, he said &quot;certain PEOPLE&quot;  plural, not singular. <br><br>Most people lose a lot of loved ones in their lSives, and it sounds like this person did as well. Life is really hard. Too hard for some people. Nobody&#39;s fault.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11533.php#11550" onclick="highlight(11550);">&gt;&gt;</a></td> <td class="reply" id="reply11550"> <a id="11550"></a> <div class="replyheader"> 									 <span class="commentpostername">Basil Neblingkedge</span>  - <span class="idhighlight">Sun, 20 Jul 2014 16:51:43 EST ID:mPRdrUeT</span> <span class="reflink">  <a href="/lang/res/11533.php#i11550">No.11550</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31343433373733343637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11550', '11533')" title="Report Post 11550"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11550" data-thread="11533"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #749A68; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31343433373733343637">  <a href = "/lang/res/11533.php#11539" onclick = "highlight(11539)">&gt;&gt;11539</a><br>note that the you (vous) is plural, if thats any help. the note is addressing more than one person throughout   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11533.php#11551" onclick="highlight(11551);">&gt;&gt;</a></td> <td class="reply" id="reply11551"> <a id="11551"></a> <div class="replyheader"> 									 <span class="commentpostername">Basil Neblingkedge</span>  - <span class="idhighlight">Sun, 20 Jul 2014 16:52:10 EST ID:mPRdrUeT</span> <span class="reflink">  <a href="/lang/res/11533.php#i11551">No.11551</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31343433373733343637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11551', '11533')" title="Report Post 11551"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11551" data-thread="11533"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BEE1BE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31343433373733343637">  well shit, someone already said that<br><br><br>nb   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11533.php#11553" onclick="highlight(11553);">&gt;&gt;</a></td> <td class="reply" id="reply11553"> <a id="11553"></a> <div class="replyheader"> 									 <span class="commentpostername">Nell Nedgeworth</span>  - <span class="idhighlight">Sun, 20 Jul 2014 21:40:13 EST ID:gPIGtUk4</span> <span class="reflink">  <a href="/lang/res/11533.php#i11553">No.11553</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33343735343333343836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11553', '11533')" title="Report Post 11553"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11553" data-thread="11533"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #87D58E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang33343735343333343836">  it wasn&#39;t your fault, or doesn&#39;t matter if it was.<br>read a book: Giovanni&#39;s Room by James Baldwin<br>it&#39;s about unrequited love with a frenchman, makes you think, you&#39;d like it.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11548"> <div class="thread_header"> <a id="11548"></a> <span class="filetitle">Language Learning on the Internet</span>  <span class="inbetween"> by </span> <span class="postername">Barnaby Woblingnutch</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 20 Jul 2014 06:30:58 EST ID:dI81Dve+</span></span>  <span class="reflink"> <a href="/lang/res/11548.php#i11548">No.11548</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31333231313036313836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11548')" title="Report Thread 11548"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11548.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11548" data-thread="11548"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D251E7; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11548');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1405852258163.jpg"> 1405852258163.jpg </a> -(<em>122298 B, 283x424</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang31333231313036313836" target="_blank" href="/lang/src/1405852258163.jpg"> <img src="/lang/thumb/1405852258163s.jpg" alt="122298" class="thumb" /> </a>   			 <blockquote class="opcomment lang31333231313036313836">  Tell me, what is your favorite website for learning languages? Mine is duolingo.com. But if I had money, it would be busuu.com.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11548.php#11552" onclick="highlight(11552);">&gt;&gt;</a></td> <td class="reply" id="reply11552"> <a id="11552"></a> <div class="replyheader"> 									 <span class="commentpostername">Nell Nedgeworth</span>  - <span class="idhighlight">Sun, 20 Jul 2014 21:35:05 EST ID:gPIGtUk4</span> <span class="reflink">  <a href="/lang/res/11548.php#i11552">No.11552</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33343735343333343836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11552', '11548')" title="Report Post 11552"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11552" data-thread="11548"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7250A7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang33343735343333343836">  Facebook. <br>I have friends all over the world who I  chat with, sometimes using google translate, but increasingly I start to get the hang of the language and am able to communicate without a crutch.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11548.php#11554" onclick="highlight(11554);">&gt;&gt;</a></td> <td class="reply" id="reply11554"> <a id="11554"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigel Muzzleson</span>  - <span class="idhighlight">Mon, 21 Jul 2014 05:43:23 EST ID:/B/BFMOS</span> <span class="reflink">  <a href="/lang/res/11548.php#i11554">No.11554</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363539333037333937')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11554', '11548')" title="Report Post 11554"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11554" data-thread="11548"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CD0367; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31363539333037333937">  Here&#39;s one you might not think of: Wikipedia. Articles on things you&#39;re interested in written by (probably) native speakers in any language you&#39;re likely to want to read.<br><br>On a side note, there&#39;s a galling lack of Busuu on Busuu. There was apparently a campaign to &quot;save Busuu&quot;, except saving meant sharing a video with your friends and possibly learning enough Busuu to fill one side of an index card. I do hope the handful of Busuu speakers are getting something in exchange for this co-opting.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11546"> <div class="thread_header"> <a id="11546"></a> <span class="filetitle">Japanese</span>  <span class="inbetween"> by </span> <span class="postername">Natalie</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 18 Jul 2014 21:40:44 EST ID:9jHF7Nhs</span></span>  <span class="reflink"> <a href="/lang/res/11546.php#i11546">No.11546</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363539363533333437')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11546')" title="Report Thread 11546"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11546.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11546" data-thread="11546"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9C2209; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11546');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1405734044491.gif"> 1405734044491.gif </a> -(<em>5550 B, 390x265</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang31363539363533333437" target="_blank" href="/lang/src/1405734044491.gif"> <img src="/lang/thumb/1405734044491s.jpg" alt="5550" class="thumb" /> </a>   			 <blockquote class="opcomment lang31363539363533333437">  Hi everyone thank you for your time... I went to Japan for a religious studies study abroad program and I absolutely fell in love. The only problem I had was the language barrier between the Japanese people and me.<br><br>I plan on going back in 6 months and while I know I won&#39;t be fluent by then, I&#39;m wondering if anyone can extend to me some advice on how to learn Japanese and what programs/methods were effective for you. Thank you!   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11546.php#11549" onclick="highlight(11549);">&gt;&gt;</a></td> <td class="reply" id="reply11549"> <a id="11549"></a> <div class="replyheader"> 									 <span class="commentpostername">Ian Wemmlemane</span>  - <span class="idhighlight">Sun, 20 Jul 2014 12:42:16 EST ID:DIxzy9/G</span> <span class="reflink">  <a href="/lang/res/11546.php#i11549">No.11549</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31313733383731353735')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11549', '11546')" title="Report Post 11549"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11549" data-thread="11546"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #911200; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31313733383731353735">  I personally learn best in a classroom setting, preferably five days a week. I studied Japanese in high school for two hours a day, and watching movies and reading (easy) books helped me cement what I already learned and to learn some new vocabulary. Since you&#39;re going in such a short time, have you looked to see if there are any tutors or anything teaching basic classes specifically for travelling? They make books and tapes for that sort of thing, too, but, like I said, the classroom worked for me.<br><br>I guess you could also see if your local community college offers Japanese and you could take a semester and at least learn some basic phrases and how to read a bit. Shouldn&#39;t be too terribly expensive for just one class.<br><br>Another thing I&#39;ve used on and off is the Erin ga choosen! Nihongo dekimasu website. It&#39;s from a video series made in Japan to teach grammar and some cultural things. I like the website because it has different little quizzes/activities after the video clips.<br><a href="https://www.erin.ne.jp/en/" rel="nofollow" target="_blank">https://www.erin.ne.jp/en/</a><br><br>You could also try getting a Japanese penpal and doing a language exchange or something. If you have a mic, you could do Skype or something so that you could get the pronunciations/inflections down. Plus, you could have a friend to meet up with once you get there.<br><br>If you get lost or something, I found people to be really nice and helpful...except for this guy at the train station that tried to help me and my friends find the right train even though we already knew what we were doing. Then he wanted us to pay him (we didn&#39;t, obviously, because wtf dude). Otherwise, everyone was really nice. I met a little old lady at an inn I stayed at and she was tickled pink that I spoke Japanese.<br><br>Anyway, good luck to you! The Japanese language and culture is really fun and interesting.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11331"> <div class="thread_header"> <a id="11331"></a> <span class="filetitle">GREEK / ELLNVIKA</span>  <span class="inbetween"> by </span> <span class="postername">Eugene Budgedin</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 02 May 2014 01:40:17 EST ID:SRz+MrWT</span></span>  <span class="reflink"> <a href="/lang/res/11331.php#i11331">No.11331</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33343139383136383832')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11331')" title="Report Thread 11331"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11331.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11331" data-thread="11331"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AEF5E2; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11331');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1399009217791.jpg"> 1399009217791.jpg </a> -(<em>805260 B, 1920x1080</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang33343139383136383832" target="_blank" href="/lang/src/1399009217791.jpg"> <img src="/lang/thumb/1399009217791s.jpg" alt="805260" class="thumb" /> </a>   			 <blockquote class="opcomment lang33343139383136383832">  Any advice for learning Greek?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11331.php#11333" onclick="highlight(11333);">&gt;&gt;</a></td> <td class="reply" id="reply11333"> <a id="11333"></a> <div class="replyheader"> 									 <span class="commentpostername">Ian Lightson</span>  - <span class="idhighlight">Fri, 02 May 2014 06:29:15 EST ID:NqJL1ymG</span> <span class="reflink">  <a href="/lang/res/11331.php#i11333">No.11333</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363630313631363733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11333', '11331')" title="Report Post 11333"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11333" data-thread="11331"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #413A0E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31363630313631363733">  ELLHNIKA would have been more etymological and more intuitive. Greeks on Latin keyboards only use h for eta anyways.<br><br>Pick a kind of Greek. Modern has modern uses, koine has liturgical (religious) uses, ancient has classical uses (mainly if you want to a classicist/ancient Historian). <br><br>The modern language gets a lot of Slavic influences on grammar, phonology etc. Spells almost as irregularly as English; there&#39;s like 8 different ways to write the ee sound. <br><br>Koine is mildly irregular, not nearly as slavicised. <br><br>Ancient is as close to regular as you&#39;ll get but covers the greatest area of time.<br><br><br>I recommend modern Greek, personally, though Ancient Greek can be fun in a Geeky way. There&#39;s only a loose connection between the two now, so you basically have to pick between the Illiad and the Modern language.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11331.php#11547" onclick="highlight(11547);">&gt;&gt;</a></td> <td class="reply" id="reply11547"> <a id="11547"></a> <div class="replyheader"> 									 <span class="commentpostername">Hugh Hebbertork</span>  - <span class="idhighlight">Sat, 19 Jul 2014 07:41:34 EST ID:SRz+MrWT</span> <span class="reflink">  <a href="/lang/res/11331.php#i11547">No.11547</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33343139383136383832')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11547', '11331')" title="Report Post 11547"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11547" data-thread="11331"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0B3612; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang33343139383136383832">  <a href = "/lang/res/11331.php#11333" onclick = "highlight(11333)">&gt;&gt;11333</a><br>yea im learning modern. Do you know any good resources I could use or where I could get any literature in the language?   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11521"> <div class="thread_header"> <a id="11521"></a> <span class="filetitle">pimsleur is fucking boring</span>  <span class="inbetween"> by </span> <span class="postername">Martin Trotdock</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 07 Jul 2014 19:43:23 EST ID:3xDq++i+</span></span>  <span class="reflink"> <a href="/lang/res/11521.php#i11521">No.11521</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31383437373036383733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11521')" title="Report Thread 11521"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11521.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11521" data-thread="11521"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EBD887; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11521');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1404776603319.jpg"> 1404776603319.jpg </a> -(<em>17997 B, 400x278</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang31383437373036383733" target="_blank" href="/lang/src/1404776603319.jpg"> <img src="/lang/thumb/1404776603319s.jpg" alt="17997" class="thumb" /> </a>   			 <blockquote class="opcomment lang31383437373036383733">  I&#39;ve been trying to teach myself Russian for about 6 months now. I figured I&#39;d do it the same way I did spanish (finish rosetta stone, then read the news with the help of google translate, then watch movies I know well dubbed in it), but that hasn&#39;t worked out, either because the alphabet kind of slows things down or because it doesn&#39;t share as much vocabulary as English (thank you Roman Empire). <br><br>So I&#39;m thinking I&#39;ll just brute force it with Pimsleur. Problem is, Pimsleur is boring as fuck. Is there anything I can do while Pimsleuring that can keep me from falling asleep without distracting me too much? Whoever can solve this problem wins a slice of Ukraine.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11521.php#11538" onclick="highlight(11538);">&gt;&gt;</a></td> <td class="reply" id="reply11538"> <a id="11538"></a> <div class="replyheader"> 									 <span class="commentpostername">Lydia Blettingfield</span>  - <span class="idhighlight">Fri, 11 Jul 2014 16:27:24 EST ID:gPIGtUk4</span> <span class="reflink">  <a href="/lang/res/11521.php#i11538">No.11538</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33343735343333343836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11538', '11521')" title="Report Post 11538"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11538" data-thread="11521"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #055F49; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang33343735343333343836">  you could try spending time with people who speak Russian, also listen to Vladmir Vysotsky, he&#39;s kinda like the Kurt Cobain or John Lennon of Russia.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11521.php#11545" onclick="highlight(11545);">&gt;&gt;</a></td> <td class="reply" id="reply11545"> <a id="11545"></a> <div class="replyheader"> 									 <span class="commentpostername">Henry Wirryforth</span>  - <span class="idhighlight">Thu, 17 Jul 2014 09:24:08 EST ID:A+W5xLuM</span> <span class="reflink">  <a href="/lang/res/11521.php#i11545">No.11545</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33313035353335353235')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11545', '11521')" title="Report Post 11545"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11545" data-thread="11521"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #629E25; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang33313035353335353235">  Try to use as many different resources as you can at the same time for learning any language. Pimsleur for an hour, bored, flashcards, bored, online flashcards, bored, Russian music, bored, some other audio course, bored, a phrasebook, bored, a teach yourself book, bored, and start over again.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11489"> <div class="thread_header"> <a id="11489"></a> <span class="filetitle">learning Spanish</span>  <span class="inbetween"> by </span> <span class="postername">Jarvis Divingchig</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 24 Jun 2014 09:07:51 EST ID:PZ6JLEYk</span></span>  <span class="reflink"> <a href="/lang/res/11489.php#i11489">No.11489</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang32383839333536383730')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11489')" title="Report Thread 11489"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11489.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11489" data-thread="11489"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #777CAB; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11489');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1403615271701.jpg"> 1403615271701.jpg </a> -(<em>93019 B, 1185x622</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang32383839333536383730" target="_blank" href="/lang/src/1403615271701.jpg"> <img src="/lang/thumb/1403615271701s.jpg" alt="93019" class="thumb" /> </a>   			 <blockquote class="opcomment lang32383839333536383730">  HEY I would really like to learn Spanish. Can you guys provide some links or hints that have proven to work?   </blockquote>   				 				  <span class="omittedposts">  11 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11489.php#11509" onclick="highlight(11509);">&gt;&gt;</a></td> <td class="reply" id="reply11509"> <a id="11509"></a> <div class="replyheader"> 									 <span class="commentpostername">Basil Nettingstone</span>  - <span class="idhighlight">Mon, 30 Jun 2014 11:37:51 EST ID:qizTVHik</span> <span class="reflink">  <a href="/lang/res/11489.php#i11509">No.11509</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang383530393831393136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11509', '11489')" title="Report Post 11509"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11509" data-thread="11489"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #807C64; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang383530393831393136">  <a href = "/lang/res/11489.php#11508" onclick = "highlight(11508)">&gt;&gt;11508</a><br><br>It doesn&#39;t bother me, I know where you&#39;re coming from though. If I didn&#39;t actively enjoy learning it or utilize my brain, it&#39;d probably just benefit me more for conversational and getting by. I like that it&#39;ll build on what you&#39;ve already learned and present it in ways that encourages you to make the connection before it tells you. I just think it&#39;ll benefit you based on how interested you are in understanding.<br><br>Do you have any good resources? There&#39;s still so much left on Duolingo so I&#39;m going to finish that, and I&#39;ve also started French there, but I&#39;m gonna mostly stick to Spanish at the moment.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11489.php#11510" onclick="highlight(11510);">&gt;&gt;</a></td> <td class="reply" id="reply11510"> <a id="11510"></a> <div class="replyheader"> 									 <span class="commentpostername">Basil Nettingstone</span>  - <span class="idhighlight">Mon, 30 Jun 2014 15:24:33 EST ID:qizTVHik</span> <span class="reflink">  <a href="/lang/res/11489.php#i11510">No.11510</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang383530393831393136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11510', '11489')" title="Report Post 11510"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11510" data-thread="11489"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5A5EE0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang383530393831393136">  <a href = "/lang/res/11489.php#11509" onclick = "highlight(11509)">&gt;&gt;11509</a><br><br>Right and now I&#39;m just doing French, ha. Well it&#39;s addictive because it&#39;s pretty similar to Spanish(and English, though yeah lots of French derived words in English) so it&#39;s nice to pick it up quickly. I&#39;m finding the pronunciation a lot more subtle though, it&#39;s hard to hear the difference between mange and manges.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11489.php#11514" onclick="highlight(11514);">&gt;&gt;</a></td> <td class="reply" id="reply11514"> <a id="11514"></a> <div class="replyheader"> 									 <span class="commentpostername">Fucking Gonnerton</span>  - <span class="idhighlight">Tue, 01 Jul 2014 06:49:47 EST ID:HJKlShZi</span> <span class="reflink">  <a href="/lang/res/11489.php#i11514">No.11514</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31343733383735303735')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11514', '11489')" title="Report Post 11514"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11514" data-thread="11489"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #950C75; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31343733383735303735">  New facebook group for people who&#39;ve gotten to an advanced level of Spanish <a href="https://www.facebook.com/superadvancedspanish" rel="nofollow" target="_blank">https://www.facebook.com/superadvancedspanish</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11489.php#11542" onclick="highlight(11542);">&gt;&gt;</a></td> <td class="reply" id="reply11542"> <a id="11542"></a> <div class="replyheader"> 									 <span class="commentpostername">Cedric Duvingtin</span>  - <span class="idhighlight">Thu, 17 Jul 2014 06:52:22 EST ID:GIEpzceV</span> <span class="reflink">  <a href="/lang/res/11489.php#i11542">No.11542</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33323833313736303538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11542', '11489')" title="Report Post 11542"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11542" data-thread="11489"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1AA458; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang33323833313736303538">  <a href="http://holaviajeros.com/" rel="nofollow" target="_blank">http://holaviajeros.com/</a> nice slow spanish audio stories for $25<br><br>Also I&#39;m using this technique:<br><a href="http://learnanylanguage.wikia.com/wiki/Shadowing" rel="nofollow" target="_blank">http://learnanylanguage.wikia.com/wiki/Shadowing</a><br><br>Starting a new language right from speaking complex sentences feels great.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11489.php#11543" onclick="highlight(11543);">&gt;&gt;</a></td> <td class="reply" id="reply11543"> <a id="11543"></a> <div class="replyheader"> 									 <span class="commentpostername">Cedric Duvingtin</span>  - <span class="idhighlight">Thu, 17 Jul 2014 07:31:39 EST ID:GIEpzceV</span> <span class="reflink">  <a href="/lang/res/11489.php#i11543">No.11543</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33323833313736303538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11543', '11489')" title="Report Post 11543"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11543" data-thread="11489"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #28EBB3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang33323833313736303538">  <a href="http://holaviajeros.com/" rel="nofollow" target="_blank">http://holaviajeros.com/</a> nice slow spanish audio stories for $25<br><br>Also I&#39;m using this technique:<br><a href="http://learnanylanguage.wikia.com/wiki/Shadowing" rel="nofollow" target="_blank">http://learnanylanguage.wikia.com/wiki/Shadowing</a><br><br>Starting a new language right from speaking complex sentences feels great.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread9025"> <div class="thread_header"> <a id="9025"></a> <span class="filetitle">smoke weed everyday in other languages</span>  <span class="inbetween"> by </span> <span class="postername">Fucking Favingpodge</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 28 Mar 2013 20:34:17 EST ID:ORtpm4VC</span></span>  <span class="reflink"> <a href="/lang/res/9025.php#i9025">No.9025</a> </span>    			 <!--  - Awesome Thread? <a href="/lang/taimaba.pl?board=lang&amp;task=vote&amp;thread=9025&amp;vote=0">No!</a> | <a href="/lang/taimaba.pl?board=lang&amp;task=vote&amp;thread=9025&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31323034353637353736')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('9025')" title="Report Thread 9025"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/9025.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="9025" data-thread="9025"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #896515; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread9025');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1364517257889.gif"> 1364517257889.gif </a> -(<em>129769 B, 80x80</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang31323034353637353736" target="_blank" href="/lang/src/1364517257889.gif"> <img src="/lang/src/1364517257889.gif" alt="129769" class="thumb" /> </a>   			 <blockquote class="opcomment lang31323034353637353736">  毎日マリファナをすう！<br>(mainichi marifana o suu~)   </blockquote>   				 				  <span class="omittedposts">  96 posts and 17 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/lang/res/9025.php#11497" onclick="highlight(11497);">&gt;&gt;</a></td> <td class="reply" id="reply11497"> <a id="11497"></a> <div class="replyheader"> 									 <span class="commentpostername">Fuck Doshtat</span>  - <span class="idhighlight">Fri, 27 Jun 2014 07:39:22 EST ID:qvkbHYJf</span> <span class="reflink">  <a href="/lang/res/9025.php#i11497">No.11497</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31353034353130323737')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11497', '9025')" title="Report Post 11497"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11497" data-thread="9025"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #85B492; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1403869162982.jpg"> 1403869162982.jpg </a> -(<em>69552 B, 960x402</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lang/src/1403869162982.jpg"> <img src="/lang/thumb/1403869162982s.jpg" alt="69552" class="thumb" /> </a>    <blockquote  class="lang31353034353130323737">  Fajči trávu každý deň!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/9025.php#11500" onclick="highlight(11500);">&gt;&gt;</a></td> <td class="reply" id="reply11500"> <a id="11500"></a> <div class="replyheader"> 									 <span class="commentpostername">Graham Fangerkark</span>  - <span class="idhighlight">Sun, 29 Jun 2014 03:51:16 EST ID:NE/B0+BQ</span> <span class="reflink">  <a href="/lang/res/9025.php#i11500">No.11500</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31323030323934323530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11500', '9025')" title="Report Post 11500"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11500" data-thread="9025"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #215802; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1404028276867.jpg"> 1404028276867.jpg </a> -(<em>8118 B, 152x221</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lang/src/1404028276867.jpg"> <img src="/lang/thumb/1404028276867s.jpg" alt="8118" class="thumb" /> </a>    <blockquote  class="lang31323030323934323530">  Jeden Tag Grass Rauchen!!!- German   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/9025.php#11506" onclick="highlight(11506);">&gt;&gt;</a></td> <td class="reply" id="reply11506"> <a id="11506"></a> <div class="replyheader"> 									 <span class="commentpostername">Basil Cuffingnork</span>  - <span class="idhighlight">Sun, 29 Jun 2014 22:17:52 EST ID:LvYH0MTf</span> <span class="reflink">  <a href="/lang/res/9025.php#i11506">No.11506</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang32343533343238303933')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11506', '9025')" title="Report Post 11506"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11506" data-thread="9025"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #46EF51; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1404094672681.jpg"> 1404094672681.jpg </a> -(<em>23670 B, 460x276</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lang/src/1404094672681.jpg"> <img src="/lang/thumb/1404094672681s.jpg" alt="23670" class="thumb" /> </a>    <blockquote  class="lang32343533343238303933">  <a href = "/lang/res/9025.php#11500" onclick = "highlight(11500)">&gt;&gt;11500</a><br><blockquote class = "unkfunc">&gt;Grass rauchen</blockquote>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/9025.php#11535" onclick="highlight(11535);">&gt;&gt;</a></td> <td class="reply" id="reply11535"> <a id="11535"></a> <div class="replyheader"> 									 <span class="commentpostername">Oliver Brusslelire</span>  - <span class="idhighlight">Fri, 11 Jul 2014 01:20:58 EST ID:M/GE+wRG</span> <span class="reflink">  <a href="/lang/res/9025.php#i11535">No.11535</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33333237343533333936')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11535', '9025')" title="Report Post 11535"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11535" data-thread="9025"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A39C99; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1405056058745.jpg"> 1405056058745.jpg </a> -(<em>50748 B, 500x475</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lang/src/1405056058745.jpg"> <img src="/lang/thumb/1405056058745s.jpg" alt="50748" class="thumb" /> </a>    <blockquote  class="lang33333237343533333936">  دخن حشيش كل يوم<br><br>or<br><br>حشْشُ كل يوم   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/9025.php#11541" onclick="highlight(11541);">&gt;&gt;</a></td> <td class="reply" id="reply11541"> <a id="11541"></a> <div class="replyheader"> 									 <span class="commentpostername">Lydia Docklefoot</span>  - <span class="idhighlight">Mon, 14 Jul 2014 11:58:45 EST ID:B4Pfe3Ff</span> <span class="reflink">  <a href="/lang/res/9025.php#i11541">No.11541</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31353939373830343838')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11541', '9025')" title="Report Post 11541"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11541" data-thread="9025"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C91946; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31353939373830343838">  Je vous encourage à consommer du cannabis journalièrement.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread7299"> <div class="thread_header"> <a id="7299"></a> <span class="filetitle">ONE /LANG/ FOR ONE /WORLD/</span>  <span class="inbetween"> by </span> <span class="postername">IT&#39;S ALRIGHT (Team Johnny_Westernlake to the end ;-;)</span> <span class="postertrip">!K1y.sEgsM2</span> <span class="inbetween"> - <span class="idhighlight">Tue, 31 Jul 2012 14:46:55 EST ID:ec3of1ct</span></span>  <span class="reflink"> <a href="/lang/res/7299.php#i7299">No.7299</a> </span>    			 <!--  - Awesome Thread? <a href="/lang/taimaba.pl?board=lang&amp;task=vote&amp;thread=7299&amp;vote=0">No!</a> | <a href="/lang/taimaba.pl?board=lang&amp;task=vote&amp;thread=7299&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31333636323230393638')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('7299')" title="Report Thread 7299"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/7299.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="7299" data-thread="7299"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #85F48F; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread7299');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1343760415383.png"> 1343760415383.png </a> -(<em>256851 B, 350x430</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang31333636323230393638" target="_blank" href="/lang/src/1343760415383.png"> <img src="/lang/thumb/1343760415383s.jpg" alt="256851" class="thumb" /> </a>   			 <blockquote class="opcomment lang31333636323230393638">  If everyone suddenly decided to have only one language universally spoken, what would it be?<br><br>Hard mode: Not your own language.   </blockquote>   				 				  <span class="omittedposts">  53 posts and 7 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/lang/res/7299.php#11416" onclick="highlight(11416);">&gt;&gt;</a></td> <td class="reply" id="reply11416"> <a id="11416"></a> <div class="replyheader"> 									 <span class="commentpostername">Hannah Goshbury</span>  - <span class="idhighlight">Sun, 25 May 2014 03:16:42 EST ID:7t5vBXSp</span> <span class="reflink">  <a href="/lang/res/7299.php#i11416">No.11416</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang343136323336393633')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11416', '7299')" title="Report Post 11416"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11416" data-thread="7299"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7704DB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang343136323336393633">  <a href = "/lang/res/7299.php#7303" onclick = "highlight(7303)">&gt;&gt;7303</a><br>That&#39;s cute.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/7299.php#11417" onclick="highlight(11417);">&gt;&gt;</a></td> <td class="reply" id="reply11417"> <a id="11417"></a> <div class="replyheader"> 									 <span class="commentpostername">Hannah Goshbury</span>  - <span class="idhighlight">Sun, 25 May 2014 03:42:47 EST ID:7t5vBXSp</span> <span class="reflink">  <a href="/lang/res/7299.php#i11417">No.11417</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang343136323336393633')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11417', '7299')" title="Report Post 11417"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11417" data-thread="7299"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D4F770; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang343136323336393633">  Hard mode<br>Literally any Indigenous language.<br>This is the optimist in me speaking but yeah.<br>TBH most of the social and environmental problems prevalent in &#39;developed&#39; nations could be really improved with the way of thinking that comes with almost any Indigenous language.<br>But one language for the whole world is one of the scariest fates for humanity I could think of.<br>Language is inseparable from culture. If there was only one language, one culture, one way of knowing, one way of thinking we&#39;d be fucked.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/7299.php#11527" onclick="highlight(11527);">&gt;&gt;</a></td> <td class="reply" id="reply11527"> <a id="11527"></a> <div class="replyheader"> 									 <span class="commentpostername">Jarvis Sengerhine</span>  - <span class="idhighlight">Wed, 09 Jul 2014 03:07:17 EST ID:OmXNkN+6</span> <span class="reflink">  <a href="/lang/res/7299.php#i11527">No.11527</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31383339353236313439')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11527', '7299')" title="Report Post 11527"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11527" data-thread="7299"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7050A8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31383339353236313439">  <a href = "/lang/res/7299.php#11417" onclick = "highlight(11417)">&gt;&gt;11417</a><br> <br>I second this anon   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/7299.php#11529" onclick="highlight(11529);">&gt;&gt;</a></td> <td class="reply" id="reply11529"> <a id="11529"></a> <div class="replyheader"> 									 <span class="commentpostername">Ernest Mublingson</span>  - <span class="idhighlight">Wed, 09 Jul 2014 16:34:34 EST ID:3xDq++i+</span> <span class="reflink">  <a href="/lang/res/7299.php#i11529">No.11529</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31383437373036383733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11529', '7299')" title="Report Post 11529"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11529" data-thread="7299"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #30F3D6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31383437373036383733">  Polish. Hearing Polish girls speak can bring my ears to orgasm.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/7299.php#11532" onclick="highlight(11532);">&gt;&gt;</a></td> <td class="reply" id="reply11532"> <a id="11532"></a> <div class="replyheader"> 									 <span class="commentpostername">Charles Shakeford</span>  - <span class="idhighlight">Thu, 10 Jul 2014 13:28:55 EST ID:5HKrwZq0</span> <span class="reflink">  <a href="/lang/res/7299.php#i11532">No.11532</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33323131323239323638')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11532', '7299')" title="Report Post 11532"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11532" data-thread="7299"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D4AB78; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang33323131323239323638">  anything that has a click  during a sentence . like one of those african languages.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread10987"> <div class="thread_header"> <a id="10987"></a> <span class="filetitle">Learning Finnish</span>  <span class="inbetween"> by </span> <span class="postername">Molly Fuckingham</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 15 Jan 2014 22:28:04 EST ID:uWRxXpm/</span></span>  <span class="reflink"> <a href="/lang/res/10987.php#i10987">No.10987</a> </span>    			 <!--  - Awesome Thread? <a href="/lang/taimaba.pl?board=lang&amp;task=vote&amp;thread=10987&amp;vote=0">No!</a> | <a href="/lang/taimaba.pl?board=lang&amp;task=vote&amp;thread=10987&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363536303433353736')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('10987')" title="Report Thread 10987"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/10987.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="10987" data-thread="10987"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1231FA; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread10987');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1389842884758.gif"> 1389842884758.gif </a> -(<em>2722 B, 422x260</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang31363536303433353736" target="_blank" href="/lang/src/1389842884758.gif"> <img src="/lang/thumb/1389842884758s.jpg" alt="2722" class="thumb" /> </a>   			 <blockquote class="opcomment lang31363536303433353736">  I want to learn Finnish.  I&#39;ve never learned a second language.  I speak English.  Does anyone know of a good free resource for becoming fluent in Finnish.  I&#39;m thinking a website, a book or a set of books.  Piracy is ok.  I also welcome advice.   </blockquote>   				 				  <span class="omittedposts">  62 posts and 21 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/lang/res/10987.php#11269" onclick="highlight(11269);">&gt;&gt;</a></td> <td class="reply" id="reply11269"> <a id="11269"></a> <div class="replyheader"> 									 <span class="commentpostername">Fucking Sushmetch</span>  - <span class="idhighlight">Sat, 19 Apr 2014 10:25:17 EST ID:Q5R8DPz7</span> <span class="reflink">  <a href="/lang/res/10987.php#i11269">No.11269</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31353336393332303736')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11269', '10987')" title="Report Post 11269"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11269" data-thread="10987"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A1D103; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31353336393332303736">  <a href = "/lang/res/10987.php#11268" onclick = "highlight(11268)">&gt;&gt;11268</a><br>The page I posted says in the first lines<br>&quot;These are regarded as a permanent move: return migration, employment lasting atleast 2 years or marriage to a person permanently residing in Finland.&quot;<br><br>So yeah, the 4 years was wrong. But you can&#39;t just move to Finland without a job, spouse or a history of your family in Finland. (Excluding other reasons like refugees such)<br><br>But not really sure either way, so take it with a grain of salt.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/10987.php#11297" onclick="highlight(11297);">&gt;&gt;</a></td> <td class="reply" id="reply11297"> <a id="11297"></a> <div class="replyheader"> 									 <span class="commentpostername">cursive</span>  - <span class="idhighlight">Sat, 26 Apr 2014 22:08:14 EST ID:wVsBYtdh</span> <span class="reflink">  <a href="/lang/res/10987.php#i11297">No.11297</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31313835373532303235')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11297', '10987')" title="Report Post 11297"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11297" data-thread="10987"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2890FA; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1398564494660.jpg"> 1398564494660.jpg </a> -(<em>34771 B, 260x403</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lang/src/1398564494660.jpg"> <img src="/lang/thumb/1398564494660s.jpg" alt="34771" class="thumb" /> </a>    <blockquote  class="lang31313835373532303235">  <a href = "/lang/res/10987.php" onclick = "highlight(10987)">&gt;&gt;10987</a><br>not a great jumping off point but tolkein&#39;s elvish was based hardcore on ancient finnish oral tradition. he has almost a whole ~pidgin ish glossary and primer in the appenices of LOTR and probably more in the silmarilian.<br><br>there is a documentary about a finn (laplander?) who is purportedly the LAST man in the world who really understood the old tales. In the doc, he describes them to his grandson, who roughly translated then to the documentarian. <br><br>now pic applies to the Angorthas alphabet used by the dwarves. Ang- is a root meaning iron, seealso @ngband and other roguelikes at phial. i wanna say org.<br>this alphabet uses nordic style viking runes to the best of my understanding, while the elvish (quenya/tengwar/sindarin) uses...... a bunch of pidgin runes that cursive together. <span class="spoiler" onmouseover=""><span> this fucking script nearly RUINED my ability to use greek effectively. Damn oxford armchair ripoff artist, ily jrr </span></span>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/10987.php#11298" onclick="highlight(11298);">&gt;&gt;</a></td> <td class="reply" id="reply11298"> <a id="11298"></a> <div class="replyheader"> 									 <span class="commentpostername">cursive</span>  - <span class="idhighlight">Sat, 26 Apr 2014 22:14:00 EST ID:wVsBYtdh</span> <span class="reflink">  <a href="/lang/res/10987.php#i11298">No.11298</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31313835373532303235')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11298', '10987')" title="Report Post 11298"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11298" data-thread="10987"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D87744; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1398564840597.png"> 1398564840597.png </a> -(<em>852530 B, 600x913</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lang/src/1398564840597.png"> <img src="/lang/thumb/1398564840597s.jpg" alt="852530" class="thumb" /> </a>    <blockquote  class="lang31313835373532303235">  <a href = "/lang/res/10987.php#11297" onclick = "highlight(11297)">&gt;&gt;11297</a><br>sorry for the double post here, but this thread is pretty cool.<br>I believe pretty much all of the elven stories and poems, and the entire silmarillian is his attempt at grasping those tales. Check out... oh god. <br>&quot;o elbereth, githoniel.....&quot;<br>lots of love stories and epics and tales about Ang-band (the iron prison, morgoth who was Sauron&#39;s master and teacher sort of)<br><br>Tom Bombadil is almost CERTAINLY from this same oral tradition. again, not really ancient finnish, but may be much closer to modern.<br><br><span class="spoiler" onmouseover=""><span> i almost want to say that the title in the upper left is way off base if it says Elbereth Githoniel, but like all things language, keep it loose. it could be spot on or this could be a nerd&#39;s wet dream </span></span>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/10987.php#11375" onclick="highlight(11375);">&gt;&gt;</a></td> <td class="reply" id="reply11375"> <a id="11375"></a> <div class="replyheader"> 									 <span class="commentpostername">Anita Flowers</span>  - <span class="idhighlight">Tue, 13 May 2014 16:45:37 EST ID:8ApIXMGe</span> <span class="reflink">  <a href="/lang/res/10987.php#i11375">No.11375</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31343635373730313830')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11375', '10987')" title="Report Post 11375"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11375" data-thread="10987"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4500BC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31343635373730313830">  <a href = "/lang/res/10987.php#11297" onclick = "highlight(11297)">&gt;&gt;11297</a><br>you remember the name of that doc?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/10987.php#11528" onclick="highlight(11528);">&gt;&gt;</a></td> <td class="reply" id="reply11528"> <a id="11528"></a> <div class="replyheader"> 									 <span class="commentpostername">Jarvis Sengerhine</span>  - <span class="idhighlight">Wed, 09 Jul 2014 03:08:37 EST ID:OmXNkN+6</span> <span class="reflink">  <a href="/lang/res/10987.php#i11528">No.11528</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31383339353236313439')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11528', '10987')" title="Report Post 11528"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11528" data-thread="10987"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CC6A0F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31383339353236313439">  Bump   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11491"> <div class="thread_header"> <a id="11491"></a> <span class="filetitle">German</span>  <span class="inbetween"> by </span> <span class="postername">Priscilla Niggercocke</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 25 Jun 2014 15:07:31 EST ID:I27rhYpp</span></span>  <span class="reflink"> <a href="/lang/res/11491.php#i11491">No.11491</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363635343438323331')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11491')" title="Report Thread 11491"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11491.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11491" data-thread="11491"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2903D7; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11491');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1403723251940.png"> 1403723251940.png </a> -(<em>3352 B, 1000x600</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang31363635343438323331" target="_blank" href="/lang/src/1403723251940.png"> <img src="/lang/thumb/1403723251940s.jpg" alt="3352" class="thumb" /> </a>   			 <blockquote class="opcomment lang31363635343438323331">  Whats the best way to learn german? I know pimsleur is good, any textbook I should use with that or anything?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11491.php#11502" onclick="highlight(11502);">&gt;&gt;</a></td> <td class="reply" id="reply11502"> <a id="11502"></a> <div class="replyheader"> 									 <span class="commentpostername">Priscilla Finderhid</span>  - <span class="idhighlight">Sun, 29 Jun 2014 10:57:24 EST ID:1Yl4+1Ai</span> <span class="reflink">  <a href="/lang/res/11491.php#i11502">No.11502</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31333639333238373335')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11502', '11491')" title="Report Post 11502"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11502" data-thread="11491"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #94B129; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31333639333238373335">  move to germany   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11491.php#11503" onclick="highlight(11503);">&gt;&gt;</a></td> <td class="reply" id="reply11503"> <a id="11503"></a> <div class="replyheader"> 									 <span class="commentpostername">Frederick Clisslesag</span>  - <span class="idhighlight">Sun, 29 Jun 2014 13:49:06 EST ID:slZc18Ic</span> <span class="reflink">  <a href="/lang/res/11491.php#i11503">No.11503</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31333137303031363435')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11503', '11491')" title="Report Post 11503"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11503" data-thread="11491"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1CC4F4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31333137303031363435">  bump, I&#39;m interested too   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11491.php#11505" onclick="highlight(11505);">&gt;&gt;</a></td> <td class="reply" id="reply11505"> <a id="11505"></a> <div class="replyheader"> 									 <span class="commentpostername">Basil Cuffingnork</span>  - <span class="idhighlight">Sun, 29 Jun 2014 22:14:47 EST ID:LvYH0MTf</span> <span class="reflink">  <a href="/lang/res/11491.php#i11505">No.11505</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang32343533343238303933')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11505', '11491')" title="Report Post 11505"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11505" data-thread="11491"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7777DE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang32343533343238303933">  watch german movies with english subs,listen to german music.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11491.php#11511" onclick="highlight(11511);">&gt;&gt;</a></td> <td class="reply" id="reply11511"> <a id="11511"></a> <div class="replyheader"> 									 <span class="commentpostername">Phoebe Honeyshit</span>  - <span class="idhighlight">Mon, 30 Jun 2014 17:02:50 EST ID:8oImHEQx</span> <span class="reflink">  <a href="/lang/res/11491.php#i11511">No.11511</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31323736393436313435')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11511', '11491')" title="Report Post 11511"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11511" data-thread="11491"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #93A9B6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31323736393436313435">  <a href = "/lang/res/11491.php" onclick = "highlight(11491)">&gt;&gt;11491</a><br>My friend was born in Germany and his German is impeccable. Maybe try that.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11491.php#11530" onclick="highlight(11530);">&gt;&gt;</a></td> <td class="reply" id="reply11530"> <a id="11530"></a> <div class="replyheader"> 									 <span class="commentpostername">Barnaby Crarrychit</span>  - <span class="idhighlight">Wed, 09 Jul 2014 16:46:57 EST ID:LvYH0MTf</span> <span class="reflink">  <a href="/lang/res/11491.php#i11530">No.11530</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang32343533343238303933')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11530', '11491')" title="Report Post 11530"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11530" data-thread="11491"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B1C95F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1404938817183.jpg"> 1404938817183.jpg </a> -(<em>75711 B, 384x384</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/lang/src/1404938817183.jpg"> <img src="/lang/thumb/1404938817183s.jpg" alt="75711" class="thumb" /> </a>    <blockquote  class="lang32343533343238303933">  &gt;&gt;11523<br><blockquote class = "unkfunc">&gt;Ich lerne Duetch auf meine Computer, Ich empfehle duolingo.com und empfehle sprecke mit mir in diesem Thread :-)<br></blockquote>The sentence(s) should be<br><blockquote class = "unkfunc">&gt;Ich lerne Deutsch auf meinem Computer.<br></blockquote>I see the english sentence but the rest doesn&#39;t make much sense. (at least the second part)<br><blockquote class = "unkfunc">&gt;und ich empfehle das ihr mit mir schreibt.<br></blockquote>I think that would&#39;ve been enough to get the point across. Maybe don&#39;t repeat the same word in that part,too (but that might be just a pet peeve of mine)   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread8949"> <div class="thread_header"> <a id="8949"></a> <span class="filetitle">Blah is the langauge of......</span>  <span class="inbetween"> by </span> <span class="postername">Martha Gossleville</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 12 Mar 2013 08:46:24 EST ID:4+ObrLLz</span></span>  <span class="reflink"> <a href="/lang/res/8949.php#i8949">No.8949</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang33353635313932373633')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('8949')" title="Report Thread 8949"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/8949.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="8949" data-thread="8949"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2932E7; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread8949');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1363092384903.jpg"> 1363092384903.jpg </a> -(<em>777835 B, 1024x768</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang33353635313932373633" target="_blank" href="/lang/src/1363092384903.jpg"> <img src="/lang/thumb/1363092384903s.jpg" alt="777835" class="thumb" /> </a>   			 <blockquote class="opcomment lang33353635313932373633">  As languages are sometimes associcated with nouns, Like french is the language of love, (well that is the only one i know) or italien is the language of music, german of philosophy!<br>Then wat are languages (in particular Farsi, if ye know) or any langauge at all?   </blockquote>   				 				  <span class="omittedposts">  6 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/lang/res/8949.php#9046" onclick="highlight(9046);">&gt;&gt;</a></td> <td class="reply" id="reply9046"> <a id="9046"></a> <div class="replyheader"> 									 <span class="commentpostername">John Birryback</span>  - <span class="idhighlight">Thu, 04 Apr 2013 09:16:20 EST ID:Q5fmvMjR</span> <span class="reflink">  <a href="/lang/res/8949.php#i9046">No.9046</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31323037393335303433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('9046', '8949')" title="Report Post 9046"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="9046" data-thread="8949"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8C6060; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31323037393335303433">  <a href = "/lang/res/8949.php#8976" onclick = "highlight(8976)">&gt;&gt;8976</a><br><br>I think all languages are like that.<br><br>Except maybe Hindi, which sounds extremely emotional (angry) 9/10 times I&#39;ve ever heard it.<br><br>Hindi is an angry language...like German, but much angrier.<br><br>Maybe this is just my perception.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/8949.php#11517" onclick="highlight(11517);">&gt;&gt;</a></td> <td class="reply" id="reply11517"> <a id="11517"></a> <div class="replyheader"> 									 <span class="commentpostername">Samuel Chubblewatch</span>  - <span class="idhighlight">Thu, 03 Jul 2014 13:44:04 EST ID:ECFjdEYL</span> <span class="reflink">  <a href="/lang/res/8949.php#i11517">No.11517</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang3433383438353333')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11517', '8949')" title="Report Post 11517"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11517" data-thread="8949"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7435C4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang3433383438353333">  Got here because of random thread.<br>Anyway<br>English = language of the world<br>Russian = language of coldblooded motherfuckingness <br>Swahili = language of Timon &amp; Pumbaa   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/8949.php#11518" onclick="highlight(11518);">&gt;&gt;</a></td> <td class="reply" id="reply11518"> <a id="11518"></a> <div class="replyheader"> 									 <span class="commentpostername">Faggy Trothall</span>  - <span class="idhighlight">Thu, 03 Jul 2014 21:14:30 EST ID:NqJL1ymG</span> <span class="reflink">  <a href="/lang/res/8949.php#i11518">No.11518</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363630313631363733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11518', '8949')" title="Report Post 11518"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11518" data-thread="8949"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #822066; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31363630313631363733">  <a href = "/lang/res/8949.php#8957" onclick = "highlight(8957)">&gt;&gt;8957</a><br>How can Polish be a drunkard&#39;s language when it&#39;s regularly one of the hardest to pronounce? rz ą wył letters<br><br>Actually same with Irish now that I think about it. Puirt a Beul spelled Polishy would be kinda like (I can&#39;t polish)  Pyrztj a Piał or Pieł depending on accent.<br><br>They say German&#39;s angry but I&#39;ve always heard it as kinda beautiful and kinda dorky. It&#39;s the ö and the ü against the ending words with vowels I guess. Also it almost always sounds like poetic english to me so there&#39;s that.<br><br>Spanish to me is the language of hard work. Hmong is the language of talking shit and drugs. Armenian is Spiritual but in an old timey grunty way. <br><br>Russian sounds always confused but in control, like someone pretending to be cutesy. Or bumpkinny. <br><br>Hindi isn&#39;t angry as much as it&#39;s judgementally disapproving. Same with Punjabi and Romani. And chinese, because of the pirate sounds (retroflex consonants)<br><br>Arabic sounds old. But maybe that&#39;s because my Grandma over uses ae sounds. Also it&#39;s legit a Language of Thing, in which case it&#39;s the language of the D´ad, which in Mohammad&#39;s time was pronounced by pulling the sides of your tongue in like an l, holding the tip behind your teeth, blowing in that shape like an f or h sound, but buzzing it like v or z sound, and like swallowing almost  all at the same time.<br><br>Chinese when it&#39;s not singing pirates is the language of sleepy kids who act like stereotypes because no one allows them not to.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/8949.php#11519" onclick="highlight(11519);">&gt;&gt;</a></td> <td class="reply" id="reply11519"> <a id="11519"></a> <div class="replyheader"> 									 <span class="commentpostername">HakktV2 </span>  - <span class="idhighlight">Sat, 05 Jul 2014 21:22:44 EST ID:q5wzgHyy</span> <span class="reflink">  <a href="/lang/res/8949.php#i11519">No.11519</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31313435343134393635')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11519', '8949')" title="Report Post 11519"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11519" data-thread="8949"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #69EC77; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31313435343134393635">  <a href = "/lang/res/8949.php#11517" onclick = "highlight(11517)">&gt;&gt;11517</a><br>Lol yes @Russian (that feel when your ex girlfriend is a cold blooded motherfucking chick)   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/8949.php#11520" onclick="highlight(11520);">&gt;&gt;</a></td> <td class="reply" id="reply11520"> <a id="11520"></a> <div class="replyheader"> 									 <span class="commentpostername">Basil Ginkinham</span>  - <span class="idhighlight">Sun, 06 Jul 2014 14:51:00 EST ID:lRWJgASq</span> <span class="reflink">  <a href="/lang/res/8949.php#i11520">No.11520</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31333036373734383537')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11520', '8949')" title="Report Post 11520"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11520" data-thread="8949"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8FB016; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31333036373734383537">  Lithuanian is the language of elves<br>Hungarian is the language of orcs<br>Portuguese is a sinister language   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="langthread11512"> <div class="thread_header"> <a id="11512"></a> <span class="filetitle">cum</span>  <span class="inbetween"> by </span> <span class="postername">Nigger Brinnerhall</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 01 Jul 2014 01:10:30 EST ID:bajoLiRG</span></span>  <span class="reflink"> <a href="/lang/res/11512.php#i11512">No.11512</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang32323633303934313435')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('11512')" title="Report Thread 11512"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/lang/res/11512.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11512" data-thread="11512"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A67DF1; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('langthread11512');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/lang/src/1404191430337.jpg"> 1404191430337.jpg </a> -(<em>110055 B, 380x540</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imglang32323633303934313435" target="_blank" href="/lang/src/1404191430337.jpg"> <img src="/lang/thumb/1404191430337s.jpg" alt="110055" class="thumb" /> </a>   			 <blockquote class="opcomment lang32323633303934313435">  is there a name for the &quot;a&quot; to &quot;er&quot; sound for words that end with an a? for example, idea becomes ideer, noriega becomes norieger, alaska becomes alasker. i&#39;ve noticed it more in australian and british accents.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/lang/res/11512.php#11513" onclick="highlight(11513);">&gt;&gt;</a></td> <td class="reply" id="reply11513"> <a id="11513"></a> <div class="replyheader"> 									 <span class="commentpostername">Fucking Gonnerton</span>  - <span class="idhighlight">Tue, 01 Jul 2014 06:45:09 EST ID:HJKlShZi</span> <span class="reflink">  <a href="/lang/res/11512.php#i11513">No.11513</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31343733383735303735')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11513', '11512')" title="Report Post 11513"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11513" data-thread="11512"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9B1073; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31343733383735303735">  The problem with your question is because we don&#39;t know where you are from we don&#39;t know if you are talking about the schwa sound /ə/ when you say &quot;er&quot; or if you are talking about /r/ <br>I&#39;m sure there&#39;s a name for it. Both for that specific shift and a more general word for when words that originally were pronounced the same start changing. Don&#39;t know the words though.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11512.php#11515" onclick="highlight(11515);">&gt;&gt;</a></td> <td class="reply" id="reply11515"> <a id="11515"></a> <div class="replyheader"> 									 <span class="commentpostername">Cyril Trotfuck</span>  - <span class="idhighlight">Tue, 01 Jul 2014 08:00:40 EST ID:NqJL1ymG</span> <span class="reflink">  <a href="/lang/res/11512.php#i11515">No.11515</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang31363630313631363733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11515', '11512')" title="Report Post 11515"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11515" data-thread="11512"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5EC234; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang31363630313631363733">  The process of turning the &quot;a&quot; to &quot;er&quot; is called the intrusive r, and it&#39;s a form of hypercorrection.<br><br>English accents are split between rhotic and non-rhotic, this happening I think in the late 1700s to the early 1800s. Non rhotic accents, pronouncing *all* er sounds as a spread whereever the English were dominant and populous barring areas with large Celtic populations; so most British territories of the time and later, as well as Boston, and barring places like the US, the Gaeltacht, or Canada. But as speakers where the er sound is always a came into contact with rhotic speakers on a frequent basis - e.g. the British dealing with multiple accents, Austrailians getting American tv shows imported, Bostonians with anyone else in America - they added it back in, but because the brain has them stored as allophones (since they merged) it applies to a sounds that weren&#39;t er sounds before. Wiki will probably tell you better.<br><br><br>Generally the sounds you&#39;re talking about are the open back vowel, which in the IPA looks like the open a in handwriting (as opposed to the a with the hook on the top), or the mid central vowel (looking like an upside down  e) alternating with the mid central rhoticised vowel or the front open-mid rhoticized vowel ( appear each as the upside down e or a small, capital cursive e (or backwards round 3) with tiny hooks coming off the sides looking like the not stick part of a lowercase r, respectively).<br><br>I can&#39;t keyboard right now because arch keeps destroying my custom keyboard layouts when I update and I&#39;m too tired and salty to not be lazy.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/lang/res/11512.php#11516" onclick="highlight(11516);">&gt;&gt;</a></td> <td class="reply" id="reply11516"> <a id="11516"></a> <div class="replyheader"> 									 <span class="commentpostername">Ernest Grimstock</span>  - <span class="idhighlight">Wed, 02 Jul 2014 14:25:01 EST ID:qizTVHik</span> <span class="reflink">  <a href="/lang/res/11512.php#i11516">No.11516</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('lang383530393831393136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('11516', '11512')" title="Report Post 11516"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="11516" data-thread="11512"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8A74B7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="lang383530393831393136">  <a href = "/lang/res/11512.php#11515" onclick = "highlight(11515)">&gt;&gt;11515</a><br><br>I found this interesting, but just wanted to say I anticipated a smiley face in your post but I guess I just saw the &#39;3)&#39; in the corner of my eye.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://insomniacgamers.net"><img src="http://cdn.420chan.org/sp/i.png"></a>
		</div>
				<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/lang/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="lang" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">   <span style="font-size: +1;">Pages</span>   <a href="/lang/1.php">Next&gt;&gt;</a>  <br />    0    <a href="/lang/1.php">1</a>     <a href="/lang/2.php">2</a>     <a href="/lang/3.php">3</a>     <a href="/lang/4.php">4</a>     <a href="/lang/5.php">5</a>     <a href="/lang/6.php">6</a>     <a href="/lang/7.php">7</a>     <a href="/lang/8.php">8</a>     <a href="/lang/9.php">9</a>     <a href="/lang/10.php">10</a>     <a href="/lang/11.php">11</a>     <a href="/lang/12.php">12</a>     <a href="/lang/13.php">13</a>     <a href="/lang/14.php">14</a>     <a href="/lang/15.php">15</a>     <a href="/lang/16.php">16</a>     <a href="/lang/17.php">17</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3853152.php' class='boardlink'>Thread 3853152</a></span>
		<p>>>3855750
Not all of them, just the bigger stars.... <a href='/wooo/res/3853152.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='wooo' src='/static/images/board_icons/wooo_icon_32.png' />
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3855712.php' class='boardlink'>Thread 3855712</a></span>
		<p>Also, I'd mark for a Rock/Cena buddy cop movie with subtle hints to their past dashed in.... <a href='/wooo/res/3855712.php' class='boardlink'>&#8629;</a></p></li>
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

