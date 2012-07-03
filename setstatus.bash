#!/bin/bash

if [[ $1 == "online" ]]; then
    rm -f maintenance-mode
    exit 0
fi

if [[ $1 == "offline" ]]; then
    touch maintenance-mode
    exit 0
fi

echo "You must enter 'online' or 'offline' as parameter"
exit 1

