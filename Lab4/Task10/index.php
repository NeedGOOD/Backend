<?php

interface HouseCleaning {
    public function cleanRoom();
    public function cleanKitchen();
}

abstract class Human implements HouseCleaning {
    public function giveBirth() {
        $this->birthAnnouncement();
    }

    abstract protected function birthAnnouncement();
}

class Student extends Human {
    protected function birthAnnouncement() {
        echo "Народився студент!\n";
    }

    public function cleanRoom() {
        echo "Студент прибирає кімнату\n";
    }

    public function cleanKitchen() {
        echo "Студент прибирає кухню\n";
    }
}

class Programmer extends Human {
    protected function birthAnnouncement() {
        echo "Народився програміст!\n";
    }

    public function cleanRoom() {
        echo "Програміст прибирає кімнату\n";
    }

    public function cleanKitchen() {
        echo "Програміст прибирає кухню\n";
    }
}

$student = new Student();
$programmer = new Programmer();

$student->giveBirth();
$programmer->giveBirth();

$student->cleanRoom();
$student->cleanKitchen();

$programmer->cleanRoom();
$programmer->cleanKitchen();