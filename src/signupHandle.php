<?php

    function userExists($link, $email): bool
    {
        $sql = 'SELECT * FROM user WHERE email = \''.$email.'\'';
        $result = mysqli_fetch_all(mysqli_query($link, $sql));

        if (empty(count($result))) {
            return false;
        } else {
            return true;
        }
    }

    function registerUser($link, $email, $nickname, $password): bool
    {
        if (!mysqli_connect_errno()) {
            if (!userExists($link, $email)) {
                $passwordHash = password_hash($password, PASSWORD_ARGON2I);

                $sql = 'INSERT INTO user (id, nickname, email, password_hash, seller_fee, buyer_fee, kyc_status, receive_broadcast) ';
                $sql = $sql.'VALUES (NULL, \''.$nickname.'\', \''.$email.'\', \''.$passwordHash.'\', \'0.05\', \'0.05\', \'0\', \'1\')';

                if (mysqli_query($link, $sql)) {
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['password'] = $_POST['password'];

                    return true;
                } else {
                    $_POST['registration_error'] = 'Error adding user to database';

                    return false;
                }
            } else {
                $_POST['registration_error'] = 'E-mail '.$email.'<br>is already in use';

                return false;
            }
        } else {
            $_POST['registration_error'] = 'Unable to sign up<br>Try again later';

            return false;
        }
    }

    if (isset($_POST['email']) && isset($_POST['nickname']) && isset($_POST['password']) && isset($_POST['password_check'])) {
        if ($_POST['password'] == $_POST['password_check']) {
            if (registerUser($link, $_POST['email'], $_POST['nickname'], $_POST['password'])) {
                $_SESSION['welcomeMessage'] = 'Welcome, '.$_POST['nickname'];

                header('Location: index.php?tab=PROFILE');
                exit();
            }
        } else {
            $_POST['registration_error'] = 'Passwords do not equal';
        }
    }
