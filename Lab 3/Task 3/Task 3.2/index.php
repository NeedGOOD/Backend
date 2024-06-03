<?php

$first_file = file_get_contents('./first_file.txt');
$second_file = file_get_contents('./second_file.txt');

function duplicateWords($first_file, $second_file): array
{
    $first_array = array_unique(explode(' ', $first_file));
    $second_array = array_unique(explode(' ', $second_file));

    return [
        'firstArray' => $first_array,
        'secondArray' => $second_array
    ];
}

function checkFirstFile($first_file, $second_file): array
{
    $words = duplicateWords($first_file, $second_file);

    $only_first = array_diff($words['firstArray'], $words['secondArray']);
    return $only_first;
}

$first = checkFirstFile($first_file, $second_file);
file_put_contents('./only-first-file.txt', implode(', ', $first));

function checkFirstAndSecondFile($first_file, $second_file)
{
    $words = duplicateWords($first_file, $second_file);

    $duplicate_words = array_intersect($words['firstArray'], $words['secondArray']);
    return $duplicate_words;
}

$second = checkFirstAndSecondFile($first_file, $second_file);
file_put_contents('./first-and-second-file.txt', implode(', ', $second));

function doubleDuplicateFirstAndSecondFile($first_file, $second_file): array
{
    $first_array = explode(' ', $first_file);
    $second_array = explode(' ', $second_file);

    $first_word_count = array_count_values($first_array);
    $second_word_count = array_count_values($second_array);

    $double_duplicate = [];

    foreach ($first_word_count as $word => $count) {
        if ($count == 2 && isset($second_word_count[$word]) && $second_word_count[$word] == 2) {
            $double_duplicate[] = $word;
        }
    }
    return $double_duplicate;
}

$third = doubleDuplicateFirstAndSecondFile($first_file, $second_file);
file_put_contents('./double-duplicate.txt', implode(', ', $third));

$check = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['file-name'] === 'only-first-file.txt'
    || $_POST['file-name'] === 'first-and-second-file.txt'
    || $_POST['file-name'] === 'double-duplicate.txt') {
        $file_name = $_POST['file-name'];
        unlink("./{$file_name}");
        $check = true;
    }
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
    <table>
        <tr>
            <td>Which file can delete:</td>
        </tr>
        <tr>
            <td>only-first-file.txt</td>
        </tr>
        <tr>
            <td>first-and-second-file.txt</td>
        </tr>
        <tr>
            <td>double-duplicate.txt</td>
        </tr>
    </table>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="file-name">Name file:</label></td>
                <td><input type="text" name="file-name" id="file-name"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Delete"></td>
            </tr>
        </table>
    </form>
    <?php
    if ($check) {
        echo "File {$file_name}\n was delete";
        $check = false;
    }
    ?>
</body>

</html>