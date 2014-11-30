http://www.smarty.net/docs/en/caching.custom.tpl
HTTP/1.1 200 OK
Date: Thu, 24 Jul 2014 10:40:14 GMT
Server: Apache/2.2.22 (Ubuntu)
X-Powered-By: PHP/5.3.10-1ubuntu3.13
Vary: Accept-Encoding
Content-Encoding: gzip
Content-Length: 9046
Connection: close
Content-Type: text/html

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Custom Cache Implementation | Smarty</title>
    <meta name="description" content="Custom Cache Implementation">
    <meta name="keywords" content="custom, cache, implementation">
    <style type="text/css" media="screen">
    @import "/css/screen/global.css";
    @import "/css/typography.css";
    </style>
    
    <!--[if lt IE 7]>
    <style type="text/css" media="screen">
    @import "/css/screen/fix_ie.css";
    </style>
    <![endif]-->
    
    <!--[if IE 7]>
    <style type="text/css" media="screen">
    @import "/css/screen/fix_ie7.css";
    </style>
    <![endif]-->
    
    <link rel="stylesheet" type="text/css" media="print" href="/css/typography.css">
    <link rel="stylesheet" type="text/css" media="print" href="/css/print/global.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/js/bbedit.css">
    
    <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAtNLTcaiYcFN-f4XrzpVY_RSkE6bExsEa6fcoWABjZpep9Iy-rxQHKn32rDn2QOaRGdO78OCTegXQvw"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/jquery.bbedit.min.js"></script>

    <link href="/js/prettify/prettify.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/js/prettify/prettify.js"></script>    
    
    <script type="text/JavaScript"> 
     $(document).ready(function(){
       prettyPrint();
              $("#commentFormBodyText").bbedit({
           highlight: true,
           enableSmileybar: false,
           tags: 'b,i,url,code,quote'
       });
       $("#commentPreviewText").hide();
       $("#commentPostedText").hide();
       $("#commentBusyIcon").hide();
       $("#commentForm").submit(function() { return false; });
       $("#commentFormPreviewButton").click(function(){
         $("#commentBusyIcon").show();
         $.post("/comments/preview", { body: $("#commentFormBodyText").val(), author: $("#commentFormAuthorText").val() },
            function(data){
              var options = {};
              if($("#commentPreviewText").is(":visible")) {
                $("#commentPreviewText").hide('blind',options,500,function() {
                  $("#commentPreviewText").html(data);
                  $("#commentPreviewText").show('blind',options,500,function() {
                    $("#commentBusyIcon").hide();
                  });                  
                });
              } else {
                $("#commentPreviewText").html(data);
                $("#commentPreviewText").show('blind',options,500,function() {
                  $("#commentBusyIcon").hide();
                });                  
              }
            });
       }); 
       $("#commentFormPostButton").click(function(){
         $("#commentBusyIcon").show();
         $.post("/comments/post", { body: $("#commentFormBodyText").val(), author: $("#commentFormAuthorText").val(), page_id: $("#commentFormPageID").val(), email: $("#commentFormEmailText").val(), challenge: $("#commentFormChallengeText").val(), obf: $("#commentFormChallengeObf").val()},
            function(data){
              var options = {};
              $("#commentPostedText").html(data);
              if($("#commentPreviewText").is(":visible")) {
                $("#commentPreviewText").hide('blind',options,500,function() {
                  $("#commentPostedText").show('blind',options,500,function() {
                    $("#commentBusyIcon").hide();
                    $("#commentFormPostButton").attr('disabled','true'); 
                    $("#commentFormPreviewButton").attr('disabled','true'); 
                  });
                });
              } else {
                $("#commentPostedText").show('blind',options,500,function() {
                  $("#commentBusyIcon").hide();
                  $("#commentFormPostButton").attr('disabled','true'); 
                  $("#commentFormPreviewButton").attr('disabled','true'); 
                });
              }                  
            });
       });
            });
          function clearDefaultandCSS(el) {
     	if (el.defaultValue==el.value) el.value = ""
     	// If Dynamic Style is supported, clear the style
     	if (el.style) el.style.cssText = ""
     }
         </script>
    
    <script type="text/javascript" src="/js/smarty.js"></script>
  	<script type="text/javascript" src="http://partner.googleadservices.com/gampad/google_service.js"> 
  	</script> 
  	<script type="text/javascript"> 
  	  GS_googleAddAdSenseService("ca-pub-8878956630941543");
  	  GS_googleEnableAllServices();
  	</script> 
  	<script type="text/javascript"> 
  	  GA_googleAddSlot("ca-pub-8878956630941543", "smarty_footer");
  	  GA_googleAddSlot("ca-pub-8878956630941543", "smarty_left_box");
  	  GA_googleAddSlot("ca-pub-8878956630941543", "smarty_right_skyscraper");
  	  GA_googleAddSlot("ca-pub-8878956630941543", "smarty_top_banner");
  	</script> 
  	<script type="text/javascript"> 
  	  GA_googleFetchAds();
  	</script>
  </head>
  <body>
  <a class="skiplink" accesskey="S" href="#mainContent">Skip over navigation</a>
  <div id="wrapper">
      <div id="header">
        <div id="header_logo">
          <div id="logo"><a href="/"><img src="/images/logo_print.gif" width="249" height="74" alt="Smarty Template Engine"></a></div>
        </div>
        <div id="header_ad" style="float: right;">
      		<script type="text/javascript"> 
      		  GA_googleFillSlot("smarty_footer");
      		</script>
      	</div>
        <div class="clear"></div>
      </div>
      <div id="nav">
        <ul class="nav navHorz">
		  		  		  		  		  		              		<li><a href="/" accesskey="1">Home</a></li>
					  		              		<li><a href="/download" >Download</a></li>
					  		              		<li><a href="/documentation" accesskey="6">Documentation</a></li>
					  		              		<li><a href="http://smarty.incutio.com/?page=SmartyFrequentlyAskedQuestions" >FAQ</a></li>
					  		              		<li><a href="/forums/" >Forum</a></li>
					  		              		<li><a href="/mailinglists" >Mailing Lists</a></li>
					          </ul>
        
        <form action="/search" method="get">
          <p>
            <input type="text" name="q" size="30" value="Search..." accesskey="4" class="field" onclick="smarty.removeDefaultValue(this, 'Search...');" onfocus="smarty.removeDefaultValue(this, 'Search...');" onblur="smarty.restoreDefaultValue(this, 'Search...');">
            in
            <select name="show" class="field">
              <optgroup label="Documentation">
                <option value="manual-en">English</option>
                <option value="manual-de">German</option>
                <option value="manual-es">Spanish</option>
                <option value="manual-fr">French</option>
                <option value="manual-it">Italian</option>
                <option value="manual-ja">Japanese</option>
                <option value="manual-pt_BR">Portuguese</option>
                <option value="manual-ru">Russian</option>
              </optgroup>
              <optgroup label="Mailing Lists">
                <option value="smarty-general-list">General</option>
                <option value="smarty-dev-list">Development</option>
              </optgroup>
            </select>
            <input type="image" src="/images/search.png" alt="Submit Search" class="button">
          </p>
        </form>
        <div class="clear"></div>
      </div>
     
      <div class="col colSecondary">
        <div class="box box1">
          <h1 class="boxHead">Get Smarty</h1>
          <ul class="nav navVert"
            ><li><a href="/download">Download</a></li
          ></ul>
        </div>
        
        <div class="box box1">
          <h1 class="boxHead">About Smarty</h1>
          <ul class="nav navVert"
          ><li><a href="/about_smarty">All About Smarty</a></li
            ><li><a href="/why_use">Why use it?</a></li
              ><li><a href="/use_cases">Use Cases and Work Flow</a></li
            ><li><a href="/syntax_comparison">Syntax Comparison</a></li
            ><li><a href="/inheritance">Template Inheritance</a></li
            ><li><a href="/best_practices">Best Practices</a></li
            ><li><a href="/crash_course">Crash Course</a></li
            ><li><a href="/v3_overview">Version 3 Overview</a></li
            ><li><a href="/forums/viewforum.php?f=12">Testimonials</a></li
              ><li><a href="http://smarty.incutio.com/?page=SitesUsingSmarty">Sites Using Smarty</a></li
          ></ul>
        </div>
        
        <div class="box box1">
          <h1 class="boxHead">Resources</h1>
          <ul class="nav navVert"
          ><li><a href="http://smarty-php.googlecode.com/svn/trunk/distribution/SMARTY_2_BC_NOTES.txt">Smarty 2-&gt;3 upgrade notes</a></li
            ><li><a href="http://smarty-php.googlecode.com/svn/trunk/distribution/README">README (from distro)</a></li
          ><li><a href="/quick_install">Quick Install</a></li
	      ><li><a href="/documentation">Documentation</a></li
		  ><li><a href="/forums/">Discussion Forums</a></li
	      ><li><a href="/sampleapp1">Example App</a></li
          ><li><a href="irc://irc.freenode.net/smarty">IRC (chat)</a></li
          ><li><a href="/mailinglists">Mailing Lists</a></li
          ><li><a href="http://smarty.incutio.com/">Community Wiki</a></li
          ><li><a href="http://smarty.incutio.com/?page=SmartyFrequentlyAskedQuestions">FAQ (wiki)</a></li
          ><li><a href="http://www.smarty.net/forums/viewforum.php?f=23" accesskey="5">FAQ (forums)</a></li
          ><li><a href="http://www.jdoqocy.com/click-4355642-10718312?url=http%3A%2F%2Fwww.odesk.com%2Fcontractors%2Fskill%2Fsmarty%2Ffb%2F4.5-5.0-stars.4.0-4.5-stars%2Fsort%2Fadjusted-score%2Bdesc?vt_cmp=smarty">Hire Smarty Developers</a></li
          ></ul>
        </div>
        <div class="box box1">
          <h1 class="boxHead">Links</h1>
          <ul class="nav navVert"
          ><li><a href="http://www.php.net/">www.php.net</a></li
            ><li><a href="http://www.phpinsider.com/">www.phpinsider.com</a></li
            ><li><a href="http://www.ellysdirectory.com/">www.ellysdirectory.com</a></li
              
              
          ></ul>
        </div>
        <div class="box box1" id="bitcoin">
          <h1 class="boxHead">Donate</h1>
          <div align="center" class="boxContent">
            <div>
            <a href="javascript:void(0);" onclick="javascript:window.prompt ('Copy and paste address to your bitcoin software:', '19fEr3YYkGoHrT2zu4e2GBasdrJu6wwAze');"><img src="/images/bitcoin.png" width="25" height="25" alt="Donate Bitcoin" style="vertical-align:middle"> Bitcoin</a>
            </div>
            <div>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="AK2ZWFVSNJEDE">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal Donate" style="vertical-align:middle"> Paypal
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
            </div>
          </div>
        </div>
        <div class="box box1" id="smartyIcons">
          <h1 class="boxHead">Smarty Icon</h1>
          <div align="center" class="boxContent">
            <p style="text-align: left">You may use the Smarty logo according to the <a href="/copyright">trademark notice</a>.</p>
            <p>
              <img src="/images/icons/smarty_icon.gif" width="88" height="31" alt="Smarty Template Engine">
              <img src="/images/icons/smarty-80x15.png" width="80" height="15" alt="Smarty Template Engine">
            </p>
            <p style="text-align: left">
              For sponsorship, advertising, news or other inquiries, contact us at: <script type="text/javascript" language="javascript">
{document.write(String.fromCharCode(60,97,32,104,114,101,102,61,34,109,97,105,108,116,111,58,119,101,98,109,97,115,116,101,114,64,115,109,97,114,116,121,46,110,101,116,34,32,62,119,101,98,109,97,115,116,101,114,64,115,109,97,114,116,121,46,110,101,116,60,47,97,62))}
</script>

            </p>
          </div>
        </div>        
        <div class="box box1" id="sitesUsingSmarty">
          <h1 class="boxHead">Sites Using Smarty</h1>
          <div align="center" class="boxContent">
               <p>Largest classified with thousands of ads at <a href="http://www.shoppok.com">Shoppok</a></p>
			   <p>Buy <a href="http://www.cheapglasses123.com/">cheap eyeglasses</a> from <a href="http://www.cheapglasses123.com/">Cheapglasses123.com</a> and save up to 80%.</p>
			   <p>Buy wedding dresses on SiteSteer.com - <a href="http://www.sitesteer.com/">Best Online Wedding Dress Store</a></p>
      			<p>
      			  Buy <a href="http://www.australiaglasses.com/">prescription glasses</a> from <a href="http://www.australiaglasses.com/">www.australiaglasses.com</a> and save.
				</p>
				<p>
  					<a href="http://www.glassespeople.com/">Cheap Glasses</a> Now On Sale at <a href="http://www.glassespeople.com/">GlassesPeople.com</a>. Starts At $7.95.
      			</p>
      			<p>
      			Where to buy <a href="http://www.weddingdresstrend.com/">discount wedding dresses</a> and cheap smart dresses free shipping - <a href="http://www.weddingdresstrend.com/">Weddingdresstrend.com</a>
      			</p>
      			<p>
                	<script type="text/javascript"> 
      			  GA_googleFillSlot("smarty_left_box");
      			</script>
      			</p>
          </div>
        </div>        

      </div><!-- end colSecondary -->
      
      <div class="col colMain" id="mainContent">
      
