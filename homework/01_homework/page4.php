<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Skeleton page</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="skeleton/css/normalize.css">
    <link rel="stylesheet" href="skeleton/css/skeleton.css">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <style>
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
        li {
            margin-bottom: 0;
        }
    </style>

</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
    <div class="row">
        <div class="twelve column">
            <nav>
                <ul>
                    <li><a href="index.php">1. stranica(Index)</a></li>
                    <li><a href="page2.php">2. stranica</a></li>
                    <li><a href="page3.php">3. stranica</a></li>
                    <li><a href="page4.php">4. stranica</a></li>
                    <li><a href="page5.php">5. stranica</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="twelve column">
            <h4>Basic Page</h4>
            <p>This index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to
                add some content! If you need some help hit up the
                <a href="http://www.getskeleton.com">Skeleton documentation</a>.
            </p>
            <table class="u-full-width">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Location</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Dave Gamache</td>
                    <td>26</td>
                    <td>Male</td>
                    <td>San Francisco</td>
                </tr>
                <tr>
                    <td>Dwayne Johnson</td>
                    <td>42</td>
                    <td>Male</td>
                    <td>Hayward</td>
                </tr>
                </tbody>
            </table>
            <?php

                $nums = array();
                $nums = $_GET;
            ?>
            <p>10.Za primljena 4 ili više brojeva(num1, num2,num3...) brojevi se ispisuju u unordered listu</p>
            <ul>
                <?php foreach($nums as $num): ?>
                    <li><?php echo $num; ?></li>
                <?php endforeach; ?>
            </ul>
            <hr />
            <?php

            $x=12;
            $y=2;

            echo '$x = ' . $x . '<br>';
            echo '$y = ' . $y . '<br>';

            echo 'Vrijednosti $x i $y se vrćaju se na poćetnu vrijednost nakon svake operacije';

            echo '<hr>';

            echo '11.Izjednačavanje $x=$y, $x nakon izvođenja poprima vrijednost $y. $x= ' . $x=$y;


            echo '<hr>';

            $x=12;
            $y=2;

            echo '12.Dodavanje vrijednosti varijable $y varijabli $x: $x+=$y= ' . $x+=$y;

            echo '<hr>';

            $x=12;
            $y=2;

            echo '13.Oduzimanje vrijednosti varijable $y od vrijednosti varijable $x: $x-=$y= ' . $x-=$y;

            echo '<hr>';

            $x=12;
            $y=2;

            echo '14.Množenje vrijednosti varijable $x sa vrijednosti varijable $y: $x*=$y= ' . $x*=$y;

            echo '<hr>';

            $x=12;
            $y=2;

            echo '15.Dijeljenje vrijednosti varijable $x sa vrijednosti varijable $y: $x/=$y= ' . $x/=$y;

            echo '<hr>';

            $x=12;
            $y=2;

            echo '16.Ostatak dijeljenja $x i $y: $x%=$y= ' . $x%=$y;
            ?>
        </div>
    </div>
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
