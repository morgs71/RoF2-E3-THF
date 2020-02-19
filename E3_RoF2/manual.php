
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Macroquest2 Documentation</title>
<style type="text/css">	<!--
	A:link {
		text-decoration: none; color: #00FF00;
	}
	A:visited {
		text-decoration: none
	}
	A:active {
		text-decoration: none
	}
	A:hover {
		text-decoration: underline; color: #00EEEE;
	}
	body {
		background-position: 50% 50%;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-color: black;
		color: white;
		font-size: 16px;
		font-family: Arial;
	}
	table {
		border-collapse: collapse;
	}
	.txtbold {
		font-weight: bold;
	}
	.txtred {
		color: red;
		font-weight: bold;
	}
	.txtredbig {
		font-weight: bold;
		color: red;
		font-size: 24px;
		font-family: Arial;
	}
	.toctext {
		color: white;
	}
	.linktext {
		color: #00EEEE;
	}
	.command {
		color: Red;
		font-weight: bold;
	}
	/* This is the font style for code examples in MQ2 */
	.code {
		font-family: Courier, 'Courier New', sans-serif; font-size: 16px;
    }
	.opt {
		color: #00AACD;
	}
	.arg {
		font-style: italic;
	}
	.tab {
		padding: 20px;
	}
	.tabbold {
	   padding: 20px;
		font-weight: bold;
	}
	.doubletab {
		padding: 40px;
	}
	-->
</style>
</head>
<body>
<div align="center">
   <span class="txtbold">MacroQuest2 Manual</span><br>
   Last Updated: June 22, 2007<br>
   <a href="http://macroquest.sf.net/" target="_blank">http://macroquest.sf.net/</a><br>
   <p>
   <a href="http://validator.w3.org/check?uri=referer"><img border="0"
src="http://www.w3.org/Icons/valid-html401"
alt="Valid HTML 4.01!" height="31" width="88"></a>
   <a href="http://jigsaw.w3.org/css-validator/">
   <img style="border:0;width:88px;height:31px"
src="http://jigsaw.w3.org/css-validator/images/vcss"
alt="Valid CSS!">
   </a>
   </p>
   The most current readme.chm version is available
   <a href="http://www.macroquest2.com/includes/wassup/readme.chm" target="_blank">
   <span class="linktext">here</span></a><br><br>
   Please help contribute to our <a href="http://www.macroquest2.com/wiki" target="blank">
   <span class="linktext">wiki</span></a> also. Once all of the information from this manual is moved over, the HTML version of the manual may be discontinued.<br><br>
   PM Wassup on the MQ website if you have comments or suggestions about the manual<br><br>
</div>
<span class="txtbold">Table of Contents</span><br><br>
<a href="#intro">
<span class="toctext">Introduction</span></a><br>
<a href="#compile">
<span class="toctext">Compiling MacroQuest2</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2auth">
<span class="toctext">MQ2Auth</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#vc6">
<span class="toctext">VC6++</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#vcnet">
<span class="toctext">VC.net</span></a><br>
<a href="#install">
<span class="toctext">Installing MacroQuest2</span></a><br>
<a href="#mq2ini">
<span class="toctext">MacroQuest2.ini</span></a><br>
<a href="#mq2start">
<span class="toctext">Starting MacroQuest2</span></a><br>
<a href="#mq2stop">
<span class="toctext">Stopping MacroQuest2</span></a><br>
<a href="#mq2update">
<span class="toctext">Updating MacroQuest2</span></a><br>
<a href="#mq2ctd">
<span class="toctext">Reporting CTD problems</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#debugexample">
<span class="toctext">Example Debug Information</span></a><br>
<a href="#macfund">
<span class="toctext">Macro Fundamentals</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#maccomments">
<span class="toctext">Comments</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#macpound">
<span class="toctext">Pound Commands</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#macslash">
<span class="toctext">Slash Commands</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#macdatavars">
<span class="toctext">MQ2DataVars</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#macsubs">
<span class="toctext">Subroutines</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2custom">
<span class="toctext">Custom Events</span></a><br>
<a href="#mq2commands">
<span class="toctext">MacroQuest2 Commands</span></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#a">
<span class="toctext">a</span></a>&nbsp;
<a href="#b">
<span class="toctext">b</span></a>&nbsp;
<a href="#c">
<span class="toctext">c</span></a>&nbsp;
<a href="#d">
<span class="toctext">d</span></a>&nbsp;
<a href="#e">
<span class="toctext">e</span></a>&nbsp;
<a href="#f">
<span class="toctext">f</span></a>&nbsp;
<a href="#g">
<span class="toctext">g</span></a>&nbsp;
<a href="#h">
<span class="toctext">h</span></a>&nbsp;
<a href="#i">
<span class="toctext">i</span></a>&nbsp;
<a href="#j">
<span class="toctext">j</span></a>&nbsp;
<a href="#k">
<span class="toctext">k</span></a>&nbsp;
<a href="#l">
<span class="toctext">l</span></a>&nbsp;
<a href="#m">
<span class="toctext">m</span></a>&nbsp;
<a href="#n">
<span class="toctext">n</span></a>&nbsp;
<a href="#o">
<span class="toctext">o</span></a>&nbsp;
<a href="#p">
<span class="toctext">p</span></a>&nbsp;
<a href="#q">
<span class="toctext">q</span></a>&nbsp;
<a href="#r">
<span class="toctext">r</span></a>&nbsp;
<a href="#s">
<span class="toctext">s</span></a>&nbsp;
<a href="#t">
<span class="toctext">t</span></a>&nbsp;
<a href="#u">
<span class="toctext">u</span></a>&nbsp;
<a href="#v">
<span class="toctext">v</span></a>&nbsp;
<a href="#w">
<span class="toctext">w</span></a>&nbsp;
<a href="#x">
<span class="toctext">x</span></a>&nbsp;
<a href="#y">
<span class="toctext">y</span></a>&nbsp;
<a href="#z">
<span class="toctext">z</span></a><br>
<a href="#mq2datatypes">
<span class="toctext">MacroQuest2 Data Types</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#typemembers">
<span class="toctext">Members</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#inheritance">
<span class="toctext">Inheritance</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#typecasting">
<span class="toctext">Type Casting</span></a><br><br>
<a href="#toplevelobjects">
<span class="toctext">Top Level Objects</span></a><br><br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><a href="#tloaltability">
            <span class="toctext">AltAbility</span></a>
         </td>
         <td><a href="#tlobool">
            <span class="toctext">Bool</span></a>
         </td>
         <td><a href="#tlome">
            <span class="toctext">Me</span></a>
         </td>
         <td><a href="#tlocorpse">
            <span class="toctext">Corpse</span></a>
         </td>
         <td><a href="#tlocursor">
            <span class="toctext">Cursor</span></a>
         </td>
         <td><a href="#tlodefined">
            <span class="toctext">Defined</span></a>
         </td>
         <td><a href="#tloground">
            <span class="toctext">Ground</span></a>
         </td>
         <td><a href="#tlofinditem">
            <span class="toctext">FindItem</span> </a>
         </td>
      </tr>
      <tr>
         <td><a href="#tlofinditembank">
            <span class="toctext">FindItemBank</span></a>
         </td>
         <td><a href="#tlofinditembankcount">
            <span class="toctext">FindItemBankCount</span></a>
         </td>
         <td><a href="#tlofinditemcount">
            <span class="toctext">FindItemCount</span></a>
         </td>
         <td><a href="#tlofloat">
            <span class="toctext">Float</span></a>
         </td>
         <td><a href="#tlogametime">
            <span class="toctext">GameTime</span></a>
         </td>
         <td><a href="#tlogroup">
            <span class="toctext">Group</span></a>
         </td>
         <td><a href="#tloheading">
            <span class="toctext">Heading</span></a>
         </td>
         <td><a href="#tloif">
            <span class="toctext">If</span></a>
         </td>	
      </tr>
      <tr>
         <td><a href="#tloini">
            <span class="toctext">Ini</span></a>
         </td>
         <td><a href="#tloint">
            <span class="toctext">Int</span></a>
         </td>
         <td><a href="#tloinvslot">
            <span class="toctext">InvSlot</span></a>
         </td>
         <td><a href="#tlolastspawn">
            <span class="toctext">LastSpawn</span></a>
         </td>
         <td><a href="#tlolineofsight">
            <span class="toctext">LineOfSight</span></a>
         </td>
         <td><a href="#tlomacro">
            <span class="toctext">Macro</span></a>
         </td>
         <td><a href="#tlomacroquest">
            <span class="toctext">Macroquest</span></a>
         </td>
         <td><a href="#tlomath">
            <span class="toctext">Math</span></a>
         </td>
      </tr>
      <tr>
         <td><a href="#tlomerchant">
            <span class="toctext">Merchant</span></a>
         </td>
         <td><a href="#tlonamingspawn">
            <span class="toctext">NamingSpawn</span></a>
         </td>
         <td><a href="#tlonearestspawn">
            <span class="toctext">NearestSpawn</span></a>
         </td>
         <td><a href="#tloplugin">
            <span class="toctext">Plugin</span></a>
         </td>
         <td><a href="#tloraid">
            <span class="toctext">Raid</span></a>
         </td>
         <td><a href="#tloselect">
            <span class="toctext">Select</span></a>
         </td> 	
         <td><a href="#tloselecteditem">
            <span class="toctext">SelectedItem</span></a>
         </td>
         <td><a href="#tloskill">
            <span class="toctext">Skill</span></a>
         </td>
      </tr>
      <tr>
         <td><a href="#tlospawn">
            <span class="toctext">Spawn</span></a>
         </td>
         <td><a href="#tlospawncount">
            <span class="toctext">SpawnCount</span></a>
         </td>
         <td><a href="#tlospell">
            <span class="toctext">Spell</span></a>
         </td>
         <td><a href="#tloswitch">
            <span class="toctext">Switch</span></a>
         </td>
         <td><a href="#tlotarget">
            <span class="toctext">Target</span></a>
         </td>
         <td><a href="#tlotime">
            <span class="toctext">Time</span></a>
         </td>
         <td><a href="#tlotype">
            <span class="toctext">Type</span></a>
         </td>
         <td><a href="#tlowindow">
            <span class="toctext">Window</span></a>
         </td>
      </tr>
      <tr>
         <td><a href="#tlozone">
            <span class="toctext">Zone</span></a>
         </td>
      </tr>
   </tbody>
</table><br>
<a href="#reftypes">
<span class="toctext">Reference Types</span></a><br><br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><a href="#refaltability">
            <span class="toctext">altability</span></a>
         </td>
         <td><a href="#refarray">
            <span class="toctext">array</span></a>
         </td>
         <td><a href="#refbuff">
            <span class="toctext">buff</span></a>
         </td>
         <td><a href="#refcharacter">
            <span class="toctext">character</span></a>
         </td>
         <td><a href="#refground">
            <span class="toctext">ground</span></a>
         </td>
         <td><a href="#refgroup">
            <span class="toctext">group</span></a>
         </td>
         <td><a href="#refgroupmember">
            <span class="toctext">groupmember</span></a>
         </td>
         <td><a href="#refitem">
            <span class="toctext">item</span></a>
         </td>
      </tr>
      <tr>
         <td><a href="#refplugin">
            <span class="toctext">plugin</span></a>
         </td>
         <td><a href="#refskill">
            <span class="toctext">skill</span></a>
         </td>
         <td><a href="#refspawn">
            <span class="toctext">spawn</span></a>
         </td>
         <td><a href="#refspell">
            <span class="toctext">spell</span></a>
         </td>
         <td><a href="#refstring">
            <span class="toctext">string</span></a>
         </td>
         <td><a href="#refswitch">
            <span class="toctext">switch</span></a>
         </td>
         <td><a href="#reftime">
            <span class="toctext">time</span></a>
         </td>
         <td><a href="#reftimer">
            <span class="toctext">timer</span></a>
         </td>	
      </tr>
      <tr>
         <td><a href="#reftype">
            <span class="toctext">type</span></a>
         </td>
         <td><a href="#refwindow">
            <span class="toctext">window</span></a>
         </td>
         <td><a href="#refzone">
            <span class="toctext">zone</span></a>
         </td>
      </tr>
   </tbody>
</table>
<br>
<a href="#immedtypes"></a><br>
<span class="toctext">Immediate Types</span><br><br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><a href="#immargb">
            <span class="toctext">argb</span></a>
         </td>
         <td><a href="#immbool">
            <span class="toctext">bool</span></a>
         </td>
         <td><a href="#immbody">
            <span class="toctext">body</span></a>
         </td>
         <td><a href="#immbyte">
            <span class="toctext">byte</span></a>
         </td>
         <td><a href="#immclass">
            <span class="toctext">class</span></a>
         </td>
         <td><a href="#immcorpse">
            <span class="toctext">corpse</span></a>
         </td>
         <td><a href="#immdeity">
            <span class="toctext">deity</span></a>
         </td>
		 <td><a href="#immevolving">
            <span class="toctext">evolving</span></a>
         </td>
      </tr>
      <tr>
	     <td><a href="#immfloat">
            <span class="toctext">float</span></a>
         </td>
         <td><a href="#immheading">
            <span class="toctext">heading</span></a>
         </td>
         <td><a href="#immint">
            <span class="toctext">int</span></a>
         </td>
         <td><a href="#imminvslot">
            <span class="toctext">invslot</span></a>
         </td>
         <td><a href="#immticks">
            <span class="toctext">ticks</span></a>
         </td>
         <td><a href="#immrace">
            <span class="toctext">race</span></a>
         </td>
         <td><a href="#immraidmember">
            <span class="toctext">raidmember</span></a>
         </td>
      </tr>
   </tbody>
</table>
<br><br>
<a href="#indeptypes"></a>
<span class="toctext">Independent Types</span><br><br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><a href="#indcurrentzone">
            <span class="toctext">currentzone</span></a>
         </td>
         <td><a href="#indmacro">
            <span class="toctext">macro</span></a>
         </td>
         <td><a href="#indmacroquest">
            <span class="toctext">macroquest</span></a>
         </td>
         <td><a href="#indmath">
            <span class="toctext">math</span></a>
         </td>
         <td><a href="#indmerchant">
            <span class="toctext">merchant</span></a>
         </td>
         <td><a href="#indraid">
            <span class="toctext">raid</span></a>
         </td>
      </tr>
   </tbody>
</table>
<br>
<a href="#examples">
<span class="toctext">Common Examples</span></a><br><br>
<a href="#mq2andtheui">
<span class="toctext">MacroQuest2 and the UI</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2uilabelids">
<span class="toctext">Using Label IDs</span></a>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2tooltypes">
<span class="toctext">Using the tooltype</span></a>
<a href="#mq2cfgfiles">
<span class="toctext">MacroQuest2 CFG Files</span></a><br>
<a href="#mq2plugins">
<span class="toctext">MacroQuest2 Plugins</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2bzsrch">
<span class="toctext">MQ2Bzsrch</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2chat">
<span class="toctext">MQ2Chat</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2chatwnd">
<span class="toctext">MQ2ChatWnd</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2custombinds">
<span class="toctext">MQ2CustomBinds</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2eqim">
<span class="toctext">MQ2EQIM</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2fps">
<span class="toctext">MQ2FPS</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2hud">
<span class="toctext">MQ2HUD</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2irc">
<span class="toctext">MQ2IRC</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2itemdisplay">
<span class="toctext">MQ2ItemDisplay</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2map">
<span class="toctext">MQ2Map</span></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#mq2telnet">
<span class="toctext">MQ2Telnet</span></a><br>
<a href="#createplugin">
<span class="toctext">Creating a MacroQuest2 plugin</span></a><br>
<a href="#appendixa">
<span class="toctext">Appendix A: Operators</span></a><br>
<a href="#appendixb">
<span class="toctext">Appendix B: /keypress list</span></a><br>
<a href="#appendixc">
<span class="toctext">Appendix C: Skills List</span></a><br>
<a href="#appendixd">
<span class="toctext">Appendix D: Containers List</span></a><br>
<a href="#appendixe">
<span class="toctext">Appendix E: Slot Names</span></a><br>
<a href="#spawnsearch">
<span class="toctext">Appendix F: Spawn Search filters</span></a><br>
<a href="#windowslist">
<span class="toctext">Appendix G: Windows List</span></a><br>
<a href="#mq2faq">
<span class="toctext">FAQ</span></a><br><br>
<a name="intro" id="intro"></a>
<span class="txtbold">Introduction</span><br>
MacroQuest2 is a third party program which reduces repetitiveness and enhances the functionality of EverQuest.<br><br>
MacroQuest2 is as useful as you wish to make it. You can utilize it just for the capabilities of the map and other plugins, or you can further enhance EverQuest through the use of macros or designing your own plugin.<br><br>
However, there are some issues you need to understand:<br><br>
First and foremost, the use of MacroQuest2 is a violation of the EULA of EverQuest.<br><br>
This means that if you do not use MacroQuest2 sensibly, you risk your character being suspended for a period of time, or in extreme cases, having your character permanently banned.<br><br>
<span class="txtredbig">If you are not prepared for such circumstances, stop here and do not continue.</span><br><br>
Some suggested reading:<br><br>
<a href="#mq2chatwnd">
<span class="linktext">MQ2ChatWnd</span></a><br>
<a href="#mq2update">
<span class="linktext">Updating MacroQuest2</span></a><br><br>
<a name="compile" id="compile"></a>
<span class="txtbold">Compiling MacroQuest2</span><br>
MacroQuest2 does not come pre-compiled. You must use either VC6++ or VC.net to compile, preferably VC.net. No other compiler is capable of compiling MacroQuest2.<br><br>
Once you have VC6++ or VC.net installed, you can obtain the MacroQuest2 source files by clicking
<a href="http://www.macroquest2.com/main.php?p=download&amp;product=mq2" target="_blank">
<span class="linktext">here</span></a>.<br><br>
<span class="txtbold">Ensure that you read the document section about MQ2Auth prior to compiling</span><br><br>
<a name="mq2auth" id="mq2auth"></a>
<span class="txtbold">MQ2Auth</span><br><br>
<span class="txtbold">MAKE SURE YOU UNZIP THE ARCHIVE SO THAT SUBDIRECTIORIES ARE RETAINED</span>.<br><br>
The creation of MQ2Auth0.h is covered in each of the compiling instructions for each compiler. This section is more of a reference than
instructions, but is most helpful for compiling MacroQuest2 for multiple people.<br><br>
Before you attempt to compile MacroQuest2, you MUST run MQ2Auth.exe on your computer to create a file that allows MacroQuest2 to be compiled.
Once MacroQuest2 is compiled, it will only be useable on the computers where the information was added to the MQ2Auth0.h file. Without the
MQ2Auth0.h, MacroQuest2 will not compile. If MacroQuest2 is run from a computer that MQ2Auth0.h does not know about, MacroQuest2 will be
unusable.<br><br>
MQ2Auth is a form of protection to restrict the distribution of pre-compiled binaries.<br><br>
<span class="txtbold">Single user compile</span>
<br>
<ul>
   <li>Run MQ2Auth.exe from where the file was unzipped, this will create a file called MQ2Auth0.h in the MQ2Main directory.</li>
   <li>If MQ2Auth.exe is not run where an MQ2Main folder exists, MQ2Auth0.h will be created in the same directory as the MQ2Auth.exe file.</li>
   <li>The file can then be copied to the MQ2Main folder.</li>
</ul>
<span class="txtbold">Compiling for friends</span><br>
<ul>
   <li>If you are compiling MacroQuest2 for someone else, they need to run MQ2Auth.exe on their computer. They must return the file generated
      to you. The MQ2Auth0.h file can be used to hold your generated information and that of whoever you are compiling MacroQuest2 for.</li>
   <li>MQ2Auth.exe will append information generated on different computers to MQ2Auth0.h. This allows you to compile one version of
      MacroQuest2 that will run on any computer which has it's information in the MQ2Auth0.h file.</li>
</ul>
<span class="txtbold">The simplest way of creating an MQ2Auth0.h file for multiple people is:</span><br><br>
<ol start="1">
   <li>Have Person 1 run (double click) MQ2Auth.exe from their C: drive. This will create an MQ2Auth0.h file on their C: drive</li>
   <li>Person 1 passes the MQ2Auth0.h file that was created to Person 2, who places MQ2Auth0.h on their C: drive along with the
      MQ2Auth.exe program</li>
   <li>Person 2 then runs (double clicks) the MQ2Auth.exe, his information is appended to the MQ2Auth0.h file.</li>
   <li>Continue until your last friend has run MQ2Auth.exe from their C: drive with the MQ2Auth0.h file, who then passes the MQ2Auth0.h file to
      the person who will compile MacroQuest2.</li>
   <li>The person who is compiling MacroQuest2 can then place the MQ2Auth0.h file in the MQ2Main folder of the MacroQuest2 source directory.</li>
   <li>This person then double clicks the MQ2Auth.exe program that exists in the main MacroQuest2 folder to have his information appended to
      the MQ2Auth0.h file that was placed in he MQ2Main folder.</li>
</ol>
<a name="vc6" id="vc6"></a>
<span class="txtbold">Compiling MacroQuest2 using VC6++ or Visual Studio 6</span>
<ol start="1">
   <li>Install Visual C++ 6.0 or Visual Studio 6.0</li>
   <li>If you are installing VC6++ please make sure you have installed SERVICE PACK 6. You can find Service Pack 6 here: Service Pack 6</li>
   <li>Download the MacroQuest2 source files</li>
   <li>Unzip it into any new folder</li>
   <li>Go to the newly created folder and double click MQ2Auth.exe</li>
   <li>Double click macroquest2.dsw file. This will Open Visual C++</li>
   <li>Select Build -> Set Active Config and select MQ2main. Click OK</li>
   <li>Select Build -> Build MQ2main.dll or press F7</li>
   <li>Select Build -> Batch Build. Make sure everything in the batch build window that says release has a check by it.</li>
   <li>Click the Build button. All should compile with no errors or warnings.</li>
</ol>
<a name="vcnet" id="vcnet"></a>
<span class="txtbold">Compiling MacroQuest2 using VC.net</span>
<ol start="1">
   <li>Download the MacroQuest2 source files</li>
   <li>Unzip it into any new folder</li>
   <li>Right click the folder, select Properties, and remove the Read only flag</li>
   <li>Double-click MQ2Auth.exe. This will create the file necessary for compiling MQ2 in the MQ2Main folder.</li>
   <li>Double-click the Macroquest2.sln file. VC.net will open the MacroQuest project</li>
   <li>Go to the Build menu and select Configuration Manager</li>
   <li>Select Release, and place a check in each dll you want compiled. Click the Close button</li>
</ol>
<img src="http://macroquest.sourceforge.net/cfgmgr.png" alt="" width="453" height="307" hspace="40" vspace="15" border="0">
<ol start="8">
   <li>Go to the Build menu and select Build Solution</li>
   <li>The dll files will compile and be placed in the Release folder.</li>
</ol>
<a name="install" id="install"></a>
<span class="txtbold">Installing MacroQuest2</span><br><br>
After compiling Macroquest2:
<ol start="1">
   <li>Create a new folder anywhere, such as c:\MQ2</li>
   <li>Create four new folders within this folder, named configs, ini, logs, and macros</li>
   <li>Copy the Macroquest2.exe, the compiled dll's, the ini files, and the .txt files from the Release folder to c:\MQ2:</li>
</ol>
You should have a directory similar to that shown below:<br><br>
<span class="tab"><img src="http://macroquest.sourceforge.net/files.png" alt="" width="410" height="564" border="0"></span><br><br>
<a name="mq2ini" id="mq2ini"></a>
<span class="txtbold">MacroQuest.ini</span><br><br>
MacroQuest.ini contains settings related to the operation of MacroQuest2. Depending on your usage of MacroQuest2, the file may change.<br><br>
You are also able to edit this file manually to change the behavior of MacroQuest2.<br><br>
<span class="txtbold">One entry of note is LaxColor=0</span><br><br>
If you set LaxColor=1, and you run macro's, be prepared for some text that some may consider offensive if your macro has errors in it.<br>
This option is not intended to make people angry. If you don't like what you see, change it back to LaxColor=0<br><br>
<a name="mq2start" id="mq2start"></a>
<span class="txtbold">Starting MacroQuest2</span><br><br>
MacroQuest2 can be started anytime before you start EverQuest, or after you start EverQuest.<br><br>
To run MacroQuest2 double click on MacroQuest2.exe from the Release folder, or from where you installed MacroQuest2.<br><br>
An icon will(should) appear in your system tray.<br><br>
<span class="tab"><img src="http://macroquest.sourceforge.net/systray.png" alt="" width="300" height="60" border="0"></span><br><br>
Right clicking on the icon allows you to:
<ol start="1">
   <li>Access other web sites</li>
   <li>Access the MacroQuest2 forums</li>
   <li>View the Readme</li>
   <li>Edit your MacroQuest2 ini file</li>
</ol>
<a name="mq2stop" id="mq2stop"></a>
<span class="txtbold">Stopping MacroQuest2</span><br><br>
MacroQuest2 can be stopped at any time by typing /unload in the EverQuest client, then right clicking the icon in the system tray
and selecting exit.<br><br>
Do not close Macroquest2 without typing
<span class="txtbold">/unload</span> in the EverQuest client first. If you do, EverQuest will crash.<br><br>
<a name="mq2update" id="mq2update"></a>
<span class="txtbold">Updating MacroQuest2</span><br><br>
When there is a patch to the EverQuest eqgame.exe be sure check the forums to see if there has been a change to MacroQuest2.<br><br>
<span class="txtredbig">DO NOT visit the MQ2 website and post that MQ2 is broken on a patch day if a new eqgame.exe was pushed.</span><br><br>
<span class="txtbold">You have been warned!!!</span><br><br>
Occasionally, the MacroQuest2 developers also update current features or add new features to MacroQuest2.<br><br>
Download the latest zip file and recompile when this occurs.<br><br>
Link to MacroQuest2 forums: <a href="http://macroquest2.com/phpBB2/index.php?sid=666cbd13706b3c37e0aaf08e1319d224" target="_blank">
<span class="linktext">Forums</span></a>.<br><br>
Link to the current latest zip: <a href="http://www.macroquest2.com/main.php?p=download&amp;product=mq2" target="_blank">
<span class="linktext">MQ2-Latest.zip</span></a>.<br><br>
<a name="mq2ctd" id="mq2ctd"></a>
<span class="txtbold">Reporting CTD problems</span><br><br>
When reporting a Crash to Desktop, or CTD, the MacroQuest2 developers need information about the crash from a debugger.<br><br>
If you cannot get this information, please find someone who can get the information. It does no good to post on the MQ2 forums
about a CTD without it.<br><br>
First and foremost, to be of help you MUST attach a debugger. Here is the information needed:<br>
<ol start="1">
   <li>We need to know the actual error. The address, the address that was probably trying to be read, etc. Copy and paste from the debugger.</li>
   <li>We need to know if the crash itself was in EVERQUEST, or MACROQUEST2. If it was in MacroQuest2, the debugger will show you the source line.
      If not, it will show you some disassembly and an offset in eqgame.exe (most likely).</li>
   <li>Inside MacroQuest - The error information from #1 as well as the source line that caused the crash. If you can, copy and paste us
      the surrounding code block and let us know which source file it was in (e.g. MQ2Utilities.cpp)</li>
   <li>Inside EverQuest - The error information #1 including the offset in eqgame.exe, copy and paste a couple lines of the disassembly if you
      can, AND GET THE FUNCTION CALL STACK. If we get the function call stack, it may be VERY easy to fix the problem.
      If not, may be very DIFFICULT to fix the problem.</li>
