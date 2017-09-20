#!/bin/bash
for file in *.jpg;
do echo $file;
convert -geometry 800x800 $file ${file%.jpg}.jpg;
done

