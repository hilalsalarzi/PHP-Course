<?php
try {
    // Code that might throw an exception
    $number = 5;
    if ($number <= 5) {
        throw new Exception("Number is too small!");
    }

    echo "This line will not be executed if an exception is thrown.";

} catch (Exception $e) {
    // This code will run if an exception is caught
    echo "Caught exception: " . $e->getMessage();
} finally {
    // This block will always execute, whether there was an exception or not
    echo " This will always run.";
}
?>
