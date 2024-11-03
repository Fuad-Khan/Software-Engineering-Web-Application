<?php
// 221-35-883
// Defining a class
class Car {
    public $color;
    public $model;

    // Constructor to initialize properties
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    // Method to display car details
    public function displayDetails() {
        return "Car Model: " . $this->model . ", Color: " . $this->color;
    }
}
// Creating an object of the Car class
$myCar = new Car("Red", "Toyota");
echo $myCar->displayDetails(); // Output: Car Model: Toyota, Color: Red
?>
