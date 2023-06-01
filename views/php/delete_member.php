<?php
// connect to the MySQL database
include "db_conn.php";

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// retrieve the member ID from the AJAX request
$id = $_POST["id"];

// prepare and execute the SQL query to delete the member from the database
$sql = "DELETE FROM mem_info WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    // if deletion was successful, return success message
    echo "Member deleted successfully.";
} else {
    // if deletion failed, return error message
    echo "Error deleting member: " . $conn->error;
}

// close MySQL connection
$conn->close();
?>