<?php




/**
 *  i =0;                  $i < 2 => 0 < 2 = True;     Increment $i = $i +1 => 0 +1 => 1
 *  i = 1;                 $i < 2 => 1 < 2 = True;
 * 
 */

?>

<?php
echo "<table>";
for ($i = 1; $i < 21; $i = $i + 1) {
    echo "<tr><td>";
    echo "2 x " . $i . "= " . ($i * 2);
    echo "<br>";
    echo "</td></tr>";
}
echo "</table>";


echo "<ul>";
for ($i = 1; $i < 21; $i = $i + 1) {
    echo "<li>Student " . $i . "</li>";
}
echo "</ul>";


$student1Marks = 10;
$student2Marks = 20;
$student3Marks = 99;


$studentMarks = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 14, 55, 33, 99, 88, 77, 55);
echo "<ul>";
for ($i = 0; $i < count($studentMarks); $i = $i + 1) {
    echo "<li>Student No " . ($i + 1) . "'s Marks are  " . $studentMarks[$i] . "</li>";
}
echo "</ul>";


echo "waqas";
?>