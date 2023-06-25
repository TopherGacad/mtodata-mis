<?php
// connect to the MySQL database
include "db_conn.php";

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Update Database
// Edit Complaint Module

// Get Data from form submission
$id = $_POST["id"];

// Left Panel
$EditComplainantFirstname = $_POST["EditCompFirst"];
$EditComplainantMiddlename = $_POST["EditCompMid"];
$EditComplainantLastname = $_POST["EditCompLast"];
$EditComplainantExtension = $_POST["EditCompExtension"];
$EditComplainantGender = $_POST["EditCompGender"];
$EditComplainantContact = $_POST["EditCompContact"];

// Right Panel
$EditSubject = $_POST["EditCompSub"];
$EditBodyNumber = $_POST["EditCompSubBody"];
$EditDateCreated = $_POST["edit-date-incident"] . " " . $_POST["edit-time-incident"];
$EditComplaintDescrtiption = $_POST["editComplaintDescription"];
// Update Complainant Details
$sql = "UPDATE complaint_info SET fname = '$EditComplainantFirstname', mname = '$EditComplainantMiddlename', lname = '$EditComplainantLastname', exname = '$EditComplainantExtension', gender = '$EditComplainantGender', phone = '$EditComplainantContact' WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "Complainant details updated successfully";
} else {
    echo "Error updating complainant details: " . mysqli_error($conn) . "<br>";
}

// Update Complainant Information
$sql = "UPDATE complaint_details SET complaint_person = '$EditSubject', body_no = '$EditBodyNumber', date_created = '$EditDateCreated' WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "Complaint information updated successfully";
} else {
    echo "Error updating complaint information: " . mysqli_error($conn) . "<br>";
}

// close MySQL connection
mysqli_close($conn);
?>
