<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays - 1</title>
    <?php

    // Functions 
    function findMostOccur($arr){
        $count=array_count_values($arr); //Count the dupes

        if(count(array_unique($count))<count($count))
        {   
            echo "HAS DUPLICATE <br/>";
            sort($arr);
            $alength = count($arr);
            for($x = 0; $x < $alength; $x++) {
                echo $arr[$x];
                echo "<br>";
            }
        }
        else
        {
            echo "HAS NO DUPLICATE <br/>";
            echo "HIGHEST IS ".array_search(max($count), $count). " with ".max($count);
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
        $arr =  array("Marvin", "Marco", "Marvin", "Marco", "Marco", "Marvin", "Christian");
        findMostOccur($arr); 
        
        ?> 
    </p>


</body>
</html> 

