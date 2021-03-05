|-----------------------------------------------------|
| Add Custom Command Lines for Character.Ini          |
| Replacement for holyshit & downshit commands        |
| by Soandso                                          |
|-----------------------------------------------------|


Sub customCommands(string custCmdType)

/declare charINI string local e3 bot Inis\${Me.CleanName}_${MacroQuest.Server}.ini

/if (${Debug}) /echo ${charINI}
/if (${Debug}) /echo ___in customCommands  /  cmdType: ${custCmdType}___
/declare cci int local 0
/declare sectionCheck string local ${Ini[${charINI}]}
/if (${Debug}) /echo ${sectionCheck}
/if (${Debug}) /echo ${sectionCheck.Find[|${custCmdType}|]} ${sectionCheck.Find[${custCmdType}|]}
/if (${sectionCheck.Find[|${custCmdType}|]} || ${sectionCheck.Find[${custCmdType}|]}==1) {
    /if (${Debug}) /echo ${custCmdType} section found
    /declare ccs string local ${Ini[${charINI},${custCmdType}]}
    /if (${Debug}) /echo # of commands in PCC: ${Math.Calc[${ccs.Count[|]}-1]}
    /if (${Debug}) /echo cci, key, cmd
    /if (${Math.Calc[${ccs.Count[|]}-1]}<=0) /return
    /declare ccsArr[${Math.Calc[${ccs.Count[|]}-1]},2] string local 0
    /for cci 1 to ${Math.Calc[${ccs.Count[|]}-1]}
        /varset ccsArr[${cci},1] ${ccs.Token[${cci},|]}
        /varset ccsArr[${cci},2] ${Ini[${charINI},${custCmdType},${ccs.Token[${cci},|]}]}
        /if (${Debug}) /echo ${cci}, ${ccsArr[${cci},1]}, ${ccsArr[${cci},2]}
        /if (${ccsArr[${cci},2].NotEqual[NULL]}) /docommand ${ccsArr[${cci},2]}
    /next cci
} else {
	|add the appropriate section and a blank first entry
    /if (${Debug}) /echo section not found!!!
    /ini "${charINI}" "${custCmdType}" "cmd01" ""
}
/return