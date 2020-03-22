<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PyramidEX Wallet</title>
    <link rel="stylesheet" href="../css/styles-universal.css">
    <link rel="stylesheet" href="../css/styles-wallet.css">
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
                <img src="../img/BTC.png" alt="BTC">
                <p class="uni-coin-sname">BTC</p>
                <p class="uni-coin-fname">Bitcoin</p>
                <p>10</p>
                <p>100000$</p>
            </div>
            <div class="w-coin-grid">
                <img src="../img/ETH.png" alt="ETH">
                <p class="uni-coin-sname">ETH</p>
                <p class="uni-coin-fname">Ethereum</p>
                <p>5</p>
                <p>2500$</p>
            </div>
            <div class="w-coin-grid">
                <img src="../img/EOS.png" alt="EOS">
                <p class="uni-coin-sname">EOS</p>
                <p class="uni-coin-fname">EOS</p>
                <p>400</p>
                <p>8000$</p>
            </div>
        </section>
    </main>
    <footer class="uni-footer">
        <a href="ext.php">&copy PyEX Digital Assets, Ltd. 2020 - Seychelles</a>
    </footer>
</body>
</html>