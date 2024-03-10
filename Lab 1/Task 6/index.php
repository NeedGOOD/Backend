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
    function cells() {
        $rows = rand(2, 5);
        $columns = $rows;

        echo "<table>";
        for ($i = 0; $i < $rows; ++$i) {
            echo "<tr>";
            for ($y = 0; $y < $columns; ++$y) {
                $random_color = getRandomColor();
                echo "<td style='background-color: $random_color;'></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    function getRandomColor() {
        $letters = '0123456789ABCDEF';
        $color = '#';
        for ($i = 0; $i < 6; ++$i) {
            $color .= $letters[rand(0, 15)];
        }
        return $color;
    }
    function blackBackground($number) {
        echo "<div class='black-background'>";
        for ($i = 0; $i < $number; ++$i) {
            $top = rand(16, 84);
            $left = rand(16, 84);
            $top .= "%";
            $left .= "%";
            $width = rand(100, 150);
            $height = $width;
            $width .= "px";
            $height .= "px";
            echo "<div class='square' style='width: $width; height: $height; top: $top; left: $left;'></div>";
        }
        echo "</div>";
    }
    
    cells();
    
    echo "<hr>";
    
    $random_number = rand(2, 5);
    
    blackBackground($random_number);
    ?>
</body>
</html>