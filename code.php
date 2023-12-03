<?php

class Person {
    // Properties
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Method to greet
    public function greet() {
        return "Hello, my name is $this->name, and I am $this->age years old." . "<br>";;
    }

    // Method to have a birthday
    public function haveBirthday() {
        $this->age++;
        return "Happy Birthday! I am now $this->age years old." . "<br>";;
    }
}

// Creating an instance of the Person class
$person = new Person("John", 25);

// Accessing properties
echo "Name: " . $person->name . "<br>"; // Output: John
echo "Age: " . $person->age . "<br>";   // Output: 25

// Calling methods
echo $person->greet() . "<br>";         // Output: Hello, my name is John, and I am 25 years old.
echo $person->haveBirthday() . "<br>";  // Output: Happy Birthday! I am now 26 years old.

// Printing object information
echo "Using var_dump(): <br>";
var_dump($person);

echo "<br>Using print_r(): <br>";
print_r($person);

echo '<br> ***************************<br>';
$person1 = new Person("aya", 25);

// Accessing properties
echo "Name: " . $person1->name . "<br>"; // Output: John
echo "Age: " . $person1->age . "<br>";   // Output: 25

// Calling methods
echo $person1->greet() . "<br>";         // Output: Hello, my name is John, and I am 25 years old.
echo $person1->haveBirthday() . "<br>";  // Output: Happy Birthday! I am now 26 years old.

// Printing object information
echo "Using var_dump(): <br>";
var_dump($person1);

echo "<br>Using print_r(): <br>";
print_r($person1);
?>
