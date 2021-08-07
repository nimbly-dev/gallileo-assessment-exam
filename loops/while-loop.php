<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For-loop-sum</title>
    <?php
    // Functions 
    function sumAllEvenWhile($maxNumbers){
        $total = 0;
        $i = 0;
        while ($i <= $maxNumbers){
            if($i % 2 == 0){ // Check if even
                $total += $i;
            }
            $i++;
        }
        return $total; //Returns the total even numbers
    }
    ?>
</head>
<body>
    <img src="../images/iacademy.png">
    <h4>While-Loop sum of all even numbers from 0-10</h4>
    <hr />
    <p>Even Numbers (0-10): <?php $maxNumbers = 10; echo sumAllEvenWhile($maxNumbers); ?> </p>


</body>
</html> 

