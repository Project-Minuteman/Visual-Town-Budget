#!/bin/sh

cp ../{revenues,expenses,funds,glossary}.csv .

./processCSV.py revenues.csv
./processCSV.py expenses.csv
./processCSV.py funds.csv
./processCSV.py updatehome
cp revenues.{csv,json} expenses.{csv,json} funds.{csv,json} glossary.csv home.json ..

