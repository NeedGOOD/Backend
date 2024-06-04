<?php
namespace Controllers;

/**
 * Виводить текст
 */
class UserController {
    protected $string;
    /**
     * Приймає рядок
     * 
     * @param $string string
     */
    public function __construct(string $string) {
        $this->string = $string;
    }

    /**
     * Виводить рядок
     */

    public function displayText() {
        echo $this->string;
    }
}