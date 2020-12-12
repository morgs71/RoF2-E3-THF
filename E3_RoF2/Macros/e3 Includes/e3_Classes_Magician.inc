|----------------------------------------------------------------------------|
| Magician Functions
|----------------------------------------------------------------------------|
#event petWeapons "#1# tells you, 'Pet Weapon#*#'"
#event petWeapons "#1# tells you, 'Distribute Pet Weapon#*#'"
#event petWeapons "<#1#> Pet Weapon#*#"
#event petWeapons "<#1#> Distribute Pet Weapon#*#"
sub event_petWeapons(line, ChatSender)
/if (${Debug} || ${Debug_MAG}) /echo |- event_petWeapons ==>
  /declare wasFollowing bool local ${Following}
  /varset Following FALSE
  |/varset Debug_MAG TRUE
  /declare singlePet bool local TRUE
  /if (${Defined[petIDArray]}) /deletevar petIDArray
  /if (${Bool[${line.Find[Distribute]}]}) /varset singlePet FALSE

  /if (!${checkEventArgs[${ChatSender},${line},ZR]}) /return
  /if (!${Defined[petItems2D]}) {
    /if (${Debug} || ${Debug_MAG}) /echo I do not have any Pet Items defined...
    /if (${singlePet} && ${c_eventArgChatSender.NotEqual[${Me}]}) /tell ${c_eventArgChatSender} I do not have any Pet Items defined...
  } else /if (!${SpawnCount[${c_eventArgChatSender}]}) {
    /echo ${c_eventArgChatSender} is not in the zone
    /if (${c_eventArgChatSender.NotEqual[${Me}]}) /tell ${c_eventArgChatSender} We are not in the same zone...
  } else /if (!${singlePet} && !${SpawnCount[pcpet radius 100]}) {
      /echo There are no PC Pets withing a radius of 100
      /if (${c_eventArgChatSender.NotEqual[${Me}]}) /tell ${c_eventArgChatSender} No pets a radius of 100...
  } else /if (${singlePet} && ${Spawn[${c_eventArgChatSender}].Pet.Distance}>100) {
      /if (${c_eventArgChatSender.NotEqual[${Me}]}) /tell ${c_eventArgChatSender} Your pet is not in a radius of 100...
  } else {
    /if (!${singlePet} && ${c_eventArgChatSender.NotEqual[${Me}]}) /tell ${c_eventArgChatSender} Handing out pet weapons...
    /declare originalLoc string local ${Me.Loc}
    /declare p int local
    |if distribute, give to everyone, else just give to the single chatsender
    /for p 1 to ${SpawnCount[pcpet radius 100]}
      /if (!${NearestSpawn[${p},pcpet].Name.Find[familiar]}) {
        |/echo ${p} ${NearestSpawn[${p},pcpet]} ${NearestSpawn[${p},pcpet].Name} ${NearestSpawn[${p},pcpet].Master} ${c_eventArgChatSender}
        |/echo los ${NearestSpawn[${p},pcpet].LineOfSight} d ${Bool[${line.Find[Distribute]}]}
        /if (${NearestSpawn[${p},pcpet].LineOfSight}) {
          /if (!${singlePet}) {
            /call BuildArray petIDArray ${NearestSpawn[${p},pcpet].ID}
            |/echo all added ${NearestSpawn[${p},pcpet].Name}-${NearestSpawn[${p},pcpet].Master} ${petIDArray.Size}
          } else /if (${NearestSpawn[${p},pcpet].Master.CleanName.Equal[${c_eventArgChatSender}]}) {
            /call BuildArray petIDArray ${NearestSpawn[${p},pcpet].ID}
            |/echo you added ${NearestSpawn[${p},pcpet].Name}-${NearestSpawn[${p},pcpet].Master} ${petIDArray.Size}
          }
        }
      }
    /next p
    /if (${Defined[petIDArray]}) {
      /if (${Stick.Active}) /squelch /stick off
      /if (${NetAdvPath.Status}==1) /squelch /netfollow off
      /call give_PetsWeapons FALSE
    }

    /if (${Math.Distance[${originalLoc}]}>20) /call MoveToLoc ${originalLoc} 50 20
    /if (${c_eventArgChatSender.NotEqual[${Me}]}) /tell ${c_eventArgChatSender} Finished arming pets
    /varset Following ${wasFollowing}
  }
  |/varset Debug_MAG FALSE
