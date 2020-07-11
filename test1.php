<?php
abstract class auto
{
    public $name;
    public $seats;
    public $color;
    public $volume;
    public $year;
    public $plate;

    public function __construct($name, $plate)
   {
     $this->name=$name;
     $this->plate=$plate;
   }
}
class truck extends auto
{
    public $time;
    public $engine;
    public $capacity = 14000;
    public $chassis;

    public function setcapacity($newcapacity)
    {
        $this->capacity=$newcapacity;
        return $this;
    }
    public function addcar($car)
    {
      $result=$this->capacity-$car->weight;
      $this->capacity = $result;
      if($this->capacity > 0)
      {
      } else
        {
            echo "Машина превысила лимит веса на" . " " . $this->capacity . ' ';
            echo $car->name . '-';
                echo $car->plate . '</br>';
        }
        return $this;
    }
}
class car extends auto
{
    public $cartime;
    public $carengine;
    public $cartype;
    public $carfuel;
    public $weight;
    public function setweight($newweigth)
    {
       $this->weight=$newweigth;
       return $this;
    }
}

$track = new truck('bmw1','AA0123BC');
$track ->setcapacity(5000);


$cars[] = (new car('bmw','AA0123BC'))->setweight(2300);
$cars[] = (new car('audi','AI0212BC'))->setweight(1900);
$cars[] = (new car('renault','AC2333BC'))->setweight(2100);



foreach ($cars as $car){
    $track->addcar($car);
}

