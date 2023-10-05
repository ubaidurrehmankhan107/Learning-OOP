<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>

<?php
class Animal {
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function speak() {
        echo "{$this->name} speaks.";
    }
}

class Dog extends Animal {
    public function fetch() {
        echo "{$this->name} fetches the ball.";
    }
}

$dog = new Dog("Rex");
$dog->speak(); // Output: Rex speaks.
$dog->fetch(); // Output: Rex fetches the ball.





class Shape{
    public function area() {
        return 0;
    }
}

class Circle extends Shape {
    private $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }

    public function area(){
        return pi() * pow($this->radius, 2);
    }
}

$circle = new Circle(5);

echo "Circle Area: " . $circle->area();


class Vehicle {
    public $brand;
    public $model;


  public function __construct($brand, $model) {
    $this->brand = $brand;
    $this->model = $model;
  }

 public function startEngine(){
    echo "{$this->brand} {$this->model} engine started.";
}
} 

class Car extends Vehicle {
    public function drive() {
        echo "{$this->brand} {$this->model} is driving.";
    }
}

class Bicycle extends Vehicle {
    public function pedal() {
        echo "{$this->brand} {$this->model} is pedaling.";
    }
}

$car = new Car("Toyota", "Camry");
$car->startEngine();
$car->drive();

$bicycle = new Bicycle("Trek", "Mountain Bike");

$bicycle->startEngine();
$bicycle->pedal();


class Toy {
    public $color;

    public function __construct($color){
        $this->color = $color;
    }

    public function play() {
        echo "Playing  with a {$this->color} toy!";
    }
}

 

 class Car extends Toy {
    public function honk() {
        echo "Beep, beep!";
    }
 }
class Doll extends Toy {
    public function sayHi() {
        echo "Hi there !";
    }
}

$redCar = new Car("red");

$blueDoll = new Doll("blue");

$redCar->play();
$blueDoll->play();

$redCar->honk();

$blueDoll->sayHi();





?>
</body>
</html>