<div class="navheader">
<table width="100%" summary="Navigation header">
<tr><th colspan="3" align="center">Custom Cache Implementation</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="caching.cacheable.tpl">Prev</a> </td>
<th width="60%" align="center">Chapter 15. Caching</th>
<td width="20%" align="right"> <a accesskey="n" href="resources.tpl">Next</a>
</td>
</tr>
</table>
<hr>
</div>
<div class="sect1" title="Custom Cache Implementation">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="caching.custom"></a>Custom Cache Implementation</h2></div></div></div>
<p>
  As an alternative to using the default file-based caching mechanism, you can specify a custom cache implementation 
  that will be used to read, write and clear cached files. 
 </p>
<div class="note" title="Note" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Note</h3>
<p>
  In Smarty2 this used to be a callback function called <code class="literal">$cache_handler_func</code>. 
  Smarty3 replaced this callback by the <code class="literal">Smarty_CacheResource</code> module.
 </p>
</div>
<p>
  With a custom cache implementation you're likely trying to achieve at least one of the following goals: 
  replace the slow filesystem by a faster storage engine,
  centralize the cache to be accessible to multiple servers.
 </p>
<p>
  Smarty allows CacheResource implementations to use one of the APIs <code class="literal">Smarty_CacheResource_Custom</code> 
  or <code class="literal">Smarty_CacheResource_KeyValueStore</code>. <code class="literal">Smarty_CacheResource_Custom</code> is
  a simple API directing all read, write, clear calls to your implementation. This API allows you to store wherever
  and however you deem fit. The <code class="literal">Smarty_CacheResource_KeyValueStore</code> API allows you to turn any
  "dumb" KeyValue-Store (like APC, Memcache, …) into a full-featured CacheResource implementation. That is, everything
  around deep cache-groups like "a|b|c" is being handled for you in way that allows clearing the cache-group "a" and
  all nested groups are cleared as well - even though KeyValue-Stores don't allow this kind of hierarchy by nature.
 </p>
