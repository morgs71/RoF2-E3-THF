|----------------------------------------------------------------|
|- THF.inc ( designed to work with e3.mac )	                    -|
|- Written by Muergan									        -|
|----------------------------------------------------------------|
|- Contains various events for The Hidden Forest Server			-|
|----------------------------------------------------------------|

|---------------------------------------THF Utility Items ---------------------------------|



|---------------THF Forest Gate-----------------|

#EVENT thfgate "<#1#> thfgate"
#event thfgate "you tell your party, 'thfgate'"
#event thfgate "#1# tells the group, 'thfgate'"
#event thfgate "#1# tells you, 'thfgate'"
SUB EVENT_thfgate 
	/if (${Select[${Me.Class.ShortName},BRD]} && ${Twist.Twisting}) /twist stop
    /call definethfgate
    :checkReady
    /call check_Ready "thfgateArray2D" 1
      /if ((!${c_Ready} || !${check_Mana["thfgateArray2D",1]}) && ${Me.CombatState.NotEqual[COMBAT]}) {
        /if (!${Me.Sitting}) /sit on
        /delay 1s
        /goto :checkReady
      }
     /call e3_cast ${Me.ID} "thfgateArray2D" 1
   
/return





Sub definethfgate
  /declare thfgateitem string local
  /declare i int local
  /if (${FindItem[Elite Charm of Queen Adrianne (Tier 7)].ID}) {
    /varset thfgateitem Elite Charm of Queen Adrianne (Tier 7)
  } else /if (${FindItem[=Exquisite Charm of Queen Adrianne (Tier 6)].ID}) {
    /varset thfgateitem Exquisite Charm of Queen Adrianne (Tier 6)
  } else /if (${FindItem[=Exceptional Charm of Queen Adrianne (Tier 5)].ID}) {
    /varset thfgateitem Exceptional Charm of Queen Adrianne (Tier 5)
  } else /if (${FindItem[=Superior Magical Charm of Queen Adrianne (Tier 4)].ID}) {
    /varset thfgateitem Superior Magical Charm of Queen Adrianne (Tier 4)
  } else /if (${FindItem[=Advanced Magical Charm of Queen Adrianne (Tier 3)].ID}) {
    /varset thfgateitem Advanced Magical Charm of Queen Adrianne (Tier 3)
  } else /if (${FindItem[=Magical Charm of Queen Adrianne (Tier 1)].ID}) {
    /varset thfgateitem Magical Charm of Queen Adrianne (Tier 1)
  } else /if (${FindItem[=Advanced Charm of Queen Adrianne].ID}) {
    /varset thfgateitem Advanced Charm of Queen Adrianne
  } else /if (${FindItem[=Charm of Queen Adrianne].ID}) {
    /varset thfgateitem Charm of Queen Adrianne
  } else /if (${Me.Book[Circle of the Forest]}) {
    /varset thfgateitem Circle of the Forest
  } else /if (${Me.Book[Forest Portal]}) {
    /varset thfgateitem Forest Portal
  } 
  /if (${Bool[${thfgateitem}]}) {
    /if (${Defined[thfgateArray]}) /deletevar thfgateArray
    /declare thfgateArray[1] string outer ${thfgateitem}
    /if (${thfgateArray.Size}) {
      /call BuildSpellArray "thfgateArray" "thfgateArray2D"
      /for i 1 to ${thfgateArray2D.Size[1]}
        /varset thfgateArray2D[${i},${iCastInvis}] 1
      /next i
      }
  } else {
    /bc I do not have a Hidden Forest Gate Charm available
  }
/RETURN

|---------------Hidden Vale Gate-----------------|

#EVENT valegate "<#1#> valegate"
#event valegate "you tell your party, 'valegate'"
#event valegate "#1# tells the group, 'valegate'"
#event valegate "#1# tells you, 'valegate'"
SUB EVENT_valegate
    /if (${Select[${Me.Class.ShortName},BRD]} && ${Twist.Twisting}) /twist stop
	/call defineValegate
    :checkReady
    /call check_Ready "ValegateArray2D" 1
      /if ((!${c_Ready} || !${check_Mana["ValegateArray2D",1]}) && ${Me.CombatState.NotEqual[COMBAT]}) {
        /if (!${Me.Sitting}) /sit on
        /delay 1s
        /goto :checkReady
      }
     /call e3_cast ${Me.ID} "ValegateArray2D" 1
   
/return


Sub defineValegate

  /declare Valegateitem string local
  /declare i int local
  /if (${FindItem[=Token of the Vale].ID}) {
    /varset Valegateitem Token of the Vale
  } else /if (${Me.Book[Circle of the Vale]}) {
    /varset Valegateitem Circle of the Vale
  } else /if (${Me.Book[Vale Portal]}) {
    /varset Valegateitem Vale Portal
  } 
  /if (${Bool[${Valegateitem}]}) {
    /if (${Defined[ValegateArray]}) /deletevar ValegateArray
    /declare ValegateArray[1] string outer ${Valegateitem}
    /if (${ValegateArray.Size}) {
      /call BuildSpellArray "ValegateArray" "ValegateArray2D"
      /for i 1 to ${ValegateArray2D.Size[1]}
        /varset ValegateArray2D[${i},${iCastInvis}] 1
      /next i
      }
  } else {
    /bc I do not have a Hidden Vale Gate Charm available
  }
/RETURN



|-------------- Gather Mana Items -----------------|


Sub defineSmallGather

  /declare SmallGatheritem string local
  /declare i int local
  /if (${FindItem[=Orb of Spirits].ID}) {
    /varset SmallGatheritem Orb of Spirits
  } else /if (${FindItem[=Tears of Frozen Mana].ID}) {
    /varset SmallGatheritem Tears of Frozen Mana
  } else /if (${FindItem[=Tears of Frozen Spirits].ID}) {
    /varset SmallGatheritem Tears of Frozen Spirits
  } 
  /if (${Bool[${SmallGatheritem}]}) {
    /if (${Defined[SmallGatherArray]}) /deletevar SmallGatherArray
    /declare SmallGatherArray[1] string outer ${SmallGatheritem}
    /if (${SmallGatherArray.Size}) {
      /call BuildSpellArray "SmallGatherArray" "SmallGatherArray2D"
      /for i 1 to ${Array2D.Size[1]}
        /varset SmallGatherArray2D[${i},${iCastInvis}] 1
      /next i
      }
  } else {
    /bc I do not have a small gather mana item available
  }
/RETURN




