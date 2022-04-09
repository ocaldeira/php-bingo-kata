<?php  

namespace Models;

class Card {

    private $matrix;

    public function __construct($matrix)
    {
        $this->matrix = $matrix;
    }

    public function isValid():bool{
        return $this->validSize() && $this->validNumbers();
    }

    private function validSize():bool{

        foreach ($this->matrix as $row) {
            if (sizeof($row) !== 5) {
                return false;
            }
        }

        return true;
    }


    private function validNumbers():bool{
        
        return $this->validateColumn("B",1,15) && 
        $this->validateColumn("I",16,30) && 
        $this->validateColumn("N",31,45) && 
        $this->validateColumn("G",46,60) && 
        $this->validateColumn("O",61,75);

    }

    public function validateColumn($column,$low,$high){

        foreach($this->matrix[$column] as $cell){
            if($cell < $low || $cell > $high){
                return false;
            }
        }
        return true;
         
    }


}