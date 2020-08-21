<?php
    session_start();
    require "header.php";
?>
<!DOCTYPE html>
<main>
    <div class="wrapper-main">
        <section class="section" id="signup">
                <?php
                    switch (isset($_GET['error'])) {
                        case 'emptyfields':
                            echo '<div class="error"><p class="signuperror">
                            Error: Fill in all fields!</p></div>';
                            break;
                        case 'invaliduidemail':
                            echo '
                            <div class="error"><p class="signuperror">
                            Error: Invalid username and email!</p></div>';
                            break;
                        case 'invaliduid':
                            echo '
                            <div class="error"><p class="signuperror">
                            Error: Invalid username!</p></div>';
                            break;
                        case 'invalidemail':
                            echo '
                            <div class="error"><p class="signuperror">
                            Error: Invalid email!</p></div>';
                            break;
                        case 'passwordcheck':
                            echo '
                            <div class="error"><p class="signuperror">
                            Error: Passwords do not match!</p></div>';
                            break;
                    } if (isset($_GET['signup'])) {
                        echo '<div class="success"><p class="signupsuccess">
                        Signup successful!</p></div>';
                    }
                ?>
            <section class="section">
                <form action="includes/signup.inc.php" method="post">
                    <h1>Signup</h1>
                    <div class="form-div">
                        <input type="text" name="uid" placeholder="Username" class="inputtext">
                    </div>
                    <div class="form-div">
                        <input type="text" name="email" placeholder="Email" class="inputtext">
                    </div>
                    <div class="form-div">
                        <input type="password" name="pwd" placeholder="Password" class="inputtext">
                    </div>
                    <div class="form-div">
                        <input type="password" name="pwd-repeat" placeholder="Repeat password" class="inputtext">
                    </div>
                    <div class="form-div">
                        <button class="button" type="submit" name="signup-submit">Submit signup</button>
                    </div>
                </form>
            </section>
        </section>
    <div>
</main>