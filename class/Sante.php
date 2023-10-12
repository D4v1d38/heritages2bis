<?php

namespace App\class;

class Sante
{
    private $categorie = "santé";
    private int $niveauSante = 50;
    private const SANTE_MIN = 0;
    private const SANTE_MAX = 100;
    

    public function visiteVeterinaire(): array
    {
        $this->setSante(self::SANTE_MAX);
        return  ['action'       => ' Visite chez le vétérinaire',
        'points'        => self::SANTE_MAX,
        'niveauHumeur'  => $this->setSante($this->niveauSante),
        'parametre'     => $this->categorie];
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