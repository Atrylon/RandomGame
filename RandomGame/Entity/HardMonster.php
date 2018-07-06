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
        $hp = parent::getHp() * 2;
        $attack = parent::getAttack() * 2;

    }


}