<?php

namespace App\traits;

trait PointsTraits
{
    public function ajoutPoints($param, $valeur, $valeurMin, $valeurMax):int
    {
        $param += $valeur;

        if($param < $valeurMin) return $valeurMin;
        if($param > $valeurMax) return $valeurMax;
        return $param;
    }
}