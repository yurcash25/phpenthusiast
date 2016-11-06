<?php
/*
$models = array(
          array("Toyota, 12,14),
          array("BMW", 10,15));
//this function can only get array as an argument

function calcNumMilesOnFullTank (array $models)
{
foreach($models as $items)
{
 echo $carModel = $item[0].": ";
echo $numberOfMiles = $item[1] * $item[2]."<br/>";
}
}

calcNumMilesOnFullTank($models);
*/
class Car {

protected $driver;
protected $model;
protected $hasSunRoof;
protected $numberOfDoors;
protected $price;

//the constructor can only get Driver object as argument
public function __construct(Driver $driver)
{
 $this->driver=$driver;
}
//string type hinting
public function setModel(string $model)
{
$this->model=$model;
}
//boolean type hint
public function setHasSunRoof(bool $value)
{
$this->hasSunRoof=$value;
}
//integer type hint
public function setNumberOfDoors (int $value)
{
$this->numberOfDoors = $value;
}
//float type hint
public function setPrice (float $value)
{
 $this->price=$value;
}

}
class Driver {}

$driver1 = new Driver();
$car1 = new Car ($driver1);
