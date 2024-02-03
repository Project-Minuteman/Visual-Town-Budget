To update revenues, expenses and funds:
* Use the Lexington Brown Book (or White Book, if the Brown Book is not available) to update these files. This is a laborious process as some of the categories changed.
* Update `revenues.csv`, `expenes.csv`, `funds.csv` in the parent folder
  * Add the new year as a column
  * Ensure the LEVEL column has the appropriate level configuration
* Cd to this folder, and run `./processAll.sh`. It will generate `revenues.json`, `expenses.json`, `funds.json`.
* Test your change locally, then check in the updated .csv and .json files
