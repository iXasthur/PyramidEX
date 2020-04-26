<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PyramidEX^_^</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles-universal.css">
    <link rel="stylesheet" href="../css/styles-index.css">
    <?php
    if (!isset($_GET['tab'])) {
        echo '<link rel="stylesheet" href="../css/styles-main.css">';
    } else {
        switch ($_GET['tab']) {
            case 'TRADE':
                echo '<link rel="stylesheet" href="../css/styles-trading.css">';
                break;
            case 'WALLET':
                echo '<link rel="stylesheet" href="../css/styles-wallet.css">';
                break;
            case 'PROFILE':
                echo '<link rel="stylesheet" href="../css/styles-profile.css">';
                break;
            case 'CONTACTS':
                echo '<link rel="stylesheet" href="../css/styles-contacts.css">';
                break;
            default:
                echo '<link rel="stylesheet" href="../css/styles-unknownPage.css">';
                break;
        }
    }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link>
</head>
<body>
<header class="uni-header">
    <h1><a href="index.php">PyramidEX</a></h1>
    <nav class="uni-header-grid">
        <?php include 'headerMenuOutput.php'; ?>
    </nav>
</header>
<main>
    <?php
    if (!isset($_GET['tab'])) {
        include 'main.php';
    } else {
        switch ($_GET['tab']) {
            case 'TRADE':
                include 'trading.php';
                break;
            case 'WALLET':
                include 'wallet.php';
                break;
            case 'PROFILE':
                include 'profile.php';
                break;
            case 'CONTACTS':
                include 'contacts.php';
                break;
            default:
                include 'unknownPage.php';
                break;
        }
    }
    ?>
</main>
<footer class="uni-footer">
    <a href="ext.php">&copy PyEX Digital Assets, Ltd. 2020 - Seychelles</a>
</footer>
</body>
</html>