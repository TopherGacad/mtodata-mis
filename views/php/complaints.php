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

$personToComplain = $_POST["ComplaintSubject"];
$bodyNumber = $_POST["complaintSubjectBody"];
$description = $_POST["complaintDescription"];
$dateCreated = $_POST["date-incident"] . " " . $_POST["time-incident"];

// Complainant Details
$sql = "INSERT INTO complaint_info (lname, fname, mname, exname, gender, phone) VALUES ('$complaintLastName', '$complaintFirstName', '$complaintMiddleName', '$complaintExtensionName', '$complaintGender', '$contactNumber')";
if (mysqli_query($conn, $sql)) {
    $complaintId = mysqli_insert_id($conn);
    echo "Complaint information inserted successfully with ID: $complaintId<br>";
} else {
    echo "Error inserting complaint information: " . mysqli_error($conn) . "<br>";
}

// Complainant Information
$sql = "INSERT INTO complaint_details (complaint_person, body_no, details, date_created) VALUES ('$personToComplain', '$bodyNumber', '$description', '$dateCreated')";
if (mysqli_query($conn, $sql)) {
    $complaintId = mysqli_insert_id($conn);
    echo "Complaint details inserted successfully with ID: $complaintId<br>";
} else {
    echo "Error inserting complaint information: " . mysqli_error($conn) . "<br>";
}

// Close database connection
mysqli_close($conn);
?>