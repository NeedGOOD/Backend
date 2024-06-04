<?php
class Circle {
    private $x;
    private $y;
    private $radius;

    public function __construct($x, $y, $radius) {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    public function __toString(): string {
        return 'Коло з центром в (' . $this->x . ', ' . $this->y . ') і радіусом ' . $this->radius;
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function intersect(Circle $circle) {
        $distance = sqrt(pow($this->x - $circle->x, 2) + pow($this->y - $circle->y, 2));
        return $distance < ($circle->radius + $this->radius);
    }
}

$circle = new Circle(5, 6, 20);
echo $circle->__toString();
echo '<br>';
echo $circle->getX();
echo '<br>';
echo $circle->getY();
echo '<br>';
echo $circle->getRadius();
echo '<br>';
$circle->setX(1);
echo '<br>';
$circle->setY(2);
echo '<br>';
$circle->setRadius(10);
echo '<br>';
echo $circle->getX();
echo '<br>';
echo $circle->getY();
echo '<br>';
echo $circle->getRadius();
echo '<br>';

$atherCircle = new Circle(4, 3, 5);

echo $atherCircle->intersect($circle) ? "Кола перетинаються" : "Кола не перетинаються";