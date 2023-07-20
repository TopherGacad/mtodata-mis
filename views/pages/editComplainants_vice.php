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

if (isset($_GET['id'])) {
    $complaint_id = $_GET['id'];

    // Retrieve complaint information from the database using the complaint ID
    include "../php/db_conn.php";

    $sql = "SELECT * FROM complaint_info WHERE id = '$complaint_id'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        echo 'Complaint does not exist';
    } else {
        $row = mysqli_fetch_assoc($result);
    }
} else {
    echo 'Invalid Complaint ID';
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // connect to the MySQL database
    include "../php/db_conn.php";

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get Data from form submission
    $EditComplainantFirstname = $_POST["complaintFirstname"];
    $EditComplainantMiddlename = $_POST["complaintMiddlename"];
    $EditComplainantLastname = $_POST["complaintLastname"];
    $EditComplainantExtension = $_POST["extension"];
    $EditComplainantGender = $_POST["gender"];
    $EditComplainantContact = $_POST["contact"];

    // Update Complainant Details
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
        header("Location: ../php/viceview.php");
        exit();
    } else {
        echo "Error updating complainant details: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Complaintants</title>

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
        <form method="post" id="form-complaint">
            <div class="ot-header">
                <h3><a href="../../views/php/viceview.php"><i class="fa-solid fa-arrow-left"></i></a>Edit Complainant Details</h3>
                <div class="btn-container">
                    <a href="../../views/php/viceview.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                    <button class="update-btn modal-btn" id="complaint-update" type="submit" name="complaint-update" disabled>Update</button>
                </div>
            </div>

            <div class="user-container">
                <h3>Complainant Information</h3>
                <div class="main">
                    <div class="left-side-emp section">
                        <!-- LASTNAME -->
                        <div class="fields">
                            <label for="complaintLastname">Lastname<span> *</span></label>
                            <input type="text" id="complaintLastname" name="complaintLastname"
                                value="<?php echo isset($row['lname']) ? $row['lname'] : ''; ?>" required>
                        </div>

                        <!-- FIRSTNAME -->
                        <div class="fields">
                            <label for="complaintFirstname">Firstname<span> *</span></label>
                            <input type="text" id="complaintFirstname" name="complaintFirstname"
                                value="<?php echo isset($row['fname']) ? $row['fname'] : ''; ?>" required>
                        </div>

                        <!-- MIDNAME -->
                        <div class="fields">
                            <label for="complaintMiddlename">Middlename</label>
                            <input type="text" id="complaintMiddlename" name="complaintMiddlename"
                                value="<?php echo isset($row['mname']) ? $row['mname'] : ''; ?>">
                        </div>
                    </div>

                    <div class="right-side-emp section">
                        <!-- EXTENSION NAME -->
                        <div class="fields">
                            <label for="extension">Extension Name</label>
                            <input type="text" pattern="[A-Za-z.]{2,5}" id="extension" name="extension"
                                placeholder="eg. Jr, Sr" value="<?php echo isset($row['exname']) ? $row['exname'] : ''; ?>">
                        </div>

                        <!-- GENDER -->
                        <div class="fields">
                            <label for="gender">Sex<span> *</span></label>
                            <select name="gender" id="gender">
                                <option value="male" <?php if (isset($row['gender']) && $row['gender'] === 'male') echo 'selected'; ?>>Male</option>
                                <option value="female" <?php if (isset($row['gender']) && $row['gender'] === 'female') echo 'selected'; ?>>Female</option>
                                <option value="none" <?php if (isset($row['gender']) && $row['gender'] === 'none') echo 'selected'; ?>>Prefer not to say</option>
                            </select>
                        </div>

                        <!-- CONTACT NUMBER -->
                        <div class="fields">
                            <label for="contact">Contact no.<span> *</span></label>
                            <input type="text" pattern="[0-9]{11}" id="contact" name="contact"
                                placeholder="eg. 09592220954" value="<?php echo isset($row['phone']) ? $row['phone'] : ''; ?>" required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            const suc = urlParams.get('success');
            const toastContainers = document.getElementById('toast-success');

            if (suc === 'true') {
                toastContainers.style.visibility = 'visible';
                document.getElementById('success-con').innerHTML = `<strong>Successful!</strong> Complaint updated.`;
                console.log("TEST SUCCESS");
                setTimeout(() => {
                    toastContainers.style.visibility = 'hidden';
                }, 3000);
            }
        });

        window.onload = function () {
            const urlParams = new URLSearchParams(window.location.search);
            const complaintID = urlParams.get('id');

            if (complaintID) {
                urlParams.delete("success");
                const newUrl = window.location.pathname + "?" + urlParams.toString();
                history.replaceState({}, document.title, newUrl);

                console.log('$complaintID');
            }
        };

        // Get the form and update button elements
        const editForm = document.getElementById('form-complaint');
        const updateButton = document.getElementById('complaint-update');

        // Store the initial form data as a serialized string
        const initialFormData = new FormData(editForm);

        // Add event listener to the form
        editForm.addEventListener('input', function () {
            // Serialize the current form data
            const currentFormData = new FormData(editForm);
            const currentDataString = Array.from(currentFormData.entries()).toString();

            // Compare the current form data with the initial form data
            const hasChanged = currentDataString !== Array.from(initialFormData.entries()).toString();

            // Enable or disable the update button based on whether the values have changed
            updateButton.disabled = !hasChanged;
            console.log('Button has been enabled for Complaint');
        });
    </script>
    </body>
</html>
