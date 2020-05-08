<?php

    function loginUser($link, $email, $password): bool
    {
        if (!mysqli_connect_errno()) {
            $sql = 'SELECT * FROM user WHERE email = \''.$email.'\' LIMIT 1';
            $result = mysqli_fetch_all(mysqli_query($link, $sql), MYSQLI_ASSOC);

            if (!empty(count($result))) {
                $passwordHash = $result[0]['password_hash'];
                if (password_verify($password, $passwordHash)) {
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['password'] = $_POST['password'];

                    return true;
                } else {
                    $_POST['login_error'] = 'Invalid password';

                    return false;
                }
            } else {
                $_POST['login_error'] = 'User '.$email.'<br>does not exist';

                return false;
            }
        } else {
            $_POST['login_error'] = 'Unable to sign in<br>Try again later';

            return false;
        }
    }

    if (isset($_POST['email']) && isset($_POST['password'])) {
        if (loginUser($link, $_POST['email'], $_POST['password'])) {
            header('Location: index.php?tab=PROFILE');
            exit();
        }
    }
