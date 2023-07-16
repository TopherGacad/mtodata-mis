<?php
    include "db_conn.php";

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Start of Complaint Module

    // Get Data from form submission
    $personToComplain = $_POST["ComplaintSubject"];
    $bodyNumber = $_POST["complaintSubjectBody"];
    $description = $_POST["desc"];
    $dateCreated = $_POST["date-incident"] . " " . $_POST["time-incident"];
    if (isset($_POST['complaint-select'])) {
        $complaint_id = $_POST['complaint-select'];
    }
    // Complainant Information
    //
    $sql = "INSERT INTO complaint_details (complaint_person, body_no, details, date_created, complainant_id) VALUES ('$personToComplain', '$bodyNumber', '$description', '$dateCreated', '$complaint_id')";
    if (mysqli_query($conn, $sql)) {
        echo "Complaint details inserted successfully";
    } else {
        echo "Error inserting complaint information: " . mysqli_error($conn) . "<br>";
    }

    $result = $conn->query($sql);
    if ($result) {
        header("Location: ../php/dashboard.php?id=$complaint_id&success=true%complain");
        exit();
    }
    // Close database connection
    mysqli_close($conn);
?>
