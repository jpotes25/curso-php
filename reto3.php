<?php



function calcularSegundos ($horas, $minutos)
{
    $minutos += $horas*60;
    return $minutos*60;
}

$horas = 1;

$minutos = 20;

echo calcularSegundos($horas, $minutos);