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
    <h4>Exam 3: Check if Fibo</h4>
    <hr /> 
    <form action="index.php" method="GET">
        Enter a number: 
        <input name="numbers" type="number"> 
        <button type="submit">Generate fibo</button>
    </form>
</body>
</html> 

<!-- CALL THE FUNCTION -->
<?php
    function checkFibo(){
        try{
            $max_numbers = $_GET['numbers']; //Get the max_numbers 

            if(!is_numeric($max_numbers)){
                throw new ValueError("This must be a number");
            }else if($max_numbers < 0){
                throw new ValueError("This must be not a negative");
            }

            $i = 1;
            while ($i <= $max_numbers){
                //FORMULAS: 
                $temp_1 = (5*pow($i,2) + 4);
                $temp_2 = (5*pow($i,2) - 4);
                //Check if current iteration is a perfect square
                if(
                    ceil(sqrt($temp_1)) == floor(sqrt($temp_1))
                    ||
                    ceil(sqrt($temp_2)) == floor(sqrt($temp_2))
                  ){
                    echo $i." is a Fibonacci Number </br>";
                }else{
                    echo $i." is not a Fibonacci Number </br>";
                }
                $i++;
            }
        }catch(ValueError $e){
            echo 'Message: '.$e->getMessage();
        }catch(Exception $e){
            echo 'Message: '.$e->getMessage();
        }

    }
    if(@$_GET['numbers'] != null){
        checkFibo();
    }
?>
<!--
    MANUAL TESTING
    1. INPUT: 
            - Fibo: 10
            - Output: 
                1 is a Fibonacci Number
                2 is a Fibonacci Number
                3 is a Fibonacci Number
                4 is not a Fibonacci Number
                5 is a Fibonacci Number
                6 is not a Fibonacci Number
                7 is not a Fibonacci Number
                8 is a Fibonacci Number
                9 is not a Fibonacci Number
                10 is not a Fibonacci Number

            - STATUS: PASS
    2. INPUT: 
            - Fibo: asd
            - Output: This must be a number
            - STATUS: PASS
    3. INPUT: 
            - Fibo: 20
            - Output: 
                1 is a Fibonacci Number
                2 is a Fibonacci Number
                3 is a Fibonacci Number
                4 is not a Fibonacci Number
                5 is a Fibonacci Number
                6 is not a Fibonacci Number
                7 is not a Fibonacci Number
                8 is a Fibonacci Number
                9 is not a Fibonacci Number
                10 is not a Fibonacci Number
                11 is not a Fibonacci Number
                12 is not a Fibonacci Number
                13 is a Fibonacci Number
                14 is not a Fibonacci Number
                15 is not a Fibonacci Number
                16 is not a Fibonacci Number
                17 is not a Fibonacci Number
                18 is not a Fibonacci Number
                19 is not a Fibonacci Number
                20 is not a Fibonacci Number

            - STATUS: PASS
    4. INPUT: 
            - Fibo: -20
            - Output: 
                Message: This must be not a negative

            - STATUS: PASS
 -->