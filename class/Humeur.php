<?php

namespace App\class;
// use App\traits\PointsTraits;
require "./class/PointsActions.php";

class Humeur extends PointsActions
{
    private $categorie = "humeur";
    private int $niveauHumeur = 60;
    private const HUMEUR_MIN = 0;
    private const HUMEUR_MAX = 100;

    private const POINT_PROMENADE = self::POINT_15;
    private const POINT_NOURRIR = self::POINT_25;
  
    
    public function promenade():array
    {
        $this->niveauHumeur = $this->ajoutPoints($this->niveauHumeur,self::POINT_PROMENADE,self::HUMEUR_MIN,self::HUMEUR_MAX );
        return ['action'        => 'le chien a été promené !',
                'points'        => self::POINT_PROMENADE,
                'niveauHumeur'  => $this->setHumeur($this->niveauHumeur),
                'parametre'     => $this->categorie
        ];
    }

    public function nourrir():array
    {
        $this->niveauHumeur = $this->ajoutPoints($this->niveauHumeur,self::POINT_NOURRIR,self::HUMEUR_MIN,self::HUMEUR_MAX );
        return  ['action'       => ' le chien a été nourri !',
                'points'        => self::POINT_NOURRIR,
                'niveauHumeur'  => $this->setHumeur($this->niveauHumeur),
                'parametre'     => $this->categorie
        ];
    }

    public function visiteVeterinaire():array
    {
        $humeurAvant = $this->gethumeur();
        $humeurApres = $this->setHumeur($this->niveauHumeur*0.5);
        $points = $humeurApres - $humeurAvant;

        return  ['action'  => ' Visite chez le vétérinaire',
        'points'        => $points,
        'niveauHumeur'  => $this->setHumeur($this->niveauHumeur),
        'parametre'     => $this->categorie
        ];
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