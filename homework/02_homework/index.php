<?php

    if(isset($_POST['nums'])) {
        $numbers = ($_POST['nums']);
        $separate = explode(',', $numbers);

        foreach ($separate as $num) {
            $num = preg_replace('/[^0-9]/', '', $num);
            $isNumeric[] = $num;
            $max = max($isNumeric);
            $dimension = round(sqrt($max)+1);
            if ($num % 2 === 0) {
                $even[] = $num;
            }

        }
    }
    echo $dimension;
    print_r($even);



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nums">Enter your numbers</label><br>
        <input type="text" name="nums"><br>
        <input type="submit">
    </form>

    <hr />

</body>
</html>