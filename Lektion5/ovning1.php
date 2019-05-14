<?php
// interface Animal
// {
//     public function inJapanese();
//     public function matingCall();
// }
// class Pig implements Animal
// {
//     public function inJapanese()
//     {
//         echo "buta";
//     }
//     public function matingCall()
//     {
//         echo "bububu";
//     }
// }
// class Dog implements Animal
// {
//     public function inJapanese()
//     {
//         echo "inu";
//     }
//     public function matingCall()
//     {
//         echo "wan wan";
//     }
// }


abstract class Animal2
{
    abstract public function makingCall();

}
class Bird extends Animal2
{
    public function inJapanese()
    {
        echo "tori";
    }
    public function makingCall()
    {
        echo "piyo piyo";
    }
}
class Cat extends Animal2
{
    public function inJapanese()
    {
        echo "neko";
    }
    public function makingCall()
    {
        echo "myao myao";
    }
}
interface MatingInterface{
    public function makingCall();
}
class Android implements MatingInterface{
    public function makingCall()
    {
        echo "zzZZZZZ";
    }
}

$bird = new Bird();
$cat = new Cat();
$android = new Android();



?>

<?php


   class Planet{
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

   class Earth extends Planet{
       protected $population;
         
       public function __construct($population)
       {
           parent::__construct("Earth",1234567);
           $this->population = $population;
       }
       public function visit(){
           parent::visit();
           echo "and population is : $this->population";
       }
   }


   $mars = new Planet("Mars",23434);
   $earth = new Earth(12234556);

   $mars->visit();
   $earth->visit();

?>

<?php
//   class Vehicle{}


//    class Bicycle extends Vehicle {}

//     class Boat extends Vehicle{}

//     class Car extends Vehicle{}
    
//     class Motorboat extends Vehicle{}

//     class Sail extends Vehicle{}

?>

<?php
class Vehicle {
    public function goTo($destination){}
  }
  class Car extends Vehicle {
    public function goTo($destination) {
      echo "Åker bil till $destination <br>";
      parent::goTo($destination);
    }
  }

  $vehicle = new Car;
  $vehicle->goTo('London');
  
?>