<?php

    $students_marks = array(
        //array('english','urdu','maths','bio','chemistry'),
        'Ali' =>array(
                    'english' => 88,
                    'maths' => 22,
                    'urdu' => 99
                ),
        'Ahmad' => array(
            'english' => 88,
            'maths' => 22,
            'urdu' => 99
        ),
        'Rimsha' => array(
            'english' => 89,
            'maths' => 789,
            'urdu' => 56
        ),
        'Asghar' =>array(
            'english' => 88,
            'maths' => 22,
            'urdu' => 99
        ),
        'Faiz' => array(
            'english' => 88,
            'maths' => 22,
            'urdu' => 99
        ),
        'Atika' => array(
            'english' => 89,
            'maths' => 789,
            'urdu' => 56
        )
        ,
        'Rehman' =>array(
            'english' => 88,
            'maths' => 22,
            'urdu' => 99
        ),
        'Saira' => array(
        'english' => 88,
        'maths' => 22,
        'urdu' => 99
        ),
        'Hamza' => array(
        'english' => 89,
        'maths' => 789,
        'urdu' => 56
        )
    );

    $students_marks['saleem'] = array('english' => 22,'maths' => 99, 'urdu'=> 88);
    $students_marks['nayeem'] = array('english' => 22,'maths' => 99, 'urdu'=> 88);
    $students_marks['Atika']['english'] = 85;


    $section = array(

        "div1" => array(
            "image" => "lion.jpg",
            "title" => "New Animal in town",
            "author" => "Steve Crook",
            "price" => "$99.00"
        ),
        "div2" => array(
            "image" => "Intro to Computer Science.jpg",
            "title" => "IT making lives better",
            "author" => "Grojev Crook",
            "price" => "$19.00"
        ),
        "div3" => array(
            "image" => "Medicine.jpg",
            "title" => "New ways of 3d surgery",
            "author" => "Matt paul",
            "price" => "$59.00"
        )
    );



    // echo "<pre>";
    // print_r($students_marks);

    
    foreach($students_marks as $key => $value){
        echo '<div style= "border:1px solid black; padding: 5px;" >';
        echo "Marks for <b>".$key."</b>";
        echo "<br>";
        echo "<br>";
        foreach($value as $subjectName => $marks){
            echo "<div>Marks for ".$subjectName.' are '.$marks."</div>";
        }
        echo "<br>";
        echo "<br>";
        echo "</div>";
        echo "<br>";

        
    }

    $stack = array("orange", "banana");
    array_push($stack, "apple", "raspberry");
    print_r($stack);


    //built-in function
    $stack_length = count($stack);

    echo $stack_length;

    echo "<br>";

    /*
        User Defined Function
    */

    /*
        function call
    */
    $check = array(10,30,21,22);
    count1($check);

    /*
        Definition of the function
    */
    function count1($arr){
        foreach($arr as $value){
            print_r($value+5);
            echo "<br>";
        }
    }



    $newarr = array(0,5,10,15,20);
    count1($newarr);


    

?>