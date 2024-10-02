<?php 

// array functions 
// array_merge
// array_push
// array_pop
// array_shift
// array_unshift
// array_slice
// array_splice
// array_map



echo "<h1>array_merge</h1>";
$array1 = array("red", "green");
$array2 = array("blue", "yellow");
$result = array_merge($array1, $array2);
print_r($array1);
echo "<br>";
print_r($result);
echo "<br>";

foreach($result as $keys=> $value){
    echo $keys.'='. $value;
    echo "<br>";
}
echo "<h1>array_slice</h1>";
$input = array("a", "b", "c", "d", "e");
$output = array_slice($input, 2);      // returns "c", "d", and "e"
 
print_r($output);

echo "<h1>array_splice</h1>";
$input = array("red", "green", "blue", "yellow");
array_splice($input, 2);
// $input now is array("red", "green")
print_r($input);

echo "<h1>array_map</h1>";
function cube($n)
{
    return($n * $n * $n);
}
$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);


echo "<h1>array_unshift</h1>";
$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
print_r($queue);


























// $matrix = array(
//     array(1, 2, 3,4),
//     array(4, 5, 6),
//     array(4, 5, 6)
  
// );


// // print_r($matrix);
// $count= count($matrix);
// echo $count;
// echo "<br>";
// for ($i = 0; $i < count($matrix); $i++) {         // Loop through rows
//     for ($j = 0; $j < count($matrix[$i]); $j++) {  // Loop through columns in each row
//         echo $matrix[$i][$j] . " ";               // Display each element
//     }
//     echo "<br>";  // New line after each row
// }




























?>