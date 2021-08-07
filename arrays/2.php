<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays - 3</title>
    <?php

    // Functions 
    function sortToAsc($arr){
        $new_arr = array();
        foreach($arr as $value){
            // echo " ".$value;
            if (!$value % 2 == 0){ //Value
                $temp = round($value, -1); //Round to nearest 10
                array_push($new_arr,$temp);
            }else{
                array_push($new_arr,$value);
            }
        }
        // print_r($new_arr);
        
        sort($new_arr);

        foreach($new_arr as $value){
            echo $value, " &nbsp;";
        }
    }
    ?>
    
<body>
    <img src="../images/iacademy.png">
    <h4>Sort asc</h4>
    <hr />
    <p>Output:
        <br/> 
        <?php 
        $arr =  array(9863, 7127, 2020, 80, 131, 55, 100);
        @sortToAsc($arr); 
        
        ?> 
    </p>


</body>
</html> 

