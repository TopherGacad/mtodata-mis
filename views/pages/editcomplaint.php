<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR OF NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $complaint_id = $_GET['id'];

    // Retrieve complaint information from the database using the complaint ID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM complaint_details cd
            INNER JOIN complaint_info ci ON ci.id = cd.complainant_id
            WHERE cd.id = '$complaint_id'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo 'Complaint does not exist';
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
    }
} else {
    echo 'Invalid Complaint ID';
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // connect to the MySQL database
    include "../php/db_conn.php";

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update Database
    // Edit Complaint Module

    // Right Panel
    if (isset($_POST['complaintSubject'])) {
        $EditSubject = $_POST['complaintSubject'];
    } else {
        // Retrieve the default value from the database
        $defaultQuery = "SELECT complaint_person FROM complaint_details WHERE id = '$complaint_id'";
        $defaultResult = mysqli_query($conn, $defaultQuery);

        if (mysqli_num_rows($defaultResult) > 0) {
            $defaultRow = mysqli_fetch_assoc($defaultResult);
            $complaintantId = $defaultRow['complaint_person'];
        }
    }
    if (isset($_POST['complaintSubjectBody'])) {
        $EditBodyNumber = $_POST['complaintSubjectBody'];
    } else {
        // Retrieve the default value from the database
        $defaultQuery = "SELECT body_no FROM complaint_details WHERE id = '$complaint_id'";
        $defaultResult = mysqli_query($conn, $defaultQuery);

        if (mysqli_num_rows($defaultResult) > 0) {
            $defaultRow = mysqli_fetch_assoc($defaultResult);
            $complaintantId = $defaultRow['body_no'];
        }
    }
    // Retrieve the default value for complaint-select if there's no change
    if (isset($_POST['complaint-select'])) {
        $complaintantId = $_POST['complaint-select'];
    } else {
        // Retrieve the default value from the database
        $defaultQuery = "SELECT id FROM complaint_details WHERE id = '$complaint_id'";
        $defaultResult = mysqli_query($conn, $defaultQuery);

        if (mysqli_num_rows($defaultResult) > 0) {
            $defaultRow = mysqli_fetch_assoc($defaultResult);
            $complaintantId = $defaultRow['id'];
        }
    }
    $EditDateCreated = $_POST["date-incident"] . " " . $_POST["time-incident"];
    $EditComplaintDescription = $_POST["desc"];

    // Check if there are changes
    $isChanged = false;

    // Retrieve existing complaint details from the database
    $existingDetailsQuery = "SELECT * FROM complaint_details WHERE id = '$complaint_id'";
    $existingDetailsResult = mysqli_query($conn, $existingDetailsQuery);

    if (mysqli_num_rows($existingDetailsResult) > 0) {
        $existingDetailsRow = mysqli_fetch_assoc($existingDetailsResult);

        // Compare the existing values with the new values
        if ($existingDetailsRow['complaint_person'] != $EditSubject ||
            $existingDetailsRow['body_no'] != $EditBodyNumber ||
            $existingDetailsRow['details'] != $EditComplaintDescription ||
            $existingDetailsRow['date_created'] != $EditDateCreated ||
            $existingDetailsRow['complainant_id'] != $complaintantId
        ) {
            $isChanged = true;
        }
    }

    // Update complaint_details table if there are changes
    if ($isChanged) {
        $sql = "UPDATE complaint_details SET 
                    complaint_person = '$EditSubject', 
                    body_no = '$EditBodyNumber', 
                    details = '$EditComplaintDescription', 
                    date_created = '$EditDateCreated',
                    complainant_id = '$complaintantId'
                WHERE id = '$complaint_id'";

        if (mysqli_query($conn, $sql)) {
            echo "Complaint information updated successfully";
        } else {
            echo "Error updating complaint information: " . mysqli_error($conn);
            exit();
        }
    } else {
        echo "No changes detected. The complaint information remains the same.";
    }

    mysqli_close($conn);

    header("Location: ../php/dashboard.php");
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <div class="head-container">
        <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
    </div>

    <div class="content-container">
        <form id="form-complaint" method="post">
            <div class="ot-header">
                <h3><a href="../../views/php/dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>Edit Complaints Details</h3>
                <div class="btn-container">
                    <a href="../../views/php/dashboard.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                    <button class="update-btn modal-btn" id="complaint-update" type="submit" name="complaint-update" disabled>Update</button>
                </div>
            </div>

            <!-- <input type="hidden" name="id" value=""> -->
            <div class="user-container">
                <h3>Complainant Information</h3>
                <div class="main">
                    <div class="left-side-profile section">
                        <div class="fields">
                            <label for='complaint-select'>Complainant Name</label>
                            <select name='complaint-select' id='complaint-select'>
                                <?php
                                // connect to the MySQL database
                                include "../php/db_conn.php";

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Retrieve the default value for complaint-select if there's no change
                                if (isset($_POST['complaint-select'])) {
                                    $complaintantId = $_POST['complaint-select'];
                                } else {
                                    // Retrieve the default value from the database
                                    $defaultQuery = "SELECT complainant_id FROM complaint_details WHERE id = '$complaint_id'";
                                    $defaultResult = mysqli_query($conn, $defaultQuery);

                                    if (mysqli_num_rows($defaultResult) > 0) {
                                        $defaultRow = mysqli_fetch_assoc($defaultResult);
                                        $complaintantId = $defaultRow['complainant_id'];
                                    }
                                }

                                // Retrieve and display options
                                $sql = "SELECT * FROM complaint_info";
                                $result = $conn->query($sql);

                                while ($row3 = $result->fetch_assoc()) {
                                    $middleInitial = !empty($row3["mname"]) ? trim($row3["mname"][0]) . '.' : '';
                                    $extensionName = !empty($row3["exname"]) ? ' ' . $row3["exname"] . '., ' : '';
                                    $lastName = $row3["lname"];

                                    if (empty($row3["exname"])) {
                                        $lastName .= ', ';
                                    }

                                    $complainId = $row3["id"]; // Retrieve the ID from the complaint_info table

                                    // Check if the option matches the default value
                                    $selected = ($complainId == $complaintantId) ? 'selected' : '';

                                    echo "<option value='" . $complainId . "' " . $selected . ">" . $lastName . $extensionName . $row3["fname"] . " " . $middleInitial . "</option>";
                                }

                                // close MySQL connection
                                $conn->close();
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="profile-container">
                <h3>Person to Complaint Details</h3>
                <div class="main">
                    <div class="left-side-profile section">
                        <div class="fields">
                        <label for="complaintSubject">Select Complaint Person<span> *</span></label>
                            <select name='complaintSubject' id='complaintSubject'>
                                <?php
                                    // connect to the MySQL database
                                    include "../php/db_conn.php";

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Retrieve the default value for complaint-select if there's no change
                                if (isset($_POST['complaintSubject'])) {
                                    $subjectId = $_POST['complaintSubject'];
                                } else {
                                    // Retrieve the default value from the database
                                    $defaultQuery = "SELECT complaint_person FROM complaint_details WHERE id = '$complaint_id'";
                                    $defaultResult = mysqli_query($conn, $defaultQuery);

                                    if (mysqli_num_rows($defaultResult) > 0) {
                                        $defaultRow = mysqli_fetch_assoc($defaultResult);
                                        $subjectId = $defaultRow['complaint_person'];
                                    }
                                }

                                    $sql = "SELECT * FROM mem_info";

                                    $result = $conn->query($sql);

                                    while ($row2 = $result->fetch_assoc()) {
                                        $middleInitial = !empty($row2["mname"]) ? trim($row2["mname"][0]) . '.' : '';
                                        $extensionName = !empty($row2["exname"]) ? ' ' . $row2["exname"] . '., ' : '';
                                        $lastName = $row2["lname"];

                                        if (empty($row2["exname"])) {
                                            $lastName .= ', ';
                                        }

                                        $complaintId = $row2["id"]; // Retrieve the ID from the complaint_info table

                                        $selected = ($complaintId == $subjectId) ? 'selected' : '';

                                        echo "<option value='" . $complaintId . "' " . $selected . ">". $lastName . $extensionName . $row2["fname"] . " " . $middleInitial . "</option>";
                                    }

                                    // close MySQL connection
                                    $conn->close();
                                ?>
                            </select>
                        </div>  
                    </div>

                    <div class="right-side-profile section">
                        <!-- BODY NUMBER -->
                        <div class="fields">
                            <label for="complaintSubjectBody">Body no.<span> *</span></label>
                            <select name='complaintSubjectBody' id='complaintSubjectBody'>
                                <?php
                                // No need to include "db_conn.php" again here
                                include "../php/db_conn.php";

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // Retrieve the default value for complaint-select if there's no change
                                if (isset($_POST['complaintSubjectBody'])) {
                                    $bodyId = $_POST['complaintSubjectBody'];
                                } else {
                                    // Retrieve the default value from the database
                                    $defaultQuery = "SELECT body_no FROM complaint_details WHERE id = '$complaint_id'";
                                    $defaultResult = mysqli_query($conn, $defaultQuery);

                                    if (mysqli_num_rows($defaultResult) > 0) {
                                        $defaultRow = mysqli_fetch_assoc($defaultResult);
                                        $bodyId = $defaultRow['body_no'];
                                    }
                                }

                                $sql = "SELECT * FROM unit_info";

                                $result = $conn->query($sql);

                                // Display a default blank option if body_no is 0
                                $selected = ($bodyId === '0') ? 'selected' : '';
                                echo "<option value='' $selected>Select Body Number</option>";

                                while ($row1 = $result->fetch_assoc()) {
                                    $unitId = $row1["id"]; // Retrieve the body number from the unit_info table
                                    $body_no = $row1["body_no"];

                                    // Check if the option matches the default value
                                    $selected = ($unitId == $bodyId) ? 'selected' : '';

                                    echo "<option value='" . $unitId . "' " . $selected . ">" . $body_no . "</option>";
                                }

                                // close MySQL connection
                                $conn->close();
                                ?>
                            </select>
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
                                    <input type="time" id="time-incident" name="time-incident"
                                        value="<?php echo substr($row['date_created'], -8, 5); ?>">
                                </div>

                                <!-- DATE -->
                                <div class="fields">
                                    <label for="date-incident">Date of Incident<span> *</span></label>
                                    <input type="date" id="date-incident" name="date-incident"
                                        value="<?php echo substr($row['date_created'], 0, 10); ?>">
                                </div>
                            </div>
                            <div class="section">
                                <!-- DESCRIPTION -->
                                <div class="fields">
                                    <label for="desc">Description<span> *</span></label>
                                    <textarea name="desc" id="desc" cols="30" rows="9" maxlength="350"
                                        onkeyup="countChar(this)"><?php echo isset($row['details']) ? htmlspecialchars($row['details']) : ''; ?></textarea>
                                    <div id="charNum"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
    <script src='../../services/editComplaint.js'></script>
</body>
</html>