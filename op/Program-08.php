<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Background Color Change</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>
<body style="background-color: <?php echo getBackgroundColor(); ?>;">

  <h2>Background Color Change</h2>

  <?php
    // Function to get the background color based on the day of the week
    function getBackgroundColor() {
      $dayOfWeek = date('N'); // Returns 1 (Monday) through 7 (Sunday)

      // Define an array to map each day of the week to a background color
      $colorArray = [
        1 => '#3498db', // Monday
        2 => '#2ecc71', // Tuesday
        3 => '#e74c3c', // Wednesday
        4 => '#f39c12', // Thursday
        5 => '#9b59b6', // Friday
        6 => '#34495e', // Saturday
        7 => '#e67e22'  // Sunday
      ];

      // Return the background color based on the day of the week
      return $colorArray[$dayOfWeek];
    }
  ?>

</body>
</html>
