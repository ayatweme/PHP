<?php

// Principle 1: Class Definition
class Animal {
    // Principle 2: Properties
    protected $name;

    // Principle 3: Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Principle 4: Encapsulation - Getter
    public function getName() {
        return $this->name;
    }

    // Principle 5: Encapsulation - Setter
    public function setName($name) {
        $this->name = $name;
    }

    // Principle 6: Method
    public function makeSound() {
        return "Generic animal sound";
    }
}

// Principle 7: Inheritance
class Dog extends Animal {
    private $color;
    // Principle 8: Method Overriding (Polymorphism)
    public function makeSound() {
        return "Woof! Woof!";
    }

    // Additional method specific to Dog
    public function fetch() {
        return $this->name . " is fetching a ball.";
    }
}

// Principle 9: Inheritance
class Cat extends Animal {
    // Principle 8: Method Overriding (Polymorphism)
    public function makeSound() {
        return "Meow!";
    }

    // Additional method specific to Cat
    public function scratchFurniture() {
        return $this->name . " is scratching the furniture.";
    }
}

// Creating instances of the classes
$genericAnimal = new Animal("Generic Animal");
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

// Accessing properties and methods
echo "Generic Animal: " . $genericAnimal->getName() . "<br>";
echo "Dog: " . $dog->getName() . "<br>";
echo "Cat: " . $cat->getName() . "<br>";

echo "Dog Sound: " . $dog->makeSound() . "<br>";
echo "Cat Sound: " . $cat->makeSound() . "<br>";

echo "Dog Fetch: " . $dog->fetch() . "<br>";
echo "Cat Scratch: " . $cat->scratchFurniture() . "<br>";

// Changing a property using setter
$genericAnimal->setName("Updated Animal");
echo "Updated Animal: " . $genericAnimal->getName() . "<br>";

// var_dump($dog);

?>
