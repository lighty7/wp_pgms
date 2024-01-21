<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle image deletion
if (isset($_GET["delete"])) {
    $deleteId = $_GET["delete"];
    
    $sql = "DELETE FROM images WHERE id = $deleteId";

    if ($conn->query($sql) === TRUE) {
        echo "Image deleted successfully!<br>";
    } else {
        echo "Error deleting image: " . $conn->error . "<br>";
    }
}

// Handle image upload
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $image = $_FILES["image"]["tmp_name"];
    $imageName = $_FILES["image"]["name"];

    $imageData = addslashes(file_get_contents($image));

    $sql = "INSERT INTO images (image_name, image_data) VALUES ('$imageName', '$imageData')";

    if ($conn->query($sql) === TRUE) {
        echo "Image uploaded successfully!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Display uploaded images with delete option
$sql = "SELECT * FROM images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Uploaded Images</h2>";
    while ($row = $result->fetch_assoc()) {
        $imageId = $row["id"];
        $imageData = base64_encode($row["image_data"]);
        $src = "data:image/jpeg;base64,{$imageData}";

        echo "<div style='display: inline-block; text-align: center; margin: 10px;'>";
        echo "<img src='$src' alt='Image' style='max-width: 300px;'><br>";
        echo "<a href='?delete=$imageId' style='text-decoration: none; padding: 5px; background-color: #ff5555; color: #fff; border-radius: 5px;'>Delete</a>";
        echo "</div>";
    }
} else {
    echo "No images found in the database.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <h2>Upload Image</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="image">Choose Image:</label>
        <input type="file" name="image" id="image" required>
        <br>
        <input type="submit" value="Upload Image" style="padding: 8px; background-color: #4caf50; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
    </form>
</body>
</html>
