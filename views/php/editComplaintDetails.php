<?php
// connect to the MySQL database
include "db_conn.php";

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Update Database
// Edit Complaint Module

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
$EditComplaintDescription = $_POST["editComplaintDescription"];

$complaint_id = $_POST['complaint_id']; // Add this line to get the complaint ID

$query .= " WHERE id = '$complaint_id'";

$sql = "UPDATE complaint_info SET fname = '$EditComplainantFirstname', mname = '$EditComplainantMiddlename', lname = '$EditComplainantLastname', exname = '$EditComplainantExtension', gender = '$EditComplainantGender', phone = '$EditComplainantContact' WHERE id = '$complaint_id'";

if (mysqli_query($conn, $sql)) {
    echo "Complainant details updated successfully";
} else {
    echo "Error updating complainant details: " . mysqli_error($conn) . "<br>";
}

// Update Complaint Information
$sql = "UPDATE complaint_details SET complaint_person = '$EditSubject', body_no = '$EditBodyNumber', details =  '$EditComplaintDescription', date_created = '$EditDateCreated' WHERE id = '$complaint_id'";

if (mysqli_query($conn, $sql)) {
    echo "Complaint information updated successfully";
} else {
    echo "Error updating complaint information: " . mysqli_error($conn) . "<br>";
}

header("Location: ../../viewuser.php?id=$complaint_id&success=true"); // Update the variable used in the URL
exit;
?>
