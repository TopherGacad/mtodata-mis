<?php
date_default_timezone_set('Asia/Manila');
$currentDate = date('F j, Y');
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
                    <br>
                    <p style="text-align: center;"><b>MEMBERSHIP STATUS REPORT</b></p>
                    <p style="text-align: center;">As of
                        <?php echo $currentDate ?>
                    </p>
                    <thead class="report_head">
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Membership Status</th>
                            <th>Date of Registration</th>
                            <th>Expiration</th>
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
                    $sql = "SELECT * , DATE_FORMAT(date_created, '%b %d, %Y') AS valid_date,
                DATE_FORMAT(DATE_ADD(date_created, INTERVAL 2 YEAR), '%b %d, %Y') AS expiry_date FROM `mem_info`
                ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    if ($result === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    if ($result->num_rows === 0) {
                        echo "No rows found.";
                    }

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                        $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                        $lastName = $row["lname"];

                        if (empty($row["exname"])) {
                            $lastName .= ', ';
                        }

                        echo "
                    <tbody>
                    <tr>
                        <td>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
                        <td>" . $row["mem_role"] . "</td>
                        <td>" . $row["mem_stat"] . "</td>
                        <td>" . $row["valid_date"] . "</td>
                        <td>" . $row["expiry_date"] . "</td>
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