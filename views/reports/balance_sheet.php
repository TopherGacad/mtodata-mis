<?php
// connection
include "../php/db_conn.php";

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstDate = date('F 01, Y');
$currDate = date('F d, Y');

// data retrieval
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
}

$sql = "SELECT *
FROM transaction_finance
WHERE credit != 0
AND date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Income Statements</title>

    <!--Styling-->
    <link rel='stylesheet' href='../../public/css/dashboard.css' type='text/css'>

    <!--html2pdf library-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js'
        integrity='sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=='
        crossorigin='anonymous' referrerpolicy='no-referrer'></script>

    <!--es6-promise library-->
    <script src='../../assets/js/es6-promise-master/lib/es6-promise.auto.js'></script>
    <!--jspdf library-->
    <script src='../../assets/js/jsPDF-master/dist/jspdf.es.min.js'></script>
    <!--html2canvas library-->
    <script src='../../assets/js/html2canvas-master/package.json'></script>
    <!--html2pdf library-->
    <script src='../../assets/js/html2pdf.js-master/dist/html2pdf.min.js'></script>
</head>

<body>
    <div class='container-finance' id='container'>
        <div class='wrapper'>
            <div class='header_IS'>
                <div class='top'>
                    <img src='../../public/assets/placeholder.jpg' id='imgplaceholder'>
                    <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                    <p id='top_IS' style='padding-top: 20px'>
                        <?php echo $firstDate; ?> to
                        <?php echo $currDate; ?>
                    </p>
                </div>

                <br>

                <table class='finance-table2'>
                    <thead>
                        <tr>
                            <th class='tr_head'>Date</th>
                            <th class='tr_head'>Transaction Code</th>
                            <th class='tr_head'>Description</th>
                            <th class='tr_head' style='text-align: right;'>Amount</th>
                            <th class='tr_head' style='text-align: right;'>Balance</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        // connection
                        include "../php/db_conn.php";

                        // check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $Bal = $TotalRev;

                        echo "
                        <tr>
                            <td colspan='4' style='text-align: right; padding-right: 15px;'><b>Revenue</b></td>
                            <td style='text-align: right; padding-right: 15px;'>" . number_format($TotalRev, 2) . "</td>
                            </tr>
                            
                            <tr>
                            <td class='to_hide'>:</td>
                        </tr>";

                        while ($row = $result->fetch_assoc()) {

                            $Bal -= $row['credit'];

                            echo "                           
                            <tr>
                            <td>" . $row['date_created'] . "</td>
                            <td>" . $row['transaction_code'] . "</td>
                            <td>" . $row['account_type'] . "</td>
                            <td style='text-align: right; padding-right: 15px;'>" . number_format($row['credit'], 2) . "</td>
                            <td style='text-align: right; padding-right: 15px;'>" . number_format($Bal, 2) . "</td>
                        </tr>";
                        }
                        ?>
                        <tr>
                            <td class='to_hide'>:</td>
                        </tr>
                        <tr>
                            <td class='to_hide'>:</td>
                        </tr>

                        <tr>
                            <td colspan="4"></td>
                            <td class='IS_amount total_IS' style='padding-right: 15px;'> Total:
                                <?php echo number_format($Bal, 2); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src='../../assets/js/print.js'></script>
</body>

</html>