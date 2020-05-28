<?php
    $link = @mysqli_connect('localhost', 'root', '', 'pyex');
    include 'ipLogger.php';
    session_start();
    include 'loginHandle.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PyramidEX Log In</title>
    <link rel="stylesheet" href="../css/styles-universal.css">
    <link rel="stylesheet" href="../css/styles-login.css">
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
    <main class="li-main-wrapper">
        <form class="uni-form" method="post">
            <h1>Log In to PyEX</h1>
            <?php
            if (isset($_POST['login_error'])) {
                echo '<h2>'.$_POST['login_error'].'</h2>';
            }
            ?>
            <input type="email" name="email" placeholder="E-Mail" required="required">
            <input type="password" name="password" placeholder="Password" required="required">
            <input type="submit" value="Log In">
        </form>
    </main>
    <footer class="uni-footer">
        <a href="ext.php">&copy PyEX Digital Assets, Ltd. 2020 - Seychelles</a>
    </footer>
</body>
</html>