<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Register Administrator</title>

  <link href="vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/flagiconcss3/css/flag-icon.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/superAdmin.css">
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
          <a href="#patientmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i
              class="fas fa-user-injured"></i> Patient</a>
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
          <a href="#appointmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i
              class="fas fa-calendar-check"></i> Appointment</a>
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
          <a href="#settingmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i
              class="fas fa-cog"></i> Setting</a>
          <ul class="collapse list-unstyled" id="settingmenu">
            <li>
              <a href="superAdmin_AdminRegistration.php"><i class="fas fa-lock"></i>Register Administrator</a>
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
                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i>
                  <span>Welcome,ADMIN</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                  <ul class="nav-list">
                    <li><a href="logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-4">
              <div class="register">
                <h1>Register Administrator</h1>
                <form action="register_admin.php" method="post" autocomplete="off">
                  <input type="text" name="fname" placeholder="First Name" id="fname" required>
                  <input type="text" name="lname" placeholder="Last Name" id="lname" required>
                  <input type="tel" pattern="[0-9]{11}" name="contact" placeholder="Contact Number" id="contact" required>   
                  <input type="email" name="email" placeholder="Email" id="email" required>
                  <input type="password" name="password" placeholder="Password" id="password" required>
                  <input type="submit" value="Register">
                </form>
              </div>
            </div>

            <div class="col-sm-8">
              <!-- DATA TABLE -->
              <table id="admintable" class="table table-striped table-bordered" style="width: 70%; margin: 20px auto;">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact Number</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger</td>
                        <td>Nixon</td>
                        <td>123456789</td>
                        <td>username</td>
                        <td>@email.com</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Garrett</td>
                        <td>Winters</td>
                        <td>123456789</td>
                        <td>username</td>
                        <td>@email.com</td>
                        <td></td>
                    </tr>
                </tbody> 
            </table>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</body>

<!-- SCRIPT FOR DATA TABLES BOOTSTRAP -->
<!-- not working pa -->
<script>
  $(document).ready(function() {
    $('#admintable').DataTable();
  } );
</script>

<!-- OTHER SCRIPTS NEEDED -->
<script src="vendor/jquery3/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
<script src="vendor/fontawesome5/js/solid.min.js"></script>
<script src="vendor/fontawesome5/js/fontawesome.min.js"></script>
<script src="js/script.js"></script>





</html>