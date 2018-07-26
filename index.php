<?php

echo "Инкапсуляция это свойство системы, позволяющая объединять объекты, методы, классы и т. д. в блоки данных, а так же создавать иерархию доступа к элементам блоков данных для внешнего пользователя.";

echo "У объектов есть следующие плюсы: <br>
Объекты передаются по ссылке <br>
Каждый объект имеет свои свойства и методы <br><br>
Также у объектов есть минусы:<br>
Они не могут использоваться отдельно от класса т. к. являются её экземпляром <br><br>";

class Car
{
  public $name;
  public $color = 'black';
  public $type = 'sedan';
  public function getCar()
  {
    if ($this->color == 'black')
    {
      return  $color = 'blue';
    }
    else
    {
      return $this->color;
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

class Television
{
  public $color;
  public $name;
  public $diagonal = 28;
  public function getTelevision()
  {
    $this->diagonal = 32;
  }
  public function __construct(
    $color,
    $name
    )
  {
    $this->color = $color;
    $this->name = $name;
  }
}

$tv1 = new Television('gray', 'Samsung_bw265739');
$tv1->diagonal;

$tv2 = new Television('black', 'LG_hc6811387');
$tv2->getTelevision();
$tv2->diagonal;

echo $tv1->name . '<br>';
echo $tv1->color . '<br>';
echo $tv1->diagonal . '<br>';
echo $tv2->name . '<br>';
echo $tv2->color . '<br>';
echo $tv2->diagonal . '<br><br>';

class Pen {
  public $color;
  public function __construct($color)
  {
    $this->color = $color;
  }
  public function getPen()
  {
    if ($this->color == 'black')
    {
    return  $color = 'multicolor';
    }
    else
    {
      return $color = 'green';
    }
  }
}

$pen1 = new Pen('black');
$pen2 = new Pen('red');
$pen1->getPen();
$pen2->getPen();

echo $pen1->color . '<br>';
echo $pen1->getPen() . '<br>';
echo $pen2->color . '<br>';
echo $pen2->getPen() . '<br><br>';

class Duck {
  public $type;
  public function __construct($type) {
    $this->type = $type;
  }
}

$duck1 = new Duck('Wood');
$duck1->type;
$duck2 = new Duck('Domestic');
$duck2->type;

echo $duck1->type . '<br>';
echo $duck2->type . '<br><br>';

class Product {
  public $name;
  public $type;
  private $price = 500;
  public function __construct(
    $name,
    $type)
  {
    $this->name = $name;
    $this->type = $type;
  }
  public function getProduct()
  {
    if ($this->name == 'Gigabyte_Geforce_GTX980') {
      return $name = 'Asus_Geforce_GTX1060';
    }
  }
}
$product1 = new Product('Intel_4770', 'CPU');
$product2 = new Product('Gigabyte_Geforce_GTX980', 'GPU');
$product2->getProduct();


echo $product1->name . '<br>';
echo $product1->type . '<br>';
echo $product2->name . '<br>';
echo $product2->type . '<br>';
echo $product2->getProduct();
