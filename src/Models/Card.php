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
        
        return $this->matrix['B']>=1 && $this->matrix['B']<=15 &&
                $this->matrix['I']>=16 && $this->matrix['I']<=30 &&
                $this->matrix['N']>=31 && $this->matrix['N']<=45 &&
                $this->matrix['G']>=46 && $this->matrix['G']<=60 &&
                $this->matrix['O']>=61 && $this->matrix['O']<=75;

    }

}