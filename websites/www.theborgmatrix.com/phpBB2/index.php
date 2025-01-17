<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">

<link rel="top" href="./index.php" title="theborgmatrix.com Forum Index" />
<link rel="search" href="./search.php" title="Search" />
<link rel="help" href="./faq.php" title="FAQ" />
<link rel="author" href="./memberlist.php" title="Memberlist" />

<title>theborgmatrix.com :: Index</title>
<!-- link rel="stylesheet" href="templates/subSilver/subSilver.css" type="text/css" -->
<style type="text/css">
<!--
/*
  The original subSilver Theme for phpBB version 2+
  Created by subBlue design
  http://www.subBlue.com

  NOTE: These CSS definitions are stored within the main page body so that you can use the phpBB2
  theme administration centre. When you have finalised your style you could cut the final CSS code
  and place it in an external file, deleting this section to save bandwidth.
*/

/* General page style. The scroll bar colours only visible in IE5.5+ */
body {
	background-color: #EfEfFF;
	scrollbar-face-color: #E4E4E;
	scrollbar-highlight-color: #FEFFFF;
	scrollbar-shadow-color: #E4E4E;
	scrollbar-3dlight-color: #E4E4E;
	scrollbar-arrow-color:  #000000;
	scrollbar-track-color: #E4E4E;
	scrollbar-darkshadow-color: #001100;
}

