http://bitbin.it/index.php
HTTP/1.1 200 OK
Server: cloudflare-nginx
Date: Tue, 22 Jul 2014 23:26:10 GMT
Content-Type: text/html
Connection: close
Set-Cookie: __cfduid=db66e9c008363c6b66e8857a1e24b32d41406071564183; expires=Mon, 23-Dec-2019 23:50:00 GMT; path=/; domain=.bitbin.it; HttpOnly
X-Powered-By: PHP/5.4.19
CF-RAY: 14e366ac24fb0098-IAD
Content-Encoding: gzip

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BitBin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        textarea#_paste_text{
            font-family: Consolas, "DejaVu Sans Mono", "Lucida Console", Monaco, monospace;
            font-size: 10pt;
        }
    </style>

        <meta name="description" content="BitBin allows you to earn bitcoins simply by posting and sharing your text pastes">
    <meta name="keywords" content="bitbin,bitcoin,pastebin,text,code,source code,upload,submit,satoshi,nakamoto,free,bitcoins,earn,easy,technology,paste,upload,litecoin">

<!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bitbin.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      
      /* Coolvetica Rg font by Typodermic Fonts Inc. 
         http://typodermicfonts.com/              */
      @font-face {
        font-family: "Coolvetica Rg";
        src: url("assets/coolvetica_rg-webfont.woff");
        src: local("☺"),
            url("assets/coolvetica_rg-webfont.woff") format("woff"),
        }
    </style>
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1103649-2', 'bitbin.it');
  ga('send', 'pageview');

</script>

    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="http://bitbin.it/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">    
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php"><img src="assets/img/logo_small.png" style="position: relative;"></img></a>
          <div class="nav-collapse">
            <ul class="nav" style="padding-top: 5px; font-size: 125%;">
                            <li class="active"><a href="index.php">Home</a></li>
              <li ><a href="earnings.php">Earnings</a></li>
              <li ><a href="payments.php">Payments</a></li>
              <li ><a href="latest_pastes.php">Latest Pastes</a></li>
              <li ><a href="faq.php">FAQ</a></li>
            </ul>
              <ul class="nav pull-right" style="padding-top: 5px; font-size: 125%;">
                  <li ><a href="search.php">Search</a></li>
                  <li class="divider-vertical"></li>
                <li><a href="random_paste.php">Random Paste</a></li>
              </ul>
          </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
    <div class="container">
        
        <div class="row">
            <div class="span9">
                <div class="page-header">
                    <div class="container">
                        <div class="span3">
                            <h1>New Paste</h1>
                        </div>
                    </div>
                </div>
                <div class="container">
    <div class="row">
        <div class="span5"><iframe data-aa='14508' src='//ad.a-ads.com/14508?size=468x60' scrolling='no' style='width:468px; height:60px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe></div>
        <div class="span5"><iframe scrolling="no" style="border: 0; width: 234px; height: 60px;" src="http://coinurl.com/get.php?id=80"></iframe></div>
    </div>
