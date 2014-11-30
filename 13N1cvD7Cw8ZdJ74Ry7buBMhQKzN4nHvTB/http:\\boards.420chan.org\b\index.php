http://boards.420chan.org/b/index.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Wed, 23 Jul 2014 00:24:33 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> Random &amp; High Stuff - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/b_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/b_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/b/index.php';
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
	 <div id="header"> <div id="board_logo"> <a href="/b/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/b_icon_64.png" alt="/b/ Icon" /> <p class="board_title_block"> <span class="board_name">/b/ &amp; /high/</span> <span class="board_title">Random &amp; High Stuff</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
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
	 <!--  <div style="position: absolute; right: 2.5%;"> <ul style="text-align: right; float: right; list-style: none; margin: 5px; font-size: 11px;"> <li style="margin-bottom: 2px;">Board IRC: <a href="irc://irc.420chan.org/420chan">#420chan @ irc.420chan.org</a></li> <li>New to IRC? <a href="http://420chan.org/#irc">Start Here</a></li> </ul> </div>  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/b/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="b" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />    <input type="hidden" name="name" />   <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>      <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div> <script type="text/javascript">set_anoninputs("postform")</script>  <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 5000KB.</li> <li>Images greater than 256x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> 			 <li style="font-size: 16px; font-weight: bold;">SMOKE MORE. CHILL OUT.</li> </ul> </div> <hr style="margin-bottom:2px;" /> 		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://420chan.org/advertise"><img src="http://cdn.420chan.org/sp/YOUR-AD-HERE.gif"></a>
		</div>
		 <hr style="margin-top:2px;" />   <form id="delform" action="/b/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="b" />    <div id=""> <div class="thread_header"> <a id="3695658"></a> <span class="filetitle">SARVAR BULLS</span>  <span class="inbetween"> by </span> <span class="postername">Kirtaner</span> <span class="postertrip">!Ub4TCdRjOM</span> <span class="inbetween"> - <span class="idhighlight">Fri, 11 Jul 2014 15:49:57 EST ID:UTr9Pk3c</span></span>  <span class="reflink"> <a href="/b/res/3695658.php#i3695658">No.3695658</a> </span>   <i class="gl glyphicon-paperclip"></i>   			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3695658&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3695658&amp;vote=1">Yes!</a>  -->   <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3695658')" title="Report Thread 3695658"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3695658.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3695658" data-thread="3695658"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EBA3CD; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>-->  </div>  <span class="filesize"> <a target="_blank" href="/b/src/1405108197226.gif"> 1405108197226.gif </a> -(<em>1313079 B, 636x424</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb32393235353236333032" target="_blank" href="/b/src/1405108197226.gif"> <img src="/b/thumb/1405108197226s.jpg" alt="1313079" class="thumb" /> </a>   			 <blockquote class="opcomment">  THEENK OF DA CHEELDWEENS<br><embed allowscriptaccess="never" height="224" src="http://pitchinbox.com/widget/widget.swf?id=7588392829" type="application/x-shockwave-flash" width="320" wmode="transparent">   </blockquote>   				 				  <span class="omittedposts">  450 posts and 155 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3695658.php#3709425" onclick="highlight(3709425);">&gt;&gt;</a></td> <td class="reply" id="reply3709425"> <a id="3709425"></a> <div class="replyheader"> 									 <span class="commentpostername">Finnegan Fluffmire</span>  - <span class="idhighlight">Tue, 22 Jul 2014 14:37:12 EST ID:BOdn6FzG</span> <span class="reflink">  <a href="/b/res/3695658.php#i3709425">No.3709425</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33373036323636333131')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709425', '3695658')" title="Report Post 3709425"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709425" data-thread="3695658"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6D67D9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b33373036323636333131">  <a href = "/b/res/3695658.php#3709409" onclick = "highlight(3709409)">&gt;&gt;3709409</a> maybe lots of lizards or snake heads   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3695658.php#3709666" onclick="highlight(3709666);">&gt;&gt;</a></td> <td class="reply" id="reply3709666"> <a id="3709666"></a> <div class="replyheader"> 									 <span class="commentpostername">Arena Tycoon Sophie</span>  - <span class="idhighlight">Tue, 22 Jul 2014 17:57:49 EST ID:CFU/Y3G/</span> <span class="reflink">  <a href="/b/res/3695658.php#i3709666">No.3709666</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31343531363738393433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709666', '3695658')" title="Report Post 3709666"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709666" data-thread="3695658"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7888F0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31343531363738393433">  <a href = "/b/res/3695658.php#3709425" onclick = "highlight(3709425)">&gt;&gt;3709425</a><br>Sticky till we hit bump limit also we&#39;re already behind on this months $$$   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3695658.php#3709774" onclick="highlight(3709774);">&gt;&gt;</a></td> <td class="reply" id="reply3709774"> <a id="3709774"></a> <div class="replyheader"> 									 <span class="commentpostername">Sabrewulf</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:45:19 EST ID:77tG+xiZ</span> <span class="reflink">  <a href="/b/res/3695658.php#i3709774">No.3709774</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323233343234353834')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709774', '3695658')" title="Report Post 3709774"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709774" data-thread="3695658"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D78229; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323233343234353834">  <a href = "/b/res/3695658.php#3709666" onclick = "highlight(3709666)">&gt;&gt;3709666</a><br>sticky till kirt posts pics of his butthole   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709810"> <div class="thread_header"> <a id="3709810"></a> <span class="filetitle">This kid&#39;s a cunt.</span>  <span class="inbetween"> by </span> <span class="postername">Fuck Nommerketch</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 20:03:57 EST ID:ixr5G65d</span></span>  <span class="reflink"> <a href="/b/res/3709810.php#i3709810">No.3709810</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31363635333634353935')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709810')" title="Report Thread 3709810"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709810.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709810" data-thread="3709810"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #77AD21; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709810');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406073837960.jpg"> 1406073837960.jpg </a> -(<em>82333 B, 960x592</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31363635333634353935" target="_blank" href="/b/src/1406073837960.jpg"> <img src="/b/thumb/1406073837960s.jpg" alt="82333" class="thumb" /> </a>   			 <blockquote class="opcomment b31363635333634353935">  So I have known this douche since elementary school, and he is quite the douche. I don&#39;t know why I felt the need to make this thread, but I just wanted to let everyone know that I will fuck with this kid any chance I get. <br><br>Look at him...just fucking look at him. He is such a fedora lord.   </blockquote>   				 				  <span class="omittedposts">   3 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709810.php#3709818" onclick="highlight(3709818);">&gt;&gt;</a></td> <td class="reply" id="reply3709818"> <a id="3709818"></a> <div class="replyheader"> 									 <span class="commentpostername">Boarder Fucking</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:10:26 EST ID:pQCj73+N</span> <span class="reflink">  <a href="/b/res/3709810.php#i3709818">No.3709818</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b383438393231393930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709818', '3709810')" title="Report Post 3709818"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709818" data-thread="3709810"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EF4A86; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b383438393231393930">  <a href = "/b/res/3709810.php#3709814" onclick = "highlight(3709814)">&gt;&gt;3709814</a><br>Actually, I love your hate. Gives me something to fight.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709810.php#3709820" onclick="highlight(3709820);">&gt;&gt;</a></td> <td class="reply" id="reply3709820"> <a id="3709820"></a> <div class="replyheader"> 									 <span class="commentpostername">Ares Enduwa</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:11:18 EST ID:77tG+xiZ</span> <span class="reflink">  <a href="/b/res/3709810.php#i3709820">No.3709820</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323233343234353834')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709820', '3709810')" title="Report Post 3709820"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709820" data-thread="3709810"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #144C4A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323233343234353834">  yeah he looks like a faggot<br><br>nb   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709810.php#3709822" onclick="highlight(3709822);">&gt;&gt;</a></td> <td class="reply" id="reply3709822"> <a id="3709822"></a> <div class="replyheader"> 									 <span class="commentpostername">Michel Guérard</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:12:07 EST ID:4LCgTbCU</span> <span class="reflink">  <a href="/b/res/3709810.php#i3709822">No.3709822</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323736343639373433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709822', '3709810')" title="Report Post 3709822"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709822" data-thread="3709810"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7D100B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323736343639373433">  OP&#39;s mad that his faggot friend got on the news and not him   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709810.php#3709835" onclick="highlight(3709835);">&gt;&gt;</a></td> <td class="reply" id="reply3709835"> <a id="3709835"></a> <div class="replyheader"> 									 <span class="commentpostername">Fuck Nommerketch</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:24:22 EST ID:ixr5G65d</span> <span class="reflink">  <a href="/b/res/3709810.php#i3709835">No.3709835</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31363635333634353935')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709835', '3709810')" title="Report Post 3709835"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709835" data-thread="3709810"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AEE1A8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406075062960.jpg"> 1406075062960.jpg </a> -(<em>56094 B, 720x960</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406075062960.jpg"> <img src="/b/thumb/1406075062960s.jpg" alt="56094" class="thumb" /> </a>    <blockquote  class="b31363635333634353935">  <a href = "/b/res/3709810.php#3709822" onclick = "highlight(3709822)">&gt;&gt;3709822</a><br>He wasn&#39;t on the news, he just got to go on set of the station to set up lights. And you honestly think I would be friends with a dickhole like this?   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709816"> <div class="thread_header"> <a id="3709816"></a> <span class="filetitle">Post Desktop</span>  <span class="inbetween"> by </span> <span class="postername">Urbain Dubois</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 20:09:51 EST ID:Yb4lL706</span></span>  <span class="reflink"> <a href="/b/res/3709816.php#i3709816">No.3709816</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323534343033303033')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709816')" title="Report Thread 3709816"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709816.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709816" data-thread="3709816"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #74BA47; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709816');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406074191016.png"> 1406074191016.png </a> -(<em>3367718 B, 1600x900</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31323534343033303033" target="_blank" href="/b/src/1406074191016.png"> <img src="/b/thumb/1406074191016s.jpg" alt="3367718" class="thumb" /> </a>   			 <blockquote class="opcomment b31323534343033303033">  Screenshot your desktop, without tidying. Now.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709816.php#3709826" onclick="highlight(3709826);">&gt;&gt;</a></td> <td class="reply" id="reply3709826"> <a id="3709826"></a> <div class="replyheader"> 									 <span class="commentpostername">Radical Rex</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:13:23 EST ID:e9OO1nqK</span> <span class="reflink">  <a href="/b/res/3709816.php#i3709826">No.3709826</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323638363637383836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709826', '3709816')" title="Report Post 3709826"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709826" data-thread="3709816"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AD0689; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406074403855.png"> 1406074403855.png </a> -(<em>2018224 B, 1280x800</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406074403855.png"> <img src="/b/thumb/1406074403855s.jpg" alt="2018224" class="thumb" /> </a>    <blockquote  class="b31323638363637383836">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709816.php#3709833" onclick="highlight(3709833);">&gt;&gt;</a></td> <td class="reply" id="reply3709833"> <a id="3709833"></a> <div class="replyheader"> 									 <span class="commentpostername">Cyclist Ebenezer</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:23:03 EST ID:DzZ2TOs5</span> <span class="reflink">  <a href="/b/res/3709816.php#i3709833">No.3709833</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31363632333231393239')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709833', '3709816')" title="Report Post 3709833"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709833" data-thread="3709816"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8FBE94; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31363632333231393239">  <a href = "/b/res/3709816.php" onclick = "highlight(3709816)">&gt;&gt;3709816</a><br>Nice try NSA   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709775"> <div class="thread_header"> <a id="3709775"></a> <span class="filetitle">anyone&#39;s parents live in a bullshit fantasy land?</span>  <span class="inbetween"> by </span> <span class="postername">Nabe Shogun</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 19:45:35 EST ID:Ed4qh+dT</span></span>  <span class="reflink"> <a href="/b/res/3709775.php#i3709775">No.3709775</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709775&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709775&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333730313435333339')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709775')" title="Report Thread 3709775"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709775.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709775" data-thread="3709775"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AC26F0; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709775');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406072735387.jpg"> 1406072735387.jpg </a> -(<em>604837 B, 974x552</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31333730313435333339" target="_blank" href="/b/src/1406072735387.jpg"> <img src="/b/thumb/1406072735387s.jpg" alt="604837" class="thumb" /> </a>   			 <blockquote class="opcomment b31333730313435333339">  my dad is getting pissed at me cause i&#39;m 20 and don&#39;t have a job mainly cause the economy is fucked up and i dont feel like flipping burgers for $8 an hour just to make some corporate piggies richer. not to mention our fucked up country/society doesn&#39;t reward creative and free thinkers anymore. then my mom is getting pissed off cause i smoke weed in the garage and she bitches me out cause the smell is going into the house (it&#39;s not). well fuck you mom you&#39;re the one who brought me into this fucked up world. i don&#39;t even have a choice in the matter of me being born or not. weed is one of the few simple things i have to look forward to at the end of the day to forget about the bullshit that is society. i feel like lighting some shit on fire and saying FUCK YOU to the world.   </blockquote>   				 				  <span class="omittedposts">  19 posts and 4 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709775.php#3709827" onclick="highlight(3709827);">&gt;&gt;</a></td> <td class="reply" id="reply3709827"> <a id="3709827"></a> <div class="replyheader"> 									 <span class="commentpostername">Vera Rubiin</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:14:53 EST ID:fmzhBtQb</span> <span class="reflink">  <a href="/b/res/3709775.php#i3709827">No.3709827</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31363331393535363837')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709827', '3709775')" title="Report Post 3709827"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709827" data-thread="3709775"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0ED9F6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406074493693.jpg"> 1406074493693.jpg </a> -(<em>56261 B, 360x360</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406074493693.jpg"> <img src="/b/thumb/1406074493693s.jpg" alt="56261" class="thumb" /> </a>    <blockquote  class="b31363331393535363837">  <a href = "/b/res/3709775.php#3709824" onclick = "highlight(3709824)">&gt;&gt;3709824</a><br>Wrong picture. still nb   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709775.php#3709829" onclick="highlight(3709829);">&gt;&gt;</a></td> <td class="reply" id="reply3709829"> <a id="3709829"></a> <div class="replyheader"> 									 <span class="commentpostername">Rocket Executive Reuben</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:18:30 EST ID:u4p3qNit</span> <span class="reflink">  <a href="/b/res/3709775.php#i3709829">No.3709829</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32373331333634343039')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709829', '3709775')" title="Report Post 3709829"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709829" data-thread="3709775"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2533EF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b32373331333634343039">  <blockquote class = "unkfunc">&gt;No replies from OP<br>&gt;Ya&#39;ll niggas postin in a troll thread<br>&gt; <span class="spoiler" onmouseover=""><span>so am I</span></span></blockquote>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709775.php#3709830" onclick="highlight(3709830);">&gt;&gt;</a></td> <td class="reply" id="reply3709830"> <a id="3709830"></a> <div class="replyheader"> 									 <span class="commentpostername">Mike Brown</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:19:16 EST ID:6vzgBmSv</span> <span class="reflink">  <a href="/b/res/3709775.php#i3709830">No.3709830</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b383438393232333736')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709830', '3709775')" title="Report Post 3709830"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709830" data-thread="3709775"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DF63ED; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b383438393232333736">  If I led a nonviolent commie revolution would you follow me? <br><br>You!Yes, you!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709775.php#3709832" onclick="highlight(3709832);">&gt;&gt;</a></td> <td class="reply" id="reply3709832"> <a id="3709832"></a> <div class="replyheader"> 									 <span class="commentpostername">ElizaNickleshit.cgi</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:21:03 EST ID:OB0g0OEJ</span> <span class="reflink">  <a href="/b/res/3709775.php#i3709832">No.3709832</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b373932313930383439')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709832', '3709775')" title="Report Post 3709832"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709832" data-thread="3709775"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CB5B3D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b373932313930383439">  <blockquote class = "unkfunc">&gt;i feel like lighting some shit on fire and saying FUCK YOU to the world<br></blockquote>How about lighting some burgers on fire for <span class="spoiler" onmouseover=""><span>$8 an hour</span></span>?<br><br>If you can&#39;t monetize being a creative free thinker then you&#39;re not a creative free thinker. Get it done or realize you don&#39;t have what it takes and that burger flipping is the only valid skill you could offer.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709704"> <div class="thread_header"> <a id="3709704"></a> <span class="filetitle">Longest time without sleep?</span>  <span class="inbetween"> by </span> <span class="postername">Seymour Karp</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 18:49:58 EST ID:CeOjgTpK</span></span>  <span class="reflink"> <a href="/b/res/3709704.php#i3709704">No.3709704</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709704&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709704&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31383333383938363130')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709704')" title="Report Thread 3709704"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709704.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709704" data-thread="3709704"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C68C2F; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709704');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406069398312.gif"> 1406069398312.gif </a> -(<em>818502 B, 300x225</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31383333383938363130" target="_blank" href="/b/src/1406069398312.gif"> <img src="/b/thumb/1406069398312s.jpg" alt="818502" class="thumb" /> </a>   			 <blockquote class="opcomment b31383333383938363130">  So /b/, what&#39;s the longest you&#39;ve lasted without sleep? And were you aided by the use of any stimulants? My record is just over 3 days at 76 hours. I was using MDMA throughout those 3 days.   </blockquote>   				 				  <span class="omittedposts">  26 posts and 2 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709704.php#3709813" onclick="highlight(3709813);">&gt;&gt;</a></td> <td class="reply" id="reply3709813"> <a id="3709813"></a> <div class="replyheader"> 									 <span class="commentpostername">Edwin Salpeter</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:07:02 EST ID:CeOjgTpK</span> <span class="reflink">  <a href="/b/res/3709704.php#i3709813">No.3709813</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31383333383938363130')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709813', '3709704')" title="Report Post 3709813"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709813" data-thread="3709704"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #063888; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31383333383938363130">  <a href = "/b/res/3709704.php#3709805" onclick = "highlight(3709805)">&gt;&gt;3709805</a><br>That&#39;s why you gotta buy a test kit and stick to crystals. Fuck buying pills. I stopped taking them after I double dropped PMA which was sold to me as MDMA. I&#39;m lucky to be alive.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709704.php#3709819" onclick="highlight(3709819);">&gt;&gt;</a></td> <td class="reply" id="reply3709819"> <a id="3709819"></a> <div class="replyheader"> 									 <span class="commentpostername">Radical Rex</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:10:26 EST ID:e9OO1nqK</span> <span class="reflink">  <a href="/b/res/3709704.php#i3709819">No.3709819</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323638363637383836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709819', '3709704')" title="Report Post 3709819"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709819" data-thread="3709704"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D5B6A0; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323638363637383836">  3 nights in a row without sleep.<br><br>no drugs.<br><br>living. fucking. hell.<br><br>by the end of it i was experiencing auditory and visual hallucinations, definitely not something i would willingly do again.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709704.php#3709823" onclick="highlight(3709823);">&gt;&gt;</a></td> <td class="reply" id="reply3709823"> <a id="3709823"></a> <div class="replyheader"> 									 <span class="commentpostername">Edwin Salpeter</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:12:13 EST ID:CeOjgTpK</span> <span class="reflink">  <a href="/b/res/3709704.php#i3709823">No.3709823</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31383333383938363130')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709823', '3709704')" title="Report Post 3709823"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709823" data-thread="3709704"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CFD0C3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31383333383938363130">  <a href = "/b/res/3709704.php#3709819" onclick = "highlight(3709819)">&gt;&gt;3709819</a><br>Were you on your own for the entirety of it or were you interacting with people?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709704.php#3709831" onclick="highlight(3709831);">&gt;&gt;</a></td> <td class="reply" id="reply3709831"> <a id="3709831"></a> <div class="replyheader"> 									 <span class="commentpostername">Radical Rex</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:19:17 EST ID:e9OO1nqK</span> <span class="reflink">  <a href="/b/res/3709704.php#i3709831">No.3709831</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323638363637383836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709831', '3709704')" title="Report Post 3709831"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709831" data-thread="3709704"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #708361; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323638363637383836">  <a href = "/b/res/3709704.php#3709823" onclick = "highlight(3709823)">&gt;&gt;3709823</a><br>i was locked in my room working on a take-home exam paper that i left to the last minute.<br><br>the sounds around me started echoing in weird ways, the txt of the book i was referencing started doing the wave, and some weird bluish women appeared in my computer screen.<br><br>shit was literally the most unpleasant experience i have endured, i can only say that in hindsight though, at the time i was too fucked up to notice how fucked i was.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709212"> <div class="thread_header"> <a id="3709212"></a> <span class="filetitle">I have made a terrible mistake</span>  <span class="inbetween"> by </span> <span class="postername">Ettore Boiardi</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 09:13:56 EST ID:iRdbvmw+</span></span>  <span class="reflink"> <a href="/b/res/3709212.php#i3709212">No.3709212</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709212&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709212&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33353831303435303738')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709212')" title="Report Thread 3709212"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709212.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709212" data-thread="3709212"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BCC77F; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709212');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406034836012.jpg"> 1406034836012.jpg </a> -(<em>325415 B, 1215x891</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb33353831303435303738" target="_blank" href="/b/src/1406034836012.jpg"> <img src="/b/thumb/1406034836012s.jpg" alt="325415" class="thumb" /> </a>   			 <blockquote class="opcomment b33353831303435303738">  <a href="https://www.youtube.com/watch?v=VhpXrSE0g6Q" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=VhpXrSE0g6Q</a>   </blockquote>   				 				  <span class="omittedposts">  55 posts and 11 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709212.php#3709756" onclick="highlight(3709756);">&gt;&gt;</a></td> <td class="reply" id="reply3709756"> <a id="3709756"></a> <div class="replyheader"> 									 <span class="commentpostername">SidneyCockleshit.bin</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:34:45 EST ID:mwOL5Vno</span> <span class="reflink">  <a href="/b/res/3709212.php#i3709756">No.3709756</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323039383431393736')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709756', '3709212')" title="Report Post 3709756"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709756" data-thread="3709212"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CFBFC7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406072085850.jpg"> 1406072085850.jpg </a> -(<em>223279 B, 760x596</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406072085850.jpg"> <img src="/b/thumb/1406072085850s.jpg" alt="223279" class="thumb" /> </a>    <blockquote  class="b31323039383431393736">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709212.php#3709796" onclick="highlight(3709796);">&gt;&gt;</a></td> <td class="reply" id="reply3709796"> <a id="3709796"></a> <div class="replyheader"> 									 <span class="commentpostername">Gedo</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:52:12 EST ID:fuZEKGAj</span> <span class="reflink">  <a href="/b/res/3709212.php#i3709796">No.3709796</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313334373536333331')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709796', '3709212')" title="Report Post 3709796"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709796" data-thread="3709212"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #33EF4C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31313334373536333331">  <a href = "/b/res/3709212.php#3709699" onclick = "highlight(3709699)">&gt;&gt;3709699</a><br>Almost all of my high school friends joined the military after graduating and they all hate it. They also tell me that people like you enjoy it because youre fucking retarded and couldn&#39;t do any better. Two in particular are very adamant about this.<br>Just what I&#39;ve heard.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709212.php#3709801" onclick="highlight(3709801);">&gt;&gt;</a></td> <td class="reply" id="reply3709801"> <a id="3709801"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Horrywedge</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:54:15 EST ID:4LCgTbCU</span> <span class="reflink">  <a href="/b/res/3709212.php#i3709801">No.3709801</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323736343639373433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709801', '3709212')" title="Report Post 3709801"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709801" data-thread="3709212"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EBC77D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323736343639373433">  <a href = "/b/res/3709212.php#3709756" onclick = "highlight(3709756)">&gt;&gt;3709756</a><br>isn&#39;t this from the same comic series that shows a bunch of dudes getting plowed in the ass by transvestite goblins and shit   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709212.php#3709828" onclick="highlight(3709828);">&gt;&gt;</a></td> <td class="reply" id="reply3709828"> <a id="3709828"></a> <div class="replyheader"> 									 <span class="commentpostername">Charlie Trotter</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:15:17 EST ID:tZGumHu3</span> <span class="reflink">  <a href="/b/res/3709212.php#i3709828">No.3709828</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323131303734373931')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709828', '3709212')" title="Report Post 3709828"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709828" data-thread="3709212"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #503C15; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323131303734373931">  <a href = "/b/res/3709212.php#3709801" onclick = "highlight(3709801)">&gt;&gt;3709801</a><br>You say that like it&#39;s a bad thing.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3707530"> <div class="thread_header"> <a id="3707530"></a> <span class="filetitle">Cool shit you did this summer</span>  <span class="inbetween"> by </span> <span class="postername">Gaston Acurio</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 21 Jul 2014 05:04:21 EST ID:kX2SfXKh</span></span>  <span class="reflink"> <a href="/b/res/3707530.php#i3707530">No.3707530</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3707530&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3707530&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31383136373537393536')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3707530')" title="Report Thread 3707530"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3707530.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3707530" data-thread="3707530"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #59AE02; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3707530');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1405933461701.jpg"> 1405933461701.jpg </a> -(<em>51829 B, 568x320</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31383136373537393536" target="_blank" href="/b/src/1405933461701.jpg"> <img src="/b/thumb/1405933461701s.jpg" alt="51829" class="thumb" /> </a>   			 <blockquote class="opcomment b31383136373537393536">  I work out, snuck into festivals, have a fuck buddy who loves me and have an addiction to sleeping pills this summer. How&#39;s your summer like? Grimes related. She is amazing live, perfect symmetrical face and it&#39;s cute when she fucks up. I love how she&#39;s just messing around on stage. <br><br>How&#39;s your summers guys?   </blockquote>   				 				  <span class="omittedposts">  67 posts and 24 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3707530.php#3709762" onclick="highlight(3709762);">&gt;&gt;</a></td> <td class="reply" id="reply3709762"> <a id="3709762"></a> <div class="replyheader"> 									 <span class="commentpostername">Netjester</span> <span class="postertrip">!AI.skYnEt</span> - <span class="idhighlight">Tue, 22 Jul 2014 19:37:08 EST ID: iLikEToleARn</span> <span class="reflink">  <a href="/b/res/3707530.php#i3709762">No.3709762</a>   </span>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709762', '3707530')" title="Report Post 3709762"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709762" data-thread="3707530"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0F79A4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote >  <a href = "/b/res/3707530.php#3709760" onclick = "highlight(3709760)">&gt;&gt;3709760</a> <br>Comment well qq this is a collection of useful programs and GUI for the config file and voila, the duality is made apparent by suggesting the &quot;real&quot; conflict is not the board bout finals ect.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3707530.php#3709765" onclick="highlight(3709765);">&gt;&gt;</a></td> <td class="reply" id="reply3709765"> <a id="3709765"></a> <div class="replyheader"> 									 <span class="commentpostername">ReubenSommlefuck.ds</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:40:20 EST ID:yuVc5XDS</span> <span class="reflink">  <a href="/b/res/3707530.php#i3709765">No.3709765</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333635373635343930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709765', '3707530')" title="Report Post 3709765"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709765" data-thread="3707530"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #590D5C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31333635373635343930">  <a href = "/b/res/3707530.php#3709762" onclick = "highlight(3709762)">&gt;&gt;3709762</a><br>ya /qq/ threads nj   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3707530.php#3709771" onclick="highlight(3709771);">&gt;&gt;</a></td> <td class="reply" id="reply3709771"> <a id="3709771"></a> <div class="replyheader"> 									 <span class="commentpostername">Seymour Karp</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:44:27 EST ID:CeOjgTpK</span> <span class="reflink">  <a href="/b/res/3707530.php#i3709771">No.3709771</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31383333383938363130')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709771', '3707530')" title="Report Post 3709771"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709771" data-thread="3707530"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9BFEC7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31383333383938363130">  <a href = "/b/res/3707530.php" onclick = "highlight(3707530)">&gt;&gt;3707530</a><br>It&#39;s been pretty boring. I quit drinking but started taking A LOT more drugs.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3707530.php#3709807" onclick="highlight(3709807);">&gt;&gt;</a></td> <td class="reply" id="reply3709807"> <a id="3709807"></a> <div class="replyheader"> 									 <span class="commentpostername">Wayne "The Brain" McClain</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:02:15 EST ID:vwkzKycl</span> <span class="reflink">  <a href="/b/res/3707530.php#i3709807">No.3709807</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333639383135353837')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709807', '3707530')" title="Report Post 3709807"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709807" data-thread="3707530"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F6EFF3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31333639383135353837">  This summer has been remarkably calm so far, been to one very good forest goa in the woods, which was awesome. Not many extremely interesting shit happened besides that. And I&#39;m ok with that. Drugs also don&#39;t interest me as they used to.<br>Shit, I&#39;m 22 and growing old.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3708664"> <div class="thread_header"> <a id="3708664"></a> <span class="filetitle">Teh future</span>  <span class="inbetween"> by </span> <span class="postername">Lucy Heartfilia</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 21 Jul 2014 23:04:15 EST ID:X26lHxMr</span></span>  <span class="reflink"> <a href="/b/res/3708664.php#i3708664">No.3708664</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32393032373031333137')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3708664')" title="Report Thread 3708664"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3708664.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3708664" data-thread="3708664"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1F0466; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3708664');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1405998255895.jpg"> 1405998255895.jpg </a> -(<em>6935 B, 258x195</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb32393032373031333137" target="_blank" href="/b/src/1405998255895.jpg"> <img src="/b/thumb/1405998255895s.jpg" alt="6935" class="thumb" /> </a>   			 <blockquote class="opcomment b32393032373031333137">  I was standing with my friend outside of his house one night back in winter. Both of us were high as shit. As he smoked his cigarette I looked out across his neighborhood and suddenly became obsessed with thinking about what everything will look like 100-150 years from now. I started imagining all the other houses having weird piping and other bizarre architectural elements. And for the rest of that week I was fixated on the thought of what everything will look like in a century or so from now. I realize it probably won&#39;t be TOO futuristic looking, but it will certainly be different, and strange. I wish I could have a sneak peek.   </blockquote>   				 				  <span class="omittedposts">  6 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3708664.php#3709719" onclick="highlight(3709719);">&gt;&gt;</a></td> <td class="reply" id="reply3709719"> <a id="3709719"></a> <div class="replyheader"> 									 <span class="commentpostername">Kevin Nash</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:03:57 EST ID:z/0L/ddB</span> <span class="reflink">  <a href="/b/res/3708664.php#i3709719">No.3709719</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33333632353936353637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709719', '3708664')" title="Report Post 3709719"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709719" data-thread="3708664"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1DE42D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b33333632353936353637">  dick inspired architecture   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708664.php#3709737" onclick="highlight(3709737);">&gt;&gt;</a></td> <td class="reply" id="reply3709737"> <a id="3709737"></a> <div class="replyheader"> 									 <span class="commentpostername">PokéManiac Beatrice</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:22:56 EST ID:Na6rHsf5</span> <span class="reflink">  <a href="/b/res/3708664.php#i3709737">No.3709737</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b383438393232333731')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709737', '3708664')" title="Report Post 3709737"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709737" data-thread="3708664"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #935AB8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b383438393232333731">  /fu/ or /fo/!<br><br>Place your bets!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708664.php#3709797" onclick="highlight(3709797);">&gt;&gt;</a></td> <td class="reply" id="reply3709797"> <a id="3709797"></a> <div class="replyheader"> 									 <span class="commentpostername">Vice Admiral Nakamura</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:52:35 EST ID:sSdqq096</span> <span class="reflink">  <a href="/b/res/3708664.php#i3709797">No.3709797</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32303333303137353439')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709797', '3708664')" title="Report Post 3709797"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709797" data-thread="3708664"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A2D8FD; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406073155784.gif"> 1406073155784.gif </a> -(<em>218351 B, 160x120</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406073155784.gif"> <img src="/b/src/1406073155784.gif" alt="218351" class="thumb" /> </a>    <blockquote  class="b32303333303137353439">  <a href = "/b/res/3708664.php#3709707" onclick = "highlight(3709707)">&gt;&gt;3709707</a><br><blockquote class = "unkfunc">&gt;all the trees n shit come back <br></blockquote>If they&#39;re going to come back then where did they go in the first place? Where are all the trees right now? Are they hiding?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708664.php#3709808" onclick="highlight(3709808);">&gt;&gt;</a></td> <td class="reply" id="reply3709808"> <a id="3709808"></a> <div class="replyheader"> 									 <span class="commentpostername">Boarder Fucking</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:02:26 EST ID:pQCj73+N</span> <span class="reflink">  <a href="/b/res/3708664.php#i3709808">No.3709808</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b383438393231393930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709808', '3708664')" title="Report Post 3709808"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709808" data-thread="3708664"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #233256; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b383438393231393930">  <a href = "/b/res/3708664.php#3709797" onclick = "highlight(3709797)">&gt;&gt;3709797</a><br>Theyre with the images.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709463"> <div class="thread_header"> <a id="3709463"></a> <span class="filetitle">Is it me or is everything now cool?</span>  <span class="inbetween"> by </span> <span class="postername">ReubenSommlefuck.ds</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 15:12:34 EST ID:yuVc5XDS</span></span>  <span class="reflink"> <a href="/b/res/3709463.php#i3709463">No.3709463</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709463&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709463&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333635373635343930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709463')" title="Report Thread 3709463"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709463.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709463" data-thread="3709463"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #51D26B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709463');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406056354192.jpg"> 1406056354192.jpg </a> -(<em>24177 B, 480x320</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31333635373635343930" target="_blank" href="/b/src/1406056354192.jpg"> <img src="/b/thumb/1406056354192s.jpg" alt="24177" class="thumb" /> </a>   			 <blockquote class="opcomment b31333635373635343930">  Beards = cool<br>nerds = cool<br>throwback = cool<br>victoian daper gent = cool<br>tattoos = cool<br>sunglasses = forever cool<br><br>I dont know if its just the summer but everyone to me just looks so stylish<br>are you stylish?<br>am I?   </blockquote>   				 				  <span class="omittedposts">  29 posts and 12 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709463.php#3709776" onclick="highlight(3709776);">&gt;&gt;</a></td> <td class="reply" id="reply3709776"> <a id="3709776"></a> <div class="replyheader"> 									 <span class="commentpostername">ReubenSommlefuck.ds</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:46:06 EST ID:yuVc5XDS</span> <span class="reflink">  <a href="/b/res/3709463.php#i3709776">No.3709776</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333635373635343930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709776', '3709463')" title="Report Post 3709776"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709776" data-thread="3709463"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2D5557; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406072766192.jpg"> 1406072766192.jpg </a> -(<em>53795 B, 346x489</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406072766192.jpg"> <img src="/b/thumb/1406072766192s.jpg" alt="53795" class="thumb" /> </a>    <blockquote  class="b31333635373635343930">  <a href = "/b/res/3709463.php#3709759" onclick = "highlight(3709759)">&gt;&gt;3709759</a><br>its official then colored hair is cool   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709463.php#3709779" onclick="highlight(3709779);">&gt;&gt;</a></td> <td class="reply" id="reply3709779"> <a id="3709779"></a> <div class="replyheader"> 									 <span class="commentpostername">Dan Quinn</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:47:23 EST ID:fmzhBtQb</span> <span class="reflink">  <a href="/b/res/3709463.php#i3709779">No.3709779</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31363331393535363837')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709779', '3709463')" title="Report Post 3709779"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709779" data-thread="3709463"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #36E6D2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31363331393535363837">  <a href = "/b/res/3709463.php#3709552" onclick = "highlight(3709552)">&gt;&gt;3709552</a><br>That is probably me in 10 years. <br><br>My youthful head of hair and muscular physique prevent me from being sad about that now though. <br><br>nb for future depression   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709463.php#3709786" onclick="highlight(3709786);">&gt;&gt;</a></td> <td class="reply" id="reply3709786"> <a id="3709786"></a> <div class="replyheader"> 									 <span class="commentpostername">Sabrewulf</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:48:49 EST ID:77tG+xiZ</span> <span class="reflink">  <a href="/b/res/3709463.php#i3709786">No.3709786</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323233343234353834')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709786', '3709463')" title="Report Post 3709786"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709786" data-thread="3709463"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FF1F72; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323233343234353834">  all those things are actually for faggots   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709463.php#3709790" onclick="highlight(3709790);">&gt;&gt;</a></td> <td class="reply" id="reply3709790"> <a id="3709790"></a> <div class="replyheader"> 									 <span class="commentpostername">Broik</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:50:28 EST ID:net9TMLK</span> <span class="reflink">  <a href="/b/res/3709463.php#i3709790">No.3709790</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313937343335373131')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709790', '3709463')" title="Report Post 3709790"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709790" data-thread="3709463"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E79386; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31313937343335373131">  Being yourself is cool now.<br>As long as you don&#39;t look like a poser(hipster), you are cool.<br>Just don&#39;t compromise yourself, and you will get cooler.<br>Being honest about copying people is cool too.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3707311"> <div class="thread_header"> <a id="3707311"></a> <span class="filetitle">how many drugs?</span>  <span class="inbetween"> by </span> <span class="postername">Prince of Persia</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 20 Jul 2014 23:36:35 EST ID:R7MF3N5D</span></span>  <span class="reflink"> <a href="/b/res/3707311.php#i3707311">No.3707311</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3707311&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3707311&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31383136383530313034')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3707311')" title="Report Thread 3707311"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3707311.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3707311" data-thread="3707311"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #61CAD0; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3707311');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1405913795628.jpg"> 1405913795628.jpg </a> -(<em>10428 B, 247x204</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31383136383530313034" target="_blank" href="/b/src/1405913795628.jpg"> <img src="/b/thumb/1405913795628s.jpg" alt="10428" class="thumb" /> </a>   			 <blockquote class="opcomment b31383136383530313034">  How many drugs have you done? <br>Here&#39;s my list:<br>1.cannabis<br>2.k2/spice<br>3.alcohol + moonshine<br>4.valium<br>5.klonopin<br>6.xanax<br>7.ativan<br>8.mdma<br>9.25i-nbome<br>10.mescaline<br>11.HBWR/LSA<br>12.crack<br>13.adderall  <div class="abbrev"> Comment too long. Click <a href="/b/res/3707311.php">here</a> to view the full text. </div>   </blockquote>   				 				  <span class="omittedposts">  81 posts and 20 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3707311.php#3709652" onclick="highlight(3709652);">&gt;&gt;</a></td> <td class="reply" id="reply3709652"> <a id="3709652"></a> <div class="replyheader"> 									 <span class="commentpostername">ReubenSommlefuck.ds</span>  - <span class="idhighlight">Tue, 22 Jul 2014 17:41:07 EST ID:yuVc5XDS</span> <span class="reflink">  <a href="/b/res/3707311.php#i3709652">No.3709652</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333635373635343930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709652', '3707311')" title="Report Post 3709652"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709652" data-thread="3707311"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #572D26; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31333635373635343930">  <a href = "/b/res/3707311.php#3709612" onclick = "highlight(3709612)">&gt;&gt;3709612</a><br>you are making a list? are you participating in medical testing?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3707311.php#3709768" onclick="highlight(3709768);">&gt;&gt;</a></td> <td class="reply" id="reply3709768"> <a id="3709768"></a> <div class="replyheader"> 									 <span class="commentpostername">Pierre Troisgros</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:41:57 EST ID:JhHk+9Y5</span> <span class="reflink">  <a href="/b/res/3707311.php#i3709768">No.3709768</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b383235333137333731')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709768', '3707311')" title="Report Post 3709768"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709768" data-thread="3707311"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B79188; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b383235333137333731">  <a href = "/b/res/3707311.php" onclick = "highlight(3707311)">&gt;&gt;3707311</a><br>I only have ever tried heroin, never smoked weed, I have drank alcohol a few times, don&#39;t smoke or drink coffee, just tried heroin. It was fun kind of   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3707311.php#3709788" onclick="highlight(3709788);">&gt;&gt;</a></td> <td class="reply" id="reply3709788"> <a id="3709788"></a> <div class="replyheader"> 									 <span class="commentpostername">Seymour Karp</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:49:37 EST ID:CeOjgTpK</span> <span class="reflink">  <a href="/b/res/3707311.php#i3709788">No.3709788</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31383333383938363130')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709788', '3707311')" title="Report Post 3709788"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709788" data-thread="3707311"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0BD453; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406072977312.gif"> 1406072977312.gif </a> -(<em>1259411 B, 480x360</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406072977312.gif"> <img src="/b/thumb/1406072977312s.jpg" alt="1259411" class="thumb" /> </a>    <blockquote  class="b31383333383938363130">  I order of preference<br><blockquote class = "unkfunc">&gt;Weed<br>&gt;MDMA<br>&gt;DMT<br>&gt;LSD<br>&gt;Tramadol<br>&gt;Coke<br>&gt;Ketamine<br>&gt;Speed<br>&gt;Nicotine<br>&gt;Alcohol<br>&gt;Mephedrone<br>&gt;K2/Spice</blockquote>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3707311.php#3709791" onclick="highlight(3709791);">&gt;&gt;</a></td> <td class="reply" id="reply3709791"> <a id="3709791"></a> <div class="replyheader"> 									 <span class="commentpostername">Seymour Karp</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:50:30 EST ID:CeOjgTpK</span> <span class="reflink">  <a href="/b/res/3707311.php#i3709791">No.3709791</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31383333383938363130')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709791', '3707311')" title="Report Post 3709791"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709791" data-thread="3707311"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8DF687; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31383333383938363130">  <a href = "/b/res/3707311.php#3709788" onclick = "highlight(3709788)">&gt;&gt;3709788</a><br>*IN ORDER OF PREFERENCE<br>nb for double post   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709670"> <div class="thread_header"> <a id="3709670"></a> <span class="filetitle">spread some knowledge</span>  <span class="inbetween"> by </span> <span class="postername">Ermac</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 18:02:13 EST ID:cHoNGljS</span></span>  <span class="reflink"> <a href="/b/res/3709670.php#i3709670">No.3709670</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313434303738373839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709670')" title="Report Thread 3709670"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709670.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709670" data-thread="3709670"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DA7360; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709670');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406066533432.jpg"> 1406066533432.jpg </a> -(<em>133299 B, 960x606</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31313434303738373839" target="_blank" href="/b/src/1406066533432.jpg"> <img src="/b/thumb/1406066533432s.jpg" alt="133299" class="thumb" /> </a>   			 <blockquote class="opcomment b31313434303738373839">  Did you know...<br>If you stand in the bottom of a well, you would be able to see the stars even in the daytime.   </blockquote>   				 				  <span class="omittedposts">   8 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709670.php#3709773" onclick="highlight(3709773);">&gt;&gt;</a></td> <td class="reply" id="reply3709773"> <a id="3709773"></a> <div class="replyheader"> 									 <span class="commentpostername">Jacob Black</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:45:03 EST ID:HgOZZoyb</span> <span class="reflink">  <a href="/b/res/3709670.php#i3709773">No.3709773</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32393034303833303533')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709773', '3709670')" title="Report Post 3709773"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709773" data-thread="3709670"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9FBE6F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b32393034303833303533">  I only know that I know nothing.<br><br>seriously kids, don&#39;t drop out of college.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709670.php#3709778" onclick="highlight(3709778);">&gt;&gt;</a></td> <td class="reply" id="reply3709778"> <a id="3709778"></a> <div class="replyheader"> 									 <span class="commentpostername">Sabrewulf</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:47:21 EST ID:77tG+xiZ</span> <span class="reflink">  <a href="/b/res/3709670.php#i3709778">No.3709778</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323233343234353834')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709778', '3709670')" title="Report Post 3709778"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709778" data-thread="3709670"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5D8C28; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323233343234353834">  thats bullshit faggot   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709670.php#3709784" onclick="highlight(3709784);">&gt;&gt;</a></td> <td class="reply" id="reply3709784"> <a id="3709784"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Horrywedge</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:48:12 EST ID:4LCgTbCU</span> <span class="reflink">  <a href="/b/res/3709670.php#i3709784">No.3709784</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323736343639373433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709784', '3709670')" title="Report Post 3709784"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709784" data-thread="3709670"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E7AF36; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323736343639373433">  If you stand at the very top of a skyscraper you can see the earths core when you look down   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709670.php#3709821" onclick="highlight(3709821);">&gt;&gt;</a></td> <td class="reply" id="reply3709821"> <a id="3709821"></a> <div class="replyheader"> 									 <span class="commentpostername">Ling Xiaoyu</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:11:44 EST ID:hrhM9uIH</span> <span class="reflink">  <a href="/b/res/3709670.php#i3709821">No.3709821</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b343034323836383338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709821', '3709670')" title="Report Post 3709821"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709821" data-thread="3709670"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #692F7E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b343034323836383338">  <a href = "/b/res/3709670.php#3709773" onclick = "highlight(3709773)">&gt;&gt;3709773</a><br><br>oh look more of this shit.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3708909"> <div class="thread_header"> <a id="3708909"></a> <span class="filetitle">Would you rather.</span>  <span class="inbetween"> by </span> <span class="postername">Crunch Buttsteak</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 01:48:53 EST ID:uRBN4tdP</span></span>  <span class="reflink"> <a href="/b/res/3708909.php#i3708909">No.3708909</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3708909&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3708909&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313131353731393633')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3708909')" title="Report Thread 3708909"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3708909.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3708909" data-thread="3708909"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CDAC00; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3708909');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406008133720.jpg"> 1406008133720.jpg </a> -(<em>36331 B, 350x244</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31313131353731393633" target="_blank" href="/b/src/1406008133720.jpg"> <img src="/b/thumb/1406008133720s.jpg" alt="36331" class="thumb" /> </a>   			 <blockquote class="opcomment b31313131353731393633">  Would you rather become <span class="spoiler" onmouseover=""><span>deaf</span></span> or <span class="spoiler" onmouseover=""><span>blind</span></span> or <span class="spoiler" onmouseover=""><span>Homosexual</span></span>?   </blockquote>   				 				  <span class="omittedposts">  49 posts and 7 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3708909.php#3709772" onclick="highlight(3709772);">&gt;&gt;</a></td> <td class="reply" id="reply3709772"> <a id="3709772"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Horrywedge</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:44:47 EST ID:4LCgTbCU</span> <span class="reflink">  <a href="/b/res/3708909.php#i3709772">No.3709772</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323736343639373433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709772', '3708909')" title="Report Post 3709772"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709772" data-thread="3708909"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F35C53; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406072687750.jpg"> 1406072687750.jpg </a> -(<em>7950 B, 200x200</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406072687750.jpg"> <img src="/b/src/1406072687750.jpg" alt="7950" class="thumb" /> </a>    <blockquote  class="b31323736343639373433">  <a href = "/b/res/3708909.php#3709757" onclick = "highlight(3709757)">&gt;&gt;3709757</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708909.php#3709777" onclick="highlight(3709777);">&gt;&gt;</a></td> <td class="reply" id="reply3709777"> <a id="3709777"></a> <div class="replyheader"> 									 <span class="commentpostername">Jacob Black</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:46:13 EST ID:HgOZZoyb</span> <span class="reflink">  <a href="/b/res/3708909.php#i3709777">No.3709777</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32393034303833303533')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709777', '3708909')" title="Report Post 3709777"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709777" data-thread="3708909"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3ED130; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b32393034303833303533">  <a href = "/b/res/3708909.php#3709770" onclick = "highlight(3709770)">&gt;&gt;3709770</a><br><a href = "/b/res/3708909.php#3709772" onclick = "highlight(3709772)">&gt;&gt;3709772</a><br>I&#39;m sorry you guys aren&#39;t intelligent enough to make these types of choices.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708909.php#3709799" onclick="highlight(3709799);">&gt;&gt;</a></td> <td class="reply" id="reply3709799"> <a id="3709799"></a> <div class="replyheader"> 									 <span class="commentpostername">Claptrap</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:53:39 EST ID:4M+/iOSR</span> <span class="reflink">  <a href="/b/res/3708909.php#i3709799">No.3709799</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313937333635343531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709799', '3708909')" title="Report Post 3709799"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709799" data-thread="3708909"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8A9DBB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31313937333635343531">  <a href = "/b/res/3708909.php#3709777" onclick = "highlight(3709777)">&gt;&gt;3709777</a><br>they can&#39;t regulate their behavior and don&#39;t have autonomy over their mind yet<br><br>i don&#39;t either completely, but with meditation &amp; other mental exercises you can modulate how you react with reality   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708909.php#3709834" onclick="highlight(3709834);">&gt;&gt;</a></td> <td class="reply" id="reply3709834"> <a id="3709834"></a> <div class="replyheader"> 									 <span class="commentpostername">Ling Xiaoyu</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:23:37 EST ID:hrhM9uIH</span> <span class="reflink">  <a href="/b/res/3708909.php#i3709834">No.3709834</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b343034323836383338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709834', '3708909')" title="Report Post 3709834"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709834" data-thread="3708909"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5509C3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b343034323836383338">  <a href = "/b/res/3708909.php#3709757" onclick = "highlight(3709757)">&gt;&gt;3709757</a><br><br>swing and miss.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709722"> <div class="thread_header"> <a id="3709722"></a> <span class="filetitle">adasd</span>  <span class="inbetween"> by </span> <span class="postername">Galactic Grunt Cedric</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 19:05:49 EST ID:WvgRbWAk</span></span>  <span class="reflink"> <a href="/b/res/3709722.php#i3709722">No.3709722</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31363537323931363837')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709722')" title="Report Thread 3709722"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709722.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709722" data-thread="3709722"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DC5BBC; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709722');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406070349906.gif"> 1406070349906.gif </a> -(<em>1047735 B, 200x190</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31363537323931363837" target="_blank" href="/b/src/1406070349906.gif"> <img src="/b/src/1406070349906.gif" alt="1047735" class="thumb" /> </a>   			 <blockquote class="opcomment b31363537323931363837">  DICKS EVERYWHERE   </blockquote>   				 				  <span class="omittedposts">  4 posts and 3 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709722.php#3709752" onclick="highlight(3709752);">&gt;&gt;</a></td> <td class="reply" id="reply3709752"> <a id="3709752"></a> <div class="replyheader"> 									 <span class="commentpostername">Juggler Nathaniel</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:31:29 EST ID:97Lug5VW</span> <span class="reflink">  <a href="/b/res/3709722.php#i3709752">No.3709752</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333039393834383434')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709752', '3709722')" title="Report Post 3709752"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709752" data-thread="3709722"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CBACE6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406071889446.gif"> 1406071889446.gif </a> -(<em>2095219 B, 334x193</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406071889446.gif"> <img src="/b/thumb/1406071889446s.jpg" alt="2095219" class="thumb" /> </a>    <blockquote  class="b31333039393834383434">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709722.php#3709753" onclick="highlight(3709753);">&gt;&gt;</a></td> <td class="reply" id="reply3709753"> <a id="3709753"></a> <div class="replyheader"> 									 <span class="commentpostername">Moleman Manyblunts</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:32:17 EST ID:Xs0mnJf3</span> <span class="reflink">  <a href="/b/res/3709722.php#i3709753">No.3709753</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323833303931323333')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709753', '3709722')" title="Report Post 3709753"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709753" data-thread="3709722"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7FE053; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406071937110.jpg"> 1406071937110.jpg </a> -(<em>51079 B, 600x402</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406071937110.jpg"> <img src="/b/thumb/1406071937110s.jpg" alt="51079" class="thumb" /> </a>    <blockquote  class="b31323833303931323333">  <a href = "/b/res/3709722.php#3709750" onclick = "highlight(3709750)">&gt;&gt;3709750</a><br>are we asking questions now?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709722.php#3709755" onclick="highlight(3709755);">&gt;&gt;</a></td> <td class="reply" id="reply3709755"> <a id="3709755"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Horrywedge</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:34:41 EST ID:4LCgTbCU</span> <span class="reflink">  <a href="/b/res/3709722.php#i3709755">No.3709755</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323736343639373433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709755', '3709722')" title="Report Post 3709755"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709755" data-thread="3709722"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CFBA33; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406072081750.png"> 1406072081750.png </a> -(<em>47044 B, 688x223</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406072081750.png"> <img src="/b/thumb/1406072081750s.jpg" alt="47044" class="thumb" /> </a>    <blockquote  class="b31323736343639373433">  <a href = "/b/res/3709722.php#3709750" onclick = "highlight(3709750)">&gt;&gt;3709750</a><br>indeed   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709722.php#3709764" onclick="highlight(3709764);">&gt;&gt;</a></td> <td class="reply" id="reply3709764"> <a id="3709764"></a> <div class="replyheader"> 									 <span class="commentpostername">Pierre de Lune</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:39:51 EST ID:XYr4MUNf</span> <span class="reflink">  <a href="/b/res/3709722.php#i3709764">No.3709764</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32383835383639333530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709764', '3709722')" title="Report Post 3709764"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709764" data-thread="3709722"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #608C0A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406072391236.jpg"> 1406072391236.jpg </a> -(<em>243633 B, 530x397</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406072391236.jpg"> <img src="/b/thumb/1406072391236s.jpg" alt="243633" class="thumb" /> </a>    <blockquote  class="b32383835383639333530">  <a href = "/b/res/3709722.php" onclick = "highlight(3709722)">&gt;&gt;3709722</a><br>Yeah probably the best thread right now.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709702"> <div class="thread_header"> <a id="3709702"></a> <span class="filetitle">Cheel</span>  <span class="inbetween"> by </span> <span class="postername">Edwin Salpeter</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 18:45:23 EST ID:VFt3wnqm</span></span>  <span class="reflink"> <a href="/b/res/3709702.php#i3709702">No.3709702</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313836353539393933')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709702')" title="Report Thread 3709702"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709702.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709702" data-thread="3709702"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D6E4A5; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709702');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406069123738.jpg"> 1406069123738.jpg </a> -(<em>56423 B, 521x521</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31313836353539393933" target="_blank" href="/b/src/1406069123738.jpg"> <img src="/b/thumb/1406069123738s.jpg" alt="56423" class="thumb" /> </a>   			 <blockquote class="opcomment b31313836353539393933">  How do you calm the hell down, /b/?<br><br>I like to:<br><blockquote class = "unkfunc">&gt;get baked and aimlessly walk or hike<br>&gt;cook something I&#39;ve never cooked before<br>&gt;introduce seniors to gg allin<br>&gt;in extreme cases, bong hits and cute animal videos get me pretty relaxed.</blockquote>   </blockquote>   				 				  <span class="omittedposts">   1 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709702.php#3709739" onclick="highlight(3709739);">&gt;&gt;</a></td> <td class="reply" id="reply3709739"> <a id="3709739"></a> <div class="replyheader"> 									 <span class="commentpostername">PokéManiac Beatrice</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:23:52 EST ID:Na6rHsf5</span> <span class="reflink">  <a href="/b/res/3709702.php#i3709739">No.3709739</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b383438393232333731')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709739', '3709702')" title="Report Post 3709739"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709739" data-thread="3709702"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #151C70; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b383438393232333731">  Deep breaths....   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709702.php#3709745" onclick="highlight(3709745);">&gt;&gt;</a></td> <td class="reply" id="reply3709745"> <a id="3709745"></a> <div class="replyheader"> 									 <span class="commentpostername">SophieBattingtet.jpeg</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:27:03 EST ID:rfi2d69t</span> <span class="reflink">  <a href="/b/res/3709702.php#i3709745">No.3709745</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323831323935323836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709745', '3709702')" title="Report Post 3709745"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709745" data-thread="3709702"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BB3789; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323831323935323836">  i like the gg allin part   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709702.php#3709758" onclick="highlight(3709758);">&gt;&gt;</a></td> <td class="reply" id="reply3709758"> <a id="3709758"></a> <div class="replyheader"> 									 <span class="commentpostername">Girly Sanchez</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:36:12 EST ID:0AFGI2tE</span> <span class="reflink">  <a href="/b/res/3709702.php#i3709758">No.3709758</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33333831343237343035')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709758', '3709702')" title="Report Post 3709758"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709758" data-thread="3709702"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B00448; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b33333831343237343035">  i like to enjoy the feeling of the friction that rubbing my hand around my dick produces   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709702.php#3709763" onclick="highlight(3709763);">&gt;&gt;</a></td> <td class="reply" id="reply3709763"> <a id="3709763"></a> <div class="replyheader"> 									 <span class="commentpostername">Jacob Black</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:39:11 EST ID:HgOZZoyb</span> <span class="reflink">  <a href="/b/res/3709702.php#i3709763">No.3709763</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32393034303833303533')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709763', '3709702')" title="Report Post 3709763"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709763" data-thread="3709702"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #21EBDB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b32393034303833303533">  I like to be around my family.<br><br>Talk to them or do stuff with them.<br><br>I feel grateful for having a normal family because other people say that they hate their family. <br><br>They say that their friends are more valuable to them. This is so bizarre to me.<br><br>I would never feel that comfortable with &quot;just another person&quot;. They are a stranger to me.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709272"> <div class="thread_header"> <a id="3709272"></a> <span class="filetitle">DICKS EVERYWHERE</span>  <span class="inbetween"> by </span> <span class="postername">Marc Forgione</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 10:48:55 EST ID:KIN+WgeR</span></span>  <span class="reflink"> <a href="/b/res/3709272.php#i3709272">No.3709272</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709272&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709272&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323133393435343735')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709272')" title="Report Thread 3709272"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709272.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709272" data-thread="3709272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C84CC9; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709272');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406040535492.png"> 1406040535492.png </a> -(<em>18482 B, 500x500</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31323133393435343735" target="_blank" href="/b/src/1406040535492.png"> <img src="/b/thumb/1406040535492s.jpg" alt="18482" class="thumb" /> </a>   			 <blockquote class="opcomment b31323133393435343735">  DICKS EVERYWHERE   </blockquote>   				 				  <span class="omittedposts">  22 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709272.php#3709678" onclick="highlight(3709678);">&gt;&gt;</a></td> <td class="reply" id="reply3709678"> <a id="3709678"></a> <div class="replyheader"> 									 <span class="commentpostername">Tyler Florence</span>  - <span class="idhighlight">Tue, 22 Jul 2014 18:16:21 EST ID:TWjsC3+O</span> <span class="reflink">  <a href="/b/res/3709272.php#i3709678">No.3709678</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31373736353133313337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709678', '3709272')" title="Report Post 3709678"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709678" data-thread="3709272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #94312F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406067381982.jpg"> 1406067381982.jpg </a> -(<em>10224 B, 225x225</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406067381982.jpg"> <img src="/b/thumb/1406067381982s.jpg" alt="10224" class="thumb" /> </a>    <blockquote  class="b31373736353133313337">  check ur privy ledge   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709272.php#3709701" onclick="highlight(3709701);">&gt;&gt;</a></td> <td class="reply" id="reply3709701"> <a id="3709701"></a> <div class="replyheader"> 									 <span class="commentpostername">Juggler Nathaniel</span>  - <span class="idhighlight">Tue, 22 Jul 2014 18:44:02 EST ID:97Lug5VW</span> <span class="reflink">  <a href="/b/res/3709272.php#i3709701">No.3709701</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333039393834383434')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709701', '3709272')" title="Report Post 3709701"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709701" data-thread="3709272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #44752D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406069042446.gif"> 1406069042446.gif </a> -(<em>43823 B, 400x300</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406069042446.gif"> <img src="/b/thumb/1406069042446s.jpg" alt="43823" class="thumb" /> </a>    <blockquote  class="b31333039393834383434">  I knew this would come in handy one day.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709272.php#3709743" onclick="highlight(3709743);">&gt;&gt;</a></td> <td class="reply" id="reply3709743"> <a id="3709743"></a> <div class="replyheader"> 									 <span class="commentpostername">King Hippo</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:26:49 EST ID:GRCd56WL</span> <span class="reflink">  <a href="/b/res/3709272.php#i3709743">No.3709743</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32393335373232363039')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709743', '3709272')" title="Report Post 3709743"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709743" data-thread="3709272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #EDF608; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b32393335373232363039">  <a href = "/b/res/3709272.php#3709500" onclick = "highlight(3709500)">&gt;&gt;3709500</a><br>I only go 4 times a month, it&#39;s not so bad. I hate living in Texas, you know it&#39;s a felony to steal from oil sites? Fucking Texas. This is why I&#39;m going to CO. When I&#39;m done.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709272.php#3709754" onclick="highlight(3709754);">&gt;&gt;</a></td> <td class="reply" id="reply3709754"> <a id="3709754"></a> <div class="replyheader"> 									 <span class="commentpostername">Cyril Cluffingkudging</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:32:43 EST ID:b3Es3m0t</span> <span class="reflink">  <a href="/b/res/3709272.php#i3709754">No.3709754</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33333236363533333830')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709754', '3709272')" title="Report Post 3709754"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709754" data-thread="3709272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8C91CA; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b33333236363533333830">  Aw shit, I forgot to get the milk and my privilege checked.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3706682"> <div class="thread_header"> <a id="3706682"></a> <span class="filetitle">BLACK PEOPLE</span>  <span class="inbetween"> by </span> <span class="postername">Picnicker Molly</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 20 Jul 2014 14:31:01 EST ID:XCBmNpcZ</span></span>  <span class="reflink"> <a href="/b/res/3706682.php#i3706682">No.3706682</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3706682&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3706682&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33333336383832323233')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3706682')" title="Report Thread 3706682"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3706682.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3706682" data-thread="3706682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #BEA311; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3706682');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1405881061633.jpg"> 1405881061633.jpg </a> -(<em>101517 B, 580x515</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb33333336383832323233" target="_blank" href="/b/src/1405881061633.jpg"> <img src="/b/thumb/1405881061633s.jpg" alt="101517" class="thumb" /> </a>   			 <blockquote class="opcomment b33333336383832323233">  This thread is for ya&#39;ll. You deserve it!<br>If you&#39;re ebony race, you HAVE to post.   </blockquote>   				 				  <span class="omittedposts">  141 posts and 75 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3706682.php#3709697" onclick="highlight(3709697);">&gt;&gt;</a></td> <td class="reply" id="reply3709697"> <a id="3709697"></a> <div class="replyheader"> 									 <span class="commentpostername">EmmaGarringwetch.class</span>  - <span class="idhighlight">Tue, 22 Jul 2014 18:40:37 EST ID:SEnWcHsO</span> <span class="reflink">  <a href="/b/res/3706682.php#i3709697">No.3709697</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313836373236353332')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709697', '3706682')" title="Report Post 3709697"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709697" data-thread="3706682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #90954E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31313836373236353332">  <a href = "/b/res/3706682.php#3709694" onclick = "highlight(3709694)">&gt;&gt;3709694</a><br>Usually the flaky ass suburban white boys have to wait on a flaky ass negro at some point along the supply line.<br><br><span class="spoiler" onmouseover=""><span>&quot;Yo I&#39;ll be there in ten minutes&quot;</span></span>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3706682.php#3709698" onclick="highlight(3709698);">&gt;&gt;</a></td> <td class="reply" id="reply3709698"> <a id="3709698"></a> <div class="replyheader"> 									 <span class="commentpostername">Gedo</span>  - <span class="idhighlight">Tue, 22 Jul 2014 18:42:32 EST ID:fuZEKGAj</span> <span class="reflink">  <a href="/b/res/3706682.php#i3709698">No.3709698</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313334373536333331')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709698', '3706682')" title="Report Post 3709698"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709698" data-thread="3706682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #10CF29; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31313334373536333331">  <a href = "/b/res/3706682.php#3709697" onclick = "highlight(3709697)">&gt;&gt;3709697</a><br>I&#39;ve had more white guys do that to me than black dealers. I had a white guy once who literally told me he&#39;d be there in an hour and it took him a fucking MONTH. That happened several times. Not joking. He said an hour and took a GOD. DAMN. MONTH.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3706682.php#3709746" onclick="highlight(3709746);">&gt;&gt;</a></td> <td class="reply" id="reply3709746"> <a id="3709746"></a> <div class="replyheader"> 									 <span class="commentpostername">Ambassador Shras</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:28:46 EST ID:Re+KcOUF</span> <span class="reflink">  <a href="/b/res/3706682.php#i3709746">No.3709746</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31343432383632303036')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709746', '3706682')" title="Report Post 3709746"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709746" data-thread="3706682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #330E80; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31343432383632303036">  <a href = "/b/res/3706682.php#3707066" onclick = "highlight(3707066)">&gt;&gt;3707066</a><br><br>roolin   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3706682.php#3709749" onclick="highlight(3709749);">&gt;&gt;</a></td> <td class="reply" id="reply3709749"> <a id="3709749"></a> <div class="replyheader"> 									 <span class="commentpostername">Ambassador Shras</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:30:05 EST ID:Re+KcOUF</span> <span class="reflink">  <a href="/b/res/3706682.php#i3709749">No.3709749</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31343432383632303036')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709749', '3706682')" title="Report Post 3709749"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709749" data-thread="3706682"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B5F810; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406071805580.jpg"> 1406071805580.jpg </a> -(<em>6080 B, 217x232</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406071805580.jpg"> <img src="/b/thumb/1406071805580s.jpg" alt="6080" class="thumb" /> </a>    <blockquote  class="b31343432383632303036">  <a href = "/b/res/3706682.php#3709746" onclick = "highlight(3709746)">&gt;&gt;3709746</a><br><br>Perferius Jackson reporting in   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
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
 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/b/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="b" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <input type="hidden" name="name" />	  <table> <tbody>     <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">   <span style="font-size: +1;">Pages</span>   <a href="/b/1.php">Next&gt;&gt;</a>  <br />    0    <a href="/b/1.php">1</a>     <a href="/b/2.php">2</a>     <a href="/b/3.php">3</a>     <a href="/b/4.php">4</a>     <a href="/b/5.php">5</a>     <a href="/b/6.php">6</a>     <a href="/b/7.php">7</a>     <a href="/b/8.php">8</a>     <a href="/b/9.php">9</a>     <a href="/b/10.php">10</a>     <a href="/b/11.php">11</a>     <a href="/b/12.php">12</a>     <a href="/b/13.php">13</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
							<li><img width='32' height='32' class='boardicon' alt='hooch' src='/static/images/board_icons/hooch_icon_32.png' />
		<span class='byline'>Alcohol Discussion - <a href='/hooch/res/240697.php' class='boardlink'>Thread 240697</a></span>
		<p>>>240705

While I second that, try mixing it with that strong ginger beer shit, some juice (Pineap... <a href='/hooch/res/240697.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='vg' src='/static/images/board_icons/vg_icon_32.png' />
		<span class='byline'>Video Games - <a href='/vg/res/576648.php' class='boardlink'>Thread 576648</a></span>
		<p>Hey guys I came across this crazy mod the other night. Its a Batman mod for Doom 2. Why am i telling... <a href='/vg/res/576648.php' class='boardlink'>&#8629;</a></p></li>
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

