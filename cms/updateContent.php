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
</style>

<h1>Updating Your Content</h1>
<p>Please enter your information into required fields and click Submit button.</p>


<?php

require_once("navigation.php");
require_once("databaseConnection.php");


//Selecting the page with GET method
$page = htmlspecialchars($_GET['page']);

//echo "DEBUG = $page";

$sql = "SELECT * from content where id='$page'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0) {

//If there are records then display that info
while($row = mysqli_fetch_assoc($result)) {

//echo "id " . $row["id"] . " - Title = " . $row["title"] . "<br />";

  $title = $row["title"];
  $metaKeywords = $row["metaKeywords"];
  $metaDescription = $row["metaDescription"];
  $contentData = $row["contentData"];

 }

}

else {
  echo "0 Results";
}



//Close the database connection
mysqli_close($conn);

 ?>

 <form name="myForm" method="post" action="updatedContentToDB.php"> <br />

<input type="hidden" name="content_id" id="content_id" value="<?php echo $page;?>">

 <p>Enter a Title</p>
 <input type="text" name="title" id="title" value="<?php echo $title;?>"> <br />
 <p>Enter Keywords</p>
 <input type="text" name="metaKeywords" id="metaKeywords" value="<?php echo $metaKeywords;?>"> <br />
 <p>Enter a Description</p>
 <input type="text" name="metaDescription" id="metaDescription" value="<?php echo $metaDescription;?>"> <br />
 <p>Enter a Content</p>
 <input type="text" name="contentData" id="contentData" value="<?php echo $contentData;?>"> <br />
 <input type="submit"> <br />
 </form>


 </body>
 </html>