/if (${Debug} || ${Debug_MAG}) /echo <== event_petWeapons -|
/return
|----------------------------------------------------------------------------|
SUB give_PetsWeapons(autoWeap)
  /declare p int local
  /declare w int local
  /declare allWeapSuccess bool local
  /declare retryWeapTimer timer local 10s

/for p 1 to ${petIDArray.Size}
/echo ${p}-${petIDArray[${p}]}-${Spawn[id ${petIDArray[${p}]}].Name}-${Spawn[id ${petIDArray[${p}]}].Master}
/if (${SpawnCount[id ${petIDArray[${p}]}]}) {
	/varset allWeapSuccess TRUE
    /if (${Spawn[id ${petIDArray[${p}]}].Master.CleanName.NotEqual[${Me}]}) /tell ${Spawn[id ${petIDArray[${p}]}].Master} Incoming pet weapons, hold still!
    /call TrueTarget ${petIDArray[${p}]}
    /if (${Target.ID} && ${Target.Distance}>19) /call MoveToLoc ${Target.Y} ${Target.X} 50 15
    /for w 1 to ${petItems2D.Size[1]}
    :SummonWeap_Loop
    /if (${petItems2D[${w},${iCastName}].Equal["Blazing Stone of Demise"]} && ${FindItemCount[=Summoned: Burning Shank]}) {
		/call SwapItem "Summoned: Burning Shank" "Cursor"
        |fix me later
    |} else /if (${FindItemCount[${petItems2D[${w},${iCastName}].Replace[Summon ,]}]}) {
        |  /call SwapItem "${petItems2D[${w},${iCastName}].Replace[Summon ,]}" "Cursor"
    } else {
        /call check_Ready "petItems2D" ${w}
		/if (${c_Ready}) {
			/if (${check_Mana["petItems2D",${w}]}) {
                /call e3_Cast ${Me.ID} "petItems2D" ${w}
                /delay 5s ${Cursor.ID}
            }
        }
    }
    /if (!${Cursor.ID}) {
        /if (${retryWeapTimer}) {
            /goto :SummonWeap_Loop
        } else {
            /varset allWeapSuccess FALSE
        }
    } else /if (${Cursor.ID}) {
		:OpenTrade_Loop
        /call TrueTarget ${petIDArray[${p}]}
		/if (${Target.ID} && ${Target.Distance}>19) /call MoveToLoc ${Target.Y} ${Target.X} 50 15
		/delay 2s
        /click left target
        /delay 1s ${Window[GiveWnd].Open}
        /if (!${Window[GiveWnd].Open}) {
            /if (${retryWeapTimer} && ${Cursor.ID}) {
				/goto :OpenTrade_Loop
            } else {
                /echo Failed to open trade with ${Target.CleanName}.
            }
        } else {
            :WaitAccept_Loop
			/delay 1s
            /notify GiveWnd GVW_Give_Button LeftMouseUp
            /delay 1s !${Window[GiveWnd].Open}
            /if (${Window[GiveWnd].Open}) {
                /if (${retryWeapTimer}) {
					/goto :WaitAccept_Loop
                } else {
                    /echo Failed to open trade with ${Target.CleanName}.
                }
            }
        }
    }
	/if (${Cursor.ID}) {
		/destroy
	}
    /next w
    /if (${autoWeap} && ${allWeapSuccess}) {
        /call WriteToIni "${MacroData_Ini},${Me.CleanName}-${MacroQuest.Server},Auto-Pet Weapons-${Spawn[id ${petIDArray[${p}]}].Master}" "${Spawn[id ${petIDArray[${p}]}].CleanName}" 1
		/if (${Spawn[pc ${Spawn[id ${petIDArray[${p}]}].Master}].Class.ShortName.Equal[BST]}) {
			/if (!${Defined[${Spawn[id ${petIDArray[${p}]}].Master}BstPet]})  /declare ${Spawn[id ${petIDArray[${p}]}].Master}BstPet int outer  
			/varset ${Spawn[id ${petIDArray[${p}]}].Master}BstPet ${Spawn[${petIDArray[${p}]}].ID} 
			/echo ${Spawn[id ${petIDArray[${p}]}].Master}BstPet is now ${Spawn[${petIDArray[${p}]}].ID}
		}
    }
}
/next p
/return
|----------------------------------------------------------------------------|
SUB check_SummonItems
/if (${Debug} || ${Debug_MAG}) /echo |- check_SummonItems ==>
/if (!${Me.CombatState.Equal[COMBAT]}) {
	/if (${summonMoltenOrb}) {
		/if (!${Me.Moving} && !${combatTimer} && !${activeTimer} && !${rebuffTimer}) {
			/if (!${FindItemCount[=Molten Orb]}) {
				/call check_Ready "moltenOrb2D" 1
				/if (${c_Ready}) {
					/if (${check_Mana["moltenOrb2D",1]}) {
						/call e3_Cast ${Me.ID} "moltenOrb2D" 1
						/delay 2s ${Cursor.ID}
						/if (${Cursor.ID}) /call ClearCursor
					}
				}
			}
		}
    }

	/if (${autoWeapons} && !${Following} && ${Macro.RunTime} > 10) {
		/if (!${Me.Moving} && !${combatTimer} && !${activeTimer} && !${rebuffTimer}) {
			/declare i int local
			/declare p int local
			/declare masterName string local
			/declare petName string local
			/declare petRace string local
			/declare petID int local
			/if (${Defined[petIDArray]}) /deletevar petIDArray
			/for p 1 to ${SpawnCount[pcpet radius 100]}
			/varset masterName ${NearestSpawn[${p},pcpet].Master}
			/varset petName ${NearestSpawn[${p},pcpet].CleanName}
			/varset petID ${NearestSpawn[${p},pcpet].ID}
			/varset petRace ${NearestSpawn[${p},pcpet].Race}
			/if (!${Bool[${petName}]} || !${Bool[${masterName}]} || ${petName.Find[familiar]} || ${petRace.Equal[Gnomework]}) /return
			/if (${NetBots[${masterName}].ID}) {
				/if (${Spawn[id ${petID}].LineOfSight}) {
					/if (${petName.Equal[${Ini[${MacroData_Ini},${Me.CleanName}-${MacroQuest.Server},Auto-Pet Weapons-${masterName}]}]}) {
						/if (${Spawn[pc ${masterName}].Class.ShortName.Equal[BST]}) /goto :BstCheck
						/if (${Debug} || ${Debug_MAG}) /echo check_SummonItems: I have already given weapons to ${petName}
					} else {
						:BstCheck
						/if (${Spawn[pc ${masterName}].Class.ShortName.Equal[BST]}) {
							/if (!${Defined[${masterName}BstPet]})  /declare ${masterName}BstPet int outer  
							/if (${petID} != ${${masterName}BstPet})  {
								/call BuildArray petIDArray ${NearestSpawn[${p},pcpet].ID}
							}	
						} else { 
							/call BuildArray petIDArray ${NearestSpawn[${p},pcpet].ID}
						}
					}
				}
			}
			/next p
			/if (${Defined[petIDArray]}) {
				/call give_PetsWeapons TRUE
			}
		}
	}
}
/if (${Debug} || ${Debug_MAG}) /echo <== check_SummonItems -|
/RETURN

