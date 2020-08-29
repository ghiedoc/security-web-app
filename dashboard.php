<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Dashboard |Admin</title>

  <link href="vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
  <link href="chartsjs/Chart.min.css" rel="stylesheet">
  <link href="vendor/flagiconcss3/css/flag-icon.min.css" rel="stylesheet">
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
          <a href="#patientmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i
              class="fas fa-user-injured"></i> Patient</a>
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
          <a href="#appointmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i
              class="fas fa-calendar-check"></i> Appointment</a>
          <ul class="collapse list-unstyled" id="appointmenu">
            <li>
              <a href="admin_AppointmentHistory.php"><i class="fas fa-eye"></i> View Appointment</a>
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
          <a href=""><i class="fas fa-tools"></i> Services</a>
        </li>
        <li>
          <a href="#authmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i
              class="fas fa-cog"></i> Settings</a>
          <ul class="collapse list-unstyled" id="authmenu">
            <li>
              <a href="login.php"><i class="fas fa-lock"></i> Login</a>
            </li>
            <li>
              <a href="signup.php"><i class="fas fa-user-plus"></i> Signup</a>
            </li>
            <li>
              <a href="forgot-password.php"><i class="fas fa-user-lock"></i> Forgot password</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="users.php"><i class="fas fa-user-friends"></i>Users</a>
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
                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-link"></i>
                  <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                  <ul class="nav-list">
                    <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <div class="nav-dropdown">
                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i>
                  <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                  <ul class="nav-list">
                    <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                    <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                    <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a href="index.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
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

            <!-- TOTAL PATIENT NUMBER CARD -->
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
              <div class="card">
                  <div class="content">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="icon-big text-center">
                          <i class="violet fas fa-user-injured"></i>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="detail text-center">
                          <p>Total Patients</p>
                          <span class="number">55</span>
                        </div>
                      </div>
                    </div>
                    <div class="footer">
                      <hr />
                    </div>
                  </div>
                </div>
            </div>

            <!-- NUMBER OF APPOINTMENTS CARD -->
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
              <div class="card">
                  <div class="content">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="icon-big text-center">
                          <i class="orange fas fa-book-medical"></i>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="detail text-center">
                          <p>No. of Appointments</p>
                          <span class="number">9</span>
                        </div>
                      </div>
                    </div>
                    <div class="footer">
                      <hr />
                    </div>
                  </div>
                </div>
            </div>

            <!-- EMPTY CARD -->
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
            </div>

            <!-- EMPTY CARD -->
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
            </div>

          </div>

          <!-- Charts -->
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="content">
                  <div class="head">
                    <h4 class="mb-0">Traffic Overview</h4>
                    <p class="text-muted">Your year long website traffic data</p>
                  </div>
                  <div class="canvas-wrapper">
                    <canvas class="chart" id="trafficflow"></canvas>
                  </div>
                  <div class="ui hidden divider"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="content">
                  <div class="head">
                    <h4 class="mb-0">Sales Overview</h4>
                    <p class="text-muted">Your year long sales data</p>
                  </div>
                  <div class="canvas-wrapper">
                    <canvas class="chart" id="sales"></canvas>
                  </div>
                  <div class="ui hidden divider"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Charts -->
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