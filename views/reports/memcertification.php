<?php

$currentDate = date('Y-m-d');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Certification</title>

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
                $sql = $sql = "SELECT * ,
                DATE_FORMAT(date_created, '%Y-%m-%d') AS membership_stat,
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
                    <div class='contents'>
        
                        <div class='top'>
                            <p class='detret'>MEMBERSHIP CERTIFICATION</p>
                        </div>
                <div class='det_con' id='cert_con'>
                    <p class='cert_wrap'>
                        &emsp; &emsp; &emsp;This certifies that <strong>" . $lastName . $extensionName . $row["fname"] . " " . $middleInitial ."</strong>, with the License no.
                        <strong>" . $row["license_no"] . "</strong>, is a valued member of
                        the Marulas Tricycle Operators and Drivers' Association (MTODA). This membership is a testament
                        to their
                        dedication, professionalism, and commitment to providing reliable tricycle transportation
                        services to our community.
                    </p>
                    <p class='cert_wrap'>Membership Details:</p>
                    <p class='cert_wrap' id='cert_wrap01'>
                        •&emsp;Membership Type:&emsp; <i>" . $row["mem_role"] . "</i> <br>
                        •&emsp;Membership Start Date:&emsp;<i>" . $row["membership_stat"] . "</i> <br>
                        •&emsp;Membership Expiry Date:&emsp;<i>" . $row["expiry_date"] . "</i>
                    </p>
                    <p class='cert_wrap'>Rights and Privileges:</p>
                    <p class='cert_wrap' id='cert_wrap01'>
                        1. <strong>Representation:</strong> The members are entitled to representation by the association in matters
                        related to the tricycle industry, advocating for their rights and interests. <br>
                        2. <strong>Support Services:</strong> The members can benefit from various support services offered by the
                        association, including legal guidance, assistance with licensing and permits, and access to
                        industry-related resources. <br>
                        3. <strong>Participation in Association Activities:</strong> The members could actively engage in association
                        activities, such as community outreach programs, charity events, and social gatherings.
                    </p>
                    <p class='cert_wrap'>
                        &emsp; &emsp; &emsp;By maintaining membership with the Tricycle Operator 
                        and Driver Association, the members agree to adhere to the association's 
                        code of conduct, operating guidelines, and ethical standards. Furthermore, 
                        the members commit to upholding the reputation and integrity of the 
                        association and the transportation  industry.
                    </p>
                    <p class='cert_wrap'>
                        &emsp; &emsp; &emsp;This certification is valid until the expiry date 
                        mentioned above, subject to the member's compliance with the association's 
                        rules and regulations. <br><br><br><br>
                    </p>

                    <p class='cert_wrap' id='signature'>
                        <strong>[Signature of the Association President]</strong> <br>
                        " . $currentDate . "
                    </p>
                </div>"
                    ;
                }

                // close MySQL connection
                $conn->close();

                ?>

            </div>
        </div>
    </div>

    <script src="../../assets/js/print.js"></script>
</body>

</html>