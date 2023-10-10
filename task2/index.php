<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        * {
            margin:0px;
            padding:0px;
            clear:both;
        }
        h1.wrapper{
            padding: 5px;
    letter-spacing: 2.5px;
    background:red;
    width:95%;
    text-align:center;
    
    
    

        }
    
        .wrapper{
            width:30%;
            height:auto;
            margin-left:auto;
            margin-right:auto;
            text-align:center;
            padding:10px;
            font-family:sans-serif;
            background: #657676;
            color: white;


        }
        p.wrapper{
            padding: 5px;
    letter-spacing: 10px;
    font-size: 20px;
    text-align:center;
        }


        </style>
</head>
<body>
    <?php
    $num1=2;
    $str='x';
    $num2=1;
    
    echo '<div class="wrapper"> <h1 class="wrapper"> Table of 2 </h1><p class="wrapper">' .$num1 . $str . $num2 . '=' .$num1*$num2. '</p>';
    $num2=$num2+1;
    echo '<p class="wrapper">' .$num1 . $str . $num2 . '=' .$num1*$num2. '</p>';
    $num2=$num2+1;
    echo '<p class="wrapper">' .$num1 . $str . $num2 . '=' .$num1*$num2. '</p>';
    $num2=$num2+1;
    echo '<p class="wrapper">' .$num1 . $str . $num2 . '=' .$num1*$num2. '</p>';
    $num2=$num2+1;
    echo '<p class="wrapper">' .$num1 . $str . $num2 . '=' .$num1*$num2. '</p>';
    $num2=$num2+1;
    echo '<p class="wrapper">' .$num1 . $str . $num2 . '=' .$num1*$num2. '</p>';
    $num2=$num2+1;
    echo '<p class="wrapper">' .$num1 . $str . $num2 . '=' .$num1*$num2. '</p>';
    $num2=$num2+1;
    echo '<p class="wrapper">' .$num1 . $str . $num2 . '=' .$num1*$num2. '</p>';
    $num2=$num2+1;
    echo '<p class="wrapper">' .$num1 . $str . $num2 . '=' .$num1*$num2. '</p>';
    $num2=$num2+1;
    echo '<p class="wrapper">' .$num1 . $str . $num2 . '=' .$num1*$num2. '</p>';
        
    
    '<div>';
     
    

    

    
    
    
    ?>
</body>
</html>