<p>
  Custom CacheResources may be put in a file <code class="literal">cacheresource.foobarxyz.php</code> within your 
  <a class="link" href="variable.plugins.dir.tpl" title="$plugins_dir"><code class="varname">$plugins_dir</code></a>, or registered on runtime
  with <a class="link" href="api.register.cacheresource.tpl" title="registerCacheResource()"><code class="varname">registerCacheResource()</code></a>. 
  In either case you need to set <a class="link" href="variable.caching.type.tpl" title="$caching_type"><code class="varname">$caching_type</code></a>
  to invoke your custom CacheResource implementation.
 </p>
<div class="example">
<a name="idp18532816"></a><p class="title"><b>Example 15.15. Smarty_CacheResource_Mysql</b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php

require_once 'libs/Smarty.class.php';
$smarty = new Smarty();
$smarty-&gt;caching_type = 'mysql';

/**
 * MySQL CacheResource
 *
 * CacheResource Implementation based on the Custom API to use
 * MySQL as the storage resource for Smarty's output caching.
 *
 * Table definition:
 * &lt;pre&gt;CREATE TABLE IF NOT EXISTS `output_cache` (
 *   `id` CHAR(40) NOT NULL COMMENT 'sha1 hash',
 *   `name` VARCHAR(250) NOT NULL,
 *   `cache_id` VARCHAR(250) NULL DEFAULT NULL,
 *   `compile_id` VARCHAR(250) NULL DEFAULT NULL,
 *   `modified` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 *   `content` LONGTEXT NOT NULL,
 *   PRIMARY KEY (`id`),
 *   INDEX(`name`),
 *   INDEX(`cache_id`),
 *   INDEX(`compile_id`),
 *   INDEX(`modified`)
 * ) ENGINE = InnoDB;&lt;/pre&gt;
 *
 * @package CacheResource-examples
 * @author Rodney Rehm
 */
