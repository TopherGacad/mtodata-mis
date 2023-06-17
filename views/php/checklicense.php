<?php
// Assuming you have a separate file called "db_conn.php" for database connection

// Include the database connection file
include "db_conn.php";

// Retrieve the 'license' parameter from the request
$license_no = $_POST['license'];

// Prepare the SQL statement to check if the license number exists
$stmt = $conn->prepare("SELECT license_no FROM mem_info WHERE license_no = ?");
$stmt->bind_param("s", $license_no);
$stmt->execute();

// Fetch the result
$stmt->store_result();
$licenseExists = ($stmt->num_rows > 0);

// Close the statement and database connection
$stmt->close();
$conn->close();

// Send the response back to the client
if ($licenseExists) {
    echo 'exists'; // License number exists in the database
} else {
    echo 'not_exists'; // License number does not exist in the database
}
?>