|----------------------------------------------------------------------------|
SUB MAG_Setup
/declare Debug_MAG bool outer FALSE
/if (${Debug} || ${Debug_MAG}) /echo |- MAG_Setup ==>
  /declare coh_dist int outer 150
	/call iniToVarV "${Character_Ini},Magician,Auto-Pet Weapons (On/Off)" autoWeapons bool outer
	/call IniToArrayV "${Character_Ini},Magician,Summoned Pet Item#" petItems
	/declare mageRangedSwap bool outer FALSE
	/if (${Defined[petItems]}) /call BuildSpellArray "petItems"	"petItems2D"



  /if (${Bool[${Me.Book[Summon: Molten Orb]}]}) {
    /declare moltenOrb[1] string outer Summon: Molten Orb
    /call BuildSpellArray "moltenOrb" "moltenOrb2D"
  }
/if (${Debug} || ${Debug_MAG}) /echo <== MAG_Setup -|
/RETURN
|----------------------------------------------------------------------------|
SUB MAG_MacroSettings
/if (${Debug}) /echo |- MAG_MacroSettings ==>
	/call WriteToIni "${advSettings_Ini},MAG Functions,MAG Function#1" "check_Buffs" 1
	/call WriteToIni "${advSettings_Ini},MAG Functions,MAG Function#2" "check_Burns" 1
	/call WriteToIni "${advSettings_Ini},MAG Functions,MAG Function#3" "check_Pets" 1
	/call WriteToIni "${advSettings_Ini},MAG Functions,MAG Function#4" "check_Debuffs" 1
	/call WriteToIni "${advSettings_Ini},MAG Functions,MAG Function#5" "check_Ae" 1
	/call WriteToIni "${advSettings_Ini},MAG Functions,MAG Function#6" "check_Nukes" 1
	/call WriteToIni "${advSettings_Ini},MAG Functions,MAG Function#7" "check_SummonItems" 1
	/call WriteToIni "${advSettings_Ini},MAG Functions,MAG Function#8" "check_GatherMana" 1
