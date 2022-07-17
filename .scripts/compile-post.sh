#! /usr/bin/env bash

file=$1

if [[ ! -f "$file" ]];
then
  echo "Inexistent file!"
  exit
fi

cat $file | sed "s/\"/\\\\\"/g" | tr --delete "\n"
