<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../html/login.html");
    exit();
}
//FOR SESSION TIMEOUT AFTER 1 HOUR NO MOUNSE MOVEMENT
$sessionTimeoutSeconds = 3600;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionTimeoutSeconds) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../../public/css/termsofuse.css">
    <!-- WEB ICON -->
    <link rel="icon" href="../../public/assets/browse_logo.png">
    <!-- FONT AWESOME/ICONS -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="head-container">
        <img class="main-logo" src="../../public/assets/mtodata_logo.png" alt="mtodata logo">
        <ul>
            <a href="../../views/php/dashboard.php"><li>Dashboard</li></a>
            <a href="../../views"><li>About us</li></a>
        </ul>
    </div>

    <div class="content-container">
        <div class="main-paper">
            <div class="paper-header">
                <h3>Terms of Use – MTODATA: A Management Information System for Marulas TODA (MTODA) in Valenzuela City </h3>
            </div>
            <div class="content">
                <p>Please read these terms and conditions carefully before using the MTODATA application operated by Diploma of Information Communication Technology Students from the Polytechnic University of the Philippines.</p>
            </div>
            <div class="paper-header">
                <h3>Conditions of Use</h3>

                <p>These Terms of Use ("Terms") govern your use of the Management Information System for Marulas TODA in Valenzuela City ("MTODATA") provided by Diploma in Information Communication Technology students from Polytechnic University of the Philippines. By accessing or using the MTODATA, you agree to comply with its Terms. If you do not agree with any part of these Terms, you should not use the MTODATA. The Marulas TODA and the Students of DICT only grant use and access to this application, products, and services to those who have accepted its terms.</p>
            </div>
            <div class="content">
            <details open>
                <summary>1. User Accounts</summary>
                <ol type="a">
                    <li>To access MTODATA, you may need to create an account. You agree to provide accurate and complete information during registration and keep your account credentials confidential. You are responsible for all activities that occur under your account. </li>
                    <li>You must be of legal age or have proper authorization to create an account and use MTODATA.</li>
                    <li>You agree to use the MTODATA only for lawful purposes and in compliance with all applicable laws and regulations.</li>
                </ol>
            </details>

            <details open>
                <summary>2. Intellectual Property Rights </summary>
                <ol type="a">
                    <li>The MTODATA and its contents, including but not limited to software, text, graphics, images, videos, and logos, are the property of Diploma in Information Communication Technology students from the Polytechnic University of the Philippines and its licensors and are protected by intellectual property laws. Without prior written permission, you may not modify, reproduce, distribute, or create derivative works based on MTODATA or any part thereof. </li>
                    <li>The Diploma in Information Communication Technology students from the Polytechnic University of the Philippines retains all rights, title, and interest in the MTODATA and reserve all rights not expressly granted to you under these Terms.</li>
                    <li>You grant the Diploma in Information Communication Technology students a royalty-free and non-exclusive license to display, use, copy, and transmit the content you upload and publish within the application.</li>
                </ol>
            </details>

            <details open>
                <summary>3. Data Privacy</summary>
                <ol type="a">
                    <li>The MTODATA may involve collecting, storing, and processing personal or sensitive information. The Diploma in Information Communication Technology students from the Polytechnic University of the Philippines will handle any such data under its Privacy Policy. </li>
                    <li>The user's of MTODATA are responsible for obtaining any necessary consents or permissions for collecting and processing personal data.</li>
                </ol>
            </details>

            <details open>
                <summary>4. Prohibited Conduct </summary>
                <details>
                    <summary>a. You agree not to engage in any of the following activities while using the MTODATA:</summary>
                    <ol type="i">
                        <li>Violating any applicable laws, regulations, or third-party rights.</li>
                        <li>Interfering with the functionality or security of MTODATA or its servers.</li>
                        <li>Uploading or distributing any malicious software, viruses, or harmful content.</li>
                        <li>Attempting to gain unauthorized access to the MTODATA or other users' accounts.</li>
                        <li>Engaging in any activity that could disrupt or impair the MTODATA or its users' experience.</li>
                    </ol>
                </details>
            </details>

            <details open>
                <summary>5. Disclaimer of Warranties </summary>
                <ol type="a">
                    <li>The MTODATA is provided "as is" without express or implied warranties. The Diploma in Information Communication Technology students from the Polytechnic University of the Philippines disclaims all warranties, including but not limited to fitness for a particular purpose, non-infringement, and accuracy or completeness of the MTODATA's content.</li>
            </details>

            <details open>
                <summary>6. Limitation of Liability  </summary>
                <ol type="a">
                    <li>TThe Diploma in Information Communication Technology students from Polytechnic University of the Philippines shall not be liable for any direct, indirect, incidental, consequential, or special damages arising out of or in connection with the use of the MTODATA, even if advised of the possibility of such damages.</li>
            </details>

            <details open>
                <summary>7. Disclaimer of Warranties </summary>
                <ol type="a">
                    <li>The Diploma in Information Communication Technology students from the Polytechnic University of the Philippines may modify, suspend, or terminate the MTODATA or any part thereof at its sole discretion and without prior notice. Diploma in Information Communication Technology students from the Polytechnic University of the Philippines may modify these Terms anytime. Continued use of the MTODATA after modifications constitutes acceptance of the modified Terms.</li>
            </details>

            <details open>
                <summary>8. Applicable Law </summary>
                <ol type="a">
                    <li>These Terms shall be governed by and construed under the laws of the Philippines. Any dispute arising out of or in connection with these Terms shall be subject to the exclusive jurisdiction of the courts of the Philippines.</li>
            </details>
            
            <div class="content">
                <p>By using the Management Information System for Marulas TODA in Valenzuela City, you acknowledge that you have read, understood, and agreed to these Terms of Use. If you disagree with these Terms, you should refrain from accessing or using the MTODATA.</p>
            </div>

        </div>
    </div>
    
</body>
</html>