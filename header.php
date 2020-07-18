<nav class="navbar navbar-dark navbar-expand-sm fixed-top ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="index.php">Get Food</a>
            <div class="collapse navbar-collapse" id="Navbar">


                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span>Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php"><span class="fa fa-info fa-lg"></span>About</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php"><span class="fa fa-list fa-lg"></span>Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php"><span class="fa fa-shopping-cart fa-lg"></span>Cart</a></li>
              </ul>

                <span class='navbar-text'  id='loginButton'>
                    <a href='./login.php'>
                        
                    </a>
                </span>
                <span class='navbar-text'  id='signupButton'>
                    <a href='./signup.php'>
                        
                    </a>
                </span>

            </div>
        </div>


    </nav>


   

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header align-items-center">
                <div class="col-12 col-sm-6">
                    <h1>Get FOOD</h1>
                    <p>We are here for you</p>
                    <p id='test'></p>
                </div>
            </div>
        </div>
    </header>

    <script>
        console.log('hello');
        $('#loginButton').click(()=> {
            console.log('Hello');
            $('#loginModal').modal('show');
        });
    </script>
