
<?php session_start(); 
require_once 'includes/auth_check.php';?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-- <link rel="stylesheet" href="css/patient.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link href="vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="chartsjs/Chart.min.css" rel="stylesheet">
    <link href="vendor/flagiconcss3/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />


    <title>Book an Appointment</title>
</head>

<body>

    <!-- NAVIGATION BAR -->
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components">
                <!-- DASHBOARD  -->
                <li>
                    <a href="patientDashboard.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <!-- APPOINTMENTS -->
                <li>
                    <a href="#appointmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle no-caret-down"><i class="fas fa-calendar-check"></i> Appointment</a>
                    <ul class="collapse list-unstyled" id="appointmenu">
                        <li>
                            <a href="patient_BookAppointment.php"><i class="fas fa-notes-medical"></i> Book
                                Appointment</a>
                        </li>
                        <li>
                            <a href="patient_AppointmentHistory.php"><i class="fas fa-eye"></i> Appointment History</a>
                        </li>
                        <li>
                            <a href="patient_MedicalHistory.php"><i class="fas fa-notes-medical"></i>Medical
                                History</a>
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
                        <!-- NAME TOGGLE SIDEBAR -->
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-user-injured"></i>
                                    <span><?php echo( $_SESSION['fname']);?></span><span style="visibility: hidden;"><?php echo( $_SESSION['id']);?></span> <i style="font-size: .8em;"
                                        class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="logout.php" class="dropdown-item"><i
                                                    class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- CONTENT -->
            <br>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body" style="background-color:#ed765e;#ffffff;">
                        <h3 style="color:white; font-weight: bold;" align="center">Book an Appointment Here</h3>
                    </div>
                    <div class="card-body">
                        <form action="func.php" class="form-group" method="post">
                            <!-- Patient details form -->
                            <h3 align="center">Patient Details</h3>
                            <label for="">First Name: </label>
                            <input type="text" id="fname" class="form-control" value =  <?php echo( $_SESSION['fname'] );?> disabled><br>
                            <label for="">Last Name: </label>
                            <input type="text" id="lname" class="form-control" value =  <?php echo( $_SESSION['lname'] );?> disabled><br>
                            <label for="">Cellphone Number: </label>
                            <input type="tel" name="mobile" class="form-control" pattern="[0-9]{11}" required autocomplete="on" placeholder="Enter your 11 digit number">
                            <!-- Appointment Details form -->
                            <hr>
                            <h3 align="center">Appointment Details</h3>
                            <label for="">Date: </label>
                            <div id="datepicker" class="input-group input-daterange">
                                <input type="text" name="date" class="form-control" required autocomplete="off" placeholder="Click to choose date"><br>
                            </div>
                            <label for="">Time: </label>
                            <select name="time" class="form-control" id="">
                                <option value="9am to 10am">9am to 10am</option>
                                <option value="10am to 11am">10am to 11am</option>
                                <option value="2pm to 3pm">2pm to 3pm</option>
                                <option value="3pm to 4pm">3pm to 4pm</option>
                                <option value="4pm to 5pm">4pm to 5pm</option>
                            </select>
                            <br>
                            <label for="">Services: </label>
                            <select name="services" class="form-control" id="">
                                <option value="Check Up - General">Check Up - General</option>
                                <option value="Check Up - I'm in pain">Check Up - I'm in pain</option>
                                <option value="Check Up - For Braces">Check Up - For Braces</option>
                                <option value="Check Up - For Child">Check Up - For Child</option>
                                <option value="Dental Cleaning">Dental Cleaning</option>
                                <option value="Teeth Whitening">Teeth Whitening</option>
                                <option value="Tooth Filling">Tooth Filling</option>
                            </select>
                            <br>
                            <label for="">Appointment Status: </label>
                            <input type="text" name="pend" class="form-control"  required autocomplete="on" value="PENDING" class="field left" readonly><br>
                            <hr>
                            <h3 align="center">Payment Details</h3>
                            <label for="">Payment Status: </label>
                            <input type="text" name="payment" class="form-control"  required autocomplete="on" value="PAY LATER" class="field left" readonly><br>
                            <input type="submit" name="pat_submit" value="Submit Appointment"
                                class="btn btn-success shadow-2 mb-4 float-right btn-block" required autocomplete="off">
                        </form>
                    </div>
                </div>
            </div>

</body>

<script type="text/javascript">
$(function() {
    $('#datetimepicker1').datetimepicker();
});
</script>

<script src="vendor/jquery3/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
<script src="vendor/fontawesome5/js/solid.min.js"></script>
<script src="vendor/fontawesome5/js/fontawesome.min.js"></script>
<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
    integrity="sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=" crossorigin="anonymous"></script>

<!-- DATE PICKER -->
<script>
$(function() {
    $("#datepicker").datepicker({
        startDate: new Date()
    }).datepicker('update', new Date());
});
</script>

</html>