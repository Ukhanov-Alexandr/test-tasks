<?php

namespace App;

use App\Animal\Dog;

/**
 * Плюшевый лабрадор не издает звуки, но может наследовать други свойтсва от собаки, например кол-во ног :),
 * поэтому extends оставляем хоть и bark тут не реализуется.
 */
class PlushLabrador extends Dog
{
    /**
     * @return mixed|void
     */
    public function makeSound()
    {
    }
}