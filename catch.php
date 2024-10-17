<?php 


try {
    // Code that may throw an exception
    $num1 = 10;
    $num2 = 0;
    if ($num2 == 0) {
        throw new Exception("Division by zero.");
    } else {
        $result = $num1 / $num2;
    }
} catch (Exception $e) {
    // Handling the exception
    echo "Error: " . $e->getMessage();
} finally {
    // This block always runs, even if there is no exception
    echo "Operation completed.";
}

?>