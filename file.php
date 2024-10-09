<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file</title>
</head>
<body>
<!-- Module 8: File Handling
Reading from Files
Writing to Files
Uploading Files
File Permissions -->
<!-- filetype(); -->
 <!-- filesize(); // The filesize() function returns the size of a file in bytes. -->
<!-- file_exists() -->
 <!-- mkdir() -->
 <!-- rmdir() -->
  <!-- realpath() -->
  
<?php
//  pathinfo($path, PATHINFO_EXTENSION);
// basename('example.txt');
// dirname($path,".txt")
// Reading from Files
// The file() function reads the entire file into an array.
// Each element of the array corresponds to a line in the file.
// The file() function is useful when you want to read a file line by line.
// The following example reads the entire file into an array and then prints each line.
$lines = file('example.txt');
foreach ($lines as $line) {
    echo $line . "<br>";
}
touch('example.txt');
?>
</body>
</html>