<?php

date_default_timezone_set('Asia/Manila');

// connect to the MySQL database
include "../php/db_conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if the ID query parameter is set
    if (isset($_GET['id'])) {

        $unitID = $_GET['id'];

        // Get the updated values from the form
        $memberID = $_POST['add_unit'];
        $bodyNo = $_POST['unitbody_no'];
        $bodyColor = $_POST['unitbody_color'];
        $franchiseNo = $_POST['unitfran_no'];
        $franchiseDateIssued = $_POST['unitfran_issue'];
        $franvalid = isset($_POST['unitfran_valid']) && $_POST['unitfran_valid'] !== '' ? $_POST['unitfran_valid'] : null;
        $areaCode = $_POST['unit_area'];
        $motorNo = $_POST['unit_motor_no'];
        $chassisNo = $_POST['unit_chasis_no'];

        // Update the transactions in the unit_info table
        $sql = "UPDATE unit_info SET mem_id = '$memberID', body_no = '$bodyNo', body_color = '$bodyColor', 
        franchise_no = '$franchiseNo', date_issue = '$franchiseDateIssued', date_valid = '$franvalid', 
        area_code = '$areaCode', motor_no = '$motorNo', chasis_no = '$chassisNo' WHERE id = '$unitID'";

        if (mysqli_query($conn, $sql)) {
            header("Location: viewunit.php?id=$unitID&success=0");
            exit;
        } else {
            echo "Error updating transactions: " . mysqli_error($conn);
        }
    }
}

// close MySQL connection
$conn->close();
?>