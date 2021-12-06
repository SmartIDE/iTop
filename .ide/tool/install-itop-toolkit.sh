APP_PATH=/home/project/iTop
TOOLKIT_GIT_URL=https://gitee.com/itop-cn/itop-toolkit.git
TOOLKIT_FOLDER=$APP_PATH/toolkit

if [[ -d $APP_PATH ]]; then
    rm -rf $TOOLKIT_FOLDER
    git clone $TOOLKIT_GIT_URL $TOOLKIT_FOLDER
    echo "Go to http://localhost:1080/iTop/toolkit to continue installation."
else
    echo "Directory $APP_PATH not found."
fi

