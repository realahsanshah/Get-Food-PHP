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
    <?php include 'header.php' ?>
    
   

    <div class='container'>
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Sign Up</li>
            </ol>
            <div class="col-12">
                <h3>Sign Up</h3>
                <hr>
            </div>
        </div>
        <form action="insert.php" method="POST">
            <div class='form-row'>
                <div class='form-group col-12 col-md-6'>
                    <label for='name'> Name: </label>
                    <input name='name' class='form-control' type='text' placeholder='Enter Name' required>
                </div>
            </div>

            <div class='form-row'>
                <div class='form-group col-12 col-md-6'>
                    <label for='username'> Username: </label>
                    <input name='username' class='form-control' type='text' placeholder='Enter Username' required>
                </div>
            </div>

            <div class='form-row'>
                <div class='form-group col-12 col-md-6'>
                    <label for='email'> Email: </label>
                    <input name='email' class='form-control' type='email' placeholder='Enter Email' required>
                </div>
            </div>
         
            <div class='form-row'>
                <div class='form-group col-12 col-md-6'>
                    <label for='password'> Password: </label>
                    <input name='password' class='form-control' type='password' placeholder='Enter Password' required>
                </div>
            </div>

            <div class='form-row'>
                <div class='form-group col-12 col-md-6'>
                    <button class='btn btn-primary ml-auto' type="submit">Sign Up</button>    
                    <button class='btn btn-secondary ml-1'>Cancel</button>    
                </div>
            </div>
        </form>
    </div>

    <?php include 'footer.php' ?>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/cjs/popper.min.js" integrity="sha512-BO7V2K9oqbTnqEK9j/RiBzft8mcyj5XsfDgCmc0yymJQcBl4qhuR+TVgPL2pilyEqcMJxc8t0tp/lXGu9I0loA==" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

    <script type='text/javascript' src='./js/scripts.js'></script>
</body>
</html>