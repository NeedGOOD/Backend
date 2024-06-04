<?php

abstract class Human {
    public function giveBirth() {
        $this->birthAnnouncement();
    }

    abstract protected function birthAnnouncement();
}

class Student extends Human {
    protected function birthAnnouncement() {
        echo "Народився студент!\n";
    }
}

class Programmer extends Human {
    protected function birthAnnouncement() {
        echo "Народився програміст!\n";
    }
}

$student = new Student();
$programmer = new Programmer();

$student->giveBirth();
$programmer->giveBirth();