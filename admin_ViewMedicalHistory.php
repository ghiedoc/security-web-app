<!DOCTYPE html>
<?php include("func.php");?>
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

    <title>Patient Medical History</title>
</head>

<body>

    <!-- NAVIGATION BAR -->
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
                            <a href="admin_ViewMedicalHistory.php"><i class="fas fa-notes-medical"></i> Patient History</a>
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
                            <a href="patientList.php"><i class="fas fa-notes-medical"></i> Patient History</a>
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
            <!-- END OF NAVIGATION -->

            <!-- CONTENT HERE -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>Manage Medical History
                            <a href="admin_AppointmentHistory.php" class="btn btn-sm btn-outline-primary float-right"><i
                                    class="fas fa-user-shield"></i> Appointments</a>
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">

                            <!-- PATIENT DETAILS TABLE -->
                            <table border="1" class="table table-bordered">
                                <tr align="center">
                                    <td colspan="4" style="font-size:20px;color:black">
                                        Patient Details</td>
                                </tr>

                                <tr>
                                    <th scope>First Name:</th>
                                    <td></td>
                                    <th scope>Last Name:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Patient Email:</th>
                                    <td></td>
                                    <th>Patient Gender:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Patient Address:</th>
                                    <td></td>
                                    <th>Registration Date:</th>
                                    <td></td>
                                </tr>
                            </table>
                            <br>
                            <br>

                            <!-- MEDICAL HISTORY TABLE-->
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <tr align="center">
                                    <th colspan="8">
                                        <h3></h3>Medical History
                                    </th>
                                </tr>
                                <tr>
                                    <th>#</th>
                                    <th>Height</th>
                                    <th>Weight</th>
                                    <th>Medical History</th>
                                    <th>Visit Date</th>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>

                            <!-- BUTTTON ADD MEDICAL HISTORY HERE... -->
                            <p align="center">
                                <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal"
                                    data-target="#myModal">Add Medical History</button>
                            </p>

                            <!-- MODAL ADD MEDICAL HISTORY HERE... -->
                            <div class='modal fade' id='myModal' tabindex='-1' role='dialog'
                                aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Add Medical History</h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;
                                                </span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <table class='table table-bordered table-hover data-tables'>

                                                <form method='' name='submit'>

                                                    <tr>
                                                        <th>Height :</th>
                                                        <td>
                                                            <input name='bp' placeholder='Height'
                                                                class='form-control wd-450' required='true'></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Weight :</th>
                                                        <td>
                                                            <input name='weight' placeholder='Weight'
                                                                class='form-control wd-450' required='true'></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Medical History :</th>
                                                        <td>
                                                            <textarea name='med_history' placeholder='Medical History'
                                                                rows='12' cols='14' class='form-control wd-450'
                                                                required='true'></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Visit Date :</th>
                                                        <td>
                                                            <input name='vdate' placeholder='Visit Date'
                                                                class='form-control wd-450' required='true'>
                                                        </td>
                                                    </tr>

                                            </table>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary'
                                                data-dismiss='modal'>Close</button>
                                            <button type='submit' name='submit' class='btn btn-primary'>Submit</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- MODAL EDIT PATIENT DETAILS HERE... -->
                            <div class='modal fade' id='myModalPatient' tabindex='-1' role='dialog'
                                aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Edit Patient Details</h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;
                                                </span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <table class='table table-bordered table-hover data-tables'>

                                                <form method='' name='submit'>

                                                    <tr>
                                                        <th>First Name :</th>
                                                        <td>
                                                            <input name='fn' placeholder='First Name'
                                                                class='form-control wd-450' required='true'></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Last Name :</th>
                                                        <td>
                                                            <input name='ln' placeholder='Last Name'
                                                                class='form-control wd-450' required='true'></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Patient Email :</th>
                                                        <td>
                                                            <input name='email' placeholder='Email'
                                                                class='form-control wd-450' required='true'></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Patient Address :</th>
                                                        <td>
                                                            <input name='address' placeholder='Patient Address'
                                                                class='form-control wd-450' required='true'></td>
                                                    </tr>
                                            </table>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary'
                                                data-dismiss='modal'>Close</button>
                                            <button type='edit' name='edit' class='btn btn-primary'>Edit</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
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

<script src="vendor/jquery3/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
<script src="vendor/fontawesome5/js/solid.min.js"></script>
<script src="vendor/fontawesome5/js/fontawesome.min.js"></script>
<script src="vendor/chartsjs/Chart.min.js"></script>
<script src="js/dashboard-charts.js"></script>
<script src="js/script.js"></script>

</html>