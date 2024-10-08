<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    <!-- now we will talk about cookie   -->
    <?php
    // setcookie(name, value, expire, path, domain, secure, httponly);
    // name: specifies the name of the cookie
    // value: specifies the value of the cookie
    // expire: specifies the time the cookie expires. The value is a Unix timestamp
    // now i will put real value for ond day and see the result
    $favcolor = "red";
    $name = "favcolor";
    setcookie($name, $favcolor, time() - (86400 * 30), "/"); // 86400 = 1 day
    // now i will check if the cookie is set or not
    if(!isset($_COOKIE[$name])) {
        echo "Cookie named '" . $name . "' is not set!";
    } else {
        echo "Cookie '" . $name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$name];
    }

    ?>
</body>
</html>