<?php

    if (isset($_POST['sqlstruct_name']) && isset($_POST['sqlstruct_login']) && isset($_POST['sqlstruct_password'])) {
        require 'SqlStructureClass.php';

        $host = 'localhost';
        $user = $_POST['sqlstruct_login'];
        $password = $_POST['sqlstruct_password'];
        $database = $_POST['sqlstruct_name'];

        if ('' != $database) {
            $link = @mysqli_connect($host, $user, $password, $database);

            if (!mysqli_connect_errno()) {
                echo '<h3>';
                echo '[PRI] - Primary key';
                echo '</h3>';
                echo '<h3>';
                echo '[MUL] - Secondary key';
                echo '</h3>';

                $structure = new SqlStructure($link);
                $structure->outputTables();

                $link->close();
            } else {
                echo '<h3>';
                echo 'Can\'t connect to '.$database.'<br>';
                echo 'Error: '.mysqli_connect_errno();
                echo '</h3>';
            }
        } else {
            echo '<h3>';
            echo 'Error:'.'<br>';
            echo 'Database name must be not empty';
            echo '</h3>';
        }
    }
