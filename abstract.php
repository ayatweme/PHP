<?php 
// Abstract Class Declaration
abstract class Shape {
    private $name ;
    // Abstract Method Declaration
    abstract public function calculateArea();
}

// Concrete Class: Circle
class Circle extends Shape {
    private $radius;

    // Constructor
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementation of abstract method
    public function calculateArea() {
        return pi() * pow($this->radius, 2); // Area of a circle: π * r^2
    }
}

// Concrete Class: Square
class Square extends Shape {
    private $sideLength;

    // Constructor
    public function __construct($sideLength) {
        $this->sideLength = $sideLength;
    }

    // Implementation of abstract method
    public function calculateArea() {
        return pow($this->sideLength, 2); // Area of a square: side^2
    }
}

// Usage Example
$circle = new Circle(5);
$square = new Square(4);

echo "Area of the Circle: " . $circle->calculateArea() . "<br>";
echo "Area of the Square: " . $square->calculateArea() . "";

?>