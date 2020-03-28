|----------------------------------------------------------------------------|
| Shaman Functions
|----------------------------------------------------------------------------|
SUB check_Canni
/if (${Debug}) /echo |- autoCanni ==>
	/if (${AutoCanni}) {
	    |only canni if im not in ooc regen
		/if (${Me.CombatState.NotEqual[RESTING]} && ${Me.PctMana} < ${StartCanni}) {
			/declare s int local
			/for s 1 to ${canniSpells2D.Size[1]}
			/if (${canniSpells2D[${s},${iCastName}].NotEqual[Spiritual Channeling]} || (${canniSpells2D[${s},${iCastName}].Equal[Spiritual Channeling]} && ${Me.CombatState.Equal[COMBAT]})) {
				/call check_Ready "canniSpells2D" ${s}
				/if (${c_Ready}) {
					/if (${check_Mana["canniSpells2D",${s}]}) {
						/if (!${canniSpells2D[${s},${iCastName}].Equal[Cannibalization]} || ${Me.CurrentHPs} > 2000) {
							/if (${canniSpells2D[${s},${iMinHP}]} <= ${Me.PctHPs}) {
							/call e3_Cast ${Me.ID} "canniSpells2D" ${s}
							}
						}
					}
				}
			}
			/if (!${ActionTaken}) /next s
		}
	}
/if (${Debug}) /echo <== autoCanni -|
/RETURN

|----------------------------------------------------------------------------|

