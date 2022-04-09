<?php namespace src;

class BingoCaller
{
    /**
     * $numbers is used as storage for the numbers that have been called.
     */
    private $numbers = [];

    public function __construct()
    {
    }

    /**
     *  Generate a random number between 1 and 75.
     */
    public function callNumber()
    {
        do {
            $number = rand(1, 75);
        } while (in_array($number, $this->numbers));

        $this->numbers[] = $number;

        return $number;
    }

    /**
     * Get the called number
     */
    public function getCalledNumber($number)
    {
        return in_array($number, $this->numbers);
    }
}
