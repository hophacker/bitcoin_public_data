http://boards.420chan.org/cd/index.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Tue, 22 Jul 2014 10:03:26 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> Transgender Discussion - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/cd_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/cd_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/cd/index.php';
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
	 <div id="header"> <div id="board_logo"> <a href="/cd/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/cd_icon_64.png" alt="/cd/ Icon" /> <p class="board_title_block"> <span class="board_name">/cd/</span> <span class="board_title">Transgender Discussion</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
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
	 <!--  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/cd/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="cd" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />    <input type="hidden" name="name" />   <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>      <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div> <script type="text/javascript">set_anoninputs("postform")</script>  <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 3000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> 			  </ul> </div> <hr style="margin-bottom:2px;" /> 		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 <hr style="margin-top:2px;" />   <form id="delform" action="/cd/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="cd" />    <div id="cdthread375599"> <div class="thread_header"> <a id="375599"></a> <span class="filetitle">Name?</span>  <span class="inbetween"> by </span> <span class="postername">Frederick Pickway</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 19 Jul 2014 23:47:21 EST ID:u5QjDlNC</span></span>  <span class="reflink"> <a href="/cd/res/375599.php#i375599">No.375599</a> </span>    			 <!--  - Awesome Thread? <a href="/cd/taimaba.pl?board=cd&amp;task=vote&amp;thread=375599&amp;vote=0">No!</a> | <a href="/cd/taimaba.pl?board=cd&amp;task=vote&amp;thread=375599&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31313738363833353130')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('375599')" title="Report Thread 375599"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/cd/res/375599.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375599" data-thread="375599"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #39A645; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cdthread375599');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405828041337.jpg"> 1405828041337.jpg </a> -(<em>42682 B, 480x640</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcd31313738363833353130" target="_blank" href="/cd/src/1405828041337.jpg"> <img src="/cd/thumb/1405828041337s.jpg" alt="42682" class="thumb" /> </a>   			 <blockquote class="opcomment cd31313738363833353130">  <blockquote class = "unkfunc">&gt;TFW not sure what name to choose</blockquote>   </blockquote>   				 				  <span class="omittedposts">  18 posts and 4 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/cd/res/375599.php#375677" onclick="highlight(375677);">&gt;&gt;</a></td> <td class="reply" id="reply375677"> <a id="375677"></a> <div class="replyheader"> 									 <span class="commentpostername">Jenny Funningwater</span>  - <span class="idhighlight">Mon, 21 Jul 2014 16:36:21 EST ID:Frz7yddr</span> <span class="reflink">  <a href="/cd/res/375599.php#i375677">No.375677</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31313130393339333230')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375677', '375599')" title="Report Post 375677"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375677" data-thread="375599"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #20C312; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405974981249.jpg"> 1405974981249.jpg </a> -(<em>107195 B, 406x941</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/cd/src/1405974981249.jpg"> <img src="/cd/thumb/1405974981249s.jpg" alt="107195" class="thumb" /> </a>    <blockquote  class="cd31313130393339333230">  <a href = "/cd/res/375599.php#375673" onclick = "highlight(375673)">&gt;&gt;375673</a><br>r8 n h8<br><br>Year old pic, ignore shit eyeliner, shit eyebrows   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375599.php#375680" onclick="highlight(375680);">&gt;&gt;</a></td> <td class="reply" id="reply375680"> <a id="375680"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Sublingnetch</span>  - <span class="idhighlight">Mon, 21 Jul 2014 17:42:12 EST ID:xRpwdjPP</span> <span class="reflink">  <a href="/cd/res/375599.php#i375680">No.375680</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd32393134383234313232')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375680', '375599')" title="Report Post 375680"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375680" data-thread="375599"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #719C07; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd32393134383234313232">  <a href = "/cd/res/375599.php#375677" onclick = "highlight(375677)">&gt;&gt;375677</a><br>Lena   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375599.php#375688" onclick="highlight(375688);">&gt;&gt;</a></td> <td class="reply" id="reply375688"> <a id="375688"></a> <div class="replyheader"> 									 <span class="commentpostername">David Musslewater</span>  - <span class="idhighlight">Mon, 21 Jul 2014 21:36:28 EST ID:48Cp9UVU</span> <span class="reflink">  <a href="/cd/res/375599.php#i375688">No.375688</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd343033343639303932')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375688', '375599')" title="Report Post 375688"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375688" data-thread="375599"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #41ADFE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd343033343639303932">  <a href = "/cd/res/375599.php#375680" onclick = "highlight(375680)">&gt;&gt;375680</a><br>I like the L factor but I&#39;d go with Lexi   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375599.php#375690" onclick="highlight(375690);">&gt;&gt;</a></td> <td class="reply" id="reply375690"> <a id="375690"></a> <div class="replyheader"> 									 <span class="commentpostername">Lydia Fillerpatch</span>  - <span class="idhighlight">Mon, 21 Jul 2014 21:57:33 EST ID:Yxs8HMgr</span> <span class="reflink">  <a href="/cd/res/375599.php#i375690">No.375690</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31323233363035393735')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375690', '375599')" title="Report Post 375690"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375690" data-thread="375599"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #851F1A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31323233363035393735">  <a href = "/cd/res/375599.php#375688" onclick = "highlight(375688)">&gt;&gt;375688</a><br><br>That&#39;s a stripper&#39;s name.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375599.php#375701" onclick="highlight(375701);">&gt;&gt;</a></td> <td class="reply" id="reply375701"> <a id="375701"></a> <div class="replyheader"> 									 <span class="commentpostername">Molly Crallerlat</span>  - <span class="idhighlight">Tue, 22 Jul 2014 05:38:53 EST ID:OSdbW44F</span> <span class="reflink">  <a href="/cd/res/375599.php#i375701">No.375701</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31333733393732373530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375701', '375599')" title="Report Post 375701"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375701" data-thread="375599"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A63CD5; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31333733393732373530">  <a href = "/cd/res/375599.php#375677" onclick = "highlight(375677)">&gt;&gt;375677</a><br>Mikaela or Anne... But you probably don&#39;t live in the right country for those names to fit.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cdthread373622"> <div class="thread_header"> <a id="373622"></a> <span class="filetitle">FFS</span>  <span class="inbetween"> by </span> <span class="postername">Esther Drullyfield</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 14 Jun 2014 20:07:59 EST ID:HKDfj2Ko</span></span>  <span class="reflink"> <a href="/cd/res/373622.php#i373622">No.373622</a> </span>    			 <!--  - Awesome Thread? <a href="/cd/taimaba.pl?board=cd&amp;task=vote&amp;thread=373622&amp;vote=0">No!</a> | <a href="/cd/taimaba.pl?board=cd&amp;task=vote&amp;thread=373622&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd33333836333030323933')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('373622')" title="Report Thread 373622"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/cd/res/373622.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="373622" data-thread="373622"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #46CAF4; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cdthread373622');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1402790879496.png"> 1402790879496.png </a> -(<em>92694 B, 374x318</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcd33333836333030323933" target="_blank" href="/cd/src/1402790879496.png"> <img src="/cd/thumb/1402790879496s.jpg" alt="92694" class="thumb" /> </a>   			 <blockquote class="opcomment cd33333836333030323933">  Can we get a ffs thread going pwease? like, your experience, cost and all that stuff? I wanted to get mine done with Dr. O but now that he&#39;s retiring I don&#39;t really know where else to look.   </blockquote>   				 				  <span class="omittedposts">  39 posts and 12 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/cd/res/373622.php#374176" onclick="highlight(374176);">&gt;&gt;</a></td> <td class="reply" id="reply374176"> <a id="374176"></a> <div class="replyheader"> 									 <span class="commentpostername">Molly Bushshit</span>  - <span class="idhighlight">Sun, 22 Jun 2014 06:22:34 EST ID:Egmssw+p</span> <span class="reflink">  <a href="/cd/res/373622.php#i374176">No.374176</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd383430333937323930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('374176', '373622')" title="Report Post 374176"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="374176" data-thread="373622"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3617B1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd383430333937323930">  For those of you who have done consultations and scheduled FFS with one of the major surgeons, how long was the wait (a) before the consultation and (b) from the consult to surgery date?<br><br>I feel right at the edge of passing/ going part- or fulltime. I&#39;m sure I pass just fine, but mostly I just want to get all this shit over with. I want to get FFS in the next 6-10 months and want to know how far in advance I have to plan. It can&#39;t be as bad as the year-long SRS waitlist.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/373622.php#375651" onclick="highlight(375651);">&gt;&gt;</a></td> <td class="reply" id="reply375651"> <a id="375651"></a> <div class="replyheader"> 									 <span class="commentpostername">Samuel Blackhall</span>  - <span class="idhighlight">Mon, 21 Jul 2014 01:28:43 EST ID:cweS3Ydm</span> <span class="reflink">  <a href="/cd/res/373622.php#i375651">No.375651</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd343038373935353135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375651', '373622')" title="Report Post 375651"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375651" data-thread="373622"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A26944; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd343038373935353135">  <a href = "/cd/res/373622.php#373752" onclick = "highlight(373752)">&gt;&gt;373752</a><br><br><blockquote class = "unkfunc">&gt; he currently had four surgeons interested in purchasing the practice. He proceeded to list each of them off to me individually, and their pros and cons. <br></blockquote><br>Do you remember the names??<br><br><blockquote class = "unkfunc">&gt; He only thought one of them was really serious about purchasing the practice, and he said that in his opinion this surgeon was even more skilled than him.<br></blockquote><br>Especially this one?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/373622.php#375672" onclick="highlight(375672);">&gt;&gt;</a></td> <td class="reply" id="reply375672"> <a id="375672"></a> <div class="replyheader"> 									 <span class="commentpostername">Sidney Pudgestitch</span>  - <span class="idhighlight">Mon, 21 Jul 2014 11:47:04 EST ID:RXL90kqy</span> <span class="reflink">  <a href="/cd/res/373622.php#i375672">No.375672</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd33353732363731333434')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375672', '373622')" title="Report Post 375672"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375672" data-thread="373622"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #ABE4DC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd33353732363731333434">  <a href = "/cd/res/373622.php#373646" onclick = "highlight(373646)">&gt;&gt;373646</a><br><br>You can scan just the part on picking a surgeon, no need to put online the entire book   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/373622.php#375698" onclick="highlight(375698);">&gt;&gt;</a></td> <td class="reply" id="reply375698"> <a id="375698"></a> <div class="replyheader"> 									 <span class="commentpostername">Priscilla Muttingwudge</span>  - <span class="idhighlight">Tue, 22 Jul 2014 02:05:16 EST ID:ZKv4UdOq</span> <span class="reflink">  <a href="/cd/res/373622.php#i375698">No.375698</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31313431353938353233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375698', '373622')" title="Report Post 375698"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375698" data-thread="373622"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A2FAF1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31313431353938353233">  <a href = "/cd/res/373622.php#374176" onclick = "highlight(374176)">&gt;&gt;374176</a><br><br>I just had a consultation with Zukowski this past Friday. I made that appointment about four weeks beforehand, and it seems like that&#39;s not a problem at all (although he was fairly busy that day when I was in the office). In terms of available surgery dates, he said that there were a few openings in September and then October would be easy.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/373622.php#375700" onclick="highlight(375700);">&gt;&gt;</a></td> <td class="reply" id="reply375700"> <a id="375700"></a> <div class="replyheader"> 									 <span class="commentpostername">Ernest Worthingford</span>  - <span class="idhighlight">Tue, 22 Jul 2014 02:43:36 EST ID:kIu3U55F</span> <span class="reflink">  <a href="/cd/res/373622.php#i375700">No.375700</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd33333233343232353536')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375700', '373622')" title="Report Post 375700"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375700" data-thread="373622"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #26781B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd33333233343232353536">  <a href = "/cd/res/373622.php#375698" onclick = "highlight(375698)">&gt;&gt;375698</a><br>Thanks. I am considering him over others at this point, and that helps.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cdthread375569"> <div class="thread_header"> <a id="375569"></a> <span class="filetitle">Post Music</span>  <span class="inbetween"> by </span> <span class="postername">Phoebe Nungersire</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 19 Jul 2014 03:55:40 EST ID:o5fBRnMt</span></span>  <span class="reflink"> <a href="/cd/res/375569.php#i375569">No.375569</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd333933373131313734')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('375569')" title="Report Thread 375569"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/cd/res/375569.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375569" data-thread="375569"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #07184F; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cdthread375569');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405756540862.jpg"> 1405756540862.jpg </a> -(<em>220540 B, 1026x769</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcd333933373131313734" target="_blank" href="/cd/src/1405756540862.jpg"> <img src="/cd/thumb/1405756540862s.jpg" alt="220540" class="thumb" /> </a>   			 <blockquote class="opcomment cd333933373131313734">  <a href="http://www.youtube.com/watch?v=huavJMGUbiI" rel="nofollow" target="_blank">http://www.youtube.com/watch?v=huavJMGUbiI</a><br><br>This song is very awesome. <br><br>It reminds of the hypocrisy and dishonesty that people portray when it comes to their sexuality. From the neighbor who is a swinger to the closeted Congressman.   </blockquote>   				 				  <span class="omittedposts">  5 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/cd/res/375569.php#375622" onclick="highlight(375622);">&gt;&gt;</a></td> <td class="reply" id="reply375622"> <a id="375622"></a> <div class="replyheader"> 									 <span class="commentpostername">Thomas Clongerledge</span>  - <span class="idhighlight">Sun, 20 Jul 2014 16:59:53 EST ID:B7wW6ju+</span> <span class="reflink">  <a href="/cd/res/375569.php#i375622">No.375622</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31313439323132383434')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375622', '375569')" title="Report Post 375622"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375622" data-thread="375569"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F01185; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31313439323132383434">  The Bilinda Butchers - Tanka (ft. Lamp)<br><a href="https://www.youtube.com/watch?v=rQiMlohRy6A" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=rQiMlohRy6A</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375569.php#375661" onclick="highlight(375661);">&gt;&gt;</a></td> <td class="reply" id="reply375661"> <a id="375661"></a> <div class="replyheader"> 									 <span class="commentpostername">Ian Chuckleford</span>  - <span class="idhighlight">Mon, 21 Jul 2014 06:35:01 EST ID:vPdTM5ZU</span> <span class="reflink">  <a href="/cd/res/375569.php#i375661">No.375661</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31353931343635373233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375661', '375569')" title="Report Post 375661"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375661" data-thread="375569"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3AB99D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405938901979.jpg"> 1405938901979.jpg </a> -(<em>246686 B, 486x710</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/cd/src/1405938901979.jpg"> <img src="/cd/thumb/1405938901979s.jpg" alt="246686" class="thumb" /> </a>    <blockquote  class="cd31353931343635373233">  Oh great a /mu/ thread here on my /cd/.<br><br><a href="https://www.youtube.com/watch?v=g2NCiNKdCYU" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=g2NCiNKdCYU</a><br><br>Watermelon in easter hay written by Frank Zappa, performed by his son Dweezil.<br><br>I really love the nostalic/melancholic/sentimental vibe this tune carries.<br>Brings back a lot of bitter-sweet memories from the long forgotten past.<br><br>This tune makes me almost cry, whenever i hear it.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375569.php#375679" onclick="highlight(375679);">&gt;&gt;</a></td> <td class="reply" id="reply375679"> <a id="375679"></a> <div class="replyheader"> 									 <span class="commentpostername">Betsy Gockleforth</span>  - <span class="idhighlight">Mon, 21 Jul 2014 17:10:19 EST ID:OBV2Ttmh</span> <span class="reflink">  <a href="/cd/res/375569.php#i375679">No.375679</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31303831363937313136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375679', '375569')" title="Report Post 375679"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375679" data-thread="375569"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9AE890; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31303831363937313136">  mostly this song lately<br><a href="https://www.youtube.com/watch?v=sjkWlhSzy2M" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=sjkWlhSzy2M</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375569.php#375689" onclick="highlight(375689);">&gt;&gt;</a></td> <td class="reply" id="reply375689"> <a id="375689"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Tillingwater</span>  - <span class="idhighlight">Mon, 21 Jul 2014 21:47:05 EST ID:8+hSRloy</span> <span class="reflink">  <a href="/cd/res/375569.php#i375689">No.375689</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd343139303433323535')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375689', '375569')" title="Report Post 375689"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375689" data-thread="375569"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1F9F35; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd343139303433323535">  Chromatics - Kill For Love (song)<br><a href="https://www.youtube.com/watch?v=c0mxXrHowHQ" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=c0mxXrHowHQ</a><br><br>Listened to this whole album a lot immediately before I actually started transition and somehow it tends to dredge up a ton of emotions from that time. Some good, mostly sad.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375569.php#375699" onclick="highlight(375699);">&gt;&gt;</a></td> <td class="reply" id="reply375699"> <a id="375699"></a> <div class="replyheader"> 									 <span class="commentpostername">Hedda Crashridge</span>  - <span class="idhighlight">Tue, 22 Jul 2014 02:20:54 EST ID:12rGqHp1</span> <span class="reflink">  <a href="/cd/res/375569.php#i375699">No.375699</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31363539313833363631')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375699', '375569')" title="Report Post 375699"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375699" data-thread="375569"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9DD340; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1406010054202.jpg"> 1406010054202.jpg </a> -(<em>111567 B, 500x334</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/cd/src/1406010054202.jpg"> <img src="/cd/thumb/1406010054202s.jpg" alt="111567" class="thumb" /> </a>    <blockquote  class="cd31363539313833363631">  I always relate this song to my gender issues and it&#39;s one of my favorite songs for that reason, besides Coheed being incredible:<br><br><a href="https://www.youtube.com/watch?v=ZVVZ5RgIc2M" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=ZVVZ5RgIc2M</a>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cdthread375696"> <div class="thread_header"> <a id="375696"></a> <span class="filetitle">Laser experiences?</span>  <span class="inbetween"> by </span> <span class="postername">Jarvis Gurryfat</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 21 Jul 2014 23:19:17 EST ID:SAndXRte</span></span>  <span class="reflink"> <a href="/cd/res/375696.php#i375696">No.375696</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd33303937393337303238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('375696')" title="Report Thread 375696"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/cd/res/375696.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375696" data-thread="375696"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CC6AD6; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cdthread375696');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405999157599.png"> 1405999157599.png </a> -(<em>58230 B, 900x385</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcd33303937393337303238" target="_blank" href="/cd/src/1405999157599.png"> <img src="/cd/thumb/1405999157599s.jpg" alt="58230" class="thumb" /> </a>   			 <blockquote class="opcomment cd33303937393337303238">  I&#39;ve been twice, and they make me wait a month between visits because it takes 2 weeks I guess for the hair to start falling out and they want to make sure it&#39;s all gone.<br><br>it hurts so bad<br><br>How many of these visits is it gonna take?  I&#39;m thinking it&#39;s gonna be like literal years.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/cd/res/375696.php#375697" onclick="highlight(375697);">&gt;&gt;</a></td> <td class="reply" id="reply375697"> <a id="375697"></a> <div class="replyheader"> 									 <span class="commentpostername">John Hanningshit</span>  - <span class="idhighlight">Mon, 21 Jul 2014 23:51:32 EST ID:rift3TwE</span> <span class="reflink">  <a href="/cd/res/375696.php#i375697">No.375697</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd343130343837363337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375697', '375696')" title="Report Post 375697"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375697" data-thread="375696"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BC8BD4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd343130343837363337">  I was promised &quot;Really good results&quot; due to my pale skin and dark hair. After six visits, six months, and about $1800, I&#39;ve still got a few patches that need to be shaved daily if I want to pass. I still have to shave everywhere- because there are still a lot of fine hairs that the laser turned blonde. Fairly unnoticeable though.<br><br>What most folks do is laser off the bulk of it and do electrolysis for what&#39;s left.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cdthread375682"> <div class="thread_header"> <a id="375682"></a> <span class="filetitle">Cam Whoring</span>  <span class="inbetween"> by </span> <span class="postername">Eugene Bripperwill</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 21 Jul 2014 19:25:50 EST ID:RRC8n5oT</span></span>  <span class="reflink"> <a href="/cd/res/375682.php#i375682">No.375682</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31313832303432373237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('375682')" title="Report Thread 375682"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/cd/res/375682.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375682" data-thread="375682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #24118A; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cdthread375682');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405985150560.jpg"> 1405985150560.jpg </a> -(<em>167186 B, 612x816</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcd31313832303432373237" target="_blank" href="/cd/src/1405985150560.jpg"> <img src="/cd/thumb/1405985150560s.jpg" alt="167186" class="thumb" /> </a>   			 <blockquote class="opcomment cd31313832303432373237">  So I&#39;m a pretty passable, attractive(I think) trans girl. I&#39;ve been on HRT 3 years now, I just lost my pretty good full time job where I was riding to work with my girlfriend who had the same schedule, I have no car and live in the suburbs so even though I have experience my job prospects are shit and I&#39;m tired of subsisting.<br><br>I&#39;ve been thinking about getting into porn since before I lost my job, my girlfriend is fine with it, and it&#39;s come to my attention that camming can be pretty lucrative for some. I&#39;m looking for advice, comments, and resources on getting started.<br><br>What are the good sites to cam on? Can anyone recommend examples of people who are successful and what they do, links to videos so I can learn, or give me any tips?  I&#39;m aware my image will be out there forever, I don&#39;t really care, I just want money and an outlet for my slutiness.   </blockquote>   				 				  <span class="omittedposts">   3 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/cd/res/375682.php#375686" onclick="highlight(375686);">&gt;&gt;</a></td> <td class="reply" id="reply375686"> <a id="375686"></a> <div class="replyheader"> 									 <span class="commentpostername">Eugene Bripperwill</span>  - <span class="idhighlight">Mon, 21 Jul 2014 19:59:14 EST ID:RRC8n5oT</span> <span class="reflink">  <a href="/cd/res/375682.php#i375686">No.375686</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31313832303432373237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375686', '375682')" title="Report Post 375686"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375686" data-thread="375682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #189097; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31313832303432373237">  <a href = "/cd/res/375682.php#375685" onclick = "highlight(375685)">&gt;&gt;375685</a><br>I live in Texas, it&#39;s not.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375682.php#375687" onclick="highlight(375687);">&gt;&gt;</a></td> <td class="reply" id="reply375687"> <a id="375687"></a> <div class="replyheader"> 									 <span class="commentpostername">David Musslewater</span>  - <span class="idhighlight">Mon, 21 Jul 2014 21:35:54 EST ID:48Cp9UVU</span> <span class="reflink">  <a href="/cd/res/375682.php#i375687">No.375687</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd343033343639303932')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375687', '375682')" title="Report Post 375687"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375687" data-thread="375682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B21251; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd343033343639303932">  get a job homo   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375682.php#375691" onclick="highlight(375691);">&gt;&gt;</a></td> <td class="reply" id="reply375691"> <a id="375691"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Tillingwater</span>  - <span class="idhighlight">Mon, 21 Jul 2014 21:57:46 EST ID:8+hSRloy</span> <span class="reflink">  <a href="/cd/res/375682.php#i375691">No.375691</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd343139303433323535')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375691', '375682')" title="Report Post 375691"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375691" data-thread="375682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #77388E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd343139303433323535">  <blockquote class = "unkfunc">&gt;&gt;or give me any tips?<br></blockquote><br>Only one: You can be pretty and passy as hell, but if there are certain things you avoid (say because they&#39;re dysphoria inducing or else wise), then you&#39;re going to make less money than an unpassable cross dresser who is happy and willing. The people who tend to make the most money are unsurprisingly the ones willing to do the most stuff. <br><br>Also let me echo the warning that your pictures/videos will circulate the internet forever afterwards and probably pop up anytime someone Google image searches you. Most of the people I know who&#39;ve gone this route eventually came to regret it.<br><br>Good luck though.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375682.php#375694" onclick="highlight(375694);">&gt;&gt;</a></td> <td class="reply" id="reply375694"> <a id="375694"></a> <div class="replyheader"> 									 <span class="commentpostername">Graham Habberpine</span>  - <span class="idhighlight">Mon, 21 Jul 2014 22:30:30 EST ID:RRC8n5oT</span> <span class="reflink">  <a href="/cd/res/375682.php#i375694">No.375694</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31313832303432373237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375694', '375682')" title="Report Post 375694"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375694" data-thread="375682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2074E9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31313832303432373237">  <a href = "/cd/res/375682.php#375687" onclick = "highlight(375687)">&gt;&gt;375687</a><br>I am, I&#39;ve had interviews and have more interviews coming up, but they are all making less than I was. I want more income.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375682.php#375695" onclick="highlight(375695);">&gt;&gt;</a></td> <td class="reply" id="reply375695"> <a id="375695"></a> <div class="replyheader"> 									 <span class="commentpostername">Simon Poppertere</span>  - <span class="idhighlight">Mon, 21 Jul 2014 23:04:20 EST ID:1cvPJkwW</span> <span class="reflink">  <a href="/cd/res/375682.php#i375695">No.375695</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31353839383936383336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375695', '375682')" title="Report Post 375695"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375695" data-thread="375682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #298052; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31353839383936383336">  <a href = "/cd/res/375682.php" onclick = "highlight(375682)">&gt;&gt;375682</a><br>I&#39;m friends with some of the biggest TS porn stars on the net. Big porno is a dying industry and the money for actresses is really really shit unless they have the experience to successfully produce and market their own product. You&#39;d be much better off becoming an escort or camgirl.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cdthread375632"> <div class="thread_header"> <a id="375632"></a> <span class="filetitle">Electrolysis for Eyebrows and browlift</span>  <span class="inbetween"> by </span> <span class="postername">Polly Warrycocke</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 20 Jul 2014 21:22:44 EST ID:k3VSKhLw</span></span>  <span class="reflink"> <a href="/cd/res/375632.php#i375632">No.375632</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd32383530363333313638')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('375632')" title="Report Thread 375632"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/cd/res/375632.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375632" data-thread="375632"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B760DF; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cdthread375632');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405905764893.jpg"> 1405905764893.jpg </a> -(<em>72057 B, 364x531</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcd32383530363333313638" target="_blank" href="/cd/src/1405905764893.jpg"> <img src="/cd/thumb/1405905764893s.jpg" alt="72057" class="thumb" /> </a>   			 <blockquote class="opcomment cd32383530363333313638">  Iv&#39;e been on hormones for 2.3 or so years and I planning to get electrolysis for my eye brows. Iv&#39;e tweezed them and plucked them and they have still grown back the same thickness and cycle this whole time on HRT. I was wondering If getting electrolysis for my eye brows would affect the results of one day getting a browlift? Because It does for bottom surgery so I am just trying to figure out what to do first cause I&#39;m paranoid I&#39;m sure it won&#39;t. Just took a side view of my face for you to judge. What FFS Procedures do I need done? I feel like a brow lift is all I need. Don&#39;t my me I just woke up in that pic lol.   </blockquote>   				 				  <span class="omittedposts">  8 posts and 2 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/cd/res/375632.php#375656" onclick="highlight(375656);">&gt;&gt;</a></td> <td class="reply" id="reply375656"> <a id="375656"></a> <div class="replyheader"> 									 <span class="commentpostername">Polly Warrycocke</span>  - <span class="idhighlight">Mon, 21 Jul 2014 04:14:41 EST ID:k3VSKhLw</span> <span class="reflink">  <a href="/cd/res/375632.php#i375656">No.375656</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd32383530363333313638')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375656', '375632')" title="Report Post 375656"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375656" data-thread="375632"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A8FAFA; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd32383530363333313638">  <a href = "/cd/res/375632.php#375655" onclick = "highlight(375655)">&gt;&gt;375655</a><br>Nah I&#39;m already olive skin color, I don&#39;t want darker skin I like being white and pale.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375632.php#375674" onclick="highlight(375674);">&gt;&gt;</a></td> <td class="reply" id="reply375674"> <a id="375674"></a> <div class="replyheader"> 									 <span class="commentpostername">Nicholas Gomblepon</span>  - <span class="idhighlight">Mon, 21 Jul 2014 13:39:28 EST ID:vztj/lKp</span> <span class="reflink">  <a href="/cd/res/375632.php#i375674">No.375674</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31323436303833383838')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375674', '375632')" title="Report Post 375674"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375674" data-thread="375632"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A8D88F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31323436303833383838">  <a href = "/cd/res/375632.php#375633" onclick = "highlight(375633)">&gt;&gt;375633</a><br>While i was at E3k, the techs were complaining about the other woman who was there at the time having had facial reconstruction before finishing electro.<br>I guess it had resulted in hair growth being hard to reach and growing in weird/inconsistent directions in many cases?<br><br>You should probably wait on eyebrow electro tho since forehead reconstruction will alter their appearance and it seems like it would be better to take that into account during hair removal.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375632.php#375675" onclick="highlight(375675);">&gt;&gt;</a></td> <td class="reply" id="reply375675"> <a id="375675"></a> <div class="replyheader"> 									 <span class="commentpostername">Angus Cerringwill</span>  - <span class="idhighlight">Mon, 21 Jul 2014 14:11:03 EST ID:PH8WmaHv</span> <span class="reflink">  <a href="/cd/res/375632.php#i375675">No.375675</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd33303937303832383932')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375675', '375632')" title="Report Post 375675"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375675" data-thread="375632"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3608BF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd33303937303832383932">  <a href = "/cd/res/375632.php#375656" onclick = "highlight(375656)">&gt;&gt;375656</a><br>olive is not white and pale. You are white and pale, not olive.<br><br>Lol...   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375632.php#375692" onclick="highlight(375692);">&gt;&gt;</a></td> <td class="reply" id="reply375692"> <a id="375692"></a> <div class="replyheader"> 									 <span class="commentpostername">Martin Smallshit</span>  - <span class="idhighlight">Mon, 21 Jul 2014 21:59:03 EST ID:k3VSKhLw</span> <span class="reflink">  <a href="/cd/res/375632.php#i375692">No.375692</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd32383530363333313638')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375692', '375632')" title="Report Post 375692"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375692" data-thread="375632"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D10CCC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd32383530363333313638">  <a href = "/cd/res/375632.php#375675" onclick = "highlight(375675)">&gt;&gt;375675</a><br>My skin looks super white int hose pics cause of the camera&#39;s flash   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375632.php#375693" onclick="highlight(375693);">&gt;&gt;</a></td> <td class="reply" id="reply375693"> <a id="375693"></a> <div class="replyheader"> 									 <span class="commentpostername">Martin Smallshit</span>  - <span class="idhighlight">Mon, 21 Jul 2014 21:59:58 EST ID:k3VSKhLw</span> <span class="reflink">  <a href="/cd/res/375632.php#i375693">No.375693</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd32383530363333313638')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375693', '375632')" title="Report Post 375693"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375693" data-thread="375632"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B392C2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd32383530363333313638">  <a href = "/cd/res/375632.php#375692" onclick = "highlight(375692)">&gt;&gt;375692</a><br>i mean some people say im white and some people say im olive its really weird, it like depends what kind of light im in i guess.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cdthread375141"> <div class="thread_header"> <a id="375141"></a> <span class="filetitle">What is your makeup routine??</span>  <span class="inbetween"> by </span> <span class="postername">Matilda Chammledale</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 11 Jul 2014 05:21:15 EST ID:4KCgA8zh</span></span>  <span class="reflink"> <a href="/cd/res/375141.php#i375141">No.375141</a> </span>    			 <!--  - Awesome Thread? <a href="/cd/taimaba.pl?board=cd&amp;task=vote&amp;thread=375141&amp;vote=0">No!</a> | <a href="/cd/taimaba.pl?board=cd&amp;task=vote&amp;thread=375141&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31383536393436333937')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('375141')" title="Report Thread 375141"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/cd/res/375141.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375141" data-thread="375141"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3D3937; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cdthread375141');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405070475230.png"> 1405070475230.png </a> -(<em>993211 B, 600x800</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcd31383536393436333937" target="_blank" href="/cd/src/1405070475230.png"> <img src="/cd/thumb/1405070475230s.jpg" alt="993211" class="thumb" /> </a>   			 <blockquote class="opcomment cd31383536393436333937">  Hey Ladies!<br><br>Post your makeup routine!<br><br>i consider this my daily makeup routine but i sometimes adjust it or leave things out depending on the day, during summer i usually avoid liquid foundation in favour for Australis pressed powder<br><br><blockquote class = "unkfunc">&gt;put on rimmel london honey beige foundation<br>&gt;put on honey beige concealer<br>&gt;put on Calvin Klein peach blush (it was discounted..)<br>&gt;put on lancome ebony eyeliner on bottom lid<br>&gt;put on maybelline collosall volume mascara<br>&gt;put on loreal paris glam shine Lolita/random lipstick<br></blockquote><br>i LOVE my lancome eyeliner, like its the best thing i have ever purchased in my whole life, if only it wasnt so expensive!<br><br>So whats your routine?   </blockquote>   				 				  <span class="omittedposts">  18 posts and 4 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/cd/res/375141.php#375631" onclick="highlight(375631);">&gt;&gt;</a></td> <td class="reply" id="reply375631"> <a id="375631"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Tillingbanks</span>  - <span class="idhighlight">Sun, 20 Jul 2014 20:35:00 EST ID:FdWXsgL3</span> <span class="reflink">  <a href="/cd/res/375141.php#i375631">No.375631</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd33363334303730333432')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375631', '375141')" title="Report Post 375631"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375631" data-thread="375141"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C705AE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd33363334303730333432">  <a href = "/cd/res/375141.php#375615" onclick = "highlight(375615)">&gt;&gt;375615</a><br>What, no contouring?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375141.php#375664" onclick="highlight(375664);">&gt;&gt;</a></td> <td class="reply" id="reply375664"> <a id="375664"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Tootbanks</span>  - <span class="idhighlight">Mon, 21 Jul 2014 08:23:20 EST ID:4KCgA8zh</span> <span class="reflink">  <a href="/cd/res/375141.php#i375664">No.375664</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31383536393436333937')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375664', '375141')" title="Report Post 375664"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375664" data-thread="375141"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F5E533; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31383536393436333937">  <a href = "/cd/res/375141.php#375615" onclick = "highlight(375615)">&gt;&gt;375615</a><br><br>Wow i love your routine! i might have to try it out sometime! :)   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375141.php#375666" onclick="highlight(375666);">&gt;&gt;</a></td> <td class="reply" id="reply375666"> <a id="375666"></a> <div class="replyheader"> 									 <span class="commentpostername">Hedda Snodworth</span>  - <span class="idhighlight">Mon, 21 Jul 2014 09:33:21 EST ID:MwYYOKUh</span> <span class="reflink">  <a href="/cd/res/375141.php#i375666">No.375666</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31333535343237363336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375666', '375141')" title="Report Post 375666"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375666" data-thread="375141"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #20A0E6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31333535343237363336">  <a href = "/cd/res/375141.php#375631" onclick = "highlight(375631)">&gt;&gt;375631</a><br>Don&#39;t need it; the blush adds enough definition, and the foundation is light enough to not hide the natural contours of the face.<br><br>You do kinda have to have a naturally feminine face for that routine to work though. Nothing you need to &quot;downplay&quot;.<br><br><a href = "/cd/res/375141.php#375664" onclick = "highlight(375664)">&gt;&gt;375664</a><br>It does work wonders, and I&#39;m not kidding when I mention people complimenting.<br><br>I&#39;d give examples of the stuff people have said and done, but maybe that wouldn&#39;t be very nice of me? Considering a lot of people here struggle with their looks.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375141.php#375669" onclick="highlight(375669);">&gt;&gt;</a></td> <td class="reply" id="reply375669"> <a id="375669"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Wupperstock</span>  - <span class="idhighlight">Mon, 21 Jul 2014 10:42:36 EST ID:p4FsVak+</span> <span class="reflink">  <a href="/cd/res/375141.php#i375669">No.375669</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31323634313839393635')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375669', '375141')" title="Report Post 375669"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375669" data-thread="375141"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CE8841; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31323634313839393635">  <a href = "/cd/res/375141.php#375615" onclick = "highlight(375615)">&gt;&gt;375615</a><br>Hey that&#39;s kinda close to mine! <br><a href = "/cd/res/375141.php#375200" onclick = "highlight(375200)">&gt;&gt;375200</a><br>That makes me feel better lol. It really does look nice I think, maybe if I&#39;d go out more often ha. Def the thick, dark and defined eyebrows, those alone are probably like one of the biggest things I can do, or has the most impact, unless I have like a terrible beard shadow then maybe there&#39;d be more impact getting rid of that lol. I have gotten compliments on my eyebrows variously before. Then a little color in the lips and yeahhh. Mascara is good too. My skin used to be pretty good but it&#39;s often kinda messed up now? So foundation and stuffs. My mom said I looked natural after saying my eyebrows are very dark or something which seems funny cuz my skin so bad like did you not see before? =P And I need to double check how/where exactly to apply blush because I always feel like it&#39;s &quot;off&quot; when I do it. I just don&#39;t and end up looking like vampire movie white skin person a little lol which is kindaa cool too but yeah lol.<br><br>So like what do y&#39;all do to keep your skin good? haha I see <a href = "/cd/res/375141.php#375598" onclick = "highlight(375598)">&gt;&gt;375598</a> like only does skin stuff. I&#39;m lazy so =) Right now I use like olive oil to shave and take off make up, I was using sunflower and sometimes grape seed oil before when I thought my skin was doing better lol. Possibly had a better dosage going then too. Also the razors I just got suck and aren&#39;t helping cuz running it over face multiple times in multiple directions, gonna have to stop that lol. Razor recommendations? Should I&#39;ve started a new thread?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375141.php#375678" onclick="highlight(375678);">&gt;&gt;</a></td> <td class="reply" id="reply375678"> <a id="375678"></a> <div class="replyheader"> 									 <span class="commentpostername">Betsy Gockleforth</span>  - <span class="idhighlight">Mon, 21 Jul 2014 17:07:56 EST ID:OBV2Ttmh</span> <span class="reflink">  <a href="/cd/res/375141.php#i375678">No.375678</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31303831363937313136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375678', '375141')" title="Report Post 375678"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375678" data-thread="375141"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2D5FF6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405976876059.jpg"> 1405976876059.jpg </a> -(<em>619412 B, 1764x1087</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/cd/src/1405976876059.jpg"> <img src="/cd/thumb/1405976876059s.jpg" alt="619412" class="thumb" /> </a>    <blockquote  class="cd31303831363937313136">  <a href = "/cd/res/375141.php" onclick = "highlight(375141)">&gt;&gt;375141</a><br><br><blockquote class = "unkfunc">&gt;Spritz face with Rosewater Spray from Mario Badescu<br>&gt;Peter Thomas Roth Moisturizer, Babyskin Primer<br>&gt;NARS Radiant Concealer<br>&gt;YSL Le Teint Touche Éclat Foundation<br>&gt;Watts Up! Cream Highlight from Benefit(?)<br>&gt;Brigitte Blush<br>&gt;MAC Boldly Bare Lip Pencil w/ Bobbi Brown&#39;s &quot;Brownie&quot; Lipstick<br>&gt;Hourglass Ambient Lighting Palette for setting/highlighting<br>&gt;Urban Decay Naked Palette 2 for eyes<br>&gt;Dollywink + Maybelline Lash Stiletto Black Eyeliner<br>&gt;Makeup Forever Smoky Extravagant Mascara<br>&gt;Dollywink #4 &amp; Dollywink #10 eyelashes<br>&gt;Anastasia Brow Gel</blockquote>  <div class="abbrev"> Comment too long. Click <a href="/cd/res/375141.php#375678">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cdthread375245"> <div class="thread_header"> <a id="375245"></a> <span class="filetitle">women</span>  <span class="inbetween"> by </span> <span class="postername">Sophie Blatherwell</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 12 Jul 2014 07:00:51 EST ID:Y4KRIDtv</span></span>  <span class="reflink"> <a href="/cd/res/375245.php#i375245">No.375245</a> </span>    			 <!--  - Awesome Thread? <a href="/cd/taimaba.pl?board=cd&amp;task=vote&amp;thread=375245&amp;vote=0">No!</a> | <a href="/cd/taimaba.pl?board=cd&amp;task=vote&amp;thread=375245&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31343931343430343939')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('375245')" title="Report Thread 375245"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/cd/res/375245.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375245" data-thread="375245"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1D267A; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cdthread375245');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405162851311.jpg"> 1405162851311.jpg </a> -(<em>4735 B, 167x200</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcd31343931343430343939" target="_blank" href="/cd/src/1405162851311.jpg"> <img src="/cd/src/1405162851311.jpg" alt="4735" class="thumb" /> </a>   			 <blockquote class="opcomment cd31343931343430343939">  where can i find women like this?   </blockquote>   				 				  <span class="omittedposts">  15 posts and 12 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/cd/res/375245.php#375638" onclick="highlight(375638);">&gt;&gt;</a></td> <td class="reply" id="reply375638"> <a id="375638"></a> <div class="replyheader"> 									 <span class="commentpostername">Hamilton Derryhood</span>  - <span class="idhighlight">Sun, 20 Jul 2014 23:04:33 EST ID:F6s37i7Z</span> <span class="reflink">  <a href="/cd/res/375245.php#i375638">No.375638</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd33343738323330323335')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375638', '375245')" title="Report Post 375638"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375638" data-thread="375245"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B5EB71; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405911873435.jpg"> 1405911873435.jpg </a> -(<em>21971 B, 323x450</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/cd/src/1405911873435.jpg"> <img src="/cd/thumb/1405911873435s.jpg" alt="21971" class="thumb" /> </a>    <blockquote  class="cd33343738323330323335">  Easiest place on earth to find a trans g/f is the Philippines, as transpinays/ladyboys (what they call themselves) are literally everywhere. Go to Cebu and every second girl on the street is prob a ladyboy. Same with Turkey. Bonus is all the locals are transphobic douchebags so no matter what you look like you are already top tier dating material.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375245.php#375642" onclick="highlight(375642);">&gt;&gt;</a></td> <td class="reply" id="reply375642"> <a id="375642"></a> <div class="replyheader"> 									 <span class="commentpostername">William Fillyham</span>  - <span class="idhighlight">Sun, 20 Jul 2014 23:41:01 EST ID:MbO22xxY</span> <span class="reflink">  <a href="/cd/res/375245.php#i375642">No.375642</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd32373934363738343334')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375642', '375245')" title="Report Post 375642"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375642" data-thread="375245"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4B1680; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd32373934363738343334">  <a href = "/cd/res/375245.php#375638" onclick = "highlight(375638)">&gt;&gt;375638</a><br>Ya i have some pinoy trans friends.  They used to bug me abou coming over so they could hook me up with their friends.  And yes they are better looking prehrt than 80% of western trannies and they are all straight   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375245.php#375653" onclick="highlight(375653);">&gt;&gt;</a></td> <td class="reply" id="reply375653"> <a id="375653"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Murdspear</span>  - <span class="idhighlight">Mon, 21 Jul 2014 01:47:19 EST ID:o5fBRnMt</span> <span class="reflink">  <a href="/cd/res/375245.php#i375653">No.375653</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd333933373131313734')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375653', '375245')" title="Report Post 375653"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375653" data-thread="375245"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #77CE25; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd333933373131313734">  <a href = "/cd/res/375245.php#375642" onclick = "highlight(375642)">&gt;&gt;375642</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375245.php#375671" onclick="highlight(375671);">&gt;&gt;</a></td> <td class="reply" id="reply375671"> <a id="375671"></a> <div class="replyheader"> 									 <span class="commentpostername">Barnaby Pucklecocke</span>  - <span class="idhighlight">Mon, 21 Jul 2014 11:34:31 EST ID:+n//iUPS</span> <span class="reflink">  <a href="/cd/res/375245.php#i375671">No.375671</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31343931343339383031')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375671', '375245')" title="Report Post 375671"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375671" data-thread="375245"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2138EF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31343931343339383031">  <a href = "/cd/res/375245.php#375638" onclick = "highlight(375638)">&gt;&gt;375638</a><br><blockquote class = "unkfunc">&gt; Same with Turkey. <br></blockquote>fug <img src="//cdn.420chan.org/emoticons/ddp.png">   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375245.php#375676" onclick="highlight(375676);">&gt;&gt;</a></td> <td class="reply" id="reply375676"> <a id="375676"></a> <div class="replyheader"> 									 <span class="commentpostername">Barnaby Pucklecocke</span>  - <span class="idhighlight">Mon, 21 Jul 2014 16:13:31 EST ID:+n//iUPS</span> <span class="reflink">  <a href="/cd/res/375245.php#i375676">No.375676</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31343931343339383031')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375676', '375245')" title="Report Post 375676"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375676" data-thread="375245"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8A6348; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31343931343339383031">  rate me gf<br><a href="http://www.youtube.com/watch?v=RaPkx5JyhKA" rel="nofollow" target="_blank">http://www.youtube.com/watch?v=RaPkx5JyhKA</a>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cdthread375534"> <div class="thread_header"> <a id="375534"></a> <span class="filetitle">Hair</span>  <span class="inbetween"> by </span> <span class="postername">Simon Sivingforth</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 18 Jul 2014 09:58:43 EST ID:o5fBRnMt</span></span>  <span class="reflink"> <a href="/cd/res/375534.php#i375534">No.375534</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd333933373131313734')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('375534')" title="Report Thread 375534"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/cd/res/375534.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375534" data-thread="375534"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0B77BA; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cdthread375534');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405691923908.jpg"> 1405691923908.jpg </a> -(<em>56137 B, 500x679</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcd333933373131313734" target="_blank" href="/cd/src/1405691923908.jpg"> <img src="/cd/thumb/1405691923908s.jpg" alt="56137" class="thumb" /> </a>   			 <blockquote class="opcomment cd333933373131313734">  So I&#39;m thinking about taking the plunge into transition, since I&#39;m pretty positive that I don&#39;t want kids and I won&#39;t be too much of a hun. <br><br>But I have some issues with the hair removal thing. I know I&#39;ll have to get electro for my face. I also know that it&#39;s expensive however if I stay diligent on the hormone régimen won&#39;t thé rest of my body hair grow back thinner and become more like vellus hair over time. <br><br>Because spending thousands on hair removal seems absurd.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/cd/res/375534.php#375563" onclick="highlight(375563);">&gt;&gt;</a></td> <td class="reply" id="reply375563"> <a id="375563"></a> <div class="replyheader"> 									 <span class="commentpostername">Phoebe Nungersire</span>  - <span class="idhighlight">Sat, 19 Jul 2014 00:49:54 EST ID:o5fBRnMt</span> <span class="reflink">  <a href="/cd/res/375534.php#i375563">No.375563</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd333933373131313734')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375563', '375534')" title="Report Post 375563"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375563" data-thread="375534"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5BEF7D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405745394862.gif"> 1405745394862.gif </a> -(<em>1245366 B, 250x188</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/cd/src/1405745394862.gif"> <img src="/cd/thumb/1405745394862s.jpg" alt="1245366" class="thumb" /> </a>    <blockquote  class="cd333933373131313734">  DICKS NOWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375534.php#375660" onclick="highlight(375660);">&gt;&gt;</a></td> <td class="reply" id="reply375660"> <a id="375660"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Gicklebutch</span>  - <span class="idhighlight">Mon, 21 Jul 2014 06:12:13 EST ID:VkD+VHEe</span> <span class="reflink">  <a href="/cd/res/375534.php#i375660">No.375660</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd33303932393532383637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375660', '375534')" title="Report Post 375660"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375660" data-thread="375534"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FC88C8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405937533877.jpg"> 1405937533877.jpg </a> -(<em>9567 B, 354x354</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/cd/src/1405937533877.jpg"> <img src="/cd/thumb/1405937533877s.jpg" alt="9567" class="thumb" /> </a>    <blockquote  class="cd33303932393532383637">  its not that bad just look for local resources. Just do it if you can, you will regret it later   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375534.php#375663" onclick="highlight(375663);">&gt;&gt;</a></td> <td class="reply" id="reply375663"> <a id="375663"></a> <div class="replyheader"> 									 <span class="commentpostername">Angus Suddlesturk</span>  - <span class="idhighlight">Mon, 21 Jul 2014 07:29:50 EST ID:g18DicJ9</span> <span class="reflink">  <a href="/cd/res/375534.php#i375663">No.375663</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31353435303136313133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375663', '375534')" title="Report Post 375663"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375663" data-thread="375534"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DFEC82; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31353435303136313133">  <a href = "/cd/res/375534.php" onclick = "highlight(375534)">&gt;&gt;375534</a><br>SOME hair may decrease in thickness and turn to vellus. The tops of my arms and legs have got a little softer but I have had very little change elsewhere (although I never got much hair on my back/chest). However don&#39;t rely on it.<br>If you&#39;ve got dark hair and pale skin I&#39;d suggest a course of laser first, then electro to get rid of what&#39;s left. It&#39;ll be a hell of a lot cheaper that way   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375534.php#375670" onclick="highlight(375670);">&gt;&gt;</a></td> <td class="reply" id="reply375670"> <a id="375670"></a> <div class="replyheader"> 									 <span class="commentpostername">Cornelius Murdspear</span>  - <span class="idhighlight">Mon, 21 Jul 2014 11:31:34 EST ID:o5fBRnMt</span> <span class="reflink">  <a href="/cd/res/375534.php#i375670">No.375670</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd333933373131313734')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375670', '375534')" title="Report Post 375670"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375670" data-thread="375534"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #902C2B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405956694632.jpg"> 1405956694632.jpg </a> -(<em>134476 B, 768x1123</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/cd/src/1405956694632.jpg"> <img src="/cd/thumb/1405956694632s.jpg" alt="134476" class="thumb" /> </a>    <blockquote  class="cd333933373131313734">  <a href = "/cd/res/375534.php#375663" onclick = "highlight(375663)">&gt;&gt;375663</a><br><br>So I&#39;d figure we&#39;re talking about face,chest,and torso?<br><br>pic related   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cdthread375575"> <div class="thread_header"> <a id="375575"></a> <span class="filetitle">General help plz</span>  <span class="inbetween"> by </span> <span class="postername">Lillian Fovinghad</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 19 Jul 2014 05:36:18 EST ID:8mu/eNrE</span></span>  <span class="reflink"> <a href="/cd/res/375575.php#i375575">No.375575</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd343132353132323539')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('375575')" title="Report Thread 375575"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/cd/res/375575.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375575" data-thread="375575"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5B3897; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cdthread375575');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405762578034.png"> 1405762578034.png </a> -(<em>1643356 B, 1089x813</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcd343132353132323539" target="_blank" href="/cd/src/1405762578034.png"> <img src="/cd/thumb/1405762578034s.jpg" alt="1643356" class="thumb" /> </a>   			 <blockquote class="opcomment cd343132353132323539">  I&#39;ve got a bunch of money saved up, what do I do with it. Is there anything that makes your hair grow faster, what kind of makeup do I need to get.? How should I style my hair, and most importantly what kind of stuff should I do to pass better.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/cd/res/375575.php#375579" onclick="highlight(375579);">&gt;&gt;</a></td> <td class="reply" id="reply375579"> <a id="375579"></a> <div class="replyheader"> 									 <span class="commentpostername">Nathaniel Pammlelock</span>  - <span class="idhighlight">Sat, 19 Jul 2014 10:50:27 EST ID:rUI8XJ5W</span> <span class="reflink">  <a href="/cd/res/375575.php#i375579">No.375579</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31323230383534363935')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375579', '375575')" title="Report Post 375579"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375579" data-thread="375575"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2A4E54; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31323230383534363935">  buy some dope and calm the fuck down   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375575.php#375580" onclick="highlight(375580);">&gt;&gt;</a></td> <td class="reply" id="reply375580"> <a id="375580"></a> <div class="replyheader"> 									 <span class="commentpostername">Charles Gobberletch</span>  - <span class="idhighlight">Sat, 19 Jul 2014 14:46:21 EST ID:xRpwdjPP</span> <span class="reflink">  <a href="/cd/res/375575.php#i375580">No.375580</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd32393134383234313232')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375580', '375575')" title="Report Post 375580"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375580" data-thread="375575"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1BBF6C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd32393134383234313232">  Take hormones, this is the priority above all else.<br>After that, begin hair removal.<br>Buy makeup basics, (BB Cream, Concealer, Pressed Powder, Blush)<br>Buy a Gaff for serious tucking.<br>Buy a new wardrobe.<br>Go to the salon and ask for femme haircut, they will get you setup.<br>Biotin is supposed to help hair growth.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375575.php#375606" onclick="highlight(375606);">&gt;&gt;</a></td> <td class="reply" id="reply375606"> <a id="375606"></a> <div class="replyheader"> 									 <span class="commentpostername">George Ponderlock</span>  - <span class="idhighlight">Sun, 20 Jul 2014 04:27:51 EST ID:o5fBRnMt</span> <span class="reflink">  <a href="/cd/res/375575.php#i375606">No.375606</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd333933373131313734')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375606', '375575')" title="Report Post 375606"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375606" data-thread="375575"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CAB8C5; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405844871447.jpg"> 1405844871447.jpg </a> -(<em>28593 B, 500x400</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/cd/src/1405844871447.jpg"> <img src="/cd/thumb/1405844871447s.jpg" alt="28593" class="thumb" /> </a>    <blockquote  class="cd333933373131313734">  <a href = "/cd/res/375575.php" onclick = "highlight(375575)">&gt;&gt;375575</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375575.php#375668" onclick="highlight(375668);">&gt;&gt;</a></td> <td class="reply" id="reply375668"> <a id="375668"></a> <div class="replyheader"> 									 <span class="commentpostername">Hugh Nuzzlebune</span>  - <span class="idhighlight">Mon, 21 Jul 2014 10:04:33 EST ID:8mu/eNrE</span> <span class="reflink">  <a href="/cd/res/375575.php#i375668">No.375668</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd343132353132323539')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375668', '375575')" title="Report Post 375668"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375668" data-thread="375575"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2653E4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405951473218.jpg"> 1405951473218.jpg </a> -(<em>730479 B, 2592x1944</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/cd/src/1405951473218.jpg"> <img src="/cd/thumb/1405951473218s.jpg" alt="730479" class="thumb" /> </a>    <blockquote  class="cd343132353132323539">  Got makeup, how&#39;s it look.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375575.php#375681" onclick="highlight(375681);">&gt;&gt;</a></td> <td class="reply" id="reply375681"> <a id="375681"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Tootbanks</span>  - <span class="idhighlight">Mon, 21 Jul 2014 18:42:31 EST ID:4KCgA8zh</span> <span class="reflink">  <a href="/cd/res/375575.php#i375681">No.375681</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31383536393436333937')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375681', '375575')" title="Report Post 375681"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375681" data-thread="375575"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #904C46; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31383536393436333937">  <a href = "/cd/res/375575.php#375668" onclick = "highlight(375668)">&gt;&gt;375668</a><br><br>i think your nose is your biggest (no pun intended) issue, your eyes and lips look dwarfed by your nose.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cdthread375473"> <div class="thread_header"> <a id="375473"></a> <span class="filetitle">Hiding Breasts?</span>  <span class="inbetween"> by </span> <span class="postername">Charles Ferringdock</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 16 Jul 2014 14:29:32 EST ID:E+pImF7q</span></span>  <span class="reflink"> <a href="/cd/res/375473.php#i375473">No.375473</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31313632343135313635')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('375473')" title="Report Thread 375473"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/cd/res/375473.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375473" data-thread="375473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #37755E; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cdthread375473');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405535372854.jpg"> 1405535372854.jpg </a> -(<em>54799 B, 450x418</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcd31313632343135313635" target="_blank" href="/cd/src/1405535372854.jpg"> <img src="/cd/thumb/1405535372854s.jpg" alt="54799" class="thumb" /> </a>   			 <blockquote class="opcomment cd31313632343135313635">  I&#39;m currently on HRT and I&#39;m starting to bud and grow breasts, but I&#39;m afraid I&#39;m going to lose my job or not be able to obtain jobs throughout transition. I&#39;d like to continue to work and be treated as a male in the workforce just for the job security. Because, no job = no &#39;mones. How do you hide your boobage? How well can you hide &#39;em and what&#39;s your cup size?   </blockquote>   				 				  <span class="omittedposts">   6 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/cd/res/375473.php#375543" onclick="highlight(375543);">&gt;&gt;</a></td> <td class="reply" id="reply375543"> <a id="375543"></a> <div class="replyheader"> 									 <span class="commentpostername">Fuck Nicklespear</span>  - <span class="idhighlight">Fri, 18 Jul 2014 14:21:37 EST ID:+6McIN4/</span> <span class="reflink">  <a href="/cd/res/375473.php#i375543">No.375543</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd343034343337383534')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375543', '375473')" title="Report Post 375543"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375543" data-thread="375473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2DE826; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd343034343337383534">  <a href = "/cd/res/375473.php#375530" onclick = "highlight(375530)">&gt;&gt;375530</a><br>Im assuming because of job security, no job=no mones   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375473.php#375548" onclick="highlight(375548);">&gt;&gt;</a></td> <td class="reply" id="reply375548"> <a id="375548"></a> <div class="replyheader"> 									 <span class="commentpostername">Simon Sivingforth</span>  - <span class="idhighlight">Fri, 18 Jul 2014 17:30:46 EST ID:o5fBRnMt</span> <span class="reflink">  <a href="/cd/res/375473.php#i375548">No.375548</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd333933373131313734')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375548', '375473')" title="Report Post 375548"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375548" data-thread="375473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2D3FB7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd333933373131313734">  <a href = "/cd/res/375473.php#375543" onclick = "highlight(375543)">&gt;&gt;375543</a><br><br>dat sex trade<br><br>:-/   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375473.php#375553" onclick="highlight(375553);">&gt;&gt;</a></td> <td class="reply" id="reply375553"> <a id="375553"></a> <div class="replyheader"> 									 <span class="commentpostername">Basil Chunderdock</span>  - <span class="idhighlight">Fri, 18 Jul 2014 18:31:41 EST ID:rift3TwE</span> <span class="reflink">  <a href="/cd/res/375473.php#i375553">No.375553</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd343130343837363337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375553', '375473')" title="Report Post 375553"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375553" data-thread="375473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D6D0C9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd343130343837363337">  <a href = "/cd/res/375473.php#375530" onclick = "highlight(375530)">&gt;&gt;375530</a><br>Partly because my voice doesn&#39;t pass,<br>Partly because I&#39;m trying to gain a bit of professional experience before becoming nearly unemployable,<br>Partly because of a hostile culture,<br>And partly because of a non-supportive family.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375473.php#375626" onclick="highlight(375626);">&gt;&gt;</a></td> <td class="reply" id="reply375626"> <a id="375626"></a> <div class="replyheader"> 									 <span class="commentpostername">Oliver Hackledock</span>  - <span class="idhighlight">Sun, 20 Jul 2014 18:14:13 EST ID:lIX2qBcv</span> <span class="reflink">  <a href="/cd/res/375473.php#i375626">No.375626</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31313434383534323733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375626', '375473')" title="Report Post 375626"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375626" data-thread="375473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0F33D0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31313434383534323733">  <a href = "/cd/res/375473.php#375553" onclick = "highlight(375553)">&gt;&gt;375553</a><br>Ah, sorry, I should have been thinking before I posted that. I am afraid to transition for reasons that include those. I am taking hormones behind everyone&#39;s back without making any effort at anything else.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375473.php#375667" onclick="highlight(375667);">&gt;&gt;</a></td> <td class="reply" id="reply375667"> <a id="375667"></a> <div class="replyheader"> 									 <span class="commentpostername">Edward Smallfuck</span>  - <span class="idhighlight">Mon, 21 Jul 2014 09:53:10 EST ID:HjXm6NKk</span> <span class="reflink">  <a href="/cd/res/375473.php#i375667">No.375667</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd393231393132383135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375667', '375473')" title="Report Post 375667"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375667" data-thread="375473"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5FA142; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd393231393132383135">  <a href = "/cd/res/375473.php" onclick = "highlight(375473)">&gt;&gt;375473</a><br><a href="http://www.yummielife.com/3-panel-patented-original-shapewear" rel="nofollow" target="_blank">http://www.yummielife.com/3-panel-patented-original-shapewear</a>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="cdthread375624"> <div class="thread_header"> <a id="375624"></a> <span class="filetitle">hugboxerino</span>  <span class="inbetween"> by </span> <span class="postername">Frederick Drobbleham</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 20 Jul 2014 17:22:26 EST ID:iLdS25fQ</span></span>  <span class="reflink"> <a href="/cd/res/375624.php#i375624">No.375624</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31343533383138333635')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('375624')" title="Report Thread 375624"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/cd/res/375624.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375624" data-thread="375624"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #37F36A; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('cdthread375624');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/cd/src/1405891346952.gif"> 1405891346952.gif </a> -(<em>490948 B, 300x374</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgcd31343533383138333635" target="_blank" href="/cd/src/1405891346952.gif"> <img src="/cd/thumb/1405891346952s.jpg" alt="490948" class="thumb" /> </a>   			 <blockquote class="opcomment cd31343533383138333635">  what did thehugbox change it&#39;s room password too and why?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/cd/res/375624.php#375657" onclick="highlight(375657);">&gt;&gt;</a></td> <td class="reply" id="reply375657"> <a id="375657"></a> <div class="replyheader"> 									 <span class="commentpostername">Eugene Pusslefoot</span>  - <span class="idhighlight">Mon, 21 Jul 2014 04:32:35 EST ID:4ZYKyr3B</span> <span class="reflink">  <a href="/cd/res/375624.php#i375657">No.375657</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd383439383930323230')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375657', '375624')" title="Report Post 375657"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375657" data-thread="375624"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E45C7B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd383439383930323230">  <a href = "/cd/res/375624.php" onclick = "highlight(375624)">&gt;&gt;375624</a><br>Which are you referring to?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/cd/res/375624.php#375665" onclick="highlight(375665);">&gt;&gt;</a></td> <td class="reply" id="reply375665"> <a id="375665"></a> <div class="replyheader"> 									 <span class="commentpostername">Phyllis Bashchore</span>  - <span class="idhighlight">Mon, 21 Jul 2014 09:28:19 EST ID:gposJh6F</span> <span class="reflink">  <a href="/cd/res/375624.php#i375665">No.375665</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('cd31343533313932363937')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('375665', '375624')" title="Report Post 375665"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="375665" data-thread="375624"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #39A699; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="cd31343533313932363937">  <a href = "/cd/res/375624.php#375657" onclick = "highlight(375657)">&gt;&gt;375657</a><br>doesn&#39;t matter anymore<br>can&#39;t figure out how to delete this thread<br>mod pls help   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
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
 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/cd/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="cd" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <input type="hidden" name="name" />	  <table> <tbody>     <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">   <span style="font-size: +1;">Pages</span>   <a href="/cd/1.php">Next&gt;&gt;</a>  <br />    0    <a href="/cd/1.php">1</a>     <a href="/cd/2.php">2</a>     <a href="/cd/3.php">3</a>     <a href="/cd/4.php">4</a>     <a href="/cd/5.php">5</a>     <a href="/cd/6.php">6</a>     <a href="/cd/7.php">7</a>     <a href="/cd/8.php">8</a>     <a href="/cd/9.php">9</a>     <a href="/cd/10.php">10</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
							<li><img width='32' height='32' class='boardicon' alt='qq' src='/static/images/board_icons/qq_icon_32.png' />
		<span class='byline'>Personal Issues - <a href='/qq/res/448843.php' class='boardlink'>Thread 448843</a></span>
		<p>The divorce rate has been steadily declining since the 60s.... <a href='/qq/res/448843.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='wooo' src='/static/images/board_icons/wooo_icon_32.png' />
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3851048.php' class='boardlink'>Thread 3851048</a></span>
		<p>>>3851303


[%]how did he not die?[/%]... <a href='/wooo/res/3851048.php' class='boardlink'>&#8629;</a></p></li>
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

