</php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is meta description and shows up in search results."
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title></title>
        <Link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <nav>
                <div class="logo">
                    <h3>ScottDev</h1>
                </div>
                <?php
                    $activePage = basename($_SERVER['PHP_SELF'], ".php");
                ?>
                <ul class="nav-links">
                    <li class="<?php echo ($activePage == "index.php" ? "nav-active" : "")?>"></li><a href="index.php">Home</a>
                    <li class="<?php echo ($activePage == "index.php" ? "nav-active" : "")?>"></li><a href="resume.php">Resume</a>
                    <li class="<?php echo ($activePage == "index.php" ? "nav-active" : "")?>"></li><a href="about.php">About</a>
                </ul>
                <!-- links to verification-->
                <!-- post method to protect sensitive data-->
                <?php
                    if (isset($_SESSION['userId'])) {
                        echo '
                        <form action="includes/logout.inc.php" method="post"></form>
                            <a class="logout" href="includes/logout.inc.php">Logout</a>
                        </form>
                        <p class="loggedin">Hello, '.$_SESSION['userUid'].'. You are logged in!</p>';
                    } else {
                        echo '
                        <form action="includes/login.inc.php" method="post" class="form">
                            <input type="text" name="emailuid" placeholder="Username/Email">
                            <input type="password" name="pwd" placeholder="Password">
                            <button type="submit" name="login-submit" placeholder="Login">Login</button>
                        </form>
                        <a href="signup.php" class="signup">Sign up</a>';
                    }
                ?>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>
            <script></script>
        </header>
    </body>
</html>