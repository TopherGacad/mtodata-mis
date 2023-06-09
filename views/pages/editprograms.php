<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Events & Programs</title>

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
        <form action="" method="post">
            <div class="ot-header">
                <h3><a href="../../views/php/dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>Edit Events & Programs</h3>
                <div class="btn-container">
                    <a href="../../views/php/dashboard.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                    <button class="update-btn modal-btn" id="events-update" type="submit" name="events-update">Update</button>
                </div>
            </div>

            <!-- <input type="hidden" name="id" value=""> -->
            <div class="user-container">
                <h3>Event Description</h3>
                <div class="main">
                    <div class="left-side-emp section">
                
                    </div>
                    <div class="right-side-emp section">
                        <!-- EVENT TITLE -->
                        <div class="fields">
                            <label for="complainant-lastname">Event Title (What)<span> *</span></label>
                            <input type="text" id="complainant-lastname" name="lastname" placeholder="Event title" required>
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="fields">
                            <label for="desc">Description<span> *</span></label>
                            <textarea name="desc" id="desc" cols="30" rows="9" maxlength="350"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="profile-container">
                <h3>Events Location</h3>
                <div class="main">
                    <div class="left-side-profile section">
                        <!-- EVENT ORGANIZER -->
                        <div class="fields">
                            <label for="complainant-firstname">Event Organizer<span> *</span></label>
                            <input type="text" id="complainant-firstname" name="firstname" placeholder="Firstname" required>
                        </div>
                        <!-- EVENT LOCATION -->
                        <div class="fields">
                            <label for="complainant-firstname">Event Location (Where)<span> *</span></label>
                            <input type="text" id="complainant-firstname" name="firstname" required>
                        </div>
                    </div>

                    <div class="right-side-profile section">
                        <!-- TIME -->
                       <div class="fields">
                            <label for="time-incident">Time of Event (When)<span> *</span></label>
                            <input type="time" id="time-incident" name="time-incident" required>
                        </div>
                         <!-- DATE -->
                         <div class="fields">
                            <label for="date-incident">Date of Event (When)<span> *</span></label>
                            <input type="date" id="date-incident" name="date-incident" required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="../../services/editMember.js"></script>
</body>
</html>