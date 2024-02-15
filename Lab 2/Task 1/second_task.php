<?php
// Перевірка, чи HTTP-запит відбувається методом POST і чи була відправлена форма з елементом 'result-cities'
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['result-cities'])) {
    // Отримання значення з елемента 'cities' масиву $_POST, якщо він існує, інакше використовується пустий рядок
    $cities = $_POST['cities'] ?? '';
    // Розділення рядка $cities на масив слів за допомогою пробілу як роздільника
    $words = explode(' ', $cities);

    if (empty($cities)) { echo "Рядок порожній"; }  // Рядок пустий
    elseif (count($words) < 2) { echo "В рядку має бути мінімум два слова"; }   // Перший рядок менше двух слів
    else {
        // Сортування масиву $words за алфавітом
        sort($words);
        // Об'єднання елементів масиву $words в рядок, розділений пробілом
        $sorting_words = implode(' ', $words);
        echo "Результат: $sorting_words";
    }
}