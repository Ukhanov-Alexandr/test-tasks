<?php

namespace App;

use App\Animal\Dog;
use App\Animal\Viable;

class ShibaInu extends Dog implements Viable
{

    public function makeSound()
    {
        echo 'bark-bark';
    }

    public function eat()
    {
        echo get_class($this) . ' eat';
    }

    public function hunt()
    {
        echo get_class($this) . ' hunt';
    }
}