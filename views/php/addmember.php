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

date_default_timezone_set('Asia/Manila');
$dateToday = date('mdy');

// Prepare SQL query
$sql = "INSERT INTO mem_info (mem_role, lname, fname, mname, exname, gender, street, barangay, city, phone, license_no, profilepic, mem_stat) VALUES ('$mem_role', '$lname', '$fname', '$mname', '$exname', '$gender', '$street', '$barangay', '$city', '$phone', '$license_no', '$profilepic', '$mem_stat')";

// Execute query
if (mysqli_query($conn, $sql)) {

    $memberId = mysqli_insert_id($conn);

    $sql1 = "INSERT INTO transaction_payment (member_id, amount, transaction_code, transaction_type) VALUES ('$memberId', '2000', '', 'New Member')";

    if ($conn->query($sql1) === TRUE) {
        // Get the auto-incrementing ID of the inserted row
        $lastInsertedId = mysqli_insert_id($conn);

        // Calculate the incrementing number with leading zeros
        $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);

        //Generate the transaction code
        $transactionCode = "NEW" . date('mdy') . $incrementingNumber;

        // Update the transaction code in the database
        $updateSql = "UPDATE transaction_payment SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

        if ($conn->query($updateSql) === TRUE) {
            header('Content-Type: application/json');
            http_response_code(200);
            echo json_encode(array('message' => 'Member added successfully'));
            header("Location: ../../views/php/dashboard.php");
            exit();
        } else {
            echo "Error updating data: " . $conn->error;
        }
    } else {
        echo "Error inserting data: " . $conn->error;
    }

} else {
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode(array('message' => 'Error inserting data: ' . mysqli_error($conn)));
}

// Close database connection
mysqli_close($conn);
?>