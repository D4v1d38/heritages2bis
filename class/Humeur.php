<?php

namespace App\class;
// use App\traits\PointsTraits;
require "./class/PointsActions.php";

class Humeur extends PointsActions
{

    private int $niveauHumeur = 60;
    private const HUMEUR_MIN = 0;
    private const HUMEUR_MAX = 100;
    
    private const POINT_PROMENADE = self::POINT_15;
    private const POINT_NOURRIR = self::POINT_25;
    
    public function promenade():int
    {
        $this->niveauHumeur = $this->ajoutPoints($this->niveauHumeur,self::POINT_PROMENADE,self::HUMEUR_MIN,self::HUMEUR_MAX );
        return $this->setHumeur($this->niveauHumeur);
    }

    public function nourrir():int
    {
        $this->niveauHumeur = $this->ajoutPoints($this->niveauHumeur,self::POINT_NOURRIR,self::HUMEUR_MIN,self::HUMEUR_MAX );
        return $this->setHumeur($this->niveauHumeur);
    }

    public function visiteVeterinaire():void
    {
        $this->setHumeur($this->niveauHumeur*0.5);
    }

    public function gethumeur(): int
    {
        return $this->niveauHumeur;
    }

    public function setHumeur(int $humeur):int
    {
        return $this->niveauHumeur = $humeur;
    }

    public function getHumeurMax(): int
    {
        return self::HUMEUR_MAX;
    }

}