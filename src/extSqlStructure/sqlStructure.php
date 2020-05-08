<?php

    // Test code here

    if (true) {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'pyex';

        $link = mysqli_connect($host, $user, $password, $database);

        if (!mysqli_connect_errno()) {
            require 'SqlStructureClass.php';

            $structure = new SqlStructure($link);
            $structure->outputTables();

            $link->close();
        }
    }

    if (isset($_GET['sqlstruct_name']) && isset($_GET['sqlstruct_login']) && isset($_GET['sqlstruct_password'])) {
        require 'SqlStructureClass.php';

        // Final code here
    }
