<?php
namespace Views;

/**
 * Вивід інформації
 */
class UserView {
    protected $name;
    protected $age;
    /**
     * Приймає ім'я та вік
     * 
     * @param $name string
     * @param $age int
     */
    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * Виводить ім'я та вік
     */
    public function viewInfo() {
        echo $this->name . '<br>';
        echo $this->age;
    }
}