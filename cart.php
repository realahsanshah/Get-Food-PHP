<?php 
    error_reporting(E_ERROR | E_PARSE);
    include 'connect.php';
    
    if (isset($_POST["removeDish"])) {
        $sql="DELETE FROM `cart` WHERE cart_id=".$_GET['dish']."";
        if ($conn->query($sql) === true) {
        }
        else{
            
        }
    }

    if (isset($_POST["checkout"])) {
    $sql="UPDATE `cart` SET isDone=1 WHERE user_id='".$_GET['user']."'";
    if ($conn->query($sql) === TRUE) {
        // echo "\n\nRecord deleted successfully";
    } else {
        // echo "\n\nError deleting record: " . $conn->error;
    }

    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css" integrity="sha512-f8mUMCRNrJxPBDzPJx3n+Y5TC5xp6SmStstEfgsDXZJTcxBakoB5hvPLhAfJKa9rCvH+n3xpJ2vQByxLk4WP2g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
    <?php include 'header.php' ?>
    
   

    <div class='container'>
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Cart</li>
            </ol>
            <div class="col-12">
                <h3>Cart</h3>
                <hr>
            </div>
        </div>
            <?php 
                include 'connect.php';
                $userId=$_GET['user'];
                $sql="SELECT * FROM `cart` INNER JOIN `dishes` 
                ON cart.item_id=dishes.id WHERE user_id=$userId AND isDone=0";

                $result = $conn->query($sql);
                $total=0;
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                       echo" 
                       <form class='cartForm' method='POST' action='cart.php?dish=".$row['cart_id']."&user=".$userId."'>
                       <div class='row'>
                       
                        <div class='col-12 col-md-8 media'>
                            <img class='mr-3' src=".$row['dish_image']." alt='".$row['dish_name']."' width='64px' height='64px'>
                            <div class='media-body'>
                            <h5 class='mt-0'>".$row['dish_name']."</h5>
                            <h6>Qty:".$row['qty']."<br>Price:".$row['dish_price']."</h6>
                          </div>
                        </div>
                        <div class='col-12 col-md-4'>
                            <button type='submit' id='dish_".$row['cart_id']."' class='btn btn-secondary' name='removeDish'><span class='fa fa-minus'></span></button>
                        </div>
                        </div>
                        </form>
                    
                        ";
                        $total+=$row['dish_price'];
                    }
                    echo "
                        <div class='col-8 d-flex justify-content-center'>
                            <h4>Total to Pay $$total</h4>
                        </div>
                        <form class='checkout' method='POST' action='cart.php?user=".$userId."'>
                            <div class='col-8 d-flex justify-content-center'>
                                <button id='total' class='btn btn-secondary' type='submit' name='checkout'>Check Out</button>
                                <br><br>
                            </div>
                        </form>
                    ";
                }
                else{
                    echo "<h1>Cart is empty</h1>";
                }
            ?>
    </div>
    <?php include 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/cjs/popper.min.js" integrity="sha512-BO7V2K9oqbTnqEK9j/RiBzft8mcyj5XsfDgCmc0yymJQcBl4qhuR+TVgPL2pilyEqcMJxc8t0tp/lXGu9I0loA==" crossorigin="anonymous"></script>
    <script type='text/javascript' src='./js/scripts.js'></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
    
    
</body>
</html>