Sub defineLargeGather

  /declare LargeGatheritem string local
  /declare i int local
  /if (${FindItem[=Fire Crystal Wristguard (Tier 10)].ID}) {
    /varset LargeGatheritem Fire Crystal Wristguard (Tier 10)
  } else /if (${FindItem[=Entropic Orb of Lithluran (Tier 8)].ID}) {
    /varset LargeGatheritem Entropic Orb of Lithluran (Tier 8)
  } else /if (${FindItem[=Immaculate Glowing Black Stone (Tier 8)].ID}) {
    /varset LargeGatheritem Immaculate Glowing Black Stone (Tier 8)
  } else /if (${FindItem[=Powerful Silk Slippers (Tier 4)].ID}) {
    /varset LargeGatheritem Powerful Silk Slippers (Tier 4)
  } else /if (${FindItem[=Strange Silk Slippers].ID}) {
    /varset LargeGatheritem Strange Silk Slippers
  } else /if (${FindItem[=Glowing Chains (Tier 2)].ID}) {
    /varset LargeGatheritem Glowing Chains (Tier 2)
  }else /if (${FindItem[=Silver Chains of the Burgerz (Tier 4)].ID}) {
    /varset LargeGatheritem Silver Chains of the Burgerz (Tier 4)
  } else /if (${FindItem[=Silver Chains (Tier 2)].ID}) {
    /varset LargeGatheritem Silver Chains (Tier 2)
  } 
  /if (${Bool[${LargeGatheritem}]}) {
    /if (${Defined[LargeGatherArray]}) /deletevar LargeGatherArray
    /declare LargeGatherArray[1] string outer ${LargeGatheritem}
    /if (${LargeGatherArray.Size}) {
      /call BuildSpellArray "LargeGatherArray" "LargeGatherArray2D"
      /for i 1 to ${Array2D.Size[1]}
        /varset LargeGatherArray2D[${i},${iCastInvis}] 1
      /next i
      }
  } else {
    /bc I do not have a Large gather mana item available
  }
/RETURN


Sub check_GatherMana


	/if (${Me.Combat} && ${Select[${Me.Class.ShortName},BST,PAL,RNG,SHD]})  {
		/return	
	} else /if (${Me.Combat} && ${Me.PctMana} < 30)  {
		/call defineSmallGather
		/call check_Ready "SmallGatherArray2D" 1
		/if (${c_Ready})  {
			/call e3_cast ${Me.ID} "SmallGatherArray2D" 1
		}
	} else /if (${Me.Combat} && ${Me.PctMana} < 10)  {
		/call defineLargeGather
		/call check_Ready "LargeGatherArray2D" 1
		/if (${c_Ready})  {
			/call e3_cast ${Me.ID} "LargeGatherArray2D" 1
		}
	} else /if (!${Me.Combat} && !${Me.Moving} && ${Me.PctMana} < 30)  {
		/call defineSmallGather
		/call check_Ready "SmallGatherArray2D" 1
		/if (${c_Ready})  {
			/call e3_cast ${Me.ID} "SmallGatherArray2D" 1
		}
	} else /if (!${Me.Combat} && !${Me.Moving} && ${Me.PctMana} < 10)  {
		/call defineLargeGather
		/call check_Ready "LargeGatherArray2D" 1
		/if (${c_Ready})  {
			/call e3_cast ${Me.ID} "LargeGatherArray2D" 1
		}
	}
			
/Return		
		

		
|---------------------------Auto Shrink-------------------------|	

SUB Auto_Shrink

/call SelfShrink_Spell
/call check_Ready "SelfShrinkSpellArray2D" 1
/if (${c_Ready})  {
	/call e3_cast ${Me.ID} "SelfShrinkSpellArray2D" 1
}


/Return


SUB SelfShrink_Spell

/declare SelfShrinkSpell string local

/if (${FindItem[=Green Mask (Tier 1)].ID}) {
    /varset SelfShrinkSpell "Green Mask (Tier 1)"
	/varset NoShrinkItem 0
  } else /if (${FindItem[=Chaotic Brigandine Ring].ID}) {
    /varset SelfShrinkSpell "Chaotic Brigandine Ring"
	/varset NoShrinkItem 0
  } else /if (${FindItem[=Chaotic Shimmering White Shroud].ID}) {
    /varset SelfShrinkSpell "Chaotic Shimmering White Shroud"
	/varset NoShrinkItem 0
  } else /if (${FindItem[=Vial of Shrieker Essence].ID}) {
    /varset SelfShrinkSpell "Vial of Shrieker Essence"
	/varset NoShrinkItem 0
	} else /if (${Me.Book[Shrink]}) {
    /varset SelfShrinkSpell Shrink
  } 
  }
  
 /if (${Bool[${SelfShrinkSpell}]}) {
    /if (${Defined[SelfShrinkSpellArray]}) /deletevar SelfShrinkSpellArray
    /declare SelfShrinkSpellArray[1] string outer ${SelfShrinkSpell}
    /if (${SelfShrinkSpellArray.Size}) {
		/call BuildSpellArray "SelfShrinkSpellArray" "SelfShrinkSpellArray2D"
	}
} else {
    /bc I do not have a Shrink item available
	/varset NoShrinkItem 1
  }

	
/Return		
		
