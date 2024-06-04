<?php
namespace Models;
/**
 * Повернення суму чисел
 */
class UserModel {
    /**
     * Повертає суму чисел
     * 
     * @param $a int
     * @param $b int
     * @return int
     */
    public function sum(int $a, int $b): int {
        return $a + $b;
    }
}