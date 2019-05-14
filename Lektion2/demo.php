<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    // var_dump(!(40 == '40 years'));

    // $name = 'Toshiko';
    // echo $greeting = 'Welcome ' . $name;
    // echo $greeting = "Welcome,   $name";

    // $message = array('Hejsan', 'hejdå', 'godmorgon');
    // // $arrayLength = $message.count;    

    // for ($i = 0; $i < count($message); $i++) {
    //     echo "$message[$i] <br>";
    // }

    // $info = array("name" => "Toshiko", "old" => 30);
    // echo "My name is {$info['name']} and I am {$info['old']} years old";

    // echo "<br>";

    // $firstName = "5Casper";  //new name law since this summer, probably valid name
    // $lastName = "Gormy";
    // $age = "42";
    // $z_index = 999;          // I'm in front of you
    // $is_human = true;        // 🤖?
    // $is_a_chair = false;     //don't label me!

    // echo var_dump($age * $z_index);
    // echo var_dump($is_a_chair / $z_index);  // int (0)  false = 0
    // echo var_dump($is_human / $z_index);  // float(0.001001001001001) true = 1
    // echo var_dump($is_human * $z_index);  // int(999)
    // echo var_dump($lastName + $age);  // int(42) strängen kommer ignoreras
    // echo var_dump($firstName + $z_index);  // int(1004) 5("5Casper)*999 om strängen har en siffra INNAN själva strängen börjar så kommer den siffran att användas och göra en beräkning
    // echo var_dump($firstName * $is_human); //int(5)


    // echo $message = "These are not the potatoes you're looking for";
    // echo $jävla_skit = "These are not the potatoes you're looking for";
    // echo $Message1 = 'These are not the potatoes you\'re looking for<br>';

    // $tal = 10;
    // $result =  $tal % 2;
    // echo "värde $tal resten av talet % 2 är $result";


    // echo '<br>';

    // $arry = [1,2,3];
    // echo var_dump($arry);

    // $sum = '';
    // for($i = 0; $i < count($arry); $i++){
    //     echo $sum += $arry[$i];
    // }

    // $random = array("a", "b");
    // array_splice($random, 1, 1);
    // var_dump($random);



    // echo "<br>";

    // $input = array("red", "green", "blue", "yellow");
    // array_splice($input, -1, 2, array("black", "maroon"));
    // var_dump($input);

    $a = array("first", "second");
    count($a); // 2
    echo array_push($a, "new"); // "first", "second", "new"
    var_dump($a);
    echo "<br>";
    echo sort($a); // "first", "new", "second"
    var_dump($a);
    echo "<br>";
    echo rsort($a); // "second", "new", "first"
    var_dump($a);
    echo "<br>";
    echo array_splice($a, 0, 1); // "second", "first"
    var_dump($a);
    echo "<br>";

    $animals = array("1", "2", "3");
    foreach ($animals as $animal) {
        $result += $animal;
    }
    echo $result;
    echo "<br>";

    $age = array(
        "Peter" => "42",
        "Bjorn" => "44",
        "John" => "44"
    );

    foreach ($age as $k => $v) {
        echo "Key=" . $k . ", Value=" . $v; // Ex. Key=Peter, Value=42
    }
    echo "<br>";
    echo "<br>";

    $your_array = array(23, 45, 54, 12, 77);
    // echo $your_array[0], $your_array[4];
    $your_array[0] = 1;
    var_dump($your_array);

    $best_array = array(1, 2, 3, 4, 5);
    $sum = $best_array[0];
    for ($i = 0; $i < count($best_array); $i++) {
        //  echo $best_array[$i];
        //  echo "<br>";
        $sum *= $best_array[$i];
    }
    echo $sum;

    echo "<br>";
    $ok_array = array("fine", "FINE", "good", "what is this stuff?", "sweet", "i don't even live here");
    for ($i = 0; $i < count($ok_array); $i++) {
        if (strlen($ok_array[$i]) <= 5) {
            echo $ok_array[$i];
        }
    }
    echo "<br>";

    $worst_array_yet = array("string", true, 42, "another string", 54, true, 1);
    $sum = 0;
    for ($i = 0; $i < count($worst_array_yet); $i++) {
        if (is_string($worst_array_yet[$i])) {
            echo $worst_array_yet[$i];
            echo "<br>";
        } else {
            $sum += $worst_array_yet[$i];
        }
    }
    echo $sum;

    echo "<br>";

    $a = 1;
    $b = 2;

    function Sum()
    {
        // global $a, $b;

        $b = $a + $b;
    }

    Sum();
    echo $b;
    echo "<br>";

    function multiply($a, $b)
    {
        return $a * $b;
    }
    $multiply_answer = multiply(5, 5);
    echo $multiply_answer;
    echo "<br>";

    function calculate($a, $b, $c)
    {
        return ($a * $b) / $c;
    }
    echo calculate(5, 10, 2);

    echo "<br>";

    function highest_number($a, $b)
    {
        if (is_nan($a) && is_nan($b)) {
            if ($a > $b) {
                return $a;
            } else if ($b > $a) {
                return $b;
            } else if ($a === $b) {
                return 'Samma värde';
            }
        } else {
            return false;
        }
    }

    echo highest_number(6, '7');

    echo "<br>";

    function string($string)
    {
        $check = strlen($string);
        return "Strängen du matade in är $check tecken lång";
    }
    echo string('hej');
    echo "<br>";

    function convert_dtring($a, $b)
    {
        if ($b === 1) {
            return strtoupper($a);
        } else {
            return strtolower($a);
        }
    }
    echo convert_dtring('Goodbey World', 4);

    echo "<br>";


    function lastChar($string)
    {
        return substr($string, -1);
    }
    echo lastChar('toshiko');
    echo "<br>";

    function make_paragraph($string)
    {
        echo "<p> $string </p>";
    }

    function make_heading($text, $num)
    {
        echo "<h$num> $text </h$num>";
    }
    make_heading("heeej", 1);

    function make_tag($text, $tag, $style, $href)
    {
        if ($style === '' && $href === '') {
            echo "<$tag> $text </$tag>";
        } else if ($style === '' && $href !== '') {
            echo "<$tag href=\"$href\">$text</$tag>";
        } else if ($style !== '' && $href === '') {
            echo "<$tag style=\"$style\">$text</$tag>";
        } else {
            echo "<$tag href=\"$href\" style=\"$style\">$text</$tag>";
        }
    }

    echo "<br>";



    function make_list($a)
    {
        $list = "<ul>";
        foreach ($a as $item) {
            $li = make_tag($item, "li", randomColor(), "");
            $list = $list . $li;
        }
        $list = $list . "</ul>";
        return $list;
    }
    echo make_list([1, 2, 5, 6, 7, 8, 9]);

    echo "<br>";

    function randomColor()
    {
        $r = mt_rand(0, 256);
        $g = mt_rand(0, 256);
        $b = mt_rand(0, 256);
        return "color:rgb($r,$g,$b);";
    }

    function float($a)
    {
        return ceil($a);
    }

    echo float(2.3);

    echo "<br>";

    function summman($a)
    {
        $result = '';
        foreach ($a as $value) {
            $result += $value;
        }
        $result = $result / count($a);
        return $result;
    }
    echo summman([1, 4, 6, 8]);

    echo "<br>";

    function veckodag($a)
    {
        $weekday = strtolower($a);
        switch ($weekday) {
            case "monday":
                return 1;
            case "tuesday":
                return 2;
            case "wednesday":
                return 3;
            case "thursday":
                return 4;
            case "friday":
                return 5;
            case "saturday":
                return 6;
            case "sunday":
                return 7;
            default:
                return 'Error';
        }
    }
?>

<?php
   $currentDate = date('Ymd');
   $now = date('Ymd',strtotime(date('Ymd')));
   echo $now;
   echo $currentDate;
   $birthday = '1988-11-07';
   
   $c = date('Ymd', strtotime($currentDate));
   $b = date('Ymd', strtotime($birthday));
   $age = (($c - $b) / 10000);

   echo $c;
   

?>


</body>

</html>