| -------------------------------------------------------------------------------------------------------|
| -- Call of the Hero: Single Target, Group, All (Netbots)          Written by Muergan                  -|
|========================================================================================================|
| -- Single Target - Tell bot:   cohme		(Pulls sender of tell to bot recieving command)				-|
| -- **Coming Soon**Group - Tell bot:   cohgroup			(Pulls Group to bot that recieved command)  -|
| -- CoH all Netbots - Tell bot:   cohall	(Pulls all Netbots to bot that recieved command				-|
| -------------------------------------------------------------------------------------------------------|

#event cohme "#1# tells you, 'cohme'"
#event cohgroup "#1# tells you, 'cohgroup'"
#event cohall "#1# tells you, 'cohall'"
		

		
Sub definecohspell
  /declare cohspell string local
  /declare i int local
  /if (${Me.Book[Call of the Hero]}) {
    /varset cohspell Call of the Hero
  } else /if (${FindItem[=Ino's Lost Trinket (Tier 10)].ID}) {
    /varset cohspell Ino's Lost Trinket (Tier 10)
  } else /if (${FindItem[=Arion, Skull of the Ancient (Tier 10)].ID}) {
    /varset cohspell Arion, Skull of the Ancient (Tier 10)
  } else /if (${FindItem[=Orb of the Crimson Bull (Tier 2)].ID}) {
    /varset cohspell Orb of the Crimson Bull (Tier 2)
  } 
  /if (${Bool[${cohspell}]}) {
    /if (${Defined[cohspellArray]}) /deletevar cohspellArray
    /declare cohspellArray[1] string outer ${cohspell}
    /if (${cohspellArray.Size}) {
      /call BuildSpellArray "cohspellArray" "cohspellArray2D"
      /for i 1 to ${cohspellArray2D.Size[1]}
        /varset cohspellArray2D[${i},${iCastInvis}] 1
      /next i
      }
  } else {
    /bc I do not have a CoH Spell/Item available
  }
/RETURN		
		
		
		
		
		
|-- CoH Me Event --|		
		
		
sub Event_cohme(line, ChatSender)
	/if (!${checkEventArgs[${ChatSender},${line},ZR]}) /return
	/if (${Select[${Me.Class.ShortName},BRD]} && ${Twist.Twisting}) /twist stop
	/call definecohspell
	
			 /if (${Me.Combat})  { 
				/tell ${ChatSender} I'm in Combat please try again in a few !
				/return
			} else /if (!${Me.Combat})  { 
				/if (!${SpawnCount[pc ${ChatSender}]})  {
					/tell ${ChatSender} Your not in my Zone.
					/Return
				} else  {
					/tell ${ChatSender} Call of Hero is Incoming...Please Standby.
					/call e3_cast ${Spawn[pc =${ChatSender}].ID} "cohspellArray2D" 1		
				}
			}	
		
/return
		


		
|-- CoH All Event -- |		
		

sub Event_cohall(line, ChatSender)
	/if (!${checkEventArgs[${ChatSender},${line},ZR]}) /return
	/if (${Select[${Me.Class.ShortName},BRD]} && ${Twist.Twisting}) /twist stop
	/call definecohspell

			/if (${Me.Combat}) {
				/tell ${ChatSender} I'm in Combat please try again in a few !	
				/return
			
			} else /if (!${Me.Combat}) { 
			
				/declare i int local
			
				/for i 1 to ${NetBots.Counts}
				
					/if (!${SpawnCount[pc ${NetBots.Client[${i}]}]}) { 
						/docommand ${ChatToggle} (${NetBots.Client[${i}]}) is not in zone!
						
						
					} else /if (${NetBots[${NetBots.Client[${i}]}].Zone} && ${Spawn[pc ${NetBots.Client[${i}]}].Distance} < 30)  {
						/docommand ${ChatToggle} (${NetBots.Client[${i}]}) is already here!
				
					} else /if (${NetBots[${NetBots.Client[${i}]}].Zone} && ${Spawn[pc ${NetBots.Client[${i}]}].Distance} > 30)  {
						
							/docommand ${ChatToggle} Call of Hero is Incoming on (${NetBots.Client[${i}]})!
							:cohspellready
							/call check_Ready "cohspellArray2D" 1
							/if (${c_Ready})  {
								/call e3_cast ${NetBots[${NetBots.Client[${i}]}].ID} "cohspellArray2D" 1
								/if (${Spawn[pc ${NetBots.Client[${i}]}].Distance} > 30)  {
									/goto :cohspellready
								}
							} else {
								|/delay 2s
								/goto :cohspellready
							}
						
						}	

					}
				
				/next i
				
			}
			/docommand ${ChatToggle} I'm done CoHing all Netbots in Zone!
		}
	
/return
		
		
		
| -------------------------------------------------------------------------------------------------------|
| -- Attendance: Bot Roll Call        use: /attendance      Written by Smaht        Edited by: Muergan  -|
| -------------------------------------------------------------------------------------------------------|

#EVENT attendance "<#1#> attendance"

SUB EVENT_attendance(line, ChatSender)

| ---------------- If I made the attendance call, continue, otherwise exit
/if (${Me.CleanName.Equal[${ChatSender}]}) {

	/declare e3xUtilitiesDebug bool local FALSE
	/declare shortDistList string local
	/declare medDistList string local
	/declare feetwetList string local
	/declare drowningList string local
	/declare outOfZoneList string local

	| ---------------- Distances against which to check
	/declare shortDistance int local 50
	/declare medDistance int local 85

	/declare i int local

	| ---------------- Set targetlist to the NetBots.Client list
	/for i 1 to ${NetBots.Counts}

    	| ---------------- For any NetBots.Client, if InZone and (Distance3D > shortDistance) and !Me add to shortDistList
		/if (${NetBots[${NetBots.Client.Arg[${i}]}].InZone} && (${Spawn[${NetBots.Client.Arg[${i}]}].Distance3D} > ${shortDistance}) && !${NetBots.Client.Arg[${i}].Equal[${Me.Name}]}) /varset shortDistList ${shortDistList} ${NetBots.Client.Arg[${i}]}

		| ---------------- For any NetBots.Client, if !InZone add to outOfZoneList
		/if (!${NetBots[${NetBots.Client.Arg[${i}]}].InZone}) /varset outOfZoneList ${outOfZoneList} ${NetBots.Client.Arg[${i}]}

		| ---------------- Debug info
		/if (${Debug_Thf} || ${Debug}) {
			/echo shortdistList : ${NetBots.Client.Arg[${i}]} : ${Spawn[${NetBots.Client.Arg[${i}]}].Distance3D} : InZone=${NetBots[${NetBots.Client.Arg[${i}]}].InZone}
			/echo Current list for shortDistList is: ${shortDistList}
    		/echo outOfZoneList : ${NetBots.Client.Arg[${i}]} : InZone=${NetBots[${NetBots.Client.Arg[${i}]}].InZone}
			/echo Current list for outOfZoneList is: ${outOfZoneList}
		}

        /next i

    | ---------------- Report outOfZoneList
    /if (${outOfZoneList.Length}) /bc [+r+] Out of Zone: ${outOfZoneList}

	| ---------------- If no one in the list, report everyone present and goto underwater checks
	/if (!${shortDistList.Length}) /multiline ; /bc [+r+] Everyone present.;/goto :underwater

	| ---------------- Debug info
	/if (${Debug_Thf} || ${Debug}) /echo shortdistList length is ${Math.Calc[${shortDistList.Count[ ]} + 1]}

	/varset i 1
    /for i 1 to ${Math.Calc[${shortDistList.Count[ ]} + 1]}

		| ---------------- For any shortDistList member, if (Distance3D > medDistance) add to medDistList
		/if (${Spawn[${shortDistList.Arg[${i}]}].Distance3D} > ${medDistance} || !${Spawn[${shortDistList.Arg[${i}]}].LineOfSight}) /varset medDistList ${medDistList} ${shortDistList.Arg[${i}]}

		| ---------------- Debug info
		/if (${Debug_Thf} || ${Debug}) {
			/echo medDistList : ${shortDistList.Arg[${i}]} : ${Spawn[${shortDistList.Arg[${i}]}].Distance3D}
			/echo Current list for medDistList is: ${medDistList}
		}

		/next i

	| ---------------- Report shortDistList members and medDistList members if they exist
	/if (!${medDistList.Length}) /bc The following are close but not present: ${shortDistList}
	/if (${medDistList.Length}) /bc The following are Lost or Stuck: ${medDistList}

	:underwater

	| ---------------- If I am feetwet skip, otherwise figure out who is in the water
	/if (!${Me.FeetWet}) {

		/varset i 1
    	/for i 1 to ${NetBots.Counts}

    		/if (${Spawn[${NetBots.Client.Arg[${i}]}].FeetWet}) /varset feetwetList ${feetwetList} ${NetBots.Client.Arg[${i}]}

    		| ---------------- Debug info
			/if (${Debug_Thf} || ${Debug}) {
				/echo FeetWet: ${NetBots.Client.Arg[${i}]} : ${Spawn[${NetBots.Client.Arg[${i}]}].FeetWet}
				/echo Current list for feetwetList is: ${feetwetList}
			}

			/next i

		/if (${feetwetList.Length}) /bc [+r+] The following are in the drink! ${feetwetList}
	}

}

/return








|---------------------------------------Events Section----------------------------------------|


|-------------- Rallos Zek Event  -----------------|
|  Enables Bots to use Blue Rof of Zek             |
| /ralloson   - Starts Bane Nuking                 |
| /rallosoff  - Stops Bane Nuking (resets on zone) |
|--------------------------------------------------|


#event RallosZekOn "<#1#> ralloszek on"
		
		
sub Event_RallosZekOn

/if (${Select[${Me.Class.ShortName},CLR,DRU,SHM,WIZ,NEC,ENC,MAG]} && ${FindItem[=Blue Rod of Zek].ID})  {
	/varset RallosZek True
	/docommand ${ChatToggle} Rallos Zek will burn! BANE NUKES ENGAGED !!!!
}	
/RETURN	

#event RallosZekOff "<#1#> ralloszek off"
		
		
sub Event_RallosZekOff

/if (${Select[${Me.Class.ShortName},CLR,DRU,SHM,WIZ,NEC,ENC,MAG]} && ${FindItem[=Blue Rod of Zek].ID})  {
	/varset RallosZek False
	/docommand ${ChatToggle} Rallos Zek Bane mode DISABLED!!
}	
/RETURN	
	


|-----------------Macro Shared Events-------By Bazillions & Muergan--------|


Sub IsTank
/varset TankName ${Me.TargetOfTarget.CleanName}
/if (${Select[${Me.Class.ShortName},PAL,SHD,WAR]} && ${Me.TargetOfTarget.CleanName.Equal[${Me.CleanName}]})  {
	/varset IsTank TRUE
} else /if (!${Select[${Me.Class.ShortName},PAL,SHD,WAR]} || !${Me.TargetOfTarget.CleanName.Equal[${Me.CleanName}]})  {
	/varset IsTank FALSE
}
/return
		
		

Sub WaitUntilNotMoving
	:WaitUntilNotMovingLoop
		/delay 4
		/doevents
	/if (${Me.Moving})  {
		/goto :WaitUntilNotMovingLoop
	}
/return


Sub DraekonCalled
	:DraekonCalledLoop
		/delay 4
		/doevents
	/if (${DraekonCall}==1)  {
		/goto :DraekonCalledLoop
	}
/return


Sub DraekonGrass
	:DraekonGrassLoop
		/delay 4
		/doevents
	/if (${DraekonGrass}==1)  {
		/goto :DraekonGrassLoop
	}
/return

Sub ReaperDuck
	:ReaperDuckLoop
		/delay 4
		/doevents
	/if (${ReaperDucking}==1)  {
		/goto :ReaperDuckLoop
	}
/return

Sub ReaperFarAway
	:ReaperFarAwayLoop
		/delay 4
		/doevents
	/if (${ReaperFar}==1)  {
		/goto :ReaperFarAwayLoop
	}
/return

Sub ValikWait
	:ValikWaitLoop
		/delay 4
		/doevents
	/if (${ValikWait}==1)  {
		/goto :ValikWaitLoop
	}
/return
	

|---------------Reaper of Mortality-----------------------Original by Bazillions--Editited for E3 by Muergan------|
|																												  |
|  *Note -  Start all character in Melee Range																	  |
|-----------------------------------------------------------------------------------------------------------------|

#Event ReaperOfMortalityDuck "The Reaper of Mortality levels his eyes with your throat."
#Event ReaperOfMortalityUnduck "You feel the hand of death steal the mortality of those who are too afraid to stand toe-to-toe with their foe."
#Event ReaperOfMortalityMoveClose "Come Foolish Mortals, if you wish to play, then so be it. We shall see how brave you really are! Come to Me!"
#Event ReaperOfMortalityUnmoveClose "You feel the hand of death steal the mortality of those who are too afraid to stand toe-to-toe with their foe."
#Event ReaperOfMortalityMoveFar "Come Foolish Mortals, if you wish to play, then so be it. We shall play a quick game of cat and mouse.  Run fools!"
#Event ReaperOfMortalityUnmoveFar "You feel the hand of death steal the mortality of those who dare approach too closely."



Sub Event_ReaperOfMortalityDuck(string line)
	/call IsTank
	/popup Duck!!!
	/if (${IsTank}) /return
	/varset ReaperDucking 1
	/keypress ${DuckKey}
	/call ReaperDuck

/return

Sub Event_ReaperOfMortalityUnduck(string line)
	/call IsTank
	/popup Ducking finished
	/if (${IsTank}) /goto :SkipDuck
	/varset ReaperDucking 0
	/keypress ${DuckKey}
	:SkipDuck
	/if (${IsTank})  {
		/call KillReaper
	} else /if (!${IsTank})  {	
		/if (${MainAssist.Equal[${Me.CleanName}]})  {
			/call KillReaper
		}
	}

/return

Sub Event_ReaperOfMortalityMoveClose(string line)
	/call IsTank
	/popup Move close!!!
	/if (${IsTank})  {  
		/rsay Move close to reaper !
		/return
	}
	
	/call Event_MoveToReaper
/return


Sub Event_ReaperOfMortalityMoveFar(string line)
	/call IsTank
	/popup Run away!!!
	/if (${IsTank})  {
		/rsay Move away from reaper !
		/return
		} 
	/varset ReaperFar 1
	/doevents BackOff
	/moveto loc -14.97 -146.53
	/call WaitUntilNotMoving
	/if (${Select[${Me.Class.ShortName},MAG,DRU,WIZ,SHM,NEC,ENC]})  {
		/return
		}
	/call ReaperFarAway
/return

Sub Event_ReaperOfMortalityUnmoveFar(string line)
	/call IsTank
	/popup Run away finished
	/if (${IsTank})  {
		/rsay Safe to move !
		/return
	} 
	/varset ReaperFar 0
	/call Event_MoveToReaper
/return


Sub Event_MoveToReaper

 /bc [Event] - Returning to The Reaper of Mortality
	/call IsTank
	/if (${IsTank})  {
		/rsay Safe to move back ${Time}
		/delay 4s
		/goto :KillReaper
		}
	/if (${Spawn[NPC =The Reaper of Mortality].ID} && ${Spawn[NPC =The Reaper of Mortality].Distance} > 12)  {
		/moveto id ${Spawn[NPC =The Reaper of Mortality].ID}
		/call WaitUntilNotMoving
		/delay 2s
	}
	:KillReaper
	/if (${IsTank})  {
		/call KillReaper
	} else /if (!${IsTank})  {	
		/if (${MainAssist.Equal[${Me.CleanName}]})  {
			/call KillReaper
		}
	}

/return


Sub KillReaper

/bc Assist ${TankName} on ${Spawn[NPC =The Reaper of Mortality].ID}
/return
		
	
	
|----------------------------Draekon HoH---------------Originals by Bazillions & Rafe--Editited for E3 by Muergan------|

#Event DraekonMoveToNpc "You hear the voice of #1# calling to you, 'Come to me young one, we must combine our might to destroy him!'"
#Event DraekonGoToGrass "The world begins to spin as Draekon starts to chant an evil spell pulling you towards him."
#Event DraekonGoToMelee "The world begins to spin as Draekon starts to chant a powerful spell pushing you away from him"
#Event DraekonSafeFromGrass "You escape the power of Draekon's spell"
#Event DraekonVoiceEnd "You join your powers with #1#, preventing Draekon from attacking!"


Sub Event_DraekonMoveToNpc(string line, string NpcName)
	/call IsTank
	/if (${IsTank}) /return
	/varset DraekonCall 1
	/stick off
	/attack off
	/target npc ${NpcName}
	/delay 3
	/stick hold
	/call WaitUntilNotMoving
	/call DraekonCalled
/return

Sub Event_DraekonGoToGrass(string line)
	/call IsTank
	/if (${IsTank})  {
		/rsay Everyone move to grass ${Time}
		/return
		}
	/varset DraekonGrass 1
	/stick off
	/attack off
	/moveto loc 335.71 -1582.96
	/call WaitUntilNotMoving
	/if (${Select[${Me.Class.ShortName},MAG,DRU,WIZ,SHM,NEC,ENC]})  {
		/return
		}
	/call DraekonGrass
/return

Sub Event_DraekonGoToMelee(string line)
	/call IsTank
	/if (${IsTank})  {
		/rsay Everyone move to melee range ${Time}
		/return
		}
	/stick off
	/call Event_MoveToDraekon
/return

Sub Event_DraekonSafeFromGrass(string line)
	/varset DraekonGrass 0
	/call Event_MoveToDraekon
/return


Sub Event_DraekonVoiceEnd(string Line, string targetName)

	/varset DraekonCall 0
    /call Event_MoveToDraekon

/return

	
Sub Event_MoveToDraekon

	/call IsTank
	/if (${IsTank})  {
		/rsay Safe to move back ${Time}
		/delay 3s
		/goto :MovedtoDraekonNowKill
	}
	:MoveToDraekon
	/if (${Spawn[NPC =Lord Draekon].ID} && ${Spawn[NPC =Lord Draekon].Distance} > 20)  {
		/moveto id ${Spawn[NPC =Lord Draekon].ID}
		/delay 5
	}
    /if (${Spawn[NPC =Lord Draekon].ID}!=NULL && ${Spawn[NPC =Lord Draekon].Distance} > 20) /goto :MoveToDraekon
	/call WaitUntilNotMoving
	:MovedtoDraekonNowKill
	/if (${IsTank})  {
		/rsay Kill Draekon !!!
		/call KillDraekon
	} else /if (!${IsTank})  {	
		/if (${MainAssist.Equal[${Me.CleanName}]})  {
			/rsay Kill Draekon !!!
			/call KillDraekon
		}
	}
/return


Sub KillDraekon
/delay 30
/bc Assist ${TankName} on ${Spawn[NPC =Lord Draekon].ID}
/return


	
	
	
|------------------Seravince---------------Originals by Bazillions--Editited for E3 by Muergan------|
|																									|
|  ***Start all Characters middle of stairs facing away from him***									|
|---------------------------------------------------------------------------------------------------|	
	
	
#Event SeravinceAoeStun "Emperor Seravince body goes rigid as he begins to look around at his attackers!"
#Event SeravinceCreatesAdds "Seravince calls forth his advisors as he shouts, 'You will never be able to control or strike fear into the hearts of those whom follow their true Emperor!'"
#Event SeravinceCallsAddsToAttack "The world begins to spin rapidly as Seravince calls forth his guardians!"
	
	
	
Sub Event_SeravinceAoeStun(string line)
	/call IsTank
	/popup AoE Stun
	/if (${Select[${Me.Class.ShortName},MAG,DRU,WIZ,SHM,NEC,ENC,CLR,DRU,SHM]})  {
		/return
	} else /if (${IsTank})  {
		/rsay Turn Away !!!	
	}
	/stick off
	/varset AllowControl FALSE
	/face away 
	/delay 5s
	/face fast 
	/if (${IsTank})  {
		/rsay Safe to Attack !!!
		/call KillSeravince
	} else /if (${MainAssist.Equal[${Me.CleanName}]})  {
			/rsay Safe to Attack !!!
			/call KillSeravince
	}
/return



Sub Event_SeravinceCreatesAdds(string line)
	/call IsTank
	/popup Seravince Created Adds
	/if (${IsTank})  {
		/rsay Seravince Created Adds
		/return
	}
	/if (${Me.Class.ShortName.Equal[ENC]})  {
		/doevents BackOff
		/pet get lost
		/moveto loc 3.29 -1044.19
		/call WaitUntilNotMoving
		/call SeravinceMez
	}
/return

Sub Event_SeravinceCallsAddsToAttack(string line)
	/call IsTank
	/popup Seravince Adds Attacking!!!
	/if (${IsTank})  {
		/rsay Seravince Adds Attacking!!!
		/return
		}
	/return	
		
Sub SeravinceMez	
	/if (${Me.Class.ShortName.Equal[ENC]}) {
		:EnchanterSeravinceLoop
		/target Advisor Tel`Quka
		/call Mez
		/delay 4s
		/target Advisor Vulth`Rak
		/call Mez
		/delay 4s
		/target Advisor Zser`Vith
		/call Mez
		/if (${SpawnCount[npc "Emperor Seravince"]} > 0) {
			/delay 3s
			/goto :EnchanterSeravinceLoop
		}
	}
/return

Sub KillSeravince

/bc Assist ${TankName} on ${Spawn[NPC =Emperor Seravince].ID}
/return



	
	
|--------------------------Vistrinda-------By Muergan--------------------|

#Event VistrindaEggs "Out of the corner of your eye you see Vistrinda's Eggs begin to wobble as a strange voice enters your mind, 'Free me mortal! Only your words can break this shelled prison!'"	
#Event VistrindaAddADead "a corrupted caretaker has been slain by #*#!"
#Event VistrindaAddADead "You have slain a corrupted caretaker!"
#Event VistrindaAddA "A corrupted caretaker hits YOU for #*# points of damage."
#Event VistrindaAddAKill "<#*#> KillAddA"
#Event VistrindaAddBKill "<#*#> KillAddB"
#Event VistrindaAddBDead "A Corrupted Dragorn has been slain by #*#!"
#Event VistrindaAddBDead "You have slain A Corrupted Dragorn!"
#Event VistrindaAddB "A Corrupted Dragorn hits YOU for #*# points of damage."


Sub EggCheck

:Egg
/keypress ${CycleTarget}
/if (${Spawn[NPC =a corrupted caretaker].ID})  {
	:goto Egg
} else /if (${Spawn[NPC =A Corrupted Dragorn].ID})  {
	:goto Egg
} else /if (${Spawn[NPC =Vistrinda, The Brood Mother].ID})  {
	:goto Egg
} else /if (${Spawn[NPC =Faithful Dragorn].ID})  {
	:goto Egg
   } 
/return


Sub EggTrigger

/declare i   int local 1
/for i 1 to 3
/say you are free
/if (!${Target.ID}) /return
/delay 1
/next i
/return



Sub	Event_VistrindaEggs

/popup EGGS HAVE SPAWNED !!!!
/if (${Select[${Me.Class.ShortName},MAG,WIZ,NEC,ENC]})  {
	/declare originalLoc string local
	/varset originalLoc string local ${Me.Loc.Replace[ ,]}
	/doevents BackOff
	/moveto loc 722.02 1562.18
	/call WaitUntilNotMoving
	/call EggCheck
	/call EggTrigger
	/moveto loc 614.88 1486.32
	/call WaitUntilNotMoving
	/call EggCheck
	/call EggTrigger
	/moveto loc 722.64 1482.72
	/call WaitUntilNotMoving
	/call EggCheck
	/call EggTrigger
	/moveto loc 615.39 1562.00
	/call WaitUntilNotMoving
	/call EggCheck
	/call EggTrigger
	/moveTo loc 668.37 1604.41
	/call WaitUntilNotMoving
	/call KillVistrinda
}
/return


Sub	Event_VistrindaAddA

/if (${VistrindaAddATimer} == 0)  {
	/if (${SpawnCount[npc "a corrupted caretaker"]})  {
		/varset VistrindaAddATimer 1
		/bc KillAddA
	}
}

/return


Sub	Event_VistrindaAddAKill

/call IsTank
/if (${IsTank})  {
	/rsay Kill a corrupted caretaker!!!
	/call KillVistrindaAddA
}
/if (!${IsTank})  {	
	/if (${MainAssist.Equal[${Me.CleanName}]})  {
		/rsay Kill a corrupted caretaker!!!
		/call KillVistrindaAddA
	}
}
/return
	
Sub	Event_VistrindaAddADead

/if (${SpawnCount[npc "a corrupted caretaker"]} == 0) {
	/varset VistrindaAddATimer 0
	}
/call IsTank
/if (${IsTank})  {
		/if (${IsTank})  {	
			/call KillVistrinda
		}
	/return
}
/if (!${IsTank})  {
	/if (${MainAssist.Equal[${Me.CleanName}]})  {
		/call KillVistrinda
	}
}
/return

Sub	Event_VistrindaAddB

/if (${VistrindaAddBTimer} == 0)  {
	/if (${SpawnCount[npc "A Corrupted Dragorn"]})  {
		/varset VistrindaAddBTimer 1
		/bc KillAddB		
	}
}

/return


Sub	Event_VistrindaAddBKill

/call IsTank
/if (${IsTank})  {
	/rsay Kill A Corrupted Dragorn!!!
	/call KillVistrindaAddB
}
/if (!${IsTank})  {	
	/if (${MainAssist.Equal[${Me.CleanName}]})  {
		/rsay Kill A Corrupted Dragorn!!!
		/call KillVistrindaAddB
	}
}
/return


	
Sub	Event_VistrindaAddBDead

/if (${SpawnCount[npc "A Corrupted Dragorn"]} == 0) {
	/varset VistrindaAddBTimer 0
	}
/call IsTank
/if (${IsTank})  {
		/if (${IsTank})  {	
			/call KillVistrinda
		}
	/return
}
/if (!${IsTank})  {
	/if (${MainAssist.Equal[${Me.CleanName}]})  {
		/call KillVistrinda
	}
}
/return


	
Sub KillVistrinda
/delay 10
/bc Assist ${TankName} on ${Spawn[NPC =Vistrinda, The Brood Mother].ID}
/return


Sub KillVistrindaAddA
/delay 10
/bc Assist ${TankName} on ${Spawn[NPC =a corrupted caretaker].ID}
/return

Sub KillVistrindaAddB
/delay 10
/bc Assist ${TankName} on ${Spawn[NPC =A Corrupted Dragorn].ID}
/return



|-----------------------Valik the First Creation----------------By Muergan----|
|																    		  |
|      Park all in sight of Valik, hide only clerics behind wall & engage     |
|-----------------------------------------------------------------------------|

#Event ValikBegin "You feel a sense of coming doom and horror as Valik begins to chant a powerful spell!"	
#Event ValikEnd "Valik releases his spell causing those within his sight to be flung down the spire in a state of Vertigo!"	

Sub	Event_ValikBegin
/popup RUN AWAY !!!!
/varset ValikWait 1
/call IsTank
/if (${IsTank} || ${Select[${Me.Class.ShortName},CLR]})  {
	/if (${IsTank})  {
		/rsay Run away you Fools!!!
	}
	/return
	}
/if (!${IsTank})  {	
	/stick off
	/attack off
	/moveto loc 5.71 -60.22
	/call WaitUntilNotMoving
	/moveto loc -8.23 -84.46
	/call WaitUntilNotMoving
	/call ValikWait
}
/RETURN


Sub KillValik
/delay 20
/bc Assist ${TankName} on ${Spawn[NPC =Valik the First Creation].ID}	
/return


Sub	Event_ValikEnd
/popup SAFE TO RETURN !!!
/varset ValikWait 0
/call IsTank
/if (${IsTank} || ${Select[${Me.Class.ShortName},CLR]})  {
		/if (${IsTank})  {			
			/delay 20
			/goto :KillValik
		}
	/return
}
/moveto loc 5.71 -60.22
/call WaitUntilNotMoving
:KillValik
/if (${IsTank})  {	
			/rsay Return to the fight!!!
			/call KillValik		
} else /if (!${IsTank})  {	
	0
		/rsay Return to the fight!!!
		/call KillValik
	}
}
/return



|-----------------------------Maestro Tan'Lor-------------------|
#event MaestroGoAdds "The Maestro raises his head and beckons forth the Souls of his minions."
#event MaestroGoto "The Maestro staggers and stumbles a little."


Sub	Event_MaestroGoto
/popup Run To Maestro !!!!
/if (${Select[${Me.Class.ShortName},MNK,BER,ROG,RNG,BST,BRD]})  {
	/call AssistOff
	/moveto loc -1.10 -2.68
	/call WaitUntilNotMoving
	/moveto loc -108.45 2.44
	/call WaitUntilNotMoving
}
/if (${MainAssist.Equal[${Me.CleanName}]})  {
	/call KillMaestro
}
/RETURN

Sub	Event_MaestroGoAdds
/popup Run To Hallway !!!!
/if (${Select[${Me.Class.ShortName},WIZ,ENC,MAG,NEC,DRU,CLR,SHM]})  {
	/call AssistOff	
} else /if (${Select[${Me.Class.ShortName},MNK,BER,ROG,RNG,BST,BRD]})  {
	/call AssistOff
	/moveto loc -108.45 2.44
	/call WaitUntilNotMoving
	/moveto loc -55.31 10.25
	/call WaitUntilNotMoving
	/moveto loc -1.10 -2.68
	/call WaitUntilNotMoving
}
/RETURN


Sub KillMaestro

/delay 4s
/bc Assist ${MainAssist} on ${Spawn[NPC =Maestro Tan`Lor].ID}
	
