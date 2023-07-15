<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: ../html/login.html');
    exit();
}

// FOR SESSION TIMEOUT AFTER 1 HOUR OF NO MOUSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}

// Update last activity time
$_SESSION['last_activity'] = time();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complainant Information</title>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../../public/css/complainantInfo.css">
    <!-- WEB ICON -->
    <link rel="icon" href="../../public/assets/browse_logo.png">
    <!-- FONT AWESOME/ICONS -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div class="head-container">
            <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
        </div>

        <div class="ot-header">
            <h3><a href="../../views/php/dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>Complainant's
                Information</h3>
            <div class="btn-container">
                <abbr title="Export Report">
                    <button class="complaintExportBtn exportBtn" id="complainant-export"><i
                            class="fa-solid fa-download"></i></button>
                </abbr>
                <input type="text" id="donor-search" class="unit-search" placeholder="Search">
                <a href="../../views/php/dashboard.php">
                    <input type="button" value="Cancel" class="cancelBtn modal-btn" id="cancel-btn">
                </a>
                <a href="../../views/pages/insertComplainant.php">
                    <button class="addunit-btn modal-btn" id="add-unit" type="submit" name="add-unit"><i
                            class="fa-solid fa-plus"></i> Add</button>
                </a>
            </div>
        </div>
        <!-- COMPLAINANT INFORMATION TABLE -->
        <div class="content-container">
            <table id="complainant-table">
                <tr>
                    <th class="id">ID</th>
                    <th class="name">Name</th>
                    <th class="extension"></th>
                    <th class="gender">Gender</th>
                    <th class="phone">Phone</th>
                    <th class="action">Action</th>
                </tr>

                <tbody id="donor-table-body">
                    <?php
                    // Connect to the MySQL database
                    include "../php/db_conn.php";

                    $sql = "SELECT * FROM complaint_info";
                    $result = mysqli_query($conn, $sql);

                    if ($result->num_rows === 0) {
                        echo "No rows found.";
                    } else {
                        while ($row = $result->fetch_assoc()) {

                            $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                            $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                            $lastName = $row["lname"];

                            if (empty($row["exname"])) {
                                $lastName .= ', ';
                            }

                            echo "
                                <tr>
                                    <td class='id'>" . $row['id'] . "</td>
                                    <td class='name'>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
                                    <td class='gender'>" . $row['gender'] . "</td>
                                    <td class='phone'>" . $row['phone'] . "</td>
                                    <td class='action'>
                                        <i class='tools fa-solid fa-trash-can' onclick='deleteComplaint(" . $row['id'] . ")'></i>
                                        <a href='editComplainants.php?id=" . $row['id'] . "'><i class='tools fa-solid fa-pen-to-square'></i></a>
                                    </td>
                                </tr>";
                        }
                    }
                    ?>
                    <!-- Deleting Complaint -->
                    <script>
                        function deleteComplaint(id) {
                            if (confirm("Are you sure you want to delete this Complaint?")) {
                            // send AJAX request to delete the complaint from the database and remove the row from the table
                            var xhr = new XMLHttpRequest();
                            xhr.open("POST", "../php/deleteComplainant.php", true);
                            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === 4 && xhr.status === 200) {
                                // remove the row from the table
                                var row = document.getElementById("complaint-" + id);
                                row.parentNode.removeChild(row);
                                // display success message
                                alert(xhr.responseText);
                                // Refresh the current page
                                location.reload();
                                }
                            };
                            xhr.send("id=" + id);
                            }
                        }
                    </script>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
