<?php


/**
 * En comillas simples podemos escribir texto
 * para escribir algunos caracteres especiales
 * como la propia comilla simple debemos
 * colocar un aviso, el cual es un backslash
 * justo antes del caracter
 * 
 * Con comillas simples no podemos imprimir
 * variables en un echo
 */

echo 'texto de una linea
varias lineas \' <br> backslash \\ <br>
';

/**
 * con comillas dobles podemos escribir variables
 * en nuestra misma linea
 * 
 */

 $name = 'David';

 echo "mi nombre es $name <br>";


 /**
  * estruc
  * Cuando una estructura es compleja debemos
  * usar llaves al inicio y al final de la estructura
  */

  $cursos = [
      'backend' => [
          'PHP',
          'Laravel'
      ]
    ];

  echo "{$cursos['backend'][0]}";


/**
 * Clases y objetos
 */

 Class User{
    public $name = 'David';
 }

 $user = new User;

 echo "<br> $user->name es el estudiante de php
 en el curso de {$cursos['backend'][0]}";