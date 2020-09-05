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
            $id = $row['fname'];
            $_SESSION['fname'] = $id;
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


//PATIENT ADD HISTORY
try{
if ( isset( $_POST['addsubmit'] ) ) {
    $addid = $_POST["addid"];
    $height = $_POST["bp"];
    $weight = $_POST["weight"];
    $mh = $_POST["vdate"];
    $vdate = $_POST["med_history"];
    
    
    
    $query = "INSERT INTO medicalhistorytb(patient_id, Height, Weight, Visit_Date, Medical_History)VALUE('$addid','$height','$weight','$mh','$vdate')";
    $result = mysqli_query( $con, $query );
    
    if ( $result ) {
        $_SESSION['status'] = "ADDED SUCCESSFULLY!";
        $_SESSION['status_code']= "success";
        echo "<script>window.open('patientList.php', '_self')</script>";
    } else {
        $_SESSION['status'] = "SOMETHING ERROR!";
        $_SESSION['status_code']= "error";
        echo "<script>window.open('patientList.php', '_self')</script>";
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
        $ids = $row['Appointment_Id'];
        $fname = $row['Fname'];
        $lname = $row['Lname'];
        $email = $row['Email'];
        $mobile = $row['Mobile'];
        $date = $row['Appointment_Date'];
        $time = $row['Appointment_Time'];
        $services = $row['Appointment_Service'];
        $patientfk = $row['patient_fk'];
        $status = $row['stats'];
        echo "<tr> 
            <td>$ids</td>
            <td>$fname</td>
            <td>$lname</td>
            <td>$email</td>
            <td>$mobile</td>
            <td>$date</td>
            <td>$time</td>
            <td>$services</td> 
            <td>$status</td>
            <td>
            <button type='button' class='approvebtn btn btn-success'>Approve</button>
            <button type='button' class='declinebtn btn btn-danger'>Decline</button>
            </td>
            </tr>";
    }
}

function getPatientAppointmentHistory() {
    global $con;
    $query = 'SELECT * FROM appointment';
    $result = mysqli_query( $con, $query );

    while( $row = mysqli_fetch_array( $result ) ) {
        $ids = $row['Appointment_Id'];
        $fname = $row['Fname'];
        $lname = $row['Lname'];
        $email = $row['Email'];
        $mobile = $row['Mobile'];
        $date = $row['Appointment_Date'];
        $time = $row['Appointment_Time'];
        $services = $row['Appointment_Service'];
        $patientfk = $row['patient_fk'];
        $status = $row['stats'];
        echo "<tr> 
            <td>$ids</td>
            <td>$fname</td>
            <td>$lname</td>
            <td>$email</td>
            <td>$mobile</td>
            <td>$date</td>
            <td>$time</td>
            <td>$services</td> 
            <td>$status</td> 
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
            
            <form action='admin_ViewMedicalHistory.php' method='post'>
            <input type='text' name='id' value='$id' style='display:none'>
            <input type='text' name='fname' value='$fname' style='display:none'>
            <input type='text' name='lname' value='$lname' style='display:none'>
             <input type='text' name='email' value='$gender' style='display:none'>
              <input type='text' name='gender' value='$email' style='display:none'>
               <input type='text' name='address' value='$address' style='display:none'>
            <button type='submit' class='viewbtn btn btn-success' name= 'view_btn'>View</button>
            
            <button type='button' class='editbtn btn btn-info' name= 'edit_btn'>Edit</button> 
            <button type='button' class='deletebtn btn btn-danger' name= 'delete_btn'>Delete</button>
         </form>
            
            </td>
            </tr>";
        

    }
}

function getPatientMedicalHistory($x) {
    global $con;
    $id = $x;

    $query = "SELECT * FROM medicalhistorytb WHERE patient_id = '$id'";
    $result = mysqli_query( $con, $query );

    while( $row = mysqli_fetch_array( $result ) ) {
        $id = $row['mh_id'];
        $height = $row['Height'];
        $weight = $row['Weight'];
        $mh = $row['Medical_History'];
        $visit = $row['Visit_Date'];
        
        echo "<tr>
            <td>$id</td>
            <td>$height</td>
            <td>$weight</td>
            <td>$mh</td>
            <td>$visit</td>
            
            </tr>
            ";
        

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



//DELETE FUNCTION IN POPULATING THE DATA IN THE DATABASE IN patienttb TO ADMIN PATIENT LIST

try{
if(isset($_POST['delete'])){
    $deleteId = $_POST['id'];
   
    $query= "DELETE FROM patienttb WHERE patient_id = '$deleteId'";
    $query_run =  mysqli_query( $con, $query );
    if ($query_run) {
        // echo "<script>alert('Payment Status Updated!')</script>";
        $_SESSION['status'] = "DELETE SUCCESSFULLY!";
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


// COUNT THE TOTAL APPOINTMENT
    $query_count = "SELECT (Appointment_Id) FROM appointment";
    $result = mysqli_query($con, $query_count);
    $values=mysqli_num_rows($result);
    // $total = $values;
    // echo $values;

// COUNT THE TOTAL PATIENT wala pang table para sa patient
//  $query_count = "SELECT (Appointment_Id) AS TOTAL FROM appointment";
//     $result = mysqli_query($con, $query_count);
//     $values=mysqli_num_rows($result);

try{
    if(isset($_POST['approve'])){
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
    
        $query= "UPDATE appointment SET Fname= '$fname', Lname='$lname',Email= '$email',Mobile='$mobile',stats='APPROVED' WHERE Appointment_Id = '$id' ";
        $query_run =  mysqli_query( $con, $query );
        if ($query_run) {
            // echo "<script>alert('Approved Status Updated!')</script>";
            $_SESSION['status'] = "Approved SUCCESSFULLY!";
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
try{
    if(isset($_POST['decline'])){
        $id = $_POST['Id'];
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $email = $_POST['Email'];
        $mobile = $_POST['Mobile'];
    
        $query= "UPDATE appointment SET Fname= '$fname', Lname='$lname',Email= '$email',Mobile='$mobile',stats='DECLINED' WHERE Appointment_Id = '$id' ";
        $query_run =  mysqli_query( $con, $query );
        if ($query_run) {
            // echo "<script>alert('Declined Status Updated!')</script>";
            $_SESSION['status'] = "Declined SUCCESSFULLY!";
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