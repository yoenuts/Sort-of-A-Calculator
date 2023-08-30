<?php 
declare(strict_types = 1);
include_once 'autoloader.inc.php';

$operator = $_POST["oper"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$calc = new Calc\Calc($operator, (int)$num1,(int)$num2);

try{
    $calc -> Calculator();
} catch(TypeError $e){
    echo "Error!" . $e ->getMessage(); 
}

?>