<?php

namespace Src;

class Tennis {

    protected $playerA;
    protected $playerB;

    public function __construct()
    {
        $this->playerA = new Player();
        $this->playerB = new Player();
    }

    public function getScore()
    {
        echo PHP_EOL.'Points: '.$this->playerA->getPoints().' - '.$this->playerB->getPoints().' / Games: '.
            $this->playerA->getGames().' - '.$this->playerB->getGames().PHP_EOL;

        return 'Points: '.$this->playerA->getPoints().' - '.$this->playerB->getPoints().' / Games: '.
            $this->playerA->getGames().' - '.$this->playerB->getGames();
    }

    public function playerScores($player)
    {
        if ($player === 'A') {
            $this->playerA->playerScores('A');
        } elseif ($player === 'B') {
            $this->playerB->playerScores('B');
        } else {
            throw new \Exception('This player does not exist');
        }
    }

    public function playerScoresMultiple($player, $times)
    {

         for ($i = 0; $i < $times; $i++) {
                $this->playerScores($player);
         }

    }

    public function playerOnAdvantage($player,$advantage){

    }

}
