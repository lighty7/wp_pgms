<!DOCTYPE html>
<html>
<head>
<title>Display's Date</title>
<h1 style="background-color:Yellow;">Display's Current Date</h1>
</head>
<body>
<script type="text/javascript">
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]; 
const currentDate = new Date();
const formattedDate = `${days[currentDate.getDay()]} - ${months[currentDate.getMonth()]} - ${currentDate.getDate()}, ${currentDate.getFullYear()}`;
document.write("Today's Date is: " + formattedDate);
</script>
</body>
</html>

