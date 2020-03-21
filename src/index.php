<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PyramidEX^_^</title>
    <link rel="stylesheet" href="../css/styles-universal.css">
    <link rel="stylesheet" href="../css/styles-index.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link>
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
    <main class="i-main-wrapper">
        <section class="i-features">
            <h2>Buy. Sell. Trade.</h2>
            <p>BTC, ETH, USDT, TRX, and the best altcoins on the market.</p>
            <div class="i-login-menu">
                <a href="login.php"><span>Log In</span></a>
                <a href="signup.php"><span>Sign Up</span></a>
            </div>
        </section>
        <section class="i-markets">
            <h2>Markets</h2>
            <div class="i-markets-grid">
                <div class="i-markets-coin-grid">
                    <p>Name</p>
                    <p></p>
                    <p></p>
                    <p>24h Change</p>
                    <p>Last price</p>
                </div>
                <div class="i-markets-coin-grid">
                    <img src="../img/BTC.png" alt="BTC">
                    <p class="uni-coin-sname">BTC</p>
                    <p class="uni-coin-fname">Bitcoin</p>
                    <p>+10%</p>
                    <p>1000$</p>
                </div>
                <div class="i-markets-coin-grid">
                    <img src="../img/ETH.png" alt="ETH">
                    <p class="uni-coin-sname">ETH</p>
                    <p class="uni-coin-fname">Ethereum</p>
                    <p>+10%</p>
                    <p>50$</p>
                </div>
                <div class="i-markets-coin-grid">
                    <img src="../img/EOS.png" alt="EOS">
                    <p class="uni-coin-sname">EOS</p>
                    <p class="uni-coin-fname">EOS</p>
                    <p>+20%</p>
                    <p>42$</p>
                </div>
                <div class="i-markets-coin-grid">
                    <img src="../img/IOTA.png" alt="IOTA">
                    <p class="uni-coin-sname">IOTA</p>
                    <p class="uni-coin-fname">MIOTA</p>
                    <p>+4%</p>
                    <p>7$</p>
                </div>
                <div class="i-markets-coin-grid">
                    <img src="../img/XRP.png" alt="XRP">
                    <p class="uni-coin-sname">XRP</p>
                    <p class="uni-coin-fname">Ripple</p>
                    <p>-7%</p>
                    <p>2$</p>
                </div>
                <div class="i-markets-coin-grid">
                    <img src="../img/BCH.png" alt="BCH">
                    <p class="uni-coin-sname">BCH</p>
                    <p class="uni-coin-fname">Bitcoin cash</p>
                    <p>-17%</p>
                    <p>400$</p>
                </div>
            </div>
        </section>
        <section class="i-partners">
            <h2>Partners</h2>
            <div class="i-partners-grid">
                <div>
                    <h3>Google inc.</h3>
                </div>
                <div>
                    <h3>Apple inc.</h3>
                </div>
                <div>
                    <h3>Chikibamboni inc.</h3>
                </div>
            </div>
        </section>
    </main>
    <footer class="uni-footer">
        <a href="ext.php">&copy PyEX Digital Assets, Ltd. 2020 - Seychelles</a>
    </footer>
</body>
</html>