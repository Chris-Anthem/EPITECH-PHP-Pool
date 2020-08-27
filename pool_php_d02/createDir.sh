#!/bin/bash

if [ -d ]; then
    for ((i=1 ; i<=$1 ; i++)); do
	if [ $i -lt 10 ]; then
	    mkdir -p ex_0$i;
	    else
		mkdir -p ex_$i;
		fi
    done
fi
