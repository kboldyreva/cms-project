<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

require_once("navigation.php");
require_once("databaseConnection.php");

//id is the primary key in database table
$id = htmlspecialchars($_POST['content_id']);
$title = htmlspecialchars($_POST['title']);
$metaKeywords = htmlspecialchars($_POST['metaKeywords']);
$metaDescription = htmlspecialchars($_POST['metaDescription']);
$contentData = htmlspecialchars($_POST['contentData']);


$sql = "UPDATE content SET title='$title', metaKeywords='$metaKeywords', metaDescription='$metaDescription', contentData='$contentData' WHERE id ='$id'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "" . mysqli_error($conn);
}

//Close the database connection
mysqli_close($conn);

?>
</body>
</html>
