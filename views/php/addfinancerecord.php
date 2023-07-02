<?php
include "db_conn.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    date_default_timezone_set('Asia/Manila');
    $timestamp = date('Y-m-d H:i:s');

    // Retrieve the form data
    $financeType = $_POST['type'];
    $bodyNo = $_POST['bodynum'];
    $expenseType = $_POST['expense_type'];
    $transactionDate = $_POST['trans_date'];
    $amount = $_POST['amount'];
    $donorID = $_POST['donor_select'];

    switch ($financeType) {
        case 'Butaw':
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

                header("Location: dashboard.php?success=true");
                exit;
            } else {
                echo "Error inserting record: " . $conn->error;
            }

            break;

        case 'Donation':
            $financeCode = 'DON';
            $tranType = 'Donation';
            // Insert into transaction_donation table
            $insertSql = "INSERT INTO transaction_donation (id, amount, transaction_code, date_created, transaction_type) 
            VALUES ('$donorID', '$amount', '','$timestamp','$tranType')";

            // Execute the insertion query
            if ($conn->query($insertSql) === TRUE) {

                $lastInsertedId = $conn->insert_id;
                $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);
                $transactionCode = $financeCode . date('mdy') . $incrementingNumber;
                $updateSql = "UPDATE transaction_donation SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

                $conn->query($updateSql);

                echo "Record inserted successfully.";
                header("Location: dashboard.php?success=true");
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
            }
            // Insert into expenses table
            $insertSql = "INSERT INTO transaction_expenses (for_month, amount, transaction_code, date_created, transaction_type) 
            VALUES ('$transactionDate', '$amount', '','$timestamp','$expenseType')";

            // Execute the insertion query
            if ($conn->query($insertSql) === TRUE) {

                $lastInsertedId = $conn->insert_id;
                $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);
                $transactionCode = $financeCode . date('mdy') . $incrementingNumber;
                $updateSql = "UPDATE transaction_expenses SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

                $conn->query($updateSql);

                echo "Record inserted successfully.";
                header("Location: dashboard.php?success=true");
            } else {
                echo "Error inserting record: " . $conn->error;
            }
            break;
    }
}
?>