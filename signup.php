<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">

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
        <form>
            <div class='form-row'>
                <div class='form-group col-12 col-md-6'>
                    <label for='name'> Name: </label>
                    <input name='name' class='form-control' type='text' placeholder='Enter Name'>
                </div>
            </div>

            <div class='form-row'>
                <div class='form-group col-12 col-md-6'>
                    <label for='username'> Username: </label>
                    <input name='username' class='form-control' type='text' placeholder='Enter Username'>
                </div>
            </div>

            <div class='form-row'>
                <div class='form-group col-12 col-md-6'>
                    <label for='email'> Email: </label>
                    <input name='email' class='form-control' type='email' placeholder='Enter Email'>
                </div>
            </div>
         
            <div class='form-row'>
                <div class='form-group col-12 col-md-6'>
                    <label for='password'> Password: </label>
                    <input name='password' class='form-control' type='password' placeholder='Enter Password'>
                </div>
            </div>

            <div class='form-row'>
                <div class='form-group col-12 col-md-6'>
                    <button class='btn btn-primary ml-auto'>Sign Up</button>    
                    <button class='btn btn-secondary ml-1'>Cancel</button>    
                </div>
            </div>
        </form>
    </div>

    <?php include 'footer.php' ?>

    <script src="node_modules/jquery/dist/jquery.slim.min.js "></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js "></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js "></script>

    <script src='./js/scripts.js'></script>
</body>
</html>