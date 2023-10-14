<?php

namespace App\traits;

trait CreateString
{
    public function createActionString(array $actions)
    {
        return '<p>'. $actions['action'].' '.$actions['points'].' points '.$actions['parametre'] . '</p>';
    }
}