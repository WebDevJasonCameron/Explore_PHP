<?php

abstract class Shape {
    // PROPs
    protected $name;

    // CONs
    public function __construct(string $name) {
        $this->name = $name;
    }

    // AB METHs
    abstract public function calculateArea();

    // CON METHs
    public function getName() : string {
        return $this->name;
    }
}

// -------------------------- SUB

class Circle extends Shape {
    // PROPs
    private float $radius;

    // CONs
    public function __construct(string $name, float $radius) {
        parent::__construct("circle");
        $this->radius = $radius;
    }

    // METHs
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// --------------------------- SUB
class Rectangle extends Shape {
    // PROPs
    private $width;
    private $height;

    // CONs
    public function __construct($name, $width, $height){
        parent::__construct("rectangle");
        $this->width = $width;
        $this->height = $height;
    }

    // METHs
    public function calculateArea(){
        return $this->width * $this->height;
    }

}

// ------------------------ RUN
$circle = new Circle("Circle", 5);
//var_dump($circle->calculateArea());

echo $circle->getName() . '<br />';
var_dump($circle->calculateArea()) ;

$rectangle = new Rectangle("Rectangle", 50, 100);

echo $rectangle->getName() . '<br />';
var_dump($rectangle->calculateArea());