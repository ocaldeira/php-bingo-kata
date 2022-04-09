<?php 

namespace src;

use Models\Card;

class BingoCards
{
    /**
     * @var array $matrix 
     */
    private $bingoCard = [
        'B' => [],
        'I' => [],
        'N' => [],
        'G' => [],
        'O' => []
    ];

/**
 * Generate a new bingo card
 */
 
    public function generateCards():Card
    {
        
        $this->bingoCard['B'] = $this->generateColumns(1, 15);
        $this->bingoCard['I'] = $this->generateColumns(16, 30);
        $this->bingoCard['N'] = $this->generateColumns(31, 45);
        $this->bingoCard['G'] = $this->generateColumns(46, 60);
        $this->bingoCard['O'] = $this->generateColumns(61, 75);
        /**
         *  arrange  the free cell in the middle of the card 
         */
        $this->bingoCard['N'][2] = NULL;
        return  new Card($this->bingoCard); 
    }

    /**
     * Generate a random number between $low and $high and add it to the corresponding column
     */
    public function generateColumns($low,$high){


        $columns = [];

       while(sizeof($columns) < 5){
            $cell = rand($low,$high);
            if(!in_array($cell,$columns)){
                $columns[] = $cell;
            }
        }
        return $columns;
    }

    
} 
