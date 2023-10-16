<?php

namespace App\class;



class Chien extends Animal
{
    private $truffeColor; 

    public function __construct($pattes, $fourrure, $yeux, $bouche, $truffeColor)
    {
        parent::__construct($pattes, $fourrure, $yeux, $bouche);
        $this->truffeColor = $truffeColor;
    }

    public function chienCaract():string
    {
        return "J'ai {$this->yeux} yeux et {$this->pattes} pattes, je suis couvert de {$this->fourrure} et ma truffe est {$this->truffeColor} <br>";
    }
    
    


}