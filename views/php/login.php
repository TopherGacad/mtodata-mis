<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: ../php/login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../php/login.php?error=Password is required");
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
		        exit();
            }else{
				header("Location: ../php/login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: ../php/login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: ../php/dashboard.php");
	exit();
}
