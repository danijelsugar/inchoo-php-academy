<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation page</title>
    <link rel="stylesheet" href="foundation/css/foundation.css">
</head>
<body>
<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <div class="top-bar">
                <div class="top-bar-left">
                    <ul class="dropdown menu" data-dropdown-menu>
                        <li><a href="index.php">1.stranica(Index)</a></li>
                        <li><a href="page2.php">2.stranica</a></li>
                        <li><a href="page3.php">3.stranica</a></li>
                        <li><a href="page4.php">4.stranica</a></li>
                        <li><a href="page5.php">5.stranica</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="large-12 cell">
            <h1>Welcome to Foundation</h1>
        </div>
    </div>

    <div class="grid-x grid-padding-x">
        <div class="large-12 medium-12 cell">
            <h5>Here&rsquo;s your basic grid:</h5>
            <?php

            $x = 12;
            $y = 2;

            echo '$x = ' . $x . '<br>';
            echo '$y = ' . $y . '<br>';

            ?>
            <div class="grid-x grid-padding-x">
                <div class="large-12 cell">
                    <div class="primary callout">
                        <p><?php echo '5.Zbrajanje $x+$y: ' . $rez=$x+$y; ?></p>
                    </div>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="large-6 medium-6 cell">
                    <div class="primary callout">
                        <p><?php echo '6.Oduzimanje $x-$y: ' . $rez=$x-$y; ?></p>
                    </div>
                </div>
                <div class="large-6 medium-6 cell">
                    <div class="primary callout">
                        <p><?php echo '7.Mnozenje $x*$y: ' . $rez=$x*$y; ?></p>
                    </div>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="large-6 medium-4 small-6 cell">
                    <div class="primary callout">
                        <p><?php echo '8.Dijeljenje $x/$y: ' . $rez=$x/$y; ?></p>
                    </div>
                </div>
                <div class="large-6 medium-4 small-6 cell">
                    <div class="primary callout">
                        <p><?php echo '9.Modulo $x%$y: ' . $rez=$x%$y; ?></p>
                    </div>
                </div>
            </div>

            <hr />



<script src="foundation/js/vendor/jquery.js"></script>
<script src="foundation/js/vendor/what-input.js"></script>
<script src="foundation/js/vendor/foundation.js"></script>
</body>
</html>
