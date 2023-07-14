<?php
include "db_conn.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    date_default_timezone_set('Asia/Manila');
    $timestamp = date('Y-m-d H:i:s');

    // Retrieve the form data
    $financeType = $_POST['type'];
    $expenseType = $_POST['expense_type'];
    $transactionDate = $_POST['trans_date'];
    $amount = $_POST['amount'];

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

    switch ($financeType) {
        case 'Butaw':

            // Check if bodyNo is provided
            if (!empty($_POST['bodynum'])) {
                $bodyNo = $_POST['bodynum'];
            } else {
                $bodyNo = ''; // Set a default value
            }

            $financeCode = 'CON';
            $tranType = 'Contribution';
            // Insert into transaction_contribution table
            $insertSql = "INSERT INTO transaction_contribution (body_no, for_date, amount, transaction_code, date_created, transaction_type) 
            VALUES ('$bodyNo', '$transactionDate', '$amount', '','$timestamp','$tranType')";

            // Execute the insertion query
            if ($conn->query($insertSql) === TRUE) {

                $lastInsertedId = $conn->insert_id;
                $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);
                $transactionCode = $financeCode . date('mdy') . $incrementingNumber;
                $updateSql = "UPDATE transaction_contribution SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

                $conn->query($updateSql);

                header("Location: dashboard.php?success=true%finance");
                exit;
            } else {
                echo "Error inserting record: " . $conn->error;
            }

            break;

        case 'Donation':

            // Check if donorID is provided
            if (!empty($_POST['donor_select'])) {
                $donorID = $_POST['donor_select'];
            } else {
                $donorID = ''; // Set a default value
            }

            $financeCode = 'DON';
            $tranType = 'Donation';
            // Insert into transaction_donation table
            $insertSql = "INSERT INTO transaction_donation (donor_id, amount, transaction_code, date_created, transaction_type) 
            VALUES ('$donorID', '$amount', '','$timestamp','$tranType')";

            // Execute the insertion query
            if ($conn->query($insertSql) === TRUE) {

                $lastInsertedId = $conn->insert_id;
                $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);
                $transactionCode = $financeCode . date('mdy') . $incrementingNumber;
                $updateSql = "UPDATE transaction_donation SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

                $conn->query($updateSql);

                echo "Record inserted successfully.";
                header("Location: dashboard.php?success=true%finance");
            } else {
                echo "Error inserting record: " . $conn->error;
            }

            break;

        case 'Expenses':
            $financeCode = '';
            switch ($expenseType) {
                case 'Expenses - Rent':
                    $financeCode = 'REN';
                    break;
                case 'Expenses - Electricity':
                    $financeCode = 'ELE';
                    break;
                case 'Expenses - Water':
                    $financeCode = 'WAT';
                    break;
                case 'Expenses - ':
                    $financeCode = 'OTH';
            }

            if ($TotalNet < $amount) {
                header("Location: dashboard.php?error=insufficient-bal");
            } else {

                if ($expenseType === 'Expenses - ') {
                    $remarks = $_POST['remarks'];
                    $expenseType .= $remarks;
                }

                // Insert into expenses table
                $insertSql = "INSERT INTO transaction_expenses (for_month, amount, transaction_code, date_created, transaction_type) VALUES ('$transactionDate', '$amount', '','$timestamp','$expenseType')";

            }

            // Execute the insertion query
            if ($conn->query($insertSql) === TRUE) {

                $lastInsertedId = $conn->insert_id;
                $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);
                $transactionCode = $financeCode . date('mdy') . $incrementingNumber;
                $updateSql = "UPDATE transaction_expenses SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

                $conn->query($updateSql);

                header("Location: dashboard.php?success=true%finance");
            } else {
                echo "Error inserting record: " . $conn->error;
            }
            break;
    }

}

?>