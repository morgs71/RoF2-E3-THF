|----------------------------------------------------------------------------|
| Monk Functions
|----------------------------------------------------------------------------|
Sub





Sub MNK_Setup
  /call IniToVarV "${Character_Ini},Monk,Combat Song (On/Off)" MonkSong bool outer	
  /call IniToVarV "${Character_Ini},Monk,Combat Song Discipline" MonkSongDisc string outer
  /call IniToVarV "${Character_Ini},Monk,Mend (Pct)" MendPct int outer
  /call IniToVarV "${Character_Ini},Monk,Tranquil Focus (On/Off)" TranquilFocus bool outer
/return
|----------------------------------------------------------------------------|
Sub MNK_Background_Events
|--Monk song--|
	/if (${MonkSong} && ${Me.Combat} && ${Me.CombatAbilityReady[${MonkSongDisc}]} && !${Me.Song[${MonkSongDisc}].ID}) {
		/disc ${MonkSongDisc}
		}
|--Mend--|		
	/if (${Me.Combat} && ${Me.AbilityReady[Mend]} && ${Me.PctHPs} <= ${MendPct})  {
		/doability Mend
	}
|--Tranquil Focus--|	
	/if (${BurnsOn}) {
		/return
	} else /if (${TranquilFocus}&& !${TranquilTimer} && ${Me.Combat} && !${Bool[${Me.ActiveDisc.ID}]}) {
		/disc Tranquil Focus
		/call createTimer "TranquilTimer" "25s"
	}
/return
|----------------------------------------------------------------------------|
SUB MNK_MacroSettings
/if (${Debug}) /echo |- MNK_MacroSettings ==>
	
	/call WriteToIni "${advSettings_Ini},MNK Functions,MNK Function#1" "check_Burns" 1
	/call WriteToIni "${advSettings_Ini},MNK Functions,MNK Function#2" "check_Buffs" 1
/if (${Debug}) /echo <== MNK_MacroSettings -|
/RETURN
|----------------------------------------------------------------------------|
SUB MNK_CharacterSettings
	/call WriteToIni "${Character_Ini},${Me.Class},Combat Song (On/Off)" On
	/call WriteToIni "${Character_Ini},${Me.Class},Combat Song Discipline"
	/call WriteToIni "${Character_Ini},${Me.Class},Mend (Pct)" 35
	/call WriteToIni "${Character_Ini},${Me.Class},Tranquil Focus (On/Off)" On
/RETURN
|----------------------------------------------------------------------------|
Sub MNK_Aliases
/return