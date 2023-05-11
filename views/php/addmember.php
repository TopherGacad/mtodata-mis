<?php
// Database connection parameters
include "db_conn.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get data from form submission
$mem_role = $_POST["role"];
$lname = $_POST["lastname"];
$fname = $_POST["firstname"];
$mname = $_POST["middlename"];
$exname = $_POST["extension"];
$gender = $_POST["gender"];
$street = $_POST["street"];
$barangay = $_POST["barangay"];
$city = $_POST["city"];
$phone = $_POST["contact"];
$license_no = $_POST["license"];
$profilepic = $_POST["profile"];

$mem_stat = 'Active';


// Prepare SQL query
$sql = "INSERT INTO mem_info (mem_role, lname, fname, mname, exname, gender, street, barangay, city, phone, license_no, profilepic, mem_stat) VALUES ('$mem_role', '$lname', '$fname', '$mname', '$exname', '$gender', '$street', '$barangay', '$city', '$phone', '$license_no', '$profilepic', '$mem_stat')";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>






