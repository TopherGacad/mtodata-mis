<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $donorID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    include "../php/db_conn.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the updated values from the form inputs
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $extension = $_POST['extension'];
        $gender = $_POST['gender'];
        $street = $_POST['street'];
        $barangay = $_POST['barangay'];
        $city = $_POST['city'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        // Retrieve existing donor information
        $sql = "SELECT * FROM donor_info WHERE id = '$donorID'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 0) {
            echo 'User does not exist';
            exit();
        } else {
            $row = mysqli_fetch_assoc($result);
        }

        // Perform the update query
        $sql = "UPDATE donor_info SET 
                fname = '$firstname',
                mname = '$middlename',
                lname = '$lastname',
                exname = '$extension',
                gender = '$gender',
                street = '$street',
                barangay = '$barangay',
                city = '$city',
                phone = '$contact',
                email = '$email'
                WHERE id = '$donorID'";

        if (mysqli_query($conn, $sql)) {
            header("Location: donorinfo.php?id=$donorID&success=true%member");
            exit;
        } else {
            echo "Error updating donor information: " . mysqli_error($conn);
            exit;
        }
    }
} else {
    echo 'Invalid donor ID';
    exit();
}

mysqli_close($conn); ?>