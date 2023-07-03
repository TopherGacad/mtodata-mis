<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the updated user data from the form
    $user_id = $_GET['user_id']; // Assuming user_id is passed as a URL parameter
    $F_name = $_POST['firstname'];
    $L_name = $_POST['lastname'];
    $M_name = $_POST['middlename'];
    $ex_name = $_POST['extension'];
    $contact = $_POST['contact'];
    $roles = $_POST['userrole'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $psword = $_POST['barangay'];

    // connect to the MySQL database
    include "../php/db_conn.php";

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update the user data in the database
    $sql = "UPDATE user SET F_name = '$F_name', L_name = '$L_name', M_name = '$M_name', ex_name = '$ex_name', contact = '$contact', roles = '$roles', email = '$email', username = '$username', psword = '$psword' WHERE user_id = '$user_id'";

    if ($conn->query($sql) === TRUE) {
        // The user data has been successfully updated

        // Return a JSON response indicating success
        $response = array('success' => true);
        echo json_encode($response);
        exit();
    } else {
        // Handle the case when an error occurs during the update operation
        // Return a JSON response indicating the error
        $response = array('success' => false, 'message' => 'Error updating user data');
        echo json_encode($response);
        exit();
    }

    // close MySQL connection
    $conn->close();
} else {
    // If the form is not submitted, return a JSON response indicating an error
    $response = array('success' => false, 'message' => 'Invalid request');
    echo json_encode($response);
    exit();
}
?>