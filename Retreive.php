
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css" integrity="sha512-f8mUMCRNrJxPBDzPJx3n+Y5TC5xp6SmStstEfgsDXZJTcxBakoB5hvPLhAfJKa9rCvH+n3xpJ2vQByxLk4WP2g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
<?php
// $servername ="localhost:8889";
// $username = "root";
// $password = "root";
// $dbname = "getfood";
include  'connect.php';
//Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
 //Check connection



include 'header.php';
echo "<div class='container'>";
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$myemail=$_POST['email'];
$mypassword=$_POST['password'];
$sql= "SELECT * FROM `users` where email='$myemail' and password='$mypassword'" ;
$result1=$conn->query($sql);

if($result1->num_rows>0)
{
    $row=$result1->fetch_assoc();
    $name=$row['name'];
    $username=$row['username'];
    $email=$row['email'];
    $userID=$row['id'];
    echo '<script type="text/javascript"> localStorage.setItem("isLoggedIn",true);</script>';
    echo '<script type="text/javascript"> localStorage.setItem("name","'.$name.'");</script>';
    echo '<script type="text/javascript"> localStorage.setItem("email","'.$email.'");</script>';
    echo '<script type="text/javascript"> localStorage.setItem("username","'.$username.'");</script>';
    echo '<script type="text/javascript"> localStorage.setItem("userID","'.$userID.'");</script>';
   
    echo '<br><br><br><h1>Login Successfully</h1><br><br><br>';
}
else
{
   echo '<br><br><br><h1>Invalid Email or Password</h1><br><br><br>';
}


$conn->close();
echo "</div>";
include 'footer.php';
?>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/cjs/popper.min.js" integrity="sha512-BO7V2K9oqbTnqEK9j/RiBzft8mcyj5XsfDgCmc0yymJQcBl4qhuR+TVgPL2pilyEqcMJxc8t0tp/lXGu9I0loA==" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

    <script src='./js/scripts.js'></script>
    <script type='text/javascript' src='./js/cartItems.js'></script> 
</body>
</html>