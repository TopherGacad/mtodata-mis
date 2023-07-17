<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR OF NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // connect to the MySQL database
    include "../php/db_conn.php";
    
    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    include "../views/php/db_conn.php";

    // Start of Complaint Module

    // Get Data from form submission
    $complaintLastName = $_POST["complaintLastname"];
    $complaintFirstName = $_POST["complaintFirstname"];
    $complaintMiddleName = $_POST["complaintMiddlename"];
    $complaintExtensionName = $_POST["extension"];
    $complaintGender = $_POST["gender"];
    $contactNumber = $_POST["contact"];

    // Complainant Details
    $sql = "INSERT INTO complaint_info (lname, fname, mname, exname, gender, phone) VALUES ('$complaintLastName', '$complaintFirstName', '$complaintMiddleName', '$complaintExtensionName', '$complaintGender', '$contactNumber')";
        if (mysqli_query($conn, $sql)) {
            $complaintId = mysqli_insert_id($conn);
            header("Location: ../php/dashboard.php?id=$complaint_id&success=true%complaint");
            exit();
        } else {
            echo "Error inserting complaint information: " . mysqli_error($conn) . "<br>";
        }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Complaintant</title>

        <!-- STYLESHEET -->
        <link rel="stylesheet" href="../../public/css/editpages.css">
        <!-- WEB ICON -->
        <link rel="icon" href="../../public/assets/browse_logo.png">
        <!-- FONT AWESOME/ICONS -->
        <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>

        <div class="head-container">
            <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
        </div>

        <div class="content-container">
            <form method="post" id="complaint-form">
                <div class="ot-header">
                    <h3><a href="../../views/php/dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>New Complainant Details</h3>
                    <div class="btn-container">
                        <a href="../../views/php/dashboard.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                        <button class="update-btn modal-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>

                <!-- <input type="hidden" name="id" value=""> -->
                <div class="user-container">
                    <h3>Complainant Information</h3>
                    <div class="main">
                        <div class="left-side-emp section">
                        <!-- LASTNAME -->
                            <div class="fields">
                                <label for="complaintLastname">Lastname<span> *</span></label>
                                <input type="text" id="complaintLastname" name="complaintLastname" placeholder="Dela Cruz" required>
                            </div>

                            <!-- FIRSTNAME -->
                            <div class="fields">
                                <label for="complaintFirstname">Firstname<span> *</span></label>
                                <input type="text" id="complaintFirstname" name="complaintFirstname" placeholder="Juan" required>
                            </div>

                            <!-- MIDNAME -->
                            <div class="fields">
                                <label for="complaintMiddlename">Middlename</label>
                                <input type="text" id="complaintMiddlename" name="complaintMiddlename" placeholder="Reyes">
                            </div>
                        </div>

                        <div class="right-side-emp section">
                            <!-- EXTENSION NAME -->
                            <div class="fields">
                                <label for="extension">Extension Name</label>
                                <input type="text" pattern="[A-Za-z.]{2,5}" id="extension" name="extension" placeholder="eg. Jr, Sr">
                            </div>

                            <!-- GENDER -->
                            <div class="fields">
                                <label for="gender">Sex<span> *</span></label>
                                <select name="gender" id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="none">Prefer not to say</option>
                                </select>
                            </div>

                            <!-- CONTACT NUMBER -->
                            <div class="fields">
                                <label for="contact">Contact no.<span> *</span></label>
                                <input type="text" pattern="[0-9]{11}" id="contact" name="contact" placeholder="eg. 09592220954" required>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src='../../services/editComplaint.js'></script>
    </body>
</html>
