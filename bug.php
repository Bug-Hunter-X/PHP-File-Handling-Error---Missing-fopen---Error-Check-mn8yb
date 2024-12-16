```php
$file = fopen("nonexistent_file.txt", "r");
if ($file) {
    // Process the file
    fclose($file);
} else {
    // Handle the error
    echo "Error opening file.\n";
}
```