<?php 

$cube = array(
    array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    ),
    array(
        array(10, 11, 12),
        array(13, 14, 15),
        array(16, 17, 18)
    ),
    array(
        array(19, 20, 21),
        array(22, 23, 24),
        array(25, 26, 27)
    )
);

for ($i = 0; $i < count($cube); $i++) {          // Loop through layers
    echo "Layer " . ($i + 1) . ":\n";
    
    for ($j = 0; $j < count($cube[$i]); $j++) {  // Loop through rows in the current layer
        for ($k = 0; $k < count($cube[$i][$j]); $k++) {  // Loop through elements in the current row
            echo $cube[$i][$j][$k] . " ";       // Display the element
        }
        echo "<br>";  // New line after each row
    }
    echo "<br>";  // Blank line between layers
}



?>