/return




|---------------------------------4th of July--Moarburgerz---------------By Muergan-------------|
#event MoarburgerzHungry "You see Moarburgerz look around with hunger in his eyes."
#event MoarburgerzFull "Moarburgerz is no longer in a hunger craze!"

Sub Event_MoarburgerzHungry

/popup Stop Attacking !!!
/call IsTank
/if (${IsTank})  {
	/backoff
	/call Feedhim
}
/return

Sub Feedhim

/declare i int local 1
/for i 1 to 5
/if (${FindItem[=Special Hamburger].ID})  {
	/useitem Special Hamburger
	/delay 5
}
/next i
/return


Sub KillMoarburgerz

/target ${SpawnCount[npc "Moarburgerz"]}.ID}
/bc Assist ${TankName} on ${Spawn[NPC =Moarburgerz].ID}	
/return


Sub Event_MoarburgerzFull

/popup Kill Him!!!
/call IsTank
/if (${IsTank})  {	
			/rsay Return to the fight!!!
			/call KillMoarburgerz		
	}
}
/return



|-----------------------------Xeru------------------------------------------|


#Event XeruVamp "Xeru The Arbiter of Mayong takes the form of the first Vampire"
#Event XeruForm "Xeru The Arbiter of Mayong begins to dissolve and blur as he changes forms"
#Event XeruForm "<#1#> #2# Casting Chains of Reflection"


