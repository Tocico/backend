<?php
interface MatingInterface
{
    public function matingCall();
}
class Animal
{
   function eat(){
       echo 'nomnom';
   }
   function sleep(){
       echo 'zzzZZZ';
   }
}

class Dog extends Animal implements MatingInterface
{
   public function makingNoise(){
       echo 'won won';
   }
   public function matingCall()
   {
       echo 'woooooooon!!';
   }
}

class Cat extends Animal implements MatingInterface
{
    public function makingNoise(){
        echo 'meao meao';
    }
    public function matingCall()
    {
        echo 'myaaaaaooooooo!';
    }
    
}

class Android implements MatingInterface
{
    public function matingCall()
    {
        echo'asdasdasjdhajskdhjaks';
    }

}


$cat = new Cat();
$cat->eat();
$cat->makingNoise();
$cat->matingCall();

$dog = new Dog();
$dog->eat();
$dog->makingNoise();
$dog->matingCall();

echo '<br>';
echo '<br>';
echo '<br>';

$robot = new Android();
$robot->matingCall();


?>

<?php
   class Planet
   {
       protected $name;
       protected $orbitDays;

       public function __construct($name,$orbitDays)
       {
           $this->name = $name;
           $this->orbitDays = $orbitDays;
       }
       public function visit(){
           echo "Welcome to $this->name! A lap around the sun takes: $this->orbitDays";
       }
   }

   class Earth extends Planet
   {
       protected $population;

       public function __construct($population)
       {
           parent::__construct('Earth',365.26);
           $this->population = $population;
       }
       public function visit()
       {
           parent::visit();
           echo "and population is: $this->population";
       }
   }
   
   $earth = new Planet('earth',1234);
   $mars = new Planet('mars',456);
   
   $mars->visit();
   $earth->visit();



?>

<?php
    class Vehicle{
        public function goTo($place){
            $this->place = $place;
            echo "Färdas till $this->place <br>";
        }
    }


   class Bicycle extends Vehicle 
   {
        // public function goTo($place)
        // {
        //     parent::goTo($place);
        // }
   }

    class Boat extends Vehicle
    {

    }

    class Car extends Vehicle
    {

    }
    
    class Motorboat extends Vehicle
    {

    }

    class Sail extends Vehicle
    {

    }

    class groupVehicle extends Vehicle
    {
        
    }

    $bicycle = new Bicycle();
    $bicycle->goTo('London');

    $boat = new Boat();
    $boat->goTo('Peru');

    $car = new Car();
    $car->goTo('Norway');
    
    $motorboat = new Motorboat();
    $motorboat->goTo('USA');

    $sail = new Sail();
    $sail->goTo('Japan');
    ?>
