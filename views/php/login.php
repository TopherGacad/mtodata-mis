<?php
session_start();
include "db_conn.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: ../html/login.html?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../html/login.html?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE email='$email' AND psword='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['psword'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../php/dashboard.php");
            }else{
				echo '<script type="text/javascript">toastr.success("Have Fun")</script>';

			}
		}else{
			echo '<script type="text/javascript">toastr.success("Have Fun")</script>';
		}
	}
	
}else{
	echo '<script type="text/javascript">toastr.success("Have Fun")</script>';
	
}