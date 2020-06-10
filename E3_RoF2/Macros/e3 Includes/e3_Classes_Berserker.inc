|----------------------------------------------------------------------------|
| Berserker Functions
|----------------------------------------------------------------------------|








SUB BER_Setup

  /call IniToVarV "${Character_Ini},Berserker,Cry Havoc (On/Off)" CryHavoc bool outer
  /call IniToVarV "${Character_Ini},Berserker,Band of the Gargoyle-Cold Rage IV (On/Off)" ZerkGargoyle bool outer
  /call IniToArrayV "${Character_Ini},${Me.Class},Axe Ability#" axeAbility
  /if (${Defined[axeAbility]} && ${axeAbility.Size}) /call BuildSpellArray "axeAbility"	"axeAbility2D"

/RETURN
|----------------------------------------------------------------------------|
SUB BER_Background_Events
  
  |---Cry Havoc---|
/if (${CryHavoc} && ${Me.Combat} && !${Me.Song[Cry Havoc].ID} && !${Me.Song[Strike of Savagery].ID} && !${Me.Song[Prophet's Gift of the Ruchu].ID})  {

	/if (${FindItem[=Dark Shadow Rage Spaulders (Tier 7)].ID}) {
		/useitem Dark Shadow Rage Spaulders (Tier 7)
	} else /if (${Me.CombatAbilityReady[Cry Havoc]}) {
		/disc Cry Havoc
	}
}

	
|---Band of the Gargoyle---|
 /if (${ZerkGargoyle} && ${Me.Combat} && !${Me.Song[Cold Rage IV].ID} && ${FindItemCount[=Band of the Gargoyle (Tier 7)]})  {
	/useitem "Band of the Gargoyle (Tier 7)"
	}

	
	
|--Summon Axes---|
/if (${Defined[axeAbility2D]}) {
    /if (!${Cursor.ID} && ${Me.CombatState.NotEqual[COMBAT]} && !${combatTimer} && !${ActionTaken} && !${activeTimer} && ${axeAbility2D.Size[1]}) /call CheckAxes
  }

/RETURN
|----------------------------------------------------------------------------|
SUB CheckAxes
  /if (${Defined[axeAbility2D]}) {
    /declare i int local
    /for i 1 to ${axeAbility2D.Size[1]}
    /declare numAxes int local ${axeAbility2D[${i},${iCheckFor}]}
    /if (!${Bool[${numAxes}]}) /varset numAxes 20
      /if (${FindItemCount[${axeAbility2D[${i},${iCastName}]}]} < ${numAxes}) {
        /call check_Ready "axeAbility2D" ${i}
        /if (${c_Ready}) {
          /bc I only have ${FindItemCount[${axeAbility2D[${i},${iCastName}]}]} ${axeAbility2D[${i},${iCastName}]} left, summoning a stack
          /call e3_cast ${Me.ID} "axeAbility2D" ${i}
          /delay 5s ${Cursor.ID}
          /call ClearCursor
        }
      }
    /if (!${ActionTaken}) /next i
  }
/RETURN
|----------------------------------------------------------------------------|
SUB BER_MacroSettings
/if (${Debug}) /echo |- BER_MacroSettings ==>
	/call WriteToIni "${advSettings_Ini},BER Functions,BER Function#1" "check_Burns" 1
	/call WriteToIni "${advSettings_Ini},BER Functions,BER Function#2" "check_Buffs" 1
/if (${Debug}) /echo <== BER_MacroSettings -|
/RETURN
|----------------------------------------------------------------------------|
SUB BER_CharacterSettings
	/call WriteToIni "${Character_Ini},${Me.Class},Axe Ability" "Axe of the Destroyer/Reagent|Balanced Axe Components/CheckFor|20"
	/call WriteToIni "${Character_Ini},${Me.Class},Cry Havoc (On/Off)" On
	/call WriteToIni "${Character_Ini},${Me.Class},Band of the Gargoyle-Cold Rage IV (On/Off)" Off
/RETURN
|----------------------------------------------------------------------------|
Sub BER_Aliases
/RETURN