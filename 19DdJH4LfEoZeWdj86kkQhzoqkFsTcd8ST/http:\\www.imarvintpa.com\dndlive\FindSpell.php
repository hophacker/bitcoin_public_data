http://www.imarvintpa.com/dndlive/FindSpell.php
HTTP/1.1 200 OK
Date: Wed, 23 Jul 2014 13:41:04 GMT
Server: Apache
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0
Pragma: no-cache
Set-Cookie: PHPSESSID=n6i9PTwAIHIrT-PFjSuIQ0; path=/
Vary: Accept-Encoding
Content-Encoding: gzip
Connection: close
Content-Type: text/html

  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel='StyleSheet' href='/dndlive/style.css' type='text/css'>
<link rel='StyleSheet' href='/dndlive/style_portable.css' type='text/css' media='handheld'>
<link rel='StyleSheet' href='/dndlive/print.css' type='text/css' media='print'>
<script TYPE="text/javascript" >
  function getChoice(mySelect) {
	//alert(mySelect.name);
     for (var i = 0; i < mySelect.length; i++) {
        if (mySelect.options[i].selected == true) {
           return mySelect.options[i].value;
        }
     }
  }

  function setChoice(mySelect, myValue, startAt) {
	//alert(mySelect.name);
     for (var i = startAt; i < mySelect.length; i++) {
        if (mySelect.options[i].value == myValue) {
           mySelect.options[i].selected = true;
           return i;
        }
     }
  }


  function setDateFCMon(baseName){
    var myVal = "";
    var myMon, myDay, myYear;
    myMon = document.getElementById(baseName + "Month")
    myDay = document.getElementById(baseName + "Day")
    myYear = document.getElementById(baseName + "Year")
    myVal = getChoice(myMon); //document.all(baseName + "Month").value; 
    //alert(":" + myVal + ":");
    switch(myVal){
      case "FY": case "CY": 
      case "Q1FY": case "Q2FY": case "Q3FY": case "Q4FY":
      case "Q1CY": case "Q2CY": case "Q3CY": case "Q4CY":
        //alert('First Case');        
        myDay.options[0].selected = true;
        if (getChoice(myYear) == ""){
			var today = new Date();
			setChoice(myYear, today.getFullYear(), 0);
		}
		myDay.disabled = true;
		myYear.disabled = false;
	    break;
	  case "":
	    //alert('Second Case');
	    myDay.options[0].selected = true;
	    if (getChoice(myYear) != "")
	      myYear.options[0].selected = true;
	    myDay.disabled = true;
	    myYear.disabled = true;
	    break;
	  default:
	    //alert('Third Case');
        if (getChoice(myYear) == ""){
			var today = new Date();
			setChoice(myYear, today.getFullYear(), 0);
		}
		myDay.disabled = false;
		myYear.disabled = false;
    }
    return true;
  }
  
  /*function placeTwitter() {
  
  var html = "If you have a moment, I have a favor to ask:  Please go to twitter and tweet politely to <a href='https://twitter.com/joshthegod'>@JoshTheGod</a> asking to change his name to something other than my name.  I do not appreciate him using my name.  Thank You. If you want to follow me, I'm <a href='https://twitter.com/IMarvinTPA'>@IMarvinTPA</a>.";
  
	  var H1s = document.getElementsByTagName("H1");
	  if (H1s.length > 0)
	  {
		var newNode = document.createElement("h2");
		newNode.innerHTML = html;
		newNode.className = "printHide";
		var H1 = H1s[0];
		H1.parentNode.insertBefore(newNode, H1.nextSibling);
	  }

	return true;
  }*/
  
  /*var daBody = document.body;
  //window.body.addEvent("load", placeTwitter, false);
	if(daBody.addEventListener) daBody.addEventListener("load",placeTwitter,false);
	else if (daBody.attachEvent) daBody.attachEvent("onload",placeTwitter);*/
  
</script>
<script TYPE="text/javascript" src='/overlib/overlib.js'></script>
<script TYPE="text/javascript" src='/overlib/overlib_hideform.js'></script>
<script TYPE="text/javascript" src='/overlib/overlib_draggable.js'></script>
<script TYPE="text/javascript" src='/overlib/overlib_anchor.js'></script>
<script TYPE="text/javascript" src='/overlib/overlib_popform.js'></script>
<title>Search Spells</title>
</head>
<body>
<H1>Find Spells</H1><Table><TR><TD><a href = 'index.php'>Return to Main Menu.</a><BR></TD></TR></Table><p>This search screen now remembers your previous search.  If you wish to clear the old one out, you'll need to restart your browser.  I'm working on a better solution.</p><p>For the "Has Any" checkbox lists, selecting one item will show only spells with that item, selecting two (or more) will show spells that have either or both (or all).</p><p>Leaving any of these empty/not selected/not entered will cause the search to ignore that spell attribute.</p><form method='POST' action='SearchList.php'><Table border = '1' align='center' class='BKGND'>
<TR id='ROW_Name'><th colspan='1'><label for='Name' title=''>Spell Name Keyword</label></th><td colspan='1'><input type='text' id='Name' name='Name' size = '50' Maxlength = '50' value='' >  wildcard: *<input type='hidden' name='OldName' value=''></td>

</TR>
<TR id='ROW_School'><th colspan='1'><label for='School' title=''>Has Any of these Schools</label></th><td colspan='1'><table border='0'><tr><td>
<input type='checkbox' id='School0' name='School' value='Abjuration' ><label for='School0'> Abjuration</label><BR></td><td>
<input type='checkbox' id='School1' name='School' value='Conjuration' ><label for='School1'> Conjuration</label><BR></td><td>
<input type='checkbox' id='School2' name='School' value='Divination' ><label for='School2'> Divination</label><BR></td><td>
<input type='checkbox' id='School3' name='School' value='Enchantment' ><label for='School3'> Enchantment</label><BR></td></tr><tr><td>
<input type='checkbox' id='School4' name='School' value='Evocation' ><label for='School4'> Evocation</label><BR></td><td>
<input type='checkbox' id='School5' name='School' value='Illusion' ><label for='School5'> Illusion</label><BR></td><td>
<input type='checkbox' id='School6' name='School' value='Necromancy' ><label for='School6'> Necromancy</label><BR></td><td>
<input type='checkbox' id='School7' name='School' value='Transmutation' ><label for='School7'> Transmutation</label><BR></td></tr><tr><td>
<input type='checkbox' id='School8' name='School' value='Universal' ><label for='School8'> Universal</label><BR></td></tr></table><input type='hidden' name='OldSchool' value=''></td>

</TR>
<TR id='ROW_SubSchool'><th colspan='1'><label for='SubSchool' title=''>Has Any of these Sub Schools</label></th><td colspan='1'><table border='0'><tr><td>
<input type='checkbox' id='SubSchool0' name='SubSchool' value='Calling' ><label for='SubSchool0'> Calling</label><BR></td><td>
<input type='checkbox' id='SubSchool1' name='SubSchool' value='Charm' ><label for='SubSchool1'> Charm</label><BR></td><td>
<input type='checkbox' id='SubSchool2' name='SubSchool' value='Compulsion' ><label for='SubSchool2'> Compulsion</label><BR></td><td>
<input type='checkbox' id='SubSchool3' name='SubSchool' value='Creation' ><label for='SubSchool3'> Creation</label><BR></td></tr><tr><td>
<input type='checkbox' id='SubSchool4' name='SubSchool' value='Creation&#32;or&#32;Calling' ><label for='SubSchool4'> Creation or Calling</label><BR></td><td>
<input type='checkbox' id='SubSchool5' name='SubSchool' value='Darkness' ><label for='SubSchool5'> Darkness</label><BR></td><td>
<input type='checkbox' id='SubSchool6' name='SubSchool' value='Figment' ><label for='SubSchool6'> Figment</label><BR></td><td>
<input type='checkbox' id='SubSchool7' name='SubSchool' value='Figment,&#32;Glamer' ><label for='SubSchool7'> Figment, Glamer</label><BR></td></tr><tr><td>
<input type='checkbox' id='SubSchool8' name='SubSchool' value='Glamer' ><label for='SubSchool8'> Glamer</label><BR></td><td>
<input type='checkbox' id='SubSchool9' name='SubSchool' value='Healing' ><label for='SubSchool9'> Healing</label><BR></td><td>
<input type='checkbox' id='SubSchool10' name='SubSchool' value='Pattern' ><label for='SubSchool10'> Pattern</label><BR></td><td>
<input type='checkbox' id='SubSchool11' name='SubSchool' value='Phantasm' ><label for='SubSchool11'> Phantasm</label><BR></td></tr><tr><td>
<input type='checkbox' id='SubSchool12' name='SubSchool' value='Polymorph' ><label for='SubSchool12'> Polymorph</label><BR></td><td>
<input type='checkbox' id='SubSchool13' name='SubSchool' value='Scrying' ><label for='SubSchool13'> Scrying</label><BR></td><td>
<input type='checkbox' id='SubSchool14' name='SubSchool' value='Shadow' ><label for='SubSchool14'> Shadow</label><BR></td><td>
<input type='checkbox' id='SubSchool15' name='SubSchool' value='Summoning' ><label for='SubSchool15'> Summoning</label><BR></td></tr><tr><td>
<input type='checkbox' id='SubSchool16' name='SubSchool' value='Teleportation' ><label for='SubSchool16'> Teleportation</label><BR></td></tr></table><input type='hidden' name='OldSubSchool' value=''></td>

</TR>
<TR id='ROW_Descriptor'><th colspan='1'><label for='Descriptor' title=''>Has Any of these Descriptors</label></th><td colspan='1'><table border='0'><tr><td>
<input type='checkbox' id='Descriptor0' name='Descriptor' value='Acid' ><label for='Descriptor0'> Acid</label><BR></td><td>
<input type='checkbox' id='Descriptor1' name='Descriptor' value='Cold' ><label for='Descriptor1'> Cold</label><BR></td><td>
<input type='checkbox' id='Descriptor2' name='Descriptor' value='Electricity' ><label for='Descriptor2'> Electricity</label><BR></td><td>
<input type='checkbox' id='Descriptor3' name='Descriptor' value='Fire' ><label for='Descriptor3'> Fire</label><BR></td></tr><tr><td>
<input type='checkbox' id='Descriptor4' name='Descriptor' value='Sonic' ><label for='Descriptor4'> Sonic</label><BR></td><td>
<input type='checkbox' id='Descriptor5' name='Descriptor' value='Force' ><label for='Descriptor5'> Force</label><BR></td><td>
<input type='checkbox' id='Descriptor6' name='Descriptor' value='Positive' ><label for='Descriptor6'> Positive</label><BR></td><td>
<input type='checkbox' id='Descriptor7' name='Descriptor' value='Negative' ><label for='Descriptor7'> Negative</label><BR></td></tr><tr><td>
<input type='checkbox' id='Descriptor8' name='Descriptor' value='Death' ><label for='Descriptor8'> Death</label><BR></td><td>
<input type='checkbox' id='Descriptor9' name='Descriptor' value='Ectomancy' ><label for='Descriptor9'> Ectomancy</label><BR></td><td>
<input type='checkbox' id='Descriptor10' name='Descriptor' value='Incarnum' ><label for='Descriptor10'> Incarnum</label><BR></td><td>
<input type='checkbox' id='Descriptor11' name='Descriptor' value='Air' ><label for='Descriptor11'> Air</label><BR></td></tr><tr><td>
<input type='checkbox' id='Descriptor12' name='Descriptor' value='Earth' ><label for='Descriptor12'> Earth</label><BR></td><td>
<input type='checkbox' id='Descriptor13' name='Descriptor' value='Water' ><label for='Descriptor13'> Water</label><BR></td><td>
<input type='checkbox' id='Descriptor14' name='Descriptor' value='Good' ><label for='Descriptor14'> Good</label><BR></td><td>
<input type='checkbox' id='Descriptor15' name='Descriptor' value='Evil' ><label for='Descriptor15'> Evil</label><BR></td></tr><tr><td>
<input type='checkbox' id='Descriptor16' name='Descriptor' value='Lawful' ><label for='Descriptor16'> Lawful</label><BR></td><td>
<input type='checkbox' id='Descriptor17' name='Descriptor' value='Chaotic' ><label for='Descriptor17'> Chaotic</label><BR></td><td>
<input type='checkbox' id='Descriptor18' name='Descriptor' value='Light' ><label for='Descriptor18'> Light</label><BR></td><td>
<input type='checkbox' id='Descriptor19' name='Descriptor' value='Darkness' ><label for='Descriptor19'> Darkness</label><BR></td></tr><tr><td>
<input type='checkbox' id='Descriptor20' name='Descriptor' value='Fear' ><label for='Descriptor20'> Fear</label><BR></td><td>
<input type='checkbox' id='Descriptor21' name='Descriptor' value='Mind-Affecting' ><label for='Descriptor21'> Mind-Affecting</label><BR></td><td>
<input type='checkbox' id='Descriptor22' name='Descriptor' value='Language-Dependent' ><label for='Descriptor22'> Language-Dependent</label><BR></td><td>
<input type='checkbox' id='Descriptor23' name='Descriptor' value='Creation' ><label for='Descriptor23'> Creation</label><BR></td></tr><tr><td>
<input type='checkbox' id='Descriptor24' name='Descriptor' value='Varies' ><label for='Descriptor24'> Varies</label><BR></td><td>
<input type='checkbox' id='Descriptor25' name='Descriptor' value='Varies&#32;Energy' ><label for='Descriptor25'> Varies Energy</label><BR></td><td>
<input type='checkbox' id='Descriptor26' name='Descriptor' value='Varies&#32;Alignment' ><label for='Descriptor26'> Varies Alignment</label><BR></td><td>
<input type='checkbox' id='Descriptor27' name='Descriptor' value='Varies&#32;Element' ><label for='Descriptor27'> Varies Element</label><BR></td></tr><tr><td>
<input type='checkbox' id='Descriptor28' name='Descriptor' value='see&#32;text' ><label for='Descriptor28'> see text</label><BR></td></tr></table><input type='hidden' name='OldDescriptor' value=''></td>

</TR>
<TR id='ROW_MinLevel'><th colspan='1'><label for='MinLevel' title=''>Spell Level is equal to or higher than</label></th><td colspan='1'><table border='0'><tr><td><input type='radio' id='MinLevel-1' name='MinLevel' value=''   checked ><label for='MinLevel-1'>Not&#32;Answered</label><BR></td><td><input type='radio' id='MinLevel0' name='MinLevel' value='0' ><label for='MinLevel0'>0</label><br>
</td><td><input type='radio' id='MinLevel2' name='MinLevel' value='1' ><label for='MinLevel2'>1</label><br>
</td><td><input type='radio' id='MinLevel4' name='MinLevel' value='2' ><label for='MinLevel4'>2</label><br>
</td></tr><tr><td><input type='radio' id='MinLevel6' name='MinLevel' value='3' ><label for='MinLevel6'>3</label><br>
</td><td><input type='radio' id='MinLevel8' name='MinLevel' value='4' ><label for='MinLevel8'>4</label><br>
</td><td><input type='radio' id='MinLevel10' name='MinLevel' value='5' ><label for='MinLevel10'>5</label><br>
</td><td><input type='radio' id='MinLevel12' name='MinLevel' value='6' ><label for='MinLevel12'>6</label><br>
</td></tr><tr><td><input type='radio' id='MinLevel14' name='MinLevel' value='7' ><label for='MinLevel14'>7</label><br>
</td><td><input type='radio' id='MinLevel16' name='MinLevel' value='8' ><label for='MinLevel16'>8</label><br>
</td><td><input type='radio' id='MinLevel18' name='MinLevel' value='9' ><label for='MinLevel18'>9</label><br>
</td></tr></table><input type='hidden' name='OldMinLevel' value=''></td>

</TR>
<TR id='ROW_MaxLevel'><th colspan='1'><label for='MaxLevel' title=''>Spell Level is equal to or less than</label></th><td colspan='1'><table border='0'><tr><td><input type='radio' id='MaxLevel-1' name='MaxLevel' value=''   checked ><label for='MaxLevel-1'>Not&#32;Answered</label><BR></td><td><input type='radio' id='MaxLevel0' name='MaxLevel' value='0' ><label for='MaxLevel0'>0</label><br>
</td><td><input type='radio' id='MaxLevel2' name='MaxLevel' value='1' ><label for='MaxLevel2'>1</label><br>
</td><td><input type='radio' id='MaxLevel4' name='MaxLevel' value='2' ><label for='MaxLevel4'>2</label><br>
</td></tr><tr><td><input type='radio' id='MaxLevel6' name='MaxLevel' value='3' ><label for='MaxLevel6'>3</label><br>
</td><td><input type='radio' id='MaxLevel8' name='MaxLevel' value='4' ><label for='MaxLevel8'>4</label><br>
</td><td><input type='radio' id='MaxLevel10' name='MaxLevel' value='5' ><label for='MaxLevel10'>5</label><br>
</td><td><input type='radio' id='MaxLevel12' name='MaxLevel' value='6' ><label for='MaxLevel12'>6</label><br>
</td></tr><tr><td><input type='radio' id='MaxLevel14' name='MaxLevel' value='7' ><label for='MaxLevel14'>7</label><br>
</td><td><input type='radio' id='MaxLevel16' name='MaxLevel' value='8' ><label for='MaxLevel16'>8</label><br>
</td><td><input type='radio' id='MaxLevel18' name='MaxLevel' value='9' ><label for='MaxLevel18'>9</label><br>
</td></tr></table><input type='hidden' name='OldMaxLevel' value=''></td>

