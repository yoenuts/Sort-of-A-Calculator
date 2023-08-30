<?php
declare(strict_types = 1);
include_once 'autoloader.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
    <form action="calc.inc.php" method = "post">
        <h4>My Calculator!</h4>
        <input type = "number" name = "num1" placeholder = "First Number">
        <select name = "oper">
            <option value = "Add">Addition</option>
            <option value = "Sub">Subtraction</option>
            <option value = "Mul">Multiplication</option>
            <option value = "Div">Division</option>
        </select>
        <input type="number" name = "num2" placeholder="Second Number">
        <button type="submit" name = "submit">Calculator</button>
    </form>

    </body>
</html>