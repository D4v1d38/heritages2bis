<?php

namespace App\class;

require "./class/Humeur.php";
require "./class/Sante.php";

abstract class Animal
{
    protected $yeux;
    protected $bouche;
    protected $pattes;
    protected $fourrure;

    protected $humeur;
    protected $sante;

    public function __construct($pattes, $fourrure,$yeux=2, $bouche=1)
    {
        $this->yeux = $yeux;
        $this->bouche = $bouche;
        $this->pattes = $pattes;
        $this->fourrure = $fourrure;

        $this->humeur = new Humeur();
        $this->sante = new Sante();
    }

    public function caracteristiques(): string
    {
        return "<p>J'ai {$this->yeux} yeux et {$this->pattes} pattes, je suis couvert de {$this->fourrure}</p>";
    }

    public function visiteVeterinaire():void
    {
        $this->humeur->visiteVeterinaire();
        $this->sante->visiteVeterinaire();
    }

    public function promenade()
    {
        return $this->humeur->promenade();
    }

    public function nourrir()
    {
        return $this->humeur->nourrir();
    }


    public function gethumeur()
    {
        return $this->humeur->gethumeur();
    }

    public function getHumeurMax()
    {
        return $this->humeur->getHumeurMax();
    }

    public function getSante()
    {
        return $this->sante->getSante();
    }

    public function getSanteMax()
    {
        return $this->sante->getSanteMax();
    }


}