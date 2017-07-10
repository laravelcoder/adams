[[ $- != *i* ]] && return

force_color_prompt=yes

if [ -n "$force_color_prompt" ];
 then
    if [ -x /usr/bin/tput ] && tput setaf 1 >&/dev/null; then
        # We have color support; assume it's compliant with Ecma-48
        # (ISO/IEC-6429). (Lack of such support is extremely rare, and such
        # a case would tend to support setf rather than setaf.)
        color_prompt=yes
    else
        color_prompt=
    fi
fi


# PS1='\e[33;1m\u@\h: \e[31m\W\e[0m\$ '
TITLEBAR='\[\e]0;\u@\h\a\]'
if [ "$color_prompt" = yes ]; then
    PS1="${TITLEBAR}\[\033[01;32m\]\u@\h\[\033[00m\]:\[\033[01;34m\]\W\[\033[00m\]\$ "
else
    PS1="${TITLEBAR}\u@\h:\W\$ "
fi

unset color_prompt force_color_prompt
eval "$(dircolors -b ~/DIR_COLORS)"

# ~/.bashrc: executed by bash(1) for non-login shells.




alias ls='ls -al --color=auto'
alias ls='ls -FlAGh --color=auto'
alias ...='cd ../..'
alias ..='cd ..'
alias ci='composer install'
alias cu='composer update'
alias dump='composer dumpautoload'
alias locate='type -a'
alias long='ls d */ --color=auto'
alias chmod7="chmod 777 -Rf ./"
alias chmod777='sudo chmod 777 -R ./'
alias chmod6="chmod 644"
alias chown="chown apache:apache ./ -R"
alias c='clear'
alias exe='chmod a+x '
alias vc="composer du && php artisan cache:clear && php artisan view:clear && php artisan debugbar:clear && php artisan route:clear && php artisan config:clear && composer dumpautoload"
alias phpf='~/php-cs-fixer'
alias fixer="php-cs-fixer"
alias create='composer create-project laravel/laravel=5.4 ./ --prefer-dist'
alias rebash='exec bash'
alias composer="php ~/.php/composer"
alias art='php artisan'
alias bashy='. ./bash_profile'
alias cc='php artisan cache:clear && php artisan route:clear'
alias ccc='sudo service php7.0-fpm restart && composer dump-autoload && composer clear-cache && php artisan cache:clear && php artisan route:clear'
alias ccca='composer dump-autoload && composer clear-cache && php artisan cache:clear && php artisan route:clear && php artisan view:clear && php artisan config:clear && restartall'
alias cda='composer dump-autoload -o'
alias chmod6='chmod 644'
alias chmod7='chmod 777 -Rf ./'
alias chmod777='sudo chmod 777 -R ./'
alias chown='chown apache:apache ./ -R'
alias seed='php artisan db:seed'
alias rl='php artisan route:list'
alias tinker='php artisan tinker'
alias update='composer update'
