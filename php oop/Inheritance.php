<?php
// Base class
class Animal {
    protected $name;

    // Constructor to set the name
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to make a sound
    public function makeSound() {
        return "Some generic animal sound";
    }

    // Method to get the name
    public function getName() {
        return $this->name;
    }
}

// Derived class for Dog
class Dog extends Animal {
    // Overriding the makeSound method
    public function makeSound() {
        return "Bark";
    }
}

// Derived class for Cat
class Cat extends Animal {
    // Overriding the makeSound method
    public function makeSound() {
        return "Meow";
    }
}

// Creating instances of Dog and Cat
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

// Accessing properties and methods
echo $dog->getName() . " says: " . $dog->makeSound() . "\n"; // Output: Buddy says: Bark
echo $cat->getName() . " says: " . $cat->makeSound() . "\n"; // Output: Whiskers says: Meow
?>