class Smarty_CacheResource_Mysql extends Smarty_CacheResource_Custom {
    // PDO instance
    protected $db;
    protected $fetch;
    protected $fetchTimestamp;
    protected $save;
    
    public function __construct() {
        try {
            $this-&gt;db = new PDO("mysql:dbname=test;host=127.0.0.1", "smarty", "smarty");
        } catch (PDOException $e) {
            throw new SmartyException('Mysql Resource failed: ' . $e-&gt;getMessage());
        }
        $this-&gt;fetch = $this-&gt;db-&gt;prepare('SELECT modified, content FROM output_cache WHERE id = :id');
        $this-&gt;fetchTimestamp = $this-&gt;db-&gt;prepare('SELECT modified FROM output_cache WHERE id = :id');
        $this-&gt;save = $this-&gt;db-&gt;prepare('REPLACE INTO output_cache (id, name, cache_id, compile_id, content)
            VALUES  (:id, :name, :cache_id, :compile_id, :content)');
    }

    /**
     * fetch cached content and its modification time from data source
     *
     * @param string $id unique cache content identifier
     * @param string $name template name
     * @param string $cache_id cache id
     * @param string $compile_id compile id
     * @param string $content cached content
     * @param integer $mtime cache modification timestamp (epoch)
     * @return void
     */
    protected function fetch($id, $name, $cache_id, $compile_id, &amp;$content, &amp;$mtime)
    {
        $this-&gt;fetch-&gt;execute(array('id' =&gt; $id));
        $row = $this-&gt;fetch-&gt;fetch();
        $this-&gt;fetch-&gt;closeCursor();        
        if ($row) {
            $content = $row['content'];
            $mtime = strtotime($row['modified']);
        } else {
            $content = null;
            $mtime = null;
        }
    }
    
    /**
     * Fetch cached content's modification timestamp from data source
     *
     * @note implementing this method is optional. Only implement it if modification times can be accessed faster than loading the complete cached content.
     * @param string $id unique cache content identifier
     * @param string $name template name
     * @param string $cache_id cache id
     * @param string $compile_id compile id
     * @return integer|boolean timestamp (epoch) the template was modified, or false if not found
     */
    protected function fetchTimestamp($id, $name, $cache_id, $compile_id)
    {
        $this-&gt;fetchTimestamp-&gt;execute(array('id' =&gt; $id));
        $mtime = strtotime($this-&gt;fetchTimestamp-&gt;fetchColumn());
        $this-&gt;fetchTimestamp-&gt;closeCursor();
        return $mtime;
    }
    
    /**
     * Save content to cache
     *
     * @param string $id unique cache content identifier
     * @param string $name template name
     * @param string $cache_id cache id
     * @param string $compile_id compile id
     * @param integer|null $exp_time seconds till expiration time in seconds or null
     * @param string $content content to cache
     * @return boolean success
     */
    protected function save($id, $name, $cache_id, $compile_id, $exp_time, $content)
    {
        $this-&gt;save-&gt;execute(array(
            'id' =&gt; $id,
            'name' =&gt; $name,
            'cache_id' =&gt; $cache_id,
            'compile_id' =&gt; $compile_id,
            'content' =&gt; $content,
        ));
        return !!$this-&gt;save-&gt;rowCount();
    }
    
    /**
     * Delete content from cache
     *
     * @param string $name template name
     * @param string $cache_id cache id
     * @param string $compile_id compile id
     * @param integer|null $exp_time seconds till expiration or null
     * @return integer number of deleted caches
     */
    protected function delete($name, $cache_id, $compile_id, $exp_time)
    {
        // delete the whole cache
        if ($name === null &amp;&amp; $cache_id === null &amp;&amp; $compile_id === null &amp;&amp; $exp_time === null) {
            // returning the number of deleted caches would require a second query to count them
            $query = $this-&gt;db-&gt;query('TRUNCATE TABLE output_cache');
            return -1;
        }
        // build the filter
        $where = array();
        // equal test name
        if ($name !== null) {
            $where[] = 'name = ' . $this-&gt;db-&gt;quote($name);
        }
        // equal test compile_id
        if ($compile_id !== null) {
            $where[] = 'compile_id = ' . $this-&gt;db-&gt;quote($compile_id);
        }
        // range test expiration time
        if ($exp_time !== null) {
            $where[] = 'modified &lt; DATE_SUB(NOW(), INTERVAL ' . intval($exp_time) . ' SECOND)';
        }
        // equal test cache_id and match sub-groups
        if ($cache_id !== null) {
            $where[] = '(cache_id = '. $this-&gt;db-&gt;quote($cache_id)
                . ' OR cache_id LIKE '. $this-&gt;db-&gt;quote($cache_id .'|%') .')';
        }
        // run delete query
        $query = $this-&gt;db-&gt;query('DELETE FROM output_cache WHERE ' . join(' AND ', $where));
        return $query-&gt;rowCount();
    }
}

