<?php

$class_fifth_english_marks = array( 10,85,96,45,87,98,65,65,32,12);
$length = count($class_fifth_english_marks);

for($i=0; $i < $length; $i= $i+1){
    echo 'Marks for student '.($i+1).' are = '.$class_fifth_english_marks[$i];
    echo '<br>';
}

for($i=0; $i<$length; $i = $i+1){

    echo $class_fifth_english_marks[$i];
    echo "<br>";
}




$class_fifth_marks = array(
    array(100,96,150),
    array(75,88,100),
    array(92,46,120)
);


$class_fifth_marks = array(
    array("one.jpg","News","International news today","Gejrov"),
    array("nature.jpg","Nature","Nature has its own methods","Gejrov"),
    array("rain.jpg","Health","Tall people tend to be dumb","Gejrov"),
    array(75,88,100),
    array(92,46,120),
    array(92,46,120)
);



for($i=0; $i<count($class_fifth_marks); $i += 1){
    echo '<div class="row">';
        echo '<div class="cell">'.$class_fifth_marks[$i][0].'</div>';
        echo '<div class="cell">'.$class_fifth_marks[$i][1].'</div>';
        echo '<div class="cell">'.$class_fifth_marks[$i][2].'</div>';
    echo '</div>';
}

echo "<table>";
for($i=0; $i<count($class_fifth_marks); $i += 1){
    echo '<tr class="row">';
        echo '<td class="cell">'.$class_fifth_marks[$i][0].'</td>';
        echo '<td class="cell">'.$class_fifth_marks[$i][1].'</td>';
        echo '<td class="cell">'.$class_fifth_marks[$i][2].'</td>';
    echo '</tr>';
}
echo "</table>";




// echo $class_fifth_marks[1][2];
// echo $class_fifth_marks[2][1];






?>
<style>
    .row{
        border:1px solid green;
        margin:2px;
        min-height: 40px;
        width:150px;
    }
    .cell{
        border:1px solid orange;
        color:black;
        
        line-height: 40px;
        width: 32%;
       
        display: inline-block;
        float : left;
    }

    .cell:nth-child(even){
        background:yellow;
    }

    .cell:nth-child(odd){
        background: red;
    }

    td.cell{
        width: fit-content;
    }
</style>