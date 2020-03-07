|----------------------------------------------------------------------------|
| Warrior Functions
|----------------------------------------------------------------------------|

Sub defineprovokeDisc
  /declare provokeDisc string local
  /declare i int local
  /if (${Me.CombatAbilityReady[Enraged Scowl Rk. III]}) {
    /varset provokeDisc Enraged Scowl Rk. III
	/varset MinBellowEndurance 320
  } else /if (${Me.CombatAbilityReady[Enraged Scowl Rk. II]}) {
    /varset provokeDisc Enraged Scowl Rk. II
	/varset MinBellowEndurance 335
  } else /if (${Me.CombatAbilityReady[Enraged Scowl Rk. I]}) {
    /varset provokeDisc Enraged Scowl Rk. I
	/varset MinBellowEndurance 340
  } else /if (${Me.CombatAbilityReady[Ancient: Chaos Cry]}) {
    /varset provokeDisc Superior Ancient: Chaos Cry
	/varset MinBellowEndurance 300
  } else /if (${Me.CombatAbilityReady[Bellow of the Mastruq]}) {
    /varset provokeDisc Bellow of the Mastruq
	/varset MinBellowEndurance 275
  } else /if (${Me.CombatAbilityReady[Incite]}) {
    /varset provokeDisc Incite
	/varset MinBellowEndurance 250
  } else /if (${Me.CombatAbilityReady[Berate]}) {
    /varset provokeDisc Berate
	/varset MinBellowEndurance 200
  } else /if (${Me.CombatAbilityReady[Berate]}) {
    /varset provokeDisc Berate
	/varset MinBellowEndurance 175
  } else /if (${Me.CombatAbilityReady[Provoke]}) {
    /varset provokeDisc Provoke
	/varset MinBellowEndurance 85
  }
  /if (${Bool[${provokeDisc}]}) {
    /if (${Defined[provokeDiscArray]}) /deletevar provokeDiscArray
    /declare provokeDiscArray[1] string outer ${provokeDisc}
    /if (${provokeDiscArray.Size}) {
      /call BuildSpellArray "provokeDiscArray" "provokeDiscArray2D"
      /for i 1 to ${provokeDiscArray2D.Size[1]}
        /varset provokeDiscArray2D[${i},${iCastInvis}] 1
      /next i
      }
  } else {
    /bc I do not have Provoke Discs available
  }
/RETURN










Sub WAR_Setup

/declare MinBellowEndurance int outer 0
/call IniToVarV "${Character_Ini},Warrior,Commanding Voice (On/Off)" CommandVoice bool outer 
/call IniToVarV "${Character_Ini},Warrior,Provoke Discipline (On/Off)" provokeDiscOn bool outer

/return
|----------------------------------------------------------------------------|
SUB WAR_MacroSettings
/if (${Debug}) /echo |- WAR_MacroSettings ==>
	/call WriteToIni "${advSettings_Ini},WAR Functions,WAR Function#1" "check_Tanking" 1
	/call WriteToIni "${advSettings_Ini},WAR Functions,WAR Function#2" "check_Burns" 1
	/call WriteToIni "${advSettings_Ini},WAR Functions,WAR Function#3" "check_Buffs" 1
/if (${Debug}) /echo <== WAR_MacroSettings -|
/RETURN
|----------------------------------------------------------------------------|
SUB WAR_CharacterSettings
/call WriteToIni "${Character_Ini},${Me.Class},Commanding Voice (On/Off)" On
/call WriteToIni "${Character_Ini},${Me.Class},Provoke Discipline (On/Off)" On
/RETURN
|----------------------------------------------------------------------------|
Sub WAR_Aliases
/return
|----------------------------------------------------------------------------|
Sub WAR_Background_Events
|--Commanding Voice--|
/if (${CommandVoice} && ${Me.Combat} && ${Me.CombatAbilityReady[Commanding Voice]} && !${Me.Song[Commanding Voice].ID})  {
		/disc Commanding Voice
		}

|--Warrior Provoke--|


/if (${provokeDiscOn})  {
	/if (${Me.PctAggro} <=10 || ${Me.SecondaryPctAggro} >=75)  {
	/call defineprovokeDisc

	| check endurance
		/if (${Me.Endurance} < ${MinBellowEndurance}) {
			 /echo |- attemptProvoke -| I do not have enough endurance to use [${provokeDiscArray2D}].
		} else {
	
			/disc ${provokeDiscArray2D}
			
		}
	}
}	
		
		
		
		
		
/return