   </pre></div>
</div>
<br class="example-break"><div class="example">
<a name="idp18534560"></a><p class="title"><b>Example 15.16. Smarty_CacheResource_Memcache</b></p>
<div class="example-contents"><pre class="programlisting">

&lt;?php

require_once 'libs/Smarty.class.php';
$smarty = new Smarty();
$smarty-&gt;caching_type = 'memcache';

/**
 * Memcache CacheResource
 *
 * CacheResource Implementation based on the KeyValueStore API to use
 * memcache as the storage resource for Smarty's output caching.
 *
 * Note that memcache has a limitation of 256 characters per cache-key.
 * To avoid complications all cache-keys are translated to a sha1 hash.
 *
 * @package CacheResource-examples
 * @author Rodney Rehm
 */
class Smarty_CacheResource_Memcache extends Smarty_CacheResource_KeyValueStore {
    /**
     * memcache instance
     * @var Memcache
     */
    protected $memcache = null;
    
    public function __construct()
    {
        $this-&gt;memcache = new Memcache();
        $this-&gt;memcache-&gt;addServer( '127.0.0.1', 11211 );
    }
    
    /**
     * Read values for a set of keys from cache
     *
     * @param array $keys list of keys to fetch
     * @return array list of values with the given keys used as indexes
     * @return boolean true on success, false on failure
     */
    protected function read(array $keys)
    {
        $_keys = $lookup = array();
        foreach ($keys as $k) {
            $_k = sha1($k);
            $_keys[] = $_k;
            $lookup[$_k] = $k;
        }
        $_res = array();
        $res = $this-&gt;memcache-&gt;get($_keys);
        foreach ($res as $k =&gt; $v) {
            $_res[$lookup[$k]] = $v;
        }
        return $_res;
    }
    
