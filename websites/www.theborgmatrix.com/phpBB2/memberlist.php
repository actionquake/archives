<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">

<link rel="top" href="./index.php" title="theborgmatrix.com Forum Index" />
<link rel="search" href="./search.php" title="Search" />
<link rel="help" href="./faq.php" title="FAQ" />
<link rel="author" href="./memberlist.php" title="Memberlist" />

<title>theborgmatrix.com :: Memberlist</title>
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
	scrollbar-face-color: #001100;
	scrollbar-highlight-color: #EfEfFF;
	scrollbar-shadow-color: #001100;
	scrollbar-3dlight-color: #000000;
	scrollbar-arrow-color:  #AAAAAA;
	scrollbar-track-color: #002200;
	scrollbar-darkshadow-color: #001100;
}

/* General font families for common tags */
font,th,td,p { font-family: Verdana, Arial, Helvetica, sans-serif }
a:link,a:active,a:visited { color : #AAAAAA; }
a:hover		{ text-decoration: underline; color : #555555; }
hr	{ height: 0px; border: solid #000000 0px; border-top-width: 1px;}

/* This is the border line & background colour round the entire page */
.bodyline	{ background-color: #EfEfFF; border: 1px #001100 solid; }

/* This is the outline round the main forum tables */
.forumline	{ background-color: #EfEfFF; border: 2px #009900 solid; }

/* Main table cell colours and backgrounds */
td.row1	{ background-color: #002200; }
td.row2	{ background-color: #001100; }
td.row3	{ background-color: #000000; }

/*
  This is for the table cell above the Topics, Post & Last posts on the index.php page
  By default this is the fading out gradiated silver background.
  However, you could replace this with a bitmap specific for each forum
*/
td.rowpic {
		background-color: #EfEfFF;
		background-image: url(templates/subSilver/images/);
		background-repeat: repeat-y;
}

/* Header cells - the blue and silver gradient backgrounds */
th	{
	color: #888888; font-size: 13px; font-weight : bold;
	background-color: #006600; height: 25px;
}

td.cat,td.catHead,td.catSides,td.catLeft,td.catRight,td.catBottom {
			background-image: url(templates/subSilver/images/);
			background-color:#000000; border: #000000; border-style: solid; height: 28px;
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
	font-weight: bold; border: #EfEfFF; border-style: solid; height: 28px;
}
td.row3Right,td.spaceRow {
	background-color: #000000; border: #000000; border-style: solid;
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
	text-decoration: none; line-height : 120%; color : #555555;
}

/* General text */
.gen { font-size : 14px; }
.genmed { font-size : 13px; }
.gensmall { font-size : 12px; }
.gen,.genmed,.gensmall { color : #555555; }
a.gen,a.genmed,a.gensmall { color: #AAAAAA; text-decoration: none; }
a.gen:hover,a.genmed:hover,a.gensmall:hover	{ color: #555555; text-decoration: underline; }

/* The register, login, search etc links at the top of the page */
.mainmenu		{ font-size : 13px; color : #555555 }
a.mainmenu		{ text-decoration: none; color : #AAAAAA;  }
a.mainmenu:hover{ text-decoration: underline; color : #555555; }

/* Forum category titles */
.cattitle		{ font-weight: bold; font-size: 14px ; letter-spacing: 1px; color : #AAAAAA}
a.cattitle		{ text-decoration: none; color : #AAAAAA; }
a.cattitle:hover{ text-decoration: underline; }

/* Forum title: Text and link to the forums used in: index.php */
.forumlink		{ font-weight: bold; font-size: 14px; color : #AAAAAA; }
a.forumlink 	{ text-decoration: none; color : #AAAAAA; }
a.forumlink:hover{ text-decoration: underline; color : #555555; }

/* Used for the navigation text, (Page 1,2,3 etc) and the navigation bar when in a forum */
.nav			{ font-weight: bold; font-size: 13px; color : #555555;}
a.nav			{ text-decoration: none; color : #AAAAAA; }
a.nav:hover		{ text-decoration: underline; }

/* titles for the topics: could specify viewed link colour too */
.topictitle,h1,h2	{ font-weight: bold; font-size: 13px; color : #555555; }
a.topictitle:link   { text-decoration: none; color : #AAAAAA; }
a.topictitle:visited { text-decoration: none; color : #AAAAAA; }
a.topictitle:hover	{ text-decoration: underline; color : #555555; }

/* Name of poster in viewmsg.php and viewtopic.php and other places */
.name			{ font-size : 13px; color : #555555;}

/* Location, number of posts, post date etc */
.postdetails		{ font-size : 12px; color : #555555; }

/* The content of the posts (body of text) */
.postbody { font-size : 14px; line-height: 18px}
a.postlink:link	{ text-decoration: none; color : #AAAAAA }
a.postlink:visited { text-decoration: none; color : #AAAAAA; }
a.postlink:hover { text-decoration: underline; color : #555555}

/* Quote & Code blocks */
.code {
	font-family: Courier, 'Courier New', sans-serif; font-size: 13px; color: #CCFFCC;
	background-color: #FFF8C6; border: #000000; border-style: solid;
	border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

.quote {
	font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #333333; line-height: 125%;
	background-color: #FFF8C6; border: #000000; border-style: solid;
	border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

/* Copyright and bottom info */
.copyright		{ font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; letter-spacing: -1px;}
a.copyright		{ color: #333333; text-decoration: none;}
a.copyright:hover { color: #555555; text-decoration: underline;}

/* Form elements */
input,textarea, select {
	color : #555555;
	font: normal 13px Verdana, Arial, Helvetica, sans-serif;
	border-color : #555555;
}

/* The text input fields background colour */
input.post, textarea.post, select {
	background-color : #EfEfFF;
}

input { text-indent : 2px; }

/* The buttons used for bbCode styling in message post */
input.button {
	background-color : #002200;
	color : #555555;
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
.helpline { background-color: #001100; border-style: none; }

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
<body bgcolor="#EfEfFF" text="#555555" link="#AAAAAA" vlink="#AAAAAA">

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
						<td height="25" align="center" valign="top" nowrap="nowrap"><span class="mainmenu">&nbsp;<a href="profile.php?mode=editprofile" class="mainmenu"><img src="templates/subSilver/images/icon_mini_profile.gif" width="12" height="13" border="0" alt="Profile" hspace="3" />Profile</a>&nbsp; &nbsp;<a href="privmsg.php?folder=inbox" class="mainmenu"><img src="templates/subSilver/images/icon_mini_message.gif" width="12" height="13" border="0" alt="Log in to check your private messages" hspace="3" />Log in to check your private messages</a>&nbsp; &nbsp;<a href="login.php?redirect=memberlist.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_login.gif" width="12" height="13" border="0" alt="Log in" hspace="3" />Log in</a>&nbsp;</span></td>
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


<form method="post" action="memberlist.php">
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
	  <td align="left"><span class="nav"><a href="index.php" class="nav">theborgmatrix.com Forum Index</a></span></td>
	  <td align="right" nowrap="nowrap"><span class="genmed">Select sort method:&nbsp;<select name="mode"><option value="joined" selected="selected">Joined Date</option><option value="username">Username</option><option value="location">Location</option><option value="posts">Total posts</option><option value="email">Email</option><option value="website">Website</option><option value="topten">Top Ten Posters</option></select>&nbsp;&nbsp;Order&nbsp;<select name="order"><option value="ASC" selected="selected">Ascending</option><option value="DESC">Descending</option></select>&nbsp;&nbsp;
		<input type="submit" name="submit" value="Sort" class="liteoption" />
		</span></td>
	</tr>
  </table>
  <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr>
	  <th height="25" class="thCornerL" nowrap="nowrap">#</th>
	  <th class="thTop" nowrap="nowrap">&nbsp;</th>
	  <th class="thTop" nowrap="nowrap">Username</th>
	  <th class="thTop" nowrap="nowrap">Email</th>
	  <th class="thTop" nowrap="nowrap">Location</th>
	  <th class="thTop" nowrap="nowrap">Joined</th>
	  <th class="thTop" nowrap="nowrap">Posts</th>
	  <th class="thCornerR" nowrap="nowrap">Website</th>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;1&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=1"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=1" class="gen">mSparks</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">North West UK</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">03 Jan 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">933</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="http://ltktbm.moddb.com" target="_userwww"><img src="templates/subSilver/images/lang_english/icon_www.gif" alt="Visit poster's website" title="Visit poster's website" border="0" /></a>&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;2&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=2"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=2" class="gen">smurphster</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">Wisconsin, USA</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">03 Jan 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">168</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="http://www.bleedingchaos.net" target="_userwww"><img src="templates/subSilver/images/lang_english/icon_www.gif" alt="Visit poster's website" title="Visit poster's website" border="0" /></a>&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;3&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=4"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=4" class="gen">=UKE= Widow Maker</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">03 Jan 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">7</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;4&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=5"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=5" class="gen">DarkH1de</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">03 Jan 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">5</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;5&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=6"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=6" class="gen">[DEADEYE]</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">manchester</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">11 Jan 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">7</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;6&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=8"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=8" class="gen">MATTY</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">12 Jan 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">1</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;7&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=9"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=9" class="gen">Brian</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">14 Jan 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">1</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;8&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=10"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=10" class="gen">Darknight</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">18 Jan 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">1</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;9&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=12"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=12" class="gen">John Keymer</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">21 Jan 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">1</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;10&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=14"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=14" class="gen">antrayo</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">26 Jan 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">12</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;11&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=23"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=23" class="gen">Stirling</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">28 Jan 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">5</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;12&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=30"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=30" class="gen">Reaps</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">12 Feb 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">2</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;13&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=37"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=37" class="gen">Quaked Out</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">28 Feb 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">1</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;14&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=38"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=38" class="gen">Ghostface</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">28 Feb 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">7</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;15&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=39"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=39" class="gen">Xeon</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">06 Mar 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">170</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;16&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=41"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=41" class="gen">The_Gimp</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">Michigan (USA)</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">25 Apr 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">31</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="http://www.gimped-designs.com" target="_userwww"><img src="templates/subSilver/images/lang_english/icon_www.gif" alt="Visit poster's website" title="Visit poster's website" border="0" /></a>&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;17&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=42"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=42" class="gen">tiger@sound.net</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">02 May 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">75</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;18&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=44"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=44" class="gen">Mifferz</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">03 May 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">3</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;19&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=45"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=45" class="gen">ihavenolegs</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">11 May 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">3</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;20&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=47"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=47" class="gen">Hillbillie PHiL</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">22 May 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">2</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;21&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=49"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=49" class="gen">slacker</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">Australia</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">18 Jul 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">268</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="http://slacker.home.cosmic-cow.net/" target="_userwww"><img src="templates/subSilver/images/lang_english/icon_www.gif" alt="Visit poster's website" title="Visit poster's website" border="0" /></a>&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;22&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=50"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=50" class="gen">sui</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">18 Jul 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">11</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;23&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=53"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=53" class="gen">Warclub</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">19 Jul 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">34</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;24&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=55"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=55" class="gen">hafAkat</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">21 Jul 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">7</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;25&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=64"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=64" class="gen">the eamonator</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">28 Jul 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">2</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;26&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=70"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=70" class="gen">jitspoe</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">29 Jul 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">7</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;27&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=73"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=73" class="gen">Karen</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">30 Jul 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">0</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;28&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=105"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=105" class="gen">cody</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">15 Aug 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">1</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;29&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=110"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=110" class="gen">RiviEr</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">Norway, Oslo</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">18 Aug 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">51</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="http://www.playspoon.com/DVI   -outdated" target="_userwww"><img src="templates/subSilver/images/lang_english/icon_www.gif" alt="Visit poster's website" title="Visit poster's website" border="0" /></a>&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;30&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=120"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=120" class="gen">oopz</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">25 Aug 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">1</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;31&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=133"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=133" class="gen">kraz</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">11 Sep 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">1</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;32&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=135"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=135" class="gen">Beef</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">12 Sep 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">3</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;33&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=137"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=137" class="gen">Idle</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;<a href="profile.php?mode=email&amp;u=137"><img src="templates/subSilver/images/lang_english/icon_email.gif" alt="Send e-mail" title="Send e-mail" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">Iceland</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">12 Sep 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">2</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="http://q2ice.iceware.net/" target="_userwww"><img src="templates/subSilver/images/lang_english/icon_www.gif" alt="Visit poster's website" title="Visit poster's website" border="0" /></a>&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;34&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=149"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=149" class="gen">gath_of_beail</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">30 Sep 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">1</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;35&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=160"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=160" class="gen">Big_Fat_Ando</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">28 Oct 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">3</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;36&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=163"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=163" class="gen">Lo&#39;oRiS</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">02 Nov 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">1</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;37&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=176"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=176" class="gen">Exotic</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">13 Dec 2003</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">1</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;38&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=186"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=186" class="gen">fatty</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">17 Feb 2004</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">4</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;39&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=189"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=189" class="gen">Tok&#39;Ra&lt;SBD&gt;</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">30 Mar 2004</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">0</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;40&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=190"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=190" class="gen">refused</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">31 Mar 2004</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">0</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;41&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=192"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=192" class="gen">cancertoast</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">10 Apr 2004</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">3</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;42&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=193"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=193" class="gen">shady</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">26 Apr 2004</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">1</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;43&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=196"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=196" class="gen">Slashn64</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">Connecticut, USA</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">20 May 2004</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">98</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="http://www.sucksforyou.cjb.net" target="_userwww"><img src="templates/subSilver/images/lang_english/icon_www.gif" alt="Visit poster's website" title="Visit poster's website" border="0" /></a>&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;44&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=202"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=202" class="gen">Smiff</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">10 Jul 2004</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">19</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;45&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=204"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=204" class="gen">ViGiLnT</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">22 Jul 2004</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">1</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;46&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=205"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=205" class="gen">mehrsein</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">29 Sep 2004</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">11</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;47&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=206"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=206" class="gen">skillio</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">09 Oct 2004</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">2</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;48&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=210"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=210" class="gen">UnknownMercenary</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">13 Dec 2004</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">1</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;49&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=211"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=211" class="gen">Trinity</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">Tennessee</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">14 Dec 2004</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">0</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="mainbg" align="center"><span class="gen">&nbsp;50&nbsp;</span></td>
	  <td class="mainbg" align="center">&nbsp;<a href="privmsg.php?mode=post&amp;u=213"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message" title="Send private message" border="0" /></a>&nbsp;</td>
	  <td class="mainbg" align="center"><span class="gen"><a href="profile.php?mode=viewprofile&amp;u=213" class="gen">Caracol</a></span></td>
	  <td class="mainbg" align="center" valign="middle">&nbsp;&nbsp;&nbsp;</td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gensmall">30 Dec 2004</span></td>
	  <td class="mainbg" align="center" valign="middle"><span class="gen">0</span></td>
	  <td class="mainbg" align="center">&nbsp;&nbsp;</td>
	</tr>
	<tr>
	  <td class="catBottom" colspan="8" height="28">&nbsp;</td>
	</tr>
  </table>
  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr>
	  <td align="right" valign="top"></td>
	</tr>
  </table>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td><span class="nav">Page <b>1</b> of <b>9</b></span></td>
	<td align="right"><span class="gensmall">All times are GMT</span><br /><span class="nav">Goto page <b>1</b>, <a href="memberlist.php?mode=joined&amp;order=ASC&amp;start=50">2</a>, <a href="memberlist.php?mode=joined&amp;order=ASC&amp;start=100">3</a>, <a href="memberlist.php?mode=joined&amp;order=ASC&amp;start=150">4</a>, <a href="memberlist.php?mode=joined&amp;order=ASC&amp;start=200">5</a>, <a href="memberlist.php?mode=joined&amp;order=ASC&amp;start=250">6</a>, <a href="memberlist.php?mode=joined&amp;order=ASC&amp;start=300">7</a>, <a href="memberlist.php?mode=joined&amp;order=ASC&amp;start=350">8</a>, <a href="memberlist.php?mode=joined&amp;order=ASC&amp;start=400">9</a>&nbsp;&nbsp;<a href="memberlist.php?mode=joined&amp;order=ASC&amp;start=50">Next</a>&nbsp;</span></td>
  </tr>
</table></form>

<table width="100%" cellspacing="2" border="0" align="center">
  <tr>
	<td valign="top" align="right">
<form method="get" name="jumpbox" action="viewforum.php" onSubmit="if(document.jumpbox.f.value == -1){return false;}"><table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td nowrap="nowrap"><span class="gensmall">Jump to:&nbsp;<select name="f" onchange="if(this.options[this.selectedIndex].value != -1){ forms['jumpbox'].submit() }"><option value="-1">Select a forum</option><option value="-1">&nbsp;</option><option value="-1">Cam-Direct Programming & Games</option><option value="-1">----------------</option><option value="5">General</option><option value="6">LTK TBM Clients</option><option value="7">Pathfinder</option><option value="19">ltktbm - textures</option><option value="21">LTKTBM BUG TRAQ</option><option value="22">Movie Scripts</option><option value="23">OpenAL/EAX developement</option><option value="25">LTKTBM servers</option><option value="26">Developers</option><option value="32">General Engine Developement</option><option value="33">LTKTBM Linux</option><option value="35">LTKTBM: The Game :</option><option value="-1">&nbsp;</option><option value="-1">Life Science</option><option value="-1">----------------</option><option value="34">The evolution of control</option><option value="37">mSparks Crazy Space</option><option value="-1">&nbsp;</option><option value="-1">PC Support</option><option value="-1">----------------</option><option value="4">Systems</option><option value="2">General</option><option value="3">Networking & the internet</option><option value="9">Games</option><option value="16">Programming</option><option value="10">Software</option><option value="12">mIRC</option><option value="13">HTML/Websites</option><option value="20">Hardware</option></select><input type="hidden" name="sid" value="00b946a5a3a2f351ac75c7559048b904" />&nbsp;<input type="submit" value="Go" class="liteoption" /></span></td>
	</tr>
</table></form>

</td>
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

