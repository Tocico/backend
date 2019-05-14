<?php
  class BaseView{
       public static function render($body,$header){
            $out = '';
            $out .= '<table class="table table-striped table-hover">';
            $out .= '<thead>';
            $out .= '<tr>';
            $out .= $header;
            $out .= '</tr>';
            $out .= '</thead>';
            $out .= '<tbody>';
            $out .= $body;
            $out .= '</tbody>';
            $out .= '</tbody>';
            return $out;
       }
  }

  class BookView extends BaseView
  {
      public static function render($books,$heads){
        $header ='';
        foreach($heads as $head){
          $header .='<th>' .$head .'</th>';
        }
       
        $body ='';
        foreach($books as $book){
            $body .='<tr>';
            $body .='<td>'.$book->title.'</td>';
            $body .='<td>'.$book->author.'</td>';
            $body .='<td>'.$book->genre.'</td>';
            $body .='<td>'.$book->pageCount.'</td>';
            if($book->isBorrowed){
              $body .= '<td><i class="icon icon-check"></i></td>';
            }
            else{
              $body .= '<td></td>';
            }
            $body .='</tr>';
            
        }
        echo parent::render($body,$header);
      }
  }

  class CDView extends BaseView
  {
    public static function render($cd,$heads)
    {
        $header ='';
        foreach($heads as $head){
          $header .='<th>' .$head .'</th>';
        }
       
        $body ='';
        foreach($cd as $cd){
            $body .='<tr>';
            $body .='<td>'.$cd->title.'</td>';
            $body .='<td>'.$cd->artist.'</td>';
            $body .='<td>'.$cd->genre.'</td>';
            $body .='<td>'.$cd->length.'</td>';
            if($cd->isBorrowed){
              $body .= '<td><i class="icon icon-check"></i></td>';
            }
            else{
              $body .= '<td></td>';
            }
            $body .='</tr>';
        }
        echo parent::render($body,$header);
    }
  }

  class MovieView extends BaseView
  {
    public static function render($movies,$heads)
    {
        $header ='';
        foreach($heads as $head){
          $header .='<th>' .$head .'</th>';
        }
       
        $body ='';
        foreach($movies as $movie){
            $body .='<tr>';
            $body .='<td>'.$movie->title.'</td>';
            $body .='<td>'.$movie->director.'</td>';
            $body .='<td>'.$movie->genre.'</td>';
            $body .='<td><ul>';
            foreach($movie->actors as $actor){
              $body .='<li>'.$actor.'</li>';
            }
            $body .='</ul></td>';
            if($movie->isBorrowed){
              $body .= '<td><i class="icon icon-check"></i></td>';
            }
            else{
              $body .= '<td></td>';
            }
            $body .='</tr>';
        }
        echo parent::render($body,$header);
    }
  }

  class HomeView
  {
      public static function render(){
          echo '<p>Welcome to the library! Please look around for something to book</p>';
      }

  }

  class PageNotFoundView 
  {
    public static function render(){
      echo '<p>Page not found</p>';
    }
  }
?>