<?php

namespace Tests;

include 'src/Tennis.php';
include 'src/Player.php';

use Src\Player;
use Src\Tennis;
use PHPUnit\Framework\TestCase;

class TennisTest extends TestCase
{
    /**
     * @var Tennis
     */
    protected $tennis;
    protected $player;

    public function setUp() {
        $this->tennis = new Tennis();
        $this->player = new Player();
    }

    public function testEmptyScore()
    {
        $this->assertSame('Points: 0 - 0 / Games: 0 - 0', $this->tennis->getScore());
    }

    public function testPlayerAScores()
    {
        $this->tennis->playerScores('A');
        $this->assertSame('Points: 15 - 0 / Games: 0 - 0', $this->tennis->getScore());
    }

    public function testPlayerAScoresDouble()
    {
        $this->tennis->playerScoresMultiple('A',2);
        $this->assertSame('Points: 30 - 0 / Games: 0 - 0', $this->tennis->getScore());
    }

    public function testPlayerAScores3Times()
    {
        $this->tennis->playerScoresMultiple('A', 3);
        $this->assertSame('Points: 40 - 0 / Games: 0 - 0', $this->tennis->getScore());
    }

    public function testPlayerAScoresAGame()
    {
        $this->tennis->playerScoresMultiple('A', 4);
        $this->assertSame('Points: 0 - 0 / Games: 1 - 0', $this->tennis->getScore());
    }

    public function testPlayersABScore()
    {
        $this->tennis->playerScoresMultiple('A', 5);
        $this->tennis->playerScoresMultiple('A', 2);
        $this->tennis->playerScoresMultiple('B', 3);
        $this->assertSame('Points: 40 - 40 / Games: 1 - 0', $this->tennis->getScore());

    }

   public function testPlayersBOnAdvantage(){
       $this->tennis->playerScoresMultiple('A', 5);
       $this->tennis->playerScoresMultiple('A', 2);
       $this->tennis->playerScoresMultiple('B', 3);

       $this->assertSame('Points: 40 - 40 / Games: 1 - 0', $this->tennis->getScore());

   }




}
