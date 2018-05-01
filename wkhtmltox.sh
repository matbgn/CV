#!/bin/bash

# $1 is the directory in which files to be processed
# $2 is the css file
for path in $(find $1 -name "*.html")
do
  echo -e "\033[92mProcessing ${path}\033[0m"
  wkhtmltopdf ${path} --disable-javascript --user-style-sheet $2 "${path%.html}.pdf"
done
