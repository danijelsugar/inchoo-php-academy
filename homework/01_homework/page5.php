<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Example of the Responsive Grid System</title>
    <meta name="description" content="This is the Responsive Grid System, a quick, easy and flexible way to create a responsive web site.">
    <meta name="keywords" content="responsive, grid, system, web design">

    <meta name="author" content="www.grahamrobertsonmiller.co.uk">

    <meta http-equiv="cleartype" content="on">

    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Responsive and mobile friendly stuff -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="responsivegridsystem/css/html5reset.css" media="all">
    <link rel="stylesheet" href="responsivegridsystem/css/col.css" media="all">
    <link rel="stylesheet" href="responsivegridsystem/css/2cols.css" media="all">
    <link rel="stylesheet" href="responsivegridsystem/css/3cols.css" media="all">
    <link rel="stylesheet" href="responsivegridsystem/css/4cols.css" media="all">
    <link rel="stylesheet" href="responsivegridsystem/css/5cols.css" media="all">
    <link rel="stylesheet" href="responsivegridsystem/css/6cols.css" media="all">
    <link rel="stylesheet" href="responsivegridsystem/css/7cols.css" media="all">
    <link rel="stylesheet" href="responsivegridsystem/css/8cols.css" media="all">
    <link rel="stylesheet" href="responsivegridsystem/css/9cols.css" media="all">
    <link rel="stylesheet" href="responsivegridsystem/css/10cols.css" media="all">
    <link rel="stylesheet" href="responsivegridsystem/css/11cols.css" media="all">
    <link rel="stylesheet" href="responsivegridsystem/css/12cols.css" media="all">

    <style type="text/css">

        /*
        ========================
        - Note: These styles are just to pretty the basic page up a bit.
        You should ignore these when copying and pasting into your site
        because your stylesheet should take care of making it look pretty!
        ========================
        */
        body { padding:2em; font : 100%/1.4 'Helvetica Neue', arial, helvetica, helve, sans-serif;
        }
        h1 { font-size:2.2em; padding:0 0 .5em 0; }
        h2 { font-size:1.5em; }
        .header { padding:1em 0; }
        .col { background: #ccc; padding:1em 0; text-align:center;}
        nav ul {
            display: flex;
            justify-content: center;
            background-color: #1bc71b;
        }
        nav ul li {
            list-style: none;
        }
        nav ul li a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: #fff;
            font-size: 18px;
        }
        nav ul li a:hover {
            background: #fff;
            color: #1bc71b;
        }

    </style>

</head>

<body>

<nav>
    <ul>
        <li><a href="index.php">1. stranica(Index)</a></li>
        <li><a href="page2.php">2. stranica</a></li>
        <li><a href="page3.php">3. stranica</a></li>
        <li><a href="page4.php">4. stranica</a></li>
        <li><a href="page5.php">5. stranica</a></li>
    </ul>
</nav>
<div class="header">
    <h1>Increment and decrement examples</h1>

</div>

<?php

    $x=2;
    $y=3;

    echo '$x = ' . $x . '<br>';
    echo '$y = ' . $y . '<br>';

?>
<div class="section group">
    <div class="col span_12_of_12">
        <?php echo '17. Pre-increment ++$x prvo $x uveća za 1 a onda vraća $=: ' . ++$x; ?>
    </div>
</div>

<div class="section group">
    <?php

    echo '$x = ' . $x . '<br>';
    echo '$y = ' . $y . '<br>';

    ?>
</div>

<div class="section group">
    <div class="col span_12_of_12">
        <?php echo '18. Post-increment $x++ prvo vraća $x a onda uveća za 1 $x= ' . $x++; ?>
    </div>
</div>

<div class="section group">
    <?php

    echo '$x = ' . $x . '<br>';
    echo '$y = ' . $y . '<br>';

    ?>
</div>


<div class="section group">
    <div class="col span_12_of_12">
        <?php echo '19. Pre-decrement --$x prvo oduzme $x za 1 te onda vraća ta vrijednost $x= ' . --$x; ?>
    </div>
</div>

<div class="section group">
    <?php

    echo '$x = ' . $x . '<br>';
    echo '$y = ' . $y . '<br>';

    ?>
</div>

<div class="section group">
    <div class="col span_12_of_12">
        <?php echo '20. Post-decrement $x-- prvo vraća $x te onda oduzima za 1 $x= ' . $x--; ?>
    </div>
</div>

<div class="section group">
    <?php

    echo '$x = ' . $x . '<br>';
    echo '$y = ' . $y . '<br>';

    ?>
</div>

<div class="section group">
    <div class="col span_12_of_12">
        <?php echo '21. $x=++x + $y++= ' . $x=++$x + $y++; ?>
    </div>
</div>

<div class="section group">
    <?php

    echo '$x = ' . $x . '<br>';
    echo '$y = ' . $y . '<br>';

    ?>
</div>

<div class="section group">
    <div class="col span_12_of_12">
        <?php echo '22. $y=$x++ + --$y= ' . $y=$x++ + --$y ?>
    </div>
</div>

<div class="section group">
    <?php

    echo '$x = ' . $x . '<br>';
    echo '$y = ' . $y . '<br>';

    ?>
</div>

</body>
</html>