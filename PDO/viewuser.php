<?php

class ViewUser extends User{
  
   public function showAllUsers(){
     $datas = $this->getAllUsers();
     foreach($datas as $data){
         echo "Animal: ".$data['animal']."<br>";
         echo "Color: ".$data['color']."<br>";
     }
   }
}


?>