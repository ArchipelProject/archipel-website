#!/bin/bash

if [[ $1 == "online" ]]; then
    rm -f ./index.php
    ln -s index.php.online index.php
    exit 0
fi

if [[ $1 == "offline" ]]; then
    rm -f ./index.php
    ln -s index.php.offline index.php
    exit 0
fi

echo "You must enter 'online' or 'offline' as parameter"
exit 1

