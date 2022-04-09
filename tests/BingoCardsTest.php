<?php  

use PHPUnit\Framework\TestCase;
use src\BingoCards;

class BingoCardsTest extends TestCase
{

    /**
     * Test the generateCards method
     */

    public function testWhenGenerateValidCards()
    {
        $bingoCards = new BingoCards();
         $card =  $bingoCards->generateCards(); 
         $this->assertTrue($card->isValid());
    } 

}