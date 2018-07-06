<?php
/**
 * Created by PhpStorm.
 * User: beren
 * Date: 06/07/2018
 * Time: 14:11
 */

namespace Entity;


class HardMonster extends Monster
{

    public function __construct()
    {
        $hp = $this->hp*2;
        $attack =  $this->attack*2;

    }
}