#!/bin/bash

rebuild=false

# Handle the -b flag if set
while getopts "b" opt; do
	case ${opt} in
		b ) rebuild=true
			;;
		* ) 
			echo -e "The only known flag is -b"
			;;
	esac
done

echo -e "\n\nBringing down all containers"
docker-compose down -v

echo -e "\n\nBringing containers up"
cmd="docker-compose up -d"

# Append the command to be run if -b flag was set
if [ "$rebuild" = true ]; then
	echo -e "\nWith full rebuild"
	cmd="$cmd --force-recreate --build"
fi

$cmd
