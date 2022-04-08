<?php

namespace App\Animal;

/**
 * Абстрактный класс для собак - как живых так и игрушек
 *
 */

abstract class Dog
{
    /**
     * Собака может лаять
     * @return mixed
     */
    public abstract function makeSound();
}