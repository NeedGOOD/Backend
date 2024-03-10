<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['result-random-array'])) {
    // Виклик функції getArray зі згенерованими масивами та виведення результату
    $result = getArray(createArray(), createArray());
    var_dump($result);
}

// Генерування випадкового масиву
function createArray() {
    $random_size = rand(3, 7);
    $array = [];

    for ($i = 0; $i < $random_size; ++$i) {
        $random_value = rand(10, 20);
        $array[] = $random_value;
    }
    return $array;
}

// Функція getArray об'єднує два масиви, видаляє дублікати та сортує його
function getArray($first_array, $second_array) {
    // Об'єднання двох масивів
    $new_array = array_merge($first_array, $second_array);
    var_dump($new_array);

    // Видалення дублікатів
    $new_new_array = array_unique($new_array);
    var_dump($new_new_array);

    // Сортування масиву
    sort($new_new_array);
    return $new_new_array;
}