<?php

    if (isset($_POST['signout'])) {
        session_destroy();
        header('Location: index.php');
        exit();
    }