Sub Event_XeruVamp


    /echo [XeruVamp - ${Time.Time24}] Started

    /if (!${Defined[XeruVamp]})             /declare XeruVamp int outer             0
    /if (!${Defined[XeruVampSpamFilter]})   /declare XeruVampSpamFilter int outer   0
    /if (!${Defined[XeruVampSpamTimer]})    /declare XeruVampSpamTimer timer outer  0
    /if (!${Defined[XeruName]})             /declare XeruName string local          Xeru The Arbiter of Mayong
    | For Cazic Test: /varset XeruName Cazic Thule Dummy

    | Change Form or Cast Spam Filter Wait 2s for Recast
    /if (${XeruVampSpamFilter}) {
        /echo [XeruVamp - ${Time.Time24}] SpamFilter Timer=<${XeruVampSpamTimer}>
        /declare k int local                0
        /for k 0 to ${Math.Calc[${XeruVampSpamFilter} * 2]}
            /doevents XeruForm
            /if (!${XeruVampSpamTimer}) /goto :XeruVampSpamFilter_end
            | delay 1/2s
            /delay 5
        /next k
        :XeruVampSpamFilter_end
        /varset XeruVampSpamFilter 0
        /varset XeruVampSpamTimer 0
    }

    /if (${Spawn[NPC =${XeruName}].Distance}<=300 && ${Spawn[NPC =${XeruName}].LineOfSight} && ${Cast.Ready[Chains of Reflection]} && !${XeruVampSpamFilter}) {
        /echo [XeruVamp - ${Time.Time24}] Event Start
        | Set XeruVamp Form
        /varset XeruVamp 1

        /target npc id ${Spawn[NPC =${XeruName}].ID}
        /delay 20 ${Target.ID}==${Spawn[NPC =${XeruName}].ID}

        /if (${Me.Casting.ID} && ${Me.Casting.ID}!=8974) {
            /stopcast
            /delay 1s !${Me.Casting.ID}
        }

        /declare i int local                0
        /declare j int local                0
        /for i 1 to ${NetBots.Counts}
            /if (${NetBots[${NetBots.Client.Arg[${i}]}].InZone} && ${NetBots[${NetBots.Client.Arg[${i}]}].Name.Find[${Me.CleanName}]}) {
                /echo [XeruVamp - ${Time.Time24}] ${Me.CleanName} Start Waiting (${Int[${Math.Calc[(${i}-1)]}]}s)
                | /rsay [XeruVamp - ${Time.Time24}] Waiting (${Int[${Math.Calc[(${i}-1)]}]}s)
                | Loop event and sequence toons casting
                /for j 1 to ${Int[${Math.Calc[(${i}-1) * 2]}]}
                    /doevents XeruForm
                    | delay 1/2s
                    /delay 5
                    /if (!${XeruVamp}) /goto :XeruVamp_end
                /next j
                /if (${XeruVamp} && ${Target.ID}==${Spawn[NPC =${XeruName}].ID}) {
                    /echo [XeruVamp - ${Time.Time24}] ${Me.CleanName} Casting
                    | Skip other toons
                    /bca Casting Chains of Reflection
                    | Casting Chains
                    /if (${Target.ID}==${Spawn[NPC =Xeru The Arbiter of Mayong].ID}) /casting "Chains of Reflection" item
                    /rsay [XeruVamp - ${Time.Time24}] Casting <Chains of Reflection> on <${Target.CleanName}>
                }
                /goto :XeruVamp_end
            }
        /next i

        :XeruVamp_end
        /echo [XeruVamp - ${Time.Time24}] ${Me.CleanName} ENDED
        /varset XeruVamp 0
        /varset XeruVampSpamFilter 2
        /varset XeruVampSpamTimer 2s
    }