/if (${Debug}) /echo <== MAG_MacroSettings -|
/RETURN
|----------------------------------------------------------------------------|
SUB MAG_CharacterSettings
/if (${Debug}) /echo |- MAG_CharacterSettings ==>
	/call WriteToIni "${Character_Ini},Magician,Auto-Pet Weapons (On/Off)"
	/call WriteToIni "${Character_Ini},Magician,Summoned Pet Item"
/if (${Debug}) /echo <== MAG_CharacterSettings -|
/RETURN
|----------------------------------------------------------------------------|
SUB MAG_Aliases
/if (${Debug}) /echo |- MAG_Aliases ==>
	/squelch /alias /dpw /bc Distribute Pet Weapons
	/squelch /alias /PetWeapons /bc Distribute Pet Weapons
/if (${Debug}) /echo <== MAG_Aliases -|
/RETURN
|----------------------------------------------------------------------------|
SUB MAG_Background_Events
|**
	/if (${Bool[${Me.AltAbility[Companion of Necessity]}]} && ${Me.AltAbilityReady[Companion of Necessity]}) {
		/if (${Assisting} && ${Me.CombatState.Equal[Combat]} && ${Target.Named} && ${Target.Level} >= ${Math.Calc[${Me.Level}+3]} && !${Select[${Me.TargetOfTarget.Class},WAR,PAL,SHD]} && ${Spawn[${Target.ID}].PlayerState}==4) {
			/if (${Me.Casting.ID}) /call interrupt
			/delay 1s !${Me.Casting.ID}
			/gu ${Target.Name} has aggro on ${Me.TargetOfTarget.Name}, casting Companion of Necessity
			/casting "Companion of Necessity"
		}
	}
**|
  /doevents petWeapons
/RETURN