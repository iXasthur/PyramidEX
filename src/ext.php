<?php
    session_start();
    $link = @mysqli_connect('localhost', 'root', '', 'pyex');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PyramidEX^_^</title>
    <link rel="stylesheet" href="../css/styles-universal.css">
    <link rel="stylesheet" href="../css/styles-ext.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link>
</head>
<body>
    <header class="uni-header">
        <h1><a href="index.php">PyramidEX</a></h1>
        <nav class="uni-header-grid">
            <?php include 'headerMenuOutput.php'; ?>
        </nav>
    </header>
    <main class="ext-main-wrapper">
        <form class="uni-form" method="get">
            <h1>Merge arrays</h1>
            <h2>Input numbers separated with spaces</h2>
            <?php include 'extArrayMerge/arrayMerge.php'; ?>
            <input type="text" autocomplete="off" name="mrg_arr1" placeholder="1st array" pattern="^([0-9] ?)*[0-9]$">
            <input type="text" autocomplete="off" name="mrg_arr2" placeholder="2nd array" pattern="^([0-9] ?)*[0-9]$">
            <input type="submit" name="" value="Merge">
        </form>
        <form class="uni-form" method="get">
            <h1>Get file tree</h1>
            <h2>Input path</h2>
            <?php include 'extFileTree/fileTree.php'; ?>
            <input type="text" autocomplete="off" name="ftree_path" placeholder="Path" pattern="\.[^\.]*">
            <input type="submit" name="" value="Get">
        </form>
        <form class="uni-form" method="get">
            <h1>Text shortener</h1>
            <h2>Words with more than 6 characters will be shortened</h2>
            <?php include 'extTextShortener/textShortener.php'; ?>
            <input type="text" autocomplete="off" name="tshrt_text" placeholder="Text">
            <input type="submit" name="" value="Shorten">
        </form>
    </main>
    <footer class="uni-footer">
        <a href="ext.php">&copy PyEX Digital Assets, Ltd. 2020 - Seychelles</a>
    </footer>
</body>
</html>