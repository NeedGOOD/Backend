<?php
session_start();
require './next-page/database.php';

if (isset($_GET['lang']) && ($_GET['lang'] === 'ukr' || $_GET['lang'] === 'eng')) {
    $lang = $_GET['lang'] ?? '';
    lang($lang);
}

function lang($lang) {
    $expiry_time = time() + (180 * 24 * 60 * 60);
    setcookie('lang', $lang, $expiry_time);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="./next-page/crossing.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="login">Логін:</label></td>
                <td><input type="text" name="login" id="login" value="<?php echo $_SESSION['login'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="password">Пароль:</label></td>
                <td><input type="password" name="password" id="password"
                        value="<?php echo $_SESSION['password'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="password-repeat">Пароль (ще раз):</label></td>
                <td><input type="password" name="password-repeat" id="password-repeat"
                        value="<?php echo $_SESSION['password-repeat'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="male">Стать:</label></td>
                <td>
                    <input type="radio" name="sex" id="male" value="male" <?php echo ($_SESSION['sex'] ?? '') === 'male' ? 'checked' : ''; ?>>
                    <label for="male">чоловік</label>

                    <input type="radio" name="sex" id="female" value="female" <?php echo ($_SESSION['sex'] ?? '') === 'female' ? 'checked' : ''; ?>>
                    <label for="female">жінка</label>
                </td>
            </tr>
            <tr>
                <td><label for="city">Місто:</label></td>
                <td>
                    <select name="cities" id="city">
                        <option value="Житомир" <?php echo ($_SESSION['cities'] ?? '') === 'Житомир' ? 'selected' : ''; ?>>Житомир</option>
                        <option value="Київ" <?php echo ($_SESSION['cities'] ?? '') === 'Київ' ? 'selected' : ''; ?>>Київ
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="favorite-games">
                    <p>Улюблені гри:</p>
                </td>
                <td>
                    <div class="games">
                        <input type="checkbox" name="games[]" id="football" value="футбол" <?php echo (isset($_SESSION['games']) && in_array('футбол', $_SESSION['games'])) ? 'checked' : ''; ?>>
                        <label for="football">футбол</label>
                    </div>

                    <div class="games">
                        <input type="checkbox" name="games[]" id="basketball" value="баскетбол" <?php echo (isset($_SESSION['games']) && in_array('баскетбол', $_SESSION['games'])) ? 'checked' : ''; ?>>
                        <label for="basketball">баскетбол</label>
                    </div>

                    <div class="games">
                        <input type="checkbox" name="games[]" id="volleyball" value="волейбол" <?php echo (isset($_SESSION['games']) && in_array('волейбол', $_SESSION['games'])) ? 'checked' : ''; ?>>
                        <label for="volleyball">волейбол</label>
                    </div>

                    <div class="games">
                        <input type="checkbox" name="games[]" id="chess" value="шахи" <?php echo (isset($_SESSION['games']) && in_array('шахи', $_SESSION['games'])) ? 'checked' : ''; ?>>
                        <label for="chess">шахи</label>
                    </div>

                    <div class="games">
                        <input type="checkbox" name="games[]" id="WoT" value="World of Tanks" <?php echo (isset($_SESSION['games']) && in_array('World of Tanks', $_SESSION['games'])) ? 'checked' : ''; ?>>
                        <label for="WoT">World of Tanks</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label for="about-myself">Про себе:</label></td>
                <td><textarea name="about-myself" id="about-myself" cols="20"
                        rows="5"><?php echo $_SESSION['about-myself'] ?? ''; ?></textarea></td>
            </tr>
            <tr>
                <td><label for="photo">Фотографія:</label></td>
                <td><input type="file" name="photo" id="photo"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Зареєструватися" name="result-page"></td>
            </tr>
        </table>
    </form>
    <div class="countries">
        <a href="index.php?lang=ukr"><img src="./countries/Ukraine.png" alt="ukraine"></a>
        <a href="index.php?lang=eng"><img src="./countries/Great-Britain.png" alt="britain"></a>
    </div>
    <?php
    if (isset($lang)) {
        echo "Вибрана мова: " . $lang;
    } elseif (isset($_COOKIE['lang'])) {
        echo "Вибрана мова: " . $_COOKIE['lang'];
    } else {
        echo "Мова не вибрана";
    }
    ?>
</body>

</html>