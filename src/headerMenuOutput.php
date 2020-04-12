<form class="uni-header-nav-form" method="post" action="trading.php">
    <?php if (isset($_GET['coloredMenu']) && 'TRADE' == $_GET['coloredMenu']) { ?>
        <input type="submit" name="coloredMenu" value="TRADE" id="php-coloredBG">
    <?php } else { ?>
        <input type="submit" name="coloredMenu" value="TRADE">
    <?php } ?>
</form>
<form class="uni-header-nav-form" method="post" action="wallet.php">
    <?php if (isset($_GET['coloredMenu']) && 'WALLET' == $_GET['coloredMenu']) { ?>
        <input type="submit" name="coloredMenu" value="WALLET" id="php-coloredBG">
    <?php } else { ?>
        <input type="submit" name="coloredMenu" value="WALLET">
    <?php } ?>
</form>
<form class="uni-header-nav-form" method="post" action="profile.php">
    <?php if (isset($_GET['coloredMenu']) && 'PROFILE' == $_GET['coloredMenu']) { ?>
        <input type="submit" name="coloredMenu" value="PROFILE" id="php-coloredBG">
    <?php } else { ?>
        <input type="submit" name="coloredMenu" value="PROFILE">
    <?php } ?>
</form>
<form class="uni-header-nav-form" method="post" action="contacts.php">
    <?php if (isset($_GET['coloredMenu']) && 'CONTACTS' == $_GET['coloredMenu']) { ?>
        <input type="submit" name="coloredMenu" value="CONTACTS" id="php-coloredBG">
    <?php } else { ?>
        <input type="submit" name="coloredMenu" value="CONTACTS">
    <?php } ?>
</form>
