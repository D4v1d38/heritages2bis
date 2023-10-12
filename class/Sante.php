<?php

namespace App\class;

class Sante
{
    private int $niveauSante = 50;
    private const SANTE_MIN = 0;
    private const SANTE_MAX = 100;
    

    public function visiteVeterinaire(): void
    {
        $this->setSante(self::SANTE_MAX);
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