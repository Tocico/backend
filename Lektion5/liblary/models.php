<?php
   abstract class BaseLibraryModel
   {
       public $title;
       public $genre;
       public $isBorrowed = false;
   }

   class BookModel extends BaseLibraryModel
   {
       public $author;
       public $pageCount;

       public function __construct($title,$genre,$author,$pageCount,$isBorrowed){
           $this ->title = $title;
           $this ->genre = $genre;
           $this ->author = $author;
           $this ->pageCount = $pageCount;
           $this->isBorrowed = $isBorrowed;
       }
   }

   class CDModel extends BaseLibraryModel
   {
       public $artist;
       public $length;

       public function __construct($title,$artist,$genre,$length,$isBorrowed)
       {
        $this ->title = $title;
        $this ->artist = $artist;
        $this ->genre = $genre;
        $this ->length = $length;
        $this->isBorrowed = $isBorrowed;

       }
   }

   class MovieModel extends BaseLibraryModel
   {
       public $director;
       public $actors;

       public function __construct($title,$director,$genre,$actors,$isBorrowed)
       {
        $this ->title = $title;
        $this ->director = $director;
        $this ->genre = $genre;
        $this ->actors = $actors;
        $this->isBorrowed = $isBorrowed;

       }
   }

?>