<?php
// Function to handle division with exception
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception("Cannot divide by zero");
    }

    return $numerator / $denominator;
}

// Function to check date format with exception
function checkDateFormat($dateString) {
    $dateFormat = 'Y-m-d';
    $date = DateTime::createFromFormat($dateFormat, $dateString);

    if (!$date || $date->format($dateFormat) !== $dateString) {
        throw new Exception("Invalid date format. Expected format: $dateFormat");
    }

    return true;
}

try {
    // Example 1: Division by zero
    $result = divide(10, 0);
    echo "Result of division: $result<br>";

} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage() . "<br>";
}

try {
    // Example 2: Checking date format
    $dateString = "2024-01-21"; // Change the date format to test different cases
    checkDateFormat($dateString);
    echo "Date format is valid: $dateString<br>";

} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage() . "<br>";
}
?>