</div>                <form action="submit_paste.php" method="post" id="paste_form" enctype="multipart/form-data">
                    <input type="hidden" name="paste_text" id="paste_text"/>
                    <input type="hidden" name="paste_title" id="paste_title"/>
                    <input type="hidden" name="paste_expiration" id="paste_expiration"/>
                    <input type="hidden" name="syntax_highlighting" id="syntax_highlighting"/>
                    <input type="hidden" name="paste_visible" id="paste_visible"/>
                    <input type="hidden" name="encrypted" value="false" id="encrypted"/>
                    <input type="hidden" name="bitcoin_address" id="bitcoin_address"/>
                </form>
                    <textarea id="_paste_text" name="_paste_text" cols=40 rows=15 style="width: 100%;"></textarea>
                    <div id="submit_alert">
                    </div>
                                        <div id="form_tabs" class="form-horizontal">
                        <ul id="paste_tabs" class="nav nav-tabs">
                            <li class="active">
                                <a href="#main" data-toggle="tab">Main</a>
                            </li>
                            <li>
                                <a href="#encrypt" data-toggle="tab">Encryption</a>
                            </li>
                            <li>
                                <a href="#bitcoin" data-toggle="tab">Earn Bitcoins</a>
                            </li>
                        </ul>
                        <div id="tab_content" class="tab-content">
                            <div class="tab-pane fade active in" id="main">
                                <fieldset>
                                <div class="control-group">
                                    <label class="control-label" for="_paste_title">Paste Title</label>
                                    <div class="controls">
                                        <input type="text" id="_paste_title" name="paste_title"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="_paste_expiration">Paste Expiration</label>
                                    <div class="controls">
                                        <select name="_paste_expiration" id="_paste_expiration">
                                            <option value="never" selected="selected">Never</option>
                                            <option value="15min">15 minutes</option>
                                            <option value="1hour">1 hour</option>
                                            <option value="1day">1 day</option>
                                            <option value="1week">1 week</option>
                                            <option value="1month">1 month</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="control-group">
                                        <label class="control-label" for="_paste_visible">Paste Visibility</label>
                                        <div class="controls">
                                            <select name="_paste_visible" id="_paste_visible">
                                                <option value="public" selected="selected">Public</option>
                                                <option value="private">Private</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="_syntax_highlighting">Syntax Highlighting</label>
                                        <div class="controls">
                                            <select name="_syntax_highlighting" id="_syntax_highlighting">
                                                <!-- Long list 'o languages -->
                                                <option value="text" selected="selected">NONE</option>
                                                <option value="bash">Bash</option>
                                                <option value="csharp">C#</option>
                                                <option value="cpp">C++</option>
                                                <option value="css">CSS</option>
                                                <option value="html">HTML</option>
                                                <option value="java">Java</option>
                                                <option value="javascript">Javascript</option>
                                                <option value="lua">Lua</option>
                                                <option value="perl">Perl</option>
                                                <option value="php">PHP</option>
                                                <option value="python">Python</option>
                                                <option value="r">R</option>
                                                <option value="rails">Ruby on Rails</option>
                                                <!-- Long list 'o languages end here -->
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="tab-pane fade" id="encrypt">
                                <fieldset>
                                        <p>You can encrypt your paste to prevent people viewing the content of your paste, unless the correct password is provided. 
                                            The password isn't stored on the server and the encryption and decryption of the paste is processed client-side using Javascript.
                                            <br/><br/><b style="color: red;">Keep the password in a safe place, you can only decrypt your paste with it!</b></p>
                                        <div class="control-group">
                                            <div class="controls">
                                                <label class="checkbox">
                                                    <input type="checkbox" id="show_password" onclick="showPassword()" autocomplete="off" checked="true"/>Show Password
                                                </label>
                                            </div>
                                        </div>
                                        <div class="control-group" id="group_encrypt_password">
                                            <label class="control-label" for="encrypt_password">Password</label>
                                            <div class="controls">
                                                <input type="text" id="encrypt_password" onchange="checkPassword()" onkeydown="checkPassword()" onkeyup="checkPassword()"/>
                                            </div>
                                        </div>
                                        <div class="control-group" id="group_encrypt_password_confirm">
                                            <label class="control-label" for="encrypt_password_confirm">Confirm Password</label>
                                            <div class="controls">
                                                <input type="text" id="encrypt_password_confirm" onchange="checkPassword()" onkeydown="checkPassword()" onkeyup="checkPassword()"/>
                                            </div>
                                        </div>
                                        <div class="alert alert-error" style="display: none;" id="password_alert">
                                            <strong>The passwords don't match.</strong>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="generate_password">Generate Random Password</label>
                                            <div class="controls">
                                                <button class="btn" id="generate_password" onclick="generatePassword()">Generate</label>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="encrypt_button">Encrypt Paste</label>
                                            <div class="controls">
                                                <button class="btn btn-primary" onclick="encryptPaste()" id="encrypt_button" disabled="true">Encrypt</button>
                                            </div>
                                        </div>
                                </fieldset>
                            </div>
                            <div class="tab-pane fade" id="bitcoin">
                                <fieldset>
                                    <p>You can earn bitcoins by providing a Bitcoin address. BitBin's ad revenue is shared based on the amount of hits your paste gets in comparison to all monetized pastes as whole.</p>
                                    <p>This feature is <b>NOT</b> recommended to be used with private pastes, as it allows people to see your private pastes if they know what Bitcoin address you have used!</p>
                                    <div class="control-group">
                                        <label class="control-label" for="_bitcoin_address">Bitcoin Address</label>
                                        <div class="controls">
                                            <input type="text" id="_bitcoin_address"/>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        </div>
                        <div id="captcha_form">
                                                </div>
                        <div class="form-actions">
                            <noscript><b style="color: red;">You need to have Javascript enabled in order to upload pastes.</b><br/></noscript>
                                                                                <button id="submit_button" class="btn btn-primary" onclick="submitPaste()">Submit Paste</button>                        </div>
            </div>
            <div class="span3">
                <div class="page-header">
    <h3>Newest Pastes</h3>