</TR>
<TR id='ROW_AnyClass'><th colspan='1'><label for='AnyClass' title=''>In any of these Classes</label></th><td colspan='1'><table border='0'><tr><td>
<b>Arcane</b><br>
</td></tr><tr><td><input type='checkbox' id='AnyClass0' name='AnyClass' value='Asn' ><label for='AnyClass0'> Assassin</label><BR></td><td>
<input type='checkbox' id='AnyClass1' name='AnyClass' value='Beguiler' ><label for='AnyClass1'> Beguiler</label><BR></td><td>
<input type='checkbox' id='AnyClass2' name='AnyClass' value='Brd' ><label for='AnyClass2'> Bard</label><BR></td><td>
<input type='checkbox' id='AnyClass3' name='AnyClass' value='Dem' ><label for='AnyClass3'> Demonologist</label><BR></td><td>
<input type='checkbox' id='AnyClass4' name='AnyClass' value='Duskblade' ><label for='AnyClass4'> Duskblade</label><BR></td></tr><tr><td>
<input type='checkbox' id='AnyClass5' name='AnyClass' value='Exalted&#32;Arcanist' ><label for='AnyClass5'> Exalted Arcanist</label><BR></td><td>
<input type='checkbox' id='AnyClass6' name='AnyClass' value='HB' ><label for='AnyClass6'> Hexblade</label><BR></td><td>
<input type='checkbox' id='AnyClass7' name='AnyClass' value='Hoard' ><label for='AnyClass7'> The Hoardstealer</label><BR></td><td>
<input type='checkbox' id='AnyClass8' name='AnyClass' value='Hrp' ><label for='AnyClass8'> Harper Guide</label><BR></td><td>
<input type='checkbox' id='AnyClass9' name='AnyClass' value='MH' ><label for='AnyClass9'> Mortal Hunter</label><BR></td></tr><tr><td>
<input type='checkbox' id='AnyClass10' name='AnyClass' value='PUG' ><label for='AnyClass10'> Prime Underdark Guide</label><BR></td><td>
<input type='checkbox' id='AnyClass11' name='AnyClass' value='Slayer&#32;of&#32;Domiel' ><label for='AnyClass11'> Slayer of Domiel</label><BR></td><td>
<input type='checkbox' id='AnyClass12' name='AnyClass' value='Sor/Wiz' ><label for='AnyClass12'> Sorcerer/Wizard</label><BR></td><td>
<input type='checkbox' id='AnyClass13' name='AnyClass' value='Wmg' ><label for='AnyClass13'> Warmage</label><BR></td><td>
<input type='checkbox' id='AnyClass14' name='AnyClass' value='Wuj' ><label for='AnyClass14'> Wu jen</label><BR></td></tr><tr><td>
<b>Divine</b><br>
</td></tr><tr><td><input type='checkbox' id='AnyClass15' name='AnyClass' value='Adp' ><label for='AnyClass15'> Adept</label><BR></td><td>
<input type='checkbox' id='AnyClass16' name='AnyClass' value='APeace' ><label for='AnyClass16'> Apostle of Peace</label><BR></td><td>
<input type='checkbox' id='AnyClass17' name='AnyClass' value='Arc' ><label for='AnyClass17'> Archivist</label><BR></td><td>
<input type='checkbox' id='AnyClass18' name='AnyClass' value='Blg' ><label for='AnyClass18'> Blighter</label><BR></td><td>
<input type='checkbox' id='AnyClass19' name='AnyClass' value='Blk' ><label for='AnyClass19'> Blackguard</label><BR></td></tr><tr><td>
<input type='checkbox' id='AnyClass20' name='AnyClass' value='BVal' ><label for='AnyClass20'> Beloved of Valarian</label><BR></td><td>
<input type='checkbox' id='AnyClass21' name='AnyClass' value='ChamGwyn' ><label for='AnyClass21'> Ghampion of Gwynharwyf</label><BR></td><td>
<input type='checkbox' id='AnyClass22' name='AnyClass' value='Clr' ><label for='AnyClass22'> Cleric</label><BR></td><td>
<input type='checkbox' id='AnyClass23' name='AnyClass' value='Drd' ><label for='AnyClass23'> Druid</label><BR></td><td>
<input type='checkbox' id='AnyClass24' name='AnyClass' value='EmBarachiel' ><label for='AnyClass24'> Emissary of Barachiel</label><BR></td></tr><tr><td>
<input type='checkbox' id='AnyClass25' name='AnyClass' value='Hlr' ><label for='AnyClass25'> Healer</label><BR></td><td>
<input type='checkbox' id='AnyClass26' name='AnyClass' value='HotD' ><label for='AnyClass26'> Hunter of the Dead</label><BR></td><td>
<input type='checkbox' id='AnyClass27' name='AnyClass' value='IOTDF' ><label for='AnyClass27'> Initiate of Deity</label><BR></td><td>
<input type='checkbox' id='AnyClass28' name='AnyClass' value='KotC' ><label for='AnyClass28'> Knight of the Chalice</label><BR></td><td>
<input type='checkbox' id='AnyClass29' name='AnyClass' value='Pal' ><label for='AnyClass29'> Paladin</label><BR></td></tr><tr><td>
<input type='checkbox' id='AnyClass30' name='AnyClass' value='Rgr' ><label for='AnyClass30'> Ranger</label><BR></td><td>
<input type='checkbox' id='AnyClass31' name='AnyClass' value='Shu' ><label for='AnyClass31'> Shugenja</label><BR></td><td>
<input type='checkbox' id='AnyClass32' name='AnyClass' value='Vassal&#32;of&#32;Bahamut' ><label for='AnyClass32'> Vassal of Bahamut</label><BR></td><td>
</td></tr><tr><td><b>Other</b><br>
</td></tr><tr><td><input type='checkbox' id='AnyClass33' name='AnyClass' value='Artificer' ><label for='AnyClass33'> Artificer</label><BR></td><td>
<input type='checkbox' id='AnyClass34' name='AnyClass' value='Corrupt' ><label for='AnyClass34'> Corrupt</label><BR></td><td>
<input type='checkbox' id='AnyClass35' name='AnyClass' value='Holder' ><label for='AnyClass35'> Holder</label><BR></td><td>
<input type='checkbox' id='AnyClass36' name='AnyClass' value='Hth' ><label for='AnyClass36'> Hathran</label><BR></td><td>
<input type='checkbox' id='AnyClass37' name='AnyClass' value='Sanctified' ><label for='AnyClass37'> Sanctified</label><BR></td></tr></table><input type='hidden' name='OldAnyClass' value=''></td>

</TR>
<TR id='ROW_NotClass'><th colspan='1'><label for='NotClass' title=''>In none of these Classes</label></th><td colspan='1'><table border='0'><tr><td>
<b>Arcane</b><br>
</td></tr><tr><td><input type='checkbox' id='NotClass0' name='NotClass' value='Asn' ><label for='NotClass0'> Assassin</label><BR></td><td>
<input type='checkbox' id='NotClass1' name='NotClass' value='Beguiler' ><label for='NotClass1'> Beguiler</label><BR></td><td>
<input type='checkbox' id='NotClass2' name='NotClass' value='Brd' ><label for='NotClass2'> Bard</label><BR></td><td>
<input type='checkbox' id='NotClass3' name='NotClass' value='Dem' ><label for='NotClass3'> Demonologist</label><BR></td><td>
<input type='checkbox' id='NotClass4' name='NotClass' value='Duskblade' ><label for='NotClass4'> Duskblade</label><BR></td></tr><tr><td>
<input type='checkbox' id='NotClass5' name='NotClass' value='Exalted&#32;Arcanist' ><label for='NotClass5'> Exalted Arcanist</label><BR></td><td>
<input type='checkbox' id='NotClass6' name='NotClass' value='HB' ><label for='NotClass6'> Hexblade</label><BR></td><td>
<input type='checkbox' id='NotClass7' name='NotClass' value='Hoard' ><label for='NotClass7'> The Hoardstealer</label><BR></td><td>
<input type='checkbox' id='NotClass8' name='NotClass' value='Hrp' ><label for='NotClass8'> Harper Guide</label><BR></td><td>
<input type='checkbox' id='NotClass9' name='NotClass' value='MH' ><label for='NotClass9'> Mortal Hunter</label><BR></td></tr><tr><td>
<input type='checkbox' id='NotClass10' name='NotClass' value='PUG' ><label for='NotClass10'> Prime Underdark Guide</label><BR></td><td>
<input type='checkbox' id='NotClass11' name='NotClass' value='Slayer&#32;of&#32;Domiel' ><label for='NotClass11'> Slayer of Domiel</label><BR></td><td>
<input type='checkbox' id='NotClass12' name='NotClass' value='Sor/Wiz' ><label for='NotClass12'> Sorcerer/Wizard</label><BR></td><td>
<input type='checkbox' id='NotClass13' name='NotClass' value='Wmg' ><label for='NotClass13'> Warmage</label><BR></td><td>
<input type='checkbox' id='NotClass14' name='NotClass' value='Wuj' ><label for='NotClass14'> Wu jen</label><BR></td></tr><tr><td>
<b>Divine</b><br>
</td></tr><tr><td><input type='checkbox' id='NotClass15' name='NotClass' value='Adp' ><label for='NotClass15'> Adept</label><BR></td><td>
<input type='checkbox' id='NotClass16' name='NotClass' value='APeace' ><label for='NotClass16'> Apostle of Peace</label><BR></td><td>
<input type='checkbox' id='NotClass17' name='NotClass' value='Arc' ><label for='NotClass17'> Archivist</label><BR></td><td>
<input type='checkbox' id='NotClass18' name='NotClass' value='Blg' ><label for='NotClass18'> Blighter</label><BR></td><td>
<input type='checkbox' id='NotClass19' name='NotClass' value='Blk' ><label for='NotClass19'> Blackguard</label><BR></td></tr><tr><td>
<input type='checkbox' id='NotClass20' name='NotClass' value='BVal' ><label for='NotClass20'> Beloved of Valarian</label><BR></td><td>
<input type='checkbox' id='NotClass21' name='NotClass' value='ChamGwyn' ><label for='NotClass21'> Ghampion of Gwynharwyf</label><BR></td><td>
<input type='checkbox' id='NotClass22' name='NotClass' value='Clr' ><label for='NotClass22'> Cleric</label><BR></td><td>
<input type='checkbox' id='NotClass23' name='NotClass' value='Drd' ><label for='NotClass23'> Druid</label><BR></td><td>
<input type='checkbox' id='NotClass24' name='NotClass' value='EmBarachiel' ><label for='NotClass24'> Emissary of Barachiel</label><BR></td></tr><tr><td>
<input type='checkbox' id='NotClass25' name='NotClass' value='Hlr' ><label for='NotClass25'> Healer</label><BR></td><td>
<input type='checkbox' id='NotClass26' name='NotClass' value='HotD' ><label for='NotClass26'> Hunter of the Dead</label><BR></td><td>
<input type='checkbox' id='NotClass27' name='NotClass' value='IOTDF' ><label for='NotClass27'> Initiate of Deity</label><BR></td><td>
<input type='checkbox' id='NotClass28' name='NotClass' value='KotC' ><label for='NotClass28'> Knight of the Chalice</label><BR></td><td>
<input type='checkbox' id='NotClass29' name='NotClass' value='Pal' ><label for='NotClass29'> Paladin</label><BR></td></tr><tr><td>
<input type='checkbox' id='NotClass30' name='NotClass' value='Rgr' ><label for='NotClass30'> Ranger</label><BR></td><td>
<input type='checkbox' id='NotClass31' name='NotClass' value='Shu' ><label for='NotClass31'> Shugenja</label><BR></td><td>
<input type='checkbox' id='NotClass32' name='NotClass' value='Vassal&#32;of&#32;Bahamut' ><label for='NotClass32'> Vassal of Bahamut</label><BR></td><td>
</td></tr><tr><td><b>Other</b><br>
</td></tr><tr><td><input type='checkbox' id='NotClass33' name='NotClass' value='Artificer' ><label for='NotClass33'> Artificer</label><BR></td><td>
<input type='checkbox' id='NotClass34' name='NotClass' value='Corrupt' ><label for='NotClass34'> Corrupt</label><BR></td><td>
<input type='checkbox' id='NotClass35' name='NotClass' value='Holder' ><label for='NotClass35'> Holder</label><BR></td><td>
<input type='checkbox' id='NotClass36' name='NotClass' value='Hth' ><label for='NotClass36'> Hathran</label><BR></td><td>
<input type='checkbox' id='NotClass37' name='NotClass' value='Sanctified' ><label for='NotClass37'> Sanctified</label><BR></td></tr></table><input type='hidden' name='OldNotClass' value=''></td>

