<?php
// Перевірка, чи HTTP-запит відбувається методом POST і чи була відправлена форма з елементом 'generate-password'
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['generate-password'])) {
    // Отримання значення з елемента 'length-password' масиву $_POST, якщо він існує, інакше використовується пустий рядок
    $length_password = $_POST['length-password'] ?? '';

    // Перетворення строки '$length_password' в цілі числа
    $length_password_int = (int)$length_password;

    if (empty($length_password)) { echo "Заповніть рядок"; } // Рядок пустий
    elseif ($length_password_int < 1) { echo "Введіть число більше нуля"; } // Число менше 1
    else {
        $character = null;

        // Випадкові символи
        for ($i = 0; $i < $length_password_int; ++$i) { $character .= chr(rand(33, 122)); }
        echo "Випадковий пароль: $character";   // Вивід паролю
    }
}