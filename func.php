<?php include('alertconfig.php');?>
<?php


// connection sa database sa mysql

$con = mysqli_connect( 'localhost', 'root', '', 'hmsdbs' );

//FOR LOGGING IN OF PATIENT
// if ( isset( $_POST['login_submit'] ) ) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $query = "SELECT * FROM patienttb WHERE email='$username' and password='$password'";

//     $result = mysqli_query( $con, $query );
//     if ( mysqli_num_rows( $result ) == 1 ) {
//         header( 'Location:patientDashboard.php' );
//     } else {
//         // MAY ERROR SOMETHING DITO KAPAG MALI YUNG CREDENTIALS NA NILAGAY
//         echo "<script>alert('Error Logging in Patient!')</script>";
//         echo "<script>window.open('index.php', '_self')</script>";
//     }
// }

//FOR LOGGING IN MULTI-USER
session_start();
if ( isset( $_POST['login_submit'] ) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM admindb WHERE username='$username' and password='$password'";
    $result = mysqli_query( $con, $query );

    $email = $_POST['username'];
    $querys = "SELECT * FROM patienttb WHERE email='$email' and password='$password'";
    $results = mysqli_query( $con, $querys );

    if ( $username == 'admin@email.com' ) {
        if ( mysqli_num_rows( $result ) == 1 ) {

            header( 'Location:dashboard.php' );
        }
    } elseif ( $username != 'admin@email.com' and mysqli_num_rows( $results ) == 1 ) {
        if ( $row = mysqli_fetch_array( $results ) ) {

            $id = $row['patient_id'];
            $_SESSION['id'] = $id;
        }
        echo $id;
        header( 'Location:patientDashboard.php' );

    } else {
        // MAY ERROR SOMETHING DITO KAPAG MALI YUNG CREDENTIALS NA NILAGAY
        echo "<script>alert('Error Logging in Admin!')</script>";
        echo "<script>window.open('index.php', '_self')</script>";
    }
}

// ADDING APPOINTMENT
if ( isset( $_POST['pat_submit'] ) ) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $services = $_POST['services'];
    $id = $_SESSION['id'];

    $query = "INSERT INTO appointment(Fname, Lname, Email, Mobile, Appointment_Date, Appointment_Time, Appointment_Service,patient_fk)
     VALUE('$fname','$lname','$email','$mobile','$date','$time','$services','$id')";
    $result = mysqli_query( $con, $query );

    if ( $result ) {
        echo "<script>alert('Appointment Added!')</script>";
        echo "<script>window.open('patient_BookAppointment.php', '_self')</script>";
    } else {
        echo $id;
        echo "<script>alert('Error Adding Appointment!')</script>";
        echo "<script>window.open('patient_BookAppointment.php', '_self')</script>";
    }
}

//PATIENT REGISTRATION
try{
if ( isset( $_POST['pat_register'] ) ) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $adds = $_POST['address'];
    $password = $_POST['password'];
    $query = "INSERT INTO patienttb(fname, lname,gender,email,adds, password) VALUE('$fname','$lname','$gender','$email','$adds','$password')";
    $result = mysqli_query( $con, $query );
    if ( $result ) {
        $_SESSION['status'] = "ADDED SUCCESSFULLY!";
        $_SESSION['status_code']= "success";
        echo "<script>window.open('index.php', '_self')</script>";
    } else {
        $_SESSION['status'] = "SOMETHING ERROR!";
        $_SESSION['status_code']= "error";
        echo "<script>window.open('signup.php', '_self')</script>";
    }
}
}catch(Exception $e){
    echo $e->getMessage();
}


//POPULATE THE DATA FROM DATABASE IN appointment TO TABLE IN APPOINTMENT HISTORY

function getPatientAppointment() {
    global $con;
    $query = 'SELECT * FROM appointment';
    $result = mysqli_query( $con, $query );

    while( $row = mysqli_fetch_array( $result ) ) {
        $fname = $row['Fname'];
        $lname = $row['Lname'];
        $email = $row['Email'];
        $mobile = $row['Mobile'];
        $date = $row['Appointment_Date'];
        $time = $row['Appointment_Time'];
        $services = $row['Appointment_Service'];
        $patientfk = $row['patient_fk'];
        echo "<tr> <td>$fname</td>
            <td>$lname</td>
            <td>$email</td>
            <td>$mobile</td>
            <td>$date</td>
            <td>$time</td>
            <td>$services</td> 
            <td><button>Approve</button> &nbsp; <button>Decline</button></td>
            </tr>";
    }
}

function getPatientAppointmentHistory() {
    global $con;
    $query = 'SELECT * FROM appointment';
    $result = mysqli_query( $con, $query );

    while( $row = mysqli_fetch_array( $result ) ) {
        $fname = $row['Fname'];
        $lname = $row['Lname'];
        $email = $row['Email'];
        $mobile = $row['Mobile'];
        $date = $row['Appointment_Date'];
        $time = $row['Appointment_Time'];
        $services = $row['Appointment_Service'];
        $patientfk = $row['patient_fk'];
        echo "<tr> <td>$fname</td>
            <td>$lname</td>
            <td>$email</td>
            <td>$mobile</td>
            <td>$date</td>
            <td>$time</td>
            <td>$services</td> 
            </tr>";
    }
}

//POPULATE THE DATA FROM DATABASE IN patienttb TO TABLE IN ADMIN PATIENT LIST

function getPatientDetails() {
    global $con;

    $query = 'SELECT * FROM patienttb';
    $result = mysqli_query( $con, $query );

    while( $row = mysqli_fetch_array( $result ) ) {
        $id = $row['patient_id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $gender = $row['gender'];
        $email = $row['email'];
        $address = $row['adds'];
        echo "<tr>
            <td>$id</td>
            <td>$fname</td>
            <td>$lname</td>
            <td>$gender</td>
            <td>$email</td>
            <td>$address</td>
            <td>
            <button type='button' class='editbtn' name= 'edit_btn'>Edit</button> &nbsp; <button>Delete</button>
            </td>
            </tr>";
    }
}

// UPDATE PAYMENT OF PATIENT
if ( isset( $_POST['update_data'] ) ) {
    $contact = $_POST['contact'];
    $status = $_POST['status'];
    $query = "UPDATE appointment SET Payment='$status' WHERE Mobile='$contact'";
    $result =  mysqli_query( $con, $query );

    if ( $result ) {
        echo "<script>alert('Payment Status Updated!')</script>";
        echo "<script>window.open('admin_Payment.php', '_self')</script>";
    } else {
        header( 'Location:updated.php' );
    }

}

//UPDATE THE PATIENT LIST TABLE
try{
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $add = $_POST['address'];

    $query= "UPDATE patienttb SET fname= '$fname', lname='$lname',gender='$gender',email= '$email',adds='$add' WHERE patient_id = '$id' ";
    $query_run =  mysqli_query( $con, $query );
    if ($query_run) {
        // echo "<script>alert('Payment Status Updated!')</script>";
        $_SESSION['status'] = "UPDATED SUCCESSFULLY!";
        $_SESSION['status_code']= "success";
        header("location:patientList.php");
    } else {
        $_SESSION['status'] = "SOMETHING ERROR!";
        $_SESSION['status_code']= "error";
        header( 'Location:updated.php' );
    }
}
}catch(Exception $e){
    echo $e->getMessage();
}
?>