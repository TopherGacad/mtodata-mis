<?php

include "../php/db_conn.php";

// Check if the form is submitted
if (isset($_POST['user-update'])) {

    date_default_timezone_set('Asia/Manila');
    $dateToday = date('Y-m-d H:i:s');


    // Validate and sanitize the input data
    $donor_last = $_POST['donor_last'];
    $donor_first = $_POST['donor_first'];
    $donor_sex = $_POST['donor-sex'];
    $donor_mid = $_POST['donor_mid'];
    $donor_ext = $_POST['donor_ext'];
    $donor_email = $_POST['donor-email'];
    $donor_contact = $_POST['donor-contact'];
    $donor_street = $_POST['donor-street'];
    $donor_brgy = $_POST['donor-brgy'];
    $donor_city = $_POST['donor-city'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert the donor information
    $sql = "INSERT INTO donor_info (lname, fname, gender, mname, exname, email, phone, street, barangay, city,date_created)
            VALUES ('$donor_last', '$donor_first', '$donor_sex', '$donor_mid', '$donor_ext', '$donor_email', '$donor_contact', '$donor_street', '$donor_brgy', '$donor_city', '$dateToday')";

    if ($conn->query($sql) === TRUE) {

        header('location: ../../views/pages/viewdonors.php');
        exit();
    } else {

        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>