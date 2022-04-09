<?php 

namespace src;

use Models\Card;

class BingoCards
{
    private $bingoCards = [
        'B' => [],
        'I' => [],
        'N' => [],
        'G' => [],
        'O' => []
    ];

 
    public function generateCards():Card
    {
        return  new Card($this->bingoCards); 
    }
} 
