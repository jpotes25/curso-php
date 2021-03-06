<?php

function repetirPalabras($string, $repetir)
{
    $cont = 0;
    if ($cont <= $repetir) {
        echo $string;
        $cont++;
        $repetir--;
        repetirPalabras($string, $repetir);
    }
}

$string = 'Aprendiendo php con Platzi';
$repetir = 10;

repetirPalabras($string, $repetir);