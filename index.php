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
                    ';
                } else {
                    echo '
                    <section class="section-div">
                        <p class="loggedout">You are logged out!</p>
                    </section>';
                }
            ?>
            <h1>PHP login form</h1>
                <p>This website is designed to demonstrate some programming knowledge from Scott Geilen. 
                You can view the code at "https://github.com/ScottGeilen/ScottGeilenWebsite"</p>
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
            <p>I'm looking for a full time software development role in the Tucson, Arizona area. I'll bring you knowledge of solving problems with programming.</p>
        </section>
        <section class="section">
            <h1>Why?</h1>
            <p>I made this website!</p>
        </section>
    <div>
</main>
<?php
    require "footer.php";
?>