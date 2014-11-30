http://boards.420chan.org/b/2.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Wed, 23 Jul 2014 18:32:59 GMT
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/b/2.php';
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
	 <!--  <div style="position: absolute; right: 2.5%;"> <ul style="text-align: right; float: right; list-style: none; margin: 5px; font-size: 11px;"> <li style="margin-bottom: 2px;">Board IRC: <a href="irc://irc.420chan.org/420chan">#420chan @ irc.420chan.org</a></li> <li>New to IRC? <a href="http://420chan.org/#irc">Start Here</a></li> </ul> </div>  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/b/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="b" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />    <input type="hidden" name="name" />   <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>      <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div> <script type="text/javascript">set_anoninputs("postform")</script>  <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 5000KB.</li> <li>Images greater than 256x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> 			 <li style="font-size: 16px; font-weight: bold;">SMOKE MORE. CHILL OUT.</li> </ul> </div> <hr style="margin-bottom:2px;" /> 	
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
 <hr style="margin-top:2px;" />   <form id="delform" action="/b/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="b" />    <div id="bthread3709857"> <div class="thread_header"> <a id="3709857"></a> <span class="filetitle">SRSLY</span>  <span class="inbetween"> by </span> <span class="postername">Smokimus Maximus</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 20:39:42 EST ID:BnA4GsUk</span></span>  <span class="reflink"> <a href="/b/res/3709857.php#i3709857">No.3709857</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33303838323734323130')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709857')" title="Report Thread 3709857"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709857.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709857" data-thread="3709857"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5D0B47; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709857');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406075982152.jpg"> 1406075982152.jpg </a> -(<em>99206 B, 556x313</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb33303838323734323130" target="_blank" href="/b/src/1406075982152.jpg"> <img src="/b/thumb/1406075982152s.jpg" alt="99206" class="thumb" /> </a>   			 <blockquote class="opcomment b33303838323734323130">  Srsly though. Guys, srsly. Sign this shit. <br><br><a href="https://www.change.org/petitions/barack-obama-allow-the-great-annual-purge" rel="nofollow" target="_blank">https://www.change.org/petitions/barack-obama-allow-the-great-annual-purge</a>   </blockquote>   				 				  <span class="omittedposts">  12 posts and 5 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709857.php#3709966" onclick="highlight(3709966);">&gt;&gt;</a></td> <td class="reply" id="reply3709966"> <a id="3709966"></a> <div class="replyheader"> 									 <span class="commentpostername">Menon</span>  - <span class="idhighlight">Tue, 22 Jul 2014 21:56:24 EST ID:2Q2GDPSz</span> <span class="reflink">  <a href="/b/res/3709857.php#i3709966">No.3709966</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33333938393135393837')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709966', '3709857')" title="Report Post 3709966"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709966" data-thread="3709857"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #78981C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b33333938393135393837">  <a href = "/b/res/3709857.php" onclick = "highlight(3709857)">&gt;&gt;3709857</a><br>Is this a joke   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709857.php#3710023" onclick="highlight(3710023);">&gt;&gt;</a></td> <td class="reply" id="reply3710023"> <a id="3710023"></a> <div class="replyheader"> 									 <span class="commentpostername">JoseJackson</span>  - <span class="idhighlight">Tue, 22 Jul 2014 22:50:22 EST ID:NKegv7OQ</span> <span class="reflink">  <a href="/b/res/3709857.php#i3710023">No.3710023</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b343131373330353536')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3710023', '3709857')" title="Report Post 3710023"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3710023" data-thread="3709857"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #226E96; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406083822551.png"> 1406083822551.png </a> -(<em>652495 B, 1177x579</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406083822551.png"> <img src="/b/thumb/1406083822551s.jpg" alt="652495" class="thumb" /> </a>    <blockquote  class="b343131373330353536">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709857.php#3710029" onclick="highlight(3710029);">&gt;&gt;</a></td> <td class="reply" id="reply3710029"> <a id="3710029"></a> <div class="replyheader"> 									 <span class="commentpostername">Takanori Gomi</span>  - <span class="idhighlight">Tue, 22 Jul 2014 22:56:02 EST ID:MIwDA2Vs</span> <span class="reflink">  <a href="/b/res/3709857.php#i3710029">No.3710029</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313533343130363836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3710029', '3709857')" title="Report Post 3710029"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3710029" data-thread="3709857"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #814076; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31313533343130363836">  I would, but that would mean I have to type more.<br><br>I&#39;m too lazy.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709857.php#3710046" onclick="highlight(3710046);">&gt;&gt;</a></td> <td class="reply" id="reply3710046"> <a id="3710046"></a> <div class="replyheader"> 									 <span class="commentpostername">Bruce Leroy</span>  - <span class="idhighlight">Tue, 22 Jul 2014 23:09:43 EST ID:cHoNGljS</span> <span class="reflink">  <a href="/b/res/3709857.php#i3710046">No.3710046</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313434303738373839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3710046', '3709857')" title="Report Post 3710046"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3710046" data-thread="3709857"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5EE933; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31313434303738373839">  theres just a lot of baby boomers that need to retire is all. wait it out millenials, our superior intellect will be recognized soon enough   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709722"> <div class="thread_header"> <a id="3709722"></a> <span class="filetitle">adasd</span>  <span class="inbetween"> by </span> <span class="postername">Galactic Grunt Cedric</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 19:05:49 EST ID:WvgRbWAk</span></span>  <span class="reflink"> <a href="/b/res/3709722.php#i3709722">No.3709722</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31363537323931363837')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709722')" title="Report Thread 3709722"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709722.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709722" data-thread="3709722"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #15D730; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709722');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406070349906.gif"> 1406070349906.gif </a> -(<em>1047735 B, 200x190</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31363537323931363837" target="_blank" href="/b/src/1406070349906.gif"> <img src="/b/src/1406070349906.gif" alt="1047735" class="thumb" /> </a>   			 <blockquote class="opcomment b31363537323931363837">  DICKS EVERYWHERE   </blockquote>   				 				  <span class="omittedposts">  15 posts and 13 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709722.php#3710033" onclick="highlight(3710033);">&gt;&gt;</a></td> <td class="reply" id="reply3710033"> <a id="3710033"></a> <div class="replyheader"> 									 <span class="commentpostername">Albert Blollyville</span>  - <span class="idhighlight">Tue, 22 Jul 2014 23:00:47 EST ID:abDx5/UC</span> <span class="reflink">  <a href="/b/res/3709722.php#i3710033">No.3710033</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313836383334373637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3710033', '3709722')" title="Report Post 3710033"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3710033" data-thread="3709722"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8970D3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406084447311.jpg"> 1406084447311.jpg </a> -(<em>2895 B, 256x135</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406084447311.jpg"> <img src="/b/src/1406084447311.jpg" alt="2895" class="thumb" /> </a>    <blockquote  class="b31313836383334373637">  <a href = "/b/res/3709722.php#3710031" onclick = "highlight(3710031)">&gt;&gt;3710031</a><br>ikr? I&#39;ll post most of mine, I have to do something while I wait for the DXM to hit.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709722.php#3710034" onclick="highlight(3710034);">&gt;&gt;</a></td> <td class="reply" id="reply3710034"> <a id="3710034"></a> <div class="replyheader"> 									 <span class="commentpostername">Albert Blollyville</span>  - <span class="idhighlight">Tue, 22 Jul 2014 23:01:36 EST ID:abDx5/UC</span> <span class="reflink">  <a href="/b/res/3709722.php#i3710034">No.3710034</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313836383334373637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3710034', '3709722')" title="Report Post 3710034"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3710034" data-thread="3709722"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6DCED7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406084496311.jpg"> 1406084496311.jpg </a> -(<em>49106 B, 550x412</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406084496311.jpg"> <img src="/b/thumb/1406084496311s.jpg" alt="49106" class="thumb" /> </a>    <blockquote  class="b31313836383334373637">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709722.php#3710035" onclick="highlight(3710035);">&gt;&gt;</a></td> <td class="reply" id="reply3710035"> <a id="3710035"></a> <div class="replyheader"> 									 <span class="commentpostername">Takanori Gomi</span>  - <span class="idhighlight">Tue, 22 Jul 2014 23:02:39 EST ID:MIwDA2Vs</span> <span class="reflink">  <a href="/b/res/3709722.php#i3710035">No.3710035</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313533343130363836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3710035', '3709722')" title="Report Post 3710035"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3710035" data-thread="3709722"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #419748; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406084559750.png"> 1406084559750.png </a> -(<em>246408 B, 494x359</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406084559750.png"> <img src="/b/thumb/1406084559750s.jpg" alt="246408" class="thumb" /> </a>    <blockquote  class="b31313533343130363836">  <a href = "/b/res/3709722.php#3710033" onclick = "highlight(3710033)">&gt;&gt;3710033</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709722.php#3710037" onclick="highlight(3710037);">&gt;&gt;</a></td> <td class="reply" id="reply3710037"> <a id="3710037"></a> <div class="replyheader"> 									 <span class="commentpostername">Takanori Gomi</span>  - <span class="idhighlight">Tue, 22 Jul 2014 23:03:32 EST ID:MIwDA2Vs</span> <span class="reflink">  <a href="/b/res/3709722.php#i3710037">No.3710037</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313533343130363836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3710037', '3709722')" title="Report Post 3710037"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3710037" data-thread="3709722"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E96709; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406084612750.jpg"> 1406084612750.jpg </a> -(<em>40914 B, 515x482</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406084612750.jpg"> <img src="/b/thumb/1406084612750s.jpg" alt="40914" class="thumb" /> </a>    <blockquote  class="b31313533343130363836">  <a href = "/b/res/3709722.php#3710035" onclick = "highlight(3710035)">&gt;&gt;3710035</a><br><br>One more for good measure.<br><br><span class="spoiler" onmouseover=""><span>Went way, WAY down in there this time</span></span>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3708909"> <div class="thread_header"> <a id="3708909"></a> <span class="filetitle">Would you rather.</span>  <span class="inbetween"> by </span> <span class="postername">Crunch Buttsteak</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 01:48:53 EST ID:uRBN4tdP</span></span>  <span class="reflink"> <a href="/b/res/3708909.php#i3708909">No.3708909</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3708909&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3708909&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313131353731393633')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3708909')" title="Report Thread 3708909"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3708909.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3708909" data-thread="3708909"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A49692; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3708909');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406008133720.jpg"> 1406008133720.jpg </a> -(<em>36331 B, 350x244</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31313131353731393633" target="_blank" href="/b/src/1406008133720.jpg"> <img src="/b/thumb/1406008133720s.jpg" alt="36331" class="thumb" /> </a>   			 <blockquote class="opcomment b31313131353731393633">  Would you rather become <span class="spoiler" onmouseover=""><span>deaf</span></span> or <span class="spoiler" onmouseover=""><span>blind</span></span> or <span class="spoiler" onmouseover=""><span>Homosexual</span></span>?   </blockquote>   				 				  <span class="omittedposts">  55 posts and 8 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3708909.php#3709934" onclick="highlight(3709934);">&gt;&gt;</a></td> <td class="reply" id="reply3709934"> <a id="3709934"></a> <div class="replyheader"> 									 <span class="commentpostername">Odo</span>  - <span class="idhighlight">Tue, 22 Jul 2014 21:29:27 EST ID:fuZEKGAj</span> <span class="reflink">  <a href="/b/res/3708909.php#i3709934">No.3709934</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313334373536333331')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709934', '3708909')" title="Report Post 3709934"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709934" data-thread="3708909"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E3994A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31313334373536333331">  <a href = "/b/res/3708909.php#3709920" onclick = "highlight(3709920)">&gt;&gt;3709920</a><br>Well yea, everyone finds boobs interesting. I should have said arousing.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708909.php#3709938" onclick="highlight(3709938);">&gt;&gt;</a></td> <td class="reply" id="reply3709938"> <a id="3709938"></a> <div class="replyheader"> 									 <span class="commentpostername">Nell Nicklewell</span>  - <span class="idhighlight">Tue, 22 Jul 2014 21:33:08 EST ID:nxJ24h4N</span> <span class="reflink">  <a href="/b/res/3708909.php#i3709938">No.3709938</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323037393336383430')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709938', '3708909')" title="Report Post 3709938"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709938" data-thread="3708909"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7E1559; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323037393336383430">  <a href = "/b/res/3708909.php#3709934" onclick = "highlight(3709934)">&gt;&gt;3709934</a><br><br>Actually a lot of men raised in cultures where boobs aren&#39;t covered up don&#39;t really have much of an interest in them.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708909.php#3709947" onclick="highlight(3709947);">&gt;&gt;</a></td> <td class="reply" id="reply3709947"> <a id="3709947"></a> <div class="replyheader"> 									 <span class="commentpostername">Odo</span>  - <span class="idhighlight">Tue, 22 Jul 2014 21:38:33 EST ID:fuZEKGAj</span> <span class="reflink">  <a href="/b/res/3708909.php#i3709947">No.3709947</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313334373536333331')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709947', '3708909')" title="Report Post 3709947"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709947" data-thread="3708909"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FE9E0F; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31313334373536333331">  <a href = "/b/res/3708909.php#3709938" onclick = "highlight(3709938)">&gt;&gt;3709938</a><br>ackshually   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708909.php#3709998" onclick="highlight(3709998);">&gt;&gt;</a></td> <td class="reply" id="reply3709998"> <a id="3709998"></a> <div class="replyheader"> 									 <span class="commentpostername">Strider Hiryu</span>  - <span class="idhighlight">Tue, 22 Jul 2014 22:25:09 EST ID:z/0L/ddB</span> <span class="reflink">  <a href="/b/res/3708909.php#i3709998">No.3709998</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33333632353936353637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709998', '3708909')" title="Report Post 3709998"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709998" data-thread="3708909"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #19E826; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b33333632353936353637">  <a href = "/b/res/3708909.php#3709934" onclick = "highlight(3709934)">&gt;&gt;3709934</a><br>humans just like round things, the universe likes round things   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709775" class="banned"> <div class="thread_header"> <a id="3709775"></a> <span class="filetitle">anyone&#39;s parents live in a bullshit fantasy land?</span>  <span class="inbetween"> by </span> <span class="postername">Nabe Shogun</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 19:45:35 EST ID:Ed4qh+dT</span></span>  <span class="reflink"> <a href="/b/res/3709775.php#i3709775">No.3709775</a> </span>     <img src="/static/images/bannedparty.png" style="vertical-align: middle" alt="Banned" /> 			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709775&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709775&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333730313435333339')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709775')" title="Report Thread 3709775"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709775.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709775" data-thread="3709775"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #571C35; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709775');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406072735387.jpg"> 1406072735387.jpg </a> -(<em>604837 B, 974x552</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31333730313435333339" target="_blank" href="/b/src/1406072735387.jpg"> <img src="/b/thumb/1406072735387s.jpg" alt="604837" class="thumb" /> </a>   			 <blockquote class="opcomment b31333730313435333339">  my dad is getting pissed at me cause i&#39;m 20 and don&#39;t have a job mainly cause the economy is fucked up and i dont feel like flipping burgers for $8 an hour just to make some corporate piggies richer. not to mention our fucked up country/society doesn&#39;t reward creative and free thinkers anymore. then my mom is getting pissed off cause i smoke weed in the garage and she bitches me out cause the smell is going into the house (it&#39;s not). well fuck you mom you&#39;re the one who brought me into this fucked up world. i don&#39;t even have a choice in the matter of me being born or not. weed is one of the few simple things i have to look forward to at the end of the day to forget about the bullshit that is society. i feel like lighting some shit on fire and saying FUCK YOU to the world.   </blockquote>   <div class="ban"> <div class="banimage"> <img src="/static/images/block.png" alt="Banned" /> </div> <div class="banmessages">   <div class="banmsg"> User was uninvited to this party </div>  <div class="bannedby"> User was banned by: <span style="color: black">INTERPOL</span>  </div> <div class="banreason"> Reason: <span style="color: black">One time my mom left me in my crib too long, and I manamiged to crawl out of it and wipe my own shit all over the carpet. I still remember her screang at me to this day, she said "INTERPOL, you're 32 years old and you have to go get a job!"</span> </div> </div>					 </div>  				 				  <span class="omittedposts">  28 posts and 7 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709775.php#3709907" onclick="highlight(3709907);">&gt;&gt;</a></td> <td class="reply" id="reply3709907"> <a id="3709907"></a> <div class="replyheader"> 									 <span class="commentpostername">Lorna Mushcunt</span>  - <span class="idhighlight">Tue, 22 Jul 2014 21:09:55 EST ID:gUIwpSSO</span> <span class="reflink">  <a href="/b/res/3709775.php#i3709907">No.3709907</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313638373837313835')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709907', '3709775')" title="Report Post 3709907"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709907" data-thread="3709775"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #030774; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31313638373837313835">  Get a fuckin job you worthless lazy sack of shit.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709775.php#3709925" onclick="highlight(3709925);">&gt;&gt;</a></td> <td class="reply" id="reply3709925"> <a id="3709925"></a> <div class="replyheader"> 									 <span class="commentpostername">Smokey Mcbongwater</span>  - <span class="idhighlight">Tue, 22 Jul 2014 21:24:03 EST ID:vMNUPBqT</span> <span class="reflink">  <a href="/b/res/3709775.php#i3709925">No.3709925</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31363739393636303231')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709925', '3709775')" title="Report Post 3709925"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709925" data-thread="3709775"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #59655E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406078643256.jpg"> 1406078643256.jpg </a> -(<em>43808 B, 361x637</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406078643256.jpg"> <img src="/b/thumb/1406078643256s.jpg" alt="43808" class="thumb" /> </a>    <blockquote  class="b31363739393636303231">  Come on guys, seriously...<br><br>nb.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709775.php#3709950" onclick="highlight(3709950);">&gt;&gt;</a></td> <td class="reply" id="reply3709950"> <a id="3709950"></a> <div class="replyheader"> 									 <span class="commentpostername">Paulo Thiago</span>  - <span class="idhighlight">Tue, 22 Jul 2014 21:39:35 EST ID:jV9HotGn</span> <span class="reflink">  <a href="/b/res/3709775.php#i3709950">No.3709950</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323839333435303935')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709950', '3709775')" title="Report Post 3709950"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709950" data-thread="3709775"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1FDBAE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406079575448.gif"> 1406079575448.gif </a> -(<em>1596485 B, 230x203</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406079575448.gif"> <img src="/b/thumb/1406079575448s.jpg" alt="1596485" class="thumb" /> </a>    <blockquote  class="b31323839333435303935">  Seeing this banned OP makes me really want to to get out all this pent-up retard energy.<br><br>HHHNNNNNNGGGGGGRRRRYRYYYYYUUUUUUUUUUUUUU---------------<br><br>nb   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709775.php#3709983" onclick="highlight(3709983);">&gt;&gt;</a></td> <td class="reply" id="reply3709983"> <a id="3709983"></a> <div class="replyheader"> 									 <span class="commentpostername">Keiko O'Brien</span>  - <span class="idhighlight">Tue, 22 Jul 2014 22:11:31 EST ID:s74VK1NO</span> <span class="reflink">  <a href="/b/res/3709775.php#i3709983">No.3709983</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32393230363732323230')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709983', '3709775')" title="Report Post 3709983"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709983" data-thread="3709775"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #78E1A2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b32393230363732323230">  <a href = "/b/res/3709775.php#3709950" onclick = "highlight(3709950)">&gt;&gt;3709950</a><br>It&#39;s a party ban, silly billy. Note the absurd bancomment.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709463"> <div class="thread_header"> <a id="3709463"></a> <span class="filetitle">Is it me or is everything now cool?</span>  <span class="inbetween"> by </span> <span class="postername">ReubenSommlefuck.ds</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 15:12:34 EST ID:yuVc5XDS</span></span>  <span class="reflink"> <a href="/b/res/3709463.php#i3709463">No.3709463</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709463&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709463&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333635373635343930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709463')" title="Report Thread 3709463"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709463.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709463" data-thread="3709463"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5D5AE2; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709463');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406056354192.jpg"> 1406056354192.jpg </a> -(<em>24177 B, 480x320</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31333635373635343930" target="_blank" href="/b/src/1406056354192.jpg"> <img src="/b/thumb/1406056354192s.jpg" alt="24177" class="thumb" /> </a>   			 <blockquote class="opcomment b31333635373635343930">  Beards = cool<br>nerds = cool<br>throwback = cool<br>victoian daper gent = cool<br>tattoos = cool<br>sunglasses = forever cool<br><br>I dont know if its just the summer but everyone to me just looks so stylish<br>are you stylish?<br>am I?   </blockquote>   				 				  <span class="omittedposts">  30 posts and 13 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709463.php#3709779" onclick="highlight(3709779);">&gt;&gt;</a></td> <td class="reply" id="reply3709779"> <a id="3709779"></a> <div class="replyheader"> 									 <span class="commentpostername">Dan Quinn</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:47:23 EST ID:fmzhBtQb</span> <span class="reflink">  <a href="/b/res/3709463.php#i3709779">No.3709779</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31363331393535363837')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709779', '3709463')" title="Report Post 3709779"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709779" data-thread="3709463"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CC6862; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31363331393535363837">  <a href = "/b/res/3709463.php#3709552" onclick = "highlight(3709552)">&gt;&gt;3709552</a><br>That is probably me in 10 years. <br><br>My youthful head of hair and muscular physique prevent me from being sad about that now though. <br><br>nb for future depression   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709463.php#3709786" onclick="highlight(3709786);">&gt;&gt;</a></td> <td class="reply" id="reply3709786"> <a id="3709786"></a> <div class="replyheader"> 									 <span class="commentpostername">Sabrewulf</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:48:49 EST ID:77tG+xiZ</span> <span class="reflink">  <a href="/b/res/3709463.php#i3709786">No.3709786</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323233343234353834')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709786', '3709463')" title="Report Post 3709786"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709786" data-thread="3709463"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #83E91B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323233343234353834">  all those things are actually for faggots   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709463.php#3709790" onclick="highlight(3709790);">&gt;&gt;</a></td> <td class="reply" id="reply3709790"> <a id="3709790"></a> <div class="replyheader"> 									 <span class="commentpostername">Broik</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:50:28 EST ID:net9TMLK</span> <span class="reflink">  <a href="/b/res/3709463.php#i3709790">No.3709790</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313937343335373131')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709790', '3709463')" title="Report Post 3709790"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709790" data-thread="3709463"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #79FED3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31313937343335373131">  Being yourself is cool now.<br>As long as you don&#39;t look like a poser(hipster), you are cool.<br>Just don&#39;t compromise yourself, and you will get cooler.<br>Being honest about copying people is cool too.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709463.php#3709878" onclick="highlight(3709878);">&gt;&gt;</a></td> <td class="reply" id="reply3709878"> <a id="3709878"></a> <div class="replyheader"> 									 <span class="commentpostername">Elijah Wood</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:50:12 EST ID:IvImeSRi</span> <span class="reflink">  <a href="/b/res/3709463.php#i3709878">No.3709878</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313639343738313230')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709878', '3709463')" title="Report Post 3709878"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709878" data-thread="3709463"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #ACE32E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31313639343738313230">  <a href = "/b/res/3709463.php#3709470" onclick = "highlight(3709470)">&gt;&gt;3709470</a><br>I like tattoos.<br><br>I think tattoo haters are usually tryhards themselves and are just super square and have too many hangups and social projections.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3708664"> <div class="thread_header"> <a id="3708664"></a> <span class="filetitle">Teh future</span>  <span class="inbetween"> by </span> <span class="postername">Lucy Heartfilia</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 21 Jul 2014 23:04:15 EST ID:X26lHxMr</span></span>  <span class="reflink"> <a href="/b/res/3708664.php#i3708664">No.3708664</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32393032373031333137')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3708664')" title="Report Thread 3708664"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3708664.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3708664" data-thread="3708664"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1481DB; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3708664');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1405998255895.jpg"> 1405998255895.jpg </a> -(<em>6935 B, 258x195</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb32393032373031333137" target="_blank" href="/b/src/1405998255895.jpg"> <img src="/b/thumb/1405998255895s.jpg" alt="6935" class="thumb" /> </a>   			 <blockquote class="opcomment b32393032373031333137">  I was standing with my friend outside of his house one night back in winter. Both of us were high as shit. As he smoked his cigarette I looked out across his neighborhood and suddenly became obsessed with thinking about what everything will look like 100-150 years from now. I started imagining all the other houses having weird piping and other bizarre architectural elements. And for the rest of that week I was fixated on the thought of what everything will look like in a century or so from now. I realize it probably won&#39;t be TOO futuristic looking, but it will certainly be different, and strange. I wish I could have a sneak peek.   </blockquote>   				 				  <span class="omittedposts">  6 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3708664.php#3709719" onclick="highlight(3709719);">&gt;&gt;</a></td> <td class="reply" id="reply3709719"> <a id="3709719"></a> <div class="replyheader"> 									 <span class="commentpostername">Kevin Nash</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:03:57 EST ID:z/0L/ddB</span> <span class="reflink">  <a href="/b/res/3708664.php#i3709719">No.3709719</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33333632353936353637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709719', '3708664')" title="Report Post 3709719"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709719" data-thread="3708664"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F2BDBE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b33333632353936353637">  dick inspired architecture   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708664.php#3709737" onclick="highlight(3709737);">&gt;&gt;</a></td> <td class="reply" id="reply3709737"> <a id="3709737"></a> <div class="replyheader"> 									 <span class="commentpostername">PokéManiac Beatrice</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:22:56 EST ID:Na6rHsf5</span> <span class="reflink">  <a href="/b/res/3708664.php#i3709737">No.3709737</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b383438393232333731')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709737', '3708664')" title="Report Post 3709737"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709737" data-thread="3708664"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #110ED4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b383438393232333731">  /fu/ or /fo/!<br><br>Place your bets!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708664.php#3709797" onclick="highlight(3709797);">&gt;&gt;</a></td> <td class="reply" id="reply3709797"> <a id="3709797"></a> <div class="replyheader"> 									 <span class="commentpostername">Vice Admiral Nakamura</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:52:35 EST ID:sSdqq096</span> <span class="reflink">  <a href="/b/res/3708664.php#i3709797">No.3709797</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32303333303137353439')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709797', '3708664')" title="Report Post 3709797"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709797" data-thread="3708664"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #367647; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406073155784.gif"> 1406073155784.gif </a> -(<em>218351 B, 160x120</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406073155784.gif"> <img src="/b/src/1406073155784.gif" alt="218351" class="thumb" /> </a>    <blockquote  class="b32303333303137353439">  <a href = "/b/res/3708664.php#3709707" onclick = "highlight(3709707)">&gt;&gt;3709707</a><br><blockquote class = "unkfunc">&gt;all the trees n shit come back <br></blockquote>If they&#39;re going to come back then where did they go in the first place? Where are all the trees right now? Are they hiding?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708664.php#3709808" onclick="highlight(3709808);">&gt;&gt;</a></td> <td class="reply" id="reply3709808"> <a id="3709808"></a> <div class="replyheader"> 									 <span class="commentpostername">Boarder Fucking</span>  - <span class="idhighlight">Tue, 22 Jul 2014 20:02:26 EST ID:pQCj73+N</span> <span class="reflink">  <a href="/b/res/3708664.php#i3709808">No.3709808</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b383438393231393930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709808', '3708664')" title="Report Post 3709808"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709808" data-thread="3708664"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A23F6E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b383438393231393930">  <a href = "/b/res/3708664.php#3709797" onclick = "highlight(3709797)">&gt;&gt;3709797</a><br>Theyre with the images.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709272"> <div class="thread_header"> <a id="3709272"></a> <span class="filetitle">DICKS EVERYWHERE</span>  <span class="inbetween"> by </span> <span class="postername">Marc Forgione</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 10:48:55 EST ID:KIN+WgeR</span></span>  <span class="reflink"> <a href="/b/res/3709272.php#i3709272">No.3709272</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709272&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709272&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323133393435343735')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709272')" title="Report Thread 3709272"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709272.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709272" data-thread="3709272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2951F8; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709272');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406040535492.png"> 1406040535492.png </a> -(<em>18482 B, 500x500</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31323133393435343735" target="_blank" href="/b/src/1406040535492.png"> <img src="/b/thumb/1406040535492s.jpg" alt="18482" class="thumb" /> </a>   			 <blockquote class="opcomment b31323133393435343735">  DICKS EVERYWHERE   </blockquote>   				 				  <span class="omittedposts">  22 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709272.php#3709678" onclick="highlight(3709678);">&gt;&gt;</a></td> <td class="reply" id="reply3709678"> <a id="3709678"></a> <div class="replyheader"> 									 <span class="commentpostername">Tyler Florence</span>  - <span class="idhighlight">Tue, 22 Jul 2014 18:16:21 EST ID:TWjsC3+O</span> <span class="reflink">  <a href="/b/res/3709272.php#i3709678">No.3709678</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31373736353133313337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709678', '3709272')" title="Report Post 3709678"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709678" data-thread="3709272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #D716A9; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406067381982.jpg"> 1406067381982.jpg </a> -(<em>10224 B, 225x225</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406067381982.jpg"> <img src="/b/thumb/1406067381982s.jpg" alt="10224" class="thumb" /> </a>    <blockquote  class="b31373736353133313337">  check ur privy ledge   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709272.php#3709701" onclick="highlight(3709701);">&gt;&gt;</a></td> <td class="reply" id="reply3709701"> <a id="3709701"></a> <div class="replyheader"> 									 <span class="commentpostername">Juggler Nathaniel</span>  - <span class="idhighlight">Tue, 22 Jul 2014 18:44:02 EST ID:97Lug5VW</span> <span class="reflink">  <a href="/b/res/3709272.php#i3709701">No.3709701</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333039393834383434')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709701', '3709272')" title="Report Post 3709701"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709701" data-thread="3709272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8F3084; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406069042446.gif"> 1406069042446.gif </a> -(<em>43823 B, 400x300</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406069042446.gif"> <img src="/b/thumb/1406069042446s.jpg" alt="43823" class="thumb" /> </a>    <blockquote  class="b31333039393834383434">  I knew this would come in handy one day.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709272.php#3709743" onclick="highlight(3709743);">&gt;&gt;</a></td> <td class="reply" id="reply3709743"> <a id="3709743"></a> <div class="replyheader"> 									 <span class="commentpostername">King Hippo</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:26:49 EST ID:GRCd56WL</span> <span class="reflink">  <a href="/b/res/3709272.php#i3709743">No.3709743</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32393335373232363039')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709743', '3709272')" title="Report Post 3709743"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709743" data-thread="3709272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A81C2A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b32393335373232363039">  <a href = "/b/res/3709272.php#3709500" onclick = "highlight(3709500)">&gt;&gt;3709500</a><br>I only go 4 times a month, it&#39;s not so bad. I hate living in Texas, you know it&#39;s a felony to steal from oil sites? Fucking Texas. This is why I&#39;m going to CO. When I&#39;m done.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709272.php#3709754" onclick="highlight(3709754);">&gt;&gt;</a></td> <td class="reply" id="reply3709754"> <a id="3709754"></a> <div class="replyheader"> 									 <span class="commentpostername">Cyril Cluffingkudging</span>  - <span class="idhighlight">Tue, 22 Jul 2014 19:32:43 EST ID:b3Es3m0t</span> <span class="reflink">  <a href="/b/res/3709272.php#i3709754">No.3709754</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33333236363533333830')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709754', '3709272')" title="Report Post 3709754"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709754" data-thread="3709272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #57AA47; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b33333236363533333830">  Aw shit, I forgot to get the milk and my privilege checked.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709557"> <div class="thread_header"> <a id="3709557"></a> <span class="filetitle">Lord Anubis</span>  <span class="inbetween"> by </span> <span class="postername">Javier Vazquez</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 16:50:35 EST ID:rY8LxTXd</span></span>  <span class="reflink"> <a href="/b/res/3709557.php#i3709557">No.3709557</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b383530333533353239')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709557')" title="Report Thread 3709557"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709557.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709557" data-thread="3709557"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #339D41; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709557');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406062235286.jpg"> 1406062235286.jpg </a> -(<em>59606 B, 200x499</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb383530333533353239" target="_blank" href="/b/src/1406062235286.jpg"> <img src="/b/thumb/1406062235286s.jpg" alt="59606" class="thumb" /> </a>   			 <blockquote class="opcomment b383530333533353239">  Anubis is here to protect you from the dead.   </blockquote>   				 				  <span class="omittedposts">  5 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709557.php#3709621" onclick="highlight(3709621);">&gt;&gt;</a></td> <td class="reply" id="reply3709621"> <a id="3709621"></a> <div class="replyheader"> 									 <span class="commentpostername">Ensign Herbert</span>  - <span class="idhighlight">Tue, 22 Jul 2014 17:28:08 EST ID:iG0+1VqJ</span> <span class="reflink">  <a href="/b/res/3709557.php#i3709621">No.3709621</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32393132393630313137')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709621', '3709557')" title="Report Post 3709621"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709621" data-thread="3709557"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B5D88C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b32393132393630313137">  <a href = "/b/res/3709557.php" onclick = "highlight(3709557)">&gt;&gt;3709557</a><br><a href="http://www.youtube.com/watch?v=KZ7XLcagmmU" rel="nofollow" target="_blank">http://www.youtube.com/watch?v=KZ7XLcagmmU</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709557.php#3709624" onclick="highlight(3709624);">&gt;&gt;</a></td> <td class="reply" id="reply3709624"> <a id="3709624"></a> <div class="replyheader"> 									 <span class="commentpostername">Ensign Herbert</span>  - <span class="idhighlight">Tue, 22 Jul 2014 17:28:56 EST ID:iG0+1VqJ</span> <span class="reflink">  <a href="/b/res/3709557.php#i3709624">No.3709624</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32393132393630313137')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709624', '3709557')" title="Report Post 3709624"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709624" data-thread="3709557"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2875F5; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b32393132393630313137">  The Dominion of Seker.<br>Barren Desert of Eternal Night.<br>Shunned by Ra.<br>Behind the Gate Aha-Neteru.<br>The Wastelands of Seker.<br>Eldest Lord of Impenetrable Blackness.<br>Death God of Memphis.<br>He of the Darkness and Decay of the Tomb.<br>He of Rosetau.<br>The Mouth of the Passage to the Underworld.<br>Closely Guarded by Terrible Serpents.<br>Who Careth Not for His Own Cult of Worshippers.<br><br>Seker.<br>Ancient and Dead.  <div class="abbrev"> Comment too long. Click <a href="/b/res/3709557.php#3709624">here</a> to view the full text. </div>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709557.php#3709681" onclick="highlight(3709681);">&gt;&gt;</a></td> <td class="reply" id="reply3709681"> <a id="3709681"></a> <div class="replyheader"> 									 <span class="commentpostername">Factory Head Matilda</span>  - <span class="idhighlight">Tue, 22 Jul 2014 18:19:29 EST ID:Sh8axVU5</span> <span class="reflink">  <a href="/b/res/3709557.php#i3709681">No.3709681</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31383435343332393930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709681', '3709557')" title="Report Post 3709681"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709681" data-thread="3709557"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2A8631; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31383435343332393930">  Well given how popular zombies are now he hasn&#39;t done a very good job of it, has he?<br><br>You had ONE JOB, Anubis   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709557.php#3709693" onclick="highlight(3709693);">&gt;&gt;</a></td> <td class="reply" id="reply3709693"> <a id="3709693"></a> <div class="replyheader"> 									 <span class="commentpostername">Mustafa Said</span>  - <span class="idhighlight">Tue, 22 Jul 2014 18:34:04 EST ID:SgnZ256t</span> <span class="reflink">  <a href="/b/res/3709557.php#i3709693">No.3709693</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31373435353237303237')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709693', '3709557')" title="Report Post 3709693"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709693" data-thread="3709557"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1AA518; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31373435353237303237">  <a href = "/b/res/3709557.php#3709681" onclick = "highlight(3709681)">&gt;&gt;3709681</a><br><br>Zombies are a joke now, he did a pretty good job if you ask me.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3708519"> <div class="thread_header"> <a id="3708519"></a> <span class="filetitle">Am i dying</span>  <span class="inbetween"> by </span> <span class="postername">Guillaume Tirel</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 21 Jul 2014 21:54:46 EST ID:Rc1KEez1</span></span>  <span class="reflink"> <a href="/b/res/3708519.php#i3708519">No.3708519</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3708519&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3708519&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333139353734303232')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3708519')" title="Report Thread 3708519"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3708519.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3708519" data-thread="3708519"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A0BB5C; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3708519');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1405994086999.jpg"> 1405994086999.jpg </a> -(<em>189107 B, 768x820</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31333139353734303232" target="_blank" href="/b/src/1405994086999.jpg"> <img src="/b/thumb/1405994086999s.jpg" alt="189107" class="thumb" /> </a>   			 <blockquote class="opcomment b31333139353734303232">  i took 1 and half tabs of nbmoe - which supposed to be 1200 mg or so- 5 hours ago and smoked 0,5g mj an hour ago and i feel like im pasiing out any moment. should i be alerted?   </blockquote>   				 				  <span class="omittedposts">  38 posts and 24 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3708519.php#3709188" onclick="highlight(3709188);">&gt;&gt;</a></td> <td class="reply" id="reply3709188"> <a id="3709188"></a> <div class="replyheader"> 									 <span class="commentpostername">Guillaume Tirel</span>  - <span class="idhighlight">Tue, 22 Jul 2014 08:08:03 EST ID:Rc1KEez1</span> <span class="reflink">  <a href="/b/res/3708519.php#i3709188">No.3709188</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333139353734303232')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709188', '3708519')" title="Report Post 3709188"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709188" data-thread="3708519"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F4B48B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31333139353734303232">  <a href = "/b/res/3708519.php#3708930" onclick = "highlight(3708930)">&gt;&gt;3708930</a><br>at least op is not kill. dude that shit was intense. probably i had low blood sugar or something but shit was intense.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708519.php#3709222" onclick="highlight(3709222);">&gt;&gt;</a></td> <td class="reply" id="reply3709222"> <a id="3709222"></a> <div class="replyheader"> 									 <span class="commentpostername">Colt Cabana</span>  - <span class="idhighlight">Tue, 22 Jul 2014 09:27:07 EST ID:e6aF4TN3</span> <span class="reflink">  <a href="/b/res/3708519.php#i3709222">No.3709222</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31393231393632373531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709222', '3708519')" title="Report Post 3709222"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709222" data-thread="3708519"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #158576; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31393231393632373531">  <a href = "/b/res/3708519.php#3708898" onclick = "highlight(3708898)">&gt;&gt;3708898</a><br>okay fag we all say these posted on i fucking love science. thanks for flooding the thread   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708519.php#3709250" onclick="highlight(3709250);">&gt;&gt;</a></td> <td class="reply" id="reply3709250"> <a id="3709250"></a> <div class="replyheader"> 									 <span class="commentpostername">SamuelSnodstock.ncf</span>  - <span class="idhighlight">Tue, 22 Jul 2014 10:21:54 EST ID:weNhdVeK</span> <span class="reflink">  <a href="/b/res/3708519.php#i3709250">No.3709250</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33343735343333343836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709250', '3708519')" title="Report Post 3709250"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709250" data-thread="3708519"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #01A833; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b33343735343333343836">  <ul><li><strong>SMOKE MORE. CHILL OUT.<br></li></ul><br>let us know if you survive OP.</strong>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708519.php#3709667" onclick="highlight(3709667);">&gt;&gt;</a></td> <td class="reply" id="reply3709667"> <a id="3709667"></a> <div class="replyheader"> 									 <span class="commentpostername">Cecelia Payne-Gaposchkin</span>  - <span class="idhighlight">Tue, 22 Jul 2014 17:58:40 EST ID:HV7fhFik</span> <span class="reflink">  <a href="/b/res/3708519.php#i3709667">No.3709667</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31343533363038363435')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709667', '3708519')" title="Report Post 3709667"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709667" data-thread="3708519"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0582A7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31343533363038363435">  if mans can type, mans is fine.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3692626"> <div class="thread_header"> <a id="3692626"></a> <span class="filetitle">I CALL UPON THEE FOR QUALITY CONTENT REGARDING .GIFS</span>  <span class="inbetween"> by </span> <span class="postername">Vera Rubiin</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 09 Jul 2014 17:07:41 EST ID:4LCgTbCU</span></span>  <span class="reflink"> <a href="/b/res/3692626.php#i3692626">No.3692626</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3692626&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3692626&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323736343639373433')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3692626')" title="Report Thread 3692626"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3692626.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3692626" data-thread="3692626"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #00A339; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3692626');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1404940061954.gif"> 1404940061954.gif </a> -(<em>3489354 B, 256x145</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31323736343639373433" target="_blank" href="/b/src/1404940061954.gif"> <img src="/b/src/1404940061954.gif" alt="3489354" class="thumb" /> </a>   			 <blockquote class="opcomment b31323736343639373433">  <span class="spoiler" onmouseover=""><span>its a gif thread</span></span>   </blockquote>   				 				  <span class="omittedposts">  403 posts and 326 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3692626.php#3708341" onclick="highlight(3708341);">&gt;&gt;</a></td> <td class="reply" id="reply3708341"> <a id="3708341"></a> <div class="replyheader"> 									 <span class="commentpostername">Dustin Hoffman</span>  - <span class="idhighlight">Mon, 21 Jul 2014 20:08:32 EST ID:0HpPslVD</span> <span class="reflink">  <a href="/b/res/3692626.php#i3708341">No.3708341</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b343137303937323336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3708341', '3692626')" title="Report Post 3708341"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3708341" data-thread="3692626"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8CBE46; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1405987712739.gif"> 1405987712739.gif </a> -(<em>930253 B, 500x281</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1405987712739.gif"> <img src="/b/thumb/1405987712739s.jpg" alt="930253" class="thumb" /> </a>    <blockquote  class="b343137303937323336">  <a href = "/b/res/3692626.php#3708310" onclick = "highlight(3708310)">&gt;&gt;3708310</a><br>Ha ha ha ha ha, I can see it. She has a hard jaw.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3692626.php#3708368" onclick="highlight(3708368);">&gt;&gt;</a></td> <td class="reply" id="reply3708368"> <a id="3708368"></a> <div class="replyheader"> 									 <span class="commentpostername">Dustin Hoffman</span>  - <span class="idhighlight">Mon, 21 Jul 2014 20:26:40 EST ID:0HpPslVD</span> <span class="reflink">  <a href="/b/res/3692626.php#i3708368">No.3708368</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b343137303937323336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3708368', '3692626')" title="Report Post 3708368"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3708368" data-thread="3692626"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AD9485; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1405988800739.gif"> 1405988800739.gif </a> -(<em>4039757 B, 480x360</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1405988800739.gif"> <img src="/b/thumb/1405988800739s.jpg" alt="4039757" class="thumb" /> </a>    <blockquote  class="b343137303937323336">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3692626.php#3708380" onclick="highlight(3708380);">&gt;&gt;</a></td> <td class="reply" id="reply3708380"> <a id="3708380"></a> <div class="replyheader"> 									 <span class="commentpostername">Dustin Hoffman</span>  - <span class="idhighlight">Mon, 21 Jul 2014 20:33:25 EST ID:0HpPslVD</span> <span class="reflink">  <a href="/b/res/3692626.php#i3708380">No.3708380</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b343137303937323336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3708380', '3692626')" title="Report Post 3708380"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3708380" data-thread="3692626"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #6E75AB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1405989205739.gif"> 1405989205739.gif </a> -(<em>4984833 B, 300x225</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1405989205739.gif"> <img src="/b/thumb/1405989205739s.jpg" alt="4984833" class="thumb" /> </a>    <blockquote  class="b343137303937323336">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3692626.php#3709623" onclick="highlight(3709623);">&gt;&gt;</a></td> <td class="reply" id="reply3709623"> <a id="3709623"></a> <div class="replyheader"> 									 <span class="commentpostername">Dustin Hoffman</span>  - <span class="idhighlight">Tue, 22 Jul 2014 17:28:51 EST ID:0HpPslVD</span> <span class="reflink">  <a href="/b/res/3692626.php#i3709623">No.3709623</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b343137303937323336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709623', '3692626')" title="Report Post 3709623"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709623" data-thread="3692626"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #51549E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406064531739.gif"> 1406064531739.gif </a> -(<em>3200450 B, 320x240</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406064531739.gif"> <img src="/b/thumb/1406064531739s.jpg" alt="3200450" class="thumb" /> </a>    <blockquote  class="b343137303937323336">  DICKS EVERYWHERE   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709293"> <div class="thread_header"> <a id="3709293"></a> <span class="filetitle">The world</span>  <span class="inbetween"> by </span> <span class="postername">Colt Cabana</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 11:06:55 EST ID:e6aF4TN3</span></span>  <span class="reflink"> <a href="/b/res/3709293.php#i3709293">No.3709293</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709293&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709293&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31393231393632373531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709293')" title="Report Thread 3709293"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709293.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709293" data-thread="3709293"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #760FF6; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709293');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406041615777.jpg"> 1406041615777.jpg </a> -(<em>96487 B, 800x602</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31393231393632373531" target="_blank" href="/b/src/1406041615777.jpg"> <img src="/b/thumb/1406041615777s.jpg" alt="96487" class="thumb" /> </a>   			 <blockquote class="opcomment b31393231393632373531">  There&#39;s so many things to get pissed off about. It&#39;s exhausting.   </blockquote>   				 				  <span class="omittedposts">  28 posts and 4 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709293.php#3709543" onclick="highlight(3709543);">&gt;&gt;</a></td> <td class="reply" id="reply3709543"> <a id="3709543"></a> <div class="replyheader"> 									 <span class="commentpostername">Michael Chiarello</span>  - <span class="idhighlight">Tue, 22 Jul 2014 16:29:12 EST ID:rojd2SJS</span> <span class="reflink">  <a href="/b/res/3709293.php#i3709543">No.3709543</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333638383730383835')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709543', '3709293')" title="Report Post 3709543"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709543" data-thread="3709293"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #2C28A4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31333638383730383835">  I get annoyed by reviews Amazon. People saying things like &quot;it&#39;s smaller than I thought&quot; when the dimensions of whatever they bought are shown in the description. Or people giving a product a low mark because the delivery didn&#39;t turn up on time. Or people reviewing a book but saying they haven&#39;t actually read it yet. How do you give a book a score out of 5 if you haven&#39;t even read it?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709293.php#3709556" onclick="highlight(3709556);">&gt;&gt;</a></td> <td class="reply" id="reply3709556"> <a id="3709556"></a> <div class="replyheader"> 									 <span class="commentpostername">Rich Boy Charles</span>  - <span class="idhighlight">Tue, 22 Jul 2014 16:50:05 EST ID:hrhM9uIH</span> <span class="reflink">  <a href="/b/res/3709293.php#i3709556">No.3709556</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b343034323836383338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709556', '3709293')" title="Report Post 3709556"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709556" data-thread="3709293"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3CA5C2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b343034323836383338">  <a href = "/b/res/3709293.php#3709543" onclick = "highlight(3709543)">&gt;&gt;3709543</a><br><br>yeah fuck the reviews just order exactly what youre looking for and call it a day   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709293.php#3709591" onclick="highlight(3709591);">&gt;&gt;</a></td> <td class="reply" id="reply3709591"> <a id="3709591"></a> <div class="replyheader"> 									 <span class="commentpostername">Michael Chiarello</span>  - <span class="idhighlight">Tue, 22 Jul 2014 17:10:54 EST ID:rojd2SJS</span> <span class="reflink">  <a href="/b/res/3709293.php#i3709591">No.3709591</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31333638383730383835')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709591', '3709293')" title="Report Post 3709591"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709591" data-thread="3709293"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #48D818; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31333638383730383835">  <a href = "/b/res/3709293.php#3709556" onclick = "highlight(3709556)">&gt;&gt;3709556</a><br>I&#39;m always tempted to look at the worst review just to see if there is anything wrong with what I&#39;m buying. But it usually turns out to be someone who didn&#39;t bother to read the description or who is complaining they had to wait two weeks for something to be delivered.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709293.php#3709595" onclick="highlight(3709595);">&gt;&gt;</a></td> <td class="reply" id="reply3709595"> <a id="3709595"></a> <div class="replyheader"> 									 <span class="commentpostername">Rich Boy Charles</span>  - <span class="idhighlight">Tue, 22 Jul 2014 17:12:54 EST ID:hrhM9uIH</span> <span class="reflink">  <a href="/b/res/3709293.php#i3709595">No.3709595</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b343034323836383338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709595', '3709293')" title="Report Post 3709595"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709595" data-thread="3709293"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DCD467; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b343034323836383338">  <a href = "/b/res/3709293.php#3709591" onclick = "highlight(3709591)">&gt;&gt;3709591</a><br><br>ive seen shit like &quot;it broke after one accidental drop! very poor construction&quot;   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3702568"> <div class="thread_header"> <a id="3702568"></a> <span class="filetitle">WHY</span>  <span class="inbetween"> by </span> <span class="postername">Major Rakal</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 17 Jul 2014 13:08:55 EST ID:GQSWIurP</span></span>  <span class="reflink"> <a href="/b/res/3702568.php#i3702568">No.3702568</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3702568&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3702568&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b343139313630363538')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3702568')" title="Report Thread 3702568"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3702568.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3702568" data-thread="3702568"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9C2AC0; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3702568');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1405616935132.png"> 1405616935132.png </a> -(<em>153512 B, 524x738</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb343139313630363538" target="_blank" href="/b/src/1405616935132.png"> <img src="/b/thumb/1405616935132s.jpg" alt="153512" class="thumb" /> </a>   			 <blockquote class="opcomment b343139313630363538">  Why do people constantly post shit on social media sites of people with fucked up disorders who look completely deformed and then put them on a pedestal saying &quot;THIS IS BEAUTIFUL&quot; (PIC FUCKING RELATED)? Why do people put fat people on a pedestal and claim that they are exclusively beautiful just because they&#39;re more or less majorly looked down on by most of society?   </blockquote>   				 				  <span class="omittedposts">  75 posts and 24 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3702568.php#3709546" onclick="highlight(3709546);">&gt;&gt;</a></td> <td class="reply" id="reply3709546"> <a id="3709546"></a> <div class="replyheader"> 									 <span class="commentpostername">Billie Piper</span>  - <span class="idhighlight">Tue, 22 Jul 2014 16:30:44 EST ID:vgo0zNQ+</span> <span class="reflink">  <a href="/b/res/3702568.php#i3709546">No.3709546</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323032303238323036')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709546', '3702568')" title="Report Post 3709546"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709546" data-thread="3702568"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A93678; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323032303238323036">  <a href = "/b/res/3702568.php#3709295" onclick = "highlight(3709295)">&gt;&gt;3709295</a><br><br>I didnt say you had to write that they were ugly. I said you had to say something about the hideous picture...<br><br> Say one of your best friends talks non stop about their ugly deformed dog that looks like a fart in a shoe. they love the dog so much you think they wouldnt talk to you if you said any thing bad about it. They send you a picture of this scary creature waiting for you to say something about it. What do you say?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3702568.php#3709559" onclick="highlight(3709559);">&gt;&gt;</a></td> <td class="reply" id="reply3709559"> <a id="3709559"></a> <div class="replyheader"> 									 <span class="commentpostername">SamuelGollyham.sys</span>  - <span class="idhighlight">Tue, 22 Jul 2014 16:52:03 EST ID:dr9oJjVm</span> <span class="reflink">  <a href="/b/res/3702568.php#i3709559">No.3709559</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313938353635353230')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709559', '3702568')" title="Report Post 3709559"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709559" data-thread="3702568"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #74FF47; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31313938353635353230">  Because people have a hard time dealing with those issues in their lives, and being sad about it doesn&#39;t help you day to day.  It has only been recently in human history that people with conditions can even survive or are kept alive.  Not to mention social media gives them the platform to expound their feelings.  I don&#39;t know what kind of people you&#39;re friends with because I&#39;ve NEVER seen a post like that in my life on FB.<br><br>As for the fatties, well it can hardly be helped when calories are as cheap as they are in the USA.  Getting upset because people are trying to feel better about their unfortunate situations seems like a pointless waste of energy on your part, to me at least.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3702568.php#3709569" onclick="highlight(3709569);">&gt;&gt;</a></td> <td class="reply" id="reply3709569"> <a id="3709569"></a> <div class="replyheader"> 									 <span class="commentpostername">Guy Fieri</span>  - <span class="idhighlight">Tue, 22 Jul 2014 16:58:24 EST ID:jV9HotGn</span> <span class="reflink">  <a href="/b/res/3702568.php#i3709569">No.3709569</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323839333435303935')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709569', '3702568')" title="Report Post 3709569"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709569" data-thread="3702568"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8D050E; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406062704866.jpg"> 1406062704866.jpg </a> -(<em>95329 B, 600x865</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406062704866.jpg"> <img src="/b/thumb/1406062704866s.jpg" alt="95329" class="thumb" /> </a>    <blockquote  class="b31323839333435303935">  <a href = "/b/res/3702568.php#3709262" onclick = "highlight(3709262)">&gt;&gt;3709262</a><br>i editd ur pic lol   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3702568.php#3709583" onclick="highlight(3709583);">&gt;&gt;</a></td> <td class="reply" id="reply3709583"> <a id="3709583"></a> <div class="replyheader"> 									 <span class="commentpostername">Rich Boy Charles</span>  - <span class="idhighlight">Tue, 22 Jul 2014 17:04:52 EST ID:hrhM9uIH</span> <span class="reflink">  <a href="/b/res/3702568.php#i3709583">No.3709583</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b343034323836383338')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709583', '3702568')" title="Report Post 3709583"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709583" data-thread="3702568"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4EC87D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b343034323836383338">  <a href = "/b/res/3702568.php#3709569" onclick = "highlight(3709569)">&gt;&gt;3709569</a><br><br>i despise that creature, regardless of its sex   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709273"> <div class="thread_header"> <a id="3709273"></a> <span class="filetitle">Motivation?</span>  <span class="inbetween"> by </span> <span class="postername">Jacob Black</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 10:49:16 EST ID:HgOZZoyb</span></span>  <span class="reflink"> <a href="/b/res/3709273.php#i3709273">No.3709273</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709273&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3709273&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32393034303833303533')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709273')" title="Report Thread 3709273"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709273.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709273" data-thread="3709273"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3208FD; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709273');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406040556731.jpg"> 1406040556731.jpg </a> -(<em>52080 B, 600x571</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb32393034303833303533" target="_blank" href="/b/src/1406040556731.jpg"> <img src="/b/thumb/1406040556731s.jpg" alt="52080" class="thumb" /> </a>   			 <blockquote class="opcomment b32393034303833303533">  What keeps you going in life?<br><br>What is the reason why you get up out of bed everyday?   </blockquote>   				 				  <span class="omittedposts">  36 posts and 13 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709273.php#3709499" onclick="highlight(3709499);">&gt;&gt;</a></td> <td class="reply" id="reply3709499"> <a id="3709499"></a> <div class="replyheader"> 									 <span class="commentpostername">Chief Edwin</span>  - <span class="idhighlight">Tue, 22 Jul 2014 15:55:03 EST ID:ZHNT02mm</span> <span class="reflink">  <a href="/b/res/3709273.php#i3709499">No.3709499</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31353433363433393337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709499', '3709273')" title="Report Post 3709499"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709499" data-thread="3709273"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #7A9B79; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31353433363433393337">  <a href = "/b/res/3709273.php#3709306" onclick = "highlight(3709306)">&gt;&gt;3709306</a><br>you make that sound as though it is an &quot;absolute&quot; truth!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709273.php#3709502" onclick="highlight(3709502);">&gt;&gt;</a></td> <td class="reply" id="reply3709502"> <a id="3709502"></a> <div class="replyheader"> 									 <span class="commentpostername">Dark Queen</span>  - <span class="idhighlight">Tue, 22 Jul 2014 15:56:57 EST ID:nxJ24h4N</span> <span class="reflink">  <a href="/b/res/3709273.php#i3709502">No.3709502</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323037393336383430')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709502', '3709273')" title="Report Post 3709502"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709502" data-thread="3709273"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #865F88; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323037393336383430">  <a href = "/b/res/3709273.php#3709477" onclick = "highlight(3709477)">&gt;&gt;3709477</a><br><br>I didn&#39;t call you a faggot, you did.<br><br>Get some self esteem.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709273.php#3709512" onclick="highlight(3709512);">&gt;&gt;</a></td> <td class="reply" id="reply3709512"> <a id="3709512"></a> <div class="replyheader"> 									 <span class="commentpostername">Chief Edwin</span>  - <span class="idhighlight">Tue, 22 Jul 2014 16:03:25 EST ID:ZHNT02mm</span> <span class="reflink">  <a href="/b/res/3709273.php#i3709512">No.3709512</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31353433363433393337')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709512', '3709273')" title="Report Post 3709512"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709512" data-thread="3709273"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CEDC3D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406059405748.gif"> 1406059405748.gif </a> -(<em>3214510 B, 320x180</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406059405748.gif"> <img src="/b/thumb/1406059405748s.jpg" alt="3214510" class="thumb" /> </a>    <blockquote  class="b31353433363433393337">  <a href = "/b/res/3709273.php" onclick = "highlight(3709273)">&gt;&gt;3709273</a><br>life resembles the useless box   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709273.php#3709536" onclick="highlight(3709536);">&gt;&gt;</a></td> <td class="reply" id="reply3709536"> <a id="3709536"></a> <div class="replyheader"> 									 <span class="commentpostername">Vin Gerard</span>  - <span class="idhighlight">Tue, 22 Jul 2014 16:26:05 EST ID:e9OO1nqK</span> <span class="reflink">  <a href="/b/res/3709273.php#i3709536">No.3709536</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323638363637383836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709536', '3709273')" title="Report Post 3709536"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709536" data-thread="3709273"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B99476; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406060765095.png"> 1406060765095.png </a> -(<em>469518 B, 534x468</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406060765095.png"> <img src="/b/thumb/1406060765095s.jpg" alt="469518" class="thumb" /> </a>    <blockquote  class="b31323638363637383836">  i am a slave of existence, no more no less.<br><br>i get up because my state of being drives me to awaken. i think reasoning&#39;s for something you have no control over, are only justifications for continued participation.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3708976"> <div class="thread_header"> <a id="3708976"></a> <span class="filetitle">convince me to go under while getting my wisdom teeth removed</span>  <span class="inbetween"> by </span> <span class="postername">Cyril Blebberson</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 02:25:20 EST ID:/Fa0Xh78</span></span>  <span class="reflink"> <a href="/b/res/3708976.php#i3708976">No.3708976</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3708976&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3708976&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b32393236343330313831')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3708976')" title="Report Thread 3708976"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3708976.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3708976" data-thread="3708976"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1FEE99; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3708976');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406010320902.png"> 1406010320902.png </a> -(<em>3902 B, 56x56</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb32393236343330313831" target="_blank" href="/b/src/1406010320902.png"> <img src="/b/src/1406010320902.png" alt="3902" class="thumb" /> </a>   			 <blockquote class="opcomment b32393236343330313831">  Im getting my wisdom teeth removed this year and the last thing i want to do is be loopy around my parents when i&#39;m waking up from the procedure.<br>I want to get my teeth removed while awake, i dont want to go under. But everyone i say that to tells me to be asleep because it&#39;s very unpleasant to feel and hear them ripping out broken shards of teeth. I say they are pussies. Im fully aware that ill hear bones cracking and ill feel them tugging at the teeth. I just dont feel like going under and possibly crying or saying something stupid around my parents.<br>I dont even care if i&#39;ll feel high. I dont wanna do that shit. <br><br>Anyone here had thei wisdom teeth removed while awake? What was it like? Was it as traumatizing as people make it out to be? And for those who went under, what was waking up like? How did you feel?<br>Sorry for the rant im just tired of people saying im crazy for wanting to be awake. I&#39;m not afraid to get them taken out, i know it&#39;ll be uncomfortable. People used to do thisshit all the time without aneasthesia and they were fine. I think people are just more sensitive than they used to be and things like blood and surgeries make them uncomfortable. Blood and gore don&#39;t bother me really.   </blockquote>   				 				  <span class="omittedposts">  49 posts and 6 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3708976.php#3709443" onclick="highlight(3709443);">&gt;&gt;</a></td> <td class="reply" id="reply3709443"> <a id="3709443"></a> <div class="replyheader"> 									 <span class="commentpostername">Beefy McBeeferson</span>  - <span class="idhighlight">Tue, 22 Jul 2014 14:50:44 EST ID:jWkGDLFh</span> <span class="reflink">  <a href="/b/res/3708976.php#i3709443">No.3709443</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33303937323835353930')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709443', '3708976')" title="Report Post 3709443"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709443" data-thread="3708976"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E621CE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b33303937323835353930">  I went under for my wisdom teeth but I had a tooth surgically removed while awake once. They gave me nitrous oxide though, which helped immensely. Then they put several injections throughout the area in my mouth to make everything totally numb. Took like a couple hours? I don&#39;t know. Seemed like forever. The nitrous oxide was nice but overall it was a pretty shitty experience. The anesthetic made the work area numb but I could still feel a vague, distant ache as they cut shit in my mouth. Not pleasant. <br><br>Just go under. I don&#39;t know what you&#39;re problem is. If you wanna have a stick up your ass about anesthesiology that&#39;s your game I guess. Me, I love being drugged up and knocked out. It&#39;s the shit. And hey guess what, here&#39;s some vicodin for having your teeth pulled.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708976.php#3709446" onclick="highlight(3709446);">&gt;&gt;</a></td> <td class="reply" id="reply3709446"> <a id="3709446"></a> <div class="replyheader"> 									 <span class="commentpostername">Mike Kyle</span>  - <span class="idhighlight">Tue, 22 Jul 2014 14:53:25 EST ID:5a8Rj/XD</span> <span class="reflink">  <a href="/b/res/3708976.php#i3709446">No.3709446</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323632373331303635')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709446', '3708976')" title="Report Post 3709446"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709446" data-thread="3708976"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #DFD2B2; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323632373331303635">  <a href = "/b/res/3708976.php#3709077" onclick = "highlight(3709077)">&gt;&gt;3709077</a><br><blockquote class = "unkfunc">&gt;doesn&#39;t like Counter Strike<br>&gt;this has to be a troll</blockquote>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708976.php#3709478" onclick="highlight(3709478);">&gt;&gt;</a></td> <td class="reply" id="reply3709478"> <a id="3709478"></a> <div class="replyheader"> 									 <span class="commentpostername">SidneyCockleshit.bin</span>  - <span class="idhighlight">Tue, 22 Jul 2014 15:33:33 EST ID:mwOL5Vno</span> <span class="reflink">  <a href="/b/res/3708976.php#i3709478">No.3709478</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323039383431393736')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709478', '3708976')" title="Report Post 3709478"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709478" data-thread="3708976"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #CAC54D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323039383431393736">  <a href = "/b/res/3708976.php#3709407" onclick = "highlight(3709407)">&gt;&gt;3709407</a><br>I can vouch for this.<br>You&#39;re given a cocktail of things when you get &quot;put under.&quot; Some of it is to stop pain, some of it is to make you sleep, and some of it is to make you forgetful. If you don&#39;t remember something happening to you, it&#39;s just the same as having it never happen. So it&#39;s quite possible that you scream and thrash and feel every agonizing moment through the whole process, and in those moments you are in hell, but the part of your brain that records and interprets what happens to you has been shut off, so you never know.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708976.php#3709520" onclick="highlight(3709520);">&gt;&gt;</a></td> <td class="reply" id="reply3709520"> <a id="3709520"></a> <div class="replyheader"> 									 <span class="commentpostername">Vin Gerard</span>  - <span class="idhighlight">Tue, 22 Jul 2014 16:08:15 EST ID:e9OO1nqK</span> <span class="reflink">  <a href="/b/res/3708976.php#i3709520">No.3709520</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323638363637383836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709520', '3708976')" title="Report Post 3709520"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709520" data-thread="3708976"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E62707; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323638363637383836">  if i were i girl i would feel uncomfortable going under, because, you know....rape...<br><br>as i guy though i couldn&#39;t care less.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3709455"> <div class="thread_header"> <a id="3709455"></a> <span class="filetitle">fractured my toe</span>  <span class="inbetween"> by </span> <span class="postername">Joseph Favre</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 15:04:05 EST ID:N5QXRx1r</span></span>  <span class="reflink"> <a href="/b/res/3709455.php#i3709455">No.3709455</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31313133303134363730')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3709455')" title="Report Thread 3709455"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3709455.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709455" data-thread="3709455"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C2D01C; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3709455');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406055845804.jpg"> 1406055845804.jpg </a> -(<em>33009 B, 483x620</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb31313133303134363730" target="_blank" href="/b/src/1406055845804.jpg"> <img src="/b/thumb/1406055845804s.jpg" alt="33009" class="thumb" /> </a>   			 <blockquote class="opcomment b31313133303134363730">  So I&#39;m gonna take the next 3 days off and just lie in bed playing video games, watching netflix, and staying high as fuck.<br>I need some snack ideas though. What&#39;s your favorite stoned eats?<br><br>Not sure if more /high/ or /nom/ so let me know if I guessed wrong   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/b/res/3709455.php#3709465" onclick="highlight(3709465);">&gt;&gt;</a></td> <td class="reply" id="reply3709465"> <a id="3709465"></a> <div class="replyheader"> 									 <span class="commentpostername">Dark Queen</span>  - <span class="idhighlight">Tue, 22 Jul 2014 15:13:17 EST ID:nxJ24h4N</span> <span class="reflink">  <a href="/b/res/3709455.php#i3709465">No.3709465</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323037393336383430')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709465', '3709455')" title="Report Post 3709465"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709465" data-thread="3709455"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #171727; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323037393336383430">  i would berry my dick so far inside those asses that whoever could pull it out would be crowned king arthur   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709455.php#3709468" onclick="highlight(3709468);">&gt;&gt;</a></td> <td class="reply" id="reply3709468"> <a id="3709468"></a> <div class="replyheader"> 									 <span class="commentpostername">Rich Franklin</span>  - <span class="idhighlight">Tue, 22 Jul 2014 15:18:19 EST ID:oCj7n7vD</span> <span class="reflink">  <a href="/b/res/3709455.php#i3709468">No.3709468</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31343533313134373836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709468', '3709455')" title="Report Post 3709468"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709468" data-thread="3709455"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #435447; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406056699822.png"> 1406056699822.png </a> -(<em>561531 B, 894x894</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406056699822.png"> <img src="/b/thumb/1406056699822s.jpg" alt="561531" class="thumb" /> </a>    <blockquote  class="b31343533313134373836">  Congratulations, you won the thread!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3709455.php#3709510" onclick="highlight(3709510);">&gt;&gt;</a></td> <td class="reply" id="reply3709510"> <a id="3709510"></a> <div class="replyheader"> 									 <span class="commentpostername">Alton Brown</span>  - <span class="idhighlight">Tue, 22 Jul 2014 16:02:49 EST ID:jxI9rj34</span> <span class="reflink">  <a href="/b/res/3709455.php#i3709510">No.3709510</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31363235353933383032')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709510', '3709455')" title="Report Post 3709510"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709510" data-thread="3709455"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #146B45; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31363235353933383032">  <a href = "/b/res/3709455.php" onclick = "highlight(3709455)">&gt;&gt;3709455</a><br>Dat ass   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="bthread3708973"> <div class="thread_header"> <a id="3708973"></a> <span class="filetitle">She won&#39;t let you fly, but she might let you sing</span>  <span class="inbetween"> by </span> <span class="postername">The Traveler</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 02:23:04 EST ID:NA/s6AYL</span></span>  <span class="reflink"> <a href="/b/res/3708973.php#i3708973">No.3708973</a> </span>    			 <!--  - Awesome Thread? <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3708973&amp;vote=0">No!</a> | <a href="/b/taimaba.pl?board=b&amp;task=vote&amp;thread=3708973&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33333336383839353036')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('3708973')" title="Report Thread 3708973"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/b/res/3708973.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3708973" data-thread="3708973"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #20C161; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('bthread3708973');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406010184388.jpg"> 1406010184388.jpg </a> -(<em>75967 B, 587x444</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgb33333336383839353036" target="_blank" href="/b/src/1406010184388.jpg"> <img src="/b/thumb/1406010184388s.jpg" alt="75967" class="thumb" /> </a>   			 <blockquote class="opcomment b33333336383839353036">  Mother, should I trust the government?   </blockquote>   				 				  <span class="omittedposts">  27 posts and 7 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/b/res/3708973.php#3709412" onclick="highlight(3709412);">&gt;&gt;</a></td> <td class="reply" id="reply3709412"> <a id="3709412"></a> <div class="replyheader"> 									 <span class="commentpostername">Wesley Tootford</span>  - <span class="idhighlight">Tue, 22 Jul 2014 14:20:24 EST ID:gbyFA1l+</span> <span class="reflink">  <a href="/b/res/3708973.php#i3709412">No.3709412</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b343139313832343336')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709412', '3708973')" title="Report Post 3709412"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709412" data-thread="3708973"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8644D4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/b/src/1406053224096.jpg"> 1406053224096.jpg </a> -(<em>9298 B, 224x224</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/b/src/1406053224096.jpg"> <img src="/b/thumb/1406053224096s.jpg" alt="9298" class="thumb" /> </a>    <blockquote  class="b343139313832343336">  <a href = "/b/res/3708973.php#3709161" onclick = "highlight(3709161)">&gt;&gt;3709161</a><br>You fucker, here is a song called Skrillex feat. Daddy Rock - Makn&#39; A Shart<br>a.k.a. &quot;The Doors jumping the shark&quot;.<br><br><a href="http://youtu.be/BUULBlDcju4" rel="nofollow" target="_blank">http://youtu.be/BUULBlDcju4</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708973.php#3709434" onclick="highlight(3709434);">&gt;&gt;</a></td> <td class="reply" id="reply3709434"> <a id="3709434"></a> <div class="replyheader"> 									 <span class="commentpostername">Ettore Boiardi</span>  - <span class="idhighlight">Tue, 22 Jul 2014 14:43:56 EST ID:iRdbvmw+</span> <span class="reflink">  <a href="/b/res/3708973.php#i3709434">No.3709434</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b33353831303435303738')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709434', '3708973')" title="Report Post 3709434"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709434" data-thread="3708973"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5C03C4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b33353831303435303738">  <a href = "/b/res/3708973.php#3709406" onclick = "highlight(3709406)">&gt;&gt;3709406</a><br>*whether   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708973.php#3709435" onclick="highlight(3709435);">&gt;&gt;</a></td> <td class="reply" id="reply3709435"> <a id="3709435"></a> <div class="replyheader"> 									 <span class="commentpostername">Cub Swanson</span>  - <span class="idhighlight">Tue, 22 Jul 2014 14:44:05 EST ID:UyWgwGmv</span> <span class="reflink">  <a href="/b/res/3708973.php#i3709435">No.3709435</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b31323031373931383531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709435', '3708973')" title="Report Post 3709435"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709435" data-thread="3708973"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #97AA94; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b31323031373931383531">  Mama! Mama!<br>Someone said they made some noise<br>The cops have shot some girls and boys   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/b/res/3708973.php#3709440" onclick="highlight(3709440);">&gt;&gt;</a></td> <td class="reply" id="reply3709440"> <a id="3709440"></a> <div class="replyheader"> 									 <span class="commentpostername">Tavek</span>  - <span class="idhighlight">Tue, 22 Jul 2014 14:50:01 EST ID:t5giXEVt</span> <span class="reflink">  <a href="/b/res/3708973.php#i3709440">No.3709440</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('b353838323632393838')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('3709440', '3708973')" title="Report Post 3709440"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="3709440" data-thread="3708973"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9AC696; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="b353838323632393838">  You can trust the government?   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://insomniacgamers.net"><img src="http://cdn.420chan.org/sp/i.png"></a>
		</div>
				<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/b/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="b" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <input type="hidden" name="name" />	  <table> <tbody>     <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">  <a href="/b/1.php">&lt;&lt;Last</a>   <span style="font-size: +1;">Pages</span>   <a href="/b/3.php">Next&gt;&gt;</a>  <br />   <a href="/b/index.php">0</a>     <a href="/b/1.php">1</a>      2    <a href="/b/3.php">3</a>     <a href="/b/4.php">4</a>     <a href="/b/5.php">5</a>     <a href="/b/6.php">6</a>     <a href="/b/7.php">7</a>     <a href="/b/8.php">8</a>     <a href="/b/9.php">9</a>     <a href="/b/10.php">10</a>     <a href="/b/11.php">11</a>     <a href="/b/12.php">12</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3855108.php' class='boardlink'>Thread 3855108</a></span>
		<p>>>3855108
Suárez confirmed for a WWE run?... <a href='/wooo/res/3855108.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='420' src='/static/images/board_icons/420_icon_32.png' />
		<span class='byline'>420chan Discussion &amp; Staff Interaction - <a href='/420/res/190362.php' class='boardlink'>Thread 190362</a></span>
		<p>>>190368

swerveface is a fuckface... <a href='/420/res/190362.php' class='boardlink'>&#8629;</a></p></li>
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

