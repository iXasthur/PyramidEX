<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PyramidEX Profile</title>
    <link rel="stylesheet" href="../css/styles-universal.css">
    <link rel="stylesheet" href="../css/styles-profile.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header class="uni-header">
        <h1><a href="index.php">PyramidEX</a></h1>
        <nav class="uni-header-grid">
            <form class="uni-header-nav-form" method="get" action="trading.php">
                <?php if ( isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == "TRADE" ): ?>
                    <input type="submit" name="coloredMenu" value="TRADE" id="php-coloredBG">
                <?php else: ?>
                    <input type="submit" name="coloredMenu" value="TRADE">
                <?php endif ?>
            </form>
            <form class="uni-header-nav-form" method="get" action="wallet.php">
                <?php if ( isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == "WALLET" ): ?>
                    <input type="submit" name="coloredMenu" value="WALLET" id="php-coloredBG">
                <?php else: ?>
                    <input type="submit" name="coloredMenu" value="WALLET">
                <?php endif ?>
            </form>
            <form class="uni-header-nav-form" method="get" action="profile.php">
                <?php if ( isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == "PROFILE" ): ?>
                    <input type="submit" name="coloredMenu" value="PROFILE" id="php-coloredBG">
                <?php else: ?>
                    <input type="submit" name="coloredMenu" value="PROFILE">
                <?php endif ?>
            </form>
            <form class="uni-header-nav-form" method="get" action="contacts.php">
                <?php if ( isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == "CONTACTS" ): ?>
                    <input type="submit" name="coloredMenu" value="CONTACTS" id="php-coloredBG">
                <?php else: ?>
                    <input type="submit" name="coloredMenu" value="CONTACTS">
                <?php endif ?>
            </form>
        </nav>
    </header>
    <main class="p-main-wrapper">
        <section class="p-info">
            <h2>Profile</h2>
            <p>Nickname: yournickname</p>
            <p>E-Mail: youremain</p>
            <p>Country: yourcountry</p>
            <p>City: yourcity</p>
        </section>
        <section class="p-info">
            <h2>Trading fees</h2>
            <p>Seller: 0.05%</p>
            <p>Buyer: 0.05%</p>
        </section>
        <section class="p-info">
            <h2>KYC: PASSED</h2>
        </section>
    </main>
    <footer class="uni-footer">
        <a href="ext.php">&copy PyEX Digital Assets, Ltd. 2020 - Seychelles</a>
    </footer>
</body>
</html>