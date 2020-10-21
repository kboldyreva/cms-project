<?php
//Database connection
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


?>
