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


// connect to the MySQL database
include "../php/db_conn.php";

// Check if the ID query parameter is set
if (isset($_GET['id'])) {
    $programID = $_GET['id'];
    ?>


    <!DOCTYPE html>
    <html lang='en'>

    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Edit Events & Programs</title>

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
            <form action='updateprograms_vice.php?id=<?php echo $programID; ?>' method='post'>
                <div class='ot-header'>
                    <h3><a href='../../views/php/viceview.php'><i class='fa-solid fa-arrow-left'></i></a>Edit Events &
                        Programs</h3>
                    <div class='btn-container'>
                        <a href='../../views/php/viceview.php'><input type='button' value='Discard'
                                class='cancelBtn modal-btn' id='cancel-btn'></a>
                        <button class='update-btn modal-btn' id='events-update' type='submit'
                            name='events-update'>Update</button>
                    </div>
                </div>

                <div class='user-container'>
                    <h3>Event/Program Description</h3>

                    <?php

                    $sql = "SELECT * FROM events_programs WHERE id = $programID";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);

                        echo "
                        <!-- EVENT TITLE -->
                        <div class='fields'>
                        <label for='event-title'>Title<span> *</span></label>
                        <input type='text' id='event-title' name='event-title'  value='" . $row['ep_title'] . "'>
                        </div>";

                        $sql1 = "SELECT * FROM `transaction_expenses` WHERE program_ID = $programID";
                        $result1 = mysqli_query($conn, $sql1);

                        if (mysqli_num_rows($result1) > 0) {
                            $row1 = mysqli_fetch_assoc($result1);

                            echo "
                            <div class='main'>
                            <div class='left-side-emp section'>
                                <!-- EVENT CODE -->
                                <div class='fields'>
                                    <label for='event-code'>Transaction Code</label>
                                    <input type='text' id='event-code' name='event-code'  value='" . $row1['transaction_code'] . "' disabled>
                                </div>
                            </div>
                            <div class='right-side-emp section'>
                                <!-- EVENT BUDGET -->
                                <div class='fields'>
                                    <label for='event-budget'>Budget</label>
                                    <input type='text' id='event-budget'  name='event-budget' value='" . $row1['amount'] . "' disabled>
                                </div>
                            </div>
                        </div>
                        ";
                        } ?>
                    </div>

                    <?php

                    echo "
                        <div class='profile-container'>
                    <h3>Event/Program Details</h3>
                    <div class='main'>
                        <div class='left-side-profile section'>
                            <!-- EVENT ORGANIZER -->
                            <div class='fields'>
                                <label for='event-organizer'>Organizer<span> *</span></label>
                                <input type='text' id='event-organizer' name='event-organizer'  value='" . $row['ep_organizer'] . "'>
                            </div>
                            <!-- EVENT LOCATION -->
                            <div class='fields'>
                                <label for='event-location'>Location<span> *</span></label>
                                <input type='text' id='event-location' name='event-location'  value='" . $row['ep_location'] . "'>
                            </div>
                        </div>
                        <div class='right-side-profile section'>
                            <!-- EVENT TIME -->
                            <div class='fields'>
                                <label for='event-time'>Time<span> *</span></label>
                                <input type='time' id='event-time' name='event-time'  value='" . $row['ep_start'] . "'>
                            </div>
                            <!-- EVENT DATE -->
                            <div class='fields'>
                                <label for='event-date'>Date<span> *</span></label>
                                <input type='date' id='event-date' name='event-date'  value='" . $row['ep_date'] . "'>
                            </div>
                        </div>
                    </div>
                    <!-- EVENT DESCRIPTION -->
                    <div class='fields'>
                        <label for='event-description'>Description<span> *</span></label>
                        <textarea name='event-description' id='event-description' >" . $row['ep_description'] . "</textarea>
                    </div>
                </div>
                        ";

                    }
}

?>
        </form>
    </div>

    <script src='../../services/editprogram.js'></script>
</body>

</html>