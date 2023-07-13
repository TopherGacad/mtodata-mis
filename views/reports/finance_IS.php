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
$sql = "SELECT account_type, SUM(amount) as total
        FROM transaction_finance 
        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND
        GROUP BY account_type";

$result = $conn->query($sql);

if ($result === false) {
    die("Error executing the query: " . $conn->error);
}

if ($result) {
    $revenue = 0;
    $expenses = 0;
    $net = 0;
    $don = 0;
    $con = 0;
    $ele = 0;
    $ren = 0;
    $wat = 0;
    $pro = 0;
    $rnw = 0;
    $new = 0;

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
    }

    $sql1 = "SELECT SUM(debit) - SUM(credit) AS pastNeT FROM transaction_finance 
    WHERE date_created >= DATE_FORMAT(NOW() - INTERVAL 2 MONTH, '%Y-%m-01')
  AND date_created <= LAST_DAY(NOW() - INTERVAL 1 MONTH)";

    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    if ($result1 === false) {
        die("Error executing the query: " . $conn->error);
    }

}

$pastNetIncome = $row1['pastNeT'];
$TotalRev = $pastNetIncome + $revenue;
$net = $TotalRev - $expenses;

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
                    <p id='top_IS'>Income Statement</p>
                    <p id='top_IS' style='padding-top: 20px'>
                        <?php echo $firstDate; ?> to
                        <?php echo $currDate; ?>
                    </p>
                </div>

                <br>

                <table class='finance-table'>
                    <tr>
                        <td class='tr_head'>Revenues</td>
                    </tr>
                    <?php if ($pastNetIncome != 0): ?>
                        <tr>
                            <td class='td_IS'>Remaining Balance</td>
                            <td class='IS_amount'>P&emsp;
                                <?php echo $pastNetIncome; ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <tr>
                        <td class='td_IS'>Collected contributions</td>
                        <td class='IS_amount'>P&emsp;
                            <?php echo $con; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Renewal</td>
                        <td class='IS_amount'>
                            <?php echo $rnw; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='td_IS'>New Members</td>
                        <td class='IS_amount'>
                            <?php echo $new; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Donations</td>
                        <td class='IS_amount total_IS'>
                            <?php echo $don; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Total Revenues:</td>
                        <td></td>
                        <td class='IS_amount total_IS'>P&emsp;
                            <?php echo $TotalRev; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>
                    <tr>
                        <td class='tr_head'>Operating Expenses</td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Electricity expenses</td>
                        <td class='IS_amount'>P&emsp;
                            <?php echo $ele; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Water expenses</td>
                        <td class='IS_amount'>
                            <?php echo $wat; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Rent expenses</td>
                        <td class='IS_amount'>
                            <?php echo $ren; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Program expenses</td>
                        <td class='IS_amount total_IS'>
                            <?php echo $pro; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>
                    <tr>
                        <td class='td_IS'>Total Expenses:</td>
                        <td></td>
                        <td class='IS_amount total_IS'>P&emsp;
                            <?php echo $expenses; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>
                    <tr>
                        <td class='to_hide'>:</td>
                    </tr>
                    <tr>
                        <td class='tr_head' colspan="2">Net Income:</td>
                        <td class='IS_amount total_IS'>P&emsp;
                            <?php echo $net; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Collected Contribution -->

        <div class='wrapper'>
            <div class='header_IS'>
                <div class='top' id="topper">
                    <p id='top_title2'>
                        Collected Contributions
                    </p>
                    <p id='top_title3'>
                        <?php echo $firstDate; ?> to
                        <?php echo $currDate; ?>
                    </p>
                </div>

                <br>

                <table class='finance-table2'>
                    <thead>
                        <tr>
                            <th class='tr_head'>Date</th>
                            <th class='tr_head'>Body Number</th>
                            <th class='tr_head'>Description</th>
                            <th class='tr_head' style='text-align: right;'>Amount</th>
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

                        $sqlCon = "SELECT *, FORMAT(amount, 2) AS TotCon, DATE_FORMAT(date_created, '%M %d, %Y') AS formatted_date
                        FROM transaction_contribution
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

                        $TotalCon = "SELECT SUM(amount) as totalCon
                        FROM transaction_contribution
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

                        $resultCon = $conn->query($sqlCon);
                        $resultTotalCon = $conn->query($TotalCon);
                        $rowTotCon = $resultTotalCon->fetch_assoc();

                        while ($rowCon = $resultCon->fetch_assoc()) {
                            echo "<tr>
                            <td>" . $rowCon['formatted_date'] . "</td>
                            <td>" . $rowCon['body_no'] . "</td>
                            <td>" . $rowCon['transaction_type'] . "</td>
                            <td style='text-align: right; padding-right: 15px;'>" . $rowCon['TotCon'] . "</td>
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
                            <td colspan="3"></td>
                            <td class='IS_amount total_IS' style='padding-right: 15px;'> Total:
                                <?php echo number_format($rowTotCon['totalCon'], 2); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Collected Payment-->

        <div class='wrapper'>
            <div class='header_IS'>
                <div class='top' id="topper">
                    <p id='top_title2'>
                        Collected Renewal and New Member Payments
                    </p>
                    <p id='top_title3'>
                        <?php echo $firstDate; ?> to
                        <?php echo $currDate; ?>
                    </p>
                </div>

                <br>

                <table class='finance-table2'>
                    <thead>
                        <tr>
                            <th class='tr_head'>Date</th>
                            <th class='tr_head'>Name</th>
                            <th class='tr_head'>Description</th>
                            <th class='tr_head' style='text-align: right;'>Amount</th>
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

                        $sqlCon = "SELECT tc.*, FORMAT(tc.amount, 2) AS TotCon, DATE_FORMAT(tc.date_created, '%M %d, %Y') AS formatted_date, 
                        mi.lname, mi.fname, mi.mname, mi.exname
                        FROM transaction_payment tc
                        JOIN mem_info mi ON tc.member_id = mi.id
                        WHERE tc.date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND tc.date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

                        $TotalCon = "SELECT SUM(amount) as totalCon
                        FROM transaction_payment
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

                        $resultCon = $conn->query($sqlCon);
                        $resultTotalCon = $conn->query($TotalCon);
                        $rowTotCon = $resultTotalCon->fetch_assoc();

                        while ($rowCon = $resultCon->fetch_assoc()) {

                            $middleInitial = !empty($rowCon["mname"]) ? trim($rowCon["mname"][0]) . '.' : '';
                            $extensionName = !empty($rowCon["exname"]) ? ' ' . $rowCon["exname"] . '., ' : '';
                            $lastName = $rowCon["lname"];

                            if (empty($rowCon["exname"])) {
                                $lastName .= ', ';
                            }
                            echo "<tr>
                            <td>" . $rowCon['formatted_date'] . "</td>
                            <td>" . $lastName . $extensionName . $rowCon["fname"] . " " . $middleInitial . "</td>
                            <td>" . $rowCon['transaction_type'] . "</td>
                            <td style='text-align: right; padding-right: 15px;'>" . $rowCon['TotCon'] . "</td>
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
                            <td colspan="3"></td>
                            <td class='IS_amount total_IS' style='padding-right: 15px;'> Total:
                                <?php echo number_format($rowTotCon['totalCon'], 2); ?>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- Collected Donations-->

        <div class='wrapper'>
            <div class='header_IS'>
                <div class='top' id="topper">
                    <p id='top_title2'>
                        Collected Donations
                    </p>
                    <p id='top_title3'>
                        <?php echo $firstDate; ?> to
                        <?php echo $currDate; ?>
                    </p>
                </div>

                <br>

                <table class='finance-table2'>
                    <thead>
                        <tr>
                            <th class='tr_head'>Date</th>
                            <th class='tr_head'>Name</th>
                            <th class='tr_head'>Description</th>
                            <th class='tr_head' style='text-align: right;'>Amount</th>
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

                        $sqlCon = "SELECT tc.*, FORMAT(tc.amount, 2) AS TotCon, DATE_FORMAT(tc.date_created, '%M %d, %Y') AS formatted_date, 
                        mi.lname, mi.fname, mi.mname, mi.exname
                        FROM transaction_donation tc
                        JOIN donor_info mi ON tc.donor_id = mi.id
                        WHERE tc.date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND tc.date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

                        $TotalCon = "SELECT SUM(amount) as totalCon
                        FROM transaction_donation
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

                        $resultCon = $conn->query($sqlCon);
                        $resultTotalCon = $conn->query($TotalCon);
                        $rowTotCon = $resultTotalCon->fetch_assoc();

                        while ($rowCon = $resultCon->fetch_assoc()) {

                            $middleInitial = !empty($rowCon["mname"]) ? trim($rowCon["mname"][0]) . '.' : '';
                            $extensionName = !empty($rowCon["exname"]) ? ' ' . $rowCon["exname"] . '., ' : '';
                            $lastName = $rowCon["lname"];

                            if (empty($rowCon["exname"])) {
                                $lastName .= ', ';
                            }
                            echo "<tr>
                            <td>" . $rowCon['formatted_date'] . "</td>
                            <td>" . $lastName . $extensionName . $rowCon["fname"] . " " . $middleInitial . "</td>
                            <td>" . $rowCon['transaction_type'] . "</td>
                            <td style='text-align: right; padding-right: 15px;'>" . $rowCon['TotCon'] . "</td>
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
                            <td colspan="3"></td>
                            <td class='IS_amount total_IS' style='padding-right: 15px;'> Total:
                                <?php echo number_format($rowTotCon['totalCon'], 2); ?>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- total Expenses-->

        <div class='wrapper'>
            <div class='header_IS'>
                <div class='top' id="topper">
                    <p id='top_title2'>
                        Total Expenses
                    </p>
                    <p id='top_title3'>
                        <?php echo $firstDate; ?> to
                        <?php echo $currDate; ?>
                    </p>
                </div>

                <br>

                <table class='finance-table2'>
                    <thead>
                        <tr>
                            <th class='tr_head'>Date</th>
                            <th class='tr_head'>Description</th>
                            <th class='tr_head' style='text-align: right;'>Amount</th>
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

                        $sqlCon = "SELECT *, FORMAT(amount, 2) AS TotCon, DATE_FORMAT(date_created, '%M %d, %Y') AS formatted_date
                        FROM transaction_expenses
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND
                        AND transaction_type <> 'Programs'";

                        $TotalCon = "SELECT SUM(amount) as totalCon
                        FROM transaction_expenses
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND";

                        $resultCon = $conn->query($sqlCon);
                        $resultTotalCon = $conn->query($TotalCon);
                        $rowTotCon = $resultTotalCon->fetch_assoc();

                        while ($rowCon = $resultCon->fetch_assoc()) {

                            echo "<tr>
                            <td>" . $rowCon['formatted_date'] . "</td>
                            <td>" . $rowCon['transaction_type'] . "</td>
                            <td style='text-align: right; padding-right: 15px;'>" . $rowCon['TotCon'] . "</td>
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
                            <td colspan="2"></td>
                            <td class='IS_amount total_IS' style='padding-right: 15px;'> Total:
                                <?php echo number_format($rowTotCon['totalCon'], 2); ?>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- total Program Expenses-->

        <div class='wrapper'>
            <div class='header_IS'>
                <div class='top' id="topper">
                    <p id='top_title2'>
                        Total Program Expenses
                    </p>
                    <p id='top_title3'>
                        <?php echo $firstDate; ?> to
                        <?php echo $currDate; ?>
                    </p>
                </div>

                <br>

                <table class='finance-table2'>
                    <thead>
                        <tr>
                            <th class='tr_head'>Date</th>
                            <th class='tr_head'>Description</th>
                            <th class='tr_head'>Program Name</th>
                            <th class='tr_head' style='text-align: right;'>Amount</th>
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

                        $sqlCon = "SELECT te.*, FORMAT(te.amount, 2) AS TotCon, DATE_FORMAT(te.date_created, '%M %d, %Y') AS formatted_date, ep.ep_title
                        FROM transaction_expenses te
                        JOIN events_programs ep ON te.program_ID = ep.ID
                        WHERE te.date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND te.date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND
                        AND transaction_type <> 'Expenses - Rent'
                        AND transaction_type <> 'Expenses - Electricity'
                        AND transaction_type <> 'Expenses - Water'";

                        $TotalCon = "SELECT SUM(amount) as totalCon
                        FROM transaction_expenses
                        WHERE date_created >= DATE_FORMAT(CURDATE(), '%Y-%m-01 00:00:00')
                        AND date_created <= CURDATE() + INTERVAL 1 DAY - INTERVAL 1 SECOND
                        AND transaction_type <> 'Expenses - Rent'
                        AND transaction_type <> 'Expenses - Electricity'
                        AND transaction_type <> 'Expenses - Water'";

                        $resultCon = $conn->query($sqlCon);
                        $resultTotalCon = $conn->query($TotalCon);
                        $rowTotCon = $resultTotalCon->fetch_assoc();

                        while ($rowCon = $resultCon->fetch_assoc()) {

                            echo "<tr>
                            <td>" . $rowCon['formatted_date'] . "</td>
                            <td>" . $rowCon['transaction_type'] . "</td>
                            <td>" . $rowCon['ep_title'] . "</td>
                            <td style='text-align: right; padding-right: 15px;'>" . $rowCon['TotCon'] . "</td>
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
                            <td colspan="3"></td>
                            <td class='IS_amount total_IS' style='padding-right: 15px;'> Total:
                                <?php echo number_format($rowTotCon['totalCon'], 2); ?>
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