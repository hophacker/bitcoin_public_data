http://boards.420chan.org/other/7.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Wed, 23 Jul 2014 10:16:00 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> Other Drugs Discussion - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/other_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/other_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/other/7.php';
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
	 <div id="header"> <div id="board_logo"> <a href="/other/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/other_icon_64.png" alt="/other/ Icon" /> <p class="board_title_block"> <span class="board_name">/other/</span> <span class="board_title">Other Drugs Discussion</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
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
	 <!--  <div style="position: absolute; right: 2.5%;"> <ul style="text-align: right; float: right; list-style: none; margin: 5px; font-size: 11px;"> <li style="margin-bottom: 2px;">Board IRC: <a href="irc://irc.420chan.org/drugs">#drugs @ irc.420chan.org</a></li> <li>New to IRC? <a href="http://420chan.org/#irc">Start Here</a></li> </ul> </div>  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/other/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="other" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />     <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>  <tr> <td class="postblock">Name</td> <td> <input title="Name" type="text" name="field1" style="width:224px;" /> <div class="tooltip">  You can leave this blank to post anonymously, or you can create a Tripcode by using the float <b>Name#Password</b> </div>					 </td> </tr>    <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div>  <script type="text/javascript">set_inputs("postform")</script> <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 3000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> 			  </ul> </div> <hr style="margin-bottom:2px;" /> 		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 <hr style="margin-top:2px;" />   <form id="delform" action="/other/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="other" />    <div id="otherthread116959"> <div class="thread_header"> <a id="116959"></a> <span class="filetitle">Fluoxetine</span>  <span class="inbetween"> by </span> <span class="postername">Lillian Grandcocke</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 17 Jun 2014 15:13:14 EST ID:YvkEDZpV</span></span>  <span class="reflink"> <a href="/other/res/116959.php#i116959">No.116959</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other353333353531363837')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('116959')" title="Report Thread 116959"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/other/res/116959.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116959" data-thread="116959"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #781241; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('otherthread116959');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1403032394556.jpg"> 1403032394556.jpg </a> -(<em>102455 B, 589x800</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgother353333353531363837" target="_blank" href="/other/src/1403032394556.jpg"> <img src="/other/thumb/1403032394556s.jpg" alt="102455" class="thumb" /> </a>   			 <blockquote class="opcomment other353333353531363837">  What&#39;s your experience with Fluoxetine?<br>Is it good for anxiety?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/other/res/116959.php#116961" onclick="highlight(116961);">&gt;&gt;</a></td> <td class="reply" id="reply116961"> <a id="116961"></a> <div class="replyheader"> 									 <span class="commentpostername">Bawlsdeepnoddin</span>  - <span class="idhighlight">Tue, 17 Jun 2014 20:09:59 EST ID:kUfAmtbi</span> <span class="reflink">  <a href="/other/res/116959.php#i116961">No.116961</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31363237323434383731')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116961', '116959')" title="Report Post 116961"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116961" data-thread="116959"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #669CB0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31363237323434383731">  i know the rapper Cage was part of a trial of people that Fluoxetine was tested on and he tried to kill himself a few times afterward   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116959.php#116962" onclick="highlight(116962);">&gt;&gt;</a></td> <td class="reply" id="reply116962"> <a id="116962"></a> <div class="replyheader"> 									 <span class="commentpostername">Bawlsdeepnoddin</span>  - <span class="idhighlight">Tue, 17 Jun 2014 20:10:48 EST ID:kUfAmtbi</span> <span class="reflink">  <a href="/other/res/116959.php#i116962">No.116962</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31363237323434383731')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116962', '116959')" title="Report Post 116962"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116962" data-thread="116959"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5656CC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31363237323434383731">  i got sold them as &#39;xanax&#39; one time, i took two and they wiped my emotion<br><br>double post nb   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116959.php#116963" onclick="highlight(116963);">&gt;&gt;</a></td> <td class="reply" id="reply116963"> <a id="116963"></a> <div class="replyheader"> 									 <span class="commentpostername">Esther Brablingdack</span>  - <span class="idhighlight">Tue, 17 Jun 2014 20:46:05 EST ID:7nPPUp0Q</span> <span class="reflink">  <a href="/other/res/116959.php#i116963">No.116963</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31303737323638373831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116963', '116959')" title="Report Post 116963"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116963" data-thread="116959"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E358D7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31303737323638373831">  Good for nothing except gaining a useless addiction and making shekels for big pharma. If you have them, just throw them away.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116959.php#116964" onclick="highlight(116964);">&gt;&gt;</a></td> <td class="reply" id="reply116964"> <a id="116964"></a> <div class="replyheader"> 									 <span class="commentpostername">Jack Drepperstone</span>  - <span class="idhighlight">Tue, 17 Jun 2014 22:19:29 EST ID:Ss05FA4m</span> <span class="reflink">  <a href="/other/res/116959.php#i116964">No.116964</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31323230383534363935')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116964', '116959')" title="Report Post 116964"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116964" data-thread="116959"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FA196D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31323230383534363935">  No.  Too many side effects and long term changes, and too hard to get on and off.  Get some propanolol or gabapentin or something prozac sucks.<br>also made a friend off himself after a dose increase.  so there&#39;s that   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="otherthread116953"> <div class="thread_header"> <a id="116953"></a> <span class="filetitle">Amphetamines+Racetams?</span>  <span class="inbetween"> by </span> <span class="postername">Jarvis Wongergold</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 17 Jun 2014 00:34:42 EST ID:Ss05FA4m</span></span>  <span class="reflink"> <a href="/other/res/116953.php#i116953">No.116953</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31323230383534363935')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('116953')" title="Report Thread 116953"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/other/res/116953.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116953" data-thread="116953"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C766B4; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('otherthread116953');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402979682127.jpg"> 1402979682127.jpg </a> -(<em>7732 B, 184x184</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgother31323230383534363935" target="_blank" href="/other/src/1402979682127.jpg"> <img src="/other/src/1402979682127.jpg" alt="7732" class="thumb" /> </a>   			 <blockquote class="opcomment other31323230383534363935">  Howdy /other/!  I&#39;m asking the speedfreaks over at /stim/ this as well, but I&#39;d like your take on it as well.<br>Now I&#39;ve taken plenty of amphetamine, and I&#39;ve done a brief trial on piracetam, but not the two together.  Has anyone tried stacking speed on a racetam?  Any experiences/wisdom to share?   </blockquote>   				 				     <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="otherthread116573"> <div class="thread_header"> <a id="116573"></a> <span class="filetitle">Kratom</span>  <span class="inbetween"> by </span> <span class="postername">Caroline Chimbleridge</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 22 May 2014 18:13:17 EST ID:OCwMPYLl</span></span>  <span class="reflink"> <a href="/other/res/116573.php#i116573">No.116573</a> </span>    			 <!--  - Awesome Thread? <a href="/other/taimaba.pl?board=other&amp;task=vote&amp;thread=116573&amp;vote=0">No!</a> | <a href="/other/taimaba.pl?board=other&amp;task=vote&amp;thread=116573&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31323735383132383837')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('116573')" title="Report Thread 116573"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/other/res/116573.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116573" data-thread="116573"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5A0CBE; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('otherthread116573');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1400796797473.jpg"> 1400796797473.jpg </a> -(<em>76026 B, 500x639</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgother31323735383132383837" target="_blank" href="/other/src/1400796797473.jpg"> <img src="/other/thumb/1400796797473s.jpg" alt="76026" class="thumb" /> </a>   			 <blockquote class="opcomment other31323735383132383837">  I hope this is the right forum, welp.<br><br>I&#39;ve got anxiety, which basically gives me ADHD. I&#39;m looking to get off adderall and I&#39;m wondering if kratom might be a suitable replacement. <span class="spoiler" onmouseover=""><span>Also I like checking out legal highs and jazz like that</span></span><br><br>There&#39;s so many god damn strains and I have no clue where to start.<br>HELP   </blockquote>   				 				  <span class="omittedposts">  17 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/other/res/116573.php#116929" onclick="highlight(116929);">&gt;&gt;</a></td> <td class="reply" id="reply116929"> <a id="116929"></a> <div class="replyheader"> 									 <span class="commentpostername">Phoebe Cimblepudge</span>  - <span class="idhighlight">Mon, 16 Jun 2014 01:14:34 EST ID:jG29nllr</span> <span class="reflink">  <a href="/other/res/116573.php#i116929">No.116929</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31373435363330333037')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116929', '116573')" title="Report Post 116929"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116929" data-thread="116573"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #52BAB1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31373435363330333037">  bikhuk? or where do you get it?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116573.php#116930" onclick="highlight(116930);">&gt;&gt;</a></td> <td class="reply" id="reply116930"> <a id="116930"></a> <div class="replyheader"> 									 <span class="commentpostername">Phoebe Cimblepudge</span>  - <span class="idhighlight">Mon, 16 Jun 2014 01:15:04 EST ID:jG29nllr</span> <span class="reflink">  <a href="/other/res/116573.php#i116930">No.116930</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31373435363330333037')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116930', '116573')" title="Report Post 116930"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116930" data-thread="116573"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FBE618; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31373435363330333037">  <a href = "/other/res/116573.php#116875" onclick = "highlight(116875)">&gt;&gt;116875</a><br>where do you go? bikhuk?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116573.php#116945" onclick="highlight(116945);">&gt;&gt;</a></td> <td class="reply" id="reply116945"> <a id="116945"></a> <div class="replyheader"> 									 <span class="commentpostername">Emma Drindleham</span>  - <span class="idhighlight">Mon, 16 Jun 2014 07:12:40 EST ID:hKLImGET</span> <span class="reflink">  <a href="/other/res/116573.php#i116945">No.116945</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other383437393834383232')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116945', '116573')" title="Report Post 116945"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116945" data-thread="116573"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7BB511; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other383437393834383232">  <a href = "/other/res/116573.php#116883" onclick = "highlight(116883)">&gt;&gt;116883</a><br><blockquote class = "unkfunc">&gt;go get addicted to Xanax instead, that&#39;ll cheer you up OP</blockquote>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116573.php#116949" onclick="highlight(116949);">&gt;&gt;</a></td> <td class="reply" id="reply116949"> <a id="116949"></a> <div class="replyheader"> 									 <span class="commentpostername">Priscilla Giddleville</span>  - <span class="idhighlight">Mon, 16 Jun 2014 22:03:13 EST ID:Mrsav1pS</span> <span class="reflink">  <a href="/other/res/116573.php#i116949">No.116949</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313837303431313230')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116949', '116573')" title="Report Post 116949"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116949" data-thread="116573"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6E0F0B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402970593249.jpg"> 1402970593249.jpg </a> -(<em>54771 B, 500x500</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/other/src/1402970593249.jpg"> <img src="/other/thumb/1402970593249s.jpg" alt="54771" class="thumb" /> </a>    <blockquote  class="other31313837303431313230">  <a href = "/other/res/116573.php#116945" onclick = "highlight(116945)">&gt;&gt;116945</a><br><br>I agree with this guy even though he&#39;s a sarcastic asshole.  OP shouldn&#39;t switch to god damned benzos if he&#39;s exploring ethobotanicals, let the guy chase the high he&#39;s interested in at the moment and he&#39;ll probably be cool with kratom and what it does.  I say go for it OP, down some kratom and nod your ass off, it&#39;s better than having to pop valium every day.  Take it from me because I&#39;m in that situation.  Kratom is &quot;fun&quot; as much as it&#39;s helpful.  Benzos are that way for about a couple months until you build a physical tolerance and REQUIRE the chemicals you&#39;ve been putting in your body regularly.  Just eat the shit that grows from the ground (Kratom) and you&#39;ll be fine OP.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116573.php#116969" onclick="highlight(116969);">&gt;&gt;</a></td> <td class="reply" id="reply116969"> <a id="116969"></a> <div class="replyheader"> 									 <span class="commentpostername">Phyllis Cenkinwill</span>  - <span class="idhighlight">Wed, 18 Jun 2014 05:26:42 EST ID:JKEkhfmX</span> <span class="reflink">  <a href="/other/res/116573.php#i116969">No.116969</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313339333538363830')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116969', '116573')" title="Report Post 116969"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116969" data-thread="116573"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #365E95; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31313339333538363830">  <a href = "/other/res/116573.php" onclick = "highlight(116573)">&gt;&gt;116573</a><br>Buy Kava-Kava   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="otherthread116671"> <div class="thread_header"> <a id="116671"></a> <span class="filetitle">Getting high on Salvia (not tripping)</span>  <span class="inbetween"> by </span> <span class="postername">Lydia Grandcocke</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 28 May 2014 23:36:17 EST ID:OCwMPYLl</span></span>  <span class="reflink"> <a href="/other/res/116671.php#i116671">No.116671</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31323735383132383837')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('116671')" title="Report Thread 116671"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/other/res/116671.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116671" data-thread="116671"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CDFCEB; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('otherthread116671');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1401334577345.jpg"> 1401334577345.jpg </a> -(<em>136782 B, 604x483</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgother31323735383132383837" target="_blank" href="/other/src/1401334577345.jpg"> <img src="/other/thumb/1401334577345s.jpg" alt="136782" class="thumb" /> </a>   			 <blockquote class="opcomment other31323735383132383837">  Didn&#39;t really know where to post this since Psy always tells salvia users to fuck off and I don&#39;t really think it&#39;s a dissasociative from my experience. But mostly I&#39;m posting it here cause I&#39;m not trying to trip and it&#39;s kind of an alternative use of it.<br><br><span class="spoiler" onmouseover=""><span>what ever</span></span><br><br>This might be kinda weird, but maybe it&#39;s just a mild trip? I smoked like 0.05 grams of 5x salvia in my pipe, didn&#39;t hold it in too long, basically smoked it like weed.<br>I remember the first time I tried salvia this is how I smoked it and I didn&#39;t trip, so I wanted to try that again since when I finally smoke it right I tripped way too intensely. Also I want to easy my way into harder trips rather than going in full blast.<br><br>Anyone else do this/did it accidentally or purposely?   </blockquote>   				 				  <span class="omittedposts">  5 posts and 3 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/other/res/116671.php#116750" onclick="highlight(116750);">&gt;&gt;</a></td> <td class="reply" id="reply116750"> <a id="116750"></a> <div class="replyheader"> 									 <span class="commentpostername">Ernest Sacklehood</span>  - <span class="idhighlight">Thu, 05 Jun 2014 15:34:11 EST ID:298ndTAf</span> <span class="reflink">  <a href="/other/res/116671.php#i116750">No.116750</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other32393333393530333031')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116750', '116671')" title="Report Post 116750"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116750" data-thread="116671"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BD0431; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other32393333393530333031">  I&#39;ve taken salvia 3 or 4 times only in low doses for the euphoria/visual distortion/mental trip it creates. Same story with shrooms. Some people like tripping balls and some people like a light trip. Don&#39;t let people pressure you into high doses if you don&#39;t want to take them.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116671.php#116753" onclick="highlight(116753);">&gt;&gt;</a></td> <td class="reply" id="reply116753"> <a id="116753"></a> <div class="replyheader"> 									 <span class="commentpostername">Hamilton Brimmlestock</span>  - <span class="idhighlight">Thu, 05 Jun 2014 21:43:09 EST ID:zvIEJ1OF</span> <span class="reflink">  <a href="/other/res/116671.php#i116753">No.116753</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other383436373934323738')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116753', '116671')" title="Report Post 116753"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116753" data-thread="116671"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #423B1D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other383436373934323738">  mix a bowl of 1/3 weed 1/3 salvia extract 1/3 blue lotus<br>turns mids into dank, you won&#39;t trip but it definitly ampifies the high and you use way less weed   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116671.php#116776" onclick="highlight(116776);">&gt;&gt;</a></td> <td class="reply" id="reply116776"> <a id="116776"></a> <div class="replyheader"> 									 <span class="commentpostername">Esther Penkinlet</span>  - <span class="idhighlight">Sun, 08 Jun 2014 19:07:23 EST ID:63OvD9yj</span> <span class="reflink">  <a href="/other/res/116671.php#i116776">No.116776</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313939343533383038')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116776', '116671')" title="Report Post 116776"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116776" data-thread="116671"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A65279; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31313939343533383038">  IMO hitting small amounts of salvia leaf is relaxing. Best salvia trip I&#39;ve had was when I hit a small amount of 5x. It was very visual and felt like a salvia trip, but I didn&#39;t go into the salvia hole. I stayed aware of what was going on and just felt relaxed, and not dysphoric or dizzy like I would on a stronger salvia trip. It was just that I got very nice visuals, a strong sense of nostalgia, and an exquisite feeling of well-being and contentedness.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116671.php#116942" onclick="highlight(116942);">&gt;&gt;</a></td> <td class="reply" id="reply116942"> <a id="116942"></a> <div class="replyheader"> 									 <span class="commentpostername">George Brizzleford</span>  - <span class="idhighlight">Mon, 16 Jun 2014 07:07:32 EST ID:LndBvbNF</span> <span class="reflink">  <a href="/other/res/116671.php#i116942">No.116942</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31353539363236313035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116942', '116671')" title="Report Post 116942"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116942" data-thread="116671"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B3B4EB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31353539363236313035">  I have also smoked it 3 times. First time with people I don&#39;t really like (give me a medal). I only smoked 1/10 of a dose, but everything started curving around me and it felt like sweat was raining off me in a thunderstorm. Also i was completely sober prior to the salvia. It wasnt really a trip, but it wasnt pleasant or interesting.<br><br>The other 2 times I was drunk, high and had taken 2 54mg concerta. Results were the strongest i have ever gotten with so little drugs. The salvia did no weird shit for me at all, it pumped me with energy, it boosted me through the roof and all i remember was that I felt like a prophet.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116671.php#116944" onclick="highlight(116944);">&gt;&gt;</a></td> <td class="reply" id="reply116944"> <a id="116944"></a> <div class="replyheader"> 									 <span class="commentpostername">Emma Drindleham</span>  - <span class="idhighlight">Mon, 16 Jun 2014 07:11:06 EST ID:hKLImGET</span> <span class="reflink">  <a href="/other/res/116671.php#i116944">No.116944</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other383437393834383232')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116944', '116671')" title="Report Post 116944"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116944" data-thread="116671"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #755E49; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other383437393834383232">  The only time I ever did salvia, I felt like reality as I had known it no longer existed and I was going to be stuck in the hole forever. <br><br>I can&#39;t look at the shit without being ill anymore.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="otherthread116810"> <div class="thread_header"> <a id="116810"></a> <span class="filetitle">Nutmeg oil</span>  <span class="inbetween"> by </span> <span class="postername">Timmy the RubJub man</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 10 Jun 2014 17:14:18 EST ID:nfBmypIz</span></span>  <span class="reflink"> <a href="/other/res/116810.php#i116810">No.116810</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other33363336313133303331')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('116810')" title="Report Thread 116810"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/other/res/116810.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116810" data-thread="116810"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #48967C; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('otherthread116810');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402434858237.jpg"> 1402434858237.jpg </a> -(<em>9010 B, 200x128</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgother33363336313133303331" target="_blank" href="/other/src/1402434858237.jpg"> <img src="/other/src/1402434858237.jpg" alt="9010" class="thumb" /> </a>   			 <blockquote class="opcomment other33363336313133303331">  Just picked up 1/2 an ounce of nutmeg oil, taking some tomorrow, whats the best way to dose?   </blockquote>   				 				  <span class="omittedposts">   1 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/other/res/116810.php#116822" onclick="highlight(116822);">&gt;&gt;</a></td> <td class="reply" id="reply116822"> <a id="116822"></a> <div class="replyheader"> 									 <span class="commentpostername">Hugh Grimfield</span>  - <span class="idhighlight">Wed, 11 Jun 2014 09:59:37 EST ID:8pxeEkf8</span> <span class="reflink">  <a href="/other/res/116810.php#i116822">No.116822</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313131373632333030')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116822', '116810')" title="Report Post 116822"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116822" data-thread="116810"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #473227; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31313131373632333030">  The trashcan has the highest bio availability. Seriously, toss it. Get some acid or shrooms. If you can&#39;t find that, ATLEAST go over to /dis/   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116810.php#116823" onclick="highlight(116823);">&gt;&gt;</a></td> <td class="reply" id="reply116823"> <a id="116823"></a> <div class="replyheader"> 									 <span class="commentpostername">Caroline Drerringsed</span>  - <span class="idhighlight">Wed, 11 Jun 2014 10:35:44 EST ID:NYIVo8u3</span> <span class="reflink">  <a href="/other/res/116810.php#i116823">No.116823</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31373035303334313933')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116823', '116810')" title="Report Post 116823"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116823" data-thread="116810"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D18F5C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402497344951.jpg"> 1402497344951.jpg </a> -(<em>810558 B, 1600x1049</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/other/src/1402497344951.jpg"> <img src="/other/thumb/1402497344951s.jpg" alt="810558" class="thumb" /> </a>    <blockquote  class="other31373035303334313933">  <a href = "/other/res/116810.php#116822" onclick = "highlight(116822)">&gt;&gt;116822</a><br>dude.<br><br>Ok first you have to get some of the following, the more the merrier, the fresher the better (but whatever you can find is ok): white grapefruit juice. pomegranate juice. black pepper. turmeric. cinnamon. german chamomile. ceterizine. these will inhibit cyp1A2 and/or3A4 - otherwise these enzymes will prevent you from getting anywhere near the myristicin you&#39;re after. ideally start dosing these 6 hours before and bump big as you dose nutmeg, but whatever you can stand is fine.<br><br>Then, take .5-1ml of nutmeg oil in a capsule. volatile oil is very volatile, believe it or not, and you do not want to taste it.<br><br>oil comes on faster than the fruit (expect about 45-90 minutes) and doesn&#39;t last as long (about 6 hours in my experience). i also had almost none of the brutal hangover that one gets from the fruit.<br><br>depending on the quality of your oil you might feel anything from nothing to almost everything, you really can trip on myristicin.<br><br>have a great time - watch your heart rate! send us a report ~&lt;3   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116810.php#116826" onclick="highlight(116826);">&gt;&gt;</a></td> <td class="reply" id="reply116826"> <a id="116826"></a> <div class="replyheader"> 									 <span class="commentpostername">Timmy the RubJub man</span>  - <span class="idhighlight">Wed, 11 Jun 2014 15:50:43 EST ID:nfBmypIz</span> <span class="reflink">  <a href="/other/res/116810.php#i116826">No.116826</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other33363336313133303331')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116826', '116810')" title="Report Post 116826"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116826" data-thread="116810"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #853E2E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other33363336313133303331">  <a href = "/other/res/116810.php#116823" onclick = "highlight(116823)">&gt;&gt;116823</a><br>Does it make your eyes red, because I have heard that before   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116810.php#116835" onclick="highlight(116835);">&gt;&gt;</a></td> <td class="reply" id="reply116835"> <a id="116835"></a> <div class="replyheader"> 									 <span class="commentpostername">Samuel Clandernuck</span>  - <span class="idhighlight">Thu, 12 Jun 2014 01:34:36 EST ID:NYIVo8u3</span> <span class="reflink">  <a href="/other/res/116810.php#i116835">No.116835</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31373035303334313933')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116835', '116810')" title="Report Post 116835"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116835" data-thread="116810"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #847547; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31373035303334313933">  <a href = "/other/res/116810.php#116826" onclick = "highlight(116826)">&gt;&gt;116826</a><br>oh yes.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116810.php#116938" onclick="highlight(116938);">&gt;&gt;</a></td> <td class="reply" id="reply116938"> <a id="116938"></a> <div class="replyheader"> 									 <span class="commentpostername">Alice Pockshaw</span>  - <span class="idhighlight">Mon, 16 Jun 2014 04:45:41 EST ID:mcCcFJEv</span> <span class="reflink">  <a href="/other/res/116810.php#i116938">No.116938</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31383535323330353838')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116938', '116810')" title="Report Post 116938"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116938" data-thread="116810"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8B4E51; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31383535323330353838">  <a href = "/other/res/116810.php" onclick = "highlight(116810)">&gt;&gt;116810</a><br>well?   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="otherthread116846"> <div class="thread_header"> <a id="116846"></a> <span class="filetitle">Uknown shit</span>  <span class="inbetween"> by </span> <span class="postername">James Sisslenad</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 13 Jun 2014 08:57:51 EST ID:J66TpAcR</span></span>  <span class="reflink"> <a href="/other/res/116846.php#i116846">No.116846</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31353830363036353637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('116846')" title="Report Thread 116846"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/other/res/116846.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116846" data-thread="116846"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D04E52; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('otherthread116846');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402664271664.jpg"> 1402664271664.jpg </a> -(<em>232721 B, 1674x940</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgother31353830363036353637" target="_blank" href="/other/src/1402664271664.jpg"> <img src="/other/thumb/1402664271664s.jpg" alt="232721" class="thumb" /> </a>   			 <blockquote class="opcomment other31353830363036353637">  Alright my friend just bought some of the pic related but we have no fucking idea what it is. He said that its made of a cleaning product from China or some shit but the source of this knowledge is not trustworthy.<br><br>So we smoked a little of it just put some at the end of a normal cigarette. It tastes like some sort of chemical really hard to say. The high hits you after 5-10 minutes. It feels like weed high at first but you get extremely woozy and tired all of a sudden. Walking is hard and it makes you hungry. The high lasts about 45 minutes one hour. It doesn&#39;t leave any after effects and after 1,30 hour the high is gone completely.<br><br>Does anyone know what it is?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/other/res/116846.php#116847" onclick="highlight(116847);">&gt;&gt;</a></td> <td class="reply" id="reply116847"> <a id="116847"></a> <div class="replyheader"> 									 <span class="commentpostername">Thomas Durringfare</span>  - <span class="idhighlight">Fri, 13 Jun 2014 09:22:58 EST ID:InXZfhFV</span> <span class="reflink">  <a href="/other/res/116846.php#i116847">No.116847</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313837303339343038')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116847', '116846')" title="Report Post 116847"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116847" data-thread="116846"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #429939; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402665778073.jpg"> 1402665778073.jpg </a> -(<em>115071 B, 625x371</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/other/src/1402665778073.jpg"> <img src="/other/thumb/1402665778073s.jpg" alt="115071" class="thumb" /> </a>    <blockquote  class="other31313837303339343038">  It kind of sounds and looks like spice powder (aka the pure form of spice aka JWH, AKB-48, UR-144, etc.).  From the picture I guess it&#39;s either low-quality or flourinated (a chem with 5F in front of it), so don&#39;t go crazy on that shit or you might have a seizure like I did.  It&#39;s always the shit that&#39;s flourinated that does it to you.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116846.php#116848" onclick="highlight(116848);">&gt;&gt;</a></td> <td class="reply" id="reply116848"> <a id="116848"></a> <div class="replyheader"> 									 <span class="commentpostername">James Sisslenad</span>  - <span class="idhighlight">Fri, 13 Jun 2014 09:42:02 EST ID:J66TpAcR</span> <span class="reflink">  <a href="/other/res/116846.php#i116848">No.116848</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31353830363036353637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116848', '116846')" title="Report Post 116848"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116848" data-thread="116846"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8B2666; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31353830363036353637">  <a href = "/other/res/116846.php#116847" onclick = "highlight(116847)">&gt;&gt;116847</a><br>I think its JWH. But there are shitload of types of this so i can&#39;t figure out the exact one.<br><br>Do you remember the one you smoked? What did it taste like? Because the best way to tell what this is would be the taste since it has a really unique taste.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116846.php#116849" onclick="highlight(116849);">&gt;&gt;</a></td> <td class="reply" id="reply116849"> <a id="116849"></a> <div class="replyheader"> 									 <span class="commentpostername">Thomas Durringfare</span>  - <span class="idhighlight">Fri, 13 Jun 2014 09:59:51 EST ID:InXZfhFV</span> <span class="reflink">  <a href="/other/res/116846.php#i116849">No.116849</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313837303339343038')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116849', '116846')" title="Report Post 116849"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116849" data-thread="116846"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B005CA; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402667991073.jpg"> 1402667991073.jpg </a> -(<em>210628 B, 536x617</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/other/src/1402667991073.jpg"> <img src="/other/thumb/1402667991073s.jpg" alt="210628" class="thumb" /> </a>    <blockquote  class="other31313837303339343038">  <a href = "/other/res/116846.php#116848" onclick = "highlight(116848)">&gt;&gt;116848</a><br><br>They usually ALL taste like plastic or chemicals so it&#39;s kind of hard to tell them apart by specific taste, and the one that looked similar to that and gave me a bad time was 5F-AKB-48.<br><br>Also you shouldn&#39;t think it&#39;s JWH right off the bat, it&#39;s pretty hard to find JWH nowadays unless you know a good vendor that&#39;s most likely overseas or use the velvet highway or some shit.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116846.php#116859" onclick="highlight(116859);">&gt;&gt;</a></td> <td class="reply" id="reply116859"> <a id="116859"></a> <div class="replyheader"> 									 <span class="commentpostername">Rebecca Brovingtutch</span>  - <span class="idhighlight">Fri, 13 Jun 2014 20:08:39 EST ID:AHGDoh7P</span> <span class="reflink">  <a href="/other/res/116846.php#i116859">No.116859</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31323938333637333436')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116859', '116846')" title="Report Post 116859"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116859" data-thread="116846"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AF0AC2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31323938333637333436">  <a href = "/other/res/116846.php" onclick = "highlight(116846)">&gt;&gt;116846</a><br>I&#39;ve dropped tabs that I knew weren&#39;t LSD whilst drinking robo and eating dph, which is pretty reckless imo, but how the fuck are you going to take some random unknown powder and start taking hits of it?<br>It might not have even been drugs   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116846.php#116912" onclick="highlight(116912);">&gt;&gt;</a></td> <td class="reply" id="reply116912"> <a id="116912"></a> <div class="replyheader"> 									 <span class="commentpostername">Sidney Pagglemod</span>  - <span class="idhighlight">Sun, 15 Jun 2014 18:40:59 EST ID:/gN4goCp</span> <span class="reflink">  <a href="/other/res/116846.php#i116912">No.116912</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other32383839333536343039')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116912', '116846')" title="Report Post 116912"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116912" data-thread="116846"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C3FFFE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402872059260.jpg"> 1402872059260.jpg </a> -(<em>653417 B, 2048x1152</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/other/src/1402872059260.jpg"> <img src="/other/thumb/1402872059260s.jpg" alt="653417" class="thumb" /> </a>    <blockquote  class="other32383839333536343039">  Genuine question OP, how in the fuck is smoking an unknown cleaning product from China anywhere CLOSE to a good idea?   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="otherthread116760"> <div class="thread_header"> <a id="116760"></a> <span class="filetitle">Just Mydriasis</span>  <span class="inbetween"> by </span> <span class="postername">Augustus Greenway</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 06 Jun 2014 22:56:29 EST ID:oO2mRk4l</span></span>  <span class="reflink"> <a href="/other/res/116760.php#i116760">No.116760</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313437363336323236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('116760')" title="Report Thread 116760"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/other/res/116760.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116760" data-thread="116760"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #55B413; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('otherthread116760');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402109789728.jpg"> 1402109789728.jpg </a> -(<em>1222877 B, 1704x2272</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgother31313437363336323236" target="_blank" href="/other/src/1402109789728.jpg"> <img src="/other/thumb/1402109789728s.jpg" alt="1222877" class="thumb" /> </a>   			 <blockquote class="opcomment other31313437363336323236">  Are there any walmart drugs/hippy store supplements  that just dilate your pupils without a trip?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/other/res/116760.php#116761" onclick="highlight(116761);">&gt;&gt;</a></td> <td class="reply" id="reply116761"> <a id="116761"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigel Corrykick</span>  - <span class="idhighlight">Fri, 06 Jun 2014 23:01:56 EST ID:VN6kw2AI</span> <span class="reflink">  <a href="/other/res/116760.php#i116761">No.116761</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313939323738393034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116761', '116760')" title="Report Post 116761"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116761" data-thread="116760"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #22F998; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31313939323738393034">  <a href = "/other/res/116760.php" onclick = "highlight(116760)">&gt;&gt;116760</a> <br>hydrogen peroxide.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116760.php#116762" onclick="highlight(116762);">&gt;&gt;</a></td> <td class="reply" id="reply116762"> <a id="116762"></a> <div class="replyheader"> 									 <span class="commentpostername">Augustus Greenway</span>  - <span class="idhighlight">Fri, 06 Jun 2014 23:35:20 EST ID:oO2mRk4l</span> <span class="reflink">  <a href="/other/res/116760.php#i116762">No.116762</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313437363336323236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116762', '116760')" title="Report Post 116762"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116762" data-thread="116760"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CD5553; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31313437363336323236">  <a href = "/other/res/116760.php#116761" onclick = "highlight(116761)">&gt;&gt;116761</a><br><br>Cite that shit.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116760.php#116903" onclick="highlight(116903);">&gt;&gt;</a></td> <td class="reply" id="reply116903"> <a id="116903"></a> <div class="replyheader"> 									 <span class="commentpostername">Shitting Serringwell</span>  - <span class="idhighlight">Sun, 15 Jun 2014 14:01:20 EST ID:jG29nllr</span> <span class="reflink">  <a href="/other/res/116760.php#i116903">No.116903</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31373435363330333037')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116903', '116760')" title="Report Post 116903"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116903" data-thread="116760"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #741BEC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31373435363330333037">  why do you need this? trying to prove you&#39;re tripping?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116760.php#116906" onclick="highlight(116906);">&gt;&gt;</a></td> <td class="reply" id="reply116906"> <a id="116906"></a> <div class="replyheader"> 									 <span class="commentpostername">Sidney Trotshit</span>  - <span class="idhighlight">Sun, 15 Jun 2014 15:15:50 EST ID:n1uHibSe</span> <span class="reflink">  <a href="/other/res/116760.php#i116906">No.116906</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other343138333839303136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116906', '116760')" title="Report Post 116906"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116906" data-thread="116760"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F5D608; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other343138333839303136">  dissolve diphenhydramine (benedryl) in saline and drop a couple drops into your eyes. it&#39;ll probably sting horribly.<br><br>when you go to an eye doctor and they dilate your eyes they do the same thing with atropine which is a deliriant like DPH, but since it&#39;s only touching the eyes in small amounts the effects aren&#39;t systemic but the pupil dilation is still significant.<br><br>that&#39;s pretty much your only option.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116760.php#116910" onclick="highlight(116910);">&gt;&gt;</a></td> <td class="reply" id="reply116910"> <a id="116910"></a> <div class="replyheader"> 									 <span class="commentpostername">CrazyFolksTribe</span> <span class="postertrip">!loJSOMZg0g</span> - <span class="idhighlight">Sun, 15 Jun 2014 16:42:26 EST ID:PsmD9C2l</span> <span class="reflink">  <a href="/other/res/116760.php#i116910">No.116910</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313333323637373233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116910', '116760')" title="Report Post 116910"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116910" data-thread="116760"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7F39F1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31313333323637373233">  <a href = "/other/res/116760.php#116903" onclick = "highlight(116903)">&gt;&gt;116903</a><br>He wants to look BEAUTIFUL!!! <img src="//cdn.420chan.org/emoticons/ddp.png"><img src="//cdn.420chan.org/emoticons/ddp.png"><img src="//cdn.420chan.org/emoticons/ddp.png"><img src="//cdn.420chan.org/emoticons/ddp.png"><img src="//cdn.420chan.org/emoticons/ddp.png"><img src="//cdn.420chan.org/emoticons/ddp.png"><img src="//cdn.420chan.org/emoticons/ddp.png"><br><span class="spoiler" onmouseover=""><span>women used to put solutions of belladonna or henbane in their eyes because big pupils were a sign of beauty</span></span>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id=""> <div class="thread_header"> <a id="116862"></a> <span class="filetitle">IT SAYS RIGHT HERE</span>  <span class="inbetween"> by </span> <span class="postername">Nathaniel Nevinggold</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 14 Jun 2014 00:31:20 EST ID:L7RYPr56</span></span>  <span class="reflink"> <a href="/other/res/116862.php#i116862">No.116862</a> </span>    			 <!--  -->   <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('116862')" title="Report Thread 116862"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/other/res/116862.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116862" data-thread="116862"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #26DC68; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>-->  </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402720280786.jpg"> 1402720280786.jpg </a> -(<em>233737 B, 1200x895</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgother31383132353838353232" target="_blank" href="/other/src/1402720280786.jpg"> <img src="/other/thumb/1402720280786s.jpg" alt="233737" class="thumb" /> </a>   			 <blockquote class="opcomment">  that orange trees contain DMT. So how do I get high on orange trees? Do i need to eat a buncha leaves and do an MAOI? I want to know I WANT TO GET HIGH FROM ORANGE TREES I LIVE IN FLORIDA   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/other/res/116862.php#116869" onclick="highlight(116869);">&gt;&gt;</a></td> <td class="reply" id="reply116869"> <a id="116869"></a> <div class="replyheader"> 									 <span class="commentpostername">Phyllis Mellymat</span>  - <span class="idhighlight">Sat, 14 Jun 2014 05:10:17 EST ID:ZWAsetWu</span> <span class="reflink">  <a href="/other/res/116862.php#i116869">No.116869</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31323036333436323733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116869', '116862')" title="Report Post 116869"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116869" data-thread="116862"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #005651; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31323036333436323733">  <a href = "/other/res/116862.php" onclick = "highlight(116862)">&gt;&gt;116862</a><br>Just about every plant contains DMT dude   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116862.php#116890" onclick="highlight(116890);">&gt;&gt;</a></td> <td class="reply" id="reply116890"> <a id="116890"></a> <div class="replyheader"> 									 <span class="commentpostername">CrazyFolksTribe</span> <span class="postertrip">!loJSOMZg0g</span> - <span class="idhighlight">Sat, 14 Jun 2014 21:06:43 EST ID:PsmD9C2l</span> <span class="reflink">  <a href="/other/res/116862.php#i116890">No.116890</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313333323637373233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116890', '116862')" title="Report Post 116890"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116890" data-thread="116862"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0AF96E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31313333323637373233">  <a href = "/other/res/116862.php#116869" onclick = "highlight(116869)">&gt;&gt;116869</a><br>This.<br><br>Look for phalaris grass for <em>usable</em> amounts of DMT. Or just find some psilocybe cubensis if you want to trip but don&#39;t specifically want DMT. Both of them should grow in Florida but PLEASE do the proper research so you don&#39;t accidentally pick a similar-looking but toxic species.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116862.php#117134" onclick="highlight(117134);">&gt;&gt;</a></td> <td class="reply" id="reply117134"> <a id="117134"></a> <div class="replyheader"> 									 <span class="commentpostername">Fuck Fuckingson</span>  - <span class="idhighlight">Thu, 26 Jun 2014 03:10:34 EST ID:eTzEhVQ4</span> <span class="reflink">  <a href="/other/res/116862.php#i117134">No.117134</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313737363235373739')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('117134', '116862')" title="Report Post 117134"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="117134" data-thread="116862"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #82CE16; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31313737363235373739">  If you can take a pic of yourself trying to freebase an orange I would appreciate it.  Facial obscuration recommended.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="otherthread116871"> <div class="thread_header"> <a id="116871"></a> <span class="filetitle">Best way to smoke synthetics?</span>  <span class="inbetween"> by </span> <span class="postername">Charles Wobberlock</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 14 Jun 2014 06:58:24 EST ID:xl+rUWAh</span></span>  <span class="reflink"> <a href="/other/res/116871.php#i116871">No.116871</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31343434323233373334')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('116871')" title="Report Thread 116871"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/other/res/116871.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116871" data-thread="116871"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2E7063; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('otherthread116871');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402743504825.jpg"> 1402743504825.jpg </a> -(<em>348821 B, 585x433</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgother31343434323233373334" target="_blank" href="/other/src/1402743504825.jpg"> <img src="/other/thumb/1402743504825s.jpg" alt="348821" class="thumb" /> </a>   			 <blockquote class="opcomment other31343434323233373334">  Currently smoking on THJ-2201 through a bong (no water), putting the powder in the bowl and just smoking it with a lighter.<br><br>Is there a better way to smoke it like this?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/other/res/116871.php#116872" onclick="highlight(116872);">&gt;&gt;</a></td> <td class="reply" id="reply116872"> <a id="116872"></a> <div class="replyheader"> 									 <span class="commentpostername">Rebecca Brovingtutch</span>  - <span class="idhighlight">Sat, 14 Jun 2014 09:50:50 EST ID:AHGDoh7P</span> <span class="reflink">  <a href="/other/res/116871.php#i116872">No.116872</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31323938333637333436')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116872', '116871')" title="Report Post 116872"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116872" data-thread="116871"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #232342; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31323938333637333436">  Do you use lots of screens or one of those concentrate slides?<br>I&#39;m picturing it but it seems like you would either pull a lot of powder through or get a massive hit.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116871.php#116873" onclick="highlight(116873);">&gt;&gt;</a></td> <td class="reply" id="reply116873"> <a id="116873"></a> <div class="replyheader"> 									 <span class="commentpostername">Hannah Hinningmat</span>  - <span class="idhighlight">Sat, 14 Jun 2014 09:51:09 EST ID:VN6kw2AI</span> <span class="reflink">  <a href="/other/res/116871.php#i116873">No.116873</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313939323738393034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116873', '116871')" title="Report Post 116873"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116873" data-thread="116871"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #386AAB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31313939323738393034">  <a href = "/other/res/116871.php" onclick = "highlight(116871)">&gt;&gt;116871</a><br><br>put water in the bong....   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116871.php#116876" onclick="highlight(116876);">&gt;&gt;</a></td> <td class="reply" id="reply116876"> <a id="116876"></a> <div class="replyheader"> 									 <span class="commentpostername">Charles Wobberlock</span>  - <span class="idhighlight">Sat, 14 Jun 2014 10:47:53 EST ID:xl+rUWAh</span> <span class="reflink">  <a href="/other/res/116871.php#i116876">No.116876</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31343434323233373334')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116876', '116871')" title="Report Post 116876"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116876" data-thread="116871"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2207FE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31343434323233373334">  I just simply use a normal bronze screen that I bought online for my bong. The powder doesn&#39;t really come through, however some of the chemical actually kind of melts and runs away. Some of it can be collected though, but I&#39;m wondering if there&#39;s a way to make it more efficient. For example I just smoked 500mg in 2 days..<br><br>Maybe chasing from foil? I used to do that with AM-2201 but I don&#39;t like burning foil..   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116871.php#116877" onclick="highlight(116877);">&gt;&gt;</a></td> <td class="reply" id="reply116877"> <a id="116877"></a> <div class="replyheader"> 									 <span class="commentpostername">Rebecca Brovingtutch</span>  - <span class="idhighlight">Sat, 14 Jun 2014 11:48:23 EST ID:AHGDoh7P</span> <span class="reflink">  <a href="/other/res/116871.php#i116877">No.116877</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31323938333637333436')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116877', '116871')" title="Report Post 116877"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116877" data-thread="116871"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #76CD20; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31323938333637333436">  <a href = "/other/res/116871.php#116876" onclick = "highlight(116876)">&gt;&gt;116876</a><br>I&#39;m not a fan of smoking off of foil either, you could get one of those meth pipe looking attachments for hash oil (assuming you have a glass on glass bong it would fit into).<br>Like this - <a href="http://www.grasscity.com/uk_en/black-leaf-oil-vapor-bowl-attachment.html#.U5xkArF3OTU" rel="nofollow" target="_blank">http://www.grasscity.com/uk_en/black-leaf-oil-vapor-bowl-attachment.html#.U5xkArF3OTU</a><br>And then I guess you carefully heat it from the bottom with a torch lighter.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116871.php#116882" onclick="highlight(116882);">&gt;&gt;</a></td> <td class="reply" id="reply116882"> <a id="116882"></a> <div class="replyheader"> 									 <span class="commentpostername">Ebenezer Sashwell</span>  - <span class="idhighlight">Sat, 14 Jun 2014 17:12:19 EST ID:KcSpeluH</span> <span class="reflink">  <a href="/other/res/116871.php#i116882">No.116882</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31323736383737353536')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116882', '116871')" title="Report Post 116882"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116882" data-thread="116871"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AE2757; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31323736383737353536">  make a grav bong. heat a pair of scissors or a knife with a lighter (sharper the better) and poke it into a bottle cap. put the smallest wrench socket in it, tight fit. you can pack a lot in it, and resin builds up quick enough that not much will fall through, and you can leave a bit of ash in it from previous hit so none falls through. any that does you can strain out later. dry with paper towels and microwave if necessary (will leave a stank tho). best concentrated hits and you don&#39;t need much with syns.<br><br>but smoking syns is retarded. i was retarded on multiple occasions. now i have cancer. THX!   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="otherthread116782"> <div class="thread_header"> <a id="116782"></a> <span class="filetitle">Spice Addiction and Extreme Paranoia</span>  <span class="inbetween"> by </span> <span class="postername">Doris Druzzlemin</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 09 Jun 2014 12:36:12 EST ID:lUJPM3C9</span></span>  <span class="reflink"> <a href="/other/res/116782.php#i116782">No.116782</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other383431373639373034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('116782')" title="Report Thread 116782"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/other/res/116782.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116782" data-thread="116782"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #821910; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('otherthread116782');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402331772540.jpg"> 1402331772540.jpg </a> -(<em>879394 B, 1024x768</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgother383431373639373034" target="_blank" href="/other/src/1402331772540.jpg"> <img src="/other/thumb/1402331772540s.jpg" alt="879394" class="thumb" /> </a>   			 <blockquote class="opcomment other383431373639373034">  Started smoking spice around 2010 on and off.  smoked it everyday since late last summer up till now.  A lot of times ill smoke it, go to bed, wake up, smoke more and narp out again. <br>I get random, bursts of paranoia. One second im fine, and the very next second my heart beats out of my chest and feel like theres something behind me. <br><br>Anyone else deal with some of the same stuff?   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/other/res/116782.php#116783" onclick="highlight(116783);">&gt;&gt;</a></td> <td class="reply" id="reply116783"> <a id="116783"></a> <div class="replyheader"> 									 <span class="commentpostername">CrazyFolksTribe</span> <span class="postertrip">!loJSOMZg0g</span> - <span class="idhighlight">Mon, 09 Jun 2014 13:15:26 EST ID:1Fc2rDov</span> <span class="reflink">  <a href="/other/res/116782.php#i116783">No.116783</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31363435353535323236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116783', '116782')" title="Report Post 116783"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116783" data-thread="116782"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #31EA3E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31363435353535323236">  <a href = "/other/res/116782.php" onclick = "highlight(116782)">&gt;&gt;116782</a><br>see<br><a href = "/other/res/116527.php" onclick = "highlight(116527)">&gt;&gt;116527</a><br><a href = "/other/res/115968.php" onclick = "highlight(115968)">&gt;&gt;115968</a><br>or one of many other spice threads on /other/.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116782.php#116844" onclick="highlight(116844);">&gt;&gt;</a></td> <td class="reply" id="reply116844"> <a id="116844"></a> <div class="replyheader"> 									 <span class="commentpostername">Pilliam</span>  - <span class="idhighlight">Fri, 13 Jun 2014 04:15:52 EST ID:UqOvP1MX</span> <span class="reflink">  <a href="/other/res/116782.php#i116844">No.116844</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31383234363435323736')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116844', '116782')" title="Report Post 116844"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116844" data-thread="116782"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #44F196; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402647352228.jpg"> 1402647352228.jpg </a> -(<em>55581 B, 425x582</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/other/src/1402647352228.jpg"> <img src="/other/thumb/1402647352228s.jpg" alt="55581" class="thumb" /> </a>    <blockquote  class="other31383234363435323736">  1 time and only i had/ate it, I was intoxicated quickly with a cocky kind of sure &amp; not very trippy paranoia that was stimulating and somehow well linked with becoming alot of what I saw via imagination. <br><blockquote class = "unkfunc">&gt;Cannabis however seemed, averagely more so, more weird, less believable, but somehow more falsely conceived too, not about stimulus, more about set/mindset??</blockquote>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116782.php#116852" onclick="highlight(116852);">&gt;&gt;</a></td> <td class="reply" id="reply116852"> <a id="116852"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigel Pellerwell</span>  - <span class="idhighlight">Fri, 13 Jun 2014 15:18:12 EST ID:TcaKB6+l</span> <span class="reflink">  <a href="/other/res/116782.php#i116852">No.116852</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other33313631333036393436')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116852', '116782')" title="Report Post 116852"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116852" data-thread="116782"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0A720D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other33313631333036393436">  anxiety can also be caused by alcohol and tobacco, too.<br>just saiin.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116782.php#116854" onclick="highlight(116854);">&gt;&gt;</a></td> <td class="reply" id="reply116854"> <a id="116854"></a> <div class="replyheader"> 									 <span class="commentpostername">Fanny Pashforth</span>  - <span class="idhighlight">Fri, 13 Jun 2014 18:52:44 EST ID:KcSpeluH</span> <span class="reflink">  <a href="/other/res/116782.php#i116854">No.116854</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31323736383737353536')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116854', '116782')" title="Report Post 116854"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116854" data-thread="116782"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3783D7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31323736383737353536">  <a href="http://www.uptodate.com/contents/cushings-syndrome-beyond-the-basics" rel="nofollow" target="_blank">http://www.uptodate.com/contents/cushings-syndrome-beyond-the-basics</a><br><br>i might have brain or lung cancer from smoking that stuff for just 1-2 months. seriously look at all the symptoms and reasons for having this disease. i already know i have it and that clone caused it, just don&#39;t know yet if i have cancer. going to the doc in a bit. but i&#39;m not very hopeful.<br><br>if i have malignant cancer i&#39;m definitely going to either a medical state for some concentrates or since that might not be a great idea no telling with this disease, washington or oregon (oh yeah washington is also a legalized recreational state...) so i can be euthanized legally.<br><br><blockquote class = "unkfunc">&gt;i don&#39;t care what peopel say about this drug but i know if i do have anything happen to me i know i&#39;ll regret it and care then<br></blockquote>said this to my buddy and he said he felt the same way. well. now he has a good reason to quit smoking it.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="otherthread116836"> <div class="thread_header"> <a id="116836"></a> <span class="filetitle">why</span>  <span class="inbetween"> by </span> <span class="postername">rozay</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 12 Jun 2014 02:37:03 EST ID:y14FQJuM</span></span>  <span class="reflink"> <a href="/other/res/116836.php#i116836">No.116836</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other32303336353736363735')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('116836')" title="Report Thread 116836"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/other/res/116836.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116836" data-thread="116836"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F6891E; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('otherthread116836');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402555023230.jpg"> 1402555023230.jpg </a> -(<em>845941 B, 1024x768</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgother32303336353736363735" target="_blank" href="/other/src/1402555023230.jpg"> <img src="/other/thumb/1402555023230s.jpg" alt="845941" class="thumb" /> </a>   			 <blockquote class="opcomment other32303336353736363735">  i took 2.7 grams (2700 mgs) of seroquel with bottle of wine and a 6 pack of bourbon colas ( around bout 20 standard drinks) with 52.5 mgs zopiclone all at the same time except the liqour took bout and hour to drink and i&#39;m still alive, this shit is getting ridiculous this is my third OD that i woke up in hospital from   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/other/res/116836.php#116837" onclick="highlight(116837);">&gt;&gt;</a></td> <td class="reply" id="reply116837"> <a id="116837"></a> <div class="replyheader"> 									 <span class="commentpostername">CrazyFolksTribe</span> <span class="postertrip">!loJSOMZg0g</span> - <span class="idhighlight">Thu, 12 Jun 2014 03:24:03 EST ID:PsmD9C2l</span> <span class="reflink">  <a href="/other/res/116836.php#i116837">No.116837</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313333323637373233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116837', '116836')" title="Report Post 116837"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116837" data-thread="116836"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BC5E15; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31313333323637373233">  ...<br>Did you do it on purpose? If not, you might consider learning some self-control.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116836.php#116841" onclick="highlight(116841);">&gt;&gt;</a></td> <td class="reply" id="reply116841"> <a id="116841"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigel Pellerwell</span>  - <span class="idhighlight">Thu, 12 Jun 2014 23:21:56 EST ID:TcaKB6+l</span> <span class="reflink">  <a href="/other/res/116836.php#i116841">No.116841</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other33313631333036393436')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116841', '116836')" title="Report Post 116841"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116841" data-thread="116836"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B8F4A9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other33313631333036393436">  <a href = "/other/res/116836.php#116837" onclick = "highlight(116837)">&gt;&gt;116837</a><br>2700mg seroquel at once is not that much fun at all.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116836.php#116853" onclick="highlight(116853);">&gt;&gt;</a></td> <td class="reply" id="reply116853"> <a id="116853"></a> <div class="replyheader"> 									 <span class="commentpostername">heartless asshole</span>  - <span class="idhighlight">Fri, 13 Jun 2014 15:26:44 EST ID:TcaKB6+l</span> <span class="reflink">  <a href="/other/res/116836.php#i116853">No.116853</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other33313631333036393436')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116853', '116836')" title="Report Post 116853"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116853" data-thread="116836"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CCAB83; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402687604283.png"> 1402687604283.png </a> -(<em>214451 B, 450x250</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/other/src/1402687604283.png"> <img src="/other/thumb/1402687604283s.jpg" alt="214451" class="thumb" /> </a>    <blockquote  class="other33313631333036393436">  <a href = "/other/res/116836.php" onclick = "highlight(116836)">&gt;&gt;116836</a><br>that&#39;s not a very accurate title OP. it should&#39;ve been &quot;help&quot;. but i don&#39;t think I (I!) could do something.<br>to answer your question.<br>you either:<br>weight too much.<br>ate too much.<br>u did too much sport/ your overall condition is too good.<br>ur tolerance is too high.<br>u are not lonely enought.<br>keep on trying!<br>life&#39;s a joke. take it with humor!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116836.php#116887" onclick="highlight(116887);">&gt;&gt;</a></td> <td class="reply" id="reply116887"> <a id="116887"></a> <div class="replyheader"> 									 <span class="commentpostername">Ebenezer Sashwell</span>  - <span class="idhighlight">Sat, 14 Jun 2014 17:27:59 EST ID:KcSpeluH</span> <span class="reflink">  <a href="/other/res/116836.php#i116887">No.116887</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31323736383737353536')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116887', '116836')" title="Report Post 116887"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116887" data-thread="116836"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F774EA; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31323736383737353536">  <a href = "/other/res/116836.php" onclick = "highlight(116836)">&gt;&gt;116836</a><br>300mg XR the night before will fuck you up all day long. pretty sure that much would kill you and you&#39;re full of shit. that stuff kills elderly people in low doses. enjoy your brain damage i guess.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="otherthread116808"> <div class="thread_header"> <a id="116808"></a> <span class="filetitle">some pharmaceuticals</span>  <span class="inbetween"> by </span> <span class="postername">Betsy Surringbury</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 10 Jun 2014 16:30:27 EST ID:LXsf4IS1</span></span>  <span class="reflink"> <a href="/other/res/116808.php#i116808">No.116808</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31333333323235373733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('116808')" title="Report Thread 116808"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/other/res/116808.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116808" data-thread="116808"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1017E5; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('otherthread116808');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/other/src/1402432227227.jpg"> 1402432227227.jpg </a> -(<em>5667 B, 289x174</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgother31333333323235373733" target="_blank" href="/other/src/1402432227227.jpg"> <img src="/other/thumb/1402432227227s.jpg" alt="5667" class="thumb" /> </a>   			 <blockquote class="opcomment other31333333323235373733">  WE HAVE  15 mg propranolol, atropine sulfate, 0.20 mg, 0.30 mg ergoton, amobarbital sodium 25 mg. what s gonna happen to us if we take several pills?   </blockquote>   				 				  <span class="omittedposts">   2 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/other/res/116808.php#116819" onclick="highlight(116819);">&gt;&gt;</a></td> <td class="reply" id="reply116819"> <a id="116819"></a> <div class="replyheader"> 									 <span class="commentpostername">Jenny Piddlewire</span>  - <span class="idhighlight">Wed, 11 Jun 2014 03:22:46 EST ID:w2TWMzFa</span> <span class="reflink">  <a href="/other/res/116808.php#i116819">No.116819</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31323831363530363739')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116819', '116808')" title="Report Post 116819"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116819" data-thread="116808"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D3CBC7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31323831363530363739">  where the fuck did you get amobarbital?<br><br>I thought barbiturates were basically a thing of the past   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116808.php#116820" onclick="highlight(116820);">&gt;&gt;</a></td> <td class="reply" id="reply116820"> <a id="116820"></a> <div class="replyheader"> 									 <span class="commentpostername">Hannah Bupperspear</span>  - <span class="idhighlight">Wed, 11 Jun 2014 03:27:34 EST ID:rwHJ9sdq</span> <span class="reflink">  <a href="/other/res/116808.php#i116820">No.116820</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31313335343838363530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116820', '116808')" title="Report Post 116820"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116820" data-thread="116808"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #16C45A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31313335343838363530">  <a href = "/other/res/116808.php#116819" onclick = "highlight(116819)">&gt;&gt;116819</a><br><br>you&#39;re thinking quaaludes homie   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116808.php#116825" onclick="highlight(116825);">&gt;&gt;</a></td> <td class="reply" id="reply116825"> <a id="116825"></a> <div class="replyheader"> 									 <span class="commentpostername">Jarvis Dezzlehat</span>  - <span class="idhighlight">Wed, 11 Jun 2014 15:04:00 EST ID:6S8LUkLw</span> <span class="reflink">  <a href="/other/res/116808.php#i116825">No.116825</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other343131313739333332')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116825', '116808')" title="Report Post 116825"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116825" data-thread="116808"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AF0264; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other343131313739333332">  <a href = "/other/res/116808.php#116820" onclick = "highlight(116820)">&gt;&gt;116820</a><br>no he&#39;s right. Barbs have been almost 100% replaced by benzos. Not completely tho, but its still surprising you have some   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116808.php#116828" onclick="highlight(116828);">&gt;&gt;</a></td> <td class="reply" id="reply116828"> <a id="116828"></a> <div class="replyheader"> 									 <span class="commentpostername">John Sinninggold</span>  - <span class="idhighlight">Wed, 11 Jun 2014 22:21:39 EST ID:dfnlNupF</span> <span class="reflink">  <a href="/other/res/116808.php#i116828">No.116828</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other31323832383731323330')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116828', '116808')" title="Report Post 116828"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116828" data-thread="116808"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DD0E15; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other31323832383731323330">  <a href = "/other/res/116808.php" onclick = "highlight(116808)">&gt;&gt;116808</a><br>The only one of those drugs I recognize is propanolol. It&#39;s a beta blocker, so it won&#39;t get you high, BUT there has been research into its uses as therapy for PTSD. If you take the correct dosage of it your brain won&#39;t be able to store long term memories for a short while, by blocking certain protein combinations in the frontal lobe, so you can erase a moment entirely if you pop em after trauma.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/other/res/116808.php#116851" onclick="highlight(116851);">&gt;&gt;</a></td> <td class="reply" id="reply116851"> <a id="116851"></a> <div class="replyheader"> 									 <span class="commentpostername">Archie Puggleforth</span>  - <span class="idhighlight">Fri, 13 Jun 2014 15:05:12 EST ID:siQ4uHvy</span> <span class="reflink">  <a href="/other/res/116808.php#i116851">No.116851</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('other32373331353539343431')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('116851', '116808')" title="Report Post 116851"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="116851" data-thread="116808"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #592C0E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="other32373331353539343431">  <a href = "/other/res/116808.php#116813" onclick = "highlight(116813)">&gt;&gt;116813</a><br>Without even looking it up, lysergic acid diethylamide 25 was the result of experimenting with ergot to help post partum bleeding. So, it may well just shut down blood flow to your extremities. Prop is a beta blocker, lowers physical symptoms of anxiety in hope of reducing the psychological impact, inverse of most anxiolytic actions. BARBITAL that&#39;s a barbiturate I didn&#39;t know they even prescribed that sedative anymore.<br><br>Forego the atropin and ergotron, hold onto propranolol if you&#39;re in a situation where your heart is racing, and space out like a zombie and fall asleep with the amobarbital.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://insomniacgamers.net"><img src="http://cdn.420chan.org/sp/i.png"></a>
		</div>
				<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/other/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="other" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">  <a href="/other/6.php">&lt;&lt;Last</a>   <span style="font-size: +1;">Pages</span>   <a href="/other/8.php">Next&gt;&gt;</a>  <br />   <a href="/other/index.php">0</a>     <a href="/other/1.php">1</a>     <a href="/other/2.php">2</a>     <a href="/other/3.php">3</a>     <a href="/other/4.php">4</a>     <a href="/other/5.php">5</a>     <a href="/other/6.php">6</a>      7    <a href="/other/8.php">8</a>     <a href="/other/9.php">9</a>     <a href="/other/10.php">10</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
							<li><img width='32' height='32' class='boardicon' alt='h' src='/static/images/board_icons/h_icon_32.png' />
		<span class='byline'>Hentai - <a href='/h/res/133959.php' class='boardlink'>Thread 133959</a></span>
		<p>>>216250... <a href='/h/res/133959.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='wooo' src='/static/images/board_icons/wooo_icon_32.png' />
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3854236.php' class='boardlink'>Thread 3854236</a></span>
		<p>>>3854682
>writes his own I'M VINCE MCMAHON DAMMIT MASTODONS MASTODONS MASTODONS story
>insults ot... <a href='/wooo/res/3854236.php' class='boardlink'>&#8629;</a></p></li>
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

