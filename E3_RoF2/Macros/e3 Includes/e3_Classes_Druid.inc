|----------------------------------------------------------------------------|
| Druid Functions
|----------------------------------------------------------------------------|
Sub DRU_Setup
	/call iniToVarV "${Character_Ini},Druid,Evac Spell" Evac_Spell string outer
	/declare canRez int outer 0
/return
|----------------------------------------------------------------------------|
SUB DRU_MacroSettings
/if (${Debug}) /echo |- DRU_MacroSettings ==>
	/call WriteToIni "${advSettings_Ini},DRU Functions,DRU Function#1" "check_healChain" 1
	/call WriteToIni "${advSettings_Ini},DRU Functions,DRU Function#2" "check_Heals" 1
  /call WriteToIni "${advSettings_Ini},DRU Functions,DRU Function#3" "check_Cures" 1
	/call WriteToIni "${advSettings_Ini},DRU Functions,DRU Function#4" "check_Burns" 1
	/call WriteToIni "${advSettings_Ini},DRU Functions,DRU Function#5" "check_Buffs" 1
	/call WriteToIni "${advSettings_Ini},DRU Functions,DRU Function#6" "check_Debuffs" 1
	/call WriteToIni "${advSettings_Ini},DRU Functions,DRU Function#7" "check_DoTs" 1
	/call WriteToIni "${advSettings_Ini},DRU Functions,DRU Function#8" "check_AE" 1
	/call WriteToIni "${advSettings_Ini},DRU Functions,DRU Function#9" "check_Nukes" 1
/RETURN
|----------------------------------------------------------------------------|
SUB DRU_CharacterSettings
	/call WriteToIni "${Character_Ini},Druid,Evac Spell"
/RETURN
|----------------------------------------------------------------------------|
Sub DRU_Aliases
/return
|----------------------------------------------------------------------------|

