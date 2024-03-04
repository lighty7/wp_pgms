<html>
<body>
<h1> remove duplicate</h1>
<h2>array_unique() function</h2>
<h3>removes 1st duplicate element</h3>
<h3> print_r() function</h3>
<?php
function remove_duplicates_list($list1)
{
$nums_unique=array_values(array_unique($list1));
return $nums_unique;
}
echo"<br>";
$nums=array(1,1,2,2,3,4,5,5);
print_r($nums);
echo"<br>";
echo"after removing duplicate values:";
print_r(remove_duplicates_list($nums));
?>
</body>
</html>

