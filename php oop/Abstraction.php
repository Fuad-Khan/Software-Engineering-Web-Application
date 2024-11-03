<?php
// Abstract class
abstract class Vehicle {
    protected $color;

    // Constructor to set the color
    public function __construct($color) {
        $this->color = $color;
    }

    // Abstract method to get vehicle information
    abstract public function getInfo();

    // Method to get the color of the vehicle
    public function getColor() {
        return $this->color;
    }
}

// Concrete class for Car
class Car extends Vehicle {
    private $brand;

    public function __construct($color, $brand) {
        parent::__construct($color); // Call the constructor of the parent class
        $this->brand = $brand;
    }

    // Implementing the abstract method
    public function getInfo() {
        return "This is a " . $this->color . " " . $this->brand . " car.";
    }
}

// Concrete class for Bicycle
class Bicycle extends Vehicle {
    private $type;

    public function __construct($color, $type) {
        parent::__construct($color); // Call the constructor of the parent class
        $this->type = $type;
    }

    // Implementing the abstract method
    public function getInfo() {
        return "This is a " . $this->color . " " . $this->type . " bicycle.";
    }
}

// Creating instances of Car and Bicycle
$car = new Car("red", "Toyota");
$bicycle = new Bicycle("blue", "mountain");

// Accessing vehicle information
echo $car->getInfo() . "\n";     // Output: This is a red Toyota car.
echo $bicycle->getInfo() . "\n"; // Output: This is a blue mountain bicycle.
?>
