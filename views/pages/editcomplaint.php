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
    <title>Edit Complaints</title>

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
                <h3><a href="../../views/php/dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>Edit Complaints Details</h3>
                <div class="btn-container">
                    <a href="../../views/php/dashboard.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                    <button class="update-btn modal-btn" id="complaint-update" type="submit" name="complaint-update">Update</button>
                </div>
            </div>

            <!-- <input type="hidden" name="id" value=""> -->
            <div class="user-container">
                <h3>Complainant Information</h3>
                <div class="main">
                    <div class="left-side-emp section">
                       <!-- FIRSTNAME -->
                        <div class="fields">
                            <label for="complainant-firstname">Firstname<span> *</span></label>
                            <input type="text" id="complaintFirstname" name="complaintFirstname" placeholder="Firstname">
                        </div>

                        <!-- MIDNAME -->
                        <div class="fields">
                            <label for="complaintMiddlename">Middlename</label>
                            <input type="text" id="complaintMiddlename" name="complaintMiddlename" placeholder="Middlename">
                        </div>

                       <!-- LASTNAME -->
                        <div class="fields">
                            <label for="complaintLastname">Lastname<span> *</span></label>
                            <input type="text" id="complaintLastname" name="complaintLastname" placeholder="Lastname">
                        </div>
                    </div>

                    <div class="right-side-emp section">
                        <!-- EXTENSION NAME -->
                        <div class="fields">
                            <label for="EditCompExtension">Extension Name</label>
                            <input type="text" pattern="[A-Za-z.]{2,5}" id="EditCompExtension" name="extension" placeholder="eg. Jr, Sr">
                        </div>

                        <!-- GENDER -->
                        <div class="fields">
                            <label for="EditCompGender">Sex<span> *</span></label>
                            <select name="gender" id="EditCompGender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="none">Prefer not to say</option>
                            </select>
                        </div>

                        <!-- CONTACT NUMBER -->
                        <div class="fields">
                            <label for="EditCompContact">Contact no.<span> *</span></label>
                            <input type="text" pattern="[0-9]{11}" id="EditCompContact" name="contact" placeholder="eg. 09123456789">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="profile-container">
                <h3>Person to Complaint Details</h3>
                <div class="main">
                    <div class="left-side-profile section">
                       
                    </div>

                    <div class="right-side-profile section">
                       <!-- SUBJECT -->
                        <div class="fields">
                            <label for="EditCompSub">Person to Complain<span> *</span></label>
                            <input type="text" id="EditCompSub" name="EditCompSub">
                        </div>

                        <!-- BODY NUMBER -->
                        <div class="fields">
                            <label for="EditCompSubBody">Body no.<span> *</span></label>
                            <input type="text" id="EditCompSubBody" name="EditCompSubBody">
                        </div>
                    </div>
                </div>
            </div>

            <div class="password-container">
                <h3>Complaint Description</h3>
                <div class="main">
                    <div class="section">
                        <!-- TIME -->
                        <div class="fields">
                            <label for="time-incident">Time of Incident<span> *</span></label>
                            <input type="time" id="edit-time-incident" name="edit-time-incident">
                        </div>

                        <!-- DATE -->
                        <div class="fields">
                            <label for="date-incident">Date of Incident<span> *</span></label>
                            <input type="date" id="edit-date-incident" name="edit-date-incident">
                        </div>
                    </div>
                    <div class="section">
                        <!-- DESCRIPTION -->
                        <div class="fields">
                            <label for="editComplaintDescription">Description<span> *</span></label>
                            <textarea name="editComplaintDescription" id="editComplaintDescription" cols="30" rows="9" maxlength="350"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>