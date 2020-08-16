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
                    echo '<p class="loggedin">You are logged in!</p>
                    <h1>Resume</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc enim leo, euismod et dictum sit amet, volutpat quis quam. Etiam nec luctus massa. Donec imperdiet sapien ac nisl feugiat fermentum. Morbi efficitur, elit id euismod pulvinar, mi tellus cursus felis, in ornare mi ante sollicitudin nulla. Cras semper enim nec mi lobortis commodo. Etiam nec lectus sed est efficitur malesuada. Pellentesque in nisl finibus, maximus odio in, dapibus tortor. Phasellus maximus interdum enim, vel tristique nisl finibus non. Donec id vulputate neque. Aenean consequat elementum leo. Donec pulvinar ultrices mauris, vitae tempus purus. Nullam vel sagittis felis. Nunc sodales auctor enim sit amet laoreet. Cras pulvinar tellus eu blandit accumsan.</p>

                    <p>Quisque pellentesque dolor velit, vel lobortis lectus fringilla ut. Sed dictum dui at dui scelerisque imperdiet. Praesent aliquet euismod felis et mattis. Morbi pharetra, urna ac porta pulvinar, metus tortor accumsan dui, eu imperdiet tortor tellus id justo. Nulla sagittis commodo rutrum. Ut ut pulvinar lacus, ac auctor odio. Nulla sit amet nisi ligula. Curabitur hendrerit vestibulum diam. Fusce vehicula facilisis elit, fermentum posuere orci feugiat ac. Nullam lacinia dapibus auctor. Suspendisse accumsan condimentum nisi, auctor scelerisque metus pellentesque eget. Praesent suscipit tristique libero, sed porttitor nunc finibus quis. Morbi quis consequat mauris. Duis nisl sem, mattis in lectus vitae, ornare semper orci. Nullam cursus nibh sit amet ex condimentum, in convallis mauris gravida.</p>

                    <p>Ut in sollicitudin urna. Aenean auctor ut enim at placerat. Maecenas ut dui ullamcorper ipsum fringilla varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc egestas felis sit amet erat faucibus rhoncus. Morbi ut condimentum magna. Nam fermentum urna est, sed faucibus lectus porta vel. Curabitur et placerat dui, in eleifend elit.</p>';
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