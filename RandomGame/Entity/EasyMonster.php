<?php
/**
 * Created by PhpStorm.
 * User: beren
 * Date: 06/07/2018
 * Time: 14:10
 */

namespace Entity;


class EasyMonster extends Monster
{


    public function __construct()
    {
        $hp = parent::getHp();
        $attack = parent::getAttack();
    }


}