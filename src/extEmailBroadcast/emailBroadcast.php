<?php

    if (isset($_POST['emailbroadcast_subject']) && isset($_POST['emailbroadcast_text'])) {
        if (!mysqli_connect_errno()) {
            $sql = 'SELECT * FROM user WHERE receive_broadcast = \'1\'';
            $result = mysqli_fetch_all(mysqli_query($link, $sql), MYSQLI_ASSOC);

            if (!empty(count($result))) {
                foreach ($result as $user) {
                    $email = $user['email'];
                    $nickname = $user['nickname'];

                    if (mail($email, $_POST['emailbroadcast_subject'], $_POST['emailbroadcast_text'])) {
                        echo 'Successfully broadcasted';
                    } else {
                        echo 'Unable to broadcast now';
                    }
                }
            }
        }
    }
