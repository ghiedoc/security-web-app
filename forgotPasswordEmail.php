<!DOCTYPE html>
<?php include("func.php");?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/auth.css">

    <title>Dental Clinic | Home</title>

</head>

<body>

    <section id="banner" >
        <div class="container" >
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title">
                        Healthy <br />
                        Smile
                    </p>
                    <p class="promo-description">
                        A better life starts with a beautiful smileeee.
                    </p>
                    <form action="index.php" method="post">
                        <button class="btn btn-primary shadow-2 mb-4">Book Now</button>
                    </form>
                    
                </div>
                <div class="col-md-6">
                   
                </div>
                 
            </div>
            
            
        </div>
        
        
        
        <div class="panel-group" style="color:red; float:right ; width:40%; height:100%; background-color:white; opacity:80%" >
    <div class="panel panel-default">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    
                </div>
                <div class="modal-body mx-3">
                    <div class="card-body text-center">

                        
                        <h6 class="mb-4 text-muted">Forgot Password</h6>


                            <?php $message;?>
  

                         <form action=" forgotPasswordEmail.php" method="post"> 
                                <div class="form-group">
                               <p id="invalid" style="display:none">
                                     
                                </p>
                            </div>
                             
                                <p class="statusMsg"></p>
                                <div class="form-group">
                                    <input type="email" name="username" id="username" class="form-control" placeholder="Email"
                                      required autocomplete="off"   />
                                </div>
                            
                            
                                
                        

                                <button type="submit" name="forgot" id="forgot" class="btn btn-primary shadow-2 mb-4">
                                
                                    Submit
                                </button>
                        
                           <div class="form-group">
                               <p >
                                     <a href="index.php" class="mb-6 text-muted" >Login Instead?</a>
                                </p>
                            </div>
                            
                        </form>
                        
                                
                                    
                               
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>

    </section>
        <script src="vendor/jquery3/jquery-3.4.1.min.js"></script>
        <script src="vendor/bootstrap4/js/bootstrap.min.js"></script>
        
</body>
<?php include('alertconfig.php');?>

    
<?php 

if ( isset( $_POST['forgot'] )) {
$email = $_POST["username"];
$to = $email;
$subject = "Reset Password";
$txt = "http://localhost/security-web-app/forgotPassword.php?email=$email";
$result = mail($to,$subject,$txt,'From: johnllaneta05@gmail.com');
echo "<script>window.open('index.php', '_self')</script>";
}
    ?>
</html>

