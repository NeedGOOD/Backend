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
    echo "<h1>Перевод гривень в долари</h1>";

    $hryvnias = rand(1000, 2000);
    echo "<div>Сума гривень(1000-2000) = ".$hryvnias."</div>";

    $dollar_in_hryvnias = rand(2750, 3000) / 100;
    echo "<div>Один долар в гривнях(27.50-30) = ".$dollar_in_hryvnias."</div>";

    $dollars = sprintf('%.2f', $hryvnias / $dollar_in_hryvnias);
    echo "<div>".$hryvnias." грн. можна обміняти на ".$dollars." долар</div>"
    ?>
</body>
</html>