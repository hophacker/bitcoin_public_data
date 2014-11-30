http://boards.420chan.org/tinfoil/index.php
HTTP/1.0 200 OK
X-Powered-By: PHP/5.4.17
Content-Encoding: gzip
Vary: Accept-Encoding
Content-type: text/html
Connection: close
Date: Tue, 22 Jul 2014 16:13:26 GMT
Server: lighttpd/1.4.31

  <!DOCTYPE HTML> <html> <head> <title> Conspiracy Theories - 420chan </title> <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> <link rel="shortcut icon" type="image/png" href="/static/images/board_icons/tinfoil_icon_64.png" /> <link rel="apple-touch-icon-precomposed" href="/static/images/board_icons/tinfoil_icon_128.png" /> <script type="text/javascript">var style_cookie="";</script> <link rel="stylesheet" type="text/css" href="/static/css/brandbar.css" /> <!-- Core JS Libraries --> <script type="text/javascript" src="http://cdn.420chan.org/j/jquery.min.js"></script> <!-- 420chan JS Libraries --> <script type="text/javascript" src="/static/min/?g=js&amp;v=10"></script> <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script> 	<link rel="stylesheet" type="text/css" href="/static/css/menus.css" />	
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
				// window.location = 'http://cdn.420chan.org/u/splash/?t=http://boards.420chan.org/tinfoil/index.php';
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
	 <div id="header"> <div id="board_logo"> <a href="/tinfoil/" style="text-decoration:none; color:inherit;"> <img class="board_icon" src="/static/images/board_icons/tinfoil_icon_64.png" alt="/tinfoil/ Icon" /> <p class="board_title_block"> <span class="board_name">/tinfoil/</span> <span class="board_title">Conspiracy Theories</span> </p> </a> </div>	 <div id="derps" style="width:468px; height:60px; float: right; display: block;"> </div> </div><div id="content"> 	<div style="width: 100%; text-align: center; font-size: 18px; font-weight: bold; line-height: 22px; margin: 5px auto">
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
	 <!--  --> <!-- <div class="rss"> <a href="http://420chan.org/donate/" style="font-size: 1.4em; font-weight: bold; margin: 2px 0;">420chan "Donate-or-Die" Donation FAQ</a> </div> -->   <div class="postarea"> <form id="postform" action="/tinfoil/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="tinfoil" /> <input type="hidden" name="task" value="post" /> <input title="Password" type="hidden" name="password" size="8" />     <div class="trap"> Leave these fields empty (spam trap): <input type="text" name="name" size="28" autocomplete="off" /> <input type="text" name="link" size="28" autocomplete="off" /> </div>  <table> <tbody>  <tr> <td class="postblock">Name</td> <td> <input title="Name" type="text" name="field1" style="width:224px;" /> <div class="tooltip">  You can leave this blank to post anonymously, or you can create a Tripcode by using the float <b>Name#Password</b> </div>					 </td> </tr>    <tr style="font-weight: bold;"><td style="text-align: center;">A subject is required when posting a new thread</td></tr>   <tr> <td class="postblock">Subject</td> <td> <input title="Subject" type="text" name="field3" style="width:354px;" /> <div style="display:none;"></div> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> <div style="display:none;"></div> </td> </tr>   <tr> <td class="postblock">Comment</td> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px;" cols="50"></textarea> <div class="tooltip"> [*]<i>Italic Text</i>[/*] <br /> [**]<b>Bold Text</b>[/**] <br />									 [~]Taimapedia Article[/~] <br /> [%]Spoiler Text[/%] <br /> <span class="unkfunc">&gt;Highlight/Quote Text</span> <br /> [pre]Preformatted &amp; Monospace text[/pre] <br /> 1. Numbered lists become ordered lists <br /> * Bulleted lists become unordered lists <br /> </div> </td> </tr> <!-- <tr> <td> <input type="button" name="b" value="Bold" onclick="this.form.field4.value=this.form.field4.value.concat('[b][/b]');" /> <input type="button" name="i" value="Italic" onclick="this.form.field4.value=this.form.field4.value.concat('[i][/i]');" /> <input type="button" name="taimapedia" value="Taimapedia" onclick="this.form.field4.value=this.form.field4.value.concat('[taimapedia][/taimapedia]');" /> <input type="button" name="spoiler" value="Spoiler" onclick="this.form.field4.value=this.form.field4.value.concat('[spoiler][/spoiler]');"> </td> </tr> -->  <tr> <td class="postblock">File</td> <td> <input type="file" name="file" /> <div style="display:none;"></div>  <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> <p style="display:none;"></p> <a href="/static/sandwich.php" class="popup"> <span class="sandwich"></span>Sandwich </a> </td> </tr>  <!-- <tr> <td class="postblock">Password</td> <td> <input title="Password" type="hidden" name="password" size="8" /> <div style="display:none;"></div> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> </div>  <script type="text/javascript">set_inputs("postform")</script> <div id="rules"> <ul> <li>Supported file types are: GIF, JPG, PNG</li> <li>Maximum file size allowed is 3000KB.</li> <li>Images greater than 200x200 pixels will be thumbnailed.</li> <li>No personal contact info is to be posted under any circumstances.</li> <li>This is a work-safe board. Posting adult images is forbidden.</li>			  </ul> </div> <hr style="margin-bottom:2px;" /> 	
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
 <hr style="margin-top:2px;" />   <form id="delform" action="/tinfoil/taimaba.pl" method="post" style="margin-top: none;"> <input type="hidden" name="board" value="tinfoil" />    <div id="tinfoilthread67876"> <div class="thread_header"> <a id="67876"></a> <span class="filetitle">what the.</span>  <span class="inbetween"> by </span> <span class="postername">Clara Brangerdudge</span>  <span class="inbetween"> - <span class="idhighlight">Tue, 22 Jul 2014 07:05:15 EST ID:/naeF8HY</span></span>  <span class="reflink"> <a href="/tinfoil/res/67876.php#i67876">No.67876</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31333736383637363539')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('67876')" title="Report Thread 67876"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/tinfoil/res/67876.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67876" data-thread="67876"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E03ADC; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('tinfoilthread67876');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1406027115413.jpg"> 1406027115413.jpg </a> -(<em>4643 B, 259x194</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgtinfoil31333736383637363539" target="_blank" href="/tinfoil/src/1406027115413.jpg"> <img src="/tinfoil/thumb/1406027115413s.jpg" alt="4643" class="thumb" /> </a>   			 <blockquote class="opcomment tinfoil31333736383637363539">  <a href="https://www.youtube.com/watch?v=DG2rEdXcGQs&amp;amp;index=2&amp;amp;list=UU2fx99piKh2NAzQ3o8AiJpw" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=DG2rEdXcGQs&amp;index=2&amp;list=UU2fx99piKh2NAzQ3o8AiJpw</a>   </blockquote>   				 				     <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="tinfoilthread67860"> <div class="thread_header"> <a id="67860"></a> <span class="filetitle">BPA in Canned foods</span>  <span class="inbetween"> by </span> <span class="postername">Cyril Niggerson</span>  <span class="inbetween"> - <span class="idhighlight">Mon, 21 Jul 2014 00:26:31 EST ID:9ru6/5BD</span></span>  <span class="reflink"> <a href="/tinfoil/res/67860.php#i67860">No.67860</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31323036333337383135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('67860')" title="Report Thread 67860"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/tinfoil/res/67860.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67860" data-thread="67860"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E71A32; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('tinfoilthread67860');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1405916791315.jpg"> 1405916791315.jpg </a> -(<em>404194 B, 670x882</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgtinfoil31323036333337383135" target="_blank" href="/tinfoil/src/1405916791315.jpg"> <img src="/tinfoil/thumb/1405916791315s.jpg" alt="404194" class="thumb" /> </a>   			 <blockquote class="opcomment tinfoil31323036333337383135">  In post WW2 America when the bomb and MAD was still a looming possibility did the government begin lining canned goods with endocrine disrupting, estrogen promoting chemicals?<br>In the wake of a nuclear winter nearly all food would need to be drawn from cans, and what better way to discourage raping, pillaging and banditry than by lacing the only food supply with the perfect chemical to turn crazed apocalyptic savages into limp dick, emotional nancy boys. Thereby assuring cooperation among the survivors and continuation in some form of the United States Government.   </blockquote>   				 				       <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67860.php#67861" onclick="highlight(67861);">&gt;&gt;</a></td> <td class="reply" id="reply67861"> <a id="67861"></a> <div class="replyheader"> 									 <span class="commentpostername">John Pickforth</span>  - <span class="idhighlight">Mon, 21 Jul 2014 01:25:19 EST ID:pMwL+4+W</span> <span class="reflink">  <a href="/tinfoil/res/67860.php#i67861">No.67861</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31323836303933343631')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67861', '67860')" title="Report Post 67861"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67861" data-thread="67860"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #665BA4; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31323836303933343631">  No, companies have just started using BPA plastics and whatnot because they&#39;re cheaper for them. Much cheaper. Of course they know that the plastics contain xenestrogens, but isn&#39;t the bottom-line more important than humanity?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67860.php#67862" onclick="highlight(67862);">&gt;&gt;</a></td> <td class="reply" id="reply67862"> <a id="67862"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigel Bracklefield</span>  - <span class="idhighlight">Mon, 21 Jul 2014 01:36:00 EST ID:j/E98tys</span> <span class="reflink">  <a href="/tinfoil/res/67860.php#i67862">No.67862</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31313032303437303236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67862', '67860')" title="Report Post 67862"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67862" data-thread="67860"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #522F33; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31313032303437303236">  <a href = "/tinfoil/res/67860.php" onclick = "highlight(67860)">&gt;&gt;67860</a><br><br>Wicked good theory OP, it just might be true.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67860.php#67863" onclick="highlight(67863);">&gt;&gt;</a></td> <td class="reply" id="reply67863"> <a id="67863"></a> <div class="replyheader"> 									 <span class="commentpostername">Beatrice Beblingfodging</span>  - <span class="idhighlight">Mon, 21 Jul 2014 09:38:22 EST ID:y3QHgT70</span> <span class="reflink">  <a href="/tinfoil/res/67860.php#i67863">No.67863</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31343534303831343431')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67863', '67860')" title="Report Post 67863"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67863" data-thread="67860"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #65E67C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31343534303831343431">  <blockquote class = "unkfunc">&gt;turn crazed apocalyptic savages into limp dick, emotional nancy boys<br>&gt;mfw OP thinks manly men have no emotion</blockquote>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67860.php#67875" onclick="highlight(67875);">&gt;&gt;</a></td> <td class="reply" id="reply67875"> <a id="67875"></a> <div class="replyheader"> 									 <span class="commentpostername">Simon Challerkot</span>  - <span class="idhighlight">Tue, 22 Jul 2014 04:26:59 EST ID:9ru6/5BD</span> <span class="reflink">  <a href="/tinfoil/res/67860.php#i67875">No.67875</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31323036333337383135')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67875', '67860')" title="Report Post 67875"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67875" data-thread="67860"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #67C821; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31323036333337383135">  <a href = "/tinfoil/res/67860.php#67863" onclick = "highlight(67863)">&gt;&gt;67863</a><br>it&#39;s not like estrogen is responsible for emotions, but when men have a high estrogen to testosterone ratio they get moody, depressed, and more importantly less aggressive sexually and physically.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="tinfoilthread66597"> <div class="thread_header"> <a id="66597"></a> <span class="filetitle">Is anime a conspiracy?</span>  <span class="inbetween"> by </span> <span class="postername">Clara Duppermedge</span>  <span class="inbetween"> - <span class="idhighlight">Sat, 31 May 2014 04:39:38 EST ID:freiki8V</span></span>  <span class="reflink"> <a href="/tinfoil/res/66597.php#i66597">No.66597</a> </span>    			 <!--  - Awesome Thread? <a href="/tinfoil/taimaba.pl?board=tinfoil&amp;task=vote&amp;thread=66597&amp;vote=0">No!</a> | <a href="/tinfoil/taimaba.pl?board=tinfoil&amp;task=vote&amp;thread=66597&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31343833383339323232')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('66597')" title="Report Thread 66597"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/tinfoil/res/66597.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="66597" data-thread="66597"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5C6F4B; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('tinfoilthread66597');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1401525578545.jpg"> 1401525578545.jpg </a> -(<em>305658 B, 800x600</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgtinfoil31343833383339323232" target="_blank" href="/tinfoil/src/1401525578545.jpg"> <img src="/tinfoil/thumb/1401525578545s.jpg" alt="305658" class="thumb" /> </a>   			 <blockquote class="opcomment tinfoil31343833383339323232">  <a href="https://www.youtube.com/watch?v=3XLng3j2I0M" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=3XLng3j2I0M</a><br><a href="https://www.youtube.com/watch?v=Py_Twb0A1jk" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=Py_Twb0A1jk</a><br><br>What is the connection to hikkikomoris and vegetarian men? The mixture of conservative values with youth sexualization is striking, but I think this goes deeper. 420chan used to be animu, drugs and dongs until some incident converted the site to an anti-anime stance. Are they trying to hide something from us? Or protect us from something? Is anime more dangerous than drugs?<br>I&#39;ve seen a researcher on the internet researching the origins of anime and concluding that anime does not actually originate in recent history in Japan but has ancient roots!<br><br>How do these cartoons distort our minds? Why did they ban idols in ancient time and the drawing of humanoid figures? Was there something more at work in the decision to nuke Japan?   </blockquote>   				 				  <span class="omittedposts">  137 posts and 26 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/66597.php#67806" onclick="highlight(67806);">&gt;&gt;</a></td> <td class="reply" id="reply67806"> <a id="67806"></a> <div class="replyheader"> 									 <span class="commentpostername">Priscilla Beggleforth</span>  - <span class="idhighlight">Fri, 18 Jul 2014 16:21:24 EST ID:JC5CQHof</span> <span class="reflink">  <a href="/tinfoil/res/66597.php#i67806">No.67806</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil32393139333239383530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67806', '66597')" title="Report Post 67806"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67806" data-thread="66597"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9976CC; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil32393139333239383530">  <a href = "/tinfoil/res/66597.php#67800" onclick = "highlight(67800)">&gt;&gt;67800</a><br>no actually, I&#39;m not. I don&#39;t work for the government and have no affiliation whatsoever, I&#39;m probably on a shit ton of watch lists too plus I&#39;m canadian. however, I can see when someone is clearly mentally ill. <br><br>there&#39;s conspiracies like the contras and then there&#39;s these types of conspiracies. one is based in reality with evidence and the other is not.<br><br>I don&#39;t mean to cause any offense but these thoughts aren&#39;t healthy.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/66597.php#67821" onclick="highlight(67821);">&gt;&gt;</a></td> <td class="reply" id="reply67821"> <a id="67821"></a> <div class="replyheader"> 									 <span class="commentpostername">Isabella Challerpotch</span>  - <span class="idhighlight">Sat, 19 Jul 2014 05:11:03 EST ID:KfRcU19u</span> <span class="reflink">  <a href="/tinfoil/res/66597.php#i67821">No.67821</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31323036333436323733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67821', '66597')" title="Report Post 67821"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67821" data-thread="66597"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1710C3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31323036333436323733">  <a href = "/tinfoil/res/66597.php#67806" onclick = "highlight(67806)">&gt;&gt;67806</a><br>That&#39;s exactly what a government shill would say   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/66597.php#67839" onclick="highlight(67839);">&gt;&gt;</a></td> <td class="reply" id="reply67839"> <a id="67839"></a> <div class="replyheader"> 									 <span class="commentpostername">Esther Chaddlestut</span>  - <span class="idhighlight">Sat, 19 Jul 2014 18:22:06 EST ID:R3oc+o9z</span> <span class="reflink">  <a href="/tinfoil/res/66597.php#i67839">No.67839</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31383038393638383637')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67839', '66597')" title="Report Post 67839"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67839" data-thread="66597"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #638971; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1405808526851.png"> 1405808526851.png </a> -(<em>230376 B, 329x335</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/tinfoil/src/1405808526851.png"> <img src="/tinfoil/thumb/1405808526851s.jpg" alt="230376" class="thumb" /> </a>    <blockquote  class="tinfoil31383038393638383637">  <a href = "/tinfoil/res/66597.php#67821" onclick = "highlight(67821)">&gt;&gt;67821</a><br>i fucking wish the government would pay me to post on the internet<br><br>that&#39;d be the dream   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/66597.php#67841" onclick="highlight(67841);">&gt;&gt;</a></td> <td class="reply" id="reply67841"> <a id="67841"></a> <div class="replyheader"> 									 <span class="commentpostername">Soviet Psychonaut</span>  - <span class="idhighlight">Sat, 19 Jul 2014 19:10:20 EST ID:19uedkAm</span> <span class="reflink">  <a href="/tinfoil/res/66597.php#i67841">No.67841</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31303935363331363333')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67841', '66597')" title="Report Post 67841"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67841" data-thread="66597"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #089C60; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31303935363331363333">  <a href = "/tinfoil/res/66597.php#67839" onclick = "highlight(67839)">&gt;&gt;67839</a><br>I fucking HEAR that, and I hate the fuckers too   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/66597.php#67874" onclick="highlight(67874);">&gt;&gt;</a></td> <td class="reply" id="reply67874"> <a id="67874"></a> <div class="replyheader"> 									 <span class="commentpostername">Angus Fimmlekat</span>  - <span class="idhighlight">Tue, 22 Jul 2014 03:48:23 EST ID:TyfoCATV</span> <span class="reflink">  <a href="/tinfoil/res/66597.php#i67874">No.67874</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31343235353538363430')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67874', '66597')" title="Report Post 67874"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67874" data-thread="66597"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8DA231; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1406015303924.png"> 1406015303924.png </a> -(<em>145574 B, 300x320</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/tinfoil/src/1406015303924.png"> <img src="/tinfoil/thumb/1406015303924s.jpg" alt="145574" class="thumb" /> </a>    <blockquote  class="tinfoil31343235353538363430">  <blockquote class = "unkfunc">&gt;&quot;Timothy Good continues by relating a previously published account of his encounter with possible hybrids on Earth. For example, “…a small, young female in the U.S….extraordinarily petite, very alert looking woman. I sent out a mental thought asking her that if she were from elsewhere, could she just step out of the line. When she approached me, she took the most gracious low bow and my three colleagues who were there looked in amazement. She took a very deep bow and then stood up and looked at me with a deadpan expression and simply walked away.&quot;<br></blockquote><br><blockquote class = "unkfunc">&gt;small <br>&gt;young <br>&gt;female <br>&gt;extraordinarily petite</blockquote>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="tinfoilthread66751"> <div class="thread_header"> <a id="66751"></a> <span class="filetitle">Kain</span>  <span class="inbetween"> by </span> <span class="postername">Phyllis Ponkinstock</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 04 Jun 2014 00:42:30 EST ID:99BKZoZC</span></span>  <span class="reflink"> <a href="/tinfoil/res/66751.php#i66751">No.66751</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil33313438363635333938')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('66751')" title="Report Thread 66751"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/tinfoil/res/66751.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="66751" data-thread="66751"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #10EACA; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('tinfoilthread66751');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1401856950223.jpg"> 1401856950223.jpg </a> -(<em>296889 B, 1093x565</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgtinfoil33313438363635333938" target="_blank" href="/tinfoil/src/1401856950223.jpg"> <img src="/tinfoil/thumb/1401856950223s.jpg" alt="296889" class="thumb" /> </a>   			 <blockquote class="opcomment tinfoil33313438363635333938">  where did kain go?   </blockquote>   				 				  <span class="omittedposts">   3 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/66751.php#66919" onclick="highlight(66919);">&gt;&gt;</a></td> <td class="reply" id="reply66919"> <a id="66919"></a> <div class="replyheader"> 									 <span class="commentpostername">Caroline Blapperfoot</span>  - <span class="idhighlight">Mon, 09 Jun 2014 14:17:13 EST ID:fzs+9gTx</span> <span class="reflink">  <a href="/tinfoil/res/66751.php#i66919">No.66919</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31383136373230303430')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('66919', '66751')" title="Report Post 66919"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="66919" data-thread="66751"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5DDF4D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31383136373230303430">  he asscended, brah   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/66751.php#67827" onclick="highlight(67827);">&gt;&gt;</a></td> <td class="reply" id="reply67827"> <a id="67827"></a> <div class="replyheader"> 									 <span class="commentpostername">Charlotte Grandfoot</span>  - <span class="idhighlight">Sat, 19 Jul 2014 11:23:41 EST ID:Cm0kMBQJ</span> <span class="reflink">  <a href="/tinfoil/res/66751.php#i67827">No.67827</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31323037373933353839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67827', '66751')" title="Report Post 67827"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67827" data-thread="66751"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0F3B43; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31323037373933353839">  <a href = "/tinfoil/res/66751.php" onclick = "highlight(66751)">&gt;&gt;66751</a><br>A lot of people won&#39;t remember who Kain was.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/66751.php#67829" onclick="highlight(67829);">&gt;&gt;</a></td> <td class="reply" id="reply67829"> <a id="67829"></a> <div class="replyheader"> 									 <span class="commentpostername">Soviet Psychonaut</span>  - <span class="idhighlight">Sat, 19 Jul 2014 11:45:41 EST ID:6BgtoO45</span> <span class="reflink">  <a href="/tinfoil/res/66751.php#i67829">No.67829</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil33333336383832323031')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67829', '66751')" title="Report Post 67829"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67829" data-thread="66751"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #44171A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil33333336383832323031">  <a href = "/tinfoil/res/66751.php#67827" onclick = "highlight(67827)">&gt;&gt;67827</a><br>That&#39;s actually depressing because it wasn&#39;t that long ago, I feel old now :/<br><br>He did get a lot of hate though, that might of helped him move on   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/66751.php#67840" onclick="highlight(67840);">&gt;&gt;</a></td> <td class="reply" id="reply67840"> <a id="67840"></a> <div class="replyheader"> 									 <span class="commentpostername">Cedric Nicklefoot</span>  - <span class="idhighlight">Sat, 19 Jul 2014 18:47:43 EST ID:aHCo1iCT</span> <span class="reflink">  <a href="/tinfoil/res/66751.php#i67840">No.67840</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31323238313037303836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67840', '66751')" title="Report Post 67840"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67840" data-thread="66751"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #66C35A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31323238313037303836">  I used to have a huge .txt file of Kain&#39;s posts I could catch on /tinfoil/ and some on /spooky/. I even made a thread months back asking if anyone else had saved his posts since my file got deleted. I really loved his posts, they were full of great information, insight, history, and tools for development.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/66751.php#67873" onclick="highlight(67873);">&gt;&gt;</a></td> <td class="reply" id="reply67873"> <a id="67873"></a> <div class="replyheader"> 									 <span class="commentpostername">Sidney Chiffingman</span>  - <span class="idhighlight">Tue, 22 Jul 2014 02:05:39 EST ID:oSldSi3A</span> <span class="reflink">  <a href="/tinfoil/res/66751.php#i67873">No.67873</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil32393233333834343834')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67873', '66751')" title="Report Post 67873"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67873" data-thread="66751"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #72ABAD; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil32393233333834343834">  I had a lot of respect for him.  I felt like I learned a lot from him<br>I never understood the hate.  Maybe he was a little pompous, but he was also very learned.  I would like to see him make a comeback.  My favorite poster on this board, although I still think there are other good ones (Soviet Psychonaut, I&#39;ll give you a shout out).   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="tinfoilthread67745"> <div class="thread_header"> <a id="67745"></a> <span class="filetitle">They&#39;re taunting us!</span>  <span class="inbetween"> by </span> <span class="postername">Augustus Drabbleridge</span>  <span class="inbetween"> - <span class="idhighlight">Wed, 16 Jul 2014 18:09:46 EST ID:H3EUKZxs</span></span>  <span class="reflink"> <a href="/tinfoil/res/67745.php#i67745">No.67745</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31313336313235303435')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('67745')" title="Report Thread 67745"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/tinfoil/res/67745.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67745" data-thread="67745"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1203E1; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('tinfoilthread67745');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1405548586572.jpg"> 1405548586572.jpg </a> -(<em>291177 B, 792x792</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgtinfoil31313336313235303435" target="_blank" href="/tinfoil/src/1405548586572.jpg"> <img src="/tinfoil/thumb/1405548586572s.jpg" alt="291177" class="thumb" /> </a>   			 <blockquote class="opcomment tinfoil31313336313235303435">  <a href="https://www.youtube.com/watch?v=w-0TEJMJOhk" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=w-0TEJMJOhk</a>   </blockquote>   				 				  <span class="omittedposts">   1 posts omitted. Click Reply to view.  </span>       <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67745.php#67750" onclick="highlight(67750);">&gt;&gt;</a></td> <td class="reply" id="reply67750"> <a id="67750"></a> <div class="replyheader"> 									 <span class="commentpostername"></span> <span class="postertrip">!6cKTeRSkiQ</span> - <span class="idhighlight">Thu, 17 Jul 2014 00:13:18 EST ID:8rrU/+e+</span> <span class="reflink">  <a href="/tinfoil/res/67745.php#i67750">No.67750</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31323639353837373733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67750', '67745')" title="Report Post 67750"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67750" data-thread="67745"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1B05D3; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31323639353837373733">  It was surprisingly good. I must say I did not see that coming.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67745.php#67751" onclick="highlight(67751);">&gt;&gt;</a></td> <td class="reply" id="reply67751"> <a id="67751"></a> <div class="replyheader"> 									 <span class="commentpostername">Chaim Danzinger</span>  - <span class="idhighlight">Thu, 17 Jul 2014 00:53:39 EST ID:3PKUoPPc</span> <span class="reflink">  <a href="/tinfoil/res/67745.php#i67751">No.67751</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil343031373332323136')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67751', '67745')" title="Report Post 67751"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67751" data-thread="67745"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #3B7F35; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil343031373332323136">  that was hilarious, love Al&#39;s comeback   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67745.php#67782" onclick="highlight(67782);">&gt;&gt;</a></td> <td class="reply" id="reply67782"> <a id="67782"></a> <div class="replyheader"> 									 <span class="commentpostername">Jarvis Goodfoot</span>  - <span class="idhighlight">Fri, 18 Jul 2014 02:31:45 EST ID:CeoYED5W</span> <span class="reflink">  <a href="/tinfoil/res/67745.php#i67782">No.67782</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil343034313239373333')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67782', '67745')" title="Report Post 67782"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67782" data-thread="67745"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #4175AE; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil343034313239373333">  I am so happy he went there.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67745.php#67871" onclick="highlight(67871);">&gt;&gt;</a></td> <td class="reply" id="reply67871"> <a id="67871"></a> <div class="replyheader"> 									 <span class="commentpostername">Reuben Guddlehood</span>  - <span class="idhighlight">Mon, 21 Jul 2014 19:01:26 EST ID:bf1r7DFd</span> <span class="reflink">  <a href="/tinfoil/res/67745.php#i67871">No.67871</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil343130343237323333')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67871', '67745')" title="Report Post 67871"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67871" data-thread="67745"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B97CA7; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil343130343237323333">  at first i thought this was just another one of his videos and wondered how he would bring that it. but then he did   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67745.php#67872" onclick="highlight(67872);">&gt;&gt;</a></td> <td class="reply" id="reply67872"> <a id="67872"></a> <div class="replyheader"> 									 <span class="commentpostername">David Wuvingforth</span>  - <span class="idhighlight">Mon, 21 Jul 2014 22:06:32 EST ID:616T6PwP</span> <span class="reflink">  <a href="/tinfoil/res/67745.php#i67872">No.67872</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31323034373930373436')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67872', '67745')" title="Report Post 67872"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67872" data-thread="67745"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #966F79; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31323034373930373436">  <a href = "/tinfoil/res/67745.php#67782" onclick = "highlight(67782)">&gt;&gt;67782</a><br>I was too, until I read the comments. So many entry-level theories, it hurts.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="tinfoilthread67272"> <div class="thread_header"> <a id="67272"></a> <span class="filetitle">Getting away from Gangstalking</span>  <span class="inbetween"> by </span> <span class="postername">Cornelius Chackleson</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 22 Jun 2014 21:34:40 EST ID:QZb1Gsw+</span></span>  <span class="reflink"> <a href="/tinfoil/res/67272.php#i67272">No.67272</a> </span>    			 <!--  - Awesome Thread? <a href="/tinfoil/taimaba.pl?board=tinfoil&amp;task=vote&amp;thread=67272&amp;vote=0">No!</a> | <a href="/tinfoil/taimaba.pl?board=tinfoil&amp;task=vote&amp;thread=67272&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31363037373231353039')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('67272')" title="Report Thread 67272"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/tinfoil/res/67272.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67272" data-thread="67272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #77FCC0; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('tinfoilthread67272');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1403487280588.jpg"> 1403487280588.jpg </a> -(<em>2552 B, 133x112</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgtinfoil31363037373231353039" target="_blank" href="/tinfoil/src/1403487280588.jpg"> <img src="/tinfoil/src/1403487280588.jpg" alt="2552" class="thumb" /> </a>   			 <blockquote class="opcomment tinfoil31363037373231353039">  I&#39;ve been psyopped/gangstalked, and moved to another town, where I got psyopped and gangstalked again. I don&#39;t really tell a lot of people this happened. <br><br>I haven&#39;t witnessed anything for about a year and a half. When does this actually stop, and what do I do in the mean time? Do I kiss my former life goodbye and start over in another city?<br><br>Who&#39;s usually doing this to me? I dont have any government affiliations, and all the people bugging me look like vagrants, and havent had alot of sleep.   </blockquote>   				 				  <span class="omittedposts">  21 posts and 6 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67272.php#67859" onclick="highlight(67859);">&gt;&gt;</a></td> <td class="reply" id="reply67859"> <a id="67859"></a> <div class="replyheader"> 									 <span class="commentpostername">Martha Brellyson</span>  - <span class="idhighlight">Sun, 20 Jul 2014 21:42:17 EST ID:NbZwUWes</span> <span class="reflink">  <a href="/tinfoil/res/67272.php#i67859">No.67859</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31323431373937303736')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67859', '67272')" title="Report Post 67859"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67859" data-thread="67272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #112C62; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31323431373937303736">  What is psyopped/gangstalked?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67272.php#67864" onclick="highlight(67864);">&gt;&gt;</a></td> <td class="reply" id="reply67864"> <a id="67864"></a> <div class="replyheader"> 									 <span class="commentpostername">Angus Clullerhall</span>  - <span class="idhighlight">Mon, 21 Jul 2014 10:30:10 EST ID:vwxsHFSn</span> <span class="reflink">  <a href="/tinfoil/res/67272.php#i67864">No.67864</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil32303232373639323939')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67864', '67272')" title="Report Post 67864"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67864" data-thread="67272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AD7741; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil32303232373639323939">  <a href = "/tinfoil/res/67272.php#67859" onclick = "highlight(67859)">&gt;&gt;67859</a><br>Paranoia   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67272.php#67868" onclick="highlight(67868);">&gt;&gt;</a></td> <td class="reply" id="reply67868"> <a id="67868"></a> <div class="replyheader"> 									 <span class="commentpostername">Fanny Greenshaw</span>  - <span class="idhighlight">Mon, 21 Jul 2014 11:39:40 EST ID:JC5CQHof</span> <span class="reflink">  <a href="/tinfoil/res/67272.php#i67868">No.67868</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil32393139333239383530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67868', '67272')" title="Report Post 67868"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67868" data-thread="67272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #76A8E1; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil32393139333239383530">  <a href = "/tinfoil/res/67272.php#67859" onclick = "highlight(67859)">&gt;&gt;67859</a><br>typically drug induced paranoia coupled with the brain&#39;s natural ability to see patterns which is usually coincidental.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67272.php#67869" onclick="highlight(67869);">&gt;&gt;</a></td> <td class="reply" id="reply67869"> <a id="67869"></a> <div class="replyheader"> 									 <span class="commentpostername">Fanny Greenshaw</span>  - <span class="idhighlight">Mon, 21 Jul 2014 11:42:47 EST ID:JC5CQHof</span> <span class="reflink">  <a href="/tinfoil/res/67272.php#i67869">No.67869</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil32393139333239383530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67869', '67272')" title="Report Post 67869"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67869" data-thread="67272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #A86C68; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil32393139333239383530">  <a href = "/tinfoil/res/67272.php#67868" onclick = "highlight(67868)">&gt;&gt;67868</a><br><blockquote class = "unkfunc">&gt;hurrrrrrr</blockquote>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67272.php#67870" onclick="highlight(67870);">&gt;&gt;</a></td> <td class="reply" id="reply67870"> <a id="67870"></a> <div class="replyheader"> 									 <span class="commentpostername">Thomas Smallfoot</span>  - <span class="idhighlight">Mon, 21 Jul 2014 17:37:38 EST ID:aNxGjHvX</span> <span class="reflink">  <a href="/tinfoil/res/67272.php#i67870">No.67870</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31333737373130353534')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67870', '67272')" title="Report Post 67870"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67870" data-thread="67272"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B4CE1D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31333737373130353534">  <a href = "/tinfoil/res/67272.php#67868" onclick = "highlight(67868)">&gt;&gt;67868</a><br><br>nailed it<br><br>it&#39;s most likely an entry level form of psychosis that causes these sort of experiences - hearing voices in another room for instance is a pretty classic example of auditory hallucinations<br><br>when you combine that with feelings of synchronicity and simply not challenging the voices (accepting them as real) or even worse - begin acknowledging them altering your behaviour/thoughts as a result, it&#39;s simply a matter of time before you lose all grip on reality and will end up in a mental unit with absolutely no idea what is actually going on<br><br>i can say that with first hand experience sadly, i learnt my lesson.... <br><br>OP - ignore this shit and stop smoking weed, this is not normal and you are not some special exception   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="tinfoilthread67752"> <div class="thread_header"> <a id="67752"></a> <span class="filetitle">Is it me</span>  <span class="inbetween"> by </span> <span class="postername">Soviet Psychonaut</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 17 Jul 2014 13:38:36 EST ID:vbpZvUw+</span></span>  <span class="reflink"> <a href="/tinfoil/res/67752.php#i67752">No.67752</a> </span>    			 <!--  - Awesome Thread? <a href="/tinfoil/taimaba.pl?board=tinfoil&amp;task=vote&amp;thread=67752&amp;vote=0">No!</a> | <a href="/tinfoil/taimaba.pl?board=tinfoil&amp;task=vote&amp;thread=67752&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil33333336383832333236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('67752')" title="Report Thread 67752"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/tinfoil/res/67752.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67752" data-thread="67752"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0A11C7; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('tinfoilthread67752');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1405618716108.png"> 1405618716108.png </a> -(<em>474026 B, 1046x804</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgtinfoil33333336383832333236" target="_blank" href="/tinfoil/src/1405618716108.png"> <img src="/tinfoil/thumb/1405618716108s.jpg" alt="474026" class="thumb" /> </a>   			 <blockquote class="opcomment tinfoil33333336383832333236">  or have current events begun to get really weird as of late   </blockquote>   				 				  <span class="omittedposts">  60 posts and 10 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67752.php#67855" onclick="highlight(67855);">&gt;&gt;</a></td> <td class="reply" id="reply67855"> <a id="67855"></a> <div class="replyheader"> 									 <span class="commentpostername">Sophie Soblingstork</span>  - <span class="idhighlight">Sun, 20 Jul 2014 16:42:50 EST ID:9YVIhkaB</span> <span class="reflink">  <a href="/tinfoil/res/67752.php#i67855">No.67855</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31313838313035333036')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67855', '67752')" title="Report Post 67855"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67855" data-thread="67752"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F22948; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1405888970089.png"> 1405888970089.png </a> -(<em>542025 B, 1280x800</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/tinfoil/src/1405888970089.png"> <img src="/tinfoil/thumb/1405888970089s.jpg" alt="542025" class="thumb" /> </a>    <blockquote  class="tinfoil31313838313035333036">  <a href = "/tinfoil/res/67752.php#67853" onclick = "highlight(67853)">&gt;&gt;67853</a><br>The Langoliers!   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67752.php#67856" onclick="highlight(67856);">&gt;&gt;</a></td> <td class="reply" id="reply67856"> <a id="67856"></a> <div class="replyheader"> 									 <span class="commentpostername">Thomas Susslesture</span>  - <span class="idhighlight">Sun, 20 Jul 2014 18:27:54 EST ID:1hz3kYwL</span> <span class="reflink">  <a href="/tinfoil/res/67752.php#i67856">No.67856</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31313831383235333734')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67856', '67752')" title="Report Post 67856"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67856" data-thread="67752"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #37FE29; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31313831383235333734">  <a href = "/tinfoil/res/67752.php#67855" onclick = "highlight(67855)">&gt;&gt;67855</a><br>No, langoliers is what happened to MH370... dang plane went through a time rip.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67752.php#67857" onclick="highlight(67857);">&gt;&gt;</a></td> <td class="reply" id="reply67857"> <a id="67857"></a> <div class="replyheader"> 									 <span class="commentpostername">Barnaby Porrywill</span>  - <span class="idhighlight">Sun, 20 Jul 2014 21:22:45 EST ID:giAJMbkd</span> <span class="reflink">  <a href="/tinfoil/res/67752.php#i67857">No.67857</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil3335333838343835')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67857', '67752')" title="Report Post 67857"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67857" data-thread="67752"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #35039C; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1405905765587.png"> 1405905765587.png </a> -(<em>209562 B, 540x960</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/tinfoil/src/1405905765587.png"> <img src="/tinfoil/thumb/1405905765587s.jpg" alt="209562" class="thumb" /> </a>    <blockquote  class="tinfoil3335333838343835">  <a href = "/tinfoil/res/67752.php#67761" onclick = "highlight(67761)">&gt;&gt;67761</a><br><blockquote class = "unkfunc">&gt;russia spinning it as an attempt on putin<br>&gt;russia spinning it as<br></blockquote><br>Attempt on putin   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67752.php#67858" onclick="highlight(67858);">&gt;&gt;</a></td> <td class="reply" id="reply67858"> <a id="67858"></a> <div class="replyheader"> 									 <span class="commentpostername">Nigel Bracklefield</span>  - <span class="idhighlight">Sun, 20 Jul 2014 21:38:46 EST ID:j/E98tys</span> <span class="reflink">  <a href="/tinfoil/res/67752.php#i67858">No.67858</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31313032303437303236')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67858', '67752')" title="Report Post 67858"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67858" data-thread="67752"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5E9AF8; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31313032303437303236">  Shit just got weird <a href="http://news.yahoo.com/rebel-leader-gives-bizarre-account-plane-crash-182256709.html" rel="nofollow" target="_blank">http://news.yahoo.com/rebel-leader-gives-bizarre-account-plane-crash-182256709.html</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67752.php#67867" onclick="highlight(67867);">&gt;&gt;</a></td> <td class="reply" id="reply67867"> <a id="67867"></a> <div class="replyheader"> 									 <span class="commentpostername">Soviet Psychonaut</span>  - <span class="idhighlight">Mon, 21 Jul 2014 11:39:24 EST ID:HAn/luTq</span> <span class="reflink">  <a href="/tinfoil/res/67752.php#i67867">No.67867</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil32353034333233393730')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67867', '67752')" title="Report Post 67867"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67867" data-thread="67752"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #611C76; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil32353034333233393730">  The journalist who revealed Iran contra and cia death squads is saying that it was Ukrainians who shot down the plane<br><br><a href="http://acenewsservices.com/2014/07/21/malaysian-airlines-flight-mh-17-whistle-blower-told-by-intelligence-source-us-retains-satellite-imagery-of-who-downed-the-aircraft/" rel="nofollow" target="_blank">http://acenewsservices.com/2014/07/21/malaysian-airlines-flight-mh-17-whistle-blower-told-by-intelligence-source-us-retains-satellite-imagery-of-who-downed-the-aircraft/</a>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="tinfoilthread65692"> <div class="thread_header"> <a id="65692"></a> <span class="filetitle">laser outside pointed into my window</span>  <span class="inbetween"> by </span> <span class="postername">Edwin Tootfuck</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 04 May 2014 00:18:55 EST ID:nDic/2IB</span></span>  <span class="reflink"> <a href="/tinfoil/res/65692.php#i65692">No.65692</a> </span>    			 <!--  - Awesome Thread? <a href="/tinfoil/taimaba.pl?board=tinfoil&amp;task=vote&amp;thread=65692&amp;vote=0">No!</a> | <a href="/tinfoil/taimaba.pl?board=tinfoil&amp;task=vote&amp;thread=65692&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31323233303736323131')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('65692')" title="Report Thread 65692"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/tinfoil/res/65692.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="65692" data-thread="65692"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #90D030; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('tinfoilthread65692');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1399177135758.gif"> 1399177135758.gif </a> -(<em>1469627 B, 440x220</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgtinfoil31323233303736323131" target="_blank" href="/tinfoil/src/1399177135758.gif"> <img src="/tinfoil/thumb/1399177135758s.jpg" alt="1469627" class="thumb" /> </a>   			 <blockquote class="opcomment tinfoil31323233303736323131">  fucking illuminati snipers outside my window every goddamn night groom lake type motherfuckers no lie, human bred with extraterrestrial DNA, professionally trained<br>watching me blow fat hash hits out my window then they set up camp in a tree outside (i live in the woods)<br>area 51 fema black ops dickheads<br><blockquote class = "unkfunc">&gt;it&#39;s 11:37 PM in east bumfuck<br>&gt;no witnesses<br>&gt;i&#39;m going outside to confront the bastards<br></blockquote>wish me luck /tinfoil/   </blockquote>   				 				  <span class="omittedposts">  15 posts and 2 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/65692.php#67532" onclick="highlight(67532);">&gt;&gt;</a></td> <td class="reply" id="reply67532"> <a id="67532"></a> <div class="replyheader"> 									 <span class="commentpostername">Ian Sullytotch</span>  - <span class="idhighlight">Wed, 02 Jul 2014 19:33:19 EST ID:e5xU45IW</span> <span class="reflink">  <a href="/tinfoil/res/65692.php#i67532">No.67532</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31313131353731393633')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67532', '65692')" title="Report Post 67532"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67532" data-thread="65692"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #9D26FD; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31313131353731393633">  <a href = "/tinfoil/res/65692.php#67529" onclick = "highlight(67529)">&gt;&gt;67529</a><br><a href = "/tinfoil/res/65692.php#67531" onclick = "highlight(67531)">&gt;&gt;67531</a><br><br>Actually I called my Uncle is in the CIA and he confined everything about Polly&#39;s UFO war story is true.<br>I suggest you guys back off unless you also have an uncle in the CIA that can deny this.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/65692.php#67533" onclick="highlight(67533);">&gt;&gt;</a></td> <td class="reply" id="reply67533"> <a id="67533"></a> <div class="replyheader"> 									 <span class="commentpostername">Frederick Deggledutch</span>  - <span class="idhighlight">Wed, 02 Jul 2014 20:17:00 EST ID:jNi0oG+r</span> <span class="reflink">  <a href="/tinfoil/res/65692.php#i67533">No.67533</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31323639353835323936')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67533', '65692')" title="Report Post 67533"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67533" data-thread="65692"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #53EC8B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31323639353835323936">  <a href = "/tinfoil/res/65692.php#67532" onclick = "highlight(67532)">&gt;&gt;67532</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/65692.php#67535" onclick="highlight(67535);">&gt;&gt;</a></td> <td class="reply" id="reply67535"> <a id="67535"></a> <div class="replyheader"> 									 <span class="commentpostername">Soviet Psychonaut</span>  - <span class="idhighlight">Wed, 02 Jul 2014 21:22:54 EST ID:19uedkAm</span> <span class="reflink">  <a href="/tinfoil/res/65692.php#i67535">No.67535</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31303935363331363333')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67535', '65692')" title="Report Post 67535"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67535" data-thread="65692"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #E1A116; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31303935363331363333">  <a href = "/tinfoil/res/65692.php#67532" onclick = "highlight(67532)">&gt;&gt;67532</a><br>3/10   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/65692.php#67848" onclick="highlight(67848);">&gt;&gt;</a></td> <td class="reply" id="reply67848"> <a id="67848"></a> <div class="replyheader"> 									 <span class="commentpostername">David Gickledale</span>  - <span class="idhighlight">Sat, 19 Jul 2014 23:09:36 EST ID:wPE3m84Y</span> <span class="reflink">  <a href="/tinfoil/res/65692.php#i67848">No.67848</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31363736393637373733')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67848', '65692')" title="Report Post 67848"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67848" data-thread="65692"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #956840; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31363736393637373733">  <a href = "/tinfoil/res/65692.php#67532" onclick = "highlight(67532)">&gt;&gt;67532</a><br>i also have an uncle in the CIA and he says that&#39;s bullshit<br><br>PS he also says <span class="spoiler" onmouseover=""><span> your uncle is a giant faggot </span></span>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/65692.php#67866" onclick="highlight(67866);">&gt;&gt;</a></td> <td class="reply" id="reply67866"> <a id="67866"></a> <div class="replyheader"> 									 <span class="commentpostername">Fanny Greenshaw</span>  - <span class="idhighlight">Mon, 21 Jul 2014 11:34:04 EST ID:JC5CQHof</span> <span class="reflink">  <a href="/tinfoil/res/65692.php#i67866">No.67866</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil32393139333239383530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67866', '65692')" title="Report Post 67866"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67866" data-thread="65692"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #1CDD03; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil32393139333239383530">  <a href = "/tinfoil/res/65692.php#67531" onclick = "highlight(67531)">&gt;&gt;67531</a><br>NO THAT PLANE IS JUST A COVER MY UNCLE IN THE CIA TOLD ME SO   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="tinfoilthread67684"> <div class="thread_header"> <a id="67684"></a> <span class="filetitle">A FB friend of mine lost his mind</span>  <span class="inbetween"> by </span> <span class="postername">Martha Goodway</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 11 Jul 2014 01:01:08 EST ID:nlAhhwyi</span></span>  <span class="reflink"> <a href="/tinfoil/res/67684.php#i67684">No.67684</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31363534353038363839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('67684')" title="Report Thread 67684"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/tinfoil/res/67684.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67684" data-thread="67684"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #56FB49; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('tinfoilthread67684');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1405054868765.png"> 1405054868765.png </a> -(<em>114348 B, 1366x768</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgtinfoil31363534353038363839" target="_blank" href="/tinfoil/src/1405054868765.png"> <img src="/tinfoil/thumb/1405054868765s.jpg" alt="114348" class="thumb" /> </a>   			 <blockquote class="opcomment tinfoil31363534353038363839">  He thinks the Gov tried to assassinate him and that his idea for 9/11 was stolen.  Crazy shit... feel free to post on his public rantings.   </blockquote>   				 				  <span class="omittedposts">  7 posts and 1 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67684.php#67826" onclick="highlight(67826);">&gt;&gt;</a></td> <td class="reply" id="reply67826"> <a id="67826"></a> <div class="replyheader"> 									 <span class="commentpostername">Charlotte Grandfoot</span>  - <span class="idhighlight">Sat, 19 Jul 2014 10:43:52 EST ID:Cm0kMBQJ</span> <span class="reflink">  <a href="/tinfoil/res/67684.php#i67826">No.67826</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31323037373933353839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67826', '67684')" title="Report Post 67826"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67826" data-thread="67684"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #8CC301; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31323037373933353839">  <a href = "/tinfoil/res/67684.php" onclick = "highlight(67684)">&gt;&gt;67684</a><br>Execute order 66 wtf? Why did you post this man&#39;s life?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67684.php#67828" onclick="highlight(67828);">&gt;&gt;</a></td> <td class="reply" id="reply67828"> <a id="67828"></a> <div class="replyheader"> 									 <span class="commentpostername">George Moblinghotch</span>  - <span class="idhighlight">Sat, 19 Jul 2014 11:23:44 EST ID:fCez+hLT</span> <span class="reflink">  <a href="/tinfoil/res/67684.php#i67828">No.67828</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31363036393136333634')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67828', '67684')" title="Report Post 67828"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67828" data-thread="67684"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5A4AF6; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31363036393136333634">  he might be a friend of yours but youre no friend of his OP. i know its basically public by virtue of being on facebook but its considered polite to black out his and others identity when posting on a *.chan. even with one (420) with pretensions to civilized behavior. <br><br>not trying to insult you but be a little less impatient in mspaint next time, and never post something like this on the chan of fours.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67684.php#67832" onclick="highlight(67832);">&gt;&gt;</a></td> <td class="reply" id="reply67832"> <a id="67832"></a> <div class="replyheader"> 									 <span class="commentpostername">William Geppersed</span>  - <span class="idhighlight">Sat, 19 Jul 2014 11:54:11 EST ID:1hz3kYwL</span> <span class="reflink">  <a href="/tinfoil/res/67684.php#i67832">No.67832</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31313831383235333734')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67832', '67684')" title="Report Post 67832"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67832" data-thread="67684"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B9EEEB; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31313831383235333734">  <a href = "/tinfoil/res/67684.php#67828" onclick = "highlight(67828)">&gt;&gt;67828</a><br>&quot;FB friend&quot; =/= RL friend<br><br>it just means someone on your friend list. Confusing, I know, but that&#39;s the crazy modern world we live in. OP obviously has something against the guy.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67684.php#67847" onclick="highlight(67847);">&gt;&gt;</a></td> <td class="reply" id="reply67847"> <a id="67847"></a> <div class="replyheader"> 									 <span class="commentpostername">Albert Fillerridge</span>  - <span class="idhighlight">Sat, 19 Jul 2014 23:03:22 EST ID:gb+aiunM</span> <span class="reflink">  <a href="/tinfoil/res/67684.php#i67847">No.67847</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31363236373438323832')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67847', '67684')" title="Report Post 67847"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67847" data-thread="67684"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #0FA302; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31363236373438323832">  Anyone else notice the fedora?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67684.php#67865" onclick="highlight(67865);">&gt;&gt;</a></td> <td class="reply" id="reply67865"> <a id="67865"></a> <div class="replyheader"> 									 <span class="commentpostername">Augustus Pengerwen</span>  - <span class="idhighlight">Mon, 21 Jul 2014 10:43:12 EST ID:Lir5Rtlz</span> <span class="reflink">  <a href="/tinfoil/res/67684.php#i67865">No.67865</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31333638383730383835')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67865', '67684')" title="Report Post 67865"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67865" data-thread="67684"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #12F49B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31333638383730383835">  <a href = "/tinfoil/res/67684.php#67847" onclick = "highlight(67847)">&gt;&gt;67847</a><br>yes<br><br><a href = "/tinfoil/res/67684.php#67690" onclick = "highlight(67690)">&gt;&gt;67690</a><br><a href = "/tinfoil/res/67684.php#67697" onclick = "highlight(67697)">&gt;&gt;67697</a>   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="tinfoilthread67135"> <div class="thread_header"> <a id="67135"></a> <span class="filetitle">Brainwave Signals</span>  <span class="inbetween"> by </span> <span class="postername">Cedric Honeyforth</span>  <span class="inbetween"> - <span class="idhighlight">Thu, 19 Jun 2014 10:36:09 EST ID:DmYo8TBZ</span></span>  <span class="reflink"> <a href="/tinfoil/res/67135.php#i67135">No.67135</a> </span>    			 <!--  - Awesome Thread? <a href="/tinfoil/taimaba.pl?board=tinfoil&amp;task=vote&amp;thread=67135&amp;vote=0">No!</a> | <a href="/tinfoil/taimaba.pl?board=tinfoil&amp;task=vote&amp;thread=67135&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil32393034303833303533')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('67135')" title="Report Thread 67135"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/tinfoil/res/67135.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67135" data-thread="67135"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #768B0A; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('tinfoilthread67135');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1403188569848.png"> 1403188569848.png </a> -(<em>44053 B, 540x594</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgtinfoil32393034303833303533" target="_blank" href="/tinfoil/src/1403188569848.png"> <img src="/tinfoil/thumb/1403188569848s.jpg" alt="44053" class="thumb" /> </a>   			 <blockquote class="opcomment tinfoil32393034303833303533">  Please help me convince my mom that I&#39;m not insane.<br><br>Give me proof the we have the capability to target certain individuals with signals to make them hallucinate or feel certain ways.<br><br>Here is the technology that they are showing us.<br><br>It can affect your motor movements. what AREN&#39;T they showing us?<br><br><a href="https://www.youtube.com/watch?v=mwDFR5FFBa0" rel="nofollow" target="_blank">https://www.youtube.com/watch?v=mwDFR5FFBa0</a>   </blockquote>   				 				  <span class="omittedposts">  56 posts and 7 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67135.php#67728" onclick="highlight(67728);">&gt;&gt;</a></td> <td class="reply" id="reply67728"> <a id="67728"></a> <div class="replyheader"> 									 <span class="commentpostername">Charlotte Dinningwill</span>  - <span class="idhighlight">Tue, 15 Jul 2014 12:22:56 EST ID:Cm0kMBQJ</span> <span class="reflink">  <a href="/tinfoil/res/67135.php#i67728">No.67728</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31323037373933353839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67728', '67135')" title="Report Post 67728"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67728" data-thread="67135"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #02400B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31323037373933353839">  <a href = "/tinfoil/res/67135.php#67700" onclick = "highlight(67700)">&gt;&gt;67700</a><br>Or they are ensuring that you think it&#39;s that way because there needs to be a cover for what they do.<br><br>Guile suits   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67135.php#67729" onclick="highlight(67729);">&gt;&gt;</a></td> <td class="reply" id="reply67729"> <a id="67729"></a> <div class="replyheader"> 									 <span class="commentpostername">Doris Gengerman</span>  - <span class="idhighlight">Tue, 15 Jul 2014 14:19:48 EST ID:freiki8V</span> <span class="reflink">  <a href="/tinfoil/res/67135.php#i67729">No.67729</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31343833383339323232')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67729', '67135')" title="Report Post 67729"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67729" data-thread="67135"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C8F8ED; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31343833383339323232">  Any real object is also a perception inside of my brain, but it still wouldn&#39;t be fully controllable by me. Any experience I can possibly have is dependent on my brain but still what I end up experiencing is in part dependent on many other things than just me.<br>We aren&#39;t really brains in vats just dreaming of the world, if the brain could manipulate itself it would&#39;ve long ago completely ignored the real world and consequently would have been naturally selected out of existence a long time ago. <br>Experience always has a real part to it, though today we live in highly mutable environments, immersed into the abstract, so much that it&#39;s not too uncommon for people to call them different realities. It&#39;s not all in your mind but all in your environment, really your brain is part of that environment too, there&#39;s always the interesting question of what you then are, which is always problematic but I like to think that you are pretty much an afterthought, something that is created for others when recounting your experience. <br><br>As for OP. here&#39;s some relevant links: <br><a href="https://info.publicintelligence.net/EU-CrowdControl.pdf" rel="nofollow" target="_blank">https://info.publicintelligence.net/EU-CrowdControl.pdf</a> (the EC has already agreed to ban any weapons which directly work on the basis of targeting or otherwise interfering with the operation of the human brain )<br><a href="http://www.newscientist.com/article/dn14250-microwave-ray-gun-controls-crowds-with-noise.html#.U8ViGrFvC6M" rel="nofollow" target="_blank">http://www.newscientist.com/article/dn14250-microwave-ray-gun-controls-crowds-with-noise.html#.U8ViGrFvC6M</a><br><a href="http://itself.files.wordpress.com/2010/06/pain-compliance.pdf" rel="nofollow" target="_blank">http://itself.files.wordpress.com/2010/06/pain-compliance.pdf</a> (  Nevertheless, the<br>trend is now away from chemical and “kinetic” weapons that rely on physical trauma and toward post-kinetic weapons that, as researchers put it, “induce behavioral modification” more discreetly. )<br><a href="http://www.wired.com/2010/11/air-force-looks-to-artificially-overwhelm-enemy-cognitive-capabilities/" rel="nofollow" target="_blank">http://www.wired.com/2010/11/air-force-looks-to-artificially-overwhelm-enemy-cognitive-capabilities/</a>   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67135.php#67802" onclick="highlight(67802);">&gt;&gt;</a></td> <td class="reply" id="reply67802"> <a id="67802"></a> <div class="replyheader"> 									 <span class="commentpostername">Cedric Fadgebanks</span>  - <span class="idhighlight">Fri, 18 Jul 2014 14:06:18 EST ID:Rl6bds41</span> <span class="reflink">  <a href="/tinfoil/res/67135.php#i67802">No.67802</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31313430393032343534')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67802', '67135')" title="Report Post 67802"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67802" data-thread="67135"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #AD0807; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31313430393032343534">  The technology really isn&#39;t that difficult.  The brain operates on frequencies, waves, certain patterns of wavelengths and states of consciousness.  It&#39;s a computer, a binary apparatus.  All you need to do is direct a particular frequency at it for a long enough time and the brain will start to oscillate and accommodate that frequency and begin to operate on it.  I&#39;m not sure on the exact details but it&#39;s not hard at all if you understand how the mind works and have some basic background and experience in electromagnetism.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67135.php#67822" onclick="highlight(67822);">&gt;&gt;</a></td> <td class="reply" id="reply67822"> <a id="67822"></a> <div class="replyheader"> 									 <span class="commentpostername">Hannah Minderfone</span>  - <span class="idhighlight">Sat, 19 Jul 2014 08:14:40 EST ID:freiki8V</span> <span class="reflink">  <a href="/tinfoil/res/67135.php#i67822">No.67822</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31343833383339323232')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67822', '67135')" title="Report Post 67822"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67822" data-thread="67135"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #10276B; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31343833383339323232">  <a href = "/tinfoil/res/67135.php#67802" onclick = "highlight(67802)">&gt;&gt;67802</a><br><br>Care to expand a bit? The brain isn&#39;t really a computer, I know that it oscillates, Rodolfo R. Llinas has written a somewhat annoyingly complex book about this called &quot;I of the Vortex&quot;, and he has also done experiments on non-invasive remote activation of neurons through transcranial magnetic stimulation but I have not heard of the possibilities of weaponizing this.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67135.php#67836" onclick="highlight(67836);">&gt;&gt;</a></td> <td class="reply" id="reply67836"> <a id="67836"></a> <div class="replyheader"> 									 <span class="commentpostername">Charlotte Grandfoot</span>  - <span class="idhighlight">Sat, 19 Jul 2014 16:37:50 EST ID:Cm0kMBQJ</span> <span class="reflink">  <a href="/tinfoil/res/67135.php#i67836">No.67836</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31323037373933353839')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67836', '67135')" title="Report Post 67836"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67836" data-thread="67135"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F7BD5D; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31323037373933353839">  <a href = "/tinfoil/res/67135.php#67822" onclick = "highlight(67822)">&gt;&gt;67822</a><br>No rules on how to take down a target.   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="tinfoilthread67612"> <div class="thread_header"> <a id="67612"></a> <span class="filetitle">Jewish conspiracies</span>  <span class="inbetween"> by </span> <span class="postername">SpaceMan NeedleDick</span>  <span class="inbetween"> - <span class="idhighlight">Sun, 06 Jul 2014 18:50:11 EST ID:bf1r7DFd</span></span>  <span class="reflink"> <a href="/tinfoil/res/67612.php#i67612">No.67612</a> </span>    			 <!--  - Awesome Thread? <a href="/tinfoil/taimaba.pl?board=tinfoil&amp;task=vote&amp;thread=67612&amp;vote=0">No!</a> | <a href="/tinfoil/taimaba.pl?board=tinfoil&amp;task=vote&amp;thread=67612&amp;vote=1">Yes!</a>  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil343130343237323333')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('67612')" title="Report Thread 67612"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/tinfoil/res/67612.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67612" data-thread="67612"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #C62312; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('tinfoilthread67612');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1404687011698.jpg"> 1404687011698.jpg </a> -(<em>4078 B, 259x194</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgtinfoil343130343237323333" target="_blank" href="/tinfoil/src/1404687011698.jpg"> <img src="/tinfoil/thumb/1404687011698s.jpg" alt="4078" class="thumb" /> </a>   			 <blockquote class="opcomment tinfoil343130343237323333">  I&#39;m beginning to see many ppl on the conspiracy board talking about conspiracies towards the jewish culture. The eason I&#39;m writing this post is because I would like to know why. I&#39;m not religious but am wondering what the main reasons of these conspiracies are   </blockquote>   				 				  <span class="omittedposts">  18 posts and 11 images omitted. Click Reply to view.   </span>       <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67612.php#67748" onclick="highlight(67748);">&gt;&gt;</a></td> <td class="reply" id="reply67748"> <a id="67748"></a> <div class="replyheader"> 									 <span class="commentpostername">Oliver Battingham</span>  - <span class="idhighlight">Wed, 16 Jul 2014 19:47:46 EST ID:z8bE6Wby</span> <span class="reflink">  <a href="/tinfoil/res/67612.php#i67748">No.67748</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil33343935353332303537')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67748', '67612')" title="Report Post 67748"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67748" data-thread="67612"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #FF06CD; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil33343935353332303537">  <a href = "/tinfoil/res/67612.php#67663" onclick = "highlight(67663)">&gt;&gt;67663</a><br><br>What the hell does Israel do for the US other than take our money and try to pull us into their wars?   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67612.php#67749" onclick="highlight(67749);">&gt;&gt;</a></td> <td class="reply" id="reply67749"> <a id="67749"></a> <div class="replyheader"> 									 <span class="commentpostername">titties n&#39; butts</span>  - <span class="idhighlight">Wed, 16 Jul 2014 21:40:53 EST ID:8cPgU+xZ</span> <span class="reflink">  <a href="/tinfoil/res/67612.php#i67749">No.67749</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31313937333635343531')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67749', '67612')" title="Report Post 67749"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67749" data-thread="67612"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #5DBB4A; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1405561253410.png"> 1405561253410.png </a> -(<em>2089692 B, 1455x1173</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/tinfoil/src/1405561253410.png"> <img src="/tinfoil/thumb/1405561253410s.jpg" alt="2089692" class="thumb" /> </a>    <blockquote  class="tinfoil31313937333635343531">  <a href = "/tinfoil/res/67612.php#67748" onclick = "highlight(67748)">&gt;&gt;67748</a><br>They (Elite Zionists) hate free humanity and literally want to domesticate all peoples.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67612.php#67768" onclick="highlight(67768);">&gt;&gt;</a></td> <td class="reply" id="reply67768"> <a id="67768"></a> <div class="replyheader"> 									 <span class="commentpostername">Beatrice Dugglemut</span>  - <span class="idhighlight">Thu, 17 Jul 2014 20:13:08 EST ID:slBgjpaD</span> <span class="reflink">  <a href="/tinfoil/res/67612.php#i67768">No.67768</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31313238313038303537')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67768', '67612')" title="Report Post 67768"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67768" data-thread="67612"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #203A78; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil31313238313038303537">  well you always see them with tons of money.  so you could say they have mastered the art of currency..  seems like they are a tight knit community too.<br><br>but seriously, the stereotype of jews and money doesn&#39;t come out of no where.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67612.php#67795" onclick="highlight(67795);">&gt;&gt;</a></td> <td class="reply" id="reply67795"> <a id="67795"></a> <div class="replyheader"> 									 <span class="commentpostername">Priscilla Beggleforth</span>  - <span class="idhighlight">Fri, 18 Jul 2014 11:00:13 EST ID:JC5CQHof</span> <span class="reflink">  <a href="/tinfoil/res/67612.php#i67795">No.67795</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil32393139333239383530')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67795', '67612')" title="Report Post 67795"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67795" data-thread="67612"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #B5D695; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <blockquote  class="tinfoil32393139333239383530">  <a href = "/tinfoil/res/67612.php#67748" onclick = "highlight(67748)">&gt;&gt;67748</a><br>uhhhh they buy US military equipment to keep the arms industry and all of it&#39;s sibling industries going? saying Israel does nothing for the US is just ignorant, even if they cause more harm than benefit.   </blockquote>    				 </td> </tr> </tbody> </table>     <table><tbody><tr><td class="doubledash"><a href="/tinfoil/res/67612.php#67831" onclick="highlight(67831);">&gt;&gt;</a></td> <td class="reply" id="reply67831"> <a id="67831"></a> <div class="replyheader"> 									 <span class="commentpostername">George Moblinghotch</span>  - <span class="idhighlight">Sat, 19 Jul 2014 11:51:28 EST ID:fCez+hLT</span> <span class="reflink">  <a href="/tinfoil/res/67612.php#i67831">No.67831</a>   </span>  <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31363036393136333634')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="openReport('67831', '67612')" title="Report Post 67831"> <span class="ui-icon ui-icon-alert"></span>Report </a> <a class="qrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67831" data-thread="67612"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #F914FF; font-size:16px; margin-left: 5px;"class="glyphicon  glyphicon-birthday_cake"></i>--> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1405785088848.jpg"> 1405785088848.jpg </a> -(<em>10916 B, 226x400</em>) <span class="thumbnailmsg">Thumbnail displayed, click image for full size.</span> </span>  <a onclick="return imageExpansion(this)" target="_blank" href="/tinfoil/src/1405785088848.jpg"> <img src="/tinfoil/thumb/1405785088848s.jpg" alt="10916" class="thumb" /> </a>    <blockquote  class="tinfoil31363036393136333634">  my general feel is that the jews have been a close knit and rather exclusive diaspora. when you have a bunch of fuckers in your village who only marry each other dress their own way and have closer contacts with jews on the other side of the planet than the guy next door (often based on blood) you are better conspiracy fodder than the cia. also jews being tradesmen and bankers because of prohibitions on them owning land and prohibitions on anyone else getting involved in usury. srsly, the jews were <em>asking for it!</em> if people (with the poor state of knowledge they had in older times) <em>hadnt</em> identified jews as a conspiracy id have deplored their ability to be rational.<br>just because the jews werent conspiring dosent matter. it was a perfect storm. if youve spent all your life farming beetroots the most obvious (and rational) assumption is that any conspiracy is run by the jews.<br>history pretty much dealt the jews the hand of troll-bait. just read some history and imagine yourself in the shoes of someone who hasnt moved 1km from where he was born. if you dont think those long nosed buggers are involved in underhanded enterprises you are doing suspicion wrong. we have a birds eye view now in the information age but back up just 50-100yrs and rational conclusions are different. this also lead to the jews becoming paranoid and even more insular as well as starting conspiracies they otherwise wouldent. its actually rather funny if you can ignore all the pain and suffering its brought all the way to 2014.<br>tl;dr: the jews ended up as the obvious target for any conspiracy theory. this affected jews and non-jews alike in a fashion that reinforced that trend. european culture (with help from european created america) has spread this around the world. the irony being that the greatest antisemites of our age (the arabs) were the guys who protected jews from the west until the west started fucking around and by various actual and cultural means infecting them with a tinfoil relationship to jews which has now started declining at its origin.<br><br>the morale of the story is: dont be born jewish. you get shit for how you run the world but you dont run the world.<br>#godimgladimgoy!   </blockquote>    				 </td> </tr> </tbody> </table>   <br style="clear: left;" /> </div> <hr class="threadend" />    <div id="tinfoilthread67792"> <div class="thread_header"> <a id="67792"></a> <span class="filetitle">On the subject of mind control.</span>  <span class="inbetween"> by </span> <span class="postername">Shit Dennerbig</span>  <span class="inbetween"> - <span class="idhighlight">Fri, 18 Jul 2014 10:17:09 EST ID:Lwn+wue7</span></span>  <span class="reflink"> <a href="/tinfoil/res/67792.php#i67792">No.67792</a> </span>    			 <!--  -->   <a class="ignorebtn fg-button ui-state-default fg-button-icon-solo ui-corner-all" onclick="toggleIgnored('tinfoil31363538333334313836')" title="Ignore User"> <span class="ui-icon ui-icon-cancel"></span>Ignore </a>  <a class="rptbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" onclick="openReport('67792')" title="Report Thread 67792"> <span class="ui-icon ui-icon-alert"></span>Report </a>  <a class="fg-button ui-state-default fg-button-icon-left ui-corner-all" href="/tinfoil/res/67792.php"> <span class="ui-icon ui-icon-comment"></span>Reply </a>  <a class="opqrbtn fg-button ui-state-default fg-button-icon-left ui-corner-all" data-num="67792" data-thread="67792"> <span class="ui-icon ui-icon-comment"></span>Quick Reply </a>  <!--<i style="color: #44BA81; font-size:16px; margin-left: 5px;"class="glyphicon glyphicon-birthday_cake"></i>--> <div class="hidethread" style="float: right; font-size: 10px; margin-right: 4px;"><a class="hidelink" href="javascript:toggleHidden('tinfoilthread67792');">Hide Thread</a></div> </div>  <span class="filesize"> <a target="_blank" href="/tinfoil/src/1405693029158.jpg"> 1405693029158.jpg </a> -(<em>80904 B, 600x750</em>) <span class="thumbnailmsg"> Thumbnail displayed, click image for full size. </span> </span>  <a onclick="return imageExpansion(this)" class="imgtinfoil31363538333334313836" target="_blank" href="/tinfoil/src/1405693029158.jpg"> <img src="/tinfoil/thumb/1405693029158s.jpg" alt="80904" class="thumb" /> </a>   			 <blockquote class="opcomment tinfoil31363538333334313836">  The united states has become nothing more than manipulative gangsters.<br><a href="http://thinkprogress.org/justice/2014/07/18/3461537/federal-judge-blasts-atf-for-luring-man-with-no-criminal-record-into-trafficking-cocaine/" rel="nofollow" target="_blank">http://thinkprogress.org/justice/2014/07/18/3461537/federal-judge-blasts-atf-for-luring-man-with-no-criminal-record-into-trafficking-cocaine/</a>   </blockquote>   				 				     <br style="clear: left;" /> </div> <hr class="threadend" />  <div class="harbl" style="width: 728px !important; margin: 0 auto;"> <div class="blarbl" style="font-size:10px;margin-bottom:2px;margin-top:2px;text-align:center;"> <a href="http://www.420chan.org/advertise">Advertise With Us</a> 		
		<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://insomniacgamers.net"><img src="http://cdn.420chan.org/sp/i.png"></a>
		</div>
				<div style="margin: 5px auto 1px; width: 728px;">
			<a target="_blank" href="http://smash-wrestling.com"><img src="http://cdn.420chan.org/sp/smash.gif"></a>
		</div>
	 </div> </div>  </form> <div id="quickreply" style="display: none;"> <p class="qrheader"></p> <form id="qrpostform" action="/tinfoil/taimaba.pl" method="post" enctype="multipart/form-data"> <input type="hidden" name="board" value="tinfoil" /> <input type="hidden" name="task" value="post" /> <input type="hidden" name="parent" value="" />   <table> <tbody>  <tr> <td> <input title="Name" type="text" name="field1" style="width:224px;" value="" />			 </td> </tr>   <tr> <td> <input type="submit" value="Submit Post" class="postsubmit" style="width:96px;" /> </td> </tr> <tr> <td> <textarea title="Comment" name="field4" rows="4" style="width:456px; color: #eee" cols="50"></textarea> </td> </tr>  <tr> <td> <input type="file" name="file" /> <label> <input type="checkbox" name="sage" value="on" /> No Bump </label> </td> </tr>  <!--				<tr> <td> <input title="Password" type="password" name="password" size="8" /> (Password for post and file deletion) </td>				 </tr> --> </tbody> </table> </form> <a href="javascript:void($('#quickreply').css('display','none'))" style="font-size: 14px; margin-left: 4px; font-weight:bold">Close</a> </div>  <div class="pagelist" style="font-family:arial;">   <span style="font-size: +1;">Pages</span>   <a href="/tinfoil/1.php">Next&gt;&gt;</a>  <br />    0    <a href="/tinfoil/1.php">1</a>     <a href="/tinfoil/2.php">2</a>     <a href="/tinfoil/3.php">3</a>     <a href="/tinfoil/4.php">4</a>     <a href="/tinfoil/5.php">5</a>     <a href="/tinfoil/6.php">6</a>     <a href="/tinfoil/7.php">7</a>     <a href="/tinfoil/8.php">8</a>     <a href="/tinfoil/9.php">9</a>     <a href="/tinfoil/10.php">10</a>    </div>  <div id="crabbyshell"></div> </div><div class="overlayFormOff" id="reportFormDiv"> <form name="reportForm" id="reportForm" onsubmit="return doReport()" action="http://420chan.org:8080/narcbot/ajaxReport.jsp"> <center> <table> <tr> <th colspan="2"> <span id="reportFormTitle">Report Post</span> </th> </tr> <tr> <td>Reason</td> <td> <select id="reportPostReason" name="reportPostReason"> <option>Rule Violation</option> <option>Illegal Content</option> </select> </td> </tr> <tr> <td>Note</td> <td> <input type="text" name="reportPostNote" id="reportPostNote" maxlength="50" size="14"/> </td> </tr> <tr> <td colspan="2" align="center"> <button onclick="return doReport()">OK</button> <button onclick="return closeReport()">Cancel</button> </td> </tr> </table> Please be descriptive with report notes,<br/>this helps staff resolve issues quicker. </center> </form> </div> <div class="shaderOff" id="shader" onclick="closeReport()"></div> <!-- 
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
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3852093.php' class='boardlink'>Thread 3852093</a></span>
		<p>Dragonfly.... <a href='/wooo/res/3852093.php' class='boardlink'>&#8629;</a></p></li>
<li><img width='32' height='32' class='boardicon' alt='wooo' src='/static/images/board_icons/wooo_icon_32.png' />
		<span class='byline'>Professional Wrestling Discussion - <a href='/wooo/res/3850524.php' class='boardlink'>Thread 3850524</a></span>
		<p>>>3852085

Stay awesome, Ron.... <a href='/wooo/res/3850524.php' class='boardlink'>&#8629;</a></p></li>
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

