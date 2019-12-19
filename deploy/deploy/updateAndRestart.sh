#!/bin/bash

# any future command that fails will exit the script
set -e

# Delete the old repo
rm -rf /home/mindfinadmin/mindfin_website
 
# clone the repo again
git clone git@gitlab.com:mindfin1/mindfin_website.git /home/mindfinadmin/mindfin_website 




