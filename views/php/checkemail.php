<?php
// Assuming you have a separate file called "db_conn.php" for database connection

// Include the database connection file
include "db_conn.php";

// Retrieve the 'email' parameter from the request
$email = $_POST['street'];

// Prepare the SQL statement to check if the email exists
$stmt = $conn->prepare("SELECT email FROM user WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

// Fetch the result
$stmt->store_result();
$emailExists = ($stmt->num_rows > 0);

// Close the statement and database connection
$stmt->close();
$conn->close();

// Send the response back to the client
if ($emailExists) {
    echo 'exists'; // Email exists in the database
} else {
    echo 'not_exists'; // Email does not exist in the database
}
?>