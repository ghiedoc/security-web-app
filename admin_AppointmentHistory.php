<!DOCTYPE html>
<?php include("func.php");
require_once 'includes/auth_adminCheck.php';?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link href="vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/flagiconcss3/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/master.css" />

    <title>Patient Appointments</title>
</head>

<body>


    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <span>Healthy Smile Clinic</span>
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
                                    <span>Welcome, Admin</span> <i style="font-size: .8em;"
                                        class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
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

            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>Patients Appointment History
                            <a href="admin_AppointmentHistory.php" class="btn btn-sm btn-outline-primary float-right"><i
                                    class="fas fa-user-shield"></i> Appointments</a>
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Mobile Nos.</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Service</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php getPatientAppointment(); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class='modal fade' id='modalApprove' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
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

                                    <tr style="display:none">
                                        <td>
                                            <input type="hidden" name="id" id="id">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>First Name :</th>
                                        <td>
                                            <input type="text" name="fname" id="fname" placeholder='First Name'
                                                class='form-control wd-450' required='true' class="field left" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Last Name :</th>
                                        <td>
                                            <input type="text" name="lname" id="lname" placeholder='Last Name'
                                                class='form-control wd-450' required='true' class="field left" readonly>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Appointment service :</th>
                                        <td>
                                            <input type="text" name="service" id="service" placeholder='service'
                                                class='form-control wd-450' required='true' class="field left" readonly>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>date :</th>
                                        <td>
                                            <input type="text" name="date" id="date" placeholder='service'
                                                class='form-control wd-450' required='true' class="field left" readonly>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>time :</th>
                                        <td>
                                            <input type="text" name="time" id="time" placeholder='service'
                                                class='form-control wd-450' required='true' class="field left" readonly>
                                        </td>
                                    </tr>




                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary'
                                            data-dismiss='modal'>Close</button>
                                        <button type="approve" name="approve" class='btn btn-primary'>approve</button>
                                    </div>
                                </form>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <div class='modal fade' id='modalDecline' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
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
                                            <input type="hidden" name="Id" id="Id">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>First Name :</th>
                                        <td>
                                            <input type="text" name="Fname" id="Fname" placeholder='First Name'
                                                class='form-control wd-450' required='true' class="field left" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Last Name :</th>
                                        <td>
                                            <input type="text" name="Lname" id="Lname" placeholder='Last Name'
                                                class='form-control wd-450' required='true' class="field left" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Patient Email :</th>
                                        <td>
                                            <input type="text" name="Email" id="Email" placeholder='Email'
                                                class='form-control wd-450' required='true' class="field left" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Patient Mobile No. :</th>
                                        <td>
                                            <input type="text" name="Mobile" id="Mobile" placeholder='Patient Address'
                                                class='form-control wd-450' required='true' class="field left" readonly>
                                        </td>
                                    </tr>

                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary'
                                            data-dismiss='modal'>Close</button>
                                        <button type="decline" name="decline" class='btn btn-primary'>Decline</button>
                                    </div>
                                </form>
                            </table>

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
<script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"></script>
<script src="js/script.js"></script>

<script>
$(document).ready(function() {
    $(".approvebtn").on("click", function() {
        $("#modalApprove").modal("show"), Str = $(this).closest("tr");
        var t = Str.children("td").map(function() {
            return $(this).text()
        }).get();
        $("#id").val(t[0]), $("#fname").val(t[1]), $("#lname").val(t[2]), $("#service").val(t[6]), $(
            "#date").val(t[4]), $("#time").val(t[5])
    })
});
</script>

<script>
$(document).ready(function() {
    $(".declinebtn").on("click", function() {
        $("#modalDecline").modal("show"), Str = $(this).closest("tr");
        var a = Str.children("td").map(function() {
            return $(this).text()
        }).get();
        $("#Id").val(a[0]), $("#Fname").val(a[1]), $("#Lname").val(a[2]), $("#Email").val(a[3]), $(
            "#Mobile").val(a[4])
    })
}), $(document).ready(function() {
    $("#dataTables-example").DataTable()
});
</script>

</html>