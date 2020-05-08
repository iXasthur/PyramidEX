<?php

    if (isset($_GET['tshrt_text']) && strlen($_GET['tshrt_text']) > 0) {
        require 'TextShortenerClass.php';

        $text = $_GET['tshrt_text'];

        $shortener = new TextShortener($text);

        echo '<h3>'.'Initial text:'.'</h3>';
        echo '<p>'.$text.'</p>';

        echo '<h3>'.'Shortened text:'.'</h3>';
        echo '<p>'.$shortener->getShortenedText().'</p>';
    }
