<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PyramidEX Contacts</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header class="uni-header">
        <h1><a href="index.php">PyramidEX</a></h1>
        <nav class="uni-header-grid">
            <form class="uni-header-form" method="get" action="trading.php">
                <?php if ( isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == "TRADE" ): ?>
                    <input type="submit" name="coloredMenu" value="TRADE" id="php-coloredBG">
                <?php else: ?>
                    <input type="submit" name="coloredMenu" value="TRADE">
                <?php endif ?>
            </form>
            <form class="uni-header-form" method="get" action="wallet.php">
                <?php if ( isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == "WALLET" ): ?>
                    <input type="submit" name="coloredMenu" value="WALLET" id="php-coloredBG">
                <?php else: ?>
                    <input type="submit" name="coloredMenu" value="WALLET">
                <?php endif ?>
            </form>
            <form class="uni-header-form" method="get" action="profile.php">
                <?php if ( isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == "PROFILE" ): ?>
                    <input type="submit" name="coloredMenu" value="PROFILE" id="php-coloredBG">
                <?php else: ?>
                    <input type="submit" name="coloredMenu" value="PROFILE">
                <?php endif ?>
            </form>
            <form class="uni-header-form" method="get" action="contacts.php">
                <?php if ( isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == "CONTACTS" ): ?>
                    <input type="submit" name="coloredMenu" value="CONTACTS" id="php-coloredBG">
                <?php else: ?>
                    <input type="submit" name="coloredMenu" value="CONTACTS">
                <?php endif ?>
            </form>
        </nav>
    </header>
    <main class="c-main-wrapper">
        <section class="c-contacts">
            <h2>Contacts</h2>
            <p>Telegram: @pyex</p>
            <p>Phone: +1234567890</p>
            <p>E-Main: support@pyex.io</p>
        </section>
    </main>
    <footer class="uni-footer">
        <a href="test.php">&copy PyEX Digital Assets, Ltd. 2020 - Seychelles</a>
    </footer>
</body>
</html>