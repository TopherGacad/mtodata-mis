<?php
// Database connection parameters
include "db_conn.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get data from form submission
$mem_role = $_POST["role"];
$lname = $_POST["lastname"];
$fname = $_POST["firstname"];
$mname = $_POST["middlename"];
$exname = $_POST["extension"];
$gender = $_POST["gender"];
$street = $_POST["street"];
$barangay = $_POST["barangay"];
$city = $_POST["city"];
$phone = $_POST["contact"];
$license_no = $_POST["license"];
$profilepic = $_FILES["profile"]["name"];
$profilepic_tmp = $_FILES["profile"]["tmp_name"];
$profilepic_path = "../../public/images/"; // Update this with the appropriate path to store the profile pictures
$mem_stat = 'Active';

// Move the uploaded file to the desired location
move_uploaded_file($profilepic_tmp, $profilepic_path . $profilepic);

// Prepare SQL query
$sql = "INSERT INTO mem_info (mem_role, lname, fname, mname, exname, gender, street, barangay, city, phone, license_no, profilepic, mem_stat) VALUES ('$mem_role', '$lname', '$fname', '$mname', '$exname', '$gender', '$street', '$barangay', '$city', '$phone', '$license_no', '$profilepic', '$mem_stat')";

// Execute query
if (mysqli_query($conn, $sql)) {
    // Get the auto-incrementing ID of the inserted row
    $lastInsertedId = mysqli_insert_id($conn);

    // Calculate the incrementing number with leading zeros
    $incrementingNumber = str_pad($lastInsertedId, 3, '0', STR_PAD_LEFT);

    date_default_timezone_set('Asia/Manila');

    // Get the current date
    $dateToday = date("Ymd");

    // Generate the transaction code
    $transactionCode = "NEW{$dateToday}{$incrementingNumber}";

    // Insert the transaction payment record
    $trantype = 'New Member';
    $paymentSql = "INSERT INTO transaction_payment (member_id, amount, transaction_code, transaction_type, date_created) VALUES ('$lastInsertedId', '2000', '$transactionCode', '$trantype', '$dateToday')";

    if (mysqli_query($conn, $paymentSql)) {
        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode(array('message' => 'Member added successfully'));
    } else {
        header('Content-Type: application/json');
        http_response_code(500);
        echo json_encode(array('message' => 'Error inserting payment data: ' . mysqli_error($conn)));
    }
} else {
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode(array('message' => 'Error inserting data: ' . mysqli_error($conn)));
}

// Close database connection
mysqli_close($conn);
?>