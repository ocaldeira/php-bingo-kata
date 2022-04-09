<?php  

namespace Models;

class Card {

    /**
     * @var array $matrix 
     */
    private $matrix;

    public function __construct($matrix)
    {
        $this->matrix = $matrix;
    }

    /**
     * Validate the card 
     */
    public function isValid():bool
    {
        return $this->validSize() && $this->validNumbers();
    }

    /**
     * Validate the card size
     */
    private function validSize():bool
    {

        foreach ($this->matrix as $row) {
            if (sizeof($row) !== 5) {
                return false;
            }
        }

        return true;
    }


    /**
     * Validate the card numbers
     */
    private function validNumbers():bool
    {
        
        return $this->validateColumn("B",1,15) && 
        $this->validateColumn("I",16,30) && 
        $this->validateColumn("N",31,45,true) && 
        $this->validateColumn("G",46,60) && 
        $this->validateColumn("O",61,75);

        
    }

    /**
     * Validate a column
     */
    public function validateColumn($column,$low,$high,$hasNull=false)
    {

        foreach($this->matrix[$column] as $cell){
            if($hasNull && $cell === NULL){
                continue;
            }

            if($cell < $low || $cell > $high){
                return false;
            }
        }
        return true;
         
    }

    /**
     * Get the numbers in the card cell
     */
    public function getCell($column,$row)
    {
        return  $this->matrix[$column][$row];
    }

    /**
     * Get the all the  numbers in the card
     */

    public function getNumbersInCard(){
        return array_merge(
            $this->matrix['B'],
            $this->matrix['I'],
            $this->matrix['N'],
            $this->matrix['G'],
            $this->matrix['O']
        );
    }


}