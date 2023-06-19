<?php
// Assuming you have a separate file called "db_conn.php" for database connection

// Include the database connection file
include "db_conn.php";

// Retrieve the 'contact' parameter from the request
$contact = $_POST['contact'];

// Prepare the SQL statement to check if the contact exists
$stmt = $conn->prepare("SELECT contact FROM user WHERE contact = ?");
$stmt->bind_param("s", $contact);
$stmt->execute();

// Fetch the result
$stmt->store_result();
$contactExists = ($stmt->num_rows > 0);

// Close the statement and database connection
$stmt->close();
$conn->close();

// Send the response back to the client
if ($contactExists) {
    echo 'exists'; // Contact exists in the database
} else {
    echo 'not_exists'; // Contact does not exist in the database
}
?>