-evacute removed, only /evac
/setaaxp

-/finditem and /findmissingitem now accept item links, and new abbreviated alises (/FDI, /FMI)
-autoset aaexp to 100% if level 70 and > 50% exp.  General Ini: AutoSetPctAAExp (On/Off)=On 
NukeSet has been renamed to SpellSet, it now handles DoTs too (and rogue poisons if you have it set in rogue ini)
Replace Nuke= with Main= in all bot ini (optional, but suggested: it aligns with default dot naming)
Move dots to [Dots on Command], [Dots on Assist]

-idol of malos now works with pbae
-rewrote pet weapons
-mages can now use Molten Orb in their nukes.  when set in nukes it will auto summone one for you when out of combat

added a new /stopf function.  
-this makes all characters end up within 10 units of the location of the calling bot at the time he called it.
-you CANNOT use this with /only or /not
it does not send a message to MQ2ChatWnd, if you want visual feedback add it in your hotkey. i.e:
[Hotkey Stop]
line 1: /stopf
line 2: /echo \ar Stop


Necro lich spell logic reworked, configure similar to Canni:  Lich Spell=Grave Pact/Gem|8/MinHP|75/MaxMana|90
- for lich this means you will only cast the lich buff when >=75% hp, and <=90% mana
- lich buff will be removed if you go below 10% HP
- using feign death in life support will disable checking lich! - use with care

feign death logic: autostands any class other than nec/shd/mnk.  autostands nec/shd/mnk if they are already assisting or not in combat. 
vetaa : tells or group: VetAA Lesson of the devoted, /lesson /only|war, /lesson /only|group

-----------------------------------------------------
- General Guidance
-----------------------------------------------------
no! = you better be really advanced to change this
optional = not recommended in general, change if you have a specific reason and know enough to make informed e3/mq behavior decisions
recommended = you should change this to make the best use of e3/mq
required = you need to change this to have basic capabilities

\E3_ROF2
MacroQuest.ini (optional)
MQ2AutoLogin.ini (recommended)
MQ2ChatWnd.ini (optional, best configured in game by moving window)
MQ2EQBC.ini (required)
MQ2FPS.ini (optional)
MQ2HUD.ini (optional)
MQ2MoveUtils.ini (no!)

\E3_ROF2\Configs
zoned.cfg (no!, this sets the everquest window name to your character name, and loads e3 macro on login/zone if its not running)

\E3_ROF2\Creamo_Utilities
files i use which make life easier
-EQUI_TargetWindow.xml copy this into \Everquest_RoF2\uifiles\default to give you HoTT immediately to make the macro work better
-EQUI_CombatAbilityWnd.xml copy this into \Everquest_RoF2\uifiles\default to get a more compact combat ability(disc) window
-killeq.bat quickly kills all everquest clients
-EQAffin.bat sets processor affinity (load balances) eq clients across all available cpu cores.  run after eq clients are loaded
-launch_client_nowineq.bat used to launch all eq clients w/o the use of wineq.  it only starts clients with char names that are not loaded
-load_clients_wineq.bat launch clients via wineq application 
-Gamparse folder is used to parse your log file for dps/spells/etc

\E3_ROF2\Macros
e3.mac (no!)
language_skillup.mac -not used by e3, but group another character and run this [/mac language_skillup] for a few minutes to get to 100 common tongue(if evil race)

\E3_ROF2\Macros\e3 Macro Inis
e3 Data.ini (no!) -if upgrading: remove all PENDING_EXCHANGE#1,PENDING_EXCHANGE#2, deprecated
Advanced Settings.ini (no!)
doors.ini (no!)
General Settings.ini (optional)

\E3_ROF2\Macros\e3 Include (no! for all files in this directory)

\E3_ROF2\Macros\e3 Bot Inis (required for all files in this directory)
if new: this is where you config the way your characters behave (spells, abilities, buffs, heal, class specifics, etc). you need to maintain these files
if upgrading: 
-copy in all your bot inis
-/mac e3 on all chars and let them update e3_data.ini.  after bot ini updated do the next 2 steps
 -Replace "Nuke=" with "Main=" in all bot ini (optional/suggested, aligns with default dot naming)
 -Move [Dots] to [Dots on Command], [Dots on Assist]
