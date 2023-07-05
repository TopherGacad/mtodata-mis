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


$complaint_id = ""; // Initialize the variable

if (isset($_GET['id'])) {
    $complaint_id = $_GET['id'];
    echo "ID: " . $complaint_id;
}

