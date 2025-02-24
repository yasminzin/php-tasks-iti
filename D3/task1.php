<?php
# 1 ---------------------------------------------------------------------------------------------------
class Author {
    private $name;
    private $email;
    private $gender;

    function __construct($name, $email, $gender)
    {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }
    function getName():string {
        return $this->name;
    }
    function getEmail():string {
        return $this->email;
    }
    function getGender():string {
        return $this->gender;
    }
    function setEmail($email):void {
        $this->email = $email;
    }
    public function toString():string {
        return "Author[name=" . $this->name . ",email=" . $this->email . ",gender=" . $this->gender . "]";
    }
}

$author1 = new Author("AuthorName", "name1@author.com", "m");
$author2 = new Author("AuthorName2", "name2@author.com", "m");
$author3 = new Author("AuthorName3", "name3@author.com", "f");
echo $author1->toString()."<br>";
echo $author1->getEmail()."<br>";
echo $author1->getName()."<br>";
echo $author1->getGender()."<br>";


class Book {
    private $name;
    private $author;
    private $price;
    private $qty;

    function __construct($name, Author $author, $price, $qty="0")
    {
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
        $this->qty = $qty;
    }
    function getName():string {
        return $this->name;
    }
    function getAuthor():Author {
        return $this->author;
    }
    function getPrice():float {
        return $this->price;
    }
    function getQty():int {
        return $this->qty;
    }
    function setPrice($price) {
        $this->price = $price;
    }
    function setQty($qty) {
        $this->qty = $qty;
    }
    public function toString():string {
        return "Book[name=" . $this->name . "," . $this->author->toString() . ",price=" . $this->price . ",qty=" . $this->qty . "]";
    }
}

$book1 = new Book("BookName1", $author1, "45", 1);
echo $book1->toString()."<br>";
echo $book1->getName()."<br>";
print_r($book1->getAuthor())."<br>";
echo $book1->getPrice()."<br>";
echo $book1->getQty()."<br>";

# 2 ---------------------------------------------------------------------------------------------------
class BookTwo {
    private $name;
    private $author = [];
    private $price;
    private $qty;

    function __construct($name, array $author, $price, $qty="0")
    {
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
        $this->qty = $qty;
    }
    function getName():string {
        return $this->name;
    }
    function getAuthor():array {
        return $this->author;
    }
    function getPrice():float {
        return $this->price;
    }
    function getQty():int {
        return $this->qty;
    }
    function setPrice($price) {
        $this->price = $price;
    }
    function setQty($qty) {
        $this->qty = $qty;
    }
    public function toString():string {
        $authorsString = array_map(function($author) {
            return $author->toString();
        }, $this->author);
        $authorsString = implode(", ", $authorsString);
        return "Book[name=" . $this->name . ", authors=[" . $authorsString . "], price=" . $this->price . ", qty=" . $this->qty . "]";
    }
}

$bookTwo1 = new BookTwo("PHP Programming", [$author1, $author2, $author3], 29.99, 10);
echo $bookTwo1->toString()."<br>";

# 3 ---------------------------------------------------------------------------------------------------
trait Circle {
    private float $radius;
    private string $color;

    function initialize($radius = 1.0, $color = "red") {
        $this->radius = $radius;
        $this->color = $color;
    }
    function getRadius() {
        return $this->radius;
    }
    function setRadius($radius) {
        $this->radius = $radius;
    }
    function getColor() {
        return $this->color;
    }
    function setColor($color) {
        $this->color = $color;
    }
    function getArea() {
        return pi() * pow($this->radius, 2);
    }
    public function circleToString():string {
        return "Circle[radius=" . $this->radius . ", color=" . $this->color . "]";
    }
}

class Cylinder {
    use Circle;
    private float $height;

    function __construct($radius = 1.0, $height = 1.0, $color = "red")
    {
        $this->initialize($radius, $color);
        $this->height = $height;
    }
    public function getHeight() {
        return $this->height;
    }
    function setHeight($height) {
        $this->height = $height;
    }
    function getVolume() {
        return $this->getArea() * $this->height;
    }
    function toString():string {
        return "Cylinder[" . $this->circleToString() . ", height=" . $this->height . "]";
    }
}

$cylinder1 = new Cylinder(1.0, 2.0, "blue");
echo $cylinder1->toString()."<br>";

?>

