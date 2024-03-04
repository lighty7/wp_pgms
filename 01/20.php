    <html>
<head>
 <title>Read and Write file</title>
<body style='background-color:pink'>
<h1>Program-14: Program in PHP to store and read image from Database </h1>
<h1>Upload and Display Image </h1>
<?php
$conn = new MySQLi("localhost", "root", "", "mysql"); // Establish Connection with credentials
if ($conn->connect_error)
{
die("Connection failed : " . $conn->connect_error); // Connection error 
}
if (isset($_GET['id']))
{
 // Display Image
 $id = intval($_GET['id']);
 $stmt = $conn->prepare("SELECT image_type, image_data FROM images WHERE id = ?");
 $stmt->bind_param("i", $id);
 $stmt->execute();
 $stmt->bind_result($imageType, $imageData);
 $stmt->fetch();
 header("Content-Type: " . $imageType);
 echo $imageData;
 exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"]))
{
// Upload Image
$imageData = file_get_contents($_FILES["image"]["tmp_name"]);
$imageName = $_FILES["image"]["name"];
$imageType = $_FILES["image"]["type"];
$stmt = $conn->prepare("INSERT INTO images(image_name, image_type, image_data) 
VALUES (?,?,?)");
$stmt->bind_param("sss", $imageName, $imageType, $imageData);
$stmt->execute();
}
function displayImages($conn)
{
// Display Uploaded Images
$sql = "SELECT id, image_name FROM images";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc())
{
 echo "<img src='?id=" . $row["id"] . "' alt='" . $row["image_name"] . "'><br>";
}
}
?>
<form method="post" enctype="multipart/form-data">
select image to upload:
<input type="file" name="image" id="image">
<input type="submit" value="Upload Image" name="submit">
</form>
<h2>Upload Images:</h2>
<?php
 displayImages($conn);// Display Image
?>
<?php
 $conn->close();    ?>     </body>     </html>









