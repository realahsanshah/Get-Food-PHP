<?php 
  session_start();
  include 'connect.php';

  if(isset($_POST["add_to_cart"])){
    
    // if(isset($_SESSION['cart']))
    // {

    // }
    // else
    // {
      
    //   $_SESSION['cart'][0]=$item_array;
    // }

    // echo '<script>alert('.$_POST['userId'].')</script>';

    $item_array=array(
      'dishId'=>$_GET['id'],
      'userId'=>$_POST['userId'],
      'qty'=>$_POST['qty']
    );

    $sql="INSERT INTO `cart`(`user_id`, `item_id`, `qty`) 
          VALUES ('".$item_array['userId']."','".$item_array['dishId']."','".$item_array['qty']."')";
    if($result = $conn->query($sql)===TRUE){
      echo "<script>console.log('Added to Cart');</script>";
    }
    else{
      $err=$conn->error;
      echo "<script>alert('Unsuccessfull because".($err)."');</script>";
    }

  }
else{
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css" integrity="sha512-f8mUMCRNrJxPBDzPJx3n+Y5TC5xp6SmStstEfgsDXZJTcxBakoB5hvPLhAfJKa9rCvH+n3xpJ2vQByxLk4WP2g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body >
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/cjs/popper.min.js" integrity="sha512-BO7V2K9oqbTnqEK9j/RiBzft8mcyj5XsfDgCmc0yymJQcBl4qhuR+TVgPL2pilyEqcMJxc8t0tp/lXGu9I0loA==" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>


<?php include 'header.php' ?>
    
   

    <div class='container'>
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Cart</li>
            </ol>
            <div class="col-12">
                <h3>Menu</h3>
                <hr>
            </div>
        </div>
    
     
      <div class='row'>
           
               
    <?php 

        $sql = "SELECT * FROM dishes";

        $result = $conn->query($sql);
  $userId="<script>document.write(userID);</script>";
if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
    echo "
    <form class='dishForm' method='POST' action='menu.php?action=add&id=".$row['id']."'>
      <div class='col-12 col-md-8 m-1'>
        <div class='card'>
          <img class='card-img-top' src=".$row['dish_image']." alt='Card image cap' />
          <div class='card-body'>
            <h5 class='card-title'>".$row['dish_name']."</h5>
            <p class='card-text'>".$row['dish_detail']."</p>
            <input type='number' name='qty' class='form-control col-4' value='1'></input>
            <button id=".$row['id']." class='addToCart btn btn-primary' name='add_to_cart' type='submit'>Add to Cart</Button>
            <input type='hidden' id='userId".$row['id']."' name='userId' value=''></input>
            <script>              
              document.getElementById('userId".$row['id']."').value=localStorage.getItem('userID');
            </script>
          </div>
        </div>
      </div>
    </form>
   
";

  }
} else {
  echo "<h1>No Dish available</h1>";
}

    ?>
    
    
       </div> 
</div>

    <?php include 'footer.php' ?>

    
   
    <script src='./js/scripts.js'></script>
</body>
</html>