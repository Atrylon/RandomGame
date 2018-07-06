<?php
/**
 * Created by PhpStorm.
 * User: beren
 * Date: 06/07/2018
 * Time: 14:10
 */

namespace Entity;


class Player
{
    private $hp;
    private $name;
    private $attack;
    private $dice;

    public function __construct($name)
    {
        $this->hp = 10;
        $this->name = $name;
        $this->attack = 5;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    public function isAlive(): bool
    {
        if($this->hp>0){
            return true;
        }
        else return false;
    }

    /**
     * @return int
     */
    public function getAttack()
    {
        return $this->attack;
    }

    public function damageTaken($damage)
    {
        $this->hp = $this->hp - $damage;
    }

    public function display()
    {
        if($this->isAlive() ===true){
            echo "Je suis un hero je m'appelle ".$this->name." et j'ai ".$this->hp." pv !";
        }
        else{
            echo "J'étais un héro et je suis mort";
        }

    }
}