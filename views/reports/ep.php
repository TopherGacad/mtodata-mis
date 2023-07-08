<?php

$currentDate = date('Y-m-d');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events and Programs</title>

    <!--Styling-->
    <link rel='stylesheet' href='../../public/css/reports.css' type='text/css'>

    <!-- Include the required libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.auto.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

</head>

<body>

    <!--DB Connection-->
    <?php

    $currentDate = date('Y-m-d');

    //connection
    include "../php/db_conn.php";

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $ID = $_GET['id'];

    //data retrieval
    $sql = "SELECT *, TIME_FORMAT(ep_start, '%h:%i %p') AS ep_time FROM events_programs WHERE id = '$ID'";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error executing the query: " . $conn->error);
    }

    if ($result->num_rows === 0) {
        echo "No rows found.";
    }



    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $details = nl2br($row["ep_description"]);


        echo "
                    <div class='container' id='ep-container'>
                        <div class='wrapper'>
                        <div class='header' id='cert_wrapp'>
                        <div class='top'>
                            <img src='../../public/assets/placeholder.jpg' id='imgplaceholder'>
                            <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                            <p>3s Center Marulas, Valenzuela City, 1440</p>
                            <p>+63 (XXX) YYY ZZZZ</p>
                        </div>
                    </div>
                            
                            <div class='EPName'>" . $row["ep_title"] . "</div>
                            <p class='detret' id='center_format'>" . $row["ep_time"] . "</p>
                            <p class='det'>Program Details:</p>
                            <div class='det_con'>
                                <p class='det_con_Desc' id='ep_desc'>" . $details . "</p>
                            </div>      
                    </div>
";
    }

    // close MySQL connection
    $conn->close();

    ?>

    <div class="footer">
        Footer Statements here Lorem ipsum dolor sit amet,
        consectetur adipiscing elit. Nunc posuere orci vitae nisl faucibus,
        nec rutrum metus rutrum. Curabitur efficitur mi et ligula tempus,
        eu placerat mauris porttitor. In consectetur ultrices enim,
        ut vestibulum dui dignissim non.
    </div>
    </div>
    </div>
    </div>

    <script src="../../assets/js/print.js"></script>
</body>

</html>