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
    <link rel='stylesheet' href='../../public/css/donorinfo.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>

</head>

<body>
    <main>
        <div class='head-container'>
            <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
        </div>

        <div class='ot-header'>
            <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>Donor's Information
            </h3>
            <div class='btn-container'>
                <input type='text' class='unit-search' id='unit-search' placeholder='Search'>
                <a href='../../views/php/dashboard.php'><input type='button' value='Cancel' class='cancelBtn modal-btn'
                        id='cancel-btn'></a>
                <a href='../../views/pages/adddonor.php'><button class='addunit-btn modal-btn' id='add-unit'
                        type='submit' name='add-unit'><i class='fa-solid fa-plus'></i> Add Donor</button></a>
            </div>
        </div>

        <div class='content-container'>
            <table id='unit-table'>
                <tr>
                    <th class='id'>ID</th>
                    <th class='name'>Name</th>
                    <th class="gender">Gender</th>
                    <th class="phone">Phone</th>
                    <th class="email">Email</th>
                    <th class="street">Street</th>
                    <th class="barangay">Barangay</th>
                    <th class="city">City</th>
                    <th class="date">Date Created</th>
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
                    <td class='name'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
                    <td class='gender'>" . $row['gender'] . "</td>
                    <td class='phone'>" . $row['phone'] . "</td>
                    <td class='email'>" . $row['email'] . "</td>
                    <td class='street'>" . $row['street'] . "</td>
                    <td class='barangay'>" . $row['barangay'] . "</td>
                    <td class='city'>" . $row['city'] . "</td>
                    <td class='date'>" . $row['new_formatted_date'] . "</td>
                    <td class='action'>
                        <i class='tools fa-solid fa-trash-can'></i>
                        <a href='donorinfo.php?id=" . $row['id'] . "'><i class='tools fa-sharp fa-solid fa-eye'></i></a>
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
    </main>
    <script src='../../services/unitinfo.js'></script>
</body>

</html>