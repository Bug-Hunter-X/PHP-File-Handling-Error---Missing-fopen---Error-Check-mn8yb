```php
$file = fopen("nonexistent_file.txt", "r");
if ($file === false) {
    // Handle the error appropriately
    $errorMessage = error_get_last()['message'];
    echo "Error opening file: " . $errorMessage . "\n";
    //Consider logging the error for debugging.
} else {
    // Process the file
    while (($line = fgets($file)) !== false) {
        // Process each line of the file
        echo $line;
    }
    fclose($file);
}
```