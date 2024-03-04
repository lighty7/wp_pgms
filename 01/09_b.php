<html>
<body>
<h1> prime number</h1>
<?php
function primenumber($MyNum){
$n=0;
for($i=2;$i<($MyNum/2+1);$i++){
if($MyNum%$i==0){
$n++;
break;
}
}
if($n==0)
{
echo $MyNum."<br>";
}
}
$x=1;
$y=50;
echo"<h3> prime number between ".$x." and ".$y."are:<br><br>";
for($i=$x;$i<$y+1;$i++)
{
primenumber($i);
}
?>
</body>
</html>
