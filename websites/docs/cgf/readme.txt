<pre>
================================================================

 CGF (0.81) for Action Quake 2 (1.51), Dec 25, 1999
   (Computer Generated Forces)

================================================================
Title                   : CGF for Action Quake 2 v0.81

Filename                : cgf_0_81.zip, or
                          cgf_0_81u.zip (upgrade from 0.80)
Game			: Action Quake 2 - CGF
Author                  : William van der Sterren     	
Email Address           : mailto:william@botepidemic.com
Web Site / further info : http://www.botepidemic.com/aid/cgf

Description             : missions, bots, tactics and scripting 
                          for single player Action Quake2 

Credits                 : Id Software, for all Quake's, 
                          A-Team, for Action Quake2,
                            feedback and testing
                          William van der Sterren, for CGF
                            concept, AI design, programming,
                            missions and route files
                          Fireblade & Zucchini, for the solid
                            AQ2 1.51 implementation
                          Floppier for additional route files

                          Further credits can be found here:
                          http://www.botepidemic.com/aid/cgf/credits.shtml

================================================================

* Play Information *

Single Player           : enables squad-on-squad combat in a
                          single player game, using the 
                          mission scripts, bots and the slick
                          Action Quake2 foundation
Cooperative             : no (not yet, but planned)
Deathmatch              : no (not planned at all)
AQ2 Teamplay	        : no (but emulated in single player mode
                          and based on forces defined in the
                          script)
Difficulty Settings     : yes (skill settings in the script, range
                          from 1.0 to 5.0 per bot/npc)
New Sounds              : no
New Graphics            : no (not yet)
New Music               : no


* Construction *

Base                    : id gamex86.dll, sources, 
                          AQ2 1.51 gamex86.dll sources
Editor(s) used          : Visual Studio 6, Edit+ (for missions) 
Known Bugs              : not that many
Build Time              : over 1,600 hours
Compile Time		: about 5 minutes


================================================================

* Description *

Customized squad-on-squad battles in the Action environment, with
the help of bots, missions and serious amount of AI. Overwatch, 
suppression fire, wall hugging, sniping, Defend a location, 
eliminate a target, or storm a building. Set up battles your self.
It's all in CGF.

It's probably a bit like playing Rogue Spear or Half-Life/Opfor, 
with the following differences:
- above mentioned products are stable and full products, with
  a story line etc., this beta isn't and hasn't
- Action Quake 2 is high speed action
- Half-Life squads have more animations, and lovely sounds,
  but depend on scripts and instructions in the map; don't expect
  them to come after you across the map, act autonomously,
  or patrol as a team.
- Rogue Spear features great uniforms, lots of good maps, 
  great breaching animations, but no real squad-on-squad engagements.
  Rogue Spear terrorists don't seem to be a real co-ordinated
  attack force (and probably cheat in their weapon accuracy).
  Rogue Spear buddies cannot respond to events not covered in
  their plan, and basically require the player to take control.
  Suppression fire, overwatch movement, and decent prediction of
  enemy movement are absent in Rogue Spear.
  Rogue Spear is very limited in its customization; there's nothing
  in the maps that couldn't have tackled with a Quake like editor,
  but alas, we have to wait for another mission pack.

================================================================

* Installation *

