<nav class="navbar navbar-dark navbar-expand-sm fixed-top ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="index.html">Get Food</a>
            <div class="collapse navbar-collapse" id="Navbar">


                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span>Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php"><span class="fa fa-info fa-lg"></span>About</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php"><span class="fa fa-list fa-lg"></span>Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php"><span class="fa fa-shopping-cart fa-lg"></span>Cart</a></li>
                </ul>
                <span class='navbar-text'>
                    <a id='loginButton' href='./login.php'>
                        <button class='btn btn-outline'><span class="fa fa-sign-in" style="cursor:pointer ">Login</span></button>
                    </a>
                </span>
                <span class='navbar-text'>
                    <a id='signupButton' href='./signup.php'>
                        <button class='btn btn-outline'><span className="fa fa-sign-up fa-lg"></span>Sign Up</button>
                    </a>
                </span>
            </div>
        </div>


    </nav>


    <div id='loginModal' class="modal fade" role='dialog'>
        <div class='modal-dialog modal-lg' role="content">
            <div class="modal-content">
                <div class='modal-header'>
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class='close' data-dismiss='modal'>
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- <div class="form-row"> -->
                            <div class="form-group">
                                <label for='email'>Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email" name='email'>
                            </div>
                        <!-- </div> -->
                        <!-- <div class='form-row'> -->
                            <div class="form-group">
                                <label for='password'>Password</label>
                                <input type="password" class="form-control" placeholder="Enter Password" name='password'>
                            </div>
                        <!-- </div> -->
                        <div class='form-row'>
                            <!-- <div class='form-group'> -->
                            <button type='button' class="btn btn-secondary btn-sm ml-auto">Cancel</button>
                            <button type='submit' class="btn btn-primary btn-sm ml-1">Login</button>
                            <!-- </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <header class="jumbotron">
        <div class="container">
            <div class="row row-header align-items-center">
                <div class="col-12 col-sm-6">
                    <h1>Get FOOD</h1>
                    <p>We are here for you</p>
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
