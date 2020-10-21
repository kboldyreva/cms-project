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


// Using GET method to get user id to delete data from the database
$id = htmlspecialchars($_GET['page']);

$sql = "DELETE FROM content WHERE id='$id'";

if(mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
}

else {
  echo "Error deleting record: " . mysqli_error($conn);
}





//Close the database connection
mysqli_close($conn);

 ?>

</body>
</html>
