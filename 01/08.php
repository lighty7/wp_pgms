<html>
<body>
<h1> changing background color</h1>
<?php
$today=date("l");
print("$today");
if($today=="sunday")
{
$bgcolor="yellow";
}
elseif($today=="monday")
{
$bgcolor="blue";
}
elseif($today=="tuesday")
{
$bgcolor="orange";
}
elseif($today=="wednesday")
{
$bgcolor="red";
}
elseif($today=="thursday")
{
$bgcolor="green";
}
elseif($today=="friday")
{
$bgcolor="gray";
}
else
{
$bgcolor="#0000ff";
}
print("<body bgcolor=\"%bgcolor\">n");
?>
</body>     </html>
