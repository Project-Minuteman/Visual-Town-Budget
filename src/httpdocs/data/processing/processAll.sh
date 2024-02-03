#!/bin/sh

#cp ~/tmp/{revenues,expenses,funds,glossary}.csv .

./processCSV.py ../revenues.csv
./processCSV.py ../expenses.csv
./processCSV.py ../funds.csv
./processCSV.py updatehome
cp revenues.json expenses.json funds.json home.json ..

