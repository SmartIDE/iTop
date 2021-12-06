#!/bin/bash
APP_PATH=/home/project
chmod -f 444 $APP_PATH/conf/production/config-itop.php
echo "iTop config is read-only now."
