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
            <form class="uni-header-nav-form" method="get" action="trading.php">
                <?php if (isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == 'TRADE'): ?>
                    <input type="submit" name="coloredMenu" value="TRADE" id="php-coloredBG">
                <?php else: ?>
                    <input type="submit" name="coloredMenu" value="TRADE">
                <?php endif ?>
            </form>
            <form class="uni-header-nav-form" method="get" action="wallet.php">
                <?php if (isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == 'WALLET'): ?>
                    <input type="submit" name="coloredMenu" value="WALLET" id="php-coloredBG">
                <?php else: ?>
                    <input type="submit" name="coloredMenu" value="WALLET">
                <?php endif ?>
            </form>
            <form class="uni-header-nav-form" method="get" action="profile.php">
                <?php if (isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == 'PROFILE'): ?>
                    <input type="submit" name="coloredMenu" value="PROFILE" id="php-coloredBG">
                <?php else: ?>
                    <input type="submit" name="coloredMenu" value="PROFILE">
                <?php endif ?>
            </form>
            <form class="uni-header-nav-form" method="get" action="contacts.php">
                <?php if (isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == 'CONTACTS'): ?>
                    <input type="submit" name="coloredMenu" value="CONTACTS" id="php-coloredBG">
                <?php else: ?>
                    <input type="submit" name="coloredMenu" value="CONTACTS">
                <?php endif ?>
            </form>
        </nav>
    </header>
    <main class="ext-main-wrapper">
        <form class="uni-form" method="get">
            <h1>Merge arrays</h1>
            <h2>Input numbers separated with spaces</h2>
            <?php include 'arrayMerge.php' ?>
            <input type="text" autocomplete="off" name="mrg_arr1" placeholder="1st array" pattern="^([0-9] ?)*[0-9]$">
            <input type="text" autocomplete="off" name="mrg_arr2" placeholder="2nd array" pattern="^([0-9] ?)*[0-9]$">
            <input type="submit" name="" value="Merge">
        </form>
    </main>
    <footer class="uni-footer">
        <a href="ext.php">&copy PyEX Digital Assets, Ltd. 2020 - Seychelles</a>
    </footer>
</body>
</html>