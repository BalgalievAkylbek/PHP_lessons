<?php
class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function displayInfo() {
        return "Модель: $this->model, Цвет: $this->color";
    }
}

// Создание объекта
$myCar = new Car("Красный", "Toyota");
echo $myCar->displayInfo();
?>
