http://boards.420chan.org/h/index.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Thu, 24 Jul 2014 15:31:07 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> Hentai - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/h_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/h_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/h/index.php';
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
	 <div id="header"> <div id="board_logo"> <a href="/h/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/h_icon_64.png" alt="/h/ Icon" /> <p class="board_title_block"> <span class="board_name">/h/</span> <span class="board_title">Hentai</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
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
	 <!--  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/h/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="h" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />     <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>  <tr> <td class="postblock">Name</td> <td> <input title="Name" type="text" name="field1" style="width:224px;" /> <div class="tooltip">  You can leave this blank to post anonymously, or you can create a Tripcode by using the float <b>Name#Password</b> </div>					 </td> </tr>    <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div>  <script type="text/javascript">set_inputs("postform")</script> <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 5000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> 			 <li style="font-size: 16px; font-weight: bold;">WE IGNORE DMCA REQUESTS</li><li style="font-size: 16px; font-weight: bold;">DO NOT MAKE UP "RULES" FOR YOUR THREADS</li> </ul> </div> <hr style="margin-bottom:2px;" /> 		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 <hr style="margin-top:2px;" />   <form id="delform" action="/h/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="h" />    <div id=""> <div class="thread_header"> <a id="158584"></a> <span class="filetitle">Things to remember while on /h/</span>  <span class="inbetween"> by </span> <span class="postername">Celt </span> <span class="postertrip">!BzcOsK03.w</span> <span class="inbetween"> - <span class="idhighlight">Sun, 24 Nov 2013 14:48:35 EST ID:Dm/+28+r</span></span>  <span class="reflink"> <a href="/h/res/158584.php#i158584">No.158584</a> </span>   <i class="gl glyphicon-paperclip"></i>   <img src="/static/images/locked.gif" style="vertical-align: middle" alt="Locked" />  			 <!--  -->   <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('158584')" title="Report Thread 158584"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/h/res/158584.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="158584" data-thread="158584"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #965079; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>-->  </div>  <span class="filesize"> <a target="_blank" href="/h/src/1385322515627.jpg"> 1385322515627.jpg </a> -(<em>577534 B, 763x1000</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgh31333937313837383731" target="_blank" href="/h/src/1385322515627.jpg"> <img src="/h/thumb/1385322515627s.jpg" alt="577534" class="thumb" /> </a>   			 <blockquote class="opcomment">  Rules to abide by<br><ul><li>Please stop reporting everything as spam. Spam is when someone comes here advertising their site. Spam is when some makes multiple posts in a row all making the same request. Spam is not someone requesting a change or a resize of an image. THOSE things you CAN report. If you want something to be correctly dealt with, please label it correctly. The more accurate your report, the more likely we&#39;ll do something.<br></li><li>While flaming is not allowed, the staff are not here to hold your hand through every conversion. Someone making a criticism is not flaming unless they&#39;re going totally overboard. Do not use reporting as a way to &quot;take out&quot; someone you just don&#39;t like. If they&#39;re not doing something against the rules, they&#39;re not going to be banned. Trolls will be removed, but regular users who are normally fine will not be.<br></li><li>Do not resort to calling each other petty names over nothing (Flaming). Calling each other [Name of Character]-tards for example will get you banned. <br></li><li>Do not spam reports/send multiple reports for the one problem in a short space of time (ie 4 reports of one post within 10 minutes). Spamming reports does not make it more likely than the person will be banned. it only takes one report for a mod to see the problem.<br></li><li><em>To give yourself a Unique name that cannot be copied or stolen</em>, place a # followed by a password in the name box after your name. So, for example, I could put in something like &quot;The Celt #password&quot;. This prevents identity theft and trolling by people stealing/mimicking names.<br></li><li>We ignore DMCA requests or requests by Artists to take down their word. Sorry, but we just don&#39;t give a fuck. We&#39;re not American, so DMCA doesn&#39;t apply to us. <br></li><li>Do not make up rules for &quot;your&quot; threads and do not act like authority figures. Don&#39;t say things like &quot;I didn&#39;t you permission to post that&quot;; just move along and ignore things not to your own persona taste.<br></li><li>There is no &quot;Do Not Post list&quot; here, but for your own damn sakes, could you at least attempt to post some quality stuff?</li></ul>   </blockquote>    <div class="lock"> <div class="banimage"> <img src="/static/images/lock.png" alt="Locked" /> </div> <div class="banmessages"> <div class="banmsg"> Thread has been locked </div>  <div class="bannedby"> Thread was locked by: <span style="color: black">Celt</span> </div> <div class="banreason"> Reason: <span style="color: black">abide by the rules and become a better poster</span> </div> </div>					 </div> 				 				       <table><tbody><tr><td class="doubledash"><a href="/h/res/158584.php#166330" onclick="highlight(166330);">&gt;&gt;</a></td> <td class="reply" id="reply166330"> <a id="166330"></a> <div class="replyheader"> 									 <span class="commentpostername">Celt </span> <span class="postertrip">!BzcOsK03.w</span> - <span class="idhighlight">Mon, 30 Dec 2013 07:30:38 EST ID:tujm8Xl8</span> <span class="reflink">  <a href="/h/res/158584.php#i166330">No.166330</a>   </span>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('166330', '158584')" title="Report Post 166330"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="166330" data-thread="158584"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F73FCA; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1388406638055.jpg"> 1388406638055.jpg </a> -(<em>856258 B, 1200x1769</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1388406638055.jpg"> <img src="/h/thumb/1388406638055s.jpg" alt="856258" class="thumb" /> </a>    <blockquote >  Threads on an imageboard like this are not like forums, THEY DO NOT LAST FOREVER. They are automatically deleted by the system over time. This is because we do not keep vast archives of threads, but instead keep whatever is on the boards fresh. <br><br>So the next time you&#39;re thread disappears, it was more than likely deleted by the system for inactivity rather than any staff member coming along and getting ride of it.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/158584.php#176685" onclick="highlight(176685);">&gt;&gt;</a></td> <td class="reply" id="reply176685"> <a id="176685"></a> <div class="replyheader"> 									 <span class="commentpostername">Celt </span> <span class="postertrip">!BzcOsK03.w</span> - <span class="idhighlight">Sat, 15 Feb 2014 14:35:32 EST ID:+v7/VtNs</span> <span class="reflink">  <a href="/h/res/158584.php#i176685">No.176685</a>   </span>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('176685', '158584')" title="Report Post 176685"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="176685" data-thread="158584"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F1CBDA; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1392492932612.jpg"> 1392492932612.jpg </a> -(<em>201830 B, 500x700</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1392492932612.jpg"> <img src="/h/thumb/1392492932612s.jpg" alt="201830" class="thumb" /> </a>    <blockquote >  If you think someone is &quot;samefagging&quot;  (one person trying to appear to be multiple people) just REPORT THEM AND MOVE ON. Do not accuse of them being a &quot;samefag&quot; because that just shits up threads. <br><br>Furthermore, do not announce to people you have reported them. This only escalated the situation, because they will either get mad at this or laugh because they think they&#39;ve succeeded in &quot;trolling&quot; you. JUST REPORT THEM AND MOVE ON.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/158584.php#191709" onclick="highlight(191709);">&gt;&gt;</a></td> <td class="reply" id="reply191709"> <a id="191709"></a> <div class="replyheader"> 									 <span class="commentpostername">Celt </span> <span class="postertrip">!BzcOsK03.w</span> - <span class="idhighlight">Wed, 23 Apr 2014 19:12:43 EST ID:Fb3fvLH+</span> <span class="reflink">  <a href="/h/res/158584.php#i191709">No.191709</a>   </span>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('191709', '158584')" title="Report Post 191709"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="191709" data-thread="158584"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9CC35F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1398294763762.jpg"> 1398294763762.jpg </a> -(<em>182170 B, 751x1063</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1398294763762.jpg"> <img src="/h/thumb/1398294763762s.jpg" alt="182170" class="thumb" /> </a>    <blockquote >  <blockquote class = "unkfunc">&gt;NARUT0, BL3ACH, ONE P1ECE, FAIRY TA1L PIXXX THREAD<br></blockquote><br>Stop fucking doing this; do not encrypt your thread so they can&#39;t be found on google. <br><br>The only, single reason this board has people on it at all is because of people googling &quot;Naruto porn&quot; and this board being the first result. We NEED the ad revenue from people visiting the boards. <br><br>Also, WE IGNORE DMCA REQUESTS because we&#39;re a Canadian website; you don&#39;t need to hide your stuff to protect them. We&#39;ll protect them for you. <br><br>Label your threads like this:<br><blockquote class = "unkfunc">&gt;Naruto, Bleach, One Piece, Fairy tail  Pixxx thread<br></blockquote><br>It doesn&#39;t even matter if the artists themselves show up here, nothing they can say can get us to take down any images.   </blockquote>     <div class="warn"> <div class="banimage"> <img src="/static/images/warn.png" alt="Warned" /> </div> <div class="banmessages"> <div class="banmsg"> User has been warned </div>  <div class="bannedby"> Warned by: <span style="color: black">spunky</span> </div> <div class="banreason"> Message: <span style="color: black">Also&#44; if you see spam&#44; CP&#44; etc. don&#39;t start flaming. Hit the report button and ignore tham. A mod will clean the mess up shorty.</span> </div> </div>					 </div> 				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="hthread209531"> <div class="thread_header"> <a id="209531"></a> <span class="filetitle">Naruto, Bleach, One Piece, Fairy tail Original Pixxx</span>  <span class="inbetween"> by </span> <span class="postername">Mr.NiceGuy</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 29 Jun 2014 11:10:47 EST ID:1oAT3MhD</span></span>  <span class="reflink"> <a href="/h/res/209531.php#i209531">No.209531</a> </span>    			 <!--  - Awesome Thread? <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=209531&amp;vote=0">No!</a> | <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=209531&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h31353237343039333332')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('209531')" title="Report Thread 209531"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/h/res/209531.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="209531" data-thread="209531"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5DAB18; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('hthread209531');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1404054647827.jpg"> 1404054647827.jpg </a> -(<em>1911159 B, 3507x2550</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgh31353237343039333332" target="_blank" href="/h/src/1404054647827.jpg"> <img src="/h/thumb/1404054647827s.jpg" alt="1911159" class="thumb" /> </a>   			 <blockquote class="opcomment h31353237343039333332">  old thread <a href="http://boards.420chan.org/h/res/200363.php" rel="nofollow" target="_blank">http://boards.420chan.org/h/res/200363.php</a>   </blockquote>   				 				  <span class="omittedposts">  459 posts and 147 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/h/res/209531.php#216855" onclick="highlight(216855);">&gt;&gt;</a></td> <td class="reply" id="reply216855"> <a id="216855"></a> <div class="replyheader"> 									 <span class="commentpostername">Isabella Lightwater</span>  - <span class="idhighlight">Thu, 24 Jul 2014 11:25:15 EST ID:2XJ3amKJ</span> <span class="reflink">  <a href="/h/res/209531.php#i216855">No.216855</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h31333739313230393238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216855', '209531')" title="Report Post 216855"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216855" data-thread="209531"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #66845F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="h31333739313230393238">  <a href = "/h/res/209531.php#214926" onclick = "highlight(214926)">&gt;&gt;214926</a><br>hey dude where is the new sasuke pic? come on dont let me down   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/209531.php#216856" onclick="highlight(216856);">&gt;&gt;</a></td> <td class="reply" id="reply216856"> <a id="216856"></a> <div class="replyheader"> 									 <span class="commentpostername">Isabella Lightwater</span>  - <span class="idhighlight">Thu, 24 Jul 2014 11:26:23 EST ID:2XJ3amKJ</span> <span class="reflink">  <a href="/h/res/209531.php#i216856">No.216856</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h31333739313230393238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216856', '209531')" title="Report Post 216856"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216856" data-thread="209531"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #28758B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="h31333739313230393238">  <a href = "/h/res/209531.php#216670" onclick = "highlight(216670)">&gt;&gt;216670</a><br>do you have the karin/sasuke new pic? I dont see it here   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/209531.php#216857" onclick="highlight(216857);">&gt;&gt;</a></td> <td class="reply" id="reply216857"> <a id="216857"></a> <div class="replyheader"> 									 <span class="commentpostername">Isabella Lightwater</span>  - <span class="idhighlight">Thu, 24 Jul 2014 11:27:35 EST ID:2XJ3amKJ</span> <span class="reflink">  <a href="/h/res/209531.php#i216857">No.216857</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h31333739313230393238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216857', '209531')" title="Report Post 216857"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216857" data-thread="209531"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0EFC68; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="h31333739313230393238">  <a href = "/h/res/209531.php#215792" onclick = "highlight(215792)">&gt;&gt;215792</a><br>could you upload the new pic with sasuke I need it for my blog!   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="hthread166335"> <div class="thread_header"> <a id="166335"></a> <span class="filetitle">Source Filmmaker and animated Gifs Porn</span>  <span class="inbetween"> by </span> <span class="postername">Doris Crarringway</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 30 Dec 2013 08:02:54 EST ID:y9G8/oRR</span></span>  <span class="reflink"> <a href="/h/res/166335.php#i166335">No.166335</a> </span>    			 <!--  - Awesome Thread? <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=166335&amp;vote=0">No!</a> | <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=166335&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303739313732')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('166335')" title="Report Thread 166335"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/h/res/166335.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="166335" data-thread="166335"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7C1414; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('hthread166335');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1388408574989.gif"> 1388408574989.gif </a> -(<em>2661932 B, 550x408</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgh33303334303739313732" target="_blank" href="/h/src/1388408574989.gif"> <img src="/h/thumb/1388408574989s.jpg" alt="2661932" class="thumb" /> </a>   			 <blockquote class="opcomment h33303334303739313732">  Work that body.   </blockquote>   				 				  <span class="omittedposts">  459 posts and 336 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/h/res/166335.php#216682" onclick="highlight(216682);">&gt;&gt;</a></td> <td class="reply" id="reply216682"> <a id="216682"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Blinnerwater</span>  - <span class="idhighlight">Wed, 23 Jul 2014 22:15:46 EST ID:ojKhgqN/</span> <span class="reflink">  <a href="/h/res/166335.php#i216682">No.216682</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303734323338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216682', '166335')" title="Report Post 216682"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216682" data-thread="166335"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5D3A4E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1406168146669.gif"> 1406168146669.gif </a> -(<em>1515063 B, 350x197</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1406168146669.gif"> <img src="/h/thumb/1406168146669s.jpg" alt="1515063" class="thumb" /> </a>    <blockquote  class="h33303334303734323338">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/166335.php#216780" onclick="highlight(216780);">&gt;&gt;</a></td> <td class="reply" id="reply216780"> <a id="216780"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Blinnerwater</span>  - <span class="idhighlight">Thu, 24 Jul 2014 04:59:53 EST ID:ojKhgqN/</span> <span class="reflink">  <a href="/h/res/166335.php#i216780">No.216780</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303734323338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216780', '166335')" title="Report Post 216780"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216780" data-thread="166335"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #120BAC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1406192393669.gif"> 1406192393669.gif </a> -(<em>3119264 B, 480x270</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1406192393669.gif"> <img src="/h/thumb/1406192393669s.jpg" alt="3119264" class="thumb" /> </a>    <blockquote  class="h33303334303734323338">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/166335.php#216854" onclick="highlight(216854);">&gt;&gt;</a></td> <td class="reply" id="reply216854"> <a id="216854"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Blinnerwater</span>  - <span class="idhighlight">Thu, 24 Jul 2014 11:19:54 EST ID:ojKhgqN/</span> <span class="reflink">  <a href="/h/res/166335.php#i216854">No.216854</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303734323338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216854', '166335')" title="Report Post 216854"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216854" data-thread="166335"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #58376F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1406215194669.gif"> 1406215194669.gif </a> -(<em>1845635 B, 512x288</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1406215194669.gif"> <img src="/h/thumb/1406215194669s.jpg" alt="1845635" class="thumb" /> </a>    <blockquote  class="h33303334303734323338">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="hthread212264"> <div class="thread_header"> <a id="212264"></a> <span class="filetitle">Naruto, Bleach, One Piece, Fairy tail Pixxx EDITS new thread</span>  <span class="inbetween"> by </span> <span class="postername">Voidy </span> <span class="postertrip">!NxHLza9fy6</span> <span class="inbetween"> - <span class="idhighlight">Wed, 09 Jul 2014 17:00:39 EST ID:gPWwdJqZ</span></span>  <span class="reflink"> <a href="/h/res/212264.php#i212264">No.212264</a> </span>    			 <!--  - Awesome Thread? <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=212264&amp;vote=0">No!</a> | <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=212264&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303332343238393730')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('212264')" title="Report Thread 212264"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/h/res/212264.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="212264" data-thread="212264"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3EF1DD; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('hthread212264');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1404939639324.jpg"> 1404939639324.jpg </a> -(<em>493360 B, 1600x2202</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgh33303332343238393730" target="_blank" href="/h/src/1404939639324.jpg"> <img src="/h/thumb/1404939639324s.jpg" alt="493360" class="thumb" /> </a>   			 <blockquote class="opcomment h33303332343238393730">  <blockquote class = "unkfunc">&gt;Naruto, Bleach, One Piece, Fairy tail Pixxx EDITS thread<br></blockquote>PIXXX edits and requests, edit ideas, a bit of fanboy wars plus the occasional original art or comic<br>old thread is old <a href = "/h/res/206468.php" onclick = "highlight(206468)">&gt;&gt;206468</a> ... for other stuff:<br><br>for PIXXX originals ONLY (no requests or edits) <a href = "/h/res/209531.php" onclick = "highlight(209531)">&gt;&gt;209531</a><br><br>Naruto Pixxx Edits by Liz and contributors (Naruto edits only) <a href = "/h/res/201075.php" onclick = "highlight(201075)">&gt;&gt;201075</a><br><br>Palcomix VIP etc. originals &gt;&gt;211284<br><br>Palcomix and MU edits <a href = "/h/res/206383.php" onclick = "highlight(206383)">&gt;&gt;206383</a><br><br>so keep posting the good stuff and let the editors know how much you enjoyed their work. enjoy!   </blockquote>   				 				  <span class="omittedposts">  607 posts and 196 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/h/res/212264.php#216818" onclick="highlight(216818);">&gt;&gt;</a></td> <td class="reply" id="reply216818"> <a id="216818"></a> <div class="replyheader"> 									 <span class="commentpostername">jim</span>  - <span class="idhighlight">Thu, 24 Jul 2014 07:54:28 EST ID:HF6JUVxc</span> <span class="reflink">  <a href="/h/res/212264.php#i216818">No.216818</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h31323931383933363037')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216818', '212264')" title="Report Post 216818"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216818" data-thread="212264"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7DFF08; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="h31323931383933363037">  <a href = "/h/res/212264.php#216798" onclick = "highlight(216798)">&gt;&gt;216798</a><br>can blush ino face   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/212264.php#216820" onclick="highlight(216820);">&gt;&gt;</a></td> <td class="reply" id="reply216820"> <a id="216820"></a> <div class="replyheader"> 									 <span class="commentpostername">Nobody</span>  - <span class="idhighlight">Thu, 24 Jul 2014 07:59:02 EST ID:ak8OWIzA</span> <span class="reflink">  <a href="/h/res/212264.php#i216820">No.216820</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h31343436353330313336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216820', '212264')" title="Report Post 216820"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216820" data-thread="212264"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FFF61E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1406203142542.jpg"> 1406203142542.jpg </a> -(<em>1340316 B, 1600x2202</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1406203142542.jpg"> <img src="/h/thumb/1406203142542s.jpg" alt="1340316" class="thumb" /> </a>    <blockquote  class="h31343436353330313336">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/212264.php#216853" onclick="highlight(216853);">&gt;&gt;</a></td> <td class="reply" id="reply216853"> <a id="216853"></a> <div class="replyheader"> 									 <span class="commentpostername">YuriForever</span> <span class="postertrip">!ljd7MNPZ5c</span> - <span class="idhighlight">Thu, 24 Jul 2014 11:18:15 EST ID:5OO3Ffhm</span> <span class="reflink">  <a href="/h/res/212264.php#i216853">No.216853</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h31383134303132353930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216853', '212264')" title="Report Post 216853"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216853" data-thread="212264"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DC16CA; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1406215095359.jpg"> 1406215095359.jpg </a> -(<em>1159653 B, 2202x1600</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1406215095359.jpg"> <img src="/h/thumb/1406215095359s.jpg" alt="1159653" class="thumb" /> </a>    <blockquote  class="h31383134303132353930">  <a href = "/h/res/212264.php#215950" onclick = "highlight(215950)">&gt;&gt;215950</a><br>Sorry I couldn&#39;t find any Sakura faces that would match the picture. I hope you&#39;ll like this edit.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="hthread194936"> <div class="thread_header"> <a id="194936"></a> <span class="filetitle">Adventure Time</span>  <span class="inbetween"> by </span> <span class="postername">Whitey Sindleseck</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 06 May 2014 04:07:49 EST ID:bCcemeEB</span></span>  <span class="reflink"> <a href="/h/res/194936.php#i194936">No.194936</a> </span>    			 <!--  - Awesome Thread? <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=194936&amp;vote=0">No!</a> | <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=194936&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303733363033')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('194936')" title="Report Thread 194936"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/h/res/194936.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="194936" data-thread="194936"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B6FF2B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('hthread194936');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1399363669337.jpg"> 1399363669337.jpg </a> -(<em>218828 B, 1000x1500</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgh33303334303733363033" target="_blank" href="/h/src/1399363669337.jpg"> <img src="/h/thumb/1399363669337s.jpg" alt="218828" class="thumb" /> </a>   			 <blockquote class="opcomment h33303334303733363033">  Who is your favourite Adventure Time female character?   </blockquote>   				 				  <span class="omittedposts">  69 posts and 66 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/h/res/194936.php#216691" onclick="highlight(216691);">&gt;&gt;</a></td> <td class="reply" id="reply216691"> <a id="216691"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Blinnerwater</span>  - <span class="idhighlight">Wed, 23 Jul 2014 22:38:22 EST ID:ojKhgqN/</span> <span class="reflink">  <a href="/h/res/194936.php#i216691">No.216691</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303734323338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216691', '194936')" title="Report Post 216691"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216691" data-thread="194936"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #360BCE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1406169502669.png"> 1406169502669.png </a> -(<em>346458 B, 565x739</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1406169502669.png"> <img src="/h/thumb/1406169502669s.jpg" alt="346458" class="thumb" /> </a>    <blockquote  class="h33303334303734323338">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/194936.php#216782" onclick="highlight(216782);">&gt;&gt;</a></td> <td class="reply" id="reply216782"> <a id="216782"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Blinnerwater</span>  - <span class="idhighlight">Thu, 24 Jul 2014 05:03:57 EST ID:ojKhgqN/</span> <span class="reflink">  <a href="/h/res/194936.php#i216782">No.216782</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303734323338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216782', '194936')" title="Report Post 216782"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216782" data-thread="194936"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1BC73F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1406192637669.jpg"> 1406192637669.jpg </a> -(<em>566910 B, 1002x1280</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1406192637669.jpg"> <img src="/h/thumb/1406192637669s.jpg" alt="566910" class="thumb" /> </a>    <blockquote  class="h33303334303734323338">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/194936.php#216851" onclick="highlight(216851);">&gt;&gt;</a></td> <td class="reply" id="reply216851"> <a id="216851"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Blinnerwater</span>  - <span class="idhighlight">Thu, 24 Jul 2014 11:01:35 EST ID:ojKhgqN/</span> <span class="reflink">  <a href="/h/res/194936.php#i216851">No.216851</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303734323338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216851', '194936')" title="Report Post 216851"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216851" data-thread="194936"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #558422; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1406214095669.jpg"> 1406214095669.jpg </a> -(<em>441611 B, 850x989</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1406214095669.jpg"> <img src="/h/thumb/1406214095669s.jpg" alt="441611" class="thumb" /> </a>    <blockquote  class="h33303334303734323338">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="hthread206383"> <div class="thread_header"> <a id="206383"></a> <span class="filetitle">Pal and MU sites corrections and edit thread</span>  <span class="inbetween"> by </span> <span class="postername">Yamifur </span> <span class="postertrip">!jePaLJ5rV6</span> <span class="inbetween"> - <span class="idhighlight">Wed, 18 Jun 2014 08:44:03 EST ID:+Z6NPH9F</span></span>  <span class="reflink"> <a href="/h/res/206383.php#i206383">No.206383</a> </span>    			 <!--  - Awesome Thread? <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=206383&amp;vote=0">No!</a> | <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=206383&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33343936343033363031')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('206383')" title="Report Thread 206383"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/h/res/206383.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="206383" data-thread="206383"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #77D3DD; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('hthread206383');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1403095443376.jpg"> 1403095443376.jpg </a> -(<em>373841 B, 1300x1837</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgh33343936343033363031" target="_blank" href="/h/src/1403095443376.jpg"> <img src="/h/thumb/1403095443376s.jpg" alt="373841" class="thumb" /> </a>   			 <blockquote class="opcomment h33343936343033363031">  This thread is for corrections and edits of Palcomix VIP, Rear Delivery, SlaveToon, Yuri Haven, Mobius Unleashed, Digihentai, Pokeporn Live and Equestria Untamed related pics.<br><br>Often, we find certain mistakes in pictures from the Palcomix Team (who also work on the other sites mentioned above) and it can be nerve racking seeing these flaws go unfixed.<br><br>It might be a cosmetic flaw such as a missing nipple, extra anus or some kind of coloration issue. <br><br>Sometimes someone might simply just wish for a alteration to give a picture new flavor, such as adding a penis to a girl and making her a Futa, adding a character, removing a character or just giving a nice ass some color in the shape of a hand print.<br><br>So come one, come all, post your edits and the edits of others.   </blockquote>   				 				  <span class="omittedposts">  256 posts and 47 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/h/res/206383.php#216732" onclick="highlight(216732);">&gt;&gt;</a></td> <td class="reply" id="reply216732"> <a id="216732"></a> <div class="replyheader"> 									 <span class="commentpostername">Shitting Blollyfoot</span>  - <span class="idhighlight">Thu, 24 Jul 2014 00:54:31 EST ID:rN/SPZow</span> <span class="reflink">  <a href="/h/res/206383.php#i216732">No.216732</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h383431303137313238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216732', '206383')" title="Report Post 216732"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216732" data-thread="206383"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E60BA6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="h383431303137313238">  <a href = "/h/res/206383.php#216649" onclick = "highlight(216649)">&gt;&gt;216649</a><br>They seem to be removed in most of the future pages.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/206383.php#216734" onclick="highlight(216734);">&gt;&gt;</a></td> <td class="reply" id="reply216734"> <a id="216734"></a> <div class="replyheader"> 									 <span class="commentpostername">Rebecca Socklecocke</span>  - <span class="idhighlight">Thu, 24 Jul 2014 00:56:57 EST ID:D6d/9wWR</span> <span class="reflink">  <a href="/h/res/206383.php#i216734">No.216734</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h31323436303338303438')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216734', '206383')" title="Report Post 216734"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216734" data-thread="206383"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2C9DDA; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="h31323436303338303438">  <a href = "/h/res/206383.php#216732" onclick = "highlight(216732)">&gt;&gt;216732</a><br>but i don&#39;t think they should&#39;ve just yet. Amy still had her gag on the next page   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/206383.php#216850" onclick="highlight(216850);">&gt;&gt;</a></td> <td class="reply" id="reply216850"> <a id="216850"></a> <div class="replyheader"> 									 <span class="commentpostername">Rebecca Socklecocke</span>  - <span class="idhighlight">Thu, 24 Jul 2014 10:57:09 EST ID:D6d/9wWR</span> <span class="reflink">  <a href="/h/res/206383.php#i216850">No.216850</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h31323436303338303438')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216850', '206383')" title="Report Post 216850"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216850" data-thread="206383"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #077F29; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="h31323436303338303438">  bump   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="hthread197623"> <div class="thread_header"> <a id="197623"></a> <span class="filetitle">R34 Thread</span>  <span class="inbetween"> by </span> <span class="postername">Isabella Worthingbanks</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 16 May 2014 16:51:40 EST ID:cWbWRii/</span></span>  <span class="reflink"> <a href="/h/res/197623.php#i197623">No.197623</a> </span>    			 <!--  - Awesome Thread? <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=197623&amp;vote=0">No!</a> | <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=197623&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303734343739')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('197623')" title="Report Thread 197623"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/h/res/197623.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="197623" data-thread="197623"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EF704B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('hthread197623');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1400273500211.jpg"> 1400273500211.jpg </a> -(<em>594265 B, 950x1024</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgh33303334303734343739" target="_blank" href="/h/src/1400273500211.jpg"> <img src="/h/thumb/1400273500211s.jpg" alt="594265" class="thumb" /> </a>   			 <blockquote class="opcomment h33303334303734343739">  Dumping mixed pics   </blockquote>   				 				  <span class="omittedposts">  177 posts and 155 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/h/res/197623.php#216680" onclick="highlight(216680);">&gt;&gt;</a></td> <td class="reply" id="reply216680"> <a id="216680"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Blinnerwater</span>  - <span class="idhighlight">Wed, 23 Jul 2014 22:00:17 EST ID:ojKhgqN/</span> <span class="reflink">  <a href="/h/res/197623.php#i216680">No.216680</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303734323338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216680', '197623')" title="Report Post 216680"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216680" data-thread="197623"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6C856B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1406167217669.jpg"> 1406167217669.jpg </a> -(<em>616920 B, 900x900</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1406167217669.jpg"> <img src="/h/thumb/1406167217669s.jpg" alt="616920" class="thumb" /> </a>    <blockquote  class="h33303334303734323338">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/197623.php#216778" onclick="highlight(216778);">&gt;&gt;</a></td> <td class="reply" id="reply216778"> <a id="216778"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Blinnerwater</span>  - <span class="idhighlight">Thu, 24 Jul 2014 04:56:20 EST ID:ojKhgqN/</span> <span class="reflink">  <a href="/h/res/197623.php#i216778">No.216778</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303734323338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216778', '197623')" title="Report Post 216778"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216778" data-thread="197623"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F40369; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1406192180669.jpg"> 1406192180669.jpg </a> -(<em>273931 B, 1280x573</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1406192180669.jpg"> <img src="/h/thumb/1406192180669s.jpg" alt="273931" class="thumb" /> </a>    <blockquote  class="h33303334303734323338">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/197623.php#216849" onclick="highlight(216849);">&gt;&gt;</a></td> <td class="reply" id="reply216849"> <a id="216849"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Blinnerwater</span>  - <span class="idhighlight">Thu, 24 Jul 2014 10:56:43 EST ID:ojKhgqN/</span> <span class="reflink">  <a href="/h/res/197623.php#i216849">No.216849</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303734323338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216849', '197623')" title="Report Post 216849"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216849" data-thread="197623"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5AA2E1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1406213803669.jpg"> 1406213803669.jpg </a> -(<em>309621 B, 902x900</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1406213803669.jpg"> <img src="/h/thumb/1406213803669s.jpg" alt="309621" class="thumb" /> </a>    <blockquote  class="h33303334303734323338">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="hthread132677"> <div class="thread_header"> <a id="132677"></a> <span class="filetitle">Hard to find 3D request thread</span>  <span class="inbetween"> by </span> <span class="postername">dezel shitzer</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 02 Aug 2013 20:10:14 EST ID:Cgk3ikG7</span></span>  <span class="reflink"> <a href="/h/res/132677.php#i132677">No.132677</a> </span>    			 <!--  - Awesome Thread? <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=132677&amp;vote=0">No!</a> | <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=132677&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h31313635353834313430')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('132677')" title="Report Thread 132677"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/h/res/132677.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="132677" data-thread="132677"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #86DC3D; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('hthread132677');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1375488614419.jpg"> 1375488614419.jpg </a> -(<em>140039 B, 600x730</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgh31313635353834313430" target="_blank" href="/h/src/1375488614419.jpg"> <img src="/h/thumb/1375488614419s.jpg" alt="140039" class="thumb" /> </a>   			 <blockquote class="opcomment h31313635353834313430">  Instead of filling up the Bl@ck@ddr thread with these requests i decided to make a dedicated thread for it. I&#39;ll start the ball rolling Adv3ntures of L@li The R0ute from er0genesis   </blockquote>   				 				  <span class="omittedposts">  765 posts and 87 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/h/res/132677.php#216816" onclick="highlight(216816);">&gt;&gt;</a></td> <td class="reply" id="reply216816"> <a id="216816"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Drecklestick</span>  - <span class="idhighlight">Thu, 24 Jul 2014 07:38:56 EST ID:hJEAkTRy</span> <span class="reflink">  <a href="/h/res/132677.php#i216816">No.216816</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303333303530303932')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216816', '132677')" title="Report Post 216816"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216816" data-thread="132677"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D7BF3B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="h33303333303530303932">  <a href = "/h/res/132677.php#216802" onclick = "highlight(216802)">&gt;&gt;216802</a><br>dude 1 week rule   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/132677.php#216847" onclick="highlight(216847);">&gt;&gt;</a></td> <td class="reply" id="reply216847"> <a id="216847"></a> <div class="replyheader"> 									 <span class="commentpostername">John Drirrychuck</span>  - <span class="idhighlight">Thu, 24 Jul 2014 10:41:59 EST ID:ddO8K+VI</span> <span class="reflink">  <a href="/h/res/132677.php#i216847">No.216847</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33323730343830343231')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216847', '132677')" title="Report Post 216847"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216847" data-thread="132677"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C13B3B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="h33323730343830343231">  <a href = "/h/res/132677.php#216802" onclick = "highlight(216802)">&gt;&gt;216802</a><br>i can´t open it =/   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/132677.php#216848" onclick="highlight(216848);">&gt;&gt;</a></td> <td class="reply" id="reply216848"> <a id="216848"></a> <div class="replyheader"> 									 <span class="commentpostername">John Fuckingwater</span>  - <span class="idhighlight">Thu, 24 Jul 2014 10:55:43 EST ID:X8HlgiWj</span> <span class="reflink">  <a href="/h/res/132677.php#i216848">No.216848</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h31343235333439363831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216848', '132677')" title="Report Post 216848"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216848" data-thread="132677"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #50F087; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="h31343235333439363831">  <a href = "/h/res/132677.php#216847" onclick = "highlight(216847)">&gt;&gt;216847</a><br>It&#39;s a DCV format, you need <br><a href="https://www.epoch-art.com/dynamic-comic-viewer-download/" rel="nofollow" target="_blank">https://www.epoch-art.com/dynamic-comic-viewer-download/</a>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="hthread177939"> <div class="thread_header"> <a id="177939"></a> <span class="filetitle">Zone Archive</span>  <span class="inbetween"> by </span> <span class="postername">George Brepperstore</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 19 Feb 2014 17:04:36 EST ID:bCcemeEB</span></span>  <span class="reflink"> <a href="/h/res/177939.php#i177939">No.177939</a> </span>    			 <!--  - Awesome Thread? <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=177939&amp;vote=0">No!</a> | <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=177939&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303733363033')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('177939')" title="Report Thread 177939"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/h/res/177939.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="177939" data-thread="177939"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3B5F99; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('hthread177939');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1392847476072.png"> 1392847476072.png </a> -(<em>45012 B, 300x300</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgh33303334303733363033" target="_blank" href="/h/src/1392847476072.png"> <img src="/h/thumb/1392847476072s.jpg" alt="45012" class="thumb" /> </a>   			 <blockquote class="opcomment h33303334303733363033">  Which series would you like to see Zone parody next?   </blockquote>   				 				  <span class="omittedposts">  274 posts and 141 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/h/res/177939.php#216690" onclick="highlight(216690);">&gt;&gt;</a></td> <td class="reply" id="reply216690"> <a id="216690"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Blinnerwater</span>  - <span class="idhighlight">Wed, 23 Jul 2014 22:34:58 EST ID:ojKhgqN/</span> <span class="reflink">  <a href="/h/res/177939.php#i216690">No.216690</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303734323338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216690', '177939')" title="Report Post 216690"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216690" data-thread="177939"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C3A589; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1406169298669.gif"> 1406169298669.gif </a> -(<em>3089422 B, 530x703</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1406169298669.gif"> <img src="/h/thumb/1406169298669s.jpg" alt="3089422" class="thumb" /> </a>    <blockquote  class="h33303334303734323338">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/177939.php#216741" onclick="highlight(216741);">&gt;&gt;</a></td> <td class="reply" id="reply216741"> <a id="216741"></a> <div class="replyheader"> 									 <span class="commentpostername">BarakOsama </span> <span class="postertrip">!ALTWs5jBqo</span> - <span class="idhighlight">Thu, 24 Jul 2014 01:35:38 EST ID:iOvKTTUs</span> <span class="reflink">  <a href="/h/res/177939.php#i216741">No.216741</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h31333237353036313537')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216741', '177939')" title="Report Post 216741"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216741" data-thread="177939"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8CD45E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="h31333237353036313537">  <a href = "/h/res/177939.php#216690" onclick = "highlight(216690)">&gt;&gt;216690</a><br>I had one with a lower resolution, this is much better, props to you for the post   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/177939.php#216846" onclick="highlight(216846);">&gt;&gt;</a></td> <td class="reply" id="reply216846"> <a id="216846"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Blinnerwater</span>  - <span class="idhighlight">Thu, 24 Jul 2014 10:30:05 EST ID:ojKhgqN/</span> <span class="reflink">  <a href="/h/res/177939.php#i216846">No.216846</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h33303334303734323338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216846', '177939')" title="Report Post 216846"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216846" data-thread="177939"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #96223C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1406212205669.png"> 1406212205669.png </a> -(<em>1902915 B, 1183x959</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/h/src/1406212205669.png"> <img src="/h/thumb/1406212205669s.jpg" alt="1902915" class="thumb" /> </a>    <blockquote  class="h33303334303734323338">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="hthread200690"> <div class="thread_header"> <a id="200690"></a> <span class="filetitle">Ecchi Enzo</span>  <span class="inbetween"> by </span> <span class="postername">Random Guy</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 27 May 2014 12:07:18 EST ID:yC+c3cMe</span></span>  <span class="reflink"> <a href="/h/res/200690.php#i200690">No.200690</a> </span>    			 <!--  - Awesome Thread? <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=200690&amp;vote=0">No!</a> | <a href="/h/taimaba.pl?board=h&amp;task=vote&amp;thread=200690&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h343539393530343834')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('200690')" title="Report Thread 200690"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/h/res/200690.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="200690" data-thread="200690"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B9D0BC; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('hthread200690');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/h/src/1401206838475.jpg"> 1401206838475.jpg </a> -(<em>821868 B, 910x1300</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgh343539393530343834" target="_blank" href="/h/src/1401206838475.jpg"> <img src="/h/thumb/1401206838475s.jpg" alt="821868" class="thumb" /> </a>   			 <blockquote class="opcomment h343539393530343834">  Time for a new thread. Let  the sharing begin!!!   </blockquote>   				 				  <span class="omittedposts">  442 posts and 162 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/h/res/200690.php#216745" onclick="highlight(216745);">&gt;&gt;</a></td> <td class="reply" id="reply216745"> <a id="216745"></a> <div class="replyheader"> 									 <span class="commentpostername">BarakOsama </span> <span class="postertrip">!ALTWs5jBqo</span> - <span class="idhighlight">Thu, 24 Jul 2014 01:40:40 EST ID:iOvKTTUs</span> <span class="reflink">  <a href="/h/res/200690.php#i216745">No.216745</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h31333237353036313537')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216745', '200690')" title="Report Post 216745"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216745" data-thread="200690"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7C6A80; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="h31333237353036313537">  <a href = "/h/res/200690.php#216738" onclick = "highlight(216738)">&gt;&gt;216738</a><br>Some of the girls from Bleach wearing bunnygirl suits   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/200690.php#216836" onclick="highlight(216836);">&gt;&gt;</a></td> <td class="reply" id="reply216836"> <a id="216836"></a> <div class="replyheader"> 									 <span class="commentpostername">Tortoiseking</span>  - <span class="idhighlight">Thu, 24 Jul 2014 08:29:33 EST ID:sQqIUuWS</span> <span class="reflink">  <a href="/h/res/200690.php#i216836">No.216836</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h31363435363038343831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216836', '200690')" title="Report Post 216836"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216836" data-thread="200690"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #41E002; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="h31363435363038343831">  Is that wrestler quincy pic almost done?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/h/res/200690.php#216845" onclick="highlight(216845);">&gt;&gt;</a></td> <td class="reply" id="reply216845"> <a id="216845"></a> <div class="replyheader"> 									 <span class="commentpostername">Editor in Chimp </span> <span class="postertrip">!n/ig.jSwHw</span> - <span class="idhighlight">Thu, 24 Jul 2014 10:17:18 EST ID:eJ18vMKY</span> <span class="reflink">  <a href="/h/res/200690.php#i216845">No.216845</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('h32313736303934363530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('216845', '200690')" title="Report Post 216845"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="216845" data-thread="200690"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #23BB5B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="h32313736303934363530">  Hey guys, just a quick message that I won&#39;t be doing any edits for a day or two due to travel. I&#39;ll get back to editing ASAP   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
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
 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/h/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="h" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">   <span style="font-size: +1;">Pages</span>   <a href="/h/1.php">Next&gt;&gt;</a>  <br />    0    <a href="/h/1.php">1</a>     <a href="/h/2.php">2</a>     <a href="/h/3.php">3</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3857238.php' class='boardlink'>Thread 3857238</a></span>
		<p>>>3857369
>Vince is still butthurt about WCW
Wouldn't you be? They damn near stole their fan base,... <a href='/wooo/res/3857238.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='tech' src='/static/images/board_icons/tech_icon_32.png' />
		<span class='byline'>Computers &amp; Technology - <a href='/tech/res/111902.php' class='boardlink'>Thread 111902</a></span>
		<p>>>111903
I use this as well and actually just downloaded an hour+ video with it last night.... <a href='/tech/res/111902.php' class='boardlink'>&#8629;</a></p></li>
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