/return

Sub Event_XeruForm

    /if (!${Defined[XeruVamp]})             /declare XeruVamp int outer 0
    /if (!${Defined[XeruVampSpamFilter]})   /declare XeruVampSpamFilter int outer 0
    /if (!${Defined[XeruVampSpamTimer]})    /declare XeruVampSpamTimer timer outer  0

    | Remove XeruVamp Form
    /varset XeruVamp 0
    /varset XeruVampSpamFilter 2
    /varset XeruVampSpamTimer 2s

    | Break Casting Chains
    /if (${Me.Casting.ID}==8974) {
        /stopcast
        /interrupt
    }

/return

























|---------------------------------------Events Section End----------------------------------------|


|---------------------------------------------Trash Mob Scripts-------------------------------------|

|--------------------------Dreadspire Keep-------------------------|

#Event VampStake "Enraged Vampire staggers and collapses."
#Event VampStake "Ravaged Vampire staggers and collapses."
#Event VampStake "Vampire Researcher staggers and collapses."
#Event VampStake "Xurith The Bloody staggers and collapses."

SUB Event_VampStake(string line) 

/popup Vampire Down....Stake It !!!!
/if (${FindItem[Vampire Bane Earring (Tier 7)].ID} && ${Select[${Me.Class.ShortName},PAL,SHD,WAR,MNK,BER,BRD,ROG,RNG,BST]}) {
	/casting "Vampire Bane Earring (Tier 7)" item
}
/Return



