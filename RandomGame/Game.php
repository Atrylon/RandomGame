<?php
/**
 * Created by PhpStorm.
 * User: beren
 * Date: 06/07/2018
 * Time: 14:11
 */

require __DIR__.'/vendor/autoload.php';

use Entity\Player;
use Entity\Easymonster;
use Entity\HardMonster;
use Entity\Dice;

$dice = new Dice;

?>


<!doctype html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le jeu du random</title>
</head>
<body>
    <h1>Le Jeu du Random !</h1>
    <?php
        $player = new Player('Roger');
        $dice = new Dice();
        $easyMonsterKilled = 0;
        $hardMonsterKilled = 0;
        $score = 0;

        while ($player->isAlive() === true){
            $rand = rand(1,5);
            if($rand === 5) {

                $monster = new HardMonster();

                $player->display().'';
                echo '<br />';

                echo 'RENCONTRE AVEC UN BOSS ! <br />';

                while ($monster->isAlive() === true) {

                    $monsterDice = $dice->rollDice($monster->getAttack());
                    $playerDice = $dice->rollDice($player->getAttack());


                    echo " Le hero frappe fait " . $playerDice . ' &#9876; dégats, le monstre fait ' . $monsterDice . ' &#9876; dégats <br />';

                    if ($playerDice >= $monsterDice) {
                        $monster->damageTaken($playerDice);
                        if($monster->getHp() <= 0)
                        {
                            echo 'Le monstre subit des dégats ! Il perd ' . $playerDice . ' &hearts; points de vie ! <br />';
                            echo 'Le monstre est mort ! <br /> <br />';
                            $hardMonsterKilled ++;
                            break;
                        }
                        else
                        {
                            echo 'Le monstre subit des dégats ! Il perd ' . $playerDice . ' &hearts; points de vie ! <br />';
                        }

                    } else {
                        echo 'Le hero subit des dégats ! Il perd ' . $monsterDice . ' &hearts; points de vie ! <br />';
                        $player->damageTaken($monsterDice);
                    }
                }
            }
            else{
                $monster = new EasyMonster();


                $player->display().'';
                echo '<br />';

                echo 'RENCONTRE AVEC UN TRASH MOB ! <br />';

                while($monster->isAlive() === true){

                    $monsterDice = $dice->rollDice($monster->getAttack());
                    $playerDice = $dice->rollDice($player->getAttack());

                    echo "Le hero frappe fait ".$playerDice.' &#9876; dégats, le monstre fait '.$monsterDice.' &#9876; dégats <br />';

                    if ($playerDice >= $monsterDice) {
                        $monster->damageTaken($playerDice);
                        if($monster->getHp() <= 0)
                        {
                            echo 'Le monstre subit des dégats ! Il perd ' . $playerDice . ' &hearts; points de vie ! <br />';
                            echo 'Le monstre est mort ! <br /> <br />';
                            $easyMonsterKilled ++;
                            break;
                        }
                        else
                        {
                            echo 'Le monstre subit des dégats ! Il perd ' . $playerDice . ' &hearts; points de vie ! <br />';
                        }

                    } else {
                        echo 'Le hero subit des dégats ! Il perd ' . $monsterDice . ' &hearts; points de vie ! <br />';
                        $player->damageTaken($monsterDice);
                    }
                }
            }
        }

        $player->display();
        echo '<br /> Durant ma vie j\'ai tué '.$easyMonsterKilled.' trash mobs et '.$hardMonsterKilled.' boss. <br />';
        $score = $easyMonsterKilled+$hardMonsterKilled*2;
        echo 'J\'ai gagné '.$score.' points !';
    ?>

</body>
</html>
