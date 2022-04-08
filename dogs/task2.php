<?php

namespace App;

require_once 'Animal/Dog.php';
require_once 'Animal/Viable.php';
require_once 'Mops.php';
require_once 'NoisyDachshund.php';
require_once 'PlushLabrador.php';
require_once 'ShibaInu.php';

$mops = new Mops;
$mops->makeSound(); //hmff
$mops->eat(); //App\Mops eat
$mops->hunt(); // no

$dachshund = new NoisyDachshund();
$dachshund->makeSound(); //pz -pz