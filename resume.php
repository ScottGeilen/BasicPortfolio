<?php
    session_start();
    require "header.php";
?>
<!DOCTYPE html>
<main>
    <div class="wrapper-main">
        <section class="section">
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '
            <h2 class="resume-header">EDUCATION</h2>
            <p>Bachelor of Science in Computer Information Systems at University of New Hampshire</p>
            <h2 class="resume-header">EXPERIENCE</h2>
            <h3>C Squared Systems</h3>
            <p class="resume-title-location">Software Developer Intern - Auburn, NH</p>
            <ul class="resume-list">
                <li>Develop scripts to satisfy issues with a device within an environment which requires the use of Laravel Migration to merge development changes for new release</li>
                <li>Troubleshoot existing software by testing different methods to correct errors and improve its performance</li>
                <li>Designed new PHP code and database structures for devices to better satisfy customer requests</li>
                <li>Device department to transition software development efforts to new upgraded version of internal software</li>
                <li>Communicate effectively for regression test software for Quality Assurance</li>
            </ul>
                ';
                } else {
                    echo '
            <section class="logged-out">
                <h2>You are logged out!</h2>
                <a href="signup.php" class="signup nav-div">Sign up</a>
            </section>
                ';}
            ?>
        </section>
    <div>
</main>