<?php 

class Clac{
    public $numOne;
    public $numTwo;
    public $operator;

    public function __construct(int $numOne, int $numTwo, string $operator){
        $this->numOne = $numOne;
        $this->numTwo = $numTwo;
        $this->operator = $operator;
    }

    public function calculator(){
        switch ($this->operator) {
            case "tambah":
                $result = $this->addition();
                return $result;
                break;

            case "kurang":
                $result = $this->subtraction();
                return $result;
                break;

            case "kali":
                $result = $this->mulitiplication();
                return $result;
                break;

            case "bagi":
                $result = $this->division();
                return $result;
                break;
 
            default:
                // return "there is something wrong i can feel it".$this->operator;
                return $this->operator;
                break;
        }
    }
    
    public function addition(){
        return $this->numOne + $this->numTwo;
    }
    public function subtraction(){
        return $this->numOne - $this->numTwo;
    }
    public function mulitiplication(){
        return $this->numOne * $this->numTwo;
    }
    public function division(){
        return $this->numOne / $this->numTwo;
    }

}