
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
$myemail=$_POST['email'];
$mypassword=$_POST['password'];
$sql= "SELECT * FROM `users` where email='$myemail' and password='$mypassword'" ;
// $sql="SELECT * FROM `users` WHERE email='ahsan999@gmail.com' and password='admin786'";
$result1=$conn->query($sql);
if($result1->num_rows>0)
{
    echo 'Login Successfully';
}
else
{
   echo 'Invalid Email or Password';
}


$conn->close();
?>