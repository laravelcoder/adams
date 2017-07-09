#!/bin/sh
mv www/index.php index.php.saved
rm -rf www/*
# update project/ to your directory name
cp -a project/public/* www
cp project/public/.* www
rm -rf www/index.php
mv index.php.saved www/index.php
