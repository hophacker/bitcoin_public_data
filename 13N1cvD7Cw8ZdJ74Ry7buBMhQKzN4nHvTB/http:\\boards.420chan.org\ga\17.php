http://boards.420chan.org/ga/17.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Thu, 24 Jul 2014 13:09:56 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> Adult (Gay) - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/ga_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/ga_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/ga/17.php';
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
	 <div id="header"> <div id="board_logo"> <a href="/ga/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/ga_icon_64.png" alt="/ga/ Icon" /> <p class="board_title_block"> <span class="board_name">/ga/</span> <span class="board_title">Adult (Gay)</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
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
	 <!--  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/ga/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="ga" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />     <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>  <tr> <td class="postblock">Name</td> <td> <input title="Name" type="text" name="field1" style="width:224px;" /> <div class="tooltip">  You can leave this blank to post anonymously, or you can create a Tripcode by using the float <b>Name#Password</b> </div>					 </td> </tr>    <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div>  <script type="text/javascript">set_inputs("postform")</script> <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 3000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> 			  </ul> </div> <hr style="margin-bottom:2px;" /> 		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://420chan.org/advertise"><img src="http://cdn.420chan.org/sp/YOUR-AD-HERE.gif"></a>
		</div>
		 <hr style="margin-top:2px;" />   <form id="delform" action="/ga/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="ga" />    <div id="gathread122908"> <div class="thread_header"> <a id="122908"></a> <span class="filetitle">Something about this guy</span>  <span class="inbetween"> by </span> <span class="postername">Phineas Femblenirk</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 17 Oct 2013 09:16:15 EST ID:SKmOPzZH</span></span>  <span class="reflink"> <a href="/ga/res/122908.php#i122908">No.122908</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga3234373838353739')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('122908')" title="Report Thread 122908"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/ga/res/122908.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="122908" data-thread="122908"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1D39CB; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('gathread122908');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/ga/src/1382015775910.jpg"> 1382015775910.jpg </a> -(<em>43409 B, 640x515</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgga3234373838353739" target="_blank" href="/ga/src/1382015775910.jpg"> <img src="/ga/thumb/1382015775910s.jpg" alt="43409" class="thumb" /> </a>   			 <blockquote class="opcomment ga3234373838353739">  I&#39;ve decided to do a small handful of you a huge favour   </blockquote>   				 				  <span class="omittedposts">  16 posts and 14 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/ga/res/122908.php#124754" onclick="highlight(124754);">&gt;&gt;</a></td> <td class="reply" id="reply124754"> <a id="124754"></a> <div class="replyheader"> 									 <span class="commentpostername">Samuel Puddleford</span>  - <span class="idhighlight">Mon, 27 Jan 2014 00:45:51 EST ID:UczUlqDe</span> <span class="reflink">  <a href="/ga/res/122908.php#i124754">No.124754</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga32343637393736393733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124754', '122908')" title="Report Post 124754"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124754" data-thread="122908"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #632AFD; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga32343637393736393733">  cute   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/122908.php#124766" onclick="highlight(124766);">&gt;&gt;</a></td> <td class="reply" id="reply124766"> <a id="124766"></a> <div class="replyheader"> 									 <span class="commentpostername">Reuben Pablingspear</span>  - <span class="idhighlight">Tue, 28 Jan 2014 10:13:33 EST ID:qY2BLEx1</span> <span class="reflink">  <a href="/ga/res/122908.php#i124766">No.124766</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga32313937313434393137')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124766', '122908')" title="Report Post 124766"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124766" data-thread="122908"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #954708; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga32313937313434393137">  REMOVE KEBAB remove kebab<br>you are worst turk. you are the turk idiot you are the turk smell. return to croatioa. to our croatia cousins you may come our contry. you may live in the zoo….ahahahaha ,bosnia we will never forgeve you. cetnik rascal   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/122908.php#124785" onclick="highlight(124785);">&gt;&gt;</a></td> <td class="reply" id="reply124785"> <a id="124785"></a> <div class="replyheader"> 									 <span class="commentpostername">Jarvis Buddledeg</span>  - <span class="idhighlight">Wed, 29 Jan 2014 14:07:47 EST ID:U0xMr7km</span> <span class="reflink">  <a href="/ga/res/122908.php#i124785">No.124785</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31333132313032363135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124785', '122908')" title="Report Post 124785"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124785" data-thread="122908"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E6616B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga31333132313032363135">  <a href = "/ga/res/122908.php#124766" onclick = "highlight(124766)">&gt;&gt;124766</a> NIX REMOVE KEBAB,  turk, with small penis ! COOL   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="gathread121896"> <div class="thread_header"> <a id="121896"></a> <span class="filetitle">Bawww thread (no twink things)</span>  <span class="inbetween"> by </span> <span class="postername">Cyril Greenville</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 29 Aug 2013 07:42:52 EST ID:fKODWcxA</span></span>  <span class="reflink"> <a href="/ga/res/121896.php#i121896">No.121896</a> </span>    			 <!--  - Awesome Thread? <a href="/ga/taimaba.pl?board=ga&amp;task=vote&amp;thread=121896&amp;vote=0">No!</a> | <a href="/ga/taimaba.pl?board=ga&amp;task=vote&amp;thread=121896&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31333737383336373135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('121896')" title="Report Thread 121896"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/ga/res/121896.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="121896" data-thread="121896"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #309CFA; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('gathread121896');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/ga/src/1377776572145.jpg"> 1377776572145.jpg </a> -(<em>43062 B, 780x312</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgga31333737383336373135" target="_blank" href="/ga/src/1377776572145.jpg"> <img src="/ga/thumb/1377776572145s.jpg" alt="43062" class="thumb" /> </a>   			 <blockquote class="opcomment ga31333737383336373135">  I&#39;m not in a good place today. Can /ga/ cheer me up with some gay things?   </blockquote>   				 				  <span class="omittedposts">  34 posts and 16 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/ga/res/121896.php#124748" onclick="highlight(124748);">&gt;&gt;</a></td> <td class="reply" id="reply124748"> <a id="124748"></a> <div class="replyheader"> 									 <span class="commentpostername">Archie Sozzleway</span>  - <span class="idhighlight">Sun, 26 Jan 2014 21:40:50 EST ID:3HozG7BW</span> <span class="reflink">  <a href="/ga/res/121896.php#i124748">No.124748</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga33333635313833303832')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124748', '121896')" title="Report Post 124748"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124748" data-thread="121896"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #267001; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga33333635313833303832">  <a href = "/ga/res/121896.php#121929" onclick = "highlight(121929)">&gt;&gt;121929</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/121896.php#124763" onclick="highlight(124763);">&gt;&gt;</a></td> <td class="reply" id="reply124763"> <a id="124763"></a> <div class="replyheader"> 									 <span class="commentpostername">Polly Dullytid</span>  - <span class="idhighlight">Mon, 27 Jan 2014 17:09:47 EST ID:HKvF+GKO</span> <span class="reflink">  <a href="/ga/res/121896.php#i124763">No.124763</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga33323030393939393739')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124763', '121896')" title="Report Post 124763"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124763" data-thread="121896"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #90C347; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga33323030393939393739">  <a href = "/ga/res/121896.php#121904" onclick = "highlight(121904)">&gt;&gt;121904</a><br>Wtf is this from.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/121896.php#124764" onclick="highlight(124764);">&gt;&gt;</a></td> <td class="reply" id="reply124764"> <a id="124764"></a> <div class="replyheader"> 									 <span class="commentpostername">George Siffingfudging</span>  - <span class="idhighlight">Tue, 28 Jan 2014 04:32:37 EST ID:1D9+lcb7</span> <span class="reflink">  <a href="/ga/res/121896.php#i124764">No.124764</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga32393033353530393034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124764', '121896')" title="Report Post 124764"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124764" data-thread="121896"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BD69CC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga32393033353530393034">  <a href = "/ga/res/121896.php#121904" onclick = "highlight(121904)">&gt;&gt;121904</a><br><br>Lol. At first I thought it was Richard and Sal.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="gathread124648"> <div class="thread_header"> <a id="124648"></a> <span class="filetitle">what u think</span>  <span class="inbetween"> by </span> <span class="postername">Charles Honeybanks</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 18 Jan 2014 18:27:57 EST ID:Apmm6G1G</span></span>  <span class="reflink"> <a href="/ga/res/124648.php#i124648">No.124648</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31313533373733303032')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('124648')" title="Report Thread 124648"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/ga/res/124648.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124648" data-thread="124648"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4BD930; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('gathread124648');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/ga/src/1390087677671.jpg"> 1390087677671.jpg </a> -(<em>273502 B, 1600x1200</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgga31313533373733303032" target="_blank" href="/ga/src/1390087677671.jpg"> <img src="/ga/thumb/1390087677671s.jpg" alt="273502" class="thumb" /> </a>   			 <blockquote class="opcomment ga31313533373733303032">  what u think   </blockquote>   				 				  <span class="omittedposts">  3 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/ga/res/124648.php#124714" onclick="highlight(124714);">&gt;&gt;</a></td> <td class="reply" id="reply124714"> <a id="124714"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Pockfield</span>  - <span class="idhighlight">Thu, 23 Jan 2014 23:12:02 EST ID:0jkXwDjo</span> <span class="reflink">  <a href="/ga/res/124648.php#i124714">No.124714</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31323034353137393434')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124714', '124648')" title="Report Post 124714"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124714" data-thread="124648"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9D038B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga31323034353137393434">  Unlike some, I think the cock thickness is awesome and I like the scrotum.<br><br>Weight doesn&#39;t bother me, but that giant mole hiding in your pubes does.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/124648.php#124740" onclick="highlight(124740);">&gt;&gt;</a></td> <td class="reply" id="reply124740"> <a id="124740"></a> <div class="replyheader"> 									 <span class="commentpostername">Hannah Seshstock</span>  - <span class="idhighlight">Sun, 26 Jan 2014 04:22:56 EST ID:EMjwuWhK</span> <span class="reflink">  <a href="/ga/res/124648.php#i124740">No.124740</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31313635363933333432')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124740', '124648')" title="Report Post 124740"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124740" data-thread="124648"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #72038B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga31313635363933333432">  Nice penis.  Not into bears/cubs, personally.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/124648.php#124761" onclick="highlight(124761);">&gt;&gt;</a></td> <td class="reply" id="reply124761"> <a id="124761"></a> <div class="replyheader"> 									 <span class="commentpostername">Euminz</span>  - <span class="idhighlight">Mon, 27 Jan 2014 14:54:33 EST ID:yX9H12+2</span> <span class="reflink">  <a href="/ga/res/124648.php#i124761">No.124761</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31353538363637363538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124761', '124648')" title="Report Post 124761"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124761" data-thread="124648"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #ED489C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga31353538363637363538">  Nice Penis, Thank   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="gathread124709"> <div class="thread_header"> <a id="124709"></a> <span class="filetitle">laughing after orgasming</span>  <span class="inbetween"> by </span> <span class="postername">Simon Donderbanks</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 23 Jan 2014 16:20:41 EST ID:6byMMKu4</span></span>  <span class="reflink"> <a href="/ga/res/124709.php#i124709">No.124709</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31363737383435353935')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('124709')" title="Report Thread 124709"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/ga/res/124709.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124709" data-thread="124709"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6A6647; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('gathread124709');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/ga/src/1390512041232.png"> 1390512041232.png </a> -(<em>13478 B, 128x128</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgga31363737383435353935" target="_blank" href="/ga/src/1390512041232.png"> <img src="/ga/src/1390512041232.png" alt="13478" class="thumb" /> </a>   			 <blockquote class="opcomment ga31363737383435353935">  Hello hello hello, /ga/,<br>I had a very interesting night last night and I need some feedback.<br>Casually dating this guy, about 5ft 10, very skinny, and very easy to frustrate and tease.  We get back to his place, start fooling around, and he asks me to give hin head. I basically make him beg for it for a few mins and the. Bam.....sick cocking skills come out. Thick 8 inch cock, got me so fucking hot and ready to fuck him.<br>I keep at it for a few mins then he finally finishes and starts to laugh....like can&#39;t stop face turning red laughing. I had no clue what was going on, i thought he was laughing at me but He says he does it all the time and cant control it.  I was slightly confused (and sadly turned off by the outburst). Anyone else have any experiences like this or any other post-cum antics?<br><br>Pic very related, my face driving home after this, extremely puzzled and harder than ive been in awhileb thinking about dat dick   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/ga/res/124709.php#124711" onclick="highlight(124711);">&gt;&gt;</a></td> <td class="reply" id="reply124711"> <a id="124711"></a> <div class="replyheader"> 									 <span class="commentpostername">Albert Clenningchare</span>  - <span class="idhighlight">Thu, 23 Jan 2014 16:30:40 EST ID:P7W3xVd5</span> <span class="reflink">  <a href="/ga/res/124709.php#i124711">No.124711</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31343637323038303138')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124711', '124709')" title="Report Post 124711"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124711" data-thread="124709"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #992F9D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga31343637323038303138">  <a href = "/ga/res/124709.php" onclick = "highlight(124709)">&gt;&gt;124709</a><br>I can get quite giggly after sex, it wouldn&#39;t surprise me if there are people out there who break out into full-on laughter.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/124709.php#124717" onclick="highlight(124717);">&gt;&gt;</a></td> <td class="reply" id="reply124717"> <a id="124717"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Pockspear</span>  - <span class="idhighlight">Fri, 24 Jan 2014 00:41:18 EST ID:9d/kwWaG</span> <span class="reflink">  <a href="/ga/res/124709.php#i124717">No.124717</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31313233323832383538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124717', '124709')" title="Report Post 124717"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124717" data-thread="124709"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7C52D4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga31313233323832383538">  It&#39;s a quirk, don&#39;t make it about you. It&#39;s possible he may have even felt self conscious after you left for it. Laughter like this is involuntary, and the harder one tries to stop, the worse it becomes.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/124709.php#124718" onclick="highlight(124718);">&gt;&gt;</a></td> <td class="reply" id="reply124718"> <a id="124718"></a> <div class="replyheader"> 									 <span class="commentpostername">Thomas Buttingchot</span>  - <span class="idhighlight">Fri, 24 Jan 2014 01:20:43 EST ID:dLUj0gTv</span> <span class="reflink">  <a href="/ga/res/124709.php#i124718">No.124718</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31313530373331353432')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124718', '124709')" title="Report Post 124718"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124718" data-thread="124709"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D9BAEF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga31313530373331353432">  <a href = "/ga/res/124709.php" onclick = "highlight(124709)">&gt;&gt;124709</a><br>sometimes on my last reps of an intense workout I start laughing...if I&#39;m stoned I cant work out at all because of this.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="gathread124027"> <div class="thread_header"> <a id="124027"></a> <span class="filetitle">Chubby Muscle Gut Bears fucking Twinks</span>  <span class="inbetween"> by </span> <span class="postername">Molly Duckleserk</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 08 Dec 2013 06:50:01 EST ID:ayKEKuhB</span></span>  <span class="reflink"> <a href="/ga/res/124027.php#i124027">No.124027</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga32393139373032373936')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('124027')" title="Report Thread 124027"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/ga/res/124027.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124027" data-thread="124027"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CF017C; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('gathread124027');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/ga/src/1386503401828.jpg"> 1386503401828.jpg </a> -(<em>121170 B, 1279x870</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgga32393139373032373936" target="_blank" href="/ga/src/1386503401828.jpg"> <img src="/ga/thumb/1386503401828s.jpg" alt="121170" class="thumb" /> </a>   			 <blockquote class="opcomment ga32393139373032373936">  <a href="http://www.sextubespot.com/videos/791122/me-worshipping-bbc/" rel="nofollow" target="_blank">http://www.sextubespot.com/videos/791122/me-worshipping-bbc/</a><br><br>anyone have any links to porn like this?<br><br>when ever i try and find a bear fucking a twink, i always get two bears, or a twink and an old man, or a guy who&#39;s too flabby, or a bear and a muscle dude, while i can jerk off to porn that doesn&#39;t have exactly what i want, its porn&#39;s like these that make me think that i&#39;m not alone in just wanting to jerk off to a nice chubby muscle gut fucking a tight boytoy. bonus points if the sub makes feminine moans and remains the sub the whole video. bonus points if the top isn&#39;t flabby, and isn&#39;t much fatter then this video, and preferably has a bit of muscle. but generally i just want a nice, not entirely out of shape, chubby muscle bear fucking the shit out of a twink. or otter, what eves, just a smaller and thinner person, not a body builder or another bear, shits old, its a shame that theres like, practically only bears fucking bears when ever i try and look up bear porn. when i found this porn i thought i was going to have a fucking heart attack because of how hot it was. although the twinks noises are kind of annoying and way louder and really masculine, and his facial hair is is gross, still fakin hot because of how hot the bear is and how much bigger he is, and the noises he makes :3 =^_^=<br><br>just look at those fucking legs, i want to fucking throw up because i&#39;m like an excited child that just found a stash of candy (lol). so fucking sexy.   </blockquote>   				 				  <span class="omittedposts">   2 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/ga/res/124027.php#124131" onclick="highlight(124131);">&gt;&gt;</a></td> <td class="reply" id="reply124131"> <a id="124131"></a> <div class="replyheader"> 									 <span class="commentpostername">Matilda Cebblehood</span>  - <span class="idhighlight">Fri, 13 Dec 2013 00:46:03 EST ID:ayKEKuhB</span> <span class="reflink">  <a href="/ga/res/124027.php#i124131">No.124131</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga32393139373032373936')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124131', '124027')" title="Report Post 124131"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124131" data-thread="124027"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9D6B19; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga32393139373032373936">  <a href="http://oldmangaydaddy.com/ass-raw-fucked-and-seeded-by-black-big-dick-330997.html" rel="nofollow" target="_blank">http://oldmangaydaddy.com/ass-raw-fucked-and-seeded-by-black-big-dick-330997.html</a><br><br>just gonna put this here.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/124027.php#124636" onclick="highlight(124636);">&gt;&gt;</a></td> <td class="reply" id="reply124636"> <a id="124636"></a> <div class="replyheader"> 									 <span class="commentpostername">Shitting Chillystone</span>  - <span class="idhighlight">Sat, 18 Jan 2014 02:23:04 EST ID:ayKEKuhB</span> <span class="reflink">  <a href="/ga/res/124027.php#i124636">No.124636</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga32393139373032373936')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124636', '124027')" title="Report Post 124636"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124636" data-thread="124027"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C3D5C9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga32393139373032373936">  <a href="http://oldmangaydaddy.com/black-bull-fucks-white-guy-bent-over-chair-324122.html" rel="nofollow" target="_blank">http://oldmangaydaddy.com/black-bull-fucks-white-guy-bent-over-chair-324122.html</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/124027.php#124703" onclick="highlight(124703);">&gt;&gt;</a></td> <td class="reply" id="reply124703"> <a id="124703"></a> <div class="replyheader"> 									 <span class="commentpostername">Phoebe Wollybury</span>  - <span class="idhighlight">Thu, 23 Jan 2014 02:56:51 EST ID:ayKEKuhB</span> <span class="reflink">  <a href="/ga/res/124027.php#i124703">No.124703</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga32393139373032373936')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124703', '124027')" title="Report Post 124703"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124703" data-thread="124027"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #880326; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga32393139373032373936">  <a href="http://oldmangaydaddy.com/black-chubby-324245.html" rel="nofollow" target="_blank">http://oldmangaydaddy.com/black-chubby-324245.html</a>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="gathread124694"> <div class="thread_header"> <a id="124694"></a> <span class="filetitle">can someone source? names?</span>  <span class="inbetween"> by </span> <span class="postername">Phoebe Bibbledudge</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 22 Jan 2014 05:16:31 EST ID:5DkCOS7n</span></span>  <span class="reflink"> <a href="/ga/res/124694.php#i124694">No.124694</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31323535323133303434')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('124694')" title="Report Thread 124694"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/ga/res/124694.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124694" data-thread="124694"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #69E8A4; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('gathread124694');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/ga/src/1390385791493.gif"> 1390385791493.gif </a> -(<em>814329 B, 500x281</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgga31323535323133303434" target="_blank" href="/ga/src/1390385791493.gif"> <img src="/ga/thumb/1390385791493s.jpg" alt="814329" class="thumb" /> </a>   			 <blockquote class="opcomment ga31323535323133303434">  I want to find this video. the action in the gif is hot.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/ga/res/124694.php#124699" onclick="highlight(124699);">&gt;&gt;</a></td> <td class="reply" id="reply124699"> <a id="124699"></a> <div class="replyheader"> 									 <span class="commentpostername">koala</span>  - <span class="idhighlight">Wed, 22 Jan 2014 18:10:41 EST ID:BykqfzqK</span> <span class="reflink">  <a href="/ga/res/124694.php#i124699">No.124699</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31313336303034363337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124699', '124694')" title="Report Post 124699"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124699" data-thread="124694"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B8A319; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga31313336303034363337">  Colby Jansen and Rod Daily   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/124694.php#124701" onclick="highlight(124701);">&gt;&gt;</a></td> <td class="reply" id="reply124701"> <a id="124701"></a> <div class="replyheader"> 									 <span class="commentpostername">Beatrice Hallygold</span>  - <span class="idhighlight">Wed, 22 Jan 2014 20:46:10 EST ID:bpNJpnnB</span> <span class="reflink">  <a href="/ga/res/124694.php#i124701">No.124701</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31313233323832383132')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124701', '124694')" title="Report Post 124701"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124701" data-thread="124694"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0B8D4E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga31313233323832383132">  <a href = "/ga/res/124694.php#124699" onclick = "highlight(124699)">&gt;&gt;124699</a><br>thank you   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="gathread124697"> <div class="thread_header"> <a id="124697"></a> <span class="filetitle">Boys exposed</span>  <span class="inbetween"> by </span> <span class="postername">Cedric Shakestone</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 22 Jan 2014 14:31:03 EST ID:WKEq5IhP</span></span>  <span class="reflink"> <a href="/ga/res/124697.php#i124697">No.124697</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31333334363831383831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('124697')" title="Report Thread 124697"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/ga/res/124697.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124697" data-thread="124697"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #35854B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('gathread124697');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/ga/src/1390419063773.jpg"> 1390419063773.jpg </a> -(<em>28138 B, 337x453</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgga31333334363831383831" target="_blank" href="/ga/src/1390419063773.jpg"> <img src="/ga/thumb/1390419063773s.jpg" alt="28138" class="thumb" /> </a>   			 <blockquote class="opcomment ga31333334363831383831">  Boys exposed all over internet .. <a href="http://daddiesboysexposed.blogspot.com/" rel="nofollow" target="_blank">http://daddiesboysexposed.blogspot.com/</a>   </blockquote>   				 				     <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="gathread123735"> <div class="thread_header"> <a id="123735"></a> <span class="filetitle">Fetishes, do they come hand in hand?</span>  <span class="inbetween"> by </span> <span class="postername">Henry Hattingnork</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 26 Nov 2013 15:57:22 EST ID:LAKY/wgq</span></span>  <span class="reflink"> <a href="/ga/res/123735.php#i123735">No.123735</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga33323634363237303537')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('123735')" title="Report Thread 123735"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/ga/res/123735.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="123735" data-thread="123735"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #71C569; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('gathread123735');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/ga/src/1385499442160.jpg"> 1385499442160.jpg </a> -(<em>22010 B, 416x311</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgga33323634363237303537" target="_blank" href="/ga/src/1385499442160.jpg"> <img src="/ga/thumb/1385499442160s.jpg" alt="22010" class="thumb" /> </a>   			 <blockquote class="opcomment ga33323634363237303537">  During my many years of research on the internet, I&#39;ve come to wonder, do fetishes come hand in hand? People who are into bondage seem to be also into leather, people who are into leather also seems to be into rubber, people who are into rubber are into watersports, and people who are into wotersports are also into sneakers and uniforms. <br><br>This is weird: seems like there&#39;s a complex net of objects of arousal, which all stays into shadows of the eyes of people who are only into vanilla. So tell me, is my observation true, and is there really something that unites all the fetishes?   </blockquote>   				 				  <span class="omittedposts">   4 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/ga/res/123735.php#124686" onclick="highlight(124686);">&gt;&gt;</a></td> <td class="reply" id="reply124686"> <a id="124686"></a> <div class="replyheader"> 									 <span class="commentpostername">Emma Croshstodge</span>  - <span class="idhighlight">Mon, 20 Jan 2014 22:41:06 EST ID:nxpzgGbE</span> <span class="reflink">  <a href="/ga/res/123735.php#i124686">No.124686</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga32393232363132353337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124686', '123735')" title="Report Post 124686"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124686" data-thread="123735"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F3FB5B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga32393232363132353337">  Some fetishes go hand in hand, but it all comes down to taste. Someone likes bondage and the feeling of leather, but they can&#39;t stand the feeling of latex. Or someone likes water sports, but can&#39;t handle getting tied up and so on.<br><br>Basically if you&#39;re into one thing, you&#39;re more open to others.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/123735.php#124687" onclick="highlight(124687);">&gt;&gt;</a></td> <td class="reply" id="reply124687"> <a id="124687"></a> <div class="replyheader"> 									 <span class="commentpostername">Jenny Fommlestere</span>  - <span class="idhighlight">Tue, 21 Jan 2014 00:44:11 EST ID:dLUj0gTv</span> <span class="reflink">  <a href="/ga/res/123735.php#i124687">No.124687</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31313530373331353432')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124687', '123735')" title="Report Post 124687"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124687" data-thread="123735"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #40ED1F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga31313530373331353432">  I&#39;m into rope bondage, not leather or latex, and watersports are okay.  I&#39;m amazed at diaper fetishes, and foot fetishes even.  It&#39;s fascinating how preferences can be so polarized   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/123735.php#124688" onclick="highlight(124688);">&gt;&gt;</a></td> <td class="reply" id="reply124688"> <a id="124688"></a> <div class="replyheader"> 									 <span class="commentpostername">Jenny Fommlestere</span>  - <span class="idhighlight">Tue, 21 Jan 2014 00:44:45 EST ID:dLUj0gTv</span> <span class="reflink">  <a href="/ga/res/123735.php#i124688">No.124688</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31313530373331353432')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124688', '123735')" title="Report Post 124688"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124688" data-thread="123735"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #792068; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga31313530373331353432">  <a href = "/ga/res/123735.php#124687" onclick = "highlight(124687)">&gt;&gt;124687</a><br>oh yeah I&#39;m not into ladies clothes either, nb   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="gathread123772"> <div class="thread_header"> <a id="123772"></a> <span class="filetitle">Being a prude and trying to hook up</span>  <span class="inbetween"> by </span> <span class="postername">T</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 28 Nov 2013 09:41:36 EST ID:3WOt13Uw</span></span>  <span class="reflink"> <a href="/ga/res/123772.php#i123772">No.123772</a> </span>    			 <!--  - Awesome Thread? <a href="/ga/taimaba.pl?board=ga&amp;task=vote&amp;thread=123772&amp;vote=0">No!</a> | <a href="/ga/taimaba.pl?board=ga&amp;task=vote&amp;thread=123772&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31313139363938323532')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('123772')" title="Report Thread 123772"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/ga/res/123772.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="123772" data-thread="123772"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #814913; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('gathread123772');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/ga/src/1385649696011.png"> 1385649696011.png </a> -(<em>409172 B, 422x660</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgga31313139363938323532" target="_blank" href="/ga/src/1385649696011.png"> <img src="/ga/thumb/1385649696011s.jpg" alt="409172" class="thumb" /> </a>   			 <blockquote class="opcomment ga31313139363938323532">  Hey /ga/ I need some advice. Like the title suggests I&#39;m a prude. I don&#39;t feel very comfortable with strangers so I&#39;m very picky about having sex. That being said, as I write this I have just realized that it&#39;s been almost 4 years since my first and last sexual interaction with someone. Needless to say, I extremely horny.<br><br>Now I have 2 guys lined up to hook up with. One that I find really attractive, and who I found on a sexual themed site (let&#39;s call him hot guy), and then another that I&#39;ve known for a long time who always dropped hints about  us having sex (let&#39;s call him good guy).  Both of these raise slightly different concerns. Get ready for a ton of text.<br><br>My first concert is the initiation. Now like I said with the good guy, he has dropped hints several times, but neither one of us has ever explicitly talked about hooking up.  I was just thinking of &quot;seducing&quot; him. Getting into his pants is not really a worry of mine. However the hot guy is a stranger. He asked what I was into; for which I replied &quot;sucking dick and getting fucked&quot;, which was to the point, but then after a few messages he asked when I was free to &quot;hang out&quot; which kind of threw me off. Reason I say that is because my first time started off with a lot (and I mean a lot) of innuendo, which made things really awkward when it came time to get it on. He wasn&#39;t very forward  which made me think  &quot;oh shit what if actually just wanted to hang out?&quot;, which made me inhibited.  Since I never truly hooked up my question is, should I be extremely clear with hot guys and ask if we&#39;re going to just do it, or if he wants to actually hang out first? Is that something guys do in planned hook ups, do they hang before fucking? I just don&#39;t want to spend however long it takes to get to his place to &quot;watch a movie&quot; and then end up actually just watching a movie. You know what I mean? Like I said I never done this so I&#39;m kind of out of the loop on what to do and/or expect. <br><br>Second concern is with cleanliness. I&#39;m going to be bottoming for both guys, and although I know how to get clean (use enema that they sell at drug stores, or buy a reusable at a sex shop&hellip;  <div class="abbrev"> Comment too long. Click <a href="/ga/res/123772.php">here</a> to view the full text. </div>   </blockquote>   				 				  <span class="omittedposts">  18 posts and 6 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/ga/res/123772.php#124679" onclick="highlight(124679);">&gt;&gt;</a></td> <td class="reply" id="reply124679"> <a id="124679"></a> <div class="replyheader"> 									 <span class="commentpostername">Doris Dublingtudging</span>  - <span class="idhighlight">Mon, 20 Jan 2014 07:44:54 EST ID:f4cwVVmm</span> <span class="reflink">  <a href="/ga/res/123772.php#i124679">No.124679</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga33333235333838383238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124679', '123772')" title="Report Post 124679"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124679" data-thread="123772"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7476B9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga33333235333838383238">  <a href = "/ga/res/123772.php#124628" onclick = "highlight(124628)">&gt;&gt;124628</a><br>same, tonight was the worst night.<br>everyone on grindr in my area is disgusting, then this REALLY REALLY HOT GUY starts messaging me, only downside is hes 28 and im 20, and says all the sweetest things and calls me cute and tells me how much he wants me and how much he likes me, and so tonight we were finally gonna meet up and i said &quot;okay im done dinner, im ready now so just message me before you come&quot; <br>and he just never replied again<br>and now its 4 am<br>and i didnt even care about him much (he came off as clingy) until he ignored me.... now i want him so bad omg wtf why is this how my brain is wired   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/123772.php#124681" onclick="highlight(124681);">&gt;&gt;</a></td> <td class="reply" id="reply124681"> <a id="124681"></a> <div class="replyheader"> 									 <span class="commentpostername">Henry Mebberkedging</span>  - <span class="idhighlight">Mon, 20 Jan 2014 10:32:27 EST ID:BEAH+6It</span> <span class="reflink">  <a href="/ga/res/123772.php#i124681">No.124681</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga33303932303136373833')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124681', '123772')" title="Report Post 124681"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124681" data-thread="123772"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C0560F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga33303932303136373833">  <a href = "/ga/res/123772.php#124679" onclick = "highlight(124679)">&gt;&gt;124679</a><br>Boyfriend, damnit! Get a god damned boyfriend!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/ga/res/123772.php#124684" onclick="highlight(124684);">&gt;&gt;</a></td> <td class="reply" id="reply124684"> <a id="124684"></a> <div class="replyheader"> 									 <span class="commentpostername">Edwin Dillyville</span>  - <span class="idhighlight">Mon, 20 Jan 2014 20:20:30 EST ID:f4cwVVmm</span> <span class="reflink">  <a href="/ga/res/123772.php#i124684">No.124684</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga33333235333838383238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124684', '123772')" title="Report Post 124684"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124684" data-thread="123772"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6959B6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga33333235333838383238">  <a href = "/ga/res/123772.php#124681" onclick = "highlight(124681)">&gt;&gt;124681</a><br>i dont want a boyfriend<br>normally im the heartbreaker of the situation and i have to break it off<br>the one time it happens to me it turns me into  a beta bitch on his knees   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="gathread124664"> <div class="thread_header"> <a id="124664"></a> <span class="filetitle">Gays trying to keep the black man down.</span>  <span class="inbetween"> by </span> <span class="postername">Fanny Cronningput</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 19 Jan 2014 14:18:56 EST ID:QVMWxD7u</span></span>  <span class="reflink"> <a href="/ga/res/124664.php#i124664">No.124664</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31343230363234313838')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('124664')" title="Report Thread 124664"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/ga/res/124664.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124664" data-thread="124664"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #52B838; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('gathread124664');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/ga/src/1390159136804.jpg"> 1390159136804.jpg </a> -(<em>22545 B, 500x500</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgga31343230363234313838" target="_blank" href="/ga/src/1390159136804.jpg"> <img src="/ga/thumb/1390159136804s.jpg" alt="22545" class="thumb" /> </a>   			 <blockquote class="opcomment ga31343230363234313838">  <a href="http://www.youtube.com/watch?v=nDFOOUXrxXM&amp;amp;feature=youtube_gdata" rel="nofollow" target="_blank">http://www.youtube.com/watch?v=nDFOOUXrxXM&amp;feature=youtube_gdata</a><br><br>Fucking lol.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/ga/res/124664.php#124682" onclick="highlight(124682);">&gt;&gt;</a></td> <td class="reply" id="reply124682"> <a id="124682"></a> <div class="replyheader"> 									 <span class="commentpostername">David Hinnerhall</span>  - <span class="idhighlight">Mon, 20 Jan 2014 13:41:21 EST ID:DMYg8n2u</span> <span class="reflink">  <a href="/ga/res/124664.php#i124682">No.124682</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('ga31383135353335313236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('124682', '124664')" title="Report Post 124682"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="124682" data-thread="124664"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #34E663; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="ga31383135353335313236">  His mannerisms make him seem like he&#39;s mentally ill or something. <br><br>He&#39;s definitely a little paranoid, and it looks like he&#39;s having a hard time keeping his thoughts together.<br><br>Not to say that there aren&#39;t people who believe what he believes who are completely sound of mind, but this guy just seems off.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://insomniacgamers.net"><img src="http://cdn.420chan.org/sp/i.png"></a>
		</div>
				<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/ga/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="ga" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">  <a href="/ga/16.php">&lt;&lt;Last</a>   <span style="font-size: +1;">Pages</span>   <a href="/ga/18.php">Next&gt;&gt;</a>  <br />   <a href="/ga/index.php">0</a>     <a href="/ga/1.php">1</a>     <a href="/ga/2.php">2</a>     <a href="/ga/3.php">3</a>     <a href="/ga/4.php">4</a>     <a href="/ga/5.php">5</a>     <a href="/ga/6.php">6</a>     <a href="/ga/7.php">7</a>     <a href="/ga/8.php">8</a>     <a href="/ga/9.php">9</a>     <a href="/ga/10.php">10</a>     <a href="/ga/11.php">11</a>     <a href="/ga/12.php">12</a>     <a href="/ga/13.php">13</a>     <a href="/ga/14.php">14</a>     <a href="/ga/15.php">15</a>     <a href="/ga/16.php">16</a>      17    <a href="/ga/18.php">18</a>     <a href="/ga/19.php">19</a>     <a href="/ga/20.php">20</a>     <a href="/ga/21.php">21</a>     <a href="/ga/22.php">22</a>     <a href="/ga/23.php">23</a>     <a href="/ga/24.php">24</a>     <a href="/ga/25.php">25</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3857037.php' class='boardlink'>Thread 3857037</a></span>
		<p>Interesting dirtsheet, although Cena wasn't exactly a guy you'd put the Rock against at Mania XX. Th... <a href='/wooo/res/3857037.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='wooo' src='/static/images/board_icons/wooo_icon_32.png' />
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3855218.php' class='boardlink'>Thread 3855218</a></span>
		<p>>>3857139
I suppose you could think so, if you had no appreciation for good old-fashioned wrestling... <a href='/wooo/res/3855218.php' class='boardlink'>&#8629;</a></p></li>
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

