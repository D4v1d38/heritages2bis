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
echo $dalmatien->nourrir();
echo $dalmatien->visiteVeterinaire();
echo $dalmatien->promenade();
?>

<p>Humeur du chien : <?= $dalmatien->gethumeur() .'/'.$dalmatien->getHumeurMax()?></p>
<p>Santé du chien : <?= $dalmatien->getSante() .'/'.$dalmatien->getSanteMax()?></p>