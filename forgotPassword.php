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


                         <form action="forgotPassword.php?email=<?php echo $_GET['email'];?>" method="post"> 
                                <div class="form-group">
                               <p id="invalid" style="display:none">
                                     
                                </p>
                            </div>
                             
                                <p class="statusMsg"></p>
                                <div class="form-group">
                                    <input type="email" name="username" id="username" class="form-control" value="<?php echo $_GET['email'];?>"
                                      required autocomplete="off" readonly  />
                                </div>
                                <div class="form-group">
                                   <input type="password" name="oldpassword" id="oldpassword" class="form-control" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain atleast one number and one uppercase and lowercase letter, and atleast 8 or more characters"
                                        required autocomplete="off"
                                         />
                                        <span toggle="#input-pwd" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                        
                        
                                <div class="form-group">
                                    <input type="password" name="newpassword" id="newpassword" class="form-control" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain atleast one number and one uppercase and lowercase letter, and atleast 8 or more characters"
                                        required autocomplete="off"
                                         />
                                        <span toggle="#input-pwd" class="fa fa-fw fa-eye field-icon toggle-password"></span>
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
    //FORGOT PASSWORD FUNCTION
if ( isset( $_POST['forgot'] )) {
    
        $email = $_POST["username"];
        $oldpassword = $_POST["oldpassword"];
        $newpassword = $_POST["newpassword"];
    
        if($oldpassword === $newpassword){
            $hash_Pass = password_hash($newpassword, PASSWORD_DEFAULT);
            
            $querys = "UPDATE `patienttb` SET `password` = '$hash_Pass' WHERE `patienttb`.`email` = '$email'";
            $results = mysqli_query( $con, $querys );
          
          if ( $result ) {
            $_SESSION['status'] = 'Changed Password Success!';
            $_SESSION['status_code'] = 'success';
            echo "<script>window.open('index.php', '_self')</script>";
        }else {
            $_SESSION['status'] = 'Something went wrong!';
            $_SESSION['status_code'] = 'error';
            echo "<script>window.open('index.php', '_self')</script>";
        }
            
    
        }else{
            echo "<script>
        $( '#invalid' ).css('display', 'block');
    </script>";
            echo "<script>
        $( '#invalid' ).text('Password Not Match');
    </script>";   
        }
}
    ?>
    
</html>