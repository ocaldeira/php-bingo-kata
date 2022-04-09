## Bingo Kata for ZL Tech 

##Feature 1 - Playing Bingo

    *  Calling Bingo Numbers
            * Given I have a Bingo caller
                * Call a number
                * Number is between 1 and 75 inclusive
            * Given I have a Bingo caller
                * Call a number 75 times
                * Numbers between 1 and 75 are present
                * No number has been called more than once


    *  Generating Bingo Cards
            * Given I have a Bingo card generator
                * Generate a Bingo card
                * Generated card has 25 unique spaces

    *  Checking Bingo Cards
            * Given a player calls Bingo after all numbers on their card have been called
                * When I check the card
                * Then the player is the winner

            ● Given a player calls Bingo before all numbers on their card have been called
                * When I check the card
                * Then the player is not the winner
