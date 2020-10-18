<!DOCTYPE html>
<?php
include("func.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/auth.css">

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
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
        </div>
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
                        <h6 class="mb-4 text-muted">Sign in to your Account</h6>

                        <!-- LOGIN -->
                        <!-- error validation login-->
                        <!-- <div class="alert alert-danger alert-dismissable" dispaly="none">
                            <a href="#" class="close" data-dismiss="alert" aria-hidden="true"">&times;</a>
                            <strong><?php $message;?></strong>
                        </div> -->

                        <!-- <form action=" func.php" method="post"> -->
                                <p class="statusMsg"></p>
                                <div class="form-group">
                                    <input type="email" id="username" class="form-control" placeholder="Email"
                                        required autocomplete="off" />
                                </div>
                                <div class="input-group">
                                    <input type="password" id="password" class="form-control" placeholder="Password"
                                        autocomplete="off" required />
                                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password" style="padding-top: 15px"></span>      
                                </div>
                                <br>
                                <!-- SUBMIT BUTTON -->
                                <button type="submit" id="login_submit" class="btn btn-primary shadow-2 mb-4">
                                
                                    Login
                                </button>
                               
                                <div class="form-group">
                                    <p class="mb-0 text-muted">
                                     <a href="forgotPasswordEmail.php">Forget Password</a>
                                </p>
                                </div>
                               
                                <p class="mb-0 text-muted">
                                    Don’t have an account? <a href="superAdmin_AdminRegistration.php">Signup</a>
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
                                    <input type="text" name="fname" class="form-control" placeholder="First Name"
                                        required autocomplete="off"  style="text-transform: capitalize;" size="30">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name"
                                        required autocomplete="off" style="text-transform: capitalize;" size="30">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Address"
                                        required autocomplete="off" >
                                </div>
                                <div class="form-group">
                                    <select name="gender" class="form-control" placeholder="Gender" required
                                        autocomplete="off">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required
                                        autocomplete="off">
                                </div>
                                <div class="input-group">
                                    <input type="password" name="password" id="show-pass" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain atleast one number and one uppercase and lowercase letter, and atleast 8 or more characters"
                                        required autocomplete="off">
                                    <span toggle="#show-pass" class="fa fa-fw fa-eye field-icon toggle-password" style="padding-top: 15px"></span>      

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

<!-- Log in Validation  -->

<script>
$(document).ready(function(){
    var login_attempts = 5;
    $('#login_submit').on('click', function(){
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var username = $('#username').val();
        var password = $('#password').val();
if(login_attempts > 1){
        if(username.trim() == '' || !reg.test(username)){
                
                console.log('Invalid Email');
                $('.statusMsg').html('<span style="color:red;">Invalid Email</p>');
                document.getElementById("username").value = "";
        }else if(password.trim() == ''){
                console.log('Password Field is Empty');
                $('.statusMsg').html("<span style='color:red;'>Password field can't be empty</p>");
        }else{
            $.ajax({
                type:'POST',
                dataType: "text",
                url:'func.php',
                data: {'loginFormSubmit':1,
                        'username' : username,
                        'password' : password},
                beforeSend: function(){
                    console.log('Processing. . .');
                },
                success: function(response){
                    response = response.substr(response.lastIndexOf('.')+1);
                    console.log(response);
                    if(response === 'admin'){
                        login_attempts = 5; 
                        window.location.href =  "dashboard.php"
                    }else if(response === 'error'){
                        login_attempts --; 
                        console.log("Atempts left: " +login_attempts)
                        alert("Login Attempts Left: " +login_attempts);
                        $('.statusMsg').html("<span style='color:red;'>Invalid Credentials</p>");  
                        // document.getElementById("username").value = "";
                        // document.getElementById("password").value = "";
                    }else{
                        login_attempts = 5;
                        console.log('User login');
                        window.location.href =  "patientDashboard.php"
                    }
                }

            });

        }
}else{
    $('.statusMsg').html("<span style='color:red;'>Login limit reached. Please wait for 30 seconds.</p>");  
    document.getElementById("login_submit").style.visibility = "hidden";
    document.getElementById("username").disabled = true;
    document.getElementById("password").disabled = true;

    setTimeout(function(){
        document.getElementById("username").disabled = false;
        document.getElementById("password").disabled = false;
        document.getElementById("login_submit").style.visibility = "visible";
        login_attempts = 5;
    }, 30000);
}

    });
});
</script>

<script>
$('.toggle-password').on('click', function() {
  $(this).toggleClass('fa-eye fa-eye-slash');
  let input = $($(this).attr('toggle'));
  if (input.attr('type') == 'password') {
    input.attr('type', 'text');
  }
  else {
    input.attr('type', 'password');
  }
});

</script>

</html>

