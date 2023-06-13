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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../../public/css/edituser.css">
    <!-- WEB ICON -->
    <link rel="icon" href="../../public/assets/browse_logo.png">
    <!-- FONT AWESOME/ICONS -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="head-container">
        <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
    </div>

    <div class="content-container">
        <form action="../php/adduser.php" method="post" oninput='city.setCustomValidity(city.value != barangay.value ? "Passwords do not match." : "")' id="user-form">
            <div class="ot-header">
                <h3><a href="../../views/php/dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>Edit User Account</h3>
                <div class="btn-container">
                    <a href="../../views/php/dashboard.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                    <button class="update-btn modal-btn" id="user-update" type="submit" name="user-update">Update</button>
                </div>
            </div>

            <!-- <input type="hidden" name="id" value=""> -->
            <div class="user-container">
                <h3>Personal Information</h3>
                <div class="main">
                    <div class="left-side-emp section">
                        <!-- FIRSTNAME -->
                        <div class="fields">
                            <label for="user-firstname">Firstname<span> *</span></label>
                            <input type="text" id="user-firstname" name="firstname" placeholder="Firstname" required>
                        </div>

                        <!-- MIDNAME -->
                        <div class="fields">
                            <label for="user-midname">Middlename</label>
                            <input type="text" id="user-midname" name="middlename" placeholder="Middlename">
                        </div>

                         <!-- LASTNAME -->
                        <div class="fields">
                            <label for="user-lastname">Lastname<span> *</span></label>
                            <input type="text" id="user-lastname" name="lastname" placeholder="Lastname" required>
                        </div>
                    </div>

                    <div class="right-side-emp section">
                          <!-- USERS ROLE -->
                          <div class="fields">
                            <label for="select-role">User's role<span> *</span></label>
                            <select name="userrole" id="select-role">
                                <option value="" selected disabled>Select Role</option>
                                <option value="President">President</option>
                                <option value="Vice President">Vice President</option>
                                <option value="secretary">Secretary</option>
                                <option value="Treasurer">Treasurer</option>
                                <option value="Auditor">Auditor</option>
                            </select>
                        </div>

                         <!-- EXTENSION NAME -->
                        <div class="fields">
                            <label for="user-extension">Extension Name</label>
                            <input type="text" pattern="[A-Za-z.]{2,5}" id="user-extension" name="extension" placeholder="eg. Jr, Sr">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="profile-container">
                <h3>Contact Information</h3>
                <div class="main">
                    <div class="left-side-profile section">
                       
                    </div>

                    <div class="right-side-profile section">
                        <!-- CONTACT NUMBER -->
                        <div class="fields">
                            <label for="mem-contact">Contact no.<span> *</span></label>
                            <input type="text" pattern="[0-9]{11}" id="mem-contact" name="contact" placeholder="eg. 09592220954" required>
                        </div>

                         <!-- EMAIL -->
                        <div class="fields">
                            <label for="user-email">Email Adress<span> *</span></label>
                            <input type="text" id="user-email" name="street" required>
                        </div>

                         <!-- USERNAME -->
                         <div class="fields">
                            <label for="user-uname">Username <span> *</span></label>
                            <input type="text" id="user-uname" name="user-uname" required>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="password-container">
                <h3>Password</h3>
                <div class="main">
                    <div class="section">
                        <!-- PASSWORD -->
                        <div class="fields">
                            <label for="user-pass">Password<span> *</span></label>
                            <input type="password" id="user-pass" name="barangay" minlength="8" maxlength="12" required>
                        </div>

                         <!-- SEE PASSWORD -->
                         <div class="see-password-container">
                            <input class="see-pass" type="checkbox" id="see-pass">
                            <label class="see-pass-label" for="see-pass">See password</label>
                        </div>
                    </div>
                    <div class="section">
                        <!-- CONFIRM PASSWORD -->
                        <div class="fields">
                            <label for="user-confirmPass">Confirm Password<span> *</span></label>
                            <input type="password" id="user-confirmPass" name="city" required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>