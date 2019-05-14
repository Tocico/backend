<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

class Book{
    public $title ;
    public $author;

  
    public function setTitle($new_title){
        $this -> title = $new_title;
    }

    function printInfo(){
        echo  "Titel: $this->title \nFörfattare: $this->author";
    }


}

$first_book = new Book;
$first_book -> title = "Främlingen";
$first_book -> author = "Albert Camus";
echo "Titel: $first_book->title \nFörfattare: $first_book->author";

echo '<br>';

$second_book = new Book;
$second_book -> title = "Harry Potter and the Philosopher\'s Stone";
$second_book -> author = "J K Rowling";
echo "Titel: $second_book->title \nFörfattare: $second_book->author";

echo '<br>';

echo $second_book -> setTitle('Harry Potter and the Order of the Phoenix');

echo '<br>';
echo '<br>';

$second_book -> printInfo();




?>

<?php
  class Book2
  {
      public $title ;
      public $author;

      public function __construct($title, $author)
      {
          $this -> title = $title;
          $this -> author = $author;
      }
      public function printInfo() {
        echo "Titel: $this->title \nFörfattare: $this->author";
      }
  }

  $third_book = new Book2('Hej','Hello');
  echo $third_book -> printInfo();
  echo "<br>";
  echo "<br>";
  echo "<br>";
?>

<?php
   class Car{
       public $model;
       public $color;
       public $price;
       public $sellDate;

       public function printInfo(){
           echo "Det här en $this->color $this->model som kostar $this->price kr datum $this->sellDate";
        }
        
        public function halfPrice(){
             $this -> price = ($this -> price)/2;
            echo "Det här en $this->color $this->model som kostar $this->price kr datum $this->sellDate";

       }
   }
   $car = new Car;
   $car -> model = "toyota";
   $car -> color = "green";
   $car -> price = "10000";
   $car -> sellDate = date('Y-m-d');


   echo "$car->model \n $car->color \n $car->price";

   echo "<br>";
   echo "<br>";
   echo "<br>";

   $car -> printInfo();
   $car -> halfPrice();



?>

<?php
   class SingleBookLibrary{
       public $book;
       public $isBorrowed;


       public function borrow(){
           if($this->isBorrowed){
               echo $this -> isBorrowed;
               echo "Book has already rentet out";
           }else{
               echo "You can rent this book";
               $this->isBorrowed = true;
           }
       }
   }


   $liblary = new SingleBookLibrary;
   $liblary -> isBorrowed = false;
   $liblary -> book = new Book('harry porter');
   $liblary -> borrow();
   $liblary -> borrow();
   $liblary -> borrow();
   $liblary -> borrow();

 



?>


    
</body>
</html>