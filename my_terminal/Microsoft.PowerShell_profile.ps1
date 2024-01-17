Import-Module -Name Terminal-Icons
Import-Module PSReadLine

Set-PSReadLineOption -EditMode Windows
Set-PSReadLineOption -PredictionSource History
Set-PSReadLineOption -PredictionViewStyle ListView
oh-my-posh init pwsh --config https://raw.githubusercontent.com/hamedprog/hamedprog/main/my_terminal/myconfig.omp.json| Invoke-Expression