|-------------------------Nobles Causeway------------------------|


Sub Apply_Antithesis


/if (${Spawn[${AntithesisTarget}].Race.Name.Equal[Ukun]} ||  ${Spawn[${AntithesisTarget}].Race.Name.Equal[Bazu]} ||  ${Spawn[${AntithesisTarget}].Race.Name.Equal[Feran]} || ${Spawn[${AntithesisTarget}].Race.Name.Equal[Dragorn]} && ${Spawn[${AntithesisTarget}].Distance} < 200)  {
		/call Check_AntithesisItem
		/call check_Ready "AntithesisArray2D" 1
		/if (${c_Ready})  {
			/call e3_cast ${AntithesisTarget} "AntithesisArray2D" 1
		}
} 

/Return




Sub Check_AntithesisItem

/declare AntithesisItem string local
 /declare i int local

/if (${FindItem[Stone of Absolute Antithesis].ID}) {
    /varset AntithesisItem Stone of Absolute Antithesis 
} else /if (${Spawn[${AntithesisTarget}].Race.Name.Equal[Dragorn]})  {
	/if (${FindItem[=Imbued Dragorn Bone].ID}) {
		/varset AntithesisItem Imbued Dragorn Bone
	}
} else /if (${Spawn[${AntithesisTarget}].Race.Name.Equal[Ukun]})  {
	/if (${FindItem[=Ukun Friendship Bracelet].ID}) {
		/varset AntithesisItem Ukun Friendship Bracelet
	}
} else /if (${Spawn[${AntithesisTarget}].Race.Name.Equal[Bazu]})  {
	/if (${FindItem[=Blighted Bazu Banisher].ID}) {
		/varset AntithesisItem Blighted Bazu Banisher
	}
} else /if (${Spawn[${AntithesisTarget}].Race.Name.Equal[Feran]})  {
	/if (${FindItem[=Feral Heart of the Alpha].ID}) {
		/varset AntithesisItem Feral Heart of the Alpha
	}
} 

