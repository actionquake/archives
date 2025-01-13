EntZ v1.01 - map entity replacement proxy game module for Quake II
Copyright (c) 1998, by Avi Rozen (Zung!)
e-mail: zungbang@telefragged.com

Intro
=====
This little baby allows you to replace/modify any entity
in a map, by having the entity list loaded from an external file,
instead of using the one embeded in the bsp file.

Installation
============
If this is the only plug-in mod you use then:

1. create a folder named 'release' under c:\quake2 
   (replace c: with correct drive letter).

2. extract gamex86.dll to c:\quake\release
   (WITHOUT restoring path names).

If you use another plug-in mod then just unzip the
archive to c:\quake2, USING PATH NAMES. This
will put the new gamex86.dll in c:\quake2\proxy\entz


Launch
======
If you installed EntZ to c:\quake2\release then
just start the server as usual. 

If you installed EntZ to c:\quake2\proxy\entz then
you need to add "+set proxy entz" to the command line:

quake2 +set proxy entz <rest_of_command_line>

EntZ can be used with GameBot, GameCam or ZKick,
like this:

quake2 +set proxy entz:gamebot <rest_of_command_line>

or (if you want to run EntZ, GameBot and GameCam):

quake2 +set proxy entz:gamebot:gamecam <rest_of_command_line>

etc.


Usage
=====
EntZ will automatically load .ent files from the 'ents' subfolder
in the current game folder, and make the game use those ents
instead of the ones embeded in the map.

So in order to replace the entities in base1.bsp, just put
a file named base1.ent in c:\quake2\baseq2\ents\

Every game folder can have its own set of ent files, so you can
use different ent files for the same map in different mods.


Console Commands
================
EntZ adds a new server command:

sv entz

this saves the built-in entity list of the current map into 
a corresponding file (at c:\quake2\<gamedir>\ents).

Only thing you need now is a text editor (edit.com will do nicely)
and some experience in Q2 map editing ...


Compatibility
=============
EntZ may not work with some mods that modify the entity list
internally, like LMCTF.


Change Log
==========
08 Dec. 1998 v1.00 - first public release.

08 Dec. 1998 v1.01 - fixed bug: random map loading failures with external ent file