</TR>
<TR id='ROW_Levels'><th colspan='1'><label for='Levels' title=''>In any of these Levels</label></th><td colspan='1'>(hold ctrl down to select more than one)<br><select multiple name='Levels' size='10' id='Levels'  ><option value='' selected >Not&#32;Answered</option>
<optgroup class='TopGroupLabel' label='Adept'><option value='Adp&#32;0' label='Adp&#32;0'>Adp 0</option>
<option value='Adp&#32;1' label='Adp&#32;1'>Adp 1</option>
<option value='Adp&#32;2' label='Adp&#32;2'>Adp 2</option>
<option value='Adp&#32;3' label='Adp&#32;3'>Adp 3</option>
<option value='Adp&#32;4' label='Adp&#32;4'>Adp 4</option>
<option value='Adp&#32;5' label='Adp&#32;5'>Adp 5</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Apostle of Peace'><option value='APeace&#32;0' label='APeace&#32;0'>APeace 0</option>
<option value='APeace&#32;1' label='APeace&#32;1'>APeace 1</option>
<option value='APeace&#32;2' label='APeace&#32;2'>APeace 2</option>
<option value='APeace&#32;3' label='APeace&#32;3'>APeace 3</option>
<option value='APeace&#32;4' label='APeace&#32;4'>APeace 4</option>
<option value='APeace&#32;5' label='APeace&#32;5'>APeace 5</option>
<option value='APeace&#32;6' label='APeace&#32;6'>APeace 6</option>
<option value='APeace&#32;7' label='APeace&#32;7'>APeace 7</option>
<option value='APeace&#32;8' label='APeace&#32;8'>APeace 8</option>
<option value='APeace&#32;9' label='APeace&#32;9'>APeace 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Archivist'><option value='Arc&#32;0' label='Arc&#32;0'>Arc 0</option>
<option value='Arc&#32;1' label='Arc&#32;1'>Arc 1</option>
<option value='Arc&#32;2' label='Arc&#32;2'>Arc 2</option>
<option value='Arc&#32;3' label='Arc&#32;3'>Arc 3</option>
<option value='Arc&#32;4' label='Arc&#32;4'>Arc 4</option>
<option value='Arc&#32;5' label='Arc&#32;5'>Arc 5</option>
<option value='Arc&#32;6' label='Arc&#32;6'>Arc 6</option>
<option value='Arc&#32;7' label='Arc&#32;7'>Arc 7</option>
<option value='Arc&#32;8' label='Arc&#32;8'>Arc 8</option>
<option value='Arc&#32;9' label='Arc&#32;9'>Arc 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Artificer'><option value='Artificer&#32;1' label='Artificer&#32;1'>Artificer 1</option>
<option value='Artificer&#32;2' label='Artificer&#32;2'>Artificer 2</option>
<option value='Artificer&#32;3' label='Artificer&#32;3'>Artificer 3</option>
<option value='Artificer&#32;4' label='Artificer&#32;4'>Artificer 4</option>
<option value='Artificer&#32;5' label='Artificer&#32;5'>Artificer 5</option>
<option value='Artificer&#32;6' label='Artificer&#32;6'>Artificer 6</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Assassin'><option value='Asn&#32;1' label='Asn&#32;1'>Asn 1</option>
<option value='Asn&#32;2' label='Asn&#32;2'>Asn 2</option>
<option value='Asn&#32;3' label='Asn&#32;3'>Asn 3</option>
<option value='Asn&#32;4' label='Asn&#32;4'>Asn 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Beguiler'><option value='Beguiler&#32;0' label='Beguiler&#32;0'>Beguiler 0</option>
<option value='Beguiler&#32;1' label='Beguiler&#32;1'>Beguiler 1</option>
<option value='Beguiler&#32;2' label='Beguiler&#32;2'>Beguiler 2</option>
<option value='Beguiler&#32;3' label='Beguiler&#32;3'>Beguiler 3</option>
<option value='Beguiler&#32;4' label='Beguiler&#32;4'>Beguiler 4</option>
<option value='Beguiler&#32;5' label='Beguiler&#32;5'>Beguiler 5</option>
<option value='Beguiler&#32;6' label='Beguiler&#32;6'>Beguiler 6</option>
<option value='Beguiler&#32;7' label='Beguiler&#32;7'>Beguiler 7</option>
<option value='Beguiler&#32;8' label='Beguiler&#32;8'>Beguiler 8</option>
<option value='Beguiler&#32;9' label='Beguiler&#32;9'>Beguiler 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Blighter'><option value='Blg&#32;0' label='Blg&#32;0'>Blg 0</option>
<option value='Blg&#32;1' label='Blg&#32;1'>Blg 1</option>
<option value='Blg&#32;2' label='Blg&#32;2'>Blg 2</option>
<option value='Blg&#32;3' label='Blg&#32;3'>Blg 3</option>
<option value='Blg&#32;4' label='Blg&#32;4'>Blg 4</option>
<option value='Blg&#32;5' label='Blg&#32;5'>Blg 5</option>
<option value='Blg&#32;6' label='Blg&#32;6'>Blg 6</option>
<option value='Blg&#32;7' label='Blg&#32;7'>Blg 7</option>
<option value='Blg&#32;8' label='Blg&#32;8'>Blg 8</option>
<option value='Blg&#32;9' label='Blg&#32;9'>Blg 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Blackguard'><option value='Blk&#32;1' label='Blk&#32;1'>Blk 1</option>
<option value='Blk&#32;2' label='Blk&#32;2'>Blk 2</option>
<option value='Blk&#32;3' label='Blk&#32;3'>Blk 3</option>
<option value='Blk&#32;4' label='Blk&#32;4'>Blk 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Bard'><option value='Brd&#32;0' label='Brd&#32;0'>Brd 0</option>
<option value='Brd&#32;1' label='Brd&#32;1'>Brd 1</option>
<option value='Brd&#32;2' label='Brd&#32;2'>Brd 2</option>
<option value='Brd&#32;3' label='Brd&#32;3'>Brd 3</option>
<option value='Brd&#32;4' label='Brd&#32;4'>Brd 4</option>
<option value='Brd&#32;5' label='Brd&#32;5'>Brd 5</option>
<option value='Brd&#32;6' label='Brd&#32;6'>Brd 6</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Beloved of Valarian'><option value='BVal&#32;1' label='BVal&#32;1'>BVal 1</option>
<option value='BVal&#32;2' label='BVal&#32;2'>BVal 2</option>
<option value='BVal&#32;3' label='BVal&#32;3'>BVal 3</option>
<option value='BVal&#32;4' label='BVal&#32;4'>BVal 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Ghampion of Gwynharwyf'><option value='ChamGwyn&#32;1' label='ChamGwyn&#32;1'>ChamGwyn 1</option>
<option value='ChamGwyn&#32;2' label='ChamGwyn&#32;2'>ChamGwyn 2</option>
<option value='ChamGwyn&#32;3' label='ChamGwyn&#32;3'>ChamGwyn 3</option>
<option value='ChamGwyn&#32;4' label='ChamGwyn&#32;4'>ChamGwyn 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Cleric'><option value='Clr&#32;0' label='Clr&#32;0'>Clr 0</option>
<option value='Clr&#32;1' label='Clr&#32;1'>Clr 1</option>
<option value='Clr&#32;2' label='Clr&#32;2'>Clr 2</option>
<option value='Clr&#32;3' label='Clr&#32;3'>Clr 3</option>
<option value='Clr&#32;4' label='Clr&#32;4'>Clr 4</option>
<option value='Clr&#32;5' label='Clr&#32;5'>Clr 5</option>
<option value='Clr&#32;6' label='Clr&#32;6'>Clr 6</option>
<option value='Clr&#32;7' label='Clr&#32;7'>Clr 7</option>
<option value='Clr&#32;8' label='Clr&#32;8'>Clr 8</option>
<option value='Clr&#32;9' label='Clr&#32;9'>Clr 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Corrupt'><option value='Corrupt&#32;0' label='Corrupt&#32;0'>Corrupt 0</option>
<option value='Corrupt&#32;1' label='Corrupt&#32;1'>Corrupt 1</option>
<option value='Corrupt&#32;2' label='Corrupt&#32;2'>Corrupt 2</option>
<option value='Corrupt&#32;3' label='Corrupt&#32;3'>Corrupt 3</option>
<option value='Corrupt&#32;4' label='Corrupt&#32;4'>Corrupt 4</option>
<option value='Corrupt&#32;5' label='Corrupt&#32;5'>Corrupt 5</option>
<option value='Corrupt&#32;6' label='Corrupt&#32;6'>Corrupt 6</option>
<option value='Corrupt&#32;7' label='Corrupt&#32;7'>Corrupt 7</option>
<option value='Corrupt&#32;8' label='Corrupt&#32;8'>Corrupt 8</option>
<option value='Corrupt&#32;9' label='Corrupt&#32;9'>Corrupt 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Demonologist'><option value='Dem&#32;1' label='Dem&#32;1'>Dem 1</option>
<option value='Dem&#32;2' label='Dem&#32;2'>Dem 2</option>
<option value='Dem&#32;3' label='Dem&#32;3'>Dem 3</option>
<option value='Dem&#32;4' label='Dem&#32;4'>Dem 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Druid'><option value='Drd&#32;0' label='Drd&#32;0'>Drd 0</option>
<option value='Drd&#32;1' label='Drd&#32;1'>Drd 1</option>
<option value='Drd&#32;2' label='Drd&#32;2'>Drd 2</option>
<option value='Drd&#32;3' label='Drd&#32;3'>Drd 3</option>
<option value='Drd&#32;4' label='Drd&#32;4'>Drd 4</option>
<option value='Drd&#32;5' label='Drd&#32;5'>Drd 5</option>
<option value='Drd&#32;6' label='Drd&#32;6'>Drd 6</option>
<option value='Drd&#32;7' label='Drd&#32;7'>Drd 7</option>
<option value='Drd&#32;8' label='Drd&#32;8'>Drd 8</option>
<option value='Drd&#32;9' label='Drd&#32;9'>Drd 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Duskblade'><option value='Duskblade&#32;0' label='Duskblade&#32;0'>Duskblade 0</option>
<option value='Duskblade&#32;1' label='Duskblade&#32;1'>Duskblade 1</option>
<option value='Duskblade&#32;2' label='Duskblade&#32;2'>Duskblade 2</option>
<option value='Duskblade&#32;3' label='Duskblade&#32;3'>Duskblade 3</option>
<option value='Duskblade&#32;4' label='Duskblade&#32;4'>Duskblade 4</option>
<option value='Duskblade&#32;5' label='Duskblade&#32;5'>Duskblade 5</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Emissary of Barachiel'><option value='EmBarachiel&#32;1' label='EmBarachiel&#32;1'>EmBarachiel 1</option>
<option value='EmBarachiel&#32;2' label='EmBarachiel&#32;2'>EmBarachiel 2</option>
<option value='EmBarachiel&#32;3' label='EmBarachiel&#32;3'>EmBarachiel 3</option>
<option value='EmBarachiel&#32;4' label='EmBarachiel&#32;4'>EmBarachiel 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Exalted Arcanist'><option value='Exalted&#32;Arcanist&#32;1' label='Exalted&#32;Arcanist&#32;1'>Exalted Arcanist 1</option>
<option value='Exalted&#32;Arcanist&#32;2' label='Exalted&#32;Arcanist&#32;2'>Exalted Arcanist 2</option>
<option value='Exalted&#32;Arcanist&#32;3' label='Exalted&#32;Arcanist&#32;3'>Exalted Arcanist 3</option>
<option value='Exalted&#32;Arcanist&#32;4' label='Exalted&#32;Arcanist&#32;4'>Exalted Arcanist 4</option>
<option value='Exalted&#32;Arcanist&#32;5' label='Exalted&#32;Arcanist&#32;5'>Exalted Arcanist 5</option>
<option value='Exalted&#32;Arcanist&#32;6' label='Exalted&#32;Arcanist&#32;6'>Exalted Arcanist 6</option>
<option value='Exalted&#32;Arcanist&#32;7' label='Exalted&#32;Arcanist&#32;7'>Exalted Arcanist 7</option>
<option value='Exalted&#32;Arcanist&#32;8' label='Exalted&#32;Arcanist&#32;8'>Exalted Arcanist 8</option>
<option value='Exalted&#32;Arcanist&#32;9' label='Exalted&#32;Arcanist&#32;9'>Exalted Arcanist 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Hexblade'><option value='HB&#32;1' label='HB&#32;1'>HB 1</option>
<option value='HB&#32;2' label='HB&#32;2'>HB 2</option>
<option value='HB&#32;3' label='HB&#32;3'>HB 3</option>
<option value='HB&#32;4' label='HB&#32;4'>HB 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Healer'><option value='Hlr&#32;0' label='Hlr&#32;0'>Hlr 0</option>
<option value='Hlr&#32;1' label='Hlr&#32;1'>Hlr 1</option>
<option value='Hlr&#32;2' label='Hlr&#32;2'>Hlr 2</option>
<option value='Hlr&#32;3' label='Hlr&#32;3'>Hlr 3</option>
<option value='Hlr&#32;4' label='Hlr&#32;4'>Hlr 4</option>
<option value='Hlr&#32;5' label='Hlr&#32;5'>Hlr 5</option>
<option value='Hlr&#32;6' label='Hlr&#32;6'>Hlr 6</option>
<option value='Hlr&#32;7' label='Hlr&#32;7'>Hlr 7</option>
<option value='Hlr&#32;8' label='Hlr&#32;8'>Hlr 8</option>
<option value='Hlr&#32;9' label='Hlr&#32;9'>Hlr 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='The Hoardstealer'><option value='Hoard&#32;1' label='Hoard&#32;1'>Hoard 1</option>
<option value='Hoard&#32;2' label='Hoard&#32;2'>Hoard 2</option>
<option value='Hoard&#32;3' label='Hoard&#32;3'>Hoard 3</option>
<option value='Hoard&#32;4' label='Hoard&#32;4'>Hoard 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Hunter of the Dead'><option value='HotD&#32;1' label='HotD&#32;1'>HotD 1</option>
<option value='HotD&#32;2' label='HotD&#32;2'>HotD 2</option>
<option value='HotD&#32;3' label='HotD&#32;3'>HotD 3</option>
<option value='HotD&#32;4' label='HotD&#32;4'>HotD 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Harper Guide'><option value='Hrp&#32;1' label='Hrp&#32;1'>Hrp 1</option>
<option value='Hrp&#32;2' label='Hrp&#32;2'>Hrp 2</option>
<option value='Hrp&#32;3' label='Hrp&#32;3'>Hrp 3</option>
<option value='Hrp&#32;4' label='Hrp&#32;4'>Hrp 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Hathran'><option value='Hth&#32;0' label='Hth&#32;0'>Hth 0</option>
<option value='Hth&#32;1' label='Hth&#32;1'>Hth 1</option>
<option value='Hth&#32;2' label='Hth&#32;2'>Hth 2</option>
<option value='Hth&#32;3' label='Hth&#32;3'>Hth 3</option>
<option value='Hth&#32;4' label='Hth&#32;4'>Hth 4</option>
<option value='Hth&#32;5' label='Hth&#32;5'>Hth 5</option>
<option value='Hth&#32;6' label='Hth&#32;6'>Hth 6</option>
<option value='Hth&#32;7' label='Hth&#32;7'>Hth 7</option>
<option value='Hth&#32;8' label='Hth&#32;8'>Hth 8</option>
<option value='Hth&#32;9' label='Hth&#32;9'>Hth 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Initiate of Deity'><option value='IOTDF&#32;1' label='IOTDF&#32;1'>IOTDF 1</option>
<option value='IOTDF&#32;2' label='IOTDF&#32;2'>IOTDF 2</option>
<option value='IOTDF&#32;3' label='IOTDF&#32;3'>IOTDF 3</option>
<option value='IOTDF&#32;4' label='IOTDF&#32;4'>IOTDF 4</option>
<option value='IOTDF&#32;5' label='IOTDF&#32;5'>IOTDF 5</option>
<option value='IOTDF&#32;6' label='IOTDF&#32;6'>IOTDF 6</option>
<option value='IOTDF&#32;7' label='IOTDF&#32;7'>IOTDF 7</option>
<option value='IOTDF&#32;8' label='IOTDF&#32;8'>IOTDF 8</option>
<option value='IOTDF&#32;9' label='IOTDF&#32;9'>IOTDF 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Knight of the Chalice'><option value='KotC&#32;1' label='KotC&#32;1'>KotC 1</option>
<option value='KotC&#32;2' label='KotC&#32;2'>KotC 2</option>
<option value='KotC&#32;3' label='KotC&#32;3'>KotC 3</option>
<option value='KotC&#32;4' label='KotC&#32;4'>KotC 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Mortal Hunter'><option value='MH&#32;1' label='MH&#32;1'>MH 1</option>
<option value='MH&#32;2' label='MH&#32;2'>MH 2</option>
<option value='MH&#32;3' label='MH&#32;3'>MH 3</option>
<option value='MH&#32;4' label='MH&#32;4'>MH 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Paladin'><option value='Pal&#32;1' label='Pal&#32;1'>Pal 1</option>
<option value='Pal&#32;2' label='Pal&#32;2'>Pal 2</option>
<option value='Pal&#32;3' label='Pal&#32;3'>Pal 3</option>
<option value='Pal&#32;4' label='Pal&#32;4'>Pal 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Prime Underdark Guide'><option value='PUG&#32;1' label='PUG&#32;1'>PUG 1</option>
<option value='PUG&#32;2' label='PUG&#32;2'>PUG 2</option>
<option value='PUG&#32;3' label='PUG&#32;3'>PUG 3</option>
<option value='PUG&#32;4' label='PUG&#32;4'>PUG 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Ranger'><option value='Rgr&#32;1' label='Rgr&#32;1'>Rgr 1</option>
<option value='Rgr&#32;2' label='Rgr&#32;2'>Rgr 2</option>
<option value='Rgr&#32;3' label='Rgr&#32;3'>Rgr 3</option>
<option value='Rgr&#32;4' label='Rgr&#32;4'>Rgr 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Sanctified'><option value='Sanctified&#32;1' label='Sanctified&#32;1'>Sanctified 1</option>
<option value='Sanctified&#32;2' label='Sanctified&#32;2'>Sanctified 2</option>
<option value='Sanctified&#32;3' label='Sanctified&#32;3'>Sanctified 3</option>
<option value='Sanctified&#32;4' label='Sanctified&#32;4'>Sanctified 4</option>
<option value='Sanctified&#32;5' label='Sanctified&#32;5'>Sanctified 5</option>
<option value='Sanctified&#32;6' label='Sanctified&#32;6'>Sanctified 6</option>
<option value='Sanctified&#32;7' label='Sanctified&#32;7'>Sanctified 7</option>
<option value='Sanctified&#32;8' label='Sanctified&#32;8'>Sanctified 8</option>
<option value='Sanctified&#32;9' label='Sanctified&#32;9'>Sanctified 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Shugenja'><option value='Shu&#32;0' label='Shu&#32;0'>Shu 0</option>
<option value='Shu&#32;1' label='Shu&#32;1'>Shu 1</option>
<option value='Shu&#32;2' label='Shu&#32;2'>Shu 2</option>
<option value='Shu&#32;3' label='Shu&#32;3'>Shu 3</option>
<option value='Shu&#32;4' label='Shu&#32;4'>Shu 4</option>
<option value='Shu&#32;5' label='Shu&#32;5'>Shu 5</option>
<option value='Shu&#32;6' label='Shu&#32;6'>Shu 6</option>
<option value='Shu&#32;7' label='Shu&#32;7'>Shu 7</option>
<option value='Shu&#32;8' label='Shu&#32;8'>Shu 8</option>
<option value='Shu&#32;9' label='Shu&#32;9'>Shu 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Slayer of Domiel'><option value='Slayer&#32;of&#32;Domiel&#32;1' label='Slayer&#32;of&#32;Domiel&#32;1'>Slayer of Domiel 1</option>
<option value='Slayer&#32;of&#32;Domiel&#32;2' label='Slayer&#32;of&#32;Domiel&#32;2'>Slayer of Domiel 2</option>
<option value='Slayer&#32;of&#32;Domiel&#32;3' label='Slayer&#32;of&#32;Domiel&#32;3'>Slayer of Domiel 3</option>
<option value='Slayer&#32;of&#32;Domiel&#32;4' label='Slayer&#32;of&#32;Domiel&#32;4'>Slayer of Domiel 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Sorcerer/Wizard'><option value='Sor/Wiz&#32;0' label='Sor/Wiz&#32;0'>Sor/Wiz 0</option>
<option value='Sor&#32;1' label='Sor&#32;1'>Sor 1</option>
<option value='Sor/Wiz&#32;1' label='Sor/Wiz&#32;1'>Sor/Wiz 1</option>
<option value='Sor&#32;2' label='Sor&#32;2'>Sor 2</option>
<option value='Sor/Wiz&#32;2' label='Sor/Wiz&#32;2'>Sor/Wiz 2</option>
<option value='Sor/Wiz&#32;3' label='Sor/Wiz&#32;3'>Sor/Wiz 3</option>
<option value='Wiz&#32;4' label='Wiz&#32;4'>Wiz 4</option>
<option value='Sor/Wiz&#32;4' label='Sor/Wiz&#32;4'>Sor/Wiz 4</option>
<option value='Sor&#32;4' label='Sor&#32;4'>Sor 4</option>
<option value='Sor&#32;5' label='Sor&#32;5'>Sor 5</option>
<option value='Sor/Wiz&#32;5' label='Sor/Wiz&#32;5'>Sor/Wiz 5</option>
<option value='Sor/Wiz&#32;6' label='Sor/Wiz&#32;6'>Sor/Wiz 6</option>
<option value='Wiz&#32;6' label='Wiz&#32;6'>Wiz 6</option>
<option value='Sor/Wiz&#32;7' label='Sor/Wiz&#32;7'>Sor/Wiz 7</option>
<option value='Sor/Wiz&#32;8' label='Sor/Wiz&#32;8'>Sor/Wiz 8</option>
<option value='Sor&#32;8' label='Sor&#32;8'>Sor 8</option>
<option value='Sor/Wiz&#32;9' label='Sor/Wiz&#32;9'>Sor/Wiz 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Vassal of Bahamut'><option value='Vassal&#32;of&#32;Bahamut&#32;1' label='Vassal&#32;of&#32;Bahamut&#32;1'>Vassal of Bahamut 1</option>
<option value='Vassal&#32;of&#32;Bahamut&#32;2' label='Vassal&#32;of&#32;Bahamut&#32;2'>Vassal of Bahamut 2</option>
<option value='Vassal&#32;of&#32;Bahamut&#32;3' label='Vassal&#32;of&#32;Bahamut&#32;3'>Vassal of Bahamut 3</option>
<option value='Vassal&#32;of&#32;Bahamut&#32;4' label='Vassal&#32;of&#32;Bahamut&#32;4'>Vassal of Bahamut 4</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Warmage'><option value='Wmg&#32;0' label='Wmg&#32;0'>Wmg 0</option>
<option value='Wmg&#32;1' label='Wmg&#32;1'>Wmg 1</option>
<option value='Wmg&#32;2' label='Wmg&#32;2'>Wmg 2</option>
<option value='Wmg&#32;3' label='Wmg&#32;3'>Wmg 3</option>
<option value='Wmg&#32;4' label='Wmg&#32;4'>Wmg 4</option>
<option value='Wmg&#32;5' label='Wmg&#32;5'>Wmg 5</option>
<option value='Wmg&#32;6' label='Wmg&#32;6'>Wmg 6</option>
<option value='Wmg&#32;7' label='Wmg&#32;7'>Wmg 7</option>
<option value='Wmg&#32;8' label='Wmg&#32;8'>Wmg 8</option>
<option value='Wmg&#32;9' label='Wmg&#32;9'>Wmg 9</option>
</optgroup>
<optgroup class='TopGroupLabel' label='Wu jen'><option value='Wuj&#32;0' label='Wuj&#32;0'>Wuj 0</option>
<option value='Wuj&#32;1' label='Wuj&#32;1'>Wuj 1</option>
<option value='Wuj&#32;2' label='Wuj&#32;2'>Wuj 2</option>
<option value='Wuj&#32;3' label='Wuj&#32;3'>Wuj 3</option>
<option value='Wuj&#32;4' label='Wuj&#32;4'>Wuj 4</option>
<option value='Wuj&#32;5' label='Wuj&#32;5'>Wuj 5</option>
<option value='Wuj&#32;6' label='Wuj&#32;6'>Wuj 6</option>
<option value='Wuj&#32;7' label='Wuj&#32;7'>Wuj 7</option>
<option value='Wuj&#32;8' label='Wuj&#32;8'>Wuj 8</option>
<option value='Wuj&#32;9' label='Wuj&#32;9'>Wuj 9</option>
</optgroup>
</select><input type='hidden' name='OldLevels' value=''></td>

