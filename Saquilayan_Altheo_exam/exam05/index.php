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
    <h4>Exam 5: Reverse String</h4>
    <hr /> 
    <form action="index.php" method="GET">
        Enter word: 
        <input name="word" type="text"> 
        <button type="submit">Get Reverse String</button>
    </form>
</body>
</html> 

<!-- CALL THE FUNCTION -->
<?php
    function revStr(){

        // $tmp = " ";
        // for($i=0; $i< strlen($word); $i++){
        //     $tmp = ""
        // }
        try{
            $word = $_GET['word']; //GET
            echo strrev($word); //Library to reverse the string
        }catch(ValueError $e){
            echo 'Message: '.$e->getMessage();
        }catch(Exception $e){
            echo 'Message: '.$e->getMessage();
        }
    }
    if(@$_GET['word'] != null){
        revStr();
    }
?>

<!-- 
    MANUAL TESTING

    1. Empty Input = No Output: PASS
    2. Car = raC : PASS
    3. 123 = 321 : PASS
    4. )( = () : PASS

-->