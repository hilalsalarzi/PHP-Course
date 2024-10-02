<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
$age = 18;
if($age==18 || $age==60){
   echo "You are eligible to vote";
}
elseif($age==18){
    echo "You are just eligible to vote";
}
else{
    echo "You are not eligible to vote";

}
echo"<br>";
echo"<br>";
// switch case
$day = "3434";
switch($day){
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wednesday":
        echo "Today is Wednesday";
        break;
    case "Thursday":
        echo "Today is Thursday";
        break;
    case "Friday":
        echo "Today is Friday";
        break;
    case "Saturday":
        echo "Today is Saturday";
        break;
    case "Sunday":
        echo "Today is Sunday";
        break;
    default:
        echo "Invalid day";
}

echo"<br>";
echo"<br>";
echo"<br>";
echo "<h1>function</h1>";
function add($a,$b){
    $c = $a + $b;
    return $c;
     
  
}

echo add(2,6);
echo"<br>";
echo add(3,6);
echo"<br>";
 $imtiaz=9;
function welcome($name="Guest"){
    echo "Welcome $name";
    global $imtiaz;
    echo $imtiaz;
}

welcome("Haleem");

echo"<br>";
echo"<br>";
echo "<h1>Anonymous Functions</h1>";
$greet = function($name="Guest"){
    echo "Welcome $name";
};
$greet();
?>



</body>
</html>