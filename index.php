<!DOCTYPE html>
<?php include("func.php");?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/auth.css">
    <link rel="stylesheet" href="css/sidebar-dafault.css">



    <!-- <link href="vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet" /> -->
    <title>Dental Clinic | Home</title>
</head>

<body>
    <!-- HAMBURGER MENU -->
    <div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="butt">
            <a class="in-butt" data-toggle="modal" href="#modalLoginForm">Sign in</a>
            <a class="up-butt" data-toggle="modal" href="#modalSignUpForm">Sign up</a>
        </div>
    </div>
    <!-- HAMBURGER MENU -->

    <!-- LANDING PAGE -->
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title">
                        Healthy <br />
                        Smile
                    </p>
                    <p class="promo-description">
                        A better life starts with a beautiful smileeee.
                    </p>
                    <a class="btn-book" data-toggle="modal" type="button" data-target="#modalLoginForm">Book Now</a>
                </div>s
            </div>
        </div>
    </section>
    </section>

    <!-- MODAL FOR SIGNING IN -->
    <!-- Modal Sign In-->
    <div class=" modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="card-body text-center">
                        <!-- <div class="mb-4">
                  <img class="brand" src="./images/001-teeth.svg" alt="logo here" />
                </div> -->
                        <h6 class="mb-4 text-muted">Sign in to your Account</h6>

                        <!-- LOGIN -->
                        <form action="func.php" method="post">
                            <div class="form-group">
                                <input type="email" name="username" class="form-control" placeholder="Email" required />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    required />
                            </div>
                            <!-- <div class="form-group text-left">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" id="remember-me" />
                      <label class="custom-control-label" for="remember-me">Remember me</label>
                    </div>
                  </div> -->
                            <!-- SUBMIT BUTTON -->
                            <button type="submit" name="login_submit" class="btn btn-primary shadow-2 mb-4">
                                Login
                            </button>
                        </form>
                        <!-- <p class="mb-2 text-muted">
                  Forgot password? <a href="forgot-password.php">Reset</a>
                </p> -->
                        <p class="mb-0 text-muted">
                            Don’t have an account? <a href="signup.php">Signup</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sign Up-->
    <div class=" modal fade" id="modalSignUpForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <h6 class="mb-4 text-muted">Create a New Account</h6>
                    <div class="card-body text-center">
                        <form action="func.php" class="form-group" method="post">
                            <div class="form-group">
                                <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control" placeholder="Address" required>
                            </div>
                            <div class="form-group">
                                <select name="gender" class="form-control" placeholder="Gender" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    required>
                            </div>
                            <button type="submit" name="pat_register" value="Add Registration"
                                class="btn btn-primary shadow-2 mb-4">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery3/jquery-3.4.1.min.js"></script>
    <script src="vendor/bootstrap4/js/bootstrap.min.js"></script>

    


</body>
<?php include('alertconfig.php');?>

<!-- Footer -->
<footer class=" page-footer font-small cyan darken-3">

    <div class="container">
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</html>