<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    file_put_contents('./comment.txt', $_POST['comment']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="comment">Comment:</label></td>
                <td><textarea name="comment" id="comment"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enter"></td>
            </tr>
        </table>
    </form>

    <?php
    $f = fopen('./comment.txt', 'r');
    if ($f) {
        while (($line = fgets($f)) !== false) {
            echo "{$line}<br>";
        }
        fclose($f);
    } else {
        echo "Can't open file";
    }
    // $str = file_get_contents('./comment.txt');
    // $words = explode(' ', $str);
    // foreach ($words as $item) {
    //     echo "{$item}<br>";
    // }
    ?>
</body>

</html>