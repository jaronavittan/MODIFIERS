<?php
class Fruit {
  public $name;
  protected $color;
  private $weight;
}

$banana = new Fruit();
$banana->name = 'Mango'; // OK
//$banana->color = 'Yellow'; // ERROR
//$banana->weight = '300'; // ERROR
?>