|---Druid Rez---|
#event DruRez "<#1#> Rez"
#event DruRez "<#*#> Rez On #1#"
#event DruRez "#1# tells you, 'Rez'"
#event DruRez "#*# tells you, 'Rez On #1#'"
#event DruRez "#1# tells the group, 'Rez'"
sub Event_DruRez(line, ChatSender)
	/if (${ChatSender.Left[1].Compare[ ]}<0) /varset ChatSender ${ChatSender.Right[-2].Left[-1]}
	/if (${Me.Class.ShortName.Equal[DRU]} && ${Spawn[${ChatSender}'s].ID}) {
	  /varset canRez 0
    /call defineDruRezSpell
    /call TrueTarget ${Spawn[${ChatSender}'s].ID}
    |/echo ${Target.ID}
    /call check_CorpseRezzable
    /if (${canRez}==1) {
      :checkReady
      /call check_Ready "DrurezArray2D" 1
      /if ((!${c_Ready} || !${check_Mana["DrurezArray2D",1]}) && ${Me.CombatState.NotEqual[COMBAT]}) {
        /if (!${Me.Sitting}) /sit on
        /delay 1s
        /goto :checkReady
      }
      /tell ${ChatSender} Wait4Rez
      /call e3_cast ${Spawn[${ChatSender}'s].ID} "DrurezArray2D" 1
    } else {
      /tell ${ChatSender} Your corpse ${Target.Name} is not eligible for rez
    }
	} else /if (!${Spawn[${ChatSender}'s].ID}) {
		/tell ${ChatSender} I don't see any of your corpses in ${Zone}.
	}
/return

|----------------------------------------------------------------------------|
#bind otherRezzing /RezzingCorpseID
SUB Bind_otherRezzing(whoIsRezzing,corpse_id)
  /if (${Me.Class.ShortName.Equal[DRU]}) {
    /echo ${whoIsRezzing} rezzing ${corpse_id}, added to otherRezList
    /varset otherRezList ${otherRezList}${corpse_id},
  }
/return
|----------------------------------------------------------------------------|
#event CorpseExpired "This corpse #1# be resurrected."
Sub Event_CorpseExpired(line, corpseExpired)
/if (${Debug}) /echo |- EVENT_CorpseExpired
  /if (${corpseExpired.Equal[cannot]}) {
    /varset canRez 2
  } else  {
    /varset canRez 1
  }
/return
|----------------------------------------------------------------------------|
Sub check_CorpseRezzable
  /declare conTimer timer local 5s
  /doevents CorpseExpired flush
  /varset canRez 0
  :waitForExpired
  /consider
  /delay 2
  /doevents CorpseExpired
  /if (${canRez}==0 && ${conTimer}) {
    /goto :waitForExpired
  }
/RETURN

|----------------------------------------------------------------------------|
Sub defineDruRezSpell
  /declare DrurezSpell string local
  /declare i int local
  
  
  /if (${FindItem[Aphrodite's Gauntlets of Desire].ID}) {
    /varset DrurezSpell Aphrodite's Gauntlets of Desire
  } else /if (${FindItem[Staff of the Earthcrafter].ID}) {
    /varset DrurezSpell Staff of the Earthcrafter
  } else /if (${FindItem[Hammer of Kerafyrm].ID}) {
    /varset DrurezSpell Hammer of Kerafyrm
  } 
  /if (${Bool[${DrurezSpell}]}) {
    /if (${Defined[DrurezArray]}) /deletevar DrurezArray
    /declare DrurezArray[1] string outer ${DrurezSpell}
    /if (${DrurezArray.Size}) {
      /call BuildSpellArray "DrurezArray" "DrurezArray2D"
      /for i 1 to ${DrurezArray2D.Size[1]}
        /varset DrurezArray2D[${i},${iCastInvis}] 1
      /next i
      }
  } else {
    /bc I do not have a resurrection spell available
  }
/RETURN
|----------------------------------------------------------------------------|


#event AE_SOW "#*# tells you, 'AESOW'"
sub Event_AE_SOW(string line)
	/if (${Me.Class.ShortName.Equal[DRU]}) {
	 /if (${Me.AltAbilityReady[Mass Group Buff]} && ${Me.AltAbilityReady[Spirit of the Wood]}) {
		 /bc MGB Spirit of the Wood inc...
		 /casting "Mass Group Buff|alt" -maxtries|3
		 /delay 5 !${Me.AltAbilityReady[Mass Group Buff]}
		 /delay 5
		 /casting "Spirit of the Wood|alt" -maxtries|3
		 /delay 5 !${Me.AltAbilityReady[Spirit of the Wood]}
		 /casting "Spirit of the Wood|alt" -maxtries|3
		 /rs MGB Spirit of the Wood inc...
	 } else /if (!${Me.AltAbilityReady[Mass Group Buff]}) {
			/bc Mass Group Buff is not available...
	 } else /bc Spirit of the Wood is not available...
	}
/return

#event AE_FOE "#*# tells you, 'AEFOE'"
sub Event_AE_FOE(string line)
	/if (${Me.Class.ShortName.Equal[DRU]}) {
	 /if (${Me.AltAbilityReady[Mass Group Buff]} && ${Bool[${Me.Book[Flight of Eagles]}]}) {
		 /bc MGB Flight of Eagles inc...
		 /casting "Mass Group Buff|alt" -maxtries|3
		 /delay 5 !${Me.AltAbilityReady[Mass Group Buff]}
		 /delay 5
		 /casting "Flight of Eagles" -maxtries|3
		 /delay 5 !${Me.AltAbilityReady[Spirit of the Wood]}
		 /casting "Flight of Eagles" -maxtries|3
		 /rs MGB Spirit of the Wood inc...
	 } else /if (!${Me.AltAbilityReady[Mass Group Buff]}) {
			/bc Mass Group Buff is not available...
	 } else /bc Flight of Eagles is not available...
	}
/return
|----------------------------------------------------------------------------|
Sub DRU_Background_Events
	/doevents AE_SOW
	/doevents AE_FOE
	/doevents DruRez
/return