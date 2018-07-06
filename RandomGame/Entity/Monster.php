<?php
/**
 * Created by PhpStorm.
 * User: beren
 * Date: 06/07/2018
 * Time: 14:41
 */

namespace Entity;


Abstract class Monster
{
    private $hp = 1;
    private $attack = 4;
    private $isAlive;


    public function isAlive(): bool
    {
        if($this->hp>0){
            return true;
        }
        else return false;
    }

    /**
     * @return mixed
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @return mixed
     */
    public function getAttack()
    {
        return $this->attack;
    }

}