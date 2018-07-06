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

        $player->display();
    ?>

</body>
</html>
