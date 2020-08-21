<?php
    session_start();
    require "header.php";
?>
<!DOCTYPE html>
<main>
    <div class="wrapper-main">
        <?php
            if (isset($_SESSION['userId'])) {
                echo '
        <h1>About me</h1>
        <p>After graduating with a B.S. in Computer Information Systems, Im officially looking for a full time Software Development position. With all the software development time Ive had under my belt, I have experience with <strong>PHP, Python, Java, C++, MySQL, and Javascript</strong>. If one of these languages arent on the list of skills and qualifications for the position, then you will be happy to know that I am an incredibly quick learner! You will find it no trouble at all to train me and teach me new languages if needed. Honestly, that is why I believe I stand out amongst other applicants, and also why I believe I will benefit your company!<br>
        Thank you for your time. I look forward to hearing from you!</p>
        <h3>Contact</h3>
        <ul>
            <li>Phone: (603) 715-4466</li>
            <li>Email: scottgeilen99@gmail.com</li>
        </ul>';
            } else {
                echo '
        <section class="logged-out">
            <h2 id="why">You are logged out!</h2>
            <a href="signup.php" class="signup nav-div">Sign up</a>
        </section>
        <button type="button" onclick="why()">Why?</button>';
            }
        ?>
    </div>
</main>