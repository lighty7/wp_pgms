<!DOCTYPE html>
<html>
<head><title>Input Validation</title>
</head>
<body style='background-color:yellow'>
<h1>Program-17: Program in PHP to Validate Input</h1>
<form method="post">
Name: <input type="text" name="name"><br><br>
Email: <input type="text" name="email"><br><br>
<input type="submit" name="submit" value="Submit"><br><br>
</form>
</body>
<html>
<?php
if ($_SERVER["REQUEST_METHOD"] =="POST")
{
$name = $_POST['name'];
$email = $_POST['email'];
if (empty($name))
{
}
echo "Name is required.<br><br>";
}else
{
echo "Name:".$name."<br><br>";
}
if (empty($email))

{
echo "Email is required.<br><br>";
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
echo "Invalid Email format.<br><br>";
}
Else
{
echo "Email:".$email."<br><br>";
}     ?>
