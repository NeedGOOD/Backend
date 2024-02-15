<?php
// Перевірка, чи HTTP-запит відбувається методом POST і чи була відправлена форма з елементом 'result-data'
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['result-data'])) {
    // Отримання значення з елемента 'first-data' масиву $_POST, якщо він існує, інакше використовується пустий рядок
    $firts_data = $_POST['first-data'] ?? '';
    $second_data = $_POST['second-data'] ?? '';
    
    
    if (empty($firts_data) && empty($second_data)) { echo "Рядки порожні"; }    // Всі рядки порожні
    elseif (empty($firts_data) || empty($second_data)) { echo "Ви не заповнили всі рядки. Заповніть їх знову"; }    // Один рядок порожній
    else {
        // Створення об'єктів DateTime на основі рядків $firts_data та $second_data
        $firts_data_time = new DateTime($firts_data);
        $second_data_time = new DateTime($second_data);

        // Обчислення різниці між двома датами
        $difference = $firts_data_time->diff($second_data_time);

        // Отримання кількості днів з різниці
        $formatted_difference = $difference->days;

        // Виведення результату
        echo "Різниця між датами \"$firts_data - $second_data\" буде $formatted_difference дня";
    }
}