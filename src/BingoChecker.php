<?php 

namespace src;

use Models\Card;

class BingoChecker
{
   

/**
 * Validate if the caller has called all the numbers in the card
 */
 
    public function isWinner(BingoCaller $caller,Card $card)
    { 
        $cardNumbers = $card->getNumbersInCard();
      
        foreach ($cardNumbers as $key => $value) {
         
            if($value == NULL){
                continue;
            }

            if(!$caller->getCalledNumber($value)){
                print "Not winner";
                return false;
            }
            
        }
    
        return true;
        

    }
 

    
} 
