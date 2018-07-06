<?php
/**
 * Created by PhpStorm.
 * User: beren
 * Date: 06/07/2018
 * Time: 14:17
 */

namespace Entity;


class Random
{
    private $randomDice;

    public function __construct()
    {
        $this->randomDice = rand();
    }

    public function Next(int $i, int $j)
    {
        return $this->randomDice = rand($i, $j);
    }
}