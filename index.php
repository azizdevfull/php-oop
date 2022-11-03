<?php

class Car {
    // property yoki atribut {datas}
    // public $test;
    // public $year;

    // methods

    public function drive(){
        return 'driving';
    }
    public function getFuel()
    {
        return "fueling";
    }

    public function setModel($aziz){
        $this->model = $aziz;
    }
}

$bmw = new Car;
$bmw->setModel('BMW-X');

echo $bmw->model;

// echo $bmw->name;
// var_dump($audi);