<?php

namespace App;

require "./class/Animal.php";
require "./class/Chien.php";


use App\class\Chien;

phpinfo();

$dalmatien = new Chien('Médor','Dalmatien', 4, 'poil court', 2, 1, 'noir');

?>
<p>Humeur du chien : <?= $dalmatien->gethumeur() .'/'.$dalmatien->getHumeurMax()?></p>
<p>Santé du chien : <?= $dalmatien->getSante() .'/'.$dalmatien->getSanteMax()?></p>

<?php

$actions[] = $dalmatien->nourrir();
$actions[] = $dalmatien->promenade();
$actions[] = $dalmatien->visiteVeterinaire();

?>
<pre>
<?=var_dump($actions);?>
</pre>

<?

if($actions !=null):
?>
    <ul>
    <?foreach($actions as $action):?>
       <li><?= $action ?></li>    
    <?endforeach;?>
    </ul>
<?php
endif;


?>

<p>Humeur du chien : <?= $dalmatien->gethumeur() .'/'.$dalmatien->getHumeurMax()?></p>
<p>Santé du chien : <?= $dalmatien->getSante() .'/'.$dalmatien->getSanteMax()?></p>