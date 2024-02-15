<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['check-password'])) {
    $input_password = $_POST['input-password'] ?? '';
    $characters = str_split($input_password);

    if (empty($input_password)) { echo "Рядок пустий"; }
    elseif (count($characters) < 8) { echo "Пароль повинен складатися з 8 символів"; }
    else {
        $upper = 0;
        $lower = 0;
        $value = 0;
        $special_symbol = 0;

        foreach ($characters as $character) {
            if (ctype_upper($character)) { ++$upper; }
            elseif (ctype_lower($character)) { ++$lower; }
            elseif (ctype_digit($character)) { ++$value; }
            elseif (preg_match('/[!@#$%^&*(),.?":{}|<>]/', $character)) { ++$special_symbol; }
        }

        if ($upper > 0 && $lower > 0 && $value > 0 && $special_symbol > 0) { echo "Ваш пароль \"$input_password\" надійний"; }
        else { echo "Ваш пароль \"$input_password\" не надійний"; }
    }
}