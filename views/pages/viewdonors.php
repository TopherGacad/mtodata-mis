<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../html/login.html');
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header('location: login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Donor's Information</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/unitinfo.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>

</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='ot-header'>
        <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>Donor's Information</h3>
        <div class='btn-container'>
            <input type='text' class='unit-search' id='unit-search' placeholder='Search'>
            <a href='../../views/php/dashboard.php'><input type='button' value='Cancel' class='cancelBtn modal-btn'
                    id='cancel-btn'></a>
            <a href='../../views/pages/adddonor.php'><button class='addunit-btn modal-btn' id='add-unit' type='submit'
                    name='add-unit'><i class='fa-solid fa-plus'></i> Add Donor</button></a>
        </div>
    </div>

    <div class='content-container'>
        <table id='unit-table'>
            <tr>
                <th class='id'>ID</th>
                <th class='name'>Name</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Street</th>
                <th>Barangay</th>
                <th>City</th>
                <th>Date Created</th>
                <th class='action'>Action</th>
            </tr>

            <tbody id='unit-table-body'>
                <?php

                // connect to the MySQL database
                include "../php/db_conn.php";

                // Retrieve member information from the database using the $memberID
                $sql = "SELECT *, DATE_FORMAT(date_created, '%Y-%m-%d %h:%i %p') AS new_formatted_date FROM donor_info";
                $result = mysqli_query($conn, $sql);

                if ($result->num_rows === 0) {
                    echo "No rows found.";
                } else {

                    while ($row = $result->fetch_assoc()) {

                        $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                        $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                        $lastName = $row["lname"];

                        if (empty($row["exname"])) {
                            $lastName .= ', ';
                        }

                        echo "
                <tr>
                    <td class='id'>" . $row['id'] . "</td>
                    <td>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
                    <td>" . $row['gender'] . "</td>
                    <td>" . $row['phone'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['street'] . "</td>
                    <td>" . $row['barangay'] . "</td>
                    <td>" . $row['city'] . "</td>
                    <td>" . $row['new_formatted_date'] . "</td>
                    <td class='action'>
                        <i class='tools fa-solid fa-trash-can'></i>
                        <a href=''><i class='fa-sharp fa-solid fa-pen-to-square'></i></a>
                    </td>
                </tr>";
                    }
                }

                // close MySQL connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script src='../../services/unitinfo.js'></script>
</body>

</html>