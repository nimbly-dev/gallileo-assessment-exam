<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For-loop-sum</title>
    <?php
    // Functions 
    function fibonacciSequenceForLoop($maxNumbers){
        $x = 0; //first term of fibo
        $y = 1; //second term of fibo
        for($i= 0; $i <= $maxNumbers; $i++){
            //computes the next term
            $z = $x + $y;
            echo $z."&nbsp; ";
            //Switch the values
            $x= $y;
            $y = $z;
        }
    }
    ?>
    
<body>
    <img src="../images/iacademy.png">
    <h4>For-Loop Fibonnaci Sequence 10 numbers</h4>
    <hr />
    <p>Fibonnaci Sequence (10): <?php $maxNumbers = 9; echo fibonacciSequenceForLoop($maxNumbers); ?> </p>


</body>
</html> 