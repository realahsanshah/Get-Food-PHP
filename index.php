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

