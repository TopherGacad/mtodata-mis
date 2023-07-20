<?php
include "../php/db_conn.php";

date_default_timezone_set('Asia/Manila');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if the ID query parameter is set
    if (isset($_GET['id'])) {
        $programID = $_GET['id'];
        $title = $_POST['event-title'];
        $description = $_POST['event-description'];
        $organizer = $_POST['event-organizer'];
        $location = $_POST['event-location'];
        $time = $_POST['event-time'];
        $date = $_POST['event-date'];

        $query = "UPDATE `events_programs` SET `ep_title` = '$title', `ep_organizer` = '$organizer', `ep_description` = '$description', 
        `ep_location` = '$location', `ep_date` = '$date', `ep_start` = '$time' WHERE `events_programs`.`id` = $programID";

        if (mysqli_query($conn, $query)) {
            header("Location: viewevents_vice.php?id=$programID&success=true");
            exit;
        }

    }


}
?>