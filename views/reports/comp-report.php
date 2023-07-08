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

    $currentDate = date('Y-m-d');

    //connection
    include "../php/db_conn.php";

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $ID = $_GET['id'];

    //data retrieval
    $sql = "SELECT *, DATE_FORMAT(date_created, '%Y-%m-%d') AS complaint_date FROM complaint_details WHERE id = '$ID'";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error executing the query: " . $conn->error);
    }

    if ($result->num_rows === 0) {
        echo "No rows found.";
    }

    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $details = nl2br($row["details"]);


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
                <br>
                <div class='det_wrap'>
                    <p class='det'>Complainant: &nbsp</p>
                    <p class='detret'>" . $row["complaint_person"] . "</p>
                </div>
                <div class='det_wrap'>
                    <p class='det'>Complaint Date: &nbsp</p>
                    <p class='detret'>" . $row["complaint_date"] . "</p>
                </div>
                <div class='det_wrap'>
                    <p class='det'>Subject of Complaint: &nbsp</p>
                    <p class='detret'>" . $row["body_no"] . "</p>
                </div>
                <br>
                <p class='det'>Details: </p>
                <div class='det_con'>
                    <p class='det_con_Desc'>" . $details . "</p>
                </div>

    ";
    }

    // close MySQL connection
    $conn->close();

    ?>

    <div class='footer'>
        Footer Statements here Lorem ipsum dolor sit amet,
        consectetur adipiscing elit. Nunc posuere orci vitae nisl faucibus,
        nec rutrum metus rutrum. Curabitur efficitur mi et ligula tempus,
        eu placerat mauris porttitor. In consectetur ultrices enim,
        ut vestibulum dui dignissim non.
    </div>
    </div>
    </div>
    </div>

    <script src="../../services/dashboard.js"></script>
</body>

</html>