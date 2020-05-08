<?php

    function registerUser($email, $nickname, $password): bool
    {
        $link = @mysqli_connect('localhost', 'root', '', 'pyex');

        if (!mysqli_connect_errno()) {

        }

        return true;
    }

    if (isset($_POST['email']) && isset($_POST['nickname']) && isset($_POST['password']) && isset($_POST['password_check'])) {
        if ($_POST['password'] == $_POST['password_check']) {
            if (registerUser($_POST['email'], $_POST['nickname'], $_POST['password'])) {

//                header('Location: index.php?tab=PROFILE');
//                exit();
            } else {
                $_POST['registration_error'] = 'Unable to sign up<br>Try again later';
            }
        } else {
            $_POST['registration_error'] = 'Passwords do not equal';
        }
    }
