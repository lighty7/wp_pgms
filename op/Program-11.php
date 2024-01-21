<?php
// Function to print the centered pattern
function printCenteredPattern($rows) {
    for ($i = 1; $i <= $rows; $i++) {
        // Print spaces before the pattern
        for ($j = 1; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }

        // Print asterisks
        for ($k = $rows; $k >= $i; $k--) {
            echo "*";
        }

        echo "<br>";
    }
}

// Specify the number of rows for the pattern
$rows = 5; // Change this value as needed

// Call the function to print the centered pattern
printCenteredPattern($rows);
?>
