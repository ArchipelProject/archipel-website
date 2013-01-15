#!/bin/bash

PATH_DESTINATION=/var/www/archipelproject.org/www2/
rm -rf $PATH_DESTINATION/*
cp -a *.php *.xml *.bash Images Includes CSS Scripts $PATH_DESTINATION
