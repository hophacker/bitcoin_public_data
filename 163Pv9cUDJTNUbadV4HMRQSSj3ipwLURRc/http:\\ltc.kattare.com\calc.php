http://ltc.kattare.com/calc.php
HTTP/1.1 200 OK
Date: Fri, 11 Jul 2014 11:23:32 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.8
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 3046
Connection: close
Content-Type: text/html

<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>burnside's Litecoin Mining Pool (LTC) - LTC Mining Calculator</title>
		<!--This is the main style sheet-->
		<link rel="stylesheet" href="css/mainstyle.css" type="text/css" />
		<script type="text/javascript" src="/js/EnhanceJS/enhance.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			// Run capabilities test
			enhance({
				loadScripts: [
					'/js/excanvas.js',
					'/js/visualize.jQuery.js',
					'/js/ozcoin_graphs.js'
				],
				loadStyles: [
					'/css/visualize.css',
					'/css/visualize-light.css'
				]
			});

						function clearUsername(){
				if(document.getElementById("userForm").value == "username"){
					document.getElementById("userForm").value = "";
				}
			}
			function clearPassword(){
				if(document.getElementById("passForm").value == "password"){
					document.getElementById("passForm").value = "";
				}
			}
			
		</script>
		
                <script type="text/javascript">
                  function round_to(num, dec) {
                    var powah = Math.pow(10, dec);
                    return Math.round(num * powah) / powah;
                  }

                  function elem(element_name) {
                    return document.getElementById(element_name);
                  }

                  function calc(coin, value) {
                    var sec_per_day =  86400;
                    var diff        =  elem(coin + "_diff").value;
                        var gh_per_share = 4.2949673;

                    // Values from form
                    fee        =  elem(coin + "_fee").value / 100.0,
                    gh_per_sec =  elem(coin + "_mhs").value / 1000000.0,
                    coin_usd   =  elem(coin + "_usd").value,
                    coin_btc   =  elem(coin + "_btc").value,
                    usd_kwh    =  elem(coin + "_usd_kwh").value,
                    watts      =  elem(coin + "_watts").value,
                    cost_day     =  (watts / 1000) * 24  * usd_kwh,

                    // Calculated Values
                    coin_per_share  =  (1 / diff) * (value - (value * fee)),
                    shares_per_day =  gh_per_sec * (1 / gh_per_share) * sec_per_day,
                    coin_per_day    =  coin_per_share * shares_per_day,
                    time_hour      =  ((gh_per_share * diff) / gh_per_sec) / 3600,
                    time_day       =  time_hour / 24,
                    usd_profit         =  (coin_per_day * coin_usd) - cost_day;
                    usd_gross         =  (coin_per_day * coin_usd);
                    btc_gross         =  (coin_per_day * coin_btc);

                    // elem(coin + "_pps").innerHTML    =  rount_to(coin_per_share,6);
                    // elem(coin + "_day").innerHTML    =  round_to(time_day, 4);
                    // elem(coin + "_hour").innerHTML     =  round_to(time_hour, 4);

                    elem(coin + "_cost_day").innerHTML =  "$" + round_to(cost_day, 2);
                    elem(coin + "_pps_day").innerHTML  =  round_to(coin_per_day, 4) + " LTC";
                    elem(coin + "_usd_profit").innerHTML   =  "$" + round_to(usd_profit, 2);
                    elem(coin + "_usd_gross").innerHTML   =  "$" + round_to(usd_gross, 2);
                    elem(coin + "_btc_gross").innerHTML   =  round_to(btc_gross, 4) + " BTC";

                    elem(coin + "_cost_day7").innerHTML =  "$" + round_to((cost_day*7), 2);
                    elem(coin + "_pps_day7").innerHTML  =  round_to((coin_per_day*7), 4) + " LTC";
                    elem(coin + "_usd_profit7").innerHTML   =  "$" + round_to((usd_profit*7), 2);
                    elem(coin + "_usd_gross7").innerHTML   =  "$" + round_to((usd_gross*7), 2);
                    elem(coin + "_btc_gross7").innerHTML   =  round_to((btc_gross*7), 4) + " BTC";

                    elem(coin + "_cost_day30").innerHTML =  "$" + round_to((cost_day*30), 2);
                    elem(coin + "_pps_day30").innerHTML  =  round_to((coin_per_day*30), 4) + " LTC";
                    elem(coin + "_usd_profit30").innerHTML   =  "$" + round_to((usd_profit*30), 2);
                    elem(coin + "_usd_gross30").innerHTML   =  "$" + round_to((usd_gross*30), 2);
                    elem(coin + "_btc_gross30").innerHTML   =  round_to((btc_gross*30), 4) + " BTC";

                    elem(coin + "_cost_day365").innerHTML =  "$" + round_to((cost_day*365), 2);
                    elem(coin + "_pps_day365").innerHTML  =  round_to((coin_per_day*365), 4) + " LTC";
                    elem(coin + "_usd_profit365").innerHTML   =  "$" + round_to((usd_profit*365), 2);
                    elem(coin + "_usd_gross365").innerHTML   =  "$" + round_to((usd_gross*365), 2);
                    elem(coin + "_btc_gross365").innerHTML   =  round_to((btc_gross*365), 4) + " BTC";

                  }

                  function pps_rate() {
                    var do_calc = function (coin, value) {
                      setTimeout(function () {
                        calc(coin, value);
                      });
                    };
                    do_calc("ltc", 50);
                  }
                </script>
		<link rel="shortcut icon" href="/images/favicon.png" />
	</head>
	<body>
		<div id="header">
			<div id="logo">
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td valign="top" align="center">
							<div id="menuBar">
						        <ul id="menu" style="float:left;">
					                <li><a href="/"><b>ltc.kattare.com - Litecoin Mining</b></a></li>
					                					                <li><a href="/register.php">Register</a></li>
					                					                <li><a href="/stats.php">Pool Stats</a></li>
						        </ul>
						        <ul id="menu" style="float:right;">
					                <li><a href="/calc.php">Calculator</a></li>
					                <li><a href="/gettingstarted.php">Get Started</a></li>
					                <li><a href="https://bitcointalk.org/index.php?topic=93540.0" target="_blank">Forum</a></li>
					                <li><a href="about.php">About</a></li>
					                						        </ul>
							</div>
							<div style="float:none; clear:both;"></div>
						</td>
					</tr>
                <tr>
                    <td align="center"><font size=1" color="#FFFF99">This site has been closed.  Please withdraw all of your funds and re-point your mining rigs.  <a style="color: #FFFF99;" href="https://bitcointalk.org/index.php?topic=93540.msg6858359#msg6858359">FULL ANNOUNCEMENT</a></font></td>
                </tr>
				</table>
			</div>
		</div>
		<div style="width:100%; background-color:#172322;">
			<table cellspacing="0" border="0" cellpadding="0" width="100%" style="font-size: small; width:100%; background-color:#172322; text-align:center; color: #BBB; left-margin: 5px; padding-top: 5px;">
				<tr>
										<td>LTC/BTC 0.01284</td>
					<td>LTC/USD 7.85766077</td>
				</tr>
			</table>
		</div>
		<div style="width:100%; background-color:#172322;">
			<table cellspacing="0" border="0" cellpadding="0" width="100%" style="font-size: small; width:100%; background-color:#172322; text-align:center; color: #DDD; left-margin: 5px; padding-top: 5px; padding-bottom: 5px;">
			<!-- table cellspacing="0" border="0" cellpadding="0" width="100%" style="font-size: small; width:100%; background-color:#172322; text-align:center; color: #B0D730; left-margin: 5px; padding-top: 5px; padding-bottom: 5px;" -->
								<form action="/login.php" method="post" id="loginForm">
				<tr>
					<td colspan="5">Login:
					<input type="text" name="username" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Username':this.value;" value="username" /> 
					<input type="password" name="password" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'password':this.value;" value="password" />
					<input type="submit" value="LOGIN">
					<a href="/lostpassword.php" style="color: #FFF"><span style="font-size: small">Lost Password</span></a>
					</td>
				</tr>
				</form>
							</table>
		</div>
		<div id="content">

