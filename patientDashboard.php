<?php
session_start();
require_once 'includes/auth_check.php';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href='vendor/bootstrap4/css/bootstrap.min.css' rel='stylesheet'>
    <link href='vendor/flagiconcss3/css/flag-icon.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='css/master.css' />
    <title>Patient</title>
</head>

<body>
    <<<<<<< HEAD <!-- NAVIGATION BAR -->
        =======


        >>>>>>> e9c6665566b6b9e619e6430a625f474358b14155
        <div class='wrapper'>
            <nav id='sidebar' class='active'>
                <div class='sidebar-header'>
                    <span>Healthy Smile Clinic</span>
                </div>
                <ul class='list-unstyled components'>

                    <li>
                        <a href='patientDashboard.php'><i class='fas fa-home'></i> Dashboard</a>
                    </li>


                    <li>
                        <a href='#appointmenu' data-toggle='collapse' aria-expanded='false'
                            class='dropdown-toggle no-caret-down'><i class='fas fa-calendar-check'></i> Appointment</a>
                        <ul class='collapse list-unstyled' id='appointmenu'>
                            <li>
                                <a href='patient_BookAppointment.php'><i class='fas fa-notes-medical'></i> Book
                                    Appointment</a>
                            </li>
                            <li>
                                <a href='patient_AppointmentHistory.php'><i class='fas fa-eye'></i> Appointment
                                    History</a>
                            </li>
                            <li>
                                <a href='patient_MedicalHistory.php'><i class='fas fa-notes-medical'></i>Medical
                                    History</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                </li>
                </ul>
            </nav>

            <div id='body' class='active'>
                <nav class='navbar navbar-expand-lg navbar-primary bg-primary'>
                    <button type='button' id='sidebarCollapse' class='btn btn-outline-light default-light-menu'><i
                            class='fas fa-bars'></i><span></span></button>
                    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                        <ul class='nav navbar-nav ml-auto'>

                            <li class='nav-item dropdown'>
                                <div class='nav-dropdown'>
                                    <a href='' class='nav-item nav-link dropdown-toggle' data-toggle='dropdown'><i
                                            class='fas fa-user-injured'></i>
                                        <span>Hi. <?php echo( $_SESSION['fname']);
?></span> <i style='font-size: .8em;' class='fas fa-caret-down'></i></a>
                                    <div class='dropdown-menu dropdown-menu-right nav-link-menu'>
                                        <ul class='nav-list'>
                                            <li><a href='logout.php' class='dropdown-item'><i
                                                        class='fas fa-sign-out-alt'></i> Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class='content'>
                    <div class='container-fluid'>
                        <div class='row'>
                            <div class='col-sm-6 col-md-6 col-lg-3 mt-3'>
                                <div class='card'>
                                    <div class='content'>
                                        <div class='row'>
                                            <div class='col-sm-4'>
                                                <div class='icon-big text-center'>
                                                    <i class='teal fas fa-clipboard-list'></i>
                                                </div>
                                            </div>
                                            <div class='col-sm-8'>
                                                <div class='detail text-center'>
                                                    <p>Book an Appointment</p>
                                                    <span class='number'>Here</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='footer'>
                                            <hr />

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class='col-sm-6 col-md-6 col-lg-3 mt-3'>
                                <div class='card'>
                                    <div class='content'>
                                        <div class='row'>
                                            <div class='col-sm-4'>
                                                <div class='icon-big text-center'>
                                                    <i class='olive fas fa-calendar-check'></i>
                                                </div>
                                            </div>
                                            <div class='col-sm-8'>
                                                <div class='detail text-center'>
                                                    <p>My Appointment History</p>
                                                    <span class='number'>Here</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='footer'>
                                            <hr />
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


</body>

<script src='vendor/jquery3/jquery-3.4.1.min.js'></script>
<script src='vendor/bootstrap4/js/bootstrap.bundle.min.js'></script>
<script src='vendor/fontawesome5/js/solid.min.js'></script>
<script src='vendor/fontawesome5/js/fontawesome.min.js'></script>
<script src='js/script.js'></script>

</html>