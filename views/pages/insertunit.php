<?php



// connect to the MySQL database
include "../php/db_conn.php";

//retrieve data from input fields


// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$body = $_POST['unitbody_no'];
$color = $_POST['unitbody_color'];
$fran_no = $_POST['unitfran_no'];
$franissue = $_POST['unitfran_issue'];
$franvalid = $_POST['unitfran_valid'];
$areacode = $_POST['unit_area'];
$motor_no = $_POST['unit_motorno'];
$chasis = $_POST['unit_chasis'];
$plateno = $_POST['unit_plateno'];
$OR = $_POST['unit_OR'];
$CR = $_POST['unit_CR'];
$District = $_POST['unit_District'];
$Control = $_POST['unit_Control'];
$mem_name = $_POST['add_unit'];

//data insert for input fields
$sql = "INSERT INTO `unit_info` (body_no, mem_id, franchise_no, date_issue, date_valid, area_code,
motor_no, chasis_no, lto_cr, lto_or, plate_no, body_color, district, control_plate) 
VALUES ('$body', '$mem_name', '$fran_no', '$franissue', '$franvalid', '$areacode', '$motor_no',
'$chasis', '$OR', '$CR', '$plateno', '$color', '$District', '$Control')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data: " . $conn->error;
}


// close MySQL connection
$conn->close();
?>