<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    today we will study about loops in php 
    <br>
    <h1>Loops in PHP</h1>   
    <br>
    <h1>for loop</h1>
    <!-- for (initialization; condition; increment/decrement) {
    // Code to execute
} -->
<h1>count function</h1>
    <?php
    $a=array('apple','orange','banana','grapes');
    
    $d=count($a);
    ?>
<h1>for loop increment</h1>
    <?php 
    for ($a=$d; $a <= 10; $a++) { 
        echo "The value of a is: ";
        echo $a;

        echo "<br>";
    }
    
    ?>
    <h1>for loop decrement</h1>
    <?php
    for ($a=$d; $a >= 0; $a--) { 
        echo "The value of a is: ";
        echo $a;

        echo "<br>";
    }
    ?>
   
    <h2>1. While Loop</h2>  
    <?php
        $a = 10;
        while( 0 < $a){
            echo "The value of a is: ";
            echo $a;
            echo "<br>";
            $a--;
        }
        ?>
    <h2>2. Do-While Loop</h2>
    <?php
        $a = 0;
        do{
            echo "The value of a is: ";
            echo $a;
            echo "<br>";
            $a--;
        }while( 0 < $a);?>


<?php
// Define an array
$array = array(5, 10, 15, 20, 25);

// Initialize the index variable
$index = 0;

// Use a do...while loop to iterate through the array
do {
    // Access and print the current value from the array
    echo "The value at index $index is: ";
    echo $array[$index];
    echo "<br>";

    // Increment the index
    $index++;
} while ($index < count($array)); // Loop as long as $index is less than the array length
?>
<!-- foreach loop -->

<?php
// Define an array
// $colors = array("Red", "Green", "Blue", "Yellow");
// associative array
$colors = array("Red"=>"1", "Green"=>"2", "Blue"=>"3", "Yellow"=>"4");
foreach ($colors as $keys=> $value) {
    echo "$keys <br>";
    echo "$value <br>";
}?>
</body>
</html>