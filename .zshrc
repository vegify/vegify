function backup() { 
    if [ -f "$1" ] || [ -d "$1" ]; then
        # echo "\n$1" >> .backup
        # sed -i "$1" ./.backup        
        sed -i '' -e '$a\
\'"$1" .backup
        sed -i '' -e '/^$/d' .backup
    else
        echo "$1 no such file or directory"
    fi
}
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
alias reseed='[ -f sail ] && bash sail artisan migrate:fresh --seed || bash vendor/bin/sail artisan migrate:fresh --seed'
alias logs='[ -f sail ] && bash sail logs -f || bash vendor/bin/sail logs -f'
