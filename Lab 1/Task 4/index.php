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
    echo "<h1>Використовуються англійські літери</h1>";
    echo "<div>";

    $symbol = chr(rand(97, 122));
    echo "Зараз літера = ".$symbol."<br>";

    switch ($symbol) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            echo "Літера ".$symbol." <b><i>голосна</i></b>";
            break;
        case 'y':
            echo "Літера ".$symbol." може бути <b><i>голосною</i></b> або <b><i>приголосною</i></b>";
            break;
        default:
            echo "Літера ".$symbol." <b><i>приголосна</i></b>";
            break;
    }

    echo "</div>";
    ?>
</body>
</html>