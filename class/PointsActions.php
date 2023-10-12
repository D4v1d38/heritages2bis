<?php
namespace App\class;

abstract class PointsActions
{
    protected const POINT_5 = 5;
    protected const POINT_10 = 10;
    protected const POINT_15 = 15;
    protected const POINT_25 = 25;

    public function ajoutPoints($param, $valeur, $valeurMin, $valeurMax):int
    {
        $param += $valeur;

        if($param < $valeurMin) return $valeurMin;
        if($param > $valeurMax) return $valeurMax;
        return $param;
    }
}