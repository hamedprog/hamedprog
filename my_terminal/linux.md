install zsh

install auto correct on zsh

```zsh
git clone https://github.com/zsh-users/zsh-autosuggestions ~/.zsh/zsh-autosuggestions
source ~/.zsh/zsh-autosuggestions/zsh-autosuggestions.zsh
```

install oh my posh

install substring search:
https://github.com/marlonrichert/zsh-autocomplete

https://dev.to/rossijonas/how-to-set-up-history-based-autocompletion-in-zsh-k7o

add config file to zshrc
```
eval "$(oh-my-posh init zsh --config https://raw.githubusercontent.com/hamedprog/hamedprog/main/my_terminal/myconfig.omp.json)"
source ~/.zsh/zsh-autosuggestions/zsh-autosuggestions.zsh

# initialize autocompletion
autoload -U compinit
compinit

# history setup
setopt SHARE_HISTORY
HISTFILE=$HOME/.zhistory
SAVEHIST=1000
HISTSIZE=999
setopt HIST_EXPIRE_DUPS_FIRST

bindkey '\e[A' history-search-backward
bindkey '\e[B' history-search-forward
```
