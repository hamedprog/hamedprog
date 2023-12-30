
add config to .prifile

```
code $PROFILE
```

```
Import-Module -Name Terminal-Icons
Import-Module PSReadLine

Set-PSReadLineOption -EditMode Windows
Set-PSReadLineOption -PredictionSource History
Set-PSReadLineOption -PredictionViewStyle ListView
oh-my-posh init pwsh --config https://raw.githubusercontent.com/hamedprog/hamedprog/1291eeb392e030540ade78a53dc2467f618e9c25/my_terminal/myconfig.omp.json| Invoke-Expression
```

https://www.hanselman.com/blog/adding-predictive-intellisense-to-my-windows-terminal-powershell-prompt-with-psreadline



