<?php
namespace App;

use App\Animal\Dog;

/**
 * Шумная такса - собака хоть и игрушечная звуки она издает
 */
class NoisyDachshund extends Dog
{
    /**
     * @return mixed|void
     */
    public function makeSound()
    {
//        Это он пищит :)
        echo 'pz-pz';
    }
}