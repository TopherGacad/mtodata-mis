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
$email = $_POST["street"];
$contact = $_POST["contact"];
$psword = $_POST["password"];

// Check if email already exists in the database
$email_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
$result = mysqli_query($conn, $email_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { // If email already exists, display error message
    echo "Error: Email already exists in the database.";
} else { // If email does not exist, insert data into the database
    $sql = "INSERT INTO user (roles, L_name, F_name, M_name, ex_name, email, contact, psword) VALUES ('$roles', '$L_name', '$F_name', '$M_name', '$ex_name', '$email', '$contact', '$psword')";
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
