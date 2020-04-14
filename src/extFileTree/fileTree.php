<?php

    if (isset($_GET['ftree_path'])) {
        require 'FileTreeClass.php';

        $path = $_GET['ftree_path'];

        if (file_exists($path)) {
            $nesting = 0;

            $fileTree = new FileTree($path);
            echo '<h3>Real path: '.realpath($path).'</h3>';
            $fileTree->printTreeTable();

        } else {
            echo 'Invalid path '.$path;
        }
    }
