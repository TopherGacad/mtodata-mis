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

date_default_timezone_set('Asia/Manila');

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

        $row = mysqli_fetch_assoc($result);

        // Fetch member information
        $memID = $row['mem_id'];
        $sql1 = "SELECT * FROM `mem_info` WHERE (mem_role = 'Operator' OR mem_role = 'Both')";
        $result1 = $conn->query($sql1);

        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Unit</title>

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
                <form>
                    <div class="ot-header">
                        <h3><a href="../../views/pages/unitinfo.php"><i class="fa-solid fa-arrow-left"></i></a>Edit Unit
                            Information</h3>
                        <div class="btn-container">
                            <a href="../../views/pages/unitinfo.php"><input type="button" value="Discard"
                                    class="cancelBtn modal-btn" id="cancel-btn"></a>
                            <button class="update-btn modal-btn" id="user-update" type="submit"
                                name="user-update">Update</button>
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

                                        <?php
                                        while ($row1 = $result1->fetch_assoc()) {
                                            $middleInitial = !empty($row1["mname"]) ? trim($row1["mname"][0]) . '.' : '';
                                            $extensionName = !empty($row1["exname"]) ? ' ' . $row1["exname"] . '., ' : '';
                                            $lastName = $row1["lname"];

                                            if (empty($row1["exname"])) {
                                                $lastName .= ', ';
                                            }
                                            echo "<option value='" . $row1['id'] . "'>" . $lastName . $extensionName . $row1["fname"] . " " . $middleInitial . "</option>";
                                        }
                                        ?>

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
                                    <input type="text" id="unit-bodyno" name="unitbody_no" required
                                        value='<?php echo $row['body_no']; ?>'>
                                </div>

                                <!-- BODY COLOR -->
                                <div class="fields">
                                    <label for="unit-bodycolor">Body Color <span> *</span></label>
                                    <select name='unitbody_color' id='unit-bodycolor' required>
                                        <option value="Blue" <?php if ($row['body_color'] == 'Blue')
                                            echo 'selected'; ?>>Blue
                                        </option>
                                        <option value="Red" <?php if ($row['body_color'] == 'Red')
                                            echo 'selected'; ?>>Red
                                        </option>
                                        <option value="Orange" <?php if ($row['body_color'] == 'Orange')
                                            echo 'selected'; ?>>
                                            Orange</option>
                                        <option value="Yellow" <?php if ($row['body_color'] == 'Yellow')
                                            echo 'selected'; ?>>
                                            Yellow</option>
                                        <option value="Green" <?php if ($row['body_color'] == 'Green')
                                            echo 'selected'; ?>>Green
                                        </option>
                                        <option value="Indigo" <?php if ($row['body_color'] == 'Indigo')
                                            echo 'selected'; ?>>
                                            Indigo</option>
                                        <option value="Violet" <?php if ($row['body_color'] == 'Violet')
                                            echo 'selected'; ?>>
                                            Violet</option>
                                        <option value="Purple" <?php if ($row['body_color'] == 'Purple')
                                            echo 'selected'; ?>>
                                            Purple</option>
                                        <option value="Pink" <?php if ($row['body_color'] == 'Pink')
                                            echo 'selected'; ?>>Pink
                                        </option>
                                        <option value="Silver" <?php if ($row['body_color'] == 'Silver')
                                            echo 'selected'; ?>>
                                            Silver</option>
                                        <option value="Gold" <?php if ($row['body_color'] == 'Gold')
                                            echo 'selected'; ?>>Gold
                                        </option>
                                        <option value="Beige" <?php if ($row['body_color'] == 'Beige')
                                            echo 'selected'; ?>>Beige
                                        </option>
                                        <option value="Brown" <?php if ($row['body_color'] == 'Brown')
                                            echo 'selected'; ?>>Brown
                                        </option>
                                        <option value="Grey/Gray" <?php if ($row['body_color'] == 'Grey/Gray')
                                            echo 'selected'; ?>>Grey/Gray</option>
                                        <option value="Black" <?php if ($row['body_color'] == 'Black')
                                            echo 'selected'; ?>>Black
                                        </option>
                                        <option value="White" <?php if ($row['body_color'] == 'White')
                                            echo 'selected'; ?>>White
                                        </option>

                                    </select>
                                </div>

                                <!-- FRANCHISE NO. -->
                                <div class="fields">
                                    <label for="unit_franno">Franchise No. <span> *</span></label>
                                    <input type="text" id="unit-franno" name="unitfran_no" required
                                        value='<?php echo $row['franchise_no']; ?>'>
                                </div>
                            </div>

                            <div class="right-side-profile section">

                                <!-- FRANCHISE DATE ISSUED -->
                                <div class="fields">
                                    <label for="unit-franissue">Franchise Date issued <span> *</span></label>
                                    <input type="date" id="unit-franissue" name="unitfran_issue" required
                                        value="<?php echo $row['date_issue']; ?>" max="<?= date('Y-m-d') ?>"
                                        onchange="updateUnitFranvalid()">
                                </div>


                                <!-- FRANCHISE DATE VALID -->
                                <div class=" fields">
                                    <label for="unit-franvalid">Franchise Date Valid <span> *</span></label>
                                    <input type="date" id="unit-franvalid" name="unitfran_valid"
                                        value='<?php echo $row['date_valid']; ?>' disabled>
                                </div>

                                <!-- AREA CODE -->
                                <div class="fields">
                                    <label for="unit-area">Area Code <span> *</span></label>
                                    <input type="text" id="unit-area" name="unit_area" required
                                        value='<?php echo $row['area_code']; ?>'>
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
                                    <input type="text" required value='<?php echo $row['motor_no']; ?>'>
                                </div>

                                <div class="fields">
                                    <label for="">Chasis No. <span> *</span></label>
                                    <input type="text" required value='<?php echo $row['chasis_no']; ?>'>
                                </div>

                                <div class="fields">
                                    <label for="">Plate No. <span> *</span></label>
                                    <input type="text" required value='<?php echo $row['plate_no']; ?>'>
                                </div>
                            </div>
                            <div class="section">
                                <div class="fields">
                                    <label for="">LTO OR <span> *</span></label>
                                    <input type="text" required value='<?php echo $row['lto_or']; ?>'>
                                </div>

                                <div class="fields">
                                    <label for="">LTO CR <span> *</span></label>
                                    <input type="text" required value='<?php echo $row['lto_cr']; ?>'>
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
                                    <input type="text" required value='<?php echo $row['district']; ?>'>
                                </div>
                            </div>
                            <div class="section">
                                <div class="fields">
                                    <label for="">Control Plate <span> *</span></label>
                                    <input type="text" required value='<?php echo $row['control_plate']; ?>'>
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

        <?php
    }
}
?>