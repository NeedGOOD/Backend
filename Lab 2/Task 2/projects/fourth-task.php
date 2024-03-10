<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    isset($_POST['result-names']) ? workButton("names") : (isset($_POST['result-ages']) ? workButton("ages") : null);
}

function workButton($result) {
    $names = $_POST['names'] ?? '';
    $names_array = array_map('trim', explode(',', $names));

    $ages = $_POST['ages'] ?? '';
    $int_ages = array_map('intval', explode(',', $ages));

    // Створення асоціативного масиву імен та віку
    $names_and_ages = array_combine($names_array, $int_ages);

    // Виклик функції для обробки і виведення результатів
    namesAges($names_and_ages, $result);
}

function namesAges($names_or_ages, $result) {
    if ($result == "names") {
        ksort($names_or_ages);  // Сортування за іменами
    } elseif ($result == "ages") {
        asort($names_or_ages);  // Сортування за віком
    }
    var_dump($names_or_ages);
}