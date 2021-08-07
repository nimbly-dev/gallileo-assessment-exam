<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays - 3</title>
    <?php

    // Functions 
    function displayNotRep($arr){

        if(count(array_unique($arr))<count($arr))
        {
            $count=array_count_values($arr); //Count the dupes
            echo "Unique is ".array_search(min($count), $count);
        }
        else
        {
           echo "THere are no uniques";
        }
        
    }
    ?>
    
<body>
    <img src="../images/iacademy.png">
    <h4>Find dupes or sort to alphabethical</h4>
    <hr />
    <p>Output:
        <br/> 
        <?php 
        $arr =  array("red", "blue", "black", "red", "blue", "red", "gold");
        displayNotRep($arr); 
        
        ?> 
    </p>


</body>
</html> 