</div>
<table class="table table-condensed">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody><tr style="font-size: 80%;">
                <td><a href="Xefvb9eT">Good Models Pictures!!!</a></td>
                <td>20m 56s</td>
            </tr><tr style="font-size: 80%;">
                <td><a href="s69Vfxwn">MUITOS BÔNUS </a></td>
                <td>47m 28s</td>
            </tr><tr style="font-size: 80%;">
                <td><a href="kVdKkkVL">Mass Surveillance</a></td>
                <td>47m 38s</td>
            </tr><tr style="font-size: 80%;">
                <td><a href="HHp3f5jR">Kate Upton (leak)</a></td>
                <td>56m 26s</td>
            </tr><tr style="font-size: 80%;">
                <td><a href="49XvaYyR">Online Dice Generator PHP</a></td>
                <td>1h 5m 8s</td>
            </tr><tr style="font-size: 80%;">
                <td><a href="CbS716c1">G-Shout PHP</a></td>
                <td>1h 8m 23s</td>
            </tr><tr style="font-size: 80%;">
                <td><a href="9couSCdm">take a look</a></td>
                <td>1h 33m 34s</td>
            </tr><tr style="font-size: 80%;">
                <td><a href="VQ9Hf18F">About 8937 satoshi available to collect...</a></td>
                <td>1h 52m 40s</td>
            </tr><tr style="font-size: 80%;">
                <td><a href="UtW5iUXw">JWS</a></td>
                <td>1h 55m 18s</td>
            </tr><tr style="font-size: 80%;">
                <td><a href="kLP8Iht2">31 faucets 4 satoshis (1st faucet -&gt;...</a></td>
                <td>2h 7m 47s</td>
            </tr></tbody>
        </table><hr><!-- Beginning of Operation Fabulous ad code: -->
<!-- Ad box ID: 917 -->
<div style="text-align: center;">
<div class="adbox">
<center><div><iframe data-aa='15399' src='//ad.a-ads.com/15399?size=125x125' scrolling='no' style='width:125px; height:125px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe></div><div></div></center>
</div>
</div>                            
<br/>
<div style="text-align: center;"> <script type='text/javascript' src='http://ads1.qadabra.com/t?id=25471c75-6734-46c5-9084-3e8697fd98fa&size=300x250'></script>

</div>            </div>
        </div>
        
        <hr/>
      <footer>
        <p>&copy; <a href="mailto:jannepulk@gmail.com">BitBin</a> 2013 | <a href="tos.php">Terms of Service</a> | <a href="privacypolicy.php">Privacy Policy</a> | <a href="assets.php">Credits</a> | 
        Pastes uploaded: <b>100,950</b> | Paste hits: <b>316,974,395</b> | BTC: <b>193MHato6vuRXFBm45FnSnFTXeyxpByaSC</b><br>Page generated in 0.009257 seconds.
    </div> <!-- /container -->
    
    <script src="assets/js/metahook_submit_paste.js"></script>
    <script type="text/javascript" src="http://api.solvemedia.com/papi/challenge.ajax"></script>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/sjcl.js"></script>
    <script src="assets/syntaxhighlighter/scripts/shCore.js"></script>
    <!--[if !(lte IE 8)]><!-->
<script> 
  (function(){
    var e = document.createElement('script'); e.type='text/javascript'; e.async = true;
    e.src = document.location.protocol + '//d1ux67szpr7bp0.cloudfront.net/project-megaphone/widget.min.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s);
  })();
</script>
<!--<![endif]-->
  </body>
</html>