<h3>Calculate your LTC mining profit</h3>
<br/>

<!-- heavily modified from the allchains.info calculator.  -->

<div id="stats_wrap" style="margin: 0px auto;">
	<table class="stats_table" width="1000">
			<tr>
				<th scope="col">Mining</th>
				<th scope="col">kH/s</th>
				<th scope="col">Difficulty</th>
				<th scope="col">Pool Fee %</th>
				<th scope="col">Watts</th>
				<th scope="col">$/KwH</th>
			</tr>

			<tr>
				<td><input type="button" value=" Calculate " onclick="pps_rate()"/></td>
				<td><input type="text" id="ltc_mhs" maxlength="10" size="8" value="50"/></td>
				<td><input type="text" id="ltc_diff" maxlength="20" size="15" value="18940.13000415"/></td>
				<td><input type="text" id="ltc_fee" maxlength="4" size="4" value="0"/></td>
				<td><input type="text" id="ltc_watts" maxlength="5" size="5" value="50"/></td>
				<td><input type="text" id="ltc_usd_kwh" maxlength="4" size="4" value="0.12"/></td>
			</tr>
		</table>

        <br/>

		<table class="stats_table" width=1000>
			<tr class="row_header">
				<th scope="col">BTC-e</th>
				<th scope="col">LTC/BTC</th>
				<th scope="col">LTC/USD</th>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td><input type="text" id="ltc_btc" maxlength="10" size="10" value="0.01284000"/></td>
				<td><input type="text" id="ltc_usd" maxlength="10" size="10" value="7.85766077"/></td>
			</tr>
		</table>

        <br/>

		<table class="stats_table" width=1000>
			<tr class="row_header">
				<th scope="col">Profit</th>
				<th scope="col">BTC</th>
				<th scope="col">LTC</th>
				<th scope="col">USD</th>
				<th scope="col">Power Cost</th>
				<th scope="col">Profit</th>
			</tr>

			<tr>
				<td>Per Day</td>
				<td id="ltc_btc_gross" maxlength="5" size="5">0</td>
				<td id="ltc_pps_day" maxlength="12" size="12">0</td>
				<td id="ltc_usd_gross" maxlength="5" size="5">0</td>
				<td id="ltc_cost_day" maxlength="5" size="5">0</td>
				<td id="ltc_usd_profit" maxlength="5" size="5">0</td>
			</tr>
			<tr>
				<td>Per Week</td>
				<td id="ltc_btc_gross7" maxlength="5" size="5">0</td>
				<td id="ltc_pps_day7" maxlength="12" size="12">0</td>
				<td id="ltc_usd_gross7" maxlength="5" size="5">0</td>
				<td id="ltc_cost_day7" maxlength="5" size="5">0</td>
				<td id="ltc_usd_profit7" maxlength="5" size="5">0</td>
			</tr>
			<tr>
				<td>Per Month</td>
				<td id="ltc_btc_gross30" maxlength="5" size="5">0</td>
				<td id="ltc_pps_day30" maxlength="12" size="12">0</td>
				<td id="ltc_usd_gross30" maxlength="5" size="5">0</td>
				<td id="ltc_cost_day30" maxlength="5" size="5">0</td>
				<td id="ltc_usd_profit30" maxlength="5" size="5">0</td>
			</tr>
			<tr>
				<td>Per Year</td>
				<td id="ltc_btc_gross365" maxlength="5" size="5">0</td>
				<td id="ltc_pps_day365" maxlength="12" size="12">0</td>
				<td id="ltc_usd_gross365" maxlength="5" size="5">0</td>
				<td id="ltc_cost_day365" maxlength="5" size="5">0</td>
				<td id="ltc_usd_profit365" maxlength="5" size="5">0</td>
			</tr>
		</table>
</div>
<br clear="all"><br/><br/>
* These are ESTIMATES and will vary by exchange rates and the luck of the pool.
<br/><br/>

			</div>
			<div class="clear" style="float: right; padding: 2px;">Please read... <a href="/about.php">how PPLNS round scoring works</a></div>
			<div id="footer">
				<b>Donations</b><br/>
				SimpleCoin Devs: 163Pv9cUDJTNUbadV4HMRQSSj3ipwLURRc (BTC)<br/>
				<b>ltc.kattare.com Site Ops</b>: LNLKaBheR1M5HACRu8gmjXxCjkPPVHxGW5 (LTC)
			</div>


	</body>
</html>

