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
    protected $hp = 20;
    protected $attack = 4;


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

    public function damageTaken($damage)
    {
        $this->hp = $this->hp - $damage;
    }

}