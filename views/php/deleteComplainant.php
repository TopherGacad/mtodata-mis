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
$sql2 = "DELETE FROM complaint_info WHERE id=$id";

if ($conn->query($sql2) === TRUE) {
    // If deletion was successful, return success message
    echo "Complaint deleted successfully.";
} else {
    // If deletion failed, return error message
    echo "Error deleting Complaint: " . $conn->error;
}

// close MySQL connection
$conn->close();
?>
