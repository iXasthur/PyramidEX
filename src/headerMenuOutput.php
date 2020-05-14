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
    <?php
        $buttonText = 'PROFILE';

        if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
            if (!mysqli_connect_errno()) {
                $sql = 'SELECT * FROM user WHERE email = \''.$_SESSION['email'].'\' LIMIT 1';
                $result = mysqli_fetch_all(mysqli_query($link, $sql), MYSQLI_ASSOC);

                if (!empty(count($result))) {
                    $passwordHash = $result[0]['password_hash'];
                    if (password_verify($_SESSION['password'], $passwordHash)) {
                        $buttonText = $buttonText.'('.$result[0]['nickname'].')';
                    }
                }
            }
        }
    ?>
    <?php if (isset($_GET['tab']) && 'PROFILE' === $_GET['tab']) { ?>
        <input type="hidden" name="tab" value="PROFILE">
        <input type="submit" value="<?php echo $buttonText; ?>" id="php-coloredBG">
    <?php } else { ?>
        <input type="hidden" name="tab" value="PROFILE">
        <input type="submit" value="<?php echo $buttonText; ?>">
    <?php } ?>
</form>
<form class="uni-header-nav-form" method="get" action="index.php">
    <?php if (isset($_GET['tab']) && 'CONTACTS' === $_GET['tab']) { ?>
        <input type="submit" name="tab" value="CONTACTS" id="php-coloredBG">
    <?php } else { ?>
        <input type="submit" name="tab" value="CONTACTS">
    <?php } ?>
</form>
