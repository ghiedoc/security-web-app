<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Sign up</title>

  <link href="vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/auth.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/auth.css">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body>
  <!-- HAMBURGER MENU -->
  <div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger">
      <div></div>
    </div>
    <div class="menu">
      <div>
        <div>
          <ul>
            <li><a href="index.php#">Home</a></li>
            <li><a data-toggle="modal" href="#modalLoginForm">Sign In</a></li>
            <li><a data-toggle="modal" href="#modalRegisterForm">Sign Up</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- HAMBURGER MENU -->

  //CREATE NEW ACCOUNT/ SIGN UP
  <div class="wrapper">
    <div class="auth-content">
      <div class="card">
        <div class="card-body text-center">
          <div class="mb-4">
            
          </div>
          <h6 class="mb-4 text-muted">Create a new account</h6>

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
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" name="pat_register" value="Add Registration" class="btn btn-primary shadow-2 mb-4">Register</button>
          </form>
          <p class="mb-0 text-muted">Already have an account? <a data-toggle="modal" href="#modalLoginForm">Log in</a>
          </p>
        </div>
      </div>
    </div>
  </div>

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
            <div class="mb-4">
              <img class="brand" src="/images/008-dentist.svg" alt="logo here" />
            </div>
            <h6 class="mb-4 text-muted">Sign in to your account</h6>

            <form action="" method="">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" required />
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required />
              </div>
              <div class="form-group text-left">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" id="remember-me" />
                  <label class="custom-control-label" for="remember-me">Remember me</label>
                </div>
              </div>
              <button class="btn btn-primary shadow-2 mb-4">
                <a href="dashboard.php">Login</a>
              </button>
            </form>
            <p class="mb-2 text-muted">
              Forgot password? <a href="forgot-password.php">Reset</a>
            </p>
            <p class="mb-0 text-muted">
              Don’t have an account? <a href="signup.php">Signup</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/vendor/jquery3/jquery-3.4.1.min.js"></script>
  <script src="assets/vendor/bootstrap4/js/bootstrap.min.js"></script>
</body>

</html>