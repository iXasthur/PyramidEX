<div class="i-main-wrapper">
    <section class="m-features">
        <h2>Buy. Sell. Trade.</h2>
        <p>BTC, ETH, USDT, TRX, and the best altcoins on the market.</p>
        <?php if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { ?>
            <div class="m-login-menu">
                <a href="login.php"><span>Log In</span></a>
                <a href="signup.php"><span>Sign Up</span></a>
            </div>
        <?php } ?>
    </section>
    <section class="m-markets">
        <h2>Markets</h2>
        <div class="m-markets-grid">
            <div class="m-markets-coin-grid">
                <p>Name</p>
                <p></p>
                <p></p>
                <p>24h Change</p>
                <p>Last price</p>
            </div>
            <div class="m-markets-coin-grid">
                <img src="../img/BTC.png" alt="BTC">
                <p class="uni-coin-sname">BTC</p>
                <p class="uni-coin-fname">Bitcoin</p>
                <p>+10%</p>
                <p>1000$</p>
            </div>
            <div class="m-markets-coin-grid">
                <img src="../img/ETH.png" alt="ETH">
                <p class="uni-coin-sname">ETH</p>
                <p class="uni-coin-fname">Ethereum</p>
                <p>+10%</p>
                <p>50$</p>
            </div>
            <div class="m-markets-coin-grid">
                <img src="../img/EOS.png" alt="EOS">
                <p class="uni-coin-sname">EOS</p>
                <p class="uni-coin-fname">EOS</p>
                <p>+20%</p>
                <p>42$</p>
            </div>
            <div class="m-markets-coin-grid">
                <img src="../img/IOTA.png" alt="IOTA">
                <p class="uni-coin-sname">MIOTA</p>
                <p class="uni-coin-fname">IOTA</p>
                <p>+4%</p>
                <p>7$</p>
            </div>
            <div class="m-markets-coin-grid">
                <img src="../img/XRP.png" alt="XRP">
                <p class="uni-coin-sname">XRP</p>
                <p class="uni-coin-fname">Ripple</p>
                <p>-7%</p>
                <p>2$</p>
            </div>
            <div class="m-markets-coin-grid">
                <img src="../img/BCH.png" alt="BCH">
                <p class="uni-coin-sname">BCH</p>
                <p class="uni-coin-fname">Bitcoin cash</p>
                <p>-17%</p>
                <p>400$</p>
            </div>
        </div>
    </section>
    <section class="m-partners">
        <h2>Partners</h2>
        <div class="m-partners-grid">
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
</div>