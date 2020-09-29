<!DOCTYPE html>
<?php 
session_start();
include("func.php");
?>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard | Admin</title>

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


            <!-- MODAL EDIT PATIENT DETAILS HERE... -->
            <div class='modal fade' id='myModalPatient' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
                aria-hidden='true'>
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
                                <form action='func.php' method='POST'>
                                    <tr>
                                        <td>
                                            <input type="hidden" name="id" id="id" >
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>First Name :</th>
                                        <td>
                                            <input type="text" name="fname" id="fname" placeholder='First Name'
                                                class='form-control wd-450' required='true'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Last Name :</th>
                                        <td>
                                            <input type="text" name="lname" id="lname" placeholder='Last Name'
                                                class='form-control wd-450' required='true'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Patient Email :</th>
                                        <td>
                                            <input type="text" name="email" id="email" placeholder='Email'
                                                class='form-control wd-450' required='true'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Patient Address :</th>
                                        <td>
                                            <input type="text" name="address" id="address" placeholder='Patient Address'
                                                class='form-control wd-450' required='true'>
                                        </td>
                                    </tr>
                            </table>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                            <button type="edit" name="edit" class='btn btn-primary'>Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            
             <!-- MODAL DELETE PATIENT DETAILS HERE... -->
            <div class='modal fade' id='myModalDeletePatient' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
                aria-hidden='true'>
                <div class='modal-dialog' role='document'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title' id='exampleModalLabel'>You want to delete?</h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;
                                </span>
                            </button>
                        </div>
                        <div class='modal-body' style='display:none'>
                            <table  class='table table-bordered table-hover data-tables'>

                                <form action='func.php' method='POST'>

                                    <tr>
                                        <td>
                                            <input type="hidden" name="id" id="deleteId">
                                        </td>
                                    </tr>            
                            </table>
                        </div>
                        <div class='modal-footer'>
                            <button type="delete" name="delete" class='btn btn-primary'>Yes</button>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>No</button>
                            
                            </div>
                            </form>
                    </div>
                </div>
            </div>

            <!-- table -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>Patient List</h3>
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
                                                <th>Gender</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php getPatientDetails(); ?>
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
<?php include('alertconfig.php');?>



<!-- Show modal edit -->
<script>
$(document).ready(function() {
    $('.editbtn').on('click', function() {
        $('#myModalPatient').modal('show');


        Str = $(this).closest('tr');

        var data = Str.children("td").map(function() {
            return $(this).text();
        }).get();
        // console.log(data);
        $('#id').val(data[0]);
        $('#fname').val(data[1]);
        $('#lname').val(data[2]) ;
        $('#gender').val(data[3]);
        $('#email').val(data[4]);
        $('#address').val(data[5]);
    });
});
</script>
    
<!-- Show modal delete -->
<script>
$(document).ready(function() {
    $('.deletebtn').on('click', function() {
        $('#myModalDeletePatient').modal('show');

        Str = $(this).closest('tr');

        var data = Str.children("td").map(function() {
                return $(this).text();
            }
        ).get();
        console.log(data);

       $('#deleteId').val(data[0]);
       
    });
});
</script>

</html>