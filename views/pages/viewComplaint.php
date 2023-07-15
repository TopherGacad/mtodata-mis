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
    <title>View Complaints</title>

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
        <form>
            <div class='ot-header'>
                <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>View Complaints</h3>
                    <div class='btn-container'>
                        <?php

                        // connect to the MySQL database
                        include "../php/db_conn.php";

                        // Check if the ID query parameter is set
                        if (isset($_GET['id'])) {
                            $complaint_id = $_GET['id'];
                        }
                            echo "
                            <a href='../../views/pages/editcomplaint.php?id=" . $complaint_id . "'><input type='button' value='Edit' name='complaint-update'
                                class='update-btn modal-btn' id='complaint-update'></a>
                            ";
                            ?>
                    </div>
                </div>

                <div class='user-container'>
                    <h3>Complaint Information</h3>

                    <?php
                        $sql = "SELECT complaint_info.id, CONCAT(complaint_info.fname, ' ', complaint_info.lname, ' ', complaint_info.exname) AS complainant, complaint_info.gender, complaint_info.phone
                        FROM complaint_info
                        INNER JOIN complaint_details ON complaint_info.id = complaint_details.complainant_id
                        WHERE complaint_details.id = $complaint_id";

                        $result = mysqli_query($conn, $sql); // Execute the query and assign the result to $result

                        if (!$result) {
                            echo "Error executing the query: " . mysqli_error($conn);
                        } else {
                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);

                            echo "
                            <!-- COMPLAINANT INFORMATION -->
                            <div class='main'>
                                <div class='left-side-emp section'>
                                    <div class='fields'>
                                        <label for='complainant_name'>Complainant Name</label>
                                        <input type='text' id='complainant_name' name='complainant_name' readonly value='" . $row['complainant'] . "'>
                                        <br>
                                        <label for='complainant_gender'>Gender</label>
                                        <input type='text' id='complainant_gender' readonly name='complainant_gender' value='" . $row['gender'] . "'>
                                </div>
                                </div>
                                <div class='right-side-emp section'>
                                    <div class='fields'>
                                        <label for='complainant_phone'>Phone</label>
                                        <input type='text' id='complainant_phone' readonly name='complainant_phone' value='" . $row['phone'] . "'>
                                    </div>
                                </div>
                            </div>
                            ";  
                            }
                        }               
                    ?>
                    </div>

                    <?php
                        $sql1 = "SELECT CONCAT(mem_info.fname, ' ', mem_info.lname) AS show_complaint_person, 
                        complaint_details.details, unit_info.body_no AS show_body_no,
                        DATE_FORMAT(complaint_details.date_created, '%Y/%m/%d') AS date_stamp, 
                        DATE_FORMAT(complaint_details.date_created, ' %h:%i %p') AS time_stamp 
                        FROM complaint_details 
                        LEFT JOIN mem_info ON mem_info.id = complaint_details.complaint_person
                        LEFT JOIN unit_info ON unit_info.id = complaint_details.body_no
                        WHERE complaint_details.id = $complaint_id"; // Execute the query and assign the result to $result

                        $result = mysqli_query($conn, $sql1);

                        if (!$result) {
                            echo "Error executing the query: " . mysqli_error($conn);
                        } else {
                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);

                            echo "
                        <div class='profile-container'>
                            <h3>Complaint Details</h3>
                            <div class='main'>
                                <div class='left-side-profile section'>
                                    <!-- COMPLAINT PERSON -->
                                    <div class='fields'>
                                        <label for='complaintPerson'>Complaint Person<span> </span></label>
                                        <input type='text' id='complaintPerson' name='complaintPerson' readonly value='" . $row['show_complaint_person'] . "'>
                                    </div>
                                    <div class='fields'>
                                        <label for='event-time'>Date<span> </span></label>
                                        <input type='timestamp' id='event-time' name='event-time' readonly value='" . $row['date_stamp'] . "'>
                                    </div>
                                </div>
                                <div class='right-side-profile section'>
                                    <div class='fields'>
                                        <label for='event-time'>Body Number<span> </span></label>
                                        <input type='timestamp' id='event-time' name='event-time' readonly value='" . $row['show_body_no'] . "'>
                                    </div>
                                    <!-- EVENT TIME -->
                                    <div class='fields'>
                                        <label for='event-time'>Time<span> </span></label>
                                        <input type='timestamp' id='event-time' name='event-time' readonly value='" . $row['time_stamp'] . "'>
                                    </div>
                                </div>
                            </div>
                        <!-- EVENT DESCRIPTION -->
                        <div class='fields'>
                            <label for='event-description'>Description<span> </span></label>
                            <textarea name='event-description' id='event-description' readonly>" . $row['details'] . "</textarea>
                        </div>
                    </div>
                        ";
                        }
                    }
                    ?>
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

    <script src='../../services/editcomplaint.js'></script>
</body>

</html>