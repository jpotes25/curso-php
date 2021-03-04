<?php
//Estructuras de control


//If : Nos permite comparar dos caminos y tomar alguno
echo "if";
$num1 = 20;
if($num1 > 10) {
    echo "si se cumple la condicion";
}

#Else : Si la condicion del if no se cumple, pasa a ejecutar
#el bloque else
echo "else ";
$num2 = 4;
if ($num2 > 10) {
    echo "se cumple la condicion, pasa el if";
}else{
    echo "no se cumple la condicion, pasa al else";
}

/**
 * ElseIf: si no se comple la condicion del if, se ejecuta un else
 * al else se le puede añadir un if para hacer otra comparacion
 * */
echo "else if";
$num3 = 2;
if ($num3 > 10) {
    echo "se cumple la condicion pasa el primer if";
}elseif ($num3 < 10) {
    echo "se cumple la segunda condicion, paasa al segundo if";
}else{
    echo "no se cumple ninguna condicion, pasa el else";
}

/**
 * Si tenemos que anidar varios if por alguna razon, podemos ordenarlo mejor
 * si usamos la estructura Switch.
 * la desicion se toma atraves de una variable, cada valor que puede tomar
 * la variable es un caso.
 * 
 * Cada caso termina con un break, para poder salir del switch
 * El caso default funciona por si la variable toma algun valor que no teniamos
 * en mente.
 */

$aprendiendo = true;
 switch ($aprendiendo) {
     case false:
        echo "la variable tiene el valor de false, pasa al caso false";
        break;
     case true:
        echo "la variable tiene el valor de true, pasa al caso true ";
         break;
     default:
         echo " la variable no toma ningun valor esperado, pasa al default";
         break;
 }


 // Ciclos

 //foreach : Lo usamos al consultar datos
 $numeros = ['1','2','3','4'];
 foreach ($numeros as $value) {
     $value;
 }

 //while : Repetir un bloque hasta que se cumpla una condicion
$cont = 0;
 while ($cont <= 10) {
     echo $cont;
     $cont++;
 }

 //do while : Realizamos una accion y despues ejecutamos un while
$cont2 = 0;
do {
    echo $cont2;
    $cont2++;
} while ($cont2 <= 10);

//for : hacemos un ciclo con parametros
for ($i=0; $i < 10; $i++) { 
    echo $i;
}