<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For-loop-sum</title>
    <?php
    // Functions 
    function sumAllEvenDoWhile($maxNumbers){
        $total = 0;
        $i = 0;
        do {
            if($i % 2 == 0){ //Check if even
                $total += $i; 
            }
            $i++;
        }while($i <= $maxNumbers);
        return $total; //Returns the total even numbers
    }
    ?>
    
<body>
    <img src="../images/iacademy.png">
    <h4>Do-While-Loop sum of all even numbers from 0-10</h4>
    <hr />
    <p>Even Numbers (0-10): <?php $maxNumbers = 10; echo sumAllEvenDoWhile($maxNumbers); ?> </p>


</body>
</html> 

