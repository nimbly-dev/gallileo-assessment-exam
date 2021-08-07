<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="../../images/iacademy.png">
    <h4>Exam 2: Create a PHP file</h4>
    <hr /> 
    <p>See project directory :)</p>
</body>
</html> 
<!--FUNCTIONALITIES -->
<?php
    $createFile = fopen("hello_there.php","w"); //create the file
    $txt = //Write the content
    "
<?php

// This is a comment
echo 'This is a test page!';
echo 'Exam number two!';
// This is the end of a comment

?>
    ";
    fwrite($createFile, $txt);
    fclose($createFile);
    
?>
