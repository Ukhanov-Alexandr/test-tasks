<?php

namespace App\Animal;

/**
 * Определение поведения животного
 */
interface Viable
{
    /**
     * Животное может издавать звуки
     * @return mixed
     */
    public function makeSound();

    /**
     * Может также есть
     * @return mixed
     */
    public function eat();

    /**
     * Может также охотиться
     * @return mixed
     */
    public function hunt();
}