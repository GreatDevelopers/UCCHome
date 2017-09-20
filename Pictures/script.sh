#!/bin/bash
for file in *.jpg;
do echo $file;
convert -geometry 108x108 $file ${file%.jpg}.jpg;
done

