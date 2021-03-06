<?php

/**
 * Extraer una parte de una variable
 * Comunmente usado en paginas web para el
 * ver mas...
 */

 $texto = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora libero dolor sunt quam totam ipsum, eveniet saepe, laborum nulla odio quos. Impedit beatae laudantium quae itaque eius optio voluptatum aut.';

 $extract = substr($texto, 0 , 20);

 echo "$extract... [Ver mas]";

/**
 * Convertir strings en arrays
 */

 $string = 'java, laravel, php, javascript';

 $tags = explode(', ', $string);

 echo "<pre>";

 var_dump($tags);

 /**
  * Convertir array en un string
  */

  $lenguajes = ['javascript', 'php', 'laravel'];

  echo implode(', ', $lenguajes);

/**
 * Eliminar espacios en php
 * trim($string) -- Esta funcion quita los espacios a
 * la izquierda y a la derecha de un string
 * ltrim($string) y rtrim($string) quita los
 * espacios a la izquierda de un string y a
 * la derecha respectivamente (left & right)
 */

 $cursos = "        Curso de php        ";

 $cursos = trim($cursos);

 echo "<pre>";

 echo "Quiero aprender $cursos, y otro texto";