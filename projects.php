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
            <h1>PROJECTS</h1>
            <p>Github: </p><section class="section-div">
            <section class="section-div">
                <h2>What is your hourly wage?</h2>
                <section class="section-div-div">
                    $<input type="number" name="wage" placeholder="Hourly wage">
                </section>
                <section class="section-div-div">
                    <input type="number" name="hours" placeholder="Hours worked">hours
                </section>
                <section class="section-div-div">
                    Next paycheck: <input type="date" name="date" placeholder="date">
                </section>
                <section class="section-div-div">
                    <button type="submit" name="wage-submit" placeholder="Submit wage">Submit</button>
                </section>
            </section>
        </section>
        <section class="section">
            <h1>My name is Scott Geilen</h1>
            <p>Im looking for a full time software development role in the Tucson, Arizona area. Ill bring you knowledge of solving problems with programming.</p>
        </section>
        <section class="section">
            <h1>Why?</h1>
            <p>I made this website!</p>
                    ';
                } else {
                    echo '
            <section class="logged-out">
                <h2 id="why">You are logged out!</h2>
                <a href="signup.php" class="signup nav-div">Sign up</a>
                <button type="button" onclick="why()">Why?</button>
            </section>';
                }
            ?>
        </section>
    <div>
</main>