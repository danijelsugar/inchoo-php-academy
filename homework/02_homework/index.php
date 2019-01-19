<?php

    if(isset($_POST['send']) && isset($_POST['nums'])) { //if submit is presed
        $numbers = ($_POST['nums']); // puts nums send with POST in variable
        $separate = explode(',', $numbers); // removes commas

        /*
         * loops through array and removes all non numeric characters,
         * gets biggest entered number,
         * gets dimensions of table,
         * check if number is even and puts it in $even array
         *
         * */
        foreach ($separate as $num) {
            $num = preg_replace('/[^0-9]/', '', $num);
            $isNumeric[] = $num;
            $max = max($isNumeric);
            $bold = array_sum($isNumeric) / count($isNumeric);

            /*
             * not the best way but it works,
             * when form is submit empty it still send empty string
             * so this way it doesnt throw error in sqrt function
             */
            if($max === '') {
                $dimension = 0;
            } else {
                $dimension = round(sqrt($max)+1);
            }


            if (is_numeric($num) && $num % 2 === 0) {
                $even[] = $num;
            }

        }
    }
    //echo $bold . '<br>';
    echo '<pre>';
    //print_r($even);
    echo '</pre>';


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td {
            width: 25px;
            height: 25px;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nums">Enter your numbers</label><br>
        <input type="text" name="nums"><br>
        <input type="submit" name="send">
    </form>

    <hr />



</body>
</html>