</TR>
<TR id='ROW_Components'><th colspan='1'><label for='Components' title=''>Has Any of these components:</label></th><td colspan='1'><table border='0'><tr><td>
<input type='checkbox' id='Components0' name='Components' value='V' ><label for='Components0'> Verbal</label><BR></td><td>
<input type='checkbox' id='Components1' name='Components' value='S' ><label for='Components1'> Somatic</label><BR></td><td>
<input type='checkbox' id='Components2' name='Components' value='M' ><label for='Components2'> Material</label><BR></td><td>
<input type='checkbox' id='Components3' name='Components' value='F' ><label for='Components3'> Spell Focus</label><BR></td><td>
<input type='checkbox' id='Components4' name='Components' value='DF' ><label for='Components4'> Divine Focus</label><BR></td></tr><tr><td>
<input type='checkbox' id='Components5' name='Components' value='XP' ><label for='Components5'> Experience</label><BR></td><td>
<input type='checkbox' id='Components6' name='Components' value='Location' ><label for='Components6'> Location</label><BR></td><td>
<input type='checkbox' id='Components7' name='Components' value='Breath' ><label for='Components7'> Breath</label><BR></td><td>
<input type='checkbox' id='Components8' name='Components' value='Abstinence' ><label for='Components8'> Abstinence</label><BR></td><td>
<input type='checkbox' id='Components9' name='Components' value='Archon' ><label for='Components9'> Archon</label><BR></td></tr><tr><td>
<input type='checkbox' id='Components10' name='Components' value='Celestial' ><label for='Components10'> Celestial</label><BR></td><td>
<input type='checkbox' id='Components11' name='Components' value='Eladrin' ><label for='Components11'> Eladrin</label><BR></td><td>
<input type='checkbox' id='Components12' name='Components' value='Guardinal' ><label for='Components12'> Guardinal</label><BR></td><td>
<input type='checkbox' id='Components13' name='Components' value='Sacrifice' ><label for='Components13'> Sacrifice</label><BR></td><td>
<input type='checkbox' id='Components14' name='Components' value='Corrupt' ><label for='Components14'> Corrupt</label><BR></td></tr><tr><td>
<input type='checkbox' id='Components15' name='Components' value='Demon' ><label for='Components15'> Demon</label><BR></td><td>
<input type='checkbox' id='Components16' name='Components' value='Devil' ><label for='Components16'> Devil</label><BR></td><td>
<input type='checkbox' id='Components17' name='Components' value='Disease' ><label for='Components17'> Disease</label><BR></td><td>
<input type='checkbox' id='Components18' name='Components' value='Drug' ><label for='Components18'> Drug</label><BR></td><td>
<input type='checkbox' id='Components19' name='Components' value='Fiend' ><label for='Components19'> Fiend</label><BR></td></tr><tr><td>
<input type='checkbox' id='Components20' name='Components' value='Soul' ><label for='Components20'> Soul</label><BR></td><td>
<input type='checkbox' id='Components21' name='Components' value='Undead' ><label for='Components21'> Undead</label><BR></td><td>
<input type='checkbox' id='Components22' name='Components' value='Coldfire' ><label for='Components22'> Coldfire</label><BR></td><td>
<input type='checkbox' id='Components23' name='Components' value='Frostfell' ><label for='Components23'> Frostfell</label><BR></td></tr></table><input type='hidden' name='OldComponents' value=''></td>

</TR>
<TR id='ROW_AllComponents'><th colspan='1'><label for='AllComponents' title=''>Has All of these components:</label></th><td colspan='1'><table border='0'><tr><td>
<input type='checkbox' id='AllComponents0' name='AllComponents' value='V' ><label for='AllComponents0'> Verbal</label><BR></td><td>
<input type='checkbox' id='AllComponents1' name='AllComponents' value='S' ><label for='AllComponents1'> Somatic</label><BR></td><td>
<input type='checkbox' id='AllComponents2' name='AllComponents' value='M' ><label for='AllComponents2'> Material</label><BR></td><td>
<input type='checkbox' id='AllComponents3' name='AllComponents' value='F' ><label for='AllComponents3'> Spell Focus</label><BR></td><td>
<input type='checkbox' id='AllComponents4' name='AllComponents' value='DF' ><label for='AllComponents4'> Divine Focus</label><BR></td></tr><tr><td>
<input type='checkbox' id='AllComponents5' name='AllComponents' value='XP' ><label for='AllComponents5'> Experience</label><BR></td><td>
<input type='checkbox' id='AllComponents6' name='AllComponents' value='Location' ><label for='AllComponents6'> Location</label><BR></td><td>
<input type='checkbox' id='AllComponents7' name='AllComponents' value='Breath' ><label for='AllComponents7'> Breath</label><BR></td><td>
<input type='checkbox' id='AllComponents8' name='AllComponents' value='Abstinence' ><label for='AllComponents8'> Abstinence</label><BR></td><td>
<input type='checkbox' id='AllComponents9' name='AllComponents' value='Archon' ><label for='AllComponents9'> Archon</label><BR></td></tr><tr><td>
<input type='checkbox' id='AllComponents10' name='AllComponents' value='Celestial' ><label for='AllComponents10'> Celestial</label><BR></td><td>
<input type='checkbox' id='AllComponents11' name='AllComponents' value='Eladrin' ><label for='AllComponents11'> Eladrin</label><BR></td><td>
<input type='checkbox' id='AllComponents12' name='AllComponents' value='Guardinal' ><label for='AllComponents12'> Guardinal</label><BR></td><td>
<input type='checkbox' id='AllComponents13' name='AllComponents' value='Sacrifice' ><label for='AllComponents13'> Sacrifice</label><BR></td><td>
<input type='checkbox' id='AllComponents14' name='AllComponents' value='Corrupt' ><label for='AllComponents14'> Corrupt</label><BR></td></tr><tr><td>
<input type='checkbox' id='AllComponents15' name='AllComponents' value='Demon' ><label for='AllComponents15'> Demon</label><BR></td><td>
<input type='checkbox' id='AllComponents16' name='AllComponents' value='Devil' ><label for='AllComponents16'> Devil</label><BR></td><td>
<input type='checkbox' id='AllComponents17' name='AllComponents' value='Disease' ><label for='AllComponents17'> Disease</label><BR></td><td>
<input type='checkbox' id='AllComponents18' name='AllComponents' value='Drug' ><label for='AllComponents18'> Drug</label><BR></td><td>
<input type='checkbox' id='AllComponents19' name='AllComponents' value='Fiend' ><label for='AllComponents19'> Fiend</label><BR></td></tr><tr><td>
<input type='checkbox' id='AllComponents20' name='AllComponents' value='Soul' ><label for='AllComponents20'> Soul</label><BR></td><td>
<input type='checkbox' id='AllComponents21' name='AllComponents' value='Undead' ><label for='AllComponents21'> Undead</label><BR></td><td>
<input type='checkbox' id='AllComponents22' name='AllComponents' value='Coldfire' ><label for='AllComponents22'> Coldfire</label><BR></td><td>
<input type='checkbox' id='AllComponents23' name='AllComponents' value='Frostfell' ><label for='AllComponents23'> Frostfell</label><BR></td></tr></table><input type='hidden' name='OldAllComponents' value=''></td>

</TR>
<TR id='ROW_NoComponents'><th colspan='1'><label for='NoComponents' title=''>Does not have these components</label></th><td colspan='1'><table border='0'><tr><td>
<input type='checkbox' id='NoComponents0' name='NoComponents' value='V' ><label for='NoComponents0'> Verbal</label><BR></td><td>
<input type='checkbox' id='NoComponents1' name='NoComponents' value='S' ><label for='NoComponents1'> Somatic</label><BR></td><td>
<input type='checkbox' id='NoComponents2' name='NoComponents' value='M' ><label for='NoComponents2'> Material</label><BR></td><td>
<input type='checkbox' id='NoComponents3' name='NoComponents' value='F' ><label for='NoComponents3'> Spell Focus</label><BR></td><td>
<input type='checkbox' id='NoComponents4' name='NoComponents' value='DF' ><label for='NoComponents4'> Divine Focus</label><BR></td></tr><tr><td>
<input type='checkbox' id='NoComponents5' name='NoComponents' value='XP' ><label for='NoComponents5'> Experience</label><BR></td><td>
<input type='checkbox' id='NoComponents6' name='NoComponents' value='Location' ><label for='NoComponents6'> Location</label><BR></td><td>
<input type='checkbox' id='NoComponents7' name='NoComponents' value='Breath' ><label for='NoComponents7'> Breath</label><BR></td><td>
<input type='checkbox' id='NoComponents8' name='NoComponents' value='Abstinence' ><label for='NoComponents8'> Abstinence</label><BR></td><td>
<input type='checkbox' id='NoComponents9' name='NoComponents' value='Archon' ><label for='NoComponents9'> Archon</label><BR></td></tr><tr><td>
<input type='checkbox' id='NoComponents10' name='NoComponents' value='Celestial' ><label for='NoComponents10'> Celestial</label><BR></td><td>
<input type='checkbox' id='NoComponents11' name='NoComponents' value='Eladrin' ><label for='NoComponents11'> Eladrin</label><BR></td><td>
<input type='checkbox' id='NoComponents12' name='NoComponents' value='Guardinal' ><label for='NoComponents12'> Guardinal</label><BR></td><td>
<input type='checkbox' id='NoComponents13' name='NoComponents' value='Sacrifice' ><label for='NoComponents13'> Sacrifice</label><BR></td><td>
<input type='checkbox' id='NoComponents14' name='NoComponents' value='Corrupt' ><label for='NoComponents14'> Corrupt</label><BR></td></tr><tr><td>
<input type='checkbox' id='NoComponents15' name='NoComponents' value='Demon' ><label for='NoComponents15'> Demon</label><BR></td><td>
<input type='checkbox' id='NoComponents16' name='NoComponents' value='Devil' ><label for='NoComponents16'> Devil</label><BR></td><td>
<input type='checkbox' id='NoComponents17' name='NoComponents' value='Disease' ><label for='NoComponents17'> Disease</label><BR></td><td>
<input type='checkbox' id='NoComponents18' name='NoComponents' value='Drug' ><label for='NoComponents18'> Drug</label><BR></td><td>
<input type='checkbox' id='NoComponents19' name='NoComponents' value='Fiend' ><label for='NoComponents19'> Fiend</label><BR></td></tr><tr><td>
<input type='checkbox' id='NoComponents20' name='NoComponents' value='Soul' ><label for='NoComponents20'> Soul</label><BR></td><td>
<input type='checkbox' id='NoComponents21' name='NoComponents' value='Undead' ><label for='NoComponents21'> Undead</label><BR></td><td>
<input type='checkbox' id='NoComponents22' name='NoComponents' value='Coldfire' ><label for='NoComponents22'> Coldfire</label><BR></td><td>
<input type='checkbox' id='NoComponents23' name='NoComponents' value='Frostfell' ><label for='NoComponents23'> Frostfell</label><BR></td></tr></table><input type='hidden' name='OldNoComponents' value=''></td>

</TR>
<th colspan='1'><label for='CastingTime' title=''>Has Any of these Casting Times</label></th><td colspan='1'><table border='0'><tr><td>
<input type='checkbox' id='CastingTime0' name='CastingTime' value='1&#32;day' ><label for='CastingTime0'> 1 day</label><BR></td><td>
<input type='checkbox' id='CastingTime1' name='CastingTime' value='1&#32;free&#32;action' ><label for='CastingTime1'> 1 free action</label><BR></td><td>
<input type='checkbox' id='CastingTime2' name='CastingTime' value='1&#32;hour' ><label for='CastingTime2'> 1 hour</label><BR></td></tr><tr><td>
<input type='checkbox' id='CastingTime3' name='CastingTime' value='1&#32;immediate&#32;action' ><label for='CastingTime3'> 1 immediate action</label><BR></td><td>
<input type='checkbox' id='CastingTime4' name='CastingTime' value='1&#32;minute' ><label for='CastingTime4'> 1 minute</label><BR></td><td>
<input type='checkbox' id='CastingTime5' name='CastingTime' value='1&#32;minute&#32;or&#32;longer&#59;&#32;see&#32;text' ><label for='CastingTime5'> 1 minute or longer; see text</label><BR></td></tr><tr><td>
<input type='checkbox' id='CastingTime6' name='CastingTime' value='1&#32;minute/lb.&#32;created' ><label for='CastingTime6'> 1 minute/lb. created</label><BR></td><td>
<input type='checkbox' id='CastingTime7' name='CastingTime' value='1&#32;round' ><label for='CastingTime7'> 1 round</label><BR></td><td>
<input type='checkbox' id='CastingTime8' name='CastingTime' value='1&#32;round&#59;&#32;see&#32;text' ><label for='CastingTime8'> 1 round; see text</label><BR></td></tr><tr><td>
<input type='checkbox' id='CastingTime9' name='CastingTime' value='1&#32;standard&#32;action' ><label for='CastingTime9'> 1 standard action</label><BR></td><td>
<input type='checkbox' id='CastingTime10' name='CastingTime' value='1&#32;standard&#32;action&#32;or&#32;see&#32;text' ><label for='CastingTime10'> 1 standard action or see text</label><BR></td><td>
<input type='checkbox' id='CastingTime11' name='CastingTime' value='1&#32;standard&#32;action/bomb' ><label for='CastingTime11'> 1 standard action/bomb</label><BR></td></tr><tr><td>
<input type='checkbox' id='CastingTime12' name='CastingTime' value='1&#32;standard&#32;action&#59;&#32;see&#32;text' ><label for='CastingTime12'> 1 standard action; see text</label><BR></td><td>
<input type='checkbox' id='CastingTime13' name='CastingTime' value='1&#32;swift&#32;action' ><label for='CastingTime13'> 1 swift action</label><BR></td><td>
<input type='checkbox' id='CastingTime14' name='CastingTime' value='1&#32;tenday&#32;(8&#32;hours/day)' ><label for='CastingTime14'> 1 tenday (8 hours/day)</label><BR></td></tr><tr><td>
<input type='checkbox' id='CastingTime15' name='CastingTime' value='1&#32;week&#32;(8&#32;hours/day)' ><label for='CastingTime15'> 1 week (8 hours/day)</label><BR></td><td>
<input type='checkbox' id='CastingTime16' name='CastingTime' value='10&#32;minutes' ><label for='CastingTime16'> 10 minutes</label><BR></td><td>
<input type='checkbox' id='CastingTime17' name='CastingTime' value='10&#32;minutes&#59;&#32;see&#32;text' ><label for='CastingTime17'> 10 minutes; see text</label><BR></td></tr><tr><td>
<input type='checkbox' id='CastingTime18' name='CastingTime' value='12&#32;hours' ><label for='CastingTime18'> 12 hours</label><BR></td><td>
<input type='checkbox' id='CastingTime19' name='CastingTime' value='15&#32;minutes' ><label for='CastingTime19'> 15 minutes</label><BR></td><td>
<input type='checkbox' id='CastingTime20' name='CastingTime' value='2&#32;minutes' ><label for='CastingTime20'> 2 minutes</label><BR></td></tr><tr><td>
<input type='checkbox' id='CastingTime21' name='CastingTime' value='2&#32;rounds' ><label for='CastingTime21'> 2 rounds</label><BR></td><td>
<input type='checkbox' id='CastingTime22' name='CastingTime' value='3&#32;full&#32;rounds' ><label for='CastingTime22'> 3 full rounds</label><BR></td><td>
<input type='checkbox' id='CastingTime23' name='CastingTime' value='3&#32;rounds' ><label for='CastingTime23'> 3 rounds</label><BR></td></tr><tr><td>
<input type='checkbox' id='CastingTime24' name='CastingTime' value='30&#32;minuets' ><label for='CastingTime24'> 30 minuets</label><BR></td><td>
<input type='checkbox' id='CastingTime25' name='CastingTime' value='30&#32;minutes' ><label for='CastingTime25'> 30 minutes</label><BR></td><td>
<input type='checkbox' id='CastingTime26' name='CastingTime' value='4&#32;rounds' ><label for='CastingTime26'> 4 rounds</label><BR></td></tr><tr><td>
<input type='checkbox' id='CastingTime27' name='CastingTime' value='6&#32;rounds' ><label for='CastingTime27'> 6 rounds</label><BR></td><td>
<input type='checkbox' id='CastingTime28' name='CastingTime' value='8&#32;hours' ><label for='CastingTime28'> 8 hours</label><BR></td><td>
<input type='checkbox' id='CastingTime29' name='CastingTime' value='See&#32;text' ><label for='CastingTime29'> See text</label><BR></td></tr></table><input type='hidden' name='OldCastingTime' value=''></td>


