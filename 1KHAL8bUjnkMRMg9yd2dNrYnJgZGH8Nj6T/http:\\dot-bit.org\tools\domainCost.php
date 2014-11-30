http://dot-bit.org/tools/domainCost.php
HTTP/1.1 200 OK
Date: Tue, 22 Jul 2014 09:17:39 GMT
Server: Apache/2.2.16 (Debian)
X-Powered-By: PHP/5.3.3-7+squeeze19
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 1023
Connection: close
Content-Type: text/html

<div style="position: absolute; bottom: 10px; width: 95%; text-align: center; font-size: 80%;">
<span style="padding: 5px; border: 1px solid grey; border-bottom: none;">
Donations are welcome : <b>BTC :</b> 1KHAL8bUjnkMRMg9yd2dNrYnJgZGH8Nj6T / <b>NMC :</b> N1KHAL5C1CRzy58NdJwp1tbLze3XrkFxx9
</span>
</div>
<style type="text/css">
body { margin-top: 0; font-family: sans-serif; font-size: 95%; }
.DI { padding: 0; margin: 0 auto 20px auto; text-align: center; border: 1px solid grey; border-top: none; width: 630px; }
.DI li { display: inline-block; }
.DI a { text-decoration: none; padding: 0 10px; color: #555555; }
.DI a:hover { color: black; background-color: #DDDDDD; }
</style>
<ul class="DI" style="list-style-type: none;">
<li><a href="./"><b>Namecoin tools</b></a> - </li>
<li><a href="domainSearch.php">Domain search</a> - </li>
<li><a href="domainCheck.php">Domain check</a> - </li>
<li><a style="color: black;" href="domainCost.php">Domain cost</a> - </li>
<li><a href="namecoinCalculator.php">Namecoin Calculator</a> - </li>
<li><a href="nextDifficulty.php">Next difficulty</a> - </li>
<li><a href="http://explorer.dot-bit.org">Block explorer</a> - </li>
<li><a href="http://register.dot-bit.org">Register a .bit domain</a></li>
</ul>
<h2>Domain Cost</h2>
<form>
Current block : 188066<br />
Block number : <input type="text" name="block" value="188066" />
<input type="submit" value="Get price" />
<input type="submit" value="Reset" onclick="location='/tools/domainCost.php'; return false;" />
<br />
</form>

<b>Cost of name_firstupdate :</b><br />
<table border="1" cellpadding="5" style="border: 1px solid black; border-collapse: collapse; text-align: right;">
<tr>
	<th>Price</th>
	<th style="width: 50px;">Unit</th>
	<th>Change</th>
</tr>
<tr>
	<td>0.0000</td>
	<th style="text-align: left;">NMC</th>
	<td>-</td>
</tr>
<tr>
	<td>0.0000</td>
	<th style="text-align: left;">BTC</th>
	<td>0.0029 BTC/NMC</td>
</tr>
<tr>
	<td>0.0000</td>
	<th style="text-align: left;">USD</th>
	<td>133.3471 USD/BTC</td>
</tr>
</table>

<br />
<b>Cost of name_new :</b><br />
<table border="1" cellpadding="5" style="border: 1px solid black; border-collapse: collapse; text-align: right;">
<tr>
	<th>Price</th>
	<th style="width: 50px;">Unit</th>
	<th>Change</th>
</tr>
<tr>
	<td>0.0100</td>
	<th style="text-align: left;">NMC</th>
	<td>-</td>
</tr>
<tr>
	<td>0.0000</td>
	<th style="text-align: left;">BTC</th>
	<td>0.0029 BTC/NMC</td>
</tr>
<tr>
	<td>0.0038</td>
	<th style="text-align: left;">USD</th>
	<td>133.3471 USD/BTC</td>
</tr>
</table>


<br />
<b>Raw access - API :</b><br />

NMC price : <a href="./domainCost.php?unit=NMC">http://dot-bit.org/tools/domainCost.php?unit=NMC</a><br />
BTC price : <a href="./domainCost.php?unit=BTC">http://dot-bit.org/tools/domainCost.php?unit=BTC</a><br />
USD price : <a href="./domainCost.php?unit=USD">http://dot-bit.org/tools/domainCost.php?unit=USD</a><br />


