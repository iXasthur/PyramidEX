<form class="uni-header-nav-form" method="post" action="trading.php">
    <?php if (isset($_POST['coloredMenu']) && 'TRADE' == $_POST['coloredMenu']) { ?>
        <input type="submit" name="coloredMenu" value="TRADE" id="php-coloredBG">
    <?php } else { ?>
        <input type="submit" name="coloredMenu" value="TRADE">
    <?php } ?>
</form>
<form class="uni-header-nav-form" method="post" action="wallet.php">
    <?php if (isset($_POST['coloredMenu']) && 'WALLET' == $_POST['coloredMenu']) { ?>
        <input type="submit" name="coloredMenu" value="WALLET" id="php-coloredBG">
    <?php } else { ?>
        <input type="submit" name="coloredMenu" value="WALLET">
    <?php } ?>
</form>
<form class="uni-header-nav-form" method="post" action="profile.php">
    <?php if (isset($_POST['coloredMenu']) && 'PROFILE' == $_POST['coloredMenu']) { ?>
        <input type="submit" name="coloredMenu" value="PROFILE" id="php-coloredBG">
    <?php } else { ?>
        <input type="submit" name="coloredMenu" value="PROFILE">
    <?php } ?>
</form>
<form class="uni-header-nav-form" method="post" action="contacts.php">
    <?php if (isset($_POST['coloredMenu']) && 'CONTACTS' == $_POST['coloredMenu']) { ?>
        <input type="submit" name="coloredMenu" value="CONTACTS" id="php-coloredBG">
    <?php } else { ?>
        <input type="submit" name="coloredMenu" value="CONTACTS">
    <?php } ?>
</form>

<!--echo '<form class="uni-header-nav-form" method="get" action="trading.php">';-->
<!--if (isset($_GET['coloredMenu']) && 'TRADE' == $_GET['coloredMenu']) {-->
<!--    echo '<input type="submit" name="coloredMenu" value="TRADE" id="php-coloredBG">';-->
<!--} else {-->
<!--    echo '<input type="submit" name="coloredMenu" value="TRADE">';-->
<!--}-->
<!---->
<!--echo '<form class="uni-header-nav-form" method="get" action="wallet.php">';-->
<!--if (isset($_GET['coloredMenu']) && 'WALLET' == $_GET['coloredMenu']) {-->
<!--    echo '<input type="submit" name="coloredMenu" value="WALLET" id="php-coloredBG">';-->
<!--} else {-->
<!--    echo '<input type="submit" name="coloredMenu" value="WALLET">';-->
<!--}-->
<!---->
<!--echo '<form class="uni-header-nav-form" method="get" action="profile.php">';-->
<!--if (isset($_GET['coloredMenu']) && 'PROFILE' == $_GET['coloredMenu']) {-->
<!--    echo '<input type="submit" name="coloredMenu" value="PROFILE" id="php-coloredBG">';-->
<!--} else {-->
<!--    echo '<input type="submit" name="coloredMenu" value="PROFILE">';-->
<!--}-->
<!---->
<!--echo '<form class="uni-header-nav-form" method="get" action="contacts.php">';-->
<!--if (isset($_GET['coloredMenu']) && 'CONTACTS' == $_GET['coloredMenu']) {-->
<!--    echo '<input type="submit" name="coloredMenu" value="CONTACTS" id="php-coloredBG">';-->
<!--} else {-->
<!--    echo '<input type="submit" name="coloredMenu" value="CONTACTS">';-->
<!--}-->