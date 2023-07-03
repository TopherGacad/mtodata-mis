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
    <title>Add Donor</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/edituser.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>

</head>

<body>

    <!-- ERROR TOAST -->
    <div class='toast-container'>
        <div class='toast-left'>
            <i class='toast-icon fa-solid fa-triangle-exclamation'></i>
        </div>
        <div class='toast-right'>
            <p id='error-con'></p>
        </div>
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

    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form action='insertdonor.php' method='POST'>
            <div class='ot-header'>
                <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>Add Donor
                    Information</h3>
                <div class='btn-container'>
                    <a href='../../views/php/dashboard.php'><input type='button' value='Cancel'
                            class='cancelBtn modal-btn' id='cancel-btn'></a>
                    <button class='update-btn modal-btn' id='user-update' type='submit' name='user-update'>Save</button>
                </div>
            </div>

            <!-- <input type='hidden' name='id' value=''> -->
            <div class='user-container'>
                <h3>Personal Information</h3>
                <div class='main'>
                    <div class='left-side-emp section'>
                        <!-- LASTNAME -->
                        <div class='fields'>
                            <label for='donor-last'> Lastname <span> *</span></label>
                            <input type='text' id='donor-last' name='donor_last' placeholder='Dela Cruz' required>
                        </div>

                        <!-- FIRSTNAME -->
                        <div class='fields'>
                            <label for='donor-first'> Firstname <span> *</span></label>
                            <input type='text' id='donor-first' name='donor_first' placeholder='Juan' required>
                        </div>

                        <!-- SEX -->
                        <div class='fields'>
                            <label for='donor-sex'>Sex <span> *</span></label>
                            <select name='donor-sex' id='donor_sex' required>
                                <option selected disabled value=''>Select gender</option>
                                <option value='Male'>Male</option>
                                <option value='Female'>Female</option>
                            </select>
                        </div>
                    </div>

                    <div class='right-side-emp section'>
                        <!-- MIDDLENAME -->
                        <div class='fields'>
                            <label for='donor-mid'> Middlename</label>
                            <input type='text' id='donor-mid' name='donor_mid' placeholder='Reyes'>
                        </div>

                        <!-- EXTENSION NAME -->
                        <div class='fields'>
                            <label for='donor-ext'> Extension name</label>
                            <input type='text' id='donor-ext' name='donor_ext' placeholder='eg. Jr, Sr'>
                        </div>
                    </div>
                </div>
            </div>

            <div class='profile-container'>
                <h3>Contact Info</h3>
                <div class='main'>
                    <div class='left-side-profile section'>

                        <!-- EMAIL ADDRESS -->
                        <div class='fields'>
                            <label for='donor-email'>Email</label>
                            <input type='email' name='donor-email' id='donor-email'>
                        </div>
                    </div>

                    <div class='right-side-profile section'>



                        <!-- CONTACT NUMBER -->
                        <div class='fields'>
                            <label for='donor-contact'>Contact Number</label>
                            <input type='text' name='donor-contact' id='donor_contact' required maxlength="11">
                        </div>
                    </div>
                </div>
            </div>

            <div class='container'>
                <h3>Address Info</h3>
                <div class='main'>
                    <div class='section'>
                        <div class='fields'>
                            <label for='donor-street'>Street <span> *</span></label>
                            <input type='text' name='donor-street' id='donor_street' required>
                        </div>

                        <div class='fields'>
                            <label for='donor-brgy'>Barangay <span> *</span></label>
                            <input type='text' name='donor-brgy' id='donor_brgy' required>
                        </div>
                    </div>
                    <div class='section'>
                        <div class='fields'>
                            <label for='donor-city'>City <span> *</span></label>
                            <input type='text' name='donor-city' id='donor_city' required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src='../../services/editMember.js'></script>

</body>

</html>