<TR id='ROW_Recharge'><th colspan='1'><label for='Recharge' title=''>Has Any of these Recharge Times</label></th><td colspan='1'><table border='0'><tr><td>
<input type='checkbox' id='Recharge0' name='Recharge' value='1&#32;hour' ><label for='Recharge0'> 1 hour</label><BR></td><td>
<input type='checkbox' id='Recharge1' name='Recharge' value='12&#32;hours' ><label for='Recharge1'> 12 hours</label><BR></td><td>
<input type='checkbox' id='Recharge2' name='Recharge' value='24&#32;hours' ><label for='Recharge2'> 24 hours</label><BR></td><td>
<input type='checkbox' id='Recharge3' name='Recharge' value='30&#32;minutes' ><label for='Recharge3'> 30 minutes</label><BR></td><td>
<input type='checkbox' id='Recharge4' name='Recharge' value='4&#32;hours' ><label for='Recharge4'> 4 hours</label><BR></td></tr><tr><td>
<input type='checkbox' id='Recharge5' name='Recharge' value='5&#32;minutes' ><label for='Recharge5'> 5 minutes</label><BR></td><td>
<input type='checkbox' id='Recharge6' name='Recharge' value='6&#32;hours' ><label for='Recharge6'> 6 hours</label><BR></td><td>
<input type='checkbox' id='Recharge7' name='Recharge' value='General' ><label for='Recharge7'> General</label><BR></td><td>
<input type='checkbox' id='Recharge8' name='Recharge' value='Prohibited' ><label for='Recharge8'> Prohibited</label><BR></td></tr></table><input type='hidden' name='OldRecharge' value=''></td>

</TR>
<TR id='ROW_SPELLRANGE'><th colspan='1'><label for='SPELLRANGE' title=''>Has Any of these Ranges</label></th><td colspan='1'><table border='0'><tr><td>
<input type='checkbox' id='SPELLRANGE0' name='SPELLRANGE' value='0&#32;ft.' ><label for='SPELLRANGE0'> 0 ft.</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE1' name='SPELLRANGE' value='0&#32;ft.&#59;&#32;see&#32;text' ><label for='SPELLRANGE1'> 0 ft.; see text</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE2' name='SPELLRANGE' value='1&#32;mile' ><label for='SPELLRANGE2'> 1 mile</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE3' name='SPELLRANGE' value='1&#32;mile&#32;+&#32;1&#32;mile/level' ><label for='SPELLRANGE3'> 1 mile + 1 mile/level</label><BR></td></tr><tr><td>
<input type='checkbox' id='SPELLRANGE4' name='SPELLRANGE' value='1&#32;mile/level' ><label for='SPELLRANGE4'> 1 mile/level</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE5' name='SPELLRANGE' value='1&#32;mile&#59;&#32;see&#32;text' ><label for='SPELLRANGE5'> 1 mile; see text</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE6' name='SPELLRANGE' value='10&#32;ft.' ><label for='SPELLRANGE6'> 10 ft.</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE7' name='SPELLRANGE' value='10&#32;ft./level' ><label for='SPELLRANGE7'> 10 ft./level</label><BR></td></tr><tr><td>
<input type='checkbox' id='SPELLRANGE8' name='SPELLRANGE' value='10&#32;miles&#32;+&#32;1&#32;mile/level' ><label for='SPELLRANGE8'> 10 miles + 1 mile/level</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE9' name='SPELLRANGE' value='10&#32;miles/level' ><label for='SPELLRANGE9'> 10 miles/level</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE10' name='SPELLRANGE' value='100&#32;ft.' ><label for='SPELLRANGE10'> 100 ft.</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE11' name='SPELLRANGE' value='120&#32;ft.' ><label for='SPELLRANGE11'> 120 ft.</label><BR></td></tr><tr><td>
<input type='checkbox' id='SPELLRANGE12' name='SPELLRANGE' value='15&#32;ft.' ><label for='SPELLRANGE12'> 15 ft.</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE13' name='SPELLRANGE' value='180&#32;ft.' ><label for='SPELLRANGE13'> 180 ft.</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE14' name='SPELLRANGE' value='2&#32;miles' ><label for='SPELLRANGE14'> 2 miles</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE15' name='SPELLRANGE' value='20&#32;ft.' ><label for='SPELLRANGE15'> 20 ft.</label><BR></td></tr><tr><td>
<input type='checkbox' id='SPELLRANGE16' name='SPELLRANGE' value='20&#32;ft.&#32;or&#32;60&#32;ft.' ><label for='SPELLRANGE16'> 20 ft. or 60 ft.</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE17' name='SPELLRANGE' value='20&#32;ft./level' ><label for='SPELLRANGE17'> 20 ft./level</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE18' name='SPELLRANGE' value='30&#32;ft.' ><label for='SPELLRANGE18'> 30 ft.</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE19' name='SPELLRANGE' value='40&#32;ft.' ><label for='SPELLRANGE19'> 40 ft.</label><BR></td></tr><tr><td>
<input type='checkbox' id='SPELLRANGE20' name='SPELLRANGE' value='40&#32;ft./level' ><label for='SPELLRANGE20'> 40 ft./level</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE21' name='SPELLRANGE' value='5&#32;ft.' ><label for='SPELLRANGE21'> 5 ft.</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE22' name='SPELLRANGE' value='5&#32;ft./2&#32;levels' ><label for='SPELLRANGE22'> 5 ft./2 levels</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE23' name='SPELLRANGE' value='5&#32;ft./level' ><label for='SPELLRANGE23'> 5 ft./level</label><BR></td></tr><tr><td>
<input type='checkbox' id='SPELLRANGE24' name='SPELLRANGE' value='5&#32;miles' ><label for='SPELLRANGE24'> 5 miles</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE25' name='SPELLRANGE' value='50&#32;ft.' ><label for='SPELLRANGE25'> 50 ft.</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE26' name='SPELLRANGE' value='60&#32;ft.' ><label for='SPELLRANGE26'> 60 ft.</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE27' name='SPELLRANGE' value='60&#32;ft.&#32;or&#32;1&#32;mile&#59;&#32;see&#32;text' ><label for='SPELLRANGE27'> 60 ft. or 1 mile; see text</label><BR></td></tr><tr><td>
<input type='checkbox' id='SPELLRANGE28' name='SPELLRANGE' value='80&#32;ft.' ><label for='SPELLRANGE28'> 80 ft.</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE29' name='SPELLRANGE' value='Anywhere&#32;within&#32;the&#32;area&#32;to&#32;be&#32;warded' ><label for='SPELLRANGE29'> Anywhere within the area to be warded</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE30' name='SPELLRANGE' value='Close&#32;(25&#32;ft.&#32;+&#32;5&#32;ft./2&#32;levels)' ><label for='SPELLRANGE30'> Close (25 ft. + 5 ft./2 levels)</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE31' name='SPELLRANGE' value='Close&#32;(25&#32;ft.&#32;+&#32;5&#32;ft./2&#32;levels)&#32;or&#32;see&#32;text' ><label for='SPELLRANGE31'> Close (25 ft. + 5 ft./2 levels) or see text</label><BR></td></tr><tr><td>
<input type='checkbox' id='SPELLRANGE32' name='SPELLRANGE' value='Close&#32;(25&#32;ft.&#32;+&#32;5&#32;ft./2&#32;levels)/&#32;100&#32;ft.&#59;&#32;see&#32;text' ><label for='SPELLRANGE32'> Close (25 ft. + 5 ft./2 levels)/ 100 ft.; see text</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE33' name='SPELLRANGE' value='Close&#32;(25&#32;ft.&#32;+&#32;5&#32;ft./2&#32;levels)&#59;&#32;see&#32;text' ><label for='SPELLRANGE33'> Close (25 ft. + 5 ft./2 levels); see text</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE34' name='SPELLRANGE' value='Long&#32;(400&#32;ft.&#32;+&#32;40&#32;ft./level)' ><label for='SPELLRANGE34'> Long (400 ft. + 40 ft./level)</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE35' name='SPELLRANGE' value='Long&#32;(400&#32;ft.&#32;+&#32;40&#32;ft./level)&#59;&#32;see&#32;text' ><label for='SPELLRANGE35'> Long (400 ft. + 40 ft./level); see text</label><BR></td></tr><tr><td>
<input type='checkbox' id='SPELLRANGE36' name='SPELLRANGE' value='Medium&#32;(100&#32;ft.&#32;+&#32;10&#32;ft./level)' ><label for='SPELLRANGE36'> Medium (100 ft. + 10 ft./level)</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE37' name='SPELLRANGE' value='Personal' ><label for='SPELLRANGE37'> Personal</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE38' name='SPELLRANGE' value='Personal&#32;and&#32;touch' ><label for='SPELLRANGE38'> Personal and touch</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE39' name='SPELLRANGE' value='Personal&#32;or&#32;close&#32;(25&#32;ft.&#32;+&#32;5&#32;ft./2&#32;levels)' ><label for='SPELLRANGE39'> Personal or close (25 ft. + 5 ft./2 levels)</label><BR></td></tr><tr><td>
<input type='checkbox' id='SPELLRANGE40' name='SPELLRANGE' value='Personal&#32;or&#32;touch' ><label for='SPELLRANGE40'> Personal or touch</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE41' name='SPELLRANGE' value='Personal&#59;&#32;see&#32;text' ><label for='SPELLRANGE41'> Personal; see text</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE42' name='SPELLRANGE' value='See&#32;text' ><label for='SPELLRANGE42'> See text</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE43' name='SPELLRANGE' value='Touch' ><label for='SPELLRANGE43'> Touch</label><BR></td></tr><tr><td>
<input type='checkbox' id='SPELLRANGE44' name='SPELLRANGE' value='Touch&#59;&#32;see&#32;text' ><label for='SPELLRANGE44'> Touch; see text</label><BR></td><td>
<input type='checkbox' id='SPELLRANGE45' name='SPELLRANGE' value='Unlimited' ><label for='SPELLRANGE45'> Unlimited</label><BR></td></tr></table><input type='hidden' name='OldSPELLRANGE' value=''></td>

</TR>
<TR id='ROW_EffectType'><th colspan='1'><label for='EffectType' title=''>Has Any of these Effect Types</label></th><td colspan='1'><table border='0'><tr><td>
<input type='checkbox' id='EffectType0' name='EffectType' value='Area' ><label for='EffectType0'> Area</label><BR></td><td>
<input type='checkbox' id='EffectType1' name='EffectType' value='Effect' ><label for='EffectType1'> Effect</label><BR></td><td>
<input type='checkbox' id='EffectType2' name='EffectType' value='See&#32;text' ><label for='EffectType2'> See text</label><BR></td><td>
<input type='checkbox' id='EffectType3' name='EffectType' value='Target' ><label for='EffectType3'> Target</label><BR></td></tr><tr><td>
<input type='checkbox' id='EffectType4' name='EffectType' value='Target&#32;or&#32;Area' ><label for='EffectType4'> Target or Area</label><BR></td><td>
<input type='checkbox' id='EffectType5' name='EffectType' value='Target&#32;or&#32;Targets' ><label for='EffectType5'> Target or Targets</label><BR></td><td>
<input type='checkbox' id='EffectType6' name='EffectType' value='Target/Effect' ><label for='EffectType6'> Target/Effect</label><BR></td><td>
<input type='checkbox' id='EffectType7' name='EffectType' value='Target&#59;&#32;Effect&#59;&#32;or&#32;Area' ><label for='EffectType7'> Target; Effect; or Area</label><BR></td></tr><tr><td>
<input type='checkbox' id='EffectType8' name='EffectType' value='Targets' ><label for='EffectType8'> Targets</label><BR></td></tr></table><input type='hidden' name='OldEffectType' value=''></td>

</TR>
<TR id='ROW_Effect'><th colspan='1'><label for='Effect' title=''>Effect keyword</label></th><td colspan='1'><input type='text' id='Effect' name='Effect' size = ' 50' Maxlength = '50' value='' ><input type='hidden' name='OldEffect' value=''></td>

