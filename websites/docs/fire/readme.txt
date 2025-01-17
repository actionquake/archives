
		Action Quake2 : FireTeams v1.3
		------------------------------
	by Ben Delarre AKA Rab/TeenyBoppa[FSB]

Introduction

	Action Quake2 : FireTeams is a modification of the original
AQ2 code (at the time of writing in version 1.52). The original idea
for this modification was put forward by Gandalf in the
uk.games.computer.quake2 newsgroup. I picked up this idea and have 
implemented it as best I can.

Basically the modification consists of a restructuring of the
teamplay code. It allows a player to create or join teams (rather
than have just the original two teams). This allows for a number of
teams to play together (currently the mod supports upto 12 seperate
teams, of as many players as the server is set to.)

There are two main styles to play this mod in. Below I have outlined
the differences, and how to setup the server for each type.

If you find any bugs in this copy then please email me with the
details so that I can fix them, oh and if anyone has any other ideas
for modifications then PLEASE contact me.

New for V1.3
--- --- ----
OK, v1.3 is ready I think....no changes to FireTeams itself,
everything is as it was in v1.2. However this version has one major
addition. The locations mod i have been working on has finally
come to fruition. This means that in v1.3 of FireTeams we can use
%L commands like in CTF. So when you use say_team messages in
FireTeams, you can add a %L bit in to report your location. 

E.G.	"say_team I'm %L"
RETURNS	"I'm near the tree"

This addon doesn't work like CTF though. This works by reading a
file from the server. These files consist of x,y,z coordinates and
descriptions of those coordinates. Because of this, it means players
can have custom locations files (so you don't have to report the same
as everyone else). This should mean we see some decent teamwork at
last :-)))

Now, to create your own file you might wanna use the editmode thats
built in to the mod. To move to edit mode you must first be the only
player on the server (this might be best if you run the mod locally
to build your own locations files, however this means you must upload
the location files to the server, and not many ppl have access to
the games servers). I guess I had better explain that better. Because
of the way Q2 works, it will NOT read files off of the clients machine.
Therefore the location files must be on the server itself. This mod
will probably work best for Lans because of this. However, the server
should have default location files, and the client will use these
if he doesn't have his own custom location files on the server.

Anyway, when your in editmode, you can use the addlocation x command
to add a location named x at your current position (x will be the 
description that comes up when you do your say_team command. However
please note you don't nead the near, above, at bits, the mod will add
these itself depending on your position. So "addlocation near the tree"
would be wrong, because then it'd report "near near the tree").

For more detailed instructions on the editmode, check the locations.txt
file that came with this one.

Hopefully, this will cause better teamplay, as we can finally relate
where we are to everyone. Which is nice ;-)

Teamplay Mode
-------- ----
In teamplay mode the game plays just as a normal AQ2 team game does. 
That is except for the fact that the players can create new teams as
they wish. This mode allows for some very hectic teamplay as there
can be many teams playing at once.

To setup this mode of play just use the following server variables...

	set deathmatch 1
	set teamplay 1

So basically just setup the server as a normal teamplay server.

Deathmatch Mode
---------- ----
This mode allows for teamplay but without some of the restrictions of
normal teamplay mode. In deathmatch mode teams are still created as
normal, but now no rounds are played. Instead all teams play in the
one match (just as players do in normal deathmatch). However, when
you die in this modification, you cannot respawn until the rest of 
your team has died as well, at which point your team is respawned
automatically. 

To setup this mode of play just use the following server variables...

	set deathmatch 1
	set teamplay 1
	set deathmatchmode 1

Other Server Variables
----- ------ ---------
I have added 2 more server variables that allow the teams and players
to be limited. These are...

	set max_teams x
	set players_per_team y
	set match_countdown z

where x, y and z are numbers (e.g. set max_teams 2 will set a max
number of 2 teams). Players_per_team sets the max players per team.
Match_countdown sets the time to allow before a match or the first
round begins. This is currently set to default at 40 seconds, whereas
standard AQ2 is set to 20 seconds.

Installation
------------
Because this modification is simply a new .dll file for the server
there is no need for the clients to have this file. If you wish your
server to start running this mod, then simply rename the gamex86.dll
file in your action dir to something else (e.g. original.dll) then
replace it with the gamex86.dll in this zip. 

Do the same with the action.ini file (more on altering the action.ini
file later)

Once installation is complete simply run the server as you did before
with the desired mode setup as above.

Spawning of teams is now as good as I can get it I'm afraid. I'll
keep working on it, but I doubt theres any more I can do.

Modifying the action.ini file
--------- --- ---------- ----
The currently supplied action.ini file is simply an example (though
it should work on any server). To edit it simply change the text in it
as below....

[team1]
terror/skyterr
###
[team2]
male/resdog
###

Here terror/skyterr refers to the skin for Team 1 (skins are assigned
to players as they create/join teams). To alter the skin for Team 1
simply alter terror/skyterr to another skin (e.g. male/cipher).

It is advisable to stick to skins and models that come with the packs
supplied by the Actors Guild, otherwise players using your server may
not have the skins or models.

Final Note
----- ----
This modification can be freely distributed via the internet although
I would like to be informed of any places that it is published. Before
this modification is included on any CD for public distribution (e.g.
cover disks etc) I would like to be informed and my permission gained.

Many thanks to Gandalf for the idea for this mod, I hope it does what
you envisaged mate. Thanks to Zarjazz at Barrysworld for the linux
compile as well.

If you are using this mod on your server then could you please contact
me with the details of it. Thanks...

Contact
-------

My main email address is...
ben@delarre.freeserve.co.uk

if you don't get an answer there then please try
ben.delarre@btinternet.com

Thanks for the interest.