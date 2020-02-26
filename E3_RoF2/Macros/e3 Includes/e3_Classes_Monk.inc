|----------------------------------------------------------------------------|
| Monk Functions
|----------------------------------------------------------------------------|
Sub MNK_Setup
  /call IniToVar "${Character_Ini},Monk,Combat Song (On/Off)" MonkSong bool outer	
  /call IniToVar "${Character_Ini},Monk,Combat Song Discipline" MonkSongDisc string outer

/return
|----------------------------------------------------------------------------|
Sub MNK_Background_Events
/if (${MonkSong} && ${Me.Combat} && ${Me.CombatAbilityReady[${MonkSongDisc}]} && !${Me.Song[${MonkSongDisc}].ID}) {
	/disc ${MonkSongDisc}
	}


/return
|----------------------------------------------------------------------------|
SUB MNK_MacroSettings
/if (${Debug}) /echo |- MNK_MacroSettings ==>
	/call WriteToIni "${Character_Ini},${Me.Class},Combat Song (On/Off)" On
	/call WriteToIni "${Character_Ini},${Me.Class},Combat Song Discipline"
	/call WriteToIni "${advSettings_Ini},MNK Functions,MNK Function#1" "check_Burns" 1
	/call WriteToIni "${advSettings_Ini},MNK Functions,MNK Function#2" "check_Buffs" 1
/if (${Debug}) /echo <== MNK_MacroSettings -|
/RETURN
|----------------------------------------------------------------------------|
SUB MNK_CharacterSettings
/RETURN
|----------------------------------------------------------------------------|
Sub MNK_Aliases
/return