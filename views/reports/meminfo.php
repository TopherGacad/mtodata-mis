<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Status</title>

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

<!--Button for PDF Generation-->
<button id="save">Generate as PDF</button>

<div class="container" id="container">
    <div class="wrapper">
    <div class='header' id='cert_wrapp'>
                        <div class='top'>
                            <img src='../../assets/img/placeholder.jpg' id='imgplaceholder'>
                            <p id='top_title'>Marulas Tricycle Operators and Drivers' Association (MTODA)</p>
                            <p>3s Center Marulas, Valenzuela City, 1440</p>
                            <p>+63 (XXX) YYY ZZZZ</p>
                        </div>
                    </div>
        <div class="contents">

            <div class="det_wrap">
                <p class="det">Date: &nbsp</p>
                <p class="detret"> 3</p>
            </div>
            <div class="det_wrap">
                <p class="det">Requested by: &nbsp</p>
                <p class="detret"> 3</p>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Membership Status</th>
                        <th>Expiration</th>
                    </tr>
                </thead>

                <!--DB Connection-->
                <?php

                //connection
                include "db_con.php";

                //check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                //data retrieval
                $sql = "SELECT * ,
                CONCAT(mem_stat, ' - ', DATE_FORMAT(date_created, '%Y-%m-%d')) AS membership_stat,
                DATE_FORMAT(DATE_ADD(date_created, INTERVAL 2 YEAR), '%Y-%m-%d') AS expiry_date FROM `mem_info`";
                $result = $conn->query($sql);

                if ($result === false) {
                    die("Error executing the query: " . $conn->error);
                }

                if ($result->num_rows === 0) {
                    echo "No rows found.";
                }

                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $middleInitial = !empty($row["mname"]) ? trim($row["mname"][0]) . '.' : '';
                    $extensionName = !empty($row["exname"]) ? ' ' . $row["exname"] . '., ' : '';
                    $lastName = $row["lname"];

                    if (empty($row["exname"])) {
                        $lastName .= ', ';
                    }

                    echo "
                    <tbody>
                    <tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial . "</td>
                        <td>" . $row["membership_stat"] . "</td>
                        <td>" . $row["expiry_date"] . "</td>
                    </tr>
                </tbody>  
    ";
                }

                // close MySQL connection
                $conn->close();

                ?>

            </table>
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