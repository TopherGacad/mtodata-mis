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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../public/css/dashboard.css">
    <link rel="icon" href="../../public/assets/browse_logo.png">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;900&display=swap" rel="stylesheet">
    <!-- FONT AWESOME/ICONS -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>


</head>

<body>
    <div class="bg-container"></div>
    <div class="top-design"></div>

    <!-- SIDE-NAV-BAR -->
    <div class="side-nav">
        <header class="header-nav">
            <img class="logo" src="../../public/assets/mtodata_logo.png" alt="logo of mtodata system">
            <p>ADMIN PANEL</p>
        </header>
        <div class="item-container">
            <ul>
                <li id="dash-btn"><i class="fa-solid fa-house"></i> DASHBOARD</li>
                <li id="users-btn"><i class="fa-solid fa-users"></i> USERS</li>
                <li id="member-btn"><i class="fa-solid fa-circle-info"></i> MEMBER INFORMATION</li>
                <li id="finance-btn"><i class="fa-solid fa-coins"></i> FINANCE</li>
                <li id="complain-btn"><i class="fa-solid fa-flag"></i> COMPLAINTS</li>
                <li id="programs-btn"><i class="fa-solid fa-calendar-days"></i> EVENTS & PROGRAMS</li>
                <a href="logout.php">
                    <li id="logout-btn">LOGOUT <i class="fa-solid fa-right-from-bracket"></i></li>
                </a>
            </ul>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <!-- DASHBOARD PANE -->
    <div class="dashboard-container" id="dash-container">
        <section class="top-dash">
            <div class="card border">
                <div class="card-header">
                    <i class="card-icon fa-solid fa-user-group"></i>
                    <h4 class="">Total Member Count</h4>
                </div>
                <div class="count-container">
                    <p>31</p>
                </div>
                <div class="link-container memCount">
                    <a href="#">View Report</a>
                </div>
            </div>

            <div class="card border">
                <div class="card-header">
                    <i class="card-icon fa-solid fa-hand-holding-dollar"></i>
                    <h4 class="">Donations Received</h4>
                </div>
                <div class="count-container">
                    <p><span>&#8369;</span> 1000000</p>
                </div>
                <div class="link-container">
                    <a href="#">View Report</a>
                </div>
            </div>

            <div class="card border">
                <div class="card-header">
                    <i class="card-icon fa-solid fa-circle-dollar-to-slot"></i>
                    <h4 class="">Contribution Collected</h4>
                </div>
                <div class="count-container">
                    <p><span>&#8369;</span>31</p>
                </div>
                <div class="link-container">
                    <a href="#">View Report</a>
                </div>
            </div>

            <div class="card border">
                <div class="card-header">
                    <i class="card-icon fa-solid fa-file-circle-exclamation"></i>
                    <h4 class="">Complaints Recieved</h4>
                </div>
                <div class="count-container">
                    <p>31</p>
                </div>
                <div class="link-container">
                    <a href="#">View Report</a>
                </div>
            </div>
        </section>
        <div class="botleft-dash border">
            <div class="card-header">
                <h4>Recent Financial Entry</h4>
            </div>
        </div>
        <div class="botright-dash border">
            <div class="card-header events">
                <h4>Events</h4>
            </div>
            <div class="dash-content">
                <div class="agenda-box">
                    <h3>◉ WHO:</h3>
                    <p>MTODA Officers</p>
                </div>

                <div class="agenda-box">
                    <h3>◉ WHAT:</h3>
                    <p>Meeting agenda for annual election 2023-2024</p>
                </div>

                <div class="agenda-box">
                    <h3>◉ WHEN:</h3>
                    <p>May 05, 2023 10:00PM</p>
                </div>

                <div class="agenda-box">
                    <h3>◉ WHERE:</h3>
                    <p>MTODA line Terminal </p>
                </div>
            </div>
            <div class="link-container events-link">
                <a href="#">View Report</a>
            </div>
        </div>
    </div>

    <!-- USER PANE -->
    <div class="users-container" id="users-container">
        <header>
            <div class="head-left">
                <h3>USER TYPE MANAGEMENT</h3>
                <p>ADMIN VIEW</p>
            </div>
            <div class="head-right">
                <div class="search-container">
                    <input type="text" class="user-search" id="user-search" placeholder="Search">
                    <button class="user-searchBtn" id="user-searchBtn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <button class="adduserBtn" id="addUser-btn"><i class="fa-solid fa-plus"></i> Add User</button>
            </div>
        </header>

        <main>
            <table id="user-table">
                <thead>
                    <tr>
                        <th class="id">USER ID</th>
                        <th class="username">NAME</th>
                        <th class="role">ROLE</th>
                        <th class="email">EMAIL</th>
                        <th class="datecreated">DATE CREATED</th>
                        <th class="action">ACTION</th>
                    </tr>
                </thead>

                <tbody id="user-table-body">
                    <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // retrieve data from the MySQL table
                    $sql = "SELECT user_id, CONCAT(F_name, ' ', L_name) AS Name, roles, email, date_created FROM user";
                    $result = $conn->query($sql);

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <tr>
                            <td class='userid'>" . $row["user_id"] . "</td>
                            <td class='username'>" . $row["Name"] . "</td>
                            <td class='role'>" . $row["roles"] . "</td>
                            <td class='email'>". $row["email"] . "</td>
                            <td class='datecreated'>" . $row["date_created"] . "</td>
                            <td class='action'>
                                <abbr title='Delete'><i class='tools fa-solid fa-trash-can'></i></abbr>
                                <abbr title='View more'><i class='tools fa-solid fa-eye'></i></abbr>
                                <a href='../../views/php/pages/editUser.php'><i class='tools fa-solid fa-pen-to-square'></i></a>
                            </td>
                        </tr>";
                    }

                    // close MySQL connection
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </main>
    </div>

    <!-- MEMBER INFO PANE -->
    <div class="member-container" id="member-container">
        <header>
            <div class="head-left">
                <h3>TODA MEMBERS INFORMATION</h3>
                <p>ADMIN VIEW</p>
            </div>
            <div class="head-right">
                <abbr title="Export Report"><button class="memExportBtn exportBtn" id="mem-export"><i class="fa-solid fa-download"></i></button></abbr>
                <div class="search-container">
                    <input type="text" class="mem-search" id="mem-search" placeholder="Search">
                    <button class="mem-searchBtn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <button class="addmemBtn" id="addmem-btn"><i class="fa-solid fa-plus"></i> Add Member</button>
            </div>
        </header>

        <main>
            <table id="mem-table">
                <tr>
                    <th class="id">ID</th>
                    <th class="memname">NAME</th>
                    <th class="area">AREA OF OPERATION</th>
                    <th class="role">ROLE</th>
                    <th class="license">LICENSE NO.</th>
                    <th class="status">STATUS</th>
                    <th class="action">ACTION</th>
                </tr>

                <tbody id="mem-table-body">
    <?php
    // connect to the MySQL database
    include "db_conn.php";

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // retrieve data from the MySQL table with concatenated fname and lname
    $sql = "SELECT id, CONCAT(fname, ' ', lname) AS name, barangay, mem_role, license_no, mem_stat FROM mem_info";
    $result = $conn->query($sql);

    // output data of each row
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr id='row-" . $row["id"] . "'>
              <td class='memid'>" . $row["id"] . "</td>
              <td class='memname'>" . $row["name"] . "</td>
              <td class='area'>" . $row["barangay"] . "</td>
              <td class='memrole'>" . $row["mem_role"] . "</td>
              <td class='license'>" . $row["license_no"] . "</td>
              <td class='status'> 
                <div class='status-contain'>
                  <p>•" . $row["mem_stat"] . "</p>
                </div>
              </td>
              <td class='action'>
                <abbr title='Delete'><i class='tools fa-solid fa-trash-can' onclick='showToast(" . $row["id"] . ")'></i></abbr>
                <abbr title='View more'><i class='tools fa-solid fa-eye' id='edit-member-icon'></i></abbr>
                <i class='tools fa-solid fa-pen-to-square'></i>
              </td>
            </tr>";
        }
    } else {
        echo "0 results";
    }

    // close MySQL connection
    $conn->close();
    ?>

    <script>
        function showToast(id) {
            if (confirm("Are you sure you want to delete this member?")) {
                // send AJAX request to delete the member from the database and remove the row from the table
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "delete_member.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // remove the row from the table
                        var row = document.getElementById("row-" + id);
                        row.parentNode.removeChild(row);
                        // display success message
                        alert(xhr.responseText);
                    }
                };
                xhr.send("id=" + id);
            }
        }
    </script>
