</php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is meta description and shows up in search results.">
        <script src="app.js" defer></script>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Scott Geilen</title>
        <Link rel="stylesheet" href="style.css">
        <?php
            $activePage = basename($_SERVER['PHP_SELF'], ".php");
        ?>
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="logo">Scott Geilen</div>
                <div class="navbar-links">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="resume.php">Resume</a></li>
                        <li><a href="projects.php">Projects</a></li>
                    </ul>
                </div>
                <!-- <ul class="nav-links nav-div">
                    <li class="<?php echo ($activePage == "index.php" ? "nav-active" : "")?>"></li><a href="index.php">Home</a>
                    <li class="<?php echo ($activePage == "resume.php" ? "nav-active" : "")?>"></li><a href="resume.php">Resume</a>
                    <li class="<?php echo ($activePage == "about.php" ? "nav-active" : "")?>"></li><a href="about.php">About</a>
                </ul> -->
                <!-- links to verification-->
                <!-- post method to protect sensitive data-->
                <?php
                    if (isset($_SESSION['userId'])) {
                        echo '
                <div class="nav-account">
                    <p class="loggedin">'.$_SESSION['userUid'].' is logged in!</p>
                    <form action="includes/logout.inc.php" method="post">
                        <a class="logout" href="includes/logout.inc.php">Logout</a>
                    </form>
                </div>
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
            </nav>
                ';
                } else {
                    echo '
            <div class="nav-account">
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="emailuid" placeholder="Username/Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="loginout-button" placeholder="Login">Login</button>
                </form>
            </div>
            <a href="#" class="toggle-button">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
        </header>
                ';}
                ?>
    </body>
</html>