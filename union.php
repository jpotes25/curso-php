<?php

$frontend = ['javascript'];

$backend = ['php', 'laravel'];

echo "<pre>";
var_dump(array_merge($frontend, $backend));

// array_combine(keys, valores) = esta funcion nos ayuda a asignar un array como keys de otro array

$cursos = ['javascript', 'vuejs', 'python', 'mongodb'];

$categorias = ['frontend', 'framework', 'backend', 'database'];

var_dump(array_combine($categorias, $cursos));

#array_merge_recursive ($array1, $array2) = Esta funcion nos ayuda a organizar arrays asi tengan los
#mismos keys

$cursos = [
    'frontend' => 'javascript',
    'framework' => 'vuejs',
    'backend' => 'python',
    'database' => 'mongodb'];

$categorias = [
    'frontend' => 'html',
    'framework' => 'reactJs'
];

var_dump(array_merge_recursive($cursos, $categorias));