<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<style>
h1 {
  color: blue;
  position: relative;
}
table, th, td {
  border: 1px solid black;
  text-align: center;
  padding: 5px;
}
</style>

<h1>List of Users</h1>
<p>Please select the information you want to update.</p>

<?php

require_once("navigation.php");
require_once("databaseConnection.php");


//Selecting everything from the content table
$sql = "SELECT * FROM content";

if($result = mysqli_query($conn, $sql)) {

  if(mysqli_num_rows($result) > 0)  {


//Displaying the table
    echo "<table>";
      echo "<tr>";
         echo "<th>id</th>";
         echo "<th>Title</th>";
         echo "<th>Keywords</th>";
         echo "<th>Description</th>";
         echo "<th>Content</th>";
         echo "<th>Delete Content</th>";
      echo "</tr>";


      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
           echo "<td>" . "<a href=" . "updateContent.php?page=" . $row['id'] . ">" . $row ['id'] . "</a>" . "</td>";
           echo "<td>" . "<a href=" . "updateContent.php?page=" . $row['id'] . ">" . $row ['title'] . "</a>" . "</td>";
           echo "<td>" . "<a href=" . "updateContent.php?page=" . $row['id'] . ">" . $row ['metaKeywords'] . "</a>" . "</td>";
           echo "<td>" . "<a href=" . "updateContent.php?page=" . $row['id'] . ">" . $row ['metaDescription'] . "</a>" . "</td>";
           echo "<td>" . "<a href=" . "updateContent.php?page=" . $row['id'] . ">" . $row ['contentData'] . "</a>" . "</td>";
           echo "<td>" . "<a href=" . "deleteContent.php?page=" . $row['id'] . ">" . "Delete Content" . "</a>" . "</td>";
       echo "</tr>";
      }

    echo "</table>";



    mysqli_free_result($result);

  }

  else {
    echo "No records matching your query.";
  }

}

else {
  echo "ERROR: Could not execute $sql." . mysqli_error($conn);
}


//Closing connection
mysqli_close($conn);

 ?>

</body>
</html>
