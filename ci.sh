#!/bin/bash

PATH_DESTINATION=/var/www/archipelproject.org/www2/
rm -rf $PATH_DESTINATION/*
cp -a . $PATH_DESTINATION
