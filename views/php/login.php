<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data)
	{
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
				$_SESSION['email'] = $row['email'];
				$_SESSION['id'] = $row['id'];
				header("Location: ../php/dashboard.php");
				exit();
			} else if ($row['roles'] === 'Vice President') {
				$_SESSION['email'] = $row['email'];
				$_SESSION['id'] = $row['id'];
				header("Location: ../php/viceview.php");
				exit();
			} else if ($row['roles'] === 'secretary') {
				$_SESSION['email'] = $row['email'];
				$_SESSION['id'] = $row['id'];
				header("Location: ../php/secview.php");
				exit();
			} else if ($row['roles'] === 'Treasurer' || 'Auditor') {
				$_SESSION['email'] = $row['email'];
				$_SESSION['id'] = $row['id'];
				header("Location: ../php/tre-auditview.php");
				exit();
			}


		} else {
			$_SESSION['login_error'] = true;
			header("Location: ../html/login.html?error=2");
			exit();
		}
	}
} else {
	header("Location: ../html/login.html");
	exit();
}