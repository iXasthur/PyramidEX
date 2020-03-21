<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PyramidEX Wallet</title>
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
    <main class="w-main-wrapper">
        <section class="w-info">
            <h2>OVERALL BALANCE: 110500$ (11.05 BTC)</h2>
        </section>
        <section class="w-balance-grid">
            <div class="w-coin-grid">
                <p>Name</p>
                <p></p>
                <p></p>
                <p>Amount</p>
                <p>Balance</p>
            </div>
            <div class="w-coin-grid">
                <img src="BTC.png" alt="BTC">
                <p class="uni-coin-sname">BTC</p>
                <p class="uni-coin-fname">Bitcoin</p>
                <p>10</p>
                <p>100000$</p>
            </div>
            <div class="w-coin-grid">
                <img src="ETH.png" alt="ETH">
                <p class="uni-coin-sname">ETH</p>
                <p class="uni-coin-fname">Ethereum</p>
                <p>5</p>
                <p>2500$</p>
            </div>
            <div class="w-coin-grid">
                <img src="EOS.png" alt="EOS">
                <p class="uni-coin-sname">EOS</p>
                <p class="uni-coin-fname">EOS</p>
                <p>400</p>
                <p>8000$</p>
            </div>
        </section>
    </main>
    <footer class="uni-footer">
        <a href="test.php">&copy PyEX Digital Assets, Ltd. 2020 - Seychelles</a>
    </footer>
</body>
</html>