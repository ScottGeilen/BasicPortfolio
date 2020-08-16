<?php
    session_start();
    require "header.php";
?>
<!DOCTYPE html>
<main>
    <div class="wrapper-main">
        <section class="section-default">
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<h1 class="resume-header">About me</h1>
                    <p>After graduating with a B.S. in Computer Information Systems, Im officially looking for a full time Software Development position. With all the software development time Ive had under my belt, I have experience with <strong>PHP, Python, Java, C++, MySQL, and Javascript</strong>. If one of these languages arent on the list of skills and qualifications for the position, then you will be happy to know that I am an incredibly quick learner! You will find it no trouble at all to train me and teach me new languages if needed. Honestly, that is why I believe I stand out amongst other applicants, and also why I believe I will benefit your company!<br>
                    Thank you for your time. I look forward to hearing from you!</p>';
                } else {
                    echo '<p class="loggedout">You are logged out!</p>';
                }
            ?>
        </section>
    <div>
</main>
<?php
    require "footer.php";
?>