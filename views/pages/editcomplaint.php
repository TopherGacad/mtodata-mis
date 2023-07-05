<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR OF NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

// Check if the ID query parameter is set
if (isset($_GET['complaint_id'])) {
    $complaint_id = $_GET['complaint_id'];

    // Retrieve complaint information from the database using the complaint ID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM complaint_info ci 
            INNER JOIN complaint_details cd ON ci.id = cd.id
            WHERE ci.id = '$complaint_id'";

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
    include "db_conn.php";

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update Database
    // Edit Complaint Module

    // Left Panel
    $EditComplainantFirstname = $_POST["complaintFirstname"];
    $EditComplainantMiddlename = $_POST["complaintMiddlename"];
    $EditComplainantLastname = $_POST["complaintLastname"];
    $EditComplainantExtension = $_POST["extension"];
    $EditComplainantGender = $_POST["gender"];
    $EditComplainantContact = $_POST["contact"];

    // Right Panel
    $EditSubject = $_POST["subject"];
    $EditBodyNumber = $_POST["subject-bodyNum"];
    $EditDateCreated = $_POST["date-incident"] . " " . $_POST["time-incident"];
    $EditComplaintDescription = $_POST["desc"];

    $query .= " WHERE id = '$complaint_id'";

    // Update complaint_info table
    $sql = "UPDATE complaint_info SET 
                fname = '$EditComplainantFirstname', 
                mname = '$EditComplainantMiddlename', 
                lname = '$EditComplainantLastname', 
                exname = '$EditComplainantExtension', 
                gender = '$EditComplainantGender', 
                phone = '$EditComplainantContact' 
            WHERE id = '$complaint_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Complainant details updated successfully";
    } else {
        echo "Error updating complainant details: " . mysqli_error($conn);
        exit();
    }

    // Update complaint_details table
    $sql = "UPDATE complaint_details SET 
                complaint_person = '$EditSubject', 
                body_no = '$EditBodyNumber', 
                details = '$EditComplaintDescription', 
                date_created = '$EditDateCreated' 
            WHERE id = '$complaint_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Complaint information updated successfully";
    } else {
        echo "Error updating complaint information: " . mysqli_error($conn);
        exit();
    }

    header("Location: ../php/dashboard.php?id=$complaint_id&success=true");
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
                            <input type="text" id="complainant-firstname" name="complaintFirstname" placeholder="Firstname" value = "<?php echo $row['fname']; ?>" required>
                        </div>

                        <!-- MIDNAME -->
                        <div class="fields">
                            <label for="complainant-midname">Middlename</label>
                            <input type="text" id="complainant-midname" name="complaintMiddlename" placeholder="Middlename" value = "<?php echo $row['mname']; ?>">
                        </div>

                       <!-- LASTNAME -->
                        <div class="fields">
                            <label for="complainant-lastname">Lastname<span> *</span></label>
                            <input type="text" id="complainant-lastname" name="complaintLastname" placeholder="Lastname" value = "<?php echo $row['lname']; ?>" required>
                        </div>
                    </div>

                    <div class="right-side-emp section">
                        <!-- EXTENSION NAME -->
                        <div class="fields">
                            <label for="complainant-extension">Extension Name</label>
                            <input type="text" pattern="[A-Za-z.]{2,5}" id="complainant-extension" name="extension" placeholder="eg. Jr, Sr" value = "<?php echo $row['exname']; ?>">
                        </div>

                        <!-- GENDER -->
                        <div class="fields">
                            <label for="complainant-gender">Sex<span> *</span></label>
                            <select name="gender" id="complainant-gender" value = "<?php echo $row['gender']; ?>">
                                <option value="male" <?php if ($row['gender'] === 'Male') echo 'selected'; ?>>Male</option>
                                <option value="male" <?php if ($row['gender'] === 'Female') echo 'selected'; ?>>Female</option>
                                <option value="male" <?php if ($row['gender'] === 'Prefer not to say') echo 'selected'; ?>>Prefer not to say</option>
                            </select>
                        </div>

                        <!-- CONTACT NUMBER -->
                        <div class="fields">
                            <label for="complainant-contact">Contact no.<span> *</span></label>
                            <input type="text" pattern="[0-9]{11}" id="complainant-contact" name="contact" placeholder="eg. 09592220954" value = "<?php echo $row['phone']; ?>" required>
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
                            <input type="text" id="subject" name="subject" value = "<?php echo $row['complaint_person']; ?>">
                        </div>

                        <!-- BODY NUMBER -->
                        <div class="fields">
                            <label for="subject-bodyNum">Body no.<span> *</span></label>
                            <input type="text" id="subject-bodyNum" name="subject-bodyNum" value = "<?php echo $row['body_no']; ?>">
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
                            <input type="time" id="time-incident" name="time-incident" value = "<?php echo substr($row['date_created'], -8, 5); ?>">
                        </div>

                        <!-- DATE -->
                        <div class="fields">
                            <label for="date-incident">Date of Incident<span> *</span></label>
                            <input type="date" id="date-incident" name="date-incident" value = "<?php echo substr($row['date_created'], 0, 10); ?>">
                        </div>
                    </div>
                    <div class="section">
                        <!-- DESCRIPTION -->
                        <div class="fields">
                            <label for="desc">Description<span> *</span></label>
                            <textarea name="desc" id="desc" cols="30" rows="9" maxlength="350" onkeyup="countChar(this)"><?php echo isset($row['details']) ? htmlspecialchars($row['details']) : ''; ?></textarea>
                            <div id="charNum"></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Linked JavaScript for the rescription On Key Up -->
    <script src="../../services/editComplaint.js"></script>
</body>
</html>