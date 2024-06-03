<?php
session_start();

if (!isset($_SESSION['fontSize'])) {
    $_SESSION['fontSize'] = 'Average';
}

if (isset($_GET['size'])) {
    $size = $_GET['size'];
    if (in_array($size, ['Small', 'Average', 'Big'])) {
        $_SESSION['fontSize'] = $size;
    }
}

$currentFontSize = $_SESSION['fontSize'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-size: <?php
            switch ($currentFontSize) {
                case 'Small':
                    echo '12px';
                    break;
                case 'Average':
                    echo '16px';
                    break;
                case 'Big':
                    echo '20px';
                    break;
            }
            ?>;
        }
    </style>
</head>

<body>
    <a href="?size=Big">Big</a><br>
    <a href="?size=Average">Average</a><br>
    <a href="?size=Small">Small</a>
</body>

</html>