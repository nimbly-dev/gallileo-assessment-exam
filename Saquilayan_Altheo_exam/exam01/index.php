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
    <h4>Exam 1: Check if Palindrome</h4>
    <hr /> 
    <form action="index.php" method="GET">
        Enter a word: 
        <input name="word" type="text"> 
        <button type="submit">Check if Palindrome</button>
    </form>
</body>
</html> 

<!-- CALL THE FUNCTION -->
<?php
    function checkIfPalindrome(){

        try{
            $split_words = str_split($_GET['word']); //Get the string and split it into an array

            if (count($split_words) == 1){
                echo $_GET['word']. " is a single letter";
            }
            //Is Palindrome if first and last letter is equal 
            else if($split_words[0]/*GETS THE FIRST VALUE*/ 
                ==  $split_words[key(array_slice($split_words, -1, 1, true))]/*CODE TO GET END OF ARRAY*/ ){
                    echo $_GET['word']." is a palindrome";
            }else{
                echo $_GET['word']." is not a palindrome";
            }
        }catch(ValueError $e){
            echo 'Message: '.$e->getMessage();
        }catch(Exception $e){
            echo 'Message: '.$e->getMessage();
        }

    }
    if(@$_GET['word'] != null){
        checkIfPalindrome();
    }
?>
<!-- 

    MANUAL TESTING: 

    1. INPUT: 
        - madam
        - output: madam is a palindrome
        - PASS

    2. INPUT: 
        - nurse run
        - output: nurse run is a palindrome
        - PASS

    3. INPUT: 
        - 123
        - output: 123 is not a palindrome
        - PASS

    4. INPUT: 
        - a
        - output: a is a single letter
        - PASS
-->
