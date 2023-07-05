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

date_default_timezone_set('Asia/Manila');

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Add Unit</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/unitinfo.css'>
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
            <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>Unit
                Information</h3>
            <div class='btn-container'>
                <input type='text' class='unit-search' id='unit-search' placeholder='Search'>
                <a href='../../views/php/dashboard.php'><input type='button' value='Cancel' class='cancelBtn modal-btn'
                        id='cancel-btn'></a>
                <a href='../../views/pages/addunit.php'><button class='addunit-btn modal-btn' id='add-unit'
                        type='submit' name='add-unit'><i class='fa-solid fa-plus'></i> Add Unit</button></a>
            </div>
        </div>

        <div class='content-container'>
            <table id='unit-table'>
                <tr>
                    <th class='id'>ID</th>
                    <th class='name'>Name</th>
                    <th>Body No.</th>
                    <th>Franch No.</th>
                    <th>Date issued</th>
                    <th>Date Valid</th>
                    <th>Area code</th>
                    <th>Motor No.</th>
                    <th>Chasis No.</th>
                    <th>OR</th>
                    <th>CR</th>
                    <th>Plate No.</th>
                    <th>Body Color</th>
                    <th class='district'>District</th>
                    <th>Control Plate</th>
                    <th>Date Created</th>
                    <th class='action'>Action</th>
                </tr>

                <tbody id='unit-table-body'>

                    <?php

                    // connect to the MySQL database
                    include "../php/db_conn.php";

                        // Retrieve member information from the database using the $memberID
                        $sql = "SELECT *,  DATE_FORMAT(date_created, '%Y-%m-%d %h:%i %p') AS new_formatted_date FROM `unit_info`";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) === 0) {
                            echo 'Record does not exist';
                            exit();
                        } else {

                            while ($row = mysqli_fetch_assoc($result)) {

                            $memID = $row['mem_id'];

                            $sql1 = "SELECT * FROM `mem_info` WHERE id = '$memID'";

                            $result1 = $conn->query($sql1);


                            while ($row1 = $result1->fetch_assoc()) {

                                $middleInitial = !empty($row1["mname"]) ? trim($row1["mname"][0]) . '.' : '';
                                $extensionName = !empty($row1["exname"]) ? ' ' . $row1["exname"] . '., ' : '';
                                $firstname = $row1["fname"];
                                $lastName = $row1["lname"];

                                if (empty($row1["exname"])) {
                                    $lastName .= ', ';
                                }
                            } ?>

                            <tr>
                                <td class='id'>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td><?php echo $lastName . $extensionName . $firstname . " " . $middleInitial ?></td>
                                <td><?php echo $row['body_no']; ?></td>
                                <td><?php echo $row['franchise_no']; ?></td>
                                <td><?php echo $row['date_issue']; ?></td>
                                <td><?php echo $row['date_valid']; ?></td>
                                <td><?php echo $row['area_code']; ?></td>
                                <td><?php echo $row['motor_no']; ?></td>
                                <td><?php echo $row['chasis_no']; ?></td>
                                <td><?php echo $row['lto_or']; ?></td>
                                <td><?php echo $row['lto_cr']; ?></td>
                                <td><?php echo $row['plate_no']; ?></td>
                                <td><?php echo $row['body_color']; ?></td>
                                <td><?php echo $row['district']; ?></td>
                                <td><?php echo $row['control_plate']; ?></td>
                                <td><?php echo $row['new_formatted_date']; ?></td>
                                <td class='action'>
                                    <a href='../../views/pages/viewunit.php?id=<?php echo $row['id'];?>
                    '><i class='tools fa-sharp fa-solid fa-eye'></i></a>
                        </td> <?php }
                    }
                    ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <script src='../../services/unitinfo.js'></script>
</body>

</html>