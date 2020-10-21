<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

  <style>
    h1 {
      color: blue;
      position: relative;
    }
  </style>

  <h1>Enter Your Content</h1>
  <p>Please enter your information into required fields and click Submit button.</p>


<?php
 require_once("navigation.php");
 require_once("databaseConnection.php");
  ?>

<!--Content Form-->

<form name="myForm" method="post" action="insertContentToDB.php"> <br />
<p>Enter a Title</p>
<input type="text" name="title" id="title"> <br />
<p>Enter your Keywords</p>
<input type="text" name="metaKeywords" id="metaKeywords"> <br />
<p>Enter your Description</p>
<input type="text" name="metaDescription" id="metaDescription"> <br />
<p>Enter your Content</p>
<input type="text" name="contentData" id="contentData"> <br />
<input type="submit"> <br />
</form>


</body>
</html>