</TR>
<th colspan='1'><label for='Duration' title=''>Has Any of these Durations</label></th><td colspan='1'>(hold ctrl down to select more than one)<br><select multiple name='Duration' size='10' id='Duration'  ><option value='' selected >Not&#32;Answered</option>
<option value='1&#32;day'>1 day</option>
<option value='1&#32;day&#32;(D)'>1 day (D)</option>
<option value='1&#32;day&#32;or&#32;until&#32;discharged'>1 day or until discharged</option>
<option value='1&#32;day/2&#32;levels&#32;(D)'>1 day/2 levels (D)</option>
<option value='1&#32;day/3&#32;levels'>1 day/3 levels</option>
<option value='1&#32;day/5&#32;&#32;levels&#59;&#32;see&#32;text'>1 day/5  levels; see text</option>
<option value='1&#32;day/level'>1 day/level</option>
<option value='1&#32;day/level&#32;(D)'>1 day/level (D)</option>
<option value='1&#32;day/level&#32;(D)&#32;plus&#32;12&#32;hours&#59;&#32;see&#32;text'>1 day/level (D) plus 12 hours; see text</option>
<option value='1&#32;day/level&#32;or&#32;permanent'>1 day/level or permanent</option>
<option value='1&#32;day/level&#32;or&#32;until&#32;discharged'>1 day/level or until discharged</option>
<option value='1&#32;day/level&#32;or&#32;until&#32;discharged&#32;(D)'>1 day/level or until discharged (D)</option>
<option value='1&#32;day/level&#32;or&#32;until&#32;expended'>1 day/level or until expended</option>
<option value='1&#32;day/level&#59;&#32;see&#32;text'>1 day/level; see text</option>
<option value='1&#32;day&#59;&#32;see&#32;text'>1 day; see text</option>
<option value='1&#32;decision&#59;&#32;see&#32;text'>1 decision; see text</option>
<option value='1&#32;full&#32;round'>1 full round</option>
<option value='1&#32;full&#32;round&#32;and&#32;1&#32;round/level&#59;&#32;see&#32;text'>1 full round and 1 round/level; see text</option>
<option value='1&#32;hour'>1 hour</option>
<option value='1&#32;hour&#32;or&#32;less'>1 hour or less</option>
<option value='1&#32;hour&#32;or&#32;until&#32;discharged'>1 hour or until discharged</option>
<option value='1&#32;hour&#32;or&#32;until&#32;expended&#59;&#32;see&#32;text'>1 hour or until expended; see text</option>
<option value='1&#32;hour&#32;plus&#32;12&#32;hours&#59;&#32;see&#32;text'>1 hour plus 12 hours; see text</option>
<option value='1&#32;hour/level'>1 hour/level</option>
<option value='1&#32;hour/level&#32;(D)'>1 hour/level (D)</option>
<option value='1&#32;hour/level&#32;(D)&#59;&#32;see&#32;text'>1 hour/level (D); see text</option>
<option value='1&#32;hour/level&#32;or&#32;1&#32;round/level&#32;(D)'>1 hour/level or 1 round/level (D)</option>
<option value='1&#32;hour/level&#32;or&#32;until&#32;completed'>1 hour/level or until completed</option>
<option value='1&#32;hour/level&#32;or&#32;until&#32;discharged'>1 hour/level or until discharged</option>
<option value='1&#32;hour/level&#32;or&#32;until&#32;discharged&#32;(D)'>1 hour/level or until discharged (D)</option>
<option value='1&#32;hour/level&#32;or&#32;until&#32;discharged&#59;&#32;see&#32;text'>1 hour/level or until discharged; see text</option>
<option value='1&#32;hour/level&#32;or&#32;until&#32;expended&#59;&#32;see&#32;text'>1 hour/level or until expended; see text</option>
<option value='1&#32;hour/level&#32;or&#32;until&#32;underlying&#32;flight&#32;effect&#32;lapses&#59;&#32;see&#32;text'>1 hour/level or until underlying flight effect lapses; see text</option>
<option value='1&#32;hour/level&#32;or&#32;until&#32;you&#32;return&#32;to&#32;your&#32;body'>1 hour/level or until you return to your body</option>
<option value='1&#32;hour/level&#59;&#32;see&#32;text&#32;(D)'>1 hour/level; see text (D)</option>
<option value='1&#32;min.'>1 min.</option>
<option value='1&#32;min.&#32;(D)'>1 min. (D)</option>
<option value='1&#32;min.&#32;+&#32;1&#32;min./level'>1 min. + 1 min./level</option>
<option value='1&#32;min./level'>1 min./level</option>
<option value='1&#32;min./level&#32;&#32;(D)&#59;&#32;see&#32;text'>1 min./level  (D); see text</option>
<option value='1&#32;min./level&#32;(D)'>1 min./level (D)</option>
<option value='1&#32;min./level&#32;(D)&#32;(fire&#32;source)&#32;or&#32;Instantaneous&#32;(creature)'>1 min./level (D) (fire source) or Instantaneous (creature)</option>
<option value='1&#32;min./level&#32;or&#32;until&#32;discharged'>1 min./level or until discharged</option>
<option value='1&#32;min./level&#32;or&#32;until&#32;discharged&#32;(D)'>1 min./level or until discharged (D)</option>
<option value='1&#32;min./level&#32;or&#32;until&#32;expended&#59;&#32;see&#32;text'>1 min./level or until expended; see text</option>
<option value='1&#32;minute&#32;or&#32;until&#32;discharged'>1 minute or until discharged</option>
<option value='1&#32;round'>1 round</option>
<option value='1&#32;round&#32;+&#32;1&#32;round/2&#32;levels'>1 round + 1 round/2 levels</option>
<option value='1&#32;round&#32;+&#32;1&#32;round/3&#32;levels'>1 round + 1 round/3 levels</option>
<option value='1&#32;round&#32;+&#32;1d10&#32;minutes'>1 round + 1d10 minutes</option>
<option value='1&#32;round&#32;and&#32;1&#32;round/3&#32;levels&#59;&#32;see&#32;text'>1 round and 1 round/3 levels; see text</option>
<option value='1&#32;round&#32;or&#32;special&#59;&#32;see&#32;text'>1 round or special; see text</option>
<option value='1&#32;round&#32;or&#32;until&#32;discharged'>1 round or until discharged</option>
<option value='1&#32;round/2&#32;levels'>1 round/2 levels</option>
<option value='1&#32;round/2&#32;levels&#32;(D)'>1 round/2 levels (D)</option>
<option value='1&#32;round/2&#32;levels&#32;(maximum&#32;5&#32;rounds)'>1 round/2 levels (maximum 5 rounds)</option>
<option value='1&#32;round/3&#32;levels'>1 round/3 levels</option>
<option value='1&#32;round/3&#32;levels,&#32;up&#32;to&#32;4&#32;rounds'>1 round/3 levels, up to 4 rounds</option>
<option value='1&#32;round/3&#32;levels&#59;&#32;see&#32;text'>1 round/3 levels; see text</option>
<option value='1&#32;round/level'>1 round/level</option>
<option value='1&#32;round/level&#32;(D)'>1 round/level (D)</option>
<option value='1&#32;round/level&#32;(D)&#32;and&#32;concentration&#32;+&#32;3&#32;rounds&#59;&#32;see&#32;text'>1 round/level (D) and concentration + 3 rounds; see text</option>
<option value='1&#32;round/level&#32;(D)&#59;&#32;see&#32;text'>1 round/level (D); see text</option>
<option value='1&#32;round/level&#32;+3d10&#32;minutes,&#32;see&#32;text'>1 round/level +3d10 minutes, see text</option>
<option value='1&#32;round/level&#32;or&#32;1&#32;hour/level&#59;&#32;see&#32;text'>1 round/level or 1 hour/level; see text</option>
<option value='1&#32;round/level&#32;or&#32;1&#32;round&#59;&#32;see&#32;text'>1 round/level or 1 round; see text</option>
<option value='1&#32;round/level&#32;or&#32;1&#32;round&#59;&#32;see&#32;text&#32;for&#32;cause&#32;fear'>1 round/level or 1 round; see text for cause fear</option>
<option value='1&#32;round/level&#32;or&#32;until&#32;all&#32;beams&#32;are&#32;exhausted'>1 round/level or until all beams are exhausted</option>
<option value='1&#32;round/level&#32;or&#32;until&#32;discharged&#32;(D)'>1 round/level or until discharged (D)</option>
<option value='1&#32;round/level&#32;or&#32;until&#32;discharged,&#32;whichever&#32;comes&#32;first'>1 round/level or until discharged, whichever comes first</option>
<option value='1&#32;round/level&#59;&#32;see&#32;text'>1 round/level; see text</option>
<option value='1&#32;round&#59;&#32;see&#32;text'>1 round; see text</option>
<option value='1&#32;usage/2&#32;levels'>1 usage/2 levels</option>
<option value='1&#32;week/level&#32;(D)'>1 week/level (D)</option>
<option value='1&#32;year'>1 year</option>
<option value='10&#32;min.'>10 min.</option>
<option value='10&#32;min.&#32;(D)'>10 min. (D)</option>
<option value='10&#32;min.&#32;or&#32;until&#32;discharged'>10 min. or until discharged</option>
<option value='10&#32;min./level'>10 min./level</option>
<option value='10&#32;min./level&#32;(D)'>10 min./level (D)</option>
<option value='10&#32;min./level&#32;(D)&#32;or&#32;Instantaneous'>10 min./level (D) or Instantaneous</option>
<option value='10&#32;min./level&#32;(D)&#32;or&#32;until&#32;discharged'>10 min./level (D) or until discharged</option>
<option value='10&#32;min./level&#32;(D)&#32;or&#32;until&#32;expended&#59;&#32;see&#32;text'>10 min./level (D) or until expended; see text</option>
<option value='10&#32;min./level&#32;or&#32;until&#32;discharged'>10 min./level or until discharged</option>
<option value='10&#32;min./level&#32;or&#32;until&#32;expended'>10 min./level or until expended</option>
<option value='10&#32;min./level&#32;or&#32;until&#32;used'>10 min./level or until used</option>
<option value='10&#32;min./level&#59;&#32;see&#32;text'>10 min./level; see text</option>
<option value='10&#32;min.&#59;&#32;see&#32;text'>10 min.; see text</option>
<option value='10&#32;rounds&#32;+1&#32;round/level&#32;(max&#32;15&#32;rounds)'>10 rounds +1 round/level (max 15 rounds)</option>
<option value='10&#32;rounds&#32;+1&#32;round/level&#32;(max&#32;25&#32;rounds)'>10 rounds +1 round/level (max 25 rounds)</option>
<option value='10&#32;rounds&#32;+1&#32;round/level&#32;(max&#32;35&#32;rounds)'>10 rounds +1 round/level (max 35 rounds)</option>
<option value='10&#32;rounds&#32;+1&#32;round/level&#32;(max&#32;40&#32;rounds)'>10 rounds +1 round/level (max 40 rounds)</option>
<option value='12&#32;hours'>12 hours</option>
<option value='12&#32;hours&#32;(D)'>12 hours (D)</option>
<option value='1d4&#32;rounds'>1d4 rounds</option>
<option value='1d4&#32;rounds&#32;or&#32;1&#32;round&#59;&#32;see&#32;text'>1d4 rounds or 1 round; see text</option>
<option value='1d4+1&#32;rounds'>1d4+1 rounds</option>
<option value='1d4+1&#32;rounds&#32;(apparent&#32;time)&#59;&#32;see&#32;text'>1d4+1 rounds (apparent time); see text</option>
<option value='1d4+1&#32;rounds,&#32;or&#32;1d4+1&#32;rounds&#32;after&#32;creatures&#32;leave&#32;the&#32;smoke&#32;cloud&#59;&#32;see&#32;text'>1d4+1 rounds, or 1d4+1 rounds after creatures leave the smoke cloud; see text</option>
<option value='1d6&#32;rounds&#59;&#32;see&#32;text'>1d6 rounds; see text</option>
<option value='1d6+2&#32;rounds'>1d6+2 rounds</option>
<option value='2&#32;days/level'>2 days/level</option>
<option value='2&#32;days/level&#32;or&#32;until&#32;discharged'>2 days/level or until discharged</option>
<option value='2&#32;hours/level'>2 hours/level</option>
<option value='2&#32;hours/level&#32;(D)'>2 hours/level (D)</option>
<option value='2&#32;hours/level&#59;&#32;see&#32;text'>2 hours/level; see text</option>
<option value='2&#32;min./level&#32;(D)'>2 min./level (D)</option>
<option value='2&#32;rounds'>2 rounds</option>
<option value='2&#32;rounds/level'>2 rounds/level</option>
<option value='2&#32;rounds/level&#32;up&#32;to&#32;1&#32;minute&#32;or&#32;until&#32;discharged'>2 rounds/level up to 1 minute or until discharged</option>
<option value='2d4&#32;hours'>2d4 hours</option>
<option value='2d4&#32;rounds&#32;(D)'>2d4 rounds (D)</option>
<option value='3&#32;rounds'>3 rounds</option>
<option value='3&#32;rounds&#32;(D)'>3 rounds (D)</option>
<option value='3&#32;rounds/level'>3 rounds/level</option>
<option value='30&#32;minutes&#32;and&#32;2d6&#32;rounds&#59;&#32;see&#32;text'>30 minutes and 2d6 rounds; see text</option>
<option value='30&#32;minutes&#32;or&#32;until&#32;discharged'>30 minutes or until discharged</option>
<option value='3d6&#32;min.'>3d6 min.</option>
<option value='4&#32;hours/level&#32;(D)'>4 hours/level (D)</option>
<option value='4&#32;hours/level&#32;or&#32;until&#32;discharged'>4 hours/level or until discharged</option>
<option value='4&#32;rounds'>4 rounds</option>
<option value='4d12&#32;hours&#59;&#32;see&#32;text'>4d12 hours; see text</option>
<option value='4d12&#32;weeks'>4d12 weeks</option>
<option value='5&#32;min.&#32;+&#32;1&#32;min./level'>5 min. + 1 min./level</option>
<option value='5&#32;min./level&#32;(D)'>5 min./level (D)</option>
<option value='5&#32;rounds&#32;or&#32;less&#59;&#32;see&#32;text'>5 rounds or less; see text</option>
<option value='6&#32;hours/level'>6 hours/level</option>
<option value='6&#32;rounds'>6 rounds</option>
<option value='60&#32;days&#32;or&#32;until&#32;discharged'>60 days or until discharged</option>
<option value='7&#32;days&#32;or&#32;7&#32;months&#32;(D)&#59;&#32;see&#32;text'>7 days or 7 months (D); see text</option>
<option value='7&#32;rounds'>7 rounds</option>
<option value='8&#32;hours'>8 hours</option>
<option value='8&#32;hours&#32;(D)'>8 hours (D)</option>
<option value='8&#32;hours/level&#32;(D)'>8 hours/level (D)</option>
<option value='8&#32;hours/level&#32;or&#32;until&#32;discharged'>8 hours/level or until discharged</option>
<option value='Concentration'>Concentration</option>
<option value='Concentration&#32;(maximum&#32;10&#32;rounds)&#32;(D)'>Concentration (maximum 10 rounds) (D)</option>
<option value='Concentration&#32;(maximum&#32;of&#32;1&#32;round/level)&#32;+&#32;1&#32;round'>Concentration (maximum of 1 round/level) + 1 round</option>
<option value='Concentration&#32;(up&#32;to&#32;1&#32;round/level)&#32;or&#32;instantaneous&#59;&#32;see&#32;text'>Concentration (up to 1 round/level) or instantaneous; see text</option>
<option value='Concentration&#32;(up&#32;to&#32;1&#32;round/level)&#32;plus&#32;1&#32;round'>Concentration (up to 1 round/level) plus 1 round</option>
<option value='Concentration&#32;(up&#32;to&#32;3&#32;rounds)'>Concentration (up to 3 rounds)</option>
<option value='Concentration&#32;(up&#32;to&#32;4&#32;rounds)'>Concentration (up to 4 rounds)</option>
<option value='Concentration&#32;+&#32;1&#32;hour/level&#32;(D)'>Concentration + 1 hour/level (D)</option>
<option value='Concentration&#32;+&#32;1&#32;round/level'>Concentration + 1 round/level</option>
<option value='Concentration&#32;+&#32;1&#32;round/level&#32;(D)'>Concentration + 1 round/level (D)</option>
<option value='Concentration&#32;+&#32;1d4&#32;rounds'>Concentration + 1d4 rounds</option>
<option value='Concentration&#32;+&#32;2&#32;rounds'>Concentration + 2 rounds</option>
<option value='Concentration&#32;+&#32;3&#32;rounds'>Concentration + 3 rounds</option>
<option value='Concentration&#32;+&#32;4&#32;rounds'>Concentration + 4 rounds</option>
<option value='Concentration&#32;+&#32;5&#32;rounds,&#32;up&#32;to&#32;1&#32;min./level&#32;(D)'>Concentration + 5 rounds, up to 1 min./level (D)</option>
<option value='Concentration,&#32;up&#32;to&#32;1&#32;min./level'>Concentration, up to 1 min./level</option>
<option value='Concentration,&#32;up&#32;to&#32;1&#32;min./level&#32;(D)'>Concentration, up to 1 min./level (D)</option>
<option value='Concentration,&#32;up&#32;to&#32;1&#32;round/level'>Concentration, up to 1 round/level</option>
<option value='Concentration,&#32;up&#32;to&#32;1&#32;round/level&#32;(D)'>Concentration, up to 1 round/level (D)</option>
<option value='Concentration,&#32;up&#32;to&#32;10&#32;min./level&#32;(D)'>Concentration, up to 10 min./level (D)</option>
<option value='Concentration,&#32;up&#32;to&#32;20&#32;minutes&#59;&#32;see&#32;text'>Concentration, up to 20 minutes; see text</option>
<option value='Concentration&#59;&#32;see&#32;text'>Concentration; see text</option>
<option value='Instantaneous'>Instantaneous</option>
<option value='Instantaneous&#32;(1&#32;round)&#59;&#32;see&#32;text'>Instantaneous (1 round); see text</option>
<option value='Instantaneous&#32;(1d4&#32;rounds)&#59;&#32;see&#32;text'>Instantaneous (1d4 rounds); see text</option>
<option value='Instantaneous&#32;(1d6&#32;rounds)&#59;&#32;see&#32;text'>Instantaneous (1d6 rounds); see text</option>
<option value='Instantaneous&#32;and&#32;1&#32;hour/level&#59;&#32;see&#32;text'>Instantaneous and 1 hour/level; see text</option>
<option value='Instantaneous&#32;and&#32;1&#32;round/level&#59;&#32;see&#32;text'>Instantaneous and 1 round/level; see text</option>
<option value='Instantaneous&#32;and&#32;1&#32;round&#59;&#32;see&#32;text'>Instantaneous and 1 round; see text</option>
<option value='Instantaneous&#32;and&#32;10&#32;min./level&#59;&#32;see&#32;text'>Instantaneous and 10 min./level; see text</option>
<option value='Instantaneous&#32;or&#32;1&#32;min./level'>Instantaneous or 1 min./level</option>
<option value='Instantaneous&#32;or&#32;1&#32;round/level&#59;&#32;see&#32;text'>Instantaneous or 1 round/level; see text</option>
<option value='Instantaneous&#32;or&#32;concentration&#32;(up&#32;to&#32;1&#32;round/level)&#59;&#32;see&#32;text'>Instantaneous or concentration (up to 1 round/level); see text</option>
<option value='Instantaneous&#32;or&#32;up&#32;to&#32;4&#32;rounds&#59;&#32;see&#32;text'>Instantaneous or up to 4 rounds; see text</option>
<option value='Instantaneous/1&#32;hour&#59;&#32;see&#32;text'>Instantaneous/1 hour; see text</option>
<option value='Instantaneous/10&#32;minutes&#32;per&#32;HD&#32;of&#32;subject&#59;&#32;see&#32;text'>Instantaneous/10 minutes per HD of subject; see text</option>
<option value='Instantaneous/24&#32;hours&#59;&#32;see&#32;text'>Instantaneous/24 hours; see text</option>
<option value='Instantaneous&#59;&#32;see&#32;text'>Instantaneous; see text</option>
<option value='No&#32;more&#32;than&#32;1&#32;hour/level&#32;or&#32;until&#32;discharged&#32;(destination&#32;is&#32;reached)'>No more than 1 hour/level or until discharged (destination is reached)</option>
<option value='Performance&#32;+&#32;1&#32;hour&#32;or&#32;until&#32;discharged&#59;&#32;see&#32;text'>Performance + 1 hour or until discharged; see text</option>
<option value='Permanent'>Permanent</option>
<option value='Permanent&#32;(D)'>Permanent (D)</option>
<option value='Permanent&#32;or&#32;until&#32;discharged&#59;&#32;until&#32;released&#32;or&#32;1d4&#32;days&#32;+&#32;1&#32;day/level&#59;&#32;see&#32;text'>Permanent or until discharged; until released or 1d4 days + 1 day/level; see text</option>
<option value='Permanent&#32;until&#32;discharged'>Permanent until discharged</option>
<option value='Permanent&#32;until&#32;discharged&#32;(D)'>Permanent until discharged (D)</option>
<option value='Permanent&#32;until&#32;triggered'>Permanent until triggered</option>
<option value='Permanent&#32;until&#32;triggered,&#32;then&#32;1&#32;round/level'>Permanent until triggered, then 1 round/level</option>
<option value='Permanent&#32;until&#32;triggered&#59;&#32;6&#32;rounds'>Permanent until triggered; 6 rounds</option>
<option value='Permanent&#59;&#32;see&#32;text'>Permanent; see text</option>
<option value='See&#32;text'>See text</option>
<option value='See&#32;text&#32;(D)'>See text (D)</option>
<option value='Until&#32;landing&#32;or&#32;1&#32;round/level'>Until landing or 1 round/level</option>
<option value='Until&#32;triggered&#32;or&#32;broken'>Until triggered or broken</option>
<option value='Up&#32;to&#32;1&#32;round/level'>Up to 1 round/level</option>
<option value='Up&#32;to&#32;12&#32;hours'>Up to 12 hours</option>
</select><input type='hidden' name='OldDuration' value=''></td>


