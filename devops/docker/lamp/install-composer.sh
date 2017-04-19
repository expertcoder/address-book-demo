#!/bin/sh

#Adapted from https://getcomposer.org/doc/faqs/how-to-install-composer-programmatically.md#how-to-install-composer-programmatically-

#Modified this line from original script, which using wget which was not available
EXPECTED_SIGNATURE=$(php -r "echo file_get_contents('https://composer.github.io/installer.sig');")

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
ACTUAL_SIGNATURE=$(php -r "echo hash_file('SHA384', 'composer-setup.php');")

if [ "$EXPECTED_SIGNATURE" != "$ACTUAL_SIGNATURE" ]
then
    >&2 echo 'ERROR: Invalid installer signature'
    rm composer-setup.php
    exit 1
fi


#modified this line from original script to install composer to global directory
php composer-setup.php --quiet --install-dir=/usr/local/bin --filename=composer
RESULT=$?
rm composer-setup.php

exit $RESULT