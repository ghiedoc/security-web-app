<!DOCTYPE html>
<?php include("func.php");?>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Patient History</title>

    <link href="vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="chartsjs/Chart.min.css" rel="stylesheet">
    <link href="vendor/flagiconcss3/css/flag-icon.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/sidebar-dafault.css">
    <link rel="stylesheet" href="css/master.css" />
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
                <li>
                    <a href=""><i class="fas fa-tools"></i> Services</a>
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
                                    <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
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
                        <h3>Patient History</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    Patients
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover" id="dataTables-example" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-right">Action
                                                <a href="" class="btn btn-outline-success btn-rounded"><i
                                                        class="fas fa-check"></i></a>
                                                <a href="" class="btn btn-outline-danger btn-rounded"><i
                                                        class="fas fa-times"></i></a>
                                            </td>
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
<script src="vendor/chartsjs/Chart.min.js"></script>
<script src="js/dashboard-charts.js"></script>
<script src="js/script.js"></script>

</html>