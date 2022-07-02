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