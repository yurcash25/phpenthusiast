<?php
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

class Car {

protected driver;
//the constructor can only get Driver object as argument
public function __construct( Car $driver)
{

}
}
