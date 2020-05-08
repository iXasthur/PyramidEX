
<?php
    $email = '-';
    $nickname = '-';
    $sellerFee = '-';
    $buyerFee = '-';
    $kycStatus = '-';

    if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
        if (!mysqli_connect_errno()) {
            $sql = 'SELECT * FROM user WHERE email = \''.$_SESSION['email'].'\' LIMIT 1';
            $result = mysqli_fetch_all(mysqli_query($link, $sql), MYSQLI_ASSOC);

            if (!empty(count($result))) {
                $passwordHash = $result[0]['password_hash'];
                if (password_verify($_SESSION['password'], $passwordHash)) {
                    $email = $result[0]['email'];
                    $nickname = $result[0]['nickname'];
                    $sellerFee = $result[0]['seller_fee'];
                    $buyerFee = $result[0]['buyer_fee'];
                    $kycStatus = $result[0]['kyc_status'];
                    switch ($kycStatus) {
                        case 1:
                            $kycStatus = 'PASSED';
                            break;
                        case 0:
                            $kycStatus = 'NOT PASSED';
                            break;
                    }
                }
            }
        }
    }
?>

<div class="p-main-wrapper">
    <section class="p-info">
        <?php if (isset($_SESSION['welcomeMessage'])) { ?>
            <h1><?php echo $_SESSION['welcomeMessage']; ?></h1>
            <?php unset($_SESSION['welcomeMessage']); ?>
        <?php }?>
        <h2>Profile</h2>
        <p>Nickname: <?php echo $nickname; ?></p>
        <p>E-Mail: <?php echo $email; ?></p>
    </section>
    <section class="p-info">
        <h2>Trading fees</h2>
        <p>Seller: <?php echo $sellerFee; ?>%</p>
        <p>Buyer: <?php echo $buyerFee; ?>%</p>
    </section>
    <section class="p-info">
        <p>KYC: <?php echo $kycStatus; ?></p>
    </section>
    <?php if (isset($_SESSION['email']) && isset($_SESSION['password'])) { ?>
        <form class="uni-form" method="post">
            <input type="submit" name="signout" value="Sign out">
        </form>
    <?php } ?>
</div>