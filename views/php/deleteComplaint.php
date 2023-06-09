<?php
// connect to the MySQL database
include "db_conn.php";

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// retrieve the member ID from the AJAX request
$id = $_POST["id"];

// Prepare and execute the SQL queries to delete the rows from the respective tables
$sql1 = "DELETE FROM complaint_info WHERE id=$id";
$sql2 = "DELETE FROM complaint_details WHERE id=$id";

if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    // If deletion was successful for both tables, return success message
    echo "Member deleted successfully.";
} else {
    // If deletion failed, return error message
    echo "Error deleting member: " . $conn->error;
}

// close MySQL connection
$conn->close();
?>