</tbody>
            </table>
        </main>
    </div>

    <!-- FINANCE PANE -->
    <div class="finance-container" id="finance-container">
        <header>
            <div class="head-left">
                <h3>FINANCE</h3>
                <p>FINANCE STAFF VIEW</p>
            </div>
            <div class="head-right">
                <button class="financeExportBtn exportBtn" id="finance-export"><i class="fa-solid fa-download"></i></button>
                <div class="search-container">
                    <input type="text" class="user-search" placeholder="Search">
                    <button class="user-searchBtn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <button class="addFinanceBtn" id="addFinance-btn"><i class="fa-solid fa-plus"></i> Add Record</button>
            </div>
        </header>

        <main>
            <table>
                <tr>
                    <th><abbr title="Transaction Id">ID</abbr></th>
                    <th>TYPE</th>
                    <th>CODE</th>
                    <th>AMOUNT</th>
                    <th>DATE</th>
                    <th>ACTION</th>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Contribution</td>
                    <td>CON-130423</td>
                    <td>&#8369; 100.00</td>
                    <td>03-23-23</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

            </table>
        </main>
    </div>

    <!-- COMPLAINT PANE -->
    <div class="complain-container" id="complain-container">
        <header>
            <div class="head-left">
                <h3>COMPLAINTS</h3>
                <p>USER VIEW</p>
            </div>
            <div class="head-right">
                <button class="complaintExportBtn exportBtn" id="complaint-export"><i class="fa-solid fa-download"></i></button>
                <div class="search-container">
                    <input type="text" class="user-search" placeholder="Search">
                    <button class="user-searchBtn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <button class="addComplainBtn" id="addComplain-btn"><i class="fa-solid fa-plus"></i> New Complaint</button>
            </div>
        </header>

        <main>
            <table>
                <tr>
                    <th class="id"><abbr title="complain-btn Id">ID</abbr></th>
                    <th class="name">COMPLAINANT</th>
                    <th class="contact">CONTACT NO.</th>
                    <th class="name">SUBJECT TO COMPLAINT</th>
                    <th class="date">DATE</th>
                    <th class="action">ACTION</th>
                </tr>

                <tr>
                    <td class="id">01</td>
                    <td class="name">Jonathan Peol</td>
                    <td class="contact">09898765465</td>
                    <td class="name">Sean Gomez</td>
                    <td class="date">03-23-23</td>
                    <td class="action">
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

            </table>
        </main>

    </div>

    <!-- EVENTS & PROGRAMS PANE -->
    <div class="event-container" id="event-container">
        <header>
            <div class="head-left">
                <h3>EVENTS & PROGRAMS</h3>
                <p>ADMIN VIEW</p>
            </div>
            <div class="head-right">
                <div class="search-container">
                    <input type="text" class="user-search" placeholder="Search">
                    <button class="user-searchBtn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <button class="addEventBtn" id="addEvent-btn"><i class="fa-solid fa-plus"></i> Add Events</button>
            </div>
        </header>

        <main>
            <table>
                <tr>
                    <th><abbr title="complain-btn Id">ID</abbr></th>
                    <th>EVENT</th>
                    <th>EVENT DATE</th>
                    <th>TIME</th>
                    <th>LOCATION</th>
                    <th>ACTION</th>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Christmas Party</td>
                    <td>December 23, 2023</td>
                    <td>1:00 PM</td>
                    <td>Grand Villa</td>
                    <td>
                        <i class="tools fa-solid fa-trash-can"></i>
                        <i class="tools fa-solid fa-pen-to-square"></i>
                    </td>
                </tr>

            </table>
        </main>
    </div>

    <!-- FOOTER -->
    <footer class="flex">
        <p>&copy;mtodata 2023</p>
        <div class="link-footer flex">
            <p class="border-right">PUP Institute of Technology</p>
            <a href="#" class="border-right">Terms of Use</a>
            <p>Version 1.0</p>
        </div>
    </footer>

    <!-- MODALS -->
    <!-- ADD USER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addUser-modal-container" id="user-modal-container">
        <h2 class="modal-title">ADD USER</h2>
        <form action="../php/adduser.php" method="post" oninput='city.setCustomValidity(city.value != barangay.value ? "Passwords do not match." : "")' id="user-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="userForm-left addForm">
                    <!-- USERS ROLE -->
                    <div class="fields">
                        <label for="select-role">User's role<span> *</span></label>
                        <select name="userrole" id="select-role">
                            <option value="" selected disabled>Select Role</option>
                            <option value="President">President</option>
                            <option value="Vice President">Vice President</option>
                            <option value="secretary">Secretary</option>
                            <option value="Treasurer">Treasurer</option>
                            <option value="Auditor">Auditor</option>
                        </select>
                    </div>

                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="user-lastname">Lastname<span> *</span></label>
                        <input type="text" id="user-lastname" name="lastname" placeholder="Lastname" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="user-firstname">Firstname<span> *</span></label>
                        <input type="text" id="user-firstname" name="firstname" placeholder="Firstname" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="user-midname">Middlename</label>
                        <input type="text" id="user-midname" name="middlename" placeholder="Middlename">
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="user-extension">Extension Name</label>
                        <input type="text" pattern="[A-Za-z.]{2,5}" id="user-extension" name="extension" placeholder="eg. Jr, Sr">
                    </div>
                </div>
                <!-- FORM-RIGHT -->
                <div class="userForm-right addForm">
                    <!-- EMAIL -->
                    <div class="fields">
                        <label for="user-email">Email Adress<span> *</span></label>
                        <input type="text" id="user-email" name="street" required>
                    </div>

                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="mem-contact">Contact no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" id="mem-contact" name="contact" placeholder="eg. 09592220954" required>
                    </div>

                    <!-- PASSWORD -->
                    <div class="fields">
                        <label for="user-pass">Password<span> *</span></label>
                        <input type="password" id="user-pass" name="barangay" minlength="8" maxlength="12" required>
                    </div>
                    <!-- CONFIRM PASSWORD -->
                    <div class="fields">
                        <label for="user-confirmPass">Confirm Password<span> *</span></label>
                        <input type="password" id="user-confirmPass" name="city" required>
                    </div>

                    <!-- SEE PASSWORD -->
                    <div class="see-password-container">
                        <input class="see-pass" type="checkbox" id="see-pass">
                        <label class="see-pass-label" for="see-pass">See password</label>
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="adduser-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- WARNING TOAST -->
        <div class="warningToast-container" id="warningToast">
            <div class="warningToast-left">
                <i class="warningToast-icon fa-solid fa-circle-exclamation"></i>
            </div>
            <div class="warningToast-right">
                <p><strong>Try Again</strong>  Please Select User Role!</p>
            </div>
        </div>
    </div>

    <!-- ADD MEMBER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addMem-modal-container" id="member-modal-container">
        <h2 class="modal-title">MEMBER REGISTRATION</h2>
        <form action="../php/addmember.php" method="post" id="member-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="memForm-left addForm">
                    <!-- MEMBERS ROLE -->
                    <div class="fields">
                        <label for="select-mem">Member's role<span> *</span></label>
                        <select name="role" id="select-mem">
                            <option value="">--- Select Role ---</option>
                            <option value="Officer">Officer</option>
                            <option value="Driver">Driver only</option>
                            <option value="Operator">Operator only</option>
                            <option value="Both">Driver & Operator</option>
                        </select>
                    </div>
                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="mem-lastname">Lastname<span> *</span></label>
                        <input type="text" id="mem-lastname" name="lastname" placeholder="Lastname" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="mem-firstname">Firstname<span> *</span></label>
                        <input type="text" id="mem-firstname" name="firstname" placeholder="Firstname" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="mem-midname">Middlename</label>
                        <input type="text" id="mem-midname" name="middlename" placeholder="Middlename">
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="mem-extension">Extension Name</label>
                        <input type="text" pattern="[A-Za-z.]{2,5}" id="mem-extension" name="extension" placeholder="eg. Jr, Sr">
                    </div>

                    <!-- GENDER -->
                    <div class="fields">
                        <label for="select-gender">Sex<span> *</span></label>
                        <select name="gender" id="select-gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="none">Prefer not to say</option>
                        </select>
                    </div>

                </div>

                <!-- FORM-RIGHT -->
                <div class="memForm-right addForm">
                    <!-- STREET -->
                    <div class="fields">
                        <label for="mem-street">Street<span> *</span></label>
                        <input type="text" id="mem-street" name="street" required>
                    </div>

                    <!-- BARANGAY -->
                    <div class="fields">
                        <label for="mem-brgy">Barangay<span> *</span></label>
                        <input type="text" id="mem-brgy" name="barangay" required>
                    </div>
                    <!-- CITY -->
                    <div class="fields">
                        <label for="mem-city">City<span> *</span></label>
                        <input type="text" id="mem-city" name="city" required>
                    </div>
                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="mem-contact">Contact no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" id="mem-contact" name="contact" placeholder="eg. 09592220954" required>

                    </div>
                    <!-- LICENSE NUMBER -->
                    <div class="fields">
                        <label for="mem-license">License no.<span> *</span></label>
                        <input type="text" id="mem-license" pattern="[A-Z]{1}[0-9]{2}-[0-9]{2}-[0-9]{6}" name="license" placeholder="eg. A34-34-345645" required>
                    </div>

                    <!-- USER PROFILE PICTURE -->
                    <div class="fields">
                        <label for="mem-pic">Upload Profile Icon</label>
                        <input type="file" accept=".png, .jpg, .jpeg" id="mem-pic" name="profile">
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="member-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- WARNING TOAST -->
        <div class="warningToast-container" id="mem-warningToast">
            <div class="warningToast-left">
                <i class="warningToast-icon fa-solid fa-circle-exclamation"></i>
            </div>
            <div class="warningToast-right">
                <p><strong>Try Again</strong>  Please Select User Role!</p>
            </div>
        </div>
    </div>

    <!-- ADD FINANCE MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addFinance-modal-container" id="finance-modal-container">
        <h2 class="modal-title">ADD FINANCIAL RECORD</h2>
        <form action="" id="finance-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="financeForm-left addForm">
                    <!-- FINANCE TYPE -->
                    <div class="fields">
                        <label for="select-type">Finance Type<span> *</span>
                        </label>
                        <select name="type" id="select-type" onchange="disableInputs()">
                            <option value="donation">Donation</option>
                            <option value="butaw">Butaw</option>
                        </select>
                    </div>
                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="lastname">Lastname<span> *</span></label>
                        <input type="text" id="lastname" name="lastname" placeholder="Lastname" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="firstname">Firstname<span> *</span></label>
                        <input type="text" id="firstname" name="firstname" placeholder="Firstname" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="midname">Middlename</label>
                        <input type="text" id="midname" name="middlename" placeholder="Middlename">
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="extension">Extension Name</label>
                        <input type="text" pattern="[A-Za-z.]{2,5}" id="extension" name="extension" placeholder="eg. Jr, Sr">
                    </div>

                    <!-- GENDER -->
                    <div class="fields">
                        <label for="select-gender">Sex<span> *</span></label>
                        <select name="gender" id="select-gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="none">Prefer not to say</option>
                        </select>
                    </div>

                </div>

                <!-- FORM-RIGHT -->
                <div class="financeForm-right addForm">
                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="contact">Contact no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" id="contact" name="contact" placeholder="eg. 09592220954" required>

                    </div>
                    <!-- ACCOUNT TYPE -->
                    <div class="fields">
                        <label for="acc-type">Account Type<span> *</span></label>
                        <select name="acc-type" id="acc-type">
                            <option value="acc-1">Account 1</option>
                            <option value="acc-2">Account 2</option>
                            <option value="acc-3">Account 3</option>
                        </select>
                    </div>

                    <!-- ACCOUNT ID -->
                    <div class="fields">
                        <label for="acc-id">Account ID<span> *</span></label>
                        <input type="text" id="acc-id" name="acc-id" required>
                    </div>
                    <!-- BODY NO. -->
                    <div class="fields">
                        <label for="body-no">Body No.<span> *</span></label>
                        <input type="text" id="body-no" name="bodynum" required>
                    </div>
                    <!--  AMOUNT  -->
                    <div class="fields">
                        <label for="amount">Amount<span> *</span></label>
                        <input type="text" id="amount" name="amount" placeholder="₱" required>
                    </div>

                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="finance-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- ADD COMPLAINT MODAL -->
    <div class="bg" id="bg"></div>
    <div class="addComplaint-modal-container" id="complaint-modal-container">
        <h2 class="modal-title">ADD COMPLAINT</h2>
        <form action="../php/adduser.php" method="post" oninput='city.setCustomValidity(city.value != barangay.value ? "Passwords do not match." : "")' id="complaint-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="complaintForm-left addForm">
                    <!-- LASTNAME -->
                    <div class="fields">
                        <label for="complainant-lastname">Lastname<span> *</span></label>
                        <input type="text" id="complainant-lastname" name="lastname" placeholder="Lastname" required>
                    </div>
                    <!-- FIRSTNAME -->
                    <div class="fields">
                        <label for="complainant-firstname">Firstname<span> *</span></label>
                        <input type="text" id="complainant-firstname" name="firstname" placeholder="Firstname" required>
                    </div>
                    <!-- MIDNAME -->
                    <div class="fields">
                        <label for="complainant-midname">Middlename</label>
                        <input type="text" id="complainant-midname" name="middlename" placeholder="Middlename">
                    </div>
                    <!-- EXTENSION NAME -->
                    <div class="fields">
                        <label for="complainant-extension">Extension Name</label>
                        <input type="text" pattern="[A-Za-z.]{2,5}" id="complainant-extension" name="extension" placeholder="eg. Jr, Sr">
                    </div>
                    <!-- GENDER -->
                    <div class="fields">
                        <label for="complainant-gender">Sex<span> *</span></label>
                        <select name="gender" id="complainant-gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="none">Prefer not to say</option>
                        </select>
                    </div>
                    <!-- CONTACT NUMBER -->
                    <div class="fields">
                        <label for="complainant-contact">Contact no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" id="complainant-contact" name="contact" placeholder="eg. 09592220954" required>
                    </div>
                </div>
                <!-- FORM-RIGHT -->
                <div class="complaintForm-right addForm">
                    <!-- SUBJECT -->
                    <div class="fields">
                        <label for="subject">Person to Complain<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" id="subject" name="subject" required>
                    </div>

                    <!-- BODY NUMBER -->
                    <div class="fields">
                        <label for="subject-bodyNum">Body no.<span> *</span></label>
                        <input type="text" pattern="[0-9]{11}" id="subject-bodyNum" name="subject-bodyNum" required>
                    </div>

                    <!-- DESCRIPTION -->
                    <div class="fields">
                        <label for="desc">Description<span> *</span></label>
                        <textarea name="desc" id="desc" cols="30" rows="9" maxlength="350"></textarea>
                    </div>

                    <div class="timeDate-container">
                            <!-- TIME -->
                        <div class="fields">
                            <label for="time-incident">Time of Incident<span> *</span></label>
                            <input type="time" id="time-incident" name="time-incident" required>
                        </div>

                        <!-- DATE -->
                        <div class="fields">
                            <label for="date-incident">Date of Incident<span> *</span></label>
                            <input type="date" id="date-incident" name="date-incident" required>
                        </div>
                    </div>
            
                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="complaint-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- ADD EVENTS & PROGRAMS -->
    <div class="bg" id="bg"></div>
    <div class="addEvent-modal-container" id="event-modal-container">
        <h2 class="modal-title">SCHEDULE AN EVENT OR PROGRAM</h2>
        <form action="../php/adduser.php" method="post" oninput='city.setCustomValidity(city.value != barangay.value ? "Passwords do not match." : "")' id="event-form">
            <div class="form-container">
                <!-- FORM LEFT -->
                <div class="complaintForm-left addForm">
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
                <!-- FORM-RIGHT -->
                <div class="complaintForm-right addForm">
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

                    <div class="timeDate-container">
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
            
                    <div class="btn-container">
                        <input type="button" value="Cancel" class="cancel-btn" id="event-cancel" formnovalidate>
                        <button class="save-btn" id="save-btn" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- EDIT USER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="editUser-modal-container" id="editUser-modal">
        <h2 class="modal-title">EDIT USER DETAILS</h2>
        <div class="user-details-container" id="user-details-contain">
            <img class="user-icon" src="../../public/assets/defuser_icon.png" alt="user-icon">
            <div class="details-left details">
                <p>Fullname</p>
                <h4>Maria James Bond SR.</h4>
                <p>Role</p>
                <h4>President</h4>
                <p>Firstname</p>
                <h4>Maria James</h4>
                <p>Middlename</p>
                <h4>Labudbod</h4>
            </div>
            <div class="details-right details">
                <p>Surname</p>
                <h4>Bond</h4>
                <p>Extension Name</p>
                <h4>SR.</h4>
                <p>Password</p>
                <h4>President</h4>
                <p>Contact Number</p>
                <h4>President</h4>
            </div>
            <i class="tools fa-solid fa-pen-to-square" id="edit-details"></i>
        </div>
        <div class="btn-container">
            <input type="button" value="Close" class="cancel-btn" id="editUser-close" formnovalidate>
            <button class="save-btn" id="save-btn" type="submit">Save</button>
        </div>
    </div>

    <!-- EDIT MEMBER MODAL -->
    <div class="bg" id="bg"></div>
    <div class="editMember-modal-container" id="editMem-modal">
        <h2 class="modal-title">EDIT USER DETAILS</h2>
        <div class="member-details-container">
            <div class="profile-container"></div>
            <img class="user-icon" src="../../public/assets/user.jpg" alt="user-icon">
            <div class="details-left details">
                <p>Status</p>
                <h4 class="status">• Active</h4>
                <p>Fullname</p>
                <h4>Maria James Bond SR.</h4>
                <p>Role</p>
                <h4>President</h4>
                <p>Firstname</p>
                <h4>Maria James</h4>
                <p>Middlename</p>
                <h4>Labudbod</h4>
            </div>
            <div class="details-right details">
                <p>Surname</p>
                <h4>Bond</h4>
                <p>Extension Name</p>
                <h4>SR.</h4>
                <p>Password</p>
                <h4>President</h4>
                <p>Contact Number</p>
                <h4>President</h4>
            </div>
            <i class="tools fa-solid fa-pen-to-square edit"></i>
        </div>
        <div class="btn-container">
            <input type="button" value="Close" class="cancel-btn" id="editMem-close" formnovalidate>
            <button class="save-btn" id="save-btn" type="submit">Save</button>
        </div>
    </div>

    <!-- TOAST NOTIFACTIONS -->
    <!-- CONFIRM DELETE TOAST -->
    <div class="toast-container">
        <p>Are you sure you want to permanently delete this user?</p>
        <div class="toast-btn-container">
            <button>Confirm</button>
            <button>Cancel</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
    <script src="../../services/dashboard.js"></script>
</body>

</html>