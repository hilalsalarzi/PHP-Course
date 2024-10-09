<?php
// chomd ('example.txt', 0777);
// fileperms()



// $file=fopen('app.txt','w');
// echo fread($file,filesize('app.txt'));
// echo fgets($file);
// fwrite($file,'Hello World');
// fopen()
// fwrite()
// fread()
// fclose()
// fgets()
// fgetc()
 $quoate="To be or not to be";
$file=fopen('app.txt','a+');
// echo fread($file,filesize('app.txt'));
// echo fgets($file);
// echo fgetc($file);
fwrite($file,$quoate);
// function searchInFile($filePath, $word) {
//     $fileContent = file_get_contents($filePath);
//     if (strpos($fileContent, $word) !== false) {
//         return "The word '{$word}' was found in the file.";
//     } else {
//         return "The word '{$word}' was not found in the file.";
//     }
// }
$basenaem=basename('app.txt','.txt');
//  i want to know directory of this file 
// echo dirname(dirname(__FILE__));
// echo dirname("app.txt",2);
// echo pathinfo("app.txt", PATHINFO_EXTENSION);
// echo pathinfo("app.txt", PATHINFO_BASENAME);
// echo dirname(__FILE__);
// echo $basenaem;

$file1 = __DIR__ .'/app.txt';
$parentDirectory = dirname($file1);
echo $parentDirectory;

touch('app1.txt');
// unlink('app1.txt');
//  i want to delete file 
rmdir("new_folder");
// echo searchInFile('app.txt', 'nffffot');

// fclose($file);
?>