- prerequisites
  
  You need to have:
  - a Windows machine
  - Quake2 3.20

  - Action Quake2 1.51 or newer (see http://aq2.action-web.net)
  - both model packs (see http://guild.action-web.net)
  - various maps from http://aqmd.action-web.net ;
    see http://www.botepidemic.com/aid/cgf/downloads.shtml#maps
    for preview images and the exact URLs

  - the CGF Launcher (by Ross Norton)
    see http://www.botepidemic.com/aid/cgf/downloads.shtml#launcher

  - a Pentium200+ or better, and graphics accelerators 
    are advised
  - 60 MByte of HD space on your action drive

- additional, suggested downloads
  - CGF 0.8x is capable of hosting 11 variants of the existing AQ2
    weapons, that feature distinctive new looks and sounds. Some of
    the included missions explicitly use these weapons, resulting
    in an enhanced combat experience: you can distinguish between
    friend and foe gun sounds.
    Therefor, you're strongly advised to download the corresponding
    weapon files. Go here to get them
    http://www.botepidemic.com/aid/cgf/downloads.shtml#weapons

- before installation
  If you're a server op or host LAN games from your machine, 
  you may want to back up your gamex86.dll before 
  installing CGF. The CGF gamex86.dll isn't as stable as
  standard Action Quake2 1.51.

  If you just play Action by connecting to someone else's 
  machine on the Internet, or on the LAN, there's no problem in
  installing CGF (unless you play other AQ2 variants -
  in that case, backup the gamex86.dll as well).
  For LAN and internet play, it's network the server that 
  defines how to play action, not your local gamex86.dll.

  Prepare yourself to distinguish between .cfg files (normal
  Quake2 ConFiG files) and .cgf files (CGF = Computer 
  Generated Forces Files).

- unzipping the cgf_0_81.zip / cgf_0_81u.zip
  extract the whole zip file to your ACTION SUBDIR of quake2,
  WITH THE OPTIONS 'Use folders' AND 'Overwrite existing files'
  ENABLED (or something similar).
  The only file overwritten is gamex86.dll

- what's where
  As a result, the following files have been added
  .\action:
      gamex86.dll
  .\action\cgf
      cgf_formations.txt     : files for cgf, please don't edit
      readme.txt               this file 
  .\action\cgf\log
      placeholder.txt        : dummy file to force directory creation
                               (CGF needs this directory to exist)
  .\action\cgf\fog
      *.fog                  : various files defining default and
                               map specific fog settings
  .\action\terrain
      urban.*                : (large) route/terrain files for urban
      city.*                 : (large) route/terrain files for city
      downtown.*             : (large) route/terrain files for downtown 
      actcity2.*             : (large) route/terrain files for actcity2
      monastry.*             : (large) route/terrain files for monastry
      urban2.*               : (large) route/terrain files for urban2
      riot.*                 : (large) route/terrain files for riot
      coverme.*              : (large) route/terrain files for coverme
      p1_lightbeam.*         : (large) route/terrain files for p1_lightbeam
      riotx.*                : (large) route/terrain files for riotx

      Note that the 0 size files (*.dst, *.tac) are included to overwrite
      any existing files intentionally.

  .\action\missions
    *.cgf                    : lots of CGF missions, some requiring
                               the presence of the new (optional) weapons
    cgfparser.exe            : command line tool to check edited missions

- using CGF for the first time
  WARNING WARNING WARNING WARNING WARNING WARNING WARNING WARNING 
  The first time you start a CGF mission for a new map, CGF provides
  an on-screen warning, and automatically starts number crunching to build 
  a better understanding of the map. As mentioned in the warning:
  - this takes about 2 to 5 minutes (depending on your hardware);
  - all that time, Quake2 doesn't respond to your input
  - however, everything is ok
  - just allow CGF to do the computation and meanwhile, grab something
    to drink.
  After the number crunching, CGF is ready to go (and will load the
  same map instantaneously next time).
  The terrain files computed by CGF haven't been included in this 
  archive because they'd take up over 20MB.
  See: http://www.botepidemic.com/aid/cgf/faq.shtml#qg5 for more info.

- launching a mission
  The preferred way to launch a CGF mission is by booting up
  the CGF Launcher 
  (http://www.botepidemic.com/aid/cgf/downloads.shtml#launcher)
  and select the mission to play. Additional information is given,
  you're able to tweak weapon for all participants, and skill 
  settings, etc.

- launching a mission the hard way (manually)
  Again, you're strongly advised to use the CGF Launcher mentioned
  above.
  But if you really want to launch a mission using a config script,
  here's how to do it.

  Open a new (config) .cfg file (for example, _cgf.cfg, as is used
  by the CGF Launcher).

  Then write (for an urban2 mission):
    set cgf 1
    set deathmatch 1
    set teamplay 1
    set dmflags 2883
    gamemap urban2
    mission urban2_streets5.cgf

  And launch Quake2 (from the Q2 directory) as follows:
    quake2.exe +set game action +set maxclients 20 +exec _cgf.cfg

  Additionally, you can extend the fun by enabling a few AQ2 special
  effects such as:
    set bholelimit 40       // enable bullet holes, set to 0 to disable
    set splatlimit 20       // enable blood splats, set to 0 to disable
    set shelloff 0          // enable ejecting shells, set to 1 to disable
    set breakableglass 1    // enable breakable glass, set to 0 to disable

  You also can enable fog (if you happen to have a graphics accellerator
  with an OpenGL1.1 full driver - there's work around availabe for 3dfx
  boards).
    set fog 1               // enable fog, set to 0 to disable

  See http://www.botepidemic.com/aid/cgf/exp_fog.shtml
  for more info.

  Depending on the video card you have, the fog may have artifacts such
  as highlighting player/bots in the distance (doesn't happen on all maps).
  I didn't write the graphics boards drivers and don't have control over
  the fog; I can't do anything about it.

  Fog doesn't work over a network.

- in a mission
  Once a mission starts, you're dropped somewhere in the map, and
  the mission description appears on your screen (for about 5 seconds,
  press F1 (repeatedly) to remove it or to recall the info).

  The mission description provides you with a quick hint on the mission's
  goals. Typically this means staying alive, taking out all threats or
  a specific threat.

  You're advised to use the radio to reply to team members request
  to report in.

  Upon completion of a mission, you're informed of the result, and a
  next mission will launch automatically, depending on your results.

  If you become a casualty (believe me, you will), there's no option
  to control another (friendly) team member (this ain't the realistic
  Rogue Spear, remember).
  Instead, you're able to witness the action via the default AQ2 camera.

- multiplayer CGF (test code only)
  CGF 0.81 includes test code for CGF multi-player. Using this code,
  I can run successfully a server and multiple clients on my single PC.
  However, that's not a realistic way to test code intended for LAN use.
  Therefor, I you're experienced in playing AQ2 over a LAN and in
  playing CGF, I'm asking you to give it a try and let me know what
  works, what doesn't, and what can be improved.

  Note that, until a new CGF Launcher arrives, CGF multi-player is 
  rather cumbersome to launch and operate. It isn't meant to be played
  over the internet: CGF isn't as stable as AQ1.52, and doesn't have
  that much operator support.

  Listen server CGF multi-player:
  - server: 
  Multi-player CGF on a 'listen' server is the easiest way to run a 
  multi-player CGF mission. The player hosting the game launches 
  CGF like he would for a single player game (pick a mission using the 
  CGF Launcher). 
  He also informs fellow LAN clients of his IP address. 
  A first mission will start automatically, and he'll be the only player 
  participating. In subsequent missions, however, all other players 
  who have connected in time to his machine will participate in the 
  mission. 
  - client: 
  For a client to join a multi-player game, he only needs to connect 
  to the server running the CGF missions. Upon connecting, the 
  client is temporarily an observer, but when the next mission is 
  about to start, he will be informed of this (see center image above). 
  Note that, to participate in missions that use the 'optional' weapons, 
  the client needs to have installed the CGF optional weapons. 

  Dedicated server CGF multi-player:
  - server: 
  Setting up a dedicated server to run CGF missions requires a bit of 
  manual configuration. The server is launched using the following 
  command line (as an example):

quake2.exe +set game action +set dedicated 1 +set maxclients 32 +exec _cgf.cfg
                            ^^^^^^^^^^^^^^
 
  The _cgf.cfg containing server start instructions can be generated 
  by the CGF Launcher, but REQUIRES editing: 
  the mission command should be preceded by a 'sv' 
  (to make it a server instruction): 

set cgf 1
set deathmatch 1
set teamplay 1
set dmflags 2883
gamemap coverme
sv mission coverme_defense1.cgf
^^

  Upon launching the dedicated server, the server will postpone launching 
  the mission until the first client connects. The server then waits for 
  some 20 seconds (allowing other clients to connect as well), 
  and starts the mission. 
  All clients present in time for the first mission will participate 
  in the first mission. If they connect to the server at a later time, 
  they will participate in the next mission. 
  
  - client: 
  For a client to join a multi-player game, he performs the same actions 
  as for connecting to a listen server. 


  For the latest info on running CGF multiplayer, visit:
  http://www.botepidemic.com/aid/cgf/design_multiplayer.shtml

================================================================

* Known Problems *

- CGF runs out of edicts after about 45 minutes
- bot movement (isn't very smooth, has troubles with natural 
  sloping terrain, sometimes gets stuck)
- (up) close combat AI absent (and strafing as well)
- cannot use button operated doors, elevators and trains
- intro mission information is lacking
- bots jump to death (ignore their health while accepting falling 
  damage jumps) - this is a performance issue (and could be 
  solved at the expensive of either a serious slow down or some
  MB of RAM)
- repairing isn't always done at the best moment or location
- snipers do not respond correctly to nearby threats

- names of optional weapons do not show up in death messages
  (in other words, some kills mention the MP5 whereas the kill
  was caused by an UZI, MAC-10, or another submachinegun.
  The weapons code in AQ2 is too big a mess to easily add new
  weapons).

- use of various weapon models in software mode (notably the 
  Super90 M3 shotgun) may crash game (this is a problem with the
  model, not with CGF - you get around it using 'hand 2')

* Not Yet Supported *

- hand grenades (bots won't recognize nor use them)
- knifes

More about the CGF features, design and additional documentation
can be found here:
http://www.botepidemic.com/aid/cgf/features.shtml
http://www.botepidemic.com/aid/cgf/design.shtml


================================================================

* Trouble Shooting *

- if bots show up using the default weapon instead of one of
  the cool AQ2 ones
  - the mission probably uses one or more additional weapons
    for CGF. See the suggested downloads above (and install
    them)

- if all bots show up in reservoir style black dress, you 
  - might have a password set for your machine. remove it.
  - might have an autoexec.cfg in your action dir that does 
    strange things. edit it
  - might lack the required models and skins. Have a look
    at the required model pack mentioned above

- if you experience sz_overflow messages, reduce the numbers
  for bholelimit (bulletholes) and splatlimit (bloodsplats)
  in the cgf_*.cfg files

- if a mission crashes Q2, try:
  - remove the .log file in action\cgf\log for the map at hand
  - enable developer mode (edit the CGF Launcher script, and
    add a 'set developer 1' before the mission is started)
  - run the mission again
  - inspect the result after the crash for hints
    in action\cgf\log\mapname.log (substitute the correct map name)

  I cannot assist you in resolving troubles without receiving 
  the log file containing exactly the log of the failing mission
  (therefor, remove the log before launching the problematic mission).

  Of course, the Borderfield Mission Editor has built in
  support for dealing with log files.
  See: http://www.botepidemic.com/aid/cgf/downloads.shtml#missioneditor
    

See also the FAQ here:
http://www.botepidemic.com/aid/cgf/faq.shtml

================================================================

* Changes *

wrt to 0.80 (merely bug fixes and test code for multiplayer)
  - fixes:
        - removed debug code left over that introduced:
          - silenced grunt models
          - lots of blue, green and red balls
          - two cells ammo canisters
          and (due to the entities introduced) made Q2 prone to crashing
        - fixed bot VWEPs showing the correct weapon after switching guns
        - fixed displaying correct VWEP after picking up old school cannon
        - fixed 'teammate down', 'enemy down' message being repeated when
          issued by the player
        - moved computation of (missing) terrain and tactical information
          to start of mission, allowing Q2 to issue a message to the 
          player(s)
        - bot movement now detects portals preceded by a < 8 unit
          threshold, and copes with them
  - improvements:
        - bot static engagement duration now is determined based on 
          distance to threat and ammo level; bots perform slightly 
          better during close combat
  - additions:
        - implemented (test version) of multiplayer CGF

wrt to beta 0.78 (lots of changes)
- stability
  A good number of killer bugs were fixed, notably those causing
  advancing teams to crash.
  Team insertion is robust now; even when there isn't a fit, the
  team will be inserted properly.

- diagnostics
  Logging of most prominent problems was added. Use 'developer 1'
  to enable logging, and inspect the resulting log file in
  action\cgf\log\<mapname>.log to get feedback on the problems.

- team tactics / AI
  Teams now autonomously switch to overwatch advance for long
  distance threats.
  Teams have better tactical terrain understanding (used when
  patrolling, in combat), based on terrain and mission analysis.
  Teams adapt tactics based on past mission experience.
  Sniping now correctly scans relevant environment.
  Team behavior under combat differs for defensive, patrolling
  and attack modes.
  Team spreads out under combat, more flanking.
  Team responds to team radio messages.

- bot tactics / AI
  Bots now predict likely appearance locations, and aim for those
  locations.
  Bots feature realistic vision, tracking and aiming.
  Improved aiming (bots understand when threats do not see them,
  and subsequently use more time to improve their aim).
  Bots use suppression more often.
  Bots now understand how to step back for rotating doors.
  Slightly better jumping (notably for steep drop-offs).

- weapons
  11 new weapons added (operating next to the standard ones).
  Patched sniper behavior for clip based Dragunov and Barrett sniper
  rifles (shell ejection, reload).

- misc.
  Fog added for OpenGL1.1 compatible graphics accelerators.
  Mission parser catches more errors (redundant declarations of
  force / team / member / area names).

- documentation
  Mission script writing documented.
  Terrain file creation documented.

wrt to beta 0.77 (minor changes only, just didn't have the time)
- route file for city + city missions
- mission description is accompanied by action sound, and
  automatically removed after 5 seconds
- snipe instruction slightly more robust
- if the mission issues an akimbo pistol, it now provides 
  24 bullets for the akimbo
- door hack extended to support maps with multiple doors
  (such as city)
- reload when dead bug fixed (thanks Annti)
 

================================================================

* Mission Editing *

- before you start editing...
  You maybe want to try some missions written by other users. 
  Have a look at the CGF links page
  http://www.botepidemic.com/aid/cgf/links.shtml
  for mission sites.

- check out the mission information:
  http://www.botepidemic.com/aid/cgf/missions.shtml

  mission editing tools:
  http://www.botepidemic.com/aid/cgf/downloads.shtml#missioneditor

  mission script documentation:
  http://www.botepidemic.com/aid/cgf/doc_missions1.shtml


- use stand-alone parser for syntax checking

If you really want to change the missions, the following tool
will be of help: 
  .\missions\cgfparser.exe
It's a command line tool that accepts a .cgf file as input,
and tells you if the syntax is OK. That's better than having
Quake2 do so (or even crash because of a typo).
For example
  cgfparser.exe mission.cgf 
will show you if missionfile contains syntax errors or not.

Please remember that syntax correct files may still crash CGF
and Quake2 if you made some rogue changes. 


- any changes and mission distribution

If you change a mission file, please start by changing the 
author name. It's your hacked mission, not mine.


- changing weapons/items/skills

Basically, the CGF Launcher is the best tool at doing this.
However, if you like to do it the hard way (or want to use
some optional weapons before the new Launcher arrives),
read on:

Actually in violation with AQ2 TP rules, there's no limit
on the amount of items, weapons and ammo you can start with.
(You are, however, limited in picking up items and weapons).

If you're the type of guy that needs 9 clips for your M4,
just change the amount or add that line. 

To find the definition for your 'load out', look for the
line:
    team "Survivor"
    { 
>>>>  player "dah player" "male/reservoir" <<<<<<<<
        { 
          ammo   "Machinegun Magazine" = 2;                    
          weapon "MP5/10 Submachinegun";

          item   "Silencer";
          item   "Stealth Slippers";

thus, the line that contains 'player'. Immediately below that line,
you can add any of the following definitions (and change
the amounts):

          // basic AQ2 weapons + ammo
          ammo   "Pistol Clip" = 1;
          weapon "Dual MK23 Pistols";
          ammo   "Machinegun Magazine" = 2;                    
          weapon "MP5/10 Submachinegun";
          ammo   "M4 Clip" = 2;
          weapon "M4 Assault Rifle";
          ammo   "12 Gauge Shells" = 7;
          weapon "M3 Super 90 Assault Shotgun";
          weapon "Handcannon";
          ammo   "AP Sniper Ammo" = 20;
          weapon "Sniper Rifle";

          // items        
          item   "Bandolier";
          item   "Kevlar Vest";
          item   "Lasersight";
          item   "Silencer";
          item   "Stealth Slippers";

          // optional pistol
          weapon ""Beretta 92F Pistol";
          // optional submachineguns
          weapon "AK97 Submachinegun";
          weapon "MAC-10 Submachinegun";
          weapon "UMP45 Submachinegun";
          weapon "UZI Submachinegun";
          // optional assault rifles
          weapon "AK47 Assault Rifle";
          weapon "Tommygun";
          // optional assault shotgun
          weapon "Ithaca Model37 Assault Shotgun";
          // optional cannon
          weapon "Old-style Cannon";          
          // optional sniper rifles
          weapon "Barrett M82 Sniper Rifle";          
          weapon "Dragunov Sniper Rifle";

          // skill (from 1..5, ignored for 'player')
          skill  = 3;
    

REMEMBER, YOU NEED TO USE EXACTLY THESE NAMES, OTHERWISE
IT WILL BE IGNORED.


================================================================

* Copyright / Permissions *

Copyright (c) 1999 William van der Sterren. All rights reserved.

This game modification may be electronically distributed only 
with no charge to the recipient, and may not be modified in any way.
This text file must be included with this modification.

This game modification may not be distributed on any CD-ROM 
without the prior, explicit written consent by 
William van der Sterren.
</pre>
