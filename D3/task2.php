<?php

# 1 ---------------------------------------------------------------------------------------------------
abstract class Person {
    private $name;
    private $address;
    function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
    function getName():string {
        return $this->name;
    }
    function getAddress():string {
        return $this->address;
    }
    function setName($name):void {
        $this->name = $name;
    }
    function setAdress($address):void {
        $this->address = $address;
    }
    abstract function toString():string;
}

class Student extends Person {
    private string $program;
    private int $year;
    private float $fee;

    function __construct($name, $address, $program, $year, $fee)
    {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }
    function getProgram(): string {
        return $this->program;
    }
    function setProgram($program): void {
        $this->program = $program;
    }
    function getYear(): int {
        return $this->year;
    }
    function setYear($year): void {
        $this->year = $year;
    }
    function getFee(): float {
        return $this->fee;
    }
    function setFee($fee): void {
        $this->fee = $fee;
    }
    #[\Override]
    function toString():string {
        return "Student Name: ".$this->getName().", Address: ".$this->getAddress().", Program: ".$this->getProgram().", Year: ".$this->getYear().", Fee: ".$this->getFee();
    }
}

class Staff extends Person {
    private string $school;
    private float $pay;
    function __construct($name, $address, $school, $pay)
    {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }
    function getSchool(): string {
        return $this->school;
    }
    function setSchool($school): void {
        $this->school = $school;
    }
    function getPay(): string {
        return $this->pay;
    }
    function setPay($pay): void {
        $this->pay = $pay;
    }
    #[\Override]
    function toString():string {
        return "Student Name: ".$this->getName().", Address: ".$this->getAddress().", School: ".$this->getSchool().", Pay: ".$this->getPay();
    }
}

# 2 ---------------------------------------------------------------------------------------------------
abstract class Shape{
    private string $color;
    private bool $filled;
    function __construct($color, $filled)
    {
        $this->color = $color;
        $this->filled = $filled;
    }
    function getColor():string {
        return $this->color;
    }
    function setColor($color) {
        $this->color = $color;
    }
    function isFilled():bool {
        return $this->filled;
    }
    function setFilled($filled) {
        $this->filled = $filled;
    }
    abstract function toString():string;
}

class Circle extends Shape {
    private float $radius;
    function __construct($color, $filled, $radius)
    {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }
    function getRadius():float {
        return $this->radius;
    }
    function setRadius($radius):void {
        $this->radius = $radius;
    }
    function getArea():float {
        return pow($this->radius, 2)* pi();
    }
    function getPerimeter():float {
        return 2*$this->radius* pi();
    }
    #[\Override]
    function toString():string {
        return "Color: ".$this->getColor().", Filled: ".$this->isFilled().", Radius: ".$this->getRadius();
    }
}

class Rectangle extends Shape {
    private float $width;
    private float $length;
    function __construct($color, $filled, $width, $length)
    {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }
    function getWidth():float {
        return $this->width;
    }
    function setWidth($width):void {
        $this->width = $width;
    }
    function getLength():float {
        return $this->length;
    }
    function setLength($length):void {
        $this->length = $length;
    }
    function getArea():float {
        return $this->width * $this->length;
    }
    function getPerimeter():float {
        return ($this->width + $this->length) *2;
    }
    #[\Override]
    function toString():string {
        return "Color: ".$this->getColor().", Filled: ".$this->isFilled().", Width: ".$this->getWidth().", Length: ".$this->getLength();
    }
}

class Square extends Rectangle {
    private float $side;
    function __construct($color, $filled, $side)
    {
        parent::__construct($color, $filled, $side, $side);
        $this->side = $side ;
    }
    function getSide():float {
        return $this->side;
    }
    function setSide($side):void {
        $this->side = $side;
        $this->setWidth($side);
        $this->setLength($side);
    }
    function setWidth($side): void {
        parent::setWidth($side);
        parent::setLength($side);
    }
    function setLength($side): void {
        parent::setWidth($side);
        parent::setLength($side);
    }
    #[\Override]
    function toString(): string {
        return "Square[" . parent::toString() . "]";
    }
}

$circle = new Circle("blue", true, 3.0);
echo $circle->toString()."<br>";
$rectangle = new Rectangle("green", false, 4.0, 6.0);
echo $rectangle->toString()."<br>";
$square = new Square("yellow", true, 5.0);
echo $square->toString()."<br>";


# 3 ---------------------------------------------------------------------------------------------------
class Animal {
    private string $name;
    function __construct($name) {
        $this->name = $name;
    }
    function toString(): string {
        return "Animal[name=" . $this->name . "]";
    }
}

class Mammal extends Animal {
    function __construct($name) {
        parent::__construct($name);
    }
    function toString(): string {
        return "Mammal[" . parent::toString() . "]";
    }
}

class Cat extends Mammal {
    function __construct($name) {
        parent::__construct($name);
    }
    function greets(): void {
        echo "Meow\n";
    }
    function toString(): string {
        return "Cat[" . parent::toString() . "]";
    }
}

class Dog extends Mammal {
    function __construct($name) {
        parent::__construct($name);
    }
    function greets(): void {
        echo "Woof\n";
    }
    function greetsAnother(Dog $another): void {
        echo "Woooof\n";
    }
    function toString(): string {
        return "Dog[" . parent::toString() . "]";
    }
}

$animal = new Animal("New Animal");
echo $animal->toString()."<br>";

$mammal = new Mammal("New Mammal");
echo $mammal->toString()."<br>";

$cat = new Cat("New Cat");
echo $cat->toString()."<br>";
$cat->greets();

$dog = new Dog("New Dog");
echo $dog->toString()."<br>";
$dog->greets();

$anotherDog = new Dog("New Another dog");
$dog->greetsAnother($anotherDog);

?>