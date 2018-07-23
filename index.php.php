
<?php

echo "Инкапсуляция это свойство системы, позволяющая объединять объекты, методы, классы и т. д. в блоки данных, а так же создавать иерархию доступа к элементам блоков данных для внешнего пользователя.";

 echo "У объектов есть следующие плюсы: <br>
 Объекты передаются по ссылке <br>
 Каждый объект имеет свои свойства и методы <br><br>
 Также у объектов есть минусы:<br>
 Они не могут использоваться отдельно от класса т. к. являются её экземпляром <br><br>";

class Car {
  public $name;
  public $color = 'black';
  public $type = 'sedan';
  public function getCar() {
    if ($this->color) {
      return  $color = 'blue';
    }
    else {
      return $color;
    }
  }
}

$lada = new Car();
$lada->name = 'LadaNine';
$lada->getCar() . '<br>';
$lada->color;

$reno = new Car();
$reno->name = 'Renault_Megane';
$reno->color ='gray';

echo $lada->name . '<br>';
echo $lada->type . '<br>';
echo $lada->getCar() . '<br>';
echo $lada->color . '<br>';

echo $reno->name . '<br>';
echo $reno->type . '<br>';
echo $reno->color . '<br><br>';

class Television {
  public $color;
  public $name;
  public $diagonal = 28;
  public function getTelevision() {
    $this->diagonal = 32;
  }
}

$tv1 = new Television();
$tv1->name = 'Samsung_bw265739';
$tv1->color = 'gray';
$tv1->diagonal;

$tv2 = new Television();
$tv2->getTelevision();
$tv2->name = 'LG_hc6811387';
$tv2->color = 'black';
$tv2->diagonal;

echo $tv1->name . '<br>';
echo $tv1->color . '<br>';
echo $tv1->diagonal . '<br>';
echo $tv2->name . '<br>';
echo $tv2->color . '<br>';
echo $tv2->diagonal . '<br><br>';

class Pen {
  public $color;
  public function getPen() {
    if ($this->color == 'black') {
    return  $color = 'multicolor';
    }
    else {
      return $color = 'green';
    }
  }
}

$pen1 = new Pen();
$pen2 = new Pen();
$pen1->color = 'black';
$pen1->getPen();
$pen2->color = 'red';
$pen2->getPen();

echo $pen1->color . '<br>';
echo $pen2->color . '<br>';
echo $pen1->getPen() . '<br>';
echo $pen2->getPen() . '<br><br>';

class Duck {
  public $type = 'Domestic';
  public function getDuck() {
    $this->type = 'Wood';
  }
}

$duck1 = new Duck();
$duck1->getDuck();
$duck1->type;
$duck2 = new Duck();
$duck2->type;

echo $duck1->type . '<br>';
echo $duck2->type . '<br><br>';

class Product {
  public $name;
  public $type;
  private $price = 500;
  public function getProduct() {
    $this->name = 'Asus_Geforce_GTX1060' ;
  }
}
$product1 = new Product();
$product2 = new Product();
$product1->name = 'Intel_4770';
$product2->name = 'Gigabyte_Geforce_GTX980';
$product2->getProduct();
$product1->type = CPU;
$product2->type = GPU;

echo $product1->name . '<br>';
echo $product1->type . '<br>';
echo $product2->name . '<br>';
echo $product2->type . '<br>';
 ?>
