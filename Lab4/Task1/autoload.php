<?php

/**
 * Автопідключення класів
 * 
 * @param string $class
 * @return void
 */
function autoload(string $class): void {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

    if (is_file($path)) {
        require_once ($path);
    }
}
spl_autoload_register('autoload');