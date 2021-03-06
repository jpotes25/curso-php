<?php


/**
 * Una expresion regular es una comparacion
 * una serie de reglas para validar un valor
 * por ejempmlo una contraseña
 * 
 * Tienen un orden
 * 
 * Todo debe ir dentro de un contenedor //
 * Debe tener un inicio ^
 * Debe tener un final $
 * Tiene un rango -
 * Tiene un patron []
 * y tiene una condicion {}
 */

 $password = '12345';
 $password1 = '123456a';
 $password2 = '1234567';


 /**
  * En el bloque de esta expresion vemos que 
  * solo aceptamos numeros del 0 al 9 y en
  * el condicional vemos que solo aceptamos
  * entre 6 y 9 caracteres
  */
 echo preg_match('/^[0-9]{6,9}$/', $password);
 echo preg_match('/^[0-9]{6,9}$/', $password1);
 echo preg_match('/^[0-9]{6,9}$/', $password2);
