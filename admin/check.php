<?php
    $email = $_POST["email"];
    $pswd  = $_POST["pswd"];;

    if (isset($email) && isset($pswd)) {
        if(!empty($email) || !empty($pswd)) {
            if($email == 'admin@code.edu.az' && $pswd == '123456') {
                session_start();
                $_SESSION['adminmail'] = $email;
                $_SESSION['adminpass'] = $pswd;
                header('Location:allnews.php');
            } else {
                header('Location:index.php');
            }
        } else {
            echo 'check form data';
        }
    } else {
        echo 'Something went wrong';
    }