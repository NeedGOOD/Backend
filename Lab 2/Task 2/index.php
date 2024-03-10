<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Виведення елементів масиву, що повторюються -->
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="array">Введіть числа:</label></td>
                <td><input type="text" name="array" id="array"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Результат" name="result-array"></td>
            </tr>
        </table>
    </form>
    <?php
    require './projects/first-task.php';
    ?>
    <hr>
    <!-- Генератор імен тварин -->
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="text-animal">Введіть текст:</label></td>
                <td><input type="text" name="text-animal" id="text-animal"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Результат" name="result-animals"></td>
            </tr>
        </table>
    </form>
    <?php
    require './projects/second-task.php';
    ?>
    <hr>
    <!-- Створює  масиву і виконує дії -->
    <form action="" method="post">
        <table>
            <tr>
                <td></td>
                <td><input type="submit" value="Результат" name="result-random-array"></td>
            </tr>
        </table>
    </form>
    <?php
    require './projects/third-task.php'
    ?>
    <hr>
    <!-- Сортування по ключам або параметрів -->
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="names">Введіть імена:</label></td>
                <td><input type="text" name="names" id="names"></td>
            </tr>
            <tr>
                <td><label for="ages">Введіть віки:</label></td>
                <td><input type="text" name="ages" id="ages"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Результат імен" name="result-names"></td>
                <td><input type="submit" value="Результат віку" name="result-ages"></td>
            </tr>
        </table>
    </form>
    <?php
    require './projects/fourth-task.php';
    ?>
</body>

</html>