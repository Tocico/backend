<?php

class User extends Dbh
{
    public function getAllUsers()
    {
      // if(isset($_GET['remove'])) { // Check if 
      //    $statement = $this->connect()->prepare("DELETE FROM Customers WHERE ID = ?"); // Prepare any SQL Query, and use outside parameters
      //    $statement->execute([$_GET['remove']]); // Run the query with an argument
      //  }

        $statement = $this->connect()->prepare("SELECT * FROM users"); // Any SQL Query
      $statement->execute(); // Run the query
      $returned_data = $statement->fetchAll(PDO::FETCH_ASSOC);

        //  $stmt = $this->connect()->query("SELECT * FROM Customers");
      //  while($row = $stmt->fetch()){
      //     echo $row['Name'];
      //  }
      // foreach($returned_data as $customer) {
      //    echo $customer['City'];
      // }
      foreach($returned_data as $customer) { // Loop through all items in array

   
         ?>
         <ul>
           <li>
             <b>Name:</b> <?= $customer['username'] ?>
             <!-- <br />
             <b>Address:</b> <?= $customer['Adress'] ?> <?= $customer['PostalCode'] ?>  <?= $customer['City'] ?> 
             <br /> -->
             <!-- <b>Country:</b> <?= $customer['Country'] ?> -->
             <br />
             <b>Investments:</b> <?= $customer['userID'] ?>
             <a href="?remove=<?= $customer['ID'] ?>">DELETE</a>
           </li>
         </ul>
         <?php
      }
       
      }
   }
         ?>
 