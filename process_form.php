<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){

if(empty($_POST['name']&& $_POST['email']&& $_POST['phone'])){
    echo "Name is required";
}
else{
    echo $_POST['name'];
    $email=$_POST['email'];
$phone=$_POST['phone'];
   
echo $email;
echo $phone;
}




}
?>