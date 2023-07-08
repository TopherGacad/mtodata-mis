<?php

date_default_timezone_set('Asia/Manila');

// connect to the MySQL database
include "../php/db_conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if the ID query parameter is set
    if (isset($_GET['id'])) {

        $unitID = $_GET['id'];

        // Get the updated values from the form inputs
        $unitbody_no = $_POST['unitbody_no'];
        $unitbody_color = $_POST['unitbody_color'];
        $unitfran_no = $_POST['unitfran_no'];
        $unitfran_issue = $_POST['unitfran_issue'];
        $unitfran_valid = $_POST['unitfran_valid'];
        $unit_area = $_POST['unit_area'];
        $unit_motor_no = $_POST['unit_motor_no'];
        $unit_chasis_no = $_POST['unit_chasis_no'];
        $unit_plate_no = $_POST['unit_plate_no'];
        $unit_or = $_POST['unit_or'];
        $unit_cr = $_POST['unit_cr'];
        $unit_district = $_POST['unit_district'];
        $unit_controlplate = $_POST['unit_controlplate'];

        // Update the unit_info table with the new values
        $updateSql = "UPDATE unit_info SET 
            body_no = '$unitbody_no',
            body_color = '$unitbody_color',
            franchise_no = '$unitfran_no',
            date_issue = '$unitfran_issue',
            date_valid = '$unitfran_valid',
            area_code = '$unit_area',
            motor_no = '$unit_motor_no',
            chasis_no = '$unit_chasis_no',
            plate_no = '$unit_plate_no',
            lto_or = '$unit_or',
            lto_cr = '$unit_cr',
            district = '$unit_district',
            control_plate = '$unit_controlplate'
            WHERE id = '$unitID'";

        if (mysqli_query($conn, $updateSql)) {
            header("Location: viewunit.php?id=$unitID&success=true%unit");
            exit;
        } else {
            echo "Error updating transactions: " . mysqli_error($conn);
        }
    }
}

?>