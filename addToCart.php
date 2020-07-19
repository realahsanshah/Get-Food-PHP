<script src='./js/scripts.js'></script>
<?php 
    include 'connect.php';
    
    $dishId="<script>document.write(window.dishSelected[0].dishId)</script>";
        $userId="<script>document.write(window.dishSelected[0].userId)</script>";
        $qty="<script>document.write(window.dishSelected[0].qty)</script>";
        echo "<h1>$qty</h1>";
    
    for($i=0;$i<"<script>document.write(window.dishSelected.length)</script>";$i++){
        $dishId="<script>document.write(window.dishSelected[$i].dishId)</script>";
        $userId="<script>document.write(window.dishSelected[$i].userId)</script>";
        $qty="<script>document.write(window.dishSelected[$i].qty)</script>";
        echo "<h1>$qty</h1>";
    //    $sql = "INSERT INTO `cart`(`user_id`, `item_id`, `qty`)  VALUES ($userId,$dishId,$qty)";
   
    //    if ($conn->query($sql) === TRUE) {
    //        echo "<h1>Successfull</h1>";
    //    } else {
    //        echo "<h1>Unsuccessfull</h1>";
    //    }
    }
  

?>