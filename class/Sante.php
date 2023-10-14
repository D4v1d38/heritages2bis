<?php

namespace App\class;

class Sante extends PointsActions
{
    private $categorie = "santé";
    private int $niveauSante = 50;
    private const SANTE_MIN = 0;
    private const SANTE_MAX = 100;
    

    public function visiteVeterinaire(): string
    {
        $this->setSante(self::SANTE_MAX);
        $actions =  ['action'       => ' Visite chez le vétérinaire',
        'points'        => self::SANTE_MAX,
        'niveauSante'  => $this->setSante($this->niveauSante),
        'parametre'     => $this->categorie];

        return $this->createActionString($actions);
    }

    public function getSante(): int
    {
        return $this->niveauSante;
    }

    public function setSante($sante):int
    {
        return $this->niveauSante = $sante;
    }

    public function getSanteMax():int
    {
        return self::SANTE_MAX;
    }
}