<?php
// connect to the MySQL database
include "db_conn.php";

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// retrieve the user ID from the AJAX request
$id = $_POST["id"];

// prepare and execute the SQL query to delete the user from the database
$sql = "DELETE FROM user WHERE user_id=$id";
if ($conn->query($sql) === TRUE) {
    // if deletion was successful, return success message
    echo "User deleted successfully.";
} else {
    // if deletion failed, return error message
    echo "Error deleting user: " . $conn->error;
}

// close MySQL connection
$conn->close();
?>