|---Shaman Rez---|
#event ShmRez "<#1#> Rez"
#event ShmRez "<#*#> Rez On #1#"
#event ShmRez "#1# tells you, 'Rez'"
#event ShmRez "#*# tells you, 'Rez On #1#'"
#event ShmRez "#1# tells the group, 'Rez'"
sub Event_ShmRez(line, ChatSender)
	/if (${ChatSender.Left[1].Compare[ ]}<0) /varset ChatSender ${ChatSender.Right[-2].Left[-1]}
	/if (${Me.Class.ShortName.Equal[SHM]} && ${Spawn[${ChatSender}'s].ID}) {
	  /varset canRez 0
    /call defineShmRezSpell
    /call TrueTarget ${Spawn[${ChatSender}'s].ID}
    |/echo ${Target.ID}
    /call check_CorpseRezzable
    /if (${canRez}==1) {
      :checkReady
      /call check_Ready "ShmrezArray2D" 1
      /if ((!${c_Ready} || !${check_Mana["ShmrezArray2D",1]}) && ${Me.CombatState.NotEqual[COMBAT]}) {
        /if (!${Me.Sitting}) /sit on
        /delay 1s
        /goto :checkReady
      }
      /tell ${ChatSender} Wait4Rez
      /call e3_cast ${Spawn[${ChatSender}'s].ID} "ShmrezArray2D" 1
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
  /if (${Me.Class.ShortName.Equal[SHM]}) {
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
Sub defineShmRezSpell
  /declare ShmrezSpell string local
  /declare i int local
  
  
  /if (${FindItem[Aphrodite's Gauntlets of Desire].ID}) {
    /varset ShmrezSpell Aphrodite's Gauntlets of Desire
  } else /if (${FindItem[Staff of the Earthcrafter].ID}) {
    /varset ShmrezSpell Staff of the Earthcrafter
  } else /if (${FindItem[Hammer of Kerafyrm].ID}) {
    /varset ShmrezSpell Hammer of Kerafyrm
  } 
  /if (${Bool[${ShmrezSpell}]}) {
    /if (${Defined[ShmrezArray]}) /deletevar ShmrezArray
    /declare ShmrezArray[1] string outer ${ShmrezSpell}
    /if (${ShmrezArray.Size}) {
      /call BuildSpellArray "ShmrezArray" "ShmrezArray2D"
      /for i 1 to ${ShmrezArray2D.Size[1]}
        /varset ShmrezArray2D[${i},${iCastInvis}] 1
      /next i
      }
  } else {
    /bc I do not have a resurrection spell available
  }
/RETURN
|----------------------------------------------------------------------------|
Sub SHM_Setup
/if (${Debug}) /echo |- SHM_Setup ==>
	/call iniToVarV "${Character_Ini},Shaman,Auto-Canni (On/Off)" AutoCanni bool outer
	/call IniToArrayV "${Character_Ini},Shaman,Canni#" canniSpells
	/call IniToArrayV "${Character_Ini},Shaman,Canni Start (Pct)" StartCanni int outer
  /if (${canniSpells.Size}) /call BuildSpellArray "canniSpells"	"canniSpells2D"
  /declare canRez int outer 0
/if (${Debug}) /echo <== SHM_Setup -|
/return
|----------------------------------------------------------------------------|
SUB SHM_MacroSettings
/if (${Debug}) /echo |- SHM_MacroSettings ==>
	/call WriteToIni "${advSettings_Ini},SHM Functions,SHM Function#1" "check_Debuffs" 1
	/call WriteToIni "${advSettings_Ini},SHM Functions,SHM Function#2" "check_Burns" 1
	/call WriteToIni "${advSettings_Ini},SHM Functions,SHM Function#3" "check_Heals" 1
	/call WriteToIni "${advSettings_Ini},SHM Functions,SHM Function#4" "check_Cures" 1
  /call WriteToIni "${advSettings_Ini},SHM Functions,SHM Function#5" "check_Buffs" 1
	/call WriteToIni "${advSettings_Ini},SHM Functions,SHM Function#6" "check_DoTs" 1
	/call WriteToIni "${advSettings_Ini},SHM Functions,SHM Function#7" "check_AE" 1
	/call WriteToIni "${advSettings_Ini},SHM Functions,SHM Function#8" "check_Nukes" 1
	/call WriteToIni "${advSettings_Ini},SHM Functions,SHM Function#9" "check_Pets" 1
	/call WriteToIni "${advSettings_Ini},SHM Functions,SHM Function#10" "check_Canni" 1
/if (${Debug}) /echo <== SHM_MacroSettings -|
/RETURN
|----------------------------------------------------------------------------|
SUB SHM_CharacterSettings
/if (${Debug}) /echo |- SHM_CharacterSettings ==>
	/call WriteToIni "${Character_Ini},Shaman,Auto-Canni (On/Off)"
	/call WriteToIni "${Character_Ini},Shaman,Canni"
	/call WriteToIni "${Character_Ini},Shaman,Canni Start (Pct)" 80
/if (${Debug}) /echo <== SHM_CharacterSettings -|
/RETURN
|----------------------------------------------------------------------------|
Sub SHM_Aliases
/return
|----------------------------------------------------------------------------|
#event AE_AA "#*# tells you, 'AEAA'"
sub Event_AE_AA(string line)
	/if (${Me.Class.ShortName.Equal[SHM]}) {
   /if (${Me.AltAbilityReady[Mass Group Buff]} && ${Me.AltAbilityReady[Ancestral Aid]}) {
     /bc MGB Ancestral Aid inc...
     /casting "Mass Group Buff|alt" -maxtries|3
     /delay 5 !${Me.AltAbilityReady[Mass Group Buff]}
     /delay 5
     /casting "Ancestral Aid|alt" -maxtries|3
     /delay 5 !${Me.AltAbilityReady[Ancestral Aid]}
     /casting "Ancestral Aid|alt" -maxtries|3
     /rs MGB Ancestral Aid inc...
   } else /if (!${Me.AltAbilityReady[Mass Group Buff]}) {
      /bc Mass Group Buff is not available...
   } else /bc Ancestral Aid is not available...
	}
/return
|----------------------------------------------------------------------------|
Sub SHM_Background_Events
	/doevents AE_AA
	/doevents ShmRez
/return