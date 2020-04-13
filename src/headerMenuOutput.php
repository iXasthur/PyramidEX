<form class="uni-header-nav-form" method="get" action="index.php">
    <?php if (isset($_GET['tab']) && 'TRADE' === $_GET['tab']) { ?>
        <input type="submit" name="tab" value="TRADE" id="php-coloredBG">
    <?php } else { ?>
        <input type="submit" name="tab" value="TRADE">
    <?php } ?>
</form>
<form class="uni-header-nav-form" method="get" action="index.php">
    <?php if (isset($_GET['tab']) && 'WALLET' === $_GET['tab']) { ?>
        <input type="submit" name="tab" value="WALLET" id="php-coloredBG">
    <?php } else { ?>
        <input type="submit" name="tab" value="WALLET">
    <?php } ?>
</form>
<form class="uni-header-nav-form" method="get" action="index.php">
    <?php if (isset($_GET['tab']) && 'PROFILE' === $_GET['tab']) { ?>
        <input type="submit" name="tab" value="PROFILE" id="php-coloredBG">
    <?php } else { ?>
        <input type="submit" name="tab" value="PROFILE">
    <?php } ?>
</form>
<form class="uni-header-nav-form" method="get" action="index.php">
    <?php if (isset($_GET['tab']) && 'CONTACTS' === $_GET['tab']) { ?>
        <input type="submit" name="tab" value="CONTACTS" id="php-coloredBG">
    <?php } else { ?>
        <input type="submit" name="tab" value="CONTACTS">
    <?php } ?>
</form>
