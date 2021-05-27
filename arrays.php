<?php

//arrays simples, no se les ha definido keys o clave. Solo valores

$cursos = ['javascript', 'Laravel', 'Vuejs'];

echo "<pre>";
var_dump($cursos);

/**
 * Arrays complejos, sirven como diccionarios
 * 
 */

$cursosComplejo = [
    'frontend'=> 'javascript',
    'framework'=> 'Laravel',
    'backend'=> 'php'
];


/**
 * Array walk, es una funcion predeterminada de php que nos ayuda a recorrer un array
 * y ademas de eso podemos asignarle  una funcion, para que en cada recorrido, cumpla algo
 * 
 */
foreach ($cursosComplejo as $key => $value) {
    echo "$key: $value <br>";
}


function upper($curso)
{
    echo strtoupper($curso) . "<br>";
}
array_walk($cursosComplejo, 'upper');

# Funciones interesantes con arrays

# array_key_exists(str key, var array) = esta funcion busca en nuestro array una llave y nos dice si existe

var_dump(array_key_exists('frontend', $cursosComplejo));

# in_array(srt valor, var array) = esta funcion busca en nuestro array un valor y nos dice si existe

var_dump(in_array('javascript', $cursosComplejo));

# array_keys(var array) = esta funcion muestra todas las llaves de un array

var_dump(array_keys($cursosComplejo));

# array_values(var array) = esta funcion muestra todos los valores de un array

var_dump(array_values($cursosComplejo);
