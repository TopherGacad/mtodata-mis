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
    <link rel='stylesheet' href='../../public/css/unitinfo.css'>
    <!-- WEB ICON -->
    <link rel='icon' href='../../public/assets/browse_logo.png'>
    <!-- FONT AWESOME/ICONS -->
    <script src='https://kit.fontawesome.com/aa37050208.js' crossorigin='anonymous'></script>

</head>

<body>
    <main>
        <div class='head-container'>
            <img class='main-logo' src='../../public/assets/mtodata_logo.png' alt='mtodata logo'>
        </div>

        <div class='ot-header'>
            <h3><a href='../../views/php/dashboard.php'><i class='fa-solid fa-arrow-left'></i></a>Unit
                Information</h3>
            <div class='btn-container'>
                <input type="text" class="unit-search" id="unit-search" placeholder="Search">
                <a href='../../views/php/dashboard.php'><input type='button' value='Cancel'
                        class='cancelBtn modal-btn' id='cancel-btn'></a>
                <a href="../../views/pages/addunit.php"><button class='addunit-btn modal-btn' id='add-unit' type='submit' name='add-unit'><i class="fa-solid fa-plus"></i> Add Unit</button></a>
            </div>
        </div>

        <div class="content-container">
            <table id="unit-table">
                <tr>
                    <th class="id">ID</th>
                    <th class="name">Name</th>
                    <th>Body No.</th>
                    <th>Franch No.</th>
                    <th>Date issued</th>
                    <th>Date Valid</th>
                    <th>Area code</th>
                    <th>Motor No.</th>
                    <th>Chasis No.</th>
                    <th>OR</th>
                    <th>CR</th>
                    <th>Plate No.</th>
                    <th>Body Color</th>
                    <th class="district">District</th>
                    <th>Control Plate</th>
                    <th>Date Created</th>
                    <th class="action">Action</th>
                </tr>

                <tbody id="unit-table-body">
                    <tr>
                        <td class="id">1</td>
                        <td>Christopher Gacad</td>
                        <td>3453</td>
                        <td>2323</td>
                        <td>06-23-23</td>
                        <td>06-23-26</td>
                        <td>3443</td>
                        <td>2323</td>
                        <td>2323</td>
                        <td>3434</td>
                        <td>2323</td>
                        <td>Gh3434</td>
                        <td>Blue</td>
                        <td>Pateros</td>
                        <td>sdsad234</td>
                        <td>08-30-34</td>
                        <td class="action">
                            <i class='tools fa-solid fa-trash-can'></i>
                            <a href="../../views/pages/editunit.php"><i class='fa-sharp fa-solid fa-pen-to-square'></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td class="id">2</td>
                        <td>Sean Gomez</td>
                        <td>3493</td>
                        <td>2323</td>
                        <td>06-23-23</td>
                        <td>06-23-26</td>
                        <td>3443</td>
                        <td>2323</td>
                        <td>2323</td>
                        <td>3434</td>
                        <td>2323</td>
                        <td>Klp343</td>
                        <td>Green</td>
                        <td>Makati</td>
                        <td>sdsad234</td>
                        <td>08-30-34</td>
                        <td class="action">
                            <i class='tools fa-solid fa-trash-can'></i>
                            <a href="../../views/pages/editunit.php"><i class='fa-sharp fa-solid fa-pen-to-square'></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    
    <script src="../../services/unitinfo.js"></script>
</body>

</html>