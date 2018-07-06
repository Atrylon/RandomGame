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

        while ($player->isAlive() === true){
            $rand = rand(1,5);
            if($rand === 5){
                $monster = new HardMonster();
                $monsterDice = $dice->rollDice($monster->getAttack());
                $playerDice = $dice->rollDice($player->getAttack());

                $player->display().'';
                echo '<br/> Rencontre avec un Boss ! <br />';
                echo "Le hero frappe fait ".$playerDice.' dégats, le monstre fait '.$monsterDice.' dégats <br />';


                $player->damageTaken(5);
                echo '<br />';
            }
            else{
                $monster = new EasyMonster();
                $monsterDice = $dice->rollDice($monster->getAttack());
                $playerDice = $dice->rollDice($player->getAttack());

                $player->display().' <br />';

                while($monster->isAlive() === true){
                    echo '<br/> Rencontre avec un trash mob ! <br />';
                    echo "Le hero frappe fait ".$playerDice.' dégats, le monstre fait '.$monsterDice.' dégats <br />';

                    if ($playerDice >= $monsterDice){
                        echo 'Le monstre est mort ! <br />';
                        break;
                    }
                    else {
                        echo 'Le hero subit des dégats ! Il perd '.$monsterDice.' points de vie ! <br />';
                        $player->damageTaken($monsterDice);
                    }


                echo '<br />';
                }
            }
        }

        $player->display();
    ?>

</body>
</html>
