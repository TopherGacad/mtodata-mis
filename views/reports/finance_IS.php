<?php
//connection
include "db_con.php";

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//data retrieval
$sql = "SELECT account_type, SUM(amount) as total
FROM transaction_finance GROUP BY account_type;";
$result = $conn->query($sql);

if ($result === false) {
    die("Error executing the query: " . $conn->error);
}

if ($result) {

    $revenue = 0;
    $expenses = 0;

    $net = 0;

    while ($row = $result->fetch_assoc()) {
        if ($row['account_type'] === 'Donation') {
            $don = $row['total'];
        } else if ($row['account_type'] === 'Contribution') {
            $con = $row['total'];
        } else if ($row['account_type'] === 'Expenses - Electricity') {
            $ele = $row['total'];
        } else if ($row['account_type'] === 'Expenses - Rent') {
            $ren = $row['total'];
        } else if ($row['account_type'] === 'Expenses - Water') {
            $wat = $row['total'];
        } else if ($row['account_type'] === 'Programs') {
            $pro = $row['total'];
        } else if ($row['account_type'] === 'Renewal') {
            $rnw = $row['total'];
        } else if ($row['account_type'] === 'New Member') {
            $new = $row['total'];
        }

        if (
            $row['account_type'] === 'Donation' || $row['account_type'] === 'Contribution' ||
            $row['account_type'] === 'Renewal' || $row['account_type'] === 'New Member'
        ) {
            $revenue += $row['total'];
        }

        if (
            $row['account_type'] === 'Expenses - Electricity' || $row['account_type'] === 'Expenses - Water' ||
            $row['account_type'] === 'Expenses - Rent' || $row['account_type'] === 'Programs'
        ) {
            $expenses += $row['total'];
        }

        $net = $revenue - $expenses;

    }
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Income Statements</title>

    <!--Styling-->
    <link rel='stylesheet' href='../../assets/css/reports.css' type='text/css'>

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

    <!--Button for PDF Generation-->
    <button id='save'>Generate as PDF</button>
    <?php
    echo "

    <div class='container' id='container'>
        <div class='wrapper'>
            <div class='header_IS'>
                <div class='top'>
                    <img src='../../assets/img/placeholder.jpg' id='imgplaceholder'>
                    <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                    <p id='top_IS'>Income Statement</p>
                    <p id='top_IS'>For the Month of July</p>
                </div>

                <br>

                <table>

                    <tr>
                        <td class='tr_head'>Revenues</td>
                    </tr>

                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>

                    <tr>
                        <td>Collected contributions</td>
                        <td class='IS_amount'>P&emsp;" . $con . "</td>
                    </tr>
                    <tr>
                        <td>Renewal</td>
                        <td class='IS_amount'>" . $rnw . "</td>
                    </tr>
                    <tr>
                        <td>New Members</td>
                        <td class='IS_amount'>" . $new . "</td>
                    </tr>
                    <tr>
                        <td>Donations</td>
                        <td class='IS_amount total_IS'>" . $don . "</td>
                    </tr>

                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>

                    <tr>
                        <td>Total Revenues:</td>
                        <td></td>
                        <td class='IS_amount total_IS'>P&emsp;" . $revenue . "</td>
                    </tr>

                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>

                    <tr>
                        <td class='tr_head'>Operating Expenses</td>
                    </tr>

                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>

                    <tr>
                        <td>Electricity expenses</td>
                        <td class='IS_amount'>P&emsp;" . $ele . "</td>
                    </tr>

                    <tr>
                        <td>Water expenses</td>
                        <td class='IS_amount'>" . $wat . "</td>
                    </tr>
                    <tr>
                        <td>Rent expenses</td>
                        <td class='IS_amount'>" . $ren . "</td>
                    </tr>
                    <tr>
                        <td>Program expenses</td>
                        <td class='IS_amount total_IS'>" . $pro . "</td>
                    </tr>

                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>

                    <tr>
                        <td>Total Expenses:</td>
                        <td></td>
                        <td class='IS_amount total_IS'>P&emsp;" . $expenses . "</td>
                    </tr>

                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>
                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>

                    <tr>
                        <td class='tr_head'>Net Income:</td>
                        <td></td>
                        <td class='IS_amount total_IS'>P&emsp;" . $net . "</td>
                    </tr>
                </table>
            </div>
        </div>
    ";

    // close MySQL connection
    $conn->close()

        ?>
    <script src='../../assets/js/print.js'></script>
</body>

</html>