<?php

// Alterar

$text = "PHP es UN LENGUAJE<br>";

echo strtolower($text);

echo strtoupper($text);

echo ucfirst($text);

echo lcfirst($text);


/**
 * Reemplazar algo de un string
 */

 $slug = str_replace(' ', '-', $text);

 echo $slug;

 /**
  * Añadir caracteres a un codigo para rellenar
  */

  $code = 39;
  echo str_pad($code, 8, '#', STR_PAD_LEFT);


/**
 * Poder quitar (strip_tags) o poner etiquetas HTML
 */

 $etiquetado = "<h1> hola mundo </h1>";

 echo $etiquetado;
 echo strip_tags($etiquetado);

 /**
  * Elementos monobyte y multibyte
  * Muchas veces nuestros sistemas no estan
  * preparados para caracteres especiales
  * si necesitamos enviar uno y no esta
  * usamos el mb para indicarle que hay
  * caracteres especiales
  */

  $texto = "<br>Hola qué tal niños ";

  echo strtoupper($texto); 

  echo mb_strtoupper($texto);


