<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'hmsdbs';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['password'], $_POST['email'], $_POST['fname'], $_POST['lname'], $_POST['mobile'])) {
	echo "<script>alert('Please complete the admin registration form!')</script>";
	echo "<script>window.open('superAdmin_AdminRegistration.php', '_self')</script>";
}

if (empty($_POST['password']) || empty($_POST['email']) || empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['mobile'])) {

	echo "<script>alert('Please complete the admin registration form!')</script>";
	echo "<script>window.open('superAdmin_AdminRegistration.php', '_self')</script>";
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	echo "<script>alert('Email is not valid!')</script>";
	echo "<script>window.open('superAdmin_AdminRegistration.php', '_self')</script>";
}

if (preg_match('/[A-Za-z0-9]+/', $_POST['email']) == 0) {
	echo "<script>alert('Email is not valid!')</script>";
	echo "<script>window.open('superAdmin_AdminRegistration.php', '_self')</script>";
}

try{
	$pattern = '/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/';

if ($stmt = $con->prepare('SELECT admin_id, password FROM admindb WHERE email = ?')) {
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {

		echo "<script>alert('Email exists, please choose another!')</script>";
		echo "<script>window.open('superAdmin_AdminRegistration.php', '_self')</script>";	
	} else {

		if(preg_match($pattern, $_POST['password'])){
			if ($stmt = $con->prepare('INSERT INTO admindb (first_name, last_name, contact_num, email, password) VALUES (?, ?, ?, ?, ?)')) {
				$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
				$stmt->bind_param("sssss", $_POST['fname'], $_POST['lname'], $_POST['mobile'], $_POST['email'], $password);
				$stmt->execute();
				echo "<script>alert('You have successfully registered as an administrator, you can now login!')</script>";
				echo "<script>window.open('superAdmin_AdminRegistration.php', '_self')</script>";			
			} else {
				echo "<script>alert('Could not prepare statement!')</script>";
				echo "<script>window.open('superAdmin_AdminRegistration.php', '_self')</script>";	
			}
		}else{
			echo "<script>alert('Password must be between 8 and 20 characters long!')</script>";
			echo "<script>window.open('superAdmin_AdminRegistration.php', '_self')</script>";	
		}
	}
	$stmt->close();
} else {
	echo "<script>alert('Could not prepare statement!')</script>";
	echo "<script>window.open('superAdmin_AdminRegistration.php', '_self')</script>";
}
$con->close();
}catch(Exception $e){
	echo 'ERROR: Addding New Administrator: ', $e->getMessage();
}

?>