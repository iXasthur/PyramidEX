<?php
    $link = @mysqli_connect('localhost', 'root', '', 'pyex');
    include 'ipLogger.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PyramidEX Sign Up</title>
    <link rel="stylesheet" href="../css/styles-universal.css">
    <link rel="stylesheet" href="../css/styles-signup.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header class="uni-header">
        <h1><a href="index.php">PyramidEX</a></h1>
        <nav class="uni-header-grid">
            <?php include 'headerMenuOutput.php'; ?>
        </nav>
    </header>
    <main class="su-main-wrapper">
        <form class="uni-form" method="get" action="index.php">
            <h1>Join PyEX</h1>
            <input type="email" name="" placeholder="E-Mail">
            <input type="text" name="" placeholder="Nickname">
            <input type="password" name="" placeholder="Password">
            <input type="password" name="" placeholder="Repeat password">
            <input type="hidden" name="tab" value="PROFILE">
            <input type="submit" value="Sign Up">
        </form>
    </main>
    <footer class="uni-footer">
        <a href="ext.php">&copy PyEX Digital Assets, Ltd. 2020 - Seychelles</a>
    </footer>
</body>
</html>