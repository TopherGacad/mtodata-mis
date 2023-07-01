<?php
// Include the database connection file
include "db_conn.php";

// Retrieve the 'username' parameter from the request
$username = $_POST['user-uname'];

// Prepare the SQL statement to check if the username exists
$stmt = $conn->prepare("SELECT username FROM user WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();

// Fetch the result
$stmt->store_result();
$usernameExists = ($stmt->num_rows > 0);

// Close the statement and database connection
$stmt->close();
$conn->close();

// Send the response back to the client
if ($usernameExists) {
  echo 'exists'; // Username exists in the database
} else {
  echo 'not_exists'; // Username does not exist in the database
}
?>