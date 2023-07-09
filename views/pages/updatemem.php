<?php
include "../php/db_conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    date_default_timezone_set('Asia/Manila');
    $timestamp = date('Y-m-d H:i:s');

    $memberID = $_GET['id'];
    $mem_stat = $_POST['mem-status'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $exname = $_POST['extension'];
    $mem_role = $_POST['role'];
    $mem_sex = $_POST['gender'];
    $street = $_POST['street'];
    $brgy = $_POST['barangay'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $license = $_POST['license'];

    // Determine the previous mem_status of the member
    $prevMemStatQuery = "SELECT mem_stat FROM mem_info WHERE id = '$memberID'";
    $prevMemStatResult = $conn->query($prevMemStatQuery);
    $prevMemStat = $prevMemStatResult->fetch_assoc()['mem_stat'];

    $query = "UPDATE mem_info SET mem_stat = '$mem_stat', fname = '$fname', mname = '$mname', 
        lname = '$lname', exname = '$exname', mem_role = '$mem_role', gender = '$mem_sex', street = '$street', barangay = '$brgy', 
        city = '$city', phone = '$contact', license_no = '$license'";

    if ($mem_stat === 'Active') {
        $query .= ", date_created = '$timestamp'";
    }

    if ($_FILES['profile']['name'] !== "") {
        $profilepic = $_FILES["profile"]["name"];
        $profilepic_tmp = $_FILES["profile"]["tmp_name"];
        $fileError = $profilePic['error'];
        $profilepic_path = "../../public/images/";

        if (move_uploaded_file($profilepic_tmp, $profilepic_path . $profilepic)) {
            $query .= ", profilepic = '$profilepic'";
        }
    }

    $query .= " WHERE id = '$memberID'";

    if ($conn->query($query) === TRUE) {
        if ($prevMemStat === 'Expired' && $mem_stat === 'Active') {
            $sql = "INSERT INTO transaction_payment (member_id, amount, transaction_code, transaction_type, date_created) VALUES ('$memberID', '1000', '', 'Renewal', '$timestamp')";

            if ($conn->query($sql) === TRUE) {
                // Get the auto-incrementing ID of the inserted row
                $lastInsertedId = $conn->insert_id;

                // Calculate the incrementing number with leading zeros
                $incrementingNumber = str_pad($lastInsertedId, 4, '0', STR_PAD_LEFT);

                $transactionCode = "RNW" . date('mdy') . $incrementingNumber;

                // Update the transaction code in the database
                $updateSql = "UPDATE transaction_payment SET transaction_code = '$transactionCode' WHERE id = $lastInsertedId";

                mysqli_query($conn, $updateSql);
            }
        }
    }


    header("Location: viewmem.php?id=$memberID&success=true");
    exit;
}
?>