/if (${Bool[${AntithesisItem}]}) {
    /if (${Defined[AntithesisArray]}) /deletevar AntithesisArray
    /declare AntithesisArray[1] string outer ${AntithesisItem}
    /if (${AntithesisArray.Size}) {
      /call BuildSpellArray "AntithesisArray" "AntithesisArray2D"
      /for i 1 to ${AntithesisArray2D.Size[1]}
        /varset AntithesisArray2D[${i},${iCastInvis}] 1
      /next i
      }
  } else /if (!${AntithesisSpam}) {
    /bc I do not have a Antithesis item available
	/varset AntithesisSpam TRUE
  }

/Return
|-------------------------------------Spawn Alerts Section---------------------------------------|




|-------------------------DSK Spawn Alerts----------By Muergan-------------|

#Event Wurliz "Wurliz The Destroyer shouts 'Swift Death comes your way!'"

Sub Event_Wurliz(string line)
	/popup Wurliz the Destroyer spawned !!!
	/if (${MainAssist.Equal[${Me.CleanName}]}) {
		/rsay Wurliz the Destroyer spawned !!!
	}
/return


|-------------------------HoH Mini Spawn Alerts-----By Muergan-------------|

#Event HoHGurzan "The ground trembles and shakes as Gurzan springs forth from the shadows."
#Event HoHIkliz "The halls flare with fire as Ikliz begins weaving dark magic."
#Event HoHCsarth "The walls seem to bend and break as Csarth marches down from his throne."
#Event HoHEnji "The trees begin to shake with terror as Enji climbs down to the ground."
#Event HoHCruthz "The winds in the temple pick up and begin to howl as Cruthz awakes from his slumber."



Sub Event_HoHGurzan(string line)
	/popup Gurzan the Deathbringer spawned !!!
	/if (${MainAssist.Equal[${Me.CleanName}]}) {
		/rsay Gurzan the Deathbringer spawned !!!
	}
/return

Sub Event_HoHIkliz(string line)
	/popup Arch Bishop Ikliz spawned !!!
	/if (${MainAssist.Equal[${Me.CleanName}]}) {
		/rsay Arch Bishop Ikliz spawned !!!
	}
/return

Sub Event_HoHCsarth(string line)
	/popup Vision of Emperor Csarth spawned !!!
	/if (${MainAssist.Equal[${Me.CleanName}]}) {
		/rsay Vision of Emperor Csarth spawned !!!
	}
/return

Sub Event_HoHEnji(string line)
	/popup Enji Vismen spawned !!!
	/if (${MainAssist.Equal[${Me.CleanName}]}) {
		/rsay Enji Vismen spawned !!!
	}
/return

Sub Event_HoHCruthz(string line)
	/popup Duke Cruthz spawned !!!
	/if (${MainAssist.Equal[${Me.CleanName}]}) {
		/rsay Duke Cruthz spawned !!!
	}
/return


|--------------------------Spawn Alerts Section End------------------------|
	

Sub Thf_Setup
/if (${Debug}) /echo |- Thf_Setup ==>
	
/declare DraekonCall int outer 0
/declare DraekonGrass int outer 0
/declare ReaperDucking int outer 0
/declare ReaperFar int outer 0
/declare SeravinceStun int outer 0
/declare VistrindaAddATimer int outer 0
/declare VistrindaAddBTimer int outer 0
/declare IsTank bool outer FALSE
/declare ValikWait int outer 0	
/declare TankName string outer NULL
/declare NoShrinkItem bool outer 0



/declare AntithesisSpam bool outer FALSE


/if (${Ini[${genSettings_Ini},General,CycleNearestTarget-Hotbutton].Length})  /call IniToVarV "${genSettings_Ini},General,CycleNearestTarget-Hotbutton" CycleTarget string outer
/if (${Ini[${Character_Ini},Misc,Gather Mana (On/Off)].Length})  /call IniToVarV "${Character_Ini},Misc,Gather Mana (On/Off)" GatherManaCheck bool outer
/if (${Ini[${Character_Ini},Misc,Self Shrink (On/Off)].Length})  /call IniToVarV "${Character_Ini},Misc,Self Shrink (On/Off)" SelfShrink bool outer
/if (${Ini[${Character_Ini},Misc,Duck Key Assignment].Length})  /call IniToVarV "${Character_Ini},Misc,Duck Key Assignment" DuckKey string outer
	
/if (${Debug}) /echo <== Thf_Setup -|
/return



Sub Thf_Background_Events

/doevents thfgate
/doevents valegate
/doevents attendance
/doevents cohme
/doevents cohall
/doevents RallosZekOn
/doevents RallosZekOff	
/doevents ReaperOfMortalityDuck
/doevents ReaperOfMortalityUnduck
/doevents ReaperOfMortalityMoveClose
/doevents ReaperOfMortalityUnmoveClose
/doevents ReaperOfMortalityMoveFar
/doevents ReaperOfMortalityUnmoveFar
/doevents DraekonMoveToNpc
/doevents DraekonGoToGrass
/doevents DraekonGoToMelee
/doevents DraekonSafeFromGrass
/doevents DraekonVoiceEnd
/doevents SeravinceAoeStun
/doevents SeravinceCreatesAdds
/doevents SeravinceCallsAddsToAttack
/doevents VistrindaEggs
/doevents VistrindaAddADead
/doevents VistrindaAddA
/doevents VistrindaAddAKill
/doevents VistrindaAddBKill
/doevents VistrindaAddBDead
/doevents VistrindaAddB
/doevents ValikBegin
/doevents ValikEnd
/doevents MoarburgerzHungry
/doevents MoarburgerzFull
/doevents Wurliz
/doevents HoHGurzan
/doevents HoHIkliz
/doevents HoHCsarth
/doevents HoHEnji
/doevents HoHCruthz
/doevents VampStake
/doevents XeruVamp
/doevents XeruForm
/doevents MaestroGoto
/doevents MaestroGoAdds


/if (${SelfShrink} && !${NoShrinkItem} && ${Me.Height} > 2)  /call Auto_Shrink


/if (${GatherManaCheck} && ${Me.PctMana} < 30)  /call check_GatherMana



/return


Sub thf_Aliases
/if (${Debug} || ${Debug_Thf}) /echo |- thf_Aliases ==>

	/squelch /alias /thfgate /bc thfgate
	/squelch /alias /valegate /bc valegate
	/squelch /alias /xeru /bc Xeru deathtouch
	/squelch /alias /attendance /bc attendance
	/squelch /alias /ralloson /bc ralloszek on
	/squelch /alias /rallosoff /bc ralloszek off
	/noparse /squelch /alias /mezit /bc Mez on ${Target.ID}


/if (${Debug} || ${Debug_Thf}) /echo <== thf_Aliases -|
/return

SUB Thf_MacroSettings

/call WriteToIni "${genSettings_Ini},General,CycleNearestTarget-Hotbutton" /

/return

SUB Thf_CharacterSettings
/if (${Debug}) /echo |- THF_CharacterSettings ==>


/if (${Select[${Me.Class.ShortName},CLR,PAL,RNG,SHD,ENC,MAG,NEC,BST,WIZ,DRU,SHM]})  /call WriteToIni "${Character_Ini},Misc,Gather Mana (On/Off)" On
/call WriteToIni "${Character_Ini},Misc,Self Shrink (On/Off)" On
/call WriteToIni "${Character_Ini},Misc,Duck Key Assignment" X	



/if (${Debug}) /echo <== THF_CharacterSettings -|
/RETURN


