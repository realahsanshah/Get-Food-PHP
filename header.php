<nav class="navbar navbar-dark navbar-expand-sm fixed-top ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="index.html">Get Food</a>
            <div class="collapse navbar-collapse" id="Navbar">


                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.html"><span class="fa fa-home fa-lg"></span>Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.html"><span class="fa fa-info fa-lg"></span>About</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><span class="fa fa-list fa-lg"></span>Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="contactus.html"><span class="fa fa-address-card fa-lg"></span>Contact</a></li>
                </ul>
                <span class='navbar-text'>
                    <a id='loginButton'>
                        <span class="fa fa-sign-in" style="cursor:pointer ">Login</span>
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
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for='email'>Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email" name='email'>
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for='password'>Password</label>
                                <input type="password" class="form-control mr-1" placeholder="Enter Password" name='password'>
                            </div>
                            <div class="form-group col-sm-4 ml-auto">
                                <input type="checkbox" class="form-check-input ml-auto" name='rememberMe'>
                                <label class="form-check-label ml-3" for='rememberMe'>Remeber Me</label>
                            </div>
                        </div>
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

