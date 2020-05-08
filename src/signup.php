<?php
    session_start();
    include 'signupHandle.php';
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
        <form class="uni-form" method="post">
            <h1>Join PyEX</h1>
            <?php
                if (isset($_POST['registration_error'])) {
                    echo '<h2>'.$_POST['registration_error'].'</h2>';
                }
            ?>
            <input type="email" name="email" placeholder="E-Mail" required="required">
            <input type="text" name="nickname" placeholder="Nickname" required="required">
            <input type="password" name="password" placeholder="Password(6+ characters)" required="required" pattern="[^ ]{6,}">
            <input type="password" name="password_check" placeholder="Repeat password" required="required" pattern="[^ ]{6,}">
            <input type="submit" value="Sign Up">
        </form>
    </main>
    <footer class="uni-footer">
        <a href="ext.php">&copy PyEX Digital Assets, Ltd. 2020 - Seychelles</a>
    </footer>
</body>
</html>