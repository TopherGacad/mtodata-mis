<?php
include "db_conn.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Start of Complaint Module

// Get Data from form submission
$complaintLastName = $_POST["complaintLastname"];
$complaintFirstName = $_POST["complaintFirstname"];
$complaintMiddleName = $_POST["complaintMiddlename"];
$complaintExtensionName = $_POST["extension"];
$complaintGender = $_POST["gender"];
$contactNumber = $_POST["contact"];

$personToComplain = $_POST["subject"];
$bodyNumber = $_POST["subject-bodyNum"];
$description = $_POST["desc"];
$timeOfIncident = $_POST["time-incident"];
$dateOfIncident = $_POST["date-incident"];

// Complainant Details
$sql = "INSERT INTO complaint_info (lname, fname, mname, exname, gender, phone) VALUES ('$complaintLastName', '$complaintFirstName', '$complaintMiddleName', '$complaintExtensionName', '$complaintGender', '$contactNumber')";
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

// Complainant Information
$sql = "INSERT INTO complaint_details (complaint_person, body_no, details, date_created) VALUES ('$personToComplain', '$bodyNumber', '$description', '$dateOfIncident')";
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>