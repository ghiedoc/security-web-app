<!DOCTYPE html>

<?php
include("func.php");
require_once 'includes/auth_check.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link href="vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/flagiconcss3/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css" />

    <title>My Medical History</title>
</head>

<body>


    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <span>Healthy Smile Clinic</span>
            </div>
            <ul class="list-unstyled components">

                <li>
                    <a href="patientDashboard.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>

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

                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-user-injured"></i>
                                    <span><?php echo( $_SESSION['fname']);?></span>

                                    <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
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

            <br>

            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>Manage Medical History

                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">

                            <table border="1" class="table table-bordered">
                                <tr align="center">
                                    <td colspan="4" style="font-size:20px;color:black">
                                        Patient Details</td>
                                </tr>

                                <tr>
                                    <th scope>First Name:</th>
                                    <td><?php echo $_SESSION["fname"];?></td>
                                    <th scope>Last Name:</th>
                                    <td><?php echo $_SESSION["lname"];?></td>
                                </tr>
                                <tr>
                                    <th>Patient Email:</th>
                                    <td><?php echo $_SESSION["email"];?></td>
                                    <th>Patient Gender:</th>
                                    <td><?php echo $_SESSION["gender"];?></td>

                                </tr>
                                <tr>
                                    <th>Patient Address:</th>
                                    <td><?php echo $_SESSION["adds"];?></td>
                                    <th>Registration Date:</th>
                                    <td><?php echo $_SESSION["regiDate"];?></td>
                                </tr>
                            </table>
                            <br>
                            <br>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <tr align="center">
                                    <th colspan="8">
                                        <h3></h3>Medical History
                                    </th>
                                </tr>
                                <tr>
                                    <th>#</th>
                                    <th>Blood Pressure</th>
                                    <th>Weight</th>
                                    <th>Temperature</th>
                                    <th>Medical History</th>
                                </tr>

                                <tbody>
                                    <?php getPatientMedicalHistory( $_SESSION['id']); ?>
                                </tbody>

                            </table>






</body>

<script src="vendor/jquery3/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
<script src="vendor/fontawesome5/js/solid.min.js"></script>
<script src="vendor/fontawesome5/js/fontawesome.min.js"></script>
<script src="js/script.js"></script>

</html>