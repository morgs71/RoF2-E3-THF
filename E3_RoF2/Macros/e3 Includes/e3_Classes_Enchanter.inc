|----------------------------------------------------------------------------|
| Enchanter Functions
|----------------------------------------------------------------------------|
#event toggleRune "<#1#> AutoRune #2#"
#event toggleRune "#1# tells you, 'AutoRune #2#'"
sub event_toggleRune(line, ChatSender, runeToggle)
  /if (${Me.Class.ShortName.Equal[ENC]}) {
    /if (${Debug} || ${Debug_Ench}) /echo |- toggleRune ==>
    /if (${runeToggle.Equal[on]}) {
      /if (!${Bool[${runeArray2D.Size[1]}]}) /docommand ${ChatToggle} I do not have a rune spell defined
      /varset autoRune TRUE
      /docommand ${ChatToggle} << Auto Rune Enabled >>
    } else {
      /varset autoRune FALSE
      /docommand ${ChatToggle} << Auto Rune Disabled >>
    }
    /if (${Debug}) /echo <== toggleRune -|
  }
/return
|----------------------------------------------------------------------------|
#event add_RuneTarget "<#1#> Rune On #2#"
#event add_RuneTarget "#1# tells you, 'Rune On #2#'"
sub event_add_RuneTarget(line, ChatSender, RuneTarget)
/if (${Debug}) /echo |- event_add_RuneTarget ==>
  /if (${Me.Class.ShortName.Equal[ENC]}) {
    /if (!${SpawnCount[pc =${RuneTarget}]}) {
      /docommand ${ChatToggle} I don't see any PCs matching ${RuneTarget}...
    } else /if (!${Defined[runeTargets]}) {
        /declare runeTargets[1] string outer
        /varset runeTargets[1] ${Spawn[pc =${RuneTarget}].CleanName}
        /docommand ${ChatToggle} Maintaining Rune on ${RuneTarget}
    } else {
        /declare i int local
        /for i 1 to ${runeTargets.Size}
          /if (${runeTargets[${i}].Equal[${Spawn[pc =${RuneTarget}].CleanName}]}) {
            /docommand ${ChatToggle} I am already maintaining rune ${RuneTarget}
            /return
          }
        /next i

        /call BuildArray runeTargets ${RuneTarget}
        /docommand ${ChatToggle} Maintaining Rune on ${RuneTarget}
    }
  }
/if (${Debug}) /echo <== add_RuneTarget -|
/return
|----------------------------------------------------------------------------|
#event remove_RuneTarget "<#1#> Rune Off #2#"
#event remove_RuneTarget "#1# tells you, 'Rune off #2#'"
sub event_remove_RuneTarget(line, ChatSender, RuneTarget)
/if (${Debug} || ${Debug_Ench}) /echo |- remove_RuneTarget ==>
  /if (${Me.Class.ShortName.Equal[ENC]}) {
    /if (${Defined[runeTargets]}) {
      /if (${Defined[RuneTarget]}) {
        /declare i int local
        /for i 1 to ${runeTargets.Size}
          /if (${runeTargets[${i}].Equal[${Spawn[pc =${RuneTarget}].CleanName}]}) {
            /docommand ${ChatToggle} No longer maintaining Rune on [${runeTargets[${i}]}].
            /call RemoveArrayElement runeTargets "${runeTargets[${i}]}"
          }
        /next i
      } else {
        /docommand ${ChatToggle} Ending runes on all targets
        /deletevar runeTargets
      }
    }
  }
/if (${Debug}) /echo <== remove_RuneTarget -|
/return
|----------------------------------------------------------------------------|
Sub check_rune
/if (${Debug} || ${Debug_Ench}) /echo |- check_rune ==>
/if (${autoRune}) {
  /declare currentBot string local NULL
  /declare currentSpellIndx int local
  /declare t int local
  /declare s int local
  /for t 1 to ${runeTargets.Size}
    /for s 1 to ${runeArray2D.Size[1]}
      /if (${Bool[${NetBots[${runeTargets[${t}]}].InZone}]} && !${Bool[${NetBots[${runeTargets[${t}]}].Buff.Find[${runeArray2D[${s},${iCastID}]} ]}]}) {
        /call check_Ready "runeArray2D" ${s}
        /if (${c_Ready}) {
          /call check_Distance
          /if (${check_Distance[${NetBots[${runeTargets[${t}]}].ID},${runeArray2D[${s},${iMyRange}]}]}) {
            /if (${check_Mana["runeArray2D",${s}]}) {
              /call e3_Cast ${NetBots[${runeTargets[${t}]}].ID} "runeArray2D" ${s}
            }
          }
        }
      }
    /if (!${Bool[${currentBot}]}) /next s
  /if (!${Bool[${currentBot}]}) /next t
}
/if (${Debug}) /echo <== check_rune -|
/return



