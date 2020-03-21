<?php
    require 'ArrayMergerClass.php';

    if (isset($_GET['mrg_arr1']) && isset($_GET['mrg_arr2'])) {
        echo '<p>';
        echo '1st array: ';
        if (strlen($_GET['mrg_arr1']) > 0) {
            echo '[' . $_GET['mrg_arr1'] . ']';
        } else {
            echo ' []';
        }
        echo '<br>';
        echo '</p>';

        echo '<p>';
        echo '2nd array: ';
        if (strlen($_GET['mrg_arr2']) > 0) {
            echo '[' . $_GET['mrg_arr2'] . ']';
        } else {
            echo ' []';
        }
        echo '<br>';
        echo '</p>';

        $numArray1 = [];
        $numArray2 = [];

        if (strlen($_GET['mrg_arr1']) > 0) {
            $numArray1 = explode(" ", $_GET['mrg_arr1']);
        }

        if (strlen($_GET['mrg_arr2']) > 0) {
            $numArray2 = explode(" ", $_GET['mrg_arr2']);
        }

        $arrayMerger = new ArrayMerger($numArray1, $numArray2);
        $numArrayMrg = $arrayMerger->getMergedArray();
        $numArrayMrgEven = $arrayMerger->getMergedEvenArray();

        echo '<p>';
        echo 'New array: [' . implode( " ", $numArrayMrg) . ']';
        echo '</p>';

        echo '<p>';
        echo 'Even array: [' . implode( " ", $numArrayMrgEven) . ']';
        echo '</p>';
    }