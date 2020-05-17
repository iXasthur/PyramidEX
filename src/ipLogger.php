<?php

    if (!isset($_COOKIE['PHPSESSID'])) {
        if (!mysqli_connect_errno()) {

            $ip = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP);

            if (false != $ip) {
                $sql = 'SELECT * FROM iphistory WHERE ip = \''.$ip.'\' LIMIT 1';
                $result = mysqli_fetch_all(mysqli_query($link, $sql), MYSQLI_ASSOC);

                if (!empty(count($result))) {
                    $id = $result[0]['id'];
                    $count = $result[0]['count'] + 1;

                    $sql = 'UPDATE iphistory SET count = \''.$count.'\' WHERE iphistory.id = '.$id;
                    mysqli_query($link, $sql);
                } else {
                    $sql = 'INSERT INTO iphistory (id, ip, count) VALUES (NULL, \''.$ip.'\', \'1\')';
                    mysqli_query($link, $sql);
                }
            }
        }
    }
