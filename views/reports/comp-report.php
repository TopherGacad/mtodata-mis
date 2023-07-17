<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Complaints</title>

    <!--Styling-->
    <link rel='stylesheet' href='../../public/css/reports.css' type='text/css'>

    <!-- Include the required libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.2.8/es6-promise.auto.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>


</head>

<body>

    <?php

    date_default_timezone_set('Asia/Manila');
    $currentDate = date('Y-m-d');

    //connection
    include "../php/db_conn.php";

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $ID = $_GET['id'];

    //data retrieval
    $sql = "SELECT complaint_details.id AS id, CONCAT(complaint_info.fname, ' ', complaint_info.lname) AS complainant,
                    CONCAT(mem_info.fname, ' ', mem_info.lname) AS show_complaint_person,
                    unit_info.body_no AS show_body_no, DATE_FORMAT(complaint_details.date_created, '%Y/%m/%d %h:%i %p') AS complaint_date,
                    complaint_info.phone, complaint_details.complaint_person, complaint_details.details AS details FROM complaint_details 
                    INNER JOIN complaint_info ON complaint_info.id = complaint_details.complainant_id
                    INNER JOIN mem_info ON mem_info.id = complaint_details.complaint_person
                    LEFT JOIN unit_info ON unit_info.id = complaint_details.body_no WHERE complaint_details.id = $ID";
                    
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error executing the query: " . $conn->error);
    }

    if ($result->num_rows === 0) {
        echo "No rows found.";
    }

    // output data of each row
    while ($row = $result->fetch_assoc()) {

        echo "

    <div class='container' id='complaints-container'>
        <div class='wrapper' id='cert_wrapp'>
            <div class='header' id='cert_wrapp'>
                <div class='top'>
                    <img src='../../public/assets/placeholder.jpg' id='imgplaceholder'>
                    <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                    <p>3s Center Marulas, Valenzuela City, 1440</p>
                    <p>+63 (XXX) YYY ZZZZ</p>
                </div>
            </div>
            <div class='contents'>
                <div class='det_wrap'>
                    <p class='det'>Complaint No. &nbsp</p>
                    <p class='detret'>" . $row["id"] . "</p>
                </div>
                <div class='det_wrap'>
                    <p class='det'>Date: &nbsp</p>
                    <p class='detret'>" . $currentDate . "</p>
                </div>
                <br><div class='det_wrap'>
                    <p class='det'>Complainant: &nbsp</p>
                    <p class='detret'>" . $row["complainant"] . "</p>
                </div>
                
                <div class='det_wrap'>
                    <p class='det'>Complaint Date: &nbsp</p>
                    <p class='detret'>" . $row["complaint_date"] . "</p>
                </div>
                <div class='det_wrap'>
                    <p class='det'>Subject of Complaint: &nbsp</p>
                    <p class='detret'>" . $row["show_complaint_person"] . "</p>
                </div>
                <div class='det_wrap'>
                    <p class='det'>Body Number: &nbsp</p>
                    <p class='detret'>" . $row["show_body_no"] . "</p>
                </div>
                <br>
                <p class='det'>Details: </p>
                <div class='det_con'>
                    <p class='det_con_Desc'>" . $row["details"] . "</p>
                </div>

    ";
    }

    // close MySQL connection
    $conn->close();

    ?>

    <div class='footer'>
    </div>
    </div>
    </div>
    </div>

    <script src="../../services/dashboard.js"></script>
</body>

</html>