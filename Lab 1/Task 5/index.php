<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $random_number = strval(rand(100, 999));

    echo "Тризначне випадкове число: ".$random_number."<br>";

    $sum = $random_number[0] + $random_number[1] + $random_number[2];

    echo "sum = ".$sum."<br>";

    $characters = str_split($random_number);

    $reversed_characters = array_reverse($characters);
    $reversed_number = intval(implode("", $reversed_characters));

    echo "Перевернуте число: ".$reversed_number."<br>";

    rsort($characters);
    $largest_number = intval(implode("", $characters));

    echo "Іде по спаданню: ".$largest_number."<br>";
    ?>
</body>
</html>