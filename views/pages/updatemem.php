<?php
// Retrieve member information from the database using the $memberID
include "../php/db_conn.php";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

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


    if ($_FILES['profile']['name'] !== "") {
        $profilepic = $_FILES["profile"]["name"];
        $profilepic_tmp = $_FILES["profile"]["tmp_name"];
        $fileError = $profilePic['error'];
        $profilepic_path = "../../public/images/";

        if (move_uploaded_file($profilepic_tmp, $profilepic_path . $profilepic)) {
            $query = "UPDATE mem_info SET profilepic = '$profilepic', mem_stat = '$mem_stat', fname = '$fname', mname = '$mname', 
            lname = '$lname', exname = '$exname', mem_role = '$mem_role', gender = '$mem_sex', street = '$street', barangay = '$brgy', 
            city = '$city', phone = '$contact', license_no = '$license' WHERE id = '$memberID'";

            mysqli_query($conn, $query);

            // Redirect back to the page with the updated information
            header("Location: viewuser.php?id=$memberID&success=true");
            exit;
        }
    } else {
        $query = "UPDATE mem_info SET mem_stat = '$mem_stat', fname = '$fname', mname = '$mname', 
            lname = '$lname', exname = '$exname', mem_role = '$mem_role', gender = '$mem_sex', street = '$street', barangay = '$brgy', 
            city = '$city', phone = '$contact', license_no = '$license' WHERE id = '$memberID'";

        mysqli_query($conn, $query);

        // Redirect back to the page with the updated information
        header("Location: viewuser.php?id=$memberID&success=true");
        exit;
    }
}
?>