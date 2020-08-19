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
            <h2>What is your hourly wage?</h2>
            $<input type="number" name="wage" placeholder="Hourly wage">
            <input type="number" name="hours" placeholder="Hours worked">hours
            Next paycheck: <input type="date" name="date" placeholder="date">
            <button type="submit" name="wage-submit" placeholder="Submit wage">Submit</button>
        </section>
        <section class="section">
            <h1>My name is Scott Geilen</h1>
            <p>Im looking for a full time software development role in the Tucson, Arizona area. Ill bring you knowledge of solving problems with programming.</p>
        </section>
        <section class="section">
            <h1>Why?</h1>
            <p>I made this website!</p>
        </section>
            ';
        } else {
                    echo '
            <section id="logged-out">
                <h2>You are logged out!</h2>
                <a href="signup.php" class="signup nav-div">Sign up</a>
            </section>';
                }
            ?>
        </section>
    <div>
</main>
<?php
    require "footer.php";
?>