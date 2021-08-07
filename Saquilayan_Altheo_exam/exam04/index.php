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
    <h4>Exam 4: Time Difference</h4>
    <hr /> 
    <form action="index.php" method="GET">
        <!--Input is of type date -->
        Enter date1: 
        <input name="date1" type="date"> 
        Enter date2: 
        <input name="date2" type="date"> 
        <button type="submit">Get Time Diff</button>
    </form>
</body>
</html> 

<!-- CALL THE FUNCTION -->
<?php
    function timeDiff(){

        try{
            $date1 = new DateTime($_GET['date1']); //Using DateTime
            $date2 = new Datetime($_GET['date2']);
    
            if ($date1 <= $date2){
                throw new ValueError("Date 1 must be greater than Date 2");
            }

            $diff_date = date_diff($date1,$date2);//We can use data_diff
            
            //And call the years, month, and day
            //diff->y = year
            //diff->m = month
            //diff->d = day
            echo "Output:  ".$diff_date->y." year/s, ". $diff_date->m ." month, ". $diff_date->d ." days";
        }catch(ValueError $e){
            echo 'Message: '.$e->getMessage();
        }catch(Exception $e){
            echo 'Message: '.$e->getMessage();
        }

    }
    if(@$_GET['date1'] != null && @$_GET['date2'] != null){
        timeDiff();
    }
?>
<!--
    MANUAL TESTING
    1. INPUT: 
            - Date 1: 2019-05-31
            - Date 2: 2018-04-05
            - Output: 1 year, 1 month, 26 days
            - STATUS: PASS
    2. INPUT: 
            - Date 1: 2021-08-17
            - Date 2: 2026-10-07
            - Output: Date 1 must be greater than Date 2
            - STATUS: PASS
    3. INPUT: 
            - Date 1: 2016-01-12
            - Date 2: 2014-01-25
            - Output: 1 year/s, 11 month, 18 days
            - STATUS: PASS
    4. INPUT: 
            - Date 1: 21321-12
            - Date 2: 21321
            - Output: DateTime::__construct(): Failed to parse time string (21321-12) at position 4 (1): Unexpected character
            - STATUS: PASS

 -->