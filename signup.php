<?php
    require "header.php";
?>
<main>
    <div class="wrapper-main">
        <section class="section" id="signup">
            <div class="error">
            <?php
                switch (isset($_GET['error'])) {
                    case 'emptyfields':
                        echo '<p class="signuperror">Error: Fill in all fields!</p>';
                        break;
                    case 'invaliduidemail':
                        echo '<p class="signuperror">Error: Invalid username and email!</p>';
                        break;
                    case 'invaliduid':
                        echo '<p class="signuperror">Error: Invalid username!</p>';
                        break;
                    case 'invalidemail':
                        echo '<p class="signuperror">Error: Invalid email!</p>';
                        break;
                    case 'passwordcheck':
                        echo '<p class="signuperror">Error: Passwords do not match!</p>';
                        break;
                } if (isset($_GET['signup'])) {
                    echo '<p class="signupsuccess">Signup successful!</p>';
                }
            ?>
            <!-- <form class="form-signup" action="includes/signup.inc.php" method="post">
                <h1>Signup<h1>
                <input type="text" name="uid" placeholder="Username" class="inputtext">
                <input type="text" name="email" placeholder="Email" class="inputtext">
                <input type="password" name="pwd" placeholder="Password" class="inputtext">
                <input type="password" name="pwd-repeat" placeholder="Repeat password" class="inputtext">
                <button type="submit" name="signup-submit">Submit signup</button>
            </form> -->
            <section class="section">
                <form action="includes/signup.inc.php" method="post">
                    <h1>Signup</h1>
                    <div>
                        <label>Username</label>
                        <input type="text" name="uid" placeholder="Username" class="inputtext">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Email" class="inputtext">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="pwd" placeholder="Password" class="inputtext">
                    </div>
                    <div>
                        <label>Repeat password</label>
                        <input type="password" name="pwd-repeat" placeholder="Repeat password" class="inputtext">
                    </div>
                    <div>
                        <button class="button" type="submit" name="signup-submit">Submit signup</button>
                    </div>
                </form>
            </section>
        </section>
    <div>
</main>
<?php
    require "footer.php";
?>