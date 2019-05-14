<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ovning2</title>
</head>

<body>
    <!-- <?php

    class Book
    {
        private $title;
        private $author;

        public function __construct($title, $author)
        {
            $this->title = $title;
            $this->author = $author;
        }
        public function printInfo()
        {
            echo  "Titel: $this->title \nFörfattare: $this->author";
        }
        public function getTitle()
        {
            return $this->title;
        }

        public function setTitle($x)
        {
            $this->title = $x;
        }
        public function getAuthor()
        {
            return $this->author;
        }

        public function setAuthor($x)
        {
            $this->author = $x;
        }
    }

    $first_book = new Book("Främlingen", "Albert Camus");
    $first_book->printInfo();

    echo '<br>';

    $second_book = new Book("Harry Potter and the Philosopher\'s Stone", "J K Rowling");
    $second_book->printInfo();

    echo '<br>';

    echo $second_book->setTitle('Harry Potter and the Order of the Phoenix');

    echo '<br>';
    echo '<br>';

    $second_book->printInfo();


    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';


    ?> -->

    <!-- <?php
            class Book2
            {
                public $title;
                public $author;

                public function __construct($title, $author)
                {
                    $this->title = $title;
                    $this->author = $author;
                }
                public function printInfo()
                {
                    echo "Titel: $this->title \nFörfattare: $this->author";
                }
            }

            $third_book = new Book2('Hej', 'Hello');
            echo $third_book->printInfo();
            echo "<br>";
            echo "<br>";
            echo "<br>";
            ?> -->

    <?php
    class Car
    {
        private $model;
        private $color;
        private $price;
        private $sellDate;
        public static $NumberOfCars = 0;

        public function __construct($model, $color, $price)
        {
            $this->model = $model;
            $this->color = $color;
            $this->price = $price;
            $this->sellDate = date('Y-m-d');
            self::$NumberOfCars++;

        }

        public function printInfo()
        {
            echo "Det här en $this->color $this->model som kostar $this->price kr datum $this->sellDate";
        }

        public function halfPrice()
        {
            $this->price = ($this->price) / 2;
            echo "Det här en $this->color $this->model som kostar $this->price kr datum $this->sellDate";
        }

        public function changeCar($model, $color, $price)
        {
            $this->model = $model;
            $this->color = $color;
            $this->price = $price;
        }
    }
    $car = new Car("toyota", "green", "1000");
    $car = new Car("matsuda", "green", "1000");
    $car = new Car("toyota", "green", "1000");
    $car = new Car("toyota", "green", "1000");
    $car = new Car("toyota", "green", "1000");
    $car = new Car("toyota", "green", "1000");

    echo Car::$NumberOfCars;


    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    $car->printInfo();
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $car->halfPrice();
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $car -> changeCar("Honda","red","40000");
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    $car->printInfo();



    ?>

    <?php
    class SingleBookLibrary
    {
        public $book;
        public $isBorrowed;


        public function borrow()
        {
            if ($this->isBorrowed) {
                echo "Book has already rentet out";
            } else {
                echo "You can rent this book";
                $this->isBorrowed = true;
            }
        }
    }


    $liblary = new SingleBookLibrary();
    $liblary->isBorrowed = false;
    $liblary->book = $liblary = new Book('Harrypotter','JK');
    $liblary->borrow();
    $liblary->borrow();
    $liblary->borrow();
    $liblary->borrow();





    ?>



</body>

</html>