<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Заміна слова в тексті -->
    <form method="post" action="">
        <table>
            <tr>
                <td><label for="text">Текст:</label></td>
                <td>
                    <input type="text" name="text" id="text">
                </td>
            </tr>
            <tr>
                <td><label for="find">Знайти:</label></td>
                <td>
                    <input type="text" name="find" id="find">
                </td>
            </tr>
            <tr>
                <td><label for="replace">Замінити:</label></td>
                <td><input type="text" name="replace" id="replace"></td>
            </tr>
            <tr>
                <td><label for="result-replace">Результат:</label></td>
                <td><input type="submit" name="result-replace" value="Результат" id="result-replace"></td>
            </tr>
        </table>
    </form>
    <?php
    require './projects/first_task.php';
    ?>
    <hr>
    <!-- Сортування міст по алфавіту -->
    <form method="post" action="">
        <table>
            <tr>
                <td><label for="cities">Введіть назви міст через пробіл:</label></td>
                <td><input type="text" name="cities" id="cities"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="result-cities" value="Результат"></td>
            </tr>
        </table>
    </form>
    <?php
    require './projects/second_task.php';
    ?>
    <hr>
    <!-- Виведення ім'я файлу -->
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="location-file">Введіть шлях файлу:</label></td>
                <td><input type="text" name="location-file" id="location-file"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Результат" name="result-name"></td>
            </tr>
        </table>
    </form>
    <?php
    require './projects/third_task.php';
    ?>
    <hr>
    <!-- Кількість днів між датами -->
    <p>Форма дати введення дд-мм-рррр</p>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="first-data">Введіть з:</label></td>
                <td><input type="text" name="first-data" id="first-data"></td>
            </tr>
            <tr>
                <td><label for="second-data">Введіть по:</label></td>
                <td><input type="text" name="second-data" id="second-data"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Результат" name="result-data"></td>
            </tr>
        </table>
    </form>
    <?php
    require './projects/fourth_task.php';
    ?>
    <hr>
    <!-- Генератор паролів -->
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="length-password">Введіть розмір довжини пароля:</label></td>
                <td><input type="text" name="length-password" id="length-password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Генерувати" name="generate-password"></td>
            </tr>
        </table>
    </form>
    <?php
    require './projects/fifth_task.php';
    ?>
    <hr>
    <!-- Перевірка пароля -->
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="input-password">Введіть свій пароль (мінімум 8 символів):</label></td>
                <td><input type="text" name="input-password" id="input-password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Перевірити" name="check-password"></td>
            </tr>
        </table>
    </form>
    <?php
    require './projects/additional_task.php';
    ?>
</body>
</html>