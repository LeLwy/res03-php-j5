<?php

function add(int $nb1, int $nb2) : float
{
    return $nb1 + $nb2;
}

function substract(int $nb1, int $nb2) : float
{
    return $nb1 - $nb2;
}

function multiply(int $nb1, int $nb2) : float
{
    return $nb1 * $nb2;
}

function divide(int $nb1, int $nb2) : ?float
{
    return $nb1 / $nb2;
}

function modulo(int $nb1, int $nb2) : ?float
{
    return $nb1 % $nb2;
}

function power(int $nb1, int $nb2) : float
{
    return $nb1**$nb2;   
}

function factorial(int $nb1) : float
{
    $nombre = $nb1;
    $fact = 1;
    for ($i = 1; $i <= $nombre; $i++) {
        $fact = $fact * $i;
    }
    
    return $fact;
}

?>