<?php
// Function to check if a number is prime
function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Function to generate Fibonacci series up to a specified limit
function generateFibonacci($limit) {
    $fibonacciSeries = array();
    $fibonacciSeries[0] = 0;
    $fibonacciSeries[1] = 1;

    for ($i = 2; $i < $limit; $i++) {
        $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
    }

    return $fibonacciSeries;
}

// Specify the limit for both prime numbers and the Fibonacci series
$limit = 20; // Change this value as needed

// Generate and display prime numbers up to the specified limit
echo "Prime numbers up to $limit: ";
for ($i = 2; $i <= $limit; $i++) {
    if (isPrime($i)) {
        echo $i . ' ';
    }
}

// Generate and display the Fibonacci series up to the specified limit
echo "<br>Fibonacci series up to $limit: ";
$fibonacciSeries = generateFibonacci($limit);
echo implode(', ', $fibonacciSeries);
?>
