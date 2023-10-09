<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="asses/css/style.css" />
</head>

<body>
    <?php

    // making a variable named english which 6 as a value.
    
    //declarea a variable
    $english;


    //initialization of a variable
    $english = 6;

    /* assignment expression; an expression in which right side of expression's 
    value is assigned to left sided variable and we use assignment operator */
    $english = 9;

    // echo $english;
    
    // make a program that takes two integers and return their sum
    
    // echo 1 + 6;
    
    $a = 1;
    $b = 6;
    $sum = $a + $b;



    $a = 1;
    $b = 6;
    $difference = $b - $a;



    $a = 1;
    $b = 6;
    $multiplication = $b * $a;


    $a = 2;
    $b = 6;
    $division = $b / $a;



    echo "<p>SUM value is " . $sum . "</p>";


    echo "<p>Difference value is </p>" . $difference;


    echo "<p>Multiplication value is </p>" . $multiplication;


    echo "<p>Division value is </p>" . $division;





    $z = 1;
    $a = 'waqas';
    $b = 'ali';


    echo "<br><br><br>";
    echo $z . '-' . $a . ' ' . $b;


    // write  a progam that will take image source from a variable and give us an image tag
    
    $image_source = "https://images.ctfassets.net/9l3tjzgyn9gr/photo-112402/cf25fec1eea7ab0665f586b3481e436c/112402-rabbit-lucky-animals-510x600.jpg";

    echo '<div class="image-wrapper"><img src="' . $image_source . '" /><div>'

        ?>

</body>

</html>