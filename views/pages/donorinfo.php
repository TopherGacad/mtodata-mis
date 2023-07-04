<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $donorID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM donor_info WHERE id = '$donorID'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo 'User does not exist';
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
    }
} else {
    echo 'Invalid member Donor ID';
    exit();
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>View Donor Info</title>

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
                <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>View Donor
                    Information</h3>
                <div class='btn-container'>
                    <a href='../../views/pages/updatedonorinfo.php?id=<?php echo $donorID ?>'><input type='button'
                            value='Edit' class='cancelBtn modal-btn' formnovalidate></a>
                </div>
            </div>


            <div class='user-container'>
                <h3>Personal Information</h3>
                <div class='main'>
                    <div class='left-side-emp section'>
                        <!-- FIRSTNAME -->
                        <div class='fields'>
                            <label for='donor-firstname'>Firstname<span> *</span></label>
                            <input type='text' id='donor-firstname' name='firstname' readonly
                                value='<?php echo $row['fname']; ?>'>
                        </div>

                        <!-- MIDNAME -->
                        <div class='fields'>
                            <label for='donor-midname'>Middlename</label>
                            <input type='text' id='donor-midname' name='middlename' readonly
                                value='<?php echo $row['mname']; ?>'>
                        </div>

                        <!-- LASTNAME -->
                        <div class='fields'>
                            <label for='donor-lastname'>Lastname<span> *</span></label>
                            <input type='text' id='donor-lastname' name='lastname' readonly
                                value='<?php echo $row['lname']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-emp section'>
                        <!-- EXTENSION NAME -->
                        <div class='fields'>
                            <label for='donor-extension'>Extension Name</label>
                            <input type='text' id='donor-extension' name='extension' readonly
                                value='<?php echo $row['exname']; ?>'>
                        </div>

                        <!-- GENDER -->
                        <div class='fields'>
                            <label for='select-gender'>Sex<span> *</span></label>
                            <input type='text' name='gender' id='select-gender' readonly
                                value='<?php echo $row['gender']; ?>'>
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
                            <label for='donor-street'>Street<span> *</span></label>
                            <input type='text' id='donor-street' name='street' readonly
                                value='<?php echo $row['street']; ?>'>
                        </div>

                        <!-- BARANGAY -->
                        <div class='fields'>
                            <label for='donor-brgy'>Barangay<span> *</span></label>
                            <input type='text' id='donor-brgy' name='barangay' readonly
                                value='<?php echo $row['barangay']; ?>'>
                        </div>

                        <!-- CITY -->
                        <div class='fields'>
                            <label for='donor-city'>City<span> *</span></label>
                            <input type='text' id='donor-city' name='city' readonly value='<?php echo $row['city']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-profile section'>
                        <h3>Contact Information</h3>
                        <!-- CONTACT NUMBER -->
                        <div class='fields'>
                            <label for='donor-contact'>Contact no.<span> *</span></label>
                            <input type='text' id='donor-contact' name='contact' readonly placeholder="09XXXXXXXXX"
                                maxlength="11" value='<?php echo $row['phone']; ?>'>
                        </div>

                        <!-- EMAIL NUMBER -->
                        <div class='fields'>
                            <label for='donor-email'>Email<span> *</span></label>
                            <input type='email' id='donor-email' readonly name='email'
                                value='<?php echo $row['email']; ?>'>
                        </div>
                    </div>
                </div>
            </div>

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