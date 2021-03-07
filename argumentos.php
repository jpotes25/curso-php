<?php


//valores
function saludo($name)
{
    return "Hola, $name";
}

echo saludo("David");

//referencias

$cursos = 'php';
function path(&$cursos)
{
    $cursos = 'Laravel';
    echo $cursos;
}

path($cursos);

echo $cursos;

//predeterminado

function saludos($name = 'David')
{
    return "Hola, $name.";
}

echo saludos('Javier');