/* General font families for common tags */
font,th,td,p { font-family: Verdana, Arial, Helvetica, sans-serif }
a:link,a:active,a:visited { color : #000000; }
a:hover		{ text-decoration: underline; color : #555555; }
hr	{ height: 0px; border: solid #E4E4E 0px; border-top-width: 1px;}

/* This is the border line & background colour round the entire page */
.bodyline	{ background-color: #FEFFFF; border: 1px #001100 solid; }

/* This is the outline round the main forum tables */
.forumline	{ background-color: #FEFFFF; border: 2px #002200 solid; }

/* Main table cell colours and backgrounds */
td.row1	{ background-color: #E4E4E; }
td.row2	{ background-color: #E4E4E; }
td.row3	{ background-color: #E4E4E; }

/*
  This is for the table cell above the Topics, Post & Last posts on the index.php page
  By default this is the fading out gradiated silver background.
  However, you could replace this with a bitmap specific for each forum
*/
td.rowpic {
		background-color: #FEFFFF;
		background-image: url(templates/subSilver/images/);
		background-repeat: repeat-y;
}

/* Header cells - the blue and silver gradient backgrounds */
th	{
	color: #002200; font-size: 13px; font-weight : bold;
	background-color: #006600; height: 25px;
}

td.cat,td.catHead,td.catSides,td.catLeft,td.catRight,td.catBottom {
			background-image: url(templates/subSilver/images/);
			background-color:#E4E4E; border: #000000; border-style: solid; height: 28px;
}

/*
  Setting additional nice inner borders for the main table cells.
  The names indicate which sides the border will be on.
  Don't worry if you don't understand this, just ignore it :-)
*/
td.cat,td.catHead,td.catBottom {
	height: 29px;
	border-width: 0px 0px 0px 0px;
}
th.thHead,th.thSides,th.thTop,th.thLeft,th.thRight,th.thBottom,th.thCornerL,th.thCornerR {
	font-weight: bold; border: #FEFFFF; border-style: solid; height: 28px;
}
td.row3Right,td.spaceRow {
	background-color: #E4E4E; border: #000000; border-style: solid;
}

th.thHead,td.catHead { background-color: #006600; font-size: 14 px; border-width: 1px 1px 0px 1px; }
th.thSides,td.catSides,td.spaceRow	 { background-color: #006600; border-width: 0px 1px 0px 1px; }
th.thRight,td.catRight,td.row3Right	 { background-color: #006600; border-width: 0px 1px 0px 0px; }
th.thLeft,td.catLeft	  { background-color: #006600; border-width: 0px 0px 0px 1px; }
th.thBottom,td.catBottom  { background-color: #006600; border-width: 0px 1px 1px 1px; }
th.thTop	 { background-color: #006600; border-width: 1px 0px 0px 0px; }
th.thCornerL { background-color: #006600; border-width: 1px 0px 0px 1px; }
th.thCornerR { background-color: #006600; border-width: 1px 1px 0px 0px; }

/* The largest text used in the index page title and toptic title etc. */
.maintitle	{
	font-weight: bold; font-size: 22px; font-family: "Trebuchet MS",Verdana, Arial, Helvetica, sans-serif;
	text-decoration: none; line-height : 120%; color : #000000;
}

/* General text */
.gen { font-size : 14px; }
.genmed { font-size : 13px; }
.gensmall { font-size : 12px; }
.gen,.genmed,.gensmall { color : #000000; }
a.gen,a.genmed,a.gensmall { color: #000000; text-decoration: none; }
a.gen:hover,a.genmed:hover,a.gensmall:hover	{ color: #555555; text-decoration: underline; }

/* The register, login, search etc links at the top of the page */
.mainmenu		{ font-size : 13px; color : #000000 }
a.mainmenu		{ text-decoration: none; color : #000000;  }
a.mainmenu:hover{ text-decoration: underline; color : #555555; }

/* Forum category titles */
.cattitle		{ font-weight: bold; font-size: 14px ; letter-spacing: 1px; color : #000000}
a.cattitle		{ text-decoration: none; color : #000000; }
a.cattitle:hover{ text-decoration: underline; }

/* Forum title: Text and link to the forums used in: index.php */
.forumlink		{ font-weight: bold; font-size: 14px; color : #000000; }
a.forumlink 	{ text-decoration: none; color : #000000; }
a.forumlink:hover{ text-decoration: underline; color : #555555; }

/* Used for the navigation text, (Page 1,2,3 etc) and the navigation bar when in a forum */
.nav			{ font-weight: bold; font-size: 13px; color : #000000;}
a.nav			{ text-decoration: none; color : #000000; }
a.nav:hover		{ text-decoration: underline; }

/* titles for the topics: could specify viewed link colour too */
.topictitle,h1,h2	{ font-weight: bold; font-size: 13px; color : #000000; }
a.topictitle:link   { text-decoration: none; color : #000000; }
a.topictitle:visited { text-decoration: none; color : #777777; }
a.topictitle:hover	{ text-decoration: underline; color : #555555; }

/* Name of poster in viewmsg.php and viewtopic.php and other places */
.name			{ font-size : 13px; color : #000000;}

/* Location, number of posts, post date etc */
.postdetails		{ font-size : 12px; color : #000000; }

/* The content of the posts (body of text) */
.postbody { font-size : 14px; line-height: 18px}
a.postlink:link	{ text-decoration: none; color : #000000 }
a.postlink:visited { text-decoration: none; color : #777777; }
a.postlink:hover { text-decoration: underline; color : #555555}

/* Quote & Code blocks */
.code {
	font-family: Courier, 'Courier New', sans-serif; font-size: 13px; color: #ff0000;
	background-color: #FFF8C6; border: #E4E4E; border-style: solid;
	border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

.quote {
	font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #000000; line-height: 125%;
	background-color: #FFF8C6; border: #E4E4E; border-style: solid;
	border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

/* Copyright and bottom info */
.copyright		{ font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #000000; letter-spacing: -1px;}
a.copyright		{ color: #000000; text-decoration: none;}
a.copyright:hover { color: #000000; text-decoration: underline;}

/* Form elements */
input,textarea, select {
	color : #000000;
	font: normal 13px Verdana, Arial, Helvetica, sans-serif;
	border-color : #000000;
}

/* The text input fields background colour */
input.post, textarea.post, select {
	background-color : #FEFFFF;
}

input { text-indent : 2px; }

/* The buttons used for bbCode styling in message post */
input.button {
	background-color : #E4E4E;
	color : #000000;
	font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif;
}

/* The main submit button option */
input.mainoption {
	background-color : #FFF8C6;
	font-weight : bold;
}

/* None-bold submit button */
input.liteoption {
	background-color : #FFF8C6;
	font-weight : normal;
}

/* This is the line in the posting page which shows the rollover
  help line. This is actually a text box, but if set to be the same
  colour as the background no one will know ;)
*/
.helpline { background-color: #E4E4E; border-style: none; }

/* Import the fancy styles for IE only (NS4.x doesn't use the @import function) */
@import url("templates/subSilver/formIE.css");
-->
</style>

<link rel="stylesheet" href="../ltk/menu.css" />
<!--[if IE]>
<link rel="stylesheet" href="../ltk/menuie.css" />
<script type="text/javascript">
window.mlrunShim = true;
</script>
<![endif]-->
<script type="text/javascript" src="../ltk/topmenu.js">
</script>
</head>
<body bgcolor="#EfEfFF" text="#000000" link="#000000" vlink="#777777">

<a name="top"></a>

<table width="100%" cellspacing="0" cellpadding="10" border="0" align="center">
	<tr>
		<td class="bodyline"><table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td align="center" width="100%" valign="middle"><span class="maintitle">theborgmatrix.com</span><br /><span class="gen">Games, AI and Economics<br />&nbsp; </span>
				<table cellspacing="0" cellpadding="2" border="0">
					<tr>
						<td align="center" valign="top" nowrap="nowrap"><span class="mainmenu">&nbsp;<a href="faq.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_faq.gif" width="12" height="13" border="0" alt="FAQ" hspace="3" />FAQ</a>&nbsp; &nbsp;<a href="search.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_search.gif" width="12" height="13" border="0" alt="Search" hspace="3" />Search</a>&nbsp; &nbsp;<a href="memberlist.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_members.gif" width="12" height="13" border="0" alt="Memberlist" hspace="3" />Memberlist</a>&nbsp; &nbsp;<a href="groupcp.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_groups.gif" width="12" height="13" border="0" alt="Usergroups" hspace="3" />Usergroups</a>&nbsp;
						&nbsp;<a href="profile.php?mode=register" class="mainmenu"><img src="templates/subSilver/images/icon_mini_register.gif" width="12" height="13" border="0" alt="Register" hspace="3" />Register</a>&nbsp;
						</span></td>
					</tr>
					<tr>
						<td height="25" align="center" valign="top" nowrap="nowrap"><span class="mainmenu">&nbsp;<a href="profile.php?mode=editprofile" class="mainmenu"><img src="templates/subSilver/images/icon_mini_profile.gif" width="12" height="13" border="0" alt="Profile" hspace="3" />Profile</a>&nbsp; &nbsp;<a href="privmsg.php?folder=inbox" class="mainmenu"><img src="templates/subSilver/images/icon_mini_message.gif" width="12" height="13" border="0" alt="Log in to check your private messages" hspace="3" />Log in to check your private messages</a>&nbsp; &nbsp;<a href="login.php?redirect=index.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_login.gif" width="12" height="13" border="0" alt="Log in" hspace="3" />Log in</a>&nbsp;</span></td>
					</tr>
				</table></td>
				<TD>
				<div align="center"><script type="text/javascript"><!--
google_ad_client = "pub-7138831479577622";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text_image";
google_ad_channel = "";
google_color_border = "000000";
google_color_bg = "000000";
google_color_link = "FFFFFF";
google_color_text = "CCCCCC";
google_color_url = "999999";
google_ui_features = "rc:10";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div></TD>

			</tr>
		</table>

		<br />
<div class='mlmenu horizontal fade arrow greenwhite delay inaccesible' align='center' valign='center'><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Main/1'>Main</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/LTKTBM Main/60'>LTKTBM Main</a></li></ul></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Main/3'>Media</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Main/4'>Docs</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Main/61'>AQ2</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Contents/21'>Contents</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Readme/22'>Readme</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/AQ2-Commands/23'>AQ2 Commands</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Weapons-and-Items/24'>Weapons and Ite..</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Credits/25'>Credits</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/System-Requirements/47'>System Requirem..</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Changelog/53'>Changelog</a></li><li><a href='http://slacker.home.cosmic-cow.net/confgen/' target='blank'>Config generato..</a></li></ul></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Wealth of Nations/62'>Wealth of Natio..</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Wealth of Nations/63/1/1' onmouseover="return escape('THE CAUSES OF IMPROVEMENT IN THE PRODUCTIVE POWERS OF LABOUR, AND OF THE ORDER ACCORDING TO WHICH ITS PRODUCE IS NATURALLY DISTRIBUTED AMONG THE DIFFERENT RANKS OF THE PEOPLE')" target='_SELF'>Book 1</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Wealth%20of%20Nations/93/2/1' onmouseover="return escape('THE NATURE, ACCUMULATION, AND EMPLOYMENT OF STOCK')" target='_SELF'>Book 2</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Wealth%20of%20Nations/94/3/1' onmouseover="return escape('THE DIFFERENT PROGRESS OF OPULENCE IN DIFFERENT NATIONS')" target='_SELF'>Book 3</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Wealth%20of%20Nations/95/4/1' onmouseover="return escape('SYSTEMS OF POLITICAL ECONOMY')" target='_SELF'>Book 4</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Wealth%20of%20Nations/96/5/1.1.1' onmouseover="return escape('THE REVENUE OF THE SOVEREIGN OR COMMONWEALTH')" target='_SELF'>Book 5</a></li></ul></li></ul></li><li><a href='http://aqmd.telefragged.com/' target='_blank'>maps</a></li><li><a href='http://mods.moddb.com/gallery/964/' target='_blank'>Screenshots</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Main/20'>Gun Radio Inter..</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Interview-Part-1/26'>Interview Part ..</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Interview-Part-2/27'>Interview Part ..</a></li></ul></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Stories/50'>Stories</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Story-City/51'>Story City</a></li></ul></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Ragdol-Physics/55'>Ragdol Physics</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Water-Engine/56'>Water Engine</a></li></ul></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Main/6'>Downloads</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/LTKTBM/7'>LTKTBM</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Updates/8'>Updates</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Routes/9'>Routes</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Others/10'>Others</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Music/6'>Music</a></li></ul></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/News/11'>News</a><ul><li><a href='https://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/phpBB2/viewtopic.php?t=3&postdays=0&postorder=desc'>Interim News</a></li><li><a href='https://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/phpBB2/privmsg.php?mode=post&u=1'>Submit News</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/newswire.php'>Global Newswire</a></li></ul></li><li><a href='https://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/phpBB2/index.php'>Forums</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/IRC/14'>IRC</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Plans/15'>Plans</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Main/16'>Developers</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Main/31'>Game Engine</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Ragdol-Physics/32'>Ragdol Physics</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Ragdol-Readme/33'>Ragdol Readme</a></li></ul></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Secure-Client-Identification/43'>Secure Client I..</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/openAL/44'>openAL</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/openAL-tutorial-for-Q2E/45'>openAL tutorial..</a></li><li><a href='https://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/phpBB2/viewforum.php?f=23'>openAL/eax deve..</a></li></ul></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Water-Engine/52'>Water Engine</a></li><li><a href='https://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/phpBB2/privmsg.php?mode=post&u=1'>Engine source r..</a></li></ul></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Artificial_Intelligence/37'>Artificial Inte..</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/The_Borg_Matrix/28'>The Borg Matrix</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Main/30'>Agent Economics</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/milliEcon-v2/29'>milliEcon v2</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/milliEcon-v1/36'>milliEcon v1</a></li></ul></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Game_of_Life-Earth/35'>Game of Life Ea..</a></li></ul></li><li><a href='https://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/phpBB2/viewforum.php?f=7&location=The_Borg_Matrix&expand=28'>Pathfinder</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Dictionary/42'>Dictionary</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/TBM_vs_Others/49'>TBM vs Others</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/Social_Cohesion_Theory/97'>Social Cohesion..</a></li></ul></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/index2.php/CGF-Documentation/38'>CGF Documentati..</a><ul><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/downloads/dl.php?id=114' target='_blank'>CGF Grenade Han..</a></li><li><a href='http://archives.aq2world.com/archive/websites/www.theborgmatrix.com/ltk/downloads/dl.php?id=115' target='_blank'>CGF Terrain Han..</a></li></ul></li></ul></li></ul></li></ul></div>

<table width="100%" cellspacing="0" cellpadding="2" border="0" align="center">
  <tr>
	<td align="left" valign="bottom"><span class="gensmall">
	The time now is Wed Nov 24, 2010 7:43 am<br /></span><span class="nav"><a href="index.php" class="nav">theborgmatrix.com Forum Index</a></span></td>
	<td align="right" valign="bottom" class="gensmall">
		<a href="search.php?search_id=unanswered" class="gensmall">View unanswered posts</a></td>
  </tr>
</table>

<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
  <tr>
	<th colspan="2" class="thCornerL" height="25" nowrap="nowrap">&nbsp;Forum&nbsp;</th>
	<th width="50" class="thTop" nowrap="nowrap">&nbsp;Topics&nbsp;</th>
	<th width="50" class="thTop" nowrap="nowrap">&nbsp;Posts&nbsp;</th>
	<th class="thCornerR" nowrap="nowrap">&nbsp;Last Post&nbsp;</th>
  </tr>
  <tr>
	<td class="catLeft" colspan="2" height="28"><span class="cattitle"><a href="index.php?c=3" class="cattitle">Cam-Direct Programming & Games</a></span></td>
	<td class="rowpic" colspan="3" align="right">&nbsp;</td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=5" class="forumlink">General</a><br />
	  </span> <span class="genmed">Posts relating to general programming queries<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">21</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">53</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=2169#2169"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=6" class="forumlink">LTK TBM Clients</a><br />
	  </span> <span class="genmed">players come here<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">73</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">452</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=2146#2146"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=7" class="forumlink">Pathfinder</a><br />
	  </span> <span class="genmed">Posts relating to the Pathfinder project<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">8</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">45</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=2136#2136"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=19" class="forumlink">ltktbm - textures</a><br />
	  </span> <span class="genmed">Please help convert the baseq2 textures, so we can release ltktbm aq2 as a complete game.<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">43</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">54</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3040#3040"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=21" class="forumlink">LTKTBM BUG TRAQ</a><br />
	  </span> <span class="genmed">bug reports/issues with ltktbm<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">77</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">227</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3109#3109"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=22" class="forumlink">Movie Scripts</a><br />
	  </span> <span class="genmed">discussing and creating movie scripts for ltktbm<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">30</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">34</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3101#3101"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=23" class="forumlink">OpenAL/EAX developement</a><br />
	  </span> <span class="genmed">forum for discussion on implimenting A3D/EAX in game<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">82</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">125</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3090#3090"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=25" class="forumlink">LTKTBM servers</a><br />
	  </span> <span class="genmed">Server admins come here<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">45</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">73</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3106#3106"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=26" class="forumlink">Developers</a><br />
	  </span> <span class="genmed">programming and ltktbm development discussion<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">42</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">79</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3097#3097"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=32" class="forumlink">General Engine Developement</a><br />
	  </span> <span class="genmed">General Game Engine technologies<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">55</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">89</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3108#3108"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=33" class="forumlink">LTKTBM Linux</a><br />
	  </span> <span class="genmed">discussion on the linux releases/help etc<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">45</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">57</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3074#3074"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=35" class="forumlink">LTKTBM: The Game :</a><br />
	  </span> <span class="genmed">LTKTBM related discussions, infomation and resources<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">41</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">50</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3104#3104"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="catLeft" colspan="2" height="28"><span class="cattitle"><a href="index.php?c=8" class="cattitle">Life Science</a></span></td>
	<td class="rowpic" colspan="3" align="right">&nbsp;</td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=34" class="forumlink">The evolution of control</a><br />
	  </span> <span class="genmed">A disscussion of the evolution of what we are today and how we got here:<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">44</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">51</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3112#3112"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=37" class="forumlink">mSparks Crazy Space</a><br />
	  </span> <span class="genmed">philosophically speaking<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">42</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">45</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3087#3087"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="catLeft" colspan="2" height="28"><span class="cattitle"><a href="index.php?c=2" class="cattitle">PC Support</a></span></td>
	<td class="rowpic" colspan="3" align="right">&nbsp;</td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=4" class="forumlink">Systems</a><br />
	  </span> <span class="genmed">Posts for topics relating to upgrading and building systems<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">33</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">40</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3107#3107"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=2" class="forumlink">General</a><br />
	  </span> <span class="genmed">Post general help requests here<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">48</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">77</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3060#3060"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=3" class="forumlink">Networking & the internet</a><br />
	  </span> <span class="genmed">Post topics relating to computer communication here<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">44</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">48</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3026#3026"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=9" class="forumlink">Games</a><br />
	  </span> <span class="genmed">Posts related to games support<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">40</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">51</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3079#3079"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=16" class="forumlink">Programming</a><br />
	  </span> <span class="genmed">general programming support, from getting started, to releasing your first project.<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">27</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">33</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3020#3020"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=10" class="forumlink">Software</a><br />
	  </span> <span class="genmed">All software related queries<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">47</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">65</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3043#3043"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=12" class="forumlink">mIRC</a><br />
	  </span> <span class="genmed">IRC related support<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">38</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">43</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3082#3082"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=13" class="forumlink">HTML/Websites</a><br />
	  </span> <span class="genmed">website support and requests<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">48</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">53</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3105#3105"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"> <a href="viewforum.php?f=20" class="forumlink">Hardware</a><br />
	  </span> <span class="genmed">Addressing hardware issues such as printer/scanner troubles, or other issues relating to hardware troubleshooting<br />
	  </span><span class="gensmall">&nbsp; &nbsp;</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">45</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">50</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">Thu Jan 01, 1970 12:00 am<br /><a href="profile.php?mode=viewprofile&amp;u="></a> <a href="viewtopic.php?p=3111#3111"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
  </tr>
</table>

<table width="100%" cellspacing="0" border="0" align="center" cellpadding="2">
  <tr>
 	<td align="left">
 	</td>
	<td align="right"><span class="gensmall">All times are GMT</span></td>
  </tr>
</table>

<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
  <tr>
	<td class="catHead" colspan="2" height="28"><span class="cattitle"><a href="viewonline.php" class="cattitle">Who is Online</a></span></td>
  </tr>
  <tr>
	<td class="row1" align="center" valign="middle" rowspan="2"><img src="templates/subSilver/images/whosonline.gif" alt="Who is Online" /></td>
	<td class="row1" align="left" width="100%"><span class="gensmall">Our users have posted a total of <b>2880</b> articles<br />We have <b>507</b> registered users<br />The newest registered user is <b><a href="profile.php?mode=viewprofile&amp;u=1147">JamesBE</a></b></span>
	</td>
  </tr>
  <tr>
	<td class="row1" align="left"><span class="gensmall">In total there are <b>2</b> users online :: 0 Registered, 0 Hidden and 2 Guests &nbsp; [ <span style="color:#002200">Administrator</span> ] &nbsp; [ <span style="color:#ff0000">Moderator</span> ]<br />Most users ever online was <b>210</b> on Wed Nov 17, 2010 12:39 pm<br />Registered Users: None</span></td>
  </tr>
</table>

<table width="100%" cellpadding="1" cellspacing="1" border="0">
<tr>
	<td align="left" valign="top"><span class="gensmall">This data is based on users active over the past five minutes</span></td>
</tr>
</table>

<form method="post" action="login.php">
  <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr>
	  <td class="catHead" height="28"><a name="login"></a><span class="cattitle">Log in</span></td>
	</tr>
	<tr>
	  <td class="row1" align="center" valign="middle" height="28"><span class="gensmall">Username:
		<input class="post" type="text" name="username" size="10" />
		&nbsp;&nbsp;&nbsp;Password:
		<input class="post" type="password" name="password" size="10" maxlength="32" />
		&nbsp;&nbsp; &nbsp;&nbsp;Log me on automatically each visit
		<input class="text" type="checkbox" name="autologin" />
		&nbsp;&nbsp;&nbsp;
		<input type="submit" class="mainoption" name="login" value="Log in" />
		</span> </td>
	</tr>
  </table>
</form>

<br clear="all" />

<table cellspacing="3" border="0" align="center" cellpadding="0">
  <tr>
	<td width="20" align="center"><img src="templates/subSilver/images/folder_new_big.gif" alt="New posts"/></td>
	<td><span class="gensmall">New posts</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="templates/subSilver/images/folder_big.gif" alt="No new posts" /></td>
	<td><span class="gensmall">No new posts</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="templates/subSilver/images/folder_locked_big.gif" alt="Forum is locked" /></td>
	<td><span class="gensmall">Forum is locked</span></td>
  </tr>
</table>

</td>
	</tr><TR><TD><div align="center"><script type="text/javascript"><!--
google_ad_client = "pub-7138831479577622";
google_ad_width = 728;
google_ad_height = 90;
google_ad_format = "728x90_as";
google_ad_type = "text_image";
google_ad_channel = "";
google_color_border = "000000";
google_color_bg = "000000";
google_color_link = "FFFFFF";
google_color_text = "CCCCCC";
google_color_url = "999999";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div></td>
	</tr><TR><TD>
<div align="center"><span class="copyright"><br /><br />
<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB 2.0. If you cannot (for good
	reason) retain the full copyright we request you at least leave in place the
	Powered by phpBB line, with phpBB linked to www.phpbb.com. If you refuse
	to include even this then support on our forums may be affected.

	The phpBB Group : 2002
// -->
Powered by <a href="http://www.phpbb.com/" target="_phpbb" class="copyright">phpBB</a> &copy; 2001, 2005 phpBB Group<br /></span></div>
		</td>
	</tr>
</table>

</body>
</html>

