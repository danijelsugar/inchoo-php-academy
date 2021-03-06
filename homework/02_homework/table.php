<?php

if(isset($_POST['send'])) { //if submit is pressed
    $numbers = htmlspecialchars($_POST['nums']); // puts nums send with POST in variable
    $separate = explode(',', $numbers); // removes commas

    /*
     * loops through array and removes all non numeric characters,
     * */
    foreach ($separate as $num) {
        $num = preg_replace('/[^0-9.]/', '', $num); //removes all non numeric characters
        $num = round($num); // if decimal number is entered rounds number

        $isNumeric[] = $num;
        // checking if number is even and puts him in array
        if ($num != 0 && $num % 2 === 0) {
            $even[] = $num;
            sort($even);
        }

    }

    $max = max($isNumeric); // gets biggest number from array
    $bold = array_sum($isNumeric) / count($isNumeric); //arithmetic mean

    $dimension = round(sqrt($max)+1); // size of table
    /*
     * gets closest even number of arithmetic mean
     * */
    $closest = null;
    foreach ($even as $greater) {
        if($greater>$bold){
            $closest = $greater;
            break;
        }

    }



}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework 2</title>
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
<?php

$k=0;  // counter
if($_POST['nums'] != "" && count($even) > 0) { // if numbers were sent and at least on is even
    echo '<table style="width: 25%; margin: 0 auto;">';
    for ($i = 1; $i <= $dimension; $i++) { //loops for rows
        echo '<tr>';
        for ($j = 1; $j <= $dimension; $j++) {  //loops for columns
            ++$k;
            if (!in_array($k, $even)) { //if number is not in even array
                echo '<td>' . ' ' . '</td>';
            } else {
                if($k==$closest) { // if is in even array and closest bigger than arithmetic mean
                    echo '<td><strong>' . $k . '</strong></td>';
                } else { // all other even numbers
                    echo '<td>' . $k . '</td>';
                }

            }

        }
        echo '</tr>';
    }
    echo '</table>';
    echo '<div><p><a href="index.html">Go back</a></p>';

} else {
    header('location: index.html');
}

?>
</body>
</html>