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
    $number_month = rand(1, 12);
    echo "Зараз число = ".$number_month."<br>";

    if ($number_month == 1 || $number_month == 2 || $number_month == 12) { echo "Зима"; }
    elseif ($number_month >= 3 && $number_month <= 5) { echo "Весна"; }
    elseif ($number_month >= 6 && $number_month <= 8) { echo "Літо"; }
    elseif ($number_month >= 9 && $number_month <= 11) { echo "Осінь"; }
    ?>
</body>
</html>