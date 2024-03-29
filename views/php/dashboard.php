<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

// connect to the MySQL database
include "db_conn.php";

$updateQuery = "UPDATE mem_info SET mem_stat = 'Expired' WHERE mem_stat = 'Active' AND date_created < DATE_SUB(NOW(), INTERVAL 2 YEAR)";
mysqli_query($conn, $updateQuery);

date_default_timezone_set('Asia/Manila');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../public/css/dashboard.css">
    <link rel="stylesheet" href="../../public/css/loading.css">
    <link rel="icon" href="../../public/assets/browse_logo.png">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;900&display=swap" rel="stylesheet">
    <!-- FONT AWESOME/ICONS -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>

    <!-- JS LIBRARIES -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.auto.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>

</head>

<body>
    <!-- BACKGROUND -->
    <div class="bg-container"></div>

    <!-- TOP DESIGN -->
    <div class="top-design">
        <p class="top-user"><strong>Welcome! </strong>
            <?php echo $_SESSION['email'] ?>
        </p>
        <p class="top-date">
            <i id="current-date"></i>
        </p>
    </div>

    <!-- SIDE-NAV-BAR -->
    <div class="side-nav">
        <!-- SIDENAV HEADER -->
        <header class="header-nav">
            <img class="logo" src="../../public/assets/mtodata_logo.png" alt="logo of mtodata system">
            <p>ADMIN PANEL</p>
        </header>

        <!-- ITEM CONTAINER -->
        <div class="item-container">
            <ul>
                <li id="dash-btn"><i class="fa-solid fa-house"></i> DASHBOARD</li>
                <li id="users-btn"><i class="fa-solid fa-users"></i> USERS</li>
                <li id="member-btn"><i class="fa-solid fa-circle-info"></i> MEMBER INFORMATION</li>
                <li id="finance-btn"><i class="fa-solid fa-coins"></i> FINANCE</li>
                <li id="complain-btn"><i class="fa-solid fa-flag"></i> COMPLAINTS</li>
                <li id="programs-btn"><i class="fa-solid fa-calendar-days"></i> EVENTS & PROGRAMS</li>
                <a href="logout.php">
                    <li id="logout-btn">LOGOUT <i class="fa-solid fa-right-from-bracket"></i></li>
                </a>
            </ul>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <!-- DASHBOARD PANE -->
    <div class='dashboard-container' id='dash-container'>
        <div class="dash-header">
            <?php
            $startOfMonth = date('Y-m-01');
            $formattedStartOfMonth = date('m/d/Y', strtotime($startOfMonth));

            $now = new DateTime();
            $formattedDate = $now->format('m/d/Y');
            echo "
            <abbr title='Start of the Month to Current date'><h3>MONTHLY REPORT:<span class='dash-date'> (" . $formattedStartOfMonth . " - " . $formattedDate . ")</span></h3></abbr>
            ";
            ?>
        </div>
        <section class='top-dash'>
            <?php

            // connect to the MySQL database
            include "db_conn.php";

            // check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // member count
            $mem = "SELECT COUNT(id) AS mem_count FROM mem_info WHERE mem_stat = 'Active'";
            $mem_result = $conn->query($mem);

            $don = "SELECT SUM(amount) AS don_count FROM transaction_donation
                WHERE MONTH(date_created) = MONTH(CURRENT_DATE()) AND YEAR(date_created) = YEAR(CURRENT_DATE());";
            $don_result = $conn->query($don);

            $com = "SELECT COUNT(id) AS com_count FROM complaint_details
                WHERE MONTH(date_created) = MONTH(CURRENT_DATE()) AND YEAR(date_created) = YEAR(CURRENT_DATE());";
            $com_result = $conn->query($com);

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

            if ($mem_result) {
                $row = mysqli_fetch_assoc($mem_result);
                echo "
                <!-- MEMBER COUNT -->
                <div class='card border'>
                    <div class='card-header'>
                        <i class='card-icon fa-solid fa-user-group'></i>
                        <h4 class=''>Total Member Count</h4>
                    </div>
                    <div class='count-container'>
                        <p>" . $row['mem_count'] . "</p>
                    </div>
                    <div class='link-container memCount'>
                        <abbr title='Member Info Report'><button class='save' id='retrieve-donation' onclick=\"save_generate()\">Download Report</button></abbr>
                    </div>
                </div>";
            }

            if ($Pas_Result && $Cur_Result) {
                $row1 = mysqli_fetch_assoc($Pas_Result);
                $row2 = mysqli_fetch_assoc($Cur_Result);

                $TotalRev = $row1['pastNeT'] + $row2['total_revenue'];
                $TotalNet = $row1['pastNeT'] + $row2['curNeT'];

                echo "
                        <!-- DONATION COUNT -->
                        <div class='card border'>
                            <div class='card-header'>
                                <i class='card-icon fa-solid fa-hand-holding-dollar'></i>
                                <h4 class=''>Total Amount Received</h4>
                            </div>
                            <div class='count-container'>
                                <p><span>&#8369; </span> " . ($TotalRev != 0 ? $TotalRev : "0") . "</p>
                            </div>
                            <div class='link-container'>
                                <abbr title='Financial Report'><button class='save' id='retrieve1' onclick=\"save_generate3()\">Download Report</button></abbr>
                            </div>
                        </div>
                        
            <!-- CONTRIBUTION COUNT -->
                        <div class='card border'>
                            <div class='card-header'>
                                <i class='card-icon fa-solid fa-circle-dollar-to-slot'></i>
                                <h4 class=''>Total Fund Balance</h4>
                            </div>
                            <div class='count-container'>
                                <p><span>&#8369; </span> " . ($TotalNet != 0 ? $TotalNet : "0") . "</p>
                            </div>
                            <div class='link-container'>
                            <abbr title='Expenses Report'><button class='save' id='retrieve1' onclick=\"save_generate2()\">Download Report</button></abbr>
                            </div>
                        </div>";
            }


            if ($com_result) {
                $row = mysqli_fetch_assoc($com_result);
                $com_count = $row['com_count'];
                echo "
                    <!-- COMPLAINTS COUNT -->
                <div class='card border'>
                    <div class='card-header'>
                        <i class='card-icon fa-solid fa-file-circle-exclamation'></i>
                        <h4 class=''>Complaints Recieved</h4>
                    </div>
                    <div class='count-container'>
                        <p>" . ($com_count != 0 ? $com_count : "0") . "</p>
                    </div>
                    <div class='link-container com_count'>
                    
                    </div>
                </div>";
            }
            // close MySQL connection
            $conn->close();
            ?>
        </section>

        <div class="bottom-dash">
            <div class='botleft-dash border'>
                <!-- FINANCE ENTRY -->
                <div class='card-header entry'>
                    <h4>Recent Financial Entry</h4>
                </div>

                <div class="table-container">
                    <table id="dash-table">
                        <tr>
                            <th>Transaction Code</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Date</th>
                        </tr>

                        <tbody>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            $selectFinance = "SELECT *, DATE_FORMAT(date_created, '%Y-%m-%d') AS new_formatted_date FROM transaction_finance ORDER BY date_created DESC";
                            $FinaceResult = $conn->query($selectFinance);

                            while ($FinRecent = $FinaceResult->fetch_assoc()) {
                                $debit = $FinRecent['debit'];
                                $credit = $FinRecent['credit'];
                                $rowClass = '';

                                // Check if the debit value is greater than 0
                                if ($debit > 0) {
                                    $rowClass = 'debit-row'; // CSS class for debit rows
                                }

                                // Check if the credit value is greater than 0
                                if ($credit > 0) {
                                    $rowClass = 'credit-row'; // CSS class for credit rows
                                }

                                echo "
                                    <tr class='$rowClass'>
                                        <td>" . $FinRecent['transaction_code'] . "</td>
                                        <td>" . $debit . "</td>
                                        <td>" . $credit . "</td>
                                        <td>" . $FinRecent['new_formatted_date'] . "</td>
                                    </tr>
                                ";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                <abbr title="Download Financial Report"><button class="finance_download exportBtn"
                        onclick="save_generate3()"><i class="fa-solid fa-download"></i></button></abbr>

            </div>
            <div class='botright-dash border'>
                <!-- EVENTS AND PROGRAMS ENTRY -->
                <div class='card-header events'>
                    <h4>Incoming Events</h4>
                </div>

                <div class='dash-content'>
                    <?php

                    // connect to the MySQL database
                    include "db_conn.php";
                    $dateToday = date('ymd');

                    $showPrograms = "SELECT *, CONCAT(DATE_FORMAT(ep_date, '%Y-%m-%d'), ' ', DATE_FORMAT(ep_start, '%h:%i %p')) AS concatenated_datetime FROM events_programs 
                        WHERE ep_date >= $dateToday ORDER BY concatenated_datetime ASC";
                    $showProgramResult = $conn->query($showPrograms);

                    while ($EPRecent = $showProgramResult->fetch_assoc()) {
                        echo "
                            <div class='agenda-box'>
                                <i class='fa-solid fa-calendar-day'></i>
                                <div class='detail-contain'>
                                    <p class='dash-title'>" . $EPRecent['ep_title'] . "</p>
                                    <p class='dash-loc'>" . $EPRecent['ep_location'] . "</p>
                                    <p class='dash-time'>" . $EPRecent['concatenated_datetime'] . "</p>
                                </div>
                            </div>
                            ";
                    }
                    // close MySQL connection
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>

    </div>

    <!-- USER PANE -->
    <div class="users-container" id="users-container">
        <header>
            <div class="head-left">
                <h3>USER TYPE MANAGEMENT</h3>
                <p>ADMIN VIEW</p>
            </div>
            <div class="head-right">
                <div class="search-container">
                    <input type="text" class="user-search" id="user-search" placeholder="Search">
                    <button class="user-searchBtn" id="user-searchBtn"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <button class="adduserBtn" id="addUser-btn"><i class="fa-solid fa-plus"></i> Add User</button>
            </div>
        </header>
        <main>
            <table id="user-table">
                <thead>
                    <tr>
                        <th class="id">USER ID</th>
                        <th class="username">NAME</th>
                        <th class="role">ROLE</th>
                        <th class="email">EMAIL</th>
                        <th class="datecreated">DATE CREATED</th>
                        <th class="action">ACTION</th>
                    </tr>
                </thead>

                <tbody id="user-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // retrieve data from the MySQL table
                    $sql = "SELECT user_id, CONCAT(F_name, ' ', L_name) AS Name, roles, email, date_created FROM user ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                    <tr id='user-" . $row["user_id"] . "'>
                        <td class='userid'>" . $row["user_id"] . "</td>
                        <td class='username'>" . $row["Name"] . "</td>
                        <td class='role'>" . $row["roles"] . "</td>
                        <td class='email'>" . $row["email"] . "</td>
                        <td class='datecreated'>" . $row["date_created"] . "</td>
                        <td class='action'>
                            <abbr title='Delete'><i class='tools fa-solid fa-trash-can'></i></abbr>
                            <abbr title='Edit'><a href='../../views/pages/edituser.php?user_id=" . $row["user_id"] . "'><i class='tools fa-solid fa-pen-to-square'></i></a></abbr>
                        </td>
                    </tr>";
                    }

                    // close MySQL connection
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </main>
    </div>

    <script>
        function deleteUser(id) {
            if (confirm("Are you sure you want to delete this user?")) {
                // send AJAX request to delete the user from the database and remove the row from the table
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "delete_user.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // remove the row from the table
                        var row = document.getElementById("user-" + id);
                        row.parentNode.removeChild(row);
                        // display success message
                        alert(xhr.responseText);
                    }
                };
                xhr.send("id=" + id);
            }
        }

        // Attach event listeners to delete buttons
        var deleteButtons = document.getElementsByClassName("tools fa-trash-can");
        for (var i = 0; i < deleteButtons.length; i++) {
            deleteButtons[i].addEventListener("click", function () {
                var userId = this.closest("tr").querySelector(".userid").textContent;
                deleteUser(userId);
            });
        }
    </script>


    <!-- MEMBER INFO PANE -->
    <div class="member-container" id="member-container">
        <header>
            <div class="head-left">
                <h3>TODA MEMBERS INFORMATION</h3>
                <p>SECRETARY VIEW</p>
            </div>
            <div class="head-right">
                <abbr title="Export Excel"><button class="compExportBtn exportBtn" id="mem-export"><i
                            class="fa-solid fa-download"></i></button></abbr>
                <div class="search-container">
                    <input type="text" class="mem-search" id="mem-search" placeholder="Search">
                    <abbr title="Unit Information"><a href="../../views/pages/unitinfo.php"><button class="mem-searchBtn"
                                id="add-unit"><i class="fa-solid fa-id-card-clip"></i></button></a></abbr>
                </div>
                <button class="addmemBtn" id="addmem-btn"><i class="fa-solid fa-plus"></i> Add Member</button>
            </div>
        </header>

        <main>
            <table id="mem-table">
                <tr>
                    <th class="id">MEM ID</th>
                    <th class="memname">NAME</th>
                    <th class="area">AREA OF OPERATION</th>
                    <th class="role">ROLE</th>
                    <th class="license">LICENSE NO.</th>
                    <th class="status">STATUS</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="mem-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // retrieve data from the MySQL table with concatenated fname and lname
                    $sql = "SELECT * FROM mem_info ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // Check if there are any members
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                            $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                            $lastName = $row["lname"];

                            if (empty($row["exname"])) {
                                $lastName .= ', ';
                            }


                            // Display the member information, including the updated mem_stat
                            echo "
        <tr id='row-" . $row["id"] . "'>
            <td class='memid'>" . $row["id"] . "</td>
            <td class='memname'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
            <td class='area'>" . $row["barangay"] . "</td>
            <td class='memrole'>" . $row["mem_role"] . "</td>
            <td class='license'>" . $row["license_no"] . "</td>
            <td class='status'>
                <div class='" . $row["mem_stat"] . "'>
                    <p>" . $row["mem_stat"] . "</p>
                </div>
            </td>
            <td class='action'>
                <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='showToastMember(" . $row["id"] . ")'></i></abbr>
                <abbr title='View'><a href='../../views/pages/viewmem.php?id=" . $row['id'] . "'><i class='fa-sharp fa-solid fa-eye'></i></a></abbr>
                <abbr title='Print Member Certification'><i class='tools fa-solid fa-print save' data-container='memcert' onclick=\"generatePDF('" . $row["id"] . "', 'memcertification.php')\"></i></abbr>
            </td>
        </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    // close MySQL connection
                    $conn->close();
                    ?>

                    <script>
                        function showToastMember(id) {
                            if (confirm("Are you sure you want to delete this member?")) {
                                // send AJAX request to delete the member from the database and remove the row from the table
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "delete_member.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function () {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        // remove the row from the table
                                        var row = document.getElementById("row-" + id);
                                        row.parentNode.removeChild(row);
                                        // display success message
                                        alert(xhr.responseText);

                                        // Refresh the current page
                                        location.reload();
                                    }
                                };
                                xhr.send("id=" + id);
                            }
                        }
                    </script>
                </tbody>
            </table>
        </main>
    </div>

    <!-- FINANCE PANE -->
    <div class="finance-container" id="finance-container">
        <header>
            <div class="head-left">
                <h3>FINANCE</h3>
                <p>TREASURER VIEW</p>
            </div>
            <div class="head-right">
                <abbr title="Export Excel"><button class="financeExportBtn exportBtn" id="finance-export"><i
                        class="fa-solid fa-download"></i></button></abbr>
                <div class="search-container">
                    <input type="text" class="user-search" id="fin-search" placeholder="Search">
                    <abbr title="Donor List"><a href="../../views/pages/viewdonors.php"><button class="user-searchBtn" id="add-donor"><i
                                class="fa-solid fa-user-plus"></i></button></a></abbr>
                </div>
                <button class="addFinanceBtn" id="addFinance-btn"><i class="fa-solid fa-plus"></i> Add Record</button>
            </div>
        </header>

        <main>
            <table id="fin-table">
                <tr>
                    <th class="id"><abbr title="Transaction Id">ID</abbr></th>
                    <th class="name">TYPE</th>
                    <th class="code">CODE</th>
                    <th class="amount">AMOUNT</th>
                    <th class="amount">DEBIT</th>
                    <th class="amount">CREDIT</th>
                    <th class="name">DATE</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id='fin-table-body'>
                    <?php

                    include 'db_conn.php';

                    $timestamp = date('Y-m-d H:i:s');

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Delete transactions associated with non-existent member IDs
                    $deleteTransactionSql = "DELETE FROM transaction_payment WHERE member_id NOT IN (SELECT id FROM mem_info)";
                    $deleteTransactionResult = $conn->query($deleteTransactionSql);

                    if ($deleteTransactionResult === false) {
                        die("Error executing the query: " . $conn->error);
                    }



                    // Remove deleted data from transaction_finance
                    $deleteSql = "DELETE tf FROM transaction_finance tf
                    LEFT JOIN transaction_donation td ON tf.transaction_code = td.transaction_code
                    LEFT JOIN transaction_contribution tc ON tf.transaction_code = tc.transaction_code
                    LEFT JOIN transaction_expenses te ON tf.transaction_code = te.transaction_code
                    LEFT JOIN transaction_payment tp ON tf.transaction_code = tp.transaction_code
                    WHERE td.transaction_code IS NULL
                    AND tc.transaction_code IS NULL
                    AND te.transaction_code IS NULL
                    AND tp.transaction_code IS NULL";

                    $deleteResult = $conn->query($deleteSql);

                    if ($deleteResult === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    $sql = "INSERT INTO transaction_finance (amount, transaction_code, account_type, transaction_date, date_created) 
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_donation
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_donation.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_contribution
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_contribution.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_expenses
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_expenses.transaction_code)
                    UNION ALL
                    SELECT amount, transaction_code, transaction_type, date_created, '$timestamp' FROM transaction_payment
                    WHERE NOT EXISTS (SELECT 1 FROM transaction_finance WHERE transaction_code = transaction_payment.transaction_code)";

                    $result = $conn->query($sql);

                    if ($result === false) {
                        die("Error executing the query: " . $conn->error);
                    }

                    $updateSql = "UPDATE transaction_finance SET ";
                    $updateSql .= "debit = CASE ";
                    $updateSql .= "WHEN account_type IN ('Donation', 'Contribution', 'Renewal', 'New Member') THEN amount ";
                    $updateSql .= "ELSE debit ";
                    $updateSql .= "END, ";
                    $updateSql .= "credit = CASE ";
                    $updateSql .= "WHEN account_type NOT IN ('Donation', 'Contribution', 'Renewal', 'New Member') THEN amount ";
                    $updateSql .= "ELSE credit ";
                    $updateSql .= "END";
                    $updateResult = $conn->query($updateSql);

                    if ($updateResult === false) {
                        die("Error executing the update query: " . $conn->error);
                    }

                    // Fetch inserted data
                    $selectSql = "SELECT *,  DATE_FORMAT(date_created, '%Y-%m-%d %h:%i %p') AS new_formatted_date FROM transaction_finance ORDER BY date_created DESC";
                    $selectResult = $conn->query($selectSql);

                    if ($selectResult->num_rows === 0) {
                        echo "No rows found.";
                    } else {

                        while ($row = $selectResult->fetch_assoc()) {

                            echo "
                    <tr>
                        <td id='id'>" . $row["ID"] . "</td>
                        <td class='name'>" . $row["account_type"] . "</td>
                        <td class='code'>" . $row["transaction_code"] . "</td>
                        <td class='amount'>&#8369;" . $row["amount"] . "</td>
                        <td class='amount'>" . $row["debit"] . "</td>
                        <td class='amount'>" . $row["credit"] . "</td>
                        <td class='name'>" . $row["new_formatted_date"] . "</td>
                        <td class='action'>" ?>

                            <?php
                            if ($row['account_type'] === 'Donation') {
                                $ViewSelectSql = "SELECT donor_id FROM transaction_donation WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['donor_id'];

                                    echo "<abbr title='View'><a href='../pages/donorinfo.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a></abbr>";
                                }
                            } else if ($row['account_type'] === 'New Member' || $row['account_type'] === 'Renewal') {
                                $ViewSelectSql = "SELECT member_id FROM transaction_payment WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['member_id'];

                                    echo "<abbr title='View'><a href='../pages/viewmem.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a></abbr>";
                                }
                            } else if ($row['account_type'] === 'Programs') {
                                $ViewSelectSql = "SELECT program_ID FROM transaction_expenses WHERE transaction_code = '" . $row['transaction_code'] . "'";
                                $ViewSelectResult = mysqli_query($conn, $ViewSelectSql);

                                if (mysqli_num_rows($ViewSelectResult) > 0) {
                                    // Matching row found, retrieve the donor_id
                                    $donationRow = mysqli_fetch_assoc($ViewSelectResult);
                                    $donorId = $donationRow['program_ID'];

                                    echo "<abbr title='View'><a href='../pages/viewevents.php?id=" . $donorId . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a></abbr>";
                                }
                            } else if ($row['account_type'] === 'Contribution') {
                                $transactionCode = $row['transaction_code'];

                                $sql = "SELECT unit_info.id
                                FROM unit_info
                                INNER JOIN transaction_contribution ON unit_info.body_no = transaction_contribution.body_no
                                WHERE transaction_contribution.transaction_code = '$transactionCode'";

                                $result = mysqli_query($conn, $sql);

                                if ($row = mysqli_fetch_assoc($result)) {
                                    $unitId = $row['id'];

                                    echo "<abbr title='View'><a href='../pages/viewunit.php?id=$unitId'><i class='tools fa-sharp fa-solid fa-eye'></i></a></abbr>";
                                }

                            }
                        }
                    }
                    $conn->close();
                    ?>

                    </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>

    <!-- COMPLAINTS PANE -->
    <div class="complain-container" id="complain-container">
        <header>
            <div class="head-left">
                <h3>COMPLAINTS</h3>
                <p>VICE PRESIDENT VIEW</p>
            </div>
            <div class="head-right">
                <div class="search-container">
                    <input type="text" class="user-search" id="comp-search" placeholder="Search">
                    <abbr title="Complainant List"><a href="../../views/pages/viewComplainants.php"><button class="user-searchBtn"
                            id="add-complainants"><i class="fa-solid fa-user-plus"></i></i></button></a></abbr>
                </div>
                <button class="addComplainBtn" id="addComplain-btn"><i class="fa-solid fa-plus"></i> New
                    Complaint</button>
            </div>
        </header>

        <main>
            <table id="complaint-table">
                <tr>
                    <th class="id"><abbr title="complain-btn Id">ID</abbr></th>
                    <th class="name">COMPLAINANT</th>
                    <th class="contact">CONTACT NO.</th>
                    <th class="name">SUBJECT TO COMPLAINT</th>
                    <th class="comp-date">DATE</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="complaint-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    // retrieve data from the MySQL table
                    $sql = "SELECT complaint_details.id AS id, CONCAT(complaint_info.fname, ' ', complaint_info.lname) AS complainant,
                    CONCAT(mem_info.fname, ' ', mem_info.lname) AS show_complaint_person,
                     complaint_info.phone, complaint_details.complaint_person, 
                    DATE_FORMAT(complaint_details.date_created, '%Y/%m/%d %h:%i %p') AS date_created FROM complaint_details 
                    INNER JOIN complaint_info ON complaint_info.id = complaint_details.complainant_id
                    LEFT JOIN mem_info ON mem_info.id = complaint_details.complaint_person
                    ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <tr id='complaint-" . $row["id"] . "'>
                            <td class='uid'>" . $row["id"] . "</td>
                            <td class='username'>" . $row["complainant"] . "</td>
                            <td class='contacts'>" . $row["phone"] . "</td>
                            <td class='complaintPerson'>" . $row["show_complaint_person"] . "</td>
                            <td class='actionDate'>" . $row["date_created"] . "</td>

                            <td class='action'>
                                <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='deleteComplaint(" . $row["id"] . ")'></i></abbr>
                                <abbr title='View'><a href='../../views/pages/viewComplaint.php?id=" . $row["id"] . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a></abbr>
                                <abbr title='Print Complaint'><i class='tools fa-solid fa-print save' data-container='complaints' onclick=\"generatePDF('" . $row["id"] . "', 'comp-report.php')\"></i></abbr>
                            </td>
                        </tr>";
                    }
                    // close MySQL connection
                    $conn->close();
                    ?>
                    <!-- Complaint User -->
                    <script>
                        function deleteComplaint(id) {
                            if (confirm("Are you sure you want to delete this Complaint?")) {
                                // send AJAX request to delete the user from the database and remove the row from the table
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "deleteComplaint.php", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function () {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        // remove the row from the table
                                        var row = document.getElementById("complaint-" + id);
                                        row.parentNode.removeChild(row);
                                        // display success message
                                        alert(xhr.responseText);

                                        // Refresh the current page
                                        location.reload();
                                    }
                                };
                                xhr.send("id=" + id);
                            }
                        }
                    </script>
                </tbody>

            </table>
        </main>
    </div>

    <!-- EVENTS & PROGRAMS PANE -->
    <div class='event-container' id='event-container'>
        <header>
            <div class='head-left'>
                <h3>EVENTS & PROGRAMS</h3>
                <p>VICE PRESIDENT VIEW</p>
            </div>
            <div class='head-right'>
                <div class='search-container'>
                    <input type='text' class='user-search' id="programs-search" placeholder='Search'>
                    <button class='user-searchBtn'><i class='fa-solid fa-magnifying-glass'></i></button>
                </div>
                <button class='addEventBtn' id='addEvent-btn'><i class='fa-solid fa-plus'></i> Add Events</button>
            </div>
        </header>

        <main>
            <table>
                <tr>
                    <th class="id"><abbr title='complain-btn Id'>ID</abbr></th>
                    <th class="title">EVENT& PROGRAM TITLE</th>
                    <th class="date">EVENT DATE</th>
                    <th class="time">TIME</th>
                    <th class="location">LOCATION</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="programs-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    // retrieve data from the MySQL table
                    $sql = "SELECT *, TIME_FORMAT(ep_start, '%h:%i %p') AS ep_time FROM `events_programs` ORDER BY date_created DESC";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "

                <tr>
                    <td class='id'>" . $row["id"] . "</td>
                    <td class='title'>" . $row["ep_title"] . "</td>
                    <td class='date'>" . $row["ep_date"] . "</td>
                    <td class='time'>" . $row["ep_time"] . "</td>
                    <td class='location'>" . $row["ep_location"] . "</td>
                    <td class='action'>
                    <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='deleteEvent(" . $row["id"] . ")'></i></abbr>
                        <abbr title='View'><a href='../../views/pages/viewevents.php?id=" . $row['id'] . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a></abbr>
                        <abbr title='Print Events'><i class='tools fa-solid fa-print save' data-container='ep' onclick=\"save_generate4('" . $row["id"] . "', 'ep.php')\"></i></abbr>
                    </td>
                </tr> ";

                    }

                    // close MySQL connection
                    $conn->close();
                    ?>
                    <script>
                        function deleteEvent(id) {
                                if (confirm("Are you sure you want to delete this Event?")) {
                                    var xhr = new XMLHttpRequest();
                                    xhr.open("POST", "../php/deleteEvent.php", true);
                                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                    location.reload();
                                    xhr.onreadystatechange = function () {
                                        if (xhr.readyState === 4 && xhr.status === 200) {
                                            console.log("ID:", id); // Debug log
                                            var row = document.getElementById("Complaint-" + id);
                                            console.log("Row:", row); // Debug log
                                            if (row) {
                                                console.log("Parent Node:", row.parentNode); // Debug log
                                                row.parentNode.removeChild(row);
                                                console.log("Event deleted successfully.");
                                                alert(xhr.responseText);
                                            } else {
                                                console.error("Row not found for ID:", id);
                                            }
                                        } else {
                                            console.error("Error: " + xhr.status);
                                        }
                                    };
                                    xhr.send("id=" + id);
                                }
                            }

                    </script>
                </tbody>
            </table>
        </main>
    </div>

    <!-- FOOTER -->
    <footer class="flex">
        <p>&copy;mtodata 2023</p>
        <div class="link-footer flex">
            <p class="border-right">PUP Institute of Technology</p>
            <!-- <a href="../../views/pages/termsofuse.php" class="border-right">Terms of Use</a> -->
            <p>Version 1.0</p>
        </div>
    </footer>

    <!-- MODALS -->
    <!-- ADD USER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addUser-modal-container" id="user-modal-container">
        <h2 class="modal-title">ADD USER</h2>
        <form action="../php/adduser.php" method="post"
            oninput='city.setCustomValidity(city.value != password.value ? "Passwords do not match." : "")'
            id="user-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="userForm-left addForm">
                    <!-- USERS ROLE -->
                    <div class="fields">
                        <label for="select-role">User's role<span> *</span></label>
                        <select name="userrole" id="select-role">
                            <option value="" selected disabled>Select Role</option>
                            <option value="President">President</option>
                            <option value="Vice President">Vice President</option>
                            <option value="Secretary">Secretary</option>
                            <option value="Treasurer">Treasurer</option>
                        </select>
                    </div>

                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="user-lastname">Lastname<span> *</span></label>
                        <input type="text" id="user-lastname" name="lastname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Dela Cruz" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="user-firstname">Firstname<span> *</span></label>
                        <input type="text" id="user-firstname" name="firstname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Juan" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="user-midname">Middlename</label>
                        <input type="text" id="user-midname" name="middlename" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Reyes">
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="user-extension">Extension Name</label>
                        <input type="text" maxlength="5" pattern="[A-Za-z]{2,5}" id="user-extension" name="extension"
                            placeholder="eg. Jr, Sr">
                    </div>
                </div>
                <!-- FORM-RIGHT -->
                <div class="userForm-right addForm">

                    <!-- USERNAME -->
                    <div class="fields">
                        <label for="user-uname">Username<span> *</span></label>
                        <input type="text" id="user-uname" name="user-uname" maxlength="25"
                            placeholder="juandelacruz123" required>
                        <span id="username-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- EMAIL -->
                    <div class="fields">
                        <label for="user-email">Email Address<span> *</span></label>
                        <input type="email" id="user-email" name="street"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="juan@example.com" required>
                        <span id="email-validation"></span> <!-- Display validation message here -->
                    </div>

                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="mem-contact">Contact no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" maxlength="11" id="user-contact" name="contact"
                            placeholder="eg. 09592220954" required>
                        <span id="contact-validation"></span> <!-- Display validation message here -->
                    </div>

                    <!-- PASSWORD -->
                    <div class="fields">
                        <label for="user-pass">Password<span> *</span></label>
                        <input type="password" id="user-pass" name="password" minlength="8" maxlength="16"
                            placeholder="8-16 characters only" required>
                    </div>
                    <!-- CONFIRM PASSWORD -->
                    <div class="fields">
                        <label for="user-confirmPass">Confirm Password<span> *</span></label>
                        <input type="password" id="user-confirmPass" name="city" required>
                    </div>

                    <!-- SEE PASSWORD -->
                    <div class="see-password-container">
                        <input class="see-pass" type="checkbox" id="see-pass">
                        <label class="see-pass-label" for="see-pass">See password</label>
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="adduser-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- WARNING TOAST -->
        <div class="warningToast-container" id="warningToast">
            <div class="warningToast-left">
                <i class="warningToast-icon fa-solid fa-circle-info"></i>
            </div>
            <div class="warningToast-right">
                <p><strong>Try Again</strong> Please select user role!</p>
            </div>
        </div>
    </div>

    <div class="warningToast-container" id="warningToast2">
        <div class="warningToast-left">
            <i class="warningToast-icon fa-solid fa-circle-info"></i>
        </div>
        <div class="warningToast-right">
            <p id="warning-con"></p>
        </div>
    </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="user-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p id="event-success"><strong>Success!</strong> User successfully added.</p>
        </div>
    </div>

    <!-- SUCCESS TOAST -->
    <div class='success-toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <!-- ADD MEMBER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addMem-modal-container" id="member-modal-container">
        <h2 class="modal-title">MEMBER REGISTRATION</h2>
        <form action="../php/addmember.php" method="post" id="member-form" enctype="multipart/form-data">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="memForm-left addForm">
                    <!-- MEMBERS ROLE -->
                    <div class="fields">
                        <label for="select-mem">Member's role<span> *</span></label>
                        <select name="role" id="select-mem">
                            <option value="" selected disabled>Select Role</option>
                            <option value="Officer">Officer</option>
                            <option value="Driver">Driver only</option>
                            <option value="Operator">Operator only</option>
                        </select>
                    </div>
                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="mem-lastname">Lastname<span> *</span></label>
                        <input type="text" id="mem-lastname" name="lastname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Dela Cruz" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="mem-firstname">Firstname<span> *</span></label>
                        <input type="text" id="mem-firstname" name="firstname" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Juan" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="mem-midname">Middlename</label>
                        <input type="text" id="mem-midname" name="middlename" maxlength="25" pattern="[A-Za-z ]{2,25}"
                            placeholder="Reyes">
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="mem-extension">Extension Name</label>
                        <input type="text" id="mem-extension" name="extension" maxlength="5" pattern="[A-Za-z1-9]{2,5}"
                            placeholder="eg. Jr, Sr">
                    </div>

                    <!-- GENDER -->
                    <div class="fields">
                        <label for="select-gender">Sex<span> *</span></label>
                        <select name="gender" id="select-gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="none">Prefer not to say</option>
                        </select>
                    </div>

                </div>

                <!-- FORM-RIGHT -->
                <div class="memForm-right addForm">
                    <!-- STREET -->
                    <div class="fields">
                        <label for="mem-street">Street<span> *</span></label>
                        <input type="text" maxlength="25" id="mem-street" name="street" required>
                    </div>

                    <!-- BARANGAY -->
                    <div class="fields">
                        <label for="mem-brgy">Barangay<span> *</span></label>
                        <input type="text" maxlength="25" id="mem-brgy" name="barangay" required>
                    </div>
                    <!-- CITY -->
                    <div class="fields">
                        <label for="mem-city">City<span> *</span></label>
                        <input type="text" maxlength="25" pattern="[A-Za-z ]{2,25}" id="mem-city" name="city" required>
                    </div>
                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="mem-contact">Contact no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" maxlenght="11" id="mem-contact" name="contact"
                            placeholder="eg. 09592220954" required>
                        <span id="mem-contact-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- LICENSE NUMBER -->
                    <div class="fields">
                        <label for="mem-license">License no.<span> *</span></label>
                        <input type="text" id="mem-license" pattern="[A-Z]{1}[0-9]{2}-[0-9]{2}-[0-9]{6}" name="license"
                            placeholder="eg. A34-34-345645" required>
                        <span id="license-validation"></span> <!-- Display validation message here -->
                    </div>
                    <!-- USER PROFILE PICTURE -->
                    <div class="fields">
                        <label for="mem-pic">Upload Profile Icon</label>
                        <input type="file" accept=".png, .jpg, .jpeg" id="mem-pic" name="profile">
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="member-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- WARNING TOAST -->
        <div class="warningToast-container" id="mem-warningToast">
            <div class="warningToast-left">
                <i class="warningToast-icon fa-solid fa-circle-info"></i>
            </div>
            <div class="warningToast-right">
                <p><strong>Try Again</strong> Please select member role!</p>
            </div>
        </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="mem-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p><strong>Success!</strong> Member successfully added.</p>
        </div>
    </div>

    <!-- ADD FINANCE MODAL -->
    <div class='bg' id='bg'></div>
    <div class='addFinance-modal-container' id='finance-modal-container'>
        <h2 class='modal-title'>ADD FINANCIAL RECORD</h2>
        <form action='addfinancerecord.php' method="POST" id='finance-form'>
            <div class='form-container'>
                <!-- FORM LEFT -->
                <div class='financeForm-left addForm'>
                    <!-- FINANCE TYPE -->
                    <div class='fields'>
                        <label for='select-type'>Finance Type<span> *</span>
                        </label>
                        <select name='type' id='select-type' onchange="disableInputs()" required>
                            <option value='' selected disabled>Select Account type</option>
                            <option value='Butaw'>Butaw/Contribution</option>
                            <option value='Donation'>Donation</option>
                            <option value='Expenses'>Expenses</option>
                        </select>
                    </div>
                    <!-- BODY NO. -->
                    <div class='fields'>
                        <label for='bodynum'>Body No.<span> *</span></label>
                        <select id='body-no' name='bodynum' required disabled>
                            <option selected disabled value=''>Select Body No.</option>
                            <?php

                            include
                                "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sqlBody = "SELECT * FROM unit_info";
                            $resultBody = $conn->query($sqlBody);


                            while ($rowBody = $resultBody->fetch_assoc()) {

                                echo "<option value='" . $rowBody["body_no"] . "'>" . $rowBody["body_no"] . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>

                    <!-- DONOR NAME -->
                    <div class='field-container'>
                        <div class='fields donor'>
                            <label for='donor-select'>Donor Name</label>
                            <select name='donor_select' id='donor-select' onchange='handleDonorSelection()' required
                                disabled>
                                <option selected disabled value=''>Select Donor</option>
                                <?php

                                // connect to the MySQL database
                                include "db_conn.php";

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM donor_info";

                                $result = $conn->query($sql);


                                while ($row = $result->fetch_assoc()) {

                                    $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                    $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                    $lastName = $row["lname"];

                                    if (empty($row["exname"])) {
                                        $lastName .= ', ';
                                    }

                                    echo "<option value='" . $row["id"] . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                                }
                                // close MySQL connection
                                $conn->close();
                                ?>
                            </select>
                        </div>

                        <div class='fields'>
                            <a href='../../views/pages/adddonor.php'><input type='button' id='donorbtn'
                                    class="add-donor" value='Add donor'></a>
                        </div>
                    </div>
                </div>

                <!-- FORM-RIGHT -->
                <div class='financeForm-right addForm'>
                    <div class='fields'>
                        <label for='expense-type'>Expense Type</label>
                        <select name='expense_type' id='expense-type' required disabled onchange="toggleRemarks()">
                            <option selected disabled value=''>Select Expense type</option>
                            <option value='Expenses - Rent'>Rent</option>
                            <option value='Expenses - Electricity'>Electricity</option>
                            <option value='Expenses - Water'>Water</option>
                            <option value='Expenses - '>Others</option>
                        </select>
                    </div>

                    <!-- ACCOUNT ID -->
                    <div class='fields' id="rem-container">
                        <label for='remarks'>Remarks<span> *</span></label>
                        <input type='text' id='remarks' name='remarks' disabled>
                    </div>


                    <!-- ACCOUNT ID -->
                    <div class='fields'>
                        <label for='trans-date'>Transaction date<span> *</span></label>
                        <input type='date' id='trans-date' name='trans_date' max="<?php echo date('Y-m-d'); ?>" required
                            disabled>
                    </div>

                    <!--  AMOUNT  -->
                    <div class='fields'>
                        <label for='amount'>Amount<span> *</span></label>
                        <input type='number' id='amount' name='amount' pattern="[0-9]*" placeholder='₱' required
                            disabled>
                    </div>

                    <div class='btn-container'>
                        <input type='button' value='Cancel' class='cancel-btn' id='finance-cancel' formnovalidate>
                        <button class='save-btn' id='save-btn' type='submit'>Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- ADD COMPLAINT MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addComplaint-modal-container" id="complaint-modal-container">
        <h2 class="modal-title">ADD COMPLAINT</h2>
        <form action="../php/complaints.php" method="post" id="complaint-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="complaintForm-left addForm">
                    <div class='fields complaint'>
                        <label for='complaint-select' required>Complainant Name<span> *</span></label>
                        <select name='complaint-select' id='complaint-select' required>
                            <option selected value='' required>Select Complainant</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM complaint_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                $lastName = $row["lname"];

                                if (empty($row["exname"])) {
                                    $lastName .= ', ';
                                }

                                $complaintId = $row["id"]; // Retrieve the ID from the complaint_info table
                            
                                echo "<option value='" . $complaintId . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <!-- New Complainant -->
                    <div class='fields'>
                        <div class="comp-contain">
                            <label for="date-incident">Add new complainant:<span></span></label>
                            <a href="../../views/pages/insertComplainant.php"><input type='button'
                                    class="add-complainant" value='New Complainant'></a>
                        </div>
                    </div>

                    <!-- SUBJECT -->
                    <div class="fields">
                        <label for="ComplaintSubject" required>Person to Complain<span> *</span></label>
                        <select name='ComplaintSubject' id='ComplaintSubject' required>
                            <option selected value='' required>Select Person to Complain</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM mem_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                $lastName = $row["lname"];

                                if (empty($row["exname"])) {
                                    $lastName .= ', ';
                                }

                                $mem_info = $row["id"]; // Retrieve the ID from the complaint_info table
                            
                                echo "<option value='" . $mem_info . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                            }

                            $id = $_GET['id'];

                            if (!empty($id)) {
                                $sql = "SELECT *
                                                    FROM mem_info
                                                    LEFT JOIN unit_info ON mem_info.id = unit_info.member_id
                                                    WHERE mem_info.id = '$id'";

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo '<script>
                                                    var complaintSubjectBodySelect = document.getElementById("complaintSubjectBody");
                                                    complaintSubjectBodySelect.disabled = false;
                                                    var option = document.createElement("option");
                                                    option.value = "' . $row["id"] . '";
                                                    option.textContent = "' . $row["body_no"] . '";
                                                    complaintSubjectBodySelect.innerHTML = "";
                                                    complaintSubjectBodySelect.appendChild(option);
                                                    </script>';
                                } else {
                                    echo '<script>document.getElementById("complaintSubjectBody").disabled = true;</script>';
                                }
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>

                    <!-- BODY NUMBER -->
                    <div class="fields">
                        <label for="complaintSubjectBody">Body no.</label>
                        <select name='complaintSubjectBody' id='complaintSubjectBody' disabled>
                            <option selected value=''>Select Body Number</option>
                            <?php
                            // connect to the MySQL database
                            include "db_conn.php";

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM unit_info";

                            $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                $unit_info = $row["id"]; // Retrieve the ID from the complaint_info table
                                echo "<option value='" . $unit_info . "'>" . $row["body_no"] . "</option>";
                            }

                            // close MySQL connection
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div class="is-bud">
                        <input type="checkbox" id="activateSelect" onchange="toggleSelect()" />
                        <label for="activateSelect">Activate</label>
                    </div>

                    <style>

                    </style>

                </div>

                <!-- FORM-RIGHT -->
                <div class="complaintForm-right addForm">

                    <!-- DESCRIPTION -->
                    <div class="fields">
                        <label for="desc">Description<span> *</span></label>
                        <textarea name="desc" id="desc" cols="30" rows="9" maxlength="350" onkeyup="countChar(this)"
                            required></textarea>
                    </div>

                    <!-- Date and Time -->
                    <div class="timeDate-container">
                        <!-- TIME -->
                        <div class="fields">
                            <label for="time-incident">Time of Incident<span> *</span></label>
                            <input type="time" id="time-incident" name="time-incident" required>
                        </div>

                        <!-- DATE -->
                        <div class="fields">
                            <label for="date-incident">Date of Incident<span> *</span></label>
                            <input type="date" id="date-incident" name="date-incident" required>
                        </div>
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="complaint-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- WARNING TOAST -->
    <div class="warningToast-container" id="cmplnt-warningToast">
        <div class="warningToast-left">
            <i class="warningToast-icon fa-solid fa-circle-info"></i>
        </div>
        <div class="warningToast-right">
            <p><strong>Try Again</strong> Placeholder warning!</p>
        </div>
    </div>

    <!-- TOAST -->
    <div class="successToast-container" id="cmplnt-successToast">
        <div class="successToast-left">
            <i class="successToast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="successToast-right">
            <p><strong>Success!</strong> Complaint successfully submitted.</p>
        </div>
    </div>

    <!-- ADD EVENTS & PROGRAMS -->
    <div class='bg' id='bg'></div>
    <div class='addEvent-modal-container' id='event-modal-container'>
        <h2 class='modal-title'>SCHEDULE AN EVENT OR PROGRAM</h2>
        <form action='addevents.php' method='POST' id='event-form'>
            <div class='form-container'>
                <!-- FORM LEFT -->
                <div class='complaintForm-left addForm'>
                    <!-- EVENT TITLE -->
                    <div class='fields'>
                        <label for='event-title'>Title<span> *</span></label>
                        <input type='text' id='event-title' name='event-title' placeholder='eg. Meeting' required>
                    </div>

                    <!-- DESCRIPTION -->
                    <div class='fields'>
                        <label for='event-desc'>Description<span> *</span></label>
                        <textarea name='desc' id='event-desc' cols='30' rows='14'></textarea>
                    </div>
                </div>
                <!-- FORM-RIGHT -->
                <div class='complaintForm-right addForm'>

                    <!--EVENT OR PROGRAM BUDGET-->
                    <div class='fields'>
                        <label for='events-budget'>Budget</label>
                        <input type='text' id='events-budget' pattern="[0-9]*" name='events-budget' disabled>
                    </div>

                    <div class='is-bud'>
                        <input type='checkbox' id='events-isbudget' name='events-isbudget'
                            onchange='handleBudgetCheckboxChange()'>
                        <label for='events-isbudget'>With Budget</label>
                    </div>

                    <!-- EVENT ORGANIZER -->
                    <div class='fields'>
                        <label for='events-organizer'>Organizer</label>
                        <input type='text' id='events-organizer' name='events-organizer'>
                    </div>

                    <!-- EVENT LOCATION -->
                    <div class='fields'>
                        <label for='events-location'>Location</label>
                        <input type='text' id='events-location' name='events-location' required>
                    </div>

                    <div class='timeDate-container'>
                        <!-- TIME -->
                        <div class='fields'>
                            <label for='events-time'>Time<span> *</span></label>
                            <input type='time' id='events-time' name='events-time' required>
                        </div>

                        <!-- DATE -->
                        <div class='fields'>
                            <label for='events-date'>Date<span> *</span></label>
                            <input type='date' id='events-date' name='events-date' required>
                        </div>
                    </div>

                    <div class='btn-container'>
                        <input type='button' value='Cancel' class='cancel-btn' id='event-cancel' formnovalidate>
                        <button class='save-btn' id='save-btn' type='submit'>Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- TOAST NOTIFACTIONS -->
    <!-- CONFIRM DELETE TOAST -->
    <div class="toast-container">
        <p>Are you sure you want to permanently delete this user?</p>
        <div class="toast-btn-container">
            <button>Confirm</button>
            <button>Cancel</button>
        </div>
    </div>

    <!-- LOADING -->
    <div id="loading-container">
        <div class="background-wrapper">
        </div>
        <div class="logo-container">
            <img src="../../public/assets/mtodata_logo.png" alt="Logo" class="logo">
            <div class="loading-bar"></div>
        </div>
    </div>


    <!-- SCRIPTS -->
    <!-- Javascript Library for Excel -->
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
    <!-- Main Script for Dashboard -->
    <script src="../../services/dashboard.js"></script>
    <!-- Script for Exporting into Excel -->
    <script src="../../services/exportMember.js"></script>
    <script src="../../services/exportFinance.js"></script>
    <!-- Script for date today  -->
    <script src="../../services/datetoday.js"></script>
    <!-- Script for Loading Screen -->
    <script src="../../services/loading.js"></script>
    <script src="../../services/monthly.js"></script>
</body>

</html>
