<?php
    session_start();
    require "header.php";
?>
<!DOCTYPE html>
<main>
    <div class="wrapper-main">
        <section class="section-default">
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<h1 class="resume-header">PHP login form</h1>
                    <p>This website is designed to demonstrate some programming knowledge from Scott Geilen. 
                    You can view the code at "https://github.com/ScottGeilen/ScottGeilenWebsite"</p>';
                } else {
                    echo '<p class="loggedout">You are logged out!</p>';
                }
            ?>
        </section>
    <div>
</main>
<?php
    require "footer.php";
?>