    /**
     * Save values for a set of keys to cache
     *
     * @param array $keys list of values to save
     * @param int $expire expiration time
     * @return boolean true on success, false on failure
     */
    protected function write(array $keys, $expire=null)
    {
        foreach ($keys as $k =&gt; $v) {
            $k = sha1($k);
            $this-&gt;memcache-&gt;set($k, $v, 0, $expire);
        }
        return true;
    }

    /**
     * Remove values from cache
     *
     * @param array $keys list of keys to delete
     * @return boolean true on success, false on failure
     */
    protected function delete(array $keys)
    {
        foreach ($keys as $k) {
            $k = sha1($k);
            $this-&gt;memcache-&gt;delete($k);
        }
        return true;
    }

    /**
     * Remove *all* values from cache
     *
     * @return boolean true on success, false on failure
     */
    protected function purge()
    {
        return $this-&gt;memcache-&gt;flush();
    }
}


   </pre></div>
</div>
<br class="example-break">
</div>
<div class="navfooter">
<hr>
<table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="caching.cacheable.tpl">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="caching.tpl">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="resources.tpl">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Controlling Cacheability of Output </td>
<td width="20%" align="center"><a accesskey="h" href="index.tpl">Home</a></td>
<td width="40%" align="right" valign="top"> Chapter 16. Resources</td>
</tr>
</table>
</div>

		
		  <div class="comments">
      
