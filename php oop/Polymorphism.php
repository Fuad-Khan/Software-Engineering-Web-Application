<?php
// Base class
class Shape {
    // Abstract method for calculating area
    public function area() {
        return 0;
    }
}

// Derived class for Circle
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementing the area method for Circle
    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}

// Derived class for Rectangle
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementing the area method for Rectangle
    public function area() {
        return $this->width * $this->height;
    }
}

// Function to display the area of any shape
function displayArea(Shape $shape) {
    echo "Area: " . $shape->area() . "\n";
}

// Creating instances of Circle and Rectangle
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Using the displayArea function to show the area of each shape
displayArea($circle);     // Output: Area: 78.539816339745
displayArea($rectangle);   // Output: Area: 24
?>
