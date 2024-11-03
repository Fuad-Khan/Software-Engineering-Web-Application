<?php
class Person {
    // Private properties
    private $name;
    private $age;

    // Constructor to initialize the properties
    public function __construct($name, $age) {
        $this->setName($name);
        $this->setAge($age);
    }

    // Public method to set the name
    public function setName($name) {
        $this->name = $name;
    }

    // Public method to get the name
    public function getName() {
        return $this->name;
    }

    // Public method to set the age
    public function setAge($age) {
        if ($age >= 0) {
            $this->age = $age;
        } else {
            echo "Age must be a positive number.\n";
        }
    }

    // Public method to get the age
    public function getAge() {
        return $this->age;
    }
}

// Creating an instance of Person
$person = new Person("Alice", 30);

// Accessing the properties through public methods
echo "Name: " . $person->getName() . "\n"; // Output: Name: Alice
echo "Age: " . $person->getAge() . "\n";   // Output: Age: 30

// Modifying the properties
$person->setName("Bob");
$person->setAge(25);

// Accessing the modified properties
echo "Updated Name: " . $person->getName() . "\n"; // Output: Updated Name: Bob
echo "Updated Age: " . $person->getAge() . "\n";   // Output: Updated Age: 25

// Trying to set a negative age
$person->setAge(-5); // Output: Age must be a positive number.
?>
