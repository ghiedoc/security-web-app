<!DOCTYPE html>
<?php include("func.php");
require_once 'includes/auth_adminCheck.php';?>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Payment Status</title>

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-- <link rel="stylesheet" href="css/patient.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/flagiconcss3/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#patientmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle no-caret-down"><i class="fas fa-user-injured"></i> Patient</a>
                    <ul class="collapse list-unstyled" id="patientmenu">
                        <li>
                            <a href="patientList.php"><i class="fas fa-list-ul"></i> Patient List</a>
                        </li>
                        <li>
                            <a href="admin_Payment.php"><i class="fas fa-receipt"></i>Payments</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#appointmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle no-caret-down"><i class="fas fa-calendar-check"></i> Appointment</a>
                    <ul class="collapse list-unstyled" id="appointmenu">
                        <li>
                            <a href="admin_AppointmentHistory.php"><i class="fas fa-eye"></i> View Appointment</a>
                        </li>
                        <li>
                            <a href="admin_Payment.php"><i class="fas fa-receipt"></i>Payments</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-light default-light-menu"><i
                        class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-user"></i>
                                    <span>Welcome, Admin</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="logout.php" class="dropdown-item"><i
                                                    class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            
            
            
            <!-- CONTENT HERE -->
            <div class="content">
                <!-- Update Payment Status -->
                <div class="col-md-5">
                    <div class="card-body">
                    <h3>Update Payment Status Here</h3>
                    <hr>
                        <form action="func.php" method="post" class="form-group">
                            <input type="text" name="id" id="id" class="form-control" required autocomplete="off" readonly style='display:none' >
                            <input type="text" name="contact" id="contact" class="form-control" placeholder="Select patient in the table" required autocomplete="off" readonly >
                            <small id="contactHelp" class="form-text text-muted">Patient Name.</small><br>
                            <select name="status" id="" class="form-control">
                                <option value="PAID">Paid</option>
                            </select> <br>
                            <input type="submit" value="Update" id="update" name="update_data" class="btn btn-success btn-block float-right" style="display:none">
                        </form>
                        <br>
                    </div>
                </div>

                <!-- View Payment's Table -->
                <div class="col-md">
                    <div class="card-body">
                    <h3>List of Payment's</h3>
                    <hr>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Appointment ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Appointment Date</th>
                                        <th>Appointment time</th>
                                        <th>Service</th>
                                        <th>Payment Date</th>
                                        <th>Payment Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php getPaymentHistory(); ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

<script src="vendor/jquery3/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
<script src="vendor/fontawesome5/js/solid.min.js"></script>
<script src="vendor/fontawesome5/js/fontawesome.min.js"></script>
<script src="js/script.js"></script>

    
    <?php 
    //POPULATE PAYMENT HISTORY
function getPaymentHistory() {
    global $con;
    $query = 'SELECT * FROM paymenttable';
    $result = mysqli_query( $con, $query );

    while( $row = mysqli_fetch_array( $result ) ) {
        $id = $row['Payment_Id'];
        $fname = $row['Fname'];
        $lname = $row['Lname'];
        $date = $row['Date'];
        $time = $row['Time'];
        $service = $row['Appointment_Service'];
        $pay_date = $row['Payment_Date'];
        $payment = $row['Payment_Status'];
        
        if($payment !== 'PAID'){
            $payment = "<form action='#' method='post'> 
                <input type='text' name='id' value='$id' style='display:none'>
                <input type='text' name='fname' value='$fname $lname' style='display:none'>
                <button type='submit' class='viewbtn btn btn-success' name= 'pay_btn'>PAY NOW</button>
            </form>" ;
        }
        
        echo "<tr> 
        <td>$id</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$date</td>
        <td>$time</td>
        <td>$service</td> 
        <td>$pay_date</td>
        <td>$payment</td>
        </tr>";
    }
}


//PAYNOW BUTTON
if ( isset( $_POST['pay_btn'] ) ) {
        $name = $_POST['fname'];
        $id = $_POST['id'];
    echo "<script>
   $( '#contact' ).val('$name');
   $( '#id' ).val('$id');
   $( '#update' ).css('display', 'block');
</script>";  
    
    
       
}
    ?>
</html>