<html>
<head>
<title>Cookie Handler</title>
</head>
<body style='background-color:pink'>
<h1>Program-18: Program in PHP for setting and retrieving a cookie </h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
setcookie("username", $_POST['username'], time() + (10*30), "/");
 echo "<p>Cookie set. Reload the page to see the cookie value</p>";
}
 if(isset($_COOKIE["username"]))
{
echo "<p>Welcome back, ". htmlspecialchars($_COOKIE["username"])."!</p>";
}
else
{
echo "<p>Welcome, Guest!</p>";
}
?>
<!-- HTML form to set a cookie -->
<form method="post" action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>">
<label for="username">Enter your name:</label><br>
<input type="text" id="username" name="username"><br>
<input type="submit" value="Set Cookie"><br>
</form></body></html>

