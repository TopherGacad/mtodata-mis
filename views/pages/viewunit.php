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

// connect to the MySQL database
include "../php/db_conn.php";

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $unitID = $_GET['id'];

    // Retrieve member information from the database using the $memberID
    $sql = "SELECT * FROM unit_info WHERE id = '$unitID'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 0) {
        echo 'user does not exist';
        exit();
    } else {
        ?>
        <!DOCTYPE html>
        <html lang='en'>

        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>View Unit</title>

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
                        <h3><a href='../../views/pages/unitinfo.php?<?php echo $unitID; ?>'><i
                                    class='fa-solid fa-arrow-left'></i></a>View Unit Information</h3>
                        <div class='btn-container'>
                            <a href='../../views/pages/editunit.php?'><input type='button' value='Edit'
                                    class='cancelBtn modal-btn' id='cancel-btn'></a>
                        </div>
                    </div>

                    <?php

                    $row = mysqli_fetch_assoc($result);

                    while ($row = mysqli_fetch_assoc($result)) {
                        // Fetch member information
                        $memID = $row['mem_id'];
                        $sql1 = "SELECT * FROM `mem_info` WHERE id = '$memID'";
                        $result1 = $conn->query($sql1);

                        while ($row1 = $result1->fetch_assoc()) {
                            $middleInitial = !empty($row1["mname"]) ? trim($row1["mname"][0]) . '.' : '';
                            $extensionName = !empty($row1["exname"]) ? ' ' . $row1["exname"] . '., ' : '';
                            $firstname = $row1["fname"];
                            $lastName = $row1["lname"];

                            if (empty($row1["exname"])) {
                                $lastName .= ', ';
                            }

                        }
                        ?>

                        <!-- <input type='hidden' name='id' value=''> -->
                        <div class='user-container'>
                            <h3>Personal Information</h3>
                            <div class='main'>
                                <div class='left-side-emp section'>
                                    <div class='fields'>
                                        <label for='add-unit'>Member Name <span> *</span></label>
                                        <input name='add_unit' id='add-unit' required
                                            value='<?php echo $lastName . $extensionName . $firstname . " " . $middleInitial ?>'
                                            readonly>
                                    </div>
                                </div>

                                <div class='right-side-emp section'>

                                </div>
                            </div>
                        </div>

                        <div class='profile-container'>
                            <h3>Sidecar Information</h3>
                            <div class='main'>
                                <div class='left-side-profile section'>
                                    <!-- BODY NO. -->
                                    <div class='fields'>
                                        <label for='unit-bodyno'>Body No. <span> *</span></label>
                                        <input type='text' id='unit-bodyno' name='unitbody_no'
                                            value='<?php echo $row['body_no']; ?>' required readonly>
                                    </div>

                                    <!-- BODY COLOR -->
                                    <div class='fields'>
                                        <label for='unit-bodycolor'>Body Color <span> *</span></label>
                                        <input type='text' id='unit-bodycolor' name='unitbody_color'
                                            value='<?php echo $row['body_no']; ?>' required readonly>
                                    </div>

                                    <!-- FRANCHISE NO. -->
                                    <div class='fields'>
                                        <label for='unit_franno'>Franchise No. <span> *</span></label>
                                        <input type='text' id='unit-franno' name='unitfran_no'
                                            value='<?php echo $row['body_no']; ?>' required readonly>
                                    </div>
                                </div>

                                <div class='right-side-profile section'>

                                    <!-- FRANCHISE DATE ISSUED -->
                                    <div class='fields'>
                                        <label for='unit-franissue'>Franchise Date issued <span> *</span></label>
                                        <input type='date' id='unit-franissue' name='unitfran_issue'
                                            value='<?php echo $row['body_no']; ?>' required readonly>
                                    </div>

                                    <!-- FRANCHISE DATE VALID -->
                                    <div class='fields'>
                                        <label for='unit-franvalid'>Franchise Date Valid <span> *</span></label>
                                        <input type='date' id='unit-franvalid' name='unitfran_valid'
                                            value='<?php echo $row['body_no']; ?>' required readonly>
                                    </div>

                                    <!-- AREA CODE -->
                                    <div class='fields'>
                                        <label for='unit-area'>Area Code <span> *</span></label>
                                        <input type='text' id='unit-area' name='unit_area' value='<?php echo $row['body_no']; ?>'
                                            required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='container'>
                            <h3>Motorcycle Information</h3>
                            <div class='main'>
                                <div class='section'>
                                    <div class='fields'>
                                        <label for=''>Motor No. <span> *</span></label>
                                        <input type='text' value='<?php echo $row['body_no']; ?>' required readonly>
                                    </div>

                                    <div class='fields'>
                                        <label for=''>Chasis No. <span> *</span></label>
                                        <input type='text' value='<?php echo $row['body_no']; ?>' required readonly>
                                    </div>

                                    <div class='fields'>
                                        <label for=''>Plate No. <span> *</span></label>
                                        <input type='text' value='<?php echo $row['body_no']; ?>' required readonly>
                                    </div>
                                </div>
                                <div class='section'>
                                    <div class='fields'>
                                        <label for=''>LTO OR <span> *</span></label>
                                        <input type='text' value='<?php echo $row['body_no']; ?>' required readonly>
                                    </div>

                                    <div class='fields'>
                                        <label for=''>LTO CR <span> *</span></label>
                                        <input type='text' value='<?php echo $row['body_no']; ?>' required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='container'>
                            <h3>Other Info</h3>
                            <div class='main'>
                                <div class='section'>
                                    <div class='fields'>
                                        <label for=''>District <span> *</span></label>
                                        <input type='text' value='<?php echo $row['body_no']; ?>' required readonly>
                                    </div>
                                </div>
                                <div class='section'>
                                    <div class='fields'>
                                        <label for=''>Control Plate <span> *</span></label>
                                        <input type='text' value='<?php echo $row['body_no']; ?>' required readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php }
    }
}
?>
        </form>
    </div>
</body>

</html>