<?php
/**
 * Created by PhpStorm.
 * User: beren
 * Date: 06/07/2018
 * Time: 14:15
 */

namespace Entity;



class Game
{
    private $score;
    private $hardMonsterkilled;
    private $easyMonsterkilled;
    private $player;

    public function __construct()
    {
        $this->player = new Player();
    }
}