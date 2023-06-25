<?php
// Assuming you have a separate file called "db_conn.php" for database connection

// Include the database connection file
include "db_conn.php";

// Retrieve the 'contact' parameter from the request
$phone = $_POST['contact'];

// Prepare the SQL statement to check if the member's contact exists
$stmt = $conn->prepare("SELECT phone FROM mem_info WHERE phone = ?");
$stmt->bind_param("s", $phone);
$stmt->execute();

// Fetch the result
$stmt->store_result();
$memContactExists = ($stmt->num_rows > 0);

// Close the statement and database connection
$stmt->close();
$conn->close();

// Send the response back to the client
if ($memContactExists) {
    echo 'exists'; // Member's contact exists in the database
} else {
    echo 'not_exists'; // Member's contact does not exist in the database
}
?>