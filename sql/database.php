<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ANSWERS -->
    <?php
        $answer_a = "SELECT * FROM employees WHERE salary_id = (SELECT MAX(salary.id) salary FROM salary) ";
        $answer_b = "SELECT * FROM employees WHERE YEAR(date_hired) IN (2017,2018)";
        $answer_c = "SELECT * FROM employees WHERE department_id= 3 AND YEAR(date_hired) >= 2018"
     ?>
</head>
<body>
    <img src="../images/iacademy.png">
    <h4>Database Questions</h4>
    <hr />
    <p>A. Get all data of highest paid employee (without using LIMIT). </p> <code><?php echo $answer_a?> </code>
    <br/>
    <p>B. Get all employees that are hired from 2017-2018. </p> <code><?php echo $answer_b ?></code> 
    <br/>
    <p>C. Get all employees that belongs to IT department AND hired 2018 onwards. </p> <code><?php echo $answer_c?></code> 
</body>
</html> 