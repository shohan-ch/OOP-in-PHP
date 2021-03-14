<?php

 class Cal{
     
    public $first_num;
    public $second_num;
    public $operator;


    public function __construct($first,$second,$operator)
    {
        $this->first_num = $first;
        $this->second_num =$second;
        $this->operator  = $operator;      
    }
    public function calculate(){

        switch ($this->operator) {
            case 'add':
                $result = $this->first_num + $this->second_num;
                return $result;
                break;
                case 'sub':
                $result = $this->first_num - $this->second_num;
                return $result;
                break;
                case 'mul':
                $result = $this->first_num * $this->second_num;
                return $result;
                break;
                case 'div':
                $result = $this->first_num / $this->second_num;
                return $result;
                break;

            default:
                echo "error";
                break;
        }
    }
 }


?>