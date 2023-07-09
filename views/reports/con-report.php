<?php
date_default_timezone_set('Asia/Manila');

// Get the start of the current month
$startOfMonth = date('Y-m-01');

// Get the current date
$currentDate = date('Y-m-d');

$currDate = date('F j, Y');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Status</title>

    <!--Styling-->
    <link rel='stylesheet' href='../../public/css/reports.css' type='text/css'>

    <!-- Include the required libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.auto.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
</head>

<body>

    <div class="container" id="container">
        <div class="wrapper">
            <div class='header' id='cert_wrapp'>
                <div class='top'>
                    <img src='../../public/assets/placeholder.jpg' id='imgplaceholder'>
                    <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                    <p>3s Center Marulas, Valenzuela City, 1440</p>
                    <p>+63 (XXX) YYY ZZZZ</p>
                </div>
            </div>
            <div class="contents">
                <table class="report">
                    <p style="text-align: center;"><b>CONTRIBUTION REPORT</b></p>
                    <p style="text-align: center;">As of
                        <?php echo $currDate ?>
                    </p>
                    <thead class="report_head">
                        <tr>
                            <th>BODY NUMBER</th>
                            <th>Transaction code</th>
                            <th>AMOUNT</th>
                            <th>DATE</th>
                        </tr>
                    </thead>

                    <!--DB Connection-->
                    <?php

                    //connection
                    include "../php/db_conn.php";

                    //check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    //data retrieval
                    $sql = "SELECT * FROM transaction_contribution
                    WHERE date_created BETWEEN '$startOfMonth' AND '$currentDate'
                    ORDER BY for_date DESC;";
                    $result = $conn->query($sql);

                    if ($result === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    if ($result->num_rows === 0) {
                        echo "<td>No Entry Found</td>";
                    }

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                        echo "
                    <tbody>
                    <tr>
                        <td>" . $row["body_no"] . "</td>
                        <td>" . $row["transaction_code"] . "</td>
                        <td>" . $row["amount"] . "</td>
                        <td>" . $row["for_date"] . "</td>
                    </tr>
                </tbody>  
    ";
                    }

                    // close MySQL connection
                    $conn->close();

                    ?>
                </table>
                <p id="end">------------ NOTHING FOLLOWS ------------</p>
            </div>
        </div>
    </div>

    <script src="../../services/dashboard.js"></script>


</body>

</html>