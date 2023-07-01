<?php

include 'db_conn.php';

date_default_timezone_set('Asia/Manila');
$timestamp = date('Y-m-d H:i:s');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form inputs

    $proID = $_GET['id'];
    $title = $_POST['event-title'];
    $description = $_POST['desc'];
    $budget = $_POST['events-budget'];
    $organizer = $_POST['events-organizer'];
    $location = $_POST['events-location'];
    $time = $_POST['events-time'];
    $date = $_POST['events-date'];

    // Insert the data into events_programs table
    $sql = "INSERT INTO events_programs (ep_title, ep_description, ep_organizer, ep_location, ep_start, ep_date, date_created) 
    VALUES ('$title', '$description', '$organizer', '$location', '$time', '$date','$timestamp')";

    $result = $conn->query($sql);

    if ($result) {

        if (isset($_POST['events-isbudget'])) {

            // Insert the data into transaction_expenses table
            $sql1 = "INSERT INTO transaction_expenses (amount, transaction_code, transaction_type, for_month, program_ID, date_created) 
            VALUES ('$budget', '', 'Programs', '$date','$proID','$timestamp')";
            $result1 = $conn->query($sql1);

            if ($result1) {
                // Get the auto-incrementing ID of the inserted row
                $lastInsertedId = $conn->insert_id;

                // Calculate the incrementing number with leading zeros
                $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);

                $dateToday = date('mdy');

                $transactionCode = "PRO{$dateToday}{$incrementingNumber}";

                $updateSql = "UPDATE transaction_expenses SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

                mysqli_query($conn, $updateSql);
            } else {
                // Error occurred while inserting budget value
                echo "Error: " . $conn->error;
            }
        }

        header('Location: dashboard.php?success=true');

    } else {
        // Error occurred while inserting data into events_programs table
        echo "Error: " . $conn->error;
    }
}

// Close database connection
mysqli_close($conn);
?>