|----------------------------------------------------------------------------|
| Wizard Functions
|----------------------------------------------------------------------------|
SUB check_Harvest
	/if (${autoHarvest} && ${Defined[harvestSpells2D]}) {
		|only harvest if im not in ooc regen
		/if (!${Me.Moving} && ${Me.PctMana} < 80) {
			/declare s int local
			/for s 1 to ${harvestSpells2D.Size[1]}
			/call check_Ready "harvestSpells2D" ${s}
			/if (${c_Ready} && ${harvestSpells2D[${s},${iIfs}]}) {
				/if (${check_Mana["harvestSpells2D",${s}]}) {
					/call e3_Cast ${Me.ID} "harvestSpells2D" ${s}
				}
			}
			/if (!${ActionTaken}) /next s
		}
	}
/RETURN
|----------------------------------------------------------------------------|
Sub WIZ_Setup
/if (${Debug}) /echo |- WIZ_Setup ==>
	/call iniToVarV "${Character_Ini},Wizard,Evac Spell" Evac_Spell string outer
	/call iniToVarV "${Character_Ini},Wizard,Auto-Harvest (On/Off)" autoHarvest bool outer
	/call IniToArrayV "${Character_Ini},Wizard,Harvest#" harvestSpells
	/call iniToVarV "${Character_Ini},Wizard,Pyromancy (On/Off)" Pyro bool outer
  /if (${Defined[harvestSpells]}) /call BuildSpellArray "harvestSpells"	"harvestSpells2D"
  

/if (${Debug}) /echo <== WIZ_Setup -|
/return
|----------------------------------------------------------------------------|
SUB WIZ_MacroSettings
/if (${Debug}) /echo |- WIZ_MacroSettings ==>
	/call WriteToIni "${advSettings_Ini},WIZ Functions,WIZ Function#1" "check_Burns" 1
	/call WriteToIni "${advSettings_Ini},WIZ Functions,WIZ Function#2" "check_Buffs" 1
	/call WriteToIni "${advSettings_Ini},WIZ Functions,WIZ Function#3" "check_AE" 1
	/call WriteToIni "${advSettings_Ini},WIZ Functions,WIZ Function#4" "check_Nukes" 1
	/call WriteToIni "${advSettings_Ini},WIZ Functions,WIZ Function#5" "check_Harvest" 1
/if (${Debug}) /echo <== WIZ_MacroSettings -|
/RETURN
|----------------------------------------------------------------------------|
SUB WIZ_CharacterSettings
/if (${Debug}) /echo |- WIZ_CharacterSettings ==>
	/call WriteToIni "${Character_Ini},Wizard,Evac Spell"
	/call WriteToIni "${Character_Ini},Wizard,Auto-Harvest (On/Off)" Off
	/call WriteToIni "${Character_Ini},Wizard,Harvest"
	/call WriteToIni "${Character_Ini},Wizard,Pyromancy (On/Off)"
/if (${Debug}) /echo <== WIZ_CharacterSettings -|
/RETURN
|----------------------------------------------------------------------------|
Sub WIZ_Aliases
/return
|----------------------------------------------------------------------------|
Sub WIZ_Background_Events
/if (${Bool[${Me.AltAbility[Mind Crash]}]} && ${Me.AltAbilityReady[Mind Crash]}) {
     /if (${Assisting} && ${Me.CombatState.Equal[Combat]} && ${Target.Named} && ${Target.Level} >= ${Math.Calc[${Me.Level}+3]} && ${Me.TargetOfTarget.CleanName.Equal[${Me.CleanName}]})  {
     /if (${Me.Casting.ID}) /call interrupt
      /delay 1s !${Me.Casting.ID}
      /echo \say I have aggro on a dangerous target, casting Mind Crash!
      /alt act 451
    }
  }
  
/if (${Pyro} && ${Bool[${Me.AltAbility[Pyromancy]}]} && ${Me.AltAbilityReady[Pyromancy]} && !${Me.Buff[Pyromancy].ID})  /alt act 514

/if (${Me.Pet.ID} && ${Me.Pet.CleanName.Find[${Me.CleanName}`s Familiar]}) /pet get lost	
/return
