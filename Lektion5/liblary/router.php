<?php
require('views.php');
require('models.php');

   switch($page){
       case 'home':
        HomeView::render();
       break;

       case 'book':
       $heads = ['Title','Author','Genre','Page Count','Borrowed'];
       $data = [
           new BookModel('Harryporter','JK','Adventure',100,false),
           new BookModel('Harryporter2','JK','Adventure',300,true),
           new BookModel('Harryporter3','JK','Adventure',200,false),
       ];
        BookView::render($data,$heads);
       break;

       case 'cd';
       $heads = ['Title','Artist','Genre','Length','Borrowed'];
       $data = [
           new CDModel('Edsheeran','sdfsdff','pop',60,true),
           new CDModel('Edsheeran2','sddff','pop',40,false),
           new CDModel('Edsheeran3','sdfff','pop',70,false),
           
       ];
        CDView::render($data,$heads);
       break;

       case 'movie';
       $heads = ['Title','Director','Genre','Actors','Borrowed'];
       $data = [
           new MovieModel('Avengers','sd','adventure',['sdsds','asds','asdsd'],true)
          
           
       ];
        MovieView::render($data,$heads);
       break;

       

       default:
         PageNotFoundView::render();
       break;
   }

?>