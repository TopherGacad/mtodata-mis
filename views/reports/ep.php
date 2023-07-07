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
    <link rel="stylesheet" href="../../assets/css/reports.css" type="text/css">

    <!--html2pdf library-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--es6-promise library-->
    <script src="../../assets/js/es6-promise-master/lib/es6-promise.auto.js"></script>
    <!--jspdf library-->
    <script src="../../assets/js/jsPDF-master/dist/jspdf.es.min.js"></script>
    <!--html2canvas library-->
    <script src="../../assets/js/html2canvas-master/package.json"></script>
    <!--html2pdf library-->
    <script src="../../assets/js/html2pdf.js-master/dist/html2pdf.min.js"></script>

</head>

<body>

    <!--Button for PDF Generation-->
    <button id="save">Generate as PDF</button>

    <!--DB Connection-->
    <?php

    //connection
    include "db_con.php";

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //data retrieval
    $sql = "SELECT * FROM events_programs";
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
                    <div class='container' id='container'>
                        <div class='wrapper'>
                        <div class='header' id='cert_wrapp'>
                        <div class='top'>
                            <img src='../../assets/img/placeholder.jpg' id='imgplaceholder'>
                            <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                            <p>3s Center Marulas, Valenzuela City, 1440</p>
                            <p>+63 (XXX) YYY ZZZZ</p>
                        </div>
                    </div>
                            
                            <div class='EPName'>" . $row["ep_title"] . "</div>
                            <p class='detret' id='center_format'>";
        $column1 = $row["ep_start"];
        $column2 = $row["ep_end"];
        if (!empty($column1) && !empty($column2)) {
            $concatenated = $column1 . ' to ' . $column2;
            echo $concatenated;
        } elseif (!empty($column1)) {
            echo $column1;
        } elseif (!empty($column2)) {
            echo $column2;
        } else {
            echo "No value available";
        }

        echo "</p>
                            <p class='det'>Program Details:</p>
                            <div class='det_con'>
                                <p class='det_con_Desc' id='ep_desc'>" . $row["ep_description"] . "</p>
                                <p class='det_con_Desc' id='ep_highlights'>" . $row["ep_highlights"] . "</p>
                                <p class='det_con_Desc' id='ep_close'>" . $row["ep_closestatement"] . "</p>
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