|---------------Mez Target-----------------Written by Killians----Edited by Muergan ------------------|


#event MezTarget "<#1#> Mez on #2#"
#event MezTarget "#1# tell your party, 'Mez on #2#'"
#event MezTarget "#1# tells the group, 'Mez on #2#'"
#event MezTarget "#1# tells you, 'Mez on #2#'"


SUB event_MezTarget(line, ChatSender, int MobID)

/target id ${MobID}
/call Mez

/return




Sub Mez

/declare mezTarg int local
/varset mezTarg ${Target.ID}
/call TrueTarget ${mezTarg}

/call e3_Cast ${mezTarg} "mezArray2D" 1
		
/return


|----------------------------------------------------------------------------|

Sub ENC_Setup
  /declare Debug_Ench bool outer FALSE
  /declare autoRune bool outer FALSE


	/if (${Ini[${Character_Ini},Enchanter,AutoRune].Length}) /call iniToVarV "${Character_Ini},Enchanter,AutoRune (On/Off)" autoRune bool outer
	/if (${Ini[${Character_Ini},Enchanter,GatherMana Pct].Length}) /call iniToVarV "${Character_Ini},Enchanter,GatherMana Pct" gatherManaPCT int outer

  /call IniToArrayV "${Character_Ini},Enchanter,RuneTarget#"  runeTargets
  /call IniToArrayV "${Character_Ini},Enchanter,RuneSpell#"   runeArray
  /call IniToArrayV "${Character_Ini},Enchanter,Mez Spell"  mezArray 
  
  /if (${Bool[${mezArray.Size}]}) {
	/declare i int local
    /call BuildSpellArray "mezArray"	"mezArray2D"
	/for i 1 to ${mezArray2D.Size[1]}
        /varset mezArray2D[${i},${iCastInvis}] 1
      /next i
  }
  
  /if (${Bool[${runeArray.Size}]}) {
    /call BuildSpellArray "runeArray"	"runeArray2D"

  } else {
    /if (${Defined[autoRune]}) /varset autoRune FALSE
  }
  
/return
|----------------------------------------------------------------------------|
Sub ENC_Background_Events

	/doevents toggleRune
	/doevents add_RuneTarget
	/doevents remove_RuneTarget
	/doevents MezTarget
	
	/if (${Assisting} && ${Bool[${gatherManaPCT}]} && ${Me.PctMana} < ${gatherManaPCT} && ${Me.AltAbilityReady[Gather Mana]} && ${Me.CombatState.Equal[COMBAT]}) /casting "Gather Mana" -maxtries|3
/return
|----------------------------------------------------------------------------|
SUB ENC_MacroSettings

	/call WriteToIni "${advSettings_Ini},ENC Functions,ENC Function#1" "check_Rune" 1
	/call WriteToIni "${advSettings_Ini},ENC Functions,ENC Function#2" "check_Burns" 1
	/call WriteToIni "${advSettings_Ini},ENC Functions,ENC Function#3" "check_Debuffs" 1
	/call WriteToIni "${advSettings_Ini},ENC Functions,ENC Function#4" "check_Buffs" 1
	/call WriteToIni "${advSettings_Ini},ENC Functions,ENC Function#5" "check_DoTs" 1
	/call WriteToIni "${advSettings_Ini},ENC Functions,ENC Function#6" "check_AE" 1
	/call WriteToIni "${advSettings_Ini},ENC Functions,ENC Function#7" "check_Nukes" 1
	/call WriteToIni "${advSettings_Ini},ENC Functions,ENC Function#8" "check_Pets" 1
	/call WriteToIni "${advSettings_Ini},ENC Functions,ENC Function#9" "check_GatherMana" 1
/RETURN
|----------------------------------------------------------------------------|
SUB ENC_CharacterSettings
	/call WriteToIni "${Character_Ini},Enchanter,AutoRune (On/Off)" Off
	/call WriteToIni "${Character_Ini},Enchanter,RuneTarget"
	/call WriteToIni "${Character_Ini},Enchanter,RuneSpell"
	/call WriteToIni "${Character_Ini},Enchanter,GatherMana Pct" 10
	/call WriteToIni "${Character_Ini},Enchanter,Mez Spell"
/RETURN
|----------------------------------------------------------------------------|
Sub ENC_Aliases
	/squelch /alias /runeon /bc AutoRune on
	/squelch /alias /runeoff /bc AutoRune off
  /squelch /alias /addrune /bc Rune On
  /squelch /alias /remrune /bc Rune Off

/return