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
    
      <form method='POST' action='addToCart.php'>
        <button type='submit' class='btn btn-primary'>Submit Data</button>
      </form>
       <div class='row'>
           
               
    <?php 
        include 'connect.php';

        $sql = "SELECT * FROM dishes";

        $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "
   
    <div class='col-12 col-md-5 m-1'>
    <div class='card'>
  <img class='card-img-top' src=".$row['dish_image']." alt='Card image cap'>
  <div class='card-body'>
    <h5 class='card-title'>".$row['dish_name']."</h5>
    <p class='card-text'>".$row['dish_detail']."</p>
    <select class='form-control' id='qty".$row['id']."'>
      <option value='1'>1</option>
      <option value='2'>2</option>
      <option value='3'>3</option>
      <option value='4'>4</option>
      <option value='5'>5</option>
    </select>
    <button id=".$row['id']." class='addToCart btn btn-primary' >Add to Cart</button>
  </div>
</div>
</div>

<script>
var dish_id; 
var userId;
var list;
var qty;
window.dishSelected;
$(document).ready(function(){
  $('#".$row['id']."').click(function(event){
    console.log('Inside JQuery'+".$row['id'].");
    dish_id=".$row['id'].";
    userId=window.user.userId;
    list=document.getElementById('qty'+".$row['id'].");
    qty=list.options[list.selectedIndex].value;
    console.log('dish ID: '+dish_id);
    console.log('User ID: '+userId);
    console.log('Quamtity: '+qty);
    window.dishSelected.push({
      dishId:dish_id,
      userId:userId,
      qty:qty
    });
    console.log(window.dishSelected);
  });
});

// $(document).ready(function(){
//   $('.addToCart').click(function(event){
// // var addToCart=document.getElementById(event.target.id);
//   dish_id=event.target.id;
//   userId=window.user.userId;
//   list=document.getElementById('qty'+dish_id);
//   qty=list.options[list.selectedIndex].value;
//   console.log('dish ID: '+dish_id);
//   console.log('User ID: '+userId);
//   console.log('Quamtity: '+qty);
//   }
// });
// }

</script>
";

  }
} else {
  echo "<h1>No Dish available</h1>";
}


// ";
// echo'  $sql = "INSERT INTO `dishesincart`(`cart_id`, `dish_id`, `dish_quantity`) 
//     VALUES (1,'.$row["id"].',1)";

//   if ($conn->query($sql) === TRUE) {
//     echo "<h1>Signed Up Successfully</h1>";
//   } else {
//     echo "<h1>Cannot Sign Up</h1>";
//   }
// ';
//   echo "
    ?>
    
    
       </div> 
</div>

    <?php include 'footer.php' ?>

   
  
    <script src='./js/scripts.js'></script>
</body>
</html>