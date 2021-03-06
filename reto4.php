<?php
function repetirString($string, $repetir)
{
    
    if($repetir != 0)
    {   
        echo $string;
        echo "\n";
        $repetir--;
        repetirString($string, $repetir);
    }
}

$frase = "reto 4 con php y platzi";
$repetir = 10;

repetirString($frase, $repetir);
