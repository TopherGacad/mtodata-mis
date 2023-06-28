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
    <link rel="stylesheet" href="../../public/css/editpages.css">
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
                            <input type="text" id="complainant-firstname" name="complaintFirstname" placeholder="Firstname" required>
                        </div>

                        <!-- MIDNAME -->
                        <div class="fields">
                            <label for="complainant-midname">Middlename</label>
                            <input type="text" id="complainant-midname" name="complaintMiddlename" placeholder="Middlename">
                        </div>

                       <!-- LASTNAME -->
                        <div class="fields">
                            <label for="complainant-lastname">Lastname<span> *</span></label>
                            <input type="text" id="complainant-lastname" name="complaintLastname" placeholder="Lastname" required>
                        </div>
                    </div>

                    <div class="right-side-emp section">
                        <!-- EXTENSION NAME -->
                        <div class="fields">
                            <label for="complainant-extension">Extension Name</label>
                            <input type="text" pattern="[A-Za-z.]{2,5}" id="complainant-extension" name="extension" placeholder="eg. Jr, Sr">
                        </div>

                        <!-- GENDER -->
                        <div class="fields">
                            <label for="complainant-gender">Sex<span> *</span></label>
                            <select name="gender" id="complainant-gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="none">Prefer not to say</option>
                            </select>
                        </div>

                        <!-- CONTACT NUMBER -->
                        <div class="fields">
                            <label for="complainant-contact">Contact no.<span> *</span></label>
                            <input type="text" pattern="[0-9]{11}" id="complainant-contact" name="contact" placeholder="eg. 09592220954" required>
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
                            <label for="subject">Person to Complain<span> *</span></label>
                            <input type="text" id="subject" name="subject">
                        </div>

                        <!-- BODY NUMBER -->
                        <div class="fields">
                            <label for="subject-bodyNum">Body no.<span> *</span></label>
                            <input type="text" id="subject-bodyNum" name="subject-bodyNum">
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
                            <input type="time" id="time-incident" name="time-incident">
                        </div>

                        <!-- DATE -->
                        <div class="fields">
                            <label for="date-incident">Date of Incident<span> *</span></label>
                            <input type="date" id="date-incident" name="date-incident">
                        </div>
                    </div>
                    <div class="section">
                        <!-- DESCRIPTION -->
                        <div class="fields">
                            <label for="desc">Description<span> *</span></label>
                            <textarea name="desc" id="desc" cols="30" rows="9" maxlength="350"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>