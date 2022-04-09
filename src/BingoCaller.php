<?php namespace src;

class BingoCaller
{
    private $numbers = [];

    public function __construct()
    {
    }

    public function callNumber()
    {
            
        do {
            $number = rand(1, 75);
        } while (in_array($number, $this->numbers));

        $this->numbers[] = $number;

        return $number;
    }
}
