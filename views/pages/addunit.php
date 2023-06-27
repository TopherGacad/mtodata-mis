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
    <title>Add Unit</title>

    <!-- STYLESHEET -->
    <link rel='stylesheet' href='../../public/css/addunit.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>

</head>

<body>

    <!-- ERROR TOAST -->
    <div class="errortoast-container">
        <div class="toast-left">
            <i class="toast-icon fa-solid fa-triangle-exclamation"></i>
        </div>
        <div class="toast-right">
            <p id='error-con'></p>
        </div>
    </div>

    <!-- SUCCESS TOAST -->
    <div class="toast-container" id="toast-success">
        <div class="toast-left-success">
            <i class="toast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="toast-right">
            <p id='success-con'></p>
        </div>
    </div>
    
    <div class='head-container'>
        <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
    </div>

    <div class='content-container'>
        <form name='addunit_form' method='POST' action='insertunit.php' onsubmit='return validate_form()'>
            <div class='ot-header'>
                <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>Add Unit
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
                        <div class='fields'>
                            <label for='add-unit'>Member Name <span> *</span></label>
                            <select name='add_unit' id='add-unit' required>
                                <option value='' selected disabled>Select Member</option>

                                <?php

                                // connect to the MySQL database
                                include "../php/db_conn.php";

                                //retrieve data from input fields   
                                
                                // check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // data retrieving for member's name
                                $sql = "SELECT * FROM mem_info WHERE (mem_role = 'Operator' OR mem_role = 'Both')";
                                $result = $conn->query($sql);


                                while ($row = $result->fetch_assoc()) {
                                    $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                                    $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                                    $lastName = $row["lname"];

                                    if (empty($row["exname"])) {
                                        $lastName .= ', ';
                                    }
                                    echo "<option value='" . $row['id'] . "'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</option>";
                                }

                                // close MySQL connection
                                $conn->close();
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class='right-side-emp section'>

                    </div>
                </div>
            </div>

            <div class='profile-container'>
                <h3>Unit Information</h3>
                <div class='main'>
                    <div class='left-side-profile section'>

                        <!-- BODY NO. -->
                        <div class='fields'>
                            <label for='unit-bodyno'>Body No. <span id='error_1'> *</span></label>
                            <input type='text' id='unit-bodyno' name='unitbody_no' oninput="validate_isNum()" required>
                        </div>

                        <!-- BODY COLOR -->
                        <div class='fields'>
                            <label for='unit-bodycolor'>Body Color <span> *</span></label>
                            <select name='unitbody_color' id='unit-bodycolor' required>
                                <option selected disabled value="">Select Color</option>
                                <option value='Blue'>Blue</option>
                                <option value='Red'>Red</option>
                                <option value='Orange'>Orange</option>
                                <option value='Yellow'>Yellow</option>
                                <option value='Green'>Green</option>
                                <option value='Indigo'>Indigo</option>
                                <option value='Violet'>Violet</option>
                                <option value='Purple'>Purple</option>
                                <option value='Pink'>Pink</option>
                                <option value='Silver'>Silver</option>
                                <option value='Gold'>Gold</option>
                                <option value='Beige'>Beige</option>
                                <option value='Brown'>Brown</option>
                                <option value='Grey/Gray'>Grey/Gray</option>
                                <option value='Black'>Black</option>
                                <option value='White'>White</option>
                            </select>
                        </div>

                        <!-- FRANCHISE NO. -->
                        <div class='fields'>
                            <label for='unit_franno'>Franchise No. <span id='error_2'> *</span></label>
                            <input type='text' id='unit-franno' name='unitfran_no' oninput="validate_isNum()" required>
                        </div>
                    </div>

                    <div class='right-side-profile section'>

                        <!-- FRANCHISE DATE ISSUED -->
                        <div class='fields'>
                            <label for='unit-franissue'>Franchise Date issued <span> *</span></label>
                            <input type='date' id='unit-franissue' name='unitfran_issue' max="<?= date('Y-m-d') ?>"
                                onchange="updateUnitFranvalid()" required>
                        </div>

                        <!-- FRANCHISE DATE VALID -->
                        <div class='fields'>
                            <label for='unit-franvalid'>Franchise Date Valid</label>
                            <input type='date' id='unit-franvalid' name='unitfran_valid' READONLY>
                        </div>


                        <!-- AREA CODE -->
                        <div class='fields'>
                            <label for='unit-area'>Area Code <span id='error_4'> *</span></label>
                            <input type='text' id='unit-area' name='unit_area' oninput="validate_isNum()" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class='container'>
                <h3>Motorcycle Information</h3>
                <div class='main'>
                    <div class='section'>
                        <div class='fields'>
                            <label for='unit_motorno'>Motor No. <span id='error_3'> *</span></label>
                            <input type='text' id='unit-motorno' name='unit_motorno' oninput="validate_isNum()"
                                required>
                        </div>

                        <div class='fields'>
                            <label for='unit_chasis'>Chasis No. <span> *</span></label>
                            <input type='text' id='unit-chasis' name='unit_chasis' required>
                        </div>

                        <div class='fields'>
                            <label for='unit_plateno'>Plate No. <span> *</span></label>
                            <input type='text' id='unit-plateno' name='unit_plateno' required>
                        </div>
                    </div>
                    <div class='section'>
                        <div class='fields'>
                            <label for='unit_OR'>LTO OR <span> *</span></label>
                            <input type='text' id='unit-OR' name='unit_OR' required>
                        </div>

                        <div class='fields'>
                            <label for='unit_CR'>LTO CR <span> *</span></label>
                            <input type='text' id='unit-CR' name='unit_CR' required>
                        </div>
                    </div>
                </div>
            </div>

            <div class='container'>
                <h3>Other Info</h3>
                <div class='main'>
                    <div class='section'>
                        <div class='fields'>
                            <label for='unit_District'>District <span> *</span></label>
                            <input type='text' id='unit-District' name='unit_District' required>
                        </div>
                    </div>
                    <div class='section'>
                        <div class='fields'>
                            <label for='unit_Control'>Control Plate <span> *</span></label>
                            <input type='text' id='unit-Control' name='unit_Control' required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- SCRIPT VALIDATION -->
    <script src='../../services/addunit.js'></script>
</body>

</html>