```php
<?php
$malformedJson = "{\"name\": \"John Doe\", \"age\": 30, \"city\": \"New York}"; // Missing closing brace

$data = json_decode($malformedJson, true);

if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
    echo 'Error decoding JSON: ' . json_last_error_msg();
} else {
    echo 'Name: ' . $data['name'] . '\n';
    echo 'Age: ' . $data['age'] . '\n';
    echo 'City: ' . $data['city'] . '\n';
}
?>
```