<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "demo");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO images (image) VALUES ('$image')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
  $result = mysqli_query($db, "SELECT * FROM images WHERE id=21");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type="text/css" href="testing.css">
</head>
<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<img src='images/".$row['image']."' >";
        echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="testing.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
      <input type="file" name="image">
    </div>
    
    <div>
      <button type="submit" name="upload">POST</button>
    </div>
  </form>
</div>
</body>
</html>