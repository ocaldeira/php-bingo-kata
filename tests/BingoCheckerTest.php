<?php  

use PHPUnit\Framework\TestCase;
use src\BingoCaller;
use src\BingoCards;
use src\BingoChecker;

class BingoCheckerTest extends TestCase
{

    
    /**
     * Test  winner 
     */

    public function testCheckerAsWinner()
    {
        $caller = new BingoCaller();
        $checker = new BingoChecker();
        $card = (new BingoCards())->generateCards(); 

        for($i = 1; $i <= 75; $i++){
            $caller->callNumber();
        }

        $this->assertTrue($checker->isWinner($caller,$card));

        
    }  
    /**
     * Test not winner 
     */

    public function testCheckerAsNotWinner()
    {
        $caller = new BingoCaller();
        $checker = new BingoChecker();
        $card = (new BingoCards())->generateCards(); 

        for($i = 1; $i <= 18; $i++){
            $caller->callNumber();
        }

        $this->assertFalse($checker->isWinner($caller,$card));

        
    }  

}