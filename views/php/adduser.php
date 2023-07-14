<?php
include "db_conn.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get data from form submission
$roles = $_POST["userrole"];
$L_name = $_POST["lastname"];
$F_name = $_POST["firstname"];
$M_name = $_POST["middlename"];
$ex_name = $_POST["extension"];
$username = $_POST["user-uname"];
$email = $_POST["street"];
$contact = $_POST["contact"];
$psword = $_POST["password"];

// Check if role already exists in the database
$role_check_query = "SELECT * FROM user WHERE roles='$roles' LIMIT 1";
$result1 = mysqli_query($conn, $role_check_query);
$user1 = mysqli_fetch_assoc($result1);

if ($user1) { // If role already exists, return error response
    $response = array(
        'success' => false,
        'error' => 'user-role-already-exists',
        'role' => $roles
    );
    echo json_encode($response);
} else { // If role does not exist, insert data into the database
    // Check if email already exists in the database
    $email_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $email_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // If email already exists, return error response
        $response = array(
            'success' => false,
            'error' => 'email-already-exists'
        );
        echo json_encode($response);
    } else { // If email does not exist, insert data into the database
        $sql = "INSERT INTO user (roles, L_name, F_name, M_name, ex_name, username, email, contact, psword) VALUES ('$roles', '$L_name', '$F_name', '$M_name', '$ex_name', '$username', '$email', '$contact', '$psword')";
        if (mysqli_query($conn, $sql)) {
            $response = array(
                'success' => true
            );
            echo json_encode($response);
        } else {
            $response = array(
                'success' => false,
                'error' => 'database-error',
                'message' => mysqli_error($conn)
            );
            echo json_encode($response);
        }
    }
}

// Close database connection
mysqli_close($conn);
?>