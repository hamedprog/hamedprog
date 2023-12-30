
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
oh-my-posh init pwsh --config $HOME/ohmyposh/myconfig.omp.json| Invoke-Expression
```

https://www.hanselman.com/blog/adding-predictive-intellisense-to-my-windows-terminal-powershell-prompt-with-psreadline



