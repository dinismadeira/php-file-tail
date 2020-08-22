# php-file-tail

 PHP function to get the last lines of a file.

## Usage

```php
// Get last 20 lines
$last20lines = fileTail("bigFile.log", 20);

// Get last 20 lines that start with ERROR
$last20errorLines = fileTail("bigFile.log", 20, "`^ERROR`");

// Get the number of lines
$totalLines = fileLines("bigFile.log");
```
