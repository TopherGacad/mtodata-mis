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
    <title>Edit Member Info</title>

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
        <form action="" method="post">
            <div class="ot-header">
                <h3><a href="../../views/php/dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>Edit Member Information</h3>
                <div class="btn-container">
                    <a href="../../views/pages/editunit.php"><input type="button" value="View Unit" class="view modal-btn" formnovalidate></a>
                    <a href="../../views/php/dashboard.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                    <button class="update-btn modal-btn" id="member-update" type="submit" name="member-update">Update</button>
                </div>
            </div>

            <!-- <input type="hidden" name="id" value=""> -->
            <div class="pic-container">
                <h3>
                    Profile Picture
                </h3>
                <div class="main">
                    <div class="section left-pic">
                        <img src="../../public/assets/defuser_icon.png" alt="" id="profileImage">
                    </div>
                    <div class="section right-pic">
                        <!-- PROFILE PICTURE -->
                        <div class="fields">
                            <label for="mem-pic">Upload Profile Icon</label>
                            <input type="file" accept=".png, .jpg, .jpeg" id="mem-pic" name="profile">
                        </div>

                        <!-- MEMBER STATUS -->
                        <div class="fields">
                            <label for="mem-status">Member Status</label>
                            <select name="mem-status" id="mem-status">
                                <option value="" selected disabled>Select Status</option>
                                <option value="Active">Active Member</option>
                                <option value="Transferred">Expired</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-container">
                <h3>Personal Information</h3>
                <div class="main">
                    <div class="left-side-emp section">
                        <!-- FIRSTNAME -->
                        <div class="fields">
                            <label for="mem-firstname">Firstname<span> *</span></label>
                            <input type="text" id="mem-firstname" name="firstname" placeholder="Firstname" required>
                        </div>

                         <!-- MIDNAME -->
                        <div class="fields">
                            <label for="mem-midname">Middlename</label>
                            <input type="text" id="mem-midname" name="middlename" placeholder="Middlename">
                        </div>

                        <!-- LASTNAME -->
                        <div class="fields">
                            <label for="mem-lastname">Lastname<span> *</span></label>
                            <input type="text" id="mem-lastname" name="lastname" placeholder="Lastname" required>
                        </div>
                    </div>

                    <div class="right-side-emp section">
                        <!-- EXTENSION NAME -->
                        <div class="fields">
                            <label for="mem-extension">Extension Name</label>
                            <input type="text" pattern="[A-Za-z.]{2,5}" id="mem-extension" name="extension" placeholder="eg. Jr, Sr">
                        </div>

                        <!-- MEMBERS ROLE -->
                        <div class="fields">
                            <label for="select-mem">Member's role<span> *</span></label>
                            <select name="role" id="select-mem">
                                <option value="" selected disabled>--- Select Role ---</option>
                                <option value="Officer">Officer</option>
                                <option value="Driver">Driver only</option>
                                <option value="Operator">Operator only</option>
                                <option value="Both">Driver & Operator</option>
                            </select>
                        </div>

                        <!-- GENDER -->
                        <div class="fields">
                            <label for="select-gender">Sex<span> *</span></label>
                            <select name="gender" id="select-gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="none">Prefer not to say</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="profile-container">
                <h3>Address</h3>
                <div class="main">
                    <div class="left-side-profile section">
                       
                    </div>

                    <div class="right-side-profile section">
                        <!-- STREET -->
                        <div class="fields">
                            <label for="mem-street">Street<span> *</span></label>
                            <input type="text" id="mem-street" name="street" required>
                        </div>

                        <!-- BARANGAY -->
                        <div class="fields">
                            <label for="mem-brgy">Barangay<span> *</span></label>
                            <input type="text" id="mem-brgy" name="barangay" required>
                        </div>
                        <!-- CITY -->
                        <div class="fields">
                            <label for="mem-city">City<span> *</span></label>
                            <input type="text" id="mem-city" name="city" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="password-container">
                <h3>Contact Information</h3>
                <div class="main">
                    <div class="section">
                       <!-- CONTACT NUMBER -->
                        <div class="fields">
                            <label for="mem-contact">Contact no.<span> *</span></label>
                            <input type="text" pattern="[0-9]{11}" id="mem-contact" name="contact" placeholder="eg. 09592220954" required>

                        </div>
                    </div>
                    <div class="section">
                        <!-- LICENSE NUMBER -->
                        <div class="fields">
                            <label for="mem-license">License no.<span> *</span></label>
                            <input type="text" id="mem-license" pattern="[A-Z]{1}[0-9]{2}-[0-9]{2}-[0-9]{6}" name="license" placeholder="eg. A34-34-345645" required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="../../services/editMember.js"></script>
</body>
</html>