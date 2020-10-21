
<?php



//Database
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "demo";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

//GET method to get the page from the database
$page = htmlspecialchars($_GET['page']);

$sql = "SELECT * from content where id='$page'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {

      //echo "DEBUG - id " . $row["id"] . " - Title = " . $row["title"] . "<br />";

//My local variables

      $title = $row["title"];
      $metaKeywords = $row["metaKeywords"];
      $metaDescription = $row["metaDescription"];
      $contentData = $row["contentData"];
  }

}

?>


<!--HTML code-->

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title><?php echo $page;?></title>
 <meta name="description" content="<?php echo $metaDescription;?>">
 <meta name="keywords" content="<?php echo $metaKeywords;?>">

<script src="https://cdn.tiny.cloud/1/3rusxe2yh5offtunube4kiwiodor2iv9ykbmfb2qy97pkszb/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>
</head>

<body>
  <?php echo $contentData;?>
  <h1><i>Content</i> <i>Test</i></h1>
  <form method="post">
    <textarea id="mytextarea" name="mytextarea">
      Enter Your Text Here!
    </textarea>
  </form>
</body>
</html>
