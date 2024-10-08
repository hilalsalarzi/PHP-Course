<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
   <?php 

    session_start();
   
$ip = $_SERVER['REMOTE_ADDR'];
echo "Client IP: " . $ip;


    $_SESSION['name']=$ip;
    $_SESSION['email']="joh@gmail.com";
    $_SESSION['phone']="123456789";
    echo "Session variables are set.<br>";
    echo $_SESSION['name'];
    // now i want to unset session 
    session_unset();
    echo "Session variables are unset.<br>";
    echo $_SESSION['name'];
    // now i want to destroy session
    session_destroy();
    echo "Session variables are destroyed.<br>";
   


   ?> 
</body>
</html>