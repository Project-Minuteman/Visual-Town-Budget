#!/bin/sh

cp ../{revenues,expenses,funds,glossary}.csv .

./processCSV.py ../revenues.csv
./processCSV.py ../expenses.csv
./processCSV.py ../funds.csv
./processCSV.py updatehome
mv revenues.json expenses.json funds.json glossary.csv home.json ..

