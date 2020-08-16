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
            <div class="navbar">
                <a href="https://ibb.co/Y29ZvTT" alt="logo" class="logo"></a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="resume.php">Resume</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
                <!-- links to verification-->
                <!-- post method to protect sensitive data-->
                <?php
                    if (isset($_SESSION['userId'])) {
                        echo '
                        <form action="includes/logout.inc.php" method="post"></form>
                            <a href="includes/logout.inc.php">Logout</a>
                        </form>
                        <p class="loggedin">Hello, '.$_SESSION['userUid'].'. You are logged in!</p>';
                    } else {
                        echo '
                        <form action="includes/login.inc.php" method="post" class="form">
                            <input type="text" name="emailuid" placeholder="Username/Email">
                            <input type="password" name="pwd" placeholder="Password">
                            <button type="submit" name="login-submit" placeholder="Login">Login</button>
                        </form>
                        <a href="signup.php">Sign up</a>';
                    }
                ?>
            </div>
        </header>
    </body>
</html>