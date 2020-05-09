<?php

    if (isset($_POST['emailbroadcast_subject']) && isset($_POST['emailbroadcast_text'])) {
        if (!mysqli_connect_errno()) {
            $sql = 'SELECT * FROM user WHERE receive_broadcast = \'1\'';
            $result = mysqli_fetch_all(mysqli_query($link, $sql), MYSQLI_ASSOC);

            if (!empty(count($result))) {
                foreach ($result as $user) {
                    $email = $user['email'];
                    $nickname = $user['nickname'];
                    $headers = 'From: '.$email."\r\n".'MIME-Version: 1.0'."\r\n".'Content-type: text/html; charset=utf-8';

                    $subject = '=?utf-8?B?'.base64_encode($_POST['emailbroadcast_subject']).'?=';

                    mail($email, $subject, $_POST['emailbroadcast_text']);
                }
            }
        }

        header('Location: ext.php');
        exit();
    }
