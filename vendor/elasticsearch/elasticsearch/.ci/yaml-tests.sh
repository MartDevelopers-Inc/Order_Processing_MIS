__='
   This is the default license template.
   
   File: yaml-tests.sh
   Author: root
   Copyright (c) 2021 root
   
   To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
'

#!/usr/bin/env bash

# Download the YAML test from Elasticsearch artifacts
php util/RestSpecRunner.php

# Generate the YAML tests for PHPUnit
php util/build_tests.php

# Run YAML tests
vendor/bin/phpunit -c "phpunit-yaml-${TEST_SUITE}-tests.xml"