<?php  

use PHPUnit\Framework\TestCase;
use src\BingoCards;

class BingoCardsTest extends TestCase
{

    public function testWhenGenerateValidCards()
    {
        $bingoCards = new BingoCards();
         $card =  $bingoCards->generateCards(); 
         $this->assertTrue($card->isValid());
    } 

}