<!DOCTYPE html>
<html>
<head>
<title>Sum of Natural Numbers</title>
</head>
<body style="background-color: pink;">

<script type="text/javascript">
    // Function to calculate the sum of natural numbers
    function sumNaturalNumbers(n) {
        var sum = 0;
        for (var i = 1; i <= n; i++) {
            sum += i;
        }
        return sum;
    }

    // Prompt the user for input
    var num = window.prompt("Enter the number:");
    var n = parseInt(num);

    // Validate input
    if (isNaN(n) || n <= 0) {
        window.alert("Invalid input. Please enter a positive number.");
    } else {
        // Calculate and display the result
        var result = sumNaturalNumbers(n);
        window.alert("The sum of " + n + " natural number(s) is: " + result);
    }
</script>

</body>
</html>

