<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Övning1</title>
</head>
<style>
    div {
        background-color: lightcoral;
        width: 200px;
        height: 200px;
        margin: auto;
        text-align: center;

    }
</style>

<body>
    <?php $programing = "Programming!!!";
    ?>
    <div><?php echo $programing ?></div>

    <?php $name = 'Toshiko';
    ?>
    <h1><?php echo $name ?></h1>

    <?php $firstName = 'Toshiko';
    $lastName = 'Kuno'; ?>
    <?php echo "<h1>Hello " . $firstName . " "  . $lastName . "</h1>" ?>
    <?php echo '<h1>Hej ' . $firstName . ' ' . $lastName . '</h1>' ?>

    <?php echo "I've seen things you people wouldn't believe.<br>
        Attack ships on fire off the shoulder of Orion. <br>
        I watched C-beams glitter in the dark near the Tannhauser gate. <br>
        All those moments will be lost in time... <br>like tears in rain... <br>Time to die.<br>" ?>
    
   <?php $age = 30;
       echo 'Jag är ' . $age*7 .'hundår';  ?> 


    <?php  $has_header = false;
           $has_header = true;
           if($has_header){
               echo '<h1>This is true</h1>'; 
           } 
           else{
               echo '<p>This is false</p>';

           }

           $age = 17;
           if($age < 18){
               echo 'Den där energidrycken är bara för vuxuna unge man!';
           }
           else{
               echo '500kr tack!';
           }

           ?>
    <?php

           $temp = 100;

           if($temp === 100){
               echo 'vattnet kokar!';
           }
           else if($temp === 50){
               echo 'Det är halvägs nu!';
           }
           else{
               echo 'Vattnet kokar inte';
           }
    ?>

    <?php
        $vatten = false;
        $temperatur = 60;

        if($vatten && $temperatur >= 30){
            echo 'Varsågod och bada!';
        }
        else if(!$vatten || $temperatur < 30){
            echo 'Det går inte att bada';
        }

        $weekend = false;
        $vacation = false;

        if($weekend || $vacation){
            echo 'Du kan ta sovmorgon';
        }
        else{
            echo 'Jobba jobba jobbaaaa';
        }

        $age1 = 18;

        if($age1 > 18 && $age1 < 65){
           echo 'Gå upp, gå till jobbet, jobba jobba äta lunch';
        }
        else if($age1 <= 18){
           echo 'EFTERFEST';
        }
        else if($age1 > 65){
           echo 'mmm, finska pinnar';
        }

        $ar = 13;
        $vikt = 40;
        if($ar > 12){
            if($vikt<=30){
                echo 'A-ponny';
            }
            else if($vikt<=50  && $vikt > 30){
                echo 'B-ponny';
            }
            else if($vikt <= 65 && $vikt > 50){
                echo 'C-ponny';
            }
            else if($vikt > 65){
                echo 'Det finns inga ponnys för denna viktklass';
            }
        }
        else{
            echo 'Du är för ung för att tävla!';
        }


?>

<?php 
      $result = 0;
    for($i = 0; $i <= 10; $i = $i + 2){
        // echo $result += $i;
        echo $i;
    }
    
    for($i = 10; $i > 0; $i--){
        echo $i;
    }

    for($i =0; $i <= 10; $i++){
        if($i % 2 == 0){
            echo $i;
        }
    }


    $number = 0;

    while($number < 10){
       if($number % 2 == 0){
           echo $number;
        }
        $number++;
}

$numberOfSheep = 4;
$monthNumber = 1;
$monthsToPrint = 12;

for($monthNumber; $monthNumber<= $monthsToPrint; $monthNumber++){
    $numberOfSheep *= 4;
    echo 'Det blir ' . $numberOfSheep . 'sheeps efter' .$monthNumber .'månader<br>';
}

$mjau = 4;
if($mjau > 0){
    $katt = '';
    for($i = 0; $i < $mjau; $i++){
        $katt = $katt .' mjau';
    }
    echo $katt;
}
else{
    echo ':(';
}




?>


    

</body>

</html>