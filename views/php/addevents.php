<?php

include 'db_conn.php';

date_default_timezone_set('Asia/Manila');
$timestamp = date('Y-m-d H:i:s');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form inputs

    $title = $_POST['event-title'];
    $description = $_POST['desc'];
    $budget = $_POST['events-budget'];
    $organizer = $_POST['events-organizer'];
    $location = $_POST['events-location'];
    $time = $_POST['events-time'];
    $date = $_POST['events-date'];
    $esc_desc = addslashes($description);


    $PasNet = "SELECT SUM(debit) - SUM(credit) AS pastNeT
    FROM transaction_finance
    WHERE date_created >= DATE_FORMAT(NOW() - INTERVAL 2 MONTH, '%Y-%m-01')
    AND date_created <= LAST_DAY(NOW() - INTERVAL 1 MONTH)";
    $Pas_Result = $conn->query($PasNet);

    $CurNet = "SELECT SUM(debit) - SUM(credit) AS curNeT,
    SUM(debit) AS total_revenue FROM transaction_finance
    WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
    AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";
    $Cur_Result = $conn->query($CurNet);

    if ($Pas_Result && $Cur_Result) {
        $row1 = mysqli_fetch_assoc($Pas_Result);
        $row2 = mysqli_fetch_assoc($Cur_Result);

        $TotalRev = $row1['pastNeT'] + $row2['total_revenue'];
        $TotalNet = $row1['pastNeT'] + $row2['curNeT'];
    }

    if ($TotalNet < $budget) {
        header("Location: dashboard.php?error=insufficient-bal");
    } else {
        // Insert the data into events_programs table
        $sql = "INSERT INTO events_programs (ep_title, ep_description, ep_organizer, ep_location, ep_start, ep_date, date_created) 
    VALUES ('$title', '$esc_desc', '$organizer', '$location', '$time', '$date','$timestamp')";

        $result = $conn->query($sql);

        if ($result) {

            $proID = $conn->insert_id;

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
            exit();
        } else {
            // Error occurred while inserting data into events_programs table
            echo "Error: " . $conn->error;
        }
    }

}

// Close database connection
mysqli_close($conn);
?>