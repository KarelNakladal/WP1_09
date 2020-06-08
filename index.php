<?php
$hp = 100;
define('max_dmg', 20);
define('min_dmg', 1);
$dmg = 0;
$dmg1 = 0;
$enemyhp = 100;
$end = "error" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Máš <?= $hp ?> bodů zdraví.
Nepřítel má <?= $enemyhp ?> bodů zdraví.
    <?php

do {
    $dmg = rand(max_dmg, min_dmg); 
    $hp = $hp - $dmg;
    $dmg1 = rand(max_dmg, min_dmg); 
    $enemyhp = $enemyhp - $dmg1;
    
    if ($hp <= -1) {
        $hp = 0;
    }
    if ($enemyhp <= -1){
        $enemyhp = 0;
    }


    ?>
<br>Utrpěl si <?= $dmg ?> bodů poškození zbývá ti <?= $hp ?> HP
<br>Nepřítel utrpěl <?= $dmg1 ?> bodů poškození zbývá mu <?= $enemyhp ?> HP
<br>_________________

 <?php


if($enemyhp == 0) {
    $end = "you win";

  }
if ($hp == 0){
      $end = "you lose";

  }

}
while ($end == "error");

  ?>
 
<h1> <?= $end ?> </h1>



    
</body>
</html>