<TR id='ROW_SavingThrow'><th colspan='1'><label for='SavingThrow' title=''>Saving Throw involves any of these</label></th><td colspan='1'><table border='0'><tr><td><input type='checkbox' id='SavingThrow0' name='SavingThrow' value='will' ><label for='SavingThrow0'> Will</label><BR></td><td><input type='checkbox' id='SavingThrow2' name='SavingThrow' value='fort' ><label for='SavingThrow2'> Fortitude</label><BR></td><td><input type='checkbox' id='SavingThrow4' name='SavingThrow' value='reflex' ><label for='SavingThrow4'> Reflex</label><BR></td></tr><tr><td><input type='checkbox' id='SavingThrow6' name='SavingThrow' value='half' ><label for='SavingThrow6'> half</label><BR></td><td><input type='checkbox' id='SavingThrow8' name='SavingThrow' value='partial' ><label for='SavingThrow8'> partial</label><BR></td><td><input type='checkbox' id='SavingThrow10' name='SavingThrow' value='negates' ><label for='SavingThrow10'> negates</label><BR></td></tr><tr><td><input type='checkbox' id='SavingThrow12' name='SavingThrow' value='harmless' ><label for='SavingThrow12'> harmless</label><BR></td><td><input type='checkbox' id='SavingThrow14' name='SavingThrow' value='object' ><label for='SavingThrow14'> object</label><BR></td><td><input type='checkbox' id='SavingThrow16' name='SavingThrow' value='disbelief' ><label for='SavingThrow16'> disbelief</label><BR></td></tr><tr><td><input type='checkbox' id='SavingThrow18' name='SavingThrow' value='text' ><label for='SavingThrow18'> see text</label><BR></td><td><input type='checkbox' id='SavingThrow20' name='SavingThrow' value='none' ><label for='SavingThrow20'> None</label><BR></td></tr></table><input type='hidden' name='OldSavingThrow' value=''></td>

</TR>
<TR id='ROW_AllSavingThrow'><th colspan='1'><label for='AllSavingThrow' title=''>Saving Throw involves all of these</label></th><td colspan='1'><table border='0'><tr><td><input type='checkbox' id='AllSavingThrow0' name='AllSavingThrow' value='will' ><label for='AllSavingThrow0'> Will</label><BR></td><td><input type='checkbox' id='AllSavingThrow2' name='AllSavingThrow' value='fort' ><label for='AllSavingThrow2'> Fortitude</label><BR></td><td><input type='checkbox' id='AllSavingThrow4' name='AllSavingThrow' value='reflex' ><label for='AllSavingThrow4'> Reflex</label><BR></td></tr><tr><td><input type='checkbox' id='AllSavingThrow6' name='AllSavingThrow' value='half' ><label for='AllSavingThrow6'> half</label><BR></td><td><input type='checkbox' id='AllSavingThrow8' name='AllSavingThrow' value='partial' ><label for='AllSavingThrow8'> partial</label><BR></td><td><input type='checkbox' id='AllSavingThrow10' name='AllSavingThrow' value='negates' ><label for='AllSavingThrow10'> negates</label><BR></td></tr><tr><td><input type='checkbox' id='AllSavingThrow12' name='AllSavingThrow' value='harmless' ><label for='AllSavingThrow12'> harmless</label><BR></td><td><input type='checkbox' id='AllSavingThrow14' name='AllSavingThrow' value='object' ><label for='AllSavingThrow14'> object</label><BR></td><td><input type='checkbox' id='AllSavingThrow16' name='AllSavingThrow' value='disbelief' ><label for='AllSavingThrow16'> disbelief</label><BR></td></tr><tr><td><input type='checkbox' id='AllSavingThrow18' name='AllSavingThrow' value='text' ><label for='AllSavingThrow18'> see text</label><BR></td><td><input type='checkbox' id='AllSavingThrow20' name='AllSavingThrow' value='none' ><label for='AllSavingThrow20'> None</label><BR></td></tr></table><input type='hidden' name='OldAllSavingThrow' value=''></td>

</TR>
<TR id='ROW_NoSavingThrow'><th colspan='1'><label for='NoSavingThrow' title=''>Saving Throw involves none of these</label></th><td colspan='1'><table border='0'><tr><td><input type='checkbox' id='NoSavingThrow0' name='NoSavingThrow' value='will' ><label for='NoSavingThrow0'> Will</label><BR></td><td><input type='checkbox' id='NoSavingThrow2' name='NoSavingThrow' value='fort' ><label for='NoSavingThrow2'> Fortitude</label><BR></td><td><input type='checkbox' id='NoSavingThrow4' name='NoSavingThrow' value='reflex' ><label for='NoSavingThrow4'> Reflex</label><BR></td></tr><tr><td><input type='checkbox' id='NoSavingThrow6' name='NoSavingThrow' value='half' ><label for='NoSavingThrow6'> half</label><BR></td><td><input type='checkbox' id='NoSavingThrow8' name='NoSavingThrow' value='partial' ><label for='NoSavingThrow8'> partial</label><BR></td><td><input type='checkbox' id='NoSavingThrow10' name='NoSavingThrow' value='negates' ><label for='NoSavingThrow10'> negates</label><BR></td></tr><tr><td><input type='checkbox' id='NoSavingThrow12' name='NoSavingThrow' value='harmless' ><label for='NoSavingThrow12'> harmless</label><BR></td><td><input type='checkbox' id='NoSavingThrow14' name='NoSavingThrow' value='object' ><label for='NoSavingThrow14'> object</label><BR></td><td><input type='checkbox' id='NoSavingThrow16' name='NoSavingThrow' value='disbelief' ><label for='NoSavingThrow16'> disbelief</label><BR></td></tr><tr><td><input type='checkbox' id='NoSavingThrow18' name='NoSavingThrow' value='text' ><label for='NoSavingThrow18'> see text</label><BR></td><td><input type='checkbox' id='NoSavingThrow20' name='NoSavingThrow' value='none' ><label for='NoSavingThrow20'> None</label><BR></td></tr></table><input type='hidden' name='OldNoSavingThrow' value=''></td>

</TR>
<TR id='ROW_Resistance'><th colspan='1'><label for='Resistance' title=''>Resistance involves any of these</label></th><td colspan='1'><table border='0'><tr><td><input type='checkbox' id='Resistance0' name='Resistance' value='yes' ><label for='Resistance0'> Yes</label><BR></td><td><input type='checkbox' id='Resistance2' name='Resistance' value='no' ><label for='Resistance2'> No</label><BR></td><td><input type='checkbox' id='Resistance4' name='Resistance' value='harmless' ><label for='Resistance4'> harmless</label><BR></td><td><input type='checkbox' id='Resistance6' name='Resistance' value='object' ><label for='Resistance6'> object</label><BR></td><td><input type='checkbox' id='Resistance8' name='Resistance' value='text' ><label for='Resistance8'> see text</label><BR></td></tr></table><input type='hidden' name='OldResistance' value=''></td>

</TR>
<TR id='ROW_AllResistance'><th colspan='1'><label for='AllResistance' title=''>Resistance involves all of these</label></th><td colspan='1'><table border='0'><tr><td><input type='checkbox' id='AllResistance0' name='AllResistance' value='yes' ><label for='AllResistance0'> Yes</label><BR></td><td><input type='checkbox' id='AllResistance2' name='AllResistance' value='no' ><label for='AllResistance2'> No</label><BR></td><td><input type='checkbox' id='AllResistance4' name='AllResistance' value='harmless' ><label for='AllResistance4'> harmless</label><BR></td><td><input type='checkbox' id='AllResistance6' name='AllResistance' value='object' ><label for='AllResistance6'> object</label><BR></td><td><input type='checkbox' id='AllResistance8' name='AllResistance' value='text' ><label for='AllResistance8'> see text</label><BR></td></tr></table><input type='hidden' name='OldAllResistance' value=''></td>

</TR>
<TR id='ROW_NoResistance'><th colspan='1'><label for='NoResistance' title=''>Resistance involves none of these</label></th><td colspan='1'><table border='0'><tr><td><input type='checkbox' id='NoResistance0' name='NoResistance' value='yes' ><label for='NoResistance0'> Yes</label><BR></td><td><input type='checkbox' id='NoResistance2' name='NoResistance' value='no' ><label for='NoResistance2'> No</label><BR></td><td><input type='checkbox' id='NoResistance4' name='NoResistance' value='harmless' ><label for='NoResistance4'> harmless</label><BR></td><td><input type='checkbox' id='NoResistance6' name='NoResistance' value='object' ><label for='NoResistance6'> object</label><BR></td><td><input type='checkbox' id='NoResistance8' name='NoResistance' value='text' ><label for='NoResistance8'> see text</label><BR></td></tr></table><input type='hidden' name='OldNoResistance' value=''></td>

</TR>
<TR id='ROW_ShortDescription'><th colspan='1'><label for='ShortDescription' title=''>Short Description keyword</label></th><td colspan='1'><input type='text' id='ShortDescription' name='ShortDescription' size = ' 50' Maxlength = '50' value='' ><input type='hidden' name='OldShortDescription' value=''></td>

</TR>
<TR id='ROW_MediumDescription'><th colspan='1'><label for='MediumDescription' title=''>Medium Description keyword</label></th><td colspan='1'><input type='text' id='MediumDescription' name='MediumDescription' size = ' 50' Maxlength = '50' value='' ><input type='hidden' name='OldMediumDescription' value=''></td>

</TR>
<TR id='ROW_LongDescription'><th colspan='1'><label for='LongDescription' title=''>Full Description keyword</label></th><td colspan='1'><input type='text' id='LongDescription' name='LongDescription' size = ' 50' Maxlength = '50' value='' ><input type='hidden' name='OldLongDescription' value=''></td>

</TR>
<TR id='ROW_Materials'><th colspan='1'><label for='Materials' title=''>Material Component keyword</label></th><td colspan='1'><input type='text' id='Materials' name='Materials' size = ' 50' Maxlength = '255' value='' ><input type='hidden' name='OldMaterials' value=''></td>

</TR>
<TR id='ROW_Focus'><th colspan='1'><label for='Focus' title=''>Focus keyword</label></th><td colspan='1'><input type='text' id='Focus' name='Focus' size = ' 50' Maxlength = '255' value='' ><input type='hidden' name='OldFocus' value=''></td>

</TR>
<TR id='ROW_XP_Cost'><th colspan='1'><label for='XP_Cost' title=''>XP Cost keyword</label></th><td colspan='1'><input type='text' id='XP_Cost' name='XP_Cost' size = ' 50' Maxlength = '255' value='' ><input type='hidden' name='OldXP_Cost' value=''></td>

</TR>
<TR id='ROW_DomainType'><th colspan='1' title=''>The spell appears on</th><td colspan='1'><input type='radio' id='DomainType0' name='DomainType' value='any' ><label for='DomainType0'>Both Class Lists and Domains</label><br>
<input type='radio' id='DomainType2' name='DomainType' value='class' ><label for='DomainType2'>Class Spell Lists</label><br>
<input type='radio' id='DomainType4' name='DomainType' value='domain' ><label for='DomainType4'>Domain Lists</label><br>
<input type='hidden' name='OldDomainType' value=''></td>

</TR>
<TR id='ROW_Family_Type'><th colspan='1'><label for='Family_Type' title=''>The spell appears on any of these list types</label></th><td colspan='1'><table border='0'><tr><td>
<input type='checkbox' id='Family_Type0' name='Family_Type' value='Arcane' ><label for='Family_Type0'> Arcane</label><BR></td><td>
<input type='checkbox' id='Family_Type1' name='Family_Type' value='Divine' ><label for='Family_Type1'> Divine</label><BR></td><td>
<input type='checkbox' id='Family_Type2' name='Family_Type' value='Other' ><label for='Family_Type2'> Other</label><BR></td></tr></table><input type='hidden' name='OldFamily_Type' value=''></td>

