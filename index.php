<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Food</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">

</head>
<body>  
<?php 
    include 'header.php';
?>

    <div class='container'>
    <br><br>
    <div class="row row-content align-items-center ">
        <div class="col-12 col-sm-4 order-sm-last col-md-3 ">
            <h3>Our Lipsmacking Culinary Creations</h3>
        </div>
            <div class="col col-sm order-sm-first col-md ">
                <div class="media ">
                    <img class="d-flex mr-3 img-thumbnail align-self-center " src="./images/pizza.jpg" alt="Pizza ">
                    <div class="media-body ">
                        <h2 class='mt-0'>Outstnding Pizza
                            <span class="badge badge-danger ">HOT</span>
                            <span class="badge badge-pill badge-secondary ">$9.99</span>
                        </h2>
                        <p class="d-none d-sm-block ">The taste you won't get it from anywhere else</p>

                    </div>
                </div>

            </div>
        </div>

        <br><br>
        <div class="row row-content align-items-center ">
            <div class="col-12 col-sm-4 order-sm-first col-md-3 ">
                <h3>This Month's Promotions</h3>
            </div>
            <div class="col col-sm order-sm-last col-md ">
                <div class="media ">
                    <div class="media-body ">
                        <h2 class='mt-0'>Great Food Variety
                            <span class="badge text-white " style="background-color:#eb0e45 ">NEW</span>
                        </h2>
                        <p class="d-none d-sm-block ">Everything you want is here</p>

                    </div>
                    <img class="img-fluid img-thumbnail align-self-center " src="./images/pakistaniFood.jpg" alt="Great Food Quality ">
                </div>
            </div>
        </div>

        <br><br>
        <div class=" row row-content align-item-center ">
            <div class="col-12 col-sm-4 order-sm-last col-md-3 ">
                <h3>Meet our Culinary Specialists</h3>
            </div>
            <div class="col col-sm order-sm-first col-md ">
                <div class="media ">
                    <img class="d-flex mr-3 img-thumbnail align-self-center " src="images/ahsanshah.png" alt="Ahsan Shah" width=150 height=150>
                    <div class="media-body ">
                        <h2 class='mt-0'>Ahsan Shah</h2>
                        <h4>Executive Chef</h4>
                        <p class="d-none d-sm-block ">Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p>

                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php 
        include 'footer.php';
    ?>

    <script src="node_modules/jquery/dist/jquery.slim.min.js "></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js "></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js "></script>

    <script src='./js/scripts.js'></script>
    <script>
        $('#loginButton').click(()=> {
        console.log('Hello');
        $('#loginModal').modal('show');
    });
    </script>
</body>
</html>


