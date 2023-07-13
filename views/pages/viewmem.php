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
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>View Member Info</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/editpages.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form action='' method='post'>
            <div class='ot-header'>
                <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>View Member
                    Information</h3>
                <div class='btn-container'>

                    <?php

                    // connect to the MySQL database
                    include "../php/db_conn.php";

                    // Check if the ID query parameter is set
                    if (isset($_GET['id'])) {
                        $memberID = $_GET['id'];

                        // Retrieve member information from the database using the $memberID
                        $sql = "SELECT * FROM mem_info WHERE id = '$memberID'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) === 0) {
                            echo 'user does not exist';
                            exit();
                        } else {

                            $row = mysqli_fetch_assoc($result);

                            if ($row['mem_role'] === 'Driver' || empty($row['mem_role'])) {
                                echo "<a href='../../views/pages/editunit.php'><input type='button' value='View Unit'
                                class='view modal-btn' id='hide-button' formnovalidate hidden></a>";
                            } else {

                                // Check if the member ID exists in the unit_info table
                                $unitID = $row['id'];
                                $unitInfoSQL = "SELECT * FROM unit_info WHERE mem_id = '$unitID'";
                                $unitInfoResult = mysqli_query($conn, $unitInfoSQL);

                                $row101 = mysqli_fetch_assoc($unitInfoResult);

                                if (mysqli_num_rows($unitInfoResult) === 0) {
                                    // Redirect the user to addunit.php
                                    echo "<a href='../../views/pages/addunit.php?id=" . $row['id'] . "'><input type='button' value='View Unit' class='view modal-btn' id='hide-button' formnovalidate></a>";
                                } else {
                                    // Redirect the user to editunit.php
                                    echo "<a href='../../views/pages/editunit.php?id=" . $row101['id'] . "'><input type='button' value='View Unit' class='view modal-btn' id='hide-button' formnovalidate></a>";
                                }

                            }

                            echo "
                    <a href='../../views/pages/editmem.php?id=" . $row['id'] . "'><input type='button' value='Edit'
                            class='cancelBtn modal-btn' formnovalidate></a>
                </div>
            </div>

            <div class='pic-container'>
                <h3>
                    Profile Picture
                </h3>
                <div class='main'>
                <div class='section left-pic'>";

                            if (empty($row['profilepic'])) {
                                echo "<img src='../../public/assets/defuser_icon.png' alt='' id='profileImage'>";
                            } else {

                                echo "
                    <img src='../../public/images/" . $row['profilepic'] . "' alt='' id='profileImage'>
                    ";
                            }

                            echo "
                    </div>
                    <div class='section right-pic'>
                         <!-- MEMBER STATUS DISPLAY -->
                            <div class='fields'>
                                <div class='" . $row["mem_stat"] . "'>
                                    <p>" . $row["mem_stat"] . "</p>
                                </div>
                            </div>
                           
                         <!-- MEMBER STATUS -->
                                <div class='fields'>
                                    <label for='mem-status'>Member Status</label>
                                    <input type='text' name='mem-status' id='mem-status' readonly value='" . $row['mem_stat'] . "'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='user-container'>
                        <h3>Personal Information</h3>
                        <div class='main'>
                            <div class='left-side-emp section'>
                                <!-- FIRSTNAME -->
                                <div class='fields'>
                                    <label for='mem-firstname'>Firstname<span> *</span></label>
                                    <input type='text' id='mem-firstname' name='firstname' value='" . $row['fname'] . "' readonly>
                                </div>
        
                                <!-- MIDNAME -->
                                <div class='fields'>
                                    <label for='mem-midname'>Middlename</label>
                                    <input type='text' id='mem-midname' name='middlename' value='" . $row['mname'] . "' readonly>
                                </div>
        
                                <!-- LASTNAME -->
                                <div class='fields'>
                                    <label for='mem-lastname'>Lastname<span> *</span></label>
                                    <input type='text' id='mem-lastname' name='lastname' value='" . $row['lname'] . "' readonly>
                                </div>
                            </div>
        
                            <div class='right-side-emp section'>
                                <!-- EXTENSION NAME -->
                                <div class='fields'>
                                    <label for='mem-extension'>Extension Name</label>
                                    <input type='text' id='mem-extension' name='extension' value='" . $row['exname'] . "' readonly>
                                </div>
        
                                <!-- MEMBERS ROLE -->
                                <div class='fields'>
                                    <label for='select-mem'>Member's role<span> *</span></label>
                                    <input type='text'name='role' id='select-mem' readonly value='" . $row['mem_role'] . "'>
                                </div>
        
                                <!-- GENDER -->
                                <div class='fields'>
                                    <label for='select-gender'>Sex<span> *</span></label>
                                    <input type='text'name='gender' id='select-gender' readonly value='" . $row['gender'] . "'>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class='profile-container'>
        
                        <div class='main'>
                            <div class='left-side-profile section'>
                                <h3>Address</h3>
                                <!-- STREET -->
                                <div class='fields'>
                                    <label for='mem-street'>Street<span> *</span></label>
                                    <input type='text' id='mem-street' name='street' readonly value='" . $row['street'] . "'>
                                </div>
        
                                <!-- BARANGAY -->
                                <div class='fields'>
                                    <label for='mem-brgy'>Barangay<span> *</span></label>
                                    <input type='text' id='mem-brgy' name='barangay' readonly value='" . $row['barangay'] . "'>
                                </div>
                                <!-- CITY -->
                                <div class='fields'>
                                    <label for='mem-city'>City<span> *</span></label>
                                    <input type='text' id='mem-city' name='city' readonly value='" . $row['city'] . "'>
                                </div>
                            </div>
        
                            <div class='right-side-profile section'>
                                <h3>Contact Information</h3>
                                <!-- CONTACT NUMBER -->
                                <div class='fields'>
                                    <label for='mem-contact'>Contact no.<span> *</span></label>
                                    <input type='text' id='mem-contact' name='contact' readonly value='" . $row['phone'] . "'> 
        
                                </div>
                                <!-- LICENSE NUMBER -->
                                <div class='fields'>
                                    <label for='mem-license'>License no.<span> *</span></label>
                                    <input type='text' id='mem-license' name='license' readonly value='" . $row['license_no'] . "'>
                                </div>
                            </div>
                        </div>
                    </div>";



                        }
                    }
                    ?>

                    <div class='profile-container'>
                        <h3>Finance Logs</h3>
                        <div class='main'>

                            <table class="finance-logs">
                                <thead>
                                    <tr>
                                        <th>Transaction Code</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php

                                    include "../php/db_conn.php";

                                    if (isset($_GET['id'])) {
                                        $memberID = $_GET['id'];

                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        // Query to retrieve rows from transaction_payment table
                                        $sql = "SELECT * FROM transaction_payment WHERE member_id = '$memberID'
                                ORDER BY date_created DESC";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // Loop through each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo "
                                        <tr>
                                        <td>" . $row['transaction_code'] . "</td>
                                    <td>" . $row['transaction_type'] . "</td>
                                    <td>" . $row['amount'] . "</td>
                                    <td>" . $row['date_created'] . "</td>
                                    </tr>
                                        ";
                                            }
                                        } else {
                                            echo "<tr><td colspan='4'><i>No Transaction found</i></td></tr>";
                                        }

                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
        </form>

    </div>


    <!-- SUCCESS TOAST -->
    <div class='toast-container' id='toast-success'>
        <div class='toast-left-success'>
            <i class='toast-icon fa-solid fa-circle-check'></i>
        </div>
        <div class='toast-right'>
            <p id='success-con'></p>
        </div>
    </div>

    <script src='../../services/viewmem.js'></script>
</body>

</html>