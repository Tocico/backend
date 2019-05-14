<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form method="POST">
       <label for="firstname">First name</label>
       <input type="text" name="firstname" id="firstname">
       <label for="lasttname">Last name</label>
       <input type="text" name="lastname" id="lastname">

       <label for="radiobtn">Color</label>
       <input type="radio" name="radio" id="radiobtn" value="color">
       <label for="radiobtn">Color2</label>
       <input type="radio" name="radio" id="radiobtn" value="color2">

       <label for="checkbox">Check</label>
       <input type="checkbox" name="checkbox" id="checkbox" value="check">


       <input type="submit" value="submit">

   </form>

   <pre>

       <?php
     var_dump($_POST['firstname']);
     var_dump($_POST['lastname']);
     
      if(isset($_POST["body"])){
        echo $_POST["body"];
    }else{
        echo "Det finns ingen";
    }
     ?>

</pre>

   
    
</body>
</html>