<?php
//   $firstName = $_POST['firstname'];
//   $lastName = $_POST['lastname'];
//   $birthday = $_POST['birthday'];
//   $css = $_POST['css'];
//   $password = $_POST['password'];

//   $now = date('Ymd',strtotime(date('Tmd')));
//   $birth = date('Ymd', strtotime($birthday));
//   $age = (($now-$birth)/10000);


//   if($password === 'toshiko' && $age > 25){
//     echo "Hej" . $firstName ."" .$lastName .",du är född den" .$birthday .". Din favoriteegenskap är " .$css .". Nice!";

//   }
//   else{
//     echo "<iframe src=\"https://giphy.com/embed/3ohzdQ1IynzclJldUQ\" width=\"480\" height=\"310\" frameBorder=\"0\" class=\"giphy-embed\" allowFullScreen></iframe><p><a href=\"https://giphy.com/gifs/the-magic-word-3ohzdQ1IynzclJldUQ\">via GIPHY</a></p>";
//   }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
     body{
         background-color: <?php echo $_POST['color'] ?>;
     }
</style>
<body>

<h1>Heeeeeej</h1>
    
</body>
</html>