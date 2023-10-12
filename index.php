<?php

namespace App;
require './traits/PointsTraits.php';
require "./class/Animal.php";
require "./class/Chien.php";


use App\class\Chien;



$dalmatien = new Chien(4, 'poil court', 2, 1, 'noir');

?>
<p>Humeur du chien : <?= $dalmatien->gethumeur() .'/'.$dalmatien->getHumeurMax()?></p>
<p>Santé du chien : <?= $dalmatien->getSante() .'/'.$dalmatien->getSanteMax()?></p>

<?php
// echo $dalmatien->promenade();

$actions[] = $dalmatien->nourrir();
$actions[] = $dalmatien->promenade();
$actions[] = $dalmatien->visiteVeterinaire();

if($actions !== null):
    foreach($actions as $action):
        echo '<p>'. $action['action'].' '.$action['points'].'points '.$action['parametre'] . '</p>';
        endforeach;
endif;

?>

<p>Humeur du chien : <?= $dalmatien->gethumeur() .'/'.$dalmatien->getHumeurMax()?></p>
<p>Santé du chien : <?= $dalmatien->getSante() .'/'.$dalmatien->getSanteMax()?></p>