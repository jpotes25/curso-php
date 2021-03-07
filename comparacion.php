<?php


/**
 * Comparaciones
 */
$cursos = ['javascript', 'php'];

$sugerencias = ['php', 'laravel', 'javascript', 'vuejs'];

echo "<pre>";

# array_diff(array1 - array2) = arraydiff es como una resta entre arrays, que nos muestra
# las diferencias de uno respecto a otro, en pocas palabras, que tiene el 1 que no tiene el 2

var_dump(array_diff($sugerencias, $cursos));

