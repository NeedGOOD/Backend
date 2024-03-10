<?php
// Перевірка, чи HTTP-запит відбувається методом POST і чи була відправлена форма з елементом 'result-array'
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['result-array'])) {
    // Отримання значення з елемента 'array' масиву $_POST, якщо він існує, інакше використовується пустий рядок
    $string = $_POST['array'] ?? '';

    // Розділення рядка за допомогою коми та отримання масиву цілих чисел
    $array = explode(",", $string);
    $integer_numbers = array_map('intval', $array);
    repeat($integer_numbers);
}

// Функція для визначення повторюючихся елементів у масиві цілих чисел
function repeat($array) {
    // Визначення кількості кожного елемента у масиві
    $counter = array_count_values($array);
    $availability_check = false;

    // Перебір кількості кожного елемента та виведення повідомлень про повторюючіся елементи або їх відсутність
    foreach ($counter as $key => $item) {
        if ($item > 1) {
            echo "Елемент $key повторився"."<br>";
            $availability_check = true;
        }
    }

    // Виведення повідомлення, якщо повторюючих елементів немає
    if (!$availability_check) {
        echo "Повторюючих елементів немає"."<br>";
    }
}