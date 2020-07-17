<?php
$servername ="localhost:8889";
$username = "root";
$password = "root";
$dbname = "getfood";
//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 //Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name,username, email,password)
VALUES ('$_POST[name]','$_POST[username]','$_POST[email]','$_POST[password]')";

if ($conn->query($sql) === TRUE) {
   echo "Inserted Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

