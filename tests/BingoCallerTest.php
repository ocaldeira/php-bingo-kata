<?php  

use PHPUnit\Framework\TestCase;
use src\BingoCaller;

class BingoCallerTest extends TestCase
{
    public function testWhenCallNumberInRange()
    {
        $bingoGame = new BingoCaller();
        $calledNum =  $bingoGame->callNumber();
        $this->assertTrue($calledNum >= 1 && $calledNum <= 75);
    } 

    public function testWhenCallAllNumbers(){
        $bingoGame = new BingoCaller();
        $calledNum = array();
        $expectedNum = range(1,75);
        for ($i=0; $i < 75; $i++) { 
            $calledNum[] = $bingoGame->callNumber();
        }

         sort($calledNum);
       
        $this->assertEquals($expectedNum, $calledNum); 

    }

}