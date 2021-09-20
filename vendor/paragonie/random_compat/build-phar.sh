__='
   This is the default license template.
   
   File: build-phar.sh
   Author: root
   Copyright (c) 2021 root
   
   To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
'

#!/usr/bin/env bash

basedir=$( dirname $( readlink -f ${BASH_SOURCE[0]} ) )

php -dphar.readonly=0 "$basedir/other/build_phar.php" $*