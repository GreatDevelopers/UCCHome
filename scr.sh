#!/bin/bash
szAnswer1="\$SERVER['PHP_SELF']"
szAnswer2="\$SERVER['PHP_SELF']"   
find . -type f -print0 | xargs -0 sed -i "s/$szAnswer1/$szAnswer2/g"