                  <div id="commentHeader"><strong>Comments</strong></div>
          <div class="commentInfo">
          
                                <div class="commentWrapperEven">
              <div class="commentBody"><emphasis>No comments for this page.</emphasis></div>
            </div>          
                    </div>
          <div id="commentFormWrapper">
            <div id="commentFormHeader"><strong>Post a Comment</strong></div>
            <div id="commentFormElements">
            <form id="commentForm" method="post" action="/comments/post">
              <div id="commentText" style="font-style: italic; color:#f00">All comments are moderated. Support questions are ignored, use the <a href="/forums/">forums</a> instead.</div>
              <div id="commentFormAuthor">Author: <input id="commentFormAuthorText" type="text" name="author" size="40" value="anonymous" style="color: grey" onFocus="clearDefaultandCSS(this)"></div>
              <div id="commentFormEmail">Email: <input id="commentFormEmailText" type="text" name="email" size="30" value="your@email.com" style="color: grey" onFocus="clearDefaultandCSS(this)"> <span style="font-style: italic">(not shown)</span></div>
              
              <div id="commentFormChallenge">What is 11 plus 18? <input id="commentFormChallengeText" type="text" name="challenge" size="30" value="" style="color: grey"> <span style="font-style: italic">(Are you human?)</span></div>
              <input id="commentFormChallengeObf" type="hidden" name="obf" value="fd72608a022ca6b9e4abb6804d1ccc0a">
              <div id="commentFormBody"><textarea id="commentFormBodyText" name="body" rows="8" cols="60"></textarea></div>
              <div id="commentFormSubmitButtons">
                <input id="commentFormPostButton" type="submit" value="Post Comment">
                <input id="commentFormPreviewButton" type="submit" value="Preview">
                <img id="commentBusyIcon" src="/images/busy.gif">
              </div>
              <input id="commentFormPageID" type="hidden" name="page_id" value="docs/en/caching.custom.tpl">
            </form>
            </div>
          </div>
          <div id="commentPreviewText">
          </div>
          <div id="commentPostedText">
          </div>
              
