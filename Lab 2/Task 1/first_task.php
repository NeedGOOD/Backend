<?php
// Перевірка, чи HTTP-запит відбувається методом POST і чи була відправлена форма з елементом 'result-replace'
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['result-replace'])) {
    // Отримання значення з елемента 'text' масиву $_POST, якщо він існує, інакше використовується пустий рядок
    $text = $_POST['text'] ?? '';
    // Розділення рядка $text на масив слів за допомогою пробілу як роздільника
    $words = explode(' ', $text);
    $find = $_POST['find'] ?? '';
    $replace = $_POST['replace'] ?? '';

    if (empty($text) && empty($find) && empty($replace)) { echo "Рядки порожні"; }  // Всі рядки пусті
    elseif (empty($text) || empty($find) || empty($replace)) { echo "Ви не заповнили всі рядки. Заповніть їх знову"; }  // Один рядок пустий
    elseif (count($words) < 2) { echo "В першому рядку має бути мінімум два слова"; }   // Перший рядок менше двух слів
    elseif (strpos($text, $find) === false) { echo "Слова \"$find\" немає в строці \"$text\""; }    // Пошук позиції першого входження строки $find в рядку $text
    else {
        // Вивід результату, якщо все введено правильно
        echo "Введений текст: $text <br>";
        echo "Пошук слова: $find <br>";
        echo "Заміна слова: $replace <br>";
        // Заміняє слова $find на $replace в $text
        echo "Результат: " . str_replace($find, $replace, $text);
    }
}