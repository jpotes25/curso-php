<?php


/**
 * Funciones anonimas, se usan con variables que requieren logica
 */
$greet = function ($name)
{
    return "Hola, $name";
};

echo $greet('David');

/**
 * Los closures son llamados "callbacks"
 * Lo que hacen es pedir como parametro en una funcion, otra funcion anonima
 * a diferencia de un parametro normal, un closure permite solo funciones
 * anonimas, ningun otro valor.
 * 
 */

 function greet(Closure $lang, $name)
 {
     return $lang($name);
 };

 $es = function($name)
 {
     return "Hola $name";
 };

 $en = function ($name)
 {
     return "Hello, $name";
 };

 echo greet($es, 'David');
 echo greet($en, 'David');
