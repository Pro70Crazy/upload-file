<html>
  <head>
    <title>Uploading File</title>
  </head>
  <body>
    <h1>File Info</h1>
    <?php
echo "<b>File Name: </b>". $_FILES['FileUpload']['name'] . "<br>";
echo "<b>File Type: </b>". $_FILES['FileUpload']['type'] . "<br>";
echo "<b>File Location: </b>". $_FILES['FileUpload']['tmp_name']. "<br>";
echo "<b>File Size: </b>". $_FILES['FileUpload']['size']; 
echo " bytes (B)";
echo "<br><br>";

$FileSource = $_FILES['FileUpload']['tmp_name'];
$FileUpload = '/pathname/'. $_FILES['FileUpload']['name'];

// checks and submits file
if (isset($_POST["submit"])) {
  if (($_FILES['FileUpload']['type'] == "image/png") or ($_FILES['FileUpload']['type'] == "image/jpg") or ($_FILES['FileUpload']['type'] == "image/jpeg") or ($_FILES['FileUpload']['type'] == "image/svg") or ($_FILES['FileUpload']['type'] == "image/bmp") or ($_FILES['FileUpload']['type'] == "image/gif")
  {
  copy($FileSource,$FileUpload);
  echo "<h1>Upload Complete!</h1>";
  }
  else
  {
  echo "<h3>Sorry, you can only upload image files.</h3>";
  }
}
?>
  </body>
</html>
