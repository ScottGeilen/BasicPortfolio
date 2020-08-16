<?php

if (isset($_POST['login-submit'])) {
    // legitimacy check
    require 'dbhandler.inc.php';
    $emailuid = $_POST['emailuid'];
    $password = $_POST['pwd'];
    if (empty($emailuid) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE uidusers=? OR emailusers=?";
        $stmt = mysqli_stmt_init($conn);
        // preparing sql statement from database
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $emailuid, $emailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdusers']);
                if ($pwdCheck == false) {
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                } else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idusers'];
                    $_SESSION['userUid'] = $row['uidusers'];
                    // LOGIN SUCCESS
                    header("Location: http://localhost/Website03Htdocs/index.php");
                    exit();
                } else {
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                }
            } else {
                header("Location: ../index.php?error=nouserfound");
                exit();
            }
        }
    }
} else {
    // sending back to login page
    header("Location: ../index.php");
    exit();
}