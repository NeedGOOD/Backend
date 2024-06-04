<?php
class Human {
    protected $height;
    protected $weight;
    protected $age;

    public function getHeight() {
        return $this->height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getAge() {
        return $this->age;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}

class Student extends Human {
    protected $name_university;
    protected $course;

    public function getNameUniversity() {
        return $this->name_university;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setNameUniversity($name_university) {
        $this->name_university = $name_university;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    public function levelUpCourse() {
        return $this->course+1;
    }
}

class Programmer extends Human {
    protected $programming_languages = [];
    protected $experience;

    public function getProgrammingLanguages() {
        return $this->programming_languages;
    }

    public function getExperience() {
        return $this->experience;
    }

    public function setProgrammingLanguages($programming_languages) {
        $this->programming_languages = $programming_languages;
    }

    public function setExperience($experience) {
        $this->experience = $experience;
    }

    public function learnNewLanguage($programming_languages) {
        $this->programming_languages[] = $programming_languages;
    }
}

$human = new Human;
$human->setAge(20);
$human->setWeight(75);
$human->setHeight(180);

echo "Human age: " . $human->getAge() . '<br>';
echo "Human weight: " . $human->getWeight() . '<br>';
echo "Human height: " . $human->getHeight() . '<br>';

echo '<br>';

$student = new Student;
$student->setNameUniversity('ZTU');
$student->setCourse(3);

echo "Student name university: " . $student->getNameUniversity() . '<br>';
echo "Student course: " . $student->getCourse() . '<br>';
echo "Student next course: " . $student->levelUpCourse() . '<br>';

echo '<br>';

$programmer = new Programmer;
$programmer->setProgrammingLanguages(['JS', 'C++']);
$programmer->setExperience(5);

echo '<pre>';
echo "Programmer programming languages: ";
print_r($programmer->getProgrammingLanguages());
echo '<br>';
echo "Programmer experience: " . $programmer->getExperience() . '<br>';
echo "Programmer learn new language: " . $programmer->learnNewLanguage('PHP') . '<br>';

