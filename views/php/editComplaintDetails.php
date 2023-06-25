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

// Insert Complainant Details
$sql = "INSERT INTO complaint_info (fname, mname, lname, exname, gender, phone) VALUES ('$EditComplainantFirstname', '$EditComplainantMiddlename', '$EditComplainantLastname', '$EditComplainantExtension', '$EditComplainantGender', '$EditComplainantContact')";

if (mysqli_query($conn, $sql)) {
    $complainantId = mysqli_insert_id($conn);
    echo "Complainant details inserted successfully with ID: $complainantId<br>";
} else {
    echo "Error inserting complainant details: " . mysqli_error($conn) . "<br>";
}

// Insert Complaint Information
$sql = "INSERT INTO complaint_details (complaint_person, body_no, date_created, description) VALUES ('$EditSubject', '$EditBodyNumber', '$EditDateCreated', '$EditComplaintDescrtiption')";

if (mysqli_query($conn, $sql)) {
    $complaintId = mysqli_insert_id($conn);
    echo "Complaint information inserted successfully with ID: $complaintId<br>";
} else {
    echo "Error inserting complaint information: " . mysqli_error($conn) . "<br>";
}
// close MySQL connection
mysqli_close($conn);
?>
