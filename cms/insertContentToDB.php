<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

<?php

require_once("navigation.php");
require_once("databaseConnection.php");

//Content Fields

$title = htmlspecialchars($_POST['title']);
$metaKeywords = htmlspecialchars($_POST['metaKeywords']);
$metaDescription = htmlspecialchars($_POST['metaDescription']);
$contentData = htmlspecialchars($_POST['contentData']);

//echo "DEBUG - The Title = " . $title . "<br />";
//echo "DEBUG - The Title = " . $metaKeywords. "<br />";
//echo "DEBUG - The Title = " . $metaDescription. "<br />";
//echo "DEBUG - The Title = " . $contentData. "<br />";


//SQL command
$sql = "INSERT INTO content(title, metaKeywords, metaDescription, contentData) VALUES ('$title', '$metaKeywords', '$metaDescription', '$contentData')";

if(mysqli_query($conn, $sql)) {
    echo "New record created successfully!";
}

//Error handler
else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}

//Close the database connection
$conn->close();

?>

</body>
</html>
