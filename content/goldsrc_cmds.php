<?php
$head_title=($ru==0?"GoldSrc console commands explained - Half-Life.Loess.ru":"Консольные команды движка - Half-Life.Loess.ru");

?>
<STYLE TYPE="text/css">


td {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	border-color: #333333 ;
	border-style: solid;
	border-top-width: 1px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;

	}
#id {background-color:black;}

</style>
<table width="100%" border="0" cellspacing="0" cellpadding="1">
  <tr>
    <td>
      <table width="100%" border="0" cellspacing="0" cellpadding="3">

      </table>
      <table id="id" width="100%" border=0 cellpadding="3" cellspacing="0">
        <tr>
          <td><b>Command or Variable Name</b></td>
          <td><b>Arguments or Default</b></td>
          <td><b>Category</b></td>
          <td><b>Description</b></td>
        </tr>
        <tr>
          <td>+alt1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>extra commands for mod authors; not currently used in HL or TFC</td>
        </tr>
        <tr>
          <td>+attack</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>fire</td>
        </tr>
        <tr>
          <td>+attack2</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>alternate fire (Special Ability Menu in TFC) see special</td>
        </tr>
        <tr>
          <td>+back</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>move backward</td>
        </tr>
        <tr>
          <td>+break</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>+camdistance</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>move chase cam away from player (only works if thirdperson activated)</td>
        </tr>
        <tr>
          <td>+camin</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>move chase cam in (forward) only works if thirdperson activated</td>
        </tr>
        <tr>
          <td>+cammousemove</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>allow mouse motion to control chase cam while held down (only works
            if thirdperson activated)</td>
        </tr>
        <tr>
          <td>+camout</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>move chase cam out (back) only works if thirdperson activated</td>
        </tr>
        <tr>
          <td>+campitchdown</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>decrease chase cam pitch (aim down) only works if thirdperson activated</td>
        </tr>
        <tr>
          <td>+campitchup</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>increase chase cam pitch (aim up) only works if thirdperson activated</td>
        </tr>
        <tr>
          <td>+camyawleft</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>yaw (tilt) chase cam left (only works if thirdperson activated)</td>
        </tr>
        <tr>
          <td>+camyawright</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>yaw (tilt) chase cam right (only works if thirdperson activated)</td>
        </tr>
        <tr>
          <td>+commandmenu</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>open the command menu</td>
        </tr>
        <tr>
          <td>+duck</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>duck (a.k.a. crouch)</td>
        </tr>
        <tr>
          <td>+forward</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>move forward</td>
        </tr>
        <tr>
          <td>+graph</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>enable net_graph display</td>
        </tr>
        <tr>
          <td>+jlook</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>enable joystick-controlled looking around (like +mlook, but with
            a joystick)</td>
        </tr>
        <tr>
          <td>+jump</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>jump</td>
        </tr>
        <tr>
          <td>+klook</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>use keyboard to look around (see +mlook, +jlook))</td>
        </tr>
        <tr>
          <td>+left</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>turn left</td>
        </tr>
        <tr>
          <td>+lookdown</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>look down</td>
        </tr>
        <tr>
          <td>+lookup</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>look up</td>
        </tr>
        <tr>
          <td>+mlook</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>use mouse to look around</td>
        </tr>
        <tr>
          <td>+movedown</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>move down -- as in swim down, fly down, or climb down</td>
        </tr>
        <tr>
          <td>+moveleft</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>strafe left</td>
        </tr>
        <tr>
          <td>+moveright</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>strafe right</td>
        </tr>
        <tr>
          <td>+moveup</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>move up -- as in swim up, fly up, or climb up</td>
        </tr>
        <tr>
          <td>+reload</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>reload current weapon</td>
        </tr>
        <tr>
          <td>+right</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>turn right</td>
        </tr>
        <tr>
          <td>+score</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>show player scores</td>
        </tr>
        <tr>
          <td>+showscores</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>show pings and scores for all players on the server</td>
        </tr>
        <tr>
          <td>+speed</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>walk if autorun enabled, run if autorun disabled</td>
        </tr>
        <tr>
          <td>+strafe</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>strafe modifier, direction keys strafe while this is held down</td>
        </tr>
        <tr>
          <td>+use</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>use item (switch, scientist, sentry gun, …)</td>
        </tr>
        <tr>
          <td>addip</td>
          <td>&lt;min&gt; &lt;ipaddr&gt;</td>
          <td>server</td>
          <td>adds an ip the server filterban list (0 minutes = permanent)</td>
        </tr>
        <tr>
          <td>alias</td>
          <td>&lt;name&gt; "cmd1; cmd2"</td>
          <td>scripts</td>
          <td>define an alias to a command or commands, i.e. alias jumpduck "+moveup;
            +movedown; wait; -moveup; -movedown"</td>
        </tr>
        <tr>
          <td>ambient_fade</td>
          <td>100</td>
          <td>audio</td>
          <td>set the distance at which ambient sounds fade away</td>
        </tr>
        <tr>
          <td>ambient_level</td>
          <td>0.300</td>
          <td>audio</td>
          <td>sets sound level for ambient sounds</td>
        </tr>
        <tr>
          <td>appenddemo</td>
          <td>&lt;demo&gt;</td>
          <td>demo</td>
          <td>record a demo, appending to the demo file already at half-life/valve/demo.dem</td>
        </tr>
        <tr>
          <td>autosave</td>
          <td>&nbsp;</td>
          <td>prefs</td>
          <td>enable autosave</td>
        </tr>
        <tr>
          <td>banid</td>
          <td>&lt;min&gt; &lt;uid&gt; [kick]</td>
          <td>server</td>
          <td>ban player with id <uid>for <min>minutes (0=permanent ban). Add
            'kick' after user number to also kick the player off the server. See
            users, kick, writeid, removeid</td>
        </tr>
        <tr>
          <td>bgetmod</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>request batch mod status</td>
        </tr>
        <tr>
          <td>bgmbuffer</td>
          <td>4096</td>
          <td>audio</td>
          <td>set the CD audio buffer size</td>
        </tr>
        <tr>
          <td>bgmvolume</td>
          <td>0</td>
          <td>audio</td>
          <td>enable CD audio (0 may improve performance) [Flags: a]</td>
        </tr>
        <tr>
          <td>bind</td>
          <td>&lt;key&gt; &lt;"cmd1; cmd2"&gt;</td>
          <td>scripts</td>
          <td>make <key>activate one or more command(s) or variable settings,
            enclosed in quotes and separated by semicolons. Binding a key to any
            +command also automatically binds the release of that key to the -command
            (see alias)</td>
        </tr>
        <tr>
          <td>bitmapfonts</td>
          <td>1</td>
          <td>video</td>
          <td>enable use of bitmap fonts (may be easier to read)</td>
        </tr>
        <tr>
          <td>bottomcolor</td>
          <td>6</td>
          <td>net</td>
          <td>set the bottom color of your player model [Flags: ai]</td>
        </tr>
        <tr>
          <td>brightness</td>
          <td>1</td>
          <td>video</td>
          <td>enable glare reduction (try higher values, like 3, for even brighter)
            [Flags: a]</td>
        </tr>
        <tr>
          <td>cam_command</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable chase cam commands</td>
        </tr>
        <tr>
          <td>cam_contain</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable chase cam auto-contain in current room</td>
        </tr>
        <tr>
          <td>cam_idealdist</td>
          <td>64</td>
          <td>prefs</td>
          <td>set the preferred distance from the player model for the chase cam
            (only valid if thirdperson activated)</td>
        </tr>
        <tr>
          <td>cam_idealpitch</td>
          <td>0</td>
          <td>prefs</td>
          <td>set the preferred pitch for the chase cam (only valid if thirdperson
            activated)</td>
        </tr>
        <tr>
          <td>cam_idealyaw</td>
          <td>90</td>
          <td>prefs</td>
          <td>set the preferred yaw for the chase cam (only valid if thirdperson
            activated)</td>
        </tr>
        <tr>
          <td>cam_snapto</td>
          <td>0</td>
          <td>prefs</td>
          <td>set the preferred snap interval for the chase cam (only valid if
            thirdperson activated)</td>
        </tr>
        <tr>
          <td>cancelselect</td>
          <td>&nbsp;</td>
          <td>scripts</td>
          <td>cancel selection (i.e. what ESCAPE usually does)</td>
        </tr>
        <tr>
          <td>cd</td>
          <td>&nbsp;</td>
          <td>audio</td>
          <td>control CD audio. 'cd stop' stops play, 'cd loop X' plays track
            X (1-16 valid)</td>
        </tr>
        <tr>
          <td>centerview</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>centers the view</td>
        </tr>
        <tr>
          <td>changelevel</td>
          <td>&lt;map&gt;</td>
          <td>server</td>
          <td>load the map specified without disconnecting clients from the server</td>
        </tr>
        <tr>
          <td>changelevel2</td>
          <td>&lt;map&gt;</td>
          <td>server</td>
          <td>load the map specified and continue the current game without disconnecting
            clients from the server</td>
        </tr>
        <tr>
          <td>chase_active</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable chase-cam (third-person view, like TombRaider or Hexen 2)</td>
        </tr>
        <tr>
          <td>chase_back</td>
          <td>100</td>
          <td>prefs</td>
          <td>set the preferred cam distance from the player when backing up</td>
        </tr>
        <tr>
          <td>chase_right</td>
          <td>0</td>
          <td>prefs</td>
          <td>set the preferred offset to the side for the chase cam</td>
        </tr>
        <tr>
          <td>chase_up</td>
          <td>16</td>
          <td>prefs</td>
          <td>set the preferred offset up for the chase cam</td>
        </tr>
        <tr>
          <td>clear</td>
          <td>&nbsp;</td>
          <td>misc</td>
          <td>clear the console screen</td>
        </tr>
        <tr>
          <td>clientport</td>
          <td>27005</td>
          <td>net</td>
          <td>set defail client port (TCP/IP) for connecting to a server (may
            specify other port with "connect ip:port")</td>
        </tr>
        <tr>
          <td>cl_allowdownload</td>
          <td>1</td>
          <td>net</td>
          <td>enable download of maps, models, and decals on joining a server
            [Flags: a]</td>
        </tr>
        <tr>
          <td>cl_allowupload</td>
          <td>1</td>
          <td>net</td>
          <td>enable upload of maps, models, and decals on joining a server [Flags:
            a]</td>
        </tr>
        <tr>
          <td>cl_allow_download</td>
          <td>&nbsp;</td>
          <td>old</td>
          <td>replaced by cl_allowdownload</td>
        </tr>
        <tr>
          <td>cl_allow_upload</td>
          <td>&nbsp;</td>
          <td>old</td>
          <td>replaced by cl_allowupload</td>
        </tr>
        <tr>
          <td>cl_anglespeedkey</td>
          <td>0.670</td>
          <td>prefs</td>
          <td>set the speed that the direction keys (not mouse) change the view
            angle</td>
        </tr>
        <tr>
          <td>cl_backspeed</td>
          <td>400</td>
          <td>prefs</td>
          <td>set the player backup speed on a server, up to server max [Flags:
            a]</td>
        </tr>
        <tr>
          <td>cl_bob</td>
          <td>0.010</td>
          <td>prefs</td>
          <td>set the amount that your player view bobs while running. Motion-sick
            types should set this to 0.</td>
        </tr>
        <tr>
          <td>cl_bobcycle</td>
          <td>0.800</td>
          <td>prefs</td>
          <td>set how frequently player view bobs while running. Motion-sick types
            should set this to 0.</td>
        </tr>
        <tr>
          <td>cl_bobup</td>
          <td>0.500</td>
          <td>prefs</td>
          <td>set the the amount of movement before view-bobbing kicks in. Motion-sick
            types should set this to 0.</td>
        </tr>
        <tr>
          <td>cl_clockreset</td>
          <td>0.1</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>cl_cmdbackup</td>
          <td>2</td>
          <td>unknown</td>
          <td>? [Flags: a]</td>
        </tr>
        <tr>
          <td>cl_cmdrate</td>
          <td>30</td>
          <td>net</td>
          <td>set the number of times per second that the client will update the
            server. Leave at 30 (or lower) for modems, set to 35-55 for Cable
            or DSL, 50 for LAN games. [Flags: a]</td>
        </tr>
        <tr>
          <td>cl_dlmax</td>
          <td>128</td>
          <td>net</td>
          <td>set the maximum number of kilobytes to download from a server [Flags:
            ai]</td>
        </tr>
        <tr>
          <td>cl_download_ingame</td>
          <td>1</td>
          <td>net</td>
          <td>enable downloads during a multiplayer game (generally not a good
            thing -- instead set cl_allow_download 1 and this one to 0 so downloads
            are between maps only) [Flags: a]</td>
        </tr>
        <tr>
          <td>cl_fixtimerate</td>
          <td>7.5</td>
          <td>net</td>
          <td>sets the fixed time rate</td>
        </tr>
        <tr>
          <td>cl_forwardspeed</td>
          <td>400</td>
          <td>prefs</td>
          <td>set the player maximum forward speed. may not exceed server max
            [Flags: a]</td>
        </tr>
        <tr>
          <td>cl_gaitestimation</td>
          <td>1</td>
          <td>net</td>
          <td>enable estimated player stepping motion -- disable (0) to decrease
            apparent "ice skating" and possibly increase lag</td>
        </tr>
        <tr>
          <td>cl_gg</td>
          <td>0</td>
          <td>demo</td>
          <td>enable Game Gauge mode (gg <demoname>starts running a demo in gamegauge
            mode and will report averag FPS at the end</td>
        </tr>
        <tr>
          <td>cl_gibcount</td>
          <td>4</td>
          <td>video</td>
          <td>sets the number of gibs to spawn when blowing an enemy to bits.
            lower or 0 may improve FPS [Flags: a]</td>
        </tr>
        <tr>
          <td>cl_giblife</td>
          <td>25</td>
          <td>video</td>
          <td>sets the time in seconds that gibs remain before disappearing. lower
            or 0 may improve FPS [Flags: a]</td>
        </tr>
        <tr>
          <td>cl_gibvelscale</td>
          <td>1</td>
          <td>video</td>
          <td>sets the scale factor for gib graphics. higher may improve FPS [Flags:
            a]</td>
        </tr>
        <tr>
          <td>cl_hightrack</td>
          <td>0</td>
          <td>net</td>
          <td>force a spectator on follow mode (tracking a single player) to always
            track the highest scoring player (thanks Ken).</td>
        </tr>
        <tr>
          <td>cl_himodels</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable high quality player models. Set to 1 for slightly better
            quality player models (and slightly lower fps) [Flags: a]</td>
        </tr>
        <tr>
          <td>cl_idealpitchscale</td>
          <td>0.8</td>
          <td>unknown</td>
          <td>? [Flags: a]</td>
        </tr>
        <tr>
          <td>cl_latency</td>
          <td>0</td>
          <td>net</td>
          <td>set client latency value</td>
        </tr>
        <tr>
          <td>cl_lb</td>
          <td>0</td>
          <td>net</td>
          <td>enable client-side blood splat prediction (if cl_lw is 1). If on,
            hits may look like misses and vice-versa. [Flags: ai]</td>
        </tr>
        <tr>
          <td>cl_lc</td>
          <td>1</td>
          <td>net</td>
          <td>enable lag compensation (if server enables with sv_unlag 1) [Flags:
            ai]</td>
        </tr>
        <tr>
          <td>cl_lw</td>
          <td>1</td>
          <td>net</td>
          <td>enable client-side (lagless) weapon animations and sounds. If 1,
            weapons animation and sounds will fire instantly, but the real shot
            must be acknowledged by the server to happen, so animation/sounds
            may not match server reality. Leave on (1) if you have lag compensation
            on (cl_lc 1). [Flags: ai]</td>
        </tr>
        <tr>
          <td>cl_messages</td>
          <td>&nbsp;</td>
          <td>prefs</td>
          <td>displays server messages</td>
        </tr>
        <tr>
          <td>cl_movespeedkey</td>
          <td>0.300</td>
          <td>prefs</td>
          <td>set movement speed for keyboard movement keys</td>
        </tr>
        <tr>
          <td>cl_needinstanced</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>cl_nopred</td>
          <td>0</td>
          <td>net</td>
          <td>disable client-side prediction (1 may increase lag)</td>
        </tr>
        <tr>
          <td>cl_nosmooth</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>cl_pitchdown</td>
          <td>89</td>
          <td>prefs</td>
          <td>set maximum angle that player can look down (in degrees)</td>
        </tr>
        <tr>
          <td>cl_pitchspeed</td>
          <td>225</td>
          <td>prefs</td>
          <td>set pitch (up and down) change speed</td>
        </tr>
        <tr>
          <td>cl_pitchup</td>
          <td>89</td>
          <td>prefs</td>
          <td>set maximum angle thaat player can look up (in degrees)</td>
        </tr>
        <tr>
          <td>cl_rate</td>
          <td>9001.204</td>
          <td>net</td>
          <td>set rate that client will send data to the server in bytes per second
            (suggested starting values: 1000-4000 modem, 5000-7000 ISDN, 6000-10000
            cable/DSL, 7000-20000 T1, 20000+ LAN) -- bad values cause LAG! turn
            on the r_netgraph 3 to help evaluate different values, and try non-integers
            like 4001.0528.</td>
        </tr>
        <tr>
          <td>cl_resend</td>
          <td>6</td>
          <td>net</td>
          <td>set resend count (the number of times to attempt to resend packets)</td>
        </tr>
        <tr>
          <td>cl_showerror</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable error display</td>
        </tr>
        <tr>
          <td>cl_showevents</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable event display</td>
        </tr>
        <tr>
          <td>cl_showfps</td>
          <td>0</td>
          <td>video</td>
          <td>enable FPS display (frames per second)</td>
        </tr>
        <tr>
          <td>cl_showmessages</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable display of game messages</td>
        </tr>
        <tr>
          <td>cl_shownet</td>
          <td>0</td>
          <td>net</td>
          <td>enable display of network packet numbers</td>
        </tr>
        <tr>
          <td>cl_sidespeed</td>
          <td>400</td>
          <td>prefs</td>
          <td>set the manimum player strafing speed (may not exceed server manimum)</td>
        </tr>
        <tr>
          <td>cl_slist</td>
          <td>10</td>
          <td>prefs</td>
          <td>set the number of servers in the serverlist</td>
        </tr>
        <tr>
          <td>cl_smoothtime</td>
          <td>0.1</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>cl_solid_players</td>
          <td>1</td>
          <td>prefs</td>
          <td>enable solid player models</td>
        </tr>
        <tr>
          <td>cl_spectator_password</td>
          <td>0</td>
          <td>net</td>
          <td>set the password for spectator access to a server</td>
        </tr>
        <tr>
          <td>cl_timeout</td>
          <td>305</td>
          <td>net</td>
          <td>set the inactivity time before a client is disconnected (timed out)
            [Flags: a]</td>
        </tr>
        <tr>
          <td>cl_updaterate</td>
          <td>20</td>
          <td>net</td>
          <td>set number of updates client will request from the server each second.
            In general, the more players in the game, the lower this should be.
            Lower than 12 will cause choppiness, but 15 may be great for some
            slow connections. Cable and DSL connections may like 30-40, unless
            there are too many players on the server. FOr lan games, use 50. [Flags:
            ai]</td>
        </tr>
        <tr>
          <td>cl_upspeed</td>
          <td>320</td>
          <td>prefs</td>
          <td>set the player climbing up speed (up to server max)</td>
        </tr>
        <tr>
          <td>cl_vsmoothing</td>
          <td>0.05</td>
          <td>unknown</td>
          <td>? [Flags: a]</td>
        </tr>
        <tr>
          <td>cl_waterdist</td>
          <td>4</td>
          <td>prefs</td>
          <td>set underwater distance </td>
        </tr>
        <tr>
          <td>cl_yawspeed</td>
          <td>210</td>
          <td>prefs</td>
          <td>set turning speed (with keyoard, up to server max)</td>
        </tr>
        <tr>
          <td>cmd</td>
          <td>&lt;cmd&gt; [arguments]</td>
          <td>misc</td>
          <td>formal way for a client to issue a command to the server -- when
            using the console, the 'cmd' part may be omitted.</td>
        </tr>
        <tr>
          <td>cmdline</td>
          <td>0</td>
          <td>developer</td>
          <td>display the command-line arguments passed by hl.exe [Flags: sv]</td>
        </tr>
        <tr>
          <td>cmdlist</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>print a list of commands to the console (cmdlist log logfile saves
            the list to c:\logfile); you can specify a mask for the list, such
            as 'cmdlist a' to list all commands beginning with 'a', etc.</td>
        </tr>
        <tr>
          <td>com_filewarning</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>condebug</td>
          <td>&nbsp;</td>
          <td>misc</td>
          <td>enable console debug mode</td>
        </tr>
        <tr>
          <td>condump</td>
          <td>&lt;filename&gt;</td>
          <td>misc</td>
          <td>dump the console to the text file specified</td>
        </tr>
        <tr>
          <td>connect</td>
          <td>&lt;ip&gt; : [port]</td>
          <td>net</td>
          <td>connect to a miltiplayer server with ip address <ip>and optional
            <port></td>
        </tr>
        <tr>
          <td>console</td>
          <td>1</td>
          <td>misc</td>
          <td>enable console [Flags: a]</td>
        </tr>
        <tr>
          <td>contimes</td>
          <td>&lt;n&gt;</td>
          <td>developer</td>
          <td>show n overlay lines (n = 4 to 64)</td>
        </tr>
        <tr>
          <td>con_color</td>
          <td>255</td>
          <td>prefs</td>
          <td>set console color [Flags: a]</td>
        </tr>
        <tr>
          <td>con_notifytime</td>
          <td>4</td>
          <td>prefs</td>
          <td>set console message notification time (how long messages stay on
            screen)</td>
        </tr>
        <tr>
          <td>coop</td>
          <td>0</td>
          <td>net</td>
          <td>enable cooperative play mode see the coop link on the main page
            for tips on getting coop working) [Flags: sv]</td>
        </tr>
        <tr>
          <td>crosshair</td>
          <td>1</td>
          <td>prefs</td>
          <td>enable crosshair [Flags: a]</td>
        </tr>
        <tr>
          <td>cr_demoman</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set a TFC class restriction to limit the number of players of the
            class in the name. 0=unlimited, -1=none of that class allowed [Flags:
            sv tfc]</td>
        </tr>
        <tr>
          <td>cr_engineer</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set a TFC class restriction to limit the number of players of the
            class in the name. 0=unlimited, -1=none of that class allowed [Flags:
            sv tfc]</td>
        </tr>
        <tr>
          <td>cr_hwguy</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set a TFC class restriction to limit the number of players of the
            class in the name. 0=unlimited, -1=none of that class allowed [Flags:
            sv tfc]</td>
        </tr>
        <tr>
          <td>cr_medic</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set a TFC class restriction to limit the number of players of the
            class in the name. 0=unlimited, -1=none of that class allowed [Flags:
            sv tfc]</td>
        </tr>
        <tr>
          <td>cr_pyro</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set a TFC class restriction to limit the number of players of the
            class in the name. 0=unlimited, -1=none of that class allowed [Flags:
            sv tfc]</td>
        </tr>
        <tr>
          <td>cr_random</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set a TFC class restriction to limit the number of players of the
            class in the name. 0=unlimited, -1=none of that class allowed [Flags:
            sv tfc]</td>
        </tr>
        <tr>
          <td>cr_scout</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set a TFC class restriction to limit the number of players of the
            class in the name. 0=unlimited, -1=none of that class allowed [Flags:
            sv tfc]</td>
        </tr>
        <tr>
          <td>cr_sniper</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set a TFC class restriction to limit the number of players of the
            class in the name. 0=unlimited, -1=none of that class allowed [Flags:
            sv tfc]</td>
        </tr>
        <tr>
          <td>cr_soldier</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set a TFC class restriction to limit the number of players of the
            class in the name. 0=unlimited, -1=none of that class allowed [Flags:
            sv tfc]</td>
        </tr>
        <tr>
          <td>cr_spy</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set a TFC class restriction to limit the number of players of the
            class in the name. 0=unlimited, -1=none of that class allowed [Flags:
            sv tfc]</td>
        </tr>
        <tr>
          <td>cvarlist</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>lists all the console variables (cvars) to the console (cvar log
            filename will send the list to the file c:\filename)</td>
        </tr>
        <tr>
          <td>c_maxdistance</td>
          <td>200</td>
          <td>prefs</td>
          <td>set chase cam max distance</td>
        </tr>
        <tr>
          <td>c_maxpitch</td>
          <td>90</td>
          <td>prefs</td>
          <td>set chase cam max pitch</td>
        </tr>
        <tr>
          <td>c_maxyaw</td>
          <td>135</td>
          <td>prefs</td>
          <td>set chase cam max yaw</td>
        </tr>
        <tr>
          <td>c_mindistance</td>
          <td>30</td>
          <td>prefs</td>
          <td>set chase cam min distance</td>
        </tr>
        <tr>
          <td>c_minpitch</td>
          <td>0</td>
          <td>prefs</td>
          <td>set chase cam min pitch</td>
        </tr>
        <tr>
          <td>c_minyaw</td>
          <td>-135</td>
          <td>prefs</td>
          <td>set chase cam min yaw</td>
        </tr>
        <tr>
          <td>deathmatch</td>
          <td>0</td>
          <td>server</td>
          <td>enable deathmatch mode [Flags: sv]</td>
        </tr>
        <tr>
          <td>decalfrequency</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set how frequently clients can spray paint their logo [Flags: sv]</td>
        </tr>
        <tr>
          <td>default_fov</td>
          <td>90</td>
          <td>server</td>
          <td>set the default Field-Of-View, smaller numbers zoom in, larger numbers
            zoom out (fish-eye style).</td>
        </tr>
        <tr>
          <td>delta_clear</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>delta_stats</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>demos</td>
          <td>&nbsp;</td>
          <td>demo</td>
          <td>runs a loop of demos set with startdemos</td>
        </tr>
        <tr>
          <td>developer</td>
          <td>0</td>
          <td>scripts</td>
          <td>enable special developer debug console messages and allow 'echo'
            to print to the game screen, see console help for details</td>
        </tr>
        <tr>
          <td>direct</td>
          <td>0.900</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>disconnect</td>
          <td>&nbsp;</td>
          <td>net</td>
          <td>disconnect from a server or local game</td>
        </tr>
        <tr>
          <td>dlfile</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>dropclient</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>drop client from server (disconnect)</td>
        </tr>
        <tr>
          <td>dropitems</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>drop the flag (useful for handing it off to a teammate)</td>
        </tr>
        <tr>
          <td>d_spriteskip</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>echo</td>
          <td>"text"</td>
          <td>scripts</td>
          <td>print a message to the console. To print to screen: 'developer 1;
            echo "text"; developer 0'</td>
        </tr>
        <tr>
          <td>edgefriction</td>
          <td>2</td>
          <td>server</td>
          <td>set friction between players and walls or objects [Flags: sv]</td>
        </tr>
        <tr>
          <td>endmovie</td>
          <td>&nbsp;</td>
          <td>demo</td>
          <td>the commands 'startmovie' and 'endmovie' start and stop recordding
            to a video stream, that is basically a bunch of bitmap images in a
            single file. You use the command like this: From the console type
            in: startmovie <filename>then enter a map using the map command from
            the console. I have had problems starting up the comand while in a
            map with the current version of half life but not with the origional
            CD copy. You need to issue the endmoive command to stop it. Note that
            this takes up a large amount of disk space. Then you need to compile
            a program called 'mkmovie' in the valve utils from the SDK (see the
            misc files section), and use this program to extract all the bitmaps
            from within the single video stream file. Then you use a program such
            as Adobe Premiere to string them together into an AVI, or mpg if you
            have the plugins. Be sure to import them such that their duration
            is only frame. You need a fast computer to do this properly, if not
            you will get like 15 frames per second, which is fine for most people,
            and still gets you a useable ingame video stream. If you have a slow
            pc, be sure to set the avi to 15 frames per second, but if your pc
            is fast then 24 or 30 frames per second is good too. Thanks to Evan
            <ace12ga>for that info.</td>
        </tr>
        <tr>
          <td>entities</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>list currently loaded entities</td>
        </tr>
        <tr>
          <td>envmap</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>creates the 6 BMP images for sky boxes from the player's current
            position. Size is set with gl_envmapsize <pixels>.</td>
        </tr>
        <tr>
          <td>escape</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>same as [ESCAPE] key, hides console, cancels selection, etc.</td>
        </tr>
        <tr>
          <td>exec</td>
          <td>&lt;filename&gt;</td>
          <td>scripts</td>
          <td>execute a script file of console commands, often have .cfg or .rc
            extension, though not required. script files can include any console
            commands and variable settings, see console help for details</td>
        </tr>
        <tr>
          <td>exit</td>
          <td>&nbsp;</td>
          <td>misc</td>
          <td>quit game or server to windows without confirmation</td>
        </tr>
        <tr>
          <td>ex_correct</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>ex_diminishextrap</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>ex_extrapmax</td>
          <td>1.2</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>ex_interp</td>
          <td>0.1</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>ex_maxaccel</td>
          <td>2000</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>ex_maxerrordistance</td>
          <td>64</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>ex_maxspeed</td>
          <td>750</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>ex_minvelocity</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>fakelag</td>
          <td>0</td>
          <td>net</td>
          <td>simulates lag, higher values are laggier</td>
        </tr>
        <tr>
          <td>fakeloss</td>
          <td>0</td>
          <td>net</td>
          <td>simulates packet loss, higher values are more lossy</td>
        </tr>
        <tr>
          <td>firstperson</td>
          <td>&nbsp;</td>
          <td>prefs</td>
          <td>enable first-person view (see thirdperson, chase_cam)</td>
        </tr>
        <tr>
          <td>flush</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>flush memory and reload</td>
        </tr>
        <tr>
          <td>fly</td>
          <td>&nbsp;</td>
          <td>cheats</td>
          <td>One would think this would enable flying, but noclip does insstead.
            See the cheats page for details.</td>
        </tr>
        <tr>
          <td>ForceCloseCommand</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>force_centerview</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>snaps player view to straight ahead</td>
        </tr>
        <tr>
          <td>fov</td>
          <td>90</td>
          <td>controls</td>
          <td>set the field-of-vision size. Smaller numbers zoom in, larger numbers
            zoom out, valid range is 1-179.</td>
        </tr>
        <tr>
          <td>fps_lan</td>
          <td>&nbsp;</td>
          <td>old</td>
          <td>replaced by fps_max</td>
        </tr>
        <tr>
          <td>fps_max</td>
          <td>72</td>
          <td>video</td>
          <td>set the maximum number of frames per second that the game will try
            to render. Similar to the old fps_modem, but no longer affects network
            lag.</td>
        </tr>
        <tr>
          <td>fps_modem</td>
          <td>&nbsp;</td>
          <td>old</td>
          <td>replaced by fps_max</td>
        </tr>
        <tr>
          <td>fps_single</td>
          <td>&nbsp;</td>
          <td>old</td>
          <td>replaced by fps_max</td>
        </tr>
        <tr>
          <td>fullinfo</td>
          <td>&lt;complete info string&gt;</td>
          <td>server</td>
          <td>enable verbose user information display</td>
        </tr>
        <tr>
          <td>fullserverinfo</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>enable verbose server information display</td>
        </tr>
        <tr>
          <td>gamedir</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set game base directory</td>
        </tr>
        <tr>
          <td>gamma</td>
          <td>3</td>
          <td>video</td>
          <td>set video gamma level [Flags: a]</td>
        </tr>
        <tr>
          <td>getcertificate</td>
          <td>&nbsp;</td>
          <td>net</td>
          <td>authenticates your cd key (by checking it with won.net) without
            joining a server</td>
        </tr>
        <tr>
          <td>gg</td>
          <td>&lt;demoname&gt;</td>
          <td>demo</td>
          <td>run Game Gauge benchmark using demoname if cl_gg = 1</td>
        </tr>
        <tr>
          <td>give</td>
          <td>&nbsp;</td>
          <td>cheats</td>
          <td>spawn a weapon, item, or character. See the cheats page for details.</td>
        </tr>
        <tr>
          <td>gl_affinemodels</td>
          <td>0</td>
          <td>video</td>
          <td>makes my screen go crazy (Voodo2)</td>
        </tr>
        <tr>
          <td>gl_alphamin</td>
          <td>0.250</td>
          <td>video</td>
          <td>set minimum alpha blending level</td>
        </tr>
        <tr>
          <td>gl_clear</td>
          <td>0</td>
          <td>video</td>
          <td>makes cracks between textures visible when 1</td>
        </tr>
        <tr>
          <td>gl_cull</td>
          <td>1</td>
          <td>video</td>
          <td>enable rendering of visible objects only (0 will slow fps)</td>
        </tr>
        <tr>
          <td>gl_d3dflip</td>
          <td>0</td>
          <td>video</td>
          <td>enable reversed rendering order for D3D video mode</td>
        </tr>
        <tr>
          <td>gl_dither</td>
          <td>1</td>
          <td>video</td>
          <td>enable dithering [Flags: a]</td>
        </tr>
        <tr>
          <td>gl_dump</td>
          <td>&nbsp;</td>
          <td>video</td>
          <td>dump data about video card: vendor, renderer, version, entensions</td>
        </tr>
        <tr>
          <td>gl_flipmatrix</td>
          <td>0</td>
          <td>video</td>
          <td>enable special crosshair fix when using the 3DNow! 3DFX MiniGL (3dfxglam.dll)
            [Flags: a]</td>
        </tr>
        <tr>
          <td>gl_keeptjunctions</td>
          <td>1</td>
          <td>video</td>
          <td>enable allowing slight cracks between textures, setting to 1 may
            look better on some video cards, but will be a bit slower (fewer fps)</td>
        </tr>
        <tr>
          <td>gl_lightholes</td>
          <td>1</td>
          <td>video</td>
          <td>enable light holes (0 may improve perfomance)</td>
        </tr>
        <tr>
          <td>gl_log</td>
          <td>&lt;logfile&gt;</td>
          <td>video</td>
          <td>writes graphic debug messages to logfile</td>
        </tr>
        <tr>
          <td>gl_max_size</td>
          <td>256</td>
          <td>video</td>
          <td>set the maximum texture size (higher may look better, but may slow
            performance if set too high)</td>
        </tr>
        <tr>
          <td>gl_monolights</td>
          <td>0</td>
          <td>video</td>
          <td>creates a uniform light source with no shadows (OpenGL only) [Flags:
            a]</td>
        </tr>
        <tr>
          <td>gl_nobind</td>
          <td>0</td>
          <td>video</td>
          <td>enable replacing textures with bizarre alphanumeric characters (trippy)</td>
        </tr>
        <tr>
          <td>gl_nocolors</td>
          <td>0</td>
          <td>video</td>
          <td>disable colors (OpenGL only)</td>
        </tr>
        <tr>
          <td>gl_overbright</td>
          <td>1</td>
          <td>video</td>
          <td>enable maximum brightness mode [Flags: a]</td>
        </tr>
        <tr>
          <td>gl_palette_tex</td>
          <td>1</td>
          <td>video</td>
          <td>enable paletted textures</td>
        </tr>
        <tr>
          <td>gl_picmip</td>
          <td>0</td>
          <td>video</td>
          <td>set rendering quality (0,1,2, higher is faster and lower quality)
            see gl_playermip, gl_texturemode</td>
        </tr>
        <tr>
          <td>gl_playermip</td>
          <td>0</td>
          <td>video</td>
          <td>set player rendering quality (0,1,2, higher is faster and lower
            quality) see gl_playermip, gl_texturemode</td>
        </tr>
        <tr>
          <td>gl_polyoffset</td>
          <td>4</td>
          <td>video</td>
          <td>set polygon offset -- try larger values for flickering decal or
            texture problems [Flags: a]</td>
        </tr>
        <tr>
          <td>gl_reporttjunctions</td>
          <td>0</td>
          <td>video</td>
          <td>enable T-junction reporting to console, see gl_keeptjunctions</td>
        </tr>
        <tr>
          <td>gl_round_down</td>
          <td>3</td>
          <td>video</td>
          <td>set texture size rounding-down value (higher rounds more, resulting
            in lower quality and higher FPS)</td>
        </tr>
        <tr>
          <td>gl_smoothmodels</td>
          <td>1</td>
          <td>video</td>
          <td>enable model smoothing. Disabling (0) may increase fps a bit</td>
        </tr>
        <tr>
          <td>gl_spriteblend</td>
          <td>1</td>
          <td>video</td>
          <td>enable blending sprite graphics</td>
        </tr>
        <tr>
          <td>gl_texels</td>
          <td>&nbsp;</td>
          <td>video</td>
          <td>report the number of texesl uploaded to the video card</td>
        </tr>
        <tr>
          <td>gl_texsort</td>
          <td>0</td>
          <td>video</td>
          <td>enables brighter and more vivid textures, but slows performance</td>
        </tr>
        <tr>
          <td>gl_texturemode</td>
          <td>[type]</td>
          <td>video</td>
          <td>set the rendering mode: in order from lowest quality (fastest) to
            highest quality (slowest), [type] options are: GL_NEAREST_MIPMAP_NEAREST,
            GL_LINEAR_MIPMAP_NEAREST, GL_NEAREST_MIPMAP_LINEAR, GL_LINEAR_MIPMAP_LINEAR.
            Think of the 1st two as low and high quality for hardware that supports
            bilinear filetering, and the 2nd two as low and high quality for hardware
            that supports trilinear filtering.</td>
        </tr>
        <tr>
          <td>gl_wateramp</td>
          <td>0</td>
          <td>video</td>
          <td>enable amplified (higher) waves in water. 1 may decrease FPS (see
            sv_wateramp)</td>
        </tr>
        <tr>
          <td>gl_zmax</td>
          <td>4096</td>
          <td>video</td>
          <td>set max size for zbuffer</td>
        </tr>
        <tr>
          <td>gl_ztrick</td>
          <td>1</td>
          <td>video</td>
          <td>speeds up renndering on some 3dfx cards (and maybe others), but
            may cause flickering on some video cards</td>
        </tr>
        <tr>
          <td>god</td>
          <td>&nbsp;</td>
          <td>cheats</td>
          <td>toggle god mode (invincibility). See the cheats page for details.</td>
        </tr>
        <tr>
          <td>graphheight</td>
          <td>64</td>
          <td>net</td>
          <td>set height of r_netgraph/net_graph display</td>
        </tr>
        <tr>
          <td>heartbeat</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>send a heartbeat signal to the master server (set setmaster)</td>
        </tr>
        <tr>
          <td>hideconsole</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>hide the console</td>
        </tr>
        <tr>
          <td>hisound</td>
          <td>0</td>
          <td>audio</td>
          <td>enable high-quality sound (1=22kHz, 0=11kHz) see also loadas8bit
            (0 may improve performance) [Flags: a]</td>
        </tr>
        <tr>
          <td>HostMap</td>
          <td>0</td>
          <td>unknown</td>
          <td></td>
        </tr>
        <tr>
          <td>hostname</td>
          <td>&lt;name&gt;</td>
          <td>server</td>
          <td>set server hostname (the name that will appear in server browser
            lists, if setmaster is set)</td>
        </tr>
        <tr>
          <td>hostport</td>
          <td>0</td>
          <td>server</td>
          <td>set host connection port</td>
        </tr>
        <tr>
          <td>host_framerate</td>
          <td>0</td>
          <td>demo</td>
          <td>set the speed that host and server interact with the game. </td>
        </tr>
        <tr>
          <td>host_limitlocal</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>host_profile</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>host_speeds</td>
          <td>0</td>
          <td>video</td>
          <td>enable display of current FPS on-screen</td>
        </tr>
        <tr>
          <td>hpkextract</td>
          <td>&lt;name&gt; [all|1 idx]</td>
          <td>developer</td>
          <td>extract files from hpk file (opts = <hpkname>[all | single index])</td>
        </tr>
        <tr>
          <td>hpklist</td>
          <td>&lt;hpkname&gt;</td>
          <td>developer</td>
          <td>list files in hpk file</td>
        </tr>
        <tr>
          <td>hpkremove</td>
          <td>&lt;name&gt; &lt;index&gt;</td>
          <td>developer</td>
          <td>remove file from hpkfile</td>
        </tr>
        <tr>
          <td>hpkval</td>
          <td>&lt;hpkname&gt;</td>
          <td>developer</td>
          <td>display checksum value for hpk file</td>
        </tr>
        <tr>
          <td>hud_capturemouse</td>
          <td>1</td>
          <td>prefs</td>
          <td>enable locking mouse pointer to menu area when menu activated [Flags:
            a]</td>
        </tr>
        <tr>
          <td>hud_centerid</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable center screen display of player ID names (instead of lower-left
            corner) [Flags: a]</td>
        </tr>
        <tr>
          <td>hud_classautokill</td>
          <td>1</td>
          <td>prefs</td>
          <td>enable auto-suicide on class changes [Flags: a]</td>
        </tr>
        <tr>
          <td>hud_deathnotice_time</td>
          <td>6</td>
          <td>prefs</td>
          <td>set how long death messages remain onscreen</td>
        </tr>
        <tr>
          <td>hud_drawhistory_time</td>
          <td>5</td>
          <td>prefs</td>
          <td>set how long HUD item icons remain onscreen</td>
        </tr>
        <tr>
          <td>hud_fastswitch</td>
          <td>1</td>
          <td>prefs</td>
          <td>enable fast weapon switching (0 is HL-style, where you must press
            fire after picking a weapon before it is activated) [Flags: a]</td>
        </tr>
        <tr>
          <td>hud_saytext_time</td>
          <td>5</td>
          <td>prefs</td>
          <td>set how long chat messages remain onscreen</td>
        </tr>
        <tr>
          <td>hud_takesshots</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable screen shot saving at the end of all games [Flags: a]</td>
        </tr>
        <tr>
          <td>impulse</td>
          <td>100 </td>
          <td>controls</td>
          <td>enable flashlight</td>
        </tr>
        <tr>
          <td>interp</td>
          <td>&nbsp;</td>
          <td>video</td>
          <td>enable frame interpolation</td>
        </tr>
        <tr>
          <td>invnext</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>select next item in inventory</td>
        </tr>
        <tr>
          <td>invprev</td>
          <td>0</td>
          <td>controls</td>
          <td>select previous item in inventory</td>
        </tr>
        <tr>
          <td>ip</td>
          <td>0</td>
          <td>server</td>
          <td>echo server ip</td>
        </tr>
        <tr>
          <td>ipx_clientport</td>
          <td>0</td>
          <td>net</td>
          <td>set client port for IPX LAN game</td>
        </tr>
        <tr>
          <td>ipx_hostport</td>
          <td>0</td>
          <td>server</td>
          <td>set host port for IPX LAN game</td>
        </tr>
        <tr>
          <td>ip_clientport</td>
          <td>0</td>
          <td>net</td>
          <td>set client port for TCP/IPLAN game</td>
        </tr>
        <tr>
          <td>ip_hostport</td>
          <td>0</td>
          <td>server</td>
          <td>set host port for TCP/IP LAN game</td>
        </tr>
        <tr>
          <td>joyadvanced</td>
          <td>0</td>
          <td>joystick</td>
          <td>set to 1 before changing any advanced joystick variables, then call
            joyadvancedupdate to activate changes</td>
        </tr>
        <tr>
          <td>joyadvancedupdate</td>
          <td>&nbsp;</td>
          <td>joystick</td>
          <td>enable advanced joystick settings (use after setting joyadvanced
            1 and making any variable changes desired)</td>
        </tr>
        <tr>
          <td>joyadvaxisr</td>
          <td>0</td>
          <td>joystick</td>
          <td>set mapping of DirectInput axis R (typically joystick rudder) --
            not used. Valid values: 0 = Axis not used, 1 = Axis is for forward
            and backward movement, 2 = Axis is for looking up and down (pitch),
            3 = Axis is for side to side movement, 4 = Axis is for turning left
            and right (yaw). Additionally, each axis can be designated as an absolute
            axis (like a joystick) or a relative axis (like the FPgaming trackball
            or the WingMan Warrior SpinControl). Absolute axes are defined as
            having a stopping position whereas relative axes don't have a stopping
            position and just go around and around. To designate an axis as a
            relative axis, add 16 to the above control number. For example, to
            set the Assassin 3D's axis U to be looking left and right, type 'joyadvaxisu
            20'. As another example, to make your rudder pedals control turning
            left and right, type 'joyadvaxisr 4'.</td>
        </tr>
        <tr>
          <td>joyadvaxisu</td>
          <td>0</td>
          <td>joystick</td>
          <td>set mapping of DirectInput axis U (custom axis - Assassin 3D trackball
            left and right, WingMan Warrior SpinControl and SpaceOrb roll). Sets
            the Assassin 3D to relative turning left and right. (Not self centering).
            Valid values: 0 = Axis not used, 1 = Axis is for forward and backward
            movement, 2 = Axis is for looking up and down (pitch), 3 = Axis is
            for side to side movement, 4 = Axis is for turning left and right
            (yaw). Additionally, each axis can be designated as an absolute axis
            (like a joystick) or a relative axis (like the FPgaming trackball
            or the WingMan Warrior SpinControl). Absolute axes are defined as
            having a stopping position whereas relative axes don't have a stopping
            position and just go around and around. To designate an axis as a
            relative axis, add 16 to the above control number. For example, to
            set the Assassin 3D's axis U to be looking left and right, type 'joyadvaxisu
            20'. As another example, to make your rudder pedals control turning
            left and right, type 'joyadvaxisr 4'.</td>
        </tr>
        <tr>
          <td>joyadvaxisv</td>
          <td>0</td>
          <td>joystick</td>
          <td>set mapping of DirectInput axis V (custom axis - Assassin 3D trackball
            forward and backward and SpaceOrb yaw). Sets the Assassin 3D to relative
            free-look up and down. (Not self centering). Valid values: 0 = Axis
            not used, 1 = Axis is for forward and backward movement, 2 = Axis
            is for looking up and down (pitch), 3 = Axis is for side to side movement,
            4 = Axis is for turning left and right (yaw). Additionally, each axis
            can be designated as an absolute axis (like a joystick) or a relative
            axis (like the FPgaming trackball or the WingMan Warrior SpinControl).
            Absolute axes are defined as having a stopping position whereas relative
            axes don't have a stopping position and just go around and around.
            To designate an axis as a relative axis, add 16 to the above control
            number. For example, to set the Assassin 3D's axis U to be looking
            left and right, type 'joyadvaxisu 20'. As another example, to make
            your rudder pedals control turning left and right, type 'joyadvaxisr
            4'.</td>
        </tr>
        <tr>
          <td>joyadvaxisx</td>
          <td>0</td>
          <td>joystick</td>
          <td>set mapping of DirectInput axis X (typically joystick left and right);
            allows joystick to turn. Valid values: 0 = Axis not used, 1 = Axis
            is for forward and backward movement, 2 = Axis is for looking up and
            down (pitch), 3 = Axis is for side to side movement, 4 = Axis is for
            turning left and right (yaw). Additionally, each axis can be designated
            as an absolute axis (like a joystick) or a relative axis (like the
            FPgaming trackball or the WingMan Warrior SpinControl). Absolute axes
            are defined as having a stopping position whereas relative axes don't
            have a stopping position and just go around and around. To designate
            an axis as a relative axis, add 16 to the above control number. For
            example, to set the Assassin 3D's axis U to be looking left and right,
            type 'joyadvaxisu 20'. As another example, to make your rudder pedals
            control turning left and right, type 'joyadvaxisr 4'.</td>
        </tr>
        <tr>
          <td>joyadvaxisy</td>
          <td>0</td>
          <td>joystick</td>
          <td>set mapping of DirectInput axis Y (typically joystick forward and
            backward). Allows the joystick to move forward and backward. Valid
            values: 0 = Axis not used, 1 = Axis is for forward and backward movement,
            2 = Axis is for looking up and down (pitch), 3 = Axis is for side
            to side movement, 4 = Axis is for turning left and right (yaw). Additionally,
            each axis can be designated as an absolute axis (like a joystick)
            or a relative axis (like the FPgaming trackball or the WingMan Warrior
            SpinControl). Absolute axes are defined as having a stopping position
            whereas relative axes don't have a stopping position and just go around
            and around. To designate an axis as a relative axis, add 16 to the
            above control number. For example, to set the Assassin 3D's axis U
            to be looking left and right, type 'joyadvaxisu 20'. As another example,
            to make your rudder pedals control turning left and right, type 'joyadvaxisr
            4'.</td>
        </tr>
        <tr>
          <td>joyadvaxisz</td>
          <td>0</td>
          <td>joystick</td>
          <td>mapping of DirectInput axis Z (typically joystick throttle). Not
            used.</td>
        </tr>
        <tr>
          <td>joyforwardsensitivity</td>
          <td>-1</td>
          <td>joystick</td>
          <td>set the ramp-up speed or how much joystick movement is required
            for moving "full speed" forward and backward (negative numbers invert
            directions)</td>
        </tr>
        <tr>
          <td>joyforwardthreshold</td>
          <td>0.150</td>
          <td>joystick</td>
          <td>set the dead-zone for moving forward and backward (If you have problems
            with your character moving forward or back when trying to stop or
            strafe, increase this number to .20)</td>
        </tr>
        <tr>
          <td>joyname</td>
          <td>0</td>
          <td>joystick</td>
          <td>set joystick name</td>
        </tr>
        <tr>
          <td>joypitchsensitivity</td>
          <td>1</td>
          <td>joystick</td>
          <td>set the speed or ratio used when you look up and down using the
            Assassin 3D (negative numbers invert directions)</td>
        </tr>
        <tr>
          <td>joypitchthreshold</td>
          <td>0.150</td>
          <td>joystick</td>
          <td>set the dead-zone for looking up and down (If you have problems
            with your character looking up or down when trying to stop or strafe,
            increase this number to .20)</td>
        </tr>
        <tr>
          <td>joysidesensitivity</td>
          <td>-1</td>
          <td>joystick</td>
          <td>set the ramp-up speed or how much joystick movement is required
            for moving "full speed" side to side (negative numbers invert directions)</td>
        </tr>
        <tr>
          <td>joysidethreshold</td>
          <td>0.150</td>
          <td>joystick</td>
          <td>set the dead-zone for moving side to side (If you have problems
            with your character moving sideways when trying to stop or walk along
            a ledge, increase this number to .20)</td>
        </tr>
        <tr>
          <td>joystick</td>
          <td>0</td>
          <td>joystick</td>
          <td>disable joystick (0 may give you a slight performance boost) [Flags:
            a]</td>
        </tr>
        <tr>
          <td>joywwhack1</td>
          <td>0</td>
          <td>joystick</td>
          <td>set to 1 for Logitech WingMan Warrior, maybe for other models also</td>
        </tr>
        <tr>
          <td>joywwhack2</td>
          <td>0</td>
          <td>joystick</td>
          <td>set to 1 for Logitech WingMan Warrior, maybe for other models also</td>
        </tr>
        <tr>
          <td>joyyawsensitivity</td>
          <td>-1</td>
          <td>joystick</td>
          <td>set the speed that or ratio used when you look left to right using
            the Assassin 3D (negative numbers invert directions)</td>
        </tr>
        <tr>
          <td>joyyawthreshold</td>
          <td>0.150</td>
          <td>joystick</td>
          <td>set the dead-zone for looking right and left (If you have problems
            with your character turning when trying to stop or strafe, increase
            this number to .20)</td>
        </tr>
        <tr>
          <td>kick</td>
          <td>&lt;name or userid or uniqueid&gt;</td>
          <td>server</td>
          <td>kick player from a server (server console or rcon only), Use the
            'users' command to get a list of userid's and uniqueid's. See kick,
            banid, writeid, removeid.</td>
        </tr>
        <tr>
          <td>kill</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>suicide</td>
        </tr>
        <tr>
          <td>lambert</td>
          <td>1.500</td>
          <td>unknown</td>
          <td>sets the player model shading value. -1.01 used to make players
            brighter. No longer has any effect.</td>
        </tr>
        <tr>
          <td>lcd_x</td>
          <td>0</td>
          <td>video</td>
          <td>screws up my screen</td>
        </tr>
        <tr>
          <td>lcd_yaw</td>
          <td>0</td>
          <td>video</td>
          <td>screws up my screen</td>
        </tr>
        <tr>
          <td>lightgamma</td>
          <td>2.500</td>
          <td>video</td>
          <td>set lighting gamma value</td>
        </tr>
        <tr>
          <td>list</td>
          <td>&nbsp;</td>
          <td>net</td>
          <td>lists local servers found by slist command</td>
        </tr>
        <tr>
          <td>listdemo</td>
          <td>&lt;demoname&gt;</td>
          <td>demo</td>
          <td>list info on demo file</td>
        </tr>
        <tr>
          <td>listid</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>list id numbers</td>
        </tr>
        <tr>
          <td>listip</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>list ip addresses in the filter ban list</td>
        </tr>
        <tr>
          <td>load</td>
          <td>&lt;name&gt;</td>
          <td>misc</td>
          <td>load a saved game</td>
        </tr>
        <tr>
          <td>loadas8bit</td>
          <td>0</td>
          <td>audio</td>
          <td>set to 1 to force 8-bit (lower quality) sounds (see hisound also)</td>
        </tr>
        <tr>
          <td>localinfo</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>show local info settings</td>
        </tr>
        <tr>
          <td>log</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td><on off |>enable/disable logging (put 'log on' in autoexex.cfg,
            NOT server.cfg)</td>
        </tr>
        <tr>
          <td>logaddress</td>
          <td>&lt;ip&gt; &lt;port&gt;</td>
          <td>server</td>
          <td>set address for logfile (to log to a remote machine)</td>
        </tr>
        <tr>
          <td>lookspring</td>
          <td>0</td>
          <td>mouse</td>
          <td>enable automatic view centering when +mlook is deactivated [Flags:
            a]</td>
        </tr>
        <tr>
          <td>lookstrafe</td>
          <td>0</td>
          <td>mouse</td>
          <td>enable mouse strafing when +mlook is deactivated [Flags: a]</td>
        </tr>
        <tr>
          <td>lservercfgfile</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set listen server config file (default is listenserver.cfg)</td>
        </tr>
        <tr>
          <td>map</td>
          <td>&lt;mapname&gt; </td>
          <td>server</td>
          <td>change to map half-life\tfc\mapname.bsp (.bsp not required) -- will
            disconnect any clients on the server, see changelevel and changelevel2
            to change maps without disconnecting clients</td>
        </tr>
        <tr>
          <td>mapcyclefile</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>specifies the name of the list of maps to cycle through on a server,
            default is mapcycle.txt</td>
        </tr>
        <tr>
          <td>maps</td>
          <td>&lt;substring&gt;</td>
          <td>server</td>
          <td>list maps containing substring, * lists all</td>
        </tr>
        <tr>
          <td>maxplayers</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set maximum number of clients allowed to connect to the server</td>
        </tr>
        <tr>
          <td>mcache</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>list model cache contents</td>
        </tr>
        <tr>
          <td>messagemode</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>prompt for a chat message to send to all clients connected to the
            server</td>
        </tr>
        <tr>
          <td>messagemode2</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>prompt for a chat message to send to your teammates only</td>
        </tr>
        <tr>
          <td>model</td>
          <td>0</td>
          <td>prefs</td>
          <td>If modelname is unspecified, this will display the current player
            model name. To change your player model, specify the name of a folder
            in Valve/models/player that contains a .mdl file. To view the model,
            start a multiplayer game and type chase_active 1. [Flags: ai]</td>
        </tr>
        <tr>
          <td>motd</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>display the message of the day (motd.txt) for the current server</td>
        </tr>
        <tr>
          <td>mp_allowmonsters</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>enable monsters in multiplayer mode (bots) [Flags: sv]</td>
        </tr>
        <tr>
          <td>mp_autocrosshair</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>enable aiming assistance for clients [Flags: sv]</td>
        </tr>
        <tr>
          <td>mp_consistency</td>
          <td>1</td>
          <td>unknown</td>
          <td>? [Flags: sv]</td>
        </tr>
        <tr>
          <td>mp_decals</td>
          <td>2000</td>
          <td>server</td>
          <td>set max number of decals to display in multiplayer (set lower for
            perfomance boost, but blast marks and logos will disappear sooner)
            [Flags: a]</td>
        </tr>
        <tr>
          <td>mp_defaultteam</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>mp_falldamage</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>enable realistic falling damage [Flags: sv]</td>
        </tr>
        <tr>
          <td>mp_flashlight</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>enable flashlights for clients [Flags: sv]</td>
        </tr>
        <tr>
          <td>mp_footsteps</td>
          <td>1</td>
          <td>server</td>
          <td>enable footstep sounds [Flags: sv]</td>
        </tr>
        <tr>
          <td>mp_forcerespawn</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>enable automatic forced respawns for players [Flags: sv]</td>
        </tr>
        <tr>
          <td>mp_fraglimit</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set the number of frags (by any single player) between map changes,
            see timelimit [Flags: sv]</td>
        </tr>
        <tr>
          <td>mp_friendlyfire</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>enable friendly fire in teamplay mode (mp_teamplay) [Flags: sv]</td>
        </tr>
        <tr>
          <td>mp_logecho</td>
          <td>1</td>
          <td>server</td>
          <td>enable logging of echo commands</td>
        </tr>
        <tr>
          <td>mp_logfile</td>
          <td>1</td>
          <td>server</td>
          <td>enable logging during multiplayer [Flags: sv]</td>
        </tr>
        <tr>
          <td>mp_teamlist</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>? [Flags: sv]</td>
        </tr>
        <tr>
          <td>mp_teamoverride</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>mp_teamplay</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set teamplay mode flags -- set this variable to the sum of the numbers
            by the options you want enabled: 1=teamplay on (always set this for
            teamplay mode), 2=half-damage friendly-fire, 4=no damage friendly-fire,
            8=half-damage friendly explosive, 16=no friendly explosive damage,
            128=half-damage armor friendly-fire, 256=no damage to armor from friendly-fire,
            512=half-damage armor friendly explosive, 1024=no damage to armor
            from friendly explosive, 2048=YOU take half damage from hitting Teammate
            with direct weaponfire, 4096=YOU take no damage from hitting Teammate
            with direct weaponfire, 8192=YOU take half damage from hitting Teammate
            with explosive weaponfire, 16384=YOU take no damage from hitting Teammate
            with explosive weaponfire, 32768=YOUR armor takes half damage from
            hitting Teammate with direct weaponfire, 65536=YOUR armor takes no
            damage from hitting Teammate with direct weaponfire, 131072=YOUR armor
            takes half damage from hitting Teammate with explosive weaponfire,
            262144=YOUR armor takes no damage from hitting Teammate with explosive
            weaponfire. <br>
            <br>
            A common setting used to deter spamming is 1 + 4 + 16 + 256 + 1024
            + 2048 + 8192 + 32768 + 131072 = 175381 [Flags: sv]</td>
        </tr>
        <tr>
          <td>mp_timelimit</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set the time (in minutes) between map changes, see fraglimit [Flags:
            sv]</td>
        </tr>
        <tr>
          <td>mp_weaponstay</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>enable permanent weapons [Flags: sv]</td>
        </tr>
        <tr>
          <td>m_filter</td>
          <td>0</td>
          <td>mouse</td>
          <td>enable mouse filtering (smoothing) [Flags: a]</td>
        </tr>
        <tr>
          <td>m_forward</td>
          <td>1</td>
          <td>mouse</td>
          <td>set mouse forward speed sensitivity multiplier [Flags: a]</td>
        </tr>
        <tr>
          <td>m_pitch</td>
          <td>-0.022</td>
          <td>mouse</td>
          <td>set mouse pitch (up and down motion) speed sensitivity multiplier.
            Note that NEGATIVE values result in an inverted mouse (moving mouse
            forward looks down), while positive values result in a non-inverted
            mouse (moving mouse forward looks up) [Flags: a]</td>
        </tr>
        <tr>
          <td>m_side</td>
          <td>0.800</td>
          <td>mouse</td>
          <td>set mouse strafing speed sensitivity multiplier [Flags: a]</td>
        </tr>
        <tr>
          <td>m_yaw</td>
          <td>0.022</td>
          <td>mouse</td>
          <td>set mouse yaw speed sensitivity multiplier [Flags: a]</td>
        </tr>
        <tr>
          <td>name</td>
          <td>0</td>
          <td>net</td>
          <td>set client player name [Flags: ai]</td>
        </tr>
        <tr>
          <td>net_address</td>
          <td>0</td>
          <td>net</td>
          <td>?</td>
        </tr>
        <tr>
          <td>net_chokeloop</td>
          <td>0</td>
          <td>net</td>
          <td>?</td>
        </tr>
        <tr>
          <td>net_drawslider</td>
          <td>0</td>
          <td>net</td>
          <td>?</td>
        </tr>
        <tr>
          <td>net_graph</td>
          <td>0</td>
          <td>net</td>
          <td>enables network condition graph that shows FPS, network latency,
            incoming server update rate, incoming bandwidth, outgoing bandwidth,
            and a running graph of ping (which is network latency plus delays
            caused by video rendering). Turn on the net_graph and try different
            values for the tweaking variables to find the best settings for your
            system and network conditions. Be sure to turn it back off since it
            will lower FPS some. [Flags: a]</td>
        </tr>
        <tr>
          <td>net_graphpos</td>
          <td>1</td>
          <td>net</td>
          <td>set position of network graph (if net_graph 1). 1=bottom right,
            2=bottom center, 3=bottom left [Flags: a]</td>
        </tr>
        <tr>
          <td>net_graphsolid</td>
          <td>1</td>
          <td>net</td>
          <td>enable solid graph if net_graph 1 [Flags: a]</td>
        </tr>
        <tr>
          <td>net_graphwidth</td>
          <td>192</td>
          <td>net</td>
          <td>set net_graph width [Flags: a]</td>
        </tr>
        <tr>
          <td>net_scale</td>
          <td>5</td>
          <td>net</td>
          <td>set net_graph vertical scale [Flags: a]</td>
        </tr>
        <tr>
          <td>net_showdrop</td>
          <td>0</td>
          <td>net</td>
          <td>enable display of dropped network packets</td>
        </tr>
        <tr>
          <td>net_showpackets</td>
          <td>0</td>
          <td>net</td>
          <td>enable network packet display</td>
        </tr>
        <tr>
          <td>new</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>internal command used to start a new game</td>
        </tr>
        <tr>
          <td>noclip</td>
          <td>&nbsp;</td>
          <td>cheats</td>
          <td>toggles clipping mode. when clipping disabled (noclip active), you
            can walk through walls and fly. See the cheats page for details.</td>
        </tr>
        <tr>
          <td>nosound</td>
          <td>0</td>
          <td>audio</td>
          <td>disable sounds (1 will make the game silent)</td>
        </tr>
        <tr>
          <td>notarget</td>
          <td>&nbsp;</td>
          <td>cheats</td>
          <td>toggle notarget mode where enemies ignore the player. See the cheats
            page for details.</td>
        </tr>
        <tr>
          <td>password</td>
          <td>0</td>
          <td>server</td>
          <td>set private server password (0 = public server, anyone can join)
            [Flags: i]</td>
        </tr>
        <tr>
          <td>path</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>display current search path for game files</td>
        </tr>
        <tr>
          <td>pausable</td>
          <td>1</td>
          <td>server</td>
          <td>enable whether or not clients can pause server game [Flags: sv]</td>
        </tr>
        <tr>
          <td>pause</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>pause game</td>
        </tr>
        <tr>
          <td>ping</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>display name and ping of all clients connected to the server</td>
        </tr>
        <tr>
          <td>pingservers</td>
          <td>&nbsp;</td>
          <td>net</td>
          <td>display pings of servers in the serverlist</td>
        </tr>
        <tr>
          <td>play</td>
          <td>&lt;filename&gt;</td>
          <td>scripts</td>
          <td>play a WAV audio file designated by filename</td>
        </tr>
        <tr>
          <td>playdemo</td>
          <td>&lt;filename&gt;</td>
          <td>demo</td>
          <td>play the demo in file Half-Life/valve/filename.dem at normal speed
            (use timedemo to play at max fps and report average fps).</td>
        </tr>
        <tr>
          <td>playvol</td>
          <td>&nbsp;</td>
          <td>demo</td>
          <td>set demo playback volume</td>
        </tr>
        <tr>
          <td>pointfile</td>
          <td>&lt;filename&gt;</td>
          <td>developer</td>
          <td>try to load maps\filename.pts</td>
        </tr>
        <tr>
          <td>port</td>
          <td>27015</td>
          <td>net</td>
          <td>set the default connect port</td>
        </tr>
        <tr>
          <td>ppdemostart</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>precache</td>
          <td>1</td>
          <td>prefs</td>
          <td>enable pre-loading of all needed files at map start (1 may help
            skipping/stoppoing problems)</td>
        </tr>
        <tr>
          <td>ptrack</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>crash the computer (well, mine at least)</td>
        </tr>
        <tr>
          <td>pushlatency</td>
          <td>-50</td>
          <td>net</td>
          <td>set pushlatency (try around -1/2 to -1 times ping) -- some people
            say using non-integer values (like -100.0521) reduces lag [Flags:
            a]</td>
        </tr>
        <tr>
          <td>quit</td>
          <td>&nbsp;</td>
          <td>misc</td>
          <td>exit to windows without confirmation</td>
        </tr>
        <tr>
          <td>rate</td>
          <td>9001.204</td>
          <td>old</td>
          <td>replaced by cl_rate</td>
        </tr>
        <tr>
          <td>rcon</td>
          <td>&lt;password&gt; "commands"</td>
          <td>server</td>
          <td>remote console operation of a server. "commands" can be any console
            commands or variable settings. <password>is required if the server
            password variable is set to anything except 0, unless client password
            variable is set to the same value</td>
        </tr>
        <tr>
          <td>rcon_address</td>
          <td>0</td>
          <td>server</td>
          <td>set remote console ip address</td>
        </tr>
        <tr>
          <td>rcon_password</td>
          <td>0</td>
          <td>server</td>
          <td>set password for remote console operation</td>
        </tr>
        <tr>
          <td>rcon_port</td>
          <td>0</td>
          <td>server</td>
          <td>set remote console port</td>
        </tr>
        <tr>
          <td>reconnect</td>
          <td>&nbsp;</td>
          <td>net</td>
          <td>reconnect to the current server</td>
        </tr>
        <tr>
          <td>record</td>
          <td>&lt;filename&gt;</td>
          <td>demo</td>
          <td>starts recording demo to Half-Live\valve\filename.dem, see stop</td>
        </tr>
        <tr>
          <td>reload</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>reload current map</td>
        </tr>
        <tr>
          <td>removedemo</td>
          <td>&lt;demo&gt; &lt;segmt&gt;</td>
          <td>demo</td>
          <td>remove segment from a demo</td>
        </tr>
        <tr>
          <td>removeid</td>
          <td>&lt;userid or uniqueid&gt;</td>
          <td>server</td>
          <td>Un-ban a user (remove the id from the ban list). See users, kick,
            banid, writeid, removeid</td>
        </tr>
        <tr>
          <td>removeip</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>remove ip from filterban list</td>
        </tr>
        <tr>
          <td>restart</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>restarts the current multiplayer map (remove decals, blood, bulletholes,
            scores, etc.)</td>
        </tr>
        <tr>
          <td>retry</td>
          <td>&nbsp;</td>
          <td>net</td>
          <td>try reconnecting to the last server four more times (after four
            failed attempts)</td>
        </tr>
        <tr>
          <td>room_delay</td>
          <td>0</td>
          <td>audio</td>
          <td>3D sound setting</td>
        </tr>
        <tr>
          <td>room_dlylp</td>
          <td>2</td>
          <td>audio</td>
          <td>3D sound setting</td>
        </tr>
        <tr>
          <td>room_feedback</td>
          <td>0.520</td>
          <td>audio</td>
          <td>3D sound setting</td>
        </tr>
        <tr>
          <td>room_left</td>
          <td>0.010</td>
          <td>audio</td>
          <td>3D sound setting</td>
        </tr>
        <tr>
          <td>room_lp</td>
          <td>0</td>
          <td>audio</td>
          <td>3D sound setting</td>
        </tr>
        <tr>
          <td>room_mod</td>
          <td>0</td>
          <td>audio</td>
          <td>3D sound setting</td>
        </tr>
        <tr>
          <td>room_off</td>
          <td>0</td>
          <td>audio</td>
          <td>3D sound setting</td>
        </tr>
        <tr>
          <td>room_refl</td>
          <td>0.900</td>
          <td>audio</td>
          <td>3D sound setting</td>
        </tr>
        <tr>
          <td>room_rvblp</td>
          <td>1</td>
          <td>audio</td>
          <td>3D sound setting</td>
        </tr>
        <tr>
          <td>room_size</td>
          <td>0.060</td>
          <td>audio</td>
          <td>3D sound setting</td>
        </tr>
        <tr>
          <td>room_type</td>
          <td>18</td>
          <td>audio</td>
          <td>3D sound setting</td>
        </tr>
        <tr>
          <td>r_bmodelhighfrac</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>? [Flags: a]</td>
        </tr>
        <tr>
          <td>r_bmodelinterp</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>r_cachestudio</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>r_decals</td>
          <td>4096</td>
          <td>prefs</td>
          <td>set max number of blast mark decals in single-player (lower number
            will improves perfomance some, but decals wil disappear sooner)</td>
        </tr>
        <tr>
          <td>r_drawentities</td>
          <td>1</td>
          <td>developer</td>
          <td>enable rendering of entities: 0=no entities, 1=normal entities,
            2=no textures, 3=hitbox only, 4=translucent hitboxes</td>
        </tr>
        <tr>
          <td>r_drawviewmodel</td>
          <td>1</td>
          <td>prefs</td>
          <td>enable drawing player weapon model (off improves perfomance a bit)</td>
        </tr>
        <tr>
          <td>r_dynamic</td>
          <td>1</td>
          <td>prefs</td>
          <td>enable dynamic lighting -- the light reflections glowing objects
            make on other objects nearby, such as rockets and the flashlight (0
            may improve fps)</td>
        </tr>
        <tr>
          <td>r_fullbright</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable max brightness, local game only</td>
        </tr>
        <tr>
          <td>r_glowshellfreq</td>
          <td>2.200</td>
          <td>prefs</td>
          <td>set the frequency of shimmering on glowing shells around flags and
            keys</td>
        </tr>
        <tr>
          <td>r_lightmap</td>
          <td>0</td>
          <td>developer</td>
          <td>Software rendering mode only -- display only one of the four possible
            lightmaps (valid values are 0, 1, 2, 3). Useful for viewing range
            of switched lights</td>
        </tr>
        <tr>
          <td>r_mirroralpha</td>
          <td>1</td>
          <td>video</td>
          <td>enable reflective textures (0 may improve performance)</td>
        </tr>
        <tr>
          <td>r_mmx</td>
          <td>1</td>
          <td>prefs</td>
          <td>force MMX calculation methods for MMX CPU's (set to 1 if your CPU
            supports MMX! Any p2 does, as do most newer AMD and Cyrix chips. If
            using 1 reduces perfomance, set back to 0)</td>
        </tr>
        <tr>
          <td>r_netgraph</td>
          <td>&nbsp;</td>
          <td>old</td>
          <td>replaced by net_graph</td>
        </tr>
        <tr>
          <td>r_norefresh</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable clearing hud and console before redrawing</td>
        </tr>
        <tr>
          <td>r_novis</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable drawing underwater polygons (must be 1 for r_wateralpha to
            work)</td>
        </tr>
        <tr>
          <td>r_shadows</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable player shadows (decreases performance and doesn't look that
            great)</td>
        </tr>
        <tr>
          <td>r_speeds</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable display of average fps, draw speed, and polygon info (use
            to see running FPS info)</td>
        </tr>
        <tr>
          <td>r_traceglow</td>
          <td>0</td>
          <td>prefs</td>
          <td>enable inclusion of monsters in glow sprite occlusion checking (1
            will decrease perfomance)</td>
        </tr>
        <tr>
          <td>r_wadtextures</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>r_wateralpha</td>
          <td>1</td>
          <td>prefs</td>
          <td>enable alpha blending underwater (r_novis muse be 1 for this to
            work)</td>
        </tr>
        <tr>
          <td>save</td>
          <td>&lt;name&gt;</td>
          <td>misc</td>
          <td>save the current game (1p only), see load</td>
        </tr>
        <tr>
          <td>say</td>
          <td>"text"</td>
          <td>scripts</td>
          <td>echo text to the screen of all players. A percent sign followed
            by A, H, or I in the text will be replaced by your player's current
            Armor, Health, and ID'd player, respectively. For example: say "I
            have %A armor, %H health, and am staring at player %I" will look like
            "I have 45 armor, 97 health, and am staring at player CoolGuy".</td>
        </tr>
        <tr>
          <td>say_team</td>
          <td>"text"</td>
          <td>scripts</td>
          <td>echo text to the screen of team members only. A percent sign followed
            by A, H, or I in the text will be replaced by your player's current
            Armor, Health, and ID'd player, respectively. For example: say "I
            have %A armor, %H health, and am staring at player %I" will look like
            "I have 45 armor, 97 health, and am staring at player CoolGuy".</td>
        </tr>
        <tr>
          <td>screenshot</td>
          <td>&nbsp;</td>
          <td>misc</td>
          <td>capture the current screen and save to disk</td>
        </tr>
        <tr>
          <td>scr_centertime</td>
          <td>2</td>
          <td>prefs</td>
          <td>set how long server messages remain on screen</td>
        </tr>
        <tr>
          <td>scr_connectmsg</td>
          <td>0</td>
          <td>scripts</td>
          <td>display "msg" in lower left of screen -- use "" for "msg" to clear</td>
        </tr>
        <tr>
          <td>scr_connectmsg1</td>
          <td>0</td>
          <td>scripts</td>
          <td>display "msg" in lower left of screen -- use "" for "msg" to clear</td>
        </tr>
        <tr>
          <td>scr_connectmsg2</td>
          <td>0</td>
          <td>scripts</td>
          <td>display "msg" in lower left of screen -- use "" for "msg" to clear</td>
        </tr>
        <tr>
          <td>scr_conspeed</td>
          <td>600</td>
          <td>prefs</td>
          <td>set the console scroll speed (try 3000 to make it nearly instant)</td>
        </tr>
        <tr>
          <td>scr_ofsx</td>
          <td>0</td>
          <td>scripts</td>
          <td>set screen message x-offset</td>
        </tr>
        <tr>
          <td>scr_ofsy</td>
          <td>0</td>
          <td>scripts</td>
          <td>set screen message y-offset</td>
        </tr>
        <tr>
          <td>scr_ofsz</td>
          <td>0</td>
          <td>scripts</td>
          <td>set screen message z-offset</td>
        </tr>
        <tr>
          <td>scr_printspeed</td>
          <td>8</td>
          <td>scripts</td>
          <td>set screen message print speed</td>
        </tr>
        <tr>
          <td>sendents</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>sensitivity</td>
          <td>3</td>
          <td>mouse</td>
          <td>set mouse sensitivity [Flags: a]</td>
        </tr>
        <tr>
          <td>servercfgfile</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set server .cfg file (default is server.cfg)</td>
        </tr>
        <tr>
          <td>serverinfo</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>display server information (variables flagged sv)</td>
        </tr>
        <tr>
          <td>setdemoinfo</td>
          <td>&lt;demo&gt; &lt;segmt&gt; info</td>
          <td>demo</td>
          <td>add info to demo: info = title "text", play tracknum, fade &lt;IN|OUT&gt;&lt;FAST|SLOW&gt;</td>
        </tr>
        <tr>
          <td>setinfo</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>display model name, color settings, name, rate, and model crc</td>
        </tr>
        <tr>
          <td>setmaster</td>
          <td>&lt;ip or hostname&gt;</td>
          <td>server</td>
          <td>set the master server (server list manager) for the server, see
            heartbeat</td>
        </tr>
        <tr>
          <td>showinfo</td>
          <td>&nbsp;</td>
          <td>net</td>
          <td>enable display of all packets</td>
        </tr>
        <tr>
          <td>showpause</td>
          <td>1</td>
          <td>developer</td>
          <td>enable pause graphic display</td>
        </tr>
        <tr>
          <td>showram</td>
          <td>0</td>
          <td>developer</td>
          <td>enable display of available RAM</td>
        </tr>
        <tr>
          <td>shutdownserver</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>shut down the server</td>
        </tr>
        <tr>
          <td>sizedown</td>
          <td>&nbsp;</td>
          <td>video</td>
          <td>decrease screen size (will increase FPS, won't work on all video
            cards)</td>
        </tr>
        <tr>
          <td>sizeup</td>
          <td>&nbsp;</td>
          <td>video</td>
          <td>increase screen size (will decrease FPS, won't work on all video
            cards)</td>
        </tr>
        <tr>
          <td>skill</td>
          <td>3</td>
          <td>misc</td>
          <td>set the skill level (single player, coop)</td>
        </tr>
        <tr>
          <td>skin</td>
          <td>0</td>
          <td>prefs</td>
          <td>set model skin (anyone know how to put more than one skin in a .mdl
            file so we can use this?) [Flags: ai]</td>
        </tr>
        <tr>
          <td>sk_12mm_bullet1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_12mm_bullet2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_12mm_bullet3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_9mmAR_bullet1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_9mmAR_bullet2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_9mmAR_bullet3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_9mm_bullet1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_9mm_bullet2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_9mm_bullet3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_agrunt_dmg_punch1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_agrunt_dmg_punch2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_agrunt_dmg_punch3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_agrunt_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_agrunt_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_agrunt_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_apache_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_apache_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_apache_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_barney_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_barney_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_barney_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_battery1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_battery2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_battery3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bigmomma_dmg_blast1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bigmomma_dmg_blast2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bigmomma_dmg_blast3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bigmomma_dmg_slash1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bigmomma_dmg_slash2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bigmomma_dmg_slash3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bigmomma_health_factor1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bigmomma_health_factor2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bigmomma_health_factor3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bigmomma_radius_blast1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bigmomma_radius_blast2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bigmomma_radius_blast3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bullsquid_dmg_bite1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bullsquid_dmg_bite2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bullsquid_dmg_bite3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bullsquid_dmg_spit1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bullsquid_dmg_spit2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bullsquid_dmg_spit3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bullsquid_dmg_whip1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bullsquid_dmg_whip2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bullsquid_dmg_whip3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bullsquid_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bullsquid_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_bullsquid_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_controller_dmgball1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_controller_dmgball2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_controller_dmgball3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_controller_dmgzap1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_controller_dmgzap2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_controller_dmgzap3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_controller_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_controller_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_controller_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_controller_speedball1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_controller_speedball2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_controller_speedball3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_gargantua_dmg_fire1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_gargantua_dmg_fire2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_gargantua_dmg_fire3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_gargantua_dmg_slash1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_gargantua_dmg_slash2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_gargantua_dmg_slash3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_gargantua_dmg_stomp1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_gargantua_dmg_stomp2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_gargantua_dmg_stomp3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_gargantua_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_gargantua_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_gargantua_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hassassin_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hassassin_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hassassin_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_headcrab_dmg_bite1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_headcrab_dmg_bite2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_headcrab_dmg_bite3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_headcrab_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_headcrab_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_headcrab_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_healthcharger1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_healthcharger2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_healthcharger3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_healthkit1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_healthkit2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_healthkit3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hgrunt_gspeed1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hgrunt_gspeed2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hgrunt_gspeed3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hgrunt_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hgrunt_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hgrunt_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hgrunt_kick1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hgrunt_kick2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hgrunt_kick3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hgrunt_pellets1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hgrunt_pellets2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hgrunt_pellets3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hornet_dmg1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hornet_dmg2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_hornet_dmg3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_houndeye_dmg_blast1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_houndeye_dmg_blast2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_houndeye_dmg_blast3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_houndeye_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_houndeye_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_houndeye_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_ichthyosaur_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_ichthyosaur_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_ichthyosaur_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_ichthyosaur_shake1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_ichthyosaur_shake2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_ichthyosaur_shake3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_islave_dmg_claw1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_islave_dmg_claw2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_islave_dmg_claw3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_islave_dmg_clawrake1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_islave_dmg_clawrake2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_islave_dmg_clawrake3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_islave_dmg_zap1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_islave_dmg_zap2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_islave_dmg_zap3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_islave_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_islave_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_islave_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_leech_dmg_bite1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_leech_dmg_bite2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_leech_dmg_bite3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_leech_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_leech_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_leech_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_miniturret_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_miniturret_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_miniturret_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_arm1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_arm2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_arm3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_chest1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_chest2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_chest3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_head1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_head2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_head3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_leg1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_leg2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_leg3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_stomach1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_stomach2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_monster_stomach3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_nihilanth_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_nihilanth_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_nihilanth_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_nihilanth_zap1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_nihilanth_zap2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_nihilanth_zap3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_arm1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_arm2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_arm3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_chest1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_chest2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_chest3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_head1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_head2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_head3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_leg1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_leg2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_leg3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_stomach1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_stomach2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_player_stomach3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_357_bullet1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_357_bullet2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_357_bullet3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_9mmAR_bullet1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_9mmAR_bullet2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_9mmAR_bullet3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_9mmAR_grenade1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_9mmAR_grenade2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_9mmAR_grenade3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_9mm_bullet1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_9mm_bullet2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_9mm_bullet3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_buckshot1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_buckshot2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_buckshot3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_crowbar1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_crowbar2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_crowbar3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_egon_narrow1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_egon_narrow2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_egon_narrow3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_egon_wide1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_egon_wide2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_egon_wide3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_gauss1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_gauss2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_gauss3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_hand_grenade1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_hand_grenade2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_hand_grenade3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_rpg1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_rpg2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_rpg3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_satchel1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_satchel2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_satchel3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_tripmine1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_tripmine2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_tripmine3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_xbow_bolt_client1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_xbow_bolt_client2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_xbow_bolt_client3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_xbow_bolt_monster1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_xbow_bolt_monster2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_plr_xbow_bolt_monster3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_scientist_heal1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_scientist_heal2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_scientist_heal3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_scientist_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_scientist_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_scientist_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_sentry_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_sentry_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_sentry_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_snark_dmg_bite1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_snark_dmg_bite2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_snark_dmg_bite3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_snark_dmg_pop1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_snark_dmg_pop2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_snark_dmg_pop3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_snark_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_snark_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_snark_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_suitcharger1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_suitcharger2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_suitcharger3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_turret_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_turret_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_turret_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_zombie_dmg_both_slash1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_zombie_dmg_both_slash2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_zombie_dmg_both_slash3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_zombie_dmg_one_slash1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_zombie_dmg_one_slash2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_zombie_dmg_one_slash3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_zombie_health1</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_zombie_health2</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>sk_zombie_health3</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>set single-player game parameter, such as damage done by a certain
            weapon or attacks by a certain monster (1, 2, or 3 indicates difficulty
            level) [Flags: 1p]</td>
        </tr>
        <tr>
          <td>slist</td>
          <td>&nbsp;</td>
          <td>net</td>
          <td>search for local servers, store in serverlist</td>
        </tr>
        <tr>
          <td>slot1</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>select weapon group 1 (or menu item 1) see use</td>
        </tr>
        <tr>
          <td>slot10</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>select weapon group 10 (or menu item 10) see use</td>
        </tr>
        <tr>
          <td>slot2</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>select weapon group 2 (or menu item 2) see use</td>
        </tr>
        <tr>
          <td>slot3</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>select weapon group 3 (or menu item 3) see use</td>
        </tr>
        <tr>
          <td>slot4</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>select weapon group 4 (or menu item 4) see use</td>
        </tr>
        <tr>
          <td>slot5</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>select weapon group 5 (or menu item 5) see use</td>
        </tr>
        <tr>
          <td>slot6</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>select weapon group 6 (or menu item 6) see use</td>
        </tr>
        <tr>
          <td>slot7</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>select weapon group 7 (or menu item 7) see use</td>
        </tr>
        <tr>
          <td>slot8</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>select weapon group 8 (or menu item 8) see use</td>
        </tr>
        <tr>
          <td>slot9</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>select weapon group 9 (or menu item 9) see use</td>
        </tr>
        <tr>
          <td>snapshot</td>
          <td>&nbsp;</td>
          <td>misc</td>
          <td>capture screenshot and save to disk</td>
        </tr>
        <tr>
          <td>snapto</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>snd_noextraupdate</td>
          <td>0</td>
          <td>audio</td>
          <td>disable 'extra' sound system updates -- only try 1 if you have sound
            problems</td>
        </tr>
        <tr>
          <td>snd_show</td>
          <td>0</td>
          <td>audio</td>
          <td>enable display of sounds as they are played</td>
        </tr>
        <tr>
          <td>soundfade</td>
          <td>&lt;params&gt;</td>
          <td>audio</td>
          <td>set sound fade properties (params = &lt;%&gt;<hold>[<out><int>])</td>
        </tr>
        <tr>
          <td>soundinfo</td>
          <td>&nbsp;</td>
          <td>audio</td>
          <td>display number of: stereo channels, samples, samplebits, speed,
            DMA, and sound channels</td>
        </tr>
        <tr>
          <td>soundlist</td>
          <td>&nbsp;</td>
          <td>audio</td>
          <td>display list of all loaded sounds</td>
        </tr>
        <tr>
          <td>spawn</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>internal command; not valid from console</td>
        </tr>
        <tr>
          <td>speak</td>
          <td>&lt;word&gt;</td>
          <td>misc</td>
          <td>say something over the intercom (see console help for the 622 available
            words), to use in an alias, surround in quotes with no spaces: alias
            count "speak one,two,three_comma,four,five,six,_period"</td>
        </tr>
        <tr>
          <td>special</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>displays the "special" menu for a class, like +attack2 but lag-resistant
            (choose menu item with 'menuselect X')</td>
        </tr>
        <tr>
          <td>spectator</td>
          <td>0</td>
          <td>controls</td>
          <td>enter spectator mode if enabled [Flags: i]</td>
        </tr>
        <tr>
          <td>spk</td>
          <td>&nbsp;</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>startdemos</td>
          <td>&nbsp;</td>
          <td>demo</td>
          <td>start playing demos in a loop, see demos</td>
        </tr>
        <tr>
          <td>startmovie</td>
          <td>&lt;file&gt;</td>
          <td>demo</td>
          <td>the commands 'startmovie' and 'endmovie' start and stop recordding
            to a video stream, that is basically a bunch of bitmap images in a
            single file. You use the command like this: From the console type
            in: startmovie <filename>then enter a map using the map command from
            the console. I have had problems starting up the comand while in a
            map with the current version of half life but not with the origional
            CD copy. You need to issue the endmoive command to stop it. Note that
            this takes up a large amount of disk space. Then you need to compile
            a program called 'mkmovie' in the valve utils from the SDK (see the
            misc files section), and use this program to extract all the bitmaps
            from within the single video stream file. Then you use a program such
            as Adobe Premiere to string them together into an AVI, or mpg if you
            have the plugins. Be sure to import them such that their duration
            is only frame. You need a fast computer to do this properly, if not
            you will get like 15 frames per second, which is fine for most people,
            and still gets you a useable ingame video stream. If you have a slow
            pc, be sure to set the avi to 15 frames per second, but if your pc
            is fast then 24 or 30 frames per second is good too. Thanks to Evan
            <ace12ga>for that info.</td>
        </tr>
        <tr>
          <td>status</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>for each client list: user#, frags, name, frame rate, frame latency,
            ping, drop %</td>
        </tr>
        <tr>
          <td>stop</td>
          <td>&nbsp;</td>
          <td>demo</td>
          <td>stops recording a demo, see record</td>
        </tr>
        <tr>
          <td>stopdemo</td>
          <td>&nbsp;</td>
          <td>demo</td>
          <td>stop playing a demo</td>
        </tr>
        <tr>
          <td>stopsound</td>
          <td>&nbsp;</td>
          <td>audio</td>
          <td>stop playing current sound</td>
        </tr>
        <tr>
          <td>stuffcmds</td>
          <td>&nbsp;</td>
          <td>developer</td>
          <td>used to initialize client console commands from server</td>
        </tr>
        <tr>
          <td>suitvolume</td>
          <td>0.250</td>
          <td>audio</td>
          <td>set HEV suit volume [Flags: a]</td>
        </tr>
        <tr>
          <td>sv_accelerate</td>
          <td>10</td>
          <td>server</td>
          <td>set player acceleration [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_aim</td>
          <td>0</td>
          <td>server</td>
          <td>enable aiming assistance for clients [Flags: asv]</td>
        </tr>
        <tr>
          <td>sv_airaccelerate</td>
          <td>10</td>
          <td>server</td>
          <td>set in-air acceleration for a server (higher makes it easier to
            move while flying through the air or jumping, Mario Brothers - style)
            [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_airmove</td>
          <td>1</td>
          <td>server</td>
          <td>enable clients ability to move in air [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_allowdownload</td>
          <td>1</td>
          <td>server</td>
          <td>enable allowing clients to download maps and decals</td>
        </tr>
        <tr>
          <td>sv_allowupload</td>
          <td>1</td>
          <td>server</td>
          <td>enable allowing clients to upload maps and decals</td>
        </tr>
        <tr>
          <td>sv_allow_download</td>
          <td>&nbsp;</td>
          <td>old</td>
          <td>replaced by sv_allowdownload</td>
        </tr>
        <tr>
          <td>sv_allow_upload</td>
          <td>&nbsp;</td>
          <td>old</td>
          <td>replaced by sv_allowupload</td>
        </tr>
        <tr>
          <td>sv_bounce</td>
          <td>1</td>
          <td>server</td>
          <td>enable bounce pads [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_challengetime</td>
          <td>15</td>
          <td>server</td>
          <td>set time to allow clients to complete connection</td>
        </tr>
        <tr>
          <td>sv_cheats</td>
          <td>1</td>
          <td>server</td>
          <td>enable cheats [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_clienttrace</td>
          <td>1</td>
          <td>server</td>
          <td>set client bounding box size (for collisions, not clipping) [Flags:
            sv]</td>
        </tr>
        <tr>
          <td>sv_clipmode</td>
          <td>0</td>
          <td>server</td>
          <td>set client clipping mode [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_contact</td>
          <td>0</td>
          <td>unknown</td>
          <td>? [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_failuretime</td>
          <td>0.5</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>sv_filterban</td>
          <td>1</td>
          <td>unknown</td>
          <td>enable ip banning</td>
        </tr>
        <tr>
          <td>sv_friction</td>
          <td>4</td>
          <td>server</td>
          <td>set friction [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_gravity</td>
          <td>800</td>
          <td>server</td>
          <td>set gravity (lower is less gravity, higher jumps) [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_instancedbaseline</td>
          <td>1</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>sv_lan</td>
          <td>0</td>
          <td>server</td>
          <td>enable LAN server mode</td>
        </tr>
        <tr>
          <td>sv_logrelay</td>
          <td>0</td>
          <td>server</td>
          <td>?</td>
        </tr>
        <tr>
          <td>sv_maxrate</td>
          <td>0</td>
          <td>server</td>
          <td>set the max data transfer rate in bytes per second for any one client
            on the server. Setting this to 0 or any value over 10000 defaults
            to 10000. [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_maxspectators</td>
          <td>8</td>
          <td>server</td>
          <td>set max number of spectators</td>
        </tr>
        <tr>
          <td>sv_maxspeed</td>
          <td>270</td>
          <td>server</td>
          <td>set max player speed (for ALL clients) [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_maxunlag</td>
          <td>0.5</td>
          <td>server</td>
          <td>set the maximum number of seconds of lag the server will try to
            compensate for (if sv_unlag is 1). Suggested values are 0.3 to 0.6.
            Higher numbers will make high-ping players jump around more as their
            lag is compensated for.</td>
        </tr>
        <tr>
          <td>sv_maxupdaterate</td>
          <td>60</td>
          <td>server</td>
          <td>set the maximum number of times per second to update clients</td>
        </tr>
        <tr>
          <td>sv_maxvelocity</td>
          <td>2000</td>
          <td>server</td>
          <td>set max object velocity</td>
        </tr>
        <tr>
          <td>sv_minrate</td>
          <td>0</td>
          <td>server</td>
          <td>set the min data transfer rate in bytes per second for any one client
            on the server. Setting this to 0 or any value under 500 defaults to
            500. [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_minupdaterate</td>
          <td>1</td>
          <td>server</td>
          <td>set the minimum number of times per second to update clients</td>
        </tr>
        <tr>
          <td>sv_newunit</td>
          <td>0</td>
          <td>server</td>
          <td>?</td>
        </tr>
        <tr>
          <td>sv_password</td>
          <td>0</td>
          <td>server</td>
          <td>set server password [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_skycolor_b</td>
          <td>0</td>
          <td>server</td>
          <td>set sky color blue value</td>
        </tr>
        <tr>
          <td>sv_skycolor_g</td>
          <td>0</td>
          <td>server</td>
          <td>set sky color green value</td>
        </tr>
        <tr>
          <td>sv_skycolor_r</td>
          <td>0</td>
          <td>server</td>
          <td>set sky color red value</td>
        </tr>
        <tr>
          <td>sv_skyname</td>
          <td>0</td>
          <td>server</td>
          <td>set sky texture</td>
        </tr>
        <tr>
          <td>sv_skyvec_x</td>
          <td>0</td>
          <td>server</td>
          <td>set sky x-axis orientation</td>
        </tr>
        <tr>
          <td>sv_skyvec_y</td>
          <td>0</td>
          <td>server</td>
          <td>set sky y-axis orientation</td>
        </tr>
        <tr>
          <td>sv_skyvec_z</td>
          <td>0</td>
          <td>server</td>
          <td>set sky z-axis orientation</td>
        </tr>
        <tr>
          <td>sv_spectalk</td>
          <td>1</td>
          <td>server</td>
          <td>enable allowing spectator clients to chat</td>
        </tr>
        <tr>
          <td>sv_spectatormaxspeed</td>
          <td>500</td>
          <td>server</td>
          <td>set spectator max movement speed</td>
        </tr>
        <tr>
          <td>sv_spectator_password</td>
          <td>0</td>
          <td>server</td>
          <td>set spectator password</td>
        </tr>
        <tr>
          <td>sv_stepsize</td>
          <td>18</td>
          <td>server</td>
          <td>set monster and player automatic step-up size (larger values allow
            auto-climbing of steeper slopes) [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_stopspeed</td>
          <td>100</td>
          <td>server</td>
          <td>set the speed at which the server considers a player as beginning
            to stop (used for prediction) [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_timeout</td>
          <td>65</td>
          <td>server</td>
          <td>set timeout inactivity limit</td>
        </tr>
        <tr>
          <td>sv_unlag</td>
          <td>1</td>
          <td>server</td>
          <td>enable server lag compensation (keep this on and tell clients who
            prefer it off to use cl_lc 0)</td>
        </tr>
        <tr>
          <td>sv_unlagpush</td>
          <td>0</td>
          <td>server</td>
          <td>enable server push lag compensation</td>
        </tr>
        <tr>
          <td>sv_unlagsamples</td>
          <td>1</td>
          <td>server</td>
          <td>set the number of client ping samples to average together to determine
            the ping the server will try to compensate for (if sv_unlag is 1)</td>
        </tr>
        <tr>
          <td>sv_wateraccelerate</td>
          <td>10</td>
          <td>server</td>
          <td>set in-water acceleration [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_wateramp</td>
          <td>0</td>
          <td>server</td>
          <td>enable amplified (higher) waves in water; clients can set with gl_wateramp</td>
        </tr>
        <tr>
          <td>sv_waterfriction</td>
          <td>1</td>
          <td>server</td>
          <td>set friction underwater [Flags: sv]</td>
        </tr>
        <tr>
          <td>sv_zmax</td>
          <td>4096</td>
          <td>server</td>
          <td>set max zbuffer size</td>
        </tr>
        <tr>
          <td>swapdemo</td>
          <td>&lt;demo&gt;&lt;seg&gt;&lt;seg&gt;</td>
          <td>demo</td>
          <td>swap two segments' positions in a demo</td>
        </tr>
        <tr>
          <td>sys_ticrate</td>
          <td>0.050</td>
          <td>old</td>
          <td>GONE: set system ticrate</td>
        </tr>
        <tr>
          <td>s_2dvolume</td>
          <td>0.880</td>
          <td>audio</td>
          <td>Maximum volume at which 2D sounds are played. By the nature of the
            filters being applied to the A3D buffers, they are quieter then their
            2D counterparts. Hence it is important to quiet the 2D sounds to normalize
            volume. Valid range is 0 to 1.0</td>
        </tr>
        <tr>
          <td>s_a3d</td>
          <td>0</td>
          <td>audio</td>
          <td>enable A3D support (0 may improve performance) [Flags: a]</td>
        </tr>
        <tr>
          <td>s_automax_distance</td>
          <td>30</td>
          <td>audio</td>
          <td>set distance for max sound volume [Flags: a]</td>
        </tr>
        <tr>
          <td>s_automin_distance</td>
          <td>2</td>
          <td>audio</td>
          <td>set distance for min sound volume [Flags: a]</td>
        </tr>
        <tr>
          <td>s_blipdir</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>s_bloat</td>
          <td>2</td>
          <td>audio</td>
          <td>A3D 2.0 only. Bloat factor for polygons. This effectively scales
            each polygon by a certain amount. This is a rough way to fill holes
            left by unrendered small polygons. [Flags: a]</td>
        </tr>
        <tr>
          <td>s_buffersize</td>
          <td>65536</td>
          <td>audio</td>
          <td>set sound buffer size</td>
        </tr>
        <tr>
          <td>s_disable_a3d</td>
          <td>&nbsp;</td>
          <td>audio</td>
          <td>disabe A3D support</td>
        </tr>
        <tr>
          <td>s_distance</td>
          <td>60</td>
          <td>audio</td>
          <td>adjusts the ratio of game units to meters - affecting velocity,
            positioning, and distance. The higher this number, the closer everything
            gets (in audio terms). Valid range is 0 to infinity. [Flags: a]</td>
        </tr>
        <tr>
          <td>s_doppler</td>
          <td>0</td>
          <td>audio</td>
          <td>adjusts doppler effect - this setting is very sensitive which is
            why it is disabled by default. Valid range is 0 to 10. [Flags: a]</td>
        </tr>
        <tr>
          <td>s_eax</td>
          <td>0</td>
          <td>audio</td>
          <td>enable EAX support (0 may improve performance) [Flags: a]</td>
        </tr>
        <tr>
          <td>s_enable_a3d</td>
          <td>&nbsp;</td>
          <td>audio</td>
          <td>enable A3D support</td>
        </tr>
        <tr>
          <td>s_geometry</td>
          <td>1</td>
          <td>audio</td>
          <td>A3D 2.0 only. enables geometry rendering on/off. When disabled (0),
            geometry is not processed at all.</td>
        </tr>
        <tr>
          <td>s_leafnum</td>
          <td>0</td>
          <td>unknown</td>
          <td>? [Flags: a]</td>
        </tr>
        <tr>
          <td>s_materials</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>s_max_distance</td>
          <td>1000</td>
          <td>audio</td>
          <td>Maximum distance from the listener before rolloff is no longer applied.
            Valid range is s_min_distance to infinity [Flags: a]</td>
        </tr>
        <tr>
          <td>s_min_distance</td>
          <td>8</td>
          <td>audio</td>
          <td>Minimum distance a source will be from the listener before rolloff
            is applied to it. Sources with a value lower than s_min_distance will
            play at full volume. Valid range is 0 to s_max_distance. [Flags: a]</td>
        </tr>
        <tr>
          <td>s_numpolys</td>
          <td>200</td>
          <td>audio</td>
          <td>A3D 2.0 only. Maximum polygons to be rendered. Polygons will stop
            being rendered either when there are no more polygons left or s_numpolys
            polygons have been rendered. Setting this to 0 is the same as turning
            s_geometry off. Valid range is 0 to infinity. [Flags: a]</td>
        </tr>
        <tr>
          <td>s_occfactor</td>
          <td>0.250</td>
          <td>audio</td>
          <td>A3D 2.0 only. Transmission value of material - the smaller the number,
            the more occluded the sound is (less sound passes through the material).
            Valid range is 0 to 1.0</td>
        </tr>
        <tr>
          <td>s_occlude</td>
          <td>1</td>
          <td>audio</td>
          <td>A3D 2.0 only. enable sound occlusions.</td>
        </tr>
        <tr>
          <td>s_occ_epsilon</td>
          <td>1</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>s_polykeep</td>
          <td>1000000000</td>
          <td>unknown</td>
          <td>? [Flags: a]</td>
        </tr>
        <tr>
          <td>s_polysize</td>
          <td>10000000</td>
          <td>unknown</td>
          <td>? [Flags: a]</td>
        </tr>
        <tr>
          <td>s_refdelay</td>
          <td>4</td>
          <td>audio</td>
          <td>A3D 2.0 only. Delay between a source and its closest reflection.
            The higher the delay, the more time it takes between when the source
            and its first reflection is played. Valid range is 0 to 100. [Flags:
            a]</td>
        </tr>
        <tr>
          <td>s_refgain</td>
          <td>0.400</td>
          <td>audio</td>
          <td>A3D 2.0 only. Adjusts the gain on each reflection, where higher
            number means louder reflections. Remember very loud reflections could
            cancel out the effect of HRTFs. Valid range is 0 to 1.0 [Flags: a]</td>
        </tr>
        <tr>
          <td>s_reflect</td>
          <td>1</td>
          <td>audio</td>
          <td>A3D 2.0 only. enable sound reflections.</td>
        </tr>
        <tr>
          <td>s_reverb</td>
          <td>1</td>
          <td>audio</td>
          <td>enable reverb (0 may improve performance)</td>
        </tr>
        <tr>
          <td>s_rolloff</td>
          <td>1</td>
          <td>audio</td>
          <td>Adjusts the rolloff factor; when the rolloff value is increased,
            the effects of distance are increased: high frequencies are filtered
            and volume is lowered. Valid range is 0 to 10. [Flags: a]</td>
        </tr>
        <tr>
          <td>s_show</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>s_showtossed</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>s_usepvs</td>
          <td>1</td>
          <td>developer</td>
          <td>enable use of PVS tables (calculated lists of visible objects based
            on player position), set to 0 to move around your map without recalculating
            PVS</td>
        </tr>
        <tr>
          <td>s_verbwet</td>
          <td>0.250</td>
          <td>audio</td>
          <td>controls the wet/dry mix of reverbfor A3D only. The higher the number,
            the more wet (more reverb) the sounds. Valid range is 0 to 1.0 [Flags:
            a]</td>
        </tr>
        <tr>
          <td>team</td>
          <td>0</td>
          <td>server</td>
          <td>enable team mode, see teamX_color and teamX_model [Flags: ai]</td>
        </tr>
        <tr>
          <td>team1_color</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set team1 color, see team</td>
        </tr>
        <tr>
          <td>team1_model</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set team1 model, see team</td>
        </tr>
        <tr>
          <td>team1_name</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set team1 name, see team</td>
        </tr>
        <tr>
          <td>team1_skin</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set team1 skin, see team</td>
        </tr>
        <tr>
          <td>team2_color</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set team2 color, see team</td>
        </tr>
        <tr>
          <td>team2_model</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set team2 model, see team</td>
        </tr>
        <tr>
          <td>team2_name</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set team2 name, see team</td>
        </tr>
        <tr>
          <td>team2_skin</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set team2 skin, see team</td>
        </tr>
        <tr>
          <td>tell</td>
          <td><playername>"message"</td>
          <td>controls</td>
          <td>sends "message" to the console of player "playername" only. unless
            that player has developer set to 1 or the console open, they won't
            see it.</td>
        </tr>
        <tr>
          <td>texgamma</td>
          <td>2</td>
          <td>video</td>
          <td>set texture gamma level</td>
        </tr>
        <tr>
          <td>tfc_adminpwd</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set TFC administrator password ** not functional ** [Flags: sv tfc]</td>
        </tr>
        <tr>
          <td>tfc_autoteam</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>enable forced auto-team selection [Flags: sv tfc]</td>
        </tr>
        <tr>
          <td>tfc_balance_scores</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>enable automatic team balancing by score [Flags: sv tfc]</td>
        </tr>
        <tr>
          <td>tfc_balance_teams</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>enable automatic team balancing by number of players [Flags: sv
            tfc]</td>
        </tr>
        <tr>
          <td>tfc_clanbattle</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>enable TFC clan battle (tournament) mode [Flags: sv tfc]</td>
        </tr>
        <tr>
          <td>tfc_clanbattle_locked</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>enable locked (play) mode if tfc_clanbattle = 1 [Flags: sv tfc]</td>
        </tr>
        <tr>
          <td>tfc_respawndelay</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>set respawn delay for TFC games [Flags: sv tfc]</td>
        </tr>
        <tr>
          <td>thirdperson</td>
          <td>&nbsp;</td>
          <td>prefs</td>
          <td>enable third-person view (see firstperson, chase_cam)</td>
        </tr>
        <tr>
          <td>timedemo</td>
          <td>&lt;demo&gt;</td>
          <td>demo</td>
          <td>play demo HalfLife\Valve\demo.dem at max FPS and report average
            FPS (see r_speeds, timerefresh, gg)</td>
        </tr>
        <tr>
          <td>timerefresh</td>
          <td>&nbsp;</td>
          <td>demo</td>
          <td>spin view in place and report average FPS for the spin (see timedemo,
            r_speeds, gg)</td>
        </tr>
        <tr>
          <td>togglebrowser</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>toggles default web browser</td>
        </tr>
        <tr>
          <td>toggleconsole</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>toggle the console screen</td>
        </tr>
        <tr>
          <td>topcolor</td>
          <td>30</td>
          <td>net</td>
          <td>set player model top color [Flags: ai]</td>
        </tr>
        <tr>
          <td>traceralpha</td>
          <td>0.500</td>
          <td>prefs</td>
          <td>set tracer bullet alpha component</td>
        </tr>
        <tr>
          <td>tracerblue</td>
          <td>0.400</td>
          <td>prefs</td>
          <td>set tracer bullet blue component</td>
        </tr>
        <tr>
          <td>tracergreen</td>
          <td>0.800</td>
          <td>prefs</td>
          <td>set tracer bullet green component</td>
        </tr>
        <tr>
          <td>tracerlength</td>
          <td>0.800</td>
          <td>prefs</td>
          <td>set tracer bullet length</td>
        </tr>
        <tr>
          <td>traceroffset</td>
          <td>30</td>
          <td>prefs</td>
          <td>set tracer bullet offset</td>
        </tr>
        <tr>
          <td>tracerred</td>
          <td>0.800</td>
          <td>prefs</td>
          <td>set tracer bullet red component</td>
        </tr>
        <tr>
          <td>tracerspeed</td>
          <td>6000</td>
          <td>prefs</td>
          <td>set tracer bullet speed</td>
        </tr>
        <tr>
          <td>tracker</td>
          <td>0</td>
          <td>unknown</td>
          <td>? [Flags: ai]</td>
        </tr>
        <tr>
          <td>unbind</td>
          <td>&lt;key&gt;</td>
          <td>scripts</td>
          <td>remove binding to key <key></td>
        </tr>
        <tr>
          <td>unbindall</td>
          <td>&nbsp;</td>
          <td>scripts</td>
          <td>remove all key bindings</td>
        </tr>
        <tr>
          <td>upload</td>
          <td>&nbsp;</td>
          <td>net</td>
          <td>upload files to server</td>
        </tr>
        <tr>
          <td>uprate</td>
          <td>&nbsp;</td>
          <td>old</td>
          <td>replaced by cl_updaterate</td>
        </tr>
        <tr>
          <td>user</td>
          <td>&lt;name|id#&gt;</td>
          <td>server</td>
          <td>list for specified user: model colors, name, rate, model crc</td>
        </tr>
        <tr>
          <td>users</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>lists user names, userid's, and uniqueid's for all clients connected
            to the server. Use to find number for kicking/banning problem players.
            Userid's are assigned serially as users join the server, but uniqueid's
            are unique numbers assigned to a single user -- use the uniqueid to
            permanently ban players. See kick, banid, writeid, removeid</td>
        </tr>
        <tr>
          <td>version</td>
          <td>&nbsp;</td>
          <td>misc</td>
          <td>display build version and exe date/timestamp</td>
        </tr>
        <tr>
          <td>vgui_emulatemouse</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>vid_d3d</td>
          <td>0</td>
          <td>video</td>
          <td>enable Direct3D support (keep this off if your video card supports
            OpenGL)</td>
        </tr>
        <tr>
          <td>vid_describemode</td>
          <td>&nbsp;</td>
          <td>video</td>
          <td>display video mode settings</td>
        </tr>
        <tr>
          <td>viewframe</td>
          <td>&nbsp;</td>
          <td>video</td>
          <td>enable wire-frame display (OpenGL only, not 3dfx)</td>
        </tr>
        <tr>
          <td>viewmodel</td>
          <td>&nbsp;</td>
          <td>video</td>
          <td>enable model display</td>
        </tr>
        <tr>
          <td>viewnext</td>
          <td>&nbsp;</td>
          <td>video</td>
          <td>select next model</td>
        </tr>
        <tr>
          <td>viewprev</td>
          <td>&nbsp;</td>
          <td>video</td>
          <td>select previous model</td>
        </tr>
        <tr>
          <td>viewsize</td>
          <td>120</td>
          <td>video</td>
          <td>set view size [Flags: a]</td>
        </tr>
        <tr>
          <td>violence_ablood</td>
          <td>1</td>
          <td>prefs</td>
          <td>enable blood (0 will improve perfomance some, but you won't see
            any blood)</td>
        </tr>
        <tr>
          <td>violence_agibs</td>
          <td>1</td>
          <td>prefs</td>
          <td>enable gibs (0 will improve performance some, but you won't see
            body chunks)</td>
        </tr>
        <tr>
          <td>violence_hblood</td>
          <td>1</td>
          <td>prefs</td>
          <td>enable more blood (0 will improve perfomance some, but you won't
            see as much blood)</td>
        </tr>
        <tr>
          <td>violence_hgibs</td>
          <td>1</td>
          <td>prefs</td>
          <td>enable more gibs (0 will improve performance some, but you won't
            see as many body chunks)</td>
        </tr>
        <tr>
          <td>volume</td>
          <td>0.800</td>
          <td>audio</td>
          <td>set game volume [Flags: a]</td>
        </tr>
        <tr>
          <td>v_centermove</td>
          <td>0.150</td>
          <td>prefs</td>
          <td>set autocentering threshold (how much the view must move before
            autocentering kicks in)</td>
        </tr>
        <tr>
          <td>v_centerspeed</td>
          <td>500</td>
          <td>prefs</td>
          <td>set autocentering speed</td>
        </tr>
        <tr>
          <td>v_dark</td>
          <td>0</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>wait</td>
          <td>&nbsp;</td>
          <td>scripts</td>
          <td>pause for 1 tick in alias or script</td>
        </tr>
        <tr>
          <td>waterroom_type</td>
          <td>14</td>
          <td>unknown</td>
          <td>?</td>
        </tr>
        <tr>
          <td>weapon_357</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>weapon name for "use <weapon>" command; selects .357 magnum pistol
            (not for TFC, see tf_weapon_* for TFC weapon names)</td>
        </tr>
        <tr>
          <td>weapon_9mmAR</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>weapon name for "use <weapon>" command; selects 9mm Assault Rifle
            (not for TFC, see tf_weapon_* for TFC weapon names)</td>
        </tr>
        <tr>
          <td>weapon_9mmhandgun</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>weapon name for "use <weapon>" command; selects 9mm Pistol (not
            for TFC, see tf_weapon_* for TFC weapon names)</td>
        </tr>
        <tr>
          <td>weapon_crossbow</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>weapon name for "use <weapon>" command; selects Crossbow (not for
            TFC, see tf_weapon_* for TFC weapon names)</td>
        </tr>
        <tr>
          <td>weapon_crowbar</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>weapon name for "use <weapon>" command; selects crowbar (not for
            TFC, see tf_weapon_* for TFC weapon names)</td>
        </tr>
        <tr>
          <td>weapon_displacer</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>use the displacer weapon (works with or without 'use' command, or
            with /give cheat) [Flags: opfor]</td>
        </tr>
        <tr>
          <td>weapon_eagle</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>use the desert eagle pistol with laser sight (works with or without
            'use' command, or with /give cheat) [Flags: opfor]</td>
        </tr>
        <tr>
          <td>weapon_egon</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>weapon name for "use <weapon>" command; selects Egon Gun (not for
            TFC, see tf_weapon_* for TFC weapon names)</td>
        </tr>
        <tr>
          <td>weapon_gauss</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>weapon name for "use <weapon>" command; selects Gauss Gun (not for
            TFC, see tf_weapon_* for TFC weapon names)</td>
        </tr>
        <tr>
          <td>weapon_grapple</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>use the alien grapple weapon (works with or without 'use' command,
            or with /give cheat) [Flags: opfor]</td>
        </tr>
        <tr>
          <td>weapon_handgrenade</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>weapon name for "use <weapon>" command; selects Hand Grenades (not
            for TFC, see tf_weapon_* for TFC weapon names)</td>
        </tr>
        <tr>
          <td>weapon_hornetgun</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>weapon name for "use <weapon>" command; selects Hornet Gun (not
            for TFC, see tf_weapon_* for TFC weapon names)</td>
        </tr>
        <tr>
          <td>weapon_knife</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>use the knife (works with or without 'use' command, or with /give
            cheat) [Flags: opfor]</td>
        </tr>
        <tr>
          <td>weapon_m249</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>use the m249 machine gun (works with or without 'use' command, or
            with /give cheat) [Flags: opfor]</td>
        </tr>
        <tr>
          <td>weapon_pipewrench</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>use the pipewrench (works with or without 'use' command, or with
            /give cheat) [Flags: opfor]</td>
        </tr>
        <tr>
          <td>weapon_rpg</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>weapon name for "use <weapon>" command; selects Rocket Launcher
            (not for TFC, see tf_weapon_* for TFC weapon names)</td>
        </tr>
        <tr>
          <td>weapon_satchel</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>weapon name for "use <weapon>" command; selects Satchel Charge (not
            for TFC, see tf_weapon_* for TFC weapon names)</td>
        </tr>
        <tr>
          <td>weapon_shockrifle</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>use the alien shockrifle weapon (works with or without 'use' command,
            or with /give cheat) [Flags: opfor]</td>
        </tr>
        <tr>
          <td>weapon_shotgun</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>weapon name for "use <weapon>" command; selects Shotgun (not for
            TFC, see tf_weapon_* for TFC weapon names)</td>
        </tr>
        <tr>
          <td>weapon_snark</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>weapon name for "use <weapon>" command; selects Snarks (not for
            TFC, see tf_weapon_* for TFC weapon names)</td>
        </tr>
        <tr>
          <td>weapon_sniperrifle</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>use the sniper rifle (works with or without 'use' command, or with
            /give cheat) [Flags: opfor]</td>
        </tr>
        <tr>
          <td>weapon_sporelauncher</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>use the alien spore launcher (works with or without 'use' command,
            or with /give cheat) [Flags: opfor]</td>
        </tr>
        <tr>
          <td>weapon_tripmine</td>
          <td>&nbsp;</td>
          <td>controls</td>
          <td>weapon name for "use <weapon>" command; selects Tripmines (not for
            TFC, see tf_weapon_* for TFC weapon names)</td>
        </tr>
        <tr>
          <td>writeid</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>write a list of permanently banned id #'s to .\banned.cfg. See users,
            kick, banid, writeid, removeid</td>
        </tr>
        <tr>
          <td>writeip</td>
          <td>&nbsp;</td>
          <td>server</td>
          <td>write ip addresses to halflife\valve\listip.cfg</td>
        </tr>
        <tr>
          <td>zoom_sensitivity_ratio</td>
          <td>1.200</td>
          <td>mouse</td>
          <td>set the ratio of normal mouse sensitivity to zoomed-in (alt fire
            crossbow or .357 in HL, sniper rifle in TFC) mouse sensitivity</td>
        </tr>
        <tr>
          <td>_snd_mixahead</td>
          <td>0.100</td>
          <td>audio</td>
          <td>set sound mixahead value (like s_mixahead in Q2), different values
            may help fix stuttering problems on some sound cards [Flags: a]</td>
        </tr>
        <tr>
        </tr>
      </table>
    </td>
  </tr>
</table>
<?php









?>
<br /><br /><div style="font-size:xx-small;">Credits: Edit [SR]illidan and <a href="http://sr-team.clan.su/K_stat/hlcommandsfull.html">http://sr-team.clan.su/K_stat/hlcommandsfull.html</a>

</div>

<?php

?>