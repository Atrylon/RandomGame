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

    public function __construct($name)
    {
        $this->hp = 150;
        $this->name = $name;
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

    public function attack(Monster $monster)
    {

    }

    public function damageTaken($damage)
    {
        $this->hp = $this->hp - $damage;
    }

    public function display()
    {
        echo "Je suis un hero je m'appelle ".$this->name." et j'ai ".$this->hp." pv !";
    }
}