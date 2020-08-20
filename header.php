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
            <div class="nav-section">
                    <div class="logo">
                        <h2>Scott Geilen</h2>    
                    </div>
                    <?php
                        if (isset($_SESSION['userId'])) {
                            echo '
                    <div class="nav-account">
                        <p class="loggedin">'.$_SESSION['userUid'].' is logged in!</p>
                        <form action="includes/logout.inc.php" method="post">
                            <a class="logout" href="includes/logout.inc.php">Logout</a>
                        </form>
                    </div>
                    ';
                    } else {
                        echo '
                    <div class="nav-account"
                        <form class="login-form" action="includes/login.inc.php" method="post">
                            <div class="login-div">
                                <input type="text" name="emailuid" placeholder="Username/Email">
                                <input type="password" name="pwd" placeholder="Password">
                            </div>
                            <button class="loginbutton" type="submit" name="loginbutton" placeholder="Login">Login</button>
                        </form>
                    </div>
                ';}
                ?>
                </div>
            <nav class="navbar">
                <div class="navbar-links">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="resume.php">Resume</a></li>
                        <li><a href="projects.php">Projects</a></li>
                    </ul>
                </div>
            </nav>
            <a href="#" class="toggle-button">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
        </header>
    </body>
</html>