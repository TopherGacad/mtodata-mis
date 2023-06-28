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
    $memberID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM mem_info WHERE id = '$memberID'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo 'User does not exist';
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
    }
} else {
    echo 'Invalid member ID';
    exit();
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Edit Member Info</title>

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
        <form id='edit-mem' action='updatemem.php?id=<?php echo $memberID; ?>' method='POST'
            enctype='multipart/form-data'>
            <div class='ot-header'>
                <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>Edit Member
                    Information</h3>
                <div class='btn-container'>
                    <a href='viewuser.php?id=<?php echo $memberID?>'><input type='button' value='Discard'
                            class='cancelBtn modal-btn' id='cancel-btn'></a>
                    <button id='member-update' class='update-btn modal-btn' type='submit' disabled>Update</button>
                </div>
            </div>

            <div class='pic-container'>
                <h3>Profile Picture</h3>
                <div class='main'>
                    <div class='section left-pic'>
                        <?php

                        if (empty($row['profilepic'])) {
                            echo "<img src='../../public/assets/defuser_icon.png' alt='' id='profileImage'>";
                        } else {

                            echo "
                            <img src='../../public/images/" . $row['profilepic'] . "' alt='' id='profileImage'>
                            ";
                        }


                        ?>
                    </div>
                    <div class='section right-pic'>
                        <!-- PROFILE PICTURE -->
                        <div class='fields'>
                            <label for='mem-pic'>Upload Profile Icon</label>
                            <input type='file' accept='.png, .jpg, .jpeg' id='mem-pic' name='profile'>
                        </div>

                        <!-- MEMBER STATUS -->
                        <div class='fields'>
                            <label for='mem-status'>Member Status</label>
                            <input type='text' name='mem-status' onclick="toggle(this, 'mem-status-select')"
                                id='mem-status-input' value='<?php echo $row['mem_stat']; ?>'>
                            <select name='mem-status' onchange="toggle(this, 'mem-status-input')" id='mem-status-select'
                                style='display:none'>
                                <option value='' selected disabled>Select Status</option>
                                <option value='Active'>Active</option>
                                <option value='Expired'>Expired</option>
                            </select>
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
                            <input type='text' id='mem-firstname' name='firstname' value='<?php echo $row['fname']; ?>'>
                        </div>

                        <!-- MIDNAME -->
                        <div class='fields'>
                            <label for='mem-midname'>Middlename</label>
                            <input type='text' id='mem-midname' name='middlename' value='<?php echo $row['mname']; ?>'>
                        </div>

                        <!-- LASTNAME -->
                        <div class='fields'>
                            <label for='mem-lastname'>Lastname<span> *</span></label>
                            <input type='text' id='mem-lastname' name='lastname' value='<?php echo $row['lname']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-emp section'>
                        <!-- EXTENSION NAME -->
                        <div class='fields'>
                            <label for='mem-extension'>Extension Name</label>
                            <input type='text' id='mem-extension' name='extension'
                                value='<?php echo $row['exname']; ?>'>
                        </div>

                        <!-- MEMBERS ROLE -->
                        <div class='fields'>
                            <label for='role'>Member's role<span> *</span></label>
                            <input type='text' name='role' id='select-mem-input' onclick="toggle(this, 'select-mem-select')" value='<?php echo $row['mem_role']; ?>'>
                            <select name='role' id='select-mem-select' onchange="toggle(this, 'select-mem-input')" style='display:none'>
                                <option value='' selected disabled>Select Status</option>
                                <option value='Driver'>Driver</option>
                                <option value='Operator'>Operator</option>
                                <option value='Both'>Both</option>
                                <option value='Officer'>Officer</option>
                            </select>
                        </div>

                        <!-- GENDER -->
                        <div class='fields'>
                            <label for='select-gender'>Sex<span> *</span></label>
                            <input type='text' name='gender' id='select-gender' value='<?php echo $row['gender']; ?>'>
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
                            <input type='text' id='mem-street' name='street' value='<?php echo $row['street']; ?>'>
                        </div>

                        <!-- BARANGAY -->
                        <div class='fields'>
                            <label for='mem-brgy'>Barangay<span> *</span></label>
                            <input type='text' id='mem-brgy' name='barangay' value='<?php echo $row['barangay']; ?>'>
                        </div>

                        <!-- CITY -->
                        <div class='fields'>
                            <label for='mem-city'>City<span> *</span></label>
                            <input type='text' id='mem-city' name='city' value='<?php echo $row['city']; ?>'>
                        </div>
                    </div>

                    <div class='right-side-profile section'>
                        <h3>Contact Information</h3>
                        <!-- CONTACT NUMBER -->
                        <div class='fields'>
                            <label for='mem-contact'>Contact no.<span> *</span></label>
                            <input type='text' id='mem-contact' name='contact' placeholder="09XXXXXXXXX" maxlength="11"
                                value='<?php echo $row['phone']; ?>'>
                        </div>

                        <!-- LICENSE NUMBER -->
                        <div class='fields'>
                            <label for='mem-license'>License no.<span> *</span></label>
                            <input type='text' id='mem-license' name='license' oninput="handleInput()"
                                value='<?php echo $row['license_no']; ?>'>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src='../../services/editMember.js'></script>
</body>

</html>