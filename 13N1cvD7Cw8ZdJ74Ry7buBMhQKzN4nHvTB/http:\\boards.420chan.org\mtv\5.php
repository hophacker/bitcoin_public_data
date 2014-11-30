http://boards.420chan.org/mtv/5.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Sat, 26 Jul 2014 20:01:52 GMT
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/mtv/5.php';
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
	 <!--  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/mtv/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="mtv" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />     <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>  <tr> <td class="postblock">Name</td> <td> <input title="Name" type="text" name="field1" style="width:224px;" /> <div class="tooltip">  You can leave this blank to post anonymously, or you can create a Tripcode by using the float <b>Name#Password</b> </div>					 </td> </tr>    <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div>  <script type="text/javascript">set_inputs("postform")</script> <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 3000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> <li>This is a work-safe board. Posting adult images is forbidden.</li>			  </ul> </div> <hr style="margin-bottom:2px;" /> 	
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
 <hr style="margin-top:2px;" />  <div id="nowplaying"><p>Now Playing on /mtv/tube - <a id="nptitle" href="http://taima.tv/r/mtv"></a></p></div> <script type="text/javascript" charset="utf-8"> $(function(){ function update() { $.ajax({ dataType : 'json', type: "GET", url: "http://io.taima.tv/api/channels/mtv", success: function(server_response){ $( '#nptitle' ).text( server_response.mediatitle ); }                                       });                        return false     }; setInterval(update, 30000); update(); });  </script>  <form id="delform" action="/mtv/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="mtv" />    <div id="mtvthread290048"> <div class="thread_header"> <a id="290048"></a> <span class="filetitle">Legend of the Galactic Heroes</span>  <span class="inbetween"> by </span> <span class="postername">Dr. Egon Spengler</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 19 Jul 2014 04:35:46 EST ID:bU1Drwky</span></span>  <span class="reflink"> <a href="/mtv/res/290048.php#i290048">No.290048</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313337393935393632')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('290048')" title="Report Thread 290048"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/290048.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290048" data-thread="290048"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B26323; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread290048');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405758946626.gif"> 1405758946626.gif </a> -(<em>855334 B, 424x284</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv31313337393935393632" target="_blank" href="/mtv/src/1405758946626.gif"> <img src="/mtv/thumb/1405758946626s.jpg" alt="855334" class="thumb" /> </a>   			 <blockquote class="opcomment mtv31313337393935393632">  Anyone else love this show?  I&#39;m on my 4th re-watch (I re-watch every few years).  One of the best shows I&#39;ve ever seen.   </blockquote>   				 				  <span class="omittedposts">  4 posts and 2 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290048.php#290083" onclick="highlight(290083);">&gt;&gt;</a></td> <td class="reply" id="reply290083"> <a id="290083"></a> <div class="replyheader"> 									 <span class="commentpostername">Will Turner</span>  - <span class="idhighlight">Sat, 19 Jul 2014 11:52:21 EST ID:TPMlAYbS</span> <span class="reflink">  <a href="/mtv/res/290048.php#i290083">No.290083</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32303232373834323231')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290083', '290048')" title="Report Post 290083"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290083" data-thread="290048"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7467EA; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32303232373834323231">  Fucking oath. I love this show. The politics and the characters are still with me now. Yang Wen li and Reinhard von Lohengramm war in my mind for ideological dominance.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290048.php#290094" onclick="highlight(290094);">&gt;&gt;</a></td> <td class="reply" id="reply290094"> <a id="290094"></a> <div class="replyheader"> 									 <span class="commentpostername">Bolt Vanderhuge</span>  - <span class="idhighlight">Sat, 19 Jul 2014 15:37:47 EST ID:t+a52C85</span> <span class="reflink">  <a href="/mtv/res/290048.php#i290094">No.290094</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313239343036333833')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290094', '290048')" title="Report Post 290094"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290094" data-thread="290048"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A3C7F7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313239343036333833">  <a href = "/mtv/res/290048.php#290058" onclick = "highlight(290058)">&gt;&gt;290058</a><br>Fucking dandruff.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290048.php#290110" onclick="highlight(290110);">&gt;&gt;</a></td> <td class="reply" id="reply290110"> <a id="290110"></a> <div class="replyheader"> 									 <span class="commentpostername">Andrei Tarkovsky</span>  - <span class="idhighlight">Sat, 19 Jul 2014 18:48:59 EST ID:gxRYImup</span> <span class="reflink">  <a href="/mtv/res/290048.php#i290110">No.290110</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31363531373232363339')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290110', '290048')" title="Report Post 290110"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290110" data-thread="290048"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #104D12; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31363531373232363339">  It&#39;s one of the only times I&#39;ve seen a full scale galactic battle done correctly. I&#39;m tired of this bam, bam, it&#39;s over crap. I wanna see system wide battle fleets shearing off the edges of eachother in a brutal battle of attrition.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290048.php#290148" onclick="highlight(290148);">&gt;&gt;</a></td> <td class="reply" id="reply290148"> <a id="290148"></a> <div class="replyheader"> 									 <span class="commentpostername">Kelly LeBrock</span>  - <span class="idhighlight">Sat, 19 Jul 2014 22:36:39 EST ID:bU1Drwky</span> <span class="reflink">  <a href="/mtv/res/290048.php#i290148">No.290148</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313337393935393632')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290148', '290048')" title="Report Post 290148"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290148" data-thread="290048"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #27B5E7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405823799872.gif"> 1405823799872.gif </a> -(<em>656527 B, 434x283</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1405823799872.gif"> <img src="/mtv/thumb/1405823799872s.jpg" alt="656527" class="thumb" /> </a>    <blockquote  class="mtv31313337393935393632">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290048.php#290149" onclick="highlight(290149);">&gt;&gt;</a></td> <td class="reply" id="reply290149"> <a id="290149"></a> <div class="replyheader"> 									 <span class="commentpostername">Kelly LeBrock</span>  - <span class="idhighlight">Sat, 19 Jul 2014 22:48:04 EST ID:bU1Drwky</span> <span class="reflink">  <a href="/mtv/res/290048.php#i290149">No.290149</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313337393935393632')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290149', '290048')" title="Report Post 290149"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290149" data-thread="290048"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D79F2E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405824484872.png"> 1405824484872.png </a> -(<em>853318 B, 954x611</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1405824484872.png"> <img src="/mtv/thumb/1405824484872s.jpg" alt="853318" class="thumb" /> </a>    <blockquote  class="mtv31313337393935393632">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread290115"> <div class="thread_header"> <a id="290115"></a> <span class="filetitle">Eureka bothers me</span>  <span class="inbetween"> by </span> <span class="postername">Dr. Sam Beckett</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 19 Jul 2014 20:00:07 EST ID:Xh7itmlW</span></span>  <span class="reflink"> <a href="/mtv/res/290115.php#i290115">No.290115</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv363335323832383834')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('290115')" title="Report Thread 290115"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/290115.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290115" data-thread="290115"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DADEC1; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread290115');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405814407436.jpg"> 1405814407436.jpg </a> -(<em>14277 B, 320x180</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv363335323832383834" target="_blank" href="/mtv/src/1405814407436.jpg"> <img src="/mtv/thumb/1405814407436s.jpg" alt="14277" class="thumb" /> </a>   			 <blockquote class="opcomment mtv363335323832383834">  So, I&#39;m watching through Eureka, and I&#39;m right at season 3 episode 13.<br><br>But something has been getting worse.<br><br>The product placement.<br><br>It. Is. SEVERE.<br><br>Degree was the &quot;show sponsor&quot; of season 3. But it didn&#39;t stop there...   </blockquote>   				 				  <span class="omittedposts">  5 posts and 4 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290115.php#290123" onclick="highlight(290123);">&gt;&gt;</a></td> <td class="reply" id="reply290123"> <a id="290123"></a> <div class="replyheader"> 									 <span class="commentpostername">Dr. Sam Beckett</span>  - <span class="idhighlight">Sat, 19 Jul 2014 20:11:38 EST ID:Xh7itmlW</span> <span class="reflink">  <a href="/mtv/res/290115.php#i290123">No.290123</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv363335323832383834')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290123', '290115')" title="Report Post 290123"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290123" data-thread="290115"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #252AF3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405815098436.png"> 1405815098436.png </a> -(<em>252568 B, 624x352</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1405815098436.png"> <img src="/mtv/thumb/1405815098436s.jpg" alt="252568" class="thumb" /> </a>    <blockquote  class="mtv363335323832383834">  Highly advanced car that drives itself and is capable of intelligent human speech?<br><br>Powered by Logitech.<br><br><br>I don&#39;t even blame the sponsors. I blame the producers and writers for selling out.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290115.php#290129" onclick="highlight(290129);">&gt;&gt;</a></td> <td class="reply" id="reply290129"> <a id="290129"></a> <div class="replyheader"> 									 <span class="commentpostername">Xenia Seeberg</span>  - <span class="idhighlight">Sat, 19 Jul 2014 20:33:11 EST ID:V5SLO0VL</span> <span class="reflink">  <a href="/mtv/res/290115.php#i290129">No.290129</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313836393832363037')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290129', '290115')" title="Report Post 290129"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290129" data-thread="290115"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6C9E74; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313836393832363037">  Product placement has never bothered me. In fact, seeing a recognizable brand just helps immerse me in the world they&#39;ve built, whereas an obviously fake brand name takes me out of it. <br><br>The only time I have a problem is when they overdo it like name dropping a brand name five times in a single sentence or lingering the camera on a logo for a full minute. But if a character is sitting around and just happens to be drinking a Coke with the label turned toward the camera, I&#39;m cool with that.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290115.php#290130" onclick="highlight(290130);">&gt;&gt;</a></td> <td class="reply" id="reply290130"> <a id="290130"></a> <div class="replyheader"> 									 <span class="commentpostername">Frank Gallagher</span>  - <span class="idhighlight">Sat, 19 Jul 2014 20:33:38 EST ID:Zenpk6J/</span> <span class="reflink">  <a href="/mtv/res/290115.php#i290130">No.290130</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323034303838323736')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290130', '290115')" title="Report Post 290130"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290130" data-thread="290115"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4A9B21; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31323034303838323736">  I blame SciFi now SyFy for being a cheap fucking channel that forced producers to fund their show any way possible.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290115.php#290131" onclick="highlight(290131);">&gt;&gt;</a></td> <td class="reply" id="reply290131"> <a id="290131"></a> <div class="replyheader"> 									 <span class="commentpostername">Avery Bullock</span>  - <span class="idhighlight">Sat, 19 Jul 2014 20:49:30 EST ID:SYXN891/</span> <span class="reflink">  <a href="/mtv/res/290115.php#i290131">No.290131</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31393630393833393136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290131', '290115')" title="Report Post 290131"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290131" data-thread="290115"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B0616E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31393630393833393136">  <a href = "/mtv/res/290115.php#290130" onclick = "highlight(290130)">&gt;&gt;290130</a><br>This. Eureka was only cancelled due to budget cuts, not ratings issues. It cost too much money for them to produce once they went near broke from not having a mainstream hit anymore since BSG ended   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290115.php#290133" onclick="highlight(290133);">&gt;&gt;</a></td> <td class="reply" id="reply290133"> <a id="290133"></a> <div class="replyheader"> 									 <span class="commentpostername">Steven Speilberg</span>  - <span class="idhighlight">Sat, 19 Jul 2014 20:50:54 EST ID:HU6CVgVQ</span> <span class="reflink">  <a href="/mtv/res/290115.php#i290133">No.290133</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323132333538363436')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290133', '290115')" title="Report Post 290133"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290133" data-thread="290115"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D43B7B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31323132333538363436">  Thanks Morgan Spurlock......FUCK   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread283978"> <div class="thread_header"> <a id="283978"></a> <span class="filetitle">subject</span>  <span class="inbetween"> by </span> <span class="postername">MacReady</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 02 Jun 2014 08:54:29 EST ID:hNRVawsI</span></span>  <span class="reflink"> <a href="/mtv/res/283978.php#i283978">No.283978</a> </span>    			 <!--  - Awesome Thread? <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=283978&amp;vote=0">No!</a> | <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=283978&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv33363731343432393133')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('283978')" title="Report Thread 283978"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/283978.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="283978" data-thread="283978"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A51845; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread283978');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1401713669130.jpg"> 1401713669130.jpg </a> -(<em>59354 B, 504x573</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv33363731343432393133" target="_blank" href="/mtv/src/1401713669130.jpg"> <img src="/mtv/thumb/1401713669130s.jpg" alt="59354" class="thumb" /> </a>   			 <blockquote class="opcomment mtv33363731343432393133">  <blockquote class = "unkfunc">&gt; ha ha ha we are smarter than everyone else<br></blockquote>so sick of these shows   </blockquote>   				 				  <span class="omittedposts">  68 posts and 16 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/283978.php#290072" onclick="highlight(290072);">&gt;&gt;</a></td> <td class="reply" id="reply290072"> <a id="290072"></a> <div class="replyheader"> 									 <span class="commentpostername">Rick Grimes</span>  - <span class="idhighlight">Sat, 19 Jul 2014 09:33:35 EST ID:RweNhena</span> <span class="reflink">  <a href="/mtv/res/283978.php#i290072">No.290072</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313039333530383531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290072', '283978')" title="Report Post 290072"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290072" data-thread="283978"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #ADFD07; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313039333530383531">  <a href = "/mtv/res/283978.php#290068" onclick = "highlight(290068)">&gt;&gt;290068</a><br>If my country started censoring something, it would only make me more interested in it   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/283978.php#290076" onclick="highlight(290076);">&gt;&gt;</a></td> <td class="reply" id="reply290076"> <a id="290076"></a> <div class="replyheader"> 									 <span class="commentpostername">Donnie Darko</span>  - <span class="idhighlight">Sat, 19 Jul 2014 10:58:24 EST ID:iMMeEiTU</span> <span class="reflink">  <a href="/mtv/res/283978.php#i290076">No.290076</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313239323037323837')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290076', '283978')" title="Report Post 290076"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290076" data-thread="283978"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2DAFEB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313239323037323837">  <a href = "/mtv/res/283978.php#290065" onclick = "highlight(290065)">&gt;&gt;290065</a><br>..no, not really. it&#39;s satire on people like Bill o riley&#39;s character.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/283978.php#290124" onclick="highlight(290124);">&gt;&gt;</a></td> <td class="reply" id="reply290124"> <a id="290124"></a> <div class="replyheader"> 									 <span class="commentpostername">Master Roshi</span>  - <span class="idhighlight">Sat, 19 Jul 2014 20:11:51 EST ID:Y+1Vve7y</span> <span class="reflink">  <a href="/mtv/res/283978.php#i290124">No.290124</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv353333383535363434')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290124', '283978')" title="Report Post 290124"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290124" data-thread="283978"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3F7423; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv353333383535363434">  these shows always end up giving me a headache   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/283978.php#290125" onclick="highlight(290125);">&gt;&gt;</a></td> <td class="reply" id="reply290125"> <a id="290125"></a> <div class="replyheader"> 									 <span class="commentpostername">Master Roshi</span>  - <span class="idhighlight">Sat, 19 Jul 2014 20:13:09 EST ID:Y+1Vve7y</span> <span class="reflink">  <a href="/mtv/res/283978.php#i290125">No.290125</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv353333383535363434')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290125', '283978')" title="Report Post 290125"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290125" data-thread="283978"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EFB2B2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv353333383535363434">  <a href = "/mtv/res/283978.php#290072" onclick = "highlight(290072)">&gt;&gt;290072</a><br><br>like snuff films?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/283978.php#290127" onclick="highlight(290127);">&gt;&gt;</a></td> <td class="reply" id="reply290127"> <a id="290127"></a> <div class="replyheader"> 									 <span class="commentpostername">Gristle McThornbody</span>  - <span class="idhighlight">Sat, 19 Jul 2014 20:16:37 EST ID:RweNhena</span> <span class="reflink">  <a href="/mtv/res/283978.php#i290127">No.290127</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313039333530383531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290127', '283978')" title="Report Post 290127"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290127" data-thread="283978"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F46840; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313039333530383531">  <a href = "/mtv/res/283978.php#290125" onclick = "highlight(290125)">&gt;&gt;290125</a><br>Not snuff films or CP, but stuff like wikileaks and Stephen King&#39;s banned novel Rage that he wrote under a pen name   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread289156"> <div class="thread_header"> <a id="289156"></a> <span class="filetitle">Guy wants to fuck Nicole Bass on the Howard Stern show</span>  <span class="inbetween"> by </span> <span class="postername">Nicole Bass&#39;s asshole</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 10 Jul 2014 21:23:17 EST ID:/v4++Qru</span></span>  <span class="reflink"> <a href="/mtv/res/289156.php#i289156">No.289156</a> </span>    			 <!--  - Awesome Thread? <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=289156&amp;vote=0">No!</a> | <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=289156&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32393037373634323333')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('289156')" title="Report Thread 289156"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/289156.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289156" data-thread="289156"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C8851C; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread289156');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405041797875.jpg"> 1405041797875.jpg </a> -(<em>2789717 B, 2370x3282</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv32393037373634323333" target="_blank" href="/mtv/src/1405041797875.jpg"> <img src="/mtv/thumb/1405041797875s.jpg" alt="2789717" class="thumb" /> </a>   			 <blockquote class="opcomment mtv32393037373634323333">  Zachary Whetzel is scheduled to go on the The Howard Stern Show in a quest to make sweet love to ex-wrestler and female body builder Nicole Bass on July 15th, 2014. So Stephen Hensley and Stevie Looney sat down with Zack to talk about all the nasty details in this video (NSFW) So without further ado here is debauchery at it&#39;s finest! <a href="http://youtu.be/MBY0xDhuYRU" rel="nofollow" target="_blank">http://youtu.be/MBY0xDhuYRU</a>   </blockquote>   				 				  <span class="omittedposts">  16 posts and 2 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289156.php#290018" onclick="highlight(290018);">&gt;&gt;</a></td> <td class="reply" id="reply290018"> <a id="290018"></a> <div class="replyheader"> 									 <span class="commentpostername">Garth Algar</span>  - <span class="idhighlight">Fri, 18 Jul 2014 21:17:52 EST ID:DqbjLN0f</span> <span class="reflink">  <a href="/mtv/res/289156.php#i290018">No.290018</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv343032383634353538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290018', '289156')" title="Report Post 290018"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290018" data-thread="289156"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #414EA1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv343032383634353538">  The Nicole Bass thing was great.  My favorite part of it was her recording this introduction to the wrap up show:<br><br><a href="http://youtu.be/dVB8u5pIC_s?t=22m23s" rel="nofollow" target="_blank">http://youtu.be/dVB8u5pIC_s?t=22m23s</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289156.php#290020" onclick="highlight(290020);">&gt;&gt;</a></td> <td class="reply" id="reply290020"> <a id="290020"></a> <div class="replyheader"> 									 <span class="commentpostername">Rick Grimes</span>  - <span class="idhighlight">Fri, 18 Jul 2014 21:22:02 EST ID:RweNhena</span> <span class="reflink">  <a href="/mtv/res/289156.php#i290020">No.290020</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313039333530383531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290020', '289156')" title="Report Post 290020"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290020" data-thread="289156"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #88D984; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313039333530383531">  <a href = "/mtv/res/289156.php#290018" onclick = "highlight(290018)">&gt;&gt;290018</a><br>lol yeah, that made me chuckle at work when I first heard it. Yeah, she could probably beat the shit out of me, too. If I won, it would be from being faster and running away   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289156.php#290054" onclick="highlight(290054);">&gt;&gt;</a></td> <td class="reply" id="reply290054"> <a id="290054"></a> <div class="replyheader"> 									 <span class="commentpostername">John McClane</span>  - <span class="idhighlight">Sat, 19 Jul 2014 05:05:14 EST ID:ZwoNos4W</span> <span class="reflink">  <a href="/mtv/res/289156.php#i290054">No.290054</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313836313435393230')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290054', '289156')" title="Report Post 290054"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290054" data-thread="289156"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AF11BF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313836313435393230">  <a href = "/mtv/res/289156.php#289226" onclick = "highlight(289226)">&gt;&gt;289226</a><br><blockquote class = "unkfunc">&gt;Traditional Radio is dead anyways. Pretty much everyone I know prefers to just plug their ipods into the car stereo. <br></blockquote><br>what?<br>you mean people dont like being mind raped by ridiculous idiotic advertisements every few minutes?!?!<br>i wont believe it!<br>thats not the kind of world i want to live in!!!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289156.php#290092" onclick="highlight(290092);">&gt;&gt;</a></td> <td class="reply" id="reply290092"> <a id="290092"></a> <div class="replyheader"> 									 <span class="commentpostername">Dr. Egon Spengler</span>  - <span class="idhighlight">Sat, 19 Jul 2014 14:47:06 EST ID:bU1Drwky</span> <span class="reflink">  <a href="/mtv/res/289156.php#i290092">No.290092</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313337393935393632')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290092', '289156')" title="Report Post 290092"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290092" data-thread="289156"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EB38D2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313337393935393632">  Howard Stern is overrated and I often forget he exists.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289156.php#290093" onclick="highlight(290093);">&gt;&gt;</a></td> <td class="reply" id="reply290093"> <a id="290093"></a> <div class="replyheader"> 									 <span class="commentpostername">Rick Grimes</span>  - <span class="idhighlight">Sat, 19 Jul 2014 15:02:13 EST ID:RweNhena</span> <span class="reflink">  <a href="/mtv/res/289156.php#i290093">No.290093</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313039333530383531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290093', '289156')" title="Report Post 290093"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290093" data-thread="289156"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1CB087; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313039333530383531">  <a href = "/mtv/res/289156.php#290092" onclick = "highlight(290092)">&gt;&gt;290092</a><br>I still like him, and follow his show. But before, I really liked Howard himself. Now I more listen for the other cast members and out of habit. I can use headphones at work, which is when I listen. But I know so much of their history, that if I tried to switch to a different podcast or radio show, I worry I would be confused and not get their inside jokes, so I just stay where I am comfortable.<br><br>But I don&#39;t like how he has taken on a more &quot;serious&quot; image in order to make more Hollywood friends, and I have to skip over some interviews (although I try to hang in there with all of them, even when I could care less about the guest). And sometimes I have to fast forward when they talk tech for 20 minutes straight and it is clearly a paid promo for Apple where they are paid extra to pretend it isn&#39;t a commercial but something so important that it needs to be discussed on the air   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread289745"> <div class="thread_header"> <a id="289745"></a> <span class="filetitle">(The ) King of the Elves</span>  <span class="inbetween"> by </span> <span class="postername">Aeryn Sun</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 15 Jul 2014 19:41:27 EST ID:84kvISX4</span></span>  <span class="reflink"> <a href="/mtv/res/289745.php#i289745">No.289745</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313032393631363831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('289745')" title="Report Thread 289745"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/289745.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289745" data-thread="289745"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7B0ADF; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread289745');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405467687850.jpg"> 1405467687850.jpg </a> -(<em>13292 B, 255x197</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv31313032393631363831" target="_blank" href="/mtv/src/1405467687850.jpg"> <img src="/mtv/thumb/1405467687850s.jpg" alt="13292" class="thumb" /> </a>   			 <blockquote class="opcomment mtv31313032393631363831">  Anybody else interested in seeing this Disney film ever get made?<br><a href="http://en.wikipedia.org/wiki/The_King_of_the_Elves" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/The_King_of_the_Elves</a><br><br>I was actually quite looking forward to it (in 2011) after seeing some early animations, and then finding out it was actually based on a short story by Philip K. Dick. The mastermind behind such great stories like Minority Report, Total Recall, A Scanner Darkly, Blade Runner, and a number of others. <br>The interest has grown more over the recent days as I noticed that it now might have a possible release in... 2019 (LOL!). But at least it appears to not be completely shelved. I also like the people who are doing it (see the links below).<br><br><a href="http://disney.wikia.com/wiki/King_of_the_Elves" rel="nofollow" target="_blank">http://disney.wikia.com/wiki/King_of_the_Elves</a><br><a href="http://moviepilot.com/posts/2014/07/01/disney-s-king-of-the-elves-is-well-worth-waiting-for-1627827" rel="nofollow" target="_blank">http://moviepilot.com/posts/2014/07/01/disney-s-king-of-the-elves-is-well-worth-waiting-for-1627827</a><br><br>I&#39;ve been wanting to read Philip K Dick&#39;s stories and then watch the movies, which many I have not seen except for Minority Report and a Scanner Darkly, and only the first half of Blade Runner. <br><br>Also a Philip K Dick film thread in general. Which movies that aren&#39;t quite as popular or well known as the ones mentioned above are good? There&#39;s quite a few of them. And also which books would you recommend reading before the movie, and which ones after?   </blockquote>   				 				  <span class="omittedposts">  6 posts and 2 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289745.php#289916" onclick="highlight(289916);">&gt;&gt;</a></td> <td class="reply" id="reply289916"> <a id="289916"></a> <div class="replyheader"> 									 <span class="commentpostername">Montgomery Scott</span>  - <span class="idhighlight">Thu, 17 Jul 2014 19:07:27 EST ID:0pNIgO4B</span> <span class="reflink">  <a href="/mtv/res/289745.php#i289916">No.289916</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323832383932383733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289916', '289745')" title="Report Post 289916"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289916" data-thread="289745"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3B20F8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405638447908.jpg"> 1405638447908.jpg </a> -(<em>12731 B, 296x229</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1405638447908.jpg"> <img src="/mtv/thumb/1405638447908s.jpg" alt="12731" class="thumb" /> </a>    <blockquote  class="mtv31323832383932383733">  <a href = "/mtv/res/289745.php#289885" onclick = "highlight(289885)">&gt;&gt;289885</a><br>aw hellll yeah lem is great.<br><br>i like PKD&#39;s slightly schizophrenic drug-addled style though.<br><br>also there should be more william gibson movies... the only one i&#39;m aware of is johnny mnemonic which was... well... <br>keanu reeves and a cyborg dolphin...   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289745.php#290016" onclick="highlight(290016);">&gt;&gt;</a></td> <td class="reply" id="reply290016"> <a id="290016"></a> <div class="replyheader"> 									 <span class="commentpostername">John McClane</span>  - <span class="idhighlight">Fri, 18 Jul 2014 20:51:21 EST ID:ZwoNos4W</span> <span class="reflink">  <a href="/mtv/res/289745.php#i290016">No.290016</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313836313435393230')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290016', '289745')" title="Report Post 290016"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290016" data-thread="289745"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #67CABF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405731081720.jpg"> 1405731081720.jpg </a> -(<em>14995 B, 340x462</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1405731081720.jpg"> <img src="/mtv/thumb/1405731081720s.jpg" alt="14995" class="thumb" /> </a>    <blockquote  class="mtv31313836313435393230">  <a href = "/mtv/res/289745.php#289916" onclick = "highlight(289916)">&gt;&gt;289916</a><br>i think you mean MEL GIBSON not william gibson<br>.....william gibson isnt even a person ya idget   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289745.php#290038" onclick="highlight(290038);">&gt;&gt;</a></td> <td class="reply" id="reply290038"> <a id="290038"></a> <div class="replyheader"> 									 <span class="commentpostername">Theoden</span>  - <span class="idhighlight">Sat, 19 Jul 2014 01:55:40 EST ID:uf6ohnlT</span> <span class="reflink">  <a href="/mtv/res/289745.php#i290038">No.290038</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313937303933343738')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290038', '289745')" title="Report Post 290038"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290038" data-thread="289745"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AC7A76; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405749340994.jpg"> 1405749340994.jpg </a> -(<em>38746 B, 468x600</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1405749340994.jpg"> <img src="/mtv/thumb/1405749340994s.jpg" alt="38746" class="thumb" /> </a>    <blockquote  class="mtv31313937303933343738">  <a href = "/mtv/res/289745.php#290016" onclick = "highlight(290016)">&gt;&gt;290016</a><br><a href="http://en.wikipedia.org/wiki/William_Gibson" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/William_Gibson</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289745.php#290047" onclick="highlight(290047);">&gt;&gt;</a></td> <td class="reply" id="reply290047"> <a id="290047"></a> <div class="replyheader"> 									 <span class="commentpostername">Sopie Aldred</span>  - <span class="idhighlight">Sat, 19 Jul 2014 04:35:38 EST ID:84kvISX4</span> <span class="reflink">  <a href="/mtv/res/289745.php#i290047">No.290047</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313032393631363831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290047', '289745')" title="Report Post 290047"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290047" data-thread="289745"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D282E7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313032393631363831">  <a href = "/mtv/res/289745.php#289885" onclick = "highlight(289885)">&gt;&gt;289885</a><br><br>going to check this out. and am making it a goal to read his stories and watch the movies through the rest of the summer. i just don&#39;t want the movies to ruin the books or the books to make the less than good movies ruin the story of the books. so it&#39;s a hard decision to make with some of classics. so will probably just read minority report and take it from there.<br>--<br><br>Minority Report is probably one of my favorite films and definitely my favorite Tom Cruise film. have not seen it in quite a long time and will probably read the story and then of course watch the film after. thinking about reading &quot;Blade Runner&quot; next which almost positive that&#39;s not the name of the Philip K Dick story (as many of the book to movie titles are) and take it from there. as i would like to watch/read Blade Runner, and then probably both the old and new Total Recall (Remember Your Dreams for Wholesale.. whatever), and take it from there. <br>Reading the original story first and then movie or vice versa is kind of a hard one. i know The Lovely Bones was a fantastic book and the movie let me down in every way possible, which is one example i could sincerely almost recommending watching the movie first and then reading the book. but was many of the Philip K Dick&#39;s stories are rather short books or literally short stories, and think it&#39;s a bit of a toss up on which to do first or after. my natural instinct is to just read the story and then watch the film which is what i plan to do, except in the first case of reading Minority Report and then watching the movie again. i loved that movie. and think it will be a good way to start this whole thing off.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289745.php#290059" onclick="highlight(290059);">&gt;&gt;</a></td> <td class="reply" id="reply290059"> <a id="290059"></a> <div class="replyheader"> 									 <span class="commentpostername">Bruce Wayne</span>  - <span class="idhighlight">Sat, 19 Jul 2014 06:15:22 EST ID:RztOrJKI</span> <span class="reflink">  <a href="/mtv/res/289745.php#i290059">No.290059</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32393236353134363838')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290059', '289745')" title="Report Post 290059"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290059" data-thread="289745"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #306A08; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405764922654.jpg"> 1405764922654.jpg </a> -(<em>47840 B, 800x600</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1405764922654.jpg"> <img src="/mtv/thumb/1405764922654s.jpg" alt="47840" class="thumb" /> </a>    <blockquote  class="mtv32393236353134363838">  I&#39;ve actually just read PKD&#39;s &#39;King of the Elves&#39; about a month ago.  A bit surprised to see that Disney would make a film based on it though.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread290045"> <div class="thread_header"> <a id="290045"></a> <span class="filetitle">Colbert is actually a republican</span>  <span class="inbetween"> by </span> <span class="postername">Beavis</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 19 Jul 2014 04:18:12 EST ID:GN1fbS8j</span></span>  <span class="reflink"> <a href="/mtv/res/290045.php#i290045">No.290045</a> </span>    <img src="/static/images/locked.gif" style="vertical-align: middle" alt="Locked" />  			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323034373930373436')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('290045')" title="Report Thread 290045"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/290045.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290045" data-thread="290045"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5060DA; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread290045');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405757892189.jpg"> 1405757892189.jpg </a> -(<em>33125 B, 260x410</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv31323034373930373436" target="_blank" href="/mtv/src/1405757892189.jpg"> <img src="/mtv/thumb/1405757892189s.jpg" alt="33125" class="thumb" /> </a>   			 <blockquote class="opcomment mtv31323034373930373436">  Maybe the show changed him, but his true republicanism has really been coming out the past few weeks   </blockquote>    <div class="lock"> <div class="banimage"> <img src="/static/images/lock.png" alt="Locked" /> </div> <div class="banmessages"> <div class="banmsg"> Thread has been locked </div>  <div class="bannedby"> Thread was locked by: <span style="color: black">C_Higgy</span> </div> <div class="banreason"> Reason: <span style="color: black">/pol/</span> </div> </div>					 </div> 				 				       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290045.php#290052" onclick="highlight(290052);">&gt;&gt;</a></td> <td class="reply" id="reply290052"> <a id="290052"></a> <div class="replyheader"> 									 <span class="commentpostername">Douglas Faribanks Jr.</span>  - <span class="idhighlight">Sat, 19 Jul 2014 04:51:19 EST ID:5ZcvR61Q</span> <span class="reflink">  <a href="/mtv/res/290045.php#i290052">No.290052</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323036333436323733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290052', '290045')" title="Report Post 290052"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290052" data-thread="290045"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DA546C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31323036333436323733">  <a href = "/mtv/res/290045.php" onclick = "highlight(290045)">&gt;&gt;290045</a><br>You mean a he&#39;s not a DemoCrip, but a ReBloodlican?   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread289982"> <div class="thread_header"> <a id="289982"></a> <span class="filetitle">SNOWPIERCER</span>  <span class="inbetween"> by </span> <span class="postername">Nancy Botwin</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 18 Jul 2014 10:50:49 EST ID:vtprlIfJ</span></span>  <span class="reflink"> <a href="/mtv/res/289982.php#i289982">No.289982</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32333833313034393431')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('289982')" title="Report Thread 289982"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/289982.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289982" data-thread="289982"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #31CFB4; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread289982');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405695049466.jpg"> 1405695049466.jpg </a> -(<em>310573 B, 1024x682</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv32333833313034393431" target="_blank" href="/mtv/src/1405695049466.jpg"> <img src="/mtv/thumb/1405695049466s.jpg" alt="310573" class="thumb" /> </a>   			 <blockquote class="opcomment mtv32333833313034393431">  <blockquote class = "unkfunc">&gt;Check 4 pages back<br>&gt;No SNOWPIERCER thread<br></blockquote><br>Holy shit you guys. Holy shit. I just saw this film. This is the film you guys. This is the Jesus Christ of western cinema. <br>I don&#39;t know what you heard, but unless it was someone telling you to go see this movie you need to go whip them in the clit. <br>I know what you&#39;re thinking. you saw the trailer, this shit looks stupid. Well I thought so too. And it is! But in a USEFUL way! This movie is like Metropolis + Cube! All Art, All Intense, All the time.<br>In the future, the earth is destroyed, except for everybody on <em>The Train.</em> Fuck you. You don&#39;t like it? Fuck you. Nothing stop the train.<br>It stars Chris Evans as <strong>THE FUCKING REVOLUTION.</strong> He&#39;s here to drag your unwashed, de-educated proletarian ass to the front of the train, because he is Abraham Jesus Spartacus Ghandi and I refuse to take his dick out of my mouth.<br>Remember how good it felt watching and original and well crafted film like Pandorum? FUCK PANDORUM! Watch Snowpiercer! Every fucking shot  in this shit is art. Go get fuckblasted on some edibles and see this in IMAX if you can. This is the most entertaining, imaginative, awesome, satisfying cinematic undertaking in recent history. <br>See Snowpiercer. Get good with The Lord.   </blockquote>   				 				  <span class="omittedposts">  4 posts and 2 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289982.php#290000" onclick="highlight(290000);">&gt;&gt;</a></td> <td class="reply" id="reply290000"> <a id="290000"></a> <div class="replyheader"> 									 <span class="commentpostername">Ingmar Bergman</span>  - <span class="idhighlight">Fri, 18 Jul 2014 17:02:54 EST ID:puc4od3k</span> <span class="reflink">  <a href="/mtv/res/289982.php#i290000">No.290000</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv33333235343230323735')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290000', '289982')" title="Report Post 290000"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290000" data-thread="289982"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1D6FBA; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv33333235343230323735">  <a href = "/mtv/res/289982.php" onclick = "highlight(289982)">&gt;&gt;289982</a><br><blockquote class = "unkfunc">&gt;This is the Jesus Christ of western cinema. <br></blockquote><br>Should we tell OP that the movie is actually <span class="spoiler" onmouseover=""><span>Korean</span></span>?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289982.php#290001" onclick="highlight(290001);">&gt;&gt;</a></td> <td class="reply" id="reply290001"> <a id="290001"></a> <div class="replyheader"> 									 <span class="commentpostername">Tom Baker</span>  - <span class="idhighlight">Fri, 18 Jul 2014 17:25:59 EST ID:nD9UoWNc</span> <span class="reflink">  <a href="/mtv/res/289982.php#i290001">No.290001</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32303737343634393136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290001', '289982')" title="Report Post 290001"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290001" data-thread="289982"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #999933; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32303737343634393136">  I think OP may just be a little too exciteable. Snowpiercer is not going to be sparking any shifts in the balance of inter-geographic-socio-political power.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289982.php#290022" onclick="highlight(290022);">&gt;&gt;</a></td> <td class="reply" id="reply290022"> <a id="290022"></a> <div class="replyheader"> 									 <span class="commentpostername">Jackie Brown</span>  - <span class="idhighlight">Fri, 18 Jul 2014 21:32:20 EST ID:nUPmd3sr</span> <span class="reflink">  <a href="/mtv/res/289982.php#i290022">No.290022</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv33353133383334363131')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290022', '289982')" title="Report Post 290022"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290022" data-thread="289982"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3325FF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv33353133383334363131">  It was highly entertaining, and wonderfully bizarre, but let&#39;s not oversell it OP. Everyone either thinks this movie is total dogshit or the second coming of Christ, but it&#39;s really neither. It&#39;s basically uses the graphic novel source material to make a lovingly crafted homage to B-movie pulp sci-fi. The premise is ridiculous, and the characters are over the top, but it doesn&#39;t matter because everyone is having fun, and it&#39;s more about the parable than the premise.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289982.php#290046" onclick="highlight(290046);">&gt;&gt;</a></td> <td class="reply" id="reply290046"> <a id="290046"></a> <div class="replyheader"> 									 <span class="commentpostername">Andrei Tarkovsky</span>  - <span class="idhighlight">Sat, 19 Jul 2014 04:25:02 EST ID:gxRYImup</span> <span class="reflink">  <a href="/mtv/res/289982.php#i290046">No.290046</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31363531373232363339')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290046', '289982')" title="Report Post 290046"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290046" data-thread="289982"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9B4C30; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31363531373232363339">  <a href = "/mtv/res/289982.php" onclick = "highlight(289982)">&gt;&gt;289982</a><br><br>OP of the last Snowpiercer thread here. I&#39;m gonna assume you didn&#39;t do a good job.<br><br>This is now a metropolis thread. Here is the full movie.<br><br><a href="http://www.youtube.com/watch?v=MBbvzrTSTWQ" rel="nofollow" target="_blank">http://www.youtube.com/watch?v=MBbvzrTSTWQ</a><br><br><br>Fuck, man. I also liked pandorum. If I see you near my house again I&#39;ma bust a cap in your ass.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289982.php#290050" onclick="highlight(290050);">&gt;&gt;</a></td> <td class="reply" id="reply290050"> <a id="290050"></a> <div class="replyheader"> 									 <span class="commentpostername">Douglas Faribanks Jr.</span>  - <span class="idhighlight">Sat, 19 Jul 2014 04:45:58 EST ID:5ZcvR61Q</span> <span class="reflink">  <a href="/mtv/res/289982.php#i290050">No.290050</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323036333436323733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290050', '289982')" title="Report Post 290050"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290050" data-thread="289982"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BFF536; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31323036333436323733">  <a href = "/mtv/res/289982.php#290046" onclick = "highlight(290046)">&gt;&gt;290046</a><br>I agree, Pandorum was fucking awesome. <br><br><a href = "/mtv/res/289982.php" onclick = "highlight(289982)">&gt;&gt;289982</a> <br>Seriously OP? Snowpiercer was majorly trippy and suspensful, but the explanations and inconsistencies were just retarded. And that fucking ending... <br><br>ON the subject though, I have a friend on FB that always expresses how far superior the PS4 is and shit.. <br>His post was about how &quot;hurr durr, On PS4 you can rent movies that aren&#39;t even out yet! I&#39;m watching Snowpiercer on my PS4!&quot; <br>I straight up said, &quot;dude that movie&#39;s been out on DVD for at least 3 months now.&quot; <br>He&#39;s like &quot;nut uh dude, it just came out in theaters 3 weeks ago&quot; <br>I could have posted the IMDB page, but this is the kind of guy you just have to let think he&#39;s right, because he will fight you to the death even when he&#39;s dead wrong.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread290008"> <div class="thread_header"> <a id="290008"></a> <span class="filetitle">big brother</span>  <span class="inbetween"> by </span> <span class="postername">Bruce Willis</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 18 Jul 2014 18:12:11 EST ID:eTpDhY3z</span></span>  <span class="reflink"> <a href="/mtv/res/290008.php#i290008">No.290008</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32393136303136393033')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('290008')" title="Report Thread 290008"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/290008.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290008" data-thread="290008"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #36F6DA; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread290008');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405721531854.jpg"> 1405721531854.jpg </a> -(<em>28408 B, 560x325</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv32393136303136393033" target="_blank" href="/mtv/src/1405721531854.jpg"> <img src="/mtv/thumb/1405721531854s.jpg" alt="28408" class="thumb" /> </a>   			 <blockquote class="opcomment mtv32393136303136393033">  is this show for real?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290008.php#290012" onclick="highlight(290012);">&gt;&gt;</a></td> <td class="reply" id="reply290012"> <a id="290012"></a> <div class="replyheader"> 									 <span class="commentpostername">Alan Ball</span>  - <span class="idhighlight">Fri, 18 Jul 2014 18:55:12 EST ID:H6I3YD+2</span> <span class="reflink">  <a href="/mtv/res/290008.php#i290012">No.290012</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv343039363639333332')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290012', '290008')" title="Report Post 290012"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290012" data-thread="290008"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5EF0D9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv343039363639333332">  in what sense? It&#39;s a real show on TV yes.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290008.php#290015" onclick="highlight(290015);">&gt;&gt;</a></td> <td class="reply" id="reply290015"> <a id="290015"></a> <div class="replyheader"> 									 <span class="commentpostername">Chippy</span>  - <span class="idhighlight">Fri, 18 Jul 2014 20:46:40 EST ID:nD9UoWNc</span> <span class="reflink">  <a href="/mtv/res/290008.php#i290015">No.290015</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32303737343634393136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290015', '290008')" title="Report Post 290015"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290015" data-thread="290008"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #080E49; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32303737343634393136">  Is that Interpol?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290008.php#290025" onclick="highlight(290025);">&gt;&gt;</a></td> <td class="reply" id="reply290025"> <a id="290025"></a> <div class="replyheader"> 									 <span class="commentpostername">Logan Cale</span>  - <span class="idhighlight">Fri, 18 Jul 2014 21:52:57 EST ID:3fmS0GeX</span> <span class="reflink">  <a href="/mtv/res/290008.php#i290025">No.290025</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv383438363133313333')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290025', '290008')" title="Report Post 290025"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290025" data-thread="290008"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #01A66B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv383438363133313333">  <a href = "/mtv/res/290008.php#290015" onclick = "highlight(290015)">&gt;&gt;290015</a><br>Interpol in water?<br><br>Hah.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290008.php#290041" onclick="highlight(290041);">&gt;&gt;</a></td> <td class="reply" id="reply290041"> <a id="290041"></a> <div class="replyheader"> 									 <span class="commentpostername">INTERPOL</span> <span class="postertrip">!3mB4iDBpWw</span> - <span class="idhighlight">Sat, 19 Jul 2014 03:33:28 EST ID:PXA1Ixaa</span> <span class="reflink">  <a href="/mtv/res/290008.php#i290041">No.290041</a>   </span>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290041', '290008')" title="Report Post 290041"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290041" data-thread="290008"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #463D9D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote >  <a href = "/mtv/res/290008.php#290025" onclick = "highlight(290025)">&gt;&gt;290025</a><br><br>I like water, I&#39;m not scared. But that isn&#39;t me, his hair isn&#39;t falling out and he doesn&#39;t even lift.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/290008.php#290062" onclick="highlight(290062);">&gt;&gt;</a></td> <td class="reply" id="reply290062"> <a id="290062"></a> <div class="replyheader"> 									 <span class="commentpostername">Chippy</span>  - <span class="idhighlight">Sat, 19 Jul 2014 07:28:16 EST ID:nD9UoWNc</span> <span class="reflink">  <a href="/mtv/res/290008.php#i290062">No.290062</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32303737343634393136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290062', '290008')" title="Report Post 290062"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290062" data-thread="290008"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FC1B33; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32303737343634393136">  <a href = "/mtv/res/290008.php#290041" onclick = "highlight(290041)">&gt;&gt;290041</a><br>You think you could take him in a fight? On land or underwater.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread289432"> <div class="thread_header"> <a id="289432"></a> <span class="filetitle">Weird as shit but intriguing movies</span>  <span class="inbetween"> by </span> <span class="postername">Pam Poovey</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 13 Jul 2014 03:13:26 EST ID:dAQlt6HX</span></span>  <span class="reflink"> <a href="/mtv/res/289432.php#i289432">No.289432</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31323736343639373433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('289432')" title="Report Thread 289432"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/289432.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289432" data-thread="289432"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C6272F; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread289432');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405235606673.gif"> 1405235606673.gif </a> -(<em>756515 B, 247x200</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv31323736343639373433" target="_blank" href="/mtv/src/1405235606673.gif"> <img src="/mtv/thumb/1405235606673s.jpg" alt="756515" class="thumb" /> </a>   			 <blockquote class="opcomment mtv31323736343639373433">  Hi there. I have tomorrow off and plan to fill my stomach with fattening foods and infect my mind with horrible, awesome films all day. <br>I&#39;m looking for movies like Under The Skin and Antiviral, with horrific and interesting imagery that I can smoke to <br>Any suggestions?   </blockquote>   				 				  <span class="omittedposts">  5 posts and 4 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289432.php#289789" onclick="highlight(289789);">&gt;&gt;</a></td> <td class="reply" id="reply289789"> <a id="289789"></a> <div class="replyheader"> 									 <span class="commentpostername">Patty Hewes</span>  - <span class="idhighlight">Wed, 16 Jul 2014 00:03:44 EST ID:H8u98nXi</span> <span class="reflink">  <a href="/mtv/res/289432.php#i289789">No.289789</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv33333837343035313439')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289789', '289432')" title="Report Post 289789"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289789" data-thread="289432"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3E60E4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv33333837343035313439">  I was about to suggest under the skin lol. <br><br>I thought videodrome&#39;s special effects were amazing, moreso than nowaday horror movies.<br><br>You should totally watch Polanski&#39;s &#39;Le locataire&#39;. Amazing, weird, horrible, trippy and from the 70&#39;s<br><br>You could watch Begotten too. Weird as fuck, and really disgusting. I second all of Sarah-jane&#39;s suggestions though, great movies   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289432.php#290031" onclick="highlight(290031);">&gt;&gt;</a></td> <td class="reply" id="reply290031"> <a id="290031"></a> <div class="replyheader"> 									 <span class="commentpostername">Viserys Targaryen</span>  - <span class="idhighlight">Fri, 18 Jul 2014 22:52:22 EST ID:S9/hWUS7</span> <span class="reflink">  <a href="/mtv/res/289432.php#i290031">No.290031</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv33333235303934363534')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290031', '289432')" title="Report Post 290031"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290031" data-thread="289432"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CB1642; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv33333235303934363534">  <a href = "/mtv/res/289432.php#289692" onclick = "highlight(289692)">&gt;&gt;289692</a><br><blockquote class = "unkfunc">&gt;&gt;Bad Boy Bubby<br></blockquote><br>Holy shit that was awesome. Thank you.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289432.php#290032" onclick="highlight(290032);">&gt;&gt;</a></td> <td class="reply" id="reply290032"> <a id="290032"></a> <div class="replyheader"> 									 <span class="commentpostername">Akira</span>  - <span class="idhighlight">Fri, 18 Jul 2014 23:19:11 EST ID:jXN6tzFW</span> <span class="reflink">  <a href="/mtv/res/289432.php#i290032">No.290032</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313532323936313238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290032', '289432')" title="Report Post 290032"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290032" data-thread="289432"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A2A6F0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405739951301.jpg"> 1405739951301.jpg </a> -(<em>53276 B, 270x400</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/mtv/src/1405739951301.jpg"> <img src="/mtv/thumb/1405739951301s.jpg" alt="53276" class="thumb" /> </a>    <blockquote  class="mtv31313532323936313238">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289432.php#290033" onclick="highlight(290033);">&gt;&gt;</a></td> <td class="reply" id="reply290033"> <a id="290033"></a> <div class="replyheader"> 									 <span class="commentpostername">Akira</span>  - <span class="idhighlight">Fri, 18 Jul 2014 23:20:04 EST ID:jXN6tzFW</span> <span class="reflink">  <a href="/mtv/res/289432.php#i290033">No.290033</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313532323936313238')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290033', '289432')" title="Report Post 290033"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290033" data-thread="289432"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9489F8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313532323936313238">  <a href = "/mtv/res/289432.php#290032" onclick = "highlight(290032)">&gt;&gt;290032</a><br><br>oops, wrong thread. but at least i thought boogie nights was weird.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289432.php#290034" onclick="highlight(290034);">&gt;&gt;</a></td> <td class="reply" id="reply290034"> <a id="290034"></a> <div class="replyheader"> 									 <span class="commentpostername">Sterling Archer</span>  - <span class="idhighlight">Fri, 18 Jul 2014 23:25:47 EST ID:SqB8W1fq</span> <span class="reflink">  <a href="/mtv/res/289432.php#i290034">No.290034</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31333637363633373831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290034', '289432')" title="Report Post 290034"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290034" data-thread="289432"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #39FE1B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31333637363633373831">  <a href = "/mtv/res/289432.php#289690" onclick = "highlight(289690)">&gt;&gt;289690</a><br>Your link reminded me of this film<br><blockquote class = "unkfunc">&gt;Uncle Boonmee Who Can Recall His Past Lives <br></blockquote>I didn&#39;t really get it, people who seem to know more about film than me claim it&#39;s a masterpiece.<br>IDK, but I imagine it&#39;s got what you are looking for, OP.<br><br>Continuing with the Asian vibe, you&#39;d probably be really into &quot;The boxers omen&quot; Aka &quot;Bo&quot;. <a href="https://www.youtube.com/watch?v=sj9KNEF471U" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=sj9KNEF471U</a><br>It&#39;s Absolute madness. Pretty gory too, but it&#39;s a little like Hausu in that you get the impression the film makers didn&#39;t know what they were doing and just did all this crazy experimental shit that ended up working. I&#39;d seriously recommend this.<br><br>You might also be interested in the work of Marcel Jankovics. He&#39;s produced a number of experimental Hungarian animations. The most visual of which is Feherlofia - <a href="https://www.youtube.com/watch?v=kq1nOAFCvaE" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=kq1nOAFCvaE</a> . It&#39;s based on the ancient Hungarian tribes genesis story, so it&#39;s all pretty mad. Just skip about that link and you&#39;ll see it gets almost TOO psychedelic at times. Sounds cheesy but it&#39;s probably the only movie I&#39;ve seen that manages to accurately represent LSD visuals. Especially when things transform into reflections of themselves.<br><br>He also did a 3 and a half hour long Masterpiece called &quot;The tragedy of Man&quot;. But that&#39;s really difficult. It&#39;s got some of the most incredibly visuals ever but it&#39;s based of a epic Hungarian Poem and is a bit of a chore to get through.<br><br>Another good animation would be Angels Egg, which is pretty good. Very esoteric though. Not entirely sure  I got that one either.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread285621"> <div class="thread_header"> <a id="285621"></a> <span class="filetitle">Hemlock Grove</span>  <span class="inbetween"> by </span> <span class="postername">Leeloo</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 12 Jun 2014 04:11:57 EST ID:uUONgQfr</span></span>  <span class="reflink"> <a href="/mtv/res/285621.php#i285621">No.285621</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv33343830363230303838')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('285621')" title="Report Thread 285621"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/285621.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="285621" data-thread="285621"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A4EAAF; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread285621');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1402560717095.jpg"> 1402560717095.jpg </a> -(<em>6305 B, 300x168</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv33343830363230303838" target="_blank" href="/mtv/src/1402560717095.jpg"> <img src="/mtv/thumb/1402560717095s.jpg" alt="6305" class="thumb" /> </a>   			 <blockquote class="opcomment mtv33343830363230303838">  Considering that I literally just finished watching Season One today, and am utterly mindfucked, can we get a Hemlock Grove thread going in here?<br><br>Predictions for Season Two?   </blockquote>   				 				  <span class="omittedposts">   11 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/285621.php#289693" onclick="highlight(289693);">&gt;&gt;</a></td> <td class="reply" id="reply289693"> <a id="289693"></a> <div class="replyheader"> 									 <span class="commentpostername">Ed Tom Bell</span>  - <span class="idhighlight">Tue, 15 Jul 2014 06:27:53 EST ID:oAn/nUtx</span> <span class="reflink">  <a href="/mtv/res/285621.php#i289693">No.289693</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32353335323038303935')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289693', '285621')" title="Report Post 289693"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289693" data-thread="285621"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #83ED73; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32353335323038303935">  I&#39;m watching it. It&#39;s far more focused than the first season, it took less time to get into it this time. <br>The situations are well defined and I&#39;m very curious how they&#39;ll get resolved, especially <span class="spoiler" onmouseover=""><span>Glow Worm&#39;s fate and Roman&#39;s power play with Bryce, and Bryce&#39;s plans for the company, especially after episode 5</span></span>.<br><br>The only meh thing is that there&#39;s supposed to be a main plotline not directly connected to the characters, about a serial killer, but I&#39;m on episode 5 and they haven&#39;t done much with it.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/285621.php#289744" onclick="highlight(289744);">&gt;&gt;</a></td> <td class="reply" id="reply289744"> <a id="289744"></a> <div class="replyheader"> 									 <span class="commentpostername">Ed Tom Bell</span>  - <span class="idhighlight">Tue, 15 Jul 2014 19:32:21 EST ID:oAn/nUtx</span> <span class="reflink">  <a href="/mtv/res/285621.php#i289744">No.289744</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32353335323038303935')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289744', '285621')" title="Report Post 289744"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289744" data-thread="285621"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #15D1BE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32353335323038303935">  <a href = "/mtv/res/285621.php#289693" onclick = "highlight(289693)">&gt;&gt;289693</a><br><br>Well that ended with a bang.<br>This season is really much better than the first, having already established characters and backstories really helped with the pace, the first one felt like pointless filler much of the time.<br>Here instead there&#39;s much more action and purpose. A lot more gore too IIRC.<br><br>I&#39;m actually really looking forward for the next season, I have no idea what the status quo will be, for the single characters and the group dynamic as well.<br><br>I don&#39;t know what to say without spoiling, but if you even liked the potential the first had, give this season a chance. As OP said, it&#39;s a mindfuck, and it doesn&#39;t mind killing characters and turning situations dramatically around. Also, and this is a soft spot for me, monsters here are actually conscious of the effects their urges have on the world around them, and tackle them, try to work with them, instead of just being victims to them, or even glorify them. Hard to find a show like this..   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/285621.php#289831" onclick="highlight(289831);">&gt;&gt;</a></td> <td class="reply" id="reply289831"> <a id="289831"></a> <div class="replyheader"> 									 <span class="commentpostername">Nite Owl II</span>  - <span class="idhighlight">Wed, 16 Jul 2014 14:27:43 EST ID:H6I3YD+2</span> <span class="reflink">  <a href="/mtv/res/285621.php#i289831">No.289831</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv343039363639333332')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289831', '285621')" title="Report Post 289831"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289831" data-thread="285621"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8E9E60; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv343039363639333332">  I&#39;m halfway through season 2. It&#39;s decent enough, but I wouldn&#39;t be bothering with it if there weren&#39;t such a lack of other good horror stuff on Netflix at the moment. As another poster said, good acting, good production, cheeseball plot. <br><br>It feels like they&#39;re trying to cover too many bases at the same time. Like they&#39;re trying to pull in the Ann Rice, Twilight crowd while also trying to appeal to more hardcore horror fans. It just feels all over the place. They need to settle on a set of lore and stick with it. It&#39;s like they&#39;re afraid to develope any of the characters past a certain point. <br><br>Like why the fuck is Peter a werewolf? And why is he just totally cool with it? Are all gypsies secretly werewolfs?<br><br>The show has real potential but they&#39;re not using hardly any of it.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/285621.php#289876" onclick="highlight(289876);">&gt;&gt;</a></td> <td class="reply" id="reply289876"> <a id="289876"></a> <div class="replyheader"> 									 <span class="commentpostername">Ricky Bobby</span>  - <span class="idhighlight">Thu, 17 Jul 2014 02:14:39 EST ID:OYSkIIZm</span> <span class="reflink">  <a href="/mtv/res/285621.php#i289876">No.289876</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv343130373834393836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289876', '285621')" title="Report Post 289876"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289876" data-thread="285621"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4EB2CC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv343130373834393836">  I love this show. Every time Roman smokes a cigarette I have to smoke a cigarette because he is such a badass   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/285621.php#290013" onclick="highlight(290013);">&gt;&gt;</a></td> <td class="reply" id="reply290013"> <a id="290013"></a> <div class="replyheader"> 									 <span class="commentpostername">Akira Kurosawa</span>  - <span class="idhighlight">Fri, 18 Jul 2014 19:15:52 EST ID:jzzmdaxr</span> <span class="reflink">  <a href="/mtv/res/285621.php#i290013">No.290013</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313533333331393439')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290013', '285621')" title="Report Post 290013"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290013" data-thread="285621"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AFF737; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313533333331393439">  <a href = "/mtv/res/285621.php" onclick = "highlight(285621)">&gt;&gt;285621</a><br>Does anyone have a gif of <span class="spoiler" onmouseover=""><span>Peter transforming for the drug dealers and touching the dudes face</span></span>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread286762"> <div class="thread_header"> <a id="286762"></a> <span class="filetitle">subject</span>  <span class="inbetween"> by </span> <span class="postername">Master Shake-Zula</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 19 Jun 2014 21:05:00 EST ID:MDjQYvYL</span></span>  <span class="reflink"> <a href="/mtv/res/286762.php#i286762">No.286762</a> </span>    			 <!--  - Awesome Thread? <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=286762&amp;vote=0">No!</a> | <a href="/mtv/taimaba.pl?board=mtv&amp;task=vote&amp;thread=286762&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv33303736303734303837')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('286762')" title="Report Thread 286762"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/286762.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="286762" data-thread="286762"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2E6ECE; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread286762');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1403226300171.jpg"> 1403226300171.jpg </a> -(<em>139949 B, 954x763</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv33303736303734303837" target="_blank" href="/mtv/src/1403226300171.jpg"> <img src="/mtv/thumb/1403226300171s.jpg" alt="139949" class="thumb" /> </a>   			 <blockquote class="opcomment mtv33303736303734303837">  What is the best Adventure Time episode? Pic related.   </blockquote>   				 				  <span class="omittedposts">  92 posts and 19 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/286762.php#289976" onclick="highlight(289976);">&gt;&gt;</a></td> <td class="reply" id="reply289976"> <a id="289976"></a> <div class="replyheader"> 									 <span class="commentpostername">Tom Baker</span>  - <span class="idhighlight">Fri, 18 Jul 2014 08:45:17 EST ID:nD9UoWNc</span> <span class="reflink">  <a href="/mtv/res/286762.php#i289976">No.289976</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32303737343634393136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289976', '286762')" title="Report Post 289976"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289976" data-thread="286762"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D5DDFD; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32303737343634393136">  <a href = "/mtv/res/286762.php#289969" onclick = "highlight(289969)">&gt;&gt;289969</a><br>why is it called that?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/286762.php#289992" onclick="highlight(289992);">&gt;&gt;</a></td> <td class="reply" id="reply289992"> <a id="289992"></a> <div class="replyheader"> 									 <span class="commentpostername">Joel Coen</span>  - <span class="idhighlight">Fri, 18 Jul 2014 14:55:50 EST ID:RweNhena</span> <span class="reflink">  <a href="/mtv/res/286762.php#i289992">No.289992</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313039333530383531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289992', '286762')" title="Report Post 289992"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289992" data-thread="286762"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #628C17; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313039333530383531">  <a href = "/mtv/res/286762.php#289976" onclick = "highlight(289976)">&gt;&gt;289976</a><br>Because &quot;Puhoy&quot; was Finn&#39;s last word before dying. What that could mean, I would have to take DMT to tell you   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/286762.php#289998" onclick="highlight(289998);">&gt;&gt;</a></td> <td class="reply" id="reply289998"> <a id="289998"></a> <div class="replyheader"> 									 <span class="commentpostername">Robbie Coltrane</span>  - <span class="idhighlight">Fri, 18 Jul 2014 15:46:39 EST ID:7DrrvYds</span> <span class="reflink">  <a href="/mtv/res/286762.php#i289998">No.289998</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313639353035363431')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289998', '286762')" title="Report Post 289998"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289998" data-thread="286762"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #48F7A0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313639353035363431">  <a href = "/mtv/res/286762.php#289976" onclick = "highlight(289976)">&gt;&gt;289976</a><br><a href = "/mtv/res/286762.php#289992" onclick = "highlight(289992)">&gt;&gt;289992</a><br>&quot;puhoy&quot; was the pillow world&#39;s version of &quot;ahoy&quot;<br>Quilten says it at least once as a greeting   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/286762.php#290002" onclick="highlight(290002);">&gt;&gt;</a></td> <td class="reply" id="reply290002"> <a id="290002"></a> <div class="replyheader"> 									 <span class="commentpostername">Tom Baker</span>  - <span class="idhighlight">Fri, 18 Jul 2014 17:28:13 EST ID:nD9UoWNc</span> <span class="reflink">  <a href="/mtv/res/286762.php#i290002">No.290002</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32303737343634393136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290002', '286762')" title="Report Post 290002"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290002" data-thread="286762"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #02F473; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32303737343634393136">  <a href = "/mtv/res/286762.php#289998" onclick = "highlight(289998)">&gt;&gt;289998</a><br>ah. Good work gang, myth busted   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/286762.php#290009" onclick="highlight(290009);">&gt;&gt;</a></td> <td class="reply" id="reply290009"> <a id="290009"></a> <div class="replyheader"> 									 <span class="commentpostername">Girly</span> <span class="postertrip">!Me3zULnuD.</span> - <span class="idhighlight">Fri, 18 Jul 2014 18:29:23 EST ID:D1MrRToR</span> <span class="reflink">  <a href="/mtv/res/286762.php#i290009">No.290009</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31363633323639383730')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('290009', '286762')" title="Report Post 290009"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="290009" data-thread="286762"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #665715; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31363633323639383730">  So... Who else here totally wanted to go to pillow world, and get a pillow wife?   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="mtvthread289892"> <div class="thread_header"> <a id="289892"></a> <span class="filetitle">Married &amp; You&#39;re the Worst</span>  <span class="inbetween"> by </span> <span class="postername">C-Higgy </span> <span class="postertrip">!lfsExjBfzE</span> <span class="inbetween"> - <span class="idhighlight">Thu, 17 Jul 2014 15:35:06 EST ID:v02TrAUC</span></span>  <span class="reflink"> <a href="/mtv/res/289892.php#i289892">No.289892</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31363237333635383633')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('289892')" title="Report Thread 289892"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/mtv/res/289892.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289892" data-thread="289892"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #092159; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('mtvthread289892');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/mtv/src/1405625706711.jpg"> 1405625706711.jpg </a> -(<em>709389 B, 999x666</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgmtv31363237333635383633" target="_blank" href="/mtv/src/1405625706711.jpg"> <img src="/mtv/thumb/1405625706711s.jpg" alt="709389" class="thumb" /> </a>   			 <blockquote class="opcomment mtv31363237333635383633">  Married is about being miserably in love. Russ (Nat Faxon) and Lina Bowman (Judy Greer) can barely remember what life was like before kids, debt, and suburbia rained on their romance -- but every once in a while, in between the arguments about their declining sex life and who&#39;s driving carpool, they are reminded what drew them together in the first place -- they&#39;re best friends.<br><br>You’re The Worst puts a dark twist on the romantic comedy genre. Narcissistic, brash, and self-destructive Jimmy Shive-Overly (Chris Geere), thinks all relationships are doomed. Cynical, people-pleasing, and stubborn Gretchen Cutler (Aya Cash), knows that relationships aren&#39;t for her. So when they meet at a wedding, it&#39;s only natural that the two of them go home together and, despite their better judgment, begin to find themselves falling for each other.<br><br>Both comedies premiere tonight at 10pm &amp; 10:30pm EDT on FX.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289892.php#289894" onclick="highlight(289894);">&gt;&gt;</a></td> <td class="reply" id="reply289894"> <a id="289894"></a> <div class="replyheader"> 									 <span class="commentpostername">Leni Riefenstahl</span>  - <span class="idhighlight">Thu, 17 Jul 2014 16:55:20 EST ID:fujJwZTZ</span> <span class="reflink">  <a href="/mtv/res/289892.php#i289894">No.289894</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv32393037323738303839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289894', '289892')" title="Report Post 289894"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289894" data-thread="289892"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B6171A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv32393037323738303839">  i&#39;ll be glad to skip these filler shows   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289892.php#289898" onclick="highlight(289898);">&gt;&gt;</a></td> <td class="reply" id="reply289898"> <a id="289898"></a> <div class="replyheader"> 									 <span class="commentpostername">Jodene Sparks</span>  - <span class="idhighlight">Thu, 17 Jul 2014 17:13:02 EST ID:RweNhena</span> <span class="reflink">  <a href="/mtv/res/289892.php#i289898">No.289898</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31313039333530383531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289898', '289892')" title="Report Post 289898"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289898" data-thread="289892"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A46B3F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31313039333530383531">  Isn&#39;t FXX so FX can be good dramas, not medium tier sitcoms?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289892.php#289900" onclick="highlight(289900);">&gt;&gt;</a></td> <td class="reply" id="reply289900"> <a id="289900"></a> <div class="replyheader"> 									 <span class="commentpostername">C-Higgy </span> <span class="postertrip">!lfsExjBfzE</span> - <span class="idhighlight">Thu, 17 Jul 2014 17:23:40 EST ID:v02TrAUC</span> <span class="reflink">  <a href="/mtv/res/289892.php#i289900">No.289900</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('mtv31363237333635383633')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289900', '289892')" title="Report Post 289900"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289900" data-thread="289892"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #166C78; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="mtv31363237333635383633">  <a href = "/mtv/res/289892.php#289898" onclick = "highlight(289898)">&gt;&gt;289898</a><br>I would have thought they would put all their comedies on FXX like TBS but I guess not.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/mtv/res/289892.php#289999" onclick="highlight(289999);">&gt;&gt;</a></td> <td class="reply" id="reply289999"> <a id="289999"></a> <div class="replyheader"> 									 <span class="commentpostername">C-Higgy </span> <span class="postertrip">!lfsExjBfzE</span> - <span class="idhighlight">Fri, 18 Jul 2014 16:49:58 EST ID:nt+3eXRf</span> <span class="reflink">  <a href="/mtv/res/289892.php#i289999">No.289999</a>   </span>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('289999', '289892')" title="Report Post 289999"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="289999" data-thread="289892"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #041787; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote >  I thought Married was alright. It helps that Judy Greer and Jenny Slate are on the show since I like them from Arrested Development/Archer and Kroll Show and they do fine in their roles. The part where <span class="spoiler" onmouseover=""><span>Russ sees the sonogram pic and knocks it over while he&#39;s making out with that one chick was pretty cringe but funny.</span></span><br><br>I actually liked You&#39;re the Worst more. I think Gretchen and Jimmy could have good chemistry together on this show and from the first episode, I think they bounce off each other well. Personally I like You&#39;re the Worst&#39;s premise more than Married&#39;s since I guess it&#39;s easier to relate to people that consider themselves to be the worst but really having that in common is what brings them together even if they aren&#39;t into relationships themselves. <span class="spoiler" onmouseover=""><span>Jimmy interacting with that kid was great. &quot;My dad designs video games so we get them early. &quot;Okay come over at 8.&quot;</span></span><br><br>I&#39;d say give both shows a chance. After all FX has a good track record with its single camera comedies and the critical acclaim they&#39;ve gotten. I think while both shows are a step down from Legit and Wilfred, which they&#39;re obviously replacing, so far they&#39;re off to good starts. Anyone else watch them?   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://insomniacgamers.net"><img src="http://cdn.420chan.org/sp/i.png"></a>
		</div>
				<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://420chan.org/advertise"><img src="http://cdn.420chan.org/sp/YOUR-AD-HERE.gif"></a>
		</div>
		 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/mtv/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="mtv" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">  <a href="/mtv/4.php">&lt;&lt;Last</a>   <span style="font-size: +1;">Pages</span>   <a href="/mtv/6.php">Next&gt;&gt;</a>  <br />   <a href="/mtv/index.php">0</a>     <a href="/mtv/1.php">1</a>     <a href="/mtv/2.php">2</a>     <a href="/mtv/3.php">3</a>     <a href="/mtv/4.php">4</a>      5    <a href="/mtv/6.php">6</a>     <a href="/mtv/7.php">7</a>     <a href="/mtv/8.php">8</a>     <a href="/mtv/9.php">9</a>     <a href="/mtv/10.php">10</a>     <a href="/mtv/11.php">11</a>     <a href="/mtv/12.php">12</a>     <a href="/mtv/13.php">13</a>     <a href="/mtv/14.php">14</a>     <a href="/mtv/15.php">15</a>     <a href="/mtv/16.php">16</a>     <a href="/mtv/17.php">17</a>     <a href="/mtv/18.php">18</a>     <a href="/mtv/19.php">19</a>     <a href="/mtv/20.php">20</a>     <a href="/mtv/21.php">21</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3862262.php' class='boardlink'>Thread 3862262</a></span>
		<p>>>3862631
>being surprised by /wooo/ turning on something... <a href='/wooo/res/3862262.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='mtv' src='/static/images/board_icons/mtv_icon_32.png' />
		<span class='byline'>Movies &amp; Television - <a href='/mtv/res/290781.php' class='boardlink'>Thread 290781</a></span>
		<p>>>290785
>she just looks like a shitty Xena knock-off
uh you are aware that Xena is pretty much a ... <a href='/mtv/res/290781.php' class='boardlink'>&#8629;</a></p></li>
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

