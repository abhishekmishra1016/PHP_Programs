<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment</title>
</head>
<body>

    <h1>My first PHP page</h1>
    
    <?php

    $txt = "Hello World!";
    $x = 5;
    $y = 10.5;

    echo $txt;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br><br>";

    $txt = "MIT SOE";
    echo "I love $txt";
    echo "<br>";
    echo "I love " .$txt;
    ?>

    <p>Hello, MIT ADT University!</p>

    <hr>

    <?php
        $n1 = 5;
        $n2 = 6;

        $sum = $n1 + $n2;

        echo "Summation is " .$sum;
    ?>

    <hr>

    <?php

        $x = 5; //Global Scope

        function myTest(){
            echo "Variable x inside function is: $x";
        }

        myTest();

        echo "Variable x outside function is: $x";

    ?>

    <hr>

    <?php

        function newTest(){
            $new = 5; //Local Scope
            echo "Variable x inside function is: $new";
            
        }

        newTest();
        echo "<br>";
        echo "Variable x outside function is: $new";

    ?>

    <hr>

    <?php

        $xx = 5;
        $yy = 10;

        function mymyTest(){
            global $xx, $yy;
            $yy = $xx + $yy; 
        }

        mymyTest();
        echo $yy;
    ?>

    <hr>

    <?php 

        function Add($a, $b){
            $sum = $a + $b;
            echo "Sum is $sum";
        }

        Add(10, 20);
    ?>
    
</body>
</html>