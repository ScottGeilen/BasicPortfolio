<?php
// checks if signup-submit was acted upon
if (isset($_POST['signup-submit'])) {
    require 'dbhandler.inc.php';
    $wage = $_POST['wage'];
    $hours = $_POST['hours'];
    $date = $_POST['date'];
    $output = $wage*$hours;
}
    else {
        // sending back to signup page
        header("Location: ../signup.php?signup.php");
        exit();
    }