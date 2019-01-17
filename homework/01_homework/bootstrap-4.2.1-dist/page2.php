<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="">
    <title>Bootstrap page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">1. stranica(Index) <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="page2.php">2. stranica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../foundation/page3.php">3. stranica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../skeleton/page4.php">4. stranica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../responsivegridsystem/page5.php">5. stranica</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main>
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-4">Hello <?php echo isset($_GET["name"]) ? $_GET["name"] : ""; ?></h1>
                            <p class="lead">1.Primljeni GET parametar(name) ispisuje se ime u H1 tagu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <h3 class="col">2. Za primljena 3 parametra(broj1,broj2,broj3) ispisuje njihov zbroj te cijelokupni postupak</h3>
                    <?php

                    $a= isset($_GET["broj1"]) ? $_GET["broj1"] : 0;
                    $b= isset($_GET["broj2"]) ? $_GET["broj2"] : 0;
                    $c= isset($_GET["broj3"]) ? $_GET["broj3"] : 0;



                    $rez = $a + $b + $c;
                    ?>
                    <p class="col-lg-12"><?php echo $a . " + " . $b . " + " . $c . " = " . $rez; ?></p>
                </div>
                <div class="row">
                    <div class="card col-lg-4 offset-4" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">3. Provera jednakosti 2 broja</h5>
                            <?php

                                $x=3;
                                $y="3";
                                echo '$x = ' . $x . "<br />";
                                echo '$y = ' . $y . "<br />";
                                if($x==$y) {
                                    echo '<hr />';
                                    echo '$x==$y <br />';
                                    echo "<a class='card-link'>Brojevi su jednaki po vrijednosti ali ne i tipu podatka</a>";
                                }


                            ?>
                        </div>
                    </div>
                    <div class="card col-lg-4 offset-4" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">4. Provera identičnosti 2 broja</h5>
                            <?php
                                $f=5;
                                $g=5;

                                echo '$f = ' . $f . "<br />";
                                echo '$g = ' . $g . "<br />";

                                if($f===$g) {
                                    echo '<hr />';
                                    echo '$f===$g <br />';
                                echo "<a class='card-link'>Brojevi su identični, jednaki po vrijednosti i
                                    tipu podatka</a>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3></h3>
                </div>
            </div>

        </main>
    </div>


</body>
</html>