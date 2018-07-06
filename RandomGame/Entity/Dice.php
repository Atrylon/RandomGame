<?php
/**
 * Created by PhpStorm.
 * User: beren
 * Date: 06/07/2018
 * Time: 14:11
 */

namespace Entity;


class Dice
{
    private $random;

    public function __construct()
    {
        $this->random = new Random();
    }

    public function rollDice($j)
    {
        return $this->random = rand(1, $j);
    }
}