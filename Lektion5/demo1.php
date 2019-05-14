<?php
 class A{
     public $p1 = 'p1';
     protected $p2 = 'p2';
     private $p3 = 'p3';
 }

 class B extends A{
     public function whatWillHappen(){
         echo $this->p1;
         echo $this->p2;
         echo $this->p3;
     }
 }

 $b = new B;
 $a = new A;
 
  $b->whatWillHappen();
  

?>