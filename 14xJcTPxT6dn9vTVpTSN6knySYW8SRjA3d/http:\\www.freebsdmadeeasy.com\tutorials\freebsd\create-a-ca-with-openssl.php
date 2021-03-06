http://www.freebsdmadeeasy.com/tutorials/freebsd/create-a-ca-with-openssl.php
HTTP/1.1 200 OK
Date: Thu, 24 Jul 2014 12:24:06 GMT
Server: Apache
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 2984
Connection: close
Content-Type: text/html; charset=UTF-8

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Justin Emgarten" />
<meta name="Description" content="FreeBSD Tutorials" />
<meta name="Keywords" content="FreeBSD, Tutorials" />
<meta name="title" content="FreeBSD Tutorials" />
<meta name="robots" content="index,follow" />
<meta name="copyright" content="Copyright � 2005 Justin Emgarten" />


<title>Creating a CA with OpenSSL</title>
<style type="text/css" media="all">
		@import "/include/styles.css";
</style>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-85718-17";
urchinTracker();
</script>
<meta name="GOOGLEBOT" content="NOARCHIVE" />
<meta name="ROBOTS" content="NOARCHIVE" />
</head>
<body>
<div class="header">
<div class="gaTop">	<!-- SiteSearch Google -->
	<form method="get" action="http://www.google.com/custom" target="_top">
	<table border="0" style="margin-top: 5px; margin-right: 20px;">
	<tr><td nowrap="nowrap" valign="top" align="left" height="32">
	
	</td>
	<td nowrap="nowrap">
	<input type="hidden" name="domains" value="www.freebsdmadeeasy.com"></input>
	<input type="text" name="q" size="31" maxlength="255" value=""></input>
	<input type="submit" name="sa" value="Google Search"></input>
	</td></tr>
	<tr>
	<td>&nbsp;</td>
	<td nowrap="nowrap">
	<table>
	<tr>
	<td>
	<input type="radio" name="sitesearch" value="" checked="checked"></input>
	<font size="-1" color="#FFFFFF">Web</font>
	</td>
	<td>
	<input type="radio" name="sitesearch" value="www.freebsdmadeeasy.com"></input>
	<font size="-1" color="#FFFFFF">www.freebsdmadeeasy.com</font>
	</td>
	</tr>
	</table>
	<input type="hidden" name="client" value="pub-5245752466623509"></input>
	<input type="hidden" name="forid" value="1"></input>
	<input type="hidden" name="channel" value="5175357052"></input>
	<input type="hidden" name="ie" value="ISO-8859-1"></input>
	<input type="hidden" name="oe" value="ISO-8859-1"></input>
	<input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:FFFFFF;LBGC:336699;ALC:0000FF;LC:0000FF;T:000000;GFNT:0000FF;GIMP:0000FF;FORID:1"></input>
	<input type="hidden" name="hl" value="en"></input>
	</td></tr></table>
	</form>
	<!-- SiteSearch Google -->
	</div>
<div class="logo">FreeBSD Made Easy</div>
</div>
<div class="leftSide">
	<div class="leftSideMenu">
		<div class="leftSideMenuHead">Main Menu</div>
		<div class="leftSideMenuLinks">
		<a href="/index.htm" class="leftSideMenuLink">Home</a><br />
		<br />
		<br />
		</div>
	</div>
	<br />


</div>
<div class="main">
	<h1>Creating an SSL Certificate of Authority</h1>
	<p>If you want to create your own SSL certificates for things such as Apache you need a CA.
	You can buy an SSL certificate generated by a trusted CA such as Thwate or Verisign, or you can generate
	one yourself using OpenSSL. Before generating your OpenSSL CA you should edit your openssl.cnf
	file to save yourself time. This file is used everytime you use OpenSSL and it stores the defaults
	for many of the things that you are prompted for everytime.</p>
		<h2>openssl.cnf</h2>
	<p>On FreeBSD you can edit your OpenSSL config file with</p>
	<pre># ee /etc/ssl/openssl.cnf</pre>
	<p>This tutorial will use most of the default FreeBSD openssl.cnf settings.
	You just need to change the following settings in the file</p>
	<pre>dir = /root/sslCA
default_days = 3650</pre>
	<p>/root/sslCA is the directory we will be using in this tutorial. 3650 days is equal to 10 years.
	You can set this to any number of days, the default is 365.</p>
	<p>Filling out your location and company information is often the most tedious task when
	generating SSL certificates so it is best to set as much of it as you can in your
	openssl.cnf file. The places where it can be set end in _default such as</p>
	<pre>countryName_default = US
stateOrProvinceName_default = NE
localityName_default = Wahoo
</pre>

<h2>Tutorial Script</h2>
<p>The rest of the commands in this tutorial can be done quickly using this script to <a href="/tutorials/scripts/createCA.sh">create a CA</a>. They are explained
and given individually below.</p>

<h2>Setting up the directories</h2>
<p>Now that the openssl.cnf file is set up it is time to create the directories where we
will keep our CA and other certificates that we will generate. The best place to put 
these are in the root directory with 700 for the permissions to restrict access.</p>
<pre># cd ~root/
# mkdir sslCA

# chmod 700 sslCA

# cd ~root/sslCA
# mkdir certs private newcerts
</pre>
<p>Create a serial file which will be used to name the new certificates generated
 and an index.txt file.</p>
<pre># echo 1000 > serial
# touch index.txt
</pre>	

<h2>Creating the CA</h2>
<p>Use the following command to generate the Certificate of Authority. The command
is shown with slashes to fit it onto the page.</p>
<pre># cd ~root/sslCA
# openssl req -new -x509 -days 3650 -extensions v3_ca \ 
-keyout private/cakey.pem -out cacert.pem \
-config /etc/ssl/openssl.cnf</pre>
<p>The output will look similar to this. Fill in your own information as needed.
Make SURE you choose a good password for your CA, and that you remember it for as
many years as you generating the CA for. Without the password you will not be able to 
use it to generate any new certificates. For fields that show the correct default
value you can just hit enter.</p>
<pre>Generating a 1024 bit RSA private key
...................++++++
.....................++++++
writing new private key to 'private/cakey.pem'
Enter PEM pass phrase:
Verifying - Enter PEM pass phrase:
-----
You are about to be asked to enter information that
will be incorporated
into your certificate request.
What you are about to enter is what is called a
Distinguished Name or a DN.
There are quite a few fields but you can leave some blank
For some fields there will be a default value,
If you enter '.', the field will be left blank.
-----
Country Name (2 letter code) [US]:
State or Province Name (full name) [Nebraska]:
Locality Name (eg, city) [Wahoo]: 
Organization Name (eg, company) []: My CA
Organizational Unit Name (eg, section) []:
Common Name (eg, YOUR name) []: freebsdmadeeasy.com
Email Address []: ca@freebsdmadeeasy.com
</pre>
<p>The CA should now be generated. You can double check it by
looking at the two files that were created.</p>
<pre># more ~root/sslCA/cacert.pem
# more ~root/sslCA/private/cakey.pem</pre>
<p>Keep the cakey.pem file and the password safe and you can now use it to 
generate SSL certificates.</p>
<p>You are now ready to generate your own <a href="/tutorials/web-server/apache-ssl-certs.php">SSL certificates for Apache</a></p>
<br />
	</div>
<div class="rightSide"></div>
<div class="footer">
<a href="bitcoin:14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d?amount=0.01&label=FreeBSDMadeEasy"><p>14xJcTPxT6dn9vTVpTSN6knySYW8SRjA3d</p></a>
</div>
</body>
</html>

