<?php

namespace App;

use App\Animal\Dog;
use App\Animal\Viable;

class Mops extends Dog implements Viable
{

    public function makeSound()
    {
//        Это он так вздыхает
        echo 'hmfff';
    }

    public function eat()
    {
        echo get_class($this) . 'eat';
    }

    public function hunt()
    {
        echo 'no';
    }
}