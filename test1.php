<?php
abstract class auto
{
    public $name;
    public $plate;

    public function __construct($name, $plate)
   {
     $this->name=$name;
     $this->plate=$plate;
   }


}
class truck extends auto
{
    public $capacity = 14000;

    public function setcapacity($newcapacity)
    {
        $this->capacity=$newcapacity;
        return $this;
    }
    public function addcar($car)
    {
      //  var_dump(array($car));
    }
}
class car extends auto
{
    public $weight;
    public function setweight($newweigth)
    {

        $this->weight=$newweigth;
        //   $this->weight=$this->weight+$newweigth;
    //  echo $this->weight;
    }
}

$track = new truck('bmw1','AA0123BC');
$track ->setcapacity(8000);


$cars[] = (new car('bmw','AA0123BC'))->setweight(2300);
$cars[] = (new car('audi','AI0212BC'))->setweight(1900);
$cars[] = (new car('renault','AE4587'))->setweight(850);


foreach ($cars as $car){
    var_dump($car);
    $track->addcar($car);
}

