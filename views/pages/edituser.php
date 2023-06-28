<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}

// Retrieve the user ID from the URL parameter
if (!isset($_GET['user_id'])) {
    // Handle the case when user_id is not provided
    // Display an error message or redirect to another page
    // ...
} else {
    $user_id = $_GET['user_id'];
    
    // connect to the MySQL database
    include "../php/db_conn.php";

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve the user data based on the user ID
    $sql = "SELECT user_id, F_name, L_name, M_name, ex_name, contact, roles, email, psword FROM user WHERE user_id = $user_id";
    $result = $conn->query($sql);

    // Check if a user with the provided user ID exists
    if ($result->num_rows > 0) {
        // Fetch the user data
        $row = $result->fetch_assoc();

        // Assign the user data to variables
        $user_id = $row["user_id"];
        $F_name = $row["F_name"];
        $L_name = $row["L_name"];
        $M_name = $row["M_name"];
        $ex_name = $row["ex_name"];
        $contact = $row["contact"];
        $roles = $row["roles"];
        $email = $row["email"];
        $psword = $row["psword"];
    } else {
        // Handle the case when a user with the provided user ID doesn't exist
        // Display an error message or redirect to another page
        // ...
    }

    // close MySQL connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

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
    <form action="../pages/updateuser.php?user_id=<?php echo $user_id; ?>" method="post" oninput='city.setCustomValidity(city.value != barangay.value ? "Passwords do not match." : "")' id="user-form">
            <div class="ot-header">
                <h3><a href="../../views/php/dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>Edit User Account</h3>
                <div class="btn-container">
                    <a href="../../views/php/dashboard.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                    <button class="update-btn modal-btn" id="user-update" type="submit" name="user-update">Update</button>
                </div>
            </div>

            <!-- <input type="hidden" name="id" value=""> -->
            <div class="user-container">
                <h3>Personal Information</h3>
                <div class="main">
                    <div class="left-side-emp section">
                        <!-- FIRSTNAME -->
                        <div class="fields">
                            <label for="user-firstname">Firstname<span> *</span></label>
                            <input type="text" id="user-firstname" name="firstname" placeholder="Firstname" value="<?php echo $F_name; ?>" required>
                        </div>

                        <!-- MIDNAME -->
                        <div class="fields">
                            <label for="user-midname">Middlename</label>
                            <input type="text" id="user-midname" name="middlename" placeholder="Middlename" value="<?php echo $M_name; ?>">
                        </div>

                         <!-- LASTNAME -->
                        <div class="fields">
                            <label for="user-lastname">Lastname<span> *</span></label>
                            <input type="text" id="user-lastname" name="lastname" placeholder="Lastname" value="<?php echo $L_name; ?>" required>
                        </div>
                    </div>

                    <div class="right-side-emp section">
                          <!-- USERS ROLE -->
                          <div class="fields">
                            <label for="select-role">User's role<span> *</span></label>
                            <select name="userrole" id="select-role">
                                <option value="" disabled>Select Role</option>
                                <option value="President" <?php if ($roles == 'President') echo 'selected'; ?>>President</option>
                                <option value="Vice President" <?php if ($roles == 'Vice President') echo 'selected'; ?>>Vice President</option>
                                <option value="Secretary" <?php if ($roles == 'Secretary') echo 'selected'; ?>>Secretary</option>
                                <option value="Treasurer" <?php if ($roles == 'Treasurer') echo 'selected'; ?>>Treasurer</option>
                                <option value="Auditor" <?php if ($roles == 'Auditor') echo 'selected'; ?>>Auditor</option>
                            </select>
                        </div>

                         <!-- EXTENSION NAME -->
                        <div class="fields">
                            <label for="user-extension">Extension Name</label>
                            <input type="text" pattern="[A-Za-z.]{2,5}" id="user-extension" name="extension" placeholder="eg. Jr, Sr" value="<?php echo $ex_name; ?>">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="profile-container">
                <h3>Contact Information</h3>
                <div class="main">
                    <div class="left-side-profile section">
                       
                    </div>

                    <div class="right-side-profile section">
                        <!-- CONTACT NUMBER -->
                        <div class="fields">
                            <label for="mem-contact">Contact no.<span> *</span></label>
                            <input type="text" pattern="[0-9]{11}" id="mem-contact" name="contact" placeholder="eg. 09592220954" value="<?php echo $contact; ?>" required>
                        </div>

                         <!-- EMAIL -->
                        <div class="fields">
                            <label for="user-email">Email Adress<span> *</span></label>
                            <input type="text" id="user-email" name="email" value="<?php echo $email; ?>" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="password-container">
                <h3>Password</h3>
                <div class="main">
                    <div class="section">
                        <!-- USERNAME -->
                        <div class="fields">
                            <label for="mem-username">Username<span> *</span></label>
                            <input type="text" id="mem-username" name="username" placeholder="Username" value="">
                        </div>
                    </div>
                    <div class="section">
                        <!-- PASSWORD -->
                        <div class="fields">
                            <label for="user-pass">Password<span> *</span></label>
                            <input type="password" id="user-pass" name="barangay" minlength="8" maxlength="12" value="<?php echo $psword; ?>" required>
                        </div>

                         <!-- SEE PASSWORD -->
                         <div class="see-password-container">
                            <input class="see-pass" type="checkbox" id="see-pass">
                            <label class="see-pass-label" for="see-pass">See password</label>
                        </div>
                    </div>
                </div>
            </div>
            <script>

</script>
        </form>

    <!-- SUCCESS TOAST -->
    <div class="toast-container" id="toast-success">
        <div class="toast-left-success">
            <i class="toast-icon fa-solid fa-circle-check"></i>
        </div>
        <div class="toast-right">
            <p><strong>Success!</strong> User successfully updated.</p>
        </div>
    </div>

    </div>
    
    <script src="../../services/edituser.js"></script>
</body>
</html>