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
	$sql = "SELECT * FROM user WHERE (email='$email' OR username='$email')";

	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) === 0) {
		$_SESSION['login_error'] = true;
		header("Location: ../html/login.html?error=1");
		exit();
	} else {
		$row = mysqli_fetch_assoc($result);
		if ($row['psword'] === $pass) {
			if ($row['roles'] === 'President') {
				echo "Hello " . $row['roles'];
			} else if ($row['roles'] === 'Vice President') {
				echo "Hello " . $row['roles'];
			} else if ($row['roles'] === 'Secretary') {
				echo "Hello " . $row['roles'];
			} else if ($row['roles'] === 'Treasurer' || 'Auditor') {
				echo "Hello " . $row['roles'];
			}

			// $_SESSION['email'] = $row['email'];
			// $_SESSION['id'] = $row['id'];
			// header("Location: ../php/dashboard.php");
			exit();
		} else {
			$_SESSION['login_error'] = true;
			header("Location: ../html/login.html?error=2");
			exit();
		}