      </div>
      
      </div><!-- end colMain -->
      
      <div class="col colAdditional" align="left">
        <div id="skyscraper">
    		<script type="text/javascript"> 
    		  GA_googleFillSlot("smarty_right_skyscraper");
    		</script>
    		</div>
  		  <div class="box box1" id="smartySponsors">
          <h1 class="boxHead">Sponsors <a href="/sponsors">[info]</a></h1>
          <div class="boxContent">
						  <a href="http://www.webhost.uk.net/">UK Web Hosting</a> <span style="font-size: .7em">@webhost.uk.net</span><br>
						  <a href="http://www.rshosting.com/">Best Web Hosting</a> <span style="font-size: .7em">@rshosting.com</span><br>
						  <a href="http://www.webhostinguk.com/">Web Hosting UK</a> <span style="font-size: .7em">@webhostinguk.com</span><br>
						  <a href="http://www.infrenion.com/">Unlimited Web Hosting</a> <span style="font-size: .7em">@infrenion.com</span><br>
						  <a href="http://www.morphodo.com/de/app-entwicklung.html">App Entwicklung</a> <span style="font-size: .7em">@morphodo.com</span><br>
						  <a href="http://www.dhgate.com/">Buy from China</a> <span style="font-size: .7em">@dhgate.com</span><br>
						  <a href="http://www.fcinternetmarketing.com/">First Click Internet Marketing</a> <span style="font-size: .7em">@fcinternetmarketing.com</span><br>
						
			
          </div>
        </div>
  		  <div class="box box1" id="smartyAds">
  		    <h1 class="boxHead">Using Smarty</h1>
          <div class="boxContent">
			      <a href="http://www.dissertationteam.com/">dissertationteam.com</a><br>
			      <a href="http://jackpot4me.com/super-lig/galatasaray_istanbul.html">galatasaray</a><br>
			      <a href="http://www.dresses1000.com/">Quinceanera Dresses</a><br>
			      <a href="http://www.magicquinceanera.com/">quinceanera gowns</a><br>
			      <a href="http://www.besthochzeit.com/Bridesmaid-Dresses-c7/">Dresses for Bridesmaid</a><br>
			      <a href="http://www.dressfirst.fr/Robes-De-Bal-c18/">robes de bal</a><br>
			      <a href="http://skincareinsight.com/">skin care</a><br>
      			
      			
          </div>
  		    <h1 class="boxHead">I.T Certifications</h1>
          <div class="boxContent">
			      <a href="http://www.pass-guaranteed.com/">I.T Certification Exams</a><br>
			      <a href="http://www.firsttrycertify.com/">Certification Practice Tests</a><br>
          </div>
        </div>
      </div><!-- end colAdditional -->    
      <div class="clear"></div>
    </div><!-- end wrapper -->

  <div id="footer">
    <div id="colTopFooter">
      <a href="/credits" class="rightMar">credits</a>
      <a href="/copyright" accesskey="8" class="rightMar">copyright</a>
      <a href="/accessibility" accesskey="0">accessibility</a>
    </div>
    <p>Smarty Copyright &copy; 2002 &ndash; 2014 New Digital Group, Inc. All rights reserved.</p>
    <p>This page generated in 0.03860 secs with <a href="http://www.tinymvc.com/">TinyMVC</a> and Smarty 3.</p>
  </div>    
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"> 
</script> 
<script type="text/javascript"> 
_uacct = "UA-638513-4";
urchinTracker();
</script>
<script type="text/javascript">
    var GoSquared={};
    GoSquared.acct = "GSN-138769-Y";
    (function(w){
        function gs(){
            w._gstc_lt=+(new Date); var d=document;
            var g = d.createElement("script"); g.type = "text/javascript"; g.async = true; g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
            var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(g, s);
        }
        w.addEventListener?w.addEventListener("load",gs,false):w.attachEvent("onload",gs);
    })(window);
</script>
</body>
</html>

