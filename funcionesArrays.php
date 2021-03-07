<?php

/**
 * Php trae por defecto algunas funciones para trabajar con arrays que nos hacen
 * mas facil la vida, aqui veremos algunas
 */
$cursos = [
    10 => 'php',
    100 => 'javascript',
    1000 => 'laravel'];

// sort(array) = esta funcion organiza nuestro array de menor a mayor
sort($cursos);

echo "<pre> Este es un array ordenado con sort <br>";
var_dump($cursos);

// rsort(array) = esta funcion organiza nuestro array de mayor a menor

rsort($cursos);
echo "<pre> Este es un array ordenado con rsort <br>";
var_dump($cursos);

// ksort(array) = esta funcion nos ayuda a organizar arrays segun llave (menor a mayor)

ksort($cursos);
echo "<pre> Este es un array ordenado con ksort <br>";
var_dump($cursos);

// krsort(array) = esta funcion nos ayuda a organizar arrays segun llave (mayor a menor)

krsort($cursos);
echo "<pre> Este es un array ordenado con krsort <br>";
var_dump($cursos);

//array_slice(array, #elements) = quitamos una parte del array


echo "<pre> Este es un array al cual le cortamos una parte con slice <br>";
var_dump(array_slice($cursos, 1));

//array_chunk(array, #subarrays) = divide un array en fragmentos

$cursos2 = $cursos;

echo "<pre> Este es un array que dividimos en fragmentos con chunk <br>";
var_dump(array_chunk($cursos2, 2));

//array_shift(array) = elimina el primer elemento de un array y lo retorna como valor

$cursos2 = $cursos;

echo "<pre> Este es un array al que le eliminamos el primer elemento con shift <br>";
var_dump(array_shift($cursos2));
var_dump($cursos2);


//array_pop(array) = elimina el ultimo elemento de un array y lo retorna como valor

$cursos2 = $cursos;

echo "<pre> Este es un array al que le eliminamos el ultimo elemento con pop <br>";
var_dump(array_pop($cursos2));
var_dump($cursos2);

//array_unshift(array, valor) = agregamos un elemento al inicio de un array

$cursos2 = $cursos;

echo "<pre> Este es un array al que le agregamos un elemento al inicio con unshift <br>";
var_dump(array_unshift($cursos2, 'django'));
var_dump($cursos2);

//array_push(array, valor) = agregamos un elemento al final de un array

$cursos2 = $cursos;

echo "<pre> Este es un array al que le agregamos un elemento al final con push <br>";
var_dump(array_push($cursos2, 'python'));
var_dump($cursos2);

//array_flip(array) = las llaves se vuelven valores y los valores se vuelven llaves

echo "<pre> Este es un array al que le invertimos llaves con valores <br>";

$cursos3 = [
    'backend' => 'django',
    'frontend' => 'react',
    'database' => 'mongodb'
];

var_dump($cursos3);
var_dump(array_flip($cursos3));

