<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['result-animals'])) {
    $text_animal = $_POST['text-animal'] ?? '';

    // Розділення рядка за допомогою коми та об'єднання елементів масиву у рядок з пробілами
    $text_array = explode(',', $text_animal);
    $text_array = join($text_array);

    // Розділення рядка за пробіл та виклик функції для визначення імені тваринки
    $text_array = explode(' ', $text_array);
    echo "Ім'я тваринки: " . animalName($text_array);
}

// Функція для визначення імені тваринки
function animalName($text_array) : string {
    $text = '';
    $animal_species = ["кішки", "собаки", "хом'ячка"];

    // Цикл для об'єднання елементів масиву у рядок
    foreach ($text_array as $name) {
        $text .= $name;
    }
    // Повернення складеного рядка, який містить ім'я тваринки та випадковий вид
    return trim($text) . ' ' . $animal_species[rand(0, count($animal_species) - 1)];
}