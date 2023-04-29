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
                <li id="dash-btn"><i class="fa-solid fa-house"></i>  DASHBOARD</li>
                <li id="users-btn"><i class="fa-solid fa-users"></i>  USERS</li>
                <li id="member-btn"><i class="fa-solid fa-circle-info"></i>  MEMBER INFORMATION</li>
                <li id="finance-btn"><i class="fa-solid fa-coins"></i>  FINANCE</li>
                <li id="complain-btn"><i class="fa-solid fa-flag"></i>  COMPLAINTS</li>
                <li id="programs-btn"><i class="fa-solid fa-calendar-days"></i>  EVENTS & PROGRAMS</li>
                <li id="logout-btn">LOGOUT <i class="fa-solid fa-right-from-bracket"></i></li>
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
                <div class="botleft-dash border"></div>
                <div class="botright-dash border">
                    <div class="card-header">
                        <h4>Events</h4>
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
                        <button class="usermoreBtn"><i class="fa-solid fa-ellipsis"></i></button>
                        <input 
                        type="text"
                        class="user-search"
                        placeholder="Search">
                        <button class="adduserBtn" id="addUser-btn"><i class="fa-solid fa-plus"></i> Add User</button>
                    </div>
                </header>
                
                <main>
                    <table id="user-table">
                        <tr>
                            <th>USER ID </th>
                            <th>NAME</th>
                            <th>PASSWORD</th>
                            <th>ROLE</th>
                            <th>ACTION</th>
                        </tr>

                        <tr>
                        <?php
                    // connect to the MySQL database
                    include "db_conn.php";

                    // check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // retrieve data from the MySQL table
                    $sql = "SELECT user_id, CONCAT(F_name, ' ', L_name) AS Name, psword, roles FROM user";
                    $result = $conn->query($sql);

                    
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["user_id"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["psword"] . "</td><td>" . $row["roles"] . "</td><td><i class='tools fa-solid fa-trash-can'></i><i class='tools fa-solid fa-pen-to-square'></i></td></tr>";
                        }
                  
                    // close MySQL connection
                    $conn->close();
                    ?>
                        </tr>
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
                        <button class="usermoreBtn"><i class="fa-solid fa-ellipsis"></i></button>
                        <input 
                        type="text"
                        class="user-search"
                        placeholder="Search">
                        <button class="addmemBtn" id="addmem-btn"><i class="fa-solid fa-plus"></i> Add Member</button>
                    </div>
                </header>

                <main>
                    <table>
                        <tr>
                            <th>MEMBER ID</th>
                            <th>NAME</th>
                            <th>AREA OF OPERATION</th>
                            <th>LICENSE PLATE</th>
                            <th>ACTION</th>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>

                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Christopher</td>
                            <td>helloworld</td>
                            <td>Developer</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
                        </tr>
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
                        <button class="usermoreBtn"><i class="fa-solid fa-ellipsis"></i></button>
                        <input 
                        type="text"
                        class="user-search"
                        placeholder="Search">
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
                            <!--CODE FORMAT WILL BE: 
                                CONTRIBUTION = CON
                                BUTAW = BUT
                                DONATION = DON
                                FOLLOWED BY DATE SUBMITTED MM/DD/YY
                            -->
                            <td>&#8369; 100.00</td>
                            <td>03-23-23</td>
                            <td>
                                <i class="tools fa-solid fa-trash-can"></i>
                                <i class="tools fa-solid fa-pen-to-square"></i>
                            </td>
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
                    <button class="usermoreBtn"><i class="fa-solid fa-ellipsis"></i></button>
                    <input 
                    type="text"
                    class="user-search"
                    placeholder="Search">
                    <button class="addComplainBtn" id="addComplain-btn"><i class="fa-solid fa-plus"></i> New Complaint</button>
                </div>
            </header>

            <main>
                <table>
                    <tr>
                        <th><abbr title="complain-btn Id">ID</abbr></th>
                        <th>COMPLAINANT</th>
                        <th>SUBJECT TO COMPLAINT</th>
                        <th>DATE</th>
                        <th>ACTION</th>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Jonathan Peol</td>
                        <td>Sean Gomez</td> 
                        <td>03-23-23</td>
                        <td>
                            <i class="tools fa-solid fa-trash-can"></i>
                            <i class="tools fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Jonathan Peol</td>
                        <td>Sean Gomez</td> 
                        <td>03-23-23</td>
                        <td>
                            <i class="tools fa-solid fa-trash-can"></i>
                            <i class="tools fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Jonathan Peol</td>
                        <td>Sean Gomez</td> 
                        <td>03-23-23</td>
                        <td>
                            <i class="tools fa-solid fa-trash-can"></i>
                            <i class="tools fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Jonathan Peol</td>
                        <td>Sean Gomez</td> 
                        <td>03-23-23</td>
                        <td>
                            <i class="tools fa-solid fa-trash-can"></i>
                            <i class="tools fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Jonathan Peol</td>
                        <td>Sean Gomez</td> 
                        <td>03-23-23</td>
                        <td>
                            <i class="tools fa-solid fa-trash-can"></i>
                            <i class="tools fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Jonathan Peol</td>
                        <td>Sean Gomez</td> 
                        <td>03-23-23</td>
                        <td>
                            <i class="tools fa-solid fa-trash-can"></i>
                            <i class="tools fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Jonathan Peol</td>
                        <td>Sean Gomez</td> 
                        <td>03-23-23</td>
                        <td>
                            <i class="tools fa-solid fa-trash-can"></i>
                            <i class="tools fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Jonathan Peol</td>
                        <td>Sean Gomez</td> 
                        <td>03-23-23</td>
                        <td>
                            <i class="tools fa-solid fa-trash-can"></i>
                            <i class="tools fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Jonathan Peol</td>
                        <td>Sean Gomez</td> 
                        <td>03-23-23</td>
                        <td>
                            <i class="tools fa-solid fa-trash-can"></i>
                            <i class="tools fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Jonathan Peol</td>
                        <td>Sean Gomez</td> 
                        <td>03-23-23</td>
                        <td>
                            <i class="tools fa-solid fa-trash-can"></i>
                            <i class="tools fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Jonathan Peol</td>
                        <td>Sean Gomez</td> 
                        <td>03-23-23</td>
                        <td>
                            <i class="tools fa-solid fa-trash-can"></i>
                            <i class="tools fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Jonathan Peol</td>
                        <td>Sean Gomez</td> 
                        <td>03-23-23</td>
                        <td>
                            <i class="tools fa-solid fa-trash-can"></i>
                            <i class="tools fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Jonathan Peol</td>
                        <td>Sean Gomez</td> 
                        <td>03-23-23</td>
                        <td>
                            <i class="tools fa-solid fa-trash-can"></i>
                            <i class="tools fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>01</td>
                        <td>Jonathan Peol</td>
                        <td>Sean Gomez</td> 
                        <td>03-23-23</td>
                        <td>
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
                    <button class="usermoreBtn"><i class="fa-solid fa-ellipsis"></i></button>
                    <input 
                    type="text"
                    class="user-search"
                    placeholder="Search">
                    <button class="addEventBtn" id="addEvent-btn"><i class="fa-solid fa-plus"></i> Add Events</button>
                </div>
            </header>

            <div class="content">
                <h4></h4>
            </div>
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
            <form action="../php/adduser.php" method="post" oninput='city.setCustomValidity(city.value != barangay.value ? "Passwords do not match." : "")'>
                <div class="form-container">
                    <!-- FORM LEFT -->
                    <div class="memForm-left">
                        <!-- USERS ROLE -->
                        <div class="fields">
                            <label for="select-role">User's role</label>
                            <select name="userrole" id="select-mem">
                                <option value="pres">President</option>
                                <option value="vpres">Vice President</option>
                                <option value="secretary">Secretary</option>
                                <option value="treasurer">Treasurer</option>
                                <option value="auditor">Auditor</option>
                            </select>
                        </div>
                        <!-- LASTNAME -->
                        <div class="fields">
                            <label for="user-lastname">Lastname</label>
                            <input 
                            type="text"
                            id="user-lastname"
                            name="lastname" 
                            placeholder="Lastname"
                            required>   
                        </div>
                        <!-- FIRSTNAME -->
                        <div class="fields">
                            <label for="user-firstname">Firstname</label>
                            <input 
                            type="text"
                            id="user-firstname" 
                            name="firstname"
                            placeholder="Firstname"
                            required
                            >
                        </div>
                        <!-- MIDNAME -->
                        <div class="fields">
                            <label for="user-midname">Middlename</label>
                            <input 
                            type="text"
                            id="user-midname" 
                            name="middlename"
                            placeholder="Middlename"
                            required
                            >
                        </div>
                        <!-- EXTENSION NAME -->
                        <div class="fields">
                            <label for="user-extension">Extension Name</label>
                            <input 
                            type="text"
                            pattern="[A-Za-z]{2,5}"
                            id="user-extension" 
                            name="extension"
                            placeholder="eg. Jr, Sr"
                            required
                            >
                        </div>
                    </div>
                    <!-- FORM-RIGHT -->
                    <div class="memForm-right">
                        <!-- EMAIL -->
                        <div class="fields">
                            <label for="user-email">Email Adress</label>
                            <input 
                            type="text"
                            id="user-email" 
                            name="street"
                            required
                            >
                        </div>

                        <!-- CONTACT NUMBER -->
                        <div class="fields">
                            <label for="mem-contact">Contact no.</label>
                            <input 
                            type="text"
                            pattern="[0-9]{11}"
                            id="mem-contact" 
                            name="contact"
                            placeholder="eg. 09592220954"
                            required
                            >
                        </div>

                        <!-- PASSWORD -->
                        <div class="fields">
                            <label for="user-pass">Password</label>
                            <input 
                            type="password"
                            id="user-pass" 
                            name="barangay"
                            minlength="8"
                            maxlength="12"
                            required
                            >
                        </div>
                        <!-- CONFIRM PASSWORD -->
                        <div class="fields">
                            <label for="user-confirmPass">Confirm Password</label>
                            <input 
                            type="password"
                            id="user-confirmPass" 
                            name="city"
                            required
                            >
                        </div>

                        <!-- SEE PASSWORD -->
                        <div class="see-password-container">
                            <input class="see-pass" type="checkbox" id="see-pass">
                            <label class="see-pass-label" for="see-pass">See password</label>
                        </div>
                        
                        <div class="btn-container">
                            <input 
                            type="button" 
                            value="Cancel" 
                            class="cancel-btn" 
                            id="adduser-cancel"
                            formnovalidate>
                            <button class="save-btn" id="save-btn" type="submit" >Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
        <!-- EDIT USER MODAL -->    
        <div class="bg" id="bg"></div>
        <div class="editUser-modal-container" id="editUser-modal">
            <h2 class="modal-title">EDIT USER DETAILS</h2>
            <div class="btn-container">
                <input 
                type="button" 
                value="Cancel" 
                class="cancel-btn" 
                id="editUser-cancel"
                formnovalidate>
                <button class="save-btn" id="save-btn" type="submit" >Save</button>
            </div>
        </div>

        <!-- ADD MEMBER MODAL -->
        <div class="bg" id="bg"></div>
        <div class="addMem-modal-container" id="member-modal-container">
            <h2 class="modal-title">MEMBER REGISTRATION</h2>
            <form action="">
                <div class="form-container">
                    <!-- FORM LEFT -->
                    <div class="memForm-left">
                        <!-- MEMBERS ROLE -->
                        <div class="fields">
                            <label for="select-mem">Member's role</label>
                            <select name="role" id="select-mem">
                                <option value="Officer">Officer</option>
                                <option value="Driver">Driver only</option>
                                <option value="Operator">Operator only</option>
                                <option value="both">Driver & Operator</option>
                            </select>
                        </div>
                        <!-- LASTNAME -->
                        <div class="fields">
                            <label for="mem-lastname">Lastname</label>
                            <input 
                            type="text"
                            id="mem-lastname"
                            name="lastname" 
                            placeholder="Lastname"
                            required>
                        </div>
                        <!-- FIRSTNAME -->
                        <div class="fields">
                            <label for="mem-firstname">Firstname</label>
                            <input 
                            type="text"
                            id="mem-firstname" 
                            name="firstname"
                            placeholder="Firstname"
                            required
                            >
                        </div>
                        <!-- MIDNAME -->
                        <div class="fields">
                            <label for="mem-midname">Middlename</label>
                            <input 
                            type="text"
                            id="mem-midname" 
                            name="middlename"
                            placeholder="Middlename"
                            required
                            >
                        </div>
                        <!-- EXTENSION NAME -->
                        <div class="fields">
                            <label for="mem-extension">Extension Name</label>
                            <input 
                            type="text"
                            pattern="[A-Za-z.]{2,5}"
                            id="mem-extension" 
                            name="extension"
                            placeholder="eg. Jr, Sr"
                            required
                            >
                        </div>

                        <!-- GENDER -->
                        <div class="fields">
                            <label for="select-gender">Gender</label>
                            <select name="gender" id="select-gender">
                                <option value="Coordinator">Male</option>
                                <option value="Finance">Female</option>
                                <option value="Complaints">Prefer not to say</option>
                            </select>
                        </div>
                      
                    </div>

                    <!-- FORM-RIGHT -->
                    <div class="memForm-right">
                        <!-- STREET -->
                        <div class="fields">
                            <label for="mem-street">Street</label>
                            <input 
                            type="text"
                            id="mem-street" 
                            name="street"
                            required
                            >
                        </div>

                        <!-- BARANGAY -->
                        <div class="fields">
                            <label for="mem-brgy">Barangay</label>
                            <input 
                            type="text"
                            id="mem-brgy" 
                            name="barangay"
                            required
                            >
                        </div>
                        <!-- CITY -->
                        <div class="fields">
                            <label for="mem-city">City</label>
                            <input 
                            type="text"
                            id="mem-city" 
                            name="city"
                            required
                            >
                        </div>
                        <!-- CONTACT NUMBER -->
                        <div class="fields">
                            <label for="mem-contact">Contact no.</label>
                            <input 
                            type="text"
                            pattern="[0-9]{11}"
                            id="mem-contact" 
                            name="contact"
                            placeholder="eg. 09592220954"
                            required
                            >
                        
                        </div>
                        <!-- LICENSE NUMBER -->
                        <div class="fields">
                            <label for="mem-license">License no.</label>
                            <input 
                            type="text"
                            id="mem-license" 
                            pattern="[A-Z]{1}[0-9]{2}-[0-9]{2}-[0-9]{6}" 
                            name="license"
                            placeholder="eg. A34-34-345645"
                            required
                            >
                        </div>

                        <div class="btn-container">
                            <input 
                            type="button" 
                            value="Cancel" 
                            class="cancel-btn" 
                            id="member-cancel"
                            formnovalidate>
                            <button class="save-btn" id="save-btn" type="submit" >Save</button>
                        </div>
                    </div>
                </div>
            </form>
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
        <!-- 
            TO DO: 
            1. USER SUCCESSFULLY ADDED 
            2. USER 
        -->

    <script src="../../services/dashboard.js"></script>
</body>
</html>