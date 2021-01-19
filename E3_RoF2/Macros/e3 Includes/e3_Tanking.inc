Sub check_Tanking
  /if (${mainTank.Equal[${Me}]}) /call tankKill
  /if (${isPeelTank}) /call peelTank
/return


SUB tankKill
  |/echo inTankKill ${Time}
  /declare i int local 0
  /declare tilde_loc int local 0
  /declare npc int local 0
  |if i have an assisttarget then attack has been manually issued
  /if (${Bool[${AssistTarget}]}) {
    /varset tankKillEngaged TRUE
    /varset killTarget ${AssistTarget}
    |/varset doTaunt TRUE
    /squelch /turbo 100
  }
  /if (${tankKillEngaged}) {
    :mainKillLoop
    /varset i 0
    |/echo Close NPC ${SpawnCount[npc playerstate 4 targetable radius 75 zradius 25 los]}
    /if (${SpawnCount[npc playerstate 4 targetable radius 75 zradius 25 los]}==0 && ${Me.CombatState.NotEqual[COMBAT]}) {
      /echo No Npc in Range, exiting tankKill
      /varset tankKillEngaged FALSE
     | /varset doTaunt FALSE
      /squelch /turbo ${classTurbo}
      /return
    } else {
      /if (!${Bool[${killTarget}]} || (${Bool[${killTarget}]} && ${Spawn[id ${killTarget}].PctHPs} < 15)) {
        :getTargetLoop
        /varcalc i ${i}+1
        /varset npc ${NearestSpawn[${i},npc playerstate 4 targetable radius 75 zradius 25 los].ID}

        /if (${Bool[${npc}]}) {
          /varset tilde_loc ${Spawn[id ${npc}].CleanName.Find[`s pet]}
          /if (${tilde_loc} > 0) {
            /if (${Spawn[pc ${Spawn[id ${npc}].CleanName.Left[${Math.Calc[${tilde_loc}-1].Int}]}].ID}) /goto :getTargetLoop
          }
          |/echo ${i} knpc ${killTarget} npc ${npc} ${Spawn[id ${npc}].CleanName} ${Spawn[id ${npc}].Type}
          /if (${killTarget}==${npc} || ${Bool[${Spawn[id ${npc}].Master}]}) {
            /goto :getTargetLoop
          } else /if (${Spawn[id ${npc}].Type.Equal[NPC]}) {
            /varset killTarget ${npc}
            /call TrueTarget ${killTarget}
            /attack on
            /stick 12 front moveback uw
            /assistme /not|${currentPuller}
            /doevents flush Assist
          }
        }
      }
    }
    /if (${lifeSupport2D.Size[1]} && ${Me.PctHPs} <=80) /call check_lifeSupport
    /call check_Buffs
    /call CombatAbilities
    /goto :mainKillLoop
  }
/return

SUB peelTank
  |/echo in peelTanking
|checks if a priest is < 95% hp, if so check for mobs attacking a priest, then attempts to peel
  /declare currClient string local NULL

  |i'm already trying to peel a target, see if it is on me
  /if (${Bool[${peelTarget}]} && ${Select[${Spawn[id ${peelTarget}].Type},${AcceptableTargetTypes}]}) {
    /if (${Target.ID} != ${peelTarget}) /call TrueTarget ${peelTarget}
    /if (${Me.TargetOfTarget.Name.Equal[${Me}]}) {
      |if i had a former assist target and it is still alive/valid then change back to assisting
      /if (${peelTankOriginalAssistTarget} && ${Select[${Spawn[id ${peelTankOriginalAssistTarget}].Type},${AcceptableTargetTypes}]}) /varset AssistTarget ${peelTankOriginalAssistTarget}
      |/varset doTaunt FALSE
      /varset peelTarget 0
    } else {
      /if (${Me.CombatAbilityReady[Mock]}) {
        /doability Mock
        /delay 2
      }
      /if (${Me.CombatAbilityReady[Bazu Bellow]}) /doability "Bazu Bellow"
      /if (${Me.AltAbilityReady[Divine Stun]}) /casting "Divine Stun"
      /if (${Me.SpellReady[Terror of Discord]}) /casting "Terror of Discord"
    }
  }

  /declare t int local 1
  /declare i int local 1

  |Randomly Iterate forward or backwards
  /if (${Math.Rand[2]}==0) {
    /for t 1 to ${NetBots.Counts}
  } else {
    /for t ${NetBots.Counts} downto 1
  }
    /varset currClient ${NetBots.Client[${t}]}
    |/echo checking ${NetBots.Client[${t}]} hp ${NetBots[${currClient}].PctHPs} ispriest ${Select[${NetBots[${currClient}].Class},CLR,DRU,SHM]} inzone ${Bool[${NetBots[${currClient}].InZone}]}
    |/delay 2
    /if (${Select[${NetBots[${currClient}].Class.ShortName},CLR,DRU,SHM]} && ${Bool[${NetBots[${currClient}].InZone}]} && ${NetBots[${currClient}].PctHPs} <= 95) {
      |/echo ${currClient}:${NetBots[${currClient}].PctHPs} is a Priest in need of peeling
      /for i 1 to ${SpawnCount[playerstate 4 npc targetable radius ${AE_Radius} zradius 25]}
        /varset peelTarget ${NearestSpawn[${i},playerstate 4 npc targetable radius ${AE_Radius} zradius 25].ID}
        /call TrueTarget ${peelTarget}
        /delay 1s ${Target.BuffsPopulated}
        |/echo checking ${peelTarget} ${Spawn[id ${peelTarget}].Name} for healer target
        /if (${Select[${Me.TargetOfTarget.Class.ShortName},CLR,DRU,SHM]}) {
          /bc [+y+] ${peelTarget} ${Spawn[id ${peelTarget}].Name} is targeting ${Me.TargetOfTarget.Name} : peeling!
          /netfollow off
          /varset peelTankOriginalAssistTarget ${AssistTarget}
          /varset AssistTarget ${peelTarget}
          |/varset doTaunt TRUE
          /stick 9 front
          /attack on
          /delay 2s ${Target.Distance} < 12
          /doability Taunt
          /if (${Me.CombatAbilityReady[Mock]}) {
            /doability Mock
            /delay 2
          }
          /if (${Me.CombatAbilityReady[Bazu Bellow]}) /doability "Bazu Bellow"
          /if (${Me.AltAbilityReady[Divine Stun]}) /casting "Divine Stun"
          /if (${Me.SpellReady[Terror of Discord]}) /casting "Terror of Discord"
          /return
        } else {
          /varset peelTarget 0
        }
      /next i
    }
  /next t
/return

#event SetTank "<#1#> Set Tank #2# Puller #3#"
SUB event_SetTank(line, ChatSender, tankName, pullerName)
  /if (!${checkEventArgs[${ChatSender},${line},UZR,${pullerName}]}) /return
  /if (${pullerName.Equal[Off]}) {
    /varset currentPuller 0
  } else /if (${Bool[${NetBots[${pullerName}].InZone}]}) {
    /varset currentPuller ${pullerName}
  } else {
    /varset currentPuller 0
    /bc [+r+] Invalid Assignment: pullerName ${pullerName}
    /return
  }
|main tank
  /if (${tankName.Equal[Off]}) {
    /varset mainTank 0
  } else /if (${Bool[${NetBots[${tankName}].InZone}]}) {
    /varset mainTank ${tankName}
    /if (${tankName.Equal[${Me}]}) {
      /varset doTaunt TRUE
      /bc [+y+] mainTank: ${mainTank} , currentPuller: ${currentPuller}
    }
  } else {
    /varset mainTank 0
    /bc [+r+] Invalid Assignment: tankName ${tankName}
    /return
  }
/return


#Event TogglePeelTank "#1# tells you, 'peelTank #2#'"
SUB event_TogglePeelTank(line, ChatSender, toggle)
  /if (${toggle.Equal[On]}) {
    /varset isPeelTank TRUE
    /bc [+y+] Peeling Priests On
  } else {
    /varset isPeelTank FALSE
    /bc [+y+] Peeling Off
  }
/return



|--------------------OffTanking---------By Muergan----|


|------------OffTank Mode---------------|
|--Allows Manual Movement Control over--|
|--OT when Assist is called	          --|
#Event ToggleOffTankMode "#*# tells you, 'offtankmode #1#'"
SUB event_ToggleOffTankMode(line, toggleOT)

/if (${Select[${Me.Class.ShortName},WAR,PAL,SHD]})  {
	/if (${toggleOT.Equal[On]}) {
		/varset OffTank 1
		/bc [+y+] OffTank Mode enabled!
	} else /if (${toggleOT.Equal[Off]}) {
		/varset OffTank 0
		/bc [+y+] OffTank Mode disabled!
	}
}
/return

|------OffTank Target--------------------|
|-- Desinated OffTank #1-4 will OT  -----|
|-- Target until dead or called off.-----|


#Event offtank1 "<#1#> offtank1 #2#"


Sub Event_offtank1(line, ChatSender, int MobID)

/varset OTtarget ${MobID}
/if (${Select[${Me.Class.ShortName},WAR,PAL,SHD]})  {
	/if (${OffTankNum} == 1)  {
		/call OffTankTarget
	}
}
/Return


#Event offtank2 "<#1#> offtank2 #2#"


Sub Event_offtank2(line, ChatSender, int MobID)

/varset OTtarget ${MobID}
/if (${Select[${Me.Class.ShortName},WAR,PAL,SHD]})  {
	/if (${OffTankNum} == 2)  {		
		/call OffTankTarget
	}
}
/Return


#Event offtank3 "<#1#> offtank3 #2#"


Sub Event_offtank3(line, ChatSender, int MobID)

/varset OTtarget ${MobID}
/if (${Select[${Me.Class.ShortName},WAR,PAL,SHD]})  {
	/if (${OffTankNum} == 3)  {
		/call OffTankTarget
	}
}
/Return


#Event offtank4 "<#1#> offtank4 #2#"


Sub Event_offtank4(line, ChatSender, int MobID)

/varset OTtarget ${MobID}
/if (${Select[${Me.Class.ShortName},WAR,PAL,SHD]})  {
	/if (${OffTankNum} == 4)  {		
		/call OffTankTarget
	}
}
/Return


SUB OffTankTarget

/bc [+y+] OffTanking ${Spawn[id ${OTtarget}].CleanName}
/varset AssistTarget ${OTtarget}
/varset Assisting TRUE
/varset AllowControl TRUE
/varset AssistStickDistance 10
/varset OffTankSkipAssist 1
/call StickToAssistTarget
/attack on


/Return

|------OffTank # Backoff-----------------|
|-- Desinated OffTank # will        -----|
|-- Backoff & disengage.               --|

#Event OffTankBackoff "<#*#> otbackoff #1#"

SUB event_OffTankBackoff(line, int OTNumber)

/if (${Select[${Me.Class.ShortName},WAR,PAL,SHD]})  {
	/if (${OTNumber} == ${OffTankNum})  /call OTBackoff
}
/Return

|------OffTank All Backoff----|
|-- all OffTanks will    -----|
|-- Backoff & disengage.    --|

#Event OffTankBackoffAll "#*# tells you, 'otbackoffall'"
#Event OffTankBackoffAll "<#*#> tells the group, 'otbackoffall'"
#Event OffTankBackoffAll "<#*#> tells the raid, 'otbackoffall'"
#Event OffTankBackoffAll "<#*#> otbackoffall"

SUB event_OffTankBackoffAll

/if (${Select[${Me.Class.ShortName},WAR,PAL,SHD]})  {
	/if (${OffTankSkipAssist} == 1)  /call OTBackoff
}

/Return

Sub OTBackoff

/varset OffTankSkipAssist 0
/varset OTtarget 0
/bc [+y+] OffTank Disabled...Backing Off !
/call Assistoff
	

/Return







Sub tanking_Background_Events
  /doevents SetTank
  /doevents TogglePeelTank
  /doevents ToggleOffTankMode
  /doevents offtank1
  /doevents offtank2
  /doevents offtank3
  /doevents offtank4
  /doevents OffTankBackoffAll
  /doevents OffTankBackoff
  
  /if (${OffTankSkipAssist} == 1 && !${Target.ID} )  /call OTBackoff
  
/return

Sub tanking_CharacterSettings
  /if (${Select[${Me.Class.ShortName},WAR,PAL,SHD]}) /call WriteToIni "${Character_Ini},Assist Settings,OffTank#" 
/return

Sub tanking_Aliases
/squelch /alias /offtank1 /bc offtank1 ${Target.ID}
/squelch /alias /offtank2 /bc offtank2 ${Target.ID}
/squelch /alias /offtank3 /bc offtank3 ${Target.ID}
/squelch /alias /offtank4 /bc offtank4 ${Target.ID}
/squelch /alias /otbackoffall /bc otbackoffall
/squelch /alias /otbackoff1 /bc otbackoff 1
/squelch /alias /otbackoff2 /bc otbackoff 2
/squelch /alias /otbackoff3 /bc otbackoff 3
/squelch /alias /otbackoff4 /bc otbackoff 4
/return

Sub tanking_MacroSettings
/return

Sub tanking_Setup
  /declare mainTank string outer
  /declare currentPuller string outer
  /declare isPeelTank bool outer FALSE
  /declare tankKillEngaged bool outer FALSE
  /declare killTarget int outer 0
  /declare peelTarget int outer 0
  /declare peelTankOriginalAssistTarget int outer 0
  /declare OffTank int outer 0
  /declare OffTankSkipAssist int outer 0
  /declare OTtarget int outer 0

  /if (${Ini[${Character_Ini},Assist Settings,OffTank#].Length}) /call IniToVarV "${Character_Ini},Assist Settings,OffTank#" OffTankNum int outer
  

/return