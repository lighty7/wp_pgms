<html>
<body>
<h1>Program-11: Write a PHP Script to print the following pattern</h1>
<?php 
$size = 5;
for ($i = 1; $i <= $size; $i++) {
    for ($j = $size; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*&nbsp;&nbsp;";
    }
    echo "<br />";
}
?>
</body>
</html>