</TR>
<TR id='ROW_Sources'><th colspan='1'><label for='Sources' title=''>From Any of these Sources</label></th><td colspan='1'><table border='0'><tr><td>
<b>3.0&#32;Dragon</b><br>
</td></tr><tr><td><input type='checkbox' id='Sources0' name='Sources' value='DA5' ><label for='Sources0'> Dragon Annual #5</label><BR></td><td>
</td></tr><tr><td><b>3.0&#32;Faerun</b><br>
</td></tr><tr><td><input type='checkbox' id='Sources1' name='Sources' value='CSQ' ><label for='Sources1'> City of the Spider Queen</label><BR></td><td>
<input type='checkbox' id='Sources2' name='Sources' value='FnP' ><label for='Sources2'> Faiths and Pantheons</label><BR></td><td>
<input type='checkbox' id='Sources3' name='Sources' value='FR' ><label for='Sources3'> Forgotten Realms Campaign Setting</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources4' name='Sources' value='LD' ><label for='Sources4'> Lords of Darkness</label><BR></td><td>
<input type='checkbox' id='Sources5' name='Sources' value='Magic&#32;of&#32;Faerun' ><label for='Sources5'> Magic of Faerun</label><BR></td><td>
<input type='checkbox' id='Sources6' name='Sources' value='Mintipers&#32;Chapbook' ><label for='Sources6'> Mintiper's Chapbook</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources7' name='Sources' value='RoF' ><label for='Sources7'> Races of Faerun</label><BR></td><td>
<input type='checkbox' id='Sources8' name='Sources' value='Silver&#32;March&#32;Web' ><label for='Sources8'> Silver Marches Web Enhancement</label><BR></td><td>
<input type='checkbox' id='Sources9' name='Sources' value='Unapproachable&#32;East' ><label for='Sources9'> Unapproachable East</label><BR></td></tr><tr><td>
<b>3.0&#32;General</b><br>
</td></tr><tr><td><input type='checkbox' id='Sources10' name='Sources' value='AE' ><label for='Sources10'> Arms and Equipment Guide</label><BR></td><td>
<input type='checkbox' id='Sources11' name='Sources' value='BB' ><label for='Sources11'> Bastion of Broken Souls</label><BR></td><td>
<input type='checkbox' id='Sources12' name='Sources' value='BC' ><label for='Sources12'> Book of Challenges</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources13' name='Sources' value='Book&#32;of&#32;Vile&#32;Darkness' ><label for='Sources13'> Book of Vile Darkness</label><BR></td><td>
<input type='checkbox' id='Sources14' name='Sources' value='DotF' ><label for='Sources14'> Defenders of the Faith</label><BR></td><td>
<input type='checkbox' id='Sources15' name='Sources' value='EL' ><label for='Sources15'> Epic Level Handbook</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources16' name='Sources' value='Far&#32;Corners&#32;of&#32;the&#32;World' ><label for='Sources16'> Far Corners of the World</label><BR></td><td>
<input type='checkbox' id='Sources17' name='Sources' value='FiendFolio' ><label for='Sources17'> Fiend Folio</label><BR></td><td>
<input type='checkbox' id='Sources18' name='Sources' value='Ghostwalk' ><label for='Sources18'> Ghostwalk</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources19' name='Sources' value='Ghostwalk&#32;Web' ><label for='Sources19'> Ghostwalk Web Enhancement</label><BR></td><td>
<input type='checkbox' id='Sources20' name='Sources' value='MotP' ><label for='Sources20'> Manual of the Planes</label><BR></td><td>
<input type='checkbox' id='Sources21' name='Sources' value='MotW' ><label for='Sources21'> Masters of the Wild</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources22' name='Sources' value='MMII' ><label for='Sources22'> Monster Manual II</label><BR></td><td>
<input type='checkbox' id='Sources23' name='Sources' value='Savage&#32;Species' ><label for='Sources23'> Savage Species</label><BR></td><td>
<input type='checkbox' id='Sources24' name='Sources' value='Song&#32;and&#32;Silence' ><label for='Sources24'> Song and Silence</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources25' name='Sources' value='Spellbook&#32;Archive' ><label for='Sources25'> Spellbook Archive</label><BR></td><td>
<input type='checkbox' id='Sources26' name='Sources' value='SBG' ><label for='Sources26'> Stronghold Builder's Guidebook</label><BR></td><td>
<input type='checkbox' id='Sources27' name='Sources' value='SF' ><label for='Sources27'> Sword and Fist</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources28' name='Sources' value='Tome&#32;and&#32;Blood' ><label for='Sources28'> Tome and Blood</label><BR></td><td>
<input type='checkbox' id='Sources29' name='Sources' value='WOTC' ><label for='Sources29'> Wizards of the Coast Website</label><BR></td><td>
</td></tr><tr><td><b>3.0&#32;Oriental</b><br>
</td></tr><tr><td><input type='checkbox' id='Sources30' name='Sources' value='OA' ><label for='Sources30'> Oriental Adventures</label><BR></td><td>
</td></tr><tr><td><b>3.0&#32;Other</b><br>
</td></tr><tr><td><input type='checkbox' id='Sources31' name='Sources' value='Necromancy' ><label for='Sources31'> Encyclopeadia Arcane: Necromancy</label><BR></td><td>
<input type='checkbox' id='Sources32' name='Sources' value='SPELLSandSPELLCRAFT' ><label for='Sources32'> Legend & Lairs: Spells & Spellcraft</label><BR></td><td>
</td></tr><tr><td><b>3.5&#32;Dragon</b><br>
</td></tr><tr><td><input type='checkbox' id='Sources33' name='Sources' value='Dragon&#32;314' ><label for='Sources33'> Dragon Magazine #314</label><BR></td><td>
<input type='checkbox' id='Sources34' name='Sources' value='Dragon&#32;322' ><label for='Sources34'> Dragon Magazine #322</label><BR></td><td>
<input type='checkbox' id='Sources35' name='Sources' value='Dragon&#32;323' ><label for='Sources35'> Dragon Magazine #323</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources36' name='Sources' value='Dragon&#32;324' ><label for='Sources36'> Dragon Magazine #324</label><BR></td><td>
<input type='checkbox' id='Sources37' name='Sources' value='Dragon&#32;325' ><label for='Sources37'> Dragon Magazine #325</label><BR></td><td>
<input type='checkbox' id='Sources38' name='Sources' value='Dragon&#32;326' ><label for='Sources38'> Dragon Magazine #326</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources39' name='Sources' value='Dragon&#32;327' ><label for='Sources39'> Dragon Magazine #327</label><BR></td><td>
<input type='checkbox' id='Sources40' name='Sources' value='Dragon&#32;328' ><label for='Sources40'> Dragon Magazine #328</label><BR></td><td>
<input type='checkbox' id='Sources41' name='Sources' value='Dragon&#32;329' ><label for='Sources41'> Dragon Magazine #329</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources42' name='Sources' value='Dragon&#32;331' ><label for='Sources42'> Dragon Magazine #331</label><BR></td><td>
<input type='checkbox' id='Sources43' name='Sources' value='Dragon&#32;332' ><label for='Sources43'> Dragon Magazine #332</label><BR></td><td>
<input type='checkbox' id='Sources44' name='Sources' value='Dragon&#32;333' ><label for='Sources44'> Dragon Magazine #333</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources45' name='Sources' value='Dragon&#32;334' ><label for='Sources45'> Dragon Magazine #334</label><BR></td><td>
<input type='checkbox' id='Sources46' name='Sources' value='Dragon&#32;335' ><label for='Sources46'> Dragon Magazine #335</label><BR></td><td>
<input type='checkbox' id='Sources47' name='Sources' value='Dragon&#32;336' ><label for='Sources47'> Dragon Magazine #336</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources48' name='Sources' value='Dragon&#32;337' ><label for='Sources48'> Dragon Magazine #337</label><BR></td><td>
<input type='checkbox' id='Sources49' name='Sources' value='Dragon&#32;338' ><label for='Sources49'> Dragon Magazine #338</label><BR></td><td>
<input type='checkbox' id='Sources50' name='Sources' value='Dragon&#32;339' ><label for='Sources50'> Dragon Magazine #339</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources51' name='Sources' value='Dragon&#32;358' ><label for='Sources51'> Dragon Magazine #358</label><BR></td><td>
</td></tr><tr><td><b>3.5&#32;Eberron</b><br>
</td></tr><tr><td><input type='checkbox' id='Sources52' name='Sources' value='Ebberon' ><label for='Sources52'> Eberron Campaign Setting</label><BR></td><td>
<input type='checkbox' id='Sources53' name='Sources' value='EH' ><label for='Sources53'> Explorer's Handbook</label><BR></td><td>
<input type='checkbox' id='Sources54' name='Sources' value='FE' ><label for='Sources54'> Faiths of Eberron</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources55' name='Sources' value='MoE' ><label for='Sources55'> Magic of Eberron</label><BR></td><td>
<input type='checkbox' id='Sources56' name='Sources' value='PGtE' ><label for='Sources56'> Player's Guide to Eberron</label><BR></td><td>
<input type='checkbox' id='Sources57' name='Sources' value='RE' ><label for='Sources57'> Races of Eberron</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources58' name='Sources' value='SX' ><label for='Sources58'> Secrets of Xen�drik</label><BR></td><td>
<input type='checkbox' id='Sources59' name='Sources' value='Sh' ><label for='Sources59'> Sharn: City of Towers</label><BR></td><td>
<input type='checkbox' id='Sources60' name='Sources' value='FW' ><label for='Sources60'> The Forge of War</label><BR></td></tr><tr><td>
<b>3.5&#32;Faerun</b><br>
</td></tr><tr><td><input type='checkbox' id='Sources61' name='Sources' value='CR' ><label for='Sources61'> Champions of Ruin</label><BR></td><td>
<input type='checkbox' id='Sources62' name='Sources' value='CV' ><label for='Sources62'> Champions of Valor</label><BR></td><td>
<input type='checkbox' id='Sources63' name='Sources' value='CSW' ><label for='Sources63'> City of Splendors: Waterdeep</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources64' name='Sources' value='DrF' ><label for='Sources64'> Dragons of Faerun</label><BR></td><td>
<input type='checkbox' id='Sources65' name='Sources' value='EU' ><label for='Sources65'> Expedition to Undermountain</label><BR></td><td>
<input type='checkbox' id='Sources66' name='Sources' value='LostEmpiresOfFaerun' ><label for='Sources66'> Lost Empires of Faerun</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources67' name='Sources' value='Magic&#32;Books&#32;of&#32;Faerun' ><label for='Sources67'> Magic Books of Faerun</label><BR></td><td>
<input type='checkbox' id='Sources68' name='Sources' value='Mys' ><label for='Sources68'> Mysteries of the Moonsea</label><BR></td><td>
<input type='checkbox' id='Sources69' name='Sources' value='PGtF' ><label for='Sources69'> Player's Guide to Faerun</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources70' name='Sources' value='PF' ><label for='Sources70'> Power of Faerun</label><BR></td><td>
<input type='checkbox' id='Sources71' name='Sources' value='SK' ><label for='Sources71'> Serpent Kingdoms</label><BR></td><td>
<input type='checkbox' id='Sources72' name='Sources' value='ShD' ><label for='Sources72'> Shadowdale: The Scouring of the Land</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources73' name='Sources' value='ShS' ><label for='Sources73'> Shining South</label><BR></td><td>
<input type='checkbox' id='Sources74' name='Sources' value='Underdark' ><label for='Sources74'> Underdark</label><BR></td><td>
</td></tr><tr><td><b>3.5&#32;General</b><br>
</td></tr><tr><td><input type='checkbox' id='Sources75' name='Sources' value='BFK' ><label for='Sources75'> Barrow of the Forgotten King</label><BR></td><td>
<input type='checkbox' id='Sources76' name='Sources' value='Book&#32;of&#32;Exalted&#32;Deeds' ><label for='Sources76'> Book of Exalted Deeds</label><BR></td><td>
<input type='checkbox' id='Sources77' name='Sources' value='CiP' ><label for='Sources77'> City of Peril</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources78' name='Sources' value='Ci' ><label for='Sources78'> Cityscape</label><BR></td><td>
<input type='checkbox' id='Sources79' name='Sources' value='Complete&#32;Adventurer' ><label for='Sources79'> Complete Adventurer</label><BR></td><td>
<input type='checkbox' id='Sources80' name='Sources' value='Complete&#32;Arcane' ><label for='Sources80'> Complete Arcane</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources81' name='Sources' value='CC' ><label for='Sources81'> Complete Champion</label><BR></td><td>
<input type='checkbox' id='Sources82' name='Sources' value='Complete&#32;Divine' ><label for='Sources82'> Complete Divine</label><BR></td><td>
<input type='checkbox' id='Sources83' name='Sources' value='CM' ><label for='Sources83'> Complete Mage</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources84' name='Sources' value='CP' ><label for='Sources84'> Complete Psionic</label><BR></td><td>
<input type='checkbox' id='Sources85' name='Sources' value='CS' ><label for='Sources85'> Complete Scoundrel</label><BR></td><td>
<input type='checkbox' id='Sources86' name='Sources' value='CW' ><label for='Sources86'> Complete Warrior</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources87' name='Sources' value='Draconomicon' ><label for='Sources87'> Draconomicon</label><BR></td><td>
<input type='checkbox' id='Sources88' name='Sources' value='DM' ><label for='Sources88'> Dragon Magic</label><BR></td><td>
<input type='checkbox' id='Sources89' name='Sources' value='DrU' ><label for='Sources89'> Drow of the Underdark</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources90' name='Sources' value='DMG2' ><label for='Sources90'> Dungeon Master's Guide II</label><BR></td><td>
<input type='checkbox' id='Sources91' name='Sources' value='FCI' ><label for='Sources91'> Fiendish Codex I: Hordes of the Abyss</label><BR></td><td>
<input type='checkbox' id='Sources92' name='Sources' value='Frostburn' ><label for='Sources92'> Frostburn</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources93' name='Sources' value='HoB' ><label for='Sources93'> Heroes of Battle</label><BR></td><td>
<input type='checkbox' id='Sources94' name='Sources' value='HoH' ><label for='Sources94'> Heroes of Horror</label><BR></td><td>
<input type='checkbox' id='Sources95' name='Sources' value='Libris' ><label for='Sources95'> Libris Mortis</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources96' name='Sources' value='Lords' ><label for='Sources96'> Lords of Madness</label><BR></td><td>
<input type='checkbox' id='Sources97' name='Sources' value='MOI' ><label for='Sources97'> Magic of Incarnum</label><BR></td><td>
<input type='checkbox' id='Sources98' name='Sources' value='Miniatures' ><label for='Sources98'> Miniatures Handbook</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources99' name='Sources' value='MM3.5' ><label for='Sources99'> Monster Manual 3.5</label><BR></td><td>
<input type='checkbox' id='Sources100' name='Sources' value='MM4' ><label for='Sources100'> Monster Manual IV</label><BR></td><td>
<input type='checkbox' id='Sources101' name='Sources' value='MM5' ><label for='Sources101'> Monster Manual V</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources102' name='Sources' value='Planar&#32;Handbook' ><label for='Sources102'> Planar Handbook</label><BR></td><td>
<input type='checkbox' id='Sources103' name='Sources' value='PHBII' ><label for='Sources103'> Player's Handbook II</label><BR></td><td>
<input type='checkbox' id='Sources104' name='Sources' value='RoD' ><label for='Sources104'> Races of Destiny</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources105' name='Sources' value='Races&#32;of&#32;Stone' ><label for='Sources105'> Races of Stone</label><BR></td><td>
<input type='checkbox' id='Sources106' name='Sources' value='RotDrg' ><label for='Sources106'> Races of the Dragon</label><BR></td><td>
<input type='checkbox' id='Sources107' name='Sources' value='RotW' ><label for='Sources107'> Races of the Wild</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources108' name='Sources' value='Sandstorm' ><label for='Sources108'> Sandstorm</label><BR></td><td>
<input type='checkbox' id='Sources109' name='Sources' value='SPC' ><label for='Sources109'> Spell Compendium</label><BR></td><td>
<input type='checkbox' id='Sources110' name='Sources' value='Stormwrack' ><label for='Sources110'> Stormwrack</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources111' name='Sources' value='SRD' ><label for='Sources111'> System Reference Document</label><BR></td><td>
<input type='checkbox' id='Sources112' name='Sources' value='SiS' ><label for='Sources112'> The Sinister Spire</label><BR></td><td>
<input type='checkbox' id='Sources113' name='Sources' value='ToB' ><label for='Sources113'> Tome of Battle: The Book of Nine Swords</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources114' name='Sources' value='ToM' ><label for='Sources114'> Tome of Magic</label><BR></td><td>
<input type='checkbox' id='Sources115' name='Sources' value='Unearthed&#32;Arcana' ><label for='Sources115'> Unearthed Arcana</label><BR></td><td>
<input type='checkbox' id='Sources116' name='Sources' value='WL' ><label for='Sources116'> Weapons of Legacy</label><BR></td></tr><tr><td>
<b>3.5&#32;Other</b><br>
</td></tr><tr><td><input type='checkbox' id='Sources117' name='Sources' value='ATB' ><label for='Sources117'> Andrew Bay</label><BR></td><td>
<input type='checkbox' id='Sources118' name='Sources' value='Drew' ><label for='Sources118'> Andrew Schenkelberg</label><BR></td><td>
<input type='checkbox' id='Sources119' name='Sources' value='Cypren' ><label for='Sources119'> Cypren</label><BR></td></tr><tr><td>
<input type='checkbox' id='Sources120' name='Sources' value='seankreynolds.com' ><label for='Sources120'> SeanKReynolds.com</label><BR></td><td>
<input type='checkbox' id='Sources121' name='Sources' value='BoEM' ><label for='Sources121'> The Book of Eldritch Might</label><BR></td><td>
</td></tr><tr><td><b>Other</b><br>
</td></tr><tr><td><input type='checkbox' id='Sources122' name='Sources' value='R7' ><label for='Sources122'> Rod of Seven Parts</label><BR></td></tr></table><input type='hidden' name='OldSources' value=''></td>

</TR>
<TR id='ROW_GrayHawk_Cat'><th colspan='1' title=''>Has Any of these GrayHawk Categories</th><td colspan='2'><input type='checkbox' id='GrayHawk_Cat0' name='GrayHawk_Cat' value='Closed' ><label for='GrayHawk_Cat0'> Closed</label><BR><input type='checkbox' id='GrayHawk_Cat1' name='GrayHawk_Cat' value='NPC' ><label for='GrayHawk_Cat1'> NPC</label><BR><input type='checkbox' id='GrayHawk_Cat2' name='GrayHawk_Cat' value='Open' ><label for='GrayHawk_Cat2'> Open</label><BR><input type='checkbox' id='GrayHawk_Cat3' name='GrayHawk_Cat' value='Unlockable' ><label for='GrayHawk_Cat3'> Unlockable</label><BR><input type='hidden' name='OldGrayHawk_Cat' value=''></td>

</TR>
<TR id='ROW_Small'><th colspan='1' title=''>Display</th><td colspan='1'><input type='radio' id='Small0' name='Small' value='1' ><label for='Small0'>Names only (Short)</label><br>
<input type='radio' id='Small2' name='Small' value='0'  checked='checked' ><label for='Small2'>Lite details (Medium)</label><br>
<input type='radio' id='Small4' name='Small' value='2' ><label for='Small4'>Many details (Long)</label><br>
<input type='radio' id='Small6' name='Small' value='3' ><label for='Small6'>All details (Full)</label><br>
<input type='radio' id='Small8' name='Small' value='5' ><label for='Small8'>Detailed Lines</label><br>
<input type='hidden' name='OldSmall' value='0'></td>

</TR></table><p align = 'center'>
<input type="submit" value="Search" name="Submit">
<input type="Reset">
</p></form>
<div id='Footer'><hr width='95%' align='center'><table class='footerTbl' border='0' align='center' style='margin: auto;'> <tr><td><a href='/dndlive/index.php'>Main Menu</a></td><td>|</td><td><a href='/'>Front Page</a></td><td>|</td><td><a href='/dndlive/License.php'>Copyright Notice</a></td><td>|</td><td><a href='mailto:IMarvinTPA@Bigfoot.com'>E-mail IMarvinTPA</a></td><td>|</td><td><a href='https://twitter.com/IMarvinTPA'>@IMarvinTPA</a></td><td>|</td><td><a href='bitcoin://19DdJH4LfEoZeWdj86kkQhzoqkFsTcd8ST'>Bitcoin</a></td></tr></table><table class='noticeFooter' border='0' align='center' style='margin: auto;'> <tr><td><table class='OpenWP' border='1' align='center' style='margin: auto;'><tr><td>Example of Open Content reproduced with permission.</td></tr></table></td><td><table class='OpenWOP' border='1' align='center' style='margin: auto;'><tr><td>Example of Open Content reproduced without permission.</td></tr></table></td></tr><tr><td><table class='ClosedWP' border='0' align='center' style='margin: auto;'><tr><td>Example of Closed Content reproduced with permission.</td></tr></table></td><td><table class='ClosedWOP' border='0' align='center' style='margin: auto;'><tr><td>Example of Closed Content reproduced without permission.</td></tr></table></td></tr></table></div></body>
</html>
