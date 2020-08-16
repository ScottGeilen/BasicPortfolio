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
                    You can view the code at "https://github.com/ScottGeilen/ScottGeilenWebsite"</p>
                    <div class="finances">
                        <h3>What is your hourly wage?</h3>
                        $<input type="number" name="wage" placeholder="Hourly wage"><br>
                        <input type="number" name="hours" placeholder="Hours worked"> hours<br>
                        Next paycheck: <input type="date" name="date" placeholder="date"><br>
                        <button type="submit" name="wage-submit" placeholder="Submit wage">Submit</button>
                    </div>
                    ';
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