</ol>
<span class="txtbold">Debuggers</span><br>
What you need to know about debuggers:<br>
<ol start="1">
   <li>How to attach a debugger to the process, and how to enable trapping of the 0xC0000005 exception (the majority of crash bugs)</li>
   <li>Where to find the debug spew as well as crash information (for #1) when eqgame.exe crashes</li>
   <li>Where to find the source line (for #2a) when eqgame.exe crashes inside MacroQuest2</li>
   <li>Where to find the disassembly (for #2b) when eqgame.exe crashes</li>
   <li>Where to find the function call stack (for #2b) when eqgame crashes</li>
</ol>
<br><br>
<span class="txtbold">Visual Studio .NET</span><br><br>
<ol start="1">
   <li>Debug menu->Processes option. In the "Available Processes" list. Select eqgame.exe</li>
   <li>Click "Attach". In the "Attach to Process" box that pops up, select only "Native" in the list. Click OK. The popup closes and
      the debugger attaches. Click "Close" in the processes window.</li>
   <li>To enable trapping of the 0xC0000005 exception, open Debug->Exceptions (alternatively ctrl+alt+E). Expand "Win32 Exceptions".
      Select "c0000005 Access violation". Select the two "Break into the debugger" options. Click OK.</li>
   <li>Debug spew can be found in the "Output window" by pressing ctrl+alt+O, or by going View->Other Windows->Output. The crash
      information will be displayed there when eqgame.exe crashes.</li>
   <li>VS.NET will automatically point to the source file and put a green arrow by the source line that caused the problem, assuming
      MacroQuest2 was compiled on the computer you are running this on.</li>
   <li>If the disassembly does not show up, you can switch to the disassembly window by hitting alt+8 or by going debug->windows->disassembly</li>
   <li>The function call stack can be found in the toolbar that contains "Program", "Thread" and "Stack Frame". The call stack will be seen in
      the "stack frame" combo box. Pull it down and take note of the top few if not the entire list.</li>
</ol>
<span class="txtbold">Visual Studio 6 (and for you retarded monkeys, VISUAL C++ 6.0 IS IN THIS CATEGORY)</span><br><br>
<ol start="1">
   <li>Build menu->Start Debug->Attach to process...</li>
   <li>Check the "Show System Processes" button. Select "eqgame.exe" in the list. Click OK.</li>
   <li>The c0000005 exception trapping can be enabled by going Debug->Exceptions. Select c0000005 Access violation. Click "Stop always".
      Click
      <span class="txtbold">Change</span>. Click
      <span class="txtbold">OK</span>
   </li>
   <li>Debug spew can be found in the "Output window" by hitting alt+2, or by going View->Output. The crash information will be displayed
      there when eqgame.exe crashes.</li>
   <li>VS6 should automatically point to the source file and put a green arrow by the source line that caused the problem, assuming
      MacroQuest2 was compiled on the computer you are running this on.</li>
   <li>If the disassembly does not show up, you can switch to the disassembly window by hitting alt+8 or by going View->Debug Windows->Disassembly</li>
   <li>The function call stack can be found in the "Call Stack" window, found by pressing alt+7 or by going View->Debug Windows->Call Stack</li>
</ol>
<a name="debugexample" id="debugexample"></a>
<span class="txtbold">Example Debug information</span><br><br>
When you post the information, please make sure you have some kind of arrow pointing to the specific line where the error occured.
In the example below is used to indicate the relative lines.<br><br>
<span class="txtbold">Debug Output Spew</span><br><br>
<blockquote>
[MQ2]Echo - [MQ2] no combat - ending<br>
[MQ2]WriteChatColor([MQ2] no combat - ending)<br>
[MQ2]WriteChatColor(Cleared the following: Timers Arrays)<br>
[MQ2]EndMacro - Ended<br>
[MQ2]WriteChatColor(The current macro has ended.)<br>
<span class="txtbold"> >>></span>First-chance exception at 0x03002e30 (MQ2Main.dll) in eqgame.exe: 0xC0000005:
Access violation reading location 0x0127bde8.<br><br>
</blockquote>
<span class="txtbold">Call Stack</span><br><br>
<blockquote>
<span class="txtbold"> >>></span>MQ2Main.dll!HideDoCommand(EQData::_SPAWNINFO * pChar=0x423338e8, char * szLine=0x0127bde8, int delayed=0)
Line 118 + 0x9 C++<br>
MQ2Main.dll!DoNextCommand() Line 40 C++<br>
MQ2Main.dll!Heartbeat() Line 255 + 0x5 C++<br>
MQ2Main.dll!Detour_ProcessGameEvents() Line 270 C++<br>
eqgame.exe!004acd5f()<br>
ntdll.dll!77f944a8()<br>
ntdll.dll!77f57d70()<br>
ntdll.dll!77f58a3a()<br>
ntdll.dll!77f5d760()<br>
ntdll.dll!77f8696d()<br>
ntdll.dll!77f59bf9()<br>
ntdll.dll!77f5d90e()<br>
ntdll.dll!77f5d8e2()<br>
ntdll.dll!77f944a8()<br>
ntdll.dll!77f944a8()<br>
ntdll.dll!77f57d70()<br>
ntdll.dll!77f58a3a()
</blockquote>
<span class="txtbold">Code where the crash occurred</span><br><br>
<blockquote>
MQ2CommandAPI.cpp (line 118)<br>
if (Pos==0) {<br>
<span class="tab">if (pCommand->Parse) {</span><br>
<span class="doubletab">pCommand->Function(pChar,ParseMacroParameter(pChar,szParam));</span><br>
<span class="tab">}</span><br>
<span class="tab">else</span><br>
<span class="doubletab">pCommand->Function(pChar,szParam);</span><br>
<span class="tabbold">>>>strcpy(szLastCommand,szLine);</span><br>
<span class="tab">return;</span><br>
}<br><br>
</blockquote>
<span class="txtbold">Disassembly</span><br><br>
<blockquote>
pCommand->Function(pChar,szParam);<br>
03002E15 mov eax,dword ptr [pChar]<br>
03002E18 lea edx,[esp+1018h]<br>
03002E1F push edx<br>
03002E20 push eax<br>
03002E21 call dword ptr [esi+40h]<br>
03002E24 add esp,8<br>
strcpy(szLastCommand,szLine);<br>
03002E27 mov edx,offset _szLastCommand (3075528h)<br>
03002E2C mov eax,ebx<br>
03002E2E sub edx,ebx<br>
<span class="txtbold">>>></span>03002E30 mov cl,byte ptr [eax]<br>
03002E32 mov byte ptr [edx+eax],cl<br>
03002E35 inc eax<br>
03002E36 test cl,cl<br>
03002E38 jne HideDoCommand+340h (3002E30h)<br>
return;<br>
</blockquote>
<a name="macfund" id="macfund"></a>
<span class="txtbold">Macro Fundamentals</span><br><br>
The use of macros is what makes MacroQuest2 extremely powerful. The only thing limiting your use of the macro commands and variables
is your imagination.<br><br>
The use of macros in MacroQuest2 is very similar to programming. The scripting language involves the use of slash commands (/command)and variables.<br><br>
Slash commands perform an action, while the MacroQuest2 Top Level Objects, data types, and variables help you access and manipulate information
in the game.<br><br>
The creation of a macro involves creating an Entry point into the macro, as shown below:<br><br>
<blockquote>
Sub Main<br>
&nbsp;&nbsp;&nbsp;:OnExit<br>
/return
</blockquote>
Everything within Sub Main is performed once you start the macro.<br>
Anything included after :OnExit will be called whenever an /endmacro command is issued. The use of :OnExit is optional.<br><br>
<a name="maccomments" id="maccomments"></a>
<span class="txtbold">Comments</span><br><br>
Comments are descriptive lines in a macro to make reading easier. These are not executed when the macro runs.<br><br>
Single line comments start with
<span class="txtbold">|</span>
<blockquote>
<span class="txtbold">|</span>This is a single line comment
</blockquote>
Multi line comments can also be used. Multi-line comments begin with
<span class="txtbold">|**</span> and end with
<span class="txtbold">**|</span>
<blockquote>
<span class="txtbold">|**</span> This is a multiple line comment where<br>
you could use this form of commenting
<span class="txtbold">**|</span>
</blockquote>
<a name="macpound" id="macpound"></a>
<span class="txtbold">Pound Commands</span><br>
Pound commands are pre-execution commands that are not run during the macro.<br><br>
<span class="txtbold">#turbo</span> [#]<br>
This will prevent bad macros from locking up the client by allowing you to limit the number of commands per iteration.
The default is 20, which is also the maximum value. A value of 1 will essentially disable #turbo.<br><br>
<span class="txtbold">#turbo</span> is active with the default of 20 in all macros even if you do not use #turbo in your macro.<br><br>
<span class="txtbold">#define</span> <em>replaceme</em> <em>replacement</em><br>
Replaces all occurrences of <em>replaceme</em> with <em>replacement</em> throughout the macro.<br>
<blockquote>
<span class="txtbold">Example</span><br>
#define Me charactername<br>
When the macro executes, when Me occurs, it will be replaced with charactername
</blockquote>
<span class="txtbold">#include</span> "filename"<br>
Allows you to use functions from another macro file by using /call.<br><br>
Normally the filename extension .inc is used to indicate that it is an include file, but you may use any extension name that you like.<br><br>
Subs present in an include file are accessible by the calling macro as if the Sub existed within the calling macro.<br><br>
<span class="txtbold">#event</span> eventname "string"<br>
Creates a custom event (Sub Event_eventname) that occurs whenever string is sent to the chat box.<br><br>
<blockquote>
<span class="txtbold">Example</span><br>
#event SpellFizzle "Your spell fizzles"<br><br>
Matching Sub:<br><br>
Sub Event_SpellFizzle<br><br><br>
/return
</blockquote>
A matching Sub must be used. Custom events are further explained in Subroutines.<br><br>
<span class="txtbold">#chat</span> channelname<br>
Defines which channel chat events will be queued from.<br><br>
Valid channels are: auc, chat, guild, group, ooc, say, shout, and tell.<br><br>
Only one channel may be used.<br><br>
<a name="macslash" id="macslash"></a>
<span class="txtbold">Slash Commands</span><br><br>
Slash commands in MacroQuest2 are essentially a scripting language. The use of these commands are what allows you to automate tasks.<br><br>
The list of commands available and their descriptions is under the section <a href="#mq2commands">
<span class="linktext">MacroQuest2 Commands</span></a><br><br>
<a name="macdatavars" id="macdatavars"></a>
<span class="txtbold">MQ2DataVars</span><br><br>
MQ2Data was designed so that accessing information could be done utilizing a uniform system. User variables are utilized as
MQ2Data Top-Level Objects.<br><br>
<span class="txtbold">About Types</span><br>
User variables can be declared as any MQ2DataVars type, however there is no reason to create a variable that is an independent
type such as the macroquest type, although it will work.<br><br>
<span class="txtbold">Scopes</span><br>
There are three scopes used by macros.<br><br>
<blockquote>
global<br>
Variables of global scope ALWAYS exist until they are deleted or macroquest ends<br><br>
outer<br>
Variables of outer scope exist while a macro is running<br><br>
local (default)<br>
Variables of local scope only exist while within a macro function or "Sub"
</blockquote><br>
<span class="txtbold">Commands specific to user defined variables</span><br><br>
<span class="command">/declare</span>
<span class="arg">varname</span>|
<span class="arg">varname[array extents]</span>
[type] [
<span class="opt">local</span>|
<span class="opt">global</span>|
<span class="opt">outer</span>]
[
<span class="arg">defaultvalue</span>]<br>
Creates a variable within a particular scope and of a particular type. The parameters must be given in order,
but any after varname may be skipped to use the default.<br><br>
<ol start="1">
   <li>The default type is string</li>
   <li>The default scope is local</li>
   <li>The default value is nothing (empty string, or 0)</li>
</ol>
These variables can be of any type that exist in MQ2DataVars. The variable will then have access to the members of that type.<br><br>
<blockquote>
<span class="txtbold">Examples</span><br><br>
/declare MyVar int outer<br>
Creates an int variable named MyVar that exists while the macro is running<br><br>
/declare MyVar local<br>
Creates a string variable named MyVar that exists within the Sub it was created in<br><br>
/declare MyTimer timer outer 3000<br>
Creates a timer named MyTime that is set to 3000 at creation and exists while the macro is running<br>
</blockquote>
<span class="txtbold">Arrays</span><br><br>
To create an array, attach brackets to the end of the variable name and place in it the number of elements per dimension.<br><br>
<blockquote>
<span class="txtbold">Array Examples</span><br><br>
MyArray[10] int<br>
Creates a single-dimension local array of int with 10 elements (1-10) all 0<br><br>
MyArray[10,10] int outer 5<br>
Creates a 2-dimensional 10x10 elements(1-10,1-10) int array of scope outer with all values of 5<br><br>
MyArray[4,5,6] string outer UNDEFINED-ARRAY-ELEMENT<br>
Creates a 3-dimensional array with 4x5x6 elements (1-4,1-5, 1-6) with UNDEFINED-ARRAY-ELEMENT in each location
</blockquote>
There is no limit to the number of dimensions or the number of elements in each dimension, but use your own good judgement.<br><br>
<span class="txtbold">Note</span>: You cannot make an array of timers.<br><br>
<span class="command">/deletevar</span>
<span class="arg">varname</span> [
<span class="opt">*</span>|
<span class="opt">global</span>]<br>
Deletes the variable varname. Using * global will delete all global variables.<br><br>
<span class="command">/varset</span>
<span class="arg">varname</span> [
<span class="arg">newvalue</span>]<br>
Sets a variable directly to a new value. Keep in mind that the type itself may reject this value depending on what you give it.
To clear the value of the variable, you may omit the new value.<br><br>
<blockquote>
<span class="txtbold">Examples</span><br><br>
/varset MyString ${MyString}stuff<br>
concatenate a string variable<br><br>
/varset MyString stuff${MyString}<br>
inserts stuff at the front of ${MyString}<br><br>
/varset MyInt 123<br>
Sets MyInt to 123<br><br>
/varset MyTimer 123s<br>
Sets MyTimer to 123 seconds<br><br>
/varset MyFloat 1.23<br>
Sets MyFloat to 1.23<br><br>
/varset MyIntArray[n] 123<br>
Sets array element n to 123<br><br>
</blockquote>
<span class="command">/varcalc</span>
<span class="arg">varname</span>
<span class="arg">formula</span><br>
Sets a variable directly to the numeric result of a calculation. Keep in mind that the type itself may reject this value
depending on what you give it. This will NOT work on strings!<br><br>
<blockquote>
<span class="txtbold">Examples</span><br><br>
/varcalc MyInt 1+2*2+1<br><br>
/varcalc MyInt 1+(2*2)+1
</blockquote>
<span class="command">/vardata</span>
<span class="arg">varname</span>
<span class="arg">newMQ2Datavalue</span><br>
Sets a variable directly to the end result of a MQ2Data string. To use this, do NOT put ${} around the outer data to parse<br>
This is most useful for when you want to keep the result of something instead of trying to make the variable accept a string with /varset.<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/vardata MyFloat Math.Calc[${Me.X}+${Me.Y}]
</blockquote>
<span class="txtbold">Parsing</span><br><br>
It is important to note that parsing of variables is performed from the inside to the outside, so any ${} inside your MQ2Data usage
get evaluated before continuing.<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
${MyString${MyVar}}<br>
The parser first evaluates ${MyVar}. If MyVar's value is 1, this is then ${MyString1}.<br>
${MyString1} is then evaluated, giving the value of whatever MyString1 is.
</blockquote>
${${MyString}} will get the value of a MQ2Data query stored in MyString. This could be Me.Buff[1], or a variable name, or
anything that is valid inside ${}. There is no limit to this recursion.<br><br>
${${${${${${${${${${MyString}}}}}}}}}} will evaluate inside to outside until there is nothing left to evaluate.<br><br>
This is also true for arrays: ${MyArray[${MyInt}]} has no problems.<br><br>
<a name="macsubs" id="macsubs"></a>
<span class="txtbold">Subroutines</span><br><br>
Every macro has a Sub Main that defines the macro's entry point. Sub Main accepts parameters if desired.<br><br>
<blockquote>
Sub Main<br>
<span class="tab">.</span><br>
<span class="tab">code</span><br>
<span class="tab">.</span><br>
/return<br>
</blockquote><br>
Additional Subs can be defined and used with /call. /return will return to the statement after the /call.<br><br>
All subroutines and Sub Main accept passed in parameters. Some information you need to remember is:
<ol start="1">
   <li>You do not have to define parameters for a sub</li>
   <li>Parameters passed to a Sub without defined parameters will default to Param0, Param1, ... Paramn</li>
   <li>Default parameters are of type string</li>
   <li>If you define the parameters of a Sub, the parameters can be of any data type that exists in MQ2DataVars</li>
   <li>If the type of a defined parameter is not given, it will default to string</li>
   <li>When you define the parameters, you may use the parameter names as variables in the sub</li>
   <li>If parameters are undefined, you would use Param0, Param1,...Paramn as the variable names</li>
</ol>
<blockquote>
Sub Main(int MyParam1, MyParam2, float MyParam3)<br>
<span class="tab">/if (${Defined[MyVar2]}) /goto :DoThis</span><br>
<span class="tab">/call MySub ${var1} ${var3}</span><br>
<span class="tab">/echo This value was returned from MySub: ${Macro.Return}</span><br>
/return<br>
</blockquote>
<blockquote>
<span class="txtbold">Sub without defined parameters</span><br><br>
Sub MySub<br>
/if (${Defined[Param0]}) /goto :DoThis<br>
<span class="tab">.</span><br>
<span class="tab">execute this code when /call MySub is executed. Parameters are not necessary.</span><br>
<span class="tab">.</span><br>
/return [value|${varname}]<br>
</blockquote>
<blockquote>
<span class="txtbold">Sub with defined parameters</span><br><br>
Sub MySub(int MyParam0, bool MyParam1, MyParam2)<br>
<span class="tab">.</span><br>
<span class="tab">execute this code when /call MySub is executed.</span><br>
<span class="tab">.</span><br>
/return [value|${varname}]
</blockquote>
<span class="doubletab">The above Sub has 3 Parameters, MyParam0 is an int type, MyParam1 is a boolean type , and MyParam2 is a string type.</span><br><br>
Special subroutines (Chat, Timers, and Custom) starting with Event_ are used in conjunction with the command /doevents<br><br>
<span class="txtbold">Chat Events</span><br><br>
<blockquote>
Sub Event_Chat[(ChatType,Sender,ChatText)]<br><br>
<span class="tab">ChatType : Channel of message (tell, group, say)</span><br>
<span class="tab">Sender : Name of the person who sent the message</span><br>
<span class="tab">ChatText : Text they sent</span><br><br>
</blockquote>
<blockquote>
<span class="txtbold">Example</span><br><br>
<span class="tab">Sub Event_Chat[(ChatType,Sender,ChatText)]</span><br>
<span class="doubletab">.</span><br>
<span class="doubletab">This code is executed when /doevents finds(queues) text in the channel defined by #chat "channel"</span><br>
<span class="doubletab">.</span><br>
<span class="tab">/return [value|${varname}]</span>
</blockquote>
<span class="txtbold">Timer Events</span><br><br>
<blockquote>
Sub Event_Timer[(Timer,OriginalValue)]<br>
<span class="tab">Timer: Timer that fired</span><br>
<span class="tab">OriginalValue : Value timer was originally set to</span>
</blockquote>
<blockquote>
<span class="txtbold">Example</span><br><br>
Sub Event_Timer[(Timer,OriginalValue)]<br>
<span class="tab">.</span><br>
<span class="tab">This code is executed when /doevents detects(queues) any defined timer reaching 0</span><br>
<span class="tab">.</span><br>
/return [value|${varname}]
</blockquote>
<a name="mq2custom" id="mq2custom"></a>
<span class="txtbold">Custom Events</span><br><br>
The new Custom Event system requires that you use the entire line of chat, BUT allows for making sections of the line a parameter.<br><br>
<blockquote>
Old Event system<br>
#Event SelfEcho "[MQ2] Genbot "<br><br>
Here is what the new Event look like:<br>
#Event SelfEcho "[MQ2] Genbot #1#"
</blockquote>
The #1# in the middle of the match text is what you use to indicate "this part of the message should be given to me in a parameter".<br>
The number between the # signs says what parameter number you want this to be in your Sub Event_Whatever.<br><br>
The first parameter in the sub will be the entire line itself... 1 starts AFTER that. e.g. this event could look like this:<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Sub Event_SelfEcho(string Line, string Command)<br><br>
Imagine this is the text that matches the event text:<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;"[MQ2] Genbot THIS IS MY COMMAND"<br><br>
The two parameters are:<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Line=[MQ2] Genbot THIS IS MY COMMAND<br>
&nbsp;&nbsp;&nbsp;&nbsp;Command=THIS IS MY COMMAND<br><br>
The system also allows you to grab a MQ2Data value like this:<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;#Event SelfEcho "[MQ2] Genbot |${Me}| #1#"<br><br>
The system itself has no idea that MQ2Data even exists, and is just looking for the | or #.<br><br>
MQ2 makes it parse what's inside the || as MQ2Data when the system checks to see if the event is a match.<br><br>
So, this event would only hit when, if ${Me} is currently "Lax", the message starts like..<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;"[MQ2] Genbot Lax whatever"<br><br>
Notes:<br>
<ol start="1">
   <li>Because this system lets you pick the parameter number of any portion of the message, some parameters might not get made
      (e.g. wont be ${Defined}... it's up to you to make sure you get the ones you need defined.</li>
   <li>The MQ2Data is not immediately parsed when the event is made, it gets parsed when the system checks to see if the event is a match.</li>
   <li>If you need to SKIP a portion of the text (dont care about it, just need to ignore part of the text that might not match, whatever),
      you can use #*#.</li>
</ol>
<blockquote>
<span class="txtbold">Example</span><br><br>
#Event SkillUp "You have become better at #1#! (#2#)"<br><br>
Sub Event_SkillUp(SkillUpText,Skill,int Amount)<br>
<span class="tab">/popup ${Skill} increased - ${Amount} ...</span><br>
<span class="tab">/echo ${Skill} increased - ${Amount} ...</span><br>
/return<br><br>
SkillUpText = "You have become better at #1#! (#2#)"<br>
Skill = Parameter 1 = #1#<br>
Amount = Parameter 2 = #2#
</blockquote>
<a name="mq2commands" id="mq2commands"></a>
<span class="txtbold">MacroQuest2 Commands</span><br><br>
<a name="a" id="a"></a>
<span class="command">/aa</span> [
<span class="opt">list all</span>|
<span class="opt">timers</span>]
[
<span class="opt">info</span>
<span class="arg">abilityname</span>]
[
<span class="opt">act</span>
<span class="arg">abilityname</span>]<br>
used to retrieve information on AA Abilities, or to activate an AA ability<br><br>
<table width="86%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>list all</td>
         <td>Lists all AA abilities available to you (doesn't mean you have them) in format [ID : name]</td>
      </tr>
      <tr>
         <td>list timers</td>
         <td>Lists just the AA you have that have timers</td>
      </tr>
      <tr>
         <td>info abilityname</td>
         <td>Gives information about a particular AA ability</td>
      </tr>
      <tr>
         <td>act abilityname</td>
         <td>Works like "/alt act ##", but takes the name instead of ## (note: You will notice a fraction of a second delay using this method vs. the /alt act ## method.)</td>
      </tr>
   </tbody>
</table><br>
<span class="command">/alert</span>
<span class="opt">add</span>
<span class="arg">#</span>
[
<span class="opt">pc</span>|
<span class="opt">npc</span>|
<span class="opt">corpse</span>|
<span class="opt">any</span>]
[
<span class="opt">radius</span>
<span class="arg">#</span>]
[
<span class="opt">range</span>
<span class="arg">lowerlevel upperlevel</span>] "
<span class="arg">spawnname</span>"
[
<span class="opt">clear</span>|
<span class="opt">list</span>
<span class="arg">#</span>]<br>
Used to manipulate alert lists which 'watch' for spawns.<br><br>
<blockquote>
<span class="txtbold"><br>Examples</span>
<table width="86%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>/alert add 1 "spawnname"</td>
         <td>Adds spawnname to alert list 1</td>
      </tr>
      <tr>
         <td>/alert clear #</td>
         <td>Clears all members from alert list 1</td>
      </tr>
      <tr>
         <td>/alert list #</td>
         <td>Lists all members of alert list 1</td>
      </tr>
      <tr>
         <td>/alert add 1 npc radius 300 'spawnname'</td>
         <td>Sets alert(1) to TRUE if 'spawnname' is within radius of 300 from your location</td>
      </tr>
      <tr>
         <td>/alert add 2 npc range 30 200 'spawnname'</td>
         <td>Sets alert(2) to TRUE if any 'spawnname' are within 30 to 200 range from your location</td>
      </tr>
   </tbody>
</table>
</blockquote>
<span class="command">/alias</span> [
<span class="opt">list</span>|
<span class="arg"><em>aliasname</em></span>
<span class="opt">delete</span>]
[
<span class="arg">name</span>
<span class="arg">command</span>]<br>
Useful for creating shorter versions of a command.
<blockquote>
/alias list<br>
Lists all aliases<br><br>
/alias /hp /echo My health is ${Me.PctHPs}<br>
Typing /hp in the EQ chat box will display: My health is % in the EQ chat window<br><br>
/alias aliasname delete <br>
Deletes <em>aliasname</em> from Macroquest.ini
</blockquote>
<span class="command">/altkey</span>
<span class="arg">command</span><br>
Execute a command while telling the window manager that the alt key is pressed. Can also be used together with /ctrlkey and/or /shift, as in
/ctrlkey /altkey /shiftkey command<br><br>
<a name="b" id="b"></a>
<span class="command">/banklist</span><br>
Displays an inventory of the currently logged in character in this format:<br><br>
<span class="tab">Bankslot#:Typeofcontainer</span><br>
<span class="tab">-ContainerSlot1:Item</span><br>
<span class="tab">-Containerslot2:Item</span><br>
<span class="tab">-etc</span><br><br>
<span class="command">/beep</span><br>
Performs a system beep<br><br>
<span class="command">/bind</span> [
<span class="opt">list</span> |
<span class="opt">eqlist</span> ] |
[~]
<span class="opt">name</span> [
<span class="arg">keycombo</span>|
<span class="opt">clear</span> ]<br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>list</td>
         <td>Lists all MQ2 binds</td>
      </tr>
      <tr>
         <td>eqlist</td>
         <td>Lists all Everquest binds</td>
      </tr>
      <tr>
         <td>name keycombo</td>
         <td>Binds <em>name</em> to the normal key combination <em>keycombo</em></td>
      </tr>
      <tr>
         <td>~name keycombo</td>
         <td>Binds <em>name</em> to the alternate key combination <em>keycombo</em></td>
      </tr>
      <tr>
         <td>name clear</td>
         <td>Clears the key combination from name</td>
      </tr>
      <tr>
         <td>~name clear</td>
         <td>Clears the alternate key combination from name</td>
      </tr>
   </tbody>
</table>
<br>
<span class="arg">keycombo</span> can be any combination of "alt", "shift" and "ctrl" plus a key.<br><br>
<blockquote>
<span class="txtbold">Examples</span>:
<table width="86%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>/bind forward e</td>
         <td>Binds the forward command to key e</td>
      </tr>
      <tr>
         <td>/bind ~forward up</td>
         <td>Binds the forward command to alternate key uparrow</td>
      </tr>
      <tr>
         <td>/bind forward clear</td>
         <td>Clears the key used for the forward command</td>
      </tr>
      <tr>
         <td>/bind '/bind cast1 shift+1</td>
         <td>Binds ''Cast gem 1'' to shift 1 key combination</td>
      </tr>
   </tbody>
</table>
<br>
Note: Changing EQ binds will not immediately update the display in the options window. Change the bind<br>
list selection in the options window to see the updated keys.<br><br>
</blockquote>
<a name="c" id="c"></a>
<span class="command">/call</span>
<span class="arg">subroutine</span> [
<span class="arg">Param0</span>... [
<span class="arg">Param#</span>]]<br>
Calls a subroutine (defined by Sub &lt;name>)<br><br>
<blockquote>
<span class="txtbold">Examples</span><br>
<table width="85%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>/call MySub</td>
         <td>Executes Sub MySub</td>
      </tr>
      <tr>
         <td>/call MySub varname1 varname2 ...[varname#]</td>
         <td>Executes Sub Mysub and passes parameters</td>
      </tr>
   </tbody>
</table>
</blockquote>
<span class="command">/caption</span>
<span class="opt">list</span>|
<span class="opt">type</span>
<span class="arg">value</span>|
<span class="opt">update</span> #
<span class="opt">MQCaptions [on|off]</span><br>

Command that sets the custom captions from in-game. Using this command will also change the ini settings for the particular level.<br><br>
EQ itself constantly updates the name of every spawn in the zone, even though only a small portion of those are displayed. Using /caption
allows you to modify how many spawn captions updated. The default setting for /caption update is 35.<br><br>
Also see NamingSpawn<br><br>
Player1 through Player4 in MacroQuest.ini are directly related to which /shownames level you use.<br><br>
<blockquote>
Player1 is linked to /shownames 1<br>
Player2 is linked to /shownames 2<br>
Player3 is linked to /shownames 3<br>
Player4 is linked to /shownames 4<br><br>
<span class="txtbold">Example</span><br><br>
Player1=${If[${NamingSpawn.Trader},Trader,]}${If[${NamingSpawn.Invis},(${NamingSpawn.DisplayName})<br><br>
Use "\n" to add a new line when setting captions<br><br>
</blockquote><br>
To use the default (EQ settings) clear the specific setting(Player1-Player4) in the ini using:<br><br>
<span class="tab">/caption Player1</span><br><br>
You can also configure Player1 - Player4 from the EQ client using:<br><br>
<span class="tab">/caption Playern configsettings</span><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/caption update 20<br>
Sets the number of nearest spawns for MQ2 to update the name of each pass to 20. By default, this is 35.
</blockquote>
When using MQCaption if no parameter is given, the default parameter is <strong>off</strong><br><br>
Look at the Macroquest.ini file in the zip file under [Captions] for examples of configuring Player1-Player4.<br><br>
<span class="command">/captioncolor</span>
<span class="opt">list</span> |
[
<span class="arg">name</span>
<span class="opt">off </span>|
<span class="opt">on</span>|# # #]<br>
Allows a lot of custom spawn caption coloring.<br><br>
The caption of marked NPCs or assist NPCs can be a specific color, the caption of bankers and merchants can be a set color.<br>
NPCs can be done by con color. All spawns can be done by CLASS color (using the raid settings).<br><br>
Note that you can only set the raid class colors right now through the raid options window. You can open this window by typing
/windowstate raidoptionswindow show<br><br>
<blockquote>
<span class="txtbold">Examples</span><br><br>
/captioncolor list<br>
/captioncolor pcclass on<br>
/captioncolor pctrader on<br>
/captioncolor pctrader 255 128 0
</blockquote>
<span class="tab"><span class="arg">name</span> that can be used</span><br>
<blockquote>
PC OFF (Default color for PCs)<br>
PCCon OFF (PCs by con color)<br>
PCPVPTeam OFF (PCs by PVP team color)<br>
PCRaid OFF (Raid members))<br>
PCClass OFF (PCs by class color(raid settings))<br>
PCGroup OFF (Group members))<br>
PCTrader ON Color: 255 127 0. (Traders)<br>
NPC OFF (NPC default color))<br>
NPCCon ON (NPCs by con color))<br>
NPCClass OFF (NPCs by class color (raid settings))<br>
NPCMerchant ON Color: 255 127 0. (NPC Merchants)<br>
NPCBanker ON Color: 200 0 255. (NPC Bankers)<br>
NPCAssist ON Color: 255 255 0. (NPCs from main assist))<br>
NPCMark ON Color: 255 255 0. (Marked NPCs)<br>
PetNPC OFF (Pet with NPC owner)<br>
PetPC OFF (Pet with PC owner)<br>
PetClass OFF (Pet by class color (raid settings))<br>
Corpse OFF (Corpses))<br>
CorpseClass OFF (Corpse by class color (raid settings))
</blockquote>
<span class="command">/cast</span> ["
<span class="arg">spellname</span>" | "
<span class="arg">${varname}</span>" |
<span class="arg">#</span>]
[
<span class="opt">item</span> "
<span class="arg">itemname</span>"]
[
<span class="opt">list</span>] <br>
Will cast the specified spell, or perform a right click of an item that has a right click spell
<blockquote>
/cast "complete heal"<br>
/cast "${SpellName}"<br>
/cast 1<br>
/cast item "mana robe"<br>
/cast list<br><br>
</blockquote>
<span class="command">/charinfo</span><br>
Returns Your current bind zone and location.<br>
<span class="tab">You are bound in zonename at x, y, z</span><br><br>
<span class="command">/cleanup</span><br>
Closes all open windows and then opens inventory window<br><br>
<span class="command">/clearerrors</span><br>
Clears each of the "last errors" in the macroquest type<br><br>
<span class="command">/click</span>
<span class="opt">left [center]</span>|
<span class="opt">right</span> [
<span class="opt">corpse</span>|
<span class="opt">target</span>|
<span class="opt">windowloc</span>]
[ [
<span class="opt">+-</span>]
<span class="arg">x</span> [
<span class="opt">+-</span>]
<span class="arg">y</span> ]
] <br>
Clicks the left/right mouse button at coordinates or a defined location.<br><br>
<blockquote>
<span class="txtbold">Examples</span>
<table width="86%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>/click left</td>
         <td>Performs a left mouse click at the current mouse position</td>
      </tr>
      <tr>
         <td>/click left 100 100</td>
         <td>Performs a left mouse click at 100 100</td>
      </tr>
      <tr>
         <td>/click left +30 -30</td>
         <td>Performs a left mouse click 30 pixels right and 30 pixels up from the current location</td>
      </tr>
      <tr>
         <td>/click right target</td>
         <td>Performs a right click on your current target</td>
      </tr>
	  <tr>
	     <td>/click left center</td>
		 <td>Performs a left click in the center of the viewport area</td>
	  </tr>
   </tbody>
</table>
</blockquote>
<br>*** Note:  /click does not work on UI windows or anything out of the viewport area.<br><br>
<span class="command">/combine</span> pack
<span class="arg">n</span><br>
Activates the Combine button combine of pack<br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/combine pack8
</blockquote>
<span class="command">/ctrlkey</span>
<span class="arg">command</span><br>
Execute a command while telling the window manager that the ctrl key is pressed. Can also be used together with /altkey and/or /shiftkey, as in
/ctrlkey /altkey /shiftkey command<br><br>
<span class="command">/custombind</span>
<span class="opt">list</span> [
<span class="opt">add</span>|
<span class="opt">delete</span>
<span class="arg">bindname</span>]
[
<span class="opt">set</span>|
<span class="opt">clear</span>
<span class="arg">bindname</span>
[
<span class="opt">-down</span>|
<span class="opt">-up</span>]
<span class="arg">command(s)</span>]<br>
<ul>
   <li>"/custombind list" will list all of your custom binds names and commands (the key combinations must be set using /bind)</li>
   <li>"/custombind add name" will add a new bind name for use here, with /keypress, /bind, etc.</li>
   <li>"/custombind delete name" will remove a custom bind</li>
   <li>"/custombind clear name [-down|-up]" will clear a specific command for a custom bind. If up or down is not specified, defaults to down.</li>
   <li>"/custombind set name [-down|up] command" will set a specific command for a custom bind. If up or down is not specified, defaults to down.</li>
</ul>
<blockquote>
Example usage (NOTE: MQ2's very first bind command is "RANGED" so you do not need to do this, but for example)<br><br>
/custombind add mybind<br>
/custombind set mybind /ranged<br>
/bind mybind n<br><br>
Binds the /ranged command to the n key
</blockquote>
<a name="d" id="d"></a>
<span class="command">/declare</span>
<span class="arg">varname</span>
<span class="opt">global</span> |
<span class="opt">local</span> |
<span class="opt">timer</span> |
<span class="opt">array</span> |
<span class="opt">array2</span><br>
Sets varname as a global, local, timer, one dimensional array or two dimensional array<br><br>
<span class="command">/defaulthud</span><br>
Loads the default HUD. See <a href="#mq2hud">
<span class="linktext">MQ2HUD</span></a> for specifics.<br><br>
<span class="command">/delay</span>&nbsp;&nbsp;
<span class="arg">#</span> |
<span class="arg">${varname}</span>
[
<span class="opt">s</span> |
<span class="opt">m</span>] [
<span class="arg">condition</span>]<br>
Fully pauses macro for a set amount of time. #|${varname} is in 10ths of a second (or suffixes s/m)
<blockquote>
<span class="txtbold">Examples</span>
<table width="86%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>/delay 5</td>
         <td>Delays the macro execution for 5 tenths of a second</td>
      </tr>
      <tr>
         <td>/delay 1s</td>
         <td>Delays the macro for 1 second</td>
      </tr>
      <tr>
         <td>/delay 1m</td>
         <td>Delays the macro for one minute</td>
      </tr>
   </tbody>
</table>
</blockquote>
<blockquote>
<span class="txtbold">Example of condition usage:</span><br><br>
<span class="tab">/keypress forward hold</span><br>
<span class="tab">/delay 1s ${Spawn[1234].Distance}&lt;${Spawn[1234].MaxMeleeTo}</span><br>
<span class="tab">/keypress forward</span><br><br>
Will execute <em>/keypress forward</em> when ${Spawn[1234].Distance}&lt;${Spawn[1234].MaxMeleeTo} evaluates to TRUE or after 1 second passes.
</blockquote><br>
<span class="command">/deletevar</span>
<span class="arg">name</span> [
<span class="opt">* global</span>]<br>
Deletes an existing variable. Gives a message if the variable did not exist, but no message if the variable did exist.<br><br>
Using * global will delete all global variables.<br><br>
<span class="command">/destroy</span><br>
Destroys whatever you have on your cursor. Use with care. [Not an MQ2 command but placed in the documentation for reference]<br><br>
Example:<br><br>
<span class="doubletab">/if (${Cursor.Name.Find[rusty]}) /destroy</span><br><br>
<span class="command">/doability</span> <em>combatabilityname</em><br>
Activates <em>combatabilityname</em> if it is ready to be used<br><br>
<span class="command">/docommand</span><br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/docommand ${If[${Me.Sitting},dotrue,dofalse]}
</blockquote><br>
<span class="command">/doevents</span> [
<span class="opt">flush</span> |
<span class="arg">specificevent</span>]<br>
Runs any events that have queued up or flushes queued events<br>
If specificevent is used, only those events will run (/doevents chat )<br>
<blockquote>
<span class="txtbold">Examples</span>
<table width="86%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>/doevents chat</td>
         <td>doevents will only run chat events</td>
      </tr>
      <tr>
         <td>/doevents flush</td>
         <td>Clears all events in the /doevents queue</td>
      </tr>
      <tr>
         <td>/doevents SpellFizzle</td>
         <td>doevents will only run SpellFizzle events</td>
      </tr>
   </tbody>
</table>
</blockquote>
<span class="command">/doors</span> ["
<span class="arg">filter</span>"]<br>
Lists all doors in the zone<br><br>
<span class="command">/doortarget</span>
<span class="arg">id#</span> | "
<span class="arg">filter</span>"<br>
"Targets" a door for use with /face door<br><br>
<span class="command">/dosocial</span><br><br>
<span class="command">/drop</span><br>
Drops the item currently on the cursor<br><br>
<span class="command">/dumpbinds</span>
<span class="arg">name</span><br>
Dumps all current binds to Configs\
<span class="arg">name</span>.cfg which can be used to load later.<br><br>
<a name="e" id="e"></a>
<span class="command">/echo</span>
<span class="arg">text</span><br>
Echo's the specified text and or variable values to the EQ client<br><br>
<blockquote>
Example:<br><br>
<span class="tab">/echo My current health is at ${Me.PctHPs}</span><br><br>
</blockquote>
<span class="command">/endmacro</span><br>
Stops the macro<br><br>
<a name="f" id="f"></a>
<span class="command">/face</span> [
<span class="opt">predict</span>] [
<span class="opt">fast</span>] [
<span class="opt">nolook</span>] [
<span class="opt">away</span>]
[
<span class="opt">alert</span>
<span class="arg">#</span> |
<span class="opt">loc</span>
<span class="arg">y</span>,
<span class="arg">x</span> |
<span class="opt">heading</span>
<span class="arg">angle</span> |
<span class="opt">item</span> |
<span class="opt">door</span> |
<span class="opt">id</span>
<span class="arg">#</span> |
<span class="arg">name</span>]<br>
Turns your character to face your target<br>
Using look will change your view elevation to face and look at the target at it's z axis location<br>
Using predict will return estimated distances, unless the target is stationary
<blockquote>
<span class="txtbold">Examples</span><br><br>
<table width="86%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>/face</td>
         <td>Turns you to face and look at your selected target</td>
      </tr>
      <tr>
         <td>/face nolook</td>
         <td>Faces your target without changing your vertical view angle</td>
      </tr>
      <tr>
         <td>/face fast</td>
         <td>Immediately turns your character to face and look at the target</td>
      </tr>
      <tr>
         <td>/face fast predict</td>
         <td>Immediately turns your character to face and look at the target's estimated position</td>
      </tr>
      <tr>
         <td>/face fast nolook</td>
         <td>Immediately turns your character to face your target without changing your vertical view angle</td>
      </tr>
      <tr>
         <td>/face fast nopredict</td>
         <td>Immediately turns your character to face and look at your target's estimated position</td>
      </tr>
      <tr>
         <td>/face item</td>
         <td>Faces and looks at the item from /itemtarget</td>
      </tr>
      <tr>
         <td>/face fast item</td>
         <td>Immediately faces and looks at the item from /itemtarget</td>
      </tr>
   </tbody>
</table>
</blockquote>
<span class="command">/filter</span> [
<span class="opt">macros</span>
<span class="opt">all</span>|
<span class="opt">enhanced</span>|
<span class="opt">none</span>]
[
<span class="opt">skills</span>
<span class="opt">all</span> |
<span class="opt">increase</span> |
<span class="opt">none</span>]
[
<span class="opt">target</span> |
<span class="opt">money</span> |
<span class="opt">food</span> |
<span class="opt">encumber</span> |
<span class="opt">debug</span>
<span class="arg">on</span> |
<span class="arg">off</span>]
[
<span class="arg">name</span> [
<span class="opt">add</span>
<span class="arg">text</span>] |
<span class="opt">remove</span> ]
[
<span class="opt">zrange</span>
<span class="arg">#</span>] [
<span class="opt">mq</span>
<span class="opt">on</span>|
<span class="opt">off</span>]<br><br>
<span class="command">/for</span>
<span class="arg">varname val1</span>
<span class="opt">to</span>|
<span class="opt">downto</span>
<span class="arg">val2</span> [
<span class="opt">step</span>
<span class="arg">val3</span>]<br>
Runs commands while changing varname from val1 to val2 in steps of val3 (default is 1)
<blockquote>
<span class="txtbold">/for</span> varname <em>value1</em> to|downto <em>value2</em> [step <em>val3</em>]<br>
<span class="tab">
   <span class="txtbold">.</span>
</span><br>
<span class="tab">commands</span><br>
<span class="tab">
   <span class="txtbold">.</span>
</span><br>
<span class="txtbold">/next</span> varname
</blockquote>
<a name="g" id="g"></a>
<span class="command">/goto</span>
<span class="txtbold">:</span>
<span class="arg">labelname</span>
<br>
Moves macro execution to a label
<blockquote>
/goto
<span class="txtbold">:</span>MyLabel
</blockquote>
<a name="h" id="h"></a>
<span class="command">/help</span>
<span class="opt">macro</span><br>
Lists all commands available to the client<br><br>
<span class="command">/hud</span>
<span class="opt">normal</span>|
<span class="opt">underui</span>|
<span class="opt">always</span><br>
Adds additional functionality to the MQ2 HUD. See <a href="#mq2hud">
<span class="linktext">MQ2HUD</span></a> for more details<br><br>
<span class="command">/highlight</span> "spawnname" [color # # #] [reset]<br>
Temporarily highlights these spawns on the in-game map<br><br>
<blockquote>
/highlight color # # #<br><br>
Sets the highlight color to an RGB value<br><br>
<span class="txtbold">Note</span>: You can use search filters for spawnname
</blockquote><br>
<a name="i" id="i"></a>
<span class="command">/identify</span><br>
Cross between the Identify spell and right-clicking an item for info<br><br>
<span class="command">/if</span> (
<span class="arg">formula</span>) {
<span class="arg">command(s)</span> }
Runs command(s) if formula evaluates to something other than 0.<br><br>
formulas are ONLY numeric operations. You must use MQ2Data string comparison to turn string comparisons into numeric operations.<br><br>
<em>formula</em> gets evaluated down to a single term from however many terms there are (You may use &#38;&#38; and || freely.)<br><br>
Multiple commands can be surrounded by { }, allowing multiple commands to be executed if the comparison is true.
} can be followed by else and a command. (also see
<span class="command">/multiline</span>)<br><br>
There is no need to use MATH.CALC in /if statements.
<blockquote>
<span class="txtbold">Example</span><br><br>
/if (${firstvar.Equal[This is true]}) {<br>
<span class="tab">/echo TRUE</span><br>
} else /if (!${secondvar}) {<br>
<span class="tab">/echo FALSE</span><br>
<span class="tab">/mqlog secondvar equals: ${secondvar}</span><br>
} else {<br>
<span class="tab">/echo It's Something else</span><br>
}
</blockquote>
<span class="command">/ini</span> "
<span class="arg">ini filename</span>" "
<span class="arg">keyname</span>" "
<span class="arg">valuename</span>" "
<span class="arg">value</span>"<br>
Writes data to the specified ini file. Also see the Ini TLO<br>
<blockquote>
<span class="txtbold">Example</span><br><br>
stuff.ini contains:<br><br>
[MySection]<br>
Key1=123<br>
Key2=This is cool!<br>
Key3=Wheeee... 15<br><br>
/ini "stuff.ini" "Section2" "ANewKey" "Some Data!"<br><br>
stuff.ini after the above command is executed:<br><br>
[MySection]<br>
Key1=123<br>
Key2=This is cool!<br>
Key3=Wheeee... 15<br><br>
[Section2]<br>
ANewKey=Some Data!<br>
</blockquote>
<span class="command">/itemnotify</span> [
<span class="opt">in</span>]
<span class="arg">location</span> [
<span class="arg">slot#</span>]
<span class="opt">notification</span><br>
Similar to the /click function, but does not involve the use of the mouse.<br>
<span class="arg">slot</span> can be an inventory slot name, while
<span class="arg">slot#</span> can be pack1-pack8, bank1-bank16 (sharedbank1,<br>
sharedbank2 and trade1-trade8 are not yet implemented in /itemnotify)<br>
<blockquote>
<span class="opt">notification</span> can be:<br><br>
<table width="86%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>leftmouse</td>
         <td>No action</td>
      </tr>
      <tr>
         <td>leftmouseup</td>
         <td>Removes the item and puts it on cursor (same as left clicking it)</td>
      </tr>
      <tr>
         <td>leftmouseheld</td>
         <td>For making hotkeys (you know, hold down left button)</td>
      </tr>
      <tr>
         <td>leftmouseheldup</td>
         <td>No action</td>
      </tr>
      <tr>
         <td>rightmouse</td>
         <td>No action</td>
      </tr>
      <tr>
         <td>rightmouseup</td>
         <td>Casts the effect, or opens the container (same as right clicking it)</td>
      </tr>
      <tr>
         <td>rightmouseheld</td>
         <td>Opens item display window</td>
      </tr>
      <tr>
         <td>rightmouseheldup</td>
         <td>Closes the item display window for that item</td>
      </tr>
   </tbody>
</table>
</blockquote>
<blockquote>
<span class="txtbold">Examples</span>:<br><br>
Exchange of item in primary slot:<br>
&nbsp;&nbsp;&nbsp;/itemnotify pack8 leftmouseup<br>
&nbsp;&nbsp;&nbsp;itemnotify mainhand leftmouseup<br>
&nbsp;&nbsp;&nbsp;itemnotify pack8 leftmouseup<br><br>
Click grim aura earring:<br>
&nbsp;&nbsp;&nbsp;itemnotify rightear rightmouseup
</blockquote>
<span class="command">/items</span> ["
<span class="arg">filter</span>"]<br>
Lists all ground spawns in the zone if "
<span class="arg">filter</span>" is not used<br><br>
<span class="command">/itemtarget</span> "
<span class="arg">itemname</span>"<br>
"Targets" a ground spawn or environmental container<br><br>
<span class="tab">/itemtarget &lt;"itemname"&gt;</span><br><br>
<a name="j" id="j"></a>
<a name="k" id="k"></a>
<span class="command">/keepkeys</span> [
<span class="opt">off</span>|
<span class="opt">on</span>]<br>
Keeps keys that were pressed with /keypress in their current state when a macro ends.<br><br>
<span class="tab">/keepkeys<span class="doubletab">Gives the state of keepkeys</span></span><br><br>
<span class="command">/keypress</span>
<span class="arg">name</span> [
<span class="opt">hold</span>]<br>
/keypress is used strictly for the keys that are mapped by the EQ client. /keypress does not actually emulate<br>
the key being pressed and therefore will not interfere if you're typing. See Appendix D for the list of mapped key names<br>
See
<span class="txtbold">/press</span> or
<span class="txtbold">/sendkey</span> for using unmapped keys.<br><br>
<blockquote>
<span class="txtbold">Examples</span>
<table width="86%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>/keypress jump</td>
         <td>Taps the key mapped as the jump key</td>
      </tr>
      <tr>
         <td>/keypress forward hold</td>
         <td>Holds down the mapped forward key</td>
      </tr>
      <tr>
         <td>/keypress forward</td>
         <td>Releases the mapped forward key after /keypress forward hold</td>
      </tr>
   </tbody>
</table>
</blockquote>
Note: /keypress works with EQ key binds as well as MQ2 keybinds. See
<span class="command">/bind</span><br><br>
<a name="l" id="l"></a>
<span class="command">/listmacros</span> ["
<span class="arg">filter</span>"]<br>
Lists macro files that are in the 'macros' directory (listed alphabetically)<br><br>
<span class="command">/loadcfg</span>
<span class="arg">filename</span>
<span class="arg">command</span><br>
Loads a cfg file<br><br>
* Plugins can use LoadCfgFile(filename)<br>
* Configs that are automatically loaded:<br>
<blockquote>
AutoExec.CFG<br>
Executed on the first pulse<br><br>
CharSelect.CFG<br>
Executed when you are put at character select<br><br>
server_character.CFG<br>
Executed when this character enters the world<br><br>
mapshortname.CFG<br>
Executed when you zone into this zone<br><br>
pluginname-AutoExec.CFG<br>
Executed when this plugin is loaded (after its initialization is complete)<br><br>
</blockquote><br>
<blockquote>
<span class="txtbold">Examples of file names</span>:<br>
tallon_lordsoth.cfg<br>
character<br><br>
oot.cfg, soldungb.cfg, soldunga.cfg, take.cfg<br>
maps<br><br>
MQ2Map-AutoExec.CFG, MQ2ChatWnd-AutoExec.CFG<br>
plugins
</blockquote>
<span class="command">/loadhud</span>
<span class="arg">hudname</span><br>
Loads a HUD with the name hudname from the ini. See <a href="#mq2hud">
<span class="linktext">MQ2HUD</span></a> for specifics.<br><br>
<span class="command">/loadspells</span> "
<span class="arg">spellset</span>"<br>
Will load one of your memorized sets of spells<br><br>
<span class="command">/location</span><br>
Returns your x,y location and the cardinal direction you are facing.<br><br>
<span class="indent">Resulting message: Your Location is x, y, z, and are heading south</span><br><br>
<span class="command">/loginname</span><br>
Displays the login name of the account you are currently logged into<br><br>
<span class="command">/look</span> [[
<span class="arg">-</span>]
<span class="arg">angle</span>]<br>
Changes the angle you are looking. &lt;angle> can be any value between -128 and 128. Default for &lt;angle> is 0.
<blockquote>
<span class="txtbold">Examples</span>
<table width="86%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>/look 50</td>
         <td>Changes your look angle to +50</td>
      </tr>
      <tr>
         <td>/look -75</td>
         <td>Changes your look angle to -75 (down)</td>
      </tr>
   </tbody>
</table>
</blockquote>
<a name="m" id="m"></a>
<span class="command">/macro</span>
<span class="arg">filename</span> [
<span class="arg">Param0</span> [
<span class="arg">Param1</span>...]]<br>
Starts running a macro. Calling a macro from another macro will end the calling macro.<br><br>
<span class="tab">/macro mymacro</span><br>
<span class="tab">/macro mymacro "water flask" "metal bits"</span><br><br>
<span class="command">/mapclick</span>
<span class="arg">keycombo</span>
<span class="arg">commandoption</span><br>
command and special right click commands (hold a combination of shift, control, left alt, right alt to execute a special command when
right clicking on a spawn). Defaults include left-alt right-click to highlight and control r-click tohide. (Requires MQ2Map plugin to be loaded)<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/mapclick lalt+shift /mycommand %i<br>
leftalt+shift right click on a spawn will cause /mycommand to be executed.
</blockquote>
<span class="command">/mapfilter</span>
<span class="opt">help</span>|
<span class="opt">option</span>
[
<span class="opt">color</span>
<span class="arg">R# G# B#</span>] (Requires MQ2Map plugin to be loaded)<br><br>
<span class="txtbold">Map filtering options</span>:
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>All</td>
         <td>Enables/disables map functions</td>
      </tr>
      <tr>
         <td>CastRadius #</td>
         <td>Sets radius of casting circle to # (omit or set to 0 to disable)</td>
      </tr>
      <tr>
         <td>Corpse</td>
         <td>Displays corpses</td>
      </tr>
      <tr>
         <td>Custom</td>
         <td>Sets custom filter (omit to disable). Used same search options as /target and the Spawn search TLOs</td>
      </tr>
      <tr>
         <td>Ground</td>
         <td>Displays ground items</td>
      </tr>
      <tr>
         <td>Group</td>
         <td>Displays group members in a specific color</td>
      </tr>
      <tr>
         <td>Help</td>
         <td>Displays the available options for /mapfilter</td>
      </tr>
      <tr>
         <td>Menu</td>
         <td>Allows display of right-click context menu</td>
      </tr>
      <tr>
         <td>Mount</td>
         <td>Displays mounts</td>
      </tr>
      <tr>
         <td>NormalLabels</td>
         <td>Toggles non-MQ2 label display</td>
      </tr>
      <tr>
         <td>NPC</td>
         <td>Displays NPCs</td>
      </tr>
      <tr>
         <td>NPCConColor</td>
         <td>Displays NPCs in consider colors</td>
      </tr>
      <tr>
         <td>PC</td>
         <td>Displays PCs</td>
      </tr>
      <tr>
         <td>PCConColor</td>
         <td>Displays PCs in consider colors</td>
      </tr>
      <tr>
         <td>Pet</td>
         <td>Displays pets</td>
      </tr>
	  <tr>
         <td>spellradius</td>
         <td>Displays a circle on the map, normally for spell radius.</td>
      </tr>
	  
      <tr>
         <td>Target</td>
         <td>Displays your target</td>
      </tr>
      <tr>
         <td>TargetLine</td>
         <td>Displays a line to your target</td>
      </tr>
      <tr>
         <td>TargetMelee #</td>
         <td>Draws a melee-range circle around your target</td>
      </tr>
      <tr>
         <td>TargetRadius #</td>
         <td>Sets radius of a circle around your target to # (omit or set to 0)</td>
      </tr>
      <tr>
         <td>Timer</td>
         <td>Displays Timer objects on the map</td>
      </tr>
      <tr>
         <td>Trap</td>
         <td>Displays trap objects on the map</td>
      </tr>
      <tr>
         <td>Trigger</td>
         <td>Displays hidden triggers/traps</td>
      </tr>
      <tr>
         <td>Untargetable</td>
         <td>Displays untargettable spawns on the map</td>
      </tr>
      <tr>
         <td>Vector</td>
         <td>Displays heading vectors</td>
      </tr>
   </tbody>
</table>
<br>
<span class="command">/maphide</span> "
<span class="arg">spawnname</span>" [
<span class="opt">reset</span>] (Requires MQ2Map plugin to be loaded)<br>
Command to hide
<span class="arg">spawnname</span> from the map. Hidden spawns are in effect until the mapped spawns are re-generated
(such as changing some map filters)<br><br>
<blockquote>
<span class="txtbold">Examples</span><br><br>
/maphide reset<br>
Re-generates the spawn list.<br><br>
/maphide npc range 1-39<br>
Hides all spawns level 39 and below
</blockquote>
<span class="command">/mapnames</span>
<span class="opt">normal</span>|
<span class="opt">target</span>
<span class="arg">options</span>
(Requires MQ2Map plugin to be loaded)<br>
Sets the way real spawn names are displayed for a) your current target, or b) normally.. You can set up a custom scheme using special "%"
codes made up just for this.<br><br>
The command takes a parameter specifying normal/target, and then the custom string. The plugin will replace the %l %r %c %N stuff with a
piece of information. Each code is CASE SENSITIVE and exactly one character in length. It is important to note that names are NOT updated
continually, except for your target if the target map filter is on. In testing the system was approximately 4 times as slow if all names
were updated continually.<br><br>
<blockquote>
Here are a few examples as a guide<br><br>
/mapnames normal [%l %R %C] %N<br><br>
/mapnames target [%l %R %C] %N (%x, %y, %z)
</blockquote>
<span class="txtbold">Current % codes</span> (more may be added later)<br><br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>n</td>
         <td>"Decorated" name like "a_coyote34"</td>
      </tr>
      <tr>
         <td>N</td>
         <td>"Cleaned up" name like "a coyote"</td>
      </tr>
      <tr>
         <td>h</td>
         <td>Current health %</td>
      </tr>
      <tr>
         <td>i</td>
         <td>SpawnID</td>
      </tr>
      <tr>
         <td>x</td>
         <td>X coordinate</td>
      </tr>
      <tr>
         <td>y</td>
         <td>Y coordinate</td>
      </tr>
      <tr>
         <td>z</td>
         <td>Z coordinate</td>
      </tr>
      <tr>
         <td>R</td>
         <td>Race full name - lower case "r" is reserved for race 3-letter code</td>
      </tr>
      <tr>
         <td>C</td>
         <td>Class full name - lower case "c" is reserved for class 3-letter code</td>
      </tr>
      <tr>
         <td>l</td>
         <td>Level</td>
      </tr>
   </tbody>
</table>
<span class="txtbold">Note</span>: % - shows a % sign (so if you want your health display to show "100%" you would use %h%%)<br><br>
<span class="command">/mapshow</span> "
<span class="arg">spawnname</span>" [
<span class="opt">reset</span>] (Requires MQ2Map plugin to be loaded)<br>
command to explicitly show spawnname on the map. Only in effect until the mapped spawns are re-generated (same as maphide).<br><br>
<span class="command">/memspell</span>
<span class="arg">gem#</span>&nbsp;&nbsp;"
<span class="arg">spell name</span>"<br>
Attempts to memorize "
<span class="arg">spell name</span>" into
<span class="arg">gem#</span><br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
<span class="tab">/memspell 1 "complete heal" memorizes Complete Heal in spell gem 1</span><br><br>
</blockquote>
<br>
<span class="command">/mqfont</span>
<span class="arg">#</span><br>
Changes the size of the font in the MQ2ChatWnd. The font sizes are not the same as EQ's chat window sizes yet, so be aware
of that. You will probably want # to be in the range of -3 to 2.<br><br>
<span class="command">/mqlog</span>
<span class="arg">text</span>|
<span class="opt">clear</span><br>
Logs text to 'logs'directory or clears the log file. The log file will be saved in the logs folder.<br><br>
<span class="tab">/mqlog The number of combines completed is: ${CombineCount}</span><br><br>
<span class="command">/mqpause</span> [
<span class="opt">on</span>|
<span class="opt">off</span>]<br>
Pauses/resumes a macro to aid in debugging or chatting. Not using a parameter will toggle pausing on/off<br><br>
<span class="command">/multiline</span>
<span class="arg">delimiter</span>
<span class="command">command</span>
[
<span class="arg">delimiter</span>
<span class="command">command</span>
[
<span class="arg">delimiter</span>
<span class="command">command</span>
[ ...]]]]<br>
Executes all commands<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/multiline
<span class="txtbold">;</span> /stand
<span class="txtbold">;</span>/rude
<span class="txtbold">;</span>/sit
</blockquote>
<a name="n" id="n"></a>
<span class="command">/nomodkey</span>
<span class="arg">command</span><br>
Releases all ctrl/alt/shift keys for the duration of the execution of command<br><br>
<span class="command">/noparse</span>
<span class="arg">command</span><br>
Prevents any MQ2Data from being parsed when used in a command.<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/noparse /ini blah blah blah ${stuff}<br><br>
<span class="txtbold">Note</span>: ${stuff} is literal instead of changing it to the current value of stuff.
</blockquote>
<span class="command">/notify</span>
<span class="arg">windowname</span>
<span class="arg">0</span> |
<span class="opt">controlname</span>
[
<span class="arg">notification</span> [
<span class="arg">data</span>]]<br>
/notify is used to interact with UI windows directly instead of using the mouse. /notify cannot be used to interact with objects.<br><br>
Currently
<span class="opt">notification</span> can be: leftmouse, leftmouseup, leftmousehold, rightmouse, enter, close, newvalue, mouseover,<br>
or history. The use of
<span class="arg">data</span> will usually not be necessary unless you are notifying a slider control.<br>
Entering "0" for control would send the message to the window itself (used for "close" at least, possibly others). See /windows.<br><br>
notification can be:<br><br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>leftmouseup</td>
         <td>Performs a left click on controlname</td>
      </tr>
      <tr>
         <td>leftmouseheld</td>
         <td>Left click and hold on controlname until leftmouseheldup is performed</td>
      </tr>
      <tr>
         <td>leftmouseheldup</td>
         <td>Releases the mouse from leftmouseheld</td>
      </tr>
      <tr>
         <td>rightmouseup</td>
         <td>Performs a right click on controlname</td>
      </tr>
      <tr>
         <td>rightmouseheld</td>
         <td>Performs a right click and hold on controlname</td>
      </tr>
      <tr>
         <td>rightmouseheldup</td>
         <td>Releases the mouse from rightmouseheld</td>
      </tr>
      <tr>
         <td>enter</td>
         <td>Presses the enter key on controlname</td>
      </tr>
      <tr>
         <td>close</td>
         <td>Clicks the Close Window gadget of windowname</td>
      </tr>
      <tr>
         <td>mouseover</td>
         <td>Hovers the mouse over controlname</td>
      </tr>
      <tr>
         <td>newvalue n</td>
         <td>Changes the value in controlname to n</td>
      </tr>
      <tr>
         <td>listselect n</td>
         <td>Selects the nth item in the controlname list</td>
      </tr>
   </tbody>
</table>
<blockquote><br>
<span class="txtbold">Examples</span>
<table width="86%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>/notify hotbuttonwnd HB_Button1 leftmouseup</td>
         <td>Activates the first hotkey</td>
      </tr>
      <tr>
         <td>/notify somewindow SomeSlider newvalue 100</td>
         <td>Moves the referenced slider in the window to 100</td>
      </tr>
      <tr>
         <td>/notify trackingwnd 0 close</td>
         <td>Closes the tracking window</td>
      </tr>
      <tr>
         <td>/notify TradeskillWnd RecipeList listselect 1</td>
         <td>Selects the first item in the RecipeList listbox</td>
      </tr>
   </tbody>
</table>
</blockquote>
You can use /notify to click on a link in the chat window.<br><br>
Use the following command:<br><br>
/notify ChatWindow CW_ChatOutput link &lt;link structure&gt;<br><br>
&lt;link structure&gt; consists of 44 characters of the link starting with the 2nd character of the item id (ie, drop the leading 0).<br><br>
<a name="o" id="o"></a>
<a name="p" id="p"></a>
<span class="command">/plugin</span>
<span class="opt">list</span> |
<span class="arg">name</span> [noauto] |
<span class="opt">unload</span> [noauto]<br>
Lists, loads, and unloads plugins. Using the noauto switch prevents updating of Macroquest.ini when loading or unloading the plugin<br>
<br>
<blockquote>
/plugin <em>name</em> noauto<br>
loads <em>name</em> without updating Macroquest.ini<br><br>
/plugin <em>name</em> unload noauto<br>
unloads <em>name</em> without updating Macroquest.ini
</blockquote>
<span class="command">/popup</span>
<span class="arg">text</span><br>
Displays
<span class="arg">text</span> in the center of your screen. Currently the text is fixed font and color.<br>
<blockquote>
/popup Current Mana: ${Me.CurrentMana}<br>
/popup Run away! Run away!
</blockquote>
<a name="q" id="q"></a>
<a name="r" id="r"></a>
<span class="command">/ranged</span> [
<span class="arg">spawnID</span>]<br>
Performs a ranged attack. Use with no parameters to do a ranged attack on your current target,<br>
or with
<span class="arg">spawnID</span> to do a ranged attack on that spawn.<br><br>
<span class="command">/return</span> [
<span class="arg">value</span>|
<span class="arg">${varname}</span>]<br>
Returns to the line immediately following the call. Can return values or variables.<br>
<blockquote>
<span class="txtbold">Example</span><br><br>
Sub MySub<br>
<span class="tab">
   <span class="txtbold">.</span>
</span><br>
<span class="tab">&lt;code&gt;</span><br>
<span class="tab">
   <span class="txtbold">.</span>
</span><br>
/return [value|${varname}]
</blockquote>
<a name="s" id="s"></a>
<span class="command">/sellitem</span>
<span class="arg">1</span>|
<span class="arg">#</span><br>
Sells the selected item. If # is specified it will sell that # of a stacked item.<br><br>
<span class="command">/setautorun</span><br>
Creates an ini entry in Macroquest.ini. Forces character into autorun at login.<br><br>
<span class="command">/seterror</span>
<span class="arg">errormsg</span> |
<span class="opt">clear</span><br>
Sets macroquest.Error to errormsg<br><br>
<blockquote>
/seterror clear<br>
Clears the last error value
</blockquote>
<span class="command">/shiftkey</span>
<span class="arg">command</span><br>
Execute a command while telling the window manager that the shift key is pressed. Can also be used together with
/altkey and/or /ctrlkey, as in /ctrlkey /altkey /shiftkey command<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/shiftkey /itemnotify pack1 leftmouseup<br>
Pick up an entire stack
</blockquote><br>
<span class="command">/skills</span> ["
<span class="arg">skillname</span>"] (Skills are listed in Appendix C)<br>
Lists your skills, or your skill level
<blockquote>
<span class="txtbold">Examples</span><br><br>
<table width="86%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>/skills</td>
         <td>Lists all of your skills with skill level</td>
      </tr>
      <tr>
         <td>/skills pottery</td>
         <td>Returns your pottery skill</td>
      </tr>
   </tbody>
</table>
</blockquote>
<span class="command">/spew</span>
<span class="opt">on</span>|
<span class="opt">off</span><br>
Enables or disables the output of Debug Spew to a file<br><br>
<span class="command">/squelch</span>
<span class="arg">command</span><br>
Executes a command and prevents any output from the command. This does the following:<br>
<span class="tab">1: Turns mq filter off</span><br>
<span class="tab">2: Executes the command</span><br>
<span class="tab">3: Turns mq filter back to the state it was in before step 1</span><br><br>
** It is recommended that you do the following in your .CFG files that you dont want to see output from<br>
<blockquote>
/squelch /filter mq on<br>
&lt;do your stuff here&gt;<br>
/squelch /filter mq off<br>
</blockquote>
<span class="command">/substitute</span> [
<span class="arg">orig</span>
<span class="arg">substitution</span> |
<span class="opt">delete</span>]
[
<span class="opt">list</span>]<br>
Allows you to create custom midline substitutions that will work<br><br>
Substitutes are called from any alias or commandline by using the percent sign (%)
<blockquote>
<span class="txtbold">Examples</span><br><br>
&nbsp;&nbsp;&nbsp;/substitute mom Mother<br>
&nbsp;&nbsp;&nbsp;/substitute omg Oh my god!<br>
&nbsp;&nbsp;&nbsp;/substitute k "%omg, kill %t before I tell your %mom"<br><br>
The final example if you typed "/say %k" would produce:<br><br>
&nbsp;&nbsp;&nbsp;Oh my god!, kill <em>targetname</em> before I tell your Mother<br><br>
Please note the following rules/reminders:
<ol start="1">
   <li>You don't use the percent signs when creating the substitutions or editing your config file.</li>
   <li>You can use MQ's subsitutions without spaces around them (unlike EQs!) (ie: /echo "%omg%mom" would return "/echo Oh my god!Mother"</li>
   <li>Substitutions do not currently work in macros.</li>
   <li>/sub is currently a valid shorthand for "/subsitute"</li>
   <li>You can use EQ's wildcards (ie: %t) within your substitutions; however, you have to leave spaces around them (yes, they suck)</li>
   <li>You cannot CURRENTLY replace EQ wildcards with MQ substitutions (ie, you can't make a replacement for %m (This may be supported in the future.)</li>
</ol>
</blockquote>
<a name="t" id="t"></a>
<span class="command">/target</span>
<span class="opt">option</span><br><br>
<span class="opt">option</span> can be:<br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>clear</td>
         <td>Clears your current target</td>
      </tr>
      <tr>
         <td>pc|npc</td>
         <td>Selects nearest pc or npc.</td>
      </tr>
      <tr>
         <td>corpse</td>
         <td>Selects the nearest corpse</td>
      </tr>
      <tr>
         <td>pet</td>
         <td>Selects the nearest pet</td>
      </tr>
      <tr>
         <td>class <em>class</em></td>
         <td>Selects the nearest <em>class</em> match to target</td>
      </tr>
      <tr>
         <td>race <em>race</em></td>
         <td>Selects nearest <em>race</em> to target</td>
      </tr>
      <tr>
         <td>range <em>min</em> <em>max</em></td>
         <td>Sets the minimum and maximum level range to target</td>
      </tr>
      <tr>
         <td>noalert <em>alert</em>#</td>
         <td>Target nearest spawn not on alert #</td>
      </tr>
      <tr>
         <td>nearalert <em>alert</em>#</td>
         <td>***NEED TO FILL THIS DESCRIPTION IN***</td>
      </tr>
      <tr>
         <td>notnearalert <em>alert</em>#</td>
         <td>***NEED TO FILL THIS DESCRIPTION IN***</td>
      </tr>
      <tr>
         <td>zradius <em>zheight</em></td>
         <td>Targets the spawn if it is within the height value</td>
      </tr>
      <tr>
         <td>radius <em>distance</em></td>
         <td>Targets the spawn if it is within the 2D <em>distance</em></td>
      </tr>
      <tr>
         <td>nopcnear <em>radius</em></td>
         <td>***NEED TO FILL THIS DESCRIPTION IN***</td>
      </tr>
      <tr>
         <td>notid|id <em>spawnid</em></td>
         <td>***NEED TO FILL THIS DESCRIPTION IN***</td>
      </tr>
      <tr>
         <td>spawnname</td>
         <td>Targets the nearest specified spawnname</td>
      </tr>
      <tr>
         <td>myself|mycorpse</td>
         <td>Targets the yourself or your corpse</td>
      </tr>
      <tr>
         <td>alert <em>alert</em>#</td>
         <td>Targets the specified keyword</td>
      </tr>
   </tbody>
</table>
<br>	
<span class="command">/timed</span>
<span class="arg">deciseconds</span>
<span class="arg">command</span><br>
Executes a command after a specified duration (in deciseconds like pause)<br><br>
Note: This does not "pause" successive commands.<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/timed 10 /echo 1 second has passed
</blockquote>
<a name="u" id="u"></a>
<span class="command">/unload</span><br>
Unloads MacroQuest<br><br>
<span class="command">/updateitems</span><br>
Walks through the characters inventory and bank and collects item id's and names.<br>
The item id and name is placed in ItemDB.txt which is created if it does not already exist.<br><br>
<a name="v" id="v"></a>
<span class="command">/varcalc</span>
<span class="arg">varname</span>
<span class="arg">equation</span><br>
Calculates the value of
<span class="arg">equation</span> and stores the result in
<span class="arg">varname</span><br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/varcalc MyVar ${Me.CurrentMana} - ${Spell[Complete Heal].Mana}
</blockquote>
<span class="command">/vardata</span>
<span class="arg">varname</span>
<span class="arg">new_mq2data_value</span><br>
Sets a variable directly to the end result of a MQ2Data string.<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/vardata MyFloat Math.Calc[${Me.X}+${Me.Y}]
</blockquote>
<span class="command">/varset</span>
<span class="arg">varname</span>
<span class="arg">value</span>|
<span class="arg">${varname2}</span><br>
Sets
<span class="arg">varname</span> to the specified value. If the variable is a timer, value can be in 10ths of a<br>
second, suffix s for seconds, m for minutes.
<blockquote>
<span class="txtbold">Examples</span>
<table width="86%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>/varset myvar 25</td>
         <td>Sets myvar to 25</td>
      </tr>
      <tr>
         <td>/varset array[3] 10</td>
         <td>Sets the value of array[3] to 10</td>
      </tr>
      <tr>
         <td>/varset casttimer 30</td>
         <td>Sets the timer to 3 seconds</td>
      </tr>
      <tr>
         <td>/varset array[2,12] 45</td>
         <td>Sets the value of array[2,12] to 45</td>
      </tr>
      <tr>
         <td>/varset casttimer 3m</td>
         <td>Sets the Timer to 3 minutes</td>
      </tr>
   </tbody>
</table>
</blockquote>
<a name="w" id="w"></a>
<span class="command">/where</span> [
<span class="opt">pc</span>|
<span class="opt">npc</span>|"
<span class="arg">spawn name</span>"]<br>
Lists where the closest spawn or pc is<br><br>
<blockquote>
<span class="txtbold">Examples</span>
<table width="86%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>/where</td>
         <td>Lists the closest pc or npc</td>
      </tr>
      <tr>
         <td>/where pc</td>
         <td>Lists the closest pc</td>
      </tr>
      <tr>
         <td>/where npc</td>
         <td>Lists the closest npc</td>
      </tr>
      <tr>
         <td>where npc "orc pawn"</td>
         <td>Lists where the closest orc pawn is</td>
      </tr>
   </tbody>
</table>
</blockquote>
<span class="tab">The message returned is:</span><br>
<span class="tab">The closest 'spawnname' is a level # &lt;race&gt; &lt;class&gt; and &lt;distance&gt;
   away to the &lt;direction&gt;, Z difference = #.##.</span><br><br>
<span class="command">/who</span>
<span class="opt">option</span><br><br>
<span class="opt">option</span> can be:
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>group|pc|npc [invis|merchant|tribute|gm|corpse|any]</td>
         <td>Lists all matches in the zone for the option used.<br>Note that tribue is tribute master and gm is Guild Leader</td>
      </tr>
      <tr>
         <td>range minlevel maxlevel</td>
         <td>Lists all matches for the option used that are within the level range designated.</td>
      </tr>
      <tr>
         <td>radius #</td>
         <td>Lists all matches for the option used that are within the radius designated.</td>
      </tr>
      <tr>
         <td>guild | noguild</td>
         <td>Lists all guild members in the zone or pc's in the zone not in a guild</td>
      </tr>
      <tr>
         <td>lfg</td>
         <td>Lists all characters who are looking for a group in the zone</td>
      </tr>
      <tr>
         <td>loc intX intY</td>
         <td>Returns the spawn located that intX intY</td>
      </tr>
      <tr>
         <td>name</td>
         <td>Lists the character with the name <em>name</em> if he/she/it is in the zone</td>
      </tr>
      <tr>
         <td>alert #</td>
         <td>Lists any npc/pc on alert #</td>
      </tr>
      <tr>
         <td>noalert #</td>
         <td>Match all spawns not on list #</td>
      </tr>
      <tr>
         <td>knight</td>
         <td>returns Paladins and Shadowknights in the zone</td>
      </tr>
      <tr>
         <td>tank</td>
         <td>returns paladins, shadowknights, and warriors in the zone</td>
      </tr>
      <tr>
         <td>healer</td>
         <td>returns druids and clerics in the zone</td>
      </tr>
      <tr>
         <td>dps</td>
         <td>returns wizards, rangers, and rogues in the zone</td>
      </tr>
      <tr>
         <td>slower</td>
         <td>returns shamans, enchanters, and beastlords in the zone</td>
      </tr>
   </tbody>
</table>
<br>
<span class="command">/whofilter</span>
<span class="opt">afk</span>|
<span class="opt">anon</span>|
<span class="opt">class</span>
|
<span class="opt">arg</span>|
<span class="opt">gm</span>|
<span class="opt">guild</span>
|
<span class="opt">holding</span>|
<span class="opt">invisible</span>|
<span class="opt">lastname</span>
|
<span class="opt">level</span>|
<span class="opt">ld</span>|
<span class="opt">lfg</span>|
<span class="opt">npctag</span>
|
<span class="opt">race</span>|
<span class="opt">spawnid</span>|
<span class="opt">trader</span> [
<span class="opt">on</span>
|
<span class="opt">off</span>]<br>
Toggles the display of the specified option when using /who<br><br>
<span class="command">/whotarget</span><br>
MacroQuest enhances this command by allowing you to use it on any target (including NPC's) and displays the<br>
target's class, race, level, guild, con color, and distance (even if the player is in anonymous or roleplaying mode).<br><br>
<span class="command">/windows</span><br>
List all available UI windows. See <a href="#n">
<span class="linktext">/notify</span></a> command.<br><br>
<span class="command">/windowstate</span>
<span class="opt">window</span> [
<span class="opt">open</span>|
<span class="opt">close</span>]
Opens or closes the selected window.<br>
<span class="opt">window</span> can be: inventory, merchant, corpse, spellbook, map, or notes<br><br>
<a name="x" id="x"></a>
<a name="y" id="y"></a>
<a name="z" id="z"></a>
<a name="mq2datatypes" id="mq2datatypes"></a>
<span class="txtbold">MacroQuest2 Data Types</span><br><br>
MacroQuest2 data types are the means by which properties or methods of objects are accessed and used within macros.<br><br>
<span class="txtbold">Syntax</span><br><br>
The basic syntax for usage is something like this:<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;${TopLevelObject[index].Member[index].Member[index]}<br><br>
<span class="txtbold">Usage</span><br><br>
To access a property with a TLO you begin with the TLO type you want, then append successive type members or properties until you
get the result you're looking for.<br><br>
<span class="txtbold">Note</span>: The use of properties can become very complex, in other words, extremely long,
especially when using Math.Calc.<br><br>
<span class="txtbold">Note</span>: You absolutely MUST pay attention to the return types of each member and object. Make sure
when doing comparisons you are comparing a string to a string, or a numeric to a numeric. Using .Equal or .NotEqual to compare .Name to .ID
will give errors.<br><br>
Also be sure to look at the To String of each type.<br><br>
${Target.Name.Equal[${Me.ID}]} will not work. .Name returns a string, but .ID returns an int<br><br>
Accessing these properties/methods begins with a Top Level Object(TLO). The TLO is then appended with the property/method desired.<br><br>
Example of building:<br><br>
Suppose you want to display the distance to an NPC that you have targeted:<br><br>
First you start with the TLO
<span class="arg">spawn</span>
<span class="txtbold">Target</span>.
<span class="arg">spawn</span> indicates that the Target TLO has access to spawn
reference type members.<br><br>
Start with the TLO: Target<br><br>
Looking at the spawn reference type, you can find a list of the properties and members of
<span class="txtbold">spawn</span><br><br>
You want to find the distance to the target so you would select one of the
<span class="txtbold">Distance</span> members.
For this example we will use<br><br>
<blockquote>
<span class="arg">float</span> Distance<br>
Distance from player in (x,y)<br><br>
</blockquote>
You then append .Distance to the TLO name: Target.Distance<br><br>
Once you have gotten to the information you want, you MUST enclose the entire string in ${ }<br><br>
So the full example would be:<br><br>
<blockquote>
/echo Distance to target is: ${Target.Distance}<br><br>
</blockquote>
which returns the distance to your target in the
<span class="arg">float</span> format ###.###<br><br>
All TLO's and reference data types have access to immediate types, but ensure you use the appropriate members of the immediate
types with reference types or TLO's.<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
Using the
<span class="arg">int</span> immediate type member with a spawn reference type member:<br><br>
If you wanted to convert the float value Distance to an int value, you could append one of the members of the
<span class="arg">float</span> immediate type.<br><br>
${Target.Distance.Int}<br><br>
</blockquote>
<a name="typemembers" id="typemembers"></a>
<span class="txtbold">MQ2Data Members</span><br><br>
Members can also be describd as Properties or things that are property (owned by, contained by, etc) of objects of a type.<br><br>
For example, the "desk" type of object might have a property called "Screws".<br><br>
The "Screws" property itself might be represented like this:<br>
<blockquote>
int Screw
</blockquote>
"int" is a type of object which means WHOLE NUMBER while Screws is the name of the object<br><br>
To demonstrate an object named Screws that is a member of the "desk" type, we may also say "int desk.Screws"<br>
The return type is of the last member appended.
<a name="inheritance" id="inheritance"></a>
<span class="txtbold"><br><br>Inheritance</span><br><br>
Inheritance is a way to get less specific about what "type" of object you are looking at. The way this works is you have two types,
like "desk" and "woodendesk". All wooden desks are desks, but not all desks are wooden desks. So now we have "woodendesk ThisDesk".
Remember that "desk" we said has a member called "Screws" of type "int". "woodendesk" IS a desk, so it automatically gets a member
called "Screws". Therefore, "ThisDesk.Screws", even though it is a wooden desk and not just "desk", is valid.<br><br>
<a name="typecasting" id="typecasting"></a>
<span class="txtbold">Typecasting</span><br><br>
This is a relatively advanced topic. *Please* be aware that you can cause unavoidable crashes by using this. Type casting is
causing a type to be directly seen as another type. For example, if you have an int value such as the number of people in your
group -- the Group top level object used without an index -- you could cast this as a bool like so: ${Group(bool)}.<br><br>
Immediate value types can be safely cast as any other immediate value type, or as an Independent type (although that's useless).
Independent types can be cast as any other Independent type (although that's useless), or as any immediate value (they will act
as though the value is 0).<br><br>
Immediate-->Immediate<br>
Independent-->Immediate<br><br>
The problem, and most of the actual usage, lies in casting reference types. You can get the memory address of any reference type
by casting it as an int, or you could see if the memory address is non-zero by casting it as a bool. One potential usage of
type casting THAT SHOULD NEVER BE USED is to store a memory address to be cast back to a reference type later. The address is
NOT guaranteed to be valid when used again!<br><br>
The syntax for casting is something like this:
<blockquote>
${TopLevelObject[index](cast).Member[index](cast).Member[index](cast)}
</blockquote>
To change ${Target} from a string to a boolean:
<blockquote>
${Target}(bool)
</blockquote>
Which could be used in:
<blockquote>
${If[${Target}(bool),true,false]}
</blockquote>
All Boolean use must use a numeric property. ${If[${Target.Name},true,false]} will fail.<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
<blockquote>
/varset myvar ${Spawn[1](int)}<br>		
/echo ${Int[${myvar}](spawn).Name}<br><br>	
</blockquote>
Do NOT do that! It will only work until the memory address changes. Instead, use the ID as you always have:<br><br>
/varset myvar ${Spawn[1].ID}
/echo ${Spawn[${myvar}].Name}	
</blockquote>
However, the part that will come in handy is for people to extend these types by using their own types in a plugin. If you
wanted, you could have your plugin make a type called "mytype" that accesses a spawn. Maybe a member of mytype is called
"IsCloseToMe" and is a bool value. This would let you do: ${Spawn[1](mytype).IsCloseToMe}.<br><br>
<span class="txtbold">Important Note</span>: Special handling is used for casting to "type", such that the new data is equal
to the old type, and the new type is "type".<br><br>
<a name="toplevelobjects" id="toplevelobjects"></a>
<span class="txtbold">Top Level Objects</span><br><br>
A "Top Level Object" is any kind of object that you can start with when trying to find a property.<br><br>
<ol start="1">
   <li>The TLO type is indicated by the italic text preceding the name</li>
   <li>The TLO has access to the type members</li>
   <li>The TLO name is static and it cannot be changed</li>
</ol>
TLO's are called Top Level Objects because nothing comes before them. A TLO is not a member of any object. It is
itself an object. However, the TLO has access to all members and properties of its type, and any inherited members of it's type.<br><br>
The immediate type named int and the Top Level Object named Int are not the same thing. The TLO is an object only, not a type.<br><br>
The type members that the TLO has access to is shown in italics.<br><br>
<span class="txtbold">Example</span><br><br>
character
<span class="txtbold">Me</span> is a Top Level Object of type
<span class="arg">character</span>, but
<span class="txtbold">Me</span>
is not the
<span class="arg">character</span> type.
<span class="txtbold">Me</span> has access to the members of the
<span class="arg">character</span> type<br><br>
<span class="txtbold">TLO List</span><br><br>
<a name="tloaltability" id="tloaltability"></a>
<span class="txtbold">AltAbility</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>altability</em> AltAbility[n]</td>
         <td>Alt ability by number</td>
      </tr>
      <tr>
         <td><em>altability</em> AltAbility[name]</td>
         <td>Alt ability by name</td>
      </tr>
   </tbody>
</table>
<br>
access to types: <a href="#refaltability"><span class="linktext">altability</span></a><br><br>
<strong>Note</strong>:  The AltAbility TLO should not be used except for experimental data.  If you've already purchased the AA, use Me.AltAbility.  Me.AltAbility is much faster.<br>
<blockquote>
<span class="txtbold">Examples</span><br><br>
/echo ${AltAbility[Combat Stability].RequiresAbility}}<br>
Returns the pre-requisite AA ability needed to train in this Ability<br><br>
/echo ${AltAbility[n].RequiresAbility}}<br>
Returns the pre-requisite AA ability needed to train in the Ability with the number n
</blockquote>
<a name="tlobool" id="tlobool"></a>
<span class="txtbold">Bool</span><br>
<em>bool</em> Bool[text]<br><br>
access to type(s): <a href="#immbool">
<span class="linktext">bool</span></a><br><br>
Creates a bool object using text. Value is set to TRUE unless text is "NULL" "FALSE" or "0" (capitalization does not count)<br><br>
<blockquote>
Examples<br><br>
/declare MyVar bool<br><br>
/varset MyVar ${Bool[This is true]}<br>
/echo ${MyVar} would echo TRUE<br><br>
/varset MyVar ${Bool[NULL]}<br>	
/echo ${MyVar} would echo FALSE
</blockquote>
<a name="tlome" id="tlome"></a>
<span class="txtbold"><br>Me</span><br>
<em>character</em> Me<br><br>
access to types: <a href="#refcharacter">
<span class="linktext">character</span></a>, <a href="#refspawn">
<span class="linktext">spawn</span></a><br><br>
character object which allows you to get properties of you as a character<br><br>
${Me} is a character object, so has access to all of the properties of the character reference Type. The character Type also has
access to the properties of the spawn Type.<br><br>
To get information on your character, you would use the TLO Me and append the particular property name you are interested in, for example:
<blockquote>
<em>int</em> CurrentHPs 	Current hit points
</blockquote>
The italicized text preceding the member name indicates the return type, in this case an integer. The property name follows the return type.<br><br>
So to display your characters current hit points, you would use
<blockquote>
<span class="txtbold">Example</span><br><br>
/echo ${Me.CurrentHPs}
</blockquote>
If you look at the members and properties of the character referenceType, you will notice that there is no Speed property, but since
character has access to the properties of the spawn reference Type, you can find your character's speed by using ${Me.Speed}<br><br>
<a name="tlocorpse" id="tlocorpse"></a>
<span class="txtbold">Corpse</span><br>
<em>corpse</em> Corpse<br><br>
access to type(s): <a href="#immcorpse">
<span class="linktext">corpse</span></a><br><br>
Object of type corpse which is the currently active corpse (the one you are looting)
<blockquote>
<span class="txtbold">Example</span><br><br>
/if ${Corpse.Open} {<br>
<span class="tab">Do this stuff</span><br>
}<br><br>
If the loot window is open Do this stuff
</blockquote>
<a name="tlocursor" id="tlocursor"></a>
<span class="txtbold">Cursor</span><br>
<em>item</em> Cursor<br><br>
access to type(s): <a href="#refitem">
<span class="linktext">item</span></a><br><br>
Creates an object which references the item on your cursor
<blockquote>
<span class="txtbold">Example</span><br><br>
/if (${Cursor.ID} ) /autoinv<br>
If something is on your cursor, drop it into the autoinventory
</blockquote>
<a name="tlodefined" id="tlodefined"></a>
<span class="txtbold">Defined</span><br>
<em>bool</em> Defined[name]<br><br>
access to type(s): <a href="#immbool">
<span class="linktext">bool</span></a><br><br>
Determines whether a variable, array, or timer with this name exists<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/if (${Defined[varname]}) {
<span class="tab">Do this stuff</span>
}<br><br>
If the variable has been declared execute Do this stuff
</blockquote>
<a name="tloground" id="tloground"></a>
<span class="txtbold">Ground</span><br>
<em>ground</em> Ground<br><br>
access to type(s): <a href="#refground">
<span class="linktext">ground</span></a><br><br>
Object which references the ground spawn item you have targeted
<blockquote>
<span class="txtbold">Example</span><br><br>
/echo ${Ground.Distance}<br>
Echos the distance to the ground item you have targeted
</blockquote>
<a name="tlofinditem" id="tlofinditem"></a>
<span class="txtbold">FindItem</span><br>
<em>item</em> FindItem[ [=]name]<br><br>
access to type(s): <a href="#refitem">
<span class="linktext">item</span></a><br><br>
Object which is the found item on your character, a corpse, or a merchant by partial name match.
Using =name will only find exact match
<blockquote>
<span class="txtbold">Examples</span><br><br>
/itemnotify ${FindItem[sprinkler].InvSlot} leftmouseup<br>
Picks up your cleric epic from your corpse<br><br>
/itemnotify ${FindItem[swirling].InvSlot} leftmouseup<br>
Picks up any item containing the word swirling from the opened corpse
</blockquote>
<a name="tlofinditembank" id="tlofinditembank"></a>
<span class="txtbold">FindItemBank</span><br>
<em>item</em> FindItemBank[ [=]name]<br><br>
access to type(s): <a href="#refitem">
<span class="linktext">item</span></a><br><br>
Find item in bank by partial name match. =name will find exact match only
<blockquote>
<span class="txtbold">Example</span><br><br>
/echo ${FindItem[=Swirling Shadows]}<br>
This is a simple example with little use, but If the item is found, the name of the item will be echoed
</blockquote>
<a name="tlofinditembankcount" id="tlofinditembankcount"></a>
<span class="txtbold">FindItemBankCount</span><br>
<em>int</em> FindItemBankCount[ [=]name]<br><br>
access to type(s): <a href="#immint">
<span class="linktext">int</span></a><br><br>
Count of items in bank by partial name match. =name will find exact match only
<blockquote>
<span class="txtbold">Example</span><br><br>
/echo ${FindItemBankCount[Swirling]}<br>
Returns how many Swirling Shadows you have in your bank
</blockquote>
<a name="tlofinditemcount" id="tlofinditemcount"></a>
<span class="txtbold">FindItemCount</span><br>
<em>int</em> FindItemCount[ [=]name]<br><br>
access to type(s): <a href="#immint">
<span class="linktext">int</span></a><br><br>
Count of items on character by partial name match. =name will find exact match only
<blockquote>
<span class="txtbold">Example</span><br><br>
/echo ${FindItem[=Water Flask]}<br>
Echoes the number of Water Flask you have in your inventory
</blockquote>
<a name="tlofloat" id="tlofloat"></a>
<span class="txtbold">Float</span><br>
<em>float</em> Float[n]<br><br>
access to type(s): <a href="#immfloat">
<span class="linktext">float</span></a><br><br>
Creates a float object from n
<blockquote>
<span class="txtbold">Example</span><br><br>
${Float[12.345].Deci}<br>
Creates a float object of 12.345 and truncates the decimal to one decimal place
</blockquote>
<a name="tlogametime" id="tlogametime"></a>
<span class="txtbold">GameTime</span><br>
<em>time</em> GameTime<br><br>
access to type(s): <a href="#reftime">
<span class="linktext">time</span></a><br><br>
Makes a time object called GameTime
<blockquote>
<span class="txtbold">Example</span><br><br>
/echo ${GameTime.Date}<br>
Echos todays real time date to the chat window
</blockquote>
<a name="tlogroup" id="tlogroup"></a>
<span class="txtbold">Group</span><br>
<em>group</em> Group<br><br>
access to type(s): <a href="#refgroup">
<span class="linktext">group</span></a><br><br>
Makes a group object called Group<br><br>
<a name="tloheading" id="tloheading"></a>
<span class="txtbold">Heading</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>heading</em> Heading[degrees]</td>
         <td>Creates a heading object using degrees (clockwise)</td>
      </tr>
      <tr>
         <td><em>heading</em> Heading[y,x]</td>
         <td>Creates a heading object using the heading to this y,x location.</td>
      </tr>
      <tr>
         <td><em>heading</em> Heading[N,W]</td>
         <td>Same as above, just an alternate method</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#immheading">
<span class="linktext">heading</span></a><br><br>
Object that refers to the heading to of something or a location<br><br>
<blockquote>
<span class="txtbold">Examples</span><br><br>
/echo ${Heading[15].ShortName}<br>
Echos the shortname of the heading of 15 degrees.<br><br>
/echo ${Heading[-342,700].ShortName}<br>
Echos the shortname heading to the location -342,700
</blockquote>
<a name="tloif" id="tloif"></a>
<span class="txtbold">If</span><br>
<em>string</em> If[conditions,whentrue,whenfalse]<br><br>
access to type(s): <a href="#refstring">
<span class="linktext">string</span></a><br><br>
Performs Math.Calculate on conditions, gives whentrue if non-zero, gives whenfalse if zero
<blockquote>
<span class="txtbold">Examples</span><br><br>
/docommand ${If[${Me.Sitting},/stand,/echo I am not sitting down]}<br>
If I am sitting, stand up, Otherwise echo I am not sitting down<br><br>
/docommand ${If[${Me.CurrentHP}&lt;50,/cast "Gate",/goto :Continue]}<br>
If my hp percent is below 50 cast the Gate spell, otherwise goto the Continue label
</blockquote>
<a name="tloini" id="tloini"></a>
<span class="txtbold">Ini</span><br>
<em>string</em> Ini[filename,section,key,default]<br><br>
access to type(s): <a href="#refstring">
<span class="linktext">string</span></a><br><br>
Reads value(s) from an ini file located in a relative or absolute path
<ol start="1">
   <li>The section, key, and default do not need to be given</li>
   <li>section and key may be set to -1 to skip them and give a new value.</li>
   <li>If section or key are not given, multiple values are read.</li>
</ol>
<blockquote>
<span class="txtbold">Example</span><br><br>
sample.ini contains:<br><br>
[KeyOne]<br>
value1=foo<br>
value2=bar<br><br>
[KeyTwo]<br>
Value3=foobar<br><br>
${Ini[sample.ini,KeyOne,value1]} returns foo<br>
${Ini[sample.ini,KeyOne] returns value1|value2||<br>
${Ini[sample.ini] returns KeyOne|KeyTwo||
</blockquote>
<a name="tloint" id="tloint"></a>
<span class="txtbold">Int</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> Int[n]</td>
         <td>Make an int object using n</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#immint">
<span class="linktext">int</span></a><br><br>
Object that creates an integer from n<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/echo ${Int[123].Hex}<br>
echos the result of the conversion of 123 to an int in hexadecimal
</blockquote>
<a name="tloinvslot" id="tloinvslot"></a>
<span class="txtbold">InvSlot</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>invslot</em> InvSlot[name]</td>
         <td>Inventory slot by name</td>
      </tr>
      <tr>
         <td><em>invslot</em> InvSlot[#]</td>
         <td>Inventory slot by number</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#imminvslot">
<span class="linktext">invslot</span></a><br><br>
See <a href="#appendixe">
<span class="linktext">Appendix E: Slot Names</span></a> for slot names and numbers
<blockquote>
<span class="txtbold">Examples</span><br><br>
/if (!${Window[pack${bag}].Open}) /itemnotify pack${bag} rightmouseup<br>
If the container in slot pack${bag} isn't opened, open it<br><br>
/if (${InvSlot[bank${index}].Item.Container}) /call CheckPack bank${index}<br>
Is the item in bank${index} a container, if so /call CheckPack and pass the parameter bank${index}
</blockquote>
<a name="tlolastspawn" id="tlolastspawn"></a>
<span class="txtbold">LastSpawn</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>spawn</em> LastSpawn[n]</td>
         <td>The nth latest spawn (chronological order)</td>
      </tr>
      <tr>
         <td><em>spawn</em> LastSpawn[-n]</td>
         <td>The nth oldest spawn (chronological order)</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#refspawn">
<span class="linktext">spawn</span></a><br><br>
Note: When you enter a zone you dont know the spawn order of anything already there, just anything that spawns later.<br><br>
The useful thing about ${LastSpawn[-1]} is just being able to get the first spawn in the list which you might use in
conjunction with other spawn members to go through the entire spawn list in a loop.<br><br>
<blockquote>
<span class="txtbold">Examples</span><br><br>
/echo ${LastSpawn[10].ID}<br>
Echos the spawnID of the 10th mob to spawn in the zone<br><br>
/echo ${LastSpawn[-10]}<br>
Echos the name of the 10th to last spawn in the zone
</blockquote>
<a name="tlolineofsight" id="tlolineofsight"></a>
<span class="txtbold">LineOfSight</span><br>
<em>bool</em> LineOfSight[y,x,z:y,x,z]<br><br>
access to type(s): <a href="#immbool">
<span class="linktext">bool</span></a><br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/echo ${LineOfSight[20,40,-20:100,-300,70}<br>
Returns TRUE if Line of Sight is clear between the two locations
</blockquote>
<a name="tlomacro" id="tlomacro"></a>
<span class="txtbold">Macro</span><br>
<em>macro</em> Macro<br><br>
access to type(s): <a href="#indmacro">
<span class="linktext">macro</span></a><br><br>
Creates an object related to the macro that is currently running
<blockquote>
<span class="txtbold">Example</span><br><br>
/echo This macro has been running for: ${Macro.RunTime.Second} seconds
</blockquote>
<a name="tlomacroquest" id="tlomacroquest"></a>
<span class="txtbold">MacroQuest</span><br>
<em>macroquest</em> MacroQuest: MacroQuest<br><br>
Creates an object related to MacroQuest information<br><br>
access to type(s): <a href="#indmacroquest">
<span class="linktext">macroquest</span></a><br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/echo ${MacroQuest.LastTell}<br>
Returns the name of the last person to send you a tell
</blockquote>
<a name="tlomath" id="tlomath"></a>
<span class="txtbold">Math</span><br>
<em>math</em> Math<br><br>
access to type(s): <a href="#indmath">
<span class="linktext">math</span></a><br><br>
Creates a Math object which gives allows access to the math type members.
<blockquote>
<span class="txtbold">Example</span><br><br>
/echo ${Math.Sqrt[49]}<br>
Echos the square root of 49<br><br>
/echo ${Math.Rand[500]}<br>
Echos a random number between 0 and 500<br><br>
/echo ${Math.Calc[49%6+25]}<br>
Echos the result of 49%6+25, or 1+25
</blockquote>
<a name="tlomerchant" id="tlomerchant"></a>
<span class="txtbold">Merchant</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>merchant</em> Merchant</td>
         <td>Currently active merchant</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#indmerchant">
<span class="linktext">merchant</span></a><br><br>
Object that interacts with the currently active merchant<br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/echo ${Merchant.Name}<br>
Echos the name of the merchant whos window you have open
</blockquote>
<a name="tlonamingspawn" id="tlonamingspawn"></a>
<span class="txtbold">NamingSpawn</span><br>
<em>spawn</em> NamingSpawn<br><br>
access to type(s): <a href="#refspawn">
<span class="linktext">spawn</span></a><br><br>
Spawn currently being captioned. NULL when not captioning.<br><br>
Add custom spawn captioning through the additions to the [Captions] section in Macroquest.ini<br><br>
Empty the setting to make it use EQ's default.<br><br>
By default our player caption is slightly different - it shows their guild status if they are officer or leader of a guild.<br><br>
Pet captions are a little different also - it will display the name of its master if it is a player's pet.<br><br>
Use "\n" to mean a new line when setting captions.<br><br>
There are 4 categories of captions for Players<br><br>
The ini options are:<br>
<blockquote>
Player1= what is displayed using /shownames 1<br>
Player2= what is displayed using /shownames 2<br>
Player3= what is displayed when using /shownames 3<br>
Player4 = what is displayed when using /shownames 4
</blockquote>
Look in the [Captions] section of the Macroquest.ini file included in the zip file for examples<br><br>
<a name="tlonearestspawn" id="tlonearestspawn"></a>
<span class="txtbold">NearestSpawn</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>spawn</em> NearestSpawn[n]</td>
         <td>The nth nearest spawn</td>
      </tr>
      <tr>
         <td><em>spawn</em> NearestSpawn[search]</td>
         <td>The nearest spawn matching this search (same as Spawn[search])</td>
      </tr>
      <tr>
         <td><em>spawn</em> NearestSpawn[n,search]</td>
         <td>The nth nearest spawn matching this search</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#refspawn">
<span class="linktext">spawn</span></a><br><br>
Object that is used in finding spawns nearest to you<br><br>
<blockquote>
<span class="txtbold">Examples</span><br><br>
/echo ${NearestSpawn[npc range 100 "orc pawn"]}<br>
Finds any npc containing orc pawn in its name that is within 100 of you<br><br>
/echo ${NearestSpawn[1]}<br>
Finds the closest spawn to you
</blockquote>
<a name="tloplugin" id="tloplugin"></a>
<span class="txtbold">Plugin</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>plugin</em> Plugin[name]</td>
         <td>Finds plugin by name</td>
      </tr>
      <tr>
         <td><em>plugin</em> Plugin[n]</td>
         <td>Plugin by number, starting with 1 and stopping whenever the list runs out of plugins.</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#refplugin">
<span class="linktext">plugin</span></a><br><br>plugin<br><br>
Object that has access to members that provide information on a plugin<br><br>
<a name="tloraid" id="tloraid"></a>
<span class="txtbold">Raid</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>raid</em> Raid</td>
         <td>Current raid</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#indraid">
<span class="linktext">raid</span></a><br><br>
Object that has access to members that provide information on your raid<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/echo ${Raid.Members}<br>
Echos the number of members in your raid
</blockquote>
<a name="tloselect" id="tloselect"></a>
<span class="txtbold">Select</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em>Select[argument,value1[,value2,...]</td>
         <td>Returns a numeric value for a position match of the argument</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#immint">
<span class="linktext">int</span></a><br><br>
Object used to determine if a match was made to <em>argument</em> in the given set of values
<blockquote>
<span class="txtbold">Examples</span><br><br>
/echo ${Select[${Stuff},this,that,another]}<br><br>
If ${Stuff} is equal to <strong>this</strong>, the value 1 will be echoed<br>
If ${Stuff} is equal to <strong>that</strong>, the value 2 will be echoed<br>
If ${Stuff} is equal to <strong>another</strong>, the value 3 will be echoed<br><br>
If ${Stuff} isn't equal to <strong>this</strong>,<strong>that</strong>, or <strong>another</strong> the value 0 will be echoed
</blockquote>
<a name="tloselecteditem" id="tloselecteditem"></a>
<span class="txtbold">SelectedItem</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>item</em> SelectedItem</td>
         <td>When using a merchant, etc. this is the selected item</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#refitem">
<span class="linktext">item</span></a><br><br>
Object used to get information on your currently selected item in a pack or in inventory
<blockquote>
<span class="txtbold">Examples</span><br><br>
/if (${SelectedItem.Charges}&lt;1)<br>
Determines if the selected item is out of charges<br><br>
/if (${SelectedItem.Name.Equal[rusty dagger]})<br>
Checks to see if the selected item is a rusty dagger
</blockquote>
<a name="tloskill" id="tloskill"></a>
<span class="txtbold">Skill</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>skill</em> Skill[n]</td>
         <td>Skill by number</td>
      </tr>
      <tr>
         <td><em>skill</em> Skill[name]</td>
         <td>Skill by name</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#refskill">
<span class="linktext">skill</span></a><br><br>
Object used to get information on your character skills
<blockquote>
<span class="txtbold">Examples</span><br><br>
/echo ${Skill[1].ReuseTime}<br>
Displays the reuse time of skill 1<br><br>
/echo ${Skill[backstab]].ID}<br>
Displays the skill number of the backstab skill
</blockquote>
<a name="tlospawn" id="tlospawn"></a>
<span class="txtbold">Spawn</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>spawn</em> Spawn[ID]</td>
         <td>Find spawn by ID</td>
      </tr>
      <tr>
         <td><em>spawn</em> Spawn[search string]</td>
         <td>Find spawn by <a href="#spawnsearch">
            <span class="linktext">spawn search string</span></a>
         </td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#refspawn">
<span class="linktext">spawn</span></a><br><br>
Object used to get information on a specific spawn. Uses the same filters as those from /target, /who
<blockquote>
<span class="txtbold">Examples</span><br><br>
/echo ${Spawn[n]}<br>
Displays the name of the spawn with id number n<br><br>
/target ${Spawn[npc radius 500 trakanon]}<br>
Targets the npc with the name Trakanon only if within a radius of 500
</blockquote>
<a name="tlospawncount" id="tlospawncount"></a>
<span class="txtbold">SpawnCount</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> SpawnCount</td>
         <td>Total number of spawns in current zone</td>
      </tr>
      <tr>
         <td><em>int</em> SpawnCount[search]</td>
         <td>Total number of spawns in current zone matching the search</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#immint">
<span class="linktext">int</span></a><br><br>
Object used to get information on the count(s) of all spawns or specific spawn(s).
<blockquote>
<span class="txtbold">Examples</span><br><br>
/echo ${SpawnCount}<br>
Displays the count of all spawns<br><br>
/echo ${SpawnCount[range 45 50}<br>
Displays the count of all spawns in the level range of 45 to 50
</blockquote>
<a name="tlospell" id="tlospell"></a>
<span class="txtbold">Spell</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>spell</em> Spell[n]</td>
         <td>Find spell by ID</td>
      </tr>
      <tr>
         <td><em>spell</em> Spell[name]</td>
         <td>Find spell by name</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#refspell">
<span class="linktext">spell</span></a><br><br>
Object used to return information on a spell by name or by ID<br><br>
<blockquote>
<span class="txtbold">Examples</span><br><br>
/echo ${Spell[n].MyCastTime}<br>
Returns your adjusted cast time for spell with id n<br><br>
/echo ${Spell[spellname].PushBack}<br>
Returns the pushback amount of spellname
</blockquote>
<a name="tloswitch" id="tloswitch"></a>
<span class="txtbold">Switch</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>switch</em> Switch</td>
         <td>Your target, if you have a switch (door, etc) targeted</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#refswitch">
<span class="linktext">switch</span></a><br><br>
Object used when you want to find information on targetted doors or switches such as the portals in PoK.
<blockquote>
<span class="txtbold">Examples</span><br><br>
/echo ${Switch.Heading}<br>
Returns the direction to the switch<br><br>
/echo ${Switch.Open}<br>
Returns TRUE or FALSE
</blockquote>
<a name="tlotarget" id="tlotarget"></a>
<span class="txtbold">Target</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>spawn</em> Target</td>
         <td>Your target</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#refspawn">
<span class="linktext">spawn</span></a><br><br>
Object used to get information about your target.
<blockquote>
<span class="txtbold">Examples</span><br><br>
/echo ${Target.Level}<br>
Echos the level of your target(if it has one)<br><br>
/echo ${Target.Name.Equal[iron oxide]}<br>
Echoes a boolean value of whether your item targetted is Iron Oxide
</blockquote>
<a name="tlotime" id="tlotime"></a>
<span class="txtbold">Time</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>time</em> Time</td>
         <td>Your local time in real life</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#reftime">
<span class="linktext">time</span></a><br><br>
Object used to return information on real time, not game time
<blockquote>
<span class="txtbold">Example</span><br><br>
/echo ${Time.DayOfWeek}<br>
Returns the day of the week
</blockquote>
<a name="tlotype" id="tlotype"></a>
<span class="txtbold">Type</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>type</em> Type[name]</td>
         <td>Finds an MQ2 Data type by name</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#reftype">
<span class="linktext">type</span></a><br><br>
Object used to check the type of a variable
<blockquote>
<span class="txtbold">Examples</span><br><br>
/if ${Type[MyParam].Name.NotEqual[bool]} {<br>
<span class="tab">/echo This variable is not of type bool</span><br>
}<br><br>
${Type[spawn].Member[ID]}<br>
Determines if a member of a type exists<br><br>
${Type[spawn].Member[${n}]}<br>
Enumerate members of a type using a loop
</blockquote>
<a name="tlowindow" id="tlowindow"></a>
<span class="txtbold">Window</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>window</em> Window[name]</td>
         <td>Find window by name</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#refwindow">
<span class="linktext">window</span></a><br><br>
Used to find information on a particular UI window<br><br>
You can display a list of window names using the /windows command
<blockquote>
<span class="txtbold">Examples</span><br><br>
/echo ${Window[MerchantWnd].Open}<br>
Returns TRUE if a Merchant window is open<br><br>
/echo ${Window[windowname]}<br>
Returns TRUE if the WindowName exists, but doesn't have to be opened.<br><br>
/echo ${Window[MerchantWnd].Minimized}<br>
Returns TRUE if the Window is opened and minimized<br><br>
${Window[TradeskillWnd].Child[RecipeList].List[=Inky Shadow Silk]}<br>
Find an item in the tradeskill item list box by the exact name Inky Shadow Silk<br><br>
${Window[TradeskillWnd].Child[RecipeList].List[1]}<br>
Get the first-column text for the 1st item in the tradeskill item list box
</blockquote>
<a name="tlozone" id="tlozone"></a>
<span class="txtbold">Zone</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>currentzone</em> Zone</td>
         <td>Current zone</td>
      </tr>
      <tr>
         <td><em>zone</em> Zone[name]</td>
         <td>Find zone by short name</td>
      </tr>
      <tr>
         <td><em>zone</em> Zone[n]</td>
         <td>Find zone by ID</td>
      </tr>
   </tbody>
</table>
<br>
access to type(s): <a href="#indcurrentzone">
<span class="linktext">currentzone</span></a> and <a href="#refzone">
<span class="linktext">zone</span></a> respectively<br><br>
Object used to access information on a zone<br><br>
<blockquote>
<span class="txtbold">Examples</span><br><br>
/echo ${Zone.Type}<br>
Returns an integer representing the zone you are in<br><br>
/echo ${Zone[zonename].ID}<br>
Returns the ID of zonename, even if you aren't in the zone<br><br>
/echo ${Zone[zoneid].ShortName}<br>
Returns the short name of the zone with ID zoneid
</blockquote>
<a name="reftypes" id="reftypes"></a>
<span class="txtbold">Reference Types</span><br><br>
<a name="refaltability" id="refaltability"></a>
<span class="txtbold">altability</span><br><br>
<span class="txtbold">Members</span><br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> AARankRequired</td>
         <td>Rank required to train</td>
      </tr>
      <tr>
         <td><em>int</em> Cost</td>
         <td>Base cost to train</td>
      </tr>
      <tr>
         <td><em>string</em> Description</td>
         <td>Basic description</td>
      </tr>
      <tr>
         <td><em>int</em> ID</td>
         <td>ID number</td>
      </tr>
      <tr>
         <td><em>int</em> MaxRank</td>
         <td>Max rank available in this ability</td>
      </tr>
      <tr>
         <td><em>int</em> MinLevel</td>
         <td>Minimum level to train</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>Name of the alt ability</td>
      </tr>
      <tr>
         <td><em>altability</em> RequiresAbility</td>
         <td>Required ability (if any)</td>
      </tr>
      <tr>
         <td><em>int</em> RequiresAbilityPoints</td>
         <td>Points required in above ability</td>
      </tr>
      <tr>
         <td><em>int</em> ReuseTime</td>
         <td>Reuse time in seconds</td>
      </tr>
      <tr>
         <td><em>string</em> ShortName</td>
         <td>Short name</td>
      </tr>
      <tr>
         <td><em>spell</em> Spell</td>
         <td>Spell used by the ability (if any)</td>
      </tr>
      <tr>
         <td><em>int</em> Type</td>
         <td>Type (1-6, this may change to string eventually)</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Returns the total number of points you have spent in that ability</td>
      </tr>
   </tbody>
</table>
<br>
<a name="refarray" id="refarray"></a>
<span class="txtbold">array</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> Dimensions</td>
         <td>Number of dimensions this array stores</td>
      </tr>
      <tr>
         <td><em>int</em> Size</td>
         <td>Total number of elements this array stores</td>
      </tr>
      <tr>
         <td><em>int</em> Size[n]</td>
         <td>Total number of elements stored in the nth dimension of this array</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>None</td>
      </tr>
   </tbody>
</table>
<br>
<a name="refbuff" id="refbuff"></a>
<span class="txtbold">buff</span> (inherits spell)<br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> ID</td>
         <td>Gives the song # or buff # not the spell's ID</td>
      </tr>
      <tr>
         <td><em>int</em> Level</td>
         <td>Level</td>
      </tr>
      <tr>
         <td><em>spell</em> Spell</td>
         <td>Spell</td>
      </tr>
      <tr>
         <td><em>float</em> Mod</td>
         <td>Bard song modifier</td>
      </tr>
      <tr>
         <td><em>ticks</em> Duration</td>
         <td>Duration</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as spell.Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="refcharacter" id="refcharacter"></a>
<span class="txtbold">character</span> (inherits spawn)<br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> AAExp</td>
         <td>AA exp as a raw number</td>
      </tr>
      <tr>
         <td><em>int</em> AAPoints</td>
         <td>Unused AA points</td>
      </tr>
		<tr>
		   <td><em>int</em> AAPointsSpent</td>
			<td>The number of points you have spent on AA abilities</td>
	   </tr>
		<tr>
		   <td><em>int</em> AAPointsTotal</td>
			<td>The total number of AA points you have</td>
		</tr>
      <tr>
         <td><em>int</em> Ability[name]</td>
         <td>Doability button number this skill name is on</td>
      </tr>
      <tr>
         <td><em>string</em> Ability[slot]</td>
         <td>Skill name assigned to this doability button</td>
      </tr>
      <tr>
         <td><em>bool</em> AbilityReady[name]</td>
         <td>Ability with this name ready?</td>
      </tr>
      <tr>
         <td><em>bool</em> AbilityReady[slot]</td>
         <td>Ability on this button ready?</td>
      </tr>
      <tr>
         <td><em>int</em> AccuracyBonus</td>
         <td>Accuracy bonus from gear/spells</td>
      </tr>
      <tr>
         <td><em>altability</em> AltAbility[<em>n</em> | <em>name</em>]</td>
         <td>Returns the total number of points you have spent in ability <em>n</em> or <em>name</em></td>
      </tr>
      <tr>
         <td><em>bool</em> AltAbilityReady[n | name]</td>
         <td>Alt ability readiness of ability <em>n</em> or <em>name</em></td>
      </tr>
      <tr>
         <td><em>int</em> AltAbilityTimer[n | name]</td>
         <td>Alt ability reuse time (seconds) left of ability <em>n</em> or <em>name</em></td>
      </tr>
      <tr>
         <td><em>int</em> AltAbilityTimer[name]</td>
         <td>Alt ability reuse time (seconds) left by name</td>
      </tr>
      <tr>
         <td><em>bool</em> AltTimerReady</td>
         <td>Alternate timer ready? (Bash/Slam/Frenzy/Backstab. Note that AbilityReady works fine with most of these)</td>
      </tr>
      <tr>
         <td><em>int</em> AGI</td>
         <td>Character Agility</td>
      </tr>
      <tr>
         <td><em>bool</em> AmIGroupLeader</td>
         <td>Group Leader?</td>
      </tr>
      <tr>
         <td><em>int</em> AttackBonus</td>
         <td>Attack bonus from gear/spells</td>
      </tr>
      <tr>
         <td><em>int</em> AttackSpeed</td>
         <td>Your Attack Speed %</td>
      </tr>
	  <tr>
	     <td><em>bool</em> AutoFire</td>
	     <td>TRUE if AutoFire is activated.</td>
      </tr>
	  
      <tr>
         <td><em>int</em> AvoidanceBonus</td>
         <td>Avoidance bonus from gear/spells</td>
      </tr>
      <tr>
         <td><em>item</em> Bank[slot]</td>
         <td>Item in this slot (1-18)</td>
      </tr>
      <tr>
         <td><em>int</em> Book[name]</td>
         <td>Spell slot the spell with this name is assigned to in your spellbook</td>
      </tr>
      <tr>
         <td><em>spell</em> Book[slot]</td>
         <td>Spell assigned to this slot in your spellbook</td>
      </tr>
      <tr>
         <td><em>buff</em> Buff[name]</td>
         <td>Finds buff with this name</td>
      </tr>
      <tr>
         <td><em>buff</em> Buff[slot]</td>
         <td>The buff in this slot (1-15)</td>
      </tr>
      <tr>
         <td><em>int</em> CareerFavor</td>
         <td>Career favor</td>
      </tr>
      <tr>
         <td><em>int</em> Cash</td>
         <td>Cash in copper</td>
      </tr>
      <tr>
         <td><em>int</em> CashBank</td>
         <td>Banked cash in copper</td>
      </tr>
      <tr>
         <td><em>int</em> CHA</td>
         <td>Character Charisma</td>
      </tr>
      <tr>
         <td><em>bool</em> Combat</td>
         <td>In combat?</td>
      </tr>
      <tr>
         <td><em>int</em> CombatEffectsBonus</td>
         <td>Combat Effects bonus from gear/spells</td>
      </tr>
      <tr>
         <td><em>int</em> Copper</td>
         <td>Copper</td>
      </tr>
      <tr>
         <td><em>int</em> CopperBank</td>
         <td>Copper in bank</td>
      </tr>
      <tr>
         <td><em>int</em> CountBuffs</td>
         <td>Number of buffs you have, not including short duration buffs</td>
      </tr>
      <tr>
         <td><em>spell</em> CombatAbility[n]</td>
         <td>Combat ability by number in your list (not same as others lists!)</td>
      </tr>
      <tr>
         <td><em>int</em> CombatAbility[name]</td>
         <td>Combat ability number in your list by name (not same as others lists!)</td>
      </tr>
      <tr>
         <td><em>bool</em> CombatAbilityReady[name]</td>
         <td>Returns TRUE or FALSE</td>
      </tr>
      <tr>
         <td><em>int</em> CombatAbilityTimer[name]</td>
         <td>Returns the time remaining before the Combat Ability is usable</td>
      </tr>
      <tr>
         <td><em>int</em> CurrentFavor</td>
         <td>Current favor</td>
      </tr>
      <tr>
         <td><em>int</em> CurrentHPs</td>
         <td>Current hit points</td>
      </tr>
      <tr>
         <td><em>int</em> CurrentMana</td>
         <td>Current mana</td>
      </tr>
      <tr>
         <td><em>int</em> CurrentWeight</td>
         <td>Character current weight</td>
      </tr>
      <tr>
         <td><em>int</em> DamageShieldBonus</td>
         <td>Damage Shield bonus from gear/spells</td>
      </tr>
      <tr>
         <td><em>int</em> Dar</td>
         <td>Damage absorption remaining</td>
      </tr>
      <tr>
         <td><em>int</em> DEX</td>
         <td>Character Dexterity</td>
      </tr>
      <tr>
         <td><em>int</em> DoTShieldBonus</td>
         <td>DoT Shield bonus from gear/spells</td>
      </tr>
	  <tr>
	     <td><em>int</em> Doubloons</td>
		 <td>Doubloons character has</td>
	  </tr>
	  <tr>
	     <td><em>int</em> EbonCrystals</td>
	     <td>Returns how many of this crystal you have in your inventory</td>
      </tr>
      <tr>
         <td><em>int</em> Endurance</td>
         <td>Current endurance</td>
      </tr>
      <tr>
         <td><em>int</em> EnduranceBonus</td>
         <td>Endurance bonus from gear/spells</td>
      </tr>
      <tr>
         <td><em>int</em> EnduranceRegen</td>
         <td>Endurance regen from the last tick</td>
      </tr>
      <tr>
         <td><em>int</em> Exp</td>
         <td>Experience (of 330)</td>
      </tr>
      <tr>
         <td><em>int</em> FreeBuffSlots</td>
         <td>Number of open buff slots (not counting the bard buff slots)</td>
      </tr>
      <tr>
         <td><em>int</em> FreeInventory</td>
         <td>Count of free inventory spaces</td>
      </tr>
      <tr>
         <td><em>int</em> FreeInventory[n]</td>
         <td>Count of free inventory spaces of at least n size (giant=4)</td>
      </tr>
      <tr>
         <td><em>int</em> Gem[name]</td>
         <td>The slot # with this spell name</td>
      </tr>
      <tr>
         <td><em>spell</em> Gem[slot]</td>
         <td>The spell in this slot #</td>
      </tr>
      <tr>
         <td><em>int</em> Gold</td>
         <td>Gold on character</td>
      </tr>
      <tr>
         <td><em>int</em> GoldBank</td>
         <td>Gold in bank</td>
      </tr>
      <tr>
         <td><em>spawn</em> GroupAssistTarget</td>
         <td>Current group assist target</td>
      </tr>
      <tr>
         <td><em>bool</em> Grouped</td>
         <td>Grouped?</td>
      </tr>
      <tr>
         <td><em>int</em> GroupLeaderExp</td>
         <td>Group leadership exp</td>
      </tr>
      <tr>
         <td><em>int</em> GroupLeaderPoints</td>
         <td>Group leadership points</td>
      </tr>
      <tr>
         <td><em>string</em> GroupList</td>
         <td>Returns a string of your group members (excluding you)</td>
      </tr>
      <tr>
         <td><em>spawn</em> GroupMarkNPC[n]</td>
         <td>Current group marked NPC (1-3)</td>
      </tr>
      <tr>
         <td><em>int</em> GukEarned</td>
         <td>Total LDoN points earned in Guk</td>
      </tr>
      <tr>
         <td><em>int</em> HPBonus</td>
         <td>Hit point bonus from gear/spells</td>
      </tr>
      <tr>
         <td><em>int</em> HPRegen</td>
         <td>Hit point regeneration</td>
      </tr>
      <tr>
         <td><em>int</em> HPRegenBonus</td>
         <td>HP regen bonus from gear/spells</td>
      </tr>
      <tr>
         <td><em>int</em> Hunger</td>
         <td>Hunger level</td>
      </tr>
      <tr>
         <td><em>int</em> ID</td>
         <td>Spawn ID</td>
      </tr>
      <tr>
         <td><em>int</em> INT</td>
         <td>Character Intelligence</td>
      </tr>
      <tr>
         <td><em>item</em> Inventory[slot]</td>
         <td>Item in this slot (1-30)</td>
      </tr>
      <tr>
         <td><em>item</em> Inventory[slotname]</td>
         <td>Item in this slot (inventory slots only, but same names as /itemnotify)</td>
      </tr>
	  <tr>
	     <td><em>string</em> Language</td>
	     <td>The language you are currently using</td>
      </tr>
      <tr>
         <td><em>int</em> LanguageSkill[languagename]</td>
         <td>Your skill in the selected language</td>
      </tr>
      <tr>
         <td><em>int</em> LargestFreeInventory</td>
         <td>Size of largest free inventory space</td>
      </tr>
      <tr>
         <td><em>int</em> LDoNPoints</td>
         <td>Available LDoN points</td>
      </tr>
      <tr>
         <td><em>int</em> Level</td>
         <td>Character Level</td>
      </tr>
      <tr>
         <td><em>int</em> ManaBonus</td>
         <td>Mana bonus from gear/spells</td>
      </tr>
      <tr>
         <td><em>int</em> ManaRegen</td>
         <td>Mana regeneration</td>
      </tr>
      <tr>
         <td><em>int</em> ManaRegenBonus</td>
         <td>Mana regen bonus from gear/spells</td>
      </tr>
      <tr>
         <td><em>int</em> MaxEndurance</td>
         <td>Max endurance</td>
      </tr>
      <tr>
         <td><em>int</em> MaxHPs</td>
         <td>Max hit points</td>
      </tr>
      <tr>
         <td><em>int</em> MaxMana</td>
         <td>Max mana</td>
      </tr>
      <tr>
         <td><em>int</em> MirEarned</td>
         <td>Total ldon points earned in Miragul</td>
      </tr>
      <tr>
         <td><em>int</em> MMEarned</td>
         <td>Total ldon points earned in MM</td>
      </tr>
      <tr>
         <td><em>bool</em> Moving</td>
         <td>Moving? (including strafe)</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>First name</td>
      </tr>
	  <tr>
         <td><em>int</em> Orux</td>
         <td>Orux character has</td>
      </tr>
      <tr>
         <td><em>float</em> PctAAExp</td>
         <td>AA exp as a %</td>
      </tr>
      <tr>
         <td><em>int</em> PctEndurance</td>
         <td>Percent endurance</td>
      </tr>
      <tr>
         <td><em>float</em> PctExp</td>
         <td>Experience as a %</td>
      </tr>
      <tr>
         <td><em>float</em> PctGroupLeader</td>
         <td>ExpGroup leadership exp as a %</td>
      </tr>
      <tr>
         <td><em>int</em> PctHPs</td>
         <td>Percent hit points</td>
      </tr>
      <tr>
         <td><em>int</em> PctMana</td>
         <td>Percent mana</td>
      </tr>
      <tr>
         <td><em>float</em> PctRaidLeaderExp</td>
         <td>Raid leadership exp as a %</td>
      </tr>
      <tr>
         <td><em>spell</em> PetBuff[n]</td>
         <td>The spell in this slot (1-29)</td>
      </tr>
      <tr>
         <td><em>int</em> PetBuff[name]</td>
         <td>Finds slot with this spell name</td>
      </tr>
	  <tr>
         <td><em>int</em> Phosphenes</td>
         <td>Phosphenes character has</td>
      </tr>
	  <tr>
         <td><em>int</em> Phosphites</td>
         <td>Phosphites character has</td>
      </tr>
      <tr>
         <td><em>int</em> Platinum</td>
         <td>Platinum on your character</td>
      </tr>
      <tr>
         <td><em>int</em> PlatinumBank</td>
         <td>Platinum in bank</td>
      </tr>
      <tr>
         <td><em>int</em> PlatinumShared</td>
         <td>Shared-bank platinum</td>
      </tr>
	  <tr>
	     <td><em>string</em> PlayerState</td>
		 <td>Returns COMBAT, DEBUFFED, COOLDOWN, ACTIVE, RESTING, UNKNOWN</td>
		 
	  </tr>
	  <tr>
	     <td><em>int</em> RadiantCrystals</td>
	     <td>Returns how many of this crystal you have in your inventory</td>
      </tr>
      <tr>
         <td><em>spawn</em> RaidAssistTarget[n]</td>
         <td>Current raid assist target (1-3)</td>
      </tr>
      <tr>
         <td><em>int</em> RaidLeaderExp</td>
         <td>Raid leadership exp</td>
      </tr>
      <tr>
         <td><em>int</em> RaidLeaderPoints</td>
         <td>Raid leadership points</td>
      </tr>
      <tr>
         <td><em>spawn</em> RaidMarkNPC[n]</td>
         <td>Current raid marked NPC (1-3)</td>
      </tr>
      <tr>
         <td><em>bool</em> RangedReady</td>
         <td>Ranged attack ready?</td>
      </tr>
      <tr>
         <td><em>int</em> RujEarned</td>
         <td>Total ldon points earned in ruj</td>
      </tr>
      <tr>
         <td><em>bool</em> Running</td>
         <td>Returns TRUE or FALSE</td>
      </tr>
      <tr>
         <td><em>int</em> ShieldingBonus</td>
         <td>Shielding bonus from gear/spells</td>
      </tr>
      <tr>
         <td><em>int</em> Silver</td>
         <td>Silver on your character</td>
      </tr>
      <tr>
         <td><em>int</em> SilverBank</td>
         <td>Silver in bank</td>
      </tr>
      <tr>
         <td><em>int</em> Skill[n]</td>
         <td>Skill level of skill with this ID</td>
      </tr>
      <tr>
         <td><em>int</em> Skill[name]</td>
         <td>Skill level of skill with this name</td>
      </tr>
      <tr>
         <td><em>buff</em> Song[name]</td>
         <td>Finds song with this name</td>
      </tr>
      <tr>
         <td><em>buff</em> Song[slot]</td>
         <td>The song in this slot (1-6)</td>
      </tr>
      <tr>
         <td><em>spawn</em> Spawn</td>
         <td>The character's spawn</td>
      </tr>
      <tr>
         <td><em>bool</em> SpellReady[name]</td>
         <td>Gem with this spell name ready for cast?</td>
      </tr>
      <tr>
         <td><em>bool</em> SpellReady[slot]</td>
         <td>Spell in this gem ready for cast?</td>
      </tr>
      <tr>
         <td><em>int</em> SpellShieldBonus</td>
         <td>Spell Shield bonus from gear/spells</td>
      </tr>
      <tr>
         <td><em>int</em> STA</td>
         <td>Character Stamina</td>
      </tr>
      <tr>
         <td><em>int</em> STR</td>
         <td>Character Strength</td>
      </tr>
      <tr>
         <td><em>int</em> StrikeThroughBonus</td>
         <td>Strikethrough bonus from gear/spells</td>
      </tr>
      <tr>
         <td><em>bool</em> Stunned</td>
         <td>Stunned?</td>
      </tr>
      <tr>
         <td><em>int</em> StunResistBonus</td>
         <td>Stun Resist bonus from gear/spells</td>
      </tr>
      <tr>
         <td><em>string</em> Surname</td>
         <td>Last name</td>
      </tr>
      <tr>
         <td><em>int</em> svCold</td>
         <td>Character Cold Resist</td>
      </tr>
      <tr>
         <td><em>int</em> svDisease</td>
         <td>Character Disease Resist</td>
      </tr>
      <tr>
         <td><em>int</em> svFire</td>
         <td>Character Fire Resist</td>
      </tr>
      <tr>
         <td><em>int</em> svMagic</td>
         <td>Character Magic Resist</td>
      </tr>
      <tr>
         <td><em>int</em> svPoison</td>
         <td>Character Poison Resist</td>
      </tr>
      <tr>
         <td><em>int</em> TakEarned</td>
         <td>Total ldon points earned in tak</td>
      </tr>
      <tr>
         <td><em>spawn</em> TargetOfTarget</td>
         <td>Target of target (moved to character type)</td>
      </tr>
      <tr>
         <td><em>int</em> Thirst</td>
         <td>Thirst level</td>
      </tr>
	  <tr>
	     <td><em>int</em> TributeTimer</td>
	     <td>Shows the remaining time of the 10 minute timer</td>
      </tr>
      <tr>
         <td><em>int</em> WIS</td>
         <td>Character Wisdom</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="refground" id="refground"></a>
<span class="txtbold">ground</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> ID</td>
         <td>Ground item ID (not the same as item ID, this is like spawn ID)</td>
      </tr>
      <tr>
         <td><em>float</em> Distance</td>
         <td>Distance from player to ground item in (x,y)</td>
      </tr>
      <tr>
         <td><em>float</em> X</td>
         <td>X coordinate</td>
      </tr>
      <tr>
         <td><em>float</em> Y</td>
         <td>Y coordinate</td>
      </tr>
      <tr>
         <td><em>float</em> Z</td>
         <td>Z coordinate</td>
      </tr>
      <tr>
         <td><em>float</em> W</td>
         <td>X (Westward-positive)</td>
      </tr>
      <tr>
         <td><em>float</em> N</td>
         <td>Y (Northward-positive)</td>
      </tr>
      <tr>
         <td><em>float</em> U</td>
         <td>Z (Upward-positive)</td>
      </tr>
      <tr>
         <td><em>heading</em> Heading</td>
         <td>Ground item is facing this heading</td>
      </tr>
      <tr>
         <td><em>heading</em> HeadingTo</td>
         <td>Direction player must move to meet this ground item</td>
      </tr>
      <tr>
         <td><em>bool</em> LineOfSight</td>
         <td>Returns if ground spawn is in Line of Sight</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>Name</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as ID</td>
      </tr>
   </tbody>
</table>
<br>
<a name="refgroup" id="refgroup"></a>
<span class="txtbold">group</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
   	  <tr>
         <td><em>int</em> GroupSize</td>
         <td>Returns the number of players in your group.</td>
      </tr>
      <tr>
         <td><em>groupmember</em> Member[n]</td>
         <td>n is 1 to 5 (0 gives self)</td>
      </tr>
      <tr>
         <td><em>int</em> Member[name]</td>
         <td>Gives the number, as used above</td>
      </tr>
      <tr>
         <td><em>int</em> Members</td>
         <td>Total group members, excluding self</td>
      </tr>
      <tr>
         <td><em>groupmember</em> Leader</td>
         <td>The leader of the group</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Members</td>
      </tr>
   </tbody>
</table>
<br>
<a name="refgroupmember" id="refgroupmember"></a>
<span class="txtbold">groupmember</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>string</em> Name</td>
         <td>Name of the group member. Should work regardless of whether they are in zone</td>
      </tr>
      <tr>
         <td><em>spawn</em> Spawn</td>
         <td>Direct access to the group member's spawn type</td>
      </tr>
      <tr>
         <td><em>bool</em> Leader</td>
         <td>Is this the group leader?</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="refitem" id="refitem"></a>
<span class="txtbold">item</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>bool</em> Attuneable</td>
         <td>Is the item Attuneable?</td>
      </tr>   
      <tr>
         <td><em>int</em> BuyPrice</td>
         <td>Price to buy this item at this merchant</td>
      </tr>
	  <tr>
         <td><em>float</em> CastTime</td>
         <td>Spell effect's cast time</td>
      </tr>
      <tr>
         <td><em>int</em> Charges</td>
         <td>Charges</td>
      </tr>
	  <tr>
	    <td><em>string</em> Class[n]</td>
		<td>Returns the nth short class name of the listed classes on an item</td>
	  </tr>
	  <tr>
	    <td><em>int</em> Classes</td>
		<td>Returns the number of Classes that can use the item</td>
	  </tr>
	  <tr>
         <td><em>int</em> Container</td>
         <td>Number of slots, if this is a container</td>
      </tr>
	  <tr>
	    <td><em>string</em> Deity[n]</td>
		<td>Returns the nth diety of the listed dieties on an item</td>
	  </tr>
	  <tr>
	    <td><em>int</em> Deities</td>
		<td>Returns the number of dieties that can use the item</td>
	  </tr>
	  <tr>
         <td><em>string</em> DMGBonus</td>
         <td>Type None Magic Fire Cold Poison Disease</td>
      </tr>
	  <tr>
         <td><em>string</em> EffectType</td>
         <td>Spell effect type<br>0 Proc<br>1 Clickable from inventory (any class)<br>2 Worn effect (haste, cleave)<br>
            3 Unknown (*We now know it's 'Expendable'*)<br>
            4 Clickable must be worn<br>
            5 Clickable from inventory (class restricted)<br>
            6 Focus effect<br>
            7 Memmable spell scroll<br>
         </td>
      </tr>
	  <tr>
	     <td><em>int</em> FreeStack</td>
		 <td>The number of items needed to fill all the stacks of the item you have (ie with a stacksize of 20.  
		     If you have 3 stacks (1, 10, 20 in those stacks), you have room for 60 total, you have 31 on you... 
			 so FreeStack would return 29</td>
	  </tr>
      <tr>
         <td><em>int</em> ID</td>
         <td>Item ID</td>
      </tr>
	  <tr>
         <td><em>int</em> Items</td>
         <td>Number of items, if this is a container</td>
      </tr>
      <tr>
         <td><em>item</em> Item[n]</td>
         <td>nth contained item, if this is a container</td>
      </tr>
	  <tr>
	     <td><em>float</em> ItemDelay</td>
		 <td>Returns the delay of the weapon</td>
      </tr>
	  <tr>
         <td><em>string</em> LDoNTheme</td>
         <td>"Non-LDON" "Deepest Guk" "Miragul's" "Mistmoore" "Rujarkian" "Takish"</td>
      </tr>
	  <tr>
         <td><em>bool</em> Lore</td>
         <td>Lore?</td>
      </tr>
	  <tr>
         <td><em>bool</em> Magic</td>
         <td>Magic?</td>
      </tr>
	  <tr>
         <td><em>int</em> MaxPower</td>
         <td>Maximum Power of Power Source</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>Name of the item</td>
      </tr>
      <tr>
         <td><em>bool</em> NoDrop</td>
         <td>No drop?</td>
      </tr>
      <tr>
         <td><em>bool</em> NoRent</td>
         <td>No rent?</td>
      </tr>
	  <tr>
         <td><em>int</em> Power</td>
         <td>Current Power of Power Source</td>
      </tr>
	  <tr>
         <td><em>string</em> Purity</td>
         <td>What Purity the Power Source has</td>
      </tr>
	  
	  <tr>
	    <td><em>string</em> Race[n]</td>
		<td>Returns the nth race name of the listed races on an item</td>
	  </tr>
	  <tr>
	    <td><em>int</em> Races</td>
		<td>Returns the number of races that can use the item</td>
	  </tr>
	  <tr>
	    <td><em>int</em> RequiredLevel</td>
		<td>Returns the Required Level of an item</td>
	  </tr>
	  <tr>
         <td><em>int</em> SellPrice</td>
         <td>Price to sell this item at this merchant</td>
      </tr>
	  <tr>
         <td><em>int</em> Size</td>
         <td>Item size</td>
      </tr>
	  <tr>
         <td><em>spell</em> Spell</td>
         <td>Spell effect</td>
      </tr>
	  <tr>
         <td><em>int</em> Stack</td>
         <td>Stack count</td>
      </tr>
	  <tr>
         <td><em>bool</em> Stackable</td>
         <td>Stackable?</td>
      </tr>
	  <tr>
	     <td><em>int</em> StackCount</td>
		 <td>Returns the count of the items in all stacks of the item</td>
      </tr>
	  <tr>
	     <td><em>int</em> StackSize</td>
		 <td>Maximum number if items that can be in the stack</td>
	  </tr>
	  <tr>
	     <td><em>int</em> Timer</td>
		 <td>Returns the number of seconds left on an item recast timer</td>
	  </tr>
      <tr>
         <td><em>string</em> Type</td>
         <td>Type</td>
      </tr>
      <tr>
         <td><em>int</em> Tribute</td>
         <td>Tribute value of the item</td>
      </tr>
	  <tr>
         <td><em>int</em> Value</td>
         <td>Item value in copper</td>
      </tr>
      <tr>
         <td><em>int</em> Weight</td>
         <td>Item weight</td>
      </tr>
      <tr>
         <td><em>invslot</em> WornSlot[n]</td>
         <td>The nth invslot this item can be worn in (fingers/ears count as 2 slots)</td>
      </tr>
	  <tr>
         <td><em>bool</em> WornSlot[name]</td>
         <td>Can item be worn in invslot with this name? (worn slots only..)</td>
      </tr>
	  <tr>
         <td><em>int</em> WornSlots</td>
         <td>The number of invslots this item can be worn in (fingers/ears count as 2 slots)</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table><br>
<a name="refplugin" id="refplugin"></a>
<span class="txtbold">plugin</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>string</em> Name</td>
         <td>Name of the plugin, for example &#34;MQ2ChatWnd&#34;</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="refskill" id="refskill"></a>
<span class="txtbold">skill</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>string</em> Name</td>
         <td>Name of the skll</td>
      </tr>
      <tr>
         <td><em>int</em> ID</td>
         <td>Skill number</td>
      </tr>
      <tr>
         <td><em>float</em> Accuracy</td>
         <td>Base accuracy of the skll</td>
      </tr>
      <tr>
         <td><em>int</em> ReuseTime</td>
         <td>Reuse timer (dont know yet if it's in 10ths of seconds or what)</td>
      </tr>
      <tr>
         <td><em>bool</em> AltTimer</td>
         <td>Skill uses the kick/bash/slam/backstab/frenzy timer?</td>
      </tr>
      <tr>
         <td><em>int</em> MinLevel</td>
         <td>Minimum level for your class</td>
      </tr>
      <tr>
         <td><em>int</em> StartingSkill</td>
         <td>Base skill level for your class</td>
      </tr>
      <tr>
         <td><em>int</em> SkillCap</td>
         <td>Returns the skill cap based on your level and class</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="refspawn" id="refspawn"></a>
<span class="txtbold">spawn</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> AARank</td>
         <td>AA rank number</td>
      </tr>
      <tr>
         <td><em>string</em> AATitle</td>
         <td>Actual AA title (e.g. Sage, Impresario, etc)</td>
      </tr>
      <tr>
         <td><em>bool</em> AFK</td>
         <td>AFK?</td>
      </tr>
      <tr>
         <td><em>int</em> Animation</td>
         <td>Current animation id</td>
      </tr>
      <tr>
         <td><em>bool</em> Anonymous</td>
         <td>Anonymous?</td>
      </tr>
      <tr>
         <td><em>bool</em> Assist</td>
         <td>Current Raid or Group assist target?</td>
      </tr>
      <tr>
         <td><em>bool</em> Binding</td>
         <td>Binding wounds?</td>
      </tr>
      <tr>
         <td><em>body</em> Body</td>
         <td>Body type</td>
      </tr>
      <tr>
         <td><em>spell</em> Casting</td>
         <td>Spell, if currently casting</td>
      </tr>
      <tr>
         <td><em>class</em> Class</td>
         <td>Class</td>
      </tr>
      <tr>
         <td><em>string</em> CleanName</td>
         <td>The "cleaned up" name</td>
      </tr>
      <tr>
         <td><em>string</em> ConColor</td>
         <td>GREY, GREEN, LIGHT BLUE, BLUE, WHITE, YELLOW, RED</td>
      </tr>
      <tr>
         <td><em>int</em> CurrentHPs</td>
         <td>Current hit points</td>
      </tr>
      <tr>
         <td><em>deity</em> Deity</td>
         <td>Deity</td>
      </tr>
      <tr>
         <td><em>float</em> DistanceX</td>
         <td>Distance from player in X plane</td>
      </tr>
      <tr>
         <td><em>float</em> DistanceY</td>
         <td>Distance from player in Y plane</td>
      </tr>
      <tr>
         <td><em>float</em> DistanceZ</td>
         <td>Distance from player in Z plane</td>
      </tr>
      <tr>
         <td><em>float</em> Distance</td>
         <td>Distance from player in (x,y)</td>
      </tr>
      <tr>
         <td><em>float</em> Distance3D</td>
         <td>Distance from player in (x,y,z)</td>
      </tr>
      <tr>
         <td><em>float</em> DistancePredict</td>
         <td>Estimated distance in (x,y), taking into account the spawn's movement speed but not the player's</td>
      </tr>
      <tr>
         <td><em>float</em> DistanceW</td>
         <td>Distance from player in X plane (East/West)</td>
      </tr>
      <tr>
         <td><em>float</em> DistanceN</td>
         <td>Distance from player in Y plane (North/South)</td>
      </tr>
      <tr>
         <td><em>float</em> DistanceU</td>
         <td>Distance from player in Z plane (Up/Down)</td>
      </tr>
      <tr>
         <td><em>bool</em> Ducking</td>
         <td>Ducking?</td>
      </tr>
      <tr>
         <td><em>bool</em> FeetWet</td>
         <td>Feet wet/swimming?</td>
      </tr>
      <tr>
         <td><em>bool</em> Feigning</td>
         <td>Feigning?</td>
      </tr>
	  <tr>
	     <td><em>bool</em> Fleeing</td>
		 <td>Is your target moving away from you</td>
      </tr>
      <tr>
         <td><em>string</em> Gender</td>
         <td>Gender</td>
      </tr>
      <tr>
         <td><em>bool</em> GM</td>
         <td>GM?</td>
      </tr>
      <tr>
         <td><em>bool</em> GroupLeader</td>
         <td>Current Raid or Group marked npc mark number (raid first)</td>
      </tr>
      <tr>
         <td><em>string</em> Guild</td>
         <td>Guild name</td>
      </tr>
      <tr>
         <td><em>string</em> GuildStatus</td>
         <td>Guild status (Leader, Officer, Member)</td>
      </tr>
      <tr>
         <td><em>heading</em> Heading</td>
         <td>Heading in this direction</td>
      </tr>
      <tr>
         <td><em>heading</em> HeadingTo</td>
         <td>Heading player must travel in to reach this spawn</td>
      </tr>
      <tr>
         <td>heading HeadingToLoc[y,x]</td>
         <td>Heading to the coordinates y,x from the spawn</td>
      </tr>
      <tr>
         <td><em>float</em> Height</td>
         <td>Height</td>
      </tr>
      <tr>
         <td><em>int</em> Holding</td>
         <td>Represents what the pc/npc is holding</td>
      </tr>
      <tr>
         <td><em>int</em> Hunger</td>
         <td>Hunger level</td>
      </tr>
      <tr>
         <td><em>int</em> ID</td>
         <td>SpawnID</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>Name</td>
      </tr>
      <tr>
         <td><em>int</em> Level</td>
         <td>Level</td>
      </tr>
      <tr>
         <td><em>float</em> X</td>
         <td>X coordinate</td>
      </tr>
      <tr>
         <td><em>float</em> Y</td>
         <td>Y coordinate</td>
      </tr>
      <tr>
         <td><em>float</em> Z</td>
         <td>Z coordinate</td>
      </tr>
      <tr>
         <td><em>float</em> N</td>
         <td>Y, the Northward-positive coordinate</td>
      </tr>
      <tr>
         <td><em>float</em> W</td>
         <td>X, the Westward-positive coordinate</td>
      </tr>
      <tr>
         <td><em>float</em> U</td>
         <td>Z, the Upward-positive coordinate</td>
      </tr>
      <tr>
         <td><em>float</em> S</td>
         <td>Shortcut for -Y (makes Southward positive)</td>
      </tr>
      <tr>
         <td><em>float</em> E</td>
         <td>Shortcut for -X (makes Eastward positive)</td>
      </tr>
      <tr>
         <td><em>float</em> D</td>
         <td>Shortcut for -Z (makes Downward positive)</td>
      </tr>
      <tr>
         <td><em>bool</em> LineOfSight</td>
         <td>Returns TRUE if spawn is in LoS</td>
      </tr>
      <tr>
         <td><em>spawn</em> Next</td>
         <td>Next spawn in the list</td>
      </tr>
      <tr>
         <td><em>spawn</em> Prev</td>
         <td>Previous spawn in the list</td>
      </tr>
      <tr>
         <td><em>float</em> Speed</td>
         <td>Speed</td>
      </tr>
      <tr>
         <td><em>bool</em> Levitating</td>
         <td>Levitating?</td>
      </tr>
      <tr>
         <td><em>bool</em> Sneaking</td>
         <td>Sneaking?</td>
      </tr>
      <tr>
         <td><em>string</em> Light</td>
         <td>Name of the light class this spawn has</td>
      </tr>
      <tr>
         <td><em>string</em> State</td>
         <td>STAND SIT DUCK BIND FEIGN DEAD STUN UNKNOWN</td>
      </tr>
      <tr>
         <td><em>int</em> MaxHPs</td>
         <td>Maximum hit points</td>
      </tr>
      <tr>
         <td><em>int</em> PctHPs</td>
         <td>Percent hit points</td>
      </tr>
      <tr>
         <td><em>string</em> Type</td>
         <td>PC NPC Untargetable Mount Pet Corpse Chest Trigger Trap Timer Item</td>
      </tr>
      <tr>
         <td><em>string</em> Surname</td>
         <td>Last name</td>
      </tr>
      <tr>
         <td><em>spawn</em> Master</td>
         <td>Master, if it is charmed or a pet</td>
      </tr>
      <tr>
         <td><em>spawn</em> Pet</td>
         <td>Pet</td>
      </tr>
      <tr>
         <td><em>spawn</em> Mount</td>
         <td>Mount</td>
      </tr>
      <tr>
         <td><em>race</em> Race</td>
         <td>Race</td>
      </tr>
      <tr>
         <td><em>float</em> MaxRange</td>
         <td>The Max distance from this spawn for it to hit you</td>
      </tr>
      <tr>
         <td><em>float</em> MaxRangeTo</td>
         <td>The Max distance from this spawn for you to hit it</td>
      </tr>
      <tr>
         <td><em>bool</em> Swimming</td>
         <td>Swimming?</td>
      </tr>
      <tr>
         <td><em>bool</em> Underwater</td>
         <td>Underwater?</td>
      </tr>
      <tr>
         <td><em>bool</em> Roleplaying</td>
         <td>Roleplaying?</td>
      </tr>
      <tr>
         <td><em>float</em> Look</td>
         <td>Looking this angle</td>
      </tr>
      <tr>
         <td><em>bool</em> Invis</td>
         <td>Invisible? (also includes both successful and failed hides as well as shroud of stealth)</td>
      </tr>
      <tr>
         <td><em>bool</em> LFG</td>
         <td>LFG?</td>
      </tr>
      <tr>
         <td><em>bool</em> Linkdead</td>
         <td>Linkdead?</td>
      </tr>
      <tr>
         <td><em>bool</em> Trader</td>
         <td>Trader?</td>
      </tr>
      <tr>
         <td><em>bool</em> Sitting</td>
         <td>Sitting?</td>
      </tr>
      <tr>
         <td><em>bool</em> Standing</td>
         <td>Standing?</td>
      </tr>
      <tr>
         <td><em>bool</em> Invited</td>
         <td>Invited to group?</td>
      </tr>
      <tr>
         <td><em>spawn</em> NearestSpawn[search]</td>
         <td>Find the nearest spawn matching this search, to this spawn (most efficient on yourself)</td>
      </tr>
      <tr>
         <td><em>spawn</em> NearestSpawn[n,search]</td>
         <td>Find the nth nearest spawn matching this search, to this spawn (most efficient on yourself)</td>
      </tr>
      <tr>
         <td><em>int</em> Mark</td>
         <td>Current Raid or Group marked npc mark number (raid first)</td>
      </tr>
      <tr>
         <td><em>int</em> Thirst</td>
         <td>Thirst level</td>
      </tr>
      <tr>
         <td><em>string</em> Suffix</td>
         <td>Suffix attached to name, such as: <strong>of &lt;servername&gt;</strong></td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="refspell" id="refspell"></a>
<span class="txtbold">spell</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>float</em> AERange</td>
         <td>AE range</td>
      </tr>
	  <tr>
         <td><em>string</em> CastOnAnother</td>
         <td>Message when cast on others</td>
      </tr>
	  <tr>
         <td><em>string</em> CastOnYou</td>
         <td>Message when cast on yourself</td>
      </tr>
	  <tr>
         <td><em>float</em> CastTime</td>
         <td>Cast time (unadjusted)</td>
      </tr>
	  <tr>
         <td><em>ticks</em> Duration</td>
         <td>Duration of the spell if any</td>
      </tr>
	  <tr>
         <td><em>float</em> FizzleTime</td>
         <td>Time to recover after fizzle</td>
      </tr>
      <tr>
         <td><em>int</em> ID</td>
         <td>Spell ID</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>Name</td>
      </tr>
      <tr>
         <td><em>int</em> Level</td>
         <td>Level</td>
      </tr>
      <tr>
         <td><em>int</em> Mana</td>
         <td>Mana cost (unadjusted)</td>
      </tr>
	  <tr>
         <td><em>float</em> MyCastTime</td>
         <td>Adjusted cast time</td>
      </tr>
	  <tr>
         <td><em>float</em> PushBack</td>
         <td>Push back amount</td>
      </tr>
	  <tr>
         <td><em>float</em> Range</td>
         <td>Maximum range to target</td>
      </tr>
	  <tr>
	     <td><em>int</em> MyRange</td>
		 <td>This is YOUR actual cast range, including extended range from focus effects.</td>
	  </tr>
      <tr>
         <td><em>float</em> RecastTime</td>
         <td>Time to recast after successful cast</td>
      </tr>
	  <tr>
         <td><em>float</em> RecoveryTime</td>
         <td>Same as FizzleTime</td>
      </tr>
	  <tr>
         <td><em>int</em> ResistAdj</td>
         <td>Resist adjustment</td>
      </tr>
	  <tr>
         <td><em>string</em> ResistType</td>
         <td>Chromatic Disease Poison Cold Fire Magic Unresistable Unknown</td>
      </tr>
	  <tr>
         <td><em>string</em> Skill</td>
         <td>Skill name</td>
      </tr>
      <tr>
         <td><em>string</em> SpellType</td>
         <td>Beneficial(Group) Beneficial Detrimental Unknown</td>
      </tr>
	  <tr>
	     <td><em>bool</em> Stacks</td>
		 <td>Does the selected spell stack with your current buffs</td>
	  </tr>
	  <tr>
	     <td><em>bool</em> StacksWith[ ]</td>
		 <td>Does the selected spell stack with the specific buff</td>
	  </tr>
      <tr>
         <td><em>string</em> TargetType</td>
         <td>Group v2 AE PC v2 etc</td>
      </tr>
      <tr>
         <td></td>
         <td></td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="refstring" id="refstring"></a>
<span class="txtbold">string</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>string</em> Arg[n,separator]</td>
         <td>Gets nth argument using separator as the separator (single character). separator defaults to space</td>
      </tr>
	  <tr>
         <td><em>int</em> Compare[text]</td>
         <td>-1 if the string is alphabetically before text, 0 if equal, 1 if after. Case does not count.</td>
      </tr>
      <tr>
         <td><em>int</em> CompareCS[text]</td>
         <td>-1 if the string is alphabetically before text, 0 if equal, 1 if after. Case counts.</td>
      </tr>
	  <tr>
         <td><em>int</em> Count[char]</td>
         <td>Count the number of occurrences of a particular character in the string</td>
      </tr>
	  <tr>
         <td><em>bool</em> Equal[text]</td>
         <td>Strings equal? Case does not count</td>
      </tr>
	  <tr>
         <td><em>bool</em> EqualCS[text]</td>
         <td>Strings equal? Case counts!</td>
      </tr>
      <tr>
         <td><em>int</em> Find[text]</td>
         <td>Looks for the given text, gives position (currently NULL if not found)</td>
      </tr>
	  <tr>
         <td><em>string</em> Left[length]</td>
         <td>The left (length) of the string.. Left[2] of &#34;Left&#34; will be &#34;Le&#34;</td>
      </tr>
	  <tr>
         <td><em>string</em> Left[-length]</td>
         <td>The left ("all but" length) of the string.. Left[-1] of &#34;Left&#34; will be &#34;Lef&#34;</td>
      </tr>
      <tr>
         <td><em>int</em> Length</td>
         <td>The length of the string</td>
      </tr>
      <tr>
         <td><em>string</em> Lower</td>
         <td>The string in all lower case</td>
      </tr>
      <tr>
         <td><em>string</em> Mid[position,length]</td>
         <td>The left (length) starting at (position).. Mid[2,3] of &#34;Left&#34; will be &#34;ef&#34;</td>
      </tr>
      
      <tr>
         <td><em>bool</em> NotEqual[text]</td>
         <td>Strings not equal? Case does not count</td>
      </tr>
      
      <tr>
         <td><em>bool</em> NotEqualCS[text]</td>
         <td>Strings not equal? Case counts!</td>
      </tr>
	  <tr>
	     <td><em>string</em> Replace[<em>old</em>,<em>new</em>]</td>
	  </tr>
	  <tr>
         <td><em>string</em> Right[length]</td>
         <td>The right (length) of the string.. Right[2] of &#34;Left&#34; will be &#34;ft&#34;</td>
      </tr>
	  <tr>
         <td><em>string</em> Right[-length]</td>
         <td>The right ("all but" length) of the string.. Right[-1] of &#34;Left&#34; will be &#34;eft&#34;</td>
      </tr>
	  <tr>
         <td><em>string</em> Token[n,separator]</td>
         <td>Retrieve a token from the string using a custom separator. Will not skip empty values</td>
      </tr>
	  <tr>
         <td><em>string</em> Upper</td>
         <td>The string in all UPPER CASE</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>this IS a string, assface</td>
      </tr>
   </tbody>
</table><br>	
<blockquote>
<span class="txtbold">Example</span><br><br>
Sub Main<br>
<span class="tab">/declare MyVar string local</span><br>
<span class="tab">/varset MyVar THIS,,IS,A,,TEST</span><br>
<span class="tab">/echo Using Arg: ${MyVar.Arg[2,,]}</span><br>
<span class="tab">/echo Using Token: ${MyVar.Token[2,,]}</span><br>
/return<br><br>
The output from the above would be:<br><br>
Using Arg: IS<br>
Using Token: (empty string)
</blockquote>
<a name="refswitch" id="refswitch"></a>
<span class="txtbold">switch</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> ID</td>
         <td>Switch ID</td>
      </tr>
      <tr>
         <td><em>float</em> Distance</td>
         <td>Distance from player to switch in (x,y)</td>
      </tr>
      <tr>
         <td><em>float</em> X</td>
         <td>X</td>
      </tr>
      <tr>
         <td><em>float</em> Y</td>
         <td>Y</td>
      </tr>
      <tr>
         <td><em>float</em> Z</td>
         <td>Z</td>
      </tr>
      <tr>
         <td><em>float</em> W</td>
         <td>X (Westward-positive)</td>
      </tr>
      <tr>
         <td><em>float</em> N</td>
         <td>Y (Northward-positive)</td>
      </tr>
      <tr>
         <td><em>float</em> U</td>
         <td>Z (Upward-positive)</td>
      </tr>
      <tr>
         <td><em>heading</em> Heading</td>
         <td>Switch is facing this heading</td>
      </tr>
      <tr>
         <td><em>bool</em> LineOfSight</td>
         <td>Returns TRUE if the switch is in LoS</td>
      </tr>
      <tr>
         <td><em>float</em> DefaultX</td>
         <td>&#34;closed&#34; state X</td>
      </tr>
      <tr>
         <td><em>float</em> DefaultY</td>
         <td>&#34;closed&#34; state Y</td>
      </tr>
      <tr>
         <td><em>float</em> DefaultZ</td>
         <td>&#34;closed&#34; state Z</td>
      </tr>
      <tr>
         <td><em>float</em> DefaultW</td>
         <td>&#34;closed&#34; state X (Westward-positive)</td>
      </tr>
      <tr>
         <td><em>float</em> DefaultN</td>
         <td>&#34;closed&#34; state Y (Northward-positive)</td>
      </tr>
      <tr>
         <td><em>float</em> DefaultU</td>
         <td>&#34;closed&#34; state Z (Upward-positive)</td>
      </tr>
      <tr>
         <td><em>heading</em> DefaultHeading</td>
         <td>&#34;closed&#34; state heading</td>
      </tr>
      <tr>
         <td><em>bool</em> Open</td>
         <td>Open?</td>
      </tr>
      <tr>
         <td><em>heading</em> HeadingTo</td>
         <td>Direction player must move to meet this switch</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>Name</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as ID</td>
      </tr>
   </tbody>
</table>
<br>
<a name="reftime" id="reftime"></a>
<span class="txtbold">time</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> Hour</td>
         <td>Hour (0-23)</td>
      </tr>
      <tr>
         <td><em>int</em> Minute</td>
         <td>Minute</td>
      </tr>
      <tr>
         <td><em>int</em> Second</td>
         <td>Second</td>
      </tr>
      <tr>
         <td><em>int</em> SecondsSinceMidnight</td>
         <td>Number of seconds since midnight</td>
      </tr>
      <tr>
         <td><em>int</em> DayOfWeek</td>
         <td>1=sunday to 7=saturday (might make a data type later)</td>
      </tr>
      <tr>
         <td><em>int</em> Day</td>
         <td>Day of the month</td>
      </tr>
      <tr>
         <td><em>int</em> Month</td>
         <td>Month of the year</td>
      </tr>
      <tr>
         <td><em>int</em> Year</td>
         <td>Year</td>
      </tr>
      <tr>
         <td><em>string</em> Time12</td>
         <td>hhmmss, 12-hour format</td>
      </tr>
      <tr>
         <td><em>string</em> Time24</td>
         <td>hhmmss, 24-hour format</td>
      </tr>
      <tr>
         <td><em>string</em> Date</td>
         <td>MM/DD/YYYY</td>
      </tr>
      <tr>
         <td><em>bool</em> Night</td>
         <td>Gives true if the current hour is considered "night" in EQ (700pm-659am)</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Time24</td>
      </tr>
   </tbody>
</table><br>
<br>
<a name="reftimer" id="reftimer"></a>
<span class="txtbold">timer</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> Value</td>
         <td>Current value of the timer</td>
      </tr>
      <tr>
         <td><em>int</em> OriginalValue</td>
         <td>Original value of the timer</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Value</td>
      </tr>
   </tbody>
</table>
<br>
<a name="reftype" id="reftype"></a>
<span class="txtbold">type</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>string</em> Name</td>
         <td>Type name</td>
      </tr>
      <tr>
         <td><em>string</em> Member[id]</td>
         <td>Member name based on an internal ID number (based on 1 through n, not all values will be used)</td>
      </tr>
      <tr>
         <td><em>int</em> Member[name]</td>
         <td>Member internal ID number based on name (will be a number from 1 to n)</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="refwindow" id="refwindow"></a>
<span class="txtbold">window</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>bool</em> Open</td>
         <td>TRUE if the window is open</td>
      </tr>
      <tr>
         <td><em>window</em> Child[name]</td>
         <td>Child with this name</td>
      </tr>
      <tr>
         <td><em>int</em> VScrollMax</td>
         <td>Vertical scrollbar range</td>
      </tr>
      <tr>
         <td><em>int</em> VScrollPos</td>
         <td>Vertical scrollbar position</td>
      </tr>
      <tr>
         <td><em>int</em> VScrollPct</td>
         <td>Vertical scrollbar position in % to range from 0</td>
      </tr>
      <tr>
         <td><em>int</em> HScrollMax</td>
         <td>Horizontal scrollbar range</td>
      </tr>
      <tr>
         <td><em>int</em> HScrollPos</td>
         <td>Horizontal scrollbar position</td>
      </tr>
      <tr>
         <td><em>int</em> HScrollPct</td>
         <td>Horizontal scrollbar position in % to range from 0</td>
      </tr>
      <tr>
         <td><em>bool</em> Children</td>
         <td>Has children?</td>
      </tr>
      <tr>
         <td><em>bool</em> Siblings</td>
         <td>Has siblings?</td>
      </tr>
      <tr>
         <td><em>window</em> Parent</td>
         <td>Parent window</td>
      </tr>
      <tr>
         <td><em>window</em> FirstChild</td>
         <td>First child window</td>
      </tr>
      <tr>
         <td><em>window</em> Next</td>
         <td>Next sibling window</td>
      </tr>
      <tr>
         <td><em>bool</em> Minimized</td>
         <td>Minimized?</td>
      </tr>
      <tr>
         <td><em>int</em> X Screen</td>
         <td>X position</td>
      </tr>
      <tr>
         <td><em>int</em> Y Screen</td>
         <td>Y position</td>
      </tr>
      <tr>
         <td><em>int</em> Height</td>
         <td>Height in pixels</td>
      </tr>
      <tr>
         <td><em>int</em> Width</td>
         <td>Width in pixels</td>
      </tr>
      <tr>
         <td><em>bool</em> MouseOver</td>
         <td>Mouse currently over?</td>
      </tr>
      <tr>
         <td><em>argb</em> BGColor</td>
         <td>Background color</td>
      </tr>
      <tr>
         <td><em>string</em> Text</td>
         <td>Window's text</td>
      </tr>
      <tr>
         <td><em>string</em> Tooltip</td>
         <td>TooltipReference text</td>
      </tr>
      <tr>
         <td><em>int</em> Style</td>
         <td>Window style code</td>
      </tr>
      <tr>
         <td><em>bool</em> Enabled</td>
         <td>Enabled?</td>
      </tr>
      <tr>
         <td><em>bool</em> Highlighted</td>
         <td>Highlighted/mouse over?</td>
      </tr>
      <tr>
         <td><em>bool</em> Checked</td>
         <td>Checked? (useful for buttons)</td>
      </tr>
      <tr>
         <td><em>string</em> List[n<em>,y</em>]</td>
         <td>Get the text for the nth item in a list box. Only works on list boxes.<br>
            Use of <em>,y</em> is optional and allows selection of the column of the window to get text from.</td>
      </tr>
      <tr>
         <td><em>int</em> List[text<em>,y</em>]</td>
         <td>Find an item in a list box by partial match (use window.List[=text] for exact). Only works on list boxes.<br>
            Use of <em>,y</em> is optional and allows selection of the column of the window to search in.</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>Name of window piece (e.g. "ChatWindow" for top level windows, or the Piece name (NOTE: CUSTOM UI DEPENDANT) for child windows)</td>
      </tr>
      <tr>
         <td><em>string</em> ScreenID</td>
         <td>ScreenID of window piece (ScreenID is NOT custom ui dependant, this *must be* the same on ALL UIs)</td>
      </tr>
      <tr>
         <td><em>string</em> Type</td>
         <td>Type of window piece (Screen for top level windows, or Listbox, Button, Gauge, Label, Editbox, Slider, etc)</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>TRUE if exists, FALSE if not</td>
      </tr>
   </tbody>
</table>
<br>
<a name="refzone" id="refzone"></a>
<span class="txtbold">zone</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> ID</td>
         <td>Zone ID</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>Full name like &#34;Ocean of Tears&#34;</td>
      </tr>
      <tr>
         <td><em>string</em> ShortName</td>
         <td>Short name like &#34;oot&#34;</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="immedtypes" id="immedtypes"></a>
<span class="txtbold">Immediate Types</span><br><br>
<a name="immargb" id="immargb"></a>
<span class="txtbold">argb</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> A</td>
         <td>Alpha</td>
      </tr>
      <tr>
         <td><em>int</em> R</td>
         <td>Red</td>
      </tr>
      <tr>
         <td><em>int</em> G</td>
         <td>Green</td>
      </tr>
      <tr>
         <td><em>int</em> B</td>
         <td>Blue</td>
      </tr>
      <tr>
         <td><em>int</em> Int</td>
         <td>The integer formed by ARGB</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>The hex value of the integer formed by ARGB</td>
      </tr>
   </tbody>
</table>
<br>
<a name="immbool" id="immbool"></a>
<span class="txtbold">bool</span><br><br>
<span class="txtbold">Members</span><br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>To String</td>
         <td>"TRUE" for non-zero, or "FALSE" for zero</td>
      </tr>
   </tbody>
</table>
<br>
<a name="immbody" id="immbody"></a>
<span class="txtbold">body</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> ID</td>
         <td>The body type's ID #</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>The full body type name</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="immbyte" id="immbyte"></a>
<span class="txtbold">byte</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>To String</td>
         <td>The number</td>
      </tr>
   </tbody>
</table>
<br>
<a name="immclass" id="immclass"></a>
<span class="txtbold">class</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>bool</em> CanCast</td>
         <td>Can usually cast? (not melee only)</td>
      </tr>
      <tr>
         <td><em>bool</em> ClericType</td>
         <td>Cleric/Paladin?</td>
      </tr>
      <tr>
         <td><em>bool</em> DruidType</td>
         <td>Druid/Ranger?</td>
      </tr>
      <tr>
         <td><em>int</em> ID</td>
         <td>The class's ID #</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>The "long name" as in "Ranger"</td>
      </tr>
      <tr>
         <td><em>bool</em> NecromancerType</td>
         <td>Necromancer/Shadowknight?</td>
      </tr>
      <tr>
         <td><em>bool</em> PetClass</td>
         <td>Pet class? (shaman, necromancer, mage, beastlord)</td>
      </tr>
      <tr>
         <td><em>bool</em> PureCaster</td>
         <td>Pure caster? (can gate!)</td>
      </tr>
      <tr>
         <td><em>bool</em> ShamanType</td>
         <td>Shaman/Beastlord?</td>
      </tr>
      <tr>
         <td><em>string</em> ShortName</td>
         <td>The "short name" as in "RNG"</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="immcorpse" id="immcorpse"></a>
<span class="txtbold">corpse</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> Items</td>
         <td>Item count on the corpse</td>
      </tr>
      <tr>
         <td><em>item</em> Item[n]</td>
         <td>nth item on the corpse</td>
      </tr>
      <tr>
         <td><em>item</em> Item[name]</td>
         <td>Finds an item by partial name in this corpse (use Item[=name] for exact)</td>
      </tr>
      <tr>
         <td><em>bool</em> Open</td>
         <td>Corpse open?</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>FALSE, except if a corpse is open gives TRUE</td>
      </tr>
   </tbody>
</table>
<br>
<a name="immdeity" id="immdeity"></a>
<span class="txtbold">deity</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> ID</td>
         <td>The deity's ID #</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>The full deity name</td>
      </tr>
      <tr>
         <td><em>string</em> Team</td>
         <td>The team name</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="immevolving" id="immevolving"></a>
<span class="txtbold">evolving</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> ExpPct</td>
         <td>Returns the current exp percent of the evolving item</td>
      </tr>
      <tr>
         <td><em>bool</em> ExpOn</td>
         <td>Is Evolving exp on?</td>
      </tr>
      <tr>
         <td><em>int</em> Level</td>
         <td>Returns the current level of the evolving item</td>
      </tr>
	  <tr>
         <td><em>int</em> MaxLevel</td>
         <td>Returns the maximum level of the evolving item</td>
      </tr>
	  
      <tr>
         <td>To String</td>
         <td>Returns TRUE or FALSE, is item an evolving item</td>
      </tr>
   </tbody>
</table>
<br>
<a name="immfloat" id="immfloat"></a>
<span class="txtbold">float</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>string</em> Deci</td>
         <td>###.#</td>
      </tr>
      <tr>
         <td><em>string</em> Centi</td>
         <td>###.##</td>
      </tr>
      <tr>
         <td><em>string</em> Milli</td>
         <td>###.###</td>
      </tr>
      <tr>
         <td><em>int</em> Int</td>
         <td>The whole number portion (will not round)</td>
      </tr>
      <tr>
         <td><em>string</em> Precision[n]</td>
         <td>Convert to a string with this number of digits after the decimal (1 is Deci, 2 is Centi, etc)</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>###.##</td>
      </tr>
   </tbody>
</table>
<br>
<a name="immheading" id="immheading"></a>
<span class="txtbold">heading</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> Clock</td>
         <td>The nearest clock direction, e.g. 1-12</td>
      </tr>
      <tr>
         <td><em>float</em> Degrees</td>
         <td>Heading in degrees (same as casting to float)</td>
      </tr>
      <tr>
         <td><em>float</em> DegreesCCW</td>
         <td>Heading in degrees Counter-Clockwise (the way the rest of MQ2 and EQ uses it, and is expected by older macros)</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>"south" "south by southeast" etc</td>
      </tr>
      <tr>
         <td><em>string</em> ShortName</td>
         <td>"S" "SSE" etc</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as ShortName</td>
      </tr>
   </tbody>
</table>
<br>
<a name="immint" id="immint"></a>
<span class="txtbold">int</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>float</em> Float</td>
         <td>The number as a float (instead of 123, this will give 123.0)</td>
      </tr>
      <tr>
         <td><em>string</em> Hex</td>
         <td>The hex value of the integer</td>
      </tr>
      <tr>
         <td><em>int</em> Reverse</td>
         <td>Endianness reversed</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>The number</td>
      </tr>
   </tbody>
</table>
<br>
<a name="imminvslot" id="imminvslot"></a>
<span class="txtbold">invslot</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> ID</td>
         <td>Number of this item slot (usable directly by /itemnotify)</td>
      </tr>
      <tr>
         <td><em>item</em> Item</td>
         <td>Item contained by this item slot</td>
      </tr>
      <tr>
         <td><em>invslot</em> Pack</td>
         <td>Container that must be opened to access the slot with /itemnotify</td>
      </tr>
      <tr>
         <td><em>int</em> Slot</td>
         <td>Slot number inside the pack which holds the item</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>For inventory slots not inside packs, the slot name</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as ID</td>
      </tr>
   </tbody>
</table>
<br>
<a name="immticks" id="immticks"></a>
<span class="txtbold">ticks</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> Hours</td>
         <td>The number of hours in hh:mm:ss</td>
      </tr>
      <tr>
         <td><em>int</em> Minutes</td>
         <td>The number of minutes in hh:mm:ss (will never be 60+)</td>
      </tr>
      <tr>
         <td><em>int</em> Seconds</td>
         <td>The number of seconds in hh:mm:ss (will never be 60+)</td>
      </tr>
      <tr>
         <td><em>string</em> Time</td>
         <td>The time formatted as mm:ss</td>
      </tr>
      <tr>
         <td><em>int</em> TotalMinutes</td>
         <td>The total number of minutes</td>
      </tr>
      <tr>
         <td><em>int</em> TotalSeconds</td>
         <td>The total number of seconds</td>
      </tr>
      <tr>
         <td><em>int</em> Ticks</td>
         <td>The value in ticks</td>
      </tr>
      <tr>
         <td><em>string</em> Time</td>
         <td>Time in the form mm:ss (if there are no hours, the form will be mm:ss)</td>
      </tr>
      <tr>
         <td><em>string</em> TimeHMS</td>
         <td>Time in the form hh:mm:ss (if there are no hours, the form will be mm:ss)</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Ticks</td>
      </tr>
   </tbody>
</table>
<br>
<a name="immrace" id="immrace"></a>
<span class="txtbold">race</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> ID</td>
         <td>The race's ID #</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>The full race name</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="immraidmember" id="immraidmember"></a>
<span class="txtbold">raidmember</span> (inherits "spawn" when they are in zone)<br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>class</em> Class</td>
         <td>Raid member's class (works without being in zone)</td>
      </tr>
      <tr>
         <td><em>int</em> Group</td>
         <td>Current group number (or 0)</td>
      </tr>
      <tr>
         <td><em>bool</em> GroupLeader</td>
         <td>Group leader?</td>
      </tr>
      <tr>
         <td><em>int</em> Level</td>
         <td>Raid member's level (works without being in zone)</td>
      </tr>
      <tr>
         <td><em>bool</em> Looter</td>
         <td>Allowed to loot with current loot rules and looters?</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>Player's name</td>
      </tr>
      <tr>
         <td><em>bool</em> RaidLeader</td>
         <td>Raid leader?</td>
      </tr>
      <tr>
         <td><em>spawn</em> Spawn</td>
         <td>spawn object for this player if available (must be in zone)</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="indeptypes" id="indeptypes"></a>
<span class="txtbold">Independent Types</span><br><br>
<a name="indcurrentzone" id="indcurrentzone"></a>
<span class="txtbold">currentzone</span> (Inherits zone)<br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>float</em> Gravity</td>
         <td>Gravity</td>
      </tr>
      <tr>
         <td><em>int</em> ID</td>
         <td>Zone ID</td>
      </tr>
      <tr>
         <td><em>float</em> MinClip</td>
         <td>Minimum clip plane allowed in this zone</td>
      </tr>
      <tr>
         <td><em>float</em> MaxClip</td>
         <td>Maximum clip plane allowed in this zone</td>
      </tr>
      <tr>
         <td><em>string</em> Name</td>
         <td>Full name like "Ocean of Tears"</td>
      </tr>
      <tr>
         <td><em>string</em> ShortName</td>
         <td>Short name like "oot"</td>
      </tr>
      <tr>
         <td><em>int</em> SkyType</td>
         <td>Sky type</td>
      </tr>
      <tr>
         <td><em>int</em> Type</td>
         <td>Zone type</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="indmacro" id="indmacro"></a>
<span class="txtbold">macro</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>string</em> Name</td>
         <td>Name of current macro</td>
      </tr>
      <tr>
         <td><em>int</em> Params</td>
         <td>Number of parameters to current sub</td>
      </tr>
      <tr>
         <td><em>string</em> Return</td>
         <td>Last value from /return</td>
      </tr>
      <tr>
         <td><em>int</em> RunTime</td>
         <td>Amount of time macro has been running</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<a name="indmacroquest" id="indmacroquest"></a>
<span class="txtbold">macroquest</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>string</em> BuildDate</td>
         <td>Date that mq2main.dll was built</td>
      </tr>
	  <tr>
	     <td><em>bool</em> ChatChannel[<em>channelname</em><strong>|</strong><em>#</em>]</td>
	     <td>Returns TRUE if <em>channelname</em> is joined or returns the channel name of <em>#</em></td>
      </tr>
	  <tr>
	     <td><em>bool</em> ChatChannels</td>
	     <td>Returns the number of chat channels joined</em></td>
      </tr>
      <tr>
         <td><em>string</em> Error</td>
         <td>Last normal error message</td>
      </tr>
      <tr>
         <td><em>string</em> GameState</td>
         <td>CHARSELECT INGAME UNKNOWN</td>
      </tr>
      <tr>
         <td><em>string</em> LastCommand</td>
         <td>Last command entered</td>
      </tr>
	  <tr>
         <td><em>bool</em> LClickedObject</td>
         <td>Clicked a ground spawn, TS container, NPC, or PC</td>
      </tr>
      <tr>
         <td><em>string</em> LastTell</td>
         <td>Name of last person to send you a tell</td>
      </tr>
      <tr>
         <td><em>string</em> LoginName</td>
         <td>Your station name</td>
      </tr>
      <tr>
         <td><em>int</em> MouseX</td>
         <td>Mouse's x location</td>
      </tr>
      <tr>
         <td><em>int</em> MouseY</td>
         <td>Mouse's y location</td>
      </tr>
      <tr>
         <td><em>string</em> MQ2DataError</td>
         <td>Last MQ2Data parsing error message</td>
      </tr>
      <tr>
         <td><em>int</em> Running</td>
         <td>Running time of current MQ2 session, in milliseconds</td>
      </tr>
      <tr>
         <td><em>string</em> Server</td>
         <td>Full name of your server</td>
      </tr>
      <tr>
         <td><em>string</em> SyntaxError</td>
         <td>Last syntax error message</td>
      </tr>
	  <tr>
	     <td><em>int</em> ViewportX</td>
		 <td>Left edge of the viewport area</td>	  
	  </tr>
	  <tr>
	     <td><em>int</em> ViewportY</td>
		 <td>Top edge of the viewport area</td>	  
	  </tr>
	  <tr>
	     <td><em>int</em> ViewportXMax</td>
		 <td>Right edge of the viewport area</td>	  
	  </tr>
	  <tr>
	     <td><em>int</em> ViewportYMax</td>
		 <td>Bottom edge of the viewport area</td>	  
	  </tr>
	  <tr>
	     <td><em>int</em> ViewportXCenter</td>
		 <td>Horizontal center of the viewport  area</td>	  
	  </tr>
	  <tr>
	     <td><em>int</em> ViewportYCenter</td>
		 <td>Vertical center of the viewport  area</td>	  
	  </tr>
      <tr>
         <td>To String</td>
         <td>None</td>
      </tr>
   </tbody>
</table>
<br>
<a name="indmath" id="indmath"></a>
<span class="txtbold">math</span> <strong>(See Appendix A for valid Operators)</strong><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>float</em> Abs[formula]</td>
         <td>Absolute value (calculates first)</td>
      </tr>
      <tr>
         <td><em>float</em> Acos[n]</td>
         <td>The Acos of n</td>
      </tr>
      <tr>
         <td><em>float</em> Asin[n]</td>
         <td>The Asin of n</td>
      </tr>
      <tr>
         <td><em>float</em> Atan[n]</td>
         <td>The Atan of n</td>
      </tr>
      <tr>
         <td><em>float</em> Calc[formula]</td>
         <td>Evaluates a mathematical formula</td>
      </tr>
      <tr>
         <td><em>float</em> Cos[n]</td>
         <td>The Cos of n</td>
      </tr>
      <tr>
         <td><em>int</em> Dec[hex]</td>
         <td>The decimal value given a hexadecimal string</td>
      </tr>
      <tr>
         <td><em>float</em> Distance[y,x,z:y,x,z]</td>
         <td>Performs distance calculations in 1, 2 or 3 dimensions. Default to your character's current x, y or z.</td>
      </tr>
      <tr>
         <td><em>float</em> Distance[N,W,U:N,W,U]</td>
         <td>Same as above, just demonstrating that the order is the same as above</td>
      </tr>
      <tr>
         <td><em>string</em> Hex[n]</td>
         <td>The hex value of n</td>
      </tr>
      <tr>
         <td><em>int</em> Not[n]</td>
         <td>Performs a bitwise not on n</td>
      </tr>
      <tr>
         <td><em>int</em> Rand[n]</td>
         <td>Random number with range of n, meaning Rand[n]=0-(n-1). e.g. Rand[2] will give 0 or 1</td>
      </tr>
      <tr>
         <td><em>float</em> Sin[n]</td>
         <td>The Sin of n</td>
      </tr>
      <tr>
         <td><em>float</em> Sqrt[formula]</td>
         <td>The square root of formula</td>
      </tr>
      <tr>
         <td><em>float</em> Tan[n]</td>
         <td>The Tan of n</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>NULL</td>
      </tr>
   </tbody>
</table>
<br><br>
<a name="indmerchant" id="indmerchant"></a>
<span class="txtbold">merchant</span> (inherits spawn)<br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>int</em> Items</td>
         <td>Item count on the merchant</td>
      </tr>
      <tr>
         <td><em>item</em> Item[n]</td>
         <td>nth item on the merchant</td>
      </tr>
      <tr>
         <td><em>item</em> Item[name]</td>
         <td>Finds an item by partial name at this merchant (use merchant.Item[=name] for exact)</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>FALSE, except if a merchant is open gives TRUE</td>
      </tr>
      <tr>
         <td>float Markup</td>
         <td>
            The value used to calculate item values for merchant (Markup is what your charisma, faction, change)<br>
            Markup*Cost=Merchant sell price.<br>
            Cost*(1/Markup)=Your sell price. 1.05 is the cap, so there might not be a cap based on charisma.
</td>
      </tr>
      <tr>
         <td><em>bool</em> Open</td>
         <td>Merchant open?</td>
      </tr>
   </tbody>
</table>
<br>
<a name="indraid" id="indraid"></a>
<span class="txtbold">raid</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>float</em> AverageLevel</td>
         <td>Average level of raid members (yay more accurate than in the window)</td>
      </tr>
      <tr>
         <td><em>raidmember</em> Leader</td>
         <td>Raid leader</td>
      </tr>
      <tr>
         <td><em>string</em> Looter[n]</td>
         <td>Specified looter name by number</td>
      </tr>
      <tr>
         <td><em>int</em> Looters</td>
         <td>Number of specified looters</td>
      </tr>
      <tr>
         <td><em>int</em> LootType</td>
         <td>Loot type number (1-leader 2-leader&#38;groupleader 3-leader&#38;specified)</td>
      </tr>
      <tr>
         <td><em>raidmember</em> Member[n]</td>
         <td>Raid member by number</td>
      </tr>
      <tr>
         <td><em>raidmember</em> Member[name]</td>
         <td>Raid member by name</td>
      </tr>
      <tr>
         <td><em>int</em> Members</td>
         <td>Total number of raid members</td>
      </tr>
      <tr>
         <td><em>raidmember</em> Target</td>
         <td>Raid target (clicked in raid window)</td>
      </tr>
      <tr>
         <td><em>int</em> TotalLevels</td>
         <td>Sum of all raid members' levels</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>None</td>
      </tr>
   </tbody>
</table>
<br>
<a name="examples" id="examples"></a>
<span class="txtbold">Common Examples</span><br><br>
<span class="txtbold">Character</span>
<blockquote>
/echo ${Me.Buff[1]}<br>
/echo ${Me.Buff[1].Duration.Time}<br>
/echo ${Me.Buff[name].Duration.Time}<br>
/if (${Target.Distance}&lt;11)&#38;&#38;(${Me.AbilityReady[Bash]}) /doability "Bash"
</blockquote>
<span class="txtbold">Containers</span>
<blockquote>
${Me.Inventory[slot]}<br>
/if (${InvSlot[pack${index}].Item.Container})<br>
/if (!${InvSlot[pack${index}].Item.Container} &#38;&#38; ${InvSlot[pack${index}].Item.ID})<br>
${Window[Enviro].Open}
</blockquote>
<span class="txtbold">Getting names</span>
<blockquote>
${Group[1].Name}<br>
${Target.Name}<br>
${Group[1].Pet.Name}
</blockquote>
<span class="txtbold">Getting ID's</span>
<blockquote>
/echo ${Cursor.ID}<br>
/echo ${Me.Gem[3].ID}<br>
/echo ${Group[3].ID}<br>
/echo Bat 1: ${NearestSpawn[1,npc bat].ID}<br>
/echo Bat 2: ${NearestSpawn[2,npc bat].ID}<br>
/echo Bat 3: ${NearestSpawn[3,npc bat].ID}
</blockquote>
<span class="txtbold">Using Arg</span><br><br>
<span class="txtbold">Targetting</span>
<blockquote>
/target id ${NearestSpawn[1,pc].ID}<br>
Target the nearest PC
</blockquote>
<span class="txtbold">Using Defined</span>
<blockquote>
/if (!${Defined[myVar]}) {<br>
<span class="tab">/declare myVar int local 0</span><br>
}
</blockquote>
<span class="txtbold">String Comparisons</span>
<blockquote>
/docommand ${If[Cursor.Name.Compare[itemname],/autoinv,/destroy}<br>
/if (${Param1.Equal[yourself]}<br>
/if (${Param1.NotEqual[${Me.Name}]})<br>
</blockquote>
<span class="txtbold">Numeric Comparisons</span>
<blockquote>
/if (${AttackOnAssist}==1)<br>
/if (${Target.ID}==${Int[${Param0}]})<br>
/if (${Target.Distance.Int}&lt;100)<br>
/if (!${Me.Combat} &#38;&#38; ${DoTraps}==1)
</blockquote>
<span class="txtbold">Casting</span>
<blockquote>
${Window[SpellBookWnd].Open}<br>
${Me.Casting}<br>
${Me.Gem[1].Name}
</blockquote>
<span class="txtbold">Calculations</span>
<blockquote>
/if (${Math.Distance[${AnchorX},${AnchorY}]}>${AnchorRadius})<br>
${Math.Calc[${Target.Y}-${Math.Cos[${Target.Heading}]}]}<br>
${Math.Distance[${Math.Calc[${Target.Y}-${Me.Y}]}]}
</blockquote>
<span class="txtbold">Ini</span>
<blockquote>
/varset DoEvade ${Ini[${IniFile},Combat,DoEvade]}
</blockquote>
<span class="txtbold">Windows</span>
<blockquote>
<span class="txtbold">Window closed</span><br>
/if (!${Window[pack${PackNum}].Open}) {/echo not open}<br>
/if (${Window[pack${PackNum}].Open}==FALSE) {/echo not open}<br>
/if (${Window[pack${PackNum}].Open}==NULL) {/echo not open}<br><br>
<span class="txtbold">Window Open</span><br>
/if ${Window[pack${PackNum}].Open} { do this }<br><br>
<span class="txtbold">Window Lists</span><br>
${Window[TradeskillWnd].Child[RecipeList].List[1]}<br>
Get the first-column text for the nth item in a list box
</blockquote>
<span class="txtbold">Spawn Searches</span>
<blockquote>
${Me.NearestSpawn[1,trigger].Distance}<br>
${Me.NearestSpawn[1,trap].Distance}<br>
${Me.NearestSpawn[1,timer].Distance}<br>
${Me.NearestSpawn[1,untargetable].Distance}
</blockquote>
<a name="mq2andtheui" id="mq2andtheui"></a>
<span class="txtbold">MacroQuest2 and the UI</span><br><br>
MacroQuest2 has several built in tooltypes that can be used in custom UI's. These tooltypes allow you to display information
in your UI that you normally would not be able to see.<br><br>
<a name="mq2uilabelids" id="mq2uilabelids"></a>
<span class="txtbold">Using Label ID's</span><br><br>
The current built-in label ids are:<br>
<table width="50%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>1000: ${Me.CurrentMana}</td>
         <td>2000: ${Target.Level}</td>
      </tr>
      <tr>
         <td>1001: ${Me.MaxMana}</td>
         <td>2001: ${Target.Class}</td>
      </tr>
      <tr>
         <td>1002: ${Me.State}</td>
         <td>2002: ${Target.Race}</td>
      </tr>
      <tr>
         <td>1003: ${Me.Speed}</td>
         <td>2003: ${Target.Distance}</td>
      </tr>
      <tr>
         <td>1004: ${Me.Heading}</td>
         <td>2004:</td>
      </tr>
      <tr>
         <td>1005: ${Me.X}</td>
         <td>2005: ${Target.State}</td>
      </tr>
      <tr>
         <td>1006: ${Me.Y}</td>
         <td>2006: ${Target.X}</td>
      </tr>
      <tr>
         <td>1007: ${Me.Z}</td>
         <td>2007: ${Target.Y}</td>
      </tr>
      <tr>
         <td>1008: ${Me.Dar}</td>
         <td>2008: ${Target.Z}</td>
      </tr>
      <tr>
         <td>1009: ${Me.Cash}</td>
         <td>2009: ${Target.Heading}</td>
      </tr>
      <tr>
         <td>1010: ${Me.CashBank}</td>
         <td>2010: ${Target.Speed}</td>
      </tr>
      <tr>
         <td>1011: ${Me.Platinum)</td>
         <td></td>
      </tr>
      <tr>
         <td>1012: ${Me.PlatinumShared}</td>
         <td></td>
      </tr>
      <tr>
         <td>1013: ${Me.Gold}</td>
         <td></td>
      </tr>
      <tr>
         <td>1014: ${Me.SilverBank}</td>
         <td></td>
      </tr>
      <tr>
         <td>1015: ${Me.CopperBank}</td>
         <td></td>
      </tr>
      <tr>
         <td>3000: ${Zone}</td>
         <td>4000: ${Macro.Name}</td>
      </tr>
      <tr>
         <td>3001:</td>
         <td>4001: ${Macro.RunTime}</td>
      </tr>
      <tr>
         <td>3002: ${Me.Bound}</td>
         <td></td>
      </tr>
      <tr>
         <td>3003: ${Time()</td>
         <td></td>
      </tr>
      <tr>
         <td>3004: ${Time.Hour}</td>
         <td></td>
      </tr>
      <tr>
         <td>3005: ${Time.Minute}</td>
         <td></td>
      </tr>
      <tr>
         <td>3006: ${Time.Second}</td>
         <td></td>
      </tr>
      <tr>
         <td>3007: ${Time.Date}</td>
         <td></td>
      </tr>
      <tr>
         <td>3008: ${Time.Year}</td>
         <td></td>
      </tr>
      <tr>
         <td>3009: ${Time.Month}</td>
         <td></td>
      </tr>
      <tr>
         <td>3010: ${Time.Day}</td>
         <td></td>
      </tr>
      <tr>
         <td>3011: ${Spawn.GM}</td>
         <td></td>
      </tr>
      <tr>
         <td>3012: ${Me.FreeInventory}</td>
         <td></td>
      </tr>
   </tbody>
</table><br><br>
<span class="txtbold">Example</span>
<blockquote>
&lt;Label item =&#38;Target_Level&#38;&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;ScreenID&gt;TargetLevel&lt;/ScreenID&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;EQType&gt;2000&lt;/EQType&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;Font&gt;2&lt;/Font&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;RelativePosition&gt;true&lt;/RelativePosition&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;Location&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;X&gt;24&lt;/X&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Y&gt;33&lt;/Y&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;/Location&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;Size&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;CX&gt;22&lt;/CX&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;CY&gt;14&lt;/CY&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;/Size&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;Text&gt;0&lt;/Text&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;TextColor&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;R&gt;255&lt;/R&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;G&gt;255&lt;/G&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;B&gt;0&lt;/B&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;/TextColor&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;NoWrap&gt;true&lt;/NoWrap&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;AlignCenter&gt;false&lt;/AlignCenter&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;AlignRight&gt;true&lt;/AlignRight&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;AlignLeft&gt;false&lt;/AlignLeft&gt;<br>
&lt;/Label&gt;
</blockquote>
<a name="mq2tooltypes" id="mq2tooltypes"></a>
<span class="txtbold">MQ2 UI Tooltypes</span><br><br>
Another method of adding Label ID's is to use the tooltype.<br><br>
<blockquote>
&lt;EQType&gt;9999&lt;/EQType&gt;<br>
&lt;TooltipReference&gt;${variable}&lt;/TooltipReference&gt;<br><br>
<span class="txtbold">Example</span><br><br>
&lt;Label item ="BW_Buff0_Duration"&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;ScreenID&gt;Buff0Duration&lt;/ScreenID&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;EQType&gt;9999&lt;/EQType&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;TooltipReference&gt;${Me.Buff1.Duration}&lt;/TooltipReference&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;Font&gt;2&lt;/Font&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;RelativePosition&gt;true&lt;/RelativePosition&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;Location&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;X&gt;23&lt;/X&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Y&gt;3&lt;/Y&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;/Location&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;Size&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;CX&gt;153&lt;/CX&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;CY&gt;14&lt;/CY&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;/Size&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;Text&gt;&lt;/Text&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;TextColor&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;R&gt;255&lt;/R&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;G&gt;255&lt;/G&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;B&gt;255&lt;/B&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;/TextColor&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;NoWrap&gt;true&lt;/NoWrap&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;AlignCenter&gt;false&lt;/AlignCenter&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;AlignRight&gt;false&lt;/AlignRight&gt;<br>
&lt;/Label&gt;
</blockquote>
<a name="mq2cfgfiles" id="mq2cfgfiles"></a>
<span class="txtbold">MQ2 Config Files</span><br><br>
These are files containing commands that will be executed at specific times. They can be thought of as macros
that run at the specified times.<br><br>
The file must contain commands the same as you would use them normally. Each command will be executed in order, there
are NO macro blocks, events, etc, in a cfg file.<br><br>
* CFG files may be present in &lt;release&gt;\Configs\, in &lt;release&gt;\, or potentially in the EverQuest directory.
Note that &lt;release&gt; would be the same as wherever your Macroquest.ini is.<br><br>
You can manually load a CFG file while in Everquest using the /loadcfg command:<br><br>
<blockquote>
/loadcfg server_charactername.CFG<br>
Loads a CFG file for the character<br><br>
</blockquote>
Example of an entry in a CFG file for a character:<br><br>
<blockquote>
/custombind add lootcorpse<br>
/custombind set lootcorpse /multiline ; /target corpse radius 17; /loot<br>
/bind lootcorpse f
</blockquote>
Configs that are automatically loaded:
<blockquote>
AutoExec.CFG	Executed on the first pulse<br>
CharSelect.CFG	Executed when you are put at character select<br>
server_charactername.CFG	Executed when this character enters the world<br>
mapshortname.CFG	Executed when you zone into this zone<br>
pluginname-AutoExec.CFG	Executed when this plugin is loaded (after its initialization is complete)
</blockquote>
Examples of file names
<blockquote>
<span class="txtbold">Character</span><br>
tallon_lordsoth.cfg<br><br>
<span class="txtbold">Maps</span><br>
oot.cfg, soldungb.cfg<br>
soldunga.cfg<br>
take.cfg<br><br>
<span class="txtbold">Plugins</span><br>
MQ2Map-AutoExec.CFG<br>
MQ2ChatWnd-AutoExec.CFG
</blockquote>
<span class="txtbold">Note</span>: Plugins can use LoadCfgFile(filename)<br><br>
<a name="mq2plugins" id="mq2plugins"></a>
<span class="txtbold">MacroQuest2 Plugins</span><br><br>
See /plugin for instructions on how to load and unload plugins<br><br>
MQ2 has a modular structure that allows different plugins to be loaded and unloaded on demand.<br><br>
Plugins included with MacroQuest2:<br><br>
<blockquote>
MQ2Bzsrch -- a bazaar search plug-in<br>
MQ2Chat -- Directs MQ2 output to the regular chat window<br>
MQ2ChatWnd -- Directs MQ2 output to a special chat window (safer)<br>
MQ2EQBugFix -- fix a crash(!) when exiting with no journal entries<br>
MQ2EQIM -- EQIM<br>
MQ2CustomBinds -- Allows you to specify custom commands to execute on a key combination<br>
MQ2FPS -- frame limiter (similar to EQPlayNice)<br>
MQ2IRC -- IRC plugin<br>
MQ2ItemDisplay -- Add extra data to item windows<br>
MQ2Label -- allows custom UI labels<br>
MQ2Map -- enhanced map<br>
MQ2Telnet -- act as a telnet server for macro output
</blockquote>
<a name="mq2bzsrch" id="mq2bzsrch"></a>
<span class="txtbold">MQ2Bzrsrch Plugin</span><br><br>
<span class="txtbold">TLOs</span><br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>bazaar Bazaar</td>
         <td>Bazaar search info</td>
      </tr>
   </tbody>
</table>
<br>
<span class="txtbold">Data types</span><br><br>
<span class="txtbold">bazaar</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>bool Done</td>
         <td>Search complete?</td>
      </tr>
      <tr>
         <td>int Count</td>
         <td>Result count</td>
      </tr>
      <tr>
         <td>bazaaritem Item[n]</td>
         <td>Result info by index (1-based)</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Done</td>
      </tr>
   </tbody>
</table>
<br>
<span class="txtbold">bazaaritem</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>string Name</td>
         <td>Item name</td>
      </tr>
      <tr>
         <td>spawn Trader</td>
         <td>The guy selling it</td>
      </tr>
      <tr>
         <td>int Price</td>
         <td>Price the guy is selling it for</td>
      </tr>
      <tr>
         <td>int Quantity</td>
         <td>Number of this item this guy has</td>
      </tr>
      <tr>
         <td>int ItemID</td>
         <td>The item's ID number</td>
      </tr>
      <tr>
         <td>int Value</td>
         <td>Value of the item?</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br><br>
<a name="mq2chat" id="mq2chat"></a>
<span class="txtbold">MQ2Chat Plugin</span><br><br>
This plugin enables output of MacroQuest2 commands to the normal chat window.<br><br>
To disable this plugin
<blockquote>
/plugin MQ2Chat unload
</blockquote>
To enable this plugin
<blockquote>
/plugin MQ2Chat
</blockquote>
<a name="mq2chatwnd" id="mq2chatwnd"></a>
<span class="txtbold">MQ2ChatWnd plugin</span><br><br>
This plugin adds an additional window to your UI.<br><br>
This window will display ALL information generated by MacroQuest2 commands and macro's.<br><br>
<span class="txtbold">Note</span>: Any information displayed or typed in this window will NOT go into your character log.
It is invisible to EverQuest.<br><br>
If you don't want to use MQ2ChatWnd you can use the default chat plugin (or both).<br><br>
<span class="txtbold">To disable MQ2ChatWnd</span>
<blockquote>
/plugin mq2chat<br>
loads the default chat plugin (normal chat window)<br><br>
/plugin mq2chatwnd unload<br>
unloads the MacroQuest2 chat window
</blockquote>
Once you do the above two commands, all output from MacroQuest2 and normal EverQuest commands will go to your log,
and will be visible to EverQuest.<br><br>
<span class="txtred">Be careful if doing a /report or /petition. MacroQuest2 output visible in x number of lines will be sent</span>.<br><br>
<a name="mq2custombinds" id="mq2custombinds"></a>
<span class="txtbold">MQ2CustomBinds plugin</span><br><br>
Allows you to specify custom commands to execute on a key combination.<br><br>
There may be a command for the keys being pressed (down), and another for them being released (up).<br><br>
Syntax
<blockquote>
<span class="command">/custombind</span>
<span class="opt">list</span> | [a
<span class="opt">dd</span>|
<span class="opt">delete</span>|
<span class="opt">clear</span>]
<span class="arg">name</span> [
<span class="opt">-down</span>|
<span class="opt">-up</span>] |
<span class="opt">set</span>
<span class="arg">name</span> [
<span class="opt">-down</span>|
<span class="opt">-up</span> ]
<span class="arg">command</span>
</blockquote>
<span class="txtbold">Examples</span>
<blockquote>
/custombind list<br>
Lists all of your custom binds names and commands (the key combinations must be set using /bind)<br><br>
/custombind add name<br>
Will add a new bind name for use here, with /keypress, /bind, etc.<br><br>
/custombind delete name<br>
Removes a custom bind<br><br>
/custombind clear name<br>
Clears a specific command for a custom bind. If -up or -down is not specified, defaults to -down.<br><br>
/custombind set name [-down|-up] command<br>
will set a specific command for a custom bind. If up or down is not specified, defaults to down.<br><br>
Example usage (NOTE: MQ2's very first bind command is "RANGED" so you do not need to do this, but for example)
<blockquote>
/custombind add mybind<br>
/custombind set mybind /ranged<br>
/bind mybind g
</blockquote>
To set the real RANGED bind, do "/bind ranged "
</blockquote>
<a name="mq2eqim" id="mq2eqim"></a>
<span class="txtbold">MQ2EQIM plugin</span><br>
Notifies you when someone on your EQIM buddy list changes. Keeps track of your buddy list<br><br>
Keeps your list of buddies (per character) and the last time they were seen online or on eqim (by any character)<br>
Your friends list is automatically added as buddies.<br><br>
<span class="txtbold">Data types</span><br><br>
<span class="txtbold">buddy</span><br><br>
<span class="txtbold">Members</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>int Buddies</td>
         <td>Size of the buddy index (will not necessarily be equal to the number of buddies, but n in Buddy[n] will never exceed this number)</td>
      </tr>
      <tr>
         <td>string Name</td>
         <td>Buddy's name (may be fennin.Name or just Name, depending on how you added them)</td>
      </tr>
      <tr>
         <td>string Status</td>
         <td>"Removed from list", "Offline", "EQIM", "EQIM (AFK)", "Unknown Status(4)", "Playing", "Playing (AFK)"</td>
      </tr>
      <tr>
         <td>int StatusID</td>
         <td>Numeric representation of the above (0,1,2,3,4,5,6)</td>
      </tr>
      <tr>
         <td>time LastSeen</td>
         <td>Last time this buddy was on/seen</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>Same as Name</td>
      </tr>
   </tbody>
</table>
<br>
<span class="txtbold">Top-Level Objects</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>buddy Buddy[name]</td>
         <td>Info on buddy with this name</td>
      </tr>
      <tr>
         <td>buddy Buddy[n]</td>
         <td>Buddy with this index number in the system</td>
      </tr>
   </tbody>
</table>
<br><br>
<a name="mq2fps" id="mq2fps"></a>
<span class="txtbold">MQ2FPS plugin</span><br><br>
Changes the frames per second of the Everquest screen when it is in focus and when it is in the background.<br><br>
This frees CPU processing time for other tasks. The default setting is foreground: 50 background: 20<br><br>
MQ2FPS now releases the CTRL ALT and SHIFT keys as soon as EQ goes to the background.<br><br>
<span class="txtbold">MQ2FPS commands</span>
<blockquote>
/maxfps fg|bg #<br>
Sets the foreground or background framerate<br><br>
/fps mode [absolute|calculate]<br>
Changes the mode used by /maxfps to absolute or calculate. You can specify the mode, or use /fps mode to toggle between the two.<br><br>
/fps on|off<br>
Enables or disables the framerate display<br><br>
/render fg|bg #|~#<br>
Sets the foreground or background rendering rate. This is how many out of n frames MQ2FPS will allow to be drawn.
You keep moving full speed, the client responds to mouse or keys, the UI is still drawn... but, the world itself will
not be drawn as often.<br><br>
The use of # will cause MQ2FPS to draw 1 of # frames.<br>
The use of ~# will cause MQ2FPS to draw n - 1 frames, where n is #.
<span class="txtbold">Examples</span>
<blockquote>
/render bg 3	Draws 1 out of 3 frames
/render bg ~3	Draws 2 out of 3 frames
</blockquote>
</blockquote>
MQ2FPS plugin adds these Top-Level Objects (these are NOT in the standard reference because they are from a plugin not built in)
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>float FPS</td>
         <td>Current frames per second</td>
      </tr>
      <tr>
         <td>int MaxFPS</td>
         <td>Current max frames per second</td>
      </tr>
      <tr>
         <td>bool Foreground</td>
         <td>Is this session in the foreground?</td>
      </tr>
   </tbody>
</table>
<br><br>
<a name="mq2hud" id="mq2hud"></a>
<span class="txtbold">MQ2HUD plugin</span><br><br>
Provides additional functionality to the HUD included with MQ2. It allows you to add additional elements. Every element gets
parsed for MQ2Data each time it is displayed.<br><br>
The additional fuctionality is added via the use of an ini file.<br><br>
MQ2HUD allows for different HUDs. Each different HUD is stored in MQ2HUD.ini but in different sections.<br><br>
The default HUD is [Elements]. To load a different HUD, the command is /loadhud name (not case sensitive)<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/loadhud bard<br><br>
In this case, the [bard] section in MQ2HUD.ini could also be [BARD]<br><br>
The command to load the default HUD specifically is /defaulthud
</blockquote>
Example MQ2HUD.INI<br><br>
<blockquote>
[Elements]<br>
;The order is TYPE,X,Y,RED,GREEN,BLUE,TEXT<br>
TargetInfo=3,5,35,255,255,255,${Target}<br>
GMIndicator=3,5,45,0,0,255,${Spawn[gm]}<br>
CursorItemName=7,-15,-15,255,255,255,${If[${Cursor.ID},${Cursor},]}<br>
ClickMeForFun=6,-25,-25,255,255,255,${If[!${Cursor.ID},click me,]}<br><br>
TYPE is currently any combination of the following:<br><br>
1 - Display in non-full screen mode<br>
2 - Display in full screen mode ("f10 mode")<br>
4 - X,Y is based on cursor location<br><br>
e.g. 1+2+4=7. 7 means all 3 of the above. 6 means 2 and 4. 3 means 1 and 2. Just add them together. There is no way to
end up with a number that could mean two different combinations.
</blockquote>
Seeing as how the mouse functions perfectly fine in full screen mode, the cursor has been forced to display the same as
it would in UI-visible mode. The only difference is the item is not displayed on your cursor. With MQ2HUD and the
"CursorItemName" example, you could have it show the name of the item attached to your cursor in full screen mode
(use type 6 if you want it to follow your cursor in full screen mode only).<br><br>
X,Y is the screen location. 0,0 is the upper left corner fo your screen.<br><br>
Red, Green and Blue are each from 0 to 255. 255,255,255 is white, 0,0,0 is black.<br><br>
<span class="txtbold">Slash Commands</span>
<blockquote>
/classhud<br>
Loads a class specific hud. This HUD must have a [hudname] section in MQ2HUD.ini<br><br>
/defaulthud<br>
Load the default HUD specifically<br><br>
/hud normal|underui|always<br><br>
normal will make the HUD display as it would normally on top of UI, not at char select or in "f10 mode"<br>
underui will make the HUD display as normal except UNDER the UI, and not at char select or in "f10 mode"<br>
always will make the HUD display under the UI, at char select, and in "f10 mode"<br><br>
/loadhud hudname (not case sensitive)<br>
Loads a HUD by the name hudname. This HUD must have a [hudname] section in MQ2HUD.ini<br><br>
/zonehud<br>
Loads a HUD specific to a zone.This HUD must have a [hudname] section in MQ2HUD.ini<br><br>
<span class="txtbold">Note</span>: There is currently no command to add or remove these from inside the game. One will probably be
added soon. The plugin will automatically re-load the list from the .ini when you modify and save the .ini.
</blockquote>
<span class="txtbold">Top Level Objects</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>string HUD</td>
         <td>Name of currently loaded HUD</td>
      </tr>
   </tbody>
</table>
<br>
<br>
<a name="mq2irc" id="mq2irc"></a>
<span class="txtbold">MQ2IRC plugin</span><br><br>
MQ2IRC is the plugin which provides the ability to connect to the IRC in game<br><br>
<strong>Commands</strong><br><br>
TBA<br><br>
<strong>Top Level Object</strong><br><br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>irc</em> Irc</td>
         <td>Creates an irc object</td>
      </tr>
   </tbody>
</table>
<br>
<strong>Data Type</strong><br><br>
<strong>irc</strong><br><br>
<strong>Members</strong><br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td><em>bool</em> Connected</td>
         <td>connected?</td>
      </tr>
      <tr>
         <td><em>string</em> Server</td>
         <td>current server</td>
      </tr>
      <tr>
         <td><em>string</em> Channel</td>
         <td>current channel</td>
      </tr>
      <tr>
         <td><em>string</em> Nick</td>
         <td>current nickname</td>
      </tr>
      <tr>
         <td><em>int</em> Port</td>
         <td>current port</td>
      </tr>
      <tr>
         <td>To String</td>
         <td>same as Connected</td>
      </tr>
   </tbody>
</table>
<br>
<a name="mq2itemdisplay" id="mq2itemdisplay"></a>
<span class="txtbold">MQ2ItemDisplay</span><br>
MQ2ItemDisplay provides additional information on an item that is right clicked.<br><br>
<span class="txtbold">TLO's</span><br><br>
<em>item</em> DisplayItem<br>
References the items information window. This is the window that is opened when you right click and hold on an item.<br><br>
<span class="txtbold">Commands</span><br><br>
<span class="txtbold">/ireset</span><br>
Resets the  DisplayItem ID<br><br>
<a name="mq2map" id="mq2map"></a>
<span class="txtbold">MQ2Map plugin</span><br><br>
MQ2Map is the plugin which provides additional functionality to the in game map.<br><br>
To find what options are available type /mapfilter help<br><br>
<span class="txtbold">Slash Commands</span><br><br>
/highlight "spawnname" [color # # #] [reset]<br>
Temporarily highlights these spawns<br><br>
Right clicking on spawns on the map targets them<br><br>
<span class="txtbold">Note</span>: You can use search filters for spawnname<br><br>
/highlight color # # #<br>
Sets the highlight color to an RGB value<br><br>
/mapclick keycombo command option<br>
command and special right click commands (hold a combination of shift, control, left alt, right alt to execute a
special command when right clicking on a spawn). Defaults include left-alt right-click to highlight and control r-click tohide.<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
/mapclick lalt+shift /mycommand %i<br>
leftalt+shift right click on a spawn will cause /mycommand to be executed.
</blockquote>
/mapfilter help|option [color R# G# B#]<br><br>
Map filtering options:
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>all</td>
         <td>Enables/disables map functions</td>
      </tr>
      <tr>
         <td>CastRadius #</td>
         <td>Sets radius of casting circle to # (omit or set to 0 to disable)</td>
      </tr>
      <tr>
         <td>Corpse</td>
         <td>Displays corpses</td>
      </tr>
      <tr>
         <td>Custom</td>
         <td>Sets custom filter (omit to disable). Used same search options as /target and the Spawn search TLOs</td>
      </tr>
      <tr>
         <td>Ground</td>
         <td>Displays ground items</td>
      </tr>
      <tr>
         <td>Group</td>
         <td>Displays group members in a specific color</td>
      </tr>
      <tr>
         <td>Help</td>
         <td>Displays the available options for /mapfilter</td>
      </tr>
      <tr>
         <td>Menu</td>
         <td>Allows display of right-click context menu</td>
      </tr>
      <tr>
         <td>Mount</td>
         <td>Displays mounts</td>
      </tr>
      <tr>
         <td>NormalLabels</td>
         <td>Toggles non-MQ2 label display</td>
      </tr>
      <tr>
         <td>NPC</td>
         <td>Displays NPCs</td>
      </tr>
      <tr>
         <td>NPCConColor</td>
         <td>Displays NPCs in consider colors</td>
      </tr>
      <tr>
         <td>PC</td>
         <td>Displays PCs</td>
      </tr>
      <tr>
         <td>PCConColor</td>
         <td>Displays PCs in consider colors</td>
      </tr>
      <tr>
         <td>Pet</td>
         <td>Displays pets</td>
      </tr>
      <tr>
         <td>Target</td>
         <td>Displays your target</td>
      </tr>
      <tr>
         <td>TargetLine</td>
         <td>Displays a line to your target</td>
      </tr>
      <tr>
         <td>TargetMelee #</td>
         <td>Draws a melee-range circle around your target</td>
      </tr>
      <tr>
         <td>TargetRadius #</td>
         <td>Sets radius of a circle around your target to # (omit or set to 0)</td>
      </tr>
      <tr>
         <td>Timer</td>
         <td>Displays Timer objects on the map</td>
      </tr>
      <tr>
         <td>Trap</td>
         <td>Displays trap objects on the map</td>
      </tr>
      <tr>
         <td>Trigger</td>
         <td>Displays hidden triggers/traps</td>
      </tr>
      <tr>
         <td>Untargetable</td>
         <td>Displays untargettable spawns on the map</td>
      </tr>
      <tr>
         <td>Vector</td>
         <td>Displays heading vectors</td>
      </tr>
   </tbody>
</table>
<br>
The color R# B# G# option is used for npcs/pcs/triggers etc that are displayed on the map.<br><br>
When using the Custom option, you can use the same spawn search options available in MacroQuest2 to select spawns
for display, such as ${Spawn[searchfilter]} where searchfilter is the same syntax as that used in /target.<br><br>
<span class="txtbold">Examples</span>
<blockquote>
/mapfilter Ground<br>
Toggles ground spawns on or off<br><br>
/mapfilter custom npc range 40 65<br>
Displays all npcs of level range 40 to 65<br><br>
/mapfilter custom npc range 60 65 radius 50<br>
Displays all npcs of level 60 to 65 within a radius of 50<br><br>
/mapfilter custom npc range 60 65 radius 50<br>
Displays all npcs of level 60 to 65 within a radius of 50<br><br>
/mapfilter Trigger color 200 200 0<br>
Sets the color of Triggers<br><br>
<span class="txtbold">Note</span>: The use of custom is a one time event, it is not persistent.<br><br>
/maphide "spawnname" [reset]<br>
command to hide spawnname from the map. Hidden spawns are in effect until the mapped spawns are re-generated
(such as changing some map filters)<br><br>
/maphide reset<br>
Re-generates the spawn list.<br><br>
/maphide npc range 1-39<br>
Hides all spawns level 39 and below<br><br>
</blockquote>
/mapnames normal | target options<br>
You have the option of using the /mapnames command to set the way real spawn names are displayed for a) your current
target, or b) normally.. You can set up a custom scheme using special "%" codes made up just for this.<br><br>
Here are a few examples for explanation
<blockquote>
/mapnames normal [%l %R %C] %N
/mapnames target [%l %R %C] %N (%x, %y, %z)
</blockquote>
The command takes a parameter specifying normal/target, and then the custom string. The plugin will replace
the %l %r %c %N stuff with a piece of information. Each code is CASE SENSITIVE and exactly one character in length.
It is important to note that names are NOT updated continually, except for your target if the target map filter is on.
In testing the system was approximately 4 times as slow if all names were updated continually.<br><br>
Here are the existing % codes right now; more can be added later:<br>
n - "Decorated" name like "a_coyote34"<br>
N - "Cleaned up" name like "a coyote"<br>
h - Current health %<br>
i - SpawnID<br>
x - X coordinate<br>
y - Y coordinate<br>
z - Z coordinate<br>
R - Race full name - lower case "r" is reserved for race 3-letter code<br>
C - Class full name - lower case "c" is reserved for class 3-letter code<br>
l - Level<br>
% - shows a % sign (so if you want your health display to show "100%" you would use %h%%)<br><br>
/mapshow "spawnname" [reset]<br>
command to explicitly show spawnname on the map. Only in effect until the mapped spawns are re-generated (same as maphide).<br><br>
<span class="txtbold">Top Level Objects</span>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>spawn MapSpawn</td>
         <td>Object that is created when your cursor hovers on a spawn on the map</td>
      </tr>
   </tbody>
</table>
<br>
<span class="txtbold">Example</span>
<blockquote>
${MapSpawn.ID}
</blockquote>
<a name="mq2telnet" id="mq2telnet"></a>
<span class="txtbold">MQ2Telnet plugin</span><br><br>
Telnet Server<br><br>
<span class="txtbold">Enabling</span><br>
You must enable the telnet server in macroquest.ini's [Telnet Server] section.
<blockquote>
Set Enabled=1 and set a valid Port=###
</blockquote>
Also, please set a "Welcome=message" and definitely a private "Password=junk"<br><br>
Using telnet<br>
Use a real telnet client. (Putty works well for this)<br><br>
Connect to the system running EQ/MQ using the port you have in your ini.<br>
You should see your Welcome message and a password prompt. (Enter it ;)<br><br>
Anything you type into the telnet session will be sent to the client and executed directly (like a macro statement)<br><br>
Any chat output will be sent to your telnet session.<br><br>
<span class="txtbold">Slash Commands</span><br><br>
/telnet<br>
Displays a list of all remote IP addresses for open telnet sessions.<br><br>
<span class="txtbold">Ending</span><br>
Close the telnet client, MacroQuest2 will clean up when it notices the socket is gone.<br><br>
Telnet plugin ini<br><br>
To disable telnet capability you set port=0 under [Telnet Server]<br><br>
You can configure the telnet plugin to allow single user or multiple user access.<br><br>
For single person access to your character via telnet, set LocalOnly=1 under [Telnet Server]<br><br>
For multiple user access you would have entries under [Users] for each person allowed access. You must make
an entry of username=password for each person. LocalOnly must also be set to 0.<br><br>
MQ2Telnet ini snippet
<blockquote>
;**********************************************************************<br>
; for use with the telnet server plugin -- mq2telnet<br>
;**********************************************************************<br>
[Telnet Server]<br>
; port = 0 off, else put the port number here<br>
Port=6669<br>
; localonly boolean -- supposedly does a get peer name to compare address<br>
; but you must use the hostname not 127.0.0.1 or localhost when connecting<br>
LocalOnly=0<br>
Welcome=YAY!!! ya made it!!! n00b!<br>
LoginPrompt=login:<br>
PasswordPrompt=password:<br>
[Users]<br>
;username=password<br>
wassup=ubahmanualguy<br>
twister=god
</blockquote>
setting port=0 will disable the Telnet capability<br>
setting LocalOnly=1 will prevent others from telnet access<br><br>
<a name="createplugin" id="createplugin"></a>
1. To Create a plugin, you need to use the command line program mkplugin.exe, which exists in the main directory of the MacroQuest2
source files.<br><br>
<blockquote>
<span class="txtbold">Example</span><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;mkplugin myplugin<br><br>
This will create a plugin named "MQ2Myplugin"<br><br>
If you don't know how to use DOS, you should do this:<br><br>
&nbsp;&nbsp;&nbsp;Start->Run: c:\mq2\mkplugin myplugin<br><br>
Replacing c:\mq2\ with the path to where you have the MacroQuest2 source files at.
</blockquote>
2. Add the new plugin to your Visual Studio workspace (Visual C++ is part of Visual Studio, so this is the same as adding it to
your Visual C++ workspace).<br><br>
&nbsp;&nbsp;&nbsp;In VS .NET, go to File->Add Project->Existing project, and select the MQ2Myplugin.vcproj.<br><br>
&nbsp;&nbsp;&nbsp;In VS 6, Go to Projects->Insert Projects into workspace, then select MQ2Myplugin.dsp.<br><br>
3. Open the MQ2Myplugin.cpp file. Select all of it, and replace it with the code you're copying<br><br>
4. Compile the plugin. If you cant figure this step out then you need to seek help elsewhere<br><br>
5. Load the plugin.<br><br>
<span class="tab">Example: /plugin mq2myplugin</span><br><br>
<a name="appendixa" id="appendixa"></a>
<span class="txtbold">Appendix A</span>: Operators<br><br>
<span class="txtbold">Numeric Operators</span>
<table width="30%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>+</td>
         <td>Addition</td>
      </tr>
      <tr>
         <td>-</td>
         <td>Subtraction</td>
      </tr>
      <tr>
         <td>/</td>
         <td>Division</td>
      </tr>
      <tr>
         <td>\</td>
         <td>Integer Division</td>
      </tr>
      <tr>
         <td>*</td>
         <td>Multiplication</td>
      </tr>
      <tr>
         <td>%</td>
         <td>mod</td>
      </tr>
      <tr>
         <td>^</td>
         <td>Exponent</td>
      </tr>
      <tr>
         <td>&#38;</td>
         <td>Bitwise AND</td>
      </tr>
      <tr>
         <td>|</td>
         <td>Bitwise OR</td>
      </tr>
      <tr>
         <td>~</td>
         <td>Bitwise NOT</td>
      </tr>
      <tr>
         <td>^^</td>
         <td>XOR</td>
      </tr>
      <tr>
         <td>&lt;&lt;</td>
         <td>Bitwise shift left</td>
      </tr>
      <tr>
         <td>&gt;&gt;</td>
         <td>Bitwise shift right</td>
      </tr>
   </tbody>
</table>
<br>
<span class="txtbold">Logical Operators</span>
<table width="30%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>==</td>
         <td>Equal to</td>
      </tr>
      <tr>
         <td>!=</td>
         <td>Not equal to</td>
      </tr>
      <tr>
         <td>&gt;</td>
         <td>Greater than</td>
      </tr>
      <tr>
         <td>&lt;</td>
         <td>Less than</td>
      </tr>
      <tr>
         <td></td>
         <td></td>
      </tr>
      <tr>
         <td>&gt;=</td>
         <td>Greater than or equal to</td>
      </tr>
      <tr>
         <td>&lt;=</td>
         <td>Less than or equal to</td>
      </tr>
      <tr>
         <td>&#38;&#38;</td>
         <td>AND</td>
      </tr>
      <tr>
         <td>|&nbsp;|</td>
         <td>OR</td>
      </tr>
      <tr>
         <td>!</td>
         <td>NOT</td>
      </tr>
   </tbody>
</table>
<br><br>
<a name="appendixb" id="appendixb"></a>
<span class="txtbold">Appendix B</span>: /keypress list<br>
<table style="border-collapse: collapse;" cellspacing="1" cellpadding="1" width="90%" border="1">
   <tbody>
      <tr>
         <td>Esc</td>
         <td bgcolor="#000033"></td>
         <td>F1</td>
         <td>F2</td>
         <td>F3</td>
         <td>F4</td>
         <td>F5</td>
         <td>F6</td>
         <td>F7</td>
         <td>F8</td>
         <td>F9</td>
         <td>F10</td>
         <td>F11</td>
         <td>F12</td>
      </tr>
      <tr>
         <td>`</td>
         <td>1</td>
         <td>2</td>
         <td>3</td>
         <td>4</td>
         <td>5</td>
         <td>6</td>
         <td>7</td>
         <td>8</td>
         <td>9</td>
         <td>0</td>
         <td>-</td>
         <td>=</td>
         <td>Backspace</td>
      </tr>
      <tr>
         <td>Tab</td>
         <td>Q</td>
         <td>W</td>
         <td>E</td>
         <td>R</td>
         <td>T</td>
         <td>Y</td>
         <td>U</td>
         <td>I</td>
         <td>O</td>
         <td>P</td>
         <td>[</td>
         <td>]</td>
         <td>\</td>
      </tr>
      <tr>
         <td>Caps_Lock</td>
         <td>A</td>
         <td>S</td>
         <td>D</td>
         <td>F</td>
         <td>G</td>
         <td>H</td>
         <td>J</td>
         <td>K</td>
         <td>L</td>
         <td>;</td>
         <td>'</td>
         <td colspan="2">Enter</td>
      </tr>
      <tr>
         <td colspan="2">Shift</td>
         <td>Z</td>
         <td>X</td>
         <td>C</td>
         <td>V</td>
         <td>B</td>
         <td>N</td>
         <td>M</td>
         <td>,</td>
         <td>.</td>
         <td>/</td>
         <td colspan="2">Right_Shift</td>
      </tr>
      <tr>
         <td colspan="2">Ctrl</td>
         <td colspan="2">Alt</td>
         <td colspan="6">Space</td>
         <td colspan="2">Right_Alt</td>
         <td colspan="2">Right_Ctrl</td>
      </tr>
   </tbody>
</table><br><br>
<table style="border-collapse: collapse;" cellspacing="1" cellpadding="1" width="90%" border="1">
   <tbody>
      <tr>
         <td>Prnt_Scrn</td>
         <td>Scroll_Lock</td>
         <td bgcolor="#000033"></td>
         <td bgcolor="#000033"></td>
         <td bgcolor="#000033"></td>
         <td bgcolor="#000033"></td>
         <td bgcolor="#000033"></td>
         <td bgcolor="#000033"></td>
      </tr>
      <tr>
         <td bgcolor="#808080"></td>
         <td bgcolor="#808080"></td>
         <td bgcolor="#000033"></td>
         <td bgcolor="#000033"></td>
         <td bgcolor="#000033"></td>
         <td bgcolor="#000033"></td>
         <td bgcolor="#000033"></td>
         <td bgcolor="#000033"></td>
      </tr>
      <tr>
         <td>Insert</td>
         <td>Home</td>
         <td>Page_Up</td>
         <td bgcolor="#000033"></td>
         <td>Num_Lock</td>
         <td>Num_/</td>
         <td>Num_*</td>
         <td>Num_-</td>
      </tr>
      <tr>
         <td>Delete</td>
         <td>End</td>
         <td>Page_Down</td>
         <td bgcolor="#000033"></td>
         <td>Num_7</td>
         <td>Num_8</td>
         <td>Num_9</td>
         <td rowspan="2">Num_+</td>
      </tr>
      <tr>
         <td bgcolor="#000033"></td>
         <td bgcolor="#000033"></td>
         <td bgcolor="#000033"></td>
         <td bgcolor="#000033"></td>
         <td>Num_4</td>
         <td>Num_5</td>
         <td>Num_6</td>
      </tr>
      <tr>
         <td bgcolor="#000033"></td>
         <td>Up</td>
         <td bgcolor="#000033"></td>
         <td width="20" bgcolor="#000033"></td>
         <td>Num_1</td>
         <td>Num_2</td>
         <td>Num_3</td>
         <td rowspan="2">Num_Enter</td>
      </tr>
      <tr>
         <td>Left</td>
         <td>Down</td>
         <td>Right</td>
         <td bgcolor="#000033"></td>
         <td colspan="2">Num_0</td>
         <td>Num_Del</td>
      </tr>
   </tbody>
</table>
<br><br>
<span class="txtbold">Note</span>: keymap names will be added soon. Until then you can get them using the /bind command.
The use of the keymap names requires the use of the /keypress command.
<br><br>
<a name="appendixc" id="appendixc"></a>
<span class="txtbold">Appendix C</span>: Skills List<br><br>
<table id="TableSkills" cellspacing="0" cellpadding="0" width="90%" border="0">
   <tbody>
      <tr>
         <td>1H Blunt</td>
         <td>1H Slashing</td>
         <td>2H Blunt</td>
      </tr>
      <tr>
         <td>2H Slashing</td>
         <td>Abjuration</td>
         <td>Alteration</td>
      </tr>
      <tr>
         <td>Apply Poison</td>
         <td>Archery</td>
         <td>Backstab</td>
      </tr>
      <tr>
         <td>Bind Wound</td>
         <td>Bash</td>
         <td>Block</td>
      </tr>
      <tr>
         <td>Brass Instruments</td>
         <td>Channeling</td>
         <td>Conjuration</td>
      </tr>
      <tr>
         <td>Defense</td>
         <td>Disarm</td>
         <td>Disarm Traps</td>
      </tr>
      <tr>
         <td>Divination</td>
         <td>Dodge</td>
         <td>Double Attack</td>
      </tr>
      <tr>
         <td>Dragon Punch</td>
         <td>Duel Wield</td>
         <td>Eagle Strike</td>
      </tr>
      <tr>
         <td>Evocation</td>
         <td>Feign Death</td>
         <td>Flying Kick</td>
      </tr>
      <tr>
         <td>Forage</td>
         <td>Hand To Hand</td>
         <td>Hide</td>
      </tr>
      <tr>
         <td>Kick</td>
         <td>Meditate</td>
         <td>Mend</td>
      </tr>
      <tr>
         <td>Offense</td>
         <td>Parry</td>
         <td>Pick Lock</td>
      </tr>
      <tr>
         <td>Piercing</td>
         <td>Riposte</td>
         <td>Round Kick</td>
      </tr>
      <tr>
         <td>Safe Fall</td>
         <td>Sense Heading</td>
         <td>Sing</td>
      </tr>
      <tr>
         <td>Sneak</td>
         <td>Specialize Abjure</td>
         <td>Specialize Alteration</td>
      </tr>
      <tr>
         <td>Specialize Conjuration</td>
         <td>Specialize Divination</td>
         <td>Specialize Evocation</td>
      </tr>
      <tr>
         <td>Pick Pockets</td>
         <td>Stringed Instruments</td>
         <td>Throwing</td>
      </tr>
      <tr>
         <td>Tiger Claw</td>
         <td>Tracking</td>
         <td>Wind Instruments</td>
      </tr>
      <tr>
         <td>Fishing</td>
         <td>Make Poison</td>
         <td>Tinkering</td>
      </tr>
      <tr>
         <td>Research</td>
         <td>Alchemy</td>
         <td>Baking</td>
      </tr>
      <tr>
         <td>Tailoring</td>
         <td>Sense Traps</td>
         <td>Blacksmithing</td>
      </tr>
      <tr>
         <td>Fletching</td>
         <td>Brewing</td>
         <td>Alcohol Tolerance</td>
      </tr>
      <tr>
         <td>Begging</td>
         <td>Jewelry Making</td>
         <td>Pottery</td>
      </tr>
      <tr>
         <td>Percussion Instruments</td>
         <td>Intimidation</td>
         <td>Berserking</td>
      </tr>
      <tr>
         <td>Taunt</td>
         <td>Slam</td>
         <td></td>
      </tr>
   </tbody>
</table>
<br><br>
<a name="appendixd" id="appendixd"></a>
<span class="txtbold">Appendix D</span>: Containers List<br><br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>Alchemy</td>
         <td>Baking</td>
         <td>Blacksmithing</td>
      </tr>
      <tr>
         <td>Brewing</td>
         <td>Firing</td>
         <td>Fishing</td>
      </tr>
      <tr>
         <td>Fletching</td>
         <td>Fletching WoodElf</td>
         <td>Jewelry Making</td>
      </tr>
      <tr>
         <td>Make Poison</td>
         <td>Medicine</td>
         <td>Quest</td>
      </tr>
      <tr>
         <td>Merchant</td>
         <td>Mixing</td>
         <td>Pottery</td>
      </tr>
      <tr>
         <td>Regular</td>
         <td>Research ???</td>
         <td>Research ENC</td>
      </tr>
      <tr>
         <td>Research MAG</td>
         <td>Research NEC</td>
         <td>Research WIZ</td>
      </tr>
      <tr>
         <td>Research Practice</td>
         <td>Tailoring</td>
         <td>Tailoring Halfling</td>
      </tr>
      <tr>
         <td>Tinkering</td>
         <td></td>
         <td></td>
      </tr>
   </tbody>
</table>
<br>
<a name="appendixe" id="appendixe"></a>
<span class="txtbold">Appendix E</span>: Slot Names<br><br>
<span class="txtbold">Equipment Slots</span> (0-22)
<table width="20%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>0</td>
         <td>charm</td>
      </tr>
      <tr>
         <td>1</td>
         <td>leftear</td>
      </tr>
      <tr>
         <td>2</td>
         <td>head</td>
      </tr>
      <tr>
         <td>3</td>
         <td>face</td>
      </tr>
      <tr>
         <td>4</td>
         <td>rightear</td>
      </tr>
      <tr>
         <td>5</td>
         <td>neck</td>
      </tr>
      <tr>
         <td>6</td>
         <td>shoulder</td>
      </tr>
      <tr>
         <td>7</td>
         <td>arms</td>
      </tr>
      <tr>
         <td>8</td>
         <td>back</td>
      </tr>
      <tr>
         <td>9</td>
         <td>leftwrist</td>
      </tr>
      <tr>
         <td>10</td>
         <td>rightwrist</td>
      </tr>
      <tr>
         <td>11</td>
         <td>ranged</td>
      </tr>
      <tr>
         <td>12</td>
         <td>hands</td>
      </tr>
      <tr>
         <td>13</td>
         <td>mainhand</td>
      </tr>
      <tr>
         <td>14</td>
         <td>offhand</td>
      </tr>
      <tr>
         <td>15</td>
         <td>leftfinger</td>
      </tr>
      <tr>
         <td>16</td>
         <td>rightfinger</td>
      </tr>
      <tr>
         <td>17</td>
         <td>chest</td>
      </tr>
      <tr>
         <td>18</td>
         <td>legs</td>
      </tr>
      <tr>
         <td>19</td>
         <td>feet</td>
      </tr>
      <tr>
         <td>20</td>
         <td>waist</td>
      </tr>
	  <tr>
	     <td>21</td>
		 <td>powersource</td>
	  </tr>
      <tr>
         <td>22</td>
         <td>ammo</td>
      </tr>
   </tbody>
</table>
<br>
<span class="txtbold">Inventory Slots</span>
<table width="50%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>pack1 - pack8</td>
         <td>Your pack slots</td>
      </tr>
      <tr>
         <td>23-30</td>
         <td>character general inventory slots</td>
      </tr>
      <tr>
         <td>bank1 - bank16</td>
         <td>Character bank slots</td>
      </tr>
      <tr>
         <td>sharedbank1 - sharedbank2</td>
         <td>Shared bank pack slots</td>
      </tr>
   </tbody>
</table>
<br>		
<span class="txtbold">Others</span>
<table width="50%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>trade1 - trade8</td>
         <td>Trade Window</td>
      </tr>
      <tr>
         <td>loot1 - loot31</td>
         <td>Corpse window</td>
      </tr>
      <tr>
         <td>enviro1 - enviro10</td>
         <td>Environmental containers (forge, kiln, etc...)</td>
      </tr>
      <tr>
         <td>merchant1 - merchant80</td>
         <td>Merchant window</td>
      </tr>
      <tr>
         <td>bazaar1 - bazaar80</td>
         <td>Bazaar search window</td>
      </tr>
      <tr>
         <td>inspect1 - inspect31</td>
         <td>Inspect window</td>
      </tr>
   </tbody>
</table>
<br>
<a name="spawnsearch" id="spawnsearch"></a>
<span class="txtbold">Appendix F</span>: Spawn Search filters<br><br>
The following filters are allowed in using spawn searches with any command using a spawn search:<br><br>
pc<br>
npc<br>
merchant<br>
pet<br>
nopet<br>
corpse<br>
trigger<br>
untargetable<br>
trap<br>
check<br>
timer<br>
any<br>
next<br>
prev<br>
lfg<br>
gm<br>
group<br>
trader<br>
range <em>lowerlevel</em> <em>upperlevel</em><br>
loc <em>floatX</em> <em>floatY</em><br>
id <em>intid</em><br>
radius <em>floatR</em><br>
body <em>bodytypename</em><br>
class <em>classname</em><br>
race <em>racename</em><br>
light <em>lightname</em><br>
GUILD<br>
guild <em>guildname</em><br>
alert <em>n</em><br>
noalert <em>n</em><br>
notnearalert <em>n</em><br>
nearalert <em>n</em><br>
zradius <em>floatR</em><br>
notid <em>n</em><br>
nopcnear <em>floatR</em><br>
named <em>level</em><br><br>
Aura<br><br>
<a name="windowslist" id="windowslist"></a>
<span class="txtbold">Appendix G</span>: Windows List<br><br>
<table width="90%" border="1" cellpadding="2" cellspacing="0">
   <tbody>
      <tr>
         <td>AAW_ArchetypePage</td>
         <td>COMBW_ContainerArea</td>
         <td>InventoryWindow</td>
         <td>PlayerWindow</td>
         <td>TributeMasterWnd</td>
      </tr>
      <tr>
         <td>AAW_ClassPage</td>
         <td>COMBW_FavoritesArea</td>
         <td>IW_CharacterView</td>
         <td>PvpLeaderboardWnd</td>
         <td>VideoModesWindow</td>
      </tr>
      <tr>
         <td>AAW_GeneralPage</td>
         <td>COMBW_FlagsArea</td>
         <td>JournalCatWnd</td>
         <td>PvPMerchantWnd</td>
         <td>TributeBenefitWnd</td>
      </tr>
      <tr>
         <td>AAW_Page4</td>
         <td>COMBW_LeftSideArea</td>
         <td>JournalNPCWnd</td>
         <td>PvPStatsWnd</td>
      </tr>
      <tr>
         <td>AAW_Page5</td>
         <td>COMBW_RecipeListArea</td>
         <td>KnowledgeBasePage</td>
         <td>QuantityWnd</td>
      </tr>
      <tr>
         <td>AAW_Page6</td>
         <td>COMBW_RightSideArea</td>
         <td>LargeDialogWindow</td>
         <td>RAID_MemberPage</td>
      </tr>
      <tr>
         <td>AAWindow</td>
         <td>COMBW_SearchArea</td>
         <td>LeadershipWindow</td>
         <td>RAID_NotePage</td>
      </tr>
      <tr>
         <td>ActionsAbilitiesPage</td>
         <td>CompassWindow</td>
         <td>LEW_GroupPage</td>
         <td>RaidOptionsWindow</td>
      </tr>
      <tr>
         <td>ActionsCombatPage</td>
         <td>CursorAttachment</td>
         <td>LEW_RaidPage</td>
         <td>RaidWindow</td>
      </tr>
      <tr>
         <td>ActionsMainPage</td>
         <td>DynamicZoneWnd</td>
         <td>LoadskinWnd</td>
         <td>SelectorWindow</td>
      </tr>
      <tr>
         <td>ActionsSocialsPage</td>
         <td>DZLeaderSection</td>
         <td>LootWnd</td>
         <td>ShortDurationBuffWindow</td>
      </tr>
      <tr>
         <td>ActionsWindow</td>
         <td>EditLabelWnd</td>
         <td>LW_LootInvWnd</td>
         <td>SkillsSelectWindow</td>
      </tr>
      <tr>
         <td>ActorParticlesPage</td>
         <td>EnvironmentParticlesPage</td>
         <td>MapToolbarWnd</td>
         <td>SkillsWindow</td>
      </tr>
      <tr>
         <td>AdventureLeaderboardWnd</td>
         <td>FacePickWindow</td>
         <td>MapViewWnd</td>
         <td>SocialEditWnd</td>
      </tr>
      <tr>
         <td>AdventureMerchantWnd</td>
         <td>FeedbackWindow</td>
         <td>MerchantWnd</td>
         <td>SpellBookWnd</td>
      </tr>
      <tr>
         <td>AdventureRequestWnd</td>
         <td>FileSelectionWnd</td>
         <td>MusicPlayerWnd</td>
         <td>SpellParticlesPage</td>
      </tr>
      <tr>
         <td>AdventureStatsWnd</td>
         <td>FindLocationWnd</td>
         <td>MVW_MapRenderArea</td>
         <td>StoryWnd</td>
      </tr>
      <tr>
         <td>AlarmWnd</td>
         <td>Friends_TimerSlider0</td>
         <td>MW_MerchantSlotsWnd</td>
         <td>SystemInfoDialogBox</td>
      </tr>
      <tr>
         <td>BazaarSearchWnd</td>
         <td>FriendsWindow</td>
         <td>MW_SlotsWndThree</td>
         <td>TargetOfTargetWindow</td>
      </tr>
      <tr>
         <td>BazaarWnd</td>
         <td>FW_FriendsPage</td>
         <td>MW_SlotsWndTwo</td>
         <td>TargetWindow</td>
      </tr>
      <tr>
         <td>BigBankWnd</td>
         <td>FW_IgnorePage</td>
         <td>NewTicketPage</td>
         <td>TBW_LabelWnd</td>
      </tr>
      <tr>
         <td>BodyTintWnd</td>
         <td>GemsGameWnd</td>
         <td>NoteWindow</td>
         <td>TBW_Layout</td>
      </tr>
      <tr>
         <td>BookWindow</td>
         <td>GGW_GameView</td>
         <td>OpenTicketsPage</td>
         <td>TextEntryWnd</td>
      </tr>
      <tr>
         <td>BreathWindow</td>
         <td>GiveWnd</td>
         <td>OptionsChatPage</td>
         <td>TicketCommentWindow</td>
      </tr>
      <tr>
         <td>BuffWindow</td>
         <td>GroupInfoPage</td>
         <td>OptionsColorPage</td>
         <td>TicketWindow</td>
      </tr>
      <tr>
         <td>BugReportWindow</td>
         <td>GroupListPage</td>
         <td>OptionsDisplayPage</td>
         <td>TipWindow</td>
      </tr>
      <tr>
         <td>BZW_BazaarSlotsWnd</td>
         <td>GroupSearchFiltersWnd</td>
         <td>OptionsGeneralPage</td>
         <td>TMW_ActiveBenefitArea</td>
      </tr>
      <tr>
         <td>CastingWindow</td>
         <td>GroupSearchWnd</td>
         <td>OptionsKeyboardPage</td>
         <td>TMW_BenefitMasterArea</td>
      </tr>
      <tr>
         <td>CastSpellWnd</td>
         <td>GroupWindow</td>
         <td>OptionsMousePage</td>
         <td>TMW_DonateWnd</td>
      </tr>
      <tr>
         <td>CJNPC_Layout</td>
         <td>GT_MemberPage</td>
         <td>OptionsWindow</td>
         <td>TMW_LabelWnd</td>
      </tr>
      <tr>
         <td>ColorPickerWnd</td>
         <td>GT_NotePage</td>
         <td>PetInfoWindow</td>
         <td>TMW_Layout</td>
      </tr>
      <tr>
         <td>CombatAbilityWnd</td>
         <td>GuildManagementWnd</td>
         <td>PIW_BuffWindow</td>
         <td>TrackingWnd</td>
      </tr>
      <tr>
         <td>CombatSkillSelectWnd</td>
         <td>HelpWindow</td>
         <td>PlayerInfoPage</td>
         <td>TradeskillWnd</td>
      </tr>
      <tr>
         <td>COMBW_CombineArea</td>
         <td>HotButtonWnd</td>
         <td>PlayerListPage</td>
         <td>TradeWnd</td>
      </tr>
      <tr>
         <td>COMBW_ComponentArea</td>
         <td>InspectWnd</td>
         <td>PlayerNotesWindow</td>
         <td>TrainWindow</td>
      </tr>
   </tbody>
</table>
<br>
<a name="mq2faq" id="mq2faq"></a>
<span class="txtbold">MacroQuest2 FAQ</span><br><br>
Q: What is this error: fatal error C1083: Cannot open include file: 'MQ2Auth0.h': No such file or directory<br>
A: Run mq2auth.exe in the location it was extracted to<br><br>
Q: I dont see any output when I run a macro<br>
A: /filter macros all<br><br>
Q: On patchday or a few days after a patch, EQ crashes when I try to use MQ2<br>
A: Wait until a new release of MQ2 is announced, every time eqgame.exe is patched, MQ2 needs a "patch"<br><br>
Q: I get this: MQ2Main fatal error LNK1279: invalid or corrupt file: file contains invalid .sxdata contributions<br>
A: Before doing the MQ2Main build:
<blockquote>
1. Select Build->Clean
2. Build->Batch Build and select only the Release versions
</blockquote>
Q: fatal error C1083: Cannot open include file: '..\Dxsdk81\include\dinput.h': No such file or directory<br>
A: Extract the MQ2-Latest.zip in its original state. You need to unzip the archive using include directory names.
<blockquote>
You should end up with this sort of directory tree:<br><br>
c:\macroquest\dx81sdk<br>
c:\macroquest\mq2main<br>
c:\macroquest\release
</blockquote>
Q: What files can I delete in the Release folder after compiling MQ2?<br>
A: Any file with extensions other than dll, exe, ini, cfg, and .txt<br><br>
Q: Why can't I find the .dll files in the Release folder after I compile?<br>
A: Make sure you do not have "hide sys files" set in your folder options.<br><br>
Q: How do I create macro's that work on the non-US servers? My macro's require text with umlauts and accents.<br>
A: Use the correct spelling with accents, umlauts and such in your corresponding language and save the macro as UTF-8 instead of ANSI.
<a name="mq2history" id="mq2history"></a>
31 Mar 2006 by dkaa<br>
- Added stuff to item type<br>
    Classes<br>
    Class<br>
    Races<br>
    Race<br>
    Deities<br>
    Deity<br>
    RequiredLevel<br><br>
- Added DisplayItem TLO as item type to mq2itemdisplay<br>
- Added /ireset to reset DisplayItem ID<br>
<br>
22 Mar 2006 by dkaa<br>
- Added a message box for plugin load failure<br>
<br>
29 Jan 2006 by rswiders<br>
- Added global bool for telling if you are zoning or not (gbInZone)<br>
- Added .GroupSize<br>
- Added LoS parameter to spawn searches<br>
<br>
19 December 2005 by rswiders<br>
- Added item timers to potion belt window tooltips<br>
- Added Item.StackSize, .Stacks, .StackCount, .FreeStack, .TimerReady<br>
- Added class based cfg file loading upon entering game<br>
</body>
</html>
