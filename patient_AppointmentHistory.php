<!DOCTYPE html>
<?php include("func.php");
require_once 'includes/auth_check.php';?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link href="vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="chartsjs/Chart.min.css" rel="stylesheet">
    <link href="vendor/flagiconcss3/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <title>My Appointments</title>
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
                                    <span><?php echo( $_SESSION['fname']);?></span> <i style="font-size: .8em;"
                                        class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="index.php" class="dropdown-item"><i
                                                    class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>My Appointment's History
                            <a href="patient_AppointmentHistory.php"
                                class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-user-shield"></i>
                                Appointments</a>
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Service</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php getPatientAppointmentLogs(); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
</body>

<script src="vendor/jquery3/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
<script src="vendor/fontawesome5/js/solid.min.js"></script>
<script src="vendor/fontawesome5/js/fontawesome.min.js"></script>
<script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"></script>
<script src="js/script.js"></script>

<script>
$(document).ready(function(){$("#dataTables-example").DataTable()});
</script>

</html>