#!/bin/bash
APP_PATH=/home/project
chmod -f 644 $APP_PATH/conf/production/config-itop.php
echo "iTop config is writable now. Start update wizard http://localhost/setup in your browser."
