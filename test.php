<?php

// Define an array with 20 static records
$people = array(
   
    array("id" => 118, "name" => "Raza", "address" => "Nowshera"),
    array("id" => 119, "name" => "Imran", "address" => "Charsadda"),
    array("id" => 120, "name" => "Ammar", "address" => "Swat")
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>
<?php session_start(); 
// i want to set name in session and then display it on the page
$name=$_SESSION['name']="kamal";
?>

<h2>People Information <?php  echo $name; ?></h2>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($people as $person): ?>
        <tr>
            <td><?php echo $person['id']; ?></td>
            <td><?php echo $person['name']; ?></td>
            <td><?php echo $person['address']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
