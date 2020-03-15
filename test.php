<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PyramidEX^_^</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link>
</head>
<body>
    <header class="uni-header">
        <h1><a href="index.html">PyramidEX</a></h1>
        <form class="t-header-form" method="get">
            <?php if ( isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == "TRADE" ): ?>
                <input type="submit" name="coloredMenu" value="TRADE" id="php-coloredBG">
            <?php else: ?>
                <input type="submit" name="coloredMenu" value="TRADE">
            <?php endif ?>

            <?php if ( isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == "WALLET" ): ?>
                <input type="submit" name="coloredMenu" value="WALLET" id="php-coloredBG">
            <?php else: ?>
                <input type="submit" name="coloredMenu" value="WALLET">
            <?php endif ?>

            <?php if ( isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == "PROFILE" ): ?>
                <input type="submit" name="coloredMenu" value="PROFILE" id="php-coloredBG">
            <?php else: ?>
                <input type="submit" name="coloredMenu" value="PROFILE">
            <?php endif ?>

            <?php if ( isset($_GET['coloredMenu']) && $_GET['coloredMenu'] == "CONTACTS" ): ?>
                <input type="submit" name="coloredMenu" value="CONTACTS" id="php-coloredBG">
            <?php else: ?>
                <input type="submit" name="coloredMenu" value="CONTACTS">
            <?php endif ?>
        </form>
    </header>
    <main class="t-main-wrapper">
        <form class="uni-form" method="get">
            <h1>Merge arrays</h1>
            <h2>Input numbers separated with spaces</h2>
            <?php
                function arr_concat($arr1, $arr2){
                    $buffLength = count($arr1) + count($arr2);
                    $firstI = count($arr1);
                    for ( $i = count($arr1); $i < $buffLength; $i++ ){
                        $arr1[$i] = $arr2[$i - $firstI];
                    }
                    return $arr1;
                }

                function arr_even($arr){
                    $buffArray = array();
                    $j = 0;
                    for ( $i = 0; $i < count($arr); $i++ ){
                        if ( $arr[$i] % 2 == 0 ){
                            $buffArray[$j] = $arr[$i];
                            $j++;
                        }
                    }
                    return $buffArray;
                }

                if ( isset($_GET['mrg_arr1']) ) {
                    echo '<p>';
                    echo '1st array: ';
                    if ( strlen($_GET['mrg_arr1']) > 0 ) {
                        echo '[' . $_GET['mrg_arr1'] . ']' . '<br>';
                    } else {
                        echo ' []' . '<br>';
                    }
                    echo '</p>';
                }

                if ( isset($_GET['mrg_arr2']) ) {
                    echo '<p>';
                    echo '2nd array: ';
                    if ( strlen($_GET['mrg_arr2']) > 0 ) {
                        echo '[' . $_GET['mrg_arr2'] . ']' . '<br/>';
                    } else {
                        echo ' []' . '<br>';
                    }
                    echo '</p>';
                }

                if ( isset($_GET['mrg_arr1']) && isset($_GET['mrg_arr2']) ) {
                    $numArray1 = array();
                    $numArray2 = array();

                    if ( strlen($_GET['mrg_arr1']) > 0 ){
                        $numArray1 = explode(" ",$_GET['mrg_arr1']);
                    }

                    if ( strlen($_GET['mrg_arr2']) > 0 ){
                        $numArray2 = explode(" ",$_GET['mrg_arr2']);
                    }

                    $numArrayMrg = arr_concat($numArray1,$numArray2);
                    $numArrayMrgEven = arr_even($numArrayMrg);

                    echo '<p>';
                    echo 'New array: [' . implode( " ", $numArrayMrg) . ']';
                    echo '</p>';

                    echo '<p>';
                    echo 'Even array: [' . implode( " ", $numArrayMrgEven) . ']';
                    echo '</p>';
                }
            ?>

            <input type="text" autocomplete="off" name="mrg_arr1" placeholder="1st array" pattern="^([0-9] ?)*[0-9]$">
            <input type="text" autocomplete="off" name="mrg_arr2" placeholder="2nd array" pattern="^([0-9] ?)*[0-9]$">
            <input type="submit" name="" value="Merge">
        </form>
    </main>
    <footer class="uni-footer">
        <a href="test.php">&copy PyEX Digital Assets, Ltd. 2020 - Seychelles</a>
    </footer>
</body>
</html>