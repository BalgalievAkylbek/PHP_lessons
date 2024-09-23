<?php
// Пример: Класс Animal и его наследники инкапсуляция, наследование и полиморфизм.

// Базовый класс
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "Some sound";
    }

    public function getName() {
        return $this->name;
    }
}

// Наследуемый класс Dog
class Dog extends Animal {
    public function makeSound() {
        return "Bark";
    }
}

// Наследуемый класс Cat
class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}

// Использование классов
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

echo $dog->getName() . " says: " . $dog->makeSound() . "\n"; // Buddy says: Bark
echo $cat->getName() . " says: " . $cat->makeSound() . "\n"; // Whiskers says: Meow


// Инкапсуляция: Поле $name защищено (protected), доступно только внутри класса и его наследников.
// Наследование: Dog и Cat наследуют от базового класса Animal.
// Полиморфизм: Метод makeSound() переопределен в дочерних классах, обеспечивая различное поведение в зависимости от типа животного.
?>

