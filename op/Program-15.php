<!DOCTYPE html>
<html>

<head>
  <title>Read and Write files</title>
</head>

<body style='background-color:pink'>

  <h1>Program-15: Program in PHP to read and write file using form control</h1>

  <h2>Write content to Files</h2>

  <form action="Program-15.php" method="post">
    <label for="textdata">Enter text:</label><br>
    <textarea name="textdata" id="textdata"></textarea><br>
    <input type="submit" value="Write Content to File"><br><br><br>
  </form>

  <form action="Program-15.php" method="post" enctype="multipart/form-data">
    <label for="filedata">Upload file to read file contents:</label><br>
    <input type="file" name="filedata" id="filedata"><br><br>
    <hr>
    <input type="submit" value="Read File Contents"><br>
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['textdata'])) {
      // Write content to file
      file_put_contents("output.txt", $_POST['textdata']);
      echo "Content written to file successfully.<br>";
    }

    if (!empty($_FILES['filedata']['tmp_name'])) {
      // Read content from the uploaded file
      $fileContent = file_get_contents($_FILES['filedata']['tmp_name']);
      echo "File content: " . htmlspecialchars($fileContent) . "<hr>";
    }
  }
  ?>

</body>

</html>
