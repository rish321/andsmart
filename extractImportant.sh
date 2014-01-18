#!/bin/bash
while read p
do
	while read q
	do
		if echo "$q" | grep -q ">$p<"; then
			echo "$q" >> cityFinal.txt;
			break;
		fi
	done < full_worker_register.html
done < city.txt
