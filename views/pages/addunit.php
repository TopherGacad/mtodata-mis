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
    <title>Add Unit</title>

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
        <form>
            <div class="ot-header">
                <h3><a href="../../views/php/dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>Add Unit Information</h3>
                <div class="btn-container">
                    <a href="../../views/php/dashboard.php"><input type="button" value="Cancel" class="cancelBtn modal-btn" id="cancel-btn"></a>
                    <button class="update-btn modal-btn" id="user-update" type="submit" name="user-update">Save</button>
                </div>
            </div>

            <!-- <input type="hidden" name="id" value=""> -->
            <div class="user-container">
                <h3>Personal Information</h3>
                <div class="main">
                    <div class="left-side-emp section">
                        <div class="fields">
                            <label for="add-unit">Member Name <span> *</span></label>
                            <select name="add_unit" id="add-unit" required>
                                <option value=""selected disabled>Select Member</option>
                                <option value="">Firstname Lastname1</option>
                                <option value="">Firstname Lastname2</option>
                            </select>
                        </div>
                    </div>

                    <div class="right-side-emp section">
                          
                    </div>
                </div>
            </div>
            
            <div class="profile-container">
                <h3>Sidecar Information</h3>
                <div class="main">
                    <div class="left-side-profile section">
                        <!-- BODY NO. -->
                        <div class="fields">
                            <label for="unit-bodyno">Body No. <span> *</span></label>
                            <input type="text" id="unit-bodyno" name="unitbody_no" required>
                        </div>

                        <!-- BODY COLOR -->
                        <div class="fields">
                            <label for="unit-bodycolor">Body Color <span> *</span></label>
                            <input type="text" id="unit-bodycolor" name="unitbody_color" required>
                        </div>

                        <!-- FRANCHISE NO. -->
                        <div class="fields">
                            <label for="unit_franno">Franchise No. <span> *</span></label>
                            <input type="text" id="unit-franno" name="unitfran_no" required>
                        </div>
                    </div>

                    <div class="right-side-profile section">

                        <!-- FRANCHISE DATE ISSUED -->
                        <div class="fields">
                            <label for="unit-franissue">Franchise Date issued <span> *</span></label>
                            <input type="date" id="unit-franissue" name="unitfran_issue" required>
                        </div>
                        
                        <!-- FRANCHISE DATE VALID -->
                        <div class="fields">
                            <label for="unit-franvalid">Franchise Date Valid <span> *</span></label>
                            <input type="date" id="unit-franvalid" name="unitfran_valid" required>
                        </div>

                        <!-- AREA CODE -->
                        <div class="fields">
                            <label for="unit-area">Area Code <span> *</span></label>
                            <input type="text" id="unit-area" name="unit_area" requuired>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <h3>Motorcycle Information</h3>
                <div class="main">
                    <div class="section">
                       <div class="fields">
                            <label for="">Motor No. <span> *</span></label>
                            <input type="text" required>
                       </div>

                       <div class="fields">
                            <label for="">Chasis No. <span> *</span></label>
                            <input type="text" required>
                       </div>

                       <div class="fields">
                            <label for="">Plate No. <span> *</span></label>
                            <input type="text" required>
                       </div>
                    </div>
                    <div class="section">
                        <div class="fields">
                            <label for="">LTO OR <span> *</span></label>
                            <input type="text" required>
                       </div>

                       <div class="fields">
                            <label for="">LTO CR <span> *</span></label>
                            <input type="text" required>
                       </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <h3>Other Info</h3>
                <div class="main">
                    <div class="section">
                        <div class="fields">
                            <label for="">District <span> *</span></label>
                            <input type="text" required>
                        </div>
                    </div>
                    <div class="section">
                        <div class="fields">
                            <label for="">Control Plate <span> *</span></label>
                            <input type="text" required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>