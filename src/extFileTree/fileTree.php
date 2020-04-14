<?php

    if (isset($_GET['ftree_path'])) {
        require 'FileTreeClass.php';

        $path = $_GET['ftree_path'];
        $files = scandir($path);
        if (false != $files) {
            $files = array_diff(scandir($path), ['.', '..']);
            echo implode('<br>', $files);
        } else {
            echo 'Invalid path '.$path;
        }
    }
