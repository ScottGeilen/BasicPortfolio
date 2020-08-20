<?php
    session_start();
    require "header.php";
?>
<!DOCTYPE html>
<main>
    <div class="wrapper-main">
        <?php
            if (isset($_SESSION['userId'])) {
                echo '
        <h1>PHP login form</h1>
        <p>This website is designed to demonstrate some programming knowledge from Scott Geilen. 
        You can view the code at "https://github.com/ScottGeilen/ScottGeilenWebsite"</p>
                ';
        } else {
                    echo '
        <section class="logged-out">
            <h2>You are logged out!</h2>
            <a href="signup.php" class="signup">Sign up</a>
        </section>';
            }
        ?>
    </div>
</main>