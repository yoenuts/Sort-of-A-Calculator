<?php
namespace Calc;

class Calc{

    public $num1;
    public $num2;
    public $operator;

    public function __construct(string $operator, int $num1, int $num2){
        $this -> operator = $operator;
        $this -> num1 = $num1;
        $this -> num2 = $num2;
    }

    public function Calculator(){
        switch($this->operator){
            case 'Add': 
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'Sub': 
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'Mul': 
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            case 'Div': 
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            default:
                echo 'Error here';
                break;
        }
    }

    /*
    public function add(int num1, int num2){
        return num1 + num2;
    }

    public function subtract(int num1, int num2){
        return num1 - num2;
    }

    public function multiply(int num1, int num2){
        return num1 * num2;
    }

    public function div(int num1, int num2){
        return num1 / num2;
    }
    */

}

?>