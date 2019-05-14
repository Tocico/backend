<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php $name='Toshiko';?>

    <h3>My name is <?php echo $name ?></h3>
    
    <?php
      $has_header = true;
      if($has_header){
          echo "<h1> It's a heading! </h1>";
        } else {
            echo "<p> It's a paragraph! </p>";
        }
        ?>

<?php
       for($i = 0; $i<10; $i++){
           echo $i;
        }
        
        ?>

<?php
        $message = array('Hejsan','hejdå','godmorgon');
        
        // var_dump($message);
        
        for($i = 0; $i < $message.count; $i ++){
            echo $message[$i];
            // echo $i[i];
        }
    ?>

    
</body>
</html>