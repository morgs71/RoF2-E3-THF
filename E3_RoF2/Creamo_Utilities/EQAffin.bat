#must run as admin
#change 255 to fit your purpose.  255 spreads across all 8 cores.  # to use = 2^N - 1 where N=num cores
#
powershell "$process=GET-PROCESS eqgame; foreach ($i in $process) {$i.ProcessorAffinity=255}"