<!DOCTYPE html>
<html>

<head>
  <title>Exception Handling</title>
</head>

<body style='background-color:pink'>

  <h1>Program-20: Program in PHP for Exception Handling for (1) Divide by Zero (2) Checking date format </h1>

  <?php

  // Exception Handling for Divide by Zero
  function divide($numerator, $denominator)
  {
    if ($denominator == 0)
      throw new Exception("Cannot Divide by Zero");

    return $numerator / $denominator;
  }

  // Exception Handling for checking date format
  function checkDateFormat($date, $format = "Y-m-d")
  {
    // The DateTime::createFromFormat is an inbuilt function in PHP
    // which returns a new DateTime object representing the date and time format.
    $dateTime = DateTime::createFromFormat($format, $date);

    if (!$dateTime || $dateTime->format($format) !== $date)
      throw new Exception("Invalid date format.");

    echo "The date $date is valid.<br>";
    return true;
  }

  // Testing Division
  try {
    echo divide(10, 2) . "<br>"; // Should work
    echo divide(10, 0) . "<br>"; // Should throw exception
  } catch (Exception $e) {
    echo "Division error: " . $e->getMessage() . "<br>";
  }

  // Testing Date Format
  try {
    checkDateFormat("2024-01-16"); // Should work and confirm validation
    checkDateFormat("16/01/2024");  // Should throw exception
  } catch (Exception $e) {
    echo "Date error: " . $e->getMessage() . "<br>";
  }

  ?>

</body>

</html>
