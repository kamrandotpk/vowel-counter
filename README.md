# Vowel Counter Composer Package

This package allows you to count the vowels in a file or a string. 

Example usage:

```php
<?php

require_once 'vendor/autoload.php';

$vowelCounter = new \VowelCounter\VowelCounter();
$text = "There are 10 vowels in this sentence.";

// count vowels in a file
$file = new \SplTempFileObject();
$file->fwrite($text);
echo $vowelCounter->countVowelsInFile($file); // outputs 11

// counts vowels in a string
echo $vowelCounter->countVowelsInAString($text); // outputs 11
```

Please see